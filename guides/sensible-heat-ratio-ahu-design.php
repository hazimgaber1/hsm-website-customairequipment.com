<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('sensible-heat-ratio-ahu-design'); ?>
<p class="lede">Sensible heat ratio (SHR) is the share of a cooling load that changes temperature rather than moisture. When the SHR is high, ordinary cooling coils handle the load easily; when it falls below about 0.75 to 0.80, the coil must cool air below the supply temperature the room needs, and some form of reheat becomes necessary.</p>

<h2>The definition</h2>
<p class="formula">SHR = sensible load ÷ (sensible load + latent load)</p>
<p>A room with 80,000 Btu/h of sensible load and 20,000 Btu/h of latent load has an SHR of 80,000 ÷ 100,000 = 0.80. Sensible load comes from solar gain, lights, equipment, conduction and the sensible part of people; latent load comes from people's moisture output, cooking, open water, infiltration and other moisture sources.</p>

<h2>Room SHR versus coil SHR</h2>
<p>Two different SHRs appear in AHU design, and confusing them is a common error.</p>
<ul>
<li><strong>Room SHR</strong> describes the space alone. It sets the slope of the line on the psychrometric chart along which supply air must lie to hold room temperature and humidity at the same time.</li>
<li><strong>Coil SHR</strong> describes the load on the cooling coil, including outdoor air, fan heat and any return-side gains. Humid outdoor air adds mostly latent load, so the coil SHR is usually lower than the room SHR.</li>
</ul>
<p>Typical rough ranges:</p>
<table>
<thead><tr><th>Space type</th><th>Typical room SHR</th></tr></thead>
<tbody>
<tr><td>Office or lab with heavy equipment loads</td><td>0.85 to 0.95</td></tr>
<tr><td>Data center white space</td><td>Close to 1.0</td></tr>
<tr><td>Classroom at design occupancy</td><td>0.65 to 0.80</td></tr>
<tr><td>Auditorium, worship space, arena seating</td><td>0.55 to 0.75</td></tr>
<tr><td>Commercial kitchen dining, natatorium</td><td>Often well below 0.70</td></tr>
</tbody>
</table>
<p>These are illustrative; calculate the actual room loads for each project.</p>

<h2>How SHR sets the supply air condition</h2>
<p>On a psychrometric chart, draw a line through the room state at the room SHR. Every supply condition that will hold the room at setpoint lies on that line. The colder the supply, the less airflow is needed; the line also sets the supply dew point needed for a given supply temperature.</p>
<p>With a high room SHR, the line is steep. A typical 55°F (13°C) supply point near 90% RH falls right on it, and an ordinary coil leaving condition works.</p>
<p>With a low room SHR, the line is shallow. It may hit the saturation curve at a temperature well below 55°F, or reach a 55°F supply only at a dew point lower than a coil can produce at that temperature. The plotting method is in <a href="<?= url('guides/psychrometric-process-ahu-design') ?>">plotting AHU processes on a psychrometric chart</a>.</p>
<h3>Example in words</h3>
<p>A room at 75°F and 50% RH has a dew point of about 55°F. To remove a latent load, the supply air must be drier than the room, which means a dew point below 55°F. If the SHR is 0.90, a slightly lower supply dew point is enough and a 55°F supply near saturation works. If the SHR is 0.60, the supply must be much drier, perhaps 48°F to 50°F dew point. Delivering that at 55°F would require air at about 80% RH, which a coil cannot produce directly; it must cool to near 49°F and then be reheated.</p>

<h2>Design responses to a low SHR</h2>
<h3>Cool deeper and reheat</h3>
<p>The traditional answer: lower the coil leaving temperature to reach the required dew point, then reheat to the supply temperature. Reheat energy can come from hot water, recovered condenser heat, hot gas reheat on DX systems or a wraparound heat pipe that moves heat from upstream of the coil to downstream at almost no energy cost. Energy codes restrict new-energy reheat; check ASHRAE 90.1 or NECB as adopted, which typically favour recovered or site-recovered energy.</p>
<h3>Treat outdoor air separately</h3>
<p>Since outdoor air drives much of the coil latent load, a dual-path unit or a DOAS can dry outdoor air deeply while the recirculated air is cooled at a higher temperature. See <a href="<?= url('guides/dual-path-ahu-arrangements') ?>">dual-path AHU arrangements</a>.</p>
<h3>Choose coils for latent capacity</h3>
<p>Deeper coils, lower face velocity, colder entering water and higher fin density all lower the coil SHR. A coil selected only to meet sensible load at design may lack latent capacity at part load.</p>
<h3>Watch part-load SHR</h3>
<p>The worst humidity conditions often occur on mild, humid days, not on design days. Sensible load drops but latent load from people and outdoor air stays high, pushing the room SHR down. A constant volume unit throttles its coil and stops dehumidifying; a VAV unit keeps the coil cold but may drop airflow to the point where ventilation and latent removal suffer. Checking several part-load cases is essential for occupancy-heavy spaces.</p>

<h2>Where SHR shows up in specifications</h2>
<ul>
<li>Coil schedules should state entering and leaving dry bulb and wet bulb, which fixes the coil SHR. Scheduling only total capacity invites a selection that misses latent duty.</li>
<li>Reheat coils or heat recovery devices should be shown with their design reheat duty.</li>
<li>For DX systems, check that compressor staging and coil circuiting can hold a low SHR at part load.</li>
</ul>
<p class="note">Sizing dehumidification equipment such as desiccant wheels is outside this guide; see <a href="<?= url('guides/dehumidification-load-calculation') ?>">dehumidification load calculation</a>.</p>
<?php guide_end([
    ['What is a good sensible heat ratio?', 'There is no single good value. Typical comfort cooling loads have room SHRs of about 0.70 to 0.90. Values below about 0.75 usually call for deeper dehumidification and some form of reheat or separate outdoor air treatment.'],
    ['Why is the coil SHR lower than the room SHR?', 'The coil handles outdoor air as well as the room load. Humid outdoor air adds a large latent load, so the share of the coil load that is sensible is lower than the share for the room alone.'],
    ['Why do buildings feel clammy on mild days?', 'On mild, humid days the sensible load drops but the latent load stays high. Units that reduce cooling to meet the smaller sensible load stop removing moisture, so humidity rises. This is a low part-load SHR problem.'],
]);
