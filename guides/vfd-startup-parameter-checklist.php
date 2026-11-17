<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('vfd-startup-parameter-checklist'); ?>
<p class="lede">Before a fan VFD is released for normal operation, confirm the motor data, control mode, speed limits, ramps, skip frequencies, carrier frequency, restart behaviour, protection settings, input scaling and communication, and save a copy of the final parameters. Factory defaults are rarely right for a specific fan.</p>

<h2>Before powering the drive</h2>
<p>Overall unit startup, including mechanical checks, belt tension, rotation by bump and safeties, is covered in the <a href="<?= url('guides/pre-startup-checklist') ?>">pre-startup checklist</a>. For the drive specifically, confirm:</p>
<ul>
<li>Drive model and rating match the submittal and the motor's full-load current.</li>
<li>Line and load wiring are on the correct terminals; motor cable shield terminated as specified.</li>
<li>Input voltage measured at the drive, all three phases, within the drive's range.</li>
<li>Enclosure ventilation clear, filters installed, and no debris in the heatsink.</li>
<li>Any output disconnect has its early-break contact wired to the drive.</li>
<li>Drive firmware version recorded.</li>
</ul>

<h2>Motor data</h2>
<ul>
<li>Motor nameplate voltage entered.</li>
<li>Motor nameplate full-load current entered (not service factor current).</li>
<li>Motor nameplate frequency, normally 60 Hz.</li>
<li>Motor nameplate speed (rpm) entered, so slip compensation and speed display are correct.</li>
<li>Motor horsepower or kW entered.</li>
<li>Power factor or no-load current, if the drive asks for it.</li>
<li>Motor identification (auto-tune) run completed if required by the control mode, with the fan uncoupled or the wheel free to turn as the procedure demands.</li>
<li>For multiple motors on one drive: the combined current entered and the drive in the control mode its manufacturer specifies for multi-motor use.</li>
</ul>

<h2>Control mode and torque characteristic</h2>
<ul>
<li>Control mode set appropriately: variable torque volts-per-hertz or the drive's energy-optimizing fan mode for typical centrifugal fans; vector or PM mode only when the motor type requires it.</li>
<li>Energy optimization function enabled if the manufacturer recommends it for fans.</li>
<li>For permanent magnet or synchronous reluctance motors, the matching motor type selected.</li>
</ul>

<h2>Speed limits</h2>
<ul>
<li><strong>Maximum frequency</strong> set so the fan cannot exceed the wheel's maximum safe speed for its class and temperature, including slip and any belt ratio. See <a href="<?= url('guides/fan-tip-speed-limits') ?>">fan tip speed and class limits</a>.</li>
<li>Maximum frequency also checked against motor load at that speed; it must not overload the motor.</li>
<li>In a redundant fan array, maximum frequency high enough to reach the failure-mode duty point.</li>
<li><strong>Minimum frequency</strong> set above the fan's unstable region and above any minimum speed for motor cooling.</li>
<li>Speed command scaling verified: 0% command equals minimum speed or stop as the sequence intends; 100% equals maximum.</li>
</ul>

<h2>Ramps and starting</h2>
<ul>
<li>Acceleration time long enough to start the wheel without current limit trips; record the observed peak current.</li>
<li>Deceleration time long enough to avoid overvoltage trips, or stop mode set to coast.</li>
<li>Stop mode chosen: coast to stop is common for fans unless the sequence needs controlled stopping.</li>
<li>Flying start (catch a spinning load) enabled where the fan may be windmilling at start.</li>
<li>DC injection or pre-magnetization settings reviewed if used.</li>
</ul>

<h2>Skip frequencies</h2>
<ul>
<li>Slow speed sweep performed from minimum to maximum speed with a vibration meter at the fan and motor bearings.</li>
<li>Resonant speed bands identified and entered as skip frequency bands, with appropriate bandwidth.</li>
<li>Confirmed that skip bands do not block the normal operating range.</li>
</ul>
<p>How resonances are identified and how wide to set the bands is covered in <a href="<?= url('guides/vfd-resonance-skip-frequencies') ?>">VFD resonance and skip frequencies</a>.</p>

<h2>Carrier frequency</h2>
<ul>
<li>Carrier frequency set to the lowest value that gives acceptable motor noise.</li>
<li>Drive current derating for that carrier confirmed against motor current.</li>
<li>Automatic carrier reduction on temperature noted and recorded.</li>
</ul>

<h2>Protection and fault handling</h2>
<ul>
<li>Electronic motor overload enabled and set from nameplate current (single-motor drives only).</li>
<li>Motor thermistor input configured, if fitted.</li>
<li>Current limit set as recommended for the motor.</li>
<li>Automatic restart after power loss enabled or disabled according to the sequence and owner's requirements.</li>
<li>Automatic fault reset: number of attempts and delay set; limited so real faults are not masked.</li>
<li>Input phase loss and output phase loss detection enabled.</li>
<li>Underload or belt-break detection configured where the drive offers it.</li>
</ul>

<h2>Inputs, outputs and communication</h2>
<ul>
<li>Run/enable input source confirmed: hardwired, network or both.</li>
<li>Safety stop input wired from freezestat, smoke detector and high static safety chain, and tested to stop the motor.</li>
<li>Analog speed input type (0-10 V or 4-20 mA) and scaling verified at the drive display.</li>
<li>Loss-of-signal behaviour set: hold last speed, go to preset speed, or stop.</li>
<li>Fire or smoke control override mode configured where the sequence requires it, and its interaction with safeties documented.</li>
<li>Relay outputs assigned: run status, fault, at speed.</li>
<li>Network address, baud rate and protocol settings entered; points verified at the BAS front end.</li>
<li>Communication-loss behaviour set deliberately.</li>
</ul>

<h2>Close-out</h2>
<ol>
<li>Run the fan at several speeds and record frequency, current, voltage and power.</li>
<li>Confirm direction of rotation at the fan.</li>
<li>Clear the fault log after testing so later faults are easy to identify.</li>
<li>Back up the final parameter set to a keypad, memory card or software file, and give a copy to the owner.</li>
<li>Print or export the parameter list for the turnover documentation.</li>
<li>Lock the keypad or set a password if the owner wants to prevent casual changes.</li>
</ol>
<p class="note">A parameter backup turns a drive replacement from an afternoon of guesswork into a few minutes. Keep it with the O&amp;M manual and in the owner's maintenance system.</p>
<?php guide_end([
    ['What VFD parameters must be set for a fan?', 'Motor nameplate data, control mode, minimum and maximum speed, acceleration and deceleration ramps, skip frequencies, carrier frequency, flying start and restart behaviour, protection settings, input scaling and communication settings.'],
    ['How should maximum frequency be set on a fan drive?', 'Low enough that the fan cannot exceed its maximum safe wheel speed or overload the motor, but high enough to reach every required duty point, including failure mode in a redundant array.'],
    ['Why use flying start on a fan VFD?', 'Fans often windmill from airflow or stack effect. Flying start lets the drive catch the spinning wheel instead of starting from zero, which avoids overcurrent trips.'],
    ['Should VFD parameters be backed up after startup?', 'Yes. Save the final parameter set and give a copy to the owner, so a replacement drive can be configured exactly the same way.'],
]);
