<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-standards-map'); ?>
<p class="lede">No single standard covers an air handler. ASHRAE sets design and energy requirements, AHRI rates packaged performance, AMCA rates fans and dampers, UL and CSA cover electrical and fire safety, and codes such as the IMC, NFPA 90A and NECB pull pieces of each into law. This map shows which document answers which question.</p>

<h2>Four kinds of documents</h2>
<p>It helps to sort the alphabet soup by what each document does:</p>
<ul>
<li><strong>Test standards</strong> define how to measure something in a laboratory, for example AMCA 210 for fan airflow.</li>
<li><strong>Rating standards and certification programs</strong> define standard conditions and verify that published ratings match tests, for example AHRI 410 for coils.</li>
<li><strong>Design and performance standards</strong> set minimum requirements for a building or system, for example ASHRAE 62.1 ventilation or 90.1 energy.</li>
<li><strong>Safety standards and codes</strong> set requirements that become law when adopted, for example UL 1995 listing or the International Mechanical Code.</li>
</ul>
<p>A standard has no legal force until a code, a contract or a regulation references it.</p>

<h2>Map by AHU component and topic</h2>
<table>
<thead><tr><th>Topic</th><th>Main documents</th><th>Type</th></tr></thead>
<tbody>
<tr><td>Installed supply fan performance</td><td>AHRI 430</td><td>Rating</td></tr>
<tr><td>Bare fan air performance</td><td>AMCA 210 (ASHRAE 51), AMCA 211 program</td><td>Test, certification</td></tr>
<tr><td>Fan sound</td><td>AMCA 300, AMCA 301, AMCA 311 program</td><td>Test, calculation, certification</td></tr>
<tr><td>Fan efficiency metric</td><td>AMCA 208 (Fan Energy Index)</td><td>Calculation</td></tr>
<tr><td>Fan system effect</td><td>AMCA 201</td><td>Application guidance</td></tr>
<tr><td>Spark-resistant fan construction</td><td>AMCA 99</td><td>Classification</td></tr>
<tr><td>Casing deflection, leakage, thermal</td><td>AHRI 1350</td><td>Test and rating</td></tr>
<tr><td>Water, steam and refrigerant coils</td><td>AHRI 410</td><td>Rating</td></tr>
<tr><td>Energy recovery ventilators</td><td>AHRI 1060, ASHRAE 84</td><td>Rating, test</td></tr>
<tr><td>Unit sound power</td><td>AHRI 260</td><td>Rating</td></tr>
<tr><td>Dampers and louvers</td><td>AMCA 500-D, AMCA 500-L, AMCA 511 program</td><td>Test, certification</td></tr>
<tr><td>Filters, efficiency</td><td>ASHRAE 52.2 (MERV), ISO 16890</td><td>Test</td></tr>
<tr><td>Filters, flammability</td><td>UL 900</td><td>Safety test</td></tr>
<tr><td>HEPA filters</td><td>IEST recommended practices, EN 1822</td><td>Test</td></tr>
<tr><td>Electrical and fire safety of the unit</td><td>UL 1995 / CSA C22.2 No. 236</td><td>Safety standard</td></tr>
<tr><td>Control panels</td><td>UL 508A, CSA industrial control equipment standards</td><td>Safety standard</td></tr>
<tr><td>Insulation surface burning</td><td>ASTM E84 / UL 723, CAN/ULC-S102</td><td>Test</td></tr>
<tr><td>Refrigerant safety</td><td>ASHRAE 15, ASHRAE 34, CSA B52, UL 60335-2-40</td><td>Safety standard</td></tr>
<tr><td>Ventilation and IAQ</td><td>ASHRAE 62.1, IMC Chapter 4</td><td>Design standard, code</td></tr>
<tr><td>Energy</td><td>ASHRAE 90.1, IECC, NECB, Title 24</td><td>Design standard, code</td></tr>
<tr><td>Thermal comfort</td><td>ASHRAE 55</td><td>Design standard</td></tr>
<tr><td>Healthcare ventilation</td><td>ASHRAE 170, CSA Z317.2</td><td>Design standard</td></tr>
<tr><td>Smoke detection, fire dampers, materials</td><td>NFPA 90A, IMC, NBC</td><td>Code, standard</td></tr>
<tr><td>Seismic</td><td>IBC, ASCE 7, ICC-ES AC156</td><td>Code, test criteria</td></tr>
<tr><td>Commissioning</td><td>ASHRAE 202, Guideline 0, Guideline 1.1</td><td>Process standard</td></tr>
<tr><td>Inspection and maintenance</td><td>ASHRAE 180</td><td>Practice standard</td></tr>
<tr><td>Control sequences</td><td>ASHRAE Guideline 36</td><td>Guideline</td></tr>
<tr><td>Vibration and balance</td><td>ISO 21940, ISO 10816 / 20816, AMCA 204</td><td>Measurement, balance quality</td></tr>
</tbody>
</table>

