<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('data-center-cooling-design-checklist'); ?>
<p class="lede">Use this checklist during schematic and design development reviews of a data center cooling system. It groups the decisions that shape equipment and space early: design criteria, loads, redundancy, containment and air distribution, economizer strategy, controls, and the interfaces with electrical and architectural design.</p>

<h2>Design criteria</h2>
<ul>
<li>☐ Server inlet envelope agreed: recommended or a named allowable class, with any allowed excursion hours</li>
<li>☐ Humidity limits stated as dew point and RH, including any lower RH limit for polluted sites</li>
<li>☐ Outdoor design conditions for cooling, dehumidification and heating, with extreme values for resilience</li>
<li>☐ Site altitude and density correction applied to airflow and fan selection</li>
<li>☐ Gaseous contamination assessed at the site (coupon testing)</li>
<li>☐ Owner's targets for annual PUE, WUE, or both, and how they are to be calculated</li>
<li>☐ Noise limits at the property line and in occupied areas</li>
</ul>
<p>Envelope definitions are in <a href="<?= url('guides/ashrae-tc-9-9-thermal-guidelines') ?>">ASHRAE TC 9.9 thermal guidelines</a>.</p>

<h2>Loads</h2>
<ul>
<li>☐ IT load per hall, per phase, at day-one, interim and full build-out</li>
<li>☐ Rack density distribution: average, maximum and any high-density zones</li>
<li>☐ Split between air-cooled and liquid-cooled load, with capture ratios</li>
<li>☐ Server delta-T assumption, documented and conservative</li>
<li>☐ Non-IT loads in the white space: CDUs, PDUs, lighting, people, envelope</li>
<li>☐ Cooling unit fan heat included in coil load</li>
<li>☐ Support spaces: electrical rooms, UPS, battery rooms, network rooms, offices</li>
<li>☐ Airflow per kW and bypass allowance calculated</li>
</ul>
<p>The airflow calculation is in <a href="<?= url('guides/airflow-per-kw-it-load') ?>">calculating data center airflow per kW</a>.</p>

<h2>Redundancy and resilience</h2>
<ul>
<li>☐ Target redundancy defined: Tier level, TIA rating or owner standard</li>
<li>☐ Component redundancy (N+1, N+2, 2N) for units, chillers, pumps, heat rejection</li>
<li>☐ Distribution path redundancy for piping, ductwork, power and controls where concurrent maintainability is required</li>
<li>☐ Single points of failure listed and resolved or accepted in writing</li>
<li>☐ Behavior on utility power loss: which equipment is on UPS, which waits for generators</li>
<li>☐ Thermal ride-through calculated and acceptable within the allowable envelope</li>
<li>☐ Water supply resilience for evaporative systems: storage, dual feeds or dry fallback</li>
<li>☐ Physical separation of redundant systems where fault tolerance is required</li>
</ul>
<p>Redundancy definitions are explained in <a href="<?= url('guides/uptime-tier-cooling-redundancy') ?>">Uptime Tier levels and cooling redundancy</a>.</p>

<h2>Containment and air distribution</h2>
<ul>
<li>☐ Containment type chosen (hot aisle, cold aisle, chimney) with reasons</li>
<li>☐ Air delivery method: flooded room, raised floor, overhead</li>
<li>☐ Cooling unit type: fan wall, CRAH, central AHU, IEC, with service access outside the hall where possible</li>
<li>☐ Airflow delivery checked for each high-density zone, not only the hall average</li>
<li>☐ Airflow checked with each cooling unit out of service, nearest the hottest zone</li>
<li>☐ Return path sized: ceiling plenum height, chimney sizes</li>
<li>☐ Containment fire protection coordinated with sprinklers, detection and the authority having jurisdiction</li>
<li>☐ Blanking panels, rack seals and cable penetration seals specified</li>
</ul>

