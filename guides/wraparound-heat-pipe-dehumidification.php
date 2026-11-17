<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('wraparound-heat-pipe-dehumidification'); ?>
<p class="lede">A wraparound heat pipe has one coil section upstream of the cooling coil and one downstream, connected by refrigerant-filled tubes that loop around the coil. Warm entering air boils the refrigerant in the upstream section, precooling the air; the vapour condenses in the downstream section, reheating the cold, dry air leaving the coil. The cooling coil does more latent work at the same capacity, and the reheat costs no purchased energy.</p>

<h2>How it is arranged</h2>
<p>The two sections sit in the same airstream on either side of the cooling coil, hence "wraparound."</p>
<ul>
<li>The <strong>precool section</strong> (evaporator) is upstream of the cooling coil. Warm air passing through it boils the working fluid, losing sensible heat.</li>
<li>The <strong>reheat section</strong> (condenser) is downstream of the cooling coil. Cold air from the coil condenses the vapour, gaining the same heat back.</li>
<li>Tubes or headers connect the two sections, either running over the top of the coil or through the casing. Liquid returns to the precool section by gravity or by a pumped or capillary design.</li>
</ul>
<p>There is no compressor, pump or control valve required for basic operation. Heat flows from the warmer upstream air to the colder downstream air automatically, in proportion to their temperature difference.</p>
<p>This differs from the exhaust-to-supply heat pipe, which spans two separate airstreams for energy recovery; that application is covered in <a href="<?= url('guides/heat-pipe-heat-recovery') ?>">heat pipe air-to-air heat recovery</a>.</p>

<h2>What it does to the air</h2>
<h3>Example</h3>
<p>Outdoor air enters a DOAS at 85 F and 120 gr/lb. The cooling coil must deliver 52 F, nearly saturated, to reach the target dew point. Without the heat pipe, the coil cools from 85 F to 52 F and the air leaves at 52 F, which needs reheat to, say, 62 F.</p>
<p>With a wraparound heat pipe removing 8 F upstream:</p>
<ul>
<li>Air leaves the precool section at 77 F and 120 gr/lb (sensible cooling only, unless the section condenses moisture).</li>
<li>The cooling coil takes it from 77 F to 52 F at the target dew point.</li>
<li>The reheat section adds the same heat back to the 52 F air. With equal airflow on both sides, the temperature rise matches the drop: 52 + 8 = 60 F.</li>
</ul>
<p>For a 4,000 cfm unit, the heat pipe moves 1.08 × 4,000 × 8 ≈ 34,600 Btu/h. The coil sees 34,600 Btu/h less sensible load, and the supply receives 34,600 Btu/h of reheat at no energy cost. Only 2 F of additional reheat is needed to reach 62 F.</p>
<p class="note">The coil's latent load does not change: the same moisture still has to be removed. What changes is the coil's sensible heat ratio. More of its capacity goes to moisture removal, and less purchased reheat is needed.</p>

<h2>Effect on coil selection</h2>
<p>Because the coil sees cooler entering air, its sensible load drops and its total load drops by the same amount. For a given chilled water flow or compressor size, the coil can reach a lower leaving temperature, or a smaller coil can reach the same leaving temperature. On DX equipment, this can make the difference between a unit that dehumidifies adequately at part load and one that does not.</p>
<p>The precool section can also start condensing moisture if the entering dew point is high and its surfaces are cold enough, which adds to the latent work. Its drain pan must handle that.</p>

<h2>The cost side</h2>
<ul>
<li><strong>Air pressure drop.</strong> Two additional finned coil sections, each comparable to a two- to four-row coil, add to fan static pressure every hour the fan runs.</li>
<li><strong>Casing length.</strong> Both sections need space, plus access for cleaning.</li>
<li><strong>Weight and cost</strong> of the heat pipe assembly.</li>
<li><strong>Unwanted operation.</strong> When dehumidification is not needed, the heat pipe still precools and reheats, which reduces sensible cooling capacity on hot, dry days. Without control, the supply air is warmer than it needs to be.</li>
</ul>

<h2>Controlling a wraparound heat pipe</h2>
<p>Basic heat pipes run continuously whenever there is a temperature difference. Ways to modulate or stop them:</p>
<ul>
<li><strong>Solenoid valves</strong> in the liquid or vapour lines on some designs, which stop circulation in all or some circuits.</li>
<li><strong>Tilt</strong> on designs where tilting the assembly stops liquid return.</li>
<li><strong>Face and bypass</strong> dampers around the precool section.</li>
</ul>
<p>Controlled designs can be turned off in cooling-only conditions so the coil delivers maximum sensible capacity, and turned on in dehumidification mode. The decision is usually driven by space humidity or a supply dew point reset.</p>
<p class="warn">An uncontrolled wraparound heat pipe in a system that sometimes needs maximum sensible cooling will reduce that capacity. Either provide control or confirm with the load calculation that the reduction is acceptable at peak sensible conditions.</p>

<h2>Where it fits</h2>
<ul>
<li>DOAS and makeup air units in humid climates delivering dry air near room-neutral temperature.</li>
<li>Spaces with high latent and low sensible loads: assembly halls, locker rooms, some healthcare areas, museums and archives.</li>
<li>DX systems with high sensible heat ratio coils that need help with latent capacity.</li>
<li>Projects where energy codes limit new-energy reheat and another recovered reheat source is not available.</li>
</ul>
<p>Other reheat sources, including hot gas reheat, are compared in <a href="<?= url('guides/hot-gas-reheat-vs-hydronic-reheat') ?>">hot gas reheat vs hydronic and electric reheat</a>. For the background on why overcooled air needs reheat, see <a href="<?= url('guides/cooling-dehumidification-reheat') ?>">cooling-based dehumidification</a>.</p>

<h2>Specification points</h2>
<ul>
<li>Capacity in Btu/h or temperature change at stated airflow and entering conditions.</li>
<li>Air pressure drop for each section at design airflow.</li>
<li>Rows, fins per inch, materials and coatings.</li>
<li>Working fluid and its charge.</li>
<li>Control method, if any, and its actuators.</li>
<li>Drain pans under the precool section and under the cooling coil, which may now condense more.</li>
</ul>
<?php guide_end([
    ['How does a wraparound heat pipe help dehumidification?', 'It precools air before the cooling coil and reheats it afterward, using refrigerant that boils upstream and condenses downstream. The coil spends more of its capacity on moisture removal and the reheat needs no purchased energy.'],
    ['Does a wraparound heat pipe remove moisture by itself?', 'Mostly no. Its main job is sensible precool and reheat. The precool section may condense some moisture in very humid air, but the cooling coil does the dehumidification.'],
    ['Do wraparound heat pipes reduce cooling capacity?', 'They can on hot, dry days, because they reheat the supply air. Use a controlled design with valves or tilt so the heat pipe can be turned off when dehumidification is not needed.'],
]);
