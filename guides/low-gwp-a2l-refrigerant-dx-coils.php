<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('low-gwp-a2l-refrigerant-dx-coils'); ?>
<p class="lede">R-454B and R-32 replace R-410A in most new North American DX equipment because their global warming potential is far lower. Both are classed A2L (lower toxicity, lower flammability), so DX coils in air handlers now need attention to refrigerant charge, circuiting for the new fluid properties, and a leak detection and mitigation arrangement built into the unit.</p>

<h2>Why the refrigerant changed</h2>
<p>R-410A has a global warming potential (GWP) in the low thousands. Federal rules in the United States under the AIM Act and Canada's HFC regulations restrict high-GWP refrigerants in new comfort cooling equipment, with compliance dates that depend on equipment type and whether the system is factory-built or field-assembled. Check the current rules and dates that apply to the specific product category, since they have been phased and amended.</p>
<p>The two refrigerants most manufacturers have adopted for this class of equipment are:</p>
<table>
<thead><tr><th>Refrigerant</th><th>Composition</th><th>Approximate GWP</th><th>Safety class</th><th>Key traits</th></tr></thead>
<tbody>
<tr><td>R-410A</td><td>Blend of R-32 and R-125</td><td>about 2,000</td><td>A1</td><td>Being phased out of new comfort equipment</td></tr>
<tr><td>R-454B</td><td>Blend of R-32 and R-1234yf</td><td>about 470</td><td>A2L</td><td>Close to R-410A in pressure and capacity; small temperature glide</td></tr>
<tr><td>R-32</td><td>Single component</td><td>about 675</td><td>A2L</td><td>Higher capacity per unit volume; higher discharge temperature; no glide</td></tr>
</tbody>
</table>
<p>The safety class and GWP values are drawn from ASHRAE 34 classifications and IPCC assessment data; quoted GWP figures vary slightly depending on which assessment report is used.</p>

<h2>What A2L means for an air handler</h2>
<p>A2L refrigerants are hard to ignite and burn slowly compared with hydrocarbons, but they are flammable at certain concentrations in air. In a split system, the DX coil inside the air handler is usually the part of the refrigerant circuit closest to occupied space. If a coil leaks, refrigerant enters the airstream and can be carried into the building or pool in the unit casing when the fan is off.</p>
<p>Product safety standards for A2L equipment, principally UL 60335-2-40 and its Canadian equivalent CSA C22.2 No. 60335-2-40, address this by tying the allowable charge to the space served and requiring leak detection and mitigation above certain charge levels. The building code side, through ASHRAE 15 and CSA B52, sets system-level requirements. Those code requirements are covered in <a href="<?= url('guides/ashrae-15-csa-b52-refrigerant-safety') ?>">ASHRAE 15 and CSA B52 refrigerant safety</a>; this guide focuses on the coil and unit.</p>

<h2>Coil design changes</h2>
<h3>Charge reduction</h3>
<p>Because allowable charge is limited, designers look at internal volume. Smaller-diameter tubes (for example 3/8 in or 7 mm instead of 1/2 in) reduce the refrigerant held in the coil and can improve the inside heat transfer coefficient. Shorter liquid lines, appropriately sized distributors and headers, and avoiding oversizing the coil all help keep the total system charge within limits for the space.</p>
<h3>Circuiting and distribution</h3>
<p>R-454B behaves similarly enough to R-410A that circuiting principles carry over, but the coil must be re-rated with the new fluid. Its small temperature glide means the evaporating temperature rises slightly through the circuit; counterflow arrangement of refrigerant relative to air takes some advantage of that. R-32 has different mass flow and pressure drop characteristics, so distributor nozzles and tube counts need to be selected for it rather than copied from an R-410A design. Face split, row split and interlaced arrangements remain the same concepts; see <a href="<?= url('guides/dx-coil-circuiting-and-staging') ?>">DX coil circuiting and staging</a>.</p>
<h3>Materials and joints</h3>
<p>Fewer brazed joints inside the airstream means fewer leak points. Coil builders pay closer attention to brazing quality, leak testing with tracer gas or helium, and protecting joints from vibration. Mechanical joints inside the unit should be avoided where the listing does not permit them.</p>
<h3>Expansion devices</h3>
<p>Electronic expansion valves are common with A2L systems because they handle variable-speed compressors and the different properties well. Thermostatic expansion valves must be selected for the specific refrigerant.</p>

<h2>Leak detection and mitigation in the AHU</h2>
<p>For systems above the charge threshold set in the applicable standard, the unit typically requires:</p>
<ul>
<li><strong>A refrigerant detector</strong> listed for the refrigerant, located where leaked refrigerant would collect. A2L refrigerants are heavier than air, so sensors are usually low in the coil section or near the drain pan, as directed by the equipment listing.</li>
<li><strong>Mitigation actions</strong> on detection, commonly starting the supply fan to dilute and disperse the refrigerant, shutting down the compressor, and opening or closing dampers as required.</li>
<li><strong>Fan operation independent of normal controls</strong> so that a leak signal starts airflow even when the unit is off.</li>
<li><strong>Sensor maintenance</strong> and periodic verification as required by the manufacturer.</li>
</ul>
<p class="warn">Leak mitigation requirements depend on the listing of the complete system and the edition of the standards adopted locally. Coordinate the air handler's detection and mitigation with the condensing unit manufacturer and the authority having jurisdiction early, especially when pairing a custom AHU with a separately supplied condensing unit.</p>

<h2>Retrofits and existing coils</h2>
<p>An existing R-410A DX coil cannot simply be recharged with an A2L refrigerant. The coil was not rated, listed or leak-tested for the new fluid, and the system lacks the required detection. When a DX system is being replaced, the AHU coil normally changes with it, often along with sensors and controls. Coil replacement planning is covered in <a href="<?= url('guides/coil-replacement-retrofit') ?>">coil replacement in retrofits</a>.</p>

<h2>Checklist for A2L DX coils in custom AHUs</h2>
<ul>
<li>Coil rated with the actual refrigerant and matched to the condensing unit.</li>
<li>Total system charge calculated and compared with the allowable charge for the served space.</li>
<li>Detector type, location and quantity per the listing.</li>
<li>Mitigation sequence written and tested at factory and site.</li>
<li>Brazed joints minimized and leak-tested.</li>
<li>Labelling for A2L refrigerant on the unit.</li>
</ul>
<?php guide_end([
    ['What is an A2L refrigerant?', 'A2L is an ASHRAE 34 safety classification for refrigerants with lower toxicity and lower flammability. R-454B and R-32 are A2L refrigerants. They can burn under certain conditions, so equipment using them has charge limits and often requires leak detection and mitigation.'],
    ['Can an R-410A coil be used with R-454B?', 'Not as a simple swap. Even though pressures are similar, the coil must be rated, listed and leak-tested for the new refrigerant, and the system needs the leak detection and mitigation features the A2L standards require. Replacement systems normally include a new coil.'],
    ['Where is the refrigerant sensor placed in an air handler?', 'A2L refrigerants are heavier than air, so detectors are typically located low in the coil section or near the drain pan where leaked refrigerant would collect. The exact location and number are set by the equipment listing and manufacturer instructions.'],
]);
