<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahri-1350-casing-performance-spec'); ?>
<p class="lede">Specify casing performance by naming the rating standard (AHRI 1350, with EN 1886 accepted as an equivalent reference), the class required for each property (deflection, air leakage, thermal transmittance and thermal bridging), the test pressures, and the documentation the manufacturer must submit. Performance language like this replaces prescriptive gauge-and-thickness specs that say little about how a casing actually behaves.</p>

<h2>What AHRI 1350 rates</h2>
<p>AHRI 1350 is the North American standard for the mechanical performance of central-station air handler casings. It is modelled closely on the European standard EN 1886, which has been used for years to classify casings. Both rate four properties, each grouped into classes:</p>
<table>
<thead><tr><th>Property</th><th>What it describes</th><th>Why it matters</th></tr></thead>
<tbody>
<tr><td>Casing deflection</td><td>How far panels and frames bow under positive and negative pressure</td><td>Stiffness, seal integrity, noise and appearance</td></tr>
<tr><td>Casing air leakage</td><td>Air escaping or entering through the casing at a test pressure</td><td>Energy, filter bypass, hygiene and pressure control</td></tr>
<tr><td>Thermal transmittance</td><td>Overall heat transfer through the casing, like a U-value</td><td>Energy loss or gain through the casing</td></tr>
<tr><td>Thermal bridging</td><td>How close the worst exterior spot gets to the interior air temperature</td><td>Condensation risk on the exterior</td></tr>
</tbody>
</table>
<p>The ratings come from tests on a standard test casing or model box built with the manufacturer's construction system, not from each production unit. That is why a factory leakage test on the actual unit, covered in <a href="<?= url('guides/factory-casing-leakage-testing') ?>">factory casing leakage testing</a>, is often specified as well.</p>
<p class="note">Class designations, test pressures and class limits are defined in the standards themselves and can change between editions. Quote them from the edition you are referencing rather than from memory or an old specification.</p>

<h2>How EN 1886 fits in</h2>
<p>Many manufacturers, especially those with European parentage or export business, publish EN 1886 classes: thermal transmittance classes T1 to T5, thermal bridging classes TB1 to TB5, leakage classes L1 to L3 and deflection classes D1 to D3, with class 1 the best in each case. EN 1886 values are widely understood and well documented. Allowing either standard broadens competition, but the specification should say that the cited classes must come from a test report, not a calculation, and identify the test laboratory.</p>

<h2>Choosing classes for the project</h2>
<ul>
<li><strong>Thermal bridging:</strong> the property most closely tied to visible problems. Set it from a condensation risk calculation for the worst combination of room dew point and supply temperature; see <a href="<?= url('guides/casing-condensation-risk-calculation') ?>">casing condensation risk</a>. Outdoor units and cold-supply units usually need one of the better classes.</li>
<li><strong>Thermal transmittance:</strong> driven by panel thickness and core. Matters most for outdoor units, where the casing is part of the building envelope.</li>
<li><strong>Air leakage:</strong> tighter classes for units with high-efficiency filtration, hospitals, labs, units with high pressure, and energy-critical projects. The cost of leakage can be estimated with the method in <a href="<?= url('guides/casing-leakage-energy-cost') ?>">energy cost of casing leakage</a>.</li>
<li><strong>Deflection:</strong> set at the design pressure of each section. Higher-pressure units need stiffer classes to keep seals intact.</li>
</ul>
<p>Over-specifying every class to the best available narrows the field and adds cost without benefit. Specify what the project needs and say why in the basis of design.</p>

<h2>Sample specification language</h2>
<p>Adapt the bracketed items. Use the specification section and article numbering of your office master.</p>
<ol>
<li><strong>Reference standards.</strong> "AHRI Standard 1350, Mechanical Performance Rating of Central Station Air-handling Unit Casings, current edition. EN 1886, Ventilation for buildings – Air handling units – Mechanical performance, current edition, is acceptable as an alternative reference where noted."</li>
<li><strong>Performance requirements.</strong> "Casing construction shall achieve the following classes when tested in accordance with AHRI 1350 [or EN 1886]: casing deflection class [ ]; casing air leakage class [ ] at [ ] in. w.c. positive and [ ] in. w.c. negative; thermal transmittance class [ ]; thermal bridging class [ ]."</li>
<li><strong>Basis of rating.</strong> "Classes shall be established by test of a casing assembly representative of the construction furnished, including panel type, thickness, core material, frame system and door construction. Calculated or estimated ratings are not acceptable."</li>
<li><strong>Test report.</strong> "Submit the test report identifying the test laboratory, test date, standard edition, test casing construction and results for each property. Where the furnished construction differs from the tested assembly, identify each difference."</li>
<li><strong>Section pressure.</strong> "Each section shall be rated for the maximum positive or negative pressure it may experience, including fan shutoff and damper closure conditions, as shown on the schedules. Deflection shall not exceed [L/240] of the panel span at [ ] times the section design pressure."</li>
<li><strong>Production unit leakage.</strong> "In addition to the class rating, the furnished unit shall be leak tested at the factory at [design pressure] and shall not exceed [ ]% of design airflow [or a stated cfm]." Use this article when the project needs proof on the actual unit.</li>
<li><strong>Doors and penetrations.</strong> "Access doors and factory penetrations shall be included in the tested assembly or shall be demonstrated to maintain the specified leakage and thermal bridging classes."</li>
</ol>

<h2>Reviewing what comes back</h2>
<p>When submittals arrive, check:</p>
<ul>
<li>The test report is for the same panel thickness, core and frame system as the proposed unit.</li>
<li>The standard and edition match what the specification cites.</li>
<li>Leakage class is reported at the pressure required, not at a lower test pressure.</li>
<li>Thermal bridging class includes doors, not only panels.</li>
<li>Any EN 1886 results are presented with their class designations and the corresponding values.</li>
</ul>
<p>A full checklist for casing submittals is in <a href="<?= url('guides/casing-submittal-review-checklist') ?>">casing submittal review</a>.</p>
<?php guide_end([
    ['What is AHRI 1350?', 'AHRI 1350 is a North American standard for rating the mechanical performance of air handler casings. It classifies casing deflection, air leakage, thermal transmittance and thermal bridging based on tests of a representative casing assembly.'],
    ['Is EN 1886 equivalent to AHRI 1350?', 'They are closely related and rate the same four properties, and AHRI 1350 was developed with EN 1886 as a reference. Class designations and test details differ in places, so a specification should state which standard governs and whether the other is accepted.'],
    ['Should I specify the best casing class for every property?', 'Not usually. Choose classes that match the project, for example a high thermal bridging class where condensation is a risk and a tight leakage class for high-pressure or hygiene-critical units. Over-specifying adds cost and limits competition.'],
]);
