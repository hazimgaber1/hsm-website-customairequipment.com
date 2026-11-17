<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('factory-casing-leakage-testing'); ?>
<p class="lede">A factory casing leakage test seals every opening of the finished unit, connects a test blower through a calibrated flow meter, raises the casing to the specified test pressure and measures how much air must be supplied to hold that pressure. That flow is the casing leakage, which is compared with the allowable value in the specification.</p>

<h2>What the test proves</h2>
<p>A casing class rating under AHRI 1350 or EN 1886 shows that a manufacturer's construction system can perform. A production unit test shows that the specific unit being shipped, with its own doors, penetrations and field-split joints, actually does. Many specifications for hospitals, labs and energy-critical projects require both. The specification language for class ratings is in <a href="<?= url('guides/ahri-1350-casing-performance-spec') ?>">specifying casing performance per AHRI 1350</a>; this guide covers the test itself.</p>

<h2>Equipment</h2>
<ul>
<li><strong>Test blower</strong> with variable speed or a bleed damper, capable of reaching the test pressure at the expected leakage flow.</li>
<li><strong>Flow measuring element</strong>: a calibrated orifice plate, flow nozzle or laminar flow element with a differential pressure transducer, selected so the expected leakage falls within its accurate range.</li>
<li><strong>Casing pressure gauge</strong> or transducer, reading the difference between inside the unit and the surrounding room.</li>
<li><strong>Blank-off panels</strong> and temporary covers for duct openings, louvers and damper faces.</li>
<li><strong>Calibration records</strong> for the flow element and pressure instruments.</li>
<li><strong>Smoke pencil or theatrical fog</strong> and an ultrasonic leak detector for locating leaks.</li>
</ul>

<h2>Test procedure</h2>
<ol>
<li><strong>Agree on the criteria before testing.</strong> Confirm the test pressure, whether positive and negative sections are tested separately, and the pass value, expressed as cfm, as a percentage of design airflow, or as a leakage class. Confirm which openings are part of the casing and which belong to the system (for example, outdoor air dampers are usually blanked rather than tested as casing).</li>
<li><strong>Complete the unit.</strong> All panels, doors, penetrations and factory wiring should be in place. Field-installed items not present at test time should be noted.</li>
<li><strong>Seal the openings.</strong> Blank all duct connections with rigid plates and gaskets. Seal drain connections with caps. Do not tape over door gaskets or panel joints; those are what is being tested.</li>
<li><strong>Divide the unit if needed.</strong> If sections upstream and downstream of the fan are to be tested at different pressures, install a temporary bulkhead at the fan section or test the sections separately before final assembly.</li>
<li><strong>Connect the blower</strong> to a test port or blank-off plate through the flow element. For negative-pressure testing, reverse the blower to draw air out.</li>
<li><strong>Raise pressure gradually</strong> to the test value. Watch panels and doors; stop if anything deflects abnormally.</li>
<li><strong>Stabilize and record.</strong> Hold the test pressure for a few minutes until flow readings settle, then record casing pressure, flow element differential, air temperature and barometric pressure.</li>
<li><strong>Calculate leakage</strong> from the flow element's calibration, corrected to standard conditions.</li>
<li><strong>Locate leaks if it fails.</strong> Use smoke or an ultrasonic detector at doors, corners, penetrations and split joints. Repair, then retest.</li>
<li><strong>Document.</strong> The report should identify the unit, sections tested, test pressure, measured leakage, allowable leakage, instrument calibration and witnesses.</li>
</ol>
<p class="warn">Do not exceed the casing's rated pressure during testing. Over-pressurizing can permanently deform panels or blow out a door. Use a pressure relief or limit on the test blower.</p>

<h2>Expressing the pass criterion</h2>
<p>Three common forms appear in specifications:</p>
<h3>Percentage of design airflow</h3>
<p>For example, leakage not to exceed 1% of design airflow at the test pressure. Simple to understand, but a large unit is allowed far more leakage in absolute terms than a small one.</p>
<h3>Leakage per unit of casing surface</h3>
<p>Leakage normalized to casing area, sometimes using a leakage class relationship of the form:</p>
<p class="formula">F = CL × P^0.65</p>
<p>where F is leakage in cfm per 100 ft² of casing surface, P is test pressure in in. w.c. and CL is the leakage class. This form is used widely for duct leakage and is sometimes applied to casings. It scales with unit size and pressure.</p>
<h3>Class under AHRI 1350 or EN 1886</h3>
<p>Uses the standard's own leakage classes and test pressures. Clear, but properly intended for the class test rather than every production unit.</p>
<h3>Worked check</h3>
<p>A unit with 20,000 cfm design airflow is tested at 6 in. w.c. The specification allows 1% of design airflow, so the limit is 200 cfm. The flow element shows 140 cfm at 6.0 in. w.c. after correction: the unit passes with margin. If the same unit had 1,200 ft² of casing surface and the limit were stated as CL 6, the allowance would be 6 × 6^0.65 = 6 × 3.20 = 19.2 cfm per 100 ft², or 230 cfm total.</p>

<h2>Witnessing the test</h2>
<p>Owners and engineers often attend casing leakage tests as part of a factory witness test. Custom Air Equipment run-tests units at its factory and offers witness testing; a witness should confirm the instrument calibration, see the openings sealed without covering gaskets, watch the pressure ramp and stabilization, and sign the recorded values. Arrangements are covered in <a href="<?= url('guides/factory-witness-testing') ?>">factory witness testing</a>.</p>
<p>Leakage measured after installation is a different test with different expectations, because field joints, ductwork and site conditions are involved; see <a href="<?= url('guides/field-leakage-testing') ?>">field leakage testing</a>.</p>
<?php guide_end([
    ['How is air handler casing leakage tested?', 'All duct openings are sealed, a test blower with a calibrated flow meter is connected, and the casing is pressurized to the specified test pressure. The airflow needed to hold that pressure is the leakage, which is compared to the allowable value.'],
    ['What is an acceptable casing leakage rate?', 'It depends on the specification. A common form is a maximum of 1% of design airflow at a stated test pressure. Other specifications use a leakage class tied to casing area, or a class from AHRI 1350 or EN 1886.'],
    ['Are positive and negative sections tested separately?', 'Often, yes. Sections downstream of the fan run under positive pressure and those upstream under negative pressure, so the specification may require each to be tested at its own pressure and direction.'],
]);
