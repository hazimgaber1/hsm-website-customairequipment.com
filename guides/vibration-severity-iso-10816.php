<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('vibration-severity-iso-10816'); ?>
<p class="lede">ISO 10816 and its successor series ISO 20816 judge the condition of operating machines by broadband vibration velocity measured on bearing housings, sorting readings into zones from "newly commissioned" to "may cause damage". For fans there is also a fan-specific standard, ISO 14694 (paralleled in North America by AMCA 204), which sets limits by application category. Use these to decide whether a running fan is acceptable, needs watching or needs action.</p>

<h2>Why velocity is the measure</h2>
<p>Vibration can be expressed as displacement, velocity or acceleration. At the speeds typical of HVAC fans, roughly 10 to 1,000 Hz of content, velocity correlates well with the energy causing fatigue and wear and stays fairly constant as a severity indicator across speeds. Field severity standards therefore use RMS velocity in mm/s (or in./s in some North American practice; 1 in./s = 25.4 mm/s) measured in a defined broadband range, commonly 10 Hz to 1 kHz for machines above 600 rpm.</p>
<p>Readings are taken on bearing housings or pedestals in two radial directions and, where practical, axially. The highest reading is compared with the zone boundaries.</p>

<h2>The zone concept</h2>
<p>ISO 10816 and ISO 20816 define four evaluation zones:</p>
<table>
<thead><tr><th>Zone</th><th>Meaning</th><th>Typical action</th></tr></thead>
<tbody>
<tr><td>A</td><td>Vibration typical of newly commissioned machines</td><td>None</td></tr>
<tr><td>B</td><td>Acceptable for unrestricted long-term operation</td><td>None; trend it</td></tr>
<tr><td>C</td><td>Unsatisfactory for long-term continuous operation</td><td>Plan corrective work at the next opportunity</td></tr>
<tr><td>D</td><td>Severe enough to cause damage</td><td>Act promptly; consider shutdown</td></tr>
</tbody>
</table>
<p>The numeric boundaries between zones depend on machine size and on whether the support is classed as rigid or flexible. ISO 10816-3, which covers industrial machines above 15 kW (about 20 hp), groups machines by power and gives separate boundaries for rigid and flexible foundations. For medium-size machines (group 2, roughly 15 to 300 kW) the commonly cited A/B, B/C and C/D boundaries are 1.4, 2.8 and 4.5 mm/s RMS on rigid foundations, and 2.3, 4.5 and 7.1 mm/s on flexible foundations. Larger machines have higher boundaries. ISO 10816-3 has been revised into ISO 20816-3; confirm the values in the edition you reference.</p>
<p class="note">A fan on spring isolators is generally treated as a flexible support, because the isolated system's natural frequency is well below running speed. That allows higher readings than a rigidly mounted fan of the same size.</p>

<h2>Fan-specific limits: ISO 14694 and AMCA 204</h2>
<p>Because ISO 10816-3 covers general machinery, the fan industry developed ISO 14694, and AMCA publishes AMCA 204, which aligns closely with it. These define fan application categories (labelled BV-1 to BV-5) based on how critical and how large the application is. Commercial HVAC fans fall in the middle categories; process and critical fans fall in the higher ones.</p>
<p>For each category the standards give:</p>
<ul>
<li>A factory balance quality grade, covered in <a href="<?= url('guides/fan-balance-grades-iso-21940') ?>">fan balance grades and ISO 21940</a>.</li>
<li>Factory test vibration limits.</li>
<li>Field (in situ) vibration limits for start-up, alarm and shutdown, which differ for rigid and flexible mounting.</li>
</ul>
<p>The field values are expressed in mm/s or in./s velocity and are the most directly relevant numbers for an operating AHU fan. Look up the exact values for the category in the edition referenced by your specification rather than relying on memory.</p>

<h2>Applying limits in the field</h2>
<ol>
<li><strong>Establish the category and mounting.</strong> Identify the fan's application category and whether it is rigidly mounted or on isolators.</li>
<li><strong>Measure correctly.</strong> Mount the sensor on the bearing housing, not on a thin cover or guard. Use the specified frequency range and RMS velocity. Measure at steady speed.</li>
<li><strong>Measure at several speeds on VFD fans.</strong> Readings can change dramatically across the speed range; a fan acceptable at design speed may be in zone C at a resonant speed. Speed-dependent peaks have their own procedure in <a href="<?= url('guides/vfd-resonance-skip-frequencies') ?>">diagnosing resonance at specific fan speeds</a>.</li>
<li><strong>Compare and record.</strong> Note the zone or category limit reached and record readings as a baseline for trending.</li>
<li><strong>Trend changes, not only absolute values.</strong> A reading that rises substantially from its baseline warrants investigation even if it remains in an acceptable zone.</li>
</ol>

<h2>Start-up acceptance versus long-term limits</h2>
<p>Start-up limits are tighter than alarm limits. A newly installed fan should meet the start-up value; operation for years may let it drift upward before reaching alarm. Specifications sometimes require that installed fans meet start-up limits at commissioning and that the contractor corrects any fan that does not, by balancing, alignment or support changes. Including the measurement method and locations in the specification prevents later disputes.</p>
<p>Start-up checks should also be repeated after any significant work, such as bearing replacement, wheel cleaning or rebalancing, to re-establish the baseline.</p>

<h2>What severity limits do not tell you</h2>
<ul>
<li><strong>The cause.</strong> An overall reading says how much, not why. Spectrum analysis is needed to diagnose; see <a href="<?= url('guides/vibration-troubleshooting') ?>">troubleshooting AHU vibration</a>.</li>
<li><strong>Bearing defect onset.</strong> Early bearing faults show at high frequencies that contribute little to broadband velocity. Acceleration or envelope measurements detect them sooner.</li>
<li><strong>Transmission into the building.</strong> A fan can be in zone A at the bearings and still disturb occupants if isolation is bypassed. Building comfort is a separate assessment.</li>
</ul>
<?php guide_end([
    ['What is an acceptable vibration level for an HVAC fan?', 'It depends on the fan\'s application category, size and mounting. Fan-specific limits in ISO 14694 and AMCA 204 give start-up, alarm and shutdown values. Look up the values for the category and mounting in the edition your specification references.'],
    ['What is the difference between ISO 10816 and ISO 20816?', 'ISO 20816 is the revision and consolidation of the ISO 10816 series, and of related shaft vibration standards. The zone approach is similar. Use the edition referenced in the project specification.'],
    ['Why are flexible mounting limits higher?', 'A machine on isolators can move more at its bearings without transmitting large forces into the structure, and the bearing-to-ground relationship differs. Standards therefore allow higher vibration velocity for flexible support than for rigid support.'],
]);
