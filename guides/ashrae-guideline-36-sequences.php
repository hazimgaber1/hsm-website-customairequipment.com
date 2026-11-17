<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ashrae-guideline-36-sequences'); ?>
<p class="lede">ASHRAE Guideline 36, High-Performance Sequences of Operation for HVAC Systems, is a library of standardized, tested control sequences for air handlers, terminal units and (in later editions) plants. For an AHU it defines how supply fan speed, supply air temperature, outdoor air, economizer, return or relief fans, freeze protection and fault detection should work, using requests from zones to drive resets.</p>

<h2>Why the guideline exists</h2>
<p>Traditional sequences are written fresh for each project, often copied from older jobs and interpreted differently by each controls contractor. The result is inconsistent performance and sequences that are hard to commission. Guideline 36 replaces that with sequences developed by a committee, simulated and field-tested, and written precisely enough to be programmed the same way by anyone. The guideline was first published in 2018 and has been revised since; reference the edition current for your project.</p>
<p>Related efforts include work on a machine-readable control description language so that sequences can be verified and translated into controller code, and some controls vendors now offer pre-programmed Guideline 36 libraries.</p>

<h2>How the guideline is organized</h2>
<p>The document separates general requirements from equipment-specific sequences:</p>
<ul>
<li><strong>General requirements and definitions</strong>: terms such as requests, importance multipliers, zone groups, and the trim-and-respond (T&amp;R) logic used throughout.</li>
<li><strong>Generic sequences</strong>: time-based suppression of alarms, alarm levels, and other functions reused across systems.</li>
<li><strong>Zone and terminal unit sequences</strong>: VAV cooling-only, VAV with reheat, parallel and series fan-powered boxes, dual-duct boxes, and similar.</li>
<li><strong>Air handler sequences</strong>: multiple-zone VAV AHUs and single-zone VAV AHUs, plus others such as dedicated outdoor air units depending on edition.</li>
<li><strong>Plant sequences</strong> for chilled water and hot water systems, in later editions.</li>
<li><strong>Fault detection and diagnostics</strong> rules for AHUs.</li>
</ul>
<p>Each sequence comes with a list of required points, setpoints and parameters, many with recommended default values, and notes on what the design engineer must specify.</p>

<h2>Requests and trim-and-respond</h2>
<p>The core idea is that zones tell the AHU what they need. Each zone generates <em>requests</em> when it is struggling: a cooling request when it is warm with its damper wide open, a pressure request when its damper is nearly fully open but airflow is short, and so on. Requests can be weighted by an importance multiplier so that critical zones count more, and individual zones can be excluded if they are known rogue zones.</p>
<p>The AHU then uses trim-and-respond logic to reset setpoints:</p>
<ul>
<li>At a fixed interval, if requests are fewer than a set number of ignored requests, the setpoint is <strong>trimmed</strong> toward the energy-saving direction by a small step.</li>
<li>If there are more requests than ignored, the setpoint is <strong>responded</strong> in the opposite direction by a step proportional to the excess requests, capped at a maximum change.</li>
</ul>
<p>The result is that supply static pressure and supply temperature drift slowly toward the least energy-intensive values that keep the most demanding zones satisfied. Project steps for applying the logic are in <a href="<?= url('guides/duct-static-pressure-reset') ?>">duct static pressure reset</a> and <a href="<?= url('guides/supply-air-temperature-reset') ?>">supply air temperature reset</a>.</p>

