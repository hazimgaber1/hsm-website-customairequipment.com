<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('industrial-fan-drive-arrangements'); ?>
<p class="lede">AMCA Standard 99-2404 assigns numbers to the common ways a centrifugal fan's wheel, bearings, drive and motor are arranged. Specifying the arrangement number tells the manufacturer where the bearings sit, whether the drive is belt or direct, and where the motor goes. Rotation and discharge designations, covered in the companion AMCA standard, complete the description.</p>

<h2>Why arrangement matters</h2>
<p>Arrangement affects whether bearings are in the airstream, how heat, dust or corrosive gas reach the drive train, how the fan can be serviced, the footprint, the foundation, and the cost. A fan for hot or dirty gas needs an arrangement that keeps bearings out of the gas; a compact HVAC exhaust fan may not.</p>
<p class="note">The descriptions below summarize the common arrangements. AMCA 99-2404 contains the definitive drawings and also defines arrangements not discussed here, such as 2, 7 and the double-width variants. Use the standard itself when writing specifications.</p>

<h2>The common arrangements</h2>
<h3>Arrangement 1</h3>
<p>Belt drive or direct-coupled drive. The wheel is overhung on the shaft, and both bearings are on a pedestal (base) on the drive side, outside the housing. The motor is separate, mounted on its own base or on the floor, connected by belts or a coupling.</p>
<ul>
<li>Bearings out of the airstream, so suited to hot, dirty and corrosive gas.</li>
<li>Flexible motor location and easy belt changes.</li>
<li>Common for industrial process fans, dust collection and hot gas.</li>
</ul>
<h3>Arrangement 3</h3>
<p>Belt drive or direct-coupled drive. One bearing on each side of the wheel, supported by the fan housing. The shaft passes through the inlet, so one bearing sits in or near the airstream at the inlet.</p>
<ul>
<li>Compact, and the wheel is supported between bearings, allowing larger wheels and higher speeds.</li>
<li>Inlet bearing exposed to the airstream, so not suited to hot or dirty gas.</li>
<li>Common for clean-air HVAC housed fans and some industrial applications with clean air.</li>
</ul>
<h3>Arrangement 4</h3>
<p>Direct drive. The wheel is overhung on the motor shaft. There are no fan bearings; the motor bearings carry the wheel. The motor is mounted on a pedestal or the housing.</p>
<ul>
<li>Compact, simple, no belts.</li>
<li>Motor bearings take the wheel load and are close to the gas; limited to moderate temperatures and clean to moderately dirty air.</li>
<li>Wheel size and weight limited by motor shaft and bearing capacity.</li>
<li>Common for small to medium industrial exhaust and many plenum fans.</li>
</ul>
<h3>Arrangement 8</h3>
<p>Direct drive. Like arrangement 1 (overhung wheel, two bearings on a pedestal), but with an extended base that carries the motor, coupled directly to the fan shaft.</p>
<ul>
<li>Bearings out of the airstream, with direct drive and no belts.</li>
<li>Well suited to large, high-horsepower and hot gas fans.</li>
<li>Requires accurate alignment of fan and motor shafts.</li>
</ul>
<h3>Arrangement 9</h3>
<p>Belt drive. Like arrangement 1, but the motor is mounted on the outside of the bearing pedestal (base), typically on the side.</p>
<ul>
<li>Compact belt-driven package with bearings out of the airstream.</li>
<li>Common for industrial fans in medium sizes, including dust and fume exhaust.</li>
<li>Motor size limited by what the pedestal can support.</li>
</ul>
<h3>Arrangement 10</h3>
<p>Belt drive. Like arrangement 9, but the motor is mounted inside the bearing pedestal, below the shaft, and often enclosed by a weather cover.</p>
<ul>
<li>Most compact belt-driven industrial arrangement; motor protected from weather.</li>
<li>Motor access is more restricted; motor size limited.</li>
<li>Common for outdoor installations and utility sets.</li>
</ul>

<h2>Summary table</h2>
<table>
<thead><tr><th>Arrangement</th><th>Drive</th><th>Bearings</th><th>Motor location</th><th>Hot or dirty gas</th></tr></thead>
<tbody>
<tr><td>1</td><td>Belt or coupling</td><td>Two on pedestal, wheel overhung</td><td>Separate base</td><td>Yes</td></tr>
<tr><td>3</td><td>Belt or coupling</td><td>One each side of wheel, on housing</td><td>Separate</td><td>No (inlet bearing in airstream)</td></tr>
<tr><td>4</td><td>Direct</td><td>Motor bearings only</td><td>Pedestal or housing</td><td>Limited</td></tr>
<tr><td>8</td><td>Direct coupled</td><td>Two on pedestal</td><td>Extended common base</td><td>Yes</td></tr>
<tr><td>9</td><td>Belt</td><td>Two on pedestal</td><td>Side of pedestal</td><td>Yes</td></tr>
<tr><td>10</td><td>Belt</td><td>Two on pedestal</td><td>Inside pedestal</td><td>Yes</td></tr>
</tbody>
</table>

<h2>Rotation and discharge designations</h2>
<p>Arrangement alone does not fully define a fan. Rotation and discharge position must also be specified, following AMCA's designation standard for centrifugal fans:</p>
<ul>
<li><strong>Rotation</strong> is clockwise (CW) or counterclockwise (CCW), determined by viewing the fan from the drive side. For a single-inlet fan, the drive side is the side opposite the inlet, even if the fan is direct-drive and no belt is visible.</li>
<li><strong>Discharge position</strong> describes the direction of the outlet, such as top horizontal, bottom horizontal, up blast, down blast, or angular positions, each named relative to the fan's rotation and viewed from the drive side.</li>
<li><strong>Motor position</strong> for belt-driven fans (arrangements 1, 3, 9) is designated by letters, defining where the motor sits relative to the fan, again viewed from the drive side.</li>
</ul>
<p class="warn">Rotation and discharge errors are common and expensive to correct. Always state the viewing convention, check drawings against the AMCA designation charts, and confirm on the submittal.</p>

<h2>Choosing an arrangement</h2>
<ol>
<li>If the gas is hot, dirty, corrosive or explosive, choose an arrangement with bearings outside the airstream (1, 8, 9 or 10).</li>
<li>For high horsepower with direct drive, consider arrangement 8.</li>
<li>For compact belt-driven packages, arrangement 9 or 10.</li>
<li>For clean air and compact housings, arrangement 3 or 4.</li>
<li>Consider maintenance access, foundation and footprint, and motor location in relation to hazardous areas.</li>
</ol>
<p>Arrangement choices for hot gas fans are discussed further in <a href="<?= url('guides/high-temperature-fan-specification') ?>">specifying high-temperature industrial fans</a>, and the choice between direct and belt drive in HVAC fans in <a href="<?= url('guides/direct-drive-vs-belt-drive-fans') ?>">direct drive vs belt drive fans</a>.</p>
<?php guide_end([
    ['What is AMCA arrangement 9?', 'Arrangement 9 is a belt-driven fan with an overhung wheel and two bearings on a pedestal, with the motor mounted on the outside of the pedestal. It keeps bearings out of the airstream in a compact package.'],
    ['Which fan arrangement is best for hot gas?', 'Arrangements that keep bearings out of the airstream, such as 1, 8, 9 and 10, are preferred. Arrangement 8 is common for large direct-drive hot gas fans.'],
    ['How is fan rotation determined?', 'Rotation is clockwise or counterclockwise as viewed from the drive side. For a single-inlet fan, the drive side is opposite the inlet, even on direct-drive fans.'],
]);
