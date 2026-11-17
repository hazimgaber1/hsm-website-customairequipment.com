<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('functional-performance-testing'); ?>
<p class="lede">Functional performance testing (FPT) is a scripted test that makes an air handler go through every operating mode and failure condition its sequence of operation describes, and records whether it responds correctly. It proves the control logic and safeties actually work in the field, not just on paper.</p>

<h2>What an FPT is trying to prove</h2>
<p>An air handler can start, run and pass balancing while still having control logic that is wrong in ways nobody notices until an unusual day. The economizer may never lock out above its high limit; the freezestat may trip the fan but leave the outdoor damper open; the unit may restart after a power failure in the wrong mode. FPT exercises these conditions deliberately, under controlled observation, so problems are found before occupancy rather than during the first cold snap.</p>
<p>Each test answers a specific question: when condition X occurs, does the system do Y, within the time and accuracy the sequence requires? The answer is recorded as pass, fail or deficient with notes.</p>

<h2>Anatomy of an FPT script</h2>
<p>A good script is written from the project's sequence of operation, not from a generic template. Each test step typically contains:</p>
<table>
<thead><tr><th>Field</th><th>Example</th></tr></thead>
<tbody>
<tr><td>Test ID and reference</td><td>AHU-2-07, Sequence section "Economizer high limit"</td></tr>
<tr><td>Initial condition</td><td>Unit occupied, cooling mode, outdoor air temperature below high limit, economizer modulating</td></tr>
<tr><td>Action</td><td>Override outdoor air temperature input to 2°F above high-limit setpoint</td></tr>
<tr><td>Expected response</td><td>Economizer disabled; outdoor damper drives to minimum position; return damper opens; cooling valve takes over SAT control</td></tr>
<tr><td>Observed response</td><td>Recorded by tester, with trend or screenshot reference</td></tr>
<tr><td>Result</td><td>Pass / Fail / Deficiency number</td></tr>
</tbody>
</table>
<p>Scripts also say how to restore normal conditions after each test, so overrides are not left in place.</p>

<h2>Typical air handler tests</h2>
<h3>Mode and sequence tests</h3>
<ul>
<li>Occupied and unoccupied mode transitions, including optimal start and morning warmup.</li>
<li>Supply air temperature control in heating, cooling and economizer modes.</li>
<li>Supply air temperature reset responding to its inputs.</li>
<li>Duct static pressure control and reset logic.</li>
<li>Minimum outdoor airflow control at maximum and minimum supply airflow.</li>
<li>Demand-controlled ventilation response to CO2 where used.</li>
<li>Economizer enable, high limit and changeover.</li>
<li>Dehumidification mode and reheat, where specified.</li>
<li>Building pressure control through return or relief fans.</li>
</ul>
<h3>Safety and failure tests</h3>
<ul>
<li>Low-limit freezestat trip: fan stops or goes to the specified response, outdoor damper closes, heating valve opens, alarm generated.</li>
<li>High duct static pressure limits on supply and return sides.</li>
<li>Smoke detector input and fire alarm interface, coordinated with the fire alarm contractor.</li>
<li>Fan failure: loss of status, VFD fault, and for fan arrays, one fan failing while the rest compensate.</li>
<li>Sensor failure: what the controller does when a key sensor reads out of range.</li>
<li>Power failure and restoration: orderly restart, no simultaneous inrush, correct mode on recovery.</li>
<li>Loss of communication between the unit controller and the BAS.</li>
</ul>

<h2>Methods: live tests, overrides and trending</h2>
<p>Some conditions can be produced for real, such as stopping a fan or opening a door switch. Others, such as a −20°F outdoor day in July, must be simulated by overriding the sensor value in the controller. Overrides test the logic but not the sensor, so the sensor should already have been verified during pre-functional checks.</p>
<p>Trend logs complement live tests. Recording key points every minute or so over several days captures behaviour such as control loop hunting, simultaneous heating and cooling, or a reset that never moves. Many commissioning providers now pair short live tests with longer trend reviews.</p>
<p class="note">If a loop oscillates during testing, that is a tuning problem; record it as a deficiency and refer to <a href="<?= url('guides/pid-loop-tuning-ahu') ?>">PID loop tuning for AHUs</a> rather than adjusting gains during the test.</p>

<h2>Prerequisites and who takes part</h2>
<p>FPT only makes sense once the system is complete: startup done, sensors calibrated, points checked out, and TAB finished so airflows and setpoints are real. The test is usually directed by the commissioning provider, with the controls contractor operating the BAS and making overrides, the mechanical contractor present for physical changes, and the owner's operators watching to learn the system. The manufacturer may attend for factory-mounted controls.</p>
<p>FPT is one phase within the broader commissioning effort, whose structure from owner's project requirements through post-occupancy is explained in <a href="<?= url('guides/commissioning-process-ashrae-202') ?>">the commissioning process for AHUs</a>. Clear, testable sequences make FPT much easier; see <a href="<?= url('guides/writing-ahu-sequence-of-operation') ?>">writing an AHU sequence of operation</a>.</p>

<h2>Scheduling around the seasons</h2>
<p>Some modes cannot be tested meaningfully in the season the building finishes. Economizer high-limit logic can be checked by override in winter, but the cooling coil's ability to hold supply air temperature at design load can only be confirmed on a warm day. Scripts should mark which tests are deferred to the opposite season and who is responsible for completing them, so deferred items do not quietly disappear once the contractor demobilizes.</p>

<h2>Handling failures</h2>
<p>A failed test becomes an issue on the commissioning log, assigned to a responsible party with a target date. After correction, the test is repeated and the result updated. Failures cluster in a few areas: reversed damper actions, wrong fail-safe positions on valves, safeties that stop the fan but not the associated dampers, and restart logic after power loss. Retest everything a correction could affect, not just the step that failed.</p>
<?php guide_end([
    ['Who writes the functional performance test scripts?', 'Usually the commissioning provider writes them from the project\'s sequence of operation and specifications, and the controls contractor reviews them for practicality before testing begins.'],
    ['Can functional testing be done with sensor overrides?', 'Yes, many conditions can only be tested by overriding sensor values in the controller. This proves the control logic but not the sensor itself, so sensors must be verified separately beforehand.'],
    ['What happens when an AHU fails a functional test?', 'The failure is logged as an issue with a responsible party, corrected, and the test is repeated. Related tests that the correction could affect should be repeated as well.'],
]);
