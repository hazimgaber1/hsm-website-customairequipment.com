<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-mechanical-room-planning'); ?>
<p class="lede">At schematic design, reserve a mechanical room that holds the unit plus a coil-pull zone equal to the coil width, service clearance on the door side, a route large enough to bring the largest section in (and out again in 25 years), and space overhead for ducts to leave the unit without tight elbows. The checklist below covers each of those items.</p>

<h2>Start from a realistic unit envelope</h2>
<p>A room cannot be planned before the unit has approximate dimensions. Estimate the cross-section from airflow and face velocity, using the method in <a href="<?= url('guides/ahu-cross-section-sizing') ?>">sizing an AHU cross-section</a>, and the length by adding up the sections the unit needs. Ask a manufacturer for budget dimensions early if the unit is large or unusual. Then add the clearances below.</p>
<p class="note">A room drawn around an early estimate often shrinks during design development as architects reclaim space. Show the clearance zones on the plans as hatched "keep clear" areas so they survive.</p>

<h2>Room size checklist</h2>
<ul>
<li>☐ Unit length, width and height including base frame, housekeeping pad, roof or top-mounted dampers and any shipped-loose hoods.</li>
<li>☐ Coil pull space on the coil connection side, at least equal to the coil's finned length plus a margin for handling. If the room cannot provide this, specify coils that can be removed through the top or in pieces.</li>
<li>☐ Service clearance along the access door side for doors to swing fully open and for a person to work with a filter, motor or tool cart. A clear width of about 36 in (900 mm) is a common minimum; more is better for large units.</li>
<li>☐ Clearance at both ends where duct connections, end-mounted dampers or end access doors are located.</li>
<li>☐ Electrical working clearance in front of disconnects, VFDs and control panels, as required by the electrical code in force (NEC or CSA C22.1). See <a href="<?= url('guides/electrical-working-clearances') ?>">electrical working clearances</a>.</li>
<li>☐ Space for piping: supply and return headers, control valves, strainers and isolation valves at each coil, with room to remove the valve and coil.</li>
<li>☐ Space for the condensate trap below the base, or a pad high enough to provide trap depth.</li>
<li>☐ Clearance above the unit for duct connections, top-mounted dampers and filter removal on top-loading units.</li>
<li>☐ Space for a humidifier steam generator, its water treatment and drains, if not on the unit.</li>
<li>☐ Space for any return or relief fan, energy recovery unit or separate exhaust equipment in the same room.</li>
</ul>

<h2>Door and route checklist</h2>
<ul>
<li>☐ The largest single shipping section, or the largest knockdown component, can travel from the delivery point to the room. Check every door, corridor turn, elevator and ramp along the route.</li>
<li>☐ Floor loading along the route can take the section plus moving equipment.</li>
<li>☐ A removable louver, wall panel or knock-out panel is designated for future replacement if the doors are too small.</li>
<li>☐ The room door is wide enough for the largest replaceable component in day-to-day service, such as a fan motor or a coil section.</li>
<li>☐ A hoisting point or monorail is provided over heavy components that will be replaced, such as large motors on single-fan units.</li>
</ul>
<p>The details of section sizes for shipping are covered in <a href="<?= url('guides/shipping-split-design') ?>">planning shipping splits</a>. At schematic stage, it is enough to establish that a route exists.</p>

<h2>Duct exits checklist</h2>
<ul>
<li>☐ Supply duct leaves the unit with a straight run or a gradual transition before the first elbow. A tight elbow right at a fan discharge or plenum outlet adds pressure loss.</li>
<li>☐ Return and outdoor air ducts enter the mixing box without blocking each other or the access doors.</li>
<li>☐ Duct routes to the shaft do not cross the coil pull zone or the service aisle at head height.</li>
<li>☐ Outdoor air intake and relief louvers are far enough apart to avoid re-entrainment, and away from loading docks, cooling towers and plumbing vents.</li>
<li>☐ Smoke dampers, fire dampers and duct access doors near the unit are reachable.</li>
<li>☐ Ceiling height accommodates the tallest duct crossing plus sprinkler mains and lighting.</li>
</ul>

<h2>Room services checklist</h2>
<ul>
<li>☐ Floor drain near the condensate trap and any humidifier or coil drain points, with a funnel drain or indirect connection as required by plumbing code.</li>
<li>☐ Floor waterproofing or curbs in rooms above occupied space.</li>
<li>☐ Lighting adequate for maintenance, including at the rear of the unit.</li>
<li>☐ Convenience receptacles and, for larger rooms, a hose bib for coil cleaning.</li>
<li>☐ Ventilation or conditioning for the room itself, accounting for heat from motors, drives and piping.</li>
<li>☐ Acoustic separation from adjacent occupied spaces; see <a href="<?= url('guides/mechanical-room-noise-transmission') ?>">mechanical room noise transmission</a>.</li>
<li>☐ Freeze protection for rooms with outdoor air intakes in cold climates.</li>
</ul>

<h2>When the room is too small</h2>
<ol>
<li>Rearrange the unit as stacked or vertical to trade length for height.</li>
<li>Use a fan array to shorten the fan section.</li>
<li>Specify coils with removable sections or top removal to cut pull space.</li>
<li>Use side-access filters to avoid an upstream access section.</li>
<li>Split the duty into two smaller units.</li>
<li>Move the unit to the roof and reclaim the room, with the tradeoffs that implies.</li>
</ol>
<?php guide_end([
    ['How much clearance does an air handler need?', 'At minimum, enough on the door side to open doors fully and work, often about 36 in, plus coil pull space equal to the coil length on the connection side and electrical working clearance in front of panels. Manufacturer recommendations and code requirements govern for each project.'],
    ['What is coil pull space?', 'Coil pull space is the clear area beside a unit needed to slide a coil out for replacement. It is typically equal to the coil finned length plus some handling margin, on the side where the coil connections are.'],
    ['How do I plan for future AHU replacement?', 'Identify a route from outdoors to the mechanical room that can pass the largest unit section, or a removable wall panel or louver. If no route exists, plan on knockdown construction when the unit is eventually replaced.'],
]);
