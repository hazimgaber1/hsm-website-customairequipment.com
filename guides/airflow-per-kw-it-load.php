<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('airflow-per-kw-it-load'); ?>
<p class="lede">Server airflow per kW equals 3,160 divided by the server temperature rise in °F. At a 20°F rise, every kW of IT load needs about 158 cfm through the servers. The cooling units must then deliver that airflow plus an allowance for bypass, which in a well-contained hall is commonly 5% to 15%.</p>

<h2>The formula</h2>
<p>Start with the standard sensible heat equation for air at standard density (0.075 lb/ft³):</p>
<p class="formula">Q (Btu/h) = 1.08 × cfm × ΔT (°F)</p>
<p>One kW is 3,412 Btu/h. Rearranging for airflow per kW:</p>
<p class="formula">cfm per kW = 3,412 ÷ (1.08 × ΔT) ≈ 3,160 ÷ ΔT</p>
<p>In SI units, with air density about 1.2 kg/m³ and specific heat about 1.005 kJ/kg·K:</p>
<p class="formula">m³/s per kW ≈ 1 ÷ (1.2 × 1.005 × ΔT) ≈ 0.83 ÷ ΔT (K)</p>
<table>
<thead><tr><th>Server ΔT</th><th>cfm per kW</th><th>m³/h per kW</th></tr></thead>
<tbody>
<tr><td>15°F (8.3 K)</td><td>211</td><td>359</td></tr>
<tr><td>20°F (11.1 K)</td><td>158</td><td>269</td></tr>
<tr><td>25°F (13.9 K)</td><td>126</td><td>215</td></tr>
<tr><td>30°F (16.7 K)</td><td>105</td><td>179</td></tr>
</tbody>
</table>

<h2>Where the server delta-T comes from</h2>
<p>The temperature rise across a server is set by the server's own fans and firmware, not by the facility. Server fans speed up as component temperatures rise, so the delta-T depends on the server model, its utilization and the inlet temperature. Typical values for modern volume servers often fall in the range of about 20 to 30°F (11 to 17 K) at moderate to high load, but storage arrays, network switches and accelerator servers can differ considerably.</p>
<p>Use data from the actual equipment where possible: many vendors publish airflow per server at given loads and inlet temperatures, often as cfm at maximum and typical configurations. Where the equipment is unknown, as in colocation, pick a conservative design delta-T and state it in the basis of design.</p>
<p class="note">A lower assumed delta-T is the conservative choice for airflow, because it yields more cfm per kW. Assuming a high delta-T and then installing equipment with a lower one leaves the hall short of air.</p>

<h2>Adding a bypass allowance</h2>
<p>Not all the air the cooling units supply passes through servers. Some leaks through gaps in containment, cable openings, blanking panel gaps and floor tile cutouts. That bypass air returns to the cooling units without picking up heat. If the cooling units supply only the server airflow, the servers' own fans draw in hot air to make up what bypassed, which raises inlet temperatures.</p>
<p class="formula">Cooling unit cfm = Server cfm × (1 + Bypass fraction)</p>
<p>With good containment, a bypass allowance of roughly 5% to 15% is commonly used. Without containment, actual bypass can be far higher. Bypass also lowers the delta-T the cooling units see:</p>
<p class="formula">Cooling unit ΔT = Server ΔT ÷ (1 + Bypass fraction)</p>
<p>Finding and reducing bypass in an operating hall is covered in <a href="<?= url('guides/bypass-and-recirculation-troubleshooting') ?>">troubleshooting low delta-T from bypass and recirculation</a>.</p>

