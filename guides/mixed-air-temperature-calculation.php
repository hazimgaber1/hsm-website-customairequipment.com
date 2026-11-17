<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('mixed-air-temperature-calculation'); ?>
<p class="lede">Mixed-air temperature is the outdoor air fraction times outdoor temperature plus the return fraction times return temperature, with the fractions taken by mass. Humidity ratio mixes the same way. Using volume fractions instead of mass fractions is close enough in summer but can overstate mixed-air temperature by about 2°F in cold weather.</p>

<h2>The mixing equations</h2>
<p>When two airstreams combine adiabatically, mass and energy are conserved. With x as the outdoor air mass fraction:</p>
<p class="formula">T mix = x × T oa + (1 − x) × T ra</p>
<p class="formula">W mix = x × W oa + (1 − x) × W ra</p>
<p class="formula">h mix = x × h oa + (1 − x) × h ra</p>
<p>The enthalpy and humidity ratio equations are exact for mass fractions. The temperature equation is very close, because the specific heat of moist air changes little across normal HVAC conditions.</p>
<p>Solving the temperature equation for the fraction gives a useful field check:</p>
<p class="formula">x = (T ra − T mix) ÷ (T ra − T oa)</p>
<p>This only works when outdoor and return temperatures are at least 10°F to 15°F apart, and it depends on an accurate mixed-air reading, which stratification often prevents.</p>

<h2>Worked example: summer</h2>
<p>A unit supplies 15,000 cfm with 20% outdoor air.</p>
<ul>
<li>Return air: 75°F, 64.5 grains/lb (50% RH).</li>
<li>Outdoor air: 92°F dry bulb with 74°F mean coincident wet bulb, about 97 grains/lb.</li>
</ul>
<ol>
<li>T mix = 0.20 × 92 + 0.80 × 75 = 18.4 + 60.0 = 78.4°F.</li>
<li>W mix = 0.20 × 97 + 0.80 × 64.5 = 19.4 + 51.6 = 71.0 grains/lb.</li>
<li>From a psychrometric chart, 78.4°F at 71 grains is about 49% RH, with an enthalpy near 29.9 Btu/lb.</li>
</ol>
<p>In summer, outdoor and return air densities differ by only about 3%, so using volume fractions changes the result by a few tenths of a degree.</p>

<h2>Worked example: winter, volume vs mass</h2>
<p>The same unit in winter: 25% outdoor air by volume, measured at actual conditions, outdoor air at 0°F (−18°C), return air at 72°F (22°C).</p>
<h3>Volume-weighted (approximate)</h3>
<p class="formula">T mix = 0.25 × 0 + 0.75 × 72 = 54.0°F</p>
<h3>Mass-weighted (correct)</h3>
<p>Air density is inversely proportional to absolute temperature (°F + 460). Cold outdoor air is denser, so 25% by volume is more than 25% by mass:</p>
<ol>
<li>Outdoor mass share ∝ 0.25 ÷ 460 = 0.000543</li>
<li>Return mass share ∝ 0.75 ÷ 532 = 0.001410</li>
<li>x = 0.000543 ÷ (0.000543 + 0.001410) = 0.278</li>
<li>T mix = 0.278 × 0 + 0.722 × 72 = 52.0°F</li>
</ol>
<p>The mass-weighted answer is 2°F colder. For a preheat coil or freeze protection decision, that difference matters.</p>
<p class="note">If the outdoor air fraction is specified as a mass ratio or in standard cfm, as ventilation rates from ASHRAE 62.1 effectively are, the mass correction is already built in and the simple equation is correct.</p>

<h2>Finding the minimum outdoor air fraction</h2>
<p>The design outdoor air fraction comes from the ventilation requirement:</p>
<p class="formula">x = outdoor airflow ÷ supply airflow</p>
<p>A VAV unit with 3,000 cfm of required outdoor air has x = 3,000 ÷ 15,000 = 20% at full flow. At 50% supply airflow, the same 3,000 cfm is 40% of supply. The mixed-air temperature at that part-load condition will be much colder in winter:</p>
<p class="formula">T mix = 0.40 × 0 + 0.60 × 72 = 43.2°F (volume basis)</p>
<p>On a mass basis it is lower still. This is the condition that often sets preheat coil size, not the full-airflow case. Check both.</p>

