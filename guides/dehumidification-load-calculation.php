<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('dehumidification-load-calculation'); ?>
<p class="lede">Add up the space latent gains in Btu/h, then divide by 0.68 × the supply airflow to find how many grains per pound drier than the room the supply air must be. Subtract that from the room humidity ratio and convert to dew point. If the answer is lower than your coil can reach, raise the airflow, accept a higher room humidity or change the dehumidification method.</p>

<h2>The equations</h2>
<p>Latent heat in an airstream, at standard density, with humidity ratio in grains per pound of dry air:</p>
<p class="formula">Q_latent (Btu/h) = 0.68 × CFM × Δgr</p>
<p>The 0.68 comes from 4.5 lb/h per cfm × about 1,060 Btu per pound of water ÷ 7,000 grains per pound. The equivalent form with humidity ratio in lb/lb is 4,840 × CFM × ΔW.</p>
<p>For the space to stay at its target, the supply air must absorb the space latent load:</p>
<p class="formula">gr_supply = gr_room − Q_latent,space ÷ (0.68 × CFM_supply)</p>
<p>The coil (or other dehumidifier) must then remove the difference between entering air and that supply condition:</p>
<p class="formula">Q_latent,coil = 0.68 × CFM_through coil × (gr_entering − gr_supply)</p>

<h2>Step 1: List the space latent gains</h2>
<ul>
<li><strong>People.</strong> Use activity-based latent gains from the ASHRAE Handbook of Fundamentals. Seated office work is roughly 150 to 200 Btu/h per person; active occupants such as gym users are several times that.</li>
<li><strong>Infiltration.</strong> 0.68 × infiltration cfm × (gr_outdoor − gr_room). In humid climates this can rival the people load on leaky buildings.</li>
<li><strong>Internal moisture sources.</strong> Cooking, dishwashing, open water, plants, wet processes. For pools, see the evaporation method in the natatorium guide.</li>
<li><strong>Moisture from materials.</strong> Drying construction materials or incoming product can be significant in warehouses and new buildings.</li>
</ul>
<p>Do not include the ventilation air load here. Outdoor air brought in through the AHU is handled at the coil; only the moisture that reaches the space unconditioned counts as a space load.</p>

<h2>Step 2: Set the room target</h2>
<p>Choose the space dry-bulb and RH (or dew point) for summer design and convert to grains. At 75 F and 50 percent RH, the room holds about 65 gr/lb. At 75 F and 55 percent RH, about 72 gr/lb. Typical targets by space type are summarized in <a href="<?= url('guides/humidity-requirements-by-space-type') ?>">humidity requirements by space type</a>.</p>

<h2>Step 3: Solve for the supply condition</h2>
<h3>Worked example: classroom on a DOAS</h3>
<p>A classroom has 31 occupants at 200 Btu/h latent each and 100 cfm of infiltration with outdoor air at 120 gr/lb. Room target is 75 F and 50 percent RH (65 gr/lb).</p>
<p>People: 31 × 200 = 6,200 Btu/h.</p>
<p>Infiltration: 0.68 × 100 × (120 − 65) = 3,740 Btu/h.</p>
<p>Total space latent: 9,940 Btu/h.</p>
<p><strong>Trial 1: DOAS supplies 450 cfm</strong>, the ventilation rate only.</p>
<p>Δgr = 9,940 ÷ (0.68 × 450) = 32.5 gr/lb. Supply must be 65 − 32.5 = 32.5 gr/lb, which corresponds to a dew point of about 37 F.</p>
<p>That is below what a chilled water coil with 42 to 44 F water can deliver, and near the frost range for DX coils. This airflow cannot do the job with an ordinary coil.</p>
<p><strong>Trial 2: increase DOAS supply to 900 cfm.</strong></p>
<p>Δgr = 9,940 ÷ (0.68 × 900) = 16.2 gr/lb. Supply = 65 − 16.2 = 48.8 gr/lb, a dew point of about 48 F. That is achievable with a chilled water coil and reasonable approach temperatures.</p>
<p><strong>Trial 3: keep 450 cfm and relax the room to 55 percent RH (72 gr/lb).</strong></p>
<p>Supply = 72 − 32.5 = 39.5 gr/lb, about 42 F dew point. Still difficult with chilled water; it would need a DX coil at low suction temperature or a desiccant.</p>
<p class="note">The supply dew point needed is very sensitive to airflow when latent loads are high. Doubling airflow halves the required drying below room conditions.</p>

