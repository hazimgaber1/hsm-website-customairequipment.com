<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('gmp-ahu-interior-finishes'); ?>
<p class="lede">Stainless steel interiors survive repeated cleaning and sanitizing with almost any agent and are easy to document, which is why they dominate the wet sections of GMP air handlers. Painted or powder-coated steel costs less and works well in dry sections, provided the coating is rated for the cleaning chemicals and protected from mechanical damage.</p>

<h2>What a GMP interior has to do</h2>
<p>Inside a GMP air handler, the surfaces downstream of the cooling coil are wet for much of the year, and the surfaces downstream of the final filters are in contact with air going to a classified space. Those surfaces must not shed particles, must not support microbial growth and must withstand the cleaning and sanitizing procedures the site uses. They also have to be described in a way the quality unit can verify during installation qualification: material grade, finish and any coating system with its compatibility data.</p>
<p>General casing materials are compared in <a href="<?= url('guides/casing-materials-galvanized-stainless-aluminum') ?>">galvanized, stainless and aluminum casing materials</a>. This guide focuses only on interior surfaces in GMP service.</p>

<h2>The options</h2>
<ul>
<li><strong>Type 304 stainless steel.</strong> The default stainless grade for AHU interiors. Good general corrosion resistance; weak against chlorides, so repeated bleach use can cause pitting.</li>
<li><strong>Type 316L stainless steel.</strong> Molybdenum-bearing grade with better resistance to chlorides and many sanitizers. Common in drain pans and wet sections where chlorinated cleaners are used.</li>
<li><strong>Powder-coated or epoxy-painted galvanized steel.</strong> A cured coating over galvanized steel. Smooth and cleanable when intact, lower cost and lighter than stainless.</li>
<li><strong>Pre-painted (coil-coated) galvanized steel.</strong> Paint applied at the mill. Uniform, but cut edges and fastener holes expose bare metal.</li>
<li><strong>Bare galvanized or aluminum.</strong> Rarely acceptable in GMP interiors downstream of coils; galvanizing corrodes under constant moisture and some sanitizers, and aluminum is attacked by alkaline cleaners.</li>
</ul>

<h2>Comparison</h2>
<table>
<thead><tr><th>Criterion</th><th>304 stainless</th><th>316L stainless</th><th>Powder-coated galvanized</th><th>Pre-painted galvanized</th></tr></thead>
<tbody>
<tr><td>Cleanability</td><td>Excellent</td><td>Excellent</td><td>Good when intact</td><td>Good; edges weak</td></tr>
<tr><td>Resistance to chlorinated cleaners</td><td>Fair; pitting risk</td><td>Good</td><td>Depends on coating</td><td>Depends on coating</td></tr>
<tr><td>Resistance to hydrogen peroxide vapor</td><td>Good</td><td>Good</td><td>Varies; verify</td><td>Varies; verify</td></tr>
<tr><td>Resistance to quaternary ammonium cleaners</td><td>Good</td><td>Good</td><td>Generally good</td><td>Generally good</td></tr>
<tr><td>Damage resistance (scratches, impact)</td><td>High; scratches do not expose a substrate</td><td>High</td><td>Coating can chip, exposing steel</td><td>Same, plus cut edges</td></tr>
<tr><td>Repairability</td><td>Passivation or polishing</td><td>Passivation or polishing</td><td>Field touch-up, less durable than factory coat</td><td>Field touch-up</td></tr>
<tr><td>Documentation for IQ</td><td>Mill certificate, grade, finish</td><td>Mill certificate, grade, finish</td><td>Coating data, thickness, cure, compatibility</td><td>Coating data</td></tr>
<tr><td>Relative cost</td><td>High</td><td>Highest</td><td>Moderate</td><td>Lowest</td></tr>
<tr><td>Weight</td><td>Heavier gauge often used</td><td>Same as 304</td><td>Lighter</td><td>Lighter</td></tr>
</tbody>
</table>

