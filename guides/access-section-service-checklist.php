<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('access-section-service-checklist'); ?>
<p class="lede">Add an access section wherever a technician needs to see, reach or clean a surface that the adjacent components would otherwise hide: both faces of every coil, both sides of filter banks, the fan inlet, humidifier grids, energy recovery devices and dampers. Use the checklist below at layout stage, before the unit length is fixed.</p>

<h2>Access, plenum and blank sections</h2>
<p>Three kinds of empty section show up on AHU drawings, and they are not interchangeable:</p>
<ul>
<li><strong>Access section:</strong> an empty section with at least one door, provided specifically for inspection, cleaning and service.</li>
<li><strong>Plenum section:</strong> an empty section provided for airflow reasons, such as a fan discharge plenum, a turning plenum or a duct connection. It may or may not have a door.</li>
<li><strong>Blank or spacer section:</strong> an empty section added for length, typically to provide humidifier absorption distance or to space a fan from a coil. Often without a door unless one is requested.</li>
</ul>
<p>A plenum or blank section can double as access if it has a door and enough length to work in. Make that explicit on the drawings rather than assuming it. Door hardware, sizes and swing are a specification matter covered in <a href="<?= url('guides/access-door-specification') ?>">access door specification</a>.</p>

<h2>Checklist by component</h2>
<h3>Dampers and mixing</h3>
<ul>
<li>☐ Access to outdoor, return and relief damper blades, linkages and actuators from inside the unit.</li>
<li>☐ Access to the airflow measuring station for cleaning sensors.</li>
<li>☐ Access downstream of any air blender to inspect for debris.</li>
</ul>
<h3>Filters</h3>
<ul>
<li>☐ Side-access filter racks: access door on the filter section itself, on the side where filters slide out.</li>
<li>☐ Front-load filter frames: an access section upstream (or downstream for downstream-loaded frames) at least long enough to remove and install the deepest filter, plus working room.</li>
<li>☐ Access to both faces of the final filter bank where frames require gasket inspection.</li>
<li>☐ Lighting and a view port in front of HEPA or final filter banks where the specification calls for visual inspection.</li>
</ul>
<h3>Coils</h3>
<ul>
<li>☐ Access upstream of every cooling coil to inspect and clean the entering face.</li>
<li>☐ Access downstream of every cooling coil to inspect the leaving face and drain pan. ASHRAE 62.1 addresses access for inspection and cleaning of drain pans and coils; check the edition adopted in your jurisdiction.</li>
<li>☐ Access between stacked or consecutive coils deep enough to clean each face; adjacent coils with no gap cannot be cleaned on their inner faces.</li>
<li>☐ Access to the heating coil at least on one face, typically upstream.</li>
<li>☐ Access to coil drain and vent connections inside the unit if they are not brought out through the casing.</li>
</ul>
<h3>Fans</h3>
<ul>
<li>☐ Door on the fan section large enough to remove the motor and, for single fans, the wheel.</li>
<li>☐ Access to the fan inlet side to inspect the inlet cone and wheel blades.</li>
<li>☐ Access to motor junction boxes, bearings and grease fittings, or extended grease lines to the casing exterior.</li>
<li>☐ For fan arrays, a path to remove an individual fan and motor without dismantling the array.</li>
</ul>
<h3>Humidifiers</h3>
<ul>
<li>☐ Access upstream of the dispersion grid to inspect manifolds and nozzles.</li>
<li>☐ Access downstream within the absorption distance to check for wetting and standing water.</li>
<li>☐ Access to any humidifier drain pan or wet floor.</li>
</ul>
<h3>Energy recovery</h3>
<ul>
<li>☐ Access on both airstreams, upstream and downstream of wheels and plates, for cleaning media.</li>
<li>☐ Access to wheel drive motor, belt and seals.</li>
<li>☐ Access to plate exchanger condensate pans and bypass dampers.</li>
</ul>
<h3>Attenuators and discharge</h3>
<ul>
<li>☐ Access upstream of attenuators to inspect baffles for damage or fouling.</li>
<li>☐ Access to the discharge plenum for smoke detectors, duct static sensors and fire or smoke dampers mounted at the unit outlet.</li>
</ul>

<h2>Sizing an access section</h2>
<ol>
<li><strong>Length:</strong> a person must be able to stand or kneel inside and reach the component face. A minimum clear length on the order of 24 in (600 mm) is common for a crouching inspection; 36 in (900 mm) or more is much better for cleaning a coil face with a spray wand. Larger units with tall coils may need a platform or a deeper section.</li>
<li><strong>Door size:</strong> the opening must pass the largest serviceable item, such as a filter, a fan motor or a humidifier manifold, not just a person.</li>
<li><strong>Floor:</strong> access sections around wet components should have drainable or sealed floors.</li>
<li><strong>Lighting:</strong> marine lights with a switch outside the unit make inspections practical, especially in tall units.</li>
</ol>
<p class="note">Tall units with coils taller than a person can reach need intermediate platforms or grating. Plan them during layout, because they affect the access section length and the location of the door.</p>

<h2>Balancing access against length</h2>
<p>Every access section adds length, cost and some static pressure. When the mechanical room is tight, look for places where one access section serves two components, such as between a preheat coil and a cooling coil, or where a fan discharge plenum can also serve as access to the downstream heating coil. What you should not do is eliminate access to a cooling coil or drain pan; those are where microbial growth starts and where cleaning matters most. The <a href="<?= url('guides/ahu-mechanical-room-planning') ?>">mechanical room planning checklist</a> covers the clearances needed outside the unit, and the <a href="<?= url('guides/ahu-component-sequence') ?>">component sequence guide</a> explains where components fall in the first place.</p>
<?php guide_end([
    ['How long should an AHU access section be?', 'Long enough for a person to work inside and clean the adjacent component face. Around 24 in is a practical minimum for inspection, and 36 in or more is better for coil cleaning. Larger units with tall coils may need longer sections and platforms.'],
    ['Do I need access on both sides of a cooling coil?', 'It is strongly recommended. The upstream face collects dirt and the downstream face and drain pan are where moisture and microbial growth occur. Both need to be inspected and cleaned.'],
    ['What is the difference between a blank section and an access section?', 'A blank section is an empty section added for spacing, such as humidifier absorption distance. An access section is specifically provided for service and always has a door. A blank section can serve as access only if it has a door and enough room.'],
]);
