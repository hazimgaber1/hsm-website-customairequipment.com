<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-base-frame-construction'); ?>
<p class="lede">The base frame is the structural foundation of an air handler: perimeter rails and cross members, usually formed or structural steel channel, that carry the weight of every component, provide lifting points for rigging, and transfer loads to the pad, curb or supports in a controlled way. A good base is stiff enough that the casing above it stays square and sealed.</p>

<h2>What the base has to do</h2>
<ul>
<li><strong>Carry dead load.</strong> Coils full of water, fans, motors, humidifiers and the casing itself. Wet coils can add a large share of a section's weight.</li>
<li><strong>Carry dynamic and lateral load.</strong> Fan thrust and vibration, seismic forces and, for outdoor units, wind.</li>
<li><strong>Stay stiff.</strong> If the base sags between supports, doors bind, panel joints open and leakage rises.</li>
<li><strong>Survive lifting.</strong> Crane lifts load the base very differently from resting on a pad; the base must take concentrated loads at lifting lugs without permanent bending.</li>
<li><strong>Provide trap height.</strong> The base height, plus any pad, sets how deep a condensate trap can be.</li>
<li><strong>Provide a connection point</strong> for anchors, isolators, seismic restraints and section-to-section joints.</li>
</ul>

<h2>Rail construction</h2>
<h3>Formed channel</h3>
<p>Heavy-gauge galvanized steel bent into a C or Z channel. Economical and adequate for smaller units and short spans when the unit sits on a continuous pad or curb.</p>
<h3>Structural channel or wide flange</h3>
<p>Hot-rolled steel channel (C-sections) or wide-flange beams, welded into a perimeter frame with cross members. Used on larger units, units that will be supported at points rather than continuously, and units that must be lifted in long sections. Typically painted or galvanized after fabrication.</p>
<h3>Cross members</h3>
<p>Transverse members under heavy components such as coils, fans and humidifiers, and at section joints. Fan sections often have a dedicated internal fan base on vibration isolators sitting on these cross members.</p>
<h3>Base height</h3>
<p>Common base heights run from about 4 in to 12 in (100 to 300 mm), depending on unit size and trap requirements. A taller base raises the drain pan outlet, allowing the condensate trap to be built without a pad, but raises the whole unit and its duct connections.</p>
<table>
<thead><tr><th>Base type</th><th>Typical use</th><th>Support method</th></tr></thead>
<tbody>
<tr><td>Light formed channel</td><td>Small indoor units</td><td>Continuous housekeeping pad</td></tr>
<tr><td>Heavy formed channel</td><td>Medium indoor units, curb-mounted outdoor units</td><td>Pad or full-perimeter curb</td></tr>
<tr><td>Structural channel perimeter with cross members</td><td>Large units, long sections</td><td>Pad, curb, dunnage or isolators</td></tr>
<tr><td>Structural base designed for point support</td><td>Units on steel dunnage or piers</td><td>Discrete support points at designated locations</td></tr>
</tbody>
</table>

<h2>Lifting lugs and rigging points</h2>
<p>Lifting lugs are steel plates or tubes welded or bolted to the base rails at designed points, with holes for shackles. Each shipping section has its own set, usually four, positioned to balance the section's centre of gravity.</p>
<ul>
<li>Lugs must be designed for the section weight with an appropriate safety factor and for the sling angle expected.</li>
<li>Spreader bars are normally required so slings do not crush the casing. Drawings should state this.</li>
<li>The centre of gravity is rarely in the middle of a section: a coil section full of tubes and headers is heavy on one side. Lug positions and the rigging drawing must reflect this.</li>
<li>Lugs should be removable or flush where they would interfere with installation on a curb or against a wall.</li>
<li>Some bases include fork pockets for forklift handling in the factory and on site.</li>
</ul>
<p class="warn">Never lift a section by its casing, door frames or duct flanges. Only the lifting points shown on the rigging drawing are designed for the load. Rigging methods are covered in <a href="<?= url('guides/rigging-methods-crane-skidding-helicopter') ?>">rigging methods</a>.</p>

<h2>Support requirements</h2>
<p>The base design must match how the unit will be supported. Tell the manufacturer early:</p>
<ul>
<li><strong>Continuous pad:</strong> the simplest case. The base rails bear along their full length. The pad must be flat and level within the tolerance the manufacturer requires.</li>
<li><strong>Roof curb:</strong> similar to continuous support, but the curb must match the base outline and carry the loads to the roof structure.</li>
<li><strong>Point supports:</strong> steel dunnage, piers or isolators at discrete points. The base rails now act as beams spanning between supports, which typically needs a heavier structural base. The manufacturer must know support locations to design for them.</li>
<li><strong>Vibration isolators under the whole unit:</strong> a stiff base is essential so the unit acts as one rigid mass on its springs.</li>
</ul>
<p>The choice among curbs, dunnage and piers for outdoor units is compared in <a href="<?= url('guides/roof-curb-vs-steel-dunnage') ?>">roof curb vs steel dunnage</a>; how the base resists seismic and wind forces is covered in <a href="<?= url('guides/seismic-wind-structural-casing-design') ?>">structural design for seismic and wind loads</a>.</p>

<h2>Corrosion, insulation and joints</h2>
<p>The base sits at the lowest point of the unit, where water collects from leaks, condensate overflows and floor cleaning. Galvanized or painted structural steel, with drainage holes in channels that could hold water, extends life. On outdoor units, a base exposed to standing water and snow needs a durable coating.</p>
<p>The floor above the base should be thermally separated from the rails so the cold floor liner does not chill the base and cause condensation underneath. Between shipping sections, base rails are bolted together with splice plates; the splice must restore the base's stiffness across the joint, and the drawings should show bolt sizes and torque.</p>
<?php guide_end([
    ['What is an AHU base frame made of?', 'Most bases are galvanized formed steel channel for smaller units or welded structural steel channel for larger units, with perimeter rails and cross members under heavy components. The base carries the unit weight and provides lifting and anchoring points.'],
    ['How tall should an air handler base be?', 'Base heights commonly range from about 4 to 12 in. The height is often driven by the condensate trap depth needed for the drain pan pressure. A housekeeping pad can add the remaining height if the base is shorter.'],
    ['Can an air handler sit on point supports?', 'Yes, if the base is designed for it. On point supports the rails act as beams between supports, so the manufacturer needs the support locations to size the base. A base designed for continuous support may sag on points.'],
]);
