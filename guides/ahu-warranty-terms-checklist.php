<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-warranty-terms-checklist'); ?>
<p class="lede">An air handler warranty is only as useful as its fine print: when coverage starts, what parts and labour are included, how long each component is covered, what the owner must do to keep it valid, and how claims are made; work through these terms before purchase, when they can still be negotiated.</p>

<h2>Warranty start and duration</h2>
<ul>
<li>Start trigger defined: shipment, delivery, startup, substantial completion or beneficial use.</li>
<li>Outside limit stated, for example a set period from startup or a longer period from shipment, whichever occurs first.</li>
<li>Effect of construction delays understood: units stored on site for months may lose much of their coverage if the clock starts at shipment.</li>
<li>Standard duration for the whole unit stated.</li>
<li>Component-specific durations listed separately, such as compressors, motors, drives, coils, energy recovery media, casing.</li>
<li>Start date documented in writing at startup by the manufacturer's representative.</li>
<li>Project specification warranty requirements compared with the manufacturer's standard warranty; any gap identified before contract.</li>
</ul>
<p class="note">For projects with long construction schedules, negotiate a start date tied to startup or substantial completion, with an outside limit from shipment that reflects the actual schedule.</p>

<h2>What is covered</h2>
<ul>
<li>Defects in materials and workmanship: stated clearly as the basic coverage.</li>
<li>Parts only, or parts and labour: if labour is included, the hours or rates covered.</li>
<li>Freight for replacement parts: included or excluded, and whether expedited freight is covered.</li>
<li>Removal and reinstallation labour, especially for components that require rigging or significant disassembly, such as large coils or fan modules.</li>
<li>Refrigerant, where DX components are included: covered or not.</li>
<li>Field-assembled or knockdown units: coverage of field joints and casing performance if assembly was by others.</li>
<li>Factory-mounted controls and drives: covered under the unit warranty or under the component supplier's warranty.</li>
<li>Performance: whether the warranty covers meeting rated performance, or only defects.</li>
</ul>

<h2>What is excluded</h2>
<ul>
<li>Damage from improper storage, installation, operation or maintenance.</li>
<li>Consumables: filters, belts, lamps, humidifier cylinders.</li>
<li>Damage from freezing, corrosive environments or water quality issues, and how these are defined.</li>
<li>Consequential damages: loss of use, product loss, business interruption.</li>
<li>Modifications made without manufacturer approval.</li>
<li>Use outside design conditions or rated limits.</li>
<li>Damage in transit, which is usually handled as a freight claim, not a warranty claim.</li>
</ul>
<p class="warn">Read the freeze and corrosion exclusions closely. Coil failures are among the most common AHU claims, and these clauses decide whether they are covered.</p>

<h2>Conditions the owner must meet</h2>
<ul>
<li>Startup by the manufacturer or an authorized representative, if required for warranty to apply.</li>
<li>Registration of the unit or return of a startup report within a set period.</li>
<li>Storage requirements during construction followed and documented; see the <a href="<?= url('guides/jobsite-storage-checklist') ?>">jobsite storage checklist</a>.</li>
<li>Maintenance performed per the manufacturer's instructions, with records kept.</li>
<li>Use of manufacturer-approved replacement parts.</li>
<li>Prompt written notice of defects within a stated period after discovery.</li>
<li>Access provided for inspection before repairs.</li>
<li>Water treatment requirements for coils and humidifiers, if stated.</li>
</ul>

<h2>Extended warranty options</h2>
<ul>
<li>Extended parts coverage on the whole unit, available at purchase.</li>
<li>Extended coverage on specific components: motors, drives, coils, compressors.</li>
<li>Extended labour coverage, and how labour is delivered (manufacturer's technicians or local service partners).</li>
<li>Price and terms of extensions compared with expected repair costs and component reliability.</li>
<li>Whether extensions must be purchased at order or can be added later.</li>
<li>Transferability of the warranty if the building is sold.</li>
</ul>

<h2>Claims process</h2>
<ul>
<li>Claim procedure written down: who to contact, what information to provide.</li>
<li>Response time for acknowledgement and for a technician visit.</li>
<li>Whether the owner can use their own contractor for repairs and be reimbursed.</li>
<li>Return of failed parts: required or not, and who pays freight.</li>
<li>Decision process if the manufacturer and owner disagree on the cause of failure.</li>
<li>Warranty on replacement parts: whether it restarts or runs out with the original.</li>
</ul>

<h2>Items to negotiate</h2>
<ul>
<li>Start date tied to startup or substantial completion.</li>
<li>Labour included for at least the first year.</li>
<li>Removal and reinstallation labour for heavy components.</li>
<li>Coverage of field-assembled casings when assembly is supervised by the manufacturer.</li>
<li>Defined response times for critical facilities.</li>
<li>Extended coverage on components with long lead times, such as large motors and drives.</li>
</ul>

<h2>Warranty for field-assembled and retrofit work</h2>
<ul>
<li>For knockdown units, warranty coverage of casing performance tied to assembly by, or supervised by, the manufacturer.</li>
<li>For retrofit components installed in existing casings, clear statement that the warranty covers the new components only.</li>
<li>Responsibility for failures at the interface between new and existing parts.</li>
<li>Coverage of field-installed components supplied loose by the manufacturer.</li>
<li>Requirements for field leakage testing or startup documentation as a warranty condition.</li>
</ul>

<h2>Documents to keep</h2>
<ul>
<li>The warranty certificate and all component warranties.</li>
<li>Startup report with date and signatures.</li>
<li>Storage and maintenance records.</li>
<li>Correspondence on any warranty negotiations or deviations.</li>
</ul>
<p>Warranty terms should be compared across bids as part of scope levelling; see <a href="<?= url('guides/normalizing-ahu-bids') ?>">how to compare and normalize AHU bids</a>. Who owns which part of the design, which can affect warranty claims for field-designed elements, is covered in <a href="<?= url('guides/delegated-design-responsibilities') ?>">delegated design responsibilities</a>.</p>
<?php guide_end([
    ['When does an AHU warranty start?', 'It depends on the terms. Common triggers are shipment, startup or substantial completion, often with an outside limit from shipment. Projects with long construction periods should negotiate a start tied to startup.'],
    ['Does an AHU warranty cover labour?', 'Some warranties cover parts only, others include labour for a period. Check whether removal and reinstallation of heavy components like coils and fan modules is covered, since that labour can exceed the part cost.'],
    ['What can void an air handler warranty?', 'Common causes are improper storage, missing startup by an authorized representative, lack of maintenance records, unapproved modifications, operation outside rated conditions, and failure to give timely notice of defects.'],
]);
