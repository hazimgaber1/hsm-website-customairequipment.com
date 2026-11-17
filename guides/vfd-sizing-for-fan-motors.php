<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('vfd-sizing-for-fan-motors'); ?>
<p class="lede">Size a fan VFD on current, not horsepower: its continuous output current rating, at the variable torque (normal duty) rating, must be at least the motor's nameplate full-load amps, after derating the drive for altitude, ambient temperature, enclosure and carrier frequency. For drives feeding several motors, add the motor currents and allow margin for starting.</p>

<h2>Why current is the right basis</h2>
<p>Drives are commonly sold by horsepower, but the horsepower label assumes a typical four-pole motor at a standard voltage. Motors of the same horsepower can draw quite different currents depending on pole count, efficiency, power factor and design. A six- or eight-pole motor of a given horsepower usually draws more current than a four-pole motor, and older or special motors can be well above the typical value. The drive's power semiconductors are limited by current and temperature, so the drive's output current rating is the number that must cover the motor.</p>

<h2>Variable torque versus constant torque ratings</h2>
<p>Most drives carry two ratings:</p>
<ul>
<li><strong>Normal duty (variable torque):</strong> a higher continuous current rating, with a short-term overload capability commonly around 110% for one minute. Suits centrifugal fans and pumps, whose torque falls with the square of speed.</li>
<li><strong>Heavy duty (constant torque):</strong> a lower continuous current rating for the same drive frame, with greater overload capability, commonly around 150% for one minute. Suits conveyors, positive displacement loads and machines with high breakaway torque.</li>
</ul>
<p>Centrifugal fans are a classic variable torque load, so the normal duty rating usually applies. Use heavy duty if the fan must accelerate a very high inertia wheel quickly, start into a windmilling wheel turning backward, or meet a specification that requires it.</p>

<h2>Step-by-step sizing</h2>
<ol>
<li><strong>Get the motor nameplate data.</strong> Full-load amps (FLA) at the supply voltage, horsepower, speed, service factor and voltage. If the motor is not yet chosen, use the manufacturer's data for the intended motor rather than code tables, which are for conductor sizing, not drive selection.</li>
<li><strong>Decide whether service factor current is needed.</strong> Fan motors on VFDs should not be relied upon to run into their service factor. If the fan's maximum brake horsepower exceeds nameplate, resize the motor rather than the drive. If an owner standard requires it, size the drive for service factor amps.</li>
<li><strong>Choose the duty rating.</strong> Normal duty for typical centrifugal fans.</li>
<li><strong>Apply derating factors from the drive manufacturer:</strong>
<ul>
<li><em>Altitude:</em> drives are usually rated up to about 1,000 m (3,300 ft); above that, current is derated because thinner air cools less effectively.</li>
<li><em>Ambient temperature:</em> ratings assume a maximum surrounding air temperature, often 40°C (104°F) for open or ventilated drives; higher ambients reduce allowable current.</li>
<li><em>Enclosure:</em> sealed enclosures such as NEMA 4X or 12 without ventilation may carry a lower rating than the same drive in NEMA 1.</li>
<li><em>Carrier frequency:</em> raising the switching frequency to reduce motor noise increases drive losses and often requires a derate.</li>
<li><em>Single-phase input:</em> feeding a three-phase drive from single-phase supply requires a large derate, often around half, per the manufacturer.</li>
</ul></li>
<li><strong>Calculate the required drive current.</strong> Divide motor FLA by the product of all derating factors.</li>
<li><strong>Select the drive</strong> whose normal duty continuous output current meets or exceeds the result at the supply voltage.</li>
<li><strong>Check input-side items.</strong> Input current, short-circuit current rating, required line reactors and the upstream protective device all follow from the selected drive.</li>
</ol>

<h2>Worked example</h2>
<p>A 30 hp, 1,770 rpm, 460 V supply fan motor has a nameplate FLA of 35.5 A. The drive will be in a NEMA 12 enclosure in an outdoor unit at about 1,830 m (6,000 ft), where the enclosure internal temperature can reach 45°C (113°F).</p>
<p>For this example, assume the drive manufacturer publishes:</p>
<ul>
<li>Altitude derate of 1% per 100 m above 1,000 m: (1,830 − 1,000) ÷ 100 = 8.3%, so factor 0.917.</li>
<li>Temperature derate for 45°C ambient: factor 0.90.</li>
<li>No additional derate for the default carrier frequency.</li>
</ul>
<p class="formula">Required drive current = 35.5 ÷ (0.917 × 0.90) = 35.5 ÷ 0.825 = 43.0 A</p>
<p>A drive nominally labelled 30 hp might be rated around 40 A normal duty, which falls short. The next frame up, perhaps labelled 40 hp with a rating around 52 A, is the correct selection. Use the actual ratings of the drive line being considered; those above are illustrative.</p>
<p class="note">Better cooling of the drive location often costs less than a larger drive. Ventilating or air-conditioning the enclosure can remove the temperature derate.</p>

<h2>Sizing a drive for several motors</h2>
<p>When one drive feeds several fan motors in an array, the drive must carry the sum of their full-load currents, after the same deratings. The drive cannot provide individual motor protection, so each motor needs its own overload device; that arrangement is covered in <a href="<?= url('guides/motor-overload-protection-multi-motor') ?>">how to protect multiple motors on a common VFD</a>. If any motor might be restarted while others are already running at speed, its inrush current adds to the drive load; many designers add margin or require that all motors start together from zero speed. Whether to use one drive or several is a separate comparison in <a href="<?= url('guides/single-vfd-vs-vfd-per-motor-fan-array') ?>">one VFD per fan vs a common VFD</a>.</p>

<h2>Things that do not change the drive size</h2>
<ul>
<li><strong>Fan brake horsepower below nameplate:</strong> the drive should still match the motor, since the motor may later be loaded more heavily.</li>
<li><strong>Bypass:</strong> an across-the-line bypass is sized for the motor, not the drive.</li>
<li><strong>Harmonic mitigation:</strong> filters and reactors are selected after the drive, and are covered in <a href="<?= url('guides/vfd-harmonics-ieee-519') ?>">VFD harmonics and IEEE 519</a>.</li>
</ul>
<?php guide_end([
    ['Should a VFD be sized by horsepower or current?', 'By current. The drive\'s continuous output current at the applicable duty rating must be at least the motor\'s full-load amps after derating. Horsepower labels assume typical motors and can mislead.'],
    ['Do fans need a heavy duty or normal duty VFD rating?', 'Centrifugal fans are variable torque loads, so the normal duty rating usually applies. Heavy duty is used for very high inertia wheels, starts into backward-rotating wheels, or where a specification requires it.'],
    ['How much should a VFD be derated for altitude?', 'Drives are typically rated up to about 1,000 m (3,300 ft). Above that, manufacturers publish a current derate, often around 1% per 100 m. Use the specific manufacturer\'s figure.'],
    ['Can one VFD run several fan motors?', 'Yes, if its current rating covers the sum of the motor currents after derating, and each motor has its own overload protection.'],
]);