<h2>Key AHU sequences in the guideline</h2>
<h3>Operating modes</h3>
<p>Zones are grouped, and each zone group is assigned a mode: occupied, cool-down, setup, warm-up, setback, freeze protection setback and unoccupied. The AHU's behaviour follows the zone group mode, including whether outdoor air dampers open.</p>
<h3>Supply fan control</h3>
<p>Supply fan speed is modulated to maintain duct static pressure setpoint, which is reset by T&amp;R using zone pressure requests.</p>
<h3>Supply air temperature control</h3>
<p>SAT setpoint is reset between minimum and maximum cooling setpoints according to outdoor temperature and zone cooling requests. Heating coil, economizer dampers and cooling coil are sequenced in a single control loop with distinct output ranges, avoiding simultaneous heating and cooling.</p>
<h3>Minimum outdoor air</h3>
<p>The guideline provides alternative configurations, such as a separate minimum outdoor air damper with differential pressure control, or a single common damper with airflow measurement. Outdoor air setpoints are calculated from zone ventilation requirements according to ASHRAE 62.1 or a state energy code method, and adjusted for occupancy where sensors exist. The control problem is described in <a href="<?= url('guides/minimum-outdoor-air-control-vav') ?>">maintaining minimum outdoor air in VAV systems</a>.</p>
<h3>Economizer</h3>
<p>Economizer high-limit logic follows the energy code options. Economizer damper modulation is part of the SAT loop, and the return damper is interlocked so outdoor air is never below minimum.</p>
<h3>Return and relief</h3>
<p>Options include relief dampers controlled by building static pressure, relief fans, or return fans controlled by direct building pressure or by airflow tracking, each with its own sequence.</p>
<h3>Freeze protection</h3>
<p>Staged responses to low supply temperature, from increasing heating to closing outdoor air to stopping the fan and alarming, with manual reset at the final stage.</p>
<h3>Alarms and AFDD</h3>
<p>A set of fault conditions compares measured values with expected values in each operating state to flag problems such as leaking valves, failed sensors or economizers not working. See <a href="<?= url('guides/fault-detection-diagnostics-afdd') ?>">automated fault detection and diagnostics</a>.</p>

<h2>What the designer still has to decide</h2>
<p>Adopting Guideline 36 does not remove engineering. The design team must:</p>
<ul>
<li>Select which sequences and options apply to each system.</li>
<li>Provide the hardware the sequence assumes, such as airflow measurement, specific sensor locations or separate minimum outdoor air dampers.</li>
<li>Fill in project-specific values: design airflows, ventilation rates, setpoint limits, request thresholds where defaults are not suitable.</li>
<li>Coordinate any functions not covered, such as humidification, energy recovery, smoke control or special process requirements.</li>
</ul>
<p class="note">Referencing "Guideline 36" in a specification without saying which sections, options and edition apply leaves the controls contractor to guess. List them explicitly.</p>

<h2>Benefits and limitations</h2>
<table>
<thead><tr><th>Benefit</th><th>Limitation</th></tr></thead>
<tbody>
<tr><td>Consistent, tested logic</td><td>Assumes certain hardware that existing systems may lack</td></tr>
<tr><td>Energy savings from resets and reduced simultaneous heating and cooling</td><td>Some functions (humidity, energy recovery, special processes) need added sequences</td></tr>
<tr><td>Built-in fault detection</td><td>Requires good sensors and calibration to avoid false alarms</td></tr>
<tr><td>Easier commissioning with defined points and parameters</td><td>Controls contractors need familiarity; not all platforms implement it identically</td></tr>
</tbody>
</table>
<?php guide_end([
    ['What is ASHRAE Guideline 36?', 'It is a set of standardized, high-performance sequences of operation for HVAC systems, including air handlers, VAV terminals and plants. It defines control logic, points and default parameters precisely so that sequences can be implemented consistently.'],
    ['What is trim and respond?', 'Trim and respond is a reset method in which a setpoint is nudged in the energy-saving direction at regular intervals unless zones send requests, in which case it is moved back in proportion to the number of requests. It is used for duct static and supply temperature resets.'],
    ['Can Guideline 36 be used on existing buildings?', 'Yes, but the existing system may lack required hardware such as airflow measurement, separate minimum outdoor air dampers or reliable zone damper position feedback. Check what the selected sequences need and upgrade where necessary.'],
]);
