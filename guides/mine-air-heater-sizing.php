<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('mine-air-heater-sizing'); ?>
<p class="lede">A mine air heater must raise the full intake airflow from the coldest expected outdoor temperature to a supply temperature that keeps the shaft and workings free of ice, usually just above freezing. Size it from the mass flow of air, not the actual volume, using design winter temperature and the heater's delivery temperature, then check burner turndown, combustion product limits and the air distribution at the shaft collar.</p>

<h2>Why intake air is heated</h2>
<p>In northern Canada and other cold regions, intake air at −30°F to −50°F (−34°C to −46°C) entering a shaft would freeze water in the shaft, build ice on shaft walls, guides and services, endanger hoisting, and make conditions underground unsafe. Most cold-climate mines heat intake air to a temperature slightly above freezing, often in the range of 35°F to 40°F (2°C to 4°C), at the shaft collar or bottom. The exact target depends on the mine's water, shaft depth and auto-compression, which warms air as it descends.</p>
<p>Direct-fired propane or natural gas heaters are the most common approach because they deliver nearly all fuel heat into the airstream and can modulate across very wide ranges. Combustion products enter the mine air, so applicable mining regulations set limits on CO, CO₂ and NO₂ concentrations in mine intake air. Those limits must be met at all firing rates.</p>

<h2>The sizing equation</h2>
<p class="formula">Q (Btu/h) = 1.08 × SCFM × (T supply − T outdoor design)</p>
<p>The 1.08 factor applies to standard air (0.075 lb/ft³). Mine airflow is usually specified in actual cfm at the surface or underground. Convert to standard using the density ratio at the heater intake:</p>
<p class="formula">SCFM = ACFM × DR, where DR = (530 ÷ (460 + T°F)) × (P ÷ 29.92)</p>
<p>At very cold temperatures air is denser than standard, so DR is greater than 1 and the mass flow is larger than the volume suggests. Altitude works the other way. The method is detailed in <a href="<?= url('guides/fan-density-correction') ?>">correcting fan selections for temperature and altitude</a>.</p>

<h2>Worked example</h2>
<p>A mine in northern Ontario requires 400,000 cfm of intake air, measured at standard conditions (the ventilation plan gives standard airflow). Design winter temperature is −35°F (−37°C). Target supply temperature at the collar is 37°F (3°C). Site elevation is 1,200 ft (about 366 m), barometric pressure about 28.6 in. Hg.</p>
<h3>Heating load</h3>
<p class="formula">ΔT = 37 − (−35) = 72°F</p>
<p class="formula">Q = 1.08 × 400,000 × 72 = 31,100,000 Btu/h (about 9.1 MW)</p>
<h3>If the plan gives actual airflow instead</h3>
<p>Suppose the ventilation plan instead specified 400,000 acfm at the heater outlet (37°F, 28.6 in. Hg):</p>
<p class="formula">DR = (530 ÷ 497) × (28.6 ÷ 29.92) = 1.066 × 0.956 = 1.019</p>
<p class="formula">SCFM = 400,000 × 1.019 = 407,600 scfm</p>
<p class="formula">Q = 1.08 × 407,600 × 72 ≈ 31,700,000 Btu/h</p>
<p>If the airflow were measured at the cold heater inlet (−35°F), the density ratio would be about (530 ÷ 425) × 0.956 = 1.192, and the same 400,000 acfm would represent about 477,000 scfm, raising the load to about 37,100,000 Btu/h. Always establish where the airflow is measured.</p>
<p class="note">Some ventilation plans specify airflow at an underground location where barometric pressure is higher and temperature different. Convert all flows to a consistent mass basis before sizing.</p>
<h3>Fuel input</h3>
<p>A direct-fired heater delivers nearly all fuel heat to the air. Allow a small margin for losses and burner characteristics, and confirm with the manufacturer. For propane at about 91,500 Btu per US gallon (higher heating value):</p>
<p class="formula">Propane use at design ≈ 31,100,000 ÷ 91,500 ≈ 340 US gal/h (1,290 L/h)</p>
<p>That is peak consumption. Annual fuel use is far lower and is estimated from hourly or bin temperature data across the heating season.</p>

<h2>Annual fuel estimate</h2>
<p class="formula">Annual Btu = 1.08 × SCFM × Σ [(T supply − T outdoor) × hours], for hours where T outdoor is below T supply</p>
<p>Using heating degree-hours referenced to the supply temperature, rather than standard 65°F degree days, gives a direct estimate. Because fuel is a major operating cost for cold-climate mines, reducing airflow with ventilation on demand during periods of low activity pays back quickly. Fan systems and VOD are covered in <a href="<?= url('guides/mine-ventilation-fans') ?>">mine ventilation fans and systems</a>.</p>

<h2>Turndown and control</h2>
<p>The heater must hold supply temperature from design cold days to shoulder seasons when outdoor air is just below the setpoint. That may require turndown of 20:1 or more. Line burners modulate widely, and large installations often use multiple burner sections that stage on and off. Control discharge temperature with a sensor downstream of mixing, and provide:</p>
<ul>
<li>Flame safeguard and burner management to the applicable gas code and listing.</li>
<li>Airflow proving so burners cannot fire without airflow.</li>
<li>High-limit and low-limit protection.</li>
<li>Combustion product monitoring downstream where required.</li>
</ul>

<h2>Checking combustion products</h2>
<p>Direct-fired heaters add CO₂, water vapor and small amounts of CO and NO₂. Mining regulations and heater listings limit these concentrations. A useful check is the CO₂ rise: burning natural gas adds roughly a predictable amount of CO₂ per unit of heat. At a 72°F rise, the concentration increase is modest, but it adds to diesel emissions underground. Confirm the heater's combustion performance data and the regulator's limits.</p>
<p>Direct and indirect makeup air heater types are compared in <a href="<?= url('guides/direct-fired-vs-indirect-fired-makeup-air') ?>">direct-fired vs indirect-fired makeup air</a>.</p>

<h2>Air distribution at the shaft</h2>
<ul>
<li>Mix heated air with any bypass air thoroughly before it enters the shaft, so no cold streams freeze shaft water.</li>
<li>Place temperature sensors where they represent mixed air, at several points across the collar.</li>
<li>Provide heater fans sized for the heater and ductwork pressure drop, in addition to the main mine fans if the system is forced.</li>
<li>Design for snow and ice at intakes, with louvers and screens that resist icing.</li>
</ul>

<h2>Reliability</h2>
<p>Loss of heating in extreme cold can freeze shaft services quickly. Use multiple burner modules, backup fuel supply where feasible, alarms to the control room, and procedures for reducing airflow or protecting the shaft if heating fails. Large direct-fired heating and fan packages for mines are among the industrial products described on our <a href="<?= url('products/industrial-fans') ?>">industrial fans</a> page.</p>
<?php guide_end([
    ['How do you size a mine air heater?', 'Multiply 1.08 by the intake airflow in standard cfm and by the temperature rise from winter design to the supply setpoint. Convert any actual airflow to standard using the density ratio at the point where it was measured.'],
    ['What temperature is mine intake air heated to?', 'Typically just above freezing, often about 35°F to 40°F (2°C to 4°C), enough to prevent ice in the shaft. The exact target depends on the mine and regulator.'],
    ['Why are direct-fired heaters used for mines?', 'They put nearly all fuel heat into the airstream and modulate over a wide range. Combustion products enter the mine air, so heaters must meet regulatory limits on CO, CO2 and NO2.'],
]);
