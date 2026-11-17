<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('industrial-ahu-design-checklist'); ?>
<p class="lede">Industrial air handlers fail for reasons commercial units rarely face: corrosive or dusty air, hazardous atmospheres, extreme outdoor conditions, and service in places that are hard to reach. Work through this checklist with the process owner before the unit is specified, so the construction matches the environment it will live in.</p>

<h2>Environment and site</h2>
<ul>
<li>[ ] Outdoor design conditions recorded, including extreme cold or heat, wind, snow load and seismic requirements.</li>
<li>[ ] Indoor environment around the unit defined: temperature, humidity, dust, corrosive vapors, washdown.</li>
<li>[ ] Site elevation recorded for density correction of fans and coils.</li>
<li>[ ] Unit location confirmed: rooftop, mezzanine, inside a process area, outdoors on grade, in a remote building.</li>
<li>[ ] Rigging and access path for installation and future replacement checked.</li>
<li>[ ] Structural support, vibration sensitivity and foundation requirements noted.</li>
<li>[ ] Noise limits at property line or in adjacent occupied spaces identified.</li>
</ul>

<h2>Contaminants in the airstream</h2>
<ul>
<li>[ ] Outdoor air quality at the intake: dust from yards, roads and processes; exhaust plumes; salt air near the coast.</li>
<li>[ ] Return or recirculated air contaminants: dust, oil mist, solvents, acid vapors, moisture, fibers.</li>
<li>[ ] Particle size, concentration and stickiness.</li>
<li>[ ] Whether any contaminants are combustible dusts or flammable vapors.</li>
<li>[ ] Whether recirculation is permitted, given contaminant type and regulations.</li>
<li>[ ] Filtration stages selected for contaminant load, with prefilters to protect coils and fans.</li>
<li>[ ] Gas-phase filtration requirement assessed for corrosive gases that damage electronics or equipment.</li>
</ul>

<h2>Materials and construction</h2>
<ul>
<li>[ ] Casing material chosen for the environment: galvanized, painted, aluminum, stainless 304 or 316, or coated steel.</li>
<li>[ ] Interior surfaces resistant to the contaminants and cleaning methods.</li>
<li>[ ] Coil tube, fin and casing materials suited to the air: coated fins, copper-copper, stainless casings or other options for corrosive air. See <a href="<?= url('guides/coil-coatings-corrosion-protection') ?>">coil coatings and corrosion protection</a>.</li>
<li>[ ] Fan wheel and housing materials suited to temperature, corrosion and abrasion.</li>
<li>[ ] Fasteners, hinges and latches in compatible materials to avoid galvanic corrosion.</li>
<li>[ ] Gasket and sealant materials compatible with chemicals and temperature.</li>
<li>[ ] Casing panel thickness and structure suited to pressure, wind and handling.</li>
<li>[ ] Thermal break construction where interior and exterior temperatures differ significantly.</li>
<li>[ ] Drainable floors and drain pans if wet processes, washdown or high latent loads are present.</li>
</ul>

<h2>Hazardous areas</h2>
<ul>
<li>[ ] Area classification of the unit location obtained from the owner (Class/Division or Zone, group, temperature code).</li>
<li>[ ] Classification inside the unit assessed: can the airstream contain flammable vapor or combustible dust?</li>
<li>[ ] Motors, electrical components and controls rated for the classification. See <a href="<?= url('guides/hazardous-location-motors') ?>">motors for hazardous locations</a>.</li>
<li>[ ] Spark-resistant fan construction considered where the hazard analysis requires it.</li>
<li>[ ] Electrical equipment located outside the hazardous area where possible.</li>
<li>[ ] Grounding and bonding of all sections and ductwork.</li>
<li>[ ] Explosion protection measures (venting, isolation, suppression) coordinated with the process safety design where dust or vapor hazards exist.</li>
<li>[ ] Heaters with surface temperatures below the T-code required.</li>
</ul>

