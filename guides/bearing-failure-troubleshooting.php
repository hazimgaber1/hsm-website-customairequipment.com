<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('bearing-failure-troubleshooting'); ?>
<p class="lede">A fan bearing that runs hot, gets noisy, or fails well before its expected life is usually telling you about lubrication, load, alignment, mounting or contamination. Diagnose it from the symptom, confirm with measurements and an inspection of the failed bearing, and correct the cause before installing a replacement.</p>

<h2>Symptom: bearing runs hot</h2>
<p>Normal operating temperature varies with bearing size, speed and ambient, so compare with the same bearing's baseline and with sister fans rather than a fixed number. A bearing that is markedly hotter than its own history or its twin on the other side of the wheel needs attention.</p>
<table>
<thead><tr><th>Cause</th><th>Check</th><th>Fix</th></tr></thead>
<tbody>
<tr><td>Over-greasing</td><td>Temperature rose shortly after greasing; grease purging from seals</td><td>Open relief, run to purge, stop adding grease; follow the calculated quantity</td></tr>
<tr><td>Lack of grease or degraded grease</td><td>Long time since lubrication; dark, dry grease at fitting</td><td>Relubricate with the correct grease and quantity</td></tr>
<tr><td>Excessive belt tension</td><td>Force-deflection reading above the drive manufacturer's range</td><td>Re-tension correctly</td></tr>
<tr><td>Misalignment between bearings</td><td>Shaft bent, pillow blocks not in line, base twisted</td><td>Align bearings; correct base</td></tr>
<tr><td>Locked expansion bearing</td><td>Both bearings fixed on a long shaft, so thermal growth loads them axially</td><td>Make sure one bearing is the floating (expansion) bearing, as designed</td></tr>
<tr><td>Wrong grease</td><td>Grease type differs from specification; mixed thickeners</td><td>Purge and refill with the specified grease</td></tr>
<tr><td>Seals rubbing</td><td>New bearing with contact seals; temperature settles over time</td><td>Monitor; usually settles after run-in</td></tr>
</tbody>
</table>
<p class="note">Infrared thermometers read surface temperature and are affected by emissivity. Use a piece of matte tape or the same measurement point each time so readings are comparable.</p>

<h2>Symptom: bearing is noisy</h2>
<ul>
<li><strong>Grinding or rumbling that grows over weeks:</strong> raceway damage is developing. Check vibration spectrum for bearing defect frequencies. Plan replacement.</li>
<li><strong>High-pitched squeal:</strong> often lack of lubrication or a rubbing seal. Relubricate and recheck; if it persists, inspect.</li>
<li><strong>Knocking or clicking once per revolution:</strong> looseness of the bearing on the shaft or in its housing, or a loose set screw collar. Check locking collars, set screws and housing bolts.</li>
<li><strong>Noise only at certain speeds on a VFD fan:</strong> possibly a resonance rather than a bearing fault; check whether vibration peaks at a specific speed.</li>
</ul>
<p>Vibration spectra are the most reliable way to separate a bearing fault from unbalance or looseness; trending methods are described in <a href="<?= url('guides/vibration-analysis-predictive-maintenance') ?>">vibration analysis for predictive maintenance</a>.</p>

