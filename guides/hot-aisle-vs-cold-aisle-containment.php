<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('hot-aisle-vs-cold-aisle-containment'); ?>
<p class="lede">Both containment methods separate cold supply air from hot exhaust air so the cooling units see a high, predictable return temperature. Hot aisle containment encloses the exhaust side and leaves the room cool; cold aisle containment encloses the intake side and lets the rest of the room run hot. The choice affects the air handler's return temperature, coil performance, ride-through and the working conditions for staff.</p>

<h2>Why containment matters to the air handler</h2>
<p>Without containment, cold supply air bypasses the servers and mixes with hot exhaust, and some hot exhaust recirculates to server inlets. The cooling units then see a return temperature lower than the server exhaust, and they have to supply colder air than necessary to keep the worst inlet in range. Containment breaks that mixing. The cooling units can supply air close to the server inlet target, and the return comes back close to the server exhaust temperature.</p>
<p>A typical contained design might supply 75°F (24°C) air and return 95 to 100°F (35 to 38°C). An uncontained room serving the same servers might need 60 to 65°F supply and see a return in the low 70s. The higher return temperature increases coil capacity per unit of airflow and lets chilled water or economizers run warmer.</p>
<p class="formula">Sensible capacity (Btu/h) = 1.08 × cfm × (Return − Supply)</p>
<p>At 100,000 cfm, going from a 12°F to a 22°F return-to-supply difference raises sensible capacity from about 1.3 million to 2.4 million Btu/h with the same fans.</p>

<h2>How each method works</h2>
<h3>Hot aisle containment (HAC)</h3>
<p>Racks are arranged in rows with exhausts facing each other, and the hot aisle between them is enclosed with doors at the ends and a roof or chimney. Hot exhaust goes up through a ceiling return plenum or ducted chimneys to the cooling units. The open room, including the cold aisles, is flooded with supply air at the server inlet temperature.</p>
<h3>Cold aisle containment (CAC)</h3>
<p>Racks face each other across an enclosed cold aisle with doors and a roof. Supply air is delivered into the cold aisle, usually from a raised floor or overhead. Server exhaust is released into the open room, which therefore sits at roughly the return temperature.</p>

<h2>Comparison</h2>
<table>
<thead><tr><th>Factor</th><th>Hot aisle containment</th><th>Cold aisle containment</th></tr></thead>
<tbody>
<tr><td>Room temperature</td><td>Near supply temperature; comfortable</td><td>Near return temperature; hot</td></tr>
<tr><td>Return air path</td><td>Ceiling plenum or chimneys to cooling units</td><td>Open room back to cooling units</td></tr>
<tr><td>Supply air path</td><td>Flooded room, no raised floor needed</td><td>Raised floor or overhead ducts into the aisle</td></tr>
<tr><td>AHU return temperature</td><td>High and stable</td><td>High; can be diluted by room leakage</td></tr>
<tr><td>Thermal reservoir for ride-through</td><td>Large: whole room is cold air</td><td>Small: only the cold aisles</td></tr>
<tr><td>Retrofit into raised floor room</td><td>Needs ceiling plenum or chimneys</td><td>Usually simpler; uses existing floor</td></tr>
<tr><td>Non-racked equipment in room</td><td>Sits in cool air</td><td>Sits in hot air; may need its own cooling</td></tr>
<tr><td>Worker comfort</td><td>Hot only inside the hot aisle</td><td>Room is hot; work in cold aisles is comfortable</td></tr>
<tr><td>Fire protection coordination</td><td>Sprinklers or detection needed inside hot aisle enclosure</td><td>Sprinklers or detection needed inside cold aisle enclosure</td></tr>
</tbody>
</table>
<p class="note">Fire codes and the authority having jurisdiction treat containment roofs and panels as obstructions to sprinklers and detection. Coordinate early; some systems use panels that drop away on heat.</p>

<h2>Effect on AHU supply and return temperatures</h2>
<p>With HAC, the air handler supplies directly to the room at the server inlet setpoint. Supply temperature control is straightforward: control on supply air temperature, or on a cold-aisle average, and the room follows. Return temperature depends on server delta-T and on how much air leaks from the room into the hot aisle through gaps in the containment.</p>
<p>With CAC, supply goes into the enclosed cold aisles. If the cooling units deliver more air than the servers draw, the extra leaks out of the cold aisle into the room and dilutes the return. If they deliver less, hot room air is drawn into the cold aisle through gaps and server inlets warm up. Balance between supply and server demand is therefore critical, which is why CAC systems often control fans on differential pressure between cold aisle and room; that method is described in <a href="<?= url('guides/fan-wall-pressure-control') ?>">how to control fan walls on aisle differential pressure</a>.</p>
<p>In both methods, a slight oversupply is safer than an undersupply, but every cfm of oversupply lowers the return temperature and erodes the benefit. Diagnosing where that lost delta-T goes is covered in <a href="<?= url('guides/bypass-and-recirculation-troubleshooting') ?>">troubleshooting low delta-T from bypass and recirculation</a>.</p>

<h2>Ride-through and failure behavior</h2>
<p>When cooling stops, for example during a generator transfer, servers keep producing heat. In an HAC room, the servers draw from a large volume of cool room air, and inlet temperatures rise relatively slowly. In a CAC room, the cold aisles hold a small volume of air, and once it is used up the servers draw hot room air. Inlet temperatures can climb quickly. Designs with CAC often need faster cooling restart or stored cooling to stay within the allowable envelope during a power event.</p>

<h2>Which to choose</h2>
<ul>
<li><strong>Choose HAC</strong> for new builds with slab floors and fan walls or overhead supply, for facilities with staff working regularly in the room, and where ride-through is a concern.</li>
<li><strong>Choose CAC</strong> for retrofits into existing raised floor rooms, when ceiling height or plenum space is limited, and when deployment speed matters more than room comfort.</li>
<li><strong>Consider rack-level chimneys</strong> (a form of HAC) where full aisle enclosure is impractical.</li>
</ul>
<p>Either way, the supply setpoint can rise toward the upper part of the envelope described in <a href="<?= url('guides/ashrae-tc-9-9-thermal-guidelines') ?>">ASHRAE TC 9.9 thermal guidelines</a>, because the gap between supply and server inlet temperatures shrinks.</p>
<?php guide_end([
    ['Which is better, hot aisle or cold aisle containment?', 'Neither is always better. Hot aisle containment keeps the room cool and gives more ride-through time, and suits new builds. Cold aisle containment is often easier to retrofit into raised floor rooms. Both raise return temperatures and cut bypass.'],
    ['Does containment raise the return air temperature at the AHU?', 'Yes. By preventing cold supply air from mixing with hot exhaust, containment sends return air back close to the server exhaust temperature, which increases coil capacity per unit of airflow.'],
    ['Why does cold aisle containment have less ride-through time?', 'The enclosed cold aisles hold only a small volume of cool air. When cooling stops, servers use it up quickly and begin drawing hot room air, so inlet temperatures rise faster than in a hot aisle design.'],
]);
