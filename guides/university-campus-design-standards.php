<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('university-campus-design-standards'); ?>
<p class="lede">Most universities publish their own design and construction standards, and those documents usually override the generic master specification. Writing a compliant AHU section means reading the campus standard first, mapping each owner requirement to a specific paragraph in Section 23 73 00, and flagging any conflicts before bid rather than during submittal review.</p>

<h2>Why campus standards exist</h2>
<p>A university is a long-term owner. It operates the same buildings for 50 years or more, runs its own maintenance shops, often runs a central steam or chilled water plant, and has a single building automation platform to integrate everything into. Campus facilities departments write standards so that a building designed by one consultant in 2010 and another in 2026 can be maintained by the same trades with the same spare parts.</p>
<p>The standards are typically organized by CSI division, sometimes with a separate controls standard and a separate commissioning standard. They range from short guidance notes to prescriptive documents that name acceptable manufacturers, list required options and dictate drawing conventions.</p>

<h2>Common university AHU requirements</h2>
<p>Every campus differs, but the following items appear in many higher-education standards. Treat this as a checklist of what to look for, not as a list of what any particular campus requires.</p>
<table>
<thead><tr><th>Topic</th><th>What campus standards often address</th></tr></thead>
<tbody>
<tr><td>Casing</td><td>Double-wall construction, minimum panel thickness, solid or perforated interior liners, thermal break requirements, casing leakage testing</td></tr>
<tr><td>Fans</td><td>Fan arrays or redundant fans, direct drive preferred over belts, maximum fan speeds, AMCA-certified ratings</td></tr>
<tr><td>Motors and drives</td><td>Premium efficiency motors, specific VFD manufacturers to match campus spares, bypass or redundant drive requirements</td></tr>
<tr><td>Coils</td><td>Copper tube and aluminum fin minimums, maximum rows per coil for cleanability, steam coil type when served from a campus plant</td></tr>
<tr><td>Access</td><td>Minimum access section lengths, walk-in doors, lights and receptacles in access sections, viewing windows</td></tr>
<tr><td>Controls</td><td>Single campus BAS vendor, specified communication protocol, required points, naming conventions</td></tr>
<tr><td>Metering</td><td>Airflow stations, energy meters on chilled water, hot water or steam connections</td></tr>
<tr><td>Testing</td><td>Factory witness test, run test, leakage test, sound test</td></tr>
</tbody>
</table>

<h2>Mapping the standard into your specification</h2>
<p>Do not paste a campus standard into the project manual and call it a specification. Standards are written for many building types and contain options that do not apply. Work through them in order:</p>
<ol>
<li><strong>Get the current version.</strong> Campus standards are revised regularly. Confirm the edition with the project manager and note it in your basis of design.</li>
<li><strong>Extract every AHU-related requirement</strong> from Divisions 23, 25 and 26 into a single list, including controls and electrical items that affect what the manufacturer supplies.</li>
<li><strong>Assign each requirement to a paragraph</strong> in your Section 23 73 00 or to a schedule column. The structure of a full AHU specification is described in <a href="<?= url('guides/writing-ahu-specification-23-73-00') ?>">writing an AHU specification</a>.</li>
<li><strong>Identify conflicts</strong> with the project program, budget or other codes and send them to the campus representative in writing.</li>
<li><strong>Record deviations</strong> that the campus has approved in a variance log so they are not reopened during submittal review.</li>
</ol>

<h3>Sample specification language</h3>
<p>The following paragraphs show how owner requirements can be written in enforceable terms. Adjust the bracketed items to match the campus standard.</p>
<p class="formula">Air handling units shall comply with [University] Design and Construction Standards, Division 23, edition [date]. Where this Section and the Standards conflict, the more stringent requirement governs unless a written variance is listed in Appendix [X].</p>
<p class="formula">Each supply fan system shall consist of [two or more] direct-drive plenum fans so that with any one fan out of service the remaining fans deliver not less than [__]% of scheduled airflow at scheduled external static pressure.</p>
<p class="formula">Provide access sections not less than [24 in. (600 mm)] long between [cooling coil and fan], with hinged doors, a vapor-tight LED light fixture and a switch located outside the unit.</p>
<p class="formula">Controls supplied with the unit shall be compatible with the campus building automation system and shall communicate using [protocol] as defined in the [University] Controls Standard.</p>

<h2>Requirements that often catch designers out</h2>
<ul>
<li><strong>Named manufacturers.</strong> Some campuses list approved AHU manufacturers. Others list approved components such as VFDs, dampers and actuators. Make sure the basis-of-design unit can accept those components; a custom AHU manufacturer can usually integrate them, but it must be stated.</li>
<li><strong>Central plant interfaces.</strong> Campus steam pressure, chilled water supply temperature and differential temperature targets may differ from textbook values. Coil selections must use the campus values, and many campuses enforce a minimum chilled water delta T.</li>
<li><strong>Redundancy for research buildings.</strong> Laboratory and vivarium buildings frequently require N+1 fans and sometimes redundant air handlers. See <a href="<?= url('guides/fan-array-redundancy-n1-vs-n2') ?>">fan array redundancy</a> for how to express those requirements.</li>
<li><strong>Testing and witness rights.</strong> Universities often reserve the right to witness factory tests. Write the number of attendees, the test procedures and who pays travel into the specification.</li>
<li><strong>Energy targets.</strong> Campus climate commitments may impose fan power, heat recovery or electrification targets above energy code.</li>
</ul>
<p class="note">If the campus standard is silent on something important for your project, such as seismic certification or a specific filter efficiency, write it into your specification explicitly. Silence in the standard is not permission.</p>

<h2>Coordinating with campus facilities staff</h2>
<p>Campus facilities engineers are often the most useful reviewers you will have. Schedule a review of the AHU schedule and specification at design development rather than waiting for 95% documents. Ask which features have caused maintenance problems on recent projects and which manufacturers' service networks they rely on. Their answers frequently explain requirements that look arbitrary in the written standard.</p>
<p>Factory testing is another place where campus input pays off. Facilities staff who attend a witness test at the plant learn the unit before it arrives. The process is described in <a href="<?= url('guides/factory-witness-testing') ?>">factory witness testing</a>, and if you want to discuss how a specific campus standard maps onto a custom unit, <a href="<?= url('contact') ?>">contact our application engineers</a>.</p>
<?php guide_end([
    ['Does a university design standard override the project specification?', 'Usually the contract documents state which governs, and most campuses require the more stringent of the two. Write that precedence into your specification and list any approved variances so there is no ambiguity during submittal review.'],
    ['What do university AHU standards usually require?', 'Common items include double-wall casing, redundant direct-drive fans, generous access sections, campus-standard controls and drives, metering, and factory testing. Each campus differs, so always work from the current edition of that owner\'s standard.'],
    ['Can a custom air handler meet a campus standard that names specific components?', 'Usually yes. A custom manufacturer can integrate owner-specified drives, actuators, dampers and controls, provided they are clearly listed in the specification and schedule before pricing.'],
]);
