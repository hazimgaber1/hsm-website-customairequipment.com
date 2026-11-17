<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('removable-coil-design'); ?>
<p class="lede">Coils typically wear out before the casing and fans around them, so a unit built for a long life should let a coil come out without cutting the casing or dismantling adjacent sections. The common approaches are side-pull through a removable panel, coils on rails or tracks that slide out, and coil racks that hold several coils as individually removable modules.</p>

<h2>Why coils need to come out</h2>
<p>Cooling coils face condensate, biofilm, cleaning chemicals and occasionally freezing. Heating coils face freeze events and water chemistry problems. Even well-maintained coils may be replaced during the life of a well-built air handler, and coils are also swapped when loads change, when a plant moves to a different water temperature, or when a refrigerant transition requires a new DX coil.</p>
<p>If the unit was not designed with that in mind, replacing a coil can mean cutting casing panels, removing a fan, or disconnecting entire sections. The labour, the shutdown time and the risk to casing integrity often exceed the cost of the coil. Designing for removal costs little up front by comparison.</p>

<h2>Side-pull coils</h2>
<p>The simplest arrangement is a coil that slides out sideways through the casing wall. The coil sits on supports or channels, and the casing panel on the pull side is bolted rather than riveted or welded, so it can be removed with the coil.</p>
<ul>
<li><strong>Header side matters.</strong> If headers and connections are on the pull side, they must be disconnected and, in some designs, the coil must be pulled from the opposite side. A clear decision on which side the coil exits is part of the design.</li>
<li><strong>Drain pan coordination.</strong> The coil must lift clear of the pan lip, or the pan must be designed so the coil slides over it.</li>
<li><strong>Panel sealing.</strong> A removable panel is a potential leakage path; its gasket and fastening should be specified to the same leakage performance as the rest of the casing.</li>
</ul>
<p>Side pull works well for single coils up to the size that can be handled by available rigging in the mechanical space.</p>

<h2>Rails, tracks and slide-out frames</h2>
<p>Heavier and larger coils benefit from a track or rail system. The coil sits on a carriage or on slide channels with a low-friction surface, and can be pulled out with a winch or come-along. In some designs the rails extend outside the casing temporarily through a bolted opening, so the coil can be rolled directly onto a cart.</p>
<ul>
<li>Track design must carry the weight of a wet coil (coil plus contained water), not just the dry weight.</li>
<li>Corrosion-resistant material for rails and carriages in wet coil sections, typically stainless steel, avoids seized tracks after years of condensate exposure.</li>
<li>Rails should not interrupt drain pan slope or create water traps.</li>
</ul>

<h2>Coil racks and modular coil banks</h2>
<p>Large air handlers often need coil banks taller and wider than one coil can be built or handled. A coil rack is a frame that holds several smaller coils, stacked and side by side, each removable on its own. Combined with intermediate drain pans for stacked cooling coils, a rack lets one damaged module be replaced while the others remain in service, or allows coils to be replaced in stages.</p>
<p>Design points for racks:</p>
<ul>
<li>Coil modules should be sized for the handling equipment and the doorways and corridors between the unit and the outside world. A 2,000 lb (900 kg) coil module is far easier to move than a 6,000 lb (2,700 kg) single coil.</li>
<li>Seals between modules and between rack and casing must prevent air bypass around the coils.</li>
<li>Each module needs its own vent and drain, and piping should allow individual isolation.</li>
<li>Stacked cooling modules need intermediate pans; see <a href="<?= url('guides/stacked-coils-intermediate-drain-pans') ?>">stacked coils and intermediate drain pans</a>.</li>
</ul>

<h2>Comparing the approaches</h2>
<table>
<thead><tr><th>Approach</th><th>Best for</th><th>Main tradeoff</th></tr></thead>
<tbody>
<tr><td>Side pull through bolted panel</td><td>Small and medium single coils</td><td>Needs a clear zone outside the unit equal to coil length</td></tr>
<tr><td>Rails or track</td><td>Heavy coils, units in tight rooms</td><td>Added cost and corrosion-prone hardware if poorly specified</td></tr>
<tr><td>Coil rack with modules</td><td>Large coil banks, critical facilities</td><td>More connections and seals; slightly more casing length</td></tr>
<tr><td>Pull through access section (internal)</td><td>Units with long service corridors</td><td>Requires an access section large enough to rotate or move the coil</td></tr>
</tbody>
</table>

<h2>Details that make removal practical</h2>
<ul>
<li><strong>Extended headers</strong> outside the casing with unions or flanges, so piping can be disconnected without entering the unit.</li>
<li><strong>Isolation valves</strong> close to each coil.</li>
<li><strong>Lifting lugs</strong> or attachment points on the coil casing.</li>
<li><strong>Fastened, not welded, coil supports</strong> so the coil can be released.</li>
<li><strong>Shipping and replacement dimensions</strong> recorded in the O&amp;M documents, along with coil weight dry and full.</li>
<li><strong>Labelling</strong> on the casing showing the pull direction and the panels to remove.</li>
</ul>
<p class="note">Field electrical conduit, piping and control panels mounted on the pull-side panel will block removal. Show a no-obstruction zone on the drawings so other trades do not build across it.</p>

<h2>Where this fits with room planning and retrofits</h2>
<p>Designing a removable coil is only half the job; the room also needs space for the coil to come out. The clearances and room layout are handled in <a href="<?= url('guides/ahu-mechanical-room-planning') ?>">AHU mechanical room planning</a>. When an existing unit lacks any provision for removal, the retrofit options are discussed in <a href="<?= url('guides/coil-replacement-retrofit') ?>">coil replacement in retrofits</a>. A custom unit can be laid out from the start with the pull direction, panel locations and rack arrangement suited to the specific room; the <a href="<?= url('design') ?>">3D configurator</a> is a convenient way to check the pull space visually.</p>
<?php guide_end([
    ['How much space is needed to pull a coil?', 'Plan a clear zone on the pull side roughly equal to the coil\'s finned length plus room to handle the coil and its frame, unless the coil is designed to come out in modules. Keep that zone free of piping, conduit and equipment.'],
    ['What is a coil rack in an air handler?', 'A coil rack is a frame that holds several smaller coil modules stacked or side by side. Each module can be removed separately, which makes large coil banks easier to handle and replace and allows partial replacement.'],
    ['Should coil connections be on the pull side?', 'Usually not. If headers are on the pull side they must be disconnected and worked around during removal. Many designs place connections on the opposite side from the pull, or extend headers so they can be disconnected easily outside the casing.'],
]);
