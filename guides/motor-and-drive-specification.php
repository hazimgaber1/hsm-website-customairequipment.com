<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('motor-and-drive-specification'); ?>
<p class="lede">A good motor and drive specification for a custom AHU states the efficiency, insulation, bearing protection and voltage requirements for motors; the listing, duty rating, harmonic approach, communication and enclosure for VFDs; the inputs, alarms and spares for EC motors; and, above all, which division furnishes, mounts, wires and starts up each item.</p>

<h2>Start with the responsibility matrix</h2>
<p>Most motor and drive problems on air handler projects come from gaps between Division 23 (HVAC) and Division 26 (Electrical), not from poor equipment. Define the scope before the technical requirements. A table like this belongs in the AHU section or in a coordination section referenced by both divisions:</p>
<table>
<thead><tr><th>Item</th><th>Furnished by</th><th>Mounted by</th><th>Power wired by</th><th>Control wired by</th></tr></thead>
<tbody>
<tr><td>Fan motors</td><td>AHU manufacturer (Div 23)</td><td>AHU manufacturer</td><td>Factory to unit panel; Div 26 to unit</td><td>Factory</td></tr>
<tr><td>VFDs, unit-mounted</td><td>AHU manufacturer</td><td>AHU manufacturer</td><td>Factory load side; Div 26 line side</td><td>Div 23 controls contractor</td></tr>
<tr><td>VFDs, remote</td><td>State which division</td><td>State which division</td><td>Div 26</td><td>Div 23 controls contractor</td></tr>
<tr><td>Main unit disconnect</td><td>State which division</td><td>State</td><td>Div 26</td><td>N/A</td></tr>
<tr><td>Motor local disconnects</td><td>State which division</td><td>State</td><td>State</td><td>Aux contacts by Div 23</td></tr>
<tr><td>Harmonic mitigation</td><td>State which division</td><td>State</td><td>State</td><td>N/A</td></tr>
<tr><td>Drive startup</td><td>Drive manufacturer's representative</td><td></td><td></td><td></td></tr>
</tbody>
</table>
<p class="note">Blank cells in a responsibility matrix become change orders. Fill every cell, even if the answer is "not applicable".</p>

<h2>Sample specification language: motors</h2>
<p>The following clauses are written as starting points. Edit them to suit the project and coordinate with the electrical engineer.</p>
<ol>
<li>Motors shall be three-phase, squirrel-cage induction type, NEMA design B, rated for the supply voltage scheduled. Motors for 208 V systems shall be rated 200 V or specifically rated for 208 V operation.</li>
<li>Motors shall meet or exceed NEMA Premium efficiency as defined in NEMA MG 1 and shall comply with the minimum efficiency regulations in force in the country of installation.</li>
<li>Motors controlled by variable frequency drives shall be definite-purpose inverter-fed motors complying with NEMA MG 1 Part 31.</li>
<li>Motors on VFDs shall be fitted with a shaft grounding device on the drive end. Motors of frame sizes recommended by the manufacturer shall also have an insulated bearing on the opposite end.</li>
<li>Enclosure shall be TEFC unless otherwise scheduled. Insulation shall be Class F minimum with Class B temperature rise at nameplate load.</li>
<li>Motors shall be sized so that the maximum fan brake horsepower in any scheduled operating case does not exceed nameplate horsepower, without use of the service factor.</li>
<li>Motors shall carry certification marks acceptable to the authority having jurisdiction.</li>
</ol>
<p>The reasoning behind clauses 2, 3 and 6 is covered in <a href="<?= url('guides/motor-efficiency-classes-nema-premium-ie') ?>">motor efficiency classes</a>, <a href="<?= url('guides/inverter-duty-motor-insulation') ?>">inverter-duty insulation</a> and <a href="<?= url('guides/motor-sizing-service-factor') ?>">motor sizing</a>.</p>

<h2>Sample specification language: variable frequency drives</h2>
<ol>
<li>Drives shall be listed to UL 61800-5-1 (or the applicable current standard) and certified for use in Canada where installed in Canada.</li>
<li>Drives shall be selected on motor nameplate full-load current at the variable torque (normal duty) rating, after derating for altitude, ambient temperature, enclosure and carrier frequency.</li>
<li>Each drive shall include a DC link choke or input line reactor of the manufacturer's standard impedance. Additional harmonic mitigation shall be provided as required to meet the limits established by the project harmonic analysis at the defined point of common coupling.</li>
<li>Drives shall provide adjustable minimum and maximum speed, acceleration and deceleration ramps, at least three skip frequency bands, flying start, automatic restart with an adjustable number of attempts, and electronic motor overload protection.</li>
<li>Drives shall communicate with the building automation system using the protocol scheduled (BACnet MS/TP, BACnet/IP or Modbus RTU) and shall expose, at minimum: run status, speed command, actual speed, output current, output power, kWh, fault status and fault code.</li>
<li>Drives shall have a hardwired safety input to stop the motor from life-safety and equipment safety devices, independent of network communication.</li>
<li>Enclosure type shall be as scheduled for the installed location.</li>
<li>Drives shall be marked with a short-circuit current rating not less than the available fault current at the point of installation, as provided by the electrical engineer.</li>
<li>Bypass, where scheduled, shall be a three-contactor arrangement with motor overload protection active in bypass and hardwired safeties effective in both modes.</li>
</ol>

<h2>Sample specification language: EC motors</h2>
<ol>
<li>EC motors shall be permanent magnet, electronically commutated motors with integral speed control electronics, rated for the supply voltage scheduled.</li>
<li>Each EC motor shall accept a 0-10 V DC speed signal and a hardwired enable input, and shall provide a fault relay output.</li>
<li>Where scheduled, EC motors shall communicate by Modbus RTU and shall expose speed command, actual speed, power, operating hours and fault codes.</li>
<li>EC motors shall be rated for the maximum air temperature at the motor location in all operating modes.</li>
<li>The manufacturer shall furnish one spare EC motor assembly of each model used, or the number scheduled.</li>
</ol>

<h2>Submittal requirements</h2>
<ul>
<li>Motor data sheets: horsepower, voltage, FLA, speed, efficiency at 100%, 75% and 50% load, power factor, frame, enclosure, insulation class, Part 31 compliance statement.</li>
<li>Drive data sheets: rated current at normal duty, derating calculations, losses, input current harmonic data, SCCR, enclosure type, dimensions and heat dissipation.</li>
<li>Wiring diagrams showing safeties, enable inputs and network connections.</li>
<li>Harmonic analysis, where required, and the selected mitigation.</li>
<li>Startup parameter sheet for each drive after commissioning.</li>
</ul>
<p>What not to put in this section: the control sequences themselves. Those belong in the sequence of operation, which the drive must support but does not define.</p>
<?php guide_end([
    ['What should a VFD specification include?', 'At minimum: listing, normal duty current rating with derating, harmonic mitigation approach, required parameters and protection features, communication protocol and points, hardwired safety input, enclosure type, SCCR and any bypass requirements.'],
    ['Who should furnish VFDs on an AHU project?', 'It varies by project. Unit-mounted drives are often furnished by the AHU manufacturer under Division 23, while remote drives may be furnished under Division 23 or 26. The specification must state it clearly in a responsibility matrix.'],
    ['Should I specify NEMA MG 1 Part 31 motors?', 'Yes, for any motor that will run on a VFD. Part 31 defines insulation and other requirements suited to drive-fed operation.'],
    ['How should EC motors be specified?', 'Specify voltage, control inputs and outputs, communication protocol and points, maximum airstream temperature rating and the number of spare motors to be furnished.'],
]);
