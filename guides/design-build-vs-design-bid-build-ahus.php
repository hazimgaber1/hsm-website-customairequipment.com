<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('design-build-vs-design-bid-build-ahus'); ?>
<p class="lede">In design-bid-build the owner's engineer selects and specifies the air handlers before contractors price them, so the owner controls quality but carries the risk of design errors; in design-build one entity designs and builds, so the AHU is often selected with cost and schedule in mind by the party that bears the risk, and the owner's control shifts to the performance requirements written into the contract.</p>

<h2>How the delivery method shapes AHU selection</h2>
<p>The delivery method decides who chooses the air handler, when, and with what incentives. In design-bid-build (DBB), the engineer of record picks a basis-of-design unit during design, writes the specification and schedule, and contractors bid on that. In design-build (DB), the design-builder, often a mechanical contractor teamed with an engineer or a general contractor leading a team, selects the unit as part of its own design, usually after the contract price or a guaranteed maximum price is set. Variants such as construction manager at risk (CMAR) and integrated project delivery (IPD) sit between these.</p>

<h2>Side-by-side</h2>
<table>
<thead><tr><th>Factor</th><th>Design-bid-build</th><th>Design-build</th></tr></thead>
<tbody>
<tr><td>Who selects the AHU</td><td>Owner's engineer, before bid</td><td>Design-builder's team, after award</td></tr>
<tr><td>Owner control over construction quality</td><td>High; detailed specification</td><td>Through owner's project requirements and performance criteria</td></tr>
<tr><td>Design errors and omissions risk</td><td>Owner carries it (through engineer)</td><td>Design-builder carries it</td></tr>
<tr><td>Price certainty at contract</td><td>Bid price for a complete design; changes add cost</td><td>Price set early on incomplete design; scope defined by performance</td></tr>
<tr><td>Schedule</td><td>Sequential: design, bid, then procurement</td><td>Overlapped; long-lead equipment can be ordered early</td></tr>
<tr><td>Manufacturer involvement</td><td>Mostly at bid and submittal stage</td><td>Often early, collaborating on selection</td></tr>
<tr><td>Incentive in selection</td><td>Engineer optimizes for owner's criteria</td><td>Design-builder balances owner criteria against cost within its price</td></tr>
<tr><td>Change cost</td><td>Owner-driven changes priced as change orders</td><td>Owner changes to performance requirements priced; design detail changes absorbed by design-builder</td></tr>
</tbody>
</table>

<h2>Risk allocation for the air handlers</h2>
<h3>Design-bid-build</h3>
<p>The owner, through the engineer, takes responsibility for the unit being right for the job. If the specified coil is too small or the fan cannot meet the real duct static, the contractor built what was specified, and the fix is a change order. In exchange, the owner gets exactly the construction specified, and competing bidders price the same scope, which makes bids easier to compare.</p>
<p>The risk in DBB is gaps and conflicts in the documents. Contractors bid what is written, and any ambiguity tends to be resolved toward the lower-cost interpretation. Clear specifications matter; see <a href="<?= url('guides/common-ahu-specification-errors') ?>">common AHU specification errors and conflicts</a>.</p>
<h3>Design-build</h3>
<p>The design-builder carries design risk: if the AHU does not perform, it is their problem to fix. That is attractive to owners, but it changes the incentive. The design-builder priced the job before the design was complete and gains from finding lower-cost solutions within the performance requirements. A unit that meets the airflow and capacity on paper but has higher fan power, a less airtight casing or poorer access may be chosen unless the owner's requirements prevent it.</p>
<p class="note">In design-build, the owner's project requirements are the specification. Write them with measurable criteria for the things the owner values: fan energy, casing leakage, coil face velocity limits, access, redundancy, materials in wet sections and sound.</p>

<h2>Schedule and long-lead equipment</h2>
<p>Custom air handlers can be among the longest-lead items on a project. DBB is sequential: the unit cannot be ordered until design is complete, the bid is awarded and submittals are approved. DB allows early engagement and early release of equipment, which can save months. DBB owners sometimes achieve a similar effect by pre-purchasing air handlers directly and assigning the contract to the contractor. The drivers of lead time are covered in <a href="<?= url('guides/ahu-lead-times-procurement') ?>">AHU lead times and procurement timelines</a>.</p>

<h2>Quality and life-cycle outcomes</h2>
<p>Neither method guarantees a good or bad outcome. DBB delivers what the engineer specified, so quality reflects the specification. DB delivers what the design-builder chose within the owner's requirements, so quality reflects how well those requirements captured the owner's priorities. Owners focused on long-term operating cost should, in either method, require life-cycle cost or energy comparisons for the air handlers; the method is in <a href="<?= url('guides/ahu-life-cycle-cost-analysis') ?>">AHU life-cycle cost analysis</a>.</p>

<h2>Choosing a method for AHU-heavy projects</h2>
<ul>
<li><strong>Favour design-bid-build</strong> when the owner has strong preferences on construction details, an in-house design standard, the time for sequential delivery, and procurement rules that favour competitive bidding on complete documents.</li>
<li><strong>Favour design-build</strong> when schedule is critical, the owner prefers single-point responsibility, and the owner can write clear performance requirements and verify them.</li>
<li><strong>Consider hybrids:</strong> progressive design-build with an open-book price after design development, CMAR with early manufacturer involvement, or owner pre-purchase of air handlers within DBB.</li>
</ul>

<h2>Where manufacturers fit in each method</h2>
<p>In design-bid-build, manufacturers support the engineer during design with selections and budget prices, then compete at bid through contractors. Their influence on the final selection is limited to what the specification allows. In design-build and progressive design-build, a manufacturer may be engaged directly by the design-builder early, sometimes before schematic design is complete, and contribute to the arrangement, cross-section and component choices. That early involvement can produce better-fitting units and shorter schedules, but the owner should still see the selection data and confirm it meets their requirements.</p>

<h2>Practical tips for either method</h2>
<ol>
<li>Define the owner's non-negotiables for the air handlers early.</li>
<li>Require factory testing and acceptance criteria regardless of who selects the unit.</li>
<li>Require submittals to show compliance clause by clause.</li>
<li>Involve the facility operations team in reviewing access and maintainability.</li>
<li>Keep the commissioning agent independent of the design and construction team.</li>
</ol>
<?php guide_end([
    ['Who selects the AHU in design-build?', 'The design-builder\'s team selects it after the contract is awarded, guided by the owner\'s project requirements. In design-bid-build, the owner\'s engineer selects and specifies it before bidding.'],
    ['Is design-build faster for projects with custom air handlers?', 'Often yes, because long-lead equipment can be engaged and released early instead of waiting for complete design and bid. Design-bid-build owners can gain some of this by pre-purchasing equipment.'],
    ['How does an owner control AHU quality in design-build?', 'Through clear, measurable performance requirements in the contract, such as fan energy, casing leakage, face velocity limits, access, redundancy and materials, plus submittal review and factory or field testing.'],
]);
