<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('seismic-wind-structural-casing-design'); ?>
<p class="lede">An AHU casing and base are engineered for seismic and wind loads by calculating the lateral and uplift forces the building code requires for the site, then designing a continuous load path from every heavy component, through internal supports, the casing and base frame, to anchor points on the structure. In the US the forces come from the IBC via ASCE 7; in Canada from the National Building Code of Canada.</p>

<h2>Why an AHU needs structural design</h2>
<p>Most of the time, an air handler only carries gravity load. During an earthquake, the building accelerates sideways and the unit must accelerate with it; a heavy coil or fan that is not tied down becomes a projectile inside the casing. On a roof, wind pushes sideways, lifts the unit and tries to peel off roof panels. Both cases put horizontal and upward forces on a structure that was designed mostly for vertical load. If any link in the chain fails, the unit can slide, overturn, open up, or lose a component internally.</p>

<h2>Where the forces come from</h2>
<h3>Seismic</h3>
<p>Building codes treat mechanical equipment as nonstructural components. In the US, ASCE 7, referenced by the IBC, gives a formula for the horizontal design force on a component as a function of the site's seismic hazard, the component's weight, its importance factor, its location height in the building and factors reflecting its dynamic behaviour and ductility. In Canada, the NBC has a comparable approach for operational and functional components. Key effects:</p>
<ul>
<li>Higher seismic hazard at the site raises the force.</li>
<li>Units higher in a building (on roofs or upper floors) see larger forces than units at grade, because floor accelerations amplify with height.</li>
<li>Equipment that must keep working after an earthquake, such as in hospitals and emergency facilities, has a higher importance factor and may need certification that it remains functional.</li>
<li>Units on vibration isolators see amplified forces and need snubbers or restrained isolators.</li>
</ul>
<h3>Wind</h3>
<p>ASCE 7 and the NBC also define wind pressures on rooftop equipment as a function of basic wind speed or reference velocity pressure for the site, exposure, building height and the equipment's projected area. Rooftop units see horizontal force on the side facing the wind and uplift on the roof. Taller units and units on tall buildings see more.</p>
<p class="note">Specific coefficients, factors and limits depend on the code edition and local amendments. Use the edition adopted in your jurisdiction, and get site data from the structural engineer of record.</p>

<h2>The load path</h2>
<p>Designing for these forces means following each one from where it is generated to where it leaves the unit:</p>
<ol>
<li><strong>Components to internal supports.</strong> Coils, fans, motors, humidifiers and energy recovery devices are anchored to their supports with fasteners sized for lateral and uplift load, not just gravity. Fan bases on internal isolators need seismic snubbers.</li>
<li><strong>Internal supports to the base.</strong> Coil racks and fan bases connect to base cross members, not to floor panels or wall liners.</li>
<li><strong>Casing to base.</strong> Walls and roof are tied to the base so wind uplift on the roof, and lateral wind on the walls, transfer down. Frame posts at corners and section joints act as columns and braces.</li>
<li><strong>Section to section.</strong> Shipping splits are bolted with splice connections designed to transfer shear between sections, so the unit acts as one body.</li>
<li><strong>Base to structure.</strong> Anchor bolts, welded connections to curbs or dunnage, or restrained isolators carry the total force into the building structure. The base must have designed anchor points with known capacities.</li>
</ol>
<p>A weak point anywhere in this chain sets the capacity of the whole unit.</p>

<h2>Design features that resist lateral load</h2>
<table>
<thead><tr><th>Feature</th><th>Purpose</th></tr></thead>
<tbody>
<tr><td>Heavier base rails and cross members</td><td>Carry overturning moments between anchor points</td></tr>
<tr><td>Anchor tabs or plates at designated points</td><td>Provide known connection capacity to the structure</td></tr>
<tr><td>Corner and intermediate frame posts tied to base and roof</td><td>Form a rigid box that resists racking</td></tr>
<tr><td>Diagonal bracing in tall sections</td><td>Stiffen against racking where panels alone are not enough</td></tr>
<tr><td>Bolted roof-to-wall connections and roof hold-downs</td><td>Resist wind uplift on roof panels</td></tr>
<tr><td>Restrained isolators or seismic snubbers</td><td>Limit movement of isolated fans and of the whole unit on springs</td></tr>
<tr><td>Positive attachment of internal components</td><td>Prevent coils and fans from shifting inside the casing</td></tr>
<tr><td>Restraint of shipped-loose items</td><td>Hoods, louvers and vestibules need their own connections</td></tr>
</tbody>
</table>

<h2>Who does what</h2>
<ul>
<li><strong>Structural engineer of record:</strong> provides site seismic and wind parameters and designs the supporting structure, curb or dunnage.</li>
<li><strong>Mechanical engineer:</strong> specifies the requirement, the importance factor and whether functional certification is needed.</li>
<li><strong>AHU manufacturer:</strong> designs the unit's internal load path, base and anchor points for the specified forces, and provides anchor locations and loads.</li>
<li><strong>Seismic restraint designer:</strong> often designs isolators, snubbers and attachments to structure, sometimes under delegated design.</li>
</ul>
<p>Documentation and certification requirements, such as special seismic certification for essential facilities, are covered in the codes category under <a href="<?= url('guides/seismic-certification-ahus') ?>">seismic certification of AHUs</a>. Field installation of restraints is covered in <a href="<?= url('guides/seismic-restraint-installation') ?>">seismic restraint installation</a>.</p>

<h2>Practical checks on a design</h2>
<ul>
<li>Is the design force based on the correct site data, building height and importance factor?</li>
<li>Does the anchor layout match the curb, dunnage or pad design?</li>
<li>Are internal components restrained for the same forces as the unit?</li>
<li>Do shipping split connections transfer shear and tension?</li>
<li>Is the roof attached for uplift, and are hoods and vestibules restrained?</li>
<li>If the unit is on isolators, are they seismically restrained?</li>
</ul>
<?php guide_end([
    ['Do air handlers need seismic design?', 'In most seismic regions, building codes require mechanical equipment and its anchorage to resist seismic forces calculated from the site hazard, the unit weight and its location in the building. Essential facilities may also require certification that the unit stays functional.'],
    ['Which codes govern seismic and wind loads on AHUs?', 'In the United States, the International Building Code references ASCE 7 for seismic and wind loads on equipment. In Canada, the National Building Code of Canada and provincial codes apply. Use the edition and local amendments in force for the project.'],
    ['How is an outdoor AHU held down against wind?', 'The roof is fastened to the walls, the walls and frame are tied to the base, and the base is anchored to the curb, dunnage or structure at designed points. Each connection is sized for the wind uplift and lateral force calculated for the site.'],
]);
