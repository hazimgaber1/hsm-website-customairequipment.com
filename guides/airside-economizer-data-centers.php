<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('airside-economizer-data-centers'); ?>
<p class="lede">A direct airside economizer cools the data hall with filtered outdoor air whenever outdoor conditions fall inside the allowed envelope, mixing in hot return air when it is too cold and switching to mechanical cooling when it is too hot or too humid. It can eliminate compressor operation for much of the year, but it brings outdoor particles, gases and moisture directly to the servers.</p>

<h2>How direct airside economizing works</h2>
<p>The air handler has three main damper sets: outdoor air, return air and relief (or exhaust) air. In economizer mode, outdoor air dampers open and the unit supplies filtered outdoor air to the hall. Hot return air from the containment is relieved to outdoors in the same amount. When outdoor air is colder than the supply setpoint, return dampers open partly and mix hot return air in to raise the supply temperature. When outdoor air is too warm or too humid, the unit closes outdoor and relief dampers and recirculates, with cooling coils or other mechanical cooling handling the load.</p>
<table>
<thead><tr><th>Mode</th><th>Outdoor condition (illustrative)</th><th>Damper and coil state</th></tr></thead>
<tbody>
<tr><td>Full economizer</td><td>Below supply setpoint, dew point in range</td><td>Outdoor and relief open, return modulating to temper</td></tr>
<tr><td>Partial economizer</td><td>Between supply setpoint and return temperature</td><td>100% outdoor air with trim cooling</td></tr>
<tr><td>Mechanical cooling</td><td>Above return temperature, or dew point out of range</td><td>Outdoor at minimum or closed, recirculation with coil</td></tr>
<tr><td>Protective recirculation</td><td>Smoke, high pollution, extreme cold</td><td>Outdoor closed, full recirculation</td></tr>
</tbody>
</table>
<p>Because data center supply setpoints are high, often 70 to 80°F (21 to 27°C), the economizer is usable far more often than in an office building. The number of hours depends on climate, as estimated in <a href="<?= url('guides/economizer-hours-by-climate') ?>">estimating economizer hours by climate</a>.</p>

<h2>Filtration</h2>
<p>Outdoor air carries far more particulate than recirculated data hall air. Fine dust can settle on heat sinks and circuit boards, insulate components and, combined with moisture, contribute to corrosion. TC 9.9 guidance recommends higher-efficiency filtration for outdoor air in economizer designs than for recirculated air, and many owners specify MERV 13 or better on the outdoor air path, often preceded by a prefilter.</p>
<ul>
<li>Size filter banks for the full outdoor airflow at moderate face velocity; economizer airflow often equals the full supply airflow.</li>
<li>Select fans at final filter pressure drop. Outdoor air loads filters faster than return air.</li>
<li>Plan for events: wildfire smoke, dust storms, pollen and nearby construction can load filters within days. A smoke or particle sensor that triggers recirculation mode protects both the filters and the equipment. See <a href="<?= url('guides/wildfire-smoke-filtration') ?>">wildfire smoke filtration</a>.</li>
</ul>

<h2>Gaseous contamination</h2>
<p>Particles can be filtered relatively easily; corrosive gases such as sulfur compounds and chlorine-bearing gases pass through particulate filters. In polluted regions, or near industrial sources, highways or wastewater treatment plants, outdoor air can create corrosion rates on copper and silver that damage electronics. Before committing to direct airside economizing, measure corrosion at the site with reactivity coupons. The classification method and when gas-phase filtration is needed are in <a href="<?= url('guides/gaseous-contamination-isa-71-04') ?>">gaseous contamination in data centers: ISA 71.04</a>.</p>
<p class="warn">If coupon testing shows elevated corrosion, direct airside economizing may need gas-phase filtration or may be unsuitable. Indirect economizers that keep outdoor air separate avoid the issue.</p>

<h2>Humidity limits</h2>
<p>Outdoor dew point, not just dry bulb, decides whether outdoor air can be used. Each mode needs humidity limits that keep server inlets within the owner's envelope:</p>
<ul>
<li><strong>High dew point limit:</strong> above the envelope's maximum dew point, outdoor air would require dehumidification and the unit returns to recirculation.</li>
<li><strong>High relative humidity limit:</strong> after tempering, the supply RH must stay below the envelope's maximum. In polluted locations, a lower RH limit reduces corrosion risk.</li>
<li><strong>Low dew point limit:</strong> in very cold, dry weather, outdoor air can be extremely dry. The owner must decide whether to humidify, accept low humidity within current guidance, or limit outdoor air. Humidifying large outdoor airflows costs energy and water.</li>
</ul>
<p>Use dew point or enthalpy high-limit controls with accurate, regularly calibrated sensors. Dry-bulb-only control in a humid climate will admit wet air.</p>

<h2>Cold weather and mixing</h2>
<p>In northern climates, outdoor air can be far below the supply setpoint for months. The unit mixes large amounts of hot return air with a small fraction of outdoor air. Poor mixing creates cold streams that can freeze coils, trip freeze stats or deliver cold air to some servers. Use mixing baffles or blenders, arrange outdoor and return dampers to promote mixing, and locate temperature sensors where they read the true average. Cold-climate details are expanded in <a href="<?= url('guides/cold-climate-data-centers-canada') ?>">designing data center cooling for cold Canadian climates</a>.</p>

<h2>Relief air and building pressure</h2>
<p>Every cfm of outdoor air must leave. Relief dampers or relief fans must handle the full economizer airflow without pressurizing the data hall. Uncontrolled pressure pushes air through doors and into adjacent spaces and can upset containment. Control relief to hold a slight positive hall pressure, and size relief openings for low velocity to limit noise and rain entry.</p>

<h2>Design checklist</h2>
<ul>
<li>Corrosion coupon testing at the site before design</li>
<li>Outdoor air filtration efficiency and prefilter defined</li>
<li>Dew point, RH and dry bulb limits for each mode agreed with the owner</li>
<li>Smoke and pollution detection with automatic recirculation</li>
<li>Mixing arrangement and freeze protection for cold weather</li>
<li>Relief path and hall pressure control</li>
<li>Mechanical cooling sized for full load with economizer unavailable</li>
<li>Mode transitions ramped to respect temperature rate-of-change limits</li>
</ul>
<?php guide_end([
    ['Is it safe to use outdoor air to cool servers?', 'Yes, with adequate filtration, humidity limits and a site where gaseous contamination is low. Measure corrosion with reactivity coupons before design, and include controls that switch to recirculation during smoke or pollution events.'],
    ['What filter rating is used for data center outdoor air?', 'Many owners specify MERV 13 or better for outdoor air in direct economizer designs, often with a prefilter. Fans should be selected for the final filter pressure drop because outdoor air loads filters quickly.'],
    ['Does an airside economizer need humidity control?', 'It needs humidity limits. Outdoor air above the maximum dew point is excluded, and supply relative humidity is kept below the envelope limit. In very dry weather the owner decides whether to humidify or accept low humidity.'],
]);
