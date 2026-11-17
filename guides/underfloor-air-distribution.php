<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('underfloor-air-distribution'); ?>
<p class="lede">Underfloor air distribution (UFAD) supplies conditioned air into a pressurized plenum below a raised access floor, from which floor diffusers deliver it into the occupied zone. For the air handler, that means warmer supply air, lower external static pressure, tight control of plenum pressure, and a deliberate strategy for dehumidification.</p>

<h2>How UFAD works</h2>
<p>A raised access floor, typically 12 to 18 in. (300 to 450 mm) high, creates a plenum under the occupied space. The air handler delivers supply air into that plenum through a small number of ducted connections. Swirl, linear or variable-area diffusers in the floor tiles release air at relatively low velocity, and it mixes within the lower 4 to 6 ft (1.2 to 1.8 m) of the room. Heat from occupants and equipment rises, forming a warmer upper layer that is returned at ceiling level.</p>
<p>Because the occupied zone is conditioned directly and the upper zone is allowed to stratify, supply air can be warmer than in overhead mixing systems while maintaining comfort where people are.</p>

<h2>Supply air temperature</h2>
<p>UFAD diffusers sit close to occupants' feet and ankles, so the supply temperature must be warmer than conventional overhead systems. A typical UFAD supply air temperature at the diffuser is about 61°F to 65°F (16°C to 18°C), compared with about 55°F (13°C) for overhead VAV.</p>
<p>That has several consequences for the air handler:</p>
<ul>
<li><strong>Dehumidification still requires a cold coil.</strong> In humid climates the cooling coil must still leave at around 52°F to 55°F (11°C to 13°C) dew point to control space humidity. The air must then be reheated or mixed to the UFAD supply temperature.</li>
<li><strong>Return air bypass is common.</strong> Mixing some return air downstream of the cooling coil raises supply temperature without adding reheat energy.</li>
<li><strong>Economizer hours increase.</strong> A warmer supply setpoint means outdoor air can provide free cooling at higher outdoor temperatures.</li>
<li><strong>Chiller efficiency may improve</strong> if chilled water temperature can be raised during dry weather.</li>
</ul>
<p class="note">The plenum itself adds heat to the supply air. Heat conducts from the warmer slab below and from the floor above through the tiles. Supply leaving the air handler may need to be 2°F to 5°F (1°C to 3°C) cooler than the temperature desired at the diffusers furthest from the inlet.</p>

<h2>Airflow and stratification</h2>
<p>UFAD is sometimes described as needing less airflow than overhead systems because some load is handled in the stratified upper zone. In practice, airflow can be similar or higher, because the supply temperature difference to the occupied zone is smaller. Loads that enter high in the room, such as lighting and roof gain, partly bypass the occupied zone, while loads at floor level, such as people and computers, are fully counted.</p>
<p>Designers use UFAD-specific load methods, which split loads between upper and lower zones, rather than standard mixing-system calculations. Supply airflow, diffuser count and stratification height are interdependent and should be determined together. The standard sensible relationship still applies to the occupied-zone fraction of the load; see <a href="<?= url('guides/supply-airflow-from-sensible-load') ?>">supply airflow from sensible load</a>.</p>

<h2>Plenum pressure</h2>
<p>A pressurized UFAD plenum operates at a very low static pressure, typically around 0.05 in. w.c. (12 Pa). That has a big effect on the air handler:</p>
<ul>
<li>External static pressure on the supply fan is low because there is little supply ductwork. Most of the fan's work goes to internal components such as coils and filters.</li>
<li>Plenum pressure must be controlled tightly. Too high, and leakage through floor tile joints and around cable cutouts becomes excessive; too low, and diffusers far from inlets starve.</li>
<li>The fan is modulated to maintain plenum pressure measured at several points, not a single duct static sensor.</li>
</ul>
<h3>Leakage</h3>
<p>Leakage is the most common UFAD problem. Air escapes through gaps between floor tiles, through wall penetrations, into adjacent cores and into the space below. Uncontrolled leakage to the occupied space is still delivered to the room, but it is not controlled by diffusers and can disturb thermal comfort; leakage elsewhere is wasted. Specify sealing of the plenum perimeter and penetrations, and consider testing plenum leakage before floor finishes are installed.</p>

<h2>Perimeter zones</h2>
<p>Perimeter loads swing much more than interior ones and are often too large for passive floor diffusers alone. Common approaches include fan-powered terminal units in the plenum, dedicated perimeter plenum zones with VAV dampers, and perimeter heating by radiation or fan coils. Each of these affects how much of the total load the central air handler sees and how it is controlled.</p>

<h2>Air handler implications summarized</h2>
<table>
<thead><tr><th>AHU feature</th><th>UFAD implication</th></tr></thead>
<tbody>
<tr><td>Cooling coil</td><td>Still selected for dehumidification at a cold leaving condition</td></tr>
<tr><td>Bypass or reheat</td><td>Needed to raise supply to UFAD temperature; return bypass preferred for energy</td></tr>
<tr><td>Supply fan</td><td>Lower external static; controlled to plenum pressure</td></tr>
<tr><td>Economizer</td><td>More hours available due to warm supply setpoint</td></tr>
<tr><td>Return path</td><td>High-level return; return temperature warmer than in mixing systems</td></tr>
<tr><td>Controls</td><td>Multiple plenum pressure sensors; coordination with perimeter terminals</td></tr>
</tbody>
</table>
<p>Displacement ventilation also relies on stratification but differs in outlets and velocities; it is compared to mixing systems in <a href="<?= url('guides/displacement-vs-mixing-ventilation-classrooms') ?>">displacement vs mixing ventilation</a>. For mixed-air control with return bypass, the physics in <a href="<?= url('guides/mixed-air-temperature-calculation') ?>">mixed air temperature calculation</a> applies directly.</p>
<?php guide_end([
    ['What supply temperature does UFAD use?', 'Typically about 61°F to 65°F (16°C to 18°C) at the floor diffusers, warmer than overhead systems, because air enters close to occupants. The air handler usually still cools to a lower dew point for dehumidification and then raises the temperature by bypass or reheat.'],
    ['What static pressure is used in a UFAD plenum?', 'Pressurized UFAD plenums commonly run at about 0.05 in. w.c. (12 Pa). Keeping it low limits leakage, while keeping it controlled ensures distant diffusers still receive air.'],
    ['Does UFAD reduce air handler energy?', 'It can, through lower fan static pressure and more economizer hours, but leakage, reheat for dehumidification and plenum heat gain can erode savings. Results depend on careful design and construction.'],
]);
