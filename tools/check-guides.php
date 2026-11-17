<?php
// Checks guide files against the topic map: php tools/check-guides.php [category]
// Reports missing files, slug mismatches, short guides, too few sections and repeated paragraphs.
$root = dirname(__DIR__);
$map = json_decode(file_get_contents("$root/data/guide-topics.json"), true);
$only = $argv[1] ?? null;
$problems = 0; $done = 0; $words = 0; $seen = [];
foreach ($map['guides'] as $g) {
    if ($only && $g['category'] !== $only) continue;
    $f = "$root/guides/{$g['slug']}.php";
    if (!is_file($f)) { echo "MISSING  {$g['slug']}\n"; $problems++; continue; }
    $src = file_get_contents($f);
    $out = [];
    exec('php -l ' . escapeshellarg($f) . ' 2>&1', $out, $rc);
    if ($rc) { echo "SYNTAX   {$g['slug']}: " . implode(' ', $out) . "\n"; $problems++; continue; }
    if (!str_contains($src, "guide_start('{$g['slug']}')")) { echo "SLUG     {$g['slug']}: guide_start() slug does not match the file name\n"; $problems++; }
    $text = strip_tags(preg_replace('~<\?(php|=).*?\?>~s', ' ', $src));
    $wc = str_word_count($text);
    $h2 = substr_count($src, '<h2');
    if ($wc < 600) { echo "SHORT    {$g['slug']}: $wc words\n"; $problems++; }
    if ($h2 < 3) { echo "SECTIONS {$g['slug']}: $h2 h2 headings\n"; $problems++; }
    preg_match_all('~<p[^>]*>(.*?)</p>~s', $src, $m);
    foreach ($m[1] as $p) {
        $k = strtolower(preg_replace('~\W+~', ' ', strip_tags($p)));
        if (str_word_count($k) < 12) continue;
        if (isset($seen[$k]) && $seen[$k] !== $g['slug']) { echo "REPEAT   {$g['slug']}: paragraph also in {$seen[$k]}\n"; $problems++; }
        $seen[$k] = $g['slug'];
    }
    $done++; $words += $wc;
}
echo "\n$done guides checked, " . number_format($words) . " words, $problems problems\n";
exit($problems ? 1 : 0);
