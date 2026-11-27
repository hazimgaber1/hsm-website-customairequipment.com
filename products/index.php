<?php
require dirname(__DIR__) . '/inc/bootstrap.php';
page_head([
    'title' => 'Products',
    'description' => 'Custom air handling units, fan arrays, industrial fans and retrofit knockdown units, each built to order.',
    'path' => 'products',
    'crumbs' => [['Products', 'products']],
]);
?>
<section class="page-hero">
  <div class="wrap">
    <?= kicker('004', 'products') ?>
    <h1>Built to order. Every one.</h1>
    <p class="lede">Four product lines, each selected and drawn for a single project, plus standard quick-ship models when the schedule is tight. Download a data sheet or design a unit in 3D.</p>
  </div>
</section>
<section class="section-tight">
  <div class="wrap grid-2">
    <?php foreach (PRODUCTS as $slug => $p): ?>
    <a class="photo-card" href="<?= e(url('products/' . $slug)) ?>">
      <?= photo($p['photo']) ?>
      <div class="pc-body"><span class="pc-code"><?= e($p['code']) ?></span><h3><?= e($p['name']) ?></h3><p><?= e($p['lede']) ?></p></div>
    </a>
    <?php endforeach; ?>
  </div>
</section>
<section class="section-tight"><div class="wrap">
  <div class="qs-band">
    <div><?= kicker('qs', 'quick ship') ?><h2>Need it sooner? Quick-ship models.</h2><p>Standard indoor AHUs, outdoor DOAS units, double-deck ERVs and fan wall modules, built from stocked sections.</p></div>
    <a class="btn btn-signal btn-lg" href="<?= e(url('products/quick-ship')) ?>">See quick-ship models</a>
  </div>
</div></section>
<?php page_foot(); ?>
