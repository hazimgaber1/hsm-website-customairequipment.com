<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('iso-16890-vs-merv'); ?>
<p class="lede">ISO 16890 rates filters by the share of PM1, PM2.5 and PM10 particulate mass they remove (ePM1, ePM2.5, ePM10), averaging clean and electrostatically discharged performance. ASHRAE 52.2 assigns a MERV from the minimum efficiency in three particle-count size ranges during dust loading. Because the two tests measure different things in different ways, a filter's MERV cannot be converted precisely to an ISO 16890 class or the reverse.</p>

<h2>How ISO 16890 rates a filter</h2>
<p>ISO 16890 tests efficiency across particle sizes from about 0.3 to 10 µm, similar to 52.2, but it then converts those size-by-size efficiencies into a mass-based figure. The standard applies a defined particle size distribution representing typical outdoor air and calculates what fraction of the mass of particles smaller than 1, 2.5 and 10 µm the filter would capture. These are reported as ePM1, ePM2.5 and ePM10 efficiencies.</p>
<p>Two efficiency measurements are combined:</p>
<ul>
<li>The filter tested as received, with any electrostatic charge intact.</li>
<li>The same filter after being exposed to isopropyl alcohol vapour, which removes the electrostatic charge.</li>
</ul>
<p>The reported efficiency is the average of the two. This builds expected charge loss into the headline rating instead of leaving it to an optional appendix.</p>
<p>To be classified in a group, the filter must reach at least 50% efficiency for that particle size fraction. A filter is reported in the highest group it qualifies for, with its efficiency rounded down in 5% steps, for example "ISO ePM1 70%". Filters that cannot reach 50% for ePM10 are classified as ISO Coarse, based on gravimetric arrestance of a test dust.</p>

<h2>How MERV differs</h2>
<p>ASHRAE 52.2 also measures size-by-size efficiency, but it keeps the results as particle-count efficiencies in three bands (E1, E2, E3), loads the filter with a test dust in steps, and takes the lowest value seen in each band. The MERV is assigned from a table of minimum values. The full method is explained in <a href="<?= url('guides/merv-ratings-ashrae-52-2') ?>">MERV ratings and ASHRAE 52.2</a>.</p>

<h2>Side-by-side comparison</h2>
<table>
<thead><tr><th>Feature</th><th>ASHRAE 52.2 (MERV)</th><th>ISO 16890 (ePM)</th></tr></thead>
<tbody>
<tr><td>What is reported</td><td>An integer MERV 1 to 16</td><td>Group (ePM1, ePM2.5, ePM10, Coarse) and percentage in 5% steps</td></tr>
<tr><td>Efficiency basis</td><td>Particle count by size band</td><td>Particle mass fraction, using a reference size distribution</td></tr>
<tr><td>Size bands</td><td>E1 0.3–1, E2 1–3, E3 3–10 µm</td><td>PM1, PM2.5, PM10 mass fractions</td></tr>
<tr><td>Effect of dust loading</td><td>Minimum efficiency over loading steps</td><td>Efficiency on clean filter; loading used for dust holding and arrestance</td></tr>
<tr><td>Electrostatic charge loss</td><td>Optional conditioning step (MERV-A)</td><td>Built in: average of untreated and discharged</td></tr>
<tr><td>Primary market</td><td>North America</td><td>Europe and many international markets</td></tr>
</tbody>
</table>

<h2>Why they do not map one-to-one</h2>
<ol>
<li><strong>Count versus mass.</strong> Particle mass is dominated by larger particles within a size fraction. A filter that captures many small particles by count but fewer larger ones can rank differently by mass.</li>
<li><strong>Minimum versus average.</strong> MERV takes the lowest value during loading. ISO 16890 averages charged and discharged results without loading. A mechanical media filter whose minimum occurs on the clean filter will look similar under both; a charged synthetic filter whose efficiency drops a lot when discharged will look worse under ISO 16890 than its MERV suggests.</li>
<li><strong>Band boundaries.</strong> ePM1 and E1 cover similar sizes but are weighted differently. There is no ISO equivalent of the E2 band.</li>
<li><strong>Class granularity.</strong> A MERV is one of sixteen values; ISO reports a percentage in 5% steps within each group.</li>
</ol>

<h2>Approximate correspondence</h2>
<p>Manufacturers and industry groups have published approximate comparisons, and they generally agree on a broad pattern. The table below is indicative only; it is not a conversion. Individual filters can fall well outside these ranges depending on media type.</p>
<table>
<thead><tr><th>MERV</th><th>Often comparable ISO 16890 rating</th></tr></thead>
<tbody>
<tr><td>8</td><td>ePM10 50% to 60%</td></tr>
<tr><td>11</td><td>ePM2.5 50% to 65%</td></tr>
<tr><td>13</td><td>ePM2.5 65% or more, or ePM1 50% to 65%</td></tr>
<tr><td>14</td><td>ePM1 65% to 80%</td></tr>
<tr><td>15 to 16</td><td>ePM1 80% or more</td></tr>
</tbody>
</table>
<p class="warn">Do not write a specification that says "MERV 13 or ISO ePM1 50%" as if the two were equal. A synthetic filter may meet one and not the other. Name one rating as the basis and require the test report for it; ask for the other as information if you need it.</p>

<h2>Practical guidance for North American projects</h2>
<ul>
<li>Codes and standards adopted in the US and Canada generally reference MERV. Use MERV as the compliance basis unless the governing document cites ISO 16890.</li>
<li>When filters are sourced internationally, or the owner has a global standard, request both test reports. Comparing them shows how much the media depends on charge.</li>
<li>For projects concerned with fine particles such as wildfire smoke, ePM1 is a useful additional indicator because it reflects discharged performance.</li>
<li>For filters beyond MERV 16 or ePM1 95%, neither test is the right tool; those filters are rated under HEPA and ULPA methods described in <a href="<?= url('guides/hepa-ulpa-filter-classes') ?>">HEPA and ULPA filter classes</a>.</li>
</ul>
<p>Efficiency selection is only one decision; the rest of the selection process is covered in <a href="<?= url('guides/filter-selection-checklist') ?>">the AHU filter selection checklist</a>.</p>
<?php guide_end([
    ['Is MERV 13 the same as ePM1 50%?', 'Not exactly. Many MERV 13 filters are in the range of ePM2.5 65 percent or ePM1 50 to 65 percent, but the tests measure different things. A charged synthetic filter can be MERV 13 and still rate lower under ISO 16890 because ISO includes a discharged measurement.'],
    ['What does ePM1 70% mean?', 'It means the filter removes at least 70 percent of the mass of particles smaller than 1 micrometre in the ISO 16890 reference distribution, averaged between the filter as received and after electrostatic discharge, rounded down to the nearest 5 percent.'],
    ['Why can\'t I convert MERV to ISO 16890?', 'MERV is based on minimum particle-count efficiency in three size bands during dust loading, while ISO 16890 uses mass-weighted efficiency averaged between charged and discharged states. A filter\'s relative performance on each test depends on its media, so there is no fixed conversion.'],
]);
