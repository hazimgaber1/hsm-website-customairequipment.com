<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('constant-volume-to-vav-conversion'); ?>
<p class="lede">Converting a constant volume air handler to variable air volume means adding a variable-speed drive to the supply (and return) fan, replacing constant volume terminals or zone reheat with VAV boxes that modulate airflow to each zone, and reprogramming the controls so the fan follows duct static pressure while outdoor air stays at its required minimum.</p>

<h2>Step 1: Confirm the system can be converted</h2>
<ol>
<li><strong>Identify the system type.</strong> Single-zone CV, multizone, dual-duct, CV with terminal reheat and induction systems each convert differently. CV with terminal reheat is the most common and most straightforward candidate.</li>
<li><strong>Check the fan.</strong> Housed centrifugal fans with motors in good condition can usually be fitted with a VFD. Old motors may need replacement with inverter-duty motors. Forward-curved and airfoil fans both work at variable speed; inlet vanes or discharge dampers should be removed or locked open once a drive is installed.</li>
<li><strong>Review the zones.</strong> Each VAV zone needs a terminal box, a space sensor and a controller. Count the zones and check ceiling access for box installation.</li>
<li><strong>Check the coils.</strong> At reduced airflow, cooling coils run with lower face velocity and generally dehumidify well, but chilled water valves must control stably at lower loads. Freeze risk on preheat coils can rise at low airflow with high outdoor air fractions.</li>
<li><strong>Check the ductwork.</strong> VAV systems operate with a controlled static pressure in the supply main; the existing ductwork must be tight enough and pressure-rated for that static.</li>
</ol>

<h2>Step 2: Design the conversion</h2>
<ol start="6">
<li><strong>Calculate zone airflows.</strong> Determine maximum cooling airflow for each zone and the minimum airflow required for ventilation and heating. Minimums should be as low as ventilation and heating allow, since high minimums erode the savings.</li>
<li><strong>Size VAV boxes.</strong> Select boxes so the maximum flow sits in the upper portion of the box range and the minimum is controllable by the box's flow sensor.</li>
<li><strong>Size the drive.</strong> Match the VFD to the motor full-load amps and voltage. If the fan is replaced in the same project, use the new motor data.</li>
<li><strong>Plan return fan control.</strong> If there is a return fan, it needs its own drive and a control strategy such as airflow tracking or building pressure control so the building stays correctly pressurized at all supply flows.</li>
<li><strong>Plan outdoor air control.</strong> In a CV system, a fixed damper position gives a fixed outdoor airflow. In VAV, as supply flow drops, a fixed damper position delivers less outdoor air. Add an outdoor airflow measuring station or another verified method so minimum outdoor air is maintained at all supply flows. See <a href="<?= url('guides/minimum-outdoor-air-control-vav') ?>">minimum outdoor air control in VAV systems</a>.</li>
<li><strong>Locate the static pressure sensor</strong> in the supply main at a point that represents the system, commonly about two-thirds of the way down the longest run, or use multiple sensors with box-position feedback for reset.</li>
</ol>

<h2>Step 3: Install the hardware</h2>
<ol start="12">
<li>Install the VFD in a location with suitable clearance, ventilation and protection. Add a bypass if the fan is critical.</li>
<li>Replace motors that are not inverter-rated, and consider shaft grounding to prevent bearing damage from drive-induced currents.</li>
<li>Remove or lock out inlet vanes and discharge dampers on the fan.</li>
<li>Install VAV boxes, replacing constant volume boxes or adding new terminals in the existing duct branches. Provide reheat coils where zones need heating.</li>
<li>Install space temperature sensors and zone controllers, and network them to the building automation system.</li>
<li>Install the duct static pressure sensor, outdoor airflow station and any return or building pressure sensors.</li>
<li>Seal the ductwork where leakage was acceptable for CV but will waste fan energy at VAV static.</li>
</ol>

<h2>Step 4: Program the sequences</h2>
<ol start="19">
<li><strong>Supply fan:</strong> modulate speed to maintain duct static setpoint, with static pressure reset based on zone demand so the fan runs at the lowest static that satisfies the most-open box.</li>
<li><strong>Return fan:</strong> track supply airflow minus a fixed offset, or control to building static pressure.</li>
<li><strong>Outdoor air:</strong> modulate the minimum outdoor air damper to hold measured outdoor airflow at the ventilation setpoint.</li>
<li><strong>Supply air temperature:</strong> reset upward at low cooling demand to reduce reheat, within humidity limits.</li>
<li><strong>Zone boxes:</strong> modulate airflow between minimum and maximum in cooling; at minimum, enable reheat in heating.</li>
<li><strong>Safeties:</strong> high static limits on supply duct and low static limits on return, so dampers closing cannot damage ducts.</li>
</ol>
<p class="note">ASHRAE Guideline 36 provides high-performance sequences for VAV systems that can serve as a starting point; see <a href="<?= url('guides/ashrae-guideline-36-sequences') ?>">ASHRAE Guideline 36 sequences</a>.</p>

<h2>Step 5: Commission and verify</h2>
<ol start="25">
<li>Test-and-balance each VAV box at minimum and maximum flow.</li>
<li>Verify the fan reaches design airflow at full speed with all boxes at maximum.</li>
<li>Verify minimum outdoor airflow at low supply flow, not just at full flow.</li>
<li>Trend static pressure, fan speed, box positions and outdoor airflow for at least a week to confirm stable control and reset behaviour.</li>
<li>Confirm drive skip frequencies if vibration or noise appears at certain speeds.</li>
</ol>

<h2>Where the savings come from</h2>
<p>Fan power falls steeply as flow falls, following the fan laws in principle, although static pressure control means real savings are less than the pure cube relationship. Heating and reheat energy fall because less air is cooled and then reheated. Cooling energy falls with lower airflow at part load. Estimating those savings is covered in <a href="<?= url('guides/vfd-fan-energy-savings-calculation') ?>">VFD fan energy savings calculation</a>.</p>
<?php guide_end([
    ['Can any constant volume AHU be converted to VAV?', 'Most can, especially CV systems with terminal reheat. The fan needs a variable speed drive and suitable motor, each zone needs a VAV box and controls, and outdoor air must be actively controlled at reduced supply flow.'],
    ['Why does outdoor air need special control after a VAV conversion?', 'With a fixed damper position, outdoor airflow drops as supply airflow drops. An airflow measuring station or other verified method is needed to hold minimum ventilation at all supply flows.'],
    ['Do existing fans need replacement for VAV conversion?', 'Not always. Many existing fans can run on a drive, but motors not rated for inverter duty may need replacing and inlet vanes or discharge dampers should be removed or locked open.'],
]);
