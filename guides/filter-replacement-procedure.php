<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('filter-replacement-procedure'); ?>
<p class="lede">Change air handler filters with the fan stopped and locked out, remove loaded filters without shaking dust into the airstream, install new filters of the exact size and rating in the correct direction with every latch and seal engaged, and then check for gaps and reset or record the pressure gauge. A filter bank with bypass gaps performs far below its rating.</p>

<h2>Step 1: Plan the change-out</h2>
<ol>
<li>Confirm the filter schedule: size, depth, efficiency rating (MERV or ISO 16890 class), quantity per bank, and frame or holding system type. Use the unit's filter list, not the labels on the old filters, which may already be wrong.</li>
<li>Check that the replacement filters on hand match the schedule exactly. A filter 1/2 in undersized in each direction leaves a gap all round.</li>
<li>Record the current pressure drop on each bank before shutting down. This confirms the change is due and gives a data point for trending the change interval.</li>
<li>Arrange a shutdown window with operations, and check whether the space can tolerate the unit being off.</li>
<li>Bring bags for the used filters, a vacuum with HEPA filtration, gloves, eye protection and a respirator suitable for the dust expected.</li>
</ol>
<p class="note">For units serving healthcare, laboratories or other contaminated airstreams, follow the facility's infection control or biosafety procedures. Filters from some exhaust or containment systems need bag-in/bag-out handling, which is a separate procedure.</p>

<h2>Step 2: Shut down and lock out</h2>
<ol>
<li>Stop the fan through the control system, then lock out the fan disconnect or VFD. Follow <a href="<?= url('guides/lockout-tagout-ahu-service') ?>">how to apply lockout/tagout for AHU service</a>.</li>
<li>Wait for the fan to stop. Large fans and fans that can windmill from other units' airflow take time; confirm the wheel is stationary.</li>
<li>Open the filter section access door slowly. If the section is under negative pressure from another running fan, the door may be pulled shut or forced open.</li>
</ol>
<p class="warn">Never change filters with the fan running. Dust released from loaded filters goes straight downstream onto coils and into the duct, and a door opened on a running fan section can swing violently.</p>

<h2>Step 3: Remove the loaded filters</h2>
<ol>
<li>Release the filter latches, clips or holding frames.</li>
<li>Remove the filters carefully, keeping the dirty side facing upstream and slightly downward so dust does not fall into the clean side of the bank.</li>
<li>Bag each filter at the unit, or as soon as it is out, especially bag and pocket filters that shed dust when flexed.</li>
<li>Inspect the empty frames and racks. Look for damaged gaskets, bent tracks, missing clips and gaps between frames.</li>
<li>Vacuum the filter section floor and frames with a HEPA-filtered vacuum. Wipe the downstream side of the rack if dust has passed through.</li>
<li>Look downstream at the coil face. Dust on the coil indicates bypass or a filter failure.</li>
</ol>

<h2>Step 4: Install the new filters</h2>
<ol>
<li>Check each new filter for shipping damage: torn media, crushed frames, separated pockets.</li>
<li>Note the airflow direction arrow on the filter frame and install it pointing downstream. For bag filters, the pockets point downstream and must hang freely without touching each other or the floor.</li>
<li>For front-loading frames, seat each filter against the frame gasket and engage every clip or latch. A single missed latch leaves a gap.</li>
<li>For side-access tracks, slide filters in so they butt tightly together, then install the door-side blocker or seal and close the door so its gasket compresses the filter pack.</li>
<li>Where prefilters and final filters are installed together, change each according to its own pressure drop, and make sure prefilters go in the upstream position.</li>
<li>Write the change date on the frame or a label inside the door.</li>
</ol>

<h2>Step 5: Check for bypass</h2>
<p>Bypass is air that goes around filters instead of through them. Even small gaps carry a disproportionate share of airflow, because a gap has far less resistance than a loaded filter. Before closing up:</p>
<ul>
<li>Shine a flashlight from the downstream side, with the section dark, and look for light between filters and frames.</li>
<li>Check that the bank is filled completely: no empty frame positions, no blank-offs missing.</li>
<li>Check that the access door seal presses on the filters or the track seal as designed.</li>
<li>Check side-access tracks for a filter that sits crooked or is shorter than the others.</li>
</ul>
<p>Persistent gaps, damaged frames or worn track seals need repair. Frame and holding system design is discussed in <a href="<?= url('guides/filter-bypass-leakage-frames') ?>">filter bypass leakage and frames</a>.</p>

<h2>Step 6: Restart and reset</h2>
<ol>
<li>Close and latch the access door. Remove locks and restore power according to the lockout procedure.</li>
<li>Start the fan and let it reach normal operating airflow.</li>
<li>Read the clean filter pressure drop on each bank and record it. Compare it with the manufacturer's initial pressure drop at that airflow; a value well below it suggests bypass or a missing filter.</li>
<li>Re-zero magnehelic gauges with the fan off, if they had drifted, before taking the clean reading.</li>
<li>For BAS filter transmitters, record the new clean value and confirm the alarm setpoint still matches the change point.</li>
</ol>

<h2>When to change filters</h2>
<p>Change filters when they reach their planned final pressure drop, not on a fixed calendar date, unless the owner's policy requires both. The economics of picking the best change point are worked through in <a href="<?= url('guides/filter-change-interval-optimization') ?>">calculating the optimal filter change point</a>. If filters load much faster than expected, or blow out, that is a troubleshooting question for the filtration guides, not a maintenance task.</p>
<?php guide_end([
    ['Can I change AHU filters while the fan is running?', 'No. Dust shaken loose from loaded filters goes straight downstream onto coils and into ductwork, and opening a door on a running fan section is unsafe. Stop and lock out the fan first.'],
    ['Which way do bag filters go in?', 'The pockets point downstream, in the direction of airflow, and must hang freely without touching each other or the floor. Follow the airflow arrow on the filter header frame.'],
    ['How do I know if my filters are bypassing?', 'With the section dark, shine a light from the downstream side and look for gaps around filters and frames. A clean pressure drop well below the filter manufacturer\'s initial value also suggests air is going around the filters.'],
]);
