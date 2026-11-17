<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('rebuild-in-place-ahu'); ?>
<p class="lede">Rebuilding an air handler in place means stripping the unit down to whatever structure is still serviceable, then installing new casing panels, floors, coils, fans and controls within the same footprint and connection points, so the ductwork, piping and building openings stay as they are.</p>

<h2>When rebuild-in-place is the right tool</h2>
<p>A rebuild sits between a component retrofit and a full replacement. It suits units whose location is fixed by the building (a penthouse with no crane access, a basement room built around the unit) and whose base frame and support structure are sound, but whose panels, floor, insulation, coils and fans are all at end of life. Because the new parts are built to fit the old footprint, duct and pipe connections line up and the building envelope is not opened.</p>
<p>If the frame itself is compromised, the project is really a replacement and probably a knockdown unit. The decision between the two paths is covered in <a href="<?= url('guides/retrofit-vs-replacement-decision') ?>">retrofit vs full replacement</a>.</p>

<h2>Phase 1: survey and design</h2>
<ol>
<li><strong>Measure everything twice.</strong> Record interior and exterior dimensions, frame member sizes, duct and pipe connection locations and elevations, access door sizes and the route from the loading area. Laser scanning is worth considering for large or crowded rooms; see <a href="<?= url('guides/field-survey-laser-scanning') ?>">how to survey a mechanical room with laser scanning</a>.</li>
<li><strong>Establish the duty.</strong> Measure current airflow and static, and confirm design loads with the engineer. A rebuild is the moment to correct an undersized coil or noisy fan, so do not simply copy the nameplate.</li>
<li><strong>Test the structure.</strong> Probe base channels and frame posts for section loss, check welds and bolted joints, and confirm the floor or dunnage below can carry the rebuilt weight, which may differ from the original.</li>
<li><strong>Identify hazardous materials.</strong> Sample insulation, gaskets, sealants and paint before any demolition. Abatement must be complete before the trades start cutting.</li>
<li><strong>Produce rebuild drawings.</strong> The manufacturer or designer issues drawings showing retained structure, new components, panel module sizes that suit the access route, and connection points matched to the survey.</li>
</ol>

<h2>Phase 2: strip-out</h2>
<ol start="6">
<li><strong>Lock out and isolate</strong> all electrical feeds, drain and valve off water and steam coils, recover refrigerant from DX coils, and blank off duct connections to keep debris and dust out of the occupied building.</li>
<li><strong>Remove internal components</strong> in reverse order of installation: filters, dampers, humidifier, fan and motor, then coils. Coils are often cut into pieces if their removal path is blocked.</li>
<li><strong>Remove panels and floor</strong> to bare frame. Keep the old panels as templates until the new ones are fitted.</li>
<li><strong>Clean and treat the frame.</strong> Wire-brush or blast corrosion, repair section loss with welded plate or bolted reinforcement as engineered, and apply a primer and finish suited to the environment.</li>
</ol>

<h2>Phase 3: rebuild</h2>
<ol start="10">
<li><strong>Install the new floor.</strong> Set drain pans and floor sections first, sloped to drain, with seams welded or sealed. Under cooling coils, a stainless steel pan is common practice for durability.</li>
<li><strong>Set heavy components.</strong> Install coils on new rails and fan modules or fan assemblies on their bases before closing the walls that would block them.</li>
<li><strong>Close the casing.</strong> Fit new double-wall insulated panels to the frame with gaskets and specified sealant. Install new access doors with continuous gaskets and positive latches.</li>
<li><strong>Install dampers, filters and accessories</strong>, then reconnect ductwork with new flexible connectors where required.</li>
<li><strong>Reconnect services.</strong> Pipe coils with new isolation and control valves as designed, reconnect power to new disconnects and drives, and install new sensors and controls wiring.</li>
<li><strong>Test and commission.</strong> Pressure-test coils, perform a casing leakage test, start fans, and complete testing, adjusting and balancing.</li>
</ol>

<h2>Scope boundaries to agree up front</h2>
<p>Rebuild projects generate disputes when nobody owned a piece of the work. Make the split explicit in the contract:</p>
<table>
<thead><tr><th>Item</th><th>Typically assigned to</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>Structural assessment of retained frame</td><td>Engineer of record or retained structural engineer</td><td>Required before rebuild drawings are final</td></tr>
<tr><td>Hazardous material survey and abatement</td><td>Owner's environmental consultant and abatement contractor</td><td>Completed before mechanical demolition</td></tr>
<tr><td>Rebuild drawings and components</td><td>Manufacturer</td><td>Fit-to-site based on survey</td></tr>
<tr><td>Demolition and installation labour</td><td>Mechanical contractor or manufacturer field crew</td><td>State clearly who assembles panels</td></tr>
<tr><td>Piping, electrical and controls connections</td><td>Respective trades</td><td>Coordinate shutdown dates</td></tr>
</tbody>
</table>

<h2>Practical tips from the field</h2>
<ul>
<li>Pre-fabricate as much as possible. Panels, drain pans and bulkheads should arrive cut and drilled, not be made on site.</li>
<li>Stage materials in the order of installation. A crowded mechanical room has no space for a pile of panels that are needed last.</li>
<li>Protect adjacent equipment from welding spatter and grinding dust with fire blankets and poly enclosures, and have a hot-work permit in place.</li>
<li>Plan for the unit to be out of service longer than a component swap. Arrange temporary conditioning if the spaces served cannot tolerate the outage.</li>
<li>Keep a running list of discovered conditions with photos and get them priced promptly; hidden damage is the main cost risk in rebuild work.</li>
</ul>
<p class="note">If several identical units are being rebuilt, do the first one as a pilot and adjust details before releasing panels for the rest.</p>
<p>When the unit's frame is fine but everything attached to it needs replacing, the <a href="<?= url('products/retrofit-knockdown') ?>">retrofit and knockdown</a> team can help scope a rebuild against a field-assembled replacement.</p>
<?php guide_end([
    ['What does it mean to rebuild an AHU in place?', 'It means stripping an existing unit to its sound structural frame and installing new panels, floor, coils, fans and controls within the same footprint. Duct and pipe connections stay in their original locations, so building work is minimized.'],
    ['How long does an in-place AHU rebuild take?', 'Duration depends on unit size, access and how much is prefabricated, but a rebuild is longer than a single component swap. Plan for an extended outage and arrange temporary conditioning if the served spaces need it.'],
    ['Can the old base frame be reused in a rebuild?', 'Yes, if a structural assessment confirms it has no significant section loss and can carry the new component weights. Frames with localized corrosion can often be repaired with welded or bolted reinforcement as engineered.'],
]);
