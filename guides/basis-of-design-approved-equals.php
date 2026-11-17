<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('basis-of-design-approved-equals'); ?>
<p class="lede">A basis of design names one manufacturer and model that the drawings were coordinated around; approved equals are other manufacturers the specifier accepts as capable of meeting the same requirements; and a substitution procedure governs how anything else can be proposed, by whom, when, and who pays for the consequences.</p>

<h2>What "basis of design" really means</h2>
<p>Naming a basis-of-design (BOD) product is a coordination decision. The engineer selected a specific unit, used its dimensions, weights, connection locations and electrical data to lay out the mechanical room, size the structure and coordinate the power design, and wrote the schedule around its performance. Other bidders may still compete, but the BOD sets the reference against which their offerings are measured.</p>
<p>The BOD is not a statement that only that unit is acceptable. In most specifications it is paired with a list of other acceptable manufacturers, with a clause making those manufacturers responsible for any changes their product requires.</p>
<p class="note">Typical language: "Basis of design: [Manufacturer], model [X]. Subject to compliance with requirements, provide the basis-of-design product or a comparable product by one of the following: [list]."</p>

<h2>Approved or named equals</h2>
<p>Listing other acceptable manufacturers opens competition while keeping control over who can bid. The key phrase is "subject to compliance with requirements": a listed manufacturer still has to meet every requirement in the specification and schedule. Being listed is permission to bid, not a waiver.</p>
<p>The specification should make clear what happens when an approved equal differs physically from the BOD:</p>
<ul>
<li><strong>Dimensions.</strong> The unit must fit the space, including service clearances. If it does not, the bidder is responsible for showing how it can be made to fit.</li>
<li><strong>Weights and support.</strong> Differences in weight or point loads must be identified for structural review.</li>
<li><strong>Connections.</strong> Duct, pipe and electrical connection changes must be identified, and the bidder carries the cost of resulting changes by other trades.</li>
<li><strong>Electrical.</strong> Different power requirements must be coordinated, including conductor and protective device changes.</li>
</ul>
<p class="note">Typical language: "Where a product other than the basis of design is provided, the Contractor shall be responsible for all changes required to accommodate it, including but not limited to structural, electrical, ductwork, piping and architectural modifications, and associated design fees."</p>

<h2>Substitutions: the formal route</h2>
<p>Anything not named, whether a different manufacturer or a different construction, goes through a substitution request. Most general conditions or Division 01 sections define the procedure. Typical elements:</p>
<ol>
<li><strong>Timing.</strong> Requests are accepted only during a defined period, either before bid (prior approval) or within a set time after contract award. Late requests may be rejected outright.</li>
<li><strong>Content.</strong> The request includes a comparison with the specified product, item by item; performance data; drawings; effects on other work; cost difference; and schedule effect.</li>
<li><strong>Certification.</strong> The requester certifies that the substitute meets or exceeds the specified requirements and accepts responsibility for coordination.</li>
<li><strong>Review.</strong> The engineer evaluates and accepts or rejects, often with a fee for review time if the request is not accepted.</li>
<li><strong>Documentation.</strong> Accepted substitutions are formally recorded by addendum or change order.</li>
</ol>
<p>Pre-bid prior approval is common on public projects, where substitution after award is restricted or not allowed. Private projects may allow post-award substitutions, often tied to a credit to the owner.</p>

<h2>Comparing the three mechanisms</h2>
<table>
<thead><tr><th>Mechanism</th><th>Who decides</th><th>When</th><th>Who bears coordination cost</th></tr></thead>
<tbody>
<tr><td>Basis of design</td><td>Engineer, during design</td><td>Before bid</td><td>Design team (already coordinated)</td></tr>
<tr><td>Named equal</td><td>Engineer, by listing</td><td>Before bid</td><td>Bidder, for any differences from the BOD</td></tr>
<tr><td>Prior approval substitution</td><td>Engineer, by addendum</td><td>Before bid, by deadline</td><td>Bidder, as stated in the approval</td></tr>
<tr><td>Post-award substitution</td><td>Engineer and owner</td><td>After award, within the allowed period</td><td>Contractor, plus engineer's review cost if specified</td></tr>
</tbody>
</table>

<h2>Common problems and how to avoid them</h2>
<ul>
<li><strong>A prescriptive specification written around the BOD's proprietary features.</strong> If the clauses describe one manufacturer's construction exactly, named equals cannot comply. Write requirements in terms that equals can meet; the trade-off is discussed in <a href="<?= url('guides/performance-vs-prescriptive-specs') ?>">performance-based vs prescriptive AHU specifications</a>.</li>
<li><strong>Listing manufacturers who do not make the product type.</strong> A catalog manufacturer named for a large custom unit wastes everyone's time.</li>
<li><strong>"Or equal" with no procedure.</strong> Bare "or equal" language invites disputes about what equal means. Tie it to a substitution procedure.</li>
<li><strong>Accepting a substitute without checking coordination.</strong> A cheaper unit that is 3 ft (0.9 m) longer may cost more in structural and duct changes than it saved.</li>
<li><strong>Value engineering presented as a substitution.</strong> Changes that lower performance or construction quality should be evaluated as what they are; see <a href="<?= url('guides/value-engineering-pitfalls') ?>">when value engineering causes AHU performance problems</a>.</li>
</ul>

<h2>Public versus private procurement</h2>
<p>Public owners are often bound by procurement rules that require open competition and restrict naming a single product, so the basis of design must be paired with performance criteria that several manufacturers can meet, or with a list of named equals. Some public bodies prohibit post-bid substitutions altogether. Private owners have more latitude: they may sole-source a unit for standardization, maintenance familiarity or schedule, or accept substitutions in exchange for a credit. Know which rules apply before writing the clause.</p>

<h2>Evaluating an equal</h2>
<p>When an equal or substitute is submitted, check it against the same criteria the BOD satisfies: scheduled performance, casing performance, construction details the owner cares about, dimensional fit, weight, electrical, controls integration, sound, certifications and warranty. A side-by-side table makes the evaluation transparent and defensible. Comparing price and scope across bids is a separate step.</p>
<?php guide_end([
    ['What does basis of design mean in an AHU specification?', 'It identifies the specific manufacturer and model the design was coordinated around, including dimensions, weights, connections and electrical data. Other listed manufacturers may bid if they meet the same requirements.'],
    ['Who pays for changes when an approved equal is different from the basis of design?', 'Specifications usually make the contractor or bidder responsible for all changes needed to accommodate a non-BOD product, including structural, electrical, duct and piping changes and related design fees.'],
    ['What is the difference between an approved equal and a substitution?', 'An approved equal is named in the specification before bid. A substitution is a product not named, proposed through a formal request procedure with comparison data, often within a set time period.'],
]);
