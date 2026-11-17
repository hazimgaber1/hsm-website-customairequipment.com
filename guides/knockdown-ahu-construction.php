<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('knockdown-ahu-construction'); ?>
<p class="lede">A knockdown air handler is a custom unit that is fully engineered, built and often run-tested in the factory, then broken down into panels, frame members and component modules small enough to pass through doors, stairwells or freight elevators, and rebuilt inside the mechanical room.</p>

<h2>Why a unit gets built as a knockdown</h2>
<p>Most replacement projects in older buildings hit the same wall: the original air handler was set in place before the walls, slab or roof above it were finished, and nothing that size will ever leave or enter the room again. Typical constraints that push a project to knockdown construction include:</p>
<ul>
<li>Mechanical rooms in basements or mid-height floors reached only by a standard 36 in. or 42 in. (915 or 1065 mm) door.</li>
<li>Freight elevators with limited cab dimensions and a rated load well below the weight of a fully assembled section.</li>
<li>Penthouses where crane access is blocked by neighbouring buildings, overhead lines or street closure limits.</li>
<li>Occupied buildings where cutting a wall or roof opening is more disruptive or more expensive than field assembly.</li>
</ul>
<p>The unit is not a lesser product. Its airflow, casing performance and component selection are designed exactly as a factory-assembled unit would be; only the way it travels changes.</p>

<h2>The structural frame</h2>
<p>The frame is the backbone. In a knockdown design it is broken into members that can be carried by hand or on a dolly, typically structural steel or formed galvanized channel for the base and extruded aluminum or formed steel posts and rails for the upper frame. Members are joined with bolted gusset plates or machined corner blocks, and every joint is drilled and fit-checked in the factory before disassembly so that hole patterns line up in the field.</p>
<p>The base frame carries the concentrated loads from fans, coils and humidifiers. Because it is assembled from pieces, the designer checks splice locations so they do not fall directly under a heavy point load, and adds cross members where a coil rack or fan bulkhead lands. Lifting lugs are often omitted since the unit will never be hoisted as a whole; instead, the frame is sized for distributed support on a housekeeping pad or steel dunnage.</p>

<h2>Panels, floors and sealing</h2>
<p>Casing panels in a knockdown unit are usually double-wall, insulated with mineral fibre or injected foam, and sized to a maximum module width that suits the access route. Each panel attaches to the frame with gasketed fasteners or a captive clip system. The panel-to-frame interface is where knockdown designs win or lose on leakage, so the joint detail matters more than the panel itself:</p>
<ul>
<li><strong>Compression gaskets</strong> on frame flanges, closed-cell and sized for the fastener spacing.</li>
<li><strong>Overlapping or tongue-in-groove panel edges</strong> that resist air bypass even if a gasket takes a set.</li>
<li><strong>Field-applied sealant</strong> at frame splices and floor seams, specified by product type so the installer is not improvising.</li>
</ul>
<p>Floors are the hardest element to break down. A drainable, sloped stainless or galvanized floor under a cooling coil is normally delivered as one or more pans that are sized to the access route, with welded or sealed laps and the drain connection already installed. Floor sections away from wet components can be panelized like the walls.</p>
<p class="note">Ask for the maximum piece dimensions and weights on the submittal drawings, not only the overall unit size. Those numbers decide whether the unit actually reaches the room.</p>

<h2>Components that travel separately</h2>
<p>Large components ship as their own modules and are fitted into the rebuilt casing:</p>
<table>
<thead><tr><th>Component</th><th>How it is typically broken down</th><th>Field connection</th></tr></thead>
<tbody>
<tr><td>Fans</td><td>Individual plenum fans or fan array cubes on their own sub-frames</td><td>Bolted to bulkhead, wiring by plug or terminal strip</td></tr>
<tr><td>Coils</td><td>Split vertically or horizontally into stacked coils with intermediate drain pans</td><td>Slide on coil rails, header connections made on site</td></tr>
<tr><td>Dampers</td><td>Multiple smaller damper sections with jackshaft or individual actuators</td><td>Bolted into a frame opening and linked together</td></tr>
<tr><td>Filters</td><td>Standard frames shipped loose with media boxed</td><td>Installed after construction dust is controlled</td></tr>
<tr><td>Energy recovery</td><td>Segmented wheels or plate cores in modules</td><td>Assembled in cassette, seals adjusted on site</td></tr>
</tbody>
</table>
<p>Fan arrays suit knockdown construction particularly well because each fan module is light enough for two people and a cart, which is a major reason they show up in retrofit work. The rebuild sequence for fans in an existing casing is covered in <a href="<?= url('guides/fan-wall-retrofit-existing-ahu') ?>">how to retrofit a fan array into an existing AHU</a>.</p>

<h2>Factory build, test, disassemble</h2>
<p>The most reliable knockdown units are built twice. The factory assembles the complete unit, wires it, runs the fans and checks casing tightness, then match-marks every panel and frame member before taking it apart. Pieces are tagged against a numbered assembly drawing, crated by section, and shipped in the order the field crew will need them. This approach catches fit-up problems where they are cheap to fix and gives the owner a reference for what the finished unit should do.</p>
<p>Some projects skip full factory assembly to save schedule, assembling only critical sections or relying on tooling accuracy. That is a legitimate trade-off, but it moves risk to the jobsite; make the choice deliberately and state it in the specification.</p>

<h2>Field reassembly in outline</h2>
<ol>
<li>Verify pad or dunnage level and dimensions against the base frame drawing.</li>
<li>Assemble and shim the base frame, then set floor pans and seal laps.</li>
<li>Erect posts and rails, checking square by diagonal measurement.</li>
<li>Install heavy components (coils, fan modules) before the walls that would block them.</li>
<li>Close panels, apply specified sealant, install doors and adjust latches.</li>
<li>Complete internal wiring and piping, then perform the field leakage test.</li>
</ol>
<p>The detailed inspection points for each step belong in a QA checklist; see the <a href="<?= url('guides/knockdown-field-assembly-qa') ?>">knockdown unit field assembly QA checklist</a>. If you are weighing bolted panel systems against welded frames, that comparison is in <a href="<?= url('guides/modular-panel-vs-welded-knockdown') ?>">bolted modular panel vs welded-frame knockdown units</a>.</p>
<p>When a project needs to get a new unit through a door that the old one never fit through, the <a href="<?= url('products/retrofit-knockdown') ?>">retrofit and knockdown unit</a> page describes how these units are scoped and built.</p>
<?php guide_end([
    ['What is a knockdown air handling unit?', 'It is a custom AHU designed and built in the factory, then disassembled into panels, frame members and component modules that fit through existing doors and elevators. The pieces are reassembled inside the mechanical room into a complete unit.'],
    ['Does a knockdown AHU leak more than a factory-assembled unit?', 'Not if the joints are designed for field assembly and the crew follows the sealing details. Leakage depends mostly on gaskets, panel edge design and sealant at frame splices, so specify a field leakage test to confirm the result.'],
    ['How small can knockdown pieces be made?', 'Pieces are sized to the tightest point on the access route, often a standard door or a freight elevator cab. The manufacturer should list the largest piece dimensions and weights on the submittal so the route can be checked before release.'],
]);
