<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('filter-pressure-drop-initial-final'); ?>
<p class="lede">Select the fan so it can still deliver design airflow when every filter bank is at its planned change-out (final) pressure drop, and check that the motor covers that point. Use mid-life pressure drop, roughly the average of initial and final, as the typical operating condition for energy and acoustic estimates. Selecting on clean filters leaves the unit short of air for most of the filter's life.</p>

<h2>Three numbers for every filter bank</h2>
<ul>
<li><strong>Initial (clean) pressure drop</strong>: the resistance of a new filter at the design face velocity, from the manufacturer's data.</li>
<li><strong>Final (change-out) pressure drop</strong>: the resistance at which the filter will be replaced. This is a design decision set by the engineer or owner, not necessarily the maximum the filter can withstand. Manufacturers publish a recommended maximum final resistance; the design change-out point should be at or below that.</li>
<li><strong>Mid-life pressure drop</strong>: an approximation of the average resistance over the filter's service life. A common simplification is the arithmetic mean of initial and final.</li>
</ul>
<p class="formula">Mid-life ΔP ≈ (initial ΔP + final ΔP) ÷ 2</p>
<p>Real filters do not load linearly; resistance rises slowly at first and faster near the end of life. The mean is a reasonable design value, but where filter cost analysis matters, a loading curve from the manufacturer gives a better average.</p>

<h2>How each number is used</h2>
<table>
<thead><tr><th>Purpose</th><th>Filter pressure drop to use</th><th>Reason</th></tr></thead>
<tbody>
<tr><td>Fan selection (capability)</td><td>Final, all banks</td><td>Fan must deliver design airflow just before change-out</td></tr>
<tr><td>Motor sizing</td><td>Final, all banks, at design airflow</td><td>Highest sustained brake horsepower occurs here</td></tr>
<tr><td>Energy estimate</td><td>Mid-life or a loading-curve average</td><td>Represents typical operating hours</td></tr>
<tr><td>Fan power limitation compliance</td><td>As defined by the energy code</td><td>Codes have their own rules and credits for filter pressure drop</td></tr>
<tr><td>Acoustic data</td><td>Mid-life for typical; final for worst case</td><td>Sound changes with operating point</td></tr>
<tr><td>Minimum operating condition</td><td>Initial</td><td>Fan speed is lowest; check stability and control range</td></tr>
</tbody>
</table>
<p>For energy code fan power calculations, follow the method in the code itself; ASHRAE 90.1 handles filter pressure drop through its own allowances. See <a href="<?= url('guides/ashrae-90-1-fan-power-limitation') ?>">ASHRAE 90.1 fan power limitation</a>.</p>

<h2>Worked example</h2>
<p>A 20,000 CFM air handler has a MERV 8 prefilter and a MERV 14 final filter. All other components, plus external static pressure, total 2.35 in. w.c. Filter data at the design face velocity:</p>
<table>
<thead><tr><th>Bank</th><th>Initial</th><th>Design final</th><th>Mid-life</th></tr></thead>
<tbody>
<tr><td>MERV 8 pleated prefilter</td><td>0.25 in. w.c.</td><td>0.75 in. w.c.</td><td>0.50 in. w.c.</td></tr>
<tr><td>MERV 14 rigid final filter</td><td>0.40 in. w.c.</td><td>1.00 in. w.c.</td><td>0.70 in. w.c.</td></tr>
<tr><td>Total filters</td><td>0.65</td><td>1.75</td><td>1.20</td></tr>
</tbody>
</table>
<p class="formula">Total static pressure, clean = 2.35 + 0.65 = 3.00 in. w.c.</p>
<p class="formula">Total static pressure, mid-life = 2.35 + 1.20 = 3.55 in. w.c.</p>
<p class="formula">Total static pressure, dirty = 2.35 + 1.75 = 4.10 in. w.c.</p>
<p>The fan is selected to deliver 20,000 CFM at 4.10 in. w.c. Using the brake horsepower relationship with a fan static efficiency of 65%:</p>
<p class="formula">BHP = CFM × TSP ÷ (6356 × η)</p>
<p class="formula">BHP(dirty) = 20,000 × 4.10 ÷ (6356 × 0.65) ≈ 19.8 hp</p>
<p class="formula">BHP(mid-life) = 20,000 × 3.55 ÷ (6356 × 0.65) ≈ 17.2 hp</p>
<p class="formula">BHP(clean) = 20,000 × 3.00 ÷ (6356 × 0.65) ≈ 14.5 hp</p>
<p>The motor must handle about 20 hp plus drive losses and the designer's margin; a 25 hp motor would be typical. The energy estimate uses about 17 hp. Efficiency also changes slightly across the operating range, which a fan selection program will show; the fixed 65% here simplifies the arithmetic. Fan horsepower calculations in general are covered in <a href="<?= url('guides/fan-brake-horsepower-calculation') ?>">fan brake horsepower calculation</a>.</p>

<h2>Why clean-filter selections cause problems</h2>
<p>If the same fan were selected at 3.00 in. w.c. and run at a fixed speed, airflow would fall as the filters loaded. Using the fan and system curves, the loss can be significant by the time filters reach final resistance. In VAV systems the fan speeds up to compensate only if it has the speed and motor capacity to do so. A unit selected on clean filters will reach the top of its fan curve or its motor rating before the filters are due for change, and the operator will change filters early to keep airflow up, raising filter cost.</p>

<h2>Choosing the final resistance</h2>
<p>A higher design final resistance extends filter life but costs fan energy and requires a larger motor. A lower final resistance saves energy but means more frequent changes. Common practice is to set final resistance at around two times initial for pleated and rigid filters, or at the manufacturer's recommended value, whichever is lower. The economic tradeoff is examined in <a href="<?= url('guides/filter-life-cycle-cost') ?>">filter life-cycle cost</a>; how often to actually change filters is an operational question outside this calculation.</p>
<p class="note">Record each bank's initial, mid-life and final pressure drops on the schedule and on the filter gauge label. Operators then know when to change filters, and the commissioning agent knows what conditions the fan was selected for.</p>

<h2>Velocity matters</h2>
<p>All three values depend on face velocity. A filter bank sized at 500 fpm (2.5 m/s) will have a higher initial pressure drop than the same filters at 400 fpm (2.0 m/s), and it will load faster. Use filter data at the actual design face velocity, not the catalogue nominal airflow, when building the static pressure budget.</p>
<?php guide_end([
    ['Should I select the fan on clean or dirty filter pressure drop?', 'Select the fan to deliver design airflow with all filters at their planned final, or dirty, pressure drop and size the motor for that point. Use mid-life pressure drop for energy estimates. A clean-filter selection leaves the unit short of air as filters load.'],
    ['How do I calculate mid-life filter pressure drop?', 'A common approximation is the average of the initial and final pressure drops. For example, a filter with 0.4 in. w.c. initial and 1.0 in. w.c. final has a mid-life value of about 0.7 in. w.c. A manufacturer\'s loading curve gives a more accurate average.'],
    ['What final pressure drop should filters be changed at?', 'Many designers set the change-out point at about twice the initial pressure drop or the manufacturer\'s recommended final resistance, whichever is lower. Higher values extend filter life but raise fan energy and motor size.'],
]);
