<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('motor-overload-protection-multi-motor'); ?>
<p class="lede">When one VFD feeds several fan motors, the drive's built-in overload function cannot protect any single motor, so each motor needs its own overload relay suitable for variable frequency, its own branch short-circuit protection coordinated with the drive, and properly sized conductors. Wire the overload contacts back to the drive or controls so a trip is acted on, and handle local disconnects so they never open under load.</p>

<h2>Why the drive cannot do the job</h2>
<p>A VFD's electronic overload estimates motor temperature from the current it delivers, using one motor's nameplate data. With six motors on its output, the drive sees the sum of their currents. One motor with a seized bearing might draw twice its rated current while the others run normally, and the total would still look acceptable to the drive. That motor would overheat unprotected.</p>
<p>The NEC (Article 430) in the US and the Canadian Electrical Code (CSA C22.1, Section 28) both require overload protection for each motor. When several motors share a drive, that means individual devices. Check the edition of each code adopted in your jurisdiction for the exact provisions that apply to multiple motors on a single adjustable-speed drive.</p>

<h2>Step-by-step method</h2>
<ol>
<li><strong>Confirm the drive is approved for multi-motor use.</strong> Check the drive manufacturer's instructions. Many require a particular control mode (usually volts-per-hertz rather than sensorless vector), restrict switching on the output side and specify maximum combined cable length. Size the drive for the sum of motor full-load currents plus any margin the manufacturer requires; sizing is covered in <a href="<?= url('guides/vfd-sizing-for-fan-motors') ?>">how to size a VFD for fan motors</a>.</li>
<li><strong>Choose an overload relay for each motor.</strong> The relay must work correctly on the drive's output frequency range. Thermal bimetallic and many electronic overload relays are suitable, but some electronic relays use current transformers or sensing methods that lose accuracy at low frequency. Use a relay the manufacturer states is suitable for VFD output and the minimum frequency the fans will run at.</li>
<li><strong>Set each overload</strong> to the motor's nameplate full-load current, applying the code adjustments for service factor and temperature rise as permitted. Do not set to the drive's current or a table value.</li>
<li><strong>Provide branch short-circuit and ground-fault protection.</strong> Each motor branch on the drive output needs a protective device sized for that branch, typically fuses or a listed manual motor protector or combination device. Follow the drive manufacturer's guidance on device type; fast-acting fuses are common because the drive's own output short-circuit protection acts very quickly.</li>
<li><strong>Size conductors for each branch</strong> from that motor's current, with the usual code multipliers, and the main output conductors from the combined current.</li>
<li><strong>Add motor thermal protection</strong> where motors run at low speed for long periods. Winding thermistors or thermostats complement the overload relay, because a self-cooled motor has less cooling at low speed than the overload model assumes.</li>
<li><strong>Wire overload auxiliary contacts.</strong> Decide what happens on a trip. Options are: stop the drive (all fans stop), or alarm only and let the remaining fans run. For redundancy, alarm-only is usually preferred, with the controls increasing speed to compensate. Either way, bring the trip to the building automation system.</li>
<li><strong>Handle local disconnects correctly.</strong> If each motor has a local disconnect on the drive output, fit early-break auxiliary contacts that tell the drive to stop or to inhibit before the main contacts open. Opening a motor circuit under load on a drive output can damage the drive and the switch. Placement of disconnects is in <a href="<?= url('guides/disconnects-and-vfd-placement') ?>">how to locate disconnects and VFDs</a>.</li>
<li><strong>Define the restart procedure.</strong> A motor whose overload has tripped cannot usually be put back on line while the drive is at speed. Document that the drive must be stopped and all motors restarted together from zero.</li>
<li><strong>Label and test.</strong> Label each overload and protective device with the motor it serves and its setting. At startup, test each overload trip function and confirm the controls response.</li>
</ol>

<h2>Worked example</h2>
<p>A fan array has six 5 hp, 460 V, 1,750 rpm motors on one drive. Each motor nameplate shows 6.9 A full-load current and a service factor of 1.15.</p>
<table>
<thead><tr><th>Item</th><th>Value</th><th>Note</th></tr></thead>
<tbody>
<tr><td>Combined motor current</td><td>6 × 6.9 = 41.4 A</td><td>Drive normal duty output must cover this after derating</td></tr>
<tr><td>Overload setting per motor</td><td>Based on 6.9 A nameplate</td><td>Apply code adjustment for 1.15 service factor if permitted</td></tr>
<tr><td>Branch protection per motor</td><td>Per drive manufacturer and code for a 6.9 A motor</td><td>Device type as drive manufacturer recommends</td></tr>
<tr><td>Branch conductors</td><td>Sized from 6.9 A with code multiplier</td><td>Usually the minimum conductor size in the panel</td></tr>
<tr><td>Output feeder from drive</td><td>Sized from 41.4 A combined</td><td>With code multiplier for the largest motor</td></tr>
</tbody>
</table>
<p class="note">Code tables give motor currents for conductor sizing, but overload relays are always set from the actual nameplate current.</p>

<h2>Common mistakes</h2>
<ul>
<li>Relying on the drive's overload setting for several motors.</li>
<li>Using an overload relay not rated for low output frequency.</li>
<li>Omitting short-circuit protection on each motor branch.</li>
<li>Wiring overload contacts to nothing, so trips go unnoticed until another fan fails.</li>
<li>Installing local disconnects with no auxiliary contacts to the drive.</li>
<li>Leaving the drive in a vector mode intended for single-motor operation.</li>
</ul>
<p>Whether a common drive is the right architecture in the first place is a separate question, compared in <a href="<?= url('guides/single-vfd-vs-vfd-per-motor-fan-array') ?>">one VFD per fan vs a common VFD</a>.</p>
<?php guide_end([
    ['Do multiple motors on one VFD need separate overloads?', 'Yes. The drive\'s electronic overload sees only the combined current, so it cannot detect one overloaded motor. Each motor needs its own overload relay.'],
    ['Can I use a standard overload relay on a VFD output?', 'Many thermal and electronic overload relays work on VFD output, but some electronic relays lose accuracy at low frequency. Use a relay that its manufacturer states is suitable for variable frequency operation.'],
    ['What happens when one motor\'s overload trips on a shared VFD?', 'It depends on how the contacts are wired. Usually the trip alarms the controls, and the remaining motors keep running. Restarting the tripped motor normally requires stopping the drive and restarting all motors together.'],
    ['Can I put a disconnect between a VFD and a motor?', 'Yes, but it should have an early-break auxiliary contact that stops or inhibits the drive before the main contacts open, to avoid damage from opening under load.'],
]);
