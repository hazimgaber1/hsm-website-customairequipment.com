<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('supply-air-temperature-reset'); ?>
<p class="lede">Supply air temperature (SAT) reset raises the cooling supply setpoint when zones do not need cold air, cutting chiller energy, reheat and economizer-hour mechanical cooling. Implement it with trim-and-respond logic driven by zone cooling requests, bounded by an outdoor-temperature schedule and a humidity limit, so the reset never lets space dew point climb.</p>

<h2>Step 1: Decide where the reset makes sense</h2>
<p>SAT reset saves energy when zone loads are low and reheat or mechanical cooling would otherwise be wasted, typically in mild weather or in buildings with many interior and perimeter zones. It costs fan energy, because warmer supply air means more airflow to meet the same sensible load. Before implementing, check:</p>
<ol>
<li>The system is VAV with zones that can absorb higher supply temperatures by opening dampers.</li>
<li>Fan capacity is sufficient at the maximum reset SAT for the expected loads.</li>
<li>Humidity control is not dependent on a fixed cold coil leaving temperature, or a humidity override can be added.</li>
<li>For constant-volume systems, reset is still useful but works differently; most of this guide targets VAV.</li>
</ol>

<h2>Step 2: Define the setpoint limits</h2>
<ul>
<li><strong>Minimum cooling SAT</strong> (for example 55 °F / 12.8 °C): the design value, used in hot or humid weather.</li>
<li><strong>Maximum cooling SAT</strong> (for example 65 °F / 18.3 °C): the warmest value at which zones can still be cooled at their maximum airflow in mild weather.</li>
<li><strong>Outdoor air temperature (OAT) limits</strong>: above an upper OAT (for example 70 °F / 21 °C) the setpoint is held at minimum; below a lower OAT (for example 60 °F / 16 °C) the setpoint is allowed to reach the T&amp;R-determined maximum; between them it is interpolated.</li>
</ul>
<p>The OAT schedule matters because in hot weather the outdoor air is warm and the economizer is off, so a colder SAT minimizes fan energy and keeps dehumidification working.</p>

<h2>Step 3: Configure zone cooling requests</h2>
<p>Each zone generates cooling requests based on how far it is above its cooling setpoint and how hard its terminal is working. A typical scheme:</p>
<table>
<thead><tr><th>Zone condition</th><th>Requests sent</th></tr></thead>
<tbody>
<tr><td>Zone temperature more than 5 °F above setpoint for a sustained period</td><td>3</td></tr>
<tr><td>Zone temperature more than 3 °F above setpoint for a sustained period</td><td>2</td></tr>
<tr><td>Cooling loop output above 95 percent (until it falls below 85 percent)</td><td>1</td></tr>
<tr><td>Otherwise</td><td>0</td></tr>
</tbody>
</table>
<p>Suppress requests for a period after a setpoint change or mode change to avoid false demand, and use importance multipliers to weight critical spaces. These conventions follow the approach in <a href="<?= url('guides/ashrae-guideline-36-sequences') ?>">ASHRAE Guideline 36</a>; use the edition's defaults where they suit the project.</p>

