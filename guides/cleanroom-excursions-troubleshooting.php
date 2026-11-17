<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('cleanroom-excursions-troubleshooting'); ?>
<p class="lede">Most cleanroom temperature and humidity excursions trace back to one of four things: the cooling coil cannot reach the required dew point, reheat is not doing what the sequence thinks it is, a sensor is wrong, or two control loops are fighting. Work from the trend data to the equipment, not the other way around.</p>

<h2>Gather the evidence first</h2>
<p>Before touching a setpoint, pull trends for at least a few days on either side of the excursion. You need:</p>
<ul>
<li>Room temperature and RH (or dew point) for the affected room and its neighbors</li>
<li>AHU leaving coil temperature, supply temperature and supply dew point</li>
<li>Chilled water supply and return temperatures and the cooling valve command</li>
<li>Reheat valve commands for the affected terminals</li>
<li>Outdoor temperature and dew point</li>
<li>Humidifier or desiccant unit status and output</li>
<li>Door access logs or production schedule, if available</li>
</ul>
<p>Look at whether one room or many rooms were affected, and whether the excursion lines up with weather, time of day, production events or maintenance. That pattern usually points to the right section below.</p>
<p class="note">Before investigating the HVAC, confirm the excursion was real. Compare the monitoring system sensor against a calibrated reference at the same location. A sensor that has drifted 3% RH can create an excursion record with nothing wrong in the room.</p>

<h2>Humidity too high</h2>
<h3>Symptom: RH rises on humid days across all rooms served by one unit</h3>
<ul>
<li><strong>Cause:</strong> the cooling coil is not reaching the leaving dew point needed.</li>
<li><strong>Check:</strong> compare the coil leaving air temperature with the required apparatus dew point. Check chilled water supply temperature at the coil, valve position (fully open?) and water flow. Inspect the coil for fouled fins and look for air bypassing the coil around its frame.</li>
<li><strong>Fix:</strong> restore chilled water temperature or flow; clean the coil; seal bypass gaps. If the coil was never selected for the actual outdoor dew point, the long-term fix is added capacity or a desiccant stage.</li>
</ul>
<h3>Symptom: RH rises in shoulder seasons when it is mild but humid</h3>
<ul>
<li><strong>Cause:</strong> control logic lets the coil float up on temperature because the sensible load is low, so dehumidification stops.</li>
<li><strong>Check:</strong> is the cooling valve controlled on leaving air temperature or on supply temperature after reheat? Is there a dew point override?</li>
<li><strong>Fix:</strong> control the coil on leaving dew point (or a reset that never lets it exceed the dew point target) and use reheat for temperature. The control approach is compared in <a href="<?= url('guides/dew-point-control-vs-rh-control') ?>">dew point control vs RH control</a>.</li>
</ul>
<h3>Symptom: RH spikes in one room during production</h3>
<ul>
<li><strong>Cause:</strong> a process moisture source such as wash-down, open water baths or a process with steam, or more people than designed.</li>
<li><strong>Check:</strong> correlate with production records; compare room dew point with supply dew point. If supply is dry and the room is wet, the source is inside.</li>
<li><strong>Fix:</strong> local exhaust at the source, lower supply dew point for that room, or procedural changes.</li>
</ul>

<h2>Humidity too low</h2>
<h3>Symptom: RH falls below limit on cold days</h3>
<ul>
<li><strong>Cause:</strong> humidifier capacity, water supply or control problem; outdoor air fraction higher than designed.</li>
<li><strong>Check:</strong> humidifier output and alarms, water treatment system, steam pressure for steam injection. Confirm outdoor airflow is not above design because of a damper fault or an exhaust increase.</li>
<li><strong>Fix:</strong> repair the humidifier or supply; restore outdoor airflow to design. Confirm the high-limit humidistat in the duct is not cutting out the humidifier because its setting is too low.</li>
</ul>

<h2>Temperature excursions</h2>
<h3>Symptom: room too warm, reheat valve shows closed</h3>
<ul>
<li><strong>Cause:</strong> reheat valve leaking through, or supply air not cold enough for the room load.</li>
<li><strong>Check:</strong> measure air temperature upstream and downstream of the reheat coil with the valve commanded closed. A rise of more than a degree or two indicates a passing valve.</li>
<li><strong>Fix:</strong> repair or replace the valve; check actuator stroke and close-off rating against the differential pressure in the hot water system.</li>
</ul>
<h3>Symptom: room too warm after new equipment was installed</h3>
<ul>
<li><strong>Cause:</strong> added sensible load exceeds what the room supply airflow can absorb at the design supply temperature.</li>
<li><strong>Check:</strong> calculate the airflow needed with cfm = Btu/h ÷ (1.08 × ΔT) and compare with measured supply.</li>
<li><strong>Fix:</strong> increase room supply if the terminal and filters allow; lower supply temperature with care for drafts; or remove equipment heat locally.</li>
</ul>
<h3>Symptom: temperature oscillates around setpoint</h3>
<ul>
<li><strong>Cause:</strong> loop tuning, oversized valves, or reheat and cooling loops fighting.</li>
<li><strong>Check:</strong> look at the period of oscillation and which outputs move with it. If cooling and reheat both modulate in phase, the loops interact.</li>
<li><strong>Fix:</strong> retune, add deadband between cooling and heating, and slow the outer loop relative to the inner. General methods are in <a href="<?= url('guides/hunting-control-loops-troubleshooting') ?>">troubleshooting hunting control loops</a>.</li>
</ul>

<h2>Quick reference</h2>
<table>
<thead><tr><th>Pattern</th><th>Most likely area</th></tr></thead>
<tbody>
<tr><td>All rooms on one AHU, follows weather</td><td>Coil capacity, chilled water, humidifier, outdoor air fraction</td></tr>
<tr><td>One room, follows production</td><td>Internal load or moisture source</td></tr>
<tr><td>One room, no clear pattern</td><td>Terminal valve, reheat coil, room sensor</td></tr>
<tr><td>Excursion at night or weekends</td><td>Setback schedule, plant staging, chilled water reset</td></tr>
<tr><td>Excursion after maintenance</td><td>Valve left in manual, sensor not reconnected, setpoint changed</td></tr>
</tbody>
</table>

<h2>Close the loop</h2>
<p>In a GMP facility an excursion is a deviation. Record the root cause, the fix and the evidence that the fix worked, and decide through change control whether any setpoint or hardware change needs requalification. Sensor placement and calibration practices that prevent false readings are discussed in <a href="<?= url('guides/humidity-sensor-selection-placement') ?>">humidity sensor selection and placement</a>. If the excursion came with a rise in particle counts, the airflow side of the problem is covered in <a href="<?= url('guides/cleanroom-particle-count-failures') ?>">troubleshooting cleanroom particle count failures</a>.</p>
<?php guide_end([
    ['Why does cleanroom humidity rise in spring and fall?', 'In mild, humid weather the sensible load is low, and a cooling coil controlled on temperature lets its leaving temperature float up, which stops dehumidification. Controlling the coil on dew point and using reheat for temperature usually fixes it.'],
    ['How do I know if a reheat valve is leaking?', 'Command the valve closed and measure air temperature on both sides of the reheat coil. A rise of more than a degree or two, or a warm return pipe, indicates the valve is passing water.'],
    ['What should I check first after a humidity excursion?', 'Confirm the reading against a calibrated reference, then compare trends for the room, the AHU leaving dew point, outdoor conditions and production events. Whether one room or many were affected points to the cause.'],
]);
