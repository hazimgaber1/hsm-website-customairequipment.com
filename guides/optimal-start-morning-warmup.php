<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('optimal-start-morning-warmup'); ?>
<p class="lede">Optimal start calculates how early to start an air handler so that spaces reach their occupied setpoints just as occupancy begins, rather than at a fixed early hour. Morning warm-up and cool-down are the operating modes used during that recovery period: outdoor air dampers stay closed, the unit recirculates, and heating or cooling runs at full capacity to bring spaces back from their unoccupied setpoints.</p>

<h2>Why a fixed start time wastes energy</h2>
<p>A schedule that starts every unit at 5:00 a.m. for a 7:00 a.m. occupancy is chosen for the coldest or hottest morning. On a mild morning, spaces reach setpoint within minutes and the unit then runs for an hour or more conditioning an empty building. Conversely, after a long weekend in extreme weather, a fixed start may be too late. Optimal start adapts the start time to the actual conditions each day.</p>

<h2>How optimal start algorithms work</h2>
<p>The basic idea is to estimate the recovery time from the temperature difference to be recovered and the rate at which the system can change space temperature:</p>
<p class="formula">Start time = Occupancy time − (ΔT to recover ÷ Recovery rate)</p>
<p>where ΔT is the difference between current space temperature and occupied setpoint, and recovery rate is in degrees per hour. The challenge is that recovery rate depends on outdoor temperature, building mass, how long the building has been unoccupied, and the capacity of the heating or cooling plant.</p>
<p>Common approaches:</p>
<ul>
<li><strong>Fixed coefficients:</strong> the engineer estimates recovery rates for heating and cooling, sometimes as a function of outdoor temperature. Simple but rarely accurate.</li>
<li><strong>Adaptive learning:</strong> the controller records each day how long recovery actually took, compares it with its prediction, and adjusts its rate estimate. Over days or weeks it converges on the building's real behaviour.</li>
<li><strong>Zone-based calculation:</strong> each zone or zone group estimates its own required start time, and the AHU starts at the earliest time required by its zones. This is the approach in <a href="<?= url('guides/ashrae-guideline-36-sequences') ?>">ASHRAE Guideline 36</a>, which also limits the maximum early start.</li>
</ul>
<p><strong>Example:</strong> a zone is at 62 °F and the occupied heating setpoint is 70 °F, so 8 °F must be recovered. The learned heating recovery rate at today's outdoor temperature is 4 °F per hour. Required lead time is 8 ÷ 4 = 2 hours, so for a 7:00 a.m. occupancy, start at 5:00 a.m. On a milder morning with the zone at 66 °F and a rate of 5 °F per hour, the lead time is 48 minutes and the unit starts at 6:12 a.m.</p>
<p class="note">Set a maximum lead time. Without it, a failed sensor or an extreme weekend can start units in the middle of the night.</p>

<h2>Morning warm-up mode</h2>
<p>Warm-up is used when zones are below their occupied heating setpoints before occupancy. Typical actions:</p>
<ul>
<li><strong>Outdoor air dampers closed</strong>, return dampers fully open. The building is unoccupied, so ventilation is not yet required, and heating cold outdoor air would slow recovery and waste energy.</li>
<li><strong>Exhaust fans off</strong>, where they are not needed for safety or process, to avoid drawing in unconditioned air.</li>
<li><strong>Supply fan on</strong> at the speed needed to deliver heating air to the zones.</li>
<li><strong>Heating coil active</strong>, with supply air temperature setpoint raised to a warm-up value.</li>
<li><strong>VAV boxes</strong> in heating mode, typically at their heating maximum airflow, with reheat available.</li>
<li><strong>Cooling disabled.</strong></li>
</ul>
<p>For central-heat systems (where the AHU heating coil does the heating rather than terminal reheat), warm-up is the main way to heat the building and the supply temperature can be quite warm. For terminal reheat systems, the AHU may supply neutral air and let the boxes heat.</p>

<h2>Cool-down mode</h2>
<p>Cool-down is used when zones are above their occupied cooling setpoints before occupancy:</p>
<ul>
<li>Outdoor air dampers closed unless the economizer high limit allows free cooling, in which case outdoor air can be used to cool.</li>
<li>Supply air temperature at its minimum cooling setpoint.</li>
<li>VAV boxes at cooling maximum airflow.</li>
<li>Heating disabled.</li>
</ul>
<p>Some designers use cool-down only when the building has a cooling plant ready to run early; others limit it to avoid demand charges from early chiller starts. Check how the utility rate structure treats early-morning electrical demand.</p>

<h2>Ending the recovery period</h2>
<p>Warm-up or cool-down ends when either:</p>
<ol>
<li>Zones reach their occupied setpoints (often defined as a set fraction of zones, or all critical zones), or</li>
<li>The scheduled occupancy time arrives.</li>
</ol>
<p>At that point the unit switches to occupied mode: outdoor air dampers open to minimum ventilation, exhaust fans start, and normal SAT and static pressure resets begin. If the building is not quite at setpoint by occupancy, ventilation still starts on time; the code requirement for ventilation during occupancy is not deferred for comfort recovery.</p>
<p>Some owners also require a pre-occupancy ventilation period to dilute contaminants that accumulated overnight. That runs before occupancy with outdoor air open and is separate from warm-up logic.</p>

<h2>What to check during commissioning</h2>
<ul>
<li>The algorithm uses the correct occupancy schedule, including holidays.</li>
<li>Recovery-time predictions are being logged and compared with actual results, so adaptive learning can be verified.</li>
<li>Maximum lead time and minimum lead time are set.</li>
<li>Outdoor dampers remain closed in warm-up and cool-down unless economizer conditions apply.</li>
<li>The transition to occupied mode is smooth and does not trip the low-limit by suddenly opening outdoor air in cold weather; see <a href="<?= url('guides/low-limit-freeze-stat-sequences') ?>">low-limit freeze-stat sequences</a>.</li>
</ul>
<p>What the unit does during the unoccupied hours before optimal start begins, including setback and night purge, is covered in <a href="<?= url('guides/unoccupied-setback-night-purge') ?>">unoccupied setback and night purge sequences</a>.</p>
<?php guide_end([
    ['What is optimal start in HVAC?', 'Optimal start calculates how early to start heating or cooling so spaces reach their occupied setpoints exactly when occupancy begins. It uses the current space temperature and a learned recovery rate instead of a fixed early start time.'],
    ['Should outdoor air dampers be open during morning warm-up?', 'Usually no. The building is unoccupied, so ventilation is not required yet, and keeping outdoor air closed speeds recovery and saves energy. Outdoor air opens to minimum when occupied mode begins.'],
    ['How does adaptive optimal start learn?', 'Each day it compares the predicted recovery time with the actual time spaces took to reach setpoint, then adjusts its recovery rate estimate. Over time the predictions converge on the building\'s real thermal response.'],
]);
