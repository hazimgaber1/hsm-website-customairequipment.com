<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('recovery-effectiveness-calculation'); ?>
<p class="lede">Effectiveness is the actual change in supply air temperature, humidity ratio or enthalpy divided by the maximum possible change, corrected for the smaller of the two mass flows. Once you know the three effectiveness values, you can compute the supply air leaving conditions by rearranging the same equations.</p>

<h2>The defining equation</h2>
<p>The industry definition, used by ASHRAE and in AHRI 1060 ratings, compares the supply side change to the largest change physically possible:</p>
<p class="formula">ε = Ws × (X1 − X2) ÷ [Wmin × (X1 − X3)]</p>
<ul>
<li><strong>Ws</strong> is the supply mass flow and <strong>Wmin</strong> is the smaller of the supply and exhaust mass flows.</li>
<li><strong>X1</strong> is the outdoor air entering the device, <strong>X2</strong> is the supply air leaving, and <strong>X3</strong> is the exhaust air entering.</li>
<li>X is dry-bulb temperature for <strong>sensible</strong> effectiveness, humidity ratio for <strong>latent</strong> effectiveness, and enthalpy for <strong>total</strong> effectiveness.</li>
</ul>
<p>The sign convention works for both heating and cooling. In winter X1 is colder than X3, and in summer it is warmer; the ratio stays positive either way.</p>
<p class="note">With equal mass flows, the Ws ÷ Wmin term is 1. With exhaust smaller than supply, Wmin is the exhaust, and the supply side change shrinks because there is less exhaust to exchange with.</p>

<h2>Solving for leaving supply conditions</h2>
<p>Rearrange the equation to find the supply leaving value:</p>
<p class="formula">X2 = X1 − ε × (Wmin ÷ Ws) × (X1 − X3)</p>
<p>Apply it three times, once each for temperature, humidity ratio and enthalpy. For a sensible-only device, use the latent effectiveness of zero, and the humidity ratio leaving equals the entering value unless condensation occurs.</p>
<p>The exhaust leaving conditions follow from an energy balance, since whatever the supply gains the exhaust loses:</p>
<p class="formula">X4 = X3 + (Ws ÷ We) × (X1 − X2)</p>
<p>The exhaust leaving value matters because it sets condensation and frost risk on the exhaust side.</p>

<h2>Worked example: summer, unbalanced flow</h2>
<p>An enthalpy wheel has published effectiveness at your airflows of 72 percent sensible and 66 percent latent. Supply is 10,000 cfm and exhaust is 8,500 cfm, both at near-standard density, so mass flow ratios follow the cfm ratio.</p>
<table>
<thead><tr><th>Stream</th><th>Dry bulb</th><th>Humidity ratio</th></tr></thead>
<tbody>
<tr><td>Outdoor air entering (1)</td><td>93 F</td><td>0.0170 lb/lb (119 gr/lb)</td></tr>
<tr><td>Exhaust entering (3)</td><td>75 F</td><td>0.0093 lb/lb (65 gr/lb)</td></tr>
</tbody>
</table>
<p>Wmin ÷ Ws = 8,500 ÷ 10,000 = 0.85.</p>
<p><strong>Supply dry bulb:</strong> 93 − 0.72 × 0.85 × (93 − 75) = 93 − 11.0 = 82.0 F.</p>
<p><strong>Supply humidity ratio:</strong> 0.0170 − 0.66 × 0.85 × (0.0170 − 0.0093) = 0.0170 − 0.00432 = 0.01268 lb/lb, or about 89 gr/lb.</p>
<p><strong>Supply enthalpy:</strong> use h = 0.240 T + W (1061 + 0.444 T). Outdoor h1 = 22.32 + 0.0170 × 1102.3 ≈ 41.1 Btu/lb. Supply h2 = 19.68 + 0.01268 × 1097.4 ≈ 33.6 Btu/lb.</p>
<p>The implied total effectiveness is (41.1 − 33.6) ÷ [0.85 × (41.1 − 28.2)] where exhaust h3 = 18.0 + 0.0093 × 1094.3 ≈ 28.2 Btu/lb. That gives 7.5 ÷ 11.0 ≈ 0.68, which sits between the sensible and latent values, as it should.</p>
<p><strong>Recovered load:</strong> 4.5 × 10,000 × (41.1 − 33.6) ≈ 337,500 Btu/h, or about 28 tons taken off the cooling coil at this condition.</p>
<p><strong>Exhaust leaving dry bulb:</strong> 75 + (10,000 ÷ 8,500) × (93 − 82) = 75 + 12.9 = 87.9 F.</p>

