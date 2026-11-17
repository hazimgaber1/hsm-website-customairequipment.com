<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-array-acoustics'); ?>
<p class="lede">Replacing one or two large fans with an array of smaller, faster wheels moves sound energy up the frequency scale, often reduces the hardest-to-treat low-frequency bands, and lets the same attenuation length do more work. The total sound power is not automatically lower, so the benefit has to be confirmed in octave bands at the actual operating point.</p>

<h2>Where the frequency shift comes from</h2>
<p>A fan's dominant tonal and broadband content is tied to its blade passing frequency and its size. Blade pass frequency is:</p>
<p class="formula">BPF (Hz) = RPM × number of blades ÷ 60</p>
<p>A large plenum fan for 40,000 cfm (18.9 m³/s) might turn at around 900 rpm with 10 or 12 blades, giving a BPF in the 150 to 180 Hz range, squarely in the 125 Hz octave band. An array of six smaller wheels sized for the same total airflow might each run at 2,000 rpm or more with similar blade counts, pushing BPF into the 300 to 400 Hz range, which sits in the 250 Hz and 500 Hz bands. More detail on the calculation is in <a href="<?= url('guides/fan-blade-pass-tonal-noise') ?>">fan blade pass frequency and tonal noise</a>.</p>
<p>The broadband spectrum shifts in the same direction. Smaller wheels generate turbulence at smaller scales, which shows up at higher frequencies. The overall effect is a spectrum with less energy at 63 and 125 Hz and more at 500 Hz to 2 kHz compared with a single wheel at the same duty.</p>

<h2>Why higher frequencies are easier to deal with</h2>
<p>Almost every passive control element in an air system works better as frequency rises:</p>
<ul>
<li><strong>Dissipative silencers</strong> provide modest insertion loss at 63 Hz and much more from 500 Hz to 2 kHz for the same length.</li>
<li><strong>Lined ductwork and plenums</strong> absorb mid and high frequencies efficiently; low-frequency absorption needs thick liners and long runs.</li>
<li><strong>Casing panels and walls</strong> follow a mass law, gaining roughly 6 dB of transmission loss per doubling of frequency, so higher-frequency casing noise is blocked more effectively.</li>
<li><strong>Duct elbows and end reflection</strong> also attenuate higher frequencies more effectively than low ones.</li>
</ul>
<p>The practical result is that energy moved from 125 Hz to 500 Hz is energy you can remove with an ordinary silencer or a lined plenum, instead of a long, high-pressure-drop low-frequency silencer or heavy construction.</p>

<h2>How multiple sources add</h2>
<p>Sound from separate fans is uncorrelated, so it adds on an energy basis. N identical fans produce:</p>
<p class="formula">Lw,array = Lw,single + 10 log10(N)</p>
<p>Six fans add about 7.8 dB over one fan of the array. That is not a penalty in itself, because each small fan is much quieter than a single large one doing the full duty. Whether the array ends up quieter overall depends on the selection: wheel type, tip speed, operating point on the curve and inlet conditions.</p>
<p>Worked example, using illustrative values for a single band: a single large fan produces 95 dB at 125 Hz. Each of six array fans produces 82 dB at 125 Hz. The array total is 82 + 7.8 = 89.8 dB, about 5 dB below the single fan in that band. At 1 kHz the single fan may produce 84 dB while each array fan produces 78 dB, giving 85.8 dB for the array, nearly 2 dB higher. That trade is usually favourable because the 1 kHz increase is cheap to attenuate and the 125 Hz reduction is expensive to obtain any other way.</p>
<p class="warn">Do not assume an array is quieter because of its name. Fans selected far to the right of their curves, running at high tip speed, or fed by a poor inlet plenum can be louder in every band than a well-selected single fan.</p>

<h2>Shorter attenuation and the plenum effect</h2>
<p>Because each array fan is small, the distance needed for the airflow to become uniform downstream is also short. That allows a compact discharge plenum. When the plenum is lined, it also acts as an acoustic chamber: sound enters, reflects off absorptive walls and leaves through the outlet with some energy removed. Plenum attenuation depends on the lined surface area, the outlet area and the offset between inlet and outlet. Arrays fit well with this approach because the discharge can be distributed across the whole cross-section.</p>
<p>Some manufacturers place acoustic baffles or silencer modules directly downstream of the array, sometimes called "integrated silencing". Because the frequency content is already high, short baffles can provide meaningful insertion loss in a few feet of unit length. Comparisons of baffle types are in <a href="<?= url('guides/dissipative-vs-packless-silencers') ?>">dissipative vs packless vs film-lined silencers</a>.</p>

<h2>Tones, beating and speed effects</h2>
<p>When all fans run at the same speed, their blade pass tones coincide in frequency. Since the fans are not phase-locked, the tones add on an energy basis, but small speed differences can create slow beating, a "wah-wah" modulation that people notice even when levels are low. Common mitigations include:</p>
<ul>
<li>Selecting wheels with blade counts that keep BPF out of sensitive bands at normal operating speed.</li>
<li>Running all fans from a common speed command so their speeds match closely, or deliberately separating them where the controls support it.</li>
<li>Providing enough lined plenum or baffle length downstream to reduce tonal content before it enters ductwork.</li>
</ul>
<p>Turndown also changes the picture. At reduced airflow, a VAV array may either slow all fans or shut some off. Slowing all fans drops tip speed and sound quickly (sound power falls roughly with the fifth power of speed under the fan laws), while staging fans off keeps the remaining fans at higher speed. The control trade-offs are covered in <a href="<?= url('guides/fan-array-control-sequences') ?>">fan array control sequences</a>; acoustically, uniform slowing is usually quieter.</p>

<h2>What to ask for when evaluating an array</h2>
<ol>
<li>Octave-band sound power for inlet, discharge and casing at design airflow and at the minimum expected airflow.</li>
<li>Whether the data is for all running fans combined or for one fan.</li>
<li>Fan speed, blade count and resulting BPF at design.</li>
<li>Any integrated acoustic treatment and its pressure drop.</li>
<li>Whether the values were tested in the actual unit arrangement or calculated from fan-only data.</li>
</ol>
<p>Custom Air Equipment builds and run-tests <a href="<?= url('products/fan-arrays') ?>">fan arrays</a> in custom units, and can provide octave-band data at your scheduled duty for acoustic review.</p>
<?php guide_end([
    ['Are fan arrays quieter than single fans?', 'Often in the low-frequency bands, which are the hardest to treat, but not automatically overall. Smaller, faster wheels shift energy to higher frequencies, where silencers and lined plenums work well. Compare octave-band data at the actual duty before assuming a benefit.'],
    ['How much louder are six fans than one?', 'Six identical fans produce about 7.8 dB more sound power than one of those fans. Each array fan is usually much quieter than a single large fan doing the whole duty, so the array total can still be lower in key bands.'],
    ['Why do fan arrays sometimes produce a pulsing sound?', 'Fans running at almost but not exactly the same speed produce blade pass tones at slightly different frequencies, which beat against each other. Matching speeds closely, choosing blade counts carefully and adding downstream absorption reduce the effect.'],
]);
