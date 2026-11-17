<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('amca-certified-ratings-program'); ?>
<p class="lede">The AMCA seal means the manufacturer's published ratings for that fan line were tested in an AMCA-accredited laboratory and are subject to ongoing check tests. It covers the specific performance named on the seal, usually air performance, sound, or both, and nothing else.</p>

<h2>What the Certified Ratings Program is</h2>
<p>The Air Movement and Control Association International runs a Certified Ratings Program (CRP) for fans, louvers, dampers and other air-system components. For fans, the program rules are set out in AMCA Publication 211 for air performance and AMCA Publication 311 for sound performance. A manufacturer that joins agrees to have a representative sample of each product line tested in an accredited laboratory, to publish ratings that fall within the program tolerances, and to accept random check tests for as long as the license stays active.</p>
<p>The program certifies the catalog, not a shipment. Once a fan line is licensed, every rating published for it (in printed data or selection software) must stay within tolerance of the tested performance across the range of sizes and speeds the manufacturer has extended it to by the fan laws.</p>

<h2>Seal types and what each one covers</h2>
<table>
<thead><tr><th>Seal</th><th>What is certified</th><th>Test basis</th></tr></thead>
<tbody>
<tr><td>Air Performance</td><td>Airflow, pressure and power at stated speeds</td><td>AMCA 210 laboratory method</td></tr>
<tr><td>Sound and Air Performance</td><td>The above plus sound power in octave bands</td><td>AMCA 210 and AMCA 300 reverberant room</td></tr>
<tr><td>Fan Energy Index (FEI)</td><td>FEI values calculated from certified air data</td><td>AMCA 210 data with AMCA 208 calculation</td></tr>
<tr><td>Induced flow, air and sound</td><td>Outlet and entrained flow for lab exhaust fans</td><td>Program-specific procedures</td></tr>
</tbody>
</table>
<p>A seal that says only "Air Performance" says nothing about sound data. If the submittal lists octave-band sound power, check whether the sound seal also appears. If it does not, the sound data are the manufacturer's own and have not been verified by the program.</p>

<h2>How ratings are tested and verified</h2>
<h3>Initial qualification</h3>
<p>The manufacturer submits test units to an AMCA laboratory or an accredited independent laboratory. Air performance is measured per AMCA 210 (also published as ASHRAE 51) using one of the specified setups: ducted inlet, ducted outlet, chamber, or a combination. The installation type used in the test (A, B, C or D, describing free or ducted inlet and outlet) is part of the rating and must be stated with the published data.</p>
<p>Sound tests under AMCA 300 use a reverberant room to determine sound power levels in octave bands. Calculations from tested to untested sizes follow AMCA 301.</p>
<h3>Check tests</h3>
<p>The ongoing verification is what gives the seal its value. Periodically, AMCA selects production fans, sometimes purchased anonymously or taken from stock, and retests them. If results fall outside tolerance, the manufacturer must correct the published data, and the license can be suspended if it does not.</p>
<h3>Tolerances</h3>
<p>Each program publication sets tolerances on airflow, pressure, power and sound. These tolerances are a band around the rating, not an allowance for error in the field. A fan installed with poor inlet conditions can miss its rating by far more than any certification tolerance because of system effect, which is outside the program entirely.</p>

<h2>What the seal does not tell you</h2>
<ul>
<li><strong>Installed performance.</strong> The rating applies to the tested installation type. Elbows at the inlet, crowded plenums and discharge obstructions reduce real output; quantify them with <a href="<?= url('guides/system-effect-amca-201') ?>">AMCA 201 system effect factors</a>.</li>
<li><strong>Air handler casing effects.</strong> A plenum fan rated alone does not account for the cabinet around it. Installed AHU fan ratings fall under AHRI 430, explained in <a href="<?= url('guides/ahri-430-certification') ?>">AHRI 430 certification</a>.</li>
<li><strong>Regulatory compliance.</strong> Carrying an FEI seal shows the FEI values are verified. Whether a given FEI value meets a code minimum is a separate question, covered in <a href="<?= url('guides/fan-efficiency-regulations-fei') ?>">minimum FEI requirements</a>.</li>
<li><strong>Mechanical quality.</strong> Bearing life, wheel balance and construction materials are not part of the rating.</li>
<li><strong>Spark resistance.</strong> AMCA 99 construction types are a design classification, not part of the performance seal.</li>
</ul>

<h2>Checking a seal on a submittal</h2>
<ol>
<li>Find the fan line in the AMCA online listing of licensed products and confirm the license is current.</li>
<li>Match the seal type to the data being relied on: air only, or sound and air.</li>
<li>Confirm the installation type in the rating matches how the fan will be installed, or that a correction has been applied.</li>
<li>Look for accessories that void the rating. Inlet guards, belt guards and some inlet boxes are rated separately or not at all.</li>
<li>For fans in arrays, confirm whether the certified data covers a single fan only. Array performance depends on spacing and plenum geometry.</li>
</ol>
<p class="note">Many custom air handler fans use AMCA-licensed wheels and inlets, with the unit manufacturer then applying casing and array corrections. Ask which part of the published performance is certified and which is calculated.</p>

<h2>Related programs for other components</h2>
<p>The same CRP framework covers dampers (leakage and pressure drop under AMCA 500-D testing), louvers (water penetration and pressure drop under AMCA 500-L), and airflow measurement stations. A seal on a damper says nothing about a fan, and vice versa. Each component has its own licensed product listing that can be checked the same way.</p>
<?php guide_end([
    ['What does the AMCA seal mean on a fan?', 'It means the manufacturer\'s published ratings for that fan line were tested in an accredited laboratory and remain subject to AMCA check tests. The seal type tells you whether air performance, sound performance, FEI or a combination is certified.'],
    ['Does an AMCA seal guarantee field performance?', 'No. Ratings apply to the tested installation type in a laboratory. Poor inlet or outlet conditions in the field cause system effect losses that the certification does not cover.'],
    ['Is AMCA sound data always certified?', 'Only when the seal specifically includes sound performance. Many fans carry an air performance seal only, in which case the published sound data are the manufacturer\'s own values.'],
    ['How do I confirm a fan is AMCA certified?', 'Search the AMCA online directory of licensed products for the manufacturer and fan line, and confirm the license is current and matches the seal type shown on the submittal.'],
]);
