<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('rigging-methods-crane-skidding-helicopter'); ?>
<p class="lede">Use a mobile crane when there is a clear path from the truck to the set point, skid sections on rollers when the unit has to travel horizontally into a building, and reserve helicopter lifts for light sections on tall or landlocked roofs where no crane can reach. Many projects combine two methods.</p>

<h2>What drives the choice of rigging method</h2>
<p>Rigging is decided by four things: the heaviest section weight, the horizontal reach from where the truck can park to where the unit sits, what is in the way (overhead lines, adjacent buildings, finished interiors), and how much disruption the site can tolerate. A 20,000 lb section that only needs to go 40 ft from the curb onto a podium roof is a straightforward crane pick. The same section going into a basement mechanical room through an areaway is a skidding job, possibly preceded by a short crane pick down to grade level.</p>
<p>Settle the rigging method before shipping splits are finalized. Section weights, lifting lug locations and base rail design all follow from how each piece will be handled. The factory can design splits around a rigging plan; it cannot easily redesign a split after the unit is built. See <a href="<?= url('guides/shipping-split-design') ?>">shipping split design</a> for how section boundaries are chosen.</p>

<h2>Side-by-side comparison</h2>
<table>
<thead><tr><th>Factor</th><th>Mobile or tower crane</th><th>Skidding (rollers, dollies, jacks)</th><th>Helicopter</th></tr></thead>
<tbody>
<tr><td>Typical section weight</td><td>Limited by crane capacity at radius; very heavy picks are possible with large cranes</td><td>Very heavy loads possible if the floor can carry them</td><td>Light sections only; capacity falls with altitude and temperature</td></tr>
<tr><td>Reach</td><td>Vertical and horizontal, limited by boom length and load chart</td><td>Horizontal only; vertical moves need jacks or a gantry</td><td>Unlimited horizontally within flight rules</td></tr>
<tr><td>Site needs</td><td>Outrigger pad, ground bearing capacity, street closure</td><td>Clear path, door openings, floor loading review</td><td>Staging area, flight path clear of people, aviation and municipal permits</td></tr>
<tr><td>Time per pick</td><td>Minutes once rigged; setup takes hours</td><td>Slow; hours to days for long runs</td><td>A few minutes per pick; very fast overall</td></tr>
<tr><td>Weather sensitivity</td><td>Wind limits per crane manufacturer</td><td>Low indoors</td><td>High; wind, visibility and density altitude</td></tr>
<tr><td>Cost profile</td><td>Moderate; crane day rate plus mobilization</td><td>Low equipment cost, higher labour</td><td>High hourly rate, but short duration</td></tr>
<tr><td>Best fit</td><td>Rooftops, podiums, open sites</td><td>Basements, interior plant rooms, under existing structure</td><td>Downtown high-rise roofs, landlocked sites, no crane access</td></tr>
</tbody>
</table>

<h2>Crane rigging</h2>
<p>A crane is the default for new construction because it handles weight and height in one operation. The controlling numbers are the section weight plus rigging gear, and the radius at which it must be placed. Crane capacity drops sharply as radius grows, so a section that is light by itself can still need a large crane if the set point is far from where the crane can sit. Street closures, ground bearing under the outriggers and overhead power lines are the usual obstacles.</p>
<p>Lift weights, pick points, spreader bars and crane sizing are covered step by step in <a href="<?= url('guides/crane-lift-planning') ?>">how to plan a crane lift for AHU sections</a>; this page only compares methods.</p>

<h2>Skidding and rolling</h2>
<p>Skidding moves a section horizontally on machinery skates, roller dollies or greased skid tracks, pushed or pulled with come-alongs, winches or hydraulic push-pull units. Hydraulic jacks or a gantry raise and lower the section where needed. It is the right method when the destination is inside a building and no opening allows a vertical drop.</p>
<ul>
<li><strong>Floor loading:</strong> skates concentrate load. Ask the structural engineer to review the path, and spread load with plywood, steel plates or cribbing where required.</li>
<li><strong>Base rail:</strong> the unit base must be stiff enough to ride on point supports without racking. Tell the manufacturer that the unit will be skidded so the base and jacking points are designed for it.</li>
<li><strong>Clearances:</strong> measure every door, corridor turn and ceiling soffit along the route. A field survey often reveals that the section must be knocked down further.</li>
</ul>
<p class="note">When the route into an existing building is too tight for any shipping section, a panelized unit assembled in the room avoids rigging limits entirely. See <a href="<?= url('guides/knockdown-ahu-construction') ?>">knockdown AHU construction</a>.</p>

<h2>Helicopter lifts</h2>
<p>Helicopters suit high-rise roofs in dense downtowns, where a crane would need a long street closure or simply cannot reach. Each pick takes only minutes, so a set of light sections can go up in a single early-morning window. The trade-offs are capacity and planning. Lift capacity depends on the aircraft, the altitude and the air temperature, and the operator will want exact weights, centre of gravity and a rigging arrangement that does not spin the load.</p>
<ul>
<li>Expect aviation and municipal approvals, a cleared landing and staging zone, and evacuation of the flight path below.</li>
<li>Keep sections compact and lightweight; this may mean more splits and more field joining time on the roof.</li>
<li>Have the roof crew, guide lines and fastening gear ready so the aircraft is not hovering while people search for tools.</li>
<li>Secure loose panels, doors and protective covers. Rotor downwash will lift anything not fastened.</li>
</ul>

<h2>Combining methods and deciding</h2>
<p>Mixed approaches are common: a crane lowers sections to a loading dock and crews skid them inside; or a helicopter sets the heavy pieces onto a roof and a small davit or roof crane positions the rest. Work through these questions in order:</p>
<ol>
<li>Can a crane be positioned with a reasonable radius and permit? If yes, it is usually the simplest choice.</li>
<li>Is the final location indoors with only horizontal access? Plan skidding and confirm floor capacity.</li>
<li>Are the roof and street both inaccessible to cranes? Price a helicopter and resize sections to its capacity.</li>
<li>Do none of these work? Consider a knockdown unit built inside the space.</li>
</ol>
<p>Weight estimates early in design make this decision far easier; see <a href="<?= url('guides/ahu-weight-dimension-estimating') ?>">estimating AHU weights and dimensions</a>. When a project has a difficult access path, share it with the manufacturer at the quote stage so splits can be sized to the method. Custom Air Equipment builds <a href="<?= url('products/retrofit-knockdown') ?>">retrofit and knockdown units</a> for sites where none of the conventional rigging methods work.</p>
<?php guide_end([
    ['Is a helicopter lift cheaper than a crane for an AHU?', 'Sometimes. The hourly rate is much higher, but a helicopter can set several light sections in under an hour, avoiding long street closures and large crane mobilization. It tends to win on tall downtown roofs and lose on low buildings with open access.'],
    ['Can any air handler be skidded into a building?', 'Only if the base is designed to ride on skates or rollers without racking and the floor along the route can carry the concentrated loads. Tell the manufacturer the unit will be skidded so jacking points and base rails are designed for it.'],
    ['Who is responsible for the rigging plan?', 'Normally the installing contractor and its rigging subcontractor prepare the plan, with input from the manufacturer on weights, centre of gravity and lifting points. The structural engineer reviews floor and roof loading where needed.'],
]);
