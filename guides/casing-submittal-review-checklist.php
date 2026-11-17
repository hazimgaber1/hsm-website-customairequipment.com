<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('casing-submittal-review-checklist'); ?>
<p class="lede">When reviewing an AHU casing submittal, verify the panel build-up, the tested thermal and leakage classes, the materials of every wetted surface, the floor and drain pan construction, doors and their swing, the base, and the pressure ratings of each section against the specification. Ask for test reports rather than accepting descriptions.</p>

<h2>How to use this checklist</h2>
<p>Work through the submittal with the specification open beside it. Mark each item as compliant, non-compliant or missing information. Casing items are only part of a full AHU submittal; fans, coils, controls and electrical items are reviewed separately, as described in <a href="<?= url('guides/ahu-submittal-review-checklist') ?>">the AHU submittal review checklist</a>.</p>

<h2>Panel build-up</h2>
<ul>
<li>☐ Panel thickness stated for walls, roof, floor and doors.</li>
<li>☐ Outer skin material, thickness and finish.</li>
<li>☐ Inner liner material and thickness, by section; solid versus perforated identified.</li>
<li>☐ Core material and density; foam type or mineral fibre type.</li>
<li>☐ Core fire performance documentation as required by the specification and the authority having jurisdiction.</li>
<li>☐ Panel edge detail drawing showing how inner and outer skins are separated.</li>
<li>☐ Frame system or frameless construction described, with a section drawing.</li>
<li>☐ Thermal breaks at panel edges, frames, doors and floor shown on drawings.</li>
</ul>

<h2>Performance classes</h2>
<ul>
<li>☐ Casing deflection class or calculated deflection at the specified pressure, positive and negative.</li>
<li>☐ Casing air leakage class and the pressure at which it was established.</li>
<li>☐ Thermal transmittance class or value.</li>
<li>☐ Thermal bridging class or factor.</li>
<li>☐ Test report from the laboratory for each class: standard (AHRI 1350 or EN 1886), edition, test date, laboratory and test casing description. See <a href="<?= url('guides/ahri-1350-casing-performance-spec') ?>">AHRI 1350 specification</a>.</li>
<li>☐ Test casing construction matches the proposed construction: same panel thickness, core, frame and door type. Differences listed and explained.</li>
<li>☐ Factory leakage test of the production unit offered if specified, with test pressure and pass criterion.</li>
</ul>
<p class="warn">"Meets AHRI 1350" without a stated class and test report is not a compliance statement. Ask for the classes and the report.</p>

<h2>Section pressure ratings</h2>
<ul>
<li>☐ Design pressure listed for each section or group of sections, positive and negative.</li>
<li>☐ Ratings meet or exceed specified values, including worst-case conditions.</li>
<li>☐ Pressure safeties included where the casing rating relies on them.</li>
</ul>

<h2>Materials by location</h2>
<ul>
<li>☐ Drain pans: material (stainless as specified), slope, outlet location, insulation underneath.</li>
<li>☐ Liners and floors downstream of cooling coils: material as specified.</li>
<li>☐ Humidifier section liners and floors: stainless, welded as specified.</li>
<li>☐ Exterior skin and coating system for outdoor units, with corrosivity category and durability if specified. See <a href="<?= url('guides/casing-coatings-corrosive-environments') ?>">casing coatings</a>.</li>
<li>☐ Fasteners and hardware material for outdoor and wet areas.</li>
<li>☐ Galvanic separation where dissimilar metals meet.</li>
</ul>

<h2>Floors and drainage</h2>
<ul>
<li>☐ Floor construction by section; welded and drainable floors in specified sections.</li>
<li>☐ Floor drains: size, location, trap requirements.</li>
<li>☐ Floor load rating for maintenance traffic.</li>
<li>☐ Drain pan dimensions and extent downstream of the coil compared with ASHRAE 62.1 and the specification.</li>
<li>☐ Drain connection sizes and the trap height required for each section's pressure.</li>
</ul>

<h2>Doors</h2>
<ul>
<li>☐ Door locations match the drawings and the access requirements.</li>
<li>☐ Clear opening dimensions.</li>
<li>☐ Swing direction relative to section pressure; safety latches where outward-swinging on positive sections.</li>
<li>☐ Door construction and thermal breaks match the casing.</li>
<li>☐ Hinge and latch type and quantity.</li>
<li>☐ Gaskets: material, single or double.</li>
<li>☐ View ports and lights where specified.</li>
</ul>
<p>Door requirements in detail are in <a href="<?= url('guides/access-door-specification') ?>">access door specification</a>.</p>

<h2>Base and structure</h2>
<ul>
<li>☐ Base height and construction.</li>
<li>☐ Lifting points and rigging instructions for each shipping section.</li>
<li>☐ Support method matches the project: pad, curb, dunnage or isolators; support points shown for point-supported units.</li>
<li>☐ Seismic and wind design basis stated where required; anchor locations and loads provided.</li>
<li>☐ Section weights, including wet weights for coils.</li>
</ul>

<h2>Outdoor unit items</h2>
<ul>
<li>☐ Roof slope, overhang and seam type.</li>
<li>☐ Intake and exhaust hoods: size, velocity, screens, moisture eliminators.</li>
<li>☐ Vestibule or pipe chase construction, heating and ventilation.</li>
<li>☐ Field seam caps at shipping splits.</li>
</ul>

<h2>Penetrations and splits</h2>
<ul>
<li>☐ Factory penetrations shown, with sizes and sealing method.</li>
<li>☐ Field penetration kits or details provided.</li>
<li>☐ Shipping split locations, dimensions and field joining details.</li>
</ul>

<h2>Closing the review</h2>
<p>List every non-compliance with a specification reference and a required action. Distinguish true deviations from missing information. Where a proposed substitution may be acceptable, such as an equivalent class from EN 1886 rather than AHRI 1350, state the condition of acceptance in writing.</p>
<h2>Common findings on casing submittals</h2>
<ul>
<li>A thermal bridging class quoted for wall panels while the doors use a different, untested construction.</li>
<li>Leakage class stated at a lower test pressure than the specification requires.</li>
<li>Stainless drain pans offered, but galvanized liners and floors downstream of the coil.</li>
<li>Door swing shown the same way on every door, regardless of section pressure.</li>
<li>Base designed for a continuous pad on a project that calls for steel dunnage.</li>
<li>Panel thickness compliant, but the core material differs from what the fire requirements allow.</li>
<li>No roof seam caps or field joining details for outdoor units shipped in sections.</li>
</ul>
<p>Flag each one explicitly; they are much cheaper to fix on paper than after fabrication.</p>
<p>Keep the marked-up checklist with the submittal record. When the resubmittal arrives, review only the flagged items plus anything the manufacturer changed, and require the changes to be clouded on the drawings so nothing slips through between rounds.</p>
<?php guide_end([
    ['What should I check on an AHU casing submittal?', 'Panel build-up, tested deflection, leakage, thermal transmittance and thermal bridging classes with test reports, section pressure ratings, materials in wet areas, floors and drain pans, doors and swing, base and lifting points, and outdoor details such as roofs and hoods.'],
    ['Is a manufacturer statement enough to show AHRI 1350 compliance?', 'No. Ask for the specific classes achieved and the test report from the laboratory, including the test casing construction. Confirm that the tested construction matches what is proposed for the project.'],
    ['How do I check door swing on a submittal?', 'Compare each door\'s swing with its section pressure. Doors on positive-pressure sections should swing inward or have safety latches; doors on negative-pressure sections should swing outward.'],
]);
