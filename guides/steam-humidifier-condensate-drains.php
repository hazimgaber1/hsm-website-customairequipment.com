<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('steam-humidifier-condensate-drains'); ?>
<p class="lede">Pipe a steam humidifier so condensate never reaches the airstream: drip and trap the steam supply ahead of the control valve, trap the separator and dispersion manifold with water seals deep enough for the pressures involved, run drains with continuous downward slope, and cool hot condensate and generator blowdown before they enter the building drain. Most wet-duct and spitting problems start with one of these details.</p>

<h2>Step 1: Identify every source of water</h2>
<p>List what must drain for the humidifier type you have:</p>
<ul>
<li><strong>Direct injection:</strong> condensate from the steam supply main, the separator, the jacketed dispersion tubes and the dispersion header.</li>
<li><strong>Steam-to-steam generator:</strong> plant steam condensate from the heat exchanger, plus blowdown and drain-down water from the tank, plus condensate from the dispersion manifold and steam hose.</li>
<li><strong>Electric or gas generator:</strong> blowdown and drain-down from the cylinder or tank, overflow, and condensate from the manifold and steam hose.</li>
</ul>
<p>Each one needs its own path to a trap or drain sized for its flow and temperature.</p>

<h2>Step 2: Drip and trap the steam supply (direct injection)</h2>
<ol>
<li>Take the steam supply from the top of the main so condensate in the main does not flow into the branch.</li>
<li>Install a drip leg at the low point of the branch ahead of the humidifier, with a steam trap sized for the condensate load at startup and in operation.</li>
<li>Install a strainer ahead of the control valve to protect it.</li>
<li>Many direct injection humidifiers include a separator with its own drain connection. Fit a trap to that connection, usually an F&amp;T or inverted bucket type as the manufacturer specifies.</li>
<li>Return trapped condensate to the condensate return system where practical, or pipe it to drain with cooling.</li>
</ol>
<p class="note">Wet steam arriving at the valve is the most common cause of spitting dispersion tubes on direct injection systems. A properly trapped drip leg and separator fix it.</p>

<h2>Step 3: Drain the dispersion manifold</h2>
<ol>
<li>Pitch dispersion tubes and headers as the manufacturer directs so condensate runs to the header drain rather than out of nozzles.</li>
<li>Connect the header drain to a water seal trap (often a P-trap or loop seal) with depth recommended by the manufacturer. The seal must exceed the static pressure in the duct or AHU section plus the pressure inside the manifold, or steam and air will blow through.</li>
<li>On negative-pressure sections, the trap must also be deep enough to prevent air being drawn back up the drain into the duct.</li>
<li>Prime the trap at startup and check it does not dry out in periods of no humidification.</li>
<li>For manifolds in multiple tiers, drain each as the manufacturer shows; do not common the drains above the trap unless permitted.</li>
</ol>
<p>Pressure-based trap sizing follows the same principles as cooling coil drains, explained in <a href="<?= url('guides/condensate-trap-and-pad-height') ?>">condensate trap and pad height</a>.</p>

<h2>Step 4: Run steam hose and tubing correctly (generators)</h2>
<ol>
<li>Route steam hose or tubing from the generator to the dispersion manifold with a continuous slope back toward the generator or toward a drain point, so condensate does not collect in low spots.</li>
<li>Avoid sags and loops. A trapped low point will fill with condensate and gurgle, spit or block steam flow.</li>
<li>Keep runs as short as practical and within the manufacturer's maximum length and elevation limits. Long runs condense more steam.</li>
<li>Insulate rigid steam tubing on longer runs to reduce condensation.</li>
<li>Where the manifold is above the generator, follow the manufacturer's rule for condensate return to the generator or install a drain trap at the low point.</li>
</ol>

<h2>Step 5: Handle blowdown and drain-down water</h2>
<ol>
<li>Generators periodically drain part of the tank (blowdown) to control dissolved solids, and drain fully after idle periods. The water is near boiling.</li>
<li>Plumbing codes commonly limit the temperature of water discharged into the building drain, often to about 140 F. Check your local code. Most generators include or offer a drain water tempering kit that mixes cold water with the discharge; some use a cooling tank.</li>
<li>Size drain piping for the peak blowdown flow, which is much higher than the average, and use materials rated for the temperature.</li>
<li>Discharge to an open floor drain, hub or funnel with an air gap so the drain cannot back up into the humidifier.</li>
<li>Do not discharge into plastic piping that is not rated for hot water before tempering.</li>
</ol>
<p class="warn">Untempered blowdown into PVC drain lines can soften and deform the pipe. Confirm the drain material and the tempering arrangement before startup.</p>

<h2>Step 6: Slope and route drains</h2>
<ol>
<li>Give every drain a continuous downward slope from the trap to the receptor, as required by the manufacturer and the plumbing code.</li>
<li>Avoid running humidifier drains through unheated spaces where they can freeze, or heat-trace and insulate them.</li>
<li>Do not connect humidifier drains to cooling coil condensate drains upstream of each trap; separate pressures and temperatures interfere.</li>
<li>Provide cleanouts at changes in direction and at traps for scale and debris.</li>
<li>Keep vents and drains clear of the AHU access path.</li>
</ol>

<h2>Step 7: Commission the drains</h2>
<ol>
<li>Prime all water seal traps before starting steam.</li>
<li>Run the humidifier at full output with the AHU at design airflow and watch the manifold for spitting.</li>
<li>Check that each trap discharges and does not blow steam continuously.</li>
<li>Trigger a blowdown and a full drain cycle and confirm the tempering water operates and the drain line handles the flow.</li>
<li>Inspect the AHU section floor and downstream surfaces for water after an hour of operation.</li>
</ol>

<h2>Step 8: Maintain</h2>
<ul>
<li>Test steam traps on a schedule; failed-closed traps cause spitting, failed-open traps waste steam.</li>
<li>Clean scale from generator drain valves and lines, especially on hard water.</li>
<li>Re-prime water seals after shutdowns.</li>
<li>Check tempering valves and cold water supply each season.</li>
</ul>
<p>Water quality affects how much blowdown a generator needs but is a separate decision; see <a href="<?= url('guides/humidifier-water-treatment-ro-di') ?>">how to select water treatment for humidifiers</a>. If water still appears in the duct, use <a href="<?= url('guides/wet-duct-humidifier-troubleshooting') ?>">troubleshooting wet ducts and dripping humidifiers</a>.</p>
<?php guide_end([
    ['How should a steam humidifier dispersion manifold be drained?', 'Pitch the tubes and header as the manufacturer directs and connect the header drain to a water seal trap deep enough to exceed the duct static pressure plus the manifold pressure. Prime the trap at startup.'],
    ['Why does my steam humidifier drain need tempering?', 'Generator blowdown is near boiling, and plumbing codes commonly limit drain discharge temperature. A tempering kit mixes in cold water so the discharge is safe for the drain system.'],
    ['Can humidifier drains connect to cooling coil condensate drains?', 'Not upstream of their traps. The sections run at different pressures and temperatures, and a shared drain can blow steam or air between them. Trap each separately and join only at an open receptor.'],
]);
