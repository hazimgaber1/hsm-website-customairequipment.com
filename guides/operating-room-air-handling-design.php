<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('operating-room-air-handling-design'); ?>
<p class="lede">Design operating room air handling in this order: fix the room's airflow from the larger of the required air changes and the cooling load, lay out a unidirectional diffuser array over the surgical field, place low returns, set a positive pressure offset, and then size a dedicated or suite-level AHU that can deliver that air clean, dry and continuously.</p>

<h2>Step 1: Gather the design criteria</h2>
<ol>
<li>Confirm the governing standard and edition: ASHRAE 170 through the FGI Guidelines in the US, CSA Z317.2 in Canada, plus any owner standard.</li>
<li>Identify the OR class or type (for example, Class B or C surgical procedures, hybrid ORs, cardiac or orthopaedic suites).</li>
<li>Record minimum air changes, pressure relationship, temperature range and RH range for the room from the standard.</li>
<li>Get the room dimensions, ceiling height, equipment loads (imaging, booms, lights), and the number of staff expected.</li>
<li>Ask the surgical team for the setpoints they actually intend to run. Low setpoints change the AHU design substantially.</li>
</ol>

<h2>Step 2: Determine room airflow</h2>
<p>Calculate airflow from the air change requirement and from the sensible cooling load, and use the larger.</p>
<p class="formula">CFM (ACH) = ACH × room volume (ft³) ÷ 60</p>
<p class="formula">CFM (load) = sensible load (Btu/h) ÷ (1.08 × ΔT)</p>
<p>Example: a 650 ft² (60 m²) OR with a 10 ft (3.05 m) ceiling has 6,500 ft³. At 20 ACH: 20 × 6,500 ÷ 60 = 2,167 cfm (1,023 L/s). If the sensible load is 40,000 Btu/h with a 15°F supply ΔT: 40,000 ÷ (1.08 × 15) = 2,469 cfm. The load governs, so design for about 2,500 cfm. Hybrid ORs with imaging equipment often exceed 25 or 30 ACH for this reason.</p>
<p>Outdoor air is set separately at the minimum outdoor ACH from the standard (commonly 4): 4 × 6,500 ÷ 60 = 433 cfm. Detailed airflow methods across room types are in <a href="<?= url('guides/hospital-air-change-calculation') ?>">calculating hospital room airflow</a>.</p>

<h2>Step 3: Lay out the primary diffuser array</h2>
<p>The goal is a gentle, downward, unidirectional flow of clean air over the surgical field that pushes particles away from the wound and the sterile instrument tables.</p>
<ul>
<li>Centre the array over the surgical table. Standard 170 has required the primary array to extend a set distance beyond the table footprint on each side (commonly 12 in. or 305 mm); confirm in your edition.</li>
<li>Use non-aspirating, laminar flow diffusers with low discharge velocity. Standard 170 limits the airflow per unit of diffuser face area for the primary array; check the value in the edition you use.</li>
<li>Limit how much of the array area is taken up by lights, booms and gas columns. Coordinate boom mounting plates early; they compete for the same ceiling.</li>
<li>Supply temperature only a few degrees below room temperature keeps the downward flow stable without dumping cold air on staff.</li>
<li>Place additional supply outside the array only if needed for load, and keep it from disturbing the primary flow.</li>
</ul>
<p class="note">Terminal HEPA filtration in the array is not always required by Standard 170 for general ORs, but many owners specify it. If used, it adds pressure drop the AHU must deliver and requires access for testing.</p>

<h2>Step 4: Place the returns</h2>
<ul>
<li>Use low returns near the floor, typically on at least two walls and as far apart as practical, often in opposite corners.</li>
<li>Keep returns away from the area directly under the array.</li>
<li>Size return grilles for low face velocity to avoid noise and drafts at staff ankles.</li>
<li>High returns or exhaust may be added for anaesthetic gas removal or smoke evacuation as the design requires.</li>
</ul>

<h2>Step 5: Set the pressure relationship</h2>
<p>ORs must be positive to surrounding corridors and less clean spaces. Set the return airflow below the supply by an offset that produces the minimum required differential, usually at least 0.01 in. w.c. (2.5 Pa), and plan for door openings. The offset depends on how tight the room is; see <a href="<?= url('guides/room-pressurization-offset-calculation') ?>">calculating room pressurization airflow offset</a>. Provide a room pressure monitor at the OR entrance with local indication.</p>
<p>Control the supply and return with pressure-independent airflow valves so the offset holds as filters load and when the room switches between occupied and unoccupied modes.</p>

<h2>Step 6: Select the air handling arrangement</h2>
<table>
<thead><tr><th>Arrangement</th><th>Advantages</th><th>Considerations</th></tr></thead>
<tbody>
<tr><td>Dedicated AHU per OR</td><td>Independent control, simple isolation, best for low setpoints</td><td>More units, space and cost; redundancy must be per unit</td></tr>
<tr><td>Suite AHU serving several ORs</td><td>Fewer units, shared redundancy, diversity in loads</td><td>Zone reheat for individual control; humidity is common to the suite</td></tr>
<tr><td>Suite AHU plus room recirculating units</td><td>Higher room ACH with smaller central airflow</td><td>Only where the standard permits room recirculation; added maintenance</td></tr>
</tbody>
</table>
<p>For suite AHUs, design the coil to the most demanding room's dew point and use terminal reheat for each OR. Provide two filter banks per the standard, with the final MERV 14 bank downstream of the coils and fans.</p>

<h2>Step 7: Build in continuity and access</h2>
<ul>
<li>Use fan arrays or redundant fans so a failure does not stop airflow to the ORs.</li>
<li>Provide filter, coil and humidifier access that can be used while the unit operates, or a second unit that can carry the load.</li>
<li>Put the AHU fans and controls on the essential electrical system.</li>
<li>Arrange controls so occupied and unoccupied modes maintain positive pressure at all times.</li>
</ul>
<p>Temperature and humidity setpoints well below the standard minimums need additional design steps covered separately. When you are ready to configure a unit around these criteria, the <a href="<?= url('products/custom-air-handlers') ?>">custom air handlers</a> page shows the construction options available.</p>
<?php guide_end([
    ['How much airflow does an operating room need?', 'At least the minimum air changes in the governing standard, commonly 20 total ACH with 4 outdoor ACH under ASHRAE 170, or the airflow required by the sensible cooling load, whichever is greater. Rooms with heavy equipment often need more.'],
    ['Where should returns be located in an operating room?', 'Low returns near the floor on at least two walls, as far apart as practical and away from the area under the supply array, are the usual arrangement.'],
    ['Does every operating room need a dedicated air handler?', 'No. Suite air handlers serving several ORs with terminal reheat are common. Dedicated units make sense where very low setpoints, independent control or isolation are priorities.'],
    ['What pressure should an operating room be held at?', 'Positive relative to adjacent spaces, with a minimum differential commonly set at 0.01 in. w.c. Many designers target a higher value to ride through door openings.'],
]);
