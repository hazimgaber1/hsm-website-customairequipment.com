<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fiberglass-vs-foam-panel-insulation'); ?>
<p class="lede">Injected polyurethane foam gives a casing panel more insulating value per inch and much higher stiffness, because it bonds the two skins into one structure. Mineral fibre (fiberglass or mineral wool) is non-combustible, absorbs sound better behind a perforated liner, and is often preferred where fire performance or acoustics lead the specification. Neither is universally better.</p>

<h2>How each core is made</h2>
<h3>Injected polyurethane or polyisocyanurate foam</h3>
<p>Liquid components are injected between the skins of a closed panel, where they expand and cure. The foam fills the cavity completely and adheres to both skins. The result is a rigid sandwich in which the skins and core work together structurally. Typical densities for casing panels are in the range of roughly 2 to 3 lb/ft³ (32 to 48 kg/m³), depending on the manufacturer.</p>
<h3>Mineral fibre board</h3>
<p>Rigid or semi-rigid boards of glass fibre or stone wool are cut to fit and placed between the skins before the panel is closed. Board density is commonly higher than foam, and the fibres do not bond to the metal. The skins must be held together by the panel's formed edges, fasteners or internal channels.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Property</th><th>Polyurethane foam core</th><th>Mineral fibre core</th></tr></thead>
<tbody>
<tr><td>Thermal resistance</td><td>Roughly R-6 to R-7 per inch (aged); about R-13 for a 2 in panel</td><td>Roughly R-4 per inch; about R-8 for a 2 in panel</td></tr>
<tr><td>Panel stiffness</td><td>High; skins act as a composite sandwich</td><td>Low from the core; relies on formed edges and stiffeners</td></tr>
<tr><td>Panel weight</td><td>Lighter for the same stiffness</td><td>Heavier core, plus stiffeners</td></tr>
<tr><td>Combustibility</td><td>Combustible; rated by surface burning and other fire tests</td><td>Non-combustible (stone wool) or limited combustibility (glass fibre with binder)</td></tr>
<tr><td>Smoke development</td><td>Generates smoke if exposed to fire; depends on formulation</td><td>Low</td></tr>
<tr><td>Sound absorption behind perforated liner</td><td>Poor; closed-cell foam does not absorb well</td><td>Good; standard choice for acoustic panels</td></tr>
<tr><td>Sound transmission loss</td><td>Moderate; light, stiff panels can transmit some frequencies</td><td>Often better at mid-frequencies due to mass and damping</td></tr>
<tr><td>Moisture behaviour</td><td>Closed-cell; resists water uptake</td><td>Absorbs water if wetted; loses insulating value until dry</td></tr>
<tr><td>Thermal bridging at edges</td><td>Edges can be filled with foam, aiding thermal breaks</td><td>Requires separate edge breaks</td></tr>
<tr><td>Field modification</td><td>Cut edges must be sealed; cannot be re-injected on site</td><td>Easier to cut and patch</td></tr>
<tr><td>Recyclability at end of life</td><td>Difficult to separate foam from skins</td><td>Skins and core can be separated more easily</td></tr>
</tbody>
</table>
<p>Values are typical ranges for comparison. Use the manufacturer's tested data for a specific panel.</p>

<h2>Thermal performance in context</h2>
<p>The R-value difference looks large on paper, but casing thermal performance in practice is often limited by bridging at frames, edges and doors rather than by the core. A 2 in mineral fibre panel with excellent thermal breaks can outperform a 2 in foam panel with poor edges on condensation risk. Where overall heat transfer matters, as it does for outdoor units, foam's advantage is real, and some designers move to 4 in mineral fibre to match a 2 in foam panel's insulating value. Thickness tradeoffs are covered separately in <a href="<?= url('guides/two-inch-vs-four-inch-casing-panels') ?>">2-inch vs 4-inch panels</a>.</p>

<h2>Structural performance in context</h2>
<p>Foam's bonding is its biggest practical advantage. A foam panel can span between widely spaced frames with little deflection and needs few stiffeners. Mineral fibre panels need more internal structure for the same performance, which adds weight and creates more potential bridging paths. The deflection arithmetic for both is in <a href="<?= url('guides/casing-panel-deflection-calculation') ?>">calculating casing panel deflection</a>.</p>

<h2>Fire performance in context</h2>
<p>Materials exposed to the airstream, and materials in plenums, are governed by fire and smoke requirements in standards such as NFPA 90A and by the mechanical and building codes in force. Encapsulating foam between metal skins changes how it behaves, but many specifications still require the complete panel or its core to meet surface burning characteristics or non-combustibility criteria. Some owners, particularly in healthcare, high-rise and certain Canadian jurisdictions, require non-combustible cores. The test standards and how to specify them are covered in the codes category under <a href="<?= url('guides/insulation-fire-rating-specification') ?>">insulation fire rating specification</a>.</p>
<p class="warn">Confirm fire performance requirements with the authority having jurisdiction and the owner before choosing a core. Switching core materials after the unit is designed changes weight, stiffness and sometimes panel thickness.</p>

<h2>Acoustics in context</h2>
<p>If a section needs internal sound absorption, the inner liner is perforated and the core must be fibrous. Foam cores cannot provide useful absorption behind a perforated liner. A common hybrid is foam panels throughout, with mineral fibre panels and perforated liners only in the fan and attenuating sections. For transmission through the casing to the mechanical room, mineral fibre panels typically perform somewhat better because of their higher mass and damping, though panel construction details matter more than the core alone.</p>

<h2>Choosing a core</h2>
<ul>
<li><strong>Choose foam</strong> when thermal performance, stiffness and weight lead: outdoor units, cold climates, cold-supply units, units with large panels, and projects where fire rules permit it.</li>
<li><strong>Choose mineral fibre</strong> when non-combustibility is required, when internal sound absorption is needed, or when the owner standard prohibits foam.</li>
<li><strong>Mix them</strong> section by section when a unit needs both: foam where condensation and stiffness matter, mineral fibre where absorption or fire separation is needed.</li>
</ul>
<?php guide_end([
    ['Is foam or fiberglass better for air handler panels?', 'Foam gives higher insulating value per inch and much stiffer panels. Fiberglass or mineral wool is non-combustible or limited-combustible and absorbs sound behind perforated liners. The better choice depends on whether thermal, structural, fire or acoustic performance leads the project.'],
    ['What is the R-value of a 2 inch foam AHU panel?', 'A 2 in polyurethane foam panel core typically provides around R-12 to R-14 depending on the foam and aging. Thermal bridging at edges and frames often limits real casing performance more than the core R-value.'],
    ['Can foam panels be used in fan sections for sound absorption?', 'Not effectively. Closed-cell foam does not absorb much sound behind a perforated liner. Sections that need sound absorption normally use mineral fibre cores with perforated liners.'],
]);
