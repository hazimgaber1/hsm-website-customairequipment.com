<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('smoke-control-sequences'); ?>
<p class="lede">During a fire, an air handler does one of three things: it shuts down to stop spreading smoke, it supplies air to pressurize spaces that must stay clear, or it exhausts smoke from the fire zone. Which role it plays is set by the building's fire protection design, and the controls must override normal operation reliably, respond to the firefighter's smoke control panel, and prove that fans and dampers did what they were commanded.</p>

<h2>Three possible roles</h2>
<h3>Shutdown</h3>
<p>The simplest response. On a signal from a duct smoke detector, the fire alarm system, or both, the AHU's supply and return fans stop and associated smoke dampers close. The goal is to keep the HVAC system from carrying smoke from the fire area to the rest of the building. Many units that are not part of an engineered smoke control system have only this function. The detector and damper requirements behind it are code topics covered in <a href="<?= url('guides/nfpa-90a-smoke-detectors-dampers') ?>">NFPA 90A smoke detectors and dampers</a>.</p>
<h3>Pressurization</h3>
<p>In an engineered smoke control system, some AHUs or dedicated fans supply outdoor air to spaces that must stay smoke-free, creating a pressure difference that keeps smoke out. Examples include stairwell pressurization, elevator hoistway pressurization and zoned smoke control, where floors adjacent to the fire floor are pressurized while the fire floor is exhausted. In this mode the unit typically runs with 100 percent outdoor air, return closed, and fixed or pressure-controlled fan speed.</p>
<h3>Smoke exhaust</h3>
<p>Here the system removes smoke from the fire zone. A return or exhaust fan, sometimes the AHU's own return or relief fan, runs with dampers positioned to pull air from the fire zone and discharge it outdoors. Atria and large-volume spaces often use dedicated smoke exhaust systems sized to keep the smoke layer above occupied levels. Supply to the fire zone is usually stopped or limited so as not to feed the fire or disturb the smoke layer.</p>

<h2>Dedicated and non-dedicated systems</h2>
<table>
<thead><tr><th>Feature</th><th>Dedicated smoke control system</th><th>Non-dedicated system (uses normal HVAC)</th></tr></thead>
<tbody>
<tr><td>Normal function</td><td>Idle except during smoke control or testing</td><td>Normal HVAC most of the time</td></tr>
<tr><td>Examples</td><td>Stair pressurization fans, atrium exhaust fans</td><td>Floor-by-floor AHUs used for zoned pressurization and exhaust</td></tr>
<tr><td>Fault awareness</td><td>Failures may go unnoticed between tests, so periodic automatic testing is typically required</td><td>Failures usually noticed in daily operation</td></tr>
<tr><td>Controls complexity</td><td>Simpler, single purpose</td><td>Must override every normal sequence and mode</td></tr>
</tbody>
</table>
<p>The applicable standards, commonly NFPA 92 for smoke control systems alongside the building code and local fire authority requirements, set testing and documentation requirements. Check the editions adopted in your jurisdiction.</p>

<h2>Priority and override</h2>
<p>Smoke control commands must take precedence over normal HVAC logic. A typical priority hierarchy, highest first:</p>
<ol>
<li><strong>Firefighter's smoke control station (FSCS)</strong> manual commands. Firefighters can turn individual fans on or off and open or close dampers, overriding everything else.</li>
<li><strong>Automatic smoke control</strong> sequences triggered by the fire alarm system for the zone in alarm.</li>
<li><strong>Life-safety shutdown</strong> from duct detectors where the unit is not part of smoke control.</li>
<li><strong>Normal BAS operation</strong>, including schedules, resets and operator overrides.</li>
</ol>
<p>Equipment that performs smoke control functions, including the controllers and interfaces, generally needs to be listed for that purpose; UL 864 smoke control system listing (category UUKL) is a common requirement in North America. Not every BAS controller is listed, so an AHU's factory controller may need to hand smoke control functions to a listed system through hardwired or listed interfaces.</p>
<p class="note">On BACnet systems, the command priority array is often used to place smoke control commands at a higher priority than normal operation. That works only if every device involved respects the priorities and the controllers are listed for the purpose.</p>

<h2>What happens inside the AHU in each mode</h2>
<table>
<thead><tr><th>Component</th><th>Shutdown</th><th>Pressurization</th><th>Smoke exhaust</th></tr></thead>
<tbody>
<tr><td>Supply fan</td><td>Off</td><td>On, fixed speed or pressure control</td><td>Off or reduced, per design</td></tr>
<tr><td>Return / exhaust fan</td><td>Off</td><td>Off or relief as designed</td><td>On</td></tr>
<tr><td>Outdoor air damper</td><td>Closed</td><td>Open</td><td>Per design</td></tr>
<tr><td>Return damper</td><td>Closed</td><td>Closed</td><td>Closed</td></tr>
<tr><td>Exhaust / relief damper</td><td>Closed</td><td>Per design</td><td>Open</td></tr>
<tr><td>Smoke dampers</td><td>Closed</td><td>Open to pressurized zones</td><td>Open to fire zone exhaust path</td></tr>
<tr><td>Heating and cooling</td><td>Off</td><td>Often disabled; tempering may be allowed</td><td>Off</td></tr>
</tbody>
</table>

<h2>Safeties during smoke control</h2>
<p>Normal safeties can conflict with smoke control. A freeze-stat that stops the fan when 100 percent cold outdoor air is drawn in would defeat stair pressurization in winter. Designs address this explicitly:</p>
<ul>
<li>Decide which safeties remain active in smoke control mode. High static pressure limits that protect ductwork from rupture are usually retained; freeze protection may be overridden by design.</li>
<li>VFDs often have a fire or override mode that ignores certain faults and runs at a fixed speed. Configure and test it.</li>
<li>Fan array units should keep running with as many fans as possible; a single fan fault should not stop the unit.</li>
<li>Document every safety's status in each smoke control mode in the sequence of operation.</li>
</ul>
<p>How the low-limit safety normally works is described in <a href="<?= url('guides/low-limit-freeze-stat-sequences') ?>">low-limit freeze-stat sequences</a>.</p>

<h2>Proof and verification</h2>
<p>Smoke control systems must confirm that commanded actions happened. Typical proof includes fan status from airflow or pressure switches (not just motor current), damper position from end switches, and pressure differences across barriers in pressurization systems. Failure of proof generates a trouble signal at the FSCS.</p>
<p>Testing during commissioning normally involves the fire protection engineer, the controls contractor, the fire alarm contractor and the authority having jurisdiction. Writing smoke modes clearly into the AHU sequence is discussed in <a href="<?= url('guides/writing-ahu-sequence-of-operation') ?>">how to write a sequence of operation</a>.</p>
<?php guide_end([
    ['What does an air handler do in fire mode?', 'Depending on the building\'s fire protection design, it either shuts down, supplies outdoor air to pressurize protected spaces, or exhausts smoke from the fire zone. The fire alarm system or firefighter\'s smoke control station triggers the mode.'],
    ['What is a firefighter\'s smoke control station?', 'It is a panel, usually at the fire command centre, that lets firefighters manually control smoke control fans and dampers. Its commands override automatic smoke control and normal HVAC operation.'],
    ['Should the freeze-stat stop the fan during smoke control?', 'Not necessarily. Many designs override freeze protection in smoke control modes so pressurization is not lost, while keeping high static pressure safeties active. The decision must be documented and approved.'],
]);
