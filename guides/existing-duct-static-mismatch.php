<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('existing-duct-static-mismatch'); ?>
<p class="lede">When a new air handler connected to old ductwork delivers less air than designed, the cause is very often that the real duct system resistance is higher than the external static pressure the unit was selected for, because the old system was never measured, was modified over the years, or has dampers and fittings nobody documented.</p>

<h2>Why this happens on replacement projects</h2>
<p>On new construction the engineer calculates duct static from a known layout. On replacement projects, the external static pressure on the schedule is usually copied from the original drawings, estimated, or borrowed from the old unit's nameplate. Decades of renovations add fittings, reroutes, fire dampers and terminal units; dampers are partly closed during old balancing; and internal duct lining sags or detaches. The new fan, selected precisely to the scheduled number, runs into a system that resists more than expected and settles at a lower airflow.</p>
<p>This guide addresses resistance outside the unit. If the investigation points at the fan itself (wrong rotation, inlet obstruction, motor or drive limits), see <a href="<?= url('guides/fan-airflow-shortfall-troubleshooting') ?>">fan airflow shortfall troubleshooting</a>.</p>

<h2>Diagnostic table</h2>
<table>
<thead><tr><th>Symptom</th><th>Likely cause</th><th>Check</th><th>Fix</th></tr></thead>
<tbody>
<tr><td>Airflow low, fan at full speed, external static higher than scheduled</td><td>Existing duct resistance underestimated</td><td>Measure static at unit discharge and return; compare with schedule</td><td>Reduce duct resistance or increase fan capability</td></tr>
<tr><td>Airflow low in some branches, normal in others</td><td>Closed or failed dampers in those branches</td><td>Inspect balancing, fire and smoke dampers; check actuator positions</td><td>Open or repair dampers, then rebalance</td></tr>
<tr><td>High static at discharge, normal at farther points</td><td>Restrictive fitting or transition near the unit</td><td>Static readings along the main duct; look for abrupt transitions</td><td>Replace with gradual transition or turning vanes</td></tr>
<tr><td>Return static very negative, supply normal</td><td>Return path restricted (undersized return grilles, plenum blockages)</td><td>Measure return static; inspect ceiling plenum and transfer openings</td><td>Open return path, add grilles or transfer ducts</td></tr>
<tr><td>Static readings normal but airflow low</td><td>Measurement error or leakage downstream</td><td>Verify instrument calibration; check duct leakage</td><td>Re-measure; seal ducts</td></tr>
<tr><td>VAV boxes all at maximum, duct static setpoint not reached</td><td>System needs more air or higher static than fan delivers</td><td>Review box minimums and maximums; trend fan speed and static</td><td>Adjust setpoint, correct box schedules, or upgrade fan</td></tr>
</tbody>
</table>

<h2>How to measure what the system really needs</h2>
<ol>
<li><strong>Measure airflow.</strong> Use a pitot traverse in a straight duct run or the fan's inlet airflow measurement if fitted. Record fan speed at the same time.</li>
<li><strong>Measure external static pressure.</strong> Read static at the unit's supply and return connections, in straight duct sections where possible. External static is the sum of the absolute values when supply is positive and return negative.</li>
<li><strong>Calculate the system coefficient.</strong> Duct system resistance varies with the square of airflow. With one measured point you can predict static at design airflow.</li>
</ol>
<p class="formula">SP_design = SP_measured × (CFM_design ÷ CFM_measured)²</p>
<p><strong>Example.</strong> A new unit selected for 30,000 CFM at 2.0 in. w.c. (500 Pa) external static delivers only 26,500 CFM, at which point external static measures 2.1 in. w.c. Predicted static at design airflow: 2.1 × (30,000 ÷ 26,500)² = 2.1 × 1.28 = 2.69 in. w.c. (670 Pa). The duct system needs about 0.7 in. w.c. more than the schedule allowed.</p>
<p>Plotting this system curve against the fan curve, as described in <a href="<?= url('guides/fan-curves-and-system-curves') ?>">fan curves and system curves</a>, shows where the fan actually operates and how far it must move.</p>

<h2>Finding the hidden resistance</h2>
<p>Before increasing fan power, look for resistance that can be removed cheaply:</p>
<ul>
<li><strong>Dampers.</strong> Old manual balancing dampers left partly closed, fire dampers that have dropped, smoke dampers with failed actuators.</li>
<li><strong>Fittings.</strong> Square elbows without turning vanes, abrupt reductions, a duct connection at the unit that turns immediately at the fan discharge.</li>
<li><strong>Debris.</strong> Collapsed internal lining, construction debris, abandoned filters inside ducts.</li>
<li><strong>Terminal units.</strong> Dirty reheat coils, minimum inlet static higher than assumed, oversized flow settings.</li>
<li><strong>Return path.</strong> Ceiling tiles replaced with solid ones, transfer grilles blocked by new walls.</li>
</ul>
<p class="note">Walk the whole main duct with a manometer and record static every few branches. Large pressure drops between two adjacent points pinpoint where resistance is concentrated.</p>

<h2>Correcting the shortfall</h2>
<h3>Reduce the system resistance</h3>
<p>Open closed dampers, repair failed ones, replace the worst fittings and clean obstructed ducts. Even a fraction of an inch removed near the unit is worth pursuing because it helps at every airflow.</p>
<h3>Increase fan capability</h3>
<p>If the fan has speed reserve, increase speed and confirm motor current and drive limits. Fan laws apply: airflow rises in proportion to speed, static with its square, power with its cube. A 13% speed increase raises power by about 44%, so check the motor and electrical capacity first. If the fan is already at maximum, options include larger motors, a different wheel, or an additional fan module in an array.</p>
<h3>Revisit the design airflow</h3>
<p>Sometimes the old scheduled airflow is itself too high. Confirm actual load needs before investing in more fan power.</p>
<p>To avoid repeating the problem on the next unit, measure the existing system before selection, as recommended in <a href="<?= url('guides/like-for-like-vs-redesign') ?>">like-for-like vs redesigned replacement</a>.</p>
<?php guide_end([
    ['Why does a new AHU deliver less air than the old one?', 'The new fan was often selected for a scheduled external static that is lower than the real duct resistance. The fan then operates at a point on its curve with less airflow. Measuring actual static and airflow confirms the mismatch.'],
    ['How do I estimate the duct static at design airflow?', 'Measure airflow and external static at one operating point, then scale static by the square of the airflow ratio. For example, 2.1 in. w.c. at 26,500 CFM becomes about 2.69 in. w.c. at 30,000 CFM.'],
    ['Should I just speed up the fan to fix low airflow?', 'Only after removing avoidable resistance like closed dampers and bad fittings, and after checking motor and electrical capacity. Fan power rises with the cube of speed, so small speed increases demand much more power.'],
]);
