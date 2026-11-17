<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('using-manufacturer-bim-models'); ?>
<p class="lede">Manufacturer BIM models of air handlers let you place an accurate unit in the building model early, check it against structure, services and clearances, and coordinate connections; the work is in importing them correctly, checking that the model matches the selection, and keeping it current as the selection changes.</p>

<h2>What a manufacturer model typically contains</h2>
<p>A Revit family or other BIM object for a custom air handler usually includes the outer casing geometry, section breaks, duct connection openings, pipe connection points, electrical connection points, access door locations and swing, and service clearance zones. Parameters may carry airflow, weights, electrical data and model numbers. Detail levels vary: some models are simplified envelopes, others include internal components. For custom units, the model is often generated from the selection or submittal drawings for the specific project.</p>
<p class="note">Ask for a model at a level of detail suited to coordination. A model with every fastener and internal component slows the project model without improving coordination.</p>

<h2>Step 1: Request the right model</h2>
<ol>
<li><strong>Specify the format and version</strong> of the authoring software your team uses, for example the Revit release year. Families saved in a newer version will not open in an older one.</li>
<li><strong>Specify the level of detail</strong> expected: envelope with connections and clearances is usually enough for design coordination.</li>
<li><strong>Request connectors.</strong> Duct, pipe and electrical connectors with correct system classification and size allow the model to connect to ductwork and piping in the authoring tool.</li>
<li><strong>Request parameters</strong> you need for schedules: tag, airflow, weights, electrical data, model number.</li>
<li><strong>Request clearance zones</strong> for coil pull, filter access, door swing and electrical working space, as separate visible geometry that can be turned on for clash checks.</li>
</ol>

<h2>Step 2: Import and check the model</h2>
<ol start="6">
<li><strong>Load the family into a test file first,</strong> not directly into the project model. Check that it loads cleanly and does not bring in unwanted line styles, materials or families.</li>
<li><strong>Check units and origin.</strong> Confirm imperial or metric units match, and that the insertion point is where you expect, typically a corner of the base.</li>
<li><strong>Check dimensions against the selection.</strong> Compare overall length, width and height and section lengths with the manufacturer's selection printout or submittal drawing. A model from an earlier selection can differ by several feet.</li>
<li><strong>Check connections.</strong> Verify duct opening sizes and locations, pipe connection sizes and hand, and electrical connection location against the drawings.</li>
<li><strong>Check weights</strong> in the parameters against submittal data.</li>
<li><strong>Check file size</strong> and performance; very heavy families slow the project model.</li>
</ol>

<h2>Step 3: Place and coordinate</h2>
<ol start="12">
<li>Place the unit on its pad, curb or dunnage at the correct elevation, including base frame and isolator height.</li>
<li>Connect ductwork and piping to the model's connectors.</li>
<li>Turn on clearance zones and run clash detection against structure, other services and architecture.</li>
<li>Check the condensate trap height under the base: the drain connection elevation must allow the required trap depth above the floor.</li>
<li>Check the access route if the model includes shipping sections; confirm each section can travel through the building or be lifted into place.</li>
<li>Coordinate with structural on support locations using the model's support points or a separate support drawing.</li>
<li>Coordinate with electrical on disconnect locations and working space.</li>
</ol>
<p>For replacement projects, the model can be placed into a point cloud of the existing room; the survey process is described in <a href="<?= url('guides/field-survey-laser-scanning') ?>">how to survey an existing mechanical room with laser scanning</a>.</p>

<h2>Step 4: Keep it current</h2>
<ol start="19">
<li><strong>Track the model version</strong> against the selection revision. Add a parameter or note recording the selection date or revision.</li>
<li><strong>Update after every significant change:</strong> added sections, changed coils, revised fan array or new shipping splits.</li>
<li><strong>Replace with the submittal model</strong> after approval. The approved submittal model, if provided, should become the coordination reference.</li>
<li><strong>Issue the final model</strong> with record documents so the owner's facility team has accurate geometry.</li>
</ol>

<h2>Common problems and fixes</h2>
<table>
<thead><tr><th>Problem</th><th>Cause</th><th>Fix</th></tr></thead>
<tbody>
<tr><td>Model will not load</td><td>Saved in a newer software version</td><td>Request a version matching your software</td></tr>
<tr><td>Ductwork will not connect</td><td>Missing or wrongly classified connectors</td><td>Ask the manufacturer to add connectors, or add them in the family editor</td></tr>
<tr><td>Unit dimensions differ from submittal</td><td>Model from an earlier selection</td><td>Request an updated model; record revision</td></tr>
<tr><td>Project model slows significantly</td><td>Excessive geometric detail</td><td>Request a simplified model or use a lower detail level</td></tr>
<tr><td>Clearance clashes not detected</td><td>Clearance zones not modelled or hidden</td><td>Add clearance geometry and include it in clash rules</td></tr>
<tr><td>Wrong handing</td><td>Mirrored family or wrong configuration</td><td>Check pipe connection side against schedule; reload correct hand</td></tr>
</tbody>
</table>

<h2>Using models during selection</h2>
<p>Models are useful before a final selection exists. Generic models sized from early estimates help reserve space; methods for those estimates are in <a href="<?= url('guides/ahu-weight-dimension-estimating') ?>">estimating AHU weight and dimensions early in design</a>. Interactive configurators can produce a model of a proposed arrangement quickly; the <a href="<?= url('design') ?>">3D configurator</a> is one way to explore layout options before a formal selection is requested.</p>
<p class="warn">A model is not a submittal. Dimensions, weights and connections must still be confirmed on the approved shop drawings before construction.</p>
<?php guide_end([
    ['What should a manufacturer AHU BIM model include?', 'It should include accurate outer geometry, section breaks, duct, pipe and electrical connectors with correct sizes, access door locations, service clearance zones and parameters for weight, airflow and electrical data.'],
    ['How do I check a manufacturer AHU model before using it?', 'Load it into a test file, confirm units and insertion point, compare dimensions and connections with the current selection or submittal, check weights and file size, then place it in the project model.'],
    ['Can I use a manufacturer model instead of shop drawings?', 'No. A BIM model supports coordination but is not a submittal. Dimensions, weights and connection details must be confirmed on approved shop drawings before construction.'],
]);
