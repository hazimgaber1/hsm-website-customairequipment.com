<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-life-expectancy'); ?>
<p class="lede">A well-built, well-maintained air handler casing can serve for decades, but its components wear out on very different schedules: belts and filters in months or a few years, motors, drives and actuators in one to two decades, coils depending heavily on water quality and environment. An air handler reaches end of life when the casing and structure can no longer be economically kept sound, or when so many components need replacing at once that replacement makes more sense.</p>

<h2>Why "AHU life" is the wrong single number</h2>
<p>Asking how long an air handler lasts is a bit like asking how long a building lasts. The casing, base frame and internal structure form a long-lived shell; inside it sit fans, motors, drives, coils, dampers, filters, humidifiers and controls, each with its own wear mechanism. A unit may have its motors replaced twice and its coils once while the casing carries on. Service life data published by ASHRAE and others reports median ages at replacement for equipment categories, and it is useful for planning, but it describes what owners did, not what the equipment could do. Maintenance quality, run hours and environment move actual life far more than equipment category does.</p>

<h2>Typical component life ranges</h2>
<p>The ranges below are planning figures for air handlers in commercial and institutional buildings running long hours with reasonable maintenance. They are judgments for budgeting, not guarantees. Harsh environments, 24/7 operation and poor maintenance push toward the short end or below it.</p>
<table>
<thead><tr><th>Component</th><th>Rough planning range</th><th>What shortens it</th></tr></thead>
<tbody>
<tr><td>Filters</td><td>Months to a year or so</td><td>Dust load, construction, wildfire smoke</td></tr>
<tr><td>V-belts</td><td>About 1 to 3 years</td><td>Misalignment, wrong tension, high starts</td></tr>
<tr><td>Fan and motor bearings</td><td>Several years to well over a decade</td><td>Lubrication errors, belt overload, vibration, bearing currents</td></tr>
<tr><td>Motors</td><td>Often 15 to 20+ years</td><td>Heat, supply problems, moisture, bearing failure</td></tr>
<tr><td>VFDs and EC electronics</td><td>Often 10 to 15+ years</td><td>Heat, dust, humidity; cooling fans and capacitors age first</td></tr>
<tr><td>Damper actuators</td><td>About 10 to 15 years</td><td>Cycling, outdoor temperatures, moisture</td></tr>
<tr><td>Water coils</td><td>Highly variable; 15 to 25+ years when water and air are clean</td><td>Water chemistry, erosion, freezing, corrosive air</td></tr>
<tr><td>Steam humidifier components</td><td>Consumables in months; vessels and controls years</td><td>Water hardness, maintenance</td></tr>
<tr><td>Controls and sensors</td><td>Hardware often outlived by software and protocol obsolescence</td><td>Unsupported platforms, lack of parts</td></tr>
<tr><td>Casing and base frame</td><td>Multiple decades if kept dry and sound</td><td>Corrosion of floors and base, wet insulation, outdoor exposure</td></tr>
</tbody>
</table>
<p class="note">Rolling element bearings are specified by L10 life, the hours at which 10 percent of a population of bearings would be expected to fail under the rated load. A high L10 rating at selection is a good start, but real life depends on whether lubrication, alignment and load match the assumptions.</p>

<h2>End-of-life indicators</h2>
<h3>Casing and structure</h3>
<ul>
<li>Perforated or soft floors from corrosion, especially under coils and humidifiers.</li>
<li>Base rails with section loss from rust.</li>
<li>Panels that have lost stiffness, oil-canning under pressure, or that leak at seams despite repair.</li>
<li>Wet or degraded insulation that cannot be replaced without dismantling panels.</li>
<li>Outdoor unit roofs that leak repeatedly.</li>
</ul>
<h3>Coils</h3>
<ul>
<li>Repeated tube leaks or plugged circuits, with capacity loss.</li>
<li>Fins corroded, flaking or separating from tubes.</li>
<li>Unable to clean back to design pressure drop.</li>
</ul>
<h3>Fans and drives</h3>
<ul>
<li>Fan wheels with cracks, corrosion or erosion that cannot be balanced.</li>
<li>Shafts worn at bearing seats.</li>
<li>Repeated motor failures that cannot be explained by a correctable cause.</li>
<li>Drives no longer supported by the manufacturer, with no replacement parts.</li>
</ul>
<h3>Performance and fit</h3>
<ul>
<li>The unit can no longer meet the building's needs: airflow, ventilation, filtration or humidity requirements have changed.</li>
<li>Energy use far above what a modern unit would achieve, such as forward-curved fans with high power draw.</li>
<li>Hazardous materials in the unit that make maintenance difficult.</li>
<li>Maintenance costs rising year over year with no end in sight.</li>
</ul>

<h2>Indicators that are often misread</h2>
<p>Some signs look like end of life but are not. A unit with high fan energy may simply have dirty coils, a fixed static setpoint or forward-curved fans that can be swapped for a fan array inside the existing casing. A unit with comfort complaints may have controls problems rather than worn equipment. Surface rust on panel exteriors is often cosmetic. Separate the shell from the components when judging: a sound casing with tired components is a rebuild candidate, while a corroded casing with new components is not.</p>

<h2>Extending life</h2>
<p>Most of what kills air handlers early is water and neglect. The measures that matter most:</p>
<ul>
<li>Keep the casing dry: drain pans draining, carryover eliminated, humidifiers maintained, roof and door seals intact.</li>
<li>Follow a preventive maintenance schedule with recorded readings, and act on trends.</li>
<li>Control coil water chemistry and freeze risk.</li>
<li>Treat corrosion early, before it penetrates floors and base rails; see <a href="<?= url('guides/corroded-casing-floor-repair') ?>">how to repair corroded casings and floors</a>.</li>
<li>Replace components on condition, keeping critical spares so failures do not turn into long outages.</li>
</ul>

<h2>Deciding what comes next</h2>
<p>Seeing several end-of-life indicators at once is a signal to commission a formal condition assessment, which surveys the unit section by section and estimates remaining life and costs; that process is described in <a href="<?= url('guides/ahu-condition-assessment') ?>">AHU condition assessment</a>. The outcome is often a choice between rebuilding the existing unit in place, retrofitting components such as a fan array into the existing casing, or replacing it; the trade-offs are in <a href="<?= url('guides/retrofit-vs-replacement-decision') ?>">retrofit vs replacement decision</a>. Custom Air Equipment builds <a href="<?= url('products/retrofit-knockdown') ?>">retrofit and knockdown units</a> for replacements where the existing unit sits in a space that a new shipping section cannot reach.</p>
<?php guide_end([
    ['How long does an air handling unit last?', 'The casing and frame of a well-built, well-maintained unit can last several decades, while components wear out sooner: belts and filters in months to years, motors, drives and actuators in roughly one to two decades, and coils depending on water quality and environment.'],
    ['What are signs an air handler needs replacing?', 'Corroded floors and base rails, repeated coil leaks, panels that no longer seal, unsupported drives and controls, rising maintenance costs and an inability to meet current ventilation or filtration needs are typical indicators.'],
    ['Can an old air handler be rebuilt instead of replaced?', 'Often, if the casing and structure are sound. Fans, motors, coils, dampers and controls can be replaced in place. A condition assessment helps decide whether rebuilding, retrofitting or replacement is the better choice.'],
]);
