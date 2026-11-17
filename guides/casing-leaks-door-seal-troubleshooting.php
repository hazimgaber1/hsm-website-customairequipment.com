<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('casing-leaks-door-seal-troubleshooting'); ?>
<p class="lede">Most audible casing leaks come from doors: a gasket that has taken a permanent set, a latch that no longer pulls the door tight, or a door frame racked out of square. The rest come from panel joints, unsealed penetrations and field split joints. Find the leak with the unit running, identify which of these it is, and repair the cause rather than adding another bead of caulk.</p>

<h2>Symptoms</h2>
<ul>
<li>Whistling or hissing at doors, especially at high fan speed.</li>
<li>Door that blows open or is hard to latch on a positive-pressure section.</li>
<li>Dust streaks on the casing exterior around joints (positive sections) or on interior surfaces (negative sections).</li>
<li>Cold drafts at seams on a winter outdoor unit, or warm air felt at joints on a cooling unit.</li>
<li>Rising fan speed over time to hold the same duct static, with no change in filters.</li>
<li>Unfiltered dust deposits downstream of final filters.</li>
<li>Localized frost or condensation patches at joints (leakage rather than conduction); for conduction-related sweating, see <a href="<?= url('guides/thermal-break-casing-panels') ?>">thermal break panels</a>.</li>
</ul>

<h2>Locating the leak</h2>
<ol>
<li><strong>Run the unit at high airflow.</strong> Leakage rises with pressure, so the louder the better for finding it.</li>
<li><strong>Listen first.</strong> Whistles and hisses usually point directly to the source.</li>
<li><strong>Use smoke.</strong> A smoke pencil moved slowly along door edges, panel joints, corners and penetrations shows air movement. On positive sections, smoke is blown away; on negative sections, it is drawn in.</li>
<li><strong>Use an ultrasonic leak detector</strong> in noisy mechanical rooms where hearing a leak is impossible.</li>
<li><strong>Look inside with the unit off.</strong> Daylight visible around a closed door from inside a dark section means a gap. A flashlight from outside at night does the same.</li>
<li><strong>Check the paper test.</strong> Close a door on a strip of paper at several points around the frame; if the paper pulls out easily, the gasket is not compressed there.</li>
</ol>
<p class="warn">Lock out the fan before entering any section or putting hands near a door on a running unit. Never open a door on a positive-pressure section while the fan is running unless it has a safety latch. Follow the site lockout and tagout procedure every time.</p>

<h2>Door problems</h2>
<table>
<thead><tr><th>Symptom</th><th>Likely cause</th><th>Check</th><th>Fix</th></tr></thead>
<tbody>
<tr><td>Whistle at one part of door edge</td><td>Gasket compression set or tear</td><td>Paper test; inspect gasket for flattening, cracks, gaps at corners</td><td>Replace gasket with the manufacturer's profile; clean seat before installing</td></tr>
<tr><td>Whistle along latch side</td><td>Latch worn or out of adjustment</td><td>Latch engagement and compression when closed</td><td>Adjust latch keeper or cam; replace worn latch</td></tr>
<tr><td>Gap at top or bottom corner</td><td>Door racked, hinges sagging</td><td>Measure diagonals of door and frame; look for hinge wear</td><td>Adjust or replace hinges; shim; realign frame</td></tr>
<tr><td>Door hard to close, leaks on hinge side</td><td>Frame distorted by casing settling or pressure</td><td>Frame squareness; base level</td><td>Re-level unit; repair frame; check base support</td></tr>
<tr><td>Door blows open</td><td>Outward swing on positive section; single latch</td><td>Swing direction versus pressure</td><td>Add safety latch or additional latches; rehang to swing inward if possible</td></tr>
<tr><td>Gasket pulls out of channel</td><td>Wrong gasket size or adhesive failure</td><td>Gasket profile against frame channel</td><td>Install correct profile in a retaining channel</td></tr>
</tbody>
</table>
<p>Gaskets fail through age, heat, ozone, cleaning chemicals and repeated compression. Closed-cell EPDM and silicone last longer than open-cell foam. When replacing, use the same profile and hardness so compression is correct; a gasket too thick prevents latching and one too thin never seals. Door hardware selection for new units is covered in <a href="<?= url('guides/access-door-specification') ?>">access door specification</a>.</p>

<h2>Panel joints and split joints</h2>
<h3>Cause: gasket or sealant failure at panel joints</h3>
<p><strong>Check:</strong> smoke along the joint; inspect for gaps, missing fasteners or degraded sealant. <strong>Fix:</strong> remove failed sealant, clean, and reseal with a compatible sealant; replace missing fasteners; for gasketed panels, remove and re-gasket.</p>
<h3>Cause: field split joint not properly made</h3>
<p><strong>Check:</strong> leaks concentrated along the line between shipping sections; missing gasket, uneven compression or misaligned panels. <strong>Fix:</strong> open the joint if necessary, install the manufacturer's gasket, re-tighten splice bolts to the specified torque, and seal per the manufacturer's detail. See <a href="<?= url('guides/field-joining-split-sections') ?>">joining split sections</a>.</p>
<h3>Cause: base settling</h3>
<p><strong>Check:</strong> level the unit along its length; look for gaps opening at the bottom of joints. <strong>Fix:</strong> re-shim or re-level; correct the support.</p>
<h3>Cause: panel deflection under pressure</h3>
<p><strong>Check:</strong> panels visibly bowing at high fan speed; leaks that appear only at high pressure. <strong>Fix:</strong> confirm operating pressure is within casing rating; add stiffeners; lower duct static setpoint if it is higher than needed.</p>

<h2>Penetrations</h2>
<p><strong>Check:</strong> smoke around pipes, conduits, sensor capillaries and drains; look for oversize holes filled with foam or tape. <strong>Fix:</strong> install proper grommets, boots or gasketed fittings on both faces; seal inside conduits. Methods are in <a href="<?= url('guides/casing-penetration-sealing') ?>">sealing casing penetrations</a>.</p>

<h2>After the repair</h2>
<ol>
<li>Re-run the unit at high airflow and repeat the smoke check.</li>
<li>Compare fan speed and power at the same duct static with pre-repair values.</li>
<li>If the unit is critical, perform a field leakage test to quantify the result.</li>
<li>Add gasket inspection to the preventive maintenance schedule, typically annually for doors that are opened often.</li>
</ol>
<?php guide_end([
    ['Why is my air handler access door whistling?', 'Usually the gasket is no longer compressed evenly, the latch has worn or lost adjustment, or the door or frame has racked out of square. Air forced through the small gap at high pressure causes the whistle.'],
    ['How do I replace an AHU door gasket?', 'Lock out the unit, remove the old gasket and adhesive, clean the seat, and install a replacement of the same profile and hardness, preferably in a retaining channel. Check latch compression afterward with a paper test around the door.'],
    ['How do I find air leaks in an air handler casing?', 'Run the unit at high airflow, then use sound, a smoke pencil or an ultrasonic leak detector along doors, joints, corners and penetrations. With the unit off and locked out, look for light around closed doors from inside a dark section.'],
]);
