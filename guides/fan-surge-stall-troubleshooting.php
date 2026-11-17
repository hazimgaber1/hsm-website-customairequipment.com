<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-surge-stall-troubleshooting'); ?>
<p class="lede">A fan that pulses, surges or rumbles while airflow and pressure swing up and down is almost always operating to the left of the peak of its pressure curve, where it cannot hold a stable operating point. The fix is to move the operating point back to the right, by reducing system resistance, changing speed or reselecting the fan.</p>

<h2>What surge and stall actually are</h2>
<p>On a centrifugal fan curve, pressure rises from shutoff to a peak and then falls toward free delivery. To the right of the peak, the curve slopes downward: if airflow drops slightly, the fan develops more pressure and pushes it back up. That is a self-correcting, stable region.</p>
<p>To the left of the peak, the slope flattens or reverses. Air begins to separate from the blades (<strong>stall</strong>). Cells of stalled flow can travel around the wheel (<strong>rotating stall</strong>), causing pulsation at a fraction of running speed. In a system with enough stored volume, flow can collapse and recover in cycles (<strong>surge</strong>), producing a slow, heavy pumping. Forward curved wheels have a wide unstable dip; backward inclined and airfoil wheels have a smaller, sharper one near the peak.</p>
<p>The underlying theory of operating points is covered in <a href="<?= url('guides/fan-curves-and-system-curves') ?>">fan curves and system curves</a>. This guide is about finding and fixing the problem on site.</p>

<h2>Symptom, cause, check, fix</h2>
<h3>1. Rhythmic pulsing or "breathing" in duct pressure</h3>
<p><strong>Likely cause:</strong> fan operating left of peak pressure because system resistance is higher than designed.</p>
<p><strong>Check:</strong> measure fan speed, static pressure across the fan and airflow. Plot the point on the submittal curve at the measured speed. If it sits on or left of the peak, the diagnosis is confirmed. Walk the system for closed or partly closed dampers: fire and smoke dampers, outdoor air dampers stuck shut, balancing dampers left closed, VAV boxes driven to minimum.</p>
<p><strong>Fix:</strong> open the restriction. If the system genuinely needs that resistance, reselect or resheave the fan so the operating point moves right.</p>

<h3>2. Fan unstable only at low speed in a VAV system</h3>
<p><strong>Likely cause:</strong> the duct static pressure setpoint is fixed and high. As boxes close and speed falls, the operating point walks up the fan curve toward the peak.</p>
<p><strong>Check:</strong> trend fan speed, airflow and static pressure. Find the speed at which pulsation starts and compare the operating point with the curve.</p>
<p><strong>Fix:</strong> lower the static setpoint or implement trim-and-respond pressure reset, set a minimum speed above the unstable zone, or add a controlled bypass as a last resort. Reset strategies are covered in <a href="<?= url('guides/duct-static-pressure-reset') ?>">duct static pressure reset</a>.</p>

<h3>3. Supply and return fans fighting each other</h3>
<p><strong>Likely cause:</strong> a return fan driving the mixing box pressure positive, pushing the supply fan's inlet up and its operating point left, or the reverse.</p>
<p><strong>Check:</strong> measure mixed air plenum pressure. Compare supply and return airflow with the design ratio.</p>
<p><strong>Fix:</strong> retune return fan tracking or pressure control. The fan interaction itself is explained in <a href="<?= url('guides/fans-in-parallel-and-series') ?>">fans in parallel and series</a>.</p>

<h3>4. One fan in a parallel pair or array draws much lower amps than the rest</h3>
<p><strong>Likely cause:</strong> parallel fans operating near the peak can split unequally; one fan carries most of the flow while another stalls. This happens most with fans that have a pronounced dip left of peak.</p>
<p><strong>Check:</strong> compare current and inlet differential pressure on every fan at the same speed command. A healthy array shows them within a few percent.</p>
<p><strong>Fix:</strong> increase airflow or reduce static so all fans move right of peak; stage fans off at low airflow so the remaining ones run at a stable point.</p>

<h3>5. Low-frequency rumble with fluctuating motor current</h3>
<p><strong>Likely cause:</strong> rotating stall, often at a frequency below running speed.</p>
<p><strong>Check:</strong> watch motor current or drive output power; regular oscillation that correlates with the rumble points to aerodynamic instability. A vibration analyst can confirm a sub-synchronous component. For mechanical vibration causes, see <a href="<?= url('guides/vibration-troubleshooting') ?>">vibration troubleshooting</a>.</p>
<p><strong>Fix:</strong> as for symptom 1. Rebalancing will not cure an aerodynamic problem.</p>

<h3>6. Instability right after start or during economizer changeover</h3>
<p><strong>Likely cause:</strong> dampers opening slower than the fan ramps, or outdoor and return dampers briefly both near closed.</p>
<p><strong>Check:</strong> trend damper positions and fan speed during the transition.</p>
<p><strong>Fix:</strong> prove dampers open before the fan ramps; lengthen VFD acceleration time; correct damper linkage so the mixing box always has an open path.</p>

<h2>Quick reference table</h2>
<table>
<thead><tr><th>Observation</th><th>Points toward</th><th>First check</th></tr></thead>
<tbody>
<tr><td>Static pressure high, airflow low, point left of peak</td><td>System restriction</td><td>Damper positions, filter pressure drop</td></tr>
<tr><td>Instability only below a certain speed</td><td>High fixed static setpoint</td><td>Setpoint and reset logic</td></tr>
<tr><td>Unequal currents among parallel fans</td><td>Parallel fan instability</td><td>Per-fan current at equal command</td></tr>
<tr><td>Oscillation tracks economizer position</td><td>Mixing box pressure</td><td>Return fan control, damper sequencing</td></tr>
<tr><td>Point well right of peak but still noisy</td><td>Not surge; look elsewhere</td><td>Mechanical vibration, drive resonance</td></tr>
</tbody>
</table>

<h2>Preventing recurrence</h2>
<ul>
<li>Select fans so the lowest expected operating point, at minimum airflow and highest pressure, stays clearly right of peak.</li>
<li>Program minimum speed limits in the drive based on the unstable zone, not an arbitrary percentage.</li>
<li>Prove damper positions before fan start.</li>
<li>Monitor fan inlet differential pressure or airflow so instability shows up in trends before occupants hear it.</li>
</ul>
<p class="warn">Prolonged operation in surge or stall loads blades and bearings cyclically and can lead to fatigue damage. Do not leave a surging fan running while waiting for a permanent fix; reduce the restriction or change speed immediately.</p>
<?php guide_end([
    ['What causes fan surge?', 'Surge happens when a fan operates to the left of the peak of its pressure curve, usually because system resistance is higher than designed. The fan cannot hold a stable point and flow oscillates.'],
    ['How do I tell surge from mechanical vibration?', 'Surge and stall come with fluctuating pressure, airflow and motor current, and change with damper position or speed. Mechanical vibration typically tracks running speed and does not change with system resistance.'],
    ['Can a VAV system cause fan stall?', 'Yes. With a fixed high duct static setpoint, the fan moves up its curve toward the peak as boxes close. Lowering or resetting the setpoint usually cures it.'],
    ['Will a bigger fan fix stall?', 'Not necessarily. An oversized fan running at low airflow is more likely to operate near its peak. The fan must be sized so its expected operating range sits right of peak.'],
]);
