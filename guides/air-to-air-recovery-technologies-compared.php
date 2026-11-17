<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('air-to-air-recovery-technologies-compared'); ?>
<p class="lede">Rotary wheels give the highest effectiveness in the smallest depth but carry some cross-leakage; plates are nearly leak-free with moderate effectiveness; runaround loops trade effectiveness for complete airstream separation; heat pipes sit in between with no moving parts. The right choice depends on how far apart the airstreams are, how clean the exhaust is, and whether you need latent recovery.</p>

<h2>The four technologies in one table</h2>
<p>The figures below are typical ranges for commercial HVAC selections at balanced airflow and face velocities in the 400 to 600 fpm (2.0 to 3.0 m/s) range. Any specific product can land above or below these bands, so treat them as screening values and confirm with certified ratings.</p>
<table>
<thead><tr><th>Attribute</th><th>Rotary wheel</th><th>Fixed plate</th><th>Runaround loop</th><th>Heat pipe</th></tr></thead>
<tbody>
<tr><td>Typical sensible effectiveness</td><td>65 to 80%</td><td>50 to 85% (geometry dependent)</td><td>45 to 60%</td><td>45 to 65%</td></tr>
<tr><td>Latent recovery</td><td>Yes, with desiccant-coated media</td><td>Only with vapour-permeable membrane cores</td><td>No</td><td>No</td></tr>
<tr><td>Cross-leakage</td><td>Present; controlled by seals, purge and pressure</td><td>Low; depends on core sealing</td><td>None (separate airstreams)</td><td>Very low; sealed partition</td></tr>
<tr><td>Airstreams must be adjacent?</td><td>Yes</td><td>Yes</td><td>No</td><td>Yes (side by side or stacked)</td></tr>
<tr><td>Depth in airflow direction</td><td>Short</td><td>Long, especially counterflow</td><td>Two coil sections</td><td>Short to moderate</td></tr>
<tr><td>Moving parts</td><td>Wheel, motor, belt</td><td>None (bypass damper only)</td><td>Pump, valve</td><td>None (tilt actuator optional)</td></tr>
<tr><td>Typical air pressure drop per side</td><td>0.5 to 1.0 in. w.c.</td><td>0.5 to 1.2 in. w.c.</td><td>0.4 to 0.8 in. w.c. per coil</td><td>0.4 to 0.8 in. w.c.</td></tr>
<tr><td>Capacity modulation</td><td>Wheel speed</td><td>Face and bypass dampers</td><td>Pump speed or three-way valve</td><td>Tilt or bypass</td></tr>
</tbody>
</table>

<h2>Effectiveness: where the energy really comes from</h2>
<p>Wheels lead on raw effectiveness because the rotating matrix behaves like a counterflow exchanger with a very large surface area per unit volume. An enthalpy wheel also moves moisture, which matters more than sensible recovery in humid summers and dry winters. If your load is dominated by latent outdoor air in a Gulf Coast or Great Lakes summer, only a wheel or a membrane plate addresses it passively. The differences between total and sensible wheels are covered in <a href="<?= url('guides/enthalpy-wheel-vs-sensible-wheel') ?>">enthalpy wheel vs sensible wheel</a>.</p>
<p>Plates span a wide range. A crossflow core is usually in the 50 to 65 percent band; a true counterflow core can exceed 80 percent but needs much more length. The geometry choice is the subject of <a href="<?= url('guides/crossflow-vs-counterflow-plate-exchangers') ?>">crossflow vs counterflow plate exchangers</a>.</p>
<p>Runaround loops pay a double penalty: heat passes through two coils and a fluid, and glycol degrades heat transfer. They rarely exceed 60 percent sensible effectiveness without very deep coils. Heat pipes are limited by the fixed number of rows and the working fluid's temperature range, so they usually fall below a good plate.</p>

