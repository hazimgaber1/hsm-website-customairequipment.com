<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('office-ahu-energy-estimate'); ?>
<p class="lede">You can estimate an office air handler's annual energy use with a spreadsheet: split the year into operating hours and outdoor temperature bins, calculate fan power, heating and cooling at each bin, multiply by the hours in it, and add them up. The result is not a full simulation, but it is good enough to compare options and sanity-check a model.</p>

<h2>What you need</h2>
<ul>
<li><strong>Operating schedule:</strong> occupied hours per week (for example 60 hours, 7 a.m. to 7 p.m. weekdays) and unoccupied operation, if any.</li>
<li><strong>Bin weather data:</strong> hours per year in each 5°F (or 3°C) outdoor dry-bulb bin, for the occupied schedule. Bin data is available from climate data sources; ASHRAE climate data is discussed in <a href="<?= url('guides/outdoor-design-conditions-ashrae-climate-data') ?>">outdoor design conditions</a>.</li>
<li><strong>Design supply airflow</strong> and how airflow varies with load.</li>
<li><strong>Fan total static pressure and efficiency,</strong> including motor and drive.</li>
<li><strong>Minimum outdoor airflow</strong> and economizer limits.</li>
<li><strong>Supply air temperature setpoint</strong> and space setpoints.</li>
<li><strong>Plant efficiencies:</strong> chiller kW/ton or COP, boiler efficiency.</li>
</ul>

<h2>The equations</h2>
<p class="formula">Fan BHP = CFM × TSP ÷ (6356 × η fan)</p>
<p class="formula">Fan kW = BHP × 0.746 ÷ (η motor × η drive)</p>
<p class="formula">Sensible heating or cooling (Btu/h) = 1.08 × CFM × ΔT</p>
<p class="formula">Total cooling (Btu/h) = 4.5 × CFM × Δh</p>
<p class="formula">Cooling electric kW = (Btu/h ÷ 12,000) × kW/ton</p>
<p class="formula">Heating fuel input (Btu/h) = Heating load ÷ boiler efficiency</p>
<p>For a VAV fan with good static pressure reset, fan power at part load can be approximated by a curve between a cubic relationship (ideal fan law) and roughly a square relationship. A practical part-load expression is fan kW at fraction f of design ≈ design kW × f^2.5, but use the fan's actual curve and the control strategy where available. The fan law derivation is in <a href="<?= url('guides/fan-laws-calculation') ?>">fan laws calculation</a>.</p>

<h2>Worked example</h2>
<p>A 40,000 cfm (18,900 L/s) VAV air handler serves an office in a cold climate. Design TSP is 4.0 in. w.c., fan total efficiency 70%, motor 95%, drive 97%. Minimum outdoor air is 8,000 cfm. Supply setpoint is 55°F, return air 75°F. Occupied hours are 3,120 per year (60 hours × 52 weeks). The chiller plant averages 0.8 kW/ton including pumps and towers; the boiler is 90% efficient.</p>
<h3>Design fan power</h3>
<p class="formula">BHP = 40,000 × 4.0 ÷ (6356 × 0.70) = 36.0 BHP</p>
<p class="formula">kW = 36.0 × 0.746 ÷ (0.95 × 0.97) = 29.1 kW</p>
<h3>Bin calculation (selected bins)</h3>
<table>
<thead><tr><th>Bin (°F)</th><th>Hours</th><th>Airflow fraction</th><th>Fan kW</th><th>Mode</th></tr></thead>
<tbody>
<tr><td>87.5</td><td>60</td><td>1.00</td><td>29.1</td><td>Min OA, mechanical cooling</td></tr>
<tr><td>72.5</td><td>420</td><td>0.80</td><td>16.7</td><td>Min OA, mechanical cooling</td></tr>
<tr><td>57.5</td><td>650</td><td>0.65</td><td>9.9</td><td>Economizer with some mechanical cooling</td></tr>
<tr><td>42.5</td><td>700</td><td>0.55</td><td>6.5</td><td>Full economizer, mix to 55°F</td></tr>
<tr><td>12.5</td><td>380</td><td>0.50</td><td>5.1</td><td>Min OA, preheat required</td></tr>
</tbody>
</table>
<p>Fan kW is design kW × f^2.5. For the 72.5°F bin: 29.1 × 0.80^2.5 = 29.1 × 0.572 = 16.7 kW, and 420 hours gives about 7,000 kWh.</p>
<p>Cooling in the 87.5°F bin, with mixed air at 80°F and 66°F wet-bulb (enthalpy about 30.9 Btu/lb) cooled to 55°F saturated (about 23.2 Btu/lb):</p>
<p class="formula">Q = 4.5 × 40,000 × (30.9 − 23.2) = 1,386,000 Btu/h = 115.5 tons</p>
<p class="formula">Chiller energy = 115.5 × 0.8 × 60 h = 5,540 kWh</p>
<p>Preheat in the 12.5°F bin, with 8,000 cfm of outdoor air mixed with 12,000 cfm of return at 75°F (20,000 cfm total at 50% airflow):</p>
<p class="formula">Mixed air = (8,000 × 12.5 + 12,000 × 75) ÷ 20,000 = 50°F</p>
<p class="formula">Preheat = 1.08 × 20,000 × (55 − 50) = 108,000 Btu/h; fuel input = 108,000 ÷ 0.90 = 120,000 Btu/h</p>
<p class="formula">Annual for bin = 120,000 × 380 h = 45.6 MMBtu</p>
<p>Repeat for every bin and sum fan, cooling and heating energy. Remember zone reheat at VAV boxes, which is often a large share of heating energy in offices; estimate it from minimum box airflows and the reheat temperature rise in each bin.</p>
<p class="note">The airflow fraction in each bin is an assumption based on load. Derive it from a simple load model: cooling load rising roughly linearly with outdoor temperature above the balance point, plus constant internal gains.</p>

