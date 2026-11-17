<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('crossflow-vs-counterflow-plate-exchangers'); ?>
<p class="lede">A counterflow plate exchanger recovers noticeably more heat than a crossflow core, often 75 to 90 percent sensible effectiveness against 50 to 65 percent, but it is longer, costs more and needs more attention to pressure drop. Crossflow cores win where space is tight or where moderate recovery is enough.</p>

<h2>What the geometry changes</h2>
<p>In a <strong>crossflow</strong> core the two airstreams meet at right angles, each passing straight through alternate channels. The temperature difference between the streams is high at one corner and low at the opposite corner, so a large part of the plate area works with a small driving difference. That caps the achievable effectiveness.</p>
<p>In a <strong>counterflow</strong> core the streams run in opposite directions along the length of the plates. Each stream sees the other at a nearly constant temperature difference from end to end, which is the most efficient arrangement heat transfer theory allows. To get air in and out, the core uses short crossflow entry and exit zones at each end, and the long middle section is pure counterflow. Most products sold as counterflow are this hybrid, sometimes called quasi-counterflow.</p>
<p>A third option, two crossflow cores in series arranged so the overall flow is counter-current, lands between the two and is common when one large counterflow core will not fit through a door.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Crossflow</th><th>Counterflow</th></tr></thead>
<tbody>
<tr><td>Typical sensible effectiveness at balanced flow</td><td>50 to 65%</td><td>75 to 90%</td></tr>
<tr><td>Depth in airflow direction for a given capacity</td><td>Short, roughly equal to the plate diagonal</td><td>Long; often two to three times the crossflow depth</td></tr>
<tr><td>Air pressure drop per side</td><td>Lower at the same face velocity</td><td>Higher because of longer channels</td></tr>
<tr><td>Unit arrangement</td><td>Diamond or square core between stacked or side-by-side streams</td><td>Long core with offset inlets and outlets; usually stacked streams</td></tr>
<tr><td>Bypass damper integration</td><td>Simple</td><td>Simple, but the bypass path is longer</td></tr>
<tr><td>Cost per unit of airflow</td><td>Lower</td><td>Higher</td></tr>
<tr><td>Cleanability</td><td>Good; short, straight channels</td><td>Fair; long channels are harder to flush</td></tr>
<tr><td>Frost risk</td><td>Concentrated at one cold corner</td><td>Along the cold end of the core</td></tr>
</tbody>
</table>

<h2>Effectiveness in numbers</h2>
<p>Sensible effectiveness is the actual temperature change of the supply air divided by the maximum possible change. With outdoor air at 0 F and exhaust at 72 F at equal flows:</p>
<ul>
<li>A crossflow core at 60 percent delivers supply air at 0 + 0.60 × 72 = 43.2 F.</li>
<li>A counterflow core at 82 percent delivers 0 + 0.82 × 72 = 59.0 F.</li>
</ul>
<p>On 10,000 cfm, that 15.8 F difference is worth 1.08 × 10,000 × 15.8, or about 171,000 Btu/h of additional recovery at that condition. Whether that is worth the extra length and fan energy depends on the climate and run hours. The full method for leaving conditions is in <a href="<?= url('guides/recovery-effectiveness-calculation') ?>">calculating energy recovery effectiveness</a>.</p>

<h2>Pressure drop and fan energy</h2>
<p>Pressure drop rises with channel length and with face velocity. A counterflow core selected at the same face velocity as a crossflow core will usually show a higher drop on each side. Designers can bring it down by enlarging the core face, which raises cost and casing size, or by accepting slightly lower effectiveness at a lower velocity. A practical target is to keep each side below about 1.0 in. w.c. (250 Pa) at design flow, but run the fan energy numbers for your own operating hours using <a href="<?= url('guides/recovery-pressure-drop-fan-penalty') ?>">the fan energy penalty method</a>.</p>
<p class="note">Remember that pressure drop happens on both the supply and exhaust fans. A 0.3 in. w.c. increase per side costs about 0.6 in. w.c. of total fan work for the unit.</p>

<h2>Size and layout</h2>
<p>Length is usually what rules counterflow out. On a large unit, a counterflow core can add several feet of casing compared with a crossflow core, which may push a rooftop unit beyond a curb length or a mechanical room wall. Crossflow cores fit easily into stacked units because the diamond orientation lines up naturally with an upper and lower airstream.</p>
<p>Counterflow cores are typically installed horizontally with the supply and exhaust paths stacked, and the entry and exit zones must line up with the plenums above and below. That fixes the internal layout and can complicate the placement of filters, coils and fans around the core.</p>
<p>Also consider shipping and access. Large cores may need to be split into modules that bolt together, and each module needs a path for removal or cleaning.</p>

<h2>Materials and sealing</h2>
<p>Both geometries come in aluminum, coated aluminum, stainless steel and polymer plates. Membrane plates that transfer moisture are offered in both geometries, mostly in counterflow for residential and light commercial products. Plate material and sealing quality control leakage far more than geometry does, so compare certified leakage values rather than assuming one shape leaks less.</p>

<h2>Choosing between them</h2>
<ul>
<li><strong>Pick counterflow</strong> when the climate is cold or the run hours are long, when energy code compliance needs high effectiveness, or when you need high recovery without a wheel's leakage.</li>
<li><strong>Pick crossflow</strong> when the unit length is constrained, when the exhaust is dirty and frequent cleaning is expected, or when moderate recovery meets the energy target.</li>
<li><strong>Consider two crossflow cores in series</strong> when you need effectiveness near the counterflow range but the core must break down into smaller pieces for access.</li>
</ul>
<?php guide_end([
    ['Is a counterflow plate heat exchanger more efficient than crossflow?', 'Yes. Counterflow cores typically reach 75 to 90 percent sensible effectiveness at balanced flow, while crossflow cores are usually 50 to 65 percent. The trade-off is greater length, higher pressure drop and cost.'],
    ['Why are counterflow plate exchangers so long?', 'The streams need a long section running in opposite directions to approach the ideal temperature profile, plus crossflow entry and exit zones at each end. For the same capacity that usually means two to three times the depth of a crossflow core.'],
    ['Can two crossflow plates in series match a counterflow core?', 'Two crossflow cores arranged counter-currently can approach counterflow effectiveness and are easier to handle and clean. They add pressure drop and casing length, so compare total drop and effectiveness for both options.'],
]);
