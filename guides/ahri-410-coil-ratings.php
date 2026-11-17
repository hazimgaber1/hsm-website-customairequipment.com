<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahri-410-coil-ratings'); ?>
<p class="lede">AHRI Standard 410 defines how forced-circulation air-cooling and air-heating coils are rated, and the associated AHRI certification program checks that a manufacturer's coil selection software predicts capacity and pressure drop within stated tolerances. Certification gives you confidence in the coil's rated performance on a test stand; it does not certify how the coil performs once installed in a particular air handler.</p>

<h2>What the standard does</h2>
<p>AHRI 410 sets out a common method for rating coils so that capacity and pressure drop from different manufacturers can be compared on the same basis. It covers the definitions, test methods, rating conditions, the way performance must be calculated and published, and the tolerances allowed between rated and tested values. The underlying laboratory test methods follow ASHRAE's coil test standard, which defines how air and fluid conditions are measured in the test apparatus.</p>
<p>Coil manufacturers do not test every coil they build. Instead, they publish performance through selection software built on heat transfer and friction correlations. The value of AHRI 410 lies in requiring that those correlations be validated: a coil chosen at random and tested in a laboratory must perform within tolerance of what the software said it would.</p>

<h2>How the certification program works</h2>
<p>AHRI runs a certification program for coils rated under AHRI 410. In outline:</p>
<ol>
<li>A participating manufacturer submits its selection program and coil product lines.</li>
<li>AHRI selects coils for testing at an independent laboratory, typically sampling across fluids, tube sizes, fin types and row counts within the program scope.</li>
<li>Tested capacity and pressure drop are compared with the manufacturer's software output for the same conditions.</li>
<li>If results fall outside tolerance, the manufacturer must correct its ratings or software; persistent failures can lead to loss of certification for the affected product line.</li>
<li>Testing is repeated on an ongoing basis, so certification is maintained rather than granted once.</li>
</ol>
<p>The program's scope, including which coil types, fluids and operating ranges are eligible, is set by AHRI and can change between editions of the operations manual. Check the current program scope and the AHRI directory listing for the specific manufacturer and product line rather than assuming every coil a manufacturer builds is covered.</p>

<h2>What the rating tells you</h2>
<ul>
<li><strong>Capacity</strong> (total and sensible for cooling coils, total for heating coils) at the stated air and fluid conditions.</li>
<li><strong>Air-side pressure drop</strong>, dry or wet as applicable.</li>
<li><strong>Fluid-side pressure drop.</strong></li>
<li><strong>Leaving air and fluid conditions</strong> consistent with the energy balance.</li>
</ul>
<p>A certified selection printout typically carries a statement or mark indicating it was produced by certified software within the program scope. When the coil is outside scope, for example an unusual fluid, special materials or conditions beyond the program limits, the printout should say so.</p>

<h2>What certification does not cover</h2>
<p>This is where most misunderstandings arise. AHRI 410 certification is a statement about a coil in a controlled test, not about a coil in a unit.</p>
<table>
<thead><tr><th>Item</th><th>Covered by AHRI 410 certification?</th><th>Why it matters</th></tr></thead>
<tbody>
<tr><td>Coil capacity at uniform test airflow</td><td>Yes, within tolerance</td><td>Baseline performance is reliable</td></tr>
<tr><td>Performance with non-uniform approach airflow in a unit</td><td>No</td><td>Poor air distribution can reduce installed capacity</td></tr>
<tr><td>Fouling over time</td><td>No; ratings are clean coil</td><td>Dirty coils fall short of rating</td></tr>
<tr><td>Applied coatings</td><td>Generally no; check scope</td><td>Coatings add a small penalty</td></tr>
<tr><td>Moisture carryover</td><td>No</td><td>Face velocity limits are a separate selection check</td></tr>
<tr><td>Drain pan, casing, leakage</td><td>No</td><td>Unit-level performance is a separate program</td></tr>
<tr><td>Coils outside program scope</td><td>No</td><td>Special materials or fluids may be uncertified</td></tr>
</tbody>
</table>
<p>Air handler level certification under AHRI 430 and casing performance under AHRI 1350 address the unit as a whole; see <a href="<?= url('guides/ahri-430-certification') ?>">AHRI 430 certification</a> and <a href="<?= url('guides/ahri-1350-casing-performance-spec') ?>">AHRI 1350 casing performance</a>. A broader map of where coil ratings sit among the various standards is in <a href="<?= url('guides/ahu-standards-map') ?>">the AHU standards map</a>.</p>

<h2>Using certification in specifications and submittal review</h2>
<p>A common specification approach is to require that coils be rated in accordance with AHRI 410 and certified under the AHRI program where the coil type falls within scope. That phrasing avoids excluding legitimate special coils while still requiring certified ratings for the bulk of standard coils.</p>
<p>During submittal review:</p>
<ul>
<li>Confirm the coil selection printouts carry the certification statement, or explain why they are outside scope.</li>
<li>Check the manufacturer and product line in the AHRI directory.</li>
<li>Confirm the conditions on the printout match the schedule: airflow, entering air, fluid temperatures, fluid type and flow.</li>
<li>Look for uncertified adjustments, such as a coating factor or glycol correction applied outside the certified software, and ask how they were derived.</li>
</ul>

<h2>Practical value for owners and engineers</h2>
<p>Certified coil ratings reduce the risk of a coil that falls short in commissioning because of optimistic software. They also level the playing field when comparing bids: a certified coil from one manufacturer and a certified coil from another, rated at the same conditions, can be compared on capacity and pressure drop with some confidence. What certification cannot do is fix a poor selection: a certified coil selected at 600 fpm will still carry water, and a certified coil with laminar flow at part load will still produce low delta-T. Those checks remain the designer's responsibility.</p>
<p class="note">For custom units, ask whether the manufacturer can run-test the assembled unit in the factory. A run test checks airflow, fan performance and operation of the coil section in the actual casing, which complements the coil-level assurance AHRI 410 provides.</p>
<?php guide_end([
    ['What does AHRI 410 certification mean for a coil?', 'It means the manufacturer\'s coil rating software has been verified by independent laboratory tests of sample coils, and the tested capacity and pressure drop fell within the tolerances set by the program. It applies to coils within the program\'s defined scope.'],
    ['Does AHRI 410 certify the whole air handler?', 'No. AHRI 410 covers coils on their own. Air handling unit performance is addressed by the AHRI 430 program, and casing performance by AHRI 1350. A certified coil can still underperform in a unit with poor airflow distribution.'],
    ['Are all coils covered by AHRI 410 certification?', 'No. The program has a defined scope of coil types, fluids and operating ranges. Special materials, unusual fluids or conditions outside the scope may not be certified, and the selection printout should state when a coil is outside scope.'],
]);
