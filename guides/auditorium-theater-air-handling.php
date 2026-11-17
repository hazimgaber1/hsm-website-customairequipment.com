<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('auditorium-theater-air-handling'); ?>
<p class="lede">Auditoriums and theaters combine two demands that pull in opposite directions: a very large occupant load that needs a lot of air, and a noise criterion so low that the air must arrive almost silently. The usual answer is a generously sized air handler, low duct and outlet velocities, and supply delivered from below or at low velocity from above.</p>

<h2>Loads in an assembly space</h2>
<p>Fixed seating can put one person in roughly 7 to 10 ft² (0.65 to 0.9 m²) of floor area, so occupants dominate both the sensible and the latent load. Stage lighting adds a concentrated sensible load over the stage and fly tower, and the house lighting is usually modest. Envelope loads are often small relative to the volume because many halls have few or no windows.</p>
<p>Ventilation follows the same pattern. With so many people, the per-person component of ASHRAE 62.1 drives a large outdoor air quantity. Because a full house may only occur for a few hours a day, demand-controlled ventilation based on CO₂ or ticketed occupancy saves considerable energy, provided the minimum ventilation rate is still met when the hall is partially filled.</p>
<h3>Latent load and part-load humidity</h3>
<p>A packed house produces a high latent load at moderate sensible load. During shoulder seasons the sensible load may be satisfied before enough moisture has been removed. Plan for reheat, a wraparound heat pipe or another way to decouple dehumidification from cooling. Without it, audiences complain of a clammy hall during spring and fall performances.</p>

<h2>Noise criteria drive the design</h2>
<p>Performance spaces commonly carry noise criteria of NC 15 to NC 25 (or the equivalent RC or NCB rating), with recording studios and concert halls at the low end. Office spaces, by comparison, usually sit around NC 35 to 40. Every decibel of attenuation needed between the fan and the room costs space, pressure drop and money, so acoustic decisions must be made early.</p>
<p>Important levers, in rough order of effectiveness:</p>
<ol>
<li><strong>Location of the air handler.</strong> Keep it well away from the house, ideally separated by a corridor or service space, and never directly above the audience or stage.</li>
<li><strong>Low duct velocities.</strong> Main ducts near the hall often run at 1,000 fpm (5 m/s) or less, and branch ducts and final runouts considerably lower. Velocity-generated noise rises steeply with speed.</li>
<li><strong>Low outlet velocities.</strong> Diffusers, grilles and under-seat outlets must be selected to the room criterion with margin, since many outlets add together.</li>
<li><strong>Fan selection.</strong> Choose fans that operate near peak efficiency at low tip speed. A fan array often helps because smaller wheels shift sound energy to higher frequencies that are easier to attenuate.</li>
<li><strong>Attenuators and lined plenums</strong> on both supply and return paths, including the return air transfer paths that are often overlooked.</li>
</ol>
<p>The difference between NC, RC and dBA criteria, and why low-frequency rumble matters in halls, is explained in <a href="<?= url('guides/nc-vs-rc-vs-dba-criteria') ?>">NC vs RC vs dBA</a>. Silencer choices are compared in <a href="<?= url('guides/dissipative-vs-packless-silencers') ?>">dissipative vs packless silencers</a>.</p>
<p class="warn">Low-frequency noise from fans and from duct breakout carries through walls and ceilings that block mid and high frequencies well. Check the 63 Hz and 125 Hz octave bands, not just the single-number rating.</p>

<h2>Supply air delivery options</h2>
<table>
<thead><tr><th>Approach</th><th>How it works</th><th>Where it fits</th></tr></thead>
<tbody>
<tr><td>Under-seat or riser supply</td><td>Air enters from a plenum under the seating at low velocity, slightly below room temperature, and rises with the heat plume of the audience</td><td>Fixed-seat halls with a raked floor and accessible plenum; very quiet; conditions only the occupied zone</td></tr>
<tr><td>Low-velocity overhead supply</td><td>Large diffusers or slots in the ceiling deliver air with low throw; return high or low</td><td>Flat-floor halls or renovations where a plenum under the seating is impossible</td></tr>
<tr><td>Sidewall nozzles</td><td>Long-throw nozzles from side walls</td><td>Large-volume halls; harder to keep quiet and draft-free</td></tr>
</tbody>
</table>
<p>Under-seat supply is popular for new performing arts spaces because it delivers air where people sit and lets warm air stratify in the upper volume. Supply temperatures are typically a few degrees cooler than the occupied zone, never cold enough to cause draft at the ankles. The air handler must produce that elevated supply temperature while still dehumidifying, which again points toward reheat or a recovery device downstream of the cooling coil.</p>

<h2>The air handler itself</h2>
<p>An auditorium AHU is often a single-zone variable-volume unit with economizer and energy recovery. Features worth specifying include:</p>
<ul>
<li>Low face velocities on coils and filters, which reduce pressure drop and, in turn, fan speed and noise.</li>
<li>Fan sections isolated from the casing with spring isolators and flexible connections, plus a heavy base or inertia pad where the unit sits on a structure near the hall.</li>
<li>Casing panels with high transmission loss where the unit shares a wall with sensitive space.</li>
<li>Integral discharge and return plenums with acoustic lining, which save duct length.</li>
<li>Stage and house zones separated, either with separate units or with zone dampers, because stage heat and house occupancy peak independently.</li>
</ul>
<p>Pre-cooling before a performance is common: the hall can be cooled during the afternoon so that the unit has thermal mass in hand when the audience arrives. Controls should allow that schedule to be triggered from the event calendar.</p>

<h2>Smoke control and life safety</h2>
<p>Many jurisdictions require smoke control for large assembly spaces with stages. The air handler may be part of the smoke management system, either shutting down, switching to full exhaust or providing makeup air. Coordinate this early with the fire protection engineer; it affects damper ratings, fan sizing and controls. Gymnasiums used as assembly halls have a different load profile and are covered in <a href="<?= url('guides/gymnasium-air-handling') ?>">gymnasium air handling</a>. If you are weighing fan array options for a quiet hall, the <a href="<?= url('products/fan-arrays') ?>">fan array</a> page outlines what can be configured.</p>
<?php guide_end([
    ['What noise criterion is typical for an auditorium?', 'Many performance spaces are designed to NC 15 to NC 25 or an equivalent RC rating, with concert halls and recording spaces at the lower end. The acoustic consultant sets the target, and it should be agreed before the air handler location is fixed.'],
    ['Why is under-seat supply popular in theaters?', 'Air delivered at low velocity under the seats reaches the audience directly and rises with their body heat, so it is quiet and conditions only the occupied zone. It does require a plenum under the seating.'],
    ['Do auditoriums need demand-controlled ventilation?', 'Not always by code, but it is usually worthwhile because full occupancy only happens for a few hours. CO2 sensing or event scheduling can reduce outdoor air when the hall is empty or partly filled.'],
]);
