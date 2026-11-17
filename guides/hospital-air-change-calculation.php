<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('hospital-air-change-calculation'); ?>
<p class="lede">Convert a Standard 170 air change requirement to airflow by multiplying the ACH by the room volume and dividing by 60. Do it twice for each room, once for total air and once for outdoor air, then compare the total against the airflow the cooling load needs and take the larger. Exhaust follows from the room's exhaust rule.</p>

<h2>The basic formulas</h2>
<p class="formula">Q (cfm) = ACH × V (ft³) ÷ 60</p>
<p class="formula">Q (L/s) = ACH × V (m³) ÷ 3.6</p>
<p class="formula">Load airflow (cfm) = sensible load (Btu/h) ÷ (1.08 × ΔT)</p>
<p>Use the room's net volume: floor area times ceiling height. For rooms with sloped ceilings or soffits, calculate actual volume. The 1.08 factor assumes standard air; at high-altitude sites, reduce it in proportion to air density. ACH values come from the edition of ASHRAE 170 (or CSA Z317.2) adopted for the project; the guide to the space table itself is <a href="<?= url('guides/ashrae-170-ventilation-requirements') ?>">ASHRAE 170 ventilation requirements</a>.</p>

<h2>Worked example 1: operating room</h2>
<p>An OR measures 24 ft × 26 ft with a 10 ft ceiling (7.3 m × 7.9 m × 3.05 m). Requirements: 20 total ACH, 4 outdoor ACH, positive pressure.</p>
<ol>
<li>Volume: 24 × 26 × 10 = 6,240 ft³ (177 m³).</li>
<li>Total airflow by ACH: 20 × 6,240 ÷ 60 = 2,080 cfm (982 L/s).</li>
<li>Outdoor airflow: 4 × 6,240 ÷ 60 = 416 cfm (196 L/s).</li>
<li>Sensible load: lights, equipment and twelve staff total 30,000 Btu/h. With supply at 55°F to a 68°F room (ΔT 13°F): 30,000 ÷ (1.08 × 13) = 2,137 cfm.</li>
<li>Design supply: the larger, 2,137 cfm. Round to 2,150 cfm.</li>
<li>Return: supply minus the pressurization offset. With a 200 cfm offset, return is 1,950 cfm.</li>
</ol>
<p>Here the load and ACH results are close. In a hybrid OR with imaging equipment, the load would dominate.</p>

<h2>Worked example 2: airborne infection isolation room</h2>
<p>Patient room 14 ft × 16 ft × 9 ft, with a 6 ft × 8 ft × 9 ft toilet. Requirements: 12 total ACH, 2 outdoor ACH, negative, all air exhausted.</p>
<ol>
<li>Room volume: 14 × 16 × 9 = 2,016 ft³ (57 m³).</li>
<li>Total airflow at 12 ACH: 12 × 2,016 ÷ 60 = 403 cfm.</li>
<li>Outdoor air at 2 ACH: 2 × 2,016 ÷ 60 = 67 cfm. Since the supply can be a blend from the AHU, the outdoor portion only needs to be delivered somewhere in the AHU's mixed supply; it is not a separate duct.</li>
<li>For a negative room, the required ACH is usually applied to the exhaust, which is the larger flow. Exhaust: 403 cfm minimum from the room.</li>
<li>Toilet volume: 6 × 8 × 9 = 432 ft³. At a 10 ACH exhaust requirement: 72 cfm.</li>
<li>Total exhaust: room plus toilet. If the toilet is exhausted through the room, set total exhaust to at least 403 + 72 = 475 cfm.</li>
<li>Supply: exhaust minus offset. With a 100 cfm offset, supply is 375 cfm, which must also meet the cooling load.</li>
</ol>
<p class="note">Whether the ACH is applied to supply or exhaust in negative rooms depends on how the adopted standard and the AHJ interpret it. State the basis on the drawings.</p>

<h2>Worked example 3: patient room</h2>
<p>Patient room 13 ft × 18 ft × 9 ft = 2,106 ft³. Requirements: 4 total ACH, 2 outdoor ACH.</p>
<ul>
<li>Total by ACH: 4 × 2,106 ÷ 60 = 140 cfm.</li>
<li>Outdoor by ACH: 2 × 2,106 ÷ 60 = 70 cfm.</li>
<li>Sensible load with exterior glazing: 6,500 Btu/h at ΔT 20°F: 6,500 ÷ 21.6 = 301 cfm.</li>
</ul>
<p>The cooling load governs by a factor of two. In patient rooms the ACH minimum is rarely the design driver, but the outdoor air portion still must be met.</p>

