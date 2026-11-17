<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-wall-pressure-control'); ?>
<p class="lede">With containment in place, the most direct way to match fan wall airflow to what the servers draw is to hold a small, steady pressure difference across the containment boundary. Use sensitive low-range transmitters at several points, control fan speed on a filtered or selected value of those readings, keep the loop slow and stable, and give it safe fallbacks when sensors or fans fail.</p>

<h2>Why pressure control works</h2>
<p>Servers draw air with their own fans, and that demand changes with load and inlet temperature. If the fan wall supplies exactly what the servers draw, pressure on the cold side of the containment is equal to the hot side. If it supplies more, the cold side rises slightly and the surplus leaks through gaps as bypass. If it supplies less, the cold side falls and the servers draw hot air back through the same gaps.</p>
<p>Holding a small positive differential from cold side to hot side therefore keeps a slight surplus that prevents recirculation, while limiting bypass. The control follows IT demand automatically without needing to know server airflow. It complements, rather than replaces, supply air temperature control on the coils. General fan array staging logic is a separate topic in <a href="<?= url('guides/fan-array-control-sequences') ?>">fan array control sequences</a>.</p>

<h2>Step-by-step setup</h2>
<ol>
<li><strong>Confirm containment integrity.</strong> Pressure control only works when containment is reasonably tight. Install blanking panels, seal rack gaps and close end doors first. With large leaks, the differential stays near zero no matter what the fans do.</li>
<li><strong>Select transmitters.</strong> Differentials are very small, commonly in the range of about 0.005 to 0.02 in. w.g. (roughly 1 to 5 Pa). Choose transmitters with a low full-scale range, good accuracy at the low end, low drift and automatic zeroing if available.</li>
<li><strong>Locate sensing points.</strong> Place several sensors along each contained aisle, for example near each end and in the middle, with high ports in the cold aisle (or the room, for hot aisle containment) and low ports in the hot aisle or return plenum. Keep ports away from fan discharge jets, doors and perforated tiles, which create local velocity pressure.</li>
<li><strong>Choose a control value.</strong> Options are the average of all sensors, the lowest sensor, or the average with a minimum override. Using the lowest is the most conservative against recirculation but responds to the worst sensor, including a faulty one. A common approach is to control on the average while alarming and raising the setpoint if any sensor falls below a limit.</li>
<li><strong>Filter the signal.</strong> Apply a short time-averaging filter, a few seconds to tens of seconds, to remove turbulence noise. Too much filtering makes the loop sluggish when load changes.</li>
<li><strong>Set the setpoint.</strong> Start at a modest positive value, then adjust during commissioning: raise it if any rack inlet shows recirculation, lower it while monitoring inlet temperatures to cut bypass.</li>
<li><strong>Tune the loop.</strong> Use proportional-integral control with slow integral action. Fan walls move a large mass of air, and the pressure signal responds quickly but noisily. Aim for stable fan speed with small adjustments rather than tight tracking. Tuning methods are discussed in <a href="<?= url('guides/pid-loop-tuning-ahu') ?>">PID loop tuning for AHUs</a>.</li>
<li><strong>Set speed limits.</strong> Define a minimum fan speed that keeps airflow above what is needed for coil control and humidity, and a maximum based on design airflow and noise. Ramp rate limits prevent sudden changes during mode transitions.</li>
<li><strong>Share load across fan walls.</strong> When several fan walls serve the same hall, run them all at the same speed command from a common controller, rather than letting each chase its own sensors. Independent loops on a shared space tend to fight.</li>
<li><strong>Define failure responses</strong> (see below) and test each one during commissioning.</li>
</ol>

<h2>Handling failures and disturbances</h2>
<table>
<thead><tr><th>Event</th><th>Recommended response</th></tr></thead>
<tbody>
<tr><td>One pressure sensor fails or reads out of range</td><td>Exclude it from the control value and alarm</td></tr>
<tr><td>All pressure sensors fail</td><td>Fall back to a fixed fan speed based on recent average, or to inlet temperature control</td></tr>
<tr><td>Containment door opened</td><td>Hold fan speed briefly (time delay) rather than ramping up to fill the opening</td></tr>
<tr><td>A fan fails in the array</td><td>Remaining fans increase speed through the normal loop; confirm the loop responds fast enough</td></tr>
<tr><td>A fan wall section is shut down</td><td>Remaining sections pick up through the common speed command</td></tr>
<tr><td>Power transfer or restart</td><td>Restart to a preset speed, then release to pressure control after a stabilization period</td></tr>
</tbody>
</table>
<p class="note">Keep inlet temperature monitoring at the rack face as an independent check. Pressure control can look stable while a localized leak lets hot air reach a few servers.</p>

<h2>Coordinating with temperature control</h2>
<p>Fan speed controls pressure; coil valves or economizer dampers control supply air temperature. Keep the two loops separate. If fans and coils both respond to temperature, they interact and oscillate. A cascade where supply temperature setpoint resets slowly based on the warmest rack inlets is common, with fan speed staying under pressure control.</p>
<p>In hot aisle containment designs, the controlled differential is between the room and the hot aisle or return plenum. In cold aisle designs, it is between the cold aisle and the room. The containment types are compared in <a href="<?= url('guides/hot-aisle-vs-cold-aisle-containment') ?>">hot aisle vs cold aisle containment</a>.</p>

<h2>Commissioning checklist</h2>
<ul>
<li>Transmitters zeroed and verified against a reference instrument at the installed location</li>
<li>Tubing runs checked for kinks and leaks; ports protected from dust</li>
<li>Setpoint established by measuring inlet temperatures at representative racks</li>
<li>Step tests: change IT load (load banks or server activity) and confirm stable response</li>
<li>Fan failure, sensor failure and door-open tests performed</li>
<li>Sequence documented with setpoints, filters, limits and fallbacks; placement guidance for future sensors per <a href="<?= url('guides/sensor-selection-and-placement') ?>">sensor selection and placement</a></li>
</ul>
<?php guide_end([
    ['What differential pressure should data center containment be controlled to?', 'Typically a small positive value, often in the range of about 0.005 to 0.02 in. w.g. (around 1 to 5 Pa), from cold side to hot side. The final setpoint is adjusted during commissioning using rack inlet temperatures.'],
    ['Should fan walls control on the lowest or average pressure sensor?', 'Controlling on the average with an alarm and override when any sensor drops below a limit is common. Controlling on the lowest is more conservative but makes the loop sensitive to a single faulty sensor.'],
    ['What happens if the containment pressure sensors fail?', 'The sequence should exclude failed sensors and, if all fail, revert to a fixed fan speed or to rack inlet temperature control, with an alarm. This fallback should be tested during commissioning.'],
]);
