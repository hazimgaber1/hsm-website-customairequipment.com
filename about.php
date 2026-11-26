<?php
require __DIR__ . '/inc/bootstrap.php';
page_head(['title' => 'About us', 'description' => 'Custom Air Equipment, an HSM Company, engineers and builds custom air handling units, fan arrays and industrial fans to order.', 'path' => 'about', 'image' => 'hospital-penthouse', 'crumbs' => [['About us', 'about']]]);
?>
<section class="page-hero"><div class="wrap page-hero-split"><div><?= kicker('cae', 'about us') ?><h1>We build the units catalogs can't.</h1>
<p class="lede">Custom Air Equipment is an HSM Company. We engineer and build air handling units, fan arrays and industrial fans to order, for buildings where the air can't stop and the equipment has to fit what's already there.</p></div><?= photo('engineers', '', true) ?></div></section>
<section class="section white"><div class="wrap grid-3">
  <div class="card"><span class="num">What we make</span><h3>Built to order</h3><p>Custom AHUs, fan arrays, industrial fans and knockdown replacement units, each selected and drawn for one project.</p></div>
  <div class="card"><span class="num">Who we work with</span><h3>Engineers, contractors, owners</h3><p>Consulting engineers specify us, contractors install us, and facility teams call us when an old unit has to go.</p></div>
  <div class="card"><span class="num">How we work</span><h3>One engineer per project</h3><p>The application engineer who selects your unit stays with it through submittals, testing and startup.</p></div>
</div></section>
<section class="section"><div class="wrap feature flip"><div class="body"><?= kicker('hsm', 'part of hsm') ?><h2>An HSM Company.</h2><p class="lede">Being part of HSM gives our customers the backing of a larger group, with the focus of a specialist builder.</p><p><a class="arrow-link" href="<?= e(url('careers')) ?>">Work with us</a></p></div><?= photo('fab-floor') ?></div></section>
<?php page_foot(); ?>
