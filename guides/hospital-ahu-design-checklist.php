<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('hospital-ahu-design-checklist'); ?>
<p class="lede">Hospital air handlers have to deliver code-required ventilation, keep running through failures and maintenance, stay clean inside for decades, and be serviceable by staff who cannot shut them down. Work through this checklist during schematic and design development, before the specification is written.</p>

<h2>Basis of design</h2>
<ul>
<li>☐ Governing standards and editions recorded: ASHRAE 170 via the adopted FGI Guidelines, or CSA Z317.2 in Canada, plus energy code, NFPA 99/CSA Z32, and the owner's design standard.</li>
<li>☐ Spaces served by each AHU listed with their room type, pressure relationship, ACH, RH and temperature ranges.</li>
<li>☐ Spaces requiring all air exhausted are identified and excluded from return.</li>
<li>☐ Operating hours recorded; most hospital AHUs run continuously.</li>
<li>☐ Infection prevention team consulted on the AHU zoning and any special requirements.</li>
<li>☐ Future flexibility needs noted: rooms likely to be converted to isolation or procedure rooms.</li>
</ul>

<h2>Airflow and zoning</h2>
<ul>
<li>☐ Room airflows calculated from the greater of ACH and load; see <a href="<?= url('guides/hospital-air-change-calculation') ?>">calculating hospital room airflow</a>.</li>
<li>☐ Outdoor air total compared against exhaust plus building pressurization margin.</li>
<li>☐ Surgical suites on dedicated or suite AHUs, separated from general areas where humidity and schedule differ.</li>
<li>☐ Critical spaces (OR, AIIR, PE, ICU, SPD, pharmacy) grouped to simplify redundancy and power.</li>
<li>☐ Unoccupied turndown strategy identified for ORs where permitted.</li>
<li>☐ Pressure-independent terminal units in all pressurized rooms.</li>
</ul>

<h2>Redundancy</h2>
<ul>
<li>☐ Redundancy approach agreed for each AHU: N+1 fan array, dual units, standby unit, or none.</li>
<li>☐ Capacity available after a single failure defined (minimum ventilation and pressure, or full load).</li>
<li>☐ One drive per fan or another approach that avoids a single drive failure disabling the unit.</li>
<li>☐ Coils, humidifiers and heating sources reviewed for single points of failure.</li>
<li>☐ Exhaust fans for isolation rooms and hazardous areas redundant or alarmed.</li>
</ul>
<p>Background is in <a href="<?= url('guides/hospital-ahu-redundancy-requirements') ?>">redundancy requirements for hospital AHUs</a>.</p>

<h2>Filtration</h2>
<ul>
<li>☐ Filter banks per the governing standard: number, MERV and location relative to coils, humidifier and fans.</li>
<li>☐ Final filter bank downstream of supply fan and wetted components.</li>
<li>☐ Terminal HEPA for PE rooms and any owner-required spaces.</li>
<li>☐ Gasketed, sealed filter frames with no bypass.</li>
<li>☐ Pressure transmitters across each bank reporting to the BAS.</li>
<li>☐ Filter changes possible while the unit runs, or redundant unit available.</li>
</ul>

<h2>Humidity and temperature</h2>
<ul>
<li>☐ Cooling coil and chilled water temperature able to meet the lowest dew point needed (especially for low OR setpoints).</li>
<li>☐ Reheat at each critical room for individual temperature control.</li>
<li>☐ Humidification type acceptable to the governing standard and owner, normally clean steam.</li>
<li>☐ Humidifier sized for winter design outdoor dew point at full outdoor air.</li>
<li>☐ Absorption distance confirmed before final filters and downstream components.</li>
<li>☐ Dew point control strategy defined for multi-room units.</li>
</ul>

