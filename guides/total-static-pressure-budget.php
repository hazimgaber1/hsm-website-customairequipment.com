<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('total-static-pressure-budget'); ?>
<p class="lede">A total static pressure budget is a line-by-line list of every pressure loss the fan must overcome at design airflow: each component inside the AHU plus the supply and return duct systems outside it. Add them up, apply a modest and explicit allowance, and you have the fan's design total static pressure.</p>

<h2>Why build the budget line by line</h2>
<p>Schedules often show a single number for "TSP" that was carried over from a previous project. That number hides two risks. If it is too low, the fan cannot deliver design airflow once filters load. If it is padded at each step, the fan is oversized, runs at poor efficiency, and may exceed fan power limits in ASHRAE 90.1 or the NECB. A tabulated budget shows where each inch of water column comes from and lets reviewers challenge individual items.</p>
<p>For definitions of internal, external and total static pressure, see <a href="<?= url('guides/internal-vs-external-static-pressure') ?>">internal vs external static pressure</a>. This guide assumes those terms and focuses on the arithmetic.</p>

<h2>The structure of the calculation</h2>
<p class="formula">TSP = Σ internal component losses + ESP supply + ESP return (if no return fan) + allowance</p>
<p>All values must be at the same airflow and air density. Component pressure drops scale roughly with the square of velocity, so if a coil drop was published at a different airflow, correct it:</p>
<p class="formula">ΔP₂ = ΔP₁ × (CFM₂ ÷ CFM₁)²</p>
<p>This square law works well for dampers, plenums and dry coils. Filters behave closer to linearly at low velocity, and wet coils differ from dry coils, so prefer manufacturer data at the actual condition.</p>

<h2>Worked example: 20,000 cfm VAV unit</h2>
<p>A draw-through mixed-air unit, 20,000 cfm (9,440 L/s) at sea level, coil face velocity just under 500 fpm (2.5 m/s), no return fan, so the supply fan also handles the return duct.</p>
<table>
<thead><tr><th>Item</th><th>Basis</th><th>Pressure drop (in. w.c.)</th></tr></thead>
<tbody>
<tr><td>Outdoor/return dampers in mixing box</td><td>Manufacturer data, full open</td><td>0.10</td></tr>
<tr><td>MERV 8 pleated prefilter</td><td>Design loaded value (clean 0.25, change at 0.80)</td><td>0.55</td></tr>
<tr><td>MERV 14 final filter</td><td>Design loaded value (clean 0.45, change at 1.00)</td><td>0.75</td></tr>
<tr><td>Hot water preheat coil, 1 row</td><td>Coil selection, dry</td><td>0.10</td></tr>
<tr><td>Chilled water coil, 6 row</td><td>Coil selection, wet</td><td>0.85</td></tr>
<tr><td>Fan inlet and discharge losses (cabinet effect)</td><td>Fan manufacturer guidance</td><td>0.20</td></tr>
<tr><td>Supply sound attenuator</td><td>Attenuator selection</td><td>0.20</td></tr>
<tr><td>Discharge plenum and outlet</td><td>Plenum velocity calculation</td><td>0.10</td></tr>
<tr><td><strong>Internal static pressure</strong></td><td></td><td><strong>2.85</strong></td></tr>
<tr><td>Supply ductwork, VAV boxes, diffusers</td><td>Duct design to the critical terminal</td><td>1.50</td></tr>
<tr><td>Return ductwork, grilles, plenum</td><td>Duct design</td><td>0.40</td></tr>
<tr><td>Outdoor air louver and intake ductwork</td><td>Parallel to return path; checked separately, not added</td><td>(0.15)</td></tr>
<tr><td><strong>External static pressure</strong></td><td></td><td><strong>1.90</strong></td></tr>
<tr><td><strong>Subtotal</strong></td><td></td><td><strong>4.75</strong></td></tr>
<tr><td>Allowance (about 5%)</td><td>Stated explicitly</td><td>0.25</td></tr>
<tr><td><strong>Design total static pressure</strong></td><td></td><td><strong>5.00</strong></td></tr>
</tbody>
</table>
<p class="note">The outdoor air path and the return path are in parallel, not in series. Use whichever path has the higher loss at the operating condition being designed for. Here the return path (0.40) governs at minimum outdoor air, so the louver path (0.15) is shown for reference only and checked separately for 100% economizer operation.</p>

