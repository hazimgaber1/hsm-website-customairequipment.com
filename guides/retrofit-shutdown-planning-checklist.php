<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('retrofit-shutdown-planning-checklist'); ?>
<p class="lede">A retrofit cutover succeeds or fails on preparation done weeks or months before the unit is switched off; this checklist covers the lead times to confirm, the shutdown window to secure, the crews and materials to stage and the contingencies to have ready.</p>

<h2>Lead times (start here, months ahead)</h2>
<ul>
<li>Air handler or replacement components: submittal approval date, manufacturing slot and confirmed ship date.</li>
<li>Electrical gear: switchgear, panels, transformers, disconnects and VFDs, which can have longer lead times than the air handler itself.</li>
<li>Controls hardware and programming: controllers, sensors, valves, actuators and the integrator's programming time.</li>
<li>Long-lead specialties: large control valves, custom dampers, humidifiers and energy recovery components.</li>
<li>Crane or rigging equipment: booking, permits for street closure and any utility line protection.</li>
<li>Temporary equipment: rental units, generators and temporary duct, with delivery confirmed.</li>
<li>Abatement: survey results received, contractor engaged, abatement and clearance dates set.</li>
<li>Permits: mechanical, electrical, building, and any heritage or street use permits issued.</li>
<li>Utility shutdowns: electrical, gas or water outages requested from the utility, if needed.</li>
</ul>
<p class="note">Do not set the shutdown date until the equipment's confirmed ship date is known. Build float between delivery and the outage start.</p>

<h2>Securing the shutdown window</h2>
<ul>
<li>Shutdown dates agreed in writing with the owner and building operations.</li>
<li>Window aligned with the season: cooling units in spring or fall, heating units in late spring or summer where possible.</li>
<li>Occupancy calendar checked for events, exams, peak business periods and holidays.</li>
<li>Duration estimate built from task durations, with explicit allowances for discovery and testing.</li>
<li>Rollback point defined: the last time the old unit can be restored if something goes wrong.</li>
<li>Life-safety systems affected by the shutdown identified, with impairment procedures and fire watch arranged.</li>
<li>Critical spaces served by the unit identified and their backup plan confirmed.</li>
<li>Tenant notices issued; see <a href="<?= url('guides/replacing-ahu-occupied-building') ?>">how to replace an AHU in an occupied building</a>.</li>
</ul>

<h2>Crews and coordination</h2>
<ul>
<li>Every trade identified with a named lead: mechanical, sheet metal, piping, electrical, controls, rigging, insulation, roofing, abatement, testing and balancing.</li>
<li>Manufacturer's field representative or assembly crew booked for knockdown or field-joined units.</li>
<li>Shift schedule written, including overnight or weekend work and overtime approvals.</li>
<li>Pre-shutdown coordination meeting held, with a written sequence of operations for the outage.</li>
<li>Daily start-of-shift briefings planned, with a progress tracking sheet.</li>
<li>Escalation contacts listed for owner, engineer, manufacturer, rental company and utilities.</li>
<li>Site access arranged: keys, security badges, elevator bookings, loading dock time.</li>
<li>Safety plan reviewed: lockout procedures, hot-work permits, confined space assessment, fall protection on roofs.</li>
</ul>

<h2>Pre-work completed before the outage</h2>
<ul>
<li>New electrical feeders and disconnects installed and tested, ready for termination.</li>
<li>Pipe taps, isolation valves and hose connections installed and pressure-tested.</li>
<li>Structural reinforcement complete and inspected.</li>
<li>Housekeeping pad, curb or dunnage modifications complete.</li>
<li>Controls panel built, programmed and checked against the points list; graphics ready.</li>
<li>Temporary equipment installed and run-tested.</li>
<li>New unit or components received, inspected and staged in installation order.</li>
<li>Duct transitions and connection pieces prefabricated.</li>
<li>Access route cleared, protected and confirmed against piece dimensions.</li>
</ul>

<h2>Materials and tools staged</h2>
<ul>
<li>Gaskets, sealants, fasteners and insulation in quantities with a margin.</li>
<li>Spare belts, filters and fuses for startup.</li>
<li>Refrigerant recovery equipment and cylinders, if DX coils are involved.</li>
<li>Glycol or water treatment chemicals for refilling coils.</li>
<li>Rigging gear: chain falls, come-alongs, dollies, skates, beam clamps rated for the loads.</li>
<li>Test instruments: manometers, pitot tubes, thermometers, multimeters, insulation testers, vibration meter.</li>
<li>Lighting and power for night work.</li>
</ul>

<h2>Contingencies</h2>
<ul>
<li>Plan for hidden structural damage discovered after demolition, with the structural engineer on call.</li>
<li>Plan for hidden hazardous materials: stop-work procedure and abatement contractor on call.</li>
<li>Plan for late or damaged equipment: inspection on receipt and a decision date to postpone.</li>
<li>Plan for weather on roof lifts: alternate crane dates and wind limits agreed.</li>
<li>Plan for startup failure: manufacturer support availability during the outage.</li>
<li>Plan for temporary equipment failure: rental company response time and backup unit.</li>
<li>Plan for controls integration issues: manual operation mode for the new unit.</li>
<li>Contingency budget and authority to approve extra work quickly.</li>
</ul>
<p class="warn">The most common cause of overrun is not a disaster but an accumulation of small delays. Track progress against the sequence each shift and escalate early when a task slips.</p>

<h2>Communication during the outage</h2>
<ul>
<li>One person designated to issue status updates to the owner at agreed times each day.</li>
<li>Go or no-go call scheduled at the rollback point, with the decision makers named.</li>
<li>Issue log kept on site, with each discovered condition, its owner and its resolution.</li>
<li>Change requests priced and approved in writing before extra work starts.</li>
</ul>

<h2>After restart</h2>
<ul>
<li>Startup checks completed and recorded.</li>
<li>Testing, adjusting and balancing scheduled immediately after restart.</li>
<li>Temporary equipment removal scheduled once performance is confirmed.</li>
<li>Lessons learned captured if further units will be replaced.</li>
</ul>
<p>Sizing the temporary equipment referenced here is covered in <a href="<?= url('guides/temporary-hvac-during-replacement') ?>">how to provide temporary heating and cooling during AHU replacement</a>, and typical manufacturing durations in <a href="<?= url('guides/ahu-lead-times-procurement') ?>">AHU lead times and procurement timelines</a>.</p>
<?php guide_end([
    ['How far ahead should an AHU shutdown be planned?', 'Planning should begin as soon as equipment is ordered, since the shutdown date depends on confirmed delivery and on long-lead electrical and controls items. Many projects plan major cutovers several months ahead.'],
    ['What work can be done before an AHU shutdown?', 'New electrical feeders, pipe taps and valves, structural reinforcement, controls programming, temporary equipment and duct transitions can usually be completed before the outage, leaving only removal and connection during the shutdown.'],
    ['What is a rollback point in a shutdown plan?', 'It is the last point in the sequence at which the old unit can still be restarted if something goes wrong. After that point the project is committed to finishing the new installation.'],
]);
