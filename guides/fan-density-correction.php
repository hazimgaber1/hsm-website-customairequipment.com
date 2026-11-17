<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-density-correction'); ?>
<p class="lede">Fan catalogs and selection software are rated at standard air, 0.075 lb/ft³ (1.2 kg/m³). A fan moves the same actual volume regardless of density, but the pressure it develops and the power it draws scale directly with density. To select a fan for hot gas or high altitude, convert the required pressure to standard conditions, select, then convert power back to actual conditions.</p>

<h2>The density ratio</h2>
<p>Air density depends on temperature, barometric pressure (altitude) and, to a lesser degree, humidity and gas composition. For dry air:</p>
<p class="formula">Density ratio (DR) = (530 ÷ (460 + T°F)) × (P barometric ÷ 29.92)</p>
<p class="formula">Actual density = 0.075 × DR (lb/ft³)</p>
<p>T is the gas temperature in °F and P the barometric pressure in in. Hg. The factor 530 is 460 + 70°F, the standard temperature. In SI: DR = (293.15 ÷ (273.15 + T°C)) × (P ÷ 101.325 kPa).</p>
<p>Barometric pressure falls with altitude. Approximate values:</p>
<table>
<thead><tr><th>Altitude</th><th>Barometric pressure</th><th>Altitude factor (P ÷ 29.92)</th></tr></thead>
<tbody>
<tr><td>Sea level</td><td>29.92 in. Hg</td><td>1.00</td></tr>
<tr><td>2,000 ft (610 m)</td><td>27.82 in. Hg</td><td>0.93</td></tr>
<tr><td>4,000 ft (1,220 m)</td><td>25.84 in. Hg</td><td>0.86</td></tr>
<tr><td>6,000 ft (1,830 m)</td><td>23.98 in. Hg</td><td>0.80</td></tr>
<tr><td>8,000 ft (2,440 m)</td><td>22.22 in. Hg</td><td>0.74</td></tr>
</tbody>
</table>
<p class="note">For gases other than air, or with significant moisture or particulate, use the actual gas molecular weight and moisture content to calculate density. Process engineers can usually supply gas analysis.</p>

<h2>What changes and what does not</h2>
<p>At a given fan speed:</p>
<ul>
<li><strong>Volume flow (acfm)</strong> is unchanged. A fan is a constant-volume machine.</li>
<li><strong>Pressure</strong> is proportional to density: P actual = P standard × DR.</li>
<li><strong>Power</strong> is proportional to density: BHP actual = BHP standard × DR.</li>
<li><strong>Mass flow</strong> is proportional to density.</li>
<li><strong>Efficiency</strong> is essentially unchanged.</li>
</ul>
<p>This follows directly from the fan laws; see <a href="<?= url('guides/fan-laws-calculation') ?>">fan laws calculation</a>.</p>

<h2>The selection procedure</h2>
<ol>
<li>Express required airflow as actual cfm at the fan inlet conditions. If the process gives mass flow or scfm, convert: acfm = scfm ÷ DR.</li>
<li>Express the system pressure requirement at actual density. If the duct design was done at actual conditions, it already is.</li>
<li>Convert pressure to standard: P standard = P actual ÷ DR.</li>
<li>Select the fan from standard-air ratings at acfm and P standard. Read speed and standard BHP.</li>
<li>Convert power to actual: BHP actual = BHP standard × DR.</li>
<li>Check the motor for the densest condition the fan will see, often cold start.</li>
</ol>

