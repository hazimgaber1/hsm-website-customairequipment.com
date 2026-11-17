<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('hospital-energy-recovery-options'); ?>
<p class="lede">Hospitals exhaust large volumes of conditioned air, so energy recovery pays back quickly, but ASHRAE 170 restricts devices that can leak exhaust into supply. Runaround coil loops and heat pipes are acceptable for almost any exhaust stream, sealed plate exchangers suit many applications, and wheels are generally limited to exhaust from spaces where cross-leakage is acceptable.</p>

<h2>What Standard 170 restricts</h2>
<p>ASHRAE 170 addresses energy recovery to prevent cross-contamination. In general terms, it does not allow energy recovery devices with potential for leakage from exhaust to supply to be used on exhaust from spaces where the air must be exhausted directly outdoors (such as AIIRs, soiled rooms, decontamination areas and certain labs), unless the device and arrangement prevent cross-contamination. The standard also places energy recovery upstream of the final filter bank on the supply side and requires that the recovery system not compromise pressure relationships. Read the provisions in the adopted edition; wording has evolved.</p>
<p>Exhaust air classifications from ASHRAE 62.1 are a separate system used outside healthcare; see <a href="<?= url('guides/exhaust-air-class-recovery-restrictions') ?>">exhaust air class recovery restrictions</a> for that framework.</p>

<h2>Comparison of options</h2>
<table>
<thead><tr><th>Device</th><th>Cross-leakage risk</th><th>Typical sensible effectiveness</th><th>Latent recovery</th><th>Layout flexibility</th><th>Hospital suitability</th></tr></thead>
<tbody>
<tr><td>Runaround coil loop</td><td>None; airstreams fully separated by a fluid loop</td><td>Moderate, often 45 to 60%</td><td>No</td><td>High; supply and exhaust can be far apart</td><td>Suitable for all exhaust types, including AIIR and lab exhaust</td></tr>
<tr><td>Heat pipe</td><td>Very low; sealed tubes and a partition between streams</td><td>Moderate, often 45 to 60%</td><td>No</td><td>Requires adjacent supply and exhaust streams</td><td>Suitable for most applications, including contaminated exhaust with good partition sealing</td></tr>
<tr><td>Fixed plate exchanger</td><td>Low; depends on plate sealing and pressure arrangement</td><td>Moderate to high, often 55 to 80% for counterflow</td><td>Only with enthalpy membrane plates</td><td>Requires adjacent streams; large footprint</td><td>Suitable for general exhaust; for restricted exhaust only if the AHJ accepts its leakage</td></tr>
<tr><td>Enthalpy wheel</td><td>Present; carryover and seal leakage</td><td>High, often 70 to 80%</td><td>Yes</td><td>Requires adjacent streams; compact</td><td>Limited to exhaust from spaces where cross-leakage is acceptable</td></tr>
<tr><td>Sensible wheel</td><td>Present, similar to enthalpy wheel</td><td>High</td><td>No</td><td>As above</td><td>Same restrictions as enthalpy wheel</td></tr>
</tbody>
</table>
<p>Effectiveness values are typical ranges for well-designed equipment at balanced flows. Use certified ratings for the specific selection; the calculation is covered in <a href="<?= url('guides/recovery-effectiveness-calculation') ?>">recovery effectiveness calculation</a>.</p>

<h2>Runaround loops in more detail</h2>
<p>A runaround loop uses a coil in the exhaust airstream and a coil in the supply, connected by a pumped glycol loop. Because the airstreams never share a casing, it is the default choice for isolation room exhaust, decontamination exhaust and any stream with infectious or chemical contaminants. It also suits retrofits where the outdoor air intake and the exhaust are on opposite sides of a building. Drawbacks are lower effectiveness, pump energy, glycol maintenance and the need for frost control on the exhaust coil in cold climates. In hospitals with continuous operation, the energy savings over 8,760 hours a year usually justify the pump energy.</p>
<p class="note">Runaround loops can be extended with multiple exhaust coils from different exhaust systems feeding one or more supply coils, which suits hospitals with many separate exhaust risers.</p>

<h2>Heat pipes</h2>
<p>Heat pipes place sealed refrigerant-filled tubes across a partition between supply and exhaust. With a well-sealed partition, leakage is minimal and there are no moving parts. They need the streams side by side, which works when the AHU and exhaust share a casing. Heat pipes are also used as wraparound devices around cooling coils for dehumidification, which is useful in surgical AHUs with low dew point targets.</p>

<h2>Plate exchangers</h2>
<p>Plates offer higher sensible effectiveness than loops or heat pipes. Leakage is low but not zero, and depends on plate sealing and on keeping the supply side at higher pressure than the exhaust side, so any leakage flows from supply to exhaust. Frost formation on the exhaust side in cold climates requires defrost strategies that may temporarily reduce outdoor air or bypass the plate. Whether a plate is acceptable on a restricted exhaust stream is a judgment for the engineer, the owner's infection prevention team and the AHJ.</p>

<h2>Wheels</h2>
<p>Wheels recover both sensible and latent energy at high effectiveness, which matters in hospitals with humidification loads in winter. But they carry some exhaust air into the supply through seal leakage and carryover, even with purge sections. Under Standard 170, wheels are generally confined to exhaust from general spaces where cross-leakage does not create a contamination risk, such as administrative areas, and are not used on exhaust that must go directly outdoors. Leakage metrics are explained in <a href="<?= url('guides/eatr-oacf-wheel-leakage') ?>">EATR and OACF wheel leakage</a>.</p>

<h2>Choosing for a hospital AHU</h2>
<ol>
<li>Classify each exhaust stream: general, restricted (exhausted directly outdoors), or hazardous.</li>
<li>For restricted and hazardous streams, start with runaround loops or heat pipes.</li>
<li>For general streams adjacent to the supply, consider plates or wheels where leakage is acceptable to the owner and AHJ.</li>
<li>Check frost control at design winter temperatures, especially in Canada.</li>
<li>Account for pressure drop in fan power on both airstreams.</li>
<li>Plan access for cleaning recovery coils and plates without shutting down critical spaces.</li>
<li>Confirm the energy code's heat recovery requirement and how each option is credited.</li>
</ol>
<?php guide_end([
    ['Can hospitals use energy recovery wheels?', 'Generally only on exhaust from spaces where cross-leakage is acceptable, such as general administrative areas. ASHRAE 170 restricts devices with potential cross-leakage on exhaust from spaces whose air must be exhausted directly outdoors.'],
    ['What energy recovery is best for isolation room exhaust?', 'Runaround coil loops are the usual choice because the supply and exhaust airstreams are completely separated by a pumped fluid loop, eliminating cross-leakage.'],
    ['Are plate heat exchangers acceptable in hospitals?', 'They are commonly used for general exhaust. Their leakage is low but not zero, so use on restricted exhaust streams depends on the engineer, the owner\'s infection prevention team and the AHJ.'],
    ['Do heat pipes allow cross-contamination?', 'Heat pipes have very low leakage when the partition between airstreams is well sealed, because the working fluid is sealed inside the tubes. They need supply and exhaust streams side by side.'],
]);
