<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('pharma-ahu-validation-iq-oq-pq'); ?>
<p class="lede">Qualification proves, with documented evidence, that a GMP air handling system was designed for its purpose (DQ), installed as designed (IQ), operates within its specified ranges (OQ) and consistently delivers the required room conditions in real use (PQ). Each stage has its own protocol, test record and approval by the owner's quality unit.</p>

<h2>Why qualification differs from commissioning</h2>
<p>Commissioning verifies that a building system works as the owner intended. Qualification does something narrower and more formal: it demonstrates that the parts of the system that can affect product quality meet predefined acceptance criteria, and it produces records that will survive a regulatory inspection years later. Commissioning activities can feed qualification, and modern risk-based approaches deliberately reuse commissioning evidence, but the qualification documents carry the quality unit's approval. General building commissioning is covered in <a href="<?= url('guides/commissioning-process-ashrae-202') ?>">the commissioning process under ASHRAE Guideline 202</a>.</p>
<p>The expectation comes from GMP regulations and guidance in each market: the EU GMP guide's annex on qualification and validation, FDA's current GMP regulations and guidance, and Health Canada's GMP guidance. Industry practice is shaped by ISPE baseline guides and by ASTM E2500, which describes a science- and risk-based approach to specifying and verifying manufacturing systems.</p>

<h2>Start with requirements and risk</h2>
<p>Qualification tests against requirements, so the requirements have to exist first.</p>
<ul>
<li><strong>User requirements specification (URS).</strong> Written by the owner. States room classes, temperature and humidity ranges, pressure differentials, airflow, alarm needs, data integrity and any regulatory references.</li>
<li><strong>System risk assessment.</strong> Identifies which components and functions are critical to product quality. In an AHU this usually includes final filtration, airflow delivery, temperature and humidity control and pressure-related functions; the paint color of the casing is not critical.</li>
<li><strong>Critical aspects and parameters.</strong> The output of the risk assessment: a short list of things the qualification protocols will verify in depth. Non-critical items are verified by good engineering practice and commissioning.</li>
</ul>
<p class="note">Agree the list of critical parameters before the purchase order. It determines what the manufacturer must document, which tests need traceable instruments and which factory tests the owner wants to witness.</p>

<h2>The four stages</h2>
<h3>Design qualification (DQ)</h3>
<p>DQ is a documented review showing the design meets the URS. For an air handler this means checking the specification, schedules, selection data, drawings and control sequences against each requirement, often in a traceability matrix. DQ closes before equipment is built.</p>
<h3>Installation qualification (IQ)</h3>
<p>IQ verifies that what was delivered and installed matches the approved design and that the documentation exists. Typical IQ checks for an AHU:</p>
<ul>
<li>Nameplate data, model and serial numbers recorded</li>
<li>Component verification: coils, fans, motors, filters, humidifiers and dampers match the approved submittals</li>
<li>Materials of construction and interior finishes as specified</li>
<li>Instruments installed, tagged and calibrated with traceable certificates</li>
<li>Utilities connected correctly: power, chilled water, hot water, steam, condensate</li>
<li>Drawings marked up to as-built; manuals, spare parts lists and certificates on file</li>
<li>Control software version recorded</li>
</ul>
<h3>Operational qualification (OQ)</h3>
<p>OQ shows that the system operates as intended across its operating range, including alarms and failure behavior. For an AHU, OQ might cover airflow at design and minimum, filter differential pressure monitoring, temperature and humidity control at setpoint, alarm generation at each limit, fan failure and changeover, power failure and restart, and access security and audit trails for the controls. HEPA filter integrity testing and room airflow measurements often sit here too; the leak test method is in <a href="<?= url('guides/hepa-filter-integrity-testing') ?>">how HEPA filter integrity testing is performed</a>.</p>
<h3>Performance qualification (PQ)</h3>
<p>PQ demonstrates that the system delivers the required environment consistently under normal operating conditions over time. It usually includes room particle classification in the at-rest and operational states, microbial monitoring, temperature and humidity records over an agreed period, pressure differential records, and recovery tests. PQ is often linked to environmental monitoring qualification rather than being purely an HVAC activity.</p>

<h2>Documents produced at each stage</h2>
<table>
<thead><tr><th>Stage</th><th>Key documents</th><th>Approved by</th></tr></thead>
<tbody>
<tr><td>DQ</td><td>URS, risk assessment, design review report, traceability matrix</td><td>Engineering and quality</td></tr>
<tr><td>IQ</td><td>IQ protocol, completed checklists, calibration certificates, as-built drawings, deviation log</td><td>Quality, after execution</td></tr>
<tr><td>OQ</td><td>OQ protocol, test data sheets, alarm test records, deviations and resolutions</td><td>Quality, after execution</td></tr>
<tr><td>PQ</td><td>PQ protocol, monitoring data, classification reports, summary report</td><td>Quality, after execution</td></tr>
</tbody>
</table>
<p>Every protocol is approved before execution. Results that do not meet acceptance criteria become deviations, which are investigated, resolved and documented before the stage is closed.</p>

<h2>Using factory tests to reduce site work</h2>
<p>Under a risk-based approach, tests performed and documented at the factory can count toward IQ and OQ if they are done under controlled conditions with calibrated instruments and the results are reviewed by the owner. A factory acceptance test (FAT) on a GMP air handler might verify casing leakage, fan airflow and power at design points, motor rotation and vibration, component identity and control functions. Owners often witness these tests. The site acceptance test (SAT) then confirms nothing changed during shipping and installation. See <a href="<?= url('guides/factory-witness-testing') ?>">factory witness testing</a> for how those tests are planned.</p>
<p class="warn">Factory data only counts if the owner's quality unit accepts it in advance. Agree the FAT protocol, instruments and witness requirements before testing, not after.</p>

<h2>After qualification</h2>
<p>Qualification is not permanent. Changes to filters, fans, controls or setpoints go through change control, which decides whether requalification is needed. Periodic reviews confirm the system remains in a qualified state, and routine tests such as HEPA leak testing and room classification repeat on a defined schedule. Design decisions that make that maintenance easier are discussed in <a href="<?= url('guides/gmp-pharma-ahu-design') ?>">GMP pharmaceutical AHU design principles</a>.</p>
<?php guide_end([
    ['What is the difference between IQ, OQ and PQ for HVAC?', 'IQ verifies the system was installed as designed and documented. OQ verifies it operates correctly across its range, including alarms and failures. PQ verifies it consistently delivers the required room conditions during normal operation over time.'],
    ['Does every component of a pharmaceutical AHU need to be qualified?', 'No. A risk assessment identifies the critical aspects that affect product quality, and those are qualified in depth. Other components are verified through good engineering practice and commissioning.'],
    ['Can factory acceptance tests count toward qualification?', 'Yes, if the owner\'s quality unit approves the protocol in advance, the tests use calibrated instruments, and results are documented and reviewed. Site tests then confirm nothing changed in shipping and installation.'],
]);
