<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('economizer-requirements-by-climate-zone'); ?>
<p class="lede">An economizer is required when the project's climate zone appears on the code's economizer table and the cooling system's capacity exceeds the threshold for that zone, unless one of the listed exceptions applies. Work it in that order: find the climate zone, find the capacity, then check exceptions.</p>

<h2>Step 1: Identify the governing code and edition</h2>
<p>ASHRAE 90.1 and the IECC both require economizers, and their tables are similar but not identical. Many states adopt the IECC and allow 90.1 as an alternative path. California uses Title 24, and Canadian provinces use NECB or 90.1. Determine:</p>
<ol>
<li>Which code governs the building permit.</li>
<li>Which edition of that code is in force, including local amendments.</li>
<li>Whether the project is using a prescriptive path or a performance (modelling) path. Under performance paths, a missing economizer is permitted if the model still meets the target, but the baseline usually includes one.</li>
</ol>

<h2>Step 2: Determine the climate zone</h2>
<p>Both 90.1 and the IECC use climate zones numbered 0 to 8, subdivided into A (moist), B (dry) and C (marine). The zone is listed by county in the US in Normative Appendix B of 90.1 and in the IECC's climate zone chapter. For locations outside the listed counties, or for Canadian sites using 90.1, the zone is determined from heating and cooling degree-days and precipitation.</p>
<p>Zones with hot, humid climates (the lowest numbers and "A" designations) are where economizer requirements are most often waived, because outdoor air is rarely cool and dry enough to be useful. Check your edition's table; the excluded zones have changed between editions.</p>
<p class="note">Design weather data for the site is a separate source from the climate zone designation. See <a href="<?= url('guides/outdoor-design-conditions-ashrae-climate-data') ?>">outdoor design conditions</a> if you need dry-bulb and wet-bulb values.</p>

<h2>Step 3: Determine the cooling capacity being evaluated</h2>
<p>The threshold is applied to individual cooling systems. Common points of confusion:</p>
<ul>
<li>Use total cooling capacity of the system at AHRI rating or design conditions, as the code defines it. A common threshold in both 90.1 and the IECC has been 54,000 Btu/h (about 4.5 tons, 15.8 kW) per system, but confirm in your edition.</li>
<li>Chilled-water air handlers count. The capacity is the coil's design capacity.</li>
<li>Some editions also set a building-level total, so that many small units below the individual threshold still trigger the requirement collectively.</li>
<li>Do not split one system into small units to avoid the threshold. The codes anticipate this.</li>
</ul>

<h2>Step 4: Check the exceptions</h2>
<p>Each code lists conditions under which an economizer is not required. The categories that appear most often are summarized below, but the exact wording governs.</p>
<table>
<thead><tr><th>Exception category</th><th>Typical condition</th></tr></thead>
<tbody>
<tr><td>Higher equipment efficiency</td><td>Cooling equipment efficiency exceeds minimums by the percentage in the efficiency-improvement table for that zone</td></tr>
<tr><td>Water-side economizer</td><td>A fluid economizer meeting capacity and pressure-drop rules is provided instead</td></tr>
<tr><td>Humidity-controlled spaces</td><td>Spaces where outdoor air would interfere with required humidity levels, such as some hospitals, museums and process areas</td></tr>
<tr><td>Recovered condenser heat</td><td>Systems where condenser heat is used for space or water heating and economizer operation would reduce that recovery</td></tr>
<tr><td>Refrigerated display cases</td><td>Supermarket areas where open cases would be affected</td></tr>
<tr><td>Residential spaces</td><td>Small systems serving dwelling units, depending on edition</td></tr>
<tr><td>Systems with small outdoor air fraction</td><td>Certain units serving spaces where economizer use is impractical</td></tr>
<tr><td>Data centres and computer rooms</td><td>Separate requirements or alternatives apply</td></tr>
</tbody>
</table>
<p class="warn">An exception must be documented on the compliance forms with the specific exception cited. Plan reviewers reject "economizer not required" notes without a reason.</p>

<h2>Step 5: Confirm the economizer meets the code's performance rules</h2>
<p>Once required, the economizer itself must comply. Typical provisions to check:</p>
<ul>
<li>Capable of providing up to 100% of design supply air as outdoor air for cooling.</li>
<li>Integrated operation, so the economizer can work together with mechanical cooling rather than locking out one or the other.</li>
<li>Relief or return fan capacity to avoid overpressurizing the building at full outdoor air.</li>
<li>Outdoor air and return dampers that meet maximum leakage requirements. Leakage classes are explained in <a href="<?= url('guides/amca-500-d-damper-leakage') ?>">AMCA 500-D damper leakage ratings</a>.</li>
<li>Fault detection and diagnostics for certain packaged units in some codes.</li>
<li>A high-limit shutoff of a type permitted in that climate zone. Selecting the high-limit type is covered in <a href="<?= url('guides/economizer-high-limit-controls') ?>">economizer high-limit controls</a>.</li>
</ul>

<h2>Step 6: Document the decision</h2>
<ol>
<li>Record the climate zone and the source used to determine it.</li>
<li>List each cooling system with its capacity and whether it is above or below the threshold.</li>
<li>For each system without an economizer, cite the exception.</li>
<li>For each system with an economizer, record the type (air-side or water-side), high-limit control and damper leakage rating.</li>
<li>Carry the information onto the energy code compliance forms.</li>
</ol>

<h2>Worked example</h2>
<p>A 15,000 cfm (7,080 L/s) chilled-water air handler serving an office in Minneapolis has a design cooling coil capacity of 480,000 Btu/h (40 tons). Minneapolis is in a cold climate zone that appears on the economizer table. The capacity far exceeds the per-system threshold. The office has no humidity-controlled spaces and no condenser heat recovery. Conclusion: an air-side or water-side economizer is required. With 100% outdoor air capability, a relief fan and low-leakage dampers, an integrated air-side economizer is the normal choice.</p>
<p>A similar unit serving a museum gallery with tight humidity limits might qualify for the humidity exception, provided the documented requirement shows that outdoor air would prevent maintaining the specified conditions.</p>
<?php guide_end([
    ['How do I know if my project needs an economizer?', 'Find the climate zone, then check whether each cooling system\'s capacity exceeds the threshold in the governing code\'s economizer table for that zone. If it does, an economizer is required unless a listed exception applies.'],
    ['Can I avoid an economizer by using more efficient equipment?', 'Many editions of 90.1 and the IECC allow an exception when cooling equipment efficiency exceeds minimums by a specified percentage for the climate zone. The required improvement is listed in a table in the code.'],
    ['Does a chilled-water air handler need an economizer?', 'Yes, when its cooling capacity exceeds the threshold for the climate zone. A water-side economizer can be an alternative in some cases.'],
    ['Are economizers required in humid climates?', 'Some hot, humid climate zones are excluded from the economizer requirement in certain editions. Check the economizer table in the edition adopted for the project.'],
]);
