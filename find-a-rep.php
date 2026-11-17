<?php
require __DIR__ . '/inc/bootstrap.php';
page_head(['title' => 'Find a rep', 'description' => 'Find the Custom Air Equipment representative for your area, or reach the factory directly.', 'path' => 'find-a-rep', 'crumbs' => [['Find a rep', 'find-a-rep']]]);
?>
<section class="page-hero"><div class="wrap"><?= kicker('rep', 'find a rep') ?><h1>Talk to someone near you.</h1>
<p class="lede">Tell us where your project is and we'll connect you with the representative for that area, or handle it directly from the factory.</p></div></section>
<section class="section-tight"><div class="wrap contact-grid">
  <div><dl class="contact-list"><div><dt>Factory direct</dt><dd><a href="<?= e(tel_href(setting('phone'))) ?>"><?= e(setting('phone')) ?></a></dd></div><div><dt>Email</dt><dd><a href="mailto:<?= e(setting('email')) ?>"><?= e(setting('email')) ?></a></dd></div></dl>
  <p class="muted" style="margin-top:18px">Interested in representing us? Use the form and choose "Manufacturer's rep" as your role.</p></div>
  <form class="form-panel form" method="post" action="<?= e(url('quote-submit')) ?>">
    <?= csrf_field() ?><input type="hidden" name="source_page" value="find-a-rep"><input type="hidden" name="project_type" value="Rep enquiry">
    <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">
    <div class="f-grid">
      <div class="field"><label for="r-name">Name</label><input id="r-name" name="name" required autocomplete="name"></div>
      <div class="field"><label for="r-email">Email</label><input id="r-email" name="email" type="email" required autocomplete="email"></div>
      <div class="field"><label for="r-loc">Project location</label><input id="r-loc" name="location" required placeholder="City, state or province"></div>
      <div class="field"><label for="r-role">Your role</label><select id="r-role" name="role"><option>Consulting engineer</option><option>Mechanical contractor</option><option>Owner or facility manager</option><option>Manufacturer's rep</option><option>Other</option></select></div>
      <div class="field full"><label for="r-details">Anything else?</label><textarea id="r-details" name="details" rows="4"></textarea></div>
    </div>
    <div><button class="btn btn-primary btn-lg">Connect me</button></div>
  </form>
</div></section>
<?php page_foot(false); ?>
