<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('multi-section-leveling-tolerances'); ?>
<p class="lede">A multi-section air handler has to sit flat and level so doors close, drain pans empty toward their outlets, and shipping splits seal evenly. Manufacturers commonly ask for the support to be level within roughly 1/8 in per 10 ft and flat within about 1/4 in over the full length, but the number in your unit's installation manual is the one that governs.</p>

<h2>Why level matters more for long units</h2>
<p>A single-piece packaged unit can tolerate a slightly uneven pad because its own base frame bridges the error. A custom air handler shipped in four, six or eight sections cannot. Each section is a separate rigid box, and when the support under them is uneven, each box takes the shape of the surface beneath it. The errors show up at the joints between sections, where one frame sits higher or is rotated relative to its neighbour.</p>
<p>Two different properties are involved, and both need checking:</p>
<ul>
<li><strong>Level</strong> is the slope of the whole support relative to horizontal, end to end and side to side.</li>
<li><strong>Flatness</strong> is how far any point on the support deviates from a straight line or plane. A pad can be perfectly level overall yet have a hump in the middle.</li>
</ul>
<p>A long unit with a slight overall slope may still work, as long as drains are not pitched the wrong way. A unit on a twisted or humped support usually will not.</p>

<h2>What goes wrong when tolerances are missed</h2>
<h3>Access doors</h3>
<p>Door frames are square only when the casing is square. A section sitting on an uneven support racks into a parallelogram, and doors on the high side bind at the latch while doors on the low side gap at the hinge. Gaskets then fail to seal, which adds casing leakage and, on cold days, condensation around the door.</p>
<h3>Drain pans</h3>
<p>Cooling coil drain pans are sloped toward the drain connection in the factory. That slope is small; a support that falls the opposite way can flatten it or reverse it, leaving standing water in the pan. Standing water is exactly what pan design rules are meant to prevent. Pan design itself is covered in <a href="<?= url('guides/drain-pan-design-ashrae-62-1') ?>">drain pan design and ASHRAE 62.1</a>.</p>
<h3>Section joints</h3>
<p>The split gasket is designed for a fairly narrow range of compression. If one corner of a joint is higher than the other, the gasket over-compresses on one side and opens on the other. Interior floor seams that should be flush end up with a lip that traps water and catches cleaning equipment.</p>
<h3>Rotating equipment</h3>
<p>Fan and motor alignment is set at the factory on a flat base. Severe twisting of a fan section can shift belt drive alignment or bring a wheel closer to its inlet cone on one side. Spring isolation adds another layer, since isolators must be adjusted so the internal base sits level; see <a href="<?= url('guides/spring-isolator-adjustment') ?>">how to adjust spring isolators</a>.</p>

<h2>Typical tolerances and how they are expressed</h2>
<p>Installation manuals usually express requirements as a maximum deviation over a length. The values below are typical of what manufacturers ask for; check the specific document for your unit.</p>
<table>
<thead><tr><th>Measurement</th><th>Typical requirement</th><th>How to check</th></tr></thead>
<tbody>
<tr><td>Level along length</td><td>About 1/8 in per 10 ft (roughly 3 mm per 3 m), not cumulative beyond the manual's maximum</td><td>Laser level or water level at each base rail end and each split</td></tr>
<tr><td>Level across width</td><td>About 1/8 in across the unit</td><td>Spirit level on base rails at each split</td></tr>
<tr><td>Flatness of support</td><td>About 1/4 in (6 mm) total over the full unit length</td><td>String line or laser along each rail line</td></tr>
<tr><td>Step at section joint</td><td>Flush, or within the gasket's compression range</td><td>Straightedge across the joint at floor and roof</td></tr>
</tbody>
</table>
<p class="note">Tolerances apply to the support under the base rails, not to a slab's general finish. A floor finished to typical concrete flatness can still be out by more than the unit allows across a 40 ft footprint.</p>

<h2>Getting the support right</h2>
<p>Most leveling problems are cheaper to fix before the unit arrives. Survey the curb, pad or dunnage with a laser level at each base rail line and at each planned split location. Mark high and low spots and correct them with grout, shim packs or steel adjustment as appropriate. Shims under base rails are acceptable where the manual allows them, provided they are steel, full-width under the rail and spaced so the rail does not span unsupported. Avoid wood shims on roofs or in wet locations.</p>
<p>Housekeeping pad height is a separate decision driven by condensate trap depth; see <a href="<?= url('guides/condensate-trap-and-pad-height') ?>">sizing condensate traps and housekeeping pad height</a>. Leveling is about the top surface of that pad, whatever its height.</p>

<h2>Checking after the unit is set</h2>
<ul>
<li>Check level on the base rails at each section joint after setting and again after joining.</li>
<li>Open and close every door; note any that bind or gap.</li>
<li>Pour a small amount of water in each drain pan and confirm it runs to the drain connection.</li>
<li>Sight along the roof line of outdoor units. A visible sag or step suggests the support is out.</li>
<li>Recheck after the roof curb or structure has taken full load, particularly on lightweight roofs that deflect.</li>
</ul>
<p>Record the readings in the installation records. If a problem surfaces at startup, those numbers will save time deciding whether the cause is the support or the unit.</p>
<?php guide_end([
    ['How level does an air handler need to be?', 'A common manufacturer requirement is around 1/8 in per 10 ft along the length and across the width, with overall support flatness of about 1/4 in over the full unit. Always use the tolerances in your unit\'s installation manual.'],
    ['Can I shim an air handler to level it?', 'Usually, if the manufacturer allows it. Use full-width steel shims under the base rails, spaced so the rail is well supported, and avoid wood in wet or rooftop locations.'],
    ['Why do my AHU doors not close after installation?', 'Doors that bind or gap after setting usually mean the section is racked by an uneven support. Check level and flatness under the base rails and correct the support before adjusting door hardware.'],
]);