<h2>Hygiene and construction</h2>
<ul>
<li>☐ Double-wall casing with smooth, cleanable interior surfaces; no exposed insulation in the airstream.</li>
<li>☐ Stainless steel or coated drain pans sloped in two directions, fully drainable, with no standing water.</li>
<li>☐ Drain pans under cooling coils, humidifiers and any other source of water; intermediate pans on stacked coils.</li>
<li>☐ Coil spacing and removable panels allowing coil cleaning on both faces.</li>
<li>☐ Floors watertight and drainable in wet sections.</li>
<li>☐ Lights and viewports in access sections so condition can be checked without opening doors.</li>
<li>☐ Materials that do not shed fibres and tolerate cleaning and disinfection agents.</li>
<li>☐ Outdoor air intake located away from exhaust, cooling towers, loading docks, vehicle areas and helipads.</li>
<li>☐ Intake protected from rain and snow carryover.</li>
</ul>
<p>General hygienic construction details are in <a href="<?= url('guides/hygienic-ahu-construction-checklist') ?>">the hygienic AHU construction checklist</a>.</p>

<h2>Access and serviceability</h2>
<ul>
<li>☐ Access sections between components sized for staff in PPE and for replacement parts.</li>
<li>☐ Fan isolation dampers so individual fans can be replaced while the unit runs.</li>
<li>☐ Motor and drive replacement path identified, including within mechanical rooms.</li>
<li>☐ Clear space in the mechanical room for coil pull and fan removal.</li>
<li>☐ Valves and instruments reachable without ladders where practical.</li>
<li>☐ Service work possible without interrupting airflow to critical rooms.</li>
</ul>

<h2>Outdoor air and exhaust coordination</h2>
<ul>
<li>☐ Outdoor air intake sized for the greater of room outdoor air requirements and exhaust makeup plus building pressurization.</li>
<li>☐ Outdoor airflow measured at the AHU with a station accurate at minimum flow.</li>
<li>☐ Preheat sized for design winter temperature at maximum outdoor air, with freeze protection that does not depend on a single device.</li>
<li>☐ Exhaust systems for AIIR, soiled rooms and decontamination discharged away from all intakes.</li>
<li>☐ Building pressurization reviewed so stack effect in winter does not reverse critical room relationships.</li>
</ul>

<h2>Energy</h2>
<ul>
<li>☐ Energy recovery type compatible with each exhaust stream's contamination risk.</li>
<li>☐ Fan power within energy code limits after hospital-level filtration pressure drop.</li>
<li>☐ Low face velocity coils and filters to reduce pressure drop on units that run 8,760 hours a year.</li>
<li>☐ OR turndown and supply air reset strategies included where permitted.</li>
</ul>

<h2>Electrical and controls</h2>
<ul>
<li>☐ Critical AHUs, exhaust fans and controls on the essential electrical system.</li>
<li>☐ VFDs configured for automatic restart after transfer.</li>
<li>☐ Room pressure monitors in rooms that require them.</li>
<li>☐ Alarms for fan failure, filter loading, humidity, temperature and pressure reported to a monitored location.</li>
<li>☐ Controls and sensors on UPS where loss of control would defeat redundancy.</li>
</ul>

<h2>Testing and verification</h2>
<ul>
<li>☐ Factory run test and casing leakage test planned; witness testing for critical units.</li>
<li>☐ Commissioning scope includes pressure cascade verification and power transfer tests.</li>
<li>☐ HEPA integrity testing planned for terminal filters.</li>
</ul>
<p>Moving from this checklist into specification language is covered separately.</p>
<?php guide_end([
    ['What makes a hospital AHU different from a commercial AHU?', 'Hospital units must meet healthcare ventilation standards, run continuously, provide redundancy for critical spaces, use multiple filter banks and clean steam humidification, and be built for cleaning and service without shutdown.'],
    ['Should hospital AHUs have double-wall casings?', 'Yes, in practice. Double-wall construction with smooth, cleanable interior surfaces keeps insulation out of the airstream and makes cleaning and disinfection possible.'],
    ['How are hospital AHUs serviced without shutdown?', 'With redundant fans and isolation dampers, filters and coils that can be accessed while running, and in some cases a second AHU that can carry the load during maintenance.'],
    ['Where should hospital AHU outdoor air intakes be located?', 'Away from exhaust outlets, cooling towers, loading docks, vehicle areas, helipads and other contaminant sources, with separation distances meeting the governing standard.'],
]);
