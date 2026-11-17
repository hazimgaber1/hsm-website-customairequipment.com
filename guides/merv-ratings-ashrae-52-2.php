<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('merv-ratings-ashrae-52-2'); ?>
<p class="lede">A MERV (Minimum Efficiency Reporting Value) is a number from 1 to 16 assigned under ASHRAE Standard 52.2, based on the lowest efficiency a filter achieves in three particle size ranges as it is progressively loaded with dust in the test. Higher MERV means higher minimum efficiency at smaller particle sizes.</p>

<h2>What the test measures</h2>
<p>ASHRAE 52.2 measures particle size removal efficiency. A filter is installed in a test duct at its rated airflow, and a laboratory aerosol (commonly potassium chloride particles) is injected upstream. Optical particle counters sample the air upstream and downstream of the filter, counting particles in twelve size channels spanning roughly 0.3 to 10 micrometres (µm). For each channel, efficiency is:</p>
<p class="formula">Efficiency (%) = (1 − downstream count ÷ upstream count) × 100</p>
<p>The twelve channels are grouped into three ranges:</p>
<ul>
<li><strong>E1:</strong> 0.3 to 1.0 µm, the range that includes much of combustion smoke and many fine respirable particles.</li>
<li><strong>E2:</strong> 1.0 to 3.0 µm.</li>
<li><strong>E3:</strong> 3.0 to 10 µm, the range of pollen, larger dust and many settled particles.</li>
</ul>

<h2>Why it is a "minimum" value</h2>
<p>A filter's efficiency changes as it loads with dust. Mechanical media usually becomes more efficient as captured particles build up on the fibres. To capture this behaviour, the test does not stop at the clean filter. The filter is loaded with a standard synthetic test dust in stages, and efficiency is measured again after each loading step until it reaches its final test resistance.</p>
<p>For each size range, the lowest efficiency measured across all the steps is taken. These are the minimum composite efficiencies, E1, E2 and E3. The MERV is then assigned by comparing those three numbers with a table in the standard: the filter earns the highest MERV whose minimums it meets in every range.</p>

<h2>Typical MERV thresholds</h2>
<p>The table below shows the minimum composite efficiencies for the higher MERV values commonly specified in commercial air handlers, as published in recent editions of the standard. Lower MERV values are defined mainly by E3 or by coarser tests, and thresholds for some of the lower values were revised between editions; check the edition referenced by your specification or code.</p>
<table>
<thead><tr><th>MERV</th><th>E1 (0.3–1.0 µm)</th><th>E2 (1.0–3.0 µm)</th><th>E3 (3.0–10 µm)</th></tr></thead>
<tbody>
<tr><td>11</td><td>≥ 20%</td><td>≥ 65%</td><td>≥ 85%</td></tr>
<tr><td>12</td><td>≥ 35%</td><td>≥ 80%</td><td>≥ 90%</td></tr>
<tr><td>13</td><td>≥ 50%</td><td>≥ 85%</td><td>≥ 90%</td></tr>
<tr><td>14</td><td>≥ 75%</td><td>≥ 90%</td><td>≥ 95%</td></tr>
<tr><td>15</td><td>≥ 85%</td><td>≥ 90%</td><td>≥ 95%</td></tr>
<tr><td>16</td><td>≥ 95%</td><td>≥ 95%</td><td>≥ 95%</td></tr>
</tbody>
</table>
<p>MERV 13 is significant because it is the first level that requires at least 50% capture in the E1 range. It has been a common minimum in recent ventilation and energy standards, guidance for wildfire smoke and infection risk, and many owner standards.</p>

<h2>The conditioning step and MERV-A</h2>
<p>Many synthetic filter media rely on an electrostatic charge to boost efficiency for small particles. In service, fine particles and other airborne material can neutralize that charge over time, and efficiency in the E1 range can drop below the clean, charged value before loading increases it again. The synthetic loading dust used in the core test does not fully reproduce this effect.</p>
<p>ASHRAE 52.2 includes an informative appendix, Appendix J, with a conditioning step that exposes the filter to a fine aerosol intended to reduce the effect of the charge, after which efficiency is measured again. A rating based on this procedure is reported as MERV-A. Where it is reported, MERV-A indicates the efficiency a user can expect after charge loss and is often lower than the standard MERV for charged media. Specifiers who want to account for this should request MERV-A explicitly. The broader behaviour of charged media is compared in <a href="<?= url('guides/synthetic-vs-glass-fiber-filter-media') ?>">synthetic vs glass fiber media</a>.</p>

<h2>What MERV does not tell you</h2>
<ul>
<li><strong>Installed efficiency.</strong> Air leaking around a poorly sealed filter bypasses the media entirely. A MERV 14 filter in a leaky rack may perform well below its rating; see <a href="<?= url('guides/filter-bypass-leakage-frames') ?>">filter bypass leakage</a>.</li>
<li><strong>Pressure drop.</strong> MERV says nothing about resistance. Two MERV 13 filters can have very different initial and final pressure drops and dust holding.</li>
<li><strong>Efficiency at a different velocity.</strong> The rating applies at the test airflow. At higher face velocity, efficiency and pressure drop can change.</li>
<li><strong>Efficiency below 0.3 µm or for gases.</strong> MERV is a particle test for a specific size range; it does not rate HEPA-level performance or gas-phase removal.</li>
<li><strong>Life.</strong> The test's final resistance is not a service recommendation.</li>
</ul>

<h2>Reading a MERV test report</h2>
<p>A full 52.2 test report contains more information than the MERV label. Useful items include:</p>
<ul>
<li>The airflow and face velocity at which the filter was tested.</li>
<li>Initial resistance and the final resistance at which loading stopped.</li>
<li>Efficiency curves for each of the twelve channels at each loading step, showing whether the minimum occurred on the clean filter or later.</li>
<li>Whether the Appendix J conditioning step was performed and the resulting MERV-A.</li>
<li>The filter's exact model, size and construction tested.</li>
</ul>
<p>Requesting the report rather than relying on a catalogue value is reasonable on projects where filtration performance is critical. The international rating method that is increasingly seen alongside MERV is compared in <a href="<?= url('guides/iso-16890-vs-merv') ?>">ISO 16890 vs MERV</a>.</p>
<?php guide_end([
    ['What does MERV stand for?', 'MERV stands for Minimum Efficiency Reporting Value. It is assigned under ASHRAE Standard 52.2 based on the lowest efficiency a filter achieves in three particle size ranges as it is loaded with dust during the test.'],
    ['What does a MERV 13 filter capture?', 'A MERV 13 filter must capture at least 50 percent of particles between 0.3 and 1.0 micrometres, at least 85 percent between 1 and 3 micrometres and at least 90 percent between 3 and 10 micrometres, throughout the test loading sequence.'],
    ['What is MERV-A?', 'MERV-A is a rating based on the optional conditioning procedure in Appendix J of ASHRAE 52.2, which reduces the effect of electrostatic charge on the media before efficiency is measured. It indicates efficiency after charge loss and can be lower than the standard MERV for charged synthetic media.'],
]);
