<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('outdoor-design-conditions-ashrae-climate-data'); ?>
<p class="lede">For most AHUs, size cooling coils on the 0.4% or 1% cooling dry bulb with its mean coincident wet bulb, check dehumidification on the 0.4% or 1% dew point with its mean coincident dry bulb, and size heating on the 99.6% or 99% heating dry bulb. Take the values from the climatic design data in the ASHRAE Handbook—Fundamentals, or for Canadian projects confirm them against the climate data in the National Building Code of Canada as adopted.</p>

<h2>What the percentages mean</h2>
<p>ASHRAE climatic design data are statistical, based on hourly weather records over many years. A cooling value labelled 0.4% is exceeded on average 0.4% of the hours in a year, about 35 hours. A 1% value is exceeded about 88 hours a year, and a 2% value about 175 hours. Heating values work the other way: the 99.6% heating dry bulb is the temperature that the air is warmer than for 99.6% of the hours, so it is colder only about 35 hours a year.</p>
<p>Percentages do not describe how long those hours last at a stretch. A building with high thermal mass rides through a few hot hours; a lab with 100% outdoor air does not.</p>

<h2>Step-by-step selection</h2>
<ol>
<li><strong>Find the right station.</strong> Locate the weather station nearest the site with similar elevation and exposure. Airports are typical. A coastal station can be very different from a city 20 miles (30 km) inland; a valley station can differ from an upland site.</li>
<li><strong>Note the station elevation and standard pressure.</strong> These matter for psychrometric calculations and air density.</li>
<li><strong>Choose a cooling risk level.</strong> Decide whether the application can tolerate rare exceedances:
<ul>
<li>0.4%: critical facilities, hospitals, labs, data centers, 100% outdoor air units, owner-specified high reliability.</li>
<li>1%: typical commercial, institutional and educational buildings.</li>
<li>2%: less critical spaces, or where oversizing is a bigger concern than occasional drift.</li>
</ul></li>
<li><strong>Read the dry-bulb set.</strong> From the cooling columns, take the design dry bulb and its mean coincident wet bulb (MCWB) at the chosen percentage. This pair sizes sensible capacity and most coils.</li>
<li><strong>Read the wet-bulb (evaporation) set.</strong> Take the design wet bulb and its mean coincident dry bulb (MCDB). This pair sets peak enthalpy and is relevant for cooling towers, evaporative cooling and total coil load in humid climates.</li>
<li><strong>Read the dehumidification set.</strong> Take the design dew point, its humidity ratio and its MCDB. This pair often produces the largest latent load on outdoor air units, even though the dry bulb is lower.</li>
<li><strong>Read the heating set.</strong> Take the 99.6% or 99% heating dry bulb. Use 99.6% for preheat and freeze protection on outdoor air units, and usually for critical facilities.</li>
<li><strong>Check extremes where they matter.</strong> The data include extreme annual values and statistics for return periods. For freeze protection of coils and for equipment that must operate in all weather, consider using extreme minimum values rather than the 99.6% point.</li>
<li><strong>Record the source and edition.</strong> Climate data are updated as new weather records are added, and values shift. State the handbook edition and station on the design documents.</li>
</ol>

<h2>Which set governs which component</h2>
<table>
<thead><tr><th>Component or check</th><th>Usual governing condition</th></tr></thead>
<tbody>
<tr><td>Mixed-air unit cooling coil</td><td>Cooling DB with MCWB; check dew point set for humid climates</td></tr>
<tr><td>100% outdoor air cooling coil</td><td>Whichever of the DB/MCWB, WB/MCDB and DP/MCDB sets gives the highest enthalpy or latent load</td></tr>
<tr><td>Reheat after dehumidification</td><td>Dew point set, where the dry bulb is lower and more reheat is needed</td></tr>
<tr><td>Preheat coil</td><td>99.6% heating DB or an extreme minimum</td></tr>
<tr><td>Humidifier</td><td>Heating DB with low coincident humidity; check cold, dry conditions</td></tr>
<tr><td>Energy recovery frost control</td><td>Heating design temperature and the frost threshold</td></tr>
<tr><td>Economizer hours</td><td>Hourly or binned data, not peak design values</td></tr>
</tbody>
</table>
<p>The calculation that turns the chosen outdoor condition into a mixed or coil entering state is in <a href="<?= url('guides/mixed-air-temperature-calculation') ?>">mixed-air temperature calculation</a>.</p>

<h2>Canadian projects</h2>
<p>The ASHRAE data include many Canadian stations. Canadian building codes, however, publish their own climatic values for design, in the climatic information appendix of the National Building Code of Canada and corresponding provincial codes, including winter January design temperatures at two probability levels and summer July dry- and wet-bulb values. These code values are what building officials and energy compliance documents expect to see, and they may differ slightly from ASHRAE's percentages because of different methods and periods of record. For NECB compliance work, use the values the code edition in force specifies.</p>
<p class="note">When ASHRAE and code tables give different values for the same location, document which source was used and why. For critical equipment, use the more severe of the two.</p>

<h2>Common mistakes</h2>
<ul>
<li>Pairing the design dry bulb with the design wet bulb from a different column. They do not occur together; always use the coincident value.</li>
<li>Sizing a 100% outdoor air coil on the dry-bulb set only, missing the larger latent load on the dew-point day.</li>
<li>Using a sea-level psychrometric chart for a high-elevation station.</li>
<li>Applying an urban station's data to a rural or coastal site without checking.</li>
<li>Adding extra safety margin on top of a 0.4% condition, then also adding margin on the load and the coil. Margins compound; see <a href="<?= url('guides/design-margins-without-oversizing') ?>">design margins without oversizing</a>.</li>
<li>Ignoring a changing climate entirely. Some owners now ask designers to check equipment against more severe future conditions; that is a project decision to document, not a default.</li>
</ul>
<p>For how heat gain, occupancy and other loads are calculated, see the load calculation methods in the ASHRAE Handbook; those are outside this guide. For where the selected outdoor condition feeds into chart work, see <a href="<?= url('guides/psychrometric-process-ahu-design') ?>">plotting AHU processes</a>.</p>
<?php guide_end([
    ['Should I use 0.4% or 1% design conditions?', 'Use 0.4% for critical facilities such as hospitals, labs, data centers and 100% outdoor air units. Use 1% for typical commercial and institutional buildings. The choice should reflect how much the owner can tolerate occasional temperature drift.'],
    ['What is mean coincident wet bulb?', 'It is the average wet-bulb temperature that occurs at the same time as the design dry-bulb temperature. Pairing the design dry bulb with its coincident wet bulb gives a realistic peak condition for coil sizing.'],
    ['Where do I find design temperatures for Canadian cities?', 'Canadian design temperatures are published in the climatic information appendix of the National Building Code of Canada and provincial codes, and many Canadian stations are also in the ASHRAE Handbook climatic data. Use the values required by the code edition in force for compliance work.'],
]);
