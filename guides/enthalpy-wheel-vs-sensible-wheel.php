<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('enthalpy-wheel-vs-sensible-wheel'); ?>
<p class="lede">An enthalpy (total energy) wheel transfers both heat and moisture between exhaust and outdoor air; a sensible wheel transfers heat only. Choose the enthalpy wheel when outdoor air latent load or winter dryness matters, and the sensible wheel when you must not return moisture to the supply or when the wheel's job is reheat.</p>

<h2>How each wheel moves energy</h2>
<p>Both wheels are rotating matrices of small flutes that alternately sit in the exhaust and outdoor airstreams. Heat moves because the matrix warms in one stream and gives that heat up in the other. The difference is the surface coating.</p>
<p>A <strong>sensible wheel</strong> has uncoated or non-hygroscopic surfaces. Moisture only transfers if the matrix drops below the dew point of one airstream, which causes condensation on one side and re-evaporation on the other. That incidental transfer is small and uncontrolled, and it is usually ignored in ratings.</p>
<p>An <strong>enthalpy wheel</strong> carries a desiccant coating that adsorbs water vapour where the vapour pressure is high and releases it where the vapour pressure is low. In summer it pulls moisture out of humid outdoor air and dumps it to the drier exhaust. In winter it does the reverse, picking up moisture from warm, humid exhaust and adding it to dry outdoor air. The coating choice itself is a separate topic, covered in <a href="<?= url('guides/wheel-media-aluminum-polymer-desiccant') ?>">wheel media: aluminum, polymer and desiccant coatings</a>.</p>

<h2>Side-by-side comparison</h2>
<table>
<thead><tr><th>Factor</th><th>Enthalpy (total) wheel</th><th>Sensible wheel</th></tr></thead>
<tbody>
<tr><td>Sensible effectiveness</td><td>Typically 65 to 80%</td><td>Typically 65 to 80%</td></tr>
<tr><td>Latent effectiveness</td><td>Typically 55 to 75%</td><td>Near zero (incidental only)</td></tr>
<tr><td>Summer outdoor air latent load reduction</td><td>Large</td><td>None</td></tr>
<tr><td>Winter humidification load reduction</td><td>Large</td><td>None</td></tr>
<tr><td>Frost onset</td><td>Lower outdoor temperature than a sensible wheel</td><td>Starts at milder outdoor temperatures</td></tr>
<tr><td>Use as passive reheat after a cooling coil</td><td>Not suitable; would re-add moisture</td><td>Well suited</td></tr>
<tr><td>Cost</td><td>Higher</td><td>Lower</td></tr>
</tbody>
</table>

<h2>Latent transfer: where the energy savings differ</h2>
<p>On a humid summer design day, the latent portion of outdoor air load can be as large as the sensible portion or larger. Take 10,000 cfm of outdoor air at 95 F with a humidity ratio of 120 grains per pound, and room exhaust at 75 F and 65 grains. The latent load difference alone is 0.68 × 10,000 × (120 − 65), which is roughly 374,000 Btu/h. A sensible wheel recovers none of that. An enthalpy wheel at 65 percent latent effectiveness recovers about 243,000 Btu/h, which reduces cooling coil size and chiller tonnage.</p>
<p>In winter the logic is the same in reverse. Buildings with humidification lose much of the humidifier output through exhaust. An enthalpy wheel returns a large share of that moisture to the supply and can cut humidifier capacity substantially.</p>
<p class="note">The 0.68 constant in the latent load equation assumes standard air and humidity ratio in grains per pound of dry air. Correct it for altitude above about 2,000 ft.</p>

<h2>Frost behaviour in cold climates</h2>
<p>Frost forms when warm, humid exhaust is cooled below its dew point by a matrix that is also below 32 F. In a sensible wheel, nothing removes moisture from the exhaust before it reaches the cold part of the matrix, so frosting can begin at relatively mild outdoor temperatures if the exhaust is humidified.</p>
<p>An enthalpy wheel moves part of that moisture into the incoming outdoor air before it can condense. The exhaust leaving the wheel is drier, so its dew point is lower and frost starts at a colder outdoor temperature. For a typical office with 30 percent indoor RH in winter, an enthalpy wheel often runs without frost protection down to temperatures where a sensible wheel would already need control. The exact number depends on indoor humidity and effectiveness, so calculate it rather than assuming it; see <a href="<?= url('guides/frost-threshold-temperature-calculation') ?>">calculating the frost threshold temperature</a>.</p>
<p class="warn">Do not assume an enthalpy wheel is frost-proof. Facilities with high winter indoor humidity, such as hospitals, museums and natatoriums, can frost an enthalpy wheel in northern Canadian and US climates.</p>

<h2>Where the sensible wheel is the right choice</h2>
<p>A sensible wheel is not just a cheaper enthalpy wheel. It is the better choice in several cases:</p>
<ul>
<li><strong>Reheat duty after a cooling coil.</strong> When a wheel is used downstream of the coil to warm overcooled air, it must not add moisture back. The two-wheel arrangement is explained in <a href="<?= url('guides/dual-wheel-doas') ?>">dual-wheel DOAS</a>.</li>
<li><strong>Exhaust with humidity you do not want back.</strong> Pool halls, kitchens and some process areas generate moisture that should leave the building.</li>
<li><strong>Climates with little latent load and low winter humidification.</strong> If the building does not humidify and summers are dry, the latent coating earns little.</li>
<li><strong>Exhaust with water-soluble odours or contaminants</strong>, where desiccant transfer is a concern. Sensible media does not eliminate carryover, though, so confirm with the applicable exhaust air class.</li>
</ul>

<h2>Where the enthalpy wheel earns its cost</h2>
<ul>
<li>Dedicated outdoor air systems in humid climates, where the wheel takes a large share of the dehumidification load.</li>
<li>Schools, offices and assembly spaces with high outdoor air fractions.</li>
<li>Buildings that humidify in winter, where moisture recovery reduces humidifier energy and steam or electric demand.</li>
<li>Cold climates where reducing frost control energy is worthwhile.</li>
</ul>

<h2>Making the call</h2>
<p>Run both wheels through the same certified selection software at your summer and winter design conditions, and look at three numbers: the cooling coil load leaving the wheel, the humidifier load in winter, and the frost threshold. If the enthalpy wheel moves the cooling coil down a size or eliminates frost control at your design temperature, the extra cost is usually justified. If the wheel is doing reheat or handling moist exhaust, use sensible media regardless of the savings estimate.</p>
<?php guide_end([
    ['What is the difference between an enthalpy wheel and a sensible wheel?', 'An enthalpy wheel has a desiccant coating that transfers moisture as well as heat. A sensible wheel transfers heat only. Both have similar sensible effectiveness, but only the enthalpy wheel reduces latent load and winter humidification.'],
    ['Does an enthalpy wheel frost less than a sensible wheel?', 'Usually yes. The enthalpy wheel moves moisture from the exhaust into the supply before it can condense, so frost starts at a colder outdoor temperature. High indoor humidity can still frost it in severe cold.'],
    ['Can an enthalpy wheel be used for reheat after a cooling coil?', 'No. A reheat wheel must not add moisture to air that was just dried by the coil. Use a sensible wheel for that duty, as in a dual-wheel DOAS arrangement.'],
]);
