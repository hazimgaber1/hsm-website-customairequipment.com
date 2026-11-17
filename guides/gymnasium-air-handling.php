<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('gymnasium-air-handling'); ?>
<p class="lede">A school or community gym can go from empty to a few dozen athletes to a thousand spectators in the same week. Design the air handler for the largest event you must serve, then give it the airflow turndown, outdoor air control and supply strategy to run efficiently and comfortably at the other two conditions.</p>

<h2>Step 1: Define the occupancy scenarios</h2>
<p>Before any load calculation, list how the room is actually used. Ask the owner or school board for:</p>
<ul>
<li><strong>Physical education:</strong> class size, hours per day, and typical activity.</li>
<li><strong>Competition:</strong> number of players plus spectator capacity of the bleachers.</li>
<li><strong>Assembly:</strong> graduations, exams, community events with chairs on the floor. This is often the true peak occupancy.</li>
<li><strong>Unoccupied:</strong> evenings, weekends and holidays when the gym may be empty for days.</li>
</ul>
<p>Write these scenarios into the basis of design. They drive both the peak capacity and the control sequences.</p>

<h2>Step 2: Calculate peak loads and ventilation</h2>
<p>Run loads separately for the athletic and assembly scenarios. Athletes produce far more heat per person than seated spectators, but spectators come in much larger numbers.</p>
<p>For ventilation, use the ASHRAE 62.1 rates for the applicable occupancy categories: gyms with sports play have a high per-area component, while spectator areas are dominated by the per-person rate. Calculate both and size the outdoor air path for the higher one. In practice the assembly case usually governs outdoor air, and the athletic case may govern sensible cooling in a gym without bleachers.</p>
<p class="note">If the gym is designated as an emergency shelter or a large assembly occupancy, check local code for additional requirements on ventilation, smoke control or emergency power.</p>
<h3>Worked check</h3>
<p>Consider a 9,000 ft² (836 m²) gym with bleachers for 600. Applying the per-person and per-area rates for spectator areas from the adopted 62.1 edition to 600 occupants yields a breathing-zone outdoor air requirement several times the requirement for a 40-student PE class in the same room. That ratio tells you immediately that the outdoor air damper, preheat coil and cooling coil must handle a very wide range, and that fixed minimum outdoor air would waste a lot of energy on ordinary school days.</p>

<h2>Step 3: Choose the unit type and size it</h2>
<p>Most gyms are served by a dedicated single-zone air handler, which avoids tying the gym's large and erratic load to a VAV system that serves classrooms. Size it as follows:</p>
<ol>
<li>Set supply airflow from the larger sensible load and a supply temperature difference suited to the outlet type. High sidewall or ceiling outlets in a tall gym tolerate a larger difference than low-level displacement outlets.</li>
<li>Select the cooling coil for the assembly case with full outdoor air fraction at design summer conditions. This is often the largest latent load the unit will see.</li>
<li>Select the heating coil for the worst winter case. In cold climates that is often the assembly case with high outdoor air, not the empty gym.</li>
<li>Include energy recovery where outdoor air is large; most energy codes require it above certain outdoor air fractions and flows.</li>
<li>Specify variable-speed fans. Airflow should be able to drop to 30% to 50% of design during light use.</li>
</ol>

<h2>Step 4: Control outdoor air to occupancy</h2>
<p>Demand-controlled ventilation is the most effective energy measure in a gym. A CO₂ sensor at breathing height, protected from balls, resets outdoor air between the area-based minimum and the full assembly rate. Detailed DCV sequences are in <a href="<?= url('guides/demand-controlled-ventilation-co2') ?>">demand-controlled ventilation with CO₂</a>.</p>
<p>Supplement the CO₂ signal with a schedule input. Before a scheduled event, the unit can increase outdoor air and pre-cool or pre-heat so that conditions are good when the doors open, rather than chasing CO₂ rise after the crowd arrives.</p>
<p class="warn">CO₂ lags occupancy. In a room with a large volume per person, CO₂ may take 30 minutes or more to rise after a crowd enters. A schedule-based pre-ventilation step prevents a stuffy first period.</p>

<h2>Step 5: Plan air distribution for a tall room</h2>
<p>Gym ceilings are high, often 24 ft (7 m) or more, so stratification is common. Options include:</p>
<ul>
<li><strong>High sidewall supply with long-throw nozzles</strong> aimed to reach the floor in heating mode. Variable-geometry or dual-position nozzles help switch between heating and cooling patterns.</li>
<li><strong>Low-level displacement outlets</strong> along walls, combined with high return. Efficient in cooling, but outlets must be protected from impact.</li>
<li><strong>Destratification fans</strong> to push warm air down in winter.</li>
</ul>
<p>Keep air velocity at the playing surface low. Badminton and volleyball players notice drafts that would go unnoticed elsewhere. Make sure all grilles and sensors are rated or guarded for ball impact.</p>

<h2>Step 6: Address noise and durability</h2>
<p>Gyms are loud when full but are also used for assemblies, music and exams. Treat the air handler as you would any classroom-adjacent unit: put it outside the gym footprint if possible, and avoid low-frequency rumble through the structure. Specify robust construction: galvanized or coated casings, filter racks that survive frequent access, and fan sections that can handle repeated speed changes.</p>

<h2>Step 7: Commission all scenarios</h2>
<p>Functional testing should simulate each scenario: empty, PE class and full assembly. Verify that outdoor air reaches its maximum when CO₂ or the schedule calls for it, that the heating coil maintains discharge temperature at the high outdoor air fraction, and that the unit returns to minimum afterward. Many gym complaints come from sequences that were only tested at one operating point.</p>
<p>Gyms used for formal performances have different acoustic needs; see <a href="<?= url('guides/auditorium-theater-air-handling') ?>">auditorium and theater air handling</a>. The broader school checklist is in <a href="<?= url('guides/k-12-ahu-design-checklist') ?>">K-12 AHU design checklist</a>.</p>
<?php guide_end([
    ['Should a gym share an air handler with classrooms?', 'Usually not. The gym\'s large and erratic load makes it hard to control on a shared VAV system. A dedicated single-zone unit with variable speed fans and demand-controlled ventilation is the common approach.'],
    ['What occupancy should a gym be designed for?', 'Design for the largest event the room must serve, which is often a graduation or assembly with chairs on the floor, and confirm the number with the owner. Then make sure the unit turns down efficiently for ordinary PE classes.'],
    ['How do you prevent stratification in a high gym?', 'Use supply nozzles that can direct warm air down in heating mode, low-level displacement outlets for cooling, or destratification fans. Return air is usually taken high in cooling and can be taken low in heating.'],
]);
