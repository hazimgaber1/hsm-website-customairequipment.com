<?php
// Router for PHP's built-in server, mirroring .htaccess: php -S 127.0.0.1:8080 tools/router.php
$root = dirname(__DIR__);
$path = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if (preg_match('~^/(data|inc|tools)(/|$)|/_~', $path)) { http_response_code(403); exit('Forbidden'); }
if ($path === '/sitemap.xml') { require $root . '/sitemap.php'; return true; }
$file = $root . $path;
if ($path !== '/' && is_file($file) && !str_ends_with($file, '.php')) { return false; }
if (is_dir($file) && is_file(rtrim($file, '/') . '/index.php')) { chdir(rtrim($file, '/')); require rtrim($file, '/') . '/index.php'; return true; }
if (is_file($file . '.php')) { chdir(dirname($file . '.php')); require $file . '.php'; return true; }
http_response_code(404);
require $root . '/404.php';
