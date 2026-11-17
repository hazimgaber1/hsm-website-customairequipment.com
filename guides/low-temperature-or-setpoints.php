<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('low-temperature-or-setpoints'); ?>
<p class="lede">To hold an operating room at 60°F (15.6°C) without exceeding 60% RH, the supply air dew point must be about 45°F (7°C) or lower, which standard 44 to 45°F chilled water cannot reliably produce. You need colder chilled water, a dedicated low-temperature coil source, desiccant drying or DX sub-cooling, plus reheat and dew point-based control; and in winter, humidification to stay above the 20% RH lower limit.</p>

<h2>Step 1: Define the target conditions as dew points</h2>
<p>Room temperature and RH limits convert into a dew point window that the AHU must hit. Using standard psychrometrics at sea level:</p>
<table>
<thead><tr><th>Room condition</th><th>Humidity ratio</th><th>Dew point</th></tr></thead>
<tbody>
<tr><td>60°F, 60% RH (upper limit)</td><td>about 46 gr/lb (0.0066 lb/lb)</td><td>about 46°F (7.8°C)</td></tr>
<tr><td>60°F, 50% RH (comfortable target)</td><td>about 39 gr/lb (0.0055 lb/lb)</td><td>about 41°F (5°C)</td></tr>
<tr><td>60°F, 20% RH (lower limit)</td><td>about 15 gr/lb (0.0022 lb/lb)</td><td>about 19°F (−7°C)</td></tr>
</tbody>
</table>
<p>The upper limit is the hard part for most of North America during the cooling season. The lower limit matters in cold climates in winter. Confirm the RH limits in the adopted edition of ASHRAE 170 or CSA Z317.2; the 20% lower limit applies under later editions of 170.</p>
<p class="note">Do not design to exactly 60% RH. Controls hunt, sensors drift and staff numbers vary. A target of 50 to 55% RH at 60°F gives room for error.</p>

<h2>Step 2: Calculate the required supply dew point</h2>
<p>The supply air must be drier than the room by enough to absorb the room's latent load.</p>
<p class="formula">Δgr = latent load (Btu/h) ÷ (0.68 × CFM)</p>
<p>Worked example: an OR with 2,500 cfm (1,180 L/s) of supply and twelve staff. At a moderate activity latent gain of about 200 Btu/h per person, plus a small allowance for other sources, take a room latent load of 2,700 Btu/h.</p>
<ul>
<li>Δgr = 2,700 ÷ (0.68 × 2,500) = 1.6 gr/lb.</li>
<li>Room target at 60°F and 55% RH: about 42 gr/lb (dew point near 44°F).</li>
<li>Required supply humidity ratio: 42 − 1.6 = 40.4 gr/lb, a dew point of about 43°F (6°C).</li>
</ul>
<p>Because ORs have high airflow relative to their latent load, the supply dew point ends up only slightly below the room dew point. The real challenge is producing 43°F dew point air at all. The broader dehumidification method is in <a href="<?= url('guides/dehumidification-load-calculation') ?>">the dehumidification load calculation</a>.</p>

