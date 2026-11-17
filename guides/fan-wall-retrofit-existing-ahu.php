<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-wall-retrofit-existing-ahu'); ?>
<p class="lede">To retrofit a fan array into an existing air handler, you document the old fan section, remove the housed fan and its supports, build a new sealed bulkhead across the casing, and install the fan modules, wiring and controls so the array delivers design airflow with even discharge into the downstream components.</p>

<h2>What you need before the first panel comes off</h2>
<p>This guide assumes the array has already been selected for the duty. If the number of fans, wheel size or redundancy level is still open, settle those first using <a href="<?= url('guides/what-is-a-fan-array') ?>">what is a fan array</a> and <a href="<?= url('guides/fan-array-number-of-fans') ?>">choosing the number of fans in an array</a>. The retrofit itself then depends on four pieces of site information:</p>
<ul>
<li><strong>Measured airflow and static</strong> from the existing system, taken by traverse or from a recent balance report, not copied from the original schedule.</li>
<li><strong>Interior dimensions</strong> of the fan section: clear height, width and length between the upstream component and the discharge opening, plus any internal posts.</li>
<li><strong>Access route</strong> from the loading dock to the unit, with the smallest door, corridor turn and elevator cab recorded.</li>
<li><strong>Electrical service</strong> at the unit: available voltage, existing feeder size and disconnect location.</li>
</ul>

<h2>Step-by-step retrofit procedure</h2>
<ol>
<li><strong>Isolate and lock out.</strong> De-energize and lock out the fan motor, any VFD, and associated controls. Close and lock outdoor air and return dampers if the unit will be open to weather or to occupied returns.</li>
<li><strong>Record the existing installation.</strong> Photograph the fan section, measure the discharge opening and note the location of drains, lights, access doors and sensors that must be reinstated.</li>
<li><strong>Disconnect the old fan.</strong> Remove the belt guard, belts, motor and motor base. Disconnect the flexible connection at the fan outlet and any thrust restraints or isolators.</li>
<li><strong>Remove the housed fan.</strong> Most scroll fans will not pass through an access door intact. Plan to split the housing along its seams or cut it into pieces, and remove the shaft and wheel separately. Rig heavy wheels with a chain fall from a temporary beam, never from casing panels.</li>
<li><strong>Clean and inspect the cavity.</strong> With the fan out, check the floor for corrosion and holes, the walls for wet insulation, and the base frame for sound attachment points. Repair now; the array will cover the floor and make later repair difficult.</li>
<li><strong>Install the bulkhead frame.</strong> Fan arrays mount in a wall that spans the full cross-section of the casing. Bolt or weld a perimeter frame to the casing structure, then add intermediate mullions at the module grid. Seal the frame to the casing walls, floor and roof with gasket and sealant so no air bypasses the fans.</li>
<li><strong>Bring in and set the fan modules.</strong> Carry each module in through the access door, set it into the bulkhead grid and bolt it in place. Work from the bottom row upward so lower modules support the alignment of upper ones.</li>
<li><strong>Fit blank-offs and backdraft protection.</strong> Install backdraft dampers or provision for blank-off plates on each fan as specified, so a failed fan does not short-circuit air back through its own opening.</li>
<li><strong>Wire the array.</strong> Run power from the disconnect to each motor or EC module through a fused distribution panel or individual protection as designed, and land control wiring for speed signal and fault feedback.</li>
<li><strong>Reinstate removed items.</strong> Replace lights, drains, sensors and access doors. Seal every penetration through the bulkhead.</li>
<li><strong>Start, verify and balance.</strong> Confirm rotation of each fan, bump-test and check vibration, then ramp the array and measure airflow at design speed.</li>
</ol>

<h2>Discharge clearance and downstream components</h2>
<p>A housed fan discharges a concentrated jet through a duct outlet; an array discharges into the plenum across its whole face. That change is generally beneficial, but check what sits immediately downstream. If a coil, filter bank or sound attenuator is within a short distance of the fan inlets or outlets, airflow through it may be uneven. Manufacturers publish minimum inlet and discharge spacing for their wheels; if the existing section is too short, consider shifting the bulkhead or relocating a component. Velocity uniformity checks are covered in <a href="<?= url('guides/fan-array-discharge-velocity-uniformity') ?>">fan array discharge velocity uniformity</a>.</p>
<p class="warn">Do not hang fan modules from casing roof panels or rely on single-skin panels for structural support. Fan weight and thrust must go into the base frame or a dedicated steel bulkhead.</p>

<h2>Electrical and control changes</h2>
<p>An array of smaller motors draws a different load profile than one large motor. Total full-load amps may be similar, but conductor sizing, overcurrent protection and disconnects need to suit the new arrangement. Typical options are one VFD driving all motors with individual overload protection per motor, one VFD per fan, or EC motors with integrated drives fed from a distribution panel. The controls integrator must update the sequence so the building automation system sees array speed, individual fan faults and an alarm when the remaining fans cannot hold setpoint.</p>
<p>If the existing feeder or switchgear is near capacity, sort that out before the outage rather than discovering it at startup.</p>

<h2>Verification after installation</h2>
<p>Measure airflow by pitot traverse in the discharge duct or by the fan inlet piezometer rings where fitted, and compare with design. Record speed, power, static pressure across the array and vibration at each fan. A single fan reading noticeably higher vibration than its neighbours usually points to a mounting or alignment problem at that module rather than a design issue.</p>
<table>
<thead><tr><th>Item</th><th>Record</th><th>Acceptance basis</th></tr></thead>
<tbody>
<tr><td>Total airflow</td><td>CFM (m³/s) at design speed</td><td>Within the tolerance in the project specification</td></tr>
<tr><td>Static across array</td><td>in. w.c. (Pa)</td><td>Consistent with selection at measured airflow</td></tr>
<tr><td>Vibration</td><td>Velocity at each fan bearing or motor</td><td>Manufacturer limits or the specified grade</td></tr>
<tr><td>Input power</td><td>kW per fan and total</td><td>Compare with selection to confirm efficiency gain</td></tr>
</tbody>
</table>
<p>For projects where the existing casing is sound but the fan section is the weak point, our <a href="<?= url('products/fan-arrays') ?>">fan array</a> modules are sized to pass through standard access doors.</p>
<?php guide_end([
    ['Can a fan array fit inside an existing air handler casing?', 'Usually yes, because fan array modules are smaller and lighter than a single housed fan and need less length. Confirm interior clearances, inlet and discharge spacing, and that the base frame can carry the bulkhead and fans.'],
    ['How long does a fan wall retrofit take?', 'Duration depends on unit size, access and crew, but the work is often planned around a weekend or short planned outage per unit. Pre-building the bulkhead frame and staging modules near the unit shortens the shutdown.'],
    ['Do I need new electrical service for a fan array retrofit?', 'Not always. Total load is often similar to the old motor, but conductors, overcurrent protection and disconnects must suit multiple motors. Have an electrician review the existing feeder and panel capacity before the outage.'],
]);
