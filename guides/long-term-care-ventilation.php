<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('long-term-care-ventilation'); ?>
<p class="lede">Long-term care and senior living buildings are homes first and care settings second. Ventilation has to keep odours under control, supply enough outdoor air for residents who spend nearly all their time indoors, keep older occupants warm and draft-free, and support infection control during outbreaks, all without the noise and institutional feel of a hospital system.</p>

<h2>Which standards apply</h2>
<p>In the US, nursing homes and skilled nursing facilities are covered by the FGI Guidelines for Design and Construction of Residential Health, Care, and Support Facilities, which incorporate ASHRAE 170 for ventilation of the healthcare spaces in them. Assisted living and independent senior housing are often governed by the building and mechanical codes with ASHRAE 62.1 or 62.2, depending on whether units are treated as dwelling units. CMS requirements apply to certified nursing homes. In Canada, long-term care homes are regulated provincially; CSA Z317.2 is widely referenced, and CSA Z8004, a standard for long-term care home operations and infection prevention and control, addresses related topics. Confirm the building's classification and the governing documents early, because they determine ventilation rates and room relationships.</p>
<p class="note">This guide covers long-term care and senior living. Acute care hospital spaces have different requirements, covered in <a href="<?= url('guides/ashrae-170-ventilation-requirements') ?>">ASHRAE 170 ventilation requirements</a>.</p>

<h2>Ventilation needs by space</h2>
<table>
<thead><tr><th>Space</th><th>Primary concern</th><th>Typical approach</th></tr></thead>
<tbody>
<tr><td>Resident rooms</td><td>Outdoor air, comfort, quiet operation</td><td>Ducted outdoor air from a central unit plus in-room heating and cooling, or a central system with room terminals</td></tr>
<tr><td>Resident toilets and bathing rooms</td><td>Odour and moisture</td><td>Continuous exhaust, negative to the resident room</td></tr>
<tr><td>Soiled utility and laundry</td><td>Odour, contamination</td><td>Negative pressure, exhausted</td></tr>
<tr><td>Dining and activity areas</td><td>Variable occupancy, food odours</td><td>Demand-controlled ventilation where permitted</td></tr>
<tr><td>Corridors</td><td>Odour migration between rooms</td><td>Supply to corridors and slightly positive relative to soiled spaces</td></tr>
<tr><td>Isolation rooms (where provided)</td><td>Airborne infection control</td><td>Negative pressure and exhaust per the governing standard</td></tr>
</tbody>
</table>

<h2>Odour control</h2>
<p>Odour is the most visible ventilation failure in long-term care and a frequent complaint from families. It comes mainly from incontinence, soiled linen, bathing rooms and food. Effective control relies on:</p>
<ul>
<li><strong>Continuous exhaust</strong> from every resident toilet, bathing room, soiled utility and laundry, sized at or above the governing minimum and balanced so these rooms stay negative.</li>
<li><strong>Clear flow paths</strong> from clean spaces toward exhaust points: corridor to resident room to toilet.</li>
<li><strong>Adequate outdoor air</strong> to dilute what exhaust does not capture.</li>
<li><strong>Exhaust that keeps running.</strong> Toilet exhaust fans on timers or switches defeat the design; most LTC owners want them continuous.</li>
<li><strong>Corridor supply</strong> so that corridors do not become the return path for odorous air from multiple rooms.</li>
<li><strong>Gas-phase filtration</strong> on recirculated air in some cases, though source control is far more effective.</li>
</ul>

<h2>Comfort for older residents</h2>
<p>Older people are often less tolerant of cool temperatures and drafts, have reduced thermoregulation, and may be sedentary for long periods. Designs commonly target warmer space temperatures than in offices, and many residents want individual control.</p>
<ul>
<li>Supply air temperatures and diffuser placement that avoid drafts across beds and seating areas.</li>
<li>Low air velocity in occupied zones; displacement ventilation can work well in dining and activity spaces.</li>
<li>Perimeter heating in cold climates to offset window downdrafts.</li>
<li>Quiet operation in resident rooms, especially at night. Target low noise criteria and keep fan coils or heat pumps quiet at their operating speed.</li>
<li>Humidity control in summer to limit stuffiness, and humidification in cold climates where very dry air causes discomfort.</li>
</ul>

<h2>Outdoor air and system arrangements</h2>
<p>Residents spend almost all of their time indoors, often in the same few rooms, so outdoor air quality and quantity matter more than in many commercial buildings. A common arrangement in new buildings is a dedicated outdoor air system (DOAS) with energy recovery delivering filtered, tempered outdoor air to each room and corridor, combined with in-room terminal heating and cooling. The DOAS approach decouples ventilation from temperature control, makes outdoor air measurable and simplifies pressure relationships. Energy recovery must not transfer toilet and soiled-room exhaust contaminants back into supply; heat recovery device selection is discussed in <a href="<?= url('guides/air-to-air-recovery-technologies-compared') ?>">air-to-air recovery technologies compared</a>.</p>
<p>Filtration of MERV 13 or higher on the outdoor air system is common practice, and higher efficiency can be considered for buildings near traffic or wildfire smoke.</p>

<h2>Infection control and outbreaks</h2>
<p>Long-term care populations are vulnerable to respiratory outbreaks. Ventilation features that help during an outbreak:</p>
<ul>
<li>Ability to increase outdoor air or filtration to infection-control levels temporarily, as described in <a href="<?= url('guides/ashrae-241-infection-risk-control') ?>">ASHRAE 241 infection risk control</a>.</li>
<li>One or more rooms that can be converted to negative pressure for isolation.</li>
<li>Avoiding air paths that carry air from one resident room into another.</li>
<li>Controls that allow a wing or floor to be operated differently from the rest of the building.</li>
</ul>

<h2>Maintenance and operation</h2>
<p>Long-term care facilities often have small maintenance teams. Equipment that is simple to service, with accessible filters, clear labelling and remote alarms for fan failure, keeps ventilation working in practice. Specify continuous exhaust fans with failure alarms, and include filter and exhaust checks in the facility's routine rounds.</p>
<?php guide_end([
    ['What ventilation standards apply to long-term care homes?', 'In the US, nursing homes typically follow the FGI residential health care guidelines, which incorporate ASHRAE 170, while assisted living may follow building codes with ASHRAE 62.1 or 62.2. In Canada, provincial requirements apply, often referencing CSA Z317.2.'],
    ['How do you control odours in long-term care?', 'With continuous exhaust from toilets, bathing and soiled utility rooms, airflow paths from clean to soiled spaces, corridor supply and adequate outdoor air. Source exhaust is more effective than filtration.'],
    ['What temperature do long-term care residents prefer?', 'Older residents often prefer warmer conditions than typical office settings and are sensitive to drafts. Designs commonly target warmer setpoints with individual room control.'],
    ['Is a DOAS a good choice for long-term care?', 'Often yes. A dedicated outdoor air system with energy recovery delivers measurable outdoor air to each room and corridor, with in-room terminals handling heating and cooling.'],
]);
