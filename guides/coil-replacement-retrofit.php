<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('coil-replacement-retrofit'); ?>
<p class="lede">Replacing a coil in an existing air handler is mostly a measurement and logistics exercise: capture the exact envelope and connection details of the old coil, specify a replacement that fits that envelope and the access path, then remove and install it without damaging the casing or the new fins.</p>

<h2>Step 1: Measure the existing coil</h2>
<p>Take these dimensions from the coil itself, not from old submittals, since field modifications are common.</p>
<ol>
<li><strong>Casing dimensions:</strong> overall height, width (finned length plus end plates) and depth in the airflow direction, including any flanges.</li>
<li><strong>Finned area:</strong> fin height and fin length, which define the face area.</li>
<li><strong>Rows and fin spacing:</strong> count tube rows from the end and measure fins per inch (fins per 25 mm).</li>
<li><strong>Tube size and pattern:</strong> outside diameter and centre-to-centre spacing.</li>
<li><strong>Connections:</strong> number, size, type (male pipe thread, sweat, flange) and exact location measured from a fixed reference, usually the bottom and the casing face. Note which is supply and which is return.</li>
<li><strong>Hand of coil:</strong> record the side the connections are on when facing the coil with air entering from behind you.</li>
<li><strong>Mounting:</strong> how it is supported (rails, channels, flanges), fastener locations and any drain pan interface.</li>
<li><strong>Vents and drains:</strong> location and size.</li>
</ol>
<p class="note">Photograph the nameplate if one survives. Even a partial model number can tell the manufacturer the tube size, fin type and circuit arrangement.</p>

<h2>Step 2: Measure the access route</h2>
<p>A coil that fits the casing but not the door is a common and expensive mistake. Record:</p>
<ul>
<li>Access door or removable panel opening in the unit, and whether adjacent panels or structural members can be removed.</li>
<li>The space in front of the coil connections for sliding the coil out sideways.</li>
<li>Every door, corridor, stair and elevator between the loading area and the unit.</li>
</ul>
<p>If the replacement cannot pass as one piece, split it. Common approaches are two or more stacked coils with an intermediate drain pan for cooling coils, or side-by-side sections with separate headers. Each section must still be supported independently, and stacked cooling coils need a way to drain condensate from the upper coil without wetting the lower one; see <a href="<?= url('guides/stacked-coils-intermediate-drain-pans') ?>">stacked coils and intermediate drain pans</a>.</p>

<h2>Step 3: Specify the replacement</h2>
<p>A replacement coil can be a dimensional copy or an upgraded selection that fits the same envelope. Give the manufacturer:</p>
<table>
<thead><tr><th>Category</th><th>Information to provide</th></tr></thead>
<tbody>
<tr><td>Envelope</td><td>Maximum casing dimensions, finned dimensions, mounting details, split requirements</td></tr>
<tr><td>Connections</td><td>Size, type, location, hand, supply and return orientation</td></tr>
<tr><td>Air side</td><td>Design airflow, entering air conditions, allowable air pressure drop</td></tr>
<tr><td>Fluid side</td><td>Fluid type and concentration, entering temperature, flow or temperature difference, allowable fluid pressure drop</td></tr>
<tr><td>Materials</td><td>Tube, fin and casing materials, coatings if the environment is corrosive</td></tr>
<tr><td>Accessories</td><td>Vents, drains, intermediate drain pan, coil pull rails</td></tr>
</tbody>
</table>
<p>Matching rows and fin spacing exactly is not required; a manufacturer can often achieve the same or better capacity with a different circuit or fin geometry at the same air pressure drop. Just keep the depth within what the casing allows and check that a higher pressure drop will not starve the fan. Selection fundamentals are in <a href="<?= url('guides/chilled-water-coil-selection') ?>">chilled water coil selection</a> and <a href="<?= url('guides/hot-water-coil-sizing') ?>">hot water coil sizing</a>.</p>
<p class="warn">If the old coil failed by freezing, find and fix the cause before installing the new one. A new coil installed into the same control and airflow conditions will freeze the same way.</p>

<h2>Step 4: Remove the old coil</h2>
<ol start="9">
<li>Lock out the fan and isolate the coil with its valves. Drain the coil fully; for glycol systems, capture the fluid for reuse or proper disposal. For DX coils, have a licensed technician recover the refrigerant.</li>
<li>Disconnect piping at unions or flanges outside the casing, then remove the pipe sleeves or seals where piping passes through the casing wall.</li>
<li>Remove panels or framing that block withdrawal.</li>
<li>Unbolt the coil from its supports and slide it out on its rails. Rig heavy coils with a chain fall or come-along; do not lever against the casing floor.</li>
<li>If the coil cannot leave whole, cut it in place with care to contain residual fluid and fin debris.</li>
</ol>

<h2>Step 5: Install the new coil</h2>
<ol start="14">
<li>Inspect the drain pan and coil rails while they are exposed. Clean, repair or replace them now.</li>
<li>Slide the new coil in with fin protection still in place where possible, keeping it level and fully supported.</li>
<li>Bolt to supports and seal the coil casing to the unit with blank-offs and gasket so air cannot bypass around the coil.</li>
<li>Seal pipe penetrations through the casing and reconnect piping with new unions or flanges and isolation valves.</li>
<li>Fill slowly and vent air at the high point. Check all joints for leaks at operating pressure.</li>
<li>Straighten any fins bent during installation with a fin comb.</li>
<li>Restart the fan and confirm air pressure drop across the coil and leaving air temperature at a known load.</li>
</ol>

<h2>After installation</h2>
<p>Record the new coil's dimensions, model and connection details in the maintenance file, and update the control valve if the new coil's flow or pressure drop changed. A coil with a different fluid pressure drop can shift valve authority, which affects control stability.</p>
<?php guide_end([
    ['What measurements do I need to order a replacement coil?', 'Record the casing height, width and depth, finned dimensions, rows, fins per inch, tube size, connection sizes and locations, hand, and mounting details. Measure the access route as well so the coil can be split if it will not pass as one piece.'],
    ['Does a replacement coil need the same number of rows?', 'No. A manufacturer can often meet or exceed the original capacity with different fin spacing or circuiting in the same depth. Check that air and fluid pressure drops stay within what the fan and pump can handle.'],
    ['Can a large coil be replaced through a small access door?', 'Yes, by splitting it into stacked or side-by-side sections that each fit the opening. Stacked cooling coils need an intermediate drain pan so the upper coil does not drain onto the lower one.'],
]);
