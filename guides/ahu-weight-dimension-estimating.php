<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-weight-dimension-estimating'); ?>
<p class="lede">You can estimate an air handler's cross-section from airflow and the coil face velocity you intend to allow, its length by adding up typical section lengths for the components in sequence, and its weight from casing surface area plus allowances for the base, coils, fans and accessories; the result is good enough for early space planning and a first structural conversation.</p>

<h2>Step 1: Cross-section from airflow</h2>
<p>The cooling coil normally sets the cross-section because it has the lowest allowable face velocity in the unit. Start from the finned face area:</p>
<p class="formula">Coil face area (ft²) = CFM ÷ face velocity (fpm)</p>
<p>A face velocity of about 500 fpm (2.5 m/s) is a common upper guideline for cooling coils to limit moisture carryover; many energy-conscious designs use 400 to 450 fpm. Then choose a coil height and finned length that give that area and fit the room's proportions, and add allowances for coil casing, internal clearances and panels:</p>
<p class="formula">Casing outside width ≈ finned length + 2 × (side allowance) + 2 × (panel thickness)</p>
<p class="formula">Casing outside height ≈ fin height + top and bottom allowance + 2 × (panel thickness) + base frame height</p>
<p>Side and top allowances for coil casings, supports and drain pans vary by manufacturer; 4 to 8 in. (100 to 200 mm) per side is a reasonable early allowance. Base frames commonly add several inches. More on proportioning the cross-section is in <a href="<?= url('guides/ahu-cross-section-sizing') ?>">AHU cross-section sizing</a>.</p>

<h2>Step 2: Length from the component sequence</h2>
<p>List the sections in order and assign each a planning length. Values depend on size and manufacturer, so treat these as starting points to be replaced by real data as soon as possible.</p>
<table>
<thead><tr><th>Section</th><th>Planning length</th><th>What drives it</th></tr></thead>
<tbody>
<tr><td>Mixing box or economizer</td><td>3 to 5 ft (0.9 to 1.5 m)</td><td>Damper size, mixing devices</td></tr>
<tr><td>Flat or angled prefilter plus final filter</td><td>2 to 5 ft (0.6 to 1.5 m)</td><td>Filter depth, number of stages, access</td></tr>
<tr><td>Heating coil</td><td>1.5 to 3 ft (0.45 to 0.9 m)</td><td>Rows, access space</td></tr>
<tr><td>Cooling coil with drain pan</td><td>3 to 5 ft (0.9 to 1.5 m)</td><td>Rows, downstream drain pan extension</td></tr>
<tr><td>Fan array or plenum fan</td><td>4 to 7 ft (1.2 to 2.1 m)</td><td>Wheel size, inlet and discharge clearance</td></tr>
<tr><td>Access section</td><td>2 to 3 ft (0.6 to 0.9 m)</td><td>Service width</td></tr>
<tr><td>Sound attenuator</td><td>3 to 7 ft (0.9 to 2.1 m)</td><td>Insertion loss required</td></tr>
<tr><td>Humidifier with absorption distance</td><td>3 to 6 ft (0.9 to 1.8 m)</td><td>Dispersion type, absorption distance</td></tr>
<tr><td>Energy recovery wheel</td><td>3 to 4 ft (0.9 to 1.2 m) plus plenums</td><td>Wheel depth, purge, access</td></tr>
<tr><td>Discharge plenum</td><td>3 to 5 ft (0.9 to 1.5 m)</td><td>Duct connection size and location</td></tr>
</tbody>
</table>

<h2>Step 3: Weight from casing area and components</h2>
<p>Casing weight is roughly proportional to panel surface area. A 2 in. double-wall panel with 18 gauge galvanized outer skin, 20 gauge galvanized inner skin and mineral fibre insulation weighs roughly 4 to 5 lb/ft² (20 to 25 kg/m²); thicker panels or stainless liners weigh more. Add base frame and structural framing, then add components.</p>
<p class="formula">Casing area (ft²) ≈ 2 × (H × W) + 2 × (H × L) + 2 × (W × L)</p>
<p class="formula">Estimated weight ≈ casing area × panel weight + base and framing + Σ components</p>
<p>Component weights vary greatly with size and construction. Use manufacturer selection data for coils and fans as early as possible; for very early work, ask a manufacturer for representative values.</p>

<h2>Worked example: 30,000 CFM indoor unit</h2>
<p><strong>Cross-section.</strong> At 500 fpm, face area = 30,000 ÷ 500 = 60 ft² (5.6 m²). Choose a 6 ft finned height by 10 ft finned length. With 6 in. allowances each side and top/bottom plus 2 in. panels, the outside cross-section is about 7.3 ft high by 11.3 ft wide (2.2 × 3.4 m), before the base frame.</p>
<p><strong>Length.</strong> Mixing box 4 ft + filters 3 ft + heating coil 2 ft + cooling coil 4 ft + fan array 5 ft + discharge plenum 4 ft = 22 ft (6.7 m).</p>
<p><strong>Casing area.</strong> 2 × (7.3 × 11.3) + 2 × (7.3 × 22) + 2 × (11.3 × 22) = 165 + 321 + 497 = 983 ft².</p>
<p><strong>Weights.</strong></p>
<ul>
<li>Casing: 983 × 4.3 lb/ft² ≈ 4,230 lb</li>
<li>Base frame and framing allowance: 2,000 lb</li>
<li>Cooling coil (dry), example allowance: 1,200 lb</li>
<li>Heating coil (dry), example allowance: 450 lb</li>
<li>Fan array, four modules, example allowance: 2,400 lb</li>
<li>Dampers, filters and racks: 800 lb</li>
</ul>
<p>Estimated dry weight ≈ 11,080 lb (about 5,000 kg). Add the water held in the coils, a few hundred pounds here, for operating weight. Round up and carry a margin in early structural discussions; the structural review itself is covered in the <a href="<?= url('guides/structural-review-replacement-checklist') ?>">structural review checklist for replacement units</a>.</p>
<p class="note">At 400 fpm instead of 500 fpm, the face area becomes 75 ft², the cross-section grows, and casing weight rises with it. Running the estimate at both velocities shows the space and weight cost of lower velocity early in design.</p>

<h2>Checking and refining the estimate</h2>
<ul>
<li>Add shipping splits early. Splits add frame members and weight, and determine the maximum piece for rigging.</li>
<li>Add service clearances to the footprint: coil pull space, door swing and filter access on the service side.</li>
<li>Replace planning values with manufacturer data as soon as a preliminary selection is available.</li>
<li>For outdoor units, add roof, weatherhoods and heavier base construction.</li>
<li>Track the estimate through design. Added energy recovery or sound attenuation late in design can change length and weight considerably.</li>
</ul>
<p>Manufacturer BIM models give accurate geometry once a selection exists; see <a href="<?= url('guides/using-manufacturer-bim-models') ?>">how to use manufacturer BIM and Revit models for AHUs</a>.</p>
<?php guide_end([
    ['How do I estimate the size of an air handler from airflow?', 'Divide airflow by the allowed cooling coil face velocity to get coil face area, choose a height and width, then add casing allowances. For length, add planning lengths for each section in sequence.'],
    ['How much does a 30,000 CFM air handler weigh?', 'It varies with construction and components, but a typical indoor custom unit with coils and a fan array might fall around 10,000 to 12,000 lb dry in an early estimate. Use manufacturer data once a selection exists.'],
    ['What face velocity should I use for early AHU sizing?', 'Many designers use about 500 fpm as an upper limit for cooling coils, and 400 to 450 fpm when energy and carryover margin are priorities. Lower velocity gives a larger cross-section and heavier unit.'],
]);
