<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('plenum-fan-vs-housed-centrifugal'); ?>
<p class="lede">A plenum (plug) fan saves length and lets you take air off the discharge plenum in almost any direction, while a housed centrifugal fan converts more velocity pressure to static pressure and is often more efficient when the fan discharges straight into a duct. The better choice depends on how the air leaves the fan section, not on the fan alone.</p>

<h2>How the two fans differ physically</h2>
<p>Both use a centrifugal wheel, usually backward inclined or airfoil. The difference is what surrounds the wheel. A <strong>housed centrifugal fan</strong> places the wheel inside a scroll (volute). The scroll gathers the air leaving the blade tips, slows it gradually and directs it out of a single rectangular outlet. Part of the kinetic energy at the wheel tip is recovered as static pressure inside the scroll before the air ever reaches the duct.</p>
<p>A <strong>plenum fan</strong> is a bare wheel with an inlet cone, mounted on a wall inside a pressurized cabinet section. The wheel discharges radially around its full 360° into the plenum. There is no scroll, so most of the velocity pressure leaving the blade tips is lost as turbulence in the plenum. The plenum itself becomes the "housing", and ductwork can connect to the top, bottom, sides or end of that section.</p>

<h2>Side-by-side comparison</h2>
<table>
<thead><tr><th>Criterion</th><th>Plenum (plug) fan</th><th>Housed centrifugal fan</th></tr></thead>
<tbody>
<tr><td>Fan-only static efficiency at best point</td><td>Lower; velocity pressure at the wheel tip is not recovered</td><td>Higher; the scroll recovers part of the velocity pressure</td></tr>
<tr><td>Installed (system) efficiency</td><td>Often comparable or better when the housed fan would need a transition, elbow or diffuser downstream</td><td>Best only when the outlet has a straight duct run of several equivalent diameters</td></tr>
<tr><td>Section length</td><td>Shorter; no discharge transition or diffuser section needed</td><td>Longer; usually needs a discharge plenum, diffuser or straight duct</td></tr>
<tr><td>Discharge flexibility</td><td>Multiple outlets in any direction from one plenum</td><td>One outlet in a fixed orientation; rotation and discharge position chosen at order</td></tr>
<tr><td>Sound</td><td>Plenum acts as an attenuating chamber; lower discharge sound in many bands</td><td>Outlet sound goes straight into the duct; often needs more downstream attenuation</td></tr>
<tr><td>Airflow downstream</td><td>Plenum evens out flow before coils or filters</td><td>High-velocity jet from outlet; needs diffuser or baffle before a downstream coil</td></tr>
<tr><td>Cleanability</td><td>Open wheel, easy to inspect and wash</td><td>Scroll interior is harder to reach</td></tr>
<tr><td>Typical use</td><td>Draw-through and blow-through custom AHUs, fan arrays, multi-zone discharges</td><td>Ducted supply and exhaust where outlet connects directly to a straight run</td></tr>
</tbody>
</table>

<h2>Efficiency: why the catalog number is not the whole story</h2>
<p>Comparing fan-only ratings favours the housed fan. Its static efficiency figure includes the regain from the scroll, and on paper it may be several points higher than a plenum fan of the same wheel diameter. That comparison only holds if the housed fan discharges into ductwork that lets its outlet velocity profile develop. AMCA ratings assume an ideal outlet duct. In a real air handler the housed fan outlet commonly meets an abrupt expansion into a plenum, an elbow, or a coil a short distance away. Each of those adds a system effect penalty that never appears on the fan curve. Once the transitions and diffusers needed to make a housed fan work in a cabinet are included, the plenum fan frequently matches or beats it on installed brake horsepower.</p>
<p>For a deeper look at why the two fan types publish efficiency on different bases, see <a href="<?= url('guides/fan-static-vs-total-efficiency') ?>">fan static vs total efficiency</a>. The penalties from poor outlet conditions are covered in <a href="<?= url('guides/system-effect-amca-201') ?>">system effect and AMCA 201</a>.</p>
<p class="note">When you compare bids, ask each vendor for brake horsepower at the unit's total static pressure with all internal transitions included, not fan-only efficiency from a catalog.</p>

