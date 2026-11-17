<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('cold-climate-data-centers-canada'); ?>
<p class="lede">Cold Canadian climates give data centers long stretches of free cooling, but outdoor air at −30°F (−34°C) or colder brings its own risks: frozen coils, stratified mixed air, snow in intakes, extremely dry air, condensation on cold casing surfaces and a cold-soaked plant after an outage. Each needs a deliberate design response.</p>

<h2>Freeze protection</h2>
<p>A data center air handler runs continuously, so any coil exposed to a cold airstream is at risk if water stops moving or if mixed air stratifies. Common protections:</p>
<ul>
<li><strong>Glycol</strong> in any coil or loop that could see sub-freezing air, including chilled water coils in airside economizer units. Glycol lowers coil capacity and raises pump energy, so coils must be selected for the glycol concentration.</li>
<li><strong>Minimum flow</strong> through water coils at all times, so water never sits still in a cold coil.</li>
<li><strong>Coil placement</strong> downstream of good mixing, never in the direct path of an outdoor air jet.</li>
<li><strong>Low-limit protection</strong> that trips on sustained low temperature across the coil face, with averaging elements rather than a single-point sensor.</li>
<li><strong>Drain-down</strong> for evaporative sections, humidifiers and spray systems that are not needed in winter, with heat tracing on any piping that stays filled.</li>
</ul>
<p>More detail on the available methods is in <a href="<?= url('guides/coil-freeze-protection-methods') ?>">coil freeze protection methods</a>.</p>

<h2>Mixing at very low outdoor temperatures</h2>
<p>When outdoor air is at −30°F and the supply setpoint is 75°F, an airside economizer needs only a small outdoor air fraction. With a 95°F return, the outdoor fraction to reach 75°F is roughly (95 − 75) ÷ (95 − (−30)) = 16%. That small, dense, very cold stream tends to stay together as it enters the mixing box, sliding along the floor or one wall. The result is cold streaks hitting filters and coils, nuisance freeze trips, and some server inlets receiving colder air than the setpoint.</p>
<p>Responses include:</p>
<ul>
<li>Outdoor and return dampers arranged to collide the streams, such as opposed entries or return above and outdoor below</li>
<li>Static mixers or blender baffles with enough downstream length</li>
<li>Small, high-velocity outdoor air dampers at low outdoor fractions (a dedicated minimum damper section) so the jet penetrates the return stream</li>
<li>Averaging temperature sensors across the full mixed air section</li>
<li>Preheat of outdoor air in the coldest weather, or recirculation of a portion of relief air ahead of the mixing section</li>
</ul>
<p>Diagnosing stratification in an existing unit is covered in <a href="<?= url('guides/mixed-air-stratification-troubleshooting') ?>">troubleshooting mixed air stratification</a>.</p>

<h2>Snow, ice and intakes</h2>
<p>Large outdoor air intakes on data centers draw high airflow, and in snowy regions they can draw in fine, wind-driven snow that clogs filters and melts into the unit. Ice forms on louvers and dampers, especially relief dampers carrying warm, slightly humid air into cold outdoors.</p>
<ul>
<li>Size intakes for low face velocity and use snow-resistant hoods or louvers</li>
<li>Raise intakes above expected snow drift levels, accounting for drift against adjacent walls and equipment</li>
<li>Provide drainable plenums behind louvers</li>
<li>Locate relief air outlets away from intakes and walkways, and heat or protect relief dampers that may ice</li>
</ul>
<p>General intake protection is discussed in <a href="<?= url('guides/snow-rain-intrusion-outdoor-intakes') ?>">snow and rain intrusion at outdoor intakes</a>.</p>

<h2>Very low humidity</h2>
<p>Outdoor air at −30°F holds almost no moisture: its dew point equals its temperature at saturation. Mixed with return air, it can produce supply dew points well below the recommended envelope's lower limit. With direct outdoor air, the owner must decide whether to humidify, accept dry air within the allowable range, or limit outdoor air fraction. Current guidance accepts lower humidity than older practice, provided ESD controls are in place. Humidifying a large economizer airflow in a Canadian winter takes substantial energy and water. Closed recirculating halls, including those cooled by indirect units, avoid the problem because they exchange little air with outdoors.</p>

<h2>Condensation on casings and cold surfaces</h2>
<p>Outdoor air sections of a unit in cold weather have cold inner panels. If the surrounding space, such as a mechanical gallery, is warm and humid, condensation forms on the outer casing and around penetrations. Conversely, on outdoor units, warm return air sections have warm inner surfaces and cold outer skins, so moisture in the return air can condense inside panels at thermal bridges. Thermally broken panels and frames, sealed penetrations and vapor-tight construction reduce both risks.</p>

<h2>Recovery after an outage</h2>
<p>If a winter power outage stops the cooling plant and air handlers for longer than the ride-through period, the outdoor sections, coils and relief dampers can cold-soak. On restart:</p>
<ul>
<li>Outdoor dampers should stay closed until the unit is running in full recirculation and coils have flow</li>
<li>Coils that have been exposed should be checked for flow before opening outdoor air</li>
<li>Economizer mode should ramp in gradually, both for freeze safety and to respect server inlet rate-of-change limits</li>
</ul>

<h2>Heat rejection equipment</h2>
<p>Cooling towers in winter can ice up and freeze. Dry coolers or closed-circuit coolers with glycol avoid tower freezing and water use in winter, and many cold-climate plants rely on them for waterside economizing. Air-cooled condensers on DX and pumped refrigerant systems need head pressure control at low ambient, and their refrigerant circuits must be designed for very low outdoor temperatures.</p>

<h2>Opportunities</h2>
<p>Cold climates allow very high economizer fractions; the method for counting them is in <a href="<?= url('guides/economizer-hours-by-climate') ?>">estimating economizer hours by climate</a>. They also create an opportunity to reuse data center heat for district heating, adjacent buildings or greenhouses, since the facility produces heat year-round and its neighbors need it for much of the year.</p>
<?php guide_end([
    ['How do data centers protect coils from freezing in Canada?', 'By using glycol in exposed loops, maintaining minimum flow, placing coils after good mixing, using averaging low-limit sensors and draining evaporative sections in winter. Mixing design is critical at very low outdoor temperatures.'],
    ['Why does mixed air stratify in cold weather?', 'At very low outdoor temperatures only a small fraction of outdoor air is needed, and that cold, dense stream tends to stay together and slide along the floor or a wall. Collision mixing, baffles and high-velocity minimum dampers help.'],
    ['Do Canadian data centers need humidification in winter?', 'With direct outdoor air, supply humidity can fall very low. Current guidance accepts drier air when ESD controls are in place, so many owners limit or avoid humidification. Closed recirculating halls see little effect.'],
]);
