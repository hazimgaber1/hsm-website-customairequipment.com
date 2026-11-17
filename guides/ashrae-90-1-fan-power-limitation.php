<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ashrae-90-1-fan-power-limitation'); ?>
<p class="lede">To show 90.1 fan power compliance, add up the brake horsepower of every fan that moves air through the system at design conditions, then compare that total against an allowance built from the supply airflow plus credits for devices with real pressure drop. If the design total is at or below the allowance, the system complies.</p>

<h2>Which fan systems the limit applies to</h2>
<p>The fan power limitation in ASHRAE/IES Standard 90.1 applies to HVAC fan systems whose combined fan motor nameplate horsepower exceeds 5 hp. A "fan system" is every fan that serves the same air path: the supply fan or fan array, any return or relief fan, and exhaust fans that operate as part of the system's air balance. Each supply air handler is evaluated separately with its associated return and exhaust fans.</p>
<p>The method described below is the bhp-based approach used in the 2010 through 2019 editions. The 2022 edition restructured the requirement into a fan power budget expressed in watts per cfm, with allowances assigned to each component. The logic of "base allowance plus pressure-drop credits" carries through, but the numbers and forms differ, so confirm the edition adopted in your jurisdiction before starting.</p>

<h2>The allowance formulas</h2>
<p>Two options exist. Option 1 compares total motor nameplate horsepower to a simple per-cfm limit. It is quick but harsh on custom units, because nameplate horsepower is always rounded up to a standard motor size. Option 2 uses actual fan brake horsepower and allows pressure-drop adjustments, so it is the path most custom AHU designs take.</p>
<p class="formula">Option 2, constant volume: allowed bhp = CFMs × 0.00094 + A</p>
<p class="formula">Option 2, variable volume: allowed bhp = CFMs × 0.0013 + A</p>
<p class="formula">A = Σ (PD × CFMD ÷ 4131)</p>
<p>CFMs is the maximum design supply airflow. PD is each pressure-drop credit in inches of water, and CFMD is the design airflow through the device that earns the credit. The constant 4131 converts inch-cfm to horsepower at the efficiency assumed by the standard.</p>

<h3>Common pressure-drop credits</h3>
<table>
<thead><tr><th>Device or condition</th><th>Typical credit</th></tr></thead>
<tbody>
<tr><td>Fully ducted return and/or exhaust</td><td>0.5 in. w.c.</td></tr>
<tr><td>Return or exhaust airflow control devices</td><td>0.5 in. w.c.</td></tr>
<tr><td>Particulate filtration, MERV 9 to 12</td><td>0.5 in. w.c.</td></tr>
<tr><td>Particulate filtration, MERV 13 to 15</td><td>0.9 in. w.c.</td></tr>
<tr><td>MERV 16 and higher, HEPA, electronic cleaners</td><td>Pressure drop at twice clean-filter value</td></tr>
<tr><td>Carbon and gas-phase media</td><td>Clean filter pressure drop at design flow</td></tr>
<tr><td>Air-to-air heat recovery</td><td>(2.2 × effectiveness) − 0.5 in. w.c., each airstream</td></tr>
<tr><td>Runaround coil loop</td><td>0.6 in. w.c., each airstream</td></tr>
<tr><td>Sound attenuation section</td><td>0.15 in. w.c.</td></tr>
</tbody>
</table>
<p>These values come from the bhp-method table in the 2016 and 2019 editions. Verify against your adopted edition; credits have been revised over time, and only devices actually present in the design can be claimed.</p>

