<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('cleanroom-pressure-cascade'); ?>
<p class="lede">Design a pressure cascade by ranking every room by cleanliness and hazard, choosing which way air must flow through each door, assigning a differential at each step large enough to measure and hold, and then controlling supply and exhaust so those steps survive door openings and equipment changes.</p>

<h2>What the cascade has to achieve</h2>
<p>Particles move with air. If air always flows out of the cleanest room toward less clean rooms, contamination from corridors and gowning areas cannot drift into the critical space. In a containment suite, the logic reverses partly: the product or agent must not escape, so the most hazardous room is held negative and airlocks are arranged to protect both directions at once.</p>
<p>The cascade is defined by pressure differences, but the physical cause is airflow through gaps. A room sits above its neighbor only because more air is supplied than exhausted, and the surplus leaks out through door undercuts, frames and pass-throughs. Every step in this procedure ties a pressure target to that leakage flow.</p>

<h2>Step-by-step procedure</h2>
<ol>
<li><strong>Draw the room adjacency diagram.</strong> Show every room, every door, every pass-through and every wall shared with unclassified space. Label each room with its ISO class or GMP grade and any containment requirement.</li>
<li><strong>Assign flow direction at every opening.</strong> For a product-protection suite, mark arrows from cleaner to less clean. For containment, mark where the hazard must be held in and where the product must be protected, and decide whether each airlock works as a cascade, a bubble or a sink.</li>
<li><strong>Pick a reference.</strong> Choose one space, usually the corridor or the building ambient, as zero. All room pressures are reported relative to it, and differential sensors across individual doors confirm each step.</li>
<li><strong>Set the differentials.</strong> Between adjacent classified rooms of different grade, 10 to 15 Pa (0.04 to 0.06 in. w.g.) is the common design value in pharmaceutical work. Between rooms of the same grade, a smaller step, sometimes 5 Pa, is used to establish direction. Avoid steps below what your sensors can measure reliably, and avoid very large totals that make doors hard to open.</li>
<li><strong>Calculate the leakage flow for each step.</strong> Estimate each opening's effective leakage area and use Q ≈ 2,610 × A × √ΔP (cfm, ft², in. w.g.). The sum of leakage leaving a room, minus leakage entering it, is the room's required supply-minus-exhaust offset.</li>
<li><strong>Check the room airflows can deliver the offsets.</strong> Every offset must fit within the room's supply and return airflow without starving the return or overloading the supply. Total room airflows come from the separate exercise in <a href="<?= url('guides/cleanroom-airflow-calculation') ?>">calculating cleanroom airflow</a>.</li>
<li><strong>Choose the control method.</strong> Decide whether rooms hold a fixed volumetric offset, a measured pressure, or a hybrid (see below).</li>
<li><strong>Define alarms.</strong> Set alert and action limits for each differential, with time delays long enough to ignore normal door openings but short enough to catch a real loss.</li>
<li><strong>Plan door behavior.</strong> Airlocks need interlocks or procedures so both doors are not open together. Decide what the controls do while a door is open: hold position, or ignore the pressure signal for a set period.</li>
<li><strong>Write the test plan.</strong> List each differential to be verified with doors closed and the response to each door opening, and include it in commissioning.</li>
</ol>

<h2>Example cascade</h2>
<p>A sterile filling suite reached from a general corridor might be set up like this:</p>
<table>
<thead><tr><th>Room</th><th>Grade</th><th>Pressure relative to corridor</th><th>Step from previous room</th></tr></thead>
<tbody>
<tr><td>Corridor</td><td>Unclassified</td><td>0 Pa</td><td>Reference</td></tr>
<tr><td>Gowning room (Grade D side)</td><td>D</td><td>+15 Pa</td><td>15 Pa</td></tr>
<tr><td>Airlock</td><td>C</td><td>+30 Pa</td><td>15 Pa</td></tr>
<tr><td>Grade B background</td><td>B</td><td>+45 Pa</td><td>15 Pa</td></tr>
</tbody>
</table>
<p>Suppose the door between the airlock and the Grade B room has 0.25 ft² of effective leakage. At 15 Pa (0.06 in. w.g.), Q ≈ 2,610 × 0.25 × √0.06 ≈ 160 cfm flows from the Grade B room into the airlock. The Grade B room needs at least that much more supply than return, plus leakage through any other boundaries.</p>
<p class="note">Totals above roughly 50 Pa relative to the corridor make doors noticeably heavier and can cause whistling. If the suite needs many steps, consider whether every one needs the full differential.</p>

<h2>Containment airlocks: cascade, bubble and sink</h2>
<ul>
<li><strong>Cascade airlock:</strong> pressure is between the two rooms it joins. Air flows through it in one direction. Suits product-only protection.</li>
<li><strong>Bubble airlock:</strong> the airlock is higher than both neighbors. Air flows out of it into both rooms, so nothing passes from one side to the other. Used where a potent product room must stay negative to the corridor but still needs clean air entering it.</li>
<li><strong>Sink airlock:</strong> the airlock is lower than both neighbors. Air from both rooms flows into it and is exhausted. Used to contain a hazardous room while protecting a cleaner corridor.</li>
</ul>
<p>The choice comes from the owner's contamination control strategy and, for hazardous products, the occupational exposure assessment.</p>

<h2>Volumetric offset vs direct pressure control</h2>
<table>
<thead><tr><th>Method</th><th>How it works</th><th>Strengths</th><th>Weaknesses</th></tr></thead>
<tbody>
<tr><td>Volumetric offset</td><td>Hold a fixed supply-minus-exhaust airflow</td><td>Stable during door openings; fast; simple</td><td>Pressure drifts if room leakage changes over time</td></tr>
<tr><td>Direct pressure</td><td>Modulate supply or exhaust to hold measured differential</td><td>Holds the actual target</td><td>Unstable when doors open; very sensitive to sensor noise</td></tr>
<tr><td>Cascaded (hybrid)</td><td>Offset loop with a slow pressure loop trimming the offset</td><td>Stable and accurate</td><td>More tuning effort</td></tr>
</tbody>
</table>
<p>Most pharmaceutical suites use a volumetric or hybrid approach, with direct pressure sensors used for monitoring and alarm. The central air handler should supply a steady duct pressure so room terminals can hold their airflows; when a cascade fails in operation, the causes and fixes overlap with those in <a href="<?= url('guides/cleanroom-particle-count-failures') ?>">troubleshooting cleanroom particle count failures</a>. Grade definitions and regulatory context are in <a href="<?= url('guides/gmp-pharma-ahu-design') ?>">GMP pharmaceutical AHU design principles</a>.</p>
<?php guide_end([
    ['What pressure difference should be between cleanroom grades?', 'A differential of 10 to 15 Pa (about 0.04 to 0.06 in. w.g.) between adjacent rooms of different grade is the common design value. Rooms of the same grade often use a smaller step just to establish airflow direction.'],
    ['What is the difference between a bubble and a sink airlock?', 'A bubble airlock is held at a higher pressure than both rooms it connects, so air flows out of it both ways. A sink airlock is held lower than both, so air flows into it from both rooms and is exhausted. Both prevent air passing directly between the rooms.'],
    ['Should cleanroom pressure be controlled directly or by airflow offset?', 'Most designs control a fixed airflow offset, sometimes trimmed slowly by a pressure loop, and use pressure sensors for monitoring and alarms. Direct pressure control alone tends to become unstable when doors open.'],
]);
