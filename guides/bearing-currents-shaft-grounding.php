<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('bearing-currents-shaft-grounding'); ?>
<p class="lede">The fast-switching output of a PWM drive creates a common-mode voltage that couples onto the motor shaft. When that voltage discharges through the bearing's lubricant film, each tiny spark pits the races; over months, the pits line up into the washboard pattern called fluting and the bearing fails. Shaft grounding rings, insulated or ceramic bearings and good cabling and bonding prevent it.</p>

<h2>How a drive puts voltage on the shaft</h2>
<p>A VFD builds its output by switching the DC bus on and off thousands of times a second. In a balanced three-phase sine-wave supply, the three phase voltages always sum to zero. In a PWM output they do not: at each switching instant the sum, called the <strong>common-mode voltage</strong>, jumps by a fraction of the bus voltage. Its frequency is the carrier frequency and its edges are extremely fast.</p>
<p>Inside the motor, the stator windings, the rotor and the frame form a network of small capacitances. Fast common-mode voltage steps couple through these capacitances onto the rotor and shaft. The shaft is isolated from the frame only by the bearings, where the balls or rollers ride on a thin film of lubricant. That film is an insulator up to a point.</p>

<h2>What happens in the bearing</h2>
<p>As the shaft voltage builds, the lubricant film holds it off until it breaks down. The charge then discharges across the film as a tiny arc, a process often compared to electrical discharge machining (EDM). Each discharge melts a microscopic crater in the race or rolling element.</p>
<p>Millions of these events produce damage in stages:</p>
<ol>
<li><strong>Frosting:</strong> the race takes on a dull, matte grey appearance from countless tiny pits.</li>
<li><strong>Fluting:</strong> the pits organize into regular ridges across the race, perpendicular to the direction of rolling, like a washboard. The rolling elements excite vibration as they cross the ridges.</li>
<li><strong>Lubricant degradation:</strong> discharges char the grease, which turns dark and loses its lubricating properties.</li>
<li><strong>Failure:</strong> rising noise and vibration, then mechanical failure.</li>
</ol>
<p>Other current paths exist. Large motors can develop circulating currents that flow down the shaft, through one bearing, the frame and back through the other bearing. And if the motor frame is poorly grounded, high-frequency current can seek ground through the bearings and the driven equipment, such as a coupled fan bearing, rather than through the ground conductor.</p>
<p class="note">Fluting diagnosis is usually confirmed by inspecting a removed bearing. General bearing failure investigation is covered in <a href="<?= url('guides/bearing-failure-troubleshooting') ?>">bearing failure troubleshooting</a>.</p>

<h2>Factors that increase the risk</h2>
<ul>
<li>Higher supply voltages, such as 460 V and 575 V, which raise common-mode voltage magnitude.</li>
<li>Higher carrier frequencies, which increase the number of discharge events.</li>
<li>Long or unshielded motor cables and poor grounding of the motor frame.</li>
<li>Motors with low-viscosity or electrically conductive greases, or bearings running at speeds and temperatures that thin the lubricant film.</li>
<li>Larger motor frames, where the circulating current mechanism becomes significant.</li>
<li>Direct-drive fans where the fan bearings are the motor bearings, and the fan wheel is grounded to the structure.</li>
</ul>

<h2>Mitigation options</h2>
<table>
<thead><tr><th>Method</th><th>How it works</th><th>Where used</th></tr></thead>
<tbody>
<tr><td>Shaft grounding ring</td><td>Conductive microfibres or brushes around the shaft give the shaft voltage a lower-impedance path to the frame, bypassing the bearing</td><td>Most common retrofit and new-build measure for small and medium motors</td></tr>
<tr><td>Insulated bearing (one end)</td><td>Insulating coating on the outer ring or housing breaks the circulating current loop</td><td>Larger motors where circulating currents occur, usually combined with a grounding ring on the other end</td></tr>
<tr><td>Hybrid ceramic bearings</td><td>Ceramic rolling elements do not conduct, so discharge cannot pass through the bearing</td><td>Motors with high risk or where grounding rings are impractical</td></tr>
<tr><td>Symmetrical shielded VFD cable</td><td>Provides a low-impedance return path for common-mode current back to the drive, rather than through the motor and structure</td><td>Good practice on every drive installation</td></tr>
<tr><td>Good high-frequency bonding</td><td>Short, wide bonding straps between motor frame, drive ground and structure</td><td>All installations; complements cable shielding</td></tr>
<tr><td>Common-mode choke or filter at drive output</td><td>Reduces the high-frequency common-mode current that drives the problem</td><td>Long cable runs or sensitive installations</td></tr>
<tr><td>Lower carrier frequency</td><td>Fewer switching events per second</td><td>Where audible motor noise allows</td></tr>
</tbody>
</table>
<p>NEMA MG 1 Part 31, which covers motors for inverter duty, discusses shaft voltages and bearing currents and recognizes these mitigation measures. The insulation side of inverter-duty motors is a separate topic, covered in <a href="<?= url('guides/inverter-duty-motor-insulation') ?>">inverter-duty motors and NEMA MG 1 Part 31</a>.</p>

<h2>Practical approach for AHU fans</h2>
<ol>
<li><strong>Specify a shaft grounding ring</strong> on motors driven by VFDs, at least on the drive end, unless the motor manufacturer provides an equivalent built-in method.</li>
<li><strong>Add an insulated bearing</strong> on the opposite end for larger frames, following the motor manufacturer's recommendation.</li>
<li><strong>Use proper VFD cable</strong> with symmetrical grounds and a continuous shield, terminated at both ends with 360° glands.</li>
<li><strong>Bond the motor frame</strong> to the drive ground and the unit structure with low-impedance connections.</li>
<li><strong>Keep the carrier frequency</strong> as low as acoustic requirements allow.</li>
<li><strong>Check belt and coupled equipment.</strong> On belt-driven fans, the fan bearings are usually isolated from the motor shaft by the belts; on direct-coupled drives, current can pass into the driven equipment's bearings.</li>
<li><strong>Inspect grounding rings</strong> during maintenance; the fibres wear and collect contamination over time.</li>
</ol>
<p>Where bearing currents are suspected on an operating unit, shaft voltage can be measured with an oscilloscope and a shaft voltage probe. Periodic vibration analysis can also pick up fluting signatures early; see <a href="<?= url('guides/vibration-analysis-predictive-maintenance') ?>">vibration analysis for predictive maintenance</a>.</p>
<?php guide_end([
    ['What causes bearing fluting in VFD motors?', 'Common-mode voltage from the drive couples onto the motor shaft and discharges through the bearing lubricant film as tiny arcs. Repeated discharges pit the races, and the pits organize into a washboard pattern called fluting.'],
    ['What does a shaft grounding ring do?', 'It gives the shaft voltage a lower-impedance path to the motor frame through conductive fibres or brushes, so the charge drains without discharging through the bearings.'],
    ['Do insulated bearings stop bearing currents?', 'An insulated bearing on one end breaks the circulating current loop in larger motors. It does not by itself stop discharge through the other bearing, so it is often combined with a grounding ring.'],
    ['Does VFD cable type affect bearing currents?', 'Yes. Symmetrical shielded VFD cable with proper terminations returns common-mode current to the drive instead of letting it flow through the motor bearings and the building structure.'],
]);
