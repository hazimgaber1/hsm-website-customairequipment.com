<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('duct-connections-at-ahu'); ?>
<p class="lede">Connect ductwork to an air handler through a flexible connector installed with slack, never stretched or compressed, then make any size or shape change with a gradual transition and keep elbows, branch takeoffs and dampers a few duct diameters away from the unit's openings. Each of these steps protects fan performance, vibration isolation and casing integrity.</p>

<h2>Step 1: Check the openings and the drawings</h2>
<ol>
<li>Compare the unit's opening sizes and locations on the approved submittal against the duct shop drawings. Mismatches are common when the unit selection changed after the duct design.</li>
<li>Confirm which openings have factory flanges, which have dampers mounted in them, and which require a field-supplied collar.</li>
<li>Note the pressure at each opening: supply discharges may be several inches positive, return and outdoor air inlets negative. Connector material and fastening need to suit that pressure.</li>
<li>Locate the vibration isolation. If the fan is internally isolated, the casing does not move, but a connector is still needed to isolate structure-borne noise. If the whole unit is on springs, the connector must also absorb unit movement.</li>
</ol>

<h2>Step 2: Install flexible connectors</h2>
<ol>
<li>Choose a connector fabric rated for the pressure, temperature and location. Outdoor connections need UV- and weather-resistant fabric. Fire-rated assemblies may need a listed connector per the code adopted in your jurisdiction; check NFPA 90A requirements where it applies.</li>
<li>Fasten the connector's metal edge to the unit flange with the screws or bolts the unit manufacturer specifies, at close spacing, with gasket or sealant between the faces. Do not drive long screws through casing panels where they can hit wiring, coils or insulation-backed liners.</li>
<li>Install the connector with slack: it should be neither tight nor bunched. A common guideline is an active fabric length of a few inches with the two metal edges about 1 in closer together than the fully extended fabric. Follow the connector manufacturer's instructions.</li>
<li>Align the duct with the opening before fastening. The connector is not a transition and must not be used to take up offset between the duct and the opening.</li>
<li>Support the duct independently so its weight does not hang on the connector or the unit casing.</li>
</ol>
<p class="warn">A connector pulled taut transmits vibration as well as a rigid joint would, and a connector that flutters under negative pressure can tear. Both conditions show up at startup as noise.</p>
<p>How connectors that are stretched or bridged by duct supports create vibration paths is analysed in <a href="<?= url('guides/flex-connector-vibration-short-circuits') ?>">flex connector vibration short circuits</a>.</p>

<h2>Step 3: Build transitions properly</h2>
<p>The unit opening rarely matches the main duct size. The transition between them should be gradual so air does not separate from the walls.</p>
<ol>
<li>On the supply side, keep diverging transition sides to a modest angle, often cited as about 15° per side or less. Steeper expansions cause separation and pressure loss.</li>
<li>Converging transitions on the return side tolerate steeper angles, but abrupt steps still waste pressure.</li>
<li>Where space forces a steep expansion, use turning vanes or splitters inside the transition, or consult the designer before building it.</li>
<li>Seal transitions to the duct construction class required by the project specification.</li>
</ol>

<h2>Step 4: Keep fittings away from the openings</h2>
<p>Fans are rated with smooth, straight duct at their inlet and outlet. Elbows, tees and dampers close to the fan disturb the airflow and reduce the fan's delivered pressure, an effect known as system effect. The theory and AMCA 201 factors are covered in <a href="<?= url('guides/system-effect-amca-201') ?>">system effect and AMCA 201</a>. In the field, the practical rules are:</p>
<table>
<thead><tr><th>Location</th><th>Practical guidance</th></tr></thead>
<tbody>
<tr><td>Housed fan discharge</td><td>Provide a straight run before the first elbow; several equivalent duct diameters is the usual target, and elbows should turn in the same direction as fan rotation where possible</td></tr>
<tr><td>Plenum fan or fan array discharge plenum</td><td>Less sensitive, but avoid placing an elbow directly against the discharge opening</td></tr>
<tr><td>Unit inlet (return, outdoor air)</td><td>Avoid elbows that push air to one side of filters or coils; use turning vanes if needed</td></tr>
<tr><td>Branch takeoffs</td><td>Keep them out of the first straight run after the unit</td></tr>
<tr><td>Balancing and smoke dampers</td><td>Locate downstream of the straight run, accessible for service</td></tr>
</tbody>
</table>
<p class="note">Leave room for a pitot traverse plane in the main supply duct during design. A straight section downstream of the transition is also the best place for airflow measurement during balancing; see <a href="<?= url('guides/pitot-traverse-airflow-verification') ?>">verifying airflow with a pitot traverse</a>.</p>

<h2>Step 5: Inspect before insulating</h2>
<ul>
<li>Every connector has slack and is aligned with its opening.</li>
<li>Fasteners are complete and do not penetrate internal components.</li>
<li>Duct hangers and supports are in place and do not bear on the unit.</li>
<li>Transition angles match the shop drawings.</li>
<li>Access doors in adjacent ductwork open freely.</li>
<li>Outdoor connections are weather-sealed and flashed so water sheds away from the connector.</li>
</ul>
<p>Only once these are confirmed should external insulation or vapour barrier be applied. Insulation over a connector must not restrict its movement.</p>
<?php guide_end([
    ['How much slack should a flexible duct connector have?', 'Enough that the fabric is neither taut nor bunched, typically with the metal edges set about an inch closer than full extension. Follow the connector manufacturer\'s instructions, and never use the connector to absorb misalignment.'],
    ['How far should the first elbow be from an AHU fan discharge?', 'Several equivalent duct diameters of straight duct is the usual target for a housed fan. Plenum fans and fan arrays are less sensitive, but an elbow directly against any discharge opening will cost fan pressure.'],
    ['Can ductwork be supported by the air handler casing?', 'No. Support the duct independently. Duct weight on the casing can distort panels and doors, and on isolated units it bridges the isolation and transmits vibration into the duct.'],
]);
