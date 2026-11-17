<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('prefilter-and-final-filter-arrangement'); ?>
<p class="lede">Place the prefilter where outdoor and return air first enter the unit, ahead of every coil, so it protects the coils and the final filter from coarse dust. Place the final filter either just upstream of the cooling coil (simplest, common in commercial work) or downstream of the cooling coil and supply fan (preferred where the final filter's job is to deliver clean air to critical spaces), keeping it away from saturated air and water droplets.</p>

<h2>What each stage is for</h2>
<p>A two-stage filter arrangement splits the job:</p>
<ul>
<li><strong>Prefilter</strong> (typically MERV 7 to 8, or ISO ePM10 class): captures lint, coarse dust, pollen and debris. It is inexpensive, changed more often, and extends the life of the more expensive final filter.</li>
<li><strong>Final filter</strong> (typically MERV 13 to 15, sometimes MERV 16 or HEPA in critical applications): captures fine particles and sets the delivered air quality.</li>
</ul>
<p>ASHRAE 62.1 requires a minimum level of filtration upstream of cooling coils and other wetted surfaces to keep them clean, and requires higher-efficiency filtration of outdoor air in areas that exceed outdoor particulate limits. Check the edition adopted in your jurisdiction for the exact MERV values and conditions. Healthcare facilities designed to ASHRAE 170 or CSA Z317.2 have prescribed filter bank locations; those requirements are covered in <a href="<?= url('guides/ashrae-170-filter-bank-specification') ?>">ASHRAE 170 filter bank specification</a>.</p>

<h2>Step-by-step arrangement</h2>
<ol>
<li><strong>Define the efficiency target for each stage.</strong> Start from the code minimum, owner standards and any special requirement such as wildfire smoke resilience. Efficiency selection itself is covered in <a href="<?= url('guides/filter-selection-checklist') ?>">the filter selection checklist</a>.</li>
<li><strong>Place the prefilter at the mixed-air or outdoor air entry.</strong> In a mixed-air unit, place it after the mixing box so it filters both return and outdoor air. Where outdoor air enters through its own section in a 100% outdoor air unit, place it immediately after the intake damper, before any preheat coil, unless the climate requires preheat first to keep snow off the filter.</li>
<li><strong>Keep the prefilter upstream of all coils and energy recovery.</strong> Coil fins and heat exchanger passages are much harder to clean than a filter is to replace. Energy recovery devices also need their own filters on the exhaust side.</li>
<li><strong>Choose the final filter location.</strong>
  <ul>
  <li><em>Upstream of the cooling coil</em>, next to the prefilter in a combined filter section: compact, one access section, final filter stays dry. The coil, drain pan and fan downstream are not protected from anything the final filter would catch, and any particles shed from those components reach the supply air.</li>
  <li><em>Downstream of the cooling coil and supply fan</em>, in a final filter section on the discharge side: captures particles shed by the coil, pan and fan, so supply air quality is set by the last element. Requires extra length and access, and the filter must be protected from moisture.</li>
  </ul>
</li>
<li><strong>Protect a downstream final filter from moisture.</strong> Air leaving a cooling coil is near saturation. Placing the final filter downstream of the supply fan uses fan heat to raise air temperature a degree or two and lower relative humidity. Keep the filter well clear of the coil's leaving face so droplets settle into the pan first, and confirm the coil face velocity does not cause carryover. Wet filter media supports microbial growth and can collapse.</li>
<li><strong>Allow distance for uniform airflow.</strong> A filter directly at a fan discharge sees a highly non-uniform velocity profile, which loads the filter unevenly and can damage media. Provide a diffuser plate, a plenum or a distance recommended by the fan and filter manufacturers between the fan and a downstream filter bank.</li>
<li><strong>Size each bank for face velocity.</strong> Both banks should run at or below the filter's rated face velocity, commonly 500 fpm (2.5 m/s) or lower. See <a href="<?= url('guides/filter-face-velocity-efficiency') ?>">filter face velocity and efficiency</a>.</li>
<li><strong>Provide access to both sides of each bank.</strong> An access section upstream of the prefilter, and one between banks or after the final filter, lets technicians inspect for bypass and change filters without reaching through other components.</li>
<li><strong>Install differential pressure monitoring on each bank.</strong> Each stage loads at a different rate, so each needs its own gauge or transmitter.</li>
<li><strong>Carry each bank's final pressure drop in the fan selection.</strong></li>
</ol>

<h2>Typical arrangements</h2>
<table>
<thead><tr><th>Application</th><th>Prefilter location</th><th>Final filter location</th></tr></thead>
<tbody>
<tr><td>Office or school mixed-air unit</td><td>After mixing box</td><td>Same section as prefilter, upstream of coil</td></tr>
<tr><td>100% outdoor air unit, cold climate</td><td>After intake damper (or after preheat if snow is a concern)</td><td>Upstream of cooling coil, or after supply fan</td></tr>
<tr><td>Hospital surgical suite</td><td>Upstream of coils</td><td>Downstream of cooling coil and fan, per healthcare standard</td></tr>
<tr><td>Laboratory or pharmaceutical supply</td><td>Upstream of coils</td><td>Downstream of fan; HEPA may be terminal</td></tr>
<tr><td>Unit with energy recovery</td><td>Upstream of recovery on both airstreams</td><td>Downstream of recovery on supply</td></tr>
</tbody>
</table>

<h2>Draw-through and blow-through considerations</h2>
<p>In a draw-through unit, the fan is after the cooling coil, so a final filter after the fan sees warmed, slightly drier air and sits in a positive-pressure section. In a blow-through unit, the fan is before the coil; a final filter after the coil would see saturated air with no fan heat, which is usually avoided, so the final filter typically goes upstream of the fan. The fan arrangement tradeoffs are covered in <a href="<?= url('guides/draw-through-vs-blow-through-fan-arrangement') ?>">draw-through vs blow-through</a>.</p>
<p class="note">Filter sections under positive pressure push air outward through any gap around the filter frame. The direction of leakage reverses compared with a negative-pressure section, which affects which side of the frame needs the best seal.</p>
<?php guide_end([
    ['Should the final filter be before or after the cooling coil?', 'Both are used. Upstream of the coil is compact and keeps the filter dry, and is common in commercial units. Downstream of the coil and supply fan captures particles shed by the coil, pan and fan, and is used in healthcare and other critical applications, with care taken to keep the filter dry.'],
    ['What MERV should a prefilter be?', 'Prefilters are commonly MERV 7 or 8. They capture coarse dust and lint to protect coils and extend the life of the final filter. ASHRAE 62.1 sets a minimum efficiency for filtration upstream of cooling coils; check the edition adopted locally.'],
    ['Why put a final filter after the supply fan?', 'Fan heat raises the air temperature slightly, lowering relative humidity so the filter stays drier than it would right after the coil. It also means the final filter captures anything shed by the coil, drain pan and fan before air reaches the ductwork.'],
]);
