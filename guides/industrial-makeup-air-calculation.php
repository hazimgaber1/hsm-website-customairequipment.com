<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('industrial-makeup-air-calculation'); ?>
<p class="lede">Industrial makeup air should replace the air that process exhaust systems remove, less any infiltration you are willing to accept, so the plant stays near neutral pressure. Add up every exhaust stream, decide the target building pressure, subtract tolerated infiltration, and then size the heating load from the makeup airflow and the winter design temperature.</p>

<h2>Why makeup air matters</h2>
<p>Exhaust without matching supply drives the building negative. Symptoms include doors that are hard to open or slam, cold drafts at doors and walls, backdrafting of combustion appliances, poor capture at exhaust hoods (because the exhaust fans move less air at the higher system pressure), and dust or moisture drawn in through the envelope. The fix is planned, tempered makeup air delivered where it helps.</p>

<h2>Step 1: Inventory exhaust</h2>
<p>List every exhaust stream with its airflow at operating conditions:</p>
<ul>
<li>Local exhaust ventilation: hoods, booths, capture arms, dust collectors.</li>
<li>Process exhaust: ovens, dryers, furnaces, tanks.</li>
<li>General exhaust: roof fans, wall fans, toilet and locker room exhaust.</li>
<li>Combustion air for gas-fired equipment that draws from the space.</li>
<li>Compressed air and pneumatic conveying exhausting outdoors, if any.</li>
</ul>
<p>Note which streams run continuously, which cycle and which run only in summer. Exhaust diversity can be applied for intermittent streams, but be careful: makeup air sized for average exhaust will fall short when everything runs.</p>

<h2>Step 2: Set the target pressure and infiltration</h2>
<p>A plant is usually designed for slightly negative to neutral pressure relative to outdoors, perhaps a small negative to keep process odors in, or slightly positive in clean areas. The airflow that enters through envelope leaks at the target pressure is infiltration. In a tight modern building it is small; in an older plant with many doors it may be large but is uncontrolled and untempered.</p>
<p class="formula">Makeup air CFM = Σ Exhaust CFM − Infiltration CFM ± Pressurization offset</p>
<p>Most designers assume little or no infiltration credit and size makeup air close to 100% of exhaust, so that uncontrolled infiltration does not become the main source of air.</p>

<h2>Step 3: Correct for density</h2>
<p>Exhaust fans rated at hot process temperatures move a larger actual volume than the same mass of cold makeup air. Balance on mass, or on standard airflow:</p>
<p class="formula">SCFM = ACFM × (ρ actual ÷ 0.075)</p>
<p>A 10,000 acfm oven exhaust at 300°F has a density ratio of about (460 + 70) ÷ (460 + 300) = 0.70, or 7,000 scfm. Makeup air for that stream is 7,000 scfm, not 10,000. The method for density ratios is covered in <a href="<?= url('guides/fan-density-correction') ?>">correcting fan selections for temperature and altitude</a>.</p>

<h2>Step 4: Worked example</h2>
<p>A manufacturing plant in a cold climate has the following exhaust:</p>
<table>
<thead><tr><th>Exhaust stream</th><th>Airflow (scfm)</th><th>Operation</th></tr></thead>
<tbody>
<tr><td>Weld fume extraction</td><td>12,000</td><td>Continuous, occupied hours</td></tr>
<tr><td>Paint booth</td><td>18,000</td><td>Intermittent; assume running</td></tr>
<tr><td>Oven exhaust (10,000 acfm at 300°F)</td><td>7,000</td><td>Continuous</td></tr>
<tr><td>Dust collector</td><td>8,000</td><td>Continuous</td></tr>
<tr><td>General roof exhaust</td><td>5,000</td><td>Winter minimum</td></tr>
<tr><td><strong>Total</strong></td><td><strong>50,000</strong></td><td></td></tr>
</tbody>
</table>
<p>If the paint booth has its own dedicated makeup air unit, remove it from the plant makeup air: 50,000 − 18,000 = 32,000 scfm. With an infiltration allowance of 2,000 scfm at a slightly negative design pressure, the general makeup air requirement is 30,000 scfm (14,200 L/s).</p>

