<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('cooling-coil-face-velocity-moisture-carryover'); ?>
<p class="lede">Dehumidifying coils are usually held to about 500 fpm (2.5 m/s) face velocity because above that the air starts stripping condensate off the fins and carrying it downstream. The exact threshold depends on fin geometry, fin spacing, coil height and how wet the coil is running.</p>

<h2>What carryover actually is</h2>
<p>When a cooling coil runs below the entering air dew point, water condenses on the fins and tubes as a film and as droplets. Gravity pulls that water down the fin faces toward the drain pan. The airstream pushes it the other way, toward the leaving face. As long as gravity wins, the water drains into the pan beneath the coil. Once the air drag on a droplet exceeds what surface tension and gravity can hold, droplets detach from the leaving edge of the fins and travel with the air.</p>
<p>The result shows up as wet insulation and liner downstream of the coil, puddles on the floor of the fan section, water spitting from the fan discharge, soaked final filters, and in the worst cases water in supply ductwork. Every one of those is a microbial growth site, so carryover is a hygiene issue before it is a nuisance.</p>

<h2>Where the 500 fpm figure comes from</h2>
<p>The 500 fpm number is not a law of physics; it is a long-standing industry rule backed by manufacturer testing and reflected in ASHRAE 62.1, which requires dehumidifying coils to be selected so that water carryover does not wet downstream surfaces. The standard frames this as a performance requirement rather than a fixed velocity, and designers generally meet it by staying at or under the carryover limit the coil manufacturer publishes for that fin type. For plain flat or lightly corrugated aluminum fins at typical spacing, that limit tends to land in the 500 to 550 fpm (2.5 to 2.8 m/s) range.</p>
<p>Many owners and specifiers write a lower ceiling into their standards, often 450 fpm (2.3 m/s) or even 400 fpm (2.0 m/s), for reasons that go beyond carryover: lower air pressure drop, lower fan energy, better latent performance and more tolerance for airflow non-uniformity across the face.</p>

<h2>How fin type changes the limit</h2>
<p>Fin surface enhancement exists to break up the boundary layer and raise the heat transfer coefficient. The same features that improve heat transfer also tend to hold water differently and create local high-velocity zones. In broad terms:</p>
<table>
<thead><tr><th>Fin type</th><th>Typical carryover behaviour</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>Flat (plain) fin</td><td>Highest tolerance; water sheets down cleanly</td><td>Lowest air pressure drop, lowest capacity per row</td></tr>
<tr><td>Sine-wave or corrugated fin</td><td>Moderate; most common in commercial AHUs</td><td>Good balance of capacity, pressure drop and drainage</td></tr>
<tr><td>Louvered or lanced fin</td><td>Lower; the slits shed droplets into the airstream</td><td>Very high capacity per row; ask for the published limit</td></tr>
<tr><td>Hydrophilic-coated fin</td><td>Improved; water spreads as a film instead of beading</td><td>Coating durability over coil life varies</td></tr>
</tbody>
</table>
<p>Fin spacing matters too. Tighter spacing (higher fins per inch) lets water bridge between fins, which slows drainage and raises the chance that a bridge is blown off as a slug. The tradeoff between rows and fin density is covered in <a href="<?= url('guides/coil-rows-vs-fin-density') ?>">more rows vs higher fin density</a>.</p>

<h2>Other factors that move the threshold</h2>
<h3>Coil height</h3>
<p>A tall coil accumulates condensate as water runs down the face. The lower portion of a 60 in (1.5 m) tall coil carries the water load from everything above it, so the bottom rows are the most likely to shed. This is the main reason tall cooling coils are split vertically with an intermediate pan; see <a href="<?= url('guides/stacked-coils-intermediate-drain-pans') ?>">stacked coils and intermediate drain pans</a>.</p>
<h3>Latent load</h3>
<p>A coil handling humid outdoor air in a 100% OA unit condenses far more water per square foot than a recirculating coil with a modest latent load. A coil that is fine at 500 fpm in an office can carry water at the same velocity in a makeup air unit on a humid day.</p>
<h3>Velocity profile</h3>
<p>The 500 fpm figure is an average. Air approaching from a mixing box, an elbow or a fan discharge can be 30% or more above average in parts of the face. Carryover starts at the local peak, not the average. A blow-through coil downstream of a fan, without proper diffusion, is especially vulnerable.</p>
<h3>Coil depth and row count</h3>
<p>Deeper coils give droplets more surface to re-attach to before reaching the leaving face, which helps slightly, but deep coils also hold more water overall. Do not count on depth to rescue a high-velocity selection.</p>

