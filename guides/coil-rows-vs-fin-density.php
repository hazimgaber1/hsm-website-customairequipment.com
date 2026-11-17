<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('coil-rows-vs-fin-density'); ?>
<p class="lede">When a coil is short of capacity you can add rows (more depth) or add fins (tighter spacing). Rows usually buy capacity more efficiently and stay cleanable; high fin density buys capacity in a shallower package but raises air pressure drop per unit of capacity and traps dirt faster.</p>

<h2>Two ways to add surface</h2>
<p>Coil capacity scales with heat transfer surface, the temperature difference between air and fluid, and the heat transfer coefficients on each side. With face area and fluid temperatures fixed, the remaining lever is surface, and there are two ways to add it:</p>
<ul>
<li><strong>More rows.</strong> Each additional row of tubes adds primary (tube) and secondary (fin) surface and lengthens the air path through the coil. The air leaves closer to the fluid temperature.</li>
<li><strong>More fins per inch (FPI).</strong> Tighter spacing adds secondary surface within the same depth. A coil going from 8 to 12 FPI (315 to 470 fins per metre) adds roughly 50% more fin area.</li>
</ul>
<p>Neither change is linear. Each extra row works on air that is already cooler, so its incremental capacity is smaller than the one before. Each extra fin narrows the gap, raising air velocity between fins and pressure drop, while fin efficiency stays roughly constant.</p>

<h2>Side-by-side comparison</h2>
<table>
<thead><tr><th>Factor</th><th>Adding rows</th><th>Adding fins</th></tr></thead>
<tbody>
<tr><td>Capacity gain</td><td>Strong when approach is large; diminishes as leaving air nears fluid temperature</td><td>Moderate; also diminishes, faster when the coil is wet</td></tr>
<tr><td>Air pressure drop</td><td>Increases roughly in proportion to rows</td><td>Increases sharply with FPI, especially wet</td></tr>
<tr><td>Coil depth and weight</td><td>Deeper, heavier, more fluid volume</td><td>Same depth, modest weight increase</td></tr>
<tr><td>Cleanability</td><td>Deep coils are harder to clean all the way through</td><td>Tight fins load quickly and resist cleaning at any depth</td></tr>
<tr><td>Condensate drainage</td><td>Neutral</td><td>Water bridges between tight fins; more carryover risk</td></tr>
<tr><td>Water-side effect</td><td>More rows can allow more circuits or longer passes</td><td>None</td></tr>
<tr><td>Cost</td><td>More tube and header material</td><td>Lower material cost per unit of capacity</td></tr>
</tbody>
</table>

<h2>Pressure drop and fan energy</h2>
<p>Air pressure drop across a coil grows roughly linearly with rows and more than linearly with fin density, because the free area between fins shrinks and the boundary layers start to interact. Wet coils amplify this; water films and droplets bridge the narrower gaps, so a 14 FPI coil can see a wet-to-dry pressure drop ratio noticeably higher than a 10 FPI coil. The method for estimating these numbers is in <a href="<?= url('guides/coil-air-pressure-drop') ?>">calculating coil air-side pressure drop</a>.</p>
<p>Because a coil's pressure drop is present every hour the fan runs, the life-cycle cost of a high-FPI selection can exceed the first-cost savings. A useful comparison is capacity per unit of pressure drop: run two or three candidate selections that all meet the load and see which delivers it at the lowest air-side resistance.</p>

<h2>Cleanability and long-term performance</h2>
<p>A coil's rated capacity assumes clean fins. In real buildings fins collect lint, pollen, dust that slipped past filters and biofilm on wet surfaces. Closely spaced fins load faster and are harder to clean because spray water and coil cleaner cannot penetrate as deeply. Field experience has led many owners to cap cooling coils at 10 to 12 FPI and to limit coil depth so that cleaning can reach the middle rows.</p>
<p>Practical limits used in many owner standards:</p>
<ul>
<li>Cooling coils: 12 FPI maximum, often 10 for healthcare and education.</li>
<li>Coil depth: 8 rows maximum in a single coil, or split into two coils with an access space between when more depth is needed.</li>
<li>Heating coils in clean air: higher FPI is more acceptable because they run dry, though 14 FPI is a common ceiling.</li>
</ul>
<p>Cleaning methods themselves are covered in <a href="<?= url('guides/coil-cleaning-methods') ?>">coil cleaning methods</a>.</p>

<h2>Dehumidification and the approach</h2>
<p>Rows help latent capacity more than fins do. Dehumidification depends on getting a large share of the air into contact with surface below its dew point. Deeper coils give the air more chances to contact that surface; extra fins add surface but the air path remains short. When the selection program reports that a coil meets the dry bulb target but misses the leaving wet bulb, adding a row is usually more effective than adding fins.</p>
<p>Conversely, when the approach between leaving air and entering fluid is already small (say under 4°F, or 2 K), additional rows add little capacity. At that point the selection is limited by fluid temperature, and neither rows nor fins will solve it without diminishing returns.</p>

<h2>Choosing between them</h2>
<ol>
<li>Start the selection at moderate fin density, typically 8 to 10 FPI, and let rows vary.</li>
<li>If the row count exceeds 8, look at face area and fluid temperatures before adding fins.</li>
<li>If depth is physically limited (a retrofit casing, a short coil section), raise FPI one step at a time and watch wet pressure drop.</li>
<li>Compare candidates on capacity, pressure drop and cleanability together, not capacity alone.</li>
<li>Record the selected rows and FPI on the schedule so equivalent coils from other manufacturers can be checked against the same basis.</li>
</ol>
<p class="note">A coil replacement inside an existing unit often faces a fixed depth. In that case a modest FPI increase combined with an enhanced fin surface may be the only route to more capacity; see <a href="<?= url('guides/coil-replacement-retrofit') ?>">coil replacement in retrofits</a> for the related constraints.</p>
<?php guide_end([
    ['Is it better to add coil rows or fins?', 'Adding rows usually gives more capacity per unit of pressure drop, helps dehumidification and keeps fin spacing cleanable. Adding fins is useful when coil depth is limited but raises pressure drop sharply and makes the coil harder to clean.'],
    ['What fin spacing is typical for a cooling coil?', 'Most commercial cooling coils use 8 to 12 fins per inch. Many owners cap cooling coils at 10 or 12 FPI so that the coil can be cleaned and condensate drains well. Dry heating coils can tolerate somewhat tighter spacing.'],
    ['Why does a deeper coil not add much capacity?', 'Each additional row works on air that has already been cooled, so its temperature difference to the fluid is smaller. Once the leaving air approaches the entering fluid temperature, extra rows add little capacity while still adding pressure drop.'],
]);
