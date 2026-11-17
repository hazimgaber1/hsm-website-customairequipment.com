<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ul-1995-vs-csa-c22-2-no-236'); ?>
<p class="lede">UL 1995 and CSA C22.2 No. 236 are now published as one harmonized bi-national standard for heating and cooling equipment, so the technical requirements are essentially the same. What differs is the certification mark: a unit needs a mark recognized in each country where it will be installed, such as cULus, cETLus or a CSA mark with the "C" and "US" indicators.</p>

<h2>The standard: one document, two designations</h2>
<p>UL 1995 (Heating and Cooling Equipment) and CSA C22.2 No. 236 cover the electrical, mechanical and fire safety of equipment such as air handlers, packaged units and heat pumps rated up to 7,200 V. Since the mid-2000s the two have been maintained jointly as a single bi-national standard, with a small number of country-specific deviations marked in the text. A manufacturer evaluating a custom air handler to the current edition is evaluating it to both at the same time, with attention to those deviations.</p>
<p>The standard covers items such as:</p>
<ul>
<li>Wiring methods, conductor sizing and protection inside the unit.</li>
<li>Motor protection and overload devices.</li>
<li>Enclosures for electrical components, grounding and bonding.</li>
<li>Electric heater safety controls, including limit and airflow switches.</li>
<li>Combustibility of internal materials and insulation.</li>
<li>Rain and moisture exposure for outdoor units.</li>
<li>Markings and nameplate data, including the minimum circuit ampacity and maximum overcurrent protection.</li>
</ul>

<h2>Side-by-side comparison</h2>
<table>
<thead><tr><th>Item</th><th>United States</th><th>Canada</th></tr></thead>
<tbody>
<tr><td>Standard designation</td><td>UL 1995</td><td>CSA C22.2 No. 236</td></tr>
<tr><td>Technical content</td><td>Harmonized; US deviations noted</td><td>Harmonized; Canadian deviations noted</td></tr>
<tr><td>Installation code it supports</td><td>NFPA 70, National Electrical Code</td><td>CSA C22.1, Canadian Electrical Code Part I</td></tr>
<tr><td>Who can certify</td><td>OSHA-recognized NRTLs (UL, Intertek ETL, CSA Group and others)</td><td>Certification bodies accredited by the Standards Council of Canada</td></tr>
<tr><td>Typical marks</td><td>UL, ETL, CSA with "US"</td><td>cUL, cETL, CSA with "C"</td></tr>
<tr><td>Combined marks</td><td colspan="2">cULus, cETLus, CSA C/US: the unit is certified for both markets</td></tr>
<tr><td>Language on markings</td><td>English</td><td>Bilingual English and French cautions may be required, especially for Quebec</td></tr>
<tr><td>Legal basis for requiring approval</td><td>NEC and local AHJ require listed equipment in many cases</td><td>Provincial electrical regulations require approved equipment before sale or connection</td></tr>
<tr><td>Fallback for unlisted units</td><td>Field evaluation by an NRTL</td><td>Special inspection or field evaluation under CSA SPE-1000</td></tr>
</tbody>
</table>

<h2>Reading the marks correctly</h2>
<p>The small letters around a certification mark tell you which countries it covers. A "c" to the left of UL or ETL means certified to Canadian requirements; a "us" to the right means certified to US requirements. A plain UL mark with no "c" is not valid for Canadian installation, and a CSA mark without "US" is not valid evidence of US listing. Which laboratory issued the mark does not matter to the AHJ as long as that laboratory is recognized in the relevant country. A cETLus mark carries the same standing as cULus.</p>
<p class="note">Specifications that say "UL listed" are common in the US and can unintentionally exclude equally valid marks from other NRTLs. Write "listed by a nationally recognized testing laboratory" instead. Wording is covered in <a href="<?= url('guides/certification-requirements-specification') ?>">specifying certification and listing requirements</a>.</p>

<h2>Where real differences still show up</h2>
<h3>Electrical code alignment</h3>
<p>Because the standard supports two installation codes, nameplate values and component choices are checked against both. Conductor sizing tables, disconnect requirements and some motor protection rules differ between the NEC and the CEC. A unit certified for both markets has been evaluated against each set of deviations.</p>
<h3>Voltages</h3>
<p>575 V three-phase is common in Canada and rare in the US, while 480 V dominates US commercial work. The listing applies to the rated voltage on the nameplate. A unit listed at 460 V does not automatically cover a 575 V build; motors, transformers and drives must be evaluated at the actual voltage. See <a href="<?= url('guides/north-american-motor-voltages') ?>">North American motor voltages</a> for the voltage landscape.</p>
<h3>Approval enforcement</h3>
<p>In Canada, provincial regulators treat approval as a precondition for connecting equipment to supply. An electrical inspector can refuse to energize an unmarked unit. US enforcement varies more by jurisdiction, but most AHJs expect a listing label on factory-built HVAC equipment.</p>

<h2>What the AHU listing does not include</h2>
<p>A UL 1995 / CSA C22.2 No. 236 listing covers the unit as a heating and cooling appliance. Control panels built separately and mounted on the unit are often listed under a different standard for industrial control panels. Whether the panel is covered by the unit listing or carries its own label depends on how it was evaluated; that topic sits with <a href="<?= url('guides/ul-508a-csa-listed-control-panels') ?>">UL 508A and CSA-listed control panels</a>.</p>
<p>Field modifications can void a listing. Adding a heater, rewiring a fan array, or cutting in a new section after shipment usually requires re-evaluation, typically through a field evaluation. Shipping splits that are reconnected per the manufacturer's instructions do not void the listing when those instructions form part of the certification.</p>

<h2>Practical guidance for cross-border projects</h2>
<ul>
<li>Ask for the dual mark (cULus, cETLus or CSA C/US) on any unit that may be relocated or that comes from a plant in the other country.</li>
<li>Confirm the nameplate voltage matches the site supply before release for production.</li>
<li>Request bilingual cautionary markings for Quebec installations.</li>
<li>Verify the certification file covers the specific options ordered, such as electric heat or factory-mounted drives.</li>
</ul>
<?php guide_end([
    ['Is UL 1995 the same as CSA C22.2 No. 236?', 'Yes, in technical content. The two are published as a harmonized bi-national standard for heating and cooling equipment, with a small number of country-specific deviations noted in the text.'],
    ['Is cETLus accepted the same as cULus?', 'Yes. Both indicate certification to US and Canadian requirements by a recognized laboratory. Inspectors accept marks from any certification body recognized in their country.'],
    ['Can a US-listed air handler be installed in Canada?', 'Only if it carries a mark valid in Canada, such as cULus, cETLus or a CSA mark. A US-only mark is not accepted, and the unit would need a special inspection or field evaluation before connection.'],
    ['Does the air handler listing cover the control panel?', 'Not always. Control panels are often evaluated under industrial control panel standards and may carry their own label. Check the certification documents for what was included.'],
]);
