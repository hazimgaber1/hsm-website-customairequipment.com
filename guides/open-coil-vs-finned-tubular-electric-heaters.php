<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('open-coil-vs-finned-tubular-electric-heaters'); ?>
<p class="lede">Open coil heaters expose resistance wire directly to the airstream, which makes them compact, light, cheap and very low in pressure drop. Finned tubular heaters enclose the wire in a sheathed, finned element, which costs more and adds pressure drop but keeps live parts out of the air, tolerates rougher service and suits wet, dirty or hazardous-adjacent duty.</p>

<h2>How each element is built</h2>
<p><strong>Open coil</strong> elements are helically wound resistance wire, commonly a nickel-chromium alloy, strung between ceramic insulators on a frame. Air passes directly over the bare wire. The wire's small mass heats and cools quickly, and its large surface-to-mass ratio transfers heat efficiently to the air.</p>
<p><strong>Finned tubular</strong> elements put the resistance wire inside a metal sheath, packed in compacted magnesium oxide insulation, with fins brazed or wound onto the sheath. The wire is electrically isolated from the sheath and from the airstream. Heat conducts through the insulation to the sheath and fins before reaching the air.</p>

<h2>Comparison</h2>
<table>
<thead><tr><th>Characteristic</th><th>Open coil</th><th>Finned tubular</th></tr></thead>
<tbody>
<tr><td>Live parts exposed to airstream</td><td>Yes</td><td>No</td></tr>
<tr><td>Air pressure drop</td><td>Very low</td><td>Higher; fins add resistance</td></tr>
<tr><td>Response to control</td><td>Fast; low thermal mass</td><td>Slower; element stores more heat</td></tr>
<tr><td>Residual heat after shutdown</td><td>Small</td><td>Larger; fan run-on matters more</td></tr>
<tr><td>Tolerance of moisture and contaminants</td><td>Poor; wet or conductive dust can cause faults</td><td>Good; sheath protects the wire</td></tr>
<tr><td>Mechanical robustness</td><td>Wire can sag or break if damaged</td><td>Robust; withstands handling and vibration</td></tr>
<tr><td>Element surface temperature</td><td>High at the wire</td><td>Lower at the fin surface for a given output</td></tr>
<tr><td>Cost and weight</td><td>Lower</td><td>Higher</td></tr>
<tr><td>Typical use</td><td>Clean, dry air in commercial ducts and AHUs</td><td>Upstream of cooling coils, humid air, outdoor air, industrial duty, personnel-access areas</td></tr>
</tbody>
</table>

<h2>Safety considerations</h2>
<h3>Exposed conductors</h3>
<p>An open coil heater has energized wire in the airstream. Anyone reaching into the section with power on, and any conductive object dropped into it, can contact live parts. Access doors to open coil sections need interlocks or warning labels, and service procedures must include lockout. Finned tubular elements remove that hazard because the sheath is not energized.</p>
<h3>Surface temperature and contaminants</h3>
<p>Lint, dust and debris that settle on very hot bare wire can char and in some cases ignite. Open coil heaters are therefore best kept downstream of good filtration and away from lint-producing processes. Finned tubular elements run cooler at the surface for the same heat output and are less likely to ignite deposits, though they are not immune if fins are heavily fouled.</p>
<h3>Moisture</h3>
<p>Open coil elements placed immediately downstream of a wet cooling coil or humidifier can be exposed to droplets that cause insulation faults or ground faults. Finned tubular heaters handle humid and occasionally wet air much better.</p>
<h3>Required safety devices</h3>
<p>Both types need an airflow proving device, automatic-reset high-limit cutouts, and manual-reset (or replaceable-link) secondary limits, arranged according to the heater's listing. Electric duct heaters are commonly listed to UL 1996 in the US and to CSA standards in Canada, and heaters supplied as part of an air handler are evaluated as part of the unit's listing under UL 1995 or CSA C22.2 No. 236. The listing determines the required controls and spacing; follow it rather than general rules.</p>

<h2>Airflow requirements</h2>
<p>Every electric heater needs enough air moving across it to carry the heat away before the element overheats. Manufacturers publish minimum velocity requirements based on heater kW per square foot of face area and entering air temperature. The higher the watt density and the warmer the entering air, the higher the minimum velocity.</p>
<ul>
<li>Open coil heaters dissipate heat efficiently but their bare wire reaches high temperatures quickly if airflow fails; the high-limit response must be fast.</li>
<li>Finned tubular heaters carry more stored heat, so they need a fan run-on period after shutdown to purge residual heat and avoid nuisance trips of the manual-reset limit.</li>
<li>In VAV systems, check that the minimum airflow during heating meets the heater's minimum velocity at the highest heating stage. If not, limit the heater output at low airflow.</li>
<li>Uneven velocity across the heater face, from a nearby elbow or fan discharge, can overheat part of the element even when average velocity meets the minimum.</li>
</ul>
<p class="warn">Do not place an electric heater directly at a fan discharge or in the throat of a transition without checking the velocity profile. Local low-velocity zones are a common source of high-limit trips and element damage.</p>

<h2>Pressure drop and energy</h2>
<p>Open coil heaters typically add very little resistance, often a small fraction of an inch of water. Finned tubular heaters add more because of the fin bank. In units with many operating hours, that extra pressure drop is a real fan energy cost. When the heater is in the main airstream year-round but only used in winter, the open coil type has an energy advantage if its application conditions are acceptable. The heater's resistance belongs in the unit's <a href="<?= url('guides/total-static-pressure-budget') ?>">total static pressure budget</a>.</p>

<h2>Choosing between them</h2>
<ul>
<li><strong>Choose open coil</strong> for clean, dry, filtered air in conventional commercial AHUs and ducts where low pressure drop and low first cost matter.</li>
<li><strong>Choose finned tubular</strong> where air may be humid or wet, dirty or lint-laden, where people may access the section, for outdoor air preheat in harsh conditions, and in industrial or rugged service.</li>
<li>For either type, coordinate staging or SCR control and electrical protection with the heater's listing. Control methods are outside this comparison.</li>
</ul>
<p>Where an electric heater serves as preheat for outdoor air, its placement and capacity follow the method in <a href="<?= url('guides/preheat-coil-placement-sizing') ?>">preheat coil placement and sizing</a>. Listing and certification of the heater as part of the unit is covered in <a href="<?= url('guides/ul-1995-vs-csa-c22-2-no-236') ?>">UL 1995 vs CSA C22.2 No. 236</a>.</p>
<?php guide_end([
    ['What is the difference between an open coil and a finned tubular heater?', 'An open coil heater has bare resistance wire in the airstream, giving low cost, low pressure drop and fast response. A finned tubular heater encloses the wire in an insulated metal sheath with fins, which keeps live parts out of the air and handles moisture and dirt better but costs more and adds pressure drop.'],
    ['Are open coil electric heaters safe?', 'They are safe when installed and protected according to their listing, with airflow proving, high-limit cutouts, filtered dry air and controlled access. Because the wire is energized and exposed, they are less suited to wet air, lint-laden air or sections people may enter with power on.'],
    ['Why do electric heaters need minimum airflow?', 'The air carries heat away from the element. Below the minimum velocity the element overheats, trips its limits and can be damaged. Minimum velocity depends on the heater\'s watt density and entering air temperature, as published by the manufacturer.'],
]);
