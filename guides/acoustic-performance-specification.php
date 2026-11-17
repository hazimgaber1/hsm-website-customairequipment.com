<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('acoustic-performance-specification'); ?>
<p class="lede">An enforceable AHU acoustic specification sets maximum sound power in each octave band for each path (discharge, inlet and casing-radiated) at a defined operating point, names the test or calculation method, states the tolerance, and says how compliance will be shown. A single "NC" or "dBA" number in an equipment specification cannot be enforced against the manufacturer, because room levels depend on systems the manufacturer does not supply.</p>

<h2>Why specify sound power, not room levels</h2>
<p>The manufacturer controls the unit. The design team and contractor control the ductwork, terminal units, diffusers, partitions and room finishes. A clause like "the AHU shall not produce more than NC-35 in occupied spaces" mixes those responsibilities and is nearly impossible to enforce. Instead:</p>
<ul>
<li>The engineer or acoustician chooses room criteria and runs the path calculation (see <a href="<?= url('guides/room-sound-from-ahu-data') ?>">calculating room sound levels from AHU sound data</a>).</li>
<li>The calculation produces the maximum unit sound power that will still meet the criteria.</li>
<li>The equipment specification states those maximum sound power levels as requirements.</li>
</ul>
<p>The manufacturer can then select fans, plenums and attenuation to meet a clear, measurable target.</p>

<h2>What the specification must contain</h2>
<ol>
<li><strong>Maximum sound power levels</strong> in dB re 1 pW, for each octave band from 63 Hz to 8 kHz.</li>
<li><strong>Separate limits for each path</strong>: ducted discharge, ducted inlet (or return), casing-radiated, and where relevant free inlet or outdoor intake.</li>
<li><strong>The operating point</strong> at which the limits apply: airflow, external static pressure and, if relevant, the minimum airflow condition.</li>
<li><strong>The basis of data</strong>: tested in accordance with AHRI 260 for the unit, or derived from fan data tested to the applicable AMCA standard with stated corrections.</li>
<li><strong>Whether calculated data is acceptable</strong>, and what validation is required.</li>
<li><strong>Tolerance</strong> on submitted and verified values.</li>
<li><strong>Submittal requirements</strong>, including the format of data.</li>
<li><strong>Verification</strong>: whether factory testing, witness testing or field measurement is required, and the remedy for non-compliance.</li>
</ol>

<h2>Sample specification language</h2>
<p>Adapt the following to the project's specification format. Values in brackets are placeholders for the engineer to complete.</p>
<p><em>Part 1, Performance requirements</em></p>
<p><code>1.x ACOUSTIC PERFORMANCE</code></p>
<p><code>A. Air handling unit sound power levels shall not exceed the values scheduled below at the scheduled design airflow and external static pressure, with all components installed and filters at [mid-life] pressure drop.</code></p>
<table>
<thead><tr><th>Path (dB re 1 pW)</th><th>63</th><th>125</th><th>250</th><th>500</th><th>1k</th><th>2k</th><th>4k</th><th>8k</th></tr></thead>
<tbody>
<tr><td>Ducted discharge</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td></tr>
<tr><td>Ducted inlet (return)</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td></tr>
<tr><td>Casing radiated</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td></tr>
<tr><td>Outdoor air intake (free)</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td><td>[ ]</td></tr>
</tbody>
</table>
<p><code>B. Sound power data shall be determined in accordance with AHRI Standard 260. Data calculated from laboratory tests of representative units is acceptable where the manufacturer documents the test basis and the calculation method. Fan-only sound power without correction for unit components and casing is not acceptable.</code></p>
<p><code>C. Values shall include the effect of all components between the fan and each opening, including integral sound attenuators, lined plenums and coils. Integral attenuators shall be identified with their pressure drop included in the fan selection.</code></p>
<p><code>D. Submitted values shall not exceed scheduled values in any octave band. A submitted value above the scheduled value in any band shall be identified, and the submittal shall state the proposed remedy.</code></p>
<p><code>E. Where the unit includes fan arrays, values shall represent all fans operating at the scheduled condition. Provide separate data for operation with one fan out of service where redundancy is specified.</code></p>
<p><em>Part 1, Submittals</em></p>
<p><code>F. Submit octave-band sound power for each path at the design condition and at [minimum airflow], with fan speed, fan type and blade count. State whether each value is tested or calculated.</code></p>
<p><em>Part 2, Construction</em></p>
<p><code>G. Fan section and discharge plenum liners shall be [solid / perforated with film-faced insulation] as scheduled. Casing panels shall be as submitted for the acoustic data; substitutions require resubmission of casing-radiated data.</code></p>
<p><em>Part 3, Testing</em></p>
<p><code>H. [Optional] Conduct a factory sound test on [one] unit at the design condition. Testing method, instrumentation and measurement positions shall be submitted for approval before the test. Results shall be compared with submitted data within a tolerance of [ ] dB per octave band.</code></p>

<h2>Setting realistic tolerances</h2>
<p>Sound measurement has inherent uncertainty, greater at low frequencies and in non-laboratory conditions. Tolerances that are tighter than the test method can deliver invite disputes. Common practice is to allow a small tolerance per band for laboratory data and a larger one for factory or field verification, with the 63 Hz band treated most generously. State tolerances explicitly rather than leaving them to interpretation, and consider whether the acceptance criterion is "each band" or "most bands with a limited excess in one band". Witness test arrangements are covered in <a href="<?= url('guides/factory-witness-testing') ?>">factory witness testing</a>.</p>

<h2>Common specification mistakes</h2>
<ul>
<li><strong>Specifying dBA only.</strong> It cannot be checked against octave-band path calculations.</li>
<li><strong>Specifying only discharge sound.</strong> Inlet and casing paths often govern.</li>
<li><strong>Omitting the operating point.</strong> Sound power at a lower static or slower speed is not comparable.</li>
<li><strong>Specifying a silencer and a sound limit for the same path</strong> without stating whether the limit is before or after the silencer.</li>
<li><strong>Copying limits from another project</strong> without rerunning the path analysis.</li>
<li><strong>Ignoring part-load conditions</strong> where a fan array or VAV system spends most hours at reduced speed.</li>
</ul>
<p class="note">If the project acoustician prefers to specify integral attenuation by insertion loss instead of overall unit sound power, state which approach governs. Specifying both invites conflicting interpretations.</p>
<p>For reading the data you receive in response, see <a href="<?= url('guides/octave-band-sound-data') ?>">reading AHU octave band sound data</a>.</p>
<?php guide_end([
    ['Should an AHU specification include an NC requirement?', 'Not as the unit requirement. Room NC depends on ductwork, terminals and construction that the manufacturer does not supply. Specify maximum octave-band sound power by path instead, derived from the room criteria by calculation.'],
    ['What standard should be referenced for AHU sound data?', 'AHRI 260 is the usual reference for ducted air-moving equipment such as air handlers. Fan-only data from AMCA standards can be used only with corrections for unit components and casing.'],
    ['How do I specify sound for a fan array?', 'Require octave-band sound power for all fans operating at the design condition, and separate data for any specified redundancy condition, such as one fan out of service, at each path.'],
]);
