<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('factory-mounted-vs-field-installed-controls'); ?>
<p class="lede">Factory-mounted controls are installed, wired and often programmed and tested at the AHU manufacturer before shipment, which shortens field work and lets the unit run under its own controls during the factory test. Field-installed controls are supplied and installed by the site controls contractor after the unit arrives, keeping a single controls vendor across the building. The right choice depends on schedule, warranty responsibility, the owner's controls standard and who is best placed to coordinate.</p>

<h2>What each approach includes</h2>
<p><strong>Factory-mounted</strong> options range from "end devices only" to a full package:</p>
<ul>
<li><strong>Devices only:</strong> sensors, actuators and safeties mounted and wired to terminal strips; the field contractor supplies the controller and programming.</li>
<li><strong>Devices plus controller:</strong> a controller installed and wired in the unit, with programming by the field controls contractor or the manufacturer.</li>
<li><strong>Full package:</strong> devices, controller, programming of the specified sequence, factory functional testing, and an integration interface to the BAS.</li>
</ul>
<p><strong>Field-installed</strong> controls mean the unit ships with power wiring to motors and perhaps starters or drives, and the site controls contractor installs all sensors, actuators, wiring and the controller.</p>

<h2>Comparison</h2>
<table>
<thead><tr><th>Factor</th><th>Factory-mounted</th><th>Field-installed</th></tr></thead>
<tbody>
<tr><td>Field labour</td><td>Lower; mostly interconnection between sections and BAS integration</td><td>Higher; every device mounted and wired on site</td></tr>
<tr><td>Installation quality</td><td>Controlled factory conditions, consistent workmanship</td><td>Depends on site crew, access and weather</td></tr>
<tr><td>Testing before shipment</td><td>Unit can be run on its own controls during factory test</td><td>Only power and fan testing at factory</td></tr>
<tr><td>Schedule</td><td>Shorter field start-up; controls work happens in parallel with construction</td><td>Field controls work must follow setting the unit</td></tr>
<tr><td>Warranty and responsibility</td><td>Single source for unit and its controls</td><td>Split between unit manufacturer and controls contractor</td></tr>
<tr><td>Owner controls standard</td><td>Must use the owner's approved controller or a compatible one</td><td>Naturally consistent with the rest of the building</td></tr>
<tr><td>Coordination</td><td>Sequence, points and network details needed early, before fabrication</td><td>Can be finalized later in construction</td></tr>
<tr><td>Changes late in the project</td><td>Harder after shipment</td><td>Easier to adapt on site</td></tr>
<tr><td>Shipping splits</td><td>Wiring must be disconnected and reconnected at splits</td><td>Not applicable</td></tr>
<tr><td>Certification</td><td>Control panel can be built and listed in the factory</td><td>Field panels need their own listing or inspection</td></tr>
</tbody>
</table>

<h2>Testing advantages</h2>
<p>The strongest argument for factory controls is testing. With controls mounted and programmed, the factory run test can verify fan proving, damper stroke, safety trips, sensor readings and parts of the sequence before the unit leaves. Wiring errors, reversed actuators and sensor faults found in the factory are cheap to fix; the same problems found on a roof in January are not. Witness testing can include controls checks when they are factory mounted; see <a href="<?= url('guides/factory-witness-testing') ?>">factory witness testing</a>.</p>
<p>Field functional testing is still required either way, because the unit must work with the building's ductwork, plant and BAS. Factory testing shortens that work rather than replacing it.</p>

<h2>Warranty and responsibility</h2>
<p>When a unit with field controls misbehaves, the first question is often whose problem it is: a fan that will not reach speed might be a drive setting, a controller output or a wiring error. With factory controls, one party is responsible for the unit's operation up to the BAS interface. With field controls, responsibility is split, and the specification must say clearly who does what, from terminal strips to sequence programming to start-up. Make sure warranty terms for factory controls state what is covered and for how long; see <a href="<?= url('guides/ahu-warranty-terms-checklist') ?>">AHU warranty terms checklist</a>.</p>

<h2>Coordination requirements for factory controls</h2>
<p>Factory controls require decisions earlier than many projects are used to making:</p>
<ol>
<li>The sequence of operation must be final enough to program before shipment.</li>
<li>The points list, including BAS integration points, must be agreed.</li>
<li>The controller platform must be acceptable to the owner, or the owner must accept a factory controller integrated through an open protocol.</li>
<li>Network addressing and device instance ranges must be assigned.</li>
<li>Remote devices (space sensors, duct static sensors, outdoor sensors) must be identified as either shipped loose by the manufacturer or supplied by the field contractor.</li>
<li>Field wiring between sections at shipping splits must be identified and labelled.</li>
</ol>
<p class="note">A useful middle path on many projects is factory-mounted end devices and safeties with a controller of the owner's standard brand installed in the factory panel, programmed by the owner's controls contractor. It keeps the owner's platform while capturing most of the factory wiring and testing benefit.</p>

<h2>Choosing</h2>
<ul>
<li>Choose <strong>factory-mounted full packages</strong> when the schedule is tight, site labour is expensive or scarce, the unit is complex (fan arrays, energy recovery, humidifiers), or the owner values single-source responsibility.</li>
<li>Choose <strong>field-installed</strong> controls when the owner has a strict single-vendor standard that the manufacturer cannot install, when sequences are likely to change late, or when units are simple.</li>
<li>Choose a <strong>hybrid</strong> when both sets of concerns apply, and write the division of responsibility into the specification, device by device, so nothing falls between the two scopes.</li>
</ul>
<p>Communication protocols are a separate decision, compared in <a href="<?= url('guides/bacnet-vs-modbus-integration') ?>">BACnet vs Modbus</a>. Custom Air Equipment can supply <a href="<?= url('products/custom-air-handlers') ?>">custom air handlers</a> with factory-mounted controls run-tested before shipment, or prepared for field controls, depending on the project's needs.</p>
<?php guide_end([
    ['Are factory-mounted AHU controls worth it?', 'Often, especially for complex units or tight schedules. Factory controls reduce field labour, allow testing before shipment and give single-source responsibility. They require earlier decisions on the sequence, points and controller platform.'],
    ['Can factory controls use the owner\'s preferred BAS brand?', 'Frequently yes. A common approach is for the manufacturer to install the owner\'s standard controller in the unit panel with factory-mounted devices, and for the owner\'s controls contractor to program it.'],
    ['Do factory controls eliminate field commissioning?', 'No. The unit still needs functional testing with the building\'s ductwork, plant and BAS. Factory testing reduces field problems and shortens commissioning but does not replace it.'],
]);
