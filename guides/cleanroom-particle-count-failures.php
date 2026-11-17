<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('cleanroom-particle-count-failures'); ?>
<p class="lede">A failed particle count has four possible origins: particles getting past the filters, too little clean air diluting the room, air patterns that let particles linger where they are measured, or contaminated air entering through a pressure failure. Use the pattern of the failure, by location, particle size and occupancy state, to tell them apart before replacing anything.</p>

<h2>Read the failure pattern</h2>
<p>A certification report contains more diagnostic information than a pass or fail. Before planning repairs, answer these questions from the data:</p>
<ul>
<li><strong>Where?</strong> One location, a cluster under one filter, near doors, near returns, or everywhere.</li>
<li><strong>What size?</strong> Failures dominated by small particles (0.3 to 0.5 µm) often suggest filter leaks or bypass; failures concentrated at 5 µm suggest people, process or surfaces.</li>
<li><strong>Which state?</strong> A room that passes at rest but fails operational is usually generating particles internally; one that fails at rest has an air system problem.</li>
<li><strong>When?</strong> A room that recently passed and now fails points to something that changed: filters, airflow, layout, equipment or gowning.</li>
</ul>
<p>The class limits themselves are in <a href="<?= url('guides/iso-14644-cleanroom-classes') ?>">ISO 14644 cleanroom classes explained</a>.</p>

<h2>Rule out measurement error</h2>
<ul>
<li><strong>Symptom:</strong> isolated high count at one location that does not repeat.</li>
<li><strong>Cause:</strong> counter out of calibration, a dirty sample tube, the probe placed in an air jet or eddy, or a person standing upstream of the probe.</li>
<li><strong>Check:</strong> counter calibration date and zero count test; tubing length and condition; probe position and orientation relative to airflow; operator position.</li>
<li><strong>Fix:</strong> zero-count the counter through its tubing, resample, and follow the sampling plan. If the result repeats, move to the causes below.</li>
</ul>

<h2>HEPA filter leaks and bypass</h2>
<ul>
<li><strong>Symptom:</strong> high counts concentrated under or downstream of one filter, often at small sizes, present at rest.</li>
<li><strong>Cause:</strong> pinhole or tear in the media, damaged pleats, a failed seal between the media pack and the frame, a gasket or gel seal not seated in the housing, or leaks through the ceiling grid between filters.</li>
<li><strong>Check:</strong> perform an aerosol challenge scan of the filter face and perimeter. A leak in the grid shows as penetration at the frame-to-grid junction rather than over the media.</li>
<li><strong>Fix:</strong> repair small media leaks with an approved sealant within the owner's patch-area limits; reseat or replace gaskets; reset gel knife edges; replace damaged filters. Retest. The test procedure is in <a href="<?= url('guides/hepa-filter-integrity-testing') ?>">how HEPA filter integrity testing is performed</a>.</li>
</ul>
<p class="note">Damage often happens during installation or ceiling work. Any trade working above a cleanroom ceiling should trigger a filter leak test before the room returns to service.</p>

<h2>Insufficient airflow</h2>
<ul>
<li><strong>Symptom:</strong> counts elevated across the whole room or the whole zone; recovery time longer than at commissioning.</li>
<li><strong>Cause:</strong> AHU or FFU airflow has fallen because filters have loaded beyond the fan's capacity, a fan has failed in an array, a VFD has been limited, or a damper has closed.</li>
<li><strong>Check:</strong> measure filter face velocities or terminal airflow and compare with design. Check AHU airflow, fan status, filter differential pressures and any damper positions.</li>
<li><strong>Fix:</strong> restore airflow: change loaded filters, replace failed fans, correct control limits. If the fan was never selected for loaded-filter pressure drop, it will need upgrading.</li>
</ul>

<h2>Poor airflow pattern</h2>
<ul>
<li><strong>Symptom:</strong> failures at specific locations away from filters: corners, behind equipment, between racks, near walls with no returns.</li>
<li><strong>Cause:</strong> dead zones where clean air does not sweep; blocked low-wall returns; new equipment or carts obstructing flow; in unidirectional zones, turbulence from obstructions or velocity non-uniformity.</li>
<li><strong>Check:</strong> airflow visualization with a smoke or fog generator. Look for swirling, stagnant pockets and flow that moves upward from work surfaces.</li>
<li><strong>Fix:</strong> clear returns; relocate equipment; add or move terminal filters and returns; in unidirectional areas, use perforated work surfaces or raise equipment off the floor to let air pass.</li>
</ul>

<h2>Pressure failure and infiltration</h2>
<ul>
<li><strong>Symptom:</strong> high counts near doors or pass-throughs; failures that coincide with low differential pressure readings.</li>
<li><strong>Cause:</strong> the room is not positive enough to the adjacent space, so less clean air enters through door gaps or when doors open.</li>
<li><strong>Check:</strong> differential pressure trends; smoke test at door undercuts; door closer function; airlock interlocks.</li>
<li><strong>Fix:</strong> restore the room offset; repair door seals and closers; enforce airlock procedures. Pressure step design is in <a href="<?= url('guides/cleanroom-pressure-cascade') ?>">how to design a cleanroom pressure cascade</a>.</li>
</ul>

<h2>Internal sources</h2>
<ul>
<li><strong>Symptom:</strong> passes at rest, fails in operation, often with elevated large particles.</li>
<li><strong>Cause:</strong> more people than the design assumed, poor gowning, shedding materials (paper, cardboard), process equipment generating particles, cleaning residues.</li>
<li><strong>Check:</strong> people count during sampling, gowning compliance, materials brought into the room, process activity at the time of sampling.</li>
<li><strong>Fix:</strong> procedural controls first. If the process load is inherent, the room may need more airflow or local extraction.</li>
</ul>

<h2>Diagnostic summary</h2>
<table>
<thead><tr><th>Pattern</th><th>Likely cause</th><th>Primary test</th></tr></thead>
<tbody>
<tr><td>One filter area, at rest, small particles</td><td>Filter or seal leak</td><td>Aerosol scan</td></tr>
<tr><td>Whole room, longer recovery</td><td>Low airflow</td><td>Terminal airflow measurement</td></tr>
<tr><td>Corners or behind equipment</td><td>Dead zones</td><td>Airflow visualization</td></tr>
<tr><td>Near doors</td><td>Pressure loss</td><td>Differential pressure and smoke</td></tr>
<tr><td>Operational only, large particles</td><td>People or process</td><td>Activity review</td></tr>
</tbody>
</table>
<p>Temperature or humidity problems that accompany a particle failure have their own causes; see <a href="<?= url('guides/cleanroom-excursions-troubleshooting') ?>">troubleshooting cleanroom temperature and humidity excursions</a>.</p>
<?php guide_end([
    ['Why would a cleanroom pass at rest but fail in operation?', 'The air system is delivering clean air, but people, materials or the process are generating more particles than it can dilute. Check gowning, personnel count, materials and process activity before changing the HVAC.'],
    ['How can I tell if a HEPA filter is leaking?', 'High counts concentrated under one filter at small particle sizes are a sign. Confirm with an aerosol challenge scan of the filter face and its perimeter seal, which locates the leak precisely.'],
    ['Can low airflow cause a cleanroom to fail certification?', 'Yes. As filters load or fans fail, airflow drops and dilution falls, raising particle counts throughout the room. Measure terminal airflow and compare with the design values.'],
]);
