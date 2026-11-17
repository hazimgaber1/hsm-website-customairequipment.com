<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('liquid-cooling-residual-air-load'); ?>
<p class="lede">Direct-to-chip liquid cooling removes most of a server's heat through cold plates, but not all of it. Memory, voltage regulators, power supplies, storage and network cards still reject heat to air, and so do coolant distribution units, power equipment and the room itself. That residual air-side load, often a quarter or more of rack power, still needs air handlers sized and controlled for it.</p>

<h2>Why liquid-cooled halls still need air</h2>
<p>Cold plates sit on the highest-power components: CPUs, GPUs and other accelerators. They capture a large share of server heat, but the exact fraction depends on the server design and is reported by vendors as a capture ratio. Many current direct-to-chip servers capture somewhere in the range of roughly 70% to 85% of their heat to liquid, with the rest going to air through the server's fans. Some designs aim higher by adding cold plates for memory and power components.</p>
<p>Heat that stays air-side comes from:</p>
<ul>
<li>Server components without cold plates: DIMMs, voltage regulators, drives, network cards, power supplies</li>
<li>Network switches and storage that remain air-cooled</li>
<li>Coolant distribution units (CDUs), which reject pump and heat exchanger losses to the room if located in the hall</li>
<li>Power distribution, busway and in-row electrical losses</li>
<li>Heat gained by the room from piping, lighting and the building envelope</li>
</ul>
<p>Rear-door heat exchangers and immersion tanks change the picture again. A rear-door unit cools the server's exhaust air before it enters the room, so the room sees a small load, but the server still needs inlet air. Immersion removes almost all server heat to liquid, leaving mostly room and electrical loads.</p>

<h2>Calculating the residual air load</h2>
<p class="formula">Air-side load (kW) = IT load × (1 − Capture ratio) + Other room loads</p>
<p>Example: a hall of 40 racks at 120 kW each with direct-to-chip servers capturing 80% of heat to liquid.</p>
<ol>
<li>IT load: 40 × 120 = 4,800 kW</li>
<li>Server heat to air: 4,800 × 0.20 = 960 kW</li>
<li>Air-cooled network and storage racks: 6 racks at 15 kW = 90 kW</li>
<li>CDU losses in the hall: 8 CDUs at 6 kW = 48 kW</li>
<li>Electrical losses and envelope: 40 kW</li>
<li>Total air-side load: 960 + 90 + 48 + 40 = 1,138 kW</li>
</ol>
<p>At a 22°F server delta-T, server airflow is about 3,160 ÷ 22 = 144 cfm per kW. The air load of 1,138 kW needs roughly 163,000 cfm through equipment, plus a bypass allowance. The full method is in <a href="<?= url('guides/airflow-per-kw-it-load') ?>">calculating data center airflow per kW of IT load</a>.</p>
<p>That residual air load is similar to an entire conventional air-cooled hall of a decade ago, concentrated in fewer racks. Each 120 kW rack still pushes about 24 kW to air, needing on the order of 3,500 cfm through the rack. That is more than many legacy air-cooled racks needed.</p>
<p class="note">Capture ratios vary with facility water temperature, server workload and inlet air temperature. Ask vendors for the ratio at your design water and air conditions, not at their best case.</p>

<h2>How the air handler's job changes</h2>
<table>
<thead><tr><th>Aspect</th><th>Air-cooled hall</th><th>Liquid-cooled hall with residual air</th></tr></thead>
<tbody>
<tr><td>Air-side load per rack</td><td>Equal to rack power</td><td>Fraction of rack power, but racks are much denser</td></tr>
<tr><td>Total airflow</td><td>Sized for full IT load</td><td>Sized for residual load; lower total</td></tr>
<tr><td>Airflow concentration</td><td>Spread across many racks</td><td>Concentrated at fewer, high-density racks</td></tr>
<tr><td>Supply temperature</td><td>Set by server inlet envelope</td><td>Same envelope applies to the air-cooled parts</td></tr>
<tr><td>Humidity control</td><td>Envelope-driven</td><td>Also driven by condensation risk on liquid lines</td></tr>
<tr><td>Load during transition</td><td>Stable</td><td>Can swing as liquid-cooled racks are deployed</td></tr>
</tbody>
</table>

<h2>Dew point and condensation risk</h2>
<p>Liquid cooling introduces cold surfaces into the white space: supply manifolds, hoses, quick disconnects and CDU piping. If the facility or technology cooling water is supplied below the room dew point, those surfaces sweat. Many liquid cooling systems run warm water well above typical room dew points, but chilled water loops, CDU primary piping and transitions during start-up can be colder.</p>
<p>The air handler must therefore hold a room dew point safely below the coldest liquid surface temperature, with margin for sensor error. This is a tighter and different constraint than the humidity limits set for server reliability. Controls should alarm if room dew point approaches the liquid supply temperature, and CDUs typically include their own dew point protection that raises supply temperature. Humidity guidance for the servers themselves is discussed in <a href="<?= url('guides/data-center-humidity-static') ?>">data center humidity limits and electrostatic discharge</a>.</p>

<h2>Supply air temperature and hybrid operation</h2>
<p>Air-cooled components in a liquid-cooled server still need inlet air within the vendor's specification. Some accelerator servers need cooler inlet air than standard servers, while others tolerate warmer air because most of their heat goes to liquid. Use the vendor's inlet specification for the specific equipment.</p>
<p>Most halls deploy liquid cooling gradually. Early on, the hall may be mostly air-cooled; later, liquid-cooled racks dominate. The air system has to handle both: full air-cooled density in some zones, residual air loads in others. Fan walls and modular air handlers with variable speed fan arrays can follow that change by staging and slowing fans, but local airflow delivery to the dense racks must be checked zone by zone. Local high-density problems are covered in <a href="<?= url('guides/hot-spots-troubleshooting') ?>">troubleshooting data center hot spots</a>.</p>

<h2>Design steps</h2>
<ol>
<li>Obtain capture ratios at design conditions for each liquid-cooled server type.</li>
<li>Calculate residual air load per rack and per zone, including CDUs and electrical losses.</li>
<li>Size airflow for the residual load plus air-cooled equipment, with a bypass allowance.</li>
<li>Check rack-level airflow delivery for the densest racks.</li>
<li>Set room dew point limits based on the coldest liquid surface, not only server guidance.</li>
<li>Plan air system capacity for every deployment phase, from mostly air-cooled to mostly liquid-cooled.</li>
<li>Coordinate failure modes: if liquid cooling to a rack fails, how much heat shifts to air, and for how long?</li>
</ol>
<?php guide_end([
    ['How much heat does direct-to-chip cooling leave for the air?', 'It depends on the server. Many current designs capture roughly 70% to 85% of server heat to liquid, leaving 15% to 30% for air. Add CDU, electrical and room loads to find the full air-side load.'],
    ['Do liquid-cooled data centers still need air handlers?', 'Yes. Air-cooled components, network and storage equipment, coolant distribution units and electrical equipment all reject heat to air. The air system is usually smaller in total but must serve very dense racks.'],
    ['Why does liquid cooling affect humidity control?', 'Liquid lines and manifolds in the white space can be cold enough to cause condensation. The room dew point must stay safely below the coldest liquid surface temperature, which may be a tighter limit than server humidity guidance.'],
]);
