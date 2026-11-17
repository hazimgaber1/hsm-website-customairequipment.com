<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('direct-drive-vs-belt-drive-fans'); ?>
<p class="lede">A direct-drive fan mounts the wheel on the motor shaft, so it has no belt losses, no belt maintenance and no belt dust, but its speed must be set by a VFD or EC motor. A belt-drive fan can hit any speed through sheave ratio and suits large wheels and older constant-speed systems, at the cost of drive losses and ongoing maintenance.</p>

<h2>How the two arrangements work</h2>
<p>In a <strong>direct-drive</strong> fan, the wheel hub is fitted directly to the motor shaft, or to a short coupling. Wheel speed equals motor speed. On fixed-frequency power, an induction motor runs at close to its synchronous speed, typically around 1,750, 1,160 or 870 rpm at 60 Hz. To land on an exact duty point, a direct-drive fan almost always needs a variable frequency drive or an EC motor with integral speed control.</p>
<p>In a <strong>belt-drive</strong> fan, the motor sits beside or above the fan and drives the fan shaft through V-belts, cogged belts or synchronous belts running on sheaves. The fan shaft runs in its own pair of bearings. The ratio of sheave diameters sets the fan speed, so a standard 1,750 rpm motor can turn the fan at whatever speed the duty requires.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Direct drive</th><th>Belt drive</th></tr></thead>
<tbody>
<tr><td>Drive losses</td><td>None between motor and wheel</td><td>Belt and sheave losses, higher with small drives and worn or loose belts</td></tr>
<tr><td>Speed setting</td><td>VFD or EC motor required for anything but motor synchronous speed</td><td>Sheave ratio; can run constant speed without a drive</td></tr>
<tr><td>Speed range</td><td>Wide, electronically adjustable</td><td>Fixed unless sheaves are changed or a VFD is added</td></tr>
<tr><td>Bearings</td><td>Motor bearings only carry the wheel</td><td>Separate fan bearings plus motor bearings; more lubrication points</td></tr>
<tr><td>Routine maintenance</td><td>Motor bearing checks</td><td>Belt tension, alignment, belt replacement, fan bearing lubrication</td></tr>
<tr><td>Belt dust</td><td>None</td><td>Belt wear particles enter the airstream and load filters downstream</td></tr>
<tr><td>Wheel size</td><td>Limited by motor shaft loading and available motor speeds</td><td>Suits large, heavy, slow wheels</td></tr>
<tr><td>Length and footprint</td><td>Compact; motor in line behind wheel</td><td>Space for motor, belts, guard and adjustment base</td></tr>
<tr><td>Field speed changes</td><td>Parameter change in the drive</td><td>New sheaves and possibly belts</td></tr>
<tr><td>Motor heat in airstream</td><td>Motor sits in the airstream</td><td>Motor may be in or out of the airstream depending on arrangement</td></tr>
</tbody>
</table>

<h2>Drive losses</h2>
<p>Belt losses come from flexing the belt around the sheaves, slip and friction. They are proportionally larger on small drives, on small-diameter sheaves and when belts are under- or over-tensioned. AMCA Publication 203 includes estimated V-belt drive loss data as a function of motor power, and it shows losses that are a few percent on large drives and noticeably higher on fractional and small integral horsepower drives. Cogged V-belts and synchronous belts reduce loss, though synchronous belts are noisier and less forgiving of misalignment.</p>
<p>Direct drive eliminates that loss entirely, but the comparison is not complete without the drive. A belt-driven fan on fixed-speed power has no VFD losses; a direct-drive fan on a VFD adds a few percent of drive loss. Where the fan needs a VFD anyway for variable airflow, direct drive almost always wins on efficiency. The efficiency of the motor and drive combination across the speed range is covered in <a href="<?= url('guides/motor-part-load-efficiency') ?>">calculating motor and drive efficiency at part load</a>.</p>

<h2>Maintenance and reliability</h2>
<p>Belts are the most frequent maintenance item on a belt-driven air handler. They stretch, wear and need periodic retensioning and replacement, and a broken belt stops the fan. Fan shaft bearings add lubrication points. Over a unit's life, eliminating these tasks is one of the strongest arguments for direct drive, particularly in fan arrays where a dozen belt drives would be impractical.</p>
<p>Direct drive shifts the load onto the motor bearings, which now carry the wheel weight and its unbalance. Motors used in direct-drive fans must be rated for the overhung load, and wheel balance quality matters more because there is no belt to absorb anything. When the motor fails, wheel and motor are often removed together.</p>
<p>Belt dust is a real concern in healthcare, pharmaceutical, cleanroom and food applications. Particles shed by belts end up on downstream coils and filters, and in draw-through units with final filters upstream of the fan, the dust can enter the supply air.</p>

<h2>When belt drive still makes sense</h2>
<ul>
<li><strong>Large, slow wheels:</strong> big housed fans and heavy industrial wheels that would overload a motor shaft or need a low synchronous speed.</li>
<li><strong>Constant-volume systems without VFDs:</strong> a sheave ratio is the cheapest way to hit an exact speed.</li>
<li><strong>Motors out of the airstream:</strong> hot, corrosive or explosive airstreams where the motor must sit outside the casing.</li>
<li><strong>Existing installations:</strong> where a like-for-like replacement is the simplest path.</li>
</ul>
<p>Selecting belts and sheaves for those cases is covered in <a href="<?= url('guides/belt-drive-sheave-selection') ?>">how to select belts and sheaves for fan drives</a>, and in-service tensioning in <a href="<?= url('guides/belt-tensioning-alignment') ?>">belt tensioning and alignment</a>.</p>

<h2>Making the choice</h2>
<ol>
<li>Decide whether the system needs variable speed. If it does, a VFD or EC motor will be present either way, which removes the main cost argument for belts.</li>
<li>Check that a direct-drive wheel exists at the needed size and speed with a standard motor frame.</li>
<li>Compare electrical input power for both options at the expected operating points, including belt and drive losses.</li>
<li>Weigh maintenance labour and belt dust against first cost.</li>
</ol>
<p class="note">Many air handler retrofits replace a single belt-driven fan with a direct-drive fan array, combining the elimination of belts with redundancy.</p>
<?php guide_end([
    ['Are direct drive fans more efficient than belt drive fans?', 'Direct drive eliminates belt losses, which are a few percent on large drives and more on small ones. When the fan needs a VFD anyway, direct drive is usually more efficient overall.'],
    ['Do direct drive fans need a VFD?', 'Almost always. Without a drive, the fan runs at the motor\'s fixed speed, which rarely matches the required duty. A VFD or an EC motor sets the exact speed.'],
    ['Why do belt drives create dust?', 'Belts wear as they flex around sheaves and shed rubber particles into the airstream. Those particles collect on downstream filters and coils.'],
    ['When is a belt drive the better choice?', 'Belt drives suit large, slow wheels, constant-speed systems without drives, and applications where the motor must stay outside a hot or corrosive airstream.'],
]);
