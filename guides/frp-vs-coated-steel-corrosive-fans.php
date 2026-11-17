<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('frp-vs-coated-steel-corrosive-fans'); ?>
<p class="lede">For acid and chemical fume exhaust, fiberglass-reinforced plastic (FRP) fans resist a wide range of corrosive chemicals throughout their thickness, while coated steel relies on an intact coating and stainless or alloy fans rely on the chemistry of the metal. FRP is usually the safest choice for aggressive acids at moderate temperatures; coated or alloy steel wins at higher temperatures, higher pressures, with abrasive dust or where fire codes restrict plastics.</p>

<h2>The materials</h2>
<h3>FRP</h3>
<p>FRP fans are molded or laminated from glass fiber reinforcement in a thermosetting resin, usually a vinyl ester or polyester selected for the chemicals handled. A resin-rich corrosion barrier, often reinforced with synthetic veil, forms the surface exposed to the airstream. Wheels, housings and inlet cones are all FRP; shafts are steel, encapsulated or sleeved where they pass through the airstream.</p>
<h3>Coated steel</h3>
<p>Carbon steel fans with protective coatings: epoxy, phenolic, PVC or fluoropolymer linings, or baked coatings applied to the wheel and housing interior. The coating is the only barrier between the chemical and the steel.</p>
<h3>Stainless and alloy steel</h3>
<p>Fans built from 304 or 316 stainless steel, or from higher alloys such as duplex stainless or nickel alloys for severe service. The metal itself resists corrosion, so there is no coating to damage, but the alloy must be matched to the chemistry.</p>

<h2>Comparison</h2>
<table>
<thead><tr><th>Factor</th><th>FRP</th><th>Coated steel</th><th>Stainless or alloy</th></tr></thead>
<tbody>
<tr><td>Chemical resistance</td><td>Excellent for many acids, chlorides and oxidizers, depending on resin</td><td>Good while coating is intact; failure at pinholes or damage</td><td>Good to excellent for specific chemistries; poor for some (for example, chlorides with 304)</td></tr>
<tr><td>Temperature limit</td><td>Limited by resin; commonly up to about 180°F to 250°F (80°C to 120°C)</td><td>Limited by coating</td><td>High</td></tr>
<tr><td>Strength and speed</td><td>Lower; limits pressure and tip speed</td><td>High</td><td>High</td></tr>
<tr><td>Abrasion resistance</td><td>Moderate; can erode with dust</td><td>Coating vulnerable to abrasion</td><td>Good</td></tr>
<tr><td>Fire behavior</td><td>Combustible unless fire-retardant resin used; code limits may apply</td><td>Non-combustible substrate</td><td>Non-combustible</td></tr>
<tr><td>Repairability</td><td>Field repairable with resin and glass</td><td>Recoating required; difficult in field</td><td>Welding repairs</td></tr>
<tr><td>Weight</td><td>Light</td><td>Heavy</td><td>Heavy</td></tr>
<tr><td>Typical cost</td><td>Moderate</td><td>Lowest initial</td><td>Highest, especially for high alloys</td></tr>
</tbody>
</table>
<p class="note">Temperature limits for FRP depend on the specific resin and the chemical environment. Always check the resin manufacturer's chemical resistance guide for the actual chemicals, concentrations and temperatures.</p>

<h2>Chemical resistance in practice</h2>
<p>The first step for any corrosive fan is a list of chemicals with concentrations, temperatures and whether condensation occurs. Corrosion rates often rise dramatically when vapor condenses to liquid on fan surfaces, which happens at startup, shutdown or where ducts run through cold spaces.</p>
<ul>
<li><strong>Hydrochloric, sulfuric (dilute) and many mixed acids:</strong> FRP with vinyl ester resin is often the preferred material.</li>
<li><strong>Chlorides and chlorine compounds:</strong> FRP performs well; 304 stainless can suffer pitting and stress corrosion cracking; 316 is better but not immune.</li>
<li><strong>Hydrofluoric acid:</strong> attacks glass fibers; FRP requires special synthetic veils and resin, or another material altogether.</li>
<li><strong>Strong oxidizers and some solvents:</strong> some resins and coatings degrade; check compatibility carefully.</li>
<li><strong>Hot, mildly corrosive gases:</strong> stainless steel or coated steel with high-temperature linings often outperform FRP because of temperature.</li>
</ul>

<h2>Coated steel: where it works and where it fails</h2>
<p>Coatings are a cost-effective barrier when the environment is mildly corrosive and the coating can be kept intact. They fail at:</p>
<ul>
<li>Pinholes and holidays in the coating, which concentrate corrosion at a point.</li>
<li>Edges, welds and bolt holes, where coatings are thin.</li>
<li>Abrasion from dust, which wears coating off blade leading edges.</li>
<li>Impact damage during installation or maintenance.</li>
</ul>
<p>Specify coating thickness, holiday testing and surface preparation standards in the fan specification, and plan for periodic inspection. Coating systems for wheels are discussed in <a href="<?= url('guides/fan-wheel-materials-coatings') ?>">fan wheel materials and coatings</a>.</p>

<h2>Fire and code considerations</h2>
<p>FRP is combustible. Building and fire codes may restrict combustible duct and fan materials in certain occupancies or require fire-retardant resins with specified flame spread ratings. Some insurers have their own requirements for FRP fume exhaust systems. Check:</p>
<ul>
<li>Whether the code allows combustible materials in the exhaust path.</li>
<li>Required flame spread index for FRP resins.</li>
<li>Requirements for sprinklers inside large FRP ducts.</li>
<li>Insurer standards for plastic exhaust systems.</li>
</ul>

<h2>Mechanical limits of FRP</h2>
<p>FRP is weaker and less stiff than steel, so FRP fans are limited in tip speed and pressure. They are well suited to the moderate pressures typical of fume exhaust and scrubber systems. For high static pressures, large wheel diameters at high speed, or heavy dust loading, steel or alloy fans are often necessary. FRP fans also need careful attention to balance and to the shaft seal where the steel shaft enters the housing.</p>

<h2>Choosing</h2>
<ol>
<li>List chemicals, concentrations, temperatures and condensation conditions.</li>
<li>Check the operating and upset temperature against FRP resin limits.</li>
<li>Check fire code and insurer requirements for combustible materials.</li>
<li>Assess dust and abrasion.</li>
<li>Determine required pressure and speed.</li>
<li>Compare life cycle cost, including expected coating maintenance for coated steel.</li>
</ol>
<p>Laboratory fume exhaust stacks and the high-plume fans used on labs are covered in <a href="<?= url('guides/lab-exhaust-fans-stack-design') ?>">lab exhaust fans and stack design</a>. For construction details of corrosive industrial exhaust fans, see <a href="<?= url('guides/industrial-fan-specification') ?>">writing an industrial fan specification</a>.</p>
<?php guide_end([
    ['When should I use an FRP fan instead of stainless steel?', 'FRP is often better for aggressive acids and chlorides at moderate temperatures, where stainless can pit or crack. Stainless or alloy steel is better at high temperatures, high pressures, with abrasive dust or where combustible materials are restricted.'],
    ['What temperature can an FRP fan handle?', 'It depends on the resin and the chemicals, but limits commonly fall around 180°F to 250°F (80°C to 120°C). Check the resin manufacturer\'s chemical resistance data for the specific service.'],
    ['Why do coated steel fans fail in corrosive service?', 'Coatings fail at pinholes, edges, welds and areas worn by abrasion or impact. Once the coating is breached, corrosion concentrates at that point. Specify thickness, holiday testing and plan regular inspection.'],
]);
