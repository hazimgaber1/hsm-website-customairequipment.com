<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ashrae-62-1-iaq-procedure'); ?>
<p class="lede">The IAQ Procedure (IAQP) in ASHRAE 62.1 is a performance-based path: instead of looking up outdoor air rates, the designer identifies the contaminants of concern, estimates their sources, sets target concentrations, and uses a mass balance to find the combination of outdoor air and air cleaning that meets the targets. It can justify less outdoor air than the Ventilation Rate Procedure when effective air cleaning is provided, but it requires more analysis, documentation and ongoing verification.</p>

<h2>How the IAQP differs from the VRP</h2>
<p>The Ventilation Rate Procedure prescribes outdoor air rates per person and per area, on the assumption that diluting typical contaminants with that amount of outdoor air yields acceptable air quality. It gives no credit for air cleaning. The IAQ Procedure asks the designer to demonstrate acceptable air quality directly, accounting for the actual sources, the actual outdoor air quality and any air cleaning installed. The prescriptive calculation is explained in <a href="<?= url('guides/ashrae-62-1-ventilation-rate-procedure') ?>">the Ventilation Rate Procedure</a>.</p>
<p>The standard allows designers to use the VRP, the IAQP or a combination, and also contains a Natural Ventilation Procedure. Which procedures are permitted, and any limits on outdoor air reduction, depend on the edition of the standard and on how the local code adopts it; check before committing to an IAQP design.</p>

<h2>The steps of an IAQP design</h2>
<ol>
<li><strong>Identify contaminants of concern.</strong> Typically a list of volatile organic compounds such as formaldehyde, plus particulate matter and others relevant to the space and outdoor environment. The standard includes informative guidance on commonly considered compounds.</li>
<li><strong>Identify sources and emission rates.</strong> Building materials, furnishings, occupants, processes and outdoor air. Emission data may come from product testing, literature or measurements in similar spaces.</li>
<li><strong>Set target concentrations.</strong> Choose concentration limits from a cognizant authority for each contaminant and an exposure period.</li>
<li><strong>Determine outdoor air quality.</strong> Concentrations of the same contaminants in the outdoor air at the site.</li>
<li><strong>Perform a mass balance</strong> for each contaminant to find the outdoor airflow and air cleaning efficiency needed to keep each zone at or below its target.</li>
<li><strong>Address perceived air quality.</strong> The procedure includes a method for addressing occupant acceptability, which may involve subjective evaluation by a panel in the completed building or in a similar building.</li>
<li><strong>Document</strong> all assumptions, sources, targets, calculations and the design outdoor air and air cleaning.</li>
</ol>

<h2>The mass balance</h2>
<p>At steady state, for one contaminant in a well-mixed zone, contaminant entering equals contaminant leaving or removed:</p>
<p class="formula">N + Vo × Co × (1 − Eo) = Vo × Cs + Er × Vr × Cs</p>
<p>Rearranged for outdoor airflow:</p>
<p class="formula">Vo = (N − Er × Vr × Cs) ÷ (Cs − Co × (1 − Eo))</p>
<ul>
<li>N: contaminant generation rate in the space</li>
<li>Vo: outdoor airflow</li>
<li>Co: outdoor concentration; Eo: efficiency of cleaning applied to the outdoor air</li>
<li>Cs: target space concentration</li>
<li>Vr: recirculated airflow through an air cleaner; Er: that cleaner's efficiency for the contaminant</li>
</ul>
<p>The analysis is repeated for each contaminant; the largest outdoor airflow result governs. Units must be consistent, for example µg/h for N, m³/h for airflow and µg/m³ for concentration.</p>

<h2>Illustrative example</h2>
<p>A space has an estimated generation rate for one VOC of 60,000 µg/h. Outdoor concentration is 5 µg/m³ with no outdoor air cleaning for this compound. For illustration, assume a target of 30 µg/m³; a real design would take its target from a cognizant authority.</p>
<p><strong>Without air cleaning:</strong></p>
<p class="formula">Vo = 60,000 ÷ (30 − 5) = 2,400 m³/h ≈ 1,410 cfm</p>
<p><strong>With gas-phase media on 1,000 cfm (1,700 m³/h) of recirculated air at 50% single-pass efficiency for this compound:</strong></p>
<p class="formula">Removal = 0.5 × 1,700 × 30 = 25,500 µg/h</p>
<p class="formula">Vo = (60,000 − 25,500) ÷ 25 ≈ 1,380 m³/h ≈ 810 cfm</p>
<p>Air cleaning lowered the outdoor air needed for this contaminant by more than 40%. The design must then check every other contaminant of concern and the perceived air quality requirement; if another contaminant that the air cleaner does not remove governs, the savings vanish.</p>

<h2>Enhanced filtration and gas-phase cleaning</h2>
<p>An IAQP design is only as good as the air cleaning credited in it. Particle filtration at high MERV levels reduces particulate contaminants. Gaseous contaminants require sorbent media such as activated carbon or impregnated media, selected for the specific compounds; see <a href="<?= url('guides/gas-phase-carbon-filtration') ?>">gas-phase filtration with carbon and permanganate</a>. The efficiency used in the mass balance should come from testing at realistic concentrations and airflow and should account for how efficiency falls as sorbent media loads.</p>
<p class="warn">Do not credit supplemental air cleaners in an IAQP calculation without independent test data for the specific contaminants at realistic conditions, including byproduct testing. Unproven efficiency figures can lead to an under-ventilated building.</p>

<h2>When the IAQP makes sense</h2>
<ul>
<li>High-density spaces where VRP outdoor air would be very large and expensive to condition, such as auditoriums or assembly areas.</li>
<li>Sites with clean outdoor air but very hot, cold or humid climates, where reducing outdoor air saves significant energy.</li>
<li>Buildings with well-characterized, low-emitting materials.</li>
<li>Projects with an owner committed to maintaining air cleaning equipment and verifying performance.</li>
</ul>
<p>It makes less sense where sources are poorly known, where the owner cannot commit to media replacement, or where local authorities are unfamiliar with it and approval risk is high.</p>

<h2>Operation and verification</h2>
<p>Because the IAQP relies on air cleaning, the design is only valid while that equipment is maintained. Plan for media replacement intervals, monitoring of pressure drop and, where practical, periodic measurement of key contaminants. Sorbent media in particular can lose efficiency well before its pressure drop changes. AHUs designed for IAQP compliance should include space and access for the sorbent and particulate stages; a <a href="<?= url('products/custom-air-handlers') ?>">custom air handler</a> can be laid out around those stages.</p>
<?php guide_end([
    ['What is the ASHRAE 62.1 IAQ Procedure?', 'It is a performance-based design path in which the designer identifies contaminants of concern, estimates their sources, sets target concentrations and uses a mass balance to determine the outdoor air and air cleaning needed. It can credit air cleaning, unlike the prescriptive Ventilation Rate Procedure.'],
    ['Can the IAQ Procedure reduce outdoor air?', 'Yes, when effective air cleaning is provided for every contaminant of concern and perceived air quality is addressed. The reduction depends on the contaminants, their sources, outdoor air quality and the tested efficiency of the air cleaning equipment.'],
    ['What filtration is needed for the IAQ Procedure?', 'Particle filtration handles particulate contaminants, while gaseous contaminants need sorbent media such as activated carbon selected for the specific compounds. The efficiencies credited in the calculation should come from independent testing at realistic conditions.'],
]);
