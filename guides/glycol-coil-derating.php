<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('glycol-coil-derating'); ?>
<p class="lede">Glycol solutions carry less heat per gallon than water and are more viscous, so a coil running on glycol needs more flow for the same load, delivers less capacity at the same flow, and has a higher water-side pressure drop. Replace the familiar 500 factor with one based on the solution's density and specific heat, then let the coil rating program account for the lower inside heat transfer coefficient.</p>

<h2>The properties that change</h2>
<p>Ethylene glycol (EG) and propylene glycol (PG) solutions differ from water in three ways that matter to a coil:</p>
<ul>
<li><strong>Specific heat</strong> is lower. Each pound of solution carries less heat per degree.</li>
<li><strong>Density</strong> is slightly higher, which partly offsets the lower specific heat on a per-gallon basis.</li>
<li><strong>Viscosity</strong> is much higher, especially at chilled water temperatures. Higher viscosity lowers the Reynolds number, which lowers the inside heat transfer coefficient and raises friction.</li>
</ul>
<p>Propylene glycol is more viscous than ethylene glycol at the same concentration and has a slightly higher specific heat. PG is often preferred for lower toxicity; EG gives better thermal performance. The choice of concentration and type for freeze protection is a separate decision covered in <a href="<?= url('guides/coil-freeze-protection-methods') ?>">coil freeze protection methods</a>.</p>

<h2>Representative properties</h2>
<p>The values below are rounded and representative for about 40°F (4°C). Use the glycol supplier's published data at the actual operating temperature for design.</p>
<table>
<thead><tr><th>Fluid</th><th>Specific gravity</th><th>Specific heat (Btu/lb·°F)</th><th>Flow factor (replaces 500)</th><th>Viscosity relative to water</th></tr></thead>
<tbody>
<tr><td>Water</td><td>1.00</td><td>1.00</td><td>500</td><td>1.0</td></tr>
<tr><td>30% ethylene glycol</td><td>1.04</td><td>0.87</td><td>about 450</td><td>about 2</td></tr>
<tr><td>30% propylene glycol</td><td>1.03</td><td>0.92</td><td>about 475</td><td>about 3</td></tr>
<tr><td>50% propylene glycol</td><td>1.05</td><td>0.83</td><td>about 435</td><td>about 6 or more</td></tr>
</tbody>
</table>
<p>The flow factor is 8.33 lb/gal × specific gravity × 60 min/h × specific heat:</p>
<p class="formula">Flow factor = 500 × SG × cp</p>
<p class="formula">GPM = Q ÷ (flow factor × ΔT)</p>

<h2>Worked example: chilled water coil switched to 30% propylene glycol</h2>
<p>A coil is rated on water for 480,000 Btu/h with a 14°F rise:</p>
<p class="formula">Water GPM = 480,000 ÷ (500 × 14) = 68.6 GPM</p>
<p>Holding the same load and rise on 30% PG:</p>
<p class="formula">Flow factor = 500 × 1.03 × 0.92 ≈ 474</p>
<p class="formula">Glycol GPM = 480,000 ÷ (474 × 14) ≈ 72.3 GPM</p>
<p>Flow increases about 5% just to carry the same heat. That is the simple part. The coil itself also loses capacity because the inside coefficient drops. If the same coil is held at 72 GPM and the same entering conditions, a rating program might show capacity several percent to more than ten percent lower than on water, depending on how close the water side was to the laminar range. The loss is larger at lower temperatures, higher concentrations and lower tube velocities.</p>
<p>To restore the 480,000 Btu/h, the selection usually needs one of: an additional row, colder supply fluid, more flow (with more pressure drop), or more circuits arranged to keep the tube Reynolds number up.</p>

<h2>Estimating the pressure drop increase</h2>
<p>Pressure drop rises for two reasons: more flow and higher friction from viscosity. For turbulent flow in smooth tubes, friction factor varies roughly with Reynolds number to the −0.25 power, so friction head scales approximately as:</p>
<p class="formula">h ∝ ρ^0.75 × μ^0.25 × Q^1.75</p>
<p>Taking the example above, with viscosity about 3 times water and density 1.03:</p>
<p class="formula">Ratio ≈ (1.03)^0.75 × (3)^0.25 × (72.3 ÷ 68.6)^1.75 ≈ 1.02 × 1.32 × 1.10 ≈ 1.48</p>
<p>So a coil with 10 ft w.c. drop on water could be near 15 ft w.c. on 30% PG. If the reduced Reynolds number drops the flow into the transitional range, the turbulent correlation no longer holds and the actual increase can be different; that is a sign the circuiting needs to change. The underlying velocity and friction calculation for water is explained in <a href="<?= url('guides/coil-tube-velocity-water-pressure-drop') ?>">coil tube velocity and water pressure drop</a>.</p>
<p class="note">Heating coils feel glycol less than chilled water coils. At 140 to 180°F (60 to 82°C), glycol viscosity drops sharply, the flow stays turbulent and the penalty is mostly the lower specific heat. Preheat coils running warm glycol typically show a much smaller derate than the chilled water example here.</p>

<h2>Step-by-step derating procedure</h2>
<ol>
<li>Obtain specific gravity, specific heat and viscosity for the actual glycol type and concentration at the coil's average fluid temperature.</li>
<li>Calculate the flow factor and the flow required for the design load and ΔT.</li>
<li>Run the coil selection with the glycol fluid specified, not a water selection with a manual correction, so the program recalculates the inside coefficient.</li>
<li>Check tube Reynolds number or velocity at both design and minimum flow.</li>
<li>Compare capacity, fluid pressure drop and leaving temperatures against the water-based selection, and adjust rows or circuits if needed.</li>
<li>Carry the glycol pressure drop into the pump head calculation, and confirm the control valve is sized for the glycol flow and properties.</li>
</ol>

<h2>Things that go wrong</h2>
<ul>
<li><strong>Selecting on water and adding glycol later.</strong> The coil falls short of capacity and the pump falls short of flow at the same time.</li>
<li><strong>Using a single derate percentage for all coils.</strong> The penalty differs between heating and cooling coils and with tube velocity.</li>
<li><strong>Over-concentrating.</strong> Using 50% glycol where 30% would provide the required protection adds viscosity penalty for no benefit.</li>
<li><strong>Ignoring AHRI scope.</strong> Check that glycol selections are within the certified rating scope; see <a href="<?= url('guides/ahri-410-coil-ratings') ?>">AHRI 410 coil ratings</a>.</li>
</ul>
<?php guide_end([
    ['How much capacity does a coil lose with glycol?', 'It depends on glycol type, concentration, temperature and tube velocity. A chilled water coil on 30 percent propylene glycol may lose several percent to more than ten percent at the same flow, while a hot water heating coil usually loses less because glycol viscosity falls at high temperature.'],
    ['What replaces the 500 factor for glycol?', 'Multiply 500 by the solution\'s specific gravity and specific heat. For 30 percent propylene glycol near 40 F that is roughly 475, and for 30 percent ethylene glycol roughly 450. Use the supplier\'s property data at the actual temperature.'],
    ['Why does glycol increase coil pressure drop?', 'Glycol is more viscous than water and the coil needs more flow to carry the same heat. Both raise friction in the tubes. A 30 percent propylene glycol chilled water coil can easily see 40 to 50 percent more fluid pressure drop than on water.'],
]);
