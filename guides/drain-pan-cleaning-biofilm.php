<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('drain-pan-cleaning-biofilm'); ?>
<p class="lede">Clean air handler drain pans by removing standing water and debris, scrubbing off biofilm with a suitable detergent, disinfecting with a registered product if growth was present, rinsing, flushing the outlet and trap, and confirming the pan drains completely. Prevent regrowth by keeping the pan draining, the trap sealed, and, where appropriate, using slow-release pan treatments.</p>

<h2>What biofilm is and why it forms</h2>
<p>Biofilm is a slimy layer of bacteria, fungi and the substances they produce, attached to wet surfaces. A cooling coil drain pan provides everything it needs: water, warmth, organic dust from the air, and long periods of stillness. Once established, biofilm traps more dirt, blocks drain outlets, produces odours, and can release microorganisms into the airstream. It is also harder to remove than loose dirt, because the slime protects the organisms underneath.</p>
<p>Prevention depends mostly on the pan draining fully. That is a design and installation question, covered in <a href="<?= url('guides/drain-pan-design-ashrae-62-1') ?>">drain pan design and ASHRAE 62.1</a>. Investigating whether microbial growth is coming from the pan or elsewhere in the unit is in <a href="<?= url('guides/microbial-growth-ahu-troubleshooting') ?>">microbial growth in AHUs</a>. This guide is about the cleaning itself.</p>

<h2>Step 1: Prepare</h2>
<ol>
<li>Schedule cleaning when the cooling coil can be off, ideally at the start and end of cooling season, and more often for units in hot, humid climates.</li>
<li>Lock out the supply fan and any return or exhaust fan that could draw air through the unit.</li>
<li>Wear gloves, eye protection and a respirator if biofilm or mould is visible; disturbing growth releases spores and aerosols.</li>
<li>Gather a wet/dry vacuum, non-abrasive brushes and pads, a pump sprayer, clean water, a detergent suitable for the pan material, a disinfectant registered for the purpose where needed, and buckets.</li>
<li>Read the product labels and safety data sheets. Do not mix chemicals; chlorine products and acids or ammonia produce toxic gases.</li>
</ol>

<h2>Step 2: Remove water and loose debris</h2>
<ol>
<li>Vacuum standing water from the pan.</li>
<li>Remove loose debris: insulation fibres, leaves, filter fragments, dead insects.</li>
<li>Note where water stood and how deep. A pan that holds water in one corner may not be level or the outlet may be partly blocked; record this for repair.</li>
</ol>

<h2>Step 3: Clean the pan surface</h2>
<ol>
<li>Apply the detergent to the whole pan surface, including the sides and the area under the coil you can reach.</li>
<li>Allow the dwell time on the label.</li>
<li>Scrub with a non-abrasive brush or pad. Abrasive pads scratch stainless steel and coated pans, creating places for biofilm to anchor next time.</li>
<li>Pay attention to corners, seams, the area around the drain outlet and the underside of the coil casing where it meets the pan.</li>
<li>Vacuum or wipe up the loosened material.</li>
</ol>
<p class="warn">Avoid strong acid or chlorine cleaners on galvanized and aluminum surfaces. They strip protective zinc and oxide layers and accelerate corrosion. Check that the product is compatible with the pan material.</p>

<h2>Step 4: Disinfect where growth was present</h2>
<ol>
<li>After cleaning, apply a disinfectant registered for hard surfaces in HVAC equipment, following the label for concentration and contact time. Disinfectants work poorly on surfaces still coated with biofilm, which is why cleaning comes first.</li>
<li>Keep the surface wet for the full contact time.</li>
<li>Rinse with clean water if the label requires it, and remove rinse water.</li>
</ol>

<h2>Step 5: Clear the outlet and trap</h2>
<ol>
<li>Remove the trap cleanout cap or disconnect the trap at a union.</li>
<li>Flush the drain outlet and trap with clean water. Use a flexible brush to clear biofilm from the trap interior; it often holds more slime than the pan.</li>
<li>Flush the downstream drain line until it runs clear.</li>
<li>Reassemble and refill the trap with water so it holds its seal at startup.</li>
<li>Pour water into the pan and confirm it drains completely to the outlet with nothing left standing.</li>
</ol>

<h2>Step 6: Use treatments correctly</h2>
<p>Pan treatments help slow regrowth between cleanings; they do not replace cleaning or fix a pan that does not drain.</p>
<table>
<thead><tr><th>Treatment</th><th>How it works</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>Slow-release pan tablets or strips</td><td>Release a biocide or detergent into condensate over weeks</td><td>Place where condensate flows across them; replace at the labelled interval; check compatibility with pan and drain materials</td></tr>
<tr><td>Enzyme or bacterial products</td><td>Break down organic matter</td><td>Gentler on materials; need regular dosing</td></tr>
<tr><td>UV-C lamps aimed at coil and pan</td><td>Inactivate organisms on irradiated surfaces</td><td>A design option, not a maintenance chemical; lamps need periodic replacement and safe interlocks</td></tr>
</tbody>
</table>
<p class="note">Treatments that release chemicals into the airstream must be suitable for occupied buildings. Choose products labelled for HVAC condensate pans and keep them away from the coil face.</p>

<h2>Step 7: Restore and record</h2>
<ul>
<li>Close the unit, remove lockout, start the fan and confirm the trap holds a seal and the pan drains under operating pressure.</li>
<li>Record the condition found, products used, and any repairs needed, such as leveling or pan coating.</li>
<li>Photograph the pan before and after cleaning; it helps track whether the interval is right.</li>
</ul>
<p>Coil cleaning washes dirt into the pan, so plan pan cleaning immediately after <a href="<?= url('guides/coil-cleaning-methods') ?>">coil cleaning</a> rather than before.</p>
<?php guide_end([
    ['How often should AHU drain pans be cleaned?', 'At least at the start and end of cooling season for most units, and more often for units in hot, humid climates or with a history of growth. Monthly checks for standing water and slime help decide the interval.'],
    ['Can I use bleach to clean a drain pan?', 'Chlorine products can corrode galvanized and aluminum surfaces and must never be mixed with acids or ammonia. Use a detergent compatible with the pan material, followed by a disinfectant registered for the purpose if growth was present.'],
    ['Do drain pan tablets prevent biofilm?', 'They slow regrowth between cleanings by releasing a biocide or detergent into the condensate. They cannot fix a pan that holds water and do not remove existing biofilm, so regular cleaning is still needed.'],
]);
