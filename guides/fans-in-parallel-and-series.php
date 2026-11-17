<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fans-in-parallel-and-series'); ?>
<p class="lede">Fans in parallel add their airflows at the same pressure; fans in series add their pressures at the same airflow. Either way, the combined curve still has to meet the system curve, so two fans rarely deliver double the airflow of one, and in supply and return systems the two fans interact through the pressure in the mixing box.</p>

<h2>Building a combined curve for fans in parallel</h2>
<p>Fans are in parallel when they draw from a common inlet and discharge into a common outlet, so they all see the same pressure rise. To build the combined curve, take each pressure level on the individual curves and add the airflows at that pressure. For two identical fans, the combined curve is the single-fan curve stretched horizontally to twice the airflow at every pressure.</p>
<p>Consider a fan with this curve at a fixed speed:</p>
<table>
<thead><tr><th>Static pressure (in. w.c.)</th><th>One fan (cfm)</th><th>Two in parallel (cfm)</th><th>Two in series, pressure at that cfm (in. w.c.)</th></tr></thead>
<tbody>
<tr><td>4.2</td><td>4,000</td><td>8,000</td><td>8.4 at 4,000 cfm</td></tr>
<tr><td>3.8</td><td>8,000</td><td>16,000</td><td>7.6 at 8,000 cfm</td></tr>
<tr><td>3.2</td><td>10,000</td><td>20,000</td><td>6.4 at 10,000 cfm</td></tr>
<tr><td>2.3</td><td>12,000</td><td>24,000</td><td>4.6 at 12,000 cfm</td></tr>
</tbody>
</table>
<p>The fan is selected for a system needing 3.2 in. w.c. at 10,000 cfm (4,720 L/s at 800 Pa). The system curve follows SP = 3.2 × (CFM ÷ 10,000)².</p>

<h2>Why two fans do not double the airflow</h2>
<p>Add a second identical fan in parallel and the system still resists airflow with the square law. At 20,000 cfm the system would need 3.2 × 2² = 12.8 in. w.c., far beyond what the pair can make. The new operating point is where the combined curve meets the system curve. Testing values: at 11,000 cfm the system needs 3.87 in. w.c. while each fan, carrying 5,500 cfm, makes a little over 4.0 in. w.c.; at 12,000 cfm the system needs 4.61 in. w.c. but each fan at 6,000 cfm makes about 4.0. The curves cross near 11,300 cfm.</p>
<p>So in this steep system, the second fan raises airflow only about 13%. Parallel fans give large gains only on flat system curves, where airflow is limited by fan capacity rather than system resistance. The basic way operating points form is explained in <a href="<?= url('guides/fan-curves-and-system-curves') ?>">fan curves and system curves</a>.</p>

<h2>Instability with parallel fans</h2>
<p>When the individual fan curve has a dip or flat zone to the left of peak, as forward curved and some axial fans do, the combined parallel curve can form a loop in which the same pressure corresponds to more than one combined airflow. In that zone, the fans can settle at different points: one moves much more air than the other, or they swap back and forth. Symptoms include unequal motor currents, pulsing and noise. Keep every parallel operating point well right of the individual peak pressure. Diagnosis on site is covered in <a href="<?= url('guides/fan-surge-stall-troubleshooting') ?>">troubleshooting fan surge and stall</a>.</p>
<p class="note">Parallel fans with different curves can also misbehave: a weaker fan can be pushed back to zero or even reverse flow when the stronger fan raises the common pressure above the weaker fan's shutoff pressure.</p>

<h2>Fans in series</h2>
<p>Fans are in series when the full airflow passes through one and then the other. Their pressures add at the same airflow. From the table, two of the same fans in series make 6.4 in. w.c. at 10,000 cfm and 4.6 in. w.c. at 12,000 cfm. Against the same system, which needs 4.61 in. w.c. at 12,000 cfm, the series pair runs at about 12,000 cfm: a 20% increase. On steep system curves, series operation outperforms parallel; on flat curves, parallel does better.</p>
<p>Pure series arrangements of identical fans are uncommon in HVAC. The series case that matters every day is the supply fan and return fan of an air handler.</p>

<h2>Supply and return fans as a series system</h2>
<p>In a unit with a return fan, the air path from the room back through the return ductwork, through the unit and out the supply ductwork to the room is one loop with two fans in it. They are in series. Where each fan's work starts and stops is set by the pressure in the mixing box, which acts as the dividing point.</p>
<ul>
<li>The <strong>return fan</strong> overcomes the return duct losses and raises the return air to a slightly positive pressure at the relief and return dampers, enough to push relief air out of the building.</li>
<li>The <strong>supply fan</strong> draws from the mixing box, which must stay slightly negative relative to outdoors so outdoor air enters, and overcomes the losses through the unit and supply ductwork.</li>
</ul>
<p>If the return fan is too strong for the return system, it drives the mixing box positive, so the supply fan sees an assisted inlet and moves to a different point on its curve. Outdoor air flow can drop or even reverse, with return air leaving through the outdoor air intake. If it is too weak, the supply fan does extra work pulling air through the return ducts, the mixing box goes more negative and relief may fail. The choice between a return fan and a relief fan arrangement is discussed in <a href="<?= url('guides/return-fan-vs-relief-fan-arrangement') ?>">return fan vs relief fan</a>.</p>

<h2>Practical rules</h2>
<ol>
<li>Size each fan in a series system for its own portion of the system pressure, divided at a defined neutral point.</li>
<li>Control the fans to hold that neutral point, for example by airflow tracking or mixing box pressure control, rather than running both at the same speed command.</li>
<li>Do not add a parallel fan expecting double airflow without plotting the combined curve against the system curve.</li>
<li>Use fans with stable curves in parallel duty, and keep operating points right of the peak.</li>
<li>When fans of different sizes share a duty, check that the weaker fan cannot be driven to shutoff.</li>
</ol>
<?php guide_end([
    ['How do you combine fan curves in parallel?', 'At each pressure, add the airflows of the individual fans. For two identical fans, the combined curve is the single fan curve with airflow doubled at every pressure.'],
    ['Do two fans in parallel double the airflow?', 'Only on a very flat system curve. In a typical ducted system, resistance rises with the square of airflow, so the operating point moves to a higher pressure and the gain is far less than double.'],
    ['Are a supply fan and return fan in series?', 'Yes. The same air passes through both, and their pressures combine to overcome the whole loop. The mixing box pressure marks where one fan\'s work ends and the other\'s begins.'],
    ['Why can parallel fans become unstable?', 'If the fan curve has a dip left of peak pressure, the combined curve can allow two airflows at the same pressure, so the fans share load unequally or swap back and forth.'],
]);
