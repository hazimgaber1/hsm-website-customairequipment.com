<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('leed-credits-ahu-checklist'); ?>
<p class="lede">Air handler decisions feed directly into about a dozen LEED v4.1 prerequisites and credits, mostly in Energy and Atmosphere and in Indoor Environmental Quality. Use this checklist during design and submittal review to make sure each AHU choice supports the credits the project is pursuing.</p>

<h2>How to use this checklist</h2>
<p>LEED credit requirements are set by the rating system version and adaptation (BD+C, ID+C, O+M) and change through addenda. This list follows the structure of LEED v4.1 BD+C. Projects registering under LEED v5 or another version should map items to the corresponding credits. Mark each line as applicable, addressed in design, verified in submittals and documented. Credit thresholds themselves come from the current reference guide, not from this page.</p>

<h2>Energy and Atmosphere</h2>
<h3>Minimum Energy Performance (prerequisite) and Optimize Energy Performance</h3>
<ul>
<li>☐ Confirm the energy model reflects actual AHU fan power at design, not a default value.</li>
<li>☐ Fan system power is below the ASHRAE 90.1 limit used by the baseline, and the proposed model uses actual fan power from selections.</li>
<li>☐ Fan Energy Index meets the code minimum if the referenced 90.1 edition requires it.</li>
<li>☐ Energy recovery effectiveness and pressure drop entered correctly for both airstreams.</li>
<li>☐ Economizer type and high-limit control match the model inputs.</li>
<li>☐ Supply air temperature reset, static pressure reset and demand-controlled ventilation sequences are modelled only if they will be implemented.</li>
<li>☐ Casing leakage and thermal performance considered where the model accounts for it.</li>
</ul>
<h3>Fundamental Commissioning (prerequisite) and Enhanced Commissioning</h3>
<ul>
<li>☐ Specification requires factory testing reports and allows commissioning authority review.</li>
<li>☐ Functional test procedures written for every sequence the unit performs.</li>
<li>☐ Monitoring-based commissioning points (fan power, airflow, temperatures) available from the AHU controls if that option is pursued.</li>
</ul>
<h3>Advanced Energy Metering</h3>
<ul>
<li>☐ Separate metering of fan electrical energy where it is a significant end use.</li>
<li>☐ VFDs or EC controllers able to report kW to the BAS.</li>
</ul>
<h3>Demand Response</h3>
<ul>
<li>☐ Sequences allow temporary reduction of fan speed or cooling without violating ventilation minimums.</li>
</ul>
<h3>Fundamental and Enhanced Refrigerant Management</h3>
<ul>
<li>☐ No CFC-based refrigerants in DX coils or associated equipment.</li>
<li>☐ For enhanced credit, refrigerant impact calculation includes DX air handler charges and line sets.</li>
<li>☐ Low-GWP refrigerant selection coordinated with refrigerant safety requirements.</li>
</ul>

<h2>Indoor Environmental Quality</h2>
<h3>Minimum Indoor Air Quality Performance (prerequisite)</h3>
<ul>
<li>☐ Outdoor airflow meets the ASHRAE 62.1 Ventilation Rate Procedure or local code, whichever is more stringent. The calculation method is in <a href="<?= url('guides/ashrae-62-1-ventilation-rate-procedure') ?>">the ASHRAE 62.1 ventilation rate procedure</a>.</li>
<li>☐ Outdoor airflow monitoring device installed for each AHU serving occupied spaces, accurate within the required tolerance.</li>
<li>☐ Intake location meets separation requirements from contaminant sources.</li>
</ul>
<h3>Enhanced Indoor Air Quality Strategies</h3>
<ul>
<li>☐ Filtration of MERV 13 or higher (or ISO ePM1 equivalent) on outdoor and recirculated air.</li>
<li>☐ Filter racks sealed to prevent bypass so the rating is real.</li>
<li>☐ Increased ventilation option: AHU fan and coils sized for the higher outdoor air rate if that path is chosen.</li>
<li>☐ CO2 or other contaminant monitoring integrated into the AHU controls where required.</li>
</ul>
<h3>Construction Indoor Air Quality Management Plan</h3>
<ul>
<li>☐ Protect AHUs and ductwork during construction; cap openings.</li>
<li>☐ If permanent units run during construction, MERV 8 filters on each return, replaced before occupancy.</li>
</ul>
<h3>Indoor Air Quality Assessment</h3>
<ul>
<li>☐ If flush-out is chosen, the unit can deliver the required outdoor air volume while maintaining temperature and humidity. The procedure is in <a href="<?= url('guides/building-flush-out-filter-replacement') ?>">building flush-out and filter replacement</a>.</li>
<li>☐ If air testing is chosen, plan for filter replacement before testing.</li>
</ul>
<h3>Thermal Comfort</h3>
<ul>
<li>☐ AHU capacity and controls allow conditions that meet ASHRAE 55 for the design.</li>
<li>☐ Humidity control capability documented where it affects comfort compliance.</li>
</ul>
<h3>Acoustic Performance</h3>
<ul>
<li>☐ Background noise targets for occupied rooms are achieved; supply, return and casing-radiated sound accounted for.</li>
<li>☐ Octave-band sound power data from the AHU used in the acoustic analysis.</li>
<li>☐ Silencers and isolation included in the energy model's pressure drop.</li>
</ul>

