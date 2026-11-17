<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('design-margins-without-oversizing'); ?>
<p class="lede">Apply each safety factor once, at the stage where the uncertainty actually lives, write it down, and make sure the next person in the chain knows it is already there; most oversized air handlers are not the result of one large margin but of several modest ones stacked on top of each other by different people.</p>

<h2>How margins compound</h2>
<p>Consider a supply fan where four people each add what they think is a reasonable cushion:</p>
<ul>
<li>The load calculation adds 10% to the cooling load, so design airflow rises 10%.</li>
<li>The duct designer adds 15% to the calculated external static.</li>
<li>The manufacturer selects the fan with some speed headroom for "future static."</li>
<li>The motor is rounded up to the next size, then up again for service factor.</li>
</ul>
<p>Because duct static varies with the square of airflow, the extra 10% airflow alone raises static by about 21%. Add the 15% static margin on top:</p>
<p class="formula">Static ratio = (1.10)² × 1.15 = 1.21 × 1.15 = 1.39</p>
<p class="formula">Fan power ratio ≈ airflow ratio × static ratio = 1.10 × 1.39 = 1.53</p>
<p>The fan is now selected for about 53% more air power than the calculated duty, before the motor is rounded up. In operation, a VFD will slow it down, but the fan may run far from its best efficiency point, the motor runs lightly loaded, coils and casings are larger than needed and the first cost rises across the board.</p>

<h2>Step 1: List every uncertainty</h2>
<ol>
<li>Write down the uncertainties that actually exist on this project: future occupancy or load growth, unknown existing duct static, filter loading, coil fouling, altitude, weather data, equipment selection tolerances.</li>
<li>For each, estimate its likely size. A replacement project with an unmeasured duct system has much more static uncertainty than new construction with fully designed ductwork.</li>
<li>Decide whether each uncertainty is real or already covered. Design-day weather data, for example, already reflects a percentile of conditions; adding margin on top of it double-counts.</li>
</ol>

<h2>Step 2: Assign each margin to one owner and one place</h2>
<table>
<thead><tr><th>Uncertainty</th><th>Where to apply margin</th><th>Who applies it</th></tr></thead>
<tbody>
<tr><td>Future load growth</td><td>Airflow or capacity, explicitly stated</td><td>Engineer, with owner agreement</td></tr>
<tr><td>Duct static uncertainty</td><td>External static on the schedule</td><td>Duct designer</td></tr>
<tr><td>Filter loading</td><td>Filter pressure drop basis (mid-life or dirty)</td><td>Engineer, stated on schedule</td></tr>
<tr><td>Coil fouling</td><td>Fouling factor in coil selection, if any</td><td>Engineer, stated in specification</td></tr>
<tr><td>Fan selection tolerance</td><td>Manufacturer's rating tolerance, not added margin</td><td>Manufacturer</td></tr>
<tr><td>Motor sizing</td><td>Motor sized to maximum brake horsepower at the stated conditions</td><td>Manufacturer, per specification</td></tr>
</tbody>
</table>
<p class="note">A useful rule: margins belong to the uncertainty, not to the person. If the duct designer adds static margin, the engineer should not add more to the fan selection for the same reason.</p>

<h2>Step 3: Size each margin to the uncertainty</h2>
<ol start="4">
<li><strong>Loads.</strong> Use the load program's inputs honestly rather than adding a percentage at the end. If occupancy or equipment loads are uncertain, run a sensitivity case and size for that case explicitly.</li>
<li><strong>Airflow.</strong> Derive from the load at the design supply temperature. If future growth is a real requirement, state the future airflow separately so the fan and coils can be selected for both.</li>
<li><strong>Static pressure.</strong> For new ductwork, a modest margin on calculated external static is common. For existing ductwork, measure instead of guessing; see <a href="<?= url('guides/existing-duct-static-mismatch') ?>">troubleshooting airflow shortfall caused by existing ductwork</a>.</li>
<li><strong>Filters.</strong> Select the fan at a stated filter condition. Mid-life drop is a common choice; dirty drop is conservative and should be used knowingly, not as hidden margin.</li>
<li><strong>Coils.</strong> Use realistic fluid temperatures. Selecting at an optimistic chilled water temperature and then adding capacity margin is a common double count.</li>
</ol>

<h2>Step 4: Document margins on the schedule</h2>
<ol start="9">
<li>Add a note stating which values include margin and how much. Sample note: "External static pressure includes 10% allowance on calculated duct losses. No additional margin to be added by manufacturer."</li>
<li>State the filter pressure drop basis used for fan selection.</li>
<li>State whether scheduled capacities include future growth.</li>
<li>Tell the manufacturer explicitly whether to select fans at scheduled conditions or with additional speed reserve.</li>
</ol>
<p>The schedule fields and note language for this are in <a href="<?= url('guides/ahu-equipment-schedule-fields') ?>">AHU equipment schedule: required fields</a>.</p>

<h2>Step 5: Check the result against the base case</h2>
<ol start="13">
<li>Calculate the fan duty without any margin, then with all margins applied, and compare.</li>
<li>If the margin-included fan power is more than about a quarter above the base case, review each margin again. That threshold is a judgement call, not a rule; the point is to look.</li>
<li>Check that the fan operates near its best efficiency at the expected normal duty, not just at the margin-inflated design point.</li>
<li>Check coil face velocity and pressure drop at the expected airflow, not only the maximum.</li>
</ol>

<h2>Where margin genuinely helps</h2>
<p>Some margin is wise. Units serving critical spaces benefit from redundancy, which is a better form of margin than oversizing; fan arrays with N+1 provide capacity reserve that is used only when needed. Variable-speed fans can absorb moderate static uncertainty without penalty, provided the fan is not selected so far from its efficient range that normal operation suffers. And where future load growth is planned, sizing distribution and space for it, while selecting fans and coils for current needs plus a defined upgrade path, often costs less than buying the capacity up front. How far a unit can turn down is a separate topic in <a href="<?= url('guides/ahu-turndown-minimum-airflow') ?>">AHU turndown and minimum airflow</a>.</p>
<?php guide_end([
    ['Why do AHUs end up oversized?', 'Usually because several people each add modest safety factors to load, airflow, static and motor size without knowing the others have done the same. Since static rises with the square of airflow, these margins compound quickly.'],
    ['How much margin should I add to external static pressure?', 'For newly designed ductwork, a modest allowance on calculated losses is common. For existing ductwork, measure rather than adding a large margin. State the margin on the schedule so it is not added again.'],
    ['Is redundancy better than oversizing?', 'Often yes. A fan array with N+1 redundancy keeps capacity reserve for failures while the fans run near their efficient point in normal operation, rather than running an oversized fan at low load all the time.'],
]);
