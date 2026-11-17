<?php
require __DIR__ . '/inc/bootstrap.php';
page_head([
    'title' => 'Design your air handler in 3D',
    'description' => 'Build a custom air handling unit in 3D: choose sections, set airflow and static pressure, see preliminary dimensions and fan power, and submit it for a quote.',
    'path' => 'design',
    'crumbs' => [['3D unit designer', 'design']],
    'body_class' => 'page-designer',
]);
?>
<section class="page-hero" style="padding-bottom:24px">
  <div class="wrap">
    <?= kicker('3d', 'unit configuration') ?>
    <h1>Design your unit.</h1>
    <p class="lede">Choose the sections your airstream needs and set the airflow. Drag to turn the model, scroll or pinch to zoom. When it looks right, submit it and an application engineer will turn it into a real selection.</p>
  </div>
</section>

<section class="designer wrap" aria-label="3D air handler designer">
  <div class="dz-stage">
    <div id="dz-canvas" class="dz-canvas" role="img" aria-label="3D model of the air handler you are designing"></div>
    <div class="dz-overlay">
      <div class="dz-chips">
        <button type="button" class="dz-chip" data-view="iso" aria-pressed="true">3D</button>
        <button type="button" class="dz-chip" data-view="side" aria-pressed="false">Side</button>
        <button type="button" class="dz-chip" data-view="end" aria-pressed="false">End</button>
        <button type="button" class="dz-chip" data-view="top" aria-pressed="false">Top</button>
      </div>
      <label class="dz-toggle"><input type="checkbox" id="dz-cutaway" checked> Cutaway</label>
    </div>
    <p class="dz-fallback" id="dz-fallback" hidden>Your browser couldn't start the 3D view. You can still build the unit below and submit it.</p>
  </div>

  <div class="dz-panel">
    <div class="dz-block">
      <p class="label" id="dz-preset-l">Start from a typical unit</p>
      <div class="dz-presets" role="group" aria-labelledby="dz-preset-l">
        <button type="button" class="dz-chip" data-preset="office">Office VAV</button>
        <button type="button" class="dz-chip" data-preset="hospital">Hospital, 100% OA</button>
        <button type="button" class="dz-chip" data-preset="lab">Lab makeup air</button>
        <button type="button" class="dz-chip" data-preset="data">Data hall</button>
      </div>
    </div>
    <div class="dz-block dz-sliders">
      <div class="field"><label for="dz-cfm">Airflow <output id="dz-cfm-o"></output></label><input type="range" id="dz-cfm" min="2000" max="120000" step="1000" value="30000"></div>
      <div class="field"><label for="dz-esp">External static <output id="dz-esp-o"></output></label><input type="range" id="dz-esp" min="0.25" max="4" step="0.25" value="2"></div>
      <div class="field"><label for="dz-loc">Location</label><select id="dz-loc"><option value="indoor">Indoor</option><option value="outdoor">Outdoor, with roof and hoods</option></select></div>
      <div class="field"><label for="dz-casing">Casing</label><select id="dz-casing"><option value="2">2 in. double-wall</option><option value="4">4 in. double-wall, thermally broken</option></select></div>
    </div>
    <div class="dz-block">
      <p class="label">Sections in the airstream, upstream to downstream</p>
      <ul class="dz-secs" id="dz-secs"></ul>
    </div>
  </div>

  <div class="dz-results">
    <dl class="dz-readout">
      <div><dt>Overall length</dt><dd id="r-len">—</dd></div>
      <div><dt>Casing W × H</dt><dd id="r-wh">—</dd></div>
      <div><dt>Fan array</dt><dd id="r-fans">—</dd></div>
      <div><dt>Total static</dt><dd id="r-tsp">—</dd></div>
      <div><dt>Fan shaft power</dt><dd id="r-bhp">—</dd></div>
      <div><dt>Coil face velocity</dt><dd id="r-fv">500 fpm</dd></div>
    </dl>
    <div class="dz-submit">
      <button type="button" class="btn btn-primary btn-lg" id="dz-send">Submit this design for a quote</button>
      <button type="button" class="btn btn-ghost btn-lg" id="dz-png">Save image</button>
    </div>
    <p class="muted dz-note">Preliminary sizing at 500 fpm coil face velocity, typical section lengths and 65% fan efficiency. Not for construction. An application engineer sizes the real unit.</p>
  </div>
</section>

