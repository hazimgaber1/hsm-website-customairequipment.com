<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('minimum-outdoor-air-control-vav'); ?>
<p class="lede">A minimum outdoor air damper set to a fixed position at design airflow delivers less and less outdoor air as a VAV supply fan slows, because the suction that pulls air through the damper falls with fan speed. Reliable minimum ventilation in a VAV system needs active control: measured outdoor airflow with a modulating damper, a separate minimum damper held at constant pressure difference, a dedicated outdoor air fan, or a separate ventilation system.</p>

<h2>Why a fixed damper position fails</h2>
<p>Outdoor air enters the mixing box because the mixed air plenum is at a lower pressure than outdoors. Flow through a damper at a fixed position follows the usual orifice relationship:</p>
<p class="formula">Q ∝ √ΔP</p>
<p>The mixed air plenum pressure depends mainly on the pressure drop through the return path and return damper, which scales roughly with the square of airflow. As a VAV fan slows from 100 percent to 50 percent airflow, that pressure difference falls to about a quarter of its design value. Outdoor airflow through the fixed damper then falls to about √0.25 = 50 percent of its design minimum.</p>
<p><strong>Example:</strong> a 20,000 cfm VAV unit needs 4,000 cfm of outdoor air, and the minimum damper position was set during balancing at full flow. At 10,000 cfm supply, the damper at the same position delivers roughly 2,000 cfm, half the required ventilation, even though the occupancy and ventilation requirement may not have changed.</p>
<p>Wind, stack effect and return fan operation also change plenum pressure, so the outdoor airflow through a fixed damper drifts with conditions unrelated to the ventilation need. Some designers increase the minimum position to compensate at low flow, but that over-ventilates at high flow, wasting heating and cooling energy.</p>

<h2>Alternative 1: Airflow measurement with a modulating damper</h2>
<p>An outdoor airflow measuring station measures actual outdoor air, and a control loop modulates the outdoor air damper (or the minimum outdoor air damper) to hold the outdoor air setpoint. When the economizer is active, the setpoint becomes a minimum floor rather than a target.</p>
<ul>
<li>Works directly on the quantity that matters.</li>
<li>Depends on measurement accuracy at minimum velocities, which can be challenging; technology choices are compared in <a href="<?= url('guides/outdoor-airflow-measurement-stations') ?>">outdoor airflow measurement stations</a>.</li>
<li>When the outdoor damper reaches fully open and outdoor air is still short, the sequence can modulate the return damper toward closed to increase plenum suction.</li>
</ul>

<h2>Alternative 2: Separate minimum damper with differential pressure control</h2>
<p>A small, separate minimum outdoor air damper is sized for the minimum airflow. During commissioning, the balancer measures outdoor airflow with the damper fully open and records the pressure difference across it at the design minimum. In operation, the controls hold that pressure difference by modulating the return air damper. Constant ΔP across a fully open damper means constant flow.</p>
<ul>
<li>Avoids low-velocity measurement problems by keeping the minimum damper's velocity high.</li>
<li>Relies on a differential pressure transmitter, which is simpler and cheaper than an airflow station.</li>
<li>The setpoint can be reset if the required minimum changes, using a calibration curve.</li>
<li>This is one of the configurations in <a href="<?= url('guides/ashrae-guideline-36-sequences') ?>">ASHRAE Guideline 36</a>.</li>
</ul>

<h2>Alternative 3: Return damper modulation to maintain mixed plenum pressure</h2>
<p>A simpler variant keeps the outdoor damper at a fixed minimum position but controls mixed air plenum pressure to a fixed setpoint by modulating the return damper. Because the outdoor damper sees constant ΔP, the outdoor airflow stays nearly constant. It is less direct than Alternative 2 because outdoor pressure fluctuations still matter, but it is a large improvement over a fixed position.</p>

<h2>Alternative 4: Dedicated outdoor air injection fan</h2>
<p>A small fan with its own airflow measurement pushes the minimum outdoor air into the mixing plenum. The fan is controlled to a constant airflow regardless of the main fan speed. It adds a fan, a motor and maintenance, but it delivers stable ventilation in systems where plenum pressure varies widely or where the main intake is far too large for minimum flow.</p>

<h2>Alternative 5: Decoupled ventilation</h2>
<p>A separate dedicated outdoor air system delivers ventilation to zones or to the AHU inlet at a constant, measured rate. The main VAV unit then recirculates only. This removes the minimum outdoor air problem from the VAV unit entirely but adds a second system. The comparison of system types is in <a href="<?= url('guides/ahu-vs-rtu-vs-doas') ?>">AHU vs RTU vs DOAS</a>.</p>

<h2>Comparing the approaches</h2>
<table>
<thead><tr><th>Approach</th><th>Accuracy at low flow</th><th>Added hardware</th><th>Commissioning effort</th></tr></thead>
<tbody>
<tr><td>Fixed damper position</td><td>Poor</td><td>None</td><td>Low, but result invalid at part load</td></tr>
<tr><td>Airflow station + modulating damper</td><td>Good if station suits velocity</td><td>Airflow station</td><td>Moderate</td></tr>
<tr><td>Separate minimum damper + ΔP</td><td>Good</td><td>Minimum damper, DP transmitter</td><td>Moderate; calibration needed</td></tr>
<tr><td>Return damper to plenum pressure</td><td>Fair to good</td><td>Plenum DP sensor</td><td>Moderate</td></tr>
<tr><td>Injection fan</td><td>Good</td><td>Fan, airflow measurement</td><td>Moderate</td></tr>
<tr><td>Decoupled ventilation</td><td>Good</td><td>Separate system</td><td>Higher</td></tr>
</tbody>
</table>

<h2>The setpoint itself can change</h2>
<p>Holding a constant outdoor airflow is only half the problem. In multiple-zone VAV systems, the outdoor air needed at the AHU depends on which zones are calling for how much air, because the critical zone's ventilation fraction sets the system requirement. Sequences that recalculate the outdoor air setpoint continuously from zone airflow and ventilation requirements can reduce outdoor air at some conditions and increase it at others. The ventilation calculation itself is covered by ASHRAE 62.1 procedures; for control purposes, the result is a varying setpoint that the methods above must track.</p>
<p class="note">Whatever method is used, verify outdoor airflow at both design and minimum supply airflow during commissioning. Checking only at full flow will not reveal a fixed-position problem.</p>
<?php guide_end([
    ['Why does outdoor air drop when a VAV fan slows down?', 'Outdoor air is pulled through the damper by suction in the mixed air plenum. As the fan slows, that suction falls roughly with the square of airflow, and flow through a fixed damper falls with the square root of pressure, so outdoor air drops about in proportion to supply airflow.'],
    ['What is the best way to maintain minimum outdoor air in a VAV system?', 'Common reliable methods are a measured outdoor airflow with a modulating damper, or a separate minimum outdoor air damper held at constant pressure difference by modulating the return damper. The best choice depends on intake velocity and available space.'],
    ['Can I just increase the minimum damper position?', 'That compensates at low supply airflow but over-ventilates at high airflow, wasting energy, and it still varies with wind and building pressure. Active control is more accurate and usually more efficient.'],
]);
