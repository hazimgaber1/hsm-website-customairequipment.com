<?php
require __DIR__ . '/inc/bootstrap.php';
page_head([
    'title' => '',
    'description' => 'Custom air handling units, fan arrays and industrial fans, engineered to order and run-tested before they ship. Design your unit in 3D and request a quote.',
    'path' => '',
    'image' => 'factory-ahu',
]);
$featured = array_slice(array_values(guide_data()['guides']), 0, 6);
?>
<section class="hero">
  <div class="hero-media"><?= photo('factory-ahu', '', true) ?></div>
  <div class="wrap"><div class="hero-inner">
    <p class="kicker"><span class="k-num">CAE</span><span class="k-txt">custom air handling units · fans</span></p>
    <h1>Air handlers built to <span class="hl">your drawing.</span></h1>
    <p class="lede">We engineer and build custom AHUs, fan arrays and industrial fans for projects where a catalog unit won't fit, won't perform, or won't last.</p>
    <div class="hero-actions">
      <a class="btn btn-signal btn-lg" href="<?= e(url('design')) ?>">Design your unit in 3D</a>
      <a class="btn btn-light btn-lg" href="<?= e(url('contact')) ?>">Get a quote</a>
    </div>
    <dl class="hero-facts">
      <div><dt>Airflow per unit</dt><dd>2k–150k CFM</dd></div>
      <div><dt>Fan pressure</dt><dd>to 30 in. w.g.</dd></div>
      <div><dt>Casing leakage</dt><dd>≤ 1%</dd></div>
      <div><dt>Run-tested</dt><dd>Every unit</dd></div>
    </dl>
  </div></div>
</section>

<div class="wrap">
  <section class="standards" aria-label="Standards we design and test to">
    <p class="label">Designed and tested to</p>
    <ul><li>AHRI 430</li><li>AHRI 1350</li><li>ANSI/AMCA 210</li><li>AMCA 300</li><li>UL 1995 / CSA C22.2 No. 236</li><li>ASHRAE 90.1</li><li>ASHRAE 170</li></ul>
  </section>
  <div class="qs-band" style="margin-top:8px">
    <div><?= kicker('qs', 'quick ship') ?><h2>Custom when you need it. Quick ship when you don't.</h2><p>Standard air handlers, outdoor DOAS units, double-deck ERVs and fan wall modules are built from sections we keep in stock, for projects that can't wait.</p></div>
    <a class="btn btn-signal btn-lg" href="<?= e(url('products/quick-ship')) ?>">See quick-ship models</a>
  </div>
</div>

<section class="section">
  <div class="wrap">
    <div class="sec-head">
      <div>
        <?= kicker('001', 'the problem') ?>
        <h2>Catalog units force you to compromise.</h2>
      </div>
      <p class="lede">Most of our projects start after a standard selection has already failed. These are the three reasons we hear most.</p>
    </div>
    <div class="grid-3 pain">
      <div class="card"><span class="num">01</span><h3>They don't fit.</h3><p>The mechanical room has a 36-inch door, the roof curb is fixed, and the new unit has to land where the old one sat.</p></div>
      <div class="card"><span class="num">02</span><h3>They can't stop.</h3><p>Hospitals, labs and data halls lose more in an hour of downtime than the unit costs. One belt-driven fan is a single point of failure.</p></div>
      <div class="card"><span class="num">03</span><h3>They aren't built for it.</h3><p>Corrosive exhaust, −40° outdoor air, NC 25 next door. Off-the-shelf casings, coils and fans aren't selected for the conditions they will see.</p></div>
    </div>
  </div>
</section>

