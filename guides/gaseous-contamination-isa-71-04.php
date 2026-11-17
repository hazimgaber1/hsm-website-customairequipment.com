<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('gaseous-contamination-isa-71-04'); ?>
<p class="lede">ANSI/ISA-71.04 classifies how corrosive an environment is to electronics by measuring how fast a corrosion film grows on copper and silver coupons. Severity runs from G1 (mild) through G2 and G3 to GX (severe). Data center guidance generally targets G1; if measured reactivity is higher, gas-phase filtration or a design that keeps outdoor air out of the white space is needed.</p>

<h2>Why gases matter to modern electronics</h2>
<p>Particulate filters catch dust, but corrosive gases pass straight through them. Sulfur-bearing gases such as hydrogen sulfide and sulfur dioxide, chlorine compounds, nitrogen oxides and ozone react with metals on circuit boards, connectors and components. The move to lead-free solders and finishes, driven by restrictions on hazardous substances in electronics, made some equipment more vulnerable. Exposed copper and silver surfaces on lead-free boards can develop corrosion products that creep across the board and cause short circuits, and silver-bearing components can fail from sulfur attack.</p>
<p>Typical sources near data centers include:</p>
<ul>
<li>Industrial emissions, refineries, pulp and paper mills, smelters</li>
<li>Wastewater treatment plants and landfills (hydrogen sulfide)</li>
<li>Heavy traffic and diesel exhaust (nitrogen and sulfur oxides)</li>
<li>Agricultural operations and fertilizer use</li>
<li>Coastal salt air combined with other pollutants</li>
<li>Indoor sources such as some cleaning products, rubber and certain building materials</li>
</ul>

<h2>How ISA-71.04 measures severity</h2>
<p>Rather than measuring each gas separately, the method measures what the gases actually do to metal. Copper and silver reactivity coupons are exposed in the environment, usually for 30 days, and then analyzed to determine the thickness of the corrosion film that formed, expressed in angstroms. The result is normalized to a 30-day period.</p>
<table>
<thead><tr><th>Severity level</th><th>Description</th><th>Copper reactivity (Å per 30 days)</th></tr></thead>
<tbody>
<tr><td>G1</td><td>Mild: corrosion not a factor in reliability</td><td>Less than 300</td></tr>
<tr><td>G2</td><td>Moderate: effects measurable and may affect reliability</td><td>300 to under 1,000</td></tr>
<tr><td>G3</td><td>Harsh: high probability of corrosive attack</td><td>1,000 to under 2,000</td></tr>
<tr><td>GX</td><td>Severe: only specially designed and packaged equipment expected to survive</td><td>2,000 and above</td></tr>
</tbody>
</table>
<p>The current edition of the standard includes silver reactivity as well as copper, because silver is more sensitive to some sulfur compounds and copper alone can understate the risk. ASHRAE TC 9.9 guidance for data centers recommends that both copper and silver reactivity stay within the G1 range. Confirm the current numerical limits in the edition you reference.</p>
<p class="note">Coupons placed in a duct, in the outdoor air intake and in the white space tell you different things. Place coupons at all three to see what outdoor air brings in and what reaches the equipment.</p>

<h2>When to test</h2>
<ul>
<li>During site selection, before choosing between direct and indirect economizers</li>
<li>Before commissioning a direct airside economizer system</li>
<li>After equipment failures that show signs of corrosion, such as unexplained board failures or black deposits on connectors</li>
<li>When nearby land use changes, for example a new industrial plant or highway</li>
<li>Periodically in facilities near known sources, often seasonally, because concentrations vary with weather and wind</li>
</ul>
<p>Coupons are inexpensive compared with the consequences of corrosion damage. Electronic real-time corrosion monitors are also available and useful where conditions vary.</p>

<h2>When gas-phase filtration is needed</h2>
<p>The decision follows the measured severity and the cooling design:</p>
<table>
<thead><tr><th>Measured condition</th><th>Closed recirculating hall</th><th>Direct airside economizer</th></tr></thead>
<tbody>
<tr><td>White space and outdoor air at G1</td><td>No action beyond monitoring</td><td>Economizer acceptable; continue monitoring</td></tr>
<tr><td>Outdoor air above G1, white space G1</td><td>Gas-phase filtration on makeup air; keep hall positive</td><td>Gas-phase filtration on outdoor air, or switch to indirect economizer</td></tr>
<tr><td>White space above G1</td><td>Find internal sources; add recirculating gas-phase filtration</td><td>Restrict outdoor air hours; add gas-phase filtration; reconsider economizer type</td></tr>
</tbody>
</table>
<p>Gas-phase filtration for these applications commonly uses activated carbon, impregnated carbon or permanganate-based media selected for the gases present. Media selection, bed depth and life are covered in <a href="<?= url('guides/gas-phase-carbon-filtration') ?>">gas-phase carbon filtration</a>. For a direct economizer handling the entire supply airflow from outdoors, filtration of that full airflow adds substantial pressure drop and media cost, which can erode the economizer's savings. That trade-off is part of the decision described in <a href="<?= url('guides/airside-economizer-data-centers') ?>">airside economizers for data centers</a>.</p>

<h2>Reading a coupon report</h2>
<p>A laboratory report for reactivity coupons normally lists the film thickness for each corrosion product it measures, the total for copper and for silver, and the resulting severity level. Look at the breakdown, not just the class. Copper sulfide points to reduced sulfur compounds such as hydrogen sulfide; silver chloride points to chlorine-bearing gases. Knowing which product dominates tells you which media will work and which nearby sources to investigate.</p>
<h2>Other mitigations</h2>
<ul>
<li><strong>Pressurization:</strong> keep the white space slightly positive to surrounding areas so unfiltered air does not infiltrate.</li>
<li><strong>Seal the envelope:</strong> limit infiltration through doors, cable penetrations and loading areas.</li>
<li><strong>Humidity:</strong> corrosion accelerates with humidity; in polluted environments, keep relative humidity lower. The interaction is discussed in <a href="<?= url('guides/data-center-humidity-static') ?>">data center humidity limits and ESD</a>.</li>
<li><strong>Intake location:</strong> place outdoor air intakes away from generator exhausts, loading docks, cooling tower drift and roads.</li>
<li><strong>Control indoor sources:</strong> review cleaning products, batteries, rubber flooring and other materials used inside the hall.</li>
</ul>
<p class="warn">Gas-phase media is consumed as it works. Without regular media analysis or downstream coupons, a filter can be exhausted and passing contaminants while looking normal.</p>
<?php guide_end([
    ['What is ISA 71.04?', 'ANSI/ISA-71.04 is a standard that classifies the corrosivity of an environment for electronic equipment. It measures corrosion film growth on copper and silver coupons and assigns a severity level from G1 (mild) to GX (severe).'],
    ['What severity level should a data center meet?', 'ASHRAE TC 9.9 guidance recommends that both copper and silver reactivity stay within the G1 range. Higher levels indicate that gas-phase filtration or other mitigation is needed.'],
    ['Do particulate filters remove corrosive gases?', 'No. Corrosive gases pass through particulate filters. Removing them requires gas-phase media such as activated or impregnated carbon or permanganate-based media, selected for the specific gases present.'],
]);
