<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('recommissioning-existing-ahu'); ?>
<p class="lede">To recommission an existing air handler, first define what it is supposed to do today, then verify every sensor and actuator, test the sequences against that intent using trends and functional tests, correct the faults you find, and hand over updated documentation and a plan to keep it working. The aim is to restore or improve performance in the system as it now exists, not as it was designed decades ago.</p>

<h2>Step 1: Set the scope and the current requirements</h2>
<ol>
<li>Decide which units are included and why: energy reduction, comfort complaints, an upcoming retrofit, or a scheduled recommissioning cycle.</li>
<li>Gather what exists: original drawings and sequences, the latest TAB report, control program printouts, maintenance records and any past commissioning reports. Expect gaps.</li>
<li>Interview operators and occupants. Operators know which units run in hand, which alarms are ignored and which setpoints were changed to stop complaints.</li>
<li>Write a short current facility requirements document: occupancy schedules, space temperature and humidity ranges, ventilation rates, pressurization needs. Uses often change; a unit designed for offices may now serve labs or a call centre.</li>
</ol>
<p>Recommissioning differs from new-building commissioning in that the design phase is long past. The full new-construction process from OPR onward is described in <a href="<?= url('guides/commissioning-process-ashrae-202') ?>">the commissioning process for AHUs</a>; here the work starts with the system as it stands.</p>

<h2>Step 2: Trend before touching anything</h2>
<ol>
<li>Set up trends on key points at short intervals, such as one to five minutes, for at least one to two weeks covering occupied, unoccupied and weekend operation: supply, return, mixed and outdoor air temperatures; supply and return fan speed; duct static and setpoint; damper and valve commands; outdoor airflow if measured; space temperatures in representative zones.</li>
<li>Review the trends for typical faults:
<ul>
<li>Unit running 24/7 when the building is not occupied.</li>
<li>Simultaneous heating and cooling valve commands.</li>
<li>Economizer not opening in suitable weather, or open in hot weather.</li>
<li>Static pressure setpoint fixed high with no reset.</li>
<li>Supply air temperature fixed with no reset.</li>
<li>Control loops oscillating.</li>
<li>Minimum outdoor air far above or below requirements.</li>
</ul></li>
<li>List suspected issues to verify in the field.</li>
</ol>
<p class="note">Automated fault detection tools can do much of this screening continuously; see <a href="<?= url('guides/fault-detection-diagnostics-afdd') ?>">fault detection and diagnostics</a>. A recommissioning project is a good time to set them up.</p>

<h2>Step 3: Verify sensors and actuators</h2>
<p>Bad data leads to bad conclusions, so confirm the instruments before testing the logic.</p>
<ol>
<li>Check each temperature sensor against a calibrated reference at its location. Mixed air sensors are often single-point sensors in a stratified plenum; consider averaging elements.</li>
<li>Check pressure transmitters at zero (fan off) and at an operating point against a calibrated manometer.</li>
<li>Check airflow measuring stations against a traverse or another reference.</li>
<li>Stroke each damper and valve from the BAS and confirm actual position matches command at 0, 50 and 100 percent. Check that dampers seal when closed.</li>
<li>Check VFD speed feedback against the drive display.</li>
<li>Record every finding and correct calibration offsets or replace failed devices.</li>
</ol>

<h2>Step 4: Test the sequences</h2>
<ol>
<li>Write short test procedures from the current sequence, or from the sequence you intend to implement if the old one is inadequate.</li>
<li>Test each mode: startup and shutdown, occupied and unoccupied, warmup, economizer, heating and cooling, minimum outdoor air, static pressure control, and safeties.</li>
<li>Use overrides where conditions cannot be created naturally, and return everything to automatic afterwards.</li>
<li>Note every response that differs from the intent.</li>
</ol>

<h2>Step 5: Fix and optimize</h2>
<p>Corrections typically fall into a few categories:</p>
<table>
<thead><tr><th>Category</th><th>Examples</th></tr></thead>
<tbody>
<tr><td>Repairs</td><td>Failed actuators, leaking valves, stuck dampers, broken sensors</td></tr>
<tr><td>Schedules</td><td>Align occupied hours with actual use; add holiday schedules</td></tr>
<tr><td>Setpoints</td><td>Restore setpoints changed during past complaints; reset static and supply air temperature</td></tr>
<tr><td>Sequences</td><td>Add supply temperature reset, static pressure reset, economizer high limits suited to climate, demand-controlled ventilation where appropriate</td></tr>
<tr><td>Tuning</td><td>Retune hunting loops</td></tr>
<tr><td>Balancing</td><td>Rebalance where airflows have drifted or uses have changed</td></tr>
</tbody>
</table>
<p>Modern reference sequences can be a good target when the old sequence is weak; <a href="<?= url('guides/ashrae-guideline-36-sequences') ?>">ASHRAE Guideline 36 sequences</a> explains them. After each change, trend again to confirm it worked and did not create a new problem.</p>
<p class="warn">Change one thing at a time where possible, and keep a log of every setpoint and program change with the date and reason. Without it, nobody can tell later what fixed or caused a problem.</p>

<h2>Measuring the result</h2>
<p>Compare trends from before and after the work over similar weather. Useful measures are fan energy or average fan speed, hours of operation, heating and cooling valve positions, outdoor airflow against the required minimum, and the number of comfort complaints logged by operations. Where utility savings are the goal, meter or estimate fan and plant energy over a few months, adjusted for weather, rather than relying on a single week.</p>

<h2>Step 6: Document and sustain</h2>
<ol>
<li>Update the sequence of operation, points list and setpoint schedule to match what is now programmed.</li>
<li>Write a short report listing issues found, actions taken, and items deferred with cost estimates.</li>
<li>Train operators on what changed and why, especially where they had been overriding the unit.</li>
<li>Set up ongoing monitoring: key trends, alarms and a review cycle so performance does not drift back.</li>
<li>Plan the next recommissioning interval.</li>
</ol>
<?php guide_end([
    ['What is the difference between recommissioning and retro-commissioning?', 'Retro-commissioning usually refers to an existing building that was never formally commissioned, while recommissioning applies to one that was commissioned before. The field steps for an air handler are essentially the same.'],
    ['How long should I trend an AHU before recommissioning?', 'At least one to two weeks at short intervals, covering occupied, unoccupied and weekend periods. Longer trends spanning different weather give a better picture of economizer and heating behaviour.'],
    ['What are common faults found when recommissioning an air handler?', 'Units running outside occupied hours, simultaneous heating and cooling, economizers that do not work, fixed static and supply temperature setpoints, failed sensors and actuators, and hunting control loops are among the most frequent.'],
]);
