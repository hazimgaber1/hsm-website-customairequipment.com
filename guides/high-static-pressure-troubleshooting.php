<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('high-static-pressure-troubleshooting'); ?>
<p class="lede">When static pressure rises in an air handler that used to run normally, something in the system has added resistance since it was balanced. The usual causes, in order of likelihood, are loaded filters, dirty coils, dampers that have closed or failed, and blockages in ducts or terminals. Measure pressure across each component to find where the extra drop is, rather than guessing.</p>

<h2>Confirm the symptom first</h2>
<p>"High static" alarms can come from several things, so start by establishing what is actually high:</p>
<ul>
<li><strong>Fan total or external static</strong> above its usual value at the same speed and airflow.</li>
<li><strong>Duct static pressure</strong> above setpoint, with the fan unable to reduce it.</li>
<li><strong>High static safety trips</strong> on the supply or return side.</li>
<li><strong>Fan speed or power</strong> creeping up over weeks at constant load, while static stays at setpoint.</li>
</ul>
<p>Compare current readings with the TAB report or startup report. Those documents record pressure across each component at design airflow and are the reference for this whole process. If the unit is new and static has always been high, the cause is more likely a design or installation mismatch; that case is covered in <a href="<?= url('guides/existing-duct-static-mismatch') ?>">existing duct static mismatch</a>.</p>

<h2>Build a static pressure profile</h2>
<p>Take static pressure readings at the inlet and outlet of each major component with the fan at a known speed: outdoor air and return dampers, mixing box, prefilters, final filters, coils, energy recovery device, fan inlet and fan discharge. Most custom units have test ports; otherwise drill and plug small holes. Subtract readings to get each component's pressure drop and compare with the design or TAB values.</p>
<p class="note">Pressure drops scale roughly with the square of airflow. If airflow is now lower than design, scale the design drops down before comparing: a component at 80 percent of design airflow should show about 64 percent of its design drop.</p>

<h2>Symptom: high drop across the filter bank</h2>
<p><strong>Cause:</strong> filters loaded beyond their change point; wrong filters installed (higher efficiency or shallower depth than designed); filters wet from carryover or humidifier spray; bag filters collapsed.</p>
<p><strong>Check:</strong> filter gauge reading versus change point; filter labels against schedule; look for wet media.</p>
<p><strong>Fix:</strong> replace filters; install the scheduled type; resolve any water source. Filter loading behaviour itself, including filters that load unusually fast, is a filtration topic.</p>

<h2>Symptom: high drop across a coil</h2>
<p><strong>Cause:</strong> dirt and lint on the entering face, often from filter bypass; fins flattened by previous cleaning; frost or ice on a preheat or heat recovery coil in winter.</p>
<p><strong>Check:</strong> flashlight inspection of both faces; compare with design wet-coil drop for cooling coils in summer, since wet coils show higher drop than dry.</p>
<p><strong>Fix:</strong> clean the coil using appropriate <a href="<?= url('guides/coil-cleaning-methods') ?>">coil cleaning methods</a>; straighten fins; correct filter bypass so it does not recur.</p>

<h2>Symptom: high drop at dampers or the mixing section</h2>
<p><strong>Cause:</strong> outdoor air or return damper failed partly closed; linkage slipped so the damper does not open fully; actuator failed; minimum outdoor air damper closed with economizer damper locked shut; intake screens or louvres blocked by leaves, snow, ice or bird nests.</p>
<p><strong>Check:</strong> watch the damper blades while commanding them open; compare actual position with the BAS command; inspect intake screens from outside.</p>
<p><strong>Fix:</strong> free and re-stroke dampers; repair actuators and linkages; clean screens. Mechanical damper failures are diagnosed in <a href="<?= url('guides/damper-failure-troubleshooting') ?>">troubleshooting damper linkage, actuator and seal failures</a>.</p>

<h2>Symptom: high external static, unit components normal</h2>
<p>When every internal component is close to its design drop but the pressure at the unit's discharge is high, the extra resistance is in the duct system.</p>
<table>
<thead><tr><th>Possible cause</th><th>How to check</th><th>Fix</th></tr></thead>
<tbody>
<tr><td>Fire or smoke damper closed</td><td>Inspect accessible dampers; check fire alarm status and fusible links</td><td>Reset and test the damper</td></tr>
<tr><td>Manual balancing dampers moved</td><td>Compare marked positions with TAB records</td><td>Restore balanced positions</td></tr>
<tr><td>VAV boxes failed closed or controls lost</td><td>Review terminal unit positions on the BAS</td><td>Repair controllers or actuators</td></tr>
<tr><td>Duct collapse or obstruction</td><td>Pressure readings along the main duct; look for a sudden drop</td><td>Repair duct; remove debris</td></tr>
<tr><td>Return path blocked</td><td>Check return grilles, transfer ducts, ceiling plenum openings</td><td>Clear the return path</td></tr>
<tr><td>Duct static setpoint raised</td><td>Check BAS history for setpoint changes</td><td>Restore setpoint or reinstate reset logic</td></tr>
</tbody>
</table>

<h2>Effects of running with high static</h2>
<p>Higher static with a constant-speed fan reduces airflow; with a VFD-controlled fan it raises speed and power. Either way, energy use rises, and fans may move toward the unstable part of their curve where surge and noise occur. Casing panels and doors are stressed, and duct leakage increases. Doors on high-negative sections become hard to open. Fixing the cause promptly usually pays for itself quickly in fan energy.</p>
<p class="warn">Do not raise the high static safety setpoint to stop nuisance trips. The safety protects ducts and the casing; find out why pressure is high.</p>

<h2>Preventing recurrence</h2>
<ul>
<li>Trend filter and coil pressure drops on the BAS, not just alarms.</li>
<li>Mark balancing damper positions and lock them after TAB.</li>
<li>Inspect intakes after storms and in autumn leaf season.</li>
<li>Include fire and smoke damper testing in the maintenance program.</li>
</ul>
<?php guide_end([
    ['What causes high static pressure in an air handler?', 'In an operating unit, the most common causes are loaded or wrong filters, dirty coils, dampers that have failed partly closed, blocked intake screens and closed fire or balancing dampers in the duct system.'],
    ['How do I find where high static pressure is coming from?', 'Measure static pressure before and after each component at a known fan speed, calculate each pressure drop and compare it with the TAB or design values. The component with the excess drop is the problem.'],
    ['Can high static pressure damage an AHU?', 'Yes. It raises fan energy use, can push fans into unstable operation, stresses casing panels and doors, increases duct leakage and can trip safety limits. Find and fix the cause rather than adjusting the safety setpoint.'],
]);