<h2>Worked example: winter, sensible plate</h2>
<p>A plate core with 65 percent sensible effectiveness handles 6,000 cfm each way. Outdoor air is 5 F and exhaust is 70 F at 25 percent RH.</p>
<p>Supply leaving = 5 + 0.65 × (70 − 5) = 47.3 F. The heating recovered is 1.08 × 6,000 × 42.3 ≈ 274,000 Btu/h. Exhaust leaving = 70 − 42.3 = 27.7 F, which is below freezing and below the exhaust dew point of about 33 F, so this core will condense and is at frost risk. Checking that properly is covered in <a href="<?= url('guides/frost-threshold-temperature-calculation') ?>">calculating the frost threshold temperature</a>.</p>

<h2>When a sensible device condenses</h2>
<p>The equations assume the humidity ratio of each stream changes only through desiccant transfer. A plate or sensible wheel that cools exhaust below its dew point removes water from the exhaust by condensation, and that released latent heat warms the plates. The supply then leaves slightly warmer than the dry calculation predicts, and the exhaust leaves saturated rather than at the calculated dry-bulb with its original moisture.</p>
<p>For screening, the dry calculation is conservative on supply temperature and is acceptable. For a frost or drainage check, assume the exhaust leaves at saturation and compute how much water condenses:</p>
<p class="formula">Condensate (lb/h) = 4.5 × CFM_exhaust × (W_entering − W_saturated at leaving temperature)</p>
<p>The 4.5 factor converts standard cfm to pounds of dry air per hour, and humidity ratios are in pounds of water per pound of dry air. Manufacturer selection software accounts for condensing performance directly and should be used for final values.</p>

<h2>Checking results on a psychrometric chart</h2>
<p>Plot the outdoor and exhaust entering states. For an enthalpy device with similar sensible and latent effectiveness, the supply leaving state lies close to the straight line between them, roughly the effectiveness fraction of the way from outdoor toward exhaust. If your calculated point sits far off that line, recheck the humidity ratio arithmetic. For a sensible device, the supply leaving point moves horizontally from the outdoor state, at constant humidity ratio. These two quick visual checks catch most transcription errors in spreadsheets.</p>

<h2>Common mistakes</h2>
<ul>
<li><strong>Using cfm ratios at very different densities.</strong> If one stream is much hotter or at a different elevation, convert to mass flow.</li>
<li><strong>Using rated effectiveness at the wrong airflow.</strong> Effectiveness falls as face velocity rises. Use the value at your actual flows, not the catalog headline.</li>
<li><strong>Ignoring leakage.</strong> Wheel carryover and seal leakage change the net outdoor air delivered. Correct supply flow using the device's leakage ratings; see <a href="<?= url('guides/eatr-oacf-wheel-leakage') ?>">EATR and OACF</a>.</li>
<li><strong>Adding sensible and latent effectiveness.</strong> They are not additive. Compute each property separately and calculate total from enthalpies.</li>
<li><strong>Forgetting fan heat.</strong> If a fan sits upstream of the device, the entering air is warmer than outdoor by the fan heat.</li>
</ul>
<p>Annual savings and payback build on these leaving conditions but need weather data and energy prices; that work is in <a href="<?= url('guides/heat-recovery-payback-calculation') ?>">calculating energy recovery payback</a>.</p>
<?php guide_end([
    ['How do you calculate energy recovery effectiveness?', 'Divide the supply air change by the maximum possible change, multiplied by the ratio of supply to minimum mass flow. Use dry bulb for sensible, humidity ratio for latent and enthalpy for total effectiveness.'],
    ['How do I find the leaving air temperature of an energy wheel?', 'Supply leaving temperature equals outdoor temperature minus effectiveness times the minimum to supply flow ratio times the difference between outdoor and exhaust temperatures. Use the effectiveness rated at your actual airflows.'],
    ['Can I add sensible and latent effectiveness to get total effectiveness?', 'No. Calculate leaving temperature and humidity ratio separately, compute the enthalpies, and then find total effectiveness from the enthalpy change. Total effectiveness usually lands between the sensible and latent values.'],
]);
