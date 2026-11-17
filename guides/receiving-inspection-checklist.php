<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('receiving-inspection-checklist'); ?>
<p class="lede">Inspect every air handler section before the driver leaves, photograph anything wrong, and write specific damage notes on the delivery receipt. A clean signature on the bill of lading makes most freight claims very hard to win.</p>

<h2>Before the truck arrives</h2>
<p>Receiving goes well when someone has prepared for it. A few minutes of preparation saves arguments later.</p>
<ul>
<li>Get the packing list and shipping section list from the manufacturer, including the number of pieces and boxes of loose parts.</li>
<li>Know the carrier, the expected delivery window and whether the load is on a flatbed, step deck or enclosed trailer.</li>
<li>Assign one person to inspect and sign. Make sure they have a camera or phone, a flashlight, a tape measure and a copy of this checklist.</li>
<li>Arrange the offloading equipment and a level, dry place to put sections down.</li>
<li>Read the manufacturer's receiving instructions; some require notice of damage within a fixed number of days.</li>
</ul>

<h2>On the truck: first look before offloading</h2>
<ul>
<li>Photograph the load from all four sides before anything is moved, including the trailer number.</li>
<li>Check that tarps, shrink wrap and opening covers are intact. Note torn wrap or missing covers even when no damage is visible yet.</li>
<li>Check tie-down straps and chains. Straps across unprotected casing edges often leave creased panels.</li>
<li>Look for shifted loads, broken blocking, or sections resting on something other than their base rails.</li>
<li>Look for moisture, snow or road salt inside wrapping.</li>
</ul>

<h2>Section-by-section exterior inspection</h2>
<ul>
<li>Count shipping sections and loose-parts crates against the packing list. Match each section tag to the drawing.</li>
<li>Walk around each section. Check for dented, creased or punctured panels, especially corners and the side that faced the straps.</li>
<li>Check base rails for bends, cracked welds or damaged lifting lugs.</li>
<li>Open every access door. It should swing and latch normally. A door that binds after shipping can mean a racked frame.</li>
<li>Check door gaskets, hinges, handles, viewing windows and pressure gauges mounted on the casing.</li>
<li>Inspect the roof of outdoor units for punctures, crushed standing seams and damaged roof caps.</li>
<li>Inspect hoods, louvres and weather covers that ship attached.</li>
<li>Check that split-face covers and duct opening covers are still in place and weathertight.</li>
</ul>

<h2>Interior inspection</h2>
<p>Open each section and look inside with a flashlight. Shipping damage that never shows on the outside can appear internally.</p>
<ul>
<li>Fans: wheel turns freely by hand with no rubbing; inlet cone is centred; shipping restraints or bolts on isolators are still in place.</li>
<li>Motors and drives: no broken conduit, terminal boxes or mounting feet. VFD and control panel doors are closed and undamaged.</li>
<li>Coils: fins not crushed; headers, vents and drain connections not bent; no evidence of coil or header movement.</li>
<li>Drain pans: no dents that would hold water; drain connections intact.</li>
<li>Filters and racks: racks undamaged. Filters may ship separately; count the boxes.</li>
<li>Dampers: blades and linkages not bent; actuators still mounted.</li>
<li>Field wiring connectors and harness ends at the splits are coiled, labelled and protected.</li>
<li>Insulation and liners: no tears, wet spots or crushed areas.</li>
</ul>
<p class="warn">Do not rotate fans electrically or energize anything as part of receiving. Hand-turning only. Startup has its own procedure.</p>

<h2>Loose parts and documents</h2>
<ul>
<li>Open loose-parts crates and check contents against the packing list: joining hardware, gasket rolls, sealant, field-installed sensors, keys, spare belts.</li>
<li>Find the documentation package: installation manual, wiring diagrams, rigging drawing and factory test reports.</li>
<li>Record nameplate data for each section and confirm the tag matches the order.</li>
</ul>

<h2>Documenting damage and shortages</h2>
<p>How damage is recorded at the truck often decides whether a claim is paid. The general practice with North American carriers is:</p>
<ol>
<li>Write specific notes on the delivery receipt before signing, for example "Section 3 of 5, NE corner panel creased, approx 18 in" rather than "subject to inspection". Generic exceptions carry little weight.</li>
<li>Have the driver sign or initial the notes if possible. Keep a copy.</li>
<li>Photograph every item noted, with a tape measure in the frame for scale and a wide shot showing which section it is.</li>
<li>Report damage and shortages to the manufacturer and the carrier promptly, in writing. Check the time limits in your purchase order and the carrier's terms; concealed damage windows are short.</li>
<li>Do not repair or discard anything until the carrier or manufacturer says so, unless leaving it creates a hazard.</li>
<li>Only refuse a shipment when damage is severe and after speaking with the manufacturer. Refusing a custom unit can create long delays.</li>
</ol>
<p class="note">Concealed damage found later, once wrap is removed, should be reported as soon as it is found, with photos and the date it was discovered.</p>

<h2>After receiving</h2>
<p>Once the shipment is accepted, protection becomes the contractor's job. Follow the <a href="<?= url('guides/jobsite-storage-checklist') ?>">jobsite and long-term storage checklist</a> if the unit will not be set immediately, and plan the lift using <a href="<?= url('guides/crane-lift-planning') ?>">crane lift planning</a>. Units that ship in several sections will be joined later; record any damage at the split faces now, since it will affect <a href="<?= url('guides/field-joining-split-sections') ?>">field joining</a>.</p>
<?php guide_end([
    ['Should I write "subject to inspection" on the bill of lading?', 'It is better than nothing, but carriers often treat it as a non-specific exception. Inspect before signing and write exactly what is damaged or missing, on which section, with dimensions, then photograph it.'],
    ['What do I do if I find damage after the driver has left?', 'Report it as concealed damage to the carrier and the manufacturer in writing immediately, with photos and the date found. Time limits for concealed damage are short, so do not wait until startup.'],
    ['Can I fix minor shipping damage myself?', 'Ask the manufacturer first. A repair made before the claim is settled can void the claim, and some damage, such as a racked frame or a shifted fan, needs factory guidance to correct properly.'],
]);
