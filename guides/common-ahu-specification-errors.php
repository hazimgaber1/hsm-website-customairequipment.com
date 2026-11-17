<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('common-ahu-specification-errors'); ?>
<p class="lede">Most AHU specification problems that turn into RFIs and change orders come from a short list of causes: the specification and schedule disagree, an old master spec references obsolete products or standards, two clauses cannot both be met, or a requirement has no measurable criterion; each can be diagnosed from the symptom it produces during bidding or submittals.</p>

<h2>Diagnosing from the symptom</h2>
<p>Specification errors show themselves through what bidders and manufacturers do. The table below links common symptoms to their likely cause.</p>
<table>
<thead><tr><th>Symptom</th><th>Likely cause</th><th>Check</th><th>Fix</th></tr></thead>
<tbody>
<tr><td>Many RFIs asking which value governs</td><td>Schedule and specification disagree</td><td>Compare scheduled values with specification text</td><td>Put performance on schedule only; spec refers to it</td></tr>
<tr><td>All bidders take the same exception</td><td>Requirement that no manufacturer meets, or obsolete product</td><td>Ask manufacturers informally whether they can comply</td><td>Update clause to current practice</td></tr>
<tr><td>Widely different prices</td><td>Ambiguous scope or performance</td><td>Read bid qualifications to find differing interpretations</td><td>Clarify by addendum before bid</td></tr>
<tr><td>Submittal complies on paper but disappoints</td><td>Requirement not measurable</td><td>Look for words like "high quality" or "heavy duty"</td><td>Replace with numbers and test methods</td></tr>
<tr><td>Change orders for items "not shown"</td><td>Scope split between sections unclear</td><td>Check related sections for gaps or overlaps</td><td>Add a responsibility matrix</td></tr>
<tr><td>Code reviewer rejects compliant submittal</td><td>Outdated code or standard edition</td><td>Compare references with adopted editions</td><td>Update references</td></tr>
</tbody>
</table>

<h2>Conflicts between the schedule and the specification</h2>
<p>The most frequent single cause. Typical conflicts:</p>
<ul>
<li>Specification limits coil face velocity to 450 fpm while the schedule's coil dimensions give 520 fpm at scheduled airflow.</li>
<li>Specification requires premium-efficiency induction motors with VFDs; schedule calls for EC motors.</li>
<li>Specification requires MERV 14 final filters; schedule lists MERV 13.</li>
<li>Specification says double-wall 2 in. panels; schedule notes 4 in. panels for outdoor units without a matching clause.</li>
<li>Schedule shows single-point power; specification requires separate feeders for each fan.</li>
</ul>
<p><strong>Fix:</strong> decide where each kind of information lives. Performance data on the schedule; construction requirements in the specification; and an order-of-precedence clause for any remaining conflict. A complete set of schedule fields is in <a href="<?= url('guides/ahu-equipment-schedule-fields') ?>">AHU equipment schedule: required fields</a>.</p>

<h2>Outdated clauses from office masters</h2>
<p>Office master specifications accumulate clauses over years. Symptoms include requirements for products no longer made, references to superseded standard editions, and construction details no longer used. Examples:</p>
<ul>
<li>References to motor efficiency designations that have been replaced by newer classifications.</li>
<li>Filter efficiency stated by an older test method rather than MERV per ASHRAE 52.2 or ISO 16890 classes.</li>
<li>Fan rating requirements that do not mention fan energy index (FEI) where it is now used in codes.</li>
<li>Code references (for example to an energy code edition) that do not match the edition adopted for the project.</li>
<li>Requirements for inlet vanes on VAV fans.</li>
</ul>
<p><strong>Fix:</strong> review the master at least annually and edit every project copy to remove clauses that do not apply. Ask a manufacturer to read a draft; they see these issues across many projects.</p>

<h2>Clauses that cannot both be met</h2>
<p>Some conflicts are internal to the specification:</p>
<ul>
<li>A prescriptive panel gauge that cannot achieve the scheduled deflection at the scheduled pressure.</li>
<li>A required casing leakage class paired with construction details (such as a specific removable panel system) that cannot achieve it.</li>
<li>A maximum unit length that cannot accommodate the specified components and clearances.</li>
<li>A sound power limit that cannot be met with the scheduled fan duty and without attenuators, while attenuators are not specified.</li>
<li>A requirement for AHRI certification on a unit type or size that falls outside the certification program's scope.</li>
</ul>
<p><strong>Fix:</strong> test the specification against a real selection before issue. If the basis-of-design unit cannot meet every clause, others will not either. The trade-off between prescriptive and performance clauses is discussed in <a href="<?= url('guides/performance-vs-prescriptive-specs') ?>">performance-based vs prescriptive AHU specifications</a>.</p>

<h2>Unmeasurable requirements</h2>
<p>Phrases that cannot be verified invite the minimum interpretation:</p>
<ul>
<li>"Casing shall be airtight." Replace with a leakage class at a test pressure.</li>
<li>"Unit shall be quiet." Replace with sound power limits by octave band and path.</li>
<li>"Coils shall be of heavy-duty construction." Replace with tube wall thickness, fin material and thickness, and casing material.</li>
<li>"Fans shall be efficient." Replace with minimum FEI, maximum input power or efficiency at the duty.</li>
<li>"Provide adequate access." Replace with door sizes and locations by section.</li>
</ul>

<h2>Scope gaps and overlaps between sections</h2>
<p>AHU work touches many sections: controls, electrical, testing and balancing, commissioning, vibration isolation, seismic restraint, insulation. Typical gaps:</p>
<ul>
<li>Who provides and installs duct smoke detectors.</li>
<li>Who furnishes VFDs and who mounts them.</li>
<li>Who provides the condensate trap.</li>
<li>Who programs factory controllers.</li>
<li>Who supplies and installs field sensors such as duct static pressure.</li>
</ul>
<p><strong>Fix:</strong> include a responsibility matrix listing each item with the party that furnishes it and the party that installs it, and reference the same matrix in each related section. Who designs which elements is covered in <a href="<?= url('guides/delegated-design-responsibilities') ?>">delegated design responsibilities in AHU procurement</a>.</p>

<h2>A pre-issue check</h2>
<ol>
<li>Compare every scheduled value with every related clause.</li>
<li>Check each standard and code reference against the adopted edition.</li>
<li>Run the basis-of-design selection against every requirement.</li>
<li>Search for vague words and replace them.</li>
<li>Review the responsibility matrix with the other disciplines.</li>
</ol>
<?php guide_end([
    ['What causes most AHU specification RFIs?', 'The most common cause is conflict between the schedule and the specification text, followed by outdated master clauses, requirements that cannot all be met together, vague wording and scope gaps between sections.'],
    ['How do I avoid conflicts between the AHU schedule and spec?', 'Keep performance values only on the schedule and construction requirements in the specification, have the specification refer to the schedule, and include an order-of-precedence clause for remaining conflicts.'],
    ['Why test a specification against a real selection?', 'If the basis-of-design unit cannot meet every clause, no bidder can. Running a real selection before issue exposes impossible combinations like deflection limits that a prescribed panel gauge cannot achieve.'],
]);
