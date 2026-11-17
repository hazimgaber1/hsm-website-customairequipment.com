<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ashrae-170-ventilation-requirements'); ?>
<p class="lede">ANSI/ASHRAE/ASHE Standard 170 sets minimum ventilation for health care spaces through a single design table: for each room type it gives the pressure relationship, minimum outdoor and total air changes per hour, whether all air must be exhausted, whether room recirculating units are allowed, and the design humidity and temperature ranges. Separate tables set filtration by space.</p>

<h2>Scope and how it is adopted</h2>
<p>Standard 170, Ventilation of Health Care Facilities, applies to hospitals, outpatient facilities and residential care settings. In the US it carries force mainly through the Facility Guidelines Institute (FGI) Guidelines, which incorporate Standard 170 as their ventilation section, and through state health department and CMS requirements that reference FGI. Many states adopt a specific FGI edition, so the edition of 170 that applies to a project may not be the latest. Confirm with the state licensing agency.</p>
<p>The standard is maintained under continuous maintenance, and addenda have changed values for several spaces over the years. The values quoted in this guide reflect commonly seen editions; check the edition referenced for your project before relying on any number.</p>

<h2>Reading the space table</h2>
<p>Each row of the design parameter table is a room function. The columns tell the designer:</p>
<table>
<thead><tr><th>Column</th><th>What it means for the AHU</th></tr></thead>
<tbody>
<tr><td>Pressure relationship to adjacent areas</td><td>Positive, negative or not required; sets the supply/exhaust offset</td></tr>
<tr><td>Minimum outdoor ACH</td><td>Outdoor air volume the system must deliver to the room</td></tr>
<tr><td>Minimum total ACH</td><td>Total supply (or exhaust for negative rooms) airflow</td></tr>
<tr><td>All room air exhausted directly to outdoors</td><td>If yes, no return; affects energy recovery choices</td></tr>
<tr><td>Air recirculated by means of room units</td><td>Whether fan coils or other in-room recirculating devices are allowed</td></tr>
<tr><td>Design relative humidity</td><td>Upper and sometimes lower limits; drives dehumidification and humidification</td></tr>
<tr><td>Design temperature</td><td>Range the system must be able to maintain</td></tr>
</tbody>
</table>

<h2>Representative values</h2>
<p>The following rows illustrate the range across spaces in commonly referenced editions. They are examples, not a substitute for the table.</p>
<table>
<thead><tr><th>Space</th><th>Pressure</th><th>Outdoor ACH</th><th>Total ACH</th><th>Exhaust all</th><th>RH</th><th>Temperature</th></tr></thead>
<tbody>
<tr><td>Operating room (Class B and C)</td><td>Positive</td><td>4</td><td>20</td><td>No</td><td>20 to 60%</td><td>68 to 75°F (20 to 24°C)</td></tr>
<tr><td>Airborne infection isolation room</td><td>Negative</td><td>2</td><td>12</td><td>Yes</td><td>Max 60%</td><td>70 to 75°F (21 to 24°C)</td></tr>
<tr><td>Protective environment room</td><td>Positive</td><td>2</td><td>12</td><td>No</td><td>Max 60%</td><td>70 to 75°F (21 to 24°C)</td></tr>
<tr><td>Patient room</td><td>Not required</td><td>2</td><td>4</td><td>No</td><td>Max 60%</td><td>70 to 75°F (21 to 24°C)</td></tr>
<tr><td>Decontamination (sterile processing)</td><td>Negative</td><td>2</td><td>6</td><td>Yes</td><td>Not specified</td><td>Check edition</td></tr>
<tr><td>Soiled workroom</td><td>Negative</td><td>2</td><td>10</td><td>Yes</td><td>Not specified</td><td>Not specified</td></tr>
</tbody>
</table>
<p>Note how differently the rooms drive the AHU. An operating room needs 20 total ACH and tight humidity control. A patient room needs only 4 total ACH, so cooling load often sets airflow instead of the table. For converting these rates into cfm, see <a href="<?= url('guides/hospital-air-change-calculation') ?>">calculating hospital room airflow from air change requirements</a>.</p>
<p class="note">Air change rates are minimums. Where the cooling or heating load requires more airflow, the load governs. Where the table governs, the AHU usually runs at a higher airflow and warmer supply temperature than a comparable commercial unit.</p>

