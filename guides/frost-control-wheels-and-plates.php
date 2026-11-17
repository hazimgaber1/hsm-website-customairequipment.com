<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('frost-control-wheels-and-plates'); ?>
<p class="lede">Pick a frost control method by comparing how much recovery it gives up, how it affects ventilation, and what equipment it adds. For most Canadian and northern US projects, preheat or variable wheel speed protects wheels best, and a sectional face and bypass damper protects plates best; timed defrost cycles are a fallback where ventilation can be interrupted.</p>

<h2>Step 1: Confirm when frost control is needed</h2>
<ol>
<li>Get the frost threshold temperature for your device and indoor winter humidity. The calculation is in <a href="<?= url('guides/frost-threshold-temperature-calculation') ?>">calculating the frost threshold temperature</a>.</li>
<li>Compare it with the winter design temperature and with hourly weather data. A threshold of 5 F in Toronto means a modest number of hours; the same threshold in Winnipeg or Edmonton means a large share of the winter.</li>
<li>Count the hours below the threshold. That number tells you how much the recovery lost to frost control will cost, which helps choose between methods.</li>
</ol>

<h2>Step 2: Understand the options</h2>
<h3>Outdoor air preheat</h3>
<p>A coil upstream of the device raises outdoor air just enough to keep the exhaust side above frost conditions. Recovery continues at full effectiveness on the warmer air. It costs the preheat energy and adds a coil, and the preheat must itself be freeze-protected (glycol or steam with proper controls). It suits critical spaces where ventilation airflow must never drop.</p>
<h3>Wheel speed reduction</h3>
<p>Slowing an enthalpy or sensible wheel reduces its effectiveness, so the exhaust leaves warmer and the matrix stays above frost conditions. It needs only the wheel's variable speed drive and a control input. It sacrifices recovery exactly when heating load is highest, but often less than other methods because the reduction is proportional.</p>
<h3>Plate face and bypass</h3>
<p>Dampers divert part of the outdoor air around the plate. With less cold air on the core, the cold corner warms and frost melts or never forms. Sectional dampers that close only the coldest strip of the core sacrifice less recovery than a full-face bypass.</p>
<h3>Exhaust-only defrost cycle</h3>
<p>The supply fan stops or outdoor air is shut off briefly while warm exhaust continues through the device, melting frost. It needs no extra hardware but interrupts ventilation and causes depressurization. It suits small units and spaces where brief ventilation interruption is acceptable.</p>
<h3>Recirculation defrost</h3>
<p>Dampers temporarily route return air through the outdoor air side. It keeps the supply fan running but stops outdoor air delivery during the cycle, and it is not allowed where return air cannot be recirculated.</p>

<table>
<thead><tr><th>Method</th><th>Works on</th><th>Ventilation maintained?</th><th>Recovery sacrificed</th><th>Extra hardware</th></tr></thead>
<tbody>
<tr><td>Preheat</td><td>Wheels, plates</td><td>Yes</td><td>Little; preheat energy instead</td><td>Coil, valve, controls</td></tr>
<tr><td>Wheel speed</td><td>Wheels</td><td>Yes</td><td>Moderate</td><td>VFD on wheel (usually present)</td></tr>
<tr><td>Face and bypass</td><td>Plates, wheels with bypass</td><td>Yes</td><td>Moderate</td><td>Dampers, actuators</td></tr>
<tr><td>Exhaust-only cycle</td><td>Plates, wheels</td><td>No, intermittent</td><td>During cycles</td><td>None</td></tr>
<tr><td>Recirculation cycle</td><td>Plates, wheels</td><td>No, intermittent</td><td>During cycles</td><td>Recirculation damper</td></tr>
</tbody>
</table>

<h2>Step 3: Choose by application</h2>
<ol>
<li><strong>Healthcare, labs and other critical ventilation:</strong> use preheat. Interrupting outdoor air or recirculating is generally not acceptable.</li>
<li><strong>Enthalpy wheel on offices and schools:</strong> use wheel speed control first, with preheat added only if the threshold sits well above design temperature.</li>
<li><strong>Sensible plates:</strong> use sectional face and bypass. Add a small preheat in very cold climates where bypass alone gives up too much.</li>
<li><strong>Small units on non-critical spaces:</strong> a timed exhaust-only defrost is simple and cheap if brief interruptions are acceptable.</li>
<li><strong>Humidified buildings in severe cold:</strong> expect to combine methods, since high exhaust dew points raise the threshold.</li>
</ol>

<h2>Step 4: Choose the control signal</h2>
<ol>
<li><strong>Outdoor temperature only.</strong> Simple, but conservative because it ignores indoor humidity. Use as a fallback.</li>
<li><strong>Exhaust leaving temperature.</strong> Hold it above a setpoint a few degrees above freezing. Responds to actual device condition.</li>
<li><strong>Pressure drop across the exhaust side.</strong> Rising drop signals frost build-up. Good as a confirmation or alarm, too slow as the only input.</li>
<li><strong>Calculated threshold</strong> using outdoor temperature, exhaust temperature and exhaust humidity, recalculated continuously by the controller. The most efficient approach if sensors are maintained.</li>
</ol>
<p class="note">Combining a calculated threshold with a pressure drop alarm gives good efficiency with a safety net for sensor drift.</p>

<h2>Step 5: Detail the hardware</h2>
<ol>
<li>Provide a drain pan under the exhaust side of plates and below wheels in cold climates, with heat-traced drain lines where they pass through cold spaces.</li>
<li>Make sure the bypass path has its own low-leakage damper so it does not short-circuit recovery when closed.</li>
<li>Size the preheat coil for the outdoor design temperature up to the target leaving temperature, and protect it with glycol or a properly controlled steam coil.</li>
<li>Locate exhaust leaving temperature sensors where they read a representative average, not a single cold corner.</li>
</ol>
<p class="warn">If frost control fails, a plate can block completely and stop exhaust flow, which depressurizes the building and can freeze downstream coils. Provide an alarm on high exhaust-side pressure drop.</p>

<h2>Step 6: Commission and verify</h2>
<ol>
<li>Test the sequence by simulating outdoor temperatures below threshold and watching each actuator respond.</li>
<li>Verify the bypass damper or wheel speed reaches the commanded position.</li>
<li>Recheck performance in the first real cold snap and adjust setpoints based on observed pressure drop.</li>
</ol>
<p>For drainage problems that persist after frost control is working, see <a href="<?= url('guides/plate-exchanger-condensate-problems') ?>">troubleshooting plate exchanger condensate</a>.</p>
<?php guide_end([
    ['What is the best frost control method for an energy recovery wheel?', 'For most commercial projects, wheel speed reduction controlled from exhaust leaving temperature is the simplest effective method. Critical facilities that cannot reduce ventilation usually add an outdoor air preheat coil.'],
    ['How do plate heat exchangers prevent frost?', 'Most use face and bypass dampers to route some outdoor air around the core, warming its cold corner. Sectional dampers sacrifice less recovery than a full bypass, and preheat can be added in very cold climates.'],
    ['Is an exhaust-only defrost cycle acceptable?', 'It works on small, non-critical units because it needs no extra hardware. It interrupts outdoor air delivery during each cycle, so it is not suitable for healthcare, labs or spaces that need continuous ventilation.'],
]);
