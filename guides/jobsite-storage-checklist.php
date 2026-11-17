<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('jobsite-storage-checklist'); ?>
<p class="lede">An air handler that sits on site for weeks or months before startup needs a dry, level resting place, weather protection that breathes, periodic rotation of fan and motor shafts, and protected controls and drives. Use this checklist from the day the unit is accepted until the day it starts.</p>

<h2>Choosing a storage location</h2>
<ul>
<li>Store indoors in a heated, dry space whenever possible, particularly units with VFDs, control panels or sensitive electronics.</li>
<li>If outdoor storage is unavoidable, choose firm, level, well-drained ground away from traffic, cranes and welding.</li>
<li>Set sections on their base rails on timbers or cribbing, a few inches above grade, so water can drain away and air can circulate underneath.</li>
<li>Support each section along its full length as it would be in service. Do not stack sections.</li>
<li>Keep away from sandblasting, concrete cutting, spray painting and fireproofing operations, or protect against their dust and overspray.</li>
<li>Check the manufacturer's storage instructions; some warranty terms depend on following them.</li>
</ul>

<h2>Weather and dust protection</h2>
<ul>
<li>Leave factory opening covers in place until the unit is set. Replace any that were removed or damaged at receiving.</li>
<li>For indoor units stored outdoors, cover with breathable, waterproof tarps. Avoid sealing tightly in clear plastic film, which traps moisture and acts as a greenhouse.</li>
<li>Tie covers down so they cannot flap and abrade the finish, and do not let tarps hold ponded water.</li>
<li>Outdoor-rated units still need opening covers at duct connections and split faces.</li>
<li>Keep snow off roofs of outdoor units and away from intakes.</li>
<li>Protect coil faces from dust and debris; dirty coils are hard to clean properly once installed.</li>
</ul>

<h2>Fans, bearings and motors</h2>
<ul>
<li>Leave fan shipping restraints in place during storage unless the manual says otherwise.</li>
<li>Rotate each fan wheel and motor shaft by hand at the interval the manual specifies, commonly monthly, several full turns. This redistributes grease and prevents false brinelling, the denting of bearing races from vibration while stationary.</li>
<li>Where restraints prevent turning, follow the manual's procedure; some require releasing restraints briefly.</li>
<li>Check and add bearing grease if the storage period is long, using the specified grease only.</li>
<li>Keep belts on but consider relieving tension for very long storage if the manufacturer recommends it; note to re-tension before startup.</li>
<li>For motors stored long term, energize motor space heaters if fitted, or protect against condensation by other means.</li>
<li>Record each rotation with a date on a tag attached to the unit.</li>
</ul>
<p class="note">Vibration from nearby construction, trucks or pile driving is enough to mark stationary bearings over time. Regular rotation is the cheapest protection a stored unit can get.</p>

<h2>Electrical and controls</h2>
<ul>
<li>Keep VFD and control panel doors closed and latched. Seal conduit openings and knockouts.</li>
<li>Do not store drives in temperatures outside the drive manufacturer's storage limits or in condensing humidity.</li>
<li>Place desiccant bags in electrical enclosures for long-term storage, and record them so they are removed before energizing.</li>
<li>Protect field-installed sensors, actuators and loose controls shipped separately in a dry, secure indoor location.</li>
<li>If the unit is energized for temporary heating, ventilation or space heaters, document what is powered and who is responsible.</li>
<li>For storage longer than about a year, check the VFD manufacturer's instructions on reforming DC bus capacitors before applying full power.</li>
</ul>

<h2>Coils, drains and freeze risk</h2>
<ul>
<li>Confirm whether coils were shipped dry or with residual test water. Water in coils in freezing weather will burst tubes.</li>
<li>Keep coil connections capped to exclude dirt and insects.</li>
<li>Steam and condensate connections stay capped until piped.</li>
<li>Humidifier components shipped loose are stored indoors and dry.</li>
<li>If coils are piped but the system is not yet commissioned and freezing is possible, follow <a href="<?= url('guides/freeze-protection-during-construction') ?>">how to protect coils from freezing during construction</a>.</li>
</ul>

<h2>Security and site hazards</h2>
<ul>
<li>Lock access doors or secure them with cable ties so the unit is not used as a storage shed.</li>
<li>Keep fuel, solvents and welding gas cylinders away from stored units.</li>
<li>Barricade units in traffic areas so forklifts and loaders cannot strike them.</li>
<li>Check for theft of copper coils, motors and drives on open sites.</li>
</ul>

<h2>Monthly inspection log</h2>
<p>Assign a named person to inspect stored units at a set interval and record:</p>
<table>
<thead><tr><th>Item</th><th>Record</th></tr></thead>
<tbody>
<tr><td>Covers and tarps</td><td>Intact, secure, no ponding</td></tr>
<tr><td>Fan and motor rotation</td><td>Date and initials</td></tr>
<tr><td>Interior condition</td><td>Dry, no condensation, rodents or insects</td></tr>
<tr><td>Electrical enclosures</td><td>Closed, dry, desiccant condition</td></tr>
<tr><td>Exterior finish</td><td>No new damage or corrosion</td></tr>
<tr><td>Support</td><td>Level, not settling</td></tr>
</tbody>
</table>

<h2>Before installation and startup</h2>
<ul>
<li>Inspect the interior for moisture, mould, nesting animals and debris before setting.</li>
<li>Remove desiccant bags and any temporary covers from inside the unit.</li>
<li>Re-grease bearings as the manual requires after long storage.</li>
<li>Check insulation resistance of motors stored for long periods.</li>
<li>Re-tension belts and check alignment.</li>
<li>Hand the storage log to the startup technician and include it in the closeout records.</li>
</ul>
<p>Damage noticed at delivery should already be recorded through the <a href="<?= url('guides/receiving-inspection-checklist') ?>">receiving inspection checklist</a>. Items found during storage go to the manufacturer promptly. Once storage ends, the unit moves on to the <a href="<?= url('guides/pre-startup-checklist') ?>">pre-startup checklist</a>.</p>
<?php guide_end([
    ['How often should I rotate fan shafts on a stored air handler?', 'Follow the manufacturer\'s manual, but monthly rotation by hand through several full turns is a common requirement. It redistributes grease and prevents bearing damage from vibration while the fan sits idle.'],
    ['Can an indoor air handler be stored outside on site?', 'Only for short periods and with protection: raised off the ground on cribbing, opening covers in place, and breathable waterproof tarps secured so they do not trap moisture or chafe the finish. Electronics should be stored indoors whenever possible.'],
    ['Why is shrink wrap a problem for long-term storage?', 'Tight plastic film traps moisture and heats up in sunlight, causing condensation inside the unit and on electrical components. Breathable covers that keep rain out but let moisture escape are better for extended storage.'],
]);
