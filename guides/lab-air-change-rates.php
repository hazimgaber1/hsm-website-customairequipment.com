<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('lab-air-change-rates'); ?>
<p class="lede">There is no single correct air change rate for a laboratory. The rate should come from a documented assessment of what is released in the room, how much, and how fast it must be diluted, then be checked against the airflow already demanded by hoods and cooling loads.</p>

<h2>Why fixed ACH rules fell out of favor</h2>
<p>For decades, many lab guidelines simply stated a number: 6 air changes per hour occupied, sometimes 10 or 12, applied to every lab regardless of what happened in it. Those rules were easy to enforce but had two flaws. A fixed rate is excessive for a lab that handles small quantities of low-hazard material in closed containers, and it can be inadequate for a room with a significant spill risk outside a hood, because general dilution was never designed to handle a spill in the first place.</p>
<p>Research on dilution in real rooms also showed that air change rate alone says little about how quickly a release is cleared. Diffuser type, location, mixing and the position of the exhaust grilles have as much influence on local concentrations as the total airflow. ANSI/ASSP Z9.5 reflects this by requiring a rate that suits the hazards rather than prescribing one number, and many institutional standards now follow the same approach. Background on Z9.5 itself is in <a href="<?= url('guides/lab-ventilation-ansi-z9-5') ?>">laboratory ventilation under ANSI/ASSP Z9.5</a>.</p>

<h2>What drives the rate</h2>
<p>A defensible lab ACH accounts for four separate airflow requirements and uses the largest:</p>
<ol>
<li><strong>Hood and device exhaust.</strong> Fume hoods, snorkels, ventilated enclosures and storage cabinets each pull a fixed or variable exhaust flow. In a hood-dense lab this alone can exceed any dilution target.</li>
<li><strong>Thermal load.</strong> Equipment such as freezers, incubators, mass spectrometers and autoclaves can demand more cooling air than dilution does. Supply airflow from sensible load uses 1.08 × cfm × ΔT.</li>
<li><strong>Dilution for the room hazard.</strong> The rate the hazard assessment says is needed to dilute fugitive emissions, odors and small releases that occur outside containment devices.</li>
<li><strong>Pressure offset.</strong> The room must still exhaust more than it supplies by the specified offset, which sets a floor on general exhaust.</li>
</ol>
<p class="formula">ACH = (cfm × 60) ÷ room volume (ft³)</p>

<h2>The risk assessment step</h2>
<p>The hazard assessment is normally led by the owner's environmental health and safety group with input from researchers. It asks practical questions: which chemicals are used outside hoods, in what volumes, how volatile they are, whether there are odor or toxicity concerns at low concentrations, whether compressed or liquefied gases could leak, and whether the room is occupied unattended or overnight.</p>
<p>Many institutions translate the answers into hazard tiers, with each tier tied to an occupied and unoccupied ventilation rate. A typical structure looks like this, though the numbers below illustrate the method rather than recommend values:</p>
<table>
<thead><tr><th>Illustrative tier</th><th>Typical lab activity</th><th>Approach to dilution</th></tr></thead>
<tbody>
<tr><td>Low</td><td>Instrument, computational or dry labs; chemicals in hoods only</td><td>Lowest rate the owner accepts, often set by cooling load</td></tr>
<tr><td>Moderate</td><td>General wet chemistry with routine bench work</td><td>Mid-range occupied rate with a reduced unoccupied rate</td></tr>
<tr><td>Elevated</td><td>Volatile or odorous materials used on benches, larger quantities</td><td>Higher fixed rate, or demand-based control with conservative limits</td></tr>
<tr><td>Special</td><td>Toxic gases, pyrophorics, unusual processes</td><td>Case-by-case review; containment devices preferred over dilution</td></tr>
</tbody>
</table>
<p class="note">Write the tier assigned to each room on the drawings and in the controls points list. When the lab is repurposed years later, that record tells the next team what the ventilation was designed to handle.</p>

<h2>Worked comparison for one room</h2>
<p>Consider a 25 ft × 30 ft lab with a 10 ft ceiling, so 7,500 ft³ (212 m³). It has two 6 ft VAV hoods with a combined exhaust of 1,000 cfm sash-open and 400 cfm at minimum, and a sensible equipment load requiring about 900 cfm of 55°F supply air. The hazard assessment places it in a moderate tier with an occupied target of 6 ACH.</p>
<ul>
<li>Dilution: 6 × 7,500 ÷ 60 = 750 cfm.</li>
<li>Cooling: 900 cfm, which is 7.2 ACH.</li>
<li>Hoods at minimum: 400 cfm; at full open, 1,000 cfm.</li>
</ul>
<p>The cooling load, not the dilution target, governs most of the time, and the hoods govern when both sashes are open. Lowering the dilution rate in this room would save nothing unless the equipment load were removed with fan coils or chilled beams. This check is worth doing on every room before arguing about ACH policy.</p>

<h2>Occupied, unoccupied and demand-based rates</h2>
<p>Because the hazard is lower when nobody is working, many owners accept a reduced unoccupied rate, switched by occupancy sensors or schedules. Demand-based control goes further: a multipoint air sampling system measures volatile organic compounds, particles and sometimes carbon dioxide, and raises the rate when contaminants are detected. Both approaches must keep the room negative and must never reduce hood exhaust below its safe minimum. The energy side of these strategies, and how they fit with heat recovery, is laid out in <a href="<?= url('guides/lab-energy-reduction') ?>">how to reduce laboratory HVAC energy</a>.</p>
<p class="warn">Changing an air change rate in an operating lab is a safety change. Make the change through the owner's management-of-change process and update the room's documented design basis.</p>

<h2>What the air handler designer needs to know</h2>
<p>The ACH decision has a direct effect on the supply unit. If cooling load governs most rooms, the AHU needs leaving air temperature control to stay stable at low dew points. If hoods govern, the unit must follow rapid changes in total demand while every room holds its offset. If demand-based dilution is used, the system's minimum and maximum airflow may differ by a factor of three or more, so fan selection and coil face velocity need to work across that whole range. Get the room-by-room table of governing airflow before sizing the unit, and size the plant on the diversified total described in <a href="<?= url('guides/lab-makeup-air-diversity-sizing') ?>">sizing lab makeup air units for fume hood diversity</a>.</p>
<?php guide_end([
    ['What is a typical air change rate for a laboratory?', 'Many labs end up between about 4 and 8 air changes per hour when occupied, but that range is a result, not a rule. The correct value comes from a hazard assessment and from checking hood exhaust and cooling airflow, which often govern instead.'],
    ['Can a lab air change rate be reduced at night?', 'Often yes, if the hazard assessment allows it and the owner\'s EHS group agrees. The room must stay negative and fume hood exhaust must not fall below its safe minimum during setback.'],
    ['Does a higher air change rate make a lab safer?', 'Only up to a point. Dilution cannot control a large spill, and local mixing patterns affect concentrations as much as total airflow. Containment devices such as hoods are the primary protection; room dilution handles fugitive releases.'],
]);
