<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahri-260-sound-ratings'); ?>
<p class="lede">AHRI Standard 260 defines how to measure and report the sound power of ducted air-moving and air-conditioning equipment, including air-handling units, as installed with ducts on the inlet and outlet. It produces octave-band sound power for the discharge, inlet and casing-radiated paths, which is exactly the data a designer needs for a path analysis.</p>

<h2>What AHRI 260 covers</h2>
<p>AHRI 260 applies to equipment that moves and conditions air through ductwork: central-station air handlers, ducted fan coils, ducted packaged equipment and similar products. Its purpose is to give a consistent laboratory method so that sound power published by different manufacturers was measured the same way.</p>
<p>The key point is that it tests the <em>assembled unit</em>, not just the fan. Coils, filters, plenums, casing panels, dampers and any built-in attenuation all affect what comes out of the unit's openings and through its walls. A fan-only rating cannot capture those effects, which is why AHRI 260 data is more representative of what the building actually receives. Fan-only sound testing under AMCA standards is a separate subject.</p>
<p>As with any standard, check which edition the manufacturer used and which edition your specification references; requirements are revised over time.</p>

<h2>How the measurement works</h2>
<p>The standard uses a reverberation room approach. In outline:</p>
<ol>
<li><strong>The unit is installed in or adjacent to a qualified reverberation room.</strong> Depending on which path is being measured, ducts connect the unit's openings either into the room or away from it.</li>
<li><strong>The unit runs at the specified rating condition</strong>: airflow, external static pressure and fan speed recorded.</li>
<li><strong>Sound pressure is measured at multiple positions in the reverberation room</strong> and averaged.</li>
<li><strong>A calibrated reference sound source</strong> with known sound power is measured in the same room. Comparing the unit's readings with the reference source's readings converts the unit's sound pressure to sound power, removing the room's influence.</li>
<li><strong>Results are reported as sound power levels in octave bands</strong>, typically 63 Hz through 8,000 Hz.</li>
</ol>
<p>To isolate each path, the configuration changes. For a ducted discharge measurement, the discharge duct terminates into the reverberation room while the inlet and casing are outside or shielded. For ducted inlet, the inlet duct opens into the room. For casing-radiated sound, the unit sits in the room with both inlet and discharge ducted out, so only casing sound is measured. The standard includes corrections for duct end reflection so that results represent the sound power entering the duct.</p>

<h2>What the reported data looks like</h2>
<table>
<thead><tr><th>Path</th><th>Configuration in test</th><th>Used by designers for</th></tr></thead>
<tbody>
<tr><td>Ducted discharge</td><td>Outlet duct terminates in reverberation room</td><td>Supply duct path to occupied rooms</td></tr>
<tr><td>Ducted inlet</td><td>Inlet duct terminates in reverberation room</td><td>Return path, outdoor intake path</td></tr>
<tr><td>Casing radiated</td><td>Unit in room, both openings ducted out</td><td>Mechanical room levels, wall transmission, rooftop breakout</td></tr>
<tr><td>Free inlet or free discharge (where applicable)</td><td>Opening unducted, radiating directly</td><td>Units with an open return or intake plenum</td></tr>
</tbody>
</table>
<p>The report should also state the operating point, fan speed and configuration of the tested unit, plus any components present. Without those details, the data cannot be applied with confidence to a project where the unit is configured differently.</p>

<h2>Custom units and rating by calculation</h2>
<p>Custom air handlers are built to order, so every configuration cannot be tested in a lab before it is sold. Manufacturers typically test representative units under AHRI 260 and use those results to build and validate calculation methods for other sizes and arrangements. When reviewing data for a custom unit, ask:</p>
<ul>
<li>Is this data tested, or calculated from a model validated by AHRI 260 testing?</li>
<li>How closely do the tested reference units resemble this configuration (fan type, plenum depth, liner type)?</li>
<li>What tolerance does the manufacturer state on the calculated values?</li>
<li>Can the unit be sound-tested at the factory if the project requires verification?</li>
</ul>
<p>Factory sound tests on a production unit are usually not performed in a qualified reverberation room and therefore are not full AHRI 260 tests. They can still be valuable as a comparative check. Witness testing arrangements are explained in <a href="<?= url('guides/factory-witness-testing') ?>">factory witness testing</a>.</p>

<h2>Using AHRI 260 data correctly</h2>
<ul>
<li><strong>Match the operating point.</strong> Sound power varies with fan speed and pressure. Data at a catalogue rating point does not apply at a different duty.</li>
<li><strong>Do not double count.</strong> If built-in silencers or lined plenums were part of the tested unit, their attenuation is already in the data.</li>
<li><strong>Use the right path for each analysis.</strong> Discharge data does not describe the return path. How each path reaches occupants is explained in <a href="<?= url('guides/inlet-discharge-casing-radiated-sound') ?>">inlet, discharge and casing-radiated sound paths</a>.</li>
<li><strong>Keep data in octave bands.</strong> Any A-weighted single number derived from AHRI 260 data loses the information needed for design.</li>
</ul>
<p class="note">AHRI 260 data is sound power, not sound pressure. It must be run through duct and room attenuation before it can be compared with a room criterion; the method is in <a href="<?= url('guides/room-sound-from-ahu-data') ?>">calculating room sound levels from AHU sound data</a>.</p>

<h2>Referencing it in a specification</h2>
<p>A specification can require that sound power data be "determined in accordance with AHRI 260" and submitted in octave bands from 63 Hz to 8 kHz for discharge, inlet and casing-radiated paths at the scheduled operating point. It should also say whether calculated data is acceptable and, if field or factory verification is required, what tolerance applies. Writing complete acoustic requirements is covered separately in this section.</p>
<?php guide_end([
    ['What does AHRI 260 measure?', 'It measures the sound power of ducted air-moving equipment such as air handlers, as installed with ducts. Results are octave-band sound power levels for the discharge, inlet and casing-radiated paths.'],
    ['Is AHRI 260 the same as an AMCA fan sound test?', 'No. AMCA fan sound tests measure the fan alone. AHRI 260 tests the complete unit, including coils, filters, plenums and casing, so it better represents what the building receives.'],
    ['Can a custom AHU have AHRI 260 data?', 'Usually the data is calculated from methods validated by AHRI 260 tests on representative units, because each custom unit is unique. Ask how the values were derived and what tolerance applies.'],
]);
