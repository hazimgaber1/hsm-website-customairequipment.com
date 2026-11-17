<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('cleanroom-ahu-checklist'); ?>
<p class="lede">Run through this checklist when you write or review the design of an air handler serving a cleanroom. It focuses on the decisions that are expensive to change once the unit is built: filtration stages, airflow and fan arrangement, pressure stability, temperature and humidity tolerance, materials, redundancy and maintainability.</p>

<h2>Basis of design</h2>
<ul>
<li>☐ ISO class (and GMP grade, if applicable) for every room served, with the occupancy state for each target</li>
<li>☐ Room temperature and humidity setpoints and allowable tolerances, stated as numbers, not "tight"</li>
<li>☐ Pressure cascade diagram with the differential for every door</li>
<li>☐ Supply airflow per room and the governing reason: class, cooling or process</li>
<li>☐ Outdoor airflow and its basis: ventilation, exhaust makeup, pressurization leakage</li>
<li>☐ Process exhaust points and whether they run continuously or intermittently</li>
<li>☐ Whether recirculation is permitted, and between which rooms</li>
<li>☐ Outdoor design conditions for both peak dry bulb and peak dew point</li>
</ul>
<p class="note">Many cleanroom humidity problems begin with a coil sized for peak dry bulb only. The peak dew point condition, with its lower dry bulb and higher moisture, usually governs dehumidification.</p>

<h2>Filtration</h2>
<ul>
<li>☐ Prefilter stage in the AHU to protect coils and final filters</li>
<li>☐ High-efficiency final filter in the AHU, rating stated by standard (MERV under ASHRAE 52.2, or ISO 16890)</li>
<li>☐ Terminal HEPA or ULPA filters at the room, efficiency class stated; class details in <a href="<?= url('guides/hepa-ulpa-filter-classes') ?>">HEPA and ULPA filter classes</a></li>
<li>☐ Filter frames and seals designed to prevent bypass; gel seal or gasket specified</li>
<li>☐ Differential pressure transmitter across each filter stage, with alarm at the change-out value</li>
<li>☐ Fan selected at final (dirty) filter pressure drop, not clean</li>
<li>☐ Upstream aerosol injection points or ports for in-place testing of terminal filters, where required</li>
<li>☐ Gas-phase filtration on outdoor air if the process is sensitive to airborne chemicals</li>
</ul>

<h2>Airflow and fans</h2>
<ul>
<li>☐ Fan duty covers the full range from clean to loaded filters at design airflow</li>
<li>☐ Constant airflow control: fan speed tracks a measured airflow, not just duct static pressure</li>
<li>☐ Airflow measurement station or fan inlet piezometer with accuracy suited to the control</li>
<li>☐ Fan array or multiple fans sized so the required airflow continues with one fan out of service</li>
<li>☐ Backdraft protection on each fan in an array</li>
<li>☐ Discharge velocity profile even across downstream filters and coils</li>
<li>☐ Supply and return fans sequenced so the suite never goes negative (for positive suites) during start or stop</li>
</ul>

<h2>Pressure stability</h2>
<ul>
<li>☐ Supply duct pressure held steady so room terminals can hold their offsets</li>
<li>☐ Outdoor air damper or makeup unit controlled on measured airflow</li>
<li>☐ Exhaust and return fans controlled to track supply</li>
<li>☐ Behavior during door openings defined in the sequence</li>
<li>☐ Low casing leakage specified (pressure class and allowable leakage) so airflow measurements reflect what reaches the rooms</li>
</ul>

<h2>Temperature and humidity tolerance</h2>
<ul>
<li>☐ Cooling coil sized for the outdoor dew point design condition, with leaving air dew point stated</li>
<li>☐ Coil face velocity limited to prevent moisture carryover, commonly around 500 fpm (2.5 m/s) or less</li>
<li>☐ Cooling coil controlled on leaving dew point when humidity is critical; temperature finished by reheat</li>
<li>☐ Desiccant dehumidification included where required dew point is below what chilled water can reach</li>
<li>☐ Humidifier type and placement chosen for clean steam or treated water; absorption distance verified</li>
<li>☐ Reheat at the zone level for rooms with different loads</li>
<li>☐ Sensors with accuracy finer than the tolerance band (a ±1°F band needs better than ±1°F sensors)</li>
</ul>

