<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('k-12-ahu-design-checklist'); ?>
<p class="lede">Use this checklist when reviewing a school air handler design at schematic, design development and construction document stages. It covers the five areas that most often cause problems in K-12 buildings: ventilation, acoustics, filtration, security and maintainability.</p>

<h2>Project basis</h2>
<ul>
<li>[ ] School board or district design standard obtained and current edition noted.</li>
<li>[ ] Ventilation standard and edition identified (ASHRAE 62.1 or local code), plus any board requirement above code.</li>
<li>[ ] Energy code identified (ASHRAE 90.1, NECB or local), and any board energy targets.</li>
<li>[ ] Acoustic criteria agreed, including whether ANSI/ASA S12.60 applies.</li>
<li>[ ] Space program with occupancy for classrooms, gym, cafeteria, library, music, science, shops and admin.</li>
<li>[ ] Use as an emergency shelter or community facility confirmed; this may affect redundancy and emergency power.</li>
</ul>

<h2>Ventilation</h2>
<ul>
<li>[ ] Zone outdoor air calculated for each space type, including system ventilation efficiency for multiple-zone systems.</li>
<li>[ ] Outdoor airflow measuring station on each AHU intake, reporting to the BAS.</li>
<li>[ ] Minimum outdoor air maintained at reduced supply airflow (VAV systems).</li>
<li>[ ] Demand-controlled ventilation provided for gym, cafeteria, auditorium and multipurpose spaces.</li>
<li>[ ] Capability to increase outdoor air above minimum for illness season or wildfire-free days, with coil capacity to match.</li>
<li>[ ] Exhaust for science labs, art rooms (kilns), shops and kitchens independent and coordinated with makeup air.</li>
<li>[ ] Energy recovery provided where required by energy code or justified by life cycle cost, with exhaust classes checked.</li>
<li>[ ] Freeze protection on preheat and recovery devices for design winter conditions.</li>
<li>[ ] Outdoor air intakes away from bus loops, parking, kitchen exhaust and loading docks.</li>
</ul>
<p>Background on system choices and outdoor air rates is in <a href="<?= url('guides/school-ahu-ventilation-design') ?>">K-12 school air handler ventilation design</a>.</p>

<h2>Acoustics</h2>
<ul>
<li>[ ] Air handlers located away from classrooms; no units above core learning spaces.</li>
<li>[ ] Octave-band sound power data requested for supply, return and casing radiated paths.</li>
<li>[ ] Room sound levels calculated for the worst-case classroom on each system.</li>
<li>[ ] Silencers on supply and return paths, including return transfer openings.</li>
<li>[ ] Duct velocities limited near classrooms; terminal units located outside learning spaces.</li>
<li>[ ] Mechanical room walls and penetrations detailed for sound isolation.</li>
<li>[ ] Vibration isolation suited to structure, especially for upper-floor or rooftop units.</li>
<li>[ ] Field measurement of background noise planned at acceptance.</li>
</ul>
<p>The standard and its implications are covered in <a href="<?= url('guides/school-acoustics-ansi-s12-60') ?>">classroom acoustics and ANSI S12.60</a>.</p>

<h2>Filtration</h2>
<ul>
<li>[ ] Filter efficiency specified (MERV 13 is a common target) and agreed with the board.</li>
<li>[ ] Fan selected for final (dirty) filter pressure drop.</li>
<li>[ ] Filter racks able to accept deeper or higher-efficiency filters in future.</li>
<li>[ ] Gasketed, positively latched frames; casing sealed to prevent bypass.</li>
<li>[ ] Differential pressure gauge or transmitter on each filter bank, with BAS alarm.</li>
<li>[ ] Prefilters provided to extend final filter life, if the board's maintenance plan supports it.</li>
<li>[ ] Filter sizes standardized across the school to simplify stock.</li>
</ul>

<h2>Security and safety</h2>
<ul>
<li>[ ] Mechanical rooms locked and alarmed; not accessible from student areas.</li>
<li>[ ] Rooftop units and roof access secured from student and public access.</li>
<li>[ ] Outdoor air intakes at height or protected so substances cannot be introduced at grade.</li>
<li>[ ] Ability to shut down outdoor air quickly from the main office or BAS in an emergency (for example, a nearby chemical release), agreed with the board's emergency plan.</li>
<li>[ ] Exposed sensors in corridors and gyms guarded or tamper-resistant.</li>
<li>[ ] BAS on a secure network segment, not accessible from student networks.</li>
</ul>

<h2>Maintainability</h2>
<ul>
<li>[ ] Access sections at filters, coils, humidifiers, fans and recovery devices, with doors on the service side.</li>
<li>[ ] Clearance in the mechanical room for coil pull and fan replacement.</li>
<li>[ ] Double-wall casing with solid interior liners; no exposed insulation in the airstream.</li>
<li>[ ] Sloped stainless drain pans under cooling coils and condensing components, with traps sized for fan static.</li>
<li>[ ] Direct-drive fans or fan arrays to eliminate belt maintenance, if consistent with the board's preference.</li>
<li>[ ] Standard motors, drives and controls compatible with board spares and service contracts.</li>
<li>[ ] Lights and receptacles in access sections.</li>
<li>[ ] Operation and maintenance manuals, training and spare filters included in the contract.</li>
</ul>
<p>Filter access and casing details are reviewed in more depth in <a href="<?= url('guides/access-section-service-checklist') ?>">access section service checklist</a>.</p>

<p class="note">Ask the board's maintenance staff to review this section. They know which filters, belts and drain pans get neglected in their schools, and their comments are often more useful than any generic checklist.</p>

<h2>Controls and energy</h2>
<ul>
<li>[ ] Occupied, unoccupied, summer and holiday schedules programmed for school calendar.</li>
<li>[ ] Optimal start and morning warm-up configured for heavy buildings.</li>
<li>[ ] Supply air temperature and static pressure reset sequences included.</li>
<li>[ ] Economizer with appropriate high limit for the climate.</li>
<li>[ ] Trending of outdoor airflow, CO₂ and supply conditions for ventilation reporting to the board.</li>
<li>[ ] Alarms for filter pressure drop, freeze protection, fan failure and low outdoor airflow.</li>
</ul>

<h2>Construction and handover</h2>
<ul>
<li>[ ] Factory testing of fans and controls before shipment.</li>
<li>[ ] Testing, adjusting and balancing including outdoor air measurement per AHU.</li>
<li>[ ] Functional testing of all sequences, including DCV and emergency outdoor air shutdown.</li>
<li>[ ] Training for custodial and maintenance staff.</li>
<li>[ ] Seasonal follow-up visit planned for first heating and cooling seasons.</li>
</ul>
<p>Scheduling the work to fit a summer break is covered separately. When the checklist is complete, our <a href="<?= url('design') ?>">3D configurator</a> can help visualize access sections and component layout.</p>
<?php guide_end([
    ['What should a school AHU design review include?', 'At minimum, ventilation calculations and outdoor air measurement, acoustic design for classroom criteria, filtration level and bypass prevention, security of mechanical spaces and intakes, and maintainability features such as access sections and drain pans.'],
    ['Do school air handlers need outdoor airflow measurement?', 'It is strongly recommended. An outdoor airflow station lets the BAS hold and report actual ventilation, which many school boards now require for verification.'],
    ['Why are fan arrays common in new school air handlers?', 'They eliminate belts, offer partial redundancy if one fan fails during the school year, and can reduce low-frequency noise. Many boards prefer them for maintainability.'],
]);
