<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('damper-failure-troubleshooting'); ?>
<p class="lede">When an air handler damper sticks, leaks or does not reach its commanded position, separate the three mechanical layers: the actuator, the linkage that connects it to the blades, and the blades, bearings and seals themselves. Disconnect the actuator and move the damper by hand first; that single test tells you which layer has failed.</p>

<h2>The first test: decouple and move by hand</h2>
<p>With the fan off and locked out, and the damper's actuator unpowered or in manual mode, loosen the actuator clamp or disconnect the linkage. Then move the damper shaft by hand through its full stroke.</p>
<ul>
<li><strong>Damper moves freely and seals closed:</strong> the blades are fine. The problem is in the actuator, its control signal, or the linkage setup.</li>
<li><strong>Damper is stiff, binds partway, or does not close fully:</strong> the problem is in the blades, bearings, frame or seals. Fix this before touching the actuator.</li>
</ul>
<p>Control logic faults, such as an economizer that never opens because of a lockout or a wrong changeover setpoint, are outside the scope of this guide; see <a href="<?= url('guides/economizer-faults-troubleshooting') ?>">economizer faults troubleshooting</a>. This page assumes the controller is commanding the right position and the damper is not following.</p>

<h2>Actuator problems</h2>
<p><strong>Symptom:</strong> damper does not move, or moves only partway, although it moves freely by hand.</p>
<table>
<thead><tr><th>Cause</th><th>Check</th><th>Fix</th></tr></thead>
<tbody>
<tr><td>No power</td><td>Measure supply voltage at the actuator terminals; check transformer fuse or breaker</td><td>Restore power; check transformer is not overloaded by too many actuators</td></tr>
<tr><td>No or wrong control signal</td><td>Measure 0–10 V or 2–10 V or 4–20 mA at actuator while commanding positions</td><td>Correct controller output, wiring or signal range setting</td></tr>
<tr><td>Actuator reversed</td><td>Command 0 percent and watch: does it open?</td><td>Change direction switch or controller configuration</td></tr>
<tr><td>Actuator failed</td><td>Signal and power correct but no motion, or motion with grinding</td><td>Replace with an equivalent torque and signal type</td></tr>
<tr><td>Actuator undersized</td><td>Stalls before end of stroke on a damper that moves freely by hand but with noticeable force</td><td>Replace with higher torque, or add an actuator; see <a href="<?= url('guides/damper-actuator-sizing') ?>">damper actuator sizing</a></td></tr>
<tr><td>Spring return failed</td><td>Damper does not return to failsafe on power loss</td><td>Replace actuator</td></tr>
</tbody>
</table>
<p class="note">Many electronic actuators can be put in manual override with a button or crank. Use it to confirm the actuator itself can drive through full stroke before swapping parts.</p>

<h2>Linkage problems</h2>
<p><strong>Symptom:</strong> actuator moves through its full stroke but the damper does not follow fully, or position drifts over time.</p>
<ul>
<li><strong>Cause: shaft clamp slipped on the jackshaft.</strong> Check: witness marks on the shaft, or the actuator reaching its end before the blades. Fix: set the damper fully closed by hand, set the actuator to its closed position, tighten the clamp to the specified torque, and mark the shaft.</li>
<li><strong>Cause: crank arm or ball joint loose or worn.</strong> Check: lost motion when the actuator reverses direction. Fix: tighten or replace worn ball joints, crank arms and pushrods.</li>
<li><strong>Cause: blade-to-blade linkage disconnected.</strong> Check: on multi-blade dampers, one or more blades not moving with the others. Fix: reconnect or replace the linkage bar and its pins.</li>
<li><strong>Cause: jackshaft coupling slipping between damper sections.</strong> Check: large dampers made of several sections driven by one actuator, with one section lagging. Fix: tighten couplings, and consider separate actuators per section for very large dampers.</li>
<li><strong>Cause: linkage geometry wrong.</strong> Check: crank arms at extreme angles cause non-linear motion and lost torque. Fix: reset the geometry to the damper manufacturer's arrangement.</li>
</ul>

<h2>Blade, bearing and frame problems</h2>
<p><strong>Symptom:</strong> damper is stiff or binds when moved by hand.</p>
<ul>
<li><strong>Cause: seized bearings.</strong> Check: one shaft much harder to turn than others. Corrosion, dirt or ice locks plain bearings. Fix: clean and free bearings; replace them with corrosion-resistant bearings if seizing recurs.</li>
<li><strong>Cause: racked frame.</strong> Check: frame diagonals unequal, blades rubbing the frame at one end. Typical after unit movement, uneven support or over-tightened mounting. Fix: loosen mounting, square the frame, re-tighten.</li>
<li><strong>Cause: bent or twisted blades.</strong> Check: blades that do not line up when closed. Fix: straighten or replace blades.</li>
<li><strong>Cause: ice in outdoor air dampers.</strong> Check: binding only in freezing weather, frost visible on blades. Fix: improve intake rain and snow protection; add a heated or insulated damper where needed.</li>
<li><strong>Cause: debris.</strong> Check: leaves, nests, construction debris between blades. Fix: remove; add screens.</li>
</ul>

<h2>Leakage and seal problems</h2>
<p><strong>Symptom:</strong> damper reaches its closed position but air still passes; mixed air temperature changes when it should not; outdoor air leaks in through a closed damper during unoccupied hours.</p>
<ul>
<li><strong>Cause: blade edge seals missing, torn or hardened.</strong> Check: inspect with the damper closed and a flashlight from the other side. Fix: replace seals with the damper manufacturer's parts.</li>
<li><strong>Cause: jamb seals damaged.</strong> Check: light at the frame sides. Fix: replace jamb seals.</li>
<li><strong>Cause: blades not closing fully due to linkage setup.</strong> Check: blades visibly open a few degrees at actuator closed position. Fix: re-set clamp with blades fully closed.</li>
<li><strong>Cause: damper leakage class inadequate for the application.</strong> Check: compare the installed damper's rating with requirements. Fix: replace with a low-leakage damper rated under AMCA 500-D.</li>
</ul>
<p class="warn">Leaking outdoor air dampers are a common contributor to coil freezing in cold climates. Treat a leaking outdoor or isolation damper as urgent when winter is approaching.</p>

<h2>After the repair</h2>
<ol>
<li>Re-stroke the damper through its full range from the controller and confirm position matches command at 0, 50 and 100 percent.</li>
<li>Test the failsafe by removing power to spring-return actuators.</li>
<li>Check end switches, if fitted, make at the right positions.</li>
<li>Record the repair and add a damper inspection to the maintenance schedule.</li>
</ol>
<?php guide_end([
    ['Why won\'t my AHU damper close all the way?', 'Common causes are a slipped shaft clamp or worn linkage, an actuator that stalls before the end of stroke, a racked frame or seized bearings. Disconnect the actuator and move the damper by hand to see whether the problem is the damper or the drive.'],
    ['How do I reset a damper actuator on its shaft?', 'With power off, move the damper blades to the fully closed position by hand, put the actuator at its closed end of travel, then tighten the shaft clamp to the specified torque and mark the shaft so slipping is visible later.'],
    ['What causes damper leakage when the damper is closed?', 'Missing, torn or hardened blade and jamb seals, blades not fully closed because of linkage setup, a racked frame, or a damper with a leakage class that was never suitable for the application.'],
]);
