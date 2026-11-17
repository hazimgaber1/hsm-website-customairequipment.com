<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('constant-volume-vs-vav-air-handlers'); ?>
<p class="lede">A constant volume air handler moves the same airflow all the time and changes supply temperature to meet the load; a variable air volume (VAV) unit changes airflow to meet the load. Single-zone VAV does this for one space, while multizone VAV holds a fixed supply temperature and lets terminal boxes in each zone throttle their share.</p>

<h2>Three duty types</h2>
<h3>Single-zone constant volume</h3>
<p>One thermostat, one zone, fixed fan speed. The controls modulate cooling and heating coils to change supply temperature. This was the default for decades in gyms, auditoriums and similar large single spaces. It is simple, but the fan runs at full power whenever the unit is on, and in humid weather a coil that throttles back to meet a small sensible load also stops dehumidifying.</p>
<h3>Single-zone VAV</h3>
<p>Still one zone, but the fan speed varies with the load. At peak cooling, the unit supplies full airflow at a cold supply temperature. As the load drops, fan speed falls toward a minimum, and only then does supply temperature rise. Because the coil stays cold at part load, dehumidification is better than constant volume. Fan energy also drops sharply, since fan power falls roughly with the cube of speed. Energy codes increasingly require this approach for single-zone units above a size threshold; check the edition of ASHRAE 90.1 or NECB adopted in your jurisdiction.</p>
<h3>Multizone VAV</h3>
<p>One AHU serves many zones, each with a VAV terminal box and its own thermostat. The AHU delivers air at a roughly constant cold supply temperature, typically 55°F (13°C), and the boxes throttle to match each zone's load. The AHU fan modulates to hold duct static pressure as boxes open and close. Zones that need heat use reheat coils in their boxes or perimeter heating.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Characteristic</th><th>Single-zone CV</th><th>Single-zone VAV</th><th>Multizone VAV</th></tr></thead>
<tbody>
<tr><td>Zones served</td><td>One</td><td>One</td><td>Many</td></tr>
<tr><td>What varies with load</td><td>Supply temperature</td><td>Airflow first, then supply temperature</td><td>Zone airflow via boxes; AHU airflow follows the sum</td></tr>
<tr><td>Fan speed control</td><td>None</td><td>VFD or EC motors on zone load</td><td>VFD or EC motors on duct static pressure</td></tr>
<tr><td>Part-load fan energy</td><td>High</td><td>Low</td><td>Low</td></tr>
<tr><td>Part-load dehumidification</td><td>Weak</td><td>Good</td><td>Good at the AHU; zone reheat may be needed</td></tr>
<tr><td>Ventilation control</td><td>Fixed outdoor air fraction works</td><td>Outdoor damper must reset as airflow drops</td><td>Outdoor airflow must be measured or controlled</td></tr>
<tr><td>Zone terminal equipment</td><td>None</td><td>None</td><td>VAV box per zone</td></tr>
<tr><td>Coil sizing basis</td><td>Peak load at full flow</td><td>Peak load at full flow</td><td>Block load (diversified), not the sum of zone peaks</td></tr>
<tr><td>Typical use</td><td>Process areas, some critical spaces with fixed air changes</td><td>Gyms, auditoriums, large open spaces, retail</td><td>Offices, schools, labs with VAV exhaust, mixed-use buildings</td></tr>
</tbody>
</table>

<h2>What changes in the AHU hardware</h2>
<p>Switching from constant volume to VAV is not just adding a drive. The unit itself is affected in several ways:</p>
<ul>
<li><strong>Fans:</strong> must be selected to operate stably over the whole flow range. Fan arrays and plenum fans with variable-speed motors handle wide turndown well.</li>
<li><strong>Outdoor air:</strong> as total airflow falls, a fixed damper position delivers less ventilation air. VAV units need an outdoor airflow station, a dedicated minimum outdoor air damper, or both.</li>
<li><strong>Coils:</strong> must perform at low face velocities without laminar-flow capacity loss, and hot water coils must remain freeze-safe at low airflow.</li>
<li><strong>Filters and blenders:</strong> mixing quality drops at low velocities, which increases stratification risk.</li>
<li><strong>Return or relief fans:</strong> must track the supply fan to keep the building pressure in range.</li>
</ul>
<p>How far airflow can actually drop before one of these limits governs is the subject of <a href="<?= url('guides/ahu-turndown-minimum-airflow') ?>">AHU turndown</a>.</p>

<h2>When constant volume still makes sense</h2>
<p>Constant volume is not obsolete. Some applications need fixed airflow regardless of load: operating rooms and isolation rooms with minimum air change rates, cleanrooms holding particle counts, and spaces where room pressure relationships must stay fixed. Process cooling, paint booths and industrial makeup air are often constant volume by nature. Even there, the fan usually has a variable-speed drive so it can be set accurately and compensate for filter loading, while the airflow delivered stays constant.</p>
<p class="note">A constant volume unit with a VFD used only to compensate for filter loading is still a constant volume system. The distinction is whether airflow responds to load.</p>

<h2>Choosing for a new or replacement unit</h2>
<ol>
<li>List the zones and whether they share similar loads and schedules.</li>
<li>Check for any space with fixed airflow or pressure requirements.</li>
<li>Check humidity sensitivity at part load.</li>
<li>Confirm energy code requirements for fan control on the unit size.</li>
<li>For existing constant volume systems, look at the conversion path described in <a href="<?= url('guides/constant-volume-to-vav-conversion') ?>">constant volume to VAV conversion</a>.</li>
</ol>
<p>Control sequences for supply temperature reset and duct static pressure reset are part of the controls category; the hardware choice described here comes first.</p>
<h2>Coil and plant sizing differences</h2>
<p>A multizone VAV unit is sized on the block load of all its zones at the hour when their combined load peaks, because the west zones and east zones do not peak together. That diversified load can be noticeably smaller than the sum of the individual zone peaks, so the AHU coil, fan and central plant are smaller than a set of single-zone units serving the same rooms. The VAV boxes, by contrast, are sized for each zone's own peak. A constant volume or single-zone VAV unit serving one space gets no diversity benefit; it must meet that space's peak at full airflow.</p>
<?php guide_end([
    ['What is the difference between constant volume and VAV?', 'A constant volume system supplies fixed airflow and varies supply temperature to meet the load. A VAV system varies airflow, either at the AHU fan for one zone or at terminal boxes for many zones, while keeping supply temperature closer to constant.'],
    ['What is single-zone VAV?', 'Single-zone VAV is an AHU serving one zone whose fan speed varies with the zone load. It reduces airflow first as load falls, then raises supply temperature. It saves fan energy and dehumidifies better at part load than constant volume.'],
    ['Do VAV air handlers need special outdoor air controls?', 'Yes. When total airflow drops, a fixed outdoor damper position delivers less ventilation air. VAV units typically use an outdoor airflow measuring station, a dedicated minimum outdoor air damper, or a control sequence that resets damper position with airflow.'],
]);
