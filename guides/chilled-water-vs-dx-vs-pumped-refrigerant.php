<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('chilled-water-vs-dx-vs-pumped-refrigerant'); ?>
<p class="lede">Chilled water plants are the most efficient and scalable option for large data centers, especially with waterside economizers, but water-cooled versions consume water. DX systems are simple, modular and waterless, but usually less efficient. Pumped refrigerant economizers add compressor-free operation to DX in cool weather without using water, closing much of the efficiency gap in cold and moderate climates.</p>

<h2>How each medium works</h2>
<h3>Chilled water</h3>
<p>A central plant of chillers produces chilled water that is pumped to coils in air handlers, fan walls or CRAH units. Heat is rejected by cooling towers (water-cooled chillers) or by air-cooled condensers on the chillers themselves. A waterside economizer, using a plate heat exchanger with cooling towers or dry coolers, can produce chilled water without compressors when outdoor conditions allow. Data center plants increasingly use elevated chilled water temperatures, which raise chiller efficiency and economizer hours.</p>
<h3>Direct expansion (DX)</h3>
<p>Each cooling unit contains its own refrigeration circuit: compressor, evaporator coil, expansion device and a remote or integral condenser. Heat is rejected to outdoor air, so no water is consumed in the cooling process. Capacity is added unit by unit.</p>
<h3>Pumped refrigerant economizer</h3>
<p>A DX system with an additional refrigerant pump. When outdoor air is cold enough, compressors shut off and the pump circulates liquid refrigerant between the indoor evaporator and the outdoor condenser. The refrigerant evaporates indoors and condenses outdoors, moving heat with only pump and fan energy. In between, the system can run partly on the pump and partly on compressors.</p>

<h2>Comparison</h2>
<table>
<thead><tr><th>Factor</th><th>Chilled water (water-cooled)</th><th>Chilled water (air-cooled with free cooling)</th><th>DX (air-cooled)</th><th>DX with pumped refrigerant economizer</th></tr></thead>
<tbody>
<tr><td>Full-load efficiency</td><td>Highest</td><td>Moderate to high</td><td>Lower</td><td>Similar to DX at full load</td></tr>
<tr><td>Annual efficiency in cool climates</td><td>High, with waterside economizer</td><td>High, with free cooling coils</td><td>Lowest without economizer</td><td>High; compressor-free for much of the year</td></tr>
<tr><td>Water consumption</td><td>Significant (tower evaporation and blowdown)</td><td>Minimal</td><td>None for cooling</td><td>None for cooling</td></tr>
<tr><td>Scalability</td><td>Excellent at large scale; plant built in blocks</td><td>Good; modular chillers</td><td>Good at small to medium scale</td><td>Good at small to medium scale</td></tr>
<tr><td>Water or refrigerant in white space</td><td>Water piping to coils</td><td>Water or glycol piping to coils</td><td>Refrigerant piping to each unit</td><td>Refrigerant piping to each unit</td></tr>
<tr><td>Failure domain</td><td>Central plant; needs redundant paths</td><td>Central plant or modular</td><td>Each unit independent</td><td>Each unit independent</td></tr>
<tr><td>Thermal storage option</td><td>Chilled water tanks easily added</td><td>Chilled water tanks easily added</td><td>Not practical</td><td>Not practical</td></tr>
<tr><td>Operations skill required</td><td>Highest: plant operators, water treatment</td><td>Moderate</td><td>Lower</td><td>Lower to moderate</td></tr>
</tbody>
</table>

<h2>Efficiency</h2>
<p>Large water-cooled chillers operating at elevated chilled water temperatures, with cooling towers and waterside economizers, generally offer the lowest compressor energy per ton. Air-cooled chillers lose some full-load efficiency because they reject heat at dry-bulb rather than wet-bulb temperature, but with integrated free cooling coils they can avoid compressor operation for many hours in cool climates. DX units without economizers run compressors whenever there is load, so their annual efficiency depends strongly on climate and on compressor technology such as variable speed. Pumped refrigerant economizers change that by letting DX units run compressor-free in cool weather.</p>
<p>The effect on the cooling share of PUE is calculated by mode and hour in <a href="<?= url('guides/pue-cooling-contribution') ?>">calculating the cooling system's contribution to PUE</a>.</p>

<h2>Water use</h2>
<p>Water-cooled plants evaporate water in cooling towers, and blowdown to control dissolved solids adds to it. In water-stressed regions, or where municipalities limit industrial water use, this can be decisive. Air-cooled chillers, DX and pumped refrigerant systems use no water for heat rejection, though some sites add adiabatic precooling to condensers for peak days. WUE quantifies this trade-off; see <a href="<?= url('guides/water-usage-effectiveness') ?>">calculating water usage effectiveness</a>.</p>
<p class="note">Lower water use often comes with higher electricity use. Evaluate both together, including the water consumed in generating electricity if the owner reports it.</p>

<h2>Scalability and phasing</h2>
<p>Chilled water plants scale well for large facilities but carry a large upfront investment in the central plant and distribution piping, even if chillers are added in phases. DX and pumped refrigerant systems scale unit by unit, which suits facilities that grow gradually or have many small rooms. Very large hyperscale facilities overwhelmingly use chilled water or water-based systems because of efficiency at scale and compatibility with liquid cooling.</p>
<p>Liquid cooling for high-density racks connects naturally to a chilled or warm water plant through coolant distribution units. DX systems do not provide a water loop for that purpose, so a facility planning significant liquid cooling usually needs some water-based plant regardless.</p>

<h2>Refrigerant considerations</h2>
<p>DX and pumped refrigerant systems distribute refrigerant through the building to each unit. Regulations in the U.S. and Canada are phasing down high-GWP HFC refrigerants, and many new systems use lower-GWP A2L refrigerants, which are mildly flammable. That brings requirements under ASHRAE 15 and CSA B52 for charge limits, leak detection and ventilation, explained in <a href="<?= url('guides/ashrae-15-csa-b52-refrigerant-safety') ?>">ASHRAE 15 and CSA B52 refrigerant safety</a>. Chilled water systems confine refrigerant to the plant, which simplifies compliance in the white space.</p>

<h2>Choosing</h2>
<ul>
<li><strong>Water-cooled chilled water</strong> for large facilities where water is available and efficiency is the top priority.</li>
<li><strong>Air-cooled chilled water with free cooling</strong> for large or medium facilities that need to minimize water use and want a water loop for liquid cooling.</li>
<li><strong>DX</strong> for small rooms, edge sites and quick deployments with limited operations staff.</li>
<li><strong>DX with pumped refrigerant economizer</strong> for small to medium facilities in cool and moderate climates that want good annual efficiency without water.</li>
</ul>
<?php guide_end([
    ['Is chilled water more efficient than DX for data centers?', 'At large scale, usually yes, particularly water-cooled plants with waterside economizers and elevated chilled water temperatures. DX with a pumped refrigerant economizer can approach chilled water efficiency in cool climates.'],
    ['What is a pumped refrigerant economizer?', 'It is a DX system with a refrigerant pump. In cool weather, compressors turn off and the pump circulates refrigerant between the indoor coil and outdoor condenser, moving heat with only pump and fan energy.'],
    ['Which data center cooling medium uses the least water?', 'Air-cooled systems, including DX, pumped refrigerant and air-cooled chillers, use no water for heat rejection. Water-cooled chilled water plants consume water through cooling tower evaporation and blowdown.'],
]);
