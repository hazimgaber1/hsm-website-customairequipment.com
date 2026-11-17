<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('embodied-carbon-epd'); ?>
<p class="lede">An Environmental Product Declaration (EPD) is a third-party verified report of a product's environmental impacts across defined life-cycle stages, calculated under published product category rules; for air handlers, the headline figure is usually global warming potential in kilograms of CO₂-equivalent, dominated by the steel, aluminum, copper and insulation that go into the unit.</p>

<h2>Embodied versus operational carbon</h2>
<p>Operational carbon comes from the energy a unit uses while running: fan power, heating, cooling and humidification. Embodied carbon comes from everything else: extracting and processing raw materials, manufacturing components, assembling the unit, transporting it, installing it, maintaining and replacing parts, and eventually dismantling and disposing of it. As buildings get more efficient and grids decarbonize, embodied carbon becomes a larger share of a building's total life-cycle emissions, and mechanical equipment, with its heavy metal content, is a meaningful contributor.</p>
<p>For an air handler, operational carbon over its life usually exceeds embodied carbon by a wide margin, so efficiency should not be sacrificed to save material. But between two units of similar efficiency, embodied carbon can be a deciding factor, and owners are increasingly asked to report it.</p>

<h2>What an EPD contains</h2>
<p>An EPD is a Type III environmental declaration under ISO 14025, built from a life-cycle assessment following ISO 14040 and ISO 14044. It is prepared according to product category rules (PCR) that define how products of a given type are assessed, and is verified by an independent third party. Construction product EPDs are commonly prepared under EN 15804 or ISO 21930 frameworks. Typical contents:</p>
<ul>
<li><strong>Declared or functional unit:</strong> what the results describe, for example one air handler of stated capacity, or one unit of airflow capacity.</li>
<li><strong>System boundary:</strong> which life-cycle stages are included.</li>
<li><strong>Impact indicators:</strong> global warming potential (GWP), ozone depletion, acidification, eutrophication, smog formation, resource depletion and others.</li>
<li><strong>Material content</strong> and data sources.</li>
<li><strong>Validity period</strong> and verifier details.</li>
</ul>

<h2>Life-cycle modules</h2>
<table>
<thead><tr><th>Module</th><th>Stage</th><th>Relevance for AHUs</th></tr></thead>
<tbody>
<tr><td>A1 to A3</td><td>Raw material supply, transport to factory, manufacturing (cradle to gate)</td><td>Usually the largest declared share; driven by steel, aluminum, copper, insulation and electronics</td></tr>
<tr><td>A4 to A5</td><td>Transport to site, installation</td><td>Can be significant for large or long-distance shipments and field-assembled units</td></tr>
<tr><td>B1 to B7</td><td>Use stage, including maintenance, repair, replacement and operational energy</td><td>Refrigerant leakage for units with DX; replacement filters and parts; operational energy if declared</td></tr>
<tr><td>C1 to C4</td><td>End of life: deconstruction, transport, processing, disposal</td><td>Metals are highly recyclable; insulation and composites less so</td></tr>
<tr><td>D</td><td>Benefits and loads beyond the system boundary</td><td>Credits for recycled metals, reported separately</td></tr>
</tbody>
</table>
<p class="note">Many equipment EPDs declare only cradle to gate (A1 to A3). Comparing a cradle-to-gate EPD with a cradle-to-grave EPD is not a fair comparison.</p>

<h2>What drives an air handler's embodied carbon</h2>
<ul>
<li><strong>Steel mass and source.</strong> Casings, base frames and structural members are mostly steel. Recycled content and the production route (electric arc furnace versus blast furnace) strongly affect the emission factor.</li>
<li><strong>Aluminum.</strong> Fins, extrusions and some panels. Primary aluminum carries a high emission factor; recycled content reduces it substantially.</li>
<li><strong>Copper.</strong> Coil tubes and motor windings.</li>
<li><strong>Insulation.</strong> Mineral fibre and foam insulations have different footprints; foam blowing agents can matter.</li>
<li><strong>Motors, drives and electronics.</strong> Smaller mass but higher intensity per kilogram.</li>
<li><strong>Refrigerants.</strong> For DX units, refrigerant global warming potential and leakage over life can be substantial if included.</li>
</ul>
<p>Design choices that reduce material without compromising performance, such as right-sizing (see <a href="<?= url('guides/design-margins-without-oversizing') ?>">how to apply design margins without oversizing</a>), avoiding unnecessary sections, and specifying recycled-content steel and aluminum where available, reduce embodied carbon.</p>

<h2>Using EPDs in procurement</h2>
<p>Public and institutional owners in both Canada and the US increasingly request EPDs or embodied carbon data for building products under low-carbon procurement policies. For mechanical equipment, practice is still developing: product category rules for HVAC equipment exist but are less mature than for concrete or steel, and fewer manufacturers publish product-specific EPDs. Approaches owners use include:</p>
<ul>
<li>Requesting a product-specific or project-specific EPD where available.</li>
<li>Accepting an industry-average EPD as a baseline where product-specific data is not available.</li>
<li>Requesting a bill of materials with mass by material type, so the design team can estimate embodied carbon using generic emission factors.</li>
<li>Including embodied carbon as a scored criterion rather than a pass-fail requirement.</li>
</ul>
<p class="warn">Compare EPDs only when they use the same PCR, the same declared unit and the same system boundary. Differences in methodology can be larger than differences between products.</p>

<h2>Reporting and green building programs</h2>
<p>Whole-building life-cycle assessment tools allow designers to include mechanical equipment, though many assessments still focus on structure and envelope. Green building rating systems may reward EPDs or embodied carbon reductions; how those credits relate to air handlers is covered in the <a href="<?= url('guides/leed-credits-ahu-checklist') ?>">LEED credits AHU checklist</a>. Check the current version of the rating system or policy, since requirements in this area are changing quickly.</p>

<h2>Questions to ask a manufacturer</h2>
<ol>
<li>Do you have a product-specific EPD for this unit type? Under which PCR, and which modules are declared?</li>
<li>If not, can you provide a material breakdown by mass for the selected unit?</li>
<li>What is the recycled content and production route of the steel and aluminum used?</li>
<li>Which refrigerant does the unit use, and what is its global warming potential?</li>
<li>Is the EPD third-party verified, and when does it expire?</li>
</ol>
<?php guide_end([
    ['What is an EPD for an air handling unit?', 'It is a third-party verified Type III declaration under ISO 14025 that reports the unit\'s environmental impacts, including global warming potential, over defined life-cycle stages calculated under published product category rules.'],
    ['What contributes most to an AHU\'s embodied carbon?', 'Usually the metals: steel in casings and frames, aluminum in fins and extrusions, and copper in coils and motors. Insulation, electronics and, for DX units, refrigerant also contribute.'],
    ['Can I compare EPDs from different AHU manufacturers?', 'Only if they use the same product category rules, the same declared unit and the same life-cycle modules. Methodology differences can be larger than real product differences.'],
]);
