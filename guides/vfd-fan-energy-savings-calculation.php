<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('vfd-fan-energy-savings-calculation'); ?>
<p class="lede">To estimate annual VFD savings, split the year into airflow bins, calculate fan input power in each bin for the baseline control method and for the VFD, multiply by hours and add up. Use a part-load exponent of roughly 2 to 2.5 for VAV systems with a fixed static setpoint, not the ideal cube, and include motor and drive part-load losses, or the estimate will run high.</p>

<h2>The bin method</h2>
<p class="formula">Annual kWh = Σ [ P(design) × f(airflow fraction) × hours in bin ]</p>
<p class="formula">Savings = kWh(baseline) − kWh(VFD)</p>
<p>P(design) is fan system input power at design airflow, in kW. The function f gives input power as a fraction of design at each airflow fraction, for the control method in question. The bins come from a load profile: the number of operating hours spent near each airflow level.</p>

<h2>Step 1: build the load profile</h2>
<p>Good sources, in order of preference:</p>
<ol>
<li>Trend data from the existing system: fan speed, airflow or VAV box positions over a full year.</li>
<li>An hourly energy model of the building.</li>
<li>A typical profile for the building type, adjusted for schedule and climate.</li>
</ol>
<p>Four or five bins are usually enough. For this example the fan runs 4,000 hours per year:</p>
<table>
<thead><tr><th>Airflow fraction</th><th>Share of hours</th><th>Hours</th></tr></thead>
<tbody>
<tr><td>100%</td><td>10%</td><td>400</td></tr>
<tr><td>80%</td><td>30%</td><td>1,200</td></tr>
<tr><td>60%</td><td>40%</td><td>1,600</td></tr>
<tr><td>40%</td><td>20%</td><td>800</td></tr>
</tbody>
</table>

<h2>Step 2: choose a realistic VFD power curve</h2>
<p>The fan laws say power varies with the cube of speed on a system whose resistance is purely proportional to airflow squared. That ideal assumes the system curve passes through zero. The fan laws themselves are worked in <a href="<?= url('guides/fan-laws-calculation') ?>">applying the fan laws</a>.</p>
<p>A VAV system controlled to a fixed duct static pressure setpoint does not behave that way. Part of the system pressure is held constant at all airflows, so fan power falls more slowly. A simple way to represent this is:</p>
<p class="formula">f(r) = r^n × k(r)</p>
<p>where r is the airflow fraction, n is an exponent that reflects the control strategy, and k is a factor for the loss of motor and drive efficiency at part load. Practical values of n:</p>
<ul>
<li>About 2.0 to 2.5 for VAV with a fixed static setpoint, depending on how high the setpoint is relative to design pressure.</li>
<li>Approaching 2.5 to 3 with static pressure reset or in systems with little fixed pressure.</li>
<li>Close to 3 only for a fixed system with no pressure setpoint, such as speed-controlled constant-volume balancing.</li>
</ul>
<p>Static pressure reset is one of the biggest influences on actual savings; see <a href="<?= url('guides/duct-static-pressure-reset') ?>">duct static pressure reset</a>. The k factor comes from part-load motor and drive data, as worked in <a href="<?= url('guides/motor-part-load-efficiency') ?>">calculating motor and drive efficiency at part load</a>.</p>

<h2>Step 3: define the baseline</h2>
<p>Savings are only meaningful against a defined baseline. Common baselines are a constant-speed fan with discharge dampers, a fan with inlet vanes, or an existing constant-volume system. For damper and inlet vane control, take the power fraction at each airflow from the fan's own curve or manufacturer data, because the fan rides its curve rather than following a fan law.</p>
<p>In this example, the baseline is a constant-speed fan with inlet vanes. From the manufacturer's data for this fan, assume input power fractions of 1.00, 0.90, 0.78 and 0.66 at 100%, 80%, 60% and 40% airflow.</p>

