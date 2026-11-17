<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('lab-ahu-specification'); ?>
<p class="lede">A laboratory supply AHU specification has to cover what a generic air handler section leaves out: 100% outdoor air operation at both temperature extremes, airflow that follows VAV hood demand without upsetting room offsets, redundancy so labs stay negative through a failure, and corrosion protection where exhaust recovery coils are involved.</p>

<h2>Where this fits in the specification</h2>
<p>Most projects place lab supply units in a custom air handler section under MasterFormat 23 73 00 or a project-specific variant. The general structure of that section is described in <a href="<?= url('guides/writing-ahu-specification-23-73-00') ?>">writing an AHU specification under 23 73 00</a>. This guide covers the lab-specific content to add. Lab exhaust fans are specified separately and are not addressed here.</p>
<p>Before writing, collect the owner's lab design standard, the EHS group's ventilation requirements and the airflow schedule with occupied, unoccupied and maximum values. ANSI/ASSP Z9.5 context is in <a href="<?= url('guides/lab-ventilation-ansi-z9-5') ?>">laboratory ventilation under Z9.5</a>.</p>

<h2>Performance requirements</h2>
<p>State the operating envelope explicitly. Sample language:</p>
<ol>
<li>Unit shall supply 100% outdoor air at airflows from [__ cfm minimum] to [__ cfm maximum] and maintain leaving air temperature within ±[1]°F of setpoint across that range.</li>
<li>Unit shall operate at winter design outdoor temperature of [__°F] and summer design conditions of [__°F dry bulb / __°F wet bulb] and [__°F dew point / __°F mean coincident dry bulb] for dehumidification.</li>
<li>Leaving air dew point shall not exceed [__°F] at any design condition.</li>
<li>Total airflow shall track the sum of laboratory supply terminal demand, with fan speed controlled to hold supply duct static pressure at [__ in. w.g.], adjustable.</li>
<li>Unit shall maintain design airflow with filters at their final (change-out) pressure drop.</li>
</ol>
<p class="note">Give the minimum airflow as carefully as the maximum. Lab systems spend many hours near minimum flow at night, and coils, fans and humidifiers must control stably there.</p>

<h2>Redundancy</h2>
<p>Labs must remain negative and ventilated during equipment failures. The specification should state what continues during the loss of a component. Sample language:</p>
<ol>
<li>Fan section shall consist of a fan array of [__] direct-driven fans, each with an individual motor and [variable speed drive] [EC controller]. With any one fan out of service, the remaining fans shall deliver [100%] of design airflow at design static pressure.</li>
<li>Each fan shall have a [backdraft damper] [automatic blank-off] to prevent recirculation through an inactive fan.</li>
<li>[Where two or more units serve a common supply header:] Each unit shall be capable of delivering [__%] of the total design airflow. Provide isolation dampers at each unit discharge, rated for [low leakage].</li>
</ol>
<p>N+1 and N+2 options are compared in <a href="<?= url('guides/fan-array-redundancy-n1-vs-n2') ?>">fan array redundancy: N+1 vs N+2</a>.</p>

<h2>Preheat, freeze protection and coils</h2>
<p>A 100% outdoor air unit in a Canadian or northern U.S. climate sees air well below freezing for long periods. The preheat arrangement is the most important freeze protection decision. Sample language:</p>
<ol>
<li>Preheat shall be by [integral face and bypass steam coil] [glycol hot water coil] [runaround recovery coil followed by glycol hot water coil], selected to raise outdoor air from [__°F] to [__°F] at maximum airflow.</li>
<li>Preheat coil controls shall maintain a minimum leaving air temperature of [__°F] at all airflows, independent of downstream cooling coil operation.</li>
<li>Cooling coils shall be selected at a face velocity not exceeding [500] fpm and shall include moisture eliminators if required by the selection.</li>
<li>Cooling coil drain pans shall be stainless steel, sloped in two planes, with drain connections at the low point.</li>
<li>All coils shall be removable through [side access] [pull-out rails] without dismantling adjacent sections.</li>
</ol>
<p>The methods available are compared in <a href="<?= url('guides/coil-freeze-protection-methods') ?>">coil freeze protection methods</a>.</p>

<h2>Coatings and corrosion protection</h2>
<p>Supply units normally handle clean outdoor air, but lab sites often have exhaust plumes nearby, and runaround recovery coils in the exhaust stream are exposed directly to lab chemicals. Sample language:</p>
<ol>
<li>Energy recovery coils in the exhaust airstream shall be [copper tube with copper fins] [stainless steel] with a factory-applied [phenolic] [polyurethane] [other] coating rated for the exhaust constituents identified by the owner.</li>
<li>Supply unit intake sections and wetted components shall be [stainless steel] [coated galvanized steel].</li>
<li>Coating shall be applied to the full coil including fin edges, tube sheets and headers, and the coating supplier's salt spray or chemical resistance data shall be submitted.</li>
</ol>

<h2>Controls and monitoring</h2>
<ol>
<li>Provide airflow measurement of total supply by [fan inlet piezometer rings] [airflow measuring station] with accuracy of ±[5]% of reading across the operating range.</li>
<li>Provide differential pressure transmitters across each filter bank, freeze protection devices downstream of preheat, and temperature and humidity sensors at the leaving air.</li>
<li>Controls shall be [factory mounted and wired] [field installed] and shall communicate with the building automation system via [BACnet/IP].</li>
<li>On loss of a fan, controls shall automatically increase the speed of remaining fans to maintain airflow and shall generate an alarm.</li>
<li>Sequence on power loss and restart shall coordinate with the exhaust system so labs do not go positive.</li>
</ol>

<h2>Construction and testing</h2>
<ol>
<li>Casing shall be double-wall with [2 in.] [4 in.] insulated panels, thermally broken, with casing leakage not exceeding [__% of design airflow] at [__ in. w.g.].</li>
<li>Manufacturer shall run-test each unit in the factory, verifying fan operation, rotation, vibration and control functions, and shall submit test reports.</li>
<li>Casing leakage shall be tested at the factory at the specified pressure, with results submitted.</li>
<li>[Optional] Owner's representatives shall be permitted to witness factory testing with [__] days' notice.</li>
</ol>
<table>
<thead><tr><th>Item often missed</th><th>Why it matters in labs</th></tr></thead>
<tbody>
<tr><td>Minimum airflow condition</td><td>Long night hours at low flow; control stability</td></tr>
<tr><td>Dew point design condition</td><td>100% outdoor air latent load governs coil</td></tr>
<tr><td>Restart coordination with exhaust</td><td>Prevents positive labs after power loss</td></tr>
<tr><td>Coating on recovery coils</td><td>Exhaust chemicals attack bare fins</td></tr>
</tbody>
</table>
<p>Custom Air Equipment builds 100% outdoor air lab units with fan arrays and run-tests each one in the factory; if you are drafting a specification, an <a href="<?= url('contact') ?>">application engineer</a> can review it for constructibility.</p>
<?php guide_end([
    ['What redundancy should a lab supply AHU have?', 'At minimum, the unit should keep delivering the required airflow with one fan out of service, usually through an N+1 fan array. Larger buildings often use multiple units on a common header so a whole unit can be serviced.'],
    ['Why is preheat so important on a lab AHU?', 'Lab supply units handle 100% outdoor air, so in cold climates they see sub-freezing air for long periods. The preheat coil must protect downstream coils at every airflow, including nighttime minimum flows.'],
    ['Do lab supply coils need coatings?', 'Supply coils in clean outdoor air often do not, but energy recovery coils in the lab exhaust stream usually do. Choose a coating rated for the chemicals identified by the owner.'],
]);
