<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('bacnet-vs-modbus-integration'); ?>
<p class="lede">BACnet is the building automation industry's object-based protocol and is the usual choice for integrating an AHU's factory controller with the BAS. Modbus is a simpler register-based protocol common on EC motors, VFDs, meters and other devices inside the unit. Many custom AHUs use both: Modbus RTU on the unit's internal bus, and BACnet IP or MS/TP to the building system.</p>

<h2>How each protocol represents data</h2>
<p><strong>BACnet</strong> (ASHRAE/ANSI Standard 135, also published as ISO 16484-5) models a device as a set of standard objects: analog inputs, binary outputs, analog values, schedules, trend logs, alarms and more. Each object has standard properties, such as present value, units, status flags and priority array. A BAS discovering a BACnet device can read the names, units and descriptions of its points without a separate map.</p>
<p><strong>Modbus</strong> is a much simpler master-slave (now often called client-server) protocol. Data sits in numbered registers and coils. A register holds a 16-bit value; what that value means (temperature, speed, fault code), its scaling and its units are defined only in the device's documentation. The integrator must build a register map in the BAS for every device.</p>

<h2>Physical layers</h2>
<table>
<thead><tr><th>Variant</th><th>Medium</th><th>Typical use in AHUs</th></tr></thead>
<tbody>
<tr><td>BACnet IP</td><td>Ethernet</td><td>Factory AHU controller to BAS network; high speed, easy on modern IT infrastructure</td></tr>
<tr><td>BACnet MS/TP</td><td>RS-485 twisted pair</td><td>Controllers and some drives on a field bus; lower speed, token passing</td></tr>
<tr><td>Modbus RTU</td><td>RS-485 twisted pair</td><td>EC motors, VFDs, energy meters, humidifiers inside the unit</td></tr>
<tr><td>Modbus TCP</td><td>Ethernet</td><td>Larger drives, meters, some controllers</td></tr>
</tbody>
</table>

<h2>Comparison for AHU integration</h2>
<table>
<thead><tr><th>Factor</th><th>BACnet</th><th>Modbus</th></tr></thead>
<tbody>
<tr><td>Data model</td><td>Self-describing objects with names and units</td><td>Numbered registers; meaning from documentation</td></tr>
<tr><td>Commands and priority</td><td>Priority array arbitrates commands from multiple sources</td><td>Last write wins</td></tr>
<tr><td>Alarms and events</td><td>Native alarm and event services</td><td>Must be polled and interpreted</td></tr>
<tr><td>Schedules and trends</td><td>Native objects</td><td>None</td></tr>
<tr><td>Device discovery</td><td>Yes</td><td>No; addresses configured manually</td></tr>
<tr><td>Device cost and simplicity</td><td>Higher; more firmware</td><td>Lower; very common on motors and drives</td></tr>
<tr><td>Integration effort</td><td>Lower if objects are well named</td><td>Higher: register maps, scaling, data types</td></tr>
<tr><td>Interoperability testing</td><td>BTL listing tests conformance to device profiles</td><td>No equivalent listing programme of the same scope</td></tr>
<tr><td>Cybersecurity</td><td>BACnet/SC adds secure connections</td><td>No native security in classic Modbus</td></tr>
</tbody>
</table>

<h2>EC motors and drives: where Modbus dominates</h2>
<p>EC fan motors and many VFDs ship with Modbus RTU as standard, with BACnet available on some models or as an option card. In a fan array with many motors, it is common for the unit controller to communicate with every motor over Modbus RTU, reading speed, power, fault codes and run hours, and to expose a summarized, well-named set of points to the BAS over BACnet. That keeps the BAS integration manageable: the building system sees "Supply fan array speed", "Fan 3 fault" and "Fans running", not hundreds of raw registers.</p>
<p>Connecting every EC motor directly to the BAS over BACnet MS/TP is possible, but large numbers of devices on one MS/TP trunk can slow the network, and the integrator then has to build the array logic in the BAS. The device-level communication details are covered in <a href="<?= url('guides/ec-motor-electronics-and-communication') ?>">EC motor electronics and communication</a>.</p>

<h2>Polling, speed and data volume</h2>
<p>Modbus has no way for a device to report a change on its own; the master must poll every register it cares about. On an RS-485 segment with a dozen EC motors, each polled for speed, power, status and fault code, a full scan can take several seconds at common baud rates. That is fine for monitoring but too slow for closed-loop speed control, which is one reason the speed command is often sent as an analog signal or handled by the unit controller locally. BACnet supports change-of-value subscriptions, so a BAS can be notified when a point changes instead of polling constantly, which reduces traffic on busy networks.</p>

<h2>Practical issues on each side</h2>
<h3>Modbus pitfalls</h3>
<ul>
<li>Register numbering conventions differ (zero-based or one-based, with or without a leading digit). Confirm with a test read.</li>
<li>Scaling and data types (signed or unsigned, 32-bit values split over two registers, byte order) must be configured correctly.</li>
<li>RS-485 networks need correct termination, biasing, shielding and daisy-chain wiring; star topologies cause intermittent faults.</li>
<li>Each device on a segment needs a unique address and matching baud rate and parity.</li>
</ul>
<h3>BACnet pitfalls</h3>
<ul>
<li>Device instance numbers must be unique across the whole site; coordinate ranges with the BAS integrator before factory programming.</li>
<li>MS/TP networks have practical limits on device count and speed; plan trunk loading.</li>
<li>Object naming conventions should follow the owner's standard, or integration becomes a relabelling exercise.</li>
<li>BACnet IP across subnets needs a BBMD or equivalent configuration.</li>
</ul>

<h2>Specifying the interface</h2>
<p>Whatever the protocol, the specification and submittals should include:</p>
<ol>
<li>The protocol and physical layer at the BAS interface (for example BACnet IP).</li>
<li>Conformance requirements, such as a BTL-listed controller and the required device profile.</li>
<li>A complete points list showing object type, name, units, read or write access, and whether each point is trended or alarmed. See <a href="<?= url('guides/controls-points-list-checklist') ?>">controls points list checklist</a>.</li>
<li>Network addressing and instance numbering assigned by or coordinated with the BAS contractor.</li>
<li>Who is responsible for testing the integration, and when.</li>
</ol>
<p class="note">The choice of protocol is separate from the question of whether controls are factory-mounted or field-installed; that is compared in <a href="<?= url('guides/factory-mounted-vs-field-installed-controls') ?>">factory-mounted vs field-installed AHU controls</a>.</p>
<?php guide_end([
    ['Is BACnet better than Modbus for HVAC?', 'For integrating a controller with a building automation system, BACnet is usually better because it is self-describing and supports alarms, schedules and command priority. Modbus is simpler and common on motors, drives and meters, so many units use both.'],
    ['Can EC motors communicate over BACnet?', 'Some EC motors offer BACnet, but most use Modbus RTU as standard. A common approach is for the unit controller to talk to the motors over Modbus and present summarized points to the BAS over BACnet.'],
    ['What is BTL listing?', 'BTL listing shows that a BACnet device has passed conformance testing for its declared device profile under the BACnet Testing Laboratories programme. Specifying a BTL-listed controller reduces integration risk.'],
]);
