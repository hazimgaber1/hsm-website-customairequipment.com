<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('field-evaluation-unlisted-equipment'); ?>
<p class="lede">A field evaluation is an on-site inspection by an accredited body that checks a specific piece of unlisted or modified equipment against the applicable safety standard and, if it passes, applies a label that inspectors accept in place of a factory listing. It covers one unit at one location, not a product line.</p>

<h2>When a field evaluation is the right tool</h2>
<p>Most air handlers leave the factory with a listing. Field evaluation becomes necessary when that is not possible or no longer valid:</p>
<ul>
<li>A one-off custom unit built outside the manufacturer's certified scope.</li>
<li>A unit modified after shipment, for example by adding an electric heater, changing motors or rewiring a fan array.</li>
<li>A knockdown unit assembled on site where some electrical work was done in the field.</li>
<li>Imported equipment carrying only a foreign mark, or a US-only mark installed in Canada.</li>
<li>Existing equipment whose label is missing or whose listing cannot be verified.</li>
<li>An inspector red-tag after an inspection identified unlisted components.</li>
</ul>
<p>Field evaluation is not a shortcut around listing for repeat products. If you will build many units of the same design, factory certification is cheaper and avoids site delays.</p>

<h2>The governing documents</h2>
<p>In the US, field evaluation bodies follow NFPA 791, Recommended Practice and Procedures for Unlabeled Electrical Equipment Evaluation, and the evaluation is performed by an organization accepted by the AHJ, usually an OSHA-recognized NRTL or a field evaluation body accredited for the purpose. In Canada, CSA SPE-1000, Model Code for the Field Evaluation of Electrical Equipment, sets out the process, and the evaluation must be done by a body accredited by the Standards Council of Canada. Some provincial regulators, such as Ontario's Electrical Safety Authority, also run their own special inspection services.</p>
<p>The evaluator checks the equipment against the product safety standard that would have applied to a factory listing; for air handlers that is the harmonized UL 1995 / CSA C22.2 No. 236. Differences between the two marks are covered in <a href="<?= url('guides/ul-1995-vs-csa-c22-2-no-236') ?>">UL 1995 vs CSA C22.2 No. 236</a>.</p>

<h2>Step-by-step process</h2>
<ol>
<li><strong>Confirm the AHJ will accept a field evaluation.</strong> Ask the electrical inspector which evaluation bodies they accept and whether they have specific requirements, such as notification before the site visit.</li>
<li><strong>Engage an evaluation body.</strong> Provide the unit description, nameplate data, location and schedule. Expect a quote based on unit complexity and travel.</li>
<li><strong>Assemble the documentation.</strong> Typical requests are electrical schematics and wiring diagrams, a bill of materials listing each electrical component and its certification, motor and heater data, control panel drawings, nameplate ratings and the manufacturer's installation instructions.</li>
<li><strong>Pre-review.</strong> The evaluator reviews documents and identifies obvious deficiencies before travelling, such as unlisted components or missing overcurrent protection.</li>
<li><strong>Correct known issues before the visit.</strong> Replacing an unlisted terminal block or adding a missing ground in advance avoids a second trip.</li>
<li><strong>Site inspection.</strong> The evaluator inspects construction, wiring methods, spacings, grounding and bonding, component ratings, enclosures, markings and heater safety controls.</li>
<li><strong>Testing.</strong> Common tests include dielectric withstand (hi-pot), ground continuity, input current and, where heaters are involved, limit control operation. Some tests require the unit to be energized and running.</li>
<li><strong>Deficiency report.</strong> Any non-conformances are listed with the clause of the standard involved. The owner or contractor corrects them.</li>
<li><strong>Re-inspection and labeling.</strong> Once corrected, the evaluator applies a field evaluation label to the unit and issues a report.</li>
<li><strong>Close-out with the AHJ.</strong> Provide the report to the inspector, who then approves connection or removes the red tag.</li>
</ol>

<h2>Common deficiencies found on AHUs</h2>
<table>
<thead><tr><th>Finding</th><th>Typical correction</th></tr></thead>
<tbody>
<tr><td>Components without recognized certification</td><td>Replace with certified components or obtain component-level evidence</td></tr>
<tr><td>Missing or incorrect nameplate ratings</td><td>Calculate and mark minimum circuit ampacity and maximum overcurrent protection</td></tr>
<tr><td>Field wiring between sections not in raceway or approved cable</td><td>Rewire in listed raceway or cable suited to the environment</td></tr>
<tr><td>Electric heater without required limit controls or airflow interlock</td><td>Add automatic and manual-reset limits and an airflow proving switch</td></tr>
<tr><td>Inadequate motor overload protection on multi-motor arrays</td><td>Add individual overloads or verify drive-based protection</td></tr>
<tr><td>Control panel short-circuit rating not marked</td><td>Determine and mark SCCR per the applicable method</td></tr>
<tr><td>Bonding between casing sections missing</td><td>Install bonding jumpers across shipping splits</td></tr>
</tbody>
</table>
<p class="note">Short-circuit current rating findings are among the most frequent. The coordination steps are in <a href="<?= url('guides/sccr-coordination-checklist') ?>">the SCCR coordination checklist</a>.</p>

<h2>Limits of a field evaluation label</h2>
<ul>
<li>The label applies to that unit, with that serial number, in that location. Moving it to another site may require re-evaluation.</li>
<li>Later modifications void the label unless re-evaluated.</li>
<li>The label covers electrical and related fire safety only. It does not certify performance, energy compliance or seismic capability.</li>
<li>It does not convert the product into a listed product line for future orders.</li>
</ul>

<h2>Reducing the chance you need one</h2>
<p>Most field evaluations on air handlers are avoidable with early coordination. Specify a listed unit and identify all options at order, including heaters, factory-mounted drives and controls, so the factory certification covers them. If an existing unit must be modified during a renovation, involve the original manufacturer or a certification body before the work rather than after the inspector's visit. For guidance on wording listing requirements so custom units remain eligible, see <a href="<?= url('guides/certification-requirements-specification') ?>">specifying certification and listing requirements</a>. Inspection failures more broadly are discussed in <a href="<?= url('guides/inspection-failures-ahu-installations') ?>">common code inspection failures</a>.</p>
<?php guide_end([
    ['What is a field evaluation label?', 'It is a label applied by an accredited evaluation body after inspecting and testing a specific unlisted or modified unit on site. Inspectors accept it in place of a factory listing for that one unit at that location.'],
    ['What standard governs field evaluation in Canada?', 'CSA SPE-1000, the Model Code for the Field Evaluation of Electrical Equipment, sets out the process. The evaluation must be performed by a body accredited by the Standards Council of Canada, and some provincial regulators run their own special inspection programs.'],
    ['Does modifying a listed air handler void the listing?', 'Modifications not covered by the manufacturer\'s instructions usually do. Adding heaters, changing motors or rewiring components generally requires re-evaluation, often through a field evaluation.'],
    ['How long does a field evaluation take?', 'Timing depends on documentation, evaluator availability and how many deficiencies are found. Sending complete drawings and component lists in advance and correcting known issues before the site visit shortens the process.'],
]);
