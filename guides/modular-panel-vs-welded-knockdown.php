<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('modular-panel-vs-welded-knockdown'); ?>
<p class="lede">Bolted modular panel systems assemble faster, need fewer specialized trades on site and suit very tight access routes, while welded-frame knockdown units give a stiffer structure and more dependable long-term tightness at the cost of hot work, longer field time and heavier pieces.</p>

<h2>The two construction families</h2>
<p><strong>Bolted modular panel construction</strong> uses a standardized frame of extruded or formed members joined with bolted corner pieces, and double-wall panels that fasten to the frame with gaskets. Every joint is mechanical. Pieces are light, repeatable and can often be carried by two people.</p>
<p><strong>Welded-frame knockdown construction</strong> uses structural steel members for the base and often for the main frame, shipped in lengths that suit the access route and welded together on site. Panels may still be bolted to the welded frame, and floors are frequently seam-welded after placement. The result is closer to a factory-welded unit, rebuilt in the room.</p>
<p>Both are forms of knockdown construction; if the basic concept is new, start with <a href="<?= url('guides/knockdown-ahu-construction') ?>">knockdown AHUs: how field-assembled units are built</a>.</p>

<h2>Head-to-head comparison</h2>
<table>
<thead><tr><th>Criterion</th><th>Bolted modular panel</th><th>Welded-frame knockdown</th></tr></thead>
<tbody>
<tr><td>Casing leakage (as built)</td><td>Good when gaskets and sealant are applied correctly; depends heavily on installer care at every joint</td><td>Welded frame joints and welded floor seams eliminate many leakage paths; panel joints still rely on gaskets</td></tr>
<tr><td>Leakage over time</td><td>Gaskets can take a set and bolts can loosen under vibration; periodic re-torque may be needed</td><td>Welded joints do not relax; long-term tightness generally more stable</td></tr>
<tr><td>Structural strength and stiffness</td><td>Adequate for most indoor duties; heavy point loads and high casing pressures may need reinforcement</td><td>Higher stiffness; suits large, heavy, high-pressure or seismic applications</td></tr>
<tr><td>Field assembly time</td><td>Shorter; repetitive mechanical fastening</td><td>Longer; welding, inspection and touch-up coating</td></tr>
<tr><td>Trades on site</td><td>Mechanical installers with hand tools</td><td>Certified welders plus installers; hot-work permits</td></tr>
<tr><td>Piece size and weight</td><td>Small and light; fits standard doors and small elevators</td><td>Structural members can be long; floor sections heavier</td></tr>
<tr><td>Fire and occupied-building risk</td><td>No hot work for frame assembly</td><td>Hot work requires fire watch and alarm coordination</td></tr>
<tr><td>Hygiene and cleanability</td><td>More joints and crevices inside; good with flush interior design</td><td>Welded floors and seams reduce crevices; easier to clean wet areas</td></tr>
<tr><td>Future disassembly</td><td>Can be unbolted for relocation or later replacement</td><td>Must be cut apart</td></tr>
</tbody>
</table>

<h2>Leakage: where the real difference lies</h2>
<p>Casing leakage happens at joints, not through panels. A bolted system has many more joints made in the field, each relying on a gasket being placed correctly, compressed evenly and not displaced while panels are lifted into position. When done well, bolted units can meet tight leakage targets. The variance between a careful crew and a hurried one is the main risk.</p>
<p>Welded construction removes the frame joints and floor seams from that equation. The remaining leakage paths are panel-to-frame and door interfaces, which are the same in both systems. For units handling high static pressure, very humid or very cold air, or where a strict leakage class has been specified, welded frames and floors provide more margin.</p>
<p class="note">Whichever system is chosen, specify a field leakage test and acceptance criteria. Factory test results on a unit that was later disassembled do not prove the field-built casing.</p>

<h2>Assembly time and site logistics</h2>
<p>Bolted systems assemble quickly because the work is repetitive and needs only hand and power tools. Crews can work in occupied buildings with limited disruption, and there is no waiting on weld inspection or coating cure. This matters most when the outage window is short.</p>
<p>Welded systems take longer and introduce hot-work controls: permits, fire watch, smoke detector covering, ventilation for welding fume, and protection of adjacent equipment. In hospitals, labs and occupied offices, these controls can constrain working hours. The payoff is a structure that behaves like a factory-welded base.</p>

<h2>Strength and structural duty</h2>
<p>Large units with heavy coil banks, multiple fan modules or energy recovery wheels place concentrated loads on the base. Structural steel welded bases distribute these loads well and resist racking. Bolted modular frames handle typical commercial loads but may need added members, heavier gauge sections or field-installed bracing under concentrated loads. In seismic regions, both systems can be engineered to resist design forces, but the anchorage and load paths must be verified by the manufacturer or the delegated engineer, not assumed.</p>

<h2>Choosing between them</h2>
<ul>
<li><strong>Choose bolted modular panel</strong> when access is very tight, hot work is restricted, the outage window is short, duty is moderate, or future relocation is plausible.</li>
<li><strong>Choose welded-frame knockdown</strong> when the unit is large or heavy, casing pressures are high, the application demands long-term tightness (hygienic, process or critical environments), or the floor must be fully welded and drainable.</li>
<li><strong>Consider a hybrid</strong>: a welded structural base and floor with bolted upper frame and panels. Many field-assembled units use this approach to get welded wet sections with fast upper assembly.</li>
</ul>
<p>Field inspection points for either system are listed in the <a href="<?= url('guides/knockdown-field-assembly-qa') ?>">knockdown unit field assembly QA checklist</a>. The <a href="<?= url('products/retrofit-knockdown') ?>">retrofit and knockdown units</a> page explains how construction method is chosen for each project.</p>
<?php guide_end([
    ['Is a welded knockdown unit tighter than a bolted panel unit?', 'Welded frames and floors remove many field-made joints, so they generally give more dependable long-term tightness. A well-installed bolted unit can still meet strict leakage targets, but results depend more on installer care.'],
    ['Which knockdown method assembles faster?', 'Bolted modular panel systems usually assemble faster because they use mechanical fasteners and need no welding, inspection or coating touch-up. Welded systems take longer and require hot-work controls.'],
    ['Can bolted and welded knockdown construction be combined?', 'Yes. A common hybrid uses a welded structural base and drainable floor with bolted upper framing and panels, giving welded wet sections with quicker field assembly above.'],
]);
