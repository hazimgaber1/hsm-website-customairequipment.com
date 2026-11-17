<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('murb-corridor-pressurization-calculation'); ?>
<p class="lede">In a multi-unit residential building (MURB), corridor supply air keeps the corridor slightly positive to the suites so cooking odors and smoke do not migrate. Calculate the airflow as the sum of air that must leak from the corridor into suites, stairs, elevator shafts and garbage rooms at the target pressure difference, plus any design ventilation delivered to suites through the corridor.</p>

<h2>Why corridors are pressurized</h2>
<p>In many existing Canadian and northern U.S. apartment buildings, a rooftop makeup air unit supplies the corridors and suites draw that air under their doors to replace bathroom and kitchen exhaust. Newer buildings increasingly ventilate suites directly with in-suite energy recovery ventilators, and supply corridors only for their own ventilation and pressurization. Either way, the corridor airflow must overcome leakage paths so it stays at a slight positive pressure relative to suites.</p>
<p>Stack effect complicates the picture. In winter, warm air rises inside a tall building, so lower floors are under negative pressure relative to outdoors and upper floors positive. Corridor supply must hold its relationship to suites despite those vertical pressure variations.</p>

<h2>The leakage equation</h2>
<p>Airflow through a crack or opening at a given pressure difference follows the orifice relationship:</p>
<p class="formula">Q (cfm) = 2,610 × A × ΔP^0.5</p>
<p>where A is the effective leakage area in ft² and ΔP is in in. w.c. The constant 2,610 corresponds to a discharge coefficient of about 0.65 for standard air. In SI: Q (m³/s) = 0.839 × A (m²) × ΔP (Pa)^0.5.</p>
<p>Leakage areas come from door gap dimensions, measured airtightness data or published effective leakage areas for construction types. Use measured values from similar buildings when available.</p>

<h2>Step-by-step method</h2>
<ol>
<li><strong>Set the target pressure difference</strong> between corridor and suites, commonly a few pascals (for example 0.01 to 0.02 in. w.c., about 2.5 to 5 Pa). Check local code or owner requirements.</li>
<li><strong>List leakage paths</strong> on a typical floor: suite entry doors, corridor walls, stair doors, elevator doors, garbage chute room doors, and any exterior walls of the corridor.</li>
<li><strong>Estimate each leakage area.</strong> For a suite door with a 0.5 in. undercut and 36 in. width, the undercut alone is 0.125 ft²; add perimeter gaps if not weatherstripped.</li>
<li><strong>Calculate airflow</strong> for each path at the target ΔP.</li>
<li><strong>Add suite ventilation air,</strong> if suites rely on corridor transfer to meet ventilation code.</li>
<li><strong>Multiply by the number of floors,</strong> adjusting for differences on ground and top floors.</li>
<li><strong>Add a margin for stack effect and wind,</strong> or check pressure at the bottom and top floors at winter design.</li>
</ol>

