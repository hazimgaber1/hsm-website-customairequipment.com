<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('filter-bypass-leakage-frames'); ?>
<p class="lede">Air that leaks around a filter instead of through it carries its full particle load downstream, so a small bypass can wipe out much of the benefit of a high-efficiency filter. Installed efficiency depends as much on the holding frame, gaskets, clamping and blank-offs as on the filter's rated MERV.</p>

<h2>How bypass reduces installed efficiency</h2>
<p>If a fraction b of the airflow bypasses the filter and the rest passes through media with efficiency E, the installed efficiency is:</p>
<p class="formula">E(installed) = (1 − b) × E</p>
<p>It is often clearer to think in terms of penetration, the fraction of particles that gets through:</p>
<p class="formula">P(installed) = (1 − b) × P(filter) + b</p>
<p>Two examples show how quickly bypass matters as efficiency rises:</p>
<ul>
<li>A MERV 14 filter capturing 75% of 0.3 to 1.0 µm particles, with 5% bypass: E(installed) = 0.95 × 75% ≈ 71%. Noticeable, but the filter still does most of its job.</li>
<li>A HEPA filter at 99.97% (penetration 0.03%) with 0.1% bypass: P(installed) = 0.999 × 0.03% + 0.1% ≈ 0.13%. Installed efficiency is about 99.87%; the bypass lets through more than four times as many particles as the filter itself.</li>
</ul>
<p>The higher the filter efficiency, the smaller the bypass that dominates the result. A rack that is acceptable for MERV 8 can be unacceptable for MERV 14, and an excellent MERV 14 rack is not adequate for HEPA.</p>

<h2>How much air a gap passes</h2>
<p>Air leaks through gaps driven by the pressure difference across the filter bank, which is the filter's own pressure drop. Treating the gap as an orifice:</p>
<p class="formula">Leakage CFM ≈ 4005 × C × A × √ΔP</p>
<p>where A is the gap area in ft², ΔP is in in. w.c., and C is a discharge coefficient, about 0.6 for a sharp-edged slot. Consider a 1/8 in (3 mm) gap along one 24 in edge of a filter header: A = 0.125 × 24 = 3 in² = 0.021 ft². At a filter pressure drop of 0.5 in. w.c.:</p>
<p class="formula">Leakage ≈ 4005 × 0.6 × 0.021 × √0.5 ≈ 36 CFM</p>
<p>A 24 × 24 in filter at 500 fpm carries 2,000 CFM, so that single gap bypasses about 1.8% of the flow. As the filter loads and its pressure drop doubles, bypass increases by about 40% (√2), while flow through the media stays constant. A filter bank that leaks a little when clean leaks more when dirty.</p>

<h2>Where leaks occur</h2>
<ul>
<li><strong>Between the filter header and the holding frame</strong>, where gaskets are missing, compressed set, torn or not compressed by the clips.</li>
<li><strong>Between adjacent holding frames</strong> in a multi-frame bank, if frames are not sealed to each other.</li>
<li><strong>Between the frame bank and the casing</strong>, where blank-off panels are missing or not caulked.</li>
<li><strong>Along side-access tracks</strong>, between neighbouring filters and at end jambs.</li>
<li><strong>Around oversize or undersize filters</strong>: a nominal 24 × 24 in filter may actually measure 23 3/8 in; mixing brands with different actual dimensions creates gaps.</li>
<li><strong>Through missing filters</strong> or open positions left after a partial change.</li>
<li><strong>Through damaged media or frames</strong>, such as torn bags or cracked rigid cells.</li>
</ul>

<h2>Holding frame design features</h2>
<table>
<thead><tr><th>Feature</th><th>Purpose</th></tr></thead>
<tbody>
<tr><td>Continuous gasket on the sealing face, closed-cell or foam-in-place</td><td>Seals header to frame; resists compression set</td></tr>
<tr><td>Positive clamping (spring clips, cam latches, clamping bars) at multiple points</td><td>Applies even compression around the header</td></tr>
<tr><td>Rigid frames, typically 16 gauge or heavier galvanized, aluminum or stainless</td><td>Prevents racking and gaps under pressure</td></tr>
<tr><td>Frames joined with fasteners and sealed at joints</td><td>Eliminates frame-to-frame bypass</td></tr>
<tr><td>Blank-offs sealed to casing on all four sides of the bank</td><td>Eliminates bank-to-casing bypass</td></tr>
<tr><td>Knife-edge with gel seal (HEPA)</td><td>Near-zero leakage seal for critical applications</td></tr>
<tr><td>Frames sized to the actual filter dimensions specified</td><td>Avoids gaps from dimensional mismatch</td></tr>
</tbody>
</table>
<p>Side-access housings can reach good leakage performance, but they depend on filters being compressed together along the track by a door-mounted or spring mechanism. Holding frame bank construction compared with side-access tracks is covered in <a href="<?= url('guides/filter-housing-side-access-vs-front-load') ?>">side-access vs front-load filter housings</a>.</p>

<h2>Direction of pressure matters</h2>
<p>In a negative-pressure section, air tends to be drawn into the filter section from outside the casing as well as around the filters. In a positive-pressure section, such as a final filter after the supply fan, air pushes outward through door seals and around filters. A gasket on the upstream face of a frame is pushed into contact by upstream pressure; a gasket on the downstream face can be pushed away. Frames should be oriented so pressure helps the seal, and clamping should still be designed for the worst case.</p>

<h2>Verifying installation</h2>
<ul>
<li>Inspect each filter for a continuous gasket contact line; a light shone from the downstream side in a dark section can reveal gaps.</li>
<li>Check that every clip or latch is engaged and that blank-offs are complete.</li>
<li>Confirm that replacement filters match the specified dimensions.</li>
<li>For high-efficiency banks, consider a particle count upstream and downstream at commissioning; a much lower measured efficiency than rated points to bypass.</li>
<li>For HEPA banks, scan testing in place is the standard approach; see <a href="<?= url('guides/hepa-filter-integrity-testing') ?>">HEPA filter integrity testing</a>.</li>
</ul>
<p class="note">Filter rating tests measure the filter alone in a sealed test duct. They say nothing about the frame. That distinction, and what MERV values represent, is discussed in <a href="<?= url('guides/merv-ratings-ashrae-52-2') ?>">MERV ratings and ASHRAE 52.2</a>; this guide is about keeping that rated performance once the filter is installed.</p>
<?php guide_end([
    ['How does filter bypass affect efficiency?', 'Air that bypasses the filter is not cleaned, so installed efficiency equals the filter efficiency times the fraction of air that actually passes through it. For high-efficiency and HEPA filters, even a fraction of a percent of bypass can let through more particles than the filter itself.'],
    ['Why does filter bypass increase as filters load?', 'Leakage through gaps is driven by the pressure difference across the bank, which rises as the filter loads. Doubling filter pressure drop increases gap leakage by roughly 40 percent, while flow through the media stays the same.'],
    ['What makes a good filter holding frame?', 'A rigid frame with a continuous, resilient gasket, positive clamping at several points, frames sealed to each other, blank-offs sealed to the casing on all sides, and dimensions matched to the specified filters. HEPA banks often use knife-edge and gel seals.'],
]);
