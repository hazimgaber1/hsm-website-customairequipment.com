<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('mixed-use-building-ahu-zoning'); ?>
<p class="lede">In a mixed-use building, put spaces on the same air handler only when they share an operating schedule, a similar load profile, compatible ventilation and exhaust, and a single owner or billing arrangement. Retail, office and residential uses rarely match on all four, so most mixed-use projects end up with separate systems per use, sometimes sharing a central plant.</p>

<h2>Step 1: Map uses, owners and schedules</h2>
<p>Start with a stacking diagram of the building: which floors and areas are retail, restaurant, office, residential, amenity, parking and back of house. For each, record:</p>
<ul>
<li><strong>Owner or tenant structure.</strong> Will retail be leased to separate tenants? Are residential units condominiums or rentals? Is the office a single tenant?</li>
<li><strong>Operating hours.</strong> Retail 10 a.m. to 9 p.m., office 7 a.m. to 7 p.m. weekdays, residential 24/7, restaurant late into the night.</li>
<li><strong>Metering and billing.</strong> Separate metering often dictates separate equipment.</li>
<li><strong>Future change.</strong> Ground-floor retail may become a restaurant, a clinic or a fitness centre over the building's life.</li>
</ul>
<p>Uses with different owners, different hours or separate billing should usually not share an air handler.</p>

<h2>Step 2: Compare load and ventilation profiles</h2>
<p>Next, compare how each use loads an air handler:</p>
<table>
<thead><tr><th>Use</th><th>Load character</th><th>Ventilation and exhaust</th></tr></thead>
<tbody>
<tr><td>Retail</td><td>High lighting, variable occupancy, entrance infiltration</td><td>Occupant-driven; possible DCV</td></tr>
<tr><td>Restaurant</td><td>Kitchen heat, high occupancy at meal times</td><td>Large hood exhaust with dedicated makeup air</td></tr>
<tr><td>Office</td><td>Moderate internal gains, perimeter swings, weekday daytime</td><td>Moderate outdoor air; economizer</td></tr>
<tr><td>Residential</td><td>Low internal gains, 24/7, occupant-controlled</td><td>Continuous ventilation, bathroom and kitchen exhaust</td></tr>
<tr><td>Amenity (gym, pool, lounge)</td><td>Varies widely; pools are latent-dominated</td><td>Higher rates; pools need dedicated dehumidification</td></tr>
</tbody>
</table>
<p>Spaces that look similar on this table and on the schedule list are candidates for sharing. Spaces with large dedicated exhaust, such as restaurants and pools, almost always need their own air handling.</p>

<h2>Step 3: Group spaces into air handler zones</h2>
<p>Apply these rules in order:</p>
<ol>
<li><strong>Separate residential from commercial.</strong> Residential runs continuously and is occupant-controlled; it should have its own ventilation system, typically a DOAS or in-suite ventilators, plus in-suite heating and cooling.</li>
<li><strong>Separate restaurants and other heavy-exhaust uses.</strong> Each restaurant tenant usually needs its own makeup air and rooftop or split equipment, with roof or shaft space reserved for future tenants.</li>
<li><strong>Group office floors together</strong> on a central or floor-by-floor system, depending on tenancy.</li>
<li><strong>Group small retail units</strong> on a shared system only if the landlord will operate it and bill tenants, and if tenants accept common hours. Otherwise provide individual tenant systems or a shared condenser water or ventilation backbone that tenants connect to.</li>
<li><strong>Handle amenities separately</strong> or with residential, according to who operates them and when they are used.</li>
</ol>
<p class="note">A shared central plant (chillers, boilers, heat pumps or a condenser water loop) can serve several air handlers belonging to different uses. Sharing the plant captures diversity and efficiency while keeping air systems separate.</p>

<h2>Step 4: Check pressure relationships between uses</h2>
<p>Odors and smoke migrating between uses are common complaints in mixed-use buildings. Define pressure relationships:</p>
<ul>
<li>Residential corridors positive relative to suites; see <a href="<?= url('guides/murb-corridor-pressurization-calculation') ?>">MURB corridor makeup air</a>.</li>
<li>Restaurants negative relative to adjacent retail, lobbies and residential.</li>
<li>Parking garages negative relative to the building, with vestibules at connections.</li>
<li>Retail and office lobbies slightly positive to outdoors to limit infiltration.</li>
</ul>
<p>Separate air handlers make these relationships easier to hold. When systems share return paths, odor and smoke can travel through the return. Separate stacks and shafts for each use also help.</p>

<h2>Step 5: Plan shafts, louvers and roof space</h2>
<ol>
<li>Allocate vertical shafts for each system: residential DOAS supply and exhaust, office supply and return, restaurant exhaust and makeup air.</li>
<li>Locate outdoor air intakes away from restaurant exhaust, parking exhaust, garbage rooms and loading docks. Intake separation distances are covered in <a href="<?= url('guides/outdoor-air-intake-placement') ?>">outdoor air intake placement</a>.</li>
<li>Reserve roof or podium space for future tenant equipment, especially restaurant exhaust fans.</li>
<li>Coordinate structural capacity and acoustic separation for rooftop equipment over residential units.</li>
</ol>

<h2>Step 6: Set controls and metering boundaries</h2>
<ul>
<li>Provide separate BAS zones or controllers per use, with a common front end if the building operator manages all of them.</li>
<li>Meter thermal energy and electricity by use where billing requires it.</li>
<li>Define emergency and smoke control sequences that act on each system appropriately.</li>
<li>Provide after-hours override for office and retail without affecting residential.</li>
</ul>

<h3>Example grouping</h3>
<p>Consider a podium with two floors of retail and a restaurant, four floors of office, and twelve floors of rental apartments above. A reasonable outcome is: one rooftop DOAS plus in-suite heat pumps for the apartments; one central or two floor-by-floor systems for the office; a landlord-operated ventilation backbone with tenant-supplied units for retail; and a dedicated makeup air unit and exhaust fan for the restaurant, with a shaft sized for a second restaurant in future. A shared condenser water loop could serve the heat pumps in all three uses.</p>

<h2>Step 7: Review with the owner and operators</h2>
<p>Present the zoning plan with the reasons for each grouping and the implications for leasing, metering and maintenance. Developers sometimes push to combine systems for first cost; show them the operating and leasing implications of doing so. Office towers with several floors of a single use raise a different question, central versus floor-by-floor units, discussed in <a href="<?= url('guides/central-vs-floor-by-floor-office-ahus') ?>">central plant vs floor-by-floor AHUs</a>.</p>
<?php guide_end([
    ['Can retail and office spaces share an air handler?', 'Only if they share schedules, ownership or billing, and load characteristics. Retail usually runs later hours with different loads, so separate systems or separate zones on a shared plant are more common.'],
    ['Should residential units in a mixed-use building share ventilation with commercial spaces?', 'Generally no. Residential runs continuously and needs independent ventilation and exhaust, and sharing systems risks odor transfer and billing problems.'],
    ['How do you prevent restaurant odors spreading in a mixed-use building?', 'Give restaurants their own exhaust and makeup air, keep them negative to adjacent spaces, separate their shafts and keep outdoor air intakes away from their exhaust outlets.'],
]);
