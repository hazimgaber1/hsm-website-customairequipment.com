<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('high-temperature-fan-specification'); ?>
<p class="lede">A hot gas fan specification has to tell the manufacturer three things clearly: the full range of gas temperatures the fan will see (including upsets and startup), the materials and construction needed to survive them, and how the fan will be started and run so the motor and bearings are protected. Get those right and the fan selection follows.</p>

<h2>Define the temperature duty</h2>
<p>Most high-temperature fan problems trace back to an incomplete description of the temperature cycle. State all of these:</p>
<ul>
<li><strong>Normal operating temperature</strong> and the airflow and pressure at that temperature.</li>
<li><strong>Maximum continuous temperature</strong> the fan must tolerate.</li>
<li><strong>Upset or excursion temperature</strong> and its duration, for example a burner fault or a process runaway.</li>
<li><strong>Cold start condition,</strong> typically ambient air, which is much denser than hot gas.</li>
<li><strong>Rate of temperature change</strong> during startup and shutdown, which affects thermal stress on the wheel and housing.</li>
<li><strong>Gas composition,</strong> moisture and dew point (acid dew point if sulfur is present), and particulate loading.</li>
</ul>
<p class="formula">Specification: Fan shall be designed for continuous operation at [__]°F, with excursions to [__]°F for up to [__] minutes, and cold start at [__]°F ambient.</p>

<h2>Materials and temperature derating</h2>
<p>Metal strength falls as temperature rises. The stress in a rotating wheel is proportional to the square of tip speed, so a wheel that is safe at ambient may be overstressed at high temperature. Manufacturers publish maximum safe speeds that decrease with temperature for each wheel and material, often expressed as derating factors applied to the ambient-temperature speed limit.</p>
<table>
<thead><tr><th>Material</th><th>General temperature range (indicative)</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>Carbon steel</td><td>Up to roughly 600°F to 800°F (315°C to 425°C), with derating</td><td>Most common; strength falls significantly at upper end</td></tr>
<tr><td>Low-alloy and high-strength steels</td><td>Higher than carbon steel, depending on grade</td><td>Used for higher speeds at elevated temperatures</td></tr>
<tr><td>Stainless steels (300 series)</td><td>Up to about 1,000°F (540°C) or more depending on grade</td><td>Good oxidation and corrosion resistance; lower yield strength than some alloys</td></tr>
<tr><td>Heat-resistant alloys</td><td>Above stainless limits</td><td>For very high temperatures; expensive</td></tr>
</tbody>
</table>
<p class="note">These ranges are only for orientation. The fan manufacturer's derating data for the specific wheel design and material governs. Ask for the maximum safe speed at the maximum specified temperature in the submittal.</p>
<p>Specify that the manufacturer must confirm the wheel's maximum safe speed at the maximum continuous and excursion temperatures, and that the selected operating speed is below that limit with margin.</p>

<h2>Shaft cooling and bearing protection</h2>
<p>Heat conducts along the shaft from the hot wheel to the bearings. Bearings and their lubricant have temperature limits, so high-temperature fans use one or more of the following:</p>
<ul>
<li><strong>Shaft cooler (heat slinger):</strong> a small aluminum or steel fan wheel mounted on the shaft between the housing and the inboard bearing, which blows ambient air over the shaft and bearing. Common above roughly 300°F (150°C).</li>
<li><strong>Extended shaft and pedestal</strong> to increase the distance between the hot housing and the bearings.</li>
<li><strong>Housing insulation</strong> and heat shields between the housing and bearing pedestal.</li>
<li><strong>Water-cooled or oil-circulating bearings</strong> for very high temperatures.</li>
<li><strong>High-temperature lubricants</strong> selected by the bearing manufacturer for the expected bearing temperature.</li>
</ul>
<p class="formula">Specification: Provide shaft cooler and heat shield between fan housing and inboard bearing. Bearings shall operate below the lubricant manufacturer's maximum temperature at the maximum continuous gas temperature and [__]°F ambient.</p>
<p>Arrangements that keep bearings outside the airstream, such as arrangement 1, 8 or 9, are standard for hot gas; see <a href="<?= url('guides/industrial-fan-drive-arrangements') ?>">industrial fan drive arrangements</a>.</p>

<h2>Housing and seals</h2>
<ul>
<li>Housing plate thickness and stiffeners for thermal distortion, not just pressure.</li>
<li>Insulation and lagging on the housing if personnel protection or heat loss is a concern, with stand-off pins and cladding.</li>
<li>Shaft seals rated for temperature: ceramic fiber packing, labyrinth or other high-temperature seals.</li>
<li>Expansion allowance at duct connections with high-temperature flexible connectors.</li>
<li>Inlet and outlet dampers rated for temperature, with bearings outside the hot stream.</li>
<li>Thermal growth considered in wheel-to-inlet clearance; the housing and wheel expand differently.</li>
</ul>

<h2>Motor sizing for cold start</h2>
<p>At cold start, gas density is higher than at operating temperature, so a fan selected for hot gas will draw more power with cold air at the same speed. Power scales directly with density. A fan selected for 600°F gas drawing 50 BHP could draw roughly twice that when starting on 70°F air, because the density ratio is about 2.0. Options:</p>
<ol>
<li>Size the motor for the cold start condition.</li>
<li>Use an inlet damper closed at startup, opening as the gas warms.</li>
<li>Use a variable frequency drive to limit speed until gas temperature rises.</li>
</ol>
<p>The density correction method is explained in <a href="<?= url('guides/fan-density-correction') ?>">correcting fan selections for temperature and altitude</a>.</p>
<p class="formula">Specification: Motor shall be sized for [cold start at __°F with inlet damper closed / operating temperature with VFD speed limit interlocked to gas temperature]. Manufacturer shall state BHP at both hot and cold conditions.</p>

<h2>Testing and documentation</h2>
<ul>
<li>Fan performance rated in accordance with AMCA 210, with stated corrections to operating density.</li>
<li>Wheel balance to the specified grade after final assembly, and mechanical run test at the factory.</li>
<li>Material certificates for wheel and shaft.</li>
<li>Maximum safe speed curve versus temperature in the submittal.</li>
<li>Operating instructions for startup and shutdown, including turning gear or slow roll requirements to avoid shaft bow on large fans.</li>
</ul>
<p>General fan specification items such as arrangement and AMCA class are covered in <a href="<?= url('guides/industrial-fan-specification') ?>">writing an industrial fan specification</a>. For a hot gas fan built to a defined temperature cycle, see our <a href="<?= url('products/industrial-fans') ?>">industrial fans</a>.</p>
<?php guide_end([
    ['What is a shaft cooler on a fan?', 'A shaft cooler, or heat slinger, is a small wheel on the shaft between the hot housing and the bearing. It circulates ambient air over the shaft to limit heat conducted to the bearings.'],
    ['Why does a hot gas fan need a larger motor for cold start?', 'Cold air is denser than hot gas, and fan power is proportional to density. At the same speed, a fan selected for hot gas can draw much more power on cold air, so the motor must be sized for that or startup must be controlled with a damper or VFD.'],
    ['How does temperature affect fan wheel speed limits?', 'Metal strength falls as temperature rises, so the maximum safe wheel speed decreases. Manufacturers publish derating data, and the submittal should confirm the operating speed is below the limit at the maximum temperature.'],
]);
