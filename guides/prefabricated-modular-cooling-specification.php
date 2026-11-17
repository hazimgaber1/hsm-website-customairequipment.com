<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('prefabricated-modular-cooling-specification'); ?>
<p class="lede">The value of a prefabricated cooling module comes from what is done in the factory: integrated controls, wiring, piping and testing that would otherwise happen on site. Specify the module so that the factory scope, the single-point site connections, the integrated controls and the factory tests are defined precisely, with acceptance criteria the owner can verify before shipment.</p>

<h2>What counts as a prefabricated modular cooling unit</h2>
<p>In data center projects, the term covers several kinds of factory-built assemblies: complete air handling modules with fans, coils, economizer dampers and controls; skid-mounted packages that combine pumps, heat exchangers and controls; and rooftop or pad-mounted modules that integrate DX or evaporative cooling. What they share is that they arrive as tested, largely self-contained units requiring a small number of site connections. This guide covers large-facility modules. White space air handler requirements generally are covered in <a href="<?= url('guides/data-center-ahu-specification') ?>">writing a data center air handler specification</a>.</p>

<h2>Decisions to make before writing</h2>
<ul>
<li>Factory scope boundary: which components, piping, wiring and controls are inside the module and which are site work</li>
<li>Number and type of site connections: power, water, refrigerant, drains, controls network, duct or opening interfaces</li>
<li>Control architecture: module-level controller with supervisory integration, or controls supplied by the building automation contractor</li>
<li>Listing path: whole-assembly listing to UL 1995 and CSA C22.2 No. 236, field evaluation, or listed components only. The two standards are compared in <a href="<?= url('guides/ul-1995-vs-csa-c22-2-no-236') ?>">UL 1995 vs CSA C22.2 No. 236</a>.</li>
<li>Factory test scope and whether the owner will witness</li>
<li>Shipping limits: maximum module dimensions and weights for road transport to the site</li>
</ul>

<h2>Sample specification language</h2>
<p>Adapt to the project. Bracketed items require project values.</p>
<h3>General</h3>
<ol>
<li>Provide factory-assembled modular cooling units as scheduled, each consisting of [fan array, cooling coils, filters, economizer dampers, controls and electrical distribution] [list], assembled, wired, piped and tested at the manufacturer's facility.</li>
<li>Each module shall require only the following site connections: [one] [two] incoming power feeds; chilled water supply and return [or refrigerant connections]; condensate drain; controls network; and [duct] [opening] interfaces as indicated.</li>
<li>Modules shall be designed for [indoor] [outdoor] installation, with structural design for [wind load per local code] [seismic design category ___] and [snow load ___].</li>
</ol>
<h3>Performance</h3>
<ol start="4">
<li>Each module shall deliver [__ cfm] at [__ in. w.g.] external static pressure and [__ kW] sensible cooling at entering air [__°F] and leaving air [__°F], with chilled water at [__°F] entering and [__°F] leaving.</li>
<li>With any one fan out of service, the module shall deliver [100%] of scheduled airflow.</li>
<li>Fan input power at the scheduled duty shall not exceed [__ kW]; manufacturer shall state guaranteed values.</li>
</ol>
<h3>Electrical</h3>
<ol start="7">
<li>Provide a factory-wired electrical distribution panel with main disconnect, branch protection for each fan and accessory, and a short-circuit current rating not less than [__ kA] at [__ V]. Industrial control panels shall be listed to UL 508A [and CSA C22.2 No. 286].</li>
<li>The module shall bear a listing mark acceptable to the authority having jurisdiction for the complete assembly.</li>
<li>[Where dual power feeds are required:] Provide automatic transfer between feeds such that loss of one feed does not reduce cooling below [__%].</li>
</ol>
<p>Short-circuit ratings need coordination with the electrical design; see <a href="<?= url('guides/sccr-coordination-checklist') ?>">the SCCR coordination checklist</a>.</p>
<h3>Integrated controls</h3>
<ol start="10">
<li>Provide a factory-mounted, factory-programmed controller for each module that performs all sequences of operation for the module independently of the building automation system.</li>
<li>The controller shall continue to operate the module at its last setpoints on loss of communication with the supervisory system.</li>
<li>Controllers shall communicate via [BACnet/IP] [Modbus TCP], with a points list submitted for approval.</li>
<li>Provide [redundant] power supplies for the controller and critical sensors.</li>
<li>Factory shall load and test the approved sequence of operation before shipment.</li>
</ol>
<h3>Factory testing</h3>
<ol start="15">
<li>Each module shall be run-tested at the factory with all fans operating and with controls active.</li>
<li>Tests shall include: airflow and fan input power at scheduled duty; vibration on each fan; casing leakage at [__ in. w.g.]; electrical insulation and functional checks; control sequence verification including fan failure, power feed loss and restart.</li>
<li>[Optional] Thermal performance test at [__% of] scheduled load using [load bank] [test loop], with acceptance at [__%] of scheduled capacity.</li>
<li>Submit a test procedure for approval [30] days before testing and certified test reports after. Owner may witness testing with [__] days' notice.</li>
</ol>
<p class="note">Agree the instrument accuracy and acceptance tolerances in the test procedure. A factory test without stated tolerances produces data, not a pass or fail.</p>
<h3>Shipping and installation</h3>
<ol start="19">
<li>Modules shall ship in [one piece] [the minimum number of sections] within [__ ft] width, [__ ft] height and [__ lb] weight per section.</li>
<li>Provide lifting points and rigging drawings for each section.</li>
<li>Where modules ship in sections, field joints shall be designed for reconnection without recalibration of factory-tested components; provide a field reassembly and retest procedure.</li>
</ol>

<h2>Submittal review points</h2>
<table>
<thead><tr><th>Item</th><th>What to check</th></tr></thead>
<tbody>
<tr><td>Scope boundary drawing</td><td>Every site connection shown with size, location and responsibility</td></tr>
<tr><td>Listing documentation</td><td>Assembly listing or evaluation path stated</td></tr>
<tr><td>Control sequences</td><td>Failure modes and loss-of-communication behavior described</td></tr>
<tr><td>Test procedure</td><td>Instruments, tolerances, acceptance criteria</td></tr>
<tr><td>Weights and dimensions</td><td>Shipping sections within transport and crane limits</td></tr>
</tbody>
</table>
<p>For how owners structure factory witness events, see <a href="<?= url('guides/factory-witness-testing') ?>">factory witness testing</a>.</p>
<?php guide_end([
    ['What should a modular cooling unit specification include?', 'It should define the factory scope and site connections, performance at design conditions with redundancy, electrical distribution and listing, integrated controls and their behavior on communication loss, factory test scope and acceptance criteria, and shipping limits.'],
    ['Do prefabricated cooling modules need a UL or CSA listing?', 'The authority having jurisdiction usually requires the assembly to be listed or field evaluated. In North America that is typically UL 1995 or CSA C22.2 No. 236 for the assembly, with control panels listed to UL 508A.'],
    ['Should modules have their own controllers?', 'In most data center applications, yes. A factory-programmed controller that runs the module independently and holds last setpoints on loss of communication avoids a single point of failure in the supervisory system.'],
]);
