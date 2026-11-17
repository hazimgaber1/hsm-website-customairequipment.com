<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fault-detection-diagnostics-afdd'); ?>
<p class="lede">Automated fault detection and diagnostics (AFDD) continuously compares an air handler's measured behaviour with what the physics and the control sequence say should be happening, and flags conditions that indicate faults such as leaking valves, failed sensors or dampers that do not move. The best-known rule set for AHUs is the one adopted in ASHRAE Guideline 36, derived from earlier research rule sets, and it depends on good sensors, clear operating states and sensible thresholds.</p>

<h2>Detection versus diagnosis</h2>
<p><strong>Detection</strong> answers "something is wrong": for example, the supply air is warmer than the mixed air when neither heating coil nor fan heat should explain it. <strong>Diagnosis</strong> answers "what is wrong": a leaking heating valve, a failed sensor, or a wrong command. Simple rule-based systems detect well and offer a list of possible causes for each rule. More advanced tools combine rules and data patterns to rank causes. Either way, a technician still confirms the cause in the field.</p>

<h2>How rule-based AFDD works</h2>
<p>Rule-based AFDD defines a set of <em>operating states</em> for the AHU and, for each state, the conditions that should hold. If a condition is violated by more than a threshold for longer than a set time, a fault is flagged. The general structure:</p>
<ol>
<li><strong>Identify the operating state</strong> from control signals, for example: heating, free cooling with economizer only, economizer plus mechanical cooling, mechanical cooling with minimum outdoor air, or unoccupied.</li>
<li><strong>Apply the rules for that state</strong>, using temperatures, commands and setpoints.</li>
<li><strong>Allow for sensor uncertainty</strong> in each comparison, so normal measurement error does not trigger faults.</li>
<li><strong>Require persistence</strong>, so a fault must exist for a set time before it is reported.</li>
<li><strong>Suppress rules</strong> during transitions, start-up and mode changes, when temporary deviations are expected.</li>
</ol>

<h2>Typical AHU fault conditions</h2>
<p>The fault conditions in <a href="<?= url('guides/ashrae-guideline-36-sequences') ?>">ASHRAE Guideline 36</a> cover the kinds of checks below. Wording and numbering vary by edition; the logic is what matters.</p>
<table>
<thead><tr><th>Check</th><th>What it compares</th><th>Possible causes when it fails</th></tr></thead>
<tbody>
<tr><td>Duct static pressure too low with fan at maximum</td><td>Static versus setpoint, fan speed</td><td>Fan failure, belt problem, duct leak, undersized fan, setpoint too high</td></tr>
<tr><td>Mixed air temperature outside the range between return and outdoor</td><td>MAT versus RAT and OAT</td><td>Sensor error, stratification</td></tr>
<tr><td>Supply air colder than mixed air in heating mode</td><td>SAT versus MAT plus fan heat</td><td>Sensor error, cooling valve leaking</td></tr>
<tr><td>Outdoor air fraction differs from expected at minimum</td><td>Calculated OA fraction versus design minimum</td><td>Damper fault, minimum setting wrong, measurement error</td></tr>
<tr><td>Supply air temperature too low or too high at full output</td><td>SAT versus setpoint with coil at 100%</td><td>Coil capacity shortfall, plant problem, valve not opening</td></tr>
<tr><td>Supply and mixed temperatures differ in economizer-only mode</td><td>SAT versus MAT plus fan heat</td><td>Leaking heating or cooling valve, sensor error</td></tr>
<tr><td>Outdoor and mixed temperatures differ at 100% outdoor air</td><td>OAT versus MAT</td><td>Return damper leak, outdoor damper not fully open, sensor error</td></tr>
<tr><td>Temperature change across a coil that should be off</td><td>Coil leaving minus entering when valve commanded closed</td><td>Leaking valve</td></tr>
<tr><td>Too many operating state changes per hour</td><td>Count of mode transitions</td><td>Hunting loops, poor tuning, sequencing problem</td></tr>
</tbody>
</table>
<p>Research rule sets, such as the AHU performance assessment rules developed by NIST, laid the groundwork for these conditions.</p>

<h2>Data requirements</h2>
<p>Rule-based AFDD needs the right points, at the right quality and resolution:</p>
<ul>
<li><strong>Temperatures:</strong> outdoor, return, mixed (averaging), supply, and ideally coil leaving temperatures.</li>
<li><strong>Commands:</strong> heating valve, cooling valve, outdoor air damper, fan speed, operating mode.</li>
<li><strong>Setpoints:</strong> supply air temperature, duct static, outdoor air minimum.</li>
<li><strong>Measured pressures and flows:</strong> duct static, and outdoor airflow where measured.</li>
<li><strong>Status:</strong> fan proof, alarms, occupancy mode.</li>
<li><strong>Trend interval:</strong> short enough to capture dynamics; a few minutes or less is typical.</li>
<li><strong>Time synchronization</strong> across controllers so values can be compared at the same moment.</li>
</ul>
<p class="note">AFDD is only as good as its sensors. A mixed air sensor that reads a stratified corner will trigger faults constantly. Fix sensor placement and calibration before enabling rules; see <a href="<?= url('guides/sensor-selection-and-placement') ?>">selecting and placing sensors</a>.</p>

<h2>Setting thresholds</h2>
<p>Each rule compares a difference against a threshold that includes:</p>
<ul>
<li>The combined uncertainty of the sensors involved.</li>
<li>An allowance for fan heat, where supply temperature is compared with mixed air (fan heat raises SAT by a predictable amount).</li>
<li>An allowance for duct heat gain or loss between sensors.</li>
</ul>
<p>Thresholds that are too tight generate false alarms that operators learn to ignore; thresholds that are too loose miss real faults. Start with guideline defaults, then adjust based on observed behaviour during commissioning.</p>

<h2>Where AFDD runs</h2>
<ul>
<li><strong>In the AHU controller:</strong> rules run locally with direct access to points, often provided with factory controls.</li>
<li><strong>In the BAS supervisory layer:</strong> rules run on trend data across many units.</li>
<li><strong>In separate analytics software:</strong> cloud or on-premises platforms that pull data from the BAS and apply larger rule libraries, prioritize faults by energy or comfort impact and track them through to resolution.</li>
</ul>

<h2>Making AFDD useful in operation</h2>
<ol>
<li>Route faults to a person responsible for acting on them.</li>
<li>Prioritize by consequence: comfort, energy cost, equipment risk.</li>
<li>Record the fix for each fault and close it out.</li>
<li>Review recurring faults; they often reveal design or sequence problems.</li>
</ol>
<p>Specific troubleshooting procedures for common faults, such as economizers, are covered in separate guides, for example <a href="<?= url('guides/economizer-faults-troubleshooting') ?>">troubleshooting economizer faults</a>.</p>
<?php guide_end([
    ['What is AFDD for air handlers?', 'AFDD continuously compares measured AHU behaviour with expected behaviour for its current operating state and flags faults such as leaking valves, failed sensors, stuck dampers or capacity shortfalls. It helps operators find problems before they cause complaints or waste energy.'],
    ['What data does AHU fault detection need?', 'At minimum, outdoor, return, mixed and supply air temperatures, valve and damper commands, fan speed and status, operating mode and setpoints, all trended at short intervals with synchronized time stamps.'],
    ['Why does AFDD generate false alarms?', 'Common reasons are poorly located or uncalibrated sensors, thresholds set tighter than sensor accuracy allows, and rules not suppressed during start-up or mode changes. Fix sensors and tune thresholds during commissioning.'],
]);
