<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('motor-noise-carrier-frequency-troubleshooting'); ?>
<p class="lede">A steady high-pitched whine from a VFD-fed motor that stays at the same pitch as fan speed changes is almost always the drive's carrier (switching) frequency making the motor laminations vibrate. Raising the carrier frequency, enabling random or soft PWM, or adding an output filter usually cures it, but each has trade-offs in drive rating and motor stress.</p>

<h2>Where the whine comes from</h2>
<p>A PWM drive builds its output by switching the DC bus at a fixed carrier frequency, typically somewhere between about 2 kHz and 16 kHz depending on drive size and settings. The motor current follows the fundamental output frequency, but it carries a ripple at the carrier frequency and its sidebands. That ripple produces small, rapid changes in the magnetic forces in the stator steel. The laminations flex very slightly (magnetostriction and magnetic attraction between laminations and teeth), and the motor frame radiates the vibration as sound at the carrier frequency and related tones.</p>
<p>Human hearing is most sensitive in the low kilohertz range, so carriers of 2 to 4 kHz are often clearly audible as a whine or hiss. At higher carrier frequencies the tone moves toward the upper limit of hearing and becomes much less noticeable.</p>

<h2>First, confirm it is the drive</h2>
<p>Several noise sources sound similar. Separate them before changing anything.</p>
<table>
<thead><tr><th>Observation</th><th>Likely source</th><th>Covered in</th></tr></thead>
<tbody>
<tr><td>Pure tone that keeps the same pitch at every speed</td><td>Drive carrier frequency</td><td>This guide</td></tr>
<tr><td>Tone that rises and falls with speed</td><td>Fan blade-pass or motor slot harmonics</td><td><a href="<?= url('guides/fan-blade-pass-tonal-noise') ?>">Fan blade-pass tonal noise</a></td></tr>
<tr><td>Noise or vibration only at particular speeds</td><td>Structural resonance excited at that speed</td><td><a href="<?= url('guides/vfd-resonance-skip-frequencies') ?>">VFD resonance and skip frequencies</a></td></tr>
<tr><td>Noise continues with the drive stopped and the wheel coasting</td><td>Mechanical: bearings, wheel rub, belt</td><td>Mechanical diagnosis</td></tr>
<tr><td>Noise disappears in bypass at full speed</td><td>Drive-related (carrier or harmonics)</td><td>This guide</td></tr>
</tbody>
</table>

<h2>Symptom, cause, check, fix</h2>
<h3>Steady whine at all speeds, loudest at the motor</h3>
<p><strong>Cause:</strong> low carrier frequency setting.</p>
<p><strong>Check:</strong> read the carrier frequency parameter. Change it in steps (for example from 4 kHz to 8 kHz) and listen. If the pitch of the whine changes with the parameter, the source is confirmed.</p>
<p><strong>Fix:</strong> raise the carrier frequency to the lowest value that makes the noise acceptable. Check the drive's current derating at that carrier; a drive sized with no margin may need to go up a frame. Higher carrier frequency also increases drive losses slightly and increases the number of voltage edges per second at the motor, which raises bearing current and insulation stress.</p>

<h3>Whine changes pitch or gets louder when the drive gets warm</h3>
<p><strong>Cause:</strong> automatic carrier frequency reduction. Many drives lower their carrier when heatsink temperature or output current rises, to protect themselves.</p>
<p><strong>Check:</strong> look for a carrier "auto" or thermal foldback setting. Trend drive temperature and note whether the change coincides with high load or hot weather.</p>
<p><strong>Fix:</strong> improve drive cooling, upsize the drive, or set a fixed carrier with appropriate derating if the drive allows it.</p>

<h3>Tone audible in occupied space through ductwork or structure</h3>
<p><strong>Cause:</strong> motor vibration at carrier frequency transmitting through rigid mounts, the fan bulkhead or conduit.</p>
<p><strong>Check:</strong> confirm the fan isolation is free and not short-circuited, and that the motor conduit uses a flexible connection.</p>
<p><strong>Fix:</strong> correct isolation and flexible connections, then adjust carrier frequency.</p>

<h3>Raising the carrier is not possible or not enough</h3>
<p><strong>Options:</strong></p>
<ul>
<li><strong>Random or soft PWM:</strong> many drives can vary the carrier frequency randomly around a centre value. The tone spreads into broadband noise that is less irritating, without changing the average carrier.</li>
<li><strong>Sine wave output filter:</strong> an LC filter at the drive output that removes the carrier component, giving the motor a nearly sinusoidal voltage. It practically eliminates carrier noise and also reduces insulation stress, at the cost of size, heat and some voltage drop. The drive must be configured for the filter.</li>
<li><strong>Different motor:</strong> some motor designs are inherently quieter on drives because of lamination and frame construction.</li>
</ul>

<h3>Noise with several motors on one drive</h3>
<p><strong>Cause:</strong> in multi-motor applications the drive may be limited to a lower carrier to handle combined cable capacitance.</p>
<p><strong>Check:</strong> the drive manufacturer's limits for multi-motor carrier frequency and cable length.</p>
<p><strong>Fix:</strong> an output reactor or sine filter, or individual drives.</p>

<h2>Trade-offs of carrier frequency</h2>
<table>
<thead><tr><th>Lower carrier frequency</th><th>Higher carrier frequency</th></tr></thead>
<tbody>
<tr><td>More audible motor noise</td><td>Less audible motor noise</td></tr>
<tr><td>Lower drive switching losses; full current rating</td><td>Higher drive losses; may need derating</td></tr>
<tr><td>Fewer voltage pulses per second at the motor</td><td>More pulses: higher bearing current and insulation stress</td></tr>
<tr><td>More current ripple; slightly higher motor losses</td><td>Smoother current; slightly lower motor losses</td></tr>
<tr><td>Less radiated electrical noise</td><td>More electrical noise; cable shielding more important</td></tr>
</tbody>
</table>
<p>In practice, most fan installations settle somewhere in the middle of the drive's range. Start from the manufacturer's default, raise the carrier until the whine is no longer a complaint in the spaces that matter, and stop there. Pushing the carrier to its maximum when nobody can hear the difference only adds drive heat and motor stress.</p>
<p class="note">Record the final carrier frequency and any auto-reduction settings in the startup documentation, so a replacement drive can be set the same way.</p>
<?php guide_end([
    ['Why does my motor whine on a VFD?', 'The drive switches its output at a carrier frequency, often a few kilohertz. That switching ripple makes the motor laminations vibrate and radiate a tone at the carrier frequency.'],
    ['Does raising carrier frequency reduce motor noise?', 'Yes. Moving the carrier higher shifts the tone toward the upper limit of hearing. The drive may need derating, and the motor sees more voltage pulses per second.'],
    ['What is random PWM?', 'Random or soft PWM varies the carrier frequency around a centre value, spreading the tone into broadband noise that is less noticeable than a pure whine.'],
    ['Will a sine wave filter stop VFD motor noise?', 'A sine wave filter removes most of the carrier component from the drive output, so carrier-related motor noise largely disappears. It adds cost, size, heat and some voltage drop.'],
]);
