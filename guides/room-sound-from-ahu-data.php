<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('room-sound-from-ahu-data'); ?>
<p class="lede">To predict the sound level in a room, start with the AHU's octave-band sound power at the relevant opening, subtract the attenuation of every element along the path, then convert the sound power entering the room into sound pressure at the listener. Repeat for every path and band, add the results on an energy basis, and compare with the room criterion.</p>

<h2>The procedure in outline</h2>
<ol>
<li>Pick the critical room on each path, usually the one nearest the unit with the least attenuation.</li>
<li>Take unit sound power (Lw) by octave band for the opening feeding that path: discharge for supply, inlet for return.</li>
<li>Subtract attenuation elements in order: silencers, lined and unlined duct, elbows, branch power division, terminal units, end reflection at the outlet.</li>
<li>Add any sound generated along the path, such as terminal unit and damper noise, on an energy basis.</li>
<li>Convert the sound power leaving the diffuser into room sound pressure (Lp).</li>
<li>Combine diffusers and paths serving the room, then compare each band with the criterion curve.</li>
</ol>
<p>This guide assumes you already understand the difference between Lw and Lp and how octave-band data is reported; if not, start with <a href="<?= url('guides/sound-power-vs-sound-pressure') ?>">sound power vs sound pressure</a>.</p>

<h2>Attenuation elements and where values come from</h2>
<table>
<thead><tr><th>Element</th><th>How to estimate it</th><th>Behaviour</th></tr></thead>
<tbody>
<tr><td>Duct silencer</td><td>Manufacturer insertion loss by band, tested to ASTM E477</td><td>Strong at mid frequencies, weaker at 63 Hz</td></tr>
<tr><td>Lined straight duct</td><td>ASHRAE Applications Handbook tables by size, liner thickness and length</td><td>Rises sharply with frequency</td></tr>
<tr><td>Unlined duct</td><td>ASHRAE tables; small values, mostly low frequency for rectangular duct</td><td>Small</td></tr>
<tr><td>Elbows</td><td>ASHRAE tables for lined and unlined, with and without turning vanes</td><td>Depends on duct width versus wavelength</td></tr>
<tr><td>Branch power split</td><td>10 log10(Q branch ÷ Q total)</td><td>Same in all bands</td></tr>
<tr><td>End reflection</td><td>ASHRAE tables by outlet size and termination</td><td>Large at low frequencies, small outlets reflect more</td></tr>
<tr><td>Terminal unit</td><td>AHRI 880 data for discharge and radiated sound, plus its attenuation</td><td>Adds its own noise</td></tr>
</tbody>
</table>
<p class="note">Duct elements can also regenerate noise when velocities are high. Check that air velocity in the last few metres before a quiet room is low enough that fittings do not add more sound than they remove.</p>

<h2>Converting sound power to room sound pressure</h2>
<p>For typical rooms with distributed absorption, ASHRAE's simplified room equation (based on work by Schultz) is convenient:</p>
<p class="formula">Lp = Lw − 10 log10(V) − 5 log10(f) − 3 log10(r) + 25</p>
<p>where V is room volume in ft³, f is the octave-band centre frequency in Hz, and r is the distance from the outlet to the listener in ft. For multiple diffusers, calculate each, or for an array of ceiling outlets use the distributed-array form in the Handbook. Highly reverberant or highly absorptive rooms need the classical room-constant method.</p>

