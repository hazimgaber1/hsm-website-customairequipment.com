<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('flex-connector-vibration-short-circuits'); ?>
<p class="lede">A vibration short-circuit is any rigid connection that bridges an isolator and lets vibration bypass it. The usual suspects are flexible duct connectors that are stretched tight or crushed, rigid conduit and piping to isolated equipment, and debris or hardware touching an isolated base. Find them by comparing vibration on each side of every connection and then looking closely at anything that crosses the isolation gap.</p>

<h2>How to tell isolation is being bypassed</h2>
<p>The signature is a mismatch: isolators were selected and adjusted correctly, fan vibration readings at the bearings are acceptable, yet the floor, structure, ductwork or nearby rooms show more vibration or noise than expected. A quick test is to measure vibration on the isolated side (fan base or unit frame) and the fixed side (floor, duct beyond the connector, conduit support) at each potential bridge. A working isolator shows a large drop across it. A small drop means something is carrying vibration around it.</p>
<p>A second quick test: start and stop the fan while watching the isolated assembly. It should move slightly and freely as it accelerates. If it stays rigidly in place while the floor shakes, it is tied to something.</p>

<h2>Symptom: duct vibrates strongly beyond the flexible connector</h2>
<p><strong>Possible causes:</strong></p>
<ul>
<li>The connector is <strong>fully extended</strong> (taut). A tight fabric connector behaves like a solid piece of sheet metal. Thrust on spring-isolated fans can stretch it every time the fan starts.</li>
<li>The connector is <strong>fully compressed</strong> or folded so the metal edges on each side touch.</li>
<li>The two flanges are <strong>misaligned</strong>, so the fabric is in tension on one side.</li>
<li>The fabric has been <strong>painted, insulated or sealed</strong> over with a stiff coating.</li>
<li><strong>Screws, bolts or sheet metal straps</strong> span the connector, often added to stop leaks or to support the duct.</li>
</ul>
<p><strong>Checks:</strong> inspect the fabric with the fan running. It should have a visible slack loop or fold and should not drum. Measure the gap between flanges and compare with the connector's rated length. Look for any fastener crossing the fabric.</p>
<p><strong>Fix:</strong> realign the duct so flanges are parallel and centred, set the flange gap so the fabric has slack at operating pressure, remove bridging hardware, and replace stiffened or damaged fabric. Where thrust is the cause, install and adjust thrust restraints as described in <a href="<?= url('guides/fan-thrust-restraints') ?>">thrust restraints for fans on isolators</a>.</p>
<p class="note">Duct supports near the unit must hang from the building, not from the unit or the isolated fan. Otherwise the duct load sits partly on the isolators and the duct moves with the fan.</p>

<h2>Symptom: hum or vibration carried along electrical conduit</h2>
<p><strong>Cause:</strong> rigid conduit run directly from a fixed structure to a motor or a spring-mounted unit. Conduit is stiff and transmits vibration well.</p>
<p><strong>Checks:</strong> follow every conduit to an isolated motor, junction box or control panel. Feel the conduit near the first fixed support.</p>
<p><strong>Fix:</strong> replace the last section with liquid-tight flexible conduit, installed with a loose loop rather than a straight run, so it does not pull tight when the equipment moves. Do the same for sensor and control wiring on isolated assemblies.</p>

<h2>Symptom: piping vibrates and noise is heard in rooms along the pipe route</h2>
<p><strong>Cause:</strong> rigid coil, humidifier or condensate piping connected to a unit that sits on external springs. Even with internal fan isolation, the unit casing carries some vibration, and on externally isolated units the full movement transfers into the piping.</p>
<p><strong>Checks:</strong></p>
<ul>
<li>Is the unit itself on isolators or only the fan inside it?</li>
<li>Are there flexible pipe connectors or hoses at the unit connections?</li>
<li>Are the first few pipe hangers resilient (spring or neoprene) or rigid?</li>
</ul>
<p><strong>Fix:</strong> add flexible pipe connectors rated for the pressure and temperature at each connection on externally isolated units, and use resilient hangers for the first several supports. Condensate drains should have a flexible section or an air gap where they leave the unit.</p>

<h2>Symptom: fan base vibration high, isolators appear correct</h2>
<p><strong>Cause:</strong> something is touching the isolated fan base inside the unit, or the base is locked down.</p>
<p><strong>Checks:</strong></p>
<ol>
<li>Confirm all shipping bolts and blocks on the internal isolators are removed.</li>
<li>Look for debris, tools, insulation scraps or packaging under or beside the base.</li>
<li>Check that the internal flexible inlet seal between the fan and the bulkhead is not torn, folded flat or bridged with tape or sealant.</li>
<li>Check that motor power cable to the isolated motor has a slack loop.</li>
<li>On seismically restrained isolators, confirm snubber gaps are present on all sides.</li>
</ol>
<p><strong>Fix:</strong> clear the gap around the entire base, restore the seal and cable slack, and reset restraints to their specified clearances.</p>

<h2>Symptom: noise transmitted through the floor only when the unit runs</h2>
<p><strong>Cause:</strong> the housekeeping pad or base rail is bridged, for example where a floating pad has been grouted to the surrounding slab, or where the unit's base rail touches a curb or wall.</p>
<p><strong>Checks:</strong> inspect pad edges for continuous mortar or debris joints; check that isolated units do not touch walls, other equipment, or the curb sides.</p>
<p><strong>Fix:</strong> cut and clean the gap around floating pads, fill with resilient sealant, and move or trim anything in contact.</p>

<h2>Inspection checklist for every isolated unit</h2>
<table>
<thead><tr><th>Connection</th><th>What good looks like</th></tr></thead>
<tbody>
<tr><td>Duct flex connectors</td><td>Aligned, slack fabric, no fasteners across</td></tr>
<tr><td>Duct supports</td><td>Hung from structure, not from the isolated unit</td></tr>
<tr><td>Electrical</td><td>Flexible conduit with loose loop</td></tr>
<tr><td>Piping</td><td>Flexible connectors and resilient hangers (external isolation)</td></tr>
<tr><td>Condensate</td><td>Flexible section or air gap</td></tr>
<tr><td>Internal fan base</td><td>Shipping restraints removed, clear perimeter gap</td></tr>
<tr><td>Restraints and snubbers</td><td>Gaps present, not bearing</td></tr>
</tbody>
</table>
<p>If the bypasses are fixed and vibration remains, return to source diagnosis in <a href="<?= url('guides/vibration-troubleshooting') ?>">troubleshooting AHU vibration</a>. For isolator setup at startup, see <a href="<?= url('guides/spring-isolator-adjustment') ?>">spring isolator adjustment</a>.</p>
<?php guide_end([
    ['What is a vibration short-circuit?', 'It is a rigid connection that bypasses a vibration isolator, such as a taut flexible duct connector, rigid conduit, rigid piping or debris under an isolated base. Vibration travels through the bridge instead of being blocked by the isolator.'],
    ['How much slack should a flexible duct connector have?', 'It should have visible slack at operating pressure and never be pulled tight or crushed so the metal edges touch. Follow the connector manufacturer\'s installed length and keep the flanges aligned.'],
    ['Do I need flexible conduit to an internally isolated fan motor?', 'Yes. The motor moves with the isolated base, so its power and control wiring need a flexible connection with a loose loop. A rigid conduit to the motor bypasses the internal isolators.'],
]);
