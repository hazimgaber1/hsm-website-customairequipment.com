<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('low-limit-freeze-stat-sequences'); ?>
<p class="lede">A low-limit thermostat, commonly called a freeze-stat, is a last-line safety that stops the supply fan and closes outdoor air when any part of the airstream downstream of the heating coil falls below a set temperature. A good sequence pairs that hardwired trip with earlier, software-staged responses, so most cold-air events are handled before the safety ever trips and the unit is not shut down unnecessarily.</p>

<h2>What the device measures</h2>
<p>The typical low-limit device has a long capillary sensing element, often 20 ft (6 m) or more, strung in a serpentine pattern across the face of the coil, usually on the leaving side of the preheat or heating coil and upstream of the cooling coil. It trips when any short section of the element, commonly about a foot, senses a temperature below setpoint. That "any section" behaviour matters, because cold air often stratifies along the bottom of the coil or streams through one corner while the average temperature looks safe.</p>
<p>A common setpoint is around 35 to 40 °F (2 to 4 °C). Electronic alternatives, such as averaging temperature sensors with low-point detection, are also used and can feed both a hardwired relay and the BAS. Physical protection of the coil, such as preheat arrangements and glycol, is covered separately in <a href="<?= url('guides/coil-freeze-protection-methods') ?>">coil freeze protection methods</a>.</p>

<h2>Hardwired safety wiring</h2>
<p>The low-limit is a safety, so its core action should not depend on the BAS controller, its program or its network. A typical wiring arrangement:</p>
<ul>
<li>The low-limit contact is wired in series with other fan safeties (smoke detector shutdown where required, high static limit, fire alarm interlock) in the supply fan's run circuit or the VFD safety input.</li>
<li>When it opens, the fan stops regardless of the BAS command.</li>
<li>The outdoor air damper actuator is either spring-return closed by the same interlock or commanded closed by the loss of fan proof.</li>
<li>An auxiliary contact or separate input reports the trip to the BAS for alarming and for driving the heating valve open.</li>
</ul>
<p>Some designs also hardwire the heating valve to open fully on a trip using a spring-return actuator that fails open to the coil, or a relay that overrides the BAS output. Where hot water or steam is the heat source, also confirm that the heating plant and pumps are kept running.</p>
<p class="warn">Do not wire the low-limit only as a BAS input and rely on software to stop the fan. A controller fault, a program error or an override left in hand can defeat the protection.</p>

<h2>Manual versus automatic reset</h2>
<p><strong>Manual reset</strong> requires someone to physically reset the device or acknowledge the alarm before the unit restarts. It ensures someone investigates why cold air reached the coil, but it can leave a building without ventilation or heat overnight.</p>
<p><strong>Automatic reset</strong> lets the unit restart once the element warms. It avoids long outages but can allow repeated trips and restarts that never get investigated, and repeated exposure is what freezes coils.</p>
<p>A common compromise is a manual-reset hardwired device paired with software staging that avoids most trips, or an automatic-reset device combined with a BAS rule that locks the unit out after a set number of trips in a period and requires operator acknowledgement. Owner preference and the project specification decide.</p>

<h2>Staged software responses</h2>
<p>Rather than waiting for the hardwired trip, a well-written sequence escalates as supply or mixed air temperature falls. A typical structure, similar to that in <a href="<?= url('guides/ashrae-guideline-36-sequences') ?>">ASHRAE Guideline 36</a>:</p>
<table>
<thead><tr><th>Stage</th><th>Trigger (example)</th><th>Response</th><th>Reset</th></tr></thead>
<tbody>
<tr><td>1</td><td>Supply air temperature below about 40 °F for several minutes</td><td>Limit outdoor air to minimum; raise heating coil minimum output; alarm at low priority</td><td>Automatic when temperature recovers above a higher threshold for a set time</td></tr>
<tr><td>2</td><td>Supply air temperature below about 40 °F persisting longer, or below a lower value</td><td>Close outdoor air dampers fully; continue heating; higher-priority alarm</td><td>Automatic after recovery, or operator acknowledgement</td></tr>
<tr><td>3</td><td>Supply air below a lower threshold, or hardwired low-limit trip</td><td>Stop fan; close outdoor dampers; open heating valve fully; start heating pump and request hot water plant; highest-priority alarm</td><td>Manual reset by operator</td></tr>
</tbody>
</table>
<p>The values above are examples; set the actual thresholds for the coil type, climate and owner preference.</p>

<h2>Avoiding nuisance trips</h2>
<p>Nuisance trips are a real problem. They shut down ventilation and often lead operators to bypass the device, which defeats it permanently. Common causes and mitigations:</p>
<ul>
<li><strong>Startup in cold weather:</strong> outdoor dampers open before the heating coil warms. Delay outdoor damper opening until the heating loop is active and supply temperature is stable.</li>
<li><strong>Stratification:</strong> cold outdoor air streams along one side of the mixing box. Improve mixing with blenders or baffles, or with a preheat coil before mixing; the diagnosis is covered in <a href="<?= url('guides/mixed-air-stratification-troubleshooting') ?>">mixed air stratification troubleshooting</a>.</li>
<li><strong>Poorly tuned heating loop:</strong> an underdamped loop overshoots closed and lets temperature dip. Retune and add a minimum valve position in cold weather.</li>
<li><strong>Element placement:</strong> an element touching the coil frame or exposed directly to a cold leak around the coil reads lower than the airstream.</li>
</ul>

<h2>Testing</h2>
<p>Test the low-limit during commissioning and periodically after, by cooling a section of the element (for example with a cold pack or a spray designed for testing) and confirming that the fan stops, dampers close, the heating valve responds and the BAS alarm appears. Record the trip temperature. Confirm the restart sequence matches the chosen reset strategy.</p>
<?php guide_end([
    ['Where is a freeze-stat installed in an air handler?', 'Usually on the leaving side of the preheat or heating coil, upstream of the chilled water coil, with its capillary element spread in a serpentine across the full coil face so any cold section is detected.'],
    ['Should a freeze-stat have manual or automatic reset?', 'Both are used. Manual reset forces investigation but can leave a building without ventilation. Automatic reset avoids long outages but can hide repeated trips. A common approach combines automatic reset with a lockout after several trips.'],
    ['Why does my low-limit trip on cold mornings at startup?', 'Outdoor air dampers often open before the heating coil has warmed up. Delaying outdoor damper opening until heating is established, improving mixing and tuning the heating loop usually prevents these trips.'],
]);
