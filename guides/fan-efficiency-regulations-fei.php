<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-efficiency-regulations-fei'); ?>
<p class="lede">Most current North American energy codes that regulate fan efficiency do it with the Fan Energy Index: each fan above about 1 hp must have an FEI of at least 1.00 at its design operating point, with a lower floor of 0.95 for variable-volume fans in some codes. Exemptions cover small embedded fans, fans in separately regulated equipment and certain safety fans.</p>

<h2>Why codes moved from FEG to FEI</h2>
<p>Earlier editions of ASHRAE 90.1 and the IECC used Fan Efficiency Grade, a rating of a fan's peak efficiency. FEG said nothing about where the fan actually ran. A high-FEG fan selected far from its peak could still waste energy. FEI, defined in AMCA 208, is the ratio of a reference fan's electrical input power to the actual fan's electrical input power at the same duty point. Because it is evaluated at the design airflow and pressure, it rewards good selection rather than good catalog curves.</p>
<p>FEI above 1.00 means the fan uses less power than the reference at that duty. A value of 1.10 means roughly 10% less input power than the baseline. How to use FEI when comparing fan options is a separate exercise covered in <a href="<?= url('guides/fan-energy-index-fei-selection') ?>">selecting fans by FEI</a>.</p>

<h2>Where minimum FEI is required</h2>
<table>
<thead><tr><th>Document</th><th>Status of FEI requirement</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>ASHRAE/IES 90.1-2019 and later</td><td>Minimum FEI for fans above a power threshold</td><td>Lower minimum for VAV fans; check exemptions list</td></tr>
<tr><td>IECC 2021 and later</td><td>Minimum FEI requirement in commercial provisions</td><td>Structure follows 90.1; local amendments vary</td></tr>
<tr><td>California Title 24, Part 6</td><td>FEI required in recent editions</td><td>Applies with California's own fan power budget</td></tr>
<tr><td>Washington, Oregon and other state codes</td><td>Adopted through IECC or state-specific codes</td><td>Confirm local adoption date</td></tr>
<tr><td>US DOE federal regulation</td><td>Federal rulemaking for commercial and industrial fans has been under way</td><td>Check current status before relying on it</td></tr>
<tr><td>Canada (NECB and provincial codes)</td><td>Not uniformly required</td><td>Check provincial code and any utility program rules</td></tr>
</tbody>
</table>
<p>Edition and adoption matter more here than in most code topics. A project permitted under a 2016 edition of 90.1 may have an FEG requirement or none at all. Confirm the edition adopted in your jurisdiction and whether any local amendment changes the threshold.</p>

<h2>How the requirement is typically worded</h2>
<p>Under the 90.1-2019 structure, each fan and fan array with nameplate electrical input power at or above about 1 hp (0.89 kW) must have an FEI of at least 1.00 at the design point of operation. Each fan or fan array serving a variable air volume system must have an FEI of at least 0.95. The FEI is determined at design conditions using ratings certified under AMCA 208 methods.</p>
<p>Three details trip people up:</p>
<ul>
<li><strong>Fan arrays are evaluated as an array.</strong> The power threshold and FEI apply to the combined array, not to each small fan individually.</li>
<li><strong>The design point is the worst-case design condition,</strong> not a part-load operating point. VAV fans get the lower minimum because they spend most hours away from design.</li>
<li><strong>FEI is wire-to-air when calculated for a fan with a motor and drive,</strong> or shaft-based for a bare-shaft fan. Make sure the submittal states which basis was used.</li>
</ul>

<h2>Common exemptions</h2>
<p>Exemption lists differ by edition and jurisdiction, but the categories below appear in some form in most of them:</p>
<ul>
<li>Fans embedded in equipment that is already regulated for energy efficiency at the federal level, such as packaged air conditioners and heat pumps.</li>
<li>Fans in equipment listed or certified under a program that already accounts for fan energy.</li>
<li>Small embedded fans and fan arrays below a combined motor nameplate threshold.</li>
<li>Fans intended to operate only during emergencies, such as dedicated smoke exhaust fans.</li>
<li>Ceiling fans, which have their own federal rules.</li>
<li>Certain fans outside the scope of AMCA 208, such as some radial or high-pressure process fans.</li>
</ul>
<p class="warn">Do not assume a custom air handler is exempt because it is "equipment." Custom AHUs are generally not federally regulated as a whole product, so the fans inside them are usually subject to the FEI requirement. Read the exemption wording in the adopted code.</p>

<h2>How FEI relates to fan power budgets</h2>
<p>FEI is an individual fan requirement. Codes that set FEI minimums also keep a separate fan system power limitation that caps total fan power for the system based on airflow and pressure-drop credits. A design can satisfy the system budget with a poorly selected fan that misses FEI, or meet FEI on every fan while the total system power exceeds its allowance because of high internal pressure drops. Both checks must pass. The system budget is worked through in <a href="<?= url('guides/ashrae-90-1-fan-power-limitation') ?>">calculating 90.1 fan power limitation compliance</a>.</p>

<h2>Documenting FEI compliance</h2>
<ol>
<li>List each fan or fan array with its design airflow, total pressure and nameplate input power.</li>
<li>Report FEI at the design point, along with the basis (shaft or wire-to-air) and whether the value is AMCA certified.</li>
<li>For each fan claimed as exempt, cite the exemption category in the adopted code.</li>
<li>Carry the FEI value onto the equipment schedule so the plan reviewer and the submittal reviewer see the same number.</li>
</ol>
<p>The energy code forms that collect this information are discussed in <a href="<?= url('guides/energy-code-compliance-documentation') ?>">documenting energy code compliance for AHUs</a>.</p>
<?php guide_end([
    ['What is the minimum FEI required by ASHRAE 90.1?', 'Under the 2019 edition structure, fans at or above about 1 hp nameplate input power need an FEI of at least 1.00 at the design point, and fans serving VAV systems need at least 0.95. Confirm the edition and any local amendments adopted in your jurisdiction.'],
    ['Are fans inside custom air handlers exempt from FEI rules?', 'Generally not. Exemptions usually cover fans in equipment that is separately regulated for efficiency, such as packaged unitary equipment. Custom air handlers are typically not covered by such regulation, so their fans normally must meet the FEI minimum.'],
    ['Is FEI calculated for each fan in a fan array?', 'Codes based on 90.1 treat the fan array as a single fan for the power threshold and the FEI requirement. The array FEI is calculated at the combined design airflow and pressure.'],
    ['Does Canada require minimum FEI?', 'Canadian requirements are not uniform. Check the energy code adopted by the province and any municipal or utility program requirements for the project.'],
]);
