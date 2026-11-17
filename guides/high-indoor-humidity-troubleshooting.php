<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('high-indoor-humidity-troubleshooting'); ?>
<p class="lede">Humid, clammy spaces in summer usually come from cooling equipment that satisfies the thermostat without removing enough moisture: oversized units that short-cycle, coils with too high a sensible heat ratio, fans that run continuously and re-evaporate coil water, or outdoor air and infiltration loads larger than the design assumed. Measure dew point first, then trace whether the moisture is coming in faster than the system takes it out.</p>

<h2>Step zero: measure the right thing</h2>
<p>Complaints of "humidity" often mix temperature and moisture. Take readings that separate them.</p>
<ol>
<li>Measure space dry-bulb and RH with a calibrated instrument and convert to dew point. A space at 72 F and 60 percent RH has a dew point near 57 F; at 76 F and 55 percent, about 59 F.</li>
<li>Measure supply air dry-bulb and RH at a diffuser near the AHU and convert to dew point.</li>
<li>Measure outdoor dew point at the same time.</li>
<li>Log space and supply conditions for at least several days, including nights and weekends.</li>
</ol>
<p>A space dew point above about 55 to 60 F in an occupied building usually means the system is not removing enough moisture. Typical targets are in <a href="<?= url('guides/humidity-requirements-by-space-type') ?>">humidity requirements by space type</a>.</p>

<h2>Symptom: supply air dew point too high</h2>
<p>If air leaving the unit is not much drier than the space, the coil is not dehumidifying.</p>
<h3>Cause: oversized equipment short-cycling</h3>
<p><strong>Check:</strong> trend compressor runtime or chilled water valve position. Short cycles, a few minutes on and off, never let the coil get cold enough or stay wet long enough to drain.</p>
<p><strong>Fix:</strong> reduce capacity through staging or variable speed compressors, add a minimum run time, or resize equipment. On chilled water, check valve sizing; an oversized valve hunts at low load.</p>
<h3>Cause: coil running warm</h3>
<p><strong>Check:</strong> measure chilled water supply temperature or DX suction temperature. Chilled water reset strategies that raise water temperature to save energy can eliminate latent capacity. Low refrigerant charge or a starved evaporator also raise coil temperature.</p>
<p><strong>Fix:</strong> limit chilled water reset based on space dew point. Repair refrigerant issues.</p>
<h3>Cause: coil sensible heat ratio too high for the load</h3>
<p><strong>Check:</strong> compare the coil's rated sensible heat ratio with the space's actual SHR. Equipment selected for high sensible capacity, such as high airflow per ton DX units, may have an SHR above 0.8, while spaces with many occupants need far less.</p>
<p><strong>Fix:</strong> reduce airflow across the coil in dehumidification mode, add a dehumidification sequence with reheat, or retrofit a wraparound heat pipe or dedicated outdoor air unit. The SHR concept is covered in <a href="<?= url('guides/sensible-heat-ratio-ahu-design') ?>">sensible heat ratio in AHU design</a>.</p>
<h3>Cause: fan running continuously with cycling cooling</h3>
<p><strong>Check:</strong> look at the fan mode. When the compressor stops but the fan keeps running, water on the coil re-evaporates into the supply air, raising humidity within minutes.</p>
<p><strong>Fix:</strong> cycle the fan with cooling, or add a fan-off delay short enough to stop re-evaporation. If continuous ventilation is required, handle it with a separate dehumidified outdoor air supply.</p>
<h3>Cause: air bypassing the coil</h3>
<p><strong>Check:</strong> inspect for gaps around the coil, open face and bypass dampers, and missing blank-offs.</p>
<p><strong>Fix:</strong> seal gaps; correct damper positions.</p>

<h2>Symptom: supply air is dry but the space is still humid</h2>
<p>If supply dew point is reasonable but the space is humid, more moisture is entering the space than the supply air can absorb.</p>
<h3>Cause: infiltration</h3>
<p><strong>Check:</strong> measure building pressure relative to outdoors. Negative pressure pulls humid outdoor air through the envelope. Check exhaust fans that run without matching makeup air.</p>
<p><strong>Fix:</strong> balance outdoor air and exhaust to keep the building slightly positive. Seal envelope leaks around doors, roof edges and penetrations.</p>
<h3>Cause: outdoor air higher than design</h3>
<p><strong>Check:</strong> measure actual outdoor airflow. Economizers stuck open or minimum positions set too high bring in large humid loads.</p>
<p><strong>Fix:</strong> repair the damper and reset minimums. Check the economizer high-limit so it does not open on humid days.</p>
<h3>Cause: internal moisture sources</h3>
<p><strong>Check:</strong> look for occupancy far above design, cooking, open water, plants, wet cleaning or processes.</p>
<p><strong>Fix:</strong> capture sources with local exhaust, or recalculate latent load and supply dew point; see <a href="<?= url('guides/dehumidification-load-calculation') ?>">calculating latent load and required supply dew point</a>.</p>
<h3>Cause: low airflow to the space</h3>
<p><strong>Check:</strong> measure supply airflow. Even dry air cannot remove enough moisture if there is too little of it.</p>
<p><strong>Fix:</strong> rebalance or increase airflow in dehumidification mode, paired with supply temperature reset or reheat to avoid overcooling.</p>

<h2>Symptom: humid at night or on mild days only</h2>
<p>This pattern is characteristic of systems controlled by temperature alone.</p>
<ul>
<li><strong>Mild, humid weather</strong> gives little sensible load. The thermostat is satisfied with little cooling, so little moisture is removed.</li>
<li><strong>Night setback</strong> may turn cooling off entirely while infiltration continues, and moisture accumulates in furnishings that release it the next morning.</li>
<li><strong>Fix:</strong> add a humidity-based override that runs cooling with reheat, or a dedicated outdoor air or dehumidification unit with its own dew point control. Keep the building's dew point below the setpoint during unoccupied hours too, especially in humid climates.</li>
</ul>

<h2>Signs the problem is getting serious</h2>
<ul>
<li>Condensation on supply diffusers or cold surfaces.</li>
<li>Musty odours or visible mould on walls, ceilings or furnishings.</li>
<li>Ceiling tiles sagging or stained.</li>
<li>Persistent space dew point above about 60 F.</li>
</ul>
<p class="warn">Prolonged high humidity damages finishes and supports mould growth. Treat persistent space dew points near or above 60 F as a priority, not a comfort tweak.</p>
<?php guide_end([
    ['Why is my building humid even though the AC is running?', 'Common causes are oversized equipment that short-cycles, a coil running warm, a coil sensible heat ratio too high for the load, fans that keep running and re-evaporate coil water, or more outdoor air and infiltration than the system was designed for.'],
    ['Does running the fan continuously increase humidity?', 'With cycling cooling, yes. When the compressor stops, water on the coil re-evaporates into the air the fan keeps moving. Cycle the fan with cooling or handle ventilation separately.'],
    ['What indoor dew point indicates a humidity problem?', 'A space dew point persistently above about 55 to 60 F in an occupied, air conditioned building usually means the system is not removing enough moisture, and above 60 F the risk of mould and condensation rises.'],
]);
