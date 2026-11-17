<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ashrae-tc-9-9-thermal-guidelines'); ?>
<p class="lede">ASHRAE Technical Committee 9.9 publishes <em>Thermal Guidelines for Data Processing Environments</em>, which defines a recommended envelope for server inlet air and a set of allowable classes, A1 through A4, that widen the temperature and humidity range equipment can tolerate. The envelopes apply at the server inlet, not at the cooling unit return.</p>

<h2>Where the guidelines come from</h2>
<p>TC 9.9 brings together IT equipment manufacturers and facility engineers. The guidelines reflect what server, storage and network vendors agree their equipment can handle, and they have widened over successive editions as hardware became more robust and as operators wanted more economizer hours. The figures in this guide reflect the recent editions; confirm values against the edition your owner has adopted, because the book is revised periodically and some limits have moved between editions.</p>
<p>The most important point to carry into design is the measurement location. Every envelope refers to the air entering the IT equipment, measured at the front of the rack. A cooling unit discharging 70°F (21°C) air into a room with poor airflow management can still deliver 85°F (29°C) to some server inlets.</p>

<h2>The recommended envelope</h2>
<p>The recommended envelope is the range in which equipment is expected to operate with the best balance of reliability and energy efficiency. It is the default target for most enterprise and colocation facilities.</p>
<ul>
<li><strong>Dry bulb:</strong> 64.4 to 80.6°F (18 to 27°C)</li>
<li><strong>Moisture:</strong> a lower limit set by dew point and an upper limit set by both dew point and relative humidity</li>
</ul>
<p>Recent editions also note that where gaseous pollutants are elevated, a lower upper RH limit is advised, because corrosion accelerates when moisture and contaminants combine. How low humidity can safely go, and the static discharge question, are treated separately in <a href="<?= url('guides/data-center-humidity-static') ?>">data center humidity limits and electrostatic discharge</a>.</p>
<p class="note">Operating inside the recommended envelope is a choice, not a requirement. Many operators run near its upper edge, or into the allowable range for part of the year, to increase economizer hours.</p>

<h2>Allowable classes A1 to A4</h2>
<p>Allowable classes describe wider envelopes in which equipment is designed to operate, though possibly with more fan power, more noise and some effect on long-term reliability if used continuously. Each class corresponds to a category of equipment, and the equipment's own documentation states which class it supports.</p>
<table>
<thead><tr><th>Class</th><th>Allowable dry bulb</th><th>Typical equipment</th></tr></thead>
<tbody>
<tr><td>A1</td><td>59 to 89.6°F (15 to 32°C)</td><td>Enterprise servers and storage in tightly controlled facilities</td></tr>
<tr><td>A2</td><td>50 to 95°F (10 to 35°C)</td><td>Most volume servers, storage and network equipment</td></tr>
<tr><td>A3</td><td>41 to 104°F (5 to 40°C)</td><td>Equipment rated for extended ranges</td></tr>
<tr><td>A4</td><td>41 to 113°F (5 to 45°C)</td><td>Equipment rated for the widest ranges</td></tr>
</tbody>
</table>
<p>Each class also has humidity limits, set by a minimum dew point, a range of relative humidity and a maximum dew point, which widen from A1 to A4. Recent editions added a class for high-density air-cooled equipment, designated H1, with a narrower recommended range at the cool end, reflecting processors and accelerators that need cooler inlet air to stay within their own thermal limits.</p>
<p>Designers should note that the allowable range is a capability of the equipment, and that a facility serving mixed equipment must design to the most restrictive class present.</p>

<h2>Rate of change and altitude</h2>
<p>The guidelines also limit how fast inlet temperature changes. A limit expressed per hour applies to most equipment, with a tighter limit for tape storage, which is sensitive to rapid swings. Rapid changes typically happen during economizer transitions, chilled water plant failures, or when a cooling unit restarts after a power interruption, so control sequences should ramp rather than step.</p>
<p>At high elevation, air is less dense and carries less heat per cubic foot. The guidelines derate the maximum allowable dry bulb above a threshold altitude. That matters for sites in parts of Alberta, the Rocky Mountain states and other elevated regions, and it also affects fan and airflow selection, covered in <a href="<?= url('guides/fan-density-correction') ?>">fan density correction</a>.</p>

<h2>Effect on reliability and server power</h2>
<p>TC 9.9 publishes guidance on how failure rates vary with inlet temperature, expressed as a relative factor compared with a baseline temperature. Running warmer for part of the year and cooler for the rest can produce a time-weighted reliability similar to running at a constant baseline, which supports economizer strategies.</p>
<p>Warmer inlet air also makes server fans speed up. Above a certain inlet temperature, server fan power rises steeply, and the IT load increases. That increase can offset some of the cooling energy saved by raising the setpoint, so the best operating point is a facility-specific optimization rather than "as warm as allowed."</p>

<h2>Using the guidelines in design</h2>
<table>
<thead><tr><th>Design decision</th><th>How the guidelines inform it</th></tr></thead>
<tbody>
<tr><td>Supply air temperature setpoint</td><td>Choose so the warmest expected server inlet stays within the target envelope</td></tr>
<tr><td>Economizer limits</td><td>Allowable class sets the outdoor conditions at which free cooling is acceptable</td></tr>
<tr><td>Containment</td><td>Reduces the difference between supply and inlet temperature, letting supply run warmer</td></tr>
<tr><td>Airflow quantity</td><td>Server inlet target and server delta-T together set airflow; see <a href="<?= url('guides/airflow-per-kw-it-load') ?>">airflow per kW of IT load</a></td></tr>
<tr><td>Failure scenarios</td><td>Allowable range defines how much temperature rise is tolerable during an outage or changeover</td></tr>
</tbody>
</table>
<p>Owners typically write their own operating envelope based on the guidelines, for example "recommended envelope at all times except up to A2 allowable for no more than a set number of hours per year." Get that statement in writing at the start of design, because it drives equipment selection, economizer type and redundancy. Direct outdoor air designs that rely on the allowable range are explained in <a href="<?= url('guides/airside-economizer-data-centers') ?>">airside economizers for data centers</a>.</p>
<?php guide_end([
    ['What is the ASHRAE recommended temperature for a data center?', 'The recommended envelope for server inlet air is 64.4 to 80.6°F (18 to 27°C) dry bulb, with humidity limits set by dew point and relative humidity. Confirm against the edition of the guidelines your owner has adopted.'],
    ['What is the A1 allowable temperature range?', 'Class A1 allows server inlet temperatures from 59 to 89.6°F (15 to 32°C), with associated humidity limits. A2 to A4 progressively widen the range for equipment rated to handle it.'],
    ['Where should data center temperature be measured?', 'At the server inlet, on the front of the rack. The guidelines apply to air entering IT equipment, not to cooling unit supply or return air.'],
]);
