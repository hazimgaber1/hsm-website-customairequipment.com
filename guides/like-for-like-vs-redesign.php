<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('like-for-like-vs-redesign'); ?>
<p class="lede">Once a unit has been condemned, the next choice is whether the new air handler should simply reproduce the old one's airflow, capacity and arrangement, or be re-engineered to today's measured loads, ventilation rates and energy code; like-for-like is faster and lower-risk to coordinate, while redesign usually delivers better performance and avoids repeating old mistakes.</p>

<h2>What each approach actually means</h2>
<p><strong>Like-for-like replacement</strong> takes the original schedule (airflow, external static, coil capacities, arrangement and connection locations) and buys a new unit to match. The engineering effort is small, connections line up, and approvals are often simpler because the system is not changing.</p>
<p><strong>Redesigned replacement</strong> starts from current conditions. The engineer recalculates loads, checks ventilation against the version of ASHRAE 62.1 or the local code adopted in the jurisdiction, applies current energy code requirements for fan power, economizers and energy recovery, and reconsiders the arrangement. The new unit may be larger, smaller or configured differently.</p>
<p>This choice comes after the decision to replace has already been made; if that is still open, start with <a href="<?= url('guides/retrofit-vs-replacement-decision') ?>">retrofit vs full replacement</a>.</p>

<h2>Comparison at a glance</h2>
<table>
<thead><tr><th>Factor</th><th>Like-for-like</th><th>Redesigned</th></tr></thead>
<tbody>
<tr><td>Design fees and time</td><td>Low; mostly verification</td><td>Higher; load and system analysis required</td></tr>
<tr><td>Fit with existing ducts and pipes</td><td>Matches by definition</td><td>May require modified connections</td></tr>
<tr><td>Accuracy of duty</td><td>Inherits original assumptions and any later changes in use</td><td>Based on current use and measured data</td></tr>
<tr><td>Energy performance</td><td>New components help, but oversizing is carried forward</td><td>Right-sized; can add recovery, VAV or better fan selection</td></tr>
<tr><td>Code compliance</td><td>New equipment still must meet codes in force; matching old duty may not be enough</td><td>Designed to comply from the start</td></tr>
<tr><td>Permit and review</td><td>Often simpler</td><td>May trigger broader review</td></tr>
<tr><td>Risk of surprises</td><td>Old problems repeated (comfort complaints, condensation, noise)</td><td>Interface changes ripple into structure, electrical, controls</td></tr>
</tbody>
</table>

<h2>Where like-for-like goes wrong</h2>
<p>The original schedule records what an engineer assumed decades ago. Since then, the building may have changed occupancy, lighting loads have often dropped sharply, plug loads have shifted, envelopes have been upgraded and ventilation standards have evolved. Matching the old airflow can lock in substantial oversizing, which means higher fan energy, coils that run at low load with poor dehumidification, and drives that spend their life near minimum speed.</p>
<p>A second trap is that "like" rarely means identical. A new unit with modern fans, a different coil geometry and tighter casing will not behave exactly like the old one against the same ductwork. If nobody measured the actual system resistance, the new fan can be selected at a static pressure that bears little relation to reality; see <a href="<?= url('guides/existing-duct-static-mismatch') ?>">troubleshooting airflow shortfall caused by existing ductwork</a>.</p>
<p class="warn">Matching the old nameplate does not exempt new equipment from current energy and safety codes. Fan power, economizer, energy recovery and listing requirements for the edition adopted in your jurisdiction still apply to the new unit.</p>

<h2>Where redesign goes wrong</h2>
<p>Redesign brings its own risks. If a larger unit is selected, the structure, rigging route, electrical service and mechanical room clearances all need rechecking. If the arrangement changes (adding a return fan, energy recovery wheel or second coil), duct connections move and the outage gets longer. If loads are recalculated with aggressive assumptions, the new unit may be too small for real conditions. Redesign also takes time, and an owner facing an emergency failure may not have it.</p>

<h2>A middle path: verified like-for-like</h2>
<p>Many projects land in between. Keep the footprint, connection points and arrangement, but verify and adjust the duty:</p>
<ol>
<li>Measure current airflow, static pressure and coil performance before demolition.</li>
<li>Run a quick load check against current occupancy and envelope.</li>
<li>Confirm minimum outdoor air against the current ventilation standard.</li>
<li>Select fans and coils to the verified duty rather than the old schedule, with modest margins.</li>
<li>Check that the energy code does not require energy recovery or an economizer that the original lacked.</li>
</ol>
<p>This approach captures most of the benefit of redesign while preserving the coordination advantages of like-for-like. Margins should be applied once, not stacked, as explained in <a href="<?= url('guides/design-margins-without-oversizing') ?>">how to apply design margins without oversizing</a>.</p>

<h2>Choosing between them</h2>
<ul>
<li><strong>Choose like-for-like</strong> when the building use has not changed, the old unit performed well, the outage window is short, and verification shows the original duty is still appropriate.</li>
<li><strong>Choose redesign</strong> when occupancy or use has changed, there were chronic comfort, humidity or noise complaints, the energy code now requires features the old unit lacked, or the owner has energy or carbon targets.</li>
<li><strong>Choose verified like-for-like</strong> when the footprint must be preserved but the original duty is uncertain.</li>
</ul>
<p>Custom manufacturers can build to either approach; a <a href="<?= url('products/custom-air-handlers') ?>">custom air handler</a> can match old connection points exactly while carrying a re-engineered duty inside the same envelope.</p>
<?php guide_end([
    ['What is a like-for-like AHU replacement?', 'It is a new unit selected to match the original airflow, capacities, arrangement and connection points. It minimizes design work and coordination but carries forward any oversizing or outdated assumptions in the original design.'],
    ['Does a like-for-like replacement have to meet current energy code?', 'Yes, new equipment generally must meet the energy and safety codes in force when it is permitted, even if it matches the old duty. Check the code edition adopted in your jurisdiction for fan power, economizer and energy recovery requirements.'],
    ['Why would I redesign instead of matching the old unit?', 'Redesign right-sizes the unit to current loads and ventilation needs, which typically lowers fan energy and fixes chronic comfort or humidity problems. It costs more engineering time and may change connections or structural loads.'],
]);