<h2>Choosing the filter value</h2>
<p>Filters are the largest variable in most budgets. There are three reasonable approaches, and the budget should state which is used:</p>
<ul>
<li><strong>Final (dirty) pressure drop:</strong> guarantees design airflow just before change-out. Conservative; the fan runs below its design point most of the year.</li>
<li><strong>Mid-life or design loaded value:</strong> often the average of clean and final. Common for VAV systems where the fan has speed reserve.</li>
<li><strong>Clean pressure drop:</strong> never appropriate for fan selection, though useful for estimating energy in the first months.</li>
</ul>
<p>Whichever is chosen, check that the selected fan and motor can still deliver design airflow with all filters at their final value. With a variable-speed drive, that usually means confirming that the motor and maximum speed have headroom, rather than selecting the design point at the dirty condition.</p>

<h2>Items that are often missed</h2>
<ul>
<li><strong>Energy recovery devices</strong>, which can add 0.6 to 1.0 in. w.c. on each airstream.</li>
<li><strong>Humidifier dispersion grids</strong>, small individually but not zero.</li>
<li><strong>Air blenders and airflow measuring stations.</strong></li>
<li><strong>System effect</strong> at the unit's duct connections when an elbow sits right at the discharge. This is a real loss caused by poor inlet or outlet conditions; see <a href="<?= url('guides/system-effect-amca-201') ?>">system effect per AMCA 201</a>.</li>
<li><strong>Turning plenums</strong> in stacked or L-shaped units.</li>
<li><strong>Coil wet versus dry.</strong> A cooling coil's wet pressure drop can be noticeably higher than its dry value.</li>
<li><strong>Future filter upgrades.</strong> If the owner may move from MERV 13 to MERV 14 or 15, decide now whether to reserve pressure for it.</li>
</ul>

<h2>Keeping the allowance honest</h2>
<p>Margin is appropriate because duct systems are rarely built exactly as drawn. The problem is stacking it: a designer adds 10% to duct losses, the unit manufacturer rounds up each component, and the fan selector adds another 10%. Compounded, the fan can be 25% oversized in pressure. A single, stated allowance at the bottom of the budget, typically 5% to 10%, is easier to review. The <a href="<?= url('guides/design-margins-without-oversizing') ?>">design margins guide</a> covers this in more depth.</p>
<p>With the total in hand, fan selection proceeds from airflow and TSP; that step is outside this guide.</p>
<h2>Presenting the budget on drawings</h2>
<p>Put the budget table on the equipment schedule sheet or in the basis of design, not only in a calculation file. List the airflow and air density it is based on, the filter loading basis, and the allowance. When a bid substitutes a different coil, filter or recovery device, the reviewer can then replace one line instead of rebuilding the whole number. Update the budget when duct routes change during design development; ESP that was estimated at schematic stage is often the least accurate line.</p>
<?php guide_end([
    ['What is a typical total static pressure for an air handler?', 'It varies widely. Small comfort units may be around 2 to 3 in. w.c., while large VAV units with high-efficiency filters, energy recovery and long duct runs commonly fall between 4 and 7 in. w.c. Build the budget for each project rather than relying on typical values.'],
    ['Should I use clean or dirty filter pressure drop for fan selection?', 'Use a design loaded value, often mid-life, and confirm the fan can still deliver design airflow with filters at their final pressure drop. Clean values understate the fan duty and should not be used for selection.'],
    ['How do I correct a component pressure drop for a different airflow?', 'For most components, pressure drop varies with the square of airflow. Multiply the known drop by the ratio of the new airflow to the old airflow, squared. Use manufacturer data for filters and wet coils where possible.'],
]);
