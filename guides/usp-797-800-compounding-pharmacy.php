<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('usp-797-800-compounding-pharmacy'); ?>
<p class="lede">USP 797 governs sterile compounding and USP 800 governs handling of hazardous drugs. Together they set the cleanroom classification, air change rates and pressure relationships for a hospital pharmacy: an ISO 5 primary engineering control inside an ISO 7 buffer room, entered through an ISO 7 or ISO 8 anteroom, positive for non-hazardous work and negative and externally exhausted for hazardous drugs.</p>

<h2>The two chapters and who enforces them</h2>
<p>USP General Chapter &lt;797&gt;, Pharmaceutical Compounding: Sterile Preparations, was substantially revised with the version that became official in late 2023. General Chapter &lt;800&gt;, Hazardous Drugs: Handling in Healthcare Settings, applies to any facility that handles hazardous drugs, sterile or not. Enforcement comes from state boards of pharmacy, accreditation bodies and, in some cases, federal agencies. In Canada, the National Association of Pharmacy Regulatory Authorities (NAPRA) model standards for sterile compounding cover similar ground and are adopted by provincial colleges. Check which edition and which adopting body applies.</p>
<p class="note">These chapters cover hospital and retail compounding. Industrial pharmaceutical manufacturing under GMP is a different regulatory world; see <a href="<?= url('guides/gmp-pharma-ahu-design') ?>">GMP pharmaceutical AHU design</a>.</p>

<h2>Room classifications</h2>
<p>Cleanroom classes follow ISO 14644-1, based on maximum airborne particle concentrations at 0.5 µm and larger.</p>
<table>
<thead><tr><th>Space</th><th>Typical classification</th><th>Role</th></tr></thead>
<tbody>
<tr><td>Primary engineering control (PEC): laminar airflow workbench, biological safety cabinet, compounding aseptic isolator</td><td>ISO 5</td><td>Where sterile preparations are actually exposed</td></tr>
<tr><td>Buffer room (secondary engineering control)</td><td>ISO 7</td><td>Room housing the PEC</td></tr>
<tr><td>Anteroom (non-hazardous suite)</td><td>ISO 8, or ISO 7 where it opens to a negative-pressure buffer room</td><td>Garbing and hand hygiene, transition from unclassified space</td></tr>
<tr><td>Segregated compounding area (SCA)</td><td>Unclassified</td><td>Limited-scope compounding with shorter beyond-use dates</td></tr>
<tr><td>Containment segregated compounding area (C-SCA)</td><td>Unclassified, negative</td><td>Hazardous drug compounding with limited beyond-use dates</td></tr>
</tbody>
</table>
<p>The classification of each room drives the HEPA supply, air change rate and pressure relationships the HVAC system has to deliver. Cleanroom class fundamentals are in <a href="<?= url('guides/iso-14644-cleanroom-classes') ?>">ISO 14644 cleanroom classes</a>.</p>

<h2>Air change and filtration requirements</h2>
<ul>
<li><strong>ISO 7 rooms</strong>: a minimum of 30 air changes per hour of HEPA-filtered supply air under the current USP 797 structure.</li>
<li><strong>ISO 8 rooms</strong>: a minimum of 20 air changes per hour of HEPA-filtered supply air.</li>
<li><strong>C-SCA</strong> under USP 800: a minimum of 12 air changes per hour.</li>
<li>HEPA filters are located in the ceiling of classified rooms, as terminal filters, so ductwork downstream of the AHU does not contaminate the supply.</li>
<li>Returns are low on the walls, which helps sweep particles down and away from work surfaces.</li>
<li>Air changes should be confirmed during certification, typically at installation and every six months thereafter.</li>
</ul>
<p>Earlier versions of 797 allowed the PEC's own HEPA airflow to count toward room air changes. Check the edition in force before taking that credit.</p>

