<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('dew-point-control-vs-rh-control'); ?>
<p class="lede">Controlling to supply air dew point is more stable than controlling to space relative humidity, because dew point does not change when the air warms or cools. RH control is intuitive and matches how humidity requirements are usually written, but every temperature swing looks like a humidity swing, which makes loops hunt. Most well-behaved systems control the supply dew point and use space RH only to reset it or as a limit.</p>

<h2>Why the choice of variable matters</h2>
<p>Relative humidity is the ratio of the actual vapour pressure to the saturation vapour pressure at the current dry-bulb. Raise the temperature and RH falls even though no moisture was removed. Near room conditions, a 1 F change in dry-bulb changes RH by roughly 2 percentage points at constant moisture content.</p>
<p>Dew point, like humidity ratio and grains per pound, measures the moisture content itself. It is unaffected by sensible heating or cooling unless condensation occurs. A humidifier or a dehumidifying coil changes dew point; a reheat coil or a warm room does not.</p>
<p>Conversions between these measures, including altitude effects, are worked through in <a href="<?= url('guides/grains-and-humidity-ratio-conversions') ?>">converting RH, dew point, grains and humidity ratio</a>.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Supply dew-point control</th><th>Space RH control</th></tr></thead>
<tbody>
<tr><td>Variable controlled</td><td>Moisture content of supply air</td><td>Ratio of moisture to capacity at room temperature</td></tr>
<tr><td>Sensitivity to temperature changes</td><td>None (absent condensation)</td><td>High: about 2 percentage points per F</td></tr>
<tr><td>Loop stability</td><td>Good: fast, direct relationship to coil or humidifier</td><td>Poorer: slow space response plus interaction with temperature loop</td></tr>
<tr><td>Interaction with temperature control</td><td>Decoupled; temperature and moisture handled separately</td><td>Coupled; reheat and cooling changes disturb RH</td></tr>
<tr><td>Sensor accuracy needs</td><td>Dew point sensors or accurate RH + temperature pair</td><td>RH sensor in space</td></tr>
<tr><td>Matches written requirements</td><td>Indirectly; requires conversion</td><td>Directly, since most specs state RH</td></tr>
<tr><td>Handling of multiple zones</td><td>Natural: one supply dew point serves all</td><td>Difficult when zones differ in temperature</td></tr>
<tr><td>Response to internal moisture changes</td><td>Needs reset from space conditions</td><td>Responds directly</td></tr>
</tbody>
</table>

<h2>Stability in practice</h2>
<p>Consider a space at 72 F and 50 percent RH with a humidifier controlled from a space RH sensor. The temperature loop allows a 2 F swing. As the room warms from 71 to 73 F, the RH sensor reads a drop from about 52 to 48 percent, even though the moisture content is unchanged. The humidifier ramps up. When the room cools back, RH reads high and the humidifier shuts off, or a dehumidification sequence starts. The two loops chase each other.</p>
<p>The same space with a supply dew point loop holds the humidifier or coil to a fixed supply dew point, say 52 F. Temperature changes in the room do not disturb that loop at all. The room RH drifts slightly with room temperature, but the moisture content is steady.</p>

<h2>Dehumidification: coil leaving temperature as a proxy</h2>
<p>For cooling-based dehumidification, the coil leaving air is close to saturation, so its dry-bulb is close to its dew point. Many systems control coil leaving air temperature as a stand-in for supply dew point. It is fast and uses a reliable temperature sensor. The limitation is that leaving air is not always saturated, especially at low loads or with face velocity variations, so the actual dew point can be a degree or two above the measured temperature. Where tight control matters, a dew point sensor downstream of the coil confirms the result.</p>

<h2>Humidification: dew point or high-limit RH</h2>
<p>For humidifiers, controlling supply dew point keeps the moisture delivered steady. A duct high-limit RH sensor downstream of the humidifier, set around 80 to 90 percent, protects against wetting regardless of the main loop. That high limit is an RH control by necessity, since saturation is what you are protecting against.</p>

<h2>Combining the two: dew point with RH reset</h2>
<p>A space RH requirement still has to be met. The practical approach:</p>
<ol>
<li>Control the supply air dew point with the coil, wheel or humidifier as the primary loop.</li>
<li>Reset the supply dew point setpoint slowly based on space RH (or space dew point) from one or more representative sensors.</li>
<li>Limit the reset range so a bad space sensor cannot drive the supply to an unreasonable dew point.</li>
<li>Keep the reset loop slow, with time constants of tens of minutes, so it does not interact with the temperature loop.</li>
</ol>
<p>The detailed sequence logic for this is a controls topic; see <a href="<?= url('guides/dehumidification-control-sequence') ?>">dehumidification control sequence</a>.</p>
<p class="note">Specifying a space dew point rather than a space RH, where the requirement allows, removes the temperature interaction even from the reset loop.</p>

<h2>Where space RH control still makes sense</h2>
<ul>
<li>Single-zone units serving one space with steady temperature and simple requirements, such as a small storage room.</li>
<li>Spaces where the requirement is explicitly an RH band and temperature is tightly controlled, so RH and dew point move together.</li>
<li>Retrofits where adding supply dew point sensing is impractical.</li>
</ul>
<p>Even there, set the temperature loop to be tight and the RH loop to be slow and well damped.</p>

<h2>Sensor implications</h2>
<p>Dew point control demands accurate moisture measurement in the supply air, which is harder than it sounds. Chilled mirror sensors are the most accurate but costly. Most systems use capacitive RH sensors combined with temperature to compute dew point; their accuracy at high RH and low temperature matters. Selection and placement are covered in <a href="<?= url('guides/humidity-sensor-selection-placement') ?>">how to select and place humidity sensors</a>.</p>
<?php guide_end([
    ['Why is dew point control more stable than RH control?', 'Dew point measures moisture content and does not change when air is heated or cooled. RH changes about 2 percentage points per degree F at room conditions, so temperature swings disturb an RH loop even when moisture is constant.'],
    ['Can coil leaving temperature be used for dew point control?', 'Often yes, because air leaving a wet cooling coil is near saturation. Actual dew point can be a degree or two above the measured temperature at low load, so add a dew point sensor where tight control matters.'],
    ['How do I meet a space RH requirement with dew point control?', 'Control supply dew point as the primary loop and slowly reset its setpoint from space RH or dew point sensors, with limits on the reset range.'],
]);
