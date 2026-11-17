<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('sensor-selection-and-placement'); ?>
<p class="lede">Choose temperature and pressure sensors by the condition they must represent, then place them where that condition is actually present: averaging elements across stratified mixed air and coil faces, single-point discharge sensors only where air is well mixed, duct static sensors in stable straight duct, and differential pressure taps on clean, consistent pressure points. Select transmitter ranges close to the operating range, because accuracy is quoted against full scale.</p>

<h2>Step 1: Define what each sensor must tell the controls</h2>
<p>Write down the purpose of each sensor before choosing hardware. "Mixed air temperature for economizer control" and "mixed air temperature for freeze protection" sound similar but need different answers: the first needs an average, the second needs the coldest spot. A sensor that does not represent the controlled condition cannot be fixed with tuning.</p>

<h2>Step 2: Use averaging sensors where air is stratified</h2>
<ol>
<li><strong>Identify stratified locations:</strong> mixed air plenums, the leaving face of heating and cooling coils, and any section just downstream of an outdoor air intake.</li>
<li><strong>Select an averaging element</strong> long enough to cover the whole face. Averaging RTDs and multi-point thermistor arrays are common; capillary-type averaging elements are also used.</li>
<li><strong>Install it in a serpentine pattern</strong> across the full face, with passes spaced evenly from top to bottom so every horizontal band is sampled. A common guide is a pass roughly every foot of face height, or as the manufacturer recommends.</li>
<li><strong>Support the element</strong> on brackets or clips so it does not touch coil fins or casing, which would conduct heat to it.</li>
<li><strong>Keep the element clear of access door paths</strong> and filter removal routes so it is not damaged during maintenance.</li>
</ol>
<p class="note">If mixed air is badly stratified, an averaging sensor gives a correct average but the coil may still see freezing air in one corner. Fix the mixing first; see <a href="<?= url('guides/mixed-air-stratification-troubleshooting') ?>">mixed air stratification troubleshooting</a>.</p>

<h2>Step 3: Place single-point discharge sensors where air is mixed</h2>
<ol>
<li>For supply air temperature, locate the sensor downstream of the fan in a draw-through unit, where the fan has mixed the air, or far enough downstream of the last coil in a blow-through unit that the air has mixed.</li>
<li>Where the duct downstream is short or the unit has a multi-fan plenum, use an averaging sensor in the discharge plenum instead.</li>
<li>Insert the probe to the centre third of the duct, not near the wall.</li>
<li>Keep it away from the radiant influence of heating coils and electric heaters.</li>
<li>Avoid locations directly downstream of a humidifier, where wet air or condensation will affect readings.</li>
</ol>

<h2>Step 4: Locate the duct static pressure sensor</h2>
<ol>
<li>The traditional rule places the sensor about two-thirds of the way down the longest main duct. With static pressure reset based on zone damper position, the exact location matters less, because the reset adjusts the setpoint to whatever value the sensor needs to read; see <a href="<?= url('guides/duct-static-pressure-reset') ?>">duct static pressure reset</a>.</li>
<li>Choose a straight section away from elbows, transitions, takeoffs and dampers, ideally several duct diameters downstream of the nearest fitting, where velocity pressure is uniform.</li>
<li>Use a static pressure probe oriented into the airflow, or a static tip designed to reject velocity pressure, rather than a simple open tube.</li>
<li>Reference the low side to the space where the duct runs (often the ceiling plenum), or to the conditioned space, consistently.</li>
<li>For systems with several main branches, consider one sensor per branch and control to the lowest relative to its setpoint.</li>
<li>Protect long tubing runs from kinks and temperature extremes, and keep runs short where possible.</li>
</ol>

<h2>Step 5: Install differential pressure taps</h2>
<table>
<thead><tr><th>Measurement</th><th>Tap locations</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>Filter pressure drop</td><td>Upstream and downstream faces of each filter bank</td><td>Taps in quiet zones, not in fan inlet or damper jets</td></tr>
<tr><td>Fan airflow (inlet cone)</td><td>Piezometer ring at the cone throat and a reference upstream</td><td>Per fan manufacturer's calibration</td></tr>
<tr><td>Coil pressure drop</td><td>Upstream and downstream of the coil</td><td>Useful for fouling trending</td></tr>
<tr><td>Minimum outdoor air damper ΔP</td><td>Outdoor side of the damper and mixing plenum</td><td>Used for constant-ΔP minimum outdoor air control</td></tr>
<tr><td>Building pressure</td><td>Representative indoor space and shielded outdoor reference</td><td>See building pressurization control</td></tr>
</tbody>
</table>

<h2>Step 6: Select ranges and accuracy</h2>
<p>Pressure transmitter accuracy is usually stated as a percentage of full scale. A transmitter with too large a range gives poor accuracy at the actual operating point.</p>
<p><strong>Example:</strong> a duct static transmitter with a range of 0 to 5 in. w.c. and ±1 percent of full scale accuracy has an error of ±0.05 in. w.c. at any reading. At a reset setpoint of 0.5 in. w.c., that is ±10 percent of the reading. A 0 to 2 in. w.c. transmitter with the same accuracy rating gives ±0.02 in. w.c., or ±4 percent at the same setpoint. Choose the smallest range that covers the maximum expected value with margin, and consider auto-zero transmitters for low-range applications.</p>
<p>For temperature, RTDs and thermistors with accuracy of a few tenths of a degree are typical. Match sensor accuracy to its use: economizer differential control, for instance, needs outdoor and return sensors with good relative accuracy.</p>

<h2>Step 7: Outdoor sensors</h2>
<ol>
<li>Mount outdoor temperature sensors in shade, typically on a north-facing wall or in a ventilated radiation shield.</li>
<li>Keep them away from exhaust outlets, condenser discharge, roofs that heat in sun, and windows or vents.</li>
<li>Avoid locating an outdoor sensor in the outdoor air intake plenum, where it reads mixed or recirculated air when dampers close.</li>
</ol>

<h2>Step 8: Verify at commissioning</h2>
<p>Compare every sensor with a calibrated reference at operating conditions, not just at the bench. Record offsets, and correct or replace sensors outside tolerance. Humidity sensor selection follows similar principles but has its own considerations, covered in <a href="<?= url('guides/humidity-sensor-selection-placement') ?>">humidity sensor selection and placement</a>.</p>
<?php guide_end([
    ['Where should a duct static pressure sensor be installed?', 'In a straight section of main duct away from fittings, traditionally about two-thirds of the way down the longest run. With damper-position-based static pressure reset, the exact location is less critical because the setpoint adjusts.'],
    ['When is an averaging temperature sensor required?', 'Wherever air temperature varies across the duct or plenum, such as mixed air plenums and coil leaving faces. A single-point sensor there can read several degrees away from the true average.'],
    ['Why does pressure transmitter range matter?', 'Accuracy is usually stated as a percentage of full scale, so a large range gives a large absolute error at low readings. Choose the smallest range that covers the maximum expected pressure with margin.'],
]);