<h2>Worked example: a 20,000 cfm VAV air handler</h2>
<p>Consider a VAV air handler delivering 20,000 cfm (9,440 L/s) of supply air with a 4.5 in. w.c. (1,120 Pa) total static pressure across the supply fan array. A separate return fan moves 18,000 cfm at 1.5 in. w.c. The unit has MERV 14 final filters, a fully ducted return and a supply sound attenuator.</p>
<ol>
<li><strong>Base allowance.</strong> 20,000 × 0.0013 = 26.0 bhp.</li>
<li><strong>Filter credit.</strong> MERV 14 earns 0.9 in.: 0.9 × 20,000 = 18,000.</li>
<li><strong>Ducted return credit.</strong> 0.5 in. on the return airflow: 0.5 × 18,000 = 9,000.</li>
<li><strong>Sound attenuator credit.</strong> 0.15 × 20,000 = 3,000.</li>
<li><strong>Adjustment A.</strong> (18,000 + 9,000 + 3,000) ÷ 4131 = 7.26 bhp.</li>
<li><strong>Total allowance.</strong> 26.0 + 7.26 = 33.3 bhp.</li>
</ol>
<p>Now calculate the design fan power using the standard brake horsepower relation:</p>
<p class="formula">BHP = CFM × TSP ÷ (6356 × η)</p>
<ul>
<li>Supply array at 65% total efficiency: 20,000 × 4.5 ÷ (6356 × 0.65) = 21.8 bhp.</li>
<li>Return fan at 60% total efficiency: 18,000 × 1.5 ÷ (6356 × 0.60) = 7.1 bhp.</li>
<li>Design total: 28.9 bhp.</li>
</ul>
<p>At 28.9 bhp against a 33.3 bhp allowance, the system complies with about 13% headroom. The same unit checked under Option 1 would need total nameplate horsepower at or below 20,000 × 0.0015 = 30 hp. With a supply array of four 7.5 hp motors (30 hp) plus a 10 hp return fan, it would fail Option 1 even though the actual power is well within the Option 2 allowance.</p>
<p class="note">For a full derivation of fan brake horsepower and how efficiency is defined, see <a href="<?= url('guides/fan-brake-horsepower-calculation') ?>">calculating fan brake horsepower</a>.</p>

<h2>Where calculations go wrong</h2>
<h3>Using the wrong airflow</h3>
<p>The allowance uses design supply airflow, not the sum of supply and return. Credits use the airflow through the specific device. A return-side MERV 8 prefilter earns nothing, and a heat recovery credit applies separately to the supply and exhaust streams at their own flows.</p>
<h3>Mixing static and total pressure</h3>
<p>Fan bhp must be based on the pressure the fan actually develops at design, including internal unit losses. A selection report that lists only external static pressure understates the work being done. Ask for the fan's total static pressure and the efficiency basis used; the distinction is covered in <a href="<?= url('guides/internal-vs-external-static-pressure') ?>">internal versus external static pressure</a>.</p>
<h3>Leaving out exhaust fans</h3>
<p>Exhaust fans that operate with the system to maintain building balance belong in the total. Dedicated toilet exhaust is often included because the outdoor air it removes is supplied by the AHU. Read the definitions in the adopted edition before deciding.</p>
<h3>Confusing this requirement with fan efficiency rules</h3>
<p>The fan power limitation is a system-level budget. Minimum fan efficiency, expressed as Fan Energy Index, is a separate requirement on individual fans. A system can pass one and fail the other.</p>

<h2>Practical ways to recover headroom</h2>
<ul>
<li>Lower coil face velocity toward 400 to 450 fpm (2.0 to 2.3 m/s); the reduced coil pressure drop flows straight into lower bhp.</li>
<li>Select filters with deeper media and lower initial pressure drop, keeping the same MERV class so the credit is unchanged.</li>
<li>Rebalance fan array selection so the operating point sits nearer peak efficiency rather than at the edge of the curve.</li>
<li>Remove unnecessary internal sections, such as blank access modules that add length and transitions.</li>
<li>Check discharge and inlet conditions for system effect losses that inflate the required total pressure.</li>
</ul>
<p>When you need to test several arrangements against the budget, the <a href="<?= url('design') ?>">3D configurator</a> is a convenient way to see how section changes affect the overall unit before requesting final fan selections.</p>
<?php guide_end([
    ['Does ASHRAE 90.1 fan power limitation apply to small air handlers?', 'The bhp-based limitation applies only where the combined motor nameplate horsepower of the fan system exceeds 5 hp. Smaller systems are exempt from the system allowance, although individual fans may still need to meet minimum efficiency requirements under the adopted code.'],
    ['Can I claim a filter credit for both prefilters and final filters?', 'Credits are claimed for the filtration class present in the design. Most designers claim the credit for the highest-efficiency particulate filter bank, because a MERV 8 prefilter does not fall inside a credited range. Read the adopted edition carefully before stacking credits.'],
    ['Is Option 1 or Option 2 better for custom air handlers?', 'Option 2 is almost always better for custom units. It uses actual fan brake horsepower and allows pressure-drop adjustments, while Option 1 uses rounded-up nameplate horsepower with no credits.'],
    ['How did the 2022 edition of 90.1 change fan power compliance?', 'The 2022 edition moved to a fan power budget expressed in watts per cfm with component allowances. The principle is similar, but the values and calculation forms differ, so confirm which edition your jurisdiction has adopted.'],
]);
