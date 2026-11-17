<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ec-motor-electronics-and-communication'); ?>
<p class="lede">An EC motor carries a small drive inside its housing: a rectifier, DC bus, inverter and control board that turn line power and a speed command into a commutated permanent magnet motor. Most accept a 0-10 V analog signal and an enable input, offer an alarm relay and a speed or tach output, and many add Modbus RTU over RS-485 for full monitoring and control.</p>

<h2>Inside the electronics</h2>
<p>The integrated controller performs the same basic functions as a separate VFD, packaged for one motor:</p>
<ol>
<li><strong>Input stage:</strong> a rectifier converts single-phase or three-phase AC into DC. Many units include an EMC filter, and some include active power factor correction to reduce harmonic current and improve power factor.</li>
<li><strong>DC link:</strong> capacitors store energy and smooth the bus voltage.</li>
<li><strong>Inverter:</strong> power semiconductors switch current through the stator windings in sequence. Because the rotor carries permanent magnets, the controller must know rotor position, either from Hall sensors or by sensorless estimation from the motor's back-EMF.</li>
<li><strong>Control board:</strong> a microcontroller reads the inputs, runs the speed loop, applies protection limits and handles communication.</li>
</ol>
<p>All of this sits on or in the motor, usually cooled by the airflow over the motor or by the rotating housing on external-rotor designs. That is why EC motors have a maximum airstream temperature lower than many conventional motors.</p>

<h2>Control inputs</h2>
<h3>Analog speed command</h3>
<p>The most common input is a 0-10 V DC signal, with 10 V representing maximum speed. Some models accept 4-20 mA instead or as an option. The controller usually has a programmable minimum: below a threshold voltage, often around 1 V, the motor stops; between the threshold and 10 V, speed is proportional. Confirm the curve for the specific motor, because thresholds vary.</p>
<h3>PWM speed command</h3>
<p>Some EC motors accept a pulse-width modulated signal, where duty cycle sets speed. Used more in OEM equipment than in field-wired building systems.</p>
<h3>Enable / digital input</h3>
<p>A dry contact or voltage input that allows the motor to run. Wiring the enable through a safety chain lets freezestats, smoke detectors and door switches stop the fan independently of the speed signal.</p>
<h3>Sensor input for closed-loop modes</h3>
<p>Many EC controllers include a built-in PID loop and an analog input for a sensor, such as a pressure transducer. The motor can then hold a pressure or airflow setpoint on its own. Some fan manufacturers connect the inlet cone pressure taps to this input so the motor maintains constant airflow.</p>

<h2>Outputs and alarms</h2>
<ul>
<li><strong>Alarm relay:</strong> a dry contact that changes state on a fault such as locked rotor, overtemperature, phase loss or supply voltage out of range. The relay is commonly fail-safe, so loss of power to the motor also signals an alarm.</li>
<li><strong>Speed output:</strong> a tach pulse train or an analog signal proportional to speed, used to prove the motor is running and to monitor each fan.</li>
<li><strong>Auxiliary voltage:</strong> a 10 V or 24 V supply on the terminal strip for a potentiometer or sensor.</li>
</ul>
<p class="note">For proof of fan operation, a speed output or a network status point is a better signal than a current switch on the motor feed, because EC motors draw small current at low speed and switches may not trip reliably.</p>

<h2>Network communication</h2>
<p>Modbus RTU over RS-485 is the most widely supported protocol on EC motors. A single twisted-pair bus connects many motors in a daisy chain, each with a unique address. Over the bus, a controller can write speed setpoints and read actual speed, power, current, DC bus voltage, electronics temperature, operating hours and detailed fault codes.</p>
<p>Some manufacturers offer BACnet MS/TP or proprietary protocols, sometimes through a gateway. Choosing between protocols for building integration is discussed in <a href="<?= url('guides/bacnet-vs-modbus-integration') ?>">BACnet vs Modbus integration</a>.</p>
<p>Good practice for an EC motor RS-485 network:</p>
<ul>
<li>Use shielded twisted-pair cable and a true daisy chain, not a star.</li>
<li>Fit termination resistors at both ends of the bus only.</li>
<li>Set unique addresses and a common baud rate and parity before connecting the motors in sequence.</li>
<li>Ground the shield at one point.</li>
<li>Label each motor with its address, matched to its physical position in the array.</li>
<li>Keep a hardwired enable, so safeties do not depend on the network.</li>
</ul>

<h2>Analog or network control?</h2>
<table>
<thead><tr><th>Aspect</th><th>Analog 0-10 V</th><th>Modbus network</th></tr></thead>
<tbody>
<tr><td>Wiring</td><td>One signal pair per motor or a common signal to all</td><td>One bus for all motors</td></tr>
<tr><td>Monitoring</td><td>Alarm relay and speed only</td><td>Speed, power, current, temperatures, fault codes</td></tr>
<tr><td>Configuration</td><td>Set at the motor</td><td>Parameters readable and writable remotely</td></tr>
<tr><td>Integration effort</td><td>Simple</td><td>Requires point mapping and testing</td></tr>
<tr><td>Behaviour on communication loss</td><td>Not applicable</td><td>Must be configured: hold speed, go to default or stop</td></tr>
</tbody>
</table>
<p>Many projects combine both: an analog speed signal and hardwired enable for control, with Modbus for monitoring. If network control is used, set the communication-loss behaviour deliberately; a motor that stops on lost communication can shut down an air handler because of a cable fault.</p>

<h2>Built-in protection</h2>
<p>EC controllers typically monitor supply voltage, phase loss on three-phase units, motor and electronics temperature, locked rotor, and sometimes rotor position errors. They limit current internally and will derate speed if electronics temperature rises too far. When troubleshooting, fault codes read over Modbus are far more informative than a single alarm relay; see <a href="<?= url('guides/ec-motor-fault-diagnosis') ?>">diagnosing EC motor faults</a>. How the AHU controller sequences an array of EC motors is covered in <a href="<?= url('guides/fan-array-control-sequences') ?>">fan array control sequences</a>.</p>
<?php guide_end([
    ['How is an EC motor speed controlled?', 'Most EC motors take a 0-10 V DC signal, with 10 V for full speed, plus an enable input. Many also accept speed commands over Modbus RTU, and some have a built-in PID loop for pressure or airflow control.'],
    ['Do EC motors support Modbus?', 'Many do. Modbus RTU over RS-485 is the most common network option and allows reading speed, power, temperatures and fault codes as well as writing speed setpoints.'],
    ['What does the EC motor alarm relay indicate?', 'It changes state when the controller detects a fault such as locked rotor, overtemperature, phase loss or a supply voltage problem. It is usually fail-safe, so loss of power also signals an alarm.'],
    ['Should fan safeties be wired to the EC motor network?', 'No. Safeties such as freezestats and smoke detectors should break a hardwired enable input so they stop the fan regardless of network status.'],
]);
