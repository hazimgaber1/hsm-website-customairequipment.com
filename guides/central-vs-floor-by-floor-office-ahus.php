<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('central-vs-floor-by-floor-office-ahus'); ?>
<p class="lede">Central air handlers serve many floors from one or two large mechanical rooms through vertical shafts; floor-by-floor units put a smaller air handler on every floor, fed by outdoor air and chilled and hot water risers. Central plants usually win on energy recovery, maintenance concentration and rentable area on typical floors, while floor-by-floor systems win on tenant flexibility, after-hours operation and reduced shaft size.</p>

<h2>The two architectures</h2>
<p><strong>Central air handlers</strong> sit in mechanical floors, typically in a penthouse, a mid-height plant floor in tall towers, or a basement. Supply and return air travel vertically through large shafts, with branch ducts on each floor. A tower may have several central units, each serving a band of floors.</p>
<p><strong>Floor-by-floor air handlers</strong> occupy a mechanical room on each floor, often next to the core. Each unit draws outdoor air from a central dedicated outdoor air riser or from a louver on the façade, and receives chilled and hot water from building risers. Supply ducts stay on the floor.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Central AHUs</th><th>Floor-by-floor AHUs</th></tr></thead>
<tbody>
<tr><td>Shaft space on typical floors</td><td>Large supply and return shafts</td><td>Small outdoor air and exhaust risers plus piping</td></tr>
<tr><td>Mechanical room on typical floors</td><td>None or minimal</td><td>One per floor, often 300 to 600 ft² (28 to 56 m²)</td></tr>
<tr><td>Dedicated plant floors</td><td>Required</td><td>Smaller, mainly for DOAS and central plant</td></tr>
<tr><td>Tenant after-hours operation</td><td>Whole unit runs for one floor, or zone dampers isolate floors</td><td>Only that floor's unit runs</td></tr>
<tr><td>Tenant-specific requirements</td><td>Harder to accommodate</td><td>Easier; a unit can be modified for one tenant</td></tr>
<tr><td>Energy recovery</td><td>Easy to integrate centrally</td><td>Usually done at a central DOAS</td></tr>
<tr><td>Fan energy</td><td>Larger, more efficient fans; longer duct paths</td><td>Smaller fans; shorter paths and lower static</td></tr>
<tr><td>Maintenance</td><td>Concentrated in a few rooms</td><td>Distributed over every floor; access through tenant areas</td></tr>
<tr><td>Failure impact</td><td>One failure affects many floors</td><td>One failure affects one floor</td></tr>
<tr><td>Phased construction and fit-out</td><td>Plant must be complete first</td><td>Floors can be fitted out as leased</td></tr>
<tr><td>Noise</td><td>Mechanical floors isolated from tenants</td><td>AHU room next to tenant space; acoustic treatment needed</td></tr>
</tbody>
</table>

<h2>Space and rentable area</h2>
<p>Developers often decide this question on area. Central systems take space in large vertical shafts on every floor and on plant floors that cannot be leased. Floor-by-floor systems trade those shafts for a mechanical room on every floor. Which consumes less rentable area depends on tower height, floor plate size and the number of floors served per central unit. On tall towers with compact floor plates, central shafts can grow very large; on wider floor plates, a floor mechanical room is a smaller fraction of the floor.</p>
<p>A rough check is to calculate the total shaft area per floor for a central system using duct velocities typical of risers, around 2,000 fpm (10 m/s) or less, and compare it with the floor-by-floor mechanical room area plus smaller risers.</p>

<h2>Tenant flexibility and after-hours use</h2>
<p>Office tenants increasingly expect to run HVAC outside standard hours, particularly for trading floors, technology firms and law offices. With a central unit, running one floor overnight means running a large fan at very low load or isolating other floors with motorized dampers. Floor-by-floor units can run independently, simplify after-hours billing and allow a tenant to request higher filtration, extra cooling or a separate exhaust without affecting other tenants.</p>
<p>On the other hand, when an entire building operates on the same schedule, the flexibility of floor-by-floor units has less value.</p>

<h2>Energy</h2>
<p>Energy comparisons are closer than often assumed:</p>
<ul>
<li><strong>Fans.</strong> Central units have larger, often more efficient fans, but longer duct runs with more pressure drop. Floor-by-floor units have shorter runs and lower static. Fan arrays narrow the efficiency gap at smaller sizes.</li>
<li><strong>Outdoor air treatment.</strong> Most floor-by-floor designs use a central dedicated outdoor air system with energy recovery serving all floors, which concentrates recovery where it is easiest.</li>
<li><strong>Economizer.</strong> Central units can economize with large outdoor air intakes. Floor-by-floor units are limited by riser size or façade louvers, which may restrict full economizer capability; check energy code requirements and whether exceptions apply.</li>
<li><strong>Part load.</strong> Floor-by-floor units can shut down unoccupied floors entirely.</li>
</ul>
<p>The energy code implications of each approach, including fan power limits, are discussed in <a href="<?= url('guides/ashrae-90-1-fan-power-limitation') ?>">ASHRAE 90.1 fan power limitation</a>.</p>

<h2>Maintenance and reliability</h2>
<p>Maintenance staff generally prefer central systems: fewer units, concentrated in plant rooms, with space for proper access. Floor-by-floor units mean a filter change on 30 floors and repairs scheduled around tenants, sometimes requiring access through leased space. However, a failure of one floor unit affects one tenant, while a failed central unit can take down a third of the building unless redundancy is built in. Fan arrays in central units reduce that risk.</p>

<h2>Choosing</h2>
<p>Choose central air handlers when the building has a single dominant tenant or uniform schedules, when energy recovery and full economizer are priorities, and when plant floors are available. Choose floor-by-floor units for multi-tenant speculative towers, buildings with phased fit-out, or where tenants will demand independent operation. Hybrid designs are common: a central DOAS on the roof feeding floor-by-floor recirculating units. The detailed design of VAV systems served by either arrangement is in <a href="<?= url('guides/office-vav-ahu-design') ?>">office building VAV air handler design</a>, and room layout for both is in <a href="<?= url('guides/ahu-mechanical-room-planning') ?>">AHU mechanical room planning</a>.</p>
<?php guide_end([
    ['Are floor-by-floor air handlers more energy efficient than central units?', 'Not inherently. They have shorter duct runs and can shut off unused floors, but central units have larger, efficient fans and easier economizer and energy recovery. Results depend on building use and design.'],
    ['Why do multi-tenant towers often use floor-by-floor AHUs?', 'Each floor can run on its own schedule, be modified for a specific tenant and be billed separately for after-hours use. It also allows floors to be fitted out as they are leased.'],
    ['How is outdoor air supplied to floor-by-floor units?', 'Usually from a central dedicated outdoor air system with energy recovery, distributed through a riser to each floor. Some designs use façade louvers on each floor instead.'],
]);
