<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-component-sequence'); ?>
<p class="lede">Order AHU sections by asking what each component needs from the air arriving at it: filters need dry air, cooling coils need air above freezing, humidifiers need warm air and a long absorption distance, and final filters belong where nothing downstream can shed dirt or moisture. Work through those needs from intake to discharge and a standard sequence emerges.</p>

<h2>The default sequence for a mixed-air unit</h2>
<ol>
<li>Outdoor and return air dampers (mixing section), with relief or return fan upstream if used</li>
<li>Energy recovery device, if fitted, on the outdoor air path before mixing</li>
<li>Prefilters</li>
<li>Preheat coil (cold climates)</li>
<li>Cooling coil with drain pan</li>
<li>Supply fan (draw-through) </li>
<li>Reheat or heating coil</li>
<li>Humidifier and absorption space</li>
<li>Final filters</li>
<li>Sound attenuator and discharge plenum</li>
</ol>
<p>Access sections are inserted between components wherever inspection or cleaning is needed; the <a href="<?= url('guides/access-section-service-checklist') ?>">access section checklist</a> covers where. The steps below explain the reasoning so you can adapt the order when a project departs from the default.</p>

<h2>Step-by-step logic</h2>
<h3>1. Handle the building air first</h3>
<p>The relief damper or return fan comes before the mixing point so that excess return air can leave before outdoor air enters. If a return fan sits downstream of the mixing box, it pushes against the outdoor damper and can force return air out of the intake.</p>
<h3>2. Recover energy before mixing</h3>
<p>On units with energy recovery, the wheel or plate sits in the pure outdoor air and exhaust streams. Placing it after the mixing box would dilute the temperature difference it depends on and mix exhaust with supply in a way that defeats its purpose. Filter the outdoor and exhaust air entering the device to keep it clean.</p>
<h3>3. Filter before anything that can foul</h3>
<p>Prefilters go ahead of coils and fans. A fouled coil costs both pressure drop and capacity, and coils are much harder to clean than filters are to change. Filters also need dry air: placing them right after a cooling coil or humidifier invites wet media, microbial growth and collapse.</p>
<h3>4. Preheat before cooling in cold climates</h3>
<p>Air below freezing must not reach a chilled water coil. The preheat coil raises mixed or outdoor air above freezing. Some designers put preheat ahead of the prefilters to keep snow and frost off the media; others place it after the prefilters to keep the coil clean. The choice depends on the intake and how often snow is a problem.</p>
<h3>5. Choose the fan position relative to the cooling coil</h3>
<p>For draw-through, the fan follows the cooling coil. For blow-through, it precedes it. The tradeoffs are covered in <a href="<?= url('guides/draw-through-vs-blow-through-fan-arrangement') ?>">draw-through vs blow-through</a>. Either way, leave adequate plenum length so the fan inlet or discharge does not distort airflow across the coil.</p>
<h3>6. Heat after cooling</h3>
<p>The heating or reheat coil follows the cooling coil so it can reheat dehumidified air. Putting the heating coil first would mean the cooling coil undoes any reheat. In heating-only operation, order does not matter thermally, but reheat needs to be downstream.</p>
<h3>7. Humidify warm air with space to absorb</h3>
<p>Humidifiers go downstream of the heating coil because warm air absorbs moisture faster and holds more. The humidifier also needs an absorption distance before anything that could collect water: coils, filters, fans, attenuator baffles or duct turns. That distance often sets the length of the section. Humidifier placement details are covered in the humidity category.</p>
<h3>8. Put final filters last, or nearly last</h3>
<p>High-efficiency final filters (MERV 14 and above, or HEPA in healthcare and labs) belong near the discharge so they catch anything shed by components upstream, including fan belt dust, coil fin debris and humidifier minerals. They must sit far enough past the humidifier that the media stays dry. In hospitals, ASHRAE 170 sets requirements for filter bank locations relative to the fan and coils; check the edition adopted in your jurisdiction.</p>
<h3>9. Attenuate at the outlet</h3>
<p>The sound attenuator goes at the discharge, after the fan and any components that also attenuate. Lined attenuators should not see wet air; packless attenuators are preferred where moisture or hygiene are concerns.</p>

<h2>Common variations</h2>
<table>
<thead><tr><th>Situation</th><th>How the sequence changes</th></tr></thead>
<tbody>
<tr><td>100% outdoor air unit</td><td>No mixing section; preheat moves first or right after prefilters</td></tr>
<tr><td>Blow-through multizone</td><td>Fan before a split into hot deck and cold deck coils in parallel</td></tr>
<tr><td>Hospital unit</td><td>Two filter banks: one upstream of coils, one downstream of the fan</td></tr>
<tr><td>Dehumidification with heat pipe</td><td>Pre-cool half of the heat pipe before the cooling coil, reheat half after it</td></tr>
<tr><td>Unit with face and bypass</td><td>Bypass damper and coil side by side within one section</td></tr>
<tr><td>Gas-fired makeup air</td><td>Burner typically after the fan for direct-fired; manufacturer arrangement for indirect-fired</td></tr>
</tbody>
</table>

<h2>A quick review procedure</h2>
<ol>
<li>Trace the airflow and note the temperature and humidity entering each component at summer, winter and shoulder conditions.</li>
<li>Flag any filter, liner or attenuator that sees air near saturation.</li>
<li>Flag any water coil that could see air below 35°F (2°C).</li>
<li>Check that there is clear distance downstream of every humidifier.</li>
<li>Confirm the relief path is upstream of the outdoor air intake.</li>
<li>Check that final filters are the last major component other than attenuation.</li>
<li>Check that each component has the access needed to inspect and clean it.</li>
</ol>
<?php guide_end([
    ['Should the heating coil be before or after the cooling coil?', 'Normally after. A heating coil downstream of the cooling coil can reheat dehumidified air. A preheat coil for freeze protection is a separate component that goes upstream of the cooling coil in cold climates.'],
    ['Where do final filters go in an air handler?', 'Final filters usually go near the discharge, after the fan, coils and humidifier, so they catch anything those components shed. They must be far enough downstream of the humidifier that the media stays dry.'],
    ['Why is the humidifier after the heating coil?', 'Warm air absorbs moisture more quickly and holds more of it, so placing the humidifier after the heating coil shortens the absorption distance and reduces the chance of wetting downstream components.'],
]);
