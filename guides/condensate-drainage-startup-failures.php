<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('condensate-drainage-startup-failures'); ?>
<p class="lede">When a new air handler's drain pan overflows, the trap runs dry, or water sprays out of the drain at startup, the cause is almost always a trap that does not match the pan pressure, a trap that was never primed, a blocked or badly pitched drain line, or a unit that is not level. Work through those in order before suspecting the coil or the pan.</p>

<h2>Symptom: pan overflows on a draw-through unit</h2>
<p>Water builds up in the cooling coil drain pan and spills onto the floor or into the next section, even though the drain line looks open.</p>
<h3>Cause 1: trap too shallow for the negative pressure</h3>
<p><strong>Check:</strong> With the fan running, look at the trap or a clear section of drain. If water is held up in the inlet leg and nothing flows out, the fan's suction is holding the water in the pan. Measure the static pressure at the pan section with a manometer and compare it with the trap's seal depth.</p>
<p><strong>Fix:</strong> Rebuild the trap to the depth needed for the maximum negative pressure. The sizing method is in <a href="<?= url('guides/condensate-trap-and-pad-height') ?>">sizing condensate traps and housekeeping pad height</a>. If the pad is too low to fit a deep enough trap, a condensate pump with a sealed connection or a raised unit may be the only fix.</p>
<h3>Cause 2: no trap, or trap without a vent where one is required</h3>
<p><strong>Check:</strong> Follow the line. Contractors sometimes run a straight drain on the assumption that gravity is enough. <strong>Fix:</strong> Install a properly sized trap; vent downstream of the trap where the drain configuration and plumbing code require it.</p>
<h3>Cause 3: multiple pans manifolded before their traps</h3>
<p><strong>Check:</strong> Several drain connections joined into one pipe ahead of a single trap. Pans at different pressures fight each other. <strong>Fix:</strong> Trap each connection individually, then join downstream of the traps.</p>

<h2>Symptom: water blows out of the drain on a blow-through unit</h2>
<p>Air and water spray from the drain outlet or the floor drain, and the trap is found empty.</p>
<ul>
<li><strong>Cause: seal depth less than the positive pan pressure.</strong> Check: measure pan section pressure at full fan speed. Fix: increase the seal depth so it exceeds the maximum positive pressure with margin.</li>
<li><strong>Cause: trap not primed.</strong> Check: was the trap filled before startup? On a dry trap, air blows straight through until enough condensate builds up, which may never happen in a dry season. Fix: prime traps before every startup and after any long shutdown.</li>
<li><strong>Cause: trap shape reversed.</strong> Check: some installers use a draw-through trap pattern on a blow-through unit. Fix: rebuild to the manufacturer's positive-pressure detail.</li>
</ul>

<h2>Symptom: trap is dry and air whistles through the drain</h2>
<p>On draw-through units, a dry trap lets room or mechanical-room air enter the unit through the drain. You hear a whistle, see the pan stay wet near the outlet, or find sewer odours entering the airstream if the drain connects to sanitary piping.</p>
<ul>
<li><strong>Check:</strong> Trap empty after a shutdown or during heating season with no condensate.</li>
<li><strong>Fix:</strong> Prime the trap, and consider a trap design that resists drying out, or a trap primer where the plumbing code allows. Add trap priming to the seasonal changeover routine.</li>
</ul>
<p class="warn">An open drain on a negative-pressure section can pull in sewer gases or contaminated air if it connects to a floor drain without an air gap. Confirm that the drain terminates over an open receptor with an air gap where required.</p>

<h2>Symptom: water stands in the pan but does not overflow</h2>
<ul>
<li><strong>Cause: unit not level, or level the wrong way.</strong> Check: put a level on the base rails at the coil section and look at which end of the pan holds water. Fix: re-level the unit or the section so the pan slopes to its outlet, using <a href="<?= url('guides/multi-section-leveling-tolerances') ?>">leveling tolerances for multi-section AHUs</a>.</li>
<li><strong>Cause: drain connection partly blocked by construction debris, sealant or insulation.</strong> Check: remove the trap cap or cleanout and run water through. Fix: clear the connection and flush.</li>
<li><strong>Cause: pan dented in shipping or by foot traffic.</strong> Check: inspect the pan floor for low spots. Fix: report to the manufacturer for repair guidance.</li>
</ul>

<h2>Symptom: drain line backs up or drains slowly</h2>
<table>
<thead><tr><th>Check</th><th>What it reveals</th><th>Fix</th></tr></thead>
<tbody>
<tr><td>Line pitch with a level</td><td>Flat or back-pitched sections hold water</td><td>Re-hang to a continuous downward slope</td></tr>
<tr><td>Pipe size against unit connection</td><td>Reduced pipe restricts flow</td><td>Use pipe no smaller than the connection</td></tr>
<tr><td>Long horizontal runs without venting</td><td>Air lock between traps</td><td>Vent per plumbing code</td></tr>
<tr><td>Termination</td><td>Drain submerged in a floor drain or connected solidly</td><td>Provide an air gap at the receptor</td></tr>
<tr><td>Debris in the line</td><td>Construction dust, PVC shavings, cement</td><td>Flush and clean before startup</td></tr>
</tbody>
</table>

<h2>Symptom: water in the section downstream of the coil</h2>
<p>If water appears downstream of the pan rather than overflowing it, the problem may be water blowing off the coil face, not the drain. That is a carryover question related to coil face velocity and is handled under <a href="<?= url('guides/cooling-coil-water-carryover-troubleshooting') ?>">troubleshooting cooling coil water carryover</a>. Rule it in or out by checking whether water appears only at high airflow and whether the pan itself is draining correctly.</p>

<h2>A quick test sequence for startup</h2>
<ol>
<li>With the fan off, pour water into the pan and confirm it drains fully to the receptor.</li>
<li>Prime every trap.</li>
<li>Start the fan at full design speed and watch the trap: water levels in each leg should shift but hold a seal.</li>
<li>Pour more water into the pan with the fan running. It should drain freely.</li>
<li>Repeat at minimum speed and after filters load if the unit will run long before occupancy.</li>
</ol>
<?php guide_end([
    ['Why does my AHU drain pan overflow only when the fan is running?', 'On a draw-through unit, the fan creates negative pressure at the pan that holds water back. If the trap seal is shallower than that negative pressure, condensate cannot drain until the fan stops. Rebuild the trap for the maximum pan pressure.'],
    ['Why does air blow out of my condensate drain?', 'On a blow-through unit, the positive pressure at the pan has pushed the water out of a shallow or unprimed trap. Prime the trap and make sure its seal depth exceeds the maximum positive pan pressure.'],
    ['Should condensate traps be primed before startup?', 'Yes. Fill every trap with water before the first start and after any long shutdown, especially in dry or heating seasons when no condensate forms to refill them.'],
]);
