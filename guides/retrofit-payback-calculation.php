<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('retrofit-payback-calculation'); ?>
<p class="lede">Simple payback divides the net installed cost of a retrofit by its annual savings; net present value discounts each year of savings back to today and subtracts the cost, so it shows whether the project beats the owner's cost of capital over the equipment's life.</p>

<h2>The two formulas</h2>
<p class="formula">Simple payback (years) = Net installed cost ÷ Annual net savings</p>
<p class="formula">NPV = −C₀ + Σ [ S_t ÷ (1 + r)^t ] for t = 1 to N</p>
<p>Where C₀ is the net installed cost at time zero (after any incentive received up front), S_t is the net savings in year t, r is the discount rate, and N is the analysis period in years. When savings are the same every year, the sum collapses to a uniform series present worth factor:</p>
<p class="formula">P/A = [1 − (1 + r)^−N] ÷ r     so     NPV = −C₀ + S × P/A</p>
<p>Simple payback is easy to explain and good for screening. NPV is the better decision tool because it accounts for the time value of money and for savings that continue after payback is reached.</p>

<h2>Building the inputs</h2>
<h3>Net installed cost</h3>
<p>Include equipment, demolition, rigging, installation, electrical and controls changes, testing and balancing, engineering, permits and a contingency. Subtract incentives only when they are reasonably certain; how incentive programs are structured is covered in <a href="<?= url('guides/retrofit-incentives-rebates') ?>">utility incentives and rebates for AHU retrofits</a>.</p>
<h3>Annual energy savings</h3>
<p>For fan retrofits, the core calculation is the difference in input power multiplied by operating hours and the energy rate. Use measured power of the existing fan wherever possible, not nameplate horsepower; nameplate overstates actual draw on most oversized motors. For variable-speed systems, use a load profile (hours at each airflow) rather than a single average; the method for comparing fan selections at part load is laid out in <a href="<?= url('guides/comparing-fan-energy-between-bids') ?>">comparing fan energy between AHU bids</a>.</p>
<p class="formula">Annual kWh saved = Σ (kW_old − kW_new) × hours at each operating point</p>
<p>Demand charges matter in many tariffs. If the retrofit reduces peak kW, add the demand saving: kW reduction × demand rate × billing months.</p>
<h3>Maintenance and avoided costs</h3>
<p>Direct-drive fans eliminate belt replacement and reduce belt-related labour; new coils can eliminate recurring leak repairs. Include these only if they are documented in maintenance records. Avoided costs, such as an imminent emergency replacement, can be included but should be shown separately so the decision-maker can see their weight.</p>

<h2>Worked example: fan array retrofit</h2>
<p>An existing 40,000 CFM (18.9 m³/s) VAV air handler has a single belt-driven housed fan. The owner is considering replacing it with a direct-drive fan array.</p>
<table>
<thead><tr><th>Input</th><th>Value</th></tr></thead>
<tbody>
<tr><td>Measured average input power, existing fan</td><td>40 kW</td></tr>
<tr><td>Estimated average input power, new array (same airflow profile)</td><td>28 kW</td></tr>
<tr><td>Annual operating hours</td><td>6,000 h</td></tr>
<tr><td>Blended energy rate</td><td>$0.12/kWh</td></tr>
<tr><td>Documented maintenance saving (belts, alignment)</td><td>$1,500/yr</td></tr>
<tr><td>Installed cost</td><td>$85,000</td></tr>
<tr><td>Confirmed utility incentive</td><td>$10,000</td></tr>
<tr><td>Discount rate</td><td>6%</td></tr>
<tr><td>Analysis period</td><td>15 years</td></tr>
</tbody>
</table>
<p><strong>Energy saving:</strong> (40 − 28) kW × 6,000 h = 72,000 kWh/yr. At $0.12/kWh that is $8,640/yr.</p>
<p><strong>Total annual saving:</strong> $8,640 + $1,500 = $10,140/yr.</p>
<p><strong>Net cost:</strong> $85,000 − $10,000 = $75,000.</p>
<p><strong>Simple payback:</strong> $75,000 ÷ $10,140 = 7.4 years.</p>
<p><strong>Present worth factor:</strong> (1.06)^15 = 2.397, so (1.06)^−15 = 0.417. P/A = (1 − 0.417) ÷ 0.06 = 9.71.</p>
<p><strong>NPV:</strong> −$75,000 + $10,140 × 9.71 = −$75,000 + $98,460 = <strong>+$23,460</strong>.</p>
<p>A positive NPV at 6% means the retrofit returns more than the owner's cost of capital over 15 years. The discounted payback (the year cumulative discounted savings first exceed $75,000) falls a little past year 10, since P/A at 10 years is 7.36 and at 11 years is 7.89.</p>

<h2>Adding escalation and comparing options</h2>
<p>If energy prices are expected to rise at rate e, discount each year's saving individually or use a modified rate. For a uniform escalation, savings in year t are S₁ × (1 + e)^(t−1). A spreadsheet with one row per year is the clearest way to show this, and it handles irregular items like a mid-life drive replacement.</p>
<p>When comparing two retrofit options (for example, fans only versus fans plus new coils), calculate NPV for each against the same baseline. The option with the higher NPV is the better investment, even if its simple payback is longer. Incremental analysis, comparing the extra cost of the bigger option against its extra savings, shows whether the added scope pays its way on its own.</p>
<p class="note">Payback is a forecast. Verification of savings after the work is complete is a separate exercise; see <a href="<?= url('guides/retrofit-savings-measurement-ipmvp') ?>">measuring retrofit savings with IPMVP options</a>.</p>

<h2>Common mistakes</h2>
<ul>
<li>Using motor nameplate horsepower as the baseline, which inflates savings.</li>
<li>Counting incentive money that has not been pre-approved.</li>
<li>Ignoring the cost of the outage, temporary HVAC or after-hours labour.</li>
<li>Picking an analysis period longer than the remaining life of the parts that are not replaced, such as the casing.</li>
<li>Comparing options on simple payback alone when their lives or savings profiles differ.</li>
</ul>
<?php guide_end([
    ['How do you calculate simple payback for an AHU retrofit?', 'Divide the net installed cost, after confirmed incentives, by the annual net savings in energy and maintenance. For example, a $75,000 net cost saving $10,140 per year pays back in about 7.4 years.'],
    ['Why use NPV instead of simple payback?', 'NPV discounts future savings to present value and counts savings after the payback year, so it shows whether a project beats the cost of capital over its life. Simple payback ignores both and can favour short-lived options.'],
    ['What discount rate should I use for retrofit NPV?', 'Use the owner\'s cost of capital or required rate of return, which their finance group usually sets. Public and institutional owners often use lower rates than commercial owners, so confirm the figure before running the analysis.'],
]);
