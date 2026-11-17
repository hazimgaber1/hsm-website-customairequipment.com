<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('maintenance-labor-estimate'); ?>
<p class="lede">Estimate annual air handler maintenance labour by counting the components that need attention, multiplying each by a task time and an annual frequency, adding fixed per-visit time for access, lockout and documentation, and applying a factor for site conditions. A typical 20,000 cfm custom unit with a fan array, two coils and two filter banks works out at roughly 60 to 80 technician hours a year in the example below.</p>

<h2>The method</h2>
<p>Labour is the sum of task hours plus overhead for each visit:</p>
<p class="formula">Annual hours = Σ (component count × task time × visits per year) + (visits per year × per-visit overhead)
Adjusted hours = annual hours × site factor</p>
<p>Use your own maintenance history for task times wherever it exists; the values below are realistic planning figures, not industry standards. The task list and frequencies come from your maintenance program; a typical program is laid out in the <a href="<?= url('guides/ahu-preventive-maintenance-schedule') ?>">AHU preventive maintenance schedule</a>.</p>

<h2>Step 1: Count the components</h2>
<p>Walk the unit with the submittal and list everything that has its own maintenance task. Counting by component, rather than estimating per unit, is what makes this method scale correctly from a small unit to a large one.</p>
<ul>
<li>Fans: count each fan of a fan array separately.</li>
<li>Motors and drives: count VFDs or EC controllers.</li>
<li>Belt drives, if any.</li>
<li>Regreasable bearings.</li>
<li>Filter banks, and filters per bank.</li>
<li>Coils and drain pans.</li>
<li>Dampers with actuators.</li>
<li>Humidifiers, energy recovery devices, UV lamps.</li>
<li>Critical sensors to verify, safeties to test.</li>
</ul>

<h2>Step 2: Assign task times and frequencies</h2>
<h3>Worked example</h3>
<p>The unit: 20,000 cfm (9,440 L/s), fan array of four direct-drive plenum fans with EC motors, prefilter and final filter banks of sixteen filters each, one hot water coil, one chilled water coil with drain pan, three dampers with actuators, no humidifier. Monthly, quarterly and annual visits per the schedule.</p>
<table>
<thead><tr><th>Task</th><th>Count</th><th>Hours each</th><th>Times per year</th><th>Annual hours</th></tr></thead>
<tbody>
<tr><td>Monthly walk-through, gauges, alarms</td><td>1</td><td>0.5</td><td>12</td><td>6.0</td></tr>
<tr><td>Prefilter change (16 filters)</td><td>1 bank</td><td>1.5</td><td>4</td><td>6.0</td></tr>
<tr><td>Final filter change (16 filters)</td><td>1 bank</td><td>2.0</td><td>1</td><td>2.0</td></tr>
<tr><td>Fan inspection: wheel, inlet, mounting</td><td>4 fans</td><td>0.5</td><td>4</td><td>8.0</td></tr>
<tr><td>Vibration readings</td><td>4 fans</td><td>0.25</td><td>4</td><td>4.0</td></tr>
<tr><td>EC controller check and cleaning</td><td>4</td><td>0.25</td><td>1</td><td>1.0</td></tr>
<tr><td>Damper and actuator inspection</td><td>3</td><td>0.33</td><td>4</td><td>4.0</td></tr>
<tr><td>Drain pan and trap check, cooling season</td><td>1</td><td>0.5</td><td>6</td><td>3.0</td></tr>
<tr><td>Drain pan cleaning</td><td>1</td><td>2.0</td><td>2</td><td>4.0</td></tr>
<tr><td>Coil inspection</td><td>2</td><td>0.5</td><td>4</td><td>4.0</td></tr>
<tr><td>Coil cleaning</td><td>2</td><td>4.0</td><td>1</td><td>8.0</td></tr>
<tr><td>Sensor verification</td><td>8 sensors</td><td>0.25</td><td>1</td><td>2.0</td></tr>
<tr><td>Safety tests (freezestat, high static, smoke)</td><td>3</td><td>0.5</td><td>1</td><td>1.5</td></tr>
<tr><td>Electrical terminal checks</td><td>1</td><td>2.0</td><td>1</td><td>2.0</td></tr>
<tr><td>Casing, doors, isolators annual inspection</td><td>1</td><td>2.0</td><td>1</td><td>2.0</td></tr>
<tr><td><strong>Task subtotal</strong></td><td></td><td></td><td></td><td><strong>57.5</strong></td></tr>
</tbody>
</table>

