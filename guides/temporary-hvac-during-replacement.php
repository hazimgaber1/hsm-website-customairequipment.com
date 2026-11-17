<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('temporary-hvac-during-replacement'); ?>
<p class="lede">To keep a building conditioned while its air handler is out, size rental equipment to the actual load during the outage period (not the old unit's nameplate), pick a type that suits the available power and plant connections, and plan the duct, piping, electrical and condensate hookups before the shutdown starts.</p>

<h2>Step 1: Define what has to be maintained</h2>
<ol>
<li><strong>Set the conditions.</strong> Decide the acceptable space temperature and humidity during the outage. Offices may tolerate a wider band than normal; server rooms, labs, archives and pharmacies usually cannot.</li>
<li><strong>Decide on ventilation.</strong> If the building remains occupied, outdoor air is still required. A temporary unit that only recirculates may not be acceptable for occupied spaces.</li>
<li><strong>Identify critical zones.</strong> Sometimes the cheapest answer is to condition only critical rooms with spot units and let general areas drift or close.</li>
<li><strong>Fix the dates.</strong> The season of the outage drives everything; a spring or fall shutdown may need little more than ventilation.</li>
</ol>

<h2>Step 2: Size the temporary capacity</h2>
<ol start="5">
<li><strong>Estimate the load for the outage window.</strong> Use the design-day load only if the outage could fall on a design day. For a planned shoulder-season shutdown, use a load estimate at the expected outdoor conditions.</li>
<li><strong>Calculate airflow.</strong> If the temporary unit will connect to the existing duct system, aim to deliver enough airflow to reach the served spaces through the existing diffusers; confirm it can overcome the duct static.</li>
<li><strong>Calculate cooling and heating capacity</strong> from airflow and temperature difference.</li>
</ol>
<p class="formula">Sensible capacity (Btu/h) = 1.08 × CFM × ΔT</p>
<p class="formula">Total capacity (Btu/h) = 4.5 × CFM × Δh</p>
<p><strong>Example.</strong> A unit being replaced normally supplies 20,000 CFM (9.4 m³/s). During a June outage the engineer estimates the served zones need 15,000 CFM at a supply temperature 20°F below the 75°F space setpoint, and the temporary unit will take in 20% outdoor air. Mixed air enters the temporary coil at about 31.0 Btu/lb enthalpy and leaves at 23.0 Btu/lb.</p>
<p>Sensible: 1.08 × 15,000 × 20 = 324,000 Btu/h.</p>
<p>Total: 4.5 × 15,000 × (31.0 − 23.0) = 540,000 Btu/h, or 540,000 ÷ 12,000 = 45 tons.</p>
<p>Rental units come in fixed sizes, so this load would typically be met with two 25-ton units, which also gives partial redundancy if one trips.</p>
<p class="note">Check the temporary unit's fan rating against the external static of the existing ductwork. Many rental packaged units are rated at modest external static and may need a booster or a direct connection closer to the zones.</p>

<h2>Step 3: Choose the equipment type</h2>
<table>
<thead><tr><th>Option</th><th>Needs</th><th>Fits when</th></tr></thead>
<tbody>
<tr><td>Packaged air-cooled DX rental units</td><td>Power, outdoor location, duct connection, condensate drain</td><td>Building plant is unavailable or not worth tying into</td></tr>
<tr><td>Air handler rental fed from building chilled and hot water</td><td>Piping taps with valves, power, duct connection</td><td>Central plant stays online and has accessible connections</td></tr>
<tr><td>Rental chiller plus air handler</td><td>Large power supply, outdoor space, piping</td><td>Large loads or central plant also being replaced</td></tr>
<tr><td>Spot coolers and portable heaters</td><td>Local power, heat rejection path, condensate</td><td>Small critical rooms only</td></tr>
<tr><td>Indirect-fired or electric temporary heaters</td><td>Fuel or power, flue where needed, duct connection</td><td>Winter outages; never use unvented fuel-fired heaters indoors</td></tr>
</tbody>
</table>

<h2>Step 4: Plan the connections</h2>
<ol start="8">
<li><strong>Air.</strong> Identify a duct connection point downstream of the unit being removed, typically a new tap with a flanged collar and a temporary isolation damper or blank-off. Route lay-flat or rigid temporary duct through a window, louver or roof opening and seal and insulate it against condensation and weather.</li>
<li><strong>Return.</strong> Decide whether return air comes back to the temporary unit or whether the unit runs on outdoor air with relief through existing paths. Building pressurization must stay balanced.</li>
<li><strong>Water.</strong> For hydronic temporary units, install hose connections with isolation valves on the building loops before the outage, and confirm the plant can deliver flow at the new location.</li>
<li><strong>Power.</strong> Confirm the temporary units' electrical requirements against available capacity. Rental generators are common when the building service cannot carry both temporary and permanent equipment. Temporary feeders and disconnects must be installed by a licensed electrician.</li>
<li><strong>Condensate.</strong> Route condensate to an approved drain or provide pumps. Temporary units on sidewalks or roofs need drainage that will not create ice or slip hazards.</li>
<li><strong>Controls.</strong> Most rental units run on their own thermostat. Place the sensor in a representative space, and provide remote alarms for critical areas.</li>
</ol>

<h2>Step 5: Commission and operate</h2>
<ol start="14">
<li>Start temporary equipment before the permanent unit is shut down and verify it can hold conditions.</li>
<li>Assign someone to check the units daily: filters, condensate, alarms, fuel levels on generators.</li>
<li>Keep the rental company's emergency contact on site; a failure during a heat wave needs same-day response.</li>
<li>When the new unit is running and balanced, remove temporary equipment, cap the connections permanently and restore openings.</li>
</ol>
<p class="warn">Temporary duct and equipment can block exits, fire department access or sprinkler coverage. Review the layout with the building's fire safety representative before installation.</p>
<p>Phasing and tenant communication in occupied buildings are covered in <a href="<?= url('guides/replacing-ahu-occupied-building') ?>">how to replace an AHU in an occupied building</a>, and outage timing in the <a href="<?= url('guides/retrofit-shutdown-planning-checklist') ?>">retrofit shutdown planning checklist</a>.</p>
<?php guide_end([
    ['How do you size temporary cooling during an AHU replacement?', 'Estimate the load for the outdoor conditions expected during the outage, then calculate capacity from airflow and enthalpy difference using 4.5 times CFM times delta h. Round up to available rental sizes and check that the fan can overcome existing duct static.'],
    ['Can temporary units connect to the existing ductwork?', 'Yes. A tap with a flanged collar is installed downstream of the unit being replaced, and temporary duct is run from the rental unit. Confirm the rental unit fan can deliver the needed airflow against the duct system pressure.'],
    ['Do temporary HVAC units have to provide outdoor air?', 'If the building remains occupied, ventilation is still required, so the temporary arrangement should bring in outdoor air or another source must provide it. Recirculation-only units are usually acceptable only for unoccupied or process spaces.'],
]);
