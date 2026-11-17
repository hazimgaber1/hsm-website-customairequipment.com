<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('cmms-asset-tagging'); ?>
<p class="lede">An air handler should be set up in a computerized maintenance management system (CMMS) as a parent asset with child assets for each maintainable component: fans, motors, drives, coils, filter banks, dampers, humidifiers and so on. Each record carries its nameplate data, and each physical component carries a durable tag that matches its record. That structure lets work orders, costs and failure history attach to the part that actually needed the work.</p>

<h2>Why hierarchy matters</h2>
<p>Many CMMS databases list an air handler as a single asset, "AHU-3". Every work order for its belts, bearings, coils and actuators then lands on the same record. After a few years nobody can answer simple questions: how often does fan 2's motor fail, how much have we spent on the cooling coil, which actuator model keeps breaking? Asset hierarchy fixes this by modelling the unit the way it is maintained.</p>
<p>A hierarchy also scales. A large custom unit with an eight-fan array, two coil sections, an energy recovery wheel and a humidifier is a very different maintenance load from a small packaged unit, and the component records make that visible.</p>

<h2>A practical hierarchy</h2>
<p>Most CMMS platforms support several levels. A structure that works for air handlers:</p>
<table>
<thead><tr><th>Level</th><th>Example</th><th>Purpose</th></tr></thead>
<tbody>
<tr><td>Site / building</td><td>North Campus / Building 12</td><td>Location roll-ups</td></tr>
<tr><td>System</td><td>AHU-3 supply air system</td><td>Groups the unit with its ductwork, terminal units and associated fans if desired</td></tr>
<tr><td>Unit (parent asset)</td><td>AHU-3</td><td>Overall unit record, location, serial numbers, warranty</td></tr>
<tr><td>Section or subassembly</td><td>Fan section, coil section, filter section</td><td>Optional level for large units</td></tr>
<tr><td>Component (child asset)</td><td>AHU-3-SF-02 (supply fan 2), AHU-3-SF-02-M (its motor), AHU-3-VFD-02</td><td>Where PM tasks, work orders and failures attach</td></tr>
</tbody>
</table>
<p>Do not go deeper than people will actually use. Bearings are usually tracked through the fan or motor record rather than as separate assets, unless the site does detailed reliability work.</p>

<h2>Which components get their own record</h2>
<p>Give a component its own asset record if it has its own maintenance task, its own failure mode, or its own replacement cost worth tracking. For a typical custom air handler:</p>
<ul>
<li>Each fan (each fan in an array), each motor, each VFD or EC controller.</li>
<li>Each coil: preheat, heating, cooling, reheat.</li>
<li>Each filter bank, with filter size, count and rating as attributes.</li>
<li>Each damper with an actuator (outdoor air, return, relief, isolation).</li>
<li>Humidifier, energy recovery wheel or plate, UV lamp assemblies.</li>
<li>Control panel and controller.</li>
<li>Critical sensors and safeties, if the site calibrates and tests them on schedule: airflow stations, freezestats, smoke detectors.</li>
</ul>

<h2>Nameplate and attribute data to capture</h2>
<p>Capture data at installation, when nameplates are clean and accessible and the submittal is at hand. Recovering it later from a dusty, running unit is slow.</p>
<h3>For every component</h3>
<ul>
<li>Manufacturer, model, serial number.</li>
<li>Install date and warranty end date.</li>
<li>Location within the unit (section, side).</li>
<li>Photo of the nameplate.</li>
<li>Link to the O&amp;M manual section.</li>
</ul>
<h3>Component-specific attributes</h3>
<table>
<thead><tr><th>Component</th><th>Key attributes</th></tr></thead>
<tbody>
<tr><td>Fan</td><td>Type, wheel diameter, design airflow and static, design speed, rotation, bearing part numbers</td></tr>
<tr><td>Motor</td><td>hp or kW, voltage, phase, full-load amps, rpm, frame, enclosure, efficiency class, bearing part numbers</td></tr>
<tr><td>VFD or EC controller</td><td>Rating, input voltage, firmware version, parameter backup file location</td></tr>
<tr><td>Belt drive</td><td>Belt section and length, quantity, sheave part numbers</td></tr>
<tr><td>Coil</td><td>Type, rows, fin spacing, face area, fluid, design flow and capacity</td></tr>
<tr><td>Filter bank</td><td>Filter size, quantity, MERV or ISO class, initial and final pressure drop</td></tr>
<tr><td>Damper and actuator</td><td>Damper size, actuator model, torque, signal type, failsafe position</td></tr>
<tr><td>Humidifier</td><td>Type, capacity, water type, cylinder or media part number</td></tr>
</tbody>
</table>
<p>This attribute data also drives the spare parts list; see the <a href="<?= url('guides/critical-spare-parts-list') ?>">critical spare parts list for AHUs</a>.</p>

<h2>Naming and tagging</h2>
<h3>Naming convention</h3>
<p>Use one convention site-wide and keep it consistent with the BAS point names and the drawings. A pattern such as <code>AHU-3-SF-02-M</code> (unit, component type, number, subcomponent) sorts well and is readable on a phone screen. Avoid names that depend on room numbers that may change.</p>
<h3>Physical tags</h3>
<ul>
<li>Use durable tags rated for the environment: engraved or printed metal or polyester tags for wet or hot airstreams.</li>
<li>Include the asset ID in text and as a QR code or barcode so technicians can scan to the CMMS record.</li>
<li>Mount tags where they can be read without opening the unit for the parent asset, and next to each component inside.</li>
<li>Avoid attaching tags to removable parts, such as filter frames or belt guards, that may go missing.</li>
</ul>
<p class="note">Ask for tag requirements and asset data in the project specification so the contractor collects them at turnover. The <a href="<?= url('guides/turnover-documentation-checklist') ?>">turnover documentation checklist</a> lists the documents that feed this data.</p>

<h2>Keeping it accurate</h2>
<ul>
<li>When a component is replaced, update the record rather than creating a duplicate; retire the old serial number and record the new one.</li>
<li>Close work orders against the child asset, with a failure code where the CMMS supports one.</li>
<li>Audit a sample of units each year: do tags exist, do records match nameplates?</li>
<li>Link BAS alarms to asset IDs if the platforms integrate, so alarms can create work orders on the right component.</li>
</ul>
<?php guide_end([
    ['Should an air handler be one asset or many in a CMMS?', 'Many. Set the air handler up as a parent asset with child assets for each maintainable component such as fans, motors, drives, coils, filter banks and dampers, so work orders and failure history attach to the part that needed the work.'],
    ['What nameplate data should I record for an AHU fan motor?', 'At minimum: manufacturer, model, serial number, horsepower or kW, voltage, phase, full-load amps, speed, frame, enclosure, efficiency class and bearing part numbers, plus install date and a nameplate photo.'],
    ['What kind of asset tags work inside an air handler?', 'Durable engraved or printed metal or polyester tags rated for moisture and temperature, with the asset ID in text and as a QR code or barcode. Fix them to permanent structure near each component, not to removable parts.'],
]);
