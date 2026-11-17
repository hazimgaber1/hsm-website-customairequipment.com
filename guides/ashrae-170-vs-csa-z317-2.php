<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ashrae-170-vs-csa-z317-2'); ?>
<p class="lede">ASHRAE 170 and CSA Z317.2 both set ventilation, filtration and pressure requirements for health care spaces, but Z317.2 goes further on system design: it addresses redundancy, maintainability, humidification and infection prevention in more prescriptive terms. A Canadian hospital air handler designed only to Standard 170 will usually miss several Z317.2 requirements.</p>

<h2>Two standards with different roots</h2>
<p>ASHRAE 170, Ventilation of Health Care Facilities, is developed by ASHRAE with the American Society for Health Care Engineering and is adopted in the US mainly through the FGI Guidelines. CSA Z317.2, Special requirements for heating, ventilation, and air-conditioning (HVAC) systems in health care facilities, is part of CSA's Z317 series on health care facility engineering, alongside standards on plumbing, infection control during construction (Z317.13) and others. In Canada it is typically required by provincial health ministries, health authorities and project agreements rather than by the building code itself. Both standards are revised periodically; compare the editions specified for the project, because some differences have narrowed and others have appeared over time.</p>

<h2>Side-by-side comparison</h2>
<table>
<thead><tr><th>Topic</th><th>ASHRAE 170</th><th>CSA Z317.2</th></tr></thead>
<tbody>
<tr><td>How it becomes mandatory</td><td>Through FGI Guidelines and state licensing</td><td>Through provincial health ministries, health authority standards and contracts</td></tr>
<tr><td>Format</td><td>Concise standard built around a design table</td><td>Broader standard with design, installation, commissioning and maintenance clauses</td></tr>
<tr><td>Air change rates</td><td>Minimum outdoor and total ACH per space</td><td>Minimum ACH per space, often similar for critical spaces; some spaces differ</td></tr>
<tr><td>Pressure relationships</td><td>Positive, negative or not required, with a minimum differential</td><td>Similar, with explicit expectations for monitoring and alarms in more spaces</td></tr>
<tr><td>Filtration</td><td>MERV-based banks by space category; HEPA for PE rooms</td><td>Multiple filter stages with minimum efficiencies; HEPA for designated spaces</td></tr>
<tr><td>Humidity</td><td>Upper limits for most spaces; OR range</td><td>Ranges for many spaces, with requirements for humidification in Canadian winters</td></tr>
<tr><td>Humidifier type</td><td>Restrictions on chemical additives in steam</td><td>Prescriptive preference for clean steam and restrictions on wetted media</td></tr>
<tr><td>Redundancy</td><td>Limited system redundancy requirements</td><td>Explicit expectations for backup capacity in critical systems</td></tr>
<tr><td>Outdoor air</td><td>Minimum outdoor ACH; recirculation allowed where table permits</td><td>Minimum outdoor air; recirculation permitted with restrictions</td></tr>
<tr><td>Energy recovery</td><td>Allowed with cross-contamination limits</td><td>Allowed with restrictions on device type for contaminated exhaust</td></tr>
<tr><td>Maintainability</td><td>General access requirements</td><td>Detailed access, cleanability and service-without-shutdown expectations</td></tr>
<tr><td>Commissioning</td><td>Referenced in FGI rather than in 170 itself</td><td>Commissioning requirements within the CSA framework</td></tr>
</tbody>
</table>
<p class="note">This table summarizes the character of each standard. Specific values for any space must be taken from the edition named in the project requirements.</p>

<h2>Air changes and filtration</h2>
<p>For operating rooms, isolation rooms and protective environment rooms, the two standards ask for broadly similar total air changes and pressure relationships, so the room-level airflow design often looks alike. The differences are larger for support spaces and inpatient units, where Z317.2 tends to be more conservative or more specific. The breakdown of 170's own table is covered in <a href="<?= url('guides/ashrae-170-ventilation-requirements') ?>">ASHRAE 170 ventilation requirements</a>.</p>
<p>Both standards use staged filtration. Z317.2 is generally more explicit about where each stage sits relative to coils, humidifiers and fans, and about providing access to change filters without contaminating downstream surfaces. Projects in Canada often specify MERV 8 prefilters, MERV 14 final filters and HEPA where required, combined with filter pressure monitoring at each stage.</p>

<h2>Redundancy and continuity of service</h2>
<p>This is where the standards differ most for the air handler designer. Standard 170 focuses on ventilation outcomes and says relatively little about what happens when a fan or coil fails. Z317.2 expects critical systems to continue operating during component failure and during maintenance. In practice Canadian hospital projects respond with:</p>
<ul>
<li>Fan arrays or multiple fans with spare capacity.</li>
<li>Multiple AHUs serving critical areas with cross-connection or overlapping coverage.</li>
<li>Isolation dampers so components can be serviced while the unit runs.</li>
<li>Redundant heating and cooling sources and pumps.</li>
</ul>
<p>The broader expectations, including those coming from owners, are explained in <a href="<?= url('guides/hospital-ahu-redundancy-requirements') ?>">redundancy requirements for hospital AHUs</a>.</p>

<h2>Humidification</h2>
<p>Canadian winters mean outdoor air can be extremely dry, so maintaining humidity in hospitals requires substantial humidification. Z317.2 is prescriptive about humidifier type and water quality, favouring clean steam and limiting technologies that keep standing water or wetted media in the airstream. Standard 170 also restricts steam treatment chemicals but leaves more room for other methods depending on edition. Background on hospital humidification is in <a href="<?= url('guides/hospital-steam-humidification') ?>">humidification requirements for hospitals</a>.</p>

<h2>Construction and maintenance provisions</h2>
<p>Z317.2 includes requirements that go beyond design: casing construction and cleanability, insulation that does not shed fibres into the airstream, drainable pans, lighting and viewports in access sections, and maintenance access sized for staff wearing personal protective equipment. Standard 170 covers some of these briefly. When a project specifies Z317.2, expect the AHU specification to be longer and more detailed than a comparable US hospital unit.</p>

<h2>Projects that reference both</h2>
<p>Some Canadian projects reference both standards, and some US owners adopt parts of Z317.2 for redundancy or maintainability. Where both apply:</p>
<ol>
<li>List each requirement area (ACH, pressure, filtration, humidity, redundancy) and record the governing value from each standard.</li>
<li>Apply the more stringent value unless the project documents say otherwise.</li>
<li>Resolve conflicts, such as different humidity ranges, with the owner's infection prevention and facilities teams in writing.</li>
<li>Carry the governing values into the AHU schedule and specification.</li>
</ol>
<?php guide_end([
    ['Is CSA Z317.2 the Canadian version of ASHRAE 170?', 'It covers similar ground but is not a copy. CSA Z317.2 is broader, with more prescriptive requirements on redundancy, humidification, maintainability and construction of HVAC systems in health care facilities.'],
    ['Who requires CSA Z317.2?', 'It is usually required by provincial health ministries, health authorities and project agreements rather than directly by the building code. Check the project\'s functional program and contract documents.'],
    ['Are air change rates the same in ASHRAE 170 and Z317.2?', 'For critical spaces such as operating rooms and isolation rooms they are often broadly similar, but values for other spaces can differ. Take values from the specific editions required for the project.'],
    ['Which standard is stricter on redundancy?', 'CSA Z317.2 is generally more explicit, expecting critical systems to keep operating during component failure and maintenance. ASHRAE 170 says comparatively little about AHU redundancy.'],
]);
