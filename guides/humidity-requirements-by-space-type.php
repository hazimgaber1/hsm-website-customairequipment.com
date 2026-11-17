<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('humidity-requirements-by-space-type'); ?>
<p class="lede">Most occupied buildings are comfortable and healthy between about 30 and 60 percent RH, with a summer dew point limit near 60 F or lower. Hospitals, museums, labs, data centers and some industrial spaces have narrower or different targets set by standards, owner requirements or the materials and equipment inside. This page summarizes typical ranges as starting points; the governing standard or owner criteria always take precedence.</p>

<h2>Why limits exist at both ends</h2>
<p><strong>Too humid:</strong> high humidity supports mould and dust mites, promotes condensation on cold surfaces, damages finishes and stored materials, and feels uncomfortable. ASHRAE 62.1 has, in recent editions, included a limit on indoor dew point or humidity for mechanically dehumidified systems; check the requirement and value in the edition you are using.</p>
<p><strong>Too dry:</strong> very low humidity causes static discharge, dry skin and eyes, and shrinkage and cracking in wood and some materials. Some research associates mid-range humidity with lower survival of certain airborne viruses, though building standards have not generally adopted a minimum on that basis for general occupancies.</p>
<p>In cold climates, the winter upper limit is usually set by the building envelope rather than by occupants; see <a href="<?= url('guides/max-winter-indoor-rh-calculation') ?>">calculating maximum winter indoor RH</a>.</p>

<h2>Typical targets by space type</h2>
<table>
<thead><tr><th>Space</th><th>Typical RH range</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>Offices, schools, retail</td><td>About 30 to 60%</td><td>Often no humidification in winter; summer dew point kept below about 55 to 60 F</td></tr>
<tr><td>Hospital patient rooms</td><td>Per ASHRAE 170 or CSA Z317.2 tables</td><td>Ranges vary by room type and edition</td></tr>
<tr><td>Operating rooms</td><td>Per ASHRAE 170 or CSA Z317.2 tables</td><td>Lower limits have been revised in past editions; confirm the current value</td></tr>
<tr><td>Museums and archives</td><td>Commonly near 50% with tight short-term fluctuation limits</td><td>Climate class and permitted variation set by the institution, often using ASHRAE Handbook guidance</td></tr>
<tr><td>Laboratories, general</td><td>Often 30 to 60%</td><td>Specific instruments or processes may need tighter bands</td></tr>
<tr><td>Cleanrooms and pharma</td><td>Process specific, often 30 to 50%</td><td>Some processes need much lower dew points</td></tr>
<tr><td>Data centers</td><td>Defined by dew point and RH envelope</td><td>ASHRAE TC 9.9 thermal guidelines; wide allowable ranges in recent editions</td></tr>
<tr><td>Natatoriums</td><td>About 50 to 60%</td><td>Air temperature slightly above water temperature</td></tr>
<tr><td>Ice arenas</td><td>Low dew point to prevent fog and condensation</td><td>Dew point control is the main requirement</td></tr>
<tr><td>Printing, textiles, woodworking</td><td>Often 40 to 55%</td><td>Material stability and static control</td></tr>
<tr><td>Battery and lithium manufacturing dry rooms</td><td>Very low dew points</td><td>Often far below 0 F dew point; process specific</td></tr>
</tbody>
</table>
<p class="note">Values here are typical starting points for discussion, not code limits. Always check the governing standard, the edition adopted for the project and the owner's criteria.</p>

<h2>Offices, schools and commercial</h2>
<p>For general occupancies, the main requirement is to keep humidity from getting too high in summer. Space dew points in the low to mid 50s F feel comfortable and limit mould risk. Winter humidification is often omitted in commercial buildings, or set modestly to around 25 to 35 percent where provided, limited by the envelope in cold climates. Thermal comfort standards such as ASHRAE 55 address humidity as part of the comfort zone.</p>

<h2>Healthcare</h2>
<p>ASHRAE 170 in the US and CSA Z317.2 in Canada tabulate humidity ranges by room type. Operating rooms, procedure rooms, sterile storage and patient rooms each have their own values, and those values have been revised over the years. Use the edition the authority having jurisdiction has adopted. Detailed hospital design is covered in the healthcare guides, including <a href="<?= url('guides/ashrae-170-ventilation-requirements') ?>">ASHRAE 170 ventilation requirements</a>.</p>

<h2>Museums, galleries and archives</h2>
<p>Collections respond to both the level and the rate of change of humidity. Wood, paint layers, paper and textiles expand and contract with moisture, and rapid swings cause more damage than a stable value slightly off target. Many institutions use a climate class approach, setting a target and allowable short-term and seasonal variations based on collection risk and building capability. Tight classes need more capable equipment and a well-sealed envelope.</p>

<h2>Laboratories and cleanrooms</h2>
<p>Requirements come from the work. Electronics and powder handling may need low humidity for static or material control. Biology labs may need stable mid-range humidity. Cleanroom specifications set temperature and humidity along with particle class, and some pharmaceutical processes need dew points low enough to call for desiccant systems; see <a href="<?= url('guides/low-dew-point-supply-air') ?>">how to achieve supply dew points below 40 F</a>.</p>

<h2>Data centers</h2>
<p>ASHRAE TC 9.9 thermal guidelines define recommended and allowable envelopes for IT equipment in terms of dry-bulb, dew point and RH. Recent editions widened the humidity ranges considerably compared with older practice, reducing the need for humidification and dehumidification. Some operators still apply tighter internal standards.</p>

<h2>Industrial and process</h2>
<p>Paper, printing, textiles, wood products, food processing and pharmaceuticals all have process-driven targets. Get them from the process owner or equipment supplier and confirm whether the requirement is RH at a given temperature or a dew point. Converting between them is covered in <a href="<?= url('guides/grains-and-humidity-ratio-conversions') ?>">converting RH, dew point, grains and humidity ratio</a>.</p>

<h2>Writing the requirement</h2>
<ul>
<li>State whether the target is RH at a stated dry-bulb, or a dew point.</li>
<li>State the allowable band and, where relevant, the maximum rate of change.</li>
<li>Distinguish summer and winter values.</li>
<li>Say where it is measured: in the space, at the return, or at a specific location.</li>
<li>Name the standard and edition the value comes from.</li>
</ul>
<?php guide_end([
    ['What is the recommended indoor humidity for offices?', 'Typically about 30 to 60 percent RH, with summer dew point kept below about 55 to 60 F. Winter humidification is often modest or omitted in commercial buildings, especially in cold climates.'],
    ['What humidity is required in hospital operating rooms?', 'It is set by ASHRAE 170 in the US and CSA Z317.2 in Canada, and values have changed between editions. Use the edition adopted by the authority having jurisdiction for your project.'],
    ['What humidity do museums need?', 'Many target about 50 percent RH with limits on short-term and seasonal fluctuation, set by the institution based on collection risk. Stability often matters more than the exact value.'],
]);
