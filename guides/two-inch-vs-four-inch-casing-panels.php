<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('two-inch-vs-four-inch-casing-panels'); ?>
<p class="lede">A 4 in (100 mm) panel roughly doubles the insulating value of a 2 in (50 mm) panel with the same core and is much stiffer over long spans, but it adds about 4 in to the unit's width and height and adds weight and cost. Choose 2 in for most indoor units with moderate pressures; choose 4 in for outdoor units, cold climates, high pressures, tall sections and acoustically demanding projects.</p>

<h2>What changes with thickness</h2>
<p>Doubling the core depth affects four things: thermal resistance, stiffness, sound transmission and the space the unit occupies. Core material is a separate choice covered in <a href="<?= url('guides/fiberglass-vs-foam-panel-insulation') ?>">fiberglass vs foam</a>; the comparisons here assume the same core in both thicknesses.</p>

<h3>Thermal resistance</h3>
<p>Core R-value scales almost directly with thickness. A 2 in foam core of about R-13 becomes roughly R-26 at 4 in; a 2 in mineral fibre core of about R-8 becomes roughly R-16. That halves conductive heat flow through the centre of each panel. However, thermal bridging at edges, frames and doors does not necessarily improve with thickness. A thick panel with poor edge details can still sweat at its seams, so the bridging class must be checked separately.</p>

<h3>Stiffness</h3>
<p>Panel stiffness rises steeply with depth. For a sandwich panel, the bending stiffness grows roughly with the square of the distance between skins and core shear stiffness grows roughly in proportion to depth. In practical terms, a 4 in panel can span much farther between frames for the same deflection, or carry much higher pressure over the same span. The arithmetic is in <a href="<?= url('guides/casing-panel-deflection-calculation') ?>">calculating panel deflection</a>.</p>

<h3>Sound transmission</h3>
<p>Thicker panels with fibrous cores generally provide more transmission loss through the casing, particularly at mid and high frequencies, and deeper perforated-liner panels absorb more sound internally, especially at lower frequencies. Foam panels gain less acoustic benefit from added thickness because the foam itself is a poor absorber.</p>

<h3>Footprint and weight</h3>
<p>Every wall panel adds its thickness twice to the width and twice to the height. Moving from 2 in to 4 in panels adds roughly 4 in to each outside dimension for the same interior size, plus a modest increase in length at section joints and end panels. Weight rises with the extra core and, on frame systems, with heavier frames.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>2 in panel</th><th>4 in panel</th></tr></thead>
<tbody>
<tr><td>Core R-value (foam, approximate)</td><td>R-12 to R-14</td><td>R-24 to R-28</td></tr>
<tr><td>Core R-value (mineral fibre, approximate)</td><td>R-8</td><td>R-16</td></tr>
<tr><td>Allowable span at a given pressure</td><td>Shorter; more frames on tall sections</td><td>Longer; fewer frames</td></tr>
<tr><td>Pressure capability on a given span</td><td>Moderate</td><td>Higher</td></tr>
<tr><td>Casing radiated sound</td><td>Baseline</td><td>Lower, especially with fibrous core</td></tr>
<tr><td>Outside dimensions for the same interior</td><td>Baseline</td><td>About 4 in wider and taller</td></tr>
<tr><td>Weight</td><td>Baseline</td><td>Higher</td></tr>
<tr><td>Cost</td><td>Baseline</td><td>Higher</td></tr>
<tr><td>Typical use</td><td>Indoor commercial units</td><td>Outdoor, cold climate, high pressure, large or acoustically sensitive units</td></tr>
</tbody>
</table>
<p>R-values are typical ranges; use manufacturer data.</p>

<h2>When 4 in is worth it</h2>
<ul>
<li><strong>Outdoor units</strong>, where the casing is part of the building envelope year-round. Halving the heat transfer through a large casing area cuts heating and cooling losses and reduces the risk of interior frost on cold days.</li>
<li><strong>Cold-climate 100% outdoor air units</strong>, where sections ahead of preheat may be well below freezing inside while the mechanical room is warm and humid.</li>
<li><strong>High-pressure sections</strong>, such as hospital units with HEPA filters and energy recovery, or units with large fans, where 2 in panels would need closely spaced frames to meet deflection limits.</li>
<li><strong>Tall sections</strong>, where panels span long distances between rails.</li>
<li><strong>Acoustically sensitive sites</strong>, such as rooftop units over auditoriums or mechanical rooms next to classrooms.</li>
</ul>

<h2>When 2 in is the better choice</h2>
<ul>
<li>Indoor units in conditioned or moderately conditioned mechanical rooms with ordinary pressures.</li>
<li>Retrofits where the unit must fit an existing room or pass through existing doors. Every inch counts, and 2 in panels may be the difference between a factory-assembled section and knockdown construction.</li>
<li>Projects where the thermal advantage of 4 in would be small compared with bridging losses at frames and doors.</li>
</ul>
<p class="note">On a tight retrofit, a 2 in foam panel with good thermal breaks can outperform a 4 in mineral fibre panel without breaks in condensation risk, at a smaller footprint. Compare complete constructions, not thicknesses alone.</p>

<h2>Mixing thicknesses</h2>
<p>Some custom units use 4 in panels where they matter, such as the roof and exposed walls of an outdoor unit, or the fan and attenuating sections, and 2 in panels elsewhere. Others keep one thickness for simplicity and consistent appearance. Mixing requires transitions in the frame system and is easier with frame-and-panel construction. For outdoor units, also look at vestibule walls, which see interior conditioned air on one side and weather on the other; see <a href="<?= url('guides/outdoor-service-vestibules') ?>">service vestibules</a>.</p>
<h2>A quick numerical comparison</h2>
<p>Consider an outdoor unit with 1,500 ft² of casing surface carrying 55°F air on a 95°F day. Using approximate centre-of-panel R-values for foam cores, and ignoring bridging, conduction through 2 in panels at about R-13 is roughly 1,500 × 40 ÷ 13 = 4,600 Btu/h; through 4 in panels at about R-26 it is roughly 2,300 Btu/h. The saving is real but modest for one hour. It grows over thousands of hours a year in climates with large temperature differences, and it matters most for 100% outdoor air units, where the inside of the casing sees extreme temperatures too.</p>
<?php guide_end([
    ['Is a 4 inch casing panel twice as good as 2 inch?', 'Thermally, the core insulating value roughly doubles. Stiffness increases even more. But overall casing performance also depends on thermal bridging at frames and doors, so the whole casing does not necessarily perform twice as well.'],
    ['How much bigger is an air handler with 4 inch panels?', 'For the same interior dimensions, the outside width and height each grow by about 4 in, because each wall panel adds its extra 2 in of thickness on both sides. Length grows slightly at end panels and section joints.'],
    ['Do outdoor air handlers need 4 inch panels?', 'Not always, but 4 in panels are common on outdoor units, especially in cold or hot and humid climates, because the casing acts as part of the building envelope and sees large temperature differences.'],
]);
