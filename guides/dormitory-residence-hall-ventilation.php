<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('dormitory-residence-hall-ventilation'); ?>
<p class="lede">Residence halls need steady outdoor air to every bedroom, continuous exhaust from washrooms, and controllable comfort for students who keep unpredictable hours. Most new halls deliver ventilation either directly to each room through a dedicated outdoor air system or indirectly through a corridor supply that rooms draw from; the direct approach is now the stronger choice for most projects.</p>

<h2>How residence halls differ from other buildings</h2>
<p>A residence hall combines residential and institutional features. Rooms are occupied around the clock, often at higher density than an apartment, and students rarely adjust their own ventilation. Washrooms may be in every suite or grouped as community bathrooms on each floor. Lounges, laundry rooms, study spaces and kitchens add loads that peak at different times of day.</p>
<p>Universities also operate these buildings for decades and expect quiet, low-maintenance systems that are easy to service when students are away. Campus standards often specify equipment types and control platforms, which should be reviewed before system selection; see <a href="<?= url('guides/university-campus-design-standards') ?>">university campus design standards</a>.</p>

<h2>Approach 1: DOAS ducted to each room</h2>
<p>A dedicated outdoor air system conditions 100% outdoor air at a central air handler and ducts it to every bedroom or suite. Washroom exhaust is collected centrally and passes through the same unit's energy recovery device before discharge. Each room has its own heating and cooling terminal, commonly a fan coil, water-source heat pump, radiant panel or chilled beam.</p>
<p>Advantages:</p>
<ul>
<li>Every room receives a known, measured quantity of outdoor air regardless of door position or corridor pressure.</li>
<li>Outdoor air can be dehumidified centrally, so room terminals mainly handle sensible load and stay dry.</li>
<li>Energy recovery between exhaust and outdoor air is straightforward because both streams pass through one unit.</li>
<li>Room terminals can be switched off or set back during breaks without affecting ventilation to occupied rooms.</li>
</ul>
<p>Design points to watch: constant-airflow regulators at each room keep delivery stable as other rooms are adjusted; duct risers must be coordinated with fire separations; and supply air should be delivered near room-neutral temperature so it does not cause drafts when the room terminal is off. For a full description of the DOAS principle, see <a href="<?= url('guides/100-percent-outdoor-air-ahu-design') ?>">100% outdoor air AHU design</a>.</p>

<h2>Approach 2: Corridor supply with undercut doors</h2>
<p>The older approach supplies conditioned outdoor air into the corridor. Room or suite exhaust fans draw that air under the entry door and out through the washroom exhaust. Corridor supply is simpler to install and needs less ductwork, but it has known weaknesses:</p>
<ul>
<li>Fire and smoke codes increasingly restrict corridors from being used as air plenums, and door undercuts may be limited.</li>
<li>Weatherstripping or acoustic seals on doors cut the transfer path, starving rooms of outdoor air.</li>
<li>Odors, smoke from cooking, and airborne contaminants move from rooms to the corridor whenever pressure relationships reverse.</li>
<li>Actual outdoor air delivered to each room is hard to verify.</li>
</ul>
<p>Some halls use a hybrid: corridor supply to maintain corridor pressure and comfort, plus ducted outdoor air to each room. That gives a positive corridor relative to rooms for odor control while still guaranteeing room ventilation.</p>

<h2>Comparing the approaches</h2>
<table>
<thead><tr><th>Criterion</th><th>DOAS to each room</th><th>Corridor supply</th></tr></thead>
<tbody>
<tr><td>Ventilation verification</td><td>Measured per room</td><td>Depends on door undercuts and pressures</td></tr>
<tr><td>Odor and smoke transfer</td><td>Limited, rooms are balanced</td><td>Higher risk when doors open</td></tr>
<tr><td>Ductwork and riser space</td><td>More</td><td>Less</td></tr>
<tr><td>Energy recovery</td><td>Easy, central</td><td>Possible if exhaust is centralized</td></tr>
<tr><td>Code compatibility</td><td>Generally straightforward</td><td>Check corridor plenum and door rules</td></tr>
</tbody>
</table>
<p>Pressurization of corridors in market apartment buildings follows a related but distinct logic driven by building code and calculation; it is covered in <a href="<?= url('guides/murb-corridor-pressurization-calculation') ?>">MURB corridor pressurization</a>.</p>

<h2>The air handler for a residence hall</h2>
<p>A residence hall DOAS unit typically includes outdoor air and exhaust air paths, an energy recovery wheel or plate, filters on both streams, preheat in cold climates, a cooling coil with reheat or hot gas reheat for dehumidification, and supply and exhaust fans on variable-speed drives. Because the unit runs continuously, efficiency at the steady design flow matters more than turndown.</p>
<ul>
<li><strong>Exhaust classification.</strong> Washroom exhaust is generally allowed through an enthalpy wheel, but kitchen exhaust from student kitchens usually is not. Keep kitchen exhaust separate.</li>
<li><strong>Frost control.</strong> In cold Canadian regions, the recovery device will frost on design winter days. Plan a defrost or preheat strategy that maintains supply airflow, since rooms cannot go without ventilation overnight.</li>
<li><strong>Redundancy.</strong> A residence hall cannot be evacuated for a failed fan. Fan arrays or dual fans help keep the building ventilated through a failure.</li>
<li><strong>Acoustics.</strong> Rooms are bedrooms. Specify room NC targets suited to sleeping and keep duct velocities to rooms low.</li>
</ul>

<h2>Exhaust, laundry and kitchens</h2>
<p>Common laundry rooms need significant exhaust and makeup air for dryers; they should not rely on room transfer air. Shared kitchens and cooking spaces need their own exhaust, separated from the recovery device, and makeup air sized to suit. Garbage rooms and janitor closets should be under negative pressure.</p>
<p>With these pieces in place, a residence hall can deliver consistent fresh air to every student. Our <a href="<?= url('products/custom-air-handlers') ?>">custom air handlers</a> page explains the DOAS configurations we build for this kind of building.</p>
<?php guide_end([
    ['Is corridor supply acceptable for dormitories?', 'It is still used, but codes increasingly restrict corridors as air plenums and door seals can starve rooms of air. Ducting outdoor air directly to each room is more reliable and easier to verify.'],
    ['Can washroom exhaust go through an energy recovery wheel?', 'Washroom exhaust is generally permitted through recovery devices, subject to the exhaust air class rules in ASHRAE 62.1 and local code. Kitchen and other contaminated exhaust should be kept separate.'],
    ['How do you keep a residence hall ventilated during a fan failure?', 'Use a fan array or redundant fans in the DOAS so the remaining fans keep supplying most of the design airflow. Because rooms are occupied around the clock, a single-fan unit is a weak point.'],
]);
