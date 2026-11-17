<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('hazardous-materials-old-ahus'); ?>
<p class="lede">Air handlers built before the mid-1980s, and some built later, can contain asbestos in insulation, gaskets, mastics and vibration isolators, PCBs in capacitors, ballasts and some sealants or paints, and lead in coatings; all of these must be identified by sampling before demolition so abatement can be planned, priced and completed safely.</p>

<h2>Why old air handlers are a concern</h2>
<p>Air handling units collect exactly the kinds of products that historically used hazardous ingredients: thermal insulation, acoustic lining, duct sealants, flexible connectors, gaskets, electrical components and protective coatings. A unit installed decades ago may also have been patched over the years with whatever materials were on hand, so its construction date is a guide, not a guarantee. Nothing in a legacy unit should be assumed safe until it has been tested.</p>
<p>Discovering these materials after demolition starts is the expensive way to find them. Work stops, the area must be assessed and possibly decontaminated, and the abatement scope is priced under pressure. Finding them during the planning stage turns them into a scheduled line item.</p>

<h2>Asbestos-containing materials</h2>
<p>Asbestos was used for heat resistance, fire resistance and durability. In and around air handlers, look for it in:</p>
<ul>
<li><strong>Thermal insulation</strong> on casings, especially older single-wall units with field-applied insulation, and on connected piping and fittings.</li>
<li><strong>Mastics and sealants</strong> at duct joints, panel seams and pipe penetrations.</li>
<li><strong>Flexible duct connectors</strong>, which in older installations were sometimes woven asbestos cloth.</li>
<li><strong>Gaskets</strong> on access doors, flanges and coil headers.</li>
<li><strong>Vibration isolator pads</strong> and some floor tiles or roofing in mechanical rooms.</li>
<li><strong>Cement board or transite</strong> panels in some older built-up units.</li>
</ul>
<p>Asbestos is generally of lowest concern when intact and undisturbed. Demolition, cutting, grinding or even removing a brittle gasket can release fibres, which is why removal must be done by trained abatement workers under the applicable occupational health and safety regulations in your province or state.</p>

<h2>PCBs</h2>
<p>Polychlorinated biphenyls were used as insulating fluids and plasticizers. In legacy air handling equipment they may appear in:</p>
<ul>
<li><strong>Motor run and power-factor capacitors</strong> in older motor starters and control panels.</li>
<li><strong>Fluorescent light ballasts</strong> in service lights inside or near the unit.</li>
<li><strong>Some caulks, sealants and paints</strong> from the era when PCBs were used as plasticizers.</li>
<li><strong>Transformers</strong> in older electrical rooms that also serve the mechanical space.</li>
</ul>
<p>Labelled components are straightforward; unlabelled ones should be treated as potentially containing PCBs until assessed. PCB-containing equipment and waste are regulated for handling, storage, transport and disposal under federal rules in both Canada and the United States, with additional provincial or state requirements in many places.</p>

<h2>Lead</h2>
<p>Lead-based paint was used on steel for corrosion protection, so it may be present on base frames, structural dunnage, outdoor casings, piping and older dampers. Lead is a hazard when the paint is disturbed: grinding, torch cutting, sanding or blasting creates dust and fumes. Torch-cutting painted steel during demolition is a particular exposure route that crews may not anticipate. Some older solder joints on coils and piping also contain lead.</p>

<h2>Other materials to flag</h2>
<ul>
<li><strong>Mercury</strong> in older thermostats, pressure switches and some fluorescent lamps.</li>
<li><strong>Refrigerants</strong> in DX coils and condensing units, which must be recovered by licensed technicians before any refrigerant circuit is opened.</li>
<li><strong>Microbial contamination</strong> in wet insulation and drain pans, which is not a regulated hazardous material in the same sense but needs suitable protective equipment and handling. See <a href="<?= url('guides/microbial-growth-ahu-troubleshooting') ?>">troubleshooting microbial growth in AHUs</a>.</li>
<li><strong>Glycol and water treatment chemicals</strong> in coils, which need proper collection and disposal.</li>
</ul>

<h2>Sampling scope that actually covers the unit</h2>
<p>Building-wide surveys often stop at the mechanical room door or sample only accessible surfaces. For an air handler replacement, ask the consultant to open access doors under lockout and sample interior liners, coil and door gaskets, mastic at duct and panel joints, isolator pads, and paint on the base frame and dunnage. Include the removal route if walls, ceilings or floor tiles will be disturbed to get equipment out.</p>

<h2>Abatement implications for the project</h2>
<table>
<thead><tr><th>Project area</th><th>What hazardous materials change</th></tr></thead>
<tbody>
<tr><td>Schedule</td><td>Sampling and lab results must come before demolition; abatement adds its own sequence and clearance testing</td></tr>
<tr><td>Contracts</td><td>Abatement is usually carried by a separate licensed contractor under the owner or general contractor</td></tr>
<tr><td>Means and methods</td><td>Units may be removed whole after encapsulation, or abated in place, which affects rigging plans</td></tr>
<tr><td>Occupied buildings</td><td>Containment, negative air and air monitoring may be required outside the work zone</td></tr>
<tr><td>Disposal</td><td>Waste must go to approved facilities with manifests or tracking documents</td></tr>
<tr><td>Cost</td><td>Varies widely with quantity, access and method; carry contingency until results are in</td></tr>
</tbody>
</table>
<p class="warn">Mechanical contractors and manufacturers' field crews should not disturb suspect materials. Stop work and notify the owner if unexpected materials are uncovered.</p>

<h2>Practical sequence</h2>
<ol>
<li>Request any existing hazardous building materials survey from the owner. Many institutional buildings have one, though it may not cover the inside of equipment.</li>
<li>Engage a qualified environmental consultant to sample the unit, its connections and the removal route.</li>
<li>Include results and the abatement scope in the bid documents so mechanical bidders know what will already be removed.</li>
<li>Schedule abatement and clearance before mechanical demolition in the project plan; see the <a href="<?= url('guides/retrofit-shutdown-planning-checklist') ?>">retrofit shutdown planning checklist</a>.</li>
<li>Keep disposal records with the project closeout documents.</li>
</ol>
<p>For the broader choice of whether to keep or remove the unit, the <a href="<?= url('guides/ahu-condition-assessment') ?>">AHU condition assessment checklist</a> provides the component-level ratings.</p>
<?php guide_end([
    ['Do old air handlers contain asbestos?', 'Many units built before the mid-1980s contain asbestos in insulation, mastics, gaskets, flexible connectors or isolator pads, and later units may contain it in patched repairs. Only sampling and laboratory analysis can confirm it.'],
    ['Where are PCBs found in HVAC equipment?', 'PCBs are most often found in older capacitors in motor starters and control panels, fluorescent light ballasts, and some caulks, sealants and paints. Unlabelled older components should be assessed before removal.'],
    ['Who is responsible for hazardous material abatement on an AHU replacement?', 'The owner usually commissions the survey and engages a licensed abatement contractor, often through the general contractor. Mechanical trades should not disturb suspect materials and should stop work if unexpected materials appear.'],
]);
