<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('damper-actuator-sizing'); ?>
<p class="lede">Required actuator torque equals the damper's face area multiplied by its torque loading per square foot, which the damper manufacturer publishes for its blade type, seals, approach velocity and pressure; then add a safety factor and pick the next larger actuator. When no data exists, conservative rule-of-thumb loadings can be used for a first estimate, but they should be confirmed before purchase.</p>

<h2>The basic calculation</h2>
<p class="formula">Required torque (in-lb) = Damper area (ft²) × Torque loading (in-lb/ft²) × Safety factor</p>
<p class="formula">Required torque (N·m) = Damper area (m²) × Torque loading (N·m/m²) × Safety factor</p>
<p>Conversion: 1 N·m = 8.85 in-lb. 1 in-lb/ft² ≈ 1.21 N·m/m².</p>
<p>Torque loading is the torque needed to open and close one square foot of damper under the stated conditions, including the force to compress blade and jamb seals when closed. Damper manufacturers publish it, often as a table against velocity and static pressure. Use the published figure for the exact model.</p>

<h2>What drives torque loading</h2>
<ul>
<li><strong>Seals:</strong> blade and jamb seals on low-leakage dampers must be compressed to seal, which takes more torque than unsealed blades.</li>
<li><strong>Blade action:</strong> parallel and opposed blade dampers differ in how airflow forces act on the blades.</li>
<li><strong>Approach velocity:</strong> aerodynamic force on partially open blades rises with velocity, so dampers in high-velocity locations need more torque.</li>
<li><strong>Close-off pressure:</strong> the pressure difference across the closed damper pushes the blades against their stops; higher pressure needs more torque to hold them sealed and to open them.</li>
<li><strong>Linkage and bearings:</strong> concealed versus exposed linkage, bearing type, and the condition of the damper over time.</li>
<li><strong>Damper size and aspect ratio:</strong> long blades flex and may need more torque to seal across the full width.</li>
</ul>

<h2>Rule-of-thumb loadings for early estimates</h2>
<p>Where manufacturer data is not yet available, actuator suppliers publish rough guidance for initial sizing. The following ranges are indicative for typical commercial dampers at moderate velocity and pressure; confirm against actual damper data before ordering.</p>
<table>
<thead><tr><th>Damper type</th><th>Indicative torque loading</th></tr></thead>
<tbody>
<tr><td>Unsealed parallel or opposed blade, low velocity</td><td>About 3 to 5 in-lb/ft²</td></tr>
<tr><td>Sealed blade and jamb, moderate velocity and pressure</td><td>About 5 to 8 in-lb/ft²</td></tr>
<tr><td>Low-leakage or high-performance, higher velocity and pressure</td><td>About 7 to 12 in-lb/ft² or more</td></tr>
<tr><td>Round dampers and specialty dampers</td><td>Manufacturer data required</td></tr>
</tbody>
</table>
<p class="note">Extremely low-leakage and bubble-tight dampers, smoke and fire dampers, and dampers rated for very high pressure can need much higher torque than these ranges. Always use published data for those.</p>

<h2>Worked example</h2>
<p>An outdoor air damper on a custom AHU measures 48 in. × 36 in. (1.22 m × 0.91 m). It is a low-leakage, opposed-blade damper. The manufacturer's table shows a torque loading of 7 in-lb/ft² at the design approach velocity of 1,500 fpm and close-off pressure of 2 in. w.c.</p>
<ol>
<li>Area = (48 × 36) ÷ 144 = 12.0 ft² (1.11 m²).</li>
<li>Base torque = 12.0 × 7 = 84 in-lb.</li>
<li>Apply a safety factor of 1.25: 84 × 1.25 = 105 in-lb.</li>
<li>Select the next standard actuator size above 105 in-lb. If the available sizes include about 90 in-lb (10 N·m) and 133 in-lb (15 N·m), select the 133 in-lb unit.</li>
</ol>
<p>If the damper is spring-return (fail-safe), confirm the torque rating under both motor-driven and spring-return conditions. Spring torque is often lower than motor torque, and the spring must still close the damper against the airflow and seal it.</p>

<h2>Large dampers and multiple sections</h2>
<p>Large dampers are often built as multiple sections. Options:</p>
<ul>
<li><strong>One actuator per section:</strong> each section's torque is calculated separately; actuators share the same control signal. This avoids long jackshafts and keeps each actuator within its rating.</li>
<li><strong>Jackshaft linking sections:</strong> one larger actuator or several actuators in tandem drive a common shaft. Torque adds across sections, and shaft and linkage losses must be included.</li>
<li><strong>Tandem actuators on one shaft:</strong> some actuators can be mounted in pairs to double available torque. Use only where the manufacturer approves tandem mounting.</li>
</ul>
<p>Also check the actuator's shaft size range and the damper's drive shaft. An actuator must clamp securely on the shaft to transmit its rated torque.</p>

<h2>Other selection criteria</h2>
<table>
<thead><tr><th>Criterion</th><th>What to check</th></tr></thead>
<tbody>
<tr><td>Control signal</td><td>Modulating (for example 2 to 10 V or 4 to 20 mA) or two-position</td></tr>
<tr><td>Feedback</td><td>Position feedback signal for BAS monitoring and fault detection</td></tr>
<tr><td>Fail-safe action</td><td>Spring-return or electronic fail-safe, and direction on power loss</td></tr>
<tr><td>Stroke time</td><td>Fast enough for the application; smoke control may have strict requirements</td></tr>
<tr><td>Supply voltage</td><td>24 V AC/DC or line voltage, matched to the control panel</td></tr>
<tr><td>Environment</td><td>Temperature range and enclosure rating for outdoor or humid locations</td></tr>
<tr><td>End switches</td><td>Auxiliary switches for damper proof where required</td></tr>
<tr><td>Listing</td><td>Smoke and fire damper actuators must meet the damper's listing</td></tr>
</tbody>
</table>

<h2>Common sizing mistakes</h2>
<ul>
<li>Using face area of the opening instead of the damper's actual blade area.</li>
<li>Ignoring close-off pressure for dampers that see large pressure differences, such as minimum outdoor air or isolation dampers near fans.</li>
<li>Oversizing actuators excessively, which can damage dampers and linkages when blades meet stops.</li>
<li>Forgetting that spring-return torque may be less than drive torque.</li>
<li>Not accounting for damper deterioration over time, which is the reason for the safety factor.</li>
</ul>
<p>An undersized actuator is a common cause of dampers that stop short of full travel; see <a href="<?= url('guides/damper-failure-troubleshooting') ?>">damper failure troubleshooting</a>. Valve actuators are sized differently, alongside valve Cv, in <a href="<?= url('guides/control-valve-sizing-cv') ?>">sizing coil control valves</a>.</p>
<?php guide_end([
    ['How do I calculate damper actuator torque?', 'Multiply the damper area in square feet by the manufacturer\'s torque loading in inch-pounds per square foot for the damper type, velocity and pressure, then apply a safety factor such as 1.25 and select the next larger actuator.'],
    ['What safety factor should be used for damper actuators?', 'A factor of about 1.25 or more is common, to allow for linkage friction, damper wear and dirt over time. Follow the actuator or damper manufacturer\'s recommendation where given.'],
    ['Can I use two actuators on one damper?', 'Yes, for large dampers, either one actuator per section with a shared control signal or approved tandem mounting on a common shaft. Calculate the torque each actuator must provide and follow the manufacturer\'s mounting guidance.'],
]);
