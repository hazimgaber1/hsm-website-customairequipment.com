<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('cooling-coil-water-carryover-troubleshooting'); ?>
<p class="lede">Water carryover happens when condensate is stripped off the cooling coil fins by the airstream and blown downstream before it can drain into the pan. In an operating unit, the usual causes are airflow higher than design, uneven velocity across the coil face, fouled or damaged fins, and an undersized or poorly positioned drain pan. Confirm it is carryover, then work through those causes.</p>

<h2>Is it really carryover?</h2>
<p>Wet filters downstream, wet duct insulation and water dripping from diffusers can have other sources. Before blaming the coil, rule out the others:</p>
<table>
<thead><tr><th>Observation</th><th>Points to</th></tr></thead>
<tbody>
<tr><td>Water only appears when the cooling coil is wet (humid weather, coil below dew point)</td><td>Carryover</td></tr>
<tr><td>Water appears in winter or whenever the humidifier runs</td><td>Humidifier wetting, not carryover; see <a href="<?= url('guides/wet-duct-humidifier-troubleshooting') ?>">wet duct humidifier troubleshooting</a></td></tr>
<tr><td>Pan full and overflowing; water spreads along the floor</td><td>Drainage problem, not carryover</td></tr>
<tr><td>Droplets visible leaving the coil face in a flashlight beam</td><td>Carryover</td></tr>
<tr><td>Water on the outside of cold ducts in unconditioned space</td><td>Condensation on the duct, not carryover</td></tr>
<tr><td>Wetting concentrated downstream of one part of the coil</td><td>Carryover from local high velocity</td></tr>
</tbody>
</table>
<p>Look at the leaving face of the coil with a strong flashlight while the fan runs at full speed on a humid day. If droplets stream off the fins into the air, it is carryover.</p>

<h2>Symptom: carryover across the whole coil face</h2>
<h3>Cause: airflow higher than design</h3>
<p><strong>Check:</strong> measure airflow and compare with the TAB report. Look for raised fan speed, removed filters, changed duct static setpoints or terminal units opened wide. Calculate face velocity: airflow divided by coil face area.</p>
<p><strong>Fix:</strong> restore design airflow. Many coils are selected to stay at or below about 500 fpm (2.5 m/s) face velocity for exactly this reason, and the coil's design limit, along with how fin type affects it, is covered in <a href="<?= url('guides/cooling-coil-face-velocity-moisture-carryover') ?>">cooling coil face velocity and moisture carryover</a>. If the airflow increase is permanent, the coil may need a moisture eliminator or replacement.</p>
<h3>Cause: fins fouled or coated</h3>
<p><strong>Check:</strong> dirt, oily films and some coatings reduce how well water sheets and drains down the fins, so droplets form and get stripped off. Inspect fins on both faces.</p>
<p><strong>Fix:</strong> clean the coil with a suitable degreasing coil cleaner and rinse well. Avoid leaving detergent residue, which can promote foaming and carryover.</p>

<h2>Symptom: carryover from one area of the coil</h2>
<h3>Cause: uneven velocity profile</h3>
<p><strong>Check:</strong> take a velocity traverse across the coil face with an anemometer, or use a smoke pencil to see air paths. Typical culprits are a fan inlet close to the coil in a draw-through unit, an elbow or mixing box that throws air toward one side, or a partially blocked filter bank directing air through clean areas.</p>
<p><strong>Fix:</strong> install or adjust air blenders, baffles or perforated plates to even the profile; replace blocked filters; check that dampers in a mixing box are not creating a jet. Where a fan array is very close to the coil, consult the manufacturer.</p>
<h3>Cause: damaged fins</h3>
<p><strong>Check:</strong> flattened or folded fins concentrate airflow through the remaining open area, raising local velocity.</p>
<p><strong>Fix:</strong> comb fins straight; if damage is extensive, plan coil replacement.</p>

<h2>Symptom: water lands just beyond the drain pan</h2>
<h3>Cause: pan too short downstream</h3>
<p><strong>Check:</strong> measure the pan extension beyond the coil's leaving face. Water that leaves the coil is carried some distance before falling. If wetting is concentrated just past the pan edge, the pan is too short for the operating velocity.</p>
<p><strong>Fix:</strong> extend the pan or add a moisture eliminator downstream of the coil, discharging into the pan. In stacked coils, check that intermediate pans collect water from the upper coil.</p>
<h3>Cause: casing gap or bypass around the coil</h3>
<p><strong>Check:</strong> look for open blank-off panels or gaps between coil frame and casing. High-velocity air through a gap picks up water from the coil edge.</p>
<p><strong>Fix:</strong> close the gaps with blank-offs sealed to the casing.</p>

<h2>Symptom: carryover only at certain times</h2>
<ul>
<li><strong>Only at start-up after a shutdown:</strong> water accumulated on the coil and in the pan is picked up when the fan starts at full speed. A slower ramp on the VFD helps.</li>
<li><strong>Only at full airflow in VAV units:</strong> the coil is near its face velocity limit at peak; consider capping maximum airflow.</li>
<li><strong>Only in dehumidification mode with reduced coil temperature:</strong> more condensate per square foot of coil; check that airflow is not simultaneously raised by the sequence.</li>
</ul>

<h2>Cleaning up after carryover</h2>
<p>Water downstream of the coil causes harm beyond the wet spot itself. Once the cause is fixed:</p>
<ul>
<li>Replace any filters that were wetted; wet filters can grow mould and may collapse.</li>
<li>Dry and inspect duct insulation and liners; replace insulation that stayed wet.</li>
<li>Clean and disinfect the drain pan and the downstream section floor as in <a href="<?= url('guides/drain-pan-cleaning-biofilm') ?>">how to clean drain pans</a>.</li>
<li>Check fans and motors downstream for water exposure and corrosion.</li>
</ul>
<p class="warn">Do not leave the unit running with wet filters or liners on the assumption they will dry. Persistent moisture in the airstream is a common route to microbial growth.</p>
<?php guide_end([
    ['What causes water to blow off a cooling coil?', 'Air moving too fast across the wet coil strips condensate from the fins. Common reasons are airflow above design, uneven velocity concentrating air through part of the coil, fouled or damaged fins, and drain pans too short to catch the water.'],
    ['What face velocity causes coil carryover?', 'It depends on fin type, spacing and coil design, but many cooling coils are selected at or below about 500 fpm to avoid carryover. Check the coil manufacturer\'s limit for the specific coil.'],
    ['How do I stop water carryover from a cooling coil?', 'Restore design airflow, even out the velocity profile across the coil, clean and straighten fins, close gaps around the coil, and if needed extend the drain pan or add a moisture eliminator downstream.'],
]);
