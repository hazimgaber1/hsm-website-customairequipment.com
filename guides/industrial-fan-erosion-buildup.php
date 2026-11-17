<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('industrial-fan-erosion-buildup'); ?>
<p class="lede">Dirty-air fans fail in two opposite ways: abrasive particles wear metal away, and sticky or damp particles pile material on. Both change the mass distribution of the wheel, so both usually first show up as rising vibration. Diagnose which one you have, find out why it is happening, and fix the cause rather than repeatedly rebalancing the wheel.</p>

<h2>Start with the evidence</h2>
<p>Before opening the fan, collect:</p>
<ul>
<li>Vibration trend over the last weeks or months, and whether the rise was gradual or sudden.</li>
<li>Airflow, pressure and motor current trends, which shift as a wheel erodes or loads up.</li>
<li>Process changes: new material, higher production rate, different moisture, a collector fault.</li>
<li>Maintenance history: previous balancing, cleaning, wheel replacement.</li>
</ul>
<p>Then lock out the fan and inspect the wheel, housing and inlet. Photograph everything; patterns of wear and deposit tell the story. General vibration diagnosis is covered in <a href="<?= url('guides/vibration-troubleshooting') ?>">vibration troubleshooting</a>; this guide focuses on wheel wear and buildup.</p>

<h2>Symptom: gradual rise in vibration, wheel shows wear</h2>
<h3>Cause: abrasive erosion</h3>
<p><strong>Check:</strong> Look for thinned blades, rounded or sharpened leading edges, grooves, and wear on the backplate near blade roots and on the scroll cutoff. Wear is usually heaviest at the blade tips and leading edges where particle velocity relative to the surface is highest. Measure blade thickness at several points and compare with original.</p>
<p><strong>Fix:</strong></p>
<ul>
<li>Reduce particle loading at the fan: repair the collector, check for torn bags or bypass, or move the fan to the clean side.</li>
<li>Reduce tip speed: wear rate rises steeply with velocity, so a larger, slower wheel can greatly extend life.</li>
<li>Add wear protection: replaceable liners, abrasion-resistant plate, hard-facing or ceramic tiles on high-wear zones.</li>
<li>Change wheel type: radial or radial tip wheels with thick blades tolerate erosion better than thin backward-inclined or hollow airfoil blades. See <a href="<?= url('guides/radial-blade-paddle-wheel-fans') ?>">radial blade and paddle wheel fans</a>.</li>
</ul>
<p class="warn">Severely eroded wheels can fail structurally. If blade thickness has been reduced significantly, or cracks are visible at welds or blade roots, remove the fan from service and consult the manufacturer before running it again.</p>

<h2>Symptom: vibration rises then drops, deposits visible</h2>
<h3>Cause: material buildup and uneven shedding</h3>
<p><strong>Check:</strong> Look for layers of material on blade surfaces, especially the non-working (back) side of backward-inclined blades, at blade roots, on the backplate and inside the inlet cone. Buildup that is uniform causes little imbalance; buildup that flakes off unevenly causes sudden vibration spikes. Note the material's texture: dry and powdery, damp and caked, or tarry.</p>
<p><strong>Fix:</strong></p>
<ul>
<li>Identify why particles stick: moisture near dew point, sticky process materials, condensation of vapors such as resins or oils, or temperature drops at startup.</li>
<li>Keep gas temperature above the dew point with duct insulation, preheat at startup, or process changes.</li>
<li>Choose a wheel geometry with fewer places for buildup: radial blades, open designs, or blades without pockets on the back side.</li>
<li>Apply non-stick coatings suited to the material and temperature.</li>
<li>Install cleaning systems: wash nozzles, inspection doors and a scheduled cleaning routine.</li>
</ul>

