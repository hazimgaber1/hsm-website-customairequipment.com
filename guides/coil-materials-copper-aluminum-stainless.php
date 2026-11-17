<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('coil-materials-copper-aluminum-stainless'); ?>
<p class="lede">Copper tubes with aluminum fins remain the default for comfort HVAC coils because they offer the best heat transfer for the money. Copper fins, stainless steel tubes or fins, and cupronickel (90/10 Cu-Ni) tubes are chosen when corrosion, steam service, hygiene or water chemistry would shorten the life of the standard combination.</p>

<h2>The standard combination: copper tube, aluminum fin</h2>
<p>A copper tube expanded mechanically into aluminum fin collars gives a tight metal-to-metal bond, high thermal conductivity on both sides and low weight. Copper has excellent conductivity and is easy to braze, bend and repair. Aluminum fins are light, cheap and conduct well enough that fin efficiency stays high at normal fin heights.</p>
<p>The weak point is the junction of two dissimilar metals. In a wet, salty or polluted atmosphere, the aluminum fin acts as the anode in a galvanic couple with the copper tube and corrodes preferentially at the collar. Once the fin collar corrodes, contact with the tube is lost and heat transfer drops even though the fin looks intact from the face.</p>

<h2>Options for tube and fin</h2>
<h3>Copper fins on copper tubes</h3>
<p>All-copper coils eliminate the galvanic couple and are more resistant in coastal and many industrial atmospheres. They are heavier and more expensive, and copper is attacked by ammonia and some sulfur compounds, so they are not a universal answer.</p>
<h3>Stainless steel tubes</h3>
<p>Type 304 or 316 stainless tubes are used where the fluid or the hygiene requirements rule out copper: certain process fluids, deionized water, food and pharmaceutical cleaning regimes, and some ammonia refrigeration coils. Stainless has much lower thermal conductivity than copper (roughly one twentieth), so the tube wall resistance becomes noticeable, and the coil needs more surface for the same capacity. Stainless tubes are also harder to expand into fins and to repair in the field.</p>
<h3>Stainless steel fins</h3>
<p>Stainless fins on stainless tubes make a fully stainless coil for washdown, high-humidity process and aggressive chemical environments. Fin efficiency is low because of stainless steel's poor conductivity, so fins are kept short or thicker, and capacity per row is significantly lower than copper-aluminum.</p>
<h3>Cupronickel (90/10) tubes</h3>
<p>90/10 copper-nickel tubes resist erosion and corrosion from high-velocity water, steam condensate and seawater better than plain copper. They are a common choice for steam coils, for coils on open cooling tower water, and in marine environments. Conductivity is lower than copper but still far better than stainless.</p>
<h3>Aluminum tubes</h3>
<p>All-aluminum coils, including microchannel designs, are common in packaged DX equipment. In custom AHUs they appear mostly in DX and heat-pipe applications. They avoid galvanic action between tube and fin but need careful attention to water chemistry if used with hydronic fluids.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Combination</th><th>Relative heat transfer</th><th>Corrosion strengths</th><th>Watch out for</th><th>Typical use</th></tr></thead>
<tbody>
<tr><td>Cu tube / Al fin</td><td>Highest per dollar</td><td>Good in clean indoor air</td><td>Galvanic attack at fin collars in coastal or industrial air</td><td>Comfort HVAC</td></tr>
<tr><td>Cu tube / Cu fin</td><td>High</td><td>No galvanic couple; better in marine air</td><td>Ammonia, sulfur compounds; weight and cost</td><td>Coastal sites, some industrial</td></tr>
<tr><td>Cu-Ni tube / Al or Cu fin</td><td>High</td><td>Erosion and condensate resistance</td><td>Cost; fin still governs atmospheric resistance</td><td>Steam, tower water, marine</td></tr>
<tr><td>Stainless tube / Al fin</td><td>Moderate</td><td>Fluid-side resistance</td><td>Galvanic couple on air side; lower conductivity</td><td>Process fluids, DI water</td></tr>
<tr><td>Stainless tube / stainless fin</td><td>Lowest</td><td>Washdown, chemicals, hygienic duty</td><td>Much more surface needed; weight; cost</td><td>Food, pharma, corrosive process</td></tr>
</tbody>
</table>

<h2>Tube wall thickness</h2>
<p>Standard copper tubes in comfort coils often have walls around 0.016 to 0.020 in (0.41 to 0.51 mm). Heavier walls, 0.025 in (0.64 mm) or more, are specified for steam, high-pressure service, high-velocity water and owners who want a longer erosion margin. A heavier wall has a minor effect on heat transfer but a real effect on life in demanding service. Return bends deserve the same thickness; they are where erosion usually shows first.</p>

<h2>Casings and headers</h2>
<p>Coil casings (the end plates and top and bottom channels) come in galvanized steel, aluminum and stainless steel. Galvanized casings on cooling coils sit in a wet environment and can corrode long before the tubes do, staining drain pans and shedding rust. Stainless coil casings are a common upgrade on cooling coils for that reason. Headers are usually copper or, for steam and high-pressure duty, steel or Cu-Ni; connections should be compatible with the field piping material to avoid galvanic attack at the joint.</p>

<h2>Choosing the right combination</h2>
<ol>
<li>Identify the air-side environment: clean indoor, coastal, industrial with sulfur or chlorine compounds, washdown.</li>
<li>Identify the fluid: treated closed-loop water, glycol, steam, open tower water, process fluid, refrigerant.</li>
<li>Choose the tube material for the fluid and the fin material for the air environment.</li>
<li>Check the capacity penalty for any lower-conductivity material and resize the coil.</li>
<li>Decide whether an applied coating can deliver the needed corrosion resistance at lower cost than a material change; coatings are compared in <a href="<?= url('guides/coil-coatings-corrosion-protection') ?>">coil coatings for corrosion protection</a>.</li>
</ol>
<p class="note">In washdown and process facilities, the coil is only one of many materials exposed. The surrounding unit construction matters as much; see <a href="<?= url('guides/washdown-ahu-construction-checklist') ?>">washdown AHU construction</a> and <a href="<?= url('guides/casing-materials-galvanized-stainless-aluminum') ?>">casing materials</a> for the rest of the unit.</p>
<?php guide_end([
    ['Are copper fin coils better than aluminum fin coils?', 'Copper fins avoid the galvanic couple between copper tubes and aluminum fins, so they last longer in coastal and some industrial atmospheres. They cost and weigh more and are not suitable where ammonia or certain sulfur compounds are present. In clean indoor air, aluminum fins perform well.'],
    ['When should I use stainless steel coils?', 'Stainless tubes suit fluids that attack copper, deionized water and hygienic process duties. Fully stainless coils suit washdown and chemical environments. Stainless conducts heat poorly, so the coil needs considerably more surface for the same capacity.'],
    ['Why use cupronickel tubes in a steam coil?', 'Steam condensate and high-velocity water can erode and corrode plain copper tubes, especially at return bends. 90/10 copper-nickel tubes resist that erosion and corrosion while keeping reasonable thermal conductivity.'],
]);
