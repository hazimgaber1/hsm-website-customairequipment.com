<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('pitot-traverse-airflow-verification'); ?>
<p class="lede">To verify air handler airflow with a pitot traverse, measure velocity pressure at a grid of log-Tchebycheff points across a straight duct, convert each reading to velocity, average the velocities (not the pressures), and multiply by the duct's cross-sectional area. With standard air, V = 4005 × √VP gives velocity in fpm from velocity pressure in in w.c.</p>

<h2>The equations</h2>
<p>A pitot-static tube measures total and static pressure; the difference is velocity pressure (VP). Velocity follows from Bernoulli's equation:</p>
<p class="formula">V = 1096.2 × √(VP ÷ ρ)
V = velocity, fpm; VP = velocity pressure, in w.c.; ρ = air density, lb/ft³</p>
<p>At standard air density of 0.075 lb/ft³ (1.2 kg/m³) this simplifies to:</p>
<p class="formula">V = 4005 × √VP</p>
<p>Airflow is then:</p>
<p class="formula">Q (cfm) = V_avg (fpm) × A (ft²)</p>
<p>Correct for density whenever the air temperature or site elevation is far from standard, for example in a heating supply duct at 110°F or at a site several thousand feet above sea level. Density can be estimated as ρ = 0.075 × (530 ÷ (T + 460)) × (B ÷ 29.92), with T in °F and B the barometric pressure in in Hg.</p>

<h2>Choosing the traverse plane</h2>
<p>Accuracy depends more on where you traverse than on the instrument. Pick a straight section of duct with uniform flow:</p>
<ul>
<li>Preferably at least 7.5 duct diameters downstream and 3 diameters upstream of any disturbance such as an elbow, transition or damper. Real buildings rarely allow this; take the longest straight run available and note the distance.</li>
<li>For rectangular ducts use the equivalent diameter, roughly D = 2ab ÷ (a + b) for a quick estimate.</li>
<li>Avoid planes where flow is swirling or reversing. If several readings are negative or the pitot must be twisted off-axis to get a reading, move the plane.</li>
<li>Make sure the duct is not leaking significantly between the traverse and the unit, or the result will not represent fan airflow.</li>
</ul>
<p class="note">Plan traverse locations during design and installation. Where no adequate straight duct exists, fan inlet airflow measurement may be more reliable; see <a href="<?= url('guides/fan-inlet-piezometer-airflow-measurement') ?>">fan inlet piezometer airflow measurement</a>.</p>

<h2>Log-Tchebycheff point locations</h2>
<p>The log-Tchebycheff method places points so that each represents an equal area while accounting for the slower velocities near the duct walls. ASHRAE Standard 111 and TAB body procedures describe it. For rectangular ducts, the number of traverse lines on each side depends on its length: commonly five lines for sides under 30 in, six for 30 to 36 in, and seven for sides over 36 in.</p>
<table>
<thead><tr><th>Lines per side</th><th>Point positions as a fraction of side length, measured from one wall</th></tr></thead>
<tbody>
<tr><td>5</td><td>0.074, 0.288, 0.500, 0.712, 0.926</td></tr>
<tr><td>6</td><td>0.061, 0.235, 0.437, 0.563, 0.765, 0.939</td></tr>
<tr><td>7</td><td>0.053, 0.203, 0.366, 0.500, 0.634, 0.797, 0.947</td></tr>
</tbody>
</table>
<p>The grid is formed by crossing the lines on both sides, so a duct with 5 lines on each side has 25 points. For round ducts, traverse along at least two diameters at right angles, with log-Tchebycheff or log-linear radial positions per the procedure your specification references.</p>

