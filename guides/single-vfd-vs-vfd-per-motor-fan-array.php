<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('single-vfd-vs-vfd-per-motor-fan-array'); ?>
<p class="lede">A single common VFD feeding every motor in an induction-motor fan array is the cheapest and most compact arrangement, but the drive becomes a single point of failure and each motor needs its own overload and short-circuit protection. One VFD per motor costs more and needs more panel space, yet gives true redundancy, individual control and built-in motor protection. Grouped drives sit in between.</p>

<h2>The three architectures</h2>
<h3>One common drive</h3>
<p>A single VFD, sized for the sum of all motor currents, feeds a distribution panel. Each motor branches off through its own protective device and overload relay. All motors run at the same frequency, so all fans run at the same speed.</p>
<h3>One drive per motor</h3>
<p>Each fan motor has its own VFD, typically small drives mounted in a common panel or on the fan section. Each drive protects its motor electronically and can be controlled independently.</p>
<h3>Grouped drives</h3>
<p>The array is split into two or more groups, each on its own drive. For example, a twelve-fan array might use three drives, each feeding four motors. Losing one drive removes a third of the array rather than all of it.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>One common VFD</th><th>Grouped VFDs</th><th>One VFD per motor</th></tr></thead>
<tbody>
<tr><td>Drive first cost</td><td>Lowest</td><td>Moderate</td><td>Highest in most size ranges</td></tr>
<tr><td>Panel space and heat</td><td>One larger drive</td><td>Several medium drives</td><td>Many small drives; more total panel area</td></tr>
<tr><td>Redundancy against drive failure</td><td>None; drive failure stops the array</td><td>Partial; one group lost</td><td>Full; one fan lost</td></tr>
<tr><td>Motor overload protection</td><td>Separate overload relay per motor required</td><td>Separate relay per motor in each group</td><td>Electronic overload in each drive</td></tr>
<tr><td>Short-circuit protection per motor</td><td>Fuses or breakers per branch, coordinated with drive</td><td>Same, per group</td><td>Provided upstream of each drive</td></tr>
<tr><td>Individual fan control</td><td>No; all same speed</td><td>By group</td><td>Yes; stage, test or isolate any fan</td></tr>
<tr><td>Restarting one motor while others run</td><td>Not practical without special measures</td><td>Within a group, same issue</td><td>Each drive restarts its own motor normally</td></tr>
<tr><td>Diagnostics per fan</td><td>Limited to overload trip indication</td><td>Per group</td><td>Current, power, faults for each fan</td></tr>
<tr><td>Output cabling</td><td>One drive output, many motor branches</td><td>Moderate</td><td>One cable per drive-motor pair</td></tr>
<tr><td>Harmonic load</td><td>One rectifier; easy to treat at one point</td><td>Few rectifiers</td><td>Many small rectifiers; treat at the bus or per drive</td></tr>
</tbody>
</table>

<h2>The single point of failure question</h2>
<p>The main reason owners buy fan arrays is redundancy. A common VFD undermines that. If the drive trips or fails, every fan stops at once, exactly the failure the array was meant to prevent. A bypass contactor can bring the fans back at full speed, but that brings the overpressure and inrush issues of across-the-line operation, compared in <a href="<?= url('guides/vfd-bypass-vs-redundant-drive') ?>">VFD bypass vs redundant drive</a>.</p>
<p>For non-critical buildings where the array was chosen mainly for length savings or maintenance, a common drive can still be a sensible economy. For hospitals, laboratories and data centres, a drive per motor or at least grouped drives are usually justified.</p>

<h2>Motor protection on a common drive</h2>
<p>A VFD's electronic overload function models one motor. With several motors on its output, it cannot detect a single overloaded motor among many lightly loaded ones. Codes therefore require individual overload protection for each motor, and the branch circuits need short-circuit protection that coordinates with the drive output. How to apply that protection is covered step by step in <a href="<?= url('guides/motor-overload-protection-multi-motor') ?>">how to protect multiple motors on a common VFD</a>.</p>
<p>There is a practical complication too. If one motor's overload trips and the fault is cleared, that motor cannot simply be reconnected to a drive already running at full frequency without a large inrush. Most common-drive schemes require stopping the drive and restarting all motors together from zero.</p>

<h2>Control and operating benefits of individual drives</h2>
<ul>
<li><strong>Staging:</strong> at very low airflow, some fans can be shut off so the rest run at a more efficient point. The sequence logic is described in <a href="<?= url('guides/fan-array-control-sequences') ?>">fan array control sequences</a>.</li>
<li><strong>Testing and maintenance:</strong> a single fan can be stopped and locked out while the others run.</li>
<li><strong>Diagnostics:</strong> each drive reports its own current, power and faults, making a failing fan easy to identify.</li>
<li><strong>Balancing:</strong> slight speed differences can be used to correct uneven airflow across the array, if needed.</li>
</ul>

<h2>Cost considerations</h2>
<p>For small motors, the cost of several small drives can be close to the cost of one large drive plus the overload relays, fuses and distribution needed to split its output. As motor size rises, individual drives become more expensive relative to a common drive. Count everything: drive cost, branch protection, panel size, wiring, controls points and the business cost of an array-wide outage.</p>
<p class="note">EC motor arrays are a different case, since each EC motor carries its own electronics. This comparison applies to induction motors on VFDs.</p>

<h2>A practical selection path</h2>
<ol>
<li>Define how critical continuous airflow is for the facility.</li>
<li>Count motors and their sizes; get pricing for common, grouped and individual drive schemes including protection and panel work.</li>
<li>Check the space available for drive panels in or near the unit.</li>
<li>Choose the lowest-cost scheme that meets the redundancy requirement, not the lowest-cost scheme outright.</li>
</ol>
<?php guide_end([
    ['Can one VFD run all the fans in a fan array?', 'Yes, if it is sized for the combined motor current and each motor has its own overload and short-circuit protection. The drive then becomes a single point of failure for the whole array.'],
    ['Why use one VFD per fan in an array?', 'It keeps the array running if a drive fails, gives each motor electronic overload protection and lets each fan be controlled, staged or isolated independently.'],
    ['What are grouped VFDs in a fan array?', 'Grouped drives split the array into sets of motors on separate drives, so losing one drive removes only part of the array. It is a compromise between cost and redundancy.'],
    ['Can a single motor be restarted on a common VFD that is already running?', 'Generally not without high inrush current. Most schemes stop the drive and restart all motors together from zero speed.'],
]);
