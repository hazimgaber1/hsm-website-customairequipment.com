<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('protective-environment-rooms'); ?>
<p class="lede">A protective environment (PE) room shields severely immunocompromised patients, such as allogeneic stem cell transplant recipients, from airborne fungal spores and other environmental organisms. It does this with HEPA-filtered supply air, positive pressure to everything around it, a sealed room envelope, and an airflow pattern that sweeps clean air across the patient toward the door.</p>

<h2>Who the room protects and from what</h2>
<p>Patients with profound neutropenia are at serious risk from organisms that are harmless to most people, especially Aspergillus spores, which are common in outdoor air and in construction dust. The PE room is designed to keep those particles out. It is the inverse of an airborne infection isolation room: an AIIR protects everyone else from the patient, while a PE room protects the patient from everyone else. Isolation rooms are covered in <a href="<?= url('guides/airborne-infection-isolation-rooms') ?>">airborne infection isolation room air handling</a>.</p>
<p>Design guidance comes from the CDC environmental infection control guidelines, the FGI Guidelines and ASHRAE 170 in the US, and CSA Z317.2 in Canada. Check the editions in force for exact values.</p>

<h2>Core requirements</h2>
<table>
<thead><tr><th>Parameter</th><th>Typical requirement</th></tr></thead>
<tbody>
<tr><td>Pressure</td><td>Positive to the corridor and adjacent spaces, at least 0.01 in. w.c. (2.5 Pa); many designs target more</td></tr>
<tr><td>Total air changes</td><td>12 ACH minimum under Standard 170</td></tr>
<tr><td>Outdoor air</td><td>2 ACH minimum</td></tr>
<tr><td>Supply filtration</td><td>HEPA filters at the room supply, downstream of the AHU's two filter banks</td></tr>
<tr><td>Room recirculating units</td><td>Not permitted, except HEPA-filtered units where allowed</td></tr>
<tr><td>Room envelope</td><td>Sealed walls, ceiling, windows, penetrations; self-closing doors</td></tr>
<tr><td>Monitoring</td><td>Permanent pressure monitor with alarm</td></tr>
</tbody>
</table>

<h2>HEPA filtration at the room</h2>
<p>HEPA filters rated at least 99.97% efficient at 0.3 µm are placed at the supply outlets in the room ceiling, or immediately upstream in the duct, so that particles shed from ductwork or released by duct work above the ceiling cannot reach the patient. The AHU still provides its first and second filter banks per Standard 170, which protect coils and extend HEPA life. Specify:</p>
<ul>
<li>Terminal HEPA housings with gel or gasket seals and a means to test filter integrity in place.</li>
<li>Housings accessible from the room for replacement and scan testing, coordinated with ceiling layout.</li>
<li>Pressure drop at the end of filter life included in the AHU and terminal unit selections.</li>
</ul>
<p>Field testing methods are covered in <a href="<?= url('guides/hepa-filter-integrity-testing') ?>">HEPA filter integrity testing</a>. The filter bank arrangement at the AHU is covered in <a href="<?= url('guides/ashrae-170-filter-bank-specification') ?>">specifying ASHRAE 170 filter banks</a>.</p>

<h2>Airflow pattern in the room</h2>
<p>The intent is for clean air to reach the patient first, then move toward the door and out of the room. Typical arrangement:</p>
<ul>
<li>Supply diffusers located above or near the patient bed, using low-velocity, non-aspirating diffusers that avoid stirring up dust from surfaces.</li>
<li>Return or exhaust grilles near the door, so air flows from the patient zone toward the entrance.</li>
<li>Avoid locating returns behind the bed or in a way that draws air from the corridor across the patient.</li>
<li>Air leaving the room through the door gap supports positive pressure to the corridor.</li>
</ul>

<h2>Sealing the room</h2>
<p>Positive pressure only works if the room leaks in a controlled way, mainly at the door. Construction details:</p>
<ul>
<li>Monolithic gypsum ceiling, or a sealed clean-room style ceiling with gasketed tiles clipped in place.</li>
<li>Walls sealed to the structure above.</li>
<li>All penetrations (medical gas, electrical, data, plumbing) sealed with suitable sealants.</li>
<li>Fixed, sealed windows.</li>
<li>Self-closing doors with gaskets; door undercuts sized as part of the offset calculation.</li>
<li>Smooth, cleanable surfaces that do not harbour dust.</li>
</ul>
<p>A tighter room needs a smaller airflow offset to reach the target differential. The offset method is described in <a href="<?= url('guides/room-pressurization-offset-calculation') ?>">calculating room pressurization airflow offset</a>.</p>

<h2>Anterooms and combination rooms</h2>
<p>An anteroom is not always required for a PE room, but it improves pressure stability during entry. Where provided, pressures step from the PE room (most positive) to the anteroom to the corridor.</p>
<p>Some patients are both immunocompromised and have an airborne infectious disease. A combination AIIR/PE room protects the patient while protecting others. The common arrangement uses an anteroom that is either positive to both the patient room and corridor (acting as a clean airlock that pushes air both ways) or negative to both (acting as a sink), depending on the guideline followed. The patient room receives HEPA-filtered supply and its exhaust goes outdoors. The design is more complex, and the owner's infection prevention team should confirm the intended arrangement.</p>

<h2>AHU and system design considerations</h2>
<ul>
<li>Supply to PE units should come from AHUs with full Standard 170 filtration and humidity control.</li>
<li>Airflow to each room should be controlled by pressure-independent terminal units so HEPA loading does not reduce flow.</li>
<li>Room pressure relies on supply exceeding return; set the return or exhaust airflow to maintain a fixed offset.</li>
<li>Provide redundancy for fans serving PE units, because a loss of airflow removes protection immediately.</li>
<li>Put fans, terminal controllers and pressure monitors on essential power.</li>
<li>Protect outdoor air intakes serving PE areas from construction dust, which is a recognized source of Aspergillus exposure.</li>
</ul>
<p class="warn">Construction activity near PE units, including on the roof near outdoor air intakes, should trigger an infection control risk assessment. Increased filter monitoring and temporary intake protection are typical measures.</p>

<h2>Verification</h2>
<ul>
<li>Measure total supply airflow and confirm air changes.</li>
<li>Scan test terminal HEPA filters at installation and after replacement.</li>
<li>Measure pressure differential with doors closed, and smoke test at the door.</li>
<li>Particle counts are sometimes used by owners to verify room cleanliness after construction.</li>
<li>Check monitoring alarms and BAS reporting.</li>
</ul>
<?php guide_end([
    ['What is a protective environment room?', 'It is a room for severely immunocompromised patients that uses HEPA-filtered supply air, positive pressure and a sealed envelope to keep airborne fungal spores and other organisms away from the patient.'],
    ['Do protective environment rooms need HEPA filters?', 'Yes. Standard 170 and related guidelines call for HEPA filtration of supply air at the room, in addition to the air handler\'s filter banks.'],
    ['Should a PE room be positive or negative?', 'Positive to the corridor and adjacent spaces, so air flows out of the room and unfiltered air cannot enter.'],
    ['How is a combination AIIR and PE room ventilated?', 'Typically with HEPA-filtered supply to the patient room, exhaust to outdoors, and an anteroom whose pressure arrangement protects both the patient and others. The exact arrangement depends on the guideline followed and should be confirmed with infection prevention.'],
]);
