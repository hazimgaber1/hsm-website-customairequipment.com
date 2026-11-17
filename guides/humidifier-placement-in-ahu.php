<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('humidifier-placement-in-ahu'); ?>
<p class="lede">Place the humidifier where the air is warm enough to absorb the moisture, downstream of the main filters and the heating coil, far enough upstream of the fan, final filter, cooling coil and any sensors to clear the non-wetting distance, and in a section with a drained, corrosion-resistant floor. Work through the unit section by section and confirm each distance against the manufacturer's selection.</p>

<h2>Step 1: Gather the inputs</h2>
<ol>
<li>Get the humidifier load in lb/h and the supply airflow.</li>
<li>Find the air condition at each candidate location in the unit at winter design: dry-bulb, humidity ratio and velocity.</li>
<li>Calculate the leaving RH at each candidate location if the full load were added there.</li>
<li>List every component that must stay dry: filters, coils, fans, motors, dampers, sound attenuators with fill, airflow stations and sensors.</li>
</ol>

<h2>Step 2: Rule out locations by temperature and RH</h2>
<p>The single most important placement rule is to add moisture where the air can hold it.</p>
<ol>
<li>Calculate the leaving RH at each location. If it exceeds about 80 to 85 percent, absorption will be long and wetting likely. Move the humidifier to warmer air.</li>
<li>In most heating-season AHUs, the warmest point is after the heating coil and, in a draw-through unit, after the fan. Mixed air ahead of the heating coil is usually too cold.</li>
<li>Avoid placement upstream of a preheat coil. Preheat may not run when humidification is called for, and cold air will drip.</li>
</ol>
<h3>Example</h3>
<p>Supply air at 55 F and 34 gr/lb needs to rise to 45 gr/lb. At 55 F, 45 gr/lb is about 70 percent RH: acceptable but on the high side. If the heating coil raises supply to 65 F first, the same 45 gr/lb is about 50 percent RH and absorption will be much shorter. Placing the humidifier after the heating coil is clearly better.</p>
<p class="note">In units that supply 55 F air all winter (cooling-only VAV with reheat at the zones), there may be no warm location. Consider short-absorption dispersion, splitting the load, or humidifying at a separate outdoor air unit.</p>

<h2>Step 3: Place relative to filters</h2>
<ol>
<li>Put the humidifier downstream of the main (pre and intermediate) filters so dust does not foul the humidifier and wet filters do not become a growth site.</li>
<li>Keep the humidifier upstream of any HEPA or high-efficiency final filter only if the full non-wetting distance fits between them. Wet final filters are a serious hygiene and pressure drop problem.</li>
<li>Where the final filter must be close downstream, increase the distance, use a short-absorption manifold, or move the final filter.</li>
</ol>

<h2>Step 4: Place relative to coils</h2>
<ol>
<li>Downstream of the heating coil is usually right, as above.</li>
<li>Avoid placing the humidifier immediately upstream of the cooling coil. If the coil runs in winter (economizer is common, but some units cool year-round), it will remove the moisture just added.</li>
<li>If the humidifier must be upstream of a coil, allow the full non-wetting distance before the coil face and provide a drain pan under the coil.</li>
</ol>

<h2>Step 5: Place relative to the fan</h2>
<ol>
<li>In a draw-through unit, the fan is downstream of the coils. Placing the humidifier after the fan gives warm, well-mixed air but often high and nonuniform velocity at the discharge. A diffuser plate or straight section helps.</li>
<li>In a blow-through unit, place the humidifier downstream of the fan and heating coil, where air is warm and velocity profile is better.</li>
<li>Keep the non-wetting distance clear of fan wheels, motors and EC electronics. Moisture on motor windings and electronics causes failures.</li>
<li>For fan arrays, check that the plenum downstream provides uniform velocity before the humidifier section.</li>
</ol>

<h2>Step 6: Place relative to sensors and other components</h2>
<ol>
<li>Place the supply humidity sensor well beyond absorption, usually several times the non-wetting distance or downstream in the duct, so it reads mixed air rather than the plume. Sensor details are in <a href="<?= url('guides/humidity-sensor-selection-placement') ?>">how to select and place humidity sensors</a>.</li>
<li>Place a high-limit humidistat downstream of the absorption distance too, typically a few feet into the supply duct.</li>
<li>Keep sound attenuators with exposed fill, airflow measuring stations and smoke detectors out of the wetting zone.</li>
<li>Check that duct turns and fittings after the unit are beyond the absorption distance, or the plume can impinge on duct walls.</li>
</ol>

<h2>Step 7: Detail the humidifier section</h2>
<ol>
<li>Provide a stainless steel drain pan or floor below and downstream of the dispersion, sloped and trapped.</li>
<li>Use stainless steel or other corrosion-resistant interior panels in the section and to the end of the absorption distance.</li>
<li>Avoid exposed fibrous insulation in the section; use solid or perforated-with-liner panels designed for wet duty.</li>
<li>Provide an access door upstream of the dispersion and another downstream, with a view port if possible.</li>
<li>Route steam supply and condensate drain piping so it slopes correctly and does not interfere with access.</li>
<li>Allow for the section length the selection requires plus a margin. It is much cheaper to add six inches of casing at the factory than to fix wetting in the field.</li>
</ol>

<h2>Step 8: Verify with the selection</h2>
<ol>
<li>Run the manufacturer's selection with the actual section dimensions, airflow, entering condition and load.</li>
<li>Confirm the non-wetting distance fits between the dispersion and the next downstream component.</li>
<li>Check the result at the extremes: minimum airflow (if VAV) and highest load.</li>
<li>Show the distance on the unit drawing so it survives later design changes.</li>
</ol>
<p>Why absorption depends on these conditions is explained in <a href="<?= url('guides/humidifier-absorption-distance') ?>">humidifier absorption distance and what affects it</a>. The component order of the whole unit is set out in <a href="<?= url('guides/ahu-component-sequence') ?>">AHU component sequence</a>.</p>
<?php guide_end([
    ['Where should a humidifier be located in an air handler?', 'Usually downstream of the main filters and heating coil, where the air is warmest, and far enough upstream of the fan, final filters, cooling coil and sensors to clear the non-wetting distance.'],
    ['Can a humidifier go upstream of a HEPA filter?', 'Only if the full non-wetting distance fits between the humidifier and the filter. A wet HEPA filter is a hygiene risk and its pressure drop rises. Otherwise move the humidifier or the filter.'],
    ['Why not humidify in mixed air before the heating coil?', 'Mixed air in winter is often cold, so the leaving RH would be high and absorption long. Moisture would likely wet the coil or casing. Warmer air after the heating coil absorbs much faster.'],
]);
