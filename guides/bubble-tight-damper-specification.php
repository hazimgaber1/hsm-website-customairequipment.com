<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('bubble-tight-damper-specification'); ?>
<p class="lede">A bubble-tight damper is specified by its leakage test, not by its blade design. Write the specification around four things: the test pressure, the test method and acceptance criterion across both the blade seat and the casing, the materials that must survive your decontamination agent, and the actuator's fail position and proof of closure.</p>

<h2>What "bubble-tight" means</h2>
<p>The term comes from the soap bubble test. With one side of a closed damper pressurized, a soap solution is applied around the blade seal and shaft penetrations; no bubbles may form. In current practice, most owners prefer a quantitative pressure decay test, in which the sealed volume on one side of the closed damper is pressurized and the pressure drop over a set time is measured and converted to a leakage rate.</p>
<p>Commercial control dampers are rated by leakage class under AMCA 500-D at relatively low pressures and still allow measurable leakage when closed; those classes are explained in <a href="<?= url('guides/amca-500-d-damper-leakage') ?>">AMCA 500-D damper leakage classes</a>. Bubble-tight dampers are a different category, built to isolate a duct or housing so that it can be decontaminated with gas or pressure tested as a sealed volume.</p>

<h2>Where they are used</h2>
<ul>
<li>Supply and exhaust isolation for BSL-3 and BSL-4 suites, so the suite can be sealed for gaseous decontamination (see <a href="<?= url('guides/bsl-3-containment-checklist') ?>">the BSL-3 containment checklist</a>)</li>
<li>Upstream and downstream isolation of bag-in/bag-out filter housings</li>
<li>Isolation of redundant exhaust fans on a common plenum</li>
<li>Potent compound and radiopharmaceutical exhaust systems</li>
<li>Isolation of HEPA housings for in-place decontamination before change-out</li>
</ul>

<h2>Decisions to make before writing the specification</h2>
<ol>
<li><strong>Test pressure.</strong> Choose a pressure that covers the highest differential the damper will see in service and during decontamination or room integrity testing, with margin. The owner's biosafety or containment standard may set this value.</li>
<li><strong>Which side is pressurized.</strong> Leakage can differ by direction. Specify testing in the direction of the hazard, or both directions where the damper isolates both ways.</li>
<li><strong>Acceptance criterion.</strong> Either no bubbles in a soap test, or a maximum leakage rate in cfm or a maximum decay over a stated time for the tested volume. Many owners reference ASME AG-1, the code for nuclear air and gas treatment components, for damper leakage testing methods.</li>
<li><strong>Decontamination agent.</strong> Vaporized hydrogen peroxide, formaldehyde, chlorine dioxide and other agents attack different seal elastomers and coatings. Name the agent.</li>
<li><strong>Shape and size.</strong> Round dampers seal more reliably at a given price than rectangular ones; large rectangular sizes may need multiple sections or special construction.</li>
<li><strong>Function.</strong> Isolation only (open or closed) or also modulating. Bubble-tight dampers are generally poor modulating devices; use a separate control damper.</li>
</ol>

<h2>Sample specification language</h2>
<p>Adapt the following to your project and the owner's containment standard. Bracketed items require a project value.</p>
<p><strong>Isolation dampers, bubble-tight</strong></p>
<ol>
<li>Provide bubble-tight isolation dampers where indicated, of [round] [rectangular] construction, rated for leak-tight shutoff at a differential pressure of [__ in. w.g.] in [either direction] [the direction indicated].</li>
<li>Damper body: continuously welded [Type 304] [Type 316L] stainless steel [or carbon steel with chemical-resistant coating compatible with ___], with flanged connections and minimum thickness sufficient to prevent distortion at the test pressure.</li>
<li>Blade seal: [inflatable seal] [compression elastomeric seal] of a material compatible with [vaporized hydrogen peroxide] [formaldehyde] [chlorine dioxide] [other] at the concentrations and exposure times defined in the decontamination procedure. Submit the seal manufacturer's compatibility data.</li>
<li>Shaft penetrations: sealed with [packing glands] [bellows] [shaft seals] designed to maintain leak-tight performance across full rotation.</li>
<li>Actuator: [electric] [pneumatic] with [spring-return to closed] [fail in place] on loss of power or control signal. Actuator sized for [__] times the damper's maximum required torque at the test pressure. See project damper actuator requirements.</li>
<li>Position indication: provide [two] end switches proving fully open and fully closed, wired to the building automation system.</li>
<li>Test ports: provide [__] capped test ports on [upstream] [downstream] [both] sides for field leak testing.</li>
<li>Factory testing: test each damper for blade seat and casing leakage at the specified pressure by [pressure decay] [soap bubble] method. Acceptance: [no bubbles visible] [leakage not exceeding __ cfm] [decay not exceeding __ in. w.g. in __ minutes for the tested volume]. Submit certified test reports with serial numbers.</li>
<li>Field testing: after installation, retest each damper by the same method in the presence of [owner] [certifier].</li>
</ol>
<p class="note">Define the decay test by volume. A pressure decay value only means something for a known enclosed volume; specify how the manufacturer converts decay to a leakage rate, or require a leakage rate directly.</p>

<h2>Submittal review points</h2>
<table>
<thead><tr><th>Check</th><th>What to look for</th></tr></thead>
<tbody>
<tr><td>Test report</td><td>Pressure, direction, method, duration and result per serial number; not a generic certificate</td></tr>
<tr><td>Seal material</td><td>Compatibility statement for the named decontamination agent</td></tr>
<tr><td>Casing leakage</td><td>Casing tested as well as blade seat; welded rather than riveted joints</td></tr>
<tr><td>Actuator</td><td>Fail position, torque margin, enclosure rating for the location</td></tr>
<tr><td>Pressure drop</td><td>Open-position pressure drop at design airflow, for fan selection</td></tr>
<tr><td>Access</td><td>Space for actuator service and seal replacement</td></tr>
</tbody>
</table>

<h2>Installation and maintenance considerations</h2>
<p>Install isolation dampers as close as practical to the containment boundary or filter housing they serve, so the volume to be decontaminated is small. Connect them to ductwork with welded or gasketed flanged joints that have been pressure tested with the damper. Provide access for seal inspection and replacement, since elastomeric seals age with repeated decontamination cycles. Include periodic leak retesting in the maintenance program. The filter housings these dampers usually isolate are described in <a href="<?= url('guides/bag-in-bag-out-filter-housings') ?>">bag-in/bag-out filter housings</a>, and actuator sizing methods in <a href="<?= url('guides/damper-actuator-sizing') ?>">damper actuator sizing</a>.</p>
<?php guide_end([
    ['What is a bubble-tight damper?', 'It is an isolation damper built and tested so that, when closed and pressurized, no measurable leakage passes the blade or casing. The name comes from the soap bubble test, though pressure decay testing is now more common.'],
    ['How is a bubble-tight damper tested?', 'The closed damper is pressurized on one side to a specified pressure. Leakage is checked with soap solution for bubbles or by measuring pressure decay in a sealed volume over time. Each damper should be tested and documented by serial number.'],
    ['Can a bubble-tight damper be used to control airflow?', 'Generally not. They are designed for full open or full closed isolation and do not modulate well. Use a separate control damper or airflow valve for modulation.'],
]);
