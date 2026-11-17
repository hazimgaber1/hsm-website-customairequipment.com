<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('gas-phase-carbon-filtration'); ?>
<p class="lede">Gas-phase filters remove gases and vapours that particle filters cannot touch. Activated carbon captures many organic vapours and ozone by adsorption; impregnated carbons and potassium permanganate on alumina remove reactive gases such as hydrogen sulfide, sulfur dioxide and formaldehyde by chemical reaction. Performance depends on choosing the right sorbent for the target gas and giving the air enough contact time with enough media.</p>

<h2>Adsorption and chemisorption</h2>
<p><strong>Physical adsorption</strong> is the main mechanism in plain activated carbon. Carbon is processed to create an enormous internal surface area within each granule. Gas molecules diffuse into the pores and are held by weak intermolecular forces. Heavier, larger organic molecules (many solvents, odorous compounds, higher-boiling VOCs) adsorb strongly. Small, light, volatile molecules such as formaldehyde, ammonia and many low-molecular-weight gases adsorb poorly and can be displaced by heavier compounds.</p>
<p><strong>Chemisorption</strong> uses a reactive chemical on a porous substrate to convert the target gas into a stable, non-volatile product. Two common families:</p>
<ul>
<li><strong>Impregnated activated carbon</strong>, treated with chemicals selected for target gases: for example, alkaline impregnants for acid gases and acid impregnants for ammonia and amines.</li>
<li><strong>Potassium permanganate on activated alumina</strong> (often called permanganate media), which oxidizes hydrogen sulfide, sulfur dioxide, nitric oxide, formaldehyde and other reactive compounds. The media changes colour from purple toward brown as it is consumed.</li>
</ul>
<p>Many applications use blended beds or two stages, for example permanganate media followed by activated carbon, to cover a broad range of contaminants.</p>

<h2>Matching media to contaminants</h2>
<table>
<thead><tr><th>Contaminant type</th><th>Typical sorbent</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>Higher-molecular-weight VOCs, solvents, odours</td><td>Activated carbon</td><td>Strong physical adsorption</td></tr>
<tr><td>Ozone</td><td>Activated carbon</td><td>Carbon catalytically decomposes ozone; effective at low concentrations</td></tr>
<tr><td>Formaldehyde, low-molecular-weight aldehydes</td><td>Permanganate media or specially impregnated media</td><td>Plain carbon is weak</td></tr>
<tr><td>Hydrogen sulfide, sulfur dioxide</td><td>Permanganate media or alkaline-impregnated carbon</td><td>Common in wastewater, pulp and paper, and some urban environments</td></tr>
<tr><td>Nitrogen dioxide</td><td>Activated carbon or impregnated media</td><td>Traffic and combustion sources</td></tr>
<tr><td>Ammonia, amines</td><td>Acid-impregnated carbon</td><td>Agricultural, animal facilities, some labs</td></tr>
<tr><td>Chlorine compounds</td><td>Impregnated carbon or permanganate</td><td>Pools, water treatment</td></tr>
</tbody>
</table>
<p>Media suppliers publish capacity and performance data by compound. Ask for data for the specific gases at concentrations close to those expected.</p>

<h2>Residence time</h2>
<p>A sorbent needs time to capture a molecule as air passes through the bed. Residence time is the media depth divided by the air velocity through it:</p>
<p class="formula">Residence time (s) = bed depth (ft) ÷ velocity (ft/s)</p>
<p>A 2 in (51 mm) bed at 250 fpm (1.27 m/s) gives 0.167 ÷ 4.17 ≈ 0.04 s. Thin carbon-loaded panels at typical filter velocities give only a small fraction of that. Deep-bed modules and refillable trays are designed for longer contact time, often around a tenth of a second or more. Longer residence time improves single-pass efficiency and makes the bed use more of its capacity before breakthrough.</p>

<h2>Media formats</h2>
<ul>
<li><strong>Carbon-impregnated nonwoven or pleated panels:</strong> fit standard filter racks, low pressure drop, limited media mass. Suited to light odour control and low concentrations; short life at higher loads.</li>
<li><strong>Bonded carbon panels:</strong> granules bonded into a self-supporting panel; more media than impregnated nonwovens.</li>
<li><strong>Refillable V-cell or tray modules:</strong> loose granular media in perforated metal or plastic cells, set at an angle in a rack; substantial media mass and residence time; refillable.</li>
<li><strong>Deep-bed systems:</strong> bulk media in a housing several inches or more deep; highest capacity for heavy loads and industrial or corrosive environments.</li>
</ul>
<p>More media means more capacity but also more weight, depth and pressure drop. Gas-phase stages are heavy; structural support in the unit needs to account for media weight.</p>

<h2>Where gas-phase filters go in the AHU</h2>
<ol>
<li><strong>Particle prefilter upstream</strong>, so dust does not coat the sorbent granules and block pores.</li>
<li><strong>Gas-phase stage</strong>.</li>
<li><strong>Particle filter downstream</strong>, often MERV 13 or higher, to capture fine dust shed by the granular media.</li>
</ol>
<p>Relative humidity matters. High humidity reduces carbon's capacity for many organic compounds because water competes for adsorption sites, while some chemisorbents need a minimum moisture level to react well. Follow the supplier's humidity range, and consider placing the stage after reheat or in air that is not saturated.</p>

<h2>Service life and change-out</h2>
<p>Gas-phase media does not show its exhaustion through pressure drop. The bed captures contaminants until its capacity is used up, then the contaminant breaks through. Common ways to determine change-out:</p>
<ul>
<li><strong>Media sampling:</strong> small sample tubes or coupons in the bed are sent to the supplier for remaining-life analysis.</li>
<li><strong>Downstream monitoring</strong> of a target gas or of corrosion rate on reactive coupons.</li>
<li><strong>Calculated life</strong> from expected concentration, airflow and media capacity, verified by sampling.</li>
<li><strong>Visual indication</strong> for permanganate media, which discolours as it is consumed.</li>
</ul>
<p class="note">Protection of electronics from corrosive gases, classified by reactive coupon corrosion rates, is a data center topic covered in <a href="<?= url('guides/gaseous-contamination-isa-71-04') ?>">gaseous contamination and ISA 71.04</a>. Gas-phase filtration also underpins outdoor air reductions under <a href="<?= url('guides/ashrae-62-1-iaq-procedure') ?>">the ASHRAE 62.1 IAQ Procedure</a>.</p>
<p>Units with deep-bed gas-phase stages are usually long and heavy. Planning the section sequence, access and media handling into a <a href="<?= url('products/custom-air-handlers') ?>">custom air handler</a> from the start avoids retrofit problems later.</p>
<?php guide_end([
    ['What does activated carbon remove from air?', 'Activated carbon removes many organic vapours, solvents and odours by physical adsorption and decomposes ozone. It is less effective for small, light molecules such as formaldehyde and ammonia, which need impregnated carbon or chemisorbent media.'],
    ['What is potassium permanganate filter media used for?', 'Potassium permanganate impregnated on activated alumina oxidizes reactive gases such as hydrogen sulfide, sulfur dioxide, nitric oxide and formaldehyde. It is common in wastewater, pulp and paper, and electronics protection applications.'],
    ['How do I know when to change carbon filters?', 'Pressure drop does not indicate exhaustion. Use media sample analysis from the supplier, downstream gas or corrosion monitoring, or a calculated life based on concentration and capacity that is verified by sampling.'],
]);
