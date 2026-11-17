<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('replacing-rtus-with-custom-ahus'); ?>
<p class="lede">Swapping a packaged rooftop unit for a custom outdoor air handler works when the new unit is built around the roof you already have: its base must land on the existing curb or new structure, its duct openings must line up with the existing roof penetrations, and its weight must be carried by the roof framing.</p>

<h2>Before you start</h2>
<p>This is a procedure for executing the swap once the decision is made. Whether a custom AHU, DOAS or another RTU is the right system type is a separate question addressed in <a href="<?= url('guides/ahu-vs-rtu-vs-doas') ?>">AHU vs RTU vs DOAS</a>. Owners typically move to custom units on rooftops to gain larger coils, better casings, fan arrays, energy recovery, or to consolidate several small RTUs into one larger unit.</p>

<h2>Step 1: Document the existing installation</h2>
<ol>
<li><strong>Measure the curb.</strong> Record outside dimensions, rail width, height above the roof deck, construction (manufactured steel curb, field-built wood, concrete) and condition. Note any curb adapters already in place.</li>
<li><strong>Locate the duct openings.</strong> Measure the supply and return openings inside the curb from two reference edges, and their size. Check whether ducts below are connected at the curb or hang from the deck.</li>
<li><strong>Record the unit.</strong> Nameplate data, operating weight, dimensions, electrical connection location, gas connection if present, condensate route.</li>
<li><strong>Confirm the roof structure.</strong> Get the structural drawings or have the framing surveyed below the curb: joist or beam size, spacing, span and direction.</li>
<li><strong>Measure clearances.</strong> Distances to roof edges, parapets, other equipment, exhaust outlets and intakes, which affect both service access and code-required separation from exhaust sources.</li>
</ol>

<h2>Step 2: Decide how the new unit will be supported</h2>
<p>A custom AHU is usually longer and heavier than the RTU it replaces, and its footprint rarely matches the old curb. There are three main approaches:</p>
<table>
<thead><tr><th>Approach</th><th>How it works</th><th>Best when</th></tr></thead>
<tbody>
<tr><td>Curb adapter</td><td>A fabricated transition sits on the old curb and presents a new top that matches the new unit's base and openings</td><td>The new unit is similar in size and the old curb and structure are sound</td></tr>
<tr><td>New full-perimeter curb</td><td>A new curb sized to the new unit replaces or encloses the old one</td><td>The footprint changes significantly and roof structure below can be reinforced</td></tr>
<tr><td>Steel dunnage</td><td>The unit sits on structural steel spanning to columns or beams, above the roof</td><td>The unit is much heavier, or the roof deck cannot take added load</td></tr>
</tbody>
</table>
<p>Each option affects roofing, flashing and structure differently; their trade-offs are discussed in <a href="<?= url('guides/roof-curb-vs-steel-dunnage') ?>">roof curb vs steel dunnage</a>.</p>

<h2>Step 3: Match the duct openings</h2>
<ol start="6">
<li><strong>Give the manufacturer the opening locations</strong> relative to the support frame. A custom unit can place bottom supply and return openings almost anywhere along its base, which often removes the need for a transition.</li>
<li><strong>If openings cannot align</strong>, design a transition within the curb adapter or below the roof. Keep transitions gradual to avoid adding significant system effect losses.</li>
<li><strong>Check opening sizes against the new airflow.</strong> If the new unit moves more air than the RTU, the existing roof openings and ductwork may limit it. Calculate velocity through each opening and confirm static pressure available.</li>
<li><strong>Plan the seal.</strong> The unit-to-curb or adapter-to-curb seal must be weathertight and airtight. Specify gasket type and continuous sealing.</li>
</ol>

<h2>Step 4: Check the structure</h2>
<ol start="10">
<li><strong>Compare loads.</strong> Provide the structural engineer with the new unit's operating weight, the weight of any curb adapter or dunnage, and the load distribution along the base. Compare with the RTU's load and the roof's capacity.</li>
<li><strong>Add environmental loads.</strong> Larger units catch more wind and may trap more snow drift against them. The engineer should include wind, snow drift and seismic loads per the building code adopted in your jurisdiction.</li>
<li><strong>Design reinforcement</strong> where needed: added joists, beams or posts to columns. Schedule this structural work before the unit arrives.</li>
</ol>
<p class="note">Ask the manufacturer for a support point load diagram early. A long custom unit may concentrate weight at the fan and coil sections rather than spreading it evenly.</p>

<h2>Step 5: Coordinate services and the lift</h2>
<ol start="13">
<li><strong>Electrical.</strong> A custom unit with multiple fans, VFDs or electric heat may need a larger feeder. Check the service and route the new feeder to the unit's single-point or multiple connection points.</li>
<li><strong>Gas, water and condensate.</strong> If the RTU had gas heat and the AHU uses hot water or electric, cap the gas line correctly. Route chilled or hot water piping with freeze protection, and plan a trapped condensate drain sized for the unit's operating static.</li>
<li><strong>Controls.</strong> The RTU likely had a standalone controller; the custom unit will need integration into the building automation system.</li>
<li><strong>Rigging.</strong> Plan the crane lift, considering whether the unit ships in sections that are joined on the roof. Weight per section and crane reach determine crane size.</li>
<li><strong>Roofing.</strong> Engage the roofer to re-flash curbs or dunnage penetrations so the roof warranty is maintained.</li>
</ol>

<h2>Step 6: Install and close out</h2>
<ol start="18">
<li>Remove the RTU, inspect the curb and openings, and install the adapter, new curb or dunnage.</li>
<li>Set the new unit or sections, join and seal them, and connect ducts, piping and power.</li>
<li>Start up, verify airflow against the existing duct system, and balance.</li>
</ol>
<p>Custom <a href="<?= url('products/custom-air-handlers') ?>">outdoor air handlers</a> can be built with base and opening locations to suit an existing curb layout, which often keeps the curb work simple.</p>
<?php guide_end([
    ['Can a custom air handler sit on an existing RTU curb?', 'Sometimes directly, but usually through a curb adapter because the footprint and openings differ. If the new unit is much larger or heavier, a new curb or structural steel dunnage may be needed.'],
    ['Will a custom AHU be heavier than the RTU it replaces?', 'Often yes, because custom units tend to have heavier casings, larger coils and more components. Get the operating weight and point loads from the manufacturer and have a structural engineer check the roof framing.'],
    ['Do the duct openings have to match the old RTU?', 'It helps, and a custom unit can usually place its bottom openings to align with existing roof penetrations. Otherwise a transition in the curb adapter or below the roof connects the new unit to the existing ducts.'],
]);
