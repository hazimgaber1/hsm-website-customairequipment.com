<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('inspection-failures-ahu-installations'); ?>
<p class="lede">Most failed inspections on air handler installations come from a short list: missing or wrong labels, blocked working clearances, smoke detector problems, condensate disposal, and paperwork that does not match what was installed. Each item below gives the symptom an inspector writes up, the usual cause, what to check and how to fix it.</p>

<h2>Labels and listing</h2>
<h3>Symptom: "Equipment not listed" or "label missing"</h3>
<p><strong>Cause:</strong> The listing label was on a shipping section that was discarded, painted over or hidden behind a field-installed component; or the unit truly lacks a listing for the country of installation.</p>
<p><strong>Check:</strong> Look for the label on each section, the main control panel and the nameplate. Confirm the mark is valid for the country (a "c" for Canada, "us" for the US). Ask the manufacturer for the certification file reference.</p>
<p><strong>Fix:</strong> If the label exists, make it visible. If it was lost, the manufacturer can usually supply a replacement through the certification body. If the unit is unlisted or was modified, arrange a field evaluation; see <a href="<?= url('guides/field-evaluation-unlisted-equipment') ?>">how field evaluation works</a>.</p>
<h3>Symptom: "Field modifications void listing"</h3>
<p><strong>Cause:</strong> An electrician added a heater, rewired motors or installed unlisted components after delivery.</p>
<p><strong>Check:</strong> Compare installed wiring and components to the factory wiring diagram.</p>
<p><strong>Fix:</strong> Restore to the factory configuration or have the change evaluated and labelled.</p>
<h3>Symptom: "Nameplate ratings do not match circuit"</h3>
<p><strong>Cause:</strong> The breaker or fuse exceeds the nameplate maximum overcurrent protection, or the conductor is smaller than minimum circuit ampacity requires.</p>
<p><strong>Fix:</strong> Correct the overcurrent device or conductor size. If the unit was changed during submittals, confirm the electrical drawings reflect the final nameplate.</p>

<h2>Clearances and access</h2>
<h3>Symptom: "Working space obstructed"</h3>
<p><strong>Cause:</strong> Piping, conduit, ductwork or structural members installed in front of electrical panels, disconnects or VFDs.</p>
<p><strong>Check:</strong> Measure depth, width and height of working space in front of every electrical enclosure. Dimensions depend on voltage and conditions under the NEC or CEC; see <a href="<?= url('guides/electrical-working-clearances') ?>">electrical working clearances</a>.</p>
<p><strong>Fix:</strong> Reroute the obstruction. Relocating the disconnect is sometimes faster but must still meet code and remain within sight of the equipment where required.</p>
<h3>Symptom: "No access for service"</h3>
<p><strong>Cause:</strong> Ceiling-hung or attic units without access openings or service platforms; rooftop units without permanent access or required guards.</p>
<p><strong>Fix:</strong> Add access panels, catwalks, ladders or guards as required by the mechanical code. Plan these during design so they are not field add-ons.</p>

<h2>Smoke detectors and fire safety</h2>
<h3>Symptom: "Duct smoke detector missing or not interlocked"</h3>
<p><strong>Cause:</strong> The detector was shown on mechanical drawings but not included in the fire alarm scope, or it was installed but not wired to shut down the fan.</p>
<p><strong>Check:</strong> Confirm the system airflow and whether detection is required; confirm the detector trips the fan and reports to the fire alarm panel.</p>
<p><strong>Fix:</strong> Install and wire the detector, and demonstrate shutdown in the presence of the inspector. Requirements are summarized in <a href="<?= url('guides/nfpa-90a-smoke-detectors-dampers') ?>">NFPA 90A requirements</a>.</p>
<h3>Symptom: "Detector not accessible" or "sampling tube incorrect"</h3>
<p><strong>Cause:</strong> Detector installed above a hard ceiling, too close to a fan or elbow, or with the sampling tube oriented wrong.</p>
<p><strong>Fix:</strong> Relocate to straight duct with access, or provide a remote test station; correct tube orientation per the listing.</p>
<h3>Symptom: "Fire damper access" or "damper not installed per listing"</h3>
<p><strong>Fix:</strong> Add access doors at dampers, correct sleeves and retaining angles, and label access points.</p>
<h3>Symptom: "Plenum materials"</h3>
<p><strong>Cause:</strong> Non-plenum cable, plastic piping or combustible materials in a return plenum around the AHU.</p>
<p><strong>Fix:</strong> Replace with plenum-rated materials or enclose in raceway.</p>

