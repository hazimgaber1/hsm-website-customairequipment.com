<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('warehouse-ventilation'); ?>
<p class="lede">Ventilating a high-bay warehouse means deciding what the building actually needs: removing summer heat, diluting forklift and vehicle emissions, keeping winter temperatures safe for people and product, and balancing exhaust with makeup air. Work out each requirement separately, then combine them into a system that runs only as hard as conditions require.</p>

<h2>Step 1: Define the building and its use</h2>
<p>Record the floor area, clear height, rack layout, dock count and door sizes, plus:</p>
<ul>
<li><strong>Product sensitivity.</strong> Ambient goods only, or products with temperature limits (pharmaceuticals, food, chemicals, electronics)?</li>
<li><strong>Occupancy.</strong> Number of workers per shift, location (picking aisles, docks, offices), and whether work is sedentary or physical.</li>
<li><strong>Vehicles.</strong> Electric forklifts only, or propane or diesel equipment? Trucks idling at docks?</li>
<li><strong>Operating schedule.</strong> 24/7 distribution centers behave very differently from single-shift storage warehouses.</li>
<li><strong>Climate.</strong> Summer peak and winter design temperatures.</li>
</ul>

<h2>Step 2: Determine minimum ventilation</h2>
<p>For general occupancy, ASHRAE 62.1 (or the adopted mechanical code) gives outdoor air rates for warehouse and storage spaces, typically dominated by a per-area rate because occupant density is low. Calculate this as the baseline.</p>
<p>Fuel-powered equipment changes the picture. Propane and diesel forklifts emit carbon monoxide, nitrogen dioxide and, for diesel, particulate. Occupational health regulations set exposure limits; ventilation must keep concentrations below them. Approaches:</p>
<ul>
<li>Estimate emission rates from equipment data and calculate dilution airflow to keep concentrations below the applicable limits with a safety factor.</li>
<li>Use gas detection (CO and NO₂) to modulate exhaust and makeup air above a code minimum.</li>
<li>Convert to electric equipment where practical, which eliminates most of the requirement.</li>
</ul>
<p class="note">Exposure limits are set by provincial, state and federal occupational health regulations and differ between jurisdictions. Use the limits that apply to the site.</p>

<h2>Step 3: Size summer heat removal</h2>
<p>Many warehouses are not air-conditioned. Ventilation must remove heat from the roof, lighting, equipment and solar gains through walls to keep indoor temperature a reasonable margin above outdoor. Use the sensible heat equation:</p>
<p class="formula">CFM = Q sensible (Btu/h) ÷ (1.08 × ΔT)</p>
<p>where ΔT is the allowed rise of indoor temperature above outdoor at the occupied level. Worked example: a 200,000 ft² (18,600 m²) warehouse with a total sensible heat gain of 1,600,000 Btu/h reaching the air and an allowed rise of 10°F (5.5°C):</p>
<p class="formula">CFM = 1,600,000 ÷ (1.08 × 10) = 148,000 cfm (70,000 L/s)</p>
<p>That corresponds to about 1.5 air changes per hour in a 30 ft (9 m) high building. Exhaust is typically taken at the roof, where air is hottest; intake is low through wall louvers or makeup air units so cooler air moves past workers. Ceiling fans for air movement greatly improve comfort at the same temperature.</p>
<p>Where heat stress is a concern for workers, spot cooling may be needed in addition to general ventilation; see <a href="<?= url('guides/heat-stress-spot-cooling') ?>">controlling heat stress with spot cooling</a>.</p>

<h2>Step 4: Size winter heating and makeup air</h2>
<p>In winter, the goal is to keep the space at a safe minimum, often 50°F to 60°F (10°C to 15°C) for working areas and higher in offices. Heating must cover:</p>
<ul>
<li>Envelope losses through walls, roof and slab edge.</li>
<li>Infiltration, especially through dock doors. A dock door open for loading can admit very large amounts of cold air.</li>
<li>Ventilation and makeup air for any winter exhaust (vehicle emissions, battery charging rooms, process exhaust).</li>
</ul>
<p>Makeup air units with direct-fired or indirect-fired burners are common. Size them for the winter exhaust airflow with the method in <a href="<?= url('guides/industrial-makeup-air-calculation') ?>">calculating industrial makeup air</a>.</p>

<h2>Step 5: Control stratification</h2>
<p>In winter, warm air collects under the roof of a high-bay warehouse while the floor stays cold. Temperature differences of many degrees between floor and roof are common. That wastes heat and leaves workers cold. Remedies:</p>
<ol>
<li>High-volume, low-speed ceiling fans that move warm air down at low velocity.</li>
<li>Destratification units that draw air from the roof level and discharge downward.</li>
<li>Low-level supply of heated makeup air, aimed into aisles.</li>
<li>Radiant heaters for docks and work areas, heating people and surfaces directly.</li>
</ol>

<h2>Step 6: Handle docks and special areas</h2>
<ul>
<li><strong>Docks:</strong> dock seals and shelters, fast-acting doors and air curtains reduce infiltration. Dock areas may need dedicated heating.</li>
<li><strong>Battery charging rooms:</strong> exhaust to remove hydrogen from lead-acid charging, per code and battery manufacturer. Lithium battery charging has different risks.</li>
<li><strong>Offices and break rooms:</strong> separate HVAC with normal comfort conditions.</li>
<li><strong>Temperature-controlled zones:</strong> product storage with strict limits may need full conditioning, often with dedicated units.</li>
</ul>

<h2>Step 7: Integrate controls</h2>
<ol>
<li>Stage summer exhaust fans and supply on indoor temperature, with outdoor temperature lockout so ventilation does not bring in hotter air.</li>
<li>Modulate exhaust and makeup air on CO and NO₂ readings in areas with fuel-powered equipment.</li>
<li>Interlock makeup air with exhaust fans to keep the building close to neutral or slightly positive.</li>
<li>Set winter heating to minimum safe temperatures with occupied and unoccupied schedules.</li>
<li>Run destratification fans whenever heating is active.</li>
</ol>
<p>Retail buildings with similar heights but different loads are covered separately. For large makeup air units and exhaust fans built to warehouse duties, see our <a href="<?= url('products/industrial-fans') ?>">industrial fans</a> page.</p>
<?php guide_end([
    ['How many air changes does a warehouse need?', 'There is no single number. Minimum ventilation comes from code rates, heat removal in summer often requires one to several air changes per hour, and fuel-powered equipment may need more to dilute emissions. Calculate each requirement and use the largest.'],
    ['How do you keep a warehouse floor warm in winter?', 'Counter stratification with high-volume low-speed fans or destratification units, supply heated makeup air low, reduce dock door infiltration, and use radiant heaters in work areas.'],
    ['Do warehouses with propane forklifts need extra ventilation?', 'Yes. Propane equipment emits CO and NO2, so ventilation must keep concentrations below occupational exposure limits. Gas detection that modulates exhaust and makeup air is a common approach.'],
]);
