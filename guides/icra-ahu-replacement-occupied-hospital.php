<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('icra-ahu-replacement-occupied-hospital'); ?>
<p class="lede">Replacing an air handler in an occupied hospital starts with an Infection Control Risk Assessment: the infection prevention team and the project team classify the work, identify the patients at risk, and set barrier, pressure and phasing measures before any duct is opened. The AHU work is then sequenced so that no patient area loses its required ventilation or pressure relationships.</p>

<h2>Step 1: Assemble the ICRA team</h2>
<p>An ICRA is a documented, multidisciplinary assessment. For AHU work it should include infection prevention, facilities engineering, the project's mechanical engineer, the contractor's superintendent and representatives of the clinical departments affected. In the US, the FGI Guidelines require an ICRA for construction and renovation and the matrix commonly used originated with CDC-based guidance. In Canada, CSA Z317.13, Infection control during construction, renovation and maintenance of health care facilities, defines the process and the classes of precautions.</p>
<p class="note">General guidance on replacing units in occupied buildings (rigging, phasing, shutdown planning) is covered in <a href="<?= url('guides/replacing-ahu-occupied-building') ?>">replacing AHUs in occupied buildings</a>. This guide covers the infection control layer specific to hospitals.</p>

<h2>Step 2: Classify the construction activity</h2>
<p>The ICRA matrix pairs a construction activity type with a patient risk group. Activity types range from inspection and non-invasive work up to major demolition and construction:</p>
<table>
<thead><tr><th>Activity type</th><th>Examples relevant to AHU work</th></tr></thead>
<tbody>
<tr><td>Type A: inspection, non-invasive</td><td>Inspecting a unit, replacing filters, reading gauges</td></tr>
<tr><td>Type B: small scale, short duration, minimal dust</td><td>Opening one ceiling tile to inspect a damper, minor controls work</td></tr>
<tr><td>Type C: work that generates moderate dust or requires demolition of fixed components</td><td>Removing ductwork, replacing a coil in a unit serving patients</td></tr>
<tr><td>Type D: major demolition and construction</td><td>Removing and replacing an entire AHU and its connected ducts</td></tr>
</tbody>
</table>
<p>Patient risk groups run from low (offices, public areas) through medium and high to highest (operating rooms, protective environment units, oncology, transplant, NICU). An AHU replacement is often Type D, and its supply ducts usually reach high or highest risk areas, which places the work in the most stringent class of precautions (Class IV in the commonly used US matrix, with equivalent classes in Z317.13).</p>

<h2>Step 3: Map the air paths</h2>
<ol>
<li>Identify every space served by the unit being replaced, including return and exhaust paths.</li>
<li>Identify adjacent spaces that share ceiling plenums, shafts or corridors with the work area.</li>
<li>Identify outdoor air intakes near demolition or crane activity, which can pull dust into other AHUs.</li>
<li>Record the pressure relationships each space must keep during the work.</li>
</ol>

<h2>Step 4: Set barrier and pressure measures</h2>
<ul>
<li>Construct dust-tight barriers from floor to deck around the work area, with sealed joints and penetrations.</li>
<li>Provide an anteroom at the work area entry where the ICRA class requires it, with walk-off mats.</li>
<li>Keep the work area negative to occupied areas using HEPA-filtered negative air machines exhausting outdoors where possible.</li>
<li>Monitor the work area pressure continuously with a visible display and documented readings each shift.</li>
<li>Seal supply, return and exhaust openings in the work area so construction dust cannot enter the duct system.</li>
<li>Cap disconnected ducts to occupied areas at the barrier.</li>
<li>Protect nearby outdoor air intakes with prefilters or temporary relocations, and increase filter monitoring on adjacent units.</li>
</ul>
<p>Room pressure monitoring equipment and alarm logic are covered in <a href="<?= url('guides/room-pressure-monitoring') ?>">how to monitor healthcare room pressure relationships</a>.</p>

<h2>Step 5: Plan continuity of ventilation</h2>
<p>Patient areas cannot be left without required air changes, pressure or filtration. Options include:</p>
<ul>
<li><strong>Temporary AHUs</strong> connected to the existing ductwork during replacement, with filtration meeting the space requirements.</li>
<li><strong>Cross-feeding</strong> from adjacent AHUs through existing or temporary connections.</li>
<li><strong>Relocating patients</strong> or closing units during the critical phase, coordinated with clinical leadership.</li>
<li><strong>Phased replacement</strong>, especially with knockdown or modular units that can be built inside the existing mechanical room while the old unit runs.</li>
</ul>
<p>Temporary equipment selection is covered in <a href="<?= url('guides/temporary-hvac-during-replacement') ?>">temporary HVAC during replacement</a>.</p>

<p>Equipment choice affects how long containment must stay in place. A unit delivered in sections sized to pass through existing doors and corridors can often be installed with less demolition, a smaller containment zone and a shorter period on temporary ventilation than a unit that requires opening an exterior wall.</p>

<h2>Step 6: Sequence the work</h2>
<ol>
<li>Install barriers and negative air, verify pressure, and obtain infection prevention sign-off.</li>
<li>Commission temporary ventilation and verify airflow and pressure in served rooms.</li>
<li>Isolate and remove the existing AHU and contaminated ductwork, bagging debris inside the containment.</li>
<li>Clean the mechanical room and remaining duct surfaces before setting the new unit.</li>
<li>Install the new AHU, keeping openings capped until final connection.</li>
<li>Start up with new filters, verify airflow, pressure relationships and humidity.</li>
<li>Clean the work area, then remove barriers only after infection prevention inspection.</li>
</ol>

<h2>Step 7: Verify before returning spaces to use</h2>
<ul>
<li>Measure air changes and pressure relationships in all critical rooms served.</li>
<li>Replace construction filters and record initial pressure drops.</li>
<li>Perform particle counts where the owner or ICRA requires them, particularly for ORs and protective environment rooms.</li>
<li>Document results and obtain infection prevention approval to reopen.</li>
</ul>
<p class="warn">Do not run the new AHU to supply patient areas during construction cleanup. Dust drawn into new ductwork and coils at this stage is a common source of post-construction contamination.</p>
<?php guide_end([
    ['What is an ICRA for HVAC work?', 'An Infection Control Risk Assessment is a documented, multidisciplinary review that classifies the construction activity and the patient risk of affected areas, then sets the required barriers, pressure controls and procedures before work begins.'],
    ['What ICRA class is an AHU replacement?', 'Full AHU replacement is usually a major construction activity, and because hospital AHUs often serve high-risk patient areas, the work typically falls in the most stringent class of precautions.'],
    ['What is CSA Z317.13?', 'It is the Canadian standard for infection control during construction, renovation and maintenance of health care facilities, defining risk assessment and classes of precautions similar to the US ICRA approach.'],
    ['How do hospitals keep ventilation during AHU replacement?', 'With temporary air handlers connected to existing ductwork, cross-feeding from adjacent units, phased replacement or temporary relocation of patients, depending on the spaces served.'],
]);
