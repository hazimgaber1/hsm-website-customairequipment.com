<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('normalizing-ahu-bids'); ?>
<p class="lede">To compare air handler bids fairly, line every quote up against one scope and one set of performance criteria, add the cost of anything a bidder left out, subtract anything extra, and adjust for performance shortfalls, so the final comparison reflects what each bidder would actually cost for the same delivered unit.</p>

<h2>Step 1: Build the comparison template before bids arrive</h2>
<ol>
<li><strong>List the scope items</strong> from the specification and schedule: unit, each component, controls, VFDs, disconnects, factory tests, witness tests, startup, field supervision, training, spare filters, extended warranty, freight, rigging assistance, BIM model.</li>
<li><strong>List the performance criteria</strong> that will be compared: airflow, external static, fan power, coil capacities and face velocities, casing leakage and thermal performance, sound power, dimensions and weight.</li>
<li><strong>Define commercial terms</strong> to compare: delivery terms, payment terms, lead time, validity period, escalation clauses, warranty start and duration.</li>
<li><strong>Set up a spreadsheet</strong> with one column per bidder and one row per item, plus a notes column.</li>
</ol>
<p class="note">Sending bidders a standard bid form with the same line items reduces normalization work dramatically. Many differences between quotes come from bidders organizing their scope differently.</p>

<h2>Step 2: Read every quote line by line</h2>
<ol start="5">
<li>Enter each bidder's price, with what is included, excluded or not mentioned against each scope item.</li>
<li>Read the exceptions and clarifications carefully. These often change the scope more than the main price does.</li>
<li>Note items that are "by others," "optional" or "available at additional cost."</li>
<li>Note assumptions about site conditions, voltage, access or schedule.</li>
<li>Record the validity date and any escalation or tariff clauses; their implications are covered in <a href="<?= url('guides/price-escalation-tariffs') ?>">steel price escalation and tariff clauses</a>.</li>
</ol>

<h2>Step 3: Level the scope</h2>
<ol start="10">
<li><strong>Add missing scope.</strong> For each item a bidder excluded, add the cost of providing it, either from that bidder's option pricing or from a reasonable estimate. Mark estimates clearly.</li>
<li><strong>Remove extra scope.</strong> If a bidder included something not required, such as an upgraded warranty or extra filters, either remove its cost or note that it adds value.</li>
<li><strong>Adjust for "by others" items.</strong> If one bidder supplies VFDs and another excludes them, add the cost of VFDs plus installation to the second bidder.</li>
<li><strong>Adjust for freight and delivery terms.</strong> Put all bids on the same delivery basis, including cross-border duties and brokerage where they apply.</li>
</ol>

<h2>Step 4: Level the performance</h2>
<ol start="14">
<li><strong>Check compliance</strong> with each scheduled value. Mark any bid that does not meet a requirement.</li>
<li><strong>Decide how to treat non-compliance.</strong> Some deviations are disqualifying (insufficient capacity, wrong listing); others can be priced (for example, a casing that needs an upgraded floor).</li>
<li><strong>Compare fan power.</strong> Two bids that both meet airflow and static may differ in fan input power. Calculate the annual energy difference with the method in <a href="<?= url('guides/comparing-fan-energy-between-bids') ?>">comparing fan energy between AHU bids</a>.</li>
<li><strong>Compare physical fit.</strong> A unit that is larger or heavier may require structural, rigging or architectural changes. Estimate those costs.</li>
<li><strong>Compare sound.</strong> A unit with higher sound power may need added attenuation. Estimate that cost.</li>
</ol>

<h2>Step 5: Assemble the levelled comparison</h2>
<table>
<thead><tr><th>Line</th><th>Bidder A</th><th>Bidder B</th><th>Bidder C</th></tr></thead>
<tbody>
<tr><td>Base price as quoted</td><td>$420,000</td><td>$385,000</td><td>$441,000</td></tr>
<tr><td>Add: VFDs excluded</td><td>—</td><td>+$28,000</td><td>—</td></tr>
<tr><td>Add: witness test excluded</td><td>+$6,000</td><td>+$6,000</td><td>—</td></tr>
<tr><td>Add: startup excluded</td><td>—</td><td>+$4,500</td><td>—</td></tr>
<tr><td>Add: structural changes for heavier unit</td><td>—</td><td>+$12,000</td><td>—</td></tr>
<tr><td>Deduct: extended warranty not required</td><td>—</td><td>—</td><td>−$9,000</td></tr>
<tr><td>Levelled first cost</td><td>$426,000</td><td>$435,500</td><td>$432,000</td></tr>
<tr><td>Annual fan energy difference vs. lowest</td><td>+$2,100/yr</td><td>+$3,400/yr</td><td>$0</td></tr>
</tbody>
</table>
<p>In this illustrative example, Bidder B had the lowest quoted price but the highest levelled cost. The three levelled first costs are within about 2% of each other, so the energy difference and commercial terms may decide the award. Whether to roll energy into a full life-cycle comparison is a separate decision; the method is in <a href="<?= url('guides/ahu-life-cycle-cost-analysis') ?>">AHU life-cycle cost analysis</a>.</p>

<h2>Step 6: Clarify before deciding</h2>
<ol start="19">
<li>Send each bidder written questions about unclear items. Give all bidders the same opportunity to clarify.</li>
<li>Do not reveal one bidder's pricing to another.</li>
<li>Update the levelling sheet with written responses only, not verbal assurances.</li>
<li>Record the basis of the final recommendation, including any qualitative factors such as service presence, factory testing capability or past performance.</li>
</ol>

<h2>Qualitative factors worth scoring</h2>
<p>After the numbers are levelled, some differences remain that do not fit in a price column. Record them in a short scored table so the recommendation is transparent: service and parts availability in the region, factory testing and witness test capability, experience with similar applications, submittal quality and responsiveness during the bid, warranty and claims process, and lead time reliability. Weight each factor before reading the bids, not after, so the scoring is not shaped to favour a preferred bidder.</p>

<h2>Common normalization mistakes</h2>
<ul>
<li>Comparing quoted prices without reading exclusions.</li>
<li>Treating "not mentioned" as "included."</li>
<li>Ignoring delivery terms and duties on cross-border bids.</li>
<li>Comparing selections at different filter pressure drop assumptions.</li>
<li>Failing to price installation consequences of larger units.</li>
<li>Letting bid validity expire during levelling, forcing re-pricing.</li>
<li>Applying an estimate for an excluded item to one bidder but not checking whether the same item is buried in another bidder's clarifications.</li>
<li>Discarding a non-compliant bid that could have complied with a small, priced change.</li>
</ul>
<?php guide_end([
    ['How do you normalize AHU bids?', 'Put every quote on the same scope and performance basis: add the cost of excluded items, remove extras, adjust delivery terms, price performance shortfalls and installation consequences, then compare the levelled totals.'],
    ['Why is the lowest AHU bid not always the cheapest?', 'Low bids often exclude items like VFDs, startup or testing, or offer units that need structural or acoustic changes. Once those costs are added, the levelled cost may be higher than a bid that looked more expensive.'],
    ['Should fan energy be part of bid comparison?', 'Yes, when bids differ in fan input power at the same duty. Calculating the annual energy difference shows whether a lower first cost will be offset by higher operating cost.'],
]);
