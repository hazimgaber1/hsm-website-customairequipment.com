<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('preheat-coil-placement-sizing'); ?>
<p class="lede">In a 100% outdoor air or high outdoor air unit, put the preheat coil immediately downstream of the outdoor air intake and prefilter, ahead of any cooling coil, final filter or humidifier, and size it to raise the coldest design outdoor air to a safe leaving temperature, typically 40 to 50°F (4 to 10°C), at full outdoor airflow.</p>

<h2>What the preheat coil is for</h2>
<p>A preheat coil is not the same as the unit's main heating coil. Its job is to protect everything downstream from subfreezing air and to bring the airstream to a temperature where the rest of the unit can operate normally. In a mixed-air unit with modest outdoor air, mixing usually does this. In 100% outdoor air units, makeup air units and units with very high minimum outdoor air, preheat is the only thing between −20°F (−29°C) air and a chilled water coil.</p>
<p>The choice of freeze protection method for the preheat coil itself, such as glycol, pumped coil or IFB, is a separate decision covered in <a href="<?= url('guides/coil-freeze-protection-methods') ?>">coil freeze protection methods</a>. This guide handles where the coil goes and how big it is.</p>

<h2>Step-by-step: placing the preheat coil</h2>
<ol>
<li><strong>Start at the outdoor air intake.</strong> The outdoor air damper or louver comes first. Snow and rain management at the intake must be resolved before the coil, since wet snow on a preheat coil face blocks airflow.</li>
<li><strong>Place a prefilter ahead of the preheat coil.</strong> A MERV 8 or similar prefilter keeps the coil fins clean. Some designers place the preheat coil before the prefilter in extreme climates so that filters never see frost or snow; if so, specify wider fin spacing on the preheat coil and plan for coil cleaning.</li>
<li><strong>Allow distance for uniform approach.</strong> Air entering from a side intake or through a damper can arrive unevenly. A short plenum or an air blender between the damper and the coil keeps velocity even across the face and avoids cold spots.</li>
<li><strong>Put the preheat coil ahead of energy recovery or after it, deliberately.</strong> With energy recovery, preheat can be placed upstream of the recovery device to keep it above its frost threshold, or downstream to top up after recovery. Upstream preheat uses more heating energy but simplifies frost control; downstream preheat captures more recovery. Frost control strategies are covered in <a href="<?= url('guides/frost-control-wheels-and-plates') ?>">frost control for wheels and plates</a>.</li>
<li><strong>Keep the cooling coil, final filters and humidifier downstream.</strong> All of these should see air that has already been preheated and mixed.</li>
<li><strong>Locate the leaving air sensor properly.</strong> Use an averaging sensor across the full coil face downstream of the preheat coil, with enough distance for mixing. A single-point sensor can read warm while part of the airstream is still below freezing.</li>
<li><strong>Provide access.</strong> An access section between the preheat coil and the next component allows inspection of both faces, cleaning and sensor service.</li>
</ol>

<h2>Step-by-step: sizing the preheat coil</h2>
<ol>
<li><strong>Select the outdoor design temperature.</strong> Use the heating design dry bulb from ASHRAE climate data or the National Building Code of Canada climatic data for the site. Many designers size preheat for the 99.6% condition, and some add margin for colder extremes on critical facilities.</li>
<li><strong>Set the leaving air temperature target.</strong> If downstream heating coils handle space heating, 40 to 45°F (4 to 7°C) is common for freeze protection. If the preheat coil is the only heating in a 100% OA unit, set it to the required supply temperature or to the inlet temperature the main heating coil needs.</li>
<li><strong>Determine the airflow.</strong> Use the maximum outdoor airflow that can occur at the design outdoor temperature, not the average. For a unit with variable outdoor air, check whether the minimum outdoor air at reduced fan speed is still the full design outdoor CFM.</li>
<li><strong>Calculate the load.</strong> Use the sensible heat equation, corrected for density where elevation is significant.</li>
<li><strong>Account for energy recovery.</strong> If recovery is upstream, the preheat coil sees the recovery device's leaving temperature, but size it to cover the case where recovery is bypassed or defrosting.</li>
<li><strong>Select the coil.</strong> Choose rows and fins with the heating medium, fluid temperatures and freeze protection approach in mind. Keep face velocity moderate; 500 fpm (2.5 m/s) is a common ceiling.</li>
</ol>
<p class="formula">Q (Btu/h) = 1.08 × CFM × (leaving air temp − outdoor design temp)</p>

<h2>Worked example</h2>
<p>A 100% outdoor air unit in a cold Canadian climate delivers 10,000 CFM. Design outdoor temperature is −22°F (−30°C). The preheat coil must deliver 45°F (7°C) air to the downstream chilled water coil and heating coil.</p>
<p class="formula">Q = 1.08 × 10,000 × (45 − (−22)) = 1.08 × 10,000 × 67 = 723,600 Btu/h (about 212 kW)</p>
<p>If an energy recovery device upstream raises the outdoor air to 20°F (−7°C) during normal operation, the preheat load drops to 1.08 × 10,000 × 25 = 270,000 Btu/h. But during defrost or bypass, the coil still needs the full 723,600 Btu/h, so the coil is sized for the larger value and controlled for the smaller.</p>
<p>With 180°F (82°C) hot water and a 40°F (22 K) drop, flow is 723,600 ÷ (500 × 40) ≈ 36 GPM. If the loop contains glycol, the flow factor and coil selection change; see <a href="<?= url('guides/glycol-coil-derating') ?>">glycol coil derating</a>.</p>

<h2>Practical considerations</h2>
<ul>
<li><strong>Turndown.</strong> A coil sized for −22°F runs at a fraction of capacity most of the winter. The control method must give stable leaving temperature at low load without starving the coil of flow.</li>
<li><strong>Staging electric preheat.</strong> Electric preheat coils need enough stages or SCR control for that turndown, and minimum airflow interlocks.</li>
<li><strong>Gas-fired preheat.</strong> Indirect gas-fired sections are another option and avoid freezing of hydronic coils altogether, at the cost of flue and combustion air requirements.</li>
<li><strong>Pressure drop.</strong> The preheat coil is in the airstream all year; include its pressure drop in the fan selection even though it only heats for part of the year.</li>
</ul>
<p class="note">Where a unit serves a building in extreme cold, factory run-testing of the assembled unit helps confirm sensor placement and control behaviour before installation. Custom outdoor air units with integrated preheat are one of the arrangements offered as a <a href="<?= url('products/custom-air-handlers') ?>">custom air handler</a>.</p>
<?php guide_end([
    ['Where should a preheat coil be located in an AHU?', 'Typically right after the outdoor air intake and a prefilter, ahead of cooling coils, final filters and humidifiers. If energy recovery is used, the preheat coil may be upstream of the recovery device for frost control or downstream to top up the air temperature.'],
    ['What leaving temperature should a preheat coil deliver?', 'For freeze protection of downstream components, 40 to 45 F is common. If the preheat coil is the only heating source in a 100 percent outdoor air unit, it must deliver the required supply temperature or the inlet temperature the main heating coil needs.'],
    ['How do I size a preheat coil?', 'Multiply 1.08 by the maximum outdoor airflow and by the difference between the leaving air temperature target and the winter design outdoor temperature. Size for the case where energy recovery is bypassed or defrosting, since the coil must cover that condition.'],
]);
