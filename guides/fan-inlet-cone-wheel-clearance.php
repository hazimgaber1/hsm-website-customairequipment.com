<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-inlet-cone-wheel-clearance'); ?>
<p class="lede">The small gap between a plenum fan's stationary inlet cone and its rotating wheel shroud is one of the most important dimensions on the fan. Too large a gap or the wrong overlap lets high-pressure air leak back into the wheel eye, cutting airflow, efficiency and pressure while adding noise; an off-centre gap does the same unevenly around the wheel.</p>

<h2>The geometry at the inlet</h2>
<p>A centrifugal plenum fan has two parts that meet at the inlet:</p>
<ul>
<li>The <strong>inlet cone</strong> (inlet bell or venturi), fixed to the fan panel or bulkhead, guiding air smoothly into the wheel.</li>
<li>The <strong>wheel shroud</strong> (inlet ring or front plate), the curved plate on the rotating wheel to which the blades attach.</li>
</ul>
<p>The cone and shroud must not touch, so there is always a clearance between them. Designs fall into two broad types. In an <strong>overlap</strong> design, the cone extends a short distance into the shroud opening; the parameters are the radial gap between cone outer surface and shroud inner surface, and the axial overlap length. In a <strong>butt</strong> or face design, the cone stops just short of the shroud with an axial gap. Most plenum and fan array wheels use overlap designs because they control leakage better.</p>
<p>The manufacturer specifies the target dimensions for each wheel size, usually in fractions of an inch or millimetres, sometimes with a tolerance. The fan's published performance assumes those dimensions.</p>

<h2>What leaks through the gap and why it matters</h2>
<p>Air leaving the wheel is at discharge pressure; air entering the eye is at inlet pressure. The gap at the cone connects the two. Some discharged air flows back through the gap and re-enters the wheel. This recirculation has three effects:</p>
<ol>
<li><strong>Lower net airflow.</strong> The wheel moves the recirculated air again, so less of its capacity reaches the system. Fan engineers call this a loss of volumetric efficiency.</li>
<li><strong>Disturbed inlet flow.</strong> The leakage jet enters along the shroud, exactly where the main flow is turning into the blades. It can cause flow separation at the shroud side of the blades, lowering pressure and efficiency.</li>
<li><strong>Added noise.</strong> The leakage jet and the disturbed flow increase broadband noise, and an uneven gap adds a once-per-revolution modulation.</li>
</ol>
<p>Because leakage is driven by the pressure difference across the gap, the effect grows with fan static pressure. A gap error that is minor on a low-pressure return fan can be significant on a high-pressure supply fan.</p>

<h2>Overlap and gap: getting the balance right</h2>
<p>Overlap and gap work together. A small radial gap with a good overlap creates a narrow, long passage that resists leakage. Too little overlap leaves a short, direct leakage path. Too much overlap pushes the cone into the wheel past the point where the shroud curves, which disturbs the inlet flow. The manufacturer's dimension reflects testing to find the best compromise.</p>
<table>
<thead><tr><th>Condition</th><th>Effect on performance</th><th>Typical cause</th></tr></thead>
<tbody>
<tr><td>Radial gap larger than specified</td><td>More leakage; lower airflow and efficiency at the same speed</td><td>Wrong cone, wheel replaced with different model, cone damaged</td></tr>
<tr><td>Overlap too small or axial gap too large</td><td>Short leakage path; lower performance and higher noise</td><td>Wheel mounted too far back on the shaft, motor shifted in its mount</td></tr>
<tr><td>Overlap too large</td><td>Inlet flow disturbed; potential contact on startup or thermal growth</td><td>Wheel mounted too far forward</td></tr>
<tr><td>Gap not concentric</td><td>Uneven leakage around the wheel, noise, risk of rubbing on the tight side</td><td>Cone not centred, panel distortion, motor base out of alignment</td></tr>
<tr><td>Contact or rubbing</td><td>Noise, heat, damage to cone and shroud</td><td>Severe misalignment or loose wheel</td></tr>
</tbody>
</table>

<h2>Why the dimension drifts in service</h2>
<ul>
<li><strong>Wheel or motor replacement.</strong> The single most common cause. A new wheel set at a slightly different position on the shaft changes overlap immediately.</li>
<li><strong>Motor mount movement.</strong> Loose bolts or settling isolation shift the wheel relative to the fixed cone.</li>
<li><strong>Shipping.</strong> Vibration in transit can move a wheel or flex the fan panel; checking the cone gap is part of a good startup.</li>
<li><strong>Panel deflection.</strong> A bulkhead that flexes under fan pressure changes the cone position while running.</li>
<li><strong>Thermal growth.</strong> On hot airstreams, the shaft and wheel grow; the cold setting must allow for it.</li>
</ul>

<h2>How to check the clearance</h2>
<ol>
<li>Lock out the fan motor and confirm the wheel is stationary.</li>
<li>Find the manufacturer's specified radial gap and overlap for the wheel size.</li>
<li>Measure the radial gap at four points around the circumference (top, bottom, left, right) with feeler gauges or a gap gauge.</li>
<li>Measure overlap with a depth gauge or rule from the cone lip to the shroud edge.</li>
<li>If the gap varies around the circumference, centre the cone by loosening its fasteners and adjusting, or correct the motor or bearing position.</li>
<li>If overlap is wrong, reposition the wheel on the shaft per the manufacturer's procedure and retorque the hub.</li>
<li>Rotate the wheel by hand to confirm no contact, then record the measurements.</li>
</ol>
<p class="warn">Do not reach into an inlet cone unless the motor is locked out and the wheel is blocked from turning. A stopped fan in an array can windmill from airflow through neighbouring fans.</p>

<h2>Related effects and where to read about them</h2>
<p>Inlet cone geometry also determines the flow coefficient used for inlet airflow measurement, so a disturbed gap can shift readings; see <a href="<?= url('guides/fan-inlet-piezometer-airflow-measurement') ?>">measuring fan airflow with inlet piezometer rings</a>. Obstructions in front of the cone are a separate system effect issue covered in <a href="<?= url('guides/system-effect-amca-201') ?>">system effect</a>. When a fan is not delivering rated airflow and the cause is not yet known, start with <a href="<?= url('guides/fan-airflow-shortfall-troubleshooting') ?>">troubleshooting a fan that will not deliver rated airflow</a>.</p>
<?php guide_end([
    ['What is inlet cone overlap on a plenum fan?', 'It is the distance the stationary inlet cone extends into the opening of the rotating wheel shroud. Together with the radial gap, it controls how much discharge air leaks back into the wheel inlet.'],
    ['How does a large inlet cone gap affect a fan?', 'It lets more high-pressure air recirculate back into the wheel, reducing net airflow, pressure and efficiency, and increasing noise. The effect grows with fan pressure.'],
    ['When should the inlet cone clearance be checked?', 'At startup after shipping, after any wheel or motor replacement, and whenever a fan shows unexplained low airflow or new noise.'],
    ['Can inlet cone clearance affect airflow measurement?', 'Yes. Inlet cone airflow taps are calibrated with the specified geometry, so a changed gap or overlap can shift the readings.'],
]);