<h2>Pressure relationships</h2>
<table>
<thead><tr><th>Relationship</th><th>Non-hazardous sterile compounding</th><th>Hazardous sterile compounding (USP 800)</th></tr></thead>
<tbody>
<tr><td>Buffer room to anteroom</td><td>Positive, at least +0.02 in. w.c. (5 Pa)</td><td>Negative, between −0.01 and −0.03 in. w.c. (−2.5 to −7.5 Pa)</td></tr>
<tr><td>Anteroom to unclassified area</td><td>Positive, at least +0.02 in. w.c.</td><td>Positive, at least +0.02 in. w.c.</td></tr>
<tr><td>C-SCA to adjacent areas</td><td>Not applicable</td><td>Negative, −0.01 to −0.03 in. w.c.</td></tr>
<tr><td>Exhaust</td><td>Return to AHU permitted</td><td>Buffer room and C-SCA externally exhausted; PECs for hazardous drugs vented outdoors</td></tr>
</tbody>
</table>
<p>The positive anteroom in the hazardous suite acts as an airlock: it is more positive than both the negative buffer room and the corridor, so hazardous drug residues are contained while particles from the corridor are kept out. Pressure monitoring with continuous display and recorded readings is expected. Offsets for these rooms are calculated with the same leakage method used for other healthcare rooms, covered in <a href="<?= url('guides/room-pressurization-offset-calculation') ?>">calculating room pressurization airflow offset</a>.</p>

<h2>Temperature and humidity</h2>
<p>USP 797 ties environmental control to beyond-use dates and staff comfort in garb. The revised chapter expects temperature and humidity in classified rooms to be controlled and monitored, with limits commonly cited at 68°F (20°C) or cooler and 60% RH or lower. Staff in full gowns, hoods and gloves are uncomfortable at warmer conditions, and high humidity supports microbial growth. The AHU therefore needs dehumidification capability year round and the ability to deliver cool supply air despite high air change rates.</p>

<h2>What the air handler must provide</h2>
<ul>
<li>High airflow relative to room size, driven by air changes rather than cooling load.</li>
<li>Prefilters and final filters in the AHU to protect terminal HEPA filters and extend their life.</li>
<li>Stable airflow regardless of filter loading, typically through pressure-independent terminal units.</li>
<li>Separate exhaust fans for hazardous drug rooms and vented PECs, with redundancy or alarms on failure.</li>
<li>Dew point control to stay below the RH limit at low room temperatures.</li>
<li>Continuous operation; turning the system off can require re-certification and room cleaning before compounding resumes.</li>
<li>Monitoring of temperature, humidity and pressure with data logging.</li>
</ul>
<p>Many hospital pharmacies are served by a dedicated AHU or a dedicated zone of a larger unit so their schedule, humidity and pressure control are independent of the rest of the building.</p>

<h2>Certification and recertification</h2>
<p>Classified rooms and PECs must be certified by qualified testers, typically using CETA (Controlled Environment Testing Association) guidance. Certification includes airflow and air changes, HEPA filter integrity, pressure differentials, airflow visualization (smoke studies) and particle counts. Changes to the HVAC system, including AHU replacement or major repairs, normally require recertification before compounding resumes.</p>
<?php guide_end([
    ['How many air changes does a USP 797 ISO 7 room need?', 'Under the current USP 797 structure, an ISO 7 room needs at least 30 air changes per hour of HEPA-filtered supply air. ISO 8 rooms need at least 20.'],
    ['Should a hazardous drug buffer room be positive or negative?', 'Negative. USP 800 requires the hazardous drug buffer room to be between 0.01 and 0.03 in. w.c. negative to the anteroom, with external exhaust.'],
    ['Why is the anteroom positive in a USP 800 suite?', 'A positive anteroom acts as an airlock, preventing hazardous drug residue from leaving the negative buffer room while keeping particles from the corridor out of the classified space.'],
    ['What temperature should compounding rooms be kept at?', 'USP 797 limits are commonly cited as 68 F or cooler and 60% RH or lower in classified rooms. Check the official version of the chapter and the adopting regulator.'],
]);
