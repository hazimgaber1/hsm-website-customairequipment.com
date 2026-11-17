<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('dx-coil-circuiting-and-staging'); ?>
<p class="lede">A direct expansion coil serving more than one compressor circuit is divided either by face (each circuit takes a horizontal band of the coil), by row (each circuit takes a set of rows across the full face) or by interlacing (circuits alternate tube by tube). The split you choose decides how evenly the coil cools and dehumidifies when only some compressors are running.</p>

<h2>Why DX coils are split at all</h2>
<p>A chilled water coil modulates by throttling water. A DX coil has no such option on its own: its capacity is set by how much refrigerant the compressors are pumping and how much surface that refrigerant is evaporating in. When a unit has two or more refrigeration circuits, each with its own compressor and expansion valve, the coil must be divided so each circuit has its own section of tubes. Mixing refrigerant from independent circuits in the same tube is not possible, so the physical arrangement of those sections determines what the air sees at part load.</p>
<p>Each refrigerant circuit is itself split into multiple parallel tube paths, fed from a distributor downstream of the expansion valve. The number of distributor tubes and their length are matched so each path gets an equal share of liquid and leaves with similar superheat. This internal circuiting is a separate decision from the face/row split between compressors, but both matter.</p>

<h2>Face split</h2>
<p>In a face-split coil, circuit A occupies the top half of the face and circuit B the bottom half (or the reverse), each running the full depth of the coil. When only circuit A runs, half of the airflow passes through active coil and half passes through a dead coil section at nearly entering temperature.</p>
<ul>
<li><strong>Air leaving temperature</strong> is stratified: cold in one band and warm in the other. Downstream mixing is needed before the air reaches sensors or the fan inlet.</li>
<li><strong>Dehumidification at part load</strong> suffers because half the air bypasses the cold surface entirely. The mixed leaving dew point rises.</li>
<li><strong>Evaporator temperature</strong> on the active circuit holds near design as long as airflow stays constant, because that section still sees its full share of air. If airflow is also reduced, the active section loses load while its compressor keeps pumping, and suction temperature can fall toward frosting.</li>
<li><strong>Construction</strong> is simple and service is straightforward because each circuit is a self-contained block.</li>
</ul>
<p>Face split is the traditional arrangement in packaged equipment and works well when the unit runs constant airflow and one stage carries most of the hours.</p>

<h2>Row split</h2>
<p>In a row-split coil, circuit A takes the first rows (for example rows 1 to 3 of a 6-row coil) and circuit B takes the rest, each across the full face. All of the air passes through both circuits in series.</p>
<ul>
<li><strong>Leaving air temperature</strong> is uniform across the face at every stage.</li>
<li><strong>Dehumidification at part load</strong> is better because all of the air contacts cold surface.</li>
<li><strong>Circuit loading is unequal.</strong> The entering rows see warmer, wetter air and a larger temperature difference, so they pick up more of the load than the leaving rows. The two circuits do not carry equal capacity even with identical compressors unless the row split is made uneven to compensate.</li>
<li><strong>Staging logic</strong> should normally bring on the leaving-side circuit first if the goal is the coldest leaving air from a single stage, or the entering-side circuit if the goal is the most capacity from one stage. The manufacturer's selection should report capacity for each circuit running alone.</li>
</ul>

<h2>Intertwined (interlaced) circuiting</h2>
<p>Intertwined coils alternate the tubes of circuit A and circuit B through the whole coil, so each circuit is spread over the full face and full depth. At part load the inactive tubes sit between active ones and the fin conducts heat from both. The result is close to full-face coverage at every stage with balanced loading between circuits.</p>
<p>Intertwined coils are now common in custom and higher-end packaged equipment because they combine the even air temperature of row split with equal circuit loading. They are more complex to build, and a leak on one circuit is harder to isolate for repair.</p>

<h2>Comparing the three</h2>
<table>
<thead><tr><th>Characteristic</th><th>Face split</th><th>Row split</th><th>Intertwined</th></tr></thead>
<tbody>
<tr><td>Leaving air uniformity at part load</td><td>Poor (stratified)</td><td>Good</td><td>Good</td></tr>
<tr><td>Part-load dehumidification</td><td>Weakest</td><td>Good</td><td>Good</td></tr>
<tr><td>Equal loading between circuits</td><td>Yes</td><td>No, unless rows split unevenly</td><td>Yes</td></tr>
<tr><td>Build and repair simplicity</td><td>Simplest</td><td>Moderate</td><td>Most complex</td></tr>
<tr><td>Good fit</td><td>Constant volume, mostly full load</td><td>Units with a lead stage for humidity</td><td>VAV and variable-speed compressors</td></tr>
</tbody>
</table>

<h2>Staging with variable airflow and variable-speed compressors</h2>
<p>Staging problems multiply when airflow is also variable. A VAV unit at 40% airflow with one of two face-split circuits active can push the active section's evaporating temperature low enough to frost, while the inactive section passes warm air. Interlaced coils with a variable-speed lead compressor reduce this because capacity can track the load continuously across the whole face.</p>
<p>Whatever the split, check these items on the selection:</p>
<ul>
<li>Capacity and saturated suction temperature for each stage at minimum airflow.</li>
<li>Whether the lowest stage keeps the coil surface above freezing at minimum airflow and lowest entering temperature.</li>
<li>Distributor and expansion valve sizing that still feeds evenly at the lowest capacity step.</li>
<li>Hot gas bypass or other low-load protection requirements set by the condensing unit manufacturer.</li>
</ul>
<p class="warn">The DX coil and condensing unit must be matched. A coil selected in isolation, without the compressor's capacity curve at the actual suction temperature, can look fine on paper and short-cycle in the field. Get a balanced-system selection from the condensing unit manufacturer.</p>

<h2>Related decisions</h2>
<p>Refrigerant choice changes coil design details such as tube diameter, circuit length and leak detection; those effects are covered in <a href="<?= url('guides/low-gwp-a2l-refrigerant-dx-coils') ?>">low-GWP A2L refrigerants and DX coil design</a>. Tall DX coils that must be stacked follow the same drainage rules as water coils, described in <a href="<?= url('guides/stacked-coils-intermediate-drain-pans') ?>">stacked coils and intermediate drain pans</a>. For the broader choice of cooling medium, see <a href="<?= url('guides/chilled-water-vs-dx-vs-pumped-refrigerant') ?>">chilled water vs DX vs pumped refrigerant</a>.</p>
<?php guide_end([
    ['What is the difference between face split and row split DX coils?', 'A face-split coil gives each compressor circuit a horizontal band of the full coil depth, so at part load some air bypasses cold surface. A row-split coil gives each circuit a set of rows across the full face, so all air passes through both circuits and leaving temperature stays even.'],
    ['Which DX coil split is best for dehumidification?', 'Row-split and intertwined coils are better than face split at part load because all of the air contacts active coil surface. Face-split coils let part of the airflow pass through an idle section, which raises the mixed leaving dew point.'],
    ['What is an intertwined DX coil?', 'An intertwined or interlaced coil alternates tubes from each refrigerant circuit through the full face and depth. Each circuit then covers the whole coil, giving even leaving air at part load and equal capacity per circuit, at the cost of more complex construction.'],
]);
