<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('indoor-vs-outdoor-air-handling-units'); ?>
<p class="lede">Put the AHU indoors when the building can give up a mechanical room and you value easy, weather-protected maintenance and long equipment life; put it outdoors when floor space is expensive or unavailable and the roof can carry the load. Outdoor units cost more per unit but can save more than that in building area.</p>

<h2>What is really being compared</h2>
<p>An outdoor air handler is not just an indoor unit moved outside. It needs a weatherproof roof, sealed seams, intake hoods, and usually heated enclosures for piping and controls. An indoor unit needs a room with walls, a floor, ventilation, lighting, access doors and often shafts to reach the roof. The comparison is between the cost and consequences of those two packages, not just two price tags.</p>
<p>Construction details for weather resistance are covered in the casing category under <a href="<?= url('guides/outdoor-unit-weatherproofing') ?>">weatherproofing outdoor AHUs</a>. This guide stays with the location decision.</p>

<h2>Side-by-side comparison</h2>
<table>
<thead><tr><th>Factor</th><th>Indoor AHU</th><th>Outdoor AHU</th></tr></thead>
<tbody>
<tr><td>Unit cost</td><td>Lower; standard casing</td><td>Higher; weatherproof roof, hoods, thicker insulation, often a vestibule</td></tr>
<tr><td>Building cost</td><td>Mechanical room, shafts and structure</td><td>Roof structure, curbs or dunnage, roof penetrations</td></tr>
<tr><td>Usable floor area</td><td>Consumes rentable or programmable space</td><td>Frees interior space</td></tr>
<tr><td>Service conditions</td><td>Protected from weather; any season</td><td>Exposed in winter storms and summer heat unless a vestibule is provided</td></tr>
<tr><td>Equipment life</td><td>Longer; no UV, rain or freeze-thaw on casing</td><td>Shorter casing life without good coatings; components similar</td></tr>
<tr><td>Freeze risk</td><td>Low; room stays above freezing</td><td>Higher; piping, coils and traps exposed</td></tr>
<tr><td>Envelope heat loss</td><td>Room is inside the envelope</td><td>Unit casing becomes part of the envelope for ducts and plenums</td></tr>
<tr><td>Noise</td><td>Contained by room construction</td><td>Breakout to roof and neighbours; property line limits may apply</td></tr>
<tr><td>Replacement</td><td>May require knockdown construction or wall openings</td><td>Crane lift; often simpler if the roof is accessible</td></tr>
<tr><td>Outdoor air intake</td><td>Ducted from a louver or wall</td><td>Direct, through a hood on the unit</td></tr>
</tbody>
</table>

<h2>Cost: count the building, not just the unit</h2>
<p>An outdoor unit typically costs more than an indoor unit of the same capacity because of the weatherproofing, heavier insulation and frequently a service vestibule. That premium is offset by what the building does not need: the mechanical room floor area, walls, doors, lighting, sprinklers, the shaft from the room to the roof for outdoor air and relief, and the structure under the room. In multistorey buildings where floor area has high value, or where adding a penthouse is expensive, the outdoor unit often wins on total installed cost. In low-rise buildings with cheap basement or ground-floor space, indoor units usually win.</p>
<p>Ask for both options to be priced as installed systems, including the architectural and structural items, before deciding.</p>

<h2>Service and reliability</h2>
<p>Maintenance happens on schedule, not on good-weather days. Filter changes in a Canadian January or belt work in a Texas August are harder outdoors, and harder tasks tend to get deferred. Indoor rooms keep technicians, controls and VFDs in a stable environment. If an outdoor location is chosen, a heated, lit service vestibule housing controls, drives and piping recovers much of this advantage; see <a href="<?= url('guides/outdoor-service-vestibules') ?>">integral service vestibules</a>.</p>
<p class="warn">Outdoor units in cold climates need careful freeze protection: heated vestibules for piping, heat-traced condensate traps and preheat strategies that keep water coils safe if a fan trips or a damper fails open.</p>

<h2>Envelope and energy</h2>
<p>When the unit is outdoors, its casing separates conditioned air from the weather. Panel insulation, thermal breaks and casing leakage now affect building energy use directly, much like a wall. Supply and return ducts passing through the roof also need careful insulation and air sealing. Indoor units sit within the conditioned or semi-conditioned envelope, so casing heat loss mostly ends up in the building.</p>
<p>On the other hand, an outdoor unit with an integral intake avoids long outdoor air ducts inside the building, which can sweat or leak and need insulation.</p>

<h2>Acoustics and neighbours</h2>
<p>A rooftop unit radiates sound through its casing and from its intake and relief openings. Occupied spaces directly below, and neighbours across a property line, can be affected. Indoor units benefit from the mass of the room walls and floor. Outdoor units may need heavier casings, packless or lined attenuators at openings, or acoustic barriers. The noise path from rooftop equipment is covered in <a href="<?= url('guides/rooftop-ahu-breakout-noise') ?>">rooftop AHU breakout noise</a>.</p>

<h2>Decision checklist</h2>
<ol>
<li>What is the value of the floor area a mechanical room would take?</li>
<li>Can the roof structure carry the unit, and how will it be supported?</li>
<li>How severe is the climate for service and freeze protection?</li>
<li>Are there acoustically sensitive spaces below or nearby neighbours?</li>
<li>How will the unit be replaced in 25 or 30 years?</li>
<li>Does the architecture allow equipment on the roof, or are screens required?</li>
</ol>
<h2>Replacement in 25 years</h2>
<p>Think about the second unit as well as the first. An indoor unit set before the walls went up may have no route out of the building without demolition, which pushes the replacement toward knockdown construction or rebuilding in place. An outdoor unit can usually be lifted off and a new one set on the same curb or dunnage, provided crane access is preserved as neighbouring buildings and site features change. If an indoor location is chosen, reserve a removable wall panel or louver that a future unit can pass through.</p>
<?php guide_end([
    ['Are outdoor air handlers more expensive than indoor units?', 'The unit itself usually costs more because of weatherproofing, insulation and often a vestibule. The total installed cost can be lower, though, because the building does not need a mechanical room, shafts or the structure that supports them.'],
    ['Do outdoor air handlers last as long as indoor units?', 'Components such as fans and coils can last a similar time, but outdoor casings face UV, rain and freeze-thaw cycles. With good coatings, materials and maintenance they can have long lives, but indoor casings generally age more slowly.'],
    ['What is a rooftop air handler?', 'A rooftop air handler is a central-station AHU built for outdoor installation on a roof. Unlike a packaged rooftop unit, it typically uses chilled water, hot water or remote refrigeration rather than integral compressors.'],
]);