<h2>What to do with the result</h2>
<table>
<thead><tr><th>Mixed-air result</th><th>Design implication</th></tr></thead>
<tbody>
<tr><td>Above about 50°F at all conditions</td><td>No dedicated preheat usually needed; heating coil can follow the cooling coil</td></tr>
<tr><td>Between about 35°F and 50°F at minimum airflow</td><td>Preheat often warranted; check coil freeze protection and mixing quality</td></tr>
<tr><td>Below about 35°F (2°C)</td><td>Preheat required ahead of any water coil; consider mixing aids</td></tr>
<tr><td>Summer W mix well above room W</td><td>Coil latent load rising; check coil SHR</td></tr>
</tbody>
</table>
<p>These bands are rules of thumb used in practice; freeze protection design is covered in <a href="<?= url('guides/coil-freeze-protection-methods') ?>">coil freeze protection methods</a>.</p>

<h2>Limits of the calculation</h2>
<ul>
<li>The equations give the average condition of the blend. They say nothing about whether the plenum is actually well mixed; cold layers can exist even when the average is above freezing. Physical stratification is covered in <a href="<?= url('guides/mixed-air-stratification-troubleshooting') ?>">mixed-air stratification troubleshooting</a>.</li>
<li>Fan heat from a return fan and heat gain in return plenums raise the return temperature before mixing. Use the temperature actually entering the mixing box.</li>
<li>Outdoor air passing through an energy recovery device enters the mix at its recovered condition, not at the weather condition.</li>
<li>Damper leakage at minimum position changes the real outdoor air fraction.</li>
</ul>
<p>For plotting the result on a psychrometric chart, see <a href="<?= url('guides/psychrometric-process-ahu-design') ?>">plotting AHU processes</a>.</p>
<h2>Three-stream mixing</h2>
<p>Some units blend more than two streams, for example outdoor air, return air and a bypass around an energy recovery wheel. The same principle applies: each property is the mass-weighted sum of all streams.</p>
<p class="formula">T mix = Σ (x i × T i), with Σ x i = 1</p>
<p>For 20% outdoor air at 10°F, 15% recovered outdoor air leaving a wheel at 50°F and 65% return air at 72°F (volume fractions used for simplicity): T mix = 0.20 × 10 + 0.15 × 50 + 0.65 × 72 = 2.0 + 7.5 + 46.8 = 56.3°F. Treat each stream with its own actual condition, and apply the mass correction when any stream is very cold.</p>
<h2>Using the calculation to check sensors</h2>
<p>During commissioning, compare the calculated mixed-air temperature with what the mixed-air sensor reports at a known outdoor airflow. If outdoor airflow is measured by a station and the return and outdoor temperatures are known, the expected mixed temperature follows directly. A sensor reading several degrees away from the calculated value points either to a sensor problem, such as a single-point probe in a poorly mixed plenum, or to an airflow measurement problem. Either way, it should be resolved before the economizer and low-limit sequences are trusted.</p>
<?php guide_end([
    ['How do you calculate mixed air temperature?', 'Multiply the outdoor air fraction by the outdoor temperature, multiply the return air fraction by the return temperature, and add them. For best accuracy in cold weather, use fractions by mass rather than by volume.'],
    ['How do I find the outdoor air percentage from temperatures?', 'Subtract mixed-air temperature from return temperature and divide by return temperature minus outdoor temperature. It is only reliable when outdoor and return temperatures differ by at least 10 to 15 F and the mixed-air reading is not affected by stratification.'],
    ['Does humidity mix the same way as temperature?', 'Yes. Humidity ratio mixes in direct proportion to the mass fractions. Relative humidity does not mix linearly, so always convert to humidity ratio or grains first.'],
]);
