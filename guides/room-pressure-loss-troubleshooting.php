<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('room-pressure-loss-troubleshooting'); ?>
<p class="lede">When a hospital room loses its pressure relationship, first confirm the reading is real, then check the door, then compare actual supply and exhaust airflows with design, and finally look at the room envelope and adjacent spaces. Most losses trace to one of four things: an open or modified door, an airflow device not delivering its setpoint, a fan problem upstream, or a new leak in the room.</p>

<h2>Step zero: confirm the alarm</h2>
<p><strong>Check:</strong> Compare the monitor reading with a calibrated handheld micromanometer across the door, and do a smoke test at the door gap. A drifting transducer, kinked tube or blocked thermal sensor port can read zero or reversed while the room is actually fine.</p>
<p><strong>Fix:</strong> If the room is fine, recalibrate or repair the monitor and document it. If the room has really lost pressure, continue. Monitor selection and placement are covered in <a href="<?= url('guides/room-pressure-monitoring') ?>">how to monitor healthcare room pressure relationships</a>.</p>

<h2>Door and occupancy causes</h2>
<h3>Symptom: pressure lost intermittently, recovers on its own</h3>
<p><strong>Cause:</strong> Door being held open or opened frequently; alarm delay too short.</p>
<p><strong>Check:</strong> Trend door switch status against pressure. Observe staff traffic.</p>
<p><strong>Fix:</strong> Adjust alarm delay with infection prevention; repair door closers; train staff. For high-traffic rooms, consider an anteroom.</p>
<h3>Symptom: pressure lost after door hardware or door replacement</h3>
<p><strong>Cause:</strong> New door with a larger undercut, missing gaskets or a louver.</p>
<p><strong>Check:</strong> Measure door gaps.</p>
<p><strong>Fix:</strong> Restore the original undercut and seals, or recalculate the offset for the new leakage area.</p>
<h3>Symptom: AIIR pressure reverses when the toilet door is opened</h3>
<p><strong>Cause:</strong> Toilet exhaust too low, or the toilet is balanced against the patient room rather than the corridor.</p>
<p><strong>Fix:</strong> Rebalance so the toilet is negative to the patient room and the patient room remains negative to the corridor with the toilet door open or closed.</p>

<h2>Airflow causes</h2>
<h3>Symptom: offset below design, valves at setpoint on the BAS</h3>
<p><strong>Cause:</strong> Airflow valve calibration drift; the controller thinks it is delivering setpoint but actual flow differs.</p>
<p><strong>Check:</strong> Measure supply and exhaust with a capture hood or duct traverse and compare to the BAS values.</p>
<p><strong>Fix:</strong> Recalibrate the airflow sensors or valves.</p>
<h3>Symptom: valves fully open, flow below setpoint</h3>
<p><strong>Cause:</strong> Insufficient duct static pressure upstream, often from loaded filters at the AHU (supply side) or at a HEPA terminal, a static pressure reset that went too low, or a failed fan in an array.</p>
<p><strong>Check:</strong> Duct static at the valve inlet; AHU filter pressure drop; fan status and speed.</p>
<p><strong>Fix:</strong> Replace filters, adjust static pressure reset logic to protect critical zones, repair the fan.</p>
<h3>Symptom: negative room becomes positive</h3>
<p><strong>Cause:</strong> Exhaust fan failure, belt failure, or exhaust duct damper closed. Supply continues, so the room goes positive.</p>
<p><strong>Check:</strong> Exhaust fan status, current, rotation, and exhaust valve airflow.</p>
<p><strong>Fix:</strong> Restore exhaust fan; consider an interlock that reduces supply on exhaust failure; add redundancy where the room function demands it.</p>
<h3>Symptom: positive room becomes negative</h3>
<p><strong>Cause:</strong> Supply reduced by a failed terminal, closed fire/smoke damper, or a stuck reheat valve causing the terminal to limit flow; or return valve opened beyond setpoint.</p>
<p><strong>Check:</strong> Supply terminal status, damper positions, return valve position.</p>
<p><strong>Fix:</strong> Repair the device; reset the damper; recalibrate.</p>

