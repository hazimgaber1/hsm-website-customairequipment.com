<?php
// Shared setup for every public page and admin page.
declare(strict_types=1);

define('ROOT', dirname(__DIR__));
// Read-only content shipped in git (guide-topics.json).
define('CONTENT_DIR', ROOT . '/data');
// Writable files (SQLite database, settings). On AWS this is a mounted EFS folder outside the web root.
define('DATA_DIR', rtrim((string) (getenv('SITE_DATA_DIR') ?: ROOT . '/data'), '/'));

if (session_status() === PHP_SESSION_NONE && PHP_SAPI !== 'cli') {
    session_set_cookie_params(['httponly' => true, 'samesite' => 'Lax', 'secure' => !empty($_SERVER['HTTPS'])]);
    session_start();
}

require_once __DIR__ . '/settings.php';
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/catalog.php';
require_once __DIR__ . '/layout.php';