<h2>Step 5: Calculate the heating load</h2>
<p class="formula">Q (Btu/h) = 1.08 × SCFM × (T supply − T outdoor design)</p>
<p>Winter design is −10°F (−23°C), and the makeup air will be supplied at 65°F (18°C):</p>
<p class="formula">Q = 1.08 × 30,000 × (65 − (−10)) = 1.08 × 30,000 × 75 = 2,430,000 Btu/h (712 kW)</p>
<p>Fuel input for an indirect-fired unit at 80% efficiency is about 3,040,000 Btu/h; a direct-fired unit, delivering nearly all fuel heat to the airstream, needs about 2,430,000 Btu/h plus a small allowance. The burner type tradeoffs are covered in <a href="<?= url('guides/direct-fired-vs-indirect-fired-makeup-air') ?>">direct-fired vs indirect-fired makeup air</a>.</p>
<h3>Annual heating energy</h3>
<p>For a rough annual estimate, use heating degree-hours at the makeup air supply temperature over the hours the exhaust runs:</p>
<p class="formula">Annual Btu = 1.08 × SCFM × Σ(T supply − T outdoor) × hours</p>
<p>Plants that exhaust large volumes in cold climates often find makeup air heating is their largest HVAC energy cost. Reducing exhaust (better hood design, variable-volume exhaust) or recovering heat from exhaust gives the best payback; see <a href="<?= url('guides/process-exhaust-heat-recovery') ?>">process exhaust heat recovery</a>.</p>

<h2>Step 6: Supply temperature and distribution</h2>
<ul>
<li>Supply temperature can often be lower than room setpoint, because process heat gains warm the space. 55°F to 65°F (13°C to 18°C) is common.</li>
<li>Deliver makeup air where workers are and away from capture hoods, at low velocity near hoods, to avoid disrupting capture.</li>
<li>Avoid dumping cold air on workers in winter; use diffusers or ducted distribution rather than a single discharge.</li>
<li>In summer, makeup air may be untempered or evaporatively cooled; heat removal requirements may increase supply above winter airflow.</li>
</ul>

<h3>Summer operation</h3>
<p>In warm weather the same exhaust still has to be replaced, but the makeup air no longer needs heat. Many plants switch makeup air units to ventilation mode with the burner off, and some increase airflow above the winter value to carry away process heat. If the summer airflow is larger than the winter airflow, make sure the exhaust side can match it, or the plant swings positive and pushes warm air and contaminants into offices and adjacent areas.</p>

<h2>Step 7: Control and interlock</h2>
<ol>
<li>Interlock makeup air units with the exhaust they serve, so they start and stop together.</li>
<li>For variable exhaust, modulate makeup air in proportion, or control to building pressure measured against outdoors.</li>
<li>Control discharge temperature with outdoor reset to avoid overheating in mild weather.</li>
<li>Provide low-limit protection to prevent cold discharge on burner failure.</li>
</ol>
<?php guide_end([
    ['How much makeup air does a factory need?', 'Roughly equal to the total exhaust at standard conditions, less any infiltration you accept, adjusted for the desired building pressure. Most designs supply close to 100% of exhaust so infiltration does not become the main air source.'],
    ['Why correct exhaust airflow for temperature when sizing makeup air?', 'Hot exhaust is less dense, so its actual cubic feet per minute represents less mass than the same volume of cold makeup air. Balancing on standard airflow ensures mass in equals mass out.'],
    ['How is makeup air heating load calculated?', 'Multiply 1.08 by the makeup airflow in scfm and by the temperature rise from winter design to supply temperature. That gives the sensible heating load in Btu per hour.'],
]);
