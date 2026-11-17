<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-array-number-of-fans'); ?>
<p class="lede">Choose the fan count and wheel size together: lay out the grids that physically fit the unit's cross-section, run a fan selection for each at the per-fan duty, then pick the option with the best balance of brake horsepower, motor size, sound and length. More fans is not automatically better.</p>

<h2>Before you start</h2>
<p>Gather the inputs. Changing any of them later means repeating the exercise.</p>
<ul>
<li>Design airflow and total static pressure, including internal components at their design condition.</li>
<li>Air density at the fan (altitude and temperature).</li>
<li>Internal cross-section of the fan section: width and height inside the casing. This is usually set by the coil and filter face area, not by the fans.</li>
<li>Redundancy requirement: how many fans may fail while design airflow is still delivered. Choosing between redundancy levels is a separate decision covered in <a href="<?= url('guides/fan-array-redundancy-n1-vs-n2') ?>">N+1 vs N+2 redundancy</a>.</li>
<li>Motor technology: EC motors or induction motors on VFDs, which affects the practical size range per fan.</li>
<li>Sound criteria and any length limit.</li>
</ul>

<h2>Step-by-step method</h2>
<ol>
<li><strong>List the candidate wheel sizes.</strong> Start with the plenum fan family you are considering. Each wheel size has a minimum module size, the square or rectangle of bulkhead it needs including spacing to neighbours and walls. Use the manufacturer's spacing rules; general guidance on those dimensions is in <a href="<?= url('guides/fan-array-plenum-depth-spacing') ?>">fan array plenum depth and spacing</a>.</li>
<li><strong>Fit grids into the cross-section.</strong> For each wheel size, work out how many columns fit across the width and how many rows fit in the height. A 120 in. wide by 96 in. high section (3.05 × 2.44 m) might fit a 2 × 2 grid of large wheels, a 3 × 2 grid of medium wheels, or a 4 × 3 grid of small ones. Discard grids that leave large unused areas along one side, since they hurt discharge uniformity.</li>
<li><strong>Calculate per-fan duty.</strong> Divide design airflow by the number of fans running at the critical condition. For redundancy, that is the number left after the allowed failures. Pressure is the full system static for every fan, because fans in an array work in parallel.</li>
<li><strong>Select each candidate.</strong> Run the per-fan duty through the manufacturer's selection software. Record speed, static efficiency, brake horsepower per fan, motor size, tip speed and sound power.</li>
<li><strong>Check the normal running point.</strong> If the array is redundant, the fans normally run below the failure-mode point. Re-run each selection at design airflow divided by all fans to see normal efficiency and power.</li>
<li><strong>Check the minimum airflow point.</strong> At the lowest system airflow, confirm each fan is still right of peak pressure and above its minimum speed. If not, plan to stage fans off.</li>
<li><strong>Compare totals.</strong> Build a table of total input power, motor count and size, section length, sound and cost.</li>
<li><strong>Review electrical and controls impact.</strong> Count motors, drives, overload devices and control points. A large count can drive up panel size and wiring cost.</li>
</ol>

<h2>Worked layout example</h2>
<p>Design duty: 40,000 cfm (18,900 L/s) at 3.5 in. w.c. (870 Pa) static, N+1 redundancy, 120 × 96 in. cross-section. Air horsepower for the whole array is 40,000 × 3.5 ÷ 6356 = 22.0 hp regardless of fan count.</p>
<table>
<thead><tr><th>Grid</th><th>Fans installed</th><th>CFM per fan, one failed</th><th>CFM per fan, all running</th><th>Air hp per fan, one failed</th></tr></thead>
<tbody>
<tr><td>2 × 2</td><td>4</td><td>13,333</td><td>10,000</td><td>7.34</td></tr>
<tr><td>3 × 2</td><td>6</td><td>8,000</td><td>6,667</td><td>4.41</td></tr>
<tr><td>4 × 3</td><td>12</td><td>3,636</td><td>3,333</td><td>2.00</td></tr>
<tr><td>5 × 4</td><td>20</td><td>2,105</td><td>2,000</td><td>1.16</td></tr>
</tbody>
</table>
<p>The table shows the trade. With four fans, N+1 forces each fan to carry 33% more than its normal share, so every motor is oversized for normal operation. With twelve fans, the margin needed is only 9%. But twelve small wheels may each be less efficient than six medium ones, and twenty fans means twenty motors, overloads and possibly drives. In many selections, the efficiency optimum lands in the middle of the range, and the final choice is set by motor size breaks, sound and cost.</p>
<p class="note">Watch for motor size breaks. If one grid option puts every motor at 5.2 bhp and another at 4.8 bhp, the second may allow a full size smaller motor on every fan.</p>

<h2>Factors that push the count up or down</h2>
<table>
<thead><tr><th>Push toward more, smaller fans</th><th>Push toward fewer, larger fans</th></tr></thead>
<tbody>
<tr><td>Tight length limit</td><td>Larger wheels often have higher peak efficiency</td></tr>
<tr><td>High redundancy requirement</td><td>Fewer motors, drives and wiring terminations</td></tr>
<tr><td>Modules must pass through small doors (retrofit)</td><td>Lower cost per cfm in many ranges</td></tr>
<tr><td>Wide turndown needed (stage fans off)</td><td>Fewer components to maintain</td></tr>
<tr><td>Higher blade-pass frequency easier to attenuate</td><td>Lower tip speed at given duty</td></tr>
<tr><td>EC motor size limits</td><td>Induction motors on VFDs cover larger sizes efficiently</td></tr>
</tbody>
</table>

<h2>Common mistakes</h2>
<ul>
<li>Filling the cross-section with the maximum number of fans without comparing efficiency.</li>
<li>Selecting only at the failure-mode point and never checking normal operation.</li>
<li>Ignoring how the fan count affects drive architecture; that comparison is in <a href="<?= url('guides/single-vfd-vs-vfd-per-motor-fan-array') ?>">one VFD per fan vs a common VFD</a>.</li>
<li>Leaving uneven gaps at the walls that create dead zones downstream.</li>
<li>Forgetting that the unit must fit through the building with the chosen module size.</li>
</ul>
<p>When you have a short list, the <a href="<?= url('design') ?>">3D configurator</a> is a quick way to see how each grid changes the fan section length and the overall unit.</p>
<?php guide_end([
    ['How many fans should a fan array have?', 'There is no fixed number. The right count comes from fitting wheel sizes into the cross-section and comparing selections for power, motor size, sound, length and cost. Many arrays end up between four and sixteen fans.'],
    ['Are more fans in an array more efficient?', 'Not necessarily. Smaller wheels can be less efficient than larger ones. More fans reduce the redundancy penalty per fan, but the most efficient option is often a moderate count.'],
    ['What static pressure does each fan in an array see?', 'Each fan sees the full system static pressure, because the fans run in parallel. Only the airflow is divided among the fans.'],
    ['Does the cross-section of the AHU limit the fan count?', 'Yes. The coil and filter face area usually set the cross-section, and each wheel size needs a minimum module size, so only certain grids fit.'],
]);
