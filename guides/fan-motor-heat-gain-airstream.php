<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-motor-heat-gain-airstream'); ?>
<p class="lede">Fan heat gain is the fan's brake horsepower converted to Btu/h (× 2,545), divided by 1.08 × CFM to give a temperature rise. If the motor sits in the airstream, use motor input power instead of shaft power, which adds the motor's losses. A 5 in. w.c. fan at 65% efficiency raises air temperature by about 2.9°F (1.6 K), or a little over 3°F with the motor inside.</p>

<h2>Where fan energy goes</h2>
<p>A fan puts mechanical energy into air as pressure and velocity. As that air flows through filters, coils, ducts and diffusers, the pressure is lost to friction and turbulence, and all of it turns into heat. None of the fan's shaft power leaves the system as anything else. Some heat appears immediately in the fan section from wheel inefficiency; the rest appears progressively downstream as pressure is dissipated. For design purposes, it is standard to assign all of it to the airstream at the fan.</p>
<p>The motor adds its own losses, typically 4% to 10% of its input for premium-efficiency motors at full load. Where those losses go depends on where the motor sits:</p>
<ul>
<li><strong>Motor in the airstream</strong> (plenum fans, fan arrays, most direct-drive fans in AHUs): motor losses also heat the supply air.</li>
<li><strong>Motor outside the airstream</strong> (some belt-driven housed fans with the motor outside the casing): motor losses heat the mechanical room, not the air.</li>
</ul>
<p>Variable frequency drive losses are usually released wherever the drive is mounted, which is often outside the airstream.</p>

<h2>The formulas</h2>
<p class="formula">BHP = CFM × TSP ÷ (6356 × ηfan)</p>
<p class="formula">Q fan (Btu/h) = BHP × 2,545</p>
<p class="formula">ΔT (°F) = Q ÷ (1.08 × CFM)</p>
<p>Combining them and cancelling CFM gives a convenient shortcut for the shaft-power case at standard air:</p>
<p class="formula">ΔT (°F) ≈ 0.371 × TSP (in. w.c.) ÷ ηfan</p>
<p>With the motor in the airstream, divide again by motor efficiency:</p>
<p class="formula">ΔT (°F) ≈ 0.371 × TSP ÷ (ηfan × ηmotor)</p>
<p>Use the fan's total or static efficiency consistently with the pressure you use: static efficiency with total static pressure, total efficiency with total pressure. For AHU work, static efficiency and TSP are the usual pair.</p>

<h2>Worked example</h2>
<p>A supply fan array delivers 20,000 cfm at 5.0 in. w.c. TSP. The selected fans have a static efficiency of 65% at the design point, and the motors are 93% efficient and mounted in the airstream.</p>
<ol>
<li>Shaft power: BHP = 20,000 × 5.0 ÷ (6356 × 0.65) = 100,000 ÷ 4,131 = 24.2 bhp.</li>
<li>Motor input: 24.2 ÷ 0.93 = 26.0 hp, or about 19.4 kW.</li>
<li>Heat into air: 26.0 × 2,545 = 66,200 Btu/h.</li>
<li>Temperature rise: 66,200 ÷ (1.08 × 20,000) = 3.06°F (1.7 K).</li>
</ol>
<p>Check with the shortcut: 0.371 × 5.0 ÷ (0.65 × 0.93) = 3.07°F. If the motor were outside the airstream, the rise would be 0.371 × 5.0 ÷ 0.65 = 2.85°F.</p>
<p class="note">In SI, the temperature rise is simply power into the air in watts divided by (1.2 × L/s). For the example, 19,400 W ÷ (1.2 × 9,440) = 1.7 K.</p>

