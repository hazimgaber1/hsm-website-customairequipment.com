<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('classroom-comfort-complaints-troubleshooting'); ?>
<p class="lede">When several classrooms complain at once, or one complaint keeps coming back after the terminal unit has been checked, the cause is often upstream at the air handler. Work through the symptom, the likely AHU cause, what to check and how to fix it, and confirm with trend data before changing anything.</p>

<h2>Before you start</h2>
<p>Collect three things first: the complaint log with room numbers, dates and times; BAS trends for the AHU (supply temperature, static pressure, outdoor air damper, fan speed, coil valves) over the complaint period; and the design and balancing data. Patterns matter. Complaints on Monday mornings, on the coldest days or only in rooms at the end of a duct run point to different causes.</p>
<p class="note">This guide covers causes at the air handler. Tuning individual VAV boxes, fan coils or unit ventilators is a separate exercise.</p>

<h2>Symptom: classrooms too hot</h2>
<h3>Cause 1: Supply air too warm</h3>
<p><strong>Check:</strong> Trend supply air temperature against setpoint. If it rises during afternoons on hot days, check the chilled water or DX capacity, cooling valve position (pegged at 100%?) and coil leaving temperature. Look for a dirty coil, low chilled water flow, or a valve or actuator failure.</p>
<p><strong>Fix:</strong> Clean the coil, restore water flow, repair the valve. If supply air temperature reset is raising the setpoint too aggressively, adjust the reset limits or the zone request logic.</p>
<h3>Cause 2: Insufficient airflow</h3>
<p><strong>Check:</strong> Is the supply fan at maximum speed while duct static is below setpoint? Check filter pressure drop, fan belt (if belt-driven), fan rotation after any motor work and the static pressure sensor location.</p>
<p><strong>Fix:</strong> Change filters, retension or replace belts, correct rotation, relocate or recalibrate the sensor. The full diagnostic for low airflow is in <a href="<?= url('guides/fan-airflow-shortfall-troubleshooting') ?>">fan airflow shortfall troubleshooting</a>.</p>
<h3>Cause 3: Economizer bringing in warm air</h3>
<p><strong>Check:</strong> Outdoor air damper position on hot days. A stuck-open damper or a failed high-limit sensor allows warm, humid outdoor air into the mix.</p>
<p><strong>Fix:</strong> Repair the actuator or linkage, replace or recalibrate the outdoor air sensor, and verify the high-limit setting suits the climate.</p>

<h2>Symptom: classrooms too cold</h2>
<h3>Cause 1: Supply air too cold in heating season</h3>
<p><strong>Check:</strong> Discharge temperature during winter mornings. Look for a heating valve that does not open, a failed preheat coil pump, or an outdoor air damper opening wider than minimum during occupied heating.</p>
<p><strong>Fix:</strong> Restore heating valve or pump operation. Verify minimum outdoor air is correct and that the economizer is disabled when the unit is in heating.</p>
<h3>Cause 2: Morning warm-up too short</h3>
<p><strong>Check:</strong> Compare the start time of the AHU with the time rooms reach setpoint. On Mondays after a weekend setback, rooms may still be cold at first period.</p>
<p><strong>Fix:</strong> Extend warm-up, enable optimal start, or increase setback temperatures over weekends in the coldest months.</p>
<h3>Cause 3: Mixed air stratification</h3>
<p><strong>Check:</strong> Cold air from the outdoor air damper may not mix with return air, so part of the coil and fan see near-outdoor temperatures. Freezestat trips and cold streams downstream are clues.</p>
<p><strong>Fix:</strong> Adjust damper arrangement, add mixing baffles, or improve preheat control. See <a href="<?= url('guides/mixed-air-stratification-troubleshooting') ?>">mixed air stratification troubleshooting</a>.</p>

<h2>Symptom: classrooms stuffy</h2>
<h3>Cause 1: Outdoor air below design</h3>
<p><strong>Check:</strong> Outdoor airflow measuring station reading, or measured outdoor air fraction from temperatures (with care). Inspect outdoor air damper operation and minimum position. On VAV systems, check whether outdoor air drops when the supply fan slows.</p>
<p><strong>Fix:</strong> Reset minimum outdoor air control to maintain airflow rather than damper position. Clear blocked intakes, louvers or bird screens.</p>
<h3>Cause 2: Demand-controlled ventilation not responding</h3>
<p><strong>Check:</strong> CO₂ sensor readings against a portable reference. Failed or drifted sensors commonly read low, so outdoor air stays at minimum.</p>
<p><strong>Fix:</strong> Calibrate or replace sensors, and verify the DCV logic raises outdoor air on high readings. A field verification method is in <a href="<?= url('guides/classroom-co2-ventilation-verification') ?>">verifying classroom ventilation with CO₂</a>.</p>
<h3>Cause 3: Overall airflow low</h3>
<p><strong>Check:</strong> Even with the right outdoor air fraction, reduced total airflow means less outdoor air to each room. Check filters, coils and fan performance as for hot rooms.</p>
<p><strong>Fix:</strong> Restore airflow to design.</p>

<h2>Symptom: classrooms noisy</h2>
<h3>Cause 1: Fan running at high speed</h3>
<p><strong>Check:</strong> Fan speed trend. A fan that runs faster than design because of high static (dirty filters, closed dampers, static setpoint too high) produces more noise.</p>
<p><strong>Fix:</strong> Reduce system resistance, implement static pressure reset, and lower the static setpoint where boxes allow.</p>
<h3>Cause 2: Vibration or bearing noise</h3>
<p><strong>Check:</strong> Listen at the AHU for bearing or belt noise. Check isolator deflection; isolators that have bottomed out or were never released after shipping transmit vibration into the structure.</p>
<p><strong>Fix:</strong> Replace bearings or belts, adjust or release isolators, and check flexible connections.</p>
<h3>Cause 3: Rumble at a particular speed</h3>
<p><strong>Check:</strong> Whether noise appears at certain VFD speeds. A resonance between fan speed and structure or duct can be excited at particular frequencies.</p>
<p><strong>Fix:</strong> Program skip frequencies in the VFD, or address the structural resonance.</p>

<h2>Confirm and close out</h2>
<p>After a fix, monitor trends and complaints for a week of normal operation. Record the cause and fix in the maintenance system. Recurring complaints in the same rooms often mean the original design or balancing was off, which warrants a test and rebalance rather than more adjustments.</p>
<?php guide_end([
    ['Why are classrooms stuffy even when the AHU is running?', 'Common reasons are outdoor air dampers not opening to minimum, outdoor airflow falling as a VAV fan slows, failed CO2 sensors holding outdoor air at minimum, or overall airflow reduced by dirty filters.'],
    ['What causes cold classrooms on Monday mornings?', 'Often the morning warm-up period is too short after a weekend setback. Building mass is cold and the AHU needs more time; optimal start or a longer warm-up usually fixes it.'],
    ['Can an air handler cause classroom noise far from the mechanical room?', 'Yes. Fan noise travels down ducts, vibration travels through the structure, and resonances at certain VFD speeds can produce rumble in distant rooms. Check fan speed, isolators and skip frequencies.'],
]);
