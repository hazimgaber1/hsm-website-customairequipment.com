<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('outdoor-airflow-measurement-stations'); ?>
<p class="lede">For measuring outdoor airflow at the low velocities typical of minimum ventilation, thermal dispersion arrays are generally the most accurate; pitot and averaging differential pressure stations work well only at higher velocities; and fan-based measurement measures total fan airflow, so outdoor air must be inferred by difference, which magnifies error. Choose based on the velocity at minimum outdoor air, available straight run and the accuracy the sequence needs.</p>

<h2>Why outdoor air is hard to measure</h2>
<p>Outdoor air intakes are often oversized for the economizer's maximum airflow, so at minimum ventilation the velocity through the intake can be very low, sometimes a few hundred feet per minute or less. Intakes are also short, turbulent, and close to louvres, dampers and elbows, so the velocity profile is uneven. A measurement method must handle low velocity, poor profiles, and outdoor temperature and moisture. Wind acting on the louvre adds another disturbance, so readings at an intake can fluctuate even when the dampers are not moving, and the controls need to average them.</p>

<h2>Thermal dispersion stations</h2>
<p>Thermal dispersion sensors use heated elements and measure the heat carried away by moving air; the cooling rate correlates with mass flow. Arrays of individually calibrated sensor points are installed across the duct or intake opening, and the electronics average them.</p>
<ul>
<li>Accurate at low velocities, down to well below 100 fpm (0.5 m/s) with many products.</li>
<li>Each sensor point measures independently, so averaging across an uneven profile is better than with a single averaging tube.</li>
<li>Can be installed in intake plenums or just downstream of the louvre with limited straight run, though more points are needed in poor conditions.</li>
<li>Outdoor installations need products rated for moisture, icing and temperature extremes.</li>
</ul>

<h2>Pitot arrays and averaging differential pressure stations</h2>
<p>These measure velocity pressure with pitot tubes, averaging tubes or flow crosses, then calculate velocity:</p>
<p class="formula">V (fpm) = 4005 × √VP (in. w.c.)   at standard air density</p>
<p>The square-root relationship is the problem at low velocity. At 400 fpm, VP = (400 ÷ 4005)² ≈ 0.010 in. w.c. (2.5 Pa). At 200 fpm, VP ≈ 0.0025 in. w.c. (0.6 Pa). Many transmitters cannot read that accurately, and small zero drift becomes a large velocity error.</p>
<ul>
<li>Accurate and inexpensive at higher velocities, roughly above 700 to 1,000 fpm depending on the transmitter.</li>
<li>Need adequate straight run and flow conditioning.</li>
<li>Susceptible to plugging by dust, insects and ice at outdoor intakes; may need purge or heat.</li>
<li>Some products include auto-zero transmitters, which improve low-range performance.</li>
</ul>

<h2>Damper-integrated and louvre-integrated stations</h2>
<p>Some manufacturers combine the outdoor air damper or louvre with a calibrated measuring element, for example pressure taps across a damper whose flow characteristic has been tested at various blade positions, or measurement built into the louvre blade. These save space and are calibrated as an assembly, but their accuracy depends on installation matching the test arrangement.</p>

<h2>Fan-based measurement</h2>
<p>Fan inlet piezometer rings or similar measure the pressure difference across the fan inlet cone, which correlates with fan airflow. They are accurate for the fan's total airflow with no added pressure drop. The detail of that method is covered in <a href="<?= url('guides/fan-inlet-piezometer-airflow-measurement') ?>">fan inlet piezometer airflow measurement</a>.</p>
<p>To get outdoor air with fan-based measurement, the controls must calculate it, usually as supply minus return airflow:</p>
<p class="formula">OA = SA − RA</p>
<p><strong>Worked example of error amplification:</strong> supply is 10,000 cfm measured to ±5 percent (±500 cfm), and return is 8,000 cfm measured to ±5 percent (±400 cfm). Calculated outdoor air is 2,000 cfm. Combining independent errors as root-sum-square gives ±√(500² + 400²) ≈ ±640 cfm, or about ±32 percent of the outdoor airflow. Two individually good measurements produce a poor outdoor air value.</p>
<p class="note">Mixed-air temperature ratio methods (estimating outdoor air fraction from outdoor, return and mixed air temperatures) suffer the same problem and become meaningless when outdoor and return temperatures are close. Use them as a check, not as the control signal.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Thermal dispersion array</th><th>Pitot / averaging DP</th><th>Damper or louvre integrated</th><th>Fan-based by difference</th></tr></thead>
<tbody>
<tr><td>Low-velocity accuracy</td><td>Good</td><td>Poor below roughly 700 fpm</td><td>Varies by product</td><td>Poor for OA (error amplified)</td></tr>
<tr><td>High-velocity accuracy</td><td>Good</td><td>Good</td><td>Good</td><td>Good for total flow</td></tr>
<tr><td>Straight run needed</td><td>Moderate; more points in poor conditions</td><td>Significant</td><td>Low (calibrated assembly)</td><td>None at the intake</td></tr>
<tr><td>Pressure drop</td><td>Very low</td><td>Low</td><td>Included in damper or louvre</td><td>None added</td></tr>
<tr><td>Outdoor exposure</td><td>Needs rated sensors</td><td>Plugging and icing risk</td><td>Depends on design</td><td>Not exposed</td></tr>
<tr><td>Measures OA directly</td><td>Yes</td><td>Yes</td><td>Yes</td><td>No</td></tr>
<tr><td>Relative cost</td><td>Higher</td><td>Lower</td><td>Moderate</td><td>Low if already provided for fan control</td></tr>
</tbody>
</table>

<h2>Choosing for a minimum outdoor air sequence</h2>
<ol>
<li>Calculate the velocity at minimum outdoor airflow through the area where the station would be installed.</li>
<li>If that velocity is low, choose thermal dispersion or a dedicated minimum outdoor air intake section sized for higher velocity.</li>
<li>If the economizer and minimum share one damper, consider a separate, smaller minimum outdoor air damper with its own station, which raises velocity at minimum flow.</li>
<li>Check that the station's accuracy at minimum flow meets the ventilation requirement and the control tolerance in the sequence.</li>
<li>Provide access for inspection and cleaning.</li>
</ol>
<p>The control logic that uses these measurements is explained in <a href="<?= url('guides/minimum-outdoor-air-control-vav') ?>">maintaining minimum outdoor air in VAV systems</a>.</p>
<?php guide_end([
    ['What is the most accurate way to measure outdoor airflow?', 'For the low velocities common at minimum ventilation, thermal dispersion arrays with multiple sensing points are generally the most accurate. Pitot-based stations are accurate only at higher velocities.'],
    ['Why is supply minus return a poor way to measure outdoor air?', 'Outdoor air is a small difference between two large flows, so the errors of both measurements combine. Two measurements accurate to 5 percent can yield an outdoor air value that is off by 30 percent or more.'],
    ['What velocity does a pitot airflow station need?', 'Pitot and averaging differential pressure stations generally need several hundred to about a thousand feet per minute to give reliable readings, depending on the transmitter. At lower velocities the velocity pressure is too small to measure accurately.'],
]);
