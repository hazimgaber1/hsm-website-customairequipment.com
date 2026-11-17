<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('retail-big-box-air-handling'); ?>
<p class="lede">Big-box stores are tall, open, heavily lit and busy at unpredictable times. Air handling for them is about getting conditioned air down to a 6 ft (1.8 m) occupied zone from a roof 25 to 35 ft (7.5 to 10.5 m) up, ventilating for variable crowds, and dividing a single huge room into zones that behave differently: sales floor, entrance, refrigerated aisles and back of house.</p>

<h2>The retail load profile</h2>
<p>Retail sales floors carry high lighting power, moderate equipment loads and occupancy that varies widely between a weekday morning and a holiday weekend. The envelope is often a large flat roof with little glazing, except at the entrance. Several features shape the HVAC design:</p>
<ul>
<li><strong>Roof load.</strong> In summer, a dark roof drives a large sensible load into the upper volume. Much of it stays in the stratified layer and never reaches shoppers, but return air taken from high in the space is hot.</li>
<li><strong>Entrance infiltration.</strong> Doors open constantly. In winter, cold air pours in at floor level near checkouts.</li>
<li><strong>Refrigerated cases.</strong> Open cases in grocery-anchored stores remove sensible heat and moisture from the aisle and create local cold spots.</li>
<li><strong>Variable occupancy.</strong> Ventilation requirements are a mix of area and occupant components; occupancy peaks briefly.</li>
</ul>

<h2>System types</h2>
<p>Many big-box stores use multiple packaged rooftop units spread across the roof, each serving a portion of the floor. Larger or higher-performance stores increasingly use custom or semi-custom air handlers, sometimes with a dedicated outdoor air unit plus recirculating units, for better efficiency, sound and maintainability. The comparison of packaged and custom approaches is in <a href="<?= url('guides/ahu-vs-rtu-vs-doas') ?>">AHU vs RTU vs DOAS</a>.</p>
<p>Whichever type is chosen, a few principles apply:</p>
<ul>
<li>Size each unit to its zone's sensible load at a sensible supply temperature difference, not to a rule of thumb per square foot.</li>
<li>Include an airside economizer. Retail sales floors have an internal cooling load for much of the year.</li>
<li>Control outdoor air by occupancy where codes allow, using CO₂ or people counting.</li>
<li>Plan building pressurization carefully so the store stays slightly positive and entrance infiltration is minimized.</li>
</ul>

<h2>Destratification and high-bay distribution</h2>
<p>In winter, warm air accumulates under the roof while shoppers near the floor feel cold. Temperature differences of 10°F (5.5°C) or more between floor and roof are common in tall stores without destratification. The energy cost is real: the roof surface sees the warmest air, increasing heat loss, and the thermostat keeps calling for heat.</p>
<p>Common remedies:</p>
<ol>
<li><strong>High-volume, low-speed ceiling fans</strong> that gently push warm air back down. They are effective and quiet when sized for the bay.</li>
<li><strong>Destratification units</strong> that draw air from near the roof and discharge it downward through a nozzle.</li>
<li><strong>Supply diffusers with adjustable throw.</strong> Many retail diffusers switch pattern seasonally, throwing vertically in heating and spreading horizontally in cooling.</li>
<li><strong>Return air taken low</strong> in heating mode, where duct layout permits, to keep warm air in the occupied zone longer.</li>
</ol>
<p>In summer, stratification helps: hot air collects overhead and the unit only needs to condition the lower zone. Taking return from high in the space in cooling mode can be counterproductive because the return air is hotter than the occupied zone, raising the coil load; designers often arrange returns lower than intuition suggests.</p>
<p class="note">Atriums and terminals have their own stratification and smoke management interactions; they are discussed in <a href="<?= url('guides/atrium-high-ceiling-air-handling') ?>">atrium and high-ceiling air handling</a>.</p>

<h2>Zoning a big-box floor</h2>
<table>
<thead><tr><th>Zone</th><th>Distinct characteristics</th><th>Typical approach</th></tr></thead>
<tbody>
<tr><td>Entrance and checkouts</td><td>Infiltration, cold drafts in winter, heat gain through glazing</td><td>Dedicated unit or zone, door heaters or air curtains, extra heating capacity</td></tr>
<tr><td>General sales floor</td><td>Lighting and roof load, variable occupancy</td><td>Several units or zones on a grid, economizer, DCV</td></tr>
<tr><td>Grocery and refrigerated aisles</td><td>Open cases cool and dry the aisle; condensation risk on adjacent surfaces</td><td>Lower humidity supply, return grilles near case bases, careful thermostat placement</td></tr>
<tr><td>Garden center, seasonal areas</td><td>Large openings, partial conditioning</td><td>Heating and ventilation only, or tempered air</td></tr>
<tr><td>Back of house and stockroom</td><td>Lower occupancy, loading dock infiltration</td><td>Heating and ventilation, possibly a separate unit</td></tr>
</tbody>
</table>
<p>Grocery stores deserve particular attention to humidity. Moist store air reaching open refrigerated cases increases case defrost and refrigeration energy. Keeping the sales floor dew point modest through good dehumidification at the air handler pays back in reduced refrigeration load. The broader approach is covered in <a href="<?= url('guides/cooling-dehumidification-reheat') ?>">cooling, dehumidification and reheat</a>.</p>

<h2>Practical equipment considerations</h2>
<ul>
<li><strong>Filtration</strong> sized for the dust load from foot traffic and stock handling; MERV 8 prefilters ahead of higher-efficiency finals are common.</li>
<li><strong>Service access</strong> on the roof, with walkways and safe clearances, because retail maintenance is often performed by visiting contractors.</li>
<li><strong>Rooftop noise</strong> where stores abut residential neighbors; property line limits can control fan selection and unit placement.</li>
<li><strong>Controls integration</strong> with the store's energy management system and opening hours, including early-morning warm-up before staff arrive.</li>
</ul>
<p>Chains often roll out a prototype store design across dozens of sites in very different climates. A unit selection that works in a mild coastal market can be undersized for heating on the prairies or short on dehumidification in the southeast. Re-check coil capacities, economizer high-limit settings and frost protection for each climate zone rather than copying the prototype schedule unchanged.</p>
<p>Warehouses look similar but have different loads and ventilation drivers; see <a href="<?= url('guides/warehouse-ventilation') ?>">warehouse ventilation</a> for those buildings.</p>
<?php guide_end([
    ['How do you stop warm air collecting at the roof of a big-box store?', 'Use high-volume low-speed ceiling fans, destratification units, or supply diffusers that throw air vertically in heating mode. Taking return air low in winter also keeps more heat in the occupied zone.'],
    ['Why does humidity matter in grocery stores?', 'Moist sales floor air increases frost on open refrigerated cases, raising defrost and refrigeration energy. Holding a modest store dew point at the air handler reduces that load and improves aisle comfort.'],
    ['Do big-box stores need demand-controlled ventilation?', 'Occupancy varies widely in retail, so demand-controlled ventilation usually saves energy. Check the energy code adopted in your jurisdiction, which may require it for spaces above certain sizes and occupant densities.'],
]);
