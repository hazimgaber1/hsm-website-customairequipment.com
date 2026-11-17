<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('wet-duct-humidifier-troubleshooting'); ?>
<p class="lede">Wet ducts and dripping downstream of a humidifier almost always mean moisture is reaching a surface before it has been absorbed. The usual causes are air that is too cold or too slow-mixing for the load, a supply too close to saturation, a component inside the non-wetting distance, condensate spitting from the dispersion tubes, or controls letting the humidifier run when the airflow cannot take the moisture.</p>

<h2>First observations</h2>
<p>Before changing anything, collect facts with the humidifier running at its normal output:</p>
<ol>
<li>Note exactly where water appears: on the floor directly under the dispersion, on the first downstream component, on duct walls further downstream, or at diffusers.</li>
<li>Measure air dry-bulb and RH upstream of the humidifier and well downstream after full mixing.</li>
<li>Measure air velocity across the section at several points.</li>
<li>Note humidifier output (from its controller or steam valve position) and the time pattern: does wetting happen at startup, all the time, or only at certain conditions?</li>
<li>Look through an access door at the plume with a light. Visible plume length tells you the effective absorption distance.</li>
</ol>

<h2>Symptom: water on surfaces within a few feet downstream</h2>
<h3>Cause: component inside the non-wetting distance</h3>
<p><strong>Check:</strong> compare the distance from the dispersion to the wet component with the manufacturer's non-wetting distance for the actual conditions.</p>
<p><strong>Fix:</strong> move the component, move the humidifier, or replace the dispersion with a short-absorption manifold. The factors that set this distance are explained in <a href="<?= url('guides/humidifier-absorption-distance') ?>">humidifier absorption distance</a>.</p>
<h3>Cause: leaving RH too high</h3>
<p><strong>Check:</strong> calculate the RH just downstream if the full output mixes into the airflow. Values above about 80 to 85 percent make long plumes.</p>
<p><strong>Fix:</strong> raise the air temperature at the humidifier (for example by relocating it after the heating coil), reduce output at this point and split the load, or confirm the setpoint is not unreasonably high.</p>
<h3>Cause: velocity too high or uneven</h3>
<p><strong>Check:</strong> compare measured velocities with the selection. Look for high-velocity streams from a nearby fan discharge or a turn.</p>
<p><strong>Fix:</strong> add a diffuser or perforated plate upstream, relocate to a section with uniform velocity, or rebalance airflow.</p>

<h2>Symptom: water dripping directly under the dispersion</h2>
<h3>Cause: condensate in dispersion tubes</h3>
<p><strong>Check:</strong> look for water spitting from nozzles, especially at startup. Check whether tubes are insulated and whether the header drains properly.</p>
<p><strong>Fix:</strong> verify tube slope and header drain trap per the manufacturer. Add insulated tubes or jackets. Make sure the steam supply line has a separator or drip trap ahead of the valve.</p>
<h3>Cause: wet steam from the source</h3>
<p><strong>Check:</strong> on direct injection, inspect the separator and its trap. On generators, check for foaming or overfilling.</p>
<p><strong>Fix:</strong> repair or replace the separator trap. On generators, check water level controls, blowdown and water quality; foaming often points to softened water or concentrated dissolved solids.</p>
<h3>Cause: condensate drain blocked or backed up</h3>
<p><strong>Check:</strong> trace the humidifier drain and trap. A trap that is dry or blocked can push condensate out of the manifold.</p>
<p><strong>Fix:</strong> clear and re-prime; correct the drain piping as described in <a href="<?= url('guides/steam-humidifier-condensate-drains') ?>">how to pipe steam humidifier condensate and drains</a>.</p>

<h2>Symptom: wet ducts far downstream or at diffusers</h2>
<h3>Cause: supply air cooled below its dew point downstream</h3>
<p><strong>Check:</strong> measure the supply dew point and compare with duct surface temperatures in unconditioned spaces or near cold outdoor walls. Check for a downstream cooling coil or a duct passing through a cold attic.</p>
<p><strong>Fix:</strong> lower the humidity setpoint, insulate cold ducts, or relocate the duct. If a cooling coil runs downstream in winter, it should not; review the sequence.</p>
<h3>Cause: humidifier running with reduced airflow</h3>
<p><strong>Check:</strong> trend humidifier output against fan speed or airflow. VAV systems at low flow can be oversaturated by a humidifier that does not reduce output.</p>
<p><strong>Fix:</strong> interlock the humidifier with airflow proving, and limit output in proportion to airflow. Add a duct high-limit humidistat if missing.</p>

<h2>Symptom: wetting only at certain times</h2>
<ul>
<li><strong>At startup:</strong> often cold dispersion tubes or cold air before the heating coil warms up. Delay the humidifier enable until supply temperature is established.</li>
<li><strong>During setback recovery:</strong> large demand from a dry space drives full output into air that may be colder than normal. Ramp the setpoint rather than stepping it.</li>
<li><strong>On the coldest days:</strong> highest load meets coldest air. The design may be at its limit; check absorption at design conditions.</li>
<li><strong>Intermittently:</strong> a hunting control loop. Trend the humidity signal and output; see whether the high-limit is tripping and resetting.</li>
</ul>

<h2>Control checks for any wetting problem</h2>
<ol>
<li>Confirm a duct high-limit humidistat is installed beyond absorption distance, set around 80 to 90 percent RH, and that it actually stops the humidifier.</li>
<li>Confirm the humidifier is interlocked with fan status or airflow proving.</li>
<li>Check that the space humidity sensor reads correctly against a calibrated reference.</li>
<li>Review the space RH setpoint against the winter envelope limit.</li>
</ol>
<p class="warn">Wet filters, duct liner or sound attenuators must be dried or replaced after the cause is fixed. Wet porous materials in an air handler grow microbes quickly.</p>
<p>Water carried off cooling coils, which can look similar, is a separate problem covered in <a href="<?= url('guides/cooling-coil-water-carryover-troubleshooting') ?>">cooling coil water carryover troubleshooting</a>.</p>
<?php guide_end([
    ['Why is my duct wet after the humidifier?', 'Moisture is reaching surfaces before it is absorbed. Common causes are cold air, leaving RH near saturation, high or uneven velocity, a component too close downstream, condensate spitting from dispersion tubes or the humidifier running at low airflow.'],
    ['Why does my steam humidifier drip water from the dispersion tubes?', 'Steam condensing in uninsulated tubes, a blocked header drain, a failed separator trap or foaming in a generator can push liquid water out of the nozzles. Check tube slope, drains and steam quality.'],
    ['Where should a duct high-limit humidistat be placed?', 'Downstream of the humidifier beyond its absorption distance, typically several feet into the supply duct, set around 80 to 90 percent RH so it stops the humidifier before the duct wets.'],
]);
