<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-terminology-glossary'); ?>
<p class="lede">This glossary defines the air-side terms that appear most often on AHU schedules, selection reports and submittals, in plain language. It is meant for owners, facility staff and early-career engineers who need to read those documents with confidence.</p>

<h2>Airflow and pressure terms</h2>
<ul>
<li><strong>CFM:</strong> cubic feet per minute, the volume of air moved. In SI, airflow is usually given in litres per second (L/s) or cubic metres per hour; 1 cfm ≈ 0.472 L/s.</li>
<li><strong>SCFM and ACFM:</strong> standard cfm is airflow corrected to standard air density (0.075 lb/ft³); actual cfm is the real volume at local conditions. They differ at high elevation and high temperature.</li>
<li><strong>Face velocity:</strong> airflow divided by the face area of a component, in feet per minute (fpm). Used to size coils, filters and the unit cross-section.</li>
<li><strong>Static pressure (SP):</strong> the pressure air exerts on the walls of a duct, measured in inches of water column (in. w.c.) or pascals (1 in. w.c. ≈ 249 Pa).</li>
<li><strong>Velocity pressure (VP):</strong> the pressure equivalent of air's motion. At standard density, VP = (V ÷ 4005)².</li>
<li><strong>Total pressure (TP):</strong> static plus velocity pressure.</li>
<li><strong>ESP, ISP, TSP:</strong> external, internal and total static pressure. ESP is the duct system loss, ISP is the loss inside the unit, TSP is their sum. See <a href="<?= url('guides/internal-vs-external-static-pressure') ?>">internal vs external static pressure</a>.</li>
<li><strong>System curve:</strong> the relationship between airflow and pressure for a duct system; pressure rises roughly with the square of airflow.</li>
<li><strong>System effect:</strong> extra pressure loss caused by poor fan inlet or outlet conditions, which is not captured in fan ratings or duct calculations.</li>
<li><strong>Turndown:</strong> the ratio of maximum to minimum stable airflow a unit can deliver.</li>
</ul>

<h2>Fan and motor terms</h2>
<ul>
<li><strong>BHP:</strong> brake horsepower, the power a fan absorbs at its shaft. BHP = CFM × TSP ÷ (6356 × fan efficiency).</li>
<li><strong>Fan static efficiency:</strong> the fraction of shaft power that becomes useful static pressure. Fan total efficiency also counts velocity pressure.</li>
<li><strong>FEI:</strong> fan energy index, a ratio comparing a fan's power at a duty point with a reference fan. Values of 1.0 or above meet the reference; used in regulations and codes.</li>
<li><strong>Plenum fan:</strong> an unhoused centrifugal wheel that pressurizes the surrounding section rather than discharging into a scroll.</li>
<li><strong>Fan array:</strong> multiple smaller fans operating in parallel in a single fan section, also called a fan wall.</li>
<li><strong>VFD:</strong> variable frequency drive, which varies motor speed by changing the frequency of the power supply.</li>
<li><strong>EC motor:</strong> electronically commutated motor, a permanent-magnet motor with integral speed control electronics.</li>
<li><strong>Fan laws:</strong> relationships stating that airflow varies with speed, pressure with speed squared and power with speed cubed, for a fixed system.</li>
</ul>

