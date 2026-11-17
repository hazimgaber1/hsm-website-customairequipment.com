<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('mixed-flow-and-axial-fans-in-ahus'); ?>
<p class="lede">Axial and mixed-flow fans move air along the shaft line rather than turning it 90°, which makes them compact in a duct and well suited to high airflow at low to moderate pressure. In air handling work they mostly appear as inline supply, return and exhaust fans, and as vaneaxial fans in large built-up systems, while plenum centrifugal fans dominate inside custom AHU cabinets.</p>

<h2>How axial and mixed-flow fans move air</h2>
<p>A centrifugal wheel draws air in along its axis and throws it outward radially. An <strong>axial</strong> fan keeps the air moving parallel to the shaft. Its blades act like a propeller or a row of small wings, adding pressure as the air passes through. A <strong>mixed-flow</strong> fan sits between the two: its impeller is conical, so air enters axially and leaves at an angle partway between axial and radial, gaining some of the pressure-raising effect of centrifugal action while keeping a straight-through flow path.</p>
<p>Because the air does not have to make a right-angle turn, both types fit in line with a duct, with inlet and outlet the same diameter. That is the main reason they are chosen.</p>

<h2>The family of axial fans</h2>
<h3>Propeller fans</h3>
<p>Thin blades on a small hub in a simple orifice plate. Good for very low pressure, high volume duty such as wall exhaust and condenser fans. Not usually used in air handlers.</p>
<h3>Tubeaxial fans</h3>
<p>A propeller-type impeller in a cylindrical housing. Moderate pressure capability. The air leaves with significant swirl, which is wasted energy unless recovered downstream.</p>
<h3>Vaneaxial fans</h3>
<p>A tubeaxial with a larger hub, airfoil blades and a set of fixed guide vanes downstream (or sometimes upstream) of the impeller. The vanes straighten the swirl and convert it to useful static pressure. Vaneaxials can achieve efficiencies comparable to good centrifugal fans and reach higher pressures than other axial types. Some designs have blades whose pitch can be adjusted at rest or varied in operation, which gives a way to change capacity without changing speed.</p>

<h2>Mixed-flow inline fans</h2>
<p>Mixed-flow fans are typically built as inline units with a cylindrical or square casing. Compared with a vaneaxial of similar size, they generally develop more pressure at a given tip speed and tend to have a more stable curve without the deep stall dip typical of axial fans. Compared with an inline centrifugal (a centrifugal wheel in a tubular housing with turning vanes), they are often shorter and can be quieter for the same duty. These characteristics make them a common choice for:</p>
<ul>
<li>Inline supply and exhaust in ductwork where there is no room for a cabinet fan.</li>
<li>Return and relief fans mounted in the return duct close to the air handler.</li>
<li>Laboratory and general exhaust where a straight-through path simplifies the stack connection.</li>
<li>Smoke exhaust and stairwell pressurization, subject to the listing requirements of the system.</li>
</ul>

<h2>Comparison with plenum centrifugal fans</h2>
<table>
<thead><tr><th>Feature</th><th>Vaneaxial</th><th>Mixed-flow inline</th><th>Plenum centrifugal</th></tr></thead>
<tbody>
<tr><td>Flow path</td><td>Straight through</td><td>Straight through</td><td>Axial in, radial out into plenum</td></tr>
<tr><td>Best duty range</td><td>High flow, low to moderate pressure</td><td>Moderate flow and pressure</td><td>Wide range of flow and pressure</td></tr>
<tr><td>Stability</td><td>Deep stall dip left of peak</td><td>Generally more stable</td><td>Stable right of peak</td></tr>
<tr><td>Sound</td><td>Higher frequency content; tonal at blade pass</td><td>Often lower than axial at same duty</td><td>Plenum provides some attenuation</td></tr>
<tr><td>Discharge requirements</td><td>Needs straight outlet duct or diffuser to recover velocity pressure</td><td>Straight outlet duct preferred</td><td>Discharges into plenum; flexible outlets</td></tr>
<tr><td>Fit in AHU cabinet</td><td>Possible in large built-up units</td><td>Uncommon</td><td>Standard</td></tr>
</tbody>
</table>

<h2>Where axial fans fit inside air handlers</h2>
<p>Large built-up air handlers for industrial buildings, stadiums and some older institutional systems have used vaneaxial supply and return fans because of their high capacity in a small diameter and, with variable pitch, their ability to modulate without a drive. With modern VFDs and fan arrays, that role has narrowed, but vaneaxials still appear when the air handler is essentially a large duct and the fan must sit in line.</p>
<p>If you use an axial fan in a cabinet, pay attention to two points. First, the outlet velocity pressure is high and must be recovered with a diffuser or a tail cone and straight run, or the fan's efficiency on paper will not materialize. The installation penalties are explained in <a href="<?= url('guides/system-effect-amca-201') ?>">system effect</a>. Second, the stall region of an axial fan is pronounced. In a VAV system with a fixed static pressure setpoint, the operating point can climb into that region at low airflow. The symptoms and fixes are covered in <a href="<?= url('guides/fan-surge-stall-troubleshooting') ?>">troubleshooting fan surge and stall</a>.</p>

<h2>Selection points</h2>
<ul>
<li>Plot the full operating range, not just design, and keep every point well right of the stall region.</li>
<li>For variable-pitch vaneaxials, confirm the pitch range covers the minimum and maximum airflow.</li>
<li>Compare octave band sound, not just a single number; axial fans can have a prominent tone at blade-pass frequency.</li>
<li>Check motor location. In most inline axial and mixed-flow fans, the motor sits in the airstream, which matters for hot, corrosive or grease-laden exhaust.</li>
<li>Allow for access: inline fans in ductwork need service clearance and a way to remove the motor.</li>
</ul>
<p class="note">Heavy-duty radial and paddle wheel fans for material handling are a different family altogether; see <a href="<?= url('guides/radial-blade-paddle-wheel-fans') ?>">radial blade and paddle wheel fans</a>.</p>
<p>Custom Air Equipment's <a href="<?= url('products/industrial-fans') ?>">industrial fans</a> page lists the fan types built for duties outside a standard air handler cabinet.</p>
<?php guide_end([
    ['What is the difference between an axial and a mixed-flow fan?', 'An axial fan moves air parallel to the shaft. A mixed-flow fan has a conical impeller that discharges air at an angle between axial and radial, which raises pressure capability while keeping a straight-through path.'],
    ['What does the vane in a vaneaxial fan do?', 'Guide vanes next to the impeller remove the swirl the blades put into the air and convert that rotational energy into useful static pressure, raising efficiency.'],
    ['Are axial fans used in air handling units?', 'They are used in some large built-up units and as inline supply, return and exhaust fans. Inside typical custom AHU cabinets, plenum centrifugal fans and fan arrays are far more common.'],
    ['Why do axial fans need straight duct after them?', 'They leave the fan with high velocity pressure. A straight run or a diffuser lets some of that convert to static pressure; without it, the energy is lost.'],
]);
