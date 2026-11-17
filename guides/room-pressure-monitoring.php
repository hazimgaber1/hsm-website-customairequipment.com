<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('room-pressure-monitoring'); ?>
<p class="lede">A room pressure monitor for a hospital isolation room, protective environment room or OR should measure differential pressure across the room boundary with a resolution of about 0.001 in. w.c. (0.25 Pa), display it at the door, alarm locally and at the building automation system after a short delay, and be checked against a reference instrument on a regular schedule.</p>

<h2>Step 1: Identify rooms that need monitoring</h2>
<p>Guidelines and standards require permanently installed monitoring for some rooms and recommend it for others. Typical scope:</p>
<ul>
<li>Airborne infection isolation rooms (AIIR): permanent monitoring with local alarm is generally required.</li>
<li>Protective environment rooms (PE): permanent monitoring generally required.</li>
<li>Combination AIIR/PE rooms with anterooms: monitoring of each relationship in the cascade.</li>
<li>Operating rooms: commonly monitored, and required by some owners and jurisdictions.</li>
<li>Compounding pharmacy rooms under USP 797/800: continuous monitoring with recorded values.</li>
<li>Sterile processing, bronchoscopy, and other negative or positive rooms: as required by the governing documents or owner.</li>
</ul>
<p>Confirm the list with the FGI Guidelines edition or CSA Z317.2 requirements applied to the project and with infection prevention.</p>

<h2>Step 2: Choose the sensing method</h2>
<table>
<thead><tr><th>Method</th><th>How it works</th><th>Strengths</th><th>Limitations</th></tr></thead>
<tbody>
<tr><td>Differential pressure transducer</td><td>Measures pressure difference between room and reference through tubing</td><td>Direct reading in in. w.c. or Pa; familiar to inspectors</td><td>Very small signals; sensitive to tubing leaks and zero drift</td></tr>
<tr><td>Thermal flow sensor through the wall</td><td>Measures velocity of air passing through a small calibrated opening, converted to pressure</td><td>Very sensitive at low differentials; shows direction clearly</td><td>Needs a wall penetration; clogging and calibration needs</td></tr>
<tr><td>Visual indicators (ball or vane)</td><td>Mechanical indicator shows direction of flow</td><td>No power needed; good backup</td><td>No alarm, no magnitude reading</td></tr>
<tr><td>Airflow tracking (offset monitoring)</td><td>Monitors supply and exhaust airflows and their difference</td><td>Useful control signal</td><td>Does not prove room pressure; doors and leaks change the result</td></tr>
</tbody>
</table>
<p>For most critical rooms, use a differential pressure or thermal sensor as the primary monitor. Airflow tracking is a control strategy, not proof of pressure. Visual indicators are useful for daily staff checks.</p>

<h2>Step 3: Specify range, resolution and accuracy</h2>
<ul>
<li>Range: typically ±0.05 in. w.c. (±12.5 Pa) or ±0.10 in. w.c. for rooms with larger differentials.</li>
<li>Resolution: 0.001 in. w.c. (0.25 Pa) so small changes are visible.</li>
<li>Accuracy: a small fraction of the minimum required differential. If the requirement is 0.01 in. w.c. (2.5 Pa), a monitor that is accurate only to ±0.005 in. w.c. is too coarse to prove compliance.</li>
<li>Bidirectional measurement, so a reversed relationship reads as negative rather than zero.</li>
<li>Automatic zero correction or a stable sensor suited to very low ranges.</li>
</ul>

<h2>Step 4: Locate the sensor and reference</h2>
<ol>
<li>Measure across the boundary that matters: room to corridor, or room to anteroom and anteroom to corridor in a cascade.</li>
<li>Locate pickup ports away from supply diffusers, return grilles and door sweeps, where air velocity creates false readings.</li>
<li>Locate the reference port in the adjacent space at a similar height, not in the ceiling plenum, unless the plenum truly represents the adjacent space.</li>
<li>Keep tubing runs short, sealed and protected from kinks; for thermal sensors, keep the wall opening clear.</li>
<li>Avoid locating sensors where outdoor wind or stack effect influences one side more than the other.</li>
</ol>

<h2>Step 5: Locate the display and alarms</h2>
<ul>
<li>Mount the display at the room entrance in the corridor, where staff check it before entering. Some designs add a second display inside the anteroom.</li>
<li>Show the measured value, the room's mode (isolation, normal, PE) and alarm status clearly.</li>
<li>Provide an audible and visual alarm locally and an alarm at the nurse station or BAS front end.</li>
<li>Provide a mute button that silences the local alarm temporarily without clearing it at the BAS.</li>
</ul>

<h2>Step 6: Set alarm logic</h2>
<ul>
<li>Set the alarm threshold at or slightly better than the minimum required differential.</li>
<li>Use a time delay to ride through normal door openings, commonly tens of seconds, set with infection prevention.</li>
<li>Add a door switch input so the monitor can distinguish an open-door condition from a system failure.</li>
<li>Generate a separate alarm for sensor failure.</li>
<li>Log values at a regular interval and retain them for the period the owner requires.</li>
</ul>
<p class="warn">Room mode switches (isolation versus normal) are a known source of errors. Restrict mode changes to authorized staff and display the mode prominently.</p>

<h2>Step 7: Integrate with the BAS</h2>
<p>Connect monitors to the BAS through BACnet, analog outputs or alarm contacts. The BAS should trend room pressure, door status and associated supply and exhaust airflows together, so that troubleshooting can see what changed. Treat the monitor as an independent check: it should not be the only input to the airflow controls, so that a sensor failure does not also defeat control. When pressure is lost, the diagnostic sequence is covered in <a href="<?= url('guides/room-pressure-loss-troubleshooting') ?>">troubleshooting loss of room pressurization</a>.</p>

<h2>Step 8: Commission and verify periodically</h2>
<ol>
<li>At startup, compare each monitor with a calibrated reference micromanometer.</li>
<li>Perform a smoke test at the door to confirm direction.</li>
<li>Test the alarm by changing airflow or opening the door beyond the delay.</li>
<li>Repeat verification at the interval set by owner policy and the governing guideline, often daily visual checks by staff and periodic instrument checks by facilities.</li>
<li>Record results for accreditation surveys.</li>
</ol>
<p>Rooms covered by this guide are described in <a href="<?= url('guides/airborne-infection-isolation-rooms') ?>">airborne infection isolation room air handling</a> and <a href="<?= url('guides/protective-environment-rooms') ?>">protective environment room air handling</a>.</p>
<?php guide_end([
    ['What accuracy does a hospital room pressure monitor need?', 'Accuracy should be a small fraction of the minimum required differential. For a 0.01 in. w.c. requirement, choose a monitor with resolution near 0.001 in. w.c. and accuracy well better than the requirement itself.'],
    ['Where should the room pressure display be mounted?', 'At the room entrance in the corridor, where staff can check it before entering, with an additional display in the anteroom where one exists.'],
    ['Is airflow offset monitoring enough to prove room pressure?', 'No. Supply and exhaust airflow difference is a control strategy, but doors, leaks and adjacent conditions change the actual pressure. A differential pressure or thermal sensor across the boundary is needed to prove the relationship.'],
    ['Why use a time delay on room pressure alarms?', 'Opening a door briefly collapses the pressure differential. A short delay avoids nuisance alarms during normal entry while still alarming on sustained loss of pressure.'],
]);