<h2>Thermal and psychrometric terms</h2>
<ul>
<li><strong>Dry bulb (DB):</strong> air temperature as read by an ordinary thermometer.</li>
<li><strong>Wet bulb (WB):</strong> the temperature a wetted thermometer reaches through evaporation; used with dry bulb to fix the moisture content of air.</li>
<li><strong>Dew point (DP):</strong> the temperature at which air becomes saturated and water starts to condense.</li>
<li><strong>Relative humidity (RH):</strong> moisture in the air compared with the maximum it could hold at that temperature, as a percentage.</li>
<li><strong>Humidity ratio (W):</strong> mass of water vapour per mass of dry air, in lb/lb or grains per pound (7,000 grains = 1 lb).</li>
<li><strong>Enthalpy (h):</strong> total heat content of air per pound of dry air, in Btu/lb; used to calculate total coil loads.</li>
<li><strong>Sensible heat:</strong> heat that changes air temperature. Qs = 1.08 × CFM × ΔT.</li>
<li><strong>Latent heat:</strong> heat associated with adding or removing moisture. Ql = 0.68 × CFM × Δgrains.</li>
<li><strong>Total heat:</strong> sensible plus latent. Qt = 4.5 × CFM × Δh.</li>
<li><strong>SHR:</strong> sensible heat ratio, sensible load divided by total load. See <a href="<?= url('guides/sensible-heat-ratio-ahu-design') ?>">sensible heat ratio and AHU design</a>.</li>
<li><strong>Apparatus dew point (ADP):</strong> the effective coil surface temperature toward which air is cooled.</li>
<li><strong>Bypass factor:</strong> the fraction of air that behaves as if it passed through a coil without touching the fins.</li>
<li><strong>Ton:</strong> 12,000 Btu/h (about 3.52 kW) of cooling.</li>
<li><strong>MBH:</strong> thousands of Btu per hour.</li>
</ul>

<h2>Component and construction terms</h2>
<ul>
<li><strong>Mixing box:</strong> the section where outdoor and return air combine through dampers.</li>
<li><strong>Economizer:</strong> use of cool outdoor air for free cooling by opening the outdoor damper.</li>
<li><strong>Draw-through / blow-through:</strong> fan downstream or upstream of the cooling coil.</li>
<li><strong>Rows and FPI:</strong> coil depth in tube rows and fin density in fins per inch.</li>
<li><strong>Circuiting:</strong> the pattern in which water or refrigerant flows through coil tubes.</li>
<li><strong>Drain pan:</strong> the sloped pan under cooling coils and humidifiers that collects condensate.</li>
<li><strong>Double-wall casing:</strong> panels with an inner liner covering the insulation, keeping it out of the airstream.</li>
<li><strong>Thermal break:</strong> a non-conductive barrier that interrupts metal-to-metal heat flow through panels and frames.</li>
<li><strong>Casing leakage class:</strong> a rating of how much air escapes through the casing at a test pressure, as defined in AHRI 1350.</li>
<li><strong>Knockdown unit:</strong> an AHU built to be disassembled into panels and components that fit through doors and reassembled in place.</li>
</ul>

<h2>Filtration and ventilation terms</h2>
<ul>
<li><strong>MERV:</strong> minimum efficiency reporting value, a filter rating from ASHRAE 52.2.</li>
<li><strong>ePM1, ePM2.5, ePM10:</strong> filter efficiency ratings from ISO 16890.</li>
<li><strong>HEPA:</strong> high-efficiency particulate air filter, very high efficiency on the most penetrating particle size.</li>
<li><strong>Outdoor air (OA):</strong> fresh air brought in for ventilation, governed by ASHRAE 62.1 or the applicable code.</li>
<li><strong>Return, relief and exhaust air:</strong> air coming back from the building, air leaving because of excess outdoor air, and air removed from specific sources, respectively.</li>
<li><strong>DOAS:</strong> dedicated outdoor air system, which conditions ventilation air separately.</li>
<li><strong>VAV and CV:</strong> variable air volume and constant volume.</li>
</ul>
<p class="note">Many of these terms are explained in depth elsewhere in this guide library. For calculations, start with <a href="<?= url('guides/supply-airflow-from-sensible-load') ?>">supply airflow from sensible load</a>.</p>
<?php guide_end([
    ['What does TSP mean on an air handler schedule?', 'TSP is total static pressure: the pressure the fan must develop to move design airflow through both the unit components and the external duct system. It is the sum of internal and external static pressure.'],
    ['What is the difference between BHP and motor horsepower?', 'BHP is the power the fan actually absorbs at its shaft at the design point. Motor horsepower is the nameplate rating of the motor, which is selected larger than the BHP to provide margin.'],
    ['What is a grain of moisture?', 'A grain is a unit of mass equal to 1/7000 of a pound. HVAC engineers use grains of moisture per pound of dry air to express humidity ratio, since the numbers are easier to work with than small decimals.'],
]);
