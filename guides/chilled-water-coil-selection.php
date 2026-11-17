<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('chilled-water-coil-selection'); ?>
<p class="lede">Select a chilled water coil by fixing the air-side conditions and load first, then the water temperatures, then letting rows, fin spacing and circuiting fall out of a manufacturer's rating program while you hold limits on face velocity, air pressure drop and tube velocity.</p>

<h2>Information to gather before you open the selection software</h2>
<p>A coil selection is only as good as its inputs. Before running any numbers, collect:</p>
<ul>
<li><strong>Airflow</strong> in standard CFM at the coil, and whether the unit is constant volume or VAV.</li>
<li><strong>Entering air</strong> dry bulb and wet bulb. For a mixed-air unit this is the mixed condition at design, not the outdoor design point. For a 100% outdoor air unit, check both the cooling dry bulb and the dehumidification dew point design conditions; the second often governs.</li>
<li><strong>Leaving air</strong> dry bulb and wet bulb, or the required leaving dew point if humidity control matters.</li>
<li><strong>Chilled water supply temperature</strong> and the design temperature rise (delta-T) the plant expects.</li>
<li><strong>Physical envelope</strong>: available finned height and length, and any limit on coil depth.</li>
<li><strong>Fluid</strong>: plain water or a glycol mix. If glycol is involved, see <a href="<?= url('guides/glycol-coil-derating') ?>">glycol derating</a>; this guide assumes water.</li>
</ul>

<h2>Step-by-step selection</h2>
<ol>
<li><strong>Calculate the total and sensible loads.</strong> Total load from the enthalpy difference: Q (Btu/h) = 4.5 × CFM × (h(entering) − h(leaving)). Sensible load: Qs = 1.08 × CFM × ΔT. These two numbers are your check against whatever the software reports.</li>
<li><strong>Set face area and face velocity.</strong> Divide CFM by your target velocity to get the finned area needed. Most designers aim for 400 to 500 fpm (2.0 to 2.5 m/s); the reasons for the ceiling are in <a href="<?= url('guides/cooling-coil-face-velocity-moisture-carryover') ?>">face velocity and moisture carryover</a>. Choose a finned height and length that fit the casing.</li>
<li><strong>Set the water conditions.</strong> Enter the supply water temperature and the design delta-T. Many modern plants are designed for 12 to 16°F (6.7 to 8.9 K) rise rather than the traditional 10°F (5.6 K). A higher delta-T cuts pump flow but needs more coil surface.</li>
<li><strong>Calculate the water flow.</strong> GPM = Q ÷ (500 × ΔT(water)). This confirms the order of magnitude before the software chooses circuiting.</li>
<li><strong>Let the program iterate rows and fins.</strong> Start with a reasonable fin spacing, typically 8 to 12 fins per inch (315 to 470 fins per metre), and see how many rows meet the load. If the answer is 10 rows at 14 fins per inch, the coil is being asked to do too much with too little approach; revisit water temperature, delta-T or face area.</li>
<li><strong>Review circuiting and tube velocity.</strong> The program will pick a circuit count (feeds) to put the flow in each tube within a range. Aim for turbulent flow, generally above about 2 ft/s (0.6 m/s), and below the 6 to 8 ft/s (1.8 to 2.4 m/s) range where erosion and pressure drop become problems. The details are in <a href="<?= url('guides/coil-tube-velocity-water-pressure-drop') ?>">coil tube velocity and water pressure drop</a>.</li>
<li><strong>Check air and water pressure drops.</strong> Wet air-side pressure drop for a typical 6 to 8 row coil commonly lands between 0.6 and 1.0 in. w.c. (150 to 250 Pa). Water pressure drop is often held under 10 to 15 ft w.c. (30 to 45 kPa) so it does not dominate the pump head.</li>
<li><strong>Run a part-load case.</strong> For VAV systems, check the coil at minimum airflow. Tube velocity falls with water flow under valve control, and laminar flow at low loads is a common source of poor delta-T.</li>
<li><strong>Confirm drainability and connections.</strong> Make sure the selection drains fully, has vents at the high point and is piped for counterflow.</li>
</ol>

<h2>Worked example</h2>
<p>A mixed-air unit moves 12,000 CFM. Entering air is 80°F dry bulb / 67°F wet bulb (enthalpy about 31.5 Btu/lb). Required leaving air is 55°F / 54°F (enthalpy about 22.6 Btu/lb). Chilled water is 44°F supply with a 14°F rise.</p>
<p class="formula">Total load = 4.5 × 12,000 × (31.5 − 22.6) = 480,600 Btu/h ≈ 40 tons</p>
<p class="formula">Sensible load = 1.08 × 12,000 × (80 − 55) = 324,000 Btu/h</p>
<p class="formula">Water flow = 480,600 ÷ (500 × 14) ≈ 69 GPM</p>
<p>At 475 fpm the finned area is 12,000 ÷ 475 = 25.3 ft², which could be a coil 33 in high by 110 in long. A rating program would likely land on 6 to 8 rows at 10 to 12 fins per inch with a half or full serpentine circuit to keep tube velocity in range at 69 GPM. If the result showed a leaving water temperature well below 58°F, the coil would not be achieving the 14°F rise and the selection would need more surface.</p>
<p class="note">The sensible heat ratio here is 324,000 ÷ 480,600 = 0.67. A coil with a low SHR needs deeper rows to wring out moisture; if the program struggles to hit the leaving wet bulb while easily hitting dry bulb, it is a latent-limited selection.</p>

<h2>Common selection mistakes</h2>
<ul>
<li><strong>Using the outdoor design point as entering air for a mixed-air unit.</strong> It oversizes the coil and wrecks part-load delta-T.</li>
<li><strong>Accepting a very low delta-T.</strong> A selection that only works at 8°F rise will push more water through the plant than designed. Fix the coil, not the plant.</li>
<li><strong>Ignoring fouling.</strong> Ask whether the rating includes a fouling factor. Clean-tube ratings are the norm under AHRI 410.</li>
<li><strong>Chasing capacity with fin density.</strong> 14 fins per inch might hit the number but will be hard to clean and expensive in fan energy over the coil's life.</li>
<li><strong>Forgetting the coil has to come out one day.</strong> Very long, deep coils may need to be split for future replacement.</li>
</ul>

<h2>Documenting the selection</h2>
<p>Record the selection on the schedule with airflow, entering and leaving air conditions, total and sensible capacity, water temperatures, GPM, rows, fins per inch, finned dimensions, face velocity, and air and water pressure drops. That set of values is what a reviewer needs to check equivalence when another manufacturer's coil is offered. When you are ready to put the coil into a complete unit, the <a href="<?= url('design') ?>">3D configurator</a> lets you see how the coil section fits the overall casing.</p>
<?php guide_end([
    ['How many rows should a chilled water coil have?', 'Most comfort cooling coils end up between 4 and 8 rows. The number depends on the load, the approach between leaving air and entering water, the fin spacing and the water delta-T. More than 8 rows usually signals that the water temperature or face area should be revisited.'],
    ['What delta-T should I design a chilled water coil for?', 'Many plants are now designed for a 12 to 16 degree F rise across the coils, which reduces pumping energy and pipe size. The coil needs more surface to achieve a higher delta-T, so confirm the selection actually delivers the scheduled rise.'],
    ['How do I calculate chilled water flow for a coil?', 'Divide the total load in Btu/h by 500 times the water temperature rise in degrees F. For example, 480,000 Btu/h at a 12 degree rise needs 80 GPM. The 500 constant applies to water; glycol mixtures need a different factor.'],
]);
