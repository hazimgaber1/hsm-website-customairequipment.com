<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('coil-tube-velocity-water-pressure-drop'); ?>
<p class="lede">Water velocity inside coil tubes decides whether flow is turbulent, which sets the water-side heat transfer coefficient, and it also drives water pressure drop roughly with velocity squared. Most designers target about 2 to 6 ft/s (0.6 to 1.8 m/s) at design flow and check that velocity does not fall into the laminar range at part load.</p>

<h2>Why tube velocity matters</h2>
<p>Heat moving from water to air passes through three resistances in series: the water-side film inside the tube, the tube and fin metal, and the air-side film on the fins. In a well-designed coil the air side is the largest resistance, but the water side is not negligible. In turbulent flow, eddies constantly bring fresh water against the tube wall and the inside film coefficient is high. In laminar flow, a slow-moving layer of water insulates the wall, and the inside coefficient can fall by a large factor. A coil that is quite capable at design flow can lose a large share of its capacity, and its delta-T, once flow drops into the laminar or transitional range.</p>

<h2>Calculating tube velocity</h2>
<p>Velocity depends on the flow in each circuit and the tube's inside diameter:</p>
<p class="formula">GPM per circuit = total GPM ÷ number of circuits (feeds)</p>
<p class="formula">V (ft/s) = 0.4085 × GPM per circuit ÷ ID² (ID in inches)</p>
<p>Common tube sizes in AHU coils are 5/8 in (16 mm) and 1/2 in (12.7 mm) outside diameter, with 3/8 in (9.5 mm) increasingly used for high-efficiency coils. For a 5/8 in tube with 0.020 in wall, the inside diameter is 0.585 in, so V ≈ 1.19 ft/s per GPM in each circuit.</p>

<h2>Checking for turbulence with Reynolds number</h2>
<p class="formula">Re = V × ID ÷ ν</p>
<p>with ID in feet and ν the kinematic viscosity of water, about 1.5 × 10⁻⁵ ft²/s at chilled water temperatures (45°F, 7°C) and about 0.4 × 10⁻⁵ ft²/s near 180°F (82°C). Flow is reliably turbulent above roughly Re = 4,000; it is laminar below about 2,300 and unpredictable in between.</p>
<p>For a 5/8 in tube (ID 0.0488 ft) with chilled water:</p>
<table>
<thead><tr><th>Tube velocity</th><th>Reynolds number</th><th>Regime</th></tr></thead>
<tbody>
<tr><td>1.0 ft/s (0.3 m/s)</td><td>about 3,300</td><td>Transitional</td></tr>
<tr><td>2.0 ft/s (0.6 m/s)</td><td>about 6,500</td><td>Turbulent</td></tr>
<tr><td>4.0 ft/s (1.2 m/s)</td><td>about 13,000</td><td>Turbulent</td></tr>
</tbody>
</table>
<p>Hot water has much lower viscosity, so the same velocity gives a Reynolds number three or four times higher. Laminar flow is therefore mainly a chilled water and glycol concern. That viscosity effect is why glycol is handled separately in <a href="<?= url('guides/glycol-coil-derating') ?>">glycol coil derating</a>; this guide covers plain water.</p>

<h2>Calculating water pressure drop</h2>
<p>Water-side pressure drop is friction along the tubes plus losses in return bends, headers and connections. The Darcy-Weisbach equation gives the tube friction:</p>
<p class="formula">h(friction) = f × (L ÷ ID) × V² ÷ (2g)</p>
<p class="formula">h(bends) = K × number of bends × V² ÷ (2g)</p>
<p>where h is in feet of water, L is the circuit length in feet, g is 32.2 ft/s², f is the friction factor and K is the loss coefficient per return bend (roughly 0.5 to 1.0 for tight coil bends). For smooth copper tubes in turbulent flow, the Blasius approximation f ≈ 0.316 ÷ Re^0.25 is adequate for an estimate.</p>

