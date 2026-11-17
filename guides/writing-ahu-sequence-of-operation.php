<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('writing-ahu-sequence-of-operation'); ?>
<p class="lede">A good sequence of operation tells the controls programmer exactly what to do and tells the commissioning agent exactly what to test. Write it as a set of numbered, unambiguous statements organized by mode and by component, with every setpoint given a value, every mode given entry and exit conditions, and every failure given a response and an alarm.</p>

<h2>Step 1: Gather what the sequence depends on</h2>
<ol>
<li>The unit schematic showing every section, fan, coil, damper, filter, humidifier and energy recovery device.</li>
<li>The equipment schedule: airflows, outdoor air minimums, design temperatures, fan quantities.</li>
<li>The points list, or a draft of it; see <a href="<?= url('guides/controls-points-list-checklist') ?>">controls points list checklist</a>.</li>
<li>Owner requirements: occupancy schedules, setpoint limits, alarm routing, preferred controls standards.</li>
<li>Code requirements that affect control: economizer, ventilation, setback, smoke control and energy recovery.</li>
<li>Any standard sequences you will adopt or adapt, such as a published guideline library.</li>
</ol>

<h2>Step 2: Set up a consistent structure</h2>
<p>A structure that works for most custom AHUs:</p>
<ol>
<li><strong>General:</strong> system description, references, definitions of terms used.</li>
<li><strong>Operating modes:</strong> list of modes and how the unit enters and leaves each.</li>
<li><strong>Start-up and shutdown:</strong> the order in which dampers, fans and coils are enabled.</li>
<li><strong>Component sequences:</strong> supply fan, return or relief fan, outdoor air and economizer, heating, cooling, humidification, energy recovery, filters.</li>
<li><strong>Safeties and interlocks:</strong> hardwired and software, with reset method.</li>
<li><strong>Alarms:</strong> condition, delay, priority, reset.</li>
<li><strong>Failure responses:</strong> what happens when sensors, fans, actuators or communications fail.</li>
<li><strong>Setpoint and parameter table:</strong> every value referenced in the text.</li>
</ol>

<h2>Step 3: Write each requirement as a testable statement</h2>
<p>Each statement should say what triggers an action, what the action is and any limits. A commissioning agent should be able to turn each statement into a pass or fail test. Compare:</p>
<table>
<thead><tr><th>Vague</th><th>Testable</th></tr></thead>
<tbody>
<tr><td>The economizer shall be used when appropriate.</td><td>When the unit is in occupied mode and the economizer high limit is not tripped, the outdoor air damper shall modulate between minimum and 100 percent as the first stage of cooling in the supply air temperature loop.</td></tr>
<tr><td>Provide freeze protection.</td><td>If supply air temperature falls below the freeze stage 1 setpoint (adj.) for 5 minutes (adj.), limit outdoor air to minimum and generate a level 3 alarm.</td></tr>
<tr><td>The fan shall maintain static pressure.</td><td>The supply fan speed shall be modulated by a PI loop to maintain duct static pressure at setpoint. The setpoint shall be reset as described in section X between 0.1 in. w.c. (adj.) and the maximum determined by TAB.</td></tr>
</tbody>
</table>
<p>Guidelines for wording:</p>
<ul>
<li>Use "shall" for requirements and avoid "should" or "may" for control actions.</li>
<li>Name points exactly as they appear in the points list.</li>
<li>Mark every value as adjustable where it should be ("adj.") and list it in the setpoint table.</li>
<li>Give time delays explicitly; "momentarily" is not a value.</li>
<li>State units for every value.</li>
<li>Avoid describing how to program; describe what the system must do.</li>
</ul>

<h2>Step 4: Define every mode with entry and exit</h2>
<p>For each mode (occupied, unoccupied, warm-up, cool-down, setback, setup, night purge, smoke control, freeze protection, maintenance), state:</p>
<ol>
<li>What starts it: schedule, zone request, alarm, operator command.</li>
<li>What each component does in that mode.</li>
<li>What ends it, and which mode follows.</li>
<li>Priority, when two modes could apply at the same time.</li>
</ol>
<p class="note">A simple mode table (rows for components, columns for modes) placed at the start of the sequence makes conflicts obvious before programming starts.</p>

<h2>Step 5: Write the start-up and shutdown order</h2>
<p>Write the order explicitly, for example:</p>
<ol>
<li>Open outdoor, return and relief dampers to their start-up positions; wait for end switches or a time delay.</li>
<li>Start the return or relief fan, if applicable; prove airflow.</li>
<li>Start the supply fan at minimum speed and ramp; prove airflow.</li>
<li>Enable heating and cooling loops after a stabilization delay.</li>
<li>Enable resets after a further delay.</li>
</ol>
<p>Shutdown reverses the order and returns dampers to their fail-safe positions. Fans must never start against closed dampers that could overpressurize the casing or duct.</p>

<h2>Step 6: Cover failures and alarms</h2>
<ul>
<li><strong>Sensor failure:</strong> for each critical sensor, what value or mode is used instead, and the alarm raised.</li>
<li><strong>Fan failure:</strong> response for single fans and for fan arrays, including the minimum number of fans required to keep running.</li>
<li><strong>Actuator failure:</strong> what happens if a damper or valve does not reach its commanded position.</li>
<li><strong>Communication loss</strong> between the unit controller and the BAS: what the unit continues to do locally.</li>
<li><strong>Power restoration:</strong> automatic restart, staggered starts, and any required manual reset.</li>
</ul>
<p>For each alarm, give the condition, delay, priority level and whether it latches. Alarm floods are as bad as no alarms, so avoid alarming on conditions operators cannot act on.</p>

<h2>Step 7: Review and close the loop</h2>
<ol>
<li>Review the draft with the controls contractor, the AHU manufacturer (if factory controls are supplied) and the commissioning provider.</li>
<li>Confirm every point referenced exists in the points list, and every point in the list is used.</li>
<li>Confirm hardware assumptions (airflow stations, sensor types, damper arrangements) match the unit and drawings.</li>
<li>Update the sequence to match the as-programmed system before turnover.</li>
</ol>
<p>Published standard sequences can supply much of the content for common systems; their structure is described in <a href="<?= url('guides/ashrae-guideline-36-sequences') ?>">ASHRAE Guideline 36</a>. Testing the result is covered in <a href="<?= url('guides/functional-performance-testing') ?>">functional performance testing</a>.</p>
<?php guide_end([
    ['What should a sequence of operation include?', 'It should include a system description, operating modes with entry and exit conditions, start-up and shutdown order, sequences for each component, safeties and interlocks, alarms, failure responses and a table of all setpoints and parameters.'],
    ['How do I make a sequence of operation testable?', 'Write each requirement as a statement with a trigger, an action and limits, using exact point names, explicit values with units and specific time delays. Each statement should translate directly into a pass or fail test.'],
    ['Who should review an AHU sequence of operation?', 'The design engineer, the controls contractor, the AHU manufacturer if it supplies factory controls, and the commissioning provider should all review it before programming begins.'],
]);
