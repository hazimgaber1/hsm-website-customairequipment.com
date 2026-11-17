<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('supply-airflow-from-sensible-load'); ?>
<p class="lede">Supply airflow equals the room sensible load divided by 1.08 times the difference between room and supply air temperature. At elevations above roughly 2,000 ft (600 m), reduce the 1.08 factor in proportion to air density, which raises the cfm needed for the same load.</p>

<h2>The sensible heat equation</h2>
<p class="formula">Qs (Btu/h) = 1.08 × CFM × (T room − T supply)</p>
<p>Rearranged to solve for airflow:</p>
<p class="formula">CFM = Qs ÷ (1.08 × ΔT)</p>
<p>The 1.08 constant bundles three things: standard air density of 0.075 lb/ft³, the specific heat of moist air of about 0.24 Btu/lb·°F, and 60 minutes per hour. Multiply them and you get 0.075 × 0.24 × 60 = 1.08. If any of those change, the constant changes.</p>
<p>In SI units the equivalent is Qs (W) = 1.2 × L/s × ΔT (K), using a density of about 1.2 kg/m³ and specific heat of about 1.0 kJ/kg·K.</p>

<h2>Worked example at sea level</h2>
<p>An office zone group has a peak room sensible load of 300,000 Btu/h (about 88 kW). The room is held at 75°F and the design supply air temperature at the diffusers is 55°F.</p>
<ol>
<li>ΔT = 75 − 55 = 20°F.</li>
<li>CFM = 300,000 ÷ (1.08 × 20) = 300,000 ÷ 21.6 = 13,889 cfm.</li>
<li>Round to a scheduled value, for example 14,000 cfm (about 6,600 L/s).</li>
</ol>
<p>Use the supply temperature as delivered to the room, not as it leaves the coil. If duct heat gain in a ceiling return plenum warms the air by 1°F, delivered supply is 56°F, ΔT drops to 19°F, and airflow rises to 300,000 ÷ (1.08 × 19) = 14,620 cfm. That 5% difference is easy to miss.</p>

<h2>Correcting for altitude</h2>
<p>Air at elevation is less dense, so each cubic foot carries less mass and less heat. Fans move volume, so the airflow must rise to deliver the same mass flow. The density ratio for the standard atmosphere can be estimated from:</p>
<p class="formula">Density ratio = (1 − 6.8754 × 10⁻⁶ × elevation in ft) ^ 5.2559</p>
<p>The corrected constant is 1.08 × density ratio. Typical values:</p>
<table>
<thead><tr><th>Elevation</th><th>Density ratio</th><th>Corrected constant</th></tr></thead>
<tbody>
<tr><td>Sea level</td><td>1.00</td><td>1.08</td></tr>
<tr><td>1,000 ft (305 m)</td><td>0.96</td><td>1.04</td></tr>
<tr><td>2,500 ft (760 m)</td><td>0.91</td><td>0.99</td></tr>
<tr><td>3,500 ft (1,070 m)</td><td>0.88</td><td>0.95</td></tr>
<tr><td>5,000 ft (1,520 m)</td><td>0.83</td><td>0.90</td></tr>
<tr><td>7,000 ft (2,130 m)</td><td>0.77</td><td>0.83</td></tr>
</tbody>
</table>
<h3>Same example at 5,000 ft</h3>
<p>For the same 300,000 Btu/h load and 20°F ΔT at about 5,000 ft elevation:</p>
<ol>
<li>Corrected constant = 1.08 × 0.832 = 0.899.</li>
<li>CFM = 300,000 ÷ (0.899 × 20) = 16,690 actual cfm.</li>
</ol>
<p>That is 20% more volume than at sea level. Coils, filters and the unit cross-section must be sized for actual cfm, since face velocity depends on volume. Fan selection must also be made at actual density; the fan density correction is covered in the industrial category under <a href="<?= url('guides/fan-density-correction') ?>">fan density correction</a>.</p>
<p class="warn">Be clear whether a schedule lists standard cfm (scfm) or actual cfm (acfm). At high elevation they differ significantly, and mixing them up undersizes the unit or oversizes the fan.</p>

<h2>Choosing the supply temperature</h2>
<p>The ΔT is a design choice, and it trades airflow against coil and humidity performance.</p>
<ul>
<li><strong>55°F (13°C) supply</strong> is the conventional choice for comfort cooling. It allows a coil leaving temperature that removes enough moisture for typical office SHRs.</li>
<li><strong>Lower supply temperatures</strong>, such as 48°F to 50°F, reduce airflow, duct size and fan energy. They need colder chilled water, careful diffuser selection to avoid dumping, and insulation that prevents duct sweating.</li>
<li><strong>Higher supply temperatures</strong>, such as 60°F to 65°F, suit spaces with displacement ventilation, data centers or chilled beam systems. Airflow rises, but chillers can run more efficiently.</li>
</ul>
<p>The room's sensible heat ratio limits how warm the supply air can be while still removing the latent load; see the <a href="<?= url('guides/sensible-heat-ratio-ahu-design') ?>">SHR guide</a>.</p>

<h2>Checks after calculating airflow</h2>
<ul>
<li><strong>Ventilation:</strong> confirm the airflow carries at least the required outdoor air at the planned outdoor air fraction.</li>
<li><strong>Heating:</strong> check that the same airflow can meet the heating load at an acceptable supply temperature, typically no more than about 15°F to 20°F above room for overhead supply to avoid stratification.</li>
<li><strong>Air changes:</strong> some applications such as healthcare and labs set minimum air change rates that may govern over the load-based airflow.</li>
<li><strong>Diversity:</strong> for VAV systems serving many zones, the AHU airflow is based on the block load, not the sum of zone peaks.</li>
</ul>
<p>Airflow is the starting point; pressure is next. Once cfm is fixed, build the <a href="<?= url('guides/total-static-pressure-budget') ?>">total static pressure budget</a> before selecting any fan.</p>
<?php guide_end([
    ['Where does the 1.08 in the sensible heat formula come from?', 'It is standard air density of 0.075 lb per cubic foot, multiplied by a specific heat of 0.24 Btu per pound per degree F, multiplied by 60 minutes per hour. The product is 1.08. It changes when air density changes, such as at high elevation.'],
    ['How do I calculate cfm from tons of cooling?', 'Tons measure total load, while airflow is set by sensible load. Convert the sensible part of the load to Btu per hour and divide by 1.08 times the room to supply temperature difference. Rules of thumb such as 400 cfm per ton are only rough checks.'],
    ['Do I need more airflow at high altitude?', 'Yes. Thinner air carries less heat per cubic foot, so the same load needs more actual cfm. At about 5,000 ft the increase is roughly 20% compared with sea level.'],
]);
