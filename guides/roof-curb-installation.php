<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('roof-curb-installation'); ?>
<p class="lede">Install a roof curb for an outdoor air handler by checking it against the unit drawing, setting it on structure that was designed for it, leveling it before the roofing goes on, flashing it into the roof membrane with a cant and counterflashing, and sealing the curb-to-unit gasket so water and air stay out. The roofer and the mechanical contractor both have a role, so sequence the work carefully.</p>

<h2>Step 1: Confirm the curb and the structure</h2>
<ol>
<li>Compare the curb shop drawing with the approved air handler submittal: overall length and width, duct opening locations, cross members, gasket line and any seismic or wind attachment details.</li>
<li>Check that the curb height gives the required clearance above the finished roof surface. Many roofing systems and codes call for a minimum curb height above the membrane to allow proper flashing; confirm with the roofing manufacturer and local code.</li>
<li>Confirm the structural engineer has located supports for the curb perimeter and any intermediate cross members. The curb transfers the full unit weight; it must bear on joists, beams or framing designed for that load, not on deck alone.</li>
<li>For sloped roofs, confirm the curb is built to compensate for slope so the top is level.</li>
<li>Choosing between a curb and steel dunnage is a design decision covered in <a href="<?= url('guides/roof-curb-vs-steel-dunnage') ?>">roof curb vs steel dunnage</a>; this guide assumes the curb has been chosen.</li>
</ol>

<h2>Step 2: Set and anchor the curb</h2>
<ol>
<li>Mark the curb location on the deck from the structural layout. Check diagonals to confirm the outline is square.</li>
<li>Cut duct openings in the deck only inside the curb and only where shown, with framing added around them as the structural drawings require.</li>
<li>Set the curb on the structural supports. Assembled curbs are usually shipped knocked down: bolt or screw the rails and corners together exactly as the curb instructions show, and check all fasteners.</li>
<li>Anchor the curb to the structure with the specified fasteners at the specified spacing. Wind uplift and seismic loads pass through these connections.</li>
</ol>

<h2>Step 3: Level the curb before roofing</h2>
<p>Leveling is the step most often rushed, and an unlevel curb cannot be corrected once the unit sits on it.</p>
<ol>
<li>Check the curb top with a laser or water level at every corner and at each cross member.</li>
<li>Shim under the curb's bottom flange or bearing rails at structural supports until the top is level within the unit manufacturer's tolerance.</li>
<li>Check flatness along each long side. A curb that is level at the corners but sags at mid-span will rack the unit; add support or shims at the sag.</li>
<li>Recheck diagonals for square after shimming.</li>
<li>Fasten shims so they cannot walk out.</li>
</ol>
<p class="note">For long multi-section units, the curb tolerance governs how well the sections will join and how well doors close. See <a href="<?= url('guides/multi-section-leveling-tolerances') ?>">leveling tolerances for multi-section AHUs</a>.</p>

<h2>Step 4: Insulate and flash</h2>
<p>Flashing is normally done by the roofer to the roofing manufacturer's details. The mechanical contractor's job is to make sure the curb is ready and complete before the roofer arrives.</p>
<ol>
<li>Insulate the curb interior as specified, typically with rigid insulation on the inside walls. This limits condensation on the curb and heat loss to the roof cavity.</li>
<li>Install the cant strip at the base of the curb, if the roofing system calls for one, so the membrane turns up at an angle rather than a sharp corner.</li>
<li>The roofer carries the membrane or base flashing up the curb wall to the height required by the roofing manufacturer, fully adhered or fastened.</li>
<li>Install counterflashing or the curb's integral cap over the top edge of the base flashing so water running down the curb is shed outside the membrane.</li>
<li>Seal all corners and laps. Corners are the most common leak points.</li>
<li>Do not penetrate the flashed curb wall with fasteners or pipes after flashing unless the roofer seals each penetration.</li>
</ol>
<p class="warn">Do not walk on or rest equipment on the curb top after flashing without protection. Damaged counterflashing is a common source of roof leaks that show up months later.</p>

<h2>Step 5: Gasket and set the unit</h2>
<ol>
<li>Apply the curb gasket supplied with the curb or unit along the full top perimeter and along each cross member that seals supply and return openings. Gaskets should be continuous with butted, not overlapped, joints.</li>
<li>Clean the curb top and the unit base surface before setting.</li>
<li>Set the unit squarely on the curb, guided by the curb's alignment features. Avoid dragging it, which tears the gasket.</li>
<li>Attach the unit to the curb as detailed, using the specified fasteners or hold-down clips for wind and seismic resistance.</li>
<li>Inside the curb, connect supply and return ducts with flexible connectors and seal them so air cannot leak into the curb cavity.</li>
</ol>

<h2>Step 6: Inspect and test</h2>
<ul>
<li>Walk around the unit and look for gaps between the unit base and the curb gasket; light should not show through.</li>
<li>After the first rain, inspect inside the building under the curb for water.</li>
<li>Check that the duct openings inside the curb are sealed so supply air does not pressurize the curb cavity.</li>
<li>Confirm the unit's condensate drain and any piping penetrations through the curb are sealed and flashed.</li>
<li>Record the installation with photographs before the unit covers the curb.</li>
</ul>
<p>If the unit is being lifted onto the curb by crane, plan the pick so the section lands on the curb without dragging; see <a href="<?= url('guides/crane-lift-planning') ?>">how to plan a crane lift for AHU sections</a>. For outdoor units, Custom Air Equipment can supply curb drawings matched to the unit's base during submittal review; ask through the <a href="<?= url('contact') ?>">contact page</a>.</p>
<?php guide_end([
    ['Who flashes a roof curb, the roofer or the HVAC contractor?', 'Normally the roofer, following the roofing manufacturer\'s details, so the roof warranty stays valid. The mechanical contractor sets, anchors, levels and insulates the curb first and coordinates the timing.'],
    ['How level does a roof curb need to be?', 'Level enough to meet the unit manufacturer\'s tolerance, which for long multi-section units is often around 1/8 in per 10 ft. Level the curb with shims at structural supports before roofing, because it cannot be corrected afterward.'],
    ['Why does water leak in around my rooftop unit curb?', 'Common causes are poorly sealed flashing corners, damaged counterflashing, a torn or missing curb gasket, or unsealed penetrations through the curb wall. Inspect after rain and repair the specific leak path.'],
]);
