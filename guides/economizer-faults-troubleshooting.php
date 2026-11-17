<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('economizer-faults-troubleshooting'); ?>
<p class="lede">Most economizer problems fall into three groups: dampers that do not move as commanded, sensors that report the wrong temperature or humidity, and control settings that enable or disable the economizer at the wrong times. A quick temperature check on outdoor, return and mixed air during mild weather tells you whether the economizer is working at all, and a few targeted tests then isolate the cause.</p>

<h2>First check: is the economizer actually working?</h2>
<p>On a mild day, when the outdoor temperature is well below return temperature (ideally by 15 °F or more) and the economizer should be open, calculate the outdoor air fraction from temperatures:</p>
<p class="formula">OA fraction ≈ (RAT − MAT) ÷ (RAT − OAT)</p>
<p><strong>Example:</strong> RAT 74 °F, OAT 54 °F, MAT 70 °F. OA fraction = (74 − 70) ÷ (74 − 54) = 4 ÷ 20 = 20 percent. If the BAS shows the outdoor damper commanded fully open, something is wrong: a fully open economizer with a closed return damper should give a fraction close to 100 percent and a mixed air temperature near 54 °F.</p>
<p>The calculation is unreliable when OAT and RAT are close, and an averaging mixed air sensor is needed for a meaningful MAT. Use it as a screening check, then confirm with the tests below.</p>

<h2>Symptom: damper commanded open, but OA fraction stays low</h2>
<p><strong>Possible causes:</strong></p>
<ul>
<li>Failed actuator, or actuator not powered.</li>
<li>Linkage slipping on the damper shaft or jackshaft, or a crank arm loose.</li>
<li>Damper blades seized from corrosion or debris.</li>
<li>Return damper not closing, so outdoor air is diluted.</li>
<li>Actuator wired to the wrong output or with reversed action.</li>
</ul>
<p><strong>Checks:</strong> command the damper from 0 to 100 percent and watch both the actuator and the blades. Confirm that the shaft turns with the actuator, that blades reach full open, and that the return damper moves opposite. Check actuator feedback against the command.</p>
<p><strong>Fix:</strong> tighten or replace linkage, free or replace the damper, replace failed actuators, and correct wiring. Mechanical damper problems in general are covered in <a href="<?= url('guides/damper-failure-troubleshooting') ?>">damper failure troubleshooting</a>.</p>

<h2>Symptom: damper wide open in hot or humid weather</h2>
<p><strong>Possible causes:</strong></p>
<ul>
<li>Outdoor temperature sensor reading low: located in the shade of an intake plenum that is cooled by return air, on the inside of an intake, or simply failed.</li>
<li>Outdoor humidity sensor drifted low, making enthalpy look favourable.</li>
<li>High-limit setpoint set too high or the wrong strategy for the climate.</li>
<li>Damper stuck open mechanically.</li>
<li>Operator override left in place.</li>
</ul>
<p><strong>Checks:</strong> compare the BAS outdoor temperature and humidity with a calibrated handheld instrument or a nearby weather station. Review the high-limit setpoints and strategy against the design. Check for overrides in the BAS.</p>
<p><strong>Fix:</strong> relocate or replace the sensor, recalibrate humidity sensors, and correct the high limit. Strategy choices are compared in <a href="<?= url('guides/economizer-high-limit-controls') ?>">economizer high-limit controls</a>.</p>

<h2>Symptom: economizer never opens, even in cool weather</h2>
<p><strong>Possible causes:</strong></p>
<ul>
<li>Outdoor temperature sensor reading high: in sun, near exhaust or condenser discharge.</li>
<li>High limit set too low, or enthalpy limit tripping because the humidity sensor reads high.</li>
<li>Sequence locks out the economizer whenever mechanical cooling runs (non-integrated logic), so once cooling starts the economizer never opens.</li>
<li>Low-limit or freeze protection holding outdoor air at minimum after a trip that was never reset.</li>
<li>Supply air temperature loop does not reach the economizer portion of its output range, for example because the heating stage is active from a mis-set setpoint.</li>
</ul>
<p><strong>Checks:</strong> verify sensors, read the high-limit state in the BAS, review the sequence logic for lockouts, and trend the SAT loop output to see which stage it is in.</p>
<p><strong>Fix:</strong> correct sensors, setpoints and sequence logic; enable integrated economizer operation where the code and design call for it.</p>

<h2>Symptom: mixed air temperature reads wrong or jumps around</h2>
<p><strong>Possible causes:</strong> a single-point mixed air sensor in stratified air, a sensor exposed directly to an outdoor air jet, or an averaging element bunched in one corner.</p>
<p><strong>Checks:</strong> traverse the mixed air plenum with a handheld thermometer at several points and compare the readings with the BAS value.</p>
<p><strong>Fix:</strong> install a properly distributed averaging sensor and improve mixing if stratification is severe.</p>

<h2>Symptom: economizer cycles open and closed</h2>
<p><strong>Possible causes:</strong> no hysteresis around the high-limit setpoint; outdoor sensor noise; interaction between the economizer and cooling stages in the SAT sequence.</p>
<p><strong>Checks:</strong> trend the high-limit state, outdoor temperature and damper command together.</p>
<p><strong>Fix:</strong> add deadband to the high limit, filter the outdoor sensor, and add deadband between economizer and mechanical cooling outputs. Oscillation diagnosis in general is covered in <a href="<?= url('guides/hunting-control-loops-troubleshooting') ?>">troubleshooting hunting control loops</a>.</p>

<h2>Symptom: too much outdoor air when economizer is off</h2>
<p><strong>Possible causes:</strong> minimum position set too high, outdoor damper leaking badly when closed, or return damper not fully open.</p>
<p><strong>Checks:</strong> measure outdoor airflow at minimum position; inspect damper seals and blade alignment; confirm the minimum position or airflow setpoint against the design.</p>
<p><strong>Fix:</strong> reset minimum, repair seals, or replace with low-leakage dampers.</p>

<h2>Quick reference</h2>
<table>
<thead><tr><th>Observation</th><th>Check first</th></tr></thead>
<tbody>
<tr><td>OA fraction low with damper commanded open</td><td>Actuator, linkage, return damper</td></tr>
<tr><td>Economizer open in hot or humid weather</td><td>Outdoor sensor accuracy and location, high limit</td></tr>
<tr><td>Economizer never opens</td><td>Outdoor sensor, high limit, sequence lockouts</td></tr>
<tr><td>Erratic mixed air reading</td><td>Sensor type and stratification</td></tr>
<tr><td>Rapid cycling</td><td>Hysteresis, deadband between stages</td></tr>
</tbody>
</table>
<?php guide_end([
    ['How do I check if an economizer is working?', 'On a mild day when outdoor air is much cooler than return air, calculate outdoor air fraction from return, mixed and outdoor temperatures. If the damper is commanded open but the fraction is low, inspect the actuator, linkage and return damper.'],
    ['Why is my economizer open on a hot day?', 'The outdoor temperature or humidity sensor is often reading low because of poor location or drift, or the high-limit setpoint is wrong. Compare BAS readings with a calibrated instrument and review the high-limit settings.'],
    ['What causes an economizer damper to stick?', 'Corrosion, debris, failed bearings, loose or slipping linkages and failed actuators are the usual causes. Stroke the damper while watching the blades and the shaft to see where motion is lost.'],
]);
