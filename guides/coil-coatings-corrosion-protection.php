<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('coil-coatings-corrosion-protection'); ?>
<p class="lede">Coil coatings protect fins and tubes from atmospheric corrosion by putting a thin barrier between the metal and the air. Cathodic electrocoat (e-coat) and baked phenolic coatings are the most common choices for HVAC coils, and a properly applied thin coating costs only a few percent of capacity.</p>

<h2>Why coils corrode</h2>
<p>A finned coil has an enormous surface area in a small volume, and much of that area is thin aluminum foil in contact with copper. Salt spray, sulfur dioxide, chlorine compounds, ammonia, and fertilizer or chemical dust settle on the fins. Add moisture from condensation or rain and the result is an electrolyte film across a galvanic couple. The aluminum fin corrodes first, starting at the collar where it touches the tube. Heat transfer drops long before the coil leaks, so a corroded coil often fails as a capacity problem rather than a refrigerant or water leak.</p>
<p>Environments where coatings are commonly justified include:</p>
<ul>
<li>Coastal sites within a few miles of salt water.</li>
<li>Industrial areas with combustion, chemical or wastewater emissions.</li>
<li>Swimming pools and natatoriums, where chlorinated air is drawn through coils.</li>
<li>Agricultural, food processing and animal facilities with ammonia.</li>
<li>Outdoor condensing coils and energy recovery coils exposed to exhaust air.</li>
</ul>

<h2>Electrocoat (e-coat)</h2>
<p>E-coating immerses the finished coil in a water-based epoxy bath and applies an electric charge. Coating particles migrate to every conductive surface, including deep inside the fin pack and around the fin collars, and deposit as a uniform thin film, often in the range of 0.6 to 1.2 mils (15 to 30 µm). The coil is then oven-cured. Many e-coat systems add a UV-resistant topcoat for outdoor exposure, since epoxy chalks in sunlight.</p>
<ul>
<li><strong>Strengths:</strong> complete coverage of the fin pack, including hard-to-reach surfaces; thin film with small heat transfer penalty; good resistance to salt spray and many industrial atmospheres.</li>
<li><strong>Limits:</strong> must be applied in a dedicated plant, usually after coil fabrication; damage during handling is difficult to repair fully in the field.</li>
</ul>

<h2>Baked phenolic</h2>
<p>Phenolic coatings are applied by repeated dipping or flooding and baked to form a hard, chemically resistant film. They have a long track record in chemical, petrochemical and marine applications and resist a broad range of acids and solvents.</p>
<ul>
<li><strong>Strengths:</strong> excellent chemical resistance; durable film.</li>
<li><strong>Limits:</strong> dip application can bridge between closely spaced fins, so fin density may be limited; thicker films carry a slightly larger capacity penalty than e-coat; colour and finish can vary.</li>
</ul>

<h2>Other coating types</h2>
<h3>Spray-applied polymer coatings</h3>
<p>Several water-based polyurethane and acrylic coatings are sprayed onto the coil, either in a factory or in the field. Spray penetration into deep coils is limited, so coverage of the middle and leaving rows depends on coil depth and fin density. They are useful for field application on existing outdoor coils but should not be assumed to match an immersion coating in a deep coil.</p>
<h3>Pre-coated fin stock</h3>
<p>Aluminum fin material can be purchased already coated with epoxy or a hydrophilic layer before the fins are stamped. Pre-coated fin is inexpensive, but the cut edges and the collars, which are exactly where corrosion starts, are left bare. It provides modest protection for mildly corrosive conditions only.</p>
<h3>Hydrophilic coatings</h3>
<p>Hydrophilic coatings are aimed at condensate behaviour rather than corrosion. They make water sheet off the fins instead of beading, which can help carryover and drainage. Some also provide limited corrosion resistance; do not rely on them as a corrosion barrier unless the supplier rates them for that purpose.</p>

<h2>Capacity and pressure drop impact</h2>
<p>A coating adds a thin layer of material with much lower thermal conductivity than aluminum. For thin, uniform immersion coatings, the published capacity penalty is generally small, often reported as a few percent or less, and air pressure drop increases slightly because fin gaps narrow. Thicker or uneven coatings can cost more. Ask the coil manufacturer to apply the coating supplier's correction factors in the rating rather than adding a generic margin.</p>
<p class="note">Coating does not change the need for correct coil materials. If the environment calls for copper fins or stainless construction, a coating on standard materials may only delay the problem. Material choices are compared in <a href="<?= url('guides/coil-materials-copper-aluminum-stainless') ?>">coil materials</a>.</p>

<h2>Comparing the common options</h2>
<table>
<thead><tr><th>Coating</th><th>Coverage in deep coils</th><th>Typical film</th><th>Best suited to</th></tr></thead>
<tbody>
<tr><td>E-coat (immersion)</td><td>Excellent</td><td>Thin, uniform</td><td>Coastal, general industrial, most outdoor coils</td></tr>
<tr><td>Baked phenolic</td><td>Very good</td><td>Thin to moderate</td><td>Chemical and petrochemical atmospheres</td></tr>
<tr><td>Spray polymer</td><td>Limited in deep coils</td><td>Varies</td><td>Field touch-up, shallow coils</td></tr>
<tr><td>Pre-coated fin stock</td><td>Fin faces only</td><td>Thin</td><td>Mild environments</td></tr>
</tbody>
</table>

<h2>Specifying and verifying a coating</h2>
<ul>
<li>Name the coating type and require application after coil fabrication for immersion coatings.</li>
<li>Ask for the coating supplier's salt spray test results (commonly tested under ASTM B117) and chemical resistance data relevant to the site.</li>
<li>Require coating of the coil casing, headers and exposed tube surfaces, not just the fins.</li>
<li>Require a UV topcoat for outdoor coils.</li>
<li>Ask the coil manufacturer to show coated capacity and pressure drop on the selection.</li>
<li>Plan for handling: coated coils should be protected during shipping and installation, since chipped coating creates a localized corrosion site.</li>
</ul>
<p>Coatings for the surrounding steel casing are a different subject with different products; see <a href="<?= url('guides/casing-coatings-corrosive-environments') ?>">casing coatings for corrosive environments</a>. Cleaning coated coils with harsh alkaline or acid cleaners can damage the film, so cleaning products should be checked with the coating supplier, as discussed in <a href="<?= url('guides/coil-cleaning-methods') ?>">coil cleaning methods</a>.</p>
<?php guide_end([
    ['What is an e-coated coil?', 'An e-coated coil has been immersed in an electrically charged epoxy bath so the coating deposits uniformly over every surface, including deep inside the fin pack. It is then baked. E-coat is widely used to protect coils in coastal and industrial environments.'],
    ['Does coil coating reduce capacity?', 'Thin immersion coatings typically reduce capacity by a small amount, often a few percent, and raise air pressure drop slightly. Thicker or uneven coatings cost more. The coil manufacturer should apply the coating supplier\'s correction factors in the rating.'],
    ['Is e-coat or phenolic better for coils?', 'Both are proven. E-coat gives excellent, uniform coverage and suits most coastal and industrial sites. Baked phenolic is often preferred where specific chemical resistance to acids or solvents is needed. Match the coating to the contaminants present.'],
]);
