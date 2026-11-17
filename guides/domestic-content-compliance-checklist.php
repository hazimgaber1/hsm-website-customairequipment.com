<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('domestic-content-compliance-checklist'); ?>
<p class="lede">Publicly funded projects in the US and Canada often require proof that air handlers and other manufactured products meet domestic content rules. Use this checklist to identify which rule applies, what the manufacturer must document, and what the contractor must keep on file before the equipment is released for production.</p>

<h2>Identify which program applies</h2>
<p>Domestic content requirements come from the funding source, not from the building code. One project can be subject to more than one regime. Confirm the applicable rule with the owner's procurement or grants office before bidding.</p>
<table>
<thead><tr><th>Program</th><th>Typical trigger</th><th>Core test for manufactured products</th></tr></thead>
<tbody>
<tr><td>Buy American Act (federal direct procurement, FAR Part 25)</td><td>Federal agency is the buyer</td><td>Manufactured in the US, with domestic component cost above a threshold that increases over time; some trade agreements waive it</td></tr>
<tr><td>Build America, Buy America Act (BABA)</td><td>Federal financial assistance for infrastructure, through grants or loans to states, cities, utilities and others</td><td>Manufactured in the US, with domestic component cost above the threshold in OMB guidance; iron and steel must be fully domestic</td></tr>
<tr><td>American Iron and Steel (AIS)</td><td>Certain water infrastructure funding</td><td>Iron and steel products produced in the US</td></tr>
<tr><td>Agency-specific rules (transit, highways, aviation)</td><td>Funding through those agencies</td><td>Rules specific to each program</td></tr>
<tr><td>Canadian public procurement</td><td>Federal, provincial or municipal purchasing</td><td>Trade agreements (CFTA, CUSMA, CETA and others) govern openness; some programs add Canadian content preferences</td></tr>
</tbody>
</table>
<p class="note">Percentage thresholds for the Buy American Act and BABA have been revised, and some are scheduled to step up. Use the threshold stated in the contract or funding agreement, not a figure from memory.</p>

<h2>Pre-bid checklist</h2>
<ul>
<li>☐ Funding sources for the project identified, including any federal pass-through money.</li>
<li>☐ Contract clauses on domestic content located and read (FAR clauses, BABA terms in the grant agreement, provincial procurement terms).</li>
<li>☐ Whether a waiver has been issued or is planned for the project, and what it covers.</li>
<li>☐ Whether the AHU is classified as a manufactured product, or as part of a larger system, under the applicable guidance.</li>
<li>☐ Whether iron and steel requirements apply separately to structural parts such as base frames and curbs.</li>
<li>☐ Required form of certification identified: manufacturer's letter, component cost breakdown, or agency-specific form.</li>
<li>☐ Bid forms include space to state compliance or request a waiver.</li>
</ul>

<h2>Manufacturer documentation checklist</h2>
<ul>
<li>☐ Location of final manufacturing identified: the plant where the AHU is assembled into its final form.</li>
<li>☐ Component list with cost of each component and country of origin, sufficient to calculate the domestic content percentage.</li>
<li>☐ Treatment of major purchased components recorded: motors, fans, VFDs, coils, filters, dampers, controls, panels and insulation.</li>
<li>☐ Iron and steel content traced where required, including mill certifications for steel used in casings and frames.</li>
<li>☐ Signed certification letter on company letterhead referencing the specific project and contract.</li>
<li>☐ Statement of how components of unknown origin were treated (normally as non-domestic).</li>
<li>☐ Records retained for the period required by the contract, available for audit.</li>
</ul>
<p class="warn">A general "Made in USA" or "Made in Canada" statement is not the same as a program-compliant certification. Auditors look for a component cost calculation tied to the specific order.</p>

<h2>Design and specification checklist</h2>
<ul>
<li>☐ Specification sections reference the applicable domestic content clause.</li>
<li>☐ Proprietary components that are only available from foreign sources are identified early; consider alternates or a waiver request.</li>
<li>☐ Cross-border supply chains considered: a Canadian-built unit may not meet BABA without a waiver, and a US-built unit may face different treatment on a Canadian public job. See <a href="<?= url('guides/cross-border-shipping-canada-us') ?>">cross-border shipping between Canada and the US</a>.</li>
<li>☐ Basis-of-design and approved equal language does not conflict with domestic content limits.</li>
<li>☐ Submittal requirements include the domestic content certification so it is reviewed before release for fabrication.</li>
</ul>

<h2>Waiver checklist</h2>
<p>Waivers are typically available on public interest, non-availability, or unreasonable cost grounds. Each program has its own process and timing.</p>
<ul>
<li>☐ Basis for waiver identified and supported with market evidence (quotes, supplier statements).</li>
<li>☐ Waiver request submitted through the owner to the funding agency; contractors usually cannot apply directly.</li>
<li>☐ Public comment periods and approval time allowed in the schedule.</li>
<li>☐ Approved waiver scope matches the products actually supplied.</li>
</ul>

<h2>Component cost checklist for a typical AHU</h2>
<p>The domestic content percentage is calculated on component cost, so the large purchased items decide the result. Review each before committing to a design:</p>
<ul>
<li>☐ Fans and fan wheels: origin of the wheel and housing, not just the assembly location.</li>
<li>☐ Motors: many motor lines are imported; domestic options may affect lead time and price.</li>
<li>☐ VFDs and EC controllers: often the largest single non-domestic cost in a fan array unit.</li>
<li>☐ Coils: origin of tube, fin and header materials as well as coil assembly.</li>
<li>☐ Casing steel and base frame: mill origin where iron and steel rules apply.</li>
<li>☐ Energy recovery wheels and plate exchangers: frequently imported cores.</li>
<li>☐ Controls, sensors and dampers: confirm origin of actuators and controllers.</li>
</ul>

<h2>Close-out and audit readiness</h2>
<ul>
<li>☐ Final certification matches the as-built unit, including any component substitutions made during production.</li>
<li>☐ Substitutions reviewed for impact on content percentage before approval.</li>
<li>☐ Certification letters filed with the contract record.</li>
<li>☐ Nameplate and shipping documents consistent with the stated place of manufacture.</li>
</ul>
<p>Tariffs and trade duties affect price and are a separate subject from domestic content eligibility; they are covered in <a href="<?= url('guides/price-escalation-tariffs') ?>">price escalation and tariffs</a>. For the overall submittal process, see <a href="<?= url('guides/ahu-submittal-review-checklist') ?>">the AHU submittal review checklist</a>.</p>
<?php guide_end([
    ['Does BABA apply to air handlers?', 'BABA applies to manufactured products used in infrastructure projects funded by federal financial assistance. Air handlers are generally treated as manufactured products, so they must meet the domestic manufacturing and component cost tests unless a waiver applies.'],
    ['What is the difference between the Buy American Act and BABA?', 'The Buy American Act applies when a federal agency buys directly. BABA applies to infrastructure projects funded through federal financial assistance such as grants and loans to states and municipalities. The documentation and thresholds differ.'],
    ['Can a Canadian-built AHU be used on a BABA project?', 'Not normally without a waiver, because BABA requires manufacture in the United States. Check the funding agreement and any project-specific waivers before bidding.'],
    ['What documents does a manufacturer provide for domestic content?', 'Typically a signed certification letter for the specific project, supported by a component list with costs and countries of origin, and mill certifications where iron and steel requirements apply.'],
]);
