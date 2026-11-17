<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('retrofit-vs-replacement-decision'); ?>
<p class="lede">Retrofit an existing air handler when the casing and frame are sound and the problems are concentrated in a few components; replace it when the casing itself is failing, the unit cannot meet current loads or codes without major change, or repeated repairs are costing more than a new unit would.</p>

<h2>Two different projects, not two prices</h2>
<p>Owners often frame this as "repair for less or replace for more," but the two paths deliver different things. A retrofit keeps the existing box and swaps or rebuilds what is inside it: fans, motors, coils, dampers, filters, controls, sometimes insulation or floors. A full replacement removes the unit and installs a new one, whether factory-assembled, split into shipping sections or built as a knockdown. Each path carries its own risk profile, schedule and performance ceiling, and the right answer comes from comparing them on the same four criteria.</p>

<h2>Side-by-side comparison</h2>
<table>
<thead><tr><th>Criterion</th><th>Retrofit (refurbish in place)</th><th>Full replacement</th></tr></thead>
<tbody>
<tr><td>Condition prerequisite</td><td>Casing, base and floor structurally sound; corrosion limited to replaceable parts</td><td>None; condition of old unit is irrelevant after demolition</td></tr>
<tr><td>Capital cost</td><td>Usually lower when only a few components change; rises quickly if casing work is added</td><td>Higher equipment cost; demolition and rigging can be significant</td></tr>
<tr><td>Downtime</td><td>Can be staged component by component; individual outages are short</td><td>One longer outage for demolition, setting and connection</td></tr>
<tr><td>Performance ceiling</td><td>Limited by existing cross-section, casing leakage and thermal performance</td><td>Designed to current loads, efficiency targets and casing standards</td></tr>
<tr><td>Hidden-condition risk</td><td>Higher; opening the casing can expose rot, hazardous materials or undersized structure</td><td>Lower inside the unit; still present at connections and supports</td></tr>
<tr><td>Code exposure</td><td>Altered components must meet current requirements; whole unit may be grandfathered depending on scope and jurisdiction</td><td>New equipment must meet the energy and safety codes in force</td></tr>
<tr><td>Remaining service life</td><td>Bounded by the oldest part kept, usually the casing</td><td>Full new-equipment life</td></tr>
</tbody>
</table>

<h2>Condition: the first filter</h2>
<p>Start with what you cannot economically fix. A casing with perforated floors, delaminated or wet insulation throughout, rusted-through base channels, or panels that no longer seal is a replacement candidate almost regardless of what the other numbers say, because every dollar spent on new fans and coils is going into a box that will still leak air and water. Conversely, a well-built double-wall casing from a good manufacturer can outlive two or three generations of fans and coils.</p>
<p>A structured rating of each component makes this conversation factual rather than anecdotal; use the <a href="<?= url('guides/ahu-condition-assessment') ?>">AHU condition assessment checklist</a> before pricing either path. For the specific question of whether the box can be kept, see <a href="<?= url('guides/reusing-existing-casing') ?>">reusing an existing casing</a>.</p>

<h2>Cost: compare like scopes</h2>
<p>Retrofit pricing tends to look attractive early because it is quoted as "new fans, new coils." By the time the scope includes demolition of the old fan bulkhead, new floor sections under the coil, re-insulation, damper replacement, new controls, electrical upgrades and contingency for what the casing reveals, the gap to replacement often narrows. Build both estimates with the same line items:</p>
<ul>
<li>Equipment and materials</li>
<li>Demolition, removal and disposal, including any abatement</li>
<li>Rigging, temporary openings and restoration of walls or roofs</li>
<li>Mechanical, electrical and controls connections</li>
<li>Temporary heating, cooling or ventilation during the outage</li>
<li>Testing, balancing and commissioning</li>
<li>Contingency sized to the hidden-condition risk of each path</li>
</ul>
<p>Once both scopes are priced, the economic comparison belongs in a payback or net present value calculation, covered in <a href="<?= url('guides/retrofit-payback-calculation') ?>">calculating payback for AHU retrofit projects</a>.</p>

<h2>Downtime: total hours versus longest outage</h2>
<p>A retrofit can usually be broken into short outages: swap one fan module over a weekend, change a coil during a shoulder season, upgrade controls with the unit running on manual. Total labour hours may be higher than for a replacement, but no single shutdown is long. A replacement typically needs one continuous window long enough to disconnect, demolish, rig in, connect, start and balance the new unit. For a hospital, laboratory or data hall that cannot tolerate a long outage, the shape of the downtime can outweigh cost.</p>
<p class="note">If the building can only tolerate short outages but the casing needs replacing, a knockdown unit built alongside the old one, or a temporary unit carrying the load during cutover, can give replacement-level results with retrofit-style outages.</p>

<h2>Performance: what the old envelope allows</h2>
<p>The existing casing sets hard limits. Its cross-section fixes coil face area, and therefore face velocity and pressure drop at the airflow you need. Its length limits how much filtration, energy recovery or sound attenuation you can add. Its leakage and thermal bridging stay as they are unless panels are replaced. If the space loads have grown, ventilation requirements have increased, or the owner wants a large step in fan energy, check whether the target is physically reachable inside the old box before committing to a retrofit.</p>
<p>When the retrofit option fits inside the envelope, fan replacement is often the single biggest performance lever, since older belt-driven housed fans can be replaced with direct-drive plenum fans or an array without changing the casing.</p>

<h2>A simple decision sequence</h2>
<ol>
<li>Rate condition. If the casing or base fails, go to replacement.</li>
<li>Check performance. If the target airflow, capacity or efficiency cannot fit in the existing envelope, go to replacement.</li>
<li>Check downtime limits. If only short outages are allowed, favour retrofit or a staged replacement strategy.</li>
<li>Price both scopes with identical line items and contingency, then compare on life-cycle economics.</li>
</ol>
<p>If the answer leans toward keeping the box, the <a href="<?= url('products/retrofit-knockdown') ?>">retrofit and knockdown</a> page outlines how in-place rebuilds and field-assembled replacements are approached.</p>
<?php guide_end([
    ['When should an air handler be replaced instead of retrofitted?', 'Replace it when the casing, base or floor is structurally failing, when the required airflow or capacity cannot fit in the existing cross-section, or when cumulative repair costs approach the cost of a new unit. A sound casing is the main prerequisite for a retrofit.'],
    ['Is retrofitting an AHU always cheaper than replacing it?', 'No. Retrofits look cheaper when only fans or coils change, but scope often grows once the casing is opened. Compare both options with the same line items, including demolition, abatement, controls and contingency.'],
    ['Does a retrofitted AHU have to meet current energy codes?', 'Components that are replaced or altered generally must meet the code in force, while untouched parts may be grandfathered. How much of the unit is captured depends on the scope and the code edition adopted in your jurisdiction, so confirm with the authority having jurisdiction.'],
]);
