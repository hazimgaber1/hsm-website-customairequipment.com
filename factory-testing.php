<?php
require __DIR__ . '/inc/bootstrap.php';
page_head([
    'title' => 'Factory and testing',
    'description' => 'Every unit is run-tested for airflow, vibration and casing leakage before it ships. Witness testing is available.',
    'path' => 'factory-testing',
    'image' => 'test-cell',
    'crumbs' => [['Factory and testing', 'factory-testing']],
]);
?>
<section class="page-hero"><div class="wrap page-hero-split"><div><?= kicker('qa', 'factory and testing') ?><h1>Proven before it ships.</h1>
<p class="lede">Casings, coils and fan sections are built under one roof and every unit runs in our test cell before it leaves. You're welcome to come and watch.</p></div><?= photo('test-cell', '', true) ?></div></section>
<section class="section white"><div class="wrap">
  <div class="sec-head"><div><?= kicker('001', 'what we test') ?><h2>On every unit.</h2></div><p class="lede">Results go into the turnover package with the unit's serial number.</p></div>
  <div class="grid-3">
    <div class="card"><span class="num">Airflow</span><h3>Fan performance</h3><p>Airflow and static pressure at design speed, measured against the selection.</p></div>
    <div class="card"><span class="num">Vibration</span><h3>Balance and vibration</h3><p>Every fan wheel is balanced and checked for vibration at running speed.</p></div>
    <div class="card"><span class="num">Leakage</span><h3>Casing leakage</h3><p>The casing is pressurized to design static and leakage measured against a 1% target.</p></div>
    <div class="card"><span class="num">Electrical</span><h3>Wiring and controls</h3><p>Factory-mounted controls and power wiring are checked point by point.</p></div>
    <div class="card"><span class="num">Coils</span><h3>Coil pressure tests</h3><p>Coils are pressure tested before they go into the casing.</p></div>
    <div class="card"><span class="num">Witness</span><h3>Witness testing</h3><p>Engineers and owners can attend the test in person. Ask when you order.</p></div>
  </div>
</div></section>
<section class="section"><div class="wrap">
  <div class="feature"><div class="body"><?= kicker('002', 'in-house') ?><h2>Coils built in our own shop.</h2><p class="lede">We build chilled water, hot water, steam and DX coils in-house, so coil lead times and quality stay under our control.</p></div><?= photo('coil-closeup') ?></div>
</div></section>
<?php page_foot(); ?>
