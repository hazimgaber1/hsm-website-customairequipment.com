<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('vfd-cable-length-reflected-wave'); ?>
<p class="lede">When a VFD is far from its motor, each fast voltage pulse reflects at the motor terminals and can nearly double in amplitude, stressing the winding insulation every time the drive switches. Early winding failures near the line leads, drive trips from cable charging current and noisy motors on long runs all point to this. The fixes are shorter leads, a dV/dt or sine wave filter, an output reactor or a motor terminator, together with an inverter-duty motor.</p>

<h2>Why long leads cause voltage overshoot</h2>
<p>A PWM drive sends voltage pulses with very fast rise times down the motor cable. At high frequencies, the cable behaves like a transmission line with a characteristic impedance. The motor winding has a much higher impedance than the cable at those frequencies, so the pulse arriving at the motor is partly reflected back toward the drive. The reflected wave adds to the incoming wave, and the voltage at the motor terminals overshoots.</p>
<p>The overshoot depends on how long the pulse takes to rise compared with how long it takes to travel the cable and back. If the round trip is short relative to the rise time, the reflection blends into the rising edge and overshoot is small. Beyond a critical length, the full reflection arrives while the pulse is still high, and the terminal voltage can approach twice the drive's DC bus voltage. With modern fast-switching IGBTs, that critical length can be surprisingly short, so drive manufacturers publish maximum lead lengths with and without filters.</p>
<table>
<thead><tr><th>Supply voltage</th><th>Approximate DC bus</th><th>Possible peak at motor with full reflection</th></tr></thead>
<tbody>
<tr><td>208 V</td><td>about 295 V</td><td>about 590 V</td></tr>
<tr><td>460 V</td><td>about 650 V</td><td>about 1,300 V</td></tr>
<tr><td>575 V</td><td>about 815 V</td><td>about 1,630 V</td></tr>
</tbody>
</table>
<p>Ringing and repeated switching can push peaks higher still. How motor insulation is rated to resist those peaks is explained in <a href="<?= url('guides/inverter-duty-motor-insulation') ?>">inverter-duty motors and NEMA MG 1 Part 31</a>.</p>

<h2>Symptom, cause, check, fix</h2>
<h3>1. Motor winding fails within months, turn-to-turn or phase-to-phase near the leads</h3>
<p><strong>Cause:</strong> repeated voltage overshoot exceeding the insulation's partial discharge threshold.</p>
<p><strong>Check:</strong> measure the motor cable length and compare it with the drive manufacturer's limit for the drive model, voltage and carrier frequency. Confirm whether the motor is rated to NEMA MG 1 Part 31. If possible, measure peak voltage and rise time at the motor terminals with a high-voltage differential probe and an oscilloscope while running.</p>
<p><strong>Fix:</strong> replace with a Part 31 motor and add a dV/dt filter or sine wave filter at the drive output, or relocate the drive closer to the motor.</p>
<p class="warn">Measuring at motor terminals on a running drive involves high voltages and fast transients. Use rated differential probes and follow electrical safety procedures; this is a task for a qualified technician.</p>

<h3>2. Drive trips on overcurrent or ground fault at start, worse on long cable runs</h3>
<p><strong>Cause:</strong> cable capacitance draws charging current on every pulse edge. Long shielded cables, and several motors on one drive, add up to a large capacitance.</p>
<p><strong>Check:</strong> compare total cable length, including all motors on a multi-motor drive, with the manufacturer's limit. Look at trip timing: at start or during acceleration points to charging current.</p>
<p><strong>Fix:</strong> an output reactor reduces the charging current peaks. Lowering carrier frequency helps. The general approach to drive trips is in <a href="<?= url('guides/vfd-nuisance-tripping-troubleshooting') ?>">troubleshooting VFD nuisance trips</a>.</p>

<h3>3. Motor noise, interference or bearing problems on long leads</h3>
<p><strong>Cause:</strong> high-frequency common-mode current increases with cable length and capacitance, contributing to electrical noise and bearing currents.</p>
<p><strong>Check:</strong> cable type, shield termination and bonding at both ends.</p>
<p><strong>Fix:</strong> symmetrical shielded VFD cable with 360° shield termination, a common-mode choke if needed, and bearing protection as described in <a href="<?= url('guides/bearing-currents-shaft-grounding') ?>">VFD bearing currents and shaft grounding rings</a>.</p>

<h3>4. Replacement motor on an old installation fails, the original did not</h3>
<p><strong>Cause:</strong> either a new drive with faster switching has replaced an older one, raising overshoot, or the replacement motor has weaker insulation than the original.</p>
<p><strong>Check:</strong> compare drive models and carrier settings before and after; check the replacement motor's insulation rating.</p>
<p><strong>Fix:</strong> specify Part 31 motors for all replacements on drive circuits; add filtering if the drive changed.</p>

<h2>Mitigation options compared</h2>
<table>
<thead><tr><th>Option</th><th>What it does</th><th>Effect on peak voltage</th><th>Considerations</th></tr></thead>
<tbody>
<tr><td>Move drive closer to motor</td><td>Shortens cable below critical length</td><td>Large reduction</td><td>Drive must suit the new location's environment and access</td></tr>
<tr><td>Output (load) reactor</td><td>Slows pulse rise and limits charging current</td><td>Moderate reduction</td><td>Small voltage drop; suits moderate lengths</td></tr>
<tr><td>dV/dt filter</td><td>Reactor plus damping network shapes the pulse edge</td><td>Large reduction</td><td>Rated for a maximum cable length; produces heat</td></tr>
<tr><td>Sine wave filter</td><td>LC filter delivers near-sinusoidal voltage</td><td>Practically eliminates overshoot</td><td>Size, cost, heat; drive must be set for filter</td></tr>
<tr><td>Motor terminator</td><td>Impedance-matching network at the motor terminals</td><td>Large reduction</td><td>Mounted at the motor; some heat dissipation</td></tr>
<tr><td>Inverter-duty motor</td><td>Insulation designed for higher peaks</td><td>Does not reduce peaks; tolerates them</td><td>Should be used in all cases</td></tr>
</tbody>
</table>

<h2>Preventing the problem at design</h2>
<ol>
<li>Locate drives close to their motors where the environment allows. Factory mounting on the AHU usually keeps leads short.</li>
<li>Where drives must be remote, get the drive manufacturer's maximum cable length for the drive, voltage and carrier frequency, with and without filters.</li>
<li>Specify output filtering where the run exceeds the unfiltered limit.</li>
<li>Specify NEMA MG 1 Part 31 motors.</li>
<li>Use VFD-rated cable and proper termination.</li>
</ol>
<?php guide_end([
    ['What is reflected wave on a VFD?', 'It is voltage overshoot at the motor terminals caused by fast drive pulses reflecting off the motor\'s high impedance at the end of a long cable. Peaks can approach twice the drive\'s DC bus voltage.'],
    ['How long can a VFD motor cable be?', 'It depends on the drive model, voltage, carrier frequency and filtering. Drive manufacturers publish maximum lengths; with fast-switching drives the unfiltered limit can be short.'],
    ['What is the difference between a dV/dt filter and a sine wave filter?', 'A dV/dt filter slows the pulse edges to limit overshoot. A sine wave filter removes most of the switching content and delivers a nearly sinusoidal voltage, at higher cost and size.'],
    ['Does an inverter-duty motor eliminate reflected wave problems?', 'It tolerates higher voltage peaks but does not reduce them. On long runs, filtering or a shorter cable is still needed.'],
]);
