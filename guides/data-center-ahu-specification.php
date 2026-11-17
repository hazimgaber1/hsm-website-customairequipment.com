<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('data-center-ahu-specification'); ?>
<p class="lede">A white space air handler or fan wall specification should state performance at the server-facing conditions, require fan-level redundancy with proof, define how fans are driven and controlled, and set a factory test regime with acceptance criteria. Those four areas decide whether the unit can hold rack inlet conditions through failures for its whole life.</p>

<h2>Scope and structure</h2>
<p>Most projects place these units in a custom air handling section based on MasterFormat 23 73 00, with data center requirements added. The general section structure is described in <a href="<?= url('guides/writing-ahu-specification-23-73-00') ?>">writing an AHU specification under 23 73 00</a>. This guide covers fan walls and central white space units. Fully integrated factory modules with their own electrical distribution and skid packaging are covered separately in <a href="<?= url('guides/prefabricated-modular-cooling-specification') ?>">specifying prefabricated modular cooling units</a>.</p>

<h2>Performance</h2>
<p>Define the operating envelope in terms the data hall will experience. Sample language, with bracketed project values:</p>
<ol>
<li>Each unit shall deliver [__ cfm] of supply air at [__ in. w.g.] total static pressure, including coils at [wet] [dry] condition and filters at [mid-life] [final] pressure drop.</li>
<li>Sensible cooling capacity shall be not less than [__ kW] with return air at [__°F] and supply air at [__°F], with chilled water at [__°F] supply and [__°F] return [glycol concentration __%].</li>
<li>Units shall operate stably across an airflow range of [__%] to [100%] of design, with supply air temperature controlled within ±[1]°F of setpoint.</li>
<li>Total fan input power at design duty shall not exceed [__ kW], stated as a guaranteed value and verified by factory test.</li>
<li>Coil face velocity shall not exceed [__ fpm] at design airflow. Coil air pressure drop shall not exceed [__ in. w.g.].</li>
<li>Sound power levels at the discharge and casing radiated shall not exceed the scheduled octave band values.</li>
</ol>
<p class="note">Specify fan power at the actual duty point, not motor nameplate horsepower. A fan array can have generous nameplate capacity and still run efficiently; what matters is the measured input power at the operating point.</p>

<h2>Fan wall and redundancy</h2>
<ol start="7">
<li>Fan section shall be a fan array of [__] direct-drive plenum fans with [EC motors] [PM motors with individual VFDs] [induction motors with individual VFDs].</li>
<li>With any [one] [two] fan[s] out of service, the remaining fans shall deliver [100%] of design airflow at design static pressure, without exceeding [__ dBA] or motor nameplate current.</li>
<li>Each fan shall have a [backdraft damper] [automatic blank-off device] preventing reverse airflow through an inactive fan. Pressure drop of the device in the open position shall be included in the fan selection.</li>
<li>Each fan and motor assembly shall be removable from the unit without shutting down other fans and without removing adjacent fans.</li>
<li>Fans shall be selected with a fan energy index (FEI) of not less than [1.0] at the design duty point. See <a href="<?= url('guides/fan-energy-index-fei-selection') ?>">fan energy index selection</a>.</li>
<li>Each fan shall be dynamically balanced and the complete fan and motor assembly shall meet [the balance grade and vibration limits specified].</li>
</ol>
<p>Choosing between N+1 and N+2 is discussed in <a href="<?= url('guides/fan-array-redundancy-n1-vs-n2') ?>">fan array redundancy: N+1 vs N+2</a>.</p>

<h2>Electrical and drives</h2>
<ol start="13">
<li>Each fan shall be individually protected so that a fault on one fan does not trip others.</li>
<li>[Where dual power feeds are required:] Fans shall be divided between [two] power feeds such that loss of one feed leaves sufficient fans operating to deliver [__%] of design airflow.</li>
<li>Drives and EC controllers shall automatically restart after power interruption, with a staggered restart to limit inrush, and shall reach commanded speed within [__] seconds of power restoration.</li>
<li>Provide a factory-wired control panel listed to UL 508A [and CSA C22.2 No. 286] with a short-circuit current rating of not less than [__ kA].</li>
</ol>

<h2>Controls</h2>
<ol start="17">
<li>Provide a factory-mounted controller for each unit that executes the approved sequence independently of the building automation system and holds its last valid setpoints on loss of communication.</li>
<li>Fan speed shall be controlled to [containment differential pressure] [supply airflow] [server inlet temperature] as defined in the sequence of operation, with all fans in the unit running at a common speed.</li>
<li>On failure of a fan, the controller shall raise the speed of the remaining fans to maintain the controlled variable and shall alarm.</li>
<li>Provide airflow measurement of total unit airflow by fan inlet [piezometer rings] [airflow station] with accuracy of ±[5]% of reading.</li>
<li>Controller shall communicate via [BACnet/IP] [Modbus TCP], exposing each fan's speed, power, run status and alarms.</li>
<li>Provide filter differential pressure, entering and leaving air temperature, and [leaving dew point] sensors, each with stated accuracy.</li>
</ol>

<h2>Construction</h2>
<ol start="23">
<li>Casing shall be double-wall with thermally broken panels, and casing leakage shall not exceed [__% of design airflow] at [__ in. w.g.].</li>
<li>Drain pans shall be stainless steel, sloped in two directions.</li>
<li>Coils shall be removable through [side access] without disassembling the casing.</li>
<li>Access doors shall be provided at each fan, filter and coil section, with viewing windows and lights at fan sections.</li>
</ol>

<h2>Factory testing</h2>
<ol start="27">
<li>Each unit shall be run-tested at the factory with all fans operating under control of the unit controller.</li>
<li>Tests shall include: airflow and total fan input power at design duty; airflow with [one] [two] fan[s] disabled; vibration on each fan; casing leakage; control sequence functions including fan failure response, loss of communication and power restoration.</li>
<li>Submit the test procedure, with instrument accuracy and acceptance tolerances, [30] days before testing. Submit certified results with unit serial numbers.</li>
<li>Owner may witness testing with [__] days' notice.</li>
</ol>
<table>
<thead><tr><th>Often omitted</th><th>Consequence</th></tr></thead>
<tbody>
<tr><td>Airflow test with a fan disabled</td><td>Redundancy claim unproven until site testing</td></tr>
<tr><td>Restart time after power loss</td><td>Longer temperature excursion during generator transfer</td></tr>
<tr><td>Power feed split between fans</td><td>Single feed loss stops the whole wall</td></tr>
<tr><td>Fan power guarantee at duty</td><td>No way to hold supplier to efficiency</td></tr>
</tbody>
</table>
<p>Custom Air Equipment builds fan walls and white space air handlers and runs every unit in its factory, with witness testing available. If you would like a specification reviewed against what can be built and tested, <a href="<?= url('contact') ?>">contact an application engineer</a>.</p>
<?php guide_end([
    ['What redundancy should a data center fan wall have?', 'At least N+1 within each unit, proven by a factory test with one fan disabled. Many owners also split fans across two power feeds and require units themselves to be redundant at the hall level.'],
    ['Should data center AHU fan power be specified?', 'Yes. Specify a guaranteed maximum fan input power at the design duty point and verify it in the factory test. Nameplate horsepower does not indicate operating efficiency.'],
    ['How should fans in a data center AHU restart after a power loss?', 'Automatically, with a staggered restart to limit inrush, reaching commanded speed within a specified time. The restart time affects how much temperature rises during a generator transfer.'],
]);
