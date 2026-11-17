<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('uv-c-vs-bipolar-ionization-vs-pco'); ?>
<p class="lede">Germicidal UV-C has the deepest scientific record of the three for inactivating microorganisms, though in-duct air disinfection is limited by how briefly air is exposed. Bipolar ionization and photocatalytic oxidation (PCO) are marketed for both particles and gases, but independent evidence of their performance in real buildings is thinner, and both can generate byproducts. Ask for independent test data at realistic conditions and for byproduct testing before relying on any of them.</p>

<h2>How each technology works</h2>
<h3>UV-C germicidal irradiation</h3>
<p>Lamps or LEDs emit ultraviolet light in the 254 to 280 nm range, which damages the DNA and RNA of microorganisms so they cannot reproduce. Applied inside AHUs, UV-C is used either to keep coil and drain pan surfaces clean or, with much higher lamp output, to inactivate organisms in the moving airstream. Upper-room UV-C fixtures in occupied spaces are another established application. UV-C does nothing to particles or gases other than microorganisms.</p>
<h3>Bipolar ionization</h3>
<p>Devices apply high voltage to electrodes to generate positive and negative ions that enter the airstream. Manufacturers state that ions attach to particles, causing them to agglomerate into larger particles that filters capture more easily or that settle out, and that ions react with microorganisms and some gases. Products vary widely in design and ion output.</p>
<h3>Photocatalytic oxidation (PCO)</h3>
<p>UV light shines on a catalyst surface, commonly titanium dioxide. The illuminated catalyst produces reactive species that oxidize organic molecules adsorbed on its surface, ideally to carbon dioxide and water. PCO is aimed mainly at volatile organic compounds and odours, with some claims for microorganisms that contact the surface.</p>

<h2>Comparison</h2>
<table>
<thead><tr><th>Factor</th><th>UV-C</th><th>Bipolar ionization</th><th>PCO</th></tr></thead>
<tbody>
<tr><td>Primary target</td><td>Microorganisms on surfaces or in air</td><td>Particles, microorganisms, some gases (as claimed)</td><td>VOCs and odours; some microorganisms</td></tr>
<tr><td>Strength of independent evidence</td><td>Strong for surfaces and upper-room; air disinfection depends on dose achieved</td><td>Limited and mixed; many studies are manufacturer-funded or in small chambers</td><td>Established in laboratories; field performance at HVAC velocities often modest</td></tr>
<tr><td>Possible byproducts</td><td>Ozone only if lamps emit 185 nm; material degradation</td><td>Ozone from some designs; secondary products from reactions with VOCs</td><td>Partially oxidized products such as aldehydes if oxidation is incomplete; ozone from some lamps</td></tr>
<tr><td>Effect on particles</td><td>None</td><td>Claimed agglomeration; real-world benefit uncertain</td><td>None</td></tr>
<tr><td>Maintenance</td><td>Lamp replacement, cleaning, mercury disposal</td><td>Electrode cleaning or replacement</td><td>Catalyst cleaning or replacement; lamp replacement; catalyst can be fouled</td></tr>
<tr><td>Safety issues</td><td>UV exposure of technicians</td><td>Electrical; ozone</td><td>UV exposure; byproducts</td></tr>
</tbody>
</table>

<h2>Byproducts and ozone</h2>
<p>Ozone is a respiratory irritant and also reacts with indoor chemicals to form secondary pollutants, including formaldehyde and ultrafine particles. Any device that produces ozone in a supply airstream adds it to the air delivered to occupants.</p>
<ul>
<li><strong>UV-C lamps</strong> produce ozone only if they emit at 185 nm. Ozone-free lamps use glass that blocks that wavelength; specify them.</li>
<li><strong>Ionizers</strong> vary. Some designs produce measurable ozone; others claim very low output. Independent testing to a recognized ozone emission method is the way to tell.</li>
<li><strong>PCO</strong> can produce ozone if its UV source emits 185 nm, and can generate aldehydes and other intermediate products if VOCs are only partly oxidized, especially when residence time on the catalyst is short.</li>
</ul>
<p>UL 867 covers electrostatic air cleaners and includes an ozone emission limit. UL 2998 provides a validation for zero ozone emissions, defined at a very low concentration threshold. Some jurisdictions and recent editions of ventilation standards restrict ozone-generating air cleaners in HVAC systems; check the edition adopted locally and the owner's standards.</p>

