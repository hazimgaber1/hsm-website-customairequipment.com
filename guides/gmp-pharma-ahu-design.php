<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('gmp-pharma-ahu-design'); ?>
<p class="lede">A GMP air handler exists to protect the product and, for potent compounds, the people and the environment. Regulators in Europe, the United States and Canada do not prescribe how to build one, but they expect the design to control particles, microbes, cross-contamination, temperature, humidity and pressure in a way that can be proven and kept under control.</p>

<h2>The regulatory frame</h2>
<p>Three bodies of guidance shape pharmaceutical HVAC in North America:</p>
<ul>
<li><strong>EU GMP Annex 1</strong>, revised in 2022, covers sterile products. Its major theme is a documented contamination control strategy (CCS) that ties together facility design, HVAC, people, processes and monitoring. Many North American plants follow it because they ship to Europe or because their corporate quality group adopts it globally.</li>
<li><strong>U.S. FDA guidance</strong> on sterile drug products produced by aseptic processing, together with 21 CFR Parts 210 and 211, sets expectations for air cleanliness, pressure differentials, HEPA integrity and monitoring in U.S.-regulated facilities.</li>
<li><strong>Health Canada's GMP guidance</strong> applies to drug establishments licensed in Canada. Canada participates in PIC/S, and its guidance aligns closely with the PIC/S GMP guide and its annexes, including the sterile annex.</li>
</ul>
<p>For non-sterile oral solid dose, API and packaging plants, WHO HVAC guidance and the ISPE Baseline Guide on HVAC are widely used references. None of these documents is an equipment standard. They describe outcomes, and the owner's quality unit decides how its plant achieves them.</p>
<p class="note">Get the owner's user requirements specification (URS) before sizing anything. It records which guidance the site follows, which parameters are GMP-critical and what alarm limits apply.</p>

<h2>Cleanliness grades and what they mean for airflow</h2>
<p>Annex 1 uses Grades A to D. Grade A is the critical zone for aseptic operations and is served by unidirectional airflow. Grade B is the background for Grade A. Grades C and D are for less critical steps. Each grade has particle limits at rest and in operation, which correspond to ISO 14644-1 classes but are not identical in every state. The air handler delivers these grades through HEPA filtration at the terminal, sufficient airflow, and an airflow pattern that sweeps contamination away from the product. The ISO class basis is explained in <a href="<?= url('guides/iso-14644-cleanroom-classes') ?>">ISO 14644 cleanroom classes explained</a>.</p>

<h2>Design principles regulators look for</h2>
<h3>Segregation and cross-contamination control</h3>
<p>The biggest AHU decision in a multiproduct plant is how many systems to build. Sharing an air handler between suites that handle different products creates a cross-contamination pathway through the return air. Common responses include dedicated units per suite or product, once-through (100% outdoor air) systems for potent or sensitizing compounds, and recirculation only within a single suite with HEPA filtration in the return. The trade-offs are compared in <a href="<?= url('guides/recirculating-vs-once-through-cleanrooms') ?>">recirculating vs once-through cleanroom air systems</a>.</p>
<h3>Pressure differentials</h3>
<p>Air should move from cleaner to less clean areas, except where containment of a hazardous product requires a sink or bubble arrangement at an airlock. Differentials between adjacent grades are commonly designed around 10 to 15 Pa (0.04 to 0.06 in. w.g.). The AHU's job is to supply and return stable airflows so the room pressure controls do not have to fight the fan. The cascade itself is laid out in <a href="<?= url('guides/cleanroom-pressure-cascade') ?>">how to design a cleanroom pressure cascade</a>.</p>
<h3>Temperature and humidity</h3>
<p>Product and process needs set the limits, but operator comfort in gowns usually pushes rooms cooler and drier than offices, often 64 to 68°F (18 to 20°C) with relative humidity limits tied to the product. Hygroscopic powders can demand very low dew points that require desiccant dehumidification.</p>
<h3>Filtration</h3>
<p>A typical arrangement is a prefilter and a high-efficiency final filter in the AHU, followed by terminal HEPA filters at the room. Terminal filters remove anything shed by ducts and fans downstream of the AHU and are the ones that must pass in-situ integrity tests.</p>

<h2>What GMP means for the air handler itself</h2>
<p>A GMP unit looks much like a high-quality commercial unit on a schematic. The differences are in details that affect cleanability, reliability and the ability to prove performance:</p>
<table>
<thead><tr><th>Feature</th><th>Why it matters in GMP service</th></tr></thead>
<tbody>
<tr><td>Smooth, cleanable interior surfaces with no exposed insulation</td><td>Prevents particle shedding and microbial harborage; supports cleaning procedures</td></tr>
<tr><td>Sloped, drainable stainless drain pans and floors</td><td>No standing water downstream of cooling coils</td></tr>
<tr><td>Low casing leakage and sealed penetrations</td><td>Stable airflow; no unfiltered air drawn in after the filters</td></tr>
<tr><td>Fan redundancy (fan arrays or standby units)</td><td>Maintains pressures and grades through a fan failure</td></tr>
<tr><td>Instrumentation for critical parameters</td><td>Airflow, filter differential pressure and leaving conditions are monitored and alarmed</td></tr>
<tr><td>Access for inspection and filter change</td><td>Maintenance without opening clean-side ductwork</td></tr>
</tbody>
</table>
<p>Material choices for those interiors are discussed in <a href="<?= url('guides/gmp-ahu-interior-finishes') ?>">stainless vs painted interiors for GMP air handlers</a>.</p>

<h2>Controls, monitoring and change control</h2>
<p>A GMP facility separates the building management system, which runs the equipment, from the environmental monitoring system, which records GMP-critical parameters with audit trails and data integrity controls. The AHU's controls need clearly defined critical parameters, alarm and action limits, and documented behavior during power loss and restart.</p>
<p>Once the system is qualified, any change to setpoints, filters, sequences or hardware passes through the site's change control. Design for that: specify replacement parts that will remain available, avoid control logic that only the original programmer understands, and supply documentation in a form the quality unit can maintain. The qualification steps themselves are separate and covered in the IQ, OQ and PQ guide for this category.</p>
<p>Custom Air Equipment builds air handlers to project-specific GMP requirements and run-tests them in the factory, with witness testing available for owners who want to see performance before shipment. Discussing the URS early with your <a href="<?= url('contact') ?>">application engineer</a> keeps the unit and its documentation aligned.</p>
<?php guide_end([
    ['Does EU GMP Annex 1 apply in North America?', 'It applies to products made for the EU market, and many North American firms adopt it as their corporate standard. U.S. sites must also meet FDA requirements, and Canadian sites must meet Health Canada GMP guidance, which aligns closely with PIC/S.'],
    ['What pressure difference is used between GMP cleanroom grades?', 'Designs commonly use about 10 to 15 Pa between adjacent grades, with air moving from cleaner to less clean areas. Containment suites may use sink or bubble airlocks instead, as defined in the owner\'s contamination control strategy.'],
    ['Can a pharmaceutical AHU recirculate air?', 'Yes, in many cases, provided recirculation does not create a cross-contamination route. Recirculation within a single suite with HEPA filtration is common; potent or multiproduct operations often use dedicated or once-through systems.'],
]);
