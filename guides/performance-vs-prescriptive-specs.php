<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('performance-vs-prescriptive-specs'); ?>
<p class="lede">A performance specification tells the manufacturer what the air handler must achieve and lets them decide how; a prescriptive specification tells them how to build it; most good AHU specifications combine the two, using performance language where outcomes can be measured and prescriptive language where construction details matter to the owner and cannot be verified later.</p>

<h2>Two ways to say what you want</h2>
<p><strong>Performance-based</strong> clauses define outcomes: "casing leakage shall not exceed the scheduled class at the scheduled pressure," "fan array shall deliver scheduled airflow with any one fan out of service," "radiated sound power shall not exceed the scheduled values." The manufacturer chooses materials, gauges and methods to meet them.</p>
<p><strong>Prescriptive</strong> clauses define means: "panels shall be 2 in. double-wall with 18 gauge galvanized outer skin and 20 gauge galvanized inner skin," "coils shall have 0.020 in. copper tubes and aluminum fins at no more than 10 fins per inch," "floor shall be welded 14 gauge stainless steel." Compliance is checked by inspection rather than by test.</p>
<p>Neither is inherently better. Each moves different risks to different parties.</p>

<h2>Comparison</h2>
<table>
<thead><tr><th>Factor</th><th>Performance-based</th><th>Prescriptive</th></tr></thead>
<tbody>
<tr><td>Who carries design risk</td><td>Manufacturer, for meeting the outcome</td><td>Specifier, for the result of the prescribed construction</td></tr>
<tr><td>Competition and innovation</td><td>Wider; manufacturers can use their best methods</td><td>Narrower; may exclude equal or better methods</td></tr>
<tr><td>Verification</td><td>Requires testing or certified data</td><td>Visual inspection, measurement, submittal check</td></tr>
<tr><td>Bid comparability</td><td>Harder; different solutions at different prices</td><td>Easier; everyone prices the same construction</td></tr>
<tr><td>Specifier effort</td><td>Must define measurable criteria and test methods</td><td>Must understand construction in detail</td></tr>
<tr><td>Risk if poorly written</td><td>Outcomes too loose or untestable; low-quality solutions comply</td><td>Outdated details, conflicts with outcomes, inadvertent sole-sourcing</td></tr>
<tr><td>Fit for durability and serviceability</td><td>Weak; hard to test for long-term durability at bid</td><td>Strong; materials and details can be fixed</td></tr>
</tbody>
</table>

<h2>Risks of performance-only specifications</h2>
<p>Performance language works when the outcome can be measured, the test method is defined and the acceptance criterion is clear. It fails when:</p>
<ul>
<li><strong>The outcome is not testable at acceptance.</strong> "Panels shall resist corrosion for the life of the unit" cannot be verified at startup. Materials and coatings need prescriptive definition.</li>
<li><strong>The test method is missing.</strong> "Low casing leakage" without a pressure, a test standard and a limit is unenforceable.</li>
<li><strong>The owner cares about how, not only what.</strong> Hygienic construction, cleanable surfaces, welded drain pans and access door locations are owner preferences that a performance clause will not secure.</li>
<li><strong>Bidders meet the minimum.</strong> A unit that just meets every performance number may be less robust than the specifier pictured.</li>
</ul>

<h2>Risks of prescriptive-only specifications</h2>
<p>Fully prescriptive specifications have their own problems:</p>
<ul>
<li><strong>They can conflict with performance.</strong> A prescribed panel gauge may not meet a scheduled deflection at a higher casing pressure. When a conflict arises, it is not clear which governs.</li>
<li><strong>They age.</strong> Clauses copied from older masters may reference obsolete materials or construction that no manufacturer still uses, generating RFIs and substitution requests.</li>
<li><strong>They can sole-source by accident.</strong> Describing one manufacturer's proprietary construction in detail may exclude equivalent products.</li>
<li><strong>They move design responsibility.</strong> If the prescribed construction fails to perform, the manufacturer can argue they built what was specified.</li>
</ul>
<p>Many of the clause conflicts described here show up in RFIs; see <a href="<?= url('guides/common-ahu-specification-errors') ?>">common AHU specification errors and conflicts</a>.</p>

<h2>A practical hybrid</h2>
<p>Use each approach where it is strong:</p>
<table>
<thead><tr><th>Item</th><th>Recommended approach</th><th>Why</th></tr></thead>
<tbody>
<tr><td>Airflow, static, capacities</td><td>Performance (schedule)</td><td>Measurable at startup and in testing</td></tr>
<tr><td>Casing leakage and deflection</td><td>Performance with test method</td><td>Testable in factory and field; see AHRI 1350 for casing performance classes</td></tr>
<tr><td>Fan efficiency and energy</td><td>Performance (FEI, kW, or efficiency)</td><td>Certified ratings exist</td></tr>
<tr><td>Sound</td><td>Performance (octave band sound power)</td><td>Rated data available</td></tr>
<tr><td>Materials in wet sections</td><td>Prescriptive</td><td>Durability not testable at acceptance</td></tr>
<tr><td>Floors, drain pans, access</td><td>Prescriptive</td><td>Owner's maintenance and hygiene priorities</td></tr>
<tr><td>Coil tube and fin construction</td><td>Mostly prescriptive, with performance for capacity</td><td>Durability and cleanability</td></tr>
<tr><td>Controls scope and points</td><td>Prescriptive</td><td>Integration requirements are specific</td></tr>
</tbody>
</table>
<p class="note">When combining approaches, include an order-of-precedence clause stating that where a prescriptive requirement and a performance requirement conflict, the more stringent result governs, and the manufacturer must notify the engineer at submittal.</p>

<h2>Example: one requirement written both ways</h2>
<p>Consider casing tightness. Prescriptive: "Panels shall be joined with continuous closed-cell gaskets and sealed at all seams with manufacturer-approved sealant; access doors shall have double gaskets." Performance: "Casing leakage shall not exceed the scheduled class when tested at the scheduled pressure, positive and negative sections tested separately, with results submitted from the factory test." The first tells the inspector what to look for but not whether the unit will be tight. The second gives a number that can fail. Many specifications use both, and that is reasonable: the details guard durability, and the test guards the result.</p>

<h2>Verification determines everything</h2>
<p>A performance requirement is only as good as its verification. For every performance clause, state how it will be proven: certified rating, factory test, witnessed test, or field test, and what happens if it fails. Factory testing for airflow, leakage and sound is planned as described in <a href="<?= url('guides/factory-witness-testing') ?>">how to plan a factory witness test</a>. Basis-of-design and substitution clauses are a different tool for controlling quality and are covered in <a href="<?= url('guides/basis-of-design-approved-equals') ?>">basis of design, approved equals and substitutions</a>.</p>
<?php guide_end([
    ['What is a performance-based AHU specification?', 'It defines the outcomes the unit must achieve, such as airflow, casing leakage, sound and efficiency, and lets the manufacturer choose how to achieve them. Each outcome needs a test method and acceptance criterion.'],
    ['When should an AHU specification be prescriptive?', 'Use prescriptive language for items that cannot be tested at acceptance or that reflect owner preferences, such as materials in wet sections, welded floors, drain pans, access arrangements and coil construction.'],
    ['What happens when performance and prescriptive clauses conflict?', 'Without a precedence clause, it is unclear which governs, leading to RFIs and disputes. Include a clause stating the more stringent requirement governs and requiring the manufacturer to flag conflicts at submittal.'],
]);
