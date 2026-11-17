<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('solid-vs-perforated-liners'); ?>
<p class="lede">A perforated inner liner lets the casing insulation absorb sound, which can cut fan noise noticeably inside the unit, while a solid liner gives a smooth, washable airstream surface with no exposed fibre. Most well-designed units use both: perforated where acoustic benefit is real and hygiene risk is low, solid everywhere moisture, cleaning or sterile air make it necessary.</p>

<h2>What the inner liner does acoustically</h2>
<p>In a double-wall panel, the insulation is sandwiched between an outer skin and an inner liner. If the liner is solid sheet metal, the sound inside the unit hits a reflective surface. If the liner is perforated, sound passes through the holes into the insulation, where friction among the fibres converts some of it to heat. The panel becomes an absorber.</p>
<p>Absorption from a perforated liner is strongest in the mid and high bands, roughly 500 Hz and up, and weaker at 63 and 125 Hz. The amount depends on insulation type and thickness, the open area of the perforation, and whether a facing film sits between the holes and the fibre. Thicker panels absorb lower frequencies better than thin ones.</p>
<p>Where it matters most is in the fan section and in plenums immediately upstream and downstream of the fan. A lined fan discharge plenum can reduce discharge sound power in several bands, sometimes enough to shorten or eliminate a downstream silencer. Perforated liners in sections far from the fan, such as a filter section, contribute much less.</p>

<h2>Comparing the two liners</h2>
<table>
<thead><tr><th>Factor</th><th>Perforated liner</th><th>Solid liner</th></tr></thead>
<tbody>
<tr><td>Sound absorption inside the unit</td><td>Good, mainly mid and high frequencies</td><td>Minimal; surfaces reflect sound</td></tr>
<tr><td>Effect on casing-radiated sound</td><td>Reduces internal level, so less sound reaches the panels</td><td>Higher internal level; relies on panel mass alone</td></tr>
<tr><td>Cleanability</td><td>Poor; holes trap dust and cannot be scrubbed or washed without wetting insulation</td><td>Good; smooth surface can be wiped, washed or disinfected</td></tr>
<tr><td>Fibre erosion into airstream</td><td>Possible, especially at high velocity or if media is unfaced</td><td>None from the liner</td></tr>
<tr><td>Moisture tolerance</td><td>Poor; wet insulation loses performance and can support growth</td><td>Good; moisture stays on the metal</td></tr>
<tr><td>Cost</td><td>Similar sheet cost; may reduce silencer cost elsewhere</td><td>Baseline</td></tr>
<tr><td>Where commonly used</td><td>Fan sections and plenums in commercial comfort units</td><td>Coil, humidifier, drain pan areas; healthcare, labs, food, pharma</td></tr>
</tbody>
</table>

<h2>The hygiene argument</h2>
<p>Air handler interiors collect dust and, near cooling coils and humidifiers, moisture. A perforated liner exposes the insulation to both. Once fibre is damp and dusty, it can support microbial growth that cannot be removed without replacing the insulation. ASHRAE 62.1 requires airstream surfaces to resist mould growth and erosion; check the edition adopted in your jurisdiction for the exact provisions. Healthcare standards, including ASHRAE 170 and CSA Z317.2, go further for sensitive areas and generally discourage or restrict exposed fibrous materials downstream of filters. These rules are why many hospital and pharmaceutical specifications call for solid liners throughout.</p>
<p>Even in commercial comfort units, it is good practice to use solid liners in:</p>
<ul>
<li>Cooling coil sections and any section downstream of the coil until the air is clearly dry.</li>
<li>Humidifier sections and absorption distances.</li>
<li>Areas around drain pans.</li>
<li>Outdoor air intake plenums exposed to rain or snow entry.</li>
<li>Any section that will be washed down or disinfected.</li>
</ul>
<p class="note">A solid floor is almost always preferable even when walls and ceiling are perforated. Floors collect dirt and water and get walked on during service.</p>

<h2>Fibre erosion and film-faced options</h2>
<p>Fibre erosion occurs when air scrubs the face of the insulation through the perforations and carries fibres downstream. It increases with velocity and turbulence, so the highest risk is right at the fan discharge. Mitigations include:</p>
<ul>
<li>Using insulation with a durable, erosion-resistant facing behind the perforations.</li>
<li>Placing a thin polymer film between the perforated sheet and the insulation, sometimes with a spacer to keep the film from being abraded. The film blocks fibre and moisture but reduces high-frequency absorption somewhat.</li>
<li>Limiting perforated surfaces to zones below the manufacturer's recommended velocity.</li>
</ul>
<p>The same trade-offs apply to duct silencers; see <a href="<?= url('guides/dissipative-vs-packless-silencers') ?>">dissipative vs packless vs film-lined silencers</a>.</p>

<h2>How much acoustic benefit is realistic</h2>
<p>The benefit is greatest where the internal sound field is strong and the lined area is large relative to openings. A tall fan plenum lined on four sides with perforated panels can provide useful reduction in the 500 Hz to 4 kHz bands. At 63 Hz, liners contribute little regardless of construction, so they do not solve rumble. Ask the manufacturer for discharge and casing-radiated sound data with and without the perforated option; the difference by band shows whether the option earns its hygiene cost on your project. For how unit data feeds a room calculation, see <a href="<?= url('guides/room-sound-from-ahu-data') ?>">calculating room sound levels from AHU sound data</a>.</p>

<h2>Specifying liner type by section</h2>
<p>Rather than a blanket choice, schedule liner type by section. A practical approach:</p>
<ol>
<li>Default all sections to solid liners with solid floors.</li>
<li>Allow perforated walls and ceilings in the fan section and adjacent plenums only, where the acoustic analysis shows a benefit and no moisture source is present.</li>
<li>Require film-faced or erosion-resistant insulation behind any perforated area.</li>
<li>For healthcare, pharmaceutical, cleanroom and food applications, require solid liners throughout unless the owner's standard allows otherwise.</li>
</ol>
<p>Casing thermal performance, condensation risk and panel thickness are separate decisions handled in the casing guides, such as <a href="<?= url('guides/double-wall-casing-construction') ?>">double-wall casing construction</a>.</p>
<?php guide_end([
    ['Do perforated liners make an air handler quieter?', 'They absorb sound inside the unit, mainly from about 500 Hz upward, which lowers discharge, inlet and casing-radiated levels in those bands. They do little for low-frequency rumble. The actual benefit depends on where the perforated panels are and how much area they cover.'],
    ['Why do hospitals require solid inner liners?', 'Solid liners can be cleaned and disinfected and do not expose insulation to dust and moisture. Healthcare ventilation standards restrict exposed fibrous materials in the airstream in many areas, so solid liners are the usual choice.'],
    ['Can I use perforated liners only in the fan section?', 'Yes, and it is a common compromise. Perforated panels in the fan section and adjacent plenums give most of the acoustic benefit, while solid liners elsewhere keep coil, humidifier and drain pan areas cleanable.'],
]);
