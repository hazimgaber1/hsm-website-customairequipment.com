<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('internal-vs-external-static-pressure'); ?>
<p class="lede">Internal static pressure (ISP) is the pressure lost inside the air handler's own components; external static pressure (ESP) is the pressure lost in the ductwork and devices outside the unit; total static pressure (TSP) is what the fan must develop to overcome both. The boundary between internal and external is the unit's own inlet and outlet flanges.</p>

<h2>Three terms, one fan</h2>
<p>A fan does not care where resistance comes from. It sees one system and must produce enough pressure to push design airflow through all of it. The split into internal and external exists for a practical reason: different people are responsible for each part. The mechanical engineer designs the ductwork and states the ESP. The unit manufacturer designs the casing and components and calculates the ISP. The fan is selected for their sum.</p>
<table>
<thead><tr><th>Term</th><th>Includes</th><th>Who usually sets it</th></tr></thead>
<tbody>
<tr><td>ESP</td><td>Supply duct, terminal units, diffusers, return duct, grilles, outdoor air louvers and intake duct, field-installed devices</td><td>Design engineer</td></tr>
<tr><td>ISP</td><td>Dampers, filters, coils, energy recovery, humidifier grids, attenuators, plenums and fan cabinet losses inside the unit</td><td>AHU manufacturer</td></tr>
<tr><td>TSP</td><td>ESP plus ISP</td><td>Calculated; used to select the fan</td></tr>
</tbody>
</table>
<p>How those numbers are built up component by component is the subject of the <a href="<?= url('guides/total-static-pressure-budget') ?>">static pressure budget guide</a>.</p>

<h2>Static, velocity and total pressure</h2>
<p>Before discussing where to measure, it helps to separate three kinds of pressure at any point in a duct:</p>
<ul>
<li><strong>Static pressure</strong> pushes equally in all directions and is what a tube flush with the duct wall reads.</li>
<li><strong>Velocity pressure</strong> is the kinetic energy of the moving air. At standard density, VP = (V ÷ 4005)², with V in fpm and VP in in. w.c.</li>
<li><strong>Total pressure</strong> is the sum of the two.</li>
</ul>
<p class="formula">VP (in. w.c.) = (V ÷ 4005)²</p>
<p>At 2,000 fpm (10 m/s) in a supply duct, VP = (2000 ÷ 4005)² = 0.25 in. w.c. That is not trivial. Fan ratings under AMCA 210 report fan static pressure, defined as fan total pressure minus the velocity pressure at the outlet. When an engineer schedules "ESP," the convention in North American practice is static pressure, but it pays to state the convention explicitly on the schedule.</p>

<h2>Where each value is measured on a real unit</h2>
<h3>External static pressure</h3>
<p>Measured as the difference between static pressure in the supply duct just downstream of the unit outlet and static pressure in the return duct just upstream of the unit inlet. Readings should be taken in straight duct away from fittings, where the flow is reasonably uniform. On a unit with separate outdoor and return inlets, use the inlet path that is active at the condition being checked.</p>
<h3>Internal static pressure</h3>
<p>Not usually measured as a single number in the field. Instead, technicians read the drop across individual components: filter banks with differential gauges, coils with taps upstream and downstream, and the fan section across inlet and outlet. Summing these readings gives an approximate ISP.</p>
<h3>Total static pressure</h3>
<p>In the field, TSP is usually approximated as the static pressure difference between the unit's supply outlet and its return or outdoor air inlet, which captures both internal and external losses on the active path. Velocity pressure differences at inlet and outlet are small if the duct connections are similar in size.</p>
<p class="note">Read pressures with the unit at design airflow. Because pressure varies with the square of airflow, a reading at 80% flow shows only about 64% of the design pressure.</p>

<h2>Why the split causes trouble</h2>
<h3>Double counting</h3>
<p>If the engineer includes filters in the ESP and the manufacturer includes them in the ISP, they are counted twice and the fan is oversized. Specifications should state clearly which items are internal. A common rule is that anything inside the unit casing is ISP, but devices furnished by the AHU manufacturer and shipped loose, such as an outdoor air hood, need an explicit decision.</p>
<h3>Missing items</h3>
<p>The opposite happens when field-installed devices, such as a duct-mounted humidifier, a smoke damper or a sound attenuator added during construction, fall into neither number.</p>
<h3>System effect</h3>
<p>Poor duct connections at the unit, such as an elbow right at the fan discharge, create losses that belong to neither the duct design nor the unit's tested ratings. They show up in the field as an airflow shortfall. AMCA 201 describes how to estimate them; see <a href="<?= url('guides/system-effect-amca-201') ?>">system effect</a>.</p>
<h3>Return fans</h3>
<p>When a return fan is present, the return duct loss belongs to the return fan, not the supply fan. The supply fan's ESP then covers only the supply duct and, in some arrangements, the outdoor air intake path.</p>

<h2>Using ESP in the field</h2>
<p>When a unit does not deliver design airflow, comparing measured ESP with the scheduled value is one of the first diagnostic steps. A measured ESP well above design points to the duct system; a measured ESP at or below design with low airflow points to the unit, such as dirty filters, a fouled coil or a fan problem. The full diagnostic process is in <a href="<?= url('guides/high-static-pressure-troubleshooting') ?>">high static pressure troubleshooting</a>.</p>
<?php guide_end([
    ['What is the difference between ESP and TSP?', 'ESP is the pressure lost in the ductwork and devices outside the air handler. TSP is ESP plus the pressure lost inside the unit itself. The fan is selected for TSP.'],
    ['Does external static pressure include filters?', 'Normally no. Filters inside the AHU casing are part of internal static pressure. Duct-mounted filters installed outside the unit are part of external static. The specification should state the convention to avoid double counting.'],
    ['How do you measure external static pressure on an air handler?', 'Measure static pressure in straight duct just downstream of the supply outlet and just upstream of the return inlet, with the unit at design airflow. The difference between the two readings is the external static pressure.'],
]);
