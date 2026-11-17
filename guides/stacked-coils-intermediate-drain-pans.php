<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('stacked-coils-intermediate-drain-pans'); ?>
<p class="lede">Once a cooling coil gets taller than roughly 42 to 48 in (1.1 to 1.2 m) of finned height, it is usually split into two or more coils stacked one above the other, each with its own drain pan. The intermediate pan catches condensate from the upper coil before it runs down onto the lower coil, where the accumulated water would be blown off the fins and carried downstream.</p>

<h2>Why tall cooling coils carry water</h2>
<p>Condensate forms over the entire face of a dehumidifying coil and runs down the fins under gravity. On a single tall coil, the water collected by the top rows has to flow past every fin below it on its way to the pan. By the time it reaches the bottom third of the coil, the fins are carrying the condensate from the whole face, the film is thick, and droplets are bridging between fins. Air moving at design face velocity strips that water off the leaving edge.</p>
<p>The effect depends on condensate rate, fin type and velocity. The interaction with face velocity is explained in <a href="<?= url('guides/cooling-coil-face-velocity-moisture-carryover') ?>">face velocity limits and moisture carryover</a>. Splitting the coil shortens the drainage path and resets the water load at each pan.</p>

<h2>When stacking is needed</h2>
<p>Common reasons to stack coils include:</p>
<ul>
<li><strong>Finned height beyond the manufacturer's single-coil limit for carryover.</strong> Many coil builders and owner standards set a maximum single cooling coil height in the range of about 42 to 48 in; check the specific limit for the fin type selected.</li>
<li><strong>Manufacturing and handling limits.</strong> Coils beyond a certain size are difficult to build, braze, ship and rig. Two smaller coils can be easier than one large one.</li>
<li><strong>Future replacement.</strong> Smaller coils come out of a unit more easily. Removal arrangements are covered in <a href="<?= url('guides/removable-coil-design') ?>">removable coil design</a>.</li>
<li><strong>Tall units with fixed widths.</strong> Vertical units and units in narrow rooms are often tall in the coil section to keep face velocity in range.</li>
</ul>
<p>Heating coils, which run dry, do not have a carryover problem and are stacked only for size or handling reasons. They do not need intermediate condensate pans.</p>

<h2>How an intermediate drain pan works</h2>
<p>An intermediate pan sits between the upper and lower coils, across the full coil width and depth. It collects condensate from the upper coil and drains it to the side, either into a vertical drop tube that runs down to the main pan or directly out of the casing through its own trapped drain line.</p>
<p>Key design features:</p>
<ul>
<li><strong>Full coverage.</strong> The pan must extend under the entire upper coil, from the entering face to beyond the leaving face, so water dripping off the leaving edge falls into it.</li>
<li><strong>Downstream extension.</strong> As with the main pan, it should extend past the leaving face by enough distance to capture droplets carried by the air; the needed distance grows with face velocity.</li>
<li><strong>Slope toward the outlet.</strong> The pan is pitched so water does not stand. Standing water in an intermediate pan is just as much a microbial growth site as in the main pan.</li>
<li><strong>Drain path sized for the condensate rate.</strong> Drop tubes must carry the upper coil's peak condensate without overflowing.</li>
<li><strong>Corrosion-resistant material.</strong> Stainless steel is the common choice because the pan is hard to reach for repair.</li>
<li><strong>Accessibility for cleaning.</strong> The pan must be reachable from an access section or door; a pan sealed between coils with no access cannot be maintained.</li>
</ul>

<h2>Drop tubes versus separate drain connections</h2>
<table>
<thead><tr><th>Arrangement</th><th>How it works</th><th>Considerations</th></tr></thead>
<tbody>
<tr><td>Internal drop tubes</td><td>Tubes carry water from intermediate pan down to the main pan</td><td>One external drain and trap; tubes must not obstruct airflow or coil removal; tube outlets must discharge below the main pan's water line or be arranged so they do not spray</td></tr>
<tr><td>Separate external drain</td><td>Intermediate pan has its own connection through the casing</td><td>Additional trap per pan, each trap must suit the section's static pressure; no internal tubes</td></tr>
</tbody>
</table>
<p>Either works when detailed correctly. In draw-through units under strong negative pressure, separate drains need their own correctly sized traps, the same as the main pan. Main pan and trap design are covered in <a href="<?= url('guides/drain-pan-design-ashrae-62-1') ?>">drain pan design to ASHRAE 62.1</a>.</p>

<h2>Air bypass between stacked coils</h2>
<p>The space where the intermediate pan sits is a potential bypass. Air that passes through the pan zone instead of through finned surface leaves the coil bank uncooled and undehumidified, raising the leaving air temperature and dew point. The pan assembly should include blank-offs that close the gap between coil casings, and the coil casings should seal to the pan and the unit casing.</p>
<p class="note">The finned height lost to the intermediate pan and coil casings reduces the total finned area of the stack compared with a single coil of the same overall height. Account for this when calculating face velocity, rather than using the unit's inside height.</p>

<h2>Piping stacked coils</h2>
<p>Each coil in the stack is piped for counterflow on its own. Supply and return branches should be arranged so that both coils receive their design flow: reverse-return piping or individual balancing valves are common. Each coil needs its own vent and drain. Where the upper and lower coils have different row counts or circuiting, they need separate flow settings. Header orientation and same-end connections are covered in <a href="<?= url('guides/coil-connection-counterflow-piping') ?>">coil connections for counterflow</a>.</p>

<h2>DX coils in a stack</h2>
<p>DX coils follow the same drainage rules. Stacking a DX coil is also a natural way to separate refrigerant circuits by face, though that decision should be made on capacity staging grounds as well as drainage.</p>

<h2>Review points</h2>
<ul>
<li>Is any single cooling coil taller than the manufacturer's stated carryover height?</li>
<li>Does each intermediate pan cover the full coil and extend downstream?</li>
<li>Is each pan sloped and drained, with a trap sized for the section pressure?</li>
<li>Are blank-offs shown to prevent air bypass around the pans?</li>
<li>Can each pan be reached and cleaned?</li>
<li>Has face velocity been calculated on actual finned area?</li>
</ul>
<?php guide_end([
    ['When do cooling coils need to be stacked?', 'Cooling coils are usually split vertically when the finned height exceeds the manufacturer\'s limit for condensate carryover, commonly around 42 to 48 inches, or when the coil is too large to build, ship or remove as one piece.'],
    ['What does an intermediate drain pan do?', 'It sits between stacked cooling coils and catches condensate from the upper coil before it runs onto the lower coil. This keeps the lower coil from carrying the combined condensate load, which would otherwise be blown off the fins and carried downstream.'],
    ['Do stacked heating coils need intermediate drain pans?', 'No. Heating coils run dry and do not produce condensate, so they do not need intermediate pans. They may still be stacked for size, handling or replacement reasons.'],
]);
