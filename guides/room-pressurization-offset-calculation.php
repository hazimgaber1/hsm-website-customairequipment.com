<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('room-pressurization-offset-calculation'); ?>
<p class="lede">The airflow offset needed to pressurize a room equals the air that will flow through the room's leakage paths at the target pressure differential. Estimate the total leakage area, mostly the door gaps, then apply the orifice equation Q = 2,610 × A × √ΔP. For a typical hospital room with a well-sealed envelope, the result is usually in the range of 50 to 200 cfm.</p>

<h2>The orifice equation</h2>
<p>Air leaking through a gap behaves like flow through a sharp-edged orifice. With a discharge coefficient of about 0.6 and standard air density, the relationship in imperial units is:</p>
<p class="formula">Q (cfm) = 2,610 × A (ft²) × √ΔP (in. w.c.)</p>
<p>In SI units, with the same assumptions:</p>
<p class="formula">Q (L/s) = 787 × A (m²) × √ΔP (Pa)</p>
<p>Rearranged to find the pressure a given offset will produce:</p>
<p class="formula">ΔP = (Q ÷ (2,610 × A))²</p>
<p>Because flow varies with the square root of pressure, doubling the pressure differential requires about 41% more offset airflow, while doubling the leakage area requires double the offset.</p>

<h2>Step 1: Choose the target differential</h2>
<p>ASHRAE 170 commonly sets a minimum differential of 0.01 in. w.c. (2.5 Pa) for rooms with a required pressure relationship. Design to a value above the minimum so normal variation does not cause alarms. Many designers use 0.015 to 0.03 in. w.c. for AIIRs and PE rooms. Compounding pharmacies under USP 797/800 have their own values, often 0.02 in. w.c. Confirm the requirement and the owner's preference.</p>

<h2>Step 2: Estimate the leakage area</h2>
<p>With the door closed, leakage occurs at:</p>
<ul>
<li><strong>Door undercut:</strong> width × gap height.</li>
<li><strong>Door perimeter:</strong> sides and head, unless gasketed.</li>
<li><strong>Door hardware and latch area.</strong></li>
<li><strong>Ceiling:</strong> lay-in tile ceilings leak far more than sealed gypsum.</li>
<li><strong>Wall penetrations and joints:</strong> pipes, conduits, medical gas outlets, outlet boxes.</li>
<li><strong>Windows and exterior wall</strong>, if any.</li>
</ul>
<table>
<thead><tr><th>Path</th><th>Typical estimate</th></tr></thead>
<tbody>
<tr><td>Door undercut, 3 ft 6 in. door with 1/2 in. gap</td><td>3.5 × (0.5 ÷ 12) = 0.146 ft²</td></tr>
<tr><td>Door perimeter, 1/8 in. gap on sides and head of a 3.5 × 7 ft door</td><td>(7 + 7 + 3.5) × (0.125 ÷ 12) = 0.182 ft²</td></tr>
<tr><td>Sealed gypsum ceiling and sealed penetrations</td><td>0.02 to 0.05 ft² allowance</td></tr>
<tr><td>Lay-in ceiling, unsealed</td><td>Can exceed the door leakage; avoid in pressurized rooms</td></tr>
</tbody>
</table>
<p>A gasketed door reduces the perimeter term substantially. Measured values from similar rooms, or a blower door test on a sample room, are better than estimates when available.</p>

<h2>Worked example: airborne infection isolation room</h2>
<p>An AIIR with a sealed gypsum ceiling and a 3 ft 6 in. × 7 ft door with a 1/2 in. undercut and 1/8 in. gaps on sides and head. Target: −0.02 in. w.c. to the corridor.</p>
<ol>
<li>Undercut: 0.146 ft².</li>
<li>Perimeter: 0.182 ft².</li>
<li>Ceiling and penetrations allowance: 0.04 ft².</li>
<li>Total leakage area A = 0.146 + 0.182 + 0.04 = 0.368 ft² (0.034 m²).</li>
<li>√ΔP = √0.02 = 0.141.</li>
<li>Q = 2,610 × 0.368 × 0.141 = 135 cfm (64 L/s).</li>
</ol>
<p>Exhaust must exceed supply by about 135 cfm. If the room supply is set at 375 cfm, exhaust is about 510 cfm. Round the offset to a value the airflow valves can control and measure accurately; 150 cfm is a reasonable design value here.</p>
<p>Checking the same room at the 0.01 in. w.c. minimum: √0.01 = 0.1, so Q = 2,610 × 0.368 × 0.1 = 96 cfm. The design offset of 150 cfm gives margin above the minimum. Total airflow from air change requirements is a separate calculation, covered in <a href="<?= url('guides/hospital-air-change-calculation') ?>">calculating hospital room airflow</a>.</p>

