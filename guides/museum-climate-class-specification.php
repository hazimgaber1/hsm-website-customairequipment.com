<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('museum-climate-class-specification'); ?>
<p class="lede">The ASHRAE Handbook (HVAC Applications, chapter on museums, galleries, archives and libraries) defines climate classes from AA, the tightest, through A, B and C to D, the loosest. Specifying a museum air handler means choosing the class with the conservator, translating it into setpoints, allowable short-term fluctuations and seasonal adjustments, and then writing performance and equipment requirements that can actually hold it.</p>

<h2>What the climate classes describe</h2>
<p>Each class is defined by a long-term annual average (the historical set point for the building), the permissible short-term fluctuation around that average for temperature and relative humidity, and whether seasonal drift of the set point is allowed. The tighter classes permit only small daily swings and little or no seasonal adjustment; the looser classes accept wider swings and larger seasonal drift, trading some collection risk for much lower energy and simpler equipment.</p>
<p>In broad terms:</p>
<ul>
<li><strong>AA</strong> holds RH and temperature very tightly, with no seasonal RH change. It requires the most capable and energy-intensive systems.</li>
<li><strong>A</strong> permits either small short-term fluctuations with some seasonal adjustment, or a version with no seasonal change but wider fluctuation. It suits most mixed collections in a well-built museum.</li>
<li><strong>B</strong> allows larger fluctuation and seasonal swing. It is achievable in many existing or historic buildings without full envelope upgrades.</li>
<li><strong>C</strong> mainly prevents high-risk extremes, such as very high or very low RH.</li>
<li><strong>D</strong> addresses only dampness, keeping RH below a level that would support mold.</li>
</ul>
<p class="note">Take the exact numerical tolerances from the current ASHRAE Handbook edition rather than from secondary sources, and quote the edition in the specification. Values and wording have been refined between editions.</p>

<h2>Choosing the class</h2>
<p>The class is a collection decision, not a mechanical one. The conservator or registrar weighs the sensitivity of the objects, loan agreements from lending institutions, the building envelope and the operating budget. The engineer's role is to explain what each class costs to achieve and maintain in that building and climate.</p>
<p>Questions to raise early:</p>
<ol>
<li>Do loan agreements for major traveling exhibitions demand a specific class for particular galleries?</li>
<li>Can the building envelope support the chosen indoor dew point in winter without condensation in walls or on windows? Holding high winter RH in a cold Canadian climate can damage an older building.</li>
<li>Are storage vaults, conservation labs and public galleries at the same class, or can they differ?</li>
<li>Will the system operate 24 hours a day, every day? Most collection spaces need continuous control.</li>
</ol>
<p>The envelope question is often decisive. The calculation for checking the highest indoor RH a wall can tolerate is in <a href="<?= url('guides/max-winter-indoor-rh-calculation') ?>">max winter indoor RH</a>.</p>

<h2>Turning the class into design criteria</h2>
<p>Write the design criteria as a table in the basis of design and repeat it in the specification. A sample format:</p>
<table>
<thead><tr><th>Space</th><th>Class</th><th>Annual average</th><th>Short-term tolerance</th><th>Seasonal adjustment</th></tr></thead>
<tbody>
<tr><td>Gallery 1 (loans)</td><td>A</td><td>[__]°F / [__]% RH</td><td>±[__]°F / ±[__]% RH</td><td>[allowed range]</td></tr>
<tr><td>Collection storage</td><td>A or AA</td><td>[__]°F / [__]% RH</td><td>±[__]°F / ±[__]% RH</td><td>[none / allowed]</td></tr>
<tr><td>Public areas</td><td>Comfort</td><td>Code comfort</td><td>n/a</td><td>n/a</td></tr>
</tbody>
</table>
<p>Define how compliance is measured: sensor location, averaging period, the period over which "short-term" is assessed, and the percentage of hours allowed outside the band, if any. Without these definitions, an acceptance test can never be passed or failed objectively.</p>

<h2>Equipment implications</h2>
<p>Tight humidity control is the hard part. Temperature is relatively easy to hold; RH depends on both temperature and moisture content, so a one-degree temperature swing alone shifts RH by roughly three percentage points near typical museum conditions. That is why many designers control to dew point rather than RH, as discussed in <a href="<?= url('guides/dew-point-control-vs-rh-control') ?>">dew point vs RH control</a>.</p>
<p>A museum AHU for class A or AA commonly includes:</p>
<ul>
<li>A cooling coil selected to dehumidify to a low enough dew point with the unit at minimum outdoor air.</li>
<li>Reheat after the cooling coil, sized to deliver supply air at the required temperature after dehumidification.</li>
<li>A steam or adiabatic humidifier with fine modulating control and enough absorption distance to avoid wetting downstream components.</li>
<li>Gas-phase filtration in addition to high-efficiency particulate filters where urban pollutants threaten collections.</li>
<li>Redundant fans, and sometimes redundant air handlers for storage vaults, so a single failure does not cause an excursion.</li>
<li>Casings with very low leakage and thermal breaks, since condensation inside the unit at the cold coil is a moisture source of its own.</li>
</ul>

<h2>Sample specification language</h2>
<p class="formula">The air handling system serving [spaces] shall maintain conditions in accordance with ASHRAE Handbook, HVAC Applications, [edition], museum climate class [A], with an annual average of [__]°F and [__]% RH, short-term fluctuations not exceeding ±[__]°F and ±[__]% RH, and seasonal set point adjustment limited to [__].</p>
<p class="formula">Space conditions shall be measured at [locations] using sensors with stated accuracy of ±[__]% RH over the range [__] to [__]% RH, logged at intervals not exceeding [15] minutes.</p>
<p class="formula">The Contractor shall demonstrate compliance through a [30]-day trend period after acceptance, during which logged conditions remain within the specified band for not less than [__]% of hours.</p>
<p class="formula">Humidification shall modulate from 0 to 100% of capacity with a turndown of not less than [__]:1. Humidity control shall be based on [space dew point / RH] with supply high-limit override.</p>

<h2>Commissioning and seasonal tuning</h2>
<p>Museum systems seldom hold their class immediately after startup. Plan a full year of seasonal commissioning, with trend reviews at each season change, and include calibration of humidity sensors at intervals the owner can sustain. Humidity sensors drift more than temperature sensors. If you would like to discuss configuring a unit around a specific class, <a href="<?= url('contact') ?>">our engineers can help</a>.</p>
<?php guide_end([
    ['What are the ASHRAE museum climate classes?', 'They are AA, A, B, C and D, defined in the ASHRAE Handbook HVAC Applications volume. Each class sets an annual average, a permitted short-term fluctuation and whether seasonal adjustment is allowed, from very tight control at AA to damp prevention only at D.'],
    ['Who chooses the museum climate class?', 'The conservator or collections staff choose it based on object sensitivity, loan requirements and the building. The engineer advises on what each class will cost to achieve and whether the envelope can tolerate it.'],
    ['Why is humidity harder to control than temperature in a museum?', 'Relative humidity depends on both moisture content and temperature, so even a small temperature swing changes RH noticeably. Controlling dew point and holding temperature tightly makes RH much more stable.'],
]);