<h2>What testing to ask for</h2>
<ul>
<li><strong>Independent third-party testing</strong> rather than manufacturer-only data.</li>
<li><strong>Test conditions relevant to the installation</strong>: airflow, velocity, temperature, humidity and residence time similar to an AHU, not a sealed chamber with hours of exposure.</li>
<li><strong>Single-pass or clean air delivery results</strong> that can be converted into equivalent clean airflow, the form used by ASHRAE 241; see <a href="<?= url('guides/ashrae-241-infection-risk-control') ?>">ASHRAE 241 equivalent clean airflow</a>.</li>
<li><strong>Byproduct testing</strong>: ozone, formaldehyde, other aldehydes, total VOCs and ultrafine particles measured upstream and downstream.</li>
<li><strong>Natural decay correction</strong>: chamber tests must subtract the reduction that occurs without the device.</li>
<li><strong>Durability data</strong> showing performance after months of operation, not only when new.</li>
</ul>
<p class="note">ASHRAE has published position statements on filtration and air cleaning that note the limited evidence for some newer technologies and emphasize proven approaches such as mechanical filtration and ventilation. Read the current versions when evaluating a product.</p>

<h2>How these fit with mechanical filtration</h2>
<p>None of these technologies replace filters. Mechanical filtration at MERV 13 or higher removes particles of all kinds, including those carrying microorganisms, with predictable, independently rated performance. Gas-phase contaminants are addressed by sorbent media, covered in <a href="<?= url('guides/gas-phase-carbon-filtration') ?>">gas-phase filtration</a>. Supplemental technologies may have a role where the owner has a specific goal and the device has credible independent data for that goal.</p>
<p>When UV-C is chosen for coil and drain pan hygiene, the design details are covered in <a href="<?= url('guides/uv-c-coil-irradiation') ?>">UV-C coil and drain pan irradiation</a>.</p>

<h2>Decision guide</h2>
<ul>
<li><strong>Goal: keep coils and pans clean.</strong> UV-C surface irradiation is the established option.</li>
<li><strong>Goal: reduce airborne infectious particles.</strong> Higher-efficiency filtration and outdoor air first; UV-C air disinfection or upper-room UV-C where dose can be demonstrated.</li>
<li><strong>Goal: reduce VOCs or odours.</strong> Sorbent gas-phase media first; PCO only with independent data at realistic conditions and byproduct testing.</li>
<li><strong>Any device</strong> that produces ozone or uncertain byproducts should be treated with caution in supply air.</li>
</ul>
<?php guide_end([
    ['Is bipolar ionization effective in HVAC systems?', 'Independent evidence for bipolar ionization in real buildings is limited and mixed, and much of the published data comes from manufacturer-funded or small chamber tests. Some designs can produce ozone or reaction byproducts. Ask for independent, realistic testing and byproduct data before relying on it.'],
    ['Does PCO produce harmful byproducts?', 'It can. If volatile organic compounds are only partly oxidized on the catalyst, PCO can release intermediate products such as formaldehyde and acetaldehyde. Some PCO devices also produce ozone if their UV source emits at 185 nanometres.'],
    ['Is UV-C better than ionization?', 'UV-C has a longer and stronger evidence base for inactivating microorganisms, especially on coil surfaces and in upper-room applications. It does not affect particles or gases. The best choice depends on the goal, and neither replaces mechanical filtration.'],
]);
