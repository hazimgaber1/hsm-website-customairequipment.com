<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('hospital-ahu-redundancy-requirements'); ?>
<p class="lede">Codes say less about air handler redundancy than most people assume. US standards such as ASHRAE 170 mainly require backup for heating and certain exhaust functions, while CSA Z317.2 in Canada, the FGI Guidelines' functional expectations and owner design standards are what usually drive N+1 fans, overlapping AHUs and serviceable-while-running construction.</p>

<h2>Why redundancy matters more in hospitals</h2>
<p>A hospital cannot evacuate its operating suite or isolation ward because a fan bearing failed. Loss of airflow means loss of pressure relationships, loss of filtration, rising temperature and humidity, and, in surgery, cancelled cases. Hospitals also run around the clock, so there is no weekend window to replace a motor. Redundancy is the means of keeping critical spaces conditioned through failure, maintenance and power interruptions.</p>

<h2>What the standards actually require</h2>
<table>
<thead><tr><th>Source</th><th>Typical redundancy content</th></tr></thead>
<tbody>
<tr><td>ASHRAE 170</td><td>Heating sources and essential heating equipment must have backup capacity so the facility can be heated with the largest unit out of service; specific exhaust and ventilation continuity provisions; little prescriptive AHU fan redundancy</td></tr>
<tr><td>FGI Guidelines</td><td>Functional requirements for maintaining ventilation to critical spaces; ties ventilation to essential power</td></tr>
<tr><td>CSA Z317.2</td><td>More explicit expectations that critical HVAC systems continue to operate during failure of a component and during maintenance</td></tr>
<tr><td>NFPA 99 and NFPA 110 (US), CSA Z32 and C282 (Canada)</td><td>Which HVAC loads must be on the essential electrical system and generator</td></tr>
<tr><td>Owner and health authority standards</td><td>Often the most specific: N+1 fans, dual AHUs per critical area, serviceability rules</td></tr>
</tbody>
</table>
<p>Because requirements are spread across documents and editions, record the redundancy basis in the project's basis of design and get the owner's agreement. Electrical continuity is covered in <a href="<?= url('guides/essential-power-hospital-ahu-checklist') ?>">the essential power checklist for hospital AHUs</a>.</p>

<h2>Which spaces get redundancy</h2>
<p>Owners usually rank spaces by consequence of failure:</p>
<ul>
<li><strong>Highest:</strong> operating rooms and procedure rooms, airborne infection isolation rooms, protective environment rooms, ICUs, sterile processing, compounding pharmacies, emergency departments.</li>
<li><strong>Medium:</strong> inpatient units, imaging, laboratories.</li>
<li><strong>Lower:</strong> administrative areas, cafeterias, support spaces where temporary loss is tolerable.</li>
</ul>
<p>The level of redundancy then follows the ranking. Critical spaces might be served by an AHU with N+1 fans and backup coils, or by two AHUs either of which can carry the minimum load. Lower-priority spaces may have no redundancy beyond standard maintenance practice.</p>

<h2>Forms of redundancy in the air handler</h2>
<h3>Fans</h3>
<p>Fan arrays are the most common way to add fan redundancy without a second unit. If one fan fails, the remaining fans speed up to carry the load. How many fans to add and how to size them is a fan design topic covered in <a href="<?= url('guides/fan-array-redundancy-n1-vs-n2') ?>">fan array redundancy, N+1 vs N+2</a>.</p>
<h3>Motors and drives</h3>
<p>One VFD per fan motor avoids a single drive failure taking down the whole array. Where a single drive is used, bypass or a redundant drive provides continuity.</p>
<h3>Coils and heating</h3>
<ul>
<li>Split coils or two coils in parallel allow one to be isolated.</li>
<li>Steam and hot water heating with backup sources upstream meets the heating continuity expectation.</li>
<li>Preheat coil protection must work when one heating source is lost.</li>
</ul>
<h3>Humidification</h3>
<p>Two humidifier dispersion assemblies or two steam generators prevent a single failure from dropping humidity in an OR suite.</p>
<h3>Whole units</h3>
<ul>
<li>Two AHUs each sized for a portion (often 50% to 67%) of the load, serving a common duct system.</li>
<li>Two AHUs each sized for 100% of minimum ventilation, with load diversity covering the rest.</li>
<li>A standby AHU that can be connected to critical zones through isolation dampers.</li>
</ul>

<h2>Serviceability as a form of redundancy</h2>
<p>A redundant fan does little good if the unit must be shut down to replace the failed one. Hospital AHUs are commonly designed so that components can be isolated and serviced while the rest of the unit runs:</p>
<ul>
<li>Backdraft or isolation dampers on each fan in an array.</li>
<li>Filter sections that can be changed under operation without bypass.</li>
<li>Coils with isolation valves, and drain pans designed for access while the fan runs.</li>
<li>Electrical disconnects per fan motor.</li>
</ul>
<p>Planning that work is covered in <a href="<?= url('guides/continuous-operation-hospital-ahu-maintenance') ?>">how to maintain hospital AHUs without shutdown</a>.</p>

<h2>Controls and failure response</h2>
<ul>
<li>Detect fan failure (airflow, current, drive fault) and command remaining fans to compensate.</li>
<li>Alarm at the BAS with clear identification of the failed component.</li>
<li>Maintain pressure relationships during transfer between units or fans.</li>
<li>Restart automatically after a power transfer, with staggered starts to limit generator load.</li>
<li>Put controllers and sensors on uninterruptible power where loss of control would defeat redundancy.</li>
</ul>

<h2>Testing redundancy</h2>
<p>Redundancy that has never been exercised is an assumption. During commissioning, disable one fan, one drive and one humidifier in turn and record airflow, room pressures and humidity in the critical spaces served. Repeat the test periodically, for example annually, because control changes and drive replacements can quietly break failover logic.</p>

<h2>Writing redundancy into the basis of design</h2>
<ol>
<li>List critical spaces and the consequence of losing ventilation to each.</li>
<li>State the redundancy approach for each AHU: N+1 fans, dual units, standby unit, or none.</li>
<li>State the capacity that must remain available during a single failure (for example, minimum airflow and pressure relationships, or full load).</li>
<li>Identify which components must be serviceable without shutdown.</li>
<li>Get sign-off from the owner's facilities and infection prevention teams.</li>
</ol>
<?php guide_end([
    ['Does ASHRAE 170 require redundant air handlers?', 'Not explicitly for most spaces. Standard 170 focuses on heating backup and certain ventilation continuity provisions. Redundant fans and air handlers are usually driven by CSA Z317.2, FGI functional expectations and owner standards.'],
    ['How do hospitals provide fan redundancy?', 'Most commonly with fan arrays sized so the remaining fans can carry the load if one fails, along with isolation dampers so the failed fan can be serviced while the unit runs. Dual air handlers are used for the most critical areas.'],
    ['Which hospital spaces need redundant air handling?', 'Operating rooms, isolation rooms, protective environment rooms, ICUs, sterile processing and compounding pharmacies are typically treated as highest priority. The owner sets the final ranking.'],
    ['Is redundancy only about fans?', 'No. Coils, heating sources, humidifiers, drives, controls and power supply all need to be considered, along with the ability to service components without shutting the unit down.'],
]);
