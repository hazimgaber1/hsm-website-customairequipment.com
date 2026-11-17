<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('filter-change-interval-optimization'); ?>
<p class="lede">The cheapest time to change filters is when the cost of the extra fan energy caused by loading equals the cost of the filters and labour, spread over the time they were in service. If pressure drop rises roughly linearly, the optimal run time is T* = √(2F ÷ (E × k)), and for a typical 20,000 cfm unit that often lands at a final pressure drop near, but below, the filter's rated maximum.</p>

<h2>The trade-off</h2>
<p>Changing filters often keeps fan energy low but spends more on filters and labour. Running them long saves on filters but spends more on fan energy as pressure drop climbs. Somewhere between, total cost per hour of operation is lowest. The calculation below finds that point for a given unit, using its own airflow, electricity price and loading rate.</p>
<p>This is a cost calculation for a chosen filter. Which filter type or efficiency to choose in the first place is a separate comparison handled in <a href="<?= url('guides/filter-life-cycle-cost') ?>">filter life-cycle cost</a>.</p>

<h2>Setting up the model</h2>
<h3>Fan power from filter pressure drop</h3>
<p>The extra fan power needed to push airflow Q through a pressure drop ΔP is:</p>
<p class="formula">kW = Q (cfm) × ΔP (in w.c.) ÷ (8520 × η)
η = combined fan, motor and drive efficiency</p>
<p>The constant 8520 comes from 6356 (cfm·in w.c. per air horsepower) divided by 0.746 kW per hp.</p>
<h3>Loading over time</h3>
<p>Assume pressure drop rises linearly from its clean value P₀ at a rate k (in w.c. per operating hour). Over a run time T, the average pressure drop is P₀ + kT/2. Real loading curves often steepen near the end of life, so the linear model is a reasonable approximation over the useful range.</p>
<h3>Cost per hour</h3>
<p>Let F be the cost of one change-out (filters, labour and disposal) and E the energy cost per inch of pressure drop per operating hour:</p>
<p class="formula">E ($ per in·h) = Q ÷ (8520 × η) × electricity price ($/kWh)
Cost per hour C(T) = F ÷ T + E × (P₀ + k × T ÷ 2)</p>
<p>Setting the derivative to zero gives the optimal run time and the pressure drop at which to change:</p>
<p class="formula">T* = √(2F ÷ (E × k))
ΔP at change = P₀ + k × T*</p>
<p>At the optimum, the hourly filter cost F ÷ T* equals the hourly cost of the loading energy E × k × T* ÷ 2. That equality is a handy check on the arithmetic.</p>

<h2>Worked example</h2>
<p>A constant-volume air handler moves 20,000 cfm (9,440 L/s) through a final filter bank of sixteen 24 × 24 in filters.</p>
<table>
<thead><tr><th>Input</th><th>Value</th></tr></thead>
<tbody>
<tr><td>Filter cost</td><td>16 × $45 = $720</td></tr>
<tr><td>Labour and disposal</td><td>2 h × $90 = $180</td></tr>
<tr><td>F, cost per change</td><td>$900</td></tr>
<tr><td>Clean pressure drop P₀</td><td>0.35 in w.c. (87 Pa)</td></tr>
<tr><td>Loading rate k (from past gauge readings)</td><td>0.10 in w.c. per 1,000 h = 0.0001 in/h</td></tr>
<tr><td>Fan, motor and drive efficiency η</td><td>0.60</td></tr>
<tr><td>Electricity price</td><td>$0.12 per kWh</td></tr>
<tr><td>Annual operating hours</td><td>6,000 h</td></tr>
</tbody>
</table>
<p><strong>Energy cost per inch-hour:</strong></p>
<p class="formula">kW per in = 20,000 ÷ (8520 × 0.60) = 3.91 kW
E = 3.91 × 0.12 = $0.469 per in·h</p>
<p><strong>Optimal run time:</strong></p>
<p class="formula">T* = √(2 × 900 ÷ (0.469 × 0.0001)) = √38,380,000 ≈ 6,200 h</p>
<p><strong>Pressure drop at change:</strong></p>
<p class="formula">ΔP = 0.35 + 0.0001 × 6,200 = 0.97 in w.c. (242 Pa)</p>
<p><strong>Check:</strong> F ÷ T* = 900 ÷ 6,200 = $0.145 per h; E × k × T* ÷ 2 = 0.469 × 0.0001 × 3,100 = $0.145 per h. They match.</p>

