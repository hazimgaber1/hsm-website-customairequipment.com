<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-life-cycle-cost-analysis'); ?>
<p class="lede">Life-cycle cost (LCC) adds the first cost of an air handler to the present value of everything it will cost to run, maintain and eventually replace over the study period, so options with different purchase prices and operating costs can be compared on one number.</p>

<h2>The formula</h2>
<p class="formula">LCC = C_initial + PV(energy) + PV(maintenance) + PV(replacements) − PV(residual value)</p>
<p>Each future cost is converted to present value using a discount rate. For a recurring annual cost A that is the same every year:</p>
<p class="formula">PV = A × [1 − (1 + r)^−N] ÷ r</p>
<p>For a one-time cost F in year n (such as a mid-life motor replacement):</p>
<p class="formula">PV = F ÷ (1 + r)^n</p>
<p>Where r is the real discount rate and N is the study period. Using a real rate (net of general inflation) lets you keep costs in today's dollars. If energy prices are expected to rise faster than general inflation, apply a separate escalation to the energy line. Agencies such as NIST publish discount and escalation guidance used in US federal analyses, and many owners have their own rates.</p>

<h2>Cost elements</h2>
<table>
<thead><tr><th>Element</th><th>What to include</th></tr></thead>
<tbody>
<tr><td>Initial cost</td><td>Equipment, freight, rigging, installation, electrical and controls connections, startup, testing and balancing, engineering</td></tr>
<tr><td>Energy</td><td>Fan, cooling, heating and humidification energy attributable to the unit's design; demand charges</td></tr>
<tr><td>Maintenance</td><td>Filters, belts, lubrication, coil cleaning, inspections, labour</td></tr>
<tr><td>Replacements</td><td>Motors, drives, bearings, actuators, energy recovery media at expected intervals</td></tr>
<tr><td>Residual value</td><td>Remaining value of the unit at the end of the study period, if the study period is shorter than unit life</td></tr>
</tbody>
</table>
<p>Fan energy is often the largest single difference between AHU options; the method for calculating it at part load is in <a href="<?= url('guides/comparing-fan-energy-between-bids') ?>">comparing fan energy between AHU bids</a>. Typical service lives for setting the study period are discussed in <a href="<?= url('guides/ahu-life-expectancy') ?>">AHU life expectancy</a>.</p>

<h2>Worked example: two options for a 30,000 CFM unit</h2>
<p>Option A is a compact unit with higher face velocities and a single belt-driven fan. Option B is a larger unit with lower face velocities and a direct-drive fan array. Study period 25 years, real discount rate 3%.</p>
<table>
<thead><tr><th>Input</th><th>Option A</th><th>Option B</th></tr></thead>
<tbody>
<tr><td>Installed cost</td><td>$310,000</td><td>$355,000</td></tr>
<tr><td>Annual fan energy</td><td>165,000 kWh</td><td>118,000 kWh</td></tr>
<tr><td>Energy rate (real, flat)</td><td>$0.11/kWh</td><td>$0.11/kWh</td></tr>
<tr><td>Annual maintenance</td><td>$6,500</td><td>$4,800</td></tr>
<tr><td>Replacements</td><td>Motor and drive at year 12: $18,000</td><td>Fan motors at year 15: $22,000</td></tr>
<tr><td>Residual value at year 25</td><td>$0</td><td>$0</td></tr>
</tbody>
</table>
<p><strong>Present worth factor, 25 years at 3%:</strong> (1.03)^25 = 2.094, so (1.03)^−25 = 0.4776. P/A = (1 − 0.4776) ÷ 0.03 = 17.41.</p>
<p><strong>Option A</strong></p>
<ul>
<li>Annual energy cost: 165,000 × $0.11 = $18,150. PV = 18,150 × 17.41 = $315,990.</li>
<li>Maintenance PV: 6,500 × 17.41 = $113,170.</li>
<li>Replacement PV: 18,000 ÷ (1.03)^12 = 18,000 ÷ 1.426 = $12,620.</li>
<li>LCC = 310,000 + 315,990 + 113,170 + 12,620 = <strong>$751,780</strong>.</li>
</ul>
<p><strong>Option B</strong></p>
<ul>
<li>Annual energy cost: 118,000 × $0.11 = $12,980. PV = 12,980 × 17.41 = $225,980.</li>
<li>Maintenance PV: 4,800 × 17.41 = $83,570.</li>
<li>Replacement PV: 22,000 ÷ (1.03)^15 = 22,000 ÷ 1.558 = $14,120.</li>
<li>LCC = 355,000 + 225,980 + 83,570 + 14,120 = <strong>$678,670</strong>.</li>
</ul>
<p>Option B costs $45,000 more to install but about $73,000 less over 25 years in present-value terms. The extra first cost is recovered through lower energy and maintenance.</p>
<p class="note">Values here are illustrative. Use project-specific energy simulations or fan load profiles, and the owner's actual discount rate and utility tariff.</p>

<h2>Sensitivity: test the answer</h2>
<p>LCC results depend on assumptions, so check how robust the ranking is:</p>
<ul>
<li><strong>Discount rate.</strong> Higher rates reduce the weight of future savings. Re-run at the owner's upper bound.</li>
<li><strong>Energy price.</strong> Test a range, including escalation above inflation.</li>
<li><strong>Operating hours.</strong> A 24/7 hospital and a school differ by a large factor in fan hours.</li>
<li><strong>Study period.</strong> Shorter periods favour lower first cost.</li>
</ul>
<p>If the preferred option holds across reasonable ranges, the decision is robust. If the ranking flips, present both outcomes and the break-even assumption to the decision-maker.</p>

<h2>Items that are hard to quantify</h2>
<p>Some benefits do not fit neatly in the calculation: easier maintenance access, better acoustic performance, redundancy that avoids downtime, lower casing leakage that improves indoor air quality. These can be listed alongside the LCC result, or assigned estimated values where the owner can support them (for example, the cost of an hour of downtime in a data hall). Normalizing competing bids before running LCC is a separate step covered in <a href="<?= url('guides/normalizing-ahu-bids') ?>">how to compare and normalize AHU bids</a>.</p>

<h2>Choosing the study period</h2>
<p>The study period should reflect how long the owner expects to keep the equipment, not the longest life any component might reach. Institutional owners who hold buildings for decades often use 20 to 30 years for air handlers; developers who expect to sell may use much shorter periods. If the study period is shorter than the unit's expected life, include a residual value so that the longer-lived option is not penalized. If it is longer, include the replacement cost of the whole unit at the end of its life within the period.</p>

<h2>Presenting the result</h2>
<ol>
<li>State the study period, discount rate, energy rates and sources.</li>
<li>Show each option's cost elements in a table, in present value.</li>
<li>Show the sensitivity results.</li>
<li>Summarize qualitative factors separately.</li>
</ol>
<?php guide_end([
    ['What is included in AHU life-cycle cost?', 'Life-cycle cost includes the installed first cost plus the present value of energy, maintenance and component replacements over the study period, less any residual value at the end of the period.'],
    ['What discount rate should be used for life-cycle cost analysis?', 'Use the owner\'s required real discount rate if they have one. Public agencies often publish rates for their analyses. Run a sensitivity check at higher and lower rates to see whether the preferred option changes.'],
    ['Why can a more expensive AHU have a lower life-cycle cost?', 'Larger units with lower face velocities and more efficient fans use less energy every year. Over a long study period, the present value of those savings can exceed the higher first cost.'],
]);
