<?php
// XML sitemap of every public page, built from the files on disk.
require __DIR__ . '/inc/bootstrap.php';
header('Content-Type: application/xml; charset=utf-8');
$skip = ['404', 'thank-you', 'newsletter-submit', 'quote-submit', 'sitemap', 'cron'];
$urls = [];
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(ROOT, FilesystemIterator::SKIP_DOTS));
foreach ($it as $f) {
    $rel = substr($f->getPathname(), strlen(ROOT) + 1);
    if (!str_ends_with($rel, '.php') || preg_match('~^(inc|admin|tools|data|assets)/~', $rel)) continue;
    $path = preg_replace('~(/?index)?\.php$~', '', $rel);
    if (in_array($path, $skip, true)) continue;
    $urls[$path] = date('Y-m-d', $f->getMTime());
}
ksort($urls);
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n" . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($urls as $p => $mod) {
    echo '  <url><loc>' . e(abs_url($p)) . '</loc><lastmod>' . $mod . '</lastmod></url>' . "\n";
}
echo '</urlset>' . "\n";
