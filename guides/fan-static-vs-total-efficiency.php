<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-static-vs-total-efficiency'); ?>
<p class="lede">Total efficiency credits a fan for the velocity pressure in the air it discharges; static efficiency counts only the static pressure rise. The two can differ by twenty points or more on a housed fan with a high outlet velocity, which is why comparing a housed fan's total efficiency with a plenum fan's static efficiency is misleading.</p>

<h2>Static, velocity and total pressure</h2>
<p>Air moving through a fan carries energy in two forms. <strong>Static pressure</strong> pushes outward on duct walls and does the work of overcoming resistance in filters, coils and ductwork. <strong>Velocity pressure</strong> is the kinetic energy of the moving air. Their sum is <strong>total pressure</strong>.</p>
<p class="formula">TP = SP + VP &nbsp;&nbsp; VP (in. w.c.) = (V ÷ 4005)² for standard air, V in fpm</p>
<p>A fan's job is to raise the total pressure of the air. How much of that rise shows up as static pressure, and how much leaves the fan as velocity, depends on the fan's outlet area and design.</p>

<h2>The two efficiency definitions</h2>
<p class="formula">Total efficiency η(t) = CFM × TP ÷ (6356 × BHP)</p>
<p class="formula">Static efficiency η(s) = CFM × SP ÷ (6356 × BHP)</p>
<p>The numerator in each case is air horsepower: useful power delivered to the air. The only difference is whether the outlet velocity pressure counts as useful. Since TP is always greater than SP for a fan with a defined outlet, total efficiency is always the higher of the two.</p>
<p>Which one is "right" depends on what happens to the velocity pressure downstream. If the fan discharges into a duct that gradually expands or runs straight for a good distance, part of that velocity pressure is regained as static pressure and does useful work. If the fan discharges abruptly into a plenum, the velocity pressure is dissipated as turbulence and contributes nothing.</p>

<h2>Worked example: one housed fan, two efficiencies</h2>
<p>A housed centrifugal fan delivers 10,000 cfm (4,720 L/s) at 3.0 in. w.c. static pressure and draws 7.5 bhp. Its outlet area is 2.5 ft².</p>
<ol>
<li>Outlet velocity: 10,000 ÷ 2.5 = 4,000 fpm (20.3 m/s).</li>
<li>Velocity pressure: (4,000 ÷ 4,005)² = 1.00 in. w.c.</li>
<li>Total pressure: 3.0 + 1.0 = 4.0 in. w.c.</li>
<li>Total efficiency: 10,000 × 4.0 ÷ (6,356 × 7.5) = 0.84, or 84%.</li>
<li>Static efficiency: 10,000 × 3.0 ÷ (6,356 × 7.5) = 0.63, or 63%.</li>
</ol>
<p>The same fan at the same operating point is "84% efficient" or "63% efficient" depending on the basis. A plenum fan doing the same duty at 7.0 bhp has a static efficiency of 10,000 × 3.0 ÷ (6,356 × 7.0) = 67%, which beats the housed fan on the measure that matters in a cabinet: brake horsepower to deliver 3.0 in. w.c. of static pressure.</p>

<h2>Why plenum fans are reported on static efficiency</h2>
<p>A plenum fan has no scroll and no outlet duct. Air leaves the wheel around its full circumference into a plenum, and the velocity pressure at the wheel tip is not recovered in any downstream duct. There is no meaningful outlet area to define a velocity pressure for the system. For these reasons plenum fans are rated and selected on static pressure, and static efficiency is the figure that reflects their real contribution to the system.</p>
<p>Housed fans are often catalogued with both values. When you see a housed fan quoted with a high efficiency number, check whether it is total or static, and consider whether the installation will actually regain the outlet velocity pressure. In a typical custom air handler the fan discharges into a short plenum or a coil, so little is regained. That installation loss is the subject of <a href="<?= url('guides/system-effect-amca-201') ?>">system effect</a>, and the broader trade-off between the two fan types is in <a href="<?= url('guides/plenum-fan-vs-housed-centrifugal') ?>">plenum fan vs housed centrifugal</a>.</p>
<p class="note">Comparing fans on brake horsepower at the same airflow and static pressure, with installation effects included, avoids the static versus total confusion entirely.</p>

<h2>How the metrics relate to system pressure calculations</h2>
<p>The efficiency basis has to match the pressure basis used in the design. If the static pressure budget for the unit and ductwork is calculated as static pressure, which is the usual practice in North American HVAC design, then a fan's static pressure rating and static efficiency apply directly. If a designer works in total pressure, as is more common in some industrial and international practice, total pressure ratings apply, and the system calculation must include velocity pressure at every point.</p>
<p>Mixing the two is a classic error: using a fan's total pressure capability against a static pressure system calculation overstates what the fan can deliver by the outlet velocity pressure.</p>

<h2>Where each number is useful</h2>
<table>
<thead><tr><th>Situation</th><th>Use</th><th>Reason</th></tr></thead>
<tbody>
<tr><td>Plenum fan or fan array in an AHU</td><td>Static efficiency</td><td>Velocity pressure is not recovered</td></tr>
<tr><td>Housed fan discharging into a short plenum</td><td>Static efficiency</td><td>Little or no regain</td></tr>
<tr><td>Housed fan with long straight outlet duct</td><td>Total efficiency, with system calculation in total pressure</td><td>Part of velocity pressure is regained</td></tr>
<tr><td>Comparing two fans for the same AHU position</td><td>Brake horsepower at the same SP</td><td>Removes basis confusion</td></tr>
<tr><td>Regulatory or code compliance</td><td>The metric the code requires</td><td>See <a href="<?= url('guides/fan-energy-index-fei-selection') ?>">FEI selection</a> for how the duty-point metric handles both bases</td></tr>
</tbody>
</table>

<h2>Questions to ask on a fan submittal</h2>
<ul>
<li>Is the stated efficiency static or total?</li>
<li>Is the stated pressure static or total, and does it match how the system was calculated?</li>
<li>Is the outlet area shown, so velocity pressure can be checked?</li>
<li>Does the performance include any appurtenances such as inlet guards, belt guards or dampers?</li>
</ul>
<?php guide_end([
    ['What is the difference between fan static and total efficiency?', 'Total efficiency counts the fan\'s total pressure rise, including outlet velocity pressure, as useful work. Static efficiency counts only the static pressure rise. Total efficiency is always the higher number.'],
    ['Why do plenum fans only show static efficiency?', 'A plenum fan has no outlet duct, so the velocity pressure leaving the wheel is not recovered in the system. Static pressure and static efficiency are the meaningful values.'],
    ['Which efficiency should I use to compare fans?', 'Use the basis that matches the installation. In most AHU cabinets that is static efficiency. Comparing brake horsepower at the same airflow and static pressure is the simplest fair comparison.'],
    ['How do I calculate velocity pressure at a fan outlet?', 'Divide airflow by outlet area to get velocity in fpm, divide by 4005, and square the result. That gives velocity pressure in inches of water for standard air.'],
]);
