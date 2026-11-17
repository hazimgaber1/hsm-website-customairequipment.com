<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('coil-freeze-protection-methods'); ?>
<p class="lede">A hydronic coil freezes when water in a tube sits still, or moves too slowly, while air below 32°F (0°C) passes over it. Every freeze protection method works by changing one of three things: the fluid's freezing point, the fluid's velocity, or the air temperature reaching the tubes.</p>

<h2>How coils actually freeze</h2>
<p>Burst tubes are rarely caused by a whole coil freezing solid. More often a few tubes in the bottom rows, in a return bend, or in a circuit that sees the coldest stratified air freeze locally. As ice forms, it expands and pushes unfrozen water ahead of it toward a closed valve or a second ice plug. The water trapped between two plugs is compressed until the tube or return bend splits. That is why coils can burst even when average air temperature is above freezing: stratified outdoor air at 0°F (−18°C) can be hitting the bottom corner of a coil that a sensor in the middle reports as 40°F.</p>
<p>Coils most exposed are preheat coils in 100% outdoor air units, chilled water coils in units that bring in winter outdoor air, and heating coils whose control valves close at part load. Understanding which coil and which operating condition is at risk points to the right method.</p>

<h2>Glycol and other antifreeze solutions</h2>
<p>Adding ethylene or propylene glycol lowers the fluid's freezing point. A 30% propylene glycol solution by volume protects to around 8°F (−13°C) for freeze point and offers burst protection to considerably lower temperatures, since a slush forms before solid ice. Choose concentration based on whether the goal is freeze protection (fluid stays pumpable) or burst protection (tubes survive but the system cannot run).</p>
<ul>
<li><strong>Strengths:</strong> protection is passive and does not depend on controls, pumps or power.</li>
<li><strong>Weaknesses:</strong> lower heat transfer and higher pumping energy, inhibitor maintenance, cost, and the need to keep concentration up when systems are topped off with water.</li>
</ul>
<p>The capacity and pressure-drop penalty is calculated in <a href="<?= url('guides/glycol-coil-derating') ?>">glycol coil derating</a>.</p>

<h2>Pumped coils (coil circulators)</h2>
<p>A small inline pump in a loop at the coil keeps constant flow through the tubes while the control valve modulates how much hot water enters the loop. Velocity in the tubes stays high regardless of load, so no tube stagnates. This is one of the most effective protections for preheat coils with water, because it removes the root cause, which is low or zero flow at part load.</p>
<ul>
<li><strong>Strengths:</strong> even air temperature off the coil, simple to understand, works with plain water.</li>
<li><strong>Weaknesses:</strong> depends on the pump; pump failure must alarm and trigger a safe response. Adds a pump, check valve and power circuit per coil.</li>
</ul>

<h2>Integral face-and-bypass coils</h2>
<p>An integral face-and-bypass (IFB) coil runs full fluid flow at all times and controls leaving air temperature with internal dampers that send air either across the heating tubes or through bypass channels between them. Because the fluid never throttles, the tubes stay warm. IFB coils are widely used with steam and hot water in very cold climates and for 100% outdoor air makeup units.</p>
<ul>
<li><strong>Strengths:</strong> tolerant of very low entering air temperatures; full flow keeps tubes protected.</li>
<li><strong>Weaknesses:</strong> larger, heavier and more costly; damper linkages need maintenance; leaving air can stratify if bypass and face air are not mixed.</li>
</ul>
<p>How IFB coils compare with separate face and bypass dampers is covered in <a href="<?= url('guides/face-bypass-dampers-vs-ifb-coils') ?>">face and bypass dampers vs IFB coils</a>.</p>

<h2>Preheat ahead of vulnerable coils</h2>
<p>A preheat coil, energy recovery device or gas or electric heater raises outdoor air to a safe temperature, often 40 to 45°F (4 to 7°C), before it reaches a chilled water coil or the main heating coil. The vulnerable coil then never sees subfreezing air. The preheat coil itself still needs its own protection, using one of the other methods.</p>
<ul>
<li><strong>Strengths:</strong> protects everything downstream, including filters and humidifiers, and improves mixing.</li>
<li><strong>Weaknesses:</strong> an extra component and pressure drop; it simply moves the freeze risk to the preheat coil.</li>
</ul>
<p>Sizing and locating that coil is a separate how-to: <a href="<?= url('guides/preheat-coil-placement-sizing') ?>">preheat coil placement and sizing</a>.</p>

<h2>Supporting measures</h2>
<p>Several design details reduce risk no matter which primary method is chosen:</p>
<ul>
<li><strong>Good mixing.</strong> Mixing boxes with blenders or baffles reduce stratification so cold outdoor air does not hit one corner of the coil.</li>
<li><strong>Minimum flow.</strong> Valve selection or controls that keep a minimum water flow through heating coils whenever outdoor air is below freezing.</li>
<li><strong>Drainable coils.</strong> For seasonal coils that are drained and blown out, sloped tubes and properly located drains and vents.</li>
<li><strong>Steam distributing coils</strong> for steam heating, which spread steam along the tube length and reduce condensate pooling.</li>
<li><strong>Outdoor air dampers that close on fan shutdown</strong> with low-leakage seals.</li>
</ul>
<p class="note">Low-limit thermostats and the control sequences that respond to them are a last line of defence, not a primary method. Their logic is covered in controls guides rather than here.</p>

<h2>Choosing a method</h2>
<table>
<thead><tr><th>Situation</th><th>Methods that usually work</th></tr></thead>
<tbody>
<tr><td>100% outdoor air, very cold climate, hot water heat</td><td>Glycol loop or pumped coil, often with IFB coil</td></tr>
<tr><td>100% outdoor air, steam available</td><td>Steam distributing coil or IFB steam coil</td></tr>
<tr><td>Mixed-air unit with chilled water coil</td><td>Good mixing plus preheat, or drain the chilled water coil in winter</td></tr>
<tr><td>Process or industrial unit with long idle periods</td><td>Glycol for passive protection</td></tr>
</tbody>
</table>
<p>In cold Canadian and northern US climates, designers frequently combine two layers, such as glycol in the preheat loop plus a pumped coil, because a single failure in a single method can cost a coil. Factory run-testing of a custom unit confirms the coil arrangement and controls before the unit ships, which is one reason to consider a <a href="<?= url('products/custom-air-handlers') ?>">custom air handler</a> for severe climates.</p>
<?php guide_end([
    ['What is the best freeze protection for a hot water preheat coil?', 'A pumped coil that keeps constant flow through the tubes, with glycol in the loop where the climate is severe, is among the most robust approaches. Integral face-and-bypass coils are also widely used because they keep full fluid flow while modulating air.'],
    ['Can a coil freeze when the mixed air temperature is above freezing?', 'Yes. Poorly mixed air stratifies, so the bottom or one side of the coil can see outdoor air well below freezing while a sensor reads an average above 32 degrees F. Low or zero water flow in those tubes then allows local ice to form.'],
    ['Does glycol prevent coil freezing completely?', 'Glycol lowers the freezing point to a level set by its concentration. If concentration is allowed to drop, for example by topping up with plain water, protection is lost. It also reduces heat transfer and raises pump energy, which must be accounted for in the coil selection.'],
]);
