<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('backdraft-dampers-vs-blank-off-plates'); ?>
<p class="lede">When one fan in an array stops, the pressurized discharge plenum pushes air backward through it into the inlet side. Backdraft dampers block that path automatically and permanently, at the cost of pressure drop on every fan all the time; blank-off plates cost nothing in normal operation but must be installed by hand after a failure.</p>

<h2>What happens when an array fan stops</h2>
<p>All the fans in an array share one discharge plenum at positive pressure relative to the inlet plenum. A running fan holds that pressure difference. A stopped fan's wheel is just an opening. Air flows backward through it, from high pressure to low, and returns to the inlet of the running fans. The stopped wheel will usually windmill backward.</p>
<p>That recirculating air does nothing useful. The remaining fans have to move it in addition to the system airflow, so they run faster and use more power, and the unit's delivered airflow drops further than the loss of one fan alone would suggest. In a large array at high static pressure, the backflow through one open fan inlet can be a large fraction of one fan's normal airflow. A backward-turning wheel can also be dangerous to a technician and can stress a motor that tries to restart against it.</p>
<p>There are three common ways to deal with it: automatic backdraft dampers, manual blank-off plates and doing nothing. The redundancy calculations that determine how many fans can be lost are in <a href="<?= url('guides/fan-array-redundancy-n1-vs-n2') ?>">N+1 vs N+2 redundancy</a>.</p>

<h2>Options compared</h2>
<table>
<thead><tr><th>Factor</th><th>Gravity backdraft damper per fan</th><th>Motorized isolation damper per fan</th><th>Manual blank-off plate</th><th>No isolation</th></tr></thead>
<tbody>
<tr><td>Response to failure</td><td>Automatic, immediate</td><td>Automatic via controls</td><td>Only after a technician installs it</td><td>None</td></tr>
<tr><td>Pressure drop in normal operation</td><td>Continuous; every fan pays it</td><td>Low when fully open, but still present</td><td>None</td><td>None</td></tr>
<tr><td>Energy impact over life</td><td>Highest</td><td>Moderate</td><td>Lowest</td><td>Low normally; high during failures</td></tr>
<tr><td>Added length</td><td>Some; damper depth on each fan</td><td>Some, plus actuators</td><td>None</td><td>None</td></tr>
<tr><td>Moving parts and maintenance</td><td>Blades and bearings on every fan</td><td>Blades, actuators, wiring, end switches</td><td>None until used</td><td>None</td></tr>
<tr><td>First cost</td><td>Moderate</td><td>Highest</td><td>Lowest</td><td>None</td></tr>
<tr><td>Best fit</td><td>Critical units that must hold airflow unattended</td><td>Critical units with controls that verify isolation</td><td>Sites with staff who respond quickly</td><td>Arrays where a short airflow drop is acceptable</td></tr>
</tbody>
</table>

<h2>Gravity backdraft dampers</h2>
<p>A gravity damper on each fan's discharge or inlet opens when the fan pushes air through it and closes under gravity or a light counterweight when flow reverses. Designs vary from simple multi-blade dampers to purpose-built radial dampers that sit around a plenum fan's discharge.</p>
<p>Their great advantage is that they work without controls or staff. The drawback is the permanent pressure drop. Every fan must push its air through a damper, so the array is selected against a slightly higher static pressure for its entire life, including the vast majority of hours when no fan has failed. Partially open blades at low airflow can also chatter or create noise, and the damper itself adds a disturbance near the fan that must be included in the fan's system effect allowance.</p>
<p class="note">Ask the vendor whether the published fan performance already includes the damper loss or whether it must be added to the internal static pressure.</p>

<h2>Motorized isolation dampers</h2>
<p>An actuated damper on each fan opens when that fan is commanded on and proven running, and closes when it stops. With low-leakage blades, a motorized damper can seal better than a gravity damper and, when fully open, may present lower loss. It also lets the controls confirm isolation through end switches. The price is an actuator, wiring and a control point for every fan, plus another failure mode: an actuator that fails closed on a running fan.</p>

<h2>Blank-off plates</h2>
<p>A blank-off plate is a sheet metal cover sized to seal one fan's inlet cone or a module opening. It is stored in or near the unit and installed after a fan fails. Because nothing sits in the airstream during normal operation, the array runs at its lowest possible pressure and power all the time.</p>
<p>The weakness is time. From the moment a fan stops until someone installs the plate, the array runs with recirculation. In a building with on-site maintenance staff and alarms that identify which fan failed, that may be minutes or hours. In an unattended facility, it could be days. Plates should be:</p>
<ul>
<li>Stored at the unit, labelled, and matched to the fan size.</li>
<li>Designed so one person can fit them safely from the inlet side, with the failed fan locked out.</li>
<li>Covered in the operator training and O&amp;M manual.</li>
</ul>
<p class="warn">Never install a blank-off plate on the inlet of a wheel that is still windmilling. Lock out the motor and stop the wheel first.</p>

<h2>Running without isolation</h2>
<p>Some arrays, particularly those with many fans at low static pressure, simply accept the recirculation. Losing one fan of sixteen at 2 in. w.c. costs relatively little. If the remaining fans have speed headroom, the controls raise speed to hold the airflow or pressure setpoint and the penalty is extra power until the fan is repaired. Whether this is acceptable depends on the fan count, the static pressure and how quickly repairs happen.</p>

<h2>How to choose</h2>
<ol>
<li>Estimate the backflow and extra power with one fan off and no isolation, using the vendor's selection software.</li>
<li>Compare that with the lifetime energy cost of a permanent damper loss on every fan.</li>
<li>Factor in how fast the site can respond to a fan alarm.</li>
<li>For critical facilities, favour automatic isolation; for staffed sites with modest static, blank-off plates are often the better life-cycle choice.</li>
</ol>
<p>The sequence side, including how the controls react to a fan failure, is in <a href="<?= url('guides/fan-array-control-sequences') ?>">fan array control sequences</a>.</p>
<?php guide_end([
    ['Why does air flow backward through a failed fan in an array?', 'The running fans keep the discharge plenum at higher pressure than the inlet plenum. A stopped wheel is an open path, so air flows from high to low pressure back through it.'],
    ['Do backdraft dampers waste energy?', 'Yes, a little all the time. Each fan has to push its airflow through the damper, which adds pressure drop for the whole life of the unit, not only when a fan has failed.'],
    ['What is a blank-off plate?', 'It is a removable sheet metal cover that seals the inlet of a failed fan to stop recirculation. It adds no pressure drop in normal operation but has to be installed by hand after a failure.'],
    ['Does every fan array need backdraft protection?', 'No. Arrays with many fans at modest static pressure may accept the recirculation for the short time it takes to repair a fan. Critical or unattended units usually justify automatic dampers.'],
]);
