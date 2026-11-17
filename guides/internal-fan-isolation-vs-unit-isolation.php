<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('internal-fan-isolation-vs-unit-isolation'); ?>
<p class="lede">Internally isolating the fan and motor inside the casing keeps vibration out of the unit structure and lets the AHU sit directly on its pad or curb; isolating the whole unit treats the AHU as one mass on external springs. Internal isolation is the usual choice for factory-built units, while whole-unit isolation is reserved for cases where the casing itself, or several vibrating components, must be decoupled from a sensitive structure.</p>

<h2>Two ways to break the vibration path</h2>
<p><strong>Internal fan isolation</strong> mounts the fan wheel, motor and their common base on springs or elastomer mounts inside the casing. A flexible connection, usually a fabric or elastomer seal at the fan inlet or discharge, decouples the fan from the casing bulkhead. The unit casing and base rail sit rigidly on the housekeeping pad, roof curb or steel.</p>
<p><strong>Whole-unit isolation</strong> leaves the fan rigidly bolted to the unit base (or sometimes isolated as well) and places spring isolators or a spring curb under the entire AHU. Every duct, pipe and conduit connection to the unit then needs flexibility.</p>
<p>Both approaches aim to put a soft link between the rotating mass and the building. The difference is how much mass sits on the springs, what else rides along with the fan, and how many connections must be made flexible.</p>

<h2>Comparison</h2>
<table>
<thead><tr><th>Factor</th><th>Internal fan isolation</th><th>Whole-unit isolation</th></tr></thead>
<tbody>
<tr><td>Mass on isolators</td><td>Fan, motor and base only</td><td>Entire AHU including coils, water, casing</td></tr>
<tr><td>Deflection achievable</td><td>Commonly 1 to 2 in. springs; limited by casing height and inlet seal travel</td><td>Large deflections possible; spring curbs and floor springs widely available</td></tr>
<tr><td>Flexible connections required</td><td>One at the fan opening inside the unit</td><td>All ducts, coil piping, condensate, power and controls</td></tr>
<tr><td>Changing loads</td><td>Small; fan base load is constant</td><td>Large when coils are filled or drained, snow loads, wind; needs restrained springs</td></tr>
<tr><td>Casing vibration</td><td>Casing stays quiet if internal isolation works</td><td>Casing can vibrate with the fan; panels may radiate more</td></tr>
<tr><td>Factory testing</td><td>Isolation tested with the fan during run test</td><td>Field-installed isolators not part of factory test</td></tr>
<tr><td>Seismic and wind restraint</td><td>Internal snubbers or restrained mounts on the fan base</td><td>Restrained springs or isolated curbs rated for the site</td></tr>
<tr><td>Typical cost</td><td>Included in unit</td><td>Additional isolators, restraints and flex connections</td></tr>
</tbody>
</table>

<h2>When internal isolation is enough</h2>
<p>For most indoor and rooftop custom air handlers on a reasonably stiff structure, internal isolation does the job. The fan is the dominant vibration source, it is isolated close to the source, and the rest of the unit has little rotating equipment. Benefits include:</p>
<ul>
<li>Rigid duct and pipe connections at the unit are acceptable, which simplifies installation and removes a common failure point (flex connectors that are stretched, crushed or bridged).</li>
<li>Coil piping does not move, so there is no need for flexible hose on every connection.</li>
<li>The isolation is verified at the factory during the run test, where the base, mounts and inlet seal can be adjusted.</li>
</ul>
<p>Fan arrays are a special case. Small direct-drive fans running at higher speeds are often well balanced and may be mounted on elastomer isolators or rigidly within their own frames. Whether internal isolation is used depends on fan speed, size, and the structure under the unit; check the selection against the deflection requirement in <a href="<?= url('guides/static-deflection-selection') ?>">selecting isolator static deflection</a>.</p>

<h2>When to isolate the whole unit</h2>
<ul>
<li><strong>Long-span or lightweight floors</strong> where the ASHRAE recommendation calls for more deflection than can fit inside the casing.</li>
<li><strong>Rooftop units over sensitive spaces</strong> such as studios, conference rooms or patient rooms, where a spring isolation curb adds a second stage of isolation. Rooftop-specific steps are in <a href="<?= url('guides/rooftop-ahu-breakout-noise') ?>">reducing rooftop AHU noise in spaces below</a>.</li>
<li><strong>Units with several vibration sources</strong>, such as integral compressors, pumps or an energy recovery wheel drive, where isolating only the fan leaves other sources rigidly attached.</li>
<li><strong>Retrofits on existing structure</strong> that cannot be stiffened.</li>
</ul>

<h2>Avoid double isolation without analysis</h2>
<p>Specifying both internal spring isolation and external springs under the unit is sometimes done to "be safe". It creates a two-degree-of-freedom system with two resonances. If the frequencies are not well separated from each other and from operating speeds, the combination can amplify vibration at certain speeds instead of reducing it. The usual guidance is:</p>
<ul>
<li>If the unit is on external springs, internally lock down the fan isolation or replace internal springs with elastomer mounts, unless the isolation vendor has analysed the combination.</li>
<li>If external isolation is required for structure reasons and internal isolation is also wanted, ask for a combined analysis showing natural frequencies and transmissibility across the full speed range.</li>
</ul>
<p class="warn">Internal shipping restraints on the fan base must be removed before startup. A locked-down fan base on a rigidly mounted unit is the most common reason a "fully isolated" unit vibrates the floor.</p>

<h2>Details that make internal isolation work</h2>
<ol>
<li><strong>A properly sized fan base</strong> that keeps fan and motor aligned on belt-drive units and carries the drive torque without twisting.</li>
<li><strong>A flexible inlet or discharge seal</strong> with enough travel for the static deflection plus start-up movement, and no contact with the cone or wheel.</li>
<li><strong>Thrust consideration:</strong> on high-pressure fans, air pressure can push the fan off-centre on soft springs; that topic is covered in <a href="<?= url('guides/fan-thrust-restraints') ?>">thrust restraints for fans on isolators</a>.</li>
<li><strong>Flexible power and control wiring</strong> to the motor, routed so it does not bridge the isolators.</li>
<li><strong>Accessible adjustment</strong> so the isolators can be levelled and checked during service.</li>
</ol>
<p>Custom Air Equipment builds isolated fan bases into its <a href="<?= url('products/custom-air-handlers') ?>">custom air handlers</a> and checks them during the factory run test, which is a practical way to confirm the isolation before the unit reaches site.</p>
<?php guide_end([
    ['Do I need spring isolators under an AHU that already has internal fan isolation?', 'Usually not on a stiff floor or slab on grade. External isolation is added for long spans, lightweight structure, very sensitive spaces below, or units with multiple vibration sources. If both are used, have the combination analysed to avoid amplification.'],
    ['What is the risk of double isolation?', 'Two sets of springs in series create two natural frequencies. If either falls near an operating speed, vibration can be amplified rather than reduced. Lock down one stage or have an isolation vendor analyse the system.'],
    ['Can rigid duct connections be used with internal fan isolation?', 'Yes. When the fan is isolated inside the casing and the unit itself sits rigidly, duct connections at the unit do not need to move. A flexible seal at the fan opening inside the unit carries the isolation.'],
]);
