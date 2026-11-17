<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('essential-power-hospital-ahu-checklist'); ?>
<p class="lede">Hospital AHUs serving critical spaces must keep running, or restart quickly, when utility power fails. Use this checklist to confirm which loads belong on the essential electrical system under NFPA 99 and NFPA 110 in the US or CSA Z32 in Canada, and that the AHU, its drives and its controls behave correctly through transfer and restart.</p>

<h2>Know the framework</h2>
<p>In the US, NFPA 99, Health Care Facilities Code, defines the essential electrical system (EES) and its branches: life safety, critical and equipment. NFPA 110 covers emergency and standby power systems, including generator performance levels and transfer times. In Canada, CSA Z32, Electrical safety and essential electrical systems in health care facilities, defines the essential electrical system with its own branch terminology, and CSA C282 covers emergency electrical power supply for buildings. Editions and local adoption vary; confirm with the electrical engineer of record.</p>
<p class="note">This checklist covers electrical continuity of AHUs. Mechanical redundancy, such as spare fans in an array, is a separate subject covered in <a href="<?= url('guides/hospital-ahu-redundancy-requirements') ?>">redundancy requirements for hospital AHUs</a>.</p>

<h2>Load identification</h2>
<ul>
<li>☐ List every AHU, exhaust fan and return fan in the facility with the spaces each serves.</li>
<li>☐ Identify fans that serve spaces whose ventilation must be maintained on the EES, which commonly include operating and delivery rooms, airborne infection isolation rooms, protective environment rooms, ICUs, emergency department areas, and certain laboratories and pharmacy spaces.</li>
<li>☐ Identify exhaust fans for isolation rooms and hazardous drug compounding, which may need power continuity for containment.</li>
<li>☐ Identify supply, return and exhaust fans that participate in smoke control, which belong to life safety requirements.</li>
<li>☐ Identify heating equipment needed to protect patients and prevent freezing, including preheat pumps and controls.</li>
<li>☐ Identify humidifiers and steam generators serving ORs where humidity limits must be held.</li>
<li>☐ Record which branch each load is assigned to per the governing code (equipment branch in NFPA 99 for most HVAC loads; delayed vital or conditional circuits under CSA Z32, as applicable).</li>
</ul>

<h2>Generator and transfer considerations</h2>
<ul>
<li>☐ Generator capacity accounts for AHU motor starting, not just running load.</li>
<li>☐ Transfer timing: equipment branch HVAC loads are often connected with a delay after life safety and critical branches; confirm the sequence and delay with the electrical design.</li>
<li>☐ Load shedding priorities defined if generator capacity is limited.</li>
<li>☐ Fuel supply duration meets the code requirement and owner expectation.</li>
<li>☐ Monthly and annual generator tests under load include the HVAC equipment so that restart behaviour is exercised.</li>
</ul>

<h2>AHU electrical design</h2>
<ul>
<li>☐ Each critical AHU fed from the appropriate EES panel, with normal and emergency feeders kept separate per code.</li>
<li>☐ Fan arrays: decide whether all fans or a subset are on emergency power, and confirm the subset can maintain minimum airflow and pressure relationships.</li>
<li>☐ Disconnects and overcurrent protection coordinated with the EES selective coordination requirements.</li>
<li>☐ Short-circuit current rating of the AHU panel meets available fault current on both normal and generator sources.</li>
<li>☐ Single-point versus multiple-point power considered: separating critical fan circuits from convenience loads like lights and receptacles inside the unit.</li>
</ul>

<h2>VFDs and EC motors</h2>
<ul>
<li>☐ Drives configured for automatic restart after power loss, including flying start (catching a spinning fan) so they do not trip on restart.</li>
<li>☐ Drive ride-through settings appropriate for transfer switch timing.</li>
<li>☐ Harmonic distortion on the generator evaluated; generators are more sensitive to harmonics than the utility. Background is in <a href="<?= url('guides/vfd-harmonics-ieee-519') ?>">VFD harmonics and IEEE 519</a>.</li>
<li>☐ EC motor controllers verified to restart automatically and resume their last speed command.</li>
<li>☐ Bypass or redundant drives, if provided, also on emergency power.</li>
</ul>

<h2>Controls and dampers</h2>
<ul>
<li>☐ AHU controllers, sensors and the BAS network segment for critical units on UPS or on the EES with battery backup, so control is maintained through transfer.</li>
<li>☐ Controllers retain setpoints and resume sequences after power loss without manual reset.</li>
<li>☐ Damper actuators' fail positions selected so that a power interruption does not close outdoor air or isolate supply to critical rooms.</li>
<li>☐ Spring-return actuators on outdoor air and freeze protection dampers checked against winter power loss, so the unit does not draw unheated air when restarting.</li>
<li>☐ Room pressure monitors and alarms on emergency power.</li>
<li>☐ Airflow valves and terminal controllers serving ORs and isolation rooms on emergency power.</li>
</ul>

<h2>Restart sequence</h2>
<ul>
<li>☐ Staggered restart of AHUs to limit generator inrush.</li>
<li>☐ Exhaust and supply fans for negative rooms restart together, or exhaust first, so containment is restored without reversing pressure.</li>
<li>☐ Supply and return for positive rooms restart so pressure relationships recover quickly.</li>
<li>☐ Freeze protection logic checked for restart with cold coils and outdoor air.</li>
<li>☐ Smoke control fans take priority under fire alarm conditions over normal restart logic.</li>
</ul>
<p class="warn">Test the full restart sequence during commissioning with a real transfer, not only with controller simulation. Fans that trip on restart are a common finding in hospital generator tests.</p>

<h2>Documentation and testing</h2>
<ul>
<li>☐ EES load list with each AHU and fan, its branch and its panel.</li>
<li>☐ Restart sequence written into the sequence of operation.</li>
<li>☐ Functional test of loss of normal power, transfer and restart for each critical AHU, with recorded room pressures before and after.</li>
<li>☐ VFD parameter sheets saved with restart settings, so replacement drives can be configured the same way.</li>
<li>☐ Operations staff trained on what to expect during monthly generator tests.</li>
</ul>
<p>Drive startup parameters in general are covered in <a href="<?= url('guides/vfd-startup-parameter-checklist') ?>">the VFD startup parameter checklist</a>.</p>
<?php guide_end([
    ['Which hospital AHUs must be on emergency power?', 'Typically those serving operating and delivery rooms, isolation and protective environment rooms, intensive care, emergency department areas and other spaces where ventilation must be maintained, along with smoke control fans. The governing code and owner standards define the final list.'],
    ['Which NFPA 99 branch serves HVAC equipment?', 'Most HVAC loads are on the equipment branch of the essential electrical system, often with delayed automatic connection after transfer. Confirm assignments with the electrical engineer of record.'],
    ['What is the Canadian equivalent of NFPA 99 for essential power?', 'CSA Z32 covers electrical safety and essential electrical systems in health care facilities, with CSA C282 covering emergency electrical power supply. Branch names and requirements differ from NFPA 99.'],
    ['Why do VFDs need special settings for emergency power?', 'Drives must restart automatically after transfer, catch a fan that is still spinning, and ride through brief interruptions. Without those settings, fans may trip and stay off after a power failure.'],
]);
