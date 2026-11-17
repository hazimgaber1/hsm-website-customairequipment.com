<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-lead-times-procurement'); ?>
<p class="lede">Custom air handler lead time is the sum of several stages, from submittal preparation and approval through engineering release, material procurement, fabrication, testing and shipping, and the stages controlled by the project team, especially submittal review and design changes, are often as long as the time spent in the factory.</p>

<h2>The stages of a custom AHU order</h2>
<table>
<thead><tr><th>Stage</th><th>What happens</th><th>Who controls it</th></tr></thead>
<tbody>
<tr><td>Order entry and kickoff</td><td>Purchase order received, scope confirmed, project assigned</td><td>Contractor and manufacturer</td></tr>
<tr><td>Submittal preparation</td><td>Engineering produces drawings, performance data, wiring diagrams</td><td>Manufacturer</td></tr>
<tr><td>Submittal review</td><td>Contractor and engineer review, comment, approve or return</td><td>Contractor and engineer</td></tr>
<tr><td>Resubmittal cycles</td><td>Revisions in response to comments</td><td>Both</td></tr>
<tr><td>Release for production</td><td>Approved drawings released; final engineering, bills of material</td><td>Manufacturer, after approval</td></tr>
<tr><td>Material procurement</td><td>Purchase of fans, motors, coils, dampers, controls, steel and specialty items</td><td>Manufacturer and its suppliers</td></tr>
<tr><td>Fabrication and assembly</td><td>Frame, casing, component installation, wiring</td><td>Manufacturer</td></tr>
<tr><td>Testing</td><td>Factory tests, witness tests if specified</td><td>Manufacturer and owner's witnesses</td></tr>
<tr><td>Shipping preparation and freight</td><td>Splitting, crating, loading, transport, permits for oversize loads</td><td>Manufacturer and carrier</td></tr>
</tbody>
</table>
<p>Most manufacturers quote lead time from approved submittals to shipment, which excludes the first three stages and the last. When the schedule says "the unit has a 16-week lead time," confirm what that number includes.</p>

<h2>Drivers within the manufacturer's control</h2>
<h3>Engineering load</h3>
<p>Custom units need unique drawings and design calculations. A manufacturer's engineering backlog varies with market activity; at busy times, submittal preparation takes longer.</p>
<h3>Production capacity</h3>
<p>Production slots are scheduled across many orders. A unit released for production is placed in the next available slot, which may be weeks after release in a busy period.</p>
<h3>Complexity</h3>
<p>Stainless construction, welded floors, fan arrays with many modules, integrated energy recovery, complex controls and knockdown construction all add fabrication time.</p>

<h2>Drivers in the supply chain</h2>
<p>Many components are bought in. Their lead times can exceed the manufacturer's own fabrication time.</p>
<ul>
<li><strong>Motors and drives,</strong> especially large or specialized motors, high-voltage drives or specific enclosure types.</li>
<li><strong>Coils</strong> in unusual materials, large sizes or with special coatings.</li>
<li><strong>Energy recovery wheels and plates</strong> in large sizes.</li>
<li><strong>Controls hardware</strong> from a specified vendor, especially where the specification restricts brands.</li>
<li><strong>Electrical components</strong> such as disconnects, transformers and control panels, which have seen long lead times in recent years.</li>
<li><strong>Specialty materials</strong> such as stainless or aluminum sheet in specific gauges.</li>
</ul>
<p class="note">Ask the manufacturer to identify the longest-lead components early. Sometimes a specification change, such as allowing an alternate motor or controls vendor, can shorten the schedule without affecting performance.</p>

<h2>Drivers in the project team's control</h2>
<h3>Submittal review time</h3>
<p>Every week a submittal sits in review is a week added to delivery. Contractor review followed by engineer review can easily consume several weeks, and a returned submittal restarts part of the cycle. Clear, complete reviews done once shorten schedules more reliably than anything the factory can do; the <a href="<?= url('guides/ahu-submittal-review-checklist') ?>">AHU submittal review checklist</a> helps get it right the first time.</p>
<h3>Design changes</h3>
<p>Changes after release, such as a different coil, added section or revised controls, can push the unit back into engineering and may lose its production slot.</p>
<h3>Incomplete information</h3>
<p>Missing information at order (voltage not confirmed, controls vendor not chosen, site dimensions not verified) holds up submittals. Completing the RFQ information up front, as listed in <a href="<?= url('guides/rfq-information-checklist') ?>">information a manufacturer needs to quote a custom AHU</a>, carries forward into faster submittals.</p>
<h3>Witness test scheduling</h3>
<p>Witness tests have to fit attendees' calendars. A test delayed by a week delays shipment by a week.</p>

<h2>Building a realistic procurement timeline</h2>
<ol>
<li>Start from the required on-site date, then work backward.</li>
<li>Subtract shipping time, including any border crossing and oversize permits.</li>
<li>Subtract testing time, including witness test scheduling.</li>
<li>Subtract the manufacturer's quoted lead time from approval to ship.</li>
<li>Subtract submittal review and at least one resubmittal cycle.</li>
<li>Subtract submittal preparation time.</li>
<li>Subtract procurement time for the contractor to award the order.</li>
</ol>
<p>The result is the latest date to issue the purchase order. If that date has already passed, options include early release of long-lead components, pre-purchase by the owner, or accepting a different product category.</p>
<p class="warn">Lead times move with the market. Treat any published typical lead time as a planning number and confirm with the manufacturer at the time of purchase.</p>

<h2>Freight and site readiness</h2>
<p>The last link is often underestimated. Oversize sections may need permits and escorts, limited travel hours and specific routes. Cross-border shipments add customs clearance. Once the unit is ready, the site must be ready too: a unit finished on schedule but held at the factory because the pad or crane is not ready may incur storage charges, and a unit delivered too early must be stored and protected on site. Agree a delivery window with the contractor and confirm it a few weeks before shipment.</p>

<h2>Strategies to shorten lead time</h2>
<ul>
<li><strong>Owner pre-purchase</strong> of air handlers before the general contractor is on board.</li>
<li><strong>Early manufacturer engagement</strong> during design, so the selection is close to final at bid.</li>
<li><strong>Phased release:</strong> approve the general arrangement first and controls details later, if the manufacturer can work that way.</li>
<li><strong>Parallel reviews</strong> by contractor and engineer rather than sequential.</li>
<li><strong>Flexible component specifications</strong> that allow alternates for long-lead items.</li>
</ul>
<p>For retrofit projects, the shutdown window needs to be fitted around these dates as well; that planning is covered in the <a href="<?= url('guides/retrofit-shutdown-planning-checklist') ?>">retrofit shutdown planning checklist</a>.</p>
<?php guide_end([
    ['How long does it take to get a custom air handler?', 'It depends on engineering load, production capacity, component lead times and the time spent in submittal review. Manufacturers typically quote from approved submittals to shipment, so add submittal and shipping time to get the full duration.'],
    ['What usually delays custom AHU delivery?', 'Common causes are slow or repeated submittal reviews, design changes after release, missing information at order, long-lead purchased components such as motors, drives and electrical gear, and witness test scheduling.'],
    ['How can I shorten AHU lead time?', 'Engage the manufacturer early, provide complete information at order, review submittals promptly and in parallel, allow alternates for long-lead components, and consider owner pre-purchase of equipment.'],
]);
