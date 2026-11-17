<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-tip-speed-limits'); ?>
<p class="lede">Tip speed is wheel circumference times rotational speed: π × D × rpm. It tells you how hard a wheel is being driven, and every wheel has a maximum safe speed set by its construction. Check any selection or speed increase against the manufacturer's maximum rpm for the wheel's construction class, which follows the AMCA 99 class framework for centrifugal fans.</p>

<h2>The tip speed formula</h2>
<p class="formula">Tip speed (fpm) = π × D (in) ÷ 12 × RPM</p>
<p class="formula">Tip speed (m/s) = π × D (m) × RPM ÷ 60</p>
<p>D is the outside diameter of the wheel at the blade tips. The result is the linear velocity of the blade tip. Centrifugal stress in the wheel varies with the square of tip speed, so a 10% speed increase raises stresses in the blades, shroud and hub by about 21%.</p>
<p>Tip speed also links directly to the pressure a wheel can develop, since fan pressure scales with the square of tip speed for a given wheel design. That is why high-pressure duties push wheels toward their speed limits.</p>

<h2>What fan classes mean</h2>
<p>Centrifugal fans are built in construction classes, commonly designated Class I, II, III and IV, with each higher class designed for higher pressure and speed. AMCA 99 (the AMCA standards handbook, including the standard on operating limits for centrifugal fans) defines the class framework for housed centrifugal fans in terms of outlet velocity and static pressure. Manufacturers then build each wheel size to a class and publish the maximum safe rpm for that size and class, usually shown as a boundary line on the fan curve or in a table.</p>
<p>Plenum fans have no outlet duct, so manufacturers typically publish a maximum speed for each plenum wheel size directly rather than a class region on an outlet velocity chart. In both cases, the manufacturer's published maximum rpm is the limit that governs. Do not infer limits from a different manufacturer's data or from a general table.</p>
<p class="note">The class limits apply at standard temperature. At elevated air temperatures, steel loses strength and the maximum safe speed is reduced. Manufacturers publish derating multipliers for high-temperature service.</p>

<h2>Worked example: checking a speed increase</h2>
<p>A supply fan has a 36.5 in. (927 mm) diameter wheel running at 1,450 rpm. Test and balance finds airflow is 9% low, so the contractor proposes speeding the fan up to 1,580 rpm. The manufacturer's submittal shows a Class II maximum of 1,620 rpm for this wheel at standard temperature.</p>
<ol>
<li>Current tip speed: π × 36.5 ÷ 12 × 1,450 = 3.1416 × 3.042 × 1,450 = <strong>13,857 fpm</strong> (70.4 m/s).</li>
<li>Proposed tip speed: π × 36.5 ÷ 12 × 1,580 = <strong>15,099 fpm</strong> (76.7 m/s).</li>
<li>Maximum tip speed at 1,620 rpm: π × 36.5 ÷ 12 × 1,620 = <strong>15,481 fpm</strong> (78.6 m/s).</li>
<li>Margin to limit: 1,620 ÷ 1,580 = 1.025, or 2.5%.</li>
</ol>
<p>The proposed speed is within the limit, but with little margin. If the VFD maximum frequency is set above 1,580 rpm equivalent, a controller could push the wheel past the limit. The drive's maximum speed must be clamped below 1,620 rpm, including any slip compensation. Power at the new speed also rises by (1,580 ÷ 1,450)³ = 1.29, which must be checked against the motor. The fan law steps are worked in <a href="<?= url('guides/fan-laws-calculation') ?>">applying the fan laws</a>.</p>

<h2>Worked example: high-temperature derating</h2>
<p>The same fan is being considered for a process air duty at 400°F (204°C). Suppose the manufacturer's derating table gives a speed multiplier of 0.90 at that temperature (use the actual published value for your fan and material).</p>
<ul>
<li>Derated maximum speed: 1,620 × 0.90 = 1,458 rpm.</li>
<li>Derated maximum tip speed: π × 36.5 ÷ 12 × 1,458 = 13,932 fpm.</li>
</ul>
<p>The original 1,450 rpm selection is now almost exactly at the limit. A higher class wheel, a larger wheel at lower speed, or a different material would be needed for any margin. Material choices for wheels are covered in <a href="<?= url('guides/fan-wheel-materials-coatings') ?>">fan wheel materials and coatings</a>.</p>

<h2>Why tip speed limits matter</h2>
<ul>
<li><strong>Structural safety:</strong> exceeding maximum speed risks permanent deformation or wheel failure. A failed wheel can release fragments with great energy.</li>
<li><strong>Balance and vibration:</strong> a wheel near its structural limit is more sensitive to unbalance and resonance.</li>
<li><strong>Bearing and shaft loads:</strong> higher speed increases dynamic loads and can approach the shaft's first critical speed.</li>
<li><strong>Noise:</strong> blade-pass tones and broadband noise rise with tip speed.</li>
</ul>

<h2>Situations that push fans toward their limit</h2>
<p>Most selections start well inside the class limit. The trouble comes from operating conditions that were not part of the original check. In a redundant fan array, the remaining fans speed up when one fails, sometimes by a large margin. In cold climates, a VFD on airflow control will slow the fan when air is dense, but a fan held to a pressure setpoint can run fast against a heavily loaded filter bank. Field changes are another source: a balancer who resheaves a belt drive or raises the drive's maximum frequency to make up an airflow shortfall may not look at the wheel's rating at all.</p>
<p>Smaller wheels used in arrays run at high rpm by nature, so they tend to have less margin than one large, slow wheel at the same duty. That is not a problem when the selection accounts for it, but it makes a careful check of the failure-mode speed essential.</p>

<h2>Steps to check any selection</h2>
<ol>
<li>Record wheel diameter, construction class and maximum rpm from the certified submittal.</li>
<li>Apply temperature derating if the airstream is above the standard rating temperature.</li>
<li>Identify the highest speed the fan could ever run: failure mode in a redundant array, dirty filters, cold-start density, maximum VFD frequency.</li>
<li>Calculate tip speed at that speed and compare with the derated maximum.</li>
<li>Program the VFD maximum frequency so the fan cannot exceed the limit, and record it in the startup documentation.</li>
</ol>
<p class="warn">Never raise a fan's speed in the field, by resheaving or by raising VFD maximum frequency, without checking the wheel's maximum safe speed for its class and temperature.</p>
<?php guide_end([
    ['How do you calculate fan tip speed?', 'Multiply pi by the wheel diameter in feet and by the speed in rpm. The result is in feet per minute. In SI, multiply pi by the diameter in metres and by rpm, then divide by 60 to get metres per second.'],
    ['What are AMCA fan classes?', 'They are construction classes, usually I through IV, that define the pressure and outlet velocity range a centrifugal fan is built to handle. Manufacturers publish the maximum safe speed for each wheel size in each class.'],
    ['Does temperature affect maximum fan speed?', 'Yes. Steel loses strength at elevated temperature, so manufacturers publish derating factors that reduce maximum safe speed for hot airstreams.'],
    ['How do I keep a VFD from overspeeding a fan?', 'Set the drive maximum frequency so the resulting fan speed stays below the wheel\'s derated maximum rpm, allowing for slip compensation and any belt drive ratio.'],
]);
