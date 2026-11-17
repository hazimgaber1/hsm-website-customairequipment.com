<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('correctional-facility-ahu-checklist'); ?>
<p class="lede">An air handler in a detention facility must keep contraband, weapons and people out of the duct system, resist tampering at every point an inmate can reach, and remain serviceable by staff without compromising security. Use this checklist at schematic design, at specification and again at submittal review.</p>

<h2>Security levels and who sets them</h2>
<p>Correctional facilities assign security levels to spaces: housing pods, cells, day rooms, intake, medical, kitchens, staff areas and the secure perimeter. The owner's security consultant or the corrections authority usually defines which spaces are maximum, medium or minimum security and what level of barrier each opening must achieve. Your checklist should reference those definitions rather than invent new ones.</p>
<p>Before using the items below, confirm:</p>
<ul>
<li>[ ] The project's security level for each area served by each air handler is documented.</li>
<li>[ ] The authority's design standard (federal, provincial, state or county) is identified and its edition recorded.</li>
<li>[ ] The security consultant has agreed on the products and tests that demonstrate compliance for grilles, barriers and hardware.</li>
</ul>

<h2>Air handler location and access</h2>
<ul>
<li>[ ] Air handlers located outside the secure perimeter or in a secured mechanical space that inmates cannot access.</li>
<li>[ ] Mechanical rooms accessible to maintenance staff without passing through housing units, where the layout permits.</li>
<li>[ ] Outdoor air intakes located where they cannot be reached from recreation yards, roofs accessible to inmates, or the public side of the perimeter fence.</li>
<li>[ ] Intakes and exhaust outlets protected against introduction of contraband or harmful substances; consider height, screening and intrusion detection.</li>
<li>[ ] Rooftop units, if any, located on roofs secured from inmate access and from the public.</li>
<li>[ ] Clear service space around each unit so maintenance can be done quickly and without propping doors or leaving tools unattended.</li>
</ul>

<h2>Security barriers in ductwork</h2>
<p>Where ducts pass from a secure to a non-secure zone, or where a duct is large enough for a person to enter, the authority usually requires a security barrier.</p>
<ul>
<li>[ ] Every duct crossing the secure perimeter or a security-level boundary identified on drawings.</li>
<li>[ ] Security barriers specified at each crossing, consisting of welded steel bars or plate with perforations sized to prevent passage, per the authority standard.</li>
<li>[ ] Barrier pressure drop included in the system static pressure budget. Barriers are often overlooked in fan selection.</li>
<li>[ ] Access provided upstream and downstream of each barrier for cleaning, since barriers collect lint and debris.</li>
<li>[ ] Fire and smoke dampers coordinated with barriers so neither interferes with the other.</li>
</ul>

<h2>Grilles, registers and diffusers</h2>
<ul>
<li>[ ] Supply, return and exhaust devices in cells and inmate-accessible areas specified as security grade, with heavy-gauge steel faces and small perforations to prevent passing objects or creating ligature points.</li>
<li>[ ] Anti-ligature designs in cells and suicide-watch rooms, with no edges or openings that can anchor a cord.</li>
<li>[ ] Grilles welded or fastened to a frame built into the wall or ceiling, not to the drywall.</li>
<li>[ ] Device pressure drop and noise at design airflow verified; security perforated faces have higher resistance than commercial grilles.</li>
<li>[ ] Return grilles positioned where inmates cannot easily block them with mattresses or clothing.</li>
<li>[ ] Diffusers in staff areas use standard devices where the security consultant agrees, to save cost.</li>
</ul>

<h2>Tamper-resistant hardware</h2>
<ul>
<li>[ ] Fasteners in inmate-accessible areas use tamper-resistant heads (for example, pin-in-head or proprietary drive) acceptable to the authority.</li>
<li>[ ] Exposed thermostats and sensors in inmate areas avoided; use duct-mounted or return-air sensors, or tamper-resistant guarded sensors.</li>
<li>[ ] Access panels in inmate areas avoided; where unavoidable, secured with security locks keyed to the facility system.</li>
<li>[ ] Unit access doors in mechanical rooms equipped with lockable latches and keyed to the facility maintenance system.</li>
<li>[ ] Control panels, disconnects and VFDs housed in locked enclosures inside secure mechanical rooms.</li>
</ul>

<h2>Access control and monitoring</h2>
<ul>
<li>[ ] Air handler and mechanical room doors connected to the facility access control and alarm system, with door-open alarms reported to central control.</li>
<li>[ ] Building automation system on a network segregated from inmate-accessible networks and from general administrative IT.</li>
<li>[ ] Shutdown and smoke purge sequences available from central control, consistent with the facility's emergency plan.</li>
<li>[ ] Control of smoke dampers and exhaust in housing units coordinated with fire alarm and life safety design.</li>
<li>[ ] Alarm on loss of airflow to any housing unit, because ventilation failures quickly affect inmate and staff safety.</li>
</ul>

<h2>Reliability and maintainability</h2>
<ul>
<li>[ ] Redundant fans or air handlers for housing units so that a failure does not require relocating inmates; see <a href="<?= url('guides/fan-array-redundancy-n1-vs-n2') ?>">fan array redundancy</a> for how to express this.</li>
<li>[ ] Filters accessible from the mechanical room side only.</li>
<li>[ ] Filtration level agreed with medical staff for medical and infirmary areas; consider airborne infection isolation rooms where the program includes them.</li>
<li>[ ] Durable casing with heavy-gauge panels and corrosion protection; replacement during operation is difficult in a secure facility.</li>
<li>[ ] Spare parts list held on site to avoid escorting vendors through security during emergencies. A starting point is the <a href="<?= url('guides/critical-spare-parts-list') ?>">critical spare parts list</a>.</li>
</ul>

<h2>Submittal and construction phase</h2>
<ul>
<li>[ ] Submittals for security grilles, barriers and hardware reviewed by the security consultant as well as the engineer.</li>
<li>[ ] Shop drawings show barrier locations, sizes and access, and the static pressure allowance.</li>
<li>[ ] Construction-phase security procedures agreed for working inside an operating facility, including tool control.</li>
<li>[ ] Factory testing completed before shipment so that commissioning on site is shorter; see <a href="<?= url('guides/factory-witness-testing') ?>">factory witness testing</a>.</li>
<li>[ ] Training provided to facility maintenance staff on security-specific components.</li>
</ul>
<p>General commercial design topics such as ventilation rates and load calculations are outside this checklist. When the security requirements are defined, our team can discuss how they apply to a custom unit through the <a href="<?= url('contact') ?>">contact page</a>.</p>
<?php guide_end([
    ['What is a duct security barrier?', 'It is a welded steel grid or perforated plate installed where a duct crosses a secure boundary, sized so a person or contraband cannot pass. The authority or security consultant specifies its construction, and its pressure drop must be included in fan selection.'],
    ['Where should air handlers be located in a correctional facility?', 'Outside the secure perimeter or in locked mechanical rooms that inmates cannot reach, with intakes away from recreation yards and public areas. Maintenance staff should reach units without passing through housing units where possible.'],
    ['Why use redundant fans in jail air handlers?', 'A failed fan in a housing unit can force inmate relocation, which is costly and creates security risk. Redundant fans or air handlers keep ventilation running while repairs are made.'],
]);