<h2>Materials and Resources</h2>
<ul>
<li>☐ Environmental Product Declarations available if the project counts mechanical equipment toward Building Product Disclosure; see <a href="<?= url('guides/embodied-carbon-epd') ?>">embodied carbon and EPDs</a>.</li>
<li>☐ Construction waste: crating and packaging recyclable where the project tracks it.</li>
<li>☐ For renovation projects, reusing existing casings or rebuilding in place documented as building reuse where eligible.</li>
</ul>

<h2>Design trade-offs that cross credits</h2>
<p>Several AHU choices help one credit and hurt another. Decide them deliberately rather than letting each consultant optimize a single credit:</p>
<ul>
<li>☐ Higher filtration (MERV 14 or 15) supports Enhanced IAQ but raises fan pressure. Deep-pleat or larger-face-area filters limit the energy penalty.</li>
<li>☐ Increased ventilation beyond code earns IAQ points but raises heating, cooling and dehumidification energy. Pair it with energy recovery if both credits are targeted.</li>
<li>☐ Silencers help Acoustic Performance but add pressure drop; larger cross-sections or fan arrays with lower tip speeds can reduce the need for them.</li>
<li>☐ Low-GWP refrigerants support Enhanced Refrigerant Management but may require leak detection and mitigation controls.</li>
<li>☐ Energy recovery wheels save energy but bring cross-leakage that must be addressed for IAQ; plates or runaround loops avoid that at some cost in effectiveness.</li>
</ul>

<h2>Documentation to collect for the LEED submission</h2>
<ul>
<li>☐ Equipment schedules with airflow, outdoor air, fan power and filter rating.</li>
<li>☐ Fan and AHU selection reports supporting energy model inputs.</li>
<li>☐ Refrigerant type and charge for each DX circuit.</li>
<li>☐ Commissioning reports and functional test results.</li>
<li>☐ Ventilation calculations and outdoor airflow measurement documentation.</li>
<li>☐ Acoustic calculations or field measurements where pursued.</li>
</ul>
<p class="note">Many credits fail at documentation rather than design. Ask the manufacturer for selection reports, filter data and sound data in a format that can be attached to the LEED submission, and make sure the values match the final as-built unit.</p>
<?php guide_end([
    ['Which LEED credits are affected by air handler selection?', 'The largest are Optimize Energy Performance, Enhanced Indoor Air Quality Strategies, Minimum Indoor Air Quality Performance, Refrigerant Management, Thermal Comfort and Acoustic Performance. Commissioning and metering credits also depend on AHU controls.'],
    ['What filtration does LEED v4.1 require for enhanced IAQ?', 'The enhanced IAQ strategy for mechanically ventilated spaces calls for MERV 13 or higher filtration, or an equivalent ISO 16890 rating, on outdoor and recirculated air. Check the current reference guide for exact wording.'],
    ['Do AHUs need outdoor airflow monitoring for LEED?', 'Yes, the Minimum Indoor Air Quality Performance prerequisite requires outdoor airflow monitoring for mechanical ventilation systems, with accuracy requirements defined in the reference guide.'],
    ['Does LEED v5 change these AHU-related credits?', 'LEED v5 reorganized several credits and increased the emphasis on carbon and electrification. Map each item in this checklist to the equivalent v5 credit if the project registered under the newer version.'],
]);
