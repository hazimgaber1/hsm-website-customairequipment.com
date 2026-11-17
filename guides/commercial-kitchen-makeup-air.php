<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('commercial-kitchen-makeup-air'); ?>
<p class="lede">Kitchen makeup air should replace roughly 80% to 90% of hood exhaust with a dedicated, tempered supply, with the rest transferred from the dining room so the kitchen stays slightly negative. Size the exhaust first, subtract transfer air, then size heating and, where needed, cooling for the makeup air unit at design outdoor conditions.</p>

<h2>Step 1: Establish the hood exhaust rate</h2>
<p>Everything starts with exhaust. The hood manufacturer's listed airflow, based on hood type, length, and the duty of appliances beneath it (light, medium, heavy or extra-heavy), sets the minimum. Listed hoods tested to UL 710 often have lower required exhaust than the prescriptive values in the mechanical code. Collect for each hood:</p>
<ul>
<li>Hood type (wall canopy, island, backshelf, proximity) and length.</li>
<li>Appliance line-up and duty classification.</li>
<li>Listed exhaust CFM per linear foot or total.</li>
<li>Whether demand-controlled kitchen ventilation will modulate exhaust with cooking activity.</li>
</ul>
<p>Add any other exhaust the kitchen sees: dishwasher hoods, general kitchen exhaust, washroom exhaust from adjacent spaces. The sum is the total exhaust the space must make up.</p>

<h2>Step 2: Decide the makeup air split</h2>
<p>The kitchen should be negative relative to the dining room so odors and heat do not migrate out. Typical practice is to supply 80% to 90% of the kitchen exhaust as dedicated makeup air and draw the remainder as transfer air from the dining area, which is itself supplied by the building HVAC system with its outdoor air.</p>
<p class="formula">Makeup air CFM = Total kitchen exhaust CFM − Transfer air CFM</p>
<p>Worked example: a kitchen with 6,000 cfm (2,830 L/s) of hood exhaust and 400 cfm of dishwasher exhaust has 6,400 cfm total. If the dining room HVAC can supply 900 cfm of outdoor air that transfers into the kitchen, the makeup air unit must deliver 5,500 cfm (2,600 L/s), about 86% of exhaust.</p>
<p class="warn">Do not count on transfer air the dining room cannot deliver. If the dining HVAC is a small rooftop with a modest outdoor air setting, the kitchen will pull air from wherever it can, including doors, flues and plumbing vents, causing drafts and backdrafting.</p>

<h2>Step 3: Choose how makeup air enters the kitchen</h2>
<p>How the air is introduced affects hood capture as much as how much there is. Options include:</p>
<ol>
<li><strong>Perforated ceiling diffusers</strong> away from the hood, delivering low-velocity air. Good for comfort and capture.</li>
<li><strong>Front-face or perforated-face supply plenums</strong> on the hood, discharging air at low velocity toward the cook line.</li>
<li><strong>Back-supply plenums</strong> discharging behind the appliances.</li>
<li><strong>Short-circuit (internal) supply</strong> inside the hood. Widely discouraged because it can reduce capture and many listed hoods do not allow it.</li>
</ol>
<p>Keep air velocity at the hood edge low, roughly under 50 fpm (0.25 m/s), so supply jets do not pull smoke and grease out of the hood. Avoid four-way ceiling diffusers close to hood edges.</p>

<h2>Step 4: Size the heating capacity</h2>
<p>Untempered makeup air at winter design conditions makes the kitchen unworkable. Most codes require tempering above a certain temperature difference, and staff comfort requires it anyway. Size the heating coil or burner with the sensible heat equation:</p>
<p class="formula">Q (Btu/h) = 1.08 × CFM × (T leaving − T outdoor design)</p>
<p>Continuing the example in a cold climate with a −13°F (−25°C) design and a 55°F (13°C) leaving temperature:</p>
<p class="formula">Q = 1.08 × 5,500 × (55 − (−13)) = 1.08 × 5,500 × 68 ≈ 404,000 Btu/h (118 kW)</p>
<p>The leaving temperature is a choice. Supplying at 55°F to 65°F (13°C to 18°C) is common; the cooking line adds heat. For altitude above roughly 2,000 ft, correct the 1.08 factor for reduced air density.</p>
<p>Direct gas-fired heaters are common for kitchen makeup air because of their high efficiency; indirect-fired, hot water and electric heat are also used. The burner-type tradeoffs are covered in <a href="<?= url('guides/direct-fired-vs-indirect-fired-makeup-air') ?>">direct-fired vs indirect-fired makeup air</a>.</p>

<h2>Step 5: Decide whether to cool</h2>
<p>Kitchens are hot. In warm or humid climates, cooling at least part of the makeup air substantially improves working conditions. Options include:</p>
<ul>
<li>Full DX or chilled water cooling of the makeup air at design flow.</li>
<li>Evaporative cooling in dry climates.</li>
<li>Partial cooling, with spot cooling directed at the cook line.</li>
</ul>
<p>Cooling 100% outdoor air is expensive. Use the full enthalpy equation, Q = 4.5 × CFM × Δh, to estimate total load. Demand-controlled kitchen ventilation reduces both exhaust and makeup air during light cooking and shortens payback.</p>

<h2>Step 6: Interlock and control</h2>
<ol>
<li>Interlock the makeup air unit with the hood exhaust fans so it cannot run without exhaust and stops when exhaust stops.</li>
<li>If exhaust is variable, modulate makeup air to track it, holding the design ratio.</li>
<li>Control discharge temperature, not space temperature, to avoid overheating the kitchen.</li>
<li>Coordinate with the hood fire suppression system. Codes and manufacturers specify whether makeup air shuts down on suppression discharge; follow the hood listing and local requirements.</li>
<li>Provide filters on the makeup air intake and include them in maintenance schedules; kitchen roofs are greasy environments.</li>
</ol>

<h2>Step 7: Verify after startup</h2>
<p>Measure exhaust and makeup air with the hoods operating and check capture with a smoke test at the hood edges. Confirm the kitchen is negative to the dining room using door behaviour or a manometer. Many complaints of smoke spillage trace to makeup air introduced too fast near the hood rather than too little air. Industrial plants with process exhaust follow a different method, described in <a href="<?= url('guides/industrial-makeup-air-calculation') ?>">industrial makeup air calculation</a>, and building pressure control is discussed in <a href="<?= url('guides/building-pressurization-control') ?>">building pressurization control</a>.</p>
<?php guide_end([
    ['How much makeup air does a commercial kitchen need?', 'Typically 80% to 90% of the total kitchen exhaust is supplied as dedicated makeup air, with the remainder transferred from the dining room so the kitchen stays negative. Base the total on listed hood exhaust rates plus any other kitchen exhaust.'],
    ['Does kitchen makeup air have to be heated?', 'In most climates yes. Codes generally require tempering when outdoor air would be uncomfortably cold, and untempered air makes kitchens unworkable. Size heating with 1.08 times CFM times the temperature rise from winter design.'],
    ['Why is smoke escaping from my kitchen hood?', 'Often makeup air is introduced too close to the hood or at too high a velocity, pulling smoke out of the capture zone. It can also mean too little makeup air, which starves exhaust. Check airflows and supply locations.'],
]);
