<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('casing-condensation-risk-calculation'); ?>
<p class="lede">Predict exterior sweating by calculating the coldest exterior surface temperature from the casing's thermal bridging factor: T surface = T inside + kb × (T room − T inside). If that surface temperature is below the room dew point, the casing will sweat. Rearranged, the minimum bridging factor needed is (T dew point − T inside) ÷ (T room − T inside).</p>

<h2>The relationship</h2>
<p>The thermal bridging factor kb, defined in EN 1886 and used in AHRI 1350, describes how close the worst point on a casing's exterior gets to the temperature of the air inside. A factor of 1.0 would mean the exterior stays at room temperature everywhere; a factor of 0 would mean some spot on the exterior is as cold as the supply air. What the factor physically represents and how thermal breaks raise it is explained in <a href="<?= url('guides/thermal-break-casing-panels') ?>">thermal break panels</a>.</p>
<p>For a casing with cold air inside and warm air outside:</p>
<p class="formula">T s,min = T i + kb × (T a − T i)</p>
<p class="formula">kb required = (T dp − T i) ÷ (T a − T i)</p>
<p>where T i is the air temperature inside the section, T a is the surrounding air temperature, T dp is the surrounding air dew point and T s,min is the coldest exterior surface temperature.</p>

<h2>Step-by-step method</h2>
<ol>
<li><strong>Find the coldest section.</strong> In a draw-through cooling unit, it is usually the section just downstream of the cooling coil, where air is coldest and the coil leaving temperature applies. In a unit with low-temperature supply, it may be the fan or discharge sections.</li>
<li><strong>Set the internal air temperature.</strong> Use the coil leaving temperature at design, and check whether lower values occur in operation, such as dehumidification modes or chilled water reset downward.</li>
<li><strong>Set the surrounding condition.</strong> For indoor units, the mechanical room dry bulb and dew point at their worst. Unconditioned mechanical rooms in humid climates can approach outdoor dew point. For outdoor units in summer, use the outdoor design dew point and coincident dry bulb.</li>
<li><strong>Calculate the dew point</strong> from dry bulb and relative humidity, or read it from a psychrometric chart.</li>
<li><strong>Calculate kb required.</strong></li>
<li><strong>Add a margin.</strong> Real conditions vary. Surface coefficients drop in still air, corners behave worse than test panels, and installation can damage seals. A margin of a couple of degrees on surface temperature, or selecting a class comfortably above the required factor, is prudent.</li>
<li><strong>Select a thermal bridging class</strong> whose factor meets the requirement with margin, and specify it. See <a href="<?= url('guides/ahri-1350-casing-performance-spec') ?>">AHRI 1350 casing specification</a>.</li>
</ol>

<h2>Worked example: indoor unit, humid mechanical room</h2>
<p>A cooling unit in a mechanical room that is ventilated but not dehumidified.</p>
<ul>
<li>Coil leaving air: T i = 52°F (11.1°C)</li>
<li>Mechanical room: T a = 80°F (26.7°C) at 60% RH</li>
<li>Room dew point: about 65°F (18.3°C)</li>
</ul>
<ol>
<li>kb required = (65 − 52) ÷ (80 − 52) = 13 ÷ 28 = 0.46</li>
<li>With a 2°F surface margin (aim for a surface at 67°F): kb = (67 − 52) ÷ 28 = 0.54</li>
<li>Check a casing with kb = 0.60: T s,min = 52 + 0.60 × 28 = 68.8°F. That is about 4°F above dew point. No sweating expected.</li>
<li>Check a casing with kb = 0.40: T s,min = 52 + 0.40 × 28 = 63.2°F. Below the 65°F dew point. Expect sweating at bridges.</li>
</ol>
<p class="note">The same casing in a conditioned room at 75°F and 50% RH (dew point about 55°F) needs only kb = (55 − 52) ÷ (75 − 52) = 0.13. Room conditions drive the answer as much as the casing does.</p>

<h2>Worked example: outdoor unit in winter</h2>
<p>The interior surface of an outdoor unit carrying warm return air in winter can also reach the air's dew point, causing condensation or frost inside the casing. Treating the bridging factor symmetrically, as an approximation, the coldest interior surface temperature is:</p>
<p class="formula">T s,in,min ≈ T out + kb × (T i − T out)</p>
<ul>
<li>Return air: 72°F at 30% RH, dew point about 39°F</li>
<li>Outdoor air: 0°F</li>
</ul>
<ol>
<li>kb = 0.60: T s = 0 + 0.60 × 72 = 43.2°F. Above 39°F; acceptable.</li>
<li>kb = 0.45: T s = 0 + 0.45 × 72 = 32.4°F. Below dew point and freezing; expect frost on interior bridges.</li>
</ol>
<p>In humidified buildings the return air dew point is higher, making this case more demanding.</p>

<h2>Sensitivity table</h2>
<p>Required bridging factor for an internal air temperature of 52°F at various surroundings, without margin:</p>
<table>
<thead><tr><th>Surroundings</th><th>Dew point</th><th>kb required</th></tr></thead>
<tbody>
<tr><td>75°F, 50% RH</td><td>55°F</td><td>0.13</td></tr>
<tr><td>80°F, 50% RH</td><td>60°F</td><td>0.29</td></tr>
<tr><td>80°F, 60% RH</td><td>65°F</td><td>0.46</td></tr>
<tr><td>85°F, 55% RH</td><td>67°F</td><td>0.45</td></tr>
<tr><td>85°F, 70% RH</td><td>74°F</td><td>0.67</td></tr>
</tbody>
</table>
<p>Dew points rounded to the nearest degree.</p>

<h2>Limits of the method</h2>
<ul>
<li>The bridging factor is measured on a test casing under defined conditions. Doors, penetrations and field joints on real units can be worse unless they were part of the tested assembly.</li>
<li>Still air around the unit lowers the exterior film coefficient and lowers surface temperatures at bridges. Units in corners or under ducts are more exposed.</li>
<li>The calculation predicts the worst point, not the extent of wetting. A few small spots may be tolerable on some projects and not on others.</li>
<li>For diagnosing sweating on an existing unit, the approach is different; start with site measurements rather than design factors. Where sweating stems from air leaks rather than conduction, see <a href="<?= url('guides/casing-leaks-door-seal-troubleshooting') ?>">troubleshooting casing leaks</a>.</li>
</ul>
<h2>Reducing risk when the class is not enough</h2>
<p>If no available casing class meets the required factor with margin, other levers exist. Lowering the mechanical room dew point with ventilation or dehumidification is often the cheapest fix. Raising the coil leaving temperature where the process allows reduces the temperature difference. Moving the coldest sections away from walls or corners where air is still improves surface coefficients. As a last resort, insulating the exterior of the coldest sections on site works, but it hides leaks and corrosion, so treat it as a compromise.</p>
<?php guide_end([
    ['What thermal bridging factor do I need to prevent casing condensation?', 'Calculate it from your conditions: subtract the internal air temperature from the room dew point and divide by the room temperature minus the internal air temperature. Add margin, then select a thermal bridging class that meets the result.'],
    ['Why does an air handler sweat only in summer?', 'In summer, mechanical rooms and outdoor air are warmer and more humid while the air inside the unit is coldest. The exterior surface at thermal bridges drops below the surrounding dew point, so moisture condenses.'],
    ['Does a conditioned mechanical room reduce casing condensation?', 'Yes. Lowering the room dew point is very effective. A casing that sweats in a humid 80 F room may stay dry in a 75 F room at 50% RH because the dew point is about 10 F lower.'],
]);
