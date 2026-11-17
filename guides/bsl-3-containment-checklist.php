<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('bsl-3-containment-checklist'); ?>
<p class="lede">Use this checklist to review the air handling for a BSL-3 (Containment Level 3) suite before drawings are issued. It covers directional airflow, exhaust redundancy, filtration, sealing, failure behavior and decontamination, the items that most often decide whether a suite can be certified.</p>

<h2>Governing documents to confirm first</h2>
<p>In the United States, BSL-3 design follows <em>Biosafety in Microbiological and Biomedical Laboratories</em> (BMBL), published by the CDC and NIH, plus any requirements of the Federal Select Agent Program where select agents are handled. NIH-funded facilities may also apply the NIH Design Requirements Manual. In Canada, the Public Health Agency of Canada's Canadian Biosafety Standard sets the physical containment requirements for Containment Level 3, and those requirements are in some areas more prescriptive than BMBL.</p>
<ul>
<li>☐ Edition of BMBL or the Canadian Biosafety Standard adopted for the project identified</li>
<li>☐ Owner's biosafety officer and risk assessment for the agents and procedures obtained</li>
<li>☐ Certification authority and the tests it will witness identified</li>
<li>☐ Any agriculture (BSL-3Ag) or enhanced requirements flagged</li>
</ul>
<p class="note">The risk assessment drives several choices BMBL leaves open, including whether supply air needs HEPA protection and how exhaust is filtered. Do not assume; ask the biosafety officer to put the answers in writing.</p>

<h2>Directional airflow and pressure</h2>
<ul>
<li>☐ Airflow moves from areas of lower hazard to higher hazard at all times: corridor to anteroom to lab</li>
<li>☐ Pressure steps between each zone defined, with a measurable differential at every door</li>
<li>☐ Visual monitoring device at the entry to the suite that shows directional airflow to people entering</li>
<li>☐ Room pressure or airflow alarms, audible and visual, inside and outside the suite</li>
<li>☐ Supply and exhaust control sequenced so the suite cannot go positive during start, stop, fan failure or power transfer</li>
<li>☐ Supply fans interlocked to stop or reduce if exhaust fails, with the interlock tested</li>
<li>☐ Door interlocks or procedures for anteroom doors considered, so both doors are not open at once</li>
</ul>
<p>Problems with offsets after start-up are diagnosed in <a href="<?= url('guides/lab-pressurization-troubleshooting') ?>">troubleshooting laboratory pressurization problems</a>.</p>

<h2>Exhaust system</h2>
<ul>
<li>☐ Dedicated exhaust for the suite; not shared with non-containment areas</li>
<li>☐ No recirculation of suite exhaust air to any other area</li>
<li>☐ Redundant exhaust fans (N+1 minimum) with automatic changeover on failure</li>
<li>☐ Changeover time short enough that the suite does not reverse pressure; tested under load</li>
<li>☐ HEPA filtration on exhaust where required by the standard or risk assessment</li>
<li>☐ Exhaust HEPA housings in bag-in/bag-out configuration with test sections, located as close to the suite as practical</li>
<li>☐ Exhaust ductwork upstream of the HEPA filters sealed and under negative pressure; leak tested</li>
<li>☐ Exhaust discharged away from occupied areas and intakes, with stack height and velocity checked</li>
<li>☐ Exhaust fans and controls on emergency power</li>
</ul>
<p>Housing construction and change-out are described in <a href="<?= url('guides/bag-in-bag-out-filter-housings') ?>">bag-in/bag-out filter housings</a>, and discharge design in <a href="<?= url('guides/lab-exhaust-fans-stack-design') ?>">lab exhaust fans and high-plume stack design</a>.</p>

<h2>Supply system</h2>
<ul>
<li>☐ Supply air handler dedicated to the suite, or the suite isolated from shared supply by tight dampers</li>
<li>☐ Protection against backflow into supply ductwork on loss of exhaust: HEPA filter, bubble-tight damper or both, per risk assessment</li>
<li>☐ Supply fan redundancy appropriate to the program; loss of supply should never compromise inward flow</li>
<li>☐ 100% outdoor air with freeze protection and humidity control</li>
<li>☐ Supply diffusers located so air does not disrupt biosafety cabinet performance</li>
</ul>

<h2>Sealing and room integrity</h2>
<ul>
<li>☐ Walls, floors and ceilings sealed; penetrations for ducts, pipes, conduits and fixtures sealed</li>
<li>☐ Room integrity test method and acceptance defined where the governing standard or owner requires it</li>
<li>☐ Ductwork between the room and the isolation dampers welded or sealed and pressure tested</li>
<li>☐ Access doors on contaminated ducts and housings gasketed and rated for decontamination</li>
<li>☐ Isolation dampers on supply and exhaust branches allow the suite to be sealed for gaseous decontamination; leakage rating specified (see <a href="<?= url('guides/bubble-tight-damper-specification') ?>">bubble-tight damper specification</a>)</li>
</ul>

<h2>Biosafety cabinets and equipment</h2>
<ul>
<li>☐ Class II cabinet types confirmed (A2 room-exhausted or canopy-connected, B2 hard-ducted) and exhaust connections designed for each</li>
<li>☐ Canopy connections alarmed for loss of exhaust</li>
<li>☐ Hard-ducted cabinets interlocked with building exhaust so the cabinet does not pressurize on exhaust failure</li>
<li>☐ Autoclave and effluent decontamination systems coordinated for heat and exhaust</li>
</ul>

<h2>Controls, power and verification</h2>
<ul>
<li>☐ Failure modes analyzed: single fan, single damper, controller, sensor and power failures</li>
<li>☐ Controller and network design avoid a single point of failure for pressure control</li>
<li>☐ Emergency power transfer tested with the suite in operation</li>
<li>☐ Restart sequence after power loss returns the suite to negative pressure without positive excursion</li>
<li>☐ Alarms reported to the building automation system and to staff off-hours</li>
<li>☐ Initial verification, then annual reverification, scheduled and assigned</li>
<li>☐ Decontamination procedure for HEPA housings and the room written and compatible with materials</li>
</ul>
<table>
<thead><tr><th>Common review finding</th><th>Typical fix</th></tr></thead>
<tbody>
<tr><td>Suite goes positive for a few seconds on exhaust fan changeover</td><td>Faster changeover, supply interlock, standby fan running at low speed</td></tr>
<tr><td>Damper leakage too high for gaseous decontamination</td><td>Upgrade to bubble-tight dampers tested to specified pressure</td></tr>
<tr><td>Exhaust duct unsealed upstream of HEPA</td><td>Welded or sealed duct with pressure test</td></tr>
<tr><td>No visual airflow indicator at entry</td><td>Add pressure display or ball indicator visible before entering</td></tr>
</tbody>
</table>
<?php guide_end([
    ['Does a BSL-3 lab need HEPA filtered exhaust?', 'It depends on the governing standard and risk assessment. The Canadian Biosafety Standard requires HEPA exhaust for Containment Level 3, while BMBL allows the need to be determined by risk assessment. Many U.S. owners choose HEPA exhaust regardless.'],
    ['How much redundancy does BSL-3 exhaust need?', 'At minimum, redundant exhaust fans with automatic changeover so the suite does not lose inward airflow when a fan fails. Fans and controls should be on emergency power and changeover should be tested.'],
    ['Can a BSL-3 suite share an air handler with other spaces?', 'Exhaust must not be shared or recirculated. Supply can sometimes be shared if the suite is protected by isolation dampers and backflow protection, but many owners prefer a dedicated supply unit.'],
]);
