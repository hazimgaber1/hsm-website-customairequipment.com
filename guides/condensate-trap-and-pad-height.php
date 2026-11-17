<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('condensate-trap-and-pad-height'); ?>
<p class="lede">Size the condensate trap from the highest static pressure the drain pan will see, add up the trap's total vertical depth, and set the housekeeping pad high enough that the trap fits below the unit's drain connection with room to pitch the drain line. For a draw-through coil at 3 in w.c. of negative pressure, that typically means a trap around 8 in deep and a 6 in pad or more.</p>

<h2>Why the trap depth depends on pan pressure</h2>
<p>A cooling coil drain pan sits inside the casing, at whatever static pressure exists at that point in the unit. In a draw-through arrangement the fan is downstream, so the pan is under negative pressure and the room tries to push air up the drain into the unit. In a blow-through arrangement the pan is under positive pressure and the unit tries to blow air out of the drain. The trap must hold a water seal against that pressure difference and still let condensate flow out.</p>
<p>Use the maximum pressure, not the design clean-filter pressure. Filters loading, a VAV system at full flow and dampers closing all raise the pressure at the pan. A common approach is to use the pressure at the coil with final (dirty) filter pressure drop and the fan at maximum speed.</p>

<h2>Negative pressure (draw-through) trap</h2>
<p>For a pan under negative pressure, define two dimensions: <em>H</em>, the height of the trap's outlet leg seal (the vertical distance from the drain connection centreline down to the trap's outlet invert), and <em>J</em>, the depth of water held in the trap below that outlet. A widely used rule of thumb is:</p>
<p class="formula">H = negative static pressure at pan (in w.c.) + 1 in
J = H ÷ 2
Total trap depth L = H + J + trap pipe outside diameter</p>
<p>The extra inch on H covers pressure fluctuations. J at half of H keeps enough water in the trap that, when the fan starts and pulls water up the inlet leg, the seal is not lost. Check the unit manufacturer's instructions; some use slightly different multipliers.</p>
<h3>Worked example: draw-through unit</h3>
<p>The pressure at the cooling coil pan is estimated at −2.4 in w.c. clean and −3.0 in w.c. with loaded filters at full airflow. The drain is 1-1/4 in pipe (1.66 in OD).</p>
<ul>
<li>H = 3.0 + 1 = 4.0 in</li>
<li>J = 4.0 ÷ 2 = 2.0 in</li>
<li>L = 4.0 + 2.0 + 1.66 = 7.66 in, call it 7.75 in (about 197 mm)</li>
</ul>

<h2>Positive pressure (blow-through) trap</h2>
<p>For a pan under positive pressure, the seal must be deep enough that the unit pressure cannot push the water out of the outlet leg. A common rule is:</p>
<p class="formula">Seal depth J = positive static pressure at pan (in w.c.) + 0.5 to 1 in
Total trap depth L = J + trap pipe outside diameter + drop to outlet as the manufacturer shows</p>
<p>In a blow-through trap the outlet leg sits lower than the inlet, the reverse of the negative-pressure shape. Some manufacturers indicate a simple open drain may be acceptable on low positive pressures; follow their guidance and the local plumbing code.</p>
<h3>Worked example: blow-through unit</h3>
<p>Pan pressure is +2.0 in w.c. at maximum. J = 2.0 + 1.0 = 3.0 in. With 1-1/4 in pipe, L ≈ 3.0 + 1.66 + 0.5 in drop = 5.2 in.</p>
<p class="note">Write the seal depth on the drawings and tag the trap in the field. Installers often build a standard-depth trap from habit, and a shallow trap on a high-static draw-through unit is one of the most common causes of overflowing pans.</p>

<h2>From trap depth to pad height</h2>
<p>The trap hangs below the drain connection, so the unit has to be high enough that the bottom of the trap clears the floor, with room for the drain line to pitch to the floor drain.</p>
<p class="formula">Minimum pad height = L + floor clearance + allowance for drain pitch − drain connection height above bottom of base rail</p>
<p>Continuing the draw-through example:</p>
<table>
<thead><tr><th>Item</th><th>Value</th></tr></thead>
<tbody>
<tr><td>Total trap depth L</td><td>7.75 in</td></tr>
<tr><td>Clearance under trap to floor (cleanout, insulation)</td><td>1.0 in</td></tr>
<tr><td>Drain pitch over a 6 ft run at 1/8 in per ft</td><td>0.75 in</td></tr>
<tr><td>Subtotal below drain centreline</td><td>9.5 in</td></tr>
<tr><td>Drain connection centreline above bottom of base rail</td><td>5.0 in</td></tr>
<tr><td>Minimum pad height</td><td>4.5 in, so specify a 6 in pad</td></tr>
</tbody>
</table>
<p>The drain connection height comes from the unit submittal; it depends on base rail depth and pan design. Where the pan is on an upper section of a stacked unit or intermediate pan, size each trap separately.</p>

<h2>Practical points</h2>
<ul>
<li>Every drain pan connection gets its own trap. Do not manifold traps from different pressure zones before the traps.</li>
<li>Provide a cleanout or removable cap so the trap can be flushed, and prime traps with water before startup.</li>
<li>Pipe size should not be smaller than the unit connection.</li>
<li>In cold locations, heat-trace and insulate traps on outdoor units or route them indoors.</li>
<li>Pad height also affects service access to the unit; a very high pad may need a platform.</li>
</ul>
<p>Drain pan slope and outlet design, which are the unit's side of this connection, are discussed in <a href="<?= url('guides/drain-pan-design-ashrae-62-1') ?>">drain pan design</a>. If pans still overflow at startup with a correctly sized trap, work through <a href="<?= url('guides/condensate-drainage-startup-failures') ?>">troubleshooting condensate drainage failures at startup</a>. Make sure the pad top is flat and level as described in <a href="<?= url('guides/multi-section-leveling-tolerances') ?>">leveling tolerances</a>.</p>
<?php guide_end([
    ['How deep should a condensate trap be for a draw-through air handler?', 'A common rule is an outlet seal of the maximum negative pan pressure plus 1 in, plus a water reserve of half that, plus the pipe diameter. At 3 in w.c. negative that is roughly 7.5 to 8 in of total trap depth.'],
    ['Do blow-through units need a P-trap?', 'Usually yes, but the shape differs. The seal must exceed the positive pressure in the pan so air cannot blow the water out. Follow the manufacturer\'s detail and the local plumbing code.'],
    ['Why is the housekeeping pad height tied to the condensate trap?', 'The trap hangs below the unit\'s drain connection. If the pad is too low, the trap either cannot be built deep enough or ends up below the floor, so the pad height is set from the trap depth plus clearance and drain pitch.'],
]);
