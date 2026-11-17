<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('filter-gauges-vs-pressure-transmitters'); ?>
<p class="lede">A local differential pressure gauge shows filter condition to whoever is standing at the unit, needs no power and rarely fails. A pressure transmitter sends the reading to the building automation system for trending, alarms and remote monitoring, but needs wiring, calibration and someone watching the data. Many owners specify both on every filter bank.</p>

<h2>What is being measured</h2>
<p>Filter monitoring measures the pressure difference across a filter bank: upstream static pressure minus downstream static pressure. As dust accumulates, the difference rises. Each bank (prefilter, final filter, HEPA) needs its own measurement because they load at different rates. The reading is compared with the bank's initial and final design values; see <a href="<?= url('guides/filter-pressure-drop-initial-final') ?>">initial, mid-life and final filter pressure drop</a>.</p>
<p>Pressure taps should sit in calm, representative air on each side of the bank, away from the jet of a fan or the turbulence of a coil face, with tubing routed to the instrument and protected from damage.</p>

<h2>Local differential pressure gauges</h2>
<p>Three types are common:</p>
<ul>
<li><strong>Diaphragm-type dial gauges</strong> (the widely used Magnehelic is a well-known example): a diaphragm and magnetic linkage move a pointer across a dial. Ranges such as 0 to 1, 0 to 2 or 0 to 4 in. w.c. are chosen to suit the bank.</li>
<li><strong>Inclined-vertical manometers</strong>: a liquid column in a tube, very accurate at low pressure, needs to be level and filled.</li>
<li><strong>Digital local displays</strong>: battery or loop-powered electronic gauges with a numeric readout.</li>
</ul>
<p>Strengths: immediate visual indication for technicians, no power or controls integration, low cost, long life, and they still work when the BAS is down. Many dial gauges accept adjustable set-point flags so the technician can see initial and change-out values at a glance.</p>
<p>Limitations: someone has to look at them, there is no history unless readings are logged by hand, and dial gauges can stick or drift if exposed to overpressure or vibration.</p>

<h2>Differential pressure transmitters</h2>
<p>A transmitter converts the differential pressure into a 4 to 20 mA, 0 to 10 V or networked digital signal for the BAS. Models with a local display combine both functions.</p>
<p>Strengths: continuous trending, alarms at a high-pressure threshold, remote monitoring of many units, integration with maintenance management systems, and the ability to calculate filter life from loading trends. Trends also reveal sudden drops, which can indicate a blown-out or missing filter, something a periodic visual check might miss.</p>
<p>Limitations: higher installed cost (device, wiring, BAS points, programming), the need for periodic calibration or zero checks, and dependence on someone acting on the alarms. Low-range transmitters can be sensitive to tubing leaks and installation errors.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Local gauge</th><th>Transmitter to BAS</th></tr></thead>
<tbody>
<tr><td>Visibility</td><td>At the unit only</td><td>Anywhere on the BAS; optional local display</td></tr>
<tr><td>History and trends</td><td>Manual logging only</td><td>Automatic</td></tr>
<tr><td>Alarms</td><td>None (switch accessory available)</td><td>Configurable high and low alarms</td></tr>
<tr><td>Power and wiring</td><td>None</td><td>Power, signal wiring, BAS point</td></tr>
<tr><td>Reliability</td><td>High; simple mechanism</td><td>High, but more components that can fail</td></tr>
<tr><td>Detection of blowout or missing filter</td><td>Only if a technician notices a low reading</td><td>Low-pressure alarm detects it promptly</td></tr>
<tr><td>Calibration</td><td>Occasional zero check</td><td>Periodic zero and span checks</td></tr>
<tr><td>Installed cost</td><td>Low</td><td>Higher</td></tr>
<tr><td>Typical use</td><td>Every bank, as baseline</td><td>Large or critical units, remote sites, many units</td></tr>
</tbody>
</table>

<h2>Pressure switches as a middle ground</h2>
<p>A differential pressure switch closes a contact at a set point, giving a simple "filter dirty" alarm to the BAS without analog trending. Switches are inexpensive and reliable but provide no information between clean and dirty. They are useful on small units where a trend is not needed.</p>

<h2>Selecting range and accuracy</h2>
<ul>
<li>Choose a range so that the expected final pressure drop falls in the upper half to two-thirds of the scale. A 0 to 1 in. w.c. gauge on a MERV 14 bank that changes out at 1.0 in. w.c. will peg before change-out; 0 to 2 in. w.c. is a better fit.</li>
<li>For HEPA banks, ranges such as 0 to 3 or 0 to 4 in. w.c. are common.</li>
<li>Transmitter accuracy is often stated as a percentage of full scale; a smaller range gives better absolute accuracy at low readings.</li>
<li>Specify overpressure tolerance so that a door slam or damper closure does not damage the sensor.</li>
</ul>

<h2>Installation details that matter</h2>
<ul>
<li>Mount gauges outside the casing at eye level where they can be read without opening doors.</li>
<li>Label each gauge with the bank it serves and its initial and change-out values.</li>
<li>Use static pressure tips or tube ends cut square in calm air, not facing into the airflow.</li>
<li>Route tubing so it cannot be pinched by doors or filter carts.</li>
<li>Where both gauge and transmitter are used, tee them from the same taps, or use a transmitter with a local display.</li>
<li>On outdoor units, protect gauges from sun, rain and freezing.</li>
</ul>
<p class="note">Monitoring tells you when filters are loaded; deciding the economically best point to change them is a separate question. The cost side is examined in <a href="<?= url('guides/filter-life-cycle-cost') ?>">filter life-cycle cost</a>, and broader sensor monitoring strategies in <a href="<?= url('guides/condition-monitoring-sensors') ?>">condition monitoring sensors</a>.</p>
<?php guide_end([
    ['Do I need both a filter gauge and a transmitter?', 'Many owners specify both. The gauge gives technicians an immediate reading at the unit that works without power or controls, while the transmitter provides trends and alarms through the building automation system. A transmitter with a local display can serve both purposes.'],
    ['What range filter gauge should I use?', 'Pick a range so the planned final pressure drop falls in the upper half to two-thirds of the scale. For a final filter changed at 1.0 in. w.c., a 0 to 2 in. w.c. gauge is a good fit. HEPA banks often use 0 to 3 or 0 to 4 in. w.c.'],
    ['Can a transmitter detect a blown-out filter?', 'Yes. A sudden drop in differential pressure below the clean filter value indicates a missing, collapsed or bypassed filter. A low-pressure alarm on the transmitter catches this, while a local gauge only shows it if someone looks.'],
]);
