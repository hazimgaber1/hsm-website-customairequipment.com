<?php
require __DIR__ . '/inc/bootstrap.php';
page_head([
    'title' => 'Photo gallery',
    'description' => 'Custom air handling units, fan arrays, coils and industrial fans in the factory, in the test cell and on site.',
    'path' => 'gallery',
    'image' => 'fab-floor',
    'crumbs' => [['Photo gallery', 'gallery']],
]);
$groups = [
    'In the factory' => ['fab-floor', 'factory-ahu', 'coil-shop', 'coil-closeup', 'controls-panel', 'test-cell'],
    'Inside the unit' => ['fan-array', 'erv-wheel', 'plate-hx', 'attenuator', 'cleanroom-ahu', 'industrial-fan'],
    'On site' => ['rooftop-lift', 'truck-delivery', 'hospital-penthouse', 'lab-rooftop', 'school-roof', 'data-center', 'knockdown', 'industrial-exhaust', 'startup-tech', 'engineers'],
];
?>
<section class="page-hero"><div class="wrap"><?= kicker('img', 'photo gallery') ?><h1>Built here. Working there.</h1>
<p class="lede">A look at the units we build, from casing panels on the factory floor to fan arrays running on hospital and lab roofs.</p></div></section>
<?php $n = 0; foreach ($groups as $title => $keys): $n++; ?>
<section class="section<?= $n % 2 ? '' : ' white' ?>"><div class="wrap">
  <?= kicker(sprintf('%03d', $n), strtolower($title)) ?><h2><?= e($title) ?></h2>
  <ul class="gallery">
    <?php foreach ($keys as $k): ?>
    <li><figure><?= photo($k) ?><figcaption><?= e(PHOTOS[$k][2]) ?></figcaption></figure></li>
    <?php endforeach; ?>
  </ul>
</div></section>
<?php endforeach; ?>
<?php page_foot(); ?>
