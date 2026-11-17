<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('drainable-welded-ahu-floors'); ?>
<p class="lede">A drainable AHU floor is a watertight floor liner with continuously welded or sealed seams, turned up at the walls, and sloped or fitted with drains so that any water reaching it leaves the unit instead of soaking into insulation or leaking through to the room below. It is used in humidifier sections, around coils, in washdown units and anywhere water is likely to reach the floor.</p>

<h2>Why the floor matters</h2>
<p>Drain pans catch condensate under cooling coils. Everything else that gets wet ends up on the floor: humidifier spray that does not absorb, carryover from coils at high velocity, cleaning water from coil washing, leaks from piping and valves inside the unit, and snow or rain entering through intakes. A standard floor of bolted or riveted panels with gasketed joints is not designed to hold water. Water finds the seams, wets the insulation core, corrodes the base and drips into the space below. In a penthouse above occupied floors, that becomes a building problem.</p>
<p>The drain pan under a cooling coil is a separate component with its own design rules, covered in <a href="<?= url('guides/drain-pan-design-ashrae-62-1') ?>">drain pan design to ASHRAE 62.1</a>. This guide is about the floor around and beyond it.</p>

<h2>Floor construction</h2>
<h3>Structure</h3>
<p>The floor is a double-wall assembly like the walls: a structural bottom skin, an insulating core, and a top liner that forms the walking and wetted surface. It sits on the base frame and must carry foot traffic, equipment loads and maintenance carts without permanent deflection. Floors often use heavier liner gauges and closer support than wall panels for that reason.</p>
<h3>The liner</h3>
<p>For wet sections, the liner is commonly stainless steel, which tolerates standing water and cleaning chemicals. Galvanized liners can work in occasionally wet areas but are consumed over time where water stands. Aluminum floors are used in some lightweight units, with attention to galvanic contact.</p>
<h3>Seams</h3>
<ul>
<li><strong>Continuously welded seams</strong> join liner sheets into a single watertight membrane. The weld must be continuous, not stitch-welded, and finished on stainless to restore corrosion resistance at the heat-affected zone.</li>
<li><strong>Sealed lap seams</strong> with a continuous bead of sealant under a lap can work for lightly wet areas, but sealant ages and can be damaged during cleaning.</li>
<li><strong>Wall-to-floor junction:</strong> the liner turns up the wall to form an integral upstand, typically a few inches high, welded at the corners so the floor becomes a shallow tray.</li>
</ul>
<h3>Openings in the floor</h3>
<p>Fan bases, coil supports and other components that pass through or bolt to the floor are a common leak path. Supports should be welded to the liner, mounted on welded pads, or use sealed fasteners that do not penetrate the membrane.</p>

<h2>Drains in the floor</h2>
<p>A floor that holds water needs a way to empty. Options include:</p>
<ul>
<li><strong>Sloped floor to a drain:</strong> the floor liner is formed with a fall toward one or more drain outlets, so water does not stand. Best for humidifier and washdown sections.</li>
<li><strong>Flat floor with drains at low points:</strong> drain fittings at corners or along one wall, relying on the base being installed level and a slight local fall.</li>
<li><strong>Recessed floor drain pan:</strong> a sump or recessed area at the drain outlet.</li>
</ul>
<p>Each floor drain needs its own trap sized for the section's static pressure, and a means to keep the trap primed. A dry trap on a negative-pressure section pulls air, and sewer or room odours, into the unit. Floor drains that see water only during cleaning often dry out; specify a trap that maintains a seal or a priming method. Trap sizing details are covered in <a href="<?= url('guides/condensate-trap-and-pad-height') ?>">condensate traps and pad height</a>.</p>
<p class="warn">Floor drains must not be piped directly into the condensate drain pan's trap or connected in a way that one section's pressure can blow back through another. Separate traps per pressure zone.</p>

<h2>Where to specify drainable floors</h2>
<table>
<thead><tr><th>Section</th><th>Recommendation</th></tr></thead>
<tbody>
<tr><td>Humidifier and its absorption distance</td><td>Welded, sloped stainless floor with drain</td></tr>
<tr><td>Cooling coil section beyond the drain pan</td><td>Welded or sealed floor, often stainless, extending downstream</td></tr>
<tr><td>Evaporative or adiabatic cooling sections</td><td>Welded, sloped stainless floor with drain</td></tr>
<tr><td>Access section used for coil washing</td><td>Welded floor with drain</td></tr>
<tr><td>Outdoor air intake section on outdoor units</td><td>Sealed or welded floor with drain to handle rain and snow intrusion</td></tr>
<tr><td>Washdown and food processing units</td><td>Welded stainless floor throughout</td></tr>
<tr><td>Dry filter and fan sections</td><td>Standard sealed floor usually adequate</td></tr>
</tbody>
</table>
<p>For hygiene-sensitive applications, the floor finish and how it meets walls also matters; see the <a href="<?= url('guides/hygienic-ahu-construction-checklist') ?>">hygienic construction checklist</a>.</p>

<h2>Specification points</h2>
<ol>
<li>Identify sections requiring drainable floors on the drawings.</li>
<li>State the liner material and minimum thickness.</li>
<li>Require continuous welding of liner seams and wall upstands, with weld finishing on stainless.</li>
<li>Require floor slope toward drains where water is expected, and drain size and location.</li>
<li>Require that floor-mounted components not penetrate the floor membrane, or that penetrations be welded or sealed.</li>
<li>Require a floor water test at the factory where leaks would be costly: fill the floor to a set depth and inspect for leaks underneath.</li>
<li>Require the floor to support a stated live load for maintenance traffic.</li>
</ol>
<?php guide_end([
    ['What is a welded floor in an air handler?', 'A welded floor has a top liner whose seams and wall upstands are continuously welded to form a watertight tray. Water reaching the floor cannot leak through seams into insulation or the space below and instead drains to a trapped outlet.'],
    ['Where do air handlers need drainable floors?', 'Humidifier sections, evaporative cooling sections, areas downstream of cooling coils, coil washing access sections, and intake sections on outdoor units are the most common. Washdown and food processing units often have welded floors throughout.'],
    ['Do floor drains in an AHU need traps?', 'Yes. Each floor drain needs a trap sized for the static pressure in its section and a way to stay primed. Without a seal, a negative-pressure section pulls air and odours through the drain.'],
]);
