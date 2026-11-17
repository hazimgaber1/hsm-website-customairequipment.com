<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('retrofit-incentives-rebates'); ?>
<p class="lede">Electric and gas utilities across the US and Canada, along with some state, provincial and federal agencies, offer incentives that can cover part of the cost of fan, motor, drive and energy recovery upgrades; they come in a few recognizable structures, and almost all of them require approval before equipment is purchased.</p>

<h2>Why incentives exist for air handler upgrades</h2>
<p>Utilities fund efficiency programs because reducing customer demand can be cheaper than building new supply, and in many jurisdictions regulators require them to meet savings targets. Fans run long hours in commercial and institutional buildings, so reducing fan power produces large, predictable kilowatt-hour savings. Energy recovery and controls upgrades reduce heating and cooling energy, which interests both gas and electric utilities. That makes air handler retrofits a natural fit for most program portfolios.</p>
<p>Program names, eligible measures and amounts change frequently, often yearly. Treat everything below as a description of how programs are commonly structured, and confirm current terms directly with the utility serving the building.</p>

<h2>Common incentive structures</h2>
<table>
<thead><tr><th>Structure</th><th>How it pays</th><th>Typical AHU measures</th><th>Effort to apply</th></tr></thead>
<tbody>
<tr><td>Prescriptive (deemed)</td><td>Fixed amount per unit: per horsepower, per drive, per motor</td><td>VFDs on fan motors, premium efficiency motors, EC motors</td><td>Low; standard forms and spec sheets</td></tr>
<tr><td>Custom (calculated)</td><td>Amount per kWh or per therm/m³ of first-year savings, sometimes per kW demand reduced</td><td>Fan array retrofits, energy recovery, controls sequences, CV-to-VAV conversions</td><td>Higher; engineering calculations and utility review</td></tr>
<tr><td>Midstream or instant</td><td>Discount applied at the distributor; buyer sees a lower price</td><td>Motors, drives and some packaged equipment</td><td>Very low for buyer; limited to listed products</td></tr>
<tr><td>Performance-based or pay-for-performance</td><td>Payments tied to measured savings over a period after installation</td><td>Larger multi-measure projects, retro-commissioning</td><td>Highest; requires measurement and verification</td></tr>
<tr><td>Study or audit funding</td><td>Pays part of an engineering study or energy audit</td><td>Feasibility studies for AHU replacement or recovery</td><td>Moderate; often a prerequisite for custom incentives</td></tr>
</tbody>
</table>

<h2>Measures that usually qualify</h2>
<h3>Fans and motors</h3>
<p>Replacing older fans with higher-efficiency direct-drive plenum fans or fan arrays often qualifies under custom programs because the savings depend on the specific duty. Motor upgrades to premium efficiency or to EC or permanent magnet motors may be prescriptive. Programs typically require the new equipment to exceed the applicable code minimum, since code-required efficiency is considered the baseline.</p>
<h3>Variable frequency drives</h3>
<p>Adding a VFD to a fan that currently runs at constant speed or uses inlet vanes or discharge dampers is one of the most widely supported measures. Prescriptive incentives often apply when the fan serves a variable load; drives that would be required by code anyway may not qualify.</p>
<h3>Energy recovery</h3>
<p>Wheels, plates and runaround loops added to existing units can qualify for custom incentives from gas and electric utilities. Where the energy code already requires recovery for a new unit, incentives may only apply to performance beyond the requirement. Retrofit approaches are covered in <a href="<?= url('guides/retrofitting-energy-recovery-existing-ahus') ?>">retrofitting energy recovery to existing AHUs</a>.</p>
<h3>Controls and conversions</h3>
<p>Converting constant volume systems to VAV, adding demand-controlled ventilation, and implementing static pressure and supply temperature reset are common custom measures. See <a href="<?= url('guides/constant-volume-to-vav-conversion') ?>">how to convert a constant volume AHU to VAV</a>.</p>

<h2>US and Canadian differences</h2>
<p>In the US, programs are run by investor-owned utilities, municipal utilities, cooperatives and in some states by third-party program administrators. Federal tax provisions for commercial building efficiency have existed in various forms and should be checked with a tax adviser for the year in question. In Canada, programs are typically delivered by provincial electric and gas utilities or provincial efficiency agencies, with federal programs appearing periodically for specific building types or sectors. In both countries, programs differ significantly from one service territory to the next, even within a single state or province.</p>

<h2>What reviewers look for in a custom application</h2>
<p>Custom applications are reviewed by utility engineers or third-party reviewers who check that the baseline is real and the savings method is sound. Expect them to ask for measured kW on the existing fan, the operating schedule and how it was determined, the new equipment selection data at the same duty, and the calculation method. A clear, conservative calculation tends to be approved faster than an optimistic one that needs several rounds of questions.</p>

<h2>How to avoid losing an incentive</h2>
<ol>
<li><strong>Contact the program before design is final.</strong> Some programs require pre-approval, or will offer design assistance or higher incentives for early engagement.</li>
<li><strong>Do not order equipment before approval</strong> unless the program explicitly allows it. Many programs reject applications for equipment purchased before the pre-approval date.</li>
<li><strong>Record the baseline.</strong> Custom programs need proof of existing conditions: measured fan power, nameplates, operating schedules and photos. Measure before demolition.</li>
<li><strong>Keep submittals and invoices.</strong> Final payment usually requires model numbers, efficiency data, invoices and sometimes a post-installation inspection.</li>
<li><strong>Plan for verification.</strong> Larger projects may require metering after installation to confirm savings.</li>
<li><strong>Check the stacking rules.</strong> Combining utility, government and tax incentives is sometimes allowed and sometimes capped.</li>
</ol>
<p class="warn">Incentive caps, often expressed as a percentage of project cost, can limit payments on large projects. Read the program terms rather than assuming the calculated incentive will be paid in full.</p>
<p>Once the likely incentive is known, include it in the economic analysis covered in <a href="<?= url('guides/retrofit-payback-calculation') ?>">calculating payback for AHU retrofit projects</a>, counting only amounts that are pre-approved or highly likely.</p>
<?php guide_end([
    ['Are there rebates for replacing AHU fans and motors?', 'Many utilities in the US and Canada offer incentives for higher-efficiency fans, motors, drives and fan array retrofits, either as fixed prescriptive amounts or as custom incentives based on calculated savings. Terms vary by utility and change often.'],
    ['Do I need approval before buying equipment to get a utility incentive?', 'Usually yes. Most programs require an application and pre-approval before equipment is ordered or installed, and they may reject projects where purchase came first. Confirm the rules with the program administrator early.'],
    ['Do VFD retrofits qualify for incentives?', 'Adding drives to fans that serve variable loads is one of the most commonly supported measures. Drives that the energy code already requires for the application may not qualify, since code is treated as the baseline.'],
]);
