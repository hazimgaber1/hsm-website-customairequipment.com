<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('bag-in-bag-out-filter-housings'); ?>
<p class="lede">A bag-in/bag-out (BIBO) housing lets a technician remove a contaminated filter into a sealed plastic bag and install a new one without ever touching the dirty filter or opening the airstream to the room. It is used wherever exhaust carries biological, radiological, toxic or potent material that must not escape during maintenance.</p>

<h2>Where BIBO housings are used</h2>
<p>Any filter that captures something dangerous becomes a hazard itself when it is changed. A conventional side-access filter housing exposes the technician to the loaded media and releases particles into the mechanical room as the filter is pulled. BIBO housings remove that exposure. Typical applications include:</p>
<ul>
<li>Exhaust from BSL-3 laboratories and animal biosafety suites</li>
<li>Exhaust from potent compound and cytotoxic drug manufacturing</li>
<li>Radiopharmaceutical and nuclear medicine production</li>
<li>Exhaust from chemical processes producing toxic particulates</li>
<li>Supply or recirculation systems where the owner wants contained changes for product protection</li>
</ul>
<p>The filter grades inside the housing are a separate topic; for efficiency classes, see <a href="<?= url('guides/hepa-ulpa-filter-classes') ?>">HEPA and ULPA filter classes</a>.</p>

<h2>How a BIBO housing is built</h2>
<p>A BIBO housing is a pressure-rated box with one or more filter stages, an access port for each stage, and features that let the filter be sealed and tested in place.</p>
<ul>
<li><strong>Welded casing.</strong> Housings are usually seal-welded stainless steel or coated carbon steel, built to withstand the decontamination agents used on site and to hold a pressure decay test.</li>
<li><strong>Bagging ring.</strong> Each access port has a ribbed collar. A heavy PVC bag is fitted over the collar with an elastic band or strap, so the bag becomes an extension of the housing.</li>
<li><strong>Access door.</strong> The door seals over the bagging ring and is opened only with the bag already in place.</li>
<li><strong>Filter clamping and seal.</strong> A mechanical clamping mechanism, operated from outside, presses the filter against a sealing surface. Seals are either compressed gasket or a knife-edge into a gel channel. The clamp releases the filter without opening the housing.</li>
<li><strong>Isolation dampers.</strong> Bubble-tight dampers upstream and downstream let the housing be isolated for change-out and gaseous decontamination. Specifying those dampers is covered in <a href="<?= url('guides/bubble-tight-damper-specification') ?>">specifying bubble-tight isolation dampers</a>.</li>
<li><strong>Test sections.</strong> Ports for aerosol injection upstream, a mixing distance or baffle, and either a downstream scan section or sampling ports, so each HEPA stage can be leak tested in place.</li>
<li><strong>Prefilter stage.</strong> A bagged prefilter in front of the HEPA extends HEPA life and reduces the number of hazardous HEPA changes.</li>
</ul>

<h2>The change-out procedure</h2>
<p>Every site writes its own procedure, approved by its biosafety or radiation safety officer, but the sequence is broadly consistent:</p>
<ol>
<li><strong>Isolate and decontaminate.</strong> Close the upstream and downstream dampers. For biological service, decontaminate the housing interior, often with vaporized hydrogen peroxide or another approved agent, and verify the cycle.</li>
<li><strong>Prepare.</strong> The technician wears the specified protective equipment and confirms the new filter, new bag and tools are on hand.</li>
<li><strong>Open the door.</strong> Remove the access door; the existing bag, folded over the bagging ring, now encloses the opening.</li>
<li><strong>Release the filter.</strong> Working through the bag, release the clamping mechanism and draw the filter into the bag.</li>
<li><strong>Seal and cut.</strong> Twist the bag between the filter and the housing, apply two seals or ties, and cut between them. The dirty filter is now in a sealed bag; a stub remains on the ring.</li>
<li><strong>Install the new bag.</strong> Fit a new bag containing the new filter over the ring, over the stub, and push the old stub into the new bag.</li>
<li><strong>Install the new filter.</strong> Working through the new bag, slide the filter into place and engage the clamp. Fold the bag and reinstall the door.</li>
<li><strong>Test.</strong> Open the dampers, run the system and perform an in-place leak test on the new filter before returning the system to service.</li>
</ol>
<p class="warn">The bag is the only barrier during change-out. Store bags as recommended by the manufacturer, inspect each one before use, and never improvise a bag of different size or material.</p>

<h2>Testing the housing and the filter</h2>
<p>Two different tests apply:</p>
<table>
<thead><tr><th>Test</th><th>What it proves</th><th>When</th></tr></thead>
<tbody>
<tr><td>Housing pressure decay</td><td>The casing, doors, welds and damper seals are leak-tight at the specified test pressure</td><td>Factory, after installation, and after any modification</td></tr>
<tr><td>In-place filter leak test</td><td>The filter media and its seal to the housing have no leaks above the acceptance limit</td><td>After installation, after every change-out, and periodically</td></tr>
</tbody>
</table>
<p>For nuclear and some high-containment work, owners reference ASME AG-1 for housing construction and ASME N510 for in-place testing. Biological containment suites usually adopt similar methods by owner standard. The aerosol challenge procedure is described in <a href="<?= url('guides/hepa-filter-integrity-testing') ?>">how HEPA filter integrity testing is performed</a>.</p>
<p>Scan-testable housings allow a probe to traverse the downstream face of the filter, which locates a leak precisely. Housings with only upstream and downstream sampling ports can confirm overall penetration but cannot find where a leak is. Choose scan capability when the owner wants to repair leaks rather than replace filters.</p>

<h2>Layout and integration with the air handler</h2>
<p>BIBO housings are heavy and need clear space in front of each access door for the bag and the person working on it. Allow at least the depth of the filter plus working space, and keep the doors at a height where the technician is not reaching overhead. Many owners specify redundant housings in parallel with isolation dampers so one bank can be changed while the other runs, a common feature in <a href="<?= url('guides/bsl-3-containment-checklist') ?>">BSL-3 containment design</a>.</p>
<p>Housings are typically placed on the exhaust side as close to the contaminated space as practical, so the length of contaminated duct is short. The exhaust fan downstream must be selected for the full loaded-filter pressure drop of every stage, plus the housing and damper losses, and should keep the housing under negative pressure relative to the surrounding room.</p>
<?php guide_end([
    ['What does bag-in/bag-out mean?', 'It describes a filter housing in which the filter is removed into, and installed from, a sealed plastic bag attached to the housing access port. The technician never contacts the contaminated filter and the airstream is never opened to the room.'],
    ['Do BIBO housings need to be decontaminated before filter changes?', 'For biological service, usually yes. The housing is isolated with tight dampers and decontaminated with an approved agent before the bag change. The site biosafety officer sets the procedure.'],
    ['How is a BIBO housing tested?', 'The housing is pressure decay tested for leakage, and each HEPA filter is tested in place with an aerosol challenge after installation and every change-out. Scan-test sections allow leaks to be located precisely.'],
]);
