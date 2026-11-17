<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('crah-vs-custom-ahu-vs-fan-wall'); ?>
<p class="lede">Perimeter CRAH units are the quickest to deploy and the most familiar, but they occupy white space and are limited in size. Central custom AHUs move cooling equipment out of the data hall and can add economizers and heat recovery. Fan walls sit in a gallery beside the hall and deliver very large airflows through a wall of coils and fans with no ductwork. The best choice depends on hall size, density, economizer strategy and how much floor area you can give up.</p>

<h2>The three approaches</h2>
<h3>Perimeter CRAH units</h3>
<p>A computer room air handler (CRAH) is a packaged unit with a chilled water coil, filters and fans, placed along the walls of the data hall. Traditional units discharge downward into a raised floor plenum; newer units also discharge horizontally or upward. Each unit is typically in the tens of tons of cooling capacity, so a large hall needs many of them.</p>
<h3>Central custom AHUs</h3>
<p>A central air handler, located in a mechanical room, on the roof or in a penthouse, supplies cool air to the hall through ductwork or a supply plenum and takes return air back. Because it is built to order, it can include airside economizer dampers, indirect evaporative modules, energy recovery, extensive filtration and redundant fan arrays.</p>
<h3>Fan walls</h3>
<p>A fan wall places a wall of cooling coils and an array of fans in a gallery or corridor that runs beside the data hall. Air passes through the coils and fans and directly into the hall or cold aisle, often with no ductwork at all, and returns through a ceiling plenum or hot aisle containment. Fan walls are built as custom field-assembled or modular sections and can be scaled to very high airflows. Fan arrays in general are described in <a href="<?= url('guides/what-is-a-fan-array') ?>">what a fan array is</a>.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Perimeter CRAH</th><th>Central custom AHU</th><th>Fan wall</th></tr></thead>
<tbody>
<tr><td>Location</td><td>Inside the data hall</td><td>Mechanical room, roof or penthouse</td><td>Gallery adjacent to the hall</td></tr>
<tr><td>White space consumed</td><td>Significant</td><td>None</td><td>None in the hall; gallery space needed</td></tr>
<tr><td>Unit size and count</td><td>Many small units</td><td>Fewer large units</td><td>Continuous wall, modular sections</td></tr>
<tr><td>Ductwork</td><td>None (raised floor or direct)</td><td>Supply and return ducts or plenums</td><td>Typically none</td></tr>
<tr><td>Fan pressure</td><td>Low to moderate</td><td>Higher, due to ducts, filters and economizer sections</td><td>Low; short air path</td></tr>
<tr><td>Economizer options</td><td>Usually waterside only</td><td>Airside, indirect evaporative, waterside</td><td>Mostly waterside; airside possible with intake design</td></tr>
<tr><td>Service access</td><td>Inside the secure hall</td><td>Outside the hall</td><td>Outside the hall, in the gallery</td></tr>
<tr><td>Redundancy</td><td>N+1 or N+2 units</td><td>Fan arrays plus unit redundancy</td><td>Fan array redundancy across the wall</td></tr>
<tr><td>Speed of deployment</td><td>Fast; catalog equipment</td><td>Longer lead and design time</td><td>Moderate; repeatable modules</td></tr>
<tr><td>Scalability by phase</td><td>Add units as load grows</td><td>Add units or plan large blocks</td><td>Build wall sections by phase</td></tr>
</tbody>
</table>

<h2>Energy and pressure</h2>
<p>Fan energy in a data center is continuous, so pressure drop matters. Fan walls usually have the shortest air path: coil, fans, room. That keeps total static pressure low and lets large, slow fans run efficiently. CRAH units also have short paths but use smaller fans, and raised floor plenums add resistance and uneven distribution. Central AHUs pay a pressure penalty for ductwork and for economizer dampers, filters and other sections, but they gain the most economizer hours when airside or indirect evaporative cooling is used. The net comparison depends on climate as much as on fan efficiency.</p>
<p class="formula">Fan input kW ≈ cfm × TSP ÷ (8,520 × η)</p>
<p>For 100,000 cfm, every 0.5 in. w.g. of added static at a combined efficiency of 65% adds about 9 kW of continuous fan power, around 79,000 kWh per year at full operation.</p>

<h2>White space and security</h2>
<p>In colocation and enterprise facilities, white space carries the revenue. CRAHs consume a portion of the hall perimeter and require service clearances, and every maintenance visit brings mechanical technicians into the secure hall. Both the central AHU and the fan wall move that equipment and those visits outside the hall, which is a major reason hyperscale and large colocation designs have shifted toward them.</p>

<h2>Density and airflow delivery</h2>
<p>Higher rack densities need more airflow per rack. Perimeter units throwing air into a raised floor struggle to distribute high airflow evenly over long distances. Fan walls deliver a uniform, low-velocity flow directly into a cold aisle or flooded room, and work well with hot aisle containment. Central AHUs can deliver high airflow but need large ducts or plenums. The airflow per kilowatt question is calculated in <a href="<?= url('guides/airflow-per-kw-it-load') ?>">calculating data center airflow per kW of IT load</a>. Containment choices, which interact with all three approaches, are compared separately in <a href="<?= url('guides/hot-aisle-vs-cold-aisle-containment') ?>">hot aisle vs cold aisle containment</a>.</p>

<h2>Choosing</h2>
<ul>
<li><strong>Perimeter CRAH</strong> suits small to medium rooms, retrofits into existing raised floor facilities, and projects needing fast deployment with standard equipment.</li>
<li><strong>Central custom AHU</strong> suits sites that want airside or indirect evaporative economizing, rooftop or penthouse equipment, or a facility where ductwork is already part of the architecture.</li>
<li><strong>Fan wall</strong> suits large halls with an adjacent gallery, high airflows, slab floors with containment, and owners who want low fan energy and maintenance outside the hall.</li>
</ul>
<p class="note">Whatever you choose, factory run-testing of airflow and fan power before shipment reduces commissioning surprises. Custom Air Equipment builds fan walls and custom AHUs for data halls and runs them in the factory; the <a href="<?= url('products/fan-arrays') ?>">fan array product page</a> describes configurations.</p>
<?php guide_end([
    ['What is the difference between a CRAH and a CRAC?', 'A CRAH uses chilled water in its coil, with cooling produced by a central plant. A CRAC contains its own compressor and refrigeration circuit. Both are perimeter units placed in or beside the data hall.'],
    ['Why are fan walls popular in large data centers?', 'They move cooling equipment out of the data hall, deliver large airflows with a short, low-pressure air path, and allow service outside the secure space. They also scale well in repeated modules.'],
    ['Do fan walls need ductwork?', 'Usually not. Fan walls typically discharge directly into the data hall or cold aisle and take return air through a ceiling plenum or hot aisle containment, which keeps static pressure low.'],
]);
