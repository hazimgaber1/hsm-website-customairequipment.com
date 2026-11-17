<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ec-motor-fault-diagnosis'); ?>
<p class="lede">When an EC fan stops or alarms, work through four layers in order: supply power at the motor terminals, the enable and speed command signals, the fault code the motor's own electronics report, and finally the mechanical condition of the wheel and bearings. Most "dead" EC motors turn out to have a control signal or supply problem; genuine electronics failures usually mean replacing the motor assembly.</p>

<h2>Before you start</h2>
<p>An EC motor combines motor and drive, so a fault can sit in the power stage, the control board, the motor windings or the bearings, or outside the motor altogether. The motor's electronics usually know which. Have on hand the manufacturer's terminal diagram and fault code table for the exact model, and if the motors are networked, a way to read their Modbus registers. Inputs, outputs and communication options are explained in <a href="<?= url('guides/ec-motor-electronics-and-communication') ?>">EC motor electronics, inputs and communication</a>.</p>
<p class="warn">EC electronics hold charge in their DC link capacitors after power is removed. Wait the time stated by the manufacturer before opening the terminal box, and verify absence of voltage. A windmilling EC wheel can also generate voltage at the terminals.</p>

<h2>Symptom: motor does not run, no alarm</h2>
<h3>Cause: no supply at the motor</h3>
<p><strong>Check:</strong> measure voltage at the motor's power terminals, phase to phase and phase to ground. Check the branch fuse or breaker, the local disconnect and any upstream contactor.</p>
<p><strong>Fix:</strong> restore supply; find out why the protective device opened before resetting it.</p>
<h3>Cause: enable input open</h3>
<p><strong>Check:</strong> measure the enable input. In many installations it passes through a safety chain of freezestat, smoke detector, door switch or high static safety. One open device anywhere in the chain stops the motor.</p>
<p><strong>Fix:</strong> trace the chain and reset or repair the open device.</p>
<h3>Cause: speed signal below the start threshold</h3>
<p><strong>Check:</strong> measure the 0-10 V signal at the motor terminals, not at the controller. Many EC motors stay stopped below a threshold, often around 1 V. Look for reversed polarity, an open signal wire or a controller output that has failed low.</p>
<p><strong>Fix:</strong> correct wiring or controller output; confirm the minimum speed command in the sequence is above the threshold.</p>
<h3>Cause: network control with lost communication</h3>
<p><strong>Check:</strong> if speed is commanded over Modbus, check the bus status and the motor's communication-loss behaviour setting.</p>
<p><strong>Fix:</strong> repair the network; set a sensible fallback behaviour.</p>

<h2>Symptom: motor stopped with alarm relay active</h2>
<p>Read the fault code over the network, from a status LED pattern, or with the manufacturer's service tool. Common categories:</p>
<table>
<thead><tr><th>Fault category</th><th>Typical causes</th><th>Checks</th></tr></thead>
<tbody>
<tr><td>Supply undervoltage or overvoltage</td><td>Weak supply, voltage sags, wrong voltage model, transients</td><td>Log supply voltage; compare with motor rating</td></tr>
<tr><td>Phase loss (three-phase models)</td><td>Blown fuse, loose terminal, failed contactor pole</td><td>Measure all three phases at the motor under load</td></tr>
<tr><td>Electronics overtemperature</td><td>Airstream too hot, motor in still air, blocked cooling fins, high ambient around electronics</td><td>Measure air temperature at the motor; inspect fins and housing</td></tr>
<tr><td>Motor overtemperature</td><td>Overload, high air temperature, failing bearings</td><td>Compare power draw with rating; check bearing noise</td></tr>
<tr><td>Locked rotor or blocked</td><td>Wheel obstructed, ice, debris, seized bearing, wheel rubbing inlet cone</td><td>Lock out, then turn wheel by hand</td></tr>
<tr><td>Rotor position or Hall sensor fault</td><td>Sensor or electronics failure</td><td>Usually requires motor replacement</td></tr>
<tr><td>Ground or insulation fault</td><td>Moisture ingress, damaged cable, winding fault</td><td>Inspect seals and cable glands; follow manufacturer guidance on insulation testing</td></tr>
<tr><td>Speed deviation</td><td>Motor cannot reach commanded speed: overload, low voltage, mechanical drag</td><td>Compare commanded and actual speed; check load</td></tr>
</tbody>
</table>
<p class="note">Do not megger an EC motor through its electronics. Insulation resistance testing at the supply terminals can damage the controller. Follow the manufacturer's procedure, which may allow testing only with the electronics isolated or not at all in the field.</p>

<h2>Symptom: motor runs but speed is wrong or unstable</h2>
<ul>
<li><strong>Speed lower than commanded:</strong> the electronics may be derating because of high temperature or low supply voltage. Check the derate status if available.</li>
<li><strong>Speed hunting:</strong> the motor's internal PID loop is active and fighting the building controller's loop. Make sure only one controller closes the loop.</li>
<li><strong>Some fans in an array faster than others:</strong> different parameter sets, signal voltage drop on long analog runs, or individual motor derating.</li>
<li><strong>Running backward:</strong> direction parameter wrong, or on some models a direction input wired incorrectly.</li>
</ul>

<h2>Symptom: repeated failures of electronics</h2>
<p>When several EC motors in a building fail with electronics faults over a short period, look outside the motors:</p>
<ul>
<li>Voltage transients from utility switching or lightning. Consider surge protection at the panel feeding the motors.</li>
<li>Sustained overvoltage, especially at the high end of the tolerance band.</li>
<li>Moisture entering through cable glands or condensation inside the housing when motors sit idle in humid air.</li>
<li>Airstream temperature higher than the motor's rating, for example in a hot attic or downstream of a heating coil.</li>
</ul>

<h2>Resetting and replacing</h2>
<p>Many EC motors latch a fault until power is removed for a set time or a reset is sent over the network. Record the fault code before resetting. If the fault recurs immediately, do not keep resetting; the protection is doing its job.</p>
<p>Internal electronics failures normally mean replacing the motor assembly, or the electronics module on designs where it is separable. In a redundant array, the remaining fans carry the load while the replacement is fitted. Keeping a spare of each EC motor model on site shortens that window considerably; the trade-offs are discussed in <a href="<?= url('guides/ec-motors-vs-vfd-induction-motors') ?>">EC motors vs VFD-driven induction motors</a>. After replacement, set the address, parameters and direction to match the original, then verify speed response and alarm function. Fault handling by the AHU controller is part of <a href="<?= url('guides/fan-array-control-sequences') ?>">fan array control sequences</a>.</p>
<?php guide_end([
    ['Why is my EC motor not running?', 'The most common causes are no supply voltage at the motor, an open enable input in the safety chain, or a speed signal below the motor\'s start threshold. Check these at the motor terminals before suspecting the motor.'],
    ['How do I read an EC motor fault code?', 'Depending on the model, read it over Modbus, from a status LED pattern on the motor, or with the manufacturer\'s service tool. Record the code before resetting.'],
    ['Can I megger an EC motor?', 'Not through its electronics. Insulation testing at the supply terminals can damage the controller. Follow the manufacturer\'s procedure for insulation testing.'],
    ['Can an EC motor be repaired in the field?', 'Usually not. Electronics or sensor failures normally require replacing the motor assembly, or the electronics module where the design allows it.'],
]);
