<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('freezer-dock-fog-ice-troubleshooting'); ?>
<p class="lede">Fog, frost and ice at cold storage docks are almost always caused by warm, moist air meeting cold air or cold surfaces. Find where the moisture enters, compare its dew point with the temperatures it meets, then fix it by cutting infiltration and lowering the dock air dew point with dedicated dehumidification.</p>

<h2>How the problem develops</h2>
<p>A typical cold chain facility has a freezer at −10°F (−23°C) or colder, a cooler or refrigerated dock at around 35°F to 45°F (2°C to 7°C), and outdoor air that may be 80°F (27°C) with a 70°F (21°C) dew point in summer. When dock doors or freezer doors open:</p>
<ul>
<li>Humid outdoor air entering the dock cools below its dew point and forms fog.</li>
<li>Moisture condenses on cold surfaces: ceilings, door frames, racking and product.</li>
<li>Near the freezer door, moist air freezes into frost and ice on floors, walls and door tracks.</li>
<li>Ice on floors is a slip hazard; ice on doors causes door damage and failure to close; frost on product damages packaging.</li>
</ul>
<p>Refrigeration system design is not covered here; this guide focuses on infiltration, humidity and the air handling fixes at the dock.</p>

<h2>Symptom: fog at dock doors when trucks load</h2>
<h3>Cause: outdoor air infiltration at dock openings</h3>
<p><strong>Check:</strong> Inspect dock seals and shelters for gaps around trailers, especially at the top corners and at the hinge side. Observe whether fog forms immediately at the dock opening. Check whether doors are left open between loads and whether trailers are pre-cooled.</p>
<p><strong>Fix:</strong> Repair or replace dock seals and shelters; add inflatable seals for varied trailer sizes; enforce door closing between loads; consider vestibules or enclosed dock designs. Reducing infiltration is the most effective single measure.</p>

<h2>Symptom: fog and ice at the freezer door</h2>
<h3>Cause: dock air dew point above freezer temperature, plus door exchange</h3>
<p><strong>Check:</strong> Measure dock air temperature and dew point near the freezer door. If the dew point is above freezing, any air moving into the freezer will deposit frost. Check how long the freezer door stays open per cycle, the door speed, and whether strip curtains or air curtains are installed and working. Check for pressure differences driving air through the door: warm dock air flows in at the top of the opening as cold freezer air spills out at the bottom.</p>
<p><strong>Fix:</strong></p>
<ul>
<li>Install high-speed doors with fast open and close cycles, controlled by motion sensors.</li>
<li>Add or repair air curtains designed for cold storage, with correct velocity and direction.</li>
<li>Lower dock air dew point with dedicated dehumidification (see below).</li>
<li>Add a vestibule between dock and freezer, conditioned with very dry air.</li>
<li>Heat door frames and thresholds to prevent ice formation on tracks.</li>
</ul>

<h2>Symptom: condensation dripping from dock ceiling</h2>
<h3>Cause: ceiling surface below air dew point</h3>
<p><strong>Check:</strong> Measure ceiling surface temperature with an infrared thermometer and compare with dock air dew point. Look for thermal bridges in the roof structure, such as purlins or penetrations, that create cold spots. Check whether refrigeration evaporators blow cold air directly at the ceiling.</p>
<p><strong>Fix:</strong> Lower dock dew point; improve insulation and air barrier continuity at the roof; redirect evaporator discharge; seal penetrations that bring in humid air.</p>

<h2>Symptom: frost on product and racking near the door</h2>
<h3>Cause: moist air reaching product colder than its dew point</h3>
<p><strong>Check:</strong> Look at where frost forms. Product stored close to the freezer door gets the most exposure. Check whether product enters the freezer from a humid dock area and whether packaging has absorbed moisture.</p>
<p><strong>Fix:</strong> Keep product staging out of the door's air exchange zone; reduce door exchange; lower dock dew point.</p>

<h2>Symptom: problem worse in summer and after rain</h2>
<h3>Cause: higher outdoor dew point drives more moisture in</h3>
<p><strong>Check:</strong> Compare problem frequency with outdoor dew point records. Check whether dock dehumidification capacity was sized for design summer dew point or only average conditions.</p>
<p><strong>Fix:</strong> Size dehumidification for the design summer dew point and peak infiltration, and run it continuously during humid seasons.</p>

<h2>Dock dehumidification</h2>
<p>The lasting fix for most dock fog and ice problems is dehumidification that lowers dock air dew point below the coldest surfaces it meets. Targets depend on the facility, but keeping the refrigerated dock dew point below the dock surface temperatures, and as low as practical near freezer doors, is the goal.</p>
<table>
<thead><tr><th>Method</th><th>Where it fits</th></tr></thead>
<tbody>
<tr><td>Desiccant dehumidifier</td><td>Most cold docks; reaches low dew points at cool dock temperatures where refrigerant coils frost</td></tr>
<tr><td>Refrigerant-based dehumidifier</td><td>Warmer docks with moderate dew point targets</td></tr>
<tr><td>Dry air delivered to door vestibules</td><td>Targeted at freezer doors for the lowest dew points where they matter most</td></tr>
</tbody>
</table>
<p>Desiccant systems are explained in <a href="<?= url('guides/desiccant-dehumidification-wheels') ?>">desiccant dehumidification wheels</a>.</p>
<h3>Sizing</h3>
<ol>
<li>Estimate infiltration air at dock doors and freezer doors from door size, opening frequency, duration and protection devices.</li>
<li>Multiply by the humidity ratio difference between incoming air and the target dock air.</li>
<li>Add moisture from people, product, forklift battery charging (if in the space) and wash-down.</li>
<li>Size dehumidification capacity for the total at design summer conditions.</li>
</ol>
<p>The moisture balance method is in <a href="<?= url('guides/dehumidification-load-calculation') ?>">dehumidification load calculation</a>.</p>
<p class="note">Supply dry air low and toward the freezer door and dock openings, where moisture enters. Dry air delivered high in the dock does little for the door zones.</p>

<h2>Verify the fix</h2>
<p>Log dock temperature and dew point, freezer door open time, and outdoor dew point through a humid season. Fog and ice should become rare events tied to unusual conditions, not daily occurrences. Inspect ice buildup at doors weekly at first, and adjust door controls and dehumidification setpoints as needed. For general strategies to deliver low dew point air, see <a href="<?= url('guides/low-dew-point-supply-air') ?>">low dew point supply air</a>.</p>
<?php guide_end([
    ['What causes fog at freezer docks?', 'Warm, humid air entering the dock cools below its dew point when it meets cold dock air or freezer air. Infiltration at dock doors and air exchange at freezer doors are the main sources.'],
    ['How do you stop ice forming at freezer doors?', 'Reduce air exchange with high-speed doors and air curtains, lower the dock air dew point with dehumidification, add a dry vestibule if needed, and heat door frames and thresholds.'],
    ['Why use desiccant dehumidifiers at cold docks?', 'Cold docks need low dew points at cool air temperatures. Refrigerant coils would frost at those conditions, while desiccant dehumidifiers remove moisture regardless of air temperature.'],
]);
