<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('lab-makeup-air-diversity-sizing'); ?>
<p class="lede">With VAV fume hoods, not every sash is fully open at the same time, so the building's peak exhaust is less than the sum of every hood's maximum. A diversity factor applied to the variable part of the hood exhaust gives a realistic peak, and the lab makeup air unit is sized on that diversified peak rather than on the arithmetic total.</p>

<h2>What diversity means and where it applies</h2>
<p>Each VAV hood has a minimum exhaust (sash closed or at its lowest allowed flow) and a maximum (sash at its full working height). In a building with dozens or hundreds of hoods, the chance that every sash is open at once is very small. Diversity expresses the expected peak simultaneous use as a fraction of what is possible.</p>
<p>Diversity applies only to the parts of the exhaust that actually vary. Room general exhaust held at a fixed ACH, canopy hoods, storage cabinets and constant volume hoods are counted at full value. Diversity is also a building or system concept: a single lab room still has to handle all its own hoods at full open, because one researcher can open both sashes. Room-level control is the subject of <a href="<?= url('guides/fume-hood-makeup-air') ?>">supplying makeup air for fume hood exhaust</a>; this guide covers only the system sizing.</p>

<h2>The calculation</h2>
<p>A common way to apply diversity is to the range between minimum and maximum:</p>
<p class="formula">Diversified hood exhaust = Σ Hood minimums + DF × Σ (Hood maximum − Hood minimum)</p>
<p>Then add the fixed exhaust:</p>
<p class="formula">Design system exhaust = Diversified hood exhaust + Σ Fixed exhaust (general, canopy, cabinets, constant volume devices)</p>
<p>But no room can exhaust less than its own minimum, so the general exhaust needed to reach each room's minimum ventilation rate must also be accounted for. When rooms are governed by cooling or ACH rather than hoods, that general exhaust rises as hood exhaust falls. A careful calculation builds a room-by-room table and sums the higher of the hood-plus-general total or the room minimum, at the diversified state.</p>
<p>Some designers apply DF to the full maximum (Σ maximums × DF) and then check that the result is not below the sum of minimums. Both approaches are used; state which one you used in the basis of design.</p>

<h2>Choosing the diversity factor</h2>
<p>There is no single correct factor. It depends on how the building is used:</p>
<table>
<thead><tr><th>Building characteristics</th><th>Diversity tendency</th></tr></thead>
<tbody>
<tr><td>Many hoods (tens to hundreds), research labs, staggered schedules</td><td>Lower factors are often justified</td></tr>
<tr><td>Few hoods on the system</td><td>Little diversity; assume near full use</td></tr>
<tr><td>Teaching labs where a whole class opens sashes together</td><td>Treat each teaching lab at full use</td></tr>
<tr><td>Automatic sash closers and an active sash policy</td><td>Supports lower factors</td></tr>
<tr><td>Owner plans to add hoods later</td><td>Leave capacity margin or use a higher factor</td></tr>
</tbody>
</table>
<p>The best basis is measured data from comparable buildings on the same campus, where the owner has trends of hood sash positions or exhaust flow. Without data, factors in the range of roughly 50% to 80% on the variable portion are frequently discussed for large research buildings, but they must be agreed with the owner, not assumed.</p>
<p class="warn">If actual use exceeds the diversified design, the system cannot supply enough air, exhaust static falls and labs may lose negative pressure. Include alarms for low exhaust and supply duct static and a plan for what happens at overload.</p>

<h2>Worked example</h2>
<p>A research building has 80 VAV hoods, each 6 ft, with a maximum exhaust of 1,000 cfm at full working sash height and a minimum of 300 cfm. Other fixed exhaust (cabinets, canopy hoods, snorkels) totals 6,000 cfm. Room general exhaust needed to reach each room's minimum ACH, with hoods at their diversified state, totals 22,000 cfm. The owner agrees to a 60% diversity factor on the variable hood portion.</p>
<ul>
<li>Σ minimums = 80 × 300 = 24,000 cfm</li>
<li>Σ (max − min) = 80 × 700 = 56,000 cfm</li>
<li>Diversified hood exhaust = 24,000 + 0.60 × 56,000 = 57,600 cfm</li>
<li>Fixed device exhaust = 6,000 cfm</li>
<li>General exhaust for room minimums = 22,000 cfm</li>
<li>Design system exhaust = 57,600 + 6,000 + 22,000 = 85,600 cfm</li>
</ul>
<p>Without diversity, hood exhaust would be 80,000 cfm and the system 108,000 cfm. Diversity reduced the design by about 21%.</p>
<p>Now convert exhaust to supply. Suppose the building has 40 labs, each offset by 200 cfm, so 8,000 cfm reaches the labs as transfer air from corridors. The labs receive 85,600 − 8,000 = 77,600 cfm of direct supply. If the same unit also supplies the corridors with the 8,000 cfm that transfers into the labs, its design airflow is the full 85,600 cfm. Add any other spaces it serves, such as offices, at their own design airflow.</p>
<p class="note">Size coils and humidifiers for the diversified peak, but check fan and terminal minimums too. At night with sashes closed and occupancy setback, total flow may fall to less than a third of the design peak.</p>

<h2>Minimum flow and turndown</h2>
<p>The other end of the range matters as much as the peak. In the example, the night minimum might be the sum of hood minimums, fixed exhaust and unoccupied room minimums, perhaps around 40,000 cfm, under half the design peak. The AHU's fans, coils and preheat controls must be stable at that flow. A fan array with enough fans to stage, coils selected so face velocity at minimum still allows good control, and preheat that remains freeze-safe at low flow are all part of that. See <a href="<?= url('guides/ahu-turndown-minimum-airflow') ?>">AHU turndown and minimum airflow</a>.</p>
<p>Room minimums depend on the ventilation rates assigned to each lab, so firm those up first using <a href="<?= url('guides/lab-air-change-rates') ?>">setting laboratory air change rates</a>.</p>
<?php guide_end([
    ['What is a fume hood diversity factor?', 'It is the fraction of the variable hood exhaust expected to be in use at the building\'s peak. Applying it to the range between hood minimum and maximum flows gives a realistic peak exhaust for sizing central fans and makeup air units.'],
    ['What diversity factor should I use for lab hoods?', 'It depends on hood count, usage patterns and sash management. Large research buildings often use factors in the range of roughly 50% to 80% on the variable portion, but the value should be based on owner data and agreed in writing.'],
    ['Does diversity apply to individual lab rooms?', 'No. A single room must handle all of its hoods fully open, because one person can open every sash in the room. Diversity applies only to the central system serving many rooms.'],
]);
