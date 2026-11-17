<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-placement-recovery-leakage'); ?>
<p class="lede">Arrange the fans so the outdoor air side of the recovery device is at a higher static pressure than the exhaust side at every operating point. Then any seal leakage moves clean outdoor air into the exhaust rather than exhaust into the supply, and a wheel purge sector has the pressure it needs to work. The usual way to get there is to put the exhaust fan downstream of the device and keep the outdoor air side's pressure drop low.</p>

<h2>Step 1: Lay out the four possible arrangements</h2>
<p>Each fan can sit upstream (blow-through) or downstream (draw-through) of the device, giving four combinations. At the device face, the static pressure on each side depends on where its fan is and what losses lie between the fan and the device.</p>
<table>
<thead><tr><th>Supply fan</th><th>Exhaust fan</th><th>OA side pressure</th><th>Exhaust side pressure</th><th>Leakage direction</th></tr></thead>
<tbody>
<tr><td>Draw-through</td><td>Draw-through</td><td>Slightly negative</td><td>More negative</td><td>OA to exhaust (usually; check values)</td></tr>
<tr><td>Blow-through</td><td>Draw-through</td><td>Positive</td><td>Negative</td><td>OA to exhaust, large differential</td></tr>
<tr><td>Draw-through</td><td>Blow-through</td><td>Negative</td><td>Positive</td><td>Exhaust to supply; avoid</td></tr>
<tr><td>Blow-through</td><td>Blow-through</td><td>Positive</td><td>Positive</td><td>Depends on which is higher; unreliable</td></tr>
</tbody>
</table>
<p>The draw-through supply with draw-through exhaust arrangement is the common choice for wheels because the outdoor air side sees only the intake louvre, damper and filter losses, while the exhaust side sees the entire return duct system. That naturally puts the exhaust side lower.</p>

<h2>Step 2: Calculate pressures at the device</h2>
<ol>
<li>Start at the outdoor air intake (atmospheric) and subtract each pressure drop up to the device: louvre, damper, prefilter and any coil. The result is the outdoor air side static pressure at the device inlet.</li>
<li>Start at the space and subtract the return and exhaust duct losses up to the device for a draw-through exhaust fan, or add the fan's static rise for a blow-through fan. The result is the exhaust side pressure at the device.</li>
<li>Do the calculation at both the device inlet and outlet faces of each stream, because the seals see pressures on both faces.</li>
<li>Repeat with clean and dirty filters, since filter loading shifts the outdoor air side pressure downward over time.</li>
</ol>
<h3>Example</h3>
<p>Intake louvre 0.15 in. w.c., damper 0.10, MERV 8 filter at 0.35 dirty: the outdoor air side at the wheel inlet is −0.60 in. w.c.; after the wheel's 0.75 drop it is −1.35 at the outlet. The return system has 0.90 in. w.c. of duct and return filter losses, so the exhaust side is −0.90 at the wheel inlet and −1.65 at the outlet. At the purge location (supply inlet versus exhaust outlet) the difference is −0.60 − (−1.65) = 1.05 in. w.c. in the correct direction. At the opposite seal (supply outlet versus exhaust inlet) it is −1.35 − (−0.90) = −0.45, so at that point the exhaust side is higher and some exhaust can leak toward supply.</p>
<p class="note">The worst seal location is usually where the supply leaves the device and the exhaust enters it. Check that location specifically, not just an average.</p>

<h2>Step 3: Adjust if the differential is wrong</h2>
<ol>
<li><strong>Add resistance on the exhaust side upstream of the device.</strong> A balancing damper in the return or exhaust path lowers exhaust side pressure. It costs fan energy, so use the least needed.</li>
<li><strong>Reduce resistance on the outdoor air side.</strong> Larger louvres, lower-drop dampers or moving a filter downstream of the device raise outdoor air side pressure.</li>
<li><strong>Move the supply fan to blow-through.</strong> This puts the outdoor air side strongly positive and guarantees the leakage direction, at the cost of higher OACF and a larger outdoor air volume to condition.</li>
<li><strong>Change the exhaust fan location.</strong> Never accept a blow-through exhaust fan on a wheel unless the exhaust is clean and transfer is acceptable for the air class.</li>
</ol>

<h2>Step 4: Check part-load and economizer operation</h2>
<p>Pressures change when airflows change. Variable air volume systems, demand control ventilation and economizer modes alter the outdoor air side and exhaust side losses differently.</p>
<ol>
<li>Recalculate at minimum outdoor air, at full economizer, and at reduced exhaust.</li>
<li>Where the differential reverses at some operating point, add a controlled damper that maintains a minimum differential measured across the device.</li>
<li>Install a differential pressure transmitter between the two sides at the critical seal location and alarm on loss of differential.</li>
</ol>

<h2>Step 5: Set the purge and balance</h2>
<ol>
<li>Set the purge sector angle to suit the measured differential. Too large an angle wastes outdoor air; too small leaves carryover.</li>
<li>Balance the system, then measure the actual differential at the device and compare with design.</li>
<li>Trim the balancing damper to restore the differential if it fell short.</li>
<li>Record final values in the test and balance report so future changes can be checked against them.</li>
</ol>
<p class="warn">Changing filters to a higher MERV rating after commissioning lowers the outdoor air side pressure and can reverse leakage. Re-check the differential after any filter upgrade.</p>

<h2>Applying the same logic to plates and heat pipes</h2>
<p>Plates and heat pipes have no carryover, but their seals and frames still leak toward lower pressure. The same goal applies: keep the outdoor air side higher. It matters most where the exhaust carries odours or contaminants. The rated leakage metrics that this guide is designed to control are defined in <a href="<?= url('guides/eatr-oacf-wheel-leakage') ?>">EATR and OACF</a>. For the general implications of draw-through and blow-through fans on the rest of the unit, see <a href="<?= url('guides/draw-through-vs-blow-through-fan-arrangement') ?>">draw-through vs blow-through fan arrangement</a>.</p>
<?php guide_end([
    ['Where should the exhaust fan be located on an energy recovery wheel?', 'Usually downstream of the wheel, drawing exhaust through it. That keeps the exhaust side at lower pressure than the outdoor air side, so seal leakage goes from outdoor air to exhaust.'],
    ['Why does pressure differential matter for wheel leakage?', 'Seal leakage flows from high to low pressure. If the exhaust side is higher, exhaust leaks into the supply. A positive differential from outdoor air to exhaust also drives the purge sector that limits carryover.'],
    ['Can filter loading change wheel leakage direction?', 'Yes. As outdoor air filters load, the outdoor air side pressure at the wheel drops. Check the differential with dirty filters and after any filter upgrade.'],
]);