<h2>Leakage and contamination risk</h2>
<p>Every wheel carries some exhaust air into the supply as the matrix rotates from one side to the other, and seals leak in whichever direction the pressure differential points. Purge sectors and correct fan placement keep exhaust air transfer low, typically to a few percent or less, but never to zero. That is fine for offices and schools and unacceptable where exhaust contains hazardous or odorous contaminants.</p>
<p>Plates have no carryover; leakage happens only through imperfect core seams and frame gaskets. Heat pipes have a solid partition between the evaporator and condenser sections. Runaround loops are the only option with physically separate airstreams, which is why they show up on laboratory and isolation exhaust systems where any transfer is ruled out.</p>

<h2>Footprint and layout constraints</h2>
<p>The physical arrangement often makes the decision before effectiveness does.</p>
<ul>
<li><strong>Wheels</strong> need the supply and exhaust paths stacked or side by side with a shared face. They are compact in depth but the wheel diameter sets the unit height or width, which can be awkward on large units.</li>
<li><strong>Plates</strong> also need adjacent airstreams, and they add length. A counterflow core on a 20,000 cfm unit can add several feet to the casing.</li>
<li><strong>Runaround loops</strong> work when the outdoor air intake and the exhaust are on opposite ends of a building or on separate units. Only piping connects them. This is the usual answer for retrofits where the exhaust fan is remote.</li>
<li><strong>Heat pipes</strong> need adjacent airstreams and a defined orientation so the working fluid returns by gravity, unless a tilt mechanism or capillary design is used.</li>
</ul>

<h2>Frost, maintenance and controls</h2>
<p>All four will frost in severe cold if the exhaust is humid enough. Enthalpy wheels tolerate lower outdoor temperatures before frosting because they move moisture to the supply side. Plates are the most frost-prone because the cold corner of the core sits in still air. Runaround loops avoid frost at the exhaust coil by controlling the fluid temperature with the valve.</p>
<p>Maintenance differs mainly in moving parts. Wheels need belt and seal checks and periodic cleaning. Plates need only cleaning and drain checks. Runaround loops need glycol testing and pump service. Heat pipes are the lowest-maintenance option once installed.</p>

<h2>Picking a starting point</h2>
<ol>
<li>If the exhaust is a hazard, start with a runaround loop and stop there.</li>
<li>If airstreams are remote from each other, a runaround loop is the only practical choice.</li>
<li>If you need latent recovery and adjacent airstreams are possible, start with an enthalpy wheel; consider a membrane plate if leakage limits are tight.</li>
<li>If you need sensible only, with low leakage and moderate effectiveness, compare a plate with a heat pipe on length and pressure drop.</li>
<li>Run the energy and fan penalty numbers for the shortlist before committing.</li>
</ol>
<p class="note">Before finalizing, confirm the selection is rated under AHRI 1060 or an equivalent test so effectiveness and leakage values come from the same test conditions for every option on the shortlist.</p>
<p>If you want to see how a wheel, plate or loop fits in your unit's footprint, our <a href="<?= url('products/custom-air-handlers') ?>">custom air handlers</a> page shows the arrangements we build.</p>
<?php guide_end([
    ['Which energy recovery device has the highest effectiveness?', 'Rotary wheels and counterflow plates usually have the highest sensible effectiveness, often 70 to 80 percent or more. Enthalpy wheels add latent recovery, which neither runaround loops nor heat pipes can provide.'],
    ['Which energy recovery option has zero cross-leakage?', 'A runaround coil loop is the only common option with fully separate airstreams, because heat moves through a pumped fluid. Heat pipes and well-sealed plates leak very little, while wheels always carry some exhaust into the supply.'],
    ['When should I choose a runaround loop over a wheel?', 'Choose a runaround loop when the supply and exhaust airstreams are far apart, when exhaust contaminants rule out any transfer, or when retrofitting units that cannot be rearranged. Expect lower effectiveness and pump energy in exchange.'],
]);