<h2>Worked example</h2>
<p>A chilled water coil carries 40 GPM through 16 circuits of 5/8 in tube. Each circuit makes 8 passes through a coil 8 ft long, so L = 64 ft with 7 return bends.</p>
<p class="formula">GPM per circuit = 40 ÷ 16 = 2.5</p>
<p class="formula">V = 0.4085 × 2.5 ÷ 0.585² = 2.98 ft/s</p>
<p class="formula">Re = 2.98 × 0.0488 ÷ 1.5 × 10⁻⁵ ≈ 9,700 (turbulent)</p>
<p class="formula">f ≈ 0.316 ÷ 9,700^0.25 ≈ 0.032</p>
<p class="formula">V² ÷ 2g = 2.98² ÷ 64.4 = 0.138 ft</p>
<p class="formula">h(friction) = 0.032 × (64 ÷ 0.0488) × 0.138 ≈ 5.8 ft</p>
<p class="formula">h(bends) = 0.8 × 7 × 0.138 ≈ 0.8 ft</p>
<p>Adding about 1 ft for headers and connections, the coil's water pressure drop is roughly 7.6 ft w.c. (23 kPa). The manufacturer's rating will differ somewhat, but the estimate tells you the selection is in a sensible range.</p>
<p>Now suppose a value engineering change halves the circuits to 8 to save header cost. Velocity doubles to about 6 ft/s, and pressure drop rises by roughly 2^1.75 ≈ 3.4 times for friction, to well over 20 ft w.c. once bends are included. That is enough to change the pump selection.</p>

<h2>Part-load check</h2>
<p>Under two-way valve control, coil flow falls with load. Run the same calculation at the lowest expected flow. In the example, at 25% flow (10 GPM), velocity is 0.75 ft/s and Re ≈ 2,400, right at the edge of laminar flow. Capacity per unit flow drops, leaving water temperature falls toward the supply temperature, and the coil starts returning cold water. That mechanism feeds the low delta-T problem diagnosed in <a href="<?= url('guides/low-delta-t-chilled-water-coils') ?>">troubleshooting low delta-T</a>.</p>
<p>Coil manufacturers address this with circuit choices: fewer, longer circuits keep velocity higher at low flow, at the cost of higher design pressure drop. Turbulators or internally enhanced (rifled) tubes raise the inside coefficient at lower velocities.</p>

<h2>Upper limits</h2>
<ul>
<li><strong>Erosion.</strong> Copper tube erosion becomes a concern at sustained high velocities, particularly with entrained air, debris or hot water. Many designers keep design velocity below about 6 ft/s (1.8 m/s) for chilled water and lower for hot water above 140°F (60°C).</li>
<li><strong>Noise.</strong> High velocity through valves and headers can be audible in quiet spaces.</li>
<li><strong>Pump energy.</strong> Pressure drop rises with roughly the square of velocity, so the last increment of velocity is expensive.</li>
</ul>
<p>Coil connection orientation affects which end the velocity is highest and how well the coil vents; see <a href="<?= url('guides/coil-connection-counterflow-piping') ?>">coil connections for counterflow</a>.</p>
<?php guide_end([
    ['What is the recommended water velocity in coil tubes?', 'Most designers target roughly 2 to 6 ft/s at design flow. Below about 2 ft/s chilled water flow can become transitional or laminar and lose heat transfer; above about 6 ft/s pressure drop climbs steeply and erosion becomes a concern.'],
    ['How do I calculate coil tube velocity?', 'Divide the total flow by the number of circuits to get GPM per circuit, then multiply by 0.4085 and divide by the tube inside diameter in inches squared. A 5/8 inch tube with a 0.585 inch inside diameter gives about 1.19 ft/s per GPM.'],
    ['Why does laminar flow reduce coil capacity?', 'In laminar flow a slow layer of water stays against the tube wall and acts as insulation, lowering the water-side heat transfer coefficient sharply. The coil then transfers less heat per gallon, which lowers capacity and can reduce delta-T.'],
]);
