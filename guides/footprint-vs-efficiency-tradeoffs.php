<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('footprint-vs-efficiency-tradeoffs'); ?>
<p class="lede">A compact air handler pushes more air through a smaller cross-section, which saves floor space and first cost but raises coil, filter and casing pressure drops and therefore fan energy; a larger low-velocity unit costs more space and more steel up front but runs with less resistance, quieter operation and more margin against moisture carryover.</p>

<h2>Why velocity drives pressure drop</h2>
<p>The pressure drop across coils, filters and dampers rises roughly with the square of face velocity for turbulent flow, and somewhat less steeply for filters, which behave partly in the laminar range. Halving the cross-section to double velocity can therefore multiply component pressure drops by a large factor. Since fan power is proportional to airflow times total pressure, every in. w.c. of internal resistance shows up directly in fan energy.</p>
<p class="formula">Air power (hp) = CFM × TSP (in. w.c.) ÷ 6356</p>
<p class="formula">Component ΔP₂ ≈ ΔP₁ × (V₂ ÷ V₁)ⁿ, with n near 2 for coils and dampers, lower for many filters</p>

<h2>Side-by-side comparison</h2>
<p>Two units for 40,000 CFM (18.9 m³/s), same coils by row count and fin spacing, same filters and same external static of 2.0 in. w.c. (500 Pa). Values are illustrative.</p>
<table>
<thead><tr><th>Factor</th><th>Compact (about 550 fpm coil face)</th><th>Low-velocity (about 400 fpm coil face)</th></tr></thead>
<tbody>
<tr><td>Coil face area</td><td>about 73 ft² (6.8 m²)</td><td>100 ft² (9.3 m²)</td></tr>
<tr><td>Cross-section</td><td>Smaller; fits tighter rooms and shafts</td><td>Roughly 38% more face area; taller or wider</td></tr>
<tr><td>Internal pressure drop (coils, filters, casing)</td><td>Higher</td><td>Lower</td></tr>
<tr><td>Fan energy</td><td>Higher at every operating point</td><td>Lower</td></tr>
<tr><td>Moisture carryover risk at cooling coil</td><td>Higher; may need eliminators</td><td>Lower</td></tr>
<tr><td>Sound</td><td>Higher fan speed and regenerated noise</td><td>Lower fan speed, quieter</td></tr>
<tr><td>Filter life</td><td>Faster loading per unit area</td><td>Slower loading, longer intervals</td></tr>
<tr><td>Casing and steel</td><td>Less</td><td>More</td></tr>
<tr><td>Mechanical room space</td><td>Less</td><td>More</td></tr>
<tr><td>Structural load</td><td>Lower</td><td>Higher</td></tr>
<tr><td>Energy code fan power compliance</td><td>Harder</td><td>Easier</td></tr>
</tbody>
</table>

<h2>Putting numbers on the energy difference</h2>
<p>Suppose the compact unit's internal pressure drop at design is 2.4 in. w.c. and the low-velocity unit's is 1.6 in. w.c. With 2.0 in. w.c. external static, total static is 4.4 versus 3.6 in. w.c.</p>
<p>Air power, compact: 40,000 × 4.4 ÷ 6356 = 27.7 hp.</p>
<p>Air power, low-velocity: 40,000 × 3.6 ÷ 6356 = 22.7 hp.</p>
<p>At a fan and motor combined efficiency of, say, 60% for both, input power is about 34.4 kW versus 28.2 kW (using 0.746 kW/hp). The difference, around 6 kW at design, shrinks at part load in a VAV system because internal drops fall with the square of airflow, but it persists at every point. Converting that into annual energy needs a load profile; the method is in <a href="<?= url('guides/comparing-fan-energy-between-bids') ?>">comparing fan energy between AHU bids</a>. Whether that energy pays for the larger unit over its life is a separate calculation, set out in <a href="<?= url('guides/ahu-life-cycle-cost-analysis') ?>">AHU life-cycle cost analysis</a>.</p>
<p class="note">Larger units can also allow a lower-speed, larger fan wheel or a fan array with more modules, which often improves fan efficiency as well as reducing pressure drop.</p>

<h2>Where compact units make sense</h2>
<ul>
<li>Retrofits where the existing room or access route sets the maximum size.</li>
<li>High-value floor area, where mechanical space displaces rentable or program space.</li>
<li>Units with short annual operating hours, where energy savings are small.</li>
<li>Rooftop units constrained by roof structure or curb size.</li>
<li>Systems with low design airflow fraction most of the year, where internal losses at part load are modest.</li>
</ul>

<h2>Where low-velocity units make sense</h2>
<ul>
<li>Long operating hours: hospitals, labs, data centres, 24/7 facilities.</li>
<li>High outdoor air fractions with heavy dehumidification loads, where carryover margin matters.</li>
<li>Acoustically sensitive applications.</li>
<li>Owners with energy or carbon targets, or where fan power limits in the energy code are tight; see <a href="<?= url('guides/ashrae-90-1-fan-power-limitation') ?>">ASHRAE 90.1 fan power limitation</a>.</li>
<li>New construction where space can be planned around the unit from the start.</li>
</ul>

<h2>Space cost versus energy cost</h2>
<p>The comparison becomes clearer when space is given a value. If mechanical room area displaces leasable space, the developer can put a number on each square foot. If the building's footprint is fixed, a larger unit may force a deeper mechanical room or move equipment to the roof. Set the space value alongside the annual energy difference and the first-cost difference, and the decision is usually obvious one way or the other. Where it is close, acoustic performance, carryover margin and maintenance access tend to tip it toward the larger unit.</p>

<h2>Middle-ground approaches</h2>
<p>The choice is not binary. Common compromises:</p>
<ul>
<li><strong>Size the cooling coil for low velocity and let other sections run faster,</strong> if casing geometry allows transitions.</li>
<li><strong>Use deeper filters</strong> with more media area in a compact cross-section.</li>
<li><strong>Use a fan array</strong> in a compact casing to recover some efficiency through shorter fan sections and better discharge distribution.</li>
<li><strong>Increase height rather than width,</strong> which can fit a larger face area into a narrow room.</li>
<li><strong>Reduce component count</strong> by combining functions, for example a single coil serving both preheat and reheat duty where the sequence allows, which recovers length that can be spent on a lower-velocity cross-section.</li>
</ul>
<p>Custom units can be proportioned to whatever cross-section fits the space; a <a href="<?= url('products/custom-air-handlers') ?>">custom air handler</a> lets the designer choose the velocity rather than accept a catalog size.</p>
<?php guide_end([
    ['Do larger air handlers use less energy?', 'Generally yes, at the same airflow. A larger cross-section lowers face velocity through coils and filters, which reduces internal pressure drop and fan energy. The trade-off is more space, steel and first cost.'],
    ['What is a good coil face velocity for energy efficiency?', 'Many energy-focused designs use about 400 to 450 fpm for cooling coils, below the common 500 fpm upper guideline. Lower velocity reduces pressure drop and carryover risk but increases unit size.'],
    ['When is a compact AHU the better choice?', 'Compact units suit retrofits with fixed space, high-value floor area, short operating hours and roof structures with limited capacity. In those cases the space saving can outweigh the energy penalty.'],
]);