<h2>Step 4: calculate both cases</h2>
<p>Design fan input power is 30 kW. For the VFD case, use n = 2.4 and k = 1.03, 1.02, 1.08 and 1.15 at the four bins; the 1.03 at full flow represents the drive's own loss, which the constant-speed baseline does not have.</p>
<table>
<thead><tr><th>Bin</th><th>Hours</th><th>Baseline fraction</th><th>Baseline kWh</th><th>r^2.4</th><th>VFD fraction</th><th>VFD kWh</th></tr></thead>
<tbody>
<tr><td>100%</td><td>400</td><td>1.00</td><td>12,000</td><td>1.000</td><td>1.030</td><td>12,360</td></tr>
<tr><td>80%</td><td>1,200</td><td>0.90</td><td>32,400</td><td>0.585</td><td>0.597</td><td>21,480</td></tr>
<tr><td>60%</td><td>1,600</td><td>0.78</td><td>37,440</td><td>0.294</td><td>0.317</td><td>15,220</td></tr>
<tr><td>40%</td><td>800</td><td>0.66</td><td>15,840</td><td>0.111</td><td>0.128</td><td>3,060</td></tr>
<tr><td><strong>Total</strong></td><td>4,000</td><td></td><td><strong>97,680</strong></td><td></td><td></td><td><strong>52,120</strong></td></tr>
</tbody>
</table>
<p>Annual savings = 97,680 − 52,120 = <strong>45,560 kWh</strong>, about 47% of baseline fan energy. At an illustrative $0.12 per kWh, that is roughly $5,470 a year, before any demand charge effects.</p>

<h2>How much the cube law overstates savings</h2>
<p>Using the pure cube law with no efficiency penalty, the VFD case would come to 12,000 + 18,432 + 10,368 + 1,536 = 42,336 kWh, and savings would be 55,344 kWh. That is about 21% higher than the more realistic estimate. Errors of that size can make a marginal project look attractive and then fail its measurement and verification.</p>
<p class="note">If the existing system is constant volume and the project converts it to VAV, the savings come from reducing airflow, not just from adding a drive. The airflow profile must reflect what the new controls will actually do.</p>

<h2>Sensitivity: which assumptions move the answer most</h2>
<p>Before presenting a single savings figure, rerun the calculation with the uncertain inputs changed one at a time. In most fan studies, three inputs dominate. The load profile matters most, because moving hours from the 60% bin to the 80% bin changes savings far more than any efficiency assumption. The exponent comes next: changing n from 2.4 to 2.0 noticeably reduces savings at low airflow. Third is the baseline power curve, since inlet vanes, discharge dampers and riding the fan curve behave quite differently. Showing a range, such as a low, expected and high case, gives the owner a more honest picture than one number with false precision.</p>

<h2>Checks before reporting savings</h2>
<ul>
<li>State the baseline control method and the source of its power fractions.</li>
<li>State the exponent and why it was chosen.</li>
<li>Include motor and drive part-load efficiency.</li>
<li>Check that the minimum airflow bin respects ventilation and fan stability limits.</li>
<li>Consider demand savings separately from energy savings.</li>
<li>Where incentives or performance contracts depend on the result, plan measurement after installation.</li>
</ul>
<?php guide_end([
    ['How do I calculate energy savings from a VFD on a fan?', 'Divide the year into airflow bins, calculate fan input power in each bin for the baseline control and for the VFD, multiply by hours, and subtract the totals. Use realistic part-load exponents and include motor and drive efficiency.'],
    ['Does the cube law apply to VAV fan energy?', 'Not exactly. With a fixed duct static setpoint, part of the pressure stays constant, so power falls more slowly than the cube. Exponents of about 2 to 2.5 are more realistic for that case.'],
    ['What baseline should VFD savings be compared against?', 'Use the control method actually being replaced, such as discharge dampers, inlet vanes or constant volume. Take its part-load power from the fan curve or manufacturer data.'],
    ['Why do actual VFD savings sometimes fall short of estimates?', 'Common reasons are using the ideal cube law, ignoring a high static pressure setpoint, ignoring motor and drive part-load losses, and assuming more low-airflow hours than the building actually has.'],
]);
