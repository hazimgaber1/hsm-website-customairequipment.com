<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('iso-14644-cleanroom-classes'); ?>
<p class="lede">ISO 14644-1 classifies cleanrooms from ISO Class 1 (cleanest) to ISO Class 9 by the maximum number of airborne particles allowed per cubic metre at specified particle sizes. Each step up the scale allows ten times more particles.</p>

<h2>How the classification works</h2>
<p>ISO 14644-1 defines cleanliness only by airborne particle concentration. It does not set air change rates, filter types, pressure differentials or temperature limits. Those are design decisions made to achieve the class, and other parts of the ISO 14644 series and industry guidance cover them.</p>
<p>Each class has a maximum concentration for one or more particle sizes, from 0.1 µm up to 5 µm. The limits come from a single formula:</p>
<p class="formula">Cn = 10^N × (0.1 ÷ D)^2.08</p>
<p>Here Cn is the maximum allowed concentration of particles equal to or larger than the considered size (particles per m³), N is the ISO class number, and D is the particle size in micrometres. The formula explains why the classes are a factor of ten apart and why there are many more small particles allowed than large ones at any given class.</p>
<p class="note">Concentrations are cumulative: a limit "at 0.5 µm" counts every particle 0.5 µm and larger, not only those exactly 0.5 µm.</p>

<h2>Particle limits for common classes</h2>
<p>The table below lists the maximum concentrations in particles per cubic metre for the classes most often specified in North American pharmaceutical, medical device, electronics and research facilities. Values are from ISO 14644-1:2015; blank cells are sizes the standard does not use for that class.</p>
<table>
<thead><tr><th>ISO class</th><th>≥0.1 µm</th><th>≥0.3 µm</th><th>≥0.5 µm</th><th>≥1 µm</th><th>≥5 µm</th></tr></thead>
<tbody>
<tr><td>ISO 3</td><td>1,000</td><td>102</td><td>35</td><td></td><td></td></tr>
<tr><td>ISO 4</td><td>10,000</td><td>1,020</td><td>352</td><td>83</td><td></td></tr>
<tr><td>ISO 5</td><td>100,000</td><td>10,200</td><td>3,520</td><td>832</td><td></td></tr>
<tr><td>ISO 6</td><td>1,000,000</td><td>102,000</td><td>35,200</td><td>8,320</td><td>293</td></tr>
<tr><td>ISO 7</td><td></td><td></td><td>352,000</td><td>83,200</td><td>2,930</td></tr>
<tr><td>ISO 8</td><td></td><td></td><td>3,520,000</td><td>832,000</td><td>29,300</td></tr>
<tr><td>ISO 9</td><td></td><td></td><td>35,200,000</td><td>8,320,000</td><td>293,000</td></tr>
</tbody>
</table>
<p>For reference, ordinary office air commonly contains particle counts at 0.5 µm in the range of ISO 8 to ISO 9, depending on filtration and occupancy. That is why a well-filtered building can meet ISO 8 at rest with relatively modest effort, while ISO 5 needs HEPA-filtered, high-volume or unidirectional airflow.</p>

<h2>Federal Standard 209E equivalents</h2>
<p>Many engineers and owners still use the older U.S. Federal Standard 209E names. 209E counted particles per cubic foot at 0.5 µm and was cancelled in 2001 in favor of ISO 14644-1, but the names persist in conversation and old drawings. The equivalents are approximate because the units and counting methods differ.</p>
<table>
<thead><tr><th>FS 209E class</th><th>Approximate ISO class</th><th>Particles ≥0.5 µm per ft³ (209E basis)</th></tr></thead>
<tbody>
<tr><td>Class 1</td><td>ISO 3</td><td>1</td></tr>
<tr><td>Class 10</td><td>ISO 4</td><td>10</td></tr>
<tr><td>Class 100</td><td>ISO 5</td><td>100</td></tr>
<tr><td>Class 1,000</td><td>ISO 6</td><td>1,000</td></tr>
<tr><td>Class 10,000</td><td>ISO 7</td><td>10,000</td></tr>
<tr><td>Class 100,000</td><td>ISO 8</td><td>100,000</td></tr>
</tbody>
</table>
<p>A quick check: 3,520 particles per m³ divided by 35.3 ft³ per m³ is about 100 particles per ft³, which is why ISO 5 and Class 100 line up.</p>

