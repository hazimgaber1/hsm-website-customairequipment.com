<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('eatr-oacf-wheel-leakage'); ?>
<p class="lede">EATR (exhaust air transfer ratio) tells you what fraction of the supply air leaving a recovery device came from the exhaust. OACF (outdoor air correction factor) tells you how much more outdoor air must enter the device to deliver the outdoor airflow you need. Together they let you size fans and prove ventilation compliance when using a wheel.</p>

<h2>Why wheels leak at all</h2>
<p>A rotary wheel has two leakage mechanisms that a fixed exchanger does not.</p>
<ul>
<li><strong>Carryover.</strong> Each flute of the matrix is full of exhaust air when it rotates out of the exhaust stream. That trapped air is swept into the supply when the flute enters the supply side. The volume depends on wheel depth, porosity, diameter and rotational speed.</li>
<li><strong>Seal leakage.</strong> The wheel turns between fixed seals at the perimeter and along the central partition. No rotating seal is perfect, so air passes from the higher-pressure side to the lower-pressure side. The direction and size depend on the pressure difference across the seals.</li>
</ul>
<p>Carryover always moves exhaust toward the supply. Seal leakage can move either way. If the outdoor air side runs at higher pressure than the exhaust side, seal leakage pushes outdoor air into the exhaust, which wastes outdoor air but protects supply quality. If the exhaust side is at higher pressure, seal leakage pushes exhaust into the supply.</p>

<h2>Exhaust air transfer ratio</h2>
<p>EATR is measured with a tracer gas. The test injects a tracer into the exhaust entering the wheel and measures concentrations at the outdoor air inlet, the supply outlet and the exhaust inlet:</p>
<p class="formula">EATR = (C2 − C1) ÷ (C3 − C1)</p>
<p>C1 is the concentration in the outdoor air entering, C2 in the supply air leaving and C3 in the exhaust air entering. An EATR of 0.03 means 3 percent of the supply air leaving the wheel is recirculated exhaust.</p>
<p>EATR captures carryover plus any seal leakage from exhaust to supply. It is reported at stated airflows and a stated pressure difference between the two sides, so it is not a fixed property of the wheel. A wheel with a low EATR at one pressure condition can perform badly if installed with the wrong fan arrangement.</p>
<h3>What a typical value looks like</h3>
<p>Wheels with a purge sector and favourable pressure arrangement commonly show EATR below a few percent. Wheels without a purge, or installed with the exhaust side at higher pressure, can be much higher. Always read the value at the pressure condition that matches your design, not the best-case catalog line.</p>

<h2>Outdoor air correction factor</h2>
<p>OACF compares the outdoor air entering the wheel to the supply air leaving it:</p>
<p class="formula">OACF = Q1 ÷ Q2</p>
<p>Q1 is outdoor air entering the supply side of the device and Q2 is supply air leaving. An OACF above 1.0 means some outdoor air is lost to the exhaust through seal leakage before it reaches the supply. An OACF of 1.08 means you must pull 8 percent more outdoor air through the intake than you deliver.</p>
<p>OACF is the number that sizes the supply fan, the outdoor air damper and the intake louvre. If the supply fan is downstream of the wheel, it handles Q2; the intake and the outdoor face of the wheel handle Q1.</p>

<h2>Using EATR and OACF together</h2>
<p>The two corrections affect the outdoor airflow calculation in different ways. A practical sequence:</p>
<ol>
<li>Start with the outdoor airflow required by ventilation design, for example from ASHRAE 62.1, as the net outdoor air the space must receive.</li>
<li>Correct the supply leaving the wheel for recirculated exhaust: Q2 = required outdoor air ÷ (1 − EATR).</li>
<li>Correct for outdoor air lost through seals: Q1 = Q2 × OACF.</li>
<li>Size the exhaust side for the building exhaust plus the outdoor air that crosses into it.</li>
</ol>
<h3>Example</h3>
<p>The space needs 8,000 cfm of net outdoor air. The selected wheel at the design pressure condition has EATR = 0.02 and OACF = 1.06.</p>
<p>Q2 = 8,000 ÷ 0.98 ≈ 8,160 cfm of supply air leaving the wheel.</p>
<p>Q1 = 8,160 × 1.06 ≈ 8,650 cfm entering the outdoor air side.</p>
<p>The intake and outdoor air face must handle about 8,650 cfm, and roughly 490 cfm of outdoor air crosses into the exhaust through the seals, adding to the exhaust fan duty.</p>
<p class="note">ASHRAE 62.1 addresses recirculation of exhaust through energy recovery devices in terms of air class. Check the edition adopted in your jurisdiction for how leakage is treated for each class.</p>

<h2>Purge sectors</h2>
<p>A purge sector is a small wedge-shaped zone at the seal on the side where the wheel rotates from exhaust into supply. Outdoor air flows through the flutes in that wedge and out to the exhaust, flushing trapped exhaust air before the flute enters the supply side. It reduces carryover, sometimes dramatically, at the cost of a small amount of outdoor air sent straight to exhaust.</p>
<p>A purge only works if the outdoor air side is at higher pressure than the exhaust side at the wheel. Without that pressure difference, there is nothing to drive air through the purge. The purge angle is usually adjustable so it can be matched to the actual pressure difference after balancing. How fan locations set that difference is covered in <a href="<?= url('guides/fan-placement-recovery-leakage') ?>">how to place fans to minimize leakage</a>.</p>

<h2>Reading certified data</h2>
<p>AHRI 1060 certified ratings report EATR and OACF along with effectiveness and pressure drop at defined test conditions. When comparing wheels, check that the values are reported at the same airflows and pressure differences. See <a href="<?= url('guides/ahri-1060-energy-recovery-ratings') ?>">AHRI 1060 ratings</a> for what the program covers.</p>
<?php guide_end([
    ['What is EATR on an energy recovery wheel?', 'Exhaust air transfer ratio is the fraction of supply air leaving the wheel that came from the exhaust. It is measured with tracer gas and includes carryover plus any seal leakage from exhaust to supply.'],
    ['What does an OACF of 1.1 mean?', 'It means 10 percent more outdoor air must enter the wheel than leaves it as supply, because some outdoor air leaks to the exhaust through the seals. Size the intake and outdoor air damper for the larger flow.'],
    ['Does a purge sector eliminate wheel carryover?', 'A purge sector greatly reduces carryover by flushing the flutes with outdoor air before they enter the supply side. It only works when the outdoor air side is at higher pressure than the exhaust side at the wheel.'],
]);
