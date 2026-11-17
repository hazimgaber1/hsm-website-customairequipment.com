<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('hospital-ahu-specification'); ?>
<p class="lede">A hospital AHU specification should require construction that can be cleaned for decades, redundancy that keeps critical rooms ventilated through a failure, hygiene details that keep water and dirt out of the airstream, and factory testing that proves performance before the unit arrives. The sample language below covers those four areas; adapt brackets to the project.</p>

<h2>How to organize the section</h2>
<p>Most hospital AHU specifications follow the standard three-part structure, often in Section 23 73 13 or a project-specific custom AHU section. Keep healthcare-specific requirements in clearly labelled articles so reviewers and bidders find them. Reference the governing healthcare standard once in Part 1 and then state specific requirements; do not rely on "comply with ASHRAE 170" alone, because many of the details that matter to maintenance staff are not in the standard. Filter bank arrangement is covered by a separate guide, <a href="<?= url('guides/ashrae-170-filter-bank-specification') ?>">specifying ASHRAE 170 filter banks</a>, and the general Division 23 AHU section structure is in <a href="<?= url('guides/writing-ahu-specification-23-73-00') ?>">writing an AHU specification</a>.</p>

<h2>Part 1: General</h2>
<p><code>1.X DESIGN CRITERIA</code></p>
<p><code>A. Units serve healthcare spaces and shall comply with [ANSI/ASHRAE/ASHE Standard 170, edition referenced by the adopted FGI Guidelines] [CSA Z317.2] for the spaces indicated.</code></p>
<p><code>B. Units shall be designed for continuous operation, 24 hours per day, 365 days per year.</code></p>
<p><code>C. Units shall be designed so that routine maintenance, including filter replacement, fan motor replacement and coil cleaning, can be performed while the unit continues to serve its spaces [at not less than the minimum airflow indicated].</code></p>
<p><code>1.X SUBMITTALS (in addition to standard submittals)</code></p>
<p><code>A. Redundancy narrative describing unit performance with any single fan, motor or drive out of service.</code></p>
<p><code>B. Drawings showing access sections, door swings and clearances for removal of each fan, motor, coil and humidifier component.</code></p>
<p><code>C. Materials list for all surfaces exposed to the airstream, including insulation fire ratings and cleaning agent compatibility.</code></p>
<p><code>D. Factory test procedures and reports.</code></p>

<h2>Part 2: Construction</h2>
<p><code>2.X CASING</code></p>
<p><code>A. Double-wall panels, [2 in. (50 mm)] [4 in. (100 mm)] thick, with solid [galvanized] [stainless steel] interior liners on all surfaces. Perforated liners are not permitted [except in designated sound attenuation sections downstream of the final filter, with insulation encapsulated in a cleanable film].</code></p>
<p><code>B. Interior surfaces smooth and free of exposed fasteners, sharp edges and pockets that collect dirt.</code></p>
<p><code>C. Casing leakage not to exceed [1]% of design airflow at [1.25] times design operating pressure.</code></p>
<p><code>D. Thermal break construction where required to prevent exterior condensation at design conditions.</code></p>
<p><code>2.X FLOORS AND DRAIN PANS</code></p>
<p><code>A. Floors in coil, humidifier and wet sections: welded watertight construction with integral drain connections.</code></p>
<p><code>B. Drain pans: stainless steel Type [304] [316], double sloped toward the outlet, designed to drain completely with no standing water, extending downstream of the coil face by not less than the distance required to capture carryover.</code></p>
<p><code>C. Intermediate drain pans between stacked coils.</code></p>
<p>Drain pan design principles are covered in <a href="<?= url('guides/drain-pan-design-ashrae-62-1') ?>">drain pan design under ASHRAE 62.1</a>.</p>
<p><code>2.X ACCESS</code></p>
<p><code>A. Hinged access doors upstream and downstream of each filter bank, coil, humidifier and fan, minimum [24 in. × 60 in. (610 mm × 1,525 mm)] clear opening, opening against air pressure where possible.</code></p>
<p><code>B. Marine-type vapour-proof lights in each access section, switched at the unit, with a GFCI receptacle at each door.</code></p>
<p><code>C. Viewing windows in access doors at fan, coil and humidifier sections.</code></p>

<h2>Part 2: Redundancy and components</h2>
<p><code>2.X FAN ARRAY</code></p>
<p><code>A. Supply fan array with [N+1] fans; with any one fan out of service, remaining fans shall deliver [100]% of design airflow at design static pressure.</code></p>
<p><code>B. Each fan with an individual isolation [backdraft damper] [blank-off plate] allowing removal of a failed fan while the unit operates.</code></p>
<p><code>C. One VFD per fan motor [or EC motor per fan], each with its own disconnect.</code></p>
<p><code>2.X COILS</code></p>
<p><code>A. Cooling coils [split into two independently valved sections] with face velocity not exceeding [450] fpm (2.3 m/s).</code></p>
<p><code>B. Coils removable from the unit without dismantling adjacent sections; spacing upstream and downstream for cleaning of both faces.</code></p>
<p><code>2.X HUMIDIFIER</code></p>
<p><code>A. Steam dispersion humidifier supplied by [clean steam generator] [electric steam generator with RO water]. Steam containing boiler treatment chemicals shall not be introduced into the airstream.</code></p>
<p><code>B. Dispersion located to achieve full absorption upstream of the final filter bank, with a stainless drain pan beneath.</code></p>

<h2>Part 2: Electrical and controls</h2>
<p><code>A. Unit listed to UL 1995 / CSA C22.2 No. 236, including all factory-installed electrical components.</code></p>
<p><code>B. Fan circuits arranged so that [half of the fans] [all fans] can be fed from the essential electrical system as indicated.</code></p>
<p><code>C. Drives configured for automatic restart and flying start after power interruption.</code></p>
<p><code>D. Differential pressure transmitters across each filter bank and each fan, and airflow measurement at each fan inlet, connected to the BAS.</code></p>

<h2>Part 3: Testing</h2>
<p><code>A. Factory run test of each unit at design airflow, measuring airflow, fan power, vibration and electrical performance. Demonstrate design airflow with one fan disabled.</code></p>
<p><code>B. Factory casing leakage test per Part 2 criteria.</code></p>
<p><code>C. Witness testing: provide [14] days' notice to the Owner and Engineer.</code></p>
<p><code>D. Field: verify drain pans drain completely with the unit operating at design static.</code></p>
<p>Custom Air Equipment run-tests units in its factory and offers witness testing, which supports the verification called for above. To review options for a specific project, <a href="<?= url('contact') ?>">contact the team for a quote</a>.</p>
<?php guide_end([
    ['What should a hospital AHU specification include beyond a standard one?', 'Continuous operation design, redundancy with defined performance during a single failure, cleanable double-wall construction with solid liners, stainless drainable pans, generous access with lighting, clean steam humidification and factory testing.'],
    ['Are perforated liners acceptable in hospital AHUs?', 'Many owners prohibit them because they expose insulation to the airstream and are hard to clean. Where acoustics require them, limit them to specific sections with insulation encapsulated in a cleanable film.'],
    ['How should fan redundancy be specified for a hospital AHU?', 'State the number of fans, the airflow and static pressure the remaining fans must deliver with one out of service, and require isolation of each fan so it can be removed while the unit runs.'],
    ['Should hospital AHU specifications require factory testing?', 'Yes. A factory run test including operation with one fan disabled, plus a casing leakage test, verifies performance before the unit is installed in a facility where downtime is difficult.'],
]);
