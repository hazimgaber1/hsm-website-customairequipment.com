<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('welding-fume-ventilation'); ?>
<p class="lede">Welding fume control works best in layers: capture fume at the arc with local exhaust wherever possible, use general dilution ventilation to deal with what escapes, and supply tempered makeup air to replace everything that is exhausted. Size each layer from the processes, materials and layout of the shop rather than from a single air change rate.</p>

<h2>Step 1: Characterize the welding</h2>
<p>Fume generation and hazard depend on the process and materials. Record:</p>
<ul>
<li><strong>Processes:</strong> GMAW (MIG), FCAW (flux-cored), SMAW (stick), GTAW (TIG), plasma cutting, grinding. Flux-cored and stick welding generally generate more fume than TIG.</li>
<li><strong>Base metals and consumables:</strong> mild steel, stainless steel (chromium and nickel), galvanized steel (zinc), aluminum, coated materials. Stainless and coated metals raise hazards substantially; hexavalent chromium from stainless welding is regulated with low exposure limits in many jurisdictions.</li>
<li><strong>Number of stations</strong> and their duty cycle (arc-on time as a percentage of the shift).</li>
<li><strong>Workpiece size and movement.</strong> Small parts at fixed benches allow close capture; large weldments on a shop floor are harder.</li>
</ul>
<p class="note">Exposure limits for welding fume constituents are set by occupational health regulations, which vary by province and state. An industrial hygienist should confirm the target concentrations and, where needed, measure exposures after installation.</p>

<h2>Step 2: Capture fume at the source</h2>
<p>Local exhaust ventilation removes fume before it reaches the welder's breathing zone or spreads through the shop. Options, roughly from most to least effective:</p>
<ol>
<li><strong>On-gun fume extraction:</strong> a small nozzle on the welding gun captures fume at the arc. Very effective for MIG and flux-cored welding; requires a high-vacuum, low-volume extraction system.</li>
<li><strong>Downdraft or backdraft benches:</strong> for small parts, air is drawn through a perforated table or a slotted back panel.</li>
<li><strong>Movable capture arms (fume arms):</strong> a flexible arm with a hood that the welder positions close to the arc. Effective only if kept within a short distance, typically about one hood diameter, of the arc.</li>
<li><strong>Enclosing booths</strong> with exhaust, used for repetitive welding of medium-size parts.</li>
<li><strong>Canopy hoods</strong> over welding areas, usually the least effective because fume rises through the welder's breathing zone.</li>
</ol>
<p>Capture velocity at the arc, commonly in the range of 100 fpm (0.5 m/s), must be strong enough to overcome thermal rise and cross-drafts, without being so high that it disturbs shielding gas. Industrial ventilation references give hood designs and airflows for each type. Airflow per fume arm is typically several hundred to over a thousand cfm depending on hood size.</p>

<h2>Step 3: Size the local exhaust system</h2>
<ul>
<li>Sum the airflow for all capture devices, applying diversity only where stations genuinely do not operate simultaneously.</li>
<li>Design ductwork at a velocity that keeps fume particles airborne, often around 2,000 to 3,000 fpm (10 to 15 m/s) for welding fume.</li>
<li>Add the pressure drop of the filter or collector at its loaded condition.</li>
<li>Choose filtration: cartridge collectors with high-efficiency media are common. If filtered air is returned to the shop, filter efficiency and monitoring must meet the requirements for recirculation, and hexavalent chromium or other highly toxic fume may preclude it.</li>
<li>Include spark arrestance ahead of filters to reduce fire risk.</li>
</ul>
<p>Fan selection for collector systems is covered in <a href="<?= url('guides/dust-collection-fans') ?>">fans for dust collection systems</a>.</p>

<h2>Step 4: Add general dilution ventilation</h2>
<p>Even good local exhaust lets some fume escape. General ventilation dilutes the residual and removes heat. Approaches:</p>
<ul>
<li><strong>Displacement-style ventilation:</strong> supply air low at low velocity, exhaust high. Warm fume plumes rise to the roof where exhaust removes them, while workers stay in cleaner air near the floor. This works well in welding shops because fume is buoyant.</li>
<li><strong>Roof exhaust fans</strong> sized to remove fume-laden air from the upper zone.</li>
<li><strong>Ambient air cleaners</strong> that recirculate and filter shop air. They supplement but do not replace capture at the source.</li>
</ul>
<p>Estimate dilution airflow from the fume generation rate that escapes capture and the allowable concentration with a safety factor, or start from industrial ventilation guidance per welder and refine with exposure measurements.</p>
<p class="warn">Do not use mixing ventilation that blows across welding stations at high velocity. It spreads fume into breathing zones and disturbs shielding gas, causing weld defects.</p>

<h2>Step 5: Provide makeup air</h2>
<p>All air exhausted, by local exhaust and general exhaust, must be replaced. Without makeup air the shop goes negative, local exhaust underperforms, doors become hard to open, and cold air leaks in.</p>
<ol>
<li>Total the exhaust airflow at standard conditions.</li>
<li>Size tempered makeup air for nearly all of it.</li>
<li>Deliver makeup air low, at low velocity, away from welding stations, so it supports displacement and does not disrupt capture.</li>
<li>Calculate heating capacity for winter design; the method is in <a href="<?= url('guides/industrial-makeup-air-calculation') ?>">calculating industrial makeup air</a>.</li>
</ol>
<p>Where filtered air from fume collectors is safely returned to the shop, makeup air and heating requirements drop considerably. Weigh that saving against the health risk and regulatory limits on recirculation.</p>

<h2>Step 6: Control and operate</h2>
<ul>
<li>Automatically start local exhaust with the welding power source, using current sensors on welding leads, to make sure capture runs when welding starts.</li>
<li>Use VFDs on central fume systems to adjust to the number of active stations, with dampers that close at idle stations.</li>
<li>Interlock makeup air with exhaust fans.</li>
<li>Monitor filter differential pressure and alarm on high values.</li>
<li>Train welders to position capture hoods correctly; most failures of fume arms come from hoods left too far from the arc.</li>
</ul>

<h2>Step 7: Verify</h2>
<p>After installation, measure capture velocities and airflows at each station, check shop pressure relative to outdoors, and arrange breathing zone exposure monitoring by an industrial hygienist. Adjust and retrain based on results. Chemical fume exhaust involving acids or solvents uses different materials and methods; see <a href="<?= url('guides/frp-vs-coated-steel-corrosive-fans') ?>">FRP vs coated steel fans</a>.</p>
<?php guide_end([
    ['What is the best way to remove welding fume?', 'Capture it at the source with on-gun extraction, downdraft benches or properly positioned fume arms, then use general ventilation to deal with what escapes, and replace exhausted air with tempered makeup air.'],
    ['How close should a welding fume arm be to the arc?', 'Typically within about one hood diameter of the arc. Capture velocity drops rapidly with distance, so an arm left a few feet away captures very little.'],
    ['Can welding fume collectors return air to the shop?', 'Sometimes, if filtration and monitoring meet the requirements for recirculation and the fume is not too toxic. Stainless steel welding that produces hexavalent chromium may make recirculation inappropriate. Check regulations and consult an industrial hygienist.'],
]);
