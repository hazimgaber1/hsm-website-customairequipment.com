<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('startup-services-specification'); ?>
<p class="lede">Specify manufacturer startup and training as defined deliverables, not a vague line saying "provide factory startup". State who must be on site, what they check, how many visits and hours are included, what reports they produce, and how much owner training is delivered, to whom and in what format.</p>

<h2>Why the wording matters</h2>
<p>"Provide factory startup" can be priced as a half-day visit by a sales representative who looks at the unit, or as a factory-trained technician who verifies installation, starts every fan, records baseline data and stays through controls checkout. Bidders price what is written. When startup scope is vague, the low bid usually assumes the minimum, and the owner discovers the gap on the day the unit is first energized.</p>
<p>For custom air handlers, which often ship in sections and include factory-mounted VFDs, controls and fan arrays, clear startup scope protects the owner, the contractor and the manufacturer. It also sets up the warranty properly, since many manufacturers tie warranty terms to documented startup.</p>

<h2>Three levels of manufacturer involvement</h2>
<table>
<thead><tr><th>Service</th><th>What it usually includes</th><th>When to specify it</th></tr></thead>
<tbody>
<tr><td>Installation supervision</td><td>Manufacturer's technician on site during setting and joining of sections, advising the installer and inspecting splits, seals and wiring interconnects</td><td>Multi-section units, knockdown units, units with critical leakage requirements</td></tr>
<tr><td>Factory startup</td><td>Verification of installation against checklist, first run, rotation checks, baseline readings, VFD and factory control setup, startup report</td><td>Almost every custom AHU</td></tr>
<tr><td>Owner training</td><td>Structured sessions on operation, maintenance, safety and controls for owner's staff</td><td>All projects; scale hours to unit complexity</td></tr>
</tbody>
</table>

<h2>Sample specification language: installation supervision</h2>
<p>Adapt the following to the project and the specification format in use:</p>
<p><em>"The manufacturer shall provide a factory-trained field technician on site during rigging, setting and field joining of all shipping sections of AHU-1 through AHU-4. The technician shall inspect split joints, gasket and sealant application, base rail alignment and field wiring interconnects between sections, and shall issue a written report listing deficiencies and their correction. Include not fewer than [number] site days. Additional days required due to contractor delays shall be at the contractor's cost."</em></p>
<p class="note">State the number of days and visits. Without a number, bidders will assume one trip, and a phased installation can need several.</p>

<h2>Sample specification language: startup</h2>
<p><em>"After installation is complete and the contractor's pre-startup checklist has been submitted, the manufacturer shall provide startup services by a factory-trained technician. Startup shall include, as a minimum:</em></p>
<ul>
<li><em>Verification of installation per the manufacturer's installation manual, including level, section joints, isolator adjustment and removal of shipping restraints.</em></li>
<li><em>Verification of supply voltage and phase balance at the unit.</em></li>
<li><em>Verification of fan rotation for each fan, including each fan of a fan array.</em></li>
<li><em>Setup and verification of factory-installed VFDs, EC controllers and factory-mounted controls.</em></li>
<li><em>Recording of fan speed, motor voltage and current, and bearing vibration in three planes at each bearing, at design speed.</em></li>
<li><em>Verification of factory-installed safeties.</em></li>
<li><em>A written startup report submitted within [number] days, including all readings and any deficiencies."</em></li>
</ul>
<p>Coordinate this with the procedures in <a href="<?= url('guides/fan-startup-rotation-vibration') ?>">how to start up fans</a> so the report captures usable baselines. Leave VFD programming detail to the drive section of the specification; see <a href="<?= url('guides/motor-and-drive-specification') ?>">motor and drive specification</a>.</p>

<h2>Sample specification language: owner training</h2>
<p><em>"The manufacturer shall provide [number] hours of on-site training for the owner's operating and maintenance staff, in [number] sessions scheduled at the owner's convenience after startup. Training shall cover:</em></p>
<ul>
<li><em>Unit components, airflow path and operating modes.</em></li>
<li><em>Safe access, lockout points and hazards specific to the unit, including fans that can windmill.</em></li>
<li><em>Routine maintenance tasks and intervals: filters, bearings, belts, coils, drain pans, humidifiers.</em></li>
<li><em>Factory controls: displays, alarms, resets and basic troubleshooting.</em></li>
<li><em>Warranty conditions and how to request service and parts.</em></li>
</ul>
<p><em>The manufacturer shall submit a training agenda for approval [number] days in advance, record attendance, and provide training materials in electronic form. Sessions shall be video recorded for the owner's use where the owner requests it."</em></p>
<p>Training records then form part of the closeout package; see the <a href="<?= url('guides/turnover-documentation-checklist') ?>">turnover documentation checklist</a>.</p>

<h2>What to leave out or put elsewhere</h2>
<ul>
<li><strong>Testing, adjusting and balancing</strong> is a separate scope, normally by an independent TAB firm. Do not fold it into manufacturer startup.</li>
<li><strong>Building automation programming</strong> belongs to the controls contractor, even when the unit has factory controls that integrate with it.</li>
<li><strong>Functional testing</strong> is directed by the commissioning provider. Specify that the manufacturer attends functional tests of factory-mounted controls, for a stated number of hours.</li>
<li><strong>Factory witness testing</strong> happens before shipping and is a separate item.</li>
</ul>

<h2>Practical points for the specifier</h2>
<ul>
<li>Require the startup technician to be a manufacturer employee or an authorized service agent trained on the product, not simply the local sales representative.</li>
<li>Require the contractor to give adequate notice before startup, and make the contractor pay for repeat visits caused by incomplete installation.</li>
<li>Define the hand-off: startup is complete only when the report is accepted.</li>
<li>For multiple units, specify whether hours are per unit or in total.</li>
</ul>
<?php guide_end([
    ['What should manufacturer startup of an air handler include?', 'At minimum: verification of installation against the manufacturer\'s checklist, voltage and phase checks, fan rotation, setup of factory-installed drives and controls, baseline speed, current and vibration readings, safety checks, and a written report.'],
    ['Is TAB part of manufacturer startup?', 'No. Testing, adjusting and balancing is a separate scope usually performed by an independent certified firm after startup. The startup technician confirms the unit runs correctly; the balancer sets and measures system airflows.'],
    ['How many hours of owner training should I specify for an AHU?', 'It depends on unit complexity and the number of staff. State a specific number of hours and sessions rather than leaving it open, and require an agenda, attendance records and recorded sessions where useful.'],
]);
