<?php
require dirname(__DIR__) . '/inc/bootstrap.php';
page_head([
    'title' => 'Quick-ship air handlers and fan walls',
    'description' => 'Standard quick-ship air handlers, outdoor DOAS units, double-deck ERVs and fan wall modules, built from stocked sections for short lead times.',
    'path' => 'products/quick-ship',
    'image' => 'truck-delivery',
    'crumbs' => [['Products', 'products'], ['Quick ship', 'products/quick-ship']],
    'schema' => [[
        '@context' => 'https://schema.org', '@type' => 'ItemList', 'name' => 'Quick-ship models',
        'itemListElement' => array_values(array_map(fn($k, $q) => ['@type' => 'ListItem', 'name' => $q['name']], array_keys(QUICK_SHIP), QUICK_SHIP)),
    ]],
]);
?>
<section class="page-hero">
  <div class="wrap page-hero-split">
    <div>
      <?= kicker('qs', 'quick ship') ?>
      <h1>Standard models, ready to ship.</h1>
      <p class="lede">When the schedule can't wait for a fully custom unit, start with a quick-ship model. Each one is built from standard sections we keep in stock, with the same casings, coils and fan arrays as our custom units.</p>
      <div class="hero-actions" style="margin-top:28px">
        <a class="btn btn-primary btn-lg" href="<?= e(url('contact?type=' . urlencode('Quick-ship model'))) ?>">Check availability</a>
        <a class="btn btn-ghost btn-lg" href="<?= e(url('design')) ?>">Configure in 3D</a>
      </div>
    </div>
    <?= photo('truck-delivery', '', true) ?>
  </div>
</section>

<section class="section-tight white"><div class="wrap grid-3">
  <div class="card"><span class="num">01</span><h3>Short lead times.</h3><p>Standard sizes and configurations skip most of the engineering cycle. Call us for what's available now.</p></div>
  <div class="card"><span class="num">02</span><h3>Same build quality.</h3><p>Double-wall casings, EC fan arrays with a spare fan, and a run test before every unit ships.</p></div>
  <div class="card"><span class="num">03</span><h3>Change what you need.</h3><p>Start from a quick-ship model in the 3D designer and adjust it. If you change it, we quote it as a custom unit.</p></div>
</div></section>

<?php $n = 0; foreach (QUICK_SHIP as $line => $q): $n++; ?>
<section class="section<?= $n % 2 ? '' : ' white' ?>"><div class="wrap">
  <div class="sec-head"><div><?= kicker(sprintf('%03d', $n), strtolower($q['name'])) ?><h2><?= e($q['name']) ?></h2></div><p class="lede"><?= e($q['desc']) ?></p></div>
  <div class="table-wrap"><table class="spec-table">
    <thead><tr><th>Model</th><th>Nominal airflow</th><th>External static</th><th></th></tr></thead>
    <tbody>
    <?php foreach ($q['sizes'] as $cfm): $code = quick_ship_code($line, $cfm); ?>
      <tr><td><b><?= e($code) ?></b></td><td><?= number_format($cfm) ?> CFM</td><td>up to <?= e(number_format($q['esp'], 2)) ?> in. w.g.</td><td><a class="arrow-link" href="<?= e(url('design?model=' . $code)) ?>">Open in 3D</a></td></tr>
    <?php endforeach; ?>
    </tbody>
  </table></div>
</div></section>
<?php endforeach; ?>

<section class="section white"><div class="wrap">
  <div class="sec-head"><div><?= kicker(sprintf('%03d', $n + 1), 'fan wall modules') ?><h2>Quick-ship fan wall modules</h2></div><p class="lede">Pre-built EC fan arrays that slide into an existing air handler to replace a single failed fan. Sized to pass through a standard door and bolt together in place.</p></div>
  <div class="table-wrap"><table class="spec-table">
    <thead><tr><th>Model</th><th>Array</th><th>Fans</th><th>Airflow</th><th>Module face</th></tr></thead>
    <tbody>
    <?php foreach (QUICK_SHIP_FANWALLS as $r): ?>
      <tr><td><b><?= e($r[0]) ?></b></td><td><?= e($r[1]) ?></td><td><?= e($r[2]) ?></td><td><?= e($r[3]) ?></td><td><?= e($r[4]) ?></td></tr>
    <?php endforeach; ?>
    </tbody>
  </table></div>
  <p class="muted" style="margin-top:16px">Nominal ratings. Final performance, dimensions and availability are confirmed on the quote.</p>
</div></section>
<?php page_foot(); ?>
