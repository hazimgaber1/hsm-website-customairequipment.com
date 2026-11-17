<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('access-door-specification'); ?>
<p class="lede">Specify AHU access doors by size (clear opening large enough for the biggest item serviced through it), construction (same panel build-up and thermal break as the casing), hinges and latches suited to the door size and pressure, view ports where needed, and swing direction so that section pressure pushes the door closed: inward on positive-pressure sections, outward on negative-pressure sections.</p>

<h2>Why doors deserve their own specification</h2>
<p>Doors are the moving parts of a casing. They are opened hundreds of times over a unit's life, they carry the full section pressure on a gasket line, and they are the most common source of whistling, leakage and condensation on otherwise good casings. A door spec that says only "provide hinged access doors" invites the cheapest hardware. Where doors should go is decided first, using the <a href="<?= url('guides/access-section-service-checklist') ?>">access section checklist</a>; this guide covers what each door should be.</p>

<h2>Size</h2>
<ul>
<li>Size each door for the largest item that must pass through it: a filter, a fan motor, a humidifier manifold or a person carrying tools.</li>
<li>Common minimum clear openings for walk-in sections are on the order of 18 in to 24 in wide (450 to 600 mm) and as tall as the section allows. Fan sections often need wider doors for motor removal.</li>
<li>Large doors are heavier and flex more under pressure. Above a certain size, use two doors or a door with an intermediate latch rather than one very tall door.</li>
<li>State "clear opening" rather than "door size," since frame and gasket reduce the opening.</li>
</ul>

<h2>Swing relative to pressure</h2>
<table>
<thead><tr><th>Section pressure</th><th>Preferred swing</th><th>Why</th></tr></thead>
<tbody>
<tr><td>Negative (upstream of fan)</td><td>Outward</td><td>Suction pulls the door against its gasket</td></tr>
<tr><td>Positive (downstream of fan)</td><td>Inward</td><td>Pressure pushes the door against its gasket and prevents it being blown open</td></tr>
<tr><td>Positive, where inward swing is impractical</td><td>Outward with safety latch</td><td>Two-stage latch releases pressure before the door can swing fully open</td></tr>
</tbody>
</table>
<p class="warn">An outward-swinging door on a positive-pressure section can be blown open violently when unlatched with the fan running. Where outward swing is unavoidable, require a two-stage or safety latch, and a warning label on the door.</p>
<p>Inward-swinging doors need clear space inside the section for the door to open fully, which can affect section length. Show swing on the drawings for every door. Setting the section pressure itself is covered in <a href="<?= url('guides/casing-pressure-class-positive-negative') ?>">casing pressure ratings</a>.</p>

<h2>Construction</h2>
<ul>
<li>Same thickness, core, liners and thermal break as the adjacent casing. A thermally broken casing with non-broken doors will sweat at the doors.</li>
<li>Formed or extruded door frame, thermally broken, with continuous gasket.</li>
<li>Gaskets: closed-cell, replaceable, mounted in a retaining channel rather than glued only. Double gaskets on high-pressure and hygiene-critical units.</li>
<li>Door stiffness sufficient to meet the casing deflection requirement at section pressure.</li>
</ul>

<h2>Hinges and latches</h2>
<ul>
<li><strong>Hinges:</strong> continuous piano hinges distribute load and seal well on smaller doors; heavy-duty butt or lift-off hinges with adjustable positions suit larger doors. Stainless or corrosion-resistant hinges on outdoor and wet sections.</li>
<li><strong>Latches:</strong> handle-operated latches that compress the door against its gasket. Number of latch points increases with door height; tall doors need at least two. Latches should be operable from both inside and outside the section where a person could be inside.</li>
<li><strong>Safety:</strong> interior release so no one can be trapped inside; lockable handles where unauthorized entry is a concern.</li>
<li><strong>Hold-open:</strong> outdoor units benefit from door stays so wind does not slam doors during service.</li>
</ul>

<h2>View ports, lights and labels</h2>
<ul>
<li><strong>View ports:</strong> double-pane, sealed windows in doors at fans, filters, coils and humidifiers allow inspection without opening the door or stopping the unit. Wire-reinforced or tempered glazing for safety.</li>
<li><strong>Lights:</strong> marine-style vapour-proof lights in each access section, with an external switch, often with a pilot light.</li>
<li><strong>Labels:</strong> door labels identifying the section, warning of rotating equipment on fan section doors, and stating pressure direction.</li>
</ul>

<h2>Sample specification language</h2>
<ol>
<li>"Provide hinged access doors where shown and at each access section. Doors shall provide the clear opening indicated, not less than [ ] in wide by [ ] in high, and shall be sized to allow removal of the largest serviceable component in the section."</li>
<li>"Doors shall be of the same construction, thickness and insulation as the casing, including thermal breaks at door edges and frames. Door construction shall be included in the casing's tested leakage and thermal bridging rating, or shall be demonstrated to meet the same classes."</li>
<li>"Doors on sections under positive pressure shall swing inward. Where outward swing on a positive-pressure section is approved, provide a two-stage safety latch that vents pressure before the door can open fully."</li>
<li>"Doors on sections under negative pressure shall swing outward."</li>
<li>"Provide [continuous stainless steel piano hinges] [heavy-duty adjustable hinges] and a minimum of [two] handle-operated compression latches per door, operable from inside and outside."</li>
<li>"Provide replaceable closed-cell gaskets in a retaining channel around the full door perimeter. Provide double gaskets on [sections above [ ] in. w.c.] [all doors]."</li>
<li>"Provide double-pane safety glass view ports, nominal [ ] in by [ ] in, in doors at the fan, filter, coil and humidifier sections."</li>
<li>"Provide vapour-proof light fixtures in each access section, wired to an external switch with pilot light."</li>
</ol>
<p>When doors begin to leak or whistle in service, diagnostic steps are covered in <a href="<?= url('guides/casing-leaks-door-seal-troubleshooting') ?>">troubleshooting casing leaks and door seals</a>.</p>
<?php guide_end([
    ['Which way should an AHU access door swing?', 'A door should swing so that section pressure pushes it closed. On positive-pressure sections downstream of the fan, it swings inward. On negative-pressure sections upstream of the fan, it swings outward.'],
    ['What size should an air handler access door be?', 'Large enough for the biggest item serviced through it, plus room for a person. Walk-in sections commonly use clear openings around 18 to 24 in wide and as tall as practical. Fan sections often need wider doors for motor removal.'],
    ['Why do access doors need view ports?', 'View ports let technicians inspect fans, filters, coils and humidifiers without stopping the unit or opening a pressurized door. Combined with interior lights, they make routine inspections quick and safe.'],
]);
