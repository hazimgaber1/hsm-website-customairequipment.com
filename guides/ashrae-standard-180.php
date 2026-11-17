<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ashrae-standard-180'); ?>
<p class="lede">ANSI/ASHRAE/ACCA Standard 180 sets the minimum content of an inspection and maintenance program for HVAC systems in commercial buildings. It does not just list tasks; it requires the owner to have a documented program, defined condition indicators, and records showing the work is done and acted on.</p>

<h2>What Standard 180 is for</h2>
<p>Standard 180, Standard Practice for Inspection and Maintenance of Commercial Building HVAC Systems, was developed jointly by ASHRAE and ACCA to give owners, service contractors and specifiers a common baseline. Its stated purpose is to maintain comfort, indoor air quality and energy efficiency over the life of the system, not just to keep equipment running. It is written in mandatory language, which means it can be referenced in service contracts, owner policies and some codes and programs.</p>
<p>It applies to HVAC systems in commercial buildings, including air handlers, packaged units, terminal units, chillers, boilers, cooling towers, pumps, controls and associated ductwork. It is not intended for industrial process systems or residential buildings, and it does not cover life safety systems such as smoke control, which have their own standards.</p>

<h2>How the standard is structured</h2>
<p>The standard follows a logical order that mirrors how a maintenance program should be set up:</p>
<ol>
<li><strong>Purpose, scope and definitions.</strong> Including key terms such as condition indicator, inspection and maintenance task, and responsible party.</li>
<li><strong>Program requirements.</strong> The owner must have a documented inspection and maintenance plan.</li>
<li><strong>System inventory and identification.</strong> The plan must identify each system and the equipment within it.</li>
<li><strong>Condition indicators.</strong> For each piece of equipment, measurable or observable conditions that show whether it is performing as intended.</li>
<li><strong>Tasks and frequencies.</strong> Minimum inspection and maintenance tasks, arranged in tables by equipment type.</li>
<li><strong>Documentation and records.</strong> Requirements for recording what was done and what was found.</li>
<li><strong>Program review.</strong> Periodic evaluation of whether the program is achieving its goals.</li>
</ol>
<p>Informative annexes provide guidance on applying the standard and on alternative task frequencies, but they are not mandatory.</p>

<h2>Program requirements in plain terms</h2>
<h3>A written plan</h3>
<p>The building must have a written inspection and maintenance plan. It identifies who is responsible, which systems are included, the tasks and frequencies, and how deficiencies are corrected. A collection of manufacturer manuals on a shelf is not a plan.</p>
<h3>Condition indicators</h3>
<p>This is the heart of the standard. Instead of only saying "inspect the coil quarterly," the program must define what condition is being checked and what result triggers action. For an air handler, condition indicators might include:</p>
<table>
<thead><tr><th>Component</th><th>Example condition indicator</th><th>Action when out of range</th></tr></thead>
<tbody>
<tr><td>Filters</td><td>Pressure drop above the change-out value</td><td>Replace filters</td></tr>
<tr><td>Cooling coil</td><td>Visible fouling or air pressure drop rising over baseline</td><td>Clean coil</td></tr>
<tr><td>Drain pan</td><td>Standing water or visible biological growth</td><td>Clear drain, clean pan</td></tr>
<tr><td>Fan</td><td>Vibration above the established limit</td><td>Investigate bearings, balance, alignment</td></tr>
<tr><td>Belts</td><td>Wear, cracking or incorrect tension</td><td>Retension or replace</td></tr>
<tr><td>Dampers</td><td>Failure to stroke fully</td><td>Repair linkage or actuator</td></tr>
<tr><td>Sensors</td><td>Reading outside tolerance of a reference</td><td>Calibrate or replace</td></tr>
</tbody>
</table>
<h3>Minimum tasks and frequencies</h3>
<p>The task tables list, for each equipment type, what must be inspected and how often. Frequencies are expressed in categories such as monthly, quarterly, semiannual and annual. The owner can adjust frequency when documented conditions justify it, which lets a well-run program move from a fixed schedule toward condition-based maintenance.</p>
<h3>Documentation</h3>
<p>Each task must be recorded with the date, who did it and what was found. Deficiencies must be tracked through to correction. A computerized maintenance management system makes this practical; asset tagging for that purpose is covered in <a href="<?= url('guides/cmms-asset-tagging') ?>">CMMS asset tagging</a>.</p>

<h2>What Standard 180 means for air handlers</h2>
<p>Air handlers are among the most task-heavy equipment in the tables because they combine moving parts, water, filters and controls. Expect the program to include fans and drives, motors, coils, drain pans and condensate drains, filters, humidifiers, dampers and actuators, casing integrity, outdoor air intakes, energy recovery devices, sensors and the control sequence itself.</p>
<p class="note">Design affects compliance cost. A unit with walk-in access sections, lights, viewports and test ports for pressure measurements makes it far easier to perform and document the inspections the standard expects.</p>
<p>A practical schedule built around these tasks is laid out in <a href="<?= url('guides/ahu-preventive-maintenance-schedule') ?>">the AHU preventive maintenance schedule</a>.</p>

<h2>How Standard 180 is used</h2>
<ul>
<li><strong>Service contracts.</strong> Owners reference it to define the minimum scope a contractor must deliver.</li>
<li><strong>Owner policies.</strong> Institutional and government owners adopt it as their maintenance baseline.</li>
<li><strong>Green building programs.</strong> Existing building certifications and operations credits often reward a documented program consistent with the standard.</li>
<li><strong>Codes.</strong> Some jurisdictions reference it in energy or building operations requirements; check local adoption.</li>
<li><strong>Specification.</strong> Designers reference it when specifying O&amp;M manuals so the turnover documents support a compliant program.</li>
</ul>

<h2>Common misreadings</h2>
<ul>
<li>It is not a commissioning standard. Recommissioning an existing system is a separate process.</li>
<li>It does not replace manufacturer requirements. Where the manufacturer requires more frequent work, follow the manufacturer.</li>
<li>It does not guarantee energy performance. It sets a minimum; performance depends on how condition indicators are chosen and acted on.</li>
<li>The task tables are minimums, not a complete program for critical facilities such as hospitals or data centres.</li>
</ul>
<?php guide_end([
    ['What is ASHRAE Standard 180?', 'It is the ANSI/ASHRAE/ACCA standard that defines minimum requirements for inspection and maintenance programs for HVAC systems in commercial buildings, including a written plan, condition indicators, task tables and documentation.'],
    ['Is ASHRAE 180 mandatory?', 'It is written in mandatory language but only becomes required when referenced by a contract, owner policy, program or code. Some jurisdictions and green building programs reference it.'],
    ['What is a condition indicator in Standard 180?', 'A condition indicator is a measurable or observable condition that shows whether equipment is performing as intended, such as filter pressure drop, vibration level or drain pan condition, along with the action taken when it is out of range.'],
    ['Can task frequencies in ASHRAE 180 be changed?', 'Yes, when documented conditions justify the change. This allows a program to move from fixed intervals toward condition-based maintenance while still complying.'],
]);
