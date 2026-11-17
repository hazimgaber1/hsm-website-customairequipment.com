<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('control-valve-sizing-cv'); ?>
<p class="lede">Size a coil control valve by choosing a design pressure drop across it, calculating the required flow coefficient with Cv = GPM ÷ √(ΔP ÷ SG), and selecting the nearest standard Cv that keeps valve authority at a reasonable level, commonly around 0.5. Too large a valve controls poorly at low load; too small a valve wastes pump head and may not deliver design flow.</p>

<h2>The flow coefficient</h2>
<p>Cv is the flow of water in US gallons per minute that passes through a fully open valve with a pressure drop of 1 psi. For liquids:</p>
<p class="formula">Cv = Q ÷ √(ΔP ÷ SG)</p>
<p>where Q is flow in US gpm, ΔP is pressure drop across the valve in psi, and SG is the fluid's specific gravity (1.0 for water). Rearranged, the pressure drop for a selected valve at design flow is:</p>
<p class="formula">ΔP = SG × (Q ÷ Cv)²</p>
<p>The metric coefficient Kv uses m³/h and bar: Kv ≈ 0.865 × Cv. Pressure in ft of water converts to psi by dividing by 2.31.</p>

<h2>Valve authority</h2>
<p>Valve authority describes how much of the controlled circuit's pressure drop is taken by the valve itself:</p>
<p class="formula">N = ΔPvalve ÷ (ΔPvalve + ΔPcoil and branch)</p>
<p>where both values are at design flow with the valve fully open. When the valve takes a large share, its movement controls flow predictably. When it takes a small share, most of its stroke has little effect and the last few percent near closed does all the controlling, which leads to hunting at low load.</p>
<p>A common design target is an authority of about 0.5, meaning the valve pressure drop roughly equals the coil and branch pressure drop. Many designers accept somewhat lower values, often down to about 0.25 or 0.3, where pump energy is a concern. Very high authority wastes pump head.</p>

<h2>Worked example: chilled water coil</h2>
<p>A chilled water coil needs 40 gpm. The coil water-side pressure drop is 8 ft of water and the branch piping and fittings between the supply and return mains add 2 ft, for 10 ft total. Water, SG 1.0.</p>
<ol>
<li>Coil and branch drop: 10 ÷ 2.31 = 4.33 psi.</li>
<li>Target authority 0.5, so target valve ΔP = 4.33 psi.</li>
<li>Required Cv = 40 ÷ √4.33 = 40 ÷ 2.08 = 19.2.</li>
<li>Standard valve Cv values available near this might include 16 and 25.</li>
</ol>
<table>
<thead><tr><th>Option</th><th>Valve ΔP at 40 gpm</th><th>Authority</th><th>Comment</th></tr></thead>
<tbody>
<tr><td>Cv 16</td><td>(40 ÷ 16)² = 6.25 psi (14.4 ft)</td><td>6.25 ÷ (6.25 + 4.33) = 0.59</td><td>Good control; extra pump head of about 4 ft over target</td></tr>
<tr><td>Cv 25</td><td>(40 ÷ 25)² = 2.56 psi (5.9 ft)</td><td>2.56 ÷ (2.56 + 4.33) = 0.37</td><td>Acceptable; lower pump head, weaker control at low load</td></tr>
</tbody>
</table>
<p>Either can work. The Cv 16 valve gives better low-load control; the Cv 25 valve saves pump energy. Check that the pump has the head for the selected option. Selecting a much larger valve, for example Cv 40, would give a valve ΔP of 1.0 psi and an authority near 0.19, which is likely to hunt.</p>

<h2>Glycol and other fluids</h2>
<p>Glycol solutions have a specific gravity above 1.0 and higher viscosity, which increases pressure drop for the same flow. Use the specific gravity at the operating temperature in the Cv equation. For example, at SG 1.05, the required Cv for the same ΔP rises by √1.05, about 2.5 percent. Coil-side effects of glycol are covered in <a href="<?= url('guides/glycol-coil-derating') ?>">glycol coil derating</a>.</p>

<h2>Characteristic and type</h2>
<ul>
<li><strong>Equal-percentage characteristic</strong> is usual for water coils. A coil's heat transfer rises steeply at low flow and flattens at high flow; equal-percentage valves offset this so the combined valve-plus-coil response is closer to linear.</li>
<li><strong>Linear characteristic</strong> suits applications where flow should be proportional to stroke, such as bypass and some three-way arrangements.</li>
<li><strong>Two-way valves</strong> vary flow in variable-flow systems. <strong>Three-way valves</strong> divert flow around the coil and keep system flow constant; size the coil port by the same method.</li>
<li><strong>Pressure-independent control valves</strong> combine a regulator with the control element, so flow depends only on position regardless of system pressure changes within their range. They are selected by maximum design flow and minimum required differential pressure, rather than by Cv and authority in the traditional sense.</li>
</ul>
<p class="note">Steam valves use different sizing equations, accounting for compressible flow and critical pressure drop. Do not apply the water equation to steam coils.</p>

<h2>Rangeability and minimum controllable flow</h2>
<p>Rangeability is the ratio of maximum to minimum controllable flow. A valve with high rangeability can control smoothly at small fractions of design flow. Oversizing reduces usable rangeability, because the valve spends its whole working life near closed. Check that the minimum load expected, often on mild days, is within the valve's controllable range at the selected Cv.</p>

<h2>Checklist for each coil valve</h2>
<ul>
<li>Design flow and fluid properties confirmed.</li>
<li>Coil and branch pressure drop at design flow known.</li>
<li>Valve Cv selected with authority in an acceptable range.</li>
<li>Pump head includes the selected valve's pressure drop.</li>
<li>Close-off rating of valve and actuator exceeds maximum system differential pressure.</li>
<li>Characteristic suits the coil.</li>
<li>Actuator fail position defined (for example, heating valves fail open to the coil for freeze protection where required).</li>
</ul>
<p>Valve size problems often show up as hunting control loops; see <a href="<?= url('guides/hunting-control-loops-troubleshooting') ?>">troubleshooting hunting control loops</a>. Damper actuators are sized differently, by torque, in <a href="<?= url('guides/damper-actuator-sizing') ?>">sizing damper actuators by torque</a>.</p>
<?php guide_end([
    ['How do I calculate the Cv of a control valve?', 'Divide design flow in gallons per minute by the square root of the chosen valve pressure drop in psi divided by specific gravity. For water, a 40 gpm coil with a 4 psi valve drop needs a Cv of about 20.'],
    ['What valve authority should I design for?', 'An authority of about 0.5, with the valve pressure drop roughly equal to the coil and branch drop, is a common target. Lower values down to about 0.25 to 0.3 are often accepted to save pump energy, at some cost to low-load control.'],
    ['Why does an oversized control valve hunt?', 'An oversized valve operates near closed at most loads, where a tiny movement causes a large change in flow. The effective loop gain is very high, so the controller overshoots and oscillates.'],
]);
