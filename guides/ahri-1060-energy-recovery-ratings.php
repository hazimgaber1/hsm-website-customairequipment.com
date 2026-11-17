<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahri-1060-energy-recovery-ratings'); ?>
<p class="lede">AHRI 1060 is the rating standard for air-to-air exchangers used in energy recovery ventilation: wheels, plates and similar cores tested as components. A certified rating gives you effectiveness, pressure drop and leakage measured at fixed test conditions, which lets you compare products on equal terms. It does not tell you how a complete air handling unit performs.</p>

<h2>What the standard covers</h2>
<p>AHRI Standard 1060 defines how the performance of an air-to-air exchanger is rated and reported. The device is tested on its own, with supply and exhaust airflows controlled by the test rig rather than by the unit's own fans. Measurement methods come from ASHRAE Standard 84, which describes the test apparatus, instrumentation and calculation of effectiveness and leakage.</p>
<p>AHRI operates a certification program built on the standard. Manufacturers who participate submit their models for rating, and AHRI selects samples for independent testing to verify that published values hold up. Only models listed in the AHRI directory under that program are certified; a manufacturer stating that a product was "tested to" the standard is not the same claim.</p>
<p>Component types covered include rotary heat and enthalpy wheels and fixed plate exchangers, sensible and membrane. Runaround loops are generally rated as coil assemblies rather than under this program.</p>

<h2>What gets reported</h2>
<table>
<thead><tr><th>Metric</th><th>What it tells you</th></tr></thead>
<tbody>
<tr><td>Sensible effectiveness</td><td>Fraction of the maximum possible temperature change achieved</td></tr>
<tr><td>Latent effectiveness</td><td>Fraction of the maximum possible humidity ratio change achieved (zero for sensible devices)</td></tr>
<tr><td>Total effectiveness</td><td>Fraction of the maximum possible enthalpy change achieved</td></tr>
<tr><td>Supply and exhaust pressure drop</td><td>Airside resistance the fans must overcome</td></tr>
<tr><td>Exhaust air transfer ratio (EATR)</td><td>Share of supply air that came from the exhaust</td></tr>
<tr><td>Outdoor air correction factor (OACF)</td><td>Ratio of outdoor air entering to supply air leaving</td></tr>
</tbody>
</table>
<p>The leakage terms are explained in <a href="<?= url('guides/eatr-oacf-wheel-leakage') ?>">EATR and OACF</a>, and the effectiveness definitions in <a href="<?= url('guides/recovery-effectiveness-calculation') ?>">calculating energy recovery effectiveness</a>.</p>

<h2>The test conditions</h2>
<p>Ratings are reported at a standard summer (cooling) condition and a standard winter (heating) condition, each with defined outdoor and return air dry-bulb and wet-bulb temperatures. Effectiveness is measured at the rated airflow and again at a reduced airflow, so you can see how performance shifts with velocity. Leakage values are reported at stated pressure differences between the airstreams.</p>
<p>These conditions are chosen to be repeatable in a lab, not to match your project. Three consequences follow:</p>
<ul>
<li><strong>Your design conditions are different.</strong> A wheel's latent effectiveness, in particular, varies with humidity levels, so the summer design day in Houston will not produce exactly the rated number.</li>
<li><strong>Your airflows are different.</strong> Effectiveness falls as face velocity rises. Interpolate between the two rated airflows, or use the manufacturer's certified selection software, which is required to reproduce the rated points.</li>
<li><strong>Your pressure arrangement is different.</strong> Leakage depends heavily on the pressure difference across the seals in the installed unit.</li>
</ul>
<p class="note">Ask for the certified rating at the standard conditions and the selection at your design conditions on the same submittal. If the two come from the same software, the design values are traceable to a certified rating.</p>

<h2>What AHRI 1060 does not cover</h2>
<ul>
<li><strong>Unit performance.</strong> Fan power, casing leakage, internal bypass leakage and the effect of the unit's fan placement are outside the component rating. The way the device is installed can make real performance better or worse than the rating.</li>
<li><strong>Frost behaviour.</strong> Ratings are at conditions above freezing on the exhaust side. Frost thresholds come from separate manufacturer data.</li>
<li><strong>Durability, cleanability and contaminant transfer</strong> other than air leakage. Desiccant cross-contamination of specific chemicals is not a rated value.</li>
<li><strong>Bypass damper leakage.</strong> If the unit has a bypass around the core, leakage through it reduces real effectiveness but is not part of the core rating.</li>
</ul>

<h2>Using ratings for code compliance</h2>
<p>Energy codes that set a minimum recovery ratio usually require it at heating and cooling design conditions, not at AHRI test conditions. The certified rating establishes that the product's data is credible; the selection at design conditions shows compliance. Keep both in the compliance package. The code thresholds themselves are covered in <a href="<?= url('guides/ashrae-90-1-energy-recovery-requirements') ?>">determining when ASHRAE 90.1 requires energy recovery</a>.</p>

<h2>Reading a rating sheet critically</h2>
<ol>
<li>Confirm the model number and size in the AHRI directory match the submittal exactly.</li>
<li>Check that airflow in your selection lies between or near the rated airflows; extrapolating far beyond them is unreliable.</li>
<li>Compare pressure drop at your airflow, not just effectiveness. A wheel with two points higher effectiveness and 0.3 in. w.c. more drop may lose on net energy.</li>
<li>Read EATR and OACF at the pressure difference your fan arrangement will create.</li>
<li>For wheels, note the rotational speed at which values were reported; field speed should match.</li>
</ol>

<h2>Specification language</h2>
<p>A typical requirement reads: "Energy recovery component shall be certified under the AHRI air-to-air exchanger certification program in accordance with AHRI Standard 1060 and shall bear the AHRI certification mark. Submit the certified rating and a selection at scheduled design conditions generated by the certified selection program." Adjust the wording to the specification section format used on your project.</p>
<?php guide_end([
    ['What does AHRI 1060 certify?', 'It certifies the performance of air-to-air energy recovery components such as wheels and plates: sensible, latent and total effectiveness, pressure drop and leakage metrics at standard test conditions. It does not certify the complete air handling unit.'],
    ['Are AHRI 1060 ratings at my design conditions?', 'No. Ratings are at fixed summer and winter test conditions and two airflows. Use the manufacturer certified selection software to get values at your design airflow and conditions.'],
    ['Is tested to AHRI 1060 the same as AHRI certified?', 'No. Certified products are listed in the AHRI directory and subject to independent verification testing. A claim of testing to the standard without a directory listing has not been verified by the program.'],
]);