<h2>Worked example</h2>
<p>A data hall will host 1,800 kW of air-cooled IT load. Equipment data indicates an average server delta-T of 22°F at design conditions. The hall uses hot aisle containment, and the owner accepts a 10% bypass allowance.</p>
<ol>
<li>Server airflow per kW: 3,160 ÷ 22 = 143.6 cfm/kW.</li>
<li>Total server airflow: 1,800 × 143.6 = 258,500 cfm.</li>
<li>Cooling unit airflow: 258,500 × 1.10 = 284,400 cfm.</li>
<li>Cooling unit delta-T: 22 ÷ 1.10 = 20°F. With 75°F supply, return is about 95°F.</li>
<li>Check: 1.08 × 284,400 × 20 = 6,143,000 Btu/h = 1,800 kW. The heat balance closes.</li>
</ol>
<p>Then add redundancy. If the fan walls are designed N+1 with six modules required, each module supplies 284,400 ÷ 6 = 47,400 cfm at design, and seven are installed. How redundancy is structured is explained in <a href="<?= url('guides/uptime-tier-cooling-redundancy') ?>">Uptime Tier levels and cooling redundancy</a>.</p>

<h2>Why the delta-T assumption matters so much</h2>
<p>Airflow is inversely proportional to the temperature rise, so a small change in the assumption moves the whole design. Designing for a 25°F rise and then receiving equipment that runs at 18°F means the servers want almost 40% more air than the fans were sized for. The opposite error, assuming a low rise when servers actually run hotter, oversizes the fans and coils and leaves the hall with permanent bypass and a low return temperature. Neither error is visible on drawings; both show up in operation. Record the assumption, its source and the equipment it applies to, and revisit it whenever the IT deployment plan changes.</p>
<p>For colocation halls with unknown tenants, a practical approach is to design fans and coils for a conservative delta-T, then let pressure-based fan control reduce airflow automatically when actual servers run hotter and need less air.</p>
<h2>Corrections and checks</h2>
<ul>
<li><strong>Altitude and temperature.</strong> The 1.08 factor assumes standard air. At higher elevations or higher supply temperatures, air is less dense, and more cfm is needed for the same heat. At 5,000 ft (1,520 m), density is roughly 83% of standard, so airflow rises by about 20%. See <a href="<?= url('guides/fan-density-correction') ?>">fan density correction</a>.</li>
<li><strong>Fan heat.</strong> The cooling units' own fan energy is a load. Add it to the coil load, not to the IT airflow calculation.</li>
<li><strong>Partial liquid cooling.</strong> If some heat is removed by liquid, only the residual air-side heat sets airflow; see <a href="<?= url('guides/liquid-cooling-residual-air-load') ?>">liquid cooling and the residual air-side load</a>.</li>
<li><strong>Diversity.</strong> Racks rarely all run at nameplate. Use the owner's expected IT load, not the sum of power supply ratings.</li>
<li><strong>Rack-level check.</strong> A 30 kW rack at a 22°F delta-T needs about 4,300 cfm through its front face; confirm that the cold aisle and perforated tiles or diffusers can deliver that locally.</li>
</ul>
<table>
<thead><tr><th>Rack density</th><th>Airflow at 20°F ΔT</th><th>Airflow at 25°F ΔT</th></tr></thead>
<tbody>
<tr><td>8 kW</td><td>1,260 cfm</td><td>1,010 cfm</td></tr>
<tr><td>15 kW</td><td>2,370 cfm</td><td>1,900 cfm</td></tr>
<tr><td>30 kW</td><td>4,740 cfm</td><td>3,790 cfm</td></tr>
</tbody>
</table>
<?php guide_end([
    ['How much airflow does 1 kW of IT load need?', 'About 3,160 divided by the server temperature rise in °F. At a 20°F rise that is roughly 158 cfm per kW; at 25°F it is about 126 cfm per kW. Add a bypass allowance for the cooling units.'],
    ['What server delta-T should I design for?', 'Use vendor data for the actual equipment when available. Modern volume servers often run around 20 to 30°F at moderate to high load. If the equipment is unknown, choose a conservative lower value, which gives more airflow.'],
    ['Why add a bypass allowance to data center airflow?', 'Some supply air leaks past the servers through containment gaps and openings without picking up heat. Without extra airflow to cover it, servers draw in hot air and inlet temperatures rise.'],
]);