<h2>Worked example</h2>
<p>A 12-storey building has 10 suites per floor. Each suite door has a 0.5 in. (13 mm) undercut, 3 ft wide, plus perimeter gaps with an effective area of 0.03 ft². The corridor has two stair doors (0.05 ft² each), one elevator door group (0.25 ft²), and one garbage room door (0.05 ft²). Target ΔP = 0.012 in. w.c. (3 Pa).</p>
<h3>Leakage per floor</h3>
<table>
<thead><tr><th>Path</th><th>Quantity</th><th>Area each (ft²)</th><th>Total area (ft²)</th></tr></thead>
<tbody>
<tr><td>Suite doors (undercut + perimeter)</td><td>10</td><td>0.125 + 0.03 = 0.155</td><td>1.55</td></tr>
<tr><td>Stair doors</td><td>2</td><td>0.05</td><td>0.10</td></tr>
<tr><td>Elevator doors</td><td>1</td><td>0.25</td><td>0.25</td></tr>
<tr><td>Garbage room door</td><td>1</td><td>0.05</td><td>0.05</td></tr>
<tr><td><strong>Total</strong></td><td></td><td></td><td><strong>1.95</strong></td></tr>
</tbody>
</table>
<p class="formula">Q per floor = 2,610 × 1.95 × (0.012)^0.5 = 2,610 × 1.95 × 0.1095 = 557 cfm (263 L/s)</p>
<h3>Suite ventilation</h3>
<p>If each suite must receive 50 cfm (24 L/s) through the corridor for ventilation, add 500 cfm per floor. Note that some of this is already accounted for in door leakage; if suite exhaust draws more than the door leakage at 0.012 in. w.c., the corridor pressure will fall. Size so that corridor supply exceeds suite exhaust demand plus leakage to other paths.</p>
<p>A simple conservative approach is to take the larger of: (a) total leakage at target ΔP, or (b) suite exhaust plus non-suite leakage. Here, (b) = 500 + (2,610 × 0.40 × 0.1095) = 500 + 114 = 614 cfm per floor.</p>
<p class="formula">Building total ≈ 614 × 12 = 7,370 cfm; allow about 15% for stack and wind effects ≈ 8,500 cfm (4,000 L/s)</p>
<p class="note">The 15% allowance is a judgment value. In tall buildings in cold climates, check bottom and top floors separately using the stack pressure difference, which can exceed the corridor target by an order of magnitude.</p>

<h3>Sensitivity to door gaps</h3>
<p>Door undercuts dominate the leakage total in this example. Halving the undercut to 0.25 in. (6 mm) cuts suite door leakage almost in half and lowers the airflow needed to reach the same pressure. Conversely, if suites are expected to draw their ventilation through the corridor, tight doors will starve them. Decide which role the corridor system plays before choosing door hardware, and give the architect the undercut that the calculation assumes.</p>

<h2>Heating the corridor air</h2>
<p>Corridor makeup air is typically 100% outdoor air and must be heated to a neutral supply temperature. Using the sensible heat equation with a −4°F (−20°C) winter design and 68°F (20°C) supply:</p>
<p class="formula">Q = 1.08 × 8,500 × (68 − (−4)) = 1.08 × 8,500 × 72 = 661,000 Btu/h (194 kW)</p>
<p>Many retrofits now add energy recovery to corridor supply systems by bringing suite exhaust back to the rooftop unit, which can sharply reduce this load. Considerations for that approach are in <a href="<?= url('guides/retrofitting-energy-recovery-existing-ahus') ?>">retrofitting energy recovery</a>.</p>

<h2>Verification</h2>
<p>After installation, measure corridor-to-suite pressure differences on low, middle and upper floors in winter, and adjust supply airflow or door undercuts. Weatherstripping suite doors for fire or acoustic reasons reduces leakage and may increase corridor pressure; re-check after any door upgrade. Student residence approaches differ and are covered in <a href="<?= url('guides/dormitory-residence-hall-ventilation') ?>">dormitory and residence hall ventilation</a>, and building-level pressure control is in <a href="<?= url('guides/building-pressurization-control') ?>">building pressurization control</a>.</p>
<?php guide_end([
    ['How much air is needed to pressurize an apartment corridor?', 'Calculate leakage through suite doors, stair and elevator doors and other openings at the target pressure difference, then add any suite ventilation delivered through the corridor and an allowance for stack effect. Results depend heavily on door gaps and building height.'],
    ['What pressure should a MURB corridor be held at relative to suites?', 'Typically a few pascals positive, often around 0.01 to 0.02 in. w.c. (2.5 to 5 Pa). Check local code and owner standards, and verify on several floors because stack effect varies with height.'],
    ['Why do apartment corridors lose pressure in winter?', 'Stack effect makes lower floors negative and upper floors positive relative to outdoors. Corridor supply that is sufficient on mid floors may not maintain positive pressure at the bottom or top of a tall building.'],
]);