<h2>Symptom: sudden vibration increase</h2>
<h3>Cause: chunk of buildup released, or blade damage</h3>
<p><strong>Check:</strong> Inspect for an area where buildup has broken away, leaving the opposite side heavier. Check for a broken or cracked blade, a lost wear liner or a foreign object.</p>
<p><strong>Fix:</strong> Clean the wheel completely and evenly, then re-check balance. Replace damaged parts. If buildup sheds repeatedly, address the cause as above and increase cleaning frequency.</p>

<h2>Symptom: airflow dropping, current changing</h2>
<h3>Cause: wheel geometry altered</h3>
<p><strong>Check:</strong> Erosion that shortens blade tips reduces pressure capability; buildup that narrows blade passages reduces airflow. Compare measured fan performance with the original curve at the same speed.</p>
<p><strong>Fix:</strong> Restore the wheel by replacement or rebuild. If the system was relying on margin that is now gone, check the process exhaust is still adequate.</p>

<h2>Symptom: housing worn through or deposits in housing</h2>
<h3>Cause: scroll erosion or buildup</h3>
<p><strong>Check:</strong> Inspect the scroll, especially the cutoff and the outer wall opposite the wheel discharge, where particles are thrown against the housing. Check the inlet cone for wear and for buildup that changes wheel-to-cone clearance.</p>
<p><strong>Fix:</strong> Add replaceable scroll liners, repair worn areas, or increase plate thickness in wear zones. Clear deposits that reduce clearances; tight clearances with buildup can cause rubbing.</p>

<h2>Diagnosis summary</h2>
<table>
<thead><tr><th>Observation</th><th>Likely cause</th><th>First action</th></tr></thead>
<tbody>
<tr><td>Thin, sharpened blade edges</td><td>Abrasive erosion</td><td>Check collector efficiency and tip speed</td></tr>
<tr><td>Layered deposits on blade backs</td><td>Sticky or damp material</td><td>Check gas temperature relative to dew point</td></tr>
<tr><td>Vibration spikes and drops</td><td>Uneven shedding of buildup</td><td>Clean evenly; address cause</td></tr>
<tr><td>Holes in hollow airfoil blades</td><td>Erosion followed by internal filling</td><td>Replace wheel; change wheel type</td></tr>
<tr><td>Grooves at blade root</td><td>Particle concentration near hub</td><td>Add liners; review inlet conditions</td></tr>
</tbody>
</table>

<h2>Balancing is not a fix</h2>
<p>Rebalancing an eroded or loaded wheel restores smooth running temporarily, but if the cause remains, vibration returns. Worse, balancing weights added to an eroded wheel can mask structural thinning. Track how often balancing is needed; if it is more than occasional, invest in fixing the cause. Balance quality grades and how they apply are discussed in <a href="<?= url('guides/fan-balance-grades-iso-21940') ?>">fan balance grades and ISO 21940</a>.</p>

<h2>Preventive measures</h2>
<ul>
<li>Install vibration monitoring with trending and alarms.</li>
<li>Inspect wheels at a frequency based on observed wear rates.</li>
<li>Keep spare wheels or wear parts for critical fans.</li>
<li>Maintain collectors and monitor differential pressure to detect bag failures.</li>
<li>Insulate and heat-trace ducts where condensation could cause buildup.</li>
</ul>
<p>For replacement wheels and fans built with liners and wear protection, see our <a href="<?= url('products/industrial-fans') ?>">industrial fans</a> page.</p>
<?php guide_end([
    ['Why does my industrial fan keep going out of balance?', 'Usually because the wheel is eroding or collecting material unevenly. Rebalancing treats the symptom; fixing collector performance, gas temperature, tip speed or wheel type addresses the cause.'],
    ['How can I reduce fan wheel erosion?', 'Reduce particle loading at the fan, lower tip speed with a larger, slower wheel, add wear liners or hard-facing, and use rugged radial or radial tip wheels instead of thin or hollow blades.'],
    ['What causes material buildup on fan blades?', 'Sticky or damp particles, condensation of vapors or moisture near the dew point, and blade shapes with pockets on the back side. Keeping gas above its dew point and choosing open wheel designs helps.'],
]);
