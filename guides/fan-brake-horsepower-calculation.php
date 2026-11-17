<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-brake-horsepower-calculation'); ?>
<p class="lede">Fan brake horsepower is the power required at the fan shaft: airflow times pressure, divided by 6356 and by fan efficiency. Use static pressure with static efficiency (or total with total), and make sure the pressure and the efficiency are both at the actual air density the fan will see.</p>

<h2>The brake horsepower equation</h2>
<p class="formula">BHP = CFM × P ÷ (6356 × η)</p>
<p>CFM is the actual volumetric airflow through the fan. P is fan pressure in in. w.c. η is fan efficiency as a decimal, on the same basis as P: static efficiency with static pressure, total efficiency with total pressure. The constant 6356 converts cfm × in. w.c. into horsepower.</p>
<p>The SI form is simpler because the units are coherent:</p>
<p class="formula">Shaft power (kW) = Q (m³/s) × P (Pa) ÷ (1000 × η)</p>
<p>The numerator without η is air horsepower, the power actually delivered to the air. Brake horsepower is always larger, because no fan is 100% efficient. Brake horsepower is measured at the fan shaft; it does not include belt, motor or drive losses.</p>

<h2>Worked example at standard conditions</h2>
<p>A supply fan must deliver 25,000 cfm (11,800 L/s) at 4.0 in. w.c. (1,000 Pa) total static pressure. The selected plenum fan has a static efficiency of 70% at that point.</p>
<ol>
<li>Air horsepower: 25,000 × 4.0 ÷ 6,356 = 15.73 hp.</li>
<li>Brake horsepower: 15.73 ÷ 0.70 = <strong>22.5 bhp</strong>.</li>
<li>SI check: 11.8 m³/s × 1,000 Pa ÷ (1000 × 0.70) = 16.9 kW, and 16.9 ÷ 0.746 = 22.6 hp. The small difference is rounding in the unit conversions.</li>
</ol>

<h2>Density corrections</h2>
<p>Fan curves and catalog tables are almost always published at standard air: 0.075 lb/ft³ (1.2 kg/m³), which corresponds to 70°F at sea level. A fan running at the same speed moves the same cfm in lighter or denser air, but its pressure and power change in direct proportion to density.</p>
<p class="formula">Density ratio DR = ρ(actual) ÷ 0.075</p>
<p class="formula">BHP(actual) = BHP(standard) × DR</p>
<p>The trap is selecting from standard-air curves using the actual system pressure. If the system pressure was calculated at actual conditions, it must be converted to an equivalent standard pressure before entering the standard curve:</p>
<p class="formula">P(standard) = P(actual) ÷ DR</p>
<h3>Example: unit at 5,000 ft elevation</h3>
<p>The same 25,000 cfm, 4.0 in. w.c. duty is installed at about 5,000 ft (1,520 m) elevation, with air at 70°F. The density ratio at that elevation is approximately 0.83, so ρ ≈ 0.062 lb/ft³.</p>
<ol>
<li>Standard-equivalent pressure: 4.0 ÷ 0.83 = 4.82 in. w.c. Select the fan from its standard curve at 25,000 cfm and 4.82 in. w.c.</li>
<li>Suppose the efficiency at that point is still 70%. Standard-air bhp: 25,000 × 4.82 ÷ (6,356 × 0.70) = 27.1 bhp.</li>
<li>Actual bhp: 27.1 × 0.83 = <strong>22.5 bhp</strong>.</li>
</ol>
<p>Shaft power at altitude is the same as at sea level for the same actual pressure, because pressure and density cancel. What changes is the speed: the fan must turn faster to make 4.0 in. w.c. in thinner air. Selecting at 4.0 in. w.c. on the standard curve would leave the fan too slow and airflow short.</p>

<h3>Example: cold air at startup</h3>
<p>A 100% outdoor air unit draws −20°F (−29°C) air at sea level before the preheat coil. Density ratio ≈ (460 + 70) ÷ (460 − 20) = 530 ÷ 440 = 1.20. If the fan sits upstream of preheat and runs at its design speed, its power rises 20% above the standard-air value. For the fan above, that is 22.5 × 1.20 = 27.0 bhp. The motor consequences of that cold-air case are handled in <a href="<?= url('guides/motor-sizing-service-factor') ?>">sizing fan motors</a>. The detailed density method, including humidity and elevated temperature, is in <a href="<?= url('guides/fan-density-correction') ?>">fan density correction</a>.</p>

<h2>Which pressure to use</h2>
<p>For a supply fan in a custom AHU, the pressure in the equation is the fan's total static pressure: internal losses through the unit (filters, coils, dampers, attenuators, system effect allowances) plus external static pressure in the ductwork. Be explicit about filter condition. Many designers use mid-life or final filter pressure drop so the fan can hold airflow as filters load. The basis should be stated on the schedule. Building up that number is covered in <a href="<?= url('guides/total-static-pressure-budget') ?>">total static pressure budget</a>.</p>
<p class="note">For a fan array, run the equation on the whole array with the total airflow, or per fan with the airflow per running fan. Both give the same total air horsepower; per-fan bhp is what sizes each motor.</p>

<h2>Checking a field measurement</h2>
<p>The equation can be turned around to estimate efficiency from field data: η = CFM × P ÷ (6356 × BHP). Field brake horsepower is usually estimated from drive output power or measured motor input power multiplied by motor efficiency, which introduces uncertainty. Even so, an implied efficiency far above the catalog value usually means the airflow or pressure reading is wrong, and one far below suggests installation losses or a fan problem.</p>

<h2>From brake horsepower to electrical demand</h2>
<p>Brake horsepower is a mechanical quantity, but the utility bill and the electrical design both depend on input power. To estimate it, divide shaft power by the efficiency of every component between the wire and the wheel: belt drive (if any), motor and VFD or EC electronics. Those efficiencies change with load and speed, so a single full-load value only works at the design point. The part-load method for motors and drives is set out in its own calculation guide; for fan selection, the important habit is to keep shaft power and input power clearly labelled so they are never compared with each other.</p>

<h2>Common errors</h2>
<ul>
<li>Mixing total pressure with static efficiency, or the reverse.</li>
<li>Using standard-air curves at actual-condition pressure.</li>
<li>Using peak catalog efficiency instead of efficiency at the actual operating point.</li>
<li>Forgetting that brake horsepower excludes belt and motor losses when estimating electrical demand.</li>
<li>Ignoring the cold-air case for fans upstream of heating.</li>
</ul>
<?php guide_end([
    ['What is the formula for fan brake horsepower?', 'BHP equals cfm times pressure in inches of water, divided by 6356 times fan efficiency. Use static pressure with static efficiency or total pressure with total efficiency.'],
    ['What is the 6356 constant?', 'It converts the product of cubic feet per minute and inches of water column into horsepower, based on the weight of water and the definition of one horsepower.'],
    ['Does altitude change fan horsepower?', 'At the same speed, a fan in thinner air develops less pressure and needs less power in proportion to density. To deliver the same actual pressure, it must run faster, and shaft power ends up about the same.'],
    ['Does brake horsepower include motor losses?', 'No. Brake horsepower is the power at the fan shaft. Belt, motor and drive losses must be added to estimate electrical input power.'],
]);
