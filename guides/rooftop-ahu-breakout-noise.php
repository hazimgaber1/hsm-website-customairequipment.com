<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('rooftop-ahu-breakout-noise'); ?>
<p class="lede">Noise from a rooftop air handler reaches the floor below through three main routes: sound radiated from the bottom of the unit into the curb and through the roof opening, fan noise travelling down the supply and return drops, and vibration carried into a lightweight roof structure. The fixes are mostly decided during design: where the unit sits, how the curb opening is closed, how the ducts drop, and how the unit is isolated.</p>

<h2>Step 1: Identify what sits below</h2>
<ol>
<li>Overlay the roof plan on the floor plan below and mark the room under the unit, under each duct drop, and within roughly one structural bay in each direction.</li>
<li>Assign a room criterion to each. A storage room, washroom or corridor tolerates far more than a conference room or classroom.</li>
<li>Note the roof structure: steel deck on joists is light and flexible; concrete is heavier and stiffer. Lightweight roofs transmit both airborne and structure-borne noise much more readily.</li>
</ol>
<p>If the unit can still move, put it over the least sensitive space and as close to columns or main girders as structure allows. That single decision often does more than every downstream treatment combined.</p>

<h2>Step 2: Get the right sound data</h2>
<p>For rooftop analysis you need octave-band sound power for the discharge and inlet openings that face downward, and for casing-radiated sound, ideally the portion radiated by the bottom panel. Ask the manufacturer how bottom-panel radiation is reported; some data sets give total casing sound only. The calculation methods are the same as for indoor units, with the roof deck and ceiling treated as the partition. Data definitions are in <a href="<?= url('guides/inlet-discharge-casing-radiated-sound') ?>">inlet, discharge and casing-radiated sound paths</a>.</p>

<h2>Step 3: Close the roof opening inside the curb</h2>
<p>A roof curb surrounds an opening in the deck. Only the duct connections need to pass through it; the rest of the opening is often left open, so the unit bottom radiates directly into the ceiling plenum. Close it:</p>
<ol>
<li>Infill the deck opening around the duct penetrations with a solid barrier, typically multiple layers of gypsum board or a sheet steel and gypsum assembly on framing inside the curb.</li>
<li>Seal every joint and the gaps around the ducts with acoustic sealant.</li>
<li>Add mineral wool insulation in the curb cavity above the barrier to absorb sound between the unit bottom and the infill.</li>
<li>Keep the infill separated from the ducts with a small resilient gap so duct vibration does not drive it.</li>
</ol>
<p class="warn">An open curb is the most frequent reason rooftop units are heard below. A heavy, sealed infill typically yields more benefit than any upgrade to the unit casing itself.</p>

<h2>Step 4: Treat the duct drops</h2>
<p>Supply and return drops run straight down through the roof into the ceiling plenum, often discharging close to the room under the unit. Low-frequency fan noise passes down the duct and breaks out of its walls as soon as it enters the ceiling.</p>
<ol>
<li><strong>Use the shortest acceptable vertical drop, then turn horizontally</strong> with a lined elbow before any outlet. A lined elbow adds attenuation; a straight drop into a diffuser adds almost none.</li>
<li><strong>Specify round or heavy-gauge duct</strong> for the first few metres below the roof. Thin rectangular duct radiates low frequencies into the ceiling.</li>
<li><strong>Lag the drop</strong> with insulation and a limp mass layer, or enclose it in gypsum board through the ceiling space if breakout is still too high.</li>
<li><strong>Place silencers</strong> in the horizontal run just after the drop, or select a unit with integral attenuation in its discharge and return plenums.</li>
<li><strong>Keep return openings away from the room below.</strong> A return grille placed directly under the unit is a direct sound path from the fan inlet.</li>
</ol>

<h2>Step 5: Isolate the unit from the roof structure</h2>
<ol>
<li>Confirm internal fan isolation is installed and working, and that shipping restraints are removed at startup.</li>
<li>On lightweight roofs or over sensitive spaces, add a spring isolation curb or spring rails between the unit and the curb. These provide a second isolation stage designed for rooftop wind and weather. Check the combination with the internal isolators to avoid double-isolation problems; the trade-offs are in <a href="<?= url('guides/internal-fan-isolation-vs-unit-isolation') ?>">internal fan isolation vs isolating the whole unit</a>.</li>
<li>Use restrained isolators rated for the site's wind and seismic requirements.</li>
<li>Provide flexible duct connections where the unit is spring-mounted on top of the curb, and keep conduit and piping flexible.</li>
<li>Ask the structural engineer to check the roof's stiffness at the unit location. Isolators need to be much softer than the structure to work.</li>
</ol>

<h2>Step 6: Reduce noise at the source</h2>
<ul>
<li>Select fans for lower tip speed and near peak efficiency.</li>
<li>Consider a fan array, which shifts energy to higher frequencies that the curb infill and ductwork attenuate better.</li>
<li>Use the unit's lined discharge plenum to reduce noise before it enters the drop.</li>
<li>Limit fan speed during occupied hours in noise-sensitive spaces if the system has capacity to spare.</li>
</ul>

<h2>Step 7: Verify after installation</h2>
<ol>
<li>Measure octave-band levels in the room below with the unit at design airflow and then off.</li>
<li>If low-frequency levels are high, check the curb infill for gaps and the duct drop for breakout; then check isolators for contact or bottoming.</li>
<li>If levels change when you touch or load the roof structure near the unit, vibration transmission is involved.</li>
</ol>
<p>Noise travelling outdoors toward neighbours is a different problem with different rules; see <a href="<?= url('guides/property-line-noise-limits') ?>">meeting property-line noise limits for outdoor units</a>. Roof curb construction itself is covered in <a href="<?= url('guides/roof-curb-vs-steel-dunnage') ?>">roof curb vs steel dunnage</a>.</p>
<?php guide_end([
    ['Why can I hear the rooftop unit in the office below?', 'The most common reasons are an open deck opening inside the curb that lets sound from the bottom of the unit straight into the ceiling, short duct drops with no attenuation, and vibration transmitted into a lightweight roof. Each can be checked and treated separately.'],
    ['How do I seal the roof opening inside a curb?', 'Install a barrier of several layers of gypsum board or a steel and gypsum assembly inside the curb around the duct penetrations, seal all joints with acoustic sealant and add mineral wool above it. Keep a resilient gap around the ducts.'],
    ['Do spring isolation curbs stop rooftop noise?', 'They reduce structure-borne vibration into the roof, which helps on lightweight roofs. They do not stop airborne noise through the curb opening or down the ducts, so they are only one part of the solution.'],
]);
