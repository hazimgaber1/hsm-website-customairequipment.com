<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-cross-section-sizing'); ?>
<p class="lede">An AHU's width and height are set by whichever component needs the largest face area at its maximum allowable velocity, usually the cooling coil at about 500 fpm (2.5 m/s). Divide design airflow by that velocity to get the required face area, fit a practical coil or filter layout to that area, then add frame, drain pan and casing allowances to get the outside dimensions.</p>

<h2>The basic relationship</h2>
<p class="formula">Face area (ft²) = CFM ÷ face velocity (fpm)</p>
<p>In SI: face area (m²) = airflow (m³/s) ÷ velocity (m/s).</p>
<p>Every component in the airstream has its own comfortable velocity range. The cross-section of the unit must be at least as large as the face area needed by the most restrictive component, since all components share the same casing interior unless the casing steps in size between sections.</p>

<h2>Typical face velocity targets</h2>
<table>
<thead><tr><th>Component</th><th>Common design target</th><th>What limits it</th></tr></thead>
<tbody>
<tr><td>Cooling coil (dehumidifying)</td><td>About 450 to 500 fpm (2.3 to 2.5 m/s)</td><td>Moisture carryover and pressure drop</td></tr>
<tr><td>Heating coil (dry)</td><td>Up to about 600 to 700 fpm</td><td>Pressure drop</td></tr>
<tr><td>Pleated and rigid filters</td><td>About 300 to 500 fpm</td><td>Pressure drop, rated efficiency and media life</td></tr>
<tr><td>HEPA filters</td><td>About 250 to 300 fpm, often lower</td><td>Rated airflow per filter</td></tr>
<tr><td>Energy recovery wheel</td><td>Commonly 400 to 800 fpm</td><td>Effectiveness and pressure drop</td></tr>
<tr><td>Dampers</td><td>Higher; often 1,000 fpm or more</td><td>Rarely governs cross-section</td></tr>
</tbody>
</table>
<p>These are design practice ranges, not code limits. Coil moisture carryover depends on fin type, coating and drain pan arrangement, and is covered in <a href="<?= url('guides/cooling-coil-face-velocity-moisture-carryover') ?>">cooling coil face velocity and carryover</a>. Energy codes may effectively push face velocities lower by limiting fan power, so lower velocities are increasingly common.</p>

<h2>Worked example: 20,000 cfm unit</h2>
<h3>Step 1: required coil face area</h3>
<p>Design airflow 20,000 cfm (9,440 L/s), cooling coil target 500 fpm.</p>
<p class="formula">Coil face area = 20,000 ÷ 500 = 40.0 ft² (3.72 m²)</p>
<h3>Step 2: fit a coil to that area</h3>
<p>Coil face height comes in steps tied to tube spacing, and coil length can vary more freely. Suppose a single coil with a 66 in finned height and an 88 in finned length:</p>
<p class="formula">66 × 88 ÷ 144 = 40.3 ft² → 20,000 ÷ 40.3 = 496 fpm ✓</p>
<p>If the room height is limited, choose a shorter, wider coil, for example 54 in × 108 in = 40.5 ft². A coil taller than about 48 in to 60 in may be split into two stacked coils, each with its own drain pan or an intermediate pan.</p>
<h3>Step 3: check the filter bank</h3>
<p>Standard 24 in × 24 in filters are 4 ft² each. Arranging them three high and four wide gives a bank about 72 in × 96 in, 12 filters, 48 ft² of face:</p>
<p class="formula">20,000 ÷ 48 = 417 fpm ✓</p>
<p>The filter bank is larger than the coil, so it needs about 72 in × 96 in of clear interior plus frame width. That may make the filter, not the coil, the governing component.</p>
<h3>Step 4: set the interior dimensions</h3>
<p>Take the larger of the coil and filter requirements in each direction, then add allowances:</p>
<ul>
<li>Coil casing and headers: several inches on the header side; less on the opposite side.</li>
<li>Drain pan and coil support below the coil: depth depends on pan design, commonly several inches.</li>
<li>Filter frame perimeter: a few inches around the bank.</li>
</ul>
<p>In this example, the filter bank governs height (72 in plus frame) and width (96 in plus frame). An interior of about 78 in high × 102 in wide accommodates the filters, and the 66 × 88 coil fits inside with room for headers and the pan.</p>
<h3>Step 5: add casing and base</h3>
<p>Outside dimensions add two panel thicknesses in width and height (2 in or 4 in each), plus the base frame height. With 2 in panels and a 6 in base, this unit would be about 102 + 4 = 106 in wide and 78 + 4 + 6 = 88 in tall. Every manufacturer's allowances differ, so treat these as estimates until a selection is run.</p>

<h2>When sections have different cross-sections</h2>
<p>A unit does not have to be one constant size. Custom units sometimes step up in size at the filter bank to reduce velocity, or step down at a fan section where the fan needs less area. Transitions cost length and some pressure, but they can be worthwhile when one component is far more restrictive than the others. Fan arrays also influence the cross-section: the number and size of fans that fit a given face drive the choice, covered in <a href="<?= url('guides/fan-array-number-of-fans') ?>">choosing the number of fans in an array</a>.</p>

<h2>Lower velocity, bigger box: the tradeoff</h2>
<p>Lowering coil face velocity from 500 fpm to 400 fpm increases face area by 25%. Pressure drop through the coil falls roughly with the square of velocity, so its share of static pressure drops by around a third, cutting fan energy over the life of the unit. The cost is a larger, heavier, more expensive casing and more floor space. The economic balance is discussed in <a href="<?= url('guides/footprint-vs-efficiency-tradeoffs') ?>">footprint vs efficiency tradeoffs</a>.</p>
<p class="note">At reduced VAV airflow, face velocity drops in proportion. A unit sized at 500 fpm runs at 250 fpm at half flow, which is good for pressure drop and carryover.</p>
<h2>Checking the result against the room</h2>
<p>Before accepting a cross-section, check it against the mechanical room and the shipping route. Height is usually the tighter dimension indoors, because base, pad, overhead duct connections and top-mounted dampers stack on top of the casing height. If the computed section is too tall, change the coil aspect ratio, split the coil into two side-by-side sections, or lower the face velocity target on the filters only by stepping the casing wider at the filter bank. Width is often limited by truck width for factory-assembled sections, about 8.5 ft for legal loads, which can push large units toward stacked arrangements or wider permitted loads.</p>
<?php guide_end([
    ['What face velocity should I use to size an AHU?', 'Most comfort cooling units are sized on cooling coil face velocity of about 450 to 500 fpm. Filters and energy recovery devices can govern instead, so check each component. Lower velocities reduce energy use but increase unit size.'],
    ['How do I calculate coil face area?', 'Divide the design airflow in cfm by the target face velocity in fpm. For 20,000 cfm at 500 fpm, the coil needs 40 square feet of finned face area.'],
    ['Why is my filter bank larger than my coil?', 'Filters come in fixed modular sizes and often have a lower design velocity than coils. The filter layout that fits the airflow at an acceptable velocity is frequently larger than the coil, so it sets the unit cross-section.'],
]);
