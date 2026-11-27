<?php
/*
 * Google Search Console sync. Pulls search performance (clicks, impressions, CTR, position by
 * date, page, query, device and country) with a Google service account, keeps it in SQLite for
 * the admin panel, and forwards each day to the HSM ERP as "search_console" events.
 *
 * Configure with environment variables:
 *   GSC_CREDENTIALS   the service account's JSON key (the whole file), or
 *   GSC_CREDENTIALS_FILE  a path to that file
 *   GSC_SITE          the Search Console property, default sc-domain:customairequipment.com
 * The service account's email must be added as a user on that property in Search Console
 * (Owner, so it can also submit the sitemap).
 */
require_once __DIR__ . '/bootstrap.php';

function gsc_site(): string
{
    return (string) (getenv('GSC_SITE') ?: 'sc-domain:' . parse_url(setting('site_url'), PHP_URL_HOST));
}

function gsc_credentials(): ?array
{
    $raw = getenv('GSC_CREDENTIALS') ?: '';
    if ($raw === '' && ($f = getenv('GSC_CREDENTIALS_FILE')) && is_readable($f)) $raw = (string) file_get_contents($f);
    $c = $raw !== '' ? json_decode($raw, true) : null;
    return is_array($c) && !empty($c['client_email']) && !empty($c['private_key']) ? $c : null;
}

function gsc_configured(): bool
{
    return gsc_credentials() !== null;
}

function b64url(string $s): string
{
    return rtrim(strtr(base64_encode($s), '+/', '-_'), '=');
}

/** OAuth access token from the service account (JWT bearer grant). */
function gsc_token(): string
{
    static $tok = null;
    if ($tok) return $tok;
    $c = gsc_credentials();
    if (!$c) throw new RuntimeException('Search Console is not configured (GSC_CREDENTIALS is missing).');
    $now = time();
    $head = b64url(json_encode(['alg' => 'RS256', 'typ' => 'JWT']));
    $claims = b64url(json_encode([
        'iss' => $c['client_email'], 'scope' => 'https://www.googleapis.com/auth/webmasters',
        'aud' => 'https://oauth2.googleapis.com/token', 'iat' => $now, 'exp' => $now + 3600,
    ]));
    if (!openssl_sign("$head.$claims", $sig, $c['private_key'], 'sha256WithRSAEncryption')) throw new RuntimeException('Could not sign the Google token request. Check the private key.');
    $res = gsc_http('POST', 'https://oauth2.googleapis.com/token', http_build_query([
        'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer', 'assertion' => "$head.$claims." . b64url($sig),
    ]), 'application/x-www-form-urlencoded');
    if (empty($res['access_token'])) throw new RuntimeException('Google refused the service account: ' . ($res['error_description'] ?? $res['error'] ?? 'no token'));
    return $tok = $res['access_token'];
}

function gsc_http(string $method, string $url, ?string $body = null, string $type = 'application/json', ?string $token = null): array
{
    $headers = "Content-Type: $type\r\n" . ($token ? "Authorization: Bearer $token\r\n" : '');
    $ctx = stream_context_create(['http' => ['method' => $method, 'header' => $headers, 'content' => $body ?? '', 'timeout' => 30, 'ignore_errors' => true]]);
    $out = @file_get_contents($url, false, $ctx);
    if ($out === false) throw new RuntimeException("Could not reach $url");
    $status = (int) (preg_match('~ (\d{3}) ~', $http_response_header[0] ?? '', $m) ? $m[1] : 0);
    $json = $out === '' ? [] : (json_decode($out, true) ?? ['raw' => $out]);
    if ($status >= 400) throw new RuntimeException("Google returned $status: " . ($json['error']['message'] ?? $json['error_description'] ?? substr($out, 0, 200)));
    return $json;
}

function gsc_api(string $method, string $path, ?array $body = null): array
{
    $url = 'https://www.googleapis.com/webmasters/v3/sites/' . rawurlencode(gsc_site()) . $path;
    return gsc_http($method, $url, $body === null ? null : json_encode($body), 'application/json', gsc_token());
}

