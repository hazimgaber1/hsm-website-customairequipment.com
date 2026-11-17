<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('necb-vs-ashrae-90-1'); ?>
<p class="lede">For a Canadian project, which energy standard applies depends on the province: some adopt the National Energy Code of Canada for Buildings, some allow ASHRAE 90.1 as an alternative, and some layer their own tiers on top. Both documents regulate fan power, heat recovery and economizers, but they set thresholds differently, and NECB is generally harder on heat recovery in cold climates.</p>

<h2>Who adopts what</h2>
<p>NECB is a model code published by the National Research Council. It has no force until a province or territory adopts it, often with amendments. 90.1 is referenced in some provinces as an acceptable alternative compliance path or as the basis of a provincial supplement. Examples of the variety you will see:</p>
<ul>
<li>Provinces that adopt NECB directly, sometimes with a delay of several years behind the latest edition.</li>
<li>Ontario, where the building code points to its supplementary standard SB-10, which in turn references both 90.1 and NECB with Ontario-specific modifications.</li>
<li>British Columbia, where the Energy Step Code sets performance tiers and municipalities can require higher steps.</li>
<li>Municipal bylaws, such as those in Vancouver or Toronto, that exceed the provincial code.</li>
</ul>
<p>Check the adopted edition and any amendments before you assume a particular threshold. This guide compares how the two documents approach air handler requirements, not exact numbers in any single edition.</p>

<h2>Comparison of AHU-related requirements</h2>
<table>
<thead><tr><th>Topic</th><th>NECB approach</th><th>ASHRAE 90.1 approach</th></tr></thead>
<tbody>
<tr><td>Climate basis</td><td>Climate zones by heating degree-days, Zones 4 to 8 in Canada</td><td>Zones 0 to 8 by HDD, CDD and moisture regime</td></tr>
<tr><td>Fan power</td><td>Limit expressed as power per unit airflow, W per L/s, by system type</td><td>bhp allowance with pressure-drop credits (2019 and earlier) or W/cfm budget (2022)</td></tr>
<tr><td>Minimum fan efficiency</td><td>Not consistently regulated by FEI</td><td>FEI minimum in 2019 and later</td></tr>
<tr><td>Heat recovery trigger</td><td>Based on heat content or capacity of exhaust air, applies broadly in cold zones</td><td>Based on climate zone, design outdoor air fraction and airflow, with hours-of-operation tables</td></tr>
<tr><td>Heat recovery performance</td><td>Minimum sensible effectiveness tied to exhaust heat recovery</td><td>Minimum enthalpy recovery ratio, with sensible-only options in some cases</td></tr>
<tr><td>Economizers</td><td>Required above capacity thresholds, with exceptions and an option for water-side</td><td>Required by climate zone and cooling capacity with a list of exceptions</td></tr>
<tr><td>Economizer high limit</td><td>Defined controls permitted</td><td>Table of allowed high-limit types by climate zone</td></tr>
<tr><td>Compliance paths</td><td>Prescriptive, trade-off, performance (modelling)</td><td>Prescriptive, Energy Cost Budget, Appendix G performance rating</td></tr>
<tr><td>Performance target style</td><td>NECB 2020 introduced tiered performance</td><td>Single baseline, beyond-code programs add tiers</td></tr>
</tbody>
</table>

<h2>Fan power: different units, similar intent</h2>
<p>NECB expresses fan power limits as an input power per unit of supply airflow, which is easy to check from a fan schedule: add up fan input power in watts and divide by supply flow in L/s. The 90.1 bhp method converts system pressure credits into an allowance, which rewards high-efficiency filtration and heat recovery more explicitly. In practice a custom AHU with low face velocities, an efficient fan array and moderate filter pressure drop tends to pass both. A unit with high internal pressure from heat recovery and multiple filter banks can pass 90.1 on credits and still struggle against a flat W per L/s limit, so run both checks early if the province allows either path.</p>
<p>For the 90.1 calculation itself, see <a href="<?= url('guides/ashrae-90-1-fan-power-limitation') ?>">calculating 90.1 fan power limitation compliance</a>.</p>

<h2>Heat recovery: where NECB bites harder</h2>
<p>In most of Canada, design heating temperatures are well below 0°F (−18°C) and exhaust air carries a lot of heat. NECB triggers heat recovery from the amount of heat leaving in the exhaust, so even modest outdoor air systems in Zones 6 to 8 usually need recovery. 90.1 thresholds depend on the percentage of outdoor air and hours of operation, and some systems that need recovery under NECB are exempt under 90.1.</p>
<p>The consequences for the air handler are physical: space for a wheel, plate or runaround coil, frost control, a second fan path, and the pressure drop that comes with them. Frost control in particular becomes a design driver at Canadian temperatures. The general requirements under 90.1 are discussed in <a href="<?= url('guides/ashrae-90-1-energy-recovery-requirements') ?>">ASHRAE 90.1 energy recovery requirements</a>, and frost methods are in <a href="<?= url('guides/frost-control-wheels-and-plates') ?>">frost control for wheels and plates</a>.</p>

<h2>Economizers in cold climates</h2>
<p>Both documents require airside economizers on larger cooling systems, but with Canadian design temperatures the economizer is as much a mixing and freeze risk as an energy saver. When a project uses 100% outdoor air with energy recovery, the economizer requirement may be met through recovery bypass. Expect inspectors to look at the high-limit control and the damper leakage ratings in either case.</p>

<h2>Choosing between paths when both are allowed</h2>
<ol>
<li>Confirm the province permits either standard and which edition of each.</li>
<li>Check for municipal requirements, which often specify NECB tiers or energy intensity targets.</li>
<li>Screen the AHU against both fan power methods and both heat recovery triggers.</li>
<li>Consider the modelling path for projects with unusual systems, such as hospitals or labs, where prescriptive rules can be awkward.</li>
<li>Stay with one standard for the whole building. Mixing requirements from both is generally not allowed.</li>
</ol>
<p class="note">US state codes are a separate subject; this comparison covers only NECB and the 90.1 standard as used in Canada.</p>
<?php guide_end([
    ['Does Canada use NECB or ASHRAE 90.1?', 'It depends on the province. Some adopt NECB, some permit 90.1 as an alternative, and some such as Ontario reference both through a provincial supplementary standard. Municipal bylaws can add further requirements.'],
    ['Is NECB stricter than ASHRAE 90.1 for heat recovery?', 'In cold Canadian climate zones it often is. NECB triggers heat recovery based on the heat content of exhaust air, so many outdoor air systems that might be exempt under 90.1 require recovery under NECB.'],
    ['How does NECB express fan power limits?', 'NECB expresses fan power as input power per unit of supply airflow, in watts per litre per second, by system type. ASHRAE 90.1 uses a horsepower or watts per cfm allowance with credits for pressure-drop devices.'],
    ['Can I mix NECB and 90.1 requirements on one building?', 'Generally no. Pick the compliance standard permitted by the province and apply it consistently to the whole building.'],
]);
