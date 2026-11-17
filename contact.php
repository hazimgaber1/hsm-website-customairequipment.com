<?php
require __DIR__ . '/inc/bootstrap.php';
page_head([
    'title' => 'Get a quote',
    'description' => 'Request a quote for a custom air handler, fan array, industrial fan or retrofit. An application engineer calls back within one business day.',
    'path' => 'contact',
    'crumbs' => [['Get a quote', 'contact']],
]);
$err = $_SESSION['quote_error'] ?? '';
$old = $_SESSION['quote_old'] ?? [];
unset($_SESSION['quote_error'], $_SESSION['quote_old']);
$types = array_merge(array_column(PRODUCTS, 'name'), ['Not sure yet']);
$pre = $old['project_type'] ?? ($_GET['type'] ?? '');
$v = fn($k) => e($old[$k] ?? '');
?>
<section class="page-hero">
  <div class="wrap"><?= kicker('rfq', 'start a project') ?><h1>Tell us what the unit has to do.</h1>
  <p class="lede">Send whatever you have: an equipment schedule, drawings, a nameplate photo, or just the problem. An application engineer will call you within one business day.</p></div>
</section>
<section class="section-tight">
  <div class="wrap contact-grid">
    <div>
      <dl class="contact-list">
        <div><dt>Applications, parts and service</dt><dd><a href="<?= e(tel_href(setting('phone'))) ?>"><?= e(setting('phone')) ?></a></dd></div>
        <div><dt>Email</dt><dd><a href="mailto:<?= e(setting('email')) ?>"><?= e(setting('email')) ?></a></dd></div>
        <?php if (setting('address') !== ''): ?><div><dt>Plant and offices</dt><dd><?= e(setting('address')) ?></dd></div><?php endif; ?>
        <div><dt>Office hours</dt><dd><?= e(setting('hours')) ?></dd></div>
      </dl>
      <p class="muted" style="margin-top:20px">Prefer to start with a model? <a href="<?= e(url('design')) ?>">Design your unit in 3D</a> and it will be attached to your request.</p>
    </div>
    <div class="form-panel">
      <?php if ($err): ?><p class="alert alert-error" role="alert"><?= e($err) ?></p><?php endif; ?>
      <div id="design-attached" class="alert" hidden style="margin-bottom:18px">
        <b>Your 3D design is attached.</b> <span id="design-summary"></span>
        <button type="button" class="btn btn-sm btn-ghost" id="design-remove" style="margin-left:8px">Remove</button>
      </div>
      <form class="form" method="post" action="<?= e(url('quote-submit')) ?>" id="quote-form">
        <?= csrf_field() ?>
        <input type="hidden" name="design_json" id="design_json" value="">
        <input type="hidden" name="source_page" value="contact">
        <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">
        <div class="f-grid">
          <div class="field"><label for="f-name">Name <span class="req">(required)</span></label><input id="f-name" name="name" required autocomplete="name" value="<?= $v('name') ?>"></div>
          <div class="field"><label for="f-company">Company</label><input id="f-company" name="company" autocomplete="organization" value="<?= $v('company') ?>"></div>
          <div class="field"><label for="f-email">Email <span class="req">(required)</span></label><input id="f-email" name="email" type="email" required autocomplete="email" value="<?= $v('email') ?>"></div>
          <div class="field"><label for="f-phone">Phone</label><input id="f-phone" name="phone" type="tel" autocomplete="tel" value="<?= $v('phone') ?>"></div>
          <div class="field"><label for="f-role">Your role</label>
            <select id="f-role" name="role"><?php foreach (['Consulting engineer', 'Mechanical contractor', 'Owner or facility manager', 'Manufacturer\'s rep', 'Other'] as $r): ?><option<?= ($old['role'] ?? '') === $r ? ' selected' : '' ?>><?= e($r) ?></option><?php endforeach; ?></select></div>
          <div class="field"><label for="f-type">Project type</label>
            <select id="f-type" name="project_type"><?php foreach ($types as $t): ?><option<?= $pre === $t ? ' selected' : '' ?>><?= e($t) ?></option><?php endforeach; ?></select></div>
          <div class="field"><label for="f-location">Project location</label><input id="f-location" name="location" placeholder="City, state or province" value="<?= $v('location') ?>"></div>
          <div class="field"><label for="f-cfm">Approximate airflow (CFM)</label><input id="f-cfm" name="cfm" type="number" min="0" step="500" inputmode="numeric" value="<?= $v('cfm') ?>"></div>
          <div class="field full"><label for="f-when">When do you need equipment on site?</label>
            <select id="f-when" name="timeline"><?php foreach (['Within 12 weeks', 'In 3 to 6 months', 'In 6 months or more', 'Budget pricing only'] as $t): ?><option<?= ($old['timeline'] ?? 'In 3 to 6 months') === $t ? ' selected' : '' ?>><?= e($t) ?></option><?php endforeach; ?></select></div>
          <div class="field full"><label for="f-details">Project details</label><textarea id="f-details" name="details" rows="6" placeholder="Building type, design conditions, access limits, the unit you're replacing…"><?= $v('details') ?></textarea></div>
        </div>
        <div><button class="btn btn-primary btn-lg" type="submit">Send request</button></div>
        <p class="muted" style="font-size:.9rem">We use your details only to respond to this request. See our <a href="<?= e(url('privacy')) ?>">privacy policy</a>.</p>
      </form>
    </div>
  </div>
</section>
<script>
(function () {
  var raw = null;
  try { raw = sessionStorage.getItem("cae-design"); } catch (e) {}
  if (!raw) return;
  var d; try { d = JSON.parse(raw); } catch (e) { return; }
  document.getElementById("design_json").value = raw;
  document.getElementById("design-summary").textContent = d.summary || "";
  document.getElementById("design-attached").hidden = false;
  var cfm = document.getElementById("f-cfm"); if (!cfm.value && d.cfm) cfm.value = d.cfm;
  document.getElementById("f-type").value = "Custom air handling units";
  document.getElementById("design-remove").addEventListener("click", function () {
    try { sessionStorage.removeItem("cae-design"); } catch (e) {}
    document.getElementById("design_json").value = "";
    document.getElementById("design-attached").hidden = true;
  });
})();
</script>
<?php page_foot(false); ?>
