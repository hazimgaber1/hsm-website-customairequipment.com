<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('freeze-protection-during-construction'); ?>
<p class="lede">Before freezing weather reaches a site where air handler coils are installed but not yet under automatic control, choose one protection strategy for every coil and carry it out completely: drain and blow out the coil, fill it with a suitable glycol mix, or keep it filled, circulating and heated with temporary controls and monitoring. Half-done protection is how coils burst during construction.</p>

<h2>Why construction is the riskiest period</h2>
<p>A finished building protects coils with freezestats, preheat, valve failsafe positions, pump interlocks and a running heating plant. During construction, none of those may be operating. Dampers may be stuck open or missing, intakes may be uncovered, the boiler may not yet be commissioned, and the unit may be running on temporary power just to dry out a building. A single cold night with outdoor air blowing across a stagnant water coil can split tubes or headers. The repair costs time on the schedule and may not be covered by warranty.</p>
<p>Coils that were pressure tested in the field and left full of water are the most common victims. So are coils that were "drained" through the bottom connection only, leaving water trapped in the return bends.</p>

<h2>Step 1: Make an inventory</h2>
<ol>
<li>List every coil on site: chilled water, hot water, preheat, heat recovery runaround coils, and coils still in storage.</li>
<li>For each, record whether it is dry, filled with water, or filled with glycol, and whether it is connected to piping.</li>
<li>Note the expected date that permanent controls and the heating plant will be operational.</li>
<li>Assign each coil one strategy below and a responsible person. Post the list in the site office.</li>
</ol>

<h2>Step 2, option A: Drain and blow out</h2>
<p>Draining is the most reliable option for coils that do not need to be in service yet.</p>
<ol>
<li>Close the isolation valves and open the coil's drain and vent connections.</li>
<li>Let the coil drain fully by gravity. Expect it to take some time with long circuits.</li>
<li>Blow out each coil with compressed air, entering at the vent or supply connection and exhausting at the drain. Repeat until no water mist appears. Some coil designs hold water in the tubes even after a long gravity drain; blowing out is necessary, not optional.</li>
<li>For coils with drainable headers and pitched tubes, still blow out. For coils that cannot be drained completely, use option B.</li>
<li>Leave drains open or capped as the manufacturer recommends, and tag the coil "DRAINED: do not fill without authorization".</li>
</ol>
<p class="note">Coil venting and draining details, and how coil arrangement affects complete drainage, are explained in <a href="<?= url('guides/water-coil-venting-draining') ?>">water coil venting and draining</a>.</p>

<h2>Step 2, option B: Glycol fill</h2>
<ol>
<li>Choose an inhibited propylene or ethylene glycol compatible with the system's water treatment and the owner's preferences. Propylene glycol is typical where incidental contact is a concern.</li>
<li>Select a concentration that gives freeze protection below the lowest expected site temperature, with margin. Glycol suppliers publish freeze point and burst protection tables; burst protection allows some slush but no rupture.</li>
<li>Drain the coil, then fill it with premixed glycol solution. Avoid adding concentrate to a coil partially full of water, which can leave weak areas.</li>
<li>Test the concentration with a refractometer at the drain after filling.</li>
<li>Record and tag the coil. Plan how the glycol will be recovered and disposed of before permanent fill, unless the system is designed for glycol.</li>
</ol>
<p>Glycol permanently in a system changes coil capacity; that is a design matter covered in <a href="<?= url('guides/glycol-coil-derating') ?>">glycol coil derating</a>. Temporary construction glycol must be fully flushed if the permanent design uses water.</p>

<h2>Step 2, option C: Keep full, circulating and heated</h2>
<p>Sometimes coils must stay in service, for example when the air handler is providing temporary heat. Then treat the installation as a running system with temporary safeguards:</p>
<ol>
<li>Confirm the heating plant can supply hot water continuously, with a backup plan for outages.</li>
<li>Keep pumps running so water in every coil keeps moving; stagnant coils freeze first.</li>
<li>Open heating and preheat coil valves to at least a minimum position, and verify flow.</li>
<li>Wire a temporary freezestat or low-temperature sensor across the coil face that stops the fan and closes outdoor dampers on a trip.</li>
<li>Close or blank off outdoor air intakes when ventilation is not needed.</li>
<li>Set up remote temperature alarms so someone is notified at night and on weekends.</li>
<li>Have a documented response plan: who goes to site, what they do, and how to drain quickly.</li>
</ol>
<p class="warn">Do not run an air handler with 100 percent outdoor air for drying or temporary heat without a working freezestat and verified hot water flow. This is the classic construction coil failure.</p>

<h2>Step 3: Protect the airside</h2>
<ul>
<li>Install covers on outdoor air intakes and exhaust openings of idle units.</li>
<li>Keep access doors closed so wind cannot blow through the unit.</li>
<li>Check that dampers close fully and are not propped open by construction.</li>
<li>Seal open duct ends that connect to unheated areas.</li>
</ul>

<h2>Step 4: Inspect and hand over</h2>
<ol>
<li>Inspect every coil weekly through the cold season, and after each cold snap.</li>
<li>Before permanent startup, confirm each coil's state and refill or flush per the startup plan.</li>
<li>Pressure test any coil whose protection was in doubt before relying on it.</li>
<li>Record the protection history in the turnover documents so warranty discussions have facts.</li>
</ol>
<p>Coils that did freeze need a structured investigation; see <a href="<?= url('guides/frozen-burst-coil-troubleshooting') ?>">troubleshooting frozen and burst coils</a>. Permanent freeze protection strategies designed into the unit are in <a href="<?= url('guides/coil-freeze-protection-methods') ?>">coil freeze protection methods</a>.</p>
<?php guide_end([
    ['Is draining a coil enough to protect it from freezing?', 'Often not. Gravity draining can leave water in tube bends and headers. Blow each coil out with compressed air until no moisture appears, or fill it with an appropriate glycol solution.'],
    ['What glycol concentration should I use to protect coils during construction?', 'Use a concentration whose freeze or burst protection point is below the lowest expected site temperature with margin, based on the glycol supplier\'s tables. Verify the mix in the coil with a refractometer.'],
    ['Can an air handler provide temporary heat during construction?', 'It can, if hot water is reliably available, pumps keep water moving, a working freezestat protects the coil, and someone monitors alarms. Running 100 percent outdoor air without these safeguards is a common cause of burst coils.'],
]);
