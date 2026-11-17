<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('low-delta-t-chilled-water-coils'); ?>
<p class="lede">Low delta-T means chilled water leaves the coil not much warmer than it entered, so the plant must pump more water to carry the same load. At the coil, the usual causes are valves that pass too much water, setpoints the coil cannot satisfy, fouled air or water surfaces, laminar flow at part load and piping errors. Work through them in order of how easy they are to check.</p>

<h2>Recognising the symptom</h2>
<p>Low delta-T is a system symptom that shows up at the plant: chillers loaded below capacity while the pumps are at maximum, extra chillers staged on to meet flow rather than load, and return water temperature well below design. If design is 14°F (7.8 K) and the plant sees 7°F, it is moving roughly twice the water for the load it serves.</p>
<p>At an individual coil, compare the leaving water temperature with design. Measure entering and leaving water temperature, coil water flow (from a balancing valve or flow meter), and entering and leaving air conditions at the same time. A coil delivering design air conditions while returning water only a few degrees warmer than supply is a strong contributor; a coil delivering too little cooling is a different problem, covered in <a href="<?= url('guides/coil-capacity-shortfall-troubleshooting') ?>">diagnosing a coil short on capacity</a>.</p>

<h2>Cause 1: Leaving air setpoint below what the coil can reach</h2>
<p><strong>Check:</strong> Compare the supply air temperature setpoint with the coil's design leaving air temperature and the current chilled water supply temperature. If the setpoint is 52°F (11°C) on a coil designed for 55°F (13°C) with 44°F (7°C) water, the valve will open fully trying to reach it.</p>
<p><strong>Why it lowers delta-T:</strong> Once the coil is near its approach limit, extra water flow buys almost no extra cooling. The valve goes wide open, flow rises, the air temperature drops slightly, and leaving water stays cold.</p>
<p><strong>Fix:</strong> Restore the design setpoint, implement supply air temperature reset where appropriate, and check that chilled water supply temperature is at design. A plant running warmer supply water than design will push every coil toward this condition.</p>

<h2>Cause 2: Control valve problems</h2>
<p><strong>Check:</strong> Command the valve closed and see whether flow stops. Look at the valve's position versus command, its size relative to the coil and its close-off rating against the available differential pressure.</p>
<p><strong>Typical findings:</strong></p>
<ul>
<li>Oversized valve operating near its seat, so control is unstable and flow overshoots.</li>
<li>Valve that cannot close against high pump differential pressure, passing water through an idle coil.</li>
<li>Three-way valves left on a variable flow system, bypassing supply water directly to return.</li>
<li>Actuator stroke not calibrated, so "closed" is partially open.</li>
<li>Manual bypass valves around the control valve left open after flushing or balancing.</li>
</ul>
<p><strong>Fix:</strong> Repair or replace leaking valves, close bypasses, convert three-way valves to two-way where the system is designed for variable flow, and resize valves that cannot control. Valve sizing methods are in <a href="<?= url('guides/control-valve-sizing-cv') ?>">control valve sizing</a>.</p>

<h2>Cause 3: Fouled coil surfaces</h2>
<p><strong>Check:</strong> Measure air-side pressure drop and compare with the selection. Inspect the entering face and, if access allows, the middle rows. On the water side, look at water treatment records and ask whether the coil has ever been flushed.</p>
<p><strong>Why it lowers delta-T:</strong> Dirt on fins and scale or biofilm in tubes reduce heat transfer, so for the same air conditions the coil needs more water. The controller opens the valve; flow rises; delta-T falls.</p>
<p><strong>Fix:</strong> Clean the air side using methods suited to the coil (see <a href="<?= url('guides/coil-cleaning-methods') ?>">coil cleaning methods</a>). Address water-side fouling with chemical cleaning and better water treatment. Restore filtration to prevent recurrence.</p>

<h2>Cause 4: Laminar flow at part load</h2>
<p><strong>Check:</strong> Calculate tube velocity at the coil's typical part-load flow. If it falls below about 1.5 to 2 ft/s (0.45 to 0.6 m/s) in chilled water service, the flow may be transitional or laminar.</p>
<p><strong>Why it lowers delta-T:</strong> In laminar flow the inside heat transfer coefficient falls sharply. To meet the load, the valve must deliver more water than an equivalent turbulent coil would, so delta-T suffers precisely when the coil should be returning its warmest water.</p>
<p><strong>Fix:</strong> This is mainly a design issue. In replacement coils, choose circuiting that keeps velocity turbulent at minimum load. On existing coils, avoid control strategies that hold the coil at very low flow for long periods.</p>

<h2>Cause 5: Piping and hookup errors</h2>
<p><strong>Check:</strong> Confirm the coil is piped for counterflow (supply on the leaving-air side). Look for reversed supply and return. Check whether the coil is air-bound at high points.</p>
<p><strong>Fix:</strong> Re-pipe for counterflow and vent the coil. Parallel flow can significantly reduce capacity on deep coils and drive the valve open.</p>

<h2>Cause 6: Air-side conditions differ from design</h2>
<p><strong>Check:</strong> Measure airflow and entering wet bulb. Low airflow, or entering air drier than design, means less load per gallon. In a mixed-air unit, excessive economizer outdoor air on a dry day reduces the latent load.</p>
<p><strong>Fix:</strong> Restore airflow; check that the coil isn't running simultaneously with heating (reheat fighting cooling raises flow without raising useful load).</p>

<h2>Diagnostic summary</h2>
<table>
<thead><tr><th>Observation</th><th>Most likely cause</th></tr></thead>
<tbody>
<tr><td>Valve 100% open, leaving air at or near setpoint, low delta-T</td><td>Setpoint below coil capability, or fouling</td></tr>
<tr><td>Flow through coil with valve commanded closed</td><td>Valve leakage, bypass open, three-way valve</td></tr>
<tr><td>Delta-T fine at full load, poor at low load</td><td>Laminar flow, oversized valve</td></tr>
<tr><td>High air pressure drop across coil</td><td>Air-side fouling</td></tr>
<tr><td>Capacity low and delta-T low on a deep coil</td><td>Parallel-flow piping or air binding</td></tr>
</tbody>
</table>
<p class="note">Fix the worst coils first. In many buildings a minority of coils with open bypasses or failed valves account for most of the plant's lost delta-T. A trend of valve position, flow and leaving water temperature for each AHU quickly identifies them.</p>
<?php guide_end([
    ['What causes low delta-T at a chilled water coil?', 'Common causes are a leaving air setpoint colder than the coil can reach, leaking or oversized control valves, open bypasses or three-way valves, fouled coil surfaces, laminar flow at low load, and coils piped for parallel flow instead of counterflow.'],
    ['How do I check a coil for low delta-T?', 'Measure entering and leaving water temperatures and flow at the same time as entering and leaving air conditions, and compare with the coil schedule. Command the valve closed to check for leakage, and trend valve position against leaving water temperature.'],
    ['Does cleaning a coil improve delta-T?', 'Often yes. A fouled coil transfers less heat per gallon, so the valve opens wider to meet the load and leaving water stays cold. Restoring clean surfaces lets the coil meet the load with less flow and a higher delta-T.'],
]);
