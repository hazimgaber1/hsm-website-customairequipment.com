<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('wheel-economizer-bypass-operation'); ?>
<p class="lede">When the unit is in free cooling, stop the recovery device from warming the outdoor air: slow or stop the wheel, or open a bypass damper so outdoor air skips the plate or wheel, and modulate between full recovery and zero recovery to hold the mixed or supply air temperature. Done well, this keeps the energy savings of recovery in winter and summer without losing economizer hours in between.</p>

<h2>Why recovery fights the economizer</h2>
<p>In shoulder seasons the outdoor air is cooler than the return, and the building still needs cooling. A wheel or plate running at full effectiveness would heat that cool outdoor air toward the return temperature, throwing away the free cooling and forcing the cooling coil to run. The recovery device must back off.</p>
<p>The opposite happens at the cold end of the shoulder season. Outdoor air may be so cold that even with the economizer closed to minimum, the supply would fall below setpoint. Here some recovery is wanted, but less than full. The control therefore needs a modulating range, not just on and off. The outdoor air damper economizer logic itself is a controls topic, covered in <a href="<?= url('guides/economizer-high-limit-controls') ?>">economizer high-limit controls</a>; this guide deals with what the recovery device does during those modes.</p>

<h2>Step 1: Choose the method of capacity reduction</h2>
<h3>Wheel speed modulation</h3>
<p>Wheel effectiveness falls steeply below a certain rotational speed. A variable speed drive on the wheel motor gives smooth control from full effectiveness down to nearly zero. At a full stop the wheel acts as a fixed porous media with some pressure drop and no recovery.</p>
<h3>Wheel bypass dampers</h3>
<p>Some units add a bypass path around the wheel on the outdoor air side, the exhaust side, or both. Opening the bypass cuts pressure drop as well as recovery, which saves fan energy during long economizer periods.</p>
<h3>Plate face and bypass</h3>
<p>Plates cannot be slowed, so a face damper on the core and a bypass damper beside it modulate the share of outdoor air passing through the core. This is the standard capacity control for plates.</p>

<h2>Step 2: Define the operating modes</h2>
<ol>
<li><strong>Heating recovery.</strong> Outdoor air colder than the threshold where full recovery is needed. Wheel at full speed or bypass closed, subject to frost control limits.</li>
<li><strong>Modulating recovery.</strong> Outdoor air cold enough that minimum outdoor air without recovery would undershoot supply setpoint. Recovery modulates to hold the supply or mixed air temperature.</li>
<li><strong>Economizer, no recovery.</strong> Outdoor air between the modulating range and the economizer high limit. Wheel stopped or bypass fully open. Outdoor air damper modulates for free cooling.</li>
<li><strong>Cooling recovery.</strong> Outdoor air warmer than return (dry bulb or enthalpy, depending on high-limit type). Economizer at minimum, wheel at full speed or bypass closed.</li>
</ol>

<h2>Step 3: Write the sequence logic</h2>
<ol>
<li>Compare outdoor air and return or exhaust air conditions. For an enthalpy wheel in humid climates, compare enthalpy; for sensible devices, compare dry bulb.</li>
<li>If outdoor conditions are worse than return for cooling, enable full cooling recovery.</li>
<li>If the economizer is active and the supply air temperature setpoint can be met by outdoor air alone, disable recovery (wheel stopped or bypass open).</li>
<li>If the outdoor air damper is already at minimum position and supply air is below setpoint, enable heating recovery and modulate it as the first stage of heating, ahead of the heating coil.</li>
<li>Sequence so recovery and economizer do not overlap: recovery modulates only when the outdoor air damper is at minimum, and the damper opens above minimum only when recovery is fully off.</li>
<li>Apply frost control as a limit that overrides the heating recovery command.</li>
</ol>
<p class="note">A dead band of a degree or two between the end of recovery modulation and the start of economizer modulation prevents the two loops from hunting against each other.</p>

<h2>Step 4: Keep the wheel clean when idle</h2>
<p>A stopped wheel in a dusty or humid airstream can load unevenly, and the same section of desiccant stays in one airstream for hours. Most wheel controllers include a jog or cleaning cycle that rotates the wheel briefly at intervals while it is otherwise stopped. Enable it; the energy cost is trivial.</p>

<h2>Step 5: Account for pressure drop</h2>
<p>A stopped wheel still adds its full pressure drop to both fans. If the economizer runs for many hours, a bypass damper may pay for itself in fan energy alone. Estimate economizer hours from bin data for your location and compare the fan energy saved by bypassing against the added cost and leakage of the bypass damper; the method for valuing pressure drop is in <a href="<?= url('guides/recovery-pressure-drop-fan-penalty') ?>">calculating the fan energy penalty</a>.</p>
<p class="warn">A bypass damper that leaks when closed reduces recovery effectiveness every heating and cooling hour. Specify low-leakage dampers and confirm the closed position during commissioning.</p>

<h2>Step 6: Commission the modes</h2>
<ol>
<li>Override the outdoor temperature input through each mode boundary and confirm the wheel speed or damper responds in the right direction.</li>
<li>Verify the wheel actually stops (and jogs) in economizer mode; some drives default to a minimum speed.</li>
<li>Check the supply temperature holds steady through the transition between modulating recovery and economizer.</li>
<li>Trend wheel speed, damper positions, outdoor and supply temperatures for a few weeks of shoulder season and look for simultaneous recovery and economizer operation.</li>
</ol>
<p>Where wheels are in use, energy codes often require bypass or speed control during economizer operation. Check the edition adopted for your project; the broader mandate is described in <a href="<?= url('guides/ashrae-90-1-energy-recovery-requirements') ?>">determining when ASHRAE 90.1 requires energy recovery</a>.</p>
<?php guide_end([
    ['Should the energy wheel run during economizer mode?', 'No. During free cooling the wheel would warm cool outdoor air toward the return temperature. Stop or slow the wheel, or open its bypass, so outdoor air reaches the coil without recovery.'],
    ['How is wheel speed used for capacity control?', 'A variable speed drive reduces wheel rotation, which lowers effectiveness. Modulating speed holds supply or mixed air temperature during cold shoulder weather, ahead of the heating coil.'],
    ['Why does a stopped wheel need a jog cycle?', 'A stopped wheel keeps the same sector in each airstream for hours, which can cause uneven loading and dust buildup. A periodic jog rotates it briefly to keep the media clean.'],
]);
