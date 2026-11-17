<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ice-arena-dehumidification'); ?>
<p class="lede">Fog, dripping roofs and soft ice in an arena are all symptoms of air that holds more moisture than the ice sheet and cold structure can tolerate. The fix is to keep the arena dew point well below the temperature of the coldest surfaces, using dedicated dehumidification sized for infiltration, people and resurfacing, while heating the spectator areas without warming the ice.</p>

<h2>Where arena moisture comes from</h2>
<p>An ice rink surface sits around 22°F to 26°F (−5.5°C to −3.5°C). Any air touching it, or the cold structure above it, gives up moisture if its dew point is higher than the surface temperature. Sources of moisture include:</p>
<ul>
<li><strong>Outdoor air infiltration</strong> through doors, overhead doors for ice resurfacing equipment and envelope leaks. This is usually the largest source in spring, summer and fall.</li>
<li><strong>Ventilation air</strong> brought in deliberately for spectators.</li>
<li><strong>People,</strong> particularly during tournaments with full stands.</li>
<li><strong>Ice resurfacing,</strong> which floods the ice with warm water several times a day, adding a burst of moisture.</li>
<li><strong>Showers and change rooms</strong> if they are not separately exhausted.</li>
</ul>
<p>In winter, dry outdoor air in most of Canada and the northern United States helps. The difficult seasons are late spring, summer and early fall, when warm humid outdoor air enters an arena that operates year round for hockey schools and summer leagues.</p>

<h2>What goes wrong</h2>
<h3>Fog</h3>
<p>Fog forms when warm, humid air contacts the cold layer just above the ice and cools below its dew point. It reduces visibility for players and spectators and can halt games.</p>
<h3>Ceiling condensation and dripping</h3>
<p>The underside of the roof radiates to the cold ice sheet and can fall below the arena air dew point. Condensation then forms and drips onto the ice, creating bumps and damaging the structure and insulation over time. Low-emissivity ceilings reduce radiant exchange with the ice and help keep the roof surface warmer.</p>
<h3>Soft ice and refrigeration load</h3>
<p>Moisture condensing and freezing on the ice releases latent heat, increasing refrigeration plant load and making ice harder to maintain.</p>

<h2>Dew point targets</h2>
<p>A common design target is to keep arena air dew point at or below roughly 35°F to 40°F (2°C to 4°C), with lower values for higher-level facilities or demanding seasons. That dew point stays below most structural surfaces even though it is well above the ice temperature; some moisture deposition on the ice is unavoidable, but it is controlled. The key comparison is with the coldest surfaces in the building, which must be checked at design conditions.</p>
<p class="note">Arena air temperature over the ice is typically held around 50°F to 60°F (10°C to 15°C), while spectator stands may be heated to higher temperatures. The dew point target is independent of these temperatures.</p>

<h2>Dehumidification methods</h2>
<table>
<thead><tr><th>Method</th><th>Strengths</th><th>Limitations</th></tr></thead>
<tbody>
<tr><td>Desiccant dehumidifier</td><td>Reaches low dew points regardless of air temperature; effective at the cool arena conditions</td><td>Requires reactivation heat; higher first cost</td></tr>
<tr><td>Refrigerant-based (DX) dehumidifier</td><td>Familiar; reject heat can warm spectator areas</td><td>Coil approach limits the dew point achievable at cool air temperatures; frost on coils</td></tr>
<tr><td>Cooling coil plus reheat on an AHU</td><td>Uses central chilled water or refrigeration plant</td><td>Low coil temperatures needed; limited at low dew points</td></tr>
</tbody>
</table>
<p>Desiccant units are widely used in arenas because they reach low dew points at cool entering air conditions where refrigerant coils struggle. Reactivation heat can come from gas, hot water or heat recovered from the ice plant. How desiccant wheels work is described in <a href="<?= url('guides/desiccant-dehumidification-wheels') ?>">desiccant dehumidification wheels</a>.</p>

<h2>Sizing the dehumidification</h2>
<p>Size from a moisture balance at summer design dew point. The usual approach:</p>
<ol>
<li>Estimate infiltration airflow, including door openings, and multiply by the difference in humidity ratio between outdoor air and the target arena air.</li>
<li>Add ventilation air moisture at the same humidity ratio difference.</li>
<li>Add occupant latent load for the expected crowd.</li>
<li>Add resurfacing moisture, averaged over the cycle but checked for peak recovery time.</li>
<li>Express the total as lb/h (kg/h) of moisture removal at the target dew point.</li>
</ol>
<p>The method and the moisture equations are in <a href="<?= url('guides/dehumidification-load-calculation') ?>">dehumidification load calculation</a>. Do not size from a rule of thumb per ice sheet; arena tightness and usage vary too much.</p>

<h2>Heating and air distribution</h2>
<p>Spectator heating must not warm the ice. Approaches include radiant heaters aimed at the stands, low-level supply into the seating area with high return, and directing supply air away from the ice. Mixing warm supply air across the ice sheet raises refrigeration load and can create fog where warm and cold layers meet.</p>
<ul>
<li>Avoid air jets that impinge on the ice.</li>
<li>Keep arena air movement gentle, so cold air remains as a stable layer over the ice.</li>
<li>Recover heat from the refrigeration plant for spectator heating, dehumidifier reactivation, and snow melt pits.</li>
</ul>

<h2>Controls and operation</h2>
<p>Control the dehumidifier on dew point measured in the arena, away from the ice and doors. Add a pre-emptive increase in dehumidification before resurfacing and events. Minimize outdoor air by using demand-controlled ventilation for the stands, but keep enough ventilation and combustion product monitoring if fuel-powered resurfacing equipment is used. Natatoriums are the opposite problem, warm and wet rather than cold and dry, and are covered in <a href="<?= url('guides/natatorium-dehumidification') ?>">natatorium dehumidification</a>.</p>
<?php guide_end([
    ['What causes fog in an ice arena?', 'Warm humid air contacts the cold air layer above the ice and cools below its dew point. Reducing arena dew point with dedicated dehumidification and limiting infiltration prevents it.'],
    ['What dew point should an ice arena be held at?', 'A common design target is about 35°F to 40°F (2°C to 4°C) or lower, keeping air dew point below the coldest structural surfaces. Higher-level facilities may target lower values.'],
    ['Why are desiccant dehumidifiers common in arenas?', 'They can reach low dew points at the cool air temperatures found in arenas, where refrigerant coils would need to run below freezing. Reactivation heat can often be recovered from the ice plant.'],
]);
