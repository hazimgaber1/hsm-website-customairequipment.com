<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('hepa-ulpa-filter-classes'); ?>
<p class="lede">A HEPA filter in North American usage removes at least 99.97% of particles at 0.3 µm, the classic definition used in IEST recommended practice and US government standards. European EN 1822 and international ISO 29463 classify high-efficiency filters instead by efficiency at the most penetrating particle size (MPPS), with classes such as H13 (99.95%) and H14 (99.995%), and ULPA classes U15 to U17 above that.</p>

<h2>Why HEPA needs its own rating system</h2>
<p>General ventilation filters are rated under ASHRAE 52.2 or ISO 16890 by efficiency across 0.3 to 10 µm. Above about MERV 16, those methods can no longer distinguish one filter from another; every filter captures nearly all particles in the measured range. High-efficiency filters are therefore rated by penetration, the small fraction of particles that gets through, at the particle size that is hardest to capture.</p>
<p>Fibrous filters capture large particles by impaction and interception, and very small particles by diffusion. Between those regimes is a size, typically around 0.1 to 0.25 µm for HEPA media at normal velocities, where capture is weakest. That is the most penetrating particle size. The traditional 0.3 µm test point was chosen because it was close to the MPPS for the media of the time and could be generated reliably with thermally generated aerosols.</p>

<h2>North American practice: IEST-RP-CC001</h2>
<p>The Institute of Environmental Sciences and Technology recommended practice IEST-RP-CC001 defines HEPA and ULPA filters and divides them into types based on efficiency, test particle size and whether each filter is scan tested for leaks.</p>
<ul>
<li><strong>HEPA:</strong> minimum efficiency of 99.97% at 0.3 µm, with higher-efficiency types requiring 99.99% or 99.999%. Some types are tested by photometer with a polydisperse aerosol, others by particle counter at specified sizes.</li>
<li><strong>ULPA:</strong> minimum efficiency of 99.999% at a particle size in the 0.1 to 0.2 µm range, tested with particle counters.</li>
<li><strong>Scan testing:</strong> certain types require each filter to be scanned across its face for local leaks at the factory, not just tested for overall efficiency.</li>
</ul>
<p>Specifications in the US and Canada commonly call for a specific IEST type, so it is worth checking the current edition of the practice for the type letters and their exact requirements.</p>

<h2>EN 1822 and ISO 29463 classes</h2>
<p>EN 1822 (and the closely aligned international standard ISO 29463) rates filters at MPPS. Each filter is tested for overall (integral) efficiency, and HEPA and ULPA classes also require a scan test for local leaks.</p>
<table>
<thead><tr><th>EN 1822 class</th><th>Group</th><th>Minimum integral efficiency at MPPS</th></tr></thead>
<tbody>
<tr><td>E10</td><td>EPA (efficient particulate air)</td><td>85%</td></tr>
<tr><td>E11</td><td>EPA</td><td>95%</td></tr>
<tr><td>E12</td><td>EPA</td><td>99.5%</td></tr>
<tr><td>H13</td><td>HEPA</td><td>99.95%</td></tr>
<tr><td>H14</td><td>HEPA</td><td>99.995%</td></tr>
<tr><td>U15</td><td>ULPA</td><td>99.9995%</td></tr>
<tr><td>U16</td><td>ULPA</td><td>99.99995%</td></tr>
<tr><td>U17</td><td>ULPA</td><td>99.999995%</td></tr>
</tbody>
</table>
<p>HEPA and ULPA classes also carry a local efficiency requirement, a lower limit on efficiency at any single point of the filter face, which the scan test verifies.</p>

<h2>Comparing the two systems</h2>
<p>An IEST HEPA filter at 99.97% at 0.3 µm and an EN 1822 H13 filter at 99.95% at MPPS are similar in practice, though not identical, because MPPS is a harder test point than 0.3 µm. An H14 filter is roughly comparable to the higher-efficiency IEST HEPA types. Treat these as approximate equivalences and specify one system as the basis of compliance.</p>
<p class="note">ISO 29463 is the international standard derived from EN 1822, and most current European filter literature quotes both. US and Canadian healthcare, pharmaceutical and laboratory specifications may reference IEST, EN 1822/ISO 29463, or both. Match the specification to the documents the project's regulators and owner reference.</p>

<h2>What "true HEPA" and "HEPA-type" mean</h2>
<p>Marketing terms such as "HEPA-type", "HEPA-like" or "99% HEPA" are not defined classifications. A filter is HEPA only if it is tested to one of the recognized methods and meets the efficiency of a HEPA class. In AHU specifications, always cite the method and class or type, not just the word HEPA.</p>

<h2>HEPA in air handling units</h2>
<p>HEPA filters are used in central AHUs for operating rooms and protective environments in healthcare, pharmaceutical manufacturing, some laboratories and special processes. Placing HEPA filters in an AHU raises several design questions:</p>
<ul>
<li><strong>Pressure drop.</strong> Clean HEPA filters typically start around 1 in. w.c. (250 Pa) at rated airflow, with final resistances often double or more. The fan must handle the full range; see <a href="<?= url('guides/filter-pressure-drop-initial-final') ?>">filter pressure drop design</a>.</li>
<li><strong>Prefiltration.</strong> Upstream MERV 8 and MERV 13 to 15 stages protect HEPA filters from loading quickly.</li>
<li><strong>Sealing.</strong> At 99.97% efficiency, even tiny bypass dominates penetration. HEPA housings use gel seals or knife-edge gasket frames and should be designed so the filter seal can be tested in place.</li>
<li><strong>Location.</strong> HEPA filters in the AHU protect the ductwork downstream only if the duct is clean and sealed; terminal HEPA filters at the room are often used for the final stage in critical spaces.</li>
<li><strong>Testing.</strong> Field leak and integrity testing of installed HEPA filters is a separate discipline, covered in <a href="<?= url('guides/hepa-filter-integrity-testing') ?>">HEPA filter integrity testing</a>.</li>
</ul>
<p>Containment applications that require bag-in/bag-out changing are handled in the laboratories category rather than here.</p>
<?php guide_end([
    ['What efficiency does a HEPA filter have?', 'In North American practice a HEPA filter removes at least 99.97 percent of particles at 0.3 micrometres. Under EN 1822 and ISO 29463, HEPA classes H13 and H14 require at least 99.95 and 99.995 percent at the most penetrating particle size.'],
    ['What is the difference between HEPA and ULPA?', 'ULPA filters have higher efficiency than HEPA, at least 99.999 percent at 0.1 to 0.2 micrometres in IEST practice, or classes U15 to U17 under EN 1822. They are used mainly in semiconductor and some pharmaceutical cleanrooms.'],
    ['Is H13 the same as a 99.97 percent HEPA filter?', 'They are similar but not identical. H13 is rated at the most penetrating particle size, which is a harder test than 0.3 micrometres, so an H13 filter at 99.95 percent and an IEST HEPA filter at 99.97 percent perform comparably. Specify one system as the basis for compliance.'],
]);
