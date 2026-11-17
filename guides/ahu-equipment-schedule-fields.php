<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-equipment-schedule-fields'); ?>
<p class="lede">The equipment schedule on the mechanical drawings is where an air handler's performance is fixed: a complete schedule gives every bidder the same airflow, pressure, coil, fan, filter, electrical and physical data, while the specification text describes construction; missing or ambiguous fields are the most common source of quote qualifications.</p>

<h2>Why the schedule carries the numbers</h2>
<p>Schedules are read by everyone: estimators, manufacturers, electrical engineers, structural engineers, balancers and commissioning agents. Putting performance numbers in one table, rather than scattered through specification text, keeps them consistent and makes changes visible on revisions. The specification should point to the schedule for performance; structuring that text is covered in <a href="<?= url('guides/writing-ahu-specification-23-73-00') ?>">how to write an AHU specification</a>.</p>
<p>For custom units, one column per unit tag with many rows of fields usually reads better than one row per unit with dozens of columns.</p>

<h2>General and airflow fields</h2>
<table>
<thead><tr><th>Field</th><th>Units</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>Tag</td><td></td><td>Matches drawings and controls</td></tr>
<tr><td>Location and area served</td><td></td><td>Room or roof, zones served</td></tr>
<tr><td>Indoor or outdoor</td><td></td><td></td></tr>
<tr><td>Arrangement</td><td></td><td>Reference to a detail or diagram of section sequence</td></tr>
<tr><td>Supply airflow, maximum and minimum</td><td>CFM (L/s)</td><td>State standard or actual air basis</td></tr>
<tr><td>Minimum outdoor airflow</td><td>CFM (L/s)</td><td>Per ventilation calculation</td></tr>
<tr><td>Return and exhaust airflow</td><td>CFM (L/s)</td><td>If unit includes return or exhaust fans</td></tr>
<tr><td>External static, supply and return</td><td>in. w.c. (Pa)</td><td>Separately, not combined</td></tr>
<tr><td>Site elevation</td><td>ft (m)</td><td>Needed for density correction</td></tr>
</tbody>
</table>

<h2>Fan fields</h2>
<table>
<thead><tr><th>Field</th><th>Units</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>Fan type</td><td></td><td>Plenum, housed, fan array</td></tr>
<tr><td>Number of fans and redundancy</td><td></td><td>For example 4 fans, N+1</td></tr>
<tr><td>Total static pressure, maximum</td><td>in. w.c. (Pa)</td><td>Or leave to manufacturer with a maximum</td></tr>
<tr><td>Maximum brake horsepower or input power</td><td>bhp or kW</td><td>Gives a fan energy ceiling</td></tr>
<tr><td>Minimum FEI or efficiency</td><td></td><td>Where required by code or owner</td></tr>
<tr><td>Motor horsepower, type, efficiency</td><td>hp (kW)</td><td>Induction with VFD, EC or PM</td></tr>
<tr><td>Speed control</td><td></td><td>VFD per fan, common VFD, integral EC</td></tr>
</tbody>
</table>
<p class="note">Sample note: "Fan array shall deliver scheduled supply airflow at scheduled external static with any one fan out of service. Brake horsepower shown is maximum at design with all fans operating and filters at mid-life."</p>

<h2>Coil fields</h2>
<p>Provide one block per coil:</p>
<table>
<thead><tr><th>Field</th><th>Units</th></tr></thead>
<tbody>
<tr><td>Coil type and fluid</td><td>Chilled water, hot water, steam, DX, glycol type and percentage</td></tr>
<tr><td>Airflow through coil</td><td>CFM (L/s)</td></tr>
<tr><td>Maximum face velocity</td><td>fpm (m/s)</td></tr>
<tr><td>Entering air DB / WB</td><td>°F (°C)</td></tr>
<tr><td>Leaving air DB / WB</td><td>°F (°C)</td></tr>
<tr><td>Total and sensible capacity</td><td>MBH (kW)</td></tr>
<tr><td>Entering and leaving fluid temperature</td><td>°F (°C)</td></tr>
<tr><td>Fluid flow</td><td>gpm (L/s)</td></tr>
<tr><td>Maximum air pressure drop</td><td>in. w.c. (Pa)</td></tr>
<tr><td>Maximum fluid pressure drop</td><td>ft w.c. (kPa)</td></tr>
<tr><td>Electric heat</td><td>kW, stages, voltage</td></tr>
</tbody>
</table>
<p>For steam coils, give steam pressure at the coil inlet instead of fluid temperatures. For DX coils, give suction temperature, refrigerant and the number of circuits or stages.</p>

