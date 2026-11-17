<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('cannabis-cultivation-dehumidification'); ?>
<p class="lede">In an indoor grow room, nearly all the irrigation water ends up in the air as plant transpiration, so the HVAC system is really a dehumidification system that also handles a large lighting heat load. Designers size it from the water the plants take up, control it to a vapor pressure deficit (VPD) target for each growth stage, and choose an approach that can remove moisture even when lights are off and sensible load collapses.</p>

<h2>Where the moisture comes from</h2>
<p>Plants draw water through their roots and release most of it through their leaves as transpiration. Only a small fraction is retained in plant tissue. In a sealed grow room, that means the latent load is roughly equal to the irrigation water applied, less runoff and whatever stays in the plants and growing medium.</p>
<p>A practical sizing approach:</p>
<p class="formula">Latent load (lb/h) ≈ Irrigation water per day (lb) × fraction transpired ÷ hours of transpiration</p>
<p>Example: a flowering room receives 1,200 US gallons (about 4,540 L) of irrigation per day. If about 90% is transpired, mostly over a 12-hour light period:</p>
<p class="formula">Water transpired = 1,200 gal × 8.34 lb/gal × 0.90 ≈ 9,000 lb/day (4,090 kg/day)</p>
<p class="formula">Peak removal rate ≈ 9,000 ÷ 12 h ≈ 750 lb/h (340 kg/h) during lights-on, plus a smaller amount during lights-off</p>
<p>At roughly 1,060 Btu per pound of water, that is about 795,000 Btu/h, or 66 tons, of latent load. Watering schedules, plant size and growth stage change this widely, so confirm irrigation volumes with the grower and size for the heaviest stage, usually mid to late flower.</p>
<p class="note">Transpiration continues during lights-off, at a reduced rate. The night period is often the hardest to control because sensible load drops sharply while moisture continues to be released.</p>

<h2>Sensible load from lighting</h2>
<p>Grow lights are the dominant sensible load. Essentially all electrical input to lights, drivers and fans ends up as heat in the room, minus a small fraction stored by photosynthesis. With LED lighting, heat is lower than with high-pressure sodium for the same light output, but it is still large. The resulting sensible heat ratio (sensible ÷ total) can vary from moderate during lights-on to near zero during lights-off.</p>

<h2>VPD targets</h2>
<p>Vapor pressure deficit is the difference between the vapor pressure inside the leaf (saturated at leaf temperature) and the vapor pressure of the surrounding air. It governs how fast plants transpire. Growers specify VPD ranges for each stage of growth: lower VPD (more humid) for clones and early vegetative growth, higher VPD (drier) for late flowering to reduce mold risk.</p>
<p>Translating VPD to HVAC setpoints:</p>
<ol>
<li>Get the grower's target VPD and air temperature for each stage, for lights-on and lights-off.</li>
<li>Estimate leaf temperature, usually slightly below air temperature under LED lighting.</li>
<li>Calculate saturated vapor pressure at leaf temperature and subtract the VPD to get target air vapor pressure.</li>
<li>Convert to dew point or RH at the air temperature for control.</li>
</ol>
<p>Controlling to dew point simplifies this, since the target moisture level is independent of air temperature swings. The conversion between humidity measures is covered in <a href="<?= url('guides/grains-and-humidity-ratio-conversions') ?>">grains and humidity ratio conversions</a>.</p>

<h2>Dehumidification approaches</h2>
<table>
<thead><tr><th>Approach</th><th>Strengths</th><th>Limitations</th></tr></thead>
<tbody>
<tr><td>Standalone dehumidifiers plus split AC</td><td>Low first cost, modular</td><td>Many units to maintain; poor coordination; dehumidifiers add heat</td></tr>
<tr><td>Integrated HVAC with cooling coil and hot gas or hydronic reheat</td><td>Single unit controls temperature and humidity; reheat from recovered heat</td><td>Larger unit; needs careful control at lights-off</td></tr>
<tr><td>Dedicated dehumidification with wraparound heat pipe or recovery</td><td>Improves moisture removal per unit cooling</td><td>Added pressure drop and cost</td></tr>
<tr><td>Desiccant dehumidification</td><td>Removes moisture independent of coil temperature</td><td>Reactivation energy; generally used for low dew points or specific conditions</td></tr>
</tbody>
</table>
<p>Most purpose-built cultivation facilities now use integrated air handling with a cooling coil that dehumidifies and a reheat coil fed by refrigerant hot gas or recovered heat, so the system can dehumidify during lights-off without overcooling the room. The general principle is explained in <a href="<?= url('guides/cooling-dehumidification-reheat') ?>">cooling, dehumidification and reheat</a>, and the reheat choice in <a href="<?= url('guides/hot-gas-reheat-vs-hydronic-reheat') ?>">hot gas reheat vs hydronic reheat</a>.</p>

<h2>Outdoor air and CO₂</h2>
<p>Many grow rooms are sealed and enriched with CO₂ to increase plant growth, with outdoor air limited to what is required for occupants and code. Sealing keeps humidity, pests and odors under control and preserves CO₂. Ventilation for workers still has to meet code, and CO₂ concentration must stay below occupational limits when people are present. Exhaust systems for odor control usually include carbon filtration.</p>

<h2>Air distribution</h2>
<ul>
<li>Uniform airflow through the canopy prevents microclimates where humidity builds and mold starts.</li>
<li>Horizontal air flow fans or ducted textile distribution help move air through dense canopies.</li>
<li>Supply air should not blow directly onto plants at high velocity.</li>
<li>Return air from under or within the canopy captures humid air where it forms.</li>
</ul>

<h2>Hygiene and reliability</h2>
<ul>
<li>Cleanable, corrosion-resistant air handler interiors; grow rooms are humid and may use sanitizers.</li>
<li>Drain pans and coils designed to drain completely, because standing water encourages biological growth.</li>
<li>MERV 13 or higher filtration to limit spores and pests.</li>
<li>Redundant capacity or multiple units per room, since a few hours of lost dehumidification can damage a crop.</li>
</ul>
<p>Natatoriums share the high latent load but differ in nearly every other respect. For a custom unit built around a specific room's transpiration and lighting load, see <a href="<?= url('products/custom-air-handlers') ?>">custom air handlers</a>.</p>
<?php guide_end([
    ['How do you calculate dehumidification for a grow room?', 'Start from irrigation water applied per day, estimate the fraction transpired (often about 90%), and divide by the hours over which transpiration occurs. That gives pounds of water per hour to remove, with a lower but continuing rate during lights-off.'],
    ['What is VPD and why does it matter for HVAC?', 'Vapor pressure deficit is the difference between leaf vapor pressure and air vapor pressure. It controls how fast plants transpire, so growers set VPD targets by growth stage, which the HVAC system must turn into temperature and humidity setpoints.'],
    ['Why is lights-off the hardest time to control grow room humidity?', 'Lighting heat disappears, so sensible load drops sharply, but plants keep transpiring. A cooling coil alone would overcool the room, so reheat is needed to dehumidify without dropping temperature.'],
]);