<style>
.designer{display:grid;grid-template-columns:minmax(0,1fr) 380px;grid-template-areas:"stage panel" "results panel";gap:20px;padding-bottom:40px}
.dz-stage{grid-area:stage;position:relative;background:linear-gradient(#E9EEE8,#DDE5DD);border:1px solid var(--line);border-radius:var(--radius);overflow:hidden;min-height:440px}
.dz-canvas{position:absolute;inset:0;cursor:grab;touch-action:none}
.dz-canvas:active{cursor:grabbing}
.dz-overlay{position:absolute;left:14px;right:14px;top:14px;display:flex;justify-content:space-between;align-items:center;gap:10px;flex-wrap:wrap;pointer-events:none}
.dz-overlay > *{pointer-events:auto}
.dz-chips,.dz-presets{display:flex;flex-wrap:wrap;gap:6px}
.dz-chip{font:inherit;font-size:.875rem;font-weight:650;padding:7px 12px;border-radius:999px;border:1.5px solid var(--line);background:#fff;color:var(--ink);cursor:pointer}
.dz-chip[aria-pressed=true]{background:var(--forest);border-color:var(--forest);color:#fff}
.dz-toggle{background:#fff;border:1.5px solid var(--line);border-radius:999px;padding:6px 12px;font-weight:650;font-size:.875rem;display:flex;gap:8px;align-items:center}
.dz-fallback{position:absolute;inset:auto 14px 14px 14px;background:#fff;padding:12px;border-radius:8px}
.dz-panel{grid-area:panel;background:#fff;border:1px solid var(--line);border-radius:var(--radius);padding:20px;display:grid;gap:22px;align-content:start}
.dz-block{display:grid;gap:10px}
.dz-sliders{gap:14px}
.dz-sliders label{display:flex;justify-content:space-between;gap:10px}
.dz-sliders output{font-family:var(--mono);font-size:.85rem;color:var(--ink-2)}
input[type=range]{width:100%;accent-color:var(--green)}
.dz-secs{list-style:none;margin:0;padding:0;display:grid;gap:6px}
.dz-sec{width:100%;display:grid;grid-template-columns:28px minmax(0,1fr) auto;gap:10px;align-items:center;text-align:left;font:inherit;font-size:.92rem;padding:8px 10px;border-radius:8px;border:1.5px solid var(--line);background:transparent;color:var(--ink-2);cursor:pointer}
.dz-sec .tag{width:26px;height:26px;border-radius:50%;display:grid;place-items:center;border:1.5px dashed var(--ink-3);font-family:var(--mono);font-size:.75rem}
.dz-sec .meta{font-family:var(--mono);font-size:.7rem;color:var(--ink-3)}
.dz-sec[aria-pressed=true]{border-color:var(--green);color:var(--ink);background:#F1FAF3}
.dz-sec[aria-pressed=true] .tag{background:var(--green);border:0;color:#fff}
.dz-results{grid-area:results;display:grid;gap:16px}
.dz-readout{margin:0;display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:1px;background:var(--line);border:1px solid var(--line);border-radius:var(--radius);overflow:hidden}
.dz-readout div{background:#fff;padding:14px 16px}
.dz-readout dt{font-family:var(--mono);font-size:.7rem;letter-spacing:.06em;text-transform:uppercase;color:var(--ink-3)}
.dz-readout dd{margin:4px 0 0;font-weight:800;font-size:1.15rem;font-variant-numeric:tabular-nums}
.dz-readout dd small{display:block;font-weight:500;font-size:.8rem;color:var(--ink-3)}
.dz-submit{display:flex;flex-wrap:wrap;gap:10px}
.dz-note{font-size:.88rem}
@media (max-width:1000px){.designer{grid-template-columns:1fr;grid-template-areas:"stage" "panel" "results"}.dz-stage{min-height:360px}}
@media (max-width:600px){.dz-readout{grid-template-columns:repeat(2,minmax(0,1fr))}}
</style>
<script type="importmap"><?= json_encode(['imports' => ['three' => url('assets/vendor/three/three.module.js'), 'three/addons/' => url('assets/vendor/three/addons') . '/']], JSON_UNESCAPED_SLASHES) ?></script>
<script type="module" src="<?= e(asset('js/designer.js')) ?>"></script>
<script>window.CAE_CONTACT_URL = <?= json_encode(url('contact')) ?>;</script>
<?php page_foot(false); ?>
