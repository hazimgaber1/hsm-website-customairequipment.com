<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('reading-ahu-selection-report'); ?>
<p class="lede">A manufacturer's AHU selection report is a stack of linked calculations: unit dimensions and weights, a static pressure build-up, fan selection, coil and filter performance, sound data and electrical data; reading it well means checking that every page uses the same airflow, altitude and conditions, and that the numbers on each page add up to the next.</p>

<h2>The cover page: inputs that drive everything</h2>
<p>The first page usually lists the tag, design airflow, external static pressure, altitude, arrangement and unit size. Verify these before reading anything else, because every later page inherits them.</p>
<ul>
<li><strong>Airflow.</strong> Matches the schedule? Check whether it is stated at standard air or actual conditions.</li>
<li><strong>Altitude.</strong> Units selected at sea level for a site at elevation will be off on fan, coil and motor performance. Air density falls with elevation; a site around 5,000 ft (1,500 m) has roughly 83% of sea-level density.</li>
<li><strong>External static.</strong> Matches the schedule, and is it split correctly between supply and return?</li>
<li><strong>Unit size and casing.</strong> Cross-section dimensions, panel construction, and whether the unit is indoor or outdoor.</li>
</ul>

<h2>Dimensions and weights</h2>
<p>A section-by-section table lists length, height, width and weight of each section, plus totals. Check that shipping sections suit rigging and access, and that operating weight (including water in coils and humidifiers) is given separately from shipping weight. Section lengths also reveal whether components have the spacing they need; a fan section much shorter than the manufacturer's usual inlet and discharge clearances deserves a question.</p>

<h2>Static pressure build-up</h2>
<p>This is the most important page for fan selection. It lists each component's pressure drop at the design airflow and adds them to the external static to give total static pressure.</p>
<table>
<thead><tr><th>Component</th><th>What to check</th></tr></thead>
<tbody>
<tr><td>Dampers and louvers</td><td>Drop at actual face velocity through the damper</td></tr>
<tr><td>Filters</td><td>Whether the value is clean, mid-life or dirty; the schedule usually specifies which</td></tr>
<tr><td>Coils</td><td>Wet or dry drop for cooling coils; should match the coil page</td></tr>
<tr><td>Energy recovery</td><td>Drop on each airstream at that stream's airflow</td></tr>
<tr><td>Sound attenuators</td><td>Drop at the face velocity through the attenuator</td></tr>
<tr><td>Casing and cabinet effects</td><td>Allowance for internal losses, inlet and discharge effects</td></tr>
<tr><td>External static</td><td>Matches the schedule</td></tr>
</tbody>
</table>
<p>The total should equal the static pressure on the fan page. If it does not, ask why. Filter allowance is a common place for differences between bids; some selections use clean filter drop and others use dirty. More on building this budget is in <a href="<?= url('guides/total-static-pressure-budget') ?>">total static pressure budget</a>.</p>

<h2>Fan performance</h2>
<p>The fan page shows the wheel type and size, number of fans, operating speed, brake horsepower, efficiency and a fan curve with the operating point. Things to verify:</p>
<ul>
<li>Airflow and static match the build-up.</li>
<li>The operating point sits in a stable region of the curve, comfortably to the right of the peak pressure point.</li>
<li>Speed is within the wheel's maximum rated speed, with margin for any static allowance.</li>
<li>Motor horsepower exceeds brake horsepower with reasonable margin, and accounts for drive losses if belt-driven.</li>
<li>For fan arrays, performance is shown both with all fans running and with one fan out if redundancy is specified.</li>
<li>Efficiency basis is stated: static or total efficiency, fan alone or fan and motor. Fan energy index (FEI) may be shown where applicable.</li>
</ul>

<h2>Coil performance</h2>
<p>Each coil has its own page with entering and leaving air conditions, fluid conditions, capacity, face area, face velocity, rows, fin spacing and pressure drops. Check:</p>
<ul>
<li>Entering air conditions are consistent with the mixed air or preheat leaving conditions from the upstream component.</li>
<li>Face velocity is within the schedule limit; cooling coils above about 500 fpm (2.5 m/s) start to risk moisture carryover depending on fin type and drain pan design.</li>
<li>Leaving air conditions meet the schedule and the psychrometric intent.</li>
<li>Fluid pressure drop and flow are acceptable for the piping and pump design.</li>
<li>Rating basis is stated, for example AHRI 410 certified or within the certified range.</li>
</ul>
<p class="formula">Check: Total capacity (Btu/h) ≈ 4.5 × CFM × (h_entering − h_leaving)</p>
<p>A quick hand calculation with the stated airflow and enthalpies should come close to the printed capacity. A large discrepancy usually means a mismatch in airflow basis or altitude.</p>

<h2>Sound data</h2>
<p>Sound power by octave band is shown for discharge, inlet and casing-radiated paths. Confirm the source of the data (test per AMCA 300 for the fan, and how unit effects are accounted for) and whether attenuator insertion loss is included. Sound power is not room sound; converting it requires an acoustic analysis.</p>

<h2>Electrical data</h2>
<p>Look for voltage, phase and frequency, full-load amps of each motor, minimum circuit ampacity and maximum overcurrent protection, plus the number of power connections. Compare with the electrical design. For fan arrays, confirm whether a single-point connection is provided.</p>

<h2>What the report does not tell you</h2>
<p>A selection report shows predicted performance; it does not show construction details, options not included in the calculation, or exceptions to the specification. Those appear in submittal drawings and the manufacturer's exceptions list, which the <a href="<?= url('guides/ahu-submittal-review-checklist') ?>">AHU submittal review checklist</a> covers.</p>
<p class="note">When comparing reports from different manufacturers, line up the static pressure build-ups side by side. Differences there explain most of the differences in fan power.</p>
<?php guide_end([
    ['What should I check first on an AHU selection report?', 'Check the cover page inputs: airflow, altitude, external static pressure and unit size. Every later page depends on these, so an error there propagates through fans, coils and motors.'],
    ['Why does the fan static not match the external static on the schedule?', 'The fan must overcome both external static and all internal component losses, such as filters, coils and dampers. The selection report adds these in the static pressure build-up to give total static at the fan.'],
    ['How can I quickly check a cooling coil capacity on a selection report?', 'Multiply 4.5 by the airflow and by the difference between entering and leaving air enthalpy in Btu per pound. The result should be close to the printed total capacity if the airflow basis and altitude are consistent.'],
]);
