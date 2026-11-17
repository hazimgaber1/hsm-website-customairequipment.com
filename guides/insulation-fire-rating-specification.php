<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('insulation-fire-rating-specification'); ?>
<p class="lede">Specify casing insulation by test method and result: in the US, a flame spread index of 25 or less and a smoke-developed index of 50 or less when tested to ASTM E84 or UL 723; in Canada, the corresponding ratings tested to CAN/ULC-S102. State that the rating applies to the material as installed, including facings and adhesives.</p>

<h2>Why the rating must be specified carefully</h2>
<p>Insulation inside an air handler sits in the airstream. Fire codes and NFPA 90A limit how much flame spread and smoke such materials can contribute. The common shorthand "25/50" hides several questions that matter on a custom unit: which test, which country, which side of the panel, and whether the complete assembly or only the core material was tested. Loose specification language leads to submittals with ratings that do not apply to what is actually built.</p>

<h2>The test methods</h2>
<table>
<thead><tr><th>Test</th><th>Used in</th><th>What it measures</th></tr></thead>
<tbody>
<tr><td>ASTM E84</td><td>United States</td><td>Surface burning characteristics in a 25 ft (7.6 m) tunnel; reports flame spread index and smoke-developed index</td></tr>
<tr><td>UL 723</td><td>United States</td><td>Same tunnel test, published by UL; results are equivalent to ASTM E84</td></tr>
<tr><td>CAN/ULC-S102</td><td>Canada</td><td>Surface burning characteristics of building materials in a Canadian tunnel test; reports flame-spread rating and smoke-developed classification</td></tr>
<tr><td>CAN/ULC-S102.2</td><td>Canada</td><td>Variant for flooring and materials tested horizontally</td></tr>
</tbody>
</table>
<p>The US and Canadian tests are similar in concept but differ in specimen mounting and calculation, so a result from one does not automatically transfer to the other. A product listed with an E84 rating of 25/50 is not necessarily rated the same under S102, and Canadian inspectors expect S102 data.</p>
<p class="note">Fiberglass insulation usually rates well in both tests. Foam cores (polyurethane, polyisocyanurate) vary widely: some formulations achieve 25/50, others achieve a low flame spread but much higher smoke development. Ask for the actual report for the specific foam and thickness.</p>

<h2>What the requirement usually is</h2>
<p>For materials exposed to the airstream in ducts and air-handling equipment, NFPA 90A and the IMC set a general limit of flame spread not over 25 and smoke developed not over 50. Canadian building codes set comparable limits for duct linings and coverings, with values and exceptions in the adopted edition of the National Building Code or provincial code. Where insulation is fully enclosed between two metal skins, some codes and listings treat it differently from exposed insulation, but do not assume an exemption; confirm with the AHJ and the unit's listing.</p>
<p>Comparing fiberglass and foam insulation more generally (thermal, structural and acoustic performance) is outside this guide and covered in <a href="<?= url('guides/fiberglass-vs-foam-panel-insulation') ?>">fiberglass vs foam panel insulation</a>.</p>

<h2>Sample specification language</h2>
<p>Adapt the following for Division 23 air handling unit sections. Brackets indicate choices.</p>
<h3>United States projects</h3>
<p><code>2.X CASING INSULATION</code></p>
<p><code>A. Insulation and all facings, adhesives and coatings exposed to the airstream or within the casing panel shall have a flame spread index of not more than 25 and a smoke-developed index of not more than 50 when tested as a composite in accordance with ASTM E84 or UL 723.</code></p>
<p><code>B. Ratings shall apply to the material at the thickness and density installed.</code></p>
<p><code>C. Insulation shall comply with NFPA 90A requirements for materials in air distribution systems.</code></p>
<p><code>D. Submit test reports or listing data identifying the specific product, thickness and test standard.</code></p>
<h3>Canadian projects</h3>
<p><code>A. Insulation and all facings, adhesives and coatings exposed to the airstream or within the casing panel shall have a flame-spread rating and smoke-developed classification not exceeding the limits of the [National Building Code of Canada / provincial building code] for duct linings and coverings, when tested in accordance with CAN/ULC-S102.</code></p>
<p><code>B. Submit test reports or listing data from an accredited certification body confirming CAN/ULC-S102 results for the specific product and thickness.</code></p>
<h3>Cross-border projects</h3>
<p><code>A. Where equipment is manufactured for installation in [country], provide fire test data under the test method recognized in that country. Data from the test method of another country shall not be substituted.</code></p>

<h2>Items to address beyond the core insulation</h2>
<ul>
<li><strong>Facings and liners.</strong> Foil, mat or film facings can change the result. Test data should cover the faced product.</li>
<li><strong>Adhesives and sealants.</strong> Large areas of adhesive can contribute to flame spread. Specify that they meet the same limits or are within code allowances for small quantities.</li>
<li><strong>Perforated liners.</strong> Where insulation is behind a perforated metal liner for acoustic reasons, the insulation surface is effectively exposed to the airstream.</li>
<li><strong>Fiber erosion.</strong> Exposed fiberglass needs a coating or facing rated for the airstream velocity. That is a durability item but often appears alongside fire ratings.</li>
<li><strong>Gaskets and thermal breaks.</strong> Small components are usually allowed under code exceptions, but specify that they not exceed code limits.</li>
<li><strong>Exterior insulation on outdoor units.</strong> If foam is applied externally, building code requirements for exterior foam may also apply.</li>
</ul>

<h2>Reviewing submittals against the specification</h2>
<ol>
<li>Confirm the test method matches the country of installation.</li>
<li>Confirm the report covers the product as built: core, facing and thickness.</li>
<li>Check the reported values against the specified limits, not against a manufacturer's summary statement.</li>
<li>For foam panels, confirm the smoke-developed value specifically, since that is where foams most often fall short.</li>
<li>Keep the reports for the turnover package; inspectors and insurers sometimes ask for them years later.</li>
</ol>
<p>Fire safety items in general submittal review are covered in <a href="<?= url('guides/code-compliance-submittal-checklist') ?>">the code compliance checklist for AHU submittals</a>, and the broader NFPA 90A context is in <a href="<?= url('guides/nfpa-90a-smoke-detectors-dampers') ?>">NFPA 90A requirements</a>.</p>
<?php guide_end([
    ['What does 25/50 mean for insulation?', 'It means a flame spread index of 25 or less and a smoke-developed index of 50 or less, typically when tested to ASTM E84 or UL 723. It is the common limit for materials exposed to the airstream in air distribution systems.'],
    ['Is ASTM E84 accepted in Canada?', 'Canadian codes reference CAN/ULC-S102 for surface burning characteristics. Results from ASTM E84 do not automatically transfer, so Canadian projects should require S102 test data.'],
    ['Do foam panel cores meet 25/50?', 'Some foam formulations do and others do not, especially on smoke development. Ask for the test report for the specific foam, thickness and facing used in the panels.'],
    ['Does the fire rating apply to adhesives and facings?', 'It should. Specify that ratings apply to the composite material as installed, including facings, adhesives and coatings, so the test reflects what is built.'],
]);
