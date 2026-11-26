<?php
/*
 * Template for the engineering guides. Each file in guides/ is one guide: it requires this file,
 * calls guide_start('slug'), outputs the article HTML (h2, h3, p, ul, ol, table, .note, .formula),
 * then calls guide_end() with its FAQ pairs.
 */
// Title, description, category and keywords come from data/guide-topics.json.

require_once __DIR__ . '/bootstrap.php';

const GUIDE_PRODUCT_LINKS = [
    'fans-fan-arrays' => 'fan-arrays', 'motors-drives' => 'fan-arrays', 'industrial-process' => 'industrial-fans',
    'retrofit-replacement' => 'retrofit-knockdown', 'installation-startup' => 'retrofit-knockdown',
];

function guide_meta(string $slug): array
{
    $raw = json_decode((string) file_get_contents(CONTENT_DIR . '/guide-topics.json'), true);
    foreach ($raw['guides'] as $g) {
        if ($g['slug'] === $slug) {
            foreach ($raw['categories'] as $c) {
                if ($c['slug'] === $g['category']) {
                    $g['category_name'] = $c['name'];
                }
            }
            return $g;
        }
    }
    http_response_code(404);
    exit('Guide not found');
}

function guide_start(string $slug): void
{
    $g = guide_meta($slug);
    $GLOBALS['GUIDE'] = $g;
    $desc = rtrim($g['angle'], '.') . '.';
    page_head([
        'title' => $g['title'],
        'description' => mb_strimwidth($desc, 0, 158, '…'),
        'path' => 'guides/' . $slug,
        'crumbs' => [['Guides', 'guides'], [$g['category_name'], 'guides/' . $g['category']], [$g['title'], 'guides/' . $slug]],
        'schema' => [[
            '@context' => 'https://schema.org',
            '@type' => 'TechArticle',
            'headline' => $g['title'],
            'description' => $desc,
            'keywords' => implode(', ', $g['keywords'] ?? []),
            'about' => $g['category_name'],
            'author' => ['@type' => 'Organization', 'name' => setting('company_name')],
            'publisher' => ['@type' => 'Organization', 'name' => setting('company_name')],
            'mainEntityOfPage' => abs_url('guides/' . $slug),
        ]],
        'body_class' => 'page-guide',
    ]);
    ob_start();
}

function guide_end(array $faq = []): void
{
    $g = $GLOBALS['GUIDE'];
    $body = (string) ob_get_clean();

    // Give every h2 an id and build the table of contents from them.
    $toc = [];
    $body = preg_replace_callback('~<h2([^>]*)>(.*?)</h2>~s', function ($mm) use (&$toc) {
        $text = trim(strip_tags($mm[2]));
        $id = trim(preg_replace('~[^a-z0-9]+~', '-', strtolower($text)), '-');
        $toc[] = [$id, $text];
        return '<h2 id="' . $id . '"' . $mm[1] . '>' . $mm[2] . '</h2>';
    }, $body);

    $words = str_word_count(strip_tags($body));
    $minutes = max(2, (int) round($words / 220));
    $siblings = array_values(array_filter(guides_in($g['category']), fn($x) => $x['slug'] !== $g['slug']));
    // Pick neighbours around this guide's place in its category so related links vary page to page.
    $pos = 0;
    foreach (array_values(guides_in($g['category'])) as $i => $x) {
        if ($x['slug'] === $g['slug']) { $pos = $i; }
    }
    $related = [];
    for ($k = 0; $k < count($siblings) && count($related) < 5; $k++) {
        $related[] = $siblings[($pos + $k) % count($siblings)];
    }
    $product = GUIDE_PRODUCT_LINKS[$g['category']] ?? 'custom-air-handlers';
    ?>
<article class="guide wrap">
  <header class="guide-head">
    <p class="kicker"><span class="k-num"><?= e(strtoupper($g['type'] ?? 'guide')) ?></span><span class="k-txt"><a href="<?= e(url('guides/' . $g['category'])) ?>"><?= e($g['category_name']) ?></a></span></p>
    <h1><?= e($g['title']) ?></h1>
    <p class="guide-meta"><?= $minutes ?> min read · Reviewed by the <?= e(setting('company_name')) ?> applications team</p>
  </header>
  <div class="guide-grid">
    <aside class="guide-toc" aria-label="On this page">
      <?php if ($toc): ?>
      <p class="toc-h">On this page</p>
      <ol><?php foreach ($toc as [$id, $text]): ?><li><a href="#<?= e($id) ?>"><?= e($text) ?></a></li><?php endforeach; ?></ol>
      <?php endif; ?>
      <div class="toc-cta">
        <p>Have a project where this matters?</p>
        <a class="btn btn-primary" href="<?= e(url('contact')) ?>">Ask an engineer</a>
      </div>
    </aside>
    <div class="prose">
      <?= $body ?>
      <?php if ($faq): ?>
      <section class="guide-faq">
        <h2 id="faq">Common questions</h2>
        <?php foreach ($faq as [$q, $a]): ?>
        <details><summary><?= e($q) ?></summary><p><?= e($a) ?></p></details>
        <?php endforeach; ?>
        <script type="application/ld+json"><?= json_encode([
            '@context' => 'https://schema.org', '@type' => 'FAQPage',
            'mainEntity' => array_map(fn($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faq),
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
      </section>
      <?php endif; ?>
      <aside class="guide-product">
        <p class="label">Related product</p>
        <h3><a href="<?= e(url('products/' . $product)) ?>"><?= e(PRODUCTS[$product]['name']) ?></a></h3>
        <p><?= e(PRODUCTS[$product]['lede']) ?></p>
      </aside>
    </div>
  </div>
  <?php if ($related): ?>
  <section class="guide-related">
    <h2>More in <?= e($g['category_name']) ?></h2>
    <ul class="card-list">
      <?php foreach ($related as $r): ?>
      <li><a class="card-link" href="<?= e(url('guides/' . $r['slug'])) ?>"><span class="label"><?= e($r['type'] ?? 'guide') ?></span><b><?= e($r['title']) ?></b></a></li>
      <?php endforeach; ?>
    </ul>
  </section>
  <?php endif; ?>
</article>
<?php
    page_foot();
}
