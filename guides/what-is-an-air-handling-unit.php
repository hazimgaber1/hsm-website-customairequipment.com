<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('what-is-an-air-handling-unit'); ?>
<p class="lede">An air handling unit (AHU) is a factory-built cabinet that draws in outdoor and return air, cleans it, heats or cools it, adjusts its moisture and pushes it into a duct system. A central-station AHU serves a whole building or a large zone from one location, with the chiller, boiler or condensing equipment that feeds it located elsewhere.</p>

<h2>What "central-station" means</h2>
<p>The term separates an AHU from equipment that makes its own heating and cooling. A packaged rooftop unit carries its own compressors and burner; a fan coil sits inside the space it serves. A central-station air handler does neither. It moves and conditions air using energy delivered to it: chilled water or refrigerant to a cooling coil, hot water, steam or electricity to a heating coil, and steam or water to a humidifier. The unit itself is a series of sections bolted together in a line, each doing one job to the airstream before handing it to the next.</p>
<p>Because the sections are modular, a central-station AHU can be as simple as a filter, coil and fan in a single cabinet, or as long as a city bus with energy recovery, two coils, humidification, sound attenuation and redundant fans. The airflow path is the organizing idea, so it is the best way to understand the equipment.</p>

<h2>Following the air through the unit</h2>
<p>The order below is typical for a mixed-air unit serving offices, schools or hospitals. Not every unit has every section, and the reasons behind the order are covered in the <a href="<?= url('guides/ahu-component-sequence') ?>">component sequence guide</a>.</p>
<ol>
<li><strong>Outdoor air intake.</strong> A louver or rain hood with a damper admits fresh air. On outdoor units the hood also sheds rain and snow.</li>
<li><strong>Return air inlet.</strong> Air coming back from the building enters through its own damper. Units with a return or relief fan handle this air before it reaches the mixing point.</li>
<li><strong>Mixing section.</strong> Outdoor and return air meet here. Damper positions set the proportion, and the economizer opens the outdoor damper wide when outside air is cool enough to do free cooling.</li>
<li><strong>Filter section.</strong> Prefilters and final filters remove particles to protect the coils and the occupants.</li>
<li><strong>Preheat coil.</strong> In cold climates a heating coil raises very cold mixed or outdoor air above freezing before it reaches the cooling coil.</li>
<li><strong>Cooling coil.</strong> Chilled water or refrigerant cools the air and condenses moisture, which drains to a sloped pan.</li>
<li><strong>Supply fan.</strong> A housed centrifugal fan, a plenum fan or an array of smaller fans produces the pressure needed to move air through the unit and the ductwork.</li>
<li><strong>Reheat or heating coil.</strong> Warms the air for heating or reheats it after dehumidification.</li>
<li><strong>Humidifier.</strong> Adds moisture in winter, usually as steam injected through a dispersion grid.</li>
<li><strong>Discharge plenum and attenuator.</strong> Turns the air toward the duct connection and reduces fan noise before it travels down the duct.</li>
</ol>
<p class="note">Access sections, empty compartments with doors, sit between components that need inspection or cleaning. They add length but make maintenance practical.</p>

<h2>What holds it together: casing, base and drain pans</h2>
<p>All of these components live inside a casing of insulated panels on a structural base frame. The casing must keep conditioned air in, keep the exterior dry and hold its shape under the fan's positive and negative pressure. Most modern units use double-wall panels so the insulation is sealed away from the airstream. A full treatment of panels, thermal breaks and leakage classes is in the <a href="<?= url('guides/double-wall-casing-construction') ?>">double-wall casing guide</a>.</p>
<p>Under every cooling coil and humidifier sits a drain pan, sloped so water leaves rather than standing. The base frame carries the weight, provides lifting points and raises the unit high enough for the condensate trap.</p>

<h2>How AHUs differ from one another</h2>
<p>Air handlers vary along a few main lines, and each one is a design decision rather than a model number:</p>
<table>
<thead><tr><th>Variable</th><th>Common options</th></tr></thead>
<tbody>
<tr><td>Air source</td><td>Mixed air (outdoor plus return) or 100% outdoor air</td></tr>
<tr><td>Airflow control</td><td>Constant volume or variable air volume (VAV)</td></tr>
<tr><td>Fan position</td><td>Draw-through (fan after cooling coil) or blow-through (fan before it)</td></tr>
<tr><td>Arrangement</td><td>Horizontal inline, vertical, or stacked double-deck</td></tr>
<tr><td>Location</td><td>Indoor mechanical room or outdoor weatherproof</td></tr>
<tr><td>Fan type</td><td>Single housed fan, single plenum fan, or fan array</td></tr>
</tbody>
</table>
<p>Catalog units fix many of these choices to suit a range of common sizes. Custom units set each one to the project, which matters when the room is tight, the airflow is large or the application, such as a hospital, lab or data center, has unusual demands.</p>

<h2>Supporting systems the AHU depends on</h2>
<p>An air handler is only one part of the HVAC system. It needs a chilled water or refrigerant source, a heating source, condensate drainage, electrical power for the fans and controls, and a building automation system to set dampers, valves and fan speed. Upstream it connects to outdoor air intakes and return ducts; downstream to supply ducts, terminal units and diffusers. A unit that is well built but poorly connected to these systems will not perform, which is why AHU design always starts from the airflow and load the building actually needs.</p>
<p>If you want to see how these sections fit together for a specific job, the <a href="<?= url('design') ?>">3D configurator</a> lets you lay out a unit section by section.</p>
<?php guide_end([
    ['What is the difference between an AHU and an RTU?', 'An AHU conditions air using chilled water, hot water, steam or refrigerant supplied from central plant equipment. A packaged rooftop unit contains its own compressors and usually its own gas burner, so it makes its own heating and cooling in one box.'],
    ['What are the main parts of an air handling unit?', 'The core parts are dampers for outdoor and return air, a mixing section, filters, heating and cooling coils, a supply fan, and a casing with drain pans. Many units add humidifiers, energy recovery, sound attenuators and access sections.'],
    ['Does an air handler have a compressor?', 'A central-station air handler normally does not. Its cooling coil is fed with chilled water from a chiller or with refrigerant from a separate condensing unit. Some custom units do include integral refrigeration, but that is an option rather than the defining feature.'],
    ['Where is an air handling unit installed?', 'Most are in mechanical rooms, penthouses or on roofs. Indoor units use standard casings, while outdoor units need weatherproof roofs, sealed seams and intake hoods to shed rain and snow.'],
]);
