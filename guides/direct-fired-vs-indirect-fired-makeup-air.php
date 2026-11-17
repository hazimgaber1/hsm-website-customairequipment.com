<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('direct-fired-vs-indirect-fired-makeup-air'); ?>
<p class="lede">A direct-fired makeup air unit burns gas right in the airstream, so nearly all the fuel's heat ends up in the supply air along with the combustion products. An indirect-fired unit burns gas inside a heat exchanger and vents the flue gases outdoors. Direct-fired wins on efficiency and cost; indirect-fired wins where combustion products in the space are not acceptable or where the unit must recirculate air.</p>

<h2>How each works</h2>
<h3>Direct-fired</h3>
<p>A line burner sits across the airstream inside a profile plate that controls air velocity over the flame. Natural gas or propane burns in the outdoor air, and the hot combustion products, mainly carbon dioxide and water vapor with trace carbon monoxide and nitrogen dioxide, mix into the supply air. There is no flue and no heat exchanger. Because the combustion products enter the building, direct-fired units are designed to heat 100% outdoor air and to exhaust an equal amount from the space.</p>
<h3>Indirect-fired</h3>
<p>The burner fires into a sealed heat exchanger, typically a tubular or drum-and-tube design in aluminized or stainless steel. Supply air passes over the outside of the exchanger and picks up heat. Flue gases are drawn out by an inducer fan and vented outdoors through a flue. Combustion products never mix with the supply air, so the unit can recirculate room air and can serve occupied spaces without the limits that apply to direct firing.</p>

<h2>Comparison</h2>
<table>
<thead><tr><th>Factor</th><th>Direct-fired</th><th>Indirect-fired</th></tr></thead>
<tbody>
<tr><td>Thermal efficiency</td><td>Close to 100% of fuel heating value delivered to air (latent heat of combustion water vapor included in the supply)</td><td>Typically about 80% for non-condensing; higher for condensing designs</td></tr>
<tr><td>Combustion products in supply</td><td>Yes: CO₂, water vapor, trace CO and NO₂</td><td>No; vented through flue</td></tr>
<tr><td>Recirculation of room air</td><td>Limited or not permitted, depending on standard and listing</td><td>Permitted</td></tr>
<tr><td>Turndown</td><td>Wide, often 25:1 or more with modulating line burners</td><td>Narrower; limited by heat exchanger condensation and burner design</td></tr>
<tr><td>Flue and venting</td><td>None</td><td>Required, with clearances and termination rules</td></tr>
<tr><td>Heat exchanger maintenance and failure</td><td>Not applicable</td><td>Exchanger can crack over time; inspection needed</td></tr>
<tr><td>Added moisture</td><td>Yes; combustion water vapor raises supply humidity</td><td>No</td></tr>
<tr><td>First cost</td><td>Lower per unit of capacity</td><td>Higher</td></tr>
<tr><td>Typical use</td><td>Warehouses, factories, garages, kitchens with 100% exhaust balance</td><td>Occupied spaces needing recirculation, buildings where combustion products are restricted</td></tr>
</tbody>
</table>

<h2>Combustion products and code limits</h2>
<p>Direct-fired makeup air heaters are listed to product safety standards in North America, notably ANSI Z83.4/CSA 3.7 for non-recirculating direct gas-fired heaters and ANSI Z83.18 for recirculating designs. These standards set limits on concentrations of CO, CO₂ and NO₂ that the heater may add to the airstream, and they set requirements for safety controls, airflow proving and burner management.</p>
<p>Mechanical and fuel gas codes then limit where and how direct-fired heaters may be installed. Typical provisions include:</p>
<ul>
<li>Installation only where the space has exhaust equal to the makeup air, so combustion products do not accumulate.</li>
<li>Restrictions on serving sleeping areas or certain occupancies.</li>
<li>Requirements for airflow proving, high-limit controls and interlocks with exhaust.</li>
<li>Limits on recirculation, if allowed at all, to specific listed designs.</li>
</ul>
<p class="note">Specific concentration limits, permitted occupancies and recirculation allowances depend on the listing standard edition and the code adopted in your jurisdiction. Check both, and verify the unit's listing covers the intended use.</p>

<h2>Efficiency in context</h2>
<p>Direct-fired efficiency looks unbeatable, and on fuel input alone it is. Two caveats:</p>
<ol>
<li>The water vapor added to supply air raises indoor humidity. In winter, this is usually harmless or helpful; in a cold building with cold surfaces, it can add condensation risk, especially in large warehouses with metal roofs.</li>
<li>Because a direct-fired unit must exhaust as much as it supplies, it is only efficient as part of a system where that exhaust is already required (process exhaust, kitchen exhaust). Using a direct-fired unit to heat a building that does not need the exhaust wastes the heat in the exhaust.</li>
</ol>
<p>Indirect-fired efficiency is lower per unit of fuel but allows recirculation, so it can heat a space with less outdoor air. Condensing indirect-fired units narrow the efficiency gap further when return or mixed air temperatures are low enough for condensing.</p>

<h2>Turndown and control</h2>
<p>Direct-fired line burners modulate over a wide range, holding a steady discharge temperature even as outdoor temperature rises toward the setpoint. Indirect-fired units are limited because, at low firing rates, flue gases can cool enough to condense inside a non-condensing heat exchanger, causing corrosion. Many indirect-fired units have a minimum firing rate that can overheat discharge air on mild days, so staged or multiple heat exchangers are used for wide turndown.</p>

<h2>Choosing</h2>
<p>Choose direct-fired when:</p>
<ul>
<li>The building already exhausts large volumes of air for process, kitchen or vehicle exhaust, and needs equal tempered makeup air.</li>
<li>Combustion products are acceptable to code and to the occupancy.</li>
<li>Wide turndown and low first cost matter.</li>
</ul>
<p>Choose indirect-fired when:</p>
<ul>
<li>The unit must recirculate air to heat the space efficiently.</li>
<li>Combustion products or added moisture are unacceptable, such as in food processing, electronics, certain occupancies or where codes prohibit direct firing.</li>
<li>The unit serves occupied spaces with modest exhaust.</li>
</ul>
<p>Both types can be combined with cooling coils, filtration and controls in a custom makeup air unit. Sizing the airflow and heating load is covered in <a href="<?= url('guides/industrial-makeup-air-calculation') ?>">calculating industrial makeup air</a>. Kitchens are a common direct-fired application with their own sizing method in <a href="<?= url('guides/commercial-kitchen-makeup-air') ?>">commercial kitchen makeup air</a>, and electric alternatives to gas are discussed in <a href="<?= url('guides/open-coil-vs-finned-tubular-electric-heaters') ?>">open coil vs finned tubular electric heaters</a>.</p>
<?php guide_end([
    ['Is direct-fired makeup air safe?', 'Listed direct-fired heaters are designed and tested to limit combustion products added to the air, and codes require equal exhaust and safety interlocks. They are safe when applied within their listing and local code requirements.'],
    ['Can a direct-fired makeup air unit recirculate room air?', 'Most cannot, because combustion products would accumulate. Some listed designs allow limited recirculation under specific standards. Check the unit listing and local code before relying on recirculation.'],
    ['Why is indirect-fired makeup air less efficient?', 'Some heat leaves with the flue gases vented outdoors, so non-condensing units typically deliver about 80% of fuel energy to the air. Direct-fired units deliver nearly all of it because there is no flue.'],
]);
