<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('coil-capacity-shortfall-troubleshooting'); ?>
<p class="lede">When a coil cannot hold its leaving air setpoint, the cause is almost always on one of four lists: not enough or too much air, not enough water or water at the wrong temperature, air trapped in the tubes, or dirty heat transfer surfaces. Measure before replacing anything; most capacity problems are fixed without touching the coil.</p>

<h2>First, confirm it is really the coil</h2>
<p>A coil cannot be judged without knowing what it was asked to do. Gather the coil schedule or selection: airflow, entering air dry bulb and wet bulb, fluid temperatures and flow, and rated capacity. Then take a simultaneous set of field measurements:</p>
<ul>
<li>Airflow through the coil (traverse or a calibrated airflow station).</li>
<li>Entering and leaving air dry bulb and wet bulb, measured across several points of the face.</li>
<li>Entering and leaving fluid temperatures at the coil connections.</li>
<li>Fluid flow from a balancing valve, flow meter or the pump curve.</li>
<li>Control valve position and command.</li>
</ul>
<p>Calculate air-side capacity (4.5 × CFM × Δh for cooling, 1.08 × CFM × ΔT for heating) and water-side capacity (500 × GPM × ΔT for water). If the two agree within measurement error, the numbers are trustworthy. If entering conditions are far worse than design, the coil may be working perfectly and simply facing a bigger load than it was sized for.</p>

<h2>Symptom: leaving air too warm, valve wide open, fluid delta-T large</h2>
<p><strong>Likely cause:</strong> not enough fluid flow.</p>
<p><strong>Checks:</strong></p>
<ul>
<li>Measure flow and compare with design. A large fluid delta-T with low flow points to a flow restriction.</li>
<li>Check strainers at the coil and at the pump.</li>
<li>Check balancing valve settings; they may have been set for a different design or closed during service.</li>
<li>Check whether the control valve actually reaches full open, and whether its Cv matches the design flow at the available differential pressure.</li>
<li>Check distribution: a coil at the end of a long branch may be starved if the pump or differential pressure setpoint is too low.</li>
</ul>
<p><strong>Fix:</strong> Clean strainers, rebalance, correct valve stroke, and raise the differential pressure setpoint if the remote coil is starved.</p>

<h2>Symptom: leaving air too warm, fluid temperatures off design</h2>
<p><strong>Likely cause:</strong> the plant is not delivering design supply temperature.</p>
<p><strong>Checks:</strong> Measure supply fluid at the coil, not just at the plant. Long runs, mixing through open bypasses, or a chilled water reset strategy can deliver 48°F (9°C) water to a coil designed for 44°F (7°C). A few degrees warmer supply can remove a large share of a cooling coil's capacity, especially latent capacity.</p>
<p><strong>Fix:</strong> Correct the plant setpoint or reset schedule during peak load and find sources of supply-return mixing.</p>

<h2>Symptom: fluid flow is at design but capacity is low and some tubes feel different</h2>
<p><strong>Likely cause:</strong> air binding.</p>
<p><strong>Checks:</strong></p>
<ul>
<li>Run a hand or infrared thermometer across the return bends or header. Circuits filled with air show different temperatures from active circuits.</li>
<li>Open the coil's high-point vent and see whether air discharges.</li>
<li>Check the piping for high points without vents, especially where piping rises above the coil.</li>
<li>Check that supply enters at the bottom and return leaves at the top.</li>
</ul>
<p><strong>Fix:</strong> Vent the coil and system thoroughly; add automatic or manual vents at high points; correct piping where the coil is supplied from the top. The procedure is in <a href="<?= url('guides/water-coil-venting-draining') ?>">how to vent and drain water coils</a>.</p>

<h2>Symptom: airflow is low, coil leaving air colder than design</h2>
<p><strong>Likely cause:</strong> an air-side problem upstream or downstream, not a coil problem in itself. Low airflow lets the coil drive leaving air temperature down while total capacity falls. Rooms may be warm despite cold supply air.</p>
<p><strong>Checks:</strong> filter loading, damper positions, fan speed and belt condition, and the coil's own air pressure drop.</p>
<p><strong>Fix:</strong> Restore airflow. Persistent airflow problems are covered in <a href="<?= url('guides/fan-airflow-shortfall-troubleshooting') ?>">fan airflow shortfall troubleshooting</a>.</p>

<h2>Symptom: airflow at design, air pressure drop across coil high</h2>
<p><strong>Likely cause:</strong> air-side fouling.</p>
<p><strong>Checks:</strong> Compare measured coil pressure drop with the selection. Inspect the entering face with a light; check behind it if access permits. Fouling in the middle rows can hide behind a clean-looking face.</p>
<p><strong>Fix:</strong> Clean the coil, then address the filtration or bypass that allowed the dirt through.</p>

<h2>Symptom: capacity drifts down over years</h2>
<p><strong>Likely cause:</strong> water-side scaling or fin corrosion.</p>
<p><strong>Checks:</strong> Water treatment records; tube condition at a removed header plug or a coil sample; fin-to-tube contact on older coils in corrosive environments (loose fins wiggle on the tube).</p>
<p><strong>Fix:</strong> Chemical cleaning of tubes; for corroded fins, coil replacement with appropriate materials or coatings.</p>

<h2>Symptom: some of the face is cold and some warm</h2>
<p><strong>Likely cause:</strong> uneven airflow or uneven circuit feeding.</p>
<p><strong>Checks:</strong> Traverse leaving air temperature across the face. A pattern that follows the air approach (cold where velocity is low, warm where it is high) points to air distribution. A pattern that follows circuits points to air binding or a blocked circuit.</p>
<p><strong>Fix:</strong> Air distribution baffles or diffusers upstream of the coil; venting or flushing of blocked circuits.</p>

<h2>Quick diagnostic table</h2>
<table>
<thead><tr><th>Airflow</th><th>Fluid flow</th><th>Fluid ΔT</th><th>Likely problem</th></tr></thead>
<tbody>
<tr><td>Design</td><td>Low</td><td>High</td><td>Flow restriction, valve, balancing</td></tr>
<tr><td>Design</td><td>Design</td><td>Low</td><td>Air binding, fouling, wrong supply temp</td></tr>
<tr><td>Low</td><td>Design</td><td>Low</td><td>Air-side restriction</td></tr>
<tr><td>High</td><td>Design</td><td>High</td><td>Load above design; check airflow setting</td></tr>
</tbody>
</table>
<p class="note">When the coil passes plenty of water but returns it with only a small temperature change, and the coil otherwise holds its leaving air temperature, the problem is low delta-T rather than low capacity. That is a different diagnosis; see <a href="<?= url('guides/low-delta-t-chilled-water-coils') ?>">troubleshooting low delta-T</a>.</p>
<?php guide_end([
    ['Why is my chilled water coil not cooling enough?', 'The most common causes are low water flow from clogged strainers or valve problems, warmer than design supply water, air trapped in the coil tubes, low or uneven airflow, and fouled fins or tubes. Measure airflow, water flow and temperatures together before deciding.'],
    ['How do I know if a coil is air bound?', 'Air-bound circuits show different temperatures from active circuits when you scan the return bends or headers. Opening the high-point vent may release air. Coils supplied from the top or piped with unvented high points are especially prone to air binding.'],
    ['How do I check coil capacity in the field?', 'Measure airflow and entering and leaving air conditions to get the air-side load, and fluid flow and temperatures to get the fluid-side load. If both agree, compare them with the coil selection at the actual entering conditions, not just the design conditions.'],
]);
