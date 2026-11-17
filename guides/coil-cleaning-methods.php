<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('coil-cleaning-methods'); ?>
<p class="lede">Clean air handler coils with the gentlest method that removes the dirt: brush or comb the face and vacuum for light surface dust, use a foaming or non-acid coil cleaner and low-pressure rinse for loaded or greasy coils, and reserve controlled pressure washing or steam for deep fouling on coils that can withstand it. Always clean against the airflow direction and protect fins from damage.</p>

<h2>Why the method matters</h2>
<p>Coil fins are thin aluminum or copper, typically a few thousandths of an inch thick. Aggressive cleaning bends them flat, which blocks airflow as effectively as dirt does, and harsh chemicals can corrode fins and the fin-to-tube bond. A coil that is cleaned badly once a year can lose more performance from the cleaning than from the dirt. The right method depends on what is on the coil, how deep it is, the coil's depth and fin spacing, and its material and coating.</p>
<p>Before deciding, look at both faces with a flashlight. Dust on the upstream face only suggests filter bypass or a poor filter; dirt packed deep in the coil suggests long neglect or heavy loading, and slime suggests biological growth from wet conditions. If the problem is lost capacity rather than visible dirt, diagnose first using <a href="<?= url('guides/coil-capacity-shortfall-troubleshooting') ?>">coil capacity shortfall troubleshooting</a>.</p>

<h2>Step 1: Prepare the unit</h2>
<ol>
<li>Lock out the fans and any electric heaters. Close and lock coil water valves if the cleaning will be extensive.</li>
<li>Remove or protect filters downstream of the coil, and cover motors, electrical components and insulation in the cleaning area with plastic.</li>
<li>Confirm the drain pan and trap are clear; cleaning solution and rinse water must drain away without overflowing.</li>
<li>Measure the coil's airside pressure drop before cleaning, at a known airflow, so the result can be measured.</li>
<li>Check the coil's coating, if any. Coated coils, such as those with phenolic or epoxy coatings, may have restrictions on chemicals and pressure from the coating supplier.</li>
</ol>

<h2>Step 2: Choose the method</h2>
<table>
<thead><tr><th>Method</th><th>Good for</th><th>Risks</th><th>Use when</th></tr></thead>
<tbody>
<tr><td>Soft brush and vacuum</td><td>Loose dust and lint on the entering face</td><td>Pushing dirt deeper if brushed wrong way</td><td>Routine cleaning of well-filtered coils</td></tr>
<tr><td>Fin comb</td><td>Straightening bent fins after cleaning</td><td>Tearing fins if wrong spacing comb used</td><td>Localized fin damage</td></tr>
<tr><td>Foaming cleaner and low-pressure rinse</td><td>Embedded dirt, light grease, film</td><td>Chemical corrosion if wrong product or not rinsed</td><td>Most cooling coils at annual cleaning</td></tr>
<tr><td>Controlled pressure washing</td><td>Deep, packed dirt in thick coils</td><td>Fin damage, water forced into insulation</td><td>Heavy fouling, with a wide spray tip at modest pressure</td></tr>
<tr><td>Low-pressure steam</td><td>Grease, biofilm, packed debris</td><td>Heat damage to nearby parts, burns</td><td>Kitchen-adjacent or greasy coils, where approved</td></tr>
</tbody>
</table>

<h2>Step 3: Clean in the right direction</h2>
<ol>
<li>Start with a dry pass. Vacuum the entering face with a brush attachment, moving parallel to the fins, never across them.</li>
<li>For wet cleaning, apply the cleaner to the leaving face first if accessible, so the chemical works through toward the dirtier entering face, then apply to the entering face. Follow the product's dwell time.</li>
<li>Rinse from the leaving side toward the entering side, which is the reverse of airflow. This pushes dirt out the way it came in rather than driving it deeper.</li>
<li>Keep the spray perpendicular to the coil face and parallel to the fins. An angled spray folds fins over.</li>
<li>Work in sections, from top to bottom, so rinse water carries dirt down to the pan.</li>
</ol>
<p class="warn">If you pressure wash, use a wide fan tip, keep the nozzle well back from the coil face, and start at low pressure. Increase only as far as needed to move the dirt. High pressure close to the face will flatten fins in seconds.</p>

<h2>Step 4: Choose cleaning chemicals carefully</h2>
<ul>
<li>Use products labelled for HVAC coil cleaning and compatible with the coil's fin and tube materials.</li>
<li>Prefer neutral or mildly alkaline cleaners for routine work on aluminum fins. Strong acids and strong alkalis attack aluminum and can loosen the fin-to-tube bond.</li>
<li>For indoor coils in occupied buildings, choose products suitable for use in the airstream and rinse thoroughly so no residue is carried into occupied spaces.</li>
<li>For biological growth, use a cleaner or disinfectant registered for that purpose, following its label.</li>
<li>Check the safety data sheet and use the personal protective equipment it lists.</li>
</ul>

<h2>Step 5: Rinse, inspect and record</h2>
<ol>
<li>Rinse until runoff is clear and no foam remains. Residual chemical will keep working on the fins.</li>
<li>Inspect with a flashlight from the opposite face. You should see light through the coil evenly.</li>
<li>Straighten any bent fins with a fin comb of the correct fin spacing.</li>
<li>Clean the drain pan and flush the trap after cleaning; the dirt has to go somewhere. See <a href="<?= url('guides/drain-pan-cleaning-biofilm') ?>">how to clean drain pans</a>.</li>
<li>Dry the area, remove protection, reinstall filters, and restart.</li>
<li>Measure the coil pressure drop again at the same airflow and record both values.</li>
</ol>
<p class="note">A coil that fouls quickly is a symptom. Check filter seating and bypass, filter efficiency and outdoor air intake conditions rather than simply cleaning more often.</p>
<?php guide_end([
    ['Can I pressure wash an air handler coil?', 'Sometimes, for heavily fouled coils, but only with a wide fan tip, modest pressure, the nozzle held well back and the spray parallel to the fins. High pressure close to the face flattens fins quickly.'],
    ['Which direction should I clean a coil?', 'Rinse from the leaving-air side toward the entering-air side, which is against normal airflow. This pushes dirt back out of the face where it entered instead of driving it deeper into the coil.'],
    ['Are acid coil cleaners safe for aluminum fins?', 'Strong acid or strong alkaline cleaners can corrode aluminum fins and weaken the fin-to-tube bond. Use cleaners labelled for HVAC coils and compatible with the coil materials and any coating.'],
]);
