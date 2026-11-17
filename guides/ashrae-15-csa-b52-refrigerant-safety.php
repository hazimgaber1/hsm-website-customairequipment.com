<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ashrae-15-csa-b52-refrigerant-safety'); ?>
<p class="lede">ASHRAE 15 in the US and CSA B52 in Canada limit how much refrigerant a system can release into an occupied space, and for mildly flammable A2L refrigerants such as R-32 and R-454B they add requirements for leak detection and automatic mitigation. An AHU with a DX coil becomes part of that system, so its charge, its sensors and its response to a leak all have to be designed in.</p>

<h2>Why A2L refrigerants changed the rules</h2>
<p>The phase-down of high-GWP HFCs, driven in the US by the AIM Act and EPA technology transitions rules and in Canada by federal regulations under CEPA, pushed new commercial DX equipment toward lower-GWP refrigerants. The most common replacements are classified A2L under ASHRAE 34: lower toxicity (A) and lower flammability (2L), with a low burning velocity. They are hard to ignite but not nonflammable, so the safety standards now treat a leak as a potential flammable mixture as well as a toxicity or oxygen-displacement hazard.</p>
<p>Recent editions of ASHRAE 15 and CSA B52 were rewritten to accommodate A2Ls, and they work together with equipment safety standard UL 60335-2-40 / CSA C22.2 No. 60335-2-40, which covers the appliance itself. The model mechanical codes adopted these standards on different schedules, so check which editions your jurisdiction enforces.</p>

<h2>Charge limits: how much refrigerant a space can take</h2>
<p>The standards cap the refrigerant quantity that could leak into an occupied space. The basic concept:</p>
<ul>
<li>Each refrigerant has a <strong>refrigerant concentration limit (RCL)</strong> derived from toxicity, oxygen deprivation and flammability.</li>
<li>The allowable charge is the RCL multiplied by the volume into which a leak would disperse.</li>
<li>For a ducted air handler, that dispersal volume can include the spaces served by the duct system, but only if air circulation is ensured when a leak occurs.</li>
<li>Where the charge exceeds what the smallest connected space can safely take, the system must either reduce charge, add mitigation, or be placed in a machinery room.</li>
</ul>
<p>For A2Ls, the appliance standard also defines factors that let a manufacturer use a larger dispersal volume when the unit provides circulation airflow and leak detection. That is why many A2L air handlers are sold with a sensor and a mitigation board as standard.</p>
<p class="note">The smallest room served is usually the limiting space. A single small office or electrical room on a large VAV system can control the allowable charge for the whole circuit.</p>

<h2>Leak detection requirements</h2>
<p>When the charge in a circuit exceeds the threshold that would be safe without mitigation, a refrigerant detection system is required. Typical expectations:</p>
<table>
<thead><tr><th>Element</th><th>What the standards look for</th></tr></thead>
<tbody>
<tr><td>Sensor type</td><td>Listed for the specific refrigerant, often integrated by the equipment manufacturer</td></tr>
<tr><td>Location</td><td>Where leaked refrigerant would collect: low in the cabinet near the coil and drain pan, since A2Ls are heavier than air</td></tr>
<tr><td>Set point</td><td>A fraction of the lower flammability limit, defined by the standard</td></tr>
<tr><td>Supervision</td><td>Fault detection so a failed sensor triggers the same response as a leak</td></tr>
<tr><td>Service life</td><td>Replacement or recalibration per manufacturer instructions</td></tr>
</tbody>
</table>

<h2>Mitigation actions on a detected leak</h2>
<p>Detection alone does nothing; the system must respond. Mitigation actions required or permitted by the standards include:</p>
<ol>
<li><strong>Start or maintain circulation airflow</strong> through the air handler at a minimum rate, so leaked refrigerant is diluted throughout the connected spaces rather than pooling.</li>
<li><strong>Stop the compressor</strong> and close any automatic shutoff valves to limit the amount released.</li>
<li><strong>Open zone dampers</strong> fully so that the duct system's served volume is actually available for dilution. VAV boxes that close on a leak defeat the dispersal assumption.</li>
<li><strong>De-energize potential ignition sources</strong> in the airstream that are not rated for the condition, such as some electric heaters.</li>
<li><strong>Annunciate</strong> the alarm locally and at the building automation system.</li>
</ol>
<p class="warn">Building controls must not override the mitigation sequence. If the BAS schedules the fan off during unoccupied hours, the refrigerant detection system still has to be able to start it.</p>

<h2>Machinery rooms</h2>
<p>Large charges, such as those in central chillers or big split systems with remote condensing units in a plant room, push equipment into machinery room requirements: refrigerant detectors, mechanical ventilation sized by the standard, emergency ventilation, tight doors and signage. Under the A2L editions, machinery room ventilation and electrical requirements were adjusted for flammability. Air handlers with DX coils are not usually in a machinery room themselves, but the remote condensing equipment may be.</p>

<h2>What this means for the AHU</h2>
<ul>
<li>The refrigerant circuit charge, including line sets, must be known early to check against the smallest served space.</li>
<li>The unit needs a sensor location low in the coil section and a wiring path to the mitigation controller.</li>
<li>Fan controls must accept a leak signal that forces minimum airflow regardless of schedule.</li>
<li>Zone dampers and VAV boxes need a leak-response override.</li>
<li>Electric heaters and other components in the airstream should be confirmed as acceptable for A2L service.</li>
</ul>
<p>Coil-side design changes for A2L refrigerants, such as circuiting and charge reduction, are covered in <a href="<?= url('guides/low-gwp-a2l-refrigerant-dx-coils') ?>">low-GWP A2L refrigerant DX coils</a>. The DX staging that interacts with mitigation is in <a href="<?= url('guides/dx-coil-circuiting-and-staging') ?>">DX coil circuiting and staging</a>.</p>

<h2>Canadian specifics</h2>
<p>CSA B52, Mechanical Refrigeration Code, is referenced by provincial codes and is often enforced by the provincial boiler and pressure vessel authority rather than the building inspector. Registration of refrigeration systems above certain sizes, licensing of refrigeration mechanics and inspection before operation can apply. Check the province's requirements, as adoption of the A2L edition of B52 has not been uniform.</p>
<?php guide_end([
    ['Do A2L air handlers always need leak detection?', 'Not always. Leak detection is required when the refrigerant charge exceeds the amount that could safely disperse into the smallest served space without mitigation. Many manufacturers include detection as standard because larger systems usually exceed that threshold.'],
    ['What happens when an A2L leak is detected?', 'The system typically starts or maintains circulation airflow, stops the compressor, opens zone dampers and annunciates an alarm. The building automation system must not override these actions.'],
    ['Where should refrigerant sensors be located in an AHU?', 'Low in the cabinet near the coil and drain pan, because A2L refrigerants are heavier than air. Follow the equipment manufacturer\'s listed location.'],
    ['Is CSA B52 the same as ASHRAE 15?', 'They cover similar ground, but CSA B52 is the Canadian Mechanical Refrigeration Code and is often enforced by provincial pressure vessel authorities with registration and licensing requirements that do not exist in ASHRAE 15.'],
]);
