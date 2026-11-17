<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('wheel-drive-seal-troubleshooting'); ?>
<p class="lede">Most wheel mechanical failures fall into three groups: the wheel is not turning, it turns but at the wrong speed because the belt is slipping, or its seals are worn and leaking. Work through each symptom from the simplest cause (no command or power) to the hardest (bearing or rim damage) before replacing parts.</p>

<h2>Before you start</h2>
<p>Lock out and tag out the wheel motor and the supply and exhaust fans before opening access doors. A wheel has enough mass to injure fingers even at low speed, and fans can start remotely. Note the wheel's nameplate data, the drive type (constant speed motor, VFD or EC motor) and the belt type (link belt, endless V-belt or toothed) so you can compare with the manufacturer's literature.</p>

<h2>Symptom: wheel not turning</h2>
<table>
<thead><tr><th>Cause</th><th>Check</th><th>Fix</th></tr></thead>
<tbody>
<tr><td>No run command</td><td>BAS output and point status; look for economizer or frost logic holding the wheel off</td><td>Correct sequence or override; confirm intended mode</td></tr>
<tr><td>Drive faulted or tripped</td><td>VFD or controller fault code; motor overload</td><td>Clear per manufacturer, then find the root cause before restarting</td></tr>
<tr><td>Motor failed</td><td>Voltage at motor terminals, winding resistance, insulation test</td><td>Replace motor with matching frame, speed and shaft</td></tr>
<tr><td>Belt broken or off pulley</td><td>Visual inspection at the rim</td><td>Replace belt; find why it failed (misalignment, worn pulley, wheel binding)</td></tr>
<tr><td>Wheel binding on seals</td><td>Rotate by hand with power locked out; feel for tight spots</td><td>Adjust or replace seals; check for frame distortion</td></tr>
<tr><td>Ice or debris jamming the wheel</td><td>Inspect both faces, especially the bottom of the cassette</td><td>Thaw or clear; fix frost control or filtration</td></tr>
<tr><td>Bearing seized</td><td>Hand rotation stiff throughout; noise when running</td><td>Replace bearing per manufacturer procedure</td></tr>
</tbody>
</table>
<p class="note">A wheel that stops without an alarm wastes recovery for months. Add a rotation sensor (a proximity switch reading a target on the rim or hub) and alarm on loss of rotation when the wheel is commanded on.</p>

<h2>Symptom: wheel turning slowly or erratically</h2>
<ol>
<li><strong>Measure the actual speed.</strong> Count revolutions against a mark on the rim for one minute, or use a hand tachometer. Compare with the speed commanded and the design speed. Most enthalpy wheels run somewhere in the 10 to 60 rpm range at full speed; check the manufacturer's value.</li>
<li><strong>If the motor pulley is turning at the right speed but the wheel lags,</strong> the belt is slipping. Check tension. Link belts stretch in the first weeks of operation and need a link removed. Spring-tensioned motor bases may have lost travel.</li>
<li><strong>Inspect the belt for glazing, cracking or oil contamination.</strong> A glazed belt slips even at correct tension. Replace it.</li>
<li><strong>Check the rim.</strong> The belt runs on the outer rim of the wheel. Dents, weld spatter or a damaged rim cause the belt to ride up or jump.</li>
<li><strong>Check the drive pulley</strong> for wear and set-screw tightness.</li>
<li><strong>If the motor itself is slow,</strong> check the VFD frequency command, the speed control signal, and any frost control or economizer logic that is intentionally reducing speed.</li>
<li><strong>Erratic speed with steady command</strong> often means intermittent binding. Look for a seal dragging at one point in the rotation or a wheel that is out of plane.</li>
</ol>

<h2>Symptom: seal wear and leakage</h2>
<h3>Signs</h3>
<ul>
<li>Higher than expected outdoor air correction factor, or exhaust odour noticeable in the supply.</li>
<li>Visible gaps between the seal and the wheel face, or light visible through the seal line when one side is illuminated.</li>
<li>Seal material that is torn, flattened, missing in sections, or melted where the wheel has rubbed.</li>
<li>Audible whistling at the seal at high pressure differential.</li>
</ul>
<h3>Causes</h3>
<ul>
<li>Normal wear over years of rotation, especially for brush or contact seals.</li>
<li>Wheel face out of plane or wobbling, so the seal sees varying clearance.</li>
<li>High pressure differential across the seals, which increases leakage through any gap and can deflect seal lips.</li>
<li>Seals adjusted too tight, which increases drive load and accelerates wear.</li>
</ul>
<h3>Fix</h3>
<ol>
<li>Measure the wheel's face runout by setting a fixed pointer near the face and rotating by hand. Compare with the manufacturer's allowable runout.</li>
<li>If runout is excessive, check hub bearings, cassette frame squareness and bolt tightness before touching the seals.</li>
<li>Replace perimeter and diameter seals with the manufacturer's type. Set clearance according to instructions; many seals are designed to lightly contact or nearly contact the face.</li>
<li>Hand-rotate a full turn to confirm no binding, then run and recheck belt tension, since seal drag affects the drive.</li>
<li>Review the pressure differential between supply and exhaust; reducing it lowers seal leakage. The leakage metrics this affects are explained in <a href="<?= url('guides/eatr-oacf-wheel-leakage') ?>">EATR and OACF</a>.</li>
</ol>

<h2>Symptom: noise or vibration</h2>
<ul>
<li><strong>Rhythmic thump once per revolution:</strong> a flat spot on the belt, a damaged rim, or a seal catching at one point.</li>
<li><strong>Continuous grinding:</strong> bearing failure. Stop the wheel and inspect.</li>
<li><strong>Squeal at startup:</strong> belt slipping under the inertia of the wheel. Retension or check for binding.</li>
<li><strong>Rattle:</strong> loose segment retainers on segmented wheels, or debris in the flutes.</li>
</ul>

<h2>Preventive measures</h2>
<ul>
<li>Check belt tension at one month after startup and at each scheduled maintenance visit afterwards.</li>
<li>Inspect seals and measure runout annually.</li>
<li>Keep a spare belt and seal kit on site for wheels that serve critical spaces.</li>
<li>Trend wheel speed feedback and alarm on deviation from command.</li>
</ul>
<p>If the wheel turns correctly and seals are sound but recovery is still poor, the cause lies elsewhere; see <a href="<?= url('guides/low-recovery-effectiveness-diagnosis') ?>">diagnosing low energy recovery effectiveness</a>. Lockout practice is covered in <a href="<?= url('guides/lockout-tagout-ahu-service') ?>">lockout/tagout for AHU service</a>.</p>
<?php guide_end([
    ['Why is my energy recovery wheel not turning?', 'Common causes are no run command from the controls, a tripped drive or motor overload, a broken belt, a jammed or iced wheel, or seized bearings. Lock out power and rotate the wheel by hand to separate drive problems from binding.'],
    ['How do I know if the wheel belt is slipping?', 'Measure the actual wheel speed by counting revolutions against a rim mark and compare it with the motor and pulley speed. If the motor runs at the right speed and the wheel lags, the belt needs tension or replacement.'],
    ['How often should energy wheel seals be replaced?', 'There is no fixed interval. Inspect them annually and replace them when they are torn, flattened or leave visible gaps. Check wheel face runout first, since a wobbling wheel wears seals quickly.'],
]);
