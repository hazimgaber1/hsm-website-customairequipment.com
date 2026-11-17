<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('horizontal-vertical-stacked-ahu-configurations'); ?>
<p class="lede">Horizontal units lay every section in a straight line and need the most floor length; vertical units turn the airflow upward to save length at the cost of height; stacked (double-deck) units put one airstream or set of sections on top of another to fit a long process into a short room. The right choice comes from the room, not the catalog.</p>

<h2>The three basic shapes</h2>
<h3>Horizontal inline</h3>
<p>Air enters at one end and leaves at the other, passing each section in turn. Every component sits at floor level where it is easy to reach. Duct connections can still be on the top, bottom, side or end of any section, so a horizontal unit does not force a horizontal duct.</p>
<h3>Vertical</h3>
<p>Air enters low, usually through a mixing or filter section, and turns upward through a coil and into a fan section mounted above. The footprint shrinks to roughly the width of the unit times two or three sections deep. Vertical units are common in smaller sizes, closets and floor-by-floor applications where the room is tall but cramped.</p>
<h3>Stacked or double-deck</h3>
<p>Two levels of sections sit one on top of the other. The top and bottom decks may carry two different airstreams, such as supply on the bottom and exhaust on top with an energy recovery wheel or plate spanning both, or they may carry one airstream that folds back on itself, such as mixing and filters on the bottom feeding a fan and coils on top.</p>

<h2>How they compare</h2>
<table>
<thead><tr><th>Factor</th><th>Horizontal</th><th>Vertical</th><th>Stacked</th></tr></thead>
<tbody>
<tr><td>Floor length needed</td><td>Longest</td><td>Shortest</td><td>About half of an equivalent horizontal unit</td></tr>
<tr><td>Room height needed</td><td>Lowest</td><td>High for its size</td><td>Highest; roughly double the unit cross-section plus base</td></tr>
<tr><td>Service access</td><td>All at floor level</td><td>Fan section elevated</td><td>Upper deck needs platforms, ladders or catwalks</td></tr>
<tr><td>Coil pull space</td><td>Beside each coil</td><td>Beside coil, usually at floor level</td><td>Upper-deck coils pulled at height</td></tr>
<tr><td>Energy recovery integration</td><td>Side-by-side airstreams, wide footprint</td><td>Uncommon</td><td>Natural fit for wheels and plates</td></tr>
<tr><td>Airflow quality</td><td>Straight path, easiest to get uniform</td><td>Turn below coil needs care</td><td>Turns between decks need plenums and turning space</td></tr>
<tr><td>Shipping</td><td>Many sections, each at full height</td><td>Few sections</td><td>Decks usually ship separately and stack on site</td></tr>
<tr><td>Structural load</td><td>Spread over a long area</td><td>Concentrated</td><td>Concentrated and tall</td></tr>
</tbody>
</table>

<h2>Fitting a unit to the room</h2>
<p>Start with the mechanical room dimensions and the airflow. The cross-section required for the airflow is set by face velocity limits, worked through in the <a href="<?= url('guides/ahu-cross-section-sizing') ?>">cross-section sizing guide</a>. Multiply out the length of the required sections and compare it with the room.</p>
<ul>
<li>If the room is long enough with service clearances at both ends, a horizontal unit is the simplest and usually the least expensive.</li>
<li>If the room is short but the ceiling is high, look at stacking. A double-deck unit can cut length nearly in half.</li>
<li>If both length and height are tight, consider splitting the unit into two side-by-side units or moving to a fan array to shorten the fan section.</li>
<li>For 100% outdoor air units with energy recovery, the supply and exhaust airstreams must cross somewhere. A stacked arrangement with the wheel spanning both decks avoids long side-by-side ducting.</li>
</ul>
<p class="note">Height checks must include the base frame, housekeeping pad, condensate trap depth, overhead duct connections and any light fixtures or sprinkler mains above the unit.</p>

<h2>Hybrid arrangements</h2>
<p>Real projects often mix shapes. An L-shaped unit turns 90 degrees partway through to follow a room's walls. A "piggyback" unit stacks only the return or exhaust fan over the supply path. A unit can be horizontal through the filters and coils, then turn vertical into a fan section that discharges straight up into a shaft. Custom construction allows these combinations as long as each turn has enough plenum depth to keep airflow uniform entering the next component.</p>
<p>Every turn costs some pressure drop and some length in plenum space, so a compact arrangement is not automatically cheaper to operate. Compare the added static of plenums and turns with the space savings.</p>

<h2>Service and safety on upper decks</h2>
<p>Stacked units put doors, filters and sometimes fans well above the floor. Plan how a technician will reach them: integral platforms, permanent ladders with cages, or a mezzanine. Check that filters can be carried down safely and that coils on the upper deck can be pulled with a hoist or removed in pieces. These details are easier to solve on paper than after installation, and the <a href="<?= url('guides/ahu-mechanical-room-planning') ?>">mechanical room planning checklist</a> lists the clearances to reserve.</p>
<p>If the room is unusual, a custom configuration can be modelled in the <a href="<?= url('design') ?>">3D configurator</a> to test whether a horizontal, vertical or stacked layout fits before committing to a design.</p>
<?php guide_end([
    ['What is a stacked air handling unit?', 'A stacked or double-deck AHU places sections on two levels, one above the other. It may carry two separate airstreams, such as supply and exhaust with energy recovery between them, or fold one airstream back on itself to shorten the unit.'],
    ['When should I use a vertical air handler?', 'Vertical units suit small to medium airflows in rooms with limited floor area but enough height, such as floor-by-floor mechanical closets. Large airflows usually favour horizontal or stacked arrangements for better access and airflow uniformity.'],
    ['Does stacking an AHU increase pressure drop?', 'Usually a little. The turns between decks need plenum space and add some static pressure. With well-sized plenums the penalty is modest, and it is often worth it for the floor space saved.'],
]);
