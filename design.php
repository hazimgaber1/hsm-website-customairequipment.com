<?php
require __DIR__ . '/inc/bootstrap.php';
page_head([
    'title' => 'Design your air handler in 3D',
    'description' => 'Design an air handling unit in 3D: start from a quick-ship model or a custom unit, step through every option, see dimensions and fan power, and submit it for a quote.',
    'path' => 'design',
    'crumbs' => [['3D unit designer', 'design']],
    'body_class' => 'page-designer',
]);
?>
<section class="dz-intro">
  <div class="wrap dz-intro-in">
    <div>
      <?= kicker('3d', 'unit configuration') ?>
      <h1>Design your unit.</h1>
    </div>
    <p class="lede">Start from a quick-ship model or a typical unit, then step through the choices or open every option at once. Drag to turn the model, scroll or pinch to zoom, and submit it when it looks right.</p>
  </div>
</section>

<section class="designer" aria-label="3D air handler designer" data-mode="guided">
  <div class="dz-left">
    <div class="dz-stage">
      <div id="dz-canvas" class="dz-canvas" role="img" aria-label="3D model of the air handler you are designing"></div>
      <div class="dz-overlay">
        <div class="dz-chips">
          <button type="button" class="dz-chip" data-view="iso" aria-pressed="true">3D</button>
          <button type="button" class="dz-chip" data-view="side" aria-pressed="false">Side</button>
          <button type="button" class="dz-chip" data-view="end" aria-pressed="false">End</button>
          <button type="button" class="dz-chip" data-view="top" aria-pressed="false">Top</button>
        </div>
        <div class="dz-chips">
          <label class="dz-toggle"><input type="checkbox" id="dz-cutaway" checked> Cutaway</label>
          <button type="button" class="dz-chip" id="dz-full" aria-pressed="false">Full screen</button>
        </div>
      </div>
      <span id="dz-badge" class="dz-tag">Custom unit</span>
      <p class="dz-fallback" id="dz-fallback" hidden>Your browser couldn't start the 3D view. You can still build the unit and submit it.</p>
    </div>
    <dl class="dz-readout">
      <div><dt>Length</dt><dd id="r-len">—</dd></div>
      <div><dt>W × H</dt><dd id="r-wh">—</dd></div>
      <div><dt>Fans</dt><dd id="r-fans">—</dd></div>
      <div><dt>Total static</dt><dd id="r-tsp">—</dd></div>
      <div><dt>Fan power</dt><dd id="r-bhp">—</dd></div>
      <div><dt>Face velocity</dt><dd id="r-fv">—</dd></div>
      <div><dt>Shipping</dt><dd id="r-ship">—</dd></div>
      <div><dt>Weight</dt><dd id="r-wt">—</dd></div>
    </dl>
  </div>

  <div class="dz-panel">
    <div class="dz-ptop">
      <div class="dz-seg dz-modes" role="group" aria-label="How to configure">
        <button type="button" id="dz-mode-guided" data-mode="guided" aria-pressed="true">Step by step</button>
        <button type="button" id="dz-mode-all" data-mode="all" aria-pressed="false">All options</button>
      </div>
      <div class="dz-bar"><span id="dz-progress"></span></div>
      <ol class="dz-nav" id="dz-nav" aria-label="Steps"></ol>
      <div id="dz-banner" class="dz-banner" hidden></div>
    </div>
    <div class="dz-body" id="dz-body"></div>
    <div class="dz-foot">
      <button type="button" class="btn btn-ghost btn-sm" id="dz-back">Back</button>
      <span id="dz-stepno" class="dz-stepno"></span>
      <button type="button" class="btn btn-primary btn-sm" id="dz-next">Next</button>
    </div>
    <button type="button" class="dz-link dz-reset" id="dz-reset">Reset all options to standard</button>
  </div>
</section>

