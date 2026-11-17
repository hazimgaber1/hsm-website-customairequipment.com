<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('coil-connection-counterflow-piping'); ?>
<p class="lede">Pipe a water coil for counterflow by bringing supply water into the header on the leaving-air side of the coil and taking return water out of the header on the entering-air side, with supply at the bottom and return at the top so the coil vents itself. Decide header orientation, connection hand and same-end or opposite-end connections at design stage, because they are built into the coil and cannot be changed in the field.</p>

<h2>Why counterflow matters</h2>
<p>In counterflow, the coldest water meets the coldest air (at the leaving face) and the warmest water meets the warmest air (at the entering face). The temperature difference between water and air stays relatively even across the coil depth, and the log mean temperature difference is as large as it can be for the given end temperatures. In parallel flow, the coldest water meets the warmest entering air, the temperature difference collapses toward the leaving face, and the coil can need noticeably more rows to deliver the same capacity, or cannot reach a close approach at all.</p>
<p>Coil selection software assumes counterflow unless told otherwise. A coil piped backward in the field will fall short of its rating, which is one reason coil connection decisions should be fixed on the drawings and in the schedule rather than left to the installer.</p>

<h2>Step-by-step: laying out coil connections</h2>
<ol>
<li><strong>Establish airflow direction</strong> on the plan for each coil. Mark which face is entering and which is leaving. Multi-coil units, stacked coils and coils in vertical units all need this explicitly.</li>
<li><strong>Assign the supply header to the leaving-air face.</strong> Supply water enters the rows nearest the leaving face and works back toward the entering face.</li>
<li><strong>Assign the return header to the entering-air face.</strong></li>
<li><strong>Put supply connections at the bottom and return at the top</strong> for water coils. Water entering low and leaving high pushes air out of the tubes toward the top of the coil, where vents are located. This also helps the coil drain when the system is shut down.</li>
<li><strong>Choose the connection hand.</strong> Determine which side of the unit the piping will approach from, based on the mechanical room layout, valve access and pipe routing. Coil hand conventions vary by manufacturer; describe the connection side in words on the schedule (for example, "connections on left side when facing the direction of airflow") rather than relying on the letters L and R alone.</li>
<li><strong>Decide same-end or opposite-end connections.</strong> Most coils use same-end connections, with both headers on one side, which keeps piping in one place. Opposite-end connections suit some long coils and stacked arrangements but double the service sides.</li>
<li><strong>Check counterflow on every coil in a stack.</strong> When two coils are stacked, each must be counterflow on its own, and the supply and return pipes for both should be arranged for balanced flow, typically reverse-return or with balancing valves.</li>
<li><strong>Locate vents and drains.</strong> Specify a vent at the highest point of the return header and a drain at the lowest point of the supply header. Both should extend outside the casing where practical.</li>
<li><strong>Show the arrangement on drawings and in the schedule.</strong> A simple coil diagram with airflow arrow, supply and return arrows, and vent and drain locations removes ambiguity for the manufacturer and the installer.</li>
</ol>

<h2>Steam coils follow different rules</h2>
<p>Steam coils are not piped for counterflow in the same sense, because steam condenses at a nearly constant temperature. Steam enters the top header and condensate leaves from the bottom, by gravity, to a trap. The connection hand still matters for layout, and the return connection must be at the bottom with the tubes pitched toward it. Treat steam and water coils as separate cases on the drawings.</p>

<h2>Header and connection details to decide early</h2>
<table>
<thead><tr><th>Decision</th><th>Typical choice</th><th>Consideration</th></tr></thead>
<tbody>
<tr><td>Connection type</td><td>Male pipe thread (MPT) for smaller coils; sweat or flanged for larger</td><td>Match the field piping material and joining method</td></tr>
<tr><td>Connection size</td><td>Set by the coil manufacturer based on flow</td><td>Do not assume connection size equals branch pipe size</td></tr>
<tr><td>Extension through casing</td><td>Headers extended outside the casing</td><td>Avoids piping and valve work inside the unit; reduces casing penetrations</td></tr>
<tr><td>Header material</td><td>Copper; steel or Cu-Ni for steam</td><td>Avoid dissimilar metal joints where possible</td></tr>
<tr><td>Vent and drain</td><td>Factory-fitted, extended outside casing</td><td>Makes winterization and filling practical</td></tr>
</tbody>
</table>
<p class="note">Casing penetrations around coil connections are a common air leakage path. Grommets or sealed sleeves at each penetration should be part of the unit design; see <a href="<?= url('guides/casing-penetration-sealing') ?>">casing penetration sealing</a>.</p>

<h2>Common mistakes that cost capacity</h2>
<ul>
<li><strong>Supply on the entering-air side.</strong> The coil runs parallel flow and misses its leaving air temperature, particularly on deep coils with close approaches.</li>
<li><strong>Supply at the top.</strong> Air collects in the coil and cannot be vented, leading to air-bound circuits and reduced capacity.</li>
<li><strong>Same hand for every coil in a double-sided unit.</strong> A unit serviced from both sides may need coils of opposite hands to suit the piping on each side.</li>
<li><strong>Connections that land behind a structural member, a door or another section.</strong> Coordinate the coil hand with the full unit layout before release.</li>
<li><strong>No room for valves and unions.</strong> Allow clearance for the control valve, isolation valves, strainer and unions that let the coil be removed.</li>
</ul>

<h2>Coordinating with the rest of the design</h2>
<p>Connection orientation interacts with coil removal: if a coil will be pulled out the side for replacement, headers on that side complicate the pull. The options for pulling coils are covered in <a href="<?= url('guides/removable-coil-design') ?>">removable coil design</a>. Venting and draining procedures after installation are covered in <a href="<?= url('guides/water-coil-venting-draining') ?>">how to vent and drain water coils</a>, and the effect of circuiting on tube velocity in <a href="<?= url('guides/coil-tube-velocity-water-pressure-drop') ?>">coil tube velocity and water pressure drop</a>.</p>
<?php guide_end([
    ['Which side of a coil should the supply water enter?', 'For counterflow, supply water should enter the header on the leaving-air side of the coil and leave from the header on the entering-air side. Supply connections are normally at the bottom and return at the top so the coil vents itself.'],
    ['What happens if a coil is piped for parallel flow?', 'The temperature difference between water and air shrinks toward the leaving face, so the coil delivers less capacity than its counterflow rating and may not reach the scheduled leaving air temperature. The loss is greatest on deep coils with close approaches.'],
    ['How do I specify coil connection hand?', 'Describe it in words relative to airflow, such as connections on the left side when facing in the direction of airflow, because manufacturers use different hand conventions. Show supply, return, vent and drain locations on a coil diagram.'],
]);
