<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('heat-pipe-heat-recovery'); ?>
<p class="lede">A heat pipe exchanger is a bank of sealed, finned tubes charged with refrigerant that spans the exhaust and supply airstreams. The refrigerant evaporates in the warm stream, flows as vapour to the cold stream, condenses, and returns, moving heat with no pump, no motor and no cross-contamination through the partition.</p>

<h2>How a heat pipe moves heat</h2>
<p>Each tube is evacuated, partly filled with a working fluid, and sealed. One end sits in the warm airstream and acts as an evaporator. The other end sits in the cold airstream and acts as a condenser. A solid partition divides the coil face between the two ends, sealed around every tube.</p>
<p>When the warm end absorbs heat, the fluid boils at a nearly constant temperature. The vapour moves to the cold end because the pressure there is lower, condenses on the tube wall, and gives up its latent heat. The liquid then returns to the warm end, either by gravity or by capillary action through a wick or grooved inner surface.</p>
<p>Because the phase change happens at almost uniform temperature along the tube, heat pipes carry a lot of energy for their size. There are no moving parts in the core, and the airstreams never meet.</p>

<h2>Arrangements for exhaust-to-supply recovery</h2>
<h3>Horizontal, side by side</h3>
<p>The supply and exhaust paths sit beside each other, and the tubes run horizontally across both. Gravity return requires a slight slope, with the evaporator end lower. In heating season the exhaust end is the evaporator. In cooling season the roles reverse, and a fixed slope then works against the return. Designs handle this with wicked tubes, a tilt mechanism, or by accepting lower summer performance.</p>
<h3>Vertical, stacked</h3>
<p>The exhaust path sits below the supply path in winter-dominant designs, with the tubes vertical. The exhaust warms the bottom, vapour rises, and condensate falls back. This is very effective for heating recovery and nearly useless for summer recovery unless the airstreams can be swapped.</p>
<h3>Tilt control</h3>
<p>Some exchangers pivot on a central axis. Tilting changes how much liquid returns to the evaporator, which both reverses the operating direction between seasons and modulates capacity. A small actuator does the work.</p>
<p>This guide covers heat pipes between separate exhaust and supply airstreams. Heat pipes wrapped around a cooling coil in a single airstream for dehumidification are a different application, covered in <a href="<?= url('guides/wraparound-heat-pipe-dehumidification') ?>">wraparound heat pipes for dehumidification</a>.</p>

<h2>Performance characteristics</h2>
<ul>
<li><strong>Effectiveness</strong> is typically 45 to 65 percent sensible at balanced flow, depending on rows and face velocity. Adding rows raises effectiveness with diminishing returns.</li>
<li><strong>Latent recovery</strong> is not provided. Condensation may occur on the exhaust side in winter, but the moisture drains away rather than moving to the supply.</li>
<li><strong>Air pressure drop</strong> per side is similar to a coil of the same rows and fin spacing, usually 0.4 to 0.8 in. w.c. (100 to 200 Pa) at 400 to 500 fpm.</li>
<li><strong>Cross-leakage</strong> is limited to small paths around the partition seals and is usually negligible.</li>
<li><strong>Operating range</strong> depends on the working fluid. Common refrigerants suit comfort HVAC temperatures; higher temperature fluids exist for industrial heat.</li>
</ul>
<p>For how these numbers sit against wheels, plates and loops, see <a href="<?= url('guides/air-to-air-recovery-technologies-compared') ?>">wheels vs plates vs runaround loops vs heat pipes</a>.</p>

<h2>Capacity control and frost</h2>
<p>A heat pipe cannot be slowed down like a wheel. Capacity is controlled by:</p>
<ul>
<li>Tilting the exchanger to reduce liquid return.</li>
<li>Face and bypass dampers on the supply side, routing outdoor air around the exchanger.</li>
<li>Splitting the exchanger into sections and isolating some with control valves on the tubes in some designs.</li>
</ul>
<p>Frost forms on the exhaust side when its surface drops below 32 F and the exhaust dew point is above the surface temperature. Bypassing outdoor air around the exchanger or preheating the outdoor air raises the surface temperature. The exhaust side needs a drain pan sized for condensate and occasional meltwater.</p>
<p class="warn">Do not specify a gravity-return heat pipe for summer recovery without confirming the tube slope or tilt direction. A pipe sloped for winter can carry very little heat in reverse.</p>

<h2>Where heat pipes fit well</h2>
<ul>
<li>Laboratory and healthcare exhaust where wheel carryover is not acceptable and the airstreams can be placed side by side.</li>
<li>Units where a maintenance-free core is valued over maximum effectiveness.</li>
<li>Warm or hot exhaust from processes where the working fluid is selected for the temperature range.</li>
<li>Retrofit sections where a short, coil-like module slides into an existing casing more easily than a large plate.</li>
</ul>

<h2>Specification points</h2>
<ul>
<li>Working fluid and its operating temperature range.</li>
<li>Rows, fins per inch, fin and tube materials, and coatings for corrosive exhaust.</li>
<li>Partition construction and seal material, with a maximum leakage value.</li>
<li>Orientation, slope or tilt mechanism and actuator.</li>
<li>Rated effectiveness and pressure drop at stated airflows and entering conditions, preferably from a recognized test such as AHRI 1060 where applicable.</li>
<li>Drain pan under the exhaust section and access for coil cleaning on both faces.</li>
</ul>
<?php guide_end([
    ['How does a heat pipe heat exchanger work?', 'Sealed tubes containing a refrigerant span both airstreams. The fluid boils at the warm end, the vapour flows to the cold end and condenses, and the liquid returns by gravity or wicking. Heat moves without pumps or moving parts.'],
    ['Do heat pipe exchangers work in summer and winter?', 'They can, but gravity-return designs work best in one direction. Tilt mechanisms or wicked tubes allow reversal between seasons. Check the orientation before relying on summer recovery.'],
    ['Do heat pipes leak exhaust air into the supply?', 'Leakage is very low because a sealed partition separates the two airstreams and no matrix carries air across. Only small paths around the partition seals remain.'],
]);
