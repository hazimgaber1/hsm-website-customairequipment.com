<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('continuous-operation-hospital-ahu-maintenance'); ?>
<p class="lede">To maintain a hospital AHU without shutting it down, plan each task around what the unit can lose while still holding minimum airflow and pressure: isolate one fan in an array at a time, change filters in a sequence that never opens a bypass, and use isolation dampers and valves to service coils and humidifiers section by section. Coordinate every task with the clinical areas served.</p>

<h2>Step 1: Know what the unit can tolerate</h2>
<p>Before planning work, document for each AHU:</p>
<ol>
<li>Spaces served and their critical requirements: pressure relationships, minimum ACH, humidity limits.</li>
<li>Minimum airflow the unit must deliver to keep those requirements, and for how long a reduced condition is acceptable.</li>
<li>Redundancy built in: number of fans and spare capacity, split coils, dual humidifiers, any cross-connection to another AHU.</li>
<li>Isolation devices available: fan backdraft or isolation dampers, coil valves, filter section access, section isolation dampers.</li>
<li>Electrical arrangement: individual disconnects per fan and drive.</li>
</ol>
<p>If the unit has no redundancy, work that interrupts airflow will require temporary ventilation or a scheduled closure of the served spaces. Design expectations for redundancy are covered in <a href="<?= url('guides/hospital-ahu-redundancy-requirements') ?>">redundancy requirements for hospital AHUs</a>.</p>

<h2>Step 2: Coordinate with clinical and infection prevention teams</h2>
<ul>
<li>Agree on a work window when the affected areas have the lowest risk, such as after the last scheduled surgical case.</li>
<li>Notify the departments served of the work, its duration and what alarms may occur.</li>
<li>For work that opens the airstream downstream of the final filter, follow the facility's infection control risk assessment process.</li>
<li>Agree on stop-work criteria: what room pressure or humidity reading ends the work and restores the unit.</li>
</ul>

<h2>Step 3: Service a fan in an array</h2>
<ol>
<li>Confirm remaining fans can carry the load: check current fan speeds and the design capacity with one fan out.</li>
<li>Set the BAS to the "fan out of service" mode, so remaining fans ramp up and the failed fan's alarms are suppressed with a record.</li>
<li>Stop the fan at its drive and lock out its individual disconnect. Lockout procedures are covered in <a href="<?= url('guides/lockout-tagout-ahu-service') ?>">lockout/tagout for AHU service</a>.</li>
<li>Confirm the isolation damper or blank-off has closed, so air from the running fans does not recirculate backward through the idle one.</li>
<li>Monitor supply airflow and room pressures in critical spaces for several minutes before starting the repair.</li>
<li>Perform the work: bearing replacement, motor swap or wheel inspection.</li>
<li>Restart the fan, verify rotation and vibration, and return the BAS to normal mode.</li>
</ol>
<p class="warn">Working inside a fan section while adjacent fans run means high air velocity and differential pressure across doors. Open access doors only where the design and the manufacturer's instructions allow it, and secure doors against slamming.</p>

<h2>Step 4: Change filters under operation</h2>
<p>Filter changes while running are routine in hospitals but must not let unfiltered air bypass the bank.</p>
<ol>
<li>Change one bank at a time, starting with the first bank when both are due.</li>
<li>For side-access housings, slide out one filter at a time and immediately slide in the replacement; never leave an open slot.</li>
<li>For front-access frames, replace filters cell by cell, working from the downstream side where the design allows, and keep loose debris from falling into the downstream section.</li>
<li>Bag used filters inside the access section before removing them through the corridor or mechanical room.</li>
<li>Inspect seals and latches on every frame before closing.</li>
<li>Record the pressure drop before and after the change.</li>
</ol>
<p>The final MERV 14 bank, downstream of the fan, is under positive pressure in a blow-through unit; opening its access door releases air. Plan for a short pressure dip at the rooms and keep the door open for the minimum time. General filter procedures are in <a href="<?= url('guides/filter-replacement-procedure') ?>">the filter replacement procedure</a>.</p>

<h2>Step 5: Service coils and drain pans</h2>
<ul>
<li>With split coils, close the valves on one half, let it warm, and clean or inspect it while the other half carries the load at higher water flow.</li>
<li>Schedule coil cleaning in seasons with lower load so one half can meet demand.</li>
<li>Clean drain pans with the unit running only where access is from outside the airstream or through doors designed for operation; use cleaning agents approved by infection prevention.</li>
<li>Check trap seals and drain flow while running, since negative pressure in draw-through sections can hold water in the pan if the trap is wrong.</li>
</ul>

<h2>Step 6: Service humidifiers</h2>
<ul>
<li>With two humidifiers or dispersion assemblies, isolate one and let the other hold the setpoint.</li>
<li>With a single humidifier, schedule work in the season when humidification is not needed.</li>
<li>Close the steam supply and allow dispersion tubes to cool before opening the section.</li>
<li>Inspect tube nozzles, drain lines and traps; clean the generator vessel per the manufacturer.</li>
</ul>

<h2>Step 7: Use temporary measures when redundancy is not enough</h2>
<p>For tasks that exceed what the unit can tolerate, such as replacing a cooling coil or casing repairs:</p>
<ul>
<li>Cross-feed from an adjacent AHU through normally closed connections where the design provides them.</li>
<li>Connect a temporary AHU to the supply and return ductwork.</li>
<li>Schedule the work during a planned closure of the served spaces.</li>
</ul>

<h2>Step 8: Document and review</h2>
<ul>
<li>Record each task with the minimum airflow and pressure observed during the work.</li>
<li>Note any alarms and how long conditions were outside normal.</li>
<li>Feed lessons back into the maintenance plan, and into design standards for the next project.</li>
</ul>
<p>Routine task frequencies belong in the general maintenance schedule rather than in this procedure.</p>
<?php guide_end([
    ['Can you change hospital AHU filters while the unit runs?', 'Yes, if done one bank at a time and one filter at a time so there is never an open slot for air to bypass. Side-access housings make this easier.'],
    ['How do you replace a fan motor in a hospital fan array without shutdown?', 'Confirm the remaining fans can carry the load, put the BAS in a fan-out-of-service mode, lock out the individual fan disconnect, confirm its isolation damper has closed, then carry out the repair while monitoring room pressures.'],
    ['What if a hospital AHU has no redundancy?', 'Work that interrupts airflow needs temporary ventilation, cross-feeding from another AHU or a planned closure of the served spaces. Consider adding redundancy at the next renovation.'],
    ['Who needs to be involved in hospital AHU maintenance planning?', 'Facilities staff, the clinical departments served and the infection prevention team. They agree on work windows, notifications and conditions that would stop the work.'],
]);
