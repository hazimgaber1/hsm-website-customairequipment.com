<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ambulatory-surgery-center-hvac'); ?>
<p class="lede">An ambulatory surgery center needs the same operating room ventilation as a hospital for the procedures it performs, but around it the facility is smaller, closes at night, has no inpatient units and often falls under different occupancy, power and licensing rules. Those differences change the air handler size, the redundancy strategy and how hard the system works overnight.</p>

<h2>Which rules apply</h2>
<p>In the US, ASCs are designed to the FGI Guidelines for Design and Construction of Outpatient Facilities, which incorporate ASHRAE 170 for ventilation. Medicare-certified ASCs must meet CMS Conditions for Coverage, which reference the Life Safety Code (NFPA 101) and Health Care Facilities Code (NFPA 99). State licensing adds its own requirements. In Canada, outpatient surgical facilities are regulated provincially, often through the provincial college of physicians or health ministry, and CSA Z317.2 commonly applies. Confirm which documents govern before starting design.</p>
<p>Under NFPA 101, many ASCs are classified as ambulatory health care occupancies rather than health care occupancies, because patients are not kept overnight but may be incapable of self-preservation during and after anaesthesia. That classification affects smoke compartmentation, fire alarm and emergency power rather than ventilation rates directly.</p>

<h2>Where ASCs match hospitals</h2>
<ul>
<li><strong>Operating rooms</strong> for invasive procedures under general anaesthesia have the same Standard 170 requirements: minimum total and outdoor air changes, positive pressure, a primary diffuser array over the table, low returns, two filter banks with MERV 14 final, and controlled temperature and RH.</li>
<li><strong>Sterile processing</strong> has the same pressure and exhaust relationships: negative decontamination with all air exhausted, positive clean workroom and sterile storage.</li>
<li><strong>Airborne infection isolation</strong> where provided follows the same requirements, though many ASCs do not include an AIIR.</li>
</ul>
<p>The design steps for the OR itself are in <a href="<?= url('guides/operating-room-air-handling-design') ?>">how to design air handling for operating rooms</a>.</p>

<h2>Where ASCs differ</h2>
<table>
<thead><tr><th>Item</th><th>Typical hospital</th><th>Typical ASC</th></tr></thead>
<tbody>
<tr><td>Hours of operation</td><td>Continuous</td><td>Scheduled days; closed nights and weekends</td></tr>
<tr><td>Room mix</td><td>ORs plus inpatient, ICU, imaging, labs</td><td>ORs, procedure rooms, pre-op and recovery bays, SPD, offices</td></tr>
<tr><td>Procedure rooms</td><td>Varied</td><td>Often a large share; less stringent ventilation than ORs depending on classification</td></tr>
<tr><td>AHU size</td><td>Large central units</td><td>Smaller units; sometimes packaged equipment</td></tr>
<tr><td>Redundancy</td><td>N+1 fans, dual units, owner standards</td><td>Often less; depends on owner, licensing and case volume</td></tr>
<tr><td>Emergency power</td><td>Large essential electrical system</td><td>Smaller essential system; type depends on occupancy and anaesthesia used</td></tr>
<tr><td>Unoccupied operation</td><td>ORs set back, building mostly continuous</td><td>Entire facility can set back, subject to OR pressure rules</td></tr>
<tr><td>Location</td><td>Purpose-built campus</td><td>Often in medical office buildings or converted retail</td></tr>
</tbody>
</table>

<h2>Procedure rooms versus operating rooms</h2>
<p>The FGI outpatient guidelines distinguish rooms by the invasiveness of the procedure and the type of anaesthesia, often using a classification scheme in which lower classes cover minor procedures with local anaesthesia and higher classes cover procedures requiring general anaesthesia or sterile field protection. ASHRAE 170 assigns different ventilation requirements accordingly: procedure rooms commonly need fewer air changes and may not need the same pressure or diffuser arrangement. Classifying each room correctly with the clinical team avoids both over-design and under-design. Confirm the classification method in the edition in force.</p>

<h2>Air handler arrangement</h2>
<ul>
<li><strong>Dedicated surgical AHU.</strong> One unit serving the ORs, procedure rooms and SPD, with tight humidity control and two filter banks. A separate unit or units serve offices, waiting and recovery areas.</li>
<li><strong>Single AHU for the whole center.</strong> Possible in small ASCs, but it forces the whole facility to run at surgical-grade filtration and humidity control and makes setback harder.</li>
<li><strong>Packaged rooftop equipment.</strong> Common in converted buildings. Check that the unit can achieve the dew point needed for OR humidity limits, provide two filter banks with the final bank downstream of the fan, and be built for cleanability.</li>
</ul>
<p class="note">Many ASCs are in leased space where roof capacity, ceiling height and shaft space are limited. A custom unit with a compact footprint or split construction may fit where a standard catalog unit does not; see <a href="<?= url('guides/knockdown-ahu-construction') ?>">knockdown AHU construction</a> for constrained sites.</p>

<h2>Humidity and temperature</h2>
<p>Surgeons in ASCs often request the same low OR temperatures as in hospitals. Smaller systems have fewer options for producing low dew point air, since there may be no central chilled water. DX systems with hot gas reheat, or chilled water from a small dedicated chiller, are common. The design method for low setpoints is covered in <a href="<?= url('guides/low-temperature-or-setpoints') ?>">how to achieve low operating room setpoints</a>.</p>

<h2>Night and weekend operation</h2>
<p>Because the whole facility closes, the energy opportunity is larger than in a hospital. Requirements to observe:</p>
<ul>
<li>OR and SPD pressure relationships maintained during setback, per Standard 170's unoccupied provisions.</li>
<li>Humidity kept within a band that does not damage sterile supplies or require long recovery.</li>
<li>Restart early enough before the first case for rooms to reach setpoint and purge.</li>
<li>Sterile storage conditions maintained continuously.</li>
</ul>

<h2>Redundancy and power</h2>
<p>ASCs vary widely in their redundancy expectations. A single-OR center may accept cancelling cases if the AHU fails, while a large multi-specialty center may want N+1 fans and backup cooling. Discuss this with the owner early. Emergency power requirements depend on whether patients are under general anaesthesia and on the occupancy classification; ventilation to ORs during a case in progress is the key concern.</p>
<?php guide_end([
    ['Do ambulatory surgery centers follow ASHRAE 170?', 'Yes, in the US through the FGI Guidelines for outpatient facilities, which incorporate ASHRAE 170 ventilation requirements. Operating rooms in ASCs generally have the same requirements as hospital ORs.'],
    ['How is an ASC different from a hospital for HVAC?', 'ASCs close at night, have no inpatient units, often occupy leased buildings and have different occupancy, emergency power and redundancy expectations. Operating rooms and sterile processing still meet the same ventilation requirements.'],
    ['Can an ASC use rooftop units?', 'Yes, if the units can deliver the required filtration arrangement, humidity control, cleanability and airflow for the rooms served. Many standard packaged units need modification to meet OR requirements.'],
    ['Do procedure rooms need the same ventilation as operating rooms?', 'Not always. Ventilation depends on how the room is classified by procedure type and anaesthesia. Procedure rooms for minor work typically need fewer air changes than operating rooms.'],
]);