<style>
.dz-intro{padding:28px 0 18px}
.dz-intro-in{display:grid;grid-template-columns:auto minmax(0,1fr);gap:16px 48px;align-items:end}
.dz-intro h1{margin:6px 0 0;font-size:clamp(2rem,4vw,3.2rem)}
.dz-intro .lede{margin:0;max-width:64ch}
.designer{--dz-h:calc(100vh - 96px);display:grid;grid-template-columns:minmax(0,1fr) 430px;gap:16px;padding:0 clamp(12px,2vw,28px) 40px;max-width:1800px;margin:0 auto}
.dz-left{display:grid;gap:12px;align-content:start;min-width:0}
.dz-stage{position:relative;background:linear-gradient(#E9EEE8,#DDE5DD);border:1px solid var(--line);border-radius:var(--radius);overflow:hidden;height:max(560px,calc(var(--dz-h) - 120px))}
.dz-canvas{position:absolute;inset:0;cursor:grab;touch-action:none}
.dz-canvas:active{cursor:grabbing}
.dz-overlay{position:absolute;left:14px;right:14px;top:14px;display:flex;justify-content:space-between;align-items:center;gap:10px;flex-wrap:wrap;pointer-events:none}
.dz-overlay > *{pointer-events:auto}
.dz-chips{display:flex;flex-wrap:wrap;gap:6px;align-items:center}
.dz-chip{font:inherit;font-size:.875rem;font-weight:650;padding:7px 12px;border-radius:999px;border:1.5px solid var(--line);background:#fff;color:var(--ink);cursor:pointer}
.dz-chip[aria-pressed=true]{background:var(--forest);border-color:var(--forest);color:#fff}
.dz-toggle{background:#fff;border:1.5px solid var(--line);border-radius:999px;padding:6px 12px;font-weight:650;font-size:.875rem;display:flex;gap:8px;align-items:center}
.dz-tag{position:absolute;left:14px;bottom:14px;background:#fff;border:1.5px solid var(--line);border-radius:999px;padding:6px 12px;font-family:var(--mono);font-size:.78rem}
.dz-tag.qs{background:var(--signal);border-color:var(--signal);color:var(--forest);font-weight:600}
.dz-fallback{position:absolute;inset:auto 14px 56px 14px;background:#fff;padding:12px;border-radius:8px}
.dz-readout{margin:0;display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:1px;background:var(--line);border:1px solid var(--line);border-radius:var(--radius);overflow:hidden}
.dz-readout div{background:#fff;padding:10px 14px}
.dz-readout dt{font-family:var(--mono);font-size:.68rem;letter-spacing:.06em;text-transform:uppercase;color:var(--ink-3)}
.dz-readout dd{margin:2px 0 0;font-weight:800;font-size:1.05rem;font-variant-numeric:tabular-nums}
.dz-readout dd small{display:block;font-weight:500;font-size:.76rem;color:var(--ink-3)}
.dz-panel{position:sticky;top:84px;height:var(--dz-h);background:#fff;border:1px solid var(--line);border-radius:var(--radius);display:grid;grid-template-rows:auto minmax(0,1fr) auto auto;overflow:hidden}
.dz-ptop{padding:14px 16px 10px;border-bottom:1px solid var(--line);display:grid;gap:10px}
.dz-seg{display:grid;grid-auto-flow:column;grid-auto-columns:1fr;background:var(--paper);border:1px solid var(--line);border-radius:999px;padding:3px}
.dz-seg button{font:inherit;font-size:.88rem;font-weight:650;border:0;background:none;border-radius:999px;padding:7px 10px;cursor:pointer;color:var(--ink-2)}
.dz-seg button[aria-pressed=true]{background:var(--forest);color:#fff}
.dz-bar{height:4px;background:var(--paper);border-radius:4px;overflow:hidden}
.dz-bar span{display:block;height:100%;background:var(--green);transition:width .25s}
.dz-nav{list-style:none;margin:0;padding:0;display:flex;flex-wrap:wrap;gap:4px}
.dz-nav button{font:inherit;display:flex;align-items:center;gap:6px;border:1.5px solid var(--line);background:#fff;border-radius:999px;padding:3px 9px 3px 3px;cursor:pointer;font-size:.75rem;color:var(--ink-2)}
.dz-nav button span{width:20px;height:20px;border-radius:50%;display:grid;place-items:center;background:var(--paper);font-family:var(--mono);font-size:.7rem}
.dz-nav button b{font-weight:600;max-width:0;overflow:hidden;white-space:nowrap;transition:max-width .2s}
.dz-nav button[aria-current=step]{border-color:var(--forest)}
.dz-nav button[aria-current=step] b,.dz-nav button:hover b,.designer[data-mode=all] .dz-nav button b{max-width:180px}
.dz-nav button[aria-current=step] span{background:var(--forest);color:#fff}
.dz-nav button.done span{background:var(--green);color:#fff}
.dz-banner{font-size:.86rem;padding:8px 12px;border-radius:8px}
.dz-banner.ok{background:#EFFAD9;border:1px solid #CDE99A}
.dz-banner.warn{background:#FFF6E0;border:1px solid #F0D79A}
.dz-body{overflow-y:auto;overscroll-behavior:contain;padding:16px}
.designer[data-mode=all] .dz-step + .dz-step{margin-top:28px;padding-top:22px;border-top:1px solid var(--line)}
.dz-step[hidden]{display:none}
.dz-step-k{font-family:var(--mono);font-size:.7rem;letter-spacing:.08em;text-transform:uppercase;color:var(--green-ink);margin:0}
.dz-step h3{margin:4px 0 6px;font-size:1.3rem}
.dz-step-d{margin:0 0 14px;color:var(--ink-2);font-size:.93rem}
.dz-grid{display:grid;gap:12px}
.dz-grid .field{display:grid;gap:4px}
.dz-grid .field[hidden]{display:none}
.dz-grid label,.dz-sliders label{font-size:.85rem;font-weight:600;color:var(--ink-2)}
.dz-body select{font:inherit;font-size:.92rem;padding:8px 9px;border:1.5px solid var(--line);border-radius:6px;background:#fff;width:100%}
.dz-sliders{display:grid;gap:16px;margin-bottom:14px}
.dz-sliders label{display:flex;justify-content:space-between;gap:10px}
.dz-sliders output{font-family:var(--mono);font-size:.85rem;color:var(--ink)}
input[type=range]{width:100%;accent-color:var(--green)}
.dz-cards{display:grid;gap:10px;margin-top:12px}
.dz-card{border:1.5px solid var(--line);border-radius:10px;padding:14px;background:#fff;display:grid;gap:6px;text-align:left;font:inherit;color:inherit}
.dz-card h4{margin:0;font-size:1rem}
.dz-card p{margin:0;font-size:.86rem;color:var(--ink-2)}
.dz-card-btn{cursor:pointer}
.dz-card-btn[aria-pressed=true]{border-color:var(--green);background:#F1FAF3}
.dz-card-row{display:grid;grid-template-columns:minmax(0,1fr) auto;gap:8px;margin-top:6px}
.dz-badge{justify-self:start;background:var(--signal);color:var(--forest);font-family:var(--mono);font-size:.68rem;font-weight:600;letter-spacing:.06em;text-transform:uppercase;padding:3px 8px;border-radius:999px}
.sr{position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0)}
.dz-secs{list-style:none;margin:0;padding:0;display:grid;gap:6px}
.dz-sec{width:100%;display:grid;grid-template-columns:28px minmax(0,1fr) auto;gap:10px;align-items:center;text-align:left;font:inherit;font-size:.92rem;padding:8px 10px;border-radius:8px;border:1.5px solid var(--line);background:transparent;color:var(--ink-2);cursor:pointer}
.dz-sec .tag{width:26px;height:26px;border-radius:50%;display:grid;place-items:center;border:1.5px dashed var(--ink-3);font-family:var(--mono);font-size:.75rem}
.dz-sec .meta{font-family:var(--mono);font-size:.7rem;color:var(--ink-3)}
.dz-sec[aria-pressed=true]{border-color:var(--green);color:var(--ink);background:#F1FAF3}
.dz-sec[aria-pressed=true] .tag{background:var(--green);border:0;color:#fff}
.dz-foot{display:flex;align-items:center;gap:10px;padding:12px 16px;border-top:1px solid var(--line);background:#fff}
.dz-foot #dz-next{margin-left:auto}
.dz-stepno{font-size:.8rem;color:var(--ink-3);overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
.dz-link{font:inherit;font-size:.85rem;background:none;border:0;color:var(--green-ink);text-decoration:underline;cursor:pointer;padding:0}
.dz-reset{justify-self:center;padding:0 0 12px}
.dz-sum{font-size:.95rem}
#dz-review h4{display:flex;justify-content:space-between;margin:18px 0 8px;font-size:.95rem}
.dz-rlist{margin:0;padding-left:20px;font-size:.9rem;display:grid;gap:2px}
.dz-rdl{margin:0;display:grid;gap:6px;font-size:.88rem}
.dz-rdl div{display:grid;grid-template-columns:1fr 1fr;gap:10px;border-bottom:1px dashed var(--line);padding-bottom:6px}
.dz-rdl dt{color:var(--ink-3)}
.dz-rdl dd{margin:0;font-weight:600}
.dz-submit{display:flex;flex-wrap:wrap;gap:10px;margin-top:20px}
.dz-note{font-size:.82rem;margin-top:12px}
.dz-empty{font-size:.88rem}
/* full screen */
.dz-lock,.dz-lock body{overflow:hidden}
.designer.dz-fullscreen{position:fixed;inset:0;z-index:300;background:var(--paper);max-width:none;padding:12px;--dz-h:calc(100vh - 24px)}
.designer.dz-fullscreen .dz-panel{top:0}
.designer.dz-fullscreen .dz-stage{height:calc(100vh - 24px - 140px)}
@media (max-width:1100px){.designer{grid-template-columns:minmax(0,1fr) 380px}.dz-readout{grid-template-columns:repeat(2,minmax(0,1fr))}}
@media (max-width:900px){
  .dz-intro-in{grid-template-columns:1fr}
  .designer{grid-template-columns:1fr}
  .dz-stage{height:62vh;min-height:360px}
  .dz-panel{position:static;height:auto;max-height:none}
  .dz-body{overflow:visible}
  .dz-readout{grid-template-columns:repeat(2,minmax(0,1fr))}
  .designer.dz-fullscreen{overflow:auto}
}
</style>
<script>window.CAE_QS = <?= json_encode(QUICK_SHIP, JSON_UNESCAPED_SLASHES) ?>;</script>
<script type="importmap"><?= json_encode(['imports' => ['three' => url('assets/vendor/three/three.module.js'), 'three/addons/' => url('assets/vendor/three/addons') . '/']], JSON_UNESCAPED_SLASHES) ?></script>
<script type="module" src="<?= e(asset('js/designer.js')) ?>"></script>
<script>window.CAE_CONTACT_URL = <?= json_encode(url('contact')) ?>;</script>
<?php page_foot(false); ?>
