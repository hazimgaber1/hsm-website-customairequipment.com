<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('factory-witness-testing'); ?>
<p class="lede">A factory witness test lets the owner or engineer watch a completed air handler run before it ships, verifying airflow, casing leakage, sound or other agreed parameters against the specification; planning it well means defining what will be measured, how, to what tolerance and what happens on a failure, long before anyone books a flight.</p>

<h2>Step 1: Decide what to test</h2>
<ol>
<li><strong>Choose the parameters.</strong> Common witness tests on custom air handlers include fan airflow and static pressure, fan power, vibration, casing leakage, casing deflection, sound power, coil pressure tests, electrical and controls functional checks, and redundant fan operation with one fan disabled.</li>
<li><strong>Choose which units.</strong> On a multi-unit project, witnessing the first unit of each type is common. Critical units, such as hospital operating room units or data hall units, may each be tested.</li>
<li><strong>Separate witnessed from standard testing.</strong> Manufacturers usually perform some tests on every unit as part of their quality process; witnessed tests are additional, priced and scheduled specifically.</li>
</ol>
<p class="note">Witness tests are expensive in time and travel. Test what you cannot reasonably verify in the field, such as casing leakage before shipping splits are separated, sound power in a controlled environment, or full-load fan performance before the building is ready.</p>

<h2>Step 2: Write the test requirements into the specification</h2>
<ol start="4">
<li><strong>State the test method</strong> for each parameter. Reference standards where they apply, for example AMCA 210 for fan airflow measurement methods, AMCA 300 for sound, and AHRI 1350 for casing performance classification. Where the unit is too large for a standard test setup, require the manufacturer to submit a test procedure for approval.</li>
<li><strong>State acceptance criteria</strong> and tolerances. "Airflow within the scheduled tolerance at scheduled static pressure" is enforceable; "test airflow" is not.</li>
<li><strong>State the consequences of failure:</strong> correction and retest at the manufacturer's cost, including additional witness travel if required.</li>
<li><strong>State notice periods</strong> for scheduling the test and who pays for witness travel.</li>
</ol>

<h2>Step 3: Approve the test procedure</h2>
<ol start="8">
<li>Require the manufacturer to submit a written procedure before the test, covering setup, instrumentation, measurement points, test sequence, calculations and data sheets.</li>
<li>Check that instruments have current calibration certificates.</li>
<li>Check how test conditions map to design conditions. Factory tests usually run at ambient conditions in the plant, so airflow and fan power must be corrected to design density using the fan laws, and casing leakage measured at the specified test pressure.</li>
<li>Agree how the duct system will be simulated. A test plenum, nozzle chamber, or adjustable damper can set external static to the design value.</li>
</ol>
<p class="formula">Density correction: BHP_design = BHP_test × (ρ_design ÷ ρ_test), at the same speed and CFM</p>

<h2>Step 4: Schedule the test</h2>
<ol start="12">
<li>Coordinate the date with the production schedule, usually near the end of manufacturing when the unit is complete but before it is split for shipping.</li>
<li>Confirm attendees: owner, engineer, commissioning agent, contractor. Limit the group to people who will evaluate the results.</li>
<li>Allow a full day per unit for a comprehensive test. Simple tests may take less.</li>
<li>Confirm the facility has power, test equipment and space available on that date. A test bumped by production pressure costs everyone travel.</li>
</ol>

<h2>Step 5: Attend the test</h2>
<ol start="16">
<li><strong>Walk the unit first.</strong> Inspect construction against approved submittals: panels, doors, floors, drain pans, coils, fans, wiring and labels. Many issues are found visually before anything is switched on. Bring the marked-up submittal and the comments from the <a href="<?= url('guides/ahu-submittal-review-checklist') ?>">AHU submittal review</a> so you can confirm each one was addressed.</li>
<li><strong>Confirm the setup.</strong> Check instrument positions, test plenum configuration and that blank-offs used for leakage testing are sealed properly.</li>
<li><strong>Run the tests in the agreed sequence.</strong> Record readings on the agreed data sheets. Ask for raw readings as well as calculated results.</li>
<li><strong>Observe redundancy tests.</strong> For fan arrays, disable one fan and verify the remaining fans deliver the specified airflow and that backdraft dampers or blank-offs behave as designed.</li>
<li><strong>Check vibration</strong> at each fan across the speed range, noting any resonance.</li>
<li><strong>Observe controls.</strong> If factory controls are included, test sequences, alarms and safeties.</li>
</ol>

<h2>Step 6: Close out</h2>
<ol start="22">
<li>Review results before leaving. Agree which items passed, failed or need correction.</li>
<li>Sign the test record, noting any items accepted with conditions.</li>
<li>Require a formal test report with all data, calculations, instrument calibration records and photos.</li>
<li>For failed items, agree the correction plan and whether a retest must be witnessed or can be documented.</li>
</ol>

<h2>What a witness test does not replace</h2>
<p>Factory testing proves the unit as built. It does not prove installation, field-joined shipping splits, the duct system or controls integration in the building. Those remain the job of field testing, adjusting and balancing and commissioning; see <a href="<?= url('guides/functional-performance-testing') ?>">functional performance testing</a>. Airflow measured in the factory also may differ from field values if the field duct connections create system effect losses.</p>
<table>
<thead><tr><th>Verified in factory</th><th>Verified in field</th></tr></thead>
<tbody>
<tr><td>Fan performance with simulated external static</td><td>Airflow against the real duct system</td></tr>
<tr><td>Casing leakage before splitting</td><td>Leakage at field joints</td></tr>
<tr><td>Sound power at the unit</td><td>Room sound levels</td></tr>
<tr><td>Factory controls sequences</td><td>Integration with building automation</td></tr>
</tbody>
</table>
<p>Custom Air Equipment run-tests its units in the factory and offers witness testing; the <a href="<?= url('contact') ?>">contact page</a> is the place to discuss test scope for a project.</p>
<?php guide_end([
    ['What is tested during an AHU factory witness test?', 'Common tests include fan airflow and static pressure, fan power, vibration, casing leakage and deflection, sound power, coil pressure tests, redundant fan operation, and electrical and controls checks. The specification should list which apply.'],
    ['When should a factory witness test be scheduled?', 'Near the end of manufacturing, when the unit is complete but before it is split into shipping sections. Give enough notice for travel and confirm the test facility is available on that date.'],
    ['Does a factory test replace field commissioning?', 'No. A factory test proves the unit as built, but not installation, field joints, the duct system or building controls integration. Field testing, balancing and commissioning are still required.'],
]);
