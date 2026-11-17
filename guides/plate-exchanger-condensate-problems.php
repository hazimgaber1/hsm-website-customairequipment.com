<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('plate-exchanger-condensate-problems'); ?>
<p class="lede">Plate exchangers condense a lot of water on the exhaust side in winter and on the outdoor air side in humid summers. When that water has nowhere to go, it overflows into the casing, freezes in the drain, or blows downstream. Most problems trace back to the trap, the drain line's route through cold space, or a pan that does not catch the water where the core actually releases it.</p>

<h2>Where the water comes from</h2>
<p>In heating season, warm, humid exhaust cools as it passes the plates. Below its dew point it condenses, and the water runs down the exhaust channels to the bottom of the core. A 10,000 cfm exhaust stream at 72 F and 30 percent RH, cooled to 35 F, can condense on the order of tens of pounds of water per hour. In humid summers, outdoor air can condense on the supply side if the exhaust is cool enough.</p>
<p>The amount varies with conditions, but the point is that a plate drain is not an occasional drip line. It carries a steady flow for long periods, often in freezing weather.</p>

<h2>Symptom: water overflowing into the casing</h2>
<h3>Cause: trap not sized for the static pressure</h3>
<p><strong>Check:</strong> measure the static pressure at the drain pan location with the fans running. A pan on a negative-pressure section needs a trap whose seal depth exceeds that negative pressure, or water is held in the pan by suction. Look for water standing in the pan while the drain line runs dry.</p>
<p><strong>Fix:</strong> rebuild the trap with adequate depth and pad height. The trap geometry is explained in <a href="<?= url('guides/condensate-trap-and-pad-height') ?>">condensate trap and pad height</a>.</p>
<h3>Cause: pan too short or misaligned</h3>
<p><strong>Check:</strong> watch where water leaves the core during operation. Air velocity can push water several inches downstream of the core's trailing edge before it falls. If the pan stops at the core frame, water lands on the casing floor.</p>
<p><strong>Fix:</strong> extend the pan or add a secondary pan downstream, sloped to the same drain.</p>
<h3>Cause: drain blocked</h3>
<p><strong>Check:</strong> flush the drain with water with the fans off. Look for debris, biological growth or scale at the pan outlet and trap.</p>
<p><strong>Fix:</strong> clean, add a cleanout tee, and add the drain to the preventive maintenance schedule.</p>
<h3>Cause: no slope or pan sagging</h3>
<p><strong>Check:</strong> pour water into the pan and watch it drain. Puddles that stay indicate inadequate slope or deflection.</p>
<p><strong>Fix:</strong> shim or reinforce the pan. Stainless steel pans with positive slope in two directions drain best.</p>

<h2>Symptom: ice in the drain or at the core</h2>
<h3>Cause: drain line freezing outdoors or in unheated space</h3>
<p><strong>Check:</strong> trace the drain route. Any section outdoors or in a cold mechanical room, especially at the trap, can freeze in sustained cold.</p>
<p><strong>Fix:</strong> insulate and heat-trace the trap and exposed drain, sized for the coldest expected conditions, or reroute the drain through heated space. On rooftop units, many designers locate the trap inside a heated vestibule or the unit itself.</p>
<h3>Cause: frost at the core blocking drainage</h3>
<p><strong>Check:</strong> if ice forms on the plates themselves at the cold corner, meltwater may refreeze in the lower part of the core or in the pan. Rising exhaust-side pressure drop confirms frost.</p>
<p><strong>Fix:</strong> this is a frost control problem rather than a drain problem. Review the frost strategy in <a href="<?= url('guides/frost-control-wheels-and-plates') ?>">frost control strategies for wheels and plates</a>.</p>
<h3>Cause: pan below the cold corner freezing</h3>
<p><strong>Check:</strong> in units where outdoor air at subfreezing temperature passes directly over the pan, the pan itself can freeze even when the core is clear.</p>
<p><strong>Fix:</strong> insulate the underside of the pan, add a small heat trace on the pan outlet, or rearrange the airflow so the pan sits in exhaust air.</p>

<h2>Symptom: water carried downstream</h2>
<h3>Cause: velocity too high through the core</h3>
<p><strong>Check:</strong> measure face velocity on the condensing side. Water droplets can be stripped from plate edges at high velocity and carried into downstream filters or fans.</p>
<p><strong>Fix:</strong> reduce airflow to design values. If the design velocity itself is too high, add a moisture eliminator downstream of the core.</p>
<h3>Cause: water bridging plates</h3>
<p><strong>Check:</strong> inspect plate spacing; narrow channels can hold water films that release as slugs.</p>
<p><strong>Fix:</strong> verify the core orientation matches the manufacturer's drainage design. Some cores must be installed with channels vertical to drain.</p>

<h2>Symptom: water appearing on the supply side</h2>
<p>If condensate appears in the supply section in winter, water is moving from the exhaust side through the core.</p>
<ul>
<li><strong>Check</strong> core seams and the partition between airstreams for failed sealant or damage.</li>
<li><strong>Check</strong> whether a single pan serves both sides with an open path between them.</li>
<li><strong>Fix</strong> by resealing or replacing the core and separating the drains so each side has its own pan and trap.</li>
</ul>
<p class="warn">Never combine supply-side and exhaust-side pans on one trap with an open air path between them. Pressure differences will push air, and possibly water, from one side to the other.</p>

<h2>Prevention checklist</h2>
<ul>
<li>Separate drain pan and trap for each side that can condense.</li>
<li>Trap depth sized for the section's maximum static pressure, including dirty filter conditions.</li>
<li>Pans extending past the core's trailing edge in the direction of airflow.</li>
<li>Heat-traced and insulated drain lines wherever they leave heated space.</li>
<li>Cleanouts at each trap and a maintenance task to flush them each season.</li>
<li>A water sensor in the casing floor near the core, alarmed to the BAS.</li>
</ul>
<?php guide_end([
    ['Why does my plate heat exchanger leak water?', 'Usually the drain trap is too shallow for the section\'s negative pressure, so suction holds water in the pan until it overflows. Other causes include a short pan, a blocked drain or a pan without slope.'],
    ['How do I stop a plate exchanger drain from freezing?', 'Insulate and heat-trace the trap and any drain line outside heated space, or route the drain through heated space. If ice forms on the core itself, fix the frost control strategy instead.'],
    ['Can condensate move from the exhaust side to the supply side?', 'Only through a failed core seam or a shared drain path. Check the core sealant and give each airstream its own pan and trap.'],
]);
