<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('double-wall-casing-construction'); ?>
<p class="lede">A double-wall casing panel is a sandwich: an outer metal skin, an insulating core, and an inner metal liner that seals the insulation away from the airstream. It replaced single-wall casings lined with exposed fiberglass because the liner keeps fibres and dirt out of the air, can be cleaned, resists damage and makes the panel far stiffer.</p>

<h2>Anatomy of a double-wall panel</h2>
<ul>
<li><strong>Outer skin:</strong> usually galvanized steel, sometimes painted, stainless or aluminum. It carries weather exposure on outdoor units and most of the handling abuse.</li>
<li><strong>Insulating core:</strong> injected polyurethane foam or mineral fibre (fiberglass or mineral wool) board. The core sets thermal resistance and, for foam, contributes structural stiffness by bonding the skins together.</li>
<li><strong>Inner liner:</strong> solid metal in most sections, typically galvanized or stainless. In sections that need sound absorption, a perforated liner lets sound reach the insulation behind it, usually with a film or mat facing to keep fibres in place.</li>
<li><strong>Panel edges:</strong> the skins are formed into flanges or channels that close the edges of the panel and mate with the frame or with adjacent panels. How these edges are detailed determines whether metal bridges straight from inside to outside.</li>
<li><strong>Gaskets and sealant:</strong> closed-cell gaskets between panels and frames, and sealant at seams, set the casing's air leakage.</li>
</ul>
<p>Common nominal thicknesses are 2 in (50 mm) and 4 in (100 mm). The choice between them is discussed in <a href="<?= url('guides/two-inch-vs-four-inch-casing-panels') ?>">2-inch vs 4-inch panels</a>, and the core materials are compared in <a href="<?= url('guides/fiberglass-vs-foam-panel-insulation') ?>">fiberglass vs foam panel insulation</a>.</p>

<h2>How panels assemble into a casing</h2>
<p>Two broad construction systems are used:</p>
<h3>Frame and panel</h3>
<p>A structural frame of formed steel or extruded aluminum posts and rails defines each section. Panels attach to the frame with screws, bolts or clips, and gaskets seal the joint. Panels can be removed for access or component replacement. The frame profile itself must be insulated and, ideally, thermally broken, or it becomes a cold line on the exterior.</p>
<h3>Frameless or panel-to-panel</h3>
<p>Interlocking panels with formed edges join directly to each other, and the panels themselves carry the structural load. This reduces the number of metal paths through the casing and can produce flatter interior surfaces. Corners and openings still need reinforcement.</p>
<p>In both systems, the floor is usually a separate assembly built on the base frame, and the roof of an outdoor unit adds weather protection above the top panels.</p>

<h2>Why single-wall lined casings were replaced</h2>
<p>Older air handlers used a single sheet of metal for the casing, with fiberglass duct liner glued and pinned to the inside. That approach had several problems that double-wall construction solves:</p>
<table>
<thead><tr><th>Issue</th><th>Single-wall lined</th><th>Double-wall</th></tr></thead>
<tbody>
<tr><td>Fibre erosion into the airstream</td><td>Possible as liner ages or is damaged</td><td>Insulation enclosed behind solid liner</td></tr>
<tr><td>Cleanability</td><td>Porous surface traps dirt and moisture; hard to clean</td><td>Smooth metal can be wiped, washed or disinfected</td></tr>
<tr><td>Microbial growth</td><td>Wet liner downstream of coils and humidifiers can support growth</td><td>Non-porous liner resists it</td></tr>
<tr><td>Damage resistance</td><td>Liner tears during service</td><td>Metal liner withstands foot traffic and tools</td></tr>
<tr><td>Panel stiffness</td><td>One skin; needs stiffeners</td><td>Two skins act together, especially with foam</td></tr>
<tr><td>Thermal performance</td><td>Limited by liner thickness and compression</td><td>Full-depth core, with thermal breaks available</td></tr>
</tbody>
</table>
<p>ASHRAE 62.1 contains requirements about the erosion resistance of airstream surfaces and about materials downstream of wet components; check the edition adopted in your jurisdiction. Many owner standards for healthcare and education now require solid inner liners throughout, with perforated liners limited to acoustically necessary sections and fitted with protective facing.</p>

<h2>Where perforated liners still make sense</h2>
<p>Solid metal reflects sound back into the airstream. Where fan noise needs to be absorbed inside the unit, a perforated inner liner over the insulation can reduce discharge and return sound, sometimes enough to shorten or eliminate a separate attenuator. The tradeoff is cleanability: the perforations expose a facing or film rather than metal. Perforated liners should be kept out of sections downstream of cooling coils and humidifiers, and out of hygiene-sensitive units entirely. The acoustic side of the choice is in <a href="<?= url('guides/solid-vs-perforated-liners') ?>">solid vs perforated liners</a>.</p>

<h2>Performance a double-wall casing must deliver</h2>
<p>A double-wall build-up is not a performance guarantee by itself. Two casings that look identical in section can differ widely in how much they leak, how much they flex and whether they sweat. The things to specify and check are:</p>
<ul>
<li><strong>Air leakage</strong> at design pressure, which depends on gaskets, seams and penetrations.</li>
<li><strong>Deflection</strong> under positive and negative pressure, which depends on panel depth, skin gauges, core bonding and frame spacing.</li>
<li><strong>Thermal transmittance</strong>, set by the core and its thickness.</li>
<li><strong>Thermal bridging</strong>, set by how much metal connects inside to outside at edges, frames, doors and fasteners.</li>
</ul>
<p>AHRI 1350 provides a way to rate these mechanical performance characteristics; writing them into a specification is covered in <a href="<?= url('guides/ahri-1350-casing-performance-spec') ?>">specifying casing performance per AHRI 1350</a>.</p>
<p class="note">On a submittal, look beyond "2 in double-wall" to the skin gauges, liner material, core type and density, and how panel edges and frames are thermally separated.</p>
<?php guide_end([
    ['What is double-wall construction in an air handler?', 'Double-wall construction uses panels with an outer metal skin, an insulating core and an inner metal liner. The liner encloses the insulation so it is not exposed to the airstream, which improves cleanability, durability and indoor air quality.'],
    ['Is double-wall casing required?', 'It is not universally required by code, but ASHRAE 62.1 limits exposed materials that can erode or support growth in wet areas, and many owner standards and specifications require solid double-wall construction. It is the norm for commercial and institutional air handlers.'],
    ['Can double-wall panels have perforated liners?', 'Yes. Perforated inner liners are used where internal sound absorption is needed. They are usually kept out of wet sections and hygiene-sensitive units because the perforated surface is harder to clean than solid metal.'],
]);
