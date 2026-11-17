<?php
// Shared builders for product and market landing pages. Each page file passes its own copy.

require_once __DIR__ . '/bootstrap.php';

/**
 * @param array $features list of [heading, paragraph, [bullets], photo-key]
 * @param array $faq      list of [question, answer]
 */
function product_page(string $slug, string $headline, string $intro, array $features, array $faq = []): void
{
    $p = PRODUCTS[$slug];
    page_head([
        'title' => $p['name'],
        'description' => $p['lede'],
        'path' => 'products/' . $slug,
        'image' => $p['photo'],
        'crumbs' => [['Products', 'products'], [$p['name'], 'products/' . $slug]],
        'schema' => [[
            '@context' => 'https://schema.org', '@type' => 'Product', 'name' => setting('company_name') . ' ' . $p['code'] . ' ' . $p['name'],
            'description' => $p['lede'], 'brand' => ['@type' => 'Brand', 'name' => setting('company_name')],
            'image' => photo_src($p['photo']), 'category' => 'HVAC equipment',
        ]],
    ]);
    ?>
<section class="page-hero">
  <div class="wrap page-hero-split">
    <div>
      <?= kicker($p['code'], strtolower($p['name'])) ?>
      <h1><?= e($headline) ?></h1>
      <p class="lede"><?= e($intro) ?></p>
      <div class="hero-actions" style="margin-top:28px">
        <a class="btn btn-primary btn-lg" href="<?= e(url('contact?type=' . urlencode($p['name']))) ?>">Get a quote</a>
        <a class="btn btn-ghost btn-lg" href="<?= e(url('assets/pdf/' . $p['pdf'])) ?>">Data sheet (PDF)</a>
      </div>
    </div>
    <?= photo($p['photo'], '', true) ?>
  </div>
</section>
<section class="section-tight white">
  <div class="wrap feature">
    <div class="body">
      <?= kicker('001', 'at a glance') ?>
      <h2>Specifications</h2>
      <p class="muted">Typical ranges. Every unit is selected for its project, and the submittal is the final word.</p>
    </div>
    <dl class="specs">
      <?php foreach ($p['specs'] as $k => $v): ?><div><dt><?= e($k) ?></dt><dd><?= e($v) ?></dd></div><?php endforeach; ?>
    </dl>
  </div>
</section>
<section class="section">
  <div class="wrap">
    <?php foreach ($features as $i => [$h, $text, $bullets, $img]): ?>
    <div class="feature<?= $i % 2 ? ' flip' : '' ?>">
      <div class="body">
        <?= kicker(sprintf('%03d', $i + 2), 'details') ?>
        <h2><?= e($h) ?></h2>
        <p class="lede"><?= e($text) ?></p>
        <?php if ($bullets): ?><ul class="ticks"><?php foreach ($bullets as $b): ?><li><?= e($b) ?></li><?php endforeach; ?></ul><?php endif; ?>
      </div>
      <?= photo($img) ?>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<?php if ($faq): ?>
<section class="section white">
  <div class="wrap faq" style="max-width:900px">
    <h2 style="margin-bottom:28px">Questions engineers ask about <?= e(strtolower($p['short'])) ?></h2>
    <?php foreach ($faq as [$q, $a]): ?><details><summary><?= e($q) ?></summary><p><?= e($a) ?></p></details><?php endforeach; ?>
    <script type="application/ld+json"><?= json_encode(['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => array_map(fn($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faq)], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
  </div>
</section>
<?php endif; ?>
<?php
    page_foot();
}

function market_page(string $slug, string $headline, string $intro, array $challenges, array $products, array $guideCats = []): void
{
    [$name, $img, $short, $build] = MARKETS[$slug];
    page_head([
        'title' => 'Custom air handlers for ' . strtolower($name),
        'description' => $short,
        'path' => 'markets/' . $slug,
        'image' => $img,
        'crumbs' => [['Markets', 'markets'], [$name, 'markets/' . $slug]],
    ]);
    $guides = [];
    foreach ($guideCats as $c) {
        $guides = array_merge($guides, array_slice(array_values(guides_in($c)), 0, 6));
    }
    ?>
<section class="page-hero">
  <div class="wrap page-hero-split">
    <div>
      <?= kicker('market', strtolower($name)) ?>
      <h1><?= e($headline) ?></h1>
      <p class="lede"><?= e($intro) ?></p>
      <div class="hero-actions" style="margin-top:28px">
        <a class="btn btn-primary btn-lg" href="<?= e(url('contact')) ?>">Talk to an engineer</a>
        <a class="btn btn-ghost btn-lg" href="<?= e(url('design')) ?>">Design in 3D</a>
      </div>
    </div>
    <?= photo($img, '', true) ?>
  </div>
</section>
<section class="section white">
  <div class="wrap">
    <div class="sec-head"><div><?= kicker('001', 'the challenge') ?><h2>What <?= e(strtolower($name)) ?> asks of an air handler.</h2></div></div>
    <div class="grid-3">
      <?php foreach ($challenges as $i => [$h, $t]): ?>
      <div class="card"><span class="num"><?= sprintf('%02d', $i + 1) ?></span><h3><?= e($h) ?></h3><p><?= e($t) ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<section class="section">
  <div class="wrap feature">
    <div class="body">
      <?= kicker('002', 'what we build') ?>
      <h2>What usually goes in the box.</h2>
      <ul class="ticks"><?php foreach ($build as $b): ?><li><?= e($b) ?></li><?php endforeach; ?></ul>
    </div>
    <div class="grid-2">
      <?php foreach ($products as $ps): $p = PRODUCTS[$ps]; ?>
      <a class="card-link" href="<?= e(url('products/' . $ps)) ?>"><span class="label"><?= e($p['code']) ?></span><b><?= e($p['name']) ?></b></a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php if ($guides): ?>
<section class="section-tight">
  <div class="wrap">
    <h2 style="font-size:1.8rem;margin-bottom:20px">Guides for <?= e(strtolower($name)) ?> projects</h2>
    <ul class="card-list"><?php foreach ($guides as $g): ?><li><a class="card-link" href="<?= e(url('guides/' . $g['slug'])) ?>"><span class="label"><?= e($g['type']) ?></span><b><?= e($g['title']) ?></b></a></li><?php endforeach; ?></ul>
  </div>
</section>
<?php endif; ?>
<?php
    page_foot();
}

/** Simple text page (legal, careers, about subsections). */
function text_page(array $meta, string $kickerText, string $h1, string $html): void
{
    page_head($meta);
    ?>
<section class="page-hero"><div class="wrap"><?= kicker('cae', $kickerText) ?><h1><?= e($h1) ?></h1></div></section>
<section class="section-tight white"><div class="wrap"><div class="prose"><?= $html ?></div></div></section>
<?php
    page_foot();
}
