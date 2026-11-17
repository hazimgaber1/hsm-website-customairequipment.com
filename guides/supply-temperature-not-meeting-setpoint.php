<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('supply-temperature-not-meeting-setpoint'); ?>
<p class="lede">When supply air temperature (SAT) will not reach setpoint, the problem is in one of four places: the sensor is reading wrong, the valve is not delivering the flow the controller asks for, the coil cannot transfer the heat even with full flow, or the plant is not supplying water or refrigerant at the right temperature and pressure. Check them in that order, because each step is quicker than the next.</p>

<h2>First, define the deviation</h2>
<p>Pull trends for SAT, SAT setpoint, valve commands, mixed air temperature, outdoor air temperature, airflow or fan speed, and entering water temperature if available. Look at:</p>
<ul>
<li><strong>Direction:</strong> too warm in cooling, too cold in heating, or both at different times.</li>
<li><strong>Valve command:</strong> is the controller asking for 100 percent and still missing setpoint, or is it modulating and still missing?</li>
<li><strong>Timing:</strong> only at peak load, only at startup, all the time, or oscillating?</li>
</ul>
<p>If SAT swings above and below setpoint repeatedly while the valve hunts, the cause is loop tuning rather than capacity; see <a href="<?= url('guides/hunting-control-loops-troubleshooting') ?>">hunting control loops troubleshooting</a>. The steps below assume SAT is offset from setpoint, not oscillating around it.</p>

<h2>Sensor causes</h2>
<p><strong>Symptom:</strong> SAT reading on the BAS does not match how the space or diffusers feel, or is implausible relative to mixed air and coil leaving conditions.</p>
<table>
<thead><tr><th>Cause</th><th>Check</th><th>Fix</th></tr></thead>
<tbody>
<tr><td>Sensor out of calibration</td><td>Compare with a calibrated thermometer at the same location</td><td>Apply offset or replace sensor</td></tr>
<tr><td>Sensor too close to the fan or coil</td><td>Location relative to coil leaving face; motor heat or stratified air affecting it</td><td>Move downstream to a mixed location or use an averaging sensor</td></tr>
<tr><td>Single-point sensor in stratified air</td><td>Traverse with a thermometer shows large spread across the duct</td><td>Use an averaging element</td></tr>
<tr><td>Wrong sensor curve or input type</td><td>Reading offset by a consistent amount across the range</td><td>Correct controller input configuration</td></tr>
</tbody>
</table>
<p class="note">Remember fan heat. In a draw-through unit, the coil leaving temperature and SAT downstream of the fan differ by the fan and motor heat gain, often one to a few degrees F. Compare the right two points.</p>

<h2>Valve and actuator causes</h2>
<p><strong>Symptom:</strong> controller commands full cooling or heating, but SAT stays off setpoint and coil water temperature difference is small.</p>
<ul>
<li><strong>Actuator not moving the valve.</strong> Check: observe the valve stem position indicator at 0 and 100 percent command. Fix: repair actuator, linkage or stem coupling.</li>
<li><strong>Valve reversed.</strong> Check: does 100 percent command close the valve? Fix: correct actuator action or controller configuration.</li>
<li><strong>Valve undersized or oversized.</strong> Check: pressure drop across the valve at full flow; an undersized valve limits flow, an oversized one controls poorly. Fix: resize per <a href="<?= url('guides/control-valve-sizing-cv') ?>">control valve sizing</a>.</li>
<li><strong>Strainer blocked or balancing valve closed.</strong> Check: differential pressure across the coil versus design; strainer pressure drop. Fix: clean strainer, restore balancing valve setting.</li>
<li><strong>Air in coil.</strong> Check: gurgling, cold or hot spots across the coil face, low capacity after a refill. Fix: vent the coil at its high point.</li>
</ul>

