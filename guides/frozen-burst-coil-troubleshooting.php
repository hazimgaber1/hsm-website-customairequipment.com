<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('frozen-burst-coil-troubleshooting'); ?>
<p class="lede">When a coil freezes in service, first stop the damage: isolate the coil, protect the space from water, and keep the rest of the system from freezing. Then work out why it froze. In operating units the cause is almost always cold air reaching a coil with too little warm water flowing through it, through some combination of stratified or leaking outdoor air, a valve or pump problem, a failed or poorly placed freezestat, or a control sequence error.</p>

<h2>Immediate response</h2>
<ol>
<li><strong>Stop the airflow.</strong> Shut down the unit, or if the safety already tripped, keep it off. Close outdoor air dampers fully and confirm by looking.</li>
<li><strong>Isolate the coil.</strong> Close supply and return isolation valves. A burst coil will leak heavily once it thaws.</li>
<li><strong>Protect the space.</strong> Check for water reaching the floor, electrical equipment and spaces below. Put the drain pan and floor drains to use, and set up containment if needed.</li>
<li><strong>Check other coils and units.</strong> If one coil froze, others with the same exposure may be close. Check adjacent units, preheat coils and heat recovery coils.</li>
<li><strong>Restore heat to the building carefully.</strong> Do not restart the unit with the damaged coil in service. Provide temporary heat to the space if needed.</li>
<li><strong>Document as found.</strong> Before anything is changed, photograph damper positions, valve positions, freezestat location, controller screens and the coil itself. Download BAS trends covering the event.</li>
</ol>
<p class="warn">Never apply open flame to thaw a coil. Thaw with warm air or by gradually restoring warm water flow once the coil is isolated and assessed.</p>

<h2>Confirm whether the coil burst</h2>
<p>A coil can freeze without bursting if ice did not form in a confined section, or it can split one or more tubes or return bends, often near the headers or in the bends where water was trapped. Once thawed and isolated:</p>
<ul>
<li>Look for split tubes, bulged return bends and wet spots on the fins.</li>
<li>Pressure test the coil with air or water at the coil's rated test pressure. A coil that holds pressure may still be weakened; ask the manufacturer.</li>
<li>Note the location of failures across the face; it is evidence of where the cold air was.</li>
</ul>

<h2>Diagnosis: symptom, cause, check</h2>
<h3>Symptom: freezing along the bottom or one side of the coil</h3>
<p><strong>Cause:</strong> stratification. Cold outdoor air and warm return air did not mix, and a layer of cold air ran along one part of the coil.</p>
<p><strong>Check:</strong> mixing box arrangement, damper blade orientation, and whether the minimum outdoor air damper discharges in a jet along one side. Look at mixed air temperature readings versus actual temperatures at different points on the coil face.</p>
<p><strong>Fix:</strong> add air blenders or baffles, change damper blade arrangement, or adjust minimum outdoor air damper location. Background on the problem is in <a href="<?= url('guides/mixed-air-stratification-troubleshooting') ?>">mixed air stratification troubleshooting</a>.</p>

<h3>Symptom: freezing while the unit was off</h3>
<p><strong>Cause:</strong> outdoor air entering through a leaking or open outdoor damper, by wind or by stack effect, with no water flow in the coil.</p>
<p><strong>Check:</strong> damper seals and closure; whether pumps stop when the unit stops; whether the heating valve closes in unoccupied mode.</p>
<p><strong>Fix:</strong> repair dampers; keep pumps running and the heating valve open to a minimum when outdoor temperatures fall below freezing, as the sequence allows.</p>

<h3>Symptom: freezing in a heating coil with the valve "open"</h3>
<p><strong>Cause:</strong> no or low water flow despite the command. Possible causes: valve actuator failed, valve stem separated, strainer blocked, pump failed, air trapped in the coil, or boiler/heating plant off.</p>
<p><strong>Check:</strong> valve position at the valve itself; differential pressure across the coil; pump status; entering water temperature.</p>
<p><strong>Fix:</strong> repair the cause; vent the coil properly; add flow proof if flow failure is a recurring risk.</p>

<h3>Symptom: freezing in a chilled water coil in winter</h3>
<p><strong>Cause:</strong> chilled water coils are often left full and stagnant in winter. Any cold air reaching them, even with heating coils upstream, can freeze them.</p>
<p><strong>Check:</strong> is the chilled water coil downstream of an effective preheat? Was it drained or glycol-filled for winter?</p>
<p><strong>Fix:</strong> drain and blow out for winter, use glycol, or keep it circulating. Add the step to the <a href="<?= url('guides/seasonal-changeover-checklist') ?>">seasonal changeover checklist</a>.</p>

<h3>Symptom: freezestat did not trip</h3>
<table>
<thead><tr><th>Possible cause</th><th>Check</th></tr></thead>
<tbody>
<tr><td>Capillary installed in a short run or in a corner instead of across the face</td><td>Trace the capillary path</td></tr>
<tr><td>Setpoint too low or tampered with</td><td>Read the setting</td></tr>
<tr><td>Freezestat bypassed or jumpered</td><td>Check wiring at the safety circuit</td></tr>
<tr><td>Freezestat failed</td><td>Test by cooling the element</td></tr>
<tr><td>Freezestat tripped fan but sequence left damper open</td><td>Check sequence response to a trip</td></tr>
</tbody>
</table>
<p>The sequence's expected response to a low-limit trip is covered in <a href="<?= url('guides/low-limit-freeze-stat-sequences') ?>">low-limit freezestat sequences</a>.</p>

<h2>Repair or replace</h2>
<p>A coil with one or two split return bends can sometimes be repaired by brazing or plugging individual circuits, at the cost of some capacity. Widespread damage usually means replacement. Consider the coil's age and condition, the capacity margin, and lead time. Replacement is also a chance to fix the design weakness that let it freeze, such as adding preheat or improving mixing.</p>

<h2>Prevent the next one</h2>
<ul>
<li>Correct the root cause found, not just the coil.</li>
<li>Test freezestats every year before winter.</li>
<li>Verify outdoor dampers close and seal before cold weather.</li>
<li>Trend coil leaving air or water temperatures and alarm on low values.</li>
<li>Keep a written cold-weather response plan for operators.</li>
</ul>
<?php guide_end([
    ['What should I do first when an AHU coil freezes?', 'Stop airflow and close outdoor dampers, isolate the coil with its valves, protect the space from water, check other coils exposed to the same conditions, and photograph everything before making changes.'],
    ['Why did my coil freeze even though the freezestat was installed?', 'Common reasons are a capillary installed in one corner instead of across the coil face, a setpoint set too low, a bypassed or failed device, or a sequence that stopped the fan but left the outdoor damper open.'],
    ['Can a burst coil be repaired?', 'Sometimes. A few split return bends can be brazed or individual circuits plugged, with some loss of capacity. Widespread damage usually means replacing the coil, and the cause of the freeze must be corrected either way.'],
]);
