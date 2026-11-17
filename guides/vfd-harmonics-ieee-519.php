<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('vfd-harmonics-ieee-519'); ?>
<p class="lede">A standard VFD draws current from the supply in short pulses rather than a smooth sine wave, and those pulses contain harmonic currents at multiples of the line frequency. IEEE 519 sets limits on harmonic current and voltage distortion at the point where a facility connects to the utility; meeting them on a building with many drives usually takes reactors, multi-pulse rectifiers, passive filters, active filters or active front end drives.</p>

<h2>Where VFD harmonics come from</h2>
<p>Most HVAC drives use a six-pulse diode rectifier to convert three-phase AC into DC on a capacitor bank, then an inverter to create variable frequency output. The diodes conduct only when the line voltage exceeds the DC bus voltage, which happens near the peaks of each phase. Current therefore flows in two short humps per half cycle instead of a sine wave.</p>
<p>A distorted periodic waveform can be broken down into the fundamental (60 Hz) plus harmonics. For a six-pulse rectifier, the characteristic harmonics are the 5th, 7th, 11th, 13th, 17th, 19th and so on (orders 6k ± 1). The 5th and 7th, at 300 Hz and 420 Hz, are usually the largest. Without any added impedance, a six-pulse drive can draw current with total harmonic distortion well above what is acceptable on a large installation.</p>

<h2>Why harmonics matter</h2>
<ul>
<li><strong>Voltage distortion:</strong> harmonic currents flowing through the impedance of transformers and conductors distort the voltage that every other load sees, which can upset sensitive electronics, clocks and controls.</li>
<li><strong>Heating:</strong> transformers, conductors and motors fed from the distorted supply run hotter. Transformers may need a K-factor rating or derating.</li>
<li><strong>Resonance:</strong> power factor correction capacitors can form a resonant circuit with system inductance at a harmonic frequency, amplifying distortion and failing capacitors.</li>
<li><strong>Generator compatibility:</strong> standby generators have higher impedance than a utility transformer, so the same drive load produces more voltage distortion on generator power. This matters for hospitals and data centres where fans must run on emergency power.</li>
<li><strong>Nuisance problems:</strong> metering errors, neutral heating on mixed loads and interference with other drives.</li>
</ul>

<h2>What IEEE 519 requires</h2>
<p>IEEE 519, <em>Recommended Practice and Requirements for Harmonic Control in Electric Power Systems</em>, sets limits at the <strong>point of common coupling (PCC)</strong>, normally the point where the facility connects to the utility. It does not set limits on individual drives. That distinction is often misunderstood: specifying "IEEE 519 compliance" for each fan VFD is not meaningful unless the specification also defines the PCC and the system data.</p>
<p>The standard defines two kinds of limits:</p>
<ul>
<li><strong>Voltage distortion limits,</strong> which depend on system voltage. In the 2014 edition, the total harmonic voltage distortion limit at 1 kV and below is 8%, with tighter limits at higher voltages.</li>
<li><strong>Current distortion limits,</strong> expressed as total demand distortion (TDD) and individual harmonic limits. These depend on the ratio of available short-circuit current to maximum demand load current at the PCC (ISC/IL). Facilities with a "stiff" supply relative to their load are allowed more distortion; facilities whose load is large relative to the supply must meet stricter limits.</li>
</ul>
<p class="note">TDD is measured relative to the facility's maximum demand current, not the instantaneous current. A drive at light load can have high current THD but contribute little TDD.</p>
<p>Utilities in the US and Canada may adopt IEEE 519 limits directly or set their own. Check the edition and requirements of the serving utility and any owner standard.</p>

<h2>Mitigation methods</h2>
<table>
<thead><tr><th>Method</th><th>How it works</th><th>Relative effect</th><th>Trade-offs</th></tr></thead>
<tbody>
<tr><td>AC line reactor or DC link choke</td><td>Adds inductance, smoothing the current pulses</td><td>Moderate reduction; the baseline for most drives</td><td>Low cost; small voltage drop; often built into the drive</td></tr>
<tr><td>Passive harmonic filter</td><td>Tuned inductor-capacitor circuit traps the dominant harmonics</td><td>Large reduction at full load</td><td>Can be leading power factor at light load; size and heat; must be coordinated with generators</td></tr>
<tr><td>12- or 18-pulse rectifier</td><td>Phase-shifting transformer and multiple rectifiers cancel lower-order harmonics</td><td>Large reduction, best with balanced supply</td><td>Large and heavy; mainly for bigger drives</td></tr>
<tr><td>Active harmonic filter</td><td>Power electronics inject equal and opposite harmonic currents</td><td>Very low distortion; can serve a group of drives</td><td>Higher cost; one unit can treat many loads at a bus</td></tr>
<tr><td>Active front end drive</td><td>Rectifier replaced with controlled switching that draws near-sinusoidal current</td><td>Very low distortion at the drive</td><td>Higher cost and losses than six-pulse; some high-frequency emissions need filtering</td></tr>
</tbody>
</table>

<h2>Choosing a strategy for an AHU project</h2>
<ol>
<li><strong>Get the system data.</strong> Utility transformer size and impedance, available fault current, and the facility's maximum demand. Without these, compliance cannot be evaluated.</li>
<li><strong>Run a harmonic study</strong> if the drive load is a large share of the facility load or if generators will carry the drives.</li>
<li><strong>Treat at the right level.</strong> Many small fan drives are often more economical to treat with reactors at each drive plus an active filter at the distribution bus than with individual filters.</li>
<li><strong>Include EC motors.</strong> EC motors also contain rectifiers. Large arrays of EC fans add harmonic current just like VFDs, and some include power factor correction circuits that help.</li>
<li><strong>Coordinate with Division 26</strong> so the requirement sits in one place and the PCC is defined.</li>
</ol>
<p>Voltage spikes at the motor end of long cables are a separate phenomenon, covered in <a href="<?= url('guides/vfd-cable-length-reflected-wave') ?>">troubleshooting long VFD cable runs and reflected wave</a>. Drive sizing is covered in <a href="<?= url('guides/vfd-sizing-for-fan-motors') ?>">how to size a VFD for fan motors</a>, and how to write harmonic requirements into a specification is in <a href="<?= url('guides/motor-and-drive-specification') ?>">specifying motors and drives</a>.</p>
<?php guide_end([
    ['Why do VFDs create harmonics?', 'A standard six-pulse VFD rectifier draws current only near the peaks of the supply voltage, in short pulses. Those pulses contain harmonic currents, mainly at the 5th, 7th, 11th and 13th multiples of line frequency.'],
    ['Does IEEE 519 apply to each VFD?', 'No. IEEE 519 sets limits at the point of common coupling between the facility and the utility. Individual drive limits only make sense when they are derived from a study of the whole system.'],
    ['What is the cheapest way to reduce VFD harmonics?', 'A line reactor or DC link choke on each drive is the least expensive and most common first step. It reduces harmonics significantly but may not be enough for large drive loads.'],
    ['Do EC motors produce harmonics?', 'Yes. EC motors contain rectifiers and draw non-sinusoidal current. Large fan arrays of EC motors need the same harmonic evaluation as VFDs.'],
]);
