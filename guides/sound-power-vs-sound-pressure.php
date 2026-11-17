<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('sound-power-vs-sound-pressure'); ?>
<p class="lede">Sound power (Lw) is the acoustic energy a source emits, independent of where you stand; sound pressure (Lp) is what a microphone or ear measures at one spot, and it depends on distance, the room and every other source nearby. Manufacturers publish sound power because it is the only number that describes the equipment rather than the test room.</p>

<h2>Two quantities that share a unit but not a meaning</h2>
<p>Both are expressed in decibels, which is where most confusion starts. A decibel is a logarithmic ratio against a reference, and the reference differs:</p>
<ul>
<li><strong>Sound power level:</strong> Lw = 10 log10(W ÷ W0), with W0 = 10^-12 watts (1 picowatt).</li>
<li><strong>Sound pressure level:</strong> Lp = 20 log10(p ÷ p0), with p0 = 20 micropascals, roughly the threshold of hearing at 1 kHz.</li>
</ul>
<p>An analogy that holds up well: sound power is the wattage of a heater; sound pressure is the temperature you feel in one corner of the room. The heater's rating does not change when you move it to a bigger room, but the temperature at your chair does. Likewise, a fan with 90 dB sound power in the 250 Hz band will produce very different pressure levels in a small concrete equipment room than in an open warehouse.</p>
<p>Because the multiplier is 10 for power and 20 for pressure, a doubling of power adds 3 dB, while a doubling of pressure adds 6 dB. Those are the same physical event viewed through two different quantities, since acoustic intensity is proportional to pressure squared.</p>

<h2>Getting from Lw to Lp</h2>
<p>To predict pressure at a listener you need the source's power plus information about the path. For a small source in a free field (outdoors, no reflections), the relationship is:</p>
<p class="formula">Lp = Lw − 20 log10(r) − 11 dB   (r in metres, free field, spherical spreading)</p>
<p>For r in feet the constant becomes about −0.5 dB instead of −11 dB. Each doubling of distance outdoors lowers Lp by 6 dB. Place the source on a hard surface (a roof deck or grade) and the energy radiates into a hemisphere instead of a sphere, so add about 3 dB.</p>
<p>Indoors, reflections build a reverberant field that stops falling off with distance once you are a few feet from the source. The level in that field depends on the room's absorption. That is why the same unit can sound acceptable in a mechanical room lined with absorptive panels and harsh in a bare block room. The full duct-and-room procedure is covered in <a href="<?= url('guides/room-sound-from-ahu-data') ?>">calculating room sound levels from AHU sound data</a>.</p>

<h2>Decibel addition without a calculator</h2>
<p>Decibels from separate, uncorrelated sources do not add arithmetically. Convert to energy, add, then convert back:</p>
<p class="formula">Ltotal = 10 log10(10^(L1/10) + 10^(L2/10) + … )</p>
<p>That rule applies to sound power levels and to sound pressure levels at one point. Some shortcuts every engineer should carry:</p>
<table>
<thead><tr><th>Difference between two levels</th><th>Add to the higher level</th></tr></thead>
<tbody>
<tr><td>0 dB</td><td>3 dB</td></tr>
<tr><td>1 dB</td><td>2.5 dB</td></tr>
<tr><td>2 to 3 dB</td><td>2 dB</td></tr>
<tr><td>4 to 9 dB</td><td>1 dB</td></tr>
<tr><td>10 dB or more</td><td>0 dB</td></tr>
</tbody>
</table>
<p>Worked example: a supply fan section has 88 dB Lw in the 125 Hz band and a second identical fan is added in parallel. The pair produces 91 dB, not 176 dB. Add a third source at 80 dB and the total barely moves (about 91.6 dB). Ten identical sources add 10 dB; that relationship, Lw total = Lw single + 10 log10(N), is the starting point for any multi-fan estimate.</p>
<p class="note">The quieter source only matters if it is within about 10 dB of the louder one. When you are hunting for a noise problem, chase the loudest band and loudest path first; fixing a source 10 dB down yields almost nothing.</p>

<h2>Why manufacturers publish sound power</h2>
<p>A pressure reading only describes the test room and microphone position. Ask three vendors for "dBA at 5 feet" and you get three numbers measured in three rooms, none of which resemble your mechanical room. Sound power, by contrast, can be measured in a reverberant or anechoic test facility (or by intensity scanning) and then transferred to any project by the design acoustician.</p>
<p>Test standards are built around this idea. AMCA 300 covers fan sound power in a reverberant room, and AMCA 301 covers the method for calculating fan sound ratings from those tests. For complete air-handling units, AHRI 260 defines how ducted equipment sound power is measured and reported; see <a href="<?= url('guides/ahri-260-sound-ratings') ?>">AHRI 260 sound ratings</a> for the details. In each case the output is Lw in octave bands, usually 63 Hz through 8 kHz.</p>
<p>When a submittal lists only a single dBA pressure number, treat it as a red flag. You cannot reliably convert it back to octave-band power, you do not know the room it was measured in, and you cannot run a path analysis with it.</p>

<h2>Common mistakes when reading sound data</h2>
<ul>
<li><strong>Comparing Lw to a room criterion directly.</strong> NC and RC curves are pressure-based. A 75 dB Lw is not "louder than NC-35" in any meaningful way until it is pushed through the path. For choosing the criterion itself, see <a href="<?= url('guides/nc-vs-rc-vs-dba-criteria') ?>">NC vs RC vs dBA</a>.</li>
<li><strong>Averaging decibels arithmetically.</strong> The average of 70 and 80 dB is not 75 dB in energy terms; it is about 77.4 dB.</li>
<li><strong>Mixing reference values.</strong> Some older literature references sound power to 10^-13 W, which shifts every number by 10 dB. Confirm the reference before comparing tables.</li>
<li><strong>Ignoring which opening the data describes.</strong> Inlet, discharge and casing-radiated levels are separate data sets; the meaning of each is in <a href="<?= url('guides/octave-band-sound-data') ?>">reading AHU octave band sound data</a>.</li>
</ul>
<p>If you are comparing units for a noise-sensitive job, ask for unweighted octave-band sound power for each opening at the scheduled operating point. Custom Air Equipment can provide that data with selections and offers factory witness testing for projects where the numbers need confirming; you can <a href="<?= url('contact') ?>">request it with a quote</a>.</p>
<?php guide_end([
    ['Is sound power or sound pressure louder?', 'Neither; they measure different things. Sound power describes the energy the source emits, while sound pressure describes the level at a particular point. For a typical mechanical room, the pressure level near the unit is usually several decibels below the published sound power, but it depends on distance and room absorption.'],
    ['How many decibels do two identical fans add?', 'Two identical uncorrelated sources add 3 dB. Four add 6 dB and ten add 10 dB. The formula is 10 times the log of the number of sources.'],
    ['Can I convert a dBA rating back into octave-band sound power?', 'Not reliably. A single A-weighted pressure number hides the spectrum shape, the measurement distance and the room. Ask the manufacturer for unweighted octave-band sound power for each opening instead.'],
]);
