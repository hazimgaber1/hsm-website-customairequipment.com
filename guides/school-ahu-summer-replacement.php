<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('school-ahu-summer-replacement'); ?>
<p class="lede">A school summer break gives you about nine to ten weeks between the last day of classes and staff returning, and the air handler has to be out, replaced, started and balanced inside that window. The work that decides success happens months earlier: surveying, design, approvals and equipment procurement must all be complete before school lets out.</p>

<h2>Work backward from the first day of school</h2>
<p>Fix two dates with the school board: the day the contractor gets the building and the day the building must be handed back for teachers' setup, which is often a week or more before students arrive. Everything else is planned backward from those dates. A typical sequence for a single large AHU replacement looks like this:</p>
<table>
<thead><tr><th>Phase</th><th>Typical timing before or after access date</th></tr></thead>
<tbody>
<tr><td>Condition survey and measurements</td><td>12 to 15 months before</td></tr>
<tr><td>Design and specification</td><td>9 to 12 months before</td></tr>
<tr><td>Tender and award</td><td>7 to 9 months before</td></tr>
<tr><td>Shop drawings and approval</td><td>6 to 8 months before</td></tr>
<tr><td>Manufacturing and factory testing</td><td>2 to 6 months before</td></tr>
<tr><td>Delivery to site or nearby storage</td><td>1 to 2 weeks before</td></tr>
<tr><td>Demolition, install, connections</td><td>Weeks 1 to 6</td></tr>
<tr><td>Startup, controls, TAB, commissioning</td><td>Weeks 6 to 9</td></tr>
</tbody>
</table>
<p class="note">These durations are illustrative. Custom AHU lead times vary with market conditions and complexity; confirm them with manufacturers before committing to a tender date. See <a href="<?= url('guides/ahu-lead-times-procurement') ?>">AHU lead times and procurement</a> for the factors that drive them.</p>

<h2>Step 1: Survey early and thoroughly</h2>
<ol>
<li>Measure the mechanical room, the access path, doors, corridors, stairs and any roof openings. A replacement unit that cannot get into the room is the most common cause of summer schedule failure.</li>
<li>Document existing duct connections, piping, electrical service and controls points.</li>
<li>Identify hazardous materials. Older schools may have asbestos in duct insulation, pipe insulation, gaskets or flooring. Abatement must be scheduled, and it often has to happen first in the summer window.</li>
<li>Check structural capacity if the new unit is heavier or occupies a different footprint.</li>
</ol>
<p>Laser scanning of the room is valuable for tight retrofits; methods are in <a href="<?= url('guides/field-survey-laser-scanning') ?>">field surveys and laser scanning</a>.</p>

<h2>Step 2: Choose a unit that fits the schedule</h2>
<p>When the room is hard to reach, a factory-assembled unit may not be possible. Options include:</p>
<ul>
<li><strong>Shipping splits</strong> sized to the smallest opening on the access path.</li>
<li><strong>Knockdown units</strong> that ship as panels and components and are assembled in the mechanical room. Knockdown assembly takes site labor, so it must be included in the installation schedule.</li>
<li><strong>Rooftop replacement by crane</strong> during a weekend early in the window, when traffic around the school is lightest.</li>
</ul>
<p>Whatever the format, specify factory run testing of fans, motors and controls before shipment, so commissioning on site starts with known-good components.</p>

<h2>Step 3: Procure early</h2>
<ol>
<li>Tender in the fall or early winter so shop drawings are approved by spring.</li>
<li>Consider pre-purchasing the air handler directly by the school board, then assigning it to the installing contractor. This decouples equipment lead time from the construction tender.</li>
<li>Release long-lead components first: custom coils, VFDs and controls panels can govern the delivery date.</li>
<li>Require the manufacturer to confirm a ship date in writing and to report progress at agreed milestones.</li>
<li>Arrange storage near the site if the unit will arrive before access is granted.</li>
</ol>

<h2>Step 4: Plan the site work in detail</h2>
<p>Write a day-by-day schedule for the summer with the contractor and the school's facilities staff. Include:</p>
<ul>
<li>Abatement, if required, and air clearance testing before other trades enter.</li>
<li>Disconnecting and removing the existing unit, including piping drain-down and refrigerant recovery.</li>
<li>Structural or housekeeping pad modifications.</li>
<li>Rigging and setting the new unit; book cranes early because summer is busy for school projects everywhere.</li>
<li>Reconnecting ducts, piping, power and controls.</li>
<li>Startup, controls checkout, testing, adjusting and balancing, and functional testing.</li>
</ul>
<p>Other school summer work, such as roofing, painting, flooring and IT upgrades, will compete for access, parking and elevators. Hold coordination meetings with the board's project manager from the start of the window.</p>

<h2>Step 5: Protect the commissioning time</h2>
<p>Startup, balancing and commissioning tend to be squeezed when installation runs late. Reserve at least two to three weeks at the end of the window for them, and do not give that time away. Prepare functional test scripts in advance. Have the controls contractor complete point-to-point checks as soon as wiring is done rather than waiting for full mechanical completion.</p>
<p class="warn">A school that reopens with an unbalanced or partially controlled air handler will generate complaints for the whole year. If schedule pressure is severe, agree on a reduced but complete scope with the board rather than handing over a unit that is not commissioned.</p>

<h2>Step 6: Plan a fallback</h2>
<p>Identify what happens if the unit is late. Options may include temporary ventilation units, phased occupancy, or a partial reopening of the building. Discuss these with the board before the window opens so decisions can be made quickly. Temporary HVAC options are described in <a href="<?= url('guides/temporary-hvac-during-replacement') ?>">temporary HVAC during replacement</a>.</p>

<h2>Step 7: Close out before students arrive</h2>
<p>Hand over operating instructions, training for custodial and maintenance staff, a list of filter sizes and quantities, warranty information and as-built drawings. Arrange a return visit in early fall when the unit sees occupied loads for the first time, and again in winter for heating season checks. Phasing strategies for larger, multi-year retrofits are in <a href="<?= url('guides/retrofit-shutdown-planning-checklist') ?>">retrofit shutdown planning</a>. Knockdown and split units designed for tight access are described on our <a href="<?= url('products/retrofit-knockdown') ?>">retrofit and knockdown</a> page.</p>
<?php guide_end([
    ['When should a school order a replacement air handler for summer installation?', 'Ideally the design and tender should be complete by fall or early winter so shop drawings are approved by spring and the unit ships before the school year ends. Confirm current lead times with manufacturers before setting dates.'],
    ['What if the air handler cannot fit through the existing doors?', 'Use shipping splits sized to the smallest opening, or a knockdown unit assembled in the mechanical room. Measure the full access path early, including stairs and corridors.'],
    ['How long should be reserved for commissioning a school AHU in summer?', 'Plan at least two to three weeks at the end of the window for startup, controls checkout, balancing and functional testing, and protect that time if installation runs late.'],
]);
