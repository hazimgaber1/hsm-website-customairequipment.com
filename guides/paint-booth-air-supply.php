<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('paint-booth-air-supply'); ?>
<p class="lede">A paint booth's finish quality depends on clean, uniform, conditioned air flowing past the part at a steady velocity. Design the supply side by setting the booth airflow from the required cross-draft or downdraft velocity, filtering to keep dirt off the finish, holding temperature and humidity within the coating manufacturer's window, and balancing supply slightly below exhaust so the booth stays negative to the plant.</p>

<h2>Step 1: Identify the booth type and coating requirements</h2>
<p>Start with how air moves through the booth and what the coating needs:</p>
<ul>
<li><strong>Crossdraft:</strong> air enters through filtered doors or a front intake and flows horizontally across the part to exhaust filters at the back. Simple, used for general industrial finishing.</li>
<li><strong>Downdraft:</strong> air enters through a filtered ceiling plenum and flows vertically down past the part into a floor exhaust pit or grates. Best finish quality; common in automotive refinishing and high-quality finishing.</li>
<li><strong>Semi-downdraft:</strong> air enters from a ceiling plenum at the front and exits at the rear wall low. A compromise in cost and finish quality.</li>
<li><strong>Side downdraft:</strong> ceiling supply with exhaust at side walls near the floor.</li>
</ul>
<p>Get the coating supplier's application and cure conditions: allowable temperature range, relative humidity range, flash time and any curing cycle at elevated temperature. Waterborne coatings are often more sensitive to humidity than solvent-borne ones.</p>

<h2>Step 2: Set airflow from booth velocity</h2>
<p>Booth airflow is set by the average air velocity through the booth cross-section where spraying occurs. Applicable fire codes (such as NFPA 33 where adopted) and occupational safety regulations govern the minimum ventilation for keeping vapor concentration below a fraction of the lower flammable limit and for worker exposure. Common industry practice uses velocities on the order of 50 to 100 fpm (0.25 to 0.5 m/s) depending on booth type and process; downdraft booths are often at the lower end, crossdraft higher.</p>
<p class="formula">Booth CFM = Average velocity (fpm) × Cross-section area (ft²)</p>
<p>Worked example: a downdraft booth 14 ft wide × 24 ft long (floor area 336 ft²) at 60 fpm average downward velocity requires 336 × 60 = 20,160 cfm (9,500 L/s).</p>
<p class="note">Velocity and ventilation requirements vary with code edition, jurisdiction and process. Confirm with the authority having jurisdiction and the booth manufacturer; the figures above are illustrative.</p>

<h2>Step 3: Balance supply and exhaust</h2>
<ol>
<li>Size exhaust first from the booth velocity and exhaust filter pressure drop.</li>
<li>Set supply at slightly less than exhaust so the booth remains negative relative to the surrounding plant, preventing overspray and vapor escaping. A small negative of a few pascals is typical; some refinish booths run slightly positive to keep dirt out, with careful containment. Follow the booth design and local code.</li>
<li>Control supply fan speed to hold booth pressure, or set supply and exhaust at fixed flows with a manual or automatic balancing damper.</li>
<li>Interlock supply with exhaust so supply cannot run unless exhaust is proven, and spray equipment cannot operate unless both are running.</li>
</ol>

<h2>Step 4: Filter the supply air</h2>
<p>Dirt on a wet finish is the most common quality defect, so supply filtration is critical:</p>
<ul>
<li><strong>Intake prefilters</strong> on the makeup air unit to remove coarse dust and insects.</li>
<li><strong>Ceiling or intake filters</strong> in the booth plenum. Downdraft booths use ceiling diffusion media that both filter and distribute air uniformly. These are typically fine-fiber media designed specifically for paint booths, often with a tacky coating.</li>
<li><strong>Silicone-free</strong> filter media and components, since silicone contamination causes fisheyes in finishes.</li>
<li><strong>Pressure drop monitoring</strong> on each filter stage, with the supply fan selected for loaded filter resistance.</li>
</ul>
<p>Exhaust filtration captures overspray and protects the exhaust fan and environment; it is part of the exhaust design rather than supply.</p>

<h2>Step 5: Temper and condition the air</h2>
<p>Booth supply is typically 100% outdoor air, so the makeup air unit must heat it in winter. Calculate the heating load with the sensible heat equation:</p>
<p class="formula">Q (Btu/h) = 1.08 × CFM × (T supply − T outdoor)</p>
<p>For the 20,160 cfm booth with a 0°F (−18°C) winter design and 70°F (21°C) supply: Q = 1.08 × 20,160 × 70 = 1,524,000 Btu/h (447 kW).</p>
<p>Many booths use direct-fired gas burners for spray-mode heating because of their efficiency and wide turndown; whether direct firing is allowed depends on listing and code. The burner tradeoffs are discussed in <a href="<?= url('guides/direct-fired-vs-indirect-fired-makeup-air') ?>">direct-fired vs indirect-fired makeup air</a>.</p>
<p>For humidity-sensitive waterborne coatings, add:</p>
<ul>
<li>Cooling and dehumidification in summer to keep RH within the coating window.</li>
<li>Humidification in dry winters if the coating needs a minimum RH.</li>
<li>Temperature control to ±2°F (±1°C) or better where finish quality depends on it.</li>
</ul>

<h2>Step 6: Plan for cure and flash modes</h2>
<p>Many booths switch between spray, flash and cure modes:</p>
<ol>
<li><strong>Spray:</strong> full airflow, supply at application temperature.</li>
<li><strong>Flash:</strong> reduced airflow or increased temperature to drive off solvents or water between coats.</li>
<li><strong>Cure (bake):</strong> elevated temperature, often 140°F to 180°F (60°C to 82°C), with partial recirculation and a defined fresh air fraction to keep vapor below safe limits.</li>
</ol>
<p>Recirculation during cure must follow the applicable code and booth listing, with monitoring of solvent concentration where required. The makeup air unit, dampers and controls must be designed for each mode.</p>

<h2>Step 7: Distribute air uniformly</h2>
<p>Uneven velocity creates eddies that carry overspray back onto the part. Use a ceiling plenum with an internal baffle or diffusion layer to even out flow, keep plenum velocity low, and avoid single-point duct connections that blast onto the filters. Verify velocity uniformity across the booth with a traverse after startup.</p>
<p>Exhaust fans handling solvent-laden air must meet separate construction requirements; see <a href="<?= url('guides/spark-resistant-fans-amca-99-0401') ?>">spark-resistant fan construction</a>. General ventilation of the surrounding plant is covered in <a href="<?= url('guides/industrial-makeup-air-calculation') ?>">industrial makeup air calculation</a>.</p>
<?php guide_end([
    ['How much air does a paint booth need?', 'Booth airflow is the required average velocity times the booth cross-section. Velocities of roughly 50 to 100 fpm are common depending on booth type, but code, jurisdiction and process requirements govern the minimum.'],
    ['Should a paint booth be positive or negative pressure?', 'Most booths are kept slightly negative to the surrounding plant so overspray and vapor do not escape. Some refinish booths run slightly positive to keep dirt out, with careful containment, following the booth design and local code.'],
    ['Why does humidity matter for waterborne paints?', 'Waterborne coatings dry by evaporating water, so high humidity slows flash and cure and low humidity can cause defects. Holding RH within the coating manufacturer\'s range improves finish consistency.'],
]);
