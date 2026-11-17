<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('max-winter-indoor-rh-calculation'); ?>
<p class="lede">The highest indoor RH a building can hold in winter without condensation is set by its coldest interior surface. Estimate that surface temperature from the U-factor of the weakest element (usually window frames and glass edges) and the indoor and outdoor temperatures, treat it as the maximum allowable indoor dew point, and convert to RH at the room temperature. Then subtract a safety margin.</p>

<h2>The logic</h2>
<p>Water condenses on any surface colder than the dew point of the air touching it. Indoors in winter, the coldest surfaces are usually window frames, the edge of glass near spacers, door frames, thermal bridges at slab edges and balconies, and corners where insulation is interrupted. If the room air dew point exceeds the temperature of any of those, water or frost forms there.</p>
<p>So the problem is to find the coldest interior surface temperature and keep the room dew point below it.</p>

<h2>The equations</h2>
<p>For a single assembly with an overall U-factor, at steady state, the heat flow through the inside air film equals the heat flow through the whole assembly:</p>
<p class="formula">T_surface = T_in − U × R_film,in × (T_in − T_out)</p>
<ul>
<li><strong>U</strong> is the assembly's U-factor in Btu/h·ft²·F. Use the U-factor of the coldest part, such as the frame or edge of glass, not the whole-window average, where that data is available.</li>
<li><strong>R_film,in</strong> is the inside surface film resistance, about 0.68 h·ft²·F/Btu for a vertical surface in still room air. It increases where air movement is poor, such as behind drapes or deep window reveals, which makes the surface colder.</li>
</ul>
<p>Then:</p>
<p class="formula">Maximum indoor RH = P_sat(T_surface) ÷ P_sat(T_in)</p>
<p>where P_sat is the saturation vapour pressure at each temperature, from psychrometric tables.</p>

<h2>Worked example</h2>
<p>An office in a cold Canadian climate has indoor air at 70 F and an outdoor winter design of −10 F, so the difference is 80 F. Windows are double-glazed with low-e coating. The center-of-glass U-factor is 0.30, but the frame and edge-of-glass zone are poorer, around 0.45.</p>
<h3>At the center of glass</h3>
<p>T_surface = 70 − 0.30 × 0.68 × 80 = 70 − 16.3 = 53.7 F.</p>
<p>P_sat at 53.7 F ≈ 0.207 psia. P_sat at 70 F ≈ 0.363 psia. Maximum RH ≈ 0.207 ÷ 0.363 = 57 percent.</p>
<h3>At the frame and glass edge</h3>
<p>T_surface = 70 − 0.45 × 0.68 × 80 = 70 − 24.5 = 45.5 F.</p>
<p>P_sat at 45.5 F ≈ 0.150 psia. Maximum RH ≈ 0.150 ÷ 0.363 = 41 percent.</p>
<p>The frame governs. Allowing a margin of several percentage points for drapes, furniture placed against windows and sensor inaccuracy, the practical indoor limit at design is about 35 percent RH.</p>
<h3>At a colder design temperature</h3>
<p>For the same building in a −25 F climate (difference 95 F): T_surface = 70 − 0.306 × 95 = 40.9 F, P_sat ≈ 0.125 psia, maximum RH ≈ 34 percent before any margin.</p>
<p class="note">The limit changes with outdoor temperature. In mild weather the building can hold much higher RH. A humidifier control that resets the indoor RH setpoint down as outdoor temperature falls makes use of that.</p>

<h2>Outdoor reset of the humidity setpoint</h2>
<p>Using the same method, compute the allowable RH at several outdoor temperatures and build a reset schedule. For the example frame:</p>
<table>
<thead><tr><th>Outdoor temperature</th><th>Frame surface</th><th>Max RH (no margin)</th></tr></thead>
<tbody>
<tr><td>30 F</td><td>57.8 F</td><td>about 65%</td></tr>
<tr><td>10 F</td><td>51.6 F</td><td>about 53%</td></tr>
<tr><td>−10 F</td><td>45.5 F</td><td>about 41%</td></tr>
<tr><td>−25 F</td><td>40.9 F</td><td>about 34%</td></tr>
</tbody>
</table>
<p>Subtract the chosen margin from each value to get the setpoint. The humidifier capacity needed at the coldest condition then falls, which feeds into <a href="<?= url('guides/humidifier-load-calculation') ?>">calculating humidifier load</a>.</p>

<h2>Beyond surface condensation</h2>
<p>Surface condensation on windows is visible and usually the first limit reached. Two hidden risks also deserve attention:</p>
<ul>
<li><strong>Air leakage condensation in walls and roofs.</strong> Warm, humid indoor air leaking out through gaps in the air barrier reaches cold sheathing and condenses inside the assembly, where it cannot be seen. This depends on the airtightness of the envelope and on building pressurization. Slightly negative or neutral pressure reduces outward leakage in humidified buildings.</li>
<li><strong>Thermal bridges.</strong> Steel studs, slab edges, shelf angles and balcony connections can have interior surface temperatures well below the clear-wall value. Use the lowest known surface temperature from envelope analysis where available.</li>
</ul>
<p>The building envelope consultant should confirm the limit on humidified buildings, especially museums, hospitals and pools in cold climates.</p>
<p class="warn">Do not size humidifiers or choose space RH targets for cold-climate buildings without checking the envelope. A setpoint that suits the occupants can rot window frames and wall assemblies over a few winters.</p>

<h2>Applying the limit in controls</h2>
<p>Program the reset schedule into the humidifier control as a maximum space RH or space dew point that falls with outdoor temperature. Use a dew point limit where possible, since it ties directly to the surface temperature calculation. Add a high-limit alarm on space dew point so operators see when the envelope limit is being approached, and avoid manual overrides that raise the setpoint during cold snaps, which is when the risk is highest.</p>

<h2>Inputs to gather</h2>
<ul>
<li>Indoor design dry-bulb in winter.</li>
<li>Outdoor winter design temperature, and the range you want for reset.</li>
<li>U-factors for glass center, edge and frame from the window manufacturer, or condensation resistance ratings they publish.</li>
<li>Known thermal bridges from the envelope design.</li>
<li>Expected interior conditions near windows: drapes, blinds, deep sills or heating units below windows.</li>
</ul>
<p>Typical indoor RH targets for various occupancies, before this envelope check, are in <a href="<?= url('guides/humidity-requirements-by-space-type') ?>">humidity requirements by space type</a>.</p>
<?php guide_end([
    ['How do I calculate the maximum indoor humidity to avoid window condensation?', 'Estimate the coldest interior surface temperature from its U-factor, the inside film resistance and the indoor and outdoor temperatures. The ratio of saturation pressure at that surface temperature to saturation pressure at room temperature gives the maximum RH.'],
    ['What indoor RH is safe in winter in a cold climate?', 'It depends on the windows and outdoor temperature. With typical double-glazed windows and outdoor air near minus 10 F, the limit is often around 35 to 40 percent after a margin. Colder weather or poorer frames lower it further.'],
    ['Should the humidity setpoint change with outdoor temperature?', 'Yes. A reset schedule that lowers the indoor RH setpoint as outdoor temperature falls protects the envelope in cold weather while allowing higher humidity in mild weather.'],
]);
