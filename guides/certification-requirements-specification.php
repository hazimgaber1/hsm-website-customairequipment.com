<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('certification-requirements-specification'); ?>
<p class="lede">Write certification requirements so they demand verified performance and a valid safety listing without accidentally excluding custom units that sit outside catalog certification programs. The trick is to require the listing outright, and for performance ratings to require either program certification or testing to the referenced standard with documented, witnessable results.</p>

<h2>The problem with blanket certification clauses</h2>
<p>Many Division 23 air handler sections include a line such as "Unit shall be AHRI certified." For a catalog unit, that is easy to meet. For a custom unit, it can be impossible, because rating programs typically cover defined catalog product lines within size limits. The result is either a spec that excludes the custom manufacturers the project needs, or a requirement that everyone quietly ignores. Neither protects the owner.</p>
<p>Separate certification requirements into three categories, and treat each differently:</p>
<ol>
<li><strong>Safety listings</strong>, which are legally required and available for custom units.</li>
<li><strong>Component performance certifications</strong> (fans, coils, dampers, filters, recovery devices), which are generally available regardless of how custom the casing is.</li>
<li><strong>Whole-unit performance certifications</strong>, which may not be available for custom equipment and need an alternative.</li>
</ol>

<h2>Sample language: safety listing</h2>
<p><code>1.X QUALITY ASSURANCE</code></p>
<p><code>A. Electrical Components, Devices and Accessories: Listed and labeled as defined in NFPA 70 [and CSA C22.1] by a qualified testing agency acceptable to the authority having jurisdiction, and marked for intended location and application.</code></p>
<p><code>B. Air handling units shall be listed to UL 1995 / CSA C22.2 No. 236 by a Nationally Recognized Testing Laboratory [and a certification body accredited by the Standards Council of Canada]. The listing shall include all factory-installed options, including electric heaters, motor controllers and controls.</code></p>
<p><code>C. Where a portion of the unit cannot be listed at the factory, the manufacturer shall arrange for field evaluation and labeling before energization, at no additional cost to the Owner.</code></p>
<p class="note">Write "listed by an NRTL" rather than naming one laboratory. A cETLus mark is as valid as cULus, and naming one brand of mark can restrict competition without any safety benefit.</p>

<h2>Sample language: component performance</h2>
<p><code>D. Fans: Air performance ratings shall be certified under the AMCA Certified Ratings Program. Sound ratings shall be [AMCA certified] [determined in accordance with AMCA 300 and AMCA 301].</code></p>
<p><code>E. Coils: Water and refrigerant coil capacity and pressure drop ratings shall be certified in accordance with AHRI 410. Coils outside the scope of AHRI 410 certification shall be rated using the AHRI 410 method, with the rating basis stated on the submittal.</code></p>
<p><code>F. Dampers: Leakage and pressure drop ratings shall be AMCA certified to AMCA 500-D, Class [1A] [1].</code></p>
<p><code>G. Filters: Efficiency shall be determined in accordance with ASHRAE 52.2 [and ISO 16890]. Filters shall be classified under UL 900.</code></p>
<p><code>H. Energy recovery devices: Performance shall be certified in accordance with AHRI 1060 where within program scope.</code></p>
<p>Component certifications remain meaningful in custom units because the components are often standard products assembled into a custom casing. What the seal covers is explained in <a href="<?= url('guides/amca-certified-ratings-program') ?>">the AMCA certified ratings program</a>.</p>

<h2>Sample language: whole-unit performance</h2>
<p><code>I. Unit fan performance shall be [certified in accordance with AHRI 430] [or, for units outside the scope of the AHRI program, rated using certified fan data corrected for casing and system effects by the manufacturer, and verified by factory run test].</code></p>
<p><code>J. Casing performance shall be [rated in accordance with AHRI 1350 for deflection, leakage and thermal performance] [verified by factory testing per Part 3].</code></p>
<p><code>K. Unit sound power shall be [rated in accordance with AHRI 260] [determined by calculation from certified component data, with method stated].</code></p>
<p>The phrasing gives catalog suppliers a direct path and custom suppliers an equivalent path with verification. Background on the program limits is in <a href="<?= url('guides/ahri-430-certification') ?>">AHRI 430 certification</a>.</p>

<h2>Sample language: factory testing as the alternative</h2>
<p><code>3.X FACTORY TESTS</code></p>
<p><code>A. Each unit [or one unit of each type] shall be run tested at the factory to verify airflow, fan power, vibration and electrical operation. Airflow shall be measured with calibrated instruments using a method stated in the test procedure.</code></p>
<p><code>B. Casing leakage test: Pressurize the casing to [1.25] times design operating pressure and measure leakage; maximum allowable leakage [x]% of design airflow.</code></p>
<p><code>C. Submit test procedure for review 30 days before testing. Provide the Owner [14] days' notice to attend witness testing.</code></p>
<p><code>D. Submit certified test reports with instrument calibration records.</code></p>
<p>Custom Air Equipment run-tests units in its factory and offers witness testing, which is the kind of verification this clause is written to obtain. The general approach to planning a witness test is in <a href="<?= url('guides/factory-witness-testing') ?>">factory witness testing</a>.</p>

<h2>Other certifications to address</h2>
<ul>
<li><strong>Seismic:</strong> require certification only where the unit is a designated seismic system, and state the parameters.</li>
<li><strong>Insulation fire ratings:</strong> state test method by country.</li>
<li><strong>Control panels:</strong> require UL 508A or CSA equivalent where panels are not covered by the unit listing, with a marked SCCR.</li>
<li><strong>Refrigerant safety:</strong> require compliance with UL 60335-2-40 / CSA C22.2 No. 60335-2-40 for A2L DX systems.</li>
<li><strong>Manufacturer quality system:</strong> ISO 9001 registration can be requested, but avoid making it a pass/fail requirement unless it matters to the owner.</li>
</ul>

<h2>Wording traps to avoid</h2>
<table>
<thead><tr><th>Avoid</th><th>Use instead</th></tr></thead>
<tbody>
<tr><td>"UL listed"</td><td>"Listed by an NRTL to UL 1995"</td></tr>
<tr><td>"AHRI certified unit"</td><td>"AHRI certified where within program scope; otherwise tested per Part 3"</td></tr>
<tr><td>"Comply with all applicable standards"</td><td>Name each standard and what it applies to</td></tr>
<tr><td>"Equal to manufacturer X certification"</td><td>State the actual certification or test required</td></tr>
<tr><td>Standard numbers without edition</td><td>State "edition referenced by the governing code" or a year</td></tr>
</tbody>
</table>
<?php guide_end([
    ['Should custom air handlers be required to be AHRI certified?', 'Only where within program scope. Many custom units fall outside catalog certification programs, so the specification should allow rating with certified component data plus verification by factory run testing.'],
    ['How should a specification require a safety listing?', 'Require listing to UL 1995 / CSA C22.2 No. 236 by a nationally recognized testing laboratory, and in Canada by an accredited certification body, covering all factory-installed options. Avoid naming a single laboratory\'s mark.'],
    ['What is a good alternative to whole-unit certification?', 'Require certified components such as AMCA-rated fans and AHRI 410 coils, then verify the assembled unit by factory run testing with calibrated instruments and an option for witness testing.'],
    ['Should specifications state the edition of each standard?', 'Yes, or state that the edition referenced by the governing code applies. Undated references create disputes when standards are revised between design and bid.'],
]);
