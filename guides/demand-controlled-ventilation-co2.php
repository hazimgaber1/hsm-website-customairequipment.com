<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('demand-controlled-ventilation-co2'); ?>
<p class="lede">CO2-based demand-controlled ventilation (DCV) reduces outdoor air when spaces are partly occupied by using CO2 concentration as a proxy for the number of people. Implement it by placing sensors in the breathing zone of each densely occupied space, choosing a CO2 setpoint that corresponds to the design per-person ventilation rate, and resetting the zone or system outdoor air between an area-based minimum and the design rate.</p>

<h2>Step 1: Choose the spaces</h2>
<ol>
<li>Identify spaces with high and variable occupant density: classrooms, auditoriums, meeting rooms, gyms, cafeterias, worship spaces. Energy codes require DCV for some of these above certain sizes and densities; check the edition adopted in your jurisdiction.</li>
<li>Exclude spaces where CO2 does not track the ventilation need: labs and kitchens with process contaminants, spaces with combustion sources, spaces whose ventilation is driven by exhaust makeup.</li>
<li>Confirm that the ventilation rate for each space has a people component and an area component; DCV adjusts only the people component. The ventilation rate calculation itself is covered in <a href="<?= url('guides/ashrae-62-1-ventilation-rate-procedure') ?>">the ASHRAE 62.1 ventilation rate procedure</a>.</li>
</ol>

<h2>Step 2: Place the sensors</h2>
<ol>
<li>Mount wall sensors in the breathing zone, roughly 3 to 6 ft (0.9 to 1.8 m) above the floor.</li>
<li>Keep sensors away from supply diffusers, doors, windows, and places where people stand close and breathe on them.</li>
<li>Provide one sensor per space for large or densely occupied rooms. Very large spaces may need several sensors, averaged or using the highest reading.</li>
<li>Avoid return duct sensors for multi-zone systems: return air mixes many spaces and dilutes the signal from the space that actually needs air. A duct sensor can be acceptable for a single-zone unit serving one large space.</li>
<li>Specify sensors with accuracy suitable for control, commonly in the range of ±50 ppm or a few percent of reading, and with long-term stability guarantees.</li>
</ol>
<p class="note">Many CO2 sensors use automatic baseline correction that assumes the space reaches outdoor levels at some point each day or week. That is fine in spaces left unoccupied overnight, but not in spaces occupied around the clock; use dual-channel or manually calibrated sensors there.</p>

<h2>Step 3: Choose the CO2 setpoint</h2>
<p>At steady state, the indoor-outdoor CO2 difference relates to outdoor airflow per person:</p>
<p class="formula">Cin − Cout (ppm) ≈ N ÷ (Vo/p) × 1,000,000</p>
<p>where N is CO2 generation per person in cfm and Vo/p is outdoor airflow per person in cfm. For sedentary adults, N is often taken as roughly 0.0084 to 0.0105 cfm per person depending on activity level and body size. Using 0.0094 cfm and a design rate of 15 cfm per person:</p>
<p class="formula">ΔC ≈ 0.0094 ÷ 15 × 1,000,000 ≈ 630 ppm</p>
<p>With outdoor CO2 around 420 ppm, the indoor setpoint would be about 1,050 ppm. Higher activity (gyms) or children (classrooms) changes N, and lower per-person rates raise the difference. Remember that steady state takes time to reach; in short meetings, CO2 lags occupancy.</p>
<p>Measuring outdoor CO2 adds another sensor and its error; many sequences instead assume a fixed outdoor value, which is acceptable where outdoor concentration is stable.</p>

<h2>Step 4: Program the reset</h2>
<p><strong>Single-zone units</strong> (one space per AHU):</p>
<ol>
<li>Calculate the minimum outdoor air (area component only, plus any required minimum) and the design outdoor air (area plus people at design occupancy).</li>
<li>Reset the outdoor air setpoint proportionally between those values as CO2 rises from a lower threshold (for example, setpoint minus 200 to 400 ppm) to the setpoint.</li>
<li>Control the outdoor air damper to that setpoint with measured airflow or a calibrated position schedule at that unit's airflow.</li>
</ol>
<p><strong>Multi-zone VAV units:</strong></p>
<ol>
<li>At each DCV zone, reset the zone's minimum airflow and ventilation requirement based on its CO2 reading, between area-only and design values.</li>
<li>Send the zone outdoor air requirements to the AHU, where the system outdoor air setpoint is recalculated.</li>
<li>Control system outdoor air with one of the methods in <a href="<?= url('guides/minimum-outdoor-air-control-vav') ?>">maintaining minimum outdoor air in VAV systems</a>.</li>
</ol>
<p><strong>Example single-zone reset:</strong> a gym needs 900 cfm area-based minimum and 4,500 cfm at design occupancy. The CO2 setpoint is 1,100 ppm, with reset starting at 800 ppm. At 950 ppm, halfway through the range, the outdoor air setpoint is 900 + 0.5 × 3,600 = 2,700 cfm.</p>

<h2>Step 5: Add safeguards</h2>
<ul>
<li><strong>Sensor failure:</strong> if a sensor reads out of range or fails, set the zone to design ventilation and alarm.</li>
<li><strong>Pre-occupancy purge:</strong> ventilate at design or area rate before occupancy starts so the space begins clean.</li>
<li><strong>Occupancy sensors:</strong> combine with CO2 so unoccupied zones drop to their unoccupied rate without waiting for CO2 to decay.</li>
<li><strong>Minimum floor:</strong> never reduce below the area-based minimum during occupied mode.</li>
<li><strong>Economizer:</strong> DCV sets the minimum only; the economizer may bring in more.</li>
</ul>

<h2>Step 6: Commission and maintain</h2>
<ol>
<li>Verify each sensor against a calibrated reference at installation.</li>
<li>Trend CO2, outdoor airflow setpoint and actual outdoor airflow during a typical occupied period.</li>
<li>Check that outdoor air rises promptly when a space fills and falls when it empties.</li>
<li>Recheck sensor calibration on a schedule set by the manufacturer's stability rating, and replace sensors that drift.</li>
</ol>
<p>Ongoing fault detection for sensors and dampers is discussed in <a href="<?= url('guides/fault-detection-diagnostics-afdd') ?>">automated fault detection and diagnostics</a>.</p>
<?php guide_end([
    ['Where should CO2 sensors be mounted for DCV?', 'In the breathing zone of each controlled space, roughly 3 to 6 feet above the floor, away from diffusers, doors, windows and places where people stand close to the sensor. Return duct sensors are suitable only for single-zone systems.'],
    ['What CO2 setpoint should be used for demand-controlled ventilation?', 'It should correspond to the design outdoor air rate per person. For about 15 cfm per person and typical adult activity, the indoor-outdoor difference is around 600 to 700 ppm, giving a setpoint near 1,000 to 1,100 ppm with typical outdoor levels.'],
    ['Do CO2 sensors need calibration?', 'Yes. Automatic baseline correction works for spaces that are unoccupied regularly, but sensors should still be checked against a reference periodically. Spaces occupied continuously need sensors that do not rely on automatic baseline correction.'],
]);
