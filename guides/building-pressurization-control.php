<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('building-pressurization-control'); ?>
<p class="lede">Building pressure control keeps the building slightly positive relative to outdoors as outdoor air rises and falls with the economizer. Depending on the system, that means modulating relief dampers or a relief fan to a measured building pressure, or controlling a return fan by airflow tracking or plenum pressure while the relief damper handles building pressure. Each sequence depends on a reliable outdoor reference and a well-filtered signal.</p>

<h2>Step 1: Confirm the arrangement and the goal</h2>
<ol>
<li>Identify the hardware: barometric relief, motorized relief damper, relief fan, or return fan with exhaust and return dampers. The choice between them is a design decision covered in <a href="<?= url('guides/return-fan-vs-relief-fan-arrangement') ?>">return fan vs relief fan arrangement</a>.</li>
<li>Set the building pressure target. A small positive value relative to outdoors, commonly a few hundredths of an inch of water (several pascals), limits infiltration without making doors hard to close.</li>
<li>Note spaces that must be negative (washrooms, kitchens, labs) and their exhaust; building pressure is the net result of all supply, return, relief and exhaust.</li>
</ol>

<h2>Step 2: Install a reliable building pressure measurement</h2>
<ol>
<li>Place the indoor pickup in a large, open, representative space on a typical floor, away from doors, elevators, lobbies and diffusers.</li>
<li>Place the outdoor reference on the roof or a façade using a shielded static pressure tip designed to reduce wind effects. On tall buildings or windy sites, average several outdoor references.</li>
<li>Run the tubing indoors to a low-range differential pressure transmitter with range suited to the setpoint, for example ±0.25 in. w.c. (±60 Pa).</li>
<li>Protect tubing from kinks, condensation and temperature extremes.</li>
<li>Filter the signal in software, for example with a time constant of tens of seconds, so wind gusts and door openings do not drive the relief loop.</li>
</ol>
<p class="warn">Building pressure is a very small signal. A transmitter with a range many times larger than the setpoint, or an outdoor pickup exposed to wind, will make any sequence appear unstable.</p>

<h2>Step 3A: Relief damper only (no relief or return fan)</h2>
<ol>
<li>The supply fan handles both supply and return pressure losses; relief air leaves through a motorized relief damper.</li>
<li>Modulate the relief damper with a PI loop to hold building pressure at setpoint.</li>
<li>Close the relief damper whenever the supply fan is off and during unoccupied modes with outdoor air closed.</li>
<li>Expect the relief damper to open mainly when the economizer brings in more than minimum outdoor air.</li>
</ol>

<h2>Step 3B: Relief fan</h2>
<ol>
<li>Enable the relief fan when the relief damper reaches a set position and building pressure is still above setpoint; disable it when its speed has been at minimum for a set time and pressure is below setpoint.</li>
<li>Modulate relief fan speed (and the relief damper fully open while running) to hold building pressure.</li>
<li>For multiple relief fans, stage them on and off with run-time rotation and run all running fans at a common speed.</li>
<li>Interlock: the relief damper closes when all relief fans are off, and opens before a relief fan is commanded on.</li>
</ol>

<h2>Step 3C: Return fan with airflow tracking</h2>
<p>Airflow tracking holds a fixed difference between supply and return airflow:</p>
<p class="formula">Return airflow setpoint = Supply airflow − (Exhaust + Desired building exfiltration)</p>
<ol>
<li>Measure supply and return airflow with airflow measuring stations or fan inlet measurement.</li>
<li>Calculate the return airflow setpoint continuously and modulate return fan speed to hold it.</li>
<li>Control exhaust and return dampers in sequence with the economizer so mixing plenum pressure stays stable.</li>
<li>Recalibrate the offset during commissioning by measuring building pressure, because airflow measurement errors directly change the actual offset.</li>
</ol>
<p><strong>Example:</strong> supply is 20,000 cfm, toilet and other exhaust total 1,500 cfm, and the desired exfiltration is 1,000 cfm. Return setpoint = 20,000 − 2,500 = 17,500 cfm. If the supply meter reads 3 percent high and return reads 3 percent low, the true difference could be off by about 1,100 cfm, nearly the whole exfiltration allowance. That sensitivity is why the next approach is often preferred.</p>

<h2>Step 3D: Return fan with direct building pressure control</h2>
<ol>
<li>Modulate the return fan to hold a pressure setpoint in the return fan discharge plenum (upstream of the exhaust and return dampers), sufficient to push air through the exhaust damper.</li>
<li>Modulate the exhaust (relief) damper to hold building pressure setpoint.</li>
<li>Modulate the return air damper inversely to the outdoor air damper as part of the economizer sequence.</li>
<li>Reset the return plenum pressure setpoint so the exhaust damper does not throttle excessively.</li>
</ol>
<p>This arrangement measures the actual result, building pressure, instead of inferring it from two flow measurements. It is the approach favoured in <a href="<?= url('guides/ashrae-guideline-36-sequences') ?>">ASHRAE Guideline 36</a> for return fan systems.</p>

<h2>Step 4: Tune and commission</h2>
<ol>
<li>Tune the relief or return loops with slow, stable gains; building pressure responds in seconds but the signal is noisy.</li>
<li>Test through the full range of outdoor air: minimum, mid-economizer and 100 percent outdoor air.</li>
<li>Test with exhaust fans on and off, and with the main entrance doors open.</li>
<li>Check that minimum outdoor airflow is maintained in all modes, especially at low supply airflow with a return fan running.</li>
<li>Trend building pressure, damper positions, fan speeds and outdoor airflow for several days.</li>
</ol>
<p>Loop stability problems discovered here are covered in <a href="<?= url('guides/hunting-control-loops-troubleshooting') ?>">troubleshooting hunting and oscillating control loops</a>.</p>
<?php guide_end([
    ['What building pressure setpoint should I use?', 'A small positive value relative to outdoors, commonly a few hundredths of an inch of water column, is typical. It should be enough to limit infiltration but low enough that doors operate normally. Tall buildings with stack effect may need special treatment.'],
    ['Why is return fan airflow tracking unreliable?', 'It depends on the difference between two large airflow measurements. Small percentage errors in either one create large errors in the difference, which can exceed the intended building exfiltration.'],
    ['Where should the outdoor pressure reference be located?', 'On the roof or façade using a shielded static pressure tip that reduces wind effects, away from exhaust outlets and building corners. On windy or tall buildings, several outdoor references can be averaged.'],
]);
