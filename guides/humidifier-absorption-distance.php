<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('humidifier-absorption-distance'); ?>
<p class="lede">Absorption distance is the length of airstream downstream of a humidifier in which visible moisture is still present. Non-wetting distance is the shorter, more useful number: the distance beyond which an object in the airstream stays dry. Both get longer as air velocity rises, as air temperature falls, as the leaving RH approaches saturation, and as dispersion becomes coarser.</p>

<h2>Two definitions that are often confused</h2>
<p><strong>Absorption distance</strong> is where the steam or water mist has fully turned to invisible vapour. Before that point, the plume contains tiny droplets of condensed steam or unevaporated water. In some literature it is measured to the point where visible fog disappears.</p>
<p><strong>Non-wetting distance</strong> is where a solid object, such as a coil, filter, damper blade or temperature sensor, can sit without becoming wet. The air may still carry some fine droplets past this point, but they are small enough to follow the airflow around objects or to evaporate on contact without collecting.</p>
<p>Manufacturers generally publish non-wetting distance because that is what designers need for placement. When comparing products, confirm which value is shown and under what conditions it was measured.</p>

<h2>Why steam does not absorb instantly</h2>
<p>Steam leaving a dispersion tube is at about 212 F. When it meets cooler air, part of it condenses into tiny droplets, forming the visible plume. Those droplets then re-evaporate as they mix with surrounding air that is below saturation. Absorption is complete when every droplet has evaporated.</p>
<p>The rate depends on how quickly the steam mixes with enough air to stay below saturation. That is why dispersion design, not steam quantity alone, controls the distance. A concentrated jet of steam into a small part of the duct makes a local saturated region and a long plume; the same steam spread across many tubes absorbs in a fraction of the distance.</p>
<p>Atomized water from adiabatic humidifiers follows similar logic, but the droplets begin as liquid and must evaporate using heat from the air, which takes longer. Atomizing systems therefore usually need longer distances and a moisture eliminator.</p>

<h2>Factors that lengthen absorption</h2>
<h3>Air velocity</h3>
<p>Absorption takes a certain time. Faster air carries droplets further in that time. Doubling velocity roughly doubles the distance for the same dispersion. Humidifiers in AHU sections at 500 fpm (2.5 m/s) absorb in a shorter physical length than the same humidifier in a duct at 1,500 fpm (7.6 m/s).</p>
<h3>Air temperature</h3>
<p>Cold air holds less moisture and has less heat to re-evaporate condensed droplets. A humidifier in 55 F air needs more distance than in 75 F air for the same moisture addition.</p>
<h3>Leaving relative humidity</h3>
<p>This is the most powerful factor. As the leaving RH approaches saturation, the driving force for evaporation shrinks, and absorption distance grows very steeply. A humidifier that absorbs in 18 in. at a leaving RH of 60 percent might need several times that at 90 percent. Many designers limit leaving RH to about 80 to 85 percent to keep distances reasonable.</p>
<h3>Moisture load relative to airflow</h3>
<p>The more moisture added per unit of air (the larger the humidity ratio rise), the closer to saturation the plume gets locally, and the longer the distance.</p>
<h3>Dispersion density</h3>
<p>Closer tube spacing, more nozzles per tube and full coverage of the duct cross section shorten absorption. A single dispersion tube in a large duct can produce plumes many feet long.</p>
<h3>Steam condensation in the dispersion tube</h3>
<p>Uninsulated tubes lose heat to the cold airstream, producing condensate inside the tube that can spit out of the nozzles as large droplets. Insulated or jacketed tubes reduce this and shorten the effective distance.</p>
<h3>Airflow uniformity</h3>
<p>Nonuniform velocity across the duct or unit section means some parts of the plume travel faster and further. Turbulence immediately downstream can help mixing, but large-scale swirl or stratification can carry concentrated moisture to one side.</p>

<h2>Typical ranges</h2>
<table>
<thead><tr><th>Dispersion type</th><th>Typical non-wetting distance</th></tr></thead>
<tbody>
<tr><td>Single dispersion tube in a duct</td><td>Several feet, often 3 to 8 ft or more</td></tr>
<tr><td>Multiple-tube manifold</td><td>About 1 to 3 ft</td></tr>
<tr><td>Short-absorption panel with closely spaced insulated tubes</td><td>Often under 1 ft to about 2 ft</td></tr>
<tr><td>High-pressure atomizing with eliminator</td><td>Defined by grid to eliminator spacing, usually several feet</td></tr>
</tbody>
</table>
<p>These are broad screening values. Actual distances must come from the manufacturer's published data or selection software for your airflow, entering condition, leaving RH and load.</p>
<p class="note">Selection software usually asks for entering dry-bulb, entering RH, airflow, duct or section dimensions and moisture load. If any of these change during design, rerun the selection; the distance can change a lot.</p>

<h2>What happens when the distance is too long</h2>
<p>When an obstruction sits inside the non-wetting distance, droplets collect on it. Filters get wet and can grow microbes, coils drip into the casing, sensors read wrong, and duct liners soak. The diagnosis of those symptoms is covered in <a href="<?= url('guides/wet-duct-humidifier-troubleshooting') ?>">troubleshooting wet ducts and dripping humidifiers</a>. Selecting the location in the unit to avoid them is covered in <a href="<?= url('guides/humidifier-placement-in-ahu') ?>">how to place a humidifier within the AHU</a>.</p>

<h2>Ways to shorten it</h2>
<ul>
<li>Use a short-absorption manifold with closely spaced, insulated tubes covering the full face.</li>
<li>Locate the humidifier in warmer air, such as after the heating coil.</li>
<li>Locate it where velocity is lower and more uniform, such as within the AHU rather than in a high-velocity duct.</li>
<li>Reduce the moisture added at one point by splitting the load between two humidifiers.</li>
<li>Lower the leaving RH target at the humidifier by placing it where air is warmer.</li>
</ul>
<?php guide_end([
    ['What is humidifier absorption distance?', 'It is the distance downstream of the humidifier over which visible moisture remains in the airstream before fully evaporating. Non-wetting distance, which is shorter, is where objects in the airstream stay dry.'],
    ['What affects steam humidifier absorption distance?', 'Air velocity, air temperature, leaving relative humidity, moisture load, dispersion density and condensation in the dispersion tubes. Leaving RH near saturation has the strongest effect.'],
    ['How can I shorten humidifier absorption distance?', 'Use a multiple-tube or short-absorption manifold with insulated tubes, place the humidifier in warmer and slower air, and keep the leaving RH below about 80 to 85 percent.'],
]);
