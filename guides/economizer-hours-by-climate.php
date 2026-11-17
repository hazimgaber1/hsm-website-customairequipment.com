<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('economizer-hours-by-climate'); ?>
<p class="lede">To estimate economizer hours, take hourly or binned weather data for the site, set the outdoor temperature (dry bulb for airside, wet bulb for waterside and evaporative) below which the economizer carries the full load, and count the hours in each bin. Hours between that limit and the return or chilled water return temperature are partial economizer hours. Apply humidity limits before counting airside hours.</p>

<h2>Weather data sources</h2>
<p>Use a typical-year hourly file for the site or the nearest representative station. In the U.S., TMY (typical meteorological year) files are widely used. In Canada, CWEC (Canadian Weather year for Energy Calculation) files serve the same purpose. ASHRAE also publishes climatic design data and binned statistics for many stations. Typical-year files represent average conditions; for resilience checks, look at extreme years as well. Design-day values for sizing equipment come from separate sources described in <a href="<?= url('guides/outdoor-design-conditions-ashrae-climate-data') ?>">outdoor design conditions from ASHRAE climate data</a>.</p>
<p>Bin the 8,760 hours into temperature ranges, commonly 5°F (or 2 to 3 K) wide. For airside economizers, bin by dry bulb and also track coincident dew point. For waterside economizers and evaporative systems, bin by wet bulb.</p>

<h2>Setting the thresholds</h2>
<h3>Direct airside economizer</h3>
<p class="formula">Full economizer when: T outdoor DB ≤ T supply setpoint − Fan heat rise, and dew point and RH within limits</p>
<p class="formula">Partial economizer when: T supply − Fan heat rise < T outdoor DB < T return</p>
<p>In the partial range, 100% outdoor air still costs less to cool than return air, so the coil handles only the difference. Above the return temperature, the unit recirculates. Hours with outdoor dew point above the envelope limit are removed from both full and partial counts. The control limits involved are explained in <a href="<?= url('guides/airside-economizer-data-centers') ?>">airside economizers for data centers</a>.</p>
<h3>Waterside economizer with cooling towers</h3>
<p class="formula">Full economizer when: T outdoor WB ≤ T CHW supply − Heat exchanger approach − Tower approach</p>
<p>Partial economizer applies when the tower can precool the chilled water return but not reach the supply setpoint, if the plant is piped for series operation.</p>

<h2>Worked example: airside</h2>
<p>An illustrative site has the binned hours below (dry bulb, with hours above a 59°F dew point limit already counted separately). Design conditions: supply setpoint 75°F, fan heat rise 1.5°F, return 95°F. Full economizer threshold: 75 − 1.5 = 73.5°F. Use 73°F as the bin boundary for simplicity.</p>
<table>
<thead><tr><th>Dry bulb bin (°F)</th><th>Total hours</th><th>Hours with dew point above limit</th><th>Usable hours</th><th>Mode</th></tr></thead>
<tbody>
<tr><td>Below 33</td><td>1,950</td><td>0</td><td>1,950</td><td>Full</td></tr>
<tr><td>33 to 52</td><td>2,400</td><td>0</td><td>2,400</td><td>Full</td></tr>
<tr><td>53 to 72</td><td>2,850</td><td>420</td><td>2,430</td><td>Full</td></tr>
<tr><td>73 to 94</td><td>1,500</td><td>760</td><td>740</td><td>Partial</td></tr>
<tr><td>95 and above</td><td>60</td><td>20</td><td>0</td><td>Mechanical</td></tr>
<tr><td><strong>Total</strong></td><td><strong>8,760</strong></td><td><strong>1,200</strong></td><td></td><td></td></tr>
</tbody>
</table>
<ul>
<li>Full economizer hours: 1,950 + 2,400 + 2,430 = 6,780 hours (77% of the year)</li>
<li>Partial economizer hours: 740 hours (8%)</li>
<li>Mechanical only: 1,200 dew point-excluded hours + 60 hours above return = 1,260 hours, less the 20 hot hours already counted in the dew point column, giving 1,240 hours (14%)</li>
</ul>
<p>Check: 6,780 + 740 + 1,240 = 8,760.</p>
<p class="note">Partial hours do not save as much as full hours. To estimate energy, compute the coil load in each partial bin using the difference between return and outdoor enthalpy, rather than counting partial hours as free.</p>

