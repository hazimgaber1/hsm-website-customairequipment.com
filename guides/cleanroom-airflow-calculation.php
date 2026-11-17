<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('cleanroom-airflow-calculation'); ?>
<p class="lede">Cleanroom supply airflow is the largest of three numbers: the airflow needed for the ISO class (from air changes or unidirectional velocity), the airflow needed to remove the sensible heat, and any process requirement. Outdoor air is calculated separately from ventilation, exhaust makeup and pressurization leakage.</p>

<h2>The two formulas you need</h2>
<p>Non-unidirectional (mixed flow) cleanrooms, typical of ISO 6 to ISO 8, are sized by air change rate:</p>
<p class="formula">Supply cfm = ACH × Room volume (ft³) ÷ 60</p>
<p>Unidirectional cleanrooms, typical of ISO 5 and cleaner, are sized by the velocity leaving the filter face across the clean zone:</p>
<p class="formula">Supply cfm = Filter coverage area (ft²) × Velocity (fpm)</p>
<p>In SI, the same relationships are m³/h = ACH × volume (m³), and m³/s = area (m²) × velocity (m/s).</p>

<h2>Choosing the air change rate or velocity</h2>
<p>ISO 14644-1 sets particle limits only, so the airflow target comes from industry guidance, owner standards and experience with similar processes. IEST recommended practices and pharmaceutical guidance publish ranges, and the ranges are wide because particle generation varies enormously with gowning, people density and process. The values below are commonly used starting points, not limits:</p>
<table>
<thead><tr><th>Class</th><th>Airflow pattern</th><th>Common design starting point</th></tr></thead>
<tbody>
<tr><td>ISO 8</td><td>Non-unidirectional</td><td>About 15 to 25 ACH</td></tr>
<tr><td>ISO 7</td><td>Non-unidirectional</td><td>About 30 to 60 ACH</td></tr>
<tr><td>ISO 6</td><td>Non-unidirectional or partial ceiling coverage</td><td>About 70 to 150 ACH</td></tr>
<tr><td>ISO 5</td><td>Unidirectional</td><td>About 70 to 100 fpm (0.36 to 0.5 m/s) at the work zone</td></tr>
</tbody>
</table>
<p>For the class definitions themselves, see <a href="<?= url('guides/iso-14644-cleanroom-classes') ?>">ISO 14644 cleanroom classes explained</a>. Lower rates can work for lightly occupied rooms with good gowning, and many owners now justify reductions with recovery-time tests rather than adopting the top of a range.</p>
<p class="note">Air change rate is a proxy. What actually matters is how fast the room dilutes the particles people and equipment release. A recovery test, which measures how long the room takes to drop by a factor of 100 after a challenge, is a better check than ACH alone.</p>

<h2>Worked example: ISO 7 room</h2>
<p>An ISO 7 operational packaging room is 30 ft × 40 ft with a 9 ft ceiling. Room volume is 30 × 40 × 9 = 10,800 ft³ (306 m³). The owner's standard calls for 40 ACH.</p>
<p class="formula">Supply cfm = 40 × 10,800 ÷ 60 = 7,200 cfm (12,230 m³/h)</p>
<p>Now check the cooling requirement. The room has 12 kW of equipment, lighting and people heat, which is 12 × 3,412 = 40,944 Btu/h sensible. With 62°F supply to hold a 68°F room, ΔT is 6°F:</p>
<p class="formula">Cooling cfm = 40,944 ÷ (1.08 × 6) = 6,320 cfm</p>
<p>The ISO airflow of 7,200 cfm governs, so the room can be supplied at 7,200 cfm with supply air about 5.3°F below the room. If the cooling number had been higher, the supply would need to rise, or supply temperature would need to drop with care for humidity control and drafts.</p>
<p>At 7,200 cfm, terminal HEPA filters in 2 ft × 4 ft housings rated around 600 cfm each need 12 filters. Spread them to avoid dead zones and place low-wall returns along the long walls.</p>

<h2>Worked example: ISO 5 unidirectional zone</h2>
<p>A filling line needs an ISO 5 zone 8 ft × 14 ft under a full HEPA ceiling. The owner targets 90 fpm (0.46 m/s) at the filter face.</p>
<p class="formula">Supply cfm = 8 × 14 × 90 = 10,080 cfm</p>
<p>That zone alone, in perhaps 1,000 ft³ of space, represents about 600 air changes per hour. This is why unidirectional zones are kept as small as the process allows and why most of their air is recirculated rather than conditioned from outdoors.</p>

<h2>Calculating outdoor air</h2>
<p>Outdoor air is a fraction of the supply and is the largest of these:</p>
<ol>
<li><strong>Occupant ventilation</strong> from ASHRAE 62.1 or the owner's standard, typically a modest amount in a lightly occupied cleanroom.</li>
<li><strong>Exhaust makeup</strong> for process exhaust, hoods, ovens and any equipment exhaust in the suite.</li>
<li><strong>Pressurization leakage</strong> through doors, pass-throughs and construction cracks to maintain the cascade.</li>
</ol>
<p>Leakage through a gap can be estimated with the orifice equation:</p>
<p class="formula">Q (cfm) ≈ 2,610 × A (ft²) × √ΔP (in. w.g.)</p>
<p>For a room with an estimated 0.4 ft² of effective leakage area (door undercuts and gaps) held at 0.04 in. w.g. (10 Pa) above the corridor, Q ≈ 2,610 × 0.4 × 0.2 = 209 cfm. Add the leakage of every pressurized room, plus exhaust, and compare against occupant ventilation. The largest total sets the makeup unit; the pressure steps themselves are designed in <a href="<?= url('guides/cleanroom-pressure-cascade') ?>">how to design a cleanroom pressure cascade</a>.</p>
<p>In the ISO 7 example, outdoor air might be about 600 cfm of the 7,200 cfm supply, roughly 8%. The rest is recirculated through a recirculation air handler or fan filter units.</p>

<h2>Fan heat and the recirculation loop</h2>
<p>High recirculation rates bring a large fan heat load. A recirculation unit moving 7,200 cfm at 3 in. w.g. total static with a 65% fan and motor combined efficiency adds roughly 7,200 × 3 ÷ (6,356 × 0.65) = 5.2 hp, about 13,300 Btu/h, all of which ends up in the airstream. Include it in the sensible load and size a dry sensible cooling coil in the recirculation path while the makeup unit handles dehumidification. Whether that recirculation is best done centrally or with ceiling fan filter units is compared in <a href="<?= url('guides/fan-filter-units-vs-central-ahu') ?>">fan filter units vs central AHU recirculation</a>.</p>
<?php guide_end([
    ['How many air changes does an ISO 8 cleanroom need?', 'Common design starting points are around 15 to 25 air changes per hour, but ISO 14644-1 does not set a rate. The final value depends on occupancy, gowning and process, and should be confirmed by cooling load and recovery testing.'],
    ['How do you calculate airflow for a unidirectional cleanroom?', 'Multiply the filtered ceiling area in square feet by the design velocity in feet per minute. A 100 ft² ISO 5 zone at 90 fpm needs about 9,000 cfm of supply air.'],
    ['How much outdoor air does a cleanroom need?', 'Enough to cover the largest of occupant ventilation, process exhaust makeup and pressurization leakage. In many recirculating cleanrooms this ends up between about 5% and 20% of the supply airflow.'],
]);
