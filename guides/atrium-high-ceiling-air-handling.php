<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('atrium-high-ceiling-air-handling'); ?>
<p class="lede">In an atrium or airport terminal, most of the air volume is far above anyone's head. The goal is to condition the occupied layer near the floor and let the upper volume stratify, while making sure the HVAC design does not interfere with the smoke management system the space almost certainly needs.</p>

<h2>Stratification as a design tool</h2>
<p>Warm air rises. In a space 40 to 100 ft (12 to 30 m) tall, solar gain on glazed roofs, lighting and rising heat plumes from people create a strong vertical temperature gradient. In cooling, stratification is an advantage: heat entering high in the space stays there and is exhausted or simply never reaches the occupied zone. Only the bottom 6 to 10 ft (2 to 3 m) needs to be held at comfort conditions.</p>
<p>In heating, stratification works against you. Warm supply air rises to the ceiling, the upper glass loses more heat, and occupants near the floor feel cold, especially near tall glazing where cold downdrafts form.</p>
<p>Atrium air handling is therefore a seasonal balancing act: encourage stratification in summer and fight it in winter.</p>

<h2>Supply strategies</h2>
<h3>Low-level supply</h3>
<p>Displacement-type outlets near the floor, in planters, benches or columns, supply cool air at low velocity. It pools across the floor and rises as it picks up heat. This conditions only the occupied zone and uses warm supply temperatures, extending economizer hours. Low-level supply is poor for heating, so it is usually paired with radiant floor heating or perimeter heating.</p>
<h3>Long-throw nozzles</h3>
<p>Jet nozzles mounted on balconies or walls throw air across the space. They are adjustable or variable-geometry so they can aim horizontally in cooling and downward in heating. They work well in airport terminals and large lobbies where air must reach the floor from high mounting points. Throw must be calculated carefully for both modes, accounting for buoyancy of warm or cool jets.</p>
<h3>Perimeter and glazing treatment</h3>
<p>Tall glass walls produce downdrafts in winter. Linear diffusers or trench heaters at the base of the glazing, or radiant floor heating along the perimeter, counter them. In summer, glazing solar gains can be removed by exhaust at the top of the glass.</p>
<h3>Return and exhaust location</h3>
<p>Returning air from the occupied zone in cooling keeps return air cooler and coil loads lower. Exhausting hot air from high in the space in summer removes heat without passing it through the coil. In winter, high exhaust wastes heat, so dampers or fans controlling high-level exhaust should be modulated seasonally.</p>

<h2>Comparing approaches</h2>
<table>
<thead><tr><th>Approach</th><th>Cooling</th><th>Heating</th><th>Typical use</th></tr></thead>
<tbody>
<tr><td>Low-level displacement supply</td><td>Very efficient; conditions only occupied zone</td><td>Weak; needs supplementary heat</td><td>Office atriums, museums</td></tr>
<tr><td>Long-throw nozzles</td><td>Good with careful throw design</td><td>Good when nozzles aim downward</td><td>Terminals, convention centres</td></tr>
<tr><td>Overhead diffusers at roof</td><td>Wastes energy conditioning upper volume</td><td>Poor; warm air stays high</td><td>Rarely appropriate in tall spaces</td></tr>
<tr><td>Radiant floor plus ventilation</td><td>Floor cooling limited by dew point</td><td>Very good comfort</td><td>Terminals, atriums with large glazing</td></tr>
</tbody>
</table>

<h2>Interaction with smoke management</h2>
<p>Most building codes require smoke control for atriums that connect multiple floors. Common methods use exhaust at the top of the atrium to keep the smoke layer above a specified height, with makeup air supplied low. NFPA 92 is widely referenced for the design method; local code determines what is required. The HVAC and smoke systems must be designed together.</p>
<p>Points of interaction:</p>
<ul>
<li><strong>Makeup air velocity.</strong> Smoke control makeup air must enter low and at low velocity, so it does not disturb the smoke plume or the smoke layer. HVAC supply outlets that remain active during a fire can do exactly that. Typically, HVAC supply in the atrium shuts down or switches to a smoke-mode configuration.</li>
<li><strong>Shared fans.</strong> The air handler or its exhaust fans may be used as part of the smoke control system. If so, motors, drives, wiring and dampers need ratings and power supply suited to that role, and the control sequence becomes life safety equipment.</li>
<li><strong>Stratification and detection.</strong> Hot summer stratification can stop rising smoke from reaching ceiling-mounted detectors. Beam or aspirating detection at intermediate heights is often used; HVAC strategy should not undermine it.</li>
<li><strong>Dampers.</strong> Fire and smoke dampers between the atrium and adjacent floors must be coordinated with HVAC airflow paths.</li>
</ul>
<p class="warn">Do not let HVAC supply diffusers or nozzles operate in normal mode during smoke control unless the smoke control design specifically accounts for them. Coordinate sequences with the fire protection engineer and verify them during commissioning.</p>
<p>The control logic for smoke modes is covered in <a href="<?= url('guides/smoke-control-sequences') ?>">smoke control sequences</a>.</p>

<h2>Airport terminals and large public spaces</h2>
<p>Terminals have extreme occupancy swings as flights arrive and depart, very large glazed areas and continuous operation. Typical solutions combine radiant floors for comfort and base load, long-throw nozzles or displacement outlets for ventilation and peak cooling, and demand-controlled ventilation by zone. Air handlers are often large central units or fan arrays in remote plant rooms, with long, low-velocity duct runs to keep noise down in gate areas.</p>

<h2>Air handler considerations</h2>
<ul>
<li>Select for the occupied-zone load, not the whole volume, using a stratified load model.</li>
<li>Provide a wide airflow turndown for occupancy swings and seasonal changes.</li>
<li>Consider separate units for perimeter glazing zones and the core floor area.</li>
<li>Coordinate smoke mode operation and power with the life safety design.</li>
</ul>
<p>Big-box retail has similar stratification issues at lower heights, covered in <a href="<?= url('guides/retail-big-box-air-handling') ?>">retail and big-box store air handling</a>. For large-volume spaces where fan redundancy and low noise matter, a <a href="<?= url('products/fan-arrays') ?>">fan array</a> is worth considering.</p>
<?php guide_end([
    ['Should an atrium be fully conditioned from floor to roof?', 'No. In cooling it is far more efficient to condition the occupied zone near the floor and allow the upper volume to stratify. In heating, stratification must be countered with downward-aimed supply or radiant heat.'],
    ['How does HVAC interact with atrium smoke control?', 'Smoke control usually exhausts from the top and supplies makeup air low at low velocity. Normal HVAC supply can disturb the smoke layer, so it is typically shut down or switched to a smoke mode coordinated with the fire protection engineer.'],
    ['What supply method suits an airport terminal?', 'Combinations of radiant floors, long-throw nozzles or displacement outlets, and demand-controlled ventilation by zone are common. The choice depends on ceiling height, glazing and occupancy patterns.'],
]);
