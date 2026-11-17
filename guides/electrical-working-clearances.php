<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('electrical-working-clearances'); ?>
<p class="lede">Electrical equipment on or near an air handler that may be examined, adjusted or serviced while energized, such as control panels, VFDs and motor starters, needs a clear working space in front of it. In the US that space is set by NEC section 110.26; in Canada by the Canadian Electrical Code (CSA C22.1), Rule 2-308. The space is about depth, width, height and access, and it must stay clear for the life of the installation.</p>

<h2>Why AHU layouts run into clearance problems</h2>
<p>Air handlers concentrate electrical equipment on the casing: unit-mounted VFDs, control panels, starters and disconnects often sit on the access side of fan and coil sections. Mechanical rooms also fill quickly with piping, ductwork, pumps and the unit itself. Problems are common because the electrical working space is drawn late, often only once the unit submittal shows where panels are mounted, and because piping trades route through what looks like open floor.</p>
<p>Clearance problems are expensive to fix after installation: moving a VFD, re-routing a chilled water main, or turning the unit around. They are also a frequent cause of failed electrical inspections.</p>

<h2>NEC 110.26 in practical terms</h2>
<p>NEC 110.26 sets three main dimensions for the working space in front of equipment operating at 1000 V or less (earlier editions said 600 V) that is likely to require examination, adjustment, servicing or maintenance while energized.</p>
<h3>Depth</h3>
<p>Depth is measured from the exposed live parts, or from the enclosure front if parts are enclosed, out into the room. It depends on the voltage to ground and on what is opposite the equipment:</p>
<table>
<thead><tr><th>Condition</th><th>Description</th><th>0–150 V to ground</th><th>151–600 V to ground (typical range)</th></tr></thead>
<tbody>
<tr><td>Condition 1</td><td>Exposed live parts on one side, no live or grounded parts on the other (or both sides guarded/insulated)</td><td>3 ft (914 mm)</td><td>3 ft (914 mm)</td></tr>
<tr><td>Condition 2</td><td>Live parts on one side, grounded parts (such as concrete, brick, tile or a grounded casing) on the other</td><td>3 ft (914 mm)</td><td>3.5 ft (1.07 m)</td></tr>
<tr><td>Condition 3</td><td>Exposed live parts on both sides of the working space</td><td>3 ft (914 mm)</td><td>4 ft (1.22 m)</td></tr>
</tbody>
</table>
<p>A 480Y/277 V unit has 277 V to ground, so it falls in the higher column. A grounded steel air handler casing or a concrete wall opposite a VFD makes Condition 2, so plan on 3.5 ft. Check the NEC edition adopted in your jurisdiction, as table voltage ranges have changed between editions.</p>
<h3>Width</h3>
<p>The working space must be at least 30 in (762 mm) wide or the width of the equipment, whichever is greater. Equipment doors and hinged panels must be able to open at least 90 degrees within the space.</p>
<h3>Height</h3>
<p>Headroom is at least 6.5 ft (2.0 m) or the height of the equipment, whichever is greater, measured from the floor or platform. Ducts, pipes and cable tray cannot intrude into this zone in front of the equipment.</p>
<p class="note">Section 110.26 also covers entrance and egress to the working space for large equipment, illumination, and dedicated equipment space for switchboards and panelboards. Those apply in mechanical rooms too, but AHU-mounted panels usually trigger mainly the depth, width and height rules.</p>

<h2>Canadian Electrical Code requirements</h2>
<p>In Canada, Rule 2-308 of the CEC requires a minimum working space of 1 m (about 39 in) in front of electrical equipment such as panelboards, control centres and similar equipment, with no obstructions, and with sufficient space to open doors fully. Provincial amendments and the CEC edition adopted locally can add requirements; confirm with the inspection authority. Note that the Canadian 1 m figure is a flat minimum, which can be more than the NEC requires for lower-voltage equipment.</p>

<h2>Applying the rules to an air handler</h2>
<ul>
<li><strong>Unit-mounted VFDs and panels:</strong> the working space starts at the panel face and extends away from the unit. If two units face each other with panels on both, the aisle between them is often Condition 3 territory.</li>
<li><strong>Panels mounted on the access side:</strong> the working space can overlap the service corridor along the unit, as long as nothing is stored there and coil pull or door swing does not block it.</li>
<li><strong>Outdoor units:</strong> the working space must be on the roof or platform surface, clear of curbs, parapets and roof equipment. A panel near a roof edge may need guardrails or a platform.</li>
<li><strong>Raised housekeeping pads:</strong> if the panel is high above the floor, the working space may need a platform so workers can stand within reach.</li>
<li><strong>Piping crossing in front of panels:</strong> chilled water, steam and condensate piping must be routed outside the working space, not just above head height.</li>
</ul>
<p>Where the disconnecting means must be located, and whether the VFD should be on the unit or remote, are design questions covered in <a href="<?= url('guides/disconnects-and-vfd-placement') ?>">disconnects and VFD placement</a>. VFD enclosure ratings for wet or dusty rooms are in <a href="<?= url('guides/vfd-enclosure-types-nema') ?>">VFD enclosure types</a>.</p>

<h2>Checking clearances during installation</h2>
<ol>
<li>Mark the working space for every panel on the floor with tape or paint before other trades rough in.</li>
<li>Walk the space with the drawings when piping and duct are hung; check headroom and depth with a tape.</li>
<li>Open every panel door to 90 degrees and confirm nothing stops it.</li>
<li>Check that housekeeping pads and drains do not create trip hazards in the space.</li>
<li>Record clearances in the pre-startup documentation.</li>
</ol>
<p>Room planning that leaves space for these clearances from the start is discussed in <a href="<?= url('guides/ahu-mechanical-room-planning') ?>">AHU mechanical room planning</a>.</p>
<?php guide_end([
    ['How much clearance does a VFD on an air handler need?', 'In the US, NEC 110.26 typically requires 3 to 4 ft of depth depending on voltage to ground and what is opposite, at least 30 in of width, and 6.5 ft of headroom. In Canada, the CEC requires at least 1 m in front. Check the edition adopted locally.'],
    ['Does a steel AHU casing opposite a panel change the clearance?', 'Yes. A grounded metal casing or a concrete wall across from the panel usually makes NEC Condition 2, which increases the required depth for equipment above 150 V to ground, typically to 3.5 ft.'],
    ['Can pipes run through the electrical working space above head height?', 'Piping and ductwork cannot intrude into the working space, which extends to at least 6.5 ft or the equipment height. Foreign systems above that zone are subject to additional rules for some equipment types, so check the code before routing.'],
]);
