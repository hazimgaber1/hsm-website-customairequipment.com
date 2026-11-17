<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('unoccupied-setback-night-purge'); ?>
<p class="lede">During unoccupied hours, an air handler normally stays off and restarts only if a zone drifts past a wider setback (heating) or setup (cooling) limit. Night purge, also called night flush, is a separate optional mode that runs the fans with cool outdoor air before dawn to remove heat stored in the building, reducing mechanical cooling the next day. Both need clear entry and exit conditions so they save energy rather than waste it.</p>

<h2>Unoccupied setback and setup</h2>
<p>When the building is unoccupied, zone setpoints widen. Typical examples are a heating setback of around 60 °F (16 °C) and a cooling setup of around 85 °F (29 °C), though owners and codes set the actual values. The AHU stays off as long as all zones stay within those limits.</p>
<p>When a zone drifts outside its unoccupied limit, the controls start the unit in an unoccupied heating or cooling mode:</p>
<ul>
<li><strong>Setback (heating) mode:</strong> outdoor air dampers closed, return dampers open, supply fan on, heating active. Zones heat back to their setback setpoint plus a small differential, then the unit shuts off.</li>
<li><strong>Setup (cooling) mode:</strong> outdoor air dampers closed unless free cooling is available, cooling active. The unit runs until zones fall below the setup limit minus a differential.</li>
<li><strong>Exhaust fans</strong> generally off, to avoid drawing in unconditioned air.</li>
</ul>
<p>Requirements for setback controls appear in energy codes such as ASHRAE 90.1 and the NECB for many system types; check the edition adopted in your jurisdiction.</p>
<p class="note">Set a minimum number of zones needed to start the AHU in setback or setup, or weight zones by importance. Otherwise one cold corner office can start a large unit at 2:00 a.m. to heat the whole building.</p>

<h3>Freeze protection setback</h3>
<p>A separate, lower limit protects the building and the equipment itself. If any zone, or the unit's interior, falls toward freezing, the unit starts in heating regardless of other settings. This is distinct from the coil low-limit safety, which acts when the fan is running.</p>

<h2>What night purge does</h2>
<p>Buildings absorb heat during the day in structure, furniture and finishes. Overnight, that heat slowly releases. In climates with cool nights, bringing in cool outdoor air during unoccupied hours can remove a portion of it, so the building starts the day cooler and needs less mechanical cooling.</p>
<p>The trade-off is fan energy. Night purge runs fans for hours with no mechanical cooling, so it pays only when the cooling energy saved the next day exceeds the fan energy spent overnight. It works best with:</p>
<ul>
<li>Large temperature differences between outdoor air and building temperature at night.</li>
<li>Heavy buildings with exposed thermal mass, such as concrete slabs.</li>
<li>Efficient fans, because fan energy is the cost.</li>
<li>Cooling-dominated seasons with mild, dry nights.</li>
</ul>

<h2>Typical night purge entry conditions</h2>
<p>All of these are generally required before purge starts:</p>
<ol>
<li>Building unoccupied, within a set purge window (for example, a few hours before the expected optimal start time).</li>
<li>Previous day was cooling-dominated, or space temperature is above a threshold, indicating stored heat.</li>
<li>Outdoor temperature is below space temperature by a meaningful margin, for example several degrees.</li>
<li>Outdoor air dew point or humidity ratio below a limit, so moisture is not pumped into the building overnight.</li>
<li>Outdoor temperature above a low limit, to avoid overcooling or freezing risk.</li>
<li>Economizer high-limit conditions satisfied.</li>
</ol>

<h2>Night purge operation and exit</h2>
<p>When active:</p>
<ul>
<li>Outdoor air dampers fully open, return dampers closed (100 percent outdoor air).</li>
<li>Relief dampers or relief fans open to let the air out; building pressure control remains active.</li>
<li>Supply fan runs at a reduced or set speed. VAV boxes open to a fixed purge position or to maximum airflow.</li>
<li>Mechanical cooling and heating disabled.</li>
</ul>
<p>Purge ends when any of these happen:</p>
<ol>
<li>Space temperature falls to a purge setpoint, set above the occupied heating setpoint so the morning does not start with a heating call.</li>
<li>Outdoor conditions no longer meet entry conditions.</li>
<li>The purge window ends, or optimal start begins.</li>
</ol>
<p class="warn">If purge cools spaces below the occupied heating setpoint, the building may start the day in heating, cancelling the benefit. Set the purge stop point safely above the occupied heating setpoint.</p>

<h2>Worked comparison</h2>
<p>A 40,000 cfm unit draws about 30 kW at purge speed and runs for 4 hours: 120 kWh of fan energy. If the purge reduces the next day's cooling load enough to save, for example, 300 ton-hours, and the plant uses about 0.7 kW per ton including auxiliaries, the saving is about 210 kWh. Net saving is about 90 kWh. On a night with only a small temperature difference, the cooling saved could fall below 120 kWh and purge would lose money. This is why the entry conditions and fan speed matter; reducing purge fan speed cuts fan power roughly with the cube of speed, while airflow falls only linearly.</p>

<h2>Night purge for air quality</h2>
<p>A different use of the word "purge" is flushing a building with outdoor air to remove contaminants, for example after construction or before occupancy in new buildings. That is driven by air quality requirements rather than cooling, and it may run in weather that a cooling purge would avoid. Building flush-out practices are described in <a href="<?= url('guides/building-flush-out-filter-replacement') ?>">building flush-out and filter replacement</a>.</p>
<p>The morning transition from unoccupied mode to occupied mode is handled by optimal start, covered in <a href="<?= url('guides/optimal-start-morning-warmup') ?>">optimal start, morning warm-up and cool-down</a>. Economizer high-limit choices that also govern purge are compared in <a href="<?= url('guides/economizer-high-limit-controls') ?>">economizer high-limit controls</a>.</p>
<?php guide_end([
    ['What is night purge in HVAC?', 'Night purge runs an air handler with 100 percent outdoor air during cool, dry nights to remove heat stored in the building. It reduces the next day\'s mechanical cooling, but only saves energy if the cooling saved exceeds the fan energy used.'],
    ['What are typical unoccupied setback temperatures?', 'Common examples are a heating setback near 60 degrees F and a cooling setup near 85 degrees F, but the owner\'s requirements and the energy code adopted locally set the actual values.'],
    ['Why should night purge stop above the heating setpoint?', 'If purge overcools spaces below the occupied heating setpoint, the system will heat in the morning, cancelling the benefit. Stopping purge a few degrees above the heating setpoint avoids this.'],
]);
