<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('wildfire-smoke-filtration'); ?>
<p class="lede">Prepare an air handler for wildfire smoke before the season starts: confirm it can run MERV 13 or better filters at design airflow, stop filter bypass, stock spare filters, set up outdoor PM2.5 monitoring and write a smoke-mode operating plan for outdoor air, pressurization and filter change-out. ASHRAE Guideline 44 sets out this planning approach for commercial and institutional buildings.</p>

<h2>What wildfire smoke means for an AHU</h2>
<p>Wildfire smoke is dominated by fine particles, much of the mass below 1 µm, plus gases such as carbon monoxide, VOCs and irritants. During a smoke event, outdoor PM2.5 concentrations can be many times higher than normal for days or weeks, and smoke can travel thousands of kilometres. Buildings with only MERV 8 filtration and normal outdoor air rates pass a large share of that smoke indoors.</p>
<p>The air handler has three levers: filtration efficiency, the amount of outdoor air brought in, and building pressurization, which limits infiltration of unfiltered air. Particle filters do not remove smoke gases; gas-phase media can help with odour and some compounds but is a larger investment.</p>

<h2>Step 1: Build a smoke readiness plan</h2>
<p>ASHRAE Guideline 44 recommends a written plan prepared before smoke season. It should identify the building's systems, decision-makers, triggers for action based on outdoor air quality, and the steps for each phase: preparation, during an event and after. Assign responsibility for monitoring air quality and for authorizing changes to ventilation.</p>

<h2>Step 2: Assess each AHU's filtration capability</h2>
<ol>
<li><strong>Identify current filter efficiency</strong> and the target. MERV 13 is a common minimum during smoke events; MERV 14 to 16 performs better where the fan can support it.</li>
<li><strong>Check fan capacity.</strong> Compare the fan's available static pressure and motor capacity with the added pressure drop of higher-efficiency filters, at their dirty condition, at design airflow. Smoke loads filters quickly, so dirty resistance is realistic within days. The method is in <a href="<?= url('guides/filter-pressure-drop-initial-final') ?>">designing with initial, mid-life and final filter pressure drop</a>.</li>
<li><strong>Check the filter rack.</strong> Confirm the rack can hold deeper or different-format filters, such as 4 in pleats or 12 in V-banks, and that gaskets, clips and blank-offs are complete. At MERV 13, a few percent bypass noticeably reduces installed efficiency.</li>
<li><strong>Consider lower-velocity options.</strong> Deeper, higher-media-area filters may let a fan support MERV 13 that it could not support with 2 in pleats.</li>
<li><strong>Record which units cannot be upgraded</strong> and plan alternative measures such as portable HEPA air cleaners for the spaces they serve.</li>
</ol>

<h2>Step 3: Stock filters and materials</h2>
<p>Filter supply tightens during regional smoke events. Keep at least one full replacement set of high-efficiency filters for each unit on site before the season, and ideally a second prefilter set, since prefilters load first. Include gaskets and blank-off material.</p>

<h2>Step 4: Set up outdoor and indoor air quality monitoring</h2>
<ul>
<li>Use public air quality data (AQI and PM2.5) for the area and, where possible, a local outdoor PM2.5 sensor.</li>
<li>Install indoor PM2.5 sensors in representative spaces to confirm that measures are working.</li>
<li>Set trigger levels in the plan, for example when outdoor PM2.5 reaches a defined concentration or AQI category, to initiate smoke mode.</li>
</ul>

<h2>Step 5: Define smoke-mode operation</h2>
<ol>
<li><strong>Install high-efficiency filters</strong> if not already in place.</li>
<li><strong>Reduce outdoor air</strong> toward the minimum required for the occupancy, or further where the plan and the authority having jurisdiction permit temporary reductions. Guideline 44 discusses the tradeoff between bringing in smoky outdoor air and keeping indoor contaminants diluted; do not shut outdoor air entirely without considering occupant-generated contaminants and building pressure.</li>
<li><strong>Disable economizer operation</strong> so the unit does not bring in large amounts of smoky outdoor air on mild days.</li>
<li><strong>Maintain slight positive building pressure</strong> to limit infiltration of unfiltered air through the envelope. If outdoor air is reduced, exhaust and relief may need to be reduced too. Pressurization control is covered in <a href="<?= url('guides/building-pressurization-control') ?>">building pressurization control</a>.</li>
<li><strong>Run supply fans continuously</strong> in occupied hours, and consider extended hours, so recirculated air passes through filters more often.</li>
<li><strong>Supplement with portable HEPA cleaners</strong> in spaces served by units that cannot be upgraded or where indoor PM2.5 remains high.</li>
<li><strong>Monitor filter pressure drop daily</strong> and change filters when they reach final resistance; under heavy smoke this can happen far sooner than normal.</li>
</ol>
<p class="warn">Reducing outdoor air below code minimums is a temporary emergency measure that should be authorized in the plan and coordinated with the authority having jurisdiction and the building owner. Return to normal ventilation as soon as conditions allow.</p>

<h2>Step 6: After the event</h2>
<ul>
<li>Replace loaded prefilters and final filters.</li>
<li>Inspect outdoor air intakes, louvers and coils for ash and soot deposits; clean as needed.</li>
<li>Return outdoor air, economizer and pressurization settings to normal, and confirm through trend data that they have returned.</li>
<li>Consider a building flush with outdoor air once outdoor air quality has recovered, to remove residual smoke odour.</li>
<li>Review what worked and update the plan.</li>
</ul>

<h2>Designing new units for smoke resilience</h2>
<p>New AHUs in smoke-prone regions can be designed with a MERV 13 or higher final filter as standard, a deeper filter section that can accept MERV 14 to 16 without fan changes, a fan and motor selected for the higher filter pressure drop, and controls with a programmed smoke mode. Space for a future gas-phase stage is also worth considering; see <a href="<?= url('guides/gas-phase-carbon-filtration') ?>">gas-phase filtration</a>.</p>
<?php guide_end([
    ['What filter should I use for wildfire smoke?', 'MERV 13 is a common minimum during wildfire smoke events, and MERV 14 to 16 performs better if the fan can handle the higher pressure drop. Filters must be well sealed in their racks, and portable HEPA cleaners can supplement spaces where the AHU cannot be upgraded.'],
    ['Should I close outdoor air dampers during wildfire smoke?', 'ASHRAE Guideline 44 recommends reducing outdoor air during smoke events, often toward the minimum, while considering indoor contaminants and building pressure. Fully closing outdoor air or going below code minimums should be a planned, authorized temporary measure.'],
    ['What is ASHRAE Guideline 44?', 'ASHRAE Guideline 44 provides guidance for protecting building occupants from smoke during wildfire and prescribed burn events. It covers preparing a smoke readiness plan, assessing systems, monitoring air quality and operating buildings before, during and after smoke events.'],
]);
