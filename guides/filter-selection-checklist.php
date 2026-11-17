<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('filter-selection-checklist'); ?>
<p class="lede">Choosing AHU filters means settling five things in order: the efficiency each stage must achieve, the format that fits the space and airflow, the pressure drop the fan can carry, the physical space and access available, and the sealing and monitoring that keep rated performance in service. Work through the checklist below for each filter bank.</p>

<h2>1. Efficiency target</h2>
<ul>
<li>☐ Identify the code minimum. ASHRAE 62.1 sets minimum filtration upstream of wetted surfaces and for outdoor air in areas that exceed particulate standards; energy codes and local codes may add requirements. Use the editions adopted locally.</li>
<li>☐ Identify sector requirements: ASHRAE 170 or CSA Z317.2 for healthcare, GMP or cleanroom requirements for pharmaceutical and electronics, owner standards for education and government.</li>
<li>☐ Decide whether the unit should be resilient to wildfire smoke or infection risk events; if so, plan for MERV 13 or higher as standard, or a rack and fan that can accept it.</li>
<li>☐ Choose the rating basis: MERV under ASHRAE 52.2, and whether MERV-A is required for charged media. If international filters are involved, decide whether ISO 16890 data is also wanted. See <a href="<?= url('guides/iso-16890-vs-merv') ?>">ISO 16890 vs MERV</a>.</li>
<li>☐ Set the efficiency for each stage: prefilter, final filter and any HEPA stage.</li>
<li>☐ Identify gaseous contaminants that need sorbent media rather than particle filters.</li>
</ul>

<h2>2. Format</h2>
<ul>
<li>☐ Choose the format for each stage: pleated panel, bag, rigid box, mini-pleat V-bank, HEPA cell. The tradeoffs are compared in <a href="<?= url('guides/bag-vs-rigid-box-vs-minipleat-filters') ?>">bag vs rigid box vs mini-pleat filters</a>.</li>
<li>☐ Check airflow behaviour: VAV and units that cycle frequently favour rigid formats over bags.</li>
<li>☐ Check moisture exposure: filters near intakes in wet climates or downstream of cooling coils need moisture-tolerant media and frames.</li>
<li>☐ Choose media type (synthetic or glass fibre) for efficiency stability and humidity tolerance.</li>
<li>☐ Standardize sizes. Using the same nominal sizes across the facility simplifies stocking; common nominal sizes are 24 × 24 in and 12 × 24 in.</li>
</ul>

<h2>3. Pressure drop and fan capability</h2>
<ul>
<li>☐ Obtain initial pressure drop at the actual design face velocity for each candidate filter.</li>
<li>☐ Set the final (change-out) pressure drop for each bank, at or below the manufacturer's recommended maximum.</li>
<li>☐ Calculate mid-life pressure drop for energy estimates.</li>
<li>☐ Confirm the fan delivers design airflow with all banks at final pressure drop and the motor covers that point. See <a href="<?= url('guides/filter-pressure-drop-initial-final') ?>">initial, mid-life and final filter pressure drop</a>.</li>
<li>☐ Compare candidate filters on life-cycle cost, including fan energy, not purchase price alone.</li>
<li>☐ For future upgrades, decide whether the fan should have reserve capacity for a higher-efficiency filter.</li>
</ul>

<h2>4. Face velocity and sizing</h2>
<ul>
<li>☐ Calculate face velocity: airflow divided by the bank's nominal face area.</li>
<li>☐ Keep velocity at or below the filter's rated value, commonly 500 fpm (2.5 m/s); many designers target 400 to 500 fpm for final filters. See <a href="<?= url('guides/filter-face-velocity-efficiency') ?>">filter face velocity and efficiency</a>.</li>
<li>☐ Lay out the bank with whole filters; avoid odd sizes that are hard to source.</li>
<li>☐ Confirm the bank covers the full unit cross-section, with blank-offs only at the perimeter.</li>
</ul>

<h2>5. Location in the unit</h2>
<ul>
<li>☐ Prefilter upstream of all coils and energy recovery devices.</li>
<li>☐ Final filter location chosen (upstream of cooling coil or downstream of coil and fan) and protected from moisture.</li>
<li>☐ Adequate distance from fan discharges and coil faces for uniform airflow.</li>
<li>☐ Filters kept out of the line of sight of UV-C lamps, or UV-resistant media specified.</li>
</ul>

<h2>6. Space and access</h2>
<ul>
<li>☐ Section depth suits the chosen format, including any prefilter in the same section.</li>
<li>☐ Choose side-access tracks or front-load frames, considering service space outside the unit and leakage requirements.</li>
<li>☐ Access sections or doors provide room to remove and install filters without damage.</li>
<li>☐ Path from the unit to the loading dock or storage allows filters to be carried in and out, especially for large rigid and bag filters.</li>
<li>☐ For rooftop units, safe access to filter doors in all seasons.</li>
</ul>

<h2>7. Sealing</h2>
<ul>
<li>☐ Holding frames with continuous gaskets and positive clamping, or side-access tracks with compression and end seals.</li>
<li>☐ Frames sealed to each other and to the casing; blank-offs specified.</li>
<li>☐ Frame material suited to the environment (galvanized, aluminum, stainless).</li>
<li>☐ HEPA banks with gel or knife-edge seals and provision for in-place testing.</li>
</ul>

<h2>8. Monitoring and documentation</h2>
<ul>
<li>☐ Differential pressure gauge on every bank, labelled with initial and final values.</li>
<li>☐ Transmitters to the BAS where trending or remote monitoring is wanted.</li>
<li>☐ Filter schedule listing each bank's efficiency, format, size, quantity, initial and final pressure drop, posted at the unit and included in O&amp;M documents.</li>
<li>☐ Spare filter set stocked for seasonal events.</li>
</ul>

<h2>Quick reference: typical starting points</h2>
<table>
<thead><tr><th>Application</th><th>Prefilter</th><th>Final filter</th></tr></thead>
<tbody>
<tr><td>General office, retail</td><td>MERV 8</td><td>MERV 13</td></tr>
<tr><td>Schools</td><td>MERV 8</td><td>MERV 13 or higher</td></tr>
<tr><td>Healthcare</td><td>Per ASHRAE 170 or CSA Z317.2</td><td>Per standard; higher for critical spaces</td></tr>
<tr><td>Labs and pharma</td><td>MERV 8</td><td>MERV 14 to 15, HEPA where required</td></tr>
<tr><td>Data centers</td><td>MERV 8</td><td>MERV 11 to 13 depending on economizer use</td></tr>
</tbody>
</table>
<p class="note">These are common starting points, not requirements; the governing standards and owner criteria take precedence. Construction filtration and pre-occupancy filter replacement follow a different checklist.</p>
<?php guide_end([
    ['What MERV rating should an air handler use?', 'Many commercial AHUs use a MERV 8 prefilter and a MERV 13 final filter as a starting point. Healthcare, laboratory and other critical applications follow their own standards, and units expected to handle wildfire smoke or infection risk events often use MERV 13 or higher as standard.'],
    ['How do I choose between filter formats?', 'Consider available depth, airflow stability, moisture exposure and life-cycle cost. Bag filters suit constant-volume units with depth; rigid and V-bank filters suit variable airflow and limited depth. Compare options on fan energy as well as purchase price.'],
    ['What face velocity should AHU filters be sized for?', 'Size filters at or below their rated face velocity, commonly 500 fpm. Many designers target 400 to 500 fpm for final filters to lower pressure drop and extend life.'],
]);
