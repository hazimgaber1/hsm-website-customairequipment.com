<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('vfd-resonance-skip-frequencies'); ?>
<p class="lede">If vibration or noise rises sharply at one fan speed and drops at speeds a little higher or lower, a natural frequency of the fan, its base, isolators, supports or connected structure is being excited by running speed. Confirm it with a slow speed sweep, then either change the structure so the resonance moves out of the operating range or program VFD skip frequencies so the drive does not dwell there.</p>

<h2>Why variable speed exposes resonance</h2>
<p>A constant-speed fan runs at one frequency. Designers check that no natural frequency sits near it and the problem never appears. Add a VFD that can run anywhere from perhaps 20 to 60 Hz, and the fan now sweeps across a wide band of forcing frequencies. Any structural mode within that band will be excited when the running speed matches it. Common culprits:</p>
<ul>
<li>The fan and motor base on its isolators (a rocking or bouncing mode).</li>
<li>Bearing supports, motor brackets or fan stands that are lightly braced.</li>
<li>Casing panels, plenum walls or access doors.</li>
<li>Support steel, dunnage or a long floor span.</li>
<li>The fan shaft itself, if the operating range approaches the shaft's first critical speed.</li>
</ul>

<h2>Symptom: vibration peaks at one speed</h2>
<p><strong>Cause:</strong> running speed (1×), or occasionally a multiple such as blade pass or 2×, coincides with a natural frequency.</p>
<p><strong>Check: perform a speed sweep.</strong></p>
<ol>
<li>Mount a vibration sensor on the bearing housing, or on the component that seems to shake most.</li>
<li>Ramp the VFD slowly from minimum to maximum speed in small steps, for example 1 Hz steps with a short dwell at each.</li>
<li>Record overall amplitude and 1× amplitude and phase at each step.</li>
<li>Plot amplitude against speed. A resonance shows as a peak that rises and falls over a narrow range; a phase shift of roughly 180 degrees across the peak confirms it.</li>
<li>Repeat at another location (motor, base, casing, floor) to find which component is resonating.</li>
</ol>
<p>Many drives can log output frequency, and some analysers can record a run-up or coast-down automatically. A coast-down with the drive output disabled is a clean way to sweep downward through the range without drive influence.</p>
<p><strong>Supporting check:</strong> a bump (impact) test with the fan stopped. Strike the structure with a rubber mallet while recording the response; the ringing frequency is a natural frequency. If it matches the speed of the peak in the sweep, the component is identified.</p>
<p class="note">If vibration rises steadily with speed and has no peak, it is not resonance. Go back to general diagnosis in <a href="<?= url('guides/vibration-troubleshooting') ?>">troubleshooting AHU vibration</a>.</p>

<h2>Fix option 1: change the structure</h2>
<p>A permanent fix moves the natural frequency well clear of the operating range or adds damping.</p>
<ul>
<li><strong>Stiffen</strong> brackets, bases or supports with bracing or gussets. Stiffness raises natural frequency.</li>
<li><strong>Add mass</strong> to lower the frequency, for example an inertia base under a fan.</li>
<li><strong>Change isolators</strong> to move the isolated system's natural frequency below the minimum operating speed. The isolator mode should sit well below the lowest running frequency, as calculated in <a href="<?= url('guides/static-deflection-selection') ?>">selecting isolator static deflection</a>.</li>
<li><strong>Add damping</strong> to panels that ring, using constrained-layer damping or stiffeners.</li>
</ul>
<p>Structural changes are preferred when the resonance falls in a speed range the fan needs for normal operation.</p>

<h2>Fix option 2: VFD skip frequencies</h2>
<p>Most drives allow one or more skip (also called critical or jump) frequency bands. The drive will not run continuously inside a skip band; when the speed command falls within it, the drive holds at the nearest edge, and when it must pass through, it ramps across at its acceleration rate.</p>
<p><strong>Setting them up:</strong></p>
<ol>
<li>From the sweep, find the output frequency at the peak and the range over which vibration exceeds your acceptance limit.</li>
<li>Set the skip centre at the peak and the bandwidth to cover the exceedance range with a small margin on each side.</li>
<li>Example: vibration exceeds the limit between 36.5 and 39.5 Hz, peaking at 38 Hz. Set the skip centre to 38 Hz with a band of ±2 Hz (36 to 40 Hz).</li>
<li>Repeat the sweep with the skip active and confirm the drive passes through without dwelling.</li>
<li>Record the settings in the drive parameter list and the turnover documents.</li>
</ol>
<p><strong>Limits of skip frequencies:</strong></p>
<ul>
<li>If the skip band sits in the middle of the normal operating range, the control loop can bounce between the two edges, causing airflow or pressure hunting. Wide bands make this worse.</li>
<li>Skips do not remove the resonance; the fan still passes through it on every start and stop. Brief passage is generally acceptable.</li>
<li>On fan arrays with one drive per fan, every drive needs the same skip settings, and the resonance may differ fan to fan if supports differ.</li>
<li>If the resonance is close to minimum speed, raising the minimum speed setting may be simpler than a skip band.</li>
</ul>

<h2>Shaft critical speed: a special case</h2>
<p>A fan shaft has a first critical speed at which it bends in resonance. Properly designed fans keep the operating range below that speed with margin. If a VFD is used to run a fan faster than its original rating, or a heavier wheel is installed on an existing shaft, the operating range can approach the critical speed. Vibration then climbs steeply near maximum speed. Confirm the manufacturer's maximum safe speed for the wheel and shaft before increasing speed limits; a skip frequency is not an adequate solution for shaft critical speed.</p>

<h2>Symptom: noise, not vibration, at one speed</h2>
<p>A loud hum or drone at a single speed can be acoustic resonance: blade pass or another tone matching a duct or plenum acoustic mode. The same sweep method works with a sound meter. Changing speed range, adding absorption to the plenum or skipping the speed are typical fixes.</p>
<?php guide_end([
    ['What is a VFD skip frequency?', 'It is a drive setting that prevents continuous operation within a defined frequency band. The drive holds at the band edge or ramps through it, so the fan does not dwell at a speed that excites a resonance.'],
    ['How do I find the resonant speed of a fan?', 'Ramp the VFD slowly through its full range while recording vibration amplitude and phase at the bearings. A resonance appears as a narrow peak with a phase shift of about 180 degrees. A bump test with the fan stopped can confirm the natural frequency.'],
    ['Is it better to use skip frequencies or fix the structure?', 'Fixing the structure is the permanent solution, especially if the resonance falls in the normal operating range. Skip frequencies are practical when the resonance is near the edge of the range and a narrow band will not upset control.'],
]);
