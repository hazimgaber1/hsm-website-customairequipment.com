<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('recirculating-vs-once-through-cleanrooms'); ?>
<p class="lede">Recirculating cleanroom systems filter and reuse most of the room air, adding only enough outdoor air for ventilation, exhaust makeup and pressurization. Once-through systems supply 100% outdoor air and exhaust all of it. Recirculation is far cheaper to run; once-through is chosen when returning the air could spread a hazardous or cross-contaminating substance.</p>

<h2>The basic difference</h2>
<p>In a recirculating design, return air from the cleanroom goes back to the air handler, mixes with a small amount of outdoor air, is filtered and conditioned, and is supplied again. Outdoor air is often 5% to 20% of supply. In a once-through design, every cfm supplied comes from outdoors and every cfm returned is exhausted, usually through filtration and sometimes through scrubbing.</p>
<p>Because cleanrooms need very high supply rates to meet their ISO class, the choice multiplies quickly. A room needing 10,000 cfm of supply might need only 1,000 cfm of outdoor air with recirculation, but 10,000 cfm with once-through. The outdoor air load scales with it.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Recirculating</th><th>Once-through (100% outdoor air)</th></tr></thead>
<tbody>
<tr><td>Energy use</td><td>Low: only the outdoor air fraction is fully conditioned</td><td>Very high: all supply air is heated, cooled and dehumidified from outdoor conditions</td></tr>
<tr><td>Cross-contamination risk</td><td>Present if return air carries product or agent between rooms or products</td><td>Eliminated through the air system</td></tr>
<tr><td>Operator exposure to airborne product</td><td>Return HEPA reduces it; residual risk depends on filtration and leaks</td><td>Exposure limited to the room; no return path</td></tr>
<tr><td>Solvent or vapor accumulation</td><td>Vapors pass HEPA filters and can build up in recirculated air</td><td>Vapors removed with exhaust</td></tr>
<tr><td>Humidity control</td><td>Easier; small outdoor load</td><td>Harder; full outdoor latent load at every hour</td></tr>
<tr><td>Equipment size</td><td>Smaller cooling and heating plant</td><td>Large coils, preheat, humidifiers and plant</td></tr>
<tr><td>Exhaust filtration</td><td>Only for the exhaust fraction</td><td>For the full airflow, often bag-in/bag-out</td></tr>
<tr><td>Energy recovery</td><td>Limited value; little exhaust</td><td>Valuable but restricted to technologies without cross-leakage</td></tr>
</tbody>
</table>

<h2>When once-through is the right call</h2>
<p>Once-through air handling is usually justified by one of these conditions:</p>
<ul>
<li><strong>Potent or sensitizing compounds.</strong> Highly potent active ingredients, cytotoxics, hormones, beta-lactam antibiotics and some biologics can cause harm or cross-contamination at very small quantities. Owners commonly use occupational exposure bands to decide, and the highest bands often lead to once-through or dedicated recirculation with very strict controls.</li>
<li><strong>Flammable or toxic solvent vapors.</strong> HEPA filters capture particles, not vapors. Rooms using solvents in quantity usually need the vapor removed, not recirculated, unless carbon adsorption or another vapor control is reliable and monitored.</li>
<li><strong>Multiple products in shared spaces.</strong> Where several products run through rooms served by one unit, recirculation can carry one product into another's space. Once-through or dedicated units eliminate that path.</li>
<li><strong>Infectious agents.</strong> Containment suites generally do not recirculate air to other areas.</li>
</ul>
<p class="note">Particles that pass a HEPA filter in normal operation are rare, but leaks, bypass and filter damage do happen. The contamination control strategy has to account for the consequences if a return filter fails.</p>

<h2>Recirculation with safeguards</h2>
<p>Between full recirculation and once-through lie several arrangements that keep much of the energy benefit while controlling risk:</p>
<ul>
<li>Recirculation within a single product suite only, with a dedicated air handler, so air never reaches another product.</li>
<li>HEPA filtration in the return, often in bag-in/bag-out housings, so the AHU and ducts are not contaminated.</li>
<li>Local extraction at the source, such as downflow booths or isolators, so the room air carries far less product.</li>
<li>Carbon or other gas-phase filtration for low concentrations of vapors, monitored for breakthrough.</li>
<li>Switchable systems that recirculate during routine operation and go to once-through during cleaning or product changeover.</li>
</ul>
<p>Each safeguard adds pressure drop, maintenance and validation effort, so the energy savings from recirculation have to be weighed against those costs over the life of the facility.</p>

<h2>Energy illustration</h2>
<p>Take a suite needing 20,000 cfm of supply at 62°F and 45 gr/lb, in a climate where summer design outdoor air is 92°F dry bulb with a high dew point, giving about 40 Btu/lb enthalpy. Reaching 45 gr/lb means cooling to roughly 44°F near saturation, about 17 Btu/lb, before reheat.</p>
<p class="formula">Cooling load (Btu/h) ≈ 4.5 × cfm × Δh</p>
<ul>
<li>Once-through: 4.5 × 20,000 × (40 − 17) = 2,070,000 Btu/h, about 172 tons, plus reheat.</li>
<li>Recirculating with 2,000 cfm outdoor air: outdoor air load ≈ 4.5 × 2,000 × 23 = 207,000 Btu/h, plus the room sensible load handled by the recirculating coil. The outdoor air portion is one tenth of the once-through figure.</li>
</ul>
<p>Winter heating and humidification scale the same way. This is why once-through systems need strong justification and are kept to the smallest area that requires them, and why their exhaust energy recovery is worth studying. Recovery restrictions for hazardous exhaust are discussed in <a href="<?= url('guides/exhaust-air-class-recovery-restrictions') ?>">exhaust air class recovery restrictions</a>.</p>

<h2>Impacts on the air handler</h2>
<p>A once-through unit is essentially a large 100% outdoor air unit: preheat with freeze protection, deep cooling coils for dehumidification, reheat, humidification and often desiccant equipment for low dew points. Coil face velocities and drain pans need attention because condensate loads are large. Read more about <a href="<?= url('guides/100-percent-outdoor-air-ahu-design') ?>">100% outdoor air AHU design</a>.</p>
<p>A recirculating unit is dominated by sensible cooling and high airflow at moderate pressure, with a separate or integrated makeup section doing the latent work. Where recirculation happens through the ceiling rather than a central unit, the choice between FFUs and central fans is covered in <a href="<?= url('guides/fan-filter-units-vs-central-ahu') ?>">fan filter units vs central AHU recirculation</a>.</p>
<?php guide_end([
    ['Why do some pharmaceutical cleanrooms use 100% outdoor air?', 'To avoid returning air that could carry potent compounds, solvent vapors or one product into another product\'s space. Once-through air removes the cross-contamination path through the HVAC system, at a large energy cost.'],
    ['Can HEPA filters make recirculation safe for potent compounds?', 'HEPA filters greatly reduce particulate carryover, and return HEPA filtration is common. They do not remove vapors, and the strategy must account for filter leaks or damage. The owner\'s risk assessment decides whether that is acceptable.'],
    ['How much more energy does a once-through cleanroom use?', 'The outdoor air load scales with the airflow conditioned from outdoors. If a recirculating system uses 10% outdoor air, a once-through system serving the same supply airflow handles roughly ten times the outdoor air load.'],
]);
