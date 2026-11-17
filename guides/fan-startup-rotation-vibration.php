<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-startup-rotation-vibration'); ?>
<p class="lede">Start an air handler fan by bumping it briefly to check direction of rotation, then bringing it up gradually while listening and watching, and finally recording speed, amps, and vibration at bearings and motor as a baseline. These numbers become the reference for every future maintenance and troubleshooting visit.</p>

<h2>Step 1: Prepare for the first bump</h2>
<ol>
<li>Confirm the pre-startup checklist is complete, especially that the fan turns freely by hand, shipping restraints are removed, and dampers are proven open.</li>
<li>Clear everyone out of the unit. Close and latch every access door. Fan sections under strong negative or positive pressure can swing doors violently.</li>
<li>Set the VFD or EC controller to a low speed for the first run, such as 20 to 30 percent, if the drive allows. Fans on across-the-line starters cannot do this, so make the bump very short.</li>
<li>Station one person where the shaft or wheel rotation can be seen safely through a viewing window or from the inlet side, and one at the drive or starter.</li>
<li>Have a phone or radio link between them.</li>
</ol>

<h2>Step 2: Bump and verify rotation</h2>
<ol>
<li>Start the fan for a second or two, then stop it.</li>
<li>As it coasts down, observe the wheel. Compare the direction with the rotation arrow on the fan housing or motor. For centrifugal and plenum fans, the backward-inclined or airfoil blades should be moving with their heel leading and the tip trailing; the arrow is the authority.</li>
<li>If rotation is wrong on a VFD-driven motor, change direction in the drive parameters or swap two output leads at the drive with power locked out. On across-the-line motors, swap two supply leads at the motor starter output.</li>
<li>For fan arrays, check every fan individually. One reversed fan in an array of eight may only cut airflow slightly yet will run inefficiently and recirculate air.</li>
<li>For EC motors, direction is set in the motor electronics or by wiring; follow the motor manufacturer's procedure.</li>
</ol>
<p class="warn">A centrifugal fan running backwards still moves some air in the right direction, at much reduced flow and higher noise. Never confirm rotation by "feeling for airflow". Look at the wheel.</p>

<h2>Step 3: Ramp to speed in stages</h2>
<ol>
<li>Run at low speed for several minutes. Listen for rubbing, rattles, belt squeal or bearing noise.</li>
<li>Check that the internal spring base floats freely and does not shift excessively on starting. Large movement at start can indicate thrust restraints need adjusting.</li>
<li>Increase speed in steps, for example 25, 50, 75 and 100 percent of design speed, pausing at each step. Note any speed where vibration or noise rises sharply; it may be a structural resonance that needs a skip frequency in the drive.</li>
<li>Monitor duct static pressure. If ductwork or VAV boxes are not yet controlling, a fan at full speed can overpressurize the system.</li>
<li>Check motor amps against nameplate full-load amps at each step. Amps above nameplate at design speed point to a system or selection problem; stop and investigate.</li>
</ol>

<h2>Step 4: Record speed and electrical baseline</h2>
<p>Once at design speed and steady, record:</p>
<table>
<thead><tr><th>Reading</th><th>How</th></tr></thead>
<tbody>
<tr><td>Fan speed, rpm</td><td>Optical tachometer on the shaft, or drive output frequency and the motor nameplate slip for direct-drive units</td></tr>
<tr><td>Motor speed and frequency</td><td>Drive display or tachometer</td></tr>
<tr><td>Voltage and current per phase</td><td>True-RMS clamp meter on the motor side; drive display as a cross-check</td></tr>
<tr><td>Static pressures</td><td>Fan inlet and outlet, and across filters and coils if ports exist</td></tr>
<tr><td>Bearing temperatures</td><td>Infrared thermometer after one hour of running; repeat as bearings settle</td></tr>
</tbody>
</table>
<p class="note">Bearings commonly run warm for the first hours as grease distributes. A steady temperature that is not climbing is normal; a temperature still climbing after an hour or two needs investigation.</p>

<h2>Step 5: Measure baseline vibration</h2>
<ol>
<li>Use a vibration meter or analyzer that reads velocity, in in/s (mm/s), across the fan's normal frequency range.</li>
<li>Take readings on each fan bearing housing in three directions: horizontal, vertical and axial. Do the same at the motor bearings.</li>
<li>Mark the exact measurement points with paint or a stick-on target so future readings are taken in the same places.</li>
<li>Record readings at design speed, and for variable-speed fans also at minimum and an intermediate speed.</li>
<li>Compare with the acceptance limits in the project specification. Fan industry guidance such as AMCA 204 and ISO 14694 sets limits by fan application category and by rigid or flexible mounting; check the edition referenced in your specification.</li>
<li>If readings exceed the limits, stop, inspect, and diagnose before releasing the unit.</li>
</ol>
<p>Balancing grades applied at the factory are explained in <a href="<?= url('guides/fan-balance-grades-iso-21940') ?>">fan balance grades and ISO 21940</a>, and severity zones for interpreting readings are in <a href="<?= url('guides/vibration-severity-iso-10816') ?>">vibration severity and ISO 10816</a>.</p>

<h2>Step 6: Keep the baseline</h2>
<p>Put all readings on a startup report with date, operating conditions and instrument used. Hand a copy to the owner's maintenance staff and enter it into their maintenance system. Future trending depends on comparing like with like, which is why measurement location and fan speed matter as much as the number itself. If the fan will not start, trips, or behaves oddly at this stage, go to <a href="<?= url('guides/startup-problems-troubleshooting') ?>">troubleshooting common AHU startup problems</a>.</p>
<?php guide_end([
    ['How do I check if a plenum fan is rotating in the right direction?', 'Bump the fan briefly and watch the wheel as it coasts down, comparing its direction with the rotation arrow on the fan or motor. Do not judge by airflow, because a reversed centrifugal fan still moves some air forward.'],
    ['Where should I take baseline vibration readings on a fan?', 'On each fan and motor bearing housing, in the horizontal, vertical and axial directions. Mark the exact points so later readings are taken in the same spots for meaningful trending.'],
    ['How do I reverse a fan motor on a VFD?', 'Change the direction setting in the drive, or with power locked out swap any two of the three output leads between the drive and motor. Do not swap the drive\'s input leads, since that does not change motor rotation.'],
]);
