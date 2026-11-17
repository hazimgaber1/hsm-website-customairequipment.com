<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('outdoor-air-intake-placement'); ?>
<p class="lede">Place outdoor air intakes so that the separation distance from every nearby contaminant source meets ASHRAE 62.1 (or the code adopted locally), measured as the shortest path between the edge of the source and the edge of the intake. Start the layout with the sources, not the air handler, and use the prevailing wind, building geometry and future equipment to choose among locations that pass the minimum distances.</p>

<h2>Why intake location matters</h2>
<p>An intake brings in whatever is in the air at its face. A building's own exhaust, a neighbour's kitchen hood, a loading dock or a cooling tower can all deliver contaminants straight into the supply air. Re-entrainment is often worse than it looks on a plan, because wind flowing over a building creates recirculation zones on the roof and on the leeward side that trap and fold exhaust back toward intakes. A properly located intake avoids problems that no amount of filtration solves cheaply.</p>

<h2>Separation distances in ASHRAE 62.1</h2>
<p>ASHRAE 62.1 contains a table of minimum separation distances between outdoor air intakes and specific source types. Exhaust air is grouped into classes by contaminant concentration and odour intensity, from Class 1 (low contaminant, such as office exhaust) to Class 4 (highly objectionable or potentially hazardous, such as laboratory fume hood exhaust). Higher classes require larger separations.</p>
<p>The source list in recent editions includes, among others: exhaust and relief outlets by class, plumbing vents, vents and flues from combustion appliances, garage entries, loading docks and bus parking, driveways and streets, high-traffic thoroughfares, garbage storage, cooling tower intakes and exhausts, and the roof or grade surface directly below the intake. Typical values range from about 1 ft (0.3 m) for the surface below the intake up to around 30 ft (9 m) for the most objectionable exhaust.</p>
<p class="warn">Distances, classes and source categories have been revised between editions, and model codes such as the IMC and provincial codes have their own intake separation requirements. Take every value from the edition and code adopted for the project, and use the more stringent where both apply.</p>
<p>The standard also allows an alternative: a dilution calculation in an appendix that estimates the concentration of exhaust at the intake based on exhaust flow, velocity and distance. This can justify a closer separation for a high-velocity exhaust or confirm that a planned distance is adequate.</p>

<h2>Step-by-step intake placement</h2>
<ol>
<li><strong>Map every source.</strong> On the site and roof plans, mark all exhausts and relief outlets (with their class), plumbing vents, flues, generator exhausts, cooling towers, loading docks, garbage areas, driveways, parking, adjacent streets and neighbouring buildings' exhausts and intakes. Include future equipment allowances.</li>
<li><strong>Draw separation circles.</strong> Around each source, draw its required separation distance. Areas outside all circles are candidate intake zones.</li>
<li><strong>Consider wind.</strong> Identify prevailing wind directions from climate data. Prefer intakes upwind of major exhausts. Avoid placing intakes in the recirculation zone directly downwind of a roof parapet, penthouse or tall rooftop equipment.</li>
<li><strong>Consider height differences.</strong> Exhausts that discharge vertically at high velocity above roof level disperse better than horizontal or downward discharges. An intake low on a wall below a roof exhaust may be inside its plume in certain winds even if the plan distance is adequate.</li>
<li><strong>Keep intakes above the surface.</strong> Raise intake openings above the roof or grade by at least the minimum distance, and further where snow, debris, standing water or landscape irrigation could interfere. Snow and rain management at the intake itself is covered in <a href="<?= url('guides/snow-rain-intrusion-outdoor-intakes') ?>">snow and rain intrusion at outdoor air intakes</a>.</li>
<li><strong>Check vehicle and people sources.</strong> Avoid intakes near drop-off zones, idling areas and smoking areas.</li>
<li><strong>Coordinate with the building's own exhaust design.</strong> Relocating or raising an exhaust can be cheaper than moving an intake. Lab exhaust stacks are designed specifically for dispersion; see <a href="<?= url('guides/lab-exhaust-fans-stack-design') ?>">lab exhaust fan and stack design</a>.</li>
<li><strong>Document the separation.</strong> Show measured distances on drawings for review by the authority having jurisdiction.</li>
<li><strong>Re-check after design changes.</strong> Late changes to rooftop equipment or a new tenant's kitchen exhaust can invalidate the original layout.</li>
</ol>

<h2>Measuring the distance correctly</h2>
<p>Separation is measured as the shortest straight-line distance from the closest point of the source opening to the closest point of the intake opening, in any direction. For a louver on a rooftop unit, that is the edge of the louver, not the centre of the unit. Where a vertical stack discharges well above an intake, the standard's rules for how vertical separation is credited should be checked in the edition being used.</p>

<h2>Common problem layouts</h2>
<table>
<thead><tr><th>Layout</th><th>Problem</th><th>Better approach</th></tr></thead>
<tbody>
<tr><td>Rooftop AHU intake beside its own relief hood</td><td>Short-circuiting of exhaust into intake</td><td>Separate by required distance; orient intake and relief on opposite sides</td></tr>
<tr><td>Intake at grade next to loading dock</td><td>Diesel exhaust drawn in</td><td>Raise intake or move to opposite façade</td></tr>
<tr><td>Intake behind a parapet</td><td>Recirculation zone traps exhaust</td><td>Raise intake above parapet zone or relocate</td></tr>
<tr><td>Intake near cooling tower drift</td><td>Moisture and microbiological risk</td><td>Meet tower separations and stay upwind</td></tr>
<tr><td>Kitchen exhaust upwind of intake</td><td>Odour complaints</td><td>Relocate or raise exhaust discharge</td></tr>
</tbody>
</table>

<h2>When the minimum is not enough</h2>
<p>Minimum distances are a floor. Sites with large or toxic exhausts, hospitals, laboratories, emergency generators and dense urban sites may warrant wind tunnel or computational dispersion modelling. Owners of critical facilities often set larger separations in their design standards. Where re-entrainment cannot be avoided entirely, gas-phase filtration can address specific contaminants, at a cost; see <a href="<?= url('guides/gas-phase-carbon-filtration') ?>">gas-phase filtration</a>.</p>
<?php guide_end([
    ['How far should an outdoor air intake be from an exhaust?', 'ASHRAE 62.1 sets minimum separation distances that depend on the exhaust air class, ranging from about 10 feet for lower-class exhaust to around 30 feet for the most objectionable exhaust in recent editions. Use the values in the edition and code adopted for your project.'],
    ['How is intake separation distance measured?', 'It is the shortest straight-line distance between the closest edge of the contaminant source opening and the closest edge of the intake opening, measured in any direction. For a louver it is the louver edge, not the unit centre.'],
    ['Can the separation distance be reduced?', 'ASHRAE 62.1 provides an alternative dilution calculation that can justify a different separation based on exhaust flow, velocity and distance. Local codes may have their own requirements, so confirm acceptance with the authority having jurisdiction.'],
]);
