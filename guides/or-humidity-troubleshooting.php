<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('or-humidity-troubleshooting'); ?>
<p class="lede">When operating room humidity drifts out of range, start by measuring the dew point leaving the cooling coil and comparing it to what the room needs. High humidity is usually caused by a coil that cannot reach a low enough dew point, warm chilled water, or a control loop running on dry-bulb temperature. Low humidity is usually a humidifier, sensor or control problem.</p>

<h2>Before you start: collect data</h2>
<ul>
<li>Room temperature and RH from a calibrated handheld instrument, not only the BAS sensor.</li>
<li>Supply air temperature and RH at the room diffuser, and at the AHU discharge.</li>
<li>Cooling coil entering and leaving air temperature and RH.</li>
<li>Chilled water supply and return temperature at the coil, and valve position.</li>
<li>Humidifier status and valve or output position.</li>
<li>Room setpoints in use, and whether they were recently changed.</li>
<li>Outdoor temperature and dew point.</li>
<li>BAS trends for at least 24 hours.</li>
</ul>
<p>Convert readings to dew point or humidity ratio so you can compare across temperatures. A room at 62°F and 58% RH has a dew point of about 47°F; that number is what the coil has to beat.</p>

<h2>High humidity in the OR</h2>
<h3>Symptom: RH rises above the limit during warm, humid weather</h3>
<p><strong>Likely cause:</strong> The cooling coil cannot produce a low enough leaving dew point.</p>
<p><strong>Check:</strong> Measure coil leaving air. If it is saturated but warmer than the dew point needed, the coil or the chilled water is the limit. Check chilled water supply temperature at the coil inlet, not at the plant.</p>
<p><strong>Fix:</strong> Lower chilled water temperature to the OR unit, restore design water flow, clean the coil, or add a supplemental low-temperature coil. If the setpoints themselves are below what the system was designed for, see the design method in <a href="<?= url('guides/low-temperature-or-setpoints') ?>">how to achieve low OR setpoints</a>.</p>

<h3>Symptom: RH high even though chilled water is cold</h3>
<p><strong>Likely cause:</strong> The chilled water valve is not opening fully, because the coil is controlled on supply air dry-bulb temperature and the setpoint is satisfied before the air is dried enough.</p>
<p><strong>Check:</strong> Look at the valve position and the control loop input. If the valve modulates to hold, say, 55°F discharge, the coil will never pull the dew point below about 55°F.</p>
<p><strong>Fix:</strong> Change the sequence to control the coil on leaving dew point (or a lower dry-bulb setpoint representing the target dew point), and use reheat to meet room temperature.</p>

<h3>Symptom: RH high when the plant changes over or at night</h3>
<p><strong>Likely cause:</strong> Chilled water reset at the plant raises supply temperature during low load periods, or chillers stage off.</p>
<p><strong>Check:</strong> Trend plant supply temperature against OR RH.</p>
<p><strong>Fix:</strong> Exclude the OR units from chilled water reset, or give them a dedicated low-temperature source.</p>

<h3>Symptom: RH high with water visible downstream of the coil</h3>
<p><strong>Likely cause:</strong> Moisture carryover from the coil or drain pan, adding water back into the supply air.</p>
<p><strong>Check:</strong> Coil face velocity, drain pan condition, trap function.</p>
<p><strong>Fix:</strong> Reduce face velocity, clear the drain, correct the trap. Carryover is covered in <a href="<?= url('guides/cooling-coil-water-carryover-troubleshooting') ?>">cooling coil water carryover troubleshooting</a>.</p>

<h3>Symptom: RH high in one OR only</h3>
<p><strong>Likely cause:</strong> Low airflow to that room, a stuck reheat valve causing low supply volume to be reheated more, or local moisture sources such as wet floors after cleaning.</p>
<p><strong>Check:</strong> Measure supply airflow at that room; check terminal unit and reheat valve operation.</p>
<p><strong>Fix:</strong> Restore airflow and terminal control.</p>