<h2>Condensate disposal</h2>
<h3>Symptom: "Condensate discharges to roof" or "improper disposal"</h3>
<p><strong>Cause:</strong> Drain line terminated on the roof surface, near a walkway or directly into a sanitary line without an air gap.</p>
<p><strong>Fix:</strong> Route to an approved receptor with the required indirect connection.</p>
<h3>Symptom: "No secondary protection"</h3>
<p><strong>Cause:</strong> Unit installed above a finished ceiling or occupied space without an auxiliary pan, secondary drain or overflow switch.</p>
<p><strong>Fix:</strong> Add an auxiliary pan or a water-level switch wired to stop cooling.</p>
<h3>Symptom: "Drain not trapped" or "trap inadequate"</h3>
<p><strong>Cause:</strong> Trap omitted or too shallow for the negative pressure in the drain pan section.</p>
<p><strong>Fix:</strong> Install a trap sized for the fan static pressure. If the unit's base is too low for the required trap, raise it on a housekeeping pad.</p>

<h2>Documentation and energy items</h2>
<table>
<thead><tr><th>Write-up</th><th>Typical cause</th><th>Fix</th></tr></thead>
<tbody>
<tr><td>Compliance forms do not match installed equipment</td><td>Fan or motor changed after permit</td><td>Update and resubmit forms</td></tr>
<tr><td>Missing acceptance or functional test forms</td><td>Tests not scheduled or not documented</td><td>Perform tests and complete forms</td></tr>
<tr><td>Seismic certificate not provided</td><td>Designated seismic system without certification on file</td><td>Obtain certificate from manufacturer</td></tr>
<tr><td>Anchorage not per approved details</td><td>Curb or isolator substitution</td><td>Install per certification or get engineer approval</td></tr>
<tr><td>Refrigerant leak detection not functional</td><td>A2L sensor not wired to mitigation</td><td>Complete wiring and demonstrate sequence</td></tr>
<tr><td>Outdoor air intake too close to exhaust</td><td>Field relocation of intake or flue</td><td>Relocate or extend to meet separation</td></tr>
</tbody>
</table>

<h2>Preventing repeat failures</h2>
<ul>
<li>Walk the installation with the code checklist before calling for inspection.</li>
<li>Keep the listed installation instructions, seismic certificate and compliance forms on site.</li>
<li>Coordinate fire alarm and mechanical scopes in writing so smoke detector wiring has an owner.</li>
<li>Verify clearances when the unit is set, before other trades fill the space.</li>
</ul>
<p class="note">These are code inspection items. Problems that appear when the unit is started, such as low airflow or tripping drives, are a separate category of failure.</p>
<?php guide_end([
    ['What are the most common inspection failures on AHU installations?', 'Missing or invalid listing labels, obstructed electrical working space, smoke detectors that are missing or not interlocked, improper condensate disposal and compliance documents that do not match the installed equipment.'],
    ['What happens if an AHU listing label is missing?', 'The inspector may refuse approval until the label is shown. If it was lost, the manufacturer can usually obtain a replacement through the certification body; if the unit was modified, a field evaluation may be needed.'],
    ['Why do inspectors fail condensate drains?', 'Common reasons are discharge to a roof or walkway, missing indirect connection to the sanitary system, missing secondary protection over finished spaces and missing or undersized traps.'],
    ['How can contractors avoid AHU inspection failures?', 'Walk the installation against a code checklist before inspection, keep listing, seismic and energy documents on site, coordinate smoke detector wiring between trades and protect working clearances early.'],
]);
