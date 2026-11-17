<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('water-usage-effectiveness'); ?>
<p class="lede">Water usage effectiveness (WUE) is the annual site water used for the data center, in litres, divided by the annual IT energy in kilowatt-hours. For evaporative systems, estimate the water from the heat rejected evaporatively, add blowdown based on cycles of concentration, add humidification and any other site water use, and divide by IT energy.</p>

<h2>The definition</h2>
<p>The Green Grid introduced WUE, and ISO/IEC 30134-9 defines it as part of the international data center key performance indicator series:</p>
<p class="formula">WUE (L/kWh) = Annual site water use (L) ÷ Annual IT energy (kWh)</p>
<p>Site water includes water used for cooling (cooling tower makeup, evaporative cooler supply, adiabatic precooling), humidification and, depending on the boundary chosen, other water such as domestic use attributable to the data center. A related metric, source WUE, adds the water consumed in generating the electricity the facility uses; it is reported separately. State which version and boundary you use.</p>
<p class="note">WUE does not capture where the water comes from or whether it is returned. Some owners also report potable versus reclaimed water and discharged volume.</p>

<h2>Estimating cooling tower water</h2>
<p>Most cooling tower water use is evaporation. Each pound of water evaporated removes roughly 1,000 Btu (the latent heat varies slightly with temperature). When nearly all heat rejection is evaporative:</p>
<p class="formula">Evaporation (lb/h) ≈ Heat rejected (Btu/h) ÷ 1,000</p>
<p class="formula">Evaporation (gal/h) ≈ lb/h ÷ 8.34</p>
<p>Dissolved minerals concentrate as water evaporates. Blowdown removes concentrated water to control scale:</p>
<p class="formula">Blowdown = Evaporation ÷ (Cycles of concentration − 1)</p>
<p>Drift (droplets carried out of the tower) is small with modern drift eliminators and is often neglected or included as a small allowance.</p>
<p class="formula">Makeup = Evaporation + Blowdown + Drift</p>

<h2>Worked example: water-cooled plant</h2>
<p>A facility with a 3,000 kW average IT load uses water-cooled chillers with cooling towers and a waterside economizer. Annual IT energy is 3,000 × 8,760 = 26,280,000 kWh.</p>
<ol>
<li><strong>Heat rejected.</strong> The towers reject IT heat plus cooling system energy that ends up as heat. Suppose the annual average heat rejection is 3,400 kW. In Btu/h: 3,400 × 3,412 = 11,600,800 Btu/h.</li>
<li><strong>Evaporative fraction.</strong> In cold weather, towers reject part of their heat sensibly (by warming air) rather than by evaporation. Using bin weather data, suppose the annual average evaporative fraction is 80%.</li>
<li><strong>Evaporation.</strong> 11,600,800 × 0.80 ÷ 1,000 = 9,281 lb/h, or 9,281 ÷ 8.34 = 1,113 gal/h. Annual: 1,113 × 8,760 = 9,750,000 gal.</li>
<li><strong>Blowdown.</strong> At 4 cycles of concentration: 9,750,000 ÷ 3 = 3,250,000 gal.</li>
<li><strong>Drift.</strong> Neglected here.</li>
<li><strong>Total makeup.</strong> 13,000,000 gal × 3.785 = 49,200,000 L.</li>
<li><strong>Humidification and other.</strong> The closed white space uses no humidifiers; other site water is excluded by the chosen boundary.</li>
</ol>
<p class="formula">WUE = 49,200,000 ÷ 26,280,000 ≈ 1.87 L/kWh</p>
<p>Raising cycles of concentration to 6, if water chemistry allows, cuts blowdown to 9,750,000 ÷ 5 = 1,950,000 gal and lowers WUE to about 1.69 L/kWh.</p>

