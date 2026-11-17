<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('inlet-discharge-casing-radiated-sound'); ?>
<p class="lede">Sound from an air handler reaches occupants by three main airborne routes: down the supply duct from the discharge, back through the return or intake from the inlet, and through the casing walls into the surrounding room. A fourth route, structure-borne vibration, travels through the floor. Each path needs its own analysis because the attenuation along each is completely different.</p>

<h2>Path 1: discharge to supply outlets</h2>
<p>The fan pushes sound downstream with the air. That energy travels through the supply duct, splits at each branch, passes VAV boxes and fittings, and leaves through diffusers into the rooms. The discharge path is usually the one engineers think of first, and it usually has the most natural attenuation available:</p>
<ul>
<li>Lined duct and plenums absorb mid and high frequencies.</li>
<li>Branch takeoffs divide the sound power in proportion to airflow, so each room receives only its share.</li>
<li>Elbows, terminal units and end reflection at diffusers remove more energy, especially at low frequencies for end reflection.</li>
</ul>
<p>The critical rooms are those closest to the unit, served by the first branch off a short trunk. Those rooms get the most sound with the least attenuation, and they usually govern silencer selection.</p>

<h2>Path 2: inlet to return grilles and outdoor intakes</h2>
<p>Fans also radiate sound upstream, against the airflow. On the return side, that sound travels backward through the return duct to return grilles, which are frequently ceiling transfer openings or short return stubs right next to the mechanical room. Return paths are commonly shorter, more direct and less lined than supply paths, so the inlet path often governs in rooms adjacent to the equipment room.</p>
<p>On units with outdoor air intakes, inlet sound travels out through the louvre. That becomes a community noise issue covered in <a href="<?= url('guides/property-line-noise-limits') ?>">meeting property-line noise limits</a>. A return fan or relief fan adds a separate source with its own inlet and discharge data.</p>
<p class="note">Do not assume the return path is quiet because the inlet data is lower than discharge data. A short, unlined return with one elbow can deliver more sound to an adjacent room than a long supply run with several branches.</p>

<h2>Path 3: casing-radiated to the mechanical room and beyond</h2>
<p>The fan section raises sound levels inside the casing. Panels vibrate in response and radiate sound into the room around the unit. How much passes through depends on the panel's transmission loss: its mass, stiffness, any damping, and the quality of seals at doors and joints.</p>
<p>Once in the mechanical room, the sound builds up depending on how absorptive the room is, then passes through the room's walls, floor, ceiling, doors and penetrations into adjacent spaces. Radiated sound also enters ductwork that passes through the room: a thin-walled duct running through a loud mechanical room picks up noise and carries it into the building, a process called break-in.</p>
<p>The calculation of casing loss is detailed in <a href="<?= url('guides/casing-transmission-loss') ?>">calculating casing transmission loss and breakout</a>, and room construction methods in <a href="<?= url('guides/mechanical-room-noise-transmission') ?>">controlling noise transmission from mechanical rooms</a>.</p>

<h2>Duct breakout: a hybrid path</h2>
<p>Sound travelling inside a duct can also break out through the duct wall. Rectangular ducts are especially prone to breakout at low frequencies because their flat sides flex easily. When a large, high-velocity rectangular supply trunk runs over an occupied ceiling right after leaving the mechanical room, the breakout through its walls can dominate the room level even if the diffuser path is well attenuated. Round ducts have much higher breakout transmission loss at low frequencies because their walls are stiffened by curvature.</p>

<h2>Path 4: structure-borne vibration</h2>
<p>Rotating equipment produces vibration that passes into the floor through the unit base, then through the building structure, and radiates as sound in rooms that may be well away from the mechanical room. Structure-borne noise is typically low frequency and is controlled with isolators and attention to rigid connections rather than with airside treatment. Isolator types and deflection selection have their own guides in this section.</p>

<h2>Mapping paths for a design review</h2>
<p>A useful practice is to sketch the unit and draw every route from source to listener. For a typical indoor central-station AHU in a basement mechanical room, the list may look like this:</p>
<table>
<thead><tr><th>Path</th><th>Source data used</th><th>Main attenuation elements</th><th>Typical critical receiver</th></tr></thead>
<tbody>
<tr><td>Supply airborne</td><td>Discharge Lw</td><td>Silencers, lined duct, branches, terminals, end reflection, room</td><td>First room on main trunk</td></tr>
<tr><td>Supply breakout</td><td>Discharge Lw</td><td>Duct wall TL, ceiling TL</td><td>Room under trunk near shaft</td></tr>
<tr><td>Return airborne</td><td>Inlet Lw</td><td>Return silencer, lined return, transfer ducts</td><td>Rooms with returns next to mechanical room</td></tr>
<tr><td>Outdoor intake</td><td>Inlet Lw</td><td>Intake plenum, louvre, distance</td><td>Neighbour or property line</td></tr>
<tr><td>Casing-radiated</td><td>Casing Lw</td><td>Casing TL, room absorption, wall and door TL</td><td>Rooms sharing a wall or floor</td></tr>
<tr><td>Structure-borne</td><td>Vibration forces</td><td>Isolators, structure stiffness, flexible connections</td><td>Rooms above or below on light floors</td></tr>
</tbody>
</table>
<p>Each path's result is added on an energy basis at each receiver, then compared to the room criterion. A room is only as quiet as its loudest path: if the supply path delivers NC-28 but the return path delivers NC-38, nothing done on the supply side will help.</p>

<h2>Where paths show up on the unit data sheet</h2>
<p>The unit's sound data should provide inlet, discharge and casing-radiated sound power in octave bands. If a manufacturer supplies only fan-wheel sound power, the designer must estimate the effect of unit components and casing, which introduces uncertainty. Ask for path-specific data; how to read it is explained in <a href="<?= url('guides/octave-band-sound-data') ?>">reading AHU octave band sound data</a>.</p>
<?php guide_end([
    ['Which AHU sound path is usually the worst?', 'It varies, but the return path and casing-radiated path to rooms next to the mechanical room are frequently underestimated. Supply paths usually have more natural attenuation from branches and lined duct, while return paths are often short and direct.'],
    ['What is duct breakout noise?', 'Breakout is sound inside a duct passing through the duct wall into the surrounding space. Flat rectangular ducts are especially weak at low frequencies, so large trunks over occupied ceilings near the mechanical room are common culprits.'],
    ['Does vibration isolation reduce airborne AHU noise?', 'No. Isolators reduce vibration transmitted into the structure, which controls structure-borne noise. Airborne paths through ducts and casing need silencers, lining, casing mass and room construction.'],
]);