<section class="section dark">
  <div class="wrap feature">
    <div class="body">
      <?= kicker('002', 'unit configuration') ?>
      <h2>Design your unit in 3D.</h2>
      <p class="lede">Pick the sections your airstream needs, set the airflow and the space it has to fit, and turn the model around in your browser. Send it to us and an application engineer turns it into a real selection.</p>
      <ul class="ticks">
        <li>Live 3D model with every section in its usual order</li>
        <li>Preliminary length, cross-section, static pressure and fan power</li>
        <li>Submits straight into a quote request</li>
      </ul>
      <p><a class="btn btn-signal btn-lg" href="<?= e(url('design')) ?>">Start designing</a></p>
    </div>
    <?= photo('fan-array') ?>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="sec-head">
      <div>
        <?= kicker('003', 'why custom air equipment') ?>
        <h2>Built around your building, not our catalog.</h2>
      </div>
      <p class="lede">One application engineer stays with your project from the first sketch to startup.</p>
    </div>
    <div class="grid-3">
      <div class="card"><span class="num">Adaptive design</span><h3>Never get boxed in.</h3><p>Any arrangement, any footprint, any mix of coils, filters, fans and recovery. Split for rigging or shipped as panels.</p><a class="arrow-link" href="<?= e(url('built-to-order')) ?>">How we build</a></div>
      <div class="card"><span class="num">Resilience</span><h3>Keep the air moving.</h3><p>N+1 fan arrays, isolation dampers and redundant controls let your team service a fan while the unit keeps running.</p><a class="arrow-link" href="<?= e(url('products/fan-arrays')) ?>">Fan arrays</a></div>
      <div class="card"><span class="num">Proof</span><h3>Tested before it ships.</h3><p>Every unit is run-tested for airflow, vibration and casing leakage. You're welcome to witness the test.</p><a class="arrow-link" href="<?= e(url('factory-testing')) ?>">Factory and testing</a></div>
    </div>
  </div>
</section>

<section class="section white">
  <div class="wrap">
    <div class="sec-head">
      <div>
        <?= kicker('004', 'products') ?>
        <h2>Four product lines. All built to order.</h2>
      </div>
      <p class="lede">Nothing ships from a warehouse. Every unit starts as a selection for one project and a set of drawings you approve.</p>
    </div>
    <div class="grid-4">
      <?php foreach (PRODUCTS as $slug => $p): ?>
      <a class="photo-card" href="<?= e(url('products/' . $slug)) ?>">
        <?= photo($p['photo']) ?>
        <div class="pc-body"><span class="pc-code"><?= e($p['code']) ?></span><h3><?= e($p['name']) ?></h3><p><?= e($p['lede']) ?></p></div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <div class="sec-head">
      <div>
        <?= kicker('005', 'markets') ?>
        <h2>Where the requirements are strict.</h2>
      </div>
      <p class="lede">The buildings we build for most, and what each one asks of an air handler.</p>
    </div>
    <div class="grid-4">
      <?php foreach (MARKETS as $slug => $mk): ?>
      <a class="photo-card" href="<?= e(url('markets/' . $slug)) ?>">
        <?= photo($mk[1]) ?>
        <div class="pc-body"><h3><?= e($mk[0]) ?></h3><p><?= e($mk[2]) ?></p></div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section white">
  <div class="wrap">
    <div class="sec-head">
      <div>
        <?= kicker('006', 'how a project runs') ?>
        <h2>From first call to startup.</h2>
      </div>
      <p class="lede">Send drawings, an equipment schedule or photos of the unit you're replacing. Here's what happens next.</p>
    </div>
    <ol class="steps">
      <li><h3>Application review</h3><p>An application engineer calls back within one business day.</p></li>
      <li><h3>Selection and submittals</h3><p>Performance, sound data and general-arrangement drawings for your review.</p></li>
      <li><h3>Fabrication</h3><p>Casings, coils and fan sections built in-house, with build photos as it progresses.</p></li>
      <li><h3>Factory testing</h3><p>Airflow, vibration and casing leakage, witnessed if you like.</p></li>
      <li><h3>Delivery and startup</h3><p>Split to suit your rigging plan, reassembled and started by our crew.</p></li>
    </ol>
  </div>
</section>

<?php if ($featured): ?>
<section class="section">
  <div class="wrap">
    <div class="sec-head">
      <div>
        <?= kicker('007', 'engineering guides') ?>
        <h2>Answers from the people who build them.</h2>
      </div>
      <p class="lede">Practical guides on selecting, specifying, installing and maintaining air handling equipment.</p>
    </div>
    <ul class="card-list">
      <?php foreach ($featured as $g): ?>
      <li><a class="card-link" href="<?= e(url('guides/' . $g['slug'])) ?>"><span class="label"><?= e($g['type']) ?></span><b><?= e($g['title']) ?></b></a></li>
      <?php endforeach; ?>
    </ul>
    <p style="margin-top:24px"><a class="arrow-link" href="<?= e(url('guides')) ?>">Browse all <?= count(guide_data()['guides']) ?> guides</a></p>
  </div>
</section>
<?php endif; ?>
<?php page_foot(); ?>
