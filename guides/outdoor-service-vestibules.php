<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('outdoor-service-vestibules'); ?>
<p class="lede">A service vestibule is an insulated, heated and lit room built onto an outdoor AHU, sharing its casing construction, that encloses the unit's piping connections, control valves, VFDs, control panels and sometimes a humidifier steam generator. It keeps freeze-prone and heat-sensitive equipment out of the weather and gives technicians somewhere to work in January.</p>

<h2>What goes inside a vestibule</h2>
<ul>
<li><strong>Piping:</strong> coil supply and return connections, control valves, isolation valves, strainers, balancing devices, steam traps, glycol fill and drain points.</li>
<li><strong>Electrical:</strong> VFDs, motor starters, main disconnect, distribution panel, lighting panel and receptacles.</li>
<li><strong>Controls:</strong> the unit controller, I/O panels, network gateways and sensors that need protection.</li>
<li><strong>Humidification:</strong> steam generators or water treatment equipment.</li>
<li><strong>Refrigeration:</strong> in some units, compressors or refrigerant controls for integral DX systems.</li>
<li><strong>Service space:</strong> standing room for technicians, sometimes with a workbench or storage for spare filters.</li>
</ul>

<h2>Integral vestibule versus pipe chase</h2>
<p>Two related features are often confused:</p>
<table>
<thead><tr><th>Feature</th><th>Integral service vestibule</th><th>Pipe chase</th></tr></thead>
<tbody>
<tr><td>Size</td><td>Walk-in room, typically the full height of the unit</td><td>Narrow enclosure along the coil connection side</td></tr>
<tr><td>Contents</td><td>Piping, electrical, controls, humidifier equipment</td><td>Piping only, sometimes with valve actuators</td></tr>
<tr><td>Access</td><td>Personnel door; work inside the space</td><td>Removable panels from outside; reach-in</td></tr>
<tr><td>Heating</td><td>Unit heater or heated by the airstream; thermostat controlled</td><td>Heat trace or a small heater; sometimes ventilated from the unit</td></tr>
<tr><td>Typical use</td><td>Large rooftop units, critical facilities, cold climates</td><td>Smaller units, milder climates, piping-only needs</td></tr>
</tbody>
</table>
<p>A pipe chase may also bring piping down through the roof curb from below, protecting the vertical runs between the building and the unit.</p>

<h2>Why vestibules are worth their cost</h2>
<h3>Freeze protection</h3>
<p>Coil connections, control valves and condensate traps outside the casing are exposed to the coldest air the unit will ever see. Heat tracing and insulation can protect them, but a single failure, such as a tripped breaker on the heat trace, can freeze a coil in hours. A heated vestibule keeps all of this in a space held above freezing.</p>
<h3>Electronics</h3>
<p>VFDs and controllers have operating temperature and humidity ranges. On a roof in the sun they can overheat; in winter they can drop below their minimum or form condensation. Outdoor-rated enclosures with heaters and air conditioners exist, but a vestibule is often simpler for several drives. NEMA enclosure ratings are covered in <a href="<?= url('guides/vfd-enclosure-types-nema') ?>">VFD enclosure types</a>.</p>
<h3>Serviceability</h3>
<p>Adjusting a control valve or checking a drive in a heated, lit room is more likely to get done properly than doing it in freezing rain. It also reduces the risk of water entering electrical panels when doors are opened in bad weather.</p>
<h3>Roof penetrations</h3>
<p>Piping and conduit can rise into the vestibule through a single, well-flashed curb opening rather than through several separate roof penetrations.</p>

<h2>Design considerations</h2>
<ul>
<li><strong>Heating:</strong> an electric unit heater with thermostat is most common. Some designs condition the vestibule from the AHU's airstream with a small supply grille. Size heating for the vestibule's envelope and infiltration at winter design.</li>
<li><strong>Cooling or ventilation:</strong> VFDs reject heat. A vestibule full of drives on a summer roof can exceed drive ratings. Provide ventilation with a thermostat-controlled fan, or mount drives so their heat sinks discharge outside, or provide cooling.</li>
<li><strong>Construction:</strong> same insulated panel construction as the unit, including thermal breaks, so the vestibule does not sweat or lose heat excessively.</li>
<li><strong>Separation from the airstream:</strong> the vestibule should not leak into or out of the AHU casing. Penetrations between vestibule and unit, for piping to coils and wiring to motors, need proper sealing; see <a href="<?= url('guides/casing-penetration-sealing') ?>">sealing casing penetrations</a>.</li>
<li><strong>Floor:</strong> drainable floor or floor drain to handle leaks from valves and condensate traps.</li>
<li><strong>Size:</strong> big enough for code-required electrical working clearance in front of panels, and for removing valves and drives. Electrical clearance rules are in <a href="<?= url('guides/electrical-working-clearances') ?>">electrical working clearances</a>.</li>
<li><strong>Lighting and power:</strong> lights on a switch at the door, receptacles for tools.</li>
<li><strong>Door:</strong> personnel door with weather seals, outward swinging, with a closer or hold-open and a lockable handle with interior release.</li>
<li><strong>Classification:</strong> if refrigeration equipment or a gas-fired appliance is in the vestibule, refrigerant safety and combustion air rules apply.</li>
</ul>
<p class="note">Shipping and lifting a vestibule with the unit adds weight and may change the shipping splits. Plan vestibule location early, ideally at an end of the unit or on the coil connection side.</p>

<h2>When a vestibule may not be needed</h2>
<p>In mild climates where freezing is rare, and on units with few piping connections, outdoor-rated electrical enclosures and insulated, heat-traced piping may be adequate. Electric-heat units with DX cooling may have very little piping. The decision should consider maintenance staff preferences and how critical the unit is. The weather-shedding construction of the vestibule roof and walls follows the same principles as the unit itself; see <a href="<?= url('guides/outdoor-unit-weatherproofing') ?>">weatherproofing outdoor AHUs</a>.</p>
<h2>Sizing a vestibule</h2>
<p>Start the layout from the equipment list. Place panels and drives along one wall with the required working clearance in front of them, piping manifolds along the wall adjoining the coil connections, and a clear aisle from the door to every valve. Allow room to remove the largest drive or valve body without dismantling anything else. Add the heater, a ventilation fan and space for any steam generator with its drain. Then check the vestibule's weight and dimensions against the shipping limits for the section it is attached to, since the vestibule often ships as part of the coil section.</p>
<?php guide_end([
    ['What is a service vestibule on an air handler?', 'A service vestibule is an insulated, heated room built onto an outdoor air handler that houses piping connections, valves, VFDs, controls and similar equipment. It protects them from weather and gives technicians a sheltered place to work.'],
    ['Do vestibules need heating and cooling?', 'Heating is almost always required in cold climates to keep piping and controls above freezing. Ventilation or cooling is often needed in summer because VFDs and electrical equipment reject heat, and roof locations get hot.'],
    ['What is the difference between a pipe chase and a vestibule?', 'A pipe chase is a narrow enclosure protecting piping, accessed through removable panels. A vestibule is a walk-in room that can house piping, electrical and controls equipment and lets technicians work inside.'],
]);
