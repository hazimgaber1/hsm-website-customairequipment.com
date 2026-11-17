<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('replacing-ahu-occupied-building'); ?>
<p class="lede">Replacing an air handler while people keep working in the building comes down to three things done well: a phasing plan that keeps every served zone conditioned or safely vacated, physical isolation that stops dust, fumes and noise from reaching occupants, and communication that tells tenants what will happen before it happens.</p>

<h2>Step 1: Map who depends on the unit</h2>
<ol>
<li>List every zone, floor or tenant the unit serves, using the duct drawings and a walk-through to confirm. Old drawings often miss later renovations.</li>
<li>Identify critical loads: server rooms, labs, food storage, areas with process exhaust that relies on makeup air, and any space with pressure relationships to neighbours.</li>
<li>Record life-safety functions the unit performs, such as smoke control, stair or corridor pressurization, or makeup air for kitchen hoods. These cannot simply be switched off.</li>
<li>Note occupancy patterns: hours, weekends, seasonal peaks and any events that cannot be disrupted.</li>
</ol>
<p class="note">Healthcare facilities add infection control risk assessment requirements that go well beyond this guide; see <a href="<?= url('guides/icra-ahu-replacement-occupied-hospital') ?>">ICRA for AHU replacement in an occupied hospital</a>.</p>

<h2>Step 2: Choose a phasing strategy</h2>
<ol start="5">
<li><strong>Single shutdown in a low-occupancy window.</strong> Works when the whole cutover fits in a long weekend or holiday shutdown and the building can be left unconditioned or on temporary equipment for that period.</li>
<li><strong>Zone-by-zone transfer.</strong> If adjacent units have spare capacity, rebalance them to pick up some zones while the target unit is out.</li>
<li><strong>Parallel installation.</strong> Build the new unit (often a knockdown) beside the old one, connect it to the duct system through a temporary transition, then cut over in a short outage.</li>
<li><strong>Temporary equipment.</strong> Rent units to carry the load through the outage. Sizing and hookup are covered in <a href="<?= url('guides/temporary-hvac-during-replacement') ?>">how to provide temporary heating and cooling during AHU replacement</a>.</li>
</ol>
<p>Whatever the strategy, write it as a dated sequence with a named owner for each step and a defined rollback point: the last moment at which the old unit can still be restarted if something goes wrong.</p>

<h2>Step 3: Isolate the work area</h2>
<ol start="9">
<li><strong>Seal the duct system.</strong> Cap supply and return connections at the unit with sheet metal and sealed poly before demolition. Debris and dust otherwise get drawn into the ductwork and blown into occupied space at startup.</li>
<li><strong>Build containment.</strong> Use floor-to-deck poly or hard barriers around the mechanical room door and along the removal route, with a sticky mat and a zipper door.</li>
<li><strong>Control pressure.</strong> Run a HEPA-filtered negative air machine exhausting to outdoors so air flows from occupied areas into the work zone, not the reverse.</li>
<li><strong>Protect the route.</strong> Lay floor protection, guard corners and door frames, and cover elevator cab walls. Schedule removal of large pieces outside peak hours.</li>
<li><strong>Manage odours and fumes.</strong> Choose low-odour sealants and coatings, keep hot work and adhesive work during unoccupied hours where possible, and ventilate the work zone directly to outdoors.</li>
<li><strong>Limit noise and vibration.</strong> Schedule cutting, grinding, hammer drilling and coring after hours, especially above or beside offices, classrooms or patient rooms.</li>
</ol>
<p class="warn">Fire alarm devices in the work area may need temporary covering or bypass to prevent nuisance alarms from dust. Coordinate any impairment with the building's fire safety plan and the fire alarm contractor, and set up a fire watch if required.</p>

<h2>Step 4: Communicate with occupants</h2>
<ol start="15">
<li>Send notice to tenants or department heads well ahead of the first disruptive activity. State dates, expected temperature or ventilation effects, noise periods and a contact name.</li>
<li>Post signs at affected entries, elevators and corridors on the day of work.</li>
<li>Send a reminder a day or two before each outage, and a short "all clear" when service is restored.</li>
<li>Give building operators a single point of contact on the contractor's side and a phone number answered during every work shift.</li>
<li>Log complaints, respond quickly, and adjust the plan if a pattern appears; a recurring odour complaint usually means a containment gap.</li>
</ol>

<h2>Step 5: Cut over and restore</h2>
<ol start="20">
<li>Before final cutover, verify the new unit has passed factory or field run tests, the controls are loaded and checked, and the electrical connections are complete.</li>
<li>Restart in a controlled sequence: fans first at reduced speed with filters installed, then outdoor air, then heating and cooling. Watch for dust release from duct systems that sat idle.</li>
<li>Do not remove duct caps or containment until the unit is clean inside and running.</li>
<li>Complete testing, adjusting and balancing before occupants notice airflow changes. A new unit with different fan characteristics will not deliver the old airflow pattern automatically.</li>
<li>Remove containment, clean the route, and restore any building elements opened for access.</li>
</ol>

<h2>Planning checklist for the outage window</h2>
<table>
<thead><tr><th>Item</th><th>Confirmed before outage?</th></tr></thead>
<tbody>
<tr><td>Phasing sequence with rollback point issued to all trades</td><td>Yes / No</td></tr>
<tr><td>Life-safety functions covered or formally impaired</td><td>Yes / No</td></tr>
<tr><td>Temporary equipment delivered and tested</td><td>Yes / No</td></tr>
<tr><td>Containment and negative pressure in place</td><td>Yes / No</td></tr>
<tr><td>Tenant notices sent and acknowledged</td><td>Yes / No</td></tr>
<tr><td>New unit components on site and inspected</td><td>Yes / No</td></tr>
</tbody>
</table>
<p>Lead times, crew planning and contingencies for the shutdown itself are listed in the <a href="<?= url('guides/retrofit-shutdown-planning-checklist') ?>">retrofit shutdown planning checklist</a>.</p>
<?php guide_end([
    ['Can you replace an air handler without shutting down the building?', 'Often yes, by phasing the work, using temporary equipment, or installing the new unit alongside the old one and cutting over during a short outage. The served zones must stay conditioned or be safely vacated during the work.'],
    ['How do you keep dust out of occupied areas during AHU replacement?', 'Cap the ductwork at the unit, build sealed containment around the work area, and run a HEPA-filtered negative air machine so air flows into the work zone. Protect the removal route and schedule dusty work after hours.'],
    ['How much notice should tenants get before an AHU replacement?', 'Give enough notice for tenants to plan around temperature, noise and access disruptions, typically several weeks for major work, followed by reminders before each outage. Lease terms or building policies may set minimum notice periods.'],
]);
