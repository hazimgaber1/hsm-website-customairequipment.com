<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('water-coil-venting-draining'); ?>
<p class="lede">Vent a water coil by filling it slowly from the bottom while the high-point vent is open until solid water flows, then repeat after the pumps have run. Drain it for winter by isolating the coil, opening the vent and the low-point drain, and blowing out each circuit with compressed air, because gravity alone leaves water in the return bends.</p>

<h2>Hardware a coil needs</h2>
<p>Venting and draining are only practical if the coil was built and piped for them. Before writing a procedure, confirm the coil has:</p>
<ul>
<li><strong>A vent connection at the highest point</strong>, normally on the return header, with a manual vent valve. Automatic air vents are useful on the system but should not be the only vent at a coil inside a unit, since they can leak and are hard to inspect.</li>
<li><strong>A drain connection at the lowest point</strong>, normally on the supply header, with a hose-end drain valve.</li>
<li><strong>Vent and drain extended outside the casing</strong>, so service does not require entering the unit or opening doors on a running system.</li>
<li><strong>Isolation valves</strong> on supply and return, so the coil can be drained without draining the system.</li>
<li><strong>Drainable tube geometry.</strong> Coils with horizontal tubes in a level casing hold water in each tube between return bends. Coils designed to be drained are built with tubes pitched toward the drain header, or with circuits arranged so each pass drains.</li>
</ul>
<p>Check these during submittal review. A coil without accessible vents and drains cannot be maintained to this procedure.</p>

<h2>Filling and venting a coil</h2>
<ol>
<li><strong>Close the control valve's bypass and confirm the drain valve is closed.</strong></li>
<li><strong>Open the high-point vent</strong> on the return header.</li>
<li><strong>Open the supply isolation valve slowly.</strong> Filling the coil from the bottom pushes air up and out of the vent. Opening the valve quickly traps pockets of air in upper circuits and can cause water hammer.</li>
<li><strong>Watch the vent.</strong> First air, then a spitting mix, then solid water. Close the vent once a steady stream of water without bubbles appears.</li>
<li><strong>Open the return isolation valve.</strong></li>
<li><strong>Run the system pumps</strong> with the control valve fully open for at least several minutes. Flow carries trapped air bubbles toward the high point.</li>
<li><strong>Stop or reduce flow and vent again.</strong> Expect more air on the second and third venting.</li>
<li><strong>Check circuit temperatures</strong> after the coil has been in service. A scan across the return bends with an infrared thermometer should show a consistent pattern; cooler or warmer circuits suggest air remains.</li>
</ol>
<p class="note">Dissolved air continues to come out of solution as fresh water warms or depressurizes. New systems may need venting several times over the first few weeks, and a system-level air separator does much of this work permanently.</p>

<h2>Draining a coil for winterization</h2>
<p>Coils that will see freezing air while out of service, such as chilled water coils in units bringing in winter outdoor air without glycol, are often drained in the fall. Gravity draining alone usually leaves water in the bottom of each return bend and in any tube that is not pitched. That residual water can freeze and split return bends. The procedure that reliably empties a coil is:</p>
<ol>
<li><strong>Close the supply and return isolation valves</strong> and lock them out or tag them.</li>
<li><strong>Open the high-point vent</strong> to admit air.</li>
<li><strong>Open the low-point drain</strong> and let the coil drain by gravity into a suitable drain or container.</li>
<li><strong>Connect clean, dry compressed air</strong> at the vent or supply connection, regulated to a pressure the coil can safely tolerate (check the manufacturer's limit), and blow through until no more water comes out of the drain.</li>
<li><strong>Repeat the blow-out</strong> after a short rest. Water that pooled in bends often reappears on the second pass.</li>
<li><strong>Optionally, fill with antifreeze.</strong> Some owners fill the drained coil with a propylene glycol solution and drain it again in spring, leaving a protective film in low spots. If glycol is used, capture it for reuse or disposal rather than draining it to sewer without checking local rules.</li>
<li><strong>Leave the drain and vent open,</strong> or capped with a tag stating the coil is drained, so nobody refills it by accident.</li>
<li><strong>Record the date and method</strong> on the unit and in the maintenance log.</li>
</ol>
<p class="warn">Draining is not a substitute for designed freeze protection. If a drained coil is refilled by someone unaware of the winterization, or if a valve weeps water back into the coil, it can still freeze. The protection strategies themselves are compared in <a href="<?= url('guides/coil-freeze-protection-methods') ?>">coil freeze protection methods</a>.</p>

<h2>Refilling in spring</h2>
<ol>
<li>Close the drain and confirm the vent is open.</li>
<li>Inspect return bends and headers for splits or wet spots from any winter freeze damage.</li>
<li>Fill slowly from the supply side as in the filling procedure above.</li>
<li>Pressure test the coil if there is any doubt about winter damage, before returning the unit to service.</li>
<li>Vent repeatedly during the first days of operation.</li>
</ol>

<h2>Common problems</h2>
<table>
<thead><tr><th>Problem</th><th>Typical cause</th><th>Remedy</th></tr></thead>
<tbody>
<tr><td>Vent produces air every time it is opened</td><td>System air not separated; leak drawing in air at a low-pressure point</td><td>Add or service air separator; check pump suction pressure</td></tr>
<tr><td>Coil drains very slowly</td><td>Vent not open; drain clogged with sediment</td><td>Open vent; flush drain</td></tr>
<tr><td>Split return bends in spring</td><td>Residual water after gravity-only drain</td><td>Blow out with compressed air every fall</td></tr>
<tr><td>Vent or drain inside the casing</td><td>Not extended in design</td><td>Extend through casing with sealed penetrations at next opportunity</td></tr>
</tbody>
</table>
<p>A coil that still underperforms after thorough venting likely has a different problem; the diagnosis is in <a href="<?= url('guides/coil-capacity-shortfall-troubleshooting') ?>">diagnosing a coil short on capacity</a>. Header orientation decisions that make venting easier are covered in <a href="<?= url('guides/coil-connection-counterflow-piping') ?>">coil connections for counterflow</a>, and broader seasonal tasks in <a href="<?= url('guides/seasonal-changeover-checklist') ?>">the seasonal changeover checklist</a>.</p>
<?php guide_end([
    ['How do you bleed air from a water coil?', 'Open the high-point vent on the return header, fill the coil slowly from the bottom until solid water flows, then close the vent. Run the pumps for a while and vent again, since trapped bubbles migrate to the high point over time.'],
    ['Is gravity draining enough to winterize a coil?', 'Usually not. Water stays in return bends and in tubes that are not pitched toward the drain. Blowing each coil out with regulated compressed air after gravity draining removes most of that residual water and greatly reduces the risk of freeze damage.'],
    ['Should coil vents and drains be outside the AHU casing?', 'Yes, where practical. Extended vents and drains let technicians service the coil without entering the unit, make winterization faster and avoid opening access doors on an operating system.'],
]);
