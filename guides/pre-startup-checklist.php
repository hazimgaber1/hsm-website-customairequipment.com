<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('pre-startup-checklist'); ?>
<p class="lede">Before an air handler runs for the first time, confirm that the unit is clean and mechanically free, that power and controls are wired and verified, that safeties are live, and that the systems it connects to are ready to receive air and water. This checklist covers everything to verify with the unit de-energized or only control power on.</p>

<h2>Documentation and readiness</h2>
<ul>
<li>Installation manual, wiring diagrams, sequence of operation and points list are on site.</li>
<li>Factory test reports are available for comparison (fan speeds, motor amps, sensor calibration).</li>
<li>The receiving report and any damage repairs are closed out.</li>
<li>Installation checks are signed off: level, section joining, isolator adjustment, seismic restraint.</li>
<li>The mechanical, electrical and controls contractors know the planned startup date and will attend.</li>
<li>Lockout/tagout plan agreed for the startup crew.</li>
</ul>

<h2>Casing and interior</h2>
<ul>
<li>All construction debris, packing material, tools and loose fasteners removed, especially from fan inlets and plenums.</li>
<li>Shipping restraints, blocks and bolts removed from fan and motor isolators, as the manual directs.</li>
<li>Split joints sealed; floor seams watertight.</li>
<li>Access doors close and latch; gaskets intact; door safety latches or interlocks work.</li>
<li>Interior lights work, if provided.</li>
<li>No visible damage to liners, insulation or perforated panels.</li>
<li>Outdoor units: roof caps, hoods and louvres installed; no open penetrations.</li>
</ul>

<h2>Fans, motors and drives</h2>
<ul>
<li>Each fan wheel turns freely by hand with no rubbing at the inlet cone or housing.</li>
<li>Inlet cone-to-wheel clearance and overlap match the manufacturer's dimensions.</li>
<li>Set screws and hub bolts on wheels and bearings are tight.</li>
<li>Bearings are lubricated per the manual; note which bearings shipped pre-greased.</li>
<li>Belt drives: sheaves aligned, belts tensioned, guards installed.</li>
<li>Direct-drive and fan array motors: mounting bolts tight; backdraft dampers or blank-off plates installed and free.</li>
<li>Spring isolators loaded and level; internal base floats freely.</li>
<li>Motor nameplate voltage and phase match the supply.</li>
</ul>

<h2>Electrical</h2>
<ul>
<li>Supply voltage measured at the main disconnect, phase to phase and phase to ground, within the motor and drive tolerance; phase imbalance checked.</li>
<li>Conductor size and overcurrent protection match the unit nameplate.</li>
<li>Equipment grounding conductor connected; bonding jumpers across shipping splits in place.</li>
<li>All terminals checked for tightness, including at field-joined harnesses.</li>
<li>Motor insulation resistance tested where required, with VFDs disconnected from the test.</li>
<li>VFD and control panel enclosures clean, dry, with filters installed and doors sealing.</li>
<li>Required working clearances in front of panels and drives are clear of piping and storage.</li>
<li>VFD parameters are programmed and verified per the <a href="<?= url('guides/vfd-startup-parameter-checklist') ?>">VFD startup parameter checklist</a>; this list does not repeat them.</li>
</ul>

<h2>Controls and safeties</h2>
<ul>
<li>Controller powered; communication to the BAS confirmed.</li>
<li>Each sensor reads a plausible value: temperatures agree with a reference thermometer, pressures read near zero with the fan off.</li>
<li>Each damper actuator strokes fully open and closed on command, with the correct direction.</li>
<li>Each valve actuator strokes fully and fails to the correct position on loss of signal or power.</li>
<li>Low-limit freezestat installed across the coil face as drawn and tested to trip.</li>
<li>High static pressure limits (supply and return) set at safe values and tested.</li>
<li>Smoke detectors installed and interlocked with the fire alarm as required.</li>
<li>End switches prove dampers open before fans start, where the sequence requires.</li>
<li>Hand-off-auto switches and VFD local controls are in the agreed position.</li>
</ul>
<p class="warn">Do not run a fan with outdoor air and return dampers both closed. Many units can generate enough negative pressure to collapse ductwork or damage casing panels. Prove the damper interlock first.</p>

<h2>Coils, piping and drains</h2>
<ul>
<li>Hydronic coils filled, vented and pressure tested; isolation valves open.</li>
<li>Control valves installed in the correct flow direction.</li>
<li>Water treatment and glycol concentration confirmed where specified.</li>
<li>Steam coils: traps, vacuum breakers and condensate return in place.</li>
<li>DX coils: refrigerant piping complete and leak-tested; condensing unit ready.</li>
<li>Condensate traps built to the specified depth and primed with water.</li>
<li>Drain lines pitched and terminated at an open drain.</li>
<li>Humidifier water supply, drains and steam supply ready, if fitted.</li>
</ul>

<h2>Filters and airside system</h2>
<ul>
<li>Construction filters or final filters installed per the project requirement, seated with no bypass.</li>
<li>Filter gauges or transmitters zeroed.</li>
<li>Ductwork complete, sealed and cleaned; fire and smoke dampers open.</li>
<li>Terminal units and diffusers installed; VAV boxes set open or controllable for startup.</li>
<li>Outdoor air intakes clear of construction debris and snow.</li>
<li>Duct connectors at the unit installed with slack.</li>
</ul>

<h2>Exceptions and sign-off</h2>
<ul>
<li>Each unchecked item is written up as an exception with a responsible party and a target date.</li>
<li>Exceptions that affect safety, such as an untested freezestat or a missing damper interlock, block startup until resolved.</li>
<li>Exceptions that do not affect a safe first run, such as a missing nameplate photo, can carry forward.</li>
<li>The startup technician and the installing contractor both sign the completed list.</li>
</ul>

<h2>Ready to run</h2>
<p>When every item above is checked or listed as an exception with an owner, the unit is ready for its first run. The next step, bumping the fans and recording baseline readings, is described in <a href="<?= url('guides/fan-startup-rotation-vibration') ?>">how to start up fans</a>. Keep this completed checklist; it forms part of the pre-functional records used in <a href="<?= url('guides/commissioning-process-ashrae-202') ?>">the commissioning process</a>.</p>
<?php guide_end([
    ['What is the difference between a pre-startup checklist and a pre-functional checklist?', 'They overlap heavily. A pre-startup checklist is the installer\'s and manufacturer\'s list of checks before first run. A pre-functional checklist is the commissioning team\'s record that installation is complete and ready for functional testing, and often incorporates the startup checklist.'],
    ['Should construction filters be installed for AHU startup?', 'Many projects require temporary construction filters if the unit runs before the building is clean, with new final filters installed before occupancy. Follow the project specification and never run the unit with no filters at all.'],
    ['Why test safeties before the first run?', 'Because the first run is when a miswired damper, a reversed fan or a closed valve is most likely. Freezestats, static pressure limits and damper end switches must be proven to work before they are needed.'],
]);
