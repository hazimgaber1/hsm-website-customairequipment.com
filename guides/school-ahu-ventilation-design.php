<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('school-ahu-ventilation-design'); ?>
<p class="lede">A K-12 air handler has to deliver code-minimum outdoor air to densely packed classrooms, filter it well, and do both for decades with modest maintenance budgets. Start from ASHRAE 62.1 (or the ventilation code your jurisdiction adopts), choose a system type that can actually hold that outdoor air at part load, and give the unit a filter section that can be upgraded.</p>

<h2>Why classrooms are a ventilation problem</h2>
<p>A typical classroom packs 25 to 35 people into 800 to 1,000 ft² (75 to 95 m²). That occupant density is several times that of an office, and most of the outdoor air requirement is driven by the people component rather than the floor area. The result is that a school air handler often brings in a much higher outdoor air fraction than a commercial building of the same size, which pushes heating, cooling and dehumidification loads up and makes freeze protection a real design issue in northern climates.</p>
<p>Occupancy is also highly variable. Classrooms empty at recess and lunch, gyms and cafeterias fill for an hour at a time, and the whole building runs near zero occupancy for evenings, weekends and summer. A good school ventilation design matches outdoor air to that pattern instead of running peak ventilation all day.</p>

<h2>Setting the outdoor air rate</h2>
<p>Under the ASHRAE 62.1 Ventilation Rate Procedure, breathing-zone outdoor air is the sum of a per-person rate and a per-area rate, adjusted for zone air distribution effectiveness. For classrooms the per-person term dominates. Once zone values are known, a multiple-zone recirculating system must also account for system ventilation efficiency, which can push the outdoor air intake well above the simple sum of zone requirements when one or two zones (often classrooms) have a high outdoor air fraction. The step-by-step method is covered in our guide to the <a href="<?= url('guides/ashrae-62-1-ventilation-rate-procedure') ?>">ASHRAE 62.1 Ventilation Rate Procedure</a>.</p>
<p class="note">Rates and adjustments change between editions of ASHRAE 62.1 and the mechanical codes that reference it. Use the edition adopted in your jurisdiction, and in Canada confirm whether the provincial building code or a school board standard sets something higher.</p>
<p>Many school boards now ask for ventilation above code minimum, or for the ability to increase it during respiratory illness season. If that is a possibility, size the outdoor air damper, preheat coil and cooling coil for the higher rate from the start. Retrofitting more outdoor air capacity into a unit sized for minimum is expensive.</p>

<h2>System options for schools</h2>
<p>Three system families cover most new and renovated schools:</p>
<ul>
<li><strong>Single-zone units per classroom wing or space.</strong> Simple, but each unit carries its own outdoor air path and controls. Common for gyms, cafeterias and auditoriums.</li>
<li><strong>Central VAV with reheat.</strong> One or more air handlers serve many classrooms through VAV boxes. Outdoor air control at part load is the weak point: as boxes throttle, the critical zone can fall below its minimum unless the controls reset intake properly.</li>
<li><strong>Dedicated outdoor air system (DOAS) plus terminal units.</strong> A DOAS conditions and delivers ventilation air directly to each classroom, while fan coils, chilled beams, radiant panels or heat pumps handle the space sensible load. Ventilation is decoupled from thermal load, so each room gets its outdoor air regardless of heating or cooling demand.</li>
</ul>
<p>DOAS has become the default for many school boards because it makes outdoor air delivery verifiable room by room and pairs naturally with energy recovery. The tradeoffs between a DOAS and other packaged approaches are discussed in <a href="<?= url('guides/ahu-vs-rtu-vs-doas') ?>">AHU vs RTU vs DOAS</a>.</p>

<h3>DOAS details that matter in schools</h3>
<ul>
<li>Deliver outdoor air dehumidified to a dew point low enough to handle the latent load of a full classroom, so terminal units can run dry.</li>
<li>Include energy recovery sized for the full design outdoor airflow, with frost control suited to the climate. In cold Canadian regions, plan for defrost or a preheat strategy on the recovery device.</li>
<li>Provide a constant-volume or pressure-independent terminal at each classroom so outdoor air holds steady as other rooms are reset.</li>
<li>Consider demand-controlled ventilation by zone for spaces with highly variable occupancy, such as gyms, cafeterias and multipurpose rooms.</li>
</ul>

<h2>Filtration</h2>
<p>School filtration has moved from MERV 8 as a baseline to MERV 13 as a common target, and many boards now specify MERV 13 or better for any new unit. Higher efficiency means higher pressure drop, so the fan, motor and filter frame must be selected for the final (dirty) filter resistance, not the clean one. Specify a filter rack that can accept 4 in. to 12 in. (100 to 300 mm) deep media so an upgrade does not require a casing change.</p>
<p>Two practical points are easy to miss:</p>
<ul>
<li><strong>Bypass.</strong> A MERV 13 filter in a leaky frame performs like a much lower rating. Ask for gasketed, positively latched frames and sealed casing penetrations.</li>
<li><strong>Access.</strong> School maintenance staff change filters on a schedule that is often stretched. Side-access housings with clear walk-in space and a differential pressure gauge per bank make it more likely that changes happen on time.</li>
</ul>
<p>Rating systems, life-cycle costs and frame selection are treated in the filtration guides, starting with <a href="<?= url('guides/merv-ratings-ashrae-52-2') ?>">MERV ratings and ASHRAE 52.2</a>.</p>

<h2>Air handler features worth specifying</h2>
<p>Beyond airflow and capacity, a few construction features determine how well a school unit performs over a 25-year life:</p>
<ul>
<li><strong>Double-wall casing</strong> with a solid interior liner, so insulation is not exposed to the airstream and the unit can be cleaned.</li>
<li><strong>Sloped, drainable stainless drain pans</strong> under cooling coils and any recovery device that condenses.</li>
<li><strong>Fan arrays or direct-drive plenum fans</strong> to remove belt maintenance and provide partial redundancy if a fan fails during the school year.</li>
<li><strong>Airflow measuring stations</strong> on the outdoor air intake so the building automation system can report and trend actual ventilation.</li>
<li><strong>Freeze protection</strong> on preheat and cooling coils, especially for 100% outdoor air units that see design winter temperatures every season.</li>
</ul>
<p>Acoustic criteria for classrooms are strict and affect where the air handler sits; they are covered separately in <a href="<?= url('guides/school-acoustics-ansi-s12-60') ?>">Classroom Acoustics and ANSI S12.60</a>. If you are working through a school project and want a unit configured around these requirements, our <a href="<?= url('products/custom-air-handlers') ?>">custom air handlers</a> page explains what can be built.</p>
<?php guide_end([
    ['How much outdoor air does a classroom need?', 'Under ASHRAE 62.1 the classroom requirement is a per-person rate plus a per-area rate, adjusted for air distribution effectiveness. Because classrooms are densely occupied, the per-person part dominates. Use the edition of 62.1 or the mechanical code adopted in your jurisdiction, and check whether the school board requires more.'],
    ['Is a DOAS better than VAV for schools?', 'A DOAS separates ventilation from heating and cooling, so each classroom receives its outdoor air regardless of thermal load. VAV can work but needs careful outdoor air reset to avoid starving the critical zone at part load. Many school boards now prefer DOAS for that reason.'],
    ['What MERV rating should a school air handler use?', 'MERV 13 is a common target for new school units, and some boards require it. Size the fan for the final filter pressure drop and specify gasketed frames so the filter is not bypassed.'],
]);
