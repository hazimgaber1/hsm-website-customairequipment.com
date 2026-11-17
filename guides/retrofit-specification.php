<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('retrofit-specification'); ?>
<p class="lede">A retrofit or knockdown air handler specification has to cover everything a new-unit specification covers plus the parts that only exist in existing buildings: who verifies site conditions, what gets demolished and by whom, how the unit is delivered and assembled in the field, and how its performance is proven after it is rebuilt on site.</p>

<h2>How this differs from a new-unit spec</h2>
<p>Performance, casing construction, fans, coils and controls are specified much as they would be for any custom unit; the structure of that base section is covered in <a href="<?= url('guides/writing-ahu-specification-23-73-00') ?>">how to write an AHU specification</a>. A retrofit specification adds articles that deal with uncertainty. The existing building was not designed for the new unit, drawings may be wrong, and the unit itself may be built in pieces. Clear language here moves risk to the party best placed to manage it and avoids disputes once the old unit is gone.</p>

<h2>Site verification</h2>
<p>State who is responsible for confirming dimensions and conditions, and when.</p>
<p class="note">Sample language: "Prior to submittal of shop drawings, the manufacturer shall visit the site, verify all dimensions affecting fabrication and delivery including the access route from the loading area to the final location, and document findings in a written site verification report with photographs. Shop drawings shall be based on verified dimensions. Discrepancies between the contract documents and site conditions shall be reported to the engineer in writing before fabrication."</p>
<ul>
<li>Name the route: loading dock, corridors, elevator, stairs and door openings to be verified.</li>
<li>State maximum piece dimensions and weights if already known from a survey, or require the manufacturer to establish them.</li>
<li>Require verification of connection locations: ducts, piping, electrical, condensate.</li>
<li>Say whether the owner will provide a laser scan or existing drawings, and that they are for information only unless stated otherwise.</li>
</ul>

<h2>Demolition and interfaces with existing work</h2>
<p>Retrofits stall when demolition boundaries are vague. Define exactly where existing work stops and new work begins.</p>
<p class="note">Sample language: "Remove the existing air handling unit, including casing, base frame, internal components, isolation and controls, to the extent shown on the drawings. Existing supply and return ductwork shall be disconnected at the flexible connections and protected with sealed temporary covers. Existing piping shall be cut and capped at the isolation valves indicated. Existing housekeeping pad shall remain and be prepared to receive the new unit."</p>
<ul>
<li>List what remains: pads, curbs, dunnage, duct risers, piping mains, conduits.</li>
<li>Identify who removes and disposes of the old unit, and whether any components are to be salvaged for the owner.</li>
<li>Reference the hazardous materials survey and state that abatement is by others and complete before mechanical demolition. See <a href="<?= url('guides/hazardous-materials-old-ahus') ?>">hazardous materials in old AHUs</a>.</li>
<li>Require protection of adjacent equipment, finishes and occupied areas.</li>
</ul>

<h2>Construction for field assembly</h2>
<p>If the unit will be shipped knocked down, say so and define the expected performance of the assembled unit.</p>
<p class="note">Sample language: "The unit shall be designed for field assembly from components no larger than the maximum piece size established in the site verification report. The unit shall be fully assembled, wired and run-tested at the factory, match-marked and disassembled for shipment. Field-assembled casing performance shall meet the same leakage and deflection requirements specified for factory-assembled casings."</p>
<ul>
<li>State whether factory pre-assembly is required, optional or not required.</li>
<li>Specify joint construction for frames and floors: bolted, welded or either, and any requirement for welded drain pans.</li>
<li>Require crating by section with labels keyed to assembly drawings.</li>
<li>Require supply of all field gaskets, sealants and fasteners by the manufacturer, with spares.</li>
<li>Define who assembles the unit: manufacturer's crew, contractor under manufacturer supervision, or contractor alone.</li>
</ul>

<h2>Field assembly supervision and QA</h2>
<p class="note">Sample language: "Provide a qualified factory representative on site during field assembly for a minimum of the durations stated in the bid form. The representative shall inspect and sign off the base frame, floor and drain pan, component installation, and casing closure before each subsequent stage proceeds."</p>
<ul>
<li>Require hold-point inspections and a signed checklist, such as the <a href="<?= url('guides/knockdown-field-assembly-qa') ?>">knockdown unit field assembly QA checklist</a>.</li>
<li>Require photographic records of sealed joints before they are covered.</li>
</ul>

<h2>Testing and acceptance</h2>
<table>
<thead><tr><th>Test</th><th>When</th><th>What to specify</th></tr></thead>
<tbody>
<tr><td>Factory run test</td><td>Before disassembly</td><td>Fan operation, vibration, electrical checks; witness option</td></tr>
<tr><td>Factory casing leakage test</td><td>Before disassembly, if pre-assembled</td><td>Test pressure and acceptance criterion</td></tr>
<tr><td>Field casing leakage test</td><td>After assembly, before insulation or finishes cover joints</td><td>Same criterion as factory, or a stated field allowance</td></tr>
<tr><td>Coil pressure test</td><td>After field piping connections</td><td>Test pressure and duration</td></tr>
<tr><td>Airflow and performance verification</td><td>After startup</td><td>Measurement method and tolerance</td></tr>
</tbody>
</table>
<p class="note">Sample language: "After field assembly, the casing shall be tested for leakage at the specified test pressure. Leakage shall not exceed the specified value. Test shall be witnessed by the owner's representative. Where leakage exceeds the criterion, locate and seal leaks and retest at no additional cost."</p>

<h2>Schedule and outage constraints</h2>
<ul>
<li>State the permitted shutdown window and the maximum outage duration.</li>
<li>Require a detailed outage sequence submittal before work begins.</li>
<li>Define liquidated damages or other consequences for overrunning the outage, if the owner intends to apply them.</li>
<li>State temporary HVAC responsibility if required.</li>
</ul>
<p>Retrofit specifications work best when they are short on assumptions and long on verification. A manufacturer experienced with <a href="<?= url('products/retrofit-knockdown') ?>">retrofit and knockdown units</a> can review draft language before bid to flag gaps.</p>
<?php guide_end([
    ['What should a retrofit AHU specification include?', 'In addition to normal performance and construction requirements, it should cover site verification, demolition boundaries, field assembly construction and supervision, field leakage testing, outage constraints and responsibility for temporary HVAC.'],
    ['Who should verify site dimensions for a replacement AHU?', 'Most specifications assign verification to the manufacturer or contractor before shop drawings, with a written report. Owner-provided drawings or scans are usually stated as information only unless the contract says otherwise.'],
    ['Should a knockdown AHU be leak tested in the field?', 'Yes. A factory test on a unit that is later disassembled does not prove the field-built casing. Specify a field leakage test with a stated test pressure and acceptance criterion after assembly.'],
]);
