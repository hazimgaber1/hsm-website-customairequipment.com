<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('low-recovery-effectiveness-diagnosis'); ?>
<p class="lede">When a recovery device under-performs, the cause is usually one of five things: the measurement is wrong, the device is fouled, air is bypassing it, the controls are limiting it, or the airflows are not what the selection assumed. Measure first, then work through each cause in order of how easy it is to check.</p>

<h2>Step zero: prove the problem with good measurements</h2>
<p>Many low-effectiveness complaints come from bad sensors or a single misleading reading. Before touching equipment:</p>
<ol>
<li>Take simultaneous readings of outdoor air entering, supply leaving, exhaust entering and, if possible, exhaust leaving. Use a calibrated handheld instrument as a reference.</li>
<li>Traverse the supply leaving face with several readings. Stratification downstream of a wheel or plate is common, and a single sensor in a hot or cold band can read 5 F or more off the average.</li>
<li>Compute sensible effectiveness with the measured temperatures and measured airflows, not design flows. The method is in <a href="<?= url('guides/recovery-effectiveness-calculation') ?>">calculating energy recovery effectiveness</a>.</li>
<li>Do the test when the temperature difference between outdoor and exhaust is large, at least 30 F if possible. With small differences, sensor error dominates.</li>
<li>Check an energy balance: heat gained by the supply should roughly equal heat lost by the exhaust after adjusting for flow. A large mismatch points to measurement error or leakage.</li>
</ol>

<h2>Symptom: effectiveness low at all times</h2>
<h3>Cause: fouled media or core</h3>
<p><strong>Check:</strong> measure pressure drop across each side and compare with the selection at measured airflow. A rise of 20 to 30 percent or more over clean values indicates fouling. Inspect both faces with a light.</p>
<p><strong>Fix:</strong> clean per the manufacturer's method. Then find why it fouled: missing or bypassed filters, filters downstream rather than upstream, or exhaust containing lint, grease or dust that was not anticipated.</p>
<h3>Cause: bypass damper leaking</h3>
<p><strong>Check:</strong> with the bypass commanded closed, inspect the blades and seals and measure velocity through the bypass opening. Confirm the actuator actually reaches full closure and that the linkage is not slipping.</p>
<p><strong>Fix:</strong> adjust or replace the actuator and linkage, replace blade and edge seals, or upgrade to a low-leakage damper.</p>
<h3>Cause: internal bypass around the device</h3>
<p><strong>Check:</strong> look for gaps between the device frame and the casing, missing blank-off panels, or open access around a wheel cassette. Smoke testing with the fans running shows paths clearly.</p>
<p><strong>Fix:</strong> seal gaps with gaskets or blank-offs. Small open areas carry a lot of air at the pressure differences inside a unit.</p>
<h3>Cause: airflows differ from design</h3>
<p><strong>Check:</strong> measure supply and exhaust airflow. An exhaust far below supply limits what can be recovered, and an airflow far above design raises face velocity and lowers effectiveness.</p>
<p><strong>Fix:</strong> rebalance. If the building cannot return enough exhaust to the unit, the selection needs to be re-evaluated at the real flows.</p>

<h2>Symptom: effectiveness low only at certain times</h2>
<h3>Cause: frost control active</h3>
<p><strong>Check:</strong> trend wheel speed or bypass position against outdoor temperature. If recovery drops at temperatures well above the expected frost threshold, the setpoint may be too conservative, or the sensor driving it may be reading low.</p>
<p><strong>Fix:</strong> recalculate the threshold for actual indoor humidity and adjust the setpoint. Verify the exhaust leaving sensor location.</p>
<h3>Cause: economizer or mode logic</h3>
<p><strong>Check:</strong> look for periods where the wheel slows or bypass opens while outdoor air is cold and the outdoor air damper is at minimum. That indicates the sequence is treating recovery and economizer as overlapping.</p>
<p><strong>Fix:</strong> correct the sequence so recovery is the first stage of heating and the economizer opens only after recovery is fully off. The intended logic is outlined in <a href="<?= url('guides/wheel-economizer-bypass-operation') ?>">running energy recovery during economizer mode</a>.</p>
<h3>Cause: wheel speed below design</h3>
<p><strong>Check:</strong> compare commanded and actual rotational speed. If the drive is commanded to full speed but the wheel turns slowly, the problem is mechanical.</p>
<p><strong>Fix:</strong> mechanical drive and seal problems are covered separately in <a href="<?= url('guides/wheel-drive-seal-troubleshooting') ?>">troubleshooting wheel drives, belts and seals</a>.</p>

<h2>Symptom: sensible fine, latent low</h2>
<p>For enthalpy wheels, compare latent effectiveness separately using humidity ratios.</p>
<ul>
<li><strong>Desiccant contamination.</strong> Oily aerosols, silicone vapours and some cleaning chemicals block desiccant pores. Sensible performance holds while latent falls. Check with the manufacturer about restoration or media replacement.</li>
<li><strong>Humidity sensor error.</strong> RH sensors drift more than temperature sensors. Verify with a calibrated reference before drawing conclusions.</li>
<li><strong>Wrong media installed.</strong> On replacement wheels, confirm the media is the desiccant-coated type and not a sensible-only replacement.</li>
</ul>

<h2>Symptom: effectiveness fine, but energy savings missing</h2>
<p>If the device performs as rated but the utility bills do not show savings, look beyond the device:</p>
<ul>
<li>Heating or cooling coils downstream may be fighting each other, wasting the recovered energy.</li>
<li>Supply air temperature setpoint may have been raised so the heating coil still runs.</li>
<li>Outdoor air may be much higher than design, so total load rose even as recovery worked.</li>
<li>Run hours may differ from the savings estimate.</li>
</ul>

<h2>A quick diagnostic order</h2>
<ol>
<li>Verify sensors and measure true effectiveness.</li>
<li>Read trends of wheel speed, bypass position and mode.</li>
<li>Measure airflows on both sides.</li>
<li>Measure pressure drops and inspect for fouling.</li>
<li>Inspect bypass dampers and casing seals for leakage.</li>
<li>For latent problems, verify RH sensors, then the media.</li>
</ol>
<?php guide_end([
    ['Why is my energy recovery effectiveness lower than rated?', 'Common causes are sensor error or stratification, fouled media, leaking bypass dampers or gaps around the device, airflows different from design, and controls that limit recovery through frost or economizer logic.'],
    ['How do I measure energy recovery effectiveness in the field?', 'Measure outdoor, supply leaving and exhaust entering temperatures at the same time, traverse the supply face to average out stratification, and use measured airflows. Test when the outdoor to exhaust difference is large.'],
    ['Why would an enthalpy wheel lose latent performance but keep sensible?', 'The desiccant coating may be contaminated by oily aerosols or silicone vapours, or RH sensors may have drifted. Verify the sensors first, then consult the manufacturer about the media.'],
]);
