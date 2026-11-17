<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('data-center-commissioning-levels'); ?>
<p class="lede">Data center commissioning is commonly organized in five levels: L1 factory testing, L2 site delivery and inspection, L3 installation verification and start-up, L4 functional testing of each system, and L5 integrated systems testing under simulated load and failure. This checklist lists what each level should verify for cooling equipment.</p>

<h2>How the levels are used</h2>
<p>The five-level structure is an industry convention rather than a single published standard, and definitions vary slightly between owners and commissioning firms. Some combine L2 and L3, and some call L1 "factory witness testing." The intent is consistent: each level proves something the next level depends on, so problems are caught where they are cheapest to fix. Agree the level definitions, responsibilities and documentation in the commissioning plan at the start of the project. The general commissioning process is in <a href="<?= url('guides/commissioning-process-ashrae-202') ?>">the commissioning process under ASHRAE Guideline 202</a>; this guide focuses on what each level checks for cooling equipment.</p>

<h2>L1: Factory acceptance testing</h2>
<p>Verifies that major equipment meets its specification before it ships.</p>
<ul>
<li>☐ Test procedure approved before testing, with instruments, tolerances and acceptance criteria</li>
<li>☐ Component verification against approved submittals: fans, motors, coils, dampers, controllers</li>
<li>☐ Fan airflow and input power at scheduled duty points</li>
<li>☐ Fan vibration on each fan; balance records</li>
<li>☐ Fan array redundancy: airflow with one fan disabled</li>
<li>☐ Casing leakage at the specified test pressure</li>
<li>☐ Electrical: insulation tests, phasing, panel wiring inspection, SCCR labelling</li>
<li>☐ Control sequences demonstrated with simulated inputs: modes, alarms, failure responses</li>
<li>☐ Coil pressure tests and, where specified, capacity tests</li>
<li>☐ Test reports signed, with deviations recorded</li>
</ul>
<p>Planning factory witness events is covered in <a href="<?= url('guides/factory-witness-testing') ?>">factory witness testing</a>.</p>

<h2>L2: Site delivery and inspection</h2>
<p>Verifies that equipment arrived complete and undamaged and matches what was tested.</p>
<ul>
<li>☐ Serial numbers match L1 reports</li>
<li>☐ Shipping damage inspection: casing, coils, fins, fan wheels, panels</li>
<li>☐ Shipping restraints and covers intact; tilt or shock indicators checked</li>
<li>☐ Loose-shipped items accounted for</li>
<li>☐ Storage conditions acceptable until installation</li>
<li>☐ Documentation received: manuals, test reports, drawings</li>
</ul>

<h2>L3: Installation verification and start-up</h2>
<p>Verifies correct installation and initial operation of each piece of equipment.</p>
<ul>
<li>☐ Units set level and anchored; isolation adjusted</li>
<li>☐ Shipping sections joined and sealed; field joints leak checked</li>
<li>☐ Piping connected, flushed, pressure tested; strainers cleaned</li>
<li>☐ Condensate drains trapped and tested</li>
<li>☐ Electrical connections torqued; rotation checked on every fan and pump</li>
<li>☐ Sensors installed in correct locations and calibrated; transmitter zero checked</li>
<li>☐ Controls point-to-point checkout complete</li>
<li>☐ Manufacturer start-up performed and documented</li>
<li>☐ Filters installed; construction filters removed</li>
</ul>

<h2>L4: Functional performance testing</h2>
<p>Verifies that each system operates as intended through its full range, on its own.</p>
<ul>
<li>☐ Each operating mode demonstrated: mechanical, partial and full economizer, humidity modes</li>
<li>☐ Mode transitions smooth, with rate-of-change limits respected</li>
<li>☐ Supply air temperature and pressure control stable across load range</li>
<li>☐ Containment differential pressure control tuned and stable</li>
<li>☐ Alarms tested at each limit and reported to the monitoring system</li>
<li>☐ Single-component failures: fan, pump, valve, sensor, controller, with automatic response verified</li>
<li>☐ Redundant unit changeover and load sharing</li>
<li>☐ Loss of communication with supervisory system: units hold last state</li>
<li>☐ Chilled water plant staging, economizer changeover and minimum flow</li>
<li>☐ Testing, adjusting and balancing results reviewed</li>
</ul>
<p>Functional test structure in general is covered in <a href="<?= url('guides/functional-performance-testing') ?>">functional performance testing</a>.</p>

<h2>L5: Integrated systems testing</h2>
<p>Verifies that cooling, electrical and controls systems work together as a whole, under representative IT load, through failure and recovery scenarios.</p>
<ul>
<li>☐ Load banks installed to simulate IT heat at the design distribution (rack-level or row-level load banks preferred over room heaters)</li>
<li>☐ Temperature sensors at rack inlets across the hall to map conditions</li>
<li>☐ Steady-state test at design load: inlet temperatures, return temperatures, delta-T</li>
<li>☐ Partial load steps, including the expected initial phase load</li>
<li>☐ Utility power failure with generator start and transfer: record inlet temperature rise and recovery</li>
<li>☐ Restart sequence after power restoration</li>
<li>☐ Loss of each redundant cooling unit under full load</li>
<li>☐ Loss of a chilled water path or pump under full load (concurrent maintainability)</li>
<li>☐ Simulated fault scenarios defined by the owner's redundancy target</li>
<li>☐ Thermal ride-through measured against the allowable envelope</li>
<li>☐ Final report with trend data, deviations and resolutions</li>
</ul>
<p class="note">Rack-level load banks reproduce real airflow paths through the containment far better than freestanding heaters. Use them where the budget allows, and match their airflow and delta-T to the expected servers.</p>
<p>The power-loss scenarios in L5 test the strategies described in <a href="<?= url('guides/thermal-ride-through-power-loss') ?>">thermal ride-through after utility power loss</a>.</p>

<h2>Common gaps between levels</h2>
<p>Problems arise most often at the hand-offs. Equipment that passed L1 is modified on site without retesting; sensors are relocated after L3 checkout; L4 tests are run with controls in manual. Require that any change after a level is complete is recorded and, where it affects tested functions, retested. Keep one issues log across all five levels so a deviation found at L1 is still visible when L5 begins.</p>
<h2>Summary of levels</h2>
<table>
<thead><tr><th>Level</th><th>Where</th><th>Proves</th></tr></thead>
<tbody>
<tr><td>L1</td><td>Factory</td><td>Equipment meets specification</td></tr>
<tr><td>L2</td><td>Site, on delivery</td><td>Equipment arrived intact and matches L1</td></tr>
<tr><td>L3</td><td>Site, installed</td><td>Installed and started correctly</td></tr>
<tr><td>L4</td><td>Site, per system</td><td>Each system works through its range and failures</td></tr>
<tr><td>L5</td><td>Site, whole facility</td><td>Systems work together under load and through power events</td></tr>
</tbody>
</table>
<?php guide_end([
    ['What are the five levels of data center commissioning?', 'Commonly: L1 factory acceptance testing, L2 site delivery inspection, L3 installation verification and start-up, L4 functional testing of individual systems, and L5 integrated systems testing under load and failure scenarios.'],
    ['What is L5 integrated systems testing?', 'It tests the cooling, electrical and control systems together under simulated IT load from load banks, including utility power failure, generator transfer and loss of redundant equipment, to prove the facility performs as designed.'],
    ['Are commissioning levels defined by a standard?', 'The five-level structure is an industry convention rather than a single standard, and definitions vary. Agree the scope of each level in the project commissioning plan.'],
]);
