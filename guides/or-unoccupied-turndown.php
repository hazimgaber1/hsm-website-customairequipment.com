<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('or-unoccupied-turndown'); ?>
<p class="lede">ASHRAE 170 allows the air change rate in an operating room to be reduced when the room is unoccupied, provided the room's positive pressure relationship is maintained at all times and full design airflow can be restored automatically before the room is used. Because ORs run at 20 or more air changes around the clock, turndown is one of the largest energy savings available in a hospital.</p>

<h2>Why OR turndown matters</h2>
<p>A typical OR at 20 to 25 ACH moves far more air than an office of similar size, and much of it is conditioned outdoor air that must be cooled, dehumidified, reheated and filtered. Many ORs are used for a scheduled day and sit empty overnight and on weekends. Running full airflow during those hours provides little benefit. Reducing airflow by half or more for those hours cuts fan energy dramatically, because fan power falls roughly with the cube of airflow, and also cuts heating, cooling and reheat energy.</p>
<p class="formula">Fan power ratio ≈ (reduced flow ÷ design flow)³</p>
<p>At 50% airflow, fan power drops to roughly 12.5% of design, before accounting for fixed losses and motor and drive efficiency at low speed.</p>

<h2>What Standard 170 permits</h2>
<p>The standard permits reduced air changes in unoccupied ORs subject to conditions. In general terms:</p>
<ul>
<li>The pressure relationship to adjacent spaces must be maintained during the unoccupied mode, not just restored on occupancy.</li>
<li>The system must return to the full design air change rate when the room becomes occupied, with controls that do this automatically.</li>
<li>Minimum outdoor air and filtration requirements continue to apply as stated in the edition used.</li>
</ul>
<p>The standard does not specify a single numeric floor in every edition, and some jurisdictions, health authorities and owners do set one. Check the adopted edition, the FGI Guidelines in force, CSA Z317.2 in Canada, and any owner design standard before choosing a setback value. The baseline air change requirements are summarized in <a href="<?= url('guides/ashrae-170-ventilation-requirements') ?>">ASHRAE 170 ventilation requirements</a>.</p>
<p class="note">General building night setback strategies do not apply to ORs. OR turndown is a specific, controlled mode with pressure maintained at all times.</p>

<h2>Defining "unoccupied"</h2>
<p>The control system needs a reliable way to know an OR is empty and not about to be used. Common approaches, often combined:</p>
<ul>
<li><strong>Occupancy sensors</strong> in the OR, with a time delay before setback.</li>
<li><strong>Surgical schedule integration</strong>, so rooms are not set back when a case is booked.</li>
<li><strong>Manual mode switch</strong> at the OR control panel for staff to confirm the room is out of service or to override setback.</li>
<li><strong>Lighting status</strong> as a secondary input, where the surgical lights and room lights indicate use.</li>
</ul>
<p>Any staff entry should immediately trigger a return to occupied mode. Emergency cases cannot wait for a slow restart.</p>

<h2>Maintaining pressure in setback</h2>
<p>Positive pressure is maintained by keeping supply above return by an offset. When supply drops in setback, the return must drop as well, holding the offset needed for the target differential. Practical requirements:</p>
<ul>
<li>Pressure-independent supply and return airflow valves able to control accurately at the reduced flow. Check the valves' turndown range during design; valves sized for full flow may be inaccurate at 30 to 40% of design.</li>
<li>Return valve control that tracks supply with a fixed offset, verified by the room pressure monitor.</li>
<li>The offset itself may need to stay at its full value, because the leakage area of the room does not change when the room is empty. Methods for setting the offset are in <a href="<?= url('guides/room-pressurization-offset-calculation') ?>">calculating room pressurization airflow offset</a>.</li>
<li>Alarm if pressure is lost in either mode.</li>
</ul>

<h2>Temperature and humidity during setback</h2>
<p>Turndown should not allow the room to drift far from conditions that would delay its return to service. Typical practice:</p>
<ul>
<li>Keep temperature and humidity within the room's allowable ranges, or within a slightly wider band that can be recovered within the restart period.</li>
<li>Maintain dew point control at the AHU; many OR AHUs serve several rooms, and some may be occupied while others are set back.</li>
<li>Reheat at each OR still controls room temperature at reduced flow; check that the reheat coil and valve are controllable at low airflow.</li>
</ul>

<h2>Restoring occupied mode</h2>
<ol>
<li>On an occupancy signal, command supply and return valves to design airflow immediately.</li>
<li>Restore temperature and humidity setpoints.</li>
<li>Confirm pressure has returned to the occupied target and clear any mode indication at the room panel.</li>
<li>Many owners define a minimum time at full airflow before a case begins, to purge the room. Build that time into the scheduling logic.</li>
</ol>

<h2>Effects on the air handler</h2>
<ul>
<li><strong>Fan turndown:</strong> when several ORs set back at once, the AHU's total airflow falls substantially. Fan arrays with VFDs handle this well; check minimum stable fan speed and any surge risk at low flow.</li>
<li><strong>Coil control:</strong> cooling coil capacity must be controllable at low flow without overcooling or freezing preheat coils.</li>
<li><strong>Outdoor air:</strong> outdoor air must not fall below the minimum required for the rooms still occupied and the building pressurization balance.</li>
<li><strong>Duct static pressure reset:</strong> lower system airflow allows lower duct static setpoints, adding to the savings.</li>
</ul>
<p>Fan array part-load control is discussed in <a href="<?= url('guides/fan-array-control-sequences') ?>">fan array control sequences</a>.</p>

<h2>Commissioning the turndown mode</h2>
<ul>
<li>Test transitions in both directions for each OR.</li>
<li>Measure supply and return airflow and room pressure in setback.</li>
<li>Verify that a person entering the room restores occupied mode within the intended time.</li>
<li>Test with several ORs in setback at once to confirm AHU stability.</li>
<li>Trend operation for a full week to confirm real-world use matches the sequence.</li>
</ul>
<?php guide_end([
    ['Can operating room airflow be reduced at night?', 'ASHRAE 170 permits reduced air changes in unoccupied ORs as long as positive pressure is maintained at all times and design airflow is automatically restored when the room is occupied.'],
    ['How low can OR airflow go in unoccupied mode?', 'The allowable reduction depends on the edition of ASHRAE 170, the FGI Guidelines in force and any jurisdiction or owner requirements, some of which set a numeric minimum. Confirm before choosing a setback value.'],
    ['How do you keep OR pressure positive during setback?', 'Use pressure-independent supply and return valves that remain accurate at reduced flow, track return to supply with a fixed offset and monitor room pressure continuously with alarms.'],
    ['How much energy does OR turndown save?', 'Fan power falls roughly with the cube of airflow, so a 50% reduction cuts fan power to about one eighth of design, along with reductions in cooling, heating and reheat energy. Actual savings depend on hours of setback and system design.'],
]);
