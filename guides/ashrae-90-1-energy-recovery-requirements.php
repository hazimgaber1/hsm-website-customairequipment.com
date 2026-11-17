<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ashrae-90-1-energy-recovery-requirements'); ?>
<p class="lede">To find out whether ASHRAE 90.1 requires exhaust air energy recovery, determine the climate zone, the system's design outdoor air percentage, its design supply airflow and its annual operating hours, then look up that combination in the applicable energy recovery table of the edition your jurisdiction has adopted. If the system's airflow meets or exceeds the tabulated value and no exception applies, recovery is mandatory.</p>

<h2>Step 1: Confirm which edition applies</h2>
<p>Requirements have changed significantly between editions of 90.1, including the operating hour split, the airflow thresholds and the way the required recovery is measured. Recent editions require a minimum enthalpy recovery ratio rather than the older effectiveness wording. The building code or energy code adopted by your state, province or municipality names the governing edition, and it may also allow an alternative path such as the IECC.</p>
<ol>
<li>Find the energy code adopted for the project location and permit date.</li>
<li>Confirm whether it references 90.1 directly, the IECC, or a local amendment.</li>
<li>Get the matching edition of 90.1 and its exhaust air energy recovery provisions and tables in the HVAC section.</li>
</ol>
<p class="note">Canadian projects are usually governed by the NECB or a provincial code rather than 90.1. The comparison is in <a href="<?= url('guides/necb-vs-ashrae-90-1') ?>">NECB vs ASHRAE 90.1</a>.</p>

<h2>Step 2: Determine the climate zone</h2>
<ol>
<li>Look up the county (US) or location in the climate zone listing that accompanies the edition you are using. Use the code's own listing, not a map from a different edition.</li>
<li>Note both the number (thermal zone) and the letter (moisture regime: A humid, B dry, C marine). The energy recovery tables use both.</li>
</ol>

<h2>Step 3: Calculate the design outdoor air percentage</h2>
<p>The percentage is the design outdoor airflow divided by the design supply airflow at the condition the code specifies, normally the full design airflow.</p>
<p class="formula">% OA = design outdoor air cfm ÷ design supply air cfm × 100</p>
<ol>
<li>Use the outdoor airflow from the ventilation calculation, not a rounded schedule value, unless the schedule value is what will be delivered.</li>
<li>For units with economizers, use the minimum design outdoor air, not the maximum economizer flow.</li>
<li>Place the result in the correct percentage band in the table. Tables group outdoor air percentages in ranges, so a small change in airflow can move a system into a different band.</li>
</ol>

<h2>Step 4: Determine the operating hours category</h2>
<p>Recent editions separate systems by annual operating hours, with stricter thresholds for systems that run nearly continuously. Hospitals, data center support spaces, some laboratories and 24-hour facilities typically fall in the continuous category. Offices and schools usually do not.</p>
<ol>
<li>Estimate annual fan run hours from the occupancy schedule.</li>
<li>Pick the table that matches that category.</li>
</ol>

<h2>Step 5: Read the threshold and compare</h2>
<ol>
<li>In the correct table, find the row for the climate zone and the column for the outdoor air percentage band.</li>
<li>Read the design supply airflow threshold. Some cells say recovery is not required, and others give a cfm value.</li>
<li>If the system's design supply airflow is at or above the threshold, energy recovery is required unless an exception applies.</li>
<li>Note the required minimum recovery ratio. In recent editions, the device must achieve a stated enthalpy recovery ratio (50 percent in several editions) at heating and cooling design conditions. Confirm the value and the conditions in your edition.</li>
</ol>

<h3>Example</h3>
<p>A school AHU in a cold, humid zone has 12,000 cfm design supply and 6,000 cfm design outdoor air, so 50 percent outdoor air. It runs about 3,500 hours per year, well below the continuous category. Suppose the table for that climate zone and outdoor air band shows a threshold lower than 12,000 cfm. The system then requires recovery, and the device must meet the minimum recovery ratio at design conditions. Had the threshold been above 12,000 cfm, recovery would be optional.</p>
<p class="warn">Do not split one system into two units just to fall below a threshold. Code officials generally assess the system as designed to serve the space, and the energy savings are real anyway.</p>

<h2>Step 6: Check the exceptions</h2>
<p>Every edition lists exceptions. Common categories include:</p>
<ul>
<li>Laboratory exhaust systems that comply through an alternative laboratory energy path.</li>
<li>Systems serving spaces that are not cooled and are heated only to a low setpoint.</li>
<li>Exhaust that contains contaminants making recovery impractical or hazardous, such as some kitchen hood and process exhaust.</li>
<li>Systems where most outdoor air heating comes from site-recovered or site-solar energy.</li>
<li>Cases where the largest source of exhaust is too small or too far from the outdoor air intake, typically expressed as a percentage of design outdoor air.</li>
<li>Some climate zones where only heating or only cooling recovery would be justified.</li>
</ul>
<p>The exact wording and limits differ by edition, so quote the exception text in your code compliance documentation. Where exhaust quality is the reason, document the air class; see <a href="<?= url('guides/exhaust-air-class-recovery-restrictions') ?>">exhaust air classes and when wheels are not allowed</a>.</p>

<h2>Step 7: Document compliance</h2>
<ol>
<li>Record climate zone, outdoor air percentage, supply airflow, operating hours category and the threshold read from the table.</li>
<li>Show the selected device's recovery ratio at the required design conditions, preferably from AHRI 1060 certified data.</li>
<li>Note bypass or speed control for economizer operation, which recent editions also address.</li>
<li>Include this in the energy code compliance forms required by the authority having jurisdiction.</li>
</ol>
<p>Whether the recovery is cost-effective beyond the mandate is a separate question, answered in <a href="<?= url('guides/heat-recovery-payback-calculation') ?>">calculating energy recovery payback</a>.</p>
<?php guide_end([
    ['When does ASHRAE 90.1 require energy recovery?', 'When a system\'s design supply airflow meets or exceeds the threshold in the energy recovery table for its climate zone, outdoor air percentage and operating hours category, and no exception applies. The values vary by edition.'],
    ['What recovery effectiveness does ASHRAE 90.1 require?', 'Recent editions require a minimum enthalpy recovery ratio, 50 percent in several editions, at heating and cooling design conditions. Check the wording and conditions in the edition adopted for your project.'],
    ['Does ASHRAE 90.1 energy recovery apply in Canada?', 'Most Canadian projects follow the NECB or a provincial energy code instead. Some jurisdictions allow 90.1 as an alternative path, so confirm what your authority having jurisdiction has adopted.'],
]);
