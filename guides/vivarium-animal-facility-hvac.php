<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('vivarium-animal-facility-hvac'); ?>
<p class="lede">Animal facilities need air handling that never stops, holds temperature and humidity in a tight band, removes ammonia and allergens, and keeps air moving in the right direction between clean and soiled areas. The animals' wellbeing and the validity of the research both depend on it.</p>

<h2>Why vivariums are different from labs</h2>
<p>A chemistry lab protects people from the room. A vivarium protects the animals, the research data and the staff all at once. Small rodents have high metabolic rates relative to their size and limited ability to cope with heat. A temperature drift that a person would barely notice can change animal physiology enough to alter experimental results, so research protocols often treat environmental stability as a scientific variable rather than a comfort item.</p>
<p>In the United States, the primary reference is the <em>Guide for the Care and Use of Laboratory Animals</em> published by the National Research Council. In Canada, institutions follow the guidelines of the Canadian Council on Animal Care (CCAC). Both set performance expectations and leave the engineering to the design team and the institution's animal care program. The institutional veterinarian and animal care committee are key stakeholders in every HVAC decision.</p>

<h2>Temperature and humidity</h2>
<p>Recommended dry-bulb ranges depend on species. For common rodents such as mice and rats, published guidance gives a range of roughly 68 to 79°F (20 to 26°C); larger species have their own ranges. Within the range, the facility sets a specific setpoint, and the expectation is that the room holds it closely, commonly within about ±2°F (±1°C), around the clock.</p>
<p>Relative humidity is typically held between about 30% and 70%, with many facilities targeting a narrower band. Low humidity can contribute to skin and respiratory problems in some species, while high humidity worsens ammonia generation from bedding.</p>
<p>Holding that stability needs:</p>
<ul>
<li>Individual room temperature control with a reheat coil per holding room, because animal densities and cage counts vary room to room.</li>
<li>Humidification sized for 100% outdoor air at winter design. Placement downstream of the cooling coil with adequate absorption distance avoids wet ducts; see <a href="<?= url('guides/humidifier-placement-in-ahu') ?>">humidifier placement in an AHU</a>.</li>
<li>Dehumidification capacity and controls that work at part load in shoulder seasons, when the cooling coil is lightly loaded but outdoor dew point is high.</li>
<li>Alarms that notify animal care staff of an excursion before animals are affected, monitored continuously.</li>
</ul>

<h2>Air change rates and caging</h2>
<p>Historical guidance cited 10 to 15 fresh air changes per hour for animal holding rooms. Current guidance accepts that the right rate depends on the caging system, animal density, bedding change frequency and the heat load.</p>
<table>
<thead><tr><th>Caging approach</th><th>Effect on room HVAC</th></tr></thead>
<tbody>
<tr><td>Static open-top or filter-top cages</td><td>Room air ventilates the cages; room rates in the traditional range are common</td></tr>
<tr><td>Individually ventilated cage (IVC) racks, exhausted to the building</td><td>Rack exhaust removes much of the ammonia and heat at the source; room rates may be reduced with justification</td></tr>
<tr><td>IVC racks exhausting into the room</td><td>Rack HEPA filters protect the room from allergens, but heat and ammonia still load the room air</td></tr>
</tbody>
</table>
<p>Directly connected IVC exhaust needs careful coordination: the building exhaust must hold a stable connection pressure, and rack blowers and building fans must not fight each other. Many designers use a thimble or canopy connection that tolerates small pressure changes.</p>
<p class="note">Get the actual cage counts and rack types from the animal care program before setting room airflow. Heat release per room can vary widely between a lightly stocked room and a full one.</p>

<h2>Air pressure and flow direction</h2>
<p>Vivariums are often planned with clean and soiled corridors, or with a single corridor and a clear flow from clean supply areas to soiled processing areas. Typical relationships include:</p>
<ul>
<li>Holding rooms for normal colonies held positive or neutral to the corridor to protect animals from outside contaminants, or negative to protect the corridor from allergens; the program chooses based on its priorities.</li>
<li>Quarantine and isolation rooms held negative to the corridor.</li>
<li>Soiled cage wash areas negative to clean cage wash and storage areas.</li>
<li>Procedure rooms with chemical use held negative and treated like laboratories.</li>
</ul>
<p>Cage wash rooms deserve their own attention. Tunnel and rack washers release large amounts of heat and moisture, and the exhaust over them is wet and warm. Use corrosion-resistant ductwork and plan for condensate.</p>

<h2>Redundancy and continuity</h2>
<p>Animals cannot be moved out when the air handler stops. Most programs require that the HVAC system keep holding rooms within range during the failure of any single fan, coil or control component, and during utility power loss. Common measures include:</p>
<ul>
<li>Two or more supply units manifolded together, each able to carry a large share of the load, or a single unit with a redundant fan array. Fan redundancy options are compared in <a href="<?= url('guides/fan-array-redundancy-n1-vs-n2') ?>">fan array redundancy: N+1 vs N+2</a>.</li>
<li>Redundant exhaust fans with automatic changeover.</li>
<li>Emergency power for fans, controls and critical heating, with tested restart sequences.</li>
<li>Dual heating sources or redundant heat exchangers in cold climates, because loss of heating in winter is the fastest path to an animal welfare emergency.</li>
</ul>

<h2>Noise, vibration and light leakage</h2>
<p>Rodents hear frequencies well above human hearing, including ultrasonic noise from some equipment. Keep fans and VFDs isolated and away from holding rooms, avoid dampers and valves that whistle, and specify sound attenuation as you would for a quiet occupied space. Vibration from rooftop or mechanical room equipment can also disturb animals.</p>
<p>Containment suites for infectious agents follow a different set of requirements; see the <a href="<?= url('guides/bsl-3-containment-checklist') ?>">BSL-3 containment AHU design checklist</a> for those.</p>
<?php guide_end([
    ['How many air changes does an animal holding room need?', 'Older guidance cited 10 to 15 fresh air changes per hour. Current guidance lets the institution justify a rate based on caging type, animal density, heat load and ammonia control, and rooms with exhausted IVC racks often use lower room rates.'],
    ['What temperature should a mouse room be kept at?', 'Published guidance gives a range of roughly 68 to 79°F (20 to 26°C) for mice and rats. The facility chooses a setpoint within that range and holds it tightly, commonly within about plus or minus 2°F.'],
    ['Why is redundancy so important in vivarium HVAC?', 'Animals cannot be evacuated, and temperature or humidity excursions can harm them and invalidate research. Programs usually require cooling, heating and airflow to continue through a single equipment failure or power outage.'],
]);
