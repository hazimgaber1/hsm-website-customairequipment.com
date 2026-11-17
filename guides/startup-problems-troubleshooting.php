<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('startup-problems-troubleshooting'); ?>
<p class="lede">Most problems at an air handler's first start come from a short list: a fan turning backwards, a safety that trips because it was wired or set wrong, a sensor that reads nonsense because it is miswired or misplaced, and dampers that do not move as the sequence expects. Work symptom by symptom, check the simple causes first, and fix the root cause rather than bypassing the safety.</p>

<h2>Fan does not start</h2>
<p><strong>Symptom:</strong> Command is given but the fan does not turn, or the drive shows ready but no run.</p>
<ul>
<li><strong>Cause: safety chain open.</strong> Check: look at which input on the controller or drive enable circuit is open. Freezestats, high static limits, smoke detectors, door switches and damper end switches are usually wired in series. Fix: find the open device and correct its wiring or condition; never jumper it out to "get it running".</li>
<li><strong>Cause: damper end switch not made.</strong> Check: are outdoor or isolation dampers commanded open and do they fully stroke? Fix: adjust actuator stroke or end switch position.</li>
<li><strong>Cause: drive in local or off mode, or run permissive missing.</strong> Check: VFD keypad mode and digital input status. Fix: set to remote and verify the run command wiring.</li>
<li><strong>Cause: disconnect off or a fuse open.</strong> Check: voltage at the drive input. Fix: restore power, investigate why a fuse blew.</li>
</ul>

<h2>Fan runs but airflow is low and noise is high</h2>
<p><strong>Symptom:</strong> Fan sounds rough, airflow and static are well below expectation, amps may be oddly low.</p>
<ul>
<li><strong>Cause: wrong rotation.</strong> Check: stop the fan and watch the wheel coast against the rotation arrow. On arrays, check each fan. Fix: reverse via drive parameter or swap two motor leads with power locked out.</li>
<li><strong>Cause: speed setting low.</strong> Check: drive maximum frequency, speed command signal scaling. Fix: correct the parameter or analog scaling.</li>
<li><strong>Cause: belt slipping.</strong> Check: belt tension and squeal on start. Fix: re-tension per <a href="<?= url('guides/belt-tensioning-alignment') ?>">belt tensioning and alignment</a>.</li>
<li><strong>Cause: blocked path.</strong> Check: closed fire dampers, uninstalled diffusers, plastic left on coils or filters. Fix: clear the obstruction.</li>
</ul>
<p>Rotation and baseline checks are described step by step in <a href="<?= url('guides/fan-startup-rotation-vibration') ?>">how to start up fans</a>.</p>

<h2>Unit trips shortly after starting</h2>
<p><strong>Symptom:</strong> Fan starts, then stops within seconds or minutes.</p>
<ul>
<li><strong>Cause: freezestat tripping.</strong> Check: is the capillary installed across the coil face as drawn, or coiled in one corner where cold outdoor air stratifies? Is the setpoint correct? Fix: reinstall properly; check mixing and preheat operation.</li>
<li><strong>Cause: high static limit trips.</strong> Check: the limit's setpoint and sensing location, and whether VAV boxes or fire dampers are closed at startup. Also check the sensing tube is not kinked or connected to the wrong port. Fix: open the system, correct tubing, set the limit to the design value.</li>
<li><strong>Cause: VFD overcurrent or overvoltage fault.</strong> Check: fault code; acceleration and deceleration times; motor data entered. Fix: correct parameters, and look up the fault code in the drive manual before resetting it repeatedly.</li>
<li><strong>Cause: motor overload trips.</strong> Check: amps per phase, supply voltage balance, overload setting matched to nameplate. Fix: correct setting or supply problem.</li>
<li><strong>Cause: smoke detector trouble or alarm.</strong> Check: construction dust in the detector housing. Fix: clean or replace the head and coordinate with the fire alarm contractor.</li>
</ul>

<h2>Sensors read wrong</h2>
<p><strong>Symptom:</strong> Temperatures or pressures shown on the BAS are implausible, stuck, or swapped.</p>
<table>
<thead><tr><th>What you see</th><th>Likely cause</th><th>Check and fix</th></tr></thead>
<tbody>
<tr><td>Reading at the extreme of range</td><td>Open circuit or short; wrong input type configured</td><td>Measure at the controller terminals; set input type (thermistor curve, 4–20 mA, 0–10 V)</td></tr>
<tr><td>Mixed air reads the same as outdoor air</td><td>Sensors swapped or mixed air sensor placed near the outdoor damper</td><td>Trace wiring; use an averaging element across the mixed air plenum</td></tr>
<tr><td>Pressure reads negative when it should be positive</td><td>High and low tubing swapped</td><td>Swap tubing at the transmitter</td></tr>
<tr><td>Supply temperature jumps erratically</td><td>Sensor too close to coil or heater, or noise on unshielded cable</td><td>Relocate downstream; separate signal wiring from VFD cables</td></tr>
<tr><td>Airflow station reads zero</td><td>Tubing disconnected at a split, or transmitter range wrong</td><td>Reconnect; confirm range and K-factor</td></tr>
</tbody>
</table>
<p>Placement guidance is in <a href="<?= url('guides/sensor-selection-and-placement') ?>">sensor selection and placement</a>.</p>

<h2>Dampers misbehave</h2>
<p><strong>Symptom:</strong> Damper does not move, moves the wrong way, or does not reach full open or closed.</p>
<ul>
<li><strong>Cause: reversed action.</strong> Check: command 0 percent and see whether the damper opens or closes. Fix: change the actuator direction switch or controller output configuration so 0 percent equals the failsafe position.</li>
<li><strong>Cause: linkage slipped or loose.</strong> Check: shaft clamp marks and crank arm position. Fix: re-stroke and tighten at the correct closed position.</li>
<li><strong>Cause: actuator undersized or binding blades.</strong> Check: actuator stalls partway; blades bind from a racked frame. Fix: free the blades, square the frame.</li>
<li><strong>Cause: no power to actuator.</strong> Check: 24 V supply and transformer fusing. Fix: restore power and check loading.</li>
</ul>
<p class="warn">If both outdoor and return dampers can close at the same time with the fan running, stop and fix the interlock before continuing. The resulting pressure can damage ducts and casing.</p>

<h2>Keeping a startup issues log</h2>
<p>Write down every problem, cause and fix. Patterns, such as all sensors on one split being wrong, point to a systematic error. Condensate problems at startup follow their own path; see <a href="<?= url('guides/condensate-drainage-startup-failures') ?>">troubleshooting condensate drainage failures at startup</a>.</p>
<?php guide_end([
    ['Why won\'t my new air handler fan start?', 'The most common reason is an open safety circuit: a freezestat, high static limit, smoke detector, door switch or damper end switch. Check which input is open and fix the cause rather than jumpering it out.'],
    ['Why does my AHU trip on freezestat at startup in mild weather?', 'Often the freezestat element is installed in one corner where cold outdoor air stratifies, or the setpoint is wrong. Check that the capillary is spread across the coil face as drawn and that mixing dampers are operating.'],
    ['How do I tell if pressure sensor tubing is reversed?', 'The reading has the wrong sign or moves the wrong way when the fan speeds up. Swap the high and low tubing at the transmitter and confirm the reading now makes sense.'],
]);
