<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('hunting-control-loops-troubleshooting'); ?>
<p class="lede">A hunting loop is one whose output and controlled variable keep oscillating instead of settling. The shape and period of the oscillation usually point to the cause: overly aggressive gains, an oversized valve or damper, a sensor in the wrong place, actuator stiction, or two loops fighting each other. Diagnose with trend data before changing gains.</p>

<h2>Start with a good trend</h2>
<p>Trend the controlled variable, setpoint, loop output and, if available, actuator feedback position, at a fast interval (a few seconds for pressure loops, 10 to 30 seconds for temperature loops), for long enough to capture many cycles. Then note:</p>
<ul>
<li><strong>The period</strong> of the oscillation, from peak to peak.</li>
<li><strong>The shape</strong>: smooth and sinusoidal, or sawtooth and stepped.</li>
<li><strong>Whether it is steady, growing or dying</strong> out after a disturbance.</li>
<li><strong>When it happens</strong>: all the time, only at low load, only in certain weather, or only when another loop is active.</li>
</ul>

<h2>Symptom: smooth oscillation with a period a few times the dead time</h2>
<p><strong>Cause:</strong> gains too aggressive for the process. Proportional gain too high, integral time too short, or both.</p>
<p><strong>Check:</strong> place the loop in manual at the current output. If the variable settles, the process is stable and the controller is causing the oscillation. Compare the period with the process dead time; aggressive loops often oscillate with a period of roughly two to four times the dead time.</p>
<p><strong>Fix:</strong> reduce proportional gain and lengthen integral time. Better, perform a step test and recalculate gains as described in <a href="<?= url('guides/pid-loop-tuning-ahu') ?>">tuning PID loops on air handlers</a>.</p>

<h2>Symptom: oscillation only at low load, with the valve near closed</h2>
<p><strong>Cause:</strong> an oversized control valve, or a valve with low authority. At low load, the valve operates in its first few percent of travel, where a tiny movement changes flow greatly. Effective process gain at low load is many times higher than at design, so gains that worked in summer cause hunting in spring and fall.</p>
<p><strong>Checks:</strong></p>
<ul>
<li>Note the valve position during the oscillation. Hunting between, say, 3 and 12 percent open is the classic sign.</li>
<li>Compare the valve Cv with the coil design flow and pressure drop.</li>
<li>Check differential pressure across the valve; excessive differential pressure from an uncontrolled pump makes the problem worse.</li>
</ul>
<p><strong>Fix:</strong> replace with a correctly sized valve or a pressure-independent control valve, reduce system differential pressure, or apply gain scheduling as a stopgap. The sizing method is in <a href="<?= url('guides/control-valve-sizing-cv') ?>">sizing coil control valves by Cv and authority</a>. Oversized dampers produce the same pattern in airflow loops.</p>

<h2>Symptom: sawtooth or stepped oscillation with a long period</h2>
<p><strong>Cause:</strong> actuator or valve stiction (static friction), backlash in linkages, or a large actuator deadband. The output ramps until it overcomes friction, the device jumps, the variable overshoots, and the integral term ramps back the other way. This is called a limit cycle.</p>
<p><strong>Checks:</strong></p>
<ul>
<li>Compare the commanded output with actual position feedback. A command that changes smoothly while the position moves in steps confirms it.</li>
<li>Stroke the device manually and feel for binding or slop in the linkage.</li>
<li>Check actuator resolution and deadband settings.</li>
</ul>
<p><strong>Fix:</strong> repair or replace the valve packing, damper bearings or linkage; replace undersized actuators; reduce actuator deadband if adjustable. Retuning cannot fix stiction and often makes it worse.</p>

<h2>Symptom: oscillation with a long, irregular period, worse at low airflow</h2>
<p><strong>Cause:</strong> sensor location or transport delay. A sensor far downstream of the coil, in stratified air, or near a source of disturbance adds dead time or noise that changes with airflow. At low airflow, transport delay from coil to sensor increases.</p>
<p><strong>Checks:</strong></p>
<ul>
<li>Measure the distance and transit time from the actuator to the sensor.</li>
<li>Compare a temporary reference sensor near the coil with the control sensor.</li>
<li>Check for stratification across the duct.</li>
</ul>
<p><strong>Fix:</strong> relocate the sensor to a well-mixed location closer to the coil, use an averaging sensor, and retune for the new dynamics. Guidance is in <a href="<?= url('guides/sensor-selection-and-placement') ?>">selecting and placing sensors</a>.</p>

<h2>Symptom: two loops oscillate together</h2>
<p><strong>Cause:</strong> interacting loops. Common pairs include duct static and building pressure (supply fan and relief fan), supply temperature and duct static (SAT changes cause airflow changes), economizer and cooling coil stages overlapping, or mixed air damper and minimum outdoor air loops acting on the same dampers.</p>
<p><strong>Checks:</strong> put one loop in manual and see whether the other stops oscillating. Check the sequence for overlapping output ranges or missing deadbands.</p>
<p><strong>Fix:</strong></p>
<ul>
<li>Make one loop much slower than the other so they do not respond on the same time scale.</li>
<li>Add deadband between sequenced outputs, such as economizer fully open before cooling begins.</li>
<li>Make sure only one loop controls each actuator at a time.</li>
</ul>

<h2>Symptom: rapid, small oscillation in a pressure loop</h2>
<p><strong>Cause:</strong> signal noise from turbulence, wind or a poorly located tap, amplified by proportional gain or derivative action.</p>
<p><strong>Check:</strong> trend the raw sensor with the loop in manual. If the signal is noisy with the output constant, noise is the problem.</p>
<p><strong>Fix:</strong> filter the input, relocate the tap, remove derivative action, or reduce gain.</p>

<h2>Diagnostic summary</h2>
<table>
<thead><tr><th>Pattern</th><th>Likely cause</th><th>First test</th></tr></thead>
<tbody>
<tr><td>Smooth, steady cycling</td><td>Gains too aggressive</td><td>Manual mode; does it settle?</td></tr>
<tr><td>Hunting near closed at low load</td><td>Oversized valve or damper</td><td>Check position during cycling</td></tr>
<tr><td>Sawtooth, stepped position</td><td>Stiction, backlash</td><td>Compare command to feedback</td></tr>
<tr><td>Irregular, worse at low flow</td><td>Sensor location, transport delay</td><td>Reference sensor near coil</td></tr>
<tr><td>Two loops cycling together</td><td>Loop interaction</td><td>Put one loop in manual</td></tr>
<tr><td>Fast small jitter</td><td>Signal noise</td><td>Trend raw input in manual</td></tr>
</tbody>
</table>
<?php guide_end([
    ['Why does my control loop oscillate?', 'Common causes are gains set too aggressively, an oversized valve or damper operating near closed, a poorly located sensor, actuator stiction or two loops fighting each other. Trend the loop and look at the period and shape of the oscillation to narrow it down.'],
    ['How can I tell if a valve is oversized from trend data?', 'An oversized valve typically hunts at small openings, for example between a few percent and fifteen percent open, especially at low load. It may control well at high load.'],
    ['Can retuning fix a sticking damper?', 'No. A sticking damper or valve produces a limit cycle that retuning cannot remove and often worsens. Repair or replace the actuator, linkage or damper bearings first.'],
]);
