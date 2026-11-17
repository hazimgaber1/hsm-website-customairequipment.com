<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('dissipative-vs-packless-silencers'); ?>
<p class="lede">Dissipative silencers with exposed fibrous fill give the most insertion loss per foot and per inch of pressure drop, packless silencers trade some low-frequency performance for a fibre-free airstream, and film-lined silencers sit in between by wrapping the fill in a thin membrane. Choose by the bands you need to reduce, the pressure drop you can afford and how strict the hygiene requirement is.</p>

<h2>How each type works</h2>
<h3>Dissipative (packed) silencers</h3>
<p>The classic design is a set of parallel baffles filled with mineral wool or glass fibre behind perforated metal. Sound enters the perforations and is converted to heat by friction in the fibres. Absorption is broadband and strongest from about 250 Hz to 2 kHz. Longer silencers and thicker baffles extend performance into the low bands.</p>
<h3>Packless silencers</h3>
<p>Packless units contain no fibrous fill. They rely on tuned cavities behind perforated facings (resonators) and on carefully shaped baffle geometry. Each cavity is tuned to absorb energy at certain frequencies. Because the tuning is narrower than fibre absorption, packless designs typically show less insertion loss in some bands and may need more length to match a dissipative unit.</p>
<h3>Film-lined silencers</h3>
<p>A film-lined silencer uses a fibrous fill wrapped in a thin polymer film, sometimes with a spacer between the film and the perforated metal to protect the film from abrasion. The film blocks fibre erosion and moisture uptake, but it reflects some high-frequency sound, which lowers insertion loss above about 1 kHz. Thicker films lose more.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Dissipative</th><th>Film-lined</th><th>Packless</th></tr></thead>
<tbody>
<tr><td>Low-frequency insertion loss (63 to 125 Hz)</td><td>Fair to good with length</td><td>Similar to dissipative</td><td>Generally lower; depends on tuning</td></tr>
<tr><td>Mid-frequency insertion loss (250 Hz to 1 kHz)</td><td>Best</td><td>Good</td><td>Good in tuned range</td></tr>
<tr><td>High-frequency insertion loss (2 to 8 kHz)</td><td>Good</td><td>Reduced by the film</td><td>Variable</td></tr>
<tr><td>Pressure drop for equal attenuation</td><td>Lowest</td><td>Slightly higher</td><td>Usually highest</td></tr>
<tr><td>Fibre in airstream</td><td>Possible erosion at high velocity</td><td>Contained by film</td><td>None</td></tr>
<tr><td>Cleanability</td><td>Poor; media cannot be washed</td><td>Moderate; film can be wiped if not torn</td><td>Good; metal surfaces</td></tr>
<tr><td>Moisture and microbial risk</td><td>Highest if wetted</td><td>Lower; film sheds water</td><td>Lowest</td></tr>
<tr><td>Typical applications</td><td>Offices, schools, general commercial</td><td>Healthcare non-critical areas, labs</td><td>Operating rooms, cleanrooms, pharma, food</td></tr>
</tbody>
</table>

<h2>Insertion loss versus pressure drop</h2>
<p>Insertion loss (IL) is the reduction in sound power at a point when the silencer is installed, measured per octave band. Manufacturers test IL, airflow-generated noise and pressure drop under ASTM E477. When comparing products, compare all three at the same face velocity and length.</p>
<p>Pressure drop rises with the square of velocity through the passages. Narrow airways with thick baffles give high IL but high pressure drop; open airways reduce pressure drop at the cost of IL. A silencer is effectively a small resistance in the system, so each 0.1 in. w.c. (25 Pa) of added drop costs fan energy for the life of the unit. A quick check of the trade:</p>
<p class="formula">Added fan kW ≈ CFM × ΔP (in. w.c.) ÷ (6356 × η) × 0.746</p>
<p>For 30,000 cfm, 0.25 in. w.c. extra and 60 percent fan-and-drive efficiency, that is 30,000 × 0.25 ÷ (6356 × 0.6) × 0.746 ≈ 1.5 kW, continuously, whenever the unit runs at design flow.</p>
<p class="note">Packless silencers often need 1.5 to 2 times the length of a dissipative unit to approach similar mid-band performance. Check that the space and pressure budget exist before specifying them by default.</p>

<h2>Self-noise and velocity limits</h2>
<p>All silencers generate some noise as air flows through them. At high passage velocities, that self-noise can exceed the noise the silencer is meant to remove, particularly at high frequencies downstream of the last fitting before a quiet room. Published generated-noise data are given against face velocity; keep the selection where self-noise is at least 10 dB below the attenuated level in each band.</p>
<p>High velocity also erodes unprotected fill. Dissipative silencers are commonly protected with erosion-resistant facings or are limited to moderate face velocities; check the manufacturer's limit.</p>

<h2>Hygiene and the healthcare question</h2>
<p>Facilities that require cleanable airstream surfaces, such as operating suites, cleanrooms and pharmaceutical production, often prohibit exposed fibrous materials downstream of final filters. That pushes designers toward packless or film-lined units in those locations. The same logic applies to the unit's inner panels; see <a href="<?= url('guides/solid-vs-perforated-liners') ?>">solid vs perforated liners</a>. Healthcare standards such as ASHRAE 170 and CSA Z317.2 address materials in airstreams; check the edition adopted in your jurisdiction for the exact wording.</p>
<p>A film-lined silencer is only as good as its film. Torn or punctured film exposes the fill and holds water. Specify a spacer or wire mesh between film and perforated metal, and inspect during commissioning.</p>

<h2>Choosing between them</h2>
<ol>
<li>List the octave-band reduction needed for each path from the room calculation; see <a href="<?= url('guides/room-sound-from-ahu-data') ?>">calculating room sound levels</a>.</li>
<li>Identify any hygiene rule that excludes fibre in that location.</li>
<li>Select the type that meets the required IL in every band within the available length.</li>
<li>Compare the pressure drop and lifetime fan energy of the options.</li>
<li>Confirm generated noise is well below the attenuated level.</li>
</ol>
<p>Silencers are only one tool. Moving energy to higher frequencies at the source, for example with a fan array, often reduces the silencer length needed; see <a href="<?= url('guides/fan-array-acoustics') ?>">why fan arrays change AHU acoustics</a>.</p>
<?php guide_end([
    ['Are packless silencers less effective than dissipative silencers?', 'For the same length and pressure drop, packless silencers usually provide less insertion loss, especially at low frequencies. They are chosen for hygiene rather than acoustic efficiency, and often need more length to meet the same target.'],
    ['Does the film in a film-lined silencer reduce attenuation?', 'Yes, mainly above about 1 kHz, because the film reflects some high-frequency sound before it reaches the fill. Low and mid-frequency performance is close to an unwrapped dissipative silencer.'],
    ['What test standard is used for duct silencers?', 'ASTM E477 is the common laboratory method for measuring duct silencer insertion loss, airflow-generated noise and pressure drop. Ask for data tested to it so different products can be compared on the same basis.'],
]);