<h2>Filters, recovery and humidification</h2>
<table>
<thead><tr><th>Field</th><th>Units</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>Filter stages and ratings</td><td>MERV per ASHRAE 52.2, or other</td><td>Prefilter and final separately</td></tr>
<tr><td>Filter face velocity, maximum</td><td>fpm (m/s)</td><td></td></tr>
<tr><td>Filter pressure drop for selection</td><td>in. w.c. (Pa)</td><td>State clean, mid-life or dirty basis</td></tr>
<tr><td>Energy recovery type</td><td></td><td>Wheel, plate, runaround</td></tr>
<tr><td>Recovery effectiveness</td><td>%</td><td>Sensible and latent, at stated conditions</td></tr>
<tr><td>Humidifier capacity</td><td>lb/h (kg/h)</td><td>With type and steam or water source</td></tr>
</tbody>
</table>

<h2>Electrical and physical fields</h2>
<table>
<thead><tr><th>Field</th><th>Units</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>Voltage / phase / frequency</td><td>V / ph / Hz</td><td>Confirm with electrical drawings</td></tr>
<tr><td>Minimum circuit ampacity</td><td>A</td><td>Often filled in from basis of design and verified at submittal</td></tr>
<tr><td>Maximum overcurrent protection</td><td>A</td><td></td></tr>
<tr><td>Power connection</td><td></td><td>Single-point or multiple</td></tr>
<tr><td>Maximum length, width, height</td><td>in. (mm)</td><td>Space envelope available</td></tr>
<tr><td>Maximum operating weight</td><td>lb (kg)</td><td>From structural coordination</td></tr>
<tr><td>Maximum shipping section size</td><td>in. (mm)</td><td>For access routes</td></tr>
<tr><td>Casing leakage and deflection class</td><td></td><td>If not covered in specification</td></tr>
<tr><td>Sound power limits</td><td>dB by octave band</td><td>Discharge, inlet, radiated</td></tr>
<tr><td>Basis of design</td><td></td><td>Manufacturer and model</td></tr>
</tbody>
</table>

<h2>Damper, controls and accessory fields</h2>
<ul>
<li>Damper locations, maximum leakage rating and actuator fail position (open, closed or last position).</li>
<li>Controls scope: factory-mounted, factory-programmed, or field-installed.</li>
<li>Freeze protection device type and location.</li>
<li>Smoke detector requirements and who furnishes them.</li>
<li>Service lights, receptacles and power source.</li>
<li>Vibration isolation type and minimum static deflection.</li>
<li>Seismic certification required: yes or no.</li>
</ul>
<p>These fields are often left to the specification, but putting them on the schedule makes differences between units visible at a glance. A project with one hospital unit requiring seismic certification and several office units that do not, for example, is far clearer when each column states it, rather than relying on bidders to cross-reference tags against a paragraph in Part 2 of the specification.</p>
<ul>
<li>Coating or special material requirements for corrosive or coastal locations.</li>
</ul>

<h2>Notes that prevent RFIs</h2>
<p>Every schedule benefits from a short list of general notes. Sample language:</p>
<ol>
<li>"Airflows are at standard air density. Manufacturer shall correct performance to site elevation."</li>
<li>"Coil capacities are minimums at scheduled entering conditions. Leaving air conditions shall be met or exceeded."</li>
<li>"Filter pressure drop for fan selection shall be taken at the midpoint between clean and recommended final resistance."</li>
<li>"Maximum dimensions are the space available and include no allowance for service clearance."</li>
<li>"Electrical data shown is for the basis of design. Contractor shall coordinate any differences."</li>
</ol>
<p class="warn">Do not leave fields blank without explanation. A blank field is read as "not required" by some bidders and "to be determined" by others. Write "N/A" or "By manufacturer" so the intent is clear.</p>
<p>The same data underpins a good quote request; see <a href="<?= url('guides/rfq-information-checklist') ?>">information a manufacturer needs to quote a custom AHU</a>. Field conflicts between schedule and specification are among the issues in <a href="<?= url('guides/common-ahu-specification-errors') ?>">common AHU specification errors and conflicts</a>.</p>
<?php guide_end([
    ['What should be on an AHU equipment schedule?', 'Include tag, location, airflows, external static by path, fan type and redundancy, coil performance blocks, filter ratings, energy recovery and humidifier data, electrical data, maximum dimensions and weights, sound limits and basis of design.'],
    ['Should external static be shown as one value on the schedule?', 'It is clearer to show supply and return external static separately. A single combined value leaves the manufacturer guessing how to split it between fans or across the unit.'],
    ['What does a blank field on an AHU schedule mean?', 'It is ambiguous, which is the problem. Some bidders treat it as not required and others as to be determined. Write N/A or By manufacturer so the intent is clear.'],
]);
