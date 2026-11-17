<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-selection-checklist'); ?>
<p class="lede">Before anyone runs fan selection software for a custom air handler, confirm the duty points, the air conditions, the efficiency and sound targets and the redundancy and layout constraints. Most fan problems found at test and balance trace back to one of these items being missing or wrong at selection time.</p>

<h2>How to use this checklist</h2>
<p>Work through each group with the design engineer and the owner's representative before requesting selections, and attach the completed list to the request for quotation so every vendor selects against the same basis. Motor, drive and electrical items are intentionally excluded; those belong in the motor and drive specification. Where an item points to a design decision covered elsewhere, the link goes to the guide that covers it.</p>

<h2>1. Duty points</h2>
<ul>
<li>Design airflow in actual cfm (or L/s) at the fan, not at the diffusers. Include duct leakage and any airflow diverted through energy recovery purge or bypass.</li>
<li>Total static pressure at design airflow, broken into internal (unit) and external (ductwork) components. See <a href="<?= url('guides/total-static-pressure-budget') ?>">total static pressure budget</a>.</li>
<li>Filter condition the pressure is based on: clean, mid-life or final. State it explicitly.</li>
<li>Wet or dry cooling coil pressure drop, whichever governs.</li>
<li>System effect allowances for fan inlet and outlet conditions inside the unit.</li>
<li>Minimum airflow point for VAV systems, and the static pressure at that point given the control strategy.</li>
<li>Any other operating modes: economizer, smoke control, night setback, purge, occupied/unoccupied in labs or ORs.</li>
<li>Whether design margin has already been added upstream, to avoid stacking margins. See <a href="<?= url('guides/design-margins-without-oversizing') ?>">design margins without oversizing</a>.</li>
</ul>

<h2>2. Air conditions and density</h2>
<ul>
<li>Site elevation.</li>
<li>Air temperature at the fan for each duty point. A fan upstream of heating sees cold outdoor air; a fan downstream of a cooling coil sees saturated air.</li>
<li>Coldest air the fan will see, for power and motor checks.</li>
<li>Hottest air the fan will see, for wheel material and speed derating.</li>
<li>Whether the pressures given are at actual or standard density, so the vendor knows which correction applies.</li>
<li>Airstream contaminants: moisture, corrosive fumes, grease, particulate, which affect wheel type and material.</li>
</ul>

<h2>3. Efficiency and energy targets</h2>
<ul>
<li>Minimum FEI at the design duty point, if required by code, utility program or owner standard.</li>
<li>Fan power limitation budget under the applicable energy code and the share of it this fan may use.</li>
<li>Representative part-load points (for example, 50% and 75% airflow) at which efficiency should also be reported.</li>
<li>Operating hours and load profile if life-cycle cost will be compared between options.</li>
<li>Required reporting basis: brake horsepower at the shaft and electrical input power for the fan, motor and drive combination.</li>
<li>Whether housed or plenum fans are acceptable, and whether static or total efficiency is to be reported.</li>
</ul>

<h2>4. Sound</h2>
<ul>
<li>Room noise criteria (NC, RC or dBA) for the spaces served and adjacent to the mechanical room.</li>
<li>Whether sound power must be reported by octave band at inlet, discharge and casing radiated paths.</li>
<li>Duty points at which sound data are required: design, failure mode and minimum airflow.</li>
<li>Rating standard for sound data, for example AMCA 300 for fan sound power testing.</li>
<li>Limits on blade-pass tones at sensitive frequencies, if the acoustician has identified any.</li>
</ul>

<h2>5. Redundancy and arrangement</h2>
<ul>
<li>Single fan, dual fans or fan array.</li>
<li>Required redundancy level and the airflow and pressure that must be maintained in failure mode. The comparison of levels is in <a href="<?= url('guides/fan-array-redundancy-n1-vs-n2') ?>">N+1 vs N+2 redundancy</a>.</li>
<li>Recirculation prevention method for arrays: backdraft dampers, isolation dampers, blank-off plates or none.</li>
<li>Draw-through or blow-through position.</li>
<li>Return fan, relief fan or neither, and how they will be controlled relative to the supply fan.</li>
<li>Discharge direction(s) and the location of duct openings in the fan section.</li>
</ul>

<h2>6. Physical and construction limits</h2>
<ul>
<li>Maximum unit length, width and height, and maximum shipping section size.</li>
<li>Largest module that can pass through the building's access route, for retrofits.</li>
<li>Wheel blade type acceptable: airfoil, backward inclined or backward curved.</li>
<li>Wheel material and coating if the airstream is corrosive or hot.</li>
<li>Fan class or maximum speed limit to be respected in all modes.</li>
<li>Balance grade and vibration limits required at the factory.</li>
<li>Vibration isolation approach: internal isolation of the fan or isolation of the whole unit.</li>
<li>Cleanability and access needs, for example washdown, hygienic construction or wheel removal path.</li>
</ul>

<h2>7. Measurement and verification</h2>
<ul>
<li>Airflow measurement method: inlet cone taps, airflow station or none.</li>
<li>Certification required: AMCA certified ratings for air performance and sound, or AHRI 430 certification for the air handler fan section where applicable.</li>
<li>Factory run test and whether the owner will witness it.</li>
<li>Field test method and acceptance tolerance for airflow.</li>
</ul>

<h2>8. Final review before issuing</h2>
<ol>
<li>Every duty point has airflow, static pressure, temperature and density stated.</li>
<li>Failure-mode and minimum points are listed, not just design.</li>
<li>Efficiency and sound reporting requirements are clear enough that vendor selections can be compared line for line.</li>
<li>No item conflicts with another, for example a length limit that rules out the redundancy requested.</li>
</ol>
<p class="note">If a vendor's selection report omits any of these items, ask for it before comparing prices. A cheaper selection that ignored the cold-air case or the failure-mode point is not really cheaper.</p>
<?php guide_end([
    ['What information is needed to select a fan for an air handler?', 'At minimum: design airflow, total static pressure with its breakdown and filter basis, air temperature and elevation, efficiency and sound requirements, redundancy needs, and physical limits on the fan section.'],
    ['Should fan selections be checked at more than one operating point?', 'Yes. Check the design point, the minimum airflow point, the failure-mode point for redundant arrays and the coldest air condition, because each can govern a different part of the selection.'],
    ['Why does air temperature matter for fan selection?', 'Air density changes with temperature and elevation, which changes the pressure a fan develops and the power it needs. Hot air can also limit wheel material and speed.'],
    ['What should a fan selection report include?', 'It should show airflow, static pressure, speed, efficiency, brake horsepower, sound power by octave band, wheel size and class at each requested operating point, with the density basis stated.'],
]);