<h2>Worked example: waterside</h2>
<p>The same site uses a chilled water plant with 65°F chilled water supply, a 3°F plate heat exchanger approach and a 7°F tower approach. Full waterside economizer threshold: 65 − 3 − 7 = 55°F wet bulb. Partial economizer, with the tower precooling the 80°F chilled water return in series, extends up to roughly 80 − 3 − 7 = 70°F wet bulb.</p>
<table>
<thead><tr><th>Wet bulb bin (°F)</th><th>Hours</th><th>Mode</th></tr></thead>
<tbody>
<tr><td>Below 40</td><td>3,600</td><td>Full</td></tr>
<tr><td>40 to 54</td><td>2,300</td><td>Full</td></tr>
<tr><td>55 to 69</td><td>2,500</td><td>Partial</td></tr>
<tr><td>70 and above</td><td>360</td><td>Mechanical</td></tr>
</tbody>
</table>
<p>Full: 5,900 hours (67%); partial: 2,500 hours (29%); mechanical: 360 hours (4%). Raising chilled water supply to 70°F would move the full threshold to 60°F wet bulb and shift a portion of the partial hours to full.</p>

<h2>Common errors in the count</h2>
<ul>
<li>Ignoring fan heat, which raises the effective threshold the outdoor air must meet</li>
<li>Counting airside hours on dry bulb alone in a humid climate</li>
<li>Using an airport station far from the site or at a very different elevation</li>
<li>Treating partial hours as fully free</li>
<li>Forgetting changeover deadbands, which keep the system in one mode for a while after conditions cross a threshold</li>
</ul>
<h2>Sensitivity to setpoints</h2>
<p>Each degree of supply air or chilled water temperature moves the threshold by a degree and moves the hours in that bin. In moderate climates with many hours near the threshold, a few degrees can shift hundreds of hours. Run the calculation at several setpoints to show the owner the trade-off against server inlet conditions, which are bounded by the envelope in <a href="<?= url('guides/ashrae-tc-9-9-thermal-guidelines') ?>">ASHRAE TC 9.9 thermal guidelines</a>.</p>

<p>Present the result to the owner as a small table of hours by mode for each candidate setpoint, alongside the matching server inlet conditions. That makes the trade-off between efficiency and operating margin explicit and easy to decide.</p>
<h2>Using the results</h2>
<ul>
<li>Feed the hours by mode into the annual cooling energy calculation; the method is in <a href="<?= url('guides/pue-cooling-contribution') ?>">calculating the cooling system's contribution to PUE</a>.</li>
<li>Compare economizer types on the same weather file and boundaries.</li>
<li>Check against energy code economizer requirements, which vary by climate zone; the adopted energy code sets those requirements.</li>
<li>Use extreme-year data for resilience planning, since a hot or humid year can shift many hours to mechanical cooling.</li>
</ul>
<?php guide_end([
    ['How do I calculate economizer hours for a data center?', 'Bin hourly weather data for the site, set the outdoor temperature below which the economizer carries the full load, apply humidity limits for airside systems, and count hours in each bin as full, partial or mechanical.'],
    ['What weather data should I use?', 'Use a typical-year hourly file such as TMY in the U.S. or CWEC in Canada for the nearest representative station. Use extreme-year data as well when checking resilience.'],
    ['Do partial economizer hours count as free cooling?', 'Not fully. In partial hours the economizer reduces but does not eliminate mechanical cooling. Estimate the remaining coil or chiller load in each partial bin for an accurate energy figure.'],
]);
