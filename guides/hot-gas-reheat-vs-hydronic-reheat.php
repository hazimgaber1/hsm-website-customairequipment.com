<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('hot-gas-reheat-vs-hydronic-reheat'); ?>
<p class="lede">Hot gas reheat uses refrigerant heat that the condenser would otherwise reject, so its reheat energy is essentially recovered and usually code-friendly; modulating versions give good supply temperature control. Hydronic reheat is flexible and precise, and it can be equally efficient when fed by heat recovery chillers or condenser water, but less so from a boiler. Electric reheat is simple and accurate but the most expensive to operate and the hardest to justify under energy codes.</p>

<h2>The three options</h2>
<h3>Hot gas reheat</h3>
<p>On DX systems, a reheat coil downstream of the evaporator receives hot discharge gas from the compressor before it reaches the main condenser. The refrigerant rejects part of its heat into the supply air instead of outdoors. <strong>On/off</strong> hot gas reheat diverts gas fully or not at all; <strong>modulating</strong> hot gas reheat uses valves to split flow between the reheat coil and the condenser, holding a supply air temperature setpoint.</p>
<h3>Hydronic reheat</h3>
<p>A hot water coil downstream of the cooling coil, supplied from a boiler, a heat recovery chiller, a heat pump, or condenser water. The water temperature and source determine the energy cost. Hydronic reheat can be at the AHU or at zone terminals.</p>
<h3>Electric reheat</h3>
<p>An electric heater, usually an open-coil or finned-tubular element, controlled by SCR for smooth modulation. It is often used on smaller units, at terminals, or where no other heat source exists.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Hot gas reheat (modulating)</th><th>Hydronic reheat</th><th>Electric reheat</th></tr></thead>
<tbody>
<tr><td>Energy source</td><td>Recovered compressor heat</td><td>Boiler, heat pump, heat recovery chiller or condenser water</td><td>Purchased electricity</td></tr>
<tr><td>Operating cost</td><td>Very low; reheat is a by-product of cooling</td><td>Low with recovered heat; moderate from a boiler</td><td>Highest</td></tr>
<tr><td>Energy code treatment</td><td>Commonly qualifies as recovered energy</td><td>Recovered sources qualify; boiler heat may be restricted</td><td>Often restricted for dehumidification reheat</td></tr>
<tr><td>Availability</td><td>Only with DX cooling</td><td>Any system with a hot water source</td><td>Any system with electrical capacity</td></tr>
<tr><td>Control precision</td><td>Good with modulating valves; poor with on/off</td><td>Very good</td><td>Very good with SCR</td></tr>
<tr><td>Capacity limit</td><td>Limited to heat available from compressors at that moment</td><td>Limited by water temperature and coil size</td><td>Limited by electrical service</td></tr>
<tr><td>First cost</td><td>Moderate; reheat coil, valves, controls</td><td>Moderate; coil, valve, piping</td><td>Low at the unit; may need electrical upgrade</td></tr>
<tr><td>Freeze risk</td><td>None</td><td>Coil must be protected</td><td>None</td></tr>
<tr><td>Added complexity</td><td>Refrigerant circuit, charge management</td><td>Piping, pumps</td><td>Minimal</td></tr>
</tbody>
</table>

