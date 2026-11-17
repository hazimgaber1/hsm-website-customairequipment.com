<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ashrae-170-filter-bank-specification'); ?>
<p class="lede">A hospital AHU filter specification under ASHRAE 170 must state how many filter banks the unit has, the minimum MERV of each, and where each sits relative to the coils, humidifier and fans. For most inpatient and surgical spaces that means a first bank upstream of the coils and a MERV 14 final bank downstream of the wetted components and the supply fan.</p>

<h2>What Standard 170 requires, in specification terms</h2>
<p>Standard 170's filtration table groups spaces into categories and assigns each a number of filter banks and a minimum efficiency per bank, rated to ASHRAE 52.2. The general pattern in commonly referenced editions:</p>
<table>
<thead><tr><th>Space category</th><th>Filter bank 1</th><th>Filter bank 2</th><th>Additional</th></tr></thead>
<tbody>
<tr><td>Operating rooms, inpatient care, procedure rooms</td><td>Lower efficiency (MERV 7 or 8 depending on edition)</td><td>MERV 14</td><td>None required by 170 for general ORs</td></tr>
<tr><td>Protective environment rooms</td><td>Lower efficiency</td><td>MERV 14</td><td>HEPA at the room supply</td></tr>
<tr><td>Outpatient, support and administrative areas</td><td>Single bank at the efficiency in the table</td><td>Not required</td><td>None</td></tr>
</tbody>
</table>
<p>The exact first-bank MERV and space groupings have changed through addenda. Confirm against the edition referenced by the FGI Guidelines adopted in the project's state. For general filter selection principles (media type, pressure drop, life-cycle cost), see <a href="<?= url('guides/filter-selection-checklist') ?>">the filter selection checklist</a>; this guide covers only what Standard 170 requires the specification to say.</p>

<h2>Location rules to write into the spec</h2>
<ul>
<li><strong>Bank 1 upstream of coils and heating equipment.</strong> Protects coils from loading and keeps wetted surfaces cleaner.</li>
<li><strong>Bank 2 downstream of cooling coils and supply fans.</strong> Captures any material shed from coils, drain pans, humidifiers or fan components before air reaches the patient.</li>
<li><strong>Humidifier upstream of bank 2</strong> with absorption complete before the final filter, so wet media does not degrade or support growth.</li>
<li><strong>HEPA filters for PE rooms at or near the room terminal,</strong> not only in the AHU, so ductwork downstream of the unit does not contaminate the air.</li>
<li><strong>Energy recovery devices</strong> located so that bank 1 protects them and bank 2 is downstream of the supply side.</li>
</ul>
<p class="note">A blow-through arrangement with the final filter after the fan is common in hospital AHUs because it satisfies the "downstream of the fan" requirement directly. In draw-through units, a final filter after the fan requires a discharge plenum section with filter access.</p>

<h2>Sample specification language</h2>
<p><code>2.X FILTRATION</code></p>
<p><code>A. Filter arrangement shall comply with ASHRAE/ASHE Standard 170, [edition referenced by the governing FGI Guidelines], for the spaces served.</code></p>
<p><code>B. Filter Bank 1: Located upstream of all heating and cooling coils and energy recovery devices. Minimum efficiency MERV [7] [8] per ASHRAE 52.2. [Pleated media, 2 in. (50 mm) / 4 in. (100 mm) deep.]</code></p>
<p><code>C. Filter Bank 2: Located downstream of cooling coils, humidifiers and supply fans. Minimum efficiency MERV 14 per ASHRAE 52.2. [Rigid box or minipleat, 12 in. (300 mm) deep.]</code></p>
<p><code>D. HEPA Filtration (Protective Environment): Terminal HEPA filters rated 99.97% at 0.3 µm minimum, provided at room supply outlets as specified in Section [23 37 13].</code></p>
<p><code>E. Filter frames shall be gasketed and sealed to the casing to prevent bypass. Frames shall be designed for the filter type specified and shall hold filters against the direction of airflow under maximum design pressure.</code></p>
<p><code>F. Provide a differential pressure transmitter across each filter bank, connected to the building automation system, with local indication at the unit.</code></p>
<p><code>G. Access: Provide access doors upstream of each filter bank of sufficient size to remove filters without disassembly of the unit. [Side access] [Front access] arrangement as indicated.</code></p>
<p><code>H. Filters shall be classified under UL 900.</code></p>
<p><code>I. Provide one complete set of replacement filters for each bank at substantial completion, in addition to construction filters.</code></p>

<h2>Bypass and sealing details</h2>
<p>A MERV 14 filter only performs as a MERV 14 bank if air cannot go around it. Hospital units deserve tighter language than general commercial units on:</p>
<ul>
<li>Gasketed holding frames with positive latching.</li>
<li>Sealed joints between frames in multi-filter banks.</li>
<li>Seal between the frame assembly and the casing walls, floor and ceiling.</li>
<li>No gaps at access door frames adjacent to the filter bank.</li>
</ul>
<p>Leakage paths around filters are discussed in <a href="<?= url('guides/filter-bypass-leakage-frames') ?>">filter bypass leakage and frames</a>.</p>

<h2>Pressure drop basis for fan selection</h2>
<p>Specify the filter pressure drop the fan must be selected for, so all bidders size fans the same way:</p>
<p><code>J. Fan selection shall be based on filter pressure drop at [the midpoint between clean and recommended final] [the recommended final] resistance for each bank. State clean, design and final pressure drop on the submittal.</code></p>
<p>Selecting fans at the final filter resistance is common for hospital units because continuous operation leaves no spare margin when filters load. That decision has an energy cost and should be made explicitly.</p>

<h2>Testing and documentation</h2>
<ul>
<li>Require submittal of ASHRAE 52.2 test reports or certified ratings for each filter type.</li>
<li>Require factory confirmation that filter frames are installed and sealed before shipment.</li>
<li>For HEPA terminals, require field integrity (scan) testing; the method is covered in <a href="<?= url('guides/hepa-filter-integrity-testing') ?>">HEPA filter integrity testing</a>.</li>
<li>Require initial pressure drop readings at startup to set a baseline for change-out.</li>
</ul>

<h2>Coordination with other sections</h2>
<p>Bank locations affect unit length, access door placement, the humidifier dispersion section and the drain pan arrangement. Coordinate the filter specification with the casing, humidifier and coil sections of the AHU specification so they do not contradict each other. The broader hospital AHU specification structure is in <a href="<?= url('guides/hospital-ahu-specification') ?>">writing a hospital AHU specification</a>.</p>
<?php guide_end([
    ['How many filter banks does ASHRAE 170 require for an operating room?', 'Two: a lower-efficiency first bank upstream of the coils and a MERV 14 second bank downstream of the cooling coils and supply fan. Confirm the first-bank MERV in the edition adopted.'],
    ['Where must the final filter be located in a hospital AHU?', 'Downstream of cooling coils, humidifiers and supply fans, so any material shed from wetted components or the fan is captured before air reaches patients.'],
    ['Does ASHRAE 170 require HEPA filters?', 'HEPA filtration is required for protective environment rooms, typically at the room supply terminal. General operating rooms do not require HEPA under Standard 170, although some owners specify it.'],
    ['What filter pressure drop should hospital AHU fans be selected for?', 'State it in the specification. Many hospital projects select fans at the final recommended filter resistance because continuous operation leaves no margin as filters load, accepting the energy cost.'],
]);
