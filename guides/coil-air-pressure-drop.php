<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('coil-air-pressure-drop'); ?>
<p class="lede">A coil's air-side pressure drop scales roughly with the number of rows and with face velocity raised to a power of about 1.6 to 1.9, and it rises further when the coil is wet. For an early estimate, take a per-row value at a reference velocity, multiply by rows, correct for velocity and apply a wet-coil factor; then replace it with the manufacturer's rated figure once a coil is selected.</p>

<h2>What drives air-side resistance</h2>
<p>Air flowing through a finned coil loses pressure to friction on the fin and tube surfaces and to the contraction and expansion around each tube. Four variables dominate:</p>
<ul>
<li><strong>Face velocity.</strong> Pressure drop grows faster than linearly with velocity because flow between fins is in a transitional regime, part way between laminar and fully turbulent.</li>
<li><strong>Rows.</strong> Each row adds roughly the same resistance, so the total is close to proportional to depth.</li>
<li><strong>Fins per inch.</strong> Tighter spacing reduces free area and raises the velocity between fins.</li>
<li><strong>Fin geometry and wetness.</strong> Enhanced fins (sine-wave, louvered) and condensate on the surface both add resistance.</li>
</ul>

<h2>The estimating method</h2>
<p>Coil manufacturers publish ratings from tested correlations; the method below is for budgeting and for sanity-checking a selection, not for replacing those ratings.</p>
<p class="formula">ΔP(dry) = ΔP(per row at reference) × rows × (V ÷ V(ref))^n</p>
<p class="formula">ΔP(wet) = ΔP(dry) × wet factor</p>
<p>Where V is face velocity in fpm, V(ref) is the velocity the per-row value was taken at (often 500 fpm), and n is a velocity exponent. For typical commercial fins, n falls between about 1.6 and 1.9; 1.8 is a reasonable default for an estimate. A wet factor of 1.3 to 1.5 is common for dehumidifying coils at moderate fin density, rising toward the upper end at higher fin densities and higher latent loads.</p>

<h2>Typical per-row values</h2>
<p>The following figures are representative of sine-wave aluminum fins on 5/8 in (16 mm) copper tubes at 500 fpm (2.5 m/s) and standard air. Actual values vary by manufacturer and fin pattern by 20% or more, so treat them as a starting point only.</p>
<table>
<thead><tr><th>Fins per inch</th><th>Dry ΔP per row at 500 fpm</th><th>Typical wet factor</th></tr></thead>
<tbody>
<tr><td>8</td><td>about 0.09 in. w.c. (22 Pa)</td><td>1.3</td></tr>
<tr><td>10</td><td>about 0.11 in. w.c. (27 Pa)</td><td>1.35</td></tr>
<tr><td>12</td><td>about 0.13 in. w.c. (32 Pa)</td><td>1.4</td></tr>
<tr><td>14</td><td>about 0.15 in. w.c. (37 Pa)</td><td>1.5</td></tr>
</tbody>
</table>

<h2>Worked example: a wet cooling coil</h2>
<p>A chilled water coil is 6 rows at 10 FPI, running at 450 fpm and dehumidifying.</p>
<p class="formula">ΔP(dry) = 0.11 × 6 × (450 ÷ 500)^1.8 = 0.66 × 0.827 ≈ 0.55 in. w.c.</p>
<p class="formula">ΔP(wet) = 0.55 × 1.35 ≈ 0.74 in. w.c. (185 Pa)</p>
<p>Now compare the same coil at 525 fpm, which is what happens if the casing is narrowed by a few inches to save space:</p>
<p class="formula">ΔP(wet) = 0.11 × 6 × (525 ÷ 500)^1.8 × 1.35 = 0.66 × 1.092 × 1.35 ≈ 0.97 in. w.c. (242 Pa)</p>
<p>A 17% increase in velocity raised the wet pressure drop by about 32%. That extra 0.23 in. w.c. is carried by the fan every operating hour.</p>

<h2>Worked example: a dry heating coil</h2>
<p>A 2-row hot water coil at 8 FPI and 450 fpm stays dry:</p>
<p class="formula">ΔP = 0.09 × 2 × (450 ÷ 500)^1.8 ≈ 0.15 in. w.c. (37 Pa)</p>
<p>Heating coils rarely dominate a pressure budget unless they are deep low-temperature coils; those are sized using the method in <a href="<?= url('guides/hot-water-coil-sizing') ?>">hot water coil sizing</a>.</p>

<h2>Which number to carry in the fan selection</h2>
<p>For a cooling coil, carry the wet pressure drop at design airflow in the <a href="<?= url('guides/total-static-pressure-budget') ?>">total static pressure budget</a>. The fan must deliver design airflow on the design cooling day, which is when the coil is wettest. Some designers also add a modest allowance for fouling over time, since dust and biofilm on fins raise resistance; if you do, state it explicitly so the margin is not counted twice.</p>
<p>For VAV units, recognise that pressure drop falls steeply with airflow. At 60% of design airflow, a coil's pressure drop is roughly (0.6)^1.8 ≈ 40% of its design value. That matters for duct static pressure reset and for estimating annual fan energy.</p>

<h2>Correcting for air density</h2>
<p>At altitude or with hot or cold air, density differs from standard. For a given mass flow, actual velocity rises as density falls, and pressure drop scales with density times velocity to the power n. For a rough correction at constant standard CFM:</p>
<p class="formula">ΔP(actual) ≈ ΔP(standard) × (ρ(std) ÷ ρ(actual))^(n − 1)</p>
<p>At 5,000 ft (1,525 m) elevation, density is about 83% of sea level, so with n = 1.8 the correction factor is (1 ÷ 0.83)^0.8 ≈ 1.16. Coil rating software normally handles this when you enter elevation, which is one more reason to give the manufacturer the project elevation rather than standard-air figures alone.</p>

<h2>Reducing coil pressure drop</h2>
<ul>
<li>Lower face velocity by enlarging the coil face; the velocity exponent makes this the most powerful lever.</li>
<li>Use fewer rows at the same fin density if the load allows, or trade rows and fins as discussed in <a href="<?= url('guides/coil-rows-vs-fin-density') ?>">rows vs fin density</a>.</li>
<li>Keep coils clean; fouled fins can add far more resistance than the selection anticipated.</li>
<li>Ensure even airflow across the face so local high-velocity zones do not dominate the measured drop.</li>
</ul>
<?php guide_end([
    ['How much pressure drop does a cooling coil have?', 'A typical 6 to 8 row wet chilled water coil at 450 to 500 fpm runs in the range of about 0.6 to 1.0 in. w.c. The exact value depends on fin spacing, fin pattern and how wet the coil is, so use the manufacturer\'s rated wet value in the fan selection.'],
    ['Why is wet coil pressure drop higher than dry?', 'Condensate films and droplets on the fins reduce the open area between fins and roughen the surface, which raises friction. Wet coils commonly show 30 to 50 percent more pressure drop than the same coil running dry.'],
    ['How does coil pressure drop change with airflow?', 'Coil pressure drop varies with face velocity raised to a power of about 1.6 to 1.9. Reducing airflow to 60 percent of design lowers pressure drop to roughly 40 percent of its design value.'],
]);