<h2>Coil causes</h2>
<p><strong>Symptom:</strong> valve fully open, design water flow confirmed, plant at design temperature, but the coil does not deliver capacity.</p>
<ul>
<li><strong>Airside fouling.</strong> Dirty fins reduce heat transfer and airflow. Check pressure drop across the coil against design. Clean the coil.</li>
<li><strong>Waterside fouling.</strong> Scale or deposits inside tubes. Check approach temperatures; compare with design. Chemical cleaning or replacement.</li>
<li><strong>Airflow higher than design.</strong> More air through the same coil means a smaller temperature change. Check airflow against the TAB report.</li>
<li><strong>Entering air conditions beyond design.</strong> Very high mixed air temperature, often from excessive outdoor air in hot weather, can exceed coil capacity. Check minimum outdoor air and economizer high limit.</li>
<li><strong>Piping connection reversed.</strong> Parallel-flow connection instead of counterflow reduces capacity. Check supply and return connections against the coil's labels.</li>
</ul>
<p>Coil capacity problems that remain after these checks need a detailed capacity analysis; see <a href="<?= url('guides/coil-capacity-shortfall-troubleshooting') ?>">coil capacity shortfall troubleshooting</a>.</p>

<h2>Plant causes</h2>
<p><strong>Symptom:</strong> several units on the same plant all struggle at the same time, or the coil entering water temperature is off design.</p>
<table>
<thead><tr><th>Cause</th><th>Check</th><th>Fix</th></tr></thead>
<tbody>
<tr><td>Chilled water supply temperature reset too high</td><td>Plant setpoint and reset schedule</td><td>Adjust reset, or reset based on valve positions</td></tr>
<tr><td>Hot water supply temperature too low</td><td>Boiler setpoint, outdoor reset curve</td><td>Adjust reset curve</td></tr>
<tr><td>Insufficient differential pressure at the coil</td><td>Loop DP sensor location and setpoint; far-end coils starved</td><td>Raise DP setpoint or relocate sensor; balance</td></tr>
<tr><td>Pump or chiller staging lag</td><td>Plant trends during deviation</td><td>Review plant sequences</td></tr>
<tr><td>Steam pressure low or trap failure on steam coils</td><td>Steam pressure at the valve; trap discharge</td><td>Restore pressure; repair traps</td></tr>
<tr><td>DX: refrigerant charge, expansion valve, compressor staging</td><td>Superheat, subcooling, compressor status</td><td>Refrigeration service</td></tr>
</tbody>
</table>

<h2>A quick capacity check</h2>
<p>A simple energy balance tells you whether the coil is doing what the water side says it is. On the air side, sensible capacity is about 1.08 × cfm × ΔT (Btu/h) for standard air; on the water side, capacity is about 500 × gpm × ΔT for water. If a coil passes 10,000 cfm with a 10°F sensible air temperature drop, it is removing about 108,000 Btu/h sensible. If the water side shows 30 gpm with only a 4°F rise, that is 60,000 Btu/h in total, which cannot be right: one of the sensors or the flow figure is wrong. In cooling, remember the air-side total includes latent load, so use enthalpy (4.5 × cfm × Δh) for a full comparison.</p>

<h2>Other causes worth checking</h2>
<ul>
<li><strong>Simultaneous heating and cooling:</strong> a leaking heating valve during cooling raises SAT. Check heating coil leaving temperature with the valve closed.</li>
<li><strong>Face and bypass damper leakage:</strong> bypass air mixing with conditioned air.</li>
<li><strong>Energy recovery not bypassing:</strong> a wheel adding heat in economizer mode.</li>
<li><strong>Setpoint unrealistic:</strong> an SAT reset driven too low by one rogue zone.</li>
</ul>
<?php guide_end([
    ['Why is my air handler supply temperature too warm with the cooling valve open?', 'Check in order: the SAT sensor reading, whether the valve actually opens, whether design water flow reaches the coil, whether the coil is fouled or seeing too much airflow, and whether the chilled water plant is supplying design temperature and pressure.'],
    ['Can fan heat affect supply air temperature readings?', 'Yes. In a draw-through unit, air picks up fan and motor heat after leaving the coil, often one to a few degrees F. Compare coil leaving and supply sensors with that gain in mind.'],
    ['How do I tell if the problem is the coil or the plant?', 'If several units on the same plant struggle at the same time, or entering water temperature or differential pressure is off design, suspect the plant. If only one unit struggles with design water conditions at the coil, suspect that coil, valve or airflow.'],
]);
