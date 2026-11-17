<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('return-fan-vs-relief-fan-arrangement'); ?>
<p class="lede">A return fan sits in the return airstream and moves all the return air, pushing part of it out as relief and the rest into the mixing box; a relief fan sits only in the relief path and runs only when the building needs to exhaust excess air. Return fans suit high-pressure return systems; relief fans suit low-pressure returns and save energy in most other cases.</p>

<h2>The problem both fans solve</h2>
<p>An air handler that brings in outdoor air must let an equal amount of air leave the building, less whatever goes out through toilet and kitchen exhaust. During economizer operation, outdoor air can rise to 100% of supply airflow, and that air has to go somewhere. Without a path out, the building over-pressurizes, doors stand open on their own and the outdoor damper cannot deliver the airflow the economizer is asking for.</p>
<p>Barometric relief dampers work when building pressure is enough to push air out. When the return duct has meaningful pressure drop, or the relief path is long, a fan is needed. The two hardware options place that fan in different spots.</p>

<h2>Return fan arrangement</h2>
<p>The return fan draws air back from the building through the return ducts and discharges into a plenum with two exits: a relief (exhaust) damper to outdoors and a return damper into the mixing box. The supply fan then draws from the mixing box.</p>
<h3>Pressure profile</h3>
<p>The return fan creates positive pressure in the plenum between it and the dampers. The mixing box, downstream of the return damper, sits slightly negative relative to outdoors so that outdoor air flows in. The return fan handles all the pressure drop in the return ducts, and the supply fan handles the supply side and the AHU internals. The dividing point is the mixing box, which should be held near neutral.</p>
<h3>Characteristics</h3>
<ul>
<li>The fan runs whenever the supply fan runs, moving 100% of return air.</li>
<li>Handles return systems with substantial pressure drop, such as ducted returns serving many floors.</li>
<li>Requires coordinated control between supply and return fan to hold building pressure. Small errors in tracking can push return air out the intake or pull outdoor air through the relief damper.</li>
<li>Adds fan energy all year, including during minimum outdoor air operation when little relief is needed.</li>
</ul>

<h2>Relief fan arrangement</h2>
<p>The relief fan sits in the relief path only, either in a section of the AHU upstream of the mixing box or in a separate exhaust fan elsewhere. The supply fan draws all return air through the return ducts and the mixing box.</p>
<h3>Pressure profile</h3>
<p>The supply fan carries the full return duct pressure drop. The return plenum is negative relative to the building, and the relief fan lifts air from that plenum to outdoors only when building pressure rises. At minimum outdoor air, relief airflow is small and the fan may be off.</p>
<h3>Characteristics</h3>
<ul>
<li>The fan runs only when relief is needed, mainly during economizer operation.</li>
<li>Controlled directly from building static pressure, a simple and stable loop.</li>
<li>Smaller fan, sized for maximum relief airflow, not total return airflow.</li>
<li>Works best when the return system has low pressure drop, such as ceiling plenum returns.</li>
</ul>

<h2>Comparison</h2>
<table>
<thead><tr><th>Factor</th><th>Return fan</th><th>Relief fan</th></tr></thead>
<tbody>
<tr><td>Airflow handled</td><td>All return air</td><td>Relief air only</td></tr>
<tr><td>Running hours</td><td>Whenever the supply fan runs</td><td>Mostly during economizer and high outdoor air periods</td></tr>
<tr><td>Return duct pressure drop carried by</td><td>Return fan</td><td>Supply fan</td></tr>
<tr><td>Annual fan energy</td><td>Higher in most climates</td><td>Lower in most climates</td></tr>
<tr><td>Control complexity</td><td>Higher; must track supply airflow or plenum pressure</td><td>Lower; responds to building pressure</td></tr>
<tr><td>Best suited to</td><td>Ducted returns with high pressure drop; large multistorey buildings</td><td>Plenum returns and low-pressure ducted returns</td></tr>
<tr><td>Risk if misapplied</td><td>Return air forced out the outdoor intake</td><td>Supply fan oversized for return duct; return plenum strongly negative</td></tr>
</tbody>
</table>

<h2>Choosing between them</h2>
<ol>
<li><strong>Estimate return system pressure drop.</strong> Many designers use a threshold of roughly 0.5 in. w.c. (125 Pa); above that, a return fan becomes worth considering. This is a practical guideline, not a code value.</li>
<li><strong>Look at the climate.</strong> In climates with many economizer hours, a relief fan runs more often but still at reduced airflow. In climates with few economizer hours, a relief fan may sit idle most of the year.</li>
<li><strong>Check space for the arrangement.</strong> A return fan section with a relief plenum adds length to the unit. A relief fan can sometimes be a separate roof exhauster.</li>
<li><strong>Think about smoke control.</strong> Some smoke control strategies rely on a return fan to exhaust a fire floor; coordinate with the fire protection engineer.</li>
<li><strong>Consider energy recovery.</strong> Units with wheels or plates require an exhaust fan in the exhaust path anyway, which effectively becomes a return or relief fan; placement also affects recovery leakage, see <a href="<?= url('guides/fan-placement-recovery-leakage') ?>">fan placement and recovery leakage</a>.</li>
</ol>
<p class="warn">A return fan sized much larger than needed can push return air backward out of the outdoor air damper whenever the relief damper is partly closed. Check the pressure in the mixing box at minimum outdoor air.</p>
<p>The sequences that tie either fan to building pressure are covered in <a href="<?= url('guides/building-pressurization-control') ?>">building pressurization control</a>.</p>
<?php guide_end([
    ['What is the difference between a return fan and a relief fan?', 'A return fan moves all return air from the building to the air handler and runs whenever the supply fan does. A relief fan moves only the air that must leave the building and typically runs only when building pressure rises, such as during economizer operation.'],
    ['When is a return fan required?', 'A return fan is generally considered when the return duct system has significant pressure drop, often above roughly 0.5 in. w.c., or when smoke control or building layout requires it. Low-pressure plenum returns usually work better with a relief fan.'],
    ['Do relief fans save energy?', 'Usually yes. A relief fan only runs when relief is needed and handles only relief airflow, while a return fan runs whenever the supply fan runs and moves all return air.'],
]);