function gsc_db(): PDO
{
    $pdo = db();
    $pdo->exec('CREATE TABLE IF NOT EXISTS gsc_rows (
        date TEXT NOT NULL, page TEXT NOT NULL, query TEXT NOT NULL, device TEXT NOT NULL, country TEXT NOT NULL,
        clicks INTEGER NOT NULL, impressions INTEGER NOT NULL, ctr REAL NOT NULL, position REAL NOT NULL,
        PRIMARY KEY (date, page, query, device, country))');
    $pdo->exec('CREATE TABLE IF NOT EXISTS gsc_log (id INTEGER PRIMARY KEY AUTOINCREMENT, at TEXT NOT NULL, ok INTEGER NOT NULL, message TEXT)');
    return $pdo;
}

function gsc_log(bool $ok, string $msg): void
{
    gsc_db()->prepare('INSERT INTO gsc_log (at, ok, message) VALUES (?, ?, ?)')->execute([gmdate('c'), $ok ? 1 : 0, $msg]);
}

/** Pulls one day of data (all rows, paged), stores it, and forwards it to the ERP. Returns the row count. */
function gsc_sync_day(string $date): int
{
    $rows = [];
    for ($start = 0; ; $start += 25000) {
        $res = gsc_api('POST', '/searchAnalytics/query', [
            'startDate' => $date, 'endDate' => $date, 'dimensions' => ['page', 'query', 'device', 'country'],
            'rowLimit' => 25000, 'startRow' => $start, 'dataState' => 'final',
        ]);
        $batch = $res['rows'] ?? [];
        $rows = array_merge($rows, $batch);
        if (count($batch) < 25000) break;
    }
    $pdo = gsc_db();
    $pdo->beginTransaction();
    $pdo->prepare('DELETE FROM gsc_rows WHERE date = ?')->execute([$date]);
    $ins = $pdo->prepare('INSERT OR REPLACE INTO gsc_rows VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $out = [];
    foreach ($rows as $r) {
        [$page, $query, $device, $country] = $r['keys'];
        $ins->execute([$date, $page, $query, $device, $country, (int) $r['clicks'], (int) $r['impressions'], (float) $r['ctr'], (float) $r['position']]);
        $out[] = ['page' => $page, 'query' => $query, 'device' => $device, 'country' => $country,
            'clicks' => (int) $r['clicks'], 'impressions' => (int) $r['impressions'], 'ctr' => round((float) $r['ctr'], 4), 'position' => round((float) $r['position'], 2)];
    }
    $pdo->commit();
    // Forward to the ERP in chunks so each request stays small.
    $chunks = array_chunk($out, 500) ?: [[]];
    foreach ($chunks as $i => $chunk) {
        erp_track(['type' => 'search_console', 'site' => gsc_site(), 'date' => $date,
            'part' => $i + 1, 'parts' => count($chunks), 'rows' => $chunk]);
    }
    return count($rows);
}

/** Syncs the last $days days that Search Console has finalised (data lags about two to three days). */
function gsc_sync(int $days = 5): string
{
    $total = 0; $done = [];
    for ($d = $days + 2; $d >= 3; $d--) {
        $date = gmdate('Y-m-d', strtotime("-$d days"));
        $total += gsc_sync_day($date);
        $done[] = $date;
    }
    $msg = 'Synced ' . number_format($total) . ' rows for ' . $done[0] . ' to ' . end($done) . ' and sent them to the ERP.';
    gsc_log(true, $msg);
    return $msg;
}

function gsc_submit_sitemap(): string
{
    $map = rtrim(setting('site_url'), '/') . '/sitemap.xml';
    gsc_api('PUT', '/sitemaps/' . rawurlencode($map));
    $msg = "Submitted $map to Search Console.";
    gsc_log(true, $msg);
    return $msg;
}
