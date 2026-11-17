<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('title-24-air-handler-checklist'); ?>
<p class="lede">California's Title 24, Part 6 regulates air handlers more tightly than most US energy codes, with its own fan power budget, ventilation rules, economizer fault detection and a set of field acceptance tests that must be performed and signed before occupancy. Work through this checklist from design to close-out.</p>

<h2>Before you start</h2>
<p>Title 24, Part 6 (the Building Energy Efficiency Standards) is updated on a three-year cycle by the California Energy Commission. Requirements, section numbering and forms change between editions, so confirm which edition applies based on the permit application date. Local jurisdictions can adopt reach codes that go further, especially on electrification. This checklist is organized by topic; check each item against the edition in force.</p>

<h2>Mandatory requirements (design phase)</h2>
<h3>Ventilation and indoor air quality</h3>
<ul>
<li>☐ Outdoor air calculated using Title 24's own ventilation method and rates, which differ from ASHRAE 62.1 in places.</li>
<li>☐ Required minimum outdoor air can be measured and maintained at all supply airflows on VAV systems.</li>
<li>☐ Demand-controlled ventilation provided where required for high-density spaces.</li>
<li>☐ Occupant-sensor ventilation controls for spaces where required, allowing ventilation reduction when unoccupied.</li>
<li>☐ Filtration meets the minimum required by the edition (MERV 13 has been the baseline for many systems). Filter racks designed to minimize bypass.</li>
<li>☐ Pre-occupancy purge capability included in the control sequence.</li>
</ul>
<h3>Controls</h3>
<ul>
<li>☐ Automatic shutoff with time schedules and setback.</li>
<li>☐ Supply air temperature reset where required.</li>
<li>☐ VAV static pressure reset based on zone damper position where DDC to the zone is provided.</li>
<li>☐ Economizer fault detection and diagnostics (FDD) on equipment where the edition requires it.</li>
<li>☐ Demand-responsive controls able to receive a signal and adjust setpoints.</li>
<li>☐ Isolation of zones for shutoff on larger systems.</li>
</ul>
<h3>Dampers and leakage</h3>
<ul>
<li>☐ Outdoor air and exhaust dampers meet maximum leakage rates; motorized dampers where required.</li>
<li>☐ Duct sealing and leakage testing for small single-zone systems where Title 24 requires it.</li>
</ul>

<h2>Prescriptive requirements (if not using performance compliance)</h2>
<h3>Fan power</h3>
<ul>
<li>☐ Fan system power calculated using the edition's fan power budget method. Recent editions express this as watts per cfm with component allowances rather than the older bhp formula.</li>
<li>☐ Each fan meets the minimum Fan Energy Index required by the edition.</li>
<li>☐ Variable-speed control on supply fans above the size threshold, with the required part-load power characteristic.</li>
</ul>
<p>The national fan power method differs and is not a substitute; it is worked through in <a href="<?= url('guides/ashrae-90-1-fan-power-limitation') ?>">calculating ASHRAE 90.1 fan power limitation compliance</a>.</p>
<h3>Economizers</h3>
<ul>
<li>☐ Economizer provided on systems above the capacity threshold, with exceptions documented.</li>
<li>☐ Integrated economizer operation and high-limit control type allowed for the California climate zone. Title 24 uses its own 16 California climate zones, not the ASHRAE zones.</li>
<li>☐ Relief capacity sized for full economizer flow.</li>
</ul>
<h3>Heat recovery and electrification</h3>
<ul>
<li>☐ Exhaust air heat recovery provided where the edition requires it for the climate zone and outdoor air fraction.</li>
<li>☐ Heat pump or electric heating baseline requirements reviewed; recent editions moved prescriptive baselines toward heat pumps for many building types.</li>
<li>☐ Limits on simultaneous heating and cooling and reheat at VAV boxes checked.</li>
</ul>

