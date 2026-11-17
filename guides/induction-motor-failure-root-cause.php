<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('induction-motor-failure-root-cause'); ?>
<p class="lede">When an induction fan motor fails, replacing it without finding the cause usually means another failure soon. Most motor failures trace back to one of three groups: bearings (lubrication, misalignment, overload, electrical currents), windings (overheating, voltage problems, contamination, insulation stress), or the power supply (imbalance, single phasing, voltage outside tolerance). The failed motor itself holds most of the evidence.</p>

<h2>Preserve the evidence</h2>
<p>Before the failed motor goes to a repair shop or scrap, collect information. Once a motor is rewound or discarded, the evidence is gone.</p>
<ol>
<li>Record the nameplate data and the operating history: hours, recent maintenance, previous failures of this motor or position.</li>
<li>Download fault logs from the VFD or motor protection relay, including the trip type and timestamp.</li>
<li>Check the BAS trend for fan speed, current and alarms leading up to the failure.</li>
<li>Measure supply voltage at the motor terminals, all three phases, with the replacement running or with the circuit live and the motor disconnected.</li>
<li>Ask the repair shop for a teardown report with photos of windings, bearings and rotor, and keep the failed bearings.</li>
</ol>

<h2>Bearing-related failures</h2>
<p>Bearing failures are the most common kind in fan motors. The bearing usually fails first, and if it is not caught, rotor contact with the stator then destroys the winding, so a "burned" motor may have started as a bearing problem.</p>
<h3>Symptom: bearing failed, grease dark, dry or excessive</h3>
<p><strong>Causes and checks:</strong></p>
<ul>
<li>Lubrication: no grease, wrong grease, mixed greases or over-greasing. Check the maintenance records and the grease remaining in the housing.</li>
<li>Overload: belt tension too high on belt-driven fans puts excessive radial load on the motor bearing. Check tension records and sheave position on the shaft; sheaves mounted far out on the shaft multiply the load.</li>
<li>Misalignment: wear pattern offset on the bearing races. Check alignment of the replacement.</li>
<li>Vibration from the driven fan: unbalance or looseness transmitted to the motor. Review fan vibration trends.</li>
</ul>
<h3>Symptom: frosted or fluted bearing races</h3>
<p>A dull, frosted race surface, or a washboard pattern of evenly spaced grooves, indicates electrical current passing through the bearing. This is associated with VFD operation and is a separate topic covered in <a href="<?= url('guides/bearing-currents-shaft-grounding') ?>">bearing currents and shaft grounding</a>. The fix is shaft grounding or insulated bearings, not just a new bearing.</p>

<h2>Winding failures</h2>
<p>The pattern of damage on a failed winding points to the cause. Ask the repair shop to describe it specifically.</p>
<table>
<thead><tr><th>Winding damage pattern</th><th>Likely cause</th><th>What to check</th></tr></thead>
<tbody>
<tr><td>Uniform darkening of all phases</td><td>Sustained overload or overheating</td><td>Motor current vs. nameplate; cooling airflow; ambient temperature; fan operating point; overload relay setting</td></tr>
<tr><td>One phase burned, other two intact or lightly damaged (on a three-phase motor)</td><td>Single phasing: loss of one supply phase</td><td>Blown fuse, failed contactor pole, loose connection, utility event</td></tr>
<tr><td>Two phases damaged more than the third</td><td>Voltage imbalance</td><td>Phase-to-phase voltages; unbalanced single-phase loads on the supply</td></tr>
<tr><td>Short between adjacent turns near the line leads</td><td>Voltage spikes or high dV/dt from a VFD</td><td>Motor insulation rating; cable length; filters</td></tr>
<tr><td>Localized burn at slot exit or end turns</td><td>Contamination, moisture, physical damage, or winding movement from frequent starting</td><td>Enclosure condition; humidity; starts per hour</td></tr>
<tr><td>Phase-to-ground failure</td><td>Insulation breakdown from moisture, contamination or age</td><td>Insulation resistance history; environment</td></tr>
</tbody>
</table>

<h2>Supply-related causes</h2>
<h3>Voltage imbalance</h3>
<p>Even a small voltage imbalance causes a much larger current imbalance, overheating the windings. NEMA MG 1 describes derating motors for voltage imbalance and calculates imbalance as:</p>
<p class="formula">Percent voltage imbalance = 100 × (maximum deviation from average voltage) ÷ average voltage</p>
<p>Example: phase voltages of 474, 480 and 465 V average 473 V. The maximum deviation is 473 − 465 = 8 V. Imbalance = 100 × 8 ÷ 473 = 1.7 percent. NEMA guidance is to avoid operating above about 1 percent without derating, and above 5 percent not at all; check the current edition of MG 1 for the derating curve.</p>
<h3>Voltage outside tolerance</h3>
<p>Motors are designed to operate within a tolerance of nameplate voltage, commonly plus or minus 10 percent. Undervoltage raises current and heating; overvoltage can raise magnetizing current and core losses. Record voltage at the motor under load.</p>
<h3>Single phasing</h3>
<p>Losing one phase while running causes very high currents in the remaining windings. Overload relays or VFD phase-loss protection should trip quickly; if a motor single-phased and burned, check the protection setting and operation.</p>

<h2>Application-related causes</h2>
<ul>
<li><strong>Motor operating above nameplate load</strong> because fan speed was raised, system resistance dropped (for some fan types), or air density is higher than designed.</li>
<li><strong>Insufficient cooling</strong> at low VFD speeds for motors with shaft-mounted fans, where the motor's own cooling fan slows down. Check the motor's rated speed range for variable torque operation.</li>
<li><strong>Frequent starts</strong> on across-the-line starting, heating the rotor and windings.</li>
<li><strong>Wrong motor type</strong> for the environment, such as an open motor in a wet or dusty airstream.</li>
</ul>
<p class="note">EC motors fail differently, with electronics faults as common as mechanical ones; diagnose them using <a href="<?= url('guides/ec-motor-fault-diagnosis') ?>">EC motor fault diagnosis</a>.</p>

<h2>Closing the loop</h2>
<p>Write a short root cause report: what failed, the evidence, the root cause, and the corrective action. Then verify the correction on the replacement motor by measuring voltage balance, current, vibration and bearing temperature after startup. Where a pattern emerges across several units, such as repeated bearing failures on belt-driven fans, review the maintenance procedures, for example <a href="<?= url('guides/belt-tensioning-alignment') ?>">belt tensioning and alignment</a>.</p>
<?php guide_end([
    ['What is the most common cause of fan motor failure?', 'Bearing failure is the most common, from poor lubrication, excessive belt tension, misalignment, vibration or VFD-induced bearing currents. A bearing failure often ends in a winding failure if it is not caught, so the burned winding is not always the root cause.'],
    ['How do I calculate voltage imbalance on a motor?', 'Average the three phase-to-phase voltages, find the largest deviation of any phase from that average, and divide the deviation by the average, times 100. Small percentages of voltage imbalance cause much larger current imbalance and overheating.'],
    ['What does single phasing look like on a burned motor?', 'Typically one phase winding is badly burned while the others are intact or lightly damaged, depending on the connection. It points to a lost supply phase from a blown fuse, failed contactor or loose connection.'],
]);
