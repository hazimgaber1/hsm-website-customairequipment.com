<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('duct-static-pressure-reset'); ?>
<p class="lede">Duct static pressure reset lowers the supply fan's pressure setpoint until the most-open VAV damper is nearly wide open, so the fan delivers just enough pressure for the most demanding zone. Implement it with trim-and-respond logic driven by pressure requests from zone damper positions, with sensible limits, rogue-zone handling and trending to prove it works.</p>

<h2>Why reset pays</h2>
<p>A fixed duct static setpoint is chosen for design flow at the worst-case zone. At part load, most VAV dampers throttle that excess pressure. Lowering the setpoint lets the fan run slower; under the fan laws, fan power falls roughly with the cube of speed at a fixed system curve, so modest pressure reductions give substantial savings. A reset also reduces terminal noise and fan instability at low flow. Many energy codes now require static pressure reset for VAV systems with DDC to the zone; check the edition of the code adopted in your jurisdiction.</p>

<h2>Step 1: Confirm the prerequisites</h2>
<ol>
<li>Each VAV terminal reports damper position (commanded or actual) to the BAS, and the BAS can read all of them in a reasonable cycle time.</li>
<li>Terminal airflow sensors are working and calibrated, so airflow-based requests are meaningful.</li>
<li>A duct static pressure sensor is installed at a stable location, with a range suitable for the expected minimum and maximum setpoints. Location guidance is in <a href="<?= url('guides/sensor-selection-and-placement') ?>">selecting and placing temperature and pressure sensors</a>.</li>
<li>The supply fan speed loop is stable at fixed setpoint before reset is enabled.</li>
</ol>

<h2>Step 2: Define pressure requests from each zone</h2>
<p>Each zone sends requests to the AHU based on how hard its damper is working. A typical scheme:</p>
<table>
<thead><tr><th>Zone condition</th><th>Requests</th></tr></thead>
<tbody>
<tr><td>Airflow below 50 percent of setpoint with damper fully open, sustained</td><td>3</td></tr>
<tr><td>Airflow below 70 percent of setpoint with damper fully open, sustained</td><td>2</td></tr>
<tr><td>Damper position above 95 percent (until it falls below 85 percent)</td><td>1</td></tr>
<tr><td>Otherwise</td><td>0</td></tr>
</tbody>
</table>
<p>Only count airflow-based requests when the airflow setpoint is meaningful (for example, above a small fraction of zone maximum), so near-zero setpoints do not produce false requests. The hysteresis between 95 and 85 percent prevents a single damper from flickering requests on and off.</p>

<h2>Step 3: Set trim-and-respond parameters</h2>
<table>
<thead><tr><th>Parameter</th><th>Example value</th><th>Note</th></tr></thead>
<tbody>
<tr><td>Initial setpoint</td><td>0.5 in. w.c. (125 Pa)</td><td>Used at fan start</td></tr>
<tr><td>Minimum setpoint</td><td>0.1 in. w.c. (25 Pa)</td><td>Enough to keep terminals controllable</td></tr>
<tr><td>Maximum setpoint</td><td>Design value from TAB</td><td>Determined at full flow with all boxes at maximum</td></tr>
<tr><td>Delay after start</td><td>10 min</td><td>Let the system settle</td></tr>
<tr><td>Time step</td><td>2 min</td><td>Shorter than zone response, longer than fan loop</td></tr>
<tr><td>Ignored requests</td><td>2</td><td>Prevents one or two zones driving the system</td></tr>
<tr><td>Trim</td><td>−0.05 in. w.c. (−12 Pa)</td><td>Applied when requests ≤ ignored</td></tr>
<tr><td>Respond</td><td>+0.06 in. w.c. (+15 Pa) per excess request</td><td>Slightly larger than trim</td></tr>
<tr><td>Maximum response</td><td>+0.13 in. w.c. (+32 Pa)</td><td>Caps a single step</td></tr>
</tbody>
</table>
<p>The pattern mirrors the request-and-reset approach of <a href="<?= url('guides/ashrae-guideline-36-sequences') ?>">ASHRAE Guideline 36</a>. Use the guideline's defaults where they fit, and adjust for very large or very small systems.</p>
<p class="formula">SPnew = clamp( SPold + Δ, SPmin, SPmax )    with Δ = trim if R ≤ I, else min(respond × (R − I), max response)</p>
<p><strong>Worked example:</strong> the setpoint is 0.80 in. w.c. Eight zones generate 5 requests in total. Excess = 5 − 2 = 3; Δ = 3 × 0.06 = 0.18, capped at 0.13. New setpoint = 0.93 in. w.c. Two steps later only 1 request remains; each step trims 0.05, bringing the setpoint back toward 0.83.</p>

<h2>Step 4: Handle rogue zones</h2>
<p>A rogue zone always generates requests because of a problem: undersized terminal, a stuck damper, a failed airflow sensor, a zone with a process load, or a thermostat set unrealistically. One or two rogues are absorbed by the ignored request count, but more will lock the setpoint at maximum and erase the savings.</p>
<ol>
<li>Report, for each zone, the cumulative number of requests or the percentage of time it requests.</li>
<li>Investigate the top offenders. Fix the cause if possible.</li>
<li>If the zone cannot be fixed, reduce its importance multiplier to zero or exclude it from the reset, and document why.</li>
</ol>
<p class="warn">Do not raise the ignored request count to hide rogue zones; that lowers the setpoint below what legitimate zones need.</p>

<h2>Step 5: Tune and verify</h2>
<ol>
<li>Trend duct static setpoint, actual static, fan speed, request count and the number of zones with damper above 95 percent.</li>
<li>During normal occupancy, the setpoint should float, typically well below maximum, with one or a few dampers near fully open.</li>
<li>If the setpoint oscillates between limits, reduce respond and trim steps or lengthen the time step.</li>
<li>If the fan speed loop hunts at low setpoints, retune it; low setpoints make the static loop more sensitive. Diagnosis is covered in <a href="<?= url('guides/hunting-control-loops-troubleshooting') ?>">troubleshooting hunting control loops</a>.</li>
<li>Confirm all zones meet airflow setpoints at their maximum during peak load.</li>
</ol>

<h2>Interaction with other sequences</h2>
<ul>
<li><strong>SAT reset</strong> raises airflow demand when supply temperature rises, which increases pressure requests. The two resets settle together but should not both be aggressive.</li>
<li><strong>Return fan tracking</strong> or building pressure control must remain stable as supply airflow changes with the reset.</li>
<li><strong>Minimum outdoor air</strong> control that depends on mixed air plenum pressure can be affected as supply fan speed drops; check outdoor airflow at low static setpoints.</li>
</ul>
<?php guide_end([
    ['How does static pressure reset save energy?', 'It lowers the duct static setpoint at part load, so the supply fan slows down. Fan power falls steeply with speed, and less pressure is throttled away by VAV dampers. Savings are usually significant in VAV systems.'],
    ['What damper position should trigger a pressure request?', 'A common approach is to send one request when a damper exceeds about 95 percent open and stop when it drops below about 85 percent, with additional requests when airflow falls well short of setpoint while the damper is fully open.'],
    ['What is a rogue zone in static pressure reset?', 'A rogue zone constantly requests more pressure due to a problem such as an undersized box, a failed sensor or an unusual load. It can hold the setpoint at maximum. Identify and fix it, or exclude it from the reset logic.'],
]);