<h2>Worked example</h2>
<p>A supply duct downstream of an air handler is 24 in × 20 in. Design airflow is 6,000 cfm. Air temperature is 55°F at a site near sea level, close enough to standard that density correction is small; we will use standard air.</p>
<h3>Set up</h3>
<ul>
<li>Both sides are under 30 in, so use 5 lines per side: 25 points.</li>
<li>Points across the 24 in side: 1.78, 6.91, 12.0, 17.09, 22.22 in from the wall.</li>
<li>Points across the 20 in side: 1.48, 5.76, 10.0, 14.24, 18.52 in from the wall.</li>
<li>Duct area A = 24 × 20 ÷ 144 = 3.333 ft² (0.310 m²).</li>
</ul>
<h3>Readings and conversion</h3>
<p>Each VP reading is converted to velocity individually. One centre point reads 0.240 in w.c.:</p>
<p class="formula">V = 4005 × √0.240 = 4005 × 0.490 = 1,962 fpm</p>
<p>A near-wall point reads 0.165 in w.c.: V = 4005 × 0.406 = 1,627 fpm. Repeating for all 25 points and averaging the 25 velocities gives, in this example, V_avg = 1,810 fpm.</p>
<h3>Airflow</h3>
<p class="formula">Q = 1,810 × 3.333 = 6,033 cfm (2,847 L/s)</p>
<p>That is within 1 percent of design.</p>
<p class="warn">Do not average the VP readings and then take one square root. Because velocity varies with the square root of VP, averaging pressures first overstates the airflow. Always convert each point to velocity before averaging.</p>

<h2>Density correction example</h2>
<p>Suppose the same readings were taken in a heating duct at 120°F at a site where barometric pressure is 28.9 in Hg. Then ρ = 0.075 × (530 ÷ 580) × (28.9 ÷ 29.92) = 0.0662 lb/ft³. The velocity constant becomes 1096.2 ÷ √0.0662 = 4,261, about 6 percent higher than 4005. Ignoring this would understate airflow by the same margin.</p>

<h2>Comparing the result with fan data</h2>
<p>A traverse result is most useful when cross-checked. Plot the measured airflow and the fan's measured static pressure on the fan curve at the recorded speed. If the point falls close to the curve, both measurements are probably sound. If the traverse says 6,000 cfm but the fan curve at that speed and pressure says 7,000 cfm, either the traverse plane is poor, there is significant duct leakage between the unit and the plane, or the fan static measurement is wrong. Resolving that discrepancy before adjusting speed saves rework.</p>

<h2>Good practice in the field</h2>
<ul>
<li>Use a pitot tube sized for the duct and a digital manometer with resolution suited to the VP; at low velocities, readings below about 0.02 in w.c. become unreliable.</li>
<li>Seal traverse holes with plugs afterwards to preserve casing and duct leakage performance.</li>
<li>Hold the pitot tip parallel to the airflow, facing upstream, at each point.</li>
<li>Record the system condition during the traverse: fan speed, damper positions, filter pressure drop.</li>
<li>Repeat the traverse if fan speed or system resistance changes.</li>
</ul>
<p>The traverse is one measurement within the overall balancing scope described in <a href="<?= url('guides/testing-adjusting-balancing') ?>">testing, adjusting and balancing for AHUs</a>. If the measured airflow is well below design, see <a href="<?= url('guides/fan-airflow-shortfall-troubleshooting') ?>">fan airflow shortfall troubleshooting</a>.</p>
<?php guide_end([
    ['What is the formula for velocity from a pitot tube reading?', 'For standard air, velocity in feet per minute equals 4005 times the square root of the velocity pressure in inches of water. For non-standard air, use 1096.2 times the square root of velocity pressure divided by density in lb per cubic foot.'],
    ['How many points do I need for a duct traverse?', 'With the log-Tchebycheff method in a rectangular duct, use five traverse lines per side for sides under 30 in, six for 30 to 36 in and seven for sides over 36 in. The grid of crossing lines gives 25 to 49 points.'],
    ['Why not average the velocity pressures in a traverse?', 'Velocity is proportional to the square root of velocity pressure, so averaging pressures first and then taking one square root overstates airflow. Convert every point to velocity first and average the velocities.'],
]);
