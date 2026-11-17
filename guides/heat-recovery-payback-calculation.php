<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('heat-recovery-payback-calculation'); ?>
<p class="lede">Payback equals the net installed cost of the recovery device divided by its net annual savings. To get the savings, compute recovered heat in each outdoor temperature bin, convert it to fuel and electricity at your plant efficiencies and prices, and subtract the extra fan and wheel motor energy. A bin calculation takes an hour in a spreadsheet and is far more reliable than a single design-day estimate.</p>

<h2>The formulas</h2>
<p>Recovered sensible heat in one temperature bin:</p>
<p class="formula">Q_bin = 1.08 × CFM × ε × |T_return − T_bin| × hours_bin (Btu per year in that bin)</p>
<p>For an enthalpy wheel in cooling, replace the sensible term with 4.5 × CFM × ε_total × |h_OA − h_return|.</p>
<p>Annual fuel saved for heating:</p>
<p class="formula">Fuel = Σ Q_heating ÷ η_heating plant</p>
<p>Annual electricity saved for cooling:</p>
<p class="formula">kWh_cooling = Σ Q_cooling ÷ 12,000 × kW per ton of plant</p>
<p>Annual fan penalty:</p>
<p class="formula">kWh_fan = CFM × ΔP_added ÷ (6356 × η_fan system) × 0.746 × hours, for each airstream</p>
<p>Simple payback:</p>
<p class="formula">Payback (years) = (installed cost − first cost credits) ÷ (fuel $ + cooling $ − fan $ − wheel motor $ − maintenance $)</p>

<h2>Gathering the inputs</h2>
<ul>
<li><strong>Bin data.</strong> Hours in each 10 F (or 5 F) outdoor temperature bin during the hours the system runs with outdoor air. Use weather data for the nearest station, filtered to occupied hours. ASHRAE climate data and Environment and Climate Change Canada records are common sources.</li>
<li><strong>Airflow</strong> that actually passes through the device in each bin. If demand control ventilation reduces outdoor air, use the reduced flow.</li>
<li><strong>Effectiveness</strong> at that airflow. The calculation of effectiveness is not repeated here; take it from the certified selection or from <a href="<?= url('guides/recovery-effectiveness-calculation') ?>">calculating energy recovery effectiveness</a>.</li>
<li><strong>Operating limits.</strong> Hours when the device is off for economizer operation and hours when frost control reduces recovery.</li>
<li><strong>Utility rates and plant efficiencies</strong>: boiler or furnace efficiency, chiller or DX kW per ton, fuel price and blended electric rate.</li>
<li><strong>Added pressure drop</strong> on each airstream, and fan system efficiency. The fan side is detailed in <a href="<?= url('guides/recovery-pressure-drop-fan-penalty') ?>">calculating the fan energy penalty</a>.</li>
</ul>

