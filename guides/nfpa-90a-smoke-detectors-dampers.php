<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('nfpa-90a-smoke-detectors-dampers'); ?>
<p class="lede">NFPA 90A requires duct smoke detection on air handlers above set airflow thresholds, fire dampers where ducts pass through rated barriers, and low flame-spread, low smoke-developed materials anywhere air moves. Under the editions most commonly adopted, a supply-side detector is required on systems over 2,000 cfm and return-side detectors on multi-story systems over 15,000 cfm.</p>

<h2>Scope of NFPA 90A</h2>
<p>NFPA 90A, Standard for the Installation of Air-Conditioning and Ventilating Systems, applies to systems serving spaces over 25,000 ft³, buildings of certain construction types, and buildings over three stories. Smaller systems and many residential buildings fall under NFPA 90B instead. Where the IMC is the adopted mechanical code, its own smoke detector and damper provisions closely follow 90A, but the code your jurisdiction adopts is the one that governs. Check the edition referenced by your building code.</p>

<h2>Smoke detector thresholds</h2>
<table>
<thead><tr><th>Location</th><th>When required (common edition values)</th><th>Placement</th></tr></thead>
<tbody>
<tr><td>Supply air</td><td>Systems with capacity greater than 2,000 cfm (944 L/s)</td><td>Downstream of filters and ahead of any branch connection</td></tr>
<tr><td>Return air</td><td>Systems greater than 15,000 cfm (7,080 L/s) serving more than one story</td><td>At each story, before the connection to a common return and before any recirculation or fresh air inlet connection</td></tr>
</tbody>
</table>
<p>A key exception: detectors in the ducts are generally not required where the entire space served by the system is protected by area smoke detectors connected to the building fire alarm system that shut down the unit on activation. Many designers still specify duct detectors because owners want localized shutdown and indication.</p>
<h3>What the detectors must do</h3>
<ul>
<li>Stop the supply and return fans of the affected system on alarm, unless the system is part of an engineered smoke control system.</li>
<li>Report to the fire alarm system where one exists, typically as a supervisory signal rather than a general alarm, as required by NFPA 72.</li>
<li>Be accessible for testing and cleaning. Remote test stations are common where the duct detector sits above a ceiling.</li>
</ul>
<h3>Placement in and around the AHU</h3>
<p>Duct detectors work by sampling air through a tube across the duct. Air velocity must fall within the listed range of the detector, and turbulent zones near fans, coils and elbows can give unreliable readings. Mount sampling tubes in straight duct runs downstream of the unit discharge, with several duct diameters of straight run where possible. Detectors mounted inside the AHU casing are possible but need the manufacturer's agreement on sampling location and access.</p>
<p class="note">Duct detectors are not a substitute for area smoke detection. They respond only to smoke that has already entered the duct, and they are diluted by large airflows.</p>

<h2>Fire dampers, smoke dampers and combination dampers</h2>
<p>NFPA 90A requires fire dampers where ducts penetrate certain fire-rated barriers, with the specific barrier ratings that trigger a damper defined by the edition and by the building code. Smoke dampers are tied to smoke barriers and to systems serving more than one smoke compartment. The building code adopted locally often adds or modifies requirements.</p>
<table>
<thead><tr><th>Damper type</th><th>Purpose</th><th>Rating standard</th><th>Typical actuation</th></tr></thead>
<tbody>
<tr><td>Fire damper</td><td>Maintain fire resistance of a rated barrier</td><td>UL 555 / CAN/ULC-S112</td><td>Fusible link, usually 165°F (74°C)</td></tr>
<tr><td>Smoke damper</td><td>Limit smoke migration through ducts</td><td>UL 555S</td><td>Signal from smoke detector or fire alarm</td></tr>
<tr><td>Combination fire/smoke</td><td>Both functions in one assembly</td><td>UL 555 and UL 555S</td><td>Heat-responsive device plus actuator</td></tr>
</tbody>
</table>
<p>Dampers at the AHU itself, such as outdoor air and isolation dampers, are control dampers rather than fire dampers. They do not replace fire or smoke dampers at barrier penetrations. Their leakage ratings are a separate matter, explained in <a href="<?= url('guides/amca-500-d-damper-leakage') ?>">AMCA 500-D damper leakage</a>.</p>
<h3>Access and installation</h3>
<ul>
<li>Provide an access door in the duct at each fire and smoke damper, sized for resetting the link and inspecting the blades.</li>
<li>Install dampers per the manufacturer's listed installation instructions; sleeve, retaining angle and clearance details are part of the listing.</li>
<li>Label access doors so inspectors and maintenance staff can find them.</li>
</ul>

<h2>Materials rules that affect the air handler</h2>
<p>NFPA 90A limits combustibility of materials exposed to the airstream. The general rule for linings, coverings, insulation and other materials in ducts and air-handling plenums is a flame spread index not over 25 and a smoke-developed index not over 50 when tested to ASTM E84 or UL 723. Duct materials must also meet listed duct standards such as UL 181 where nonmetallic ducts are used.</p>
<p>For an air handler, that typically means:</p>
<ul>
<li>Casing insulation, whether fiberglass or foam, must achieve 25/50 or be fully encapsulated in a way the code accepts.</li>
<li>Gaskets, sealants and drain pan coatings are small-quantity items with specific allowances in most editions, but confirm.</li>
<li>Filters in the airstream generally need to meet UL 900 for flammability performance.</li>
<li>Wiring exposed in a plenum must be plenum-rated or in raceway.</li>
</ul>
<p>Specification language for insulation ratings in both countries is covered in <a href="<?= url('guides/insulation-fire-rating-specification') ?>">specifying insulation fire ratings</a>.</p>

<h2>What is outside 90A's AHU provisions</h2>
<p>NFPA 90A tells you when to shut a system down on smoke. It does not tell you how to design a smoke control system that keeps fans running in a specific pattern to pressurize stairs or exhaust a zone. Those sequences come from NFPA 92 and the building code and are covered in <a href="<?= url('guides/smoke-control-sequences') ?>">smoke control sequences</a>. When an AHU participates in smoke control, its detector shutdown function must be overridden by the firefighter's smoke control panel.</p>
<?php guide_end([
    ['When does an air handler need a duct smoke detector under NFPA 90A?', 'In the editions most commonly adopted, a supply-side detector is required on systems over 2,000 cfm, and return-side detectors at each story are required on systems over 15,000 cfm serving more than one story. Confirm values in the edition adopted locally.'],
    ['Can area smoke detectors replace duct detectors?', 'Generally yes, when the entire space served by the system is covered by area smoke detection connected to the fire alarm system and arranged to shut down the unit. Many owners still specify duct detectors for localized shutdown.'],
    ['What flame spread and smoke rating is required for AHU insulation?', 'Materials exposed to the airstream generally need a flame spread index of 25 or less and a smoke-developed index of 50 or less when tested to ASTM E84 or UL 723.'],
    ['Is an AHU outdoor air damper a fire damper?', 'No. Outdoor air and isolation dampers are control dampers. Fire and smoke dampers are listed devices installed at rated barrier penetrations and are required separately.'],
]);