<h2>Economizer strategy</h2>
<ul>
<li>☐ Economizer type: direct airside, indirect evaporative, waterside, pumped refrigerant, none</li>
<li>☐ Annual hours by mode estimated from weather data</li>
<li>☐ Filtration for any outdoor air reaching the white space</li>
<li>☐ Smoke and pollution response: automatic recirculation</li>
<li>☐ Cold weather: mixing, freeze protection, snow and ice at intakes</li>
<li>☐ Humidity strategy for very dry and very humid outdoor conditions</li>
<li>☐ Energy code economizer requirements checked for the jurisdiction</li>
<li>☐ Water use estimated for evaporative modes</li>
</ul>
<p>Hour estimates are covered in <a href="<?= url('guides/economizer-hours-by-climate') ?>">estimating economizer hours by climate</a>.</p>

<h2>Controls</h2>
<ul>
<li>☐ Control strategy for fan speed: containment pressure, inlet temperature or both</li>
<li>☐ Supply air temperature control and reset strategy</li>
<li>☐ Economizer mode transitions with ramp limits</li>
<li>☐ Unit-level controllers that keep running on loss of supervisory communication</li>
<li>☐ Load sharing across multiple units serving one space</li>
<li>☐ Sensor redundancy and fault handling for critical inputs</li>
<li>☐ Rack inlet temperature monitoring for verification and alarms</li>
<li>☐ Integration with the data center infrastructure management (DCIM) platform</li>
<li>☐ Cybersecurity requirements for networked controls</li>
</ul>

<p>Record the answer to each control item in the sequence of operation, not only in meeting notes. Reviewers and commissioning agents work from the written sequence, and decisions that never reach it tend to be lost by construction.</p>
<h2>Interfaces</h2>
<ul>
<li>☐ Electrical: power to mechanical equipment, UPS-backed loads, generator capacity for cooling, SCCR coordination</li>
<li>☐ Structural: roof or platform loads for units, seismic and wind design</li>
<li>☐ Architectural: gallery dimensions for fan walls, service clearances, rigging paths, intake and relief locations</li>
<li>☐ Plumbing: water supply, drains, condensate, water treatment</li>
<li>☐ Phasing: equipment placement and capacity for each build-out phase without disrupting live halls</li>
</ul>

<h2>Operations and maintainability</h2>
<ul>
<li>☐ Every cooling unit serviceable without entering the secure white space, where the owner prefers it</li>
<li>☐ Clearances for coil pulls, fan removal and filter changes shown on drawings</li>
<li>☐ Spare parts strategy for fans, drives, sensors and filters</li>
<li>☐ Water treatment responsibility defined for evaporative and tower systems</li>
<li>☐ Monitoring points sufficient for operators to diagnose problems remotely</li>
</ul>
<h2>Common review findings</h2>
<table>
<thead><tr><th>Finding</th><th>Risk</th></tr></thead>
<tbody>
<tr><td>Airflow sized on hall average only</td><td>Hot spots in high-density zones</td></tr>
<tr><td>Redundancy at component level only</td><td>Shared header or controller defeats Tier target</td></tr>
<tr><td>No cold weather mixing design</td><td>Freeze trips and cold server inlets</td></tr>
<tr><td>Economizer hours from dry bulb only</td><td>Overstated savings in humid climates</td></tr>
<tr><td>Ride-through not calculated</td><td>Temperature excursion during generator transfer</td></tr>
</tbody>
</table>
<p>To explore section arrangements and footprints for the air handling equipment while these decisions are being made, try the <a href="<?= url('design') ?>">3D configurator</a>.</p>
<?php guide_end([
    ['What should be included in a data center cooling design review?', 'Design criteria and envelope, loads by phase and density, redundancy at component and distribution level, containment and air distribution, economizer strategy, controls, and interfaces with electrical, structural and architectural design.'],
    ['Why check airflow with a cooling unit out of service?', 'Total capacity can be adequate while the area nearest a stopped unit is starved of air. Checking distribution with each unit off, especially near the hottest zones, confirms redundancy works in practice.'],
    ['Should economizer hours be based on dry bulb temperature alone?', 'Not for airside systems in humid climates. Hours when outdoor dew point exceeds the envelope limit must be excluded, or savings will be overstated.'],
]);