<h2>Space and layout consequences</h2>
<p>The plenum fan's biggest practical advantage is length. A housed fan in a custom unit typically needs a discharge section long enough for the air to decelerate, plus access space around the scroll. A plenum fan section can be little longer than the wheel depth plus inlet and discharge clearances. On a retrofit into an existing mechanical room, that difference can decide whether the unit fits.</p>
<p>Discharge flexibility matters as much. One plenum fan section can feed a top supply, a side connection to a second duct main and a bottom opening to a shaft, all at once. A housed fan would need a split plenum or separate fans to do the same. Plenum fans also mount readily in a <a href="<?= url('guides/draw-through-vs-blow-through-fan-arrangement') ?>">blow-through arrangement</a>, where the plenum spreads air across a downstream cooling coil.</p>

<h2>Where a housed fan still earns its place</h2>
<ul>
<li><strong>Straight ducted discharge:</strong> a supply fan feeding directly into a long, straight main can use the scroll's regain without penalty.</li>
<li><strong>High pressure at modest flow:</strong> scrolled fans with forward or backward blades can reach higher pressures in a smaller wheel diameter in some ranges.</li>
<li><strong>Industrial and inline service:</strong> exhaust, process and fume duty often benefits from a sealed housing with a single, well-defined connection.</li>
<li><strong>Like-for-like replacement:</strong> when ductwork and structure are built around an existing housed fan outlet, matching it can be cheaper than reworking connections.</li>
</ul>

<h2>Sound and maintenance points</h2>
<p>A plenum fan section usually produces lower discharge sound power in the mid and high octave bands because the plenum, especially when lined, behaves like a small attenuating chamber. Inlet sound and casing-radiated sound still need attention. A housed fan pushes its outlet sound directly into the duct, so the attenuation has to be done downstream.</p>
<p>For maintenance, the open wheel of a plenum fan is easy to see, clean and balance in place. Inlet cone alignment needs checking after any motor or wheel work because the gap between the cone and the wheel shroud strongly affects performance. A housed fan hides the wheel inside the scroll, but its bearings and drive are often more accessible on the outside of the housing.</p>

<h2>Making the decision</h2>
<ol>
<li>Sketch how air must leave the fan section: one duct or many, which directions, and how far to the next component.</li>
<li>Run both fan types at the same duty point with realistic internal system effects included.</li>
<li>Compare unit length, weight and sound at the discharge, not just fan efficiency.</li>
<li>Check cleanability needs for the application, especially in healthcare and food spaces.</li>
</ol>
<p>If you want to see how either option changes the length of a custom unit, the <a href="<?= url('design') ?>">3D configurator</a> lets you lay out the fan section against the rest of the air handler.</p>
<?php guide_end([
    ['Is a plenum fan less efficient than a housed fan?', 'On a fan-only basis a plenum fan usually rates lower because it does not recover velocity pressure in a scroll. Installed in an air handler, the gap often closes or reverses because a housed fan needs transitions and diffusers that add system effect losses.'],
    ['What is the difference between a plug fan and a plenum fan?', 'The terms are used interchangeably in North America. Both describe an unhoused centrifugal wheel with an inlet cone that discharges into a pressurized cabinet section.'],
    ['Can a plenum fan discharge into more than one duct?', 'Yes. Because the whole section is pressurized, openings can be cut on the top, bottom, sides or end, and several ducts can connect to the same plenum.'],
    ['When should I choose a housed centrifugal fan?', 'Choose a housed fan when it discharges straight into a duct with a good length of straight run, in many industrial or inline exhaust duties, or when you must match an existing outlet connection.'],
]);
