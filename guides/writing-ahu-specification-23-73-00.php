<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('writing-ahu-specification-23-73-00'); ?>
<p class="lede">An air handler specification in MasterFormat Section 23 73 00 (Indoor Central-Station Air-Handling Units) follows the standard three-part structure, General, Products and Execution, and works best when performance lives in the schedule, construction requirements live in Part 2, and every clause says something a bidder can price and an inspector can verify.</p>

<h2>Step 1: Choose the section and its scope</h2>
<ol>
<li><strong>Pick the right number.</strong> 23 73 00 covers indoor central-station air handlers, with subsections commonly used for modular and custom indoor units. Outdoor units are often specified in a related section of the 23 70 00 range; check the MasterFormat edition your office uses and stay consistent.</li>
<li><strong>Decide one section or several.</strong> A project with a few similar units can use one section. A project mixing custom units for a hospital wing with catalog units for offices may be clearer with separate sections.</li>
<li><strong>Write the summary.</strong> State what the section includes (units, factory controls, integral components) and what is in other sections: ductwork, piping, field controls, electrical, testing and balancing, commissioning.</li>
</ol>

<h2>Step 2: Write Part 1, General</h2>
<ol start="4">
<li><strong>References.</strong> List the standards actually invoked in the text, for example AHRI 430, AHRI 1350, AHRI 410, AMCA 210, AMCA 300, ASHRAE 62.1, ASHRAE 90.1 or NECB, UL 1995 or CSA C22.2 No. 236. Do not list standards you never cite; they create confusion about which apply. Wording for certification requirements is covered in <a href="<?= url('guides/certification-requirements-specification') ?>">certification requirements in specifications</a>.</li>
<li><strong>Definitions.</strong> Define terms that often cause disputes: casing leakage class, deflection, external static pressure, total static pressure.</li>
<li><strong>Submittals.</strong> List what each submittal must contain: dimensional drawings, performance data, fan curves, coil selections, sound data, electrical data, wiring diagrams, weights, and casing performance data.</li>
<li><strong>Quality assurance.</strong> Manufacturer qualifications, factory testing requirements and any witness test provisions; planning those tests is covered in <a href="<?= url('guides/factory-witness-testing') ?>">how to plan a factory witness test</a>.</li>
<li><strong>Delivery, storage and handling.</strong> Protection during shipping, storage requirements on site, shipping split rules.</li>
<li><strong>Warranty.</strong> Duration, start date, and any extended coverage on specific components.</li>
</ol>
<p class="note">Avoid long lists of "approved manufacturers" in Part 1 unless your procurement rules require them. Basis of design and substitution procedures are better handled in a dedicated article.</p>

<h2>Step 3: Write Part 2, Products</h2>
<ol start="10">
<li><strong>General unit requirements.</strong> Arrangement, listing (UL 1995 or CSA C22.2 No. 236 as applicable), and performance basis.</li>
<li><strong>Casing.</strong> Panel construction, thickness, insulation type and fire rating, thermal performance, leakage and deflection requirements, base frame, floor, drain pans, access doors and viewing windows.</li>
<li><strong>Fans.</strong> Type, arrangement, ratings basis, balance requirements, isolation, motor type and efficiency, drive type.</li>
<li><strong>Coils.</strong> Materials, tube and fin construction, ratings basis, maximum face velocity, connections, drain pan requirements.</li>
<li><strong>Filters.</strong> Ratings basis (for example MERV per ASHRAE 52.2), racks and holding frames, gauges.</li>
<li><strong>Dampers.</strong> Construction, leakage class, actuators.</li>
<li><strong>Other components.</strong> Energy recovery, humidifiers, sound attenuators, UV-C, electric heaters, each with its own article or a reference to another section.</li>
<li><strong>Electrical.</strong> Single-point power, disconnects, VFDs, lights and receptacles, wiring standards.</li>
<li><strong>Factory controls,</strong> if included: scope, controller, sensors and integration protocol.</li>
<li><strong>Source quality control.</strong> Factory tests required on every unit: run test, electrical tests, casing leakage test, coil pressure test.</li>
</ol>

<h2>Step 4: Write Part 3, Execution</h2>
<ol start="20">
<li><strong>Examination.</strong> Contractor verifies pads, curbs, openings and services before installation.</li>
<li><strong>Installation.</strong> Setting, levelling, anchorage, isolation, field joining of shipping splits, condensate trap height.</li>
<li><strong>Connections.</strong> Duct, piping and electrical connection requirements, flexible connectors.</li>
<li><strong>Field quality control.</strong> Field leakage testing if required, startup by manufacturer's representative, vibration checks.</li>
<li><strong>Demonstration and training.</strong> Hours of owner training and content.</li>
<li><strong>Cleaning and protection.</strong> Interior cleaning before startup, filter replacement before turnover.</li>
</ol>

<h2>Step 5: Coordinate with the schedule</h2>
<ol start="26">
<li><strong>Put performance on the schedule</strong>, not in the text: airflow, external static, coil capacities and conditions, filter efficiency, motor data, electrical characteristics and maximum dimensions. The fields to include are listed in <a href="<?= url('guides/ahu-equipment-schedule-fields') ?>">AHU equipment schedule: required fields</a>.</li>
<li><strong>Cross-reference</strong> the schedule in the specification with a clause such as "Performance shall be as scheduled on the drawings."</li>
<li><strong>Check for conflicts</strong> between the schedule and the specification text: face velocity limits, motor types, filter ratings.</li>
</ol>

<h2>Step 6: Edit and review</h2>
<ol start="29">
<li>Delete every clause that does not apply to this project. Office masters often accumulate options for every possible unit type.</li>
<li>Replace vague words such as "high quality" or "heavy duty" with measurable requirements.</li>
<li>Check edition references against the code adopted in the jurisdiction.</li>
<li>Have someone outside the design team read it for clarity before issue.</li>
</ol>

<h2>Sample clause structure</h2>
<p class="note">Example: "2.3 CASING. A. Construction: Double-wall panels, minimum 2 in. (50 mm) thick, with solid galvanized steel outer skin and solid galvanized steel inner liner. B. Insulation: Non-combustible mineral fibre or foam meeting the fire and smoke requirements of the referenced standards. C. Leakage: Casing leakage shall not exceed the scheduled class when tested at the scheduled pressure. D. Deflection: Panels shall not exceed the scheduled deflection at the scheduled pressure."</p>
<p>Each item is specific, measurable and either priced or tested. Clause errors that commonly create RFIs are covered in <a href="<?= url('guides/common-ahu-specification-errors') ?>">common AHU specification errors and conflicts</a>.</p>
<?php guide_end([
    ['What is MasterFormat section 23 73 00?', 'It is the MasterFormat section for indoor central-station air-handling units, with subsections commonly used for modular and custom indoor units. It is organized in the standard three parts: General, Products and Execution.'],
    ['Should AHU performance be in the specification or the schedule?', 'Performance values such as airflow, static pressure, capacities and electrical data are best placed on the drawing schedule, with the specification stating construction requirements and referencing the schedule for performance.'],
    ['What standards should an AHU specification reference?', 'Reference only the standards actually invoked in the text, commonly AHRI 430, AHRI 1350, AHRI 410, AMCA 210 and 300, ASHRAE 52.2, 62.1 and 90.1 or NECB, and UL 1995 or CSA C22.2 No. 236. Confirm editions against local adoption.'],
]);
