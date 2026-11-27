<?php
/*
 * Renders every public page to plain .html for a static preview: php tools/export-static.php OUT_DIR
 * Forms, the admin panel and anything else that needs PHP will not work in the export.
 * Internal use: php tools/export-static.php --page REL_PATH renders one page to stdout.
 */
$root = dirname(__DIR__);

if (($argv[1] ?? '') === '--page') {
    $rel = $argv[2];
    define('STATIC_EXPORT', true);
    $GLOBALS['EXPORT_PAGE'] = $rel;
    $_SERVER['REQUEST_URI'] = '/' . preg_replace('~(index)?\.php$~', '', $rel);
    $_SERVER['REQUEST_METHOD'] = 'GET';
    chdir(dirname($root . '/' . $rel));
    require $root . '/' . $rel;
    exit;
}

$out = rtrim($argv[1] ?? '', '/');
if ($out === '') { fwrite(STDERR, "usage: php tools/export-static.php OUT_DIR\n"); exit(1); }

$skip = '~^(inc|admin|tools|data|assets)/|(^|/)_|^(quote-submit|newsletter-submit|sitemap|cron)\.php$~';
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS));
$n = 0;
foreach ($it as $f) {
    $rel = substr($f->getPathname(), strlen($root) + 1);
    if (!str_ends_with($rel, '.php') || preg_match($skip, $rel) || str_starts_with($rel, '.')) continue;
    $html = shell_exec(escapeshellarg(PHP_BINARY) . ' ' . escapeshellarg(__FILE__) . ' --page ' . escapeshellarg($rel) . ' 2>&1');
    $dest = $out . '/' . substr($rel, 0, -4) . '.html';
    @mkdir(dirname($dest), 0777, true);
    file_put_contents($dest, $html);
    $n++;
}
// Copy assets.
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root . '/assets', FilesystemIterator::SKIP_DOTS));
foreach ($it as $f) {
    $dest = $out . '/assets/' . substr($f->getPathname(), strlen($root . '/assets') + 1);
    @mkdir(dirname($dest), 0777, true);
    copy($f->getPathname(), $dest);
}
echo "Exported $n pages to $out\n";
