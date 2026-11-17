<?php
require dirname(__DIR__) . '/inc/bootstrap.php';
page_head([
    'title' => 'Markets',
    'description' => 'Custom air handlers and fans for healthcare, laboratories, data centers, cleanrooms, pharmaceutical, education, commercial and industrial buildings.',
    'path' => 'markets',
    'crumbs' => [['Markets', 'markets']],
]);
?>
<section class="page-hero"><div class="wrap"><?= kicker('005', 'markets') ?><h1>Where the requirements are strict.</h1><p class="lede">What each kind of building asks of an air handler, and what we usually put in the box.</p></div></section>
<section class="section-tight"><div class="wrap grid-4">
<?php foreach (MARKETS as $slug => $mk): ?>
  <a class="photo-card" href="<?= e(url('markets/' . $slug)) ?>"><?= photo($mk[1]) ?><div class="pc-body"><h3><?= e($mk[0]) ?></h3><p><?= e($mk[2]) ?></p></div></a>
<?php endforeach; ?>
</div></section>
<?php page_foot(); ?>
