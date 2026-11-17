<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-turndown-minimum-airflow'); ?>
<p class="lede">Most modern VAV air handlers can operate down to roughly 25% to 40% of design airflow, but the real floor is set by whichever limit arrives first: fan stability, motor cooling, outdoor air control, coil freeze and laminar-flow behaviour, humidifier absorption, or the airflow needed to satisfy ventilation and pressurization. The fan is rarely the first limit.</p>

<h2>Why turndown matters</h2>
<p>A VAV air handler spends most of its hours at part load. Fan power falls roughly with the cube of speed in a system with no fixed pressure component, so every step lower in airflow cuts energy sharply. Designers want deep turndown. But an AHU is a chain of components, each with its own minimum. The design must recognise the weakest link and either accept it or design around it.</p>
<p>Turndown is usually expressed as the ratio of design airflow to minimum airflow (4:1 means 25% of design) or as minimum airflow in percent.</p>

<h2>Limits component by component</h2>
<h3>Fans</h3>
<p>With variable speed, a fan follows the system curve down and stays at roughly the same point on its own efficiency curve, so the fan itself can usually turn down a long way. Trouble arises when the system curve has a large fixed pressure component, such as a duct static pressure setpoint held constant at the far end. Then, at low flow, the fan operates close to its stall region. Fan arrays help: switching off some fans moves the remaining ones back to a better point on their curves, though disabled fans need backdraft dampers or blank-off plates to prevent recirculation.</p>
<h3>Motors and drives</h3>
<p>Standard induction motors driven by a VFD have a minimum speed, often set at around 20% to 30% of base speed, below which motor cooling and torque at low frequency become concerns. Inverter-duty motors and EC motors tolerate lower speeds. The drive's minimum frequency parameter should reflect the motor manufacturer's guidance.</p>
<h3>Outdoor air control</h3>
<p>As total airflow drops, the required outdoor airflow stays roughly constant, so the outdoor air fraction rises. An outdoor air damper or airflow station sized for full flow becomes inaccurate at low velocity. This is one of the most common real limits. A dedicated minimum outdoor air damper with its own airflow measurement keeps ventilation accurate, as does a separate DOAS. Control sequences for this are a controls matter; see <a href="<?= url('guides/minimum-outdoor-air-control-vav') ?>">minimum outdoor air control in VAV</a>.</p>
<h3>Mixing and freeze protection</h3>
<p>Low airflow plus a high outdoor air fraction in cold weather is the worst case for stratification and coil freezing. Mixing quality falls as damper and plenum velocities drop. Preheat coils must be sized for the coldest mixed condition at minimum airflow, not at design airflow.</p>
<h3>Coils</h3>
<p>Water coils at very low face velocity can experience lower heat transfer as airflow becomes less turbulent, and water-side flow can drop into laminar range inside the tubes when control valves throttle hard, reducing capacity and raising freeze risk. Steam coils at low load are prone to condensate backup and freezing unless they are distributing type with proper trapping. DX coils have their own minimum airflow per ton to avoid frosting; check the coil and compressor manufacturer's limits.</p>
<h3>Filters</h3>
<p>Filters tolerate low velocity well; pressure drop falls and efficiency at low velocity is usually equal or better. Filters are rarely the limit.</p>
<h3>Humidifiers</h3>
<p>Absorption distance depends on air velocity and temperature. At lower velocity, steam absorbs within a shorter distance, but the humidifier capacity relative to airflow rises. Controls must limit output at low flow with a high-limit humidistat downstream to avoid wetting the duct.</p>
<h3>Energy recovery</h3>
<p>Wheels and plates become more effective at lower velocity, but frost control and leakage behaviour change. Balanced supply and exhaust flows must track each other.</p>

<h2>System-level limits</h2>
<table>
<thead><tr><th>Limit</th><th>What sets it</th></tr></thead>
<tbody>
<tr><td>Ventilation</td><td>The outdoor airflow required by ASHRAE 62.1 or the governing code; total airflow cannot drop below what is needed to distribute it to zones</td></tr>
<tr><td>Zone minimums</td><td>VAV box minimum settings, which add up to a floor on total airflow</td></tr>
<tr><td>Air change requirements</td><td>Healthcare, lab and cleanroom minimum air changes per hour</td></tr>
<tr><td>Pressurization</td><td>Exhaust airflow that must be made up to keep the building positive</td></tr>
<tr><td>Heating</td><td>Airflow needed to deliver heat without excessive supply temperature</td></tr>
<tr><td>Diffuser performance</td><td>Air distribution and dumping at low flow</td></tr>
</tbody>
</table>
<p>In many buildings the sum of zone box minimums is the true floor, and it is often higher than the AHU itself could achieve. Box minimum settings are controls work, but the AHU designer should know the expected minimum so components are checked at that point.</p>

<h2>Checking a design for turndown</h2>
<ol>
<li>Estimate the expected minimum airflow from zone minimums, ventilation and pressurization requirements.</li>
<li>Check fan operating points at that airflow along the expected system curve, including the duct static pressure setpoint.</li>
<li>Confirm motor and drive minimum speed limits.</li>
<li>Check outdoor air measurement and control accuracy at minimum airflow.</li>
<li>Recalculate mixed-air temperature at minimum airflow and winter design temperature; size preheat accordingly.</li>
<li>Check coil water velocities with control valves at the reduced load.</li>
<li>Confirm humidifier and energy recovery controls at minimum flow.</li>
</ol>
<p class="note">Where design calls for very deep turndown, a fan array with staging, EC or inverter-duty motors and a dedicated minimum outdoor air path is the usual hardware answer. See <a href="<?= url('guides/what-is-a-fan-array') ?>">what is a fan array</a> for the fan side.</p>
<?php guide_end([
    ['How low can a VAV air handler turn down?', 'Many units operate reliably down to about 25% to 40% of design airflow. The actual minimum depends on outdoor air control, coil freeze protection, motor limits and the sum of zone minimum airflows, which often sets a higher floor than the fan itself.'],
    ['What limits minimum airflow on an AHU?', 'Common limits are inaccurate outdoor air control at low velocity, coil freeze risk with cold mixed air, motor minimum speed, fan stall at high static setpoints, and system requirements such as ventilation and zone minimum airflows.'],
    ['Do fan arrays improve turndown?', 'Yes. Staging fans off lets the remaining fans operate at a better point on their curves, extending stable operation to lower total airflow. Disabled fans need backdraft dampers or blank-off plates.'],
]);
