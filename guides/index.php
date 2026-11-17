<?php
require dirname(__DIR__) . '/inc/bootstrap.php';
$d = guide_data();
page_head([
    'title' => 'Engineering guides for air handling units and fans',
    'description' => 'A library of practical guides on selecting, specifying, installing and maintaining custom air handling units, fan arrays and industrial fans.',
    'path' => 'guides',
    'crumbs' => [['Guides', 'guides']],
]);
?>
<section class="page-hero"><div class="wrap">
  <?= kicker(count($d['guides']) . ' guides', 'engineering library') ?>
  <h1>The air handler guide library.</h1>
  <p class="lede">Practical answers for engineers, contractors and facility teams, from fan laws to filter changes, written by the people who build the equipment.</p>
  <div class="guide-search"><label class="visually-hidden" for="guide-q">Search the guides</label><input id="guide-q" type="search" placeholder="Search <?= count($d['guides']) ?> guides, e.g. coil face velocity"></div>
</div></section>
<section class="section-tight"><div class="wrap">
  <div class="cat-grid" id="cat-grid">
    <?php foreach ($d['categories'] as $slug => $c): $n = count(guides_in($slug)); if (!$n) continue; ?>
    <a class="cat-card" href="<?= e(url('guides/' . $slug)) ?>"><span class="count"><?= $n ?> guides</span><h3><?= e($c['name']) ?></h3><span class="muted"><?= e($c['intro']) ?></span></a>
    <?php endforeach; ?>
  </div>
  <h2 style="font-size:1.6rem;margin:56px 0 18px">Every guide</h2>
  <p id="guide-empty" class="muted" hidden>No guides match that search.</p>
  <ul class="card-list">
    <?php foreach ($d['guides'] as $g): ?>
    <li data-guide="<?= e(strtolower($g['title'] . ' ' . implode(' ', $g['keywords'] ?? []))) ?>"><a class="card-link" href="<?= e(url('guides/' . $g['slug'])) ?>"><span class="label"><?= e($d['categories'][$g['category']]['name'] ?? '') ?></span><b><?= e($g['title']) ?></b></a></li>
    <?php endforeach; ?>
  </ul>
</div></section>
<?php page_foot(); ?>
