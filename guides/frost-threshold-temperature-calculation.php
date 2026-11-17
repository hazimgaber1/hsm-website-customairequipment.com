<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('frost-threshold-temperature-calculation'); ?>
<p class="lede">For a sensible device, frost begins at the outdoor temperature that drives the exhaust leaving temperature down to 32 F or to the exhaust dew point, whichever is lower. Solve the effectiveness equation for that outdoor temperature. For an enthalpy wheel, use the psychrometric line method, because moisture transfer lowers the exhaust dew point as it cools.</p>

<h2>What sets the threshold</h2>
<p>Ice forms on the exhaust side of a recovery device when two things happen together: exhaust air is cooled to its dew point (or frost point), and the surface it touches is below 32 F. Three inputs control the outdoor temperature at which that happens:</p>
<ul>
<li><strong>Exhaust dry-bulb</strong> entering the device, normally the room or return temperature plus any fan heat.</li>
<li><strong>Exhaust moisture content</strong>, usually expressed as dew point or humidity ratio. Humidified buildings have higher thresholds.</li>
<li><strong>Device effectiveness</strong> at actual airflows. Higher effectiveness cools the exhaust more, so the threshold rises.</li>
</ul>
<p>Airflow imbalance matters too. More outdoor air than exhaust cools the exhaust further; more exhaust than outdoor air does the opposite.</p>

<h2>Sensible devices: plates, sensible wheels, heat pipes</h2>
<p>The exhaust leaving temperature for a balanced sensible device is:</p>
<p class="formula">T4 = T3 − ε × (T3 − T1)</p>
<p>Set T4 equal to the limiting temperature and solve for the outdoor temperature T1:</p>
<p class="formula">T1,frost = T3 − (T3 − T_limit) ÷ ε</p>
<p>The limiting temperature T_limit is:</p>
<ul>
<li><strong>32 F</strong> if the exhaust dew point is above 32 F. The exhaust condenses first, and then ice forms once the leaving air drops to freezing.</li>
<li><strong>The exhaust dew point</strong> (frost point) if it is below 32 F. The exhaust cannot deposit ice until it is cooled to its own frost point.</li>
</ul>
<p>For unbalanced flow, replace ε with ε × (Ws ÷ We) in the exhaust equation, where Ws is the supply mass flow and We is the exhaust mass flow, and keep ε defined on the minimum flow as usual.</p>

<h3>Worked example 1: humidified office, counterflow plate</h3>
<p>Exhaust is 72 F at 30 percent RH, giving a dew point of about 39 F. Plate effectiveness is 0.75 at balanced flow. Because the dew point is above 32 F, T_limit = 32 F.</p>
<p>T1,frost = 72 − (72 − 32) ÷ 0.75 = 72 − 53.3 = 18.7 F.</p>
<p>Frost risk begins at an outdoor temperature of about 19 F.</p>

<h3>Worked example 2: dry exhaust, same plate</h3>
<p>Exhaust is 72 F at 15 percent RH, giving a frost point near 22 F. Now T_limit = 22 F.</p>
<p>T1,frost = 72 − (72 − 22) ÷ 0.75 = 72 − 66.7 = 5.3 F.</p>
<p>Dropping indoor RH from 30 to 15 percent moved the threshold down by more than 13 F. This is why indoor humidity setpoint is the single biggest lever on frost hours.</p>

<h3>Worked example 3: more supply than exhaust</h3>
<p>Same conditions as example 1, but supply is 10,000 cfm and exhaust is 8,000 cfm. The effective cooling of the exhaust is 0.75 × (10,000 ÷ 8,000) = 0.94.</p>
<p>T1,frost = 72 − 40 ÷ 0.94 = 72 − 42.6 = 29.4 F.</p>
<p>The imbalance raised the threshold by almost 11 F.</p>
<p class="warn">Plates have a cold corner where local surface temperature is well below the mixed exhaust leaving temperature. Many designers subtract a margin of several degrees from the calculated threshold, or use the manufacturer's frost curve, which accounts for core geometry.</p>

<h2>Enthalpy wheels: the line method</h2>
<p>An enthalpy wheel removes moisture from the exhaust as it cools it, so the exhaust dew point falls along with its temperature. The simple equation above overstates the risk. The usual method uses the psychrometric chart:</p>
<ol>
<li>Plot the exhaust entering state (dry bulb and humidity ratio).</li>
<li>Plot the outdoor air state.</li>
<li>Draw a straight line between them. Within the wheel, the air states lie close to this line because heat and moisture transfer in similar proportion.</li>
<li>If the line crosses the saturation curve, condensation is possible; if it crosses below 32 F, frost is possible.</li>
<li>Lower the outdoor temperature until the line just touches the saturation curve at or below 32 F. That outdoor temperature is the threshold.</li>
</ol>
<p>With room air at 72 F and 30 percent RH, the line from that state typically remains clear of saturation until outdoor temperatures well below the sensible plate threshold in example 1. The exact value depends on the latent to sensible effectiveness ratio, which is why wheel manufacturers publish frost threshold curves. Use their curve when available and the line method for a hand check.</p>
<p class="note">The line method assumes the latent and sensible effectiveness values are similar. If latent effectiveness is much lower than sensible, the wheel behaves more like a sensible device and the threshold rises.</p>

<h2>Using the threshold with weather data</h2>
<p>The threshold on its own is just a temperature. Its value comes from comparing it with the site's hourly weather. Count the operating hours when outdoor air is below the threshold and note how far below it typically falls. A threshold of 10 F matters little where the coldest week averages 15 F, and a great deal where weeks below 0 F are routine.</p>
<p>Recalculate at more than one indoor humidity if the setpoint is still under discussion, since that single choice moves the answer more than any equipment option.</p>

<h2>Checklist of inputs to confirm</h2>
<ul>
<li>Winter indoor humidity setpoint, not the summer value.</li>
<li>Exhaust temperature at the device, including return fan heat if upstream.</li>
<li>Effectiveness at the actual winter airflow, which may differ from summer if ventilation resets.</li>
<li>Supply to exhaust mass flow ratio.</li>
<li>Any preheat upstream of the device, which shifts T1 upward.</li>
</ul>
<p>Once you have the threshold, choose a strategy using <a href="<?= url('guides/frost-control-wheels-and-plates') ?>">frost control strategies for wheels and plates</a>. The effectiveness equations used above are developed fully in <a href="<?= url('guides/recovery-effectiveness-calculation') ?>">calculating energy recovery effectiveness</a>, and the winter RH you choose may be limited by the envelope as shown in <a href="<?= url('guides/max-winter-indoor-rh-calculation') ?>">calculating maximum winter indoor RH</a>.</p>
<?php guide_end([
    ['At what outdoor temperature does an energy recovery device frost?', 'It depends on exhaust humidity and effectiveness. For a sensible device, solve for the outdoor temperature that drops the exhaust leaving air to 32 F or to its dew point, whichever is lower. Typical thresholds range from about 0 F to above 20 F.'],
    ['Why does indoor humidity affect frost threshold so much?', 'Higher indoor humidity raises the exhaust dew point, so condensation and ice start with less cooling. Lowering winter RH from 30 to 15 percent can move the threshold down by more than 10 F.'],
    ['How do I calculate frost threshold for an enthalpy wheel?', 'Plot the exhaust and outdoor states on a psychrometric chart and join them with a straight line. Frost becomes possible when that line touches the saturation curve below 32 F. Manufacturer frost curves give a more exact answer.'],
]);
