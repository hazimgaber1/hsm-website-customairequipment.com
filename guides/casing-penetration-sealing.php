<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('casing-penetration-sealing'); ?>
<p class="lede">Seal each casing penetration on both the inner liner and the outer skin, keep the insulation continuous between them, use a sleeve or grommet that does not create a metal path from inside to outside, and size the opening close to the pipe or conduit so the seal does not have to bridge a large gap. Done this way, a penetration keeps the casing's leakage class and thermal performance intact.</p>

<h2>Why penetrations matter</h2>
<p>A casing rated for a tight leakage class is tested as a complete assembly. Every hole added later for a coil connection, a sensor, a conduit or a drain is a potential leak and a potential thermal bridge. A typical air handler has dozens of penetrations: coil headers, vents and drains, humidifier steam lines, condensate drains, motor and sensor wiring, pneumatic tubing, pressure taps and lights. Sealed casually, together they can leak more than the panels and doors combined, and they often sweat on cooling units.</p>

<h2>Factory versus field penetrations</h2>
<ul>
<li><strong>Factory penetrations</strong> are made before or during assembly, with access to both sides of the panel and the manufacturer's standard sleeves and gaskets. They can be included in the factory leakage test.</li>
<li><strong>Field penetrations</strong> are made on site by mechanical, electrical and controls contractors, often from one side only and with whatever materials are on the truck. They are the main source of post-installation leakage.</li>
</ul>
<p>The best practice is to have as many penetrations as possible made in the factory, at locations agreed during submittals, and to supply field contractors with the manufacturer's sealing kits and details for the rest.</p>

<h2>Step-by-step: sealing a pipe penetration</h2>
<ol>
<li><strong>Plan the location.</strong> Avoid frame members, panel edges and door frames. Keep penetrations away from thermal breaks so the break is not bridged.</li>
<li><strong>Cut a clean, close-fitting hole</strong> in both skins, using a hole saw sized for the sleeve, not the pipe. Avoid torch cutting, which damages coatings and foam cores. Deburr and coat cut edges of galvanized or coated panels.</li>
<li><strong>Close the core.</strong> On foam panels, the exposed foam edge should be sealed. On mineral fibre panels, insert a sleeve that keeps fibres from entering the airstream.</li>
<li><strong>Install a sleeve or collar.</strong> Use a non-metallic or thermally broken sleeve that spans the panel depth, or separate inner and outer collars that do not touch. A continuous metal sleeve welded or screwed to both skins creates a cold path.</li>
<li><strong>Seal the inner face.</strong> Fit a gasketed escutcheon, a rubber grommet or a split boot around the pipe on the inside. On the negative-pressure side, this seal prevents air being drawn in; on the positive side it prevents conditioned air escaping.</li>
<li><strong>Seal the outer face</strong> with a second escutcheon or boot. Insulate the pipe up to the casing so there is no exposed cold metal at the outer face.</li>
<li><strong>Allow for movement.</strong> Hot water and steam piping expands. Use flexible boots that permit some axial and lateral movement rather than rigid sealant around the pipe.</li>
<li><strong>Support the pipe independently.</strong> The casing panel is not a pipe support. Piping loads on the penetration break seals and dent panels.</li>
<li><strong>Inspect and test.</strong> Check both sides with the unit running using smoke or an ultrasonic detector.</li>
</ol>

<h2>Electrical and controls penetrations</h2>
<ul>
<li>Use gasketed, liquid-tight conduit fittings or cord grips sized for the cable. Do not run conduit through an oversize hole and fill it with foam or caulk.</li>
<li>Seal inside conduits where they pass from the airstream to the exterior, to stop air flowing through the conduit itself. Conduit seals are also required by the electrical code in some situations.</li>
<li>Group multiple cables through a single sealed multi-cable fitting or a factory-installed penetration plate rather than many small holes.</li>
<li>Route field wiring between sections through factory raceways where provided.</li>
<li>Keep sensors and their capillaries sealed with grommets; a capillary through an open hole leaks surprisingly well.</li>
</ul>

<h2>Duct and large openings</h2>
<p>Duct connections are not penetrations in the same sense, but the joint between the duct collar and the casing is part of the casing envelope. Factory duct collars should be sealed to the casing at the factory; field ductwork connects to the collar, typically with a flexible connector. Field-cut openings for ducts on site should be framed, the panel edges closed and insulated, and the collar sealed on both faces. Duct connection practice is covered in <a href="<?= url('guides/duct-connections-at-ahu') ?>">duct connections at the AHU</a>.</p>

<h2>Materials</h2>
<table>
<thead><tr><th>Item</th><th>Recommended</th><th>Avoid</th></tr></thead>
<tbody>
<tr><td>Sleeves</td><td>Non-metallic or thermally broken sleeves</td><td>Continuous metal sleeves touching both skins</td></tr>
<tr><td>Pipe seals</td><td>EPDM or silicone boots and grommets rated for the pipe temperature</td><td>Foam-in-place without a mechanical seal</td></tr>
<tr><td>Sealant</td><td>Sealant compatible with coatings and rated for the temperature</td><td>General-purpose caulk as the primary seal</td></tr>
<tr><td>Conduit fittings</td><td>Gasketed liquid-tight fittings, sealed inside</td><td>Open bushings with foam fill</td></tr>
<tr><td>Fasteners</td><td>Stainless or coated, with sealing washers</td><td>Self-tapping screws through both skins</td></tr>
</tbody>
</table>
<p class="warn">In units serving healthcare or cleanroom spaces, any leakage into sections downstream of final filters bypasses filtration. Treat penetrations in those sections with extra care and include them in the factory test.</p>

<h2>Keeping it documented</h2>
<p>Show all factory penetrations on the submittal drawings with size and purpose. Require field contractors to use the manufacturer's sealing details and to report any added penetrations. During commissioning, inspect penetrations as part of casing checks; leakage discovered later is covered in <a href="<?= url('guides/casing-leaks-door-seal-troubleshooting') ?>">troubleshooting casing leaks</a>. For outdoor units, roof and wall penetrations also need weather flashing, as described in <a href="<?= url('guides/outdoor-unit-weatherproofing') ?>">weatherproofing outdoor AHUs</a>.</p>
<?php guide_end([
    ['How do you seal a pipe through an air handler casing?', 'Cut a close-fitting hole, close the insulation edge, install a sleeve that does not connect the inner and outer skins with metal, and fit gasketed boots or escutcheons on both faces. Support the pipe separately and allow for expansion.'],
    ['Why does my AHU sweat around pipe penetrations?', 'Usually because a metal sleeve or the pipe itself creates a cold path to the outer skin, or because insulation stops short of the casing. Thermally broken sleeves and continuous pipe insulation to the casing face prevent it.'],
    ['Should field penetrations be avoided?', 'Where possible, yes. Factory penetrations are made with both sides accessible and can be leak tested. When field penetrations are necessary, use the manufacturer\'s sealing kits and details.'],
]);
