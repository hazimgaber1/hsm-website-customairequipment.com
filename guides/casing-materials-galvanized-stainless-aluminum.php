<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('casing-materials-galvanized-stainless-aluminum'); ?>
<p class="lede">Galvanized steel is the default casing material for most air handlers because it is strong, economical and adequately corrosion-resistant indoors. Stainless steel is chosen for wet, corrosive or hygiene-critical sections and units; aluminum is chosen where weight, coastal exposure or non-magnetic properties matter. Many units mix them, using stainless only where it pays.</p>

<h2>The three sheet materials</h2>
<h3>Galvanized steel</h3>
<p>Carbon steel with a zinc coating applied by hot-dip galvanizing. The zinc corrodes sacrificially, protecting the steel at scratches and cut edges for a time. Coating weight matters: heavier zinc coatings such as G90 give longer protection than lighter ones such as G60. It is stiff, easy to form and weld, and the least expensive option.</p>
<h3>Stainless steel</h3>
<p>Chromium-bearing steel that forms a passive surface oxide. Type 304 is the common general-purpose grade. Type 316, with molybdenum added, resists chlorides better and is used near salt air, chlorinated pools and many process chemicals. Stainless can be polished to a smooth, cleanable finish and tolerates aggressive cleaning and disinfecting agents.</p>
<h3>Aluminum</h3>
<p>Lightweight and naturally corrosion-resistant through its oxide film. Marine-grade alloys perform well in salt air. Aluminum is roughly one-third the density of steel and about one-third as stiff, so panels need thicker sheet or deeper sections to match steel's stiffness.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Galvanized steel</th><th>Stainless (304/316)</th><th>Aluminum</th></tr></thead>
<tbody>
<tr><td>Relative material cost</td><td>Lowest</td><td>Highest</td><td>Moderate to high</td></tr>
<tr><td>General indoor corrosion</td><td>Good</td><td>Excellent</td><td>Excellent</td></tr>
<tr><td>Persistent wetness (drain pans, humidifier sections)</td><td>Poor to fair; zinc consumed over time</td><td>Excellent</td><td>Good, but avoid contact with copper-bearing condensate</td></tr>
<tr><td>Coastal salt air</td><td>Fair; needs coating</td><td>304 fair to good; 316 good to excellent</td><td>Good with marine alloys</td></tr>
<tr><td>Chemical exposure and disinfectants</td><td>Poor with acids, chlorine and strong cleaners</td><td>Good (304) to very good (316); chlorides attack 304</td><td>Poor with alkaline cleaners; fair otherwise</td></tr>
<tr><td>Hygiene and cleanability</td><td>Fair; surface roughens as zinc weathers</td><td>Excellent; smooth, durable finish</td><td>Good</td></tr>
<tr><td>Stiffness and strength</td><td>High</td><td>High</td><td>Lower; needs thicker sheet</td></tr>
<tr><td>Weight</td><td>Heavy</td><td>Heavy</td><td>Light</td></tr>
<tr><td>Thermal conductivity</td><td>Moderate</td><td>Low, which helps reduce bridging</td><td>Very high, which worsens bridging</td></tr>
<tr><td>Fabrication</td><td>Easy; weld fumes from zinc</td><td>Requires care to avoid contamination; weld discoloration must be passivated</td><td>Specialized welding</td></tr>
</tbody>
</table>
<p>Relative ratings are general guidance. Specific environments need specific evaluation.</p>

<h2>Where each material belongs in a unit</h2>
<p>It is rarely necessary to build an entire unit from stainless. A common approach is to choose material by section and surface:</p>
<ul>
<li><strong>Outer skins:</strong> galvanized for indoor units; galvanized with a coating system, stainless or aluminum for outdoor and coastal units.</li>
<li><strong>Inner liners in dry sections:</strong> galvanized.</li>
<li><strong>Inner liners, floors and drain pans downstream of cooling coils and in humidifier sections:</strong> stainless. Drain pans in particular see standing water and biofilm cleaning; see <a href="<?= url('guides/drain-pan-design-ashrae-62-1') ?>">drain pan design</a>.</li>
<li><strong>Hygiene-sensitive units:</strong> stainless liners throughout for hospitals, pharmaceutical facilities and food processing. See the <a href="<?= url('guides/hygienic-ahu-construction-checklist') ?>">hygienic construction checklist</a>.</li>
<li><strong>Units exposed to process chemicals or corrosive exhaust:</strong> 316 stainless or a material selected from a chemical compatibility review.</li>
</ul>

<h2>Galvanic corrosion and mixed materials</h2>
<p>When dissimilar metals touch in the presence of moisture, the less noble metal corrodes faster. Points to watch:</p>
<ul>
<li>Aluminum in contact with stainless or copper in wet areas. Isolate with non-conductive gaskets or coatings.</li>
<li>Galvanized steel bolted to stainless in a wet drain pan. The zinc near the contact is consumed quickly.</li>
<li>Copper-bearing condensate from cooling coils dripping onto aluminum or galvanized surfaces, which can cause pitting.</li>
<li>Fasteners: use fasteners at least as noble as the parts they join, typically stainless fasteners in stainless and aluminum assemblies.</li>
</ul>
<p class="warn">Carbon steel tools, wire brushes and grinding dust left on stainless surfaces cause rust spots that look like failure of the stainless. Fabrication and installation crews must keep tools separate.</p>

<h2>Thinking about cost over the life</h2>
<p>Stainless adds noticeably to first cost, especially for full-unit construction. But a galvanized drain pan or humidifier floor that corrodes through in 10 to 15 years leads to water damage, microbial growth and an expensive repair inside an operating unit; see <a href="<?= url('guides/corroded-casing-floor-repair') ?>">corroded casing and floor repair</a>. Upgrading only the wet areas to stainless typically costs a small fraction of the unit price and removes the most common corrosion failure in air handlers. For outdoor units in corrosive environments, compare a stainless or aluminum skin with a galvanized skin plus a high-performance coating; the coating route is covered in <a href="<?= url('guides/casing-coatings-corrosive-environments') ?>">casing coatings for corrosive sites</a>.</p>
<h2>Specifying the choice clearly</h2>
<p>Vague phrases such as "corrosion-resistant construction" invite the least expensive interpretation. State the material for each surface and section: outer skin, inner liner, floor, drain pan, coil supports and fasteners, and the grade of stainless where it is required. Where galvanized steel is used, state the zinc coating weight. Where stainless is used in wet areas, require welds to be cleaned and passivated so the heat-affected zone does not rust. On submittals, check that the material schedule covers internal parts such as coil racks and humidifier supports, which are easy to leave as galvanized in an otherwise stainless section.</p>
<?php guide_end([
    ['Should I specify a stainless steel air handler?', 'Usually only for the parts that need it. Stainless drain pans, floors and liners in wet sections are common and cost-effective. Full stainless construction is justified for hygiene-critical, highly corrosive or washdown applications.'],
    ['Is aluminum good for outdoor air handler casings?', 'Aluminum resists corrosion well, including in many coastal settings, and it is light. It is less stiff than steel and conducts heat very well, so panels need thicker sheet and careful thermal breaks.'],
    ['What is the difference between 304 and 316 stainless?', 'Type 316 contains molybdenum, which improves resistance to chlorides such as salt air, pool chemicals and some cleaning agents. Type 304 is adequate for most general wet and hygiene applications.'],
]);