<h2>Worked example</h2>
<p>A 10,000 cfm school unit runs about 3,000 occupied hours with outdoor air. A sensible plate at 70 percent effectiveness, return air at 72 F in winter and 75 F in summer. Recovery is off between 50 F and 75 F for economizer operation. The bin hours below are illustrative for a cold northern climate, not data for a specific city.</p>
<table>
<thead><tr><th>Bin (F)</th><th>Hours</th><th>ΔT (F)</th><th>Q per hour (Btu/h)</th><th>Annual (MMBtu)</th></tr></thead>
<tbody>
<tr><td>45</td><td>700</td><td>27</td><td>204,100</td><td>142.9</td></tr>
<tr><td>35</td><td>800</td><td>37</td><td>279,700</td><td>223.8</td></tr>
<tr><td>25</td><td>600</td><td>47</td><td>355,300</td><td>213.2</td></tr>
<tr><td>15</td><td>350</td><td>57</td><td>430,900</td><td>150.8</td></tr>
<tr><td>5</td><td>150</td><td>67</td><td>506,500</td><td>76.0</td></tr>
<tr><td>−5</td><td>50</td><td>77</td><td>582,100</td><td>29.1</td></tr>
<tr><td>85 (cooling)</td><td>300</td><td>10</td><td>75,600</td><td>22.7</td></tr>
<tr><td>95 (cooling)</td><td>60</td><td>20</td><td>151,200</td><td>9.1</td></tr>
</tbody>
</table>
<p>Q per hour = 1.08 × 10,000 × 0.70 × ΔT = 7,560 × ΔT.</p>
<p><strong>Heating.</strong> Total recovered = 835.8 MMBtu. At 85 percent boiler efficiency, fuel saved = 983 MMBtu. At an illustrative $10 per MMBtu, savings = $9,830.</p>
<p><strong>Cooling.</strong> 31.8 MMBtu = 2,650 ton-hours. At 1.0 kW per ton and $0.12 per kWh, savings = $318.</p>
<p><strong>Fan penalty.</strong> The plate adds 0.6 in. w.c. on each airstream, 1.2 in. w.c. total. At 60 percent fan system efficiency: 10,000 × 1.2 ÷ (6,356 × 0.60) = 3.15 hp, or 2.35 kW. Over 4,000 fan run hours (the plate's pressure drop applies even when recovery is off unless bypassed) that is 9,400 kWh, or $1,128.</p>
<p><strong>Net savings</strong> = 9,830 + 318 − 1,128 = $9,020 per year.</p>
<p><strong>Cost.</strong> Suppose the plate section adds $60,000 installed, and the reduced heating and cooling capacity lets the boiler and preheat coil shrink by $10,000. Net cost = $50,000.</p>
<p><strong>Payback</strong> = 50,000 ÷ 9,020 ≈ 5.5 years.</p>
<p class="note">This example ignores frost control losses in the coldest bins. If the plate bypasses half its air below 10 F, cut the 5 F and −5 F rows accordingly and recompute.</p>

<h2>Refinements that change the answer</h2>
<ul>
<li><strong>Latent recovery.</strong> For enthalpy wheels in humid climates, add the latent cooling savings using enthalpy bins or mean coincident wet-bulb data. It can dominate the cooling side.</li>
<li><strong>Humidification savings.</strong> If the building humidifies in winter, an enthalpy device also saves humidifier energy.</li>
<li><strong>Demand charges.</strong> Reduced peak cooling and electric heating demand can be worth more than the energy savings in some rate structures.</li>
<li><strong>Escalation and discounting.</strong> For long-lived equipment, a life cycle cost analysis with fuel escalation and a discount rate is more meaningful than simple payback.</li>
<li><strong>Maintenance.</strong> Add wheel belts, filters on the exhaust side, and cleaning labour as an annual cost.</li>
<li><strong>Incentives.</strong> Utility programs may offset first cost; confirm availability and eligibility before relying on them.</li>
</ul>

<h2>Reporting the result</h2>
<p>Present payback as a range rather than a single figure. Run the calculation with low, expected and high energy prices, and with the effectiveness at both rated and slightly degraded values to reflect fouling over time. Show the bin table, the plant efficiencies and the rates you assumed so that an owner or reviewer can check them. A one-page summary with those inputs is far more persuasive than a single number, and it can be updated quickly when rates or schedules change.</p>

<h2>Sanity checks</h2>
<ol>
<li>Recovered heat should never exceed the outdoor air heating load in any bin.</li>
<li>Payback should shorten as climate gets colder or run hours rise. If it does not, check the bin hours filter.</li>
<li>If the fan penalty exceeds 20 to 30 percent of gross savings, look at lower-drop selections or bypass dampers for economizer hours.</li>
<li>Compare the result with a whole-building energy model if one exists for the project.</li>
</ol>
<p>If recovery is mandated by code, payback is still useful for choosing between technologies; see <a href="<?= url('guides/ashrae-90-1-energy-recovery-requirements') ?>">determining when ASHRAE 90.1 requires energy recovery</a>.</p>
<?php guide_end([
    ['How do you calculate energy recovery payback?', 'Compute recovered energy in each outdoor temperature bin, convert it to fuel and electricity savings at plant efficiency and utility rates, subtract the added fan and wheel motor energy, and divide net installed cost by the net annual savings.'],
    ['What is a typical payback for energy recovery?', 'It varies widely with climate, run hours and energy prices. Cold climates and long run hours often give a few years, while mild climates with short schedules can exceed equipment life. Calculate it for your project.'],
    ['Should the fan penalty be included in payback?', 'Yes. The added pressure drop raises fan energy on both airstreams for every hour the device is in the airflow, even during economizer operation unless it is bypassed. Omitting it overstates savings.'],
]);
