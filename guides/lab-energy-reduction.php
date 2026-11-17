<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('lab-energy-reduction'); ?>
<p class="lede">Lab HVAC energy falls fastest when you reduce the amount of outdoor air the building has to condition and then exhaust. Cut airflow where the hazard assessment allows, make hoods variable, set back unoccupied rooms, recover heat from what is left, and lower the pressure the fans work against.</p>

<h2>Why labs use so much energy</h2>
<p>A typical laboratory is ventilated with 100% outdoor air. Every cfm is heated, cooled, humidified or dehumidified once and then thrown away. On a cold design day, conditioning 10,000 cfm from 0°F to 70°F takes 1.08 × 10,000 × 70 = 756,000 Btu/h (about 220 kW) of sensible heat alone, before reheat, humidification or fan power. Multiply that across a research building moving several hundred thousand cfm and the case for reducing airflow is obvious.</p>
<p>The steps below are ordered by typical return. The order matters: recovering heat from an airflow you could have eliminated is a poor use of capital.</p>

<h2>Step 1: Benchmark and map the airflow</h2>
<ol>
<li>Collect metered energy, or at least trend data for supply and exhaust airflow, hood counts and occupied hours.</li>
<li>For each lab room, record which requirement governs its airflow: hoods, cooling load, dilution ACH or the offset. Rooms governed by cooling load will not save energy from an ACH reduction alone.</li>
<li>Identify hoods that are rarely used, constant volume hoods, and hoods left open overnight. These are usually the cheapest savings in an existing building.</li>
</ol>

<h2>Step 2: Reduce airflow at the source</h2>
<ol start="4">
<li><strong>Revisit air change rates.</strong> With the owner's EHS group, assign each room a hazard tier and an occupied and unoccupied rate. The method is in <a href="<?= url('guides/lab-air-change-rates') ?>">setting laboratory air change rates</a>. Do not change rates outside that process.</li>
<li><strong>Convert hoods to VAV.</strong> VAV hoods reduce exhaust when the sash is lowered. Retrofitting constant volume hoods with sash sensors and VAV valves, or replacing them, is common in renovations.</li>
<li><strong>Manage sashes.</strong> Automatic sash closers, user feedback displays and sash-closing campaigns all reduce hood exhaust. A VAV hood only saves energy when its sash is down.</li>
<li><strong>Remove or consolidate hoods.</strong> Abandoned hoods still exhaust air. Cap them properly or reduce them to a monitored minimum if the owner wants to keep them.</li>
<li><strong>Add occupancy setback.</strong> Occupancy sensors can lower both hood minimums (where permitted) and room ACH when nobody is present, while keeping the room negative.</li>
<li><strong>Consider demand-based dilution.</strong> Multipoint sampling systems allow low baseline rates with automatic increases when contaminants are detected. These suit labs with intermittent bench work.</li>
</ol>
<p class="warn">Every reduction in hood minimum flow or room ACH is a safety decision. Document it, have it approved by EHS, and verify hood containment afterward.</p>

<h2>Step 3: Decouple cooling from ventilation</h2>
<ol start="10">
<li>Where equipment heat drives airflow above the ventilation need, remove that heat locally. Chilled beams, fan coils with sensible-only coils, or process cooling water to equipment let the outdoor airflow drop to the ventilation minimum.</li>
<li>Reset supply air temperature upward when rooms are governed by ventilation rather than cooling, which cuts reheat. Many labs waste more energy reheating cold supply air than they do cooling it.</li>
</ol>

<h2>Step 4: Recover energy from exhaust</h2>
<ol start="12">
<li>Choose a recovery technology the owner's safety group accepts for the exhaust type. Runaround glycol loops keep supply and exhaust completely separate and suit fume hood exhaust; heat pipes and plates may be acceptable for some general lab exhaust. Wheels are restricted in many lab applications because of cross-leakage concerns. The rules are discussed in <a href="<?= url('guides/exhaust-air-class-recovery-restrictions') ?>">exhaust air class restrictions on energy recovery</a>, and loop design is in <a href="<?= url('guides/runaround-coil-loop-design') ?>">runaround coil loop design</a>.</li>
<li>Coat exhaust-side coils for the chemicals present and include filtration or cleaning access, because corrosion and fouling erode recovery over time.</li>
</ol>

<h2>Step 5: Reduce fan energy</h2>
<ol start="14">
<li><strong>Lower system pressure.</strong> Select AHU coils and filters at moderate face velocities, use larger ducts in main risers, and use low-pressure-drop airflow control valves where accuracy permits.</li>
<li><strong>Use variable volume exhaust fans.</strong> Many lab exhaust systems run at constant volume and bypass outdoor air at the roof to keep stack velocity up. Variable volume with wind-responsive or concentration-based controls can cut bypass air, subject to a dispersion study.</li>
<li><strong>Use efficient fans.</strong> Fan arrays with direct-drive EC or PM motors on variable speed keep efficiency high across the wide turndown labs experience.</li>
</ol>

<h2>Step 6: Verify and sustain</h2>
<ol start="17">
<li>Commission every change, including hood containment tests where flows were reduced.</li>
<li>Trend airflow, sash position and occupancy so drift is spotted early. Lab controls drift faster than most building systems because valves, sensors and sash switches are numerous.</li>
<li>Recommission on a fixed cycle. Savings from airflow reductions often disappear within a few years if setpoints are quietly raised in response to complaints.</li>
</ol>
<table>
<thead><tr><th>Measure</th><th>Typical cost level</th><th>Reduces</th></tr></thead>
<tbody>
<tr><td>Sash management and closers</td><td>Low</td><td>Hood exhaust and makeup air</td></tr>
<tr><td>Occupancy setback</td><td>Low to moderate</td><td>Room airflow when unoccupied</td></tr>
<tr><td>ACH reduction via risk assessment</td><td>Low (mostly controls and testing)</td><td>Base airflow</td></tr>
<tr><td>VAV hood conversion</td><td>Moderate</td><td>Hood exhaust at partial sash</td></tr>
<tr><td>Decoupled cooling</td><td>Moderate to high</td><td>Airflow in equipment-heavy labs; reheat</td></tr>
<tr><td>Exhaust energy recovery</td><td>High</td><td>Heating and cooling of remaining outdoor air</td></tr>
</tbody>
</table>
<?php guide_end([
    ['What is the biggest energy saver in a laboratory?', 'Usually reducing the volume of 100% outdoor air the lab handles. VAV hoods with good sash management, risk-based air change rates and unoccupied setback typically save more than any single equipment upgrade.'],
    ['Can energy recovery be used on fume hood exhaust?', 'Often yes, with a technology that keeps the airstreams fully separate, such as a runaround glycol loop. Wheels are generally avoided on hazardous exhaust because of cross-leakage. The owner\'s safety group should approve the choice.'],
    ['Is it safe to lower lab air change rates to save energy?', 'It can be, when the change follows a documented hazard assessment approved by the owner\'s environmental health and safety group and the room still meets hood, cooling and pressure requirements.'],
]);
