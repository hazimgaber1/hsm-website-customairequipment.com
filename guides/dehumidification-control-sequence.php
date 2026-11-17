<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('dehumidification-control-sequence'); ?>
<p class="lede">A dehumidification sequence switches the AHU into a mode where the cooling coil is controlled to a leaving dew point instead of a supply temperature, so it removes moisture even when the space does not need cooling, and reheat brings the supply air back to a comfortable temperature. The logic must decide when to enter and leave the mode, how cold to run the coil, and which reheat sources to use first.</p>

<h2>Why ordinary cooling control is not enough</h2>
<p>In normal cooling, the coil is modulated to hold a supply air temperature that satisfies the sensible load. On a mild, humid day with low sensible load, the coil barely opens, leaving air warm and moist. Moisture builds in the space even though the temperature is fine. A dehumidification mode separates the two jobs: the coil handles moisture, and reheat handles temperature. Equipment choices for reheat and dehumidification are compared in the humidity control guides, for example <a href="<?= url('guides/hot-gas-reheat-vs-hydronic-reheat') ?>">hot gas reheat vs hydronic reheat</a>.</p>

<h2>Mode selection</h2>
<p>Typical entry conditions for dehumidification mode, all required:</p>
<ul>
<li>Unit in occupied mode, or in an unoccupied humidity-control mode if the owner requires it.</li>
<li>Space or return dew point (or relative humidity, though dew point is preferred) above the dehumidification setpoint for a set time.</li>
<li>Cooling plant or DX equipment available.</li>
</ul>
<p>Typical exit conditions:</p>
<ul>
<li>Dew point below setpoint minus a deadband for a set time.</li>
<li>Unit leaves occupied mode.</li>
<li>A safety or plant fault disables cooling.</li>
</ul>
<p>Use dew point or humidity ratio rather than relative humidity where possible. Relative humidity changes with temperature, so a sequence using RH can enter and leave the mode as the space warms and cools even when moisture content is unchanged. The comparison is explained in <a href="<?= url('guides/dew-point-control-vs-rh-control') ?>">dew point control vs RH control</a>.</p>

<h2>Coil dew point control</h2>
<p>In dehumidification mode, the cooling coil loop changes its controlled variable from supply air temperature to coil leaving air temperature, measured by an averaging sensor directly after the coil. Because air leaving a wet coil is near saturation, its dry-bulb temperature is a good proxy for its dew point.</p>
<ul>
<li><strong>Fixed coil setpoint:</strong> the coil runs to a fixed leaving temperature, chosen to give the required supply air dew point.</li>
<li><strong>Reset coil setpoint:</strong> the coil leaving setpoint is reset between limits based on how far space dew point is above setpoint. A small excess gives a modest coil setpoint; a large excess drives the coil colder. This saves cooling and reheat energy when the moisture load is small.</li>
</ul>
<p>The coil loop should use the colder of the two setpoints when both dehumidification and cooling are active: if the space needs a supply temperature colder than the dew point setpoint for cooling, cooling governs and reheat stays off.</p>
<p class="warn">Do not drive the coil colder than the plant can support or below the point where coil surface temperatures risk freezing or excessive condensate carryover. Set a minimum coil leaving temperature limit.</p>

<h2>Reheat staging logic</h2>
<p>After the coil, reheat raises the air to the required supply temperature. The required supply setpoint comes from the normal supply air temperature logic (zone demands or space temperature). Reheat sources are staged in order of cost, using recovered or free heat first:</p>
<ol>
<li><strong>Recovered heat:</strong> wraparound heat pipes, runaround loops or a sensible heat exchanger between pre-cool and reheat positions. These often operate passively whenever the coil runs, or modulate via a bypass or valve.</li>
<li><strong>Hot gas reheat:</strong> condenser heat from DX systems, modulated to hold supply temperature.</li>
<li><strong>Heat recovered from a chiller or condenser water loop</strong>, where available.</li>
<li><strong>Hydronic reheat</strong> from a boiler plant.</li>
<li><strong>Electric reheat</strong>, usually last.</li>
</ol>
<p>Each stage should be fully used before the next starts, with deadband between them to avoid two stages fighting. Energy codes restrict the use of new energy for reheat in some circumstances; check the edition adopted in your jurisdiction, as some reheat sources are treated differently from others.</p>

<h2>Interaction with other sequences</h2>
<table>
<thead><tr><th>Sequence</th><th>Effect of dehumidification mode</th></tr></thead>
<tbody>
<tr><td>Supply air temperature reset</td><td>Reset continues to determine the supply setpoint after reheat, but the coil is no longer controlled to it</td></tr>
<tr><td>Economizer</td><td>Often disabled in dehumidification mode, since humid outdoor air adds to the moisture load; with enthalpy high limit, the economizer may already be off</td></tr>
<tr><td>Minimum outdoor air</td><td>Continues; ventilation is still required</td></tr>
<tr><td>Fan speed</td><td>Some sequences reduce airflow to lower the coil face velocity and improve latent removal, within ventilation and comfort limits</td></tr>
<tr><td>Humidification</td><td>Locked out while dehumidifying</td></tr>
</tbody>
</table>

<h2>Worked example</h2>
<p>A space has a dew point setpoint of 55 °F with a 2 °F deadband. Current space dew point is 58 °F and space temperature is satisfied, so the required supply air temperature is 62 °F.</p>
<ol>
<li>Dew point exceeds setpoint for longer than the delay, so the unit enters dehumidification mode.</li>
<li>The coil leaving setpoint is reset between 54 °F (small excess) and 50 °F (large excess). An excess of 3 °F against a full-scale reset range of, say, 4 °F gives a coil setpoint of 54 − 0.75 × 4 = 51 °F.</li>
<li>The coil is controlled to 51 °F leaving temperature.</li>
<li>Reheat raises the air from 51 °F to 62 °F. A wraparound heat pipe provides the first few degrees; hot water reheat makes up the rest.</li>
<li>As space dew point falls below 53 °F for the set time, the unit leaves dehumidification mode and the coil returns to supply air temperature control.</li>
</ol>

<h2>Alarms and diagnostics</h2>
<ul>
<li>Space dew point remains above setpoint with the coil at its minimum limit: capacity alarm.</li>
<li>Coil leaving temperature far from setpoint with valve fully open: plant or coil problem.</li>
<li>Reheat valve open while not in dehumidification or heating mode: possible fault.</li>
<li>Dew point sensor out of range or disagreeing with a second sensor: sensor alarm, revert to a safe default.</li>
</ul>
<p>Implementing the underlying supply temperature reset is covered in <a href="<?= url('guides/supply-air-temperature-reset') ?>">supply air temperature reset</a>.</p>
<?php guide_end([
    ['How does a dehumidification sequence control the cooling coil?', 'In dehumidification mode the cooling coil is controlled to a leaving air temperature that corresponds to the required dew point, rather than to the supply air temperature. Reheat then raises the air to the supply temperature setpoint.'],
    ['Which reheat source should be used first?', 'Recovered or free heat, such as wraparound heat pipes, runaround loops and hot gas reheat, should be used first, followed by hydronic and then electric reheat. Each stage should be fully used before the next starts.'],
    ['Should dehumidification be controlled on RH or dew point?', 'Dew point or humidity ratio is preferred because it measures moisture content directly. Relative humidity changes with temperature, so RH-based control can switch modes even when the moisture level has not changed.'],
]);
