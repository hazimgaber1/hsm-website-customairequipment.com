<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-blade-pass-tonal-noise'); ?>
<p class="lede">Each time a fan blade passes a fixed object such as a cutoff, strut or inlet edge, it produces a pressure pulse; the rate of those pulses is the blade pass frequency, calculated as rpm × number of blades ÷ 60. When that tone stands out above the broadband fan noise, people notice it at lower levels than they would notice a smooth hiss, so it is worth predicting and controlling.</p>

<h2>Calculating blade pass frequency and its harmonics</h2>
<p class="formula">BPF (Hz) = N × B ÷ 60   (N = fan speed in rpm, B = number of blades)</p>
<p>Tones also appear at integer multiples of BPF (2 × BPF, 3 × BPF and so on), usually with decreasing strength. The fundamental and the second harmonic are the ones that most often show up in octave-band data or in a field spectrum.</p>
<p>Worked examples:</p>
<table>
<thead><tr><th>Fan</th><th>Speed</th><th>Blades</th><th>BPF</th><th>Octave band</th></tr></thead>
<tbody>
<tr><td>Large housed airfoil centrifugal</td><td>750 rpm</td><td>12</td><td>150 Hz</td><td>125 Hz band</td></tr>
<tr><td>Plenum fan, mid-size</td><td>1,400 rpm</td><td>10</td><td>233 Hz</td><td>250 Hz band</td></tr>
<tr><td>Small array fan, direct drive</td><td>2,600 rpm</td><td>7</td><td>303 Hz</td><td>250 Hz band (near 355 Hz edge)</td></tr>
<tr><td>Vaneaxial fan</td><td>1,750 rpm</td><td>9</td><td>263 Hz</td><td>250 Hz band</td></tr>
</tbody>
</table>
<p>The octave band limits are about 177 to 355 Hz for 250 Hz and 355 to 710 Hz for 500 Hz. A BPF near a band edge can move from one band to the next as a VFD changes speed, which affects which part of the attenuation design has to deal with it.</p>
<p class="note">With a VFD, BPF is not a single number. Calculate it at minimum, design and maximum speeds so you know the range of frequencies the tone will sweep.</p>

<h2>Why some fans are more tonal than others</h2>
<p>A tone forms when the pressure pulses from each blade interact with something stationary. The strength depends on how close and how abrupt that interaction is:</p>
<ul>
<li><strong>Housed centrifugal fans:</strong> the scroll cutoff is the main interaction. A cutoff set very close to the wheel raises efficiency slightly but strengthens the tone. A larger clearance or a sloped or rounded cutoff reduces it.</li>
<li><strong>Plenum (unhoused) fans:</strong> there is no scroll, so the discharge tone is generally weaker. The inlet cone and any struts, motor supports or nearby walls can still create interaction tones.</li>
<li><strong>Axial and vaneaxial fans:</strong> the rotor blades interact with downstream guide vanes or support struts. The ratio of vane count to blade count matters; manufacturers choose combinations so that the strongest interaction modes decay in the duct instead of propagating.</li>
<li><strong>Obstructions near the inlet:</strong> a coil, damper blade, bearing support or elbow close to the inlet produces uneven inflow, and each blade then "chops" through that disturbance once per revolution.</li>
</ul>
<p>Operating point also matters. Fans running well away from their best efficiency point, especially toward the left of the curve, tend to be noisier and can produce stronger tonal and low-frequency content.</p>

<h2>Spotting a tone in sound data</h2>
<p>Octave-band data averages everything in each band, so a tone shows up as one band standing several decibels above the smooth downward slope of broadband fan noise. Many manufacturers add a "BPF correction" to the band containing blade pass when calculating sound power from generic fan data, which is a reminder that the tone is real even if hidden in the averaging.</p>
<p>In the field, a one-third-octave or narrowband analyser will show the tone directly as a narrow peak at BPF. Changing speed slightly and watching the peak move proves it is fan-related rather than coming from a motor, drive or another source. Motor electrical tones, by contrast, follow the drive carrier or line frequency, not the blade count.</p>

<h2>How fan arrays stagger and spread tones</h2>
<p>An array of identical fans running at the same speed produces tones at the same frequency. Because the fans are not phase-locked, those tones add on an energy basis, roughly 10 log10(N) above one fan's tone, rather than coherently. Small speed differences between fans produce slow beating as tones drift in and out of phase.</p>
<p>Several strategies are used to make array tones less noticeable:</p>
<ol>
<li><strong>Higher BPF through smaller, faster wheels</strong>, placing the tone in bands that lined plenums and silencers attenuate well. The broader acoustic effects are covered in <a href="<?= url('guides/fan-array-acoustics') ?>">why fan arrays change AHU acoustics</a>.</li>
<li><strong>Tight speed matching</strong> so that tones coincide steadily and do not beat. A common speed signal to every drive or EC motor helps.</li>
<li><strong>Deliberate small speed offsets</strong> in some arrays so that tones are spread across a few hertz and the beating is fast enough not to be heard as pulsing. This is a controls decision with energy and airflow consequences and should be tested.</li>
<li><strong>Mixed blade counts</strong> are occasionally used so not all fans produce the same BPF, though this complicates spare parts and performance matching.</li>
</ol>
<p>Each approach has trade-offs, and the right one depends on the space and the attenuation downstream. For how arrays are controlled as a group, see <a href="<?= url('guides/fan-array-control-sequences') ?>">fan array control sequences</a>.</p>

<h2>Reducing tonal noise</h2>
<ul>
<li><strong>Select away from sensitive bands.</strong> Compare blade count and speed options so BPF falls where downstream attenuation is strong.</li>
<li><strong>Keep the inlet clean.</strong> Maintain recommended clearance between the fan inlet and coils, walls and dampers so each blade sees uniform flow.</li>
<li><strong>Increase cutoff clearance</strong> on housed fans if the manufacturer offers it.</li>
<li><strong>Use lined plenums or silencers</strong> tuned for the band containing BPF. Reactive silencer elements can target a specific tone if the speed range is narrow.</li>
<li><strong>Avoid running at a speed where BPF excites a duct or room mode.</strong> If a tone is loud only at one speed, it may be a resonance; diagnosis is covered elsewhere in this section.</li>
</ul>
<p>Low-frequency rumble from turbulence and fan instability is a different mechanism with different fixes; see <a href="<?= url('guides/low-frequency-rumble-troubleshooting') ?>">troubleshooting low-frequency rumble</a>.</p>
<?php guide_end([
    ['How do I calculate fan blade pass frequency?', 'Multiply fan speed in rpm by the number of blades and divide by 60. A 10-blade fan at 1,200 rpm has a blade pass frequency of 200 Hz. Harmonics occur at 400 Hz, 600 Hz and so on.'],
    ['Why does fan tone change with VFD speed?', 'Blade pass frequency is proportional to speed. As the drive slows the fan, the tone drops in frequency and usually in level, and it can move from one octave band to another.'],
    ['Do fan arrays make tonal noise worse?', 'Not necessarily. Each fan is usually quieter and the tone is at a higher frequency that is easier to attenuate. Tones from several fans add on an energy basis and can beat, which careful speed control and downstream absorption help manage.'],
]);