<h2>Checking a selection for carryover risk</h2>
<p>Face velocity is airflow divided by finned face area:</p>
<p class="formula">Face velocity (fpm) = CFM ÷ finned face area (ft²)</p>
<p>A coil with a finned area of 30 in × 96 in is 20.0 ft². At 10,000 CFM it runs at 500 fpm. Note that the finned area is smaller than the casing opening; use the coil manufacturer's finned dimensions, not the unit inside dimensions.</p>
<p>When reviewing a selection, look for:</p>
<ul>
<li>The manufacturer's stated maximum face velocity for the selected fin type, and the selected velocity relative to it.</li>
<li>Condensate rate on the selection printout, which indicates how wet the coil runs.</li>
<li>Finned height; tall single coils at high velocity deserve a second look.</li>
<li>The approach to the coil: is there a fan, elbow or damper close upstream that will skew the profile?</li>
</ul>
<p class="note">Variable air volume systems run below design airflow most of the year, so carryover tends to appear on the hottest, most humid days at full flow. If a VAV unit has wet downstream surfaces only in peak summer, velocity is the first suspect.</p>

<h2>Mitigation when velocity cannot come down</h2>
<p>Sometimes the cross-section is fixed by a mechanical room door, an existing shaft, or a retrofit opening. Options in rough order of preference:</p>
<ol>
<li>Choose a fin type with a higher published carryover limit or a hydrophilic coating.</li>
<li>Split the coil vertically with an intermediate drain pan to shorten the drainage path.</li>
<li>Add a moisture eliminator downstream of the coil, accepting its pressure drop and the cleaning it needs.</li>
<li>Extend the drain pan well downstream of the leaving face so that droplets that do shed fall into the pan rather than onto the floor.</li>
</ol>
<p>Choosing the overall unit cross-section to keep velocity in range is a separate exercise covered in <a href="<?= url('guides/ahu-cross-section-sizing') ?>">AHU cross-section sizing</a>. If you are working through a tight retrofit footprint, a custom unit can often be built taller or wider in the coil section alone; the <a href="<?= url('products/custom-air-handlers') ?>">custom air handler</a> page shows the kinds of shapes that are possible.</p>
<?php guide_end([
    ['What is the maximum face velocity for a cooling coil?', 'Most designers limit wet cooling coils to about 500 fpm (2.5 m/s), and many owner standards set 450 fpm or lower. The true limit depends on fin type, fin spacing, coil height and latent load, so use the carryover limit the coil manufacturer publishes for the specific fin.'],
    ['Does ASHRAE 62.1 set a coil face velocity limit?', 'ASHRAE 62.1 requires that dehumidifying coils be selected so that condensate is not carried downstream onto surfaces, rather than fixing a single velocity. Designers usually demonstrate compliance with the manufacturer\'s published carryover limit for the selected fin.'],
    ['Why does water blow off my cooling coil only in summer?', 'Carryover depends on both velocity and how much water the coil condenses. At peak summer the coil runs at full airflow and the highest latent load, so droplets form faster and the air is moving fastest. A coil that stays dry at part load can carry water on design days.'],
    ['Do eliminators fix moisture carryover?', 'A moisture eliminator can capture droplets that leave a coil, but it adds air pressure drop and needs cleaning. Reducing face velocity, changing fin type or splitting a tall coil are usually better first steps.'],
]);
