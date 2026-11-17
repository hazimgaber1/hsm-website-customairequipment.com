<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('casing-leakage-energy-cost'); ?>
<p class="lede">To cost casing leakage, convert the rated leakage at its test pressure to leakage at the actual operating pressure, then price two penalties: the extra fan power to move air that never reaches the building, and the heating and cooling energy carried away by conditioned air that escapes. For a typical 20,000 cfm unit, the difference between a loose and a tight casing can be several hundred dollars a year.</p>

<h2>Step 1: convert test leakage to operating leakage</h2>
<p>Casing leakage is rated or tested at a specified pressure, often higher than the pressure the casing sees in daily operation. Leakage through cracks and joints rises with pressure to roughly the 0.65 power, the same relationship used for duct leakage classes:</p>
<p class="formula">Q operating = Q test × (P operating ÷ P test)^0.65</p>
<p>If the leakage is stated as a class tied to casing area:</p>
<p class="formula">Q (cfm) = CL × P^0.65 × (casing area in ft² ÷ 100)</p>
<p>Use the average operating pressure magnitude of the casing sections, positive and negative separately if they differ much. The section pressures come from the profile described in <a href="<?= url('guides/casing-pressure-class-positive-negative') ?>">casing pressure ratings</a>.</p>

<h3>Example</h3>
<p>Two candidate units, each 20,000 cfm, tested at 6 in. w.c.:</p>
<ul>
<li>Unit A: leakage 2% of design airflow at test = 400 cfm.</li>
<li>Unit B: leakage 0.5% at test = 100 cfm.</li>
</ul>
<p>Average operating pressure across the casing is about 2.5 in. w.c. Correction factor: (2.5 ÷ 6)^0.65 = 0.566.</p>
<ul>
<li>Unit A operating leakage: 400 × 0.566 = 226 cfm.</li>
<li>Unit B operating leakage: 100 × 0.566 = 57 cfm.</li>
<li>Difference: about 170 cfm.</li>
</ul>

<h2>Step 2: fan energy penalty</h2>
<p>On positive-pressure sections, leaked air has been through the fan and must be replaced to keep delivering design airflow to the ducts. On negative sections, leaked-in air also passes through the fan. Either way, the fan moves more air than the building receives. The extra power is approximately:</p>
<p class="formula">Extra BHP = ΔQ × TSP ÷ (6356 × ηfan)</p>
<p>With TSP 5.0 in. w.c. and fan static efficiency 60%: 170 × 5.0 ÷ (6356 × 0.60) = 0.223 bhp. With a 93% efficient motor, input power is 0.223 × 0.746 ÷ 0.93 = 0.179 kW.</p>
<p>At 6,000 operating hours a year: 0.179 × 6,000 = 1,070 kWh. At $0.12/kWh, about $130 a year.</p>
<p class="note">This is approximate. Leakage at the fan inlet carries less pressure penalty than leakage at the discharge, and a VAV fan at part load moves less air through the same cracks. Averaged over the year, the simplification is reasonable for comparing casings.</p>

<h2>Step 3: thermal energy penalty</h2>
<p>Where leaked air goes determines whether it is lost energy:</p>
<ul>
<li><strong>Outdoor unit, positive section:</strong> conditioned supply air escapes outdoors. Full loss.</li>
<li><strong>Indoor unit in an unconditioned mechanical room:</strong> conditioned air leaks into a room that is vented or partly outdoors. Large share lost.</li>
<li><strong>Indoor unit in a conditioned room within the envelope:</strong> leaked air mostly stays in the building. Small thermal loss, though it may cause other problems.</li>
<li><strong>Negative sections downstream of filters or coils:</strong> mechanical room or outdoor air drawn in bypasses filters and adds load.</li>
</ul>
<p>For an outdoor unit, estimate the cooling and heating loss on the leakage difference:</p>
<p class="formula">Cooling (Btu) = 4.5 × ΔQ × Δh avg × cooling hours</p>
<p class="formula">Heating (Btu) = 1.08 × ΔQ × ΔT avg × heating hours</p>
<p>Assumptions for illustration: 1,500 cooling hours with an average enthalpy difference of 8 Btu/lb between outdoor and supply air; 3,000 heating hours with an average temperature difference of 30°F; plant efficiency 1.0 kW/ton for cooling; 90% efficient boiler with gas at $10 per MMBtu.</p>
<ol>
<li>Cooling: 4.5 × 170 × 8 × 1,500 = 9.2 MMBtu, or 765 ton-hours, about 765 kWh. At $0.12/kWh: about $90.</li>
<li>Heating: 1.08 × 170 × 30 × 3,000 = 16.5 MMBtu; ÷ 0.90 = 18.4 MMBtu of gas. At $10/MMBtu: about $185.</li>
</ol>
<p>Climate drives these numbers more than anything else; use bin data or an energy model for the actual location when the decision is close.</p>

