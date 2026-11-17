<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('inverter-duty-motor-insulation'); ?>
<p class="lede">A motor fed from a PWM drive sees steep-fronted voltage pulses with peaks well above the nominal supply voltage. NEMA MG 1 Part 31 defines definite-purpose inverter-fed motors whose insulation withstands those pulses, with a peak voltage capability of 3.1 times rated voltage at a fast rise time. That is the specification to call for on any fan motor that will run on a VFD, especially at 460 V and 575 V.</p>

<h2>What the motor sees from a VFD</h2>
<p>On a sine-wave supply, the voltage across a motor winding rises and falls smoothly, peaking at about 1.41 times the RMS line voltage. A PWM drive instead switches the full DC bus voltage onto the motor terminals in rapid pulses. Each pulse has a very short rise time, measured in fractions of a microsecond, because modern IGBTs switch extremely fast.</p>
<p>Two features of that waveform stress insulation:</p>
<ul>
<li><strong>Peak voltage.</strong> The DC bus of a 460 V drive sits around 650 V. Cable and motor impedance cause the pulse to overshoot at the motor terminals, and peaks of roughly twice the bus voltage are possible under unfavourable conditions. The mechanism behind that overshoot and its cable-length fixes are covered in <a href="<?= url('guides/vfd-cable-length-reflected-wave') ?>">troubleshooting long VFD cable runs and reflected wave</a>.</li>
<li><strong>Rate of rise (dV/dt).</strong> A fast front does not distribute evenly through the winding. Much of the voltage appears across the first few turns of the first coil, so turn-to-turn insulation sees far more stress than it would on sine-wave power.</li>
</ul>

<h2>How insulation fails under pulse stress</h2>
<p>When the electric field in tiny air gaps within the winding exceeds a threshold, the air ionizes and produces <strong>partial discharge</strong> (corona). Each discharge is small, but repeated thousands of times a second it erodes organic insulation materials. The usual failure is a turn-to-turn or phase-to-phase short, often near the line end of a winding, after months or years of service. The voltage at which discharge starts, the partial discharge inception voltage, is a key property of an inverter-grade insulation system.</p>
<p>Heat accelerates the process, because insulation that runs hotter degrades faster. A motor running hot on a drive therefore loses insulation life from both thermal and electrical stress.</p>

<h2>What NEMA MG 1 says</h2>
<p>NEMA MG 1 addresses drive-fed motors in two parts:</p>
<table>
<thead><tr><th>MG 1 section</th><th>Motor type</th><th>Insulation expectation for motors rated 600 V or less</th></tr></thead>
<tbody>
<tr><td>Part 30</td><td>General purpose motors used on drives</td><td>Withstand peaks up to about 1,000 V with rise times of at least 2 µs</td></tr>
<tr><td>Part 31</td><td>Definite-purpose inverter-fed motors</td><td>Withstand peaks up to 3.1 times rated line voltage with rise times of at least 0.1 µs</td></tr>
</tbody>
</table>
<p>For a 460 V motor, the Part 31 capability works out to 3.1 × 460 = 1,426 V peak. For a 575 V motor, it is 3.1 × 575 = 1,783 V peak. A general purpose motor meeting only Part 30 has a much lower margin, and at 575 V a peak of 1,000 V is easily exceeded on a drive. Check the current edition of MG 1 for exact wording and for motors above 600 V.</p>
<p class="warn">"Inverter ready" or "VFD rated" on a catalog page does not necessarily mean Part 31 compliance. Require the motor manufacturer to state compliance with NEMA MG 1 Part 31 explicitly.</p>

<h2>How manufacturers build inverter-grade insulation</h2>
<ul>
<li><strong>Inverter-grade magnet wire</strong> with insulation formulated to resist partial discharge, often with additional layers or fillers.</li>
<li><strong>Phase insulation</strong> between coil groups of different phases, and slot liners with higher dielectric strength.</li>
<li><strong>Vacuum pressure impregnation (VPI)</strong> or multiple dips in varnish to fill voids where discharge could start.</li>
<li><strong>Careful first-turn treatment,</strong> since the line-end turns see the highest pulse stress.</li>
<li><strong>Class F or H insulation systems</strong> operated at Class B temperature rise, leaving thermal headroom.</li>
</ul>

<h2>Other parts of "inverter duty"</h2>
<p>Part 31 covers more than insulation. It also addresses the speed range over which the motor can deliver rated torque without overheating, which matters because a shaft-mounted cooling fan moves less air at low speed. For centrifugal fans this is usually easy, since load torque falls with the square of speed: a motor rated for a modest variable torque turndown is normally sufficient. Constant torque turndown ratings matter more for other load types.</p>
<p>Part 31 also discusses shaft voltage and bearing currents. That subject is covered in <a href="<?= url('guides/bearing-currents-shaft-grounding') ?>">VFD bearing currents and shaft grounding rings</a>.</p>

<h2>Voltage level matters</h2>
<p>The higher the supply voltage, the higher the DC bus and the larger the pulse peaks. Canadian installations at 575 V and US installations at 460 V both warrant Part 31 motors on drives; 208 V and 230 V systems are less demanding but still benefit. Voltage choices and their implications are discussed in <a href="<?= url('guides/north-american-motor-voltages') ?>">motor voltages in North America</a>.</p>

<h2>Checklist for drive-fed fan motors</h2>
<ol>
<li>Specify NEMA MG 1 Part 31 compliance for every motor on a VFD.</li>
<li>Confirm the motor's variable torque speed range covers the fan's minimum speed.</li>
<li>Coordinate cable length and output filtering with the drive manufacturer.</li>
<li>Specify bearing current mitigation along with the insulation requirement.</li>
<li>When replacing a motor on an existing drive, do not substitute a general purpose motor without these checks.</li>
</ol>
<?php guide_end([
    ['What is NEMA MG 1 Part 31?', 'Part 31 of NEMA MG 1 defines definite-purpose inverter-fed motors, including insulation that withstands peak voltages up to 3.1 times rated line voltage with fast rise times, plus speed range and other drive-related requirements.'],
    ['Why do VFDs damage motor insulation?', 'PWM drives apply fast-rising voltage pulses with peaks above the supply voltage. The steep fronts concentrate stress on the first turns of the winding and can cause partial discharge that erodes insulation over time.'],
    ['Can I use a general purpose motor on a VFD?', 'Motors meeting only MG 1 Part 30 are expected to withstand about 1,000 V peaks, which can be exceeded on 460 V and especially 575 V drives. A Part 31 inverter-duty motor is the safer choice.'],
    ['Does insulation class F mean a motor is inverter duty?', 'No. Insulation class describes thermal capability. Inverter duty requires insulation designed to resist voltage pulse stress and partial discharge, as defined in MG 1 Part 31.'],
]);