<h2>Common estimating errors</h2>
<ul>
<li><strong>Using design static pressure at every bin.</strong> With duct static reset, the operating static at part load is lower than design. Holding design TSP overstates fan energy; assuming the ideal cube law understates it. The 2.5 exponent is a compromise, not a rule.</li>
<li><strong>Ignoring fan heat.</strong> Every kilowatt of fan power ends up as heat in the airstream. In cooling it adds to the coil load; in heating it offsets part of the preheat. A draw-through unit adds that heat after the coil, which raises the supply temperature unless the coil leaving setpoint is lowered.</li>
<li><strong>Forgetting the economizer high limit.</strong> In humid climates, outdoor air in the 65°F to 75°F bins may be too moist to use. Apply the high-limit logic the controls will actually run.</li>
<li><strong>Treating plant efficiency as constant.</strong> Chiller kW/ton improves at part load and with lower condenser water temperatures. A single annual average is acceptable for comparisons but not for absolute predictions.</li>
<li><strong>Skipping humidification.</strong> In dry winter climates, humidifying economizer air can be a significant energy item in its own right.</li>
</ul>

<h2>Unoccupied hours</h2>
<p>Add energy for night setback, morning warm-up and any weekend operation. Morning warm-up in a cold climate can be significant: the unit runs at high airflow with outdoor air closed and heating on. Estimate the hours and average load from the operating sequence.</p>

<h2>Checking the result</h2>
<ul>
<li>Compare fan energy per square foot against benchmarks for similar buildings in your region.</li>
<li>Check that total heating and cooling make sense against utility bills for comparable buildings.</li>
<li>Vary key assumptions, such as static pressure reset effectiveness, by ±20% to see which drive the result.</li>
</ul>
<p>A bin estimate is ideal for comparing alternatives, such as a lower-pressure-drop coil or a fan array, at an early stage. For compliance and for measuring savings after a retrofit, use an hourly simulation and a measurement and verification protocol; see <a href="<?= url('guides/retrofit-savings-measurement-ipmvp') ?>">retrofit savings measurement</a>.</p>
<?php guide_end([
    ['How do you estimate annual fan energy for a VAV air handler?', 'Calculate design fan kW, estimate the airflow fraction in each outdoor temperature bin, scale fan power by roughly the airflow fraction to the 2.5 power, multiply by the hours in each bin and add the results. Use the actual fan curve when available.'],
    ['What is a bin method energy calculation?', 'It divides the year into ranges of outdoor temperature, calculates equipment performance at the midpoint of each range and multiplies by the hours in that range. It is simpler than hourly simulation but useful for comparisons.'],
    ['Why include VAV reheat in an AHU energy estimate?', 'Zone reheat at minimum box airflows can be a large share of heating energy in offices, even in summer for interior zones. Leaving it out understates total energy and the value of supply air temperature reset.'],
]);
