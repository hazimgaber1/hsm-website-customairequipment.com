<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('corroded-casing-floor-repair'); ?>
<p class="lede">Repair a corroded air handler casing or floor by first finding and stopping the water that caused it, then measuring how much metal is left, removing corrosion back to sound steel, patching or replacing sections that have lost strength or been perforated, and recoating with a system compatible with the substrate. Coating over active rust or a live leak only hides the problem for a season.</p>

<h2>Step 1: Find the moisture source</h2>
<p>Casing corrosion almost always starts with water that stays where it should not. Before repairing anything, identify which of these is responsible:</p>
<ul>
<li>Drain pans that overflow, leak at seams or do not drain fully.</li>
<li>Cooling coil carryover wetting the floor downstream.</li>
<li>Humidifier wetting or condensate from steam dispersion.</li>
<li>Condensation on the inside of cold panels, or on the outside of panels in warm humid rooms, from thermal bridging.</li>
<li>Roof and seam leaks on outdoor units.</li>
<li>Washdown or cleaning water left standing.</li>
<li>Corrosive airstreams such as pool air, process exhaust or coastal salt.</li>
</ul>
<p>Fix the source or the repair will fail. For carryover in particular, see <a href="<?= url('guides/cooling-coil-water-carryover-troubleshooting') ?>">troubleshooting cooling coil water carryover</a>.</p>

<h2>Step 2: Assess the damage</h2>
<ol>
<li>Lock out the unit and clean the affected area so the surface can be seen.</li>
<li>Map the corrosion: surface rust, scaling, pitting, or perforation. Photograph and mark the extent.</li>
<li>Probe suspect areas with a pick or screwdriver. Sound steel resists; corroded steel flakes or gives.</li>
<li>Where possible, measure remaining thickness with an ultrasonic thickness gauge and compare with the original gauge from the submittal.</li>
<li>Check underneath: corrosion on floors often starts on the underside where insulation stayed wet. Lift a panel or cut an inspection opening if the extent is unclear.</li>
<li>Inspect base rails and structural members supporting the floor and fans. Section loss in structure is more serious than in a panel skin.</li>
<li>Check whether insulation behind panels is wet. Wet insulation must be removed and replaced, or corrosion will continue from inside.</li>
</ol>
<table>
<thead><tr><th>Condition found</th><th>Typical repair</th></tr></thead>
<tbody>
<tr><td>Light surface rust, no pitting</td><td>Clean, prepare and recoat</td></tr>
<tr><td>Pitting with most thickness remaining</td><td>Clean to bright metal, fill pits as coating system allows, recoat</td></tr>
<tr><td>Significant thinning, local perforation</td><td>Patch plate over sound metal, seal and coat</td></tr>
<tr><td>Widespread perforation, soft floor</td><td>Replace floor section or panel</td></tr>
<tr><td>Section loss in base rails or fan supports</td><td>Engineering review; structural repair or replacement</td></tr>
</tbody>
</table>
<p class="warn">If corrosion affects base rails, fan supports or lifting points, have a qualified engineer review it before repair. A fan base that loses support can fail suddenly under operating loads.</p>

<h2>Step 3: Prepare the surface</h2>
<ol>
<li>Protect adjacent equipment, insulation and electrical components from dust and debris.</li>
<li>Remove loose rust and failed coating with wire brushes, scrapers, abrasive discs or needle scalers. For galvanized steel, avoid removing more sound zinc than necessary.</li>
<li>Clean back to sound metal with a margin of good coating around the repair area.</li>
<li>Feather the edges of the sound coating so the new coat blends in.</li>
<li>Remove oil, grease and salts with a suitable cleaner; salts left on the surface cause coatings to blister.</li>
<li>Dry the surface thoroughly. Coatings applied to damp steel fail.</li>
</ol>
<p class="note">Check the coating manufacturer's surface preparation standard, often expressed using SSPC or NACE preparation grades. Field conditions inside a unit rarely allow abrasive blasting, so choose a coating designed for hand or power tool preparation.</p>

<h2>Step 4: Patch or replace</h2>
<h3>Patching thinned or perforated areas</h3>
<ol>
<li>Cut out perforated metal back to sound material, with rounded corners to avoid stress cracks.</li>
<li>Cut a patch plate of the same material and at least the original gauge, overlapping sound metal by a few inches all round. Stainless patches on galvanized floors can create galvanic corrosion; match materials or isolate them.</li>
<li>Fasten with stainless or coated fasteners, or weld where the casing design allows. Welding galvanized steel requires ventilation and fume control and destroys zinc near the weld, which must be restored.</li>
<li>Seal edges and fastener heads with sealant compatible with the coating system.</li>
<li>For drainable floors, keep the patch watertight and avoid creating a lip that traps water; slope toward drains.</li>
</ol>
<h3>Replacing sections</h3>
<p>Where floor or panel corrosion is widespread, replacement is usually more durable than layered patches. Many custom units use bolted panels that can be replaced individually. For welded floors, a new floor plate can be installed over or in place of the old one. The manufacturer can often supply panels to the original dimensions. Extensive casing replacement turns into a rebuild-in-place project.</p>

<h2>Step 5: Recoat</h2>
<ol>
<li>Choose a coating system compatible with the substrate (galvanized, painted steel, aluminum or stainless) and suitable for continuous wet exposure if it is a drain pan or floor.</li>
<li>For galvanized areas, a zinc-rich primer restores some sacrificial protection where zinc has been lost.</li>
<li>Apply primer and topcoats at the manufacturer's film thickness, respecting recoat times and temperature limits. Steel inside a running unit may be colder than ambient; check surface temperature against dew point.</li>
<li>Ventilate during application and allow full cure before returning the unit to service. Some coatings release solvent that should not reach occupied spaces.</li>
<li>Check the finished film for holidays (pinholes) in areas that will see standing water.</li>
</ol>
<p>Selecting a coating system for a new unit in a corrosive environment is a design decision, covered in <a href="<?= url('guides/casing-coatings-corrosive-environments') ?>">casing coatings for corrosive environments</a>.</p>

<h2>Step 6: Close out and monitor</h2>
<ul>
<li>Replace any wet insulation and reseal panels.</li>
<li>Record the repair location, method and materials with photos.</li>
<li>Inspect repaired areas at each quarterly visit for blistering, rust bleed or new leaks.</li>
<li>If corrosion keeps returning, review whether the unit is near end of life; see <a href="<?= url('guides/ahu-life-expectancy') ?>">AHU life expectancy and end-of-life indicators</a>.</li>
</ul>
<?php guide_end([
    ['Can I just paint over rust on an air handler floor?', 'Not with lasting results. Remove loose rust and failed coating back to sound metal, clean off salts and oils, dry the surface, then apply a coating system designed for the substrate and wet exposure. Fix the water source first.'],
    ['How do I repair a hole in an AHU floor?', 'Cut out the perforated metal back to sound material, install a patch plate of matching material overlapping sound metal, fasten or weld it, seal the edges and recoat. Avoid creating lips that trap water.'],
    ['When does casing corrosion need an engineer?', 'When corrosion affects base rails, fan supports, lifting points or other structural members. Section loss in those parts can lead to sudden failure under operating loads and needs a structural assessment.'],
]);