<h2>Step 4: Calculate the coil latent load</h2>
<p>For trial 2, if all 900 cfm is outdoor air at 120 gr/lb entering the coil:</p>
<p>Q_latent,coil = 0.68 × 900 × (120 − 48.8) ≈ 43,600 Btu/h.</p>
<p>If the DOAS has an enthalpy wheel that brings outdoor air down to 85 gr/lb before the coil, the coil latent drops to 0.68 × 900 × (85 − 48.8) ≈ 22,200 Btu/h.</p>
<p>Add the sensible coil load (1.08 × CFM × ΔT) to get total coil load, or use 4.5 × CFM × Δh with enthalpies read at the entering and leaving states.</p>

<h2>Step 5: Check the result against equipment limits</h2>
<table>
<thead><tr><th>Required supply dew point</th><th>Usual method</th></tr></thead>
<tbody>
<tr><td>Above about 50 F</td><td>Standard chilled water or DX coil</td></tr>
<tr><td>About 45 to 50 F</td><td>Deeper coil, colder chilled water or DX at lower suction</td></tr>
<tr><td>About 40 to 45 F</td><td>Low-temperature chilled water, glycol or DX; frost risk management</td></tr>
<tr><td>Below about 40 F</td><td>Desiccant or coil plus desiccant</td></tr>
</tbody>
</table>
<p>These are broad guides. How to reach the bottom rows is covered in <a href="<?= url('guides/low-dew-point-supply-air') ?>">how to achieve supply dew points below 40 F</a>. The coil physics behind the top rows are in <a href="<?= url('guides/cooling-dehumidification-reheat') ?>">cooling-based dehumidification</a>.</p>

<h2>Part-load and unoccupied conditions</h2>
<p>Repeat the calculation for the conditions that dominate operating hours, not only the design day. With fewer people in the space, the required supply dew point rises and the coil can be reset upward to save energy. Unoccupied periods in humid climates still carry infiltration and material moisture loads; if the system shuts off, the space dew point climbs overnight. Decide whether the system must hold a maximum dew point when unoccupied, and size the airflow and controls for that case too.</p>

<h2>Common errors</h2>
<ul>
<li>Using the summer peak dry-bulb day for latent design. The worst latent day is often a mild, humid day with lower sensible load. Check dehumidification design data for the location.</li>
<li>Forgetting infiltration in humid climates.</li>
<li>Assuming the coil leaving air is saturated at the coil leaving dry-bulb at all loads.</li>
<li>Ignoring altitude: correct the 0.68 factor for air density above about 2,000 ft.</li>
</ul>
<?php guide_end([
    ['How do I calculate the supply dew point needed for dehumidification?', 'Divide the space latent load in Btu/h by 0.68 times the supply cfm to get the grains per pound the supply must be below the room. Subtract that from the room humidity ratio and convert the result to dew point.'],
    ['What is the 0.68 factor in latent load calculations?', 'It converts cfm and grains per pound into Btu/h of latent heat at standard air density: 4.5 lb/h per cfm times about 1,060 Btu per pound of water divided by 7,000 grains per pound.'],
    ['What design day should be used for dehumidification?', 'Use dehumidification design conditions, which are often a mild, humid day with high dew point and moderate dry-bulb. The peak dry-bulb day can understate the latent load.'],
]);
