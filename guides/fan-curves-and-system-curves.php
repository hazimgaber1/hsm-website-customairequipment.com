<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-curves-and-system-curves'); ?>
<p class="lede">A fan always operates where its pressure-flow curve crosses the system's resistance curve. Change the fan speed and the fan curve moves; close a damper or load a filter and the system curve moves. The new crossing point is the airflow you actually get.</p>

<h2>Reading a fan curve</h2>
<p>A fan curve plots the pressure a fan develops against the airflow it moves, at one speed and one air density. Airflow (cfm or L/s) runs along the horizontal axis; static or total pressure (in. w.c. or Pa) runs up the vertical axis. Most published curves also show brake horsepower and efficiency on the same chart.</p>
<p>For a backward inclined or airfoil wheel, the pressure curve starts at its shutoff value with zero flow, rises slightly or stays flat to a peak, then falls steadily to free delivery at the right. The horsepower curve rises with flow and then flattens or falls near free delivery, which is why these wheels are called non-overloading. Efficiency peaks somewhere on the falling portion of the pressure curve, generally a good distance to the right of the pressure peak.</p>
<p>Manufacturers often show several speeds on one chart, plus lines of constant efficiency or a marked "selection range". A good selection sits in that range: right of the peak, close to peak efficiency.</p>

<h2>What a system curve represents</h2>
<p>The system curve describes how much pressure the ductwork and components need to move each airflow. In turbulent airflow, pressure loss through ducts, coils, filters and fittings varies approximately with the square of velocity, so with the square of airflow:</p>
<p class="formula">SP2 = SP1 × (CFM2 ÷ CFM1)²</p>
<p>If a system needs 3.0 in. w.c. at 20,000 cfm, it needs 3.0 × (15,000 ÷ 20,000)² = 1.69 in. w.c. at 15,000 cfm, and 3.0 × (24,000 ÷ 20,000)² = 4.32 in. w.c. at 24,000 cfm. Plotting those points gives a parabola starting at the origin.</p>
<p>Real systems are not always pure parabolas. A VAV system controlled to a fixed duct static pressure setpoint has a curve that starts at the setpoint, not at zero, because the controller holds that pressure even at low flow. Coils with laminar-flow characteristics and some filter media follow an exponent below 2.</p>

<h2>Finding the operating point</h2>
<p>Overlay the system curve on the fan curve. The intersection is the operating point: the only combination of flow and pressure where the fan's capability equals the system's demand. The fan does not "choose" a design airflow; it settles wherever the curves cross.</p>
<p>Three common mistakes follow from forgetting this:</p>
<ul>
<li><strong>Overestimated system pressure.</strong> If the real system needs less pressure than calculated, the system curve sits lower and the fan delivers more air than design at higher horsepower.</li>
<li><strong>Underestimated system pressure.</strong> If the real system needs more, airflow falls short. A full <a href="<?= url('guides/total-static-pressure-budget') ?>">static pressure budget</a> is the best defence.</li>
<li><strong>Ignored installation losses.</strong> Poor inlet or outlet conditions reduce what the fan actually develops, which shows up as a fan curve that sits lower than the catalog. That topic is covered in <a href="<?= url('guides/system-effect-amca-201') ?>">system effect</a>.</li>
</ul>

<h2>How speed changes move the fan curve</h2>
<p>Changing speed shifts the entire fan curve. At lower speed, every point moves down and to the left according to the fan laws: airflow drops in proportion to speed, pressure with speed squared. Because a fixed system curve is also a square-law parabola through the origin, a speed change moves the operating point along that same system curve. Efficiency stays roughly constant.</p>
<p>That is why speed control with a VFD or EC motor is the efficient way to change airflow. The detailed arithmetic is worked in <a href="<?= url('guides/fan-laws-calculation') ?>">applying the fan laws</a>.</p>
<p class="note">When a system curve has a fixed pressure component, such as a duct static setpoint, slowing the fan moves the operating point toward the left of the fan curve, closer to the peak. Check low-speed points against the fan's stable range.</p>

<h2>How dampers and loading move the system curve</h2>
<p>Closing a damper or adding resistance makes the system curve steeper. The fan, still at the same speed, slides up and left along its own curve to a point with less flow and more pressure. Opening a damper or cleaning a coil flattens the system curve and moves the point down and right.</p>
<table>
<thead><tr><th>Change</th><th>Curve that moves</th><th>Result at constant fan speed</th></tr></thead>
<tbody>
<tr><td>Filters load from clean to dirty</td><td>System curve steepens</td><td>Less airflow, higher pressure</td></tr>
<tr><td>Outlet or inlet damper partly closed</td><td>System curve steepens</td><td>Less airflow; wasted pressure across damper</td></tr>
<tr><td>Wet cooling coil vs dry coil</td><td>System curve steepens slightly</td><td>Slight drop in airflow in cooling season</td></tr>
<tr><td>Fan speed increased</td><td>Fan curve moves up and right</td><td>More airflow along the same system curve</td></tr>
<tr><td>Inlet vanes closed</td><td>Fan curve changes shape and drops</td><td>Less airflow with some power saving, less than speed control</td></tr>
</tbody>
</table>
<p>Dampers control flow by burning pressure. The fan does the same work as before; the extra pressure is simply thrown away across the damper blades. That is why damper control uses more energy than speed control for the same airflow.</p>

<h2>Designing with both curves in mind</h2>
<ol>
<li>Calculate system pressure at design airflow, including every component at its design condition. Decide whether to use clean or mid-life filter loss and state it.</li>
<li>Plot the system curve, including any fixed pressure component from the control strategy.</li>
<li>Select a fan whose curve crosses the system curve near peak efficiency and well to the right of the peak pressure.</li>
<li>Check the minimum and maximum operating points as well: dirty filters at full flow, minimum airflow at the lowest expected speed.</li>
<li>Confirm that every expected point stays in the stable region of the fan curve.</li>
</ol>
<?php guide_end([
    ['What is a fan operating point?', 'It is the airflow and pressure where the fan curve crosses the system curve. The fan will always settle at this intersection, regardless of the design airflow on the drawings.'],
    ['Why is the system curve a parabola?', 'In turbulent flow, pressure loss through ducts and components varies roughly with the square of airflow. Plotting that relationship gives a parabola starting at zero flow and zero pressure.'],
    ['Does closing a damper save energy?', 'Only slightly. A damper raises system resistance so the fan moves less air at higher pressure. Reducing fan speed instead lowers both airflow and pressure and saves far more power.'],
    ['What happens if the actual system pressure is lower than designed?', 'The system curve sits lower, so the fan delivers more airflow than intended and draws more power. Balancing or a speed reduction brings it back to design.'],
]);
