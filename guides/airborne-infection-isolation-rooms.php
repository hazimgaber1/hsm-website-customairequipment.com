<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('airborne-infection-isolation-rooms'); ?>
<p class="lede">An airborne infection isolation room (AIIR) keeps infectious aerosols from escaping by holding the room at negative pressure, exhausting all of its air directly outdoors, and supplying enough clean air to dilute contaminants quickly. Standard 170 values commonly cited are 12 total air changes per hour, 2 outdoor, and a minimum differential of 0.01 in. w.c. negative to adjacent spaces.</p>

<h2>What an AIIR has to achieve</h2>
<p>AIIRs house patients with diseases spread by airborne droplet nuclei, such as tuberculosis, measles and varicella. The ventilation system has three jobs:</p>
<ol>
<li><strong>Containment:</strong> air flows into the room from the corridor or anteroom, never out.</li>
<li><strong>Dilution:</strong> clean supply air reduces the concentration of infectious particles in the room for staff and visitors.</li>
<li><strong>Safe removal:</strong> contaminated air is exhausted to a location where it cannot re-enter the building or harm people outdoors.</li>
</ol>
<p>The CDC Guidelines for Environmental Infection Control in Health-Care Facilities, the FGI Guidelines and ASHRAE 170 set the design basis in the US; CSA Z317.2 does so in Canada. Values differ slightly by document and edition, so confirm against the project's governing standard.</p>

<h2>Air change and pressure requirements</h2>
<table>
<thead><tr><th>Parameter</th><th>Typical Standard 170 value</th><th>Design note</th></tr></thead>
<tbody>
<tr><td>Total air changes</td><td>12 ACH minimum</td><td>Existing rooms in older guidance were allowed 6 ACH; new construction uses 12</td></tr>
<tr><td>Outdoor air</td><td>2 ACH minimum</td><td>Supply can be a mix of outdoor and recirculated air from non-isolation spaces</td></tr>
<tr><td>Pressure</td><td>Negative, at least 0.01 in. w.c. (2.5 Pa)</td><td>Many designers target a higher differential for margin</td></tr>
<tr><td>Exhaust</td><td>All room air exhausted directly outdoors</td><td>No recirculation of AIIR air to other spaces</td></tr>
<tr><td>Room recirculating units</td><td>Not permitted</td><td>Portable HEPA units are a supplementary measure only</td></tr>
<tr><td>Toilet room</td><td>Exhausted, negative to the patient room</td><td>Keeps the flow path consistent from corridor to toilet</td></tr>
</tbody>
</table>
<p>The negative pressure comes from exhausting more air than is supplied. The offset needed depends on how tightly the room is sealed and on door undercuts; the method is in <a href="<?= url('guides/room-pressurization-offset-calculation') ?>">calculating room pressurization airflow offset</a>.</p>

<h2>Room construction matters as much as airflow</h2>
<p>No reasonable exhaust offset will hold pressure in a leaky room. Tight construction is a ventilation requirement in practice:</p>
<ul>
<li>Seal walls to the deck, or provide a monolithic or sealed ceiling.</li>
<li>Seal all penetrations for pipes, conduit, medical gas and data.</li>
<li>Use self-closing doors with gaskets and limited undercuts.</li>
<li>Seal windows; operable windows defeat pressure control.</li>
<li>Avoid ceiling-mounted light fixtures or speakers that open to the plenum unless sealed.</li>
</ul>
<p class="note">Commissioning should include a smoke test at the door and a measured differential with the door closed. Pressure readings alone can look acceptable while an unsealed ceiling pulls air from the plenum rather than the corridor.</p>

<h2>Anterooms</h2>
<p>An anteroom between the corridor and the AIIR gives an airlock that keeps containment intact while the door opens. Whether an anteroom is required depends on the governing guideline and the facility's functional program. Where provided:</p>
<ul>
<li>Pressure cascades from corridor (most positive) to anteroom to patient room (most negative).</li>
<li>The anteroom is typically ventilated at a rate that ensures a positive flow into the patient room.</li>
<li>Doors are arranged so both are not open at the same time.</li>
<li>Hand-washing and PPE storage are located in the anteroom.</li>
</ul>
<p>An anteroom serving a combination AIIR/protective environment room has its own pressure arrangement, because the room must protect the patient and the corridor at once. Protective environment rooms on their own are a different design; see <a href="<?= url('guides/protective-environment-rooms') ?>">protective environment room air handling</a>.</p>

<h2>Supply and exhaust locations in the room</h2>
<ul>
<li>Supply air enters at the ceiling near the door, so clean air passes the staff working position on its way to the patient.</li>
<li>Exhaust grilles are located on the wall near the head of the bed, low or at ceiling level according to the governing guideline, so contaminated air is drawn away from staff.</li>
<li>Avoid locating the exhaust such that air short-circuits from supply to exhaust without passing the patient zone.</li>
</ul>

<h2>Exhaust system design</h2>
<ul>
<li>Use a dedicated exhaust system for AIIRs, or one shared only with other compatible exhaust as permitted.</li>
<li>Locate the exhaust fan at the discharge end, outside or at the roof, so all ductwork inside the building is under negative pressure.</li>
<li>Discharge above the roof, away from intakes, operable windows and occupied areas, at a velocity that helps dispersion.</li>
<li>Consider HEPA filtration in the exhaust where discharge location cannot be made safe.</li>
<li>Provide redundant exhaust fans or connect to the essential electrical system so containment survives a fan or power failure.</li>
<li>Label ductwork so maintenance staff know it may carry infectious air.</li>
</ul>
<p>Energy recovery on AIIR exhaust is restricted because of cross-contamination concerns; device types that do not allow leakage between airstreams are the usual choice.</p>

<h2>Monitoring and controls</h2>
<p>A permanently installed room pressure monitor with visual and audible alarm is required for AIIRs by most guidelines, with indication at the entrance and reporting to the building automation system. Controls should:</p>
<ul>
<li>Hold a fixed exhaust airflow and modulate supply to maintain the offset, or track supply to exhaust with a fixed difference.</li>
<li>Alarm on loss of negative pressure after a short delay that tolerates door openings.</li>
<li>Allow a room to be switched to normal mode when not in isolation use only under strict procedures, since mode switching is a known source of errors.</li>
</ul>
<p>Selecting and placing the monitors is covered in <a href="<?= url('guides/room-pressure-monitoring') ?>">how to monitor healthcare room pressure relationships</a>.</p>
<?php guide_end([
    ['How many air changes does an airborne infection isolation room need?', 'ASHRAE 170 commonly requires 12 total air changes per hour with 2 of outdoor air for new AIIRs. Older CDC guidance allowed 6 ACH for existing rooms, so check the governing document.'],
    ['How negative should an AIIR be?', 'At least 0.01 in. w.c. (2.5 Pa) relative to adjacent spaces under ASHRAE 170. Many designers target a larger differential for margin during door openings.'],
    ['Is an anteroom required for an isolation room?', 'It depends on the governing guideline and the facility\'s functional program. Anterooms are strongly recommended and often required for certain room types or patient populations.'],
    ['Can AIIR exhaust use an energy recovery wheel?', 'Generally not, because wheels allow some cross-leakage between exhaust and supply. Devices with separated airstreams, such as runaround loops, are preferred.'],
]);
