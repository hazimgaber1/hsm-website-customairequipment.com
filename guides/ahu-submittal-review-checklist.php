<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-submittal-review-checklist'); ?>
<p class="lede">An air handler submittal review should confirm that the drawings fit the space and connections, the performance meets the schedule, the electrical data matches the power design, the options match the specification, and every exception the manufacturer has taken is visible and resolved before release for fabrication.</p>

<h2>Before you open the drawings</h2>
<ul>
<li>Submittal is for the correct tag(s) and the current revision of the contract documents.</li>
<li>Transmittal lists all contents; nothing missing (drawings, performance data, wiring diagrams, sound data, weights).</li>
<li>Manufacturer's list of deviations or exceptions is included. If none is listed, ask for a written statement of full compliance.</li>
<li>Addenda and approved substitutions are reflected.</li>
<li>Reviewer has the schedule, specification section and relevant drawings open alongside.</li>
</ul>

<h2>Drawings and dimensions</h2>
<ul>
<li>Overall dimensions fit within the space shown on the drawings, with required service clearances.</li>
<li>Section lengths and shipping splits fit the rigging route and access openings.</li>
<li>Arrangement matches the schedule: component sequence, airflow direction, handing.</li>
<li>Access doors are where maintenance needs them, on the correct side, swinging the correct way relative to pressure.</li>
<li>Duct connection sizes and locations match the duct drawings.</li>
<li>Pipe connection sizes, locations and hand match the piping drawings; coil pull space is available.</li>
<li>Electrical connection points and disconnect locations are accessible and coordinate with the electrical drawings.</li>
<li>Drain connections and the base frame height allow the required condensate trap depth.</li>
<li>Base frame and support points coordinate with the pad, curb or dunnage.</li>
<li>Operating weights and point loads are provided for the structural engineer.</li>
<li>Outdoor units: roof, weatherproofing, intake and exhaust hoods shown.</li>
</ul>

<h2>Performance</h2>
<ul>
<li>Airflow matches the schedule, at the stated air density or altitude.</li>
<li>External static matches; total static build-up is shown and complete. Reading this data is explained in <a href="<?= url('guides/reading-ahu-selection-report') ?>">how to read an AHU selection report</a>.</li>
<li>Filter pressure drop basis (clean, mid-life or dirty) matches the specification.</li>
<li>Fan type, quantity, wheel size, speed and brake horsepower are shown; operating point is stable.</li>
<li>Redundant fan performance is shown with one fan out, if specified.</li>
<li>Fan efficiency or FEI meets the specification and applicable code.</li>
<li>Motor horsepower, efficiency class and type match the specification.</li>
<li>Coil capacities, leaving conditions, face velocities and fluid pressure drops meet the schedule.</li>
<li>Coil rows, fin spacing and materials match the specification, or deviations are listed.</li>
<li>Energy recovery effectiveness, pressure drops and leakage values meet the schedule.</li>
<li>Humidifier capacity and absorption distance are shown, with sufficient downstream length.</li>
<li>Sound power data provided by octave band for the required paths.</li>
</ul>

<h2>Casing construction</h2>
<ul>
<li>Panel thickness, inner and outer skin material and gauge match the specification.</li>
<li>Insulation type and fire performance meet the specification.</li>
<li>Casing leakage and deflection performance stated, with test basis.</li>
<li>Thermal break construction provided if specified.</li>
<li>Floor and drain pan construction (material, slope, welded or sealed) as specified.</li>
<li>Door construction, gaskets, latches and viewing windows as specified.</li>
</ul>
<p>Detailed casing review items have their own list: <a href="<?= url('guides/casing-submittal-review-checklist') ?>">casing submittal review checklist</a>.</p>

<h2>Electrical</h2>
<ul>
<li>Voltage, phase and frequency match the electrical design.</li>
<li>Minimum circuit ampacity and maximum overcurrent protection provided and coordinated with feeders.</li>
<li>Number of power connections matches the design (single-point or multiple).</li>
<li>Disconnects, VFDs and their enclosures as specified; enclosure type suits the location.</li>
<li>VFD bypass provided if specified.</li>
<li>Wiring diagrams show factory and field wiring clearly distinguished.</li>
<li>Service lights, receptacles and switches as specified, with their power source identified.</li>
<li>Listing to UL 1995 or CSA C22.2 No. 236, as required for the jurisdiction.</li>
</ul>

<h2>Options and accessories</h2>
<ul>
<li>Dampers: type, leakage class, actuator type and fail position.</li>
<li>Filters: type, efficiency rating, quantity and sizes, gauges or transmitters.</li>
<li>Controls: factory-installed scope, sensors, controller, protocol, points list.</li>
<li>Freeze protection devices as specified.</li>
<li>Smoke detectors: who provides, who installs and where located.</li>
<li>Vibration isolation: internal or external, deflection.</li>
<li>Seismic certification or restraint provisions if required.</li>
<li>Spare parts, extra filters and special tools as specified.</li>
</ul>

<h2>Testing, warranty and documentation</h2>
<ul>
<li>Factory tests listed and match the specification: run test, casing leakage, coil pressure tests.</li>
<li>Witness test dates proposed, if specified.</li>
<li>Warranty terms match the specification.</li>
<li>Startup and training scope confirmed.</li>
<li>Operation and maintenance manual content listed.</li>
</ul>

<h2>Controls and sequences</h2>
<ul>
<li>Factory-mounted points match the points list in the controls specification.</li>
<li>Sensor types, ranges and locations are shown on the drawings.</li>
<li>Controller model, firmware and communication protocol match the building automation requirements.</li>
<li>Sequence of operation, if programmed in the factory, matches the issued sequence word for word or lists deviations.</li>
<li>Safeties (freeze, high static, smoke shutdown) are shown with their wiring and reset method.</li>
<li>Interface points between factory and field controls are clearly marked.</li>
</ul>

<h2>Recording the review</h2>
<ul>
<li>Each comment refers to a specific page, item or drawing location.</li>
<li>Comments are clear actions: revise, confirm, provide.</li>
<li>Exceptions are accepted, rejected or returned for discussion, each explicitly.</li>
<li>Review stamp states the action clearly: reviewed, reviewed as noted, revise and resubmit, rejected.</li>
<li>Any changes that affect other trades are flagged to them.</li>
</ul>
<p class="note">Code-compliance documentation (energy code forms, certifications) is checked separately; see <a href="<?= url('guides/code-compliance-submittal-checklist') ?>">code compliance submittal checklist</a>.</p>
<?php guide_end([
    ['What should an AHU submittal review cover?', 'It should confirm dimensions, arrangement and connections against the drawings, performance against the schedule, electrical data against the power design, construction and options against the specification, and resolve all listed exceptions.'],
    ['How do I handle exceptions in an AHU submittal?', 'Ask the manufacturer for a written list of every deviation. Accept, reject or return each one explicitly in the review comments, and flag any that affect other trades or other parts of the design.'],
    ['Do I need to check weights on an AHU submittal?', 'Yes. Operating weights and support point loads are needed by the structural engineer, and shipping section weights are needed for rigging. Missing weights should be requested before approval.'],
]);
