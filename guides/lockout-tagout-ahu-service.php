<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('lockout-tagout-ahu-service'); ?>
<p class="lede">Before entering an air handler or reaching into any fan, coil or humidifier section, identify every energy source, including electrical power to fans, VFDs and heaters, steam and hot water, compressed air, stored energy in drive capacitors, and fan wheels that can spin from airflow through the unit. Isolate each one, lock and tag it, verify zero energy, and physically restrain fans that can windmill.</p>

<h2>Why air handlers need specific lockout planning</h2>
<p>Lockout/tagout (LOTO) procedures are required by occupational safety regulations in both countries: in the US under OSHA's control of hazardous energy standard (29 CFR 1910.147), and in Canada under provincial occupational health and safety regulations, with CSA Z460 providing guidance on hazardous energy control. Your employer's written program governs. Air handlers have a few hazards that a generic procedure may miss:</p>
<ul>
<li>A unit may have many fans, each with its own drive, plus return, exhaust and relief fans that can start independently.</li>
<li>VFDs store energy in DC bus capacitors for minutes after power is removed.</li>
<li>Fans can rotate with power locked out because other fans in the system move air through them.</li>
<li>Steam and hot water at the coils and humidifiers can scald.</li>
<li>Building automation systems can command equipment to start at any time if not isolated at the power source.</li>
</ul>

<h2>Step 1: Identify every energy source</h2>
<p>Use the unit's wiring diagrams and mechanical drawings to list sources for the section you will work in. A typical list:</p>
<table>
<thead><tr><th>Energy source</th><th>Isolation point</th></tr></thead>
<tbody>
<tr><td>Supply fan motors and drives</td><td>Unit main disconnect or each fan's disconnect; VFD input disconnect</td></tr>
<tr><td>Return, exhaust or relief fans</td><td>Their own disconnects, which may be remote</td></tr>
<tr><td>Electric heaters</td><td>Heater disconnect</td></tr>
<tr><td>Control power</td><td>Control transformer or panel breaker</td></tr>
<tr><td>Energy recovery wheel drive</td><td>Wheel motor disconnect</td></tr>
<tr><td>UV-C lamps</td><td>Lamp circuit disconnect and door interlock</td></tr>
<tr><td>Hot water, chilled water, steam</td><td>Isolation valves at coils and humidifiers</td></tr>
<tr><td>Compressed air (pneumatic actuators)</td><td>Supply valve and bleed</td></tr>
<tr><td>Gravity and springs</td><td>Spring-return actuators, counterweighted dampers</td></tr>
<tr><td>Airflow through the unit</td><td>Other fans in the system; wind through outdoor openings</td></tr>
</tbody>
</table>

<h2>Step 2: Notify and shut down</h2>
<ol>
<li>Tell operations and affected occupants what is shutting down and for how long.</li>
<li>Stop the equipment through its normal controls, so it ramps down and dampers close in sequence.</li>
<li>Place the BAS points in an off override and note it, but do not rely on this as isolation.</li>
</ol>

<h2>Step 3: Isolate, lock and tag</h2>
<ol>
<li>Open each electrical disconnect identified in Step 1. Use the disconnect as the isolation device, never the VFD keypad, a hand-off-auto switch or the BAS.</li>
<li>Apply your personal lock and tag to each disconnect. Every worker entering the unit applies their own lock, using a group lockout box for larger jobs.</li>
<li>Close and lock steam, hot water and chilled water isolation valves upstream and downstream of the work area. Open drains or vents between them where the work requires depressurizing.</li>
<li>Shut off and bleed compressed air to pneumatic actuators in the work area.</li>
<li>Block or pin dampers and counterweighted parts that could move.</li>
</ol>

<h2>Step 4: Dissipate stored energy</h2>
<ol>
<li>Wait the time stated on the VFD label for DC bus capacitors to discharge; many drives call for several minutes or more. Then verify with a meter rated for the voltage at the DC bus terminals before touching any drive or motor wiring.</li>
<li>Allow fans to coast to a full stop. Large fans can take minutes.</li>
<li>Allow steam and hot water piping to cool and pressure to fall before opening any connection.</li>
</ol>
<p class="warn">An EC motor or permanent magnet motor that is turned by airflow acts as a generator and can produce voltage at its terminals even with the supply disconnected. Restrain the rotor before working on the motor leads.</p>

<h2>Step 5: Stop freewheeling fans</h2>
<p>Fans windmill when air moves through them from other sources: a running fan in a parallel array, a return fan pushing through the supply unit, building stack effect, or wind through outdoor openings. A windmilling fan can carry enough energy to injure, and it can restart a stopped wheel unexpectedly while someone's hand is near it.</p>
<ol>
<li>Shut down every fan that moves air through the work area, not just the one being serviced.</li>
<li>Close isolation dampers where fitted.</li>
<li>Physically restrain the wheel with a manufacturer-provided wheel lock, a strap around the wheel and a fixed structural member, or a block between wheel and housing that cannot be thrown.</li>
<li>For fan arrays, where one fan is being serviced while others run, use the array's backdraft dampers or blank-off plate on the serviced fan, plus a mechanical wheel restraint, and confirm the manufacturer allows service under those conditions.</li>
</ol>

<h2>Step 6: Verify zero energy</h2>
<ol>
<li>Try to start each locked-out item from its local and remote controls. Nothing should happen. Return switches to off.</li>
<li>Test for voltage at motor terminals and heater terminals with a properly rated meter, testing the meter on a known live source before and after.</li>
<li>Confirm pressure gauges at isolated coils read zero, or that drains run dry.</li>
<li>Confirm all fan wheels are stationary and restrained.</li>
</ol>

<h2>Step 7: Restore</h2>
<ol>
<li>Remove tools, restraints and debris. Reinstall belt guards and covers. Close access doors.</li>
<li>Account for every worker. Each person removes their own lock.</li>
<li>Remove restraints and blocks, reopen valves slowly, and restore power.</li>
<li>Return BAS points to automatic and confirm normal operation.</li>
</ol>
<p>Routine tasks done under this procedure are listed in the <a href="<?= url('guides/ahu-preventive-maintenance-schedule') ?>">AHU preventive maintenance schedule</a>. Fan arrays with backdraft dampers versus blank-off plates affect how a single fan can be isolated; see <a href="<?= url('guides/backdraft-dampers-vs-blank-off-plates') ?>">backdraft dampers vs blank-off plates</a>.</p>
<?php guide_end([
    ['Is turning off the VFD enough to lock out an AHU fan?', 'No. Stopping a fan from the VFD keypad, a hand-off-auto switch or the BAS is not isolation. Open the disconnect, apply your own lock and tag, wait for drive capacitors to discharge and verify zero energy.'],
    ['Why do I need to restrain a fan that is locked out?', 'Airflow from other fans, stack effect or wind can spin a de-energized fan. A windmilling wheel can injure someone, and permanent magnet or EC motors can generate voltage when turned. Restrain the wheel mechanically.'],
    ['How long do VFD capacitors hold a charge?', 'It varies by drive, so read the warning label on the drive, which commonly calls for waiting several minutes or more. Always verify with a rated meter at the DC bus before touching drive or motor wiring.'],
]);
