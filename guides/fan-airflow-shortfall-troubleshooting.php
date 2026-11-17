<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-airflow-shortfall-troubleshooting'); ?>
<p class="lede">When a fan is short of airflow, first prove the fan itself: correct rotation, correct speed, a sound wheel set properly to its inlet cone, and clean inlet conditions. Only when the fan checks out against its curve at the measured speed does it make sense to chase the rest of the system.</p>

<h2>Before you start: get three numbers</h2>
<p>Every diagnosis below relies on comparing what the fan is doing with what its curve says it should do. Measure:</p>
<ul>
<li><strong>Fan speed</strong> with a tachometer or from the drive's output frequency and motor slip, not from the speed command.</li>
<li><strong>Static pressure across the fan</strong>, inlet to outlet, at locations that avoid turbulence.</li>
<li><strong>Airflow</strong>, from a duct traverse, a calibrated airflow station or inlet cone taps.</li>
</ul>
<p>Plot speed and static pressure on the submittal fan curve. If the measured airflow is close to the curve at that speed and pressure, the fan is healthy and the problem is system resistance; continue with <a href="<?= url('guides/high-static-pressure-troubleshooting') ?>">high static pressure troubleshooting</a>. If measured airflow and pressure are both below the curve at that speed, the fan is underperforming and the checks below apply.</p>

<h2>Symptom: low airflow and low pressure at correct speed</h2>
<h3>Cause 1: wheel rotating backward</h3>
<p>A centrifugal wheel running backward still moves air in the normal direction, but only a fraction of rated airflow and pressure, often with extra noise and high current relative to the airflow. This is one of the most common startup faults, especially after electrical work that swaps two phases or a VFD parameter change.</p>
<p><strong>Check:</strong> bump the fan and observe rotation against the arrow on the housing or bulkhead. For plenum fans, look at blade orientation: a backward inclined blade leans away from the direction of rotation.</p>
<p><strong>Fix:</strong> swap two motor leads (with power locked out), or change the direction parameter in the VFD or EC controller. Record the change.</p>

<h3>Cause 2: wheel set wrong on the inlet cone</h3>
<p>Excess gap or too little overlap lets air recirculate from discharge to inlet.</p>
<p><strong>Check:</strong> measure gap and overlap at four points against the manufacturer's dimensions. See <a href="<?= url('guides/fan-inlet-cone-wheel-clearance') ?>">inlet cone overlap and wheel clearance</a>.</p>
<p><strong>Fix:</strong> recentre the cone, reposition the wheel on the shaft and retorque the hub.</p>

<h3>Cause 3: wrong wheel or damaged wheel</h3>
<p>A replacement wheel of a different width or blade design, or a wheel with bent, eroded or heavily fouled blades, will not match the original curve.</p>
<p><strong>Check:</strong> compare wheel diameter, width and blade type with the submittal. Inspect blades for buildup, erosion and deformation.</p>
<p><strong>Fix:</strong> clean the wheel; replace damaged or incorrect wheels with the specified part.</p>

<h3>Cause 4: inlet obstruction or swirl</h3>
<p>Something in front of the inlet starves it: an access door partly open into the inlet plenum, a filter frame, a pipe or conduit run, a blank-off plate left in place, or an elbow too close to a housed fan inlet producing swirl.</p>
<p><strong>Check:</strong> look into the inlet plenum with the fan locked out. Compare clearances with the manufacturer's minimums. Inlet geometry penalties are explained in <a href="<?= url('guides/system-effect-amca-201') ?>">system effect</a>.</p>
<p><strong>Fix:</strong> remove the obstruction. Where swirl comes from ductwork, add turning vanes or straight length.</p>

<h2>Symptom: speed is lower than expected</h2>
<h3>Cause 5: drive or motor not reaching design speed</h3>
<p><strong>Check:</strong> compare actual speed with the selection. On VFDs, check maximum frequency, current limit and any active speed limit from the BAS. On EC motors, check the analog input signal and the maximum speed setting. On belt drives, check sheave pitch diameters against the drive schedule and look for belt slip (glazing, squeal, low belt tension).</p>
<p><strong>Fix:</strong> correct parameters, sheaves or belt tension. Confirm the wheel speed limit before raising speed.</p>

<h3>Cause 6: motor wired for the wrong voltage or speed</h3>
<p>A dual-voltage motor connected for the higher voltage on a lower supply, or a two-speed motor running on its low-speed winding, will run slow or overheat.</p>
<p><strong>Check:</strong> compare nameplate connection diagram with actual wiring and supply voltage.</p>

<h2>Symptom: one fan in an array is low</h2>
<p><strong>Likely causes:</strong> that fan is rotating backward, its EC motor or VFD is limiting, its backdraft damper is stuck partly closed, or its inlet is obstructed.</p>
<p><strong>Check:</strong> compare inlet cone differential pressure and current across all fans at the same speed command. A fan with normal current but low differential pressure is suspect for rotation or obstruction; low current and low pressure point to speed or damper.</p>
<p><strong>Fix:</strong> as above for the individual fan.</p>

<h2>Quick reference</h2>
<table>
<thead><tr><th>Observation</th><th>Most likely</th><th>First check</th></tr></thead>
<tbody>
<tr><td>Low flow, low pressure, high noise, amps not reduced</td><td>Backward rotation</td><td>Visual rotation check</td></tr>
<tr><td>Low flow, low pressure, normal noise</td><td>Cone gap, wrong wheel, inlet obstruction</td><td>Gap and overlap measurement</td></tr>
<tr><td>Speed below selection</td><td>Drive limits, belt slip, sheave error</td><td>Tachometer reading vs drive frequency</td></tr>
<tr><td>Flow matches curve at measured pressure, but pressure is high</td><td>System resistance, not the fan</td><td>Static pressure profile through system</td></tr>
<tr><td>One fan in array low</td><td>Individual fan fault</td><td>Per-fan inlet cone Δp and current</td></tr>
</tbody>
</table>
<p class="warn">Lock out and tag out before inspecting rotation, wheels or inlet cones. Fans in an array can windmill from neighbouring fans' airflow even when de-energized.</p>
<?php guide_end([
    ['Can a fan run backward and still move air?', 'Yes. A centrifugal wheel running backward still pushes air in the normal direction, but at a fraction of rated airflow and pressure. Always confirm rotation at startup.'],
    ['How do I know if low airflow is the fan or the ductwork?', 'Measure fan speed, static pressure and airflow and plot them on the fan curve. If the fan matches its curve at the measured speed, the problem is system resistance. If it falls below its curve, the fan is at fault.'],
    ['What fan-level problems cause low airflow?', 'Backward rotation, wrong inlet cone gap or overlap, a wrong or damaged wheel, inlet obstructions, and fans running below design speed from drive settings or belt slip.'],
    ['How do I find a weak fan in a fan array?', 'Compare inlet cone differential pressure and motor current for every fan at the same speed command. The fan that stands out from the rest is the one to inspect.'],
]);
