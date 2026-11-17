<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('hotel-ventilation-design-checklist'); ?>
<p class="lede">A hotel is several buildings in one: hundreds of small, intermittently occupied bedrooms, long corridors, assembly spaces that swing from empty to packed, and commercial kitchens running long hours. This checklist covers the ventilation items to confirm for each, plus the air handler features that make the whole system work.</p>

<h2>Before you start</h2>
<ul>
<li>[ ] Applicable codes identified: ventilation standard (ASHRAE 62.1 or the code adopted locally), energy code, mechanical code and fire code, with editions recorded.</li>
<li>[ ] Brand standards obtained from the hotel operator. Many brands specify guestroom ventilation approach, noise criteria, filtration and controls.</li>
<li>[ ] Smoking policy confirmed. Smoking rooms, if any, change exhaust and transfer requirements.</li>
<li>[ ] Climate and humidity risks reviewed. Hotels in humid climates are vulnerable to mold in guestrooms if ventilation air is not dehumidified.</li>
</ul>

<h2>Guestrooms</h2>
<ul>
<li>[ ] Ventilation air delivered to each guestroom by a ducted DOAS, not by relying on corridor transfer under the door.</li>
<li>[ ] Outdoor air dehumidified at the central unit to a dew point low enough that room terminals do not need to remove ventilation latent load.</li>
<li>[ ] Bathroom exhaust rates set per code, running continuously or with a defined intermittent strategy.</li>
<li>[ ] Room supply and exhaust balanced so rooms are near neutral or slightly negative to corridors, limiting odor transfer.</li>
<li>[ ] Constant airflow regulators at each room to keep outdoor air delivery stable regardless of riser pressure changes.</li>
<li>[ ] Room terminal (PTAC, fan coil, vertical heat pump) selected for noise target suited to sleeping.</li>
<li>[ ] Unoccupied room strategy defined: setback with keycard or occupancy sensing, while keeping ventilation to control humidity.</li>
<li>[ ] Supply outlet location avoids drafts on the bed.</li>
</ul>
<p class="warn">Shutting off ventilation to unrented rooms in humid climates invites mold behind wallcoverings. Maintain dehumidified outdoor air or a humidity-based setback.</p>

<h2>Corridors</h2>
<ul>
<li>[ ] Corridor supply provided for comfort and pressurization, typically from the same DOAS or a separate unit.</li>
<li>[ ] Corridor pressure relationship to guestrooms and stairs defined and coordinated with fire and smoke design.</li>
<li>[ ] Corridor air not used as a plenum unless code clearly allows it.</li>
<li>[ ] Smoke control sequences in corridors, where required, coordinated with fire alarm and with air handler shutdown or operation modes.</li>
</ul>
<p>The calculation approach for corridor pressurization in residential-type buildings is in <a href="<?= url('guides/murb-corridor-pressurization-calculation') ?>">MURB corridor makeup air</a>; hotel corridors follow similar principles.</p>

<h2>Ballrooms, meeting rooms and pre-function areas</h2>
<ul>
<li>[ ] Occupancy for banquet, theater and classroom seating layouts calculated; the highest density governs ventilation.</li>
<li>[ ] Air handler capacity verified for full occupancy with full ventilation at design summer and winter conditions.</li>
<li>[ ] Demand-controlled ventilation with CO₂ sensing in each subdividable section of the ballroom.</li>
<li>[ ] Air distribution designed to work with operable partitions; each section has its own supply, return and thermostat.</li>
<li>[ ] Noise criteria agreed for meetings and events, typically lower than general areas.</li>
<li>[ ] Pre-cooling sequence for scheduled events, linked to the sales and catering calendar where practical.</li>
<li>[ ] Dehumidification capacity for crowded rooms at part sensible load.</li>
</ul>

<h2>Kitchens and food service</h2>
<ul>
<li>[ ] Hood exhaust rates confirmed from listed hood data.</li>
<li>[ ] Makeup air sized for most of the exhaust, tempered, and interlocked with exhaust fans. See <a href="<?= url('guides/commercial-kitchen-makeup-air') ?>">commercial kitchen makeup air</a>.</li>
<li>[ ] Kitchen kept negative to dining and banquet areas.</li>
<li>[ ] Dishwashing exhaust separate from cooking exhaust where required.</li>
<li>[ ] Room service and banquet pantries ventilated for heat from warming equipment.</li>
<li>[ ] Kitchen exhaust kept away from energy recovery devices serving other spaces.</li>
</ul>

<h2>Back-of-house and specialty spaces</h2>
<ul>
<li>[ ] Laundry: dryer exhaust and makeup air, plus heat removal for ironers and presses.</li>
<li>[ ] Garbage and recycling rooms under negative pressure with continuous exhaust.</li>
<li>[ ] Pools and spas served by a dedicated dehumidification unit, not the general hotel system.</li>
<li>[ ] Fitness rooms with higher ventilation and cooling per occupant.</li>
<li>[ ] Parking garages ventilated per code with CO and NO₂ detection where required.</li>
<li>[ ] Electrical, IT and elevator machine rooms cooled independently of guestroom systems.</li>
</ul>

<h2>Air handler and DOAS features</h2>
<ul>
<li>[ ] Energy recovery between guestroom exhaust and outdoor air, with exhaust classification checked so only permitted streams pass through the recovery device.</li>
<li>[ ] Frost control on the recovery device in cold climates, maintaining supply airflow overnight.</li>
<li>[ ] Dehumidification by cooling coil with reheat, hot gas reheat or a wraparound heat pipe.</li>
<li>[ ] Redundant fans or fan arrays so guestroom ventilation continues during a fan failure.</li>
<li>[ ] Filtration level suited to urban air quality; MERV 13 is a common target for outdoor air.</li>
<li>[ ] Access sections and filter access arranged for hotel maintenance staff, who often work alone.</li>
<li>[ ] Sound attenuation on rooftop units above guestroom floors.</li>
</ul>

<p class="note">Hotels are frequently renovated while open. Design guestroom ventilation risers and DOAS units so a block of floors can be isolated for renovation without losing ventilation to occupied floors above or below.</p>

<h2>Commissioning and operation</h2>
<ul>
<li>[ ] Sample guestroom airflows measured at several floors to confirm riser balancing.</li>
<li>[ ] Ballroom DCV sequences tested at multiple occupancy levels.</li>
<li>[ ] Training provided for engineering staff on keycard and setback sequences.</li>
<li>[ ] Seasonal check scheduled for humidity in unrented rooms.</li>
</ul>
<p>Student residences share features with hotels but have different patterns; see <a href="<?= url('guides/dormitory-residence-hall-ventilation') ?>">dormitory and residence hall ventilation</a>. If a hotel DOAS needs custom features such as integrated recovery and redundant fans, our <a href="<?= url('products/custom-air-handlers') ?>">custom air handlers</a> page describes the options.</p>
<?php guide_end([
    ['Should hotel guestrooms get ventilation from the corridor?', 'Ducting dehumidified outdoor air directly to each room is more reliable. Corridor transfer depends on door undercuts and pressures that change, and codes increasingly restrict corridors as plenums.'],
    ['How do hotels prevent mold in guestrooms?', 'By delivering dehumidified outdoor air to each room continuously, keeping rooms slightly negative to the corridor, and avoiding turning off ventilation in unrented rooms in humid climates.'],
    ['How should a hotel ballroom be ventilated?', 'Size outdoor air for the densest seating layout, provide CO2-based demand control in each subdividable section, and plan pre-cooling for events. Each section separated by partitions needs its own supply, return and controls.'],
]);
