<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('wheel-media-aluminum-polymer-desiccant'); ?>
<p class="lede">Uncoated aluminum media gives a durable, cleanable sensible wheel. Aluminum coated with silica gel or a molecular sieve gives strong latent transfer, with molecular sieves offering the most selective water adsorption. Polymer media is light, corrosion-resistant and washable, and some grades carry their own hygroscopic properties. Pick by latent duty, exhaust quality and how the wheel will be cleaned.</p>

<h2>What the media does</h2>
<p>The matrix is a spiral of corrugated and flat strips forming thousands of small flutes. Its material governs three things: how much heat it stores per revolution, whether and how it adsorbs water vapour, and how it stands up to cleaning, corrosion and fouling. Flute height and wheel depth also matter, but they are geometry choices made within any media type.</p>
<p>Whether you need latent transfer at all is a separate decision, covered in <a href="<?= url('guides/enthalpy-wheel-vs-sensible-wheel') ?>">enthalpy wheel vs sensible wheel</a>. This guide assumes that decision is made and compares the materials that deliver it.</p>

<h2>Comparison of media types</h2>
<table>
<thead><tr><th>Media</th><th>Latent performance</th><th>Selectivity for water</th><th>Cleanability</th><th>Corrosion resistance</th><th>Typical use</th></tr></thead>
<tbody>
<tr><td>Bare aluminum</td><td>None (incidental condensation only)</td><td>Not applicable</td><td>Good; tolerates low-pressure water and compressed air</td><td>Fair; poor in salty or acidic exhaust</td><td>Sensible wheels, reheat wheels</td></tr>
<tr><td>Epoxy-coated aluminum</td><td>None</td><td>Not applicable</td><td>Good</td><td>Better than bare</td><td>Sensible wheels in mildly corrosive or coastal locations</td></tr>
<tr><td>Aluminum with silica gel</td><td>Good</td><td>Moderate; adsorbs some other compounds</td><td>Fair; coating can be damaged by aggressive cleaning</td><td>Fair</td><td>General-purpose enthalpy wheels</td></tr>
<tr><td>Aluminum with molecular sieve (3Å type)</td><td>Good</td><td>High; pore size admits water molecules preferentially</td><td>Fair</td><td>Fair</td><td>Enthalpy wheels where gas transfer is a concern</td></tr>
<tr><td>Polymer (non-hygroscopic)</td><td>None to slight</td><td>Not applicable</td><td>Very good; washable</td><td>Very good</td><td>Sensible wheels in corrosive or wet duty</td></tr>
<tr><td>Polymer with desiccant</td><td>Moderate to good</td><td>Depends on desiccant</td><td>Good</td><td>Very good</td><td>Enthalpy wheels where corrosion is a concern</td></tr>
</tbody>
</table>

<h2>Latent performance</h2>
<p>Latent effectiveness comes from the desiccant's ability to take up water at high vapour pressure and give it up at low vapour pressure within one revolution. Silica gel has a high capacity across the humidity range seen in HVAC. Molecular sieves have a steep uptake curve and hold water strongly, which matters in dry conditions such as winter exhaust. In practice, both reach latent effectiveness values similar to sensible effectiveness when well applied. Compare certified latent effectiveness at your airflow rather than relying on material claims.</p>
<p>Polymer-based desiccant media can be competitive but varies widely by product. Ask for certified latent ratings at the summer and winter conditions that matter to you.</p>

<h2>Selectivity and cross-contamination</h2>
<p>Any desiccant can adsorb compounds other than water. Silica gel has a range of pore sizes and can pick up some volatile organic compounds and odours from the exhaust, then release them to the supply. Molecular sieves with a 3 angstrom pore size limit adsorption to molecules about the size of water or smaller, which greatly reduces the transfer of most larger organic molecules.</p>
<p>Selectivity is not a substitute for leakage control. Air carried over by the matrix contains every contaminant in the exhaust regardless of the coating. Carryover limits are covered in <a href="<?= url('guides/eatr-oacf-wheel-leakage') ?>">EATR and OACF</a>.</p>
<p class="note">If specific gases in the exhaust are a concern, such as in labs or some healthcare spaces, ask for test data on that gas with the proposed media, not a general statement about selectivity.</p>

<h2>Cleanability and fouling</h2>
<p>Wheels run in filtered air, but they still collect dust, and in some applications lint, grease mist or pollen. Cleaning options include vacuuming, compressed air blown through the flutes against the normal flow direction, low-pressure water washing and approved detergents.</p>
<ul>
<li><strong>Bare and epoxy-coated aluminum</strong> tolerate all of these within the manufacturer's pressure limits.</li>
<li><strong>Desiccant-coated aluminum</strong> requires gentle methods; some coatings degrade with detergents or high-pressure water. Follow the manufacturer's cleaning instructions exactly.</li>
<li><strong>Polymer media</strong> is the most washable and can often be removed in segments for cleaning outside the unit.</li>
</ul>
<p>Segmented wheels, where the matrix comes out in wedge-shaped pieces, make any media easier to clean and replace. They are common on larger diameters.</p>

<h2>Durability and corrosion</h2>
<p>Aluminum media lasts for many years in clean HVAC exhaust. It corrodes in coastal salt air, in exhaust with acidic gases and where condensate sits on the matrix. Epoxy coating helps in mild conditions. Polymer media resists corrosion but has upper temperature limits and can deform if overheated; check the rating if the exhaust is hot or if regeneration-type heating is nearby.</p>
<p>Desiccant coatings can lose capacity over time from contamination, especially from oily aerosols and silicone vapours, which coat the pores. This shows up as falling latent effectiveness while sensible performance holds, a pattern worth looking for in <a href="<?= url('guides/low-recovery-effectiveness-diagnosis') ?>">diagnosing low recovery effectiveness</a>.</p>

<h2>Choosing a media</h2>
<ol>
<li>No latent duty and clean exhaust: bare aluminum.</li>
<li>No latent duty with coastal, mildly corrosive or wet exhaust: epoxy-coated aluminum or polymer.</li>
<li>Latent duty with general office or school exhaust: silica gel or molecular sieve coated aluminum.</li>
<li>Latent duty where gas or odour transfer is a concern: 3 angstrom molecular sieve, with tested data for the gas of interest.</li>
<li>Latent duty with frequent washing or corrosive exhaust: polymer with desiccant, if certified performance meets the need.</li>
</ol>
<?php guide_end([
    ['What is the difference between silica gel and molecular sieve wheel coatings?', 'Both adsorb water for latent transfer. Molecular sieves with a 3 angstrom pore size are more selective, admitting mainly water molecules, which reduces transfer of larger organic compounds from exhaust to supply.'],
    ['Can desiccant energy wheels be washed?', 'Some can, within limits. Desiccant coatings can be damaged by aggressive detergents or high-pressure water, so follow the manufacturer cleaning instructions. Polymer media is generally the most washable.'],
    ['When should I use a polymer energy wheel?', 'Consider polymer media where corrosion, frequent washing or wet conditions are expected. Check temperature limits and certified effectiveness, since performance varies more between polymer products than between aluminum products.'],
]);