<h2>Effect of efficiency and pressure</h2>
<p>The table shows temperature rise from the shortcut for a motor in the airstream at 93% efficiency.</p>
<table>
<thead><tr><th>TSP (in. w.c.)</th><th>Fan η 55%</th><th>Fan η 65%</th><th>Fan η 75%</th></tr></thead>
<tbody>
<tr><td>2.0</td><td>1.4°F</td><td>1.2°F</td><td>1.1°F</td></tr>
<tr><td>4.0</td><td>2.9°F</td><td>2.5°F</td><td>2.1°F</td></tr>
<tr><td>6.0</td><td>4.3°F</td><td>3.7°F</td><td>3.2°F</td></tr>
<tr><td>8.0</td><td>5.8°F</td><td>4.9°F</td><td>4.3°F</td></tr>
</tbody>
</table>
<p>The rise is independent of airflow: it depends only on pressure and efficiency. That is why high-pressure units such as hospital air handlers with HEPA filters and energy recovery can see several degrees of fan heat regardless of size.</p>

<h2>Using the result</h2>
<h3>Supply temperature</h3>
<p>In a draw-through unit, the cooling coil must leave colder than the supply setpoint by the fan temperature rise. If the scheduled supply is 55°F and the rise is 3°F, the coil must deliver 52°F. Missing this step is a common reason new units fail to meet supply temperature. Whether the heat lands before or after the coil is the subject of <a href="<?= url('guides/draw-through-vs-blow-through-fan-arrangement') ?>">draw-through vs blow-through</a>.</p>
<h3>Cooling load</h3>
<p>Fan heat is a load on the cooling plant whether it lands before or after the coil. Include it in coil and chiller sizing: 66,200 Btu/h in the example is about 5.5 tons.</p>
<h3>Return fans</h3>
<p>Return fan heat warms the return air and therefore the mixed air. It is part of the coil entering condition in cooling and offsets some heating in winter.</p>
<h3>Part load</h3>
<p>At reduced VAV airflow, both pressure and BHP fall, and so does the temperature rise in proportion to TSP and efficiency at the new point. Since efficiency can drop at part load and motor efficiency falls at light load, check the rise at typical operating points if supply temperature control is tight; motor part-load behaviour is covered in <a href="<?= url('guides/motor-part-load-efficiency') ?>">motor part-load efficiency</a>.</p>
<h2>Second example: a high-pressure hospital unit</h2>
<p>A 100% outdoor air hospital unit delivers 30,000 cfm at 8.0 in. w.c. TSP, with HEPA final filters and an energy recovery device. The fan array selection shows 62% static efficiency, and the motors are 94% efficient and in the airstream.</p>
<ol>
<li>BHP = 30,000 × 8.0 ÷ (6356 × 0.62) = 60.9 bhp.</li>
<li>Motor input = 60.9 ÷ 0.94 = 64.8 hp, about 48.3 kW.</li>
<li>Heat = 64.8 × 2,545 = 164,900 Btu/h, about 13.7 tons.</li>
<li>Rise = 164,900 ÷ (1.08 × 30,000) = 5.1°F (2.8 K).</li>
</ol>
<p>To deliver 55°F supply, the cooling coil must leave at about 50°F, which may require colder chilled water than the plant normally provides. Catching this at design avoids a coil that cannot meet setpoint.</p>
<h2>Where people go wrong</h2>
<p>The most frequent error is pairing a total efficiency with a static pressure, or the reverse, which shifts the result by several percent. The second is forgetting that a plenum fan or fan array almost always has its motor in the airstream, so motor losses count. The third is using nameplate motor horsepower instead of the actual brake horsepower at the duty point; a 30 hp motor running at 24 bhp does not add 30 hp of heat. Finally, remember that drive losses only enter the airstream if the drive is mounted inside the casing, which is uncommon but does occur on some compact units.</p>
<?php guide_end([
    ['How much does fan heat raise supply air temperature?', 'Roughly 0.37 F per inch of water column of total static pressure divided by fan efficiency, plus a little more if the motor is in the airstream. A 5 in. w.c. fan at 65% efficiency adds about 2.9 F, or about 3.1 F with a 93% efficient motor in the airstream.'],
    ['Does motor heat go into the airstream?', 'Only if the motor is inside the air path, as with plenum fans, fan arrays and many direct-drive fans. If the motor is outside the casing, its losses heat the mechanical room instead.'],
    ['Does fan heat depend on airflow?', 'The temperature rise does not. It depends on pressure and efficiency. The total heat in Btu per hour does scale with airflow, so larger units add more load to the cooling plant.'],
]);
