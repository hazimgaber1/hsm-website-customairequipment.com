<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('recovery-pressure-drop-fan-penalty'); ?>
<p class="lede">The fan penalty is the extra electrical power both fans draw to push air through the recovery device and its added filters and dampers. Calculate it from the added pressure drop on each airstream, the airflow and the overall fan system efficiency, then compare it with the recovered energy at the same operating hour. A good device recovers many times more energy than its fans consume; a poor selection can recover little more than it costs.</p>

<h2>Step 1: Total the added pressure drop</h2>
<p>List everything that is in the airstream only because recovery is there. On each side this usually includes:</p>
<ul>
<li>The recovery device itself at the actual airflow (not the catalog nominal).</li>
<li>Any filter added to protect the device on the exhaust side.</li>
<li>Bypass dampers in their closed position, and any face damper.</li>
<li>Extra casing length, transitions and turns needed to fit the device, including system effects at fans that now sit close to the device.</li>
<li>For runaround loops, both coils' air side drops.</li>
</ul>
<p>Express each as inches of water column at design airflow. For variable airflow, remember pressure drop through the device varies roughly with the square of velocity for turbulent elements and closer to linearly for laminar flow in wheel flutes, so use the manufacturer's data at each airflow rather than a single exponent.</p>

<h2>Step 2: Convert pressure to fan power</h2>
<p class="formula">Air power (hp) = CFM × ΔP ÷ 6356</p>
<p class="formula">Electrical input (kW) = CFM × ΔP ÷ (6356 × η_system) × 0.746</p>
<p>η_system is the product of fan static efficiency, motor efficiency, drive efficiency (belt or VFD) and any system effect losses. For a modern direct-drive plenum fan array on a VFD, values in the range of 0.50 to 0.65 are common at design; older belt-driven fans can be well below that. Use the actual selection if you have it.</p>
<p class="formula">Annual kWh = kW × hours the device is in the airstream</p>
<p class="note">The device costs fan energy every hour air flows through it, including economizer hours when it is not recovering anything, unless a bypass removes it from the airstream.</p>

<h2>Step 3: Account for fan heat</h2>
<p>Almost all fan power ends up as heat in the airstream. On the supply side, the added fan heat is a small heating benefit in winter and a small cooling penalty in summer. On the exhaust side, it leaves the building. For most comfort systems the effect is small but it is not zero, and it should be counted in a full hourly analysis:</p>
<p class="formula">Fan heat (Btu/h) = kW × 3,412</p>

<h2>Step 4: Compare with recovered energy</h2>
<p>A useful single number is the ratio of recovered thermal energy to the fan energy needed to get it, both in Btu:</p>
<p class="formula">Recovery ratio = Q_recovered ÷ (kW_fan penalty × 3,412)</p>
<p>The ratio changes with outdoor temperature. It is high in deep winter and drops toward zero in mild weather. Below some outdoor temperature difference, the device costs more energy than it saves, and the controls should bypass it or stop the wheel.</p>

<h2>Worked example</h2>
<p>A 20,000 cfm DOAS compares two wheel selections at 20,000 cfm on both sides. Fan system efficiency is 0.60. Return air is 72 F.</p>
<table>
<thead><tr><th>Item</th><th>Wheel A (smaller)</th><th>Wheel B (larger)</th></tr></thead>
<tbody>
<tr><td>Face velocity</td><td>800 fpm</td><td>600 fpm</td></tr>
<tr><td>Pressure drop per side</td><td>1.10 in. w.c.</td><td>0.70 in. w.c.</td></tr>
<tr><td>Sensible effectiveness</td><td>0.72</td><td>0.78</td></tr>
</tbody>
</table>
<p><strong>Fan penalty, Wheel A:</strong> 20,000 × 2.20 ÷ (6,356 × 0.60) × 0.746 = 8.61 kW.</p>
<p><strong>Fan penalty, Wheel B:</strong> 20,000 × 1.40 ÷ (6,356 × 0.60) × 0.746 = 5.48 kW.</p>
<p>At an outdoor temperature of 20 F:</p>
<p>Wheel A recovers 1.08 × 20,000 × 0.72 × 52 = 808,700 Btu/h. Fan penalty is 8.61 × 3,412 = 29,400 Btu/h. Ratio ≈ 27.5.</p>
<p>Wheel B recovers 1.08 × 20,000 × 0.78 × 52 = 876,100 Btu/h. Fan penalty is 18,700 Btu/h. Ratio ≈ 46.8.</p>
<p>At 60 F outdoor, where the ΔT is only 12 F, Wheel A recovers 186,600 Btu/h against the same 29,400 Btu/h of fan heat equivalent, a ratio of about 6.3. That looks fine in Btu, but heat is usually cheaper than electricity. At gas heat costing about a quarter of electric heat per Btu delivered, the breakeven ratio for Wheel A is roughly 4, so it is getting close. The comparison in dollars depends on your rates and is part of <a href="<?= url('guides/heat-recovery-payback-calculation') ?>">calculating energy recovery payback</a>.</p>
<p>Over 6,000 hours of fan operation, the extra kWh for Wheel A is (8.61 − 5.48) × 6,000 ≈ 18,800 kWh per year, and it also recovers less. Wheel B wins on both counts if it fits the casing.</p>

<h2>Part-load operation</h2>
<p>On variable airflow systems, the penalty falls quickly as flow drops, because pressure drop falls with velocity and fan power falls with both. Evaluate the penalty at the airflows the unit actually runs most of the year, not only at design. A selection that looks expensive at full flow may be modest at the typical 60 to 70 percent airflow of a demand-controlled system. Use the manufacturer's pressure drop at each airflow, and keep fan efficiency at the part-load operating point, since it can be lower than at design.</p>

<h2>Reducing the penalty</h2>
<ul>
<li><strong>Lower face velocity.</strong> A larger device has lower pressure drop and higher effectiveness. It usually wins over the life of the unit if the space is available.</li>
<li><strong>Bypass during economizer hours.</strong> A bypass damper removes the device's drop when it is not recovering.</li>
<li><strong>Combine filters.</strong> Where the unit already has an outdoor air filter upstream of the device, an extra prefilter may not be needed.</li>
<li><strong>Use efficient fans.</strong> Higher fan system efficiency shrinks every pressure-related penalty. See <a href="<?= url('guides/fan-static-vs-total-efficiency') ?>">fan static vs total efficiency</a> for which efficiency figure to use.</li>
<li><strong>Check code fan power limits.</strong> Energy codes often give a pressure drop allowance for recovery devices in the fan power limitation, which may constrain the selection.</li>
</ul>
<?php guide_end([
    ['How do you calculate the fan energy penalty of an energy recovery device?', 'Multiply airflow by the added pressure drop on each airstream, divide by 6356 times the fan system efficiency, and multiply by 0.746 to get kilowatts. Multiply by the hours the device is in the airstream for annual kWh.'],
    ['Is a lower pressure drop energy wheel worth the extra size?', 'Often yes. A larger wheel at lower face velocity usually has both lower pressure drop and higher effectiveness, so it saves fan energy and recovers more heat. The limit is casing size and cost.'],
    ['Does an energy wheel use fan energy when it is stopped?', 'Yes. Air still flows through a stopped wheel, so its pressure drop still loads both fans. Only a bypass that routes air around the wheel removes that penalty.'],
]);
