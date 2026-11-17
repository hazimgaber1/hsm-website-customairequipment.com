<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('sterile-processing-decontamination-hvac'); ?>
<p class="lede">A sterile processing department moves instruments one way, from dirty to clean, and the air handling must enforce the same direction: decontamination is negative with all air exhausted, while the clean workroom (prep and pack) and sterile storage are positive with controlled temperature and humidity. Heat and moisture from washers and sterilizers make the load larger than the room sizes suggest.</p>

<h2>How an SPD is laid out</h2>
<p>Instruments come back from surgery and procedures contaminated. They are cleaned in the decontamination room, passed through pass-through washers or windows to the clean side, inspected and assembled in the prep and pack area, sterilized, and stored in sterile storage until use. Staff do not walk from dirty to clean without gowning changes. The HVAC system supports this physical separation by making air flow from clean toward dirty and never the reverse.</p>
<p>AAMI ST79, the comprehensive guide to steam sterilization in healthcare facilities, sets operational expectations that include environmental conditions, and is widely used alongside ASHRAE 170 and CSA Z317.2 for design. Accreditation surveyors check SPD conditions closely.</p>

<h2>Typical design requirements</h2>
<table>
<thead><tr><th>Space</th><th>Pressure</th><th>Air changes (Standard 170 basis)</th><th>Exhaust</th><th>Humidity and temperature focus</th></tr></thead>
<tbody>
<tr><td>Decontamination</td><td>Negative</td><td>6 total, 2 outdoor</td><td>All exhausted to outdoors, no recirculation</td><td>Comfort for gowned staff; high moisture from sinks and washers</td></tr>
<tr><td>Clean workroom / prep and pack</td><td>Positive</td><td>4 total, 2 outdoor</td><td>Return permitted</td><td>Moderate humidity; temperature suitable for gowned staff</td></tr>
<tr><td>Sterile storage</td><td>Positive</td><td>4 total, 2 outdoor</td><td>Return permitted</td><td>Upper RH limit (commonly 60%) and upper temperature limit to protect packaging</td></tr>
<tr><td>Sterilizer equipment access</td><td>Negative or not required</td><td>Per heat removal</td><td>Exhaust often required</td><td>High heat release</td></tr>
</tbody>
</table>
<p>The air change values shown reflect commonly referenced editions of ASHRAE 170; confirm against the edition and any owner standard for the project. Air changes are minimums. Heat from washers, sterilizers and lighting often drives airflow higher.</p>

<h2>Decontamination room</h2>
<ul>
<li><strong>Negative pressure</strong> to the corridor and clean workroom, so aerosols from washing and spraying stay in the room.</li>
<li><strong>All air exhausted</strong> to outdoors through a dedicated or compatible exhaust system.</li>
<li><strong>Moisture management:</strong> manual washing sinks, ultrasonic cleaners and washer-disinfectors release steam and humidity. Without enough exhaust and dehumidified supply, condensation forms on cold surfaces.</li>
<li><strong>Staff comfort:</strong> technicians wear fluid-resistant gowns, face shields and gloves. Cooler temperatures help, and guidance commonly sets an upper temperature for this room.</li>
<li><strong>Capture at the source:</strong> exhaust hoods over washer doors and chemical areas reduce the moisture and chemical vapour reaching the room.</li>
</ul>

<h2>Clean workroom and sterile storage</h2>
<ul>
<li><strong>Positive pressure</strong> relative to the decontamination room and the corridor.</li>
<li><strong>Humidity control:</strong> high RH can affect sterile packaging integrity and promote microbial growth; very low RH can affect some processes and comfort. Sterile storage has an upper RH limit in Standard 170, and AAMI guidance addresses ranges for other areas.</li>
<li><strong>Temperature:</strong> sterile storage needs an upper temperature limit; long-term exposure to heat affects packaging and some supplies.</li>
<li><strong>Filtration:</strong> follow the Standard 170 filter table for the space category; sterile storage often shares the inpatient two-bank arrangement.</li>
<li><strong>Diffuser placement:</strong> avoid blowing directly onto open shelving or packaging tables.</li>
</ul>

