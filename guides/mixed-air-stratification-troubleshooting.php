<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('mixed-air-stratification-troubleshooting'); ?>
<p class="lede">Stratification means outdoor and return air pass through the mixing plenum in layers instead of blending, so one part of the filter bank or coil sees much colder (or warmer) air than another. Diagnose it with a grid of temperature readings across the face, then fix it by correcting damper orientation, raising damper velocity, adding an air blender, or relocating the sensor that is being fooled.</p>

<h2>Symptoms that point to stratification</h2>
<ul>
<li>Low-limit (freeze stat) trips in cold weather while the averaging mixed-air sensor reads comfortably above freezing.</li>
<li>Frost or ice on part of a preheat or cooling coil face, or a frozen tube in one corner.</li>
<li>Supply air temperature that swings or differs from one side of the discharge to the other.</li>
<li>Economizer control hunting because the mixed-air sensor sees different air from moment to moment.</li>
<li>Calculated outdoor air fraction from temperatures that does not match airflow station readings.</li>
<li>Condensation on one part of the casing near the mixing box.</li>
</ul>
<p>If the issue is instead a supply temperature that cannot reach setpoint across the whole face, see <a href="<?= url('guides/supply-temperature-not-meeting-setpoint') ?>">supply temperature not meeting setpoint</a>.</p>

<h2>How to confirm it</h2>
<ol>
<li><strong>Pick a cold day at low airflow.</strong> Stratification is worst when outdoor air is coldest, the outdoor fraction is moderate (not 0% or 100%) and airflow is low, so velocities are low.</li>
<li><strong>Take a traverse.</strong> With the unit running, read temperatures at a grid of points across the face of the filter bank or just upstream of the first coil. Nine to sixteen points is typical for a medium-size unit, more for large faces. Thermocouples on a stand or a pole work; so do several data loggers taped in place.</li>
<li><strong>Record damper positions, airflow and outdoor temperature</strong> at the same time.</li>
<li><strong>Compute the spread.</strong> Compare the coldest and warmest readings and the average. A spread of only a few degrees is normal. A spread of 10°F (5.5 K) or more indicates poor mixing that can cause control or freeze problems; in cold climates, any point below freezing ahead of a water coil is a problem regardless of the average.</li>
<li><strong>Repeat at another damper position</strong> to see whether the pattern changes. A pattern that flips with damper position points to the dampers; one that persists points to geometry.</li>
</ol>
<p class="note">Thermal imaging of the filter face is a quick screening tool on units with a viewing window or a door that can be cracked briefly, but confirm with contact readings before making changes.</p>

<h2>Causes and fixes</h2>
<table>
<thead><tr><th>Cause</th><th>Check</th><th>Fix</th></tr></thead>
<tbody>
<tr><td>Dampers deflect both streams the same way</td><td>Look at blade rotation; outdoor stream should be directed into the return stream</td><td>Re-orient blades or reverse damper rotation so the jets converge</td></tr>
<tr><td>Oversized outdoor air damper with low velocity</td><td>Calculate face velocity at minimum and typical positions</td><td>Add a separate minimum outdoor air damper sized for adequate velocity, or blank off part of the damper</td></tr>
<tr><td>Outdoor and return openings on the same face</td><td>Review the unit drawings</td><td>Add an air blender; on a replacement, relocate the opening</td></tr>
<tr><td>Not enough distance from dampers to filters</td><td>Measure plenum length</td><td>Add a blender or lengthen the section at the next opportunity</td></tr>
<tr><td>Cold air entering through bottom opening into a tall section</td><td>Traverse shows cold bottom layer</td><td>Baffles that lift the outdoor stream; blender</td></tr>
<tr><td>Dampers out of sync</td><td>Compare actuator positions with commanded positions</td><td>Re-stroke, fix linkages, replace slipping actuators</td></tr>
<tr><td>Sensor in the wrong place</td><td>Compare the controlling sensor reading with the traverse average</td><td>Install an averaging element across the full face, serpentine pattern</td></tr>
</tbody>
</table>

<h2>Damper adjustments first</h2>
<p>Changes to the dampers cost little and often solve the problem. Parallel-blade dampers can be turned so the outdoor stream is thrown toward the return opening. Where outdoor air enters through the end and return through the top, set the outdoor damper to deflect upward and the return damper to deflect downward. Check the effect with another traverse before moving on. How the damper hardware is meant to be arranged is explained in <a href="<?= url('guides/mixing-box-and-economizer-section') ?>">how the mixing box works</a>.</p>
<p>Low velocity through the minimum outdoor air opening is another frequent cause. When a large economizer damper is cracked open a few degrees to provide minimum air, the stream enters as a slow, cold sheet. A separate small minimum damper running nearly wide open gives a faster stream that mixes better and is easier to control.</p>

<h2>Air blenders</h2>
<p>Static blenders work by creating counter-rotating vortices that fold the layers together. To work, they need:</p>
<ul>
<li>Enough approach velocity, typically a minimum stated by the manufacturer. Too low and they do little.</li>
<li>Correct placement: usually a short distance downstream of the dampers and a specified distance upstream of the filters or coil.</li>
<li>Pressure drop allowance, which must go into the fan's static budget.</li>
</ul>
<p>In an existing unit, check there is room for the blender and its upstream and downstream spacing before ordering one. If the spacing is short, the manufacturer may offer a compact model or recommend a different arrangement.</p>

<h2>When the real issue is the sensor</h2>
<p>Sometimes air is reasonably well mixed but the controlling sensor reads one layer. A single-point probe in a stratified area will hunt and mislead the economizer and low-limit logic. Install a long averaging element strung across the whole face in a serpentine pattern, and for freeze protection, a low-limit with a capillary that trips on any short length below its setpoint. The sequences that use these sensors are in <a href="<?= url('guides/low-limit-freeze-stat-sequences') ?>">low-limit and freeze stat sequences</a>.</p>
<p class="warn">Do not raise the minimum mixed-air setpoint or close outdoor air below the ventilation minimum to cure stratification. That trades a mechanical problem for an indoor air quality problem and may violate ventilation requirements.</p>
<?php guide_end([
    ['What causes air stratification in an air handler?', 'Stratification happens when cold outdoor air and warm return air enter the mixing section without enough momentum or turbulence to blend. Common causes are damper blades aimed the wrong way, oversized dampers with low velocity, poor opening locations and too little distance before the filters.'],
    ['Does an air blender eliminate stratification?', 'A properly selected and placed air blender greatly reduces it, but it needs enough approach velocity and the right spacing upstream and downstream. It also adds pressure drop, which must be included in the fan selection.'],
    ['Why does my freeze stat trip when mixed air reads 50 F?', 'The mixed-air sensor is reporting an average or reading a warm layer while a cold layer passes over part of the coil. The freeze stat capillary detects the cold spot. A temperature traverse across the face will usually confirm this.'],
]);
