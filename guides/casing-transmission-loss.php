<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('casing-transmission-loss'); ?>
<p class="lede">Sound radiated by an AHU casing equals the sound level inside the unit, minus the transmission loss of the panels, plus a term for how much panel area radiates. Mass law gives a quick screening estimate of panel transmission loss; tested casing data from the manufacturer is better, and leaks at doors and penetrations often matter more than the panels themselves.</p>

<h2>Transmission loss basics</h2>
<p>Transmission loss (TL) is the reduction in sound power, in decibels, as sound passes through a barrier. For a single, limp panel in the frequency range above its lowest resonance and below its coincidence frequency, the field-incidence mass law is a reasonable first estimate:</p>
<p class="formula">TL ≈ 20 log10(w × f) − 33   (w = surface weight in lb/ft², f = frequency in Hz)</p>
<p class="formula">TL ≈ 20 log10(m × f) − 47   (m = surface mass in kg/m²)</p>
<p>Two features follow directly. Doubling the mass adds about 6 dB, and each octave increase in frequency adds about 6 dB. That is why casings block high frequencies well and low frequencies poorly.</p>
<p>Real double-wall panels deviate from mass law. The two skins and the insulation behave as a mass-spring-mass system with a resonance, often at low frequency, where TL dips. Above that resonance the cavity helps and TL can exceed mass law, but structural ties between skins (formed edges, fasteners, frames) bridge the cavity and cap the improvement. STC ratings, which are single-number room-partition ratings, are not very useful here because they weight frequencies relevant to speech, not fan noise. Use octave-band TL.</p>

<h2>From internal level to radiated sound power</h2>
<p>The sound pressure level inside the fan section (Lp,in) drives the panels. The manufacturer may provide it, or it can be estimated from fan sound power and the internal absorption. Then, for a diffuse internal field:</p>
<p class="formula">Lw,radiated = Lp,in − TL + 10 log10(S) − 16.3   (S = radiating panel area in ft²)</p>
<p class="formula">Lw,radiated = Lp,in − TL + 10 log10(S) − 6   (S in m²)</p>
<p>Count only the panels that face the mechanical room. The base sitting on a pad and the end walls shared with adjacent sections usually are excluded or handled separately.</p>

<h2>Worked example</h2>
<p>A fan section is 8 ft wide, 8 ft tall and 6 ft long. The two sides and the top face the room: S = 2 × (8 × 6) + (8 × 6) = 144 ft² (13.4 m²). Panels are double-wall with an 18 ga outer skin (about 2.2 lb/ft²), 22 ga inner skin (about 1.4 lb/ft²) and 2 in. insulation at 3 lb/ft³ (about 0.5 lb/ft²), so w ≈ 4.1 lb/ft². Estimated internal levels are 100 dB at 125 Hz and 92 dB at 500 Hz.</p>
<table>
<thead><tr><th>Step</th><th>125 Hz</th><th>500 Hz</th></tr></thead>
<tbody>
<tr><td>Lp,in</td><td>100</td><td>92</td></tr>
<tr><td>Mass-law TL: 20 log(4.1 × f) − 33</td><td>21.2</td><td>33.3</td></tr>
<tr><td>10 log(144)</td><td>+21.6</td><td>+21.6</td></tr>
<tr><td>Constant</td><td>−16.3</td><td>−16.3</td></tr>
<tr><td><strong>Lw,radiated</strong></td><td><strong>84.1</strong></td><td><strong>64.0</strong></td></tr>
</tbody>
</table>
<p>The casing radiates about 84 dB at 125 Hz but only 64 dB at 500 Hz. The low band will govern what passes into adjacent rooms. If the double-wall resonance falls near 125 Hz, the real TL could be lower than this estimate, so ask for tested values before relying on it.</p>

<h3>Sound pressure in the mechanical room</h3>
<p>In the reverberant part of the mechanical room, the level depends on the room constant R, which is roughly the total absorption of the room's surfaces:</p>
<p class="formula">Lp,room ≈ Lw,radiated + 10 log10(4 ÷ R) + 10.3   (R in ft²)</p>
<p>With R = 600 ft² (a concrete room with some absorptive treatment), 10 log(4 ÷ 600) = −21.8, so Lp at 125 Hz ≈ 84.1 − 21.8 + 10.3 = 72.6 dB. Doubling R with more absorption lowers this by 3 dB. Close to the unit, the direct field adds to this and levels are higher.</p>
<p>What happens next, as sound passes through the room's walls into occupied space, is a construction question covered in <a href="<?= url('guides/mechanical-room-noise-transmission') ?>">controlling noise transmission from mechanical rooms</a>.</p>

<h2>Leaks dominate faster than you think</h2>
<p>Openings in a barrier pass sound almost without loss. The composite TL of a panel with a small open area is limited by that opening:</p>
<p class="formula">TLcomposite = −10 log10( Σ (Si × 10^(−TLi/10)) ÷ Σ Si )</p>
<p>An open area of just 1 percent of the panel caps the composite TL near 20 dB, no matter how heavy the panel. In a casing, leaks come from:</p>
<ul>
<li>Door gaskets that are compressed unevenly or damaged.</li>
<li>Unsealed electrical and piping penetrations.</li>
<li>Panel joints and section splits that were not resealed after shipping.</li>
<li>Gaps around fan access panels and filter racks.</li>
</ul>
<p>The same gaps produce air leakage, so casing leakage testing doubles as an acoustic check; see <a href="<?= url('guides/factory-casing-leakage-testing') ?>">factory casing leakage testing</a>.</p>

<h2>Ways to raise casing transmission loss</h2>
<ol>
<li><strong>Add mass</strong> with heavier gauge skins, especially the outer skin. Each doubling adds about 6 dB in the mass-law region.</li>
<li><strong>Use perforated inner liners in the fan section</strong> to lower the internal sound level before it reaches the panels; see <a href="<?= url('guides/solid-vs-perforated-liners') ?>">solid vs perforated liners</a>.</li>
<li><strong>Increase panel depth</strong> to lower the mass-spring-mass resonance below the important bands.</li>
<li><strong>Add damping or a limp mass layer</strong> to panels that ring.</li>
<li><strong>Seal every leak</strong> and use compression gaskets with positive latching.</li>
<li><strong>Reduce the source</strong>: a lower-speed or better-matched fan selection reduces the internal level in every band.</li>
</ol>
<?php guide_end([
    ['How do I calculate sound breakout from an air handler casing?', 'Start with the internal sound pressure in the fan section, subtract the panel transmission loss for each octave band, then add 10 log of the radiating panel area. In imperial units subtract 16.3; in SI subtract 6. The result is the radiated sound power.'],
    ['Is STC a good rating for AHU casing panels?', 'Not on its own. STC weights frequencies important to speech, while fan noise problems are mostly at 63 to 250 Hz. Ask for octave-band transmission loss data instead.'],
    ['Why do small gaps reduce casing transmission loss so much?', 'Openings pass sound with almost no loss. A gap of only 1 percent of the panel area limits the combined transmission loss to about 20 dB, regardless of panel weight.'],
]);