<h2>Sterilizer and washer heat loads</h2>
<p>Steam sterilizers and washer-disinfectors reject substantial heat into equipment spaces and through their doors. Manufacturers publish heat release in Btu/h for each unit; use those values rather than general allowances. Typical strategies:</p>
<ul>
<li>Recess sterilizers into a dedicated equipment chase with its own exhaust or cooling, so most of the heat stays out of the clean workroom.</li>
<li>Provide canopy exhaust above sterilizer doors where steam escapes on opening.</li>
<li>Coordinate with steam and condensate systems; leaking traps add moisture.</li>
</ul>
<p>Moisture added by these sources must be counted in the dehumidification load. The method is in <a href="<?= url('guides/dehumidification-load-calculation') ?>">the dehumidification load calculation</a>.</p>

<h2>Air handler considerations</h2>
<ul>
<li>The SPD is often served by a unit shared with surgical areas; check that coil leaving conditions can meet SPD humidity limits under part load.</li>
<li>Decontamination exhaust air cannot be returned, so the unit's outdoor air must make up that exhaust.</li>
<li>Energy recovery from decontamination exhaust must not allow cross-contamination; device choices are compared in <a href="<?= url('guides/hospital-energy-recovery-options') ?>">energy recovery options that meet ASHRAE 170</a>.</li>
<li>The SPD operates long hours and often around the clock; set schedules accordingly.</li>
<li>Room pressure relationships should be monitored, at least between decontamination and clean areas.</li>
</ul>

<h2>Monitoring and records</h2>
<p>Accreditation surveyors routinely ask for SPD temperature, humidity and pressure records. Design the controls so these are logged automatically:</p>
<ul>
<li>Temperature and RH sensors in decontamination, prep and pack, and sterile storage, trended at the BAS.</li>
<li>Pressure direction indication between decontamination and the clean workroom, with alarm on reversal.</li>
<li>Alarms routed to a location staffed whenever the department is operating.</li>
<li>Reports that department staff can print or export for their own quality records.</li>
</ul>
<p>Agree the acceptable ranges with the department manager and infection prevention so the BAS alarms match the facility's written policy.</p>

<h2>Common problems</h2>
<table>
<thead><tr><th>Problem</th><th>Usual cause</th></tr></thead>
<tbody>
<tr><td>Condensation and wet packs in sterile storage</td><td>High RH, cold surfaces, or packs moved too soon from sterilizer</td></tr>
<tr><td>Decontamination room too hot</td><td>Undersized supply for washer heat; inadequate exhaust at equipment</td></tr>
<tr><td>Pressure reversal at pass-throughs</td><td>Exhaust fan failure or door left open</td></tr>
<tr><td>Fogging in decontamination</td><td>Insufficient exhaust or high supply dew point</td></tr>
<tr><td>Surveyor findings on temperature or humidity logs</td><td>No monitoring, or setpoints outside the range the facility adopted</td></tr>
</tbody>
</table>
<p class="note">Operating rooms adjacent to the SPD have their own airflow design requirements, which are not covered here.</p>
<?php guide_end([
    ['Should the decontamination room be negative or positive?', 'Negative to adjacent spaces, with all air exhausted directly outdoors. This keeps aerosols from instrument washing out of clean areas.'],
    ['What air change rate does sterile processing need?', 'ASHRAE 170 commonly lists 6 total air changes for decontamination and 4 for the clean workroom and sterile storage, each with 2 of outdoor air. Heat from washers and sterilizers often drives airflow higher.'],
    ['Why does humidity matter in sterile storage?', 'High humidity can compromise sterile packaging and support microbial growth. ASHRAE 170 sets an upper RH limit for sterile storage, and AAMI guidance addresses environmental conditions as well.'],
    ['How should sterilizer heat be handled?', 'Use manufacturer heat release data, recess sterilizers into a dedicated equipment space with its own exhaust or cooling, and provide canopy exhaust above sterilizer doors.'],
]);
