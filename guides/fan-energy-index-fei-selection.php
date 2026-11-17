<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-energy-index-fei-selection'); ?>
<p class="lede">Fan Energy Index (FEI) is the ratio of a reference fan's electrical input power to the selected fan's electrical input power at the same airflow and pressure. A higher FEI means less power for that duty, and because the reference is identical for every fan at the same duty point, FEI lets you compare competing selections directly.</p>

<h2>Why the industry moved to FEI</h2>
<p>Older fan efficiency metrics rated the fan at its single best point. A fan could carry an excellent peak efficiency grade and still be selected far from that peak, where it wasted energy. FEI fixes that by being a <em>duty-point</em> metric: every fan has a different FEI at every airflow and pressure it can deliver. The question is no longer "is this a good fan?" but "is this a good selection for this job?"</p>
<p>The calculation method is defined in AMCA Standard 208, and the metric is used by ASHRAE 90.1, model codes, utility programs and federal efficiency regulation work. Minimum required values, and which fans are covered, are covered in the codes guide on <a href="<?= url('guides/fan-efficiency-regulations-fei') ?>">fan efficiency regulations</a>. This guide covers how the number works and how to use it.</p>

<h2>How FEI is calculated</h2>
<p class="formula">FEI = Reference fan electrical input power ÷ Actual fan electrical input power</p>
<p>Both powers are evaluated at the same airflow, pressure and air density.</p>
<h3>The reference fan</h3>
<p>The reference (baseline) electrical power comes from a formula in AMCA 208. It takes the duty point airflow and pressure, applies a fixed reference fan efficiency curve that improves slightly with size, then adds the losses of a reference motor and, where relevant, a reference belt drive. The result is the power a "just compliant" fan would draw at that duty. The formula exists in total pressure and static pressure versions; housed fans are generally rated on total pressure and unhoused plenum fans on static pressure.</p>
<h3>The actual fan</h3>
<p>The actual fan's electrical input power comes from the manufacturer's certified performance, combined with the actual or default motor, transmission and drive losses for the configuration. A fan sold without a motor uses default reference component losses; a fan sold with its motor and VFD can be rated as the complete assembly, which credits a better motor or a direct-drive arrangement.</p>
<p class="note">Because the reference changes with duty but not with the fan, FEI values can only be compared between selections at the same airflow and pressure. Comparing FEI at two different duty points tells you little.</p>

<h2>Worked comparison between two selections</h2>
<p>A supply fan section must deliver 18,000 cfm (8,500 L/s) at 3.5 in. w.c. (870 Pa) static. Two vendors offer:</p>
<table>
<thead><tr><th>Item</th><th>Selection A</th><th>Selection B</th></tr></thead>
<tbody>
<tr><td>Wheel</td><td>27 in. plenum fan</td><td>33 in. plenum fan</td></tr>
<tr><td>Speed</td><td>2,050 rpm</td><td>1,520 rpm</td></tr>
<tr><td>FEI at duty point</td><td>1.12</td><td>1.34</td></tr>
<tr><td>Electrical input power (from vendor)</td><td>16.4 kW</td><td>13.7 kW</td></tr>
</tbody>
</table>
<p>Because the reference power is identical for both at this duty, the ratio of the actual powers is the inverse of the ratio of FEIs:</p>
<p class="formula">Power B ÷ Power A = FEI A ÷ FEI B = 1.12 ÷ 1.34 = 0.836</p>
<p>Selection B draws about 16% less power, which matches the vendors' figures: 16.4 × 0.836 = 13.7 kW. At 6,000 operating hours a year, 2.7 kW is around 16,000 kWh a year at full duty. Actual savings depend on how much time the fan spends at part load.</p>

<h2>What FEI does and does not capture</h2>
<ul>
<li><strong>Includes:</strong> fan aerodynamic efficiency at the duty point, and motor, belt and drive losses when the rating covers them.</li>
<li><strong>Excludes:</strong> system effect from the installation, which the fan does not control. An excellent FEI selection placed in a cramped cabinet still loses pressure. See <a href="<?= url('guides/system-effect-amca-201') ?>">system effect</a>.</li>
<li><strong>Excludes:</strong> part-load operation. FEI is reported at the design point. A fan that is excellent at full flow may be mediocre at the 60% airflow it runs at most of the year, so check FEI at representative part-load points too.</li>
<li><strong>Excludes:</strong> sound, size, weight and cost, which still decide many selections.</li>
</ul>

<h2>Using FEI on fan arrays</h2>
<p>For an array, the duty point for each fan is the total airflow divided by the number of running fans, at the full system pressure. FEI is evaluated per fan at that point. Because a redundant array runs each fan below its design maximum in normal operation, check FEI at the normal running point as well as at the failure-mode point. A selection that only looks good in failure mode will waste energy for most of its life.</p>

<h2>Practical selection steps</h2>
<ol>
<li>Fix the duty point: design airflow and static pressure, including internal component losses and system effect allowances.</li>
<li>Ask each vendor for FEI at that duty point and for electrical input power, and confirm whether the value includes the actual motor and drive or default losses.</li>
<li>Compare FEI only at identical duty points.</li>
<li>Repeat at one or two part-load points that reflect expected operation.</li>
<li>Weigh the power difference against wheel size, cabinet length and sound before deciding.</li>
</ol>
<p>The broader method for normalizing fan power across competing air handler bids is set out in <a href="<?= url('guides/comparing-fan-energy-between-bids') ?>">comparing fan energy between bids</a>.</p>
<?php guide_end([
    ['What does an FEI of 1.0 mean?', 'It means the fan uses exactly the same electrical input power as the reference fan defined in AMCA 208 at that airflow and pressure. Values above 1.0 use less power than the reference.'],
    ['Can I compare FEI values for fans at different duty points?', 'Not meaningfully. The reference power changes with airflow and pressure, so FEI comparisons are only valid between selections evaluated at the same duty point.'],
    ['Does FEI include the motor and drive?', 'Yes. FEI is based on electrical input power, so it includes motor and transmission losses. A fan rated without its motor uses default reference losses for those components.'],
    ['Is a higher FEI always the better selection?', 'For energy at that duty point, yes. The final choice still has to account for part-load operation, sound, cabinet size and cost.'],
]);
