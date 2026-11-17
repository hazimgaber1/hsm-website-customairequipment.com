<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-balance-grades-iso-21940'); ?>
<p class="lede">A balance grade such as G6.3 or G2.5 sets how much residual unbalance a rotating wheel may keep after balancing, scaled to its mass and speed. ISO 21940-11 defines the grades, and AMCA 204 assigns them to fan application categories: G6.3 is typical for commercial HVAC fans, and G2.5 is the tighter grade often specified for critical or vibration-sensitive applications.</p>

<h2>What a balance grade measures</h2>
<p>No wheel is perfectly symmetrical. Variations in blade thickness, welds and hub fit put the centre of mass slightly off the axis of rotation. When the wheel spins, that offset creates a rotating force proportional to the mass, the offset and the square of speed. Balancing adds or removes small weights to bring the centre of mass back toward the axis.</p>
<p>The balance grade expresses the allowable result as a velocity: the eccentricity of the centre of mass multiplied by the angular speed. A wheel balanced to G6.3 has a permissible eccentricity times angular speed of 6.3 mm/s; G2.5 allows 2.5 mm/s. The lower the G number, the finer the balance.</p>
<p class="formula">G = e × ω &nbsp;&nbsp; e = eccentricity (mm), ω = angular speed (rad/s)</p>
<p>Because the grade is a velocity, faster wheels must be balanced more finely in absolute terms to meet the same grade. That is what makes the grade practical: one number applies across sizes and speeds.</p>

<h2>Turning a grade into a residual unbalance limit</h2>
<p>Balancing machines measure unbalance in gram-millimetres (or ounce-inches). ISO 21940-11 gives the permissible residual unbalance:</p>
<p class="formula">U(per) (g·mm) = 9549 × G × M ÷ n</p>
<p>M is rotor mass in kg and n is the service speed in rpm. For a two-plane balance, the permissible value is split between the two correction planes according to the rotor geometry.</p>
<h3>Worked example</h3>
<p>A plenum fan wheel weighs 45 kg (99 lb) and runs at a maximum of 1,750 rpm.</p>
<ul>
<li>At G6.3: U = 9549 × 6.3 × 45 ÷ 1,750 = <strong>1,547 g·mm</strong>. At a correction radius of 400 mm, that is about 3.9 g of residual unbalance.</li>
<li>At G2.5: U = 9549 × 2.5 × 45 ÷ 1,750 = <strong>614 g·mm</strong>, or about 1.5 g at 400 mm.</li>
<li>Permissible eccentricity at G6.3: ω = 1,750 × 2π ÷ 60 = 183 rad/s, so e = 6.3 ÷ 183 = 0.034 mm (34 µm).</li>
</ul>
<p>Moving from G6.3 to G2.5 reduces allowable unbalance by a factor of 2.5. It takes more balancing time and a more accurate balancing machine, but it lowers the once-per-revolution force the bearings and structure see.</p>
<p class="note">Balance is specified at the maximum service speed. A wheel that will run faster in failure mode or at a raised VFD limit should be balanced for that speed.</p>

<h2>AMCA 204 fan application categories</h2>
<p>AMCA 204, which aligns with ISO 14694, groups fans into balance and vibration categories according to application and assigns a balance grade to each. The categories commonly referenced for air handling are:</p>
<table>
<thead><tr><th>Category</th><th>Typical application</th><th>Balance grade</th></tr></thead>
<tbody>
<tr><td>BV-3</td><td>Commercial and general HVAC fans, most air handlers</td><td>G6.3</td></tr>
<tr><td>BV-4</td><td>Critical or vibration-sensitive applications, larger or higher-power fans, some process and cleanroom duties</td><td>G2.5</td></tr>
</tbody>
</table>
<p>Lower and higher categories exist for residential, agricultural and very high precision applications. Check the edition of AMCA 204 referenced in the project specification for the exact category definitions and the associated factory vibration limits.</p>

<h2>Wheel balance versus assembled fan vibration</h2>
<p>Balancing the wheel alone on a balancing machine is component balance. It does not guarantee low vibration once the wheel is mounted on a motor or shaft, because the hub fit, shaft runout, motor rotor balance and bearing condition all contribute. Good factory practice therefore includes:</p>
<ol>
<li><strong>Component balance</strong> of the wheel to the specified grade, single-plane or two-plane depending on its width-to-diameter ratio.</li>
<li><strong>Assembly trim balance</strong> with the wheel mounted on its motor or shaft, correcting the residual unbalance of the complete rotating assembly.</li>
<li><strong>Run testing</strong> of the assembled fan, measuring vibration velocity at the bearings across the operating speed range to confirm there are no resonances.</li>
</ol>
<p>Custom Air Equipment run-tests its units in the factory, and owners can arrange to witness those tests. A witnessed run test is a good place to confirm fan vibration readings before shipment; see <a href="<?= url('guides/factory-witness-testing') ?>">factory witness testing</a>.</p>

<h2>Why the factory number differs from the field number</h2>
<p>Factory vibration readings are taken on a rigid test stand or the unit base with known support. In the field, the fan sits on isolators, the unit sits on a curb or dunnage, and ductwork connects to it. Each changes the dynamic response. Shipping can also disturb a wheel's position on its shaft. A fan that left the factory well within its limits can read higher in the field without anything being wrong with its balance.</p>
<p>Field acceptance limits for installed fans are a separate subject, covered in <a href="<?= url('guides/vibration-severity-iso-10816') ?>">vibration severity and ISO 10816</a>. Startup checks for rotation and vibration are in <a href="<?= url('guides/fan-startup-rotation-vibration') ?>">fan startup rotation and vibration</a>.</p>

<h2>Specifying balance</h2>
<ul>
<li>State the balance grade (for example, "G2.5 per ISO 21940-11") or the AMCA 204 category.</li>
<li>Require balance at maximum operating speed, including failure-mode speed for arrays.</li>
<li>Require trim balance of the assembled rotating element, not only the wheel.</li>
<li>Ask for a balance report or run test record with each fan.</li>
</ul>
<?php guide_end([
    ['What does G6.3 balance mean?', 'It means the product of the wheel\'s residual centre-of-mass eccentricity and its angular speed is no more than 6.3 mm/s. It is the typical balance grade for commercial HVAC fans.'],
    ['When should I specify G2.5 instead of G6.3?', 'G2.5 is commonly specified for critical applications, vibration-sensitive buildings, larger or higher-power fans and some process duties where lower vibration is worth the extra balancing effort.'],
    ['What replaced ISO 1940-1?', 'ISO 21940-11 replaced ISO 1940-1 for balance quality requirements of rotors in a constant rigid state. The G grade system carried over.'],
    ['Does factory balancing guarantee low field vibration?', 'No. Field vibration also depends on isolators, supports, ductwork connections and any shift during shipping. Factory balancing gives a good starting point that should be confirmed at startup.'],
]);
