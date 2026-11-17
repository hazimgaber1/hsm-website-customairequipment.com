<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('microbial-growth-ahu-troubleshooting'); ?>
<p class="lede">Mold and biofilm inside an air handler always trace back to water that stays somewhere long enough for growth: a drain pan that does not drain, a coil that carries water downstream, a liner or filter that gets wet, or condensation on cold surfaces. Find and fix the moisture source first; cleaning without fixing the cause only resets the clock.</p>

<h2>Where growth appears and what it tells you</h2>
<table>
<thead><tr><th>Location of growth</th><th>Most likely moisture source</th></tr></thead>
<tbody>
<tr><td>Standing water and slime in the main drain pan</td><td>Pan not sloped, drain blocked, trap incorrect</td></tr>
<tr><td>Liner and floor downstream of cooling coil</td><td>Coil carryover</td></tr>
<tr><td>Bottom row of filters near the intake</td><td>Rain or snow entry</td></tr>
<tr><td>Filters downstream of the cooling coil</td><td>Saturated air, carryover, or filter too close to coil</td></tr>
<tr><td>Exterior casing panels inside, near thermal bridges</td><td>Condensation from cold casing surfaces</td></tr>
<tr><td>Insulation around a humidifier</td><td>Humidifier wetting (see humidity guides)</td></tr>
<tr><td>Coil fins, leaving face</td><td>Normal wet surface without cleaning or irradiation; often combined with other causes</td></tr>
</tbody>
</table>

<h2>Symptom: slime and standing water in the drain pan</h2>
<p><strong>Causes:</strong> pan installed flat or sloped the wrong way; drain connection above the pan's low point; blocked drain line; trap of the wrong height for the section pressure, so water is held in or blown back; unit not level.</p>
<p><strong>Checks:</strong></p>
<ul>
<li>Pour water into the pan with the fan off and watch it drain. Repeat with the fan running.</li>
<li>Check the unit is level and the pan slopes to the outlet in both directions.</li>
<li>Measure the trap and compare with the section static pressure; a draw-through cooling coil section under strong negative pressure needs a deeper trap than many installers expect.</li>
<li>Check the drain line for blockages and for an air gap at its discharge.</li>
</ul>
<p><strong>Fix:</strong> Correct the slope or level, rebuild the trap to suit the pressure, clear the line, then clean and disinfect the pan. Trap sizing is covered in <a href="<?= url('guides/condensate-trap-and-pad-height') ?>">condensate trap and pad height</a>.</p>

<h2>Symptom: wet liner, floor or insulation downstream of the coil</h2>
<p><strong>Causes:</strong> face velocity above the coil's carryover limit; uneven airflow concentrating velocity on part of the coil; tall coil without intermediate pan; drain pan too short downstream of the coil.</p>
<p><strong>Checks:</strong> Measure face velocity and look for droplet streaks; inspect during peak cooling. Note whether the wetting is in a band (often the bottom of a tall coil) or in a patch (often a velocity hot spot).</p>
<p><strong>Fix:</strong> Reduce airflow, even out the velocity profile, extend the drain pan or add an eliminator. Persistent carryover diagnosis is covered in <a href="<?= url('guides/cooling-coil-water-carryover-troubleshooting') ?>">cooling coil water carryover troubleshooting</a>. Replace wet porous insulation rather than trying to clean it.</p>

<h2>Symptom: growth on filters</h2>
<p><strong>Causes:</strong> wet filters from intake water; final filters too close to the cooling coil leaving face; high relative humidity in the filter section for long periods; filters left in place long after change-out with organic dust loading.</p>
<p><strong>Checks:</strong> Water staining pattern; relative humidity at the filter; filter change history.</p>
<p><strong>Fix:</strong> Stop water entry at the intake, relocate downstream filters after the fan where they benefit from fan heat, and replace filters on schedule. Remove contaminated filters carefully, bagging them in the unit to limit spore release.</p>

<h2>Symptom: growth on inside casing walls or panel joints</h2>
<p><strong>Causes:</strong> condensation on cold inner surfaces of panels in sections with warm, humid air, typically at thermal bridges, poorly sealed joints, or near cold outdoor air sections; casing air leakage bringing humid air into contact with cold surfaces.</p>
<p><strong>Checks:</strong> Look for condensation lines along framing members and panel joints, especially in cold weather. Infrared imaging of the casing exterior highlights thermal bridges.</p>
<p><strong>Fix:</strong> Seal leaks; where condensation is chronic, the casing may need thermal-break construction or better insulation. Casing condensation risk is calculated in <a href="<?= url('guides/casing-condensation-risk-calculation') ?>">casing condensation risk calculation</a>.</p>

<h2>Symptom: musty odour without visible growth</h2>
<p><strong>Causes:</strong> growth in hidden places: inside fibrous liner, under drain pans, inside the coil depth, in return plenums or ductwork.</p>
<p><strong>Checks:</strong> Inspect with a light and mirror behind coils and under pans; remove a small section of liner to inspect behind it; check return ducts.</p>
<p><strong>Fix:</strong> Find and clean or replace the affected material.</p>

<h2>Corrective action steps</h2>
<ol>
<li><strong>Fix the moisture source.</strong> This is the step that determines whether growth returns.</li>
<li><strong>Plan the remediation.</strong> For more than small areas, follow recognized mold remediation guidance, isolate the unit, and protect occupants and workers. Consider whether downstream ductwork is affected.</li>
<li><strong>Remove porous materials</strong> with growth: fibrous insulation, filters, foam gaskets. Cleaning rarely restores them.</li>
<li><strong>Clean non-porous surfaces</strong> such as metal pans, solid liners and coil fins, using cleaners compatible with the materials and coatings. Rinse and dry.</li>
<li><strong>Disinfect where appropriate</strong> with products registered for the use, following label instructions, and ventilate before restart.</li>
<li><strong>Verify drainage and dryness</strong> after restart, at peak cooling conditions.</li>
<li><strong>Adjust maintenance.</strong> Increase inspection frequency of pans and coils, and consider UV-C irradiation of coil and pan surfaces as a supplementary measure once moisture problems are fixed.</li>
</ol>
<p class="warn">Biocide tablets or sprays in a drain pan that does not drain mask the problem. They do not replace correct slope, trap and cleaning, and some are corrosive to pans and coils.</p>

<h2>Prevention in new units</h2>
<p>Units built with sloped, double-sloped stainless drain pans, coils selected below the carryover limit, solid inner liners, thermal-break casings in cold climates and adequate access to inspect every wet surface rarely develop chronic growth. Hygienic construction features are listed in <a href="<?= url('guides/hygienic-ahu-construction-checklist') ?>">the hygienic AHU construction checklist</a>. Humidifier hygiene, a separate set of issues, is handled in the humidity control category.</p>
<?php guide_end([
    ['What causes mold inside an air handler?', 'Mold and biofilm grow where water persists: drain pans that do not drain, coils that carry water downstream onto liners and floors, wet filters from intake rain or snow, and condensation on cold casing surfaces. Fixing the moisture source is essential before cleaning.'],
    ['Can moldy AHU insulation be cleaned?', 'Porous materials such as fibrous insulation, filters and foam gaskets with growth generally cannot be reliably cleaned and should be removed and replaced. Non-porous metal surfaces can be cleaned and disinfected.'],
    ['Will UV lights stop mold in my air handler?', 'UV-C coil and pan irradiation can help keep wet surfaces clean, but it does not fix a drain pan that holds water, coil carryover or wet filters. Correct the moisture problem first, then consider UV-C as a supplementary measure.'],
]);
