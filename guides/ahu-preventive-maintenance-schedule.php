<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-preventive-maintenance-schedule'); ?>
<p class="lede">A practical air handler maintenance program groups tasks by frequency: quick monthly walk-through checks of filters, drains, belts and alarms; quarterly inspections of bearings, dampers, coils and controls; and an annual shutdown for deep cleaning, electrical checks and calibration. Adjust intervals to run hours, dust load and manufacturer requirements.</p>

<h2>How to use and adapt this schedule</h2>
<p>The frequencies below suit a typical commercial air handler running most days of the year in a clean urban environment. Shorten intervals for units running 24/7, units in dusty industrial or agricultural settings, hospital units, and outdoor units in harsh climates. Lengthen them only when trend data and inspection history show it is safe. The manufacturer's O&amp;M manual takes precedence for lubrication types and quantities and any warranty-related tasks.</p>
<p>ASHRAE Standard 180 sets out minimum inspection and maintenance requirements for HVAC systems in commercial buildings and is a good reference for building a program; its scope and how it is applied are covered in <a href="<?= url('guides/ashrae-standard-180') ?>">ASHRAE Standard 180</a>. Every task here should be performed under proper lockout where it involves opening the unit or touching rotating equipment.</p>

<h2>Monthly checklist</h2>
<h3>General</h3>
<ul>
<li>Walk around the unit: listen for unusual noise, look for water on the floor, check for air leaks at doors.</li>
<li>Review BAS alarms and trends for the unit: supply temperature, static pressure, fan speed, filter differential.</li>
<li>Check access doors latch and gaskets are intact.</li>
</ul>
<h3>Filters</h3>
<ul>
<li>Record filter pressure drop for each bank and compare with the change-out value.</li>
<li>Look for bypass gaps, collapsed media and wet filters.</li>
<li>Replace when the change point is reached, following <a href="<?= url('guides/filter-replacement-procedure') ?>">how to replace AHU filters</a>.</li>
</ul>
<h3>Drives and fans</h3>
<ul>
<li>Check belt condition and tension on belt-driven fans; look for dust from belt wear.</li>
<li>Listen for bearing noise; feel housings for unusual heat where safe or use an infrared thermometer.</li>
<li>Check VFD displays for fault history and confirm cooling fans on drives are running.</li>
</ul>
<h3>Drains and coils</h3>
<ul>
<li>Check cooling coil drain pans for standing water, debris or slime during cooling season.</li>
<li>Confirm condensate traps are holding a seal and draining freely.</li>
<li>Look for water carryover downstream of cooling coils.</li>
</ul>

<h2>Quarterly checklist</h2>
<ul>
<li>Lubricate fan and motor bearings that are not sealed-for-life, at the interval and quantity in the manual, and record the grease used.</li>
<li>Check sheave alignment and set screws on belt drives; re-tension belts.</li>
<li>Check fan wheel for dirt buildup, cracks and balance weights still in place.</li>
<li>Check vibration at marked points on bearings and compare with baseline.</li>
<li>Inspect dampers: blades move freely, linkages tight, actuators stroke fully, seals intact.</li>
<li>Inspect coil faces for dirt and fin damage; clean if pressure drop has risen.</li>
<li>Inspect humidifier components and drains per the humidifier manual.</li>
<li>Verify key sensor readings against a reference instrument: supply, mixed and outdoor air temperature, and duct static pressure.</li>
<li>Check that the freezestat and high static safeties are in place and undamaged.</li>
<li>Inspect energy recovery wheels for belt wear, seal condition and media cleanliness.</li>
<li>Check outdoor air intake screens and louvres for debris, leaves and nesting.</li>
</ul>

<h2>Annual checklist</h2>
<h3>Mechanical</h3>
<ul>
<li>Shut down and clean the unit interior: floors, drain pans, plenums and fan sections.</li>
<li>Clean coils with an appropriate method if not done in the year.</li>
<li>Replace belts on a planned basis if condition and hours warrant.</li>
<li>Check fan wheel to inlet cone clearance and wheel position on the shaft.</li>
<li>Inspect spring isolators: deflection, corrosion, clear of debris; check flexible connectors for tears.</li>
<li>Inspect casing panels, floors and roof for corrosion, insulation damage and leaks.</li>
<li>Check door hinges and latches; lubricate as needed.</li>
</ul>
<h3>Electrical and controls</h3>
<ul>
<li>Check terminal tightness in control panels, VFDs and motor terminal boxes, with power isolated.</li>
<li>Clean VFD heat sinks and replace enclosure filters.</li>
<li>Measure motor current and voltage at design operating condition and compare with baseline.</li>
<li>Test the freezestat, high static limits and smoke detector shutdown.</li>
<li>Calibrate or verify all critical sensors, including airflow measuring stations.</li>
<li>Stroke all control valves and verify fail positions.</li>
<li>Back up controller programs and drive parameters.</li>
</ul>
<h3>Seasonal items</h3>
<ul>
<li>Before heating season: freeze protection readiness, preheat operation, glycol concentration.</li>
<li>Before cooling season: drain pan and trap cleaning, coil cleaning, economizer function.</li>
</ul>
<p class="note">Seasonal changeover tasks deserve their own list because missing one can damage a coil. They are expanded in the <a href="<?= url('guides/seasonal-changeover-checklist') ?>">seasonal changeover checklist</a>.</p>

<h2>Adjusting for unit type</h2>
<p>Direct-drive fan arrays remove belt tasks but add fans to inspect; each fan in an array gets its own wheel, inlet and vibration check, and backdraft dampers or blank-off plates need a look at each quarterly visit. Units with energy recovery wheels add wheel belts, seals and purge settings. Outdoor units add roof, seam and intake hood inspection, especially after storms. Steam humidifiers and UV lamps bring their own manufacturer-defined consumables. Write each of these into the unit's task list rather than relying on a generic template.</p>

<h2>Recording and reviewing the work</h2>
<p>Each task should produce a record: date, technician, readings taken and any follow-up work raised. Readings matter more than ticks. A filter pressure drop or vibration figure written down every quarter becomes a trend, and trends let you move from fixed intervals toward condition-based maintenance. Review the program once a year: tasks that never find anything can be stretched; tasks that keep finding problems should be done more often or have their root cause addressed. Estimating the labour required to deliver this schedule is covered in <a href="<?= url('guides/maintenance-labor-estimate') ?>">estimating annual AHU maintenance labour hours</a>.</p>
<?php guide_end([
    ['How often should air handler filters be checked?', 'Check filter pressure drop at least monthly and replace filters when they reach the planned change point, rather than on a fixed calendar date. Dusty environments and 24/7 operation may need more frequent checks.'],
    ['What should an annual AHU maintenance shutdown include?', 'Typical annual tasks are interior cleaning, coil cleaning, belt replacement as needed, isolator and connector inspection, electrical terminal checks, VFD cleaning, safety device testing, sensor calibration and controller backups.'],
    ['Does ASHRAE have a standard for HVAC maintenance?', 'Yes. ASHRAE Standard 180 sets minimum inspection and maintenance requirements for HVAC systems in commercial buildings and is commonly used as a basis for maintenance programs.'],
]);
