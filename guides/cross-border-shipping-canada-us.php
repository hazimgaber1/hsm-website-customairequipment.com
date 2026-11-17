<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('cross-border-shipping-canada-us'); ?>
<p class="lede">Shipping a custom air handler between Canada and the United States means sorting out three things ahead of the truck: whether the unit qualifies as originating under CUSMA (USMCA) so it can enter duty-free, what customs paperwork and classification the broker needs, and which oversize transport permits and electrical certifications the destination requires.</p>

<h2>CUSMA origin: the basis for duty-free entry</h2>
<p>The Canada-United States-Mexico Agreement (known in the US as USMCA and in Mexico as T-MEC) allows qualifying goods to cross between the three countries without most customs duties. Being made in Canada or the US is not automatically enough; the goods must meet the agreement's rules of origin for their tariff classification. For manufactured equipment like air handlers, those rules commonly involve a change in tariff classification of non-originating inputs, and in some cases a regional value content requirement.</p>
<p>In practice, a custom AHU built in a Canadian or US factory from a mix of domestic and imported components may or may not qualify, depending on what was imported and how the rule for that classification is written. The manufacturer determines this and, if the unit qualifies, provides a certification of origin. CUSMA does not require a specific government form; the certification must contain the minimum data elements set out in the agreement and can be completed by the exporter, producer or importer.</p>
<p class="note">Ask the manufacturer at quotation whether the unit is expected to qualify under CUSMA. If it does not, duty may apply on entry, which belongs in the cost comparison.</p>

<h2>Tariff classification</h2>
<p>Every imported good is classified under the Harmonized System. Air handlers can fall under different headings depending on their components and function; for example, a unit with integral refrigeration or one that controls both temperature and humidity may classify differently than one that only moves and filters air. Classification determines both the duty rate (if origin does not qualify) and the applicable CUSMA rule. A customs broker should classify the goods, and for repeat shipments an advance ruling from customs can provide certainty.</p>

<h2>Customs documents and process</h2>
<table>
<thead><tr><th>Document</th><th>Purpose</th><th>Typically prepared by</th></tr></thead>
<tbody>
<tr><td>Commercial invoice</td><td>Value, description, quantity, parties, terms of sale</td><td>Manufacturer or exporter</td></tr>
<tr><td>Certification of origin (CUSMA)</td><td>Claims preferential duty-free treatment</td><td>Exporter, producer or importer</td></tr>
<tr><td>Bill of lading</td><td>Carrier's receipt and contract of carriage</td><td>Carrier</td></tr>
<tr><td>Packing list</td><td>Contents of each crate or section, weights</td><td>Manufacturer</td></tr>
<tr><td>Customs entry or declaration</td><td>Formal import filing in the destination country</td><td>Customs broker for the importer</td></tr>
<tr><td>Export filing, where required</td><td>Export reporting in the origin country above set thresholds</td><td>Exporter or freight forwarder</td></tr>
</tbody>
</table>
<p>Someone must be the importer of record. On construction projects this may be the mechanical contractor, the owner or, under delivered-duty-paid terms, the manufacturer through a non-resident importer arrangement. Decide this at contract stage, because the importer of record is responsible for duties, taxes and compliance.</p>

<h2>Incoterms and who pays what</h2>
<p>The quote's delivery terms decide who handles freight, insurance, customs clearance, duties and taxes. Two common arrangements:</p>
<ul>
<li><strong>FCA or EXW factory:</strong> the buyer arranges freight and clearance and pays duties and taxes. Cheaper on paper, but the buyer carries the logistics.</li>
<li><strong>DAP or DDP jobsite:</strong> the seller delivers to the site. Under DDP the seller also pays duties and import taxes and handles clearance.</li>
</ul>
<p>Sales taxes also apply: GST or HST, and possibly provincial sales tax, on goods entering Canada; state and local sales or use tax may apply to goods delivered in the US. Ask whether quoted prices include them.</p>

<h2>Oversize loads and transport permits</h2>
<p>Large AHU sections often exceed legal dimensions or weights for highway transport. Each province and state issues its own oversize and overweight permits, with rules on route, escort vehicles, travel hours and seasonal restrictions such as spring thaw weight limits. A shipment crossing several jurisdictions needs a permit for each. Plan for:</p>
<ul>
<li>Permit lead times and possible route surveys for very large loads.</li>
<li>Restrictions on weekend, holiday or night travel for wide loads.</li>
<li>Border crossing selection; not every crossing handles oversize loads at all hours.</li>
<li>Delivery windows on site that match permitted travel times.</li>
</ul>
<p>Shipping split design, which controls the size and weight of each section, is covered in <a href="<?= url('guides/shipping-split-design') ?>">shipping split design</a>.</p>

<h2>Electrical certification at the destination</h2>
<p>Customs is not the only gate. Electrical equipment must be acceptable to the authority having jurisdiction where it is installed. In Canada, that generally means certification to CSA C22.2 No. 236 or another applicable standard by an accredited certification body; in the US, listing by a nationally recognized testing laboratory, often to UL 1995. Many manufacturers certify units for both markets. Confirm the marking matches the destination before shipment, since relabelling or field evaluation on site is slow and costly. See <a href="<?= url('guides/ul-1995-vs-csa-c22-2-no-236') ?>">UL 1995 vs CSA C22.2 No. 236</a>.</p>

<h2>Practical checklist</h2>
<ol>
<li>Confirm CUSMA origin status and request the certification of origin.</li>
<li>Agree delivery terms and the importer of record.</li>
<li>Engage a customs broker and confirm classification.</li>
<li>Confirm electrical certification marks for the destination.</li>
<li>Arrange oversize permits and choose a suitable border crossing.</li>
<li>Send commercial invoice, packing list and origin documentation to the broker before the truck leaves.</li>
<li>Allow time for border processing in the delivery schedule.</li>
</ol>
<p class="warn">Trade rules, duties and tariffs can change with little notice. Confirm current requirements with a licensed customs broker for each shipment; contract clauses for tariff exposure are discussed in <a href="<?= url('guides/price-escalation-tariffs') ?>">steel price escalation and tariff clauses</a>.</p>
<?php guide_end([
    ['Do custom AHUs ship duty-free between Canada and the US?', 'They can, if the unit meets the CUSMA rules of origin for its tariff classification and a valid certification of origin is provided. Being built in Canada or the US does not automatically qualify a unit.'],
    ['Who is the importer of record for a cross-border AHU delivery?', 'It depends on the delivery terms. The contractor or owner often imports under factory or delivered-at-place terms, while under delivered-duty-paid terms the manufacturer takes on that role. Decide at contract stage.'],
    ['Does a Canadian-built AHU need UL listing for a US project?', 'Equipment installed in the US is generally required to be listed by a nationally recognized testing laboratory acceptable to the local authority. Many manufacturers certify units for both countries, so confirm the marking before shipment.'],
]);
