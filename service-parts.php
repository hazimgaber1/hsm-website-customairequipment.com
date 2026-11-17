<?php
require __DIR__ . '/inc/bootstrap.php';
page_head(['title' => 'Service and parts', 'description' => 'Parts, service, startup and retrofit support for Custom Air Equipment units and other air handlers.', 'path' => 'service-parts', 'image' => 'knockdown', 'crumbs' => [['Service and parts', 'service-parts']]]);
?>
<section class="page-hero"><div class="wrap page-hero-split"><div><?= kicker('svc', 'service and parts') ?><h1>Keep it running.</h1>
<p class="lede">Call <a href="<?= e(tel_href(setting('phone'))) ?>"><?= e(setting('phone')) ?></a> with the unit's serial number from the nameplate and we'll find the parts and drawings for it.</p></div><?= photo('knockdown', '', true) ?></div></section>
<section class="section white"><div class="wrap grid-4">
  <div class="card"><span class="num">01</span><h3>Replacement parts</h3><p>Fans, motors, coils, filters, dampers and door hardware for our units.</p></div>
  <div class="card"><span class="num">02</span><h3>Startup</h3><p>Factory startup, controls checkout and operator training.</p></div>
  <div class="card"><span class="num">03</span><h3>Fan array conversions</h3><p>Replace an old belt-driven fan inside an existing unit with a direct-drive array.</p></div>
  <div class="card"><span class="num">04</span><h3>Coil replacement</h3><p>New coils built to fit existing casings, including other manufacturers' units.</p></div>
</div></section>
<?php page_foot(); ?>