<h2>Energy: where the reheat comes from matters most</h2>
<p>All three put roughly the same heat into the air for the same temperature rise:</p>
<p class="formula">Reheat (Btu/h) = 1.08 × CFM × (T_supply − T_coil leaving)</p>
<p>On a 5,000 cfm unit reheating from 52 F to 65 F, that is 1.08 × 5,000 × 13 ≈ 70,200 Btu/h. The cost depends entirely on the source.</p>
<ul>
<li><strong>Hot gas reheat:</strong> the heat would have been rejected at the condenser. Its marginal cost is close to zero, and diverting it can even reduce condenser fan energy slightly. The compressor may need to run at a higher capacity in reheat mode than for sensible cooling alone, though, because it is now doing dehumidification work.</li>
<li><strong>Hydronic from a heat recovery chiller or condenser water:</strong> similar logic. The heat is a by-product of cooling elsewhere in the plant.</li>
<li><strong>Hydronic from a gas boiler:</strong> about 70,200 ÷ 0.90 = 78,000 Btu/h of gas input at 90 percent boiler efficiency.</li>
<li><strong>Electric:</strong> 70,200 ÷ 3,412 ≈ 20.6 kW, every hour reheat runs.</li>
</ul>
<p class="note">Energy codes generally restrict using new energy to reheat air that was mechanically cooled, with exceptions for recovered energy. Confirm the requirements and exceptions in the code and edition adopted for your project before selecting boiler or electric reheat for dehumidification.</p>

<h2>Control behaviour</h2>
<h3>On/off hot gas reheat</h3>
<p>When the valve opens, the full reheat capacity hits the supply air, and supply temperature can swing by many degrees. It works acceptably in some small packaged units but can cause comfort complaints. It also changes compressor head pressure abruptly.</p>
<h3>Modulating hot gas reheat</h3>
<p>Valves proportion gas to the reheat coil, holding supply temperature within a degree or two. Variable speed compressors make it smoother still. This is the preferred form for DOAS and custom DX units.</p>
<h3>Hydronic</h3>
<p>A modulating valve gives precise control, limited only by valve sizing and authority. Water temperature reset can improve control at low loads.</p>
<h3>Electric</h3>
<p>SCR control gives essentially stepless modulation. Staged contactors give steps that may be too coarse for supply temperature control.</p>

<h2>Practical limits</h2>
<ul>
<li><strong>Hot gas capacity follows cooling.</strong> On mild, humid days when compressors run at low capacity, available reheat may be less than desired. Supplementary reheat may be needed for some design conditions.</li>
<li><strong>Hot gas charge management.</strong> Switching between modes moves refrigerant between coils; the system design and controls must handle this to avoid flooding or starving circuits. This is the manufacturer's responsibility in a packaged system and needs care in a split or field-built system.</li>
<li><strong>Hydronic water temperature.</strong> Low-temperature heat recovery water, for example 95 to 110 F, needs a larger reheat coil than 180 F boiler water.</li>
<li><strong>Electrical service.</strong> Large electric reheat can push a service upgrade.</li>
</ul>

<h2>Choosing a reheat source</h2>
<ol>
<li><strong>DX unit, dehumidification duty:</strong> modulating hot gas reheat first.</li>
<li><strong>Chilled water plant with heat recovery chiller or heat pumps:</strong> hydronic reheat from that heat source.</li>
<li><strong>Chilled water plant with boiler only:</strong> consider passive recovery or a heat pump before boiler reheat, given code limits.</li>
<li><strong>Small loads, no other source:</strong> electric with SCR, if the code allows it for the application.</li>
</ol>
<p>Why reheat is needed at all is explained in <a href="<?= url('guides/cooling-dehumidification-reheat') ?>">cooling-based dehumidification: overcooling and reheat</a>. Heater types are compared in <a href="<?= url('guides/open-coil-vs-finned-tubular-electric-heaters') ?>">open coil vs finned tubular electric heaters</a>.</p>
<?php guide_end([
    ['What is hot gas reheat?', 'Hot gas reheat routes compressor discharge gas through a coil after the evaporator, using heat that would otherwise be rejected at the condenser to warm dehumidified air. Modulating versions hold a supply temperature setpoint.'],
    ['Is modulating hot gas reheat better than on/off?', 'Yes, for most applications. On/off reheat causes large supply temperature swings and abrupt changes in compressor operation. Modulating reheat holds supply temperature within a degree or two.'],
    ['Is electric reheat allowed for dehumidification?', 'Energy codes generally restrict new energy for reheat after cooling, with exceptions. Electric reheat is often restricted or needs a specific exception. Check the code and edition adopted for your project.'],
]);
