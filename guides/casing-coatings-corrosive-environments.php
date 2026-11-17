<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('casing-coatings-corrosive-environments'); ?>
<p class="lede">Choose a casing coating by first classifying the site's atmospheric corrosivity under ISO 12944-2 (C1 through C5, plus CX for extreme), then picking the durability you need, then selecting a coating system tested and documented for that category and durability. Use salt-spray hours as supporting evidence, not as the only criterion.</p>

<h2>Why salt-spray hours alone mislead</h2>
<p>Coating data sheets often quote hours of salt-spray exposure under ASTM B117 or ISO 9227. These tests expose panels to a continuous warm salt fog and are useful for comparing products and controlling quality. They do not reproduce real weather, which cycles between wet and dry, adds UV, and includes pollutants such as sulphur compounds. Two coatings with the same salt-spray rating can last very different times on a roof by the sea. ISO 12944 provides a more complete framework: classify the environment, define the required durability, then specify a system whose performance has been demonstrated for that combination, including cyclic testing where appropriate.</p>

<h2>Step 1: classify the environment</h2>
<p>ISO 12944-2 groups atmospheric environments into corrosivity categories. In plain terms:</p>
<table>
<thead><tr><th>Category</th><th>Corrosivity</th><th>Typical exterior examples</th><th>Typical interior examples</th></tr></thead>
<tbody>
<tr><td>C1</td><td>Very low</td><td>Not usually exterior</td><td>Heated, dry buildings</td></tr>
<tr><td>C2</td><td>Low</td><td>Rural areas with low pollution</td><td>Unheated buildings where condensation can occur</td></tr>
<tr><td>C3</td><td>Medium</td><td>Urban and light industrial areas; coastal with low salinity</td><td>Production rooms with high humidity</td></tr>
<tr><td>C4</td><td>High</td><td>Industrial areas; coastal with moderate salinity</td><td>Chemical plants, swimming pools</td></tr>
<tr><td>C5</td><td>Very high</td><td>Industrial with high humidity and aggressive atmosphere; coastal with high salinity</td><td>Buildings with almost permanent condensation and high pollution</td></tr>
<tr><td>CX</td><td>Extreme</td><td>Offshore, extreme humid industrial</td><td>Extreme process environments</td></tr>
</tbody>
</table>
<p>The standard defines the categories by measured first-year corrosion loss of steel and zinc coupons; the examples are indicative. When in doubt, treat the site as the higher category. Distance from salt water, prevailing wind, nearby cooling towers, kitchen and process exhausts, and road salt spray from parking structures all push a site up.</p>
<p class="note">A unit's own exhaust air can create a local environment more corrosive than the regional atmosphere. Check what is being exhausted near the intake and casing.</p>

<h2>Step 2: set the durability target</h2>
<p>ISO 12944 also defines durability ranges, from low (L) to very high (VH), meaning the expected time to first major maintenance of the coating, not a guarantee. Select based on the planned service life of the casing and how practical repainting will be. A rooftop unit that is hard to access and expected to last 25 years or more justifies a high or very high durability system. A unit inside a mechanical room in a C3 interior can accept less.</p>

<h2>Step 3: choose the coating system</h2>
<p>Common coating approaches for casings, roughly from least to most protective:</p>
<ol>
<li><strong>Galvanized steel, uncoated.</strong> Adequate in C1 to C2 and many C3 interiors. Coating weight matters.</li>
<li><strong>Factory pre-painted galvanized (coil-coated).</strong> Polyester or PVDF finishes on galvanized sheet. Good appearance and moderate protection; cut edges and drilled holes are the weak points.</li>
<li><strong>Powder coat over galvanized or pretreated steel.</strong> Applied after fabrication so edges and holes are covered. Performance depends on surface preparation and film thickness. Polyester powders for UV resistance on exteriors; epoxy powders are less UV-stable but chemically tough.</li>
<li><strong>Multi-coat liquid systems.</strong> Zinc-rich primer, epoxy intermediate and polyurethane topcoat, in the pattern used for structural steel in C4 and C5. Higher cost, and applied to the assembled unit or sections.</li>
<li><strong>Change the substrate.</strong> Stainless or marine aluminum skins, with or without a coating, for the most severe sites. See <a href="<?= url('guides/casing-materials-galvanized-stainless-aluminum') ?>">casing materials</a>.</li>
</ol>
<p>For each candidate, ask the supplier which ISO 12944 category and durability the system has been qualified for, and on what evidence.</p>

<h2>Step 4: write the requirements</h2>
<p>A practical coating specification for an outdoor casing includes:</p>
<ul>
<li>Corrosivity category and durability required, for example "ISO 12944 category C4, durability H."</li>
<li>Substrate and surface preparation, including pretreatment for galvanized steel.</li>
<li>Coating type, number of coats and dry film thickness, as the coating supplier recommends for the category.</li>
<li>Coverage of edges, holes and fasteners: post-fabrication coating or edge sealing for pre-painted material.</li>
<li>Test evidence: the supplier's qualification data, which may include salt spray, cyclic corrosion, humidity and UV exposure testing.</li>
<li>Colour and gloss, with UV-resistant topcoat on exteriors.</li>
<li>Touch-up kit and procedure supplied with the unit for shipping and installation damage.</li>
</ul>

<h2>Step 5: protect the coating after it leaves the factory</h2>
<p>Many coating failures start at damage, not at the coating itself.</p>
<ul>
<li>Inspect at receipt and touch up scratches before they rust.</li>
<li>Use stainless or coated fasteners for anything added in the field.</li>
<li>Avoid drilling field penetrations through coated panels without sealing the cut edge; see <a href="<?= url('guides/casing-penetration-sealing') ?>">sealing casing penetrations</a>.</li>
<li>Keep standing water off the roof by maintaining slope and drainage; see <a href="<?= url('guides/outdoor-unit-weatherproofing') ?>">weatherproofing outdoor AHUs</a>.</li>
<li>Rinse salt and debris from coastal units periodically as part of maintenance.</li>
</ul>
<p class="warn">Coil coatings are a separate decision with different materials and tests. A casing coated for C5 does nothing for an uncoated aluminum-fin coil in the same airstream.</p>
<?php guide_end([
    ['What is ISO 12944?', 'ISO 12944 is an international standard for corrosion protection of steel structures by protective paint systems. It defines atmospheric corrosivity categories from C1 to CX, durability ranges, and requirements for selecting and testing coating systems.'],
    ['How many salt spray hours does an AHU coating need?', 'There is no single correct number. Salt spray hours are useful for comparing coatings, but they do not represent real weathering. Specify the ISO 12944 corrosivity category and durability, and ask for the test evidence behind the coating system.'],
    ['What corrosivity category is a coastal site?', 'It depends on distance from the water, wind and salinity. Sites near the coast often fall in C4 or C5, and very exposed sites may be more severe. When in doubt, choose the higher category.'],
]);