<h2>Step 4: Program the trim-and-respond loop</h2>
<p>The T&amp;R parameters define how fast the setpoint moves. Example values for SAT reset:</p>
<table>
<thead><tr><th>Parameter</th><th>Example value</th><th>Meaning</th></tr></thead>
<tbody>
<tr><td>Initial setpoint</td><td>Max cooling SAT</td><td>Start warm, after the system has started</td></tr>
<tr><td>Delay</td><td>10 min</td><td>Wait after fan start before resetting</td></tr>
<tr><td>Time step</td><td>2 min</td><td>Interval between adjustments</td></tr>
<tr><td>Ignored requests</td><td>2</td><td>Number of requests that do not trigger a response</td></tr>
<tr><td>Trim</td><td>+0.2 °F</td><td>Raise SAT when requests are at or below ignored</td></tr>
<tr><td>Respond</td><td>−0.3 °F per excess request</td><td>Lower SAT when more zones need cooling</td></tr>
<tr><td>Maximum response</td><td>−1.0 °F</td><td>Cap on a single response step</td></tr>
</tbody>
</table>
<p>At each time step: count requests R. If R is at or below the ignored value, add the trim. Otherwise add respond × (R − ignored), capped at the maximum response. Then clamp the result between minimum cooling SAT and the OAT-based maximum.</p>
<p class="formula">SATsp(new) = clamp( SATsp(old) + Δ, SATmin, SATmax,OAT )</p>
<p><strong>Worked example:</strong> SAT setpoint is 60.0 °F, OAT is 62 °F, giving an OAT-based maximum of 63.0 °F (interpolated between 65 °F at 60 °F OAT and 55 °F at 70 °F OAT). At the next step, five zones send a total of 4 requests. Excess = 4 − 2 = 2; Δ = 2 × (−0.3) = −0.6 °F, within the −1.0 cap. New setpoint = 59.4 °F. If the next step has only 1 request, Δ = +0.2 °F and the setpoint returns to 59.6 °F.</p>

<h2>Step 5: Add the humidity limit</h2>
<p>A warmer coil removes less moisture. Without a limit, SAT reset in humid weather can push space dew point up while zone temperatures look fine. Add one or more of these protections:</p>
<ol>
<li><strong>Space or return dew point limit.</strong> If the dew point (or a calculated humidity ratio) exceeds its limit, hold SAT at minimum or lower the maximum reset limit.</li>
<li><strong>Outdoor dew point lockout.</strong> Disable reset above a set outdoor dew point, common in humid climates.</li>
<li><strong>Coil leaving dew point control.</strong> In systems with dedicated dehumidification modes, let the coil control to dew point and reheat for SAT; see <a href="<?= url('guides/dehumidification-control-sequence') ?>">dehumidification mode control sequences</a>.</li>
</ol>
<p class="warn">Place the humidity sensor where it represents the space or return air, not near outdoor air intakes or humidifiers. A wrong reading defeats the limit.</p>

<h2>Step 6: Coordinate with the other loops</h2>
<ul>
<li>The SAT loop controls heating, economizer and cooling in sequence; ensure the setpoint change does not cause the loop to cross between stages repeatedly.</li>
<li>Duct static pressure reset runs at the same time. Raising SAT causes boxes to open and generates pressure requests; the two resets will find a balance, but avoid aggressive parameters on both loops.</li>
<li>Check that heating SAT setpoints for warm-up modes are separate from the cooling reset.</li>
</ul>

<h2>Step 7: Commission and trend</h2>
<ol>
<li>Trend SAT setpoint, actual SAT, OAT, request count, fan speed and space dew point for at least a week in mixed weather.</li>
<li>Confirm the setpoint moves smoothly and does not bang between limits.</li>
<li>Identify zones that generate requests constantly; they may need balancing, terminal repair or exclusion.</li>
<li>Compare chiller and reheat energy with fan energy to confirm the net saving.</li>
</ol>
<p>Loop tuning problems uncovered during trending are addressed in <a href="<?= url('guides/pid-loop-tuning-ahu') ?>">tuning PID loops on air handlers</a>.</p>
<?php guide_end([
    ['What is a good maximum supply air temperature for reset?', 'Many VAV systems reset up to about 65 °F, but the right value depends on zone loads, terminal capacity and humidity. It must be low enough that the warmest-requesting zones can still be cooled at their maximum airflow.'],
    ['Does supply air temperature reset increase fan energy?', 'Yes, warmer supply air requires more airflow to meet the same load, so fan energy rises. The savings in chiller energy and reheat usually outweigh it in mild weather, but trend data should confirm it.'],
    ['How do I prevent humidity problems with SAT reset?', 'Add a humidity limit that holds supply temperature at minimum when space or return dew point is high, or lock out reset above a set outdoor dew point. In humid climates this limit is essential.'],
]);
