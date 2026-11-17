<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('hepa-filter-integrity-testing'); ?>
<p class="lede">An installed HEPA filter is leak tested by introducing a known aerosol challenge upstream, measuring its concentration, then slowly scanning the entire downstream face and seal of the filter with a probe. Any reading above the acceptance limit, typically 0.01% of the upstream concentration for photometer testing, is a leak that must be repaired or the filter replaced.</p>

<h2>What the test proves</h2>
<p>A factory efficiency test shows the filter media pack met its rating when it left the plant. The in-place integrity test checks something different: whether the filter, as installed in its housing, has any local leaks in the media, in the seal between media and frame, or in the seal between frame and housing or ceiling grid. Damage during shipping and installation is common enough that every critical installation is tested in place.</p>
<p>The methods are described in ISO 14644-3 and in IEST recommended practices, and many owners write their own procedures based on them. Filter efficiency classes are a separate topic covered in <a href="<?= url('guides/hepa-ulpa-filter-classes') ?>">HEPA and ULPA filter classes</a>.</p>

<h2>Equipment</h2>
<ul>
<li><strong>Aerosol generator.</strong> Most commonly a Laskin-nozzle generator producing a polydisperse oil aerosol from poly-alpha-olefin (PAO). Dioctyl phthalate (DOP) was used historically and the test is still often called a "DOP test," but PAO has largely replaced it.</li>
<li><strong>Aerosol photometer.</strong> Measures mass concentration of aerosol and reads penetration as a percentage of an upstream reference. Calibrated at the interval the owner specifies.</li>
<li><strong>Scanning probe.</strong> A rectangular or round probe connected to the photometer, sized to the sampling flow and scan rate.</li>
<li><strong>Discrete particle counter (alternative).</strong> Used for ULPA filters, for applications where oil aerosol is unwanted, or where the owner specifies particle-counter methods. It requires a different calculation of acceptance.</li>
</ul>

<h2>Step-by-step procedure (photometer method)</h2>
<ol>
<li><strong>Confirm prerequisites.</strong> Airflow through the filters is at or near design. Measure and record filter face velocity or airflow; testing at very low flow can hide leaks, and testing at very high flow can exaggerate them. The room is clean and construction work above the ceiling is complete.</li>
<li><strong>Introduce the challenge.</strong> Inject aerosol upstream of the filters at a point that gives good mixing: an injection port in the duct, the AHU, or the filter housing. Ensure the aerosol is uniformly distributed across all filters being tested.</li>
<li><strong>Measure upstream concentration.</strong> Sample upstream through the housing's upstream port. Typical target concentrations are in the range of about 10 to 100 µg/L; confirm the value your procedure requires. Set the photometer's 100% reference to this reading.</li>
<li><strong>Check for uniformity.</strong> Where several filters share a plenum, verify the upstream concentration at more than one point or confirm the mixing arrangement is adequate.</li>
<li><strong>Scan the filter face.</strong> Hold the probe about 1 in. (25 mm) from the downstream face and move it in slightly overlapping strokes at a slow, steady rate, commonly no faster than about 2 in. per second (50 mm/s) for a standard probe. Cover the entire face.</li>
<li><strong>Scan the perimeter.</strong> Scan the full perimeter where the media meets the frame and where the frame meets the gasket, gel channel or grid. Leaks are more common here than in the media.</li>
<li><strong>Investigate readings.</strong> When the photometer rises above the acceptance threshold, stop and hold the probe stationary at the point of highest reading to confirm. Mark the leak location.</li>
<li><strong>Repair or replace.</strong> Small media leaks may be repaired with a sealant approved by the filter manufacturer, within the owner's limits on total patched area and size of any single patch. Frame and gasket leaks are corrected by reseating or replacing the seal. Damaged filters beyond repair limits are replaced.</li>
<li><strong>Retest.</strong> Rescan every repaired area and the full perimeter after any seal work.</li>
<li><strong>Document.</strong> Record filter identifiers, locations, airflow, upstream concentration, instrument serial numbers and calibration dates, scan results, leaks found, repairs and final results.</li>
</ol>
<p class="formula">Penetration (%) = Downstream concentration ÷ Upstream concentration × 100</p>
<p>A downstream reading of 0.008 µg/L against an upstream concentration of 40 µg/L is 0.02% penetration, which exceeds a 0.01% limit and counts as a leak.</p>
<p class="warn">PAO oil deposits on surfaces. Use the lowest challenge concentration that gives a reliable reading, and confirm the owner accepts oil aerosol in the space. Some semiconductor and sensitive product areas prohibit it.</p>

<h2>Acceptance criteria</h2>
<table>
<thead><tr><th>Method</th><th>Typical acceptance basis</th><th>Notes</th></tr></thead>
<tbody>
<tr><td>Photometer scan</td><td>No reading above 0.01% of upstream concentration</td><td>Common for HEPA filters in pharmaceutical and healthcare work</td></tr>
<tr><td>Particle counter scan</td><td>Leak defined by expected downstream count for a set penetration</td><td>Used for ULPA filters and oil-sensitive spaces; calculation in ISO 14644-3</td></tr>
<tr><td>Overall penetration (non-scannable housings)</td><td>Total downstream concentration below a set percentage</td><td>Confirms overall performance but cannot locate leaks</td></tr>
</tbody>
</table>
<p>Use the criteria in the owner's procedure or the governing standard; the values above are typical but not universal.</p>

<h2>Testing ducted housings and BIBO units</h2>
<p>Filters in ducted housings or bag-in/bag-out units cannot be scanned from the room. They need a test section with an upstream injection port, a mixing distance or baffle, and either a downstream scan section with an external probe mechanism or downstream sampling ports. Specify those test sections when the housing is purchased; adding them later is difficult. Housing details are in <a href="<?= url('guides/bag-in-bag-out-filter-housings') ?>">bag-in/bag-out filter housings</a>.</p>

<h2>When to test</h2>
<ul>
<li>After initial installation, before room classification</li>
<li>After every filter replacement or reseating</li>
<li>After any work that could disturb the filters or the ceiling grid</li>
<li>Periodically, at the interval set by the owner's program or the governing guidance</li>
<li>When particle counts suggest a leak; see <a href="<?= url('guides/cleanroom-particle-count-failures') ?>">troubleshooting cleanroom particle count failures</a></li>
</ul>
<?php guide_end([
    ['What is a PAO test?', 'It is an in-place HEPA filter leak test using a poly-alpha-olefin oil aerosol as the challenge. The aerosol is introduced upstream and the downstream face is scanned with a photometer to find any leaks.'],
    ['What is the acceptance limit for a HEPA leak test?', 'For photometer scanning, a common limit is no reading above 0.01% of the upstream challenge concentration. Particle counter methods use a different calculation. Always use the limit in the owner\'s procedure or governing standard.'],
    ['Can a leaking HEPA filter be repaired?', 'Small media leaks can often be sealed with a manufacturer-approved sealant, within limits on patch size and total patched area. Frame and seal leaks are fixed by reseating or replacing the seal. Filters with larger damage are replaced.'],
]);
