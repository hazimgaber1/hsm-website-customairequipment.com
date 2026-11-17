<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('bypass-and-recirculation-troubleshooting'); ?>
<p class="lede">If cooling units see a much smaller temperature difference than the servers produce, cold air is bypassing the servers, hot air is recirculating to server inlets, or both. Compare the cooling units' delta-T with the IT equipment's delta-T, calculate how much air the IT load actually needs, and then find the openings and oversupply that account for the difference.</p>

<h2>Bypass and recirculation defined</h2>
<ul>
<li><strong>Bypass</strong> is cold supply air that returns to the cooling units without passing through IT equipment. It lowers return temperature and wastes fan energy.</li>
<li><strong>Recirculation</strong> is hot exhaust air that finds its way back to server inlets without passing through a cooling unit. It raises inlet temperatures and often prompts operators to lower supply temperature, which makes everything less efficient.</li>
</ul>
<p>The two often occur together. When cooling units supply less air than the servers draw in some area, servers pull hot air from their surroundings. When cooling units supply more, the surplus bypasses. A hall can have bypass in one row and recirculation in the next.</p>

<h2>Measure the gap</h2>
<p>A useful single number is the Return Temperature Index, developed in data center airflow management practice:</p>
<p class="formula">RTI (%) = (T return − T supply) ÷ ΔT IT equipment × 100</p>
<p>At 100%, the cooling units see exactly the IT temperature rise. Below 100% indicates net bypass; above 100% indicates net recirculation. For example, if cooling units supply 68°F and return 80°F (a 12°F difference) while servers have an average 24°F rise, RTI is 50%: half the airflow is bypassing.</p>
<p>A second check compares airflows directly. Calculate required IT airflow from the measured IT load and server delta-T, using cfm ≈ 3,160 × kW ÷ ΔT, as explained in <a href="<?= url('guides/airflow-per-kw-it-load') ?>">calculating airflow per kW of IT load</a>, and compare it with the cooling units' measured or reported airflow.</p>
<p class="note">Get the server delta-T from measurements across representative racks, using inlet and exhaust temperature probes at several heights, or from server management data. Do not assume a nameplate value.</p>

<h2>Symptom: low delta-T at cooling units, server inlets all cool</h2>
<ul>
<li><strong>Cause:</strong> oversupply. Fans are delivering much more air than the IT load needs, and the surplus bypasses.</li>
<li><strong>Check:</strong> compare cooling unit airflow with calculated IT airflow. Check whether fans run at fixed speed or are controlled on a static or temperature signal that has a conservative setpoint.</li>
<li><strong>Fix:</strong> reduce fan speed in steps while watching the warmest server inlets. Convert to a control strategy based on containment pressure or inlet temperature; see <a href="<?= url('guides/fan-wall-pressure-control') ?>">controlling fan walls on aisle differential pressure</a>.</li>
</ul>

<h2>Symptom: low delta-T, raised floor with many open tiles</h2>
<ul>
<li><strong>Cause:</strong> perforated tiles in hot aisles or open areas, unsealed cable cutouts, gaps around floor penetrations and under equipment.</li>
<li><strong>Check:</strong> walk the floor and count perforated tiles outside cold aisles; inspect cable cutouts under racks and cooling units; look for missing tiles.</li>
<li><strong>Fix:</strong> remove perforated tiles from hot aisles and unused areas; install brush grommets or seals on cable cutouts; replace missing tiles.</li>
</ul>

<h2>Symptom: low delta-T with containment installed</h2>
<ul>
<li><strong>Cause:</strong> leaks in the containment: gaps between racks, missing end-of-row doors or door seals, open rack positions, gaps between rack tops and the containment roof, and cable openings.</li>
<li><strong>Check:</strong> thermal imaging of the containment from the cold side shows hot spots where hot air leaks through; smoke or tissue tests at seams; measure differential pressure across the containment.</li>
<li><strong>Fix:</strong> install blanking panels in empty rack units, filler panels in empty rack positions, seals at rack-to-rack and rack-to-floor gaps, and close doors and roof gaps.</li>
</ul>

<h2>Symptom: some server inlets hot while return air is cool</h2>
<ul>
<li><strong>Cause:</strong> recirculation and bypass coexisting. Air is plentiful in some places and short in others, and hot exhaust is reaching inlets over the tops of racks, around row ends or through open rack units.</li>
<li><strong>Check:</strong> measure inlet temperatures at top, middle and bottom of racks along each row. Recirculation usually shows as higher inlet temperatures at the top of racks and at row ends.</li>
<li><strong>Fix:</strong> blanking panels in every empty rack unit; containment or end-of-row barriers; redistribute perforated tiles toward high-load racks. Local, rack-specific problems are handled in <a href="<?= url('guides/hot-spots-troubleshooting') ?>">troubleshooting data center hot spots</a>.</li>
</ul>

<h2>Symptom: low delta-T after a cooling unit was added</h2>
<ul>
<li><strong>Cause:</strong> the new unit is running at full speed alongside others, or redundant units are all running at fixed speed, adding to oversupply.</li>
<li><strong>Check:</strong> unit run status and fan speeds; whether redundant units are in standby or sharing load.</li>
<li><strong>Fix:</strong> run all units at reduced speed under common control rather than leaving the extra unit at full speed. Running more units slower uses less fan energy than fewer units faster, as long as every unit is controlled.</li>
</ul>

<h2>Summary</h2>
<table>
<thead><tr><th>Indicator</th><th>Bypass</th><th>Recirculation</th></tr></thead>
<tbody>
<tr><td>RTI</td><td>Below 100%</td><td>Above 100%</td></tr>
<tr><td>Return temperature</td><td>Low</td><td>Can be normal or high</td></tr>
<tr><td>Server inlet temperatures</td><td>Cool, even</td><td>Hot at top of racks and row ends</td></tr>
<tr><td>Typical fixes</td><td>Reduce airflow; seal floor and containment openings</td><td>Blanking panels; containment; airflow redistribution</td></tr>
</tbody>
</table>
<p>After fixes, raise the supply setpoint and lower fan speeds gradually, verifying inlet temperatures at each step. The benefit of eliminating bypass comes from those adjustments, not from the panels and seals alone. How containment type affects the achievable return temperature is compared in <a href="<?= url('guides/hot-aisle-vs-cold-aisle-containment') ?>">hot aisle vs cold aisle containment</a>.</p>
<?php guide_end([
    ['What causes low delta-T in a data center?', 'Mainly bypass, where cold supply air returns to cooling units without passing through servers, often due to oversupply, open floor tiles or containment leaks. Recirculation of hot air to server inlets can also coexist with it.'],
    ['What is the Return Temperature Index?', 'RTI compares the cooling units\' temperature rise with the IT equipment\'s temperature rise, as a percentage. Below 100% indicates net bypass; above 100% indicates net recirculation.'],
    ['Do blanking panels really matter?', 'Yes. Empty rack units let hot exhaust air flow back to the front of the rack and into server inlets. Blanking panels close that path and are one of the cheapest airflow management fixes.'],
]);
