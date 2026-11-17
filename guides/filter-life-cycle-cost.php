<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('filter-life-cycle-cost'); ?>
<p class="lede">The cheapest filter to buy is rarely the cheapest to own. Over a year, the fan energy needed to push air through a filter bank often costs more than the filters themselves, so compare options on purchase price, change-out labour, disposal and fan energy together, using the average pressure drop each option runs at over its life.</p>

<h2>The four cost components</h2>
<ol>
<li><strong>Filter purchase</strong>: unit price × number of filters × changes per year.</li>
<li><strong>Labour</strong>: technician hours per change × labour rate × changes per year. Include travel, ladder or lift setup and unit shutdown where applicable.</li>
<li><strong>Disposal</strong>: per-filter or per-volume cost. Bulky rigid filters and bags can cost more to dispose of than compact media.</li>
<li><strong>Fan energy</strong>: the electrical energy required to overcome the filter's average resistance for the operating hours.</li>
</ol>
<p>Filter efficiency is a constraint, not a cost line. Compare only options that meet the required MERV; if one option has higher efficiency, that is a benefit you can note, but do not trade it away for cost without a deliberate decision.</p>

<h2>The fan energy equation</h2>
<p>The fan power attributable to the filter is the airflow times the filter's pressure drop, divided by the combined efficiency of fan, motor and drive:</p>
<p class="formula">Filter kW = CFM × ΔP(avg) × 0.746 ÷ (6356 × η(fan) × η(motor) × η(drive))</p>
<p class="formula">Annual kWh = filter kW × operating hours</p>
<p class="formula">Annual energy cost = annual kWh × electricity rate</p>
<p>ΔP(avg) is in inches of water and should be the average over the filter's service life at the actual design face velocity. Mid-life pressure drop, the average of initial and final, is a reasonable approximation; a loading curve gives a better one. Setting those values is covered in <a href="<?= url('guides/filter-pressure-drop-initial-final') ?>">initial, mid-life and final filter pressure drop</a>.</p>
<p>In a VAV system the airflow and pressure drop both vary; for an estimate, use average airflow and scale pressure drop with roughly the square of the airflow ratio, or run the analysis hour by hour in an energy model.</p>

<h2>Worked example: pleated filters vs mini-pleat V-bank</h2>
<p>A unit moves 20,000 CFM for 6,000 hours a year. Combined fan, motor and drive efficiency is 0.65 × 0.93 × 0.97 ≈ 0.59. Electricity costs $0.12/kWh and labour $90/h. Both options are MERV 13 and fit in the same frame, ten filter positions at about 500 fpm. The prices, lives and pressure drops below are illustrative; substitute quotes and manufacturer data for your project.</p>
<table>
<thead><tr><th>Item</th><th>Option A: 4 in pleated</th><th>Option B: 12 in V-bank</th></tr></thead>
<tbody>
<tr><td>Price per filter</td><td>$25</td><td>$90</td></tr>
<tr><td>Changes per year</td><td>4</td><td>1</td></tr>
<tr><td>Average pressure drop</td><td>0.60 in. w.c.</td><td>0.45 in. w.c.</td></tr>
<tr><td>Labour per change</td><td>1.5 h</td><td>2.0 h</td></tr>
<tr><td>Disposal per filter</td><td>$5</td><td>$10</td></tr>
</tbody>
</table>
<p><strong>Energy, Option A:</strong></p>
<p class="formula">kW = 20,000 × 0.60 × 0.746 ÷ (6356 × 0.59) = 8,952 ÷ 3,750 ≈ 2.39 kW</p>
<p class="formula">Annual cost = 2.39 × 6,000 × $0.12 ≈ $1,719</p>
<p><strong>Energy, Option B:</strong></p>
<p class="formula">kW = 20,000 × 0.45 × 0.746 ÷ 3,750 ≈ 1.79 kW</p>
<p class="formula">Annual cost = 1.79 × 6,000 × $0.12 ≈ $1,289</p>
<table>
<thead><tr><th>Annual cost</th><th>Option A</th><th>Option B</th></tr></thead>
<tbody>
<tr><td>Filters</td><td>10 × 4 × $25 = $1,000</td><td>10 × 1 × $90 = $900</td></tr>
<tr><td>Labour</td><td>4 × 1.5 × $90 = $540</td><td>1 × 2.0 × $90 = $180</td></tr>
<tr><td>Disposal</td><td>40 × $5 = $200</td><td>10 × $10 = $100</td></tr>
<tr><td>Fan energy</td><td>$1,719</td><td>$1,289</td></tr>
<tr><td><strong>Total</strong></td><td><strong>$3,459</strong></td><td><strong>$2,469</strong></td></tr>
</tbody>
</table>
<p>Even though each V-bank filter costs more than three times as much, the annual total is about 29% lower. Fan energy is the largest single line for Option A. Over ten years, ignoring escalation, the difference is about $9,900 for this one unit.</p>

<h2>Adding time value and escalation</h2>
<p>For a formal life-cycle cost, discount future annual costs to present value and escalate energy and labour at appropriate rates:</p>
<p class="formula">PV = annual cost × [1 − (1 + r)^−n] ÷ r</p>
<p>where r is the real discount rate and n is the analysis period in years. When the annual costs are steady, this simply multiplies each option by the same factor and does not change which is cheaper. It matters when options have different first costs, such as a deeper filter rack that requires a longer unit; see the broader method in <a href="<?= url('guides/ahu-life-cycle-cost-analysis') ?>">AHU life-cycle cost analysis</a>.</p>

<h2>Sensitivities to check</h2>
<ul>
<li><strong>Electricity rate and demand charges.</strong> Higher rates favour low pressure drop filters more strongly.</li>
<li><strong>Operating hours.</strong> A 24/7 unit (8,760 h) shifts the balance further toward low-resistance media than a school unit running 3,000 h.</li>
<li><strong>Actual filter life.</strong> Dust loads vary widely by site and season. Use local experience or monitored pressure drop to set realistic lives.</li>
<li><strong>Prefilter effect.</strong> A good prefilter extends final filter life; analyse the prefilter and final filter as a system.</li>
<li><strong>Labour access.</strong> Filters in a rooftop unit reached by a long walk, or that need a lift, have much higher labour per change.</li>
<li><strong>Fan efficiency.</strong> A fan array with EC motors at part load may have a different combined efficiency than the design-point value.</li>
</ul>
<p class="note">Different filter formats have different initial resistance, dust holding and depth. The physical tradeoffs between them are compared in <a href="<?= url('guides/bag-vs-rigid-box-vs-minipleat-filters') ?>">bag vs rigid box vs mini-pleat filters</a>.</p>
<?php guide_end([
    ['How do I calculate the energy cost of a filter?', 'Multiply airflow in CFM by the filter\'s average pressure drop in inches of water and by 0.746, then divide by 6356 times the fan, motor and drive efficiencies to get kW. Multiply by operating hours and the electricity rate for annual cost.'],
    ['Are expensive filters cheaper over time?', 'Often, yes. Filters with lower average pressure drop and longer life can cost much more per filter yet save more in fan energy, labour and disposal than they add in purchase price. The answer depends on operating hours, electricity rates and actual filter life.'],
    ['What pressure drop should I use in a filter life-cycle analysis?', 'Use the average pressure drop over the filter\'s service life at the actual face velocity. The average of initial and final resistance is a common approximation; a manufacturer\'s loading curve gives a more accurate value.'],
]);
