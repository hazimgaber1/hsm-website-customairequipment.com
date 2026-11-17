<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('vibration-analysis-predictive-maintenance'); ?>
<p class="lede">Vibration analysis for predictive maintenance means collecting vibration spectra from the same points on each fan and motor at regular intervals, trending how specific frequency peaks grow, and planning repairs when a trend shows a developing fault such as unbalance, misalignment, looseness or bearing wear. The goal is to act weeks before failure, not to react to a noisy fan.</p>

<h2>From overall levels to spectra</h2>
<p>The simplest vibration check is an overall reading: a single number, usually velocity in in/s (mm/s), at each bearing. Overall readings are useful for acceptance and severity judgments, and trending them alone will catch many problems. Their limit is that they say how much vibration there is but not why.</p>
<p>A spectrum, produced by a fast Fourier transform (FFT) analyzer, breaks the vibration into its component frequencies. Each mechanical fault produces energy at characteristic frequencies related to shaft speed, so the spectrum points toward the cause. Predictive maintenance uses spectra collected on a route, compared over time, to see which faults are developing and how fast.</p>
<p>Severity zones and acceptance limits for overall readings are explained in <a href="<?= url('guides/vibration-severity-iso-10816') ?>">vibration severity and ISO 10816</a>. This guide focuses on the trending and spectral interpretation side.</p>

<h2>Reading a fan spectrum</h2>
<p>Frequencies are often expressed as multiples of running speed, written 1×, 2× and so on. For a fan running at 1,200 rpm, 1× is 20 Hz.</p>
<table>
<thead><tr><th>Fault</th><th>Typical spectral signature</th><th>Direction where it shows most</th></tr></thead>
<tbody>
<tr><td>Unbalance</td><td>Dominant peak at 1× fan speed</td><td>Radial (horizontal and vertical), in phase across the rotor</td></tr>
<tr><td>Misalignment (couplings, belt sheaves)</td><td>Peaks at 1× and 2×, sometimes 3×</td><td>High axial readings are a strong indicator</td></tr>
<tr><td>Mechanical looseness</td><td>Many harmonics of running speed, sometimes half-order peaks</td><td>Often vertical, at loose feet or bearing mounts</td></tr>
<tr><td>Rolling element bearing defects</td><td>Non-synchronous peaks at bearing defect frequencies, with harmonics and sidebands</td><td>Radial at the affected bearing</td></tr>
<tr><td>Belt problems</td><td>Peaks at belt frequency and its harmonics, below running speed</td><td>Radial, in line with the belt span</td></tr>
<tr><td>Blade pass and aerodynamic</td><td>Peak at number of blades × running speed</td><td>Varies; often affected by inlet conditions</td></tr>
<tr><td>Electrical (motor)</td><td>Peaks at twice line frequency (120 Hz in North America) and rotor bar frequencies</td><td>Radial at the motor; disappears instantly when power is cut</td></tr>
</tbody>
</table>
<p>Bearing defect frequencies are calculated from the bearing geometry: number of rolling elements, element and pitch diameters and contact angle. Most analyzers include bearing libraries that calculate them from the bearing part number.</p>

<h2>How bearing faults progress</h2>
<p>Bearing wear is the main reason predictive programs pay for themselves on air handlers, because it develops over a long period and shows clear warning stages:</p>
<ol>
<li><strong>Early stage:</strong> very high-frequency energy appears, picked up by enveloping, spike energy or ultrasound measurements, while the ordinary velocity spectrum looks normal.</li>
<li><strong>Developing defects:</strong> bearing defect frequencies appear in the spectrum at low amplitude.</li>
<li><strong>Advanced damage:</strong> defect peaks grow, harmonics and sidebands at running speed appear, and noise rises. Temperature may begin to climb.</li>
<li><strong>Near failure:</strong> the spectrum becomes broad and noisy, 1× levels may rise as clearances open, and the bearing is audibly rough.</li>
</ol>
<p>The aim is to plan the bearing replacement during stage 2 or early stage 3, during a scheduled shutdown, with parts already on site.</p>

<h2>Building a trending route</h2>
<h3>Measurement points</h3>
<p>Take readings at every fan and motor bearing in horizontal, vertical and axial directions. Mark points permanently, or mount threaded sensor pads, so data is comparable. Use the baseline recorded at startup as the first point on the trend; see <a href="<?= url('guides/fan-startup-rotation-vibration') ?>">how to start up fans</a>.</p>
<h3>Consistent conditions</h3>
<p>Vibration changes with speed. For VFD-driven fans, collect data at a consistent speed, or record speed with every reading and compare only like with like. Note also the damper and filter condition if they change airflow significantly.</p>
<h3>Frequency of collection</h3>
<p>Monthly or quarterly collection suits most air handlers; critical units may justify monthly, and very critical units continuous monitoring. Continuous wireless sensors and how they fit with route-based programs are discussed in <a href="<?= url('guides/condition-monitoring-sensors') ?>">continuous condition monitoring sensors</a>.</p>
<h3>Alarm levels</h3>
<p>Set alarms relative to the baseline as well as to absolute severity limits. A common approach is to flag a reading that has risen significantly from its own baseline, even if it is still within the acceptable severity zone, because the rate of change is the early warning.</p>

<h2>Turning data into action</h2>
<ul>
<li>Review each route's results promptly and classify each machine: normal, watch, plan repair, urgent.</li>
<li>Confirm a suspected fault with a second measurement or another technique such as infrared thermography or ultrasound before taking a unit down.</li>
<li>Schedule repairs into the next suitable shutdown and order parts.</li>
<li>After repair, take a new baseline. Compare it with the pre-repair data to confirm the fix worked.</li>
<li>Track findings over time. Repeated unbalance on one fan may point to dirt buildup or a wheel problem; repeated misalignment suggests a soft foot or base problem.</li>
</ul>
<p class="note">A fan that becomes suddenly rough, or that vibrates badly at startup, is a troubleshooting case rather than a trending one. Acute vibration diagnosis is handled in <a href="<?= url('guides/vibration-troubleshooting') ?>">vibration troubleshooting</a>.</p>
<?php guide_end([
    ['What does a 1x peak in a fan vibration spectrum mean?', 'A dominant peak at once per revolution of the fan usually indicates unbalance, often from dirt buildup on the wheel or a lost balance weight. Misalignment and bent shafts can also contribute, so check axial readings and phase.'],
    ['How often should fan vibration be measured for predictive maintenance?', 'Monthly or quarterly route collection suits most air handlers. Critical units may justify more frequent collection or continuous wireless sensors, and every reading should be taken at the same points and comparable speed.'],
    ['Can vibration analysis predict fan bearing failure?', 'Yes. Bearing defects produce characteristic frequencies that appear and grow well before failure. Trending them allows replacement during a planned shutdown instead of after a breakdown.'],
]);
