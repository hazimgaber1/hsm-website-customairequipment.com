<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('knockdown-field-assembly-qa'); ?>
<p class="lede">Use this checklist as a hold-point inspection record while a knockdown air handler is assembled on site; each stage should be signed off before the next begins, because sealing and alignment errors are easy to fix while joints are open and expensive once panels and components close them in.</p>

<h2>Before assembly begins</h2>
<ul>
<li>Assembly drawings, piece list and match-marking key on site and current revision.</li>
<li>Manufacturer's field assembly instructions on site; specified sealant and gasket products identified by name.</li>
<li>All crates received and checked against the packing list; damage reported to the manufacturer and carrier.</li>
<li>Pieces stored dry, flat and off the floor; gaskets and sealants kept within the temperature range on their data sheets.</li>
<li>Pad, curb or dunnage dimensions checked against the base frame drawing.</li>
<li>Pad or dunnage level checked; shims and grout planned where required.</li>
<li>Anchor bolt or attachment locations verified.</li>
<li>Room temperature suitable for sealant application and curing.</li>
<li>Torque values and fastener types for each joint listed and the right tools on hand.</li>
</ul>

<h2>Base frame and floor</h2>
<ul>
<li>Base frame members assembled in match-marked order.</li>
<li>Bolted splices torqued to the specified value; welded splices inspected and coated where specified.</li>
<li>Frame square: diagonals measured and within the manufacturer's tolerance.</li>
<li>Frame level along length and width within tolerance; shims placed at support points only.</li>
<li>Floor pans set with laps in the direction of drainage.</li>
<li>Floor seams sealed or welded per the drawing; no gaps at frame interfaces.</li>
<li>Drain pan slope verified toward the outlet with a level or water test.</li>
<li>Drain connections installed, sealed and protected from damage during assembly.</li>
<li>Floor penetrations sealed.</li>
</ul>
<p class="note">Fill drain pans with water and watch for ponding and leaks before any component is placed over them. This is the last easy chance to check.</p>

<h2>Upper frame and alignment</h2>
<ul>
<li>Posts plumb within tolerance at every corner and intermediate location.</li>
<li>Top rails level and connected per drawing; bolts torqued.</li>
<li>Section-to-section joints aligned so panels will seat evenly.</li>
<li>Diagonals re-checked after upper frame is complete.</li>
<li>Internal bulkheads and component supports installed at correct locations.</li>
</ul>

<h2>Components</h2>
<ul>
<li>Coils set on rails, level, with blank-offs sealed so air cannot bypass the coil.</li>
<li>Stacked coils have intermediate drain pans installed and drained to the main pan.</li>
<li>Fan modules bolted to bulkhead, with gaskets between module and bulkhead.</li>
<li>Fan isolators released or adjusted per manufacturer's instructions; shipping restraints removed.</li>
<li>Fan inlet cone to wheel clearance checked after assembly.</li>
<li>Dampers set square in their frames, blades rotating freely, linkages connected and adjusted.</li>
<li>Filter racks installed with seals; no gaps at frame edges.</li>
<li>Energy recovery modules assembled per manufacturer's procedure; seals adjusted.</li>
<li>Humidifier dispersion assemblies installed level and at the specified location.</li>
</ul>

<h2>Panels and doors</h2>
<ul>
<li>Panel gaskets continuous, correctly positioned and not stretched or twisted.</li>
<li>Panels installed in match-marked locations, with correct orientation of any interior perforated liners.</li>
<li>Fasteners installed at every hole and tightened evenly; no stripped or missing fasteners.</li>
<li>Panel-to-panel and panel-to-frame joints sealed per drawing, inside or outside as specified.</li>
<li>Corners and three-way joints sealed; these are the most common leakage points.</li>
<li>Access doors hung, swung freely and latched with even gasket compression.</li>
<li>Door hardware tested: latches pull tight, handles operate from inside where required.</li>
<li>Viewing windows, light fixtures and switches installed and sealed.</li>
</ul>

<h2>Penetrations and connections</h2>
<ul>
<li>Pipe penetrations sealed with grommets or sleeves and sealant.</li>
<li>Electrical penetrations sealed; conduits supported independently of panels where required.</li>
<li>Duct flexible connections installed with alignment that does not stress the casing.</li>
<li>Field wiring between sections terminated per wiring diagram and labelled.</li>
<li>Control tubing and sensor wells installed and sealed.</li>
</ul>

<h2>Leakage testing</h2>
<ul>
<li>Test procedure and acceptance criterion agreed before the test.</li>
<li>Openings blanked off, dampers closed and sealed for the test.</li>
<li>Test performed at the specified pressure, with positive and negative sections tested appropriately.</li>
<li>Measured leakage recorded and compared with acceptance criterion.</li>
<li>Leaks located with smoke or by listening, repaired and the test repeated if necessary.</li>
<li>Results signed by the installer, manufacturer representative and owner's representative.</li>
</ul>
<p>The test method itself is described in <a href="<?= url('guides/field-leakage-testing') ?>">field leakage testing</a>. General joining practice for factory shipping splits, which overlaps with some steps here, is covered in <a href="<?= url('guides/field-joining-split-sections') ?>">field joining of split sections</a>.</p>

<h2>Electrical and pre-start checks</h2>
<ul>
<li>Section-to-section power and control wiring continuity checked; connectors fully seated.</li>
<li>Motor insulation resistance measured after field wiring is complete.</li>
<li>Grounding and bonding conductors connected across every section joint.</li>
<li>Disconnects, VFDs and control panels mounted, labelled and torqued.</li>
<li>Safeties and interlocks wired and ready for functional testing.</li>
</ul>

<h2>Close-out records</h2>
<ul>
<li>Completed checklist signed at each hold point.</li>
<li>Photos of sealed joints, floor seams and drain pans before they were covered.</li>
<li>Leakage test report.</li>
<li>Torque records for structural joints.</li>
<li>List of deviations from drawings and how each was resolved.</li>
</ul>
<p class="warn">Do not start the fans with filters missing or construction debris inside the casing. Clean the interior before first run.</p>
<p>For background on how these units are designed to come apart and go back together, see <a href="<?= url('guides/knockdown-ahu-construction') ?>">knockdown AHUs: how field-assembled units are built</a>.</p>
<?php guide_end([
    ['What should be inspected during knockdown AHU assembly?', 'Inspect base frame square and level, floor and drain pan sealing, component installation and bypass blank-offs, panel gasketing and fastening, door adjustment, penetrations, and finally a casing leakage test against an agreed criterion.'],
    ['When should a knockdown unit be leak tested?', 'After all panels, doors and penetrations are complete and sealed, but before insulation or finishes hide the joints. Agree the test pressure and acceptance criterion before testing.'],
    ['Why use hold points in knockdown assembly?', 'Hold points require sign-off before the next stage closes in the previous work. Errors in floor seams, gaskets or alignment are easy to fix while joints are open and costly once covered.'],
]);
