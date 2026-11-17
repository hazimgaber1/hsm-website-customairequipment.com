<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('dust-collection-fans'); ?>
<p class="lede">A dust collection fan has to pull the required airflow through hoods, ductwork and a collector whose resistance rises as filters load. Where the fan sits, clean side or dirty side, dictates the wheel type and construction, and the pressure it must develop is set by the duct velocity needed to keep dust airborne plus the collector's loaded pressure drop.</p>

<h2>Clean-side vs dirty-side fans</h2>
<h3>Clean-side (downstream of the collector)</h3>
<p>Most baghouse and cartridge collector systems place the fan after the collector. The fan handles filtered air with only residual dust, so a more efficient wheel can be used. Benefits include higher efficiency, lower wear and less buildup. The collector operates under negative pressure, so leaks draw air in rather than letting dust out.</p>
<h3>Dirty-side (upstream of the collector)</h3>
<p>The fan sits before the collector and handles the full dust load. This is common with cyclones, where the fan pushes air into the cyclone, and in systems that convey material through the fan. The collector is then under positive pressure, which can leak dust. The fan must handle abrasive and possibly sticky material, so radial or paddle wheels with wear protection are standard.</p>
<table>
<thead><tr><th>Factor</th><th>Clean-side fan</th><th>Dirty-side fan</th></tr></thead>
<tbody>
<tr><td>Dust load at fan</td><td>Low (after filtration)</td><td>Full process load</td></tr>
<tr><td>Typical wheel</td><td>Backward inclined, airfoil or radial tip</td><td>Radial, paddle or radial tip with liners</td></tr>
<tr><td>Efficiency</td><td>Higher</td><td>Lower</td></tr>
<tr><td>Wear and buildup</td><td>Low</td><td>High; inspection and liners needed</td></tr>
<tr><td>Collector pressure</td><td>Negative (leaks inward)</td><td>Positive (leaks outward)</td></tr>
<tr><td>Explosion and fire considerations</td><td>Fan isolated from most dust</td><td>Fan exposed to combustible dust; more protection needed</td></tr>
</tbody>
</table>
<p>The construction of radial and paddle wheels for dirty-side service is covered in <a href="<?= url('guides/radial-blade-paddle-wheel-fans') ?>">radial blade and paddle wheel fans</a>.</p>

<h2>Wheel choice for clean-side fans</h2>
<p>Even on the clean side, some dust passes through when a bag tears or a cartridge fails. Choose a wheel that tolerates occasional dust:</p>
<ul>
<li><strong>Backward-inclined flat blade:</strong> good efficiency and more tolerant of dust than hollow airfoil blades.</li>
<li><strong>Airfoil:</strong> highest efficiency but vulnerable if filters fail; erosion can perforate hollow blades and allow dust to collect inside, causing severe imbalance.</li>
<li><strong>Radial tip:</strong> lower efficiency, very rugged, a safe choice when filter failures are frequent or dust is very abrasive.</li>
</ul>
<p>Install a broken bag detector or differential pressure monitoring so a filter failure is caught before the fan is damaged.</p>

<h2>Setting system pressure</h2>
<p>The fan's total pressure requirement is the sum of all losses at design airflow, with the collector at its loaded (maximum operating) pressure drop.</p>
<ol>
<li><strong>Hood entry losses</strong> for each pickup, from hood entry coefficients.</li>
<li><strong>Duct friction and fittings,</strong> calculated at the conveying velocity needed for the dust.</li>
<li><strong>Collector pressure drop,</strong> including inlet, filter media at the high end of the cleaning cycle, and outlet.</li>
<li><strong>Stack or discharge losses,</strong> plus any silencer or damper.</li>
<li><strong>System effect</strong> from fan inlet and outlet conditions.</li>
</ol>
<p>Industrial ventilation references such as the ACGIH Industrial Ventilation manual give hood entry coefficients and recommended minimum conveying velocities by dust type. Conveying velocities are typically 3,500 to 4,500 fpm (18 to 23 m/s) for many industrial dusts, higher for heavy or sticky materials. Falling below the conveying velocity lets dust settle in ducts, which increases resistance and is a fire hazard with combustible dust.</p>
<p class="note">Dust collection systems are sensitive to airflow. A fan that delivers 10% less airflow than design may drop branch velocities below conveying velocity and plug ducts. Select with margin and verify after startup.</p>

<h2>Handling the changing collector resistance</h2>
<p>Filter pressure drop varies through each cleaning cycle and rises over the life of the media. If the fan runs at fixed speed, airflow falls as pressure rises. Options:</p>
<ul>
<li>Select the fan for design airflow at the maximum allowable collector pressure drop, and accept higher airflow when filters are clean (check motor power at clean conditions).</li>
<li>Use a variable frequency drive controlled to hold a duct static pressure or airflow setpoint, increasing speed as filters load. This saves energy and keeps capture constant.</li>
<li>Use an outlet damper, which is simpler but wastes energy.</li>
</ul>
<p>Check how the operating point moves along the fan curve over the full range using a system curve analysis; the method is in <a href="<?= url('guides/fan-curves-and-system-curves') ?>">fan curves and system curves</a>.</p>

<h2>Combustible dust considerations</h2>
<p>Many collected dusts, including wood, grain, sugar, plastics and metal powders, are combustible. NFPA standards on combustible dust (where adopted) and local codes require a dust hazard analysis and may require explosion venting, isolation, spark detection, and specific fan construction. For the fan:</p>
<ul>
<li>Keep the fan on the clean side when possible to reduce exposure.</li>
<li>Specify spark-resistant construction where required by the hazard analysis.</li>
<li>Use motors and electrical equipment rated for the area classification.</li>
<li>Ground and bond the fan, ducts and collector to prevent static buildup.</li>
<li>Consider isolation devices that stop flame propagation from the collector back through ductwork.</li>
</ul>

<h2>Construction details</h2>
<ul>
<li>Heavy-gauge housings with bolted access doors for inspection.</li>
<li>Arrangements with bearings out of the airstream, commonly arrangement 1, 8 or 9.</li>
<li>Shaft seals to limit leakage at the housing.</li>
<li>Drain at the scroll bottom for wet dusts or washdown.</li>
<li>Inlet boxes or straight inlet duct to reduce system effect.</li>
</ul>
<p>Wear and buildup problems are separate and covered in their own troubleshooting guide. For dust collection fan builds, our <a href="<?= url('products/industrial-fans') ?>">industrial fans</a> page describes available wheels and construction.</p>
<?php guide_end([
    ['Should a dust collector fan be on the clean side or dirty side?', 'Clean-side placement is preferred for baghouses and cartridge collectors because the fan handles filtered air, can use a more efficient wheel and wears less. Dirty-side fans are common with cyclones and material conveying.'],
    ['What static pressure does a dust collection fan need?', 'Sum hood entry losses, duct losses at conveying velocity, collector pressure drop at its loaded condition, and discharge losses. Many systems fall in the range of several inches to well over ten inches of water, depending on design.'],
    ['Can I use an airfoil fan for dust collection?', 'Only on the clean side with reliable filters and monitoring. If filters fail, abrasive dust can erode hollow airfoil blades and get inside them, causing serious imbalance. Backward-inclined flat or radial tip blades are more tolerant.'],
]);