<h2>Step 3: Choose a way to reach a 43°F dew point</h2>
<p>A deep cooling coil can leave saturated air roughly 3 to 6°F above the entering chilled water temperature, depending on rows, fin spacing and water flow. To get a 43°F leaving dew point, you need water at about 37 to 40°F.</p>
<table>
<thead><tr><th>Approach</th><th>How it works</th><th>Considerations</th></tr></thead>
<tbody>
<tr><td>Low-temperature chilled water from the central plant</td><td>Plant supplies 38°F or colder water to the OR AHU</td><td>Penalizes the whole plant's efficiency if all water is made that cold</td></tr>
<tr><td>Dedicated low-temperature chiller or glycol loop</td><td>Separate small chiller serves only OR coils</td><td>Glycol avoids freezing at the evaporator; requires redundancy</td></tr>
<tr><td>Two-stage coil: building chilled water then low-temperature coil</td><td>First coil does most of the sensible work, second coil does final drying</td><td>Reduces the size of the low-temperature system</td></tr>
<tr><td>DX coil downstream of chilled water coil</td><td>DX stage provides the final depression</td><td>Refrigerant safety and redundancy considerations</td></tr>
<tr><td>Desiccant wheel</td><td>Removes moisture without very cold coils; regenerated with heat</td><td>Adds heat to supply air that must be removed; more maintenance</td></tr>
<tr><td>Wraparound heat pipe around coil</td><td>Precools entering air, reheats leaving air</td><td>Lets the coil reach lower leaving temperature with less reheat energy</td></tr>
</tbody>
</table>
<p>Low dew point supply design in general, including coil selection at low leaving temperatures, is covered in <a href="<?= url('guides/low-dew-point-supply-air') ?>">low dew point supply air</a>.</p>

<h2>Step 4: Provide reheat and size it</h2>
<p>Air leaving a coil at about 43°F must be reheated to the supply temperature needed for the room, often 52 to 56°F for a 60°F room, depending on the sensible load. Reheat options include hot water terminal reheat at each OR (allowing individual room temperature control), heat recovered from the chiller condenser, or a heat pipe. Size the reheat for the minimum sensible load case, such as an empty room in unoccupied mode, when the most reheat is needed.</p>

<h2>Step 5: Control on dew point, not RH alone</h2>
<ol>
<li>Control the cooling coil discharge to a dew point (or humidity ratio) setpoint calculated from the room target, rather than to a dry-bulb temperature.</li>
<li>Control reheat at each room to the room temperature setpoint.</li>
<li>Use room RH sensors to trim the coil dew point setpoint within limits.</li>
<li>Allow the surgical team to select setpoints from a defined range, with the system clamping requests it cannot meet without exceeding RH limits.</li>
<li>Alarm when room RH approaches the upper limit.</li>
</ol>
<p class="warn">If staff lower the temperature setpoint without the dew point setpoint following, room RH will rise above 60%. Tie the two together in the sequence.</p>

<h2>Step 6: Plan for winter humidification</h2>
<p>At 60°F, 20% RH corresponds to a dew point near 19°F. In cold climates the outdoor dew point is often lower, so humidification is needed to stay above the lower limit. Size the humidifier for minimum outdoor dew point at the design outdoor airflow, and locate it so absorption is complete before the final filter.</p>

<h2>Step 7: Verify during commissioning</h2>
<ul>
<li>Test at the lowest allowed setpoint during peak humid weather or with simulated loads.</li>
<li>Log room temperature, RH and coil leaving dew point over a full day of operation.</li>
<li>Confirm that low-temperature chilled water supply holds under plant transitions.</li>
</ul>
<p>Low OR temperatures also affect airflow design and diffuser selection, which are covered separately in <a href="<?= url('guides/operating-room-air-handling-design') ?>">how to design air handling for operating rooms</a>.</p>
<?php guide_end([
    ['What dew point is needed to keep an operating room at 60 F and 60% RH?', 'About 46 F at the room. To absorb the latent load with some margin, the supply air is usually designed for a dew point around 41 to 43 F.'],
    ['Can standard chilled water achieve low OR setpoints?', 'Usually not reliably. Standard 44 to 45 F chilled water leaves air near 47 to 50 F dew point. Colder water around 36 to 38 F, a dedicated low-temperature source, DX or desiccant drying is typically required.'],
    ['Why is reheat needed for low-temperature ORs?', 'Air leaving the cooling coil at a low dew point is colder than needed for the room\'s sensible load. Reheat brings it to the right supply temperature while keeping the moisture content low.'],
    ['Do low OR setpoints need humidification in winter?', 'In cold climates, often yes. At 60 F room temperature, 20% RH corresponds to a dew point near 19 F, and outdoor air can be drier than that.'],
]);
