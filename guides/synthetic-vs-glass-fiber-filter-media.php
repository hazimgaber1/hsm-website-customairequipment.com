<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('synthetic-vs-glass-fiber-filter-media'); ?>
<p class="lede">Glass fibre (microglass) media relies on very fine fibres to capture particles mechanically, so its efficiency stays steady or rises as it loads. Synthetic media, usually polypropylene or polyester, often relies on an electrostatic charge to reach its rated efficiency with coarser fibres and lower pressure drop, and that charge can fade in service, lowering efficiency for fine particles before dust loading brings it back up. Synthetics generally tolerate moisture and handling better.</p>

<h2>How each media captures particles</h2>
<p>All fibrous filters capture particles by three mechanical mechanisms: impaction (large particles that cannot follow the air around a fibre), interception (particles that pass close enough to touch a fibre) and diffusion (very small particles that wander randomly and hit fibres). Finer fibres improve all three, especially for submicron particles.</p>
<p><strong>Glass fibre media</strong> uses very fine microglass fibres, often with diameters around one micrometre or less, formed into a wet-laid paper or a lofted mat. High efficiency comes from fibre fineness and packing, so performance is essentially mechanical.</p>
<p><strong>Synthetic media</strong> uses polymer fibres that are generally coarser. To achieve high efficiency at low resistance, many synthetic media are electrostatically charged during manufacture (electret media). The charge attracts and holds small particles that would otherwise pass between fibres. Some synthetic media is uncharged and relies on fine fibres or nanofibre layers instead.</p>

<h2>Efficiency stability and charge loss</h2>
<p>A charged synthetic filter can test at a high MERV when new, but in service, fine particles coating the fibres and some airborne compounds gradually mask or neutralize the charge. Efficiency in the 0.3 to 1.0 µm range can fall noticeably before the build-up of a dust cake raises it again. The extent varies with the product and the environment; combustion particles and oily aerosols are often reported as particularly effective at degrading charge.</p>
<p>Glass fibre media does not depend on charge, so its efficiency profile over life is more predictable: lowest when clean, rising as it loads.</p>
<p>The rating systems treat this differently. ASHRAE 52.2 provides an optional conditioning step that yields a MERV-A value reflecting discharged performance, explained in <a href="<?= url('guides/merv-ratings-ashrae-52-2') ?>">MERV ratings and ASHRAE 52.2</a>. ISO 16890 builds a discharge step into the headline ePM rating. For charged synthetics, asking for MERV-A or ISO 16890 data shows how much of the rated efficiency is charge-dependent.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Characteristic</th><th>Glass fibre</th><th>Synthetic (charged)</th><th>Synthetic (uncharged or nanofibre)</th></tr></thead>
<tbody>
<tr><td>Efficiency mechanism</td><td>Mechanical</td><td>Mechanical plus electrostatic</td><td>Mechanical</td></tr>
<tr><td>Efficiency over life</td><td>Stable, rising with load</td><td>May dip as charge fades, then rise</td><td>Stable, rising with load</td></tr>
<tr><td>Initial pressure drop at equal rated MERV</td><td>Moderate</td><td>Often lowest</td><td>Varies</td></tr>
<tr><td>Moisture and humidity tolerance</td><td>Lower; some binders weaken when wet</td><td>Good; polymers do not absorb water</td><td>Good</td></tr>
<tr><td>Mechanical robustness</td><td>Brittle; can crack or shed if mishandled</td><td>Flexible, tear resistant</td><td>Flexible</td></tr>
<tr><td>Fibre shedding</td><td>Possible if damaged</td><td>Low</td><td>Low</td></tr>
<tr><td>Disposal</td><td>Non-combustible media</td><td>Combustible; can be incinerated</td><td>Combustible</td></tr>
<tr><td>Typical applications</td><td>HEPA, healthcare, labs, critical final filters</td><td>Commercial bag and pleated filters</td><td>Higher-performance commercial filters</td></tr>
</tbody>
</table>

<h2>Humidity and moisture</h2>
<p>Synthetic polymers do not absorb water, and synthetic media keeps its strength when damp. That makes synthetics a good fit for outdoor air prefilters in wet climates, filters downstream of cooling coils, and humid process environments. Some glass fibre media uses binders that soften in high humidity or when wetted, and wet glass media can sag or lose strength. Microglass designed for humid duty is available, and HEPA-grade microglass with water-repellent binders is standard, but check the specification.</p>
<p>Electrostatic charge itself is largely unaffected by normal humidity, though prolonged condensation can degrade performance in some products.</p>

<h2>Pressure drop and energy</h2>
<p>Because charge adds capture without finer fibres, charged synthetic media often achieves a given rated efficiency at lower initial pressure drop than glass fibre. That translates directly into fan energy savings. The catch is that the efficiency the occupants actually receive may be lower than the rating after charge loss. For a fair comparison, compare filters at equal discharged efficiency, then look at pressure drop. Energy cost methods are in <a href="<?= url('guides/filter-life-cycle-cost') ?>">filter life-cycle cost</a>.</p>

<h2>Applications where media type matters most</h2>
<ul>
<li><strong>HEPA and ULPA:</strong> nearly always microglass, because predictable mechanical efficiency is required.</li>
<li><strong>Healthcare final filters:</strong> many owners specify glass fibre or require discharged efficiency data for synthetics.</li>
<li><strong>Wildfire smoke and infection risk resilience:</strong> fine particle efficiency matters; ask for MERV-A or ISO 16890 ePM1 data.</li>
<li><strong>Outdoor air prefilters in wet climates:</strong> synthetic media handles moisture well.</li>
<li><strong>Washdown or humid process areas:</strong> synthetic media and plastic frames resist moisture and corrosion.</li>
</ul>
<h2>Questions to put to the filter supplier</h2>
<ul>
<li>Is the media charged, and what is the filter's MERV-A or ISO 16890 ePM1 rating alongside its MERV?</li>
<li>What is the initial and recommended final pressure drop at the project's actual face velocity?</li>
<li>Is the media and its binder rated for the humidity range and occasional wetting expected at this location?</li>
<li>What frame and sealant materials are used, and are they compatible with the holding frames already installed?</li>
<li>Is independent test data available, rather than only the manufacturer's own laboratory results?</li>
</ul>
<p>The answers usually narrow the field quickly. A charged synthetic with a small gap between MERV and MERV-A behaves much like a mechanical media; one with a large gap should be judged on its discharged figure.</p>
<p class="note">Media choice is independent of format: bags, rigid filters and V-banks are each made in both media types. The format choice is a separate comparison in <a href="<?= url('guides/bag-vs-rigid-box-vs-minipleat-filters') ?>">bag vs rigid box vs mini-pleat filters</a>.</p>
<?php guide_end([
    ['Is synthetic or fiberglass filter media better?', 'Neither is better in every case. Glass fibre media gives stable mechanical efficiency and is standard for HEPA and many critical final filters. Synthetic media often has lower pressure drop and handles moisture and handling well, but charged synthetics can lose efficiency for fine particles in service.'],
    ['Do electrostatically charged filters lose efficiency?', 'Many do. In service, fine particles and some airborne compounds mask or neutralize the charge, lowering efficiency for small particles until dust loading raises it again. MERV-A ratings or ISO 16890 data show how much rated efficiency depends on charge.'],
    ['Which filter media is best for humid conditions?', 'Synthetic media generally performs better when damp because polymers do not absorb water and keep their strength. Some glass fibre media uses binders that weaken when wet, though moisture-resistant microglass is available for humid duty.'],
]);
