<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('field-survey-laser-scanning'); ?>
<p class="lede">A good mechanical room survey captures the room geometry, every obstruction and every connection point, and the full route a replacement unit must travel; tape and laser distance meters handle simple rooms, while 3D laser scanning captures crowded or complex spaces as a point cloud you can measure later and overlay with the new unit's model.</p>

<h2>Decide which method fits the job</h2>
<table>
<thead><tr><th>Method</th><th>Best for</th><th>Limitations</th></tr></thead>
<tbody>
<tr><td>Tape and handheld laser distance meter</td><td>Small, rectangular rooms with few obstructions; quick checks</td><td>Easy to miss items; elevations and angled surfaces hard to capture; relies on sketches</td></tr>
<tr><td>Terrestrial 3D laser scanning</td><td>Crowded rooms, multiple levels, complex piping, long access routes</td><td>Requires specialist equipment and registration; does not see behind objects or inside closed casings</td></tr>
<tr><td>Mobile or handheld scanning</td><td>Long access routes, corridors and stairs captured while walking</td><td>Lower accuracy than tripod scanning; check the stated tolerance</td></tr>
<tr><td>Photogrammetry</td><td>Visual documentation and moderate-accuracy models</td><td>Accuracy depends on technique and lighting; less suited to tight tolerances</td></tr>
</tbody>
</table>
<p>Many projects use both: a scan for overall geometry and a tape survey to confirm critical dimensions such as door openings and connection centrelines.</p>

<h2>Steps for a manual survey</h2>
<ol>
<li><strong>Prepare.</strong> Collect existing drawings, the old unit's submittal if available, and a floor plan of the route. Print large-format sketch sheets.</li>
<li><strong>Establish references.</strong> Pick fixed reference lines, typically two walls at right angles and the finished floor, and measure everything from them.</li>
<li><strong>Measure the room.</strong> Length, width and clear height at several points; note beam soffits, sprinkler mains, light fixtures, cable trays and anything hanging below the ceiling.</li>
<li><strong>Measure the existing unit.</strong> Overall dimensions, section breaks, access door locations and the space in front of each.</li>
<li><strong>Measure connections.</strong> Duct openings (size and centreline elevation), pipe connections (size, location and elevation), electrical entry points and condensate drain locations.</li>
<li><strong>Measure obstructions.</strong> Columns, pipes, conduits, other equipment and housekeeping pads, each tied back to the reference lines.</li>
<li><strong>Survey the route.</strong> At every door, corridor, turn, stair and elevator, record width, height and diagonal clearance. For turns, measure both corridors so the longest piece that can make the turn can be calculated.</li>
<li><strong>Photograph systematically.</strong> Shoot each wall and the ceiling with a scale reference visible, and every route pinch point.</li>
<li><strong>Record floor capacity concerns.</strong> Note floor materials and anything suggesting limited capacity along the route, such as raised floors or old wood framing.</li>
</ol>
<p class="note">Measure the diagonal of every door opening. A long panel that will not pass upright may pass tilted, and the diagonal tells you the limit.</p>

<h2>Steps for a 3D laser scan</h2>
<ol start="10">
<li><strong>Define the scope and accuracy.</strong> Tell the scanning provider which areas to capture (room, route, roof access) and the tolerance required. Ask what deliverable format the design team uses, typically a registered point cloud and optionally a modelled Revit or CAD file.</li>
<li><strong>Prepare the space.</strong> Open access panels and doors that should be captured, remove temporary storage where possible, and arrange access to locked areas and ceilings.</li>
<li><strong>Place targets or control.</strong> Scans are tied together using targets or overlapping geometry. For long routes or multiple floors, establish survey control to tie scans to building gridlines.</li>
<li><strong>Scan from multiple positions.</strong> Every surface that matters should be seen from at least one position. Behind large equipment, inside tight corners and above ceiling tiles often need extra setups.</li>
<li><strong>Register and check.</strong> The provider registers scans into a single point cloud and reports registration accuracy. Confirm it meets the scope.</li>
<li><strong>Spot-check with a tape.</strong> Measure several critical dimensions by hand and compare with the point cloud. This catches registration errors and gives the team confidence.</li>
<li><strong>Model what you need.</strong> Not everything needs modelling. Prioritize walls, structure, duct and pipe connections, and route clearances. Use the point cloud directly for everything else.</li>
</ol>

<h2>Using the survey data</h2>
<p>The survey feeds several design decisions. The room geometry and connection points define the envelope for the new unit. Route clearances set the maximum piece size and weight, which may determine whether the unit ships whole, in sections or as a knockdown. Obstructions identify what must be relocated temporarily. Comparing the old and new unit in the model reveals service clearance conflicts and code-required working spaces before construction.</p>
<p>When the manufacturer supplies a model of the proposed unit, it can be placed in the point cloud to check fit; that coordination process is described in <a href="<?= url('guides/using-manufacturer-bim-models') ?>">how to use manufacturer BIM and Revit models for AHUs</a>.</p>

<h2>Common survey misses</h2>
<ul>
<li>Door closers, hardware and thresholds that reduce clear opening height and width.</li>
<li>Sprinkler heads and pipes in corridors that reduce clear height along the route.</li>
<li>Elevator cab door width, which is usually narrower than the cab interior.</li>
<li>Landing dimensions on stairs, not just stair width.</li>
<li>Slab steps and ramps that change floor elevation in the route.</li>
<li>Items stored temporarily that hide the true room geometry.</li>
<li>Duct and pipe connections hidden inside insulation, which hides their true size.</li>
</ul>
<p class="warn">Survey under safe conditions. Lock out equipment before opening casings, and do not climb onto operating units to measure overhead items.</p>
<p>The results of the survey are often the most important input to a <a href="<?= url('guides/rebuild-in-place-ahu') ?>">rebuild-in-place</a> design or to a <a href="<?= url('products/retrofit-knockdown') ?>">knockdown unit</a> sized to the route.</p>
<?php guide_end([
    ['When is laser scanning worth it for an AHU replacement?', 'Scanning pays off in crowded rooms, multi-level spaces, long access routes and projects where the new unit must fit tightly between existing services. For simple rectangular rooms with clear access, a careful tape survey is usually sufficient.'],
    ['What should a mechanical room survey include?', 'It should capture room dimensions and clear heights, the existing unit, all duct, pipe and electrical connection points, obstructions, and every door, corridor, stair and elevator on the route from the loading area.'],
    ['How accurate is 3D laser scanning?', 'Accuracy depends on the scanner, setup and registration. Ask the provider to state the expected accuracy and check registration results, then spot-check critical dimensions with a tape measure.'],
]);
