<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('humidifier-hygiene-legionella-checklist'); ?>
<p class="lede">Humidifiers are part of a building's water system and belong in its water management program. Use this checklist to confirm that no water stands where it can stagnate and warm, that the water entering is suitable, that everything drains and dries when idle, and that inspection and cleaning actually happen on a schedule.</p>

<h2>Why humidifiers need attention</h2>
<p>Legionella and other bacteria multiply in water that is stagnant, in the warm temperature range, and supplied with nutrients from biofilm or sediment. Exposure happens when contaminated water is aerosolized and inhaled. Adiabatic humidifiers create aerosols by design, and any humidifier can harbour stagnant water in tanks, pans, pipes and dead legs.</p>
<p>ASHRAE Standard 188 sets out a risk management framework for building water systems, and ASHRAE Guideline 12 gives practical guidance on managing Legionella risk. Local public health authorities may impose additional requirements. This checklist is organized to support a water management program built on those documents, not to replace one.</p>

<h2>Program and responsibility</h2>
<ul>
<li>The humidifier is listed in the building's water management program and appears on its system flow diagram.</li>
<li>A named person or team is responsible for its maintenance and records.</li>
<li>Hazardous conditions specific to the humidifier type are identified: storage tanks, sumps, warm zones, dead legs, aerosol generation.</li>
<li>Control limits and corrective actions are written for each hazardous condition.</li>
<li>Records of inspections, cleaning, water tests and corrective actions are kept and reviewed.</li>
</ul>

<h2>Supply water</h2>
<ul>
<li>Water quality matches the manufacturer's requirements for the humidifier type.</li>
<li>Treated water systems (softener, RO, DI) are themselves maintained, sanitized and included in the program.</li>
<li>Supply piping has no dead legs; branches to humidifiers are short or are flushed regularly.</li>
<li>Supply lines to adiabatic humidifiers pass through heated spaces where water could warm into the growth range are avoided or kept short.</li>
<li>Backflow prevention is installed where required by the plumbing code.</li>
<li>UV disinfection or filtration is provided where the manufacturer or risk assessment calls for it, with lamp and filter replacement on schedule.</li>
<li>Selection between water types follows <a href="<?= url('guides/humidifier-water-treatment-ro-di') ?>">how to select water treatment for humidifiers</a>.</li>
</ul>

<h2>Steam humidifiers</h2>
<ul>
<li>Generator tanks drain automatically after a set idle period so warm water does not sit for days.</li>
<li>Blowdown and drain cycles are set to manufacturer recommendations and checked to operate.</li>
<li>Dispersion manifolds drain fully; no condensate pools in headers or tubes.</li>
<li>Condensate traps and drain lines are free of standing water other than the trap seal.</li>
<li>The duct or casing downstream stays dry in operation, confirmed by inspection.</li>
</ul>
<p class="note">Steam itself is sterile at the point of discharge. Hygiene problems with steam systems come from condensate that pools, wet downstream surfaces, or warm water left standing in generator tanks.</p>

<h2>Adiabatic humidifiers</h2>
<ul>
<li>All water-containing parts drain completely when the humidifier is idle, including pumps, headers and nozzles.</li>
<li>Media systems have a drying cycle that runs air through the pad after water is shut off.</li>
<li>Sumps, where present, are drained and cleaned at the interval in the program; recirculating sumps have bleed control and are not left full when idle.</li>
<li>Water lines are flushed after extended shutdowns, before the humidifier is returned to service.</li>
<li>Atomizing nozzles are inspected for dripping when off.</li>
<li>Droplet eliminators drain freely and are cleaned on schedule.</li>
</ul>

<h2>AHU section and drainage</h2>
<ul>
<li>A stainless steel drain pan or floor serves the humidifier section and extends past the wetting zone.</li>
<li>Pans slope to the drain with no low spots; water poured in drains completely.</li>
<li>Each drain has a correctly sized trap, and traps are primed and free of debris.</li>
<li>Interior surfaces in the wetted zone are smooth and cleanable, with no exposed fibrous insulation.</li>
<li>Downstream filters, sound attenuators and liners are dry in operation.</li>
<li>Access doors allow inspection upstream and downstream of the humidifier.</li>
<li>Lighting or a view port allows a quick visual check without entering the unit.</li>
</ul>

<h2>Controls</h2>
<ul>
<li>The humidifier is interlocked with fan status or airflow proving.</li>
<li>A duct high-limit humidistat stops humidification before saturation downstream.</li>
<li>Idle drain timers and drying cycles are enabled and not overridden.</li>
<li>Alarm points include high water level, drain failure, and high-limit trips.</li>
<li>The space RH setpoint is no higher than needed; excess humidity raises wetting risk throughout the system.</li>
</ul>

<h2>Inspection and cleaning</h2>
<ul>
<li>Visual inspection of the humidifier, pan and downstream section at the frequency set in the program, often monthly during the humidification season.</li>
<li>Cleaning and disinfection of tanks, sumps, pans and media at the frequency set in the program, and always before seasonal start-up.</li>
<li>Replacement of media pads at the manufacturer's interval or when scaled or discoloured.</li>
<li>Seasonal shutdown procedure: drain, clean, dry and leave dry.</li>
<li>Seasonal start-up procedure: inspect, flush supply lines, clean, verify drains and controls before enabling.</li>
<li>Water testing for microbial indicators or Legionella where the program specifies it, with defined actions if results exceed limits.</li>
</ul>
<p class="warn">If biofilm, slime or discolouration is found, take the humidifier out of service, clean and disinfect according to the program's corrective action, and investigate the condition that allowed growth before restarting.</p>

<h2>Design review items</h2>
<ul>
<li>Humidifier type is appropriate for the occupancy; healthcare and other sensitive occupancies may restrict adiabatic types.</li>
<li>Placement clears the non-wetting distance to downstream components; see <a href="<?= url('guides/humidifier-placement-in-ahu') ?>">how to place a humidifier within the AHU</a>.</li>
<li>Maintenance access and clearances are shown on the drawings.</li>
<li>General microbial growth in other parts of the AHU is addressed separately; see <a href="<?= url('guides/microbial-growth-ahu-troubleshooting') ?>">microbial growth in AHUs</a>.</li>
</ul>
<?php guide_end([
    ['Can humidifiers spread Legionella?', 'Yes, if water stagnates in warm conditions and is then aerosolized. Adiabatic humidifiers create aerosols by design, and any humidifier can hold stagnant water. Include humidifiers in the building water management program.'],
    ['Is steam humidification safe from Legionella?', 'Steam is sterile when it leaves the dispersion tube. Risks come from warm water left standing in generator tanks, pooled condensate and wet downstream surfaces, so drainage and idle drain cycles still matter.'],
    ['How often should a humidifier be cleaned?', 'Follow the manufacturer and the building water management program. Common practice includes cleaning before each humidification season and at intervals during it, with monthly visual inspections while in service.'],
]);
