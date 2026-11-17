<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('seismic-restraint-installation'); ?>
<p class="lede">Install air handler seismic restraints exactly as shown on the stamped anchorage details: correct anchor type, diameter, embedment and edge distance; snubbers or restrained isolators set with the specified air gap; and every attachment inspected before the unit is put into service. Field substitutions are where most seismic installations fail inspection.</p>

<h2>Before you start: confirm you have approved details</h2>
<p>Seismic restraint design is an engineering deliverable. It is produced by a restraint supplier or structural engineer for the specific unit, support structure and site seismic parameters, and in many jurisdictions it must be sealed by a professional engineer. Do not install from a generic catalogue sketch. How equipment and anchorage are certified, and when shake-table or analytical qualification is required, is covered in <a href="<?= url('guides/seismic-certification-ahus') ?>">seismic certification for AHUs</a>.</p>
<ol>
<li>Get the sealed restraint drawings and calculations for this unit and this location. Check the tag, weight and dimensions match the delivered unit.</li>
<li>Confirm the drawings show the actual support: slab-on-grade, structural slab, roof curb or steel dunnage. A detail for a slab does not apply to a curb.</li>
<li>Collect the specified components: anchors with the listed product and size, restrained isolators or snubbers, washers, bolts and any welding requirements.</li>
<li>Check whether special inspection or engineer field review is required by the authority having jurisdiction, and schedule it.</li>
</ol>

<h2>Step-by-step: rigidly mounted units on a pad or slab</h2>
<ol>
<li><strong>Verify the concrete.</strong> Confirm pad thickness, reinforcement and concrete strength match the assumptions in the calculation. A thin housekeeping pad not doweled to the structural slab may need its own anchorage.</li>
<li><strong>Lay out anchors from the unit, not the drawing.</strong> Set the unit, then mark anchor holes through the base rail holes or clip angles. Check edge distance and spacing against the detail; pad edges are the usual problem.</li>
<li><strong>Drill and clean.</strong> Drill to the specified diameter and depth. Clean holes exactly as the anchor manufacturer requires, since adhesive anchors in particular lose capacity with dust left in the hole.</li>
<li><strong>Install anchors.</strong> Use the listed anchor only. Set to the specified embedment and torque with a calibrated wrench. Do not substitute a different brand or diameter without written approval from the restraint engineer.</li>
<li><strong>Attach the unit.</strong> Install clip angles, washers and nuts as detailed. Oversized holes generally need plate washers.</li>
<li><strong>Record.</strong> Note anchor product, size, embedment and torque for each anchor, with photos before the base is closed in.</li>
</ol>
<p class="warn">Do not cut reinforcing steel when drilling. If you hit rebar, stop, move the hole within the tolerances allowed by the engineer, and fill the abandoned hole as directed.</p>

<h2>Step-by-step: units on spring isolators</h2>
<p>Vibration-isolated units need restraint that allows normal isolator movement but stops the unit from walking or overturning in an earthquake. This is done with seismically restrained spring isolators, separate snubbers, or both.</p>
<ol>
<li>Anchor each restrained isolator housing or snubber to the structure with the specified anchors, following the pad steps above.</li>
<li>Bolt the isolator top plate to the unit base rail as detailed.</li>
<li>Load and level the isolators according to <a href="<?= url('guides/spring-isolator-adjustment') ?>">how to adjust spring isolators</a>. Restraint gaps cannot be set correctly until the unit is at its operating height.</li>
<li>Set the snubber or restraint air gap to the value on the detail, usually a small gap all round. The unit must not touch the restraint in normal operation, or vibration will short-circuit to the structure.</li>
<li>Install any resilient snubber bushings or neoprene pads specified.</li>
<li>Check that the gap is still correct with the fan running. Fan thrust can shift the unit enough to close a tight gap.</li>
</ol>

<h2>Roof curbs and steel dunnage</h2>
<ul>
<li>Use a curb that is rated for the seismic and wind loads at the site, with documentation showing the attachment of the unit to the curb and the curb to the structure.</li>
<li>Fasten the unit to the curb with the specified screws, bolts, clips or welds at the specified spacing. Self-drilling screws must be the specified size and not stripped.</li>
<li>Where welding is specified to steel dunnage, use qualified welders and touch up galvanizing or paint afterwards.</li>
<li>Check that roofing work does not cover anchorage that must still be inspected.</li>
</ul>

<h2>Connections leaving the unit</h2>
<p>A well-anchored unit can still be damaged in an earthquake by rigid piping, conduit or duct that ties it to a structure moving differently. Coordinate with each trade:</p>
<ul>
<li>Use flexible connectors for ductwork at the unit; see <a href="<?= url('guides/duct-connections-at-ahu') ?>">duct connections at AHU openings</a>.</li>
<li>Provide flexible piping connections or loops at coil connections, sized for the expected relative displacement.</li>
<li>Use flexible conduit for the final connection to the unit.</li>
<li>Brace piping and ductwork near the unit per the project's non-structural seismic design.</li>
</ul>

<h2>Inspection and closeout</h2>
<p>Walk the installation with the drawings in hand and tick off every anchor and restraint. Typical inspection items:</p>
<ul>
<li>Correct number, type and diameter of anchors at each attachment point.</li>
<li>Embedment depth and torque records available.</li>
<li>Edge distance and spacing meet the detail.</li>
<li>Restraint air gaps set and not bridged by debris, grout or shims.</li>
<li>No unapproved substitutions, missing washers or field-slotted holes.</li>
<li>Flexible connections installed at all services.</li>
</ul>
<p>Keep the signed inspection record and photos with the turnover documents. If a deficiency is found, correct it before the unit is energized, since adjusting anchorage on a running unit is unsafe.</p>
<?php guide_end([
    ['Can I substitute a different concrete anchor from the seismic detail?', 'Not without written approval from the engineer who designed the restraints. Anchors have different listed capacities, edge distances and installation requirements, and an unapproved substitution is a common reason for failed inspections.'],
    ['What gap should a seismic snubber have?', 'Use the gap shown on the approved detail. It is usually small and set all round, so the unit floats freely on its isolators in normal operation but is caught quickly during an earthquake.'],
    ['Do flexible duct connectors count as seismic restraint?', 'No. Flexible connectors only accommodate movement between the unit and the duct. The unit itself still needs anchors or restrained isolators, and the ductwork needs its own bracing.'],
]);
