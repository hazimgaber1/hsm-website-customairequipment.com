<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('value-engineering-pitfalls'); ?>
<p class="lede">When an air handler underperforms after a value engineering round, the cause is usually traceable to one of a handful of substitutions, such as a smaller casing that raised face velocities, fewer coil rows, a looser casing leakage class or a cheaper fan type, each of which saved money on paper while shifting cost into energy, comfort or maintenance.</p>

<h2>How to trace a performance problem to VE</h2>
<p>Start by comparing the installed unit with the original design, not with the approved submittal. VE changes are often accepted piecemeal, and their combined effect may never have been checked against the full design intent. Pull together:</p>
<ul>
<li>The original schedule and specification, before VE.</li>
<li>The VE log or list of accepted changes.</li>
<li>The approved submittal and selection data.</li>
<li>Startup, balancing and commissioning reports.</li>
<li>Trend data or complaint records showing the problem.</li>
</ul>
<p>Then work through the symptoms below.</p>

<h2>Symptom: water carryover and wet duct downstream of the cooling coil</h2>
<p><strong>Likely cause:</strong> casing downsized to save cost and space, raising coil face velocity above what the coil and drain pan were designed for.</p>
<p><strong>Check:</strong> calculate face velocity from measured airflow and actual finned face area. Above roughly 500 fpm (2.5 m/s), carryover risk rises, depending on fin type and coil height; compare with the original design velocity. Inspect for water on the floor beyond the drain pan and wet insulation downstream.</p>
<p><strong>Fix:</strong> moisture eliminators downstream of the coil, extended drain pans, or reduced airflow if the load allows. The structural fix, a larger coil in a larger casing, is rarely practical after installation. See <a href="<?= url('guides/cooling-coil-water-carryover-troubleshooting') ?>">cooling coil water carryover troubleshooting</a>.</p>

<h2>Symptom: supply air temperature or humidity not met at peak load</h2>
<p><strong>Likely cause:</strong> coil rows reduced or fin spacing changed to lower cost or air pressure drop, without reselecting at design conditions.</p>
<p><strong>Check:</strong> compare the installed coil (rows, fins per inch, circuiting) with the original selection. Run the manufacturer's selection program at actual entering conditions and fluid temperatures. Look at whether the fluid side is delivering design flow and temperature; low chilled water temperature difference often accompanies an undersized coil.</p>
<p><strong>Fix:</strong> lower entering fluid temperature if the plant can provide it; increase fluid flow within the coil's tube velocity limits; reduce airflow if zones allow. Otherwise, replace the coil with the original design, accepting the cost that VE was meant to avoid.</p>

<h2>Symptom: higher energy use and fan power than predicted</h2>
<p><strong>Likely cause:</strong> one or more of these changes:</p>
<ul>
<li>Smaller casing with higher internal velocities and component pressure drops.</li>
<li>Fan array replaced by a single fan, or plenum fans replaced by a lower-efficiency fan type.</li>
<li>Premium motors or EC motors replaced by standard-efficiency motors.</li>
<li>Filter bank changed to a smaller face area with higher pressure drop.</li>
<li>Energy recovery deleted or downsized.</li>
</ul>
<p><strong>Check:</strong> measure fan power and airflow and compare with the original selection's predicted power at the same airflow. Rebuild the static pressure budget with actual component drops.</p>
<p><strong>Fix:</strong> lower-cost measures first: duct static pressure reset, correct filter change setpoints, and removing unnecessary pressure drops. Fan replacements may be justified on energy alone; the method for evaluating that is in <a href="<?= url('guides/comparing-fan-energy-between-bids') ?>">comparing fan energy between AHU bids</a>.</p>

<h2>Symptom: condensation on the casing exterior, air leaks, energy loss</h2>
<p><strong>Likely cause:</strong> casing construction downgraded, for example a lower leakage class, thinner panels, no thermal break, or single-wall sections.</p>
<p><strong>Check:</strong> inspect panel construction against the original specification. Use an infrared camera to find cold bridges. Test casing leakage if practical.</p>
<p><strong>Fix:</strong> seal joints and penetrations; insulate cold spots externally; add thermal break panels in the worst sections. A casing with inherently poor thermal performance cannot be fully corrected after installation.</p>

<h2>Symptom: noise complaints</h2>
<p><strong>Likely cause:</strong> sound attenuators deleted or shortened, fan type changed, casing panels thinner, or vibration isolation simplified.</p>
<p><strong>Check:</strong> compare submitted sound power data with the original basis of design; measure room sound levels; check isolation deflection.</p>
<p><strong>Fix:</strong> add duct attenuators, upgrade isolation, add skip frequencies for resonances. See <a href="<?= url('guides/room-sound-from-ahu-data') ?>">estimating room sound from AHU data</a>.</p>

<h2>Symptom: maintenance is difficult or unsafe</h2>
<p><strong>Likely cause:</strong> access sections deleted to shorten the unit; doors reduced in size or changed to removable panels; lights and receptacles deleted.</p>
<p><strong>Check:</strong> walk the unit with maintenance staff and compare with the original access plan.</p>
<p><strong>Fix:</strong> add doors where panels can be cut; add external access platforms. Some access problems are permanent once the unit is installed.</p>

<h2>Summary table</h2>
<table>
<thead><tr><th>VE change</th><th>First-cost saving source</th><th>Typical downstream cost</th></tr></thead>
<tbody>
<tr><td>Smaller casing</td><td>Less steel, smaller footprint</td><td>Higher fan energy, carryover risk</td></tr>
<tr><td>Fewer coil rows</td><td>Smaller coil</td><td>Capacity shortfall, poor dehumidification</td></tr>
<tr><td>Lower leakage class</td><td>Simpler construction</td><td>Energy loss, condensation, filter bypass</td></tr>
<tr><td>Single fan instead of array</td><td>Fewer motors and drives</td><td>No redundancy, longer unit, possibly lower efficiency</td></tr>
<tr><td>Deleted attenuators</td><td>Shorter unit</td><td>Noise complaints, retrofit attenuators</td></tr>
<tr><td>Deleted access sections</td><td>Shorter unit</td><td>Higher maintenance labour</td></tr>
</tbody>
</table>
<p class="note">Preventing these problems is easier than fixing them: require each VE proposal to show its effect on energy, capacity, sound and maintenance, and evaluate it on life-cycle cost rather than first cost alone.</p>
<?php guide_end([
    ['How can value engineering cause AHU performance problems?', 'VE changes like smaller casings, fewer coil rows, lower leakage classes, different fan types or deleted attenuators reduce first cost but can cause carryover, capacity shortfall, higher energy use, condensation or noise.'],
    ['Why does a smaller AHU casing cause moisture carryover?', 'A smaller cross-section raises the air velocity through the cooling coil. Above roughly 500 fpm, depending on coil design, condensate can be stripped from the fins and carried past the drain pan.'],
    ['How do I evaluate a VE proposal for an air handler?', 'Ask for its effect on capacity, fan energy, sound, casing performance and maintenance, and compare options on life-cycle cost rather than first cost. Check the combined effect of all accepted changes, not each in isolation.'],
]);
