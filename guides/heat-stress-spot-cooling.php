<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('heat-stress-spot-cooling'); ?>
<p class="lede">In foundries, glass plants, steel mills, bakeries and other hot workplaces, it is rarely practical to cool the whole building. The effective approach is to remove as much heat as possible with general ventilation, then deliver cool air or high air velocity directly to the places where people work, sized from a heat stress assessment rather than from comfort rules of thumb.</p>

<h2>Step 1: Assess the heat stress</h2>
<p>Heat stress depends on air temperature, humidity, radiant heat, air velocity, work rate and clothing. The common assessment metric is wet bulb globe temperature (WBGT), which combines natural wet bulb, globe and dry bulb temperatures. Occupational health guidance, such as ACGIH threshold limit values and jurisdictional regulations, relates WBGT and work rate to permissible work and rest periods.</p>
<ol>
<li>Measure WBGT at each work station during peak conditions, or estimate it from process and weather data.</li>
<li>Record work rate, clothing (including protective gear) and how long workers stay at each station.</li>
<li>Identify the main heat source at each location: radiant from furnaces and molten metal, convective from hot air, or high humidity from wet processes.</li>
</ol>
<p class="note">Heat stress limits are set by occupational health regulations and guidance that vary by jurisdiction. Work with the site's health and safety staff to define targets.</p>

<h2>Step 2: Reduce heat at the source</h2>
<p>Before adding cooling, reduce what reaches workers:</p>
<ul>
<li><strong>Insulate</strong> hot surfaces such as furnace walls, ducts and process vessels.</li>
<li><strong>Shield radiant sources</strong> with reflective or water-cooled shields between the source and the worker. Radiant heat passes straight through air, so ventilation does little to reduce it.</li>
<li><strong>Capture hot air</strong> with hoods or local exhaust directly above heat sources.</li>
<li><strong>Remove moisture</strong> from wet processes with local exhaust to keep humidity down near workers.</li>
</ul>

<h2>Step 3: Design general ventilation</h2>
<p>General ventilation removes convective heat from the building and lowers air temperature near the floor. In hot industrial buildings, the most effective arrangement is low-level intake of outdoor air and high-level exhaust, letting the natural buoyancy of hot air carry heat upward.</p>
<p class="formula">CFM = Q sensible (Btu/h) ÷ (1.08 × ΔT)</p>
<p>ΔT is the difference between exhaust temperature at the roof and supply temperature. Because roof temperature in a hot plant is high, each cfm removes more heat than in a cool building. For example, removing 3,000,000 Btu/h with outdoor air at 85°F and roof exhaust at 115°F:</p>
<p class="formula">CFM = 3,000,000 ÷ (1.08 × 30) = 92,600 cfm (43,700 L/s)</p>
<p>Natural ventilation through roof monitors or ridge vents with low wall openings can handle part of this, supplemented by powered roof exhausters. Makeup air must be provided, or the building goes negative and exhaust fans underperform.</p>
<p>General ventilation cannot bring indoor air below outdoor temperature. On hot days, it limits the temperature rise but may not achieve safe conditions on its own.</p>

<h2>Step 4: Choose a spot cooling method</h2>
<table>
<thead><tr><th>Method</th><th>How it helps</th><th>Best suited to</th></tr></thead>
<tbody>
<tr><td>High-velocity air (man-cooling fans)</td><td>Increases convective and evaporative heat loss from the body</td><td>Air temperature below skin temperature, around 95°F (35°C), and moderate humidity</td></tr>
<tr><td>Ducted outdoor air to work stations</td><td>Delivers air cooler than plant air, at velocity</td><td>Fixed work stations in hot buildings</td></tr>
<tr><td>Evaporatively cooled air</td><td>Lowers air temperature using water evaporation</td><td>Dry climates and seasons; less effective in humid conditions</td></tr>
<tr><td>Mechanically cooled air (DX or chilled water)</td><td>Delivers cool, dehumidified air regardless of weather</td><td>Critical stations, humid climates, high radiant loads</td></tr>
<tr><td>Cooled booths or pulpits</td><td>Fully conditioned enclosures for operators</td><td>Control rooms, crane cabs, operator stations</td></tr>
</tbody>
</table>
<p class="warn">When air temperature exceeds skin temperature, high-velocity air can add heat to the body by convection, though it may still help evaporative cooling. In very hot or humid conditions, use cooled air rather than relying on air speed alone.</p>

<h2>Step 5: Size spot cooling at each station</h2>
<ol>
<li>Define the work zone: the area where the worker spends most time, typically a few feet across.</li>
<li>Choose a target air velocity at the worker, often in the range of 400 to 1,000 fpm (2 to 5 m/s) for spot cooling, adjusted to work type. Higher velocities disturb light materials and processes and can be uncomfortable.</li>
<li>Select outlet type and distance: nozzles or directional outlets 3 to 8 ft (1 to 2.5 m) from the worker, angled from above and in front.</li>
<li>Calculate airflow from outlet velocity and area, accounting for jet spread with distance.</li>
<li>For cooled air, calculate cooling capacity from airflow and the temperature drop, with the full enthalpy method for dehumidifying coils: Q = 4.5 × CFM × Δh.</li>
</ol>
<p>Worked example: a station needs 600 fpm at the worker from a nozzle 5 ft away. A nozzle discharging 1,200 cfm at about 2,000 fpm decays to roughly the target velocity at that distance for a typical jet. If that air is cooled from 95°F to 70°F with no moisture removal, the sensible load is 1.08 × 1,200 × 25 = 32,400 Btu/h, about 2.7 tons per station.</p>

<h2>Step 6: Supply the spot cooling air</h2>
<ul>
<li>Use a central makeup air or process air handler with a ducted distribution system to each station, with adjustable outlets.</li>
<li>Take outdoor air from a cool, clean location, away from roof exhaust and process emissions.</li>
<li>Provide filtration suited to plant conditions.</li>
<li>Insulate supply ducts running through hot areas to avoid heat gain.</li>
</ul>
<p>Makeup air heating for winter is a separate design problem; this guide covers summer heat stress.</p>

<h2>Step 7: Verify and maintain</h2>
<p>Measure WBGT and air velocity at each station after startup and on hot days. Adjust outlet direction with worker input, since workers move outlets that blow in their eyes or onto their work. Maintain coils, filters and evaporative media through the season. Related guidance on supplying makeup air is in <a href="<?= url('guides/industrial-makeup-air-calculation') ?>">calculating industrial makeup air</a>, and ventilation of high-bay storage buildings in <a href="<?= url('guides/warehouse-ventilation') ?>">warehouse ventilation</a>. Heavy-duty supply and exhaust fans for these plants are described on our <a href="<?= url('products/industrial-fans') ?>">industrial fans</a> page.</p>
<?php guide_end([
    ['What is the best way to cool workers in a hot factory?', 'Reduce heat at the source with insulation, shields and local exhaust, remove convective heat with general ventilation, and then deliver cool air or high velocity air directly to work stations. The right mix depends on radiant load, humidity and work rate.'],
    ['Do fans help when it is very hot?', 'Fans help evaporative cooling, but when air temperature exceeds skin temperature, around 95°F (35°C), they can add heat by convection. In very hot or humid conditions, cooled air is more effective than air movement alone.'],
    ['What is WBGT?', 'Wet bulb globe temperature is a heat stress index combining natural wet bulb, globe and dry bulb temperatures. Occupational health guidance uses it with work rate to set work and rest limits.'],
]);
