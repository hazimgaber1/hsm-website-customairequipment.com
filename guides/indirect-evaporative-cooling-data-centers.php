<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('indirect-evaporative-cooling-data-centers'); ?>
<p class="lede">An indirect evaporative cooling (IEC) unit cools data hall return air by passing it through a heat exchanger whose other side carries outdoor air wetted with water. The hall air never mixes with outdoor air, so the servers are protected from outdoor particles, gases and humidity, while evaporation lets the unit cool to within a few degrees of the outdoor wet bulb. A DX or chilled water trim coil covers the hottest, most humid hours.</p>

<h2>How an IEC unit is arranged</h2>
<p>An IEC unit has two separate airstreams that cross inside a heat exchanger:</p>
<ul>
<li><strong>Process air:</strong> hot return air from the data hall enters, passes through one side of the exchanger, is cooled, passes through any trim coil, and is supplied back to the hall by the supply fans.</li>
<li><strong>Scavenger (secondary) air:</strong> outdoor air enters, passes through the other side of the exchanger, and is exhausted. In wet mode, water is sprayed or distributed onto the scavenger side surfaces; it evaporates and cools those surfaces.</li>
</ul>
<p>Because the process air stays inside the building envelope, the data hall operates as a closed recirculating system with very low outdoor air intake. Filtration and corrosion concerns associated with direct outdoor air are largely avoided; that direct alternative is described in <a href="<?= url('guides/airside-economizer-data-centers') ?>">airside economizers for data centers</a>.</p>

<h2>Exchanger materials</h2>
<table>
<thead><tr><th>Exchanger type</th><th>Characteristics</th><th>Considerations</th></tr></thead>
<tbody>
<tr><td>Polymer tube or plate</td><td>Corrosion-proof, light, tolerant of wet operation and water chemistry</td><td>Lower thermal conductivity, so more surface is needed; check fire properties and UV exposure</td></tr>
<tr><td>Aluminum plate, coated</td><td>High heat transfer, compact</td><td>Coating integrity is critical in wet operation; water treatment and coating inspection required</td></tr>
<tr><td>Aluminum plate, uncoated</td><td>Lowest cost</td><td>Generally unsuitable for continuous wet operation</td></tr>
</tbody>
</table>
<p>Plate exchangers used as precooling elements in general HVAC are covered in <a href="<?= url('guides/indirect-evaporative-precooling-plates') ?>">indirect evaporative precooling with plates</a>; data center IEC units apply the same physics to a recirculating white space at much larger scale.</p>

<h2>Operating modes</h2>
<ol>
<li><strong>Dry mode.</strong> In cool weather, the exchanger works as an air-to-air heat exchanger. No water is used. Scavenger fan speed modulates to control process air leaving temperature.</li>
<li><strong>Wet mode.</strong> When dry mode cannot meet the setpoint, water is applied to the scavenger side. Evaporation lowers the scavenger surface temperature toward the outdoor wet bulb, increasing cooling.</li>
<li><strong>Wet mode with trim.</strong> When the outdoor wet bulb is too high for evaporation alone, the trim coil (DX or chilled water) provides the remaining cooling.</li>
<li><strong>Full mechanical.</strong> In extreme conditions, or when water is unavailable, the trim system carries the whole load. Sizing trim for full load gives resilience against water outages.</li>
</ol>

<h2>Estimating performance</h2>
<p>In wet mode, the process air leaving temperature can be estimated from the wet-bulb effectiveness of the exchanger:</p>
<p class="formula">T leaving = T return − ε wb × (T return − T wb, outdoor)</p>
<p>Example: return air at 95°F (35°C), outdoor wet bulb 68°F (20°C), and a wet-bulb effectiveness of 0.75.</p>
<p class="formula">T leaving = 95 − 0.75 × (95 − 68) = 95 − 20.3 = 74.7°F</p>
<p>If the supply setpoint is 75°F, no trim is needed. At an outdoor wet bulb of 76°F, the same exchanger delivers 95 − 0.75 × 19 = 80.8°F, and the trim coil must remove the remaining 5.8°F. With 50,000 cfm of process air, that is about 1.08 × 50,000 × 5.8 ≈ 313,000 Btu/h, roughly 26 tons of trim.</p>
<p>In dry mode, use dry-bulb effectiveness and the outdoor dry bulb instead. The higher the return temperature, the more useful the exchanger becomes, which is why IEC units are almost always paired with hot aisle containment.</p>
<p class="note">Ask manufacturers for tested effectiveness at the actual airflow ratio between scavenger and process air. Effectiveness drops as the scavenger airflow falls, and performance at the design wet bulb is what determines trim size.</p>

<h2>Trim cooling sizing</h2>
<p>The trim system is sized from the hottest design wet bulb the owner wants to cover, often an extreme value such as a 0.4% or more conservative design wet bulb, or a long-term maximum. Some owners size trim for a partial load, accepting a temporary excursion into the allowable range during rare extremes; others size it for full load to cover water outages, exchanger fouling and maintenance. Agree the basis with the owner and state it in the design.</p>

<h2>Water, scaling and freezing</h2>
<ul>
<li><strong>Water use.</strong> Evaporation consumes water, and bleed-off to control mineral concentration adds to it. The metric for comparing designs is described in <a href="<?= url('guides/water-usage-effectiveness') ?>">calculating water usage effectiveness</a>.</li>
<li><strong>Water treatment.</strong> Hardness, silica and biological growth must be controlled. Polymer exchangers tolerate more, but spray nozzles, sumps and distribution media still scale. Legionella risk management applies to any system that creates water droplets.</li>
<li><strong>Freezing.</strong> In cold climates, the unit runs dry in winter and the wet system is drained. Automatic drain-down and heat tracing on any water lines that remain filled are needed.</li>
<li><strong>Fouling.</strong> Outdoor air dust deposits on wet surfaces; scavenger-side filters reduce it. Access for cleaning is essential.</li>
</ul>

<h2>Layout and integration</h2>
<p>IEC units are physically large because they include two airstreams, a large exchanger and often a trim section. They are usually placed on the roof or along exterior walls with ducts or openings to the hall. The supply side should include fan arrays with redundancy and filtration of the recirculated air. Scavenger intake and exhaust must be separated to avoid short-circuiting warm, moist exhaust back into the intake, particularly on crowded roofs with many units side by side.</p>
<p>Controls coordinate scavenger fan speed, water application, trim stages and supply fan speed to hold supply temperature and hall pressure, with sequences that ramp between modes so server inlet temperatures change gradually.</p>
<?php guide_end([
    ['How is indirect evaporative cooling different from direct evaporative cooling?', 'Direct evaporative cooling adds water to the supply air, raising its humidity. Indirect cooling evaporates water on the outdoor air side of a heat exchanger, so the data hall air is cooled without any added moisture or outdoor contaminants.'],
    ['What temperature can an IEC unit achieve?', 'In wet mode it can cool return air to within several degrees of the outdoor wet bulb, depending on exchanger effectiveness. With a 95°F return, 68°F wet bulb and 75% effectiveness, leaving air is about 75°F.'],
    ['Why do IEC units need DX or chilled water trim?', 'On hot, humid days the outdoor wet bulb is too high for evaporation alone to reach the supply setpoint. The trim coil removes the remaining load and provides backup during water outages or maintenance.'],
]);