<h2>Step 4: total and life-cycle view</h2>
<table>
<thead><tr><th>Penalty for the 170 cfm difference</th><th>Annual energy</th><th>Annual cost</th></tr></thead>
<tbody>
<tr><td>Fan</td><td>1,070 kWh</td><td>$130</td></tr>
<tr><td>Cooling</td><td>765 kWh</td><td>$90</td></tr>
<tr><td>Heating</td><td>18.4 MMBtu gas</td><td>$185</td></tr>
<tr><td><strong>Total</strong></td><td></td><td><strong>about $405</strong></td></tr>
</tbody>
</table>
<p>Over a 25-year life, without escalation or discounting, that is roughly $10,000 for one unit, before counting the capacity effect: the fan, coils and plant must also be sized for the extra air. A proper comparison discounts future costs and escalates energy prices; the method is in <a href="<?= url('guides/ahu-life-cycle-cost-analysis') ?>">AHU life-cycle cost analysis</a>.</p>

<h2>Costs that do not show on the energy bill</h2>
<ul>
<li><strong>Filter bypass:</strong> leakage into negative sections downstream of the final filter brings unfiltered air into the supply. In healthcare and cleanroom units this can matter more than energy.</li>
<li><strong>Pressure control:</strong> leakage makes it harder to hold room pressure relationships in labs and hospitals.</li>
<li><strong>Moisture:</strong> warm, humid air leaking into cold casing joints condenses inside panels.</li>
<li><strong>Noise:</strong> leaks at doors and panels whistle at high pressure.</li>
<li><strong>Energy code compliance:</strong> leakage adds to fan power, which counts against fan power limits.</li>
</ul>
<p>Specifying a leakage class and verifying it are covered in <a href="<?= url('guides/ahri-1350-casing-performance-spec') ?>">AHRI 1350 casing specification</a>; this calculation tells you how much that class is worth.</p>
<h2>Running the numbers for your project</h2>
<p>Gather the inputs first: design airflow, the leakage value of each candidate casing and the pressure at which it was stated, the average operating pressure, fan static efficiency and TSP, operating hours, the location of leaked air, local energy prices and climate data. Work through steps 1 to 4 for each candidate and compare the differences, not the absolute values, since both casings share the same basic penalties. If the difference in annual cost is small relative to the price premium, the tighter casing may still be justified for hygiene or pressure control reasons.</p>
<?php guide_end([
    ['How much energy does AHU casing leakage waste?', 'It depends on leakage rate, operating pressure, hours, climate and where the leaked air goes. For a 20,000 cfm outdoor unit, a difference of about 170 cfm in operating leakage can cost on the order of several hundred dollars a year in fan, heating and cooling energy.'],
    ['How do I convert casing leakage at test pressure to operating pressure?', 'Multiply the test leakage by the ratio of operating pressure to test pressure raised to the 0.65 power. Leakage at 2.5 in. w.c. is about 57% of the leakage measured at 6 in. w.c.'],
    ['Does casing leakage matter for indoor units?', 'Less for thermal energy if the mechanical room is inside the conditioned envelope, but the fan still moves the extra air, and leakage into sections downstream of filters can bypass filtration.'],
]);
