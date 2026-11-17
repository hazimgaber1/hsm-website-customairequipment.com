<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('low-dew-point-supply-air'); ?>
<p class="lede">Below about 40 F dew point, ordinary chilled water coils run out of reach. Get there by staging: a conventional coil removes the bulk of the moisture, a low-temperature coil or a desiccant wheel takes the air the rest of the way, and frost on any coil surface below 32 F is managed by defrost or by handing the job to the desiccant. Choose the split based on the target dew point, the energy available for regeneration, and how many hours a year the system runs.</p>

<h2>Step 1: Confirm the target and the load</h2>
<ol>
<li>State the required supply dew point and the tolerance, for example 35 F ± 2 F.</li>
<li>Calculate the supply airflow and the moisture to be removed from the design entering condition down to the target. Use the latent load method in <a href="<?= url('guides/dehumidification-load-calculation') ?>">calculating latent load and required supply dew point</a>.</li>
<li>Check whether the space truly needs that dew point continuously, or whether a slightly higher value would meet the requirement for most hours.</li>
<li>Identify the dehumidification design day for the site, which is usually a humid day rather than the hottest one.</li>
</ol>

<h2>Step 2: Understand what each method can reach</h2>
<table>
<thead><tr><th>Method</th><th>Practical supply dew point floor</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>Chilled water coil, 42 to 45 F water</td><td>Mid to high 40s F</td><td>Limited by water temperature and coil approach</td></tr>
<tr><td>Low-temperature chilled water or glycol, 34 to 38 F</td><td>About 40 F</td><td>Needs a dedicated low-temperature plant or heat exchanger</td></tr>
<tr><td>DX coil at low suction temperature</td><td>About 35 to 40 F</td><td>Coil surface below 32 F; frost risk</td></tr>
<tr><td>Brine or glycol below freezing with defrost</td><td>Low 30s F and below</td><td>Requires defrost cycles or parallel coils</td></tr>
<tr><td>Desiccant wheel</td><td>Well below 32 F</td><td>Requires reactivation heat; process air leaves warm</td></tr>
<tr><td>Coil plus desiccant</td><td>Well below 32 F with smaller wheel</td><td>Most common for very low dew points</td></tr>
</tbody>
</table>
<p>The desiccant mechanism, including reactivation energy, is covered in <a href="<?= url('guides/desiccant-dehumidification-wheels') ?>">desiccant dehumidification wheels and regeneration</a>.</p>

<h2>Step 3: Precondition with a conventional coil</h2>
<ol>
<li>Place a chilled water or DX coil first in the process airstream to bring outdoor air down to a dew point in the high 40s to low 50s F.</li>
<li>This stage removes most of the moisture at the lowest cost per pound, since it uses ordinary chilled water.</li>
<li>Size it at the design humid day, with face velocity and fins chosen to avoid carryover, and provide a drain pan suited to heavy condensate.</li>
<li>If energy recovery is available from exhaust, place it ahead of this coil to reduce its load.</li>
</ol>

<h2>Step 4: Finish with a low-temperature coil or a desiccant</h2>
<h3>Option A: second, colder coil</h3>
<ol>
<li>Add a second coil fed by low-temperature chilled water, glycol or DX at low suction.</li>
<li>For dew points near 40 F, coil surfaces may stay above freezing; check fin temperature at the leaving air side.</li>
<li>For targets below about 38 F, plan for frost on the coil surface.</li>
</ol>
<h3>Option B: desiccant wheel after the precooling coil</h3>
<ol>
<li>Feed precooled, near-saturated air into the desiccant wheel. Cool, moist entering air lets the wheel reach lower dew points with less reactivation energy than warm air would.</li>
<li>Select reactivation temperature and wheel face area for the target dew point at design entering conditions.</li>
<li>Add a post-cooling coil after the wheel to remove the heat of adsorption and carryover, bringing the supply to the required dry-bulb.</li>
<li>Choose a reactivation heat source: gas, steam, hot water or recovered heat. Cheap or recovered heat makes this option much more attractive.</li>
</ol>
<p class="note">Post-cooling after a desiccant wheel is sensible only, because the air is already dry. It can use warmer chilled water or even cooling tower water in some climates, which helps the energy balance.</p>

<h2>Step 5: Manage frost</h2>
<p>Any coil whose surface runs below 32 F will collect frost from the air's moisture, raising pressure drop and eventually blocking airflow.</p>
<ol>
<li>Use parallel coils that alternate: one dehumidifies while the other defrosts with warm fluid, hot gas or air.</li>
<li>Alternatively, schedule timed defrost cycles if the process can tolerate a brief rise in supply dew point, which is rare for critical applications.</li>
<li>Monitor coil air pressure drop to trigger defrost based on actual frost rather than time alone.</li>
<li>Where frost management becomes complex, shift more of the work to a desiccant wheel so coil surfaces can stay above freezing.</li>
</ol>
<p class="warn">Do not specify a DX coil to deliver a dew point in the low 30s F without a defrost strategy. It will work on startup and fail within hours as the coil frosts over.</p>

<h2>Step 6: Control the system</h2>
<ol>
<li>Control to supply dew point measured by a sensor suited to low humidity, such as a chilled mirror or a polymer sensor rated for low dew points.</li>
<li>Stage the precooling coil to a fixed leaving dew point, typically the minimum it can reliably reach.</li>
<li>Modulate the second stage, either the low-temperature coil or the wheel's reactivation heat, to hold the final dew point.</li>
<li>Control post-cooling to the supply dry-bulb setpoint.</li>
<li>Alarm on high supply dew point, reactivation airflow failure and coil frost pressure drop.</li>
</ol>

<h2>Step 7: Detail the air handler</h2>
<ol>
<li>Build the casing for very low dew point air: tight construction and well-sealed panels, since moist ambient air leaking in raises the supply dew point.</li>
<li>Check for condensation on the casing exterior where cold, dry supply air runs through a warm, humid mechanical room; insulate and thermally break as needed.</li>
<li>Provide separate reactivation intake and exhaust paths if a desiccant is used, with exhaust located away from intakes.</li>
<li>Plan for duct leakage: dry air ducts passing through humid spaces pick up moisture through leaks, raising the delivered dew point.</li>
</ol>
<p>Battery dry rooms and similar extreme applications are covered separately; see <a href="<?= url('guides/battery-dry-room-air-handling') ?>">battery dry room air handling</a>.</p>
<?php guide_end([
    ['How do you get supply air dew point below 40 F?', 'Use a conventional coil to remove most of the moisture, then finish with a low-temperature coil or a desiccant wheel. Coils below freezing need defrost; desiccants need reactivation heat and post-cooling.'],
    ['Can a chilled water coil reach a 40 F dew point?', 'Not with standard 42 to 45 F chilled water. It typically needs low-temperature chilled water or glycol in the mid 30s F, and colder still for lower dew points.'],
    ['Why precool air before a desiccant wheel?', 'Cool, nearly saturated air entering the wheel lets it reach a lower dew point with less reactivation energy. The precooling coil removes the bulk of the moisture cheaply with ordinary chilled water.'],
]);
