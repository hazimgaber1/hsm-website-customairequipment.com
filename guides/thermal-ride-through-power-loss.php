<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('thermal-ride-through-power-loss'); ?>
<p class="lede">When utility power fails, the UPS keeps servers running instantly, but the cooling plant usually does not. Until generators pick up and chillers or compressors restart, heat builds up in the white space. Thermal ride-through is the ability to keep server inlet temperatures within limits through that gap, using UPS-backed fans and pumps, stored cooling and fast-restart equipment.</p>

<h2>The sequence after a utility failure</h2>
<ol>
<li><strong>Utility power lost.</strong> The UPS carries the IT load without interruption. Mechanical equipment not on UPS stops.</li>
<li><strong>Generators start.</strong> Standby generators typically start and stabilize within tens of seconds, then transfer switches move loads to generator power.</li>
<li><strong>Mechanical equipment restarts.</strong> Fans and pumps on drives can restart quickly once power returns. Chillers and compressors take longer: a chiller that has shut down typically goes through a restart cycle that can take several minutes before it delivers full capacity, though fast-restart models shorten this considerably.</li>
<li><strong>Recovery.</strong> Cooling returns to full capacity and removes the heat that accumulated.</li>
</ol>
<p>The ride-through period is the time from utility loss until cooling capacity again matches the IT load. During that period, every kilowatt of IT heat goes somewhere: into room air, into the chilled water in the pipes, into the building structure, or into a storage tank.</p>

<h2>How fast temperatures rise</h2>
<p>Room air alone stores very little heat. Consider a 20,000 ft² hall with a 14 ft ceiling, so about 280,000 ft³ of air. At standard density that is roughly 21,000 lb of air, which holds about 21,000 × 0.24 = 5,040 Btu per °F. A 2,000 kW IT load produces 2,000 × 3,412 = 6,824,000 Btu/h, or about 1,900 Btu per second.</p>
<p class="formula">Rate of rise (air only) ≈ 1,900 ÷ 5,040 ≈ 0.38°F per second</p>
<p>That is over 20°F per minute if only the room air absorbed the heat. In reality, server exhaust recirculates to inlets long before the room average rises that much, so local inlet temperatures climb even faster when fans stop. Building surfaces and equipment mass slow the rise somewhat, but the conclusion holds: without air movement and a source of cooling, a dense hall has seconds to a few minutes, not tens of minutes.</p>
<p class="note">How much rise is acceptable depends on the owner's envelope. Many use the allowable class limit as the ceiling for a power event, with a rate-of-change limit as well. See <a href="<?= url('guides/ashrae-tc-9-9-thermal-guidelines') ?>">ASHRAE TC 9.9 thermal guidelines</a>.</p>

<h2>Strategies</h2>
<h3>Keep air moving</h3>
<p>Put white space fans on UPS power, or on a separate mechanical UPS, so airflow never stops. Moving air keeps server exhaust going to the return and spreads heat into the chilled water held in coils and pipes. EC and drive-equipped fans can ride through brief interruptions if their controls and power supplies are protected.</p>
<h3>Keep water moving</h3>
<p>Put chilled water pumps on UPS as well. The water already in the distribution piping and coils is a thermal reservoir. In a large plant with long pipe runs, it can absorb a meaningful share of the heat during a short gap, but only if it keeps circulating through the coils.</p>
<h3>Stored cooling</h3>
<p>A chilled water storage tank sized for the ride-through period lets UPS-backed pumps continue to deliver cold water while chillers restart. Size it from the load, duration and usable temperature difference:</p>
<p class="formula">Stored cooling (Btu) = Load (Btu/h) × Duration (h)</p>
<p class="formula">Tank volume (gal) = Stored cooling ÷ (8.34 × ΔT usable)</p>
<p>For 2,000 kW over 10 minutes: 6,824,000 × (10 ÷ 60) = 1,137,000 Btu. With a usable ΔT of 12°F: 1,137,000 ÷ (8.34 × 12) ≈ 11,400 gal. Add allowance for mixing and the portion of the tank that cannot be used effectively.</p>
<h3>Fast-restart chillers and compressors</h3>
<p>Chillers designed for rapid restart, with controls and power supplies on UPS, can return to capacity much faster than standard models. Variable speed compressors in DX units can also restart quickly. Specify the required time to restart and time to full capacity, and verify both during commissioning.</p>
<h3>Containment and room design</h3>
<p>Hot aisle containment keeps the large room volume at supply temperature, which gives servers more cool air to draw on if cooling falters. Cold aisle containment leaves a small cold volume and usually less ride-through; the comparison is in <a href="<?= url('guides/hot-aisle-vs-cold-aisle-containment') ?>">hot aisle vs cold aisle containment</a>.</p>
<h3>Controls during the event</h3>
<ul>
<li>Avoid switching economizer modes during a power event</li>
<li>Restart equipment in a planned sequence to limit generator step loads</li>
<li>Hold valves and dampers in their last positions rather than letting them fail closed</li>
<li>Keep controllers and sensors on UPS so the system knows its state when power returns</li>
</ul>

<h2>Comparing options</h2>
<table>
<thead><tr><th>Strategy</th><th>What it covers</th><th>Limitations</th></tr></thead>
<tbody>
<tr><td>Fans on UPS</td><td>Air movement; avoids recirculation spikes</td><td>Adds UPS capacity; no cooling source by itself</td></tr>
<tr><td>Pumps on UPS</td><td>Uses water in pipes and coils as a reservoir</td><td>Reservoir is limited without storage</td></tr>
<tr><td>Chilled water storage</td><td>Full cooling for a defined period</td><td>Space, cost, structural load</td></tr>
<tr><td>Fast-restart chillers</td><td>Shortens the gap</td><td>Still leaves a gap of some duration</td></tr>
<tr><td>Hot aisle containment</td><td>More cool air available to servers</td><td>Helps only for short gaps</td></tr>
</tbody>
</table>
<p>Support rooms need the same analysis; UPS rooms in particular generate more heat as batteries discharge, as noted in <a href="<?= url('guides/electrical-room-ups-cooling') ?>">how to cool electrical and UPS rooms</a>. The whole sequence should be tested under load during integrated systems testing, described in <a href="<?= url('guides/data-center-commissioning-levels') ?>">data center cooling commissioning levels</a>.</p>
<?php guide_end([
    ['How long can a data center last without cooling?', 'It depends on density and design, but in a dense hall with fans stopped, server inlet temperatures can exceed limits within a minute or two. Keeping fans and pumps on UPS and providing stored cooling extend that time.'],
    ['Why do data centers put cooling fans on UPS?', 'Room air stores very little heat. If fans stop, server exhaust recirculates to inlets and temperatures spike within seconds. UPS-backed fans keep air moving and carry heat to the coils while chillers restart.'],
    ['How big should a chilled water storage tank be for ride-through?', 'Multiply the cooling load by the ride-through duration to get stored cooling in Btu, then divide by 8.34 times the usable temperature difference to get gallons. Add an allowance for mixing and unusable volume.'],
]);
