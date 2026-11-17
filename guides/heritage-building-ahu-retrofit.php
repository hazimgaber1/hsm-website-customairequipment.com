<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('heritage-building-ahu-retrofit'); ?>
<p class="lede">Heritage and historic buildings limit where an air handler can go, how its ducts can be routed, how it gets into the building and how much it can change the look and fabric of the place, so mechanical design there starts from what must be preserved and fits the equipment around it.</p>

<h2>What makes heritage retrofits different</h2>
<p>In an ordinary building, the mechanical engineer asks where the equipment fits best and the architect accommodates it. In a designated heritage building, the order reverses. Character-defining elements, such as facades, roof lines, decorative ceilings, plaster, millwork, windows and sometimes interior volumes, are protected, and any change needs approval from a heritage authority or must follow conservation guidelines the owner has adopted. In Canada, the Standards and Guidelines for the Conservation of Historic Places in Canada are widely referenced; in the US, the Secretary of the Interior's Standards for the Treatment of Historic Properties play a similar role. Local designation bylaws or ordinances may add their own requirements.</p>
<p>The guiding principles are typically minimal intervention, reversibility where possible, and distinguishing new work from historic fabric. Every one of those affects air handler design.</p>

<h2>Locating the equipment</h2>
<p>Air handlers are large, and historic buildings rarely have a mechanical room that fits modern units. Common strategies:</p>
<ul>
<li><strong>Basements and sub-basements.</strong> Usually the least sensitive space, but often low headroom, damp and reachable only through narrow stairs. Knockdown units are frequently the only way to get equipment in.</li>
<li><strong>Attics and roof spaces.</strong> Can work for smaller units, but roof structure, fire separation and the visual impact of louvers on historic roofs need careful review.</li>
<li><strong>Adjacent or new-build spaces.</strong> An annex, courtyard enclosure or neighbouring building can house equipment and connect through a single, carefully placed penetration.</li>
<li><strong>Distributed smaller units.</strong> Several compact units serving zones can avoid large central ducts that would cut through protected spaces.</li>
</ul>
<p>Rooftop equipment visible from the street is often discouraged or prohibited on designated facades. If a roof location is unavoidable, set units back from the parapet line and screen them in a way the heritage authority accepts.</p>

<h2>Routing ducts and pipes</h2>
<p>Distribution is often the hardest part. Large main ducts cannot run through decorative ceilings or across protected rooms. Approaches that have proven workable include:</p>
<ul>
<li>Using existing vertical chases, old chimney flues (after structural and fire review), dumbwaiter shafts and service stairs.</li>
<li>Running mains in basements and attics with short vertical risers to each floor.</li>
<li>Using floor voids where the original structure allows, and supplying through floor grilles that sit discreetly.</li>
<li>Choosing systems with smaller distribution, such as dedicated outdoor air at lower airflow combined with hydronic or refrigerant-based terminal units, so the ductwork that must pass through historic fabric is minimized.</li>
<li>Specifying custom grilles that match historic patterns or sit inside existing openings like old registers.</li>
</ul>
<p class="note">Original heating systems sometimes left behind gravity air shafts and floor registers. These can occasionally be reused for return air, reducing new penetrations.</p>

<h2>Access for installation and future service</h2>
<p>Getting equipment in may involve narrow historic doorways that cannot be widened, stairs with ornamental balustrades and floors with limited structural capacity. Cranes may be restricted where they would swing over protected roofs. This is where field-assembled construction earns its place: units delivered as panels and modules can travel through existing openings without demolition. The construction method is explained in <a href="<?= url('guides/knockdown-ahu-construction') ?>">knockdown AHUs: how field-assembled units are built</a>.</p>
<p>Plan for the unit's eventual replacement too. Leaving a documented removal route, removable panels and lifting points means the next project does not have to repeat the same difficulty.</p>

<h2>Environmental conditions and the building fabric</h2>
<p>Introducing modern humidity and temperature control can harm historic materials. Raising winter indoor humidity in a building with uninsulated masonry walls and single-glazed windows can drive moisture into the wall, causing condensation, freeze-thaw damage or decay of embedded timber. Sudden changes in conditions can crack plaster and panelling. Museum-type environmental targets in historic house museums are particularly demanding. Work closely with a building envelope or conservation specialist on humidity setpoints and seasonal drift, and consider the maximum safe winter humidity discussed in <a href="<?= url('guides/max-winter-indoor-rh-calculation') ?>">calculating maximum winter indoor RH</a>.</p>

<h2>Noise, vibration and visual impact</h2>
<p>Historic spaces are often hard-surfaced and reverberant, and many are used for quiet functions such as reading rooms, worship or performance. Locating equipment remotely helps, but long ductwork in limited chases can push velocities and noise up. Vibration from fans transmitted into old structure can damage brittle finishes. Use well-isolated equipment and conservative duct velocities. Every visible element (louvers, grilles, exposed ductwork, rooftop screens) should be coordinated with the heritage architect.</p>

<h2>Approvals and documentation</h2>
<table>
<thead><tr><th>Item</th><th>Purpose</th></tr></thead>
<tbody>
<tr><td>Heritage impact assessment or equivalent</td><td>Describes proposed changes and effects on character-defining elements</td></tr>
<tr><td>Penetration and routing drawings</td><td>Shows every opening through historic fabric and its treatment</td></tr>
<tr><td>Material and finish samples</td><td>For grilles, louvers and visible components</td></tr>
<tr><td>Reversibility notes</td><td>Explains how new elements could be removed in future</td></tr>
<tr><td>Photographic record</td><td>Documents conditions before and after work</td></tr>
</tbody>
</table>
<p>Approval timelines can be long, so start conversations with the heritage authority early. Detailed surveying of the existing building is covered in <a href="<?= url('guides/field-survey-laser-scanning') ?>">how to survey an existing mechanical room with laser scanning</a>.</p>
<?php guide_end([
    ['How do you add an air handler to a historic building?', 'Locate it in the least sensitive space, such as a basement or annex, route ducts through existing chases and voids, and bring the unit in as knockdown panels if access is tight. All visible or invasive changes usually need heritage approval.'],
    ['Can raising humidity damage a heritage building?', 'Yes. Higher winter humidity in buildings with uninsulated masonry or single glazing can cause condensation in walls and around windows, leading to freeze-thaw and decay damage. Setpoints should be set with a building envelope or conservation specialist.'],
    ['What standards apply to heritage building alterations?', 'In Canada the Standards and Guidelines for the Conservation of Historic Places in Canada are widely referenced, and in the US the Secretary of the Interior\'s Standards are commonly used. Local designation rules may add requirements.'],
]);
