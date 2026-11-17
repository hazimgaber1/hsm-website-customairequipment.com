<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('airfoil-backward-inclined-forward-curved'); ?>
<p class="lede">Airfoil wheels give the highest efficiency, backward inclined wheels come close at lower cost and with more tolerance for dirty air, and forward curved wheels are compact and cheap at low pressure but less efficient and prone to overloading. For most custom air handlers the choice is between airfoil and backward inclined.</p>

<h2>Three centrifugal blade shapes</h2>
<p>All three are centrifugal wheels: air enters axially, turns 90° and leaves the blade tips radially. What differs is the blade angle at the tip relative to the direction of rotation, and the blade cross-section.</p>
<ul>
<li><strong>Forward curved (FC):</strong> many short, shallow blades curved toward the direction of rotation. They throw air off the tip at high absolute velocity, so they develop pressure at low wheel speed.</li>
<li><strong>Backward inclined (BI):</strong> fewer, longer blades tilted away from the direction of rotation. Blades may be flat (BI) or single-thickness curved (backward curved, BC).</li>
<li><strong>Airfoil (AF):</strong> backward inclined geometry with hollow blades shaped in an aerodynamic airfoil section, like an aircraft wing. The shape reduces separation losses over the blade.</li>
</ul>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Characteristic</th><th>Forward curved</th><th>Backward inclined / curved</th><th>Airfoil</th></tr></thead>
<tbody>
<tr><td>Peak static efficiency (relative)</td><td>Lowest</td><td>High</td><td>Highest</td></tr>
<tr><td>Speed for a given duty</td><td>Low</td><td>Higher</td><td>Higher</td></tr>
<tr><td>Wheel size for a given duty</td><td>Smallest</td><td>Larger</td><td>Larger</td></tr>
<tr><td>Power curve</td><td>Rises continuously with airflow; can overload the motor</td><td>Non-overloading; peaks near best efficiency</td><td>Non-overloading; peaks near best efficiency</td></tr>
<tr><td>Pressure curve stability</td><td>Pronounced dip left of peak; narrow stable range</td><td>Steeper curve right of peak; wide stable range</td><td>Similar to BI, with a sharper stall near peak</td></tr>
<tr><td>Pressure capability</td><td>Low to moderate</td><td>Moderate to high</td><td>Moderate to high</td></tr>
<tr><td>Tolerance of dust or moisture</td><td>Poor; small blade passages clog</td><td>Good; single-thickness blades can be cleaned</td><td>Fair; hollow blades can trap moisture or erode</td></tr>
<tr><td>Sound character</td><td>Low tip speed, low-frequency rumble possible</td><td>Moderate</td><td>Generally quietest at peak efficiency</td></tr>
<tr><td>Cost</td><td>Lowest</td><td>Moderate</td><td>Highest</td></tr>
</tbody>
</table>

<h2>Efficiency differences in practice</h2>
<p>Airfoil wheels usually lead peak static efficiency by a few points over a single-thickness backward inclined wheel of the same size, and both lead forward curved wheels by a wide margin. The gap narrows or vanishes when a selection lands away from the peak. A well-placed backward inclined selection can beat an airfoil wheel forced to operate far down its curve.</p>
<p>Plenum fans in custom air handlers are commonly built with either airfoil or backward curved wheels. For a fair comparison between selections, look at brake horsepower and the regulated efficiency metric at the actual duty point; that metric is explained in <a href="<?= url('guides/fan-energy-index-fei-selection') ?>">using FEI to compare fan selections</a>.</p>

<h2>Stability and the overloading problem</h2>
<p>A forward curved fan's horsepower keeps rising as airflow increases. If system resistance is lower than designed, perhaps because ductwork is incomplete or an access door is open, the fan moves more air and the motor can trip on overload. Motors on FC fans are often sized with extra margin for this reason.</p>
<p>Backward inclined and airfoil wheels are "non-overloading": brake horsepower peaks near best efficiency and falls off at higher airflow. A motor sized for the peak of the power curve cannot be overloaded at that speed, whatever the system does.</p>
<p>FC wheels also have a wide dip in the pressure curve left of the peak. Operating there causes unstable flow and noise. BI and AF wheels have a cleaner, steeper curve right of the peak, which gives stable operation over a wide range of system resistance. Symptoms of operating in the unstable zone are covered in <a href="<?= url('guides/fan-surge-stall-troubleshooting') ?>">troubleshooting fan surge and stall</a>.</p>

<h2>Where each blade type fits</h2>
<h3>Forward curved</h3>
<p>Small packaged equipment, fan coils, residential furnaces and low-pressure supply fans up to roughly 2 to 3 in. w.c. (500 to 750 Pa) where first cost and size dominate. Rarely the best choice in a custom AHU.</p>
<h3>Backward inclined and backward curved</h3>
<p>General purpose AHU supply and return fans, plenum fans, fan arrays and exhaust duty with light dust. Also the usual choice where moist air could collect in hollow blades.</p>
<h3>Airfoil</h3>
<p>Large, clean-air supply fans with long running hours where every point of efficiency pays back. Avoid in airstreams carrying particulate that erodes the thin leading edge, or where corrosive condensation could enter a hollow blade. For contaminated industrial air, see <a href="<?= url('guides/radial-blade-paddle-wheel-fans') ?>">radial blade and paddle wheel fans</a>.</p>

<h2>Replacing one blade type with another</h2>
<p>Swapping a forward curved fan for a backward inclined or airfoil wheel during a retrofit is a common efficiency upgrade, but it is not a drop-in change. The new wheel runs at roughly twice the speed for the same duty, so bearings, shaft and drive must suit the higher speed. The wheel is also larger in diameter, which may not fit the existing housing or cabinet. Many retrofits therefore replace the whole fan, often with a plenum fan or a small array, rather than the wheel alone.</p>
<p>Going the other way, from airfoil to backward inclined, usually happens for durability reasons. Expect a small efficiency loss and slightly higher brake horsepower at the same duty; check that the existing motor still has margin before making the change.</p>

<h2>Questions to ask when comparing selections</h2>
<ul>
<li>Which blade shape is quoted, and is it airfoil, flat BI or backward curved?</li>
<li>Where does the duty point sit relative to peak efficiency and peak pressure?</li>
<li>For FC fans, what is the maximum brake horsepower the motor might see if system resistance is lower than designed?</li>
<li>Is the airstream clean enough for a hollow airfoil blade?</li>
<li>What is the sound power by octave band at the duty point?</li>
</ul>
<?php guide_end([
    ['Which fan blade type is most efficient?', 'Airfoil wheels generally have the highest peak static efficiency, with backward inclined and backward curved wheels close behind. Forward curved wheels are significantly less efficient.'],
    ['What does non-overloading mean?', 'A non-overloading fan\'s horsepower curve peaks and then falls as airflow rises, so a motor sized for that peak cannot be overloaded at that speed. Backward inclined and airfoil wheels have this characteristic; forward curved wheels do not.'],
    ['Why are forward curved fans still used?', 'They develop useful pressure at low speed in a small wheel, so they suit compact, low-pressure equipment where first cost matters more than efficiency.'],
    ['Should I use airfoil blades in dirty air?', 'Usually not. Particulate erodes the thin airfoil leading edge, and moisture can collect inside hollow blades. Single-thickness backward inclined wheels tolerate these conditions better.'],
]);
