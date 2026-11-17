<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-vs-rtu-vs-doas'); ?>
<p class="lede">Choose a custom AHU when airflow is large, requirements are demanding or the unit must last decades; choose a packaged rooftop unit when the building is low-rise, loads are ordinary and first cost rules; choose a DOAS when you want ventilation and latent load handled separately from space sensible cooling. Many buildings combine them.</p>

<h2>Three different answers to the same question</h2>
<p>Every building needs ventilation air, sensible cooling and heating, and humidity control. The three system types divide those jobs differently.</p>
<ul>
<li><strong>Custom or central-station AHU:</strong> one air handler supplies mixed or outdoor air to many zones, using chilled water, hot water, steam or a remote refrigeration plant. It handles ventilation, sensible and latent load together.</li>
<li><strong>Packaged rooftop unit (RTU):</strong> a self-contained box with compressors, condenser, gas or electric heat and a supply fan. It also handles all loads together, usually for one zone or a small VAV system.</li>
<li><strong>Dedicated outdoor air system (DOAS):</strong> a unit that conditions only outdoor air, typically to a dry, neutral or cool supply condition, and delivers it to spaces whose sensible load is handled by other equipment such as fan coils, chilled beams, VRF or radiant panels.</li>
</ul>
<p>A DOAS is a system architecture, not a box type. It can be built as a custom AHU, a packaged unit or a semi-custom product. The decision covered here is which architecture fits the building.</p>

<h2>Side-by-side comparison</h2>
<table>
<thead><tr><th>Factor</th><th>Custom AHU (mixed air)</th><th>Packaged RTU</th><th>DOAS plus terminal equipment</th></tr></thead>
<tbody>
<tr><td>Typical airflow range</td><td>Small to very large; tens of thousands of cfm per unit are common</td><td>Small to moderate; larger sizes exist but options narrow</td><td>Outdoor air only, so the unit is smaller than a full-load AHU</td></tr>
<tr><td>Cooling source</td><td>Central chilled water or remote DX</td><td>Integral compressors</td><td>Chilled water, DX or heat pump in the DOAS; separate source for terminals</td></tr>
<tr><td>Humidity control</td><td>Good, with reheat and humidifier options</td><td>Limited unless hot-gas reheat is added</td><td>Strong, because the DOAS is sized to dry outdoor air</td></tr>
<tr><td>Ventilation accuracy</td><td>Depends on outdoor air measurement and damper control</td><td>Often approximate at low airflow</td><td>Direct: the DOAS delivers the ventilation rate itself</td></tr>
<tr><td>First cost</td><td>Higher per cfm, especially with central plant</td><td>Lowest for small buildings</td><td>Moderate to high because two systems are installed</td></tr>
<tr><td>Service life</td><td>Long, with rebuildable components</td><td>Shorter; usually replaced as a whole</td><td>DOAS similar to AHU; terminals vary</td></tr>
<tr><td>Space use</td><td>Mechanical room or penthouse plus shafts</td><td>Roof only, minimal interior space</td><td>Smaller ducts, but terminals in every zone</td></tr>
<tr><td>Acoustic flexibility</td><td>High; attenuators and plenum options</td><td>Limited; units sit directly over spaces</td><td>Terminal noise must be managed in each room</td></tr>
</tbody>
</table>

<h2>Where each one wins</h2>
<h3>Custom AHU</h3>
<p>Hospitals, laboratories, large schools, universities, airports, data centers and high-rise offices tend to land on central-station air handlers. These buildings need high airflow, strict filtration or pressure control, redundancy, low noise or a unit shaped to fit an existing room. A custom unit can also hold energy recovery, humidification and fan arrays in one casing, and its components can be replaced over a 25-year or longer life rather than discarding the whole unit.</p>
<h3>Packaged RTU</h3>
<p>Single-storey retail, warehouses with office areas, small schools and strip malls often suit packaged rooftop units. No central plant is needed, installation is fast and each unit serves its own zone, so a failure affects only part of the building. The tradeoffs show up in humidity control, efficiency at part load and noise directly over occupied rooms.</p>
<h3>DOAS</h3>
<p>Separating ventilation from space cooling works well where outdoor air loads are a large share of the total, such as classrooms, dormitories, hotels and offices with chilled beams or VRF. Because the DOAS handles latent load, the terminal equipment can run dry, which is essential for chilled beams and radiant systems. It also makes ventilation rates easy to verify against ASHRAE 62.1.</p>

<h2>Questions that settle the choice</h2>
<ol>
<li><strong>Is there a central plant?</strong> Existing chilled and hot water make AHUs or a chilled-water DOAS much cheaper to add.</li>
<li><strong>How big is the building and how tall?</strong> Multi-storey buildings with long duct runs favour central air handlers; one-storey roofs favour RTUs.</li>
<li><strong>How demanding is humidity or pressure control?</strong> Healthcare, labs and natatoriums rarely suit stock rooftop units.</li>
<li><strong>What is the expected building life?</strong> Owners planning to hold a building for decades usually favour equipment they can rebuild.</li>
<li><strong>Which energy code applies?</strong> ASHRAE 90.1, NECB or a state code may require energy recovery or economizers that shift the economics; check the edition adopted in your jurisdiction.</li>
<li><strong>What does the terminal system look like?</strong> If chilled beams, radiant or VRF are planned, a DOAS is almost always part of the design.</li>
</ol>
<p class="note">Hybrids are common: a custom AHU can be configured as the DOAS, or a 100% outdoor air unit can feed a mixed-air AHU. Design considerations for outdoor-air-only units are covered in the <a href="<?= url('guides/100-percent-outdoor-air-ahu-design') ?>">100% outdoor air guide</a>.</p>

<h2>When the existing system is rooftop units</h2>
<p>Many owners arrive at this decision while replacing aging RTUs. Swapping like for like is fast, but it is also the moment to consider consolidating several RTUs into one custom unit or a DOAS. That path is examined in <a href="<?= url('guides/replacing-rtus-with-custom-ahus') ?>">replacing RTUs with custom AHUs</a>. If a central-station unit looks like the right fit, the <a href="<?= url('products/custom-air-handlers') ?>">custom air handler range</a> shows the configurations available.</p>
<?php guide_end([
    ['Is a DOAS the same thing as an air handler?', 'A DOAS is a system approach in which one unit conditions only outdoor air. That unit is often built as an air handler, but it can also be a packaged unit. The defining feature is that it delivers ventilation air separately from the equipment that handles space sensible load.'],
    ['Are rooftop units cheaper than air handlers?', 'For small, single-storey buildings without a central plant, packaged rooftop units usually have the lowest first cost. For large buildings, or where a chilled water plant already exists, central air handlers can be competitive and typically last longer.'],
    ['Why use a DOAS with chilled beams or VRF?', 'Chilled beams and most VRF indoor units are not designed to remove much moisture. A DOAS dries the outdoor air enough to carry the latent load, so the terminal equipment only handles sensible cooling and stays dry.'],
    ['Can a custom AHU replace several rooftop units?', 'Yes, where the roof structure, duct routes and zoning allow it. Consolidating units can improve efficiency, humidity control and maintenance access, but it changes the zoning and needs a structural and duct review.'],
]);
