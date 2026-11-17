<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('seasonal-changeover-checklist'); ?>
<p class="lede">Twice a year, air handlers switch between heating-dominated and cooling-dominated operation, and each switch has its own risks: in autumn, frozen coils; in spring, flooded drain pans, dry traps and economizers that have not moved in months. Work through the matching list below a few weeks before the change in weather, not on the first hot or cold day.</p>

<h2>Planning the changeover</h2>
<ul>
<li>Schedule both changeovers on the maintenance calendar with a date and an owner for each unit.</li>
<li>Check the long-range forecast; start the autumn list before the first expected frost.</li>
<li>Coordinate with the central plant: chiller and boiler changeovers, two-pipe system switchover and cooling tower winterization affect what the air handlers can do.</li>
<li>Review last season's issues log for problems to address before they recur.</li>
<li>Combine changeover tasks with the quarterly maintenance visit where the timing allows.</li>
</ul>

<h2>Cooling-to-heating changeover (autumn)</h2>
<h3>Freeze readiness</h3>
<ul>
<li>Test each low-limit freezestat: cool the element or use the test function and confirm the fan stops, outdoor dampers close, the heating valve opens and an alarm reaches the BAS.</li>
<li>Check that freezestat capillaries are still spread across the coil face and have not been pulled into a corner during maintenance.</li>
<li>Verify outdoor air dampers close tightly; replace damaged blade and jamb seals.</li>
<li>Confirm preheat coil valves stroke and fail to the correct position on loss of power or signal.</li>
<li>Check that heating pumps run and are interlocked as the sequence requires; confirm they do not stop when the AHU stops if the sequence keeps them running below a set outdoor temperature.</li>
<li>Test glycol concentration with a refractometer where glycol systems are used, and top up to the design mix.</li>
<li>Decide for each chilled water coil: drain and blow out, glycol-fill, or keep circulating. Record the decision and do it. See <a href="<?= url('guides/frozen-burst-coil-troubleshooting') ?>">troubleshooting frozen and burst coils</a> for why this matters.</li>
<li>Inspect steam coil traps, vacuum breakers and condensate drains on preheat coils.</li>
</ul>
<h3>Airside</h3>
<ul>
<li>Check that mixing dampers and air blenders are clean and functioning to prevent stratification.</li>
<li>Check snow and rain protection at outdoor intakes; clear leaves from louvres and screens.</li>
<li>Inspect energy recovery frost control: wheel speed control, preheat, or bypass dampers.</li>
<li>Check economizer high-limit and low-limit settings for winter operation.</li>
</ul>
<h3>Humidification</h3>
<ul>
<li>Inspect, clean and test humidifiers before the heating season; follow <a href="<?= url('guides/humidifier-maintenance') ?>">how to maintain steam and adiabatic humidifiers</a>.</li>
<li>Verify the high-limit humidistat downstream of the humidifier.</li>
<li>Confirm water treatment for humidifier feed water is working.</li>
</ul>
<h3>Controls</h3>
<ul>
<li>Switch seasonal modes and setpoints as the sequence requires: heating setpoints, morning warmup, supply air temperature reset limits.</li>
<li>Check that optimal start and warmup sequences are enabled.</li>
<li>Verify outdoor air temperature sensor reads correctly, since many winter sequences depend on it.</li>
</ul>

<h2>Heating-to-cooling changeover (spring)</h2>
<h3>Condensate management</h3>
<ul>
<li>Clean cooling coil drain pans and remove debris that collected over winter.</li>
<li>Flush drain lines and traps.</li>
<li>Prime every trap with water; traps dry out over the heating season and a dry trap can stop a draw-through pan draining.</li>
<li>Pour water into each pan and confirm it drains fully.</li>
<li>Check that the floor drain or receptor is clear.</li>
</ul>
<h3>Coils</h3>
<ul>
<li>Refill chilled water coils that were drained, venting air completely.</li>
<li>If construction or winter glycol is to be removed, flush and refill per the water treatment plan.</li>
<li>Inspect and clean cooling coils so they start the season at design pressure drop.</li>
<li>Check for winter freeze damage: leaks, bulged return bends, wet spots on fins.</li>
<li>Pressure test any coil that may have frozen before returning it to service.</li>
</ul>
<h3>Airside and economizer</h3>
<ul>
<li>Stroke economizer dampers through full range; they may have sat at minimum all winter.</li>
<li>Check economizer high-limit setpoints for the climate and confirm the changeover logic responds.</li>
<li>Replace filters if they are near their change point, since cooling season airflow may be higher.</li>
<li>Check for water carryover at high airflow on the first humid days.</li>
</ul>
<h3>Humidification shutdown</h3>
<ul>
<li>Drain and clean humidifiers that will not run in summer; leave them dry.</li>
<li>Isolate humidifier water supply where the manufacturer recommends it.</li>
<li>Disable the humidifier in the BAS for the season if the sequence does not do it automatically.</li>
</ul>
<h3>Controls</h3>
<ul>
<li>Switch seasonal modes and cooling setpoints.</li>
<li>Verify supply air temperature reset and dehumidification sequences are active.</li>
<li>Check the chilled water valve fails to the correct position.</li>
</ul>

<h2>Units that run year-round with both modes</h2>
<ul>
<li>Units that serve both heating and cooling loads every day, such as 100 percent outdoor air units, still need both lists, but split them across the quarterly visits so freeze items are done before winter and condensate items before summer.</li>
<li>Check that dehumidification and reheat sequences are enabled in shoulder seasons, when cool, humid days are common.</li>
<li>Confirm heating and cooling valves never open together except where the sequence calls for reheat.</li>
<li>For units with preheat and cooling coils in series, verify the preheat leaving temperature setpoint suits both seasons.</li>
</ul>

<h2>Both changeovers: closing out</h2>
<ul>
<li>Record each task, readings and any defects on the work order.</li>
<li>Raise repair orders for items that could not be fixed on the day.</li>
<li>Trend key points for the first weeks after changeover to catch faults the checklist missed.</li>
<li>Update the checklist itself with anything learned this season.</li>
</ul>
<p>These tasks sit alongside the routine program in the <a href="<?= url('guides/ahu-preventive-maintenance-schedule') ?>">AHU preventive maintenance schedule</a>.</p>
<?php guide_end([
    ['What should I check before winter on an air handler?', 'Test freezestats and confirm the sequence responds correctly, check outdoor dampers seal, verify preheat valves and pumps, test glycol concentration, decide how each chilled water coil is protected, and inspect and test humidifiers.'],
    ['Why do condensate traps need priming in spring?', 'Traps dry out during the heating season when no condensate forms. On a draw-through unit, a dry trap lets air in through the drain and can stop the pan draining, so refill every trap before cooling season.'],
    ['Should chilled water coils be drained for winter?', 'If they are exposed to air that could fall below freezing and will not be circulated or protected with glycol, yes. Drain and blow them out completely, or choose another protection method and record it.'],
]);
