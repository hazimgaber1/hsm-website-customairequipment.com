<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('seismic-certification-ahus'); ?>
<p class="lede">Seismic certification of an air handler is needed when it is a designated seismic system that must remain operable after an earthquake, which in practice means hospitals, emergency facilities and other essential buildings in higher seismic design categories. The manufacturer certifies the unit by shake-table testing, by analysis, or by a combination, and in California hospitals the result must be accepted by HCAI.</p>

<h2>When certification is required</h2>
<p>Under the International Building Code and ASCE 7, mechanical equipment is assigned a component importance factor, Ip. Equipment with Ip = 1.5 that must remain functional after the design earthquake, in buildings assigned to Seismic Design Categories C through F, is a designated seismic system. For active equipment such as AHUs, which contain fans, motors and controls, the IBC and ASCE 7 require the manufacturer to certify that the equipment will remain operable. Anchorage alone is not enough.</p>
<p>Typical triggers include:</p>
<ul>
<li>Risk Category IV buildings: hospitals, emergency operations centres, fire stations.</li>
<li>Equipment needed for life safety, such as smoke control fans, in any building.</li>
<li>Equipment containing hazardous materials.</li>
<li>Projects where the owner or engineer of record requires certification beyond code.</li>
</ul>
<p>In California, hospitals and skilled nursing facilities fall under the Department of Health Care Access and Information (HCAI, formerly OSHPD), which runs the Special Seismic Certification Preapproval (OSP) program. Equipment with an OSP number has been reviewed and accepted for use on HCAI projects within the stated limits.</p>

<h2>Step 1: Establish the seismic demand</h2>
<ol>
<li>Obtain from the structural engineer of record the site class, short-period spectral acceleration (SDS), the building's Risk Category and Seismic Design Category.</li>
<li>Determine where the unit is mounted, at grade or on an elevated floor or roof. The ratio z/h (attachment height to roof height) raises the in-structure acceleration.</li>
<li>Confirm Ip and whether the unit must be operable after the event or only remain anchored.</li>
<li>Note any isolation. Vibration isolators change the response and need their own seismic rating.</li>
</ol>
<p>The demand drives everything else. A unit certified to a low SDS at grade will not cover a rooftop installation on a high-seismic hospital.</p>

<h2>Step 2: Choose the certification method</h2>
<table>
<thead><tr><th>Method</th><th>How it works</th><th>Best suited to</th></tr></thead>
<tbody>
<tr><td>Shake-table testing</td><td>A representative unit is tested on a triaxial table to a required response spectrum, then checked for function</td><td>Product lines, units with complex internal components</td></tr>
<tr><td>Analysis</td><td>Finite element or hand calculations of casing, frame, components and anchorage; active parts addressed by testing or experience data</td><td>Very large or custom units that cannot fit a table</td></tr>
<tr><td>Experience data</td><td>Documented performance of similar equipment in past earthquakes</td><td>Limited use; generally supplementary</td></tr>
<tr><td>Combination</td><td>Tested components (fans, motors, controls) plus analysis of the custom casing</td><td>Custom AHUs and fan arrays</td></tr>
</tbody>
</table>
<p>Shake-table tests usually follow ICC-ES AC156, the acceptance criteria for seismic certification by shake-table testing of nonstructural components. The test spectrum is set from the SDS and z/h the certification is meant to cover.</p>
<p class="note">Analysis alone generally cannot prove that active components such as motors and controls stay functional. Plan for tested components inside an analyzed structure when the full unit is too big for testing.</p>

<h2>Step 3: Prepare the unit or the representative sample</h2>
<ol>
<li>Define the product family and the envelope the certification will cover: dimensions, weight, number of sections, fan sizes and component options.</li>
<li>Select the test unit or analysis model that represents the worst case, typically the heaviest and tallest configuration with the highest centre of gravity.</li>
<li>Document anchorage, base frame details and connections between sections. Shipping split connections must be part of what is certified.</li>
<li>Identify the functional checks: fan rotation, motor operation, control power and safety devices before and after testing.</li>
</ol>

<h2>Step 4: Test, analyze and report</h2>
<p>For a shake-table program, the unit is mounted as it would be installed, instrumented and subjected to resonance search and then the required spectrum in all three axes. Functional checks follow. Damage that does not compromise function or anchorage may be acceptable; loss of function is not.</p>
<p>For analysis, the engineer prepares calculations for the casing, internal supports for coils and fans, base frame and anchorage, using the design forces from ASCE 7. The report is stamped by a licensed engineer.</p>
<p>The deliverable is a certificate of compliance listing the standards, the seismic parameters covered, the model range and any installation conditions such as required anchor size or isolator type.</p>

<h2>Step 5: Obtain approvals and label the equipment</h2>
<ul>
<li>For general IBC projects, submit the certificate and report with the equipment submittal for review by the engineer of record and the building official.</li>
<li>For HCAI projects, the OSP application package is reviewed by HCAI. Once approved, units within the preapproved range can be referenced by OSP number.</li>
<li>Label each certified unit with its seismic certification as required by the code and the certifying agency.</li>
<li>Coordinate special inspection requirements, which often apply to designated seismic systems at installation.</li>
</ul>

<h2>Step 6: Install to the certified conditions</h2>
<p>A certification is only valid if the installation matches it. Anchors, curbs, isolator types and section connections must be as described. Field changes such as substituting a different curb or isolator need the certifying engineer's approval. Installation practice is covered in <a href="<?= url('guides/seismic-restraint-installation') ?>">seismic restraint installation</a>. The structural design of the casing itself is discussed in <a href="<?= url('guides/seismic-wind-structural-casing-design') ?>">seismic and wind structural casing design</a>, and hospital-specific redundancy expectations are in <a href="<?= url('guides/hospital-ahu-redundancy-requirements') ?>">redundancy requirements for hospital AHUs</a>.</p>
<?php guide_end([
    ['When does an air handler need seismic certification?', 'When it is a designated seismic system with a component importance factor of 1.5 in a building assigned to Seismic Design Category C through F. Hospitals, emergency facilities and life safety systems are the most common cases.'],
    ['What is HCAI special seismic certification?', 'It is a preapproval program run by California\'s Department of Health Care Access and Information, formerly OSHPD. Equipment approved under it receives an OSP number and can be used on HCAI-regulated healthcare projects within its stated limits.'],
    ['Can a large custom AHU be shake-table tested?', 'Often not as a complete unit. Large custom units are usually certified by combining shake-table testing of active components such as fans and motors with engineering analysis of the casing, frame and anchorage.'],
    ['Does seismic certification cover the installation?', 'Only if the installation matches the certified conditions. Anchorage, curbs, isolators and section connections must follow the certificate, and field substitutions need approval from the certifying engineer.'],
]);