<h2>US and Canadian equivalents</h2>
<p>Most performance standards (ASHRAE, AHRI, AMCA) apply on both sides of the border. Safety and code documents split:</p>
<table>
<thead><tr><th>Purpose</th><th>United States</th><th>Canada</th></tr></thead>
<tbody>
<tr><td>Electrical installation</td><td>NFPA 70 (NEC)</td><td>CSA C22.1 (CEC Part I)</td></tr>
<tr><td>Building code</td><td>IBC (state adopted)</td><td>National Building Code (provincially adopted)</td></tr>
<tr><td>Mechanical code</td><td>IMC or UMC</td><td>Provincial building code Part 6, plus referenced standards</td></tr>
<tr><td>Energy</td><td>90.1, IECC, state codes</td><td>NECB, 90.1 in some provinces</td></tr>
<tr><td>Refrigeration safety</td><td>ASHRAE 15</td><td>CSA B52</td></tr>
<tr><td>Healthcare HVAC</td><td>ASHRAE 170, FGI Guidelines</td><td>CSA Z317.2</td></tr>
<tr><td>Fire test for materials</td><td>ASTM E84 / UL 723</td><td>CAN/ULC-S102</td></tr>
</tbody>
</table>
<p>The relationship between the two healthcare standards is explored in <a href="<?= url('guides/ashrae-170-vs-csa-z317-2') ?>">ASHRAE 170 vs CSA Z317.2</a>, and the safety listing split in <a href="<?= url('guides/ul-1995-vs-csa-c22-2-no-236') ?>">UL 1995 vs CSA C22.2 No. 236</a>.</p>

<h2>Questions this map helps answer</h2>
<h3>"Is this performance number verified?"</h3>
<p>Look for a certification program: AHRI for packaged unit, coil and energy recovery ratings; AMCA for fans, dampers and louvers. A test standard reference alone means the manufacturer claims to follow a test method, not that an independent party has checked the results.</p>
<h3>"Is this unit legal to install?"</h3>
<p>That depends on the adopted codes, which pull in the safety standards. Listing to UL 1995 or CSA C22.2 No. 236 is the usual threshold, with code-specific items layered on top.</p>
<h3>"Does the design meet energy code?"</h3>
<p>That depends on whether the jurisdiction adopted 90.1, the IECC, NECB or a state code, and which edition.</p>

<h2>Where standards overlap or conflict</h2>
<p>Some topics are touched by several documents at once, and the overlaps cause most of the confusion on projects:</p>
<ul>
<li><strong>Fan efficiency</strong> appears in AMCA 208 (how FEI is calculated), ASHRAE 90.1 and the IECC (minimum values), and AHRI 430 (installed fan power). A fan can be correctly rated under one and still fail the requirement in another.</li>
<li><strong>Casing leakage</strong> is rated under AHRI 1350, but specifications often set their own factory test pressures and allowable leakage percentages. State which governs.</li>
<li><strong>Drain pans</strong> are covered by ASHRAE 62.1 design rules and by the mechanical code's condensate provisions. Both apply where both are adopted.</li>
<li><strong>Smoke detection</strong> requirements live in NFPA 90A and the IMC, while detector installation and signalling follow NFPA 72. The AHU manufacturer, mechanical contractor and fire alarm contractor all have a piece.</li>
<li><strong>Filtration</strong> efficiency comes from ASHRAE 52.2, but minimum MERV values are set by 62.1, ASHRAE 170, energy codes in some states and green building programs.</li>
</ul>
<p>When two documents set different values for the same item, the adopted code governs over a referenced standard, and the stricter of two adopted requirements normally applies. Contract documents can always require more than code.</p>

<h2>Using the map in a specification</h2>
<p>Specifications often cite standards in a single paragraph without saying what each one is for. Cite each standard for a specific requirement instead, and state whether you want testing, a rating, or third-party certification. How to word that without excluding custom units is covered in <a href="<?= url('guides/certification-requirements-specification') ?>">specifying certification and listing requirements</a>.</p>
<p class="note">Editions matter. A specification that cites a standard without an edition year normally means the edition referenced by the governing code or the latest edition at bid; state which.</p>
<?php guide_end([
    ['Which standard covers air handler fan performance?', 'AHRI 430 rates supply fan performance installed in the AHU casing. AMCA 210 and the AMCA certified ratings program cover bare fan performance tested on its own.'],
    ['What standard covers AHU electrical safety?', 'The harmonized UL 1995 / CSA C22.2 No. 236 standard for heating and cooling equipment covers electrical and fire safety of the unit. Control panels may be covered separately under UL 508A or CSA equivalents.'],
    ['Do ASHRAE standards have legal force?', 'Only when adopted by a code, regulation or contract. For example, ASHRAE 90.1 becomes enforceable when a state or province adopts it as its energy code.'],
    ['What is the Canadian equivalent of ASHRAE 170?', 'CSA Z317.2 is the Canadian standard for HVAC systems in healthcare facilities. It covers similar ground to ASHRAE 170 but differs in many specific requirements.'],
]);
