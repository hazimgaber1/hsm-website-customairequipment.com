<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('humidification-design-checklist'); ?>
<p class="lede">Run through this checklist during design and again at the submittal review for any air handling unit with a humidifier. It groups the items that most often cause trouble later: an undersized or oversized load, the wrong water, too little absorption distance, drains that do not work, and controls that let the humidifier wet the unit.</p>

<h2>Requirement and load</h2>
<ul>
<li>The space humidity requirement is written as RH at a stated temperature or as a dew point, with tolerance and source standard.</li>
<li>The winter setpoint has been checked against the envelope's condensation limit at outdoor design, and an outdoor reset schedule is defined where needed.</li>
<li>Humidifier load is calculated from outdoor airflow, infiltration and the indoor and outdoor humidity ratios, following <a href="<?= url('guides/humidifier-load-calculation') ?>">calculating humidifier load in lb/hr</a>.</li>
<li>Economizer operation during humidification hours is either locked out or included in the load.</li>
<li>Internal moisture gains are counted only where they are reliably present.</li>
<li>Moisture recovered by an enthalpy wheel or membrane, if any, is subtracted.</li>
<li>Capacity margin is stated, and turndown at minimum load is checked so the humidifier can control at light loads.</li>
<li>The load is expressed in lb/h (kg/h) on the schedule, with entering and leaving conditions.</li>
</ul>

<h2>Humidifier type</h2>
<ul>
<li>The choice between steam and adiabatic accounts for heating energy, cooling effect, hygiene and occupancy restrictions.</li>
<li>Where plant steam is used, the boiler treatment chemicals have been reviewed for direct injection, or a steam-to-steam generator is used.</li>
<li>Electric generator capacity has been converted to kW and included in the electrical load.</li>
<li>Healthcare, food and other sensitive occupancies have been checked for restrictions on humidifier type.</li>
</ul>

<h2>Water supply</h2>
<ul>
<li>A water analysis is available, and the water type (potable, softened, RO, DI) matches the humidifier type and manufacturer requirements.</li>
<li>Piping downstream of RO or DI treatment is a compatible material.</li>
<li>Water treatment equipment has capacity for the humidifier demand, including RO reject.</li>
<li>Supply pressure and flow at the humidifier are within manufacturer limits.</li>
<li>Backflow prevention is shown where required.</li>
<li>Supply lines avoid dead legs and warm spaces.</li>
</ul>

<h2>Location and absorption</h2>
<ul>
<li>The humidifier is downstream of the main filters and in the warmest practical air, usually after the heating coil.</li>
<li>Leaving RH at the humidifier is below about 80 to 85 percent at design load and air temperature.</li>
<li>The manufacturer's non-wetting distance at actual conditions fits between the dispersion and the next downstream component.</li>
<li>Fans, motors, final filters, coils, attenuators, airflow stations and smoke detectors are outside the wetting zone.</li>
<li>Velocity across the humidifier section is reasonably uniform; a diffuser or straightener is provided where needed.</li>
<li>The distance has been checked at minimum airflow on VAV systems as well as at design.</li>
<li>The placement rules are applied as in <a href="<?= url('guides/humidifier-placement-in-ahu') ?>">how to place a humidifier within the AHU</a>.</li>
</ul>

<h2>Section construction</h2>
<ul>
<li>Stainless steel drain pan or floor below the dispersion and through the wetting zone.</li>
<li>Corrosion-resistant interior panels in the humidifier section.</li>
<li>No exposed fibrous insulation in the wetted zone.</li>
<li>Access doors upstream and downstream of the dispersion, with a view port or light.</li>
<li>Section length includes a margin beyond the calculated absorption distance.</li>
<li>Penetrations for steam, water and drains are sealed and located for service.</li>
</ul>

<h2>Drains and condensate</h2>
<ul>
<li>Steam supply has a drip leg, trap and strainer ahead of the control valve (direct injection).</li>
<li>Separator and dispersion header drains have traps with water seal depth suited to the section pressure.</li>
<li>Steam hose or tubing from generators slopes continuously and has no trapped low points.</li>
<li>Generator blowdown is tempered to meet the plumbing code before entering the building drain.</li>
<li>Drains discharge to an open receptor with an air gap.</li>
<li>Drains are protected from freezing where they leave heated space.</li>
<li>Details follow <a href="<?= url('guides/steam-humidifier-condensate-drains') ?>">how to pipe steam humidifier condensate and drains</a>.</li>
</ul>

<h2>Controls</h2>
<ul>
<li>Primary control is to supply dew point or space humidity, with a slow reset loop where appropriate.</li>
<li>A duct high-limit humidistat is installed downstream beyond the absorption distance and stops the humidifier.</li>
<li>The humidifier is interlocked with supply fan status or airflow proving.</li>
<li>Humidifier output is limited at low airflow on VAV systems.</li>
<li>Humidification is disabled when the cooling coil is dehumidifying, to avoid simultaneous operation.</li>
<li>Humidifier enable is delayed at startup until supply air temperature is established.</li>
<li>Idle drain and drying cycles are enabled.</li>
<li>Space and duct sensors have accuracy appropriate to the tolerance and are located in mixed air.</li>
<li>Alarms for high limit trip, drain failure, low water and generator faults are mapped to the BAS.</li>
</ul>

<h2>Hygiene</h2>
<ul>
<li>The humidifier is included in the building water management program.</li>
<li>No water stands in the humidifier, pan, sump or piping during idle periods.</li>
<li>Adiabatic systems include UV or other disinfection where the manufacturer or risk assessment calls for it.</li>
</ul>

<h2>Documentation and coordination</h2>
<ul>
<li>Schedule lists type, capacity, airflow, entering and leaving conditions, water type, power or steam requirements and non-wetting distance.</li>
<li>Electrical, plumbing and controls drawings show the humidifier's connections.</li>
<li>Service clearances are shown on the mechanical plans.</li>
<li>Commissioning tests include absorption check at full output, high-limit trip and drain operation.</li>
</ul>
<p>Ongoing maintenance tasks after turnover are covered in <a href="<?= url('guides/humidifier-maintenance') ?>">humidifier maintenance</a>.</p>
<?php guide_end([
    ['What should a humidification design review check?', 'Check the requirement and envelope limit, load calculation, humidifier type, water supply and treatment, location and absorption distance, section construction, drains, controls and hygiene provisions.'],
    ['What leaving RH is too high at the humidifier?', 'Above about 80 to 85 percent at the humidifier location, absorption distances grow quickly and wetting becomes likely. Move the humidifier to warmer air or reduce the load at that point.'],
    ['Does every humidifier need a duct high-limit humidistat?', 'It is standard practice. A high-limit sensor downstream beyond the absorption distance stops the humidifier before the duct reaches saturation, protecting against wetting if the main control fails.'],
]);
