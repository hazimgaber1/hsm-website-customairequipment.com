<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('electrical-room-ups-cooling'); ?>
<p class="lede">Size electrical and UPS room cooling from the actual heat losses of the equipment, hold the temperature the batteries need (which is usually lower than what switchgear tolerates), keep water away from the gear, provide the redundancy the electrical system itself has, and ventilate battery rooms for any gas the battery chemistry can release.</p>

<h2>Step 1: Calculate the heat loads</h2>
<p>Electrical equipment rejects its losses as heat. Use manufacturer data at the expected operating load, not nameplate capacity.</p>
<ul>
<li><strong>UPS modules:</strong> loss = output × (1 ÷ efficiency − 1). Efficiency varies with load and operating mode; use the value at the expected load.</li>
<li><strong>Transformers:</strong> no-load (core) losses plus load losses, which rise with the square of load.</li>
<li><strong>Switchgear, switchboards and panelboards:</strong> busway and breaker losses, usually small per unit but significant in large rooms.</li>
<li><strong>Batteries:</strong> small heat during float; more during charge and discharge.</li>
<li><strong>Lighting, controls and people</strong> as for any room.</li>
<li><strong>Envelope:</strong> wall, roof and adjacent-space heat gains.</li>
</ul>
<p class="formula">UPS heat (kW) = Output kW × (1 ÷ η − 1)</p>
<p>Example: a UPS room with 2,000 kW of UPS output at a load where efficiency is 96%. Loss = 2,000 × (1 ÷ 0.96 − 1) = 83 kW. Add a transformer at 2,000 kVA with 1.2% total losses at load (24 kW), distribution losses of 8 kW, lighting and envelope of 5 kW: total about 120 kW, or 34 tons.</p>
<p class="note">UPS efficiency can be much lower in some modes or at very light load. If the room will operate at low load for years, check the loss at that load; it may be a larger fraction than at design.</p>

<h2>Step 2: Set the temperature targets</h2>
<p>Different equipment in the same room has different needs:</p>
<table>
<thead><tr><th>Equipment</th><th>Typical temperature concern</th></tr></thead>
<tbody>
<tr><td>Lead-acid batteries (VRLA, flooded)</td><td>Rated life is usually based on about 77°F (25°C); sustained higher temperatures shorten life considerably</td></tr>
<tr><td>Lithium-ion batteries</td><td>Manufacturer-specified range; often tolerant of somewhat warmer conditions, but check the warranty</td></tr>
<tr><td>UPS electronics</td><td>Manufacturer's maximum ambient; derating above it</td></tr>
<tr><td>Switchgear and transformers</td><td>Typically rated for higher ambient, commonly around 104°F (40°C); check ratings</td></tr>
</tbody>
</table>
<p>Where batteries share a room with other gear, the battery requirement governs. Many designs separate battery rooms from UPS and switchgear rooms so each can be held at its own setpoint, and so battery rooms can be ventilated independently.</p>

<h2>Step 3: Choose airflow and supply conditions</h2>
<p>With the sensible load known, airflow follows from the allowable supply-to-room temperature difference:</p>
<p class="formula">cfm = Btu/h ÷ (1.08 × ΔT)</p>
<p>For the 120 kW room above (409,400 Btu/h) at a 20°F difference, cfm = 409,400 ÷ (1.08 × 20) ≈ 19,000 cfm. Electrical rooms have little latent load, so cooling coils can run dry at relatively high temperatures, which suits elevated chilled water or economizer operation.</p>
<p>Arrange airflow so cool air reaches equipment intakes. UPS cabinets and some transformers have specific intake and exhaust faces, much like servers; follow their airflow direction and avoid short-circuiting hot exhaust back to intakes.</p>

<h2>Step 4: Select the cooling approach</h2>
<ul>
<li><strong>DX or chilled water computer room units</strong> inside or adjacent to the room: common, but keep water piping and condensate drains out of the dedicated space above and in front of electrical equipment required by the electrical code in force (the NEC in the U.S. or the Canadian Electrical Code).</li>
<li><strong>Ducted air handlers</strong> located outside the room: keeps water, coils and maintenance out of the room entirely, and allows airside economizing.</li>
<li><strong>Filtered outdoor air ventilation:</strong> feasible where switchgear tolerates warm temperatures and batteries are elsewhere. Filtration and dust protection are important.</li>
<li><strong>In-row or close-coupled units</strong> beside UPS lineups for concentrated loads.</li>
</ul>
<p>The trade-offs between chilled water and refrigerant-based systems are discussed in <a href="<?= url('guides/chilled-water-vs-dx-vs-pumped-refrigerant') ?>">chilled water vs DX vs pumped refrigerant</a>.</p>
<p class="warn">Never run water or condensate piping over switchgear, UPS or battery racks. Coordinate locations with the electrical engineer and the code's dedicated equipment space requirements; working clearances are covered in <a href="<?= url('guides/electrical-working-clearances') ?>">electrical working clearances</a>.</p>

<h2>Step 5: Match redundancy to the electrical system</h2>
<p>A 2N UPS system with a single, non-redundant cooling unit has a single point of failure in the cooling. Provide cooling redundancy at least equal to the redundancy of the equipment the room serves, power the cooling from sources that remain available when one electrical path is down, and confirm how long the room can go without cooling during a generator transfer. UPS rooms heat up quickly when their losses rise during battery discharge. The ride-through question is covered in <a href="<?= url('guides/thermal-ride-through-power-loss') ?>">thermal ride-through after utility power loss</a>.</p>

<h2>Step 6: Ventilate battery rooms</h2>
<p>Flooded and valve-regulated lead-acid batteries can release hydrogen, particularly during overcharge or equalizing charge. Fire codes and electrical codes require ventilation that limits hydrogen concentration well below its lower flammable limit, and the joint IEEE/ASHRAE guide on battery ventilation and thermal management gives methods for calculating generation rates. Lithium-ion battery systems have different hazards, including thermal runaway and off-gassing, and are governed by fire code provisions and listing requirements for energy storage systems.</p>
<ul>
<li>Calculate the required ventilation for the battery type and charging conditions, per the governing code edition</li>
<li>Locate exhaust at the ceiling for hydrogen, which rises</li>
<li>Monitor and alarm ventilation airflow; some codes require gas detection</li>
<li>Coordinate with the fire protection and energy storage system requirements for lithium-ion installations</li>
</ul>
<p>Check the code edition adopted by your jurisdiction, because energy storage provisions have changed significantly in recent editions.</p>
<?php guide_end([
    ['How do I calculate heat load in a UPS room?', 'Multiply UPS output by (1 divided by efficiency, minus 1) at the expected load, then add transformer, distribution, lighting and envelope gains. A 2,000 kW UPS output at 96% efficiency produces about 83 kW of heat.'],
    ['What temperature should a battery room be kept at?', 'Lead-acid battery life is usually rated at about 77°F (25°C), and sustained higher temperatures shorten it. Lithium-ion systems have manufacturer-specified ranges. Check the battery warranty conditions.'],
    ['Do battery rooms need ventilation?', 'Lead-acid batteries can release hydrogen, so codes require ventilation to keep concentrations well below the flammable limit. Lithium-ion systems have different requirements under fire codes and energy storage listings.'],
]);
