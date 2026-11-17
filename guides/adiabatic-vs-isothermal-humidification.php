<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('adiabatic-vs-isothermal-humidification'); ?>
<p class="lede">Isothermal (steam) humidifiers supply the heat of evaporation from a boiler, generator or electric element, so the air temperature stays roughly constant. Adiabatic (evaporative) humidifiers take that heat from the air itself, cooling it. Adiabatic systems use far less purchased energy for the humidifier but need heat added elsewhere in winter, and they need stricter water hygiene; steam is simpler to keep clean and to control.</p>

<h2>The physics in one paragraph</h2>
<p>Evaporating one pound of water takes about 1,000 to 1,060 Btu, depending on temperature. In a steam humidifier, that energy is put into the water before it reaches the air, so the air absorbs vapour with almost no change in dry-bulb. On a psychrometric chart the process line is nearly vertical. In an adiabatic humidifier, liquid water evaporates in the airstream and the heat comes from the air. The air's enthalpy stays nearly constant, so its dry-bulb falls as its humidity ratio rises, following a line of constant wet-bulb.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Isothermal (steam)</th><th>Adiabatic (evaporative or atomizing)</th></tr></thead>
<tbody>
<tr><td>Energy to evaporate water</td><td>Purchased: about 1,000 to 1,150 Btu per lb from steam, gas or electricity</td><td>Taken from the airstream</td></tr>
<tr><td>Humidifier energy use</td><td>High</td><td>Low: pumps, compressors or high-pressure pumps only</td></tr>
<tr><td>Effect on air temperature</td><td>Slight rise</td><td>Cooling; roughly 6 F of dry-bulb drop for each 10 gr/lb added</td></tr>
<tr><td>Winter heating impact</td><td>None</td><td>Must reheat the air that the humidifier cools</td></tr>
<tr><td>Summer or data center benefit</td><td>None</td><td>Free evaporative cooling when humidity can be added</td></tr>
<tr><td>Hygiene</td><td>Steam is sterile at the point of discharge</td><td>Liquid water in the airstream: needs water treatment, drainage and cleaning</td></tr>
<tr><td>Water quality needs</td><td>Depends on generator type</td><td>Usually RO or DI for atomizing; softened or RO for media</td></tr>
<tr><td>Absorption distance</td><td>Short with good dispersion</td><td>Media: none beyond pad; atomizing: longer, needs eliminator</td></tr>
<tr><td>Control precision</td><td>Very good</td><td>Good with staged or modulating systems</td></tr>
<tr><td>First cost</td><td>Moderate</td><td>Moderate to high for atomizing systems</td></tr>
</tbody>
</table>

<h2>Energy: where the bill actually lands</h2>
<p>It is tempting to say adiabatic humidification is almost free. In winter that is misleading. When the outdoor air is cold, the air must be heated anyway, and the adiabatic humidifier cools it again. The heating coil must make up the evaporation energy. The total heat input to the airstream is about the same either way; what changes is the source.</p>
<h3>Example</h3>
<p>A unit needs 120 lb/h of moisture in winter. Steam humidification requires about 120 × 1,100 ≈ 132,000 Btu/h from the steam source. An adiabatic humidifier adds the same moisture but cools the air by an amount equal to about 120 × 1,060 ≈ 127,000 Btu/h, which the heating coil must replace.</p>
<p>The economics therefore depend on what supplies that heat:</p>
<ul>
<li>If the heating coil runs on a gas boiler and the steam humidifier would run on electricity, adiabatic plus gas heat is usually much cheaper.</li>
<li>If the "heat" comes from recovered energy, return air or a heat pump, adiabatic is cheaper still.</li>
<li>If both are on the same gas boiler, the difference is small and comes down to maintenance and hygiene.</li>
</ul>
<p>In summer or in data centers, adiabatic humidification is a genuine gain, because the cooling it produces offsets mechanical cooling. That is one reason adiabatic systems are common in data center air handlers.</p>

<h2>Cooling effect as a design tool</h2>
<p>An adiabatic humidifier placed in an airstream with an air-side economizer can extend economizer hours, since evaporative cooling lowers supply temperature. In dry climates this can be significant. The limit is the space humidity: you can only add as much moisture as the space can accept.</p>
<p>The same cooling effect can be a nuisance. In a unit that must deliver warm air in winter, the humidifier's cooling has to be placed upstream of a heating coil or allowed for in the heating coil selection.</p>

<h2>Hygiene and risk</h2>
<p>Steam leaves the dispersion tube as a sterile vapour. Problems arise only if condensate is poorly drained or if steam wets downstream surfaces.</p>
<p>Adiabatic humidifiers put liquid water in contact with the airstream. Any water that sits warm and stagnant can grow bacteria, including Legionella, and aerosolized water can carry them. Mineral content in the water can produce dust. Responsible adiabatic design includes:</p>
<ul>
<li>RO or DI water, or at minimum good treatment, to remove minerals and limit nutrients.</li>
<li>Systems that drain completely when idle, with no stagnant water.</li>
<li>UV or other disinfection on the supply water, where warranted.</li>
<li>Moisture eliminators after atomizing systems and drained pans under everything.</li>
<li>A written water management program; see <a href="<?= url('guides/humidifier-hygiene-legionella-checklist') ?>">humidifier hygiene and Legionella risk checklist</a>.</li>
</ul>
<p class="warn">Healthcare facilities often restrict adiabatic humidification in patient care areas. Check ASHRAE 170, CSA Z317.2 and the owner's infection control requirements before selecting it.</p>

<h2>Choosing between them</h2>
<ul>
<li><strong>Choose steam</strong> for healthcare, labs and spaces where hygiene risk must be minimal, for tight RH control, and when the AHU has limited length for absorption.</li>
<li><strong>Choose adiabatic</strong> for data centers, large industrial and commercial spaces with economizers, and projects where heat for the evaporation can come from low-cost or recovered sources.</li>
<li><strong>Consider both in one building:</strong> steam for critical areas, adiabatic on large general systems.</li>
</ul>
<p>Within the adiabatic family, devices differ greatly in water use and maintenance; that comparison is in <a href="<?= url('guides/atomizing-vs-evaporative-media-humidifiers') ?>">high-pressure atomizing vs evaporative media humidifiers</a>. Among steam types, see <a href="<?= url('guides/steam-generator-vs-direct-steam-injection') ?>">direct steam injection vs steam generators</a>.</p>
<?php guide_end([
    ['What is the difference between adiabatic and isothermal humidification?', 'Isothermal humidifiers supply the heat of evaporation from steam, gas or electricity, so the air temperature barely changes. Adiabatic humidifiers evaporate liquid water using heat from the air, which cools it.'],
    ['Is adiabatic humidification cheaper than steam?', 'The humidifier itself uses much less energy, but in winter the cooled air must be reheated. Savings depend on whether that heat costs less than the steam source. In data centers and with economizers the cooling effect is a real benefit.'],
    ['Is steam humidification more hygienic than adiabatic?', 'Steam leaves the dispersion tube sterile, so microbial risk is lower. Adiabatic systems put liquid water in the airstream and need treated water, full drainage and a water management program.'],
]);
