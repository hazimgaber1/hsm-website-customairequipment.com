<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('retrofit-savings-measurement-ipmvp'); ?>
<p class="lede">Verified savings are never measured directly; they are the difference between what the building would have used without the retrofit (the adjusted baseline) and what it actually used afterward, and the International Performance Measurement and Verification Protocol (IPMVP) gives four options, A to D, for making that comparison credible.</p>

<h2>The core equation</h2>
<p class="formula">Avoided energy = (Baseline period energy − Reporting period energy) ± Routine adjustments ± Non-routine adjustments</p>
<p>The baseline period is a representative stretch of operation before the retrofit. The reporting period is after it. <strong>Routine adjustments</strong> account for factors that change predictably and are expected to vary, such as weather, occupancy or operating hours. <strong>Non-routine adjustments</strong> account for one-off changes unrelated to the retrofit, such as a floor being vacated or a new server room added.</p>
<p>In practice the baseline is usually expressed as a model, often a regression against an independent variable, so it can be "adjusted" to reporting-period conditions:</p>
<p class="formula">Avoided energy = Adjusted baseline energy − Reporting period energy</p>
<p>This is a post-installation exercise. Estimating savings before committing to the project is a separate calculation covered in <a href="<?= url('guides/retrofit-payback-calculation') ?>">calculating payback for AHU retrofit projects</a>.</p>

<h2>The four options</h2>
<table>
<thead><tr><th>Option</th><th>Measurement boundary</th><th>What is measured</th><th>Suits AHU projects such as</th></tr></thead>
<tbody>
<tr><td>A: Retrofit isolation, key parameter measurement</td><td>The retrofitted equipment</td><td>Key parameter (often power) measured; others (often hours) stipulated</td><td>Constant-speed fan replacement with predictable hours</td></tr>
<tr><td>B: Retrofit isolation, all parameter measurement</td><td>The retrofitted equipment</td><td>All parameters measured, typically by continuous metering</td><td>VFD additions and fan arrays with variable operation</td></tr>
<tr><td>C: Whole facility</td><td>The utility meter or a whole-building submeter</td><td>Total facility energy, modelled against weather and other drivers</td><td>Multiple measures with savings large relative to facility use</td></tr>
<tr><td>D: Calibrated simulation</td><td>Equipment or whole facility</td><td>Simulated energy, calibrated to measured data</td><td>Complex retrofits, or when baseline data is missing</td></tr>
</tbody>
</table>
<p class="note">Option A carries the most risk in the stipulated values. Choose stipulations that are defensible and agreed in the measurement and verification plan before work starts.</p>

<h2>Worked example: Option A for a fan replacement</h2>
<p>A constant-speed supply fan is replaced by a fan array at the same airflow. True power is measured with a power meter over several days before and after.</p>
<ul>
<li>Baseline measured fan power: 38.5 kW</li>
<li>Reporting period measured fan power: 25.2 kW</li>
<li>Stipulated annual operating hours (from the building schedule, agreed in the plan): 6,240 h</li>
</ul>
<p class="formula">Savings = (kW_baseline − kW_reporting) × hours = (38.5 − 25.2) × 6,240</p>
<p>Savings = 13.3 kW × 6,240 h = 82,992 kWh per year, about 83,000 kWh.</p>
<p>Because hours are stipulated, any error in the schedule passes straight into the result. If the building actually runs longer, savings are understated, and vice versa.</p>

<h2>Worked example: Option B for a VFD retrofit</h2>
<p>A drive is added to a fan that previously ran at constant speed. Both power and hours vary after the retrofit, so both must be measured.</p>
<ol>
<li>Measure baseline power at constant speed: 30.0 kW, consistent across the baseline period.</li>
<li>Meter the fan continuously after the retrofit. Over a 30-day reporting period, the meter records 12,600 kWh, and run-time logging records 600 hours of operation.</li>
<li>Adjusted baseline for the same 600 hours: 30.0 kW × 600 h = 18,000 kWh.</li>
<li>Savings for the period: 18,000 − 12,600 = 5,400 kWh, or 30% of the adjusted baseline.</li>
</ol>
<p>Annual savings come from summing reporting periods across a full year, which captures seasonal variation in fan speed.</p>

<h2>Worked example: Option C with weather adjustment</h2>
<p>A building replaces two air handlers and adds energy recovery. Monthly whole-building electricity in the baseline year is regressed against cooling degree days (CDD), giving:</p>
<p class="formula">Baseline kWh per month = 42,000 + 95 × CDD</p>
<p>In a reporting-period month with 210 CDD, the metered consumption is 54,300 kWh.</p>
<p>Adjusted baseline = 42,000 + 95 × 210 = 42,000 + 19,950 = 61,950 kWh.</p>
<p>Savings = 61,950 − 54,300 = 7,650 kWh for the month.</p>
<p>Option C works only when savings are large enough to be distinguished from normal variation in the facility's use. If the retrofit saves only a small fraction of total facility energy, noise in the regression can hide the result; IPMVP guidance discusses how to assess this, and Option B is often a better fit for single-AHU projects.</p>

<h2>Option D in brief</h2>
<p>Option D uses an energy model calibrated to measured data, typically utility bills or interval data, and sometimes submetered equipment data. It suits projects where the baseline no longer exists to measure (the old unit was removed before metering) or where multiple interacting measures make isolation impractical. The model's credibility depends on calibration quality; ASHRAE Guideline 14 is often referenced for calibration criteria.</p>

<h2>Building a measurement and verification plan</h2>
<ol>
<li>Choose the option and define the measurement boundary.</li>
<li>Document the baseline period, conditions and data, before demolition.</li>
<li>List the independent variables and the routine adjustment method.</li>
<li>State all stipulated values and their source.</li>
<li>Specify metering equipment, accuracy and calibration.</li>
<li>Define the reporting period and reporting frequency.</li>
<li>Describe how non-routine adjustments will be handled.</li>
<li>Agree the plan with the owner, and with the utility if an incentive depends on it; see <a href="<?= url('guides/retrofit-incentives-rebates') ?>">utility incentives and rebates for AHU retrofits</a>.</li>
</ol>
<p class="warn">The single most common M&amp;V failure on AHU retrofits is not measuring the old fan before it is removed. Meter the baseline first.</p>
<?php guide_end([
    ['What are the IPMVP options?', 'Option A isolates the retrofit and measures key parameters while stipulating others. Option B isolates the retrofit and measures all parameters. Option C uses whole-facility meters with adjustments. Option D uses a calibrated simulation model.'],
    ['Which IPMVP option is best for a fan retrofit?', 'Option A works for constant-speed fans with predictable hours, since measured power and stipulated hours give a reliable result. Option B is better for VFD or variable-speed systems where both power and run time vary.'],
    ['What is an adjusted baseline?', 'It is the energy the facility or equipment would have used during the reporting period without the retrofit, calculated by adjusting the baseline model for reporting-period conditions such as weather or operating hours.'],
]);