<h2>Where each material belongs in the unit</h2>
<p>Many GMP units mix materials by section, which controls cost without compromising the critical areas:</p>
<table>
<thead><tr><th>Section</th><th>Typical choice</th><th>Reason</th></tr></thead>
<tbody>
<tr><td>Cooling coil drain pan</td><td>316L or 304 stainless</td><td>Constant water; cleaning with sanitizers</td></tr>
<tr><td>Section downstream of cooling coil</td><td>Stainless walls and floor</td><td>Wet surfaces; microbial risk</td></tr>
<tr><td>Humidifier section</td><td>Stainless</td><td>Wet surfaces; high-purity water</td></tr>
<tr><td>Fan section</td><td>Stainless or coated</td><td>Dry if well downstream of coils; vibration may chip coatings</td></tr>
<tr><td>Filter sections</td><td>Coated or stainless</td><td>Dry; frequent filter handling can scratch coatings</td></tr>
<tr><td>Mixing and outdoor air sections</td><td>Coated galvanized</td><td>Upstream of filtration; less critical</td></tr>
</tbody>
</table>
<p class="note">Decide by asking where water collects and where people clean. If a surface is wet or wiped with sanitizer regularly, stainless usually pays for itself.</p>

<h2>Details that matter more than the material</h2>
<p>A stainless interior with poor details can be harder to clean than a well-built painted one. Specify:</p>
<ul>
<li><strong>Surface finish.</strong> A smooth, consistent mill finish such as 2B, or a polished finish where the owner requires it. Avoid rough or textured surfaces that trap soil.</li>
<li><strong>Continuous welded or sealed seams</strong> in floors and drain pans, with no crevices that hold water.</li>
<li><strong>Flush or covered fasteners.</strong> Exposed screw heads and rivets inside the airstream collect dirt and are hard to wipe.</li>
<li><strong>Coved corners</strong> or easily wiped transitions in floors.</li>
<li><strong>Compatible sealants</strong> that tolerate the sanitizers used and do not support microbial growth.</li>
<li><strong>No exposed insulation.</strong> Double-wall panels with solid inner liners only.</li>
<li><strong>Passivation</strong> of stainless after fabrication, especially near welds, so free iron does not cause rust staining.</li>
</ul>
<p>The broader hygienic construction list is in <a href="<?= url('guides/hygienic-ahu-construction-checklist') ?>">the hygienic AHU construction checklist</a>.</p>

<h2>Questions to settle with the owner</h2>
<ul>
<li>Which cleaning and sanitizing agents will be used inside the unit, at what concentration and how often?</li>
<li>Will vaporized hydrogen peroxide or another gaseous agent used for room decontamination reach the AHU or its ducts?</li>
<li>Does the site standard name a stainless grade or surface finish for wetted parts?</li>
<li>Are internal surfaces expected to be wiped, or only inspected?</li>
<li>Who will repair coating damage, and with which approved product?</li>
</ul>
<p>The answers usually settle the material choice section by section before cost becomes the deciding factor.</p>
<h2>Validation considerations</h2>
<p>Whatever material is chosen, the IQ will check it. For stainless, have mill certificates traceable to the components and a record of grade and finish. For coatings, have the coating system data sheet, the applied dry film thickness, cure records and a written compatibility statement for each cleaning and sanitizing agent the site uses, including vaporized hydrogen peroxide if room decontamination might reach the AHU. If the site changes cleaning agents later, that change should go through change control with a materials review. Qualification itself is covered in <a href="<?= url('guides/pharma-ahu-validation-iq-oq-pq') ?>">pharmaceutical AHU qualification: IQ, OQ and PQ</a>.</p>
<?php guide_end([
    ['Do GMP air handlers need stainless steel interiors?', 'Not throughout. Stainless is usually chosen for wet sections such as drain pans and areas downstream of cooling coils and humidifiers. Dry sections can use a coated steel if the coating is rated for the site\'s cleaning agents.'],
    ['Is 316L stainless better than 304 for AHU drain pans?', '316L resists chlorides better, so it is preferred where chlorinated cleaners or sanitizers are used. 304 is adequate for many applications that do not use chlorides.'],
    ['What documentation do interior finishes need for qualification?', 'Stainless surfaces need mill certificates with grade and finish. Coated surfaces need the coating data sheet, film thickness, cure records and a compatibility statement for each cleaning and sanitizing agent the site uses.'],
]);
