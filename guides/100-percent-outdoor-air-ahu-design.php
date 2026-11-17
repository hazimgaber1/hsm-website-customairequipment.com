<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('100-percent-outdoor-air-ahu-design'); ?>
<p class="lede">A 100% outdoor air unit takes every cubic foot from outside and exhausts it again, so it sees the full swing of the weather with no warm return air to soften it. That changes how preheat, cooling coils, humidity control, freeze protection and energy recovery are designed.</p>

<h2>Where once-through units are used</h2>
<p>Laboratories, operating rooms, isolation rooms, kitchens and many industrial processes cannot recirculate air because of contaminants, odours or code requirements. Makeup air units replace air removed by exhaust hoods or process equipment. Dedicated outdoor air units supply ventilation separately from space conditioning. All of these are once-through designs, and they share a common problem: the unit's entering condition is the weather.</p>

<h2>Wide load swings</h2>
<p>A mixed-air unit with 20% outdoor air sees an entering temperature between perhaps 50°F and 80°F (10°C and 27°C) over the year. A 100% outdoor air unit in a Canadian or northern US city may see −20°F to 95°F (−29°C to 35°C), and air with dew points from well below zero to above 70°F.</p>
<p>Because sensible capacity scales with temperature difference, the coils must be sized for much larger loads per cfm. Working from the sensible equation:</p>
<p class="formula">Q (Btu/h) = 1.08 × CFM × ΔT</p>
<p>Heating 10,000 cfm of outdoor air from −10°F to 55°F needs about 1.08 × 10,000 × 65 = 702,000 Btu/h (about 206 kW). A mixed-air unit with 20% outdoor air at the same conditions would have a mixed temperature near 54°F at a 70°F return, and need almost no heat. The same disparity appears in summer, where the latent load from humid outdoor air is often larger than the sensible load.</p>
<p>The equipment must also turn down. On a mild spring day the same unit might need almost no heating or cooling, so valves, coils and burners must control well at a small fraction of design capacity.</p>

<h2>Preheat and freeze protection</h2>
<p>Below freezing, outdoor air reaching a chilled water coil can freeze it within minutes if flow stops. Once-through units almost always have a preheat coil first in line to raise air above freezing, typically to around 40°F to 50°F (4°C to 10°C), before it reaches filters or cooling coils. Common approaches include:</p>
<ul>
<li>Steam coils with distributing (steam-in-steam) tubes, which resist freezing better than standard steam coils.</li>
<li>Glycol hot water coils, often on a separate loop.</li>
<li>Direct or indirect gas-fired heat in makeup air units.</li>
<li>Face and bypass coil arrangements that keep full flow through the coil.</li>
<li>Electric preheat on smaller units.</li>
</ul>
<p>Placement and sizing of the preheat coil are covered in the <a href="<?= url('guides/preheat-coil-placement-sizing') ?>">preheat coil guide</a>.</p>
<p class="warn">Stratification is not usually the issue in a once-through unit because there is nothing to mix with, but the preheat coil itself can create layers if its control valve modulates unevenly. Verify the leaving profile, not just one sensor reading.</p>

<h2>Latent load and dehumidification</h2>
<p>Summer outdoor air in much of eastern North America carries 110 to 140 grains of moisture per pound of dry air at design dew point. Bringing that down to a supply dew point around 50°F to 55°F means the cooling coil does more dehumidification than sensible cooling. Design consequences include:</p>
<ul>
<li>Deeper cooling coils with more rows, lower leaving air temperatures and colder chilled water.</li>
<li>Coil selection at the peak dew point condition, not just the peak dry-bulb condition. In many locations the dew point design day gives the larger total load.</li>
<li>Reheat to bring supply temperature back up when the space does not need cold air, from hot water, hot gas or a wraparound heat pipe.</li>
<li>Drain pans and condensate traps sized for heavy, sustained condensate flow.</li>
</ul>
<p>The psychrometrics are worked in the <a href="<?= url('guides/psychrometric-process-ahu-design') ?>">psychrometric chart guide</a>, and choosing design weather data is covered under <a href="<?= url('guides/outdoor-design-conditions-ashrae-climate-data') ?>">outdoor design conditions</a>.</p>

<h2>Energy recovery is usually expected</h2>
<p>Conditioning outdoor air from extreme conditions is expensive, so once-through units are prime candidates for recovering energy from exhaust. Energy codes such as ASHRAE 90.1 and the NECB require recovery above certain airflow and outdoor air thresholds that depend on climate; check the edition adopted in your jurisdiction. Wheels, plates, heat pipes and runaround loops each have restrictions where exhaust is contaminated, so the choice depends on the exhaust class.</p>
<p>Recovery also shrinks the preheat and cooling coils, since the entering condition is moderated. Design the coils for the case where recovery is unavailable, such as wheel failure or frost defrost cycles, if the space cannot tolerate a loss of conditioning.</p>

<h2>Other design points that change</h2>
<table>
<thead><tr><th>Item</th><th>What to check on a 100% outdoor air unit</th></tr></thead>
<tbody>
<tr><td>Intake</td><td>Snow and rain intrusion, intake velocity, distance from exhaust and contaminant sources</td></tr>
<tr><td>Filters</td><td>Prefilters to protect recovery devices; filters must stay dry downstream of intakes</td></tr>
<tr><td>Casing</td><td>Thermal breaks to avoid sweating in winter and summer; low casing leakage</td></tr>
<tr><td>Humidification</td><td>Large winter moisture loads when outdoor air is very dry</td></tr>
<tr><td>Controls</td><td>Supply temperature control across a wide range; low-limit protection</td></tr>
<tr><td>Redundancy</td><td>Critical spaces may need fan arrays or redundant units, as loss of the unit means loss of all ventilation</td></tr>
</tbody>
</table>
<?php guide_end([
    ['What is a 100 percent outdoor air unit?', 'It is an air handler that supplies only outdoor air and does not recirculate return air. All supply air is eventually exhausted. It is used in labs, hospitals, kitchens and other spaces where recirculation is not allowed or not wanted.'],
    ['Why does a 100 percent outdoor air unit need a preheat coil?', 'In cold weather, outdoor air below freezing would reach the cooling coil and could freeze it. A preheat coil raises the air above freezing first, protecting downstream coils and keeping the supply temperature stable.'],
    ['Is energy recovery required on outdoor air units?', 'Energy codes such as ASHRAE 90.1 and the NECB require energy recovery on many systems with high outdoor air fractions, depending on climate and airflow. The thresholds differ between editions, so check the edition adopted in your jurisdiction.'],
]);