<h2>Symptom: premature failure</h2>
<p>When a bearing fails well short of its expected life, inspect it before discarding. The damage pattern on the races and rolling elements is the best evidence available.</p>
<table>
<thead><tr><th>What the failed bearing shows</th><th>Likely root cause</th></tr></thead>
<tbody>
<tr><td>Discoloured (blue or brown) races and rollers, hardened grease</td><td>Overheating from over-greasing, lack of lubricant or excessive load</td></tr>
<tr><td>Wear path offset to one side of the race</td><td>Misalignment or axial load from a locked expansion bearing</td></tr>
<tr><td>Wide, heavy wear path all around the outer race</td><td>Excessive radial load, such as over-tensioned belts</td></tr>
<tr><td>Evenly spaced dents at rolling element spacing</td><td>False brinelling from vibration while stationary, or impact during installation</td></tr>
<tr><td>Rust, etching, water stains</td><td>Moisture ingress: washdown, condensation, wet airstream, outdoor exposure</td></tr>
<tr><td>Scratches and abrasive wear, gritty grease</td><td>Dirt contamination through damaged seals or dirty grease fittings</td></tr>
<tr><td>Inner ring creep marks on the shaft, shaft wear</td><td>Loose fit or set screws not tightened</td></tr>
<tr><td>Frosted or fluted raceway</td><td>Electrical currents through the bearing</td></tr>
</tbody>
</table>
<p>The last pattern is associated with VFD-driven motors and is a separate issue; see <a href="<?= url('guides/bearing-currents-shaft-grounding') ?>">bearing currents and shaft grounding</a>. It can also appear on fan shaft bearings when current passes from the motor through a coupling.</p>

<h2>Installation causes to check</h2>
<p>Many early failures come from how a bearing was installed rather than how it was run:</p>
<ul>
<li>Bearing driven onto the shaft by hammering on the outer ring, which damages the races.</li>
<li>Set screws or eccentric locking collars not tightened in the correct sequence or to the specified torque.</li>
<li>Pillow block housings bolted to an uneven base, distorting the housing.</li>
<li>Wrong bearing type or the fixed and floating bearings swapped.</li>
<li>Shaft diameter worn or undersized at the bearing seat.</li>
<li>Bearings stored on site without periodic rotation, already damaged before startup.</li>
</ul>

<h2>Diagnostic routine</h2>
<ol>
<li>Lock out the fan following <a href="<?= url('guides/lockout-tagout-ahu-service') ?>">lockout/tagout for AHU service</a>.</li>
<li>Review the lubrication record and belt tension history.</li>
<li>Check bearing mounting bolts, set screws and collars.</li>
<li>Turn the shaft by hand and feel for roughness or tight spots.</li>
<li>Check shaft alignment between bearings and sheave alignment.</li>
<li>Run the fan and take vibration readings in three directions at each bearing.</li>
<li>Measure bearing temperatures and compare with the other bearing and history.</li>
<li>If replacing, keep the failed bearing and inspect or send it for analysis.</li>
</ol>

<h2>Symptom: repeated failures on the same fan</h2>
<p>When the same position fails again and again, the bearing is a victim. Look at what is common to each failure: same damage pattern, same time after replacement, same season. Repeated overheating within weeks of greasing points to the lubrication practice. Repeated failures in humid summers point to moisture. Failures only on the drive-end bearing of a belt-driven fan point to belt load or sheave overhang. A fan that keeps failing bearings after several corrections may have a bent shaft, worn bearing seats or a resonant support structure, which needs a closer engineering look.</p>

<h2>After replacement</h2>
<ul>
<li>Use a bearing of the specified type, size and seal arrangement, with the correct fixed/floating arrangement.</li>
<li>Lubricate to the manufacturer's initial fill.</li>
<li>Take new baseline temperature and vibration readings.</li>
<li>Correct the root cause found, and add a follow-up check within a few weeks.</li>
</ul>
<?php guide_end([
    ['Why is my fan bearing running hot after greasing?', 'Over-greasing is the most likely cause. Excess grease is churned by the rolling elements and generates heat. Open the relief, run the fan to purge, stop adding grease and use the calculated quantity next time.'],
    ['What causes fan bearings to fail early?', 'Common causes are lubrication errors, excessive belt tension, misalignment, moisture or dirt contamination, poor installation such as loose set screws, damage during storage, and electrical currents from VFD-driven motors.'],
    ['How can I tell if a fan bearing is failing?', 'Rising temperature compared with its own history, increasing noise, and vibration spectra showing bearing defect frequencies are the main signs. Trending these readings gives weeks of warning before failure.'],
]);
