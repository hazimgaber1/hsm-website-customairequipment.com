<?php
require __DIR__ . '/inc/bootstrap.php';
page_head([
    'title' => 'Fan array energy savings calculator',
    'description' => 'Estimate annual energy and cost savings from replacing a belt-driven fan with a direct-drive fan array.',
    'path' => 'savings-calculator',
    'crumbs' => [['Savings calculator', 'savings-calculator']],
]);
?>
<section class="page-hero"><div class="wrap"><?= kicker('roi', 'savings calculator') ?><h1>What would a fan array save you?</h1>
<p class="lede">Compare an existing belt-driven fan with a direct-drive fan array. The estimate uses belt and motor losses typical of older units. Your engineer's numbers will be more precise.</p></div></section>
<section class="section-tight"><div class="wrap calc">
  <form class="form-panel form" id="calc" onsubmit="return false">
    <div class="f-grid">
      <div class="field"><label for="c-bhp">Existing fan brake horsepower</label><input id="c-bhp" type="number" min="1" step="0.5" value="40"></div>
      <div class="field"><label for="c-hours">Operating hours per year</label><input id="c-hours" type="number" min="100" step="100" value="8760"></div>
      <div class="field"><label for="c-load">Average load (% of design airflow)</label><input id="c-load" type="number" min="20" max="100" step="5" value="70"></div>
      <div class="field"><label for="c-rate">Electricity rate ($ per kWh)</label><input id="c-rate" type="number" min="0.01" step="0.01" value="0.12"></div>
      <div class="field"><label for="c-belt">Existing drive</label><select id="c-belt"><option value="0.93">Belt drive, well maintained</option><option value="0.88" selected>Belt drive, average</option><option value="0.82">Belt drive, worn</option></select></div>
      <div class="field"><label for="c-motor">Existing motor efficiency (%)</label><input id="c-motor" type="number" min="70" max="97" step="0.5" value="91"></div>
      <div class="field"><label for="c-maint">Belt and bearing maintenance per year ($)</label><input id="c-maint" type="number" min="0" step="100" value="1500"></div>
      <div class="field"><label for="c-years">Years to compare</label><input id="c-years" type="number" min="1" max="25" value="10"></div>
    </div>
  </form>
  <div class="calc-out" aria-live="polite">
    <p class="label" style="color:#A9C6B2">Estimated savings</p>
    <dl>
      <div><dt>Energy saved per year</dt><dd id="o-kwh">—</dd></div>
      <div><dt>Cost saved per year</dt><dd id="o-cost">—</dd></div>
      <div><dt>Over the comparison period</dt><dd id="o-total">—</dd></div>
    </dl>
    <p style="font-size:.9rem">Assumes the fan array runs at 93% motor efficiency with no belt losses, and follows the fan affinity laws at part load. Results are estimates.</p>
    <a class="btn btn-signal" href="<?= e(url('contact?type=Fan%20arrays')) ?>">Get a real selection</a>
  </div>
</div></section>
<script>
(function () {
  var ids = ["c-bhp","c-hours","c-load","c-rate","c-belt","c-motor","c-maint","c-years"];
  function v(id) { return parseFloat(document.getElementById(id).value) || 0; }
  function money(n) { return "$" + Math.round(n).toLocaleString("en-US"); }
  function run() {
    var load = Math.min(1, Math.max(0.2, v("c-load") / 100));
    var shaft = v("c-bhp") * 0.7457 * Math.pow(load, 2.6);          // kW at the shaft at average load
    var oldKw = shaft / v("c-belt") / (v("c-motor") / 100);
    var newKw = shaft / 0.93;
    var kwh = Math.max(0, (oldKw - newKw) * v("c-hours"));
    var yearly = kwh * v("c-rate") + v("c-maint") * 0.8;
    document.getElementById("o-kwh").textContent = Math.round(kwh).toLocaleString("en-US") + " kWh";
    document.getElementById("o-cost").textContent = money(yearly);
    document.getElementById("o-total").textContent = money(yearly * v("c-years"));
  }
  ids.forEach(function (id) { document.getElementById(id).addEventListener("input", run); });
  run();
})();
</script>
<?php page_foot(); ?>
