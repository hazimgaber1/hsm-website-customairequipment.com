<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('casing-pressure-class-positive-negative'); ?>
<p class="lede">Every section of an AHU sits at a pressure set by its position relative to the fan: sections upstream of a supply fan are under negative pressure (suction), and sections downstream are under positive pressure. A casing pressure rating states the maximum pressure, in each direction, that each section must withstand, including abnormal conditions such as damper closure and fan shutoff, not just normal operation.</p>

<h2>Reading the pressure profile of a unit</h2>
<p>Picture a draw-through unit: mixing box, filters, cooling coil, fan, then discharge. Starting at the return duct connection, static pressure is slightly negative and becomes more negative as air passes each component. It reaches its lowest point at the fan inlet. The fan then raises pressure, and the discharge plenum is positive, falling gradually through any downstream components and into the supply duct.</p>
<table>
<thead><tr><th>Section (draw-through example)</th><th>Pressure relative to the room</th><th>Approximate design value</th></tr></thead>
<tbody>
<tr><td>Mixing box</td><td>Slightly negative</td><td>−0.5 in. w.c. (return duct loss plus damper)</td></tr>
<tr><td>Filters</td><td>Negative</td><td>Becomes more negative across filters</td></tr>
<tr><td>Cooling coil</td><td>Negative</td><td>Becomes more negative across coil</td></tr>
<tr><td>Fan inlet plenum</td><td>Most negative</td><td>For example −3.0 in. w.c.</td></tr>
<tr><td>Fan discharge plenum</td><td>Most positive</td><td>For example +2.5 in. w.c.</td></tr>
<tr><td>Downstream attenuator and heating coil</td><td>Positive, falling</td><td>Falls toward supply duct pressure</td></tr>
</tbody>
</table>
<p>The numbers are illustrative. The real profile comes from the component pressure drops in the <a href="<?= url('guides/total-static-pressure-budget') ?>">static pressure budget</a>, located in order along the airflow.</p>
<p>With a return fan, a further positive region exists between the return fan and the relief and return dampers. In blow-through units, the cooling coil and anything after the fan are positive.</p>

<h2>Normal operation versus worst case</h2>
<p>The pressure at a section during normal operation is not the pressure it must be designed for. Casings fail during abnormal events:</p>
<ul>
<li><strong>Damper closure upstream.</strong> If an outdoor and return damper close while the fan runs, or a fire or smoke damper slams shut, the fan pulls the upstream sections toward its shutoff pressure. This can be far more negative than design.</li>
<li><strong>Damper closure downstream.</strong> A smoke damper or isolation damper in the supply duct closing with the fan running drives the discharge sections toward the fan's shutoff pressure.</li>
<li><strong>Filter loading.</strong> As filters load, sections between filters and fan become more negative.</li>
<li><strong>Fan at maximum speed.</strong> With a VFD, the fan may be capable of more pressure at maximum speed than at the design point.</li>
</ul>
<p>Two design approaches exist: rate the casing for the fan's maximum shutoff pressure at maximum speed, or rate it for a lower pressure and protect it with pressure safeties that shut down the fan before casing limits are reached. Most projects use the second, with high- and low-pressure limit switches, but the casing must still survive the brief overshoot before the switch acts.</p>
<p class="warn">Casing implosion on the suction side is a real failure. Large negative-pressure sections can buckle inward if all inlet dampers close while the fan accelerates. Static pressure safeties on both sides of the fan and damper end switches that prove dampers open before fan start are the usual protections.</p>

<h2>How pressure classes are set</h2>
<ol>
<li>Calculate the operating pressure at each section from the static pressure budget, with filters at their final drop.</li>
<li>Determine the abnormal pressure each section could see, considering damper arrangements, fan shutoff pressure and maximum fan speed.</li>
<li>Decide on protection: safeties, damper interlocks, relief panels.</li>
<li>Set the design pressure for each section group, positive and negative, as the higher of the protected abnormal pressure and the operating pressure plus a margin.</li>
<li>Specify the casing to meet deflection and leakage requirements at those pressures; the deflection check method is in <a href="<?= url('guides/casing-panel-deflection-calculation') ?>">calculating panel deflection</a>.</li>
</ol>
<p>Some specifications simply require the entire casing to be rated for a single value, such as 8 in. w.c. positive and negative. This is simple to enforce but can make low-pressure sections heavier and more expensive than needed. Others specify a value for each group of sections. Both are legitimate; the key is that the value covers the real worst case.</p>

<h2>What changes between positive and negative sections</h2>
<table>
<thead><tr><th>Item</th><th>Negative-pressure section</th><th>Positive-pressure section</th></tr></thead>
<tbody>
<tr><td>Panel loading</td><td>Pulled inward</td><td>Pushed outward</td></tr>
<tr><td>Fastener load</td><td>Fasteners resist panels pulling off frames inward</td><td>Fasteners and edges resist panels pushing out</td></tr>
<tr><td>Door swing</td><td>Outward, so suction seals it</td><td>Inward, so pressure seals it, or safety latch</td></tr>
<tr><td>Leakage effect</td><td>Unconditioned air drawn in; bypasses filters if downstream of them</td><td>Conditioned air lost; can carry moisture into casing joints</td></tr>
<tr><td>Condensate trap</td><td>Deep trap needed to overcome suction</td><td>Trap must resist blowout</td></tr>
<tr><td>Typical sections</td><td>Mixing, filters, coils in draw-through units, fan inlet</td><td>Fan discharge, downstream coils, final filters, attenuators</td></tr>
</tbody>
</table>
<p>Leakage into a negative-pressure section downstream of the final filters is particularly important in healthcare and cleanroom units, because it brings unfiltered mechanical room air into the supply. That is one reason final filters are often placed on the positive side of the fan. Door details for each pressure direction are covered in <a href="<?= url('guides/access-door-specification') ?>">access door specification</a>.</p>
<?php guide_end([
    ['Which AHU sections are under negative pressure?', 'Sections upstream of the supply fan, such as the mixing box, filters and, in a draw-through unit, the cooling coil, are under negative pressure. The most negative point is at the fan inlet.'],
    ['What pressure should an AHU casing be rated for?', 'It should be rated for the highest pressure each section could see, including abnormal events like damper closure, limited by safeties. This is often well above the normal operating pressure. Many specifications set values separately for positive and negative sections.'],
    ['Can an air handler casing collapse?', 'Yes. If inlet dampers close while the fan runs, upstream sections can be pulled toward the fan shutoff pressure and buckle inward. Pressure safeties and damper end switches that prove dampers open before fan start prevent this.'],
]);
