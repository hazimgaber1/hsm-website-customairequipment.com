<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-array-redundancy-n1-vs-n2'); ?>
<p class="lede">With N+1 redundancy, an array still meets full design airflow after one fan fails; with N+2 it survives two failures. The cost of each level is that every remaining fan, and its motor, must be able to carry the design airflow divided by the number of fans still running, at full design static pressure.</p>

<h2>What N, N+1 and N+2 mean</h2>
<p><strong>N</strong> is the number of fans needed to deliver design airflow at design static pressure. An array labelled <strong>N+1</strong> has one more fan than that, and <strong>N+2</strong> has two more. All fans normally run together at reduced speed; the spare capacity is spread across the array, not parked in an idle fan.</p>
<p>A common shortcut is to call any array "N+1" because losing one fan out of twelve only costs about 8% of airflow. That is not redundancy in the strict sense. True N+1 means the airflow at design pressure is fully maintained with one fan off, and the selection must prove it.</p>

<h2>The airflow each fan must carry</h2>
<p class="formula">Per-fan airflow in failure mode = Design CFM ÷ (Installed fans − Failed fans)</p>
<p>The fans remaining in service see the same system: the ductwork, coils and filters still need design airflow at the same total static pressure. So each surviving fan must move a larger share of the air at the same pressure. That moves its operating point to the right on its curve and requires higher speed.</p>
<p>Total air horsepower does not change, because total airflow and pressure are the same. What changes is the horsepower per running fan, and therefore the motor size on every fan.</p>
<p class="formula">Air hp = CFM × TSP ÷ 6356 &nbsp;&nbsp; Fan bhp = Air hp ÷ η(static)</p>

<h2>Worked comparison: six-fan array at 30,000 cfm</h2>
<p>Design duty is 30,000 cfm at 4.0 in. w.c. total static pressure (about 14,160 L/s at 1,000 Pa). Six fans are installed. The efficiencies below are illustrative assumptions for a small plenum wheel; use the actual selection data for your fan.</p>
<table>
<thead><tr><th>Condition</th><th>Fans running</th><th>CFM per fan</th><th>Air hp per fan</th><th>Assumed η</th><th>Bhp per fan</th></tr></thead>
<tbody>
<tr><td>Normal operation</td><td>6</td><td>5,000</td><td>3.15</td><td>0.65</td><td>4.8</td></tr>
<tr><td>N+1 failure (one fan off)</td><td>5</td><td>6,000</td><td>3.78</td><td>0.62</td><td>6.1</td></tr>
<tr><td>N+2 failure (two fans off)</td><td>4</td><td>7,500</td><td>4.72</td><td>0.58</td><td>8.1</td></tr>
</tbody>
</table>
<p>For an N+1 design, each of the six motors must handle about 6.1 bhp, so a 7.5 hp motor is the likely choice. For N+2, each motor must handle about 8.1 bhp, which pushes every motor to 10 hp. Wheel speed in N+2 failure mode is also much higher, so the wheel's maximum safe speed and the fan class must be checked.</p>
<p class="note">Efficiency tends to fall in failure mode because the fan moves toward higher flow on its curve. Ask for the fan selection at the failure-mode point, not just at the normal point.</p>

<h2>N+1 vs N+2 at a glance</h2>
<table>
<thead><tr><th>Factor</th><th>N+1</th><th>N+2</th></tr></thead>
<tbody>
<tr><td>Failures tolerated at full airflow</td><td>One</td><td>Two</td></tr>
<tr><td>Per-fan capacity above normal share (six-fan array)</td><td>+20%</td><td>+50%</td></tr>
<tr><td>Motor and drive size</td><td>Moderate step up</td><td>Large step up; may jump a frame size</td></tr>
<tr><td>Normal-operation efficiency</td><td>Fans run near their sweet spot if selected well</td><td>Fans run further below design speed; efficiency can be lower at normal duty</td></tr>
<tr><td>Electrical service</td><td>Modest increase in connected load</td><td>Noticeably higher connected load and feeder size</td></tr>
<tr><td>Typical use</td><td>Most commercial, institutional and lab units</td><td>Critical facilities where a second failure during repair is unacceptable</td></tr>
</tbody>
</table>

<h2>How fan count changes the penalty</h2>
<p>The extra capacity each fan needs shrinks as the array gets larger. With four fans, N+1 forces each to carry 33% more than its normal share. With twelve fans, N+1 needs only about 9% more per fan. N+2 on a twelve-fan array is a 20% step, the same as N+1 on six fans. That is why large arrays can offer high redundancy without a big motor penalty, and why small arrays with N+2 often become impractical. Choosing the count itself is covered in <a href="<?= url('guides/fan-array-number-of-fans') ?>">how to choose the number and size of fans</a>.</p>

<h2>Details that make redundancy real</h2>
<ul>
<li><strong>Backflow through the failed fan.</strong> A stopped fan in a pressurized array lets air recirculate backward unless it is blocked. That recirculation adds to the airflow the remaining fans must move. The options are compared in <a href="<?= url('guides/backdraft-dampers-vs-blank-off-plates') ?>">backdraft dampers vs blank-off plates</a>.</li>
<li><strong>Drive architecture.</strong> If all fans share one VFD, the drive itself is a single point of failure, regardless of fan count. See <a href="<?= url('guides/single-vfd-vs-vfd-per-motor-fan-array') ?>">one VFD per fan vs a common VFD</a>.</li>
<li><strong>Power feed.</strong> One feeder and one disconnect for the whole array still limits redundancy. Critical facilities may split the array across two feeds.</li>
<li><strong>Maximum speed setting.</strong> Drives must be allowed to run fast enough to reach the failure-mode point. A maximum frequency left at normal-duty speed defeats the design.</li>
<li><strong>Sound in failure mode.</strong> Fans running faster are louder. Check that failure-mode sound is acceptable for the short period it lasts.</li>
</ul>

<h2>Choosing a level</h2>
<p>Start from the consequences of lost airflow. If a short period of reduced airflow while a fan is replaced is tolerable, N+1 is usually enough. If the facility cannot lose design airflow even while one fan is already out for repair, as in some data centre, pharmaceutical or isolation applications, N+2 earns its cost. Check the owner's design standards; many hospitals and data centre operators specify the level directly.</p>
<?php guide_end([
    ['What does N+1 mean for a fan array?', 'N+1 means the array has one more fan than is needed to deliver design airflow at design static pressure. With any single fan out of service, the remaining fans can still meet the full design duty.'],
    ['How much bigger do the motors need to be for N+2?', 'Each motor must cover the design airflow divided by the number of fans left running after two fail. On a six-fan array that is 50% more airflow per fan than normal, which often means a full motor size step or more.'],
    ['Does redundancy waste energy in normal operation?', 'Not necessarily. Total air power is the same; the fans simply run slower. Efficiency can drop slightly if the fans operate far from their best point, so check the normal-duty selection as well as the failure case.'],
    ['Is an array with one spare fan automatically N+1?', 'Only if the selection proves that the remaining fans meet full design airflow at design pressure with one fan off, and recirculation through the stopped fan is prevented.'],
]);
