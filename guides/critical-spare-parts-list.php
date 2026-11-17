<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('critical-spare-parts-list'); ?>
<p class="lede">Keep on site the parts whose failure would stop an air handler and whose delivery time is longer than the facility can tolerate being without it. For most custom units that means filters and belts as routine stock, plus bearings, at least one spare motor or EC fan assembly, drive components, actuators, critical sensors and safeties. Use the checklist below to build a list for each unit, then adjust quantities to criticality and lead time.</p>

<h2>How to decide what is critical</h2>
<p>A part belongs on the list when the answer to all three of these is yes:</p>
<ol>
<li>Would its failure stop the unit or take it below acceptable performance?</li>
<li>Is the space it serves intolerant of the outage: an operating room, data hall, laboratory, process area, or simply a building that cannot be without heat in January?</li>
<li>Is the lead time for a replacement longer than the outage the space can tolerate?</li>
</ol>
<p>Parts that fail often but are available locally in hours can be left off. Parts that rarely fail but take weeks to arrive, such as a custom fan wheel or a specific EC motor, deserve a place even though they may sit on the shelf for years. Fan arrays with redundancy change the calculus: if the array can carry the load with one fan out, the spare motor is less urgent, but still worth having to restore redundancy quickly. Redundancy design is explained in <a href="<?= url('guides/fan-array-redundancy-n1-vs-n2') ?>">fan array redundancy</a>.</p>

<h2>Consumables to stock</h2>
<ul>
<li>Filters: at least one full change-out for each filter bank, prefilters and finals, in the exact sizes and ratings.</li>
<li>Belts: one complete matched set for each belt-driven fan.</li>
<li>Grease: the specified grease for each bearing type, in labelled cartridges.</li>
<li>Humidifier consumables: steam cylinders, media pads, nozzles, gaskets.</li>
<li>UV-C lamps if fitted.</li>
<li>Drain pan treatments and coil cleaning chemicals as used on site.</li>
<li>Door gaskets and latches for units with frequent access.</li>
</ul>

<h2>Fan and drive components</h2>
<ul>
<li>Fan shaft bearings: one set per bearing size used, with locking collars or adapter sleeves.</li>
<li>Motor bearings for larger motors, where the site rebuilds motors.</li>
<li>Sheaves and bushings for belt drives whose sheaves are not standard stock locally.</li>
<li>A spare motor of each frame size and rating used in critical units. For several units with the same motor, one spare may cover all of them.</li>
<li>For fan arrays with EC motors: a complete spare fan and motor assembly of each size, since EC motors are often not stocked locally and the motor and electronics are matched.</li>
<li>Flexible couplings or inlet cones if they are custom to the unit.</li>
<li>Spring isolators or isolator springs of each rating used, for units on internal isolation.</li>
</ul>
<p class="note">Spare motors and bearings degrade on the shelf if stored badly. Store them in a dry, vibration-free location, and rotate spare motor shafts periodically.</p>

<h2>Electrical and drive components</h2>
<ul>
<li>A spare VFD of each rating used on critical units, or at least the parts that fail most: cooling fans, keypads, control boards, as offered by the drive manufacturer.</li>
<li>Backup copies of drive parameter files, stored where they can be loaded onto a spare drive quickly.</li>
<li>Fuses of each type and rating in the unit's power and control circuits.</li>
<li>Contactors and overload relays for across-the-line starters.</li>
<li>Control transformer of each rating.</li>
<li>Control power supplies for 24 V controls.</li>
</ul>

<h2>Controls and safeties</h2>
<ul>
<li>Damper actuators: one of each model and torque rating used, including spring-return types.</li>
<li>Valve actuators: one of each model, plus linkage kits.</li>
<li>Low-limit freezestats: at least one of each length used. A failed freezestat in winter cannot wait for delivery.</li>
<li>Supply, mixed and outdoor air temperature sensors, including averaging elements.</li>
<li>Duct static pressure and filter differential pressure transmitters.</li>
<li>High static pressure safety switches.</li>
<li>Duct smoke detector heads where the fire alarm contractor allows owner stocking.</li>
<li>A spare unit controller or I/O module for critical units, with a current program backup.</li>
<li>Airflow measurement station transmitter if used for outdoor air control.</li>
</ul>

<h2>Coil and hydronic parts</h2>
<ul>
<li>Coil vent and drain valves, and plugs.</li>
<li>Control valve trim kits or complete valves for critical sizes.</li>
<li>Steam traps for steam coils and humidifier dispersion tubes.</li>
<li>Gaskets for coil flanges and access covers.</li>
<li>For units with removable coils, consider whether a spare coil is justified for critical applications with long coil lead times.</li>
</ul>

<h2>Recording and maintaining the stock</h2>
<table>
<thead><tr><th>Record for each part</th><th>Why</th></tr></thead>
<tbody>
<tr><td>Manufacturer part number and unit manufacturer part number</td><td>Exact reorder</td></tr>
<tr><td>Which units and positions it fits</td><td>Fast retrieval in a failure</td></tr>
<tr><td>Quantity on hand and minimum</td><td>Triggers reorder after use</td></tr>
<tr><td>Supplier and quoted lead time</td><td>Basis for stocking decision</td></tr>
<tr><td>Storage location and shelf-life requirements</td><td>Avoid using degraded parts</td></tr>
</tbody>
</table>
<p>Link spares to the component assets in the maintenance system so a work order can reserve the part; see <a href="<?= url('guides/cmms-asset-tagging') ?>">setting up AHUs in a CMMS</a>. Review the list annually, and whenever a unit is modified. A spare that no longer fits anything is wasted money, and a new component with no spare is an unplanned outage waiting to happen.</p>
<p>The manufacturer's recommended spare parts list, delivered with the <a href="<?= url('guides/turnover-documentation-checklist') ?>">turnover documentation</a>, is a good starting point. For Custom Air Equipment units, replacement parts can be identified from the unit serial number through the <a href="<?= url('contact') ?>">contact page</a>.</p>
<?php guide_end([
    ['What spare parts should I keep for an air handler?', 'Routine stock includes filters, belts, grease and humidifier consumables. Critical spares usually include bearings, a spare motor or EC fan assembly, drive parts, damper and valve actuators, freezestats, key sensors and fuses, chosen by criticality and lead time.'],
    ['Do I need a spare EC motor for a fan array?', 'If the array has redundancy, the unit can keep running with one fan out, but a spare restores redundancy quickly. EC motors often have long lead times and are matched to their electronics, so a complete spare fan assembly is commonly stocked for critical units.'],
    ['How do I decide if a part is critical enough to stock?', 'Stock it if its failure would stop the unit or reduce performance unacceptably, the space cannot tolerate the outage, and the replacement lead time is longer than that tolerable outage.'],
]);
