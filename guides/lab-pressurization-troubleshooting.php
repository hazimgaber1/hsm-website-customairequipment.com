<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('lab-pressurization-troubleshooting'); ?>
<p class="lede">When a lab loses its negative pressure, the cause is almost always that supply is no longer smaller than exhaust by the intended offset. Find out which side moved: the hood and general exhaust, the supply valve, or the air the corridor can provide. Measure airflows first; pressure readings alone rarely identify the culprit.</p>

<h2>Measure before you adjust</h2>
<p>Lab pressure problems tempt people to change the offset or the pressure setpoint. Resist that until you know why the balance shifted. Collect:</p>
<ul>
<li>Measured supply, hood exhaust and general exhaust airflow for the room, from the valve controllers and from an independent check such as a flow hood or traverse</li>
<li>Commanded versus actual position or flow for each valve</li>
<li>Room differential pressure trend, and door status if available</li>
<li>Main supply and exhaust duct static pressure at the floor branch</li>
<li>Exhaust fan and supply fan status, including changeovers</li>
</ul>
<p>Then compare: supply plus transfer air should equal total exhaust. If the room is positive or neutral, supply is too high, exhaust is too low, or the offset air has no path in.</p>
<p class="note">A smoke stick at the door undercut is the quickest independent check of direction. Use it before trusting any pressure sensor.</p>

<h2>Room goes positive when hood sashes close</h2>
<ul>
<li><strong>Cause:</strong> the hood exhaust valve responds faster than the supply valve, so for a few seconds exhaust drops while supply is still high. Or the supply valve reaches its minimum stop above the new required supply.</li>
<li><strong>Check:</strong> trend both valves at one-second resolution during a sash closure. Compare the supply valve minimum flow setting with the room's minimum supply requirement.</li>
<li><strong>Fix:</strong> speed up supply valve response or slow hood response within safe limits; lower the supply valve minimum if the valve can control accurately there; if not, resize the valve. The full makeup air arrangement is laid out in <a href="<?= url('guides/fume-hood-makeup-air') ?>">how to supply makeup air for fume hood exhaust</a>.</li>
</ul>

<h2>Room is positive all the time</h2>
<ul>
<li><strong>Cause:</strong> general exhaust valve failed closed, hood exhaust flow sensor fouled or out of calibration, a sash sensor reporting the sash open when it is closed (raising supply), or a balancer set the offset in the wrong direction.</li>
<li><strong>Check:</strong> independently measure each exhaust point and the supply. Compare to the controller values. Look at the offset parameter in the controller.</li>
<li><strong>Fix:</strong> repair actuator or valve; clean or recalibrate the flow sensor; replace the sash sensor; correct the offset parameter and lock it.</li>
</ul>

<h2>Room pressure collapses when another lab's hoods open</h2>
<ul>
<li><strong>Cause:</strong> the exhaust main's static pressure drops below what the room exhaust valves need to deliver their flow, because the exhaust fans cannot keep up with the diversified demand. Or the supply main pressure rises, pushing supply valves past their setpoints.</li>
<li><strong>Check:</strong> trend main duct static at the floor during the event. Check each valve's minimum pressure requirement from its data sheet.</li>
<li><strong>Fix:</strong> raise the exhaust system static setpoint if fans have capacity; correct fan control; add exhaust capacity if the system was sized on unrealistic diversity. Supply valves with pressure-independent mechanisms tolerate main pressure swings better.</li>
</ul>

<h2>Room positive during exhaust fan changeover or power transfer</h2>
<ul>
<li><strong>Cause:</strong> exhaust fan stops before standby reaches speed, while supply continues.</li>
<li><strong>Check:</strong> trend fan status, exhaust static and room pressure during a planned changeover test.</li>
<li><strong>Fix:</strong> keep the standby fan spinning, shorten changeover, or interlock supply fans to slow briefly during exhaust transitions. On emergency power transfer, make sure exhaust restarts before or with supply.</li>
</ul>

<h2>Doors whistle or are hard to open</h2>
<ul>
<li><strong>Cause:</strong> the offset is too large for the available door gaps, or the corridor is starved because many labs pull transfer air from it.</li>
<li><strong>Check:</strong> measure door differential. Add up the offsets of all labs on the corridor and compare with the corridor's net supply.</li>
<li><strong>Fix:</strong> reduce offsets to the value the safety standard requires; add corridor supply; add transfer grilles where permitted.</li>
</ul>

<h2>Pressure readings swing but airflows are steady</h2>
<ul>
<li><strong>Cause:</strong> stack effect or wind changing the reference pressure, a sensor reference tube in the wrong place, or a pressure-based control loop tuned too aggressively.</li>
<li><strong>Check:</strong> where is the sensor's reference port, and is it subject to drafts? Do swings follow outdoor temperature or wind?</li>
<li><strong>Fix:</strong> relocate the reference; use volumetric offset control with pressure monitoring rather than direct pressure control; slow the pressure loop.</li>
</ul>

<h2>Summary table</h2>
<table>
<thead><tr><th>Symptom</th><th>Most likely cause</th><th>First check</th></tr></thead>
<tbody>
<tr><td>Positive briefly on sash closure</td><td>Supply valve response or minimum stop</td><td>One-second trend of both valves</td></tr>
<tr><td>Positive constantly</td><td>Failed exhaust valve or wrong offset</td><td>Independent airflow measurement</td></tr>
<tr><td>Positive when others use hoods</td><td>Exhaust main static too low</td><td>Main duct static trend</td></tr>
<tr><td>Positive on fan changeover</td><td>Exhaust gap during transfer</td><td>Changeover test trend</td></tr>
<tr><td>Whistling doors</td><td>Excessive offset or starved corridor</td><td>Corridor airflow balance</td></tr>
<tr><td>Pressure hunting</td><td>Reference location or loop tuning</td><td>Sensor installation</td></tr>
</tbody>
</table>
<p class="warn">Report every pressure reversal in a lab with hazardous materials to the owner's EHS group. Under ANSI/ASSP Z9.5 the ventilation system is part of a managed safety program; background is in <a href="<?= url('guides/lab-ventilation-ansi-z9-5') ?>">laboratory ventilation under Z9.5</a>.</p>
<p>Hospital isolation rooms show similar symptoms but have different requirements and causes; those are covered in <a href="<?= url('guides/room-pressure-loss-troubleshooting') ?>">troubleshooting room pressure loss in healthcare</a>.</p>
<?php guide_end([
    ['Why does my lab go positive when the fume hood sash is closed?', 'Usually because the hood exhaust valve reduces flow faster than the supply valve, or because the supply valve hits its minimum stop above the required supply. Trend both valves during a sash closure to confirm.'],
    ['Should lab pressure be controlled by a pressure sensor?', 'Most labs control a fixed airflow offset and use pressure sensors only for monitoring and alarms. Direct pressure control can become unstable with door openings and wind or stack effects.'],
    ['How do I verify a lab is negative without trusting the sensor?', 'Hold a smoke stick at the door undercut or a slightly open door. The smoke should move steadily into the lab. Confirm with independent airflow measurements of supply and exhaust.'],
]);
