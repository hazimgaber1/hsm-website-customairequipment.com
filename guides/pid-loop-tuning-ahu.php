<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('pid-loop-tuning-ahu'); ?>
<p class="lede">Tune an air handler loop by first proving the loop is wired and scaled correctly, then measuring how the process responds to a step change in output, and finally calculating PI gains from that response rather than guessing. Supply temperature, duct static, damper and pressure loops behave very differently, so each needs its own test; derivative action is rarely needed.</p>

<h2>Step 1: Check the loop before touching gains</h2>
<p>Many "tuning problems" are not tuning problems. Before changing any parameter:</p>
<ol>
<li><strong>Confirm the sensor reads correctly</strong> against a calibrated reference and is located where it represents the controlled variable. See <a href="<?= url('guides/sensor-selection-and-placement') ?>">selecting and placing sensors</a>.</li>
<li><strong>Stroke the actuator</strong> from 0 to 100 percent and confirm it moves fully, in the right direction, with no sticking or excessive deadband.</li>
<li><strong>Check loop action.</strong> A cooling valve loop is typically reverse acting (output rises as temperature rises above setpoint); a heating valve loop is direct or reverse depending on the controller convention. Getting this wrong makes the loop run away.</li>
<li><strong>Check scaling and units</strong> of input and output.</li>
<li><strong>Check the loop execution interval.</strong> Fast loops such as duct static need intervals of about a second; slow loops can run less often.</li>
<li><strong>Check output limits and enable logic.</strong> Disabled loops should hold or track a safe value so they do not wind up.</li>
</ol>

<h2>Step 2: Run an open-loop step test</h2>
<p>A step test measures the three numbers that define the process: gain, dead time and time constant.</p>
<ol>
<li>Put the loop in manual at a steady operating point where the process is stable.</li>
<li>Step the output by a modest amount, for example 10 percent.</li>
<li>Record the controlled variable at a fast rate until it settles at a new steady value.</li>
<li>Calculate:
<ul>
<li><strong>Process gain K</strong> = change in controlled variable ÷ change in output.</li>
<li><strong>Dead time θ</strong> = time from the step until the variable starts to move.</li>
<li><strong>Time constant τ</strong> = time from the end of the dead time until the variable reaches 63 percent of its total change.</li>
</ul></li>
<li>Repeat in the opposite direction and, if possible, at a different load. HVAC processes are often nonlinear, so results differ.</li>
</ol>

<h2>Step 3: Calculate PI gains</h2>
<p>Lambda tuning is a simple, robust method that suits most HVAC loops. Choose a desired closed-loop time constant λ, usually between one and three times the process time constant for a stable, non-oscillating response.</p>
<p class="formula">Kc = τ ÷ ( K × (λ + θ) )     Ti = τ</p>
<p>Kc is the proportional gain (in output units per unit of error) and Ti is the integral time. Controllers express integral in different ways: integral time in seconds, repeats per minute (60 ÷ Ti in seconds), or integral gain (Kc ÷ Ti). Convert carefully.</p>
<p><strong>Worked example: supply air temperature on a chilled water valve.</strong> Stepping the valve from 40 to 50 percent lowers SAT from 58.0 °F to 55.0 °F. The SAT starts moving 45 seconds after the step and reaches 63 percent of its change (56.1 °F) 180 seconds after it starts moving.</p>
<ul>
<li>K = 3.0 °F ÷ 10 % = 0.30 °F per percent.</li>
<li>θ = 45 s, τ = 180 s.</li>
<li>Choose λ = τ = 180 s.</li>
<li>Kc = 180 ÷ (0.30 × (180 + 45)) = 180 ÷ 67.5 = 2.7 percent per °F.</li>
<li>Ti = 180 s, or about 0.33 repeats per minute.</li>
</ul>
<p>If the response is sluggish after testing, shorten λ; if it overshoots or oscillates, lengthen it.</p>

<h2>Step 4: Apply typical loop characteristics</h2>
<table>
<thead><tr><th>Loop</th><th>Typical dynamics</th><th>Tuning notes</th></tr></thead>
<tbody>
<tr><td>Supply air temperature (valve)</td><td>Slow; dead time and time constant in tens of seconds to minutes; gain varies with load and water temperature</td><td>Conservative λ; consider gain scheduling or separate gains for heating and cooling</td></tr>
<tr><td>Mixed air / economizer damper</td><td>Moderate; strongly nonlinear damper characteristic</td><td>Tune near the operating range where the damper spends most time</td></tr>
<tr><td>Duct static pressure (fan speed)</td><td>Fast; seconds</td><td>Short execution interval; filter the input lightly; avoid over-aggressive gain at low setpoints</td></tr>
<tr><td>Building pressure (relief)</td><td>Fast but noisy from wind and doors</td><td>Filter input with tens of seconds time constant; low gain</td></tr>
<tr><td>Outdoor airflow</td><td>Fast but noisy measurement at low velocity</td><td>Filter input; moderate gain</td></tr>
<tr><td>Humidity</td><td>Slow; long transport delays from humidifier to sensor</td><td>Long integral time; check sensor location</td></tr>
</tbody>
</table>
<p class="note">Derivative action amplifies sensor noise and is seldom useful on HVAC loops. Leave it at zero unless a specific slow, smooth process benefits and the signal is clean.</p>

<h2>Step 5: Handle sequenced and shared outputs</h2>
<p>An AHU SAT loop often drives heating, economizer and cooling in sequence from one output, split into ranges. Each stage has a different process gain, so one set of gains may suit only one stage. Options include separate loops for each stage with deadband between them, or gain scheduling by active stage.</p>
<p>Protect against integral windup: when the output is at a limit, or when the loop is disabled, the integral term must stop accumulating. Most modern controllers include anti-windup, but confirm it is enabled and that disabled loops track a sensible output, so that when they enable they start from a reasonable value rather than a saturated one.</p>

<h2>Step 6: Verify under closed loop</h2>
<ol>
<li>Return to automatic and make a setpoint change of a size typical of normal operation.</li>
<li>Look for a response that reaches setpoint without sustained oscillation and with modest overshoot.</li>
<li>Introduce a disturbance, for example by changing a VAV box or an outdoor air damper position, and check recovery.</li>
<li>Trend the loop over a day or more, across changing loads and weather.</li>
<li>Record the final gains and the test data in the commissioning record.</li>
</ol>
<p>If a loop that was tuned well later starts cycling, the cause may be a changed process rather than the gains. Diagnosis in operation is covered in <a href="<?= url('guides/hunting-control-loops-troubleshooting') ?>">troubleshooting hunting and oscillating control loops</a>, and valve sizing issues that make a loop untunable are covered in <a href="<?= url('guides/control-valve-sizing-cv') ?>">sizing coil control valves by Cv and authority</a>.</p>
<?php guide_end([
    ['What PID settings should I use for an air handler?', 'There are no universal settings, because each loop\'s process gain, dead time and time constant differ. Run a step test, then calculate PI gains with a method such as lambda tuning. Most HVAC loops need little or no derivative action.'],
    ['What is lambda tuning?', 'Lambda tuning sets the integral time equal to the process time constant and calculates proportional gain from the process gain, dead time and a chosen closed-loop time constant. It produces stable, non-oscillating responses and is well suited to HVAC.'],
    ['Why does my supply air temperature loop work in summer but hunt in spring?', 'The process gain changes with load, water temperature and which stage is active. Gains tuned at high load can be too aggressive at low load. Retune at the problem condition or use gain scheduling.'],
]);
