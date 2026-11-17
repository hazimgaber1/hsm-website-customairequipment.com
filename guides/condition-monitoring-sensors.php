<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('condition-monitoring-sensors'); ?>
<p class="lede">Continuous condition monitoring puts permanent sensors on fans, motors and drives so their health is measured every few minutes instead of during a quarterly route. The common sensor types on air handlers are wireless vibration and temperature sensors on bearings, current sensors or drive data for motors, and differential pressure sensors on filters and coils, all reporting to a cloud platform or the building automation system.</p>

<h2>Why monitor continuously</h2>
<p>Route-based measurement catches most slowly developing faults, but it has gaps. A bearing that deteriorates quickly between quarterly readings, a fan that only vibrates badly at one speed overnight, or a unit on a remote roof that is rarely visited can all fail between visits. Continuous sensors close those gaps and reduce the labour of walking a route. They also give operators data from units that are hard or unsafe to reach.</p>
<p>The trade-off is cost per point and the effort of managing a data stream. Continuous monitoring is easiest to justify on critical units, units with poor access, large fan arrays where routes take a long time, and sites where failures are expensive. How to interpret vibration trends once the data exists is covered in <a href="<?= url('guides/vibration-analysis-predictive-maintenance') ?>">vibration analysis for predictive maintenance</a>; this guide is about the sensors and systems.</p>

<h2>Sensor types</h2>
<h3>Wireless vibration and temperature sensors</h3>
<p>Battery-powered sensors mounted on bearing housings measure vibration, usually as overall velocity and acceleration, and surface temperature. Many also capture spectra or waveforms on a schedule or when a threshold is exceeded.</p>
<ul>
<li><strong>Measurement axes:</strong> triaxial sensors measure horizontal, vertical and axial at once; single-axis sensors are cheaper but less informative.</li>
<li><strong>Frequency range:</strong> the sensor must cover running speed for slow fans and high frequencies for early bearing defects. Check the specified range and sampling rate against the fan speeds.</li>
<li><strong>Battery life:</strong> depends on how often data is sent and whether spectra are captured. Ask the supplier for battery life at the intended sampling rate, not the best case.</li>
<li><strong>Mounting:</strong> epoxy or a threaded stud on a machined pad gives the best signal; magnets are convenient but can shift.</li>
</ul>
<h3>Motor current and drive data</h3>
<p>Motor current reflects load. Current sensors on motor leads, or current, power and speed read directly from a VFD or EC motor over a network, show changes in load from belt slip, damper failures, filter loading or a fan running backwards. Some systems apply motor current signature analysis to detect rotor or supply faults from the current waveform.</p>
<p>Reading data from drives that already exist is often the cheapest condition monitoring available. Drives report speed, current, power, DC bus voltage, heat sink temperature and fault history. Integration options are covered in <a href="<?= url('guides/bacnet-vs-modbus-integration') ?>">BACnet vs Modbus integration</a>.</p>
<h3>Differential pressure</h3>
<p>Pressure transmitters across filters and coils show loading and fouling continuously, letting changes happen at the right time rather than on a calendar.</p>
<h3>Other sensors</h3>
<ul>
<li>Ultrasound sensors for early bearing lubrication problems.</li>
<li>Thermal sensors on electrical connections in drives and panels.</li>
<li>Leak and water sensors in drain pans and on floors.</li>
<li>Airflow measurement for detecting fan performance loss.</li>
</ul>

<h2>Comparing the main options</h2>
<table>
<thead><tr><th>Option</th><th>Detects well</th><th>Limitations</th></tr></thead>
<tbody>
<tr><td>Wireless vibration and temperature on bearings</td><td>Unbalance, misalignment, looseness, bearing wear, lubrication</td><td>Battery management; spectra resolution may be limited</td></tr>
<tr><td>VFD or EC data over the network</td><td>Load changes, faults, overheating drives, speed problems</td><td>Little direct insight into bearing condition</td></tr>
<tr><td>Clamp-on current sensors</td><td>Load trends, belt slip, single phasing</td><td>Needs interpretation against operating conditions</td></tr>
<tr><td>Filter and coil differential pressure</td><td>Loading, fouling, bypass (low readings)</td><td>Needs good sensing tube installation</td></tr>
</tbody>
</table>

<h2>Communication and platforms</h2>
<p>Wireless sensors typically communicate to a gateway, which forwards data to a cloud platform over cellular or the building network. Others integrate directly into the BAS. Points to settle at the start:</p>
<ul>
<li><strong>Range and penetration:</strong> signals from inside a steel casing to a gateway outside can be weak. Test before installing a full set; gateways may need to be close or external antennas used.</li>
<li><strong>IT and cybersecurity:</strong> involve the owner's IT team early about network connections, cloud data storage and remote access.</li>
<li><strong>Data ownership:</strong> confirm the owner can export raw data if the service ends.</li>
<li><strong>Alarm routing:</strong> decide who receives alerts and how they respond. Alerts with no owner get ignored.</li>
<li><strong>BAS integration:</strong> whether alarms appear on the BAS, in a CMMS, or only on the vendor's dashboard.</li>
</ul>

<h2>Setting thresholds and baselines</h2>
<ol>
<li>Install sensors and let them collect for a few weeks under normal operation to establish each machine's baseline.</li>
<li>Set alert levels relative to the baseline as well as to absolute severity limits from fan vibration guidance.</li>
<li>For VFD fans, account for speed: either set speed-banded thresholds or normalize readings to speed.</li>
<li>Review alerts for the first months and adjust thresholds to cut nuisance alarms without hiding real changes.</li>
</ol>
<p class="note">Many platforms offer automated diagnostics that name a suspected fault. Treat these as prompts to investigate, and confirm with a manual check before taking equipment down.</p>

<h2>Practical installation points</h2>
<ul>
<li>Mount sensors on the bearing housing, as close to the load zone as possible, not on guards or casing panels.</li>
<li>Label each sensor with the asset and location so data maps correctly.</li>
<li>Keep sensor and cable routing clear of moving parts and access paths.</li>
<li>Specify sensors rated for the airstream temperature and humidity, and for washdown where relevant.</li>
<li>Include sensor battery replacement in the maintenance program.</li>
</ul>
<p>Factory-installed monitoring points can be included in a custom air handler order; discuss sensor locations with the manufacturer at the design stage through the <a href="<?= url('contact') ?>">contact page</a>.</p>
<?php guide_end([
    ['Are wireless vibration sensors accurate enough for fan monitoring?', 'For trending overall vibration and temperature they work well, and many capture spectra adequate for diagnosing common faults. Check the frequency range, axes and sampling against your fan speeds, and confirm findings with a portable analyzer when needed.'],
    ['Can a VFD be used for condition monitoring?', 'Yes. Drives report current, power, speed, heat sink temperature and fault history, which reveal load changes, belt slip, damper failures and drive problems. They give little direct insight into bearing condition, so pair them with vibration sensors on critical fans.'],
    ['Will wireless sensors work inside a steel air handler casing?', 'Often, but steel casings attenuate signals. Test the signal from inside the unit before committing, and plan gateway locations or external antennas so sensors communicate reliably.'],
]);
