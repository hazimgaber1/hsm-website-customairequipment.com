<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('disconnects-and-vfd-placement'); ?>
<p class="lede">Place a disconnecting means within sight of each motor and its controller, or provide a lockable disconnect where the code allows that alternative. Put VFDs where they stay within their temperature and enclosure ratings, outside the airstream if possible, close enough to keep motor leads short, and with the working space the code requires in front of them. On VFD outputs, any motor disconnect needs an early-break contact to the drive.</p>

<h2>What the codes are trying to achieve</h2>
<p>Disconnect rules exist so a person working on a motor or its driven equipment can open the circuit and know it stays open. "Within sight" means the person at the motor can see the disconnect and nobody can close it unnoticed. In the US, the NEC (Article 430) covers motor disconnects and defines within sight as visible and not more than 50 ft (15 m) away. In Canada, the Canadian Electrical Code, CSA C22.1, Section 28, has comparable within-sight requirements with its own distance limit and conditions. Both codes allow alternatives, such as a disconnect that can be locked in the open position, under specific conditions. Check the edition adopted in your jurisdiction and any local amendments before relying on an exception.</p>

<h2>Step-by-step placement</h2>
<ol>
<li><strong>List every motor and controller.</strong> Supply and return fans, array motors, energy recovery wheel drives, pumps, compressors, humidifier blowers and damper motors where they are power-rated. For each motor, identify its controller: a VFD, a starter, an EC motor's integral electronics, or a contactor in a control panel.</li>
<li><strong>Place the disconnect for each controller.</strong> A disconnecting means must open the supply to the controller. Where the VFD is the controller, this is typically a fused disconnect or circuit breaker ahead of the drive, often integral to the drive package or to a unit-mounted panel.</li>
<li><strong>Check line of sight from controller to motor.</strong> If the motor is within sight of the controller's disconnect, one device can often serve both. In an air handler, the fan motor is often hidden inside the casing, so "within sight" must be judged from the point where someone would work on the motor, typically at the open access door.</li>
<li><strong>Add a local disconnect where line of sight fails.</strong> If the controller is remote, such as a VFD in an electrical room, provide a disconnect within sight of the motor, unless the controller's disconnect is lockable and the code exception applies.</li>
<li><strong>Coordinate disconnects on VFD outputs.</strong> A local disconnect between a VFD and its motor must not be opened while the drive is running. Provide an early-break auxiliary contact, wired to the drive's enable or safe-stop input, so the drive stops before the main contacts open. Many drive manufacturers specify this.</li>
<li><strong>Locate the VFD.</strong> Follow the criteria below.</li>
<li><strong>Allow working space</strong> in front of drives, panels and disconnects as the code requires; the dimensional requirements are in <a href="<?= url('guides/electrical-working-clearances') ?>">electrical working clearances</a>.</li>
<li><strong>Label everything.</strong> Each disconnect identifies the motor or equipment it serves; each motor's location references its disconnect.</li>
</ol>

<h2>Criteria for VFD location</h2>
<table>
<thead><tr><th>Location</th><th>Advantages</th><th>Watch for</th></tr></thead>
<tbody>
<tr><td>Mounted on the AHU exterior, factory wired</td><td>Short motor leads; factory tested with the unit; single point connection possible</td><td>Ambient at the unit; outdoor rating and sun exposure; working space in front</td></tr>
<tr><td>Inside the AHU, in a dedicated electrical compartment outside the airstream</td><td>Protected from weather; short leads</td><td>Compartment cooling; condensation; access door and clearance</td></tr>
<tr><td>Inside the airstream</td><td>Drive cooled by air; compact</td><td>Humidity, condensation and contamination; very high enclosure rating needed; service requires unit access</td></tr>
<tr><td>Remote in an electrical room</td><td>Clean, conditioned environment; easy access</td><td>Long motor leads, reflected wave, local motor disconnect required</td></tr>
<tr><td>Wall-mounted in the mechanical room</td><td>Accessible; moderate lead length</td><td>Room temperature in summer; field wiring and coordination</td></tr>
</tbody>
</table>
<p>Long leads between a remote drive and its motor can cause voltage overshoot at the motor and drive trips from cable charging current; see <a href="<?= url('guides/vfd-cable-length-reflected-wave') ?>">long VFD cable runs and reflected wave</a>. Enclosure ratings for each location are compared in <a href="<?= url('guides/vfd-enclosure-types-nema') ?>">VFD enclosure types</a>.</p>

<h2>Fan arrays and multi-motor units</h2>
<p>An array of twelve fans multiplies the disconnect question by twelve. Common approaches:</p>
<ul>
<li><strong>One VFD per fan, mounted together in a unit panel</strong> with an individual disconnect or breaker for each drive. Motors are usually within sight of the panel through the access door.</li>
<li><strong>Individual local disconnects on each fan,</strong> inside the fan section, each with an early-break contact. Useful when the panel is not visible from the fans.</li>
<li><strong>Lockable branch devices in the panel,</strong> where the code exception for lockable disconnects applies.</li>
</ul>
<p>For EC motors, the integral electronics are the controller. A disconnect in the motor's supply branch, within sight of the motor or lockable, serves both.</p>
<p class="note">The disconnect for an energy recovery wheel motor, humidifier or electric heater must also be addressed; these are frequently missed on multi-section units.</p>

<h2>Single point power connection</h2>
<p>Many custom AHUs are built with a single point power connection: one main disconnect on the unit feeding a factory-wired distribution panel for all motors, drives and accessories. This simplifies field wiring and places all disconnects in one location. The panel must be listed for the purpose; requirements are covered in <a href="<?= url('guides/ul-508a-csa-listed-control-panels') ?>">UL 508A and CSA listed control panels</a>.</p>

<h2>Common inspection findings</h2>
<ul>
<li>No disconnect within sight of a fan motor hidden inside a casing, with the VFD in another room.</li>
<li>Local disconnect on a VFD output with no auxiliary contact to the drive.</li>
<li>Disconnect mounted where the access door blocks the working space when open.</li>
<li>Drive mounted in direct sun on an outdoor unit with no shading or derating.</li>
<li>Disconnect not lockable where the design relies on the lockable exception.</li>
</ul>
<?php guide_end([
    ['Does every fan motor need a disconnect within sight?', 'Generally yes, either a disconnect within sight of the motor or, where the code allows, a disconnect at the controller that can be locked open. Check the NEC or CEC edition adopted locally for the exact conditions.'],
    ['What does within sight mean in the NEC?', 'The NEC defines within sight as visible and not more than 50 ft away. The Canadian Electrical Code has a comparable requirement with its own distance and conditions.'],
    ['Can I put a disconnect between a VFD and the motor?', 'Yes, but it should have an early-break auxiliary contact wired to the drive, so the drive stops before the disconnect opens. Opening the circuit under load can damage the drive.'],
    ['Where is the best place to mount a VFD on an AHU?', 'Usually on the unit exterior or in a dedicated electrical compartment outside the airstream, which keeps motor leads short. The location must respect the drive\'s temperature, enclosure and working space requirements.'],
]);