<h2>Worked example: supply path to a private office</h2>
<p>A unit delivers 20,000 cfm. The first office takes 1,000 cfm through one ceiling diffuser. The room is 20 ft × 15 ft × 9 ft (V = 2,700 ft³) and the listener is 5 ft from the diffuser. The attenuation values below are illustrative of the kind of numbers you would read from manufacturer data and ASHRAE tables; use the real values for your duct sizes and components.</p>
<table>
<thead><tr><th>Step</th><th>63 Hz</th><th>125 Hz</th><th>250 Hz</th><th>500 Hz</th></tr></thead>
<tbody>
<tr><td>Discharge Lw</td><td>94</td><td>92</td><td>91</td><td>88</td></tr>
<tr><td>Silencer insertion loss</td><td>−6</td><td>−12</td><td>−20</td><td>−28</td></tr>
<tr><td>Lined duct run</td><td>−1</td><td>−2</td><td>−4</td><td>−8</td></tr>
<tr><td>Elbows</td><td>0</td><td>−1</td><td>−2</td><td>−3</td></tr>
<tr><td>Branch split, 10 log(1,000 ÷ 20,000)</td><td>−13</td><td>−13</td><td>−13</td><td>−13</td></tr>
<tr><td>End reflection</td><td>−12</td><td>−7</td><td>−3</td><td>−1</td></tr>
<tr><td><strong>Lw into room</strong></td><td><strong>62</strong></td><td><strong>57</strong></td><td><strong>49</strong></td><td><strong>35</strong></td></tr>
<tr><td>−10 log V (V = 2,700)</td><td>−34.3</td><td>−34.3</td><td>−34.3</td><td>−34.3</td></tr>
<tr><td>−5 log f</td><td>−9.0</td><td>−10.5</td><td>−12.0</td><td>−13.5</td></tr>
<tr><td>−3 log r (r = 5)</td><td>−2.1</td><td>−2.1</td><td>−2.1</td><td>−2.1</td></tr>
<tr><td>+25</td><td>+25</td><td>+25</td><td>+25</td><td>+25</td></tr>
<tr><td><strong>Room Lp</strong></td><td><strong>41.6</strong></td><td><strong>35.1</strong></td><td><strong>25.6</strong></td><td><strong>10.1</strong></td></tr>
</tbody>
</table>
<p>Notice that the branch split is the largest single attenuation in the low bands. A room taking a bigger share of the airflow, such as a large conference room on the first branch, receives proportionally more sound power, which is why the critical room is often not the smallest one.</p>
<p>The NC-30 curve allows roughly 57, 48, 41 and 35 dB in these four bands, so this path alone sits comfortably below NC-30. The 63 Hz band is closest to its limit relative to the other bands, which is typical: silencers and lining do little there, and the room is protected mainly by branch division and end reflection.</p>

<h2>Completing the analysis</h2>
<p>A single path rarely tells the whole story. Before declaring a room compliant:</p>
<ul>
<li><strong>Add terminal unit noise.</strong> A VAV box in the ceiling of the same office may contribute more than the AHU. Add its discharge and radiated contributions per AHRI 885 methods.</li>
<li><strong>Add the return path.</strong> Run the same steps from the inlet Lw through the return to the return grille.</li>
<li><strong>Check breakout and casing paths</strong> if ducts pass overhead or the room shares a wall with the mechanical room; see <a href="<?= url('guides/casing-transmission-loss') ?>">casing transmission loss and breakout</a>.</li>
<li><strong>Sum the paths</strong> in each band using logarithmic addition, then find the rating against the chosen criterion.</li>
<li><strong>Add a margin</strong> for data uncertainty. Many acousticians design several decibels under the criterion, especially at 63 and 125 Hz where predictions are least certain.</li>
</ul>
<p>If the result fails, the cheapest fixes are usually at the source (a quieter fan selection, lower tip speed, or a fan array) or in the first few duct elements. Silencer options are compared in <a href="<?= url('guides/dissipative-vs-packless-silencers') ?>">dissipative vs packless silencers</a>.</p>
<?php guide_end([
    ['How do I convert AHU sound power to room NC?', 'Subtract all path attenuation from the unit sound power in each octave band, convert the result to room sound pressure using a room equation, add all paths and terminal noise, then find the lowest NC curve that every band stays below.'],
    ['What is end reflection in duct acoustics?', 'When a duct opens into a large room, part of the low-frequency sound reflects back up the duct instead of entering the room. Small outlets reflect more. It can provide significant attenuation at 63 and 125 Hz.'],
    ['Why is 63 Hz often the hardest band to meet?', 'Silencers, liners and elbows attenuate low frequencies poorly, while fans produce a lot of low-frequency energy. Branch division and end reflection help, but often the real fix is a quieter source or lower duct velocity.'],
]);
