<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('structural-review-replacement-checklist'); ?>
<p class="lede">Before a replacement air handler is released for manufacture, the structural engineer needs a side-by-side comparison of the old and new units' weights, footprints and support points, plus the environmental loads on the new unit; this checklist collects that information so the review can be done once and done right.</p>

<h2>Why replacements need structural review</h2>
<p>It is tempting to assume that a new unit in the same location is structurally neutral. It rarely is. Modern units often have heavier double-wall casings, deeper coils, energy recovery sections, humidifiers and fan arrays. A unit may be longer, so its load lands on different beams. Rooftop units may catch more wind and trap more snow. Even when the total weight is similar, the distribution can differ enough to overload a single joist or beam. The review is also an opportunity to find deterioration in the existing supports.</p>
<p>Rigging loads and crane placement are separate and handled in <a href="<?= url('guides/crane-lift-planning') ?>">crane lift planning</a>.</p>

<h2>Existing unit data</h2>
<ul>
<li>Manufacturer, model, year and nameplate information.</li>
<li>Shipping and operating weights from original submittals or nameplate. If unavailable, estimate from dimensions and components and mark as estimated.</li>
<li>Overall dimensions: length, width, height.</li>
<li>Support type: housekeeping pad, structural steel dunnage, roof curb, hung from structure, isolation rails.</li>
<li>Support point locations and spacing, measured in the field.</li>
<li>Vibration isolator type and condition, if present.</li>
<li>Any known modifications to the unit since installation (added sections, removed components).</li>
</ul>

<h2>New unit data</h2>
<ul>
<li>Shipping weight per section and total operating weight (with water in coils, humidifier reservoirs and drain pans at operating level).</li>
<li>Overall dimensions and section breaks.</li>
<li>Centre of gravity of each section and of the assembled unit.</li>
<li>Point loads or line loads at each support location, from the manufacturer's support drawing.</li>
<li>Location of heavy components along the unit: coils, fan arrays, energy recovery wheels, humidifiers, electric heaters.</li>
<li>Base frame design and whether it requires continuous support or point supports.</li>
<li>Internal or external vibration isolation, and isolator deflection and spring rates if external.</li>
<li>Dynamic loads from fans: unbalance forces and starting torque reactions, as provided by the manufacturer.</li>
</ul>
<p class="note">Ask for operating weight, not just shipping weight. A large chilled water coil, a full humidifier and drain pans can add significantly to the static load.</p>

<h2>Comparison table to submit</h2>
<table>
<thead><tr><th>Item</th><th>Existing unit</th><th>New unit</th><th>Change</th></tr></thead>
<tbody>
<tr><td>Operating weight (lb / kg)</td><td></td><td></td><td></td></tr>
<tr><td>Length × width (ft / m)</td><td></td><td></td><td></td></tr>
<tr><td>Number of support points</td><td></td><td></td><td></td></tr>
<tr><td>Maximum point load (lb / kN)</td><td></td><td></td><td></td></tr>
<tr><td>Support locations relative to structure</td><td></td><td></td><td></td></tr>
<tr><td>Height above roof or floor (ft / m)</td><td></td><td></td><td></td></tr>
<tr><td>Support type</td><td></td><td></td><td></td></tr>
</tbody>
</table>

<h2>Supporting structure checks</h2>
<ul>
<li>Original structural drawings located, with member sizes and design live loads for the area.</li>
<li>Field verification of member sizes where drawings are absent or uncertain.</li>
<li>Condition survey: corrosion, section loss, cracked concrete, water damage to wood framing, loose connections.</li>
<li>Housekeeping pad condition, dimensions and reinforcement; anchor bolt locations and condition.</li>
<li>Steel dunnage member sizes, connections and attachment to building structure.</li>
<li>Roof curb construction and capacity, including the curb's attachment to the roof structure.</li>
<li>Load path from unit supports down to foundations identified.</li>
<li>Other equipment sharing the same structure, and any changes to it.</li>
</ul>

<h2>Environmental and code loads</h2>
<ul>
<li><strong>Wind.</strong> Exposed area, height and shape of the new unit for rooftop or outdoor installations; wind loads per the building code in force (National Building Code of Canada or provincial code, or the International Building Code with ASCE 7 as adopted).</li>
<li><strong>Snow.</strong> Drift loads against a taller or longer unit on a roof; possible increase over the old condition.</li>
<li><strong>Seismic.</strong> Site seismic parameters, importance category of the building, and whether the unit requires seismic certification or restraint design. See <a href="<?= url('guides/seismic-certification-ahus') ?>">seismic certification for AHUs</a>.</li>
<li><strong>Rain and ice.</strong> Ponding around new supports, ice accumulation on outdoor units in cold climates.</li>
<li><strong>Maintenance loads.</strong> Service platforms, catwalks and the weight of workers and equipment during coil or fan removal.</li>
</ul>

<h2>Vibration and dynamic considerations</h2>
<ul>
<li>Floor or roof natural frequency, if the unit sits on a long-span or flexible structure.</li>
<li>Fan operating speed range compared with structural natural frequencies to avoid resonance.</li>
<li>Isolator static deflection appropriate to the span of the supporting structure.</li>
<li>Thrust restraints if large fans produce significant axial forces.</li>
</ul>

<h2>Temporary and construction-stage loads</h2>
<ul>
<li>Laydown of sections or crated knockdown pieces on the roof or floor before installation.</li>
<li>Rolling loads from skates, dollies or pallet jacks along the route to the final location.</li>
<li>Temporary supports or cribbing used during setting.</li>
<li>Demolition debris accumulation before removal.</li>
<li>Crane outrigger or mobile equipment loads on podium slabs, parking decks or roofs, which need separate review from the permanent unit loads.</li>
</ul>

<h2>Outcome and sign-off</h2>
<ul>
<li>Engineer's conclusion: adequate as is, adequate with reinforcement, or requires new support.</li>
<li>Reinforcement drawings issued, if any, with the schedule for that work before unit delivery.</li>
<li>Manufacturer informed of any change to support point locations or base frame requirements.</li>
<li>Final support drawing approved and incorporated into the submittal package.</li>
</ul>
<p>Getting early weights and dimensions during design helps avoid late surprises; see <a href="<?= url('guides/ahu-weight-dimension-estimating') ?>">estimating AHU weight and dimensions early in design</a>.</p>
<?php guide_end([
    ['Does a replacement AHU need a structural review?', 'Yes, in most cases. New units are often heavier or longer and may load the structure at different points, and rooftop units can attract more wind and snow load. A structural engineer should compare old and new loads before the unit is released.'],
    ['What information does a structural engineer need for an AHU replacement?', 'They need the old and new operating weights, dimensions, support point locations and point loads, centre of gravity, isolation details, and the existing structural drawings or field-verified member sizes, plus environmental loads.'],
    ['Is operating weight different from shipping weight?', 'Yes. Operating weight includes water in coils, humidifier reservoirs and drain pans, plus any field-installed components. It is the figure the structural review should use.'],
]);
