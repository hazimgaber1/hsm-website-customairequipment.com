<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ashrae-62-1-vs-imc-ventilation'); ?>
<p class="lede">The IMC's Chapter 4 ventilation method is derived from ASHRAE 62.1's Ventilation Rate Procedure, so both use a people component plus an area component per space. They diverge in which edition of the rates they carry, how system ventilation efficiency is determined, what other procedures are permitted, and in the many 62.1 requirements that the IMC does not include.</p>

<h2>Legal status: code versus standard</h2>
<p>The IMC is a model code that becomes law when a jurisdiction adopts it. ASHRAE 62.1, Ventilation and Acceptable Indoor Air Quality, is a consensus standard; it governs only when adopted by reference or required by contract or a program such as LEED. Many US jurisdictions adopt the IMC, and the IMC allows compliance with its own Chapter 4 provisions. Some jurisdictions reference 62.1 directly, and some codes permit either. Check which applies before calculating, because the results can differ.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Topic</th><th>ASHRAE 62.1</th><th>IMC Chapter 4</th></tr></thead>
<tbody>
<tr><td>Basic breathing-zone formula</td><td>Vbz = Rp × Pz + Ra × Az</td><td>Same structure, using IMC tabulated rates</td></tr>
<tr><td>Rate tables</td><td>Updated through continuous maintenance and addenda</td><td>Fixed for each code edition; can lag behind 62.1</td></tr>
<tr><td>Occupancy categories</td><td>Broad list, revised over time</td><td>Similar list, not always identical in categories or values</td></tr>
<tr><td>Default occupant density</td><td>Provided in the table, used when actual is unknown</td><td>Provided; the code defines when it must be used</td></tr>
<tr><td>Zone air distribution effectiveness</td><td>Table of Ez by distribution configuration</td><td>Similar table, adopted from 62.1</td></tr>
<tr><td>Multiple-zone system efficiency</td><td>Simplified procedure or detailed calculation (normative appendix in recent editions)</td><td>Method defined in the code edition; may follow an older 62.1 approach</td></tr>
<tr><td>Exhaust rates</td><td>Separate table for toilets, kitchens and other spaces</td><td>Separate exhaust table; values and categories may differ</td></tr>
<tr><td>Natural ventilation</td><td>Prescriptive and engineered procedures with conditions</td><td>Permitted with openable area provisions</td></tr>
<tr><td>Alternative procedures</td><td>IAQ Procedure and Natural Ventilation Procedure</td><td>Engineered ventilation systems approval by the code official</td></tr>
<tr><td>Transfer air</td><td>Allowed by air class rules</td><td>Allowed with code-specific limitations</td></tr>
<tr><td>Demand-controlled ventilation</td><td>Permitted with requirements on reset</td><td>Permitted; energy code often requires it</td></tr>
</tbody>
</table>
<p class="note">This guide compares how the methods differ; it does not work through a full calculation. For a worked multi-zone example, see <a href="<?= url('guides/ashrae-62-1-ventilation-rate-procedure') ?>">the ASHRAE 62.1 ventilation rate procedure</a>.</p>

<h2>Where results diverge</h2>
<h3>Rate values</h3>
<p>Because 62.1 is updated under continuous maintenance and the IMC is fixed per edition, the two can carry different rates for the same occupancy. A newer 62.1 might add categories (for example, revised classroom or healthcare-adjacent spaces) or change values, while the adopted IMC still uses an older set. On a building with many space types the totals can differ noticeably.</p>
<h3>System ventilation efficiency for VAV systems</h3>
<p>This is the biggest source of difference in multiple-zone recirculating systems. Recent editions of 62.1 offer a simplified procedure based on occupant diversity and a detailed procedure that calculates efficiency zone by zone. The IMC specifies its own method by edition. The calculated outdoor air intake at the AHU can vary by a meaningful margin depending on which method is used and how zone minimum airflows are set.</p>
<h3>Occupant diversity</h3>
<p>Both permit using a system population lower than the sum of zone peaks, but the definitions and how diversity enters the efficiency calculation are not identical.</p>

