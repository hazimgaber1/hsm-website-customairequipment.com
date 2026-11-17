<?php
// Prints the product catalog and company settings as JSON for tools/make-pdfs.py.
define('ROOT', dirname(__DIR__)); define('DATA_DIR', ROOT . '/data');
require ROOT . '/inc/settings.php'; require ROOT . '/inc/catalog.php';
echo json_encode(['products' => PRODUCTS, 'markets' => MARKETS, 'settings' => settings()], JSON_UNESCAPED_UNICODE);
