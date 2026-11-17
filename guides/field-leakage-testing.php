<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('field-leakage-testing'); ?>
<p class="lede">To leak test an installed air handler casing, seal every opening, pressurize the casing to the specified test pressure with a calibrated test fan, read the airflow needed to hold that pressure, and compare it with the allowable leakage for the specified pressure and leakage class. Fix leaks found with smoke or by ear, then retest.</p>

<h2>When a field test is needed</h2>
<p>Casings are often leak tested at the factory, but shipping, rigging, field joining of splits and field penetrations can all add leakage. Specifications for critical units, such as healthcare, laboratory, cleanroom and outdoor units with tight leakage classes, increasingly ask for a field test after installation. The factory test procedure and what it demonstrates are covered separately in <a href="<?= url('guides/factory-casing-leakage-testing') ?>">factory casing leakage testing</a>; this guide deals only with testing on site.</p>
<p>Read the specification closely before starting. It should state the test pressure (positive, negative or both), the acceptance criterion (a leakage class, a cfm limit, or a percentage of design airflow), which sections are included, and whether the test is witnessed.</p>

<h2>Equipment</h2>
<ul>
<li>A calibrated test fan or blower with an airflow measuring element (calibrated orifice, flow nozzle or flow grid) sized for the expected leakage. Duct leakage testing rigs often work for smaller casings.</li>
<li>A digital manometer for casing pressure and another for the flow element, with calibration certificates.</li>
<li>Rigid blank-off panels or heavy plastic sheet with tape and sealant for openings.</li>
<li>Flexible duct to connect the test rig to a test port or blank-off panel.</li>
<li>Theatrical smoke or smoke pencils for locating leaks.</li>
</ul>

<h2>Step-by-step procedure</h2>
<ol>
<li><strong>Complete the installation.</strong> All splits joined and sealed, sealant cured, doors adjusted, field penetrations made and sealed. Testing before these are finished only measures unfinished work.</li>
<li><strong>Isolate the casing.</strong> Disconnect or blank off supply, return, outdoor air and exhaust openings at the casing face, outside any dampers that form part of the casing. Do not rely on low-leakage dampers as blank-offs unless the specification says the test includes them closed.</li>
<li><strong>Seal non-casing openings.</strong> Seal drain connections with caps (do not leave traps dry and open), and blank off instrument ports not used for the test.</li>
<li><strong>Lock out the unit fans.</strong> Apply lockout and confirm fans cannot start. Restrain fan wheels if the test airflow could make them windmill.</li>
<li><strong>Connect the rig.</strong> Attach the test fan to a blank-off panel or test opening. Connect the casing pressure tap at a location away from the test fan inlet so velocity does not distort the reading.</li>
<li><strong>Pressurize gradually.</strong> Raise casing pressure slowly to the test pressure. Watch panels and doors; a casing should never be tested above the pressure it was designed for. Typical test pressures equal the design operating pressure of the section, but use what the specification states.</li>
<li><strong>Stabilize and read.</strong> Hold the test pressure for several minutes, then record casing pressure, flow element reading and the calculated leakage airflow. Take at least three readings and average.</li>
<li><strong>Test the other polarity if required.</strong> Units with both positive and negative sections may be tested in each direction on the relevant sections.</li>
<li><strong>Locate and fix leaks.</strong> If leakage exceeds the limit, hold a lower pressure and use smoke around split joints, door gaskets, penetrations and panel seams. Mark leaks, depressurize, repair, allow sealant to cure and retest.</li>
<li><strong>Document.</strong> Record the unit tag, sections tested, openings sealed, test pressures, readings, instruments and calibration dates, and witnesses.</li>
</ol>
<p class="warn">Negative-pressure tests can pull door gaskets inward and collapse sheet blank-offs. Brace plastic blank-offs, and never stand in front of a door on a pressurized casing.</p>

<h2>Adjusting results to the specified pressure</h2>
<p>If the test cannot reach the exact specified pressure, leakage measured at another pressure can be adjusted using the usual leakage relationship, in which leakage flow varies with pressure to an exponent of about 0.65 for typical cracks and seams:</p>
<p class="formula">Q₂ = Q₁ × (P₂ ÷ P₁)^0.65</p>
<p>Example: a section tested at 4.0 in w.c. leaks 62 cfm. At the specified 6.0 in w.c., expected leakage is 62 × (6.0 ÷ 4.0)^0.65 = 62 × 1.30 = about 81 cfm (38 L/s). Use this only for small adjustments and only where the specification permits it; testing at the specified pressure is always preferred.</p>

<h2>Expressing and judging leakage</h2>
<p>Specifications use different ways to state allowable leakage. Make sure the calculation matches the one specified.</p>
<table>
<thead><tr><th>Criterion</th><th>What to calculate</th></tr></thead>
<tbody>
<tr><td>Maximum cfm at test pressure</td><td>Measured leakage compared directly</td></tr>
<tr><td>Percentage of design airflow</td><td>Leakage ÷ unit design airflow × 100</td></tr>
<tr><td>Leakage class per area</td><td>Leakage normalized by casing surface area and pressure, per the referenced standard or rating method</td></tr>
</tbody>
</table>
<p>AHRI 1350 provides a rating method for casing performance including leakage; see <a href="<?= url('guides/ahri-1350-casing-performance-spec') ?>">AHRI 1350 casing performance specification</a>. Check that the field acceptance criterion is achievable: field results normally run higher than factory results because of field joints.</p>

<h2>Common leak sources found in the field</h2>
<ul>
<li>Split joints where the gasket was dragged, cut or overlapped during setting.</li>
<li>Field penetrations for piping and conduit sealed with the wrong product or not at all.</li>
<li>Access doors racked by an uneven support, so gaskets do not seal at one corner.</li>
<li>Panel fasteners removed during installation and not replaced.</li>
<li>Unsealed drain and instrument connections.</li>
</ul>
<p>Correcting the support is often the only lasting fix for door leaks; see <a href="<?= url('guides/multi-section-leveling-tolerances') ?>">leveling tolerances for multi-section AHUs</a>.</p>
<?php guide_end([
    ['What pressure should an AHU casing be leak tested at in the field?', 'Use the pressure stated in the specification, which is usually the design operating pressure of the section being tested. Never test above the casing\'s rated pressure class.'],
    ['Why is field leakage higher than the factory test result?', 'Field joints at shipping splits, field penetrations, removed fasteners and door misalignment from uneven supports all add leakage that did not exist when the unit was tested whole in the factory.'],
    ['How do I find leaks in an air handler casing?', 'Hold the casing at a moderate test pressure and use theatrical smoke or a smoke pencil along split joints, door gaskets, panel seams and penetrations. Listening for whistling and a flashlight test for light leaks also help.'],
]);
