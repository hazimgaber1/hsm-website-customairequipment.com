<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('school-acoustics-ansi-s12-60'); ?>
<p class="lede">ANSI/ASA S12.60 sets a maximum one-hour average background noise level for core learning spaces that is low enough to be one of the hardest HVAC acoustic targets in commercial work. Meeting it largely depends on where the air handler is placed, how far the air travels before it reaches the room, and how quietly it arrives.</p>

<h2>What S12.60 requires</h2>
<p>ANSI/ASA S12.60 is the American National Standard for acoustical performance criteria, design requirements and guidelines for schools. Part 1 covers permanent schools and Part 2 covers relocatable classroom structures. For core learning spaces such as classrooms, Part 1 sets a limit on background noise expressed as a one-hour A-weighted equivalent sound level, with the measurement taken with the HVAC system operating in its loudest normal mode. The limit for typical-size classrooms is 35 dBA, and the standard also sets a C-weighted limit to control low-frequency noise. It also sets reverberation time limits and requirements for sound isolation between spaces.</p>
<p class="note">S12.60 is a voluntary standard unless adopted by a code, a school board or a funding agency. Several jurisdictions and green building programs reference it. Confirm which edition and which limits the project must meet before design starts.</p>
<p>To put the background noise limit in perspective, a 35 dBA classroom is roughly comparable to an NC 25 to NC 30 rating, depending on spectrum. Many offices are designed to NC 35 to NC 40. HVAC is usually the largest contributor to classroom background noise, so the mechanical design determines whether the room complies.</p>

<h2>Why classroom acoustics matter</h2>
<p>Young children, students learning in a second language and students with hearing or attention difficulties are much more affected by background noise than adults in an office. Speech intelligibility depends on the difference between the teacher's voice and background noise. Low-frequency rumble from air handlers is especially masking and tiring. That is why the standard pays attention to both overall level and low-frequency content.</p>

<h2>Effect on air handler location</h2>
<p>The single most effective acoustic decision is distance. Practical guidance:</p>
<ul>
<li><strong>Do not place air handlers or fan coils above or within classrooms.</strong> Unitary equipment such as fan coils or unit ventilators in the room makes it very difficult to meet the limit. Where room-level terminals are necessary, select them for the criterion and verify with sound data, not catalog NC alone.</li>
<li><strong>Locate central units in mechanical rooms separated from classrooms</strong> by corridors, storage or washrooms. A mechanical room sharing a wall with a classroom needs high-transmission-loss construction and careful treatment of penetrations.</li>
<li><strong>Avoid rooftop units directly above classrooms.</strong> Breakout and structure-borne noise through a lightweight roof is a common cause of failure. If a rooftop unit is unavoidable, place it over a corridor or service space.</li>
<li><strong>Keep duct runs long enough for attenuation.</strong> Length with lining and fittings gives natural attenuation; a very short duct between the unit and the first classroom leaves no room to treat noise.</li>
</ul>

<h2>Effect on attenuation and air delivery</h2>
<p>Once the unit is placed, the noise path to the room includes fan noise traveling down supply and return ducts, breakout through duct walls, casing-radiated noise into the mechanical room, structure-borne vibration and air-generated noise at dampers and diffusers. For each path:</p>
<ol>
<li><strong>Fan selection.</strong> Pick fans operating near peak efficiency. Fan arrays shift sound energy toward higher frequencies, which are easier to attenuate, and can reduce the size of silencers.</li>
<li><strong>Silencers in the AHU or ductwork</strong> on both supply and return. Return paths are frequently forgotten, especially short transfer ducts.</li>
<li><strong>Low duct velocities</strong> near classrooms; branch ducts at roughly 600 to 800 fpm (3 to 4 m/s) are common targets in schools, with lower velocities at final runouts.</li>
<li><strong>Terminal units outside classrooms,</strong> above corridors, with lined discharge plenums.</li>
<li><strong>Diffusers selected well below the room criterion,</strong> since several diffusers add together.</li>
<li><strong>Vibration isolation</strong> of fans and the AHU, sized for the structure.</li>
</ol>
<p>The calculation method for predicting room sound from AHU sound power and attenuation along each path is covered in <a href="<?= url('guides/room-sound-from-ahu-data') ?>">room sound from AHU data</a>, and silencer selection is in <a href="<?= url('guides/dissipative-vs-packless-silencers') ?>">dissipative vs packless silencers</a>.</p>
<p class="warn">Do not rely on the NC rating of an air handler or diffuser printed in a catalog. Request octave-band sound power data and calculate the room level. Low-frequency bands often control the result.</p>

<h2>Implications for system choice</h2>
<p>S12.60 has pushed many school boards toward central air handlers with ducted distribution, dedicated outdoor air systems with quiet room terminals, and radiant or chilled beam systems where no fan is in the room. It has pushed away from classroom unit ventilators and through-wall units. A DOAS supplying ventilation at low velocity to each room, with sensible cooling done by quiet means, can meet the limit comfortably. The ventilation side of that choice is discussed in <a href="<?= url('guides/school-ahu-ventilation-design') ?>">K-12 school air handler ventilation design</a>.</p>

<h2>Specification and verification</h2>
<ul>
<li>State the S12.60 edition and the background noise limits in the basis of design and HVAC specifications.</li>
<li>Require octave-band sound power data for each AHU inlet, discharge and casing radiated path, and for terminal units.</li>
<li>Require factory sound test data, or a sound test at the manufacturer's facility, where risk is high.</li>
<li>Plan field measurement in representative classrooms with HVAC at its loudest normal operating mode, as the standard requires.</li>
<li>Allow time in the construction schedule to fix issues found during measurement, such as rattling grilles or duct breakout.</li>
</ul>
<p>Custom air handlers are well suited to meeting tight classroom criteria because fan type, casing construction and integral silencers can be tailored to the project. The <a href="<?= url('products/custom-air-handlers') ?>">custom air handlers</a> page explains those options.</p>
<?php guide_end([
    ['What background noise level does ANSI S12.60 require in classrooms?', 'For typical core learning spaces in permanent schools, Part 1 sets a one-hour average limit of 35 dBA with the HVAC operating, plus a low-frequency C-weighted limit. Confirm the edition and requirements adopted for your project.'],
    ['Can a classroom unit ventilator meet ANSI S12.60?', 'It is very difficult, because the fan is in the room. Most S12.60 compliant designs use central units or quiet terminal systems located outside the classroom.'],
    ['Is ANSI S12.60 mandatory?', 'Not by itself. It becomes mandatory when a building code, school board, funding agency or green building program adopts it for a project.'],
]);
