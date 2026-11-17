<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahri-430-certification'); ?>
<p class="lede">AHRI 430 is the rating standard for the supply fan performance of central-station air handlers, measured with the fan installed in its casing. AHRI certification under it confirms that a manufacturer's published airflow, static pressure and fan power for a certified product line match independent test results.</p>

<h2>What the standard actually measures</h2>
<p>AHRI Standard 430, Performance Rating of Central Station Air-Handling Unit Supply Fans, defines how to test and rate a supply fan as it operates inside the air handler. The distinction matters. A fan rated alone in an open test chamber under AMCA 210 performs differently once it sits in a cabinet with a coil upstream, a tight inlet plenum and a discharge opening cut into a panel. AHRI 430 captures those installed effects.</p>
<p>Ratings include:</p>
<ul>
<li>Supply airflow at standard air density, 0.075 lb/ft³ (1.2 kg/m³).</li>
<li>External static pressure available at the unit connections.</li>
<li>Fan speed and fan input power at the rated point.</li>
<li>Where applicable, the casing-related losses that reduce available pressure.</li>
</ul>
<p>The test itself uses airflow measurement methods drawn from ASHRAE 51/AMCA 210 laboratory practice, with the AHU section connected to a test chamber or duct so that the whole assembly, not just the wheel, is characterized.</p>

<h2>How the certification program works</h2>
<p>The AHRI Central Station Air-Handling Units certification program is the mechanism that turns the test standard into verified catalog data. A participating manufacturer submits its selection software and published ratings for a defined product line. AHRI then selects units, usually at random, and has them tested at an independent laboratory. If tested performance falls outside the program tolerances, the manufacturer must rerate, correct the software, or remove the products from certification.</p>
<p>Certified models appear in the AHRI Directory of Certified Product Performance. A specifying engineer can confirm certification by finding the model there; the presence of the AHRI logo in a brochure is not enough by itself.</p>
<p class="note">Certification is assigned to a product line and its rating software, not to an individual job. Asking for "AHRI certified" on a unit that falls outside a manufacturer's certified product range does not make that unit certified.</p>

<h2>Which units qualify, and which do not</h2>
<p>The program targets factory-assembled, catalog air handlers built from modular sections whose performance can be predicted by software. Qualification depends on the scope defined in the current AHRI operations manual, which sets limits on unit type and size. Typical exclusions and practical gaps include:</p>
<ul>
<li><strong>Units above the program's airflow range.</strong> Very large custom units often exceed what can be tested in an available laboratory.</li>
<li><strong>Fully custom configurations.</strong> Units with nonstandard cabinet dimensions, unusual fan arrangements or one-off section sequences fall outside the predictable product line.</li>
<li><strong>Field-erected and knockdown units</strong> assembled on site from panels.</li>
<li><strong>Products not enrolled</strong> by the manufacturer, even if they could technically qualify.</li>
</ul>
<p>Because the scope rules change from time to time, check the current program documents when you need a firm answer on a particular unit size or type.</p>

<h2>What AHRI 430 certification does not cover</h2>
<p>Engineers sometimes assume an AHRI 430 listing proves the whole air handler. It does not. Several performance areas are rated under other standards or not certified at all:</p>
<table>
<thead><tr><th>Performance area</th><th>Where it is addressed</th></tr></thead>
<tbody>
<tr><td>Coil capacity and pressure drop</td><td>AHRI 410 for forced-circulation coils</td></tr>
<tr><td>Casing deflection, leakage, thermal performance</td><td>AHRI 1350 test and rating method</td></tr>
<tr><td>Sound power of the air handler</td><td>AHRI 260 for ducted equipment</td></tr>
<tr><td>Energy recovery device performance</td><td>AHRI 1060 for air-to-air exchangers</td></tr>
<tr><td>Electrical safety</td><td>UL 1995 / CSA C22.2 No. 236 listing</td></tr>
<tr><td>Filter efficiency</td><td>ASHRAE 52.2 testing of the filter media</td></tr>
</tbody>
</table>
<p>Coil performance is a common point of confusion. A unit may carry certified fan ratings while the coils inside it are rated under a separate program; see the <a href="<?= url('guides/ahri-410-coil-ratings') ?>">AHRI 410 coil ratings guide</a> for that side of the equipment. Casing performance is covered in the <a href="<?= url('guides/ahri-1350-casing-performance-spec') ?>">AHRI 1350 casing performance guide</a>.</p>

<h2>Reading certified data on a submittal</h2>
<p>When a submittal claims AHRI 430 certification, check a few things before accepting it:</p>
<ol>
<li>Confirm the model family appears in the AHRI directory under the central-station air handler program.</li>
<li>Check that the submitted selection was generated from the certified version of the manufacturer's software.</li>
<li>Compare the scheduled airflow and external static pressure with the certified rating basis. Ratings are at standard air; job conditions at altitude or with unusual temperatures require density correction.</li>
<li>Look for notes indicating that a specific option, such as a nonstandard discharge, puts the unit outside certified performance.</li>
</ol>

<h2>Verifying performance on units outside the program</h2>
<p>For a custom unit that cannot carry AHRI 430 certification, the engineer still needs confidence in the fan data. The usual alternatives are:</p>
<ul>
<li>Fans whose wheel-and-inlet performance is AMCA-licensed, with the manufacturer applying documented system effect and casing corrections.</li>
<li>A factory airflow and power run test of the completed unit, with pressure measured at the connections.</li>
<li>Witness testing, where the owner's representative observes the run test and verifies instrument calibration.</li>
</ul>
<p>Custom Air Equipment run-tests its units in the factory and offers witness testing, which gives a direct check on the assembled unit when a directory listing is not available. How to word those alternatives in a specification is covered in <a href="<?= url('guides/certification-requirements-specification') ?>">specifying certification and listing requirements</a>.</p>
<?php guide_end([
    ['Is AHRI 430 the same as AMCA certification?', 'No. AMCA certification rates a fan by itself in a laboratory setup, while AHRI 430 rates the supply fan as installed inside the air handler casing. The installed rating reflects losses from the cabinet, inlet and discharge that a bare fan rating does not.'],
    ['Does AHRI 430 certify the cooling coil in an air handler?', 'No. Coils are rated under AHRI 410 through a separate program. An air handler with certified fan ratings may or may not have certified coil ratings.'],
    ['Can a custom air handler be AHRI 430 certified?', 'Usually not. The certification program is built around catalog product lines whose performance can be predicted by rating software, and fully custom or very large units typically fall outside its scope. Factory run testing and witness testing are the common alternatives.'],
    ['How do I verify that a unit is AHRI certified?', 'Look up the model in the AHRI Directory of Certified Product Performance and confirm the submitted selection came from the certified software version. A logo in a brochure alone does not confirm certification of the specific unit.'],
]);
