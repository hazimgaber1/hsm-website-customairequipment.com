<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-laws-calculation'); ?>
<p class="lede">For a given fan on a fixed system, airflow changes in proportion to speed, pressure with the square of speed, and power with the cube of speed. Wheel diameter has an even stronger effect: airflow follows diameter cubed and power follows diameter to the fifth power.</p>

<h2>The fan laws</h2>
<p>The fan laws (also called affinity laws) predict how a fan's performance changes when speed, wheel diameter or air density changes. They hold for geometrically similar fans operating at the same point of rating, meaning the same relative position on their curves. In practice that means the fan is working against a system whose resistance varies with the square of airflow.</p>
<p class="formula">CFM2 = CFM1 × (RPM2 ÷ RPM1) × (D2 ÷ D1)³</p>
<p class="formula">P2 = P1 × (RPM2 ÷ RPM1)² × (D2 ÷ D1)² × (ρ2 ÷ ρ1)</p>
<p class="formula">BHP2 = BHP1 × (RPM2 ÷ RPM1)³ × (D2 ÷ D1)⁵ × (ρ2 ÷ ρ1)</p>
<p>Here P is static or total pressure (use the same one throughout), D is wheel diameter and ρ is air density. When only one variable changes, the other ratios equal 1 and drop out. Airflow is volumetric, so it does not change with density at a fixed speed; pressure and power do.</p>

<h2>Example 1: raising speed to recover airflow</h2>
<p>A supply fan delivers 20,000 cfm (9,440 L/s) at 3.0 in. w.c. (750 Pa) static pressure, running at 1,100 rpm and drawing 15.0 bhp. Test and balance shows the system needs 22,000 cfm. What speed, pressure and power result?</p>
<ol>
<li>Speed ratio = 22,000 ÷ 20,000 = 1.10, so new speed = 1,100 × 1.10 = <strong>1,210 rpm</strong>.</li>
<li>Pressure = 3.0 × 1.10² = 3.0 × 1.21 = <strong>3.63 in. w.c.</strong></li>
<li>Power = 15.0 × 1.10³ = 15.0 × 1.331 = <strong>20.0 bhp</strong>.</li>
</ol>
<p>A 10% airflow increase costs a 33% power increase. If the motor is a 20 hp unit, it is now fully loaded; any filter loading pushes it past nameplate. Checking the motor against the new brake horsepower is covered in <a href="<?= url('guides/motor-sizing-service-factor') ?>">sizing fan motors</a>.</p>
<p class="warn">Before raising speed, check the new rpm against the wheel's maximum safe speed for its fan class. See <a href="<?= url('guides/fan-tip-speed-limits') ?>">fan tip speed and class limits</a>.</p>

<h2>Example 2: slowing a fan down</h2>
<p>The same fan is turned down to 80% speed (880 rpm) during low-load hours, on a system with no fixed pressure setpoint.</p>
<ul>
<li>Airflow = 20,000 × 0.80 = 16,000 cfm</li>
<li>Pressure = 3.0 × 0.80² = 1.92 in. w.c.</li>
<li>Power = 15.0 × 0.80³ = 15.0 × 0.512 = 7.7 bhp</li>
</ul>
<p>Cutting airflow by 20% roughly halves fan shaft power. That cube relationship is the reason variable speed pays off. Real systems save less than the pure cube suggests, especially when a duct static setpoint holds pressure up; turning the relationship into annual kilowatt-hours is covered in <a href="<?= url('guides/vfd-fan-energy-savings-calculation') ?>">estimating annual fan energy savings with VFDs</a>.</p>

<h2>Example 3: changing wheel diameter</h2>
<p>A designer compares a 33 in. wheel with a 36.5 in. wheel of the same geometric family, both at 1,100 rpm. The diameter ratio is 36.5 ÷ 33 = 1.106.</p>
<table>
<thead><tr><th>Quantity</th><th>Exponent on D</th><th>Multiplier</th><th>33 in. wheel</th><th>36.5 in. wheel</th></tr></thead>
<tbody>
<tr><td>Airflow</td><td>3</td><td>1.353</td><td>20,000 cfm</td><td>27,060 cfm</td></tr>
<tr><td>Static pressure</td><td>2</td><td>1.223</td><td>3.0 in. w.c.</td><td>3.67 in. w.c.</td></tr>
<tr><td>Brake horsepower</td><td>5</td><td>1.655</td><td>15.0 bhp</td><td>24.8 bhp</td></tr>
</tbody>
</table>
<p>The larger wheel at the same speed is a very different fan. In practice the designer would run the larger wheel slower to meet the same duty. Combining the laws: to deliver the original 20,000 cfm with the 36.5 in. wheel, speed = 1,100 ÷ 1.353 = 813 rpm. Pressure at that point = 3.0 × (813 ÷ 1,100)² × 1.223 = 3.0 × 0.546 × 1.223 = 2.0 in. w.c. That is lower than the 3.0 in. w.c. needed, so the operating point is not similar and the fan laws alone cannot pick the larger wheel's speed. A real selection uses the manufacturer's curves for the new wheel.</p>
<p class="note">The diameter laws work well for scaling within a geometrically similar fan family. They are a poor substitute for reselecting a fan when the operating point must stay fixed.</p>

<h2>Example 4: density change</h2>
<p>The same 20,000 cfm fan moves air at 40°F (4°C) instead of standard 70°F (21°C). Density ratio ≈ (460 + 70) ÷ (460 + 40) = 1.06. At the same 1,100 rpm, airflow stays at 20,000 cfm, but pressure rises to 3.0 × 1.06 = 3.18 in. w.c. and power to 15.0 × 1.06 = 15.9 bhp. Cold-start and altitude corrections follow the same ratio; the full density correction method is in <a href="<?= url('guides/fan-density-correction') ?>">fan density correction</a>.</p>

<h2>When the fan laws break down</h2>
<ul>
<li><strong>Fixed pressure components:</strong> a duct static setpoint, a fixed-pressure terminal or a constant-pressure filter bank means the system curve does not pass through zero, so the operating point is not similar at lower speed.</li>
<li><strong>Large speed changes:</strong> efficiency shifts slightly with Reynolds number, and motor and drive losses do not scale with the cube.</li>
<li><strong>Different fan geometry:</strong> the laws only scale between geometrically similar wheels. A different blade type or inlet cone is a different fan.</li>
<li><strong>Unstable region:</strong> if the new point lands left of the peak on the fan curve, predicted airflow will not materialize.</li>
</ul>
<?php guide_end([
    ['What are the three fan laws?', 'Airflow varies directly with fan speed, pressure varies with the square of speed and power varies with the cube of speed. Diameter and density versions of the laws extend the same idea.'],
    ['How much power does a 10% speed increase need?', 'About 33% more power, because 1.10 cubed is 1.331. Always check the motor nameplate and wheel speed limit before increasing fan speed.'],
    ['Do the fan laws apply to VAV systems?', 'Only approximately. A VAV system controlled to a fixed duct static setpoint does not have a system curve through zero, so actual power at reduced speed is higher than the cube law predicts.'],
    ['Does air density change fan airflow?', 'At a fixed speed a fan moves the same volume of air regardless of density. Pressure and power change in direct proportion to density.'],
]);
