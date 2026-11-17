<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('acoustic-design-checklist'); ?>
<p class="lede">Use this checklist during design reviews to confirm that an air handler's sound has been accounted for from source to listener: the criteria are defined, the right data is in hand, every airborne path is analysed, and the attenuation shown on drawings will actually deliver the predicted reduction. It covers airborne sound only; vibration isolation has its own guides.</p>

<h2>1. Criteria and scope</h2>
<ul>
<li>☐ Each occupied space served by or adjacent to the unit has an assigned room criterion (NC, RC or dBA) recorded in the basis of design.</li>
<li>☐ Rooms with special requirements (performance, recording, teleconference, sleeping, healthcare) are identified and have octave-band targets, including 63 Hz where relevant.</li>
<li>☐ Outdoor receivers and the applicable bylaw limit, day and night, are identified for any outdoor unit or opening.</li>
<li>☐ The owner has agreed to the criteria in writing.</li>
<li>☐ A design margin below the criterion is stated, especially for low frequency bands.</li>
</ul>
<p>Choosing between rating methods is covered in <a href="<?= url('guides/nc-vs-rc-vs-dba-criteria') ?>">NC vs RC vs dBA</a>.</p>

<h2>2. Source data</h2>
<ul>
<li>☐ Sound power is in octave bands, 63 Hz to 8 kHz, not a single dBA number.</li>
<li>☐ Data is provided separately for discharge, inlet and casing-radiated paths.</li>
<li>☐ Data corresponds to the scheduled airflow, static pressure and fan speed.</li>
<li>☐ Data at minimum airflow or night setback speeds is also available where noise-sensitive spaces are occupied at those times.</li>
<li>☐ The test basis is stated (for example AHRI 260 for the unit or an AMCA standard for the fan), and whether values are tested or calculated.</li>
<li>☐ For fan arrays, the data is for all operating fans combined.</li>
<li>☐ Any integral attenuation (lined plenums, baffles, silencers) included in the data is identified, so it is not counted twice.</li>
<li>☐ Return fans, relief fans, exhaust fans and terminal units have their own data.</li>
<li>☐ Blade pass frequency at design speed is known, with the octave band it falls in.</li>
</ul>

<h2>3. Path identification</h2>
<ul>
<li>☐ Supply path to the critical room on each main trunk is identified.</li>
<li>☐ Return path to the nearest return opening is identified.</li>
<li>☐ Casing-radiated path into the mechanical room and through its walls, floor and ceiling is identified.</li>
<li>☐ Duct breakout from trunks over occupied ceilings is identified.</li>
<li>☐ Rooftop curb and duct drop paths are identified for roof-mounted units.</li>
<li>☐ Outdoor intake and exhaust paths to outdoor receivers are identified.</li>
<li>☐ Transfer openings and door undercuts that link the mechanical room to occupied spaces are identified.</li>
</ul>
<p>The physical meaning of each path is explained in <a href="<?= url('guides/inlet-discharge-casing-radiated-sound') ?>">inlet, discharge and casing-radiated sound paths</a>.</p>

<h2>4. Path calculations</h2>
<ul>
<li>☐ Each path has an octave-band calculation from source sound power to receiver sound pressure.</li>
<li>☐ Attenuation values come from manufacturer data or recognised references, such as the ASHRAE Applications Handbook.</li>
<li>☐ Branch power division is applied using airflow ratios.</li>
<li>☐ Terminal unit discharge and radiated sound are included.</li>
<li>☐ Room conversion uses an appropriate method for the room type.</li>
<li>☐ All paths to each receiver are summed logarithmically before comparison with the criterion.</li>
<li>☐ The governing band and governing path for each room are identified.</li>
</ul>
<p>The calculation procedure is in <a href="<?= url('guides/room-sound-from-ahu-data') ?>">calculating room sound levels from AHU sound data</a>.</p>

<h2>5. Attenuation components</h2>
<ul>
<li>☐ Silencers are scheduled with insertion loss by octave band, pressure drop and generated noise at the design face velocity.</li>
<li>☐ Silencer type matches hygiene requirements for its location (packless or film-lined where fibre is not allowed).</li>
<li>☐ Silencers have adequate straight duct upstream and downstream, as the manufacturer recommends, so performance is not degraded.</li>
<li>☐ Silencer pressure drop is included in the fan static pressure.</li>
<li>☐ Duct lining type, thickness and extent are shown on drawings.</li>
<li>☐ Lined elbows are used where the calculation relies on them.</li>
<li>☐ Duct velocities near sensitive rooms are low enough to avoid regenerated noise at fittings, dampers and diffusers.</li>
<li>☐ Unit casing construction (panel type, liner type in fan section) matches the casing-radiated data used.</li>
<li>☐ Ducts leaving the mechanical room have silencers at or near the wall, or lagging where break-in is a concern.</li>
</ul>

<h2>6. Building construction</h2>
<ul>
<li>☐ Mechanical room partitions have octave-band transmission loss adequate for the calculated requirement, not just an STC value.</li>
<li>☐ Partitions extend to the structural deck.</li>
<li>☐ Doors are sound-rated assemblies with seals; sound locks are provided where needed.</li>
<li>☐ Penetration sealing details are on the drawings.</li>
<li>☐ Rooftop curb openings are closed with a barrier around ducts.</li>
<li>☐ Outdoor barriers or acoustic louvres are dimensioned and shown.</li>
</ul>

<h2>7. Controls and operation</h2>
<ul>
<li>☐ Duct static pressure setpoint and reset limits are not set so high that fans run faster than necessary.</li>
<li>☐ Night or unoccupied fan speed limits are programmed where outdoor limits are lower at night.</li>
<li>☐ Fan array staging logic favours the quieter mode in noise-sensitive applications.</li>
</ul>

<h2>8. Submittal and verification</h2>
<ul>
<li>☐ The equipment specification requires octave-band data by path at the scheduled duty.</li>
<li>☐ The submittal review compares submitted data against the values used in the calculations.</li>
<li>☐ Any increase in submitted sound power triggers a recheck of affected paths.</li>
<li>☐ Field sound measurements are specified for critical rooms, with method, conditions and acceptance criteria.</li>
<li>☐ Factory or witness sound testing is specified if the project risk justifies it.</li>
</ul>
<p class="note">A checklist only works if someone owns each item. Assign responsibility (engineer, acoustician, manufacturer, contractor) next to each line when you use it on a project.</p>
<?php guide_end([
    ['What should an HVAC acoustic design review include?', 'It should confirm room criteria, octave-band sound data by path at the operating point, path calculations for supply, return, casing and breakout, attenuation components with pressure drop, building construction details and a verification plan.'],
    ['Which sound path is most often missed in design?', 'The return path and duct breakout near the mechanical room are frequently overlooked, along with transfer openings between the mechanical room and occupied spaces. Map every path before calculating.'],
    ['Should silencer pressure drop be included in fan selection?', 'Yes. Silencers add static pressure, which the fan must overcome. If it is left out, the fan will run faster than expected, producing more noise and using more energy than the design assumed.'],
]);