<h2>Rolling up to the air handler</h2>
<table>
<thead><tr><th>Room</th><th>Supply (cfm)</th><th>Outdoor air (cfm)</th><th>Exhaust (cfm)</th></tr></thead>
<tbody>
<tr><td>OR 1</td><td>2,150</td><td>416</td><td>0 (returned)</td></tr>
<tr><td>OR 2</td><td>2,150</td><td>416</td><td>0 (returned)</td></tr>
<tr><td>AIIR</td><td>375</td><td>67</td><td>475</td></tr>
<tr><td>20 patient rooms</td><td>6,020</td><td>1,400</td><td>1,440 (toilets)</td></tr>
<tr><td>Support spaces</td><td>2,500</td><td>500</td><td>800</td></tr>
<tr><td><strong>Total</strong></td><td><strong>13,195</strong></td><td><strong>2,799</strong></td><td><strong>2,715</strong></td></tr>
</tbody>
</table>
<p>The AHU outdoor air must be at least the sum of room outdoor air requirements, 2,799 cfm in this example. Because the exhaust total is close to that value, the actual outdoor air intake will often be set by building exhaust plus a positive building pressurization margin rather than by the sum of room minimums. Compare both and use the larger. Building-level pressurization is covered in <a href="<?= url('guides/building-pressurization-control') ?>">building pressurization control</a>.</p>

<h2>Adjustments that change the answer</h2>
<h3>Altitude</h3>
<p>Air change rates are volumetric, so the ACH-based cfm does not change with altitude. The load-based airflow does: at lower density, each cubic foot carries less heat, so the 1.08 factor must be reduced. At about 5,000 ft (1,520 m), air density is roughly 83% of standard, so the factor becomes about 0.90 and load-based airflow rises by about 20%. Rooms that were ACH-governed at sea level can become load-governed at altitude.</p>
<h3>Ceiling height and volume</h3>
<p>Because ACH multiplies volume, a tall ceiling raises the required airflow even though the floor area and occupancy are unchanged. A hybrid OR with a 12 ft ceiling for imaging equipment needs 20% more airflow than the same room at 10 ft. Calculate with the actual ceiling height of the finished room, not the floor-to-floor height.</p>
<h3>Common mistakes</h3>
<ul>
<li>Using gross area including walls and casework, which overstates volume slightly.</li>
<li>Forgetting toilet and anteroom exhaust when totalling a negative room.</li>
<li>Counting outdoor air twice by adding room outdoor air requirements on top of an AHU minimum outdoor air percentage.</li>
<li>Applying diversity to critical rooms that must hold minimum ACH continuously.</li>
</ul>

<h2>Checks before finalizing</h2>
<ul>
<li>Confirm outdoor air percentages remain valid at all operating modes, including unoccupied turndown where permitted.</li>
<li>Check that recirculated air from the AHU does not come from spaces whose air must be exhausted.</li>
<li>Verify the supply temperature used in the load calculation is achievable for all rooms on the unit.</li>
<li>Add diversity only where the standard allows it; minimum ACH applies continuously in most critical rooms.</li>
</ul>
<p>The supply-exhaust offset in each pressurized room is its own calculation, described in <a href="<?= url('guides/room-pressurization-offset-calculation') ?>">calculating room pressurization airflow offset</a>.</p>
<?php guide_end([
    ['How do you convert air changes per hour to cfm?', 'Multiply the ACH by the room volume in cubic feet and divide by 60. For example, 20 ACH in a 6,000 cubic foot room is 2,000 cfm.'],
    ['Does the air change rate or the cooling load set hospital room airflow?', 'Whichever requires more airflow. Operating rooms are often close, while patient rooms are usually set by the cooling load and isolation rooms by the air change requirement.'],
    ['How is outdoor air calculated for a hospital AHU?', 'Add the outdoor air ACH requirement for every room served, then compare with the airflow needed to make up building exhaust plus a pressurization margin, and use the larger value.'],
    ['Do I apply ACH to supply or exhaust in a negative pressure room?', 'Commonly the ACH is applied to the larger flow, which is exhaust in a negative room. Interpretations vary, so state the basis on the drawings and confirm with the AHJ.'],
]);
