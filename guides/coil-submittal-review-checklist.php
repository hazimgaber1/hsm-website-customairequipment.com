<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('coil-submittal-review-checklist'); ?>
<p class="lede">A coil submittal is correct when its selection printout matches the scheduled duty at the scheduled conditions, its velocities and pressure drops are inside the specified limits, and its construction, connections and certification match the specification. Use the checklist below line by line; most coil problems found in the field could have been caught on paper.</p>

<h2>Before you start</h2>
<p>Have three documents side by side: the coil schedule, the coil specification section (or the coil portion of the AHU specification), and the manufacturer's coil selection printouts for every coil. Coil data buried in an AHU submittal often appears only as a summary table; ask for the full selection printout if it is missing. Mark each item below as accepted, rejected or requiring clarification.</p>

<h2>Duty and conditions</h2>
<ul>
<li>☐ Airflow on the printout matches the schedule, in the same units (standard or actual CFM) and at the scheduled elevation.</li>
<li>☐ Entering air dry bulb and wet bulb match the schedule. For mixed-air units, confirm the mixed condition was used, not outdoor design.</li>
<li>☐ Leaving air dry bulb and wet bulb (or dew point) meet or beat the schedule.</li>
<li>☐ Total and sensible capacity meet or exceed the schedule.</li>
<li>☐ Entering fluid temperature matches the schedule.</li>
<li>☐ Leaving fluid temperature, or fluid temperature change, matches the schedule. A coil that meets capacity only with a lower delta-T than scheduled will pull more flow than the plant was designed for.</li>
<li>☐ Fluid flow (GPM) matches or is below the scheduled value.</li>
<li>☐ Fluid type and concentration match the schedule. Glycol selections must be run on glycol, not water.</li>
<li>☐ Steam coils rated at the pressure the coil actually sees downstream of the control valve.</li>
<li>☐ DX coils rated with the actual refrigerant at the saturated suction temperature from the matched condensing unit selection.</li>
</ul>

<h2>Velocities and pressure drops</h2>
<ul>
<li>☐ Face velocity is at or below the specified maximum, calculated on finned area.</li>
<li>☐ For cooling coils, face velocity is within the manufacturer's stated carryover limit for the selected fin type.</li>
<li>☐ Air pressure drop is at or below the specified maximum. Cooling coils show wet pressure drop.</li>
<li>☐ Air pressure drop shown in the coil printout agrees with the value carried in the AHU's static pressure summary.</li>
<li>☐ Fluid pressure drop is at or below the specified maximum.</li>
<li>☐ Tube velocity is within the specified range at design flow; ask for the minimum-flow value if the specification requires it.</li>
</ul>

<h2>Geometry</h2>
<ul>
<li>☐ Rows and fins per inch are at or below specified maximums.</li>
<li>☐ Finned height and length shown; any single cooling coil taller than the specified maximum is split with an intermediate pan.</li>
<li>☐ Tube diameter and wall thickness as specified.</li>
<li>☐ Fin type stated (flat, sine-wave, louvered) and permitted by the specification.</li>
<li>☐ Number of circuits and circuiting type shown.</li>
<li>☐ Overall coil dimensions fit the casing and allow removal as shown on the drawings.</li>
</ul>

<h2>Materials and coatings</h2>
<ul>
<li>☐ Tube material (copper, Cu-Ni, stainless) as specified.</li>
<li>☐ Fin material (aluminum, copper, stainless) as specified.</li>
<li>☐ Coil casing material as specified; cooling coil casings are commonly required in stainless steel.</li>
<li>☐ Header material and connection type (MPT, sweat, flanged) compatible with field piping.</li>
<li>☐ Coating type identified, applied after fabrication where required, and coated capacity and pressure drop shown.</li>
</ul>
<p>The reasons behind material choices are in <a href="<?= url('guides/coil-materials-copper-aluminum-stainless') ?>">coil materials</a> and <a href="<?= url('guides/coil-coatings-corrosion-protection') ?>">coil coatings</a>.</p>

<h2>Connections, vents and drains</h2>
<ul>
<li>☐ Supply and return locations shown and arranged for counterflow.</li>
<li>☐ Connection hand matches the drawings and the piping layout.</li>
<li>☐ Connection sizes listed.</li>
<li>☐ Vents at high points and drains at low points, extended outside the casing where specified.</li>
<li>☐ Casing penetrations sealed as specified.</li>
<li>☐ Steam coils show pitched tubes and a bottom condensate connection; distributing type where specified.</li>
</ul>

<h2>Testing and certification</h2>
<ul>
<li>☐ Selection printouts bear the AHRI 410 certification statement, or the submittal explains why the coil is outside the program scope.</li>
<li>☐ Factory leak test method and test pressure stated and consistent with the specification.</li>
<li>☐ For DX coils, factory dehydration and holding charge stated.</li>
<li>☐ Pressure rating of the coil meets or exceeds the system's maximum operating pressure.</li>
</ul>
<p>What certification does and does not cover is explained in <a href="<?= url('guides/ahri-410-coil-ratings') ?>">AHRI 410 coil ratings</a>.</p>

<h2>Common rejection reasons</h2>
<table>
<thead><tr><th>Finding</th><th>Why it matters</th></tr></thead>
<tbody>
<tr><td>Capacity met but at a lower fluid delta-T</td><td>Plant pumps more water; contributes to system low delta-T</td></tr>
<tr><td>Dry pressure drop shown for cooling coil</td><td>Fan selected for too little static pressure</td></tr>
<tr><td>Fin density above specified maximum</td><td>Harder to clean; higher pressure drop and carryover risk</td></tr>
<tr><td>Glycol coil selected on water</td><td>Capacity and pressure drop both wrong</td></tr>
<tr><td>Connections same hand on both sides of a double-sided unit</td><td>Piping conflicts on site</td></tr>
<tr><td>No vent or drain extensions</td><td>Coil cannot be properly vented or winterized</td></tr>
</tbody>
</table>
<p class="note">Coil review is one part of the overall unit review. Fans, casing and controls have their own checks in <a href="<?= url('guides/ahu-submittal-review-checklist') ?>">the AHU submittal review checklist</a>.</p>
<?php guide_end([
    ['What should I check on a coil submittal?', 'Check that capacity, leaving conditions, fluid flow and fluid delta-T match the schedule, that face velocity and air and fluid pressure drops are within limits, that rows, fins, materials and connections match the specification, and that ratings are AHRI 410 certified where applicable.'],
    ['Should a cooling coil submittal show wet or dry pressure drop?', 'It should show wet pressure drop at design airflow, because the fan must deliver design airflow when the coil is dehumidifying. A dry value understates the resistance and can lead to an undersized fan selection.'],
    ['Why reject a coil that meets capacity?', 'A coil can meet capacity while needing more fluid flow, a lower delta-T, higher face velocity or denser fins than specified. Each of those shifts cost or risk to the plant, the fan or maintenance, so all scheduled limits must be met, not only capacity.'],
]);
