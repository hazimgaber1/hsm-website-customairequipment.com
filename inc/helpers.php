<?php
// Small helpers shared by pages, the guide template and the admin panel.

function e(?string $s): string
{
    return htmlspecialchars((string) $s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * Site-relative link. Pages are served without the .php extension (see .htaccess).
 * When STATIC_EXPORT is defined (tools/export-static.php) links point at .html files instead.
 */
function url(string $path = ''): string
{
    $path = trim($path, '/');
    if (defined('STATIC_EXPORT')) {
        $depth = substr_count(trim((string) ($GLOBALS['EXPORT_PAGE'] ?? ''), '/'), '/');
        $prefix = str_repeat('../', $depth);
        if ($path === '' ) return $prefix . 'index.html';
        if (str_starts_with($path, 'assets/') || preg_match('~\.(css|js|pdf|png|jpe?g|webp|svg|xml|txt|ico)$~', $path)) return $prefix . $path;
        $hash = '';
        if (($p = strpos($path, '#')) !== false) { $hash = substr($path, $p); $path = substr($path, 0, $p); }
        if ($path === '') return $hash;
        $q = '';
        if (($p = strpos($path, '?')) !== false) { $q = substr($path, $p); $path = substr($path, 0, $p); }
        return $prefix . (is_dir(ROOT . '/' . $path) ? $path . '/index.html' : $path . '.html') . $q . $hash;
    }
    return '/' . $path;
}

function abs_url(string $path = ''): string
{
    return rtrim(setting('site_url'), '/') . '/' . ltrim($path, '/');
}

function asset(string $path): string
{
    $file = ROOT . '/assets/' . $path;
    $v = is_file($file) ? '?v=' . filemtime($file) : '';
    return url('assets/' . $path) . (defined('STATIC_EXPORT') ? '' : $v);
}

/** Photos. Served from assets/img when downloaded (tools/fetch-images.php), otherwise from the generator's CDN. */
const PHOTOS = [
    'factory-ahu'        => ['611838d9-5d81-4970-a13a-dd0ba63353b0', '20261117_020555', 'Custom air handling unit with an access door open on the fabrication floor', 1344, 752],
    'fan-array'          => ['34c694ac-09cd-4df0-ac0f-8a5a0c5d699f', '20261117_020554', 'Nine direct-drive plenum fans arranged as a fan array', 1168, 880],
    'industrial-fan'     => ['077d34c2-96db-4e03-beec-1398b00cba92', '20261117_020553', 'Belt-driven industrial centrifugal fan on a steel base', 1168, 880],
    'knockdown'          => ['a537fecd-6930-4dd0-b151-9245a1cd65c2', '20261117_020553', 'Technicians reassembling a knockdown air handler in a basement mechanical room', 1168, 880],
    'rooftop-lift'       => ['5231b8e9-84d0-43da-b292-88deabd1f7c0', '20261117_020554', 'Crane lifting an outdoor air handler onto a hospital roof', 1344, 752],
    'test-cell'          => ['37d89c35-9abc-4827-87a2-441882750ef9', '20261117_020554', 'Air handler connected to an airflow test duct in the factory test cell', 1168, 880],
    'coil-shop'          => ['4387f305-1c92-4fd3-adf8-13eb96478ea6', '20261117_020553', 'Brazing a copper tube, aluminium fin coil', 1168, 880],
    'hospital-penthouse' => ['1461cda7-1e43-438f-ad09-ee4d9b2659ef', '20261117_020553', 'Two custom air handlers in a hospital mechanical penthouse', 1344, 752],
    'data-center'        => ['7b2d64ae-8eaa-41dc-b2df-50731e2d5f00', '20261117_020554', 'Air handlers along the wall of a data hall', 1168, 880],
    'erv-wheel'          => ['43fe07c2-2322-4d9a-aeed-d1493bdec6a4', '20261117_020553', 'Energy recovery wheel seen through an open access door', 1168, 880],
];

function photo_src(string $key): string
{
    [$id, $stamp] = PHOTOS[$key];
    foreach (['webp', 'jpg', 'png'] as $ext) {
        if (is_file(ROOT . "/assets/img/$key.$ext")) {
            return url("assets/img/$key.$ext");
        }
    }
    return "https://d8j0ntlcm91z4.cloudfront.net/user_3Kcn3oyktEAx3ui6GX6YEIMKn3D/hf_{$stamp}_{$id}.png";
}

function photo(string $key, string $class = '', bool $eager = false): string
{
    [, , $alt, $w, $h] = PHOTOS[$key];
    return sprintf('<img src="%s" alt="%s" width="%d" height="%d" class="%s" %s decoding="async">',
        e(photo_src($key)), e($alt), $w, $h, e($class), $eager ? 'fetchpriority="high"' : 'loading="lazy"');
}

function csrf_token(): string
{
    if (empty($_SESSION['csrf'])) {
        $_SESSION['csrf'] = bin2hex(random_bytes(16));
    }
    return $_SESSION['csrf'];
}

function csrf_field(): string
{
    return '<input type="hidden" name="csrf" value="' . e(csrf_token()) . '">';
}

function csrf_ok(): bool
{
    return isset($_POST['csrf'], $_SESSION['csrf']) && hash_equals($_SESSION['csrf'], (string) $_POST['csrf']);
}

function redirect(string $to): never
{
    header('Location: ' . $to, true, 303);
    exit;
}

function post(string $key, int $max = 2000): string
{
    return mb_substr(trim((string) ($_POST[$key] ?? '')), 0, $max);
}

function tel_href(string $phone): string
{
    $digits = preg_replace('/\D+/', '', $phone);
    return 'tel:+' . (strlen($digits) === 10 ? '1' . $digits : $digits);
}

/** Plain-text email via PHP mail(). Returns false when the server has no mailer; the request is still saved. */
function send_mail(string $to, string $subject, string $body, string $replyTo = ''): bool
{
    if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    $headers = [
        'From: ' . setting('company_name') . ' <' . setting('mail_from') . '>',
        'Content-Type: text/plain; charset=UTF-8',
    ];
    if ($replyTo && filter_var($replyTo, FILTER_VALIDATE_EMAIL)) {
        $headers[] = 'Reply-To: ' . $replyTo;
    }
    return @mail($to, '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, implode("\r\n", $headers));
}

/** Guide topic map (data/guide-topics.json), indexed by slug. */
function guide_data(): array
{
    static $d = null;
    if ($d === null) {
        $raw = json_decode((string) @file_get_contents(CONTENT_DIR . '/guide-topics.json'), true) ?: ['categories' => [], 'guides' => []];
        $d = ['categories' => [], 'guides' => []];
        foreach ($raw['categories'] as $c) {
            $d['categories'][$c['slug']] = $c;
        }
        foreach ($raw['guides'] as $g) {
            if (is_file(ROOT . '/guides/' . $g['slug'] . '.php')) {
                $d['guides'][$g['slug']] = $g;
            }
        }
    }
    return $d;
}

function guides_in(string $category): array
{
    return array_filter(guide_data()['guides'], fn($g) => $g['category'] === $category);
}
