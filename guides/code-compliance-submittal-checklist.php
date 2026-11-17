<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('code-compliance-submittal-checklist'); ?>
<p class="lede">Before stamping an AHU submittal reviewed, check that it proves compliance with the codes the unit must satisfy: a valid safety listing, energy code values that match the compliance forms, fire safety items, seismic certification where required, and electrical ratings. This checklist covers those code items only.</p>

<h2>How this checklist fits the review</h2>
<p>A full submittal review also checks capacity, dimensions, access, sound and specification conformance; that broader process is in <a href="<?= url('guides/ahu-submittal-review-checklist') ?>">the AHU submittal review checklist</a>. The items below are the ones an inspector or plan reviewer is likely to check later. Catching them during submittal review avoids red tags at final inspection.</p>

<h2>Safety listing</h2>
<ul>
<li>☐ Unit will carry a listing mark valid in the country of installation (US, Canadian, or dual mark such as cULus or cETLus).</li>
<li>☐ Listing covers the options ordered: electric heat, factory-mounted VFDs, controls, convenience outlets, lights.</li>
<li>☐ Nameplate voltage and phase match the site supply.</li>
<li>☐ Separately mounted control panels carry their own listing where they are not covered by the unit listing.</li>
<li>☐ Shipping splits and field reconnection are addressed in the manufacturer's listed installation instructions.</li>
<li>☐ If any part of the unit cannot be listed at the factory, a field evaluation plan is in place.</li>
</ul>

<h2>Electrical ratings</h2>
<ul>
<li>☐ Minimum circuit ampacity and maximum overcurrent protection shown for each power connection.</li>
<li>☐ Short-circuit current rating shown and equal to or greater than the available fault current scheduled by the electrical engineer.</li>
<li>☐ Any SCCR conditions (fuse class, upstream device) noted and coordinated with the electrical drawings.</li>
<li>☐ Disconnect provisions consistent with the electrical design.</li>
</ul>

<h2>Energy code documentation</h2>
<ul>
<li>☐ Fan power at design conditions shown, with the basis (bhp at design total pressure, or input power).</li>
<li>☐ Fan system power complies with the method in the adopted code, and values match the compliance forms.</li>
<li>☐ Fan Energy Index at the design point shown for each fan or array, with certification basis, where the code requires it.</li>
<li>☐ Motor efficiency meets federal minimums or the code's requirement.</li>
<li>☐ Energy recovery effectiveness or recovery ratio at code rating conditions shown, with AHRI 1060 certification if claimed.</li>
<li>☐ Economizer capability, damper leakage class and high-limit control type documented.</li>
<li>☐ Coil and heating efficiencies (for DX or gas heat) meet minimums where applicable.</li>
<li>☐ Casing thermal and leakage performance shown if the code or specification requires it.</li>
</ul>
<p class="note">The most common energy mismatch is between the fan power used on the compliance form at design time and the final selection in the submittal. Recheck the forms if the fan selection changed.</p>

<h2>Fire and life safety</h2>
<ul>
<li>☐ Insulation and other airstream materials have flame spread 25 or less and smoke developed 50 or less, with test standard named (ASTM E84/UL 723 or CAN/ULC-S102).</li>
<li>☐ Filters meet UL 900 requirements.</li>
<li>☐ Duct smoke detector provisions shown where required: factory-mounted or field location identified, sampling tube location acceptable, access for testing.</li>
<li>☐ Fan shutdown on smoke detection, or override for smoke control systems, in the control sequence.</li>
<li>☐ Electric heaters have automatic and manual-reset high limits and airflow proving.</li>
<li>☐ Plenum-rated wiring or raceway where the unit or wiring is in a plenum.</li>
</ul>
<p>Specification language for insulation ratings is covered in <a href="<?= url('guides/insulation-fire-rating-specification') ?>">specifying insulation fire ratings</a>.</p>

<h2>Seismic and wind</h2>
<ul>
<li>☐ Seismic certification provided where the unit is a designated seismic system, with parameters (SDS, z/h, Ip) that cover the installed location.</li>
<li>☐ HCAI OSP number shown for California healthcare projects where required.</li>
<li>☐ Anchorage, curb and isolator details match the certification conditions.</li>
<li>☐ Wind load design for rooftop units stated where required by the building code.</li>
</ul>

<h2>Mechanical code items</h2>
<ul>
<li>☐ Condensate drain connection sizes and trap requirements stated.</li>
<li>☐ Secondary drain pan, overflow switch or other required overflow protection shown where needed.</li>
<li>☐ Service clearances on drawings consistent with mechanical code and listed installation instructions.</li>
<li>☐ Outdoor units listed for outdoor use and weather protection provided.</li>
<li>☐ Drain pans meet ASHRAE 62.1 slope and drainage requirements where the code adopts them.</li>
</ul>

<h2>Refrigerant safety</h2>
<ul>
<li>☐ Refrigerant type and system charge for each DX circuit shown.</li>
<li>☐ For A2L refrigerants, leak detection, mitigation controls and sensor location documented.</li>
<li>☐ Refrigerant charge checked against the smallest served space per ASHRAE 15 or CSA B52.</li>
</ul>
<p>Requirements for A2L systems are explained in <a href="<?= url('guides/ashrae-15-csa-b52-refrigerant-safety') ?>">ASHRAE 15 and CSA B52 refrigerant safety</a>.</p>

<h2>Program and procurement compliance</h2>
<ul>
<li>☐ Domestic content certification provided on funded public projects.</li>
<li>☐ Utility incentive documentation (efficiency data, certification) where the owner is applying.</li>
<li>☐ Green building documentation for credits that rely on AHU data.</li>
</ul>

<h2>Healthcare and special occupancy additions</h2>
<ul>
<li>☐ Healthcare units: filter bank arrangement and MERV values per ASHRAE 170 or CSA Z317.2, and humidifier type acceptable to the standard.</li>
<li>☐ Healthcare units: seismic certification for essential facilities, and HCAI acceptance in California.</li>
<li>☐ Laboratory and hazardous exhaust: spark-resistant construction class and materials suited to the exhaust stream.</li>
<li>☐ Hazardous locations: motors and electrical components rated for the classified area.</li>
<li>☐ Smoke control systems: unit listed or tested for the duty, and controls arranged for firefighter override.</li>
<li>☐ Kitchen make-up air or direct-fired heat: gas train and burner listing documented.</li>
</ul>

<h2>Review outcome</h2>
<ul>
<li>☐ Every code item above is either documented or noted as an outstanding requirement in the review comments.</li>
<li>☐ Outstanding items have a responsible party and a date.</li>
<li>☐ Final compliance documents (listing, seismic certificate, SCCR) are listed for turnover.</li>
</ul>
<?php guide_end([
    ['What code items should be checked in an AHU submittal?', 'Check the safety listing, electrical ratings including SCCR, energy code values such as fan power and FEI, fire safety items like insulation ratings and smoke detectors, seismic certification where required, mechanical code items and refrigerant safety.'],
    ['Why do energy code values in submittals often conflict with compliance forms?', 'Compliance forms are prepared during design using early fan selections. When the final submittal changes the fan, motor or pressure drops, the forms are often not updated. Recheck them whenever selections change.'],
    ['Does every AHU need seismic certification?', 'No. Certification is required when the unit is a designated seismic system, typically in essential facilities in higher seismic design categories. Other units still need anchorage designed for seismic and wind loads.'],
    ['Who is responsible for SCCR coordination?', 'The electrical engineer determines available fault current and states the required rating, and the manufacturer designs and marks the panel to meet it. The submittal reviewer confirms the two match.'],
]);
