<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('battery-dry-room-air-handling'); ?>
<p class="lede">Lithium-ion cell manufacturing needs air so dry that the dew point is far below anything comfort or most industrial systems reach: commonly in the range of −40°F (−40°C) to −76°F (−60°C) or lower in electrode and cell assembly areas. Getting there takes desiccant dehumidification, often in two stages, an extremely tight room envelope, and careful management of the moisture that people and materials carry in.</p>

<h2>Why lithium battery production needs dry air</h2>
<p>Lithium-ion electrolytes and some electrode materials react with water. Moisture absorbed during electrode handling, cell stacking or winding, and electrolyte filling leads to side reactions that can produce gas inside the cell, degrade capacity and shorten cell life. Certain electrolyte salts generate hydrogen fluoride when exposed to moisture, which is both a quality and a safety concern. Manufacturers set dew point limits for each process step based on their chemistry and quality data; the tightest limits apply where electrolyte and moisture-sensitive materials are exposed.</p>
<p class="note">Dew point targets vary widely by manufacturer, cell chemistry and process stage. Obtain the actual requirements from the process owner rather than relying on typical ranges.</p>

<h2>Why conventional dehumidification is not enough</h2>
<p>A cooling coil can only remove moisture down to roughly its surface temperature, and coils that run below freezing frost over. Even with glycol coils, dew points much below about 35°F to 40°F (2°C to 4°C) become impractical. Dry rooms need dew points tens of degrees lower, so desiccant dehumidification is the core technology.</p>
<p>The general low dew point methods and their limits are described in <a href="<?= url('guides/low-dew-point-supply-air') ?>">low dew point supply air</a>; this guide focuses on what makes battery dry rooms different.</p>

<h2>Typical dry room system configuration</h2>
<ol>
<li><strong>Pre-cooling coil</strong> on outdoor air and return air to remove sensible heat and the bulk of moisture before the desiccant.</li>
<li><strong>First-stage desiccant wheel</strong> dries the air substantially. Reactivation air, heated to a high temperature, drives the moisture off the wheel and is exhausted.</li>
<li><strong>Intercooling coil</strong> removes the heat added by adsorption and carried over from reactivation, because desiccant performance improves with cooler process air.</li>
<li><strong>Second-stage desiccant wheel</strong> for the lowest dew points, sometimes with its own purge sector to reduce carryover of moisture from the reactivation side.</li>
<li><strong>Post-cooling coil</strong> to bring supply air to room temperature, since desiccant drying heats the air significantly.</li>
<li><strong>Filtration</strong> to the cleanliness required by the process, often high-efficiency or HEPA.</li>
<li><strong>Supply fan</strong> sized for the high pressure drops through two wheels and multiple coils.</li>
</ol>
<p>Wheel design, purge sectors and reactivation are covered in <a href="<?= url('guides/desiccant-dehumidification-wheels') ?>">desiccant dehumidification wheels</a>.</p>

<h2>Moisture loads in a dry room</h2>
<p>At very low dew points, small moisture sources dominate:</p>
<table>
<thead><tr><th>Source</th><th>Why it matters</th><th>Mitigation</th></tr></thead>
<tbody>
<tr><td>People</td><td>Each worker releases moisture through breathing and skin; in a dry room this is often the largest single load</td><td>Minimize headcount, use automation, dedicated garments, airlocks</td></tr>
<tr><td>Infiltration through envelope</td><td>Vapor pressure difference between outdoor or plant air and the dry room is very large</td><td>Vapor-tight construction, sealed penetrations, positive pressure</td></tr>
<tr><td>Doors and airlocks</td><td>Each opening admits moist air</td><td>Airlocks with purge, interlocked doors, pass-throughs for materials</td></tr>
<tr><td>Materials and equipment</td><td>Moisture desorbs from surfaces, packaging and porous materials</td><td>Pre-drying, controlled entry, minimal cardboard and paper</td></tr>
<tr><td>Permeation through walls</td><td>Some building materials pass or release moisture</td><td>Metal-faced panels, low-permeance sealants and finishes</td></tr>
</tbody>
</table>
<p>Because the room must be held positive to keep moist air out, the dehumidification system supplies leakage air plus any exhaust, and that makeup air enters at plant conditions with a high moisture content. Every cubic foot of leakage must be dried, which is why envelope tightness drives system size.</p>

<h2>Room construction</h2>
<ul>
<li>Insulated metal panel walls and ceilings with continuous sealing at joints.</li>
<li>Sealed floors with low-permeance coatings.</li>
<li>Minimal penetrations; all conduits, pipes and ducts sealed with low-permeance materials.</li>
<li>Airlocks at personnel and material entries, often with their own dry air supply.</li>
<li>Pressure monitoring between the dry room and adjacent spaces.</li>
</ul>

<h2>Energy considerations</h2>
<p>Dry rooms are among the most energy-intensive spaces in manufacturing. Reactivation energy for desiccant wheels, cooling to remove heat of adsorption, and high fan power for pressure drops add up. Measures to reduce energy include:</p>
<ul>
<li>Reducing leakage and personnel to cut moisture load.</li>
<li>Recovering heat from reactivation exhaust to preheat incoming reactivation air.</li>
<li>Using waste heat or heat pumps for reactivation instead of electric or gas heat.</li>
<li>Recirculating dry room return air through the desiccant system rather than using more outdoor air.</li>
<li>Sizing systems to the real dew point requirement for each zone, since a few degrees lower dew point costs significant energy.</li>
</ul>

<h2>Safety and code considerations</h2>
<p>Dry rooms may contain flammable electrolyte solvents and processes that generate hydrogen fluoride or other hazardous gases. Exhaust, gas detection and emergency ventilation must be coordinated with the process safety design. Hazardous area classification may apply to some zones, affecting electrical equipment ratings. Very dry air also increases electrostatic risk, so grounding and static control are important.</p>

<h2>Commissioning</h2>
<p>Commissioning a dry room often takes longer than expected because new construction materials keep releasing moisture for weeks. Plan an extended dry-down period before production, with continuous dew point logging. Verify dew point at several locations and during door operations and shift changes. Calibrate low dew point sensors against a reference instrument; standard RH sensors are not accurate at these levels. For custom dry room air handlers built around specific dew point targets, see <a href="<?= url('products/custom-air-handlers') ?>">custom air handlers</a>.</p>
<?php guide_end([
    ['What dew point does a lithium battery dry room need?', 'It depends on the manufacturer and process step, but dry rooms commonly operate at dew points from about minus 40°F to minus 76°F (minus 40°C to minus 60°C) or lower. Get the actual requirement from the process owner.'],
    ['Why are desiccant wheels used for battery dry rooms?', 'Cooling coils cannot reach very low dew points without freezing. Desiccant wheels adsorb moisture directly and, often in two stages, can reach the extremely low dew points that battery production requires.'],
    ['What is the biggest moisture load in a dry room?', 'Often people and air leakage. Each worker releases moisture, and any moist air leaking in has a very high moisture content relative to the room. Tight construction, airlocks and minimal headcount reduce the load.'],
]);
