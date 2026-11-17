<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('mixing-box-and-economizer-section'); ?>
<p class="lede">The mixing box is the section where outdoor air and return air meet through two (often three) sets of dampers before entering the filters. Its job is to blend the two streams into one well-mixed airstream at whatever ratio the controls call for, from minimum ventilation up to 100% outdoor air during economizer operation.</p>

<h2>The hardware in a mixing section</h2>
<p>A typical mixing box is a short, open casing section with these parts:</p>
<ul>
<li><strong>Outdoor air damper.</strong> Mounted on the end, side or top of the section, usually behind a louver or rain hood. On units that need tight minimum airflow control it is split into a small minimum-outdoor-air damper and a larger economizer damper.</li>
<li><strong>Return air damper.</strong> Mounted on the opposite face or on the top, admitting air coming back from the building.</li>
<li><strong>Relief or exhaust damper.</strong> Where the unit has a return fan, a third damper upstream of the return damper lets excess return air leave the building. This damper may be in the AHU or in a separate return fan section.</li>
<li><strong>Actuators and linkages.</strong> Each damper has its own actuator or, on simpler units, the outdoor and return dampers are linked so one opens as the other closes.</li>
<li><strong>Air blender (optional).</strong> A static mixing device that induces swirl to break up layers of hot and cold air.</li>
<li><strong>Airflow measuring station (optional).</strong> Often fitted in or just behind the outdoor air opening to verify ventilation.</li>
</ul>
<p>The section has no moving equipment other than dampers, so it is short, typically just long enough to carry the damper openings and allow some mixing distance before the filters.</p>

<h2>Damper blade arrangement</h2>
<p>Damper blade orientation and rotation have more influence on mixing than most designers expect.</p>
<h3>Parallel vs opposed blades</h3>
<p>Parallel-blade dampers turn all blades in the same direction and throw air to one side as they modulate, producing a strong directional jet. Opposed-blade dampers turn adjacent blades in opposite directions, so the stream stays roughly centred and the damper has a more gradual, nearly linear flow characteristic. Mixing boxes often use parallel blades deliberately, arranged so the outdoor and return jets are aimed into each other.</p>
<h3>Converging the streams</h3>
<p>When outdoor air enters through the end and return through the top, set the blades so that the outdoor air is deflected up and the return air is deflected down. The two jets collide and mix. If both are deflected the same way, the cold outdoor stream slides along the floor of the section and reaches the filters and preheat coil as a cold layer.</p>
<p class="note">Damper rotation should be shown on the shop drawings. It is easy to install a damper rotated 180 degrees, and the error only shows up in winter as uneven coil temperatures.</p>

<h2>Opening locations and mixing geometry</h2>
<p>The arrangement of the openings sets how the streams meet:</p>
<table>
<thead><tr><th>Arrangement</th><th>Mixing quality</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>Outdoor on end, return on top</td><td>Good when blades converge the streams</td><td>The most common arrangement</td></tr>
<tr><td>Outdoor and return on opposite sides</td><td>Very good; head-on collision</td><td>Needs side clearance for ducts</td></tr>
<tr><td>Outdoor and return on the same face</td><td>Poor; streams run side by side</td><td>Avoid, or add a blender</td></tr>
<tr><td>Outdoor on bottom, return on top</td><td>Good; buoyancy helps cold air rise into warm air</td><td>Common on curb-mounted outdoor units</td></tr>
</tbody>
</table>
<p>Damper face velocity also matters. A damper sized for very low velocity looks good on pressure drop, but a gentle stream mixes poorly. Moderately higher velocities through the outdoor damper, within limits that keep pressure drop and noise acceptable, give the jets enough momentum to mix. The minimum outdoor air damper needs special attention, since at minimum position it carries a small flow and must still deliver a measurable, stable rate.</p>

<h2>Air blenders</h2>
<p>A static air blender is a fixed array of curved vanes that spins the airstream and folds layers into each other. It is installed a short distance downstream of the dampers, usually followed by a straight run before the filters or coil. Blenders carry a pressure drop, which belongs in the <a href="<?= url('guides/total-static-pressure-budget') ?>">static pressure budget</a>, and they need a certain length of casing upstream and downstream that the manufacturer specifies.</p>
<p>Blenders are most valuable in cold climates with high outdoor air fractions, where a cold layer could trip a freeze stat or freeze a coil. If a unit is already in service and showing uneven temperatures, the diagnostic steps are in the <a href="<?= url('guides/mixed-air-stratification-troubleshooting') ?>">mixed-air stratification guide</a>.</p>

<h2>What the economizer adds</h2>
<p>An economizer is a capability, not a separate section. It uses the same dampers to bring in large amounts of outdoor air when that air can cool the building more cheaply than mechanical cooling. For that to work the hardware must allow:</p>
<ol>
<li>An outdoor air damper and intake sized for full design airflow, not just minimum ventilation.</li>
<li>A path for the extra air to leave the building, through a relief damper, relief fan or return fan with exhaust damper.</li>
<li>A return damper that can close tightly when the unit runs at 100% outdoor air.</li>
<li>Low-leakage dampers so the unit does not leak cold outdoor air during heating or warm air in summer. AMCA 500-D describes how damper leakage is tested; energy codes set the maximum leakage rates, so check the edition adopted in your jurisdiction.</li>
</ol>
<p>How the controls decide when to switch to economizer mode and how far to open the dampers is covered in the controls category under <a href="<?= url('guides/economizer-high-limit-controls') ?>">economizer high-limit controls</a>.</p>
<?php guide_end([
    ['What does a mixing box do in an air handler?', 'It combines outdoor air and return air in a controlled ratio using dampers, then passes the blend to the filters and coils. During economizer operation it can admit up to 100% outdoor air for free cooling.'],
    ['Should mixing box dampers be parallel or opposed blade?', 'Opposed-blade dampers give smoother flow control and are common for modulating service. Parallel-blade dampers are often used in mixing boxes because they can be oriented to aim the outdoor and return streams into each other, which improves mixing.'],
    ['Do I need an air blender?', 'An air blender is worth considering in cold climates when the unit can run with a high outdoor air fraction, or when the mixing box geometry is poor. It adds pressure drop and length, so it is not needed in every unit.'],
]);