<h2>Requirements in 62.1 with no IMC equivalent</h2>
<p>Beyond rates, 62.1 contains equipment and building requirements the IMC Chapter 4 does not address, or addresses elsewhere in different terms:</p>
<ul>
<li>Outdoor air quality assessment for the site and region.</li>
<li>Minimum filtration upstream of cooling coils and wetted surfaces.</li>
<li>Drain pan slope and drainage design requirements.</li>
<li>Limits on space humidity or dew point under certain conditions.</li>
<li>Requirements for access to and cleaning of HVAC equipment.</li>
<li>Air classification (Class 1 to 4) governing recirculation and transfer.</li>
<li>Building envelope moisture and contaminant source control provisions.</li>
<li>Operations and maintenance requirements in the standard's later sections.</li>
</ul>
<p>Projects designed to 62.1 for green building credits pick these up automatically. Projects designed only to the IMC must check other code chapters for equivalent rules.</p>

<h2>How the AHU is affected</h2>
<ul>
<li><strong>Outdoor air intake capacity.</strong> Size the outdoor air damper, airflow measurement station and preheat for the larger of the two results when both may apply.</li>
<li><strong>Minimum outdoor air control.</strong> The method chosen affects how the minimum outdoor air setpoint resets with zone airflow on VAV systems.</li>
<li><strong>Exhaust coordination.</strong> Exhaust tables determine how much make-up air the AHU must deliver.</li>
<li><strong>Filtration and drain pans.</strong> 62.1 compliance adds equipment requirements that the IMC path may not.</li>
</ul>
<p>The IAQ Procedure, which allows lower outdoor air with contaminant control, is described in <a href="<?= url('guides/ashrae-62-1-iaq-procedure') ?>">the ASHRAE 62.1 IAQ procedure</a>. Other IMC provisions for AHUs are in <a href="<?= url('guides/imc-requirements-for-air-handlers') ?>">IMC requirements for air handlers</a>.</p>

<h2>Dedicated outdoor air and 100% outdoor air systems</h2>
<p>For a single-zone system or a dedicated outdoor air system that supplies only outdoor air, the multiple-zone efficiency question disappears: the outdoor air intake equals the sum of zone outdoor air requirements divided by zone air distribution effectiveness. In that case, the difference between 62.1 and the IMC comes down mostly to the rate tables and exhaust requirements. That is one reason DOAS designs are easier to document under either path, though the 62.1-only equipment requirements still apply when 62.1 governs.</p>

<h2>Practical guidance</h2>
<ol>
<li>Confirm with the AHJ which method is acceptable.</li>
<li>If the project pursues LEED or an owner standard that references 62.1, use 62.1 and confirm the IMC result is not higher.</li>
<li>Document the edition used for both rates and the system efficiency method.</li>
<li>Carry the governing outdoor airflow onto the equipment schedule and controls sequence.</li>
</ol>
<?php guide_end([
    ['Is the IMC ventilation method the same as ASHRAE 62.1?', 'It is based on the 62.1 Ventilation Rate Procedure and uses the same people plus area structure, but rate tables, system efficiency methods and alternative procedures can differ by edition.'],
    ['Which gives higher outdoor air, 62.1 or the IMC?', 'It depends on the space types, the editions involved and the system ventilation efficiency method. Calculate both when either could apply and design the AHU for the governing value.'],
    ['Does the IMC include the ASHRAE 62.1 IAQ Procedure?', 'The IMC does not include the IAQ Procedure in the same form. It allows engineered ventilation systems with approval of the code official, which some designers use for similar purposes.'],
    ['Does ASHRAE 62.1 include equipment requirements?', 'Yes. Beyond rates, it includes requirements for filtration, drain pans, humidity, access and air classification that the IMC Chapter 4 does not cover in the same way.'],
]);