<h2>Performance and process requirements</h2>
<ul>
<li>[ ] Design airflow, pressure and conditions for each operating mode: production, shutdown, cleaning, emergency.</li>
<li>[ ] Temperature and humidity tolerances, if the space serves a process.</li>
<li>[ ] Pressure relationships to adjacent spaces (positive for clean process, negative for contaminant containment).</li>
<li>[ ] Makeup air requirements matched to exhaust systems.</li>
<li>[ ] Redundancy: N+1 fans, standby units, or dual coils where process interruptions are costly.</li>
<li>[ ] Emergency power for critical ventilation.</li>
<li>[ ] Heat recovery assessed, with materials suited to the exhaust stream.</li>
</ul>

<h2>Service and maintenance</h2>
<ul>
<li>[ ] Access doors to every section, sized for the work: coil cleaning, fan removal, filter changes.</li>
<li>[ ] Service clearances around the unit maintained in the layout, including coil pull.</li>
<li>[ ] Filter changes possible without shutting down the process, if required.</li>
<li>[ ] Walkways, platforms and safe access to rooftop or elevated units, with fall protection.</li>
<li>[ ] Lifting points or rails for heavy components such as fans and motors.</li>
<li>[ ] Lighting and receptacles inside access sections, rated for the area.</li>
<li>[ ] Local disconnects and lockout points for each motor.</li>
<li>[ ] Spare parts and standardized components consistent with the plant's maintenance practice.</li>
<li>[ ] Instrumentation for condition monitoring: filter pressure, fan vibration, bearing temperature, motor current.</li>
<li>[ ] Washdown or cleaning procedures documented and supported by the construction.</li>
</ul>
<p>The general service checklist for access sections applies too; see <a href="<?= url('guides/access-section-service-checklist') ?>">access section service checklist</a>.</p>

<h2>Energy and utilities</h2>
<ul>
<li>[ ] Available utilities confirmed: steam pressure, hot water and chilled water temperatures, gas pressure, electrical service and voltage.</li>
<li>[ ] Waste heat sources identified that could supply heating or desiccant reactivation.</li>
<li>[ ] Fan and pump energy estimated for continuous operation, since many industrial units run around the clock.</li>
<li>[ ] Freeze protection designed for 100% outdoor air units in cold climates.</li>
</ul>

<h2>Controls and integration</h2>
<ul>
<li>[ ] Integration with the plant control system (PLC or DCS) or BAS defined, with protocols and point lists.</li>
<li>[ ] Interlocks with process exhaust, fire systems, gas detection and production equipment.</li>
<li>[ ] Control panels rated for environment and area classification.</li>
<li>[ ] Alarms routed to operators who can respond.</li>
</ul>

<h2>Testing and documentation</h2>
<ul>
<li>[ ] Factory run test of fans and controls; witness testing if required by the owner.</li>
<li>[ ] Material certificates for stainless and special alloys.</li>
<li>[ ] Casing leakage test where contaminants or pressure differences make leakage important.</li>
<li>[ ] Documentation of hazardous location ratings and certifications for every component.</li>
<li>[ ] Operation and maintenance manuals including cleaning and inspection intervals.</li>
</ul>
<p>Fan specification for industrial duties is a separate topic. When the checklist is complete, our <a href="<?= url('contact') ?>">application engineers</a> can review how the requirements translate into a custom unit.</p>
<?php guide_end([
    ['What makes an industrial AHU different from a commercial unit?', 'Industrial units often face corrosive or dusty air, hazardous atmospheres, extreme climates, heavy service demands and process requirements. Materials, filtration, electrical ratings and access must be chosen for that environment.'],
    ['Do I need hazardous location ratings inside the air handler?', 'Possibly. If the airstream can contain flammable vapor or combustible dust, the interior may be a hazardous location, and motors, heaters and electrical components must be rated accordingly. Get the classification from the owner\'s hazard analysis.'],
    ['What casing material should an industrial AHU use?', 'It depends on the environment. Galvanized or painted steel suits many plants, aluminum resists some corrosion, and 304 or 316 stainless steel is used for washdown, chemical or coastal service. Match the material to the contaminants and cleaning chemicals.'],
]);
