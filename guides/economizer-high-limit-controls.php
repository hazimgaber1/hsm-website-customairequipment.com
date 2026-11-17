<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('economizer-high-limit-controls'); ?>
<p class="lede">The economizer high limit is the rule that shuts off free cooling when outdoor air would add more load than return air. Fixed dry-bulb is simple and robust and suits dry climates; differential dry-bulb tracks the return condition and does well in dry and marine climates; fixed and differential enthalpy account for humidity and suit humid climates, but only if humidity sensors are maintained.</p>

<h2>What the high limit decides</h2>
<p>An air-side economizer opens outdoor air dampers beyond minimum to cool with outdoor air. That is beneficial only while outdoor air carries less heat than the return air it replaces. In dry weather, temperature alone captures that. In humid weather, outdoor air that is cooler than return air can still carry more enthalpy because of its moisture, and admitting it increases the coil load. The high limit is the test that decides when to stop.</p>
<p>When the high limit trips, outdoor air returns to its ventilation minimum and mechanical cooling handles the load. A limit set too low wastes free cooling hours; a limit set too high, or using the wrong metric for the climate, increases cooling energy and can raise space humidity. Which strategies are permitted in each climate zone is set by the energy code; see <a href="<?= url('guides/economizer-requirements-by-climate-zone') ?>">economizer requirements by climate zone</a>.</p>

<h2>The four common strategies</h2>
<h3>Fixed dry-bulb</h3>
<p>The economizer is enabled when outdoor air temperature is below a fixed setpoint. It needs only an outdoor temperature sensor, which is cheap and stable. Its weakness is that it ignores humidity, so in humid climates it may admit moist air that is cool by temperature but high in enthalpy.</p>
<h3>Differential dry-bulb</h3>
<p>The economizer is enabled when outdoor air temperature is below return air temperature (sometimes with a small offset). It adapts automatically to the return condition, capturing more hours when the return is warm. It still ignores humidity, and it needs two temperature sensors whose relative accuracy matters.</p>
<h3>Fixed enthalpy (with fixed dry-bulb)</h3>
<p>The economizer is enabled when outdoor enthalpy is below a fixed limit and outdoor temperature is below a fixed dry-bulb limit. It recognises humid outdoor air but depends on an outdoor humidity sensor that is exposed to weather and tends to drift.</p>
<h3>Differential enthalpy (with fixed dry-bulb)</h3>
<p>The economizer is enabled when outdoor enthalpy is below return enthalpy, and below a fixed dry-bulb limit. In principle it is the most thermodynamically accurate option. In practice it needs two humidity sensors, and errors in either one can make the comparison wrong in a large share of hours.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Fixed dry-bulb</th><th>Differential dry-bulb</th><th>Fixed enthalpy + dry-bulb</th><th>Differential enthalpy + dry-bulb</th></tr></thead>
<tbody>
<tr><td>Sensors needed</td><td>1 temperature</td><td>2 temperature</td><td>1 temperature, 1 humidity</td><td>2 temperature, 2 humidity</td></tr>
<tr><td>Accounts for humidity</td><td>No</td><td>No</td><td>Yes (outdoor only)</td><td>Yes (outdoor and return)</td></tr>
<tr><td>Adapts to return conditions</td><td>No</td><td>Yes</td><td>No</td><td>Yes</td></tr>
<tr><td>Sensitivity to sensor error</td><td>Low</td><td>Moderate</td><td>Moderate to high</td><td>High</td></tr>
<tr><td>Maintenance burden</td><td>Lowest</td><td>Low</td><td>Humidity sensor calibration</td><td>Two humidity sensors to calibrate</td></tr>
<tr><td>Best suited to</td><td>Dry and cold climates</td><td>Dry and marine climates</td><td>Humid climates</td><td>Humid climates with good maintenance</td></tr>
<tr><td>Typical code status</td><td>Allowed in many zones with setpoints by zone</td><td>Often restricted in humid zones</td><td>Allowed in many zones</td><td>Allowed in many zones</td></tr>
</tbody>
</table>

<h2>Why sensor accuracy changes the ranking</h2>
<p>Research and field experience have shown that the theoretical advantage of enthalpy controls can be lost to humidity sensor error. Consider differential enthalpy in mild, moderately humid weather, where outdoor and return enthalpy differ by only 1 to 2 Btu/lb. A humidity sensor error of a few percentage points RH shifts calculated enthalpy by about the same amount, which is enough to flip the decision. With two sensors, errors can either cancel or compound.</p>
<p>Dry-bulb sensors are far more stable. For that reason, many designers prefer:</p>
<ul>
<li>Fixed or differential dry-bulb in dry climates, where humidity rarely matters.</li>
<li>Fixed enthalpy plus fixed dry-bulb in humid climates, using one well-located outdoor humidity sensor, or a shared, maintained outdoor sensor or weather feed across several AHUs.</li>
<li>Differential enthalpy only where the owner commits to periodic humidity sensor calibration.</li>
</ul>
<p class="note">A single high-quality outdoor humidity sensor shared by all AHUs on a site, checked annually, is often more reliable than one cheap sensor on each unit.</p>

<h2>Implementation details that matter</h2>
<ul>
<li><strong>Hysteresis.</strong> Add a deadband (for example 1 to 2 °F, or the enthalpy equivalent) so the economizer does not cycle on and off around the limit.</li>
<li><strong>Sensor location.</strong> Outdoor sensors should be shaded, away from exhaust and condenser discharge, and in moving air. Return sensors should read mixed return air, not a stratified layer near one inlet.</li>
<li><strong>Integrated operation.</strong> Codes commonly require the economizer to stay open while mechanical cooling runs, as long as the high limit permits. Do not lock out the economizer just because the compressor or chilled water valve is active.</li>
<li><strong>Low limit.</strong> The high limit is separate from the mixed air low limit that protects coils from freezing; both apply.</li>
<li><strong>Energy recovery bypass.</strong> On units with energy recovery, the economizer decision also controls the wheel or plate bypass; see <a href="<?= url('guides/wheel-economizer-bypass-operation') ?>">wheel economizer bypass operation</a>.</li>
</ul>

<h2>Diagnosing a high limit that seems wrong</h2>
<p>If the economizer is off in obviously cool weather or on in humid weather, check sensors before changing the strategy. Detailed steps are in <a href="<?= url('guides/economizer-faults-troubleshooting') ?>">troubleshooting economizer faults</a>.</p>
<?php guide_end([
    ['Which economizer high limit is best?', 'It depends on climate and maintenance. Fixed or differential dry-bulb is simple and reliable in dry climates. Enthalpy-based limits suit humid climates but rely on humidity sensors that must be kept calibrated. Check which options your energy code allows.'],
    ['Why is differential enthalpy not always the best choice?', 'It needs two humidity sensors, and small errors in either can flip the comparison when outdoor and return enthalpy are close. Without regular calibration, it can perform worse than a simpler dry-bulb limit.'],
    ['Should an economizer stay open when mechanical cooling is running?', 'Generally yes. Integrated economizer operation keeps outdoor air dampers open while mechanical cooling makes up the rest, as long as the high limit allows. Many energy codes require it.'],
]);
