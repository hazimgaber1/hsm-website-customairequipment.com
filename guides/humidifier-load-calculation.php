<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('humidifier-load-calculation'); ?>
<p class="lede">The humidifier must add enough water to bring all outdoor air entering the space, by ventilation and infiltration, up to the indoor humidity ratio, less any moisture generated inside. For standard air, lb/h of water equals 4.5 × cfm × the humidity ratio difference in lb/lb, or cfm × the difference in grains per pound ÷ 1,556.</p>

<h2>The governing equation</h2>
<p>At steady state, the moisture leaving the building in exhaust and exfiltration must be replaced. The humidifier supplies whatever the outdoor air and internal sources do not.</p>
<p class="formula">Humidifier load (lb/h) = 4.5 × CFM_OA × (W_room − W_OA) − internal moisture gains − recovered moisture</p>
<p>Where:</p>
<ul>
<li><strong>4.5</strong> converts standard cfm to pounds of dry air per hour (0.075 lb/ft³ × 60 min/h).</li>
<li><strong>W</strong> is the humidity ratio in pounds of water per pound of dry air.</li>
<li><strong>CFM_OA</strong> includes ventilation air through the AHU and infiltration through the envelope.</li>
</ul>
<p>In grains (7,000 grains per pound):</p>
<p class="formula">Humidifier load (lb/h) = CFM_OA × (gr_room − gr_OA) ÷ 1,556</p>
<p class="note">Correct the 4.5 factor for altitude. At 5,000 ft the air density is roughly 83 percent of sea level, so the factor drops to about 3.7 for actual cfm.</p>

<h2>Step-by-step method</h2>
<ol>
<li><strong>Set the indoor design condition.</strong> Choose winter indoor dry-bulb and RH from the space requirements and convert to humidity ratio. Check that the envelope can tolerate it; see <a href="<?= url('guides/max-winter-indoor-rh-calculation') ?>">calculating maximum winter indoor RH</a>.</li>
<li><strong>Set the outdoor design condition.</strong> Use the winter design dry-bulb and its coincident humidity ratio. In cold climates, outdoor air at design is nearly dry, typically under 5 gr/lb. The worst humidification hour may not be the coldest hour, since slightly milder air can be drier in some climates, so check the humidification design data if available.</li>
<li><strong>Determine outdoor airflow.</strong> Use the maximum ventilation airflow during humidification hours plus estimated infiltration. If the economizer could open above minimum during humidification season, either lock it out or include the extra air.</li>
<li><strong>Calculate the raw load</strong> with the equation above.</li>
<li><strong>Subtract internal gains</strong> where they are reliable: people, plants, processes and cooking. Ignore them for spaces that may be unoccupied when humidity must be maintained, such as museums at night.</li>
<li><strong>Subtract recovered moisture</strong> if an enthalpy wheel or membrane recovers moisture from the exhaust.</li>
<li><strong>Add a margin</strong> for control and pickup, commonly 10 to 20 percent, and round to the next available humidifier size.</li>
</ol>

<h2>Worked example</h2>
<p>An office AHU brings in 10,000 cfm of outdoor air at the winter design of −4 F. Infiltration is estimated at 1,000 cfm. The indoor target is 72 F and 35 percent RH.</p>
<p><strong>Indoor humidity ratio.</strong> Saturation pressure at 72 F is about 0.389 psia. At 35 percent RH, vapour pressure is 0.136 psia. W = 0.622 × 0.136 ÷ (14.696 − 0.136) = 0.00581 lb/lb, or 40.7 gr/lb.</p>
<p><strong>Outdoor humidity ratio.</strong> At −4 F even saturated air holds only about 4 gr/lb. Use 4 gr/lb.</p>
<p><strong>Raw load.</strong> 11,000 × (40.7 − 4) ÷ 1,556 = 11,000 × 36.7 ÷ 1,556 ≈ 259 lb/h.</p>
<p><strong>Internal gains.</strong> 150 occupants at about 0.2 lb/h each give roughly 30 lb/h. Because the building may be humidified before occupancy, the designer counts only half: 15 lb/h.</p>
<p><strong>Recovered moisture.</strong> No enthalpy recovery on this unit.</p>
<p><strong>Net load.</strong> 259 − 15 = 244 lb/h. With a 15 percent margin, select about 280 lb/h.</p>
<p>If the same unit had an enthalpy wheel with 65 percent latent effectiveness on 9,000 cfm of exhaust, the recovered moisture would be about 0.65 × 9,000 × 36.7 ÷ 1,556 ≈ 138 lb/h, cutting the humidifier to roughly half the size.</p>

<h2>Checking the load at the humidifier</h2>
<p>The humidifier sees the supply air, not outdoor air. A second check is to compute the moisture added across the humidifier itself:</p>
<p class="formula">Humidifier output (lb/h) = 4.5 × CFM_supply × (W_leaving − W_entering)</p>
<p>W_entering is the mixed or preconditioned air humidity ratio entering the humidifier. W_leaving must be slightly above the room humidity ratio to offset dry infiltration. The two methods should agree within the margin. If they do not, check the outdoor air fraction or the infiltration estimate.</p>
<p>The leaving condition also tells you whether the supply air can hold that moisture. If the target leaving RH exceeds about 80 to 90 percent at supply temperature, absorption will be poor and wetting likely. Placement decisions follow from that; see <a href="<?= url('guides/humidifier-placement-in-ahu') ?>">placing a humidifier within the AHU</a>.</p>

<h2>Things that make the real load larger</h2>
<ul>
<li>Economizer operation during humidification hours, which can triple the outdoor air.</li>
<li>Exhaust fans not on the AHU, which pull dry infiltration through the envelope.</li>
<li>Hygroscopic materials such as paper, wood and textiles absorbing moisture during pickup after a setback.</li>
<li>Higher setpoints than the design value, chosen later by operators.</li>
</ul>
<p class="warn">If humidity must be held 24 hours a day, size for the outdoor air the system brings in at night, which may differ from the occupied value, and do not count occupant moisture gains.</p>

<h2>Splitting the load between units</h2>
<p>Where several AHUs serve one humidified building, size each humidifier for its own outdoor air and its share of infiltration. A common error is to calculate a building total and divide it equally, which leaves units with high outdoor air fractions short and others oversized. If one unit is a dedicated outdoor air unit and the others recirculate, the outdoor air unit usually carries most of the humidification load.</p>

<h2>Expressing the result</h2>
<p>Put the result on the schedule as lb/h (kg/h) at stated entering and leaving conditions, with the supply airflow and the steam or water source. For electric steam generators, convert to kW at roughly 0.33 to 0.35 kW per lb/h so electrical service can be sized.</p>
<?php guide_end([
    ['How do I calculate humidifier capacity in lb/hr?', 'Multiply outdoor airflow in cfm, including infiltration, by the difference between indoor and outdoor humidity ratio in grains per pound, and divide by about 1,556. Subtract reliable internal moisture gains and any moisture recovered by an enthalpy device.'],
    ['What outdoor condition should I use for humidifier sizing?', 'Use the winter design condition with its coincident humidity ratio, which is usually very dry in cold climates. Check humidification design data if available, since the driest hour is not always the coldest.'],
    ['Does an enthalpy wheel reduce humidifier size?', 'Yes. An enthalpy wheel returns part of the exhaust moisture to the outdoor air. With typical latent effectiveness, it can cut the humidifier load roughly in half.'],
]);
