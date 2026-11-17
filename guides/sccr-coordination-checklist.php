<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('sccr-coordination-checklist'); ?>
<p class="lede">An air handler's short-circuit current rating (SCCR) must be equal to or greater than the available fault current at the point where it is connected. Getting there takes coordination between the electrical engineer, who knows the fault current, and the AHU manufacturer, who builds and marks the panel. This checklist covers both sides.</p>

<h2>Why SCCR matters on air handlers</h2>
<p>SCCR is the maximum fault current a piece of equipment can safely withstand without fire or explosion, given its specified overcurrent protection. Modern buildings with large transformers close to the equipment can deliver tens of thousands of amperes at a mechanical room panel. An AHU control panel with a low default rating (often 5 kA when determined from component defaults) cannot legally be installed there. In the US, NEC Article 409 requires industrial control panels to be marked with SCCR, and Article 440 requires the same marking on multimotor and combination-load HVAC equipment. Article 110 requires equipment to be installed only where its rating is not exceeded. In Canada, the Canadian Electrical Code requires equipment to be suitable for the available fault current, and control panels are evaluated under CSA standards for industrial control equipment.</p>

<h2>Electrical engineer's checklist</h2>
<ul>
<li>☐ Available fault current calculated at each panel or disconnect that feeds an AHU, not just at the service.</li>
<li>☐ Values account for the largest transformer, utility contribution and motor contribution as the method requires.</li>
<li>☐ Required minimum SCCR stated on the mechanical equipment schedule or in the specification for each unit.</li>
<li>☐ Upstream overcurrent device type identified (fuses or breaker, current-limiting or not) if the unit's rating depends on it.</li>
<li>☐ Future changes considered: utility upgrades or transformer replacement can raise fault current over the building's life.</li>
<li>☐ Available fault current marking at service equipment maintained, as required in the US.</li>
</ul>
<p class="note">Specifying "65 kA SCCR" on every unit is simple but can add cost where the actual fault current is much lower. Use the calculated value with a sensible margin.</p>

<h2>Manufacturer's checklist</h2>
<ul>
<li>☐ Required SCCR received from the specification or schedule before panel design.</li>
<li>☐ Panel SCCR determined using a recognized method, such as UL 508A Supplement SB in the US, or tested combination ratings.</li>
<li>☐ Every power circuit component's rating considered: disconnect, fuses or breakers, contactors, overloads, VFDs, terminal blocks, power distribution blocks.</li>
<li>☐ Lowest-rated component identified, since it limits the panel unless protected by a current-limiting device.</li>
<li>☐ VFD high-fault ratings used only with the specific fuse class and size listed by the drive manufacturer.</li>
<li>☐ Feeder and branch circuit protection inside the panel coordinated with the rating claimed.</li>
<li>☐ Nameplate marked with the SCCR value, along with voltage, full-load amps, minimum circuit ampacity and maximum overcurrent protection.</li>
<li>☐ If the rating depends on a specific upstream device, the nameplate states it.</li>
</ul>

<h2>Common ways to raise SCCR</h2>
<table>
<thead><tr><th>Approach</th><th>How it helps</th><th>Watch for</th></tr></thead>
<tbody>
<tr><td>Current-limiting fuses (for example Class J or CC) on feeders</td><td>Let through less fault energy, protecting downstream devices</td><td>Fuse replacement must be same class; spare fuses on site</td></tr>
<tr><td>High-fault rated VFDs with specified fuses</td><td>Drive manufacturers publish tested combinations at higher ratings</td><td>Only valid with the exact fuse listed</td></tr>
<tr><td>Tested combination motor controllers</td><td>Combination starter assemblies tested to high fault levels</td><td>Must use the exact combination</td></tr>
<tr><td>Replacing power distribution blocks</td><td>Some blocks have low default ratings</td><td>Use blocks with high ratings listed for feeder use</td></tr>
<tr><td>Separate feeds to fan array drives</td><td>Reduces dependence on one low-rated component</td><td>More field wiring and disconnects</td></tr>
</tbody>
</table>

<h2>Multi-panel and fan array units</h2>
<ul>
<li>☐ Each separately fed panel on the unit has its own SCCR marking.</li>
<li>☐ Fan arrays with one VFD per motor: the panel rating considers all drives and the common feeder protection.</li>
<li>☐ Field wiring between shipping sections does not introduce unlisted components that reduce the rating.</li>
<li>☐ Single-point power options have a rating that covers all internal sub-panels.</li>
<li>☐ Electric heaters fed from the main panel included in the evaluation.</li>
</ul>
<p>Whether one drive serves all fans or each fan has its own changes the panel design; see <a href="<?= url('guides/single-vfd-vs-vfd-per-motor-fan-array') ?>">single VFD versus VFD per motor</a>.</p>

<h2>Submittal and field checklist</h2>
<ul>
<li>☐ Submittal shows marked SCCR and any conditions (upstream device type).</li>
<li>☐ Engineer compares marked SCCR to available fault current at that location.</li>
<li>☐ Disconnect and feeder protection installed in the field match any conditions on the nameplate. Disconnect location itself is a separate topic, covered in <a href="<?= url('guides/disconnects-and-vfd-placement') ?>">disconnects and VFD placement</a>.</li>
<li>☐ Inspector can read the SCCR on the nameplate without removing covers.</li>
<li>☐ Replacement fuses specified in O&amp;M documents to preserve the rating.</li>
<li>☐ Changes to drives or fuses during service reviewed for SCCR impact.</li>
</ul>
<p class="warn">Swapping a failed VFD for a different model, or replacing Class J fuses with ordinary time-delay fuses, can quietly reduce the panel's SCCR below the available fault current. Document approved replacements.</p>

<h2>Where listing ties in</h2>
<p>SCCR is assigned as part of the control panel's listing. Panels built under UL 508A or the equivalent CSA program carry the marking as part of their label; the listing process is explained in <a href="<?= url('guides/ul-508a-csa-listed-control-panels') ?>">UL 508A and CSA-listed control panels</a>. Missing SCCR markings are also a frequent finding in field evaluations of modified equipment.</p>
<?php guide_end([
    ['What SCCR does an air handler need?', 'At least the available fault current at the point where the unit is connected. The electrical engineer calculates that value, and the manufacturer designs and marks the control panel to meet or exceed it.'],
    ['Why are many default control panel SCCRs only 5 kA?', 'When a panel\'s rating is determined from default component values rather than tested combinations, some components such as power distribution blocks and certain contactors carry low assumed ratings. Using tested combinations or current-limiting fuses raises the rating.'],
    ['Can replacing a VFD change the SCCR of an AHU?', 'Yes. High-fault VFD ratings are tied to specific drives and fuse types. A different drive or fuse can lower the panel\'s rating below the available fault current.'],
    ['Does the NEC require SCCR marking on HVAC equipment?', 'Yes. Industrial control panels and multimotor or combination-load HVAC equipment must be marked with their short-circuit current rating, and equipment must not be installed where available fault current exceeds that rating.'],
]);