<h2>Materials and construction</h2>
<ul>
<li>☐ Double-wall casing with smooth, cleanable interior; no exposed insulation in the airstream</li>
<li>☐ Interior finish specified for the cleaning agents used</li>
<li>☐ Stainless steel drain pans, sloped in two directions, drained from the low point</li>
<li>☐ Welded or sealed floors in wet sections; no traps for standing water</li>
<li>☐ Thermally broken panels where condensation on casing surfaces is possible</li>
<li>☐ Sealed penetrations for piping, conduit and sensors</li>
<li>☐ Lighting and viewing windows in access sections</li>
</ul>
<p>Hygienic construction details are expanded in <a href="<?= url('guides/hygienic-ahu-construction-checklist') ?>">the hygienic AHU construction checklist</a>.</p>

<h2>Redundancy and continuity</h2>
<ul>
<li>☐ Single points of failure identified: fan, motor, drive, coil valve, controller, power feed</li>
<li>☐ Fan redundancy chosen and documented; options in <a href="<?= url('guides/fan-array-redundancy-n1-vs-n2') ?>">fan array redundancy: N+1 vs N+2</a></li>
<li>☐ Redundant chilled and hot water supply paths where process continuity demands it</li>
<li>☐ Emergency power for fans and controls if the process cannot tolerate an outage</li>
<li>☐ Restart sequence after power loss defined and tested</li>
</ul>

<h2>Maintainability</h2>
<ul>
<li>☐ Access sections at every component needing inspection or cleaning</li>
<li>☐ Filter change possible without entering the cleanroom or opening clean-side ductwork</li>
<li>☐ Fans and motors removable without dismantling the casing</li>
<li>☐ Coil pull space provided in the mechanical room layout</li>
<li>☐ Instrument calibration points accessible</li>
<li>☐ Spare parts list includes filters, belts or EC fan modules, seals and sensors</li>
</ul>

<h2>Common gaps found in reviews</h2>
<table>
<thead><tr><th>Gap</th><th>Consequence</th></tr></thead>
<tbody>
<tr><td>Fan selected at clean filter pressure</td><td>Airflow falls below class requirement as filters load</td></tr>
<tr><td>No dew point design condition</td><td>Humidity excursions in humid weather</td></tr>
<tr><td>Static pressure fan control only</td><td>Room airflow drifts with filter loading</td></tr>
<tr><td>Painted carbon steel drain pan</td><td>Corrosion and microbial growth</td></tr>
<tr><td>No redundancy on single fan</td><td>Total loss of class during a motor failure</td></tr>
</tbody>
</table>
<p>The room airflow numbers this checklist assumes come from <a href="<?= url('guides/cleanroom-airflow-calculation') ?>">calculating cleanroom airflow and air change rates</a>. When you are ready to configure a unit around these choices, the <a href="<?= url('design') ?>">3D configurator</a> is a practical way to test section arrangements and footprint.</p>
<?php guide_end([
    ['What filters does a cleanroom AHU need?', 'Typically a prefilter and a high-efficiency final filter in the AHU, with HEPA or ULPA filters at the room terminals. The AHU filters protect coils and extend terminal filter life; the terminal filters deliver the cleanliness class.'],
    ['Why should a cleanroom fan be selected at dirty filter pressure drop?', 'Filter resistance rises as filters load. If the fan was selected at clean filter pressure, airflow will fall below the class requirement before the filters are due for change.'],
    ['Should a cleanroom AHU control on static pressure or airflow?', 'Supply airflow should be controlled directly on a measured airflow so room air changes stay constant as filters load. Static pressure control alone lets room airflow drift.'],
]);
