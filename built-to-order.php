<?php
require __DIR__ . '/inc/bootstrap.php';
page_head([
    'title' => 'Built to order',
    'description' => 'How Custom Air Equipment builds air handlers to order: application review, selection, submittals, fabrication, factory testing and startup.',
    'path' => 'built-to-order',
    'image' => 'factory-ahu',
    'crumbs' => [['Built to order', 'built-to-order']],
]);
?>
<section class="page-hero"><div class="wrap page-hero-split"><div><?= kicker('bto', 'built to order') ?><h1>Your unit. Your schedule.</h1>
<p class="lede">Every unit is engineered for one project. We confirm a ship date with the submittal and plan delivery around your rigging, your building and your outage windows.</p>
<div class="hero-actions" style="margin-top:28px"><a class="btn btn-primary btn-lg" href="<?= e(url('contact')) ?>">Ask about lead time</a></div></div><?= photo('rooftop-lift', '', true) ?></div></section>
<section class="section white"><div class="wrap">
  <div class="sec-head"><div><?= kicker('001', 'how it works') ?><h2>From schedule to startup.</h2></div></div>
  <ol class="steps">
    <li><h3>Application review</h3><p>Send a schedule, drawings or photos. We call back within one business day.</p></li>
    <li><h3>Selection</h3><p>Performance, sound data and a general-arrangement drawing.</p></li>
    <li><h3>Submittal</h3><p>You approve the drawings and we confirm the ship date.</p></li>
    <li><h3>Build and test</h3><p>Fabricated and run-tested in our plant, with progress photos.</p></li>
    <li><h3>Startup</h3><p>Rigged, reassembled if split, started and handed over.</p></li>
  </ol>
</div></section>
<section class="section"><div class="wrap grid-3">
  <div class="card"><span class="num">01</span><h3>Avoid downtime.</h3><p>Phased replacements and fan array change-outs keep critical spaces running while the work happens.</p></div>
  <div class="card"><span class="num">02</span><h3>Fits what you have.</h3><p>Footprint-matched units land on existing curbs. Knockdown units fit through existing doors.</p></div>
  <div class="card"><span class="num">03</span><h3>One engineer, start to finish.</h3><p>The person who selected your unit is the one who answers the phone at startup.</p></div>
</div></section>
<?php page_foot(); ?>
