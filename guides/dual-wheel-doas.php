<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('dual-wheel-doas'); ?>
<p class="lede">A dual-wheel DOAS puts an enthalpy wheel ahead of the cooling coil to precondition outdoor air, and a sensible wheel after the coil to reheat the cold, dry supply using the building's exhaust. The first wheel cuts the coil load; the second delivers neutral or slightly cool supply air without new reheat energy, while also precooling the exhaust stream that feeds the first wheel.</p>

<h2>The arrangement</h2>
<p>Follow the outdoor air through the unit:</p>
<ol>
<li>Outdoor air passes through the <strong>enthalpy wheel</strong>, where it gives up heat and moisture to the exhaust air.</li>
<li>It then passes through the <strong>cooling coil</strong>, which cools it below the dew point needed to meet the space latent load, typically somewhere in the low to mid 50s F.</li>
<li>Finally it passes through the <strong>sensible wheel</strong>, where it picks up heat from the return air and leaves warmer but with the same humidity ratio.</li>
</ol>
<p>Now follow the return air going the other way:</p>
<ol>
<li>Return air from the space passes first through the <strong>sensible wheel</strong>, where it is cooled by the cold supply air from the coil.</li>
<li>That cooled return air then passes through the <strong>enthalpy wheel</strong>, where it absorbs heat and moisture from the incoming outdoor air before being exhausted.</li>
</ol>
<p>Because the exhaust reaching the enthalpy wheel is cooler than the room, it can absorb more heat from the outdoor air. That raises the enthalpy wheel's useful recovery compared with a single-wheel unit.</p>

<h2>Why the second wheel must be sensible</h2>
<p>The coil has just removed moisture from the supply. If the reheat wheel carried a desiccant, it would pick up moisture from the return air and add it back to the supply, undoing part of the coil's work. A sensible-only wheel moves heat without moisture, so the supply leaves at the dew point set by the coil. The broader differences between the two wheel types are in <a href="<?= url('guides/enthalpy-wheel-vs-sensible-wheel') ?>">enthalpy wheel vs sensible wheel</a>.</p>

<h2>A summer example in round numbers</h2>
<p>Suppose a school DOAS in a humid climate. Outdoor air is 92 F with a humidity ratio of 125 gr/lb. Return air is 75 F at 65 gr/lb. The target supply dew point is 52 F (about 58 gr/lb).</p>
<ul>
<li>The sensible wheel cools the return from 75 F to roughly 64 F as it reheats the supply.</li>
<li>The enthalpy wheel, now seeing 64 F exhaust, brings the outdoor air down to about 75 F and 80 to 85 gr/lb.</li>
<li>The cooling coil takes it to 52 F and 58 gr/lb.</li>
<li>The sensible wheel reheats it to around 63 F, the supply condition delivered to the space.</li>
</ul>
<p>These are illustrative, not a selection. The point is that the coil starts from a much lower enthalpy than outdoor air, and the space receives dry air that is not so cold that it overcools the rooms or needs boiler or electric reheat. The calculation of the required supply dew point itself is in <a href="<?= url('guides/dehumidification-load-calculation') ?>">calculating latent load and required supply dew point</a>.</p>
<p class="note">The sensible wheel's reheat is only free in the sense of energy. It adds fan pressure drop on both airstreams and a second wheel drive to maintain.</p>

<h2>What it achieves</h2>
<ul>
<li><strong>Lower coil and chiller capacity</strong> because the enthalpy wheel works with cooler exhaust.</li>
<li><strong>No purchased reheat energy</strong> for typical supply temperatures in the low to mid 60s F.</li>
<li><strong>Drier supply air</strong> than the zone terminal units can provide, letting them handle sensible load only with dry coils.</li>
<li><strong>Winter recovery</strong> from both wheels, though the sensible wheel is usually slowed or stopped in heating mode as its reheat role disappears.</li>
</ul>

<h2>Control in each season</h2>
<h3>Summer dehumidification</h3>
<p>Enthalpy wheel at full speed. Cooling coil controls to the supply dew point or a leaving coil temperature. Sensible wheel modulates speed to hold the supply air temperature setpoint, slowing when less reheat is needed.</p>
<h3>Mild, humid weather</h3>
<p>The most demanding season for dehumidification. The enthalpy wheel may slow when outdoor enthalpy is near return enthalpy. The coil still runs to dry the air, and the sensible wheel provides as much reheat as the return can give.</p>
<h3>Winter</h3>
<p>Enthalpy wheel runs for heating recovery, subject to frost control. The sensible wheel stops or modulates, since reheating is no longer needed after a coil that is off. A heating coil handles any remaining heating need.</p>

<h2>Design considerations</h2>
<ul>
<li><strong>Exhaust must return to the unit.</strong> Both wheels need return air. If most building exhaust leaves through separate toilet and kitchen fans, the available return may be too small.</li>
<li><strong>Leakage on the sensible wheel</strong> moves return air into the supply after the coil. That air is undehumidified and can raise supply dew point slightly. Keep pressures arranged to limit it and use a purge.</li>
<li><strong>Casing length and pressure drop</strong> grow with two wheels. Check the fan power budget.</li>
<li><strong>Exhaust air class</strong> applies to both wheels.</li>
<li><strong>Condensation risk</strong> on the sensible wheel's return side when cold coil air cools return below its dew point in very humid buildings. Provide a drain pan.</li>
</ul>

<h2>Where it fits and where it does not</h2>
<p>Dual-wheel units suit schools, offices, dormitories and other buildings in humid climates where outdoor air drives the latent load and space terminal units handle sensible load. They are less suited to very low dew point targets, which need active desiccants; see <a href="<?= url('guides/desiccant-dehumidification-wheels') ?>">desiccant dehumidification wheels</a>. Where the return air cannot reach the unit, a single enthalpy wheel with other reheat options is usually simpler.</p>
<?php guide_end([
    ['What is a dual-wheel DOAS?', 'It is a dedicated outdoor air unit with an enthalpy wheel before the cooling coil and a sensible wheel after it. The first wheel precools and predries outdoor air; the second reheats the supply using return air, without adding moisture.'],
    ['Why is the second wheel in a dual-wheel DOAS sensible only?', 'A desiccant reheat wheel would add moisture from the return back into the supply air that the coil just dried. A sensible wheel moves heat only, so the supply dew point stays where the coil set it.'],
    ['Does a dual-wheel DOAS eliminate reheat energy?', 'It eliminates purchased reheat for typical supply temperatures in the low to mid 60s F. It does add fan pressure drop on both airstreams and a second wheel drive to maintain.'],
]);
