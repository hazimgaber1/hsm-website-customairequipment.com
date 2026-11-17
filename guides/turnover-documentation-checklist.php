<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('turnover-documentation-checklist'); ?>
<p class="lede">At handover, the owner should receive everything needed to operate, maintain, repair and eventually replace each air handler: O&amp;M manuals specific to the unit as built, as-built drawings and wiring diagrams, factory and field test reports, warranties, spare parts lists, and records of the training delivered. Use this checklist to collect and verify each item.</p>

<h2>How to use this checklist</h2>
<p>Assign one person to assemble the package for each unit tag, check every item for completeness, and confirm it reflects the unit as installed rather than as originally submitted. Deliver it in the format the owner wants, usually searchable PDF files in a defined folder structure plus any printed copies the specification requires. Keep a copy of the unit-specific documents in a weatherproof pocket on or near the unit.</p>

<h2>Unit identification and general information</h2>
<ul>
<li>Unit tag, serial numbers of each section, model and order numbers.</li>
<li>Manufacturer contact and local representative contact details.</li>
<li>Installing contractor, controls contractor and TAB contractor contacts.</li>
<li>Date of substantial completion and start of warranty period.</li>
<li>Photographs of nameplates for unit, fans, motors, VFDs, coils and humidifiers.</li>
</ul>

<h2>Operation and maintenance manuals</h2>
<ul>
<li>Manufacturer's installation, operation and maintenance manual for the air handler.</li>
<li>Component manuals: fans, motors, VFDs or EC controllers, dampers and actuators, coils, humidifiers, energy recovery devices, filters, sensors, UV lamps.</li>
<li>Recommended maintenance tasks and intervals, with lubrication types and quantities.</li>
<li>Filter list with sizes, quantities, efficiency ratings and initial and final pressure drops.</li>
<li>Belt and sheave data where belt drives are used.</li>
<li>Safety information, including lockout points and any confined space or fall protection notes.</li>
<li>Manuals marked to show which options and models apply, with irrelevant pages removed or crossed out.</li>
</ul>

<h2>Drawings and diagrams</h2>
<ul>
<li>As-built unit drawings showing final dimensions, section splits, access doors and connection locations.</li>
<li>Factory wiring diagrams updated for field changes.</li>
<li>Split wiring schedules for units shipped in sections.</li>
<li>Control drawings: points list, sequence of operation as programmed, network architecture, panel layouts.</li>
<li>Piping and instrumentation diagrams for coil and humidifier connections, if part of the scope.</li>
<li>Mechanical as-builts showing unit location, duct and pipe connections.</li>
<li>Seismic restraint and anchorage drawings as installed.</li>
</ul>

<h2>Test and inspection reports</h2>
<ul>
<li>Factory run test report, and witness test report if one was held.</li>
<li>Factory casing leakage test report where performed.</li>
<li>Receiving inspection record and closure of any damage claims.</li>
<li>Installation checklists and pre-startup checklist.</li>
<li>Manufacturer startup report with baseline speed, amps, voltages and vibration.</li>
<li>Field leakage test report, if specified.</li>
<li>TAB report, certified, with airflows and static pressures.</li>
<li>Controls point-to-point checkout records.</li>
<li>Functional test results and the closed issues log.</li>
<li>Electrical test results such as insulation resistance.</li>
<li>Coil pressure test and water treatment records.</li>
<li>Seismic and other inspection sign-offs from the authority having jurisdiction.</li>
</ul>

<h2>Warranties, certificates and listings</h2>
<ul>
<li>Manufacturer's unit warranty with start date, duration and conditions.</li>
<li>Extended warranties purchased, for example on motors, compressors or coils.</li>
<li>Contractor installation warranty.</li>
<li>Listing information: UL or CSA certification marks and any field evaluation reports.</li>
<li>Certification of performance where specified, such as AHRI or AMCA rated data.</li>
<li>Compliance documentation required for energy codes or green building programs.</li>
</ul>
<p class="note">Note any warranty conditions that depend on maintenance, such as documented filter changes or bearing lubrication. Owners often lose warranty coverage because records were never kept.</p>

<h2>Spare parts and attic stock</h2>
<ul>
<li>Recommended spare parts list with part numbers and supplier contacts.</li>
<li>Attic stock delivered as specified, such as filters and belts, with a signed receipt from the owner.</li>
<li>Special tools and keys for access doors or control panels.</li>
</ul>
<p>Choosing what to keep on hand is covered in the <a href="<?= url('guides/critical-spare-parts-list') ?>">critical spare parts list for AHUs</a>.</p>

<h2>Training records</h2>
<ul>
<li>Training agenda for each session, covering operation, maintenance, safety and controls.</li>
<li>Attendance list signed by participants.</li>
<li>Training materials and any recordings delivered.</li>
<li>Confirmation that required training hours in the specification were delivered.</li>
</ul>
<p>How to specify the scope of training and startup up front is covered in <a href="<?= url('guides/startup-services-specification') ?>">specifying manufacturer startup and training services</a>.</p>

<h2>Controls and software deliverables</h2>
<ul>
<li>Final controller program files and a record of the firmware version on each controller.</li>
<li>VFD and EC controller parameter sets exported as files, with the date they were saved.</li>
<li>Network addresses, device instances and integration point mapping for the building automation system.</li>
<li>Passwords and access levels handed to the owner through a secure channel, not written in the manual.</li>
<li>Final setpoints and tuning values as left at the end of commissioning.</li>
</ul>

<h2>Format and organization</h2>
<ul>
<li>One folder per unit tag, with the same sub-folder structure for every unit.</li>
<li>Files named with the unit tag, document type and date so they sort correctly.</li>
<li>PDFs searchable rather than scanned images wherever the source allows.</li>
<li>Native control program files and VFD parameter backups included, not only printouts.</li>
<li>A one-page index at the front of each unit folder listing every document and its status.</li>
</ul>

<h2>Final review and acceptance</h2>
<ul>
<li>Engineer and commissioning provider have reviewed the package and comments are resolved.</li>
<li>Documents are named and organized consistently across all units.</li>
<li>Data for the owner's maintenance management system is supplied in the requested format; asset setup is discussed in <a href="<?= url('guides/cmms-asset-tagging') ?>">setting up AHUs in a CMMS</a>.</li>
<li>Owner's representative signs receipt of the complete package.</li>
</ul>
<?php guide_end([
    ['What documents should an owner receive when an air handler is handed over?', 'At minimum: unit-specific O&M manuals, as-built drawings and wiring diagrams, factory and field test reports, startup and TAB reports, warranties, spare parts lists and records of the training delivered.'],
    ['Are O&M manuals the same as the systems manual?', 'No. O&M manuals cover how to operate and maintain each piece of equipment. A systems manual, produced as part of commissioning, explains how the systems are intended to work together and is broader in scope.'],
    ['Why do as-built wiring diagrams matter for an AHU?', 'Field changes to wiring, controls and split connections are common. Without updated diagrams, future technicians troubleshoot from drawings that do not match the unit, which wastes time and risks errors.'],
]);
