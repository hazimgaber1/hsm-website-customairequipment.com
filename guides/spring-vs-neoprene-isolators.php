<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('spring-vs-neoprene-isolators'); ?>
<p class="lede">Neoprene (elastomer) isolators are compact, inexpensive and well suited to small deflections and higher-speed equipment on stiff slabs, while steel springs provide the larger deflections needed to isolate slower fans and equipment on flexible floors. Many installations combine the two: a spring for low-frequency isolation with a neoprene pad underneath to block high-frequency transmission.</p>

<h2>Why deflection and frequency go together</h2>
<p>Every isolator and the mass sitting on it form a spring-mass system with a natural frequency. Isolation only begins when the disturbing frequency (fan or motor speed) is well above that natural frequency. Natural frequency falls as static deflection rises, so isolators that compress more under load isolate lower speeds. That is the core distinction between neoprene and springs: neoprene stiffens and creeps if asked to deflect much, while a steel spring can be designed for an inch or more of stable deflection. The calculation is in <a href="<?= url('guides/static-deflection-selection') ?>">selecting isolator static deflection</a>.</p>

<h2>Isolator types at a glance</h2>
<table>
<thead><tr><th>Type</th><th>Typical static deflection</th><th>Approximate natural frequency</th><th>Strengths</th><th>Limitations</th></tr></thead>
<tbody>
<tr><td>Neoprene or ribbed pads</td><td>0.05 to 0.2 in. (1 to 5 mm)</td><td>Roughly 7 to 15 Hz</td><td>Cheap, thin, blocks high-frequency noise</td><td>Little isolation for slow equipment; hardens with age and contamination</td></tr>
<tr><td>Neoprene mounts (single or double deflection)</td><td>0.2 to 0.5 in. (5 to 13 mm)</td><td>Roughly 4.5 to 7 Hz</td><td>Compact, bolt-down, good for small fans and pumps on grade</td><td>Limited deflection; sensitive to overload</td></tr>
<tr><td>Open spring mounts</td><td>1 to 2 in. (25 to 50 mm)</td><td>Roughly 2.2 to 3.1 Hz</td><td>Large deflection, predictable rate, levelling bolt</td><td>No lateral restraint; can rock or walk</td></tr>
<tr><td>Restrained springs</td><td>1 to 2 in. or more</td><td>Similar to open springs</td><td>Limit movement during loading changes, wind and draining of water-filled equipment; available seismically rated</td><td>Must be adjusted correctly or they short-circuit</td></tr>
<tr><td>Hangers (spring, neoprene or combination)</td><td>0.3 to 2 in.</td><td>Depends on element</td><td>Isolate suspended equipment and piping</td><td>Rod must not touch hanger housing</td></tr>
<tr><td>Air springs</td><td>Low natural frequency without large deflection</td><td>Often below 3 Hz</td><td>Very low frequency isolation in small height</td><td>Need air supply or maintenance; specialty use</td></tr>
</tbody>
</table>
<p>The natural frequency values above follow from the standard relationship between static deflection and frequency; manufacturers publish the actual rated deflection for each model at its rated load.</p>

<h2>Where neoprene is the right answer</h2>
<ul>
<li>Higher-speed equipment, such as small direct-drive fans at 1,800 rpm or more, on slab-on-grade or heavy, short-span concrete.</li>
<li>As a high-frequency break under a spring isolator. Steel springs transmit high-frequency energy along the coil ("wave surge"); a neoprene pad under the spring base interrupts that path.</li>
<li>Internal fan isolation in small units where height is tight, provided the speed is high enough for the deflection available.</li>
<li>Pipe and duct supports near equipment where large movement would be a problem.</li>
</ul>
<p class="note">Elastomers are stiffer dynamically than statically. The dynamic natural frequency of a neoprene mount is somewhat higher than its static deflection implies, so leave margin when relying on neoprene near its limit.</p>

<h2>Where springs are needed</h2>
<ul>
<li>Slow fans: large housed centrifugals or plenum fans below roughly 600 to 900 rpm, which neoprene cannot isolate effectively.</li>
<li>Equipment on upper floors and long spans. A flexible floor has its own low natural frequency, and the isolator must be much softer than the floor to work.</li>
<li>Rooftop units over sensitive spaces, often on spring curb rails.</li>
<li>Anywhere ASHRAE's recommended deflection table calls for 1 in. or more.</li>
</ul>
<p>Spring isolators should have a lateral stiffness reasonably close to their vertical stiffness to resist rocking, enough reserve travel that they do not go solid under overload, and a levelling bolt. Housed or restrained springs are used where loads change, for example when a coil is drained or filled, when wind loads apply, or when seismic restraint is required.</p>

<h2>Comparing life and maintenance</h2>
<p>Neoprene ages. Ozone, heat, oil and solvents harden it over years, and it can take a permanent set under sustained overload. Inspect neoprene mounts during routine maintenance and replace them if cracked, hardened or flattened. Springs do not age in the same way, but they can corrode outdoors (specify galvanized or coated springs) and are easily defeated if limit stops, shipping bolts or debris are left in place. Correct adjustment at startup is covered in <a href="<?= url('guides/spring-isolator-adjustment') ?>">spring isolator adjustment</a>.</p>

<h2>Choosing quickly</h2>
<ol>
<li>Find the lowest disturbing frequency: lowest operating fan speed, including VFD turndown.</li>
<li>Find the floor condition: on grade, short-span concrete, or long-span or lightweight structure.</li>
<li>Determine the required static deflection from the ASHRAE table or the calculation.</li>
<li>If the required deflection is under about 0.4 in. and the floor is stiff, neoprene is usually adequate.</li>
<li>If it is 0.75 in. or more, use springs, adding a neoprene pad underneath.</li>
<li>Choose restrained or seismic springs when loads change or restraint is required.</li>
</ol>
<p>Between those two thresholds, the floor usually decides. On grade, a high-deflection neoprene mount may be acceptable; on any suspended slab, a 1 in. spring costs little more and removes the doubt about elastomer stiffening over time.</p>
<p>Whether to apply these isolators to the fan inside the casing or to the whole unit is a separate decision; see <a href="<?= url('guides/internal-fan-isolation-vs-unit-isolation') ?>">internal fan isolation vs isolating the whole unit</a>.</p>
<?php guide_end([
    ['Are spring isolators better than neoprene?', 'Springs are better for slow equipment and flexible floors because they provide large static deflection and a low natural frequency. Neoprene is adequate for higher-speed equipment on stiff floors and is better at blocking high-frequency noise. Neither is better in every case.'],
    ['Why put a neoprene pad under a spring isolator?', 'Steel springs can transmit high-frequency vibration along the coil. A neoprene pad under the spring base breaks that path, giving low-frequency isolation from the spring and high-frequency isolation from the pad.'],
    ['How long do neoprene isolators last?', 'It depends on temperature, ozone, oil exposure and loading. Inspect them during routine maintenance and replace any that are cracked, hardened or permanently flattened, since aged neoprene loses much of its isolation.'],
]);
