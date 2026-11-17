<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('delegated-design-responsibilities'); ?>
<p class="lede">In AHU procurement the engineer of record owns the system design and performance requirements, the manufacturer owns the design of the unit itself and any elements explicitly delegated to it, such as seismic anchorage calculations or factory controls, and the contractor owns means and methods, coordination and field work; problems arise when a delegated item is not clearly assigned, or is assigned to someone without the qualifications to carry it.</p>

<h2>What delegated design means</h2>
<p>Delegated design is the practice of assigning the detailed design of a specific component or system to a party other than the engineer of record, usually the manufacturer or a specialty contractor, with defined performance criteria. The engineer of record sets the criteria and reviews the result for general conformance; the delegated party designs to meet them, and where the work requires a professional engineer's seal, provides it through a qualified engineer licensed in the jurisdiction.</p>
<p>The delegation must be written into the contract documents. Without it, responsibility tends to fall on whoever is closest to the problem when it appears.</p>

<h2>Typical division of responsibilities</h2>
<table>
<thead><tr><th>Item</th><th>Engineer of record</th><th>Manufacturer</th><th>Contractor</th></tr></thead>
<tbody>
<tr><td>System design: loads, airflows, ventilation, energy code</td><td>Owns</td><td>—</td><td>—</td></tr>
<tr><td>Unit performance requirements</td><td>Defines on schedule and spec</td><td>Meets</td><td>—</td></tr>
<tr><td>Unit internal design: casing, fans, coils, arrangement</td><td>Reviews for conformance</td><td>Owns</td><td>—</td></tr>
<tr><td>Seismic anchorage and restraint design</td><td>Sets criteria (site parameters, importance)</td><td>Often delegated: unit certification and anchorage calcs</td><td>Installs per approved design; may carry restraint design by delegated engineer</td></tr>
<tr><td>Supporting structure: pads, dunnage, roof framing</td><td>Structural engineer of record owns</td><td>Provides loads and support points</td><td>Builds</td></tr>
<tr><td>Wind design of outdoor units</td><td>Sets criteria</td><td>Unit and attachment design, if delegated</td><td>Installs</td></tr>
<tr><td>Factory controls hardware and programming</td><td>Writes sequence of operation</td><td>Implements, if delegated</td><td>Field integration, unless assigned elsewhere</td></tr>
<tr><td>Field controls and BAS integration</td><td>Specifies</td><td>Provides interface data</td><td>Controls contractor owns</td></tr>
<tr><td>Electrical service and feeders</td><td>Electrical engineer of record owns</td><td>Provides electrical data</td><td>Electrical contractor builds</td></tr>
<tr><td>Rigging and lifting plans</td><td>—</td><td>Provides weights, lift points</td><td>Owns (means and methods)</td></tr>
<tr><td>Field assembly of knockdown units</td><td>Specifies requirements</td><td>Design, instructions, supervision as specified</td><td>Assembles unless the manufacturer is contracted to</td></tr>
</tbody>
</table>
<p class="note">This table describes common practice, not a rule. The contract documents decide, and they vary.</p>

<h2>Seismic: the most common delegated item</h2>
<p>Where the building code requires seismic design of nonstructural components, two separate questions arise. First, whether the equipment itself must be certified to remain operational or attached after a seismic event, which applies to designated equipment in essential facilities in many jurisdictions. Second, how the unit is anchored or restrained to the structure. The manufacturer typically provides certification of the unit and may provide anchorage calculations; a separate restraint designer, often working for the isolation or restraint supplier, may design the restraints and attachments to structure. The structural engineer of record confirms the structure can resist the anchorage forces.</p>
<p>Specifications should state the seismic design parameters, the equipment importance, whether certification is required and who stamps which calculations. Certification paths are covered in <a href="<?= url('guides/seismic-certification-ahus') ?>">seismic certification for AHUs</a>, and installation in <a href="<?= url('guides/seismic-restraint-installation') ?>">seismic restraint installation</a>.</p>

<h2>Controls: where gaps open up</h2>
<p>Controls are often split three ways. The engineer of record writes the sequence of operation and points list. The manufacturer may mount and wire controllers, sensors and actuators in the factory and sometimes programs them. The controls contractor integrates the unit into the building automation system and commissions the sequences. Gaps typically appear at:</p>
<ul>
<li>Who programs the factory controller, and to which sequence.</li>
<li>Who provides and wires field-mounted sensors such as duct static pressure or space sensors.</li>
<li>Who owns communication setup and point mapping.</li>
<li>Who is responsible when a sequence does not work: programming, hardware or design.</li>
</ul>
<p>A clear responsibility matrix in the controls specification closes most of these; the trade-offs are discussed in <a href="<?= url('guides/factory-mounted-vs-field-installed-controls') ?>">factory-mounted vs field-installed controls</a>.</p>

<h2>Structure and support</h2>
<p>Manufacturers design the unit's base frame to carry its own components and transfer loads to supports at specified points. They do not normally design the building structure, curbs or dunnage, unless those are specifically included in their scope. The structural engineer of record needs accurate loads and support locations from the manufacturer; when the unit changes during submittals, those loads must be reissued.</p>

<h2>Knockdown and field-assembled units</h2>
<p>Field-assembled units add a layer. The manufacturer designs the unit for field assembly and provides drawings and instructions, but the quality of the finished casing depends on who assembles it. If the contractor's crew assembles the unit, the specification should say whether the manufacturer supervises, inspects at hold points, or simply supplies parts. That choice affects warranty coverage and who is responsible if the field leakage test fails, so it needs to be stated rather than assumed.</p>

<h2>Writing delegation clauses</h2>
<ol>
<li>Name each delegated item explicitly.</li>
<li>State the performance criteria and design parameters the delegated party must meet.</li>
<li>State the qualifications required, including professional engineer licensure in the jurisdiction where needed.</li>
<li>Define what is submitted: calculations, drawings, stamped documents.</li>
<li>Define the engineer of record's review role: general conformance, not re-design.</li>
<li>Coordinate the delegation with the other disciplines' documents so no item is assigned twice or not at all.</li>
</ol>
<p class="warn">Delegating design does not transfer the engineer of record's responsibility for the overall system. Review delegated submittals for consistency with the design intent.</p>
<?php guide_end([
    ['What is delegated design in AHU procurement?', 'It is the assignment of the detailed design of a specific element, such as seismic anchorage or factory controls, to the manufacturer or a specialty contractor, with performance criteria set by the engineer of record in the contract documents.'],
    ['Who is responsible for AHU seismic restraint design?', 'It varies by contract. The engineer of record sets the seismic criteria, the manufacturer often certifies the unit and may provide anchorage calculations, a delegated engineer may design restraints, and the structural engineer confirms the structure.'],
    ['Does the AHU manufacturer design the roof curb or dunnage?', 'Not normally. The manufacturer provides loads and support points, and the structural engineer of record designs the supporting structure unless the curb or dunnage is specifically included in the manufacturer\'s scope.'],
]);