<h2>Comparing with a conservative change point</h2>
<p>Suppose the site currently changes these filters at 0.65 in w.c., which happens after (0.65 − 0.35) ÷ 0.0001 = 3,000 h.</p>
<table>
<thead><tr><th>Policy</th><th>Run time</th><th>Filter cost per h</th><th>Loading energy per h</th><th>Total variable cost per h</th></tr></thead>
<tbody>
<tr><td>Change at 0.65 in</td><td>3,000 h</td><td>$0.300</td><td>$0.070</td><td>$0.370</td></tr>
<tr><td>Change at 0.97 in (optimum)</td><td>6,200 h</td><td>$0.145</td><td>$0.145</td><td>$0.290</td></tr>
</tbody>
</table>
<p>The clean-filter energy, E × P₀, is the same in both cases and is left out. At 6,000 h per year the optimum saves about (0.370 − 0.290) × 6,000 ≈ $480 per year on this one bank. The cost curve is flat near the optimum, so changing anywhere between roughly 0.85 and 1.0 in costs almost the same.</p>

<h2>Measuring the loading rate</h2>
<p>The loading rate k is the input most people do not have. Get it from history: record the clean pressure drop after a change, then read the gauge or transmitter monthly with the fan at a consistent airflow. The slope of pressure drop against operating hours is k. Where loading accelerates late in the filter's life, fit k over the range between the clean value and the expected change point rather than over the whole history. Seasonal effects matter too: pollen, construction nearby or wildfire smoke can raise k several-fold for weeks, so recheck the optimum if conditions change.</p>

<h2>Limits that override the math</h2>
<ul>
<li><strong>Rated final resistance:</strong> never exceed the filter manufacturer's maximum recommended final pressure drop. Media can tear or bags can rupture beyond it.</li>
<li><strong>Fan capacity:</strong> the fan must be able to deliver design airflow at the higher pressure. If the fan reaches maximum speed first, airflow falls and the optimum is moot.</li>
<li><strong>Ventilation and IAQ requirements:</strong> some facilities, such as healthcare, set change points by policy.</li>
<li><strong>Prefilter and final filter interaction:</strong> optimize each bank separately; prefilters with low F often optimize at a lower final drop.</li>
<li><strong>VAV systems:</strong> fan power rises with loading differently when static pressure control varies speed; the linear energy model is still a fair estimate at typical operating airflow, but use average rather than design airflow for Q.</li>
</ul>
<p class="note">Good loading data makes this calculation useful. Trend filter pressure drop on the BAS and record clean and final readings at every change; see <a href="<?= url('guides/filter-replacement-procedure') ?>">how to replace AHU filters</a>. Gauges versus transmitters for this monitoring are compared in <a href="<?= url('guides/filter-gauges-vs-pressure-transmitters') ?>">filter gauges vs pressure transmitters</a>.</p>
<?php guide_end([
    ['When is the best time to change air handler filters?', 'When the hourly cost of the extra fan energy from loading equals the hourly cost of the change-out spread over the run time. With linear loading, the optimum run time is the square root of 2F divided by E times k, limited by the filter\'s rated final resistance.'],
    ['How much fan energy does a dirty filter use?', 'Extra fan power in kW equals airflow in cfm times the added pressure drop in inches of water, divided by 8520 times the combined fan, motor and drive efficiency. For 20,000 cfm at 60 percent efficiency, each inch costs about 3.9 kW.'],
    ['Is it cheaper to change filters early?', 'Not usually. Early changes save a little fan energy but spend more on filters and labour. The total cost curve is fairly flat near the optimum, which for many systems falls fairly close to the filter\'s rated final pressure drop.'],
]);
