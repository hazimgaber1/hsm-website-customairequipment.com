<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('retrofitting-energy-recovery-existing-ahus'); ?>
<p class="lede">Adding energy recovery to an existing system comes down to four questions: is there exhaust air near the outdoor air intake, is there physical space for a recovery section, can the existing fans handle the added pressure drop, and can the controls run it properly. Answer them in that order, because a no to the first two usually dictates the technology.</p>

<h2>Step 1: Map the airstreams</h2>
<ol>
<li>Locate every outdoor air intake and every exhaust discharge for the system. Mark them on a roof or floor plan with airflow values.</li>
<li>Identify which exhaust flows pass through the AHU (return and relief) and which leave through separate fans (toilets, kitchens, labs).</li>
<li>Note the air class of each exhaust stream.</li>
<li>Measure, do not assume, the current outdoor air and exhaust airflows. Old balancing reports are often out of date.</li>
</ol>
<p>If clean exhaust and outdoor air are within the same unit or within a short duct run, a wheel or plate may fit. If they are far apart, plan on a runaround loop from the start.</p>

<h2>Step 2: Measure the available space</h2>
<ol>
<li>Measure the existing unit, the mechanical room or roof area around it, and the clearances to walls, structure and other equipment.</li>
<li>For a wheel or plate, check whether the outdoor air and relief paths can be brought adjacent: on many mixing-box units they already sit side by side or stacked at the return end.</li>
<li>Check whether a new recovery module can be added on the end of the unit, or whether the outdoor air and relief connections can be extended to an external module.</li>
<li>For a runaround loop, check room for one coil in the outdoor air path and one in the exhaust path, plus piping and a pump.</li>
<li>Confirm routes for bringing in large components such as wheel cassettes or plate cores: doors, elevators, roof hatches and crane access.</li>
<li>On rooftops, check the structural capacity for the added weight. A structural review is often needed; see <a href="<?= url('guides/structural-review-replacement-checklist') ?>">structural review checklist</a>.</li>
</ol>
<p class="note">A laser scan or careful field survey of the mechanical space pays for itself on retrofits. Recovery sections have tight dimensional constraints, and surprises at installation are expensive.</p>

<h2>Step 3: Check fan capacity</h2>
<ol>
<li>Get the existing supply and return or exhaust fan curves and current operating points.</li>
<li>Add the pressure drop of the recovery device, its filters and any added dampers or duct transitions to each fan's system curve.</li>
<li>Check if each fan can deliver design airflow at the new pressure, within its speed and motor limits.</li>
<li>If the existing exhaust is a relief damper with no fan, a new exhaust fan will be needed to pull air through the device.</li>
<li>Where fans fall short, compare options: higher speed with a larger motor, a fan array replacement, or a new fan integrated with the recovery module.</li>
<li>Check electrical capacity for added or larger motors, a wheel motor or a pump.</li>
</ol>
<p class="warn">Do not count on the existing supply fan having margin. Many older systems have already lost capacity to added filters or duct changes. Measure actual static pressure in operation.</p>

<h2>Step 4: Choose the technology for the constraints</h2>
<table>
<thead><tr><th>Situation</th><th>Usual fit</th></tr></thead>
<tbody>
<tr><td>Outdoor air and relief at the same end of the unit, space for an added module</td><td>Wheel or plate module on the unit end</td></tr>
<tr><td>Little length available, clean exhaust</td><td>Wheel (compact depth)</td></tr>
<tr><td>Need low leakage, enough length</td><td>Plate or heat pipe</td></tr>
<tr><td>Intake and exhaust far apart or on different units</td><td>Runaround loop</td></tr>
<tr><td>Class 4 exhaust</td><td>Runaround loop</td></tr>
</tbody>
</table>
<p>The performance differences between these options are covered in <a href="<?= url('guides/air-to-air-recovery-technologies-compared') ?>">wheels vs plates vs runaround loops vs heat pipes</a>.</p>

<h2>Step 5: Address frost, drainage and coils</h2>
<ol>
<li>Calculate the frost threshold and pick a frost control method.</li>
<li>Find a place for drain pans and traps, and check that the existing floor or roof can take a drain at the right height.</li>
<li>Once outdoor air is preheated by recovery, the existing preheat coil may be oversized. Check that its controls remain stable at the reduced load, and review freeze protection, which may now see different air temperatures.</li>
<li>The existing cooling coil will see a smaller load. This is usually beneficial, but check that the chilled water valve can control at low flow.</li>
</ol>

<h2>Step 6: Plan controls integration</h2>
<ol>
<li>Add the recovery device's points to the existing BAS: wheel enable, speed, rotation, bypass damper, temperatures and differential pressure.</li>
<li>Rewrite the sequence so recovery stages correctly with the existing economizer and heating and cooling coils.</li>
<li>Consider factory-mounted controls on the new module to reduce field wiring.</li>
<li>Plan for functional testing of each mode after installation.</li>
</ol>

<h2>Step 7: Schedule the work</h2>
<ol>
<li>Decide whether the unit can be shut down for the duration, or whether temporary ventilation is needed.</li>
<li>Prefabricate as much as possible: a factory-built recovery module with fans, dampers and controls installed and tested cuts field time.</li>
<li>Plan rigging, roof penetrations and duct modifications.</li>
<li>Rebalance the full system after the work, including outdoor air delivered to each zone.</li>
</ol>
<p>Whether to retrofit or replace the whole unit is a broader decision, covered in <a href="<?= url('guides/retrofit-vs-replacement-decision') ?>">retrofit vs replacement</a>. If an added recovery module or knockdown section suits your space constraints, our <a href="<?= url('products/retrofit-knockdown') ?>">retrofit and knockdown units</a> are built to go through existing openings.</p>
<?php guide_end([
    ['Can energy recovery be added to an existing air handler?', 'Often yes. Check that exhaust is available near the outdoor air intake, that there is space for a recovery section, that the fans can handle the added pressure drop and that controls can be integrated. A runaround loop works where the airstreams are far apart.'],
    ['What is the best energy recovery retrofit when intake and exhaust are far apart?', 'A runaround coil loop. It needs only a coil in each airstream connected by piping and a pump, so the airstreams can be on different floors or ends of the building.'],
    ['Will existing fans handle an energy recovery retrofit?', 'Sometimes not. Add the pressure drop of the device, filters and dampers to each fan system curve and check the operating point. Older systems often have little margin, and a fan or motor upgrade may be needed.'],
]);
