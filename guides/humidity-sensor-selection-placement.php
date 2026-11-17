<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('humidity-sensor-selection-placement'); ?>
<p class="lede">Select humidity sensors by the accuracy the control loop actually needs, the RH range they will live in, and how they will be calibrated; then place each one where it reads well-mixed air representative of what it controls, away from humidifier plumes, coils, sunlight and dead air. A good sensor in a bad location does more harm than a modest sensor in the right one.</p>

<h2>Step 1: Decide what accuracy you need</h2>
<p>Work backward from the control requirement.</p>
<ol>
<li>Write down the tolerance on the controlled variable, for example 50 ± 5 percent RH in a museum gallery, or a supply dew point of 52 ± 1 F in a DOAS.</li>
<li>Allow the sensor no more than roughly a third to half of that tolerance, so the loop has room for its own variation.</li>
<li>Translate dew point tolerances into RH accuracy. Near 72 F and 50 percent RH, an RH error of 2 percentage points equals a dew point error of roughly 1 F. A ±1 F dew point loop therefore needs a sensor of about ±2 percent RH or better, plus an accurate temperature reading.</li>
<li>Remember that accuracy statements usually apply over a stated range and temperature. Accuracy is often worse above about 80 to 90 percent RH.</li>
</ol>
<table>
<thead><tr><th>Typical application</th><th>Sensor accuracy commonly used</th></tr></thead>
<tbody>
<tr><td>General comfort monitoring, offices, schools</td><td>±3 to ±5% RH</td></tr>
<tr><td>Humidifier space control, labs, healthcare</td><td>±2 to ±3% RH</td></tr>
<tr><td>Museums, archives, critical process</td><td>±1 to ±2% RH, frequent calibration</td></tr>
<tr><td>Supply dew point control after coils</td><td>Dew point sensor or ±2% RH rated for high humidity</td></tr>
<tr><td>Duct high-limit (wetting protection)</td><td>±3 to ±5% RH; reliability matters more than precision</td></tr>
</tbody>
</table>

<h2>Step 2: Choose the sensor technology</h2>
<ul>
<li><strong>Capacitive polymer RH sensors</strong> are standard in HVAC. They are compact and affordable, with good accuracy in the mid range. They drift over time and can be affected by contaminants and sustained high humidity. Combined RH and temperature sensors compute dew point.</li>
<li><strong>Heated or high-humidity-rated capacitive sensors</strong> are designed to tolerate near-saturated air, such as downstream of cooling coils, without saturating and losing accuracy.</li>
<li><strong>Chilled mirror hygrometers</strong> measure dew point directly by cooling a mirror until dew forms. They are the most accurate and most expensive, used as references or in critical applications.</li>
<li><strong>Mechanical humidistats</strong> are suitable only as simple on/off high-limit switches.</li>
</ul>
<p class="note">For dew point control, a combined RH and temperature sensor is only as good as both elements and their co-location. Use a single probe that measures both, rather than separate sensors in different places.</p>

<h2>Step 3: Place space sensors</h2>
<ol>
<li>Mount on an interior wall, at roughly breathing height, where air circulates freely.</li>
<li>Keep away from supply diffusers, return grilles, doors to the outdoors, windows and exterior walls.</li>
<li>Keep out of direct sunlight and away from heat sources such as lights, equipment and occupants clustered close by.</li>
<li>Avoid dead corners, alcoves and spaces behind furniture.</li>
<li>In large or nonuniform spaces, use more than one sensor and control to an average or to the most critical location.</li>
<li>In museums and archives, locate sensors where the objects are, since that is the condition that matters.</li>
</ol>
<p>A return duct sensor can stand in for the space where one AHU serves one well-mixed zone. It can be misleading when the return mixes several zones or picks up plenum air.</p>

<h2>Step 4: Place duct and AHU sensors</h2>
<ol>
<li><strong>Supply air after a humidifier:</strong> place the control sensor well beyond the absorption distance, typically many feet downstream, or near the first branch where air is mixed. Sensors in the plume read high and cause the humidifier to cut back. Absorption is explained in <a href="<?= url('guides/humidifier-absorption-distance') ?>">humidifier absorption distance</a>.</li>
<li><strong>Duct high-limit:</strong> place beyond absorption distance as well, but close enough to protect the first downstream components, typically a few feet into the supply duct.</li>
<li><strong>After a cooling coil:</strong> place downstream of the coil and any moisture eliminator, out of the path of water carryover, in a location with uniform temperature. Do not place it on the coil face.</li>
<li><strong>Mixed air:</strong> stratification makes mixed air humidity readings unreliable; avoid using them for control.</li>
<li><strong>Return air:</strong> place after the return fan or in a straight section where air is mixed.</li>
<li>Use averaging or multiple sensors where stratification is unavoidable, though RH averaging elements are less common than temperature averaging elements.</li>
</ol>

<h2>Step 5: Place outdoor sensors</h2>
<ol>
<li>Mount on the north side of the building (in the northern hemisphere) or under a radiation shield.</li>
<li>Keep away from exhaust outlets, cooling towers, condensers and roof surfaces that heat in the sun.</li>
<li>Protect from direct rain and snow, but allow free air movement.</li>
<li>Consider whether one outdoor sensor can serve several systems through the BAS; one well-maintained sensor is better than several neglected ones.</li>
</ol>

<h2>Step 6: Plan calibration and verification</h2>
<ol>
<li>Specify an initial calibration certificate traceable to a recognized standard for sensors used in critical control.</li>
<li>Check each sensor at commissioning against a calibrated reference instrument.</li>
<li>Set a recalibration interval based on the application: annually is common for critical spaces; general comfort sensors are often checked less often.</li>
<li>Trend sensor readings and compare redundant or neighbouring sensors to catch drift.</li>
<li>Make sensors accessible for removal or field checking without shutting down the unit.</li>
</ol>
<p class="warn">RH sensors exposed to near-saturated or condensing air for long periods can drift high or fail. Use sensors rated for those conditions and verify them more often.</p>
<p>Temperature sensor selection and general placement rules for other points are in <a href="<?= url('guides/sensor-selection-and-placement') ?>">sensor selection and placement</a>. Which variable to control, RH or dew point, is discussed in <a href="<?= url('guides/dew-point-control-vs-rh-control') ?>">dew-point control vs relative humidity control</a>.</p>
<?php guide_end([
    ['How accurate should a humidity sensor be?', 'Match it to the control tolerance, allowing the sensor about a third to half of it. Offices often use plus or minus 3 to 5 percent RH, humidified labs and healthcare plus or minus 2 to 3 percent, and museums plus or minus 1 to 2 percent.'],
    ['Where should a duct humidity sensor be installed after a humidifier?', 'Beyond the humidifier absorption distance, where the moisture is fully mixed. A sensor in the steam plume reads high and makes the humidifier cut back too early.'],
    ['Where should an outdoor humidity sensor be mounted?', 'On the north side of the building or in a radiation shield, away from exhausts, condensers and hot roof surfaces, and protected from direct rain while allowing free air movement.'],
]);