<h2>Worked example: indirect evaporative units</h2>
<p>An IEC system uses water only in wet mode. For the same 3,000 kW load, suppose the units run wet for 2,500 hours a year at an average evaporation rate equivalent to 60% of the heat load. Heat load is about 3,200 kW including fan heat.</p>
<ol>
<li>Evaporation rate: 3,200 × 3,412 × 0.60 ÷ 1,000 = 6,551 lb/h = 785 gal/h.</li>
<li>Annual evaporation: 785 × 2,500 = 1,963,000 gal.</li>
<li>Bleed at 3 cycles: 1,963,000 ÷ 2 = 981,000 gal.</li>
<li>Total: 2,944,000 gal = 11,140,000 L.</li>
</ol>
<p class="formula">WUE = 11,140,000 ÷ 26,280,000 ≈ 0.42 L/kWh</p>
<p>The IEC's wet-mode hours and evaporation fraction depend on climate and setpoints. The units themselves are explained in <a href="<?= url('guides/indirect-evaporative-cooling-data-centers') ?>">indirect evaporative cooling units for data centers</a>.</p>

<h2>Checking the estimate against meters</h2>
<p>Once the facility operates, compare the estimate with metered makeup water. A large gap usually has a simple explanation: blowdown controls set more conservatively than assumed, a stuck makeup valve, a leaking basin, or a cycles-of-concentration target that water chemistry will not support. Meter makeup and blowdown separately on each tower cell or evaporative unit so the difference between evaporation and discharge is visible, and trend both against outdoor wet bulb so seasonal behavior can be compared with the bin-based estimate.</p>
<h2>Where water use comes from in common designs</h2>
<table>
<thead><tr><th>Design</th><th>Main water uses</th><th>Typical WUE direction</th></tr></thead>
<tbody>
<tr><td>Water-cooled chillers with towers</td><td>Tower evaporation and blowdown year-round</td><td>Highest</td></tr>
<tr><td>Indirect evaporative units</td><td>Evaporation and bleed in warm weather only</td><td>Moderate to low</td></tr>
<tr><td>Direct airside economizer with evaporative media</td><td>Evaporation in warm, dry weather; possible humidification</td><td>Moderate to low</td></tr>
<tr><td>Air-cooled chillers or DX with adiabatic assist</td><td>Adiabatic precooling on peak days only</td><td>Low</td></tr>
<tr><td>Air-cooled chillers, DX or pumped refrigerant, no assist</td><td>None for cooling</td><td>Near zero</td></tr>
</tbody>
</table>
<p>Lower water often means higher electricity, because dry heat rejection runs at higher condensing temperatures. Compare the WUE result alongside the cooling contribution to PUE, calculated as shown in <a href="<?= url('guides/pue-cooling-contribution') ?>">calculating the cooling system's contribution to PUE</a>. The medium comparison is in <a href="<?= url('guides/chilled-water-vs-dx-vs-pumped-refrigerant') ?>">chilled water vs DX vs pumped refrigerant</a>.</p>

<p>When the owner reports WUE publicly, the boundary and the data period should match the PUE report, so that readers can compare water and energy performance for the same facility and the same year.</p>
<h2>Reducing WUE</h2>
<ul>
<li>Raise cycles of concentration with better water treatment, or use softened or pretreated makeup water</li>
<li>Raise supply air and chilled water temperatures so dry or economizer modes cover more hours</li>
<li>Use hybrid towers or dry coolers that switch to dry operation in cool weather</li>
<li>Use reclaimed or non-potable water where permitted; it does not lower WUE but reduces potable demand</li>
<li>Meter makeup and blowdown separately to verify estimates and find leaks</li>
</ul>
<?php guide_end([
    ['What is a good WUE for a data center?', 'It depends heavily on climate and cooling design. Fully air-cooled facilities can be near zero, while water-cooled plants with towers often run above 1 L/kWh. Compare designs on the same boundary and climate.'],
    ['How do you estimate cooling tower water use?', 'Divide the heat rejected by evaporation in Btu/h by about 1,000 to get pounds of water evaporated per hour, convert to gallons, then add blowdown equal to evaporation divided by cycles of concentration minus one.'],
    ['Does WUE include water used to generate electricity?', 'Site WUE does not. Source WUE adds the water consumed in generating the electricity the facility uses. State which version you report.'],
]);
