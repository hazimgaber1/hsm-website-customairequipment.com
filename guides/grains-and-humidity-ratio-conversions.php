<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('grains-and-humidity-ratio-conversions'); ?>
<p class="lede">Every moisture metric can be derived from the water vapour partial pressure. Relative humidity compares it with the saturation pressure at the dry-bulb; dew point is the temperature at which it would be the saturation pressure; humidity ratio and grains per pound divide it by the dry air pressure, which is where altitude comes in. Work through vapour pressure and conversions become routine.</p>

<h2>The core equations</h2>
<p class="formula">RH = p_w ÷ p_ws(T_db)</p>
<p class="formula">W = 0.622 × p_w ÷ (p − p_w)  (lb water per lb dry air)</p>
<p class="formula">grains per lb = 7,000 × W</p>
<p class="formula">Dew point = the temperature at which p_ws equals p_w</p>
<ul>
<li><strong>p_w</strong> is the partial pressure of water vapour.</li>
<li><strong>p_ws(T)</strong> is the saturation vapour pressure at temperature T, from psychrometric tables or a standard formula.</li>
<li><strong>p</strong> is the total barometric pressure, which falls with altitude.</li>
<li><strong>0.622</strong> is the ratio of the molecular weights of water and dry air.</li>
</ul>
<p>Rearranged to get vapour pressure from humidity ratio:</p>
<p class="formula">p_w = W × p ÷ (0.622 + W)</p>
<p>Moist air enthalpy, if needed, in Btu per lb of dry air:</p>
<p class="formula">h = 0.240 × T + W × (1,061 + 0.444 × T)</p>

<h2>Saturation pressures for hand calculations</h2>
<table>
<thead><tr><th>Temperature (F)</th><th>p_ws (psia)</th><th>Temperature (F)</th><th>p_ws (psia)</th></tr></thead>
<tbody>
<tr><td>40</td><td>0.1217</td><td>60</td><td>0.2563</td></tr>
<tr><td>45</td><td>0.1475</td><td>65</td><td>0.3057</td></tr>
<tr><td>50</td><td>0.1781</td><td>70</td><td>0.3632</td></tr>
<tr><td>55</td><td>0.2141</td><td>75</td><td>0.4298</td></tr>
</tbody>
</table>
<p>These are over liquid water. Below 32 F, values over ice are slightly lower and give the frost point rather than the dew point. Interpolate linearly between table rows for hand work; the error over 5 F steps is small for HVAC purposes.</p>

<h2>Barometric pressure and altitude</h2>
<p>Standard atmospheric pressure at elevation Z (ft) is approximately:</p>
<p class="formula">p = 14.696 × (1 − 6.8754 × 10⁻⁶ × Z)^5.2559  (psia)</p>
<table>
<thead><tr><th>Elevation</th><th>Approximate pressure</th></tr></thead>
<tbody>
<tr><td>Sea level</td><td>14.70 psia</td></tr>
<tr><td>1,000 ft (300 m)</td><td>14.17 psia</td></tr>
<tr><td>3,500 ft (1,070 m)</td><td>12.93 psia</td></tr>
<tr><td>5,000 ft (1,520 m)</td><td>12.23 psia</td></tr>
</tbody>
</table>
<p class="note">RH and dew point depend only on vapour pressure and temperature, so they do not change with altitude for the same air. Humidity ratio and grains do change, because the same vapour pressure is divided by less dry air pressure.</p>

<h2>Worked example 1: RH to grains and dew point at sea level</h2>
<p>Air is at 75 F and 50 percent RH at sea level.</p>
<ol>
<li>p_ws at 75 F = 0.4298 psia.</li>
<li>p_w = 0.50 × 0.4298 = 0.2149 psia.</li>
<li>W = 0.622 × 0.2149 ÷ (14.696 − 0.2149) = 0.13367 ÷ 14.481 = 0.00923 lb/lb.</li>
<li>Grains = 7,000 × 0.00923 = 64.6 gr/lb.</li>
<li>Dew point: p_w = 0.2149 psia falls just above the 55 F value of 0.2141, so the dew point is about 55.1 F.</li>
</ol>

