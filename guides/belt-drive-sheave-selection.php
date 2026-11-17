<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('belt-drive-sheave-selection'); ?>
<p class="lede">To select a fan belt drive, apply a drive service factor to the motor horsepower, pick a belt section for that design horsepower and the motor speed, choose driver and driven sheaves that give the required speed ratio without going below minimum sheave diameters, then calculate belt length and the number of belts from the manufacturer's corrected ratings.</p>

<h2>Inputs you need</h2>
<ul>
<li>Motor nameplate horsepower and full-load speed (for example 1,760 rpm for a 4-pole motor at 60 Hz).</li>
<li>Required fan speed from the fan selection.</li>
<li>Approximate centre distance between motor and fan shafts, and the motor base adjustment range.</li>
<li>Motor frame size, for minimum sheave diameter.</li>
<li>Fan shaft diameter and bearing arrangement, for overhung load checks.</li>
<li>Hours of operation per day and starting method (across the line or VFD soft start).</li>
</ul>

<h2>Step-by-step selection</h2>
<ol>
<li><strong>Determine the drive service factor.</strong> Belt manufacturers publish service factors by driven machine type, hours of operation per day and type of driver. Centrifugal fans are a smooth load and sit at the lower end of the range; longer daily operation pushes the factor up.</li>
<li><strong>Calculate design horsepower.</strong> Design hp = motor nameplate hp × drive service factor. Use motor nameplate, not fan bhp, so the drive can carry the motor's full capacity.</li>
<li><strong>Choose the belt section.</strong> Using the manufacturer's selection chart, enter design horsepower and the speed of the faster shaft (usually the motor) to find the recommended section, for example classical A, B, AX, BX or narrow 3V, 5V, 3VX, 5VX. Cogged (X) sections run cooler and more efficiently on smaller sheaves.</li>
<li><strong>Calculate the speed ratio.</strong> Ratio = motor rpm ÷ fan rpm.</li>
<li><strong>Select the driver sheave.</strong> Choose a pitch diameter at least as large as both the belt section's minimum and the minimum sheave diameter recommended for the motor frame in NEMA MG 1. Larger driver sheaves mean lower belt tension, longer belt and bearing life, and higher rated horsepower per belt.</li>
<li><strong>Select the driven sheave.</strong> Driven pitch diameter ≈ driver pitch diameter × ratio. Pick the nearest standard size and recalculate the actual fan speed.</li>
<li><strong>Check belt speed.</strong> Belt speed (fpm) = π × driver PD (in) ÷ 12 × motor rpm. Standard cast iron sheaves are commonly limited to about 6,500 fpm; above that, special sheaves and balancing are needed.</li>
<li><strong>Calculate belt length</strong> from centre distance and sheave diameters, then pick the nearest standard belt and recalculate centre distance.</li>
<li><strong>Find horsepower per belt.</strong> From the manufacturer's tables, read rated horsepower per belt for the section, driver diameter and speed, plus any speed ratio adder. Multiply by the arc of contact and belt length correction factors.</li>
<li><strong>Calculate the number of belts.</strong> Belts = design hp ÷ corrected hp per belt, rounded up.</li>
<li><strong>Check overhung load</strong> on the motor and fan shafts against the motor and bearing manufacturer's limits. Small sheaves and many belts raise shaft loads.</li>
</ol>

<h2>Belt length formula</h2>
<p class="formula">L ≈ 2C + 1.57 × (D + d) + (D − d)² ÷ (4C)</p>
<p>L is pitch length, C is centre distance, D is driven pitch diameter and d is driver pitch diameter, all in inches.</p>

<h2>Worked example</h2>
<p>A 20 hp, 1,760 rpm motor must drive a fan at about 1,100 rpm. Centre distance is about 24 in. (610 mm). The drive will run around the clock. For this example, assume the belt manufacturer's service factor is 1.2 and that its tables give 6.0 hp per belt for the chosen BX section at this driver size and speed, with combined arc and length corrections of 0.95. Use the actual tables for a real selection.</p>
<ol>
<li>Design horsepower: 20 × 1.2 = <strong>24 hp</strong>.</li>
<li>Speed ratio: 1,760 ÷ 1,100 = 1.60.</li>
<li>Driver sheave: 5.6 in. pitch diameter, above the minimums for the section and motor frame in this example.</li>
<li>Driven sheave: 5.6 × 1.60 = 8.96 in.; select 9.0 in. Actual fan speed = 1,760 × 5.6 ÷ 9.0 = <strong>1,095 rpm</strong>.</li>
<li>Belt speed: π × 5.6 ÷ 12 × 1,760 = 2,580 fpm, well within limits.</li>
<li>Belt length: 2 × 24 + 1.57 × (9.0 + 5.6) + (9.0 − 5.6)² ÷ (4 × 24) = 48 + 22.92 + 0.12 = <strong>71.0 in.</strong> Choose the nearest standard length and adjust centre distance.</li>
<li>Corrected hp per belt: 6.0 × 0.95 = 5.7 hp.</li>
<li>Number of belts: 24 ÷ 5.7 = 4.2, so <strong>5 belts</strong>.</li>
</ol>
<p>A larger driver sheave would raise hp per belt and might reduce the drive to four belts, at the cost of a larger driven sheave. Comparing two or three sheave combinations is normal practice.</p>

<h2>Fixed or adjustable pitch sheaves</h2>
<p>An adjustable (variable pitch) motor sheave lets the test and balance contractor change fan speed in the field by opening or closing the sheave flanges. It is convenient, but adjustable sheaves carry lower ratings, can wear the belts unevenly, and may lose balance. A common practice is to ship with an adjustable sheave, then replace it with a fixed sheave sized to the balanced speed. Where a VFD controls speed, fixed sheaves are normally used from the start, and the drive handles fine adjustment.</p>
<p class="note">Changing sheaves changes fan speed, pressure and power by the fan laws. Check the motor load and wheel speed limit before any change; see <a href="<?= url('guides/fan-laws-calculation') ?>">applying the fan laws</a>.</p>

<h2>Practical points</h2>
<ul>
<li>Use matched sets of belts on multi-belt drives so they share load evenly.</li>
<li>Avoid very small driver sheaves; they shorten belt life and increase bearing loads.</li>
<li>Allow enough motor base travel for installation and tensioning over the belt's life.</li>
<li>Consider synchronous belts only where their higher efficiency outweighs their noise and sensitivity to alignment.</li>
<li>Tensioning and alignment in service are covered in <a href="<?= url('guides/belt-tensioning-alignment') ?>">belt tensioning and alignment</a>. Whether a belt drive is the right choice at all is in <a href="<?= url('guides/direct-drive-vs-belt-drive-fans') ?>">direct drive vs belt drive fans</a>.</li>
</ul>
<?php guide_end([
    ['How do I calculate the sheave size for a fan?', 'Divide motor speed by the required fan speed to get the ratio. Choose a driver sheave above the minimum diameter for the belt and motor frame, then multiply it by the ratio to get the driven sheave size.'],
    ['What service factor is used for fan belt drives?', 'Belt manufacturers publish service factors by driven machine type, hours per day and driver type. Centrifugal fans are a smooth load at the lower end of the range, with higher factors for continuous operation.'],
    ['How many belts does a fan drive need?', 'Divide the design horsepower by the corrected horsepower rating per belt from the manufacturer\'s tables, and round up to the next whole belt.'],
    ['Should I use adjustable sheaves on fan drives?', 'They are useful during balancing, but they carry lower ratings and can wear belts unevenly. Many designers replace them with fixed sheaves once the fan speed is set.'],
]);
