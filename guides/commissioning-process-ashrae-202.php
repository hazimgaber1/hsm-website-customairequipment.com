<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('commissioning-process-ashrae-202'); ?>
<p class="lede">Commissioning (Cx) is a quality process that runs from the owner's first statement of what the building must do through to a review of how it performs after occupancy. ANSI/ASHRAE Standard 202 describes that process in the US, and CSA Z320 covers building commissioning in Canada; for an air handler, both lead to the same result: a unit designed, built, installed and tested to meet documented owner requirements.</p>

<h2>Commissioning is a process, not a test</h2>
<p>It is common to hear "the unit was commissioned" when someone means it was started up. Startup is one event. Commissioning is the overall process that makes sure the right unit was specified for the owner's needs, that submittals match the design intent, that installation follows the documents, that testing proves performance, and that operators can run the system afterwards. A commissioning provider (CxP), ideally engaged early, leads and documents the process on the owner's behalf.</p>
<p>ASHRAE Standard 202 sets out the minimum process requirements, and ASHRAE Guideline 0 gives more detail on how to carry them out. CSA Z320 defines building commissioning requirements for Canadian projects, including documentation and roles. Specific project and jurisdictional requirements vary, and energy codes or green building programs may mandate commissioning scope; check the edition adopted or referenced for your project.</p>

<h2>Pre-design: the Owner's Project Requirements</h2>
<p>Everything starts with the Owner's Project Requirements (OPR), a written statement of what the owner needs from the facility. For an air handler, useful OPR content includes:</p>
<ul>
<li>Indoor conditions to be held: temperature, humidity, pressure relationships, filtration level.</li>
<li>Hours of operation and redundancy expectations, such as N+1 fans.</li>
<li>Service life targets, maintenance capabilities of the owner's staff and access expectations.</li>
<li>Energy and sustainability targets.</li>
<li>Acoustic limits in sensitive spaces.</li>
<li>Training and documentation the owner expects at handover.</li>
</ul>
<p>The OPR is the yardstick for every later review. Without it, commissioning becomes a check of whether the contractor followed the drawings, which is narrower than whether the building serves the owner.</p>

<h2>Design phase: Basis of Design and reviews</h2>
<p>The design team responds to the OPR with a Basis of Design (BOD) that explains how the systems will meet it: why a 100 percent outdoor air unit, why a fan array, what design conditions were used. The CxP reviews design documents at defined milestones for alignment with the OPR, constructability, maintainability and testability. Typical comments for air handlers include missing access sections, sequences that cannot be tested, missing sensors needed for verification, and coil pull space not shown on drawings.</p>
<p>The design phase also produces the commissioning specification, which tells contractors what Cx activities they must support: checklists, test participation, training and documentation.</p>

<h2>Construction phase: submittals, checklists and testing</h2>
<h3>Submittal review</h3>
<p>The CxP reviews the air handler submittal alongside the engineer, focusing on OPR items: access, controls points, maintainability and options such as factory testing. If the owner wants to witness a factory run test, it should be confirmed here.</p>
<h3>Construction checklists</h3>
<p>Contractors complete checklists that confirm installation is correct and complete before testing. For an air handler these cover setting, joining, wiring, piping, drains and controls point-to-point verification. The installer's <a href="<?= url('guides/pre-startup-checklist') ?>">pre-startup checklist</a> usually forms part of this record.</p>
<h3>Startup and TAB</h3>
<p>Manufacturer or contractor startup comes next, followed by testing, adjusting and balancing. The CxP reviews the startup and TAB reports and may spot-check readings.</p>
<h3>Functional testing</h3>
<p>The system is then exercised through its sequences and failure modes. This step has its own detailed scripts and methods, described in <a href="<?= url('guides/functional-performance-testing') ?>">functional performance testing of AHUs</a>.</p>
<h3>The issues log</h3>
<p>Throughout construction, the CxP keeps an issues log: every deficiency found, who owns it and when it was resolved. It is one of the most useful Cx records because it shows what went wrong and why.</p>

<h2>Occupancy and operations phase</h2>
<p>Commissioning does not end at substantial completion. Typical activities after handover are:</p>
<ul>
<li><strong>Training</strong> of operators, recorded and checked against the OPR's training requirements.</li>
<li><strong>Systems manual</strong> assembly: a document beyond the O&amp;M manuals that explains how systems are intended to work together. Turnover document contents are listed in the <a href="<?= url('guides/turnover-documentation-checklist') ?>">turnover documentation checklist</a>.</li>
<li><strong>Seasonal testing</strong> of modes that could not be tested at completion, such as full heating in a summer handover.</li>
<li><strong>Warranty-period review</strong>, often around ten months after completion, to find problems before warranties expire.</li>
<li><strong>Lessons learned</strong> and a final Cx report.</li>
</ul>

<h2>Roles at a glance</h2>
<table>
<thead><tr><th>Party</th><th>Main Cx responsibilities for the AHU</th></tr></thead>
<tbody>
<tr><td>Owner</td><td>Provides the OPR, engages the CxP, attends training, accepts the system</td></tr>
<tr><td>Commissioning provider</td><td>Plans and leads Cx, reviews documents, witnesses tests, keeps the issues log, writes the Cx report</td></tr>
<tr><td>Design engineer</td><td>Writes the BOD and sequences, responds to Cx comments, reviews test results</td></tr>
<tr><td>Mechanical and controls contractors</td><td>Complete checklists, perform startup, support functional tests, correct deficiencies</td></tr>
<tr><td>Manufacturer</td><td>Provides documentation, factory testing, startup support and training where specified</td></tr>
</tbody>
</table>
<p>When an existing building needs this process applied to systems already in service, the approach is different; see <a href="<?= url('guides/recommissioning-existing-ahu') ?>">how to recommission an existing AHU</a>.</p>
<?php guide_end([
    ['What is ASHRAE Standard 202?', 'ASHRAE Standard 202 defines the minimum requirements of the commissioning process for buildings and systems, from owner\'s project requirements through design, construction and occupancy. ASHRAE Guideline 0 gives more detail on how to carry out the process.'],
    ['What is CSA Z320?', 'CSA Z320 is the Canadian standard for building commissioning. It sets out commissioning requirements, roles and documentation for Canadian projects, and is often referenced in Canadian specifications alongside or instead of ASHRAE documents.'],
    ['When should a commissioning provider be hired?', 'Ideally during pre-design, so they can help write the owner\'s project requirements and review the design. A provider engaged only at construction can still test systems but has little chance to influence design decisions.'],
]);
