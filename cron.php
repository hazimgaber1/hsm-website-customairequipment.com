<?php
// Scheduled jobs, called daily by .github/workflows/scheduled.yml with the CRON_TOKEN secret.
require __DIR__ . '/inc/gsc.php';
header('Content-Type: application/json');
header('X-Robots-Tag: noindex');
$token = (string) getenv('CRON_TOKEN');
$given = (string) ($_SERVER['HTTP_X_CRON_TOKEN'] ?? '');
if ($token === '' || !hash_equals($token, $given)) {
    http_response_code(403);
    exit(json_encode(['ok' => false, 'error' => 'forbidden']));
}
set_time_limit(300);
$out = ['ok' => true];
try {
    if (!gsc_configured()) throw new RuntimeException('Search Console is not configured.');
    $out['search_console'] = gsc_sync(5);
    if ((int) gmdate('N') === 1) $out['sitemap'] = gsc_submit_sitemap(); // weekly, on Mondays
} catch (Throwable $e) {
    gsc_configured() && gsc_log(false, $e->getMessage());
    $out = ['ok' => false, 'error' => $e->getMessage()];
    http_response_code(500);
}
echo json_encode($out, JSON_UNESCAPED_SLASHES);