<h2>Occupancy states</h2>
<p>A class means little unless the occupancy state is stated with it. ISO 14644-1 recognizes three:</p>
<ul>
<li><strong>As-built:</strong> the room is complete with services connected, but no production equipment, materials or people.</li>
<li><strong>At-rest:</strong> equipment is installed and operating as agreed, but no personnel are present.</li>
<li><strong>Operational:</strong> the room is running normally with the specified number of people working.</li>
</ul>
<p>People are the largest particle source in most cleanrooms, so operational counts are usually much higher than at-rest counts. A specification should say, for example, "ISO 7 operational" rather than just "ISO 7." Pharmaceutical GMP grades A through D map onto ISO classes differently in the at-rest and in-operation states, which is part of why <a href="<?= url('guides/gmp-pharma-ahu-design') ?>">GMP pharmaceutical AHU design</a> is handled separately.</p>

<h2>How classification testing is done</h2>
<p>Certification uses a calibrated optical particle counter. The 2015 edition of ISO 14644-1 sets the minimum number of sample locations from the cleanroom area using a lookup table, and specifies a minimum sample volume at each location large enough to detect at least a set number of particles at the largest considered size. The room passes when every location meets the limit.</p>
<p>ISO 14644-2 deals with monitoring between classifications and sets maximum intervals for periodic reclassification, with shorter intervals for cleaner classes. Owners in regulated industries often test more frequently than the minimum. Supporting tests such as airflow velocity or volume, filter leak scans and pressure differential checks are described in ISO 14644-3; the filter scan procedure is in <a href="<?= url('guides/hepa-filter-integrity-testing') ?>">how HEPA filter integrity testing is performed</a>.</p>
<p class="warn">Do not specify a cleaner class than the process needs. Each class step can roughly multiply the recirculation airflow, fan energy and filter count, and the operational state is much harder to hold than at-rest.</p>

<h2>Choosing the class for a project</h2>
<p>Start from the process, not the facility. Ask which operations actually expose product or wafers to room air, and classify only the zones where that happens at the tighter level. Surround them with progressively less clean rooms rather than holding a whole suite to the strictest class. Write the requirement with three parts every time: the class number, the particle sizes that will be counted, and the occupancy state. A requirement such as "ISO 7 at 0.5 µm and 5 µm, operational" leaves the certifier, the designer and the owner nothing to argue about later.</p>
<h2>What the class means for the air system</h2>
<p>The ISO class sets the target, and the HVAC design delivers it through filtration efficiency, airflow quantity and airflow pattern. ISO 5 spaces typically use unidirectional flow from a HEPA ceiling, while ISO 7 and ISO 8 spaces use non-unidirectional, mixed flow with terminal HEPA filters. Translating a class into recirculation and outdoor airflow is a separate exercise covered in <a href="<?= url('guides/cleanroom-airflow-calculation') ?>">calculating cleanroom airflow and air change rates</a>.</p>
<?php guide_end([
    ['What is an ISO Class 7 cleanroom?', 'An ISO Class 7 cleanroom allows no more than 352,000 particles of 0.5 µm and larger per cubic metre of air, plus limits at 1 µm and 5 µm. It is roughly equivalent to the old Federal Standard 209E Class 10,000.'],
    ['Is ISO 14644-1 the same as Federal Standard 209E?', 'No. FS 209E was a U.S. standard counting particles per cubic foot and was cancelled in 2001. ISO 14644-1 counts per cubic metre. The class names have approximate equivalents, such as Class 100 to ISO 5.'],
    ['Does ISO 14644-1 specify air change rates?', 'No. It defines cleanliness only by particle concentration. Air change rates, filtration and airflow patterns are design choices made to achieve the class, and guidance for them comes from other documents and industry practice.'],
    ['Which occupancy state should a cleanroom be specified in?', 'State the class for each state that matters to the process, usually at-rest and operational. Operational counts are higher because people generate most particles, so the design should be checked against the operational target.'],
]);
