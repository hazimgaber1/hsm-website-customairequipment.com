<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('exhaust-air-class-recovery-restrictions'); ?>
<p class="lede">ASHRAE 62.1 sorts exhaust and return air into four classes by how contaminated or odorous it is. The higher the class, the less of that air may leak back into the supply through an energy recovery device. Class 1 air suits any device, Class 2 and 3 air limit how much transfer a wheel may have, and Class 4 air rules out any device that can recirculate, which in practice means no wheels.</p>

<h2>The four air classes</h2>
<p>ASHRAE Standard 62.1 assigns air classes by space type in its tables, and designers can reclassify air where the source of contamination warrants it. The broad meaning of each class:</p>
<table>
<thead><tr><th>Class</th><th>Description</th><th>Typical examples</th></tr></thead>
<tbody>
<tr><td>1</td><td>Low contaminant concentration, low sensory irritation, inoffensive odour</td><td>Offices, classrooms, lobbies, most occupied spaces</td></tr>
<tr><td>2</td><td>Moderate contaminant concentration, mild irritation or mildly offensive odour</td><td>Toilet rooms, some storage, restaurant dining, some locker rooms</td></tr>
<tr><td>3</td><td>Significant contaminant concentration, significant irritation or offensive odour</td><td>Some commercial kitchens (non-hood), janitor closets, trash rooms</td></tr>
<tr><td>4</td><td>Highly objectionable fumes or gases, or potentially dangerous particles, bioaerosols or gases</td><td>Fume hood exhaust, kitchen grease hood exhaust, paint booths, some process exhaust</td></tr>
</tbody>
</table>
<p>Assignments vary by edition, and many space types appear in the standard's tables with specific classes. Always read the class from the edition adopted for the project rather than from a summary like this one.</p>

<h2>How class limits recovery</h2>
<p>The standard controls where each class of air may go. Class 1 air may be recirculated anywhere. Higher classes may be recirculated only to the same space or to spaces of equal or higher class, and Class 4 air may not be recirculated or transferred at all.</p>
<p>Energy recovery devices create unintended recirculation through carryover and seal leakage. Recent editions of 62.1 address this directly: they allow a limited amount of Class 2 and Class 3 air to pass to the supply through an energy recovery device, expressed as a small percentage of the outdoor air intake, with a tighter limit for Class 3 than for Class 2. Class 4 air is not allowed to pass through a device that transfers exhaust to supply. Check the percentages and wording in your edition; they have been revised over time.</p>
<p>The transfer is measured as the exhaust air transfer ratio. How it is defined and tested is covered in <a href="<?= url('guides/eatr-oacf-wheel-leakage') ?>">EATR and OACF</a>.</p>

<h2>Practical consequences by device</h2>
<h3>Rotary wheels</h3>
<p>Every wheel has some carryover. With a purge sector and correct pressure arrangement, a wheel can usually meet the limits for Class 2 air. Meeting the tighter Class 3 limit requires a low certified EATR at the actual installed pressure condition. Class 4 air rules out wheels.</p>
<h3>Fixed plates and heat pipes</h3>
<p>These have no carryover, only seam and frame leakage. Well-built cores can achieve very low transfer, which may satisfy Class 2 and Class 3 limits. For Class 4 exhaust, many designers still avoid them because a seal failure would put hazardous air into the supply with no warning.</p>
<h3>Runaround loops</h3>
<p>Separate coils in separate airstreams cannot transfer air. They are the standard choice for Class 4 exhaust such as laboratory fume hoods, as long as the exhaust coil can tolerate the contaminants.</p>

<h2>Contaminant concerns beyond the class table</h2>
<p>Air class addresses air leakage. Some contaminants can transfer even with zero air leakage, and the standard's classes do not capture every case.</p>
<ul>
<li><strong>Desiccant transfer.</strong> Water-soluble or adsorbable gases can be picked up by a desiccant coating in the exhaust stream and released in the supply. The size of the effect depends on the chemical and the desiccant. Where specific gases are a concern, ask the manufacturer for test data on that compound.</li>
<li><strong>Odours.</strong> Some odorous compounds adsorb on wheel media. Kitchen and toilet exhaust can cause noticeable odour transfer even within leakage limits.</li>
<li><strong>Grease and sticky particulate.</strong> These foul wheels and plates and are a reason to keep kitchen hood exhaust out of standard recovery devices regardless of class.</li>
<li><strong>Corrosive gases.</strong> These attack aluminum media and coatings. Recovery from such exhaust needs special materials; see <a href="<?= url('guides/process-exhaust-heat-recovery') ?>">recovering heat from industrial process exhaust</a>.</li>
</ul>

<h2>Design approaches for mixed exhaust</h2>
<p>Many buildings exhaust a mix of Class 1 general exhaust, Class 2 toilet exhaust and occasional Class 3 or 4 sources. Options include:</p>
<ol>
<li><strong>Separate the streams.</strong> Route Class 3 and 4 exhaust to dedicated fans without recovery, and pass only Class 1 and 2 air through a wheel.</li>
<li><strong>Use a runaround loop</strong> on the contaminated stream and a wheel on the clean stream, both serving the same outdoor air unit.</li>
<li><strong>Reclassify carefully.</strong> If toilet exhaust is a small fraction of the total, the combined airstream is still classed at the highest class it contains; dilution does not lower the class.</li>
<li><strong>Document the decision</strong> in the ventilation design, with the air class of each exhaust source and the device's certified transfer value.</li>
</ol>
<p class="warn">Never route laboratory fume hood or other Class 4 exhaust through a wheel, even with a purge sector and favourable pressures. Seal wear and control faults can reverse leakage without anyone noticing.</p>
<p>Healthcare facilities have additional rules under ASHRAE 170 and CSA Z317.2; those are discussed in <a href="<?= url('guides/hospital-energy-recovery-options') ?>">hospital energy recovery options</a>.</p>
<?php guide_end([
    ['Can toilet exhaust go through an energy recovery wheel?', 'Toilet exhaust is typically Class 2 air under ASHRAE 62.1, which allows a limited amount of transfer through an energy recovery device. A wheel with a purge sector and correct pressures can usually comply. Check the edition adopted for your project.'],
    ['Which exhaust air cannot use an energy wheel?', 'Class 4 air, such as fume hood, grease hood and paint booth exhaust, may not be recirculated, so wheels are not used. Runaround loops are the usual alternative because they keep the airstreams fully separate.'],
    ['Does mixing exhaust streams lower the air class?', 'No. A combined airstream is classed at the highest class it contains. Separate contaminated exhaust from general exhaust if you want to use a wheel on the clean portion.'],
]);