<h2>Compliance documentation</h2>
<ul>
<li>☐ Certificate of Compliance (NRCC mechanical forms) prepared and signed by the responsible designer, and registered with an approved data registry where required.</li>
<li>☐ Mechanical schedules on drawings match the values on compliance forms.</li>
<li>☐ For performance compliance, the CBECC model uses actual AHU fan power, efficiencies and controls.</li>
<li>☐ Installation certificates (NRCI) completed by the installing contractor.</li>
</ul>
<p>General steps for energy compliance documentation in other jurisdictions are in <a href="<?= url('guides/energy-code-compliance-documentation') ?>">how to document energy code compliance for AHUs</a>.</p>

<h2>Acceptance testing (construction phase)</h2>
<p>Title 24 requires functional acceptance tests on many mechanical systems before final inspection. Results are recorded on Certificate of Acceptance (NRCA) forms. Some tests must be performed by a certified Acceptance Test Technician working for a certified employer. Tests that commonly involve the air handler:</p>
<ul>
<li>☐ Outdoor air acceptance: measured minimum outdoor air at design and reduced airflow.</li>
<li>☐ Constant volume and single-zone system controls.</li>
<li>☐ Air distribution and duct leakage where required.</li>
<li>☐ Air economizer controls, including high limit and integration with mechanical cooling.</li>
<li>☐ Economizer fault detection and diagnostics alarms.</li>
<li>☐ Demand-controlled ventilation response to CO2.</li>
<li>☐ Supply fan variable flow controls.</li>
<li>☐ Hydronic valve leakage and supply water temperature reset where applicable.</li>
<li>☐ Occupant-sensor ventilation controls.</li>
<li>☐ Energy management control system scheduling and setback.</li>
</ul>
<p class="warn">Acceptance tests are separate from commissioning and from TAB, though they can be coordinated. Missing NRCA forms are a common reason for a failed final inspection in California.</p>

<h2>Equipment and submittal items to verify</h2>
<ul>
<li>☐ Fan selections show FEI at the design point and the basis of calculation.</li>
<li>☐ Damper leakage certified ratings attached.</li>
<li>☐ Filter MERV ratings and initial pressure drop shown.</li>
<li>☐ Outdoor airflow measurement station accuracy matches the acceptance test procedure.</li>
<li>☐ Controls submittal includes sequences for every mandatory control item above.</li>
<li>☐ FDD device listing or certification where the edition requires it.</li>
</ul>
<h2>Close-out items</h2>
<ul>
<li>☐ All NRCI and NRCA forms complete, signed and registered where required before requesting final inspection.</li>
<li>☐ Failed acceptance tests corrected and retested, with the retest documented on a new form.</li>
<li>☐ Final sequence of operation and setpoints recorded in the O&amp;M manual so later changes do not undo the tested behaviour.</li>
<li>☐ FDD alarm destinations confirmed with the owner's operations staff.</li>
<li>☐ Copies of compliance documents handed to the owner for future alterations, since replacing the AHU later triggers Title 24 alteration requirements.</li>
</ul>
<p class="note">The 16 California climate zones affect heat recovery, economizer high-limit and baseline system requirements. Confirm the zone from the CEC climate zone lookup by address rather than by county.</p>
<?php guide_end([
    ['Does Title 24 use ASHRAE 90.1 fan power limits?', 'No. Title 24, Part 6 has its own fan power method, which in recent editions is a budget in watts per cfm with component allowances. Projects in California follow the Title 24 method rather than 90.1.'],
    ['What are Title 24 acceptance tests?', 'They are functional field tests of mechanical and lighting controls required before final inspection, recorded on Certificate of Acceptance forms. Some must be performed by certified Acceptance Test Technicians.'],
    ['Are Title 24 climate zones the same as ASHRAE climate zones?', 'No. California has 16 climate zones defined by the California Energy Commission, which are used throughout Title 24 instead of the ASHRAE climate zones.'],
    ['Which edition of Title 24 applies to my project?', 'The edition in force on the date the permit application is submitted. Local reach codes can add requirements, so check with the jurisdiction.'],
]);
