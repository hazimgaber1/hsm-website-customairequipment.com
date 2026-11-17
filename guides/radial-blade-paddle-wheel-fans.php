<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('radial-blade-paddle-wheel-fans'); ?>
<p class="lede">Radial blade fans have straight blades running outward from the hub, which makes them rugged, self-cleaning and tolerant of material passing through the wheel. They are the workhorse for conveying, dust-laden and sticky airstreams, accepting lower efficiency in exchange for reliability where a backward-inclined wheel would erode, clog or unbalance.</p>

<h2>Wheel types in the radial family</h2>
<h3>Open paddle wheel</h3>
<p>Flat blades bolted or welded to a central spider or hub, with no backplate or shroud. Material passes through easily and there are few surfaces for buildup. Paddle wheels are used for conveying chips, shavings, fibers, rags and other stringy or bulky material that would wrap around or lodge in a closed wheel. They are the least efficient of the family.</p>
<h3>Radial blade with backplate</h3>
<p>Straight radial blades welded to a backplate, with or without a partial front shroud. The backplate adds strength, allowing higher speeds and pressures. Used for dust-laden air, granular materials and general heavy-duty industrial exhaust.</p>
<h3>Radial tip</h3>
<p>Blades are curved at the heel (inlet) to match the incoming air direction more closely and become radial at the tip. Radial tip wheels are more efficient than straight radial wheels while keeping the self-cleaning, wear-resistant radial tip. They suit moderately dusty airstreams such as clean-side dust collector duty, kiln exhaust and dryer exhaust where some particulate is present.</p>

<h2>Why radial blades handle dirty air</h2>
<ul>
<li><strong>Self-cleaning geometry.</strong> Centrifugal force throws particles along a straight blade and off the tip rather than letting them settle in a pocket. Backward-curved and airfoil blades have surfaces where material can collect on the non-pressure side.</li>
<li><strong>Simple, thick blades.</strong> Radial blades can be made from heavy plate and fitted with replaceable wear liners or hard-facing. Airfoil blades are hollow and thin-skinned; erosion quickly perforates them.</li>
<li><strong>Tolerance of buildup.</strong> When some material does stick, it tends to deposit evenly along a radial blade, which keeps imbalance lower than on a complex blade shape.</li>
<li><strong>Repairability.</strong> Straight blades can be repaired or replaced in the field more easily than formed blades.</li>
</ul>
<p>Erosion and buildup still happen; diagnosing them is covered in <a href="<?= url('guides/industrial-fan-erosion-buildup') ?>">troubleshooting industrial fan erosion and buildup</a>.</p>

<h2>Performance characteristics</h2>
<p>Radial fans develop high pressure for their size because the blade tip leaves air with a large tangential velocity. Their performance curve has some important features:</p>
<ul>
<li><strong>Power rises with flow.</strong> Brake horsepower increases steadily as airflow increases. A radial fan is not non-overloading: if system resistance is lower than expected, airflow and power climb and the motor can overload. Size the motor for the maximum flow the system could see, or control flow with a damper or drive.</li>
<li><strong>Stable pressure curve.</strong> Pressure falls fairly steadily from shutoff, without the pronounced dip of forward-curved fans. Operation across a wide range is stable.</li>
<li><strong>Lower peak efficiency.</strong> Static efficiencies are typically lower than backward-inclined or airfoil designs. Radial tip wheels narrow the gap.</li>
</ul>
<table>
<thead><tr><th>Wheel type</th><th>Relative efficiency</th><th>Material handling</th><th>Typical service</th></tr></thead>
<tbody>
<tr><td>Open paddle</td><td>Lowest</td><td>Excellent, including stringy and bulky material</td><td>Pneumatic conveying through the fan, chips, shavings</td></tr>
<tr><td>Radial with backplate</td><td>Low to moderate</td><td>Very good for dust and granular material</td><td>Heavy dust exhaust, mill exhaust</td></tr>
<tr><td>Radial tip</td><td>Moderate</td><td>Good for light to moderate dust</td><td>Dryer, kiln, clean-side collector exhaust</td></tr>
<tr><td>Backward inclined (for reference)</td><td>High</td><td>Limited; erosion and buildup risk</td><td>Clean or lightly loaded air</td></tr>
</tbody>
</table>
<p>A comparison of the HVAC-oriented wheel shapes is in <a href="<?= url('guides/airfoil-backward-inclined-forward-curved') ?>">airfoil vs backward inclined vs forward curved</a>.</p>

<h2>Choosing a radial wheel</h2>
<ol>
<li><strong>Characterize the airstream.</strong> Dust loading in grains per cubic foot (g/m³), particle size, hardness and abrasiveness, moisture, stickiness and temperature.</li>
<li><strong>Decide whether material passes through the fan.</strong> If the fan is upstream of the collector or conveys material, choose a paddle or radial wheel. If it is on the clean side with light residual dust, a radial tip or even backward-inclined wheel may be acceptable.</li>
<li><strong>Check tip speed.</strong> Wear rate rises steeply with velocity. For abrasive dust, limit tip speed, even if that means a larger, slower wheel.</li>
<li><strong>Specify wear protection.</strong> Abrasion-resistant plate, replaceable liners on blades and scroll, ceramic tiles or hard-facing at high-wear zones.</li>
<li><strong>Select construction for the duty.</strong> Heavy-gauge housings, bolted access doors, drain connections, shaft seals and an arrangement that keeps bearings out of the airstream.</li>
</ol>
<p class="warn">Do not substitute a high-efficiency backward-inclined wheel into a dusty duty to save energy without assessing wear and buildup. The energy savings are quickly lost to wheel replacement and unplanned downtime.</p>

<h2>Construction features to look for</h2>
<ul>
<li>Heavy hub with keyed and set-screwed or taper-locked mounting, suited to high starting torque.</li>
<li>Bolted, replaceable blades on paddle wheels for field repair.</li>
<li>Housing inspection and cleanout doors positioned to reach the wheel and scroll.</li>
<li>Housing drains at low points for wet or washdown service.</li>
<li>Split housings on large fans to allow wheel removal without disconnecting ductwork.</li>
<li>Arrangements with bearings outside the airstream, such as arrangement 1, 8 or 9; see <a href="<?= url('guides/industrial-fan-drive-arrangements') ?>">industrial fan drive arrangements</a>.</li>
</ul>

<h2>Common applications</h2>
<ul>
<li>Woodworking and sawmill chip and dust conveying.</li>
<li>Paper and textile trim conveying.</li>
<li>Grain, feed and food powder handling.</li>
<li>Foundry and metalworking dust exhaust.</li>
<li>Mining and mineral processing exhaust.</li>
<li>Dryer and kiln exhaust with entrained particles.</li>
</ul>
<p>When a project calls for a rugged material-handling fan built to a specific duty, our <a href="<?= url('products/industrial-fans') ?>">industrial fans</a> page describes the construction options available.</p>
<?php guide_end([
    ['What is a paddle wheel fan used for?', 'Paddle wheel fans have open, flat radial blades without a backplate or shroud. They are used where bulky or stringy material such as chips, shavings or trim passes through the fan, because there is almost nothing for material to catch on.'],
    ['Are radial blade fans non-overloading?', 'No. Power on a radial fan rises steadily with airflow, so if system resistance is lower than designed the motor can overload. Size the motor for the maximum possible flow or control flow with a damper or drive.'],
    ['What is the difference between radial and radial tip wheels?', 'A radial tip wheel curves its blades at the inlet to meet the incoming air more efficiently, while keeping a radial blade at the tip. It is more efficient than a straight radial wheel and still handles moderate dust.'],
]);