<h2>Step 3: Add per-visit overhead</h2>
<p>Every visit carries time that is not a task: getting to the unit, lockout and restoration, permits, setting up tools, and writing the work order. For a unit on a roof or in a hard-to-reach plant room, this can rival the task time.</p>
<p class="formula">Overhead = visits per year × hours per visit
= (12 monthly visits, of which 4 coincide with quarterly and 1 with annual) × 0.5 h = 12 × 0.5 = 6.0 h</p>
<p>Some tasks fall on the same visit, so count visits, not tasks. Here there are 12 visits a year, with overhead of 0.5 h each.</p>

<h2>Step 4: Apply a site factor</h2>
<p>Adjust for conditions that make the same task take longer:</p>
<table>
<thead><tr><th>Condition</th><th>Typical factor</th></tr></thead>
<tbody>
<tr><td>Indoor plant room, good access</td><td>1.0</td></tr>
<tr><td>Rooftop, weather exposure, fall protection setup</td><td>1.1 to 1.25</td></tr>
<tr><td>Tight access, poor lighting, panels to remove</td><td>1.2 to 1.4</td></tr>
<tr><td>Healthcare or cleanroom with infection control protocols</td><td>1.2 to 1.5</td></tr>
<tr><td>Dusty industrial environment requiring more frequent cleaning</td><td>Adjust frequencies rather than factor</td></tr>
</tbody>
</table>
<p>For this example, an indoor unit with good access, factor 1.0:</p>
<p class="formula">Annual hours = (57.5 + 6.0) × 1.0 = 63.5 technician hours</p>
<p>If the same unit sat on a roof (factor 1.15), it would be 73 hours. A similar unit with a belt-driven housed fan would trade the four EC fan tasks for belt tensioning, sheave alignment and bearing lubrication, which typically adds hours rather than removing them.</p>

<h2>Where estimates go wrong</h2>
<ul>
<li><strong>Using filter counts per unit rather than per bank:</strong> a unit with prefilters, finals and HEPA filters has three change-out tasks, each with its own frequency.</li>
<li><strong>Ignoring access:</strong> a filter bank that needs a ladder and two technicians takes twice the labour of one at floor level with a side-access door.</li>
<li><strong>Underestimating coil cleaning:</strong> deep coils, stacked coils and coils without access sections on both faces take much longer than a single shallow coil.</li>
<li><strong>Forgetting documentation time:</strong> recording readings is part of the task. Leaving it out of the estimate tends to mean it gets left out of the work too.</li>
<li><strong>Not checking against history:</strong> after the first year, compare estimated hours with actual hours booked to the unit and correct the task times.</li>
</ul>
<p>Use the same method for every unit on a site so totals are comparable. A spreadsheet with one row per task and columns for count, time and frequency is enough; the value is in the component count, not the tool.</p>

<h2>Using the estimate</h2>
<ul>
<li><strong>Staffing:</strong> sum all units and divide by productive hours per technician per year, after leave, training and reactive work.</li>
<li><strong>Budgeting:</strong> multiply by loaded labour rate; add materials separately.</li>
<li><strong>Design decisions:</strong> compare maintenance labour for alternatives at the design stage, such as direct-drive versus belt-drive fans, or side-access versus front-loading filters.</li>
<li><strong>Reactive work:</strong> add an allowance for breakdowns based on site history; this method covers planned work only.</li>
</ul>
<p class="note">Loading these tasks into a maintenance management system with component-level assets makes the estimate self-correcting, because actual hours get recorded against each task. Asset structure is covered in <a href="<?= url('guides/cmms-asset-tagging') ?>">setting up AHUs in a CMMS</a>.</p>
<?php guide_end([
    ['How many hours a year does it take to maintain an air handler?', 'It depends on size, components and access. Counting tasks by component, a 20,000 cfm unit with a four-fan array, two coils and two filter banks typically needs roughly 60 to 80 technician hours a year of planned maintenance.'],
    ['Why estimate maintenance by component instead of per unit?', 'Component counts scale with unit complexity. A fan array with eight fans, or a unit with a humidifier and energy recovery wheel, needs far more labour than a simple unit of the same airflow, and a per-unit figure hides that.'],
    ['Do direct-drive fans reduce maintenance labour?', 'Usually yes. They remove belt tensioning, sheave alignment and belt replacement, and EC or direct-drive motors may have sealed bearings. More fans in an array add inspection time, so count both effects.'],
]);