<h3>Symptom: RH high when humidifier should be off</h3>
<p><strong>Likely cause:</strong> A leaking humidifier valve, failed steam trap or bypassing condensate.</p>
<p><strong>Check:</strong> Measure humidity ratio upstream and downstream of the humidifier with it commanded off.</p>
<p><strong>Fix:</strong> Repair the valve or trap; add a positive shutoff.</p>

<h2>Low humidity in the OR</h2>
<h3>Symptom: RH falls below the lower limit in cold weather</h3>
<p><strong>Likely cause:</strong> Humidifier undersized for outdoor dew point at the current outdoor air rate, or not running.</p>
<p><strong>Check:</strong> Humidifier output versus required moisture addition. Required load: lb/h = 4.5 × CFM × ΔW, where ΔW is the humidity ratio rise in lb/lb.</p>
<p><strong>Fix:</strong> Restore humidifier operation, check steam supply pressure, or add capacity. Sizing is covered in <a href="<?= url('guides/humidifier-load-calculation') ?>">the humidifier load calculation</a>.</p>

<h3>Symptom: Humidifier runs at full output but RH stays low</h3>
<p><strong>Likely cause:</strong> Steam supply pressure low, strainer clogged, dispersion tubes blocked, or a high-limit humidistat cutting output.</p>
<p><strong>Check:</strong> Steam pressure at the valve, high-limit setting and location.</p>
<p><strong>Fix:</strong> Restore steam pressure; relocate a high limit that is too close to the dispersion manifold.</p>

<h3>Symptom: RH low when cooling coil is running in winter</h3>
<p><strong>Likely cause:</strong> The coil is dehumidifying air that has just been humidified, because the humidifier is upstream of the coil, or because the coil is controlled to an unnecessarily low dew point.</p>
<p><strong>Fix:</strong> Reset the coil dew point setpoint upward in winter; confirm humidifier location downstream of the cooling coil.</p>

<h2>Sensor and control causes</h2>
<table>
<thead><tr><th>Symptom</th><th>Cause</th><th>Fix</th></tr></thead>
<tbody>
<tr><td>BAS shows RH in range, staff report clammy room</td><td>Sensor drift</td><td>Calibrate or replace; use a reference instrument</td></tr>
<tr><td>RH swings up and down every few minutes</td><td>Humidifier and cooling coil loops fighting</td><td>Add deadband, coordinate loops on dew point</td></tr>
<tr><td>RH correct in one room, wrong in others on the same AHU</td><td>Single supply dew point for rooms with different setpoints</td><td>Control supply to the most demanding room; add local reheat or humidification</td></tr>
<tr><td>RH rises after setpoint change by staff</td><td>Temperature setpoint lowered without dew point following</td><td>Tie the coil dew point setpoint to the lowest room setpoint</td></tr>
</tbody>
</table>
<p class="note">Verify the room RH sensor first. A large share of OR humidity complaints turn out to be sensor accuracy problems, especially near the RH limits.</p>
<?php guide_end([
    ['Why is my operating room humidity too high?', 'The most common causes are a cooling coil that cannot reach a low enough leaving dew point, chilled water that is too warm, or a coil controlled on dry-bulb temperature that is satisfied before the air is dried enough.'],
    ['How do I check whether the cooling coil is the problem?', 'Measure the dew point of air leaving the coil and compare it with the room dew point needed at the setpoint. If the leaving air is saturated but too warm, the coil or chilled water supply is the limit.'],
    ['What causes low OR humidity in winter?', 'Usually an undersized or malfunctioning humidifier, low steam pressure, a high-limit control cutting output, or a cooling coil removing moisture unnecessarily.'],
    ['Should OR humidity be controlled on RH or dew point?', 'Dew point control at the air handler, with room RH sensors used for trim, gives more stable results because dew point does not change with room temperature setpoint.'],
]);
