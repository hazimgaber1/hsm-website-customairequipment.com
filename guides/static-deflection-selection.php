<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('static-deflection-selection'); ?>
<p class="lede">Required static deflection comes from two checks: the isolator must give a natural frequency well below the lowest operating speed, and it must be soft compared with the floor it sits on. Calculate the first from speed and target efficiency, then compare the result with the ASHRAE Applications Handbook recommendation for the equipment type and floor span, and use whichever is larger.</p>

<h2>The governing equations</h2>
<p>For a simple spring-mass system, the natural frequency depends only on how far the isolator compresses under the equipment's weight:</p>
<p class="formula">fn (Hz) = 3.13 ÷ √δ   (δ = static deflection in inches)</p>
<p class="formula">fn (Hz) = 15.8 ÷ √δ   (δ in millimetres)</p>
<p>The transmissibility, the fraction of disturbing force that reaches the structure, for an undamped system above resonance is:</p>
<p class="formula">T = 1 ÷ ((fd ÷ fn)² − 1)</p>
<p>where fd is the disturbing frequency, usually the lowest running speed in revolutions per second (rpm ÷ 60). Isolation efficiency is 1 − T, often expressed as a percentage. Rearranging for the deflection needed to reach a target transmissibility:</p>
<p class="formula">fn,max = fd ÷ √(1 + 1/T)     then     δ = (3.13 ÷ fn,max)²</p>

<h2>Worked example: a 900 rpm plenum fan</h2>
<p>A plenum fan runs at 900 rpm at design. The VFD will turn it down to 60 percent speed, or 540 rpm, at minimum flow. The target is 90 percent isolation (T = 0.10) at the lowest speed.</p>
<ol>
<li>Lowest disturbing frequency: fd = 540 ÷ 60 = 9.0 Hz.</li>
<li>Maximum natural frequency: fn = 9.0 ÷ √(1 + 10) = 9.0 ÷ 3.317 = 2.71 Hz.</li>
<li>Required deflection: δ = (3.13 ÷ 2.71)² = 1.33 in. (34 mm).</li>
<li>Select the next standard spring size above the requirement: a 2 in. nominal spring loaded to roughly 1.5 in. or more of actual deflection.</li>
<li>Check the result at design speed: with δ = 1.5 in., fn = 3.13 ÷ 1.225 = 2.56 Hz; fd at 900 rpm = 15 Hz; T = 1 ÷ ((15 ÷ 2.56)² − 1) = 1 ÷ 33.3 = 0.030, or 97 percent.</li>
</ol>
<p>Had the calculation used only design speed, the answer would have been about 0.48 in., and the isolators would have performed poorly whenever the VFD slowed the fan. Always calculate at the lowest continuous operating speed.</p>
<p class="warn">During startup and shutdown the fan passes through the isolator's natural frequency. That is normal and brief. Problems arise only if the VFD minimum speed sits close to resonance; then set a higher minimum or a skip band, as described in <a href="<?= url('guides/vfd-resonance-skip-frequencies') ?>">diagnosing resonance at specific fan speeds</a>.</p>

<h2>Accounting for the floor</h2>
<p>The equations above assume a rigid support. Real floors deflect under load and have their own natural frequency. If the isolator is not much softer than the floor, the two act as springs in series and the floor can move with the equipment, cutting effective isolation. A widely used guideline is that the isolator's static deflection should be roughly ten times the floor's additional deflection caused by the equipment load. The structural engineer can estimate floor deflection at the equipment location.</p>
<p>This is why the ASHRAE Applications Handbook, in its Noise and Vibration Control chapter, tabulates recommended minimum deflections by:</p>
<ul>
<li>Equipment type (for example centrifugal fans, axial fans, packaged AHUs, pumps, chillers).</li>
<li>Horsepower and speed range.</li>
<li>Support condition: slab on grade, and floor spans in bands up to roughly 20 ft, 20 to 30 ft and 30 to 40 ft.</li>
</ul>
<p>Recommended values increase as spans lengthen and as speeds drop, because long spans are more flexible and slow equipment needs a lower natural frequency. Use the table from the current edition rather than memorised values, and treat it as a minimum alongside your own calculation.</p>

<h2>Second example: a slow fan on a long span</h2>
<p>A large housed centrifugal turns at 450 rpm on a 35 ft (10.7 m) concrete floor span. Target 90 percent isolation.</p>
<ol>
<li>fd = 450 ÷ 60 = 7.5 Hz.</li>
<li>fn,max = 7.5 ÷ 3.317 = 2.26 Hz.</li>
<li>δ = (3.13 ÷ 2.26)² = 1.92 in.</li>
<li>The structural engineer reports the floor deflects 0.15 in. under the unit load. Ten times that is 1.5 in., less than the 1.92 in. already required.</li>
<li>Check the ASHRAE table for the fan type, speed and span; if it calls for more than 1.92 in., use the table value.</li>
<li>Select 3 in. nominal springs to obtain at least 2 in. of operating deflection with reserve travel.</li>
</ol>

<h2>Practical selection rules</h2>
<ul>
<li><strong>Load each isolator correctly.</strong> Equipment weight is rarely uniform. Calculate the load at each mounting point from the centre of gravity, and select spring rates per point so all isolators reach similar deflection.</li>
<li><strong>Use actual operating deflection, not nominal.</strong> A "2 in." spring at 60 percent of rated load deflects only about 1.2 in.</li>
<li><strong>Keep reserve travel.</strong> Springs should have enough extra travel before going solid to handle overload, commonly specified as a percentage of rated deflection.</li>
<li><strong>Include motor speed.</strong> On belt-driven fans the motor runs faster than the fan, so the fan speed governs; on direct drive they are the same.</li>
<li><strong>Remember the other end.</strong> Isolation can be defeated by rigid duct, pipe and conduit connections; see <a href="<?= url('guides/flex-connector-vibration-short-circuits') ?>">troubleshooting vibration short-circuits</a>.</li>
</ul>
<p>Choosing between spring and elastomer hardware once you know the deflection is covered in <a href="<?= url('guides/spring-vs-neoprene-isolators') ?>">spring vs neoprene isolators</a>.</p>
<?php guide_end([
    ['How do I calculate static deflection for a vibration isolator?', 'Find the lowest disturbing frequency in hertz, divide by the square root of one plus one over the target transmissibility to get the maximum natural frequency, then compute deflection in inches as 3.13 divided by that frequency, squared. Compare the result with the ASHRAE table for the floor span and use the larger value.'],
    ['What isolation efficiency should I target?', 'Many designers aim for 90 percent or better at the lowest operating speed for equipment near occupied spaces. Critical or long-span installations often target higher. The ASHRAE recommended deflection table gives a practical minimum by equipment type and span.'],
    ['Why does floor span change the required deflection?', 'Longer spans are more flexible and have lower natural frequencies. The isolator must be much softer than the floor, roughly ten times the floor deflection under load, or the floor moves with the equipment and isolation is lost.'],
]);
