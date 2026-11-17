<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ul-508a-csa-listed-control-panels'); ?>
<p class="lede">An AHU-mounted panel that houses motor controllers, VFDs, overloads or control power is an industrial control panel. In the US, specify that it be built and labelled under UL 508A by a listed panel shop, with a marked short-circuit current rating; in Canada, specify certification to CSA C22.2 No. 286 or equivalent acceptable to the authority having jurisdiction. Write the requirement so the listing, the SCCR and the label are all deliverables.</p>

<h2>What counts as an industrial control panel</h2>
<p>An industrial control panel is an assembly of two or more power circuit components (such as motor controllers, overload relays, fused disconnects and circuit breakers), control circuit components (such as relays, timers, controllers and transformers), or both, together with wiring and terminals, in an enclosure. On air handlers this typically includes:</p>
<ul>
<li>A main disconnect and power distribution panel feeding fan motors, drives and accessories.</li>
<li>VFD enclosures with associated fusing, contactors or bypass.</li>
<li>Fan array panels with individual drives or overloads.</li>
<li>Control panels housing the unit controller, relays and 24 V transformers.</li>
</ul>
<p>The NEC requires industrial control panels to be marked with information including their short-circuit current rating. The CEC has corresponding requirements for marking and approval. Check the editions adopted locally for the details.</p>

<h2>UL 508A in the US</h2>
<p>UL 508A is the standard for construction of industrial control panels. Under the UL program, a panel shop that has been audited and authorized by UL can build panels to the standard and apply a UL listing mark. Key features:</p>
<ul>
<li>Components must be listed or recognized and used within their ratings.</li>
<li>Wiring, spacing, conductor sizing, overcurrent protection and enclosure requirements are defined.</li>
<li>Supplement SB of UL 508A provides a method to determine the panel's overall short-circuit current rating from the ratings of its components and their protection.</li>
<li>The label must show the SCCR, supply voltage, full-load current and other required data.</li>
</ul>
<p>The listing applies to the panel as built and documented. Field modifications, such as adding a drive or changing fuse classes, can invalidate the SCCR or the listing.</p>

<h2>CSA requirements in Canada</h2>
<p>In Canada, electrical equipment must be certified by an accredited certification body or field-evaluated before it is energized. For industrial control panels, the relevant standard is CSA C22.2 No. 286. Certification can be by CSA or another accredited body applying the Canadian standard, and the mark must indicate Canadian certification. Many panel shops hold authorization under both UL 508A and the Canadian program, so one panel can carry marks for both countries.</p>
<p>Where a panel arrives without acceptable certification, a field evaluation by an accredited inspection body may be possible, at extra cost and schedule risk; see <a href="<?= url('guides/field-evaluation-unlisted-equipment') ?>">field evaluation of unlisted equipment</a>.</p>

<h2>Panel listing versus unit listing</h2>
<p>An air handler may itself be listed as heating and cooling equipment, under UL 1995 in the US or CSA C22.2 No. 236 in Canada. In some cases, factory-mounted panels are evaluated as part of the unit's listing; in others, the panel carries its own industrial control panel listing. The project specification and the authority having jurisdiction determine what is acceptable. The relationship between those equipment standards is covered in <a href="<?= url('guides/ul-1995-vs-csa-c22-2-no-236') ?>">UL 1995 vs CSA C22.2 No. 236</a>.</p>
<p class="note">State in the specification which approach is acceptable. "Panels shall be UL listed" is ambiguous if the panel is covered by the unit listing but carries no separate 508A label.</p>

<h2>Short-circuit current rating</h2>
<p>The panel's SCCR must be at least the available fault current at the point where it is connected. Many installations, particularly near large transformers, have available fault currents well above the default ratings of common components. A panel with an insufficient SCCR fails inspection and may need redesign with current-limiting fuses or higher-rated components. Coordinating the rating early, with the electrical engineer providing the available fault current, avoids that; the process is set out in <a href="<?= url('guides/sccr-coordination-checklist') ?>">SCCR coordination checklist</a>.</p>

<h2>Sample specification language</h2>
<ol>
<li>Industrial control panels furnished with the air handling units, including power distribution, VFD, fan array and control panels, shall be constructed and labelled in accordance with UL 508A by a panel shop authorized under the UL industrial control panel program, or shall be evaluated as part of the air handling unit's listing where accepted by the authority having jurisdiction.</li>
<li>For installations in Canada, panels shall be certified to CSA C22.2 No. 286 by an accredited certification body and shall bear a mark indicating Canadian certification.</li>
<li>Each panel shall be marked with a short-circuit current rating not less than the available fault current at the point of connection, as provided by the electrical engineer. The SCCR shall be determined in accordance with the applicable standard.</li>
<li>Panel enclosures shall be of the NEMA type scheduled for the installed location.</li>
<li>The manufacturer shall submit panel layout drawings, schematic wiring diagrams, bill of materials with component ratings, the SCCR calculation basis and nameplate data.</li>
<li>Field modifications that affect the listing or SCCR shall be reviewed by the panel manufacturer before they are made.</li>
</ol>

<h2>Practical points for AHU panels</h2>
<ul>
<li>Provide the available fault current to the AHU manufacturer at the bid stage, not at submittal.</li>
<li>Confirm whether a single point power connection is required, since that drives the size of the main panel.</li>
<li>Leave spare space if future drives or accessories are likely, and make sure the SCCR basis accommodates them.</li>
<li>Confirm the enclosure type for the location; see <a href="<?= url('guides/vfd-enclosure-types-nema') ?>">VFD enclosure types</a>.</li>
<li>Require the panel nameplate to be visible with the unit installed.</li>
</ul>
<?php guide_end([
    ['What is a UL 508A panel?', 'It is an industrial control panel built and labelled to the UL 508A standard by a panel shop authorized by UL. The label includes the panel\'s short-circuit current rating and electrical data.'],
    ['What is the Canadian equivalent of UL 508A?', 'CSA C22.2 No. 286 covers industrial control panels in Canada. Panels must be certified by an accredited body and carry a mark indicating Canadian certification.'],
    ['Does an AHU control panel need its own listing?', 'It depends. Some factory-mounted panels are evaluated under the air handler\'s own listing, while others carry a separate industrial control panel listing. The specification and the authority having jurisdiction decide what is acceptable.'],
    ['Why does panel SCCR matter?', 'The panel\'s short-circuit current rating must be at least the available fault current where it is connected. A panel with too low a rating fails inspection and can be unsafe during a fault.'],
]);
