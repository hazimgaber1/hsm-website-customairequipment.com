<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('humidifier-maintenance'); ?>
<p class="lede">Maintain an air handler humidifier by keeping its water path clean and its steam or spray delivery working: descale or replace steam cylinders and electrodes, flush and inspect evaporating chambers, clean dispersion tubes and nozzles, maintain media and spray systems on adiabatic units, verify the water treatment and controls, and keep the duct downstream dry. The schedule depends on the humidifier type and, above all, on feed water quality.</p>

<h2>Before you start</h2>
<ol>
<li>Identify the humidifier type and model from its nameplate and the O&amp;M manual. Steam generators, direct steam injection, atomizing systems and evaporative media each need different tasks.</li>
<li>Find the feed water type: potable, softened, reverse osmosis (RO) or deionized (DI). Water quality controls how quickly scale and mineral dust build up.</li>
<li>Lock out electrical power to the humidifier and to the AHU fan if you will enter the airstream, following <a href="<?= url('guides/lockout-tagout-ahu-service') ?>">lockout/tagout for AHU service</a>.</li>
<li>Isolate steam supply and allow steam piping and dispersion tubes to cool. Isolate feed water.</li>
<li>Drain the humidifier tank or reservoir fully before opening it.</li>
</ol>
<p class="warn">Steam humidifier tanks, heating elements and dispersion manifolds stay hot long after shutdown. Allow cooling time and verify surfaces are safe to touch.</p>

<h2>Electrode and resistive steam generators</h2>
<h3>Electrode (cylinder) units</h3>
<ol>
<li>Check the cylinder for scale buildup through any inspection port or by weight; heavy scale reduces output and increases current draw.</li>
<li>Replace disposable cylinders at the end of their life as indicated by the controller or the manufacturer's end-of-life signals. Cleanable cylinders can be disassembled, descaled and fitted with new electrodes.</li>
<li>Inspect the fill and drain valves for scale and debris, and clean or replace them.</li>
<li>Check the drain tempering system so hot drain water does not damage drain piping.</li>
<li>Check electrical connections to the electrodes for heat discolouration.</li>
</ol>
<h3>Resistive (heating element) units</h3>
<ol>
<li>Remove the tank cover and inspect heating elements for scale.</li>
<li>Remove loose scale from the tank bottom; many designs have a removable scale-collection tray.</li>
<li>Descale elements with the manufacturer's recommended method. Do not chip scale aggressively; element sheaths are easily damaged.</li>
<li>Check the low-water cutoff and over-temperature safety.</li>
<li>Inspect the tank gasket and replace it if hardened.</li>
</ol>

<h2>Direct steam injection and steam-to-steam units</h2>
<ol>
<li>Inspect the steam separator and trap: the trap must discharge condensate freely so only dry steam reaches the dispersion tubes.</li>
<li>Check the control valve for leakage when closed; a leaking valve humidifies continuously.</li>
<li>Inspect strainers on steam supply and clean them.</li>
<li>For steam-to-steam generators using treated water, inspect and clean the evaporating chamber and heat exchanger as for resistive units.</li>
<li>Check that dispersion tubes are drained by their condensate connections and that condensate traps are working. Trap and drain detail is in <a href="<?= url('guides/steam-humidifier-condensate-drains') ?>">steam humidifier condensate drains</a>.</li>
</ol>

<h2>Dispersion tubes and the airstream</h2>
<ol>
<li>Inspect dispersion tube orifices or nozzles for blockage by scale or debris; clean with a soft brush.</li>
<li>Check that tubes are level or pitched as designed, firmly supported, and their insulation (on insulated tubes) is intact.</li>
<li>Look downstream of the dispersion assembly for wet surfaces, drips or mineral deposits. Wetting means steam is not absorbing within the available distance or the tubes are spitting condensate.</li>
<li>Check that the duct high-limit humidity sensor and airflow proving switch are in place and working.</li>
</ol>

<h2>Adiabatic humidifiers</h2>
<h3>Evaporative media</h3>
<ol>
<li>Inspect the media for scale, discolouration and biological growth; replace when scaled or damaged, at the interval set by the manufacturer.</li>
<li>Clean the distribution header so water wets the media evenly.</li>
<li>Drain, clean and disinfect the sump or reservoir.</li>
<li>Check the bleed-off or drain-down cycle that controls mineral concentration.</li>
<li>Verify the system drains and dries out on shutdown as programmed.</li>
</ol>
<h3>High-pressure and atomizing systems</h3>
<ol>
<li>Inspect and clean or replace nozzles; worn nozzles produce larger droplets that do not evaporate.</li>
<li>Check the pump pressure and the pump's oil, seals and inlet filter per the manufacturer.</li>
<li>Inspect the droplet eliminator downstream for scale and growth; clean it.</li>
<li>Check that water lines flush and drain on shutdown so stagnant water does not sit in the system.</li>
</ol>
<p class="note">Water sitting in adiabatic humidifier systems is a microbial risk. Hygiene requirements, including Legionella risk management, are covered in the <a href="<?= url('guides/humidifier-hygiene-legionella-checklist') ?>">humidifier hygiene and Legionella checklist</a>; follow it alongside these maintenance steps.</p>

<h2>Water treatment</h2>
<ul>
<li>For RO or DI systems, check conductivity of the product water against the humidifier's requirement and replace membranes, cartridges or resin as needed.</li>
<li>For softened water, check that the softener regenerates and the salt supply is maintained.</li>
<li>Record water conductivity or hardness readings; rising values predict faster scaling.</li>
</ul>

<h2>Controls and final checks</h2>
<ol>
<li>Verify the space or return humidity sensor and the duct high-limit against a calibrated reference.</li>
<li>Check the airflow proving interlock stops humidification when the fan stops.</li>
<li>Restore water and power, run the humidifier, and watch the first cycle: fill, heat, output, drain.</li>
<li>Confirm no leaks at the tank, valves or drains.</li>
<li>Look again downstream for wetting with the humidifier at full output.</li>
<li>Record work, consumables replaced and readings.</li>
</ol>
<?php guide_end([
    ['How often should a steam humidifier be cleaned?', 'It depends mainly on water quality and run hours. Units on hard potable water may need cylinder replacement or descaling several times a season, while units on RO or DI water need much less frequent cleaning. Follow the manufacturer\'s guidance and adjust from inspection results.'],
    ['How do I descale a humidifier?', 'Drain and cool the unit, remove loose scale from the tank and collection tray, and descale elements or electrodes using the manufacturer\'s recommended method and chemicals. Avoid chipping heating element sheaths.'],
    ['Why is there water downstream of my humidifier?', 'Steam may not be absorbing within the available distance, dispersion tubes may be spitting condensate because their traps are not draining, or adiabatic nozzles may be producing oversized droplets. Inspect tubes, traps and nozzles first.'],
]);
