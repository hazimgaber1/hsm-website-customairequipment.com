<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('shipping-split-design'); ?>
<p class="lede">Plan shipping splits by finding the tightest of four limits: the legal truck envelope on the route, the building's door and corridor openings, the crane's capacity at the lift radius, and the weight the structure can take during setting. Then place the splits at section boundaries that do not cut through coils, drain pans or fan arrays, and keep each piece inside every limit with margin.</p>

<h2>Step 1: establish the transport envelope</h2>
<p>Highway limits vary by state and province. As general guidance only:</p>
<ul>
<li><strong>Width:</strong> legal width is about 8.5 ft (102 in, 2.6 m) in the US and Canada. Wider loads need permits, and above certain widths escorts and travel restrictions apply.</li>
<li><strong>Height:</strong> overall loaded height limits are commonly around 13.5 ft (4.1 m) in many US states, with some allowing more; Canadian provinces have their own limits. Subtract trailer deck height: a standard flatbed deck is about 5 ft high, a step-deck around 3.5 ft, and a lowboy or removable gooseneck lower still.</li>
<li><strong>Length:</strong> trailers of 48 ft to 53 ft are standard. Longer loads need special trailers and permits.</li>
<li><strong>Weight:</strong> the legal gross vehicle weight limits payload; heavy sections may need multi-axle trailers.</li>
</ul>
<p class="note">Route matters as much as rules. Bridges, overpasses, tunnels and city streets near the site can be lower or tighter than legal limits. Ask the carrier to survey the route for large loads, and check both state or provincial limits along it. Cross-border considerations are in <a href="<?= url('guides/cross-border-shipping-canada-us') ?>">cross-border shipping</a>.</p>
<p>A rough rule: sections up to about 8 ft wide and 8 ft to 10 ft tall ship as legal loads on step-deck trailers in most regions. Beyond that, permit loads are often still practical, but costs and lead times rise.</p>

<h2>Step 2: check the site and building path</h2>
<ul>
<li><strong>Delivery access:</strong> can the truck reach the crane location or loading dock? Turning radii, overhead wires and street closures matter.</li>
<li><strong>Doors and openings:</strong> for indoor units, measure every door, corridor, elevator and turn between the dock and the mechanical room. The smallest opening, less clearance for dollies or skates, sets the section size.</li>
<li><strong>Floor capacity:</strong> each section's weight must be carried by floors along the route, including concentrated loads under rollers.</li>
<li><strong>Roof openings and hatches:</strong> for units lowered through the roof or into a penthouse.</li>
</ul>
<p>If the building path is too tight for factory-assembled sections, knockdown or panelized construction may be required; see <a href="<?= url('guides/knockdown-ahu-construction') ?>">knockdown AHU construction</a>.</p>

<h2>Step 3: check crane and rigging limits</h2>
<p>For rooftop or high-level sets, the crane's capacity falls quickly with radius. A crane that can lift a heavy section close in may manage only a fraction of that at the far side of a roof.</p>
<ol>
<li>Identify the crane location and the radius to the farthest section's set position.</li>
<li>Get the crane's load chart capacity at that radius and boom configuration.</li>
<li>Subtract rigging weight (spreader bars, slings, hook block).</li>
<li>Compare with each section's weight, with margin.</li>
</ol>
<p>Lift planning is covered in <a href="<?= url('guides/crane-lift-planning') ?>">crane lift planning</a>. At design stage, the goal is to keep each section within the capacity of a crane size that can actually be set up on the site.</p>

<h2>Step 4: check the structure during setting</h2>
<p>Roofs and floors are designed for the final, distributed unit load. During setting, a single section may be placed on a curb or dunnage before the next arrives. The structural engineer should confirm that each section can be set in sequence without overloading part of the structure.</p>

<h2>Step 5: choose where to split</h2>
<p>With the size and weight limits known, place splits at logical section boundaries.</p>
<table>
<thead><tr><th>Good split locations</th><th>Poor split locations</th></tr></thead>
<tbody>
<tr><td>Between an access section and the next component</td><td>Through a coil or coil bank</td></tr>
<tr><td>Upstream or downstream of filter sections</td><td>Through a drain pan</td></tr>
<tr><td>Between fan section and discharge plenum</td><td>Through a fan array or fan base</td></tr>
<tr><td>At the boundary of a stacked deck</td><td>Through a humidifier's absorption distance with a welded floor</td></tr>
<tr><td>Where structural base rails can be spliced cleanly</td><td>Through an energy recovery wheel cassette</td></tr>
</tbody>
</table>
<p>Other considerations:</p>
<ul>
<li>Fewer splits mean fewer field joints, less leakage risk and less installation time.</li>
<li>Each split needs base splice plates, panel joint gaskets, roof seam caps on outdoor units and field wiring connections.</li>
<li>Very heavy components, such as large coils, may ship separately and be installed on site to reduce section weight.</li>
<li>Stacked units usually ship as separate decks.</li>
<li>Centre of gravity within each section affects rigging and should be marked.</li>
</ul>

<h2>Step 6: document the splits</h2>
<ul>
<li>Shipping section dimensions and weights on the submittal drawings.</li>
<li>Lifting points and centre of gravity for each section.</li>
<li>Field joining details: base splice, panel joints, roof caps, wiring.</li>
<li>Any components shipped loose, with their weights and installation instructions.</li>
<li>Sequence for setting.</li>
</ul>
<p>Field reassembly steps are in <a href="<?= url('guides/field-joining-split-sections') ?>">joining split sections</a>.</p>
<h2>Example: a rooftop unit in four pieces</h2>
<p>A 60 ft long outdoor unit, 9 ft wide and 8 ft tall on its base, must be lifted onto a roof 70 ft from the only crane position. The carrier confirms that 9 ft wide loads move on permits along the route. The crane's chart at that radius gives a net capacity, after rigging, that limits each piece to well under the unit's total weight. Splitting into four sections of about 15 ft, with the splits placed between access sections and the coil, fan and recovery sections, keeps each piece inside both the trailer length and the crane capacity, avoids cutting any drain pan, and leaves three field joints to make.</p>
<?php guide_end([
    ['How wide can an air handler section be for shipping?', 'Legal load width on US and Canadian highways is about 8.5 ft. Wider sections can ship with permits, which add cost, escorts and travel restrictions above certain widths. Check limits for every state or province on the route.'],
    ['Where should an AHU be split for shipping?', 'At section boundaries that do not cut through coils, drain pans, fan arrays or energy recovery devices, typically between access sections and the next component. Fewer splits reduce field work and leakage risk.'],
    ['What limits AHU section size besides the truck?', 'Building doors and corridors for indoor units, crane capacity at the required lift radius for rooftop units, and floor or roof capacity during setting. The tightest of these sets the section size.'],
]);
