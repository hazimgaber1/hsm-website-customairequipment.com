<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('building-flush-out-filter-replacement'); ?>
<p class="lede">Protect the air handlers and ductwork during construction, run a flush-out with clean outdoor air once finishes are installed, and replace every filter with new ones before the building is turned over. The checklist below covers construction-phase filtration, how to plan and verify the flush-out volume, and the final filter change.</p>

<h2>Why this matters</h2>
<p>Construction generates large amounts of dust from drywall sanding, concrete cutting and finishing, and new materials release VOCs most strongly in their first weeks and months. Air handlers run during construction draw that dust into filters, coils, fans and ducts. A building that is handed over with loaded filters, dusty ducts and fresh off-gassing materials starts its life with poor indoor air quality and with equipment already fouled. Industry guidance such as the SMACNA IAQ Guidelines for Occupied Buildings Under Construction describes the protective measures in more detail.</p>

<h2>During construction</h2>
<ul>
<li>☐ Decide whether permanent AHUs will be used during construction at all. Temporary heating or ventilation avoids loading the permanent system; if permanent units run, the measures below are essential.</li>
<li>☐ Seal duct openings, diffusers, grilles and open AHU sections with plastic and tape until the area is clean.</li>
<li>☐ Install construction filters, commonly MERV 8, over every return grille and return opening if the system runs, so dust is captured at the room rather than at the AHU.</li>
<li>☐ Keep the AHU's own filter banks installed and sealed whenever the fan runs; never operate without filters.</li>
<li>☐ Inspect and change construction filters frequently; they load fast during sanding and cutting.</li>
<li>☐ Keep return plenums and open ceiling spaces from becoming dust paths into the return system.</li>
<li>☐ Store ductwork and AHU components sealed and off the ground on site.</li>
<li>☐ Schedule dusty work before installing absorbent materials such as carpet and ceiling tile.</li>
<li>☐ Keep records: dates of filter changes, photos of protection measures.</li>
</ul>

<h2>Before flush-out</h2>
<ul>
<li>☐ All finishes, furniture and systems furniture installed, or the flush-out plan accounts for items installed later.</li>
<li>☐ Construction cleaning completed: floors, horizontal surfaces, above-ceiling areas where accessible.</li>
<li>☐ Construction filters removed from returns.</li>
<li>☐ AHU filter banks replaced with new filters of the final specified efficiency, or with a dedicated set to be discarded after flush-out. Many projects specify MERV 13 or higher during flush-out.</li>
<li>☐ Testing, adjusting and balancing complete enough that outdoor airflow can be measured.</li>
<li>☐ Controls able to maintain the required space temperature and humidity during flush-out.</li>
</ul>

<h2>Planning the flush-out volume</h2>
<p>A flush-out delivers a defined total volume of outdoor air per unit of floor area while keeping space conditions within set limits. The target volume, minimum temperature and maximum humidity come from the project's green building program, owner standard or specification. Some programs use a figure of 14,000 ft³ of outdoor air per ft² of floor area (about 4,270 m³/m²), with a temperature floor and humidity ceiling; take the exact values and any occupied flush-out option from the program version that applies.</p>
<p class="formula">Required hours = (target volume per ft² × floor area) ÷ (outdoor airflow in CFM × 60)</p>
<p>Example: a 50,000 ft² building, a target of 14,000 ft³/ft² and 20,000 CFM of outdoor air available from its AHUs:</p>
<p class="formula">Hours = (14,000 × 50,000) ÷ (20,000 × 60) = 700,000,000 ÷ 1,200,000 ≈ 583 h</p>
<p>That is about 24 days of continuous operation. Many projects find the schedule impact larger than expected and plan accordingly, for example by starting flush-out of completed floors early or by increasing outdoor airflow where coil capacity allows.</p>

<h2>During flush-out</h2>
<ul>
<li>☐ Run AHUs at the planned outdoor airflow, continuously if the plan requires it.</li>
<li>☐ Measure outdoor airflow at the start, with airflow stations or a traverse, and record it.</li>
<li>☐ Trend outdoor airflow, space temperature and relative humidity throughout; the trend is the evidence of compliance.</li>
<li>☐ Watch coil capacity. Large outdoor air volumes in winter or humid summers may exceed heating or dehumidification capacity, and maintaining the humidity limit may require reducing airflow and extending the duration.</li>
<li>☐ Protect coils from freezing in cold weather; flush-out at high outdoor air fractions is a high-risk condition for coils. See <a href="<?= url('guides/freeze-protection-during-construction') ?>">freeze protection during construction</a>.</li>
<li>☐ Monitor filter pressure drop; residual construction dust may load filters quickly.</li>
<li>☐ Keep exhaust fans running in balance so the building does not go strongly negative or positive.</li>
</ul>

<h2>After flush-out and before turnover</h2>
<ul>
<li>☐ Replace all AHU filters with new filters of the specified efficiency. Do not hand over a building with filters that carried construction dust or the flush-out load.</li>
<li>☐ Inspect and clean coils and drain pans if dust reached them; clean or vacuum fan sections and plenums.</li>
<li>☐ Inspect ductwork at accessible points; clean where construction dust is found.</li>
<li>☐ Record each bank's new clean filter pressure drop and mark it on the gauge as the baseline.</li>
<li>☐ Provide the owner with a spare filter set where the contract requires it.</li>
<li>☐ Include the flush-out report, trend data, filter change records and filter schedule in the turnover documents. The broader document list is in <a href="<?= url('guides/turnover-documentation-checklist') ?>">the turnover documentation checklist</a>.</li>
</ul>

<h2>Common shortfalls</h2>
<table>
<thead><tr><th>Shortfall</th><th>Consequence</th></tr></thead>
<tbody>
<tr><td>Permanent AHUs run without return filters during drywall work</td><td>Dust loaded coils and ducts; cleaning cost before turnover</td></tr>
<tr><td>Flush-out started before finishes installed</td><td>Later materials off-gas into occupied building</td></tr>
<tr><td>Outdoor airflow assumed, not measured</td><td>Flush-out volume cannot be demonstrated</td></tr>
<tr><td>Humidity limit exceeded in summer flush-out</td><td>Moisture absorbed into new materials; flush-out may need repeating</td></tr>
<tr><td>Flush-out filters left in place at turnover</td><td>Owner starts with partly loaded filters and wrong baseline</td></tr>
</tbody>
</table>
<p class="note">Filter efficiency and format for the permanent installation should already be fixed before construction ends; see <a href="<?= url('guides/filter-selection-checklist') ?>">the AHU filter selection checklist</a>.</p>
<?php guide_end([
    ['What is a building flush-out?', 'A building flush-out runs the ventilation system with a defined volume of outdoor air after finishes are installed and before occupancy, to dilute and remove VOCs released by new materials and residual construction dust, while keeping temperature and humidity within set limits.'],
    ['How long does a building flush-out take?', 'It depends on the target outdoor air volume, floor area and outdoor airflow. A 50,000 square foot building with 20,000 CFM of outdoor air and a target of 14,000 cubic feet per square foot needs about 580 hours, or roughly 24 days of continuous operation.'],
    ['Should filters be replaced after flush-out?', 'Yes. Filters used during construction and flush-out carry dust and should be replaced with new filters of the specified efficiency before turnover, so the owner starts with clean filters and an accurate clean pressure drop baseline.'],
]);
