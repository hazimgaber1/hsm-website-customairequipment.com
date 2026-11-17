<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('mechanical-room-noise-transmission'); ?>
<p class="lede">Noise from an air handler room reaches neighbouring spaces through walls, floors, doors, gaps around penetrations and ducts that pass through the room. Control it by setting a target for each adjacent space, building partitions with enough low-frequency transmission loss, sealing every penetration resiliently, and lagging or enclosing ducts that run through or out of the room.</p>

<h2>Step 1: Establish the noise budget</h2>
<ol>
<li>List every space that shares a wall, floor or ceiling with the mechanical room, including spaces diagonally above or below.</li>
<li>Assign each a room criterion (NC or RC) in octave bands.</li>
<li>Estimate the mechanical room sound level in octave bands from the casing-radiated and open-inlet sound power of all equipment, plus the room's absorption. The calculation is in <a href="<?= url('guides/casing-transmission-loss') ?>">calculating casing transmission loss and breakout</a>.</li>
<li>Subtract the target in each adjacent room from the mechanical room level. The difference, plus a correction for the shared wall area and receiving room absorption, is the transmission loss the partition must provide in each band.</li>
</ol>
<p>Mechanical room spectra are heavy at 63 to 250 Hz. The partition requirement is almost always governed by those bands, not by the mid frequencies on which STC ratings focus.</p>

<h2>Step 2: Plan the room location and layout</h2>
<p>The cheapest noise control is distance and buffering. Where you can influence planning:</p>
<ul>
<li>Put storage, corridors, stairs or washrooms between the mechanical room and sensitive spaces.</li>
<li>Avoid placing mechanical rooms directly above or beside conference rooms, bedrooms, patient rooms and recording or performance spaces.</li>
<li>Locate the unit so its fan section and loudest openings face away from the most sensitive wall.</li>
<li>Leave space for duct silencers before ducts leave the room, which is much easier than adding them later in a ceiling.</li>
</ul>
<p>Room sizing and service clearances are covered in <a href="<?= url('guides/ahu-mechanical-room-planning') ?>">AHU mechanical room planning</a>.</p>

<h2>Step 3: Choose wall and floor construction</h2>
<ol>
<li><strong>Use mass for low frequencies.</strong> Grouted or filled concrete block, cast concrete, or multiple layers of gypsum board provide the low-frequency transmission loss that light partitions lack.</li>
<li><strong>Decouple where mass alone is not enough.</strong> Double-stud walls, staggered studs or a gypsum wall on resilient channels with insulation in the cavity raise mid-frequency performance. At 63 Hz, decoupled light walls can still underperform heavy masonry, so check octave-band test data.</li>
<li><strong>Run partitions full height to the structural deck</strong>, not just to the ceiling. Sound flanks over a wall that stops at the ceiling tile.</li>
<li><strong>For rooms above sensitive spaces</strong>, consider a floating floor (a concrete slab on isolation pads or springs above the structural slab) and an isolated ceiling below. These are significant cost items and need early structural coordination.</li>
<li><strong>Add absorption inside the mechanical room.</strong> Absorptive wall panels lower the reverberant level inside the room, which reduces what reaches partitions. Expect a few decibels, most at mid and high frequencies.</li>
</ol>
<p class="warn">A heavy wall with a single unsealed duct opening can perform no better than a light wall. Openings, not panels, usually limit real-world performance.</p>

<h2>Step 4: Treat doors and openings</h2>
<ol>
<li>Specify sound-rated door assemblies with full perimeter seals and automatic door bottoms, tested as an assembly.</li>
<li>Where a mechanical room door opens to a sensitive area, use a sound lock: two doors with a small vestibule between them.</li>
<li>Avoid louvres or transfer grilles in the mechanical room walls to occupied spaces. If transfer air is unavoidable, route it through a lined transfer duct with bends.</li>
</ol>

<h2>Step 5: Seal penetrations</h2>
<p>Every pipe, duct and conduit through a partition is a potential leak and a potential vibration bridge. Follow these steps for each:</p>
<ol>
<li>Size the opening with a small annular gap around the service, rather than a large rough opening.</li>
<li>Pack the gap with mineral wool to the full wall depth.</li>
<li>Seal both faces with a non-hardening acoustic sealant, or with a firestop system rated for the assembly where fire separation is required.</li>
<li>Keep the service from touching the wall rigidly. Use a resilient sleeve or wrap so pipe vibration does not drive the wall.</li>
<li>Inspect penetrations before ceilings close. They are nearly impossible to fix later.</li>
</ol>

<h2>Step 6: Control duct break-in and breakout</h2>
<p>Ducts are the most common bypass of a good wall. Sound in the mechanical room breaks into a thin duct, travels through the partition inside it and breaks out on the other side. Sound inside the duct from the fan also breaks out into ceilings.</p>
<ol>
<li><strong>Put silencers at the wall line.</strong> A silencer placed where the duct leaves the mechanical room attenuates both the fan noise inside the duct and any noise that broke in within the room.</li>
<li><strong>Lag exposed ducts.</strong> Wrap ducts with insulation plus a limp mass layer (such as mass-loaded vinyl or sheet lead alternatives) or build a gypsum enclosure around them. The insulation must decouple the mass layer from the duct wall.</li>
<li><strong>Prefer round or heavier-gauge ducts</strong> for the first runs after the unit, since they resist low-frequency breakout better than flat rectangular ducts.</li>
<li><strong>Keep velocity moderate</strong> where ducts pass over sensitive spaces to limit both generated noise and breakout.</li>
</ol>

<h2>Step 7: Verify</h2>
<ol>
<li>Before occupancy, measure octave-band levels in the adjacent spaces with the equipment at design operation and other noise sources off.</li>
<li>Compare with the targets set in Step 1.</li>
<li>If a room fails, use the band that fails to point at the cause: low bands suggest mass or structure-borne transmission, mid and high bands suggest leaks and gaps.</li>
</ol>
<p>Structure-borne vibration is a separate path from everything above; if rooms below feel or hear rumble only when units start, check isolation and rigid connections, starting with <a href="<?= url('guides/flex-connector-vibration-short-circuits') ?>">vibration short-circuits at flex connectors</a>.</p>
<?php guide_end([
    ['What wall construction is best for a mechanical room?', 'Heavy construction such as grouted concrete block or cast concrete gives the best low-frequency performance, which is where fan noise is strongest. Partitions must reach the structural deck and every penetration must be sealed.'],
    ['What is duct lagging?', 'Duct lagging is a wrap of insulation and a limp mass layer, or a gypsum enclosure, around a duct to reduce sound breaking in or out through the duct wall. The insulation decouples the mass layer from the vibrating duct.'],
    ['Where should duct silencers go relative to the mechanical room wall?', 'Place them at or near the wall where the duct leaves the mechanical room. That attenuates fan noise in the duct and any noise that broke into the duct from the loud room.'],
]);
