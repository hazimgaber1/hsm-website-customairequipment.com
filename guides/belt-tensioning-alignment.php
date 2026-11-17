<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('belt-tensioning-alignment'); ?>
<p class="lede">To keep a fan belt drive running reliably, align the motor and fan sheaves so their faces are in the same plane, tension the belts to the drive manufacturer's force-deflection value (a common rule is 1/64 in of deflection per inch of span at the specified force), and re-check tension after new belts have run in. Replace matched sets together, never single belts.</p>

<h2>Step 1: Lock out and inspect</h2>
<ol>
<li>Lock out the fan motor at its disconnect and confirm zero energy. Check that the fan wheel cannot windmill from airflow through the unit; block it if necessary.</li>
<li>Remove the belt guard.</li>
<li>Inspect belts for cracks, glazing, frayed edges, uneven wear and belt dust under the drive. Rapid belt dust buildup suggests slipping or misalignment.</li>
<li>Inspect sheave grooves for wear. A groove worn so the belt sits low, or with a shiny bottom where the belt rides, will destroy new belts quickly. Groove gauges confirm wear.</li>
<li>Check sheave set screws and bushings for tightness, and motor base bolts.</li>
</ol>

<h2>Step 2: Check and correct alignment</h2>
<p>Misalignment wears belts and sheaves unevenly, causes belts to roll over or jump grooves, and adds load to bearings. There are three kinds:</p>
<ul>
<li><strong>Parallel (offset):</strong> the shafts are parallel but the sheaves are not in the same plane.</li>
<li><strong>Angular (horizontal):</strong> the shafts are not parallel in plan view.</li>
<li><strong>Twisted (vertical):</strong> the shafts are not parallel in elevation, often from a motor base that is not level.</li>
</ul>
<ol>
<li>Hold a straightedge or tightly stretched string across both sheave faces. It should touch each sheave at two points on the rim. A laser alignment tool is faster and more accurate.</li>
<li>For parallel offset, move one sheave along its shaft, or move the motor, until both faces line up.</li>
<li>For angular misalignment, loosen the motor base bolts and rotate the motor until both faces touch the straightedge at both points.</li>
<li>For twist, shim the motor feet until shafts are parallel in elevation.</li>
<li>Re-tighten all bolts and set screws to the specified torque.</li>
</ol>
<p>Drive manufacturers typically recommend angular misalignment no greater than about 1/2 degree for V-belts and tighter for synchronous belts; check the belt manufacturer's figure for your drive.</p>
<p class="note">If sheaves differ in width, align to the groove centrelines rather than the outer faces. Measure from the face to the first groove centre on each sheave and offset the straightedge accordingly.</p>

<h2>Step 3: Measure and set tension</h2>
<p>Under-tensioned belts slip, squeal on start, glaze and burn. Over-tensioned belts overload shaft bearings and shorten belt life. The force-deflection method is the most common field check.</p>
<ol>
<li>Measure the span length: the distance between the points where the belt leaves one sheave and contacts the other.</li>
<li>Calculate the target deflection: 1/64 in per inch of span.</li>
<li>At the centre of the span, push on one belt with a belt tension gauge perpendicular to the span until it deflects by the target amount.</li>
<li>Read the force on the gauge and compare it with the drive manufacturer's recommended force range for the belt section and the smaller sheave diameter.</li>
<li>Adjust the motor base until the force is within range. Move the motor evenly so alignment is not lost.</li>
</ol>
<p class="formula">Deflection (in) = span length (in) ÷ 64</p>
<p>Example: a drive with a 32 in span needs a deflection of 32 ÷ 64 = 0.50 in. If the manufacturer's table gives 4 to 6 lb for this belt section and sheave size, adjust tension until a 0.50 in deflection takes a force in that range.</p>
<p>Sonic tension meters, which measure the natural frequency of the belt span, give more consistent readings than force-deflection gauges and are worth using on larger drives.</p>

<h2>Step 4: Replacing belts</h2>
<ol>
<li>Loosen the motor base adjustment so the belts can be removed without prying. Never roll belts over sheave rims with a screwdriver; it damages cords inside the belt.</li>
<li>Replace all belts on a multi-belt drive at the same time with a matched set from one manufacturer. Mixing old and new belts puts most of the load on the new, shorter belts.</li>
<li>Check that the replacement belt section and length match the drive design. Drive selection and sheave sizing are design topics covered in <a href="<?= url('guides/belt-drive-sheave-selection') ?>">belt drive sheave selection</a>.</li>
<li>Install the new belts, check alignment, and tension to the manufacturer's figure for new belts, which is usually higher than for used belts.</li>
<li>Run the drive, ideally for several hours to a day or two, then re-check and re-tension to the used-belt value. New belts stretch and seat in the grooves during run-in.</li>
</ol>
<p class="warn">Never run a fan with the belt guard removed. Replace the guard before restoring power, even for a short test run.</p>

<h2>Step 5: Record and follow up</h2>
<ul>
<li>Record the belt type and size, measured span, deflection force and date.</li>
<li>Record motor amps after the adjustment. A large change may mean the fan speed changed because belts were slipping before.</li>
<li>Check vibration at the fan and motor bearings and compare with baseline; misalignment often shows up as a high axial reading.</li>
<li>Add the next tension check to the maintenance schedule.</li>
</ul>
<p>Persistent belt problems, such as frequent breakage or rapid wear despite correct tension and alignment, can point to a drive that is undersized for the load, or bearings that are failing. Bearing diagnosis is covered in <a href="<?= url('guides/bearing-failure-troubleshooting') ?>">troubleshooting fan bearing failures</a>.</p>
<?php guide_end([
    ['How tight should a fan belt be?', 'A common field rule is that a force applied at mid-span should deflect the belt 1/64 in per inch of span, with the force falling within the belt manufacturer\'s range for that belt section and sheave size. New belts are set higher, then re-tensioned after run-in.'],
    ['Should I replace all belts on a multi-belt fan drive at once?', 'Yes. Replace them as a matched set from one manufacturer. Mixing new and used belts leaves the shorter new belts carrying most of the load, so they wear quickly while the old ones slip.'],
    ['How do I check fan sheave alignment?', 'Lay a straightedge or tight string across both sheave faces; it should touch each at two points. Laser alignment tools are faster and more precise, and they show angular and parallel misalignment separately.'],
]);
