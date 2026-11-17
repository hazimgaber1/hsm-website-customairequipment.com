<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-array-control-sequences'); ?>
<p class="lede">Most fan arrays run all fans at one common speed command to hold a pressure or airflow setpoint, because identical fans running together share load evenly and stay on the efficient part of their curves. Staging fans off is reserved for very low airflow, and the sequence must detect a failed fan, close or block its opening, and raise the speed of the remaining fans to restore airflow.</p>

<h2>Common speed control</h2>
<p>The baseline sequence treats the array as one large fan:</p>
<ol>
<li>A single PID loop compares the controlled variable (duct static pressure, airflow, or plenum pressure) to its setpoint.</li>
<li>The loop output becomes a speed command sent to every running fan's VFD or EC motor controller.</li>
<li>All fans receive the same command, so they run at nearly the same speed and share the airflow equally.</li>
</ol>
<p>Running identical fans at identical speed is important. Parallel fans discharge into a common plenum at the same pressure. If one fan runs noticeably slower, it can be pushed toward the stall region of its curve, carry less flow, or even see reverse flow when stopped without a damper. Equal speed avoids that.</p>
<p>The command can be distributed by analog outputs, by a common network message to each EC motor, or by a master drive that relays speed to followers. With one VFD driving several motors, there is inherently one speed; the trade-offs of that arrangement are covered in <a href="<?= url('guides/single-vfd-vs-vfd-per-motor-fan-array') ?>">single VFD vs VFD per motor</a>.</p>

<h2>Staging fans off at low airflow</h2>
<p>At reduced flow, all fans slow together. Below a certain speed, efficiency of each fan and motor drops, and EC motors or VFDs may reach their minimum speed. Some sequences then shut off one or more fans so the remaining fans run faster, closer to their best efficiency point.</p>
<p>A typical staging logic:</p>
<ul>
<li><strong>Stage down</strong> when speed command has been below a lower threshold (for example 30 to 40 percent) for a set time. Turn off one fan, and immediately raise the command to the remaining fans to compensate, using a feed-forward calculation such as new speed = old speed × N ÷ (N − 1).</li>
<li><strong>Stage up</strong> when speed command has been above an upper threshold (for example 80 to 90 percent) for a set time. Start one fan and reduce the command to keep flow steady.</li>
<li>Separate the thresholds with enough hysteresis and delay that the array does not cycle fans.</li>
<li>Rotate which fan stages off, so run hours stay balanced.</li>
</ul>
<p>Whether staging saves energy depends on the selection. Fan laws say that at a fixed system curve, all fans slowing together reduces power by roughly the cube of speed. Staging off helps only if part-load efficiency losses of motors and drives at low speed outweigh the added pressure loss through the active fans' openings. Many arrays never stage off in normal operation, and some manufacturers prefer to keep all fans running down to minimum speed for acoustic and airflow uniformity reasons.</p>
<p class="note">A stopped fan in an array needs its opening blocked by a backdraft damper or blank-off, or air will recirculate backward through it. The hardware choice is explained in <a href="<?= url('guides/backdraft-dampers-vs-blank-off-plates') ?>">backdraft dampers vs blank-off plates</a>.</p>

<h2>Detecting a failed fan</h2>
<p>A fan array's main advantage is redundancy, but only if the controls notice a failure. Detection methods include:</p>
<table>
<thead><tr><th>Method</th><th>What it detects</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>VFD or EC motor fault status</td><td>Drive or motor electronic faults, overload, loss of phase</td><td>Fast and reliable for electrical failures; does not detect a slipping wheel</td></tr>
<tr><td>Speed feedback vs command</td><td>Fan not reaching commanded speed</td><td>Available from most EC motors and VFDs over network</td></tr>
<tr><td>Current or power vs expected</td><td>Broken coupling, loose wheel, blocked inlet</td><td>Needs expected power curve; good for mechanical faults</td></tr>
<tr><td>Individual fan airflow (piezometer)</td><td>Fan not delivering its share</td><td>Most direct, but adds a transmitter per fan</td></tr>
<tr><td>Backdraft damper position switch</td><td>Damper not opening or closing as commanded</td><td>Confirms isolation of a failed fan</td></tr>
</tbody>
</table>

<h2>Responding to a failure</h2>
<ol>
<li>Remove the failed fan from service: stop its drive and lock out restart attempts after a configurable number of retries.</li>
<li>Confirm its backdraft damper has closed, if fitted.</li>
<li>Let the common speed loop raise the speed of the remaining fans to restore the setpoint. A feed-forward speed increase helps avoid a pressure dip.</li>
<li>Generate an alarm identifying which fan failed and the remaining capacity.</li>
<li>If the remaining fans cannot reach setpoint at maximum speed, generate a capacity alarm and, if specified, reset downstream setpoints or notify the zones.</li>
<li>Rotate staging so the failed fan is not called when staging up.</li>
</ol>
<p>How many fans can fail before capacity is lost is a design question about redundancy, not controls; see <a href="<?= url('guides/fan-array-redundancy-n1-vs-n2') ?>">fan array redundancy</a>.</p>

<h2>Maximum speed limits and overspeed</h2>
<p>When one or more fans are out of service, remaining fans may need to run above their normal design speed to hold airflow. The sequence must not exceed the fan wheel's maximum safe speed, the motor's rated speed, or the drive's frequency limit. Program a hard maximum speed and confirm the motor and wheel are rated for it. The VFD or EC motor maximum should be set to the same value as the control limit, so a software error cannot overspeed the fan.</p>

<h2>Integration with other sequences</h2>
<ul>
<li><strong>Static pressure reset</strong> sets the setpoint for the common speed loop; staging thresholds should be based on speed command, not on static pressure.</li>
<li><strong>Return or relief fan arrays</strong> follow the same logic, with building pressure or airflow tracking as the controlled variable.</li>
<li><strong>Smoke control and life safety modes</strong> may require all fans on at fixed speed regardless of staging logic.</li>
<li><strong>Fan proof</strong> for the AHU safeties should be based on a minimum number of fans running, not on any single fan, so one failure does not shut down the unit.</li>
</ul>
<?php guide_end([
    ['Should all fans in a fan array run at the same speed?', 'Generally yes. Identical fans in a common plenum share load evenly and stay on the stable part of their curves at equal speed. Running one fan much slower than the others can push it toward stall.'],
    ['When should fans in an array be staged off?', 'Only when common speed has fallen low enough that motor and drive efficiency losses outweigh the benefit of keeping all fans running, and when the stopped fans can be blocked by backdraft dampers. Many arrays keep all fans running in normal operation.'],
    ['How does a fan array respond when one fan fails?', 'The controls stop and lock out the failed fan, confirm its damper closes, and let the common speed loop raise the speed of the remaining fans to restore airflow. An alarm identifies the failed fan.'],
]);
