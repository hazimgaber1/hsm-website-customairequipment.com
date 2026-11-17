<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('indirect-evaporative-precooling-plates'); ?>
<p class="lede">Spraying or wetting the exhaust side of a plate exchanger cools the exhaust air toward its wet-bulb temperature. The plate then cools the outdoor air sensibly against that colder exhaust, with no moisture added to the supply. The result is a large summer precooling effect from a device you already have for winter recovery.</p>

<h2>The principle</h2>
<p>Return air from a typical air-conditioned building leaves the space around 75 F with a wet-bulb near 62 F. If you evaporate water into it, its dry-bulb drops toward that 62 F wet-bulb. Cooler exhaust on one side of the plate means more heat can be drawn out of the outdoor air on the other side.</p>
<p>Because the plate separates the two airstreams, the supply stays at the outdoor humidity ratio. This is the defining feature of indirect evaporative cooling: sensible cooling of the supply without adding water to it.</p>
<p>Wheels are not used this way. A wet wheel would carry water into the supply side, which defeats the purpose and creates hygiene problems.</p>

<h2>How much cooling to expect</h2>
<p>Two efficiencies combine. The evaporative section on the exhaust side reaches some fraction of the possible dry-bulb to wet-bulb drop, and the plate then transfers a fraction of the resulting temperature difference.</p>
<p class="formula">T_exhaust,wet = T_return − η_evap × (T_return − T_wb,return)</p>
<p class="formula">T_supply = T_OA − ε_plate × (T_OA − T_exhaust,wet)</p>
<h3>Example</h3>
<p>Outdoor air is 92 F. Return air is 75 F with a 62 F wet-bulb. The wetting arrangement achieves 85 percent of the wet-bulb depression, and the plate has 70 percent sensible effectiveness at balanced flow.</p>
<p>Exhaust after wetting: 75 − 0.85 × 13 = 64.0 F.</p>
<p>Supply leaving the plate: 92 − 0.70 × (92 − 64.0) = 92 − 19.6 = 72.4 F.</p>
<p>Dry, the same plate would deliver 92 − 0.70 × 17 = 80.1 F. Wetting gives an additional 7.7 F of precooling, worth about 1.08 × 10,000 × 7.7 ≈ 83,000 Btu/h on 10,000 cfm, at the cost of water and a pump.</p>
<p>In practice, evaporation continues inside the wet channels as the exhaust absorbs heat from the plate walls, so actual performance can be better than this two-stage estimate. Manufacturers rate the combined wet effectiveness directly.</p>
<p class="note">The outdoor air dew point does not change. In humid climates the cooling coil still has to handle the full latent load, so the coil sees less sensible load but the same moisture.</p>

<h2>Wetting methods</h2>
<ul>
<li><strong>Spray nozzles upstream of the core</strong> on the exhaust side, wetting the plate channels directly. Simple to retrofit but needs good distribution.</li>
<li><strong>Distribution headers above vertically oriented channels</strong> so water runs down the plate surfaces. Gives more even wetting with less overspray.</li>
<li><strong>Wetted media upstream of the core</strong>, a direct evaporative pad in the exhaust path. Easier to maintain but loses the in-channel evaporation benefit.</li>
</ul>
<p>The plate material must suit continuous wetting: polymer, coated aluminum or stainless steel are common. Channels must drain freely, and a full-width drain pan with a properly trapped drain is required under the exhaust side.</p>

<h2>Where it pays off</h2>
<ul>
<li><strong>Dry and moderate climates</strong> where the return wet-bulb is well below outdoor dry-bulb for many hours, such as the interior West and the Prairies in summer.</li>
<li><strong>Units with high outdoor air fractions</strong> where the plate is already justified for winter recovery.</li>
<li><strong>Buildings that need to cut peak cooling demand</strong>, because the effect is largest on hot afternoons.</li>
</ul>
<p>In humid climates the return wet-bulb is higher and the cooling coil load remains latent-dominated, so the benefit shrinks. Run hourly or bin calculations before committing.</p>

<h2>Water and hygiene</h2>
<p>Any wet surface in an air handler needs a water management plan.</p>
<ul>
<li>Treat or bleed water to control mineral buildup, which coats the plate and reduces heat transfer.</li>
<li>Use once-through or recirculated water with a bleed rate set by water hardness.</li>
<li>Drain the sump and dry the wetted section when the system is not in evaporative mode.</li>
<li>Include the wetted exchanger in the building's water management program for Legionella risk, following the approach in ASHRAE Standard 188 and local requirements.</li>
<li>Provide access doors on both sides of the core for inspection and cleaning.</li>
</ul>
<p class="warn">Do not allow water from the exhaust side to reach the supply side through a leaking core seam. Specify a leak-tested core and a drainage arrangement that keeps the supply side dry.</p>

<h2>Effect on the rest of the unit</h2>
<p>Wetting the exhaust adds a small amount of pressure drop on that side, from nozzles or media and from water films in the channels. The exhaust fan must handle it, and the exhaust discharge now carries saturated air, which can fog in cool mornings and should be kept away from intakes and walkways. On the supply side, lower air temperature entering the cooling coil reduces its sensible load, so check that coil valve control remains stable at part load. Wet and dry performance should both appear on the unit schedule so the balancer and the operator know what to expect in each mode.</p>

<h2>Controls</h2>
<p>Enable wetting when outdoor air is warmer than the wetted exhaust temperature by enough to justify pump and water use, and when the building needs cooling. Disable it in economizer mode and when outdoor temperatures approach freezing. Drain the system before the heating season. During winter, the same plate returns to normal sensible recovery with frost control as described in <a href="<?= url('guides/frost-control-wheels-and-plates') ?>">frost control strategies for wheels and plates</a>.</p>
<p>Large data center units built around this principle are a separate application; see <a href="<?= url('guides/indirect-evaporative-cooling-data-centers') ?>">indirect evaporative cooling for data centers</a>. For the geometry of the plate itself, see <a href="<?= url('guides/crossflow-vs-counterflow-plate-exchangers') ?>">crossflow vs counterflow plate exchangers</a>.</p>
<?php guide_end([
    ['How does indirect evaporative precooling work on a plate exchanger?', 'Water is evaporated into the exhaust air on one side of the plate, cooling it toward its wet-bulb temperature. The plate then cools the outdoor air sensibly, without adding moisture to the supply.'],
    ['Does indirect evaporative cooling add humidity to the supply air?', 'No. The plate keeps the airstreams separate, so supply humidity ratio stays at the outdoor value. Only the exhaust is humidified.'],
    ['Can an energy wheel be used for indirect evaporative cooling?', 'No. A wetted wheel would carry water into the supply airstream as it rotates. Indirect evaporative precooling is applied to plate exchangers where the airstreams stay separate.'],
]);
