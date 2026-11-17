<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('thermal-break-casing-panels'); ?>
<p class="lede">A thermal break is a strip of low-conductivity material that separates the inner and outer metal of a panel, frame or door so heat cannot flow straight through steel. Without it, cold supply air chills the outer skin along every edge and fastener line, and in humid rooms those lines sweat even though the insulation in the middle of the panel is performing perfectly.</p>

<h2>Why insulation alone is not enough</h2>
<p>Steel conducts heat roughly a thousand times better than polyurethane foam. A panel with 2 in of foam has good thermal resistance across its face, but if the inner liner and outer skin meet at the panel edge, or a screw passes through both, heat takes the short path through metal. The area of that path is small, but its conductance is so high that the outside surface along the bridge approaches the inside air temperature.</p>
<p>The result shows up as:</p>
<ul>
<li>Lines of condensation along panel joints, frame posts and door edges on units carrying cold air through warm, humid mechanical rooms.</li>
<li>Frost lines on the exterior of outdoor units in winter, and on the inside of units carrying cold outdoor air.</li>
<li>Heat gain or loss through the casing far above what the panel's R-value would predict.</li>
<li>Corrosion and dripping water under units, with rust staining on the floor.</li>
</ul>

<h2>Where conductive paths occur</h2>
<table>
<thead><tr><th>Location</th><th>Typical bridge</th><th>Thermal break approach</th></tr></thead>
<tbody>
<tr><td>Panel edges</td><td>Inner and outer skins folded to meet each other</td><td>Skins stop short of each other; edge closed with a non-metallic profile or foam-filled gap</td></tr>
<tr><td>Frame posts and rails</td><td>Solid steel or aluminum profile spanning the casing depth</td><td>Two-part profile joined by a polymer or composite insert; or frameless design</td></tr>
<tr><td>Panel fasteners</td><td>Screws or bolts through both skins</td><td>Fasten only the outer skin; use non-conductive sleeves or concealed clips</td></tr>
<tr><td>Access doors</td><td>Door skins joined at the edge; metal frame</td><td>Thermally broken door edges and frames; gaskets on both faces</td></tr>
<tr><td>Floors and base</td><td>Floor panel bearing directly on steel base rails</td><td>Insulated floor with a break between floor liner and base; insulated base channels</td></tr>
<tr><td>Internal supports</td><td>Coil racks, fan bases and partitions welded or bolted to the outer skin</td><td>Attach to the inner liner or frame with isolating pads</td></tr>
<tr><td>Penetrations</td><td>Pipe sleeves and conduit hubs through both skins</td><td>Insulated sleeves and grommets; see penetration sealing</td></tr>
</tbody>
</table>
<p>The doors and penetrations are often the weakest points on an otherwise well-broken casing. Penetration details are covered in <a href="<?= url('guides/casing-penetration-sealing') ?>">sealing casing penetrations</a>.</p>

<h2>How a thermal break works in a panel</h2>
<p>Consider a section through a thermally broken panel joint. The outer skin wraps around the panel's outer face and returns a short distance along the edge. The inner liner does the same on its side. Between the two returns is a gap filled with the core insulation or a dedicated polymer or rigid PVC profile. No metal crosses that gap. When two panels meet, gaskets seal the joint, and the fasteners engage only the outer skin or a thermally isolated fixing.</p>
<p>Frame systems use a similar idea: an aluminum or steel post is split into inner and outer halves connected by a low-conductivity insert, the same principle used in thermally broken window frames.</p>
<p class="note">A "no-through-metal" casing is a marketing description, not a rating. What matters is the measured thermal bridging performance, which AHRI 1350 and EN 1886 express as a thermal bridging factor and class.</p>

<h2>The thermal bridging factor</h2>
<p>The thermal bridging factor compares the worst exterior surface temperature with the air temperatures inside and outside the casing. EN 1886 defines it as:</p>
<p class="formula">kb = (T internal air − T exterior surface at worst point) ÷ (T internal air − T external air)</p>
<p>The "worst point" is the exterior spot closest in temperature to the internal air: the coldest spot on a cooling unit, the warmest on a heated test box.</p>
<p>A factor close to 1.0 means the coldest exterior spot is nearly at room temperature: excellent. A low factor means a bridge has pulled part of the exterior close to the interior air temperature. Casings are grouped into thermal bridging classes from best to worst based on this factor. Using it to predict whether a casing will sweat at your design conditions is worked through in <a href="<?= url('guides/casing-condensation-risk-calculation') ?>">calculating casing condensation risk</a>.</p>

<h2>When a thermal break is worth it</h2>
<ul>
<li><strong>Cooling units in humid mechanical rooms</strong>, especially with supply air below 55°F (13°C) or dew points in the room above about 60°F.</li>
<li><strong>Outdoor units</strong>, where the exterior sees both humid summer air and winter cold, and bridging also increases energy loss.</li>
<li><strong>100% outdoor air units in cold climates</strong>, where the interior of sections ahead of preheat may be well below freezing and frost can form inside on bridged areas.</li>
<li><strong>Low-temperature supply</strong> systems, data centers using cold supply, and process units.</li>
<li><strong>Hospitals and labs</strong>, where moisture on surfaces is a hygiene concern.</li>
</ul>
<p>In a dry, conditioned mechanical room with moderate supply temperatures, a non-broken casing may never sweat, and the premium for a fully broken casing buys mainly energy savings. The calculation tells you which case you are in.</p>

<h2>Tradeoffs</h2>
<p>Thermal breaks add parts, require more careful assembly, and can reduce stiffness at panel edges, which designers compensate for with deeper sections or stronger frames. Polymer inserts must be compatible with the fire performance required of the casing. Field-installed penetrations can undo the break if they are made with plain metal sleeves, so contractors need to follow the manufacturer's details. On balance, for most cooling units in North American climates, a thermally broken casing is now a standard expectation rather than a premium extra.</p>
<?php guide_end([
    ['What is a thermal break in an air handler casing?', 'It is a low-conductivity material placed between the inner and outer metal parts of a panel, frame or door, so heat cannot flow directly through metal. It keeps the exterior surface closer to room temperature and prevents condensation.'],
    ['Why does my air handler sweat along the panel seams?', 'Seams, frame posts and fasteners are where metal often connects the cold interior to the exterior. The outside surface there drops below the room dew point and condensation forms. Thermally broken panels and frames prevent this.'],
    ['Do outdoor air handlers need thermal breaks?', 'They benefit greatly. Outdoor units face humid summer air and cold winter air, so bridging causes both condensation and energy loss. Thermal breaks are commonly specified on outdoor units in most North American climates.'],
]);