<h2>Worked example 2: same air at 5,000 ft</h2>
<p>The same 75 F and 50 percent RH air at 5,000 ft elevation, where p = 12.23 psia.</p>
<ol>
<li>p_w is still 0.2149 psia.</li>
<li>W = 0.622 × 0.2149 ÷ (12.23 − 0.2149) = 0.13367 ÷ 12.015 = 0.01113 lb/lb.</li>
<li>Grains = 77.9 gr/lb.</li>
<li>Dew point is unchanged at about 55.1 F.</li>
</ol>
<p>Using a sea-level chart at 5,000 ft would understate the grains by about 17 percent. For load calculations, the 0.68 and 4.5 factors in latent and enthalpy equations also need density correction; that adjustment is covered where those loads are calculated, such as in <a href="<?= url('guides/dehumidification-load-calculation') ?>">calculating latent load and required supply dew point</a>.</p>

<h2>Worked example 3: grains to dew point and RH</h2>
<p>Supply air leaves a coil at 50 gr/lb and 54 F at sea level. What are its dew point and RH?</p>
<ol>
<li>W = 50 ÷ 7,000 = 0.00714 lb/lb.</li>
<li>p_w = 0.00714 × 14.696 ÷ (0.622 + 0.00714) = 0.1049 ÷ 0.6291 = 0.1668 psia.</li>
<li>Dew point: between 45 F (0.1475) and 50 F (0.1781). Interpolating, (0.1668 − 0.1475) ÷ (0.1781 − 0.1475) = 0.63, so about 48.2 F.</li>
<li>p_ws at 54 F, interpolating between 50 F and 55 F: about 0.2069 psia.</li>
<li>RH = 0.1668 ÷ 0.2069 ≈ 81 percent.</li>
</ol>

<h2>Worked example 4: dew point to RH at a different temperature</h2>
<p>A room has a dew point of 40 F. What is the RH at 70 F, and at a window surface at 50 F?</p>
<ol>
<li>p_w = p_ws at 40 F = 0.1217 psia.</li>
<li>At 70 F: RH = 0.1217 ÷ 0.3632 = 33.5 percent.</li>
<li>At 50 F: RH = 0.1217 ÷ 0.1781 = 68 percent. The surface is above the dew point, so no condensation, but the air in contact with it is humid.</li>
</ol>
<p>This is the same logic used to set winter humidity limits in <a href="<?= url('guides/max-winter-indoor-rh-calculation') ?>">calculating maximum winter indoor RH</a>.</p>

<h2>Where wet-bulb fits</h2>
<p>Field readings often come from a sling or electronic psychrometer that reports wet-bulb rather than RH. Wet-bulb sits between dry-bulb and dew point and is close to a line of constant enthalpy. Converting it to humidity ratio needs the psychrometric equation that links the two temperatures through the heat of evaporation, which is tedious by hand. The practical route is a psychrometric chart or software set to the correct barometric pressure. Never read wet-bulb from a sea-level chart at a high-altitude site; the lines move.</p>

<h2>Common conversion errors</h2>
<ul>
<li>Using percent RH as a fraction without dividing by 100.</li>
<li>Mixing gauge and absolute pressure; psychrometric equations need absolute pressure.</li>
<li>Using saturation pressure over water for frost-point work below 32 F.</li>
<li>Rounding humidity ratio to two significant figures before multiplying by 7,000, which can shift grains by several units.</li>
<li>Assuming RH stays constant when air is heated or cooled; only dew point and humidity ratio stay constant.</li>
</ul>

<h2>Quick reference conversions</h2>
<ul>
<li>1 lb = 7,000 grains; 1 g/kg = 7 gr/lb.</li>
<li>Humidity ratio in g/kg is numerically 1,000 × W.</li>
<li>1 psi = 2.036 in. Hg = 6.895 kPa.</li>
<li>Near room conditions at sea level, 1 F of dew point is roughly 2 to 3 gr/lb.</li>
</ul>
<p>For SI work, the same equations hold with pressures in kPa and 101.325 kPa at sea level. Use the ASHRAE Handbook of Fundamentals psychrometric chapter for formulas covering saturation pressure over the full temperature range.</p>
<?php guide_end([
    ['How do I convert relative humidity to grains per pound?', 'Multiply RH by the saturation pressure at the dry-bulb to get vapour pressure, compute humidity ratio as 0.622 times vapour pressure divided by barometric pressure minus vapour pressure, and multiply by 7,000.'],
    ['Does altitude change dew point or grains?', 'Dew point and RH do not change for the same air. Humidity ratio and grains do, because the same vapour pressure is divided by a lower dry air pressure. At 5,000 ft grains are about 20 percent higher than at sea level for the same dew point.'],
    ['How many grains per pound is one degree of dew point?', 'Near typical room conditions at sea level, roughly 2 to 3 grains per pound per degree F of dew point. The value rises at higher dew points because saturation pressure grows faster with temperature.'],
]);
