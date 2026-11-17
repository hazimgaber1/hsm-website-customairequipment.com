<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-bearing-lubrication'); ?>
<p class="lede">Lubricate fan bearings with the grease the manufacturer specifies, in a measured quantity calculated from bearing size, at an interval based on speed, temperature and environment. More grease is not better: over-greasing is one of the most common causes of hot, failing fan bearings.</p>

<h2>Step 1: Identify the bearings and the grease</h2>
<ol>
<li>Find the bearing make and model on the bearing housing or in the O&amp;M manual. Note whether each bearing is regreasable (it has a grease fitting) or sealed for life. Sealed bearings, common on smaller motors and some fan bearings, must not be greased.</li>
<li>Read the specified grease: base oil type, thickener type and consistency grade. Many fan bearings use a lithium or lithium complex grease of NLGI grade 2, but polyurea and other thickeners are also used. Check, do not assume.</li>
<li>Never mix greases with different thickeners without confirming compatibility. Some combinations soften and run out of the bearing; others harden.</li>
<li>Label each grease fitting or the fan with the grease type so the next technician uses the same product.</li>
</ol>
<p class="warn">Motor bearings and fan shaft bearings often need different greases and intervals. Treat them as separate tasks and check the motor manufacturer's instructions for motor bearings.</p>

<h2>Step 2: Calculate the quantity</h2>
<p>Bearing manufacturers publish formulas for relubrication quantity. A widely used one is:</p>
<p class="formula">G = 0.114 × D × B
G = grease quantity, oz; D = bearing outside diameter, in; B = bearing width, in
(metric equivalent: G (g) = 0.005 × D (mm) × B (mm))</p>
<p>Example: a fan shaft bearing has an outside diameter of 4.33 in (110 mm) and a width of 1.10 in (28 mm).</p>
<p class="formula">G = 0.114 × 4.33 × 1.10 = 0.54 oz (about 15 g)</p>
<p>That is the quantity per relubrication for that bearing. Use the bearing dimensions, not the housing dimensions; they are in the bearing catalogue for the part number.</p>
<h3>Converting to grease gun strokes</h3>
<p>Grease guns deliver very different amounts per stroke. Calibrate yours: pump ten full strokes onto a scale and divide the weight by ten. If a gun delivers 0.05 oz (1.4 g) per stroke, the 0.54 oz bearing above needs about 11 strokes. Write the stroke count on the maintenance task so it is repeatable.</p>

<h2>Step 3: Set the interval</h2>
<p>Relubrication intervals depend on bearing type, size, speed, operating temperature and contamination. Bearing manufacturers publish charts and calculators; the fan or bearing manufacturer's recommendation in the O&amp;M manual should be the starting point. General tendencies:</p>
<table>
<thead><tr><th>Condition</th><th>Effect on interval</th></tr></thead>
<tbody>
<tr><td>Higher speed for a given bearing size</td><td>Shorter</td></tr>
<tr><td>Higher operating temperature</td><td>Shorter; grease life falls sharply as temperature rises</td></tr>
<tr><td>Dusty, humid or washdown environment</td><td>Shorter</td></tr>
<tr><td>Vertical shaft orientation</td><td>Often shorter</td></tr>
<tr><td>Intermittent operation, low speed</td><td>Longer, but grease still ages</td></tr>
</tbody>
</table>
<p>For variable-speed fans, base the interval on the typical operating speed rather than maximum speed if the unit spends most of its hours at part load, but check the bearing manufacturer's guidance for VFD-driven applications.</p>

<h2>Step 4: Grease the bearing correctly</h2>
<ol>
<li><strong>Lock out the fan.</strong> Most fan bearings should be greased with the fan stopped and locked out. Some manufacturers recommend greasing while running at low speed so grease distributes; where that is the case, use extended grease lines so nobody reaches near rotating parts.</li>
<li><strong>Clean the fitting.</strong> Wipe the grease fitting and the gun nozzle so dirt is not pumped into the bearing.</li>
<li><strong>Open the relief, if fitted.</strong> Some housings have a purge plug or relief port. Open it so old grease can escape.</li>
<li><strong>Pump slowly.</strong> Apply the calculated number of strokes slowly. Fast pumping can force grease past seals.</li>
<li><strong>Run and purge.</strong> Run the fan for a while with the relief open so excess grease is expelled, then close the relief.</li>
<li><strong>Record.</strong> Note the date, grease, quantity and bearing temperature after running.</li>
</ol>

<h2>Why over-greasing causes failures</h2>
<p>A bearing needs only a thin film of grease between the rolling elements and races. A housing packed full of grease forces the rolling elements to churn it, generating heat. The temperature rise breaks down the grease, which then loses its ability to lubricate, and the bearing fails from the lubrication that was meant to protect it. Excess pressure from a grease gun can also blow out seals, letting dirt in.</p>
<p>Signs of over-greasing include a temperature spike shortly after greasing that takes a long time to settle, grease leaking from seals, and bearing housings packed solid when opened. If a bearing runs hot after greasing, stop adding grease and let it purge. If it keeps running hot, see <a href="<?= url('guides/bearing-failure-troubleshooting') ?>">troubleshooting fan bearing failures</a>.</p>
<p class="note">Under-greasing shows up differently: rising noise and temperature trend over weeks, and in vibration data as early bearing defect frequencies. Trending techniques are covered in <a href="<?= url('guides/vibration-analysis-predictive-maintenance') ?>">vibration analysis for predictive maintenance</a>.</p>

<h2>Good habits</h2>
<ul>
<li>Use one grease gun per grease type, clearly labelled.</li>
<li>Fit extended grease lines to bearings that are hard to reach inside the unit, so technicians do not reach past fan wheels.</li>
<li>Replace damaged grease fittings immediately.</li>
<li>Store grease cartridges sealed and clean.</li>
<li>Consider automatic single-point lubricators for bearings in remote or hazardous locations, set to the calculated rate.</li>
</ul>
<?php guide_end([
    ['How much grease should I put in a fan bearing?', 'A common formula is 0.114 times bearing outside diameter times bearing width in inches, giving ounces of grease. Calibrate your grease gun so you know how many strokes deliver that amount, and check the manufacturer\'s recommendation.'],
    ['Can too much grease damage a bearing?', 'Yes. Excess grease makes the rolling elements churn it, raising bearing temperature and breaking down the grease, and gun pressure can blow out seals. Over-greasing is a frequent cause of premature fan bearing failure.'],
    ['Can I mix different bearing greases?', 'Only if the manufacturers confirm they are compatible. Greases with different thickeners can soften or harden when mixed, so stick to one specified grease and label each fitting.'],
]);