<h2>Envelope and adjacent space causes</h2>
<h3>Symptom: offset correct, differential still low</h3>
<p><strong>Cause:</strong> The room has become leakier: ceiling tiles removed or not clipped, new penetrations from IT or medical gas work, gaps at walls after renovation.</p>
<p><strong>Check:</strong> Inspect the ceiling and walls; use smoke to locate leaks at penetrations and ceiling joints.</p>
<p><strong>Fix:</strong> Reseal. Leakage area drives the required offset, explained in <a href="<?= url('guides/room-pressurization-offset-calculation') ?>">calculating room pressurization airflow offset</a>.</p>
<h3>Symptom: pressure changes when adjacent corridor or unit changes mode</h3>
<p><strong>Cause:</strong> The reference space pressure moved. A corridor whose AHU sets back, or a building that goes negative in winter from stack effect, changes the room-to-corridor differential even if the room is unchanged.</p>
<p><strong>Check:</strong> Measure corridor pressure relative to outdoors and to adjacent zones; trend against room pressure.</p>
<p><strong>Fix:</strong> Correct building or zone pressurization; avoid setback of corridors serving isolation rooms. Building-level control is covered in <a href="<?= url('guides/building-pressurization-control') ?>">building pressurization control</a>.</p>
<h3>Symptom: pressure lost in windy weather</h3>
<p><strong>Cause:</strong> Exterior wall leakage on a room with an outside wall, combined with wind pressure.</p>
<p><strong>Fix:</strong> Seal windows and exterior wall penetrations; increase offset if needed.</p>

<h2>Control and mode causes</h2>
<table>
<thead><tr><th>Symptom</th><th>Cause</th><th>Fix</th></tr></thead>
<tbody>
<tr><td>Room in wrong mode (normal instead of isolation)</td><td>Mode switched by mistake or after cleaning</td><td>Restrict mode switching; show mode clearly; audit</td></tr>
<tr><td>Pressure lost after BAS update</td><td>Setpoints or offsets overwritten</td><td>Restore from documented setpoints; protect critical values</td></tr>
<tr><td>Pressure lost when OR enters setback</td><td>Return not tracking supply at low flow; valve below its controllable range</td><td>Correct tracking logic; check valve turndown</td></tr>
<tr><td>Pressure oscillates</td><td>Supply and exhaust loops both reacting to pressure</td><td>Use flow tracking with fixed offset, pressure as a monitor or slow trim only</td></tr>
<tr><td>Pressure lost after power transfer</td><td>Fans or valves not restarting in sequence</td><td>Correct restart logic; test during generator runs</td></tr>
</tbody>
</table>
<p class="warn">While pressure is lost in an isolation or PE room, follow the facility's infection prevention procedures for the patient. Troubleshooting should not delay protective measures.</p>
<?php guide_end([
    ['What is the most common cause of lost room pressure in hospitals?', 'Door issues are among the most frequent, followed by airflow devices not delivering their setpoints, fan or filter problems upstream and new leaks in the room envelope.'],
    ['Why would a negative isolation room become positive?', 'Usually because the exhaust has failed while supply continues, for example from an exhaust fan or belt failure or a closed exhaust damper.'],
    ['Can stack effect affect hospital room pressure?', 'Yes. Stack effect and wind change the pressure of corridors and adjacent spaces, which changes the room-to-corridor differential even if the room\'s airflows have not changed.'],
    ['Should room pressure be controlled directly from the pressure sensor?', 'Most designs use airflow tracking with a fixed offset as the primary control and the pressure sensor as a monitor or slow trim. Controlling both supply and exhaust directly on pressure tends to cause oscillation.'],
]);