<h2>Pressure relationships</h2>
<p>Where the table requires a positive or negative relationship, the standard expects a minimum pressure differential, commonly 0.01 in. w.c. (2.5 Pa), to be maintained between the room and adjacent spaces. In practice this is achieved with a supply-exhaust airflow offset, tight room construction and, for critical rooms, permanent monitoring. The offset calculation is separate; see <a href="<?= url('guides/room-pressurization-offset-calculation') ?>">calculating room pressurization airflow offset</a>.</p>

<h2>Filtration requirements</h2>
<p>A separate table assigns minimum filter efficiencies by space category, using MERV ratings from ASHRAE 52.2:</p>
<ul>
<li>Most inpatient and procedure spaces require two filter banks: a lower-efficiency first bank upstream of the coils (in the MERV 7 to 8 range depending on edition) and a MERV 14 second bank downstream of the coils and fans.</li>
<li>Protective environment rooms add HEPA filtration at the supply terminal.</li>
<li>Outpatient and support spaces may require only one bank.</li>
<li>The standard specifies where each bank sits relative to cooling coils and humidifiers, so that wetted components are protected and the final filter is downstream of possible contamination sources.</li>
</ul>
<p>How to write those requirements into a unit specification is covered in <a href="<?= url('guides/ashrae-170-filter-bank-specification') ?>">specifying ASHRAE 170 filter banks</a>.</p>

<h2>Humidity and temperature</h2>
<p>Most spaces have an upper RH limit of 60%. Operating rooms also have a lower limit, which was lowered to 20% RH in later editions after debate about static, materials and comfort. The design temperature range for ORs (commonly 68 to 75°F) means the system must be able to hold the low end at the upper RH limit, which drives supply air dew point. Many surgical teams ask for lower setpoints than the table minimum; achieving those is a design exercise covered in <a href="<?= url('guides/low-temperature-or-setpoints') ?>">low operating room setpoints</a>.</p>

<h2>Other AHU-related provisions</h2>
<ul>
<li><strong>Outdoor air intakes</strong> must be separated from exhaust outlets, cooling towers, vehicle areas and other contaminant sources by minimum distances.</li>
<li><strong>Exhaust discharge</strong> from AIIRs and other contaminated sources must be located to avoid re-entry.</li>
<li><strong>Humidifiers</strong> must be located so moisture is absorbed before downstream filters and must not use water with harmful treatment chemicals in the airstream.</li>
<li><strong>Drain pans and coils</strong> must be designed to drain completely and be accessible for cleaning.</li>
<li><strong>Insulation</strong> in the airstream must resist erosion and microbial growth.</li>
<li><strong>Energy recovery</strong> devices must not allow cross-contamination from restricted exhaust streams.</li>
<li><strong>Unoccupied operation</strong> provisions allow airflow reduction in some spaces when pressure relationships are maintained.</li>
</ul>
<?php guide_end([
    ['How many air changes does ASHRAE 170 require for an operating room?', 'In commonly referenced editions, operating rooms require a minimum of 20 total air changes per hour with at least 4 of outdoor air, positive pressure, and RH between 20% and 60%. Confirm values in the edition adopted for the project.'],
    ['Is ASHRAE 170 enforceable?', 'It becomes enforceable mainly through the FGI Guidelines, which incorporate it, and through state health department and CMS requirements that reference FGI. The adopted edition varies by state.'],
    ['What filters does ASHRAE 170 require for hospitals?', 'Most inpatient spaces require two filter banks, a lower-efficiency first bank upstream of the coils and a MERV 14 final bank downstream. Protective environment rooms also require HEPA filtration at the supply.'],
    ['Do air change rates in ASHRAE 170 override load calculations?', 'They are minimums. If the heating or cooling load requires more airflow, the load governs. If the table governs, the system must provide at least the tabulated air changes.'],
]);
