<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('amca-500-d-damper-leakage'); ?>
<p class="lede">AMCA 500-D is the laboratory test method for dampers, and the leakage class on a damper submittal tells you how much air passes through it when fully closed at a stated pressure. Class 1A is the tightest certified class at 3 cfm/ft² at 1 in. w.g.; Class 1 is 4 cfm/ft², the value most energy codes use for outdoor air and exhaust dampers.</p>

<h2>What AMCA 500-D tests</h2>
<p>AMCA Standard 500-D, Laboratory Methods of Testing Dampers for Rating, defines how to measure several damper properties under controlled conditions:</p>
<ul>
<li><strong>Air leakage</strong> through the closed damper at a range of static pressures.</li>
<li><strong>Pressure drop</strong> through the open damper at a range of velocities, using specified duct and plenum configurations.</li>
<li><strong>Operational torque</strong> needed to open and close the blades.</li>
<li><strong>Dynamic closure</strong> against flowing air, used for fire and smoke damper evaluations.</li>
</ul>
<p>The test results are only certified when the manufacturer participates in the AMCA Certified Ratings Program for dampers, which uses AMCA 500-D as the test basis and defines the leakage classes. Louvers are tested under the companion standard AMCA 500-L.</p>

<h2>Leakage classes</h2>
<table>
<thead><tr><th>Class</th><th>Maximum leakage at 1 in. w.g. (250 Pa)</th><th>Maximum leakage at 4 in. w.g. (1 kPa)</th></tr></thead>
<tbody>
<tr><td>1A</td><td>3 cfm/ft²</td><td>Not rated at this pressure</td></tr>
<tr><td>1</td><td>4 cfm/ft²</td><td>8 cfm/ft²</td></tr>
<tr><td>2</td><td>10 cfm/ft²</td><td>20 cfm/ft²</td></tr>
<tr><td>3</td><td>40 cfm/ft²</td><td>80 cfm/ft²</td></tr>
</tbody>
</table>
<p>In SI terms, 4 cfm/ft² equals about 20 L/s per m². The class is the leakage per square foot of damper face area. Larger dampers leak more air in total even at the same class, so a 40 ft² (3.7 m²) Class 1 outdoor air damper may pass up to 160 cfm when closed at 1 in. w.g.</p>
<h3>How classes are assigned</h3>
<p>Leakage is measured on several damper sizes, typically with the blades closed by the specified actuator torque. Because blade length and the number of blade seals affect leakage, results from the tested sizes are used to define the rating for the full size range. The certified rating states the pressure, the direction of flow (some dampers seal better in one direction), and the torque applied. If the actual actuator delivers less closing torque than the test, field leakage will be higher.</p>
<p class="note">A damper marketed as "low leakage" is not certified to a class unless it carries the AMCA seal for air leakage. Ask for the certified rating, not a brochure claim.</p>

<h2>What drives damper leakage</h2>
<ul>
<li><strong>Blade seals.</strong> Extruded silicone or vinyl edge seals and compressible jamb seals make the difference between Class 3 and Class 1.</li>
<li><strong>Blade profile.</strong> Airfoil blades are stiffer and seal more evenly than flat blades.</li>
<li><strong>Frame rigidity.</strong> A racked or twisted frame opens gaps at blade ends.</li>
<li><strong>Linkage adjustment.</strong> Blades that do not close simultaneously leave gaps.</li>
<li><strong>Actuator torque.</strong> Leakage ratings depend on applied torque; undersized actuators reduce sealing force.</li>
<li><strong>Section size.</strong> Very large openings are made of multiple damper sections, and each mullion is a potential leak path.</li>
</ul>
<p>Actuator sizing to reach rated torque is covered in <a href="<?= url('guides/damper-actuator-sizing') ?>">damper actuator sizing</a>.</p>

<h2>Code requirements for low-leakage dampers</h2>
<p>Energy codes limit damper leakage on outdoor air intakes, exhaust and relief openings because a leaking damper on an idle system lets cold or hot air into the building around the clock. Under ASHRAE 90.1 and the IECC, motorized dampers in these locations are typically limited to a maximum of 4 cfm/ft² at 1 in. w.g. when tested per AMCA 500-D, which corresponds to Class 1. Nonmotorized (gravity) dampers have a higher allowed leakage and are only permitted in certain applications and climate zones. Confirm the values and exceptions in the edition adopted for the project.</p>
<p>Other requirements that rely on AMCA 500-D data include:</p>
<ul>
<li>Economizer return and outdoor air dampers, where leakage affects minimum outdoor air control.</li>
<li>Isolation dampers in fan arrays and redundant AHUs.</li>
<li>Stair and elevator shaft vents under some building and energy codes.</li>
<li>Utility and green building program requirements that call for Class 1A on specific applications.</li>
</ul>
<p>Economizer damper requirements in context are in <a href="<?= url('guides/economizer-requirements-by-climate-zone') ?>">determining economizer requirements by climate zone</a>.</p>

<h2>Dampers inside air handlers</h2>
<p>Dampers built into an AHU, such as mixing box dampers or face and bypass dampers, are often supplied by the unit manufacturer from an AMCA-licensed damper line. Check:</p>
<ol>
<li>The damper model and its certified class appear on the unit submittal.</li>
<li>The installed damper is the same construction as tested; some manufacturers build "equivalent" dampers that are not part of the license.</li>
<li>Multi-section assemblies are sealed at mullions and to the casing, since AMCA ratings cover leakage through the damper, not around it.</li>
<li>The actuator torque meets or exceeds the torque used in certification.</li>
</ol>

<h2>Other tests under AMCA 500-D</h2>
<p>Pressure drop data from AMCA 500-D are reported for several installation configurations (ducted both sides, plenum on one side, and so on). The configuration used in a submittal should match the installation, because pressure drop with a plenum on the discharge side can be several times the fully ducted value. For fire and smoke dampers, the 500-D dynamic closure and pressure drop data are used alongside UL 555 and UL 555S listings, which are separate from leakage classes. Fire and smoke damper requirements are in <a href="<?= url('guides/nfpa-90a-smoke-detectors-dampers') ?>">NFPA 90A requirements</a>.</p>
<?php guide_end([
    ['What is AMCA Class 1 damper leakage?', 'Class 1 allows a maximum of 4 cfm per square foot of damper face area at 1 in. w.g. and 8 cfm per square foot at 4 in. w.g. when tested per AMCA 500-D. It is the level most energy codes require for motorized outdoor air and exhaust dampers.'],
    ['What is the difference between Class 1 and Class 1A?', 'Class 1A is tighter, at a maximum of 3 cfm per square foot at 1 in. w.g., and is rated only at that pressure. Class 1 allows 4 cfm per square foot at 1 in. w.g.'],
    ['Does damper leakage rating include leakage around the frame?', 'No. The rating measures leakage through the closed damper in a test setup. Leakage between the frame and the duct or casing depends on installation and must be sealed separately.'],
    ['Why does actuator torque matter for leakage?', 'Leakage ratings are established with a specified closing torque. An actuator that delivers less torque will not compress the seals fully, and field leakage will exceed the rating.'],
]);
