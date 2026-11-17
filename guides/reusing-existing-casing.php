<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('reusing-existing-casing'); ?>
<p class="lede">An existing air handler casing can be reused when its structure is still carrying load without significant corrosion, its insulation is dry and intact, and its leakage is low enough that new fans and coils will not be undermined by air bypass and condensation; if any of those three fail broadly, reusing the box is false economy.</p>

<h2>Why the casing is the deciding component</h2>
<p>Fans, motors, coils, dampers and controls are all replaceable through an access door. The casing is not; it is the thing everything else hangs on. Keeping it saves demolition, rigging and reconnection work, and often avoids opening walls or roofs. But a retrofit inherits every weakness the casing has, and a new high-efficiency fan or coil will not compensate for air leaking around it or water soaking the insulation beside it. Assessing the casing is therefore a separate, more careful exercise than rating the components inside it.</p>
<p>This guide focuses on that assessment for component retrofits. Where the plan is to strip the unit to bare frame and replace panels and floors, see <a href="<?= url('guides/rebuild-in-place-ahu') ?>">how to rebuild an AHU in place</a> instead.</p>

<h2>Structure: can it carry the load?</h2>
<p>Start under the unit and work up.</p>
<ul>
<li><strong>Base frame.</strong> Look for section loss in channels and angles, especially at the bottom flange and where water collects. Light surface rust is cosmetic; flaking scale, pitting that penetrates the section, or holes are structural concerns.</li>
<li><strong>Support points.</strong> Check bearing plates, isolators and anchor bolts. A sagging section usually means a support has failed or the dunnage has deflected.</li>
<li><strong>Internal framing.</strong> Coil racks and fan bases are often built from lighter members than the base. Check that they are still attached and not distorted.</li>
<li><strong>New loads.</strong> Compare the weight and location of proposed components with what the structure carries now. A fan array may spread load differently than a single fan; a deeper coil adds weight at the rails.</li>
</ul>
<p>Where there is any doubt, have a structural engineer review. The weight comparison work for complete replacements is covered in the <a href="<?= url('guides/structural-review-replacement-checklist') ?>">structural review checklist for replacement units</a>.</p>

<h2>Insulation: wet, compressed or exposed</h2>
<p>Insulation condition decides both thermal performance and indoor air quality.</p>
<ul>
<li><strong>Single-wall casings</strong> with exposed fibrous insulation are the most common problem in older units. Surfaces erode into the airstream and trap dirt and moisture. Coating or encapsulating may slow erosion but does not restore a cleanable surface.</li>
<li><strong>Double-wall casings</strong> hide the insulation. Use an infrared camera on a cold day or with the cooling coil running to find cold spots and wet areas; probe suspicious panels from inside.</li>
<li><strong>Wet insulation</strong> near cooling coils and humidifiers is the usual failure. Once fibrous insulation has been soaked repeatedly it loses much of its insulating value and can support microbial growth.</li>
</ul>
<p>If wet or deteriorated insulation is confined to a few panels, those panels can be replaced. If it is widespread, especially downstream of the cooling coil, the casing is a poor candidate for reuse.</p>
<p class="warn">Insulation, gaskets and mastics in older units may contain asbestos. Have them sampled before cutting or removing anything.</p>

<h2>Leakage: will new components be bypassed?</h2>
<p>Casing leakage costs energy, but in a retrofit it causes two more specific problems. Air bypassing a new filter bank defeats the filtration upgrade, and air bypassing a coil reduces its effective capacity and can cause condensation where warm, humid air meets cold surfaces.</p>
<p>Practical field checks:</p>
<ol>
<li>Run the unit and walk the perimeter listening for whistling at seams, doors and penetrations.</li>
<li>Use a smoke pencil at panel joints, door gaskets and pipe and wire penetrations.</li>
<li>Check that access doors close tightly and that gaskets are continuous and resilient.</li>
<li>For units where tightness matters, perform a pressure-decay or fan-pressurization test with openings blanked; the method is in <a href="<?= url('guides/field-leakage-testing') ?>">field leakage testing</a>.</li>
</ol>
<p>Localized leaks at doors and penetrations are easily fixed with new gaskets and sealant. Leakage spread across panel seams throughout the casing suggests distortion or failed panel attachment, which is much harder to correct.</p>

<h2>Reading the results together</h2>
<table>
<thead><tr><th>Structure</th><th>Insulation</th><th>Leakage</th><th>Outlook for reuse</th></tr></thead>
<tbody>
<tr><td>Sound</td><td>Dry, intact</td><td>Localized</td><td>Good candidate; repair doors and penetrations</td></tr>
<tr><td>Sound</td><td>Localized damage</td><td>Localized</td><td>Reuse with panel replacement in affected sections</td></tr>
<tr><td>Sound</td><td>Widespread damage</td><td>Widespread</td><td>Consider rebuild-in-place with new panels</td></tr>
<tr><td>Section loss</td><td>Any</td><td>Any</td><td>Reuse only after engineered structural repair; often replace</td></tr>
</tbody>
</table>

<h2>Other limits a reused casing imposes</h2>
<p>Even a sound casing fixes the cross-section and length of the unit. Check that the target airflow fits the existing coil face area at a reasonable face velocity, that there is room for the inlet and discharge clearances of new fans, and that any added components such as higher-efficiency filters or energy recovery have somewhere to go. Old casing panels are often thinner and less insulated than current practice, so if the unit is outdoors or handles very cold or humid air, check whether condensation on the exterior will be a recurring issue.</p>
<p class="note">A casing that passes all three checks can often outlast another full set of internal components. Document the findings so the next assessment has a baseline.</p>
<?php guide_end([
    ['How do I know if an old AHU casing can be reused?', 'Check that the base frame and internal framing have no significant section loss, that insulation is dry and intact, and that leakage is limited to fixable spots like doors and penetrations. Widespread failure in any of the three makes reuse risky.'],
    ['Does wet insulation mean the casing must be replaced?', 'Not necessarily. Localized wet panels near a coil or humidifier can be replaced. Widespread wet or deteriorated insulation, particularly downstream of the cooling coil, usually points to rebuilding the casing or replacing the unit.'],
    ['Why does casing leakage matter more in a retrofit?', 'New filters and coils only work if air passes through them. Leakage around a new filter bank defeats the filtration upgrade, and bypass around coils reduces capacity and can cause condensation on cold surfaces.'],
]);
