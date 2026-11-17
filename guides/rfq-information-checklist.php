<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('rfq-information-checklist'); ?>
<p class="lede">A custom air handler quote is only as accurate as the request behind it; sending airflow, design conditions, component requirements, electrical service, site constraints and commercial terms in one package lets the manufacturer price the unit you actually need instead of guessing and qualifying the quote.</p>

<h2>Project and commercial information</h2>
<ul>
<li>Project name, location (city and province or state) and site elevation.</li>
<li>Building type and application: office, hospital, lab, data centre, industrial process.</li>
<li>New construction, replacement or retrofit.</li>
<li>Number of units and whether they are identical.</li>
<li>Required delivery date or on-site date.</li>
<li>Delivery terms wanted and the delivery address.</li>
<li>Bid due date and who receives the quote.</li>
<li>Contract documents available: drawings, specification section, schedule, addenda.</li>
<li>Basis of design, if one is named, and whether alternates are welcome.</li>
</ul>

<h2>Airflow and pressure</h2>
<ul>
<li>Supply airflow, with the basis (standard air or actual at site elevation).</li>
<li>Return, exhaust or relief airflow, if the unit handles them.</li>
<li>Minimum outdoor airflow and maximum outdoor airflow (economizer).</li>
<li>External static pressure for supply and return paths, separately.</li>
<li>Whether the unit is constant volume or VAV, and the minimum turndown.</li>
<li>Fan redundancy requirement, for example N+1 for a fan array.</li>
<li>Any fan type or efficiency requirement, such as FEI or maximum fan power.</li>
</ul>

<h2>Design conditions</h2>
<ul>
<li>Outdoor design conditions for summer and winter, dry bulb and wet bulb or dew point.</li>
<li>Return air conditions.</li>
<li>Mixed air conditions, or enough information to calculate them.</li>
<li>Leaving air conditions required from each coil.</li>
<li>Space humidity requirements, if humidification or dehumidification is included.</li>
</ul>
<p class="note">If the engineer has completed psychrometric calculations, send them. They resolve most coil selection questions before they are asked.</p>

<h2>Components and their performance</h2>
<ul>
<li>Arrangement: component sequence and airflow direction, preferably as a sketch.</li>
<li>Cooling coil: type (chilled water, DX, glycol), capacity, entering and leaving air, fluid temperatures and flow or temperature difference, maximum face velocity, maximum air and fluid pressure drops, materials and coatings.</li>
<li>Heating coil: type (hot water, steam, electric), capacity, entering and leaving conditions, fluid data or steam pressure, electric heat steps and controls.</li>
<li>Preheat and freeze protection requirements.</li>
<li>Filters: stages, rating (MERV or other), face velocity limit, frame type, gauges.</li>
<li>Dampers: locations, leakage requirement, actuators by whom.</li>
<li>Energy recovery: type, effectiveness, airflows, frost control.</li>
<li>Humidifier: type, capacity, steam source or water supply.</li>
<li>Sound attenuators and sound requirements, by octave band if available.</li>
<li>Controls: factory or field, scope, protocol, sensor list.</li>
<li>Accessories: lights, receptacles, viewing windows, marine lights, UV-C.</li>
</ul>

<h2>Casing and construction</h2>
<ul>
<li>Indoor or outdoor unit.</li>
<li>Panel thickness, insulation type and inner liner material.</li>
<li>Casing leakage and deflection requirements, and thermal performance.</li>
<li>Floor and drain pan construction and materials.</li>
<li>Door sizes and locations, swing direction relative to pressure.</li>
<li>Base frame height required for condensate traps.</li>
<li>Seismic or wind design requirements.</li>
<li>Hygienic or special construction requirements.</li>
</ul>

<h2>Electrical</h2>
<ul>
<li>Voltage, phase and frequency, confirmed at the site.</li>
<li>Single-point or multiple-point power connection.</li>
<li>VFDs: factory-mounted, shipped loose or by others; bypass requirements.</li>
<li>EC motors or induction motors with drives, if there is a preference.</li>
<li>Disconnect requirements.</li>
<li>Listing requirement: UL 1995, CSA C22.2 No. 236, or both.</li>
<li>Short-circuit current rating required at the unit, if known.</li>
</ul>

<h2>Site and logistics</h2>
<ul>
<li>Maximum dimensions available in the mechanical room or on the roof.</li>
<li>Access route constraints: smallest door, elevator size and capacity, crane limitations.</li>
<li>Whether the unit can ship in sections or must be a knockdown unit.</li>
<li>Structural limits on weight or point loads.</li>
<li>Existing duct and pipe connection locations, for replacements.</li>
<li>Photos and survey data, for retrofits.</li>
</ul>
<p>Survey methods for existing rooms are in <a href="<?= url('guides/field-survey-laser-scanning') ?>">how to survey an existing mechanical room with laser scanning</a>.</p>

<h2>Testing, services and warranty</h2>
<ul>
<li>Factory tests required and whether witnessed.</li>
<li>Startup, field supervision and training scope.</li>
<li>Field assembly scope for knockdown units.</li>
<li>Warranty requirements beyond the standard.</li>
<li>Spare parts and extra filters.</li>
<li>Documentation requirements: drawings format, BIM model, O&amp;M manuals.</li>
</ul>

<h2>Additional items for replacement and retrofit quotes</h2>
<ul>
<li>Nameplate data and photos of the existing unit.</li>
<li>Measured airflow and static of the existing system, if available.</li>
<li>Existing connection locations and sizes, with a sketch.</li>
<li>Smallest opening on the access route and elevator size and capacity.</li>
<li>Demolition scope and whether the manufacturer is expected to remove the old unit.</li>
<li>Outage window and whether field assembly by the manufacturer is required.</li>
<li>Hazardous material survey status.</li>
<li>Whether the building remains occupied during installation, and any restrictions on working hours, noise or hot work.</li>
<li>Any existing components the owner wants reused, such as dampers, coils or controllers, with their condition.</li>
</ul>

<h2>Common gaps that delay quotes</h2>
<ul>
<li>Airflow given but no external static, or a single total static without breakdown.</li>
<li>Coil capacities without entering and leaving air conditions.</li>
<li>Voltage not confirmed.</li>
<li>No indication of maximum dimensions for retrofits.</li>
<li>Specification sent without the schedule, or the schedule without the specification.</li>
</ul>
<p>The schedule fields that capture most of this on drawings are listed in <a href="<?= url('guides/ahu-equipment-schedule-fields') ?>">AHU equipment schedule: required fields</a>. When the package is ready, the <a href="<?= url('contact') ?>">contact page</a> is the place to send it for a custom unit quote.</p>
<?php guide_end([
    ['What information do I need to get a custom AHU quote?', 'Provide airflow and external static, design conditions, coil and component requirements, casing construction, electrical service, site and access constraints, testing and warranty requirements, and the delivery date.'],
    ['Why does an AHU quote need external static pressure?', 'The fan must be selected for internal component losses plus external duct losses. Without external static, the manufacturer cannot size the fan and motor, and the price may change significantly once it is known.'],
    ['Should I send the specification or the schedule for an AHU quote?', 'Send both. The schedule carries performance data and the specification carries construction requirements. Either one alone leaves gaps that lead to assumptions or qualifications in the quote.'],
]);
