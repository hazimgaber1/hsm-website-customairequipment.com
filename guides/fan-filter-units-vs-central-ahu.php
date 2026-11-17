<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-filter-units-vs-central-ahu'); ?>
<p class="lede">Fan filter units put a small fan on top of every ceiling HEPA filter, so recirculation happens in the ceiling plenum. Central recirculation AHUs move the same air with a few large fans in a mechanical room and duct it to terminal HEPA filters. FFUs win on flexibility and low system pressure; central units win on fan efficiency per unit of work, noise control and serviceability outside the clean space.</p>

<h2>How the two arrangements work</h2>
<p>Both approaches recirculate most of the cleanroom's air and add a smaller stream of conditioned outdoor air from a makeup unit. They differ in where the recirculation fans live.</p>
<p><strong>Fan filter units (FFUs)</strong> are self-contained modules, typically 2 ft × 4 ft or 4 ft × 4 ft, with a HEPA or ULPA filter and a small motorized fan, usually with an EC motor. They sit in the ceiling grid. Air returns from the room through low wall returns or chases into the ceiling plenum, where the FFUs draw it back down through their filters. Sensible cooling is done by dry coils in the return path or in the plenum, and the makeup unit supplies dehumidified outdoor air into the plenum.</p>
<p><strong>Central recirculation AHUs</strong> draw return air through ducts or chases, pass it through prefilters and a cooling coil, and push it through supply ducts to ducted terminal HEPA housings or a pressurized HEPA ceiling plenum. The fans are typically fan arrays or large plenum fans located outside the cleanroom.</p>

<h2>Side-by-side comparison</h2>
<table>
<thead><tr><th>Factor</th><th>Fan filter units</th><th>Central recirculation AHU</th></tr></thead>
<tbody>
<tr><td>System static pressure</td><td>Low: filter plus plenum, often under 1 in. w.g. total</td><td>Higher: AHU filters, coil, ductwork, terminal HEPA</td></tr>
<tr><td>Fan and motor efficiency</td><td>Lower per fan; small wheels and motors</td><td>Higher per fan; larger wheels and motors</td></tr>
<tr><td>Net fan energy</td><td>Often competitive because of low static; depends on count and selection</td><td>Competitive when duct runs are short and velocities moderate</td></tr>
<tr><td>Noise in the room</td><td>Fans are directly over occupants; harder to reach low NC</td><td>Fans remote; silencers and duct lining control noise</td></tr>
<tr><td>Redundancy</td><td>Inherent; loss of one FFU affects a small area</td><td>Requires fan array or standby fan; failure affects whole zone unless redundant</td></tr>
<tr><td>Reconfiguration</td><td>Easy: move, add or remove units in the grid</td><td>Ductwork and balancing changes needed</td></tr>
<tr><td>Maintenance access</td><td>Motors and controls in or above the clean ceiling</td><td>Motors and coils in a mechanical room</td></tr>
<tr><td>Heat added to the clean zone</td><td>All motor heat enters the plenum and room air</td><td>Motor heat enters the airstream but is removed at the AHU coil</td></tr>
<tr><td>Space needed</td><td>Deeper ceiling plenum; less mechanical room</td><td>Mechanical room and duct chases</td></tr>
<tr><td>Controls</td><td>Networked speed control of many units</td><td>Few drives; simple airflow control</td></tr>
</tbody>
</table>

<h2>Energy: where the real difference lies</h2>
<p>Fan power depends on airflow, pressure and efficiency together. For the same airflow:</p>
<p class="formula">Fan input kW ≈ cfm × TSP (in. w.g.) ÷ (8,520 × η total)</p>
<p>Consider 40,000 cfm of recirculation. An FFU ceiling might operate at 0.8 in. w.g. with a combined fan, motor and controller efficiency of about 45%: 40,000 × 0.8 ÷ (8,520 × 0.45) ≈ 8.3 kW. A central AHU with a fan array might operate at 2.5 in. w.g. at 65% combined efficiency: 40,000 × 2.5 ÷ (8,520 × 0.65) ≈ 18 kW. Lower the central system pressure to 1.5 in. w.g. with short duct runs and a low-velocity coil and it falls to about 11 kW.</p>
<p>These numbers are illustrations, not ratings. The point is that the comparison turns on system pressure as much as fan efficiency, and a central system has to be designed for low pressure to compete. Quality FFUs with efficient EC motors have narrowed the efficiency gap considerably.</p>
<p class="note">Compare on measured or certified data. Ask FFU suppliers for tested airflow and input watts at the actual operating pressure, including the plenum and return path, not just at the filter.</p>

<h2>Noise and vibration</h2>
<p>An FFU ceiling places dozens or hundreds of small fans over the work area. Each is quiet on its own, but together they set a broadband background level that can be hard to bring below the mid NC 50s in a dense ceiling. Central systems isolate the noise sources in a mechanical room, where silencers and lined plenums can bring room levels lower. For metrology, imaging or occupied labs with strict acoustic criteria, central recirculation is usually easier. Fan array noise behavior is discussed in <a href="<?= url('guides/fan-array-acoustics') ?>">fan array acoustics</a>.</p>

<h2>Redundancy and maintenance</h2>
<p>An FFU failure leaves a small hole in coverage. In a large ceiling with overlapping coverage, the room may stay within class until the unit is replaced. That inherent redundancy is a strong argument for FFUs in large semiconductor and electronics cleanrooms.</p>
<p>The price is that hundreds of motors and controllers live in or over the clean space. Replacing one means working at the ceiling, possibly in a classified area with gowning and cleaning afterward. Central systems keep fans and coils in a mechanical room, accessible without entering the cleanroom. A central fan array with N+1 fans gives similar redundancy to FFUs while keeping service outside the clean envelope; see <a href="<?= url('guides/what-is-a-fan-array') ?>">what a fan array is</a>.</p>

<h2>Which to choose</h2>
<ul>
<li><strong>Lean toward FFUs</strong> for large ISO 5 to ISO 6 areas with high coverage, frequent layout changes, deep ceiling plenums and limited mechanical room space.</li>
<li><strong>Lean toward central AHUs</strong> for ISO 7 and ISO 8 pharmaceutical suites with modest coverage, strict acoustic targets, GMP cleaning concerns about equipment in the ceiling, or owners who want all rotating equipment serviceable from outside the clean zone.</li>
<li><strong>Hybrid layouts</strong> are common: a central AHU serving general classified rooms, and FFUs or local unidirectional modules over critical zones.</li>
</ul>
<p>Both approaches assume recirculation is allowed. Whether a suite should recirculate at all, rather than run once-through, is compared in <a href="<?= url('guides/recirculating-vs-once-through-cleanrooms') ?>">recirculating vs once-through cleanroom air systems</a>.</p>
<?php guide_end([
    ['Are fan filter units more energy efficient than a central AHU?', 'Sometimes. FFUs use less efficient small fans but operate at very low system pressure. A central AHU with efficient fans can match or beat them if ductwork and coils are designed for low pressure drop. Compare tested watts at actual operating pressure.'],
    ['Are FFUs noisy?', 'Each unit is fairly quiet, but a dense FFU ceiling places many fans directly over the room, which sets a background level that is hard to reduce. Central systems keep fans remote and can achieve lower room noise.'],
    ['What happens when a fan filter unit fails?', 'Only the area under that unit loses filtered supply. In ceilings with overlapping coverage, the room may stay within class until the unit is replaced, which gives FFU ceilings inherent redundancy.'],
]);
