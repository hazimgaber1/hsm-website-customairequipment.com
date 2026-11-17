<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-array-discharge-velocity-uniformity'); ?>
<p class="lede">Each fan in an array throws a ring of high-velocity air off its wheel, so the air immediately downstream is anything but even. Given enough distance, those jets merge into a reasonably uniform profile; placed too close, a coil or filter sees hot spots of high velocity that hurt capacity, drain moisture, load filters unevenly and add noise.</p>

<h2>What the flow looks like behind a plenum fan</h2>
<p>A plenum wheel discharges air radially, around its full circumference, at a velocity close to the blade tip speed. With a fan running at several thousand feet per minute tip speed, the air leaving the wheel is moving many times faster than the 400 to 500 fpm (2.0 to 2.5 m/s) a cooling coil wants to see.</p>
<p>Right behind the wheel, the profile has distinct features:</p>
<ul>
<li>A low-velocity core directly downstream of the motor and hub, sometimes with slight reverse flow.</li>
<li>A ring of high-velocity air spreading outward from the blade tips.</li>
<li>Strong flow along the casing walls where the radial jets turn and run downstream.</li>
<li>Swirl in the direction of wheel rotation.</li>
</ul>
<p>In an array, neighbouring fans' jets meet between the wheels and turn downstream together, which helps mixing. With distance, shear between fast and slow air spreads momentum and the profile flattens. The question is how much distance the unit can afford.</p>

<h2>Why arrays usually do better than a single fan</h2>
<p>For the same cross-section, many small wheels spread their discharge over more of the face than one large wheel. Each jet is smaller and has less momentum, so it decays in a shorter length. That is one reason fan arrays can feed a downstream coil in a shorter section than a single large plenum fan. It is not automatic, though: an array with large gaps at the edges, or fans bunched toward one side of the casing, still produces an uneven profile.</p>
<p>The geometric rules for setting fan spacing and the distance to downstream components are in <a href="<?= url('guides/fan-array-plenum-depth-spacing') ?>">how to set fan array plenum depth and spacing</a>.</p>

<h2>Effects on downstream components</h2>
<table>
<thead><tr><th>Component</th><th>Effect of high local velocity</th><th>Effect of low or reversed local velocity</th></tr></thead>
<tbody>
<tr><td>Cooling coil</td><td>Condensate stripped off fins and carried downstream; reduced contact time raises leaving air temperature in that zone</td><td>Coil area underused; overall capacity falls short of the rating</td></tr>
<tr><td>Heating coil</td><td>Uneven leaving temperature, stratification</td><td>Low airflow over some tubes increases freeze risk in cold air</td></tr>
<tr><td>Filters</td><td>Media loads faster in high-velocity zones; local pressure drop rises; higher risk of bypass or blowout</td><td>Filter area wasted</td></tr>
<tr><td>Humidifier dispersion</td><td>Longer absorption distance where velocity is high</td><td>Wetting and condensation where air is slow</td></tr>
<tr><td>Sound attenuator</td><td>Higher self-generated noise and pressure drop in fast passages</td><td>Little effect</td></tr>
<tr><td>Airflow station</td><td>Measurement error if probes sample a non-representative profile</td><td>Same</td></tr>
</tbody>
</table>
<p>Coil and filter ratings, such as those under AHRI 410 for coils, assume uniform approach velocity. The farther the real profile departs from uniform, the farther actual performance departs from the rating. The specific moisture carryover limits for cooling coils are discussed in <a href="<?= url('guides/cooling-coil-face-velocity-moisture-carryover') ?>">cooling coil face velocity and moisture carryover</a>.</p>

<h2>How uniformity is described</h2>
<p>Uniformity is normally quantified from a grid of velocity readings across the face of the component. Common ways to report it include:</p>
<ul>
<li><strong>Percent of points within a band</strong> around the average, for example the share of readings within ±20% of the mean.</li>
<li><strong>Maximum deviation</strong> of any single point from the average.</li>
<li><strong>Coefficient of variation</strong> (standard deviation divided by the mean), which summarizes the whole field in one number.</li>
</ul>
<p>Specifications vary in which metric they use and how tight the limit is. When a project requires a value, state the measurement grid, the plane of measurement and the operating condition, or the number cannot be verified.</p>
<p class="formula">CV = σ ÷ V(avg) &nbsp;&nbsp; where σ is the standard deviation of point velocities</p>
<p>As an example, a 25-point traverse across a coil face averaging 480 fpm with a standard deviation of 72 fpm gives CV = 72 ÷ 480 = 0.15, or 15%.</p>

<h2>Ways manufacturers improve uniformity</h2>
<h3>Distance</h3>
<p>The simplest tool. More plenum depth lets jets decay before reaching the coil, at the cost of unit length.</p>
<h3>Diffuser or perforated baffle plates</h3>
<p>A perforated plate across the airstream adds a uniform resistance that spreads flow. Plates with variable open area can be targeted at high-velocity zones. Each adds pressure drop that every fan must overcome for the life of the unit, so they are a trade between energy and length.</p>
<h3>Fan layout</h3>
<p>Placing fans evenly across the full cross-section, with consistent spacing to walls, avoids dead zones along the edges. Alternating rotation direction across rows can reduce net swirl.</p>
<h3>Upstream components as straighteners</h3>
<p>In draw-through units, coils and filters sit upstream of the fans, where flow is drawn evenly toward many inlets. Draw-through arrangements avoid most discharge uniformity concerns but shift attention to the discharge plenum and duct connection. The trade-offs between arrangements are covered in <a href="<?= url('guides/draw-through-vs-blow-through-fan-arrangement') ?>">draw-through vs blow-through</a>.</p>

<h2>Uniformity at part load and with a failed fan</h2>
<p>Profiles change with operating conditions. At reduced speed, jet velocities fall but the shape of the profile stays broadly similar. With one fan stopped, the region directly behind it can have very low or reversed flow, and adjacent fans push harder. A design that is uniform with all fans running may develop a significant hole at the coil when one fan is out. Where the downstream component is sensitive, check uniformity in the one-fan-off condition, not only at design.</p>
<p class="note">Factory run testing is a good time to traverse the face of the first downstream component and confirm the profile before the unit ships.</p>
<?php guide_end([
    ['Why is airflow uneven behind a fan array?', 'Each plenum fan discharges a radial jet at close to blade tip speed, with a slow region behind its hub. These jets need distance to mix into a uniform profile.'],
    ['How does uneven airflow affect a cooling coil?', 'High-velocity zones can strip condensate off the fins and carry it downstream, while low-velocity zones leave coil surface unused. Overall capacity falls short of the rating.'],
    ['Do perforated diffuser plates help?', 'Yes. A perforated plate spreads airflow across the face by adding uniform resistance. It also adds pressure drop that the fans must overcome continuously.'],
    ['Does a failed fan change the velocity profile?', 'Yes. The area behind a stopped fan can see very low or reverse flow, so uniformity at the downstream component should be checked with one fan off when that component is sensitive.'],
]);
