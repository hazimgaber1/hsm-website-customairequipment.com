<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('price-escalation-tariffs'); ?>
<p class="lede">Custom air handlers are priced months before their steel, aluminum, copper and purchased components are bought, so manufacturers manage that gap with short quote validity, escalation clauses tied to published price indices, or contingency built into a fixed price, and with separate change-in-law language for tariffs and duties; owners and contractors should know which of these they are agreeing to before signing.</p>

<h2>Why AHU pricing is exposed</h2>
<p>A custom unit's cost is heavily weighted to materials: sheet steel and structural steel for casings and frames, aluminum for fins and extrusions, copper for coil tubes, and purchased components such as motors, drives and controls. Several of these are commodities whose prices can move significantly within a single project schedule. Between quotation and material purchase there may be a bid period, contract negotiation, submittal approval and a production queue. The longer that gap, the more price exposure someone carries.</p>
<p>Tariffs add a policy layer. Steel and aluminum have been subject to tariffs and retaliatory measures between Canada and the US in recent years, and purchased components may be imported from other countries with their own duty treatment. A change in duty rates after award can change costs without any change in the market price of the material itself.</p>

<h2>Common contract approaches</h2>
<table>
<thead><tr><th>Approach</th><th>How it works</th><th>Who carries the risk</th></tr></thead>
<tbody>
<tr><td>Firm fixed price with short validity</td><td>Price holds if the order is placed within a stated period, such as 30 days</td><td>Manufacturer during validity; buyer if the order is late and the price is re-quoted</td></tr>
<tr><td>Firm fixed price with contingency</td><td>Manufacturer includes an allowance for expected escalation</td><td>Manufacturer; buyer pays the contingency whether or not prices rise</td></tr>
<tr><td>Index-based escalation</td><td>Price adjusts by the change in a named price index between a base date and a purchase date</td><td>Shared transparently; buyer carries market movement</td></tr>
<tr><td>Material surcharge</td><td>Base price plus a surcharge for specific materials set at the time of purchase</td><td>Buyer for the surcharged materials</td></tr>
<tr><td>Escalation with threshold and cap</td><td>No adjustment for small changes; adjustment beyond a threshold, up to a cap</td><td>Shared within defined limits</td></tr>
<tr><td>Change-in-law or tariff clause</td><td>Price adjusts for new or changed duties, tariffs or taxes after the base date</td><td>Buyer for policy changes; manufacturer for market changes</td></tr>
</tbody>
</table>

<h2>Anatomy of an index-based escalation clause</h2>
<p>A well-written clause leaves no room for interpretation. It should define:</p>
<ul>
<li><strong>The index.</strong> A specific, published series, such as a producer price index for steel mill products or an industrial product price index for a defined commodity, from a named statistical agency (for example the US Bureau of Labor Statistics or Statistics Canada).</li>
<li><strong>The base date</strong> or base index value, usually the quote date or contract date.</li>
<li><strong>The adjustment date,</strong> typically the date materials are purchased or the release-for-production date.</li>
<li><strong>The portion of price subject to adjustment.</strong> Only the material share, not labour or engineering, should normally move.</li>
<li><strong>The formula.</strong> For example: adjusted material cost = base material cost × (index at adjustment date ÷ index at base date).</li>
<li><strong>Threshold and cap,</strong> if any, and whether adjustments apply in both directions.</li>
<li><strong>Documentation</strong> the manufacturer must provide to support the claim.</li>
</ul>
<p class="formula">Adjustment = Material portion of price × [(I_adjust ÷ I_base) − 1]</p>
<p><strong>Example.</strong> A unit is priced at $400,000, of which the contract states $160,000 is the steel-related material portion. The index rises from 300.0 at the base date to 318.0 at the adjustment date, a 6% increase. Adjustment = $160,000 × (318.0 ÷ 300.0 − 1) = $160,000 × 0.06 = $9,600. If the clause has a 3% threshold applied as a deductible, only the 3% beyond it is paid: $4,800.</p>
<p class="note">Two-way clauses, where the price also falls if the index falls, are more balanced and easier to justify to owners.</p>

<h2>Tariff and duty exposure</h2>
<p>For custom equipment, tariff risk shows up in three places:</p>
<ol>
<li><strong>On the finished unit</strong> if it crosses a border and does not qualify for duty-free treatment. Origin rules and customs procedures are covered in <a href="<?= url('guides/cross-border-shipping-canada-us') ?>">shipping custom AHUs across the Canada-US border</a>.</li>
<li><strong>On imported materials and components</strong> purchased by the manufacturer, such as steel, motors or drives, which raise the manufacturer's cost.</li>
<li><strong>On retaliatory measures</strong> that change prices for domestic materials indirectly.</li>
</ol>
<p>A change-in-law clause typically allows the price to be adjusted for duties, tariffs or taxes imposed or changed after a base date, with documentation. Contractors should flow matching clauses through to the owner; otherwise the contractor can end up carrying a cost the manufacturer has passed on.</p>
<p class="warn">Do not confuse tariff clauses with domestic content requirements. Requirements to use domestically produced iron, steel or manufactured goods on certain public projects are a separate compliance issue covered in the <a href="<?= url('guides/domestic-content-compliance-checklist') ?>">domestic content compliance checklist</a>.</p>

<h2>Practical steps for buyers</h2>
<ul>
<li>Read the validity period and escalation terms on every quote before bid day.</li>
<li>When comparing bids, normalize escalation exposure; a lower price with open escalation may cost more than a fixed price. See <a href="<?= url('guides/normalizing-ahu-bids') ?>">how to compare and normalize AHU bids</a>.</li>
<li>Shorten the exposure window: issue purchase orders promptly and review submittals quickly.</li>
<li>Consider early release of material purchases for long schedules, with an appropriate deposit.</li>
<li>Agree on an index-based clause rather than an open-ended "subject to market conditions" clause.</li>
<li>Make sure clauses in the owner contract and the supply contract match.</li>
</ul>

<h2>Practical steps for owners</h2>
<ul>
<li>Decide in advance how much escalation risk to retain, and say so in bid documents.</li>
<li>Allow for escalation in the project contingency when schedules are long.</li>
<li>Consider owner pre-purchase of equipment to lock pricing earlier.</li>
</ul>
<?php guide_end([
    ['What is an escalation clause in an AHU contract?', 'It is a provision allowing the price to change if material costs move between the quote and the material purchase date, usually by reference to a named published price index, applied only to the material portion of the price.'],
    ['How do tariffs affect custom AHU pricing?', 'Tariffs can apply to imported materials and components the manufacturer buys, and to the finished unit if it crosses a border without qualifying for duty-free treatment. Change-in-law clauses usually govern who pays for new or changed duties.'],
    ['How can I limit price escalation on an AHU order?', 'Place the order within the quote validity, review submittals promptly, negotiate an index-based clause with a threshold and cap, and consider early material release or owner pre-purchase for long schedules.'],
]);
