<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('motor-sizing-service-factor'); ?>
<p class="lede">Size a fan motor so its nameplate horsepower covers the highest brake horsepower the fan will ever demand, including dirty filters, cold dense air and belt losses, with modest margin left over. Do not count on the motor's service factor to carry normal operation, particularly on a VFD.</p>

<h2>The sizing equation</h2>
<p class="formula">Motor load (hp) = Fan bhp(max case) ÷ η(belt)</p>
<p class="formula">Required nameplate hp ≥ Motor load × (1 + margin)</p>
<p>The fan bhp must be the maximum of all realistic operating cases, at the air density the fan sees in that case. The belt efficiency term is 1 for direct-drive fans. Margin covers uncertainty in the system pressure, test tolerance and future changes, and is a judgement call rather than a code value. The fan bhp calculation itself is in <a href="<?= url('guides/fan-brake-horsepower-calculation') ?>">calculating fan brake horsepower</a>.</p>

<h2>Find the maximum load case</h2>
<p>Check every case that could raise shaft power above the design value:</p>
<ul>
<li><strong>Design airflow with final (dirty) filter pressure drop,</strong> if the fan is controlled to hold airflow as filters load.</li>
<li><strong>Cold air.</strong> A fan upstream of heating, or in a 100% outdoor air unit, may see very cold air. Power at a given volumetric airflow scales with density.</li>
<li><strong>Failure mode in a redundant array,</strong> where each remaining fan carries more airflow.</li>
<li><strong>Maximum speed setting.</strong> If the drive could run the fan faster than design, for example during smoke control or purge, check that speed.</li>
<li><strong>Forward curved fans,</strong> whose power keeps rising with airflow; check the case of low system resistance, such as ductwork disconnected or doors open.</li>
</ul>

<h2>Density correction for cold air</h2>
<p class="formula">Density ratio = (460 + 70) ÷ (460 + T°F) &nbsp;&nbsp; at sea level</p>
<p class="formula">BHP(cold) = BHP(standard) × density ratio</p>
<p>At −20°F (−29°C), density ratio = 530 ÷ 440 = 1.20. A fan needing 22.5 bhp at standard air needs 27.0 bhp in that cold air at the same speed and volumetric airflow.</p>
<p>Many systems do not need the full cold-air case covered by motor size. Options include running the unit on recirculation during cold starts, limiting fan speed until the preheat coil warms the air, or using the drive's current limit to cap motor load. The choice should be made explicitly in the design and written into the sequence of operation.</p>

<h2>Worked example</h2>
<p>A belt-driven supply fan in a 100% outdoor air unit at sea level:</p>
<ul>
<li>Design: 25,000 cfm at 4.0 in. w.c. with mid-life filters, 22.5 bhp at standard air.</li>
<li>Final filters add 0.4 in. w.c.; at design airflow the fan selection shows 24.6 bhp.</li>
<li>Coldest air at the fan before preheat: −20°F (density ratio 1.20).</li>
<li>Belt drive efficiency: 0.96.</li>
</ul>
<table>
<thead><tr><th>Case</th><th>Fan bhp</th><th>Motor load (÷ 0.96)</th></tr></thead>
<tbody>
<tr><td>Design, standard air</td><td>22.5</td><td>23.4 hp</td></tr>
<tr><td>Final filters, standard air</td><td>24.6</td><td>25.6 hp</td></tr>
<tr><td>Final filters, −20°F air</td><td>24.6 × 1.20 = 29.5</td><td>30.8 hp</td></tr>
</tbody>
</table>
<p>If the cold case must be covered with full airflow and dirty filters, a 30 hp motor is slightly overloaded and the next standard size, 40 hp, is required. If the sequence limits airflow or recirculates air during cold starts, the governing case is the final filter case at 25.6 hp, and a 30 hp motor leaves about 15% margin. The difference between those two answers is a 10 hp motor size, a larger drive and heavier feeders, which is why the cold-air decision must be deliberate.</p>
<p class="note">An oversized motor runs at a lower fraction of its rating for most of the year, where efficiency is lower. Choosing a 40 hp motor "for safety" when 30 hp covers every real case costs energy every operating hour.</p>

<h2>What service factor means</h2>
<p>Service factor (SF) is a multiplier on the nameplate that indicates a motor can carry that much more load under specified conditions: rated voltage and frequency, sine-wave power and a stated ambient temperature, usually with higher winding temperature and shorter insulation life. A 1.15 SF motor rated 30 hp can deliver 34.5 hp under those conditions.</p>
<p>Service factor is intended for occasional overload and for absorbing uncertainty, not for continuous operation. Three reasons to avoid relying on it for fan motors:</p>
<ol>
<li><strong>VFD operation:</strong> on a drive, the motor sees harmonic heating and may have reduced cooling at lower speed. Many motor manufacturers treat the service factor as 1.0 on drive power.</li>
<li><strong>Insulation life:</strong> continuous operation in the service factor range runs the winding hotter and shortens insulation life.</li>
<li><strong>Voltage and ambient conditions:</strong> low voltage or high ambient temperature already use up some of the margin the service factor represents.</li>
</ol>
<p>Treat the nameplate horsepower as the limit for normal operation and let the service factor stand as a safety allowance.</p>

<h2>Practical sizing steps</h2>
<ol>
<li>List every operating case with its airflow, pressure and air density.</li>
<li>Calculate fan bhp for each, then add belt losses for belt-driven fans.</li>
<li>Decide, with the design team, which cases the motor must carry continuously and which will be prevented by controls.</li>
<li>Select the smallest standard motor whose nameplate rating covers the governing case with modest margin.</li>
<li>Confirm the drive is sized for the motor's full-load current, as described in <a href="<?= url('guides/vfd-sizing-for-fan-motors') ?>">how to size a VFD for fan motors</a>.</li>
<li>Record the governing case and any controls limits in the design documents so they are not lost during commissioning.</li>
</ol>
<p>Motor heat added to the airstream rises with motor size and losses, which matters for cooling load; see <a href="<?= url('guides/fan-motor-heat-gain-airstream') ?>">fan motor heat gain in the airstream</a>.</p>
<?php guide_end([
    ['How do I size a motor for a fan?', 'Find the highest brake horsepower the fan will demand in any realistic case, such as dirty filters or cold air, add belt losses if belt driven, add modest margin and select the next standard motor size.'],
    ['Can I use the motor service factor for normal fan operation?', 'It is better not to. Service factor applies under specific sine-wave conditions and shortens insulation life when used continuously. On VFDs, many manufacturers treat it as 1.0.'],
    ['Why does cold air increase fan motor load?', 'Cold air is denser. At the same speed and volumetric airflow, fan pressure and power rise in proportion to density, so a fan upstream of heating can draw much more power on a cold start.'],
    ['Is it safe to oversize a fan motor?', 'It is safe electrically, but an oversized motor runs at light load most of the time, where its efficiency is lower, and it raises drive, feeder and starter sizes.'],
]);
