<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('psychrometric-process-ahu-design'); ?>
<p class="lede">To plot an AHU on a psychrometric chart, locate the room and outdoor states, draw the mixing line between them, then draw the coil process from the mixed point to the coil leaving point, add fan heat or reheat as horizontal lines, and finish at the supply condition that meets the room's sensible heat ratio. Each segment corresponds to one section of the unit.</p>

<h2>What you need before you start</h2>
<ul>
<li>A psychrometric chart for your elevation. Sea-level charts are standard; at high elevation, use a chart drawn for local barometric pressure or correct the readings.</li>
<li>Room design condition, for example 75°F (24°C) dry bulb and 50% RH.</li>
<li>Outdoor design condition, for example 92°F (33°C) dry bulb and 74°F (23°C) mean coincident wet bulb. See <a href="<?= url('guides/outdoor-design-conditions-ashrae-climate-data') ?>">selecting outdoor design conditions</a>.</li>
<li>Outdoor air fraction at design, for example 30%.</li>
<li>Room sensible and latent loads, giving the room sensible heat ratio (SHR).</li>
<li>Expected fan and duct heat gain, typically a degree or two.</li>
</ul>
<p>The worked numbers below are at sea level and rounded to chart-reading accuracy.</p>

<h2>Plotting the summer cooling process</h2>
<ol>
<li><strong>Plot the room state (R).</strong> Find 75°F on the dry-bulb axis and move up to the 50% RH curve. Read humidity ratio about 64 grains per pound (0.0092 lb/lb) and enthalpy about 28.1 Btu/lb.</li>
<li><strong>Plot the outdoor state (O).</strong> At 92°F dry bulb, follow the 74°F wet-bulb line to its intersection. Read about 97 grains and 37.4 Btu/lb.</li>
<li><strong>Draw the mixing line.</strong> Connect R and O with a straight line. All possible mixtures of the two lie on this line.</li>
<li><strong>Locate the mixed state (M).</strong> With 30% outdoor air, M sits 30% of the way from R to O. Dry bulb is 0.7 × 75 + 0.3 × 92 = 80.1°F, humidity about 74 grains, enthalpy about 30.9 Btu/lb. The arithmetic is shown in the <a href="<?= url('guides/mixed-air-temperature-calculation') ?>">mixed-air calculation guide</a>.</li>
<li><strong>Draw the room SHR line.</strong> Using the protractor on the chart, draw a line through R at the room SHR, for example 0.75. Any supply state on this line will absorb the room's sensible and latent loads in the right proportion.</li>
<li><strong>Choose the supply state (S).</strong> Pick a point on the SHR line at the supply temperature you intend to deliver to the room, such as 55°F. If the line crosses the saturation curve before reaching your target, the chosen SHR needs a colder or reheated supply.</li>
<li><strong>Back out the coil leaving state (C).</strong> Subtract fan and duct heat. For a draw-through unit with 2°F of fan heat, the coil must leave at 53°F with the same moisture content as S. Coil leaving air is usually 90% to 95% RH. At 53°F and 95% RH, read about 57 grains and 21.5 Btu/lb.</li>
<li><strong>Draw the coil process.</strong> Connect M to C. Real coils follow a slightly curved path, but a straight line between entering and leaving states is accurate enough for load calculation. Extend it to the saturation curve to find the apparatus dew point.</li>
<li><strong>Draw fan heat.</strong> A horizontal line from C to S (constant humidity ratio) represents fan heat or reheat, since neither adds moisture.</li>
</ol>

<h2>Reading loads from the plot</h2>
<p>With the states fixed, the coil load follows from enthalpy difference:</p>
<p class="formula">Q total (Btu/h) = 4.5 × CFM × (h entering − h leaving)</p>
<p>At 10,000 cfm: 4.5 × 10,000 × (30.9 − 21.5) = 423,000 Btu/h, or about 35 tons. The sensible part uses 1.08 × CFM × ΔT: 1.08 × 10,000 × (80.1 − 53) = 292,700 Btu/h. The remainder, about 130,000 Btu/h, is latent. Coil SHR is 292,700 ÷ 423,000 ≈ 0.69, lower than the room SHR because the outdoor air brings its own moisture.</p>
<p class="note">The 4.5 and 1.08 constants assume standard air density. At elevation, correct them for local density or use a chart and equations for local pressure.</p>

<h2>Adding reheat and humidification</h2>
<h3>Reheat</h3>
<p>If the room needs drier air than the coil leaving point gives at a reasonable supply temperature, cool to a lower dew point and reheat. On the chart, extend the coil line further down toward saturation, then draw a horizontal line to the right to the new supply temperature. The horizontal length in degrees times 1.08 × CFM gives the reheat energy. Why low SHR forces this choice is discussed in the <a href="<?= url('guides/sensible-heat-ratio-ahu-design') ?>">sensible heat ratio guide</a>.</p>
<h3>Winter heating and humidification</h3>
<ol>
<li>Plot winter outdoor air, for example 0°F at low humidity, and the room at 72°F and 30% RH.</li>
<li>Draw the mixing line and locate M at the minimum outdoor air fraction.</li>
<li>Heating appears as a horizontal line to the right from M (or from the preheated point).</li>
<li>Steam humidification appears as a nearly vertical line upward, since steam adds moisture with very little sensible heat.</li>
<li>Adiabatic humidification (evaporative or atomizing) follows a line of roughly constant wet bulb, sloping up and to the left, so the air must be heated more beforehand.</li>
</ol>

<h2>Common plotting mistakes</h2>
<ul>
<li>Plotting the supply state without accounting for fan heat, which makes the coil look warmer than it needs to be.</li>
<li>Using the room SHR to select the coil when outdoor air is present. The coil SHR is lower.</li>
<li>Choosing a coil leaving point to the left of the saturation curve, which is not physically possible.</li>
<li>Using a sea-level chart in Calgary, Denver or other high-elevation cities without correction.</li>
<li>Checking only the peak dry-bulb day. A high dew-point day can produce a larger latent load and a lower coil SHR.</li>
</ul>
<?php guide_end([
    ['How do you find mixed air on a psychrometric chart?', 'Draw a straight line between the outdoor and return air states. The mixed state lies on that line at a distance from the return point equal to the outdoor air fraction. For 30% outdoor air, it sits 30% of the way from return toward outdoor.'],
    ['What does a horizontal line on a psychrometric chart represent?', 'A horizontal line is a constant humidity ratio process: sensible heating or cooling without adding or removing moisture. Fan heat, reheat coils and dry cooling above the dew point all plot as horizontal lines.'],
    ['Why is the coil SHR lower than the room SHR?', 'The cooling coil handles both the room load and the outdoor air load. Humid outdoor air brings extra latent load, so the share of the coil load that is sensible falls below the room ratio.'],
]);