<h2>Worked example: hot gas</h2>
<p>A dryer exhaust fan must handle 20,000 acfm at 350°F at sea level, against 8.0 in. w.c. static pressure at operating conditions.</p>
<p class="formula">DR = 530 ÷ (460 + 350) = 530 ÷ 810 = 0.654</p>
<p class="formula">P standard = 8.0 ÷ 0.654 = 12.2 in. w.c.</p>
<p>From the catalog at 20,000 cfm and 12.2 in. w.c. standard air, suppose the selection shows 1,750 rpm and 56.0 BHP.</p>
<p class="formula">BHP at 350°F = 56.0 × 0.654 = 36.6 BHP</p>
<p>At cold start with 70°F air, density ratio is 1.0. At 1,750 rpm the fan would draw 56.0 BHP and develop 12.2 in. w.c. if the system allows it. A 40 hp motor that is adequate when hot would overload on cold start. Options: size a 60 hp motor, start with an inlet damper closed, or use a VFD to limit speed until the gas heats up. Hot gas construction is covered in <a href="<?= url('guides/high-temperature-fan-specification') ?>">specifying high-temperature industrial fans</a>.</p>
<p class="warn">The system resistance also falls on cold air in proportion to density only if the system has the same flow pattern. Dampers, process equipment and filters can behave differently. Check the cold start condition with the actual system.</p>

<h2>Worked example: altitude</h2>
<p>An air handler at 6,000 ft (1,830 m) elevation requires 15,000 acfm at 4.0 in. w.c. total static pressure, at 70°F.</p>
<p class="formula">DR = 1.00 × 0.80 = 0.80</p>
<p class="formula">P standard = 4.0 ÷ 0.80 = 5.0 in. w.c.</p>
<p>Select at 15,000 cfm and 5.0 in. w.c. standard. Suppose the selection gives 18.0 BHP standard:</p>
<p class="formula">BHP actual = 18.0 × 0.80 = 14.4 BHP</p>
<p>Two common mistakes at altitude:</p>
<ul>
<li>Selecting at 4.0 in. w.c. from the catalog, which gives a fan that cannot reach design pressure at altitude.</li>
<li>Treating the required airflow as scfm when the duct system and coils actually need a certain actual volume. Coil heat transfer depends on mass flow, so heating and cooling coil capacities must also be corrected: the 1.08 factor in Q = 1.08 × CFM × ΔT becomes 1.08 × DR.</li>
</ul>

<h2>Combined temperature and altitude</h2>
<p>Multiply the factors. A 250°F gas at 4,000 ft:</p>
<p class="formula">DR = (530 ÷ 710) × 0.86 = 0.746 × 0.86 = 0.642</p>

<h2>Humidity and gas composition</h2>
<p>Water vapor is lighter than dry air, so humid gas is slightly less dense than dry gas at the same temperature and pressure. For ordinary ventilation air the effect is small and is usually ignored. For dryer exhaust, kiln gas or flue gas with a high moisture content, it can change density by several percent and should be included. Calculate the mixture molecular weight from the volume fractions of each component, then scale density by the ratio of that molecular weight to 28.97 for air. Combustion products rich in carbon dioxide are heavier than air; gases rich in water vapor are lighter.</p>

<h2>Pressure measurements in the field</h2>
<p>When testing, measure barometric pressure and gas temperature, calculate actual density, and correct measured performance to standard before comparing with ratings. AMCA 210 and field test practice describe these corrections. Mine and process installations at significant depth below surface see higher barometric pressure than at the surface, which increases density; the same method applies. Industrial makeup air balancing on mass flow uses these ratios too, as shown in <a href="<?= url('guides/industrial-makeup-air-calculation') ?>">calculating industrial makeup air</a>.</p>
<?php guide_end([
    ['How do you correct fan static pressure for temperature?', 'Calculate the density ratio, 530 divided by (460 plus gas temperature in °F), times the altitude factor. Divide the actual required pressure by that ratio to get the standard-air pressure for catalog selection.'],
    ['Does a fan move less air at high altitude?', 'At the same speed it moves the same actual volume, but less mass, and develops less pressure and draws less power in proportion to density. Select it at the corrected standard pressure so it meets the actual pressure requirement.'],
    ['Why does a hot gas fan overload on cold start?', 'Cold air is denser, and power is proportional to density. A fan sized for the hot condition draws much more power on cold air at the same speed, so the motor or startup control must handle that.'],
]);
