<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('casing-panel-deflection-calculation'); ?>
<p class="lede">To check a casing panel against an L/240 limit, convert the section's design pressure to a uniform load, model the panel as a simply supported sandwich beam spanning between frame members, add bending and core-shear deflection, and compare the total with the span divided by 240. A 2 in foam panel spanning 48 in at 6 in. w.c. deflects roughly 0.09 in, comfortably inside the 0.20 in allowed.</p>

<h2>What the L/240 limit means</h2>
<p>A deflection limit of L/240 says the panel's mid-span movement under load may not exceed its span divided by 240. On a 48 in (1,220 mm) span, that is 0.20 in (5 mm). Specifications usually apply the limit at the section's design pressure or at a stated multiple of it, and separately for positive and negative pressure. The purpose is practical: a panel that bows too far pulls gaskets away from joints, increases leakage, drums audibly and can crack sealant or paint.</p>
<p>The section pressure that goes into the calculation comes from the fan and system design. Setting that pressure is covered in <a href="<?= url('guides/casing-pressure-class-positive-negative') ?>">casing pressure ratings</a>; here it is an input.</p>

<h2>Step 1: convert pressure to load</h2>
<p class="formula">1 in. w.c. = 5.20 lb/ft² = 0.0361 psi (249 Pa)</p>
<p>At 6 in. w.c.: 6 × 5.20 = 31.2 lb/ft², or 0.217 psi. For a strip of panel 1 in wide, the uniform load is w = 0.217 lb/in along the span.</p>

<h2>Step 2: choose the structural model</h2>
<p>Most panels span one way between frame posts or rails, with the other edges free to move relative to the load or much farther apart. Model a 1 in wide strip as a simply supported beam. This is slightly conservative where panel edges have some fixity, and unconservative if the frame members themselves deflect, so check frame members separately.</p>
<p>For a foam-core sandwich panel, the two metal skins carry bending as flanges and the bonded foam core carries shear. Deflection has two parts:</p>
<p class="formula">δ bending = 5 × w × L⁴ ÷ (384 × E × I)</p>
<p class="formula">δ shear = w × L² ÷ (8 × S)</p>
<p>where E is the skin modulus (29,000,000 psi for steel), I is the moment of inertia of the two skins about the panel's neutral axis per inch of width, and S is the core shear stiffness per inch of width, approximately G × d² ÷ c, with G the core shear modulus, d the distance between skin centrelines and c the core thickness.</p>

<h2>Step 3: worked example, 2 in foam panel</h2>
<p>Assumptions: outer skin 0.052 in galvanized steel, inner liner 0.034 in, overall 2.0 in, polyurethane core with an assumed shear modulus of 400 psi, span 48 in, design pressure 6 in. w.c.</p>
<ol>
<li><strong>Skin spacing:</strong> d = 2.0 − (0.052 + 0.034) ÷ 2 = 1.957 in. Core c = 2.0 − 0.086 = 1.914 in.</li>
<li><strong>Neutral axis</strong> from the outer skin centreline: 0.034 × 1.957 ÷ 0.086 = 0.774 in.</li>
<li><strong>Moment of inertia</strong> per inch: 0.052 × 0.774² + 0.034 × (1.957 − 0.774)² = 0.0311 + 0.0476 = 0.0787 in⁴/in.</li>
<li><strong>Bending deflection:</strong> 5 × 0.217 × 48⁴ ÷ (384 × 29,000,000 × 0.0787) = 0.007 in.</li>
<li><strong>Shear stiffness:</strong> S = 400 × 1.957² ÷ 1.914 = 800 lb/in per inch width.</li>
<li><strong>Shear deflection:</strong> 0.217 × 48² ÷ (8 × 800) = 0.078 in.</li>
<li><strong>Total:</strong> 0.007 + 0.078 = 0.085 in.</li>
<li><strong>Limit:</strong> 48 ÷ 240 = 0.200 in. Ratio 0.085 ÷ 0.200 = 0.43. Passes.</li>
</ol>
<p class="note">Core shear dominates. Stiffer skins barely help a foam panel; a deeper panel or a denser, stiffer core does. The shear modulus used here is an assumption; use the panel manufacturer's value for the actual foam.</p>

<h2>How span, depth and pressure change the result</h2>
<table>
<thead><tr><th>Panel</th><th>Span</th><th>Pressure</th><th>Calculated δ</th><th>L/240</th><th>Result</th></tr></thead>
<tbody>
<tr><td>2 in foam</td><td>48 in</td><td>6 in. w.c.</td><td>0.085 in</td><td>0.200 in</td><td>Pass</td></tr>
<tr><td>2 in foam</td><td>48 in</td><td>10 in. w.c.</td><td>0.141 in</td><td>0.200 in</td><td>Pass</td></tr>
<tr><td>2 in foam</td><td>72 in</td><td>6 in. w.c.</td><td>0.209 in</td><td>0.300 in</td><td>Pass, less margin</td></tr>
<tr><td>4 in foam</td><td>72 in</td><td>6 in. w.c.</td><td>0.096 in</td><td>0.300 in</td><td>Pass</td></tr>
</tbody>
</table>
<p>Same skins and assumed core properties as the example. Bending deflection grows with the fourth power of span and shear deflection with the square, so long spans quickly erode the margin. That is one reason taller sections use intermediate frame members, and why the panel thickness comparison in <a href="<?= url('guides/two-inch-vs-four-inch-casing-panels') ?>">2-inch vs 4-inch panels</a> often comes down to span.</p>

<h2>Mineral fibre panels</h2>
<p>A fiberglass or mineral wool core does not bond the skins together, so there is little composite action. Each skin bends on its own, and on its own a thin sheet is very flexible. Treating the two sheets as separate plates in the example above gives a calculated deflection of more than 30 in, which simply says that a flat unstiffened sheet cannot do the job. Mineral fibre panels get their stiffness from formed edges, internal hat channels or stiffeners, or a frame at closer spacing. Calculate them using the section properties of the formed shape or stiffener, or rely on tested data.</p>

<h2>Negative pressure, frames and testing</h2>
<ul>
<li><strong>Negative pressure:</strong> the deflection magnitude is similar, but the panel pulls inward. Fasteners and edge details are loaded in a different direction and must be checked.</li>
<li><strong>Frames:</strong> posts and rails carry the panel reactions. A frame member spanning the full height of a tall section can deflect more than the panels it supports. Check it as a beam with the tributary load from both adjacent panels.</li>
<li><strong>Doors:</strong> large doors are often the most flexible element in a section; check door construction separately.</li>
<li><strong>Testing:</strong> calculations are a design check. AHRI 1350 and EN 1886 rate deflection by testing, and the tested class should govern on submittals.</li>
<li><strong>Transient pressures:</strong> damper closure or fan start against a closed system can briefly exceed design pressure. Many specifications apply the deflection limit at a multiple of design pressure for this reason.</li>
</ul>
<?php guide_end([
    ['What does L/240 deflection mean for a casing panel?', 'It means the panel may not deflect more than its span divided by 240 under the specified pressure. A 48 in span may move no more than 0.2 in at mid-span.'],
    ['How do you convert inches of water to pounds per square foot?', 'One inch of water column equals about 5.2 pounds per square foot. A section at 6 in. w.c. sees a uniform load of about 31 pounds per square foot on its panels.'],
    ['Why do foam panels deflect less than fiberglass panels?', 'Injected foam bonds the inner and outer skins together so they act as one stiff sandwich. Fiberglass does not bond the skins, so each acts alone, and the panel relies on formed edges, stiffeners or closer frame spacing for stiffness.'],
]);
