<?php
// Downloads the site photos from the image generator's CDN into assets/img so the site serves them itself.
// Run once from a machine with internet access: php tools/fetch-images.php
define('ROOT', dirname(__DIR__));
require ROOT . '/inc/helpers.php';
foreach (PHOTOS as $key => [$id, $stamp]) {
    $dest = ROOT . "/assets/img/$key.png";
    if (is_file($dest)) { echo "have $key\n"; continue; }
    $data = @file_get_contents("https://d8j0ntlcm91z4.cloudfront.net/user_3Kcn3oyktEAx3ui6GX6YEIMKn3D/hf_{$stamp}_{$id}.png");
    if ($data === false || strlen($data) < 1000) { echo "FAILED $key\n"; continue; }
    file_put_contents($dest, $data);
    echo "saved $key (" . round(strlen($data) / 1024) . " KB)\n";
}
