<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('vfd-bypass-vs-redundant-drive'); ?>
<p class="lede">An across-the-line bypass keeps a fan running at full speed if its VFD fails, cheaply, but with no speed control and a hard start. A redundant drive keeps speed control by switching to a second VFD. A fan array with one drive per fan builds redundancy into the fan system itself. The right choice depends on whether the system can tolerate full-speed operation and how critical continuous control is.</p>

<h2>The problem each option solves</h2>
<p>A VFD is an electronic device with fans, capacitors and semiconductors, and it can fail. On a single-fan air handler, a failed drive stops the fan. Bypass and redundancy schemes keep air moving while the drive is repaired or replaced. They also allow drive maintenance without a shutdown.</p>

<h2>Across-the-line bypass</h2>
<p>A bypass package adds contactors so the motor can be connected directly to line power, skipping the drive. The common arrangements are:</p>
<ul>
<li><strong>Two-contactor bypass:</strong> a bypass contactor and a drive output contactor, so the motor runs on either source.</li>
<li><strong>Three-contactor bypass:</strong> adds a drive input contactor or disconnect, so the drive can be fully isolated and serviced while the motor runs in bypass.</li>
<li><strong>Soft-start bypass:</strong> a reduced-voltage soft starter in the bypass path limits inrush and torque on transfer.</li>
</ul>
<p>In bypass, the motor runs at full speed. On a VAV system, that means maximum airflow and pressure whatever the zone demand. Ductwork, terminal units and dampers must tolerate it; high static pressure safeties must be in the bypass control circuit; and the controls must be able to cycle the fan or modulate other devices to avoid overpressurizing the system. Across-the-line starting also draws high inrush current, which the electrical system and the emergency generator, if any, must handle.</p>

<h2>Redundant drive</h2>
<p>A redundant scheme provides two VFDs for one motor, with contactors so either drive can run the motor. If the running drive faults, the controls transfer to the standby drive, and the fan resumes under speed control. The approach costs more and takes more panel space than a bypass, but it maintains normal operation, including soft starting and VAV control. Some schemes run the drives alternately to balance wear and prove the standby drive.</p>

<h2>Inherent redundancy in fan arrays</h2>
<p>A fan array with one drive or one EC motor per fan has no single drive whose failure stops the unit. A failed drive takes out only its own fan; the others speed up to compensate if the array has spare capacity. No bypass contactors or transfer logic are needed, and the system keeps full speed control throughout. The trade-off is more drives in total, and redundancy still depends on how many fans can be lost while meeting airflow. Drive architectures for arrays are compared in <a href="<?= url('guides/single-vfd-vs-vfd-per-motor-fan-array') ?>">one VFD per fan vs a common VFD</a>.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Across-the-line bypass</th><th>Redundant drive</th><th>Array with drive per fan</th></tr></thead>
<tbody>
<tr><td>Speed control after drive failure</td><td>None; full speed only</td><td>Full</td><td>Full, on remaining fans</td></tr>
<tr><td>Starting after failure</td><td>Full-voltage inrush unless soft-start bypass</td><td>Soft start by drive</td><td>Soft start by drives</td></tr>
<tr><td>Risk to ductwork and terminals</td><td>Overpressure possible in VAV systems</td><td>None beyond normal</td><td>None beyond normal</td></tr>
<tr><td>Airflow after failure</td><td>Maximum</td><td>Design</td><td>Design if array is redundant; otherwise reduced</td></tr>
<tr><td>Panel space and cost</td><td>Low to moderate</td><td>High</td><td>Cost spread across many drives</td></tr>
<tr><td>Single points of failure remaining</td><td>Motor, bypass contactor, feeder</td><td>Motor, transfer contactors, feeder</td><td>Feeder and common controls</td></tr>
<tr><td>Generator impact</td><td>Inrush on transfer</td><td>None beyond normal</td><td>None beyond normal</td></tr>
<tr><td>Typical use</td><td>Constant volume systems, general commercial</td><td>Critical single-fan units</td><td>Critical facilities with fan arrays</td></tr>
</tbody>
</table>

<h2>Practical design points for bypass</h2>
<ul>
<li>Motor overload protection must remain active in bypass. Drives provide electronic overload in drive mode; the bypass needs its own overload relay.</li>
<li>Life-safety interlocks, such as smoke detector shutdown, freezestats and high static safeties, must be hardwired so they act in both drive and bypass modes.</li>
<li>Bypass operation should generate an alarm at the building automation system so it is not left running indefinitely.</li>
<li>Check motor rotation in bypass at startup. A VFD can correct rotation in software; the bypass cannot, so phase rotation must be right at the motor leads.</li>
<li>Smoke control fans may have specific requirements for bypass under the applicable code and listing; check the edition adopted locally.</li>
</ul>
<p class="note">Many hospitals and data centres now favour fan arrays with individual drives over bypass, because full-speed operation of a large supply fan can cause more problems than a short airflow reduction.</p>

<h2>Choosing an approach</h2>
<ol>
<li>Ask whether the system can tolerate full-speed operation. If not, bypass needs extra controls or is the wrong choice.</li>
<li>Check the generator and electrical capacity for across-the-line inrush.</li>
<li>For single-fan critical units, compare the cost of a redundant drive with the cost of converting to a fan array.</li>
<li>For arrays, decide on the drive architecture first; bypass is usually unnecessary.</li>
<li>Coordinate the enclosure and location for drives and bypass with <a href="<?= url('guides/disconnects-and-vfd-placement') ?>">disconnect and VFD placement</a> requirements.</li>
</ol>
<?php guide_end([
    ['What is a VFD bypass?', 'A VFD bypass is a set of contactors that lets the motor run directly from line power if the drive fails or is being serviced. The motor then runs at full speed with no speed control.'],
    ['Is a VFD bypass safe on a VAV system?', 'Only with precautions. Full-speed operation can overpressurize ductwork and terminals, so high static safeties and control measures must work in bypass mode.'],
    ['What is the difference between a two-contactor and three-contactor bypass?', 'A three-contactor bypass adds an input contactor or disconnect for the drive, so the drive can be fully isolated and serviced while the motor runs in bypass.'],
    ['Do fan arrays need a VFD bypass?', 'Usually not. With one drive or EC motor per fan, a single drive failure only affects one fan, and the remaining fans keep running under speed control.'],
]);
