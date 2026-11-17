<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('filter-face-velocity-efficiency'); ?>
<p class="lede">Running a filter faster than its rated face velocity raises pressure drop, shortens life and, for most media, lowers efficiency on the fine particles that matter most. Running it slower does the opposite. A filter's MERV and pressure drop data apply at the airflow it was tested at, so the velocity in your unit determines how much of that rated performance you actually get.</p>

<h2>Face velocity and media velocity</h2>
<p>Two velocities describe air moving through a filter:</p>
<ul>
<li><strong>Face velocity</strong>: airflow divided by the nominal face area of the filter or bank. A 24 × 24 in (4 ft²) filter carrying 2,000 CFM runs at 500 fpm (2.5 m/s).</li>
<li><strong>Media velocity</strong>: airflow divided by the total area of media inside the filter. Pleats, bags and V-banks pack far more media than the face area. A V-bank with 180 ft² of media carrying 2,000 CFM has a media velocity of about 11 fpm.</li>
</ul>
<p class="formula">Face velocity (fpm) = CFM ÷ face area (ft²)</p>
<p class="formula">Media velocity (fpm) = CFM ÷ media area (ft²)</p>
<p>Capture mechanisms respond to media velocity, which is why two filters with the same face velocity but different media areas behave very differently. Face velocity is still the practical design figure, since media area is fixed for a given filter model and manufacturers rate filters at a stated face velocity or airflow.</p>

<h2>How velocity changes efficiency</h2>
<p>Each capture mechanism responds differently to speed:</p>
<ul>
<li><strong>Diffusion</strong> captures the smallest particles, below roughly 0.2 µm, by their random motion. Slower air gives particles more time near each fibre, so diffusion capture falls as velocity rises.</li>
<li><strong>Interception</strong> depends mainly on particle size relative to fibre size and is relatively insensitive to velocity.</li>
<li><strong>Impaction</strong> captures larger particles that cannot follow the air around fibres. Faster air increases impaction.</li>
<li><strong>Electrostatic attraction</strong> in charged media needs time to pull particles toward fibres, so it weakens at higher velocity.</li>
</ul>
<p>The net result for most HVAC filters is that efficiency in the 0.3 to 1.0 µm range, the E1 range in ASHRAE 52.2, falls as velocity increases, while efficiency for larger particles changes less or may even rise slightly. The particle size that is hardest to capture also shifts to smaller sizes at higher velocity. Charged synthetic media is typically more sensitive to velocity than mechanical glass fibre media.</p>
<p class="note">A filter's MERV is determined at its test airflow. The standard does not say what the same filter would rate at a higher velocity, and the result is not always obvious. If a filter must run above its rated velocity, ask the manufacturer for test data at that velocity.</p>

<h2>How velocity changes pressure drop</h2>
<p>Flow through the fibrous media itself is slow and close to laminar, so media resistance rises roughly in proportion to velocity. The filter as a whole also has losses from air turning into pleats, pockets and V-packs, which rise closer to the square of velocity. Combined, filter pressure drop typically follows:</p>
<p class="formula">ΔP2 = ΔP1 × (V2 ÷ V1)^n</p>
<p>where n commonly falls between about 1.0 and 2.0, often in the range of 1.2 to 1.6 for pleated and V-bank filters. Manufacturers' published curves give the real relationship.</p>
<p>Example: a final filter with an initial pressure drop of 0.40 in. w.c. at 500 fpm, assuming n = 1.4:</p>
<p class="formula">At 400 fpm: ΔP = 0.40 × (400 ÷ 500)^1.4 = 0.40 × 0.73 ≈ 0.29 in. w.c.</p>
<p class="formula">At 600 fpm: ΔP = 0.40 × (600 ÷ 500)^1.4 = 0.40 × 1.29 ≈ 0.52 in. w.c.</p>
<p>The same relationship applies through the filter's life, so a high-velocity bank starts higher and reaches its change-out pressure sooner.</p>

<h2>How velocity changes filter life</h2>
<p>Dust arriving at a filter is proportional to the airflow through it. At higher velocity, each filter receives more dust per hour, and its pressure drop is also higher for any given dust load. Both effects shorten life. Reducing face velocity from 500 to 400 fpm, by adding filter area, can extend filter life noticeably while also cutting fan energy.</p>

<h2>Rated velocity and what it means</h2>
<table>
<thead><tr><th>Operating condition</th><th>Efficiency (fine particles)</th><th>Pressure drop</th><th>Life</th></tr></thead>
<tbody>
<tr><td>Below rated velocity</td><td>Same or better than rated</td><td>Lower</td><td>Longer</td></tr>
<tr><td>At rated velocity</td><td>As rated</td><td>As published</td><td>As expected</td></tr>
<tr><td>Above rated velocity</td><td>Often lower than rated</td><td>Higher</td><td>Shorter; risk of media damage at extremes</td></tr>
</tbody>
</table>
<p>Many commercial filters are rated at 492 or 500 fpm, which correspond to nominal 2,000 CFM through a 24 × 24 in filter. Bag filters may have rated airflows that differ with pocket length. Above about 625 fpm (3.2 m/s), many filters approach their structural limits and should not be used without manufacturer confirmation.</p>

<h2>Uneven velocity across the bank</h2>
<p>The average face velocity can be fine while part of the bank runs much faster, for example where a filter bank sits close to a fan discharge, an elbow or a mixing box. The high-velocity area loads first, can shed or damage media, and has lower efficiency. Diffusers, baffles or more distance upstream help even out the profile. How filter banks are positioned relative to fans and coils is covered in <a href="<?= url('guides/prefilter-and-final-filter-arrangement') ?>">prefilter and final filter arrangement</a>.</p>
<p>Velocity is one input to the fan pressure calculation; the resulting pressure drops are carried as described in <a href="<?= url('guides/filter-pressure-drop-initial-final') ?>">initial, mid-life and final filter pressure drop</a>. Sizing the overall AHU cross-section is a separate exercise in <a href="<?= url('guides/ahu-cross-section-sizing') ?>">AHU cross-section sizing</a>.</p>
<?php guide_end([
    ['Does higher face velocity reduce filter efficiency?', 'For most HVAC filters, yes, for fine particles. Diffusion and electrostatic capture weaken as air moves faster, so efficiency in the 0.3 to 1 micrometre range usually falls above the rated velocity. Larger particle efficiency is less affected.'],
    ['What face velocity are filters rated at?', 'Many commercial filters are rated at about 492 to 500 fpm, which corresponds to 2,000 CFM through a nominal 24 by 24 inch filter. Check the manufacturer\'s data, since some formats have different rated airflows.'],
    ['How does filter pressure drop change with velocity?', 'Filter pressure drop typically rises with velocity to a power between about 1 and 2, often around 1.2 to 1.6 for pleated and V-bank filters. Reducing face velocity from 500 to 400 fpm can cut initial pressure drop by roughly a quarter.'],
]);
