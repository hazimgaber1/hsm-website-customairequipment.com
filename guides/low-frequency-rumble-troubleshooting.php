<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('low-frequency-rumble-troubleshooting'); ?>
<p class="lede">Rumble from an air handler is broadband noise concentrated roughly between 16 and 125 Hz, usually caused by turbulent airflow leaving the fan into a poor fitting, by the fan operating in an unstable region of its curve, or by flat duct walls responding to that turbulence. Diagnose it by watching how the noise changes with airflow, speed and system pressure, then fix the airflow condition rather than adding absorption.</p>

<h2>Confirming that it is rumble</h2>
<p>Rumble is a low, irregular roar or throbbing that is often felt as much as heard. Ceiling tiles, light fixtures or windows may buzz in sympathy. It differs from two neighbouring problems:</p>
<ul>
<li><strong>A tone</strong> is a steady pitch at a definable frequency, usually blade pass. That has its own guide: <a href="<?= url('guides/fan-blade-pass-tonal-noise') ?>">fan blade pass frequency and tonal noise</a>.</li>
<li><strong>Mechanical vibration</strong> appears at running speed and its multiples and is measured at bearings; see <a href="<?= url('guides/vibration-troubleshooting') ?>">troubleshooting AHU vibration</a>.</li>
</ul>
<p>An octave or one-third-octave sound measurement will show rumble as elevated levels at 31.5, 63 and 125 Hz with no single sharp peak. If a sound meter shows modest dBA but people complain, look at the unweighted low bands; A-weighting hides exactly this kind of noise.</p>

<h2>Symptom: rumble from duct near the unit, worse at high airflow</h2>
<p><strong>Cause:</strong> turbulence from fan discharge into an abrupt fitting. A fan discharge has a non-uniform velocity profile for some distance downstream. If that air immediately hits an elbow, a sudden expansion, a branch takeoff or a damper, large turbulent eddies form and generate low-frequency noise. This is the same mechanism that causes system effect losses.</p>
<p><strong>Checks:</strong></p>
<ol>
<li>Measure the distance from fan outlet (or plenum outlet) to the first fitting, in equivalent duct diameters.</li>
<li>Look for elbows turning against fan rotation, abrupt transitions with steep angles, and bullhead tees.</li>
<li>Calculate velocity at the fitting. High velocities through poor fittings are the classic rumble source.</li>
<li>Listen with the duct access door open, or hold a hand on the duct wall at different locations; the loudest area is usually just downstream of the bad fitting.</li>
</ol>
<p><strong>Fix:</strong> add straight duct before the first fitting where possible, use radius elbows with turning vanes, replace abrupt transitions with gradual ones, and convert bullhead tees to splits with vanes. The reasoning behind fitting placement is in <a href="<?= url('guides/system-effect-amca-201') ?>">system effect and AMCA 201</a>.</p>

<h2>Symptom: rumble that surges or pulses, worse at low airflow</h2>
<p><strong>Cause:</strong> the fan is operating to the left of the peak of its pressure curve, in or near stall. Flow separates from the blades and reattaches irregularly, producing unsteady pressure fluctuations and strong low-frequency noise. Common triggers include VAV boxes closing at low load while duct static setpoint stays high, filters loading heavily, or a fan selected too large for the actual system.</p>
<p><strong>Checks:</strong></p>
<ul>
<li>Plot the actual operating point (measured airflow and static pressure at that speed) on the fan curve.</li>
<li>Watch the duct static pressure trend for oscillation at the same time as the noise.</li>
<li>Check whether the noise disappears when more boxes open or the static setpoint is lowered.</li>
</ul>
<p><strong>Fix:</strong> lower or reset the duct static setpoint, raise the minimum airflow, or, if the fan is fundamentally oversized, reselect or re-wheel. On fan arrays, shutting off some fans at low flow can move the remaining fans back to a stable point. The broader instability topic is in <a href="<?= url('guides/fan-surge-stall-troubleshooting') ?>">fan surge and stall troubleshooting</a>.</p>

<h2>Symptom: rumble from long rectangular ducts, ceilings vibrate</h2>
<p><strong>Cause:</strong> breakout from large, flat, rectangular duct walls. Low-frequency turbulence inside drives the panels, which act like drum skins and radiate into the ceiling space. High aspect ratio ducts are the worst.</p>
<p><strong>Checks:</strong> feel for duct wall movement. Tap the duct; a drum-like sound indicates a flexible panel. Note aspect ratio and gauge.</p>
<p><strong>Fix:</strong> stiffen the duct with external reinforcement or cross-breaking; add mass with lagging; replace the first runs with round or flat oval duct; and fix the upstream turbulence source, which reduces the energy driving the walls.</p>

<h2>Symptom: rumble in the plenum or at the fan inlet</h2>
<p><strong>Cause:</strong> poor inlet conditions. Swirl from an elbow close to a housed fan inlet, a plenum fan inlet too close to a wall, or a coil discharging unevenly into a fan inlet makes the flow entering the wheel uneven. Inlet vortices can also form in plenums with inadequate depth.</p>
<p><strong>Checks:</strong> measure clearances from the fan inlet to walls and components and compare with manufacturer guidance. Smoke testing or ribbons can reveal swirl. Rumble that changes noticeably when an access door is opened suggests a plenum flow problem.</p>
<p><strong>Fix:</strong> add inlet straightening, increase plenum depth or clearance, and remove obstructions near the inlet.</p>

<h2>Symptom: rumble at a damper or VAV box</h2>
<p><strong>Cause:</strong> a damper throttling a high pressure drop creates a jet with intense turbulence downstream. Opposed-blade dampers near the fan used for balancing are frequent culprits.</p>
<p><strong>Check:</strong> measure the pressure drop across the damper. If a balancing damper is nearly closed to throttle a fan that is too fast, the noise is a symptom of excess fan speed.</p>
<p><strong>Fix:</strong> open the damper and slow the fan instead, or move throttling closer to terminals, where velocities are lower.</p>

<h2>Diagnostic summary</h2>
<table>
<thead><tr><th>Behaviour</th><th>Points to</th></tr></thead>
<tbody>
<tr><td>Rises steadily with airflow</td><td>Turbulence at fittings, high velocity</td></tr>
<tr><td>Worse at low airflow, unsteady</td><td>Fan stall or high static setpoint</td></tr>
<tr><td>Strongest at duct walls away from unit</td><td>Duct breakout</td></tr>
<tr><td>Changes with plenum door position</td><td>Inlet or plenum flow problem</td></tr>
<tr><td>Changes when one damper moves</td><td>Damper throttling noise</td></tr>
</tbody>
</table>
<p class="note">Silencers attenuate low frequencies poorly and can add regenerated noise if placed in turbulent flow. Fix the flow first; treat what remains afterward.</p>
<?php guide_end([
    ['What causes low-frequency rumble in HVAC ducts?', 'The usual causes are turbulence from fittings placed too close to the fan, fans running in stall at low airflow, flat rectangular duct walls radiating low-frequency energy, and dampers throttling large pressure drops.'],
    ['Will a duct silencer fix rumble?', 'Usually not by itself. Silencers provide limited attenuation at 63 Hz and below, and rumble is often generated downstream of where a silencer would sit. Correcting the airflow condition is more effective.'],
    ['Why does rumble get worse when the building is lightly loaded?', 'At low load, VAV boxes close and the fan can be pushed toward stall if the static setpoint stays high. Lowering or resetting the static setpoint often reduces the noise.'],
]);
