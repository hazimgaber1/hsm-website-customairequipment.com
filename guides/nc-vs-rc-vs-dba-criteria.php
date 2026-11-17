<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('nc-vs-rc-vs-dba-criteria'); ?>
<p class="lede">NC is the most familiar room noise rating and works for routine offices, RC (or RC Mark II) is better when the spectrum shape and sound quality matter, and dBA is a convenient single number that should be reserved for simple or outdoor cases. Pick the criterion first, because it decides which bands your attenuation design has to chase.</p>

<h2>What each criterion actually measures</h2>
<p><strong>dBA</strong> is an A-weighted overall sound pressure level. It sums all frequencies after reducing the low bands to mimic hearing at moderate levels. It is easy to measure with any basic meter, and that is both its strength and its weakness: two rooms can read the same dBA while one has an obvious rumble and the other a gentle hiss.</p>
<p><strong>NC (Noise Criteria)</strong> is a family of curves plotted across octave bands. A room's NC rating is the lowest curve that the measured spectrum does not exceed in any band. Because it uses a tangency method, NC tells you the level of the worst band but not whether the spectrum is balanced. Current NC curves extend down to 63 Hz; older versions started higher, which is one reason NC can underrate rumble.</p>
<p><strong>RC (Room Criteria)</strong>, and its revised form RC Mark II, rates a spectrum on two counts: a numerical level based on the speech-frequency bands, and a quality descriptor that flags whether the sound is neutral (N), rumbly (R), hissy (H), tonal (T) or likely to cause perceptible vibration in lightweight construction. That quality judgement is the main reason to choose RC.</p>
<p>Other ratings you may meet include NCB (Balanced Noise Criteria), which adds low-frequency checks to NC, and the RNC method in some ANSI documents. They are less common on HVAC specifications, but they follow the same idea of adding spectral balance to a single rating.</p>

<h2>Side-by-side comparison</h2>
<table>
<thead><tr><th>Feature</th><th>dBA</th><th>NC</th><th>RC / RC Mark II</th></tr></thead>
<tbody>
<tr><td>Output</td><td>One number</td><td>One number (curve index)</td><td>Number plus quality letter</td></tr>
<tr><td>Frequency detail used</td><td>All bands, weighted and summed</td><td>Worst band against curve</td><td>Speech bands for level, low and high bands for quality</td></tr>
<tr><td>Detects rumble</td><td>Poorly</td><td>Partly, if 63 Hz is included</td><td>Yes, flags "R"</td></tr>
<tr><td>Detects hiss</td><td>Somewhat</td><td>Only if a high band exceeds the curve</td><td>Yes, flags "H"</td></tr>
<tr><td>Ease of field measurement</td><td>Very easy</td><td>Needs octave-band meter</td><td>Needs octave-band meter and analysis</td></tr>
<tr><td>Familiar to owners</td><td>High</td><td>High</td><td>Moderate</td></tr>
<tr><td>Best use</td><td>Outdoor limits, quick checks, industrial spaces</td><td>General commercial specs</td><td>Sensitive spaces where sound quality matters</td></tr>
</tbody>
</table>

<h2>Matching the criterion to the space</h2>
<p>ASHRAE's Applications Handbook (Noise and Vibration Control chapter) publishes recommended design ranges by space type, and those values are the usual starting point. Rather than repeating them, here is how the choice of rating method usually falls:</p>
<ul>
<li><strong>Private and open offices, classrooms, retail:</strong> NC is widely understood and enforceable. If the design uses large central fans or fan arrays near the space, consider adding a low-frequency limit or using RC to catch rumble.</li>
<li><strong>Concert halls, recording studios, theatres, courtrooms, worship spaces:</strong> use RC Mark II or a criterion the acoustician specifies, with octave-band limits at 31.5 and 63 Hz. Quality matters more than one level, and a tonal or rumbly ventilation system will be noticed.</li>
<li><strong>Hospitals and patient rooms:</strong> NC or RC are both used. Speech privacy and sleep disturbance push designers toward a balanced spectrum, so RC quality descriptors are useful.</li>
<li><strong>Industrial plants, warehouses, kitchens:</strong> dBA is often adequate and ties directly to occupational exposure rules.</li>
<li><strong>Outdoor and property-line limits:</strong> municipal bylaws are nearly always written in dBA (sometimes with a tonal penalty), so use dBA there; see <a href="<?= url('guides/property-line-noise-limits') ?>">meeting property-line noise limits</a>.</li>
<li><strong>Schools:</strong> classroom acoustics standards set specific background limits; the education-sector guide <a href="<?= url('guides/school-acoustics-ansi-s12-60') ?>">school acoustics and ANSI S12.60</a> covers that case.</li>
</ul>
<p class="note">A design target and a field acceptance test can use different methods. It is common to design to NC by octave band and verify with both NC and dBA readings so that owners have a familiar number.</p>

<h2>How the choice changes AHU design</h2>
<p>The criterion is not just paperwork. It shifts where effort goes:</p>
<ol>
<li><strong>An NC target</strong> typically makes the 125 to 500 Hz bands govern for supply paths, because that is where fan spectra meet the curves. Standard dissipative silencers work well there.</li>
<li><strong>An RC Mark II target with a neutral spectrum</strong> requires controlling the 31.5 to 125 Hz bands as well. That may mean more casing mass, longer silencers, lower duct velocities and lower fan tip speeds, or choosing a fan array whose energy sits higher in frequency (see <a href="<?= url('guides/fan-array-acoustics') ?>">why fan arrays change AHU acoustics</a>).</li>
<li><strong>A dBA target</strong> can be met while leaving low-frequency energy uncontrolled. That is acceptable in a factory, but it can produce complaints in an office even though the meter reading passes.</li>
</ol>

<h2>Writing the criterion into a specification</h2>
<p>State the criterion, the method, and where it applies. Vague wording such as "system shall be quiet" or "NC-35 maximum" without a location invites argument. Better practice:</p>
<ul>
<li>Name the rating method and its source document, and say which edition the project follows.</li>
<li>List the rooms or room types and the target for each.</li>
<li>State the measurement condition: HVAC operating at design airflow, other sources off, measured at a defined height and distance from diffusers.</li>
<li>Where low frequencies matter, add explicit octave-band limits at 63 Hz (and 31.5 Hz if relevant).</li>
</ul>
<p>Once the criterion is fixed, the next step is the path calculation that shows whether the selected unit and attenuation will meet it, covered in <a href="<?= url('guides/room-sound-from-ahu-data') ?>">calculating room sound levels from AHU sound data</a>.</p>
<?php guide_end([
    ['Is NC 35 the same as 35 dBA?', 'No. They are different methods and do not convert exactly. For a typical HVAC spectrum, the dBA reading is often several points higher than the NC rating, but the gap depends on spectrum shape, so do not substitute one for the other in a specification.'],
    ['When should I use RC instead of NC?', 'Use RC or RC Mark II when sound quality matters, such as performance spaces, sensitive meeting rooms and healthcare. RC flags rumble, hiss and tones that NC can miss, so the room sounds neutral rather than just meeting a level.'],
    ['Why do property-line noise limits use dBA?', 'Municipal bylaws are written for simple measurement with a standard sound level meter, and A-weighting approximates human hearing at typical outdoor levels. Many bylaws also add penalties for tonal or impulsive sound, so check the local wording.'],
]);
