<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('recovery-section-design-checklist'); ?>
<p class="lede">Use this checklist when laying out or reviewing the energy recovery section of an air handling unit. It covers airflow balance, leakage control, frost, bypass, drainage, access and controls, which are the items most often missed in schematic design and discovered at startup.</p>

<h2>Airflow and balance</h2>
<ul>
<li>Design supply and exhaust airflows through the device are both stated, at maximum and at minimum outdoor air.</li>
<li>Exhaust actually available at the unit is confirmed. Toilet, kitchen and process exhaust that leaves through separate fans does not reach the device.</li>
<li>The supply to exhaust ratio is known for every operating mode, since imbalance changes effectiveness and frost threshold.</li>
<li>Face velocity through the device is within the manufacturer's recommended range at maximum flow, and is checked again at minimum flow for control stability.</li>
<li>Effectiveness at actual flows is taken from certified selection software, not from the catalog headline.</li>
<li>Outdoor air delivered to the space is corrected for leakage, so ventilation compliance holds after the device.</li>
</ul>

<h2>Leakage and air quality</h2>
<ul>
<li>Exhaust air class is identified for every source feeding the device, and the device type is acceptable for the highest class.</li>
<li>Fan locations put the outdoor air side at higher static pressure than the exhaust side at the critical seal location, in every mode. The method is in <a href="<?= url('guides/fan-placement-recovery-leakage') ?>">how to place fans to minimize recovery device leakage</a>.</li>
<li>Pressure differential is checked with clean and dirty filters.</li>
<li>Wheels have a purge sector where carryover matters, and its angle can be adjusted in the field.</li>
<li>Certified EATR and OACF are read at the expected pressure difference and used to size intake and exhaust fans.</li>
<li>A differential pressure transmitter across the device is shown on the points list, with an alarm on loss of differential.</li>
</ul>

<h2>Frost protection</h2>
<ul>
<li>The frost threshold has been calculated for the winter indoor humidity setpoint and actual flow ratio.</li>
<li>Hours below the threshold have been estimated for the site's climate.</li>
<li>A frost control method is chosen and its hardware is shown: preheat coil, wheel VFD, face and bypass dampers, or defrost damper arrangement. Selection guidance is in <a href="<?= url('guides/frost-control-wheels-and-plates') ?>">frost control strategies</a>.</li>
<li>Preheat coils, if used, are freeze-protected and sized from outdoor design temperature to the required leaving temperature.</li>
<li>An exhaust-side pressure drop alarm is provided to detect frost build-up.</li>
<li>Ventilation remains adequate during any defrost cycle, or the cycle is acceptable for the space type.</li>
</ul>

<h2>Bypass and capacity control</h2>
<ul>
<li>A method of reducing recovery during economizer operation is provided: wheel speed control, bypass dampers, or both.</li>
<li>Bypass dampers, where used, are low leakage and sized for the economizer airflow at reasonable velocity.</li>
<li>The sequence stages recovery before the heating coil and keeps recovery off whenever the economizer is above minimum.</li>
<li>Wheels have a jog cycle for periods when they are stopped.</li>
<li>Energy code requirements for bypass or speed control in economizer mode are checked against the adopted edition.</li>
</ul>

<h2>Drainage and moisture</h2>
<ul>
<li>A drain pan is provided under each side of a plate or heat pipe that can condense, and under the exhaust side of wheels in cold climates.</li>
<li>Pans extend downstream of the device far enough to catch water carried by airflow.</li>
<li>Each pan has its own trap with depth suited to the section's static pressure.</li>
<li>Drain lines outside heated space are insulated and heat-traced.</li>
<li>A floor water sensor is provided near the device on units where overflow would cause damage.</li>
</ul>

<h2>Filtration and fouling</h2>
<ul>
<li>A filter upstream of the device protects it on both the outdoor air and the exhaust side.</li>
<li>Exhaust contents that foul media, such as lint, grease mist or process dust, have been identified and addressed.</li>
<li>Filter pressure drops are included in the fan static budget at the dirty condition.</li>
</ul>

<h2>Access and maintenance</h2>
<ul>
<li>Access doors are provided on both faces of the device on both airstreams.</li>
<li>There is room to remove a wheel segment, wheel cassette, plate core or heat pipe module without dismantling the casing.</li>
<li>The wheel motor, belt and seals are reachable without entering a fan section.</li>
<li>Service clearance outside the unit allows removal of the largest component.</li>
<li>Lighting and test ports are included in the recovery section.</li>
</ul>

<h2>Pressure drop and fan sizing</h2>
<ul>
<li>Added pressure drop of the device, filters and dampers is in both fan selections.</li>
<li>Fan power limitation calculations include any allowance the energy code provides for recovery.</li>
<li>The fan energy penalty has been compared against recovered energy, using <a href="<?= url('guides/recovery-pressure-drop-fan-penalty') ?>">the fan penalty method</a>.</li>
</ul>

<h2>Controls and monitoring points</h2>
<ul>
<li>Temperature sensors at outdoor air entering, supply leaving, exhaust entering and exhaust leaving.</li>
<li>Humidity sensors where latent performance or frost threshold calculation is needed.</li>
<li>Wheel rotation sensor and speed feedback, with alarm on loss of rotation.</li>
<li>Bypass damper position feedback.</li>
<li>Calculated effectiveness trended by the BAS for fault detection.</li>
</ul>

<h2>Documentation</h2>
<ul>
<li>The schedule lists device type, airflows, effectiveness at summer and winter design, pressure drops, EATR, OACF and frost threshold.</li>
<li>AHRI 1060 certification is required where applicable.</li>
<li>The sequence of operation describes every recovery mode and its transitions.</li>
<li>Commissioning tests for frost control, bypass and leakage differential are listed.</li>
</ul>
<p>For a unit that pulls these items together in one casing, our <a href="<?= url('products/custom-air-handlers') ?>">custom air handlers</a> page describes the construction options.</p>
<?php guide_end([
    ['What should be checked when designing an energy recovery section?', 'Check airflow balance, exhaust air class, fan placement for leakage direction, frost threshold and control, economizer bypass, drainage, filtration, access for maintenance, pressure drop in the fan selection and monitoring points.'],
    ['Does an energy recovery wheel need a drain pan?', 'In cold climates, yes, under the exhaust side, because humid exhaust can condense and frost on the cold matrix. Plates and heat pipes need pans on each side that can condense.'],
    ['What sensors should an energy recovery section have?', 'At minimum, temperature at all four entering and leaving points, a wheel rotation sensor, a pressure differential across the device and bypass damper position. Add humidity sensors for enthalpy devices and calculated frost control.'],
]);
