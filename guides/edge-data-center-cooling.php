<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('edge-data-center-cooling'); ?>
<p class="lede">For an edge site or small server room, start with the real load and the constraints of the location: limited space, no on-site staff, often no water, and sometimes an outdoor enclosure. Then pick simple, self-contained cooling with built-in redundancy, remote monitoring and a maintenance plan that a visiting technician can carry out in one trip.</p>

<h2>Step 1: Define the load and its growth</h2>
<ol>
<li>List IT equipment with measured or vendor-typical power, not power supply nameplate ratings. Small sites often have nameplate totals two or three times the real draw.</li>
<li>Add non-IT heat inside the room or enclosure: UPS losses, power distribution, lighting, and the cooling units' own fan heat if they are inside.</li>
<li>Add envelope gains. For an outdoor shelter or container, solar gain on the roof and walls can be a large share of the load, especially at low IT loads.</li>
<li>Estimate growth over the equipment life. Edge sites often start lightly loaded and fill up; choose equipment that handles both ends, or plan modular additions.</li>
</ol>
<p>Example: a micro data center with four racks at an expected 6 kW each (24 kW), a UPS with 1.5 kW of losses, 0.5 kW of lighting and controls, and 3 kW of solar and envelope gain on a hot afternoon. Total is 29 kW, about 8.3 tons. Airflow through the IT equipment is roughly 3,160 × 24 ÷ 22 ≈ 3,450 cfm at a 22°F server rise; the method is in <a href="<?= url('guides/airflow-per-kw-it-load') ?>">calculating airflow per kW of IT load</a>.</p>

<h2>Step 2: Record the site constraints</h2>
<ul>
<li><strong>Space:</strong> indoor room, closet, outdoor enclosure, container, rooftop or pad</li>
<li><strong>Utilities:</strong> water availability, drain availability for condensate, electrical capacity for cooling</li>
<li><strong>Service access:</strong> distance to the nearest technician, response time, access restrictions</li>
<li><strong>Environment:</strong> outdoor temperature extremes, dust, salt air, corrosive gases, snow</li>
<li><strong>Noise:</strong> neighbors, offices, residential property lines</li>
<li><strong>Security:</strong> whether outdoor equipment must be tamper-resistant</li>
</ul>

<h2>Step 3: Set the environmental target</h2>
<p>Most edge equipment is commodity IT hardware rated for one of the ASHRAE allowable classes. Many edge designs deliberately allow a wider range than enterprise halls to reduce cooling energy and equipment size, for example designing to the recommended envelope in normal operation and accepting the allowable range during failures. Confirm with the equipment owner, because some telecom and network equipment has its own environmental standard.</p>

<h2>Step 4: Choose the cooling type</h2>
<table>
<thead><tr><th>Option</th><th>Suits</th><th>Watch for</th></tr></thead>
<tbody>
<tr><td>Split DX (indoor fan coil, outdoor condenser)</td><td>Indoor rooms with an outdoor location for condensers</td><td>Refrigerant line lengths; condensate disposal</td></tr>
<tr><td>Packaged wall-mount or rooftop DX</td><td>Shelters and containers</td><td>Weatherproofing; filter access from outside</td></tr>
<tr><td>DX with integrated economizer (air or pumped refrigerant)</td><td>Cool and moderate climates</td><td>Filtration and humidity limits for air economizers</td></tr>
<tr><td>In-rack or close-coupled closed-loop cooling</td><td>Rooms that cannot be cooled as a whole; office environments</td><td>Redundancy per rack; noise</td></tr>
<tr><td>Chilled water fan coils from building plant</td><td>Sites inside buildings with 24/7 chilled water</td><td>Building plant may not run nights or weekends</td></tr>
<tr><td>Liquid-cooled racks</td><td>Very high density edge compute</td><td>Heat rejection path; service skills</td></tr>
</tbody>
</table>
<p>Water-free, refrigerant-based systems dominate at the edge because they are self-contained and need no water treatment. The broader comparison is in <a href="<?= url('guides/chilled-water-vs-dx-vs-pumped-refrigerant') ?>">chilled water vs DX vs pumped refrigerant</a>.</p>
<p class="warn">Do not rely on a building's comfort cooling system for an edge room. Office systems commonly shut off at night and on weekends, and their setpoints and maintenance are not managed for IT equipment.</p>

<h2>Step 5: Provide redundancy proportionate to the site</h2>
<p>An unattended site with no staff nearby needs redundancy more than a staffed room, because a failure may go uncorrected for hours. Common arrangements:</p>
<ul>
<li>Two units each sized for 100% of the load, with automatic lead-lag rotation and failover</li>
<li>Three units each at 50%, giving N+1 with smaller equipment</li>
<li>One unit plus an emergency ventilation fan that brings in filtered outdoor air if mechanical cooling fails and outdoor conditions allow</li>
</ul>
<p>For the 8.3-ton example, two 10-ton units in lead-lag would carry the load with either unit and leave margin for growth and extreme days.</p>

<h2>Step 6: Use outdoor air carefully</h2>
<p>A filtered outdoor air economizer can cut energy significantly at edge sites in cool climates. At small sites, filters may go unchanged for long periods, and dust, pollen or smoke can load them quickly. If outdoor air is used, specify generous filter area, differential pressure monitoring with remote alarm, and automatic return to recirculation when filters load or outdoor air quality is poor. The design considerations are in <a href="<?= url('guides/airside-economizer-data-centers') ?>">airside economizers for data centers</a>.</p>

<h2>Step 7: Monitor remotely</h2>
<ul>
<li>Rack inlet temperature sensors at top and middle of each rack</li>
<li>Room or enclosure humidity</li>
<li>Cooling unit status, alarms and run hours</li>
<li>Filter differential pressure</li>
<li>Water leak detection if any condensate or liquid is present</li>
<li>Door status and power status</li>
</ul>
<p>Connect alarms to the owner's network operations center, with escalation rules, and verify the communication path works when utility power is lost.</p>

<h2>Step 8: Plan maintenance for one-visit service</h2>
<ol>
<li>Choose equipment whose filters, belts (if any) and common parts can be serviced from outside the enclosure or without shutting down the redundant unit.</li>
<li>Keep a spare filter set and critical spares on site.</li>
<li>Schedule visits on a fixed interval, adjusted by remote filter and run-hour data.</li>
<li>Document the site: drawings, unit models, refrigerant type, settings and contact information inside the enclosure door.</li>
</ol>
<p>For outdoor enclosures, weatherproofing and casing details are discussed in <a href="<?= url('guides/outdoor-unit-weatherproofing') ?>">outdoor unit weatherproofing</a>.</p>
<?php guide_end([
    ['What is the best cooling for a small server room?', 'Usually a dedicated, self-contained DX system, such as a split or packaged unit, with two units for redundancy and remote monitoring. Avoid relying on building comfort cooling that shuts off at night or on weekends.'],
    ['How much redundancy does an edge data center need?', 'Unattended sites benefit from at least N+1, commonly two units each sized for the full load with automatic failover, because a failure may go uncorrected for hours before a technician arrives.'],
    ['Can an edge site use outdoor air for cooling?', 'Yes, in suitable climates, with generous filtration, remote filter monitoring and automatic return to recirculation when filters load or outdoor air quality is poor.'],
]);
