<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('field-wiring-between-sections'); ?>
<p class="lede">When an air handler ships in sections, the factory wiring is cut at each split and left as labelled harness ends, plug connectors or terminal strips in junction boxes. Field wiring between sections reconnects those ends so power, controls and safeties work exactly as they did during factory run testing.</p>

<h2>Why wiring has to be split at all</h2>
<p>A custom air handler is wired and tested as a complete unit wherever possible. Fans, motors, VFDs, dampers, actuators, sensors, lights and service receptacles may be spread across a unit 40 or 60 ft long, with the control panel in one section. When the unit is separated for shipping, every conductor that crosses a split has to be disconnected and protected so the sections can travel and be rigged independently.</p>
<p>Good split wiring is designed, not improvised. The factory decides at the engineering stage where the splits fall and plans each crossing conductor accordingly. The goal is to make field reconnection fast and mistake-proof, because a wiring error at a split can disable a freezestat or reverse a fan.</p>

<h2>The three common approaches</h2>
<table>
<thead><tr><th>Method</th><th>How it works</th><th>Strengths</th><th>Watch for</th></tr></thead>
<tbody>
<tr><td>Plug-and-play harness connectors</td><td>Multi-pin industrial connectors on each side of the split; field crew mates them</td><td>Fast, few wiring errors, easy to separate again</td><td>Connector ratings must suit the voltage, current and environment; keyed connectors avoid cross-mating</td></tr>
<tr><td>Junction box with terminal strips</td><td>Conductors from one section land on numbered terminals; the other section's coiled leads are pulled through and terminated</td><td>Flexible for many conductors and mixed voltages</td><td>More labour, relies on correct labelling and terminal torque</td></tr>
<tr><td>Field-pulled conductors</td><td>Factory provides conduit stubs or raceway; electrician pulls new conductors across</td><td>Suits large power feeders where connectors are impractical</td><td>Longest install time; field must follow the factory wiring diagram precisely</td></tr>
</tbody>
</table>
<p>Many units use a combination: plug connectors for controls and low-voltage signals, junction boxes for 120 V lighting and receptacle circuits, and field-pulled conductors for motor feeders where a VFD sits in a different section from its motor.</p>

<p>Whichever method is used, the factory normally checks each crossing during run testing with the harness connected, then disconnects it for shipping. That means a correct reconnection restores a circuit that has already been proven, which is a strong argument for using the factory harness rather than re-pulling conductors in the field unless there is a good reason.</p>

<h2>Separating power and control wiring</h2>
<p>Split crossings follow the same separation rules as the rest of the unit. Line-voltage motor conductors and VFD output cables are kept apart from analog sensor wiring and communication cables, either in separate raceways or with barriers in shared boxes. VFD output cables in particular radiate electrical noise and can corrupt 4 to 20 mA or 0 to 10 V signals if they share a connector. Shielded cable shields need to be continued across the split, terminated at one end only as the wiring diagram shows, so the shield does not become a ground loop.</p>
<p class="warn">Class 2 low-voltage circuits and power circuits generally cannot share the same connector or terminal strip without proper separation. Follow the wiring diagram and the electrical code adopted in your jurisdiction.</p>

<h2>Labelling and documentation</h2>
<p>Every conductor end at a split should carry a durable label that matches the terminal or pin number on the wiring diagram. Look for:</p>
<ul>
<li>A split wiring schedule listing each crossing, its circuit, conductor size and terminal or pin numbers on both sides.</li>
<li>Section identification on each junction box (for example "JB-2/3" for the box at the split between sections 2 and 3).</li>
<li>Keyed or colour-coded connectors where several look alike.</li>
<li>Notes for any circuit that must be checked after reconnection, such as safety interlocks.</li>
</ul>
<p>Keep the factory wiring diagrams in the unit's document pocket and in the turnover package. They are the reference for any future change.</p>

<h2>Grounding and bonding across splits</h2>
<p>Each section's metal casing must be bonded to the equipment grounding system. Some designs rely on the base rail splice for continuity; most also provide a bonding jumper at each split, or carry the equipment grounding conductor through the harness. Check that bonding jumpers are connected, that paint or gasket does not insulate a bonding point, and that ground continuity is tested after joining. Motor frames on isolated bases need their own flexible bonding conductor.</p>

<h2>Testing after reconnection</h2>
<p>Before power is applied, verify the connections in the field rather than trusting that labels were followed:</p>
<ol>
<li>Visually check every crossing against the split wiring schedule.</li>
<li>Check terminal tightness on strips and the locking of plug connectors.</li>
<li>Megger motor circuits that were field-pulled, with VFDs disconnected so the insulation test voltage does not reach drive electronics.</li>
<li>Check continuity of safety circuits such as freezestats, high-pressure limits, smoke detectors and door switches end to end.</li>
<li>Confirm each sensor reads plausibly at the controller once powered.</li>
</ol>
<p>These checks sit within the wider <a href="<?= url('guides/pre-startup-checklist') ?>">AHU pre-startup checklist</a>. Where the disconnect switches go, and whether a VFD is mounted on or off the unit, is a design question covered in <a href="<?= url('guides/disconnects-and-vfd-placement') ?>">disconnects and VFD placement</a>. Mechanical joining of the sections themselves, which happens before this wiring, is described in <a href="<?= url('guides/field-joining-split-sections') ?>">how to join AHU shipping sections</a>.</p>
<?php guide_end([
    ['Who reconnects the wiring between AHU shipping sections?', 'Usually the electrical contractor, following the manufacturer\'s wiring diagrams and split wiring schedule. Some projects include manufacturer field supervision or startup services to check the work.'],
    ['Can VFD output cables and sensor wires share a junction box at a split?', 'Only with proper separation, such as a barrier or separate compartments, and in line with the wiring diagram. VFD output wiring creates electrical noise that can corrupt analog sensor signals.'],
    ['Do I need to test wiring after joining sections?', 'Yes. Check every crossing against the schedule, verify connector locking and terminal torque, test ground continuity and confirm safety circuits work end to end before applying power.'],
]);