<h2>Worked example: effect of a gasketed door</h2>
<p>Add perimeter gaskets that reduce the side and head gaps to an effective 1/32 in.: perimeter area falls to (17.5 × 0.0026) = 0.046 ft². New total A = 0.146 + 0.046 + 0.04 = 0.232 ft². At 0.02 in. w.c.: Q = 2,610 × 0.232 × 0.141 = 85 cfm. Sealing the door cut the required offset by more than a third, which reduces energy use and makes the pressure less sensitive to airflow error.</p>

<h2>Worked example: anteroom cascade</h2>
<p>Consider a corridor, an anteroom and a negative isolation room. Each door has a leakage area of 0.33 ft² closed. The target is −0.01 in. w.c. from corridor to anteroom and another −0.01 in. w.c. from anteroom to patient room, so the patient room sits at −0.02 in. w.c. relative to the corridor.</p>
<ul>
<li>Flow from corridor into anteroom at 0.01 in. w.c.: 2,610 × 0.33 × 0.1 = 86 cfm.</li>
<li>Flow from anteroom into patient room at 0.01 in. w.c.: also 86 cfm.</li>
<li>Anteroom balance: it receives 86 cfm through the corridor door and loses 86 cfm through the patient room door, so its own supply and exhaust are set equal to each other.</li>
<li>Patient room: receives 86 cfm from the anteroom, so its exhaust must exceed its supply by 86 cfm plus any allowance for ceiling and penetration leakage.</li>
</ul>
<p>The same approach works for positive cascades, such as a protective environment room. Write down each boundary's flow and confirm every room balances: supply plus air flowing in equals exhaust plus air flowing out.</p>

<h2>Practical limits on the offset</h2>
<ul>
<li><strong>Too small an offset</strong> may fall within the accuracy band of the airflow devices. If valves are accurate to ±5% of a 500 cfm flow (±25 cfm each), a 50 cfm offset could be nearly zero in reality. Keep the offset well above the combined measurement error.</li>
<li><strong>Too large an offset</strong> causes doors to whistle, makes doors hard to open or close, and wastes conditioned air. Door opening force limits under accessibility rules constrain how high the differential can be.</li>
<li><strong>Rooms in a cascade</strong> (corridor, anteroom, patient room) need an offset for each boundary. The anteroom's net airflow is the sum of flows through both doors.</li>
<li><strong>Stack and wind effects</strong> on tall buildings can shift corridor pressure; rooms near shafts or exterior walls may need more margin.</li>
</ul>
<p class="note">Commission by measuring the actual differential at the design offset and adjusting. The calculation sets a starting point; real rooms vary with construction quality.</p>
<p>For ongoing verification of the result, see <a href="<?= url('guides/room-pressure-monitoring') ?>">how to monitor healthcare room pressure relationships</a>.</p>
<?php guide_end([
    ['How do you calculate the airflow offset for room pressurization?', 'Estimate the total leakage area of the room, mostly door gaps, and use Q = 2,610 x A x the square root of the pressure differential, with A in square feet and pressure in inches of water, to get the offset in cfm.'],
    ['What is a typical offset for a hospital isolation room?', 'For a well-sealed room with a standard door, offsets of roughly 75 to 200 cfm are common, depending on door gaps and the target differential.'],
    ['Why does door sealing matter for room pressure?', 'Required offset is proportional to leakage area. Gasketing a door can cut the leakage area substantially, reducing the offset needed and making the room less sensitive to airflow measurement errors.'],
    ['Can the pressurization offset be too large?', 'Yes. Large differentials make doors whistle and hard to operate and waste conditioned air. Keep the offset above measurement error but within door operating force limits.'],
]);
