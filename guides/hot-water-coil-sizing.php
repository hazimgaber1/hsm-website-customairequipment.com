<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('hot-water-coil-sizing'); ?>
<p class="lede">Size a hot water heating coil by calculating the air-side load with 1.08 × CFM × ΔT, converting it to water flow with GPM = Q ÷ (500 × water ΔT), and then checking that the coil can deliver that load with the available entering water temperature. Low-temperature water from heat pumps or condensing boilers needs far more coil surface than traditional 180°F (82°C) water.</p>

<h2>The two equations that do most of the work</h2>
<p>Heating coils change only sensible heat, so the air-side load is straightforward:</p>
<p class="formula">Q (Btu/h) = 1.08 × CFM × (leaving air temp − entering air temp)</p>
<p>The 1.08 constant is standard air density (0.075 lb/ft³) × specific heat of air (0.24 Btu/lb·°F) × 60 min/h. At high altitude or very different air temperatures, correct the airflow to actual density or use mass flow.</p>
<p>The water side carries the same heat:</p>
<p class="formula">GPM = Q ÷ (500 × water temperature drop)</p>
<p>The 500 constant is 8.33 lb/gal × 60 min/h × 1.0 Btu/lb·°F for water near room temperature. At 180°F the density of water is slightly lower, so 490 is a little more precise; most designers use 500 and accept the small difference. Glycol solutions need their own constant, covered in <a href="<?= url('guides/glycol-coil-derating') ?>">glycol coil derating</a>.</p>

<h2>Worked example: conventional hot water</h2>
<p>A unit delivers 8,000 CFM of mixed air at 50°F and must heat it to 85°F for a heating-mode supply. The boiler plant supplies 180°F water with a 20°F design drop.</p>
<p class="formula">Q = 1.08 × 8,000 × (85 − 50) = 302,400 Btu/h</p>
<p class="formula">GPM = 302,400 ÷ (500 × 20) = 30.2 GPM</p>
<p>Leaving water is 160°F. The log mean temperature difference (LMTD) between water and air for a counterflow arrangement is:</p>
<p class="formula">LMTD = [(180 − 85) − (160 − 50)] ÷ ln[(180 − 85) ÷ (160 − 50)] = (95 − 110) ÷ ln(0.864) ≈ 102°F</p>
<p>A large LMTD means modest surface is needed. A one- or two-row coil at 10 FPI and 500 fpm face velocity will typically handle this duty.</p>

<h2>Worked example: low-temperature water</h2>
<p>Now take the same 8,000 CFM and 302,400 Btu/h, but supply water from an air-to-water heat pump at 120°F with a 15°F drop (leaving at 105°F).</p>
<p class="formula">GPM = 302,400 ÷ (500 × 15) = 40.3 GPM</p>
<p class="formula">LMTD = [(120 − 85) − (105 − 50)] ÷ ln[(120 − 85) ÷ (105 − 50)] = (35 − 55) ÷ ln(0.636) ≈ 44°F</p>
<p>The LMTD has fallen from about 102°F to about 44°F. Because Q = U × A × LMTD, the coil needs roughly 2.3 times the effective surface (U × A) to deliver the same load. In practice the coil grows from one or two rows to four or more, with more water flow and higher air pressure drop. This is the single most common surprise in electrification retrofits that swap boilers for heat pumps without re-examining coils.</p>
<p class="note">Check the coil's leaving air temperature against the entering water temperature. If the selection asks for a leaving air temperature within a few degrees of the entering water, the coil will be very deep and sensitive to small changes in water temperature. Raise the water temperature, accept a lower supply air temperature, or increase face area.</p>

<h2>Leaving water temperature and condensing boilers</h2>
<p>Condensing boilers gain efficiency when return water is cool, typically below about 130°F (54°C). A coil sized for a large water temperature drop (30 to 40°F, 17 to 22 K) returns cooler water and lets the boiler condense more of the year. The cost is more coil rows, since the average water temperature in the coil is lower. The arithmetic is the same:</p>
<p class="formula">Leaving water temp = entering water temp − Q ÷ (500 × GPM)</p>
<p>At 302,400 Btu/h and 15 GPM, the drop is 302,400 ÷ (500 × 15) = 40°F, so 160°F entering water returns at 120°F, comfortably in the condensing range.</p>

<h2>Checks after the numbers</h2>
<ul>
<li><strong>Tube velocity.</strong> Low-flow, large-drop designs can fall into laminar flow at part load. Check velocity at the minimum expected flow; see <a href="<?= url('guides/coil-tube-velocity-water-pressure-drop') ?>">coil tube velocity and water pressure drop</a>.</li>
<li><strong>Freeze exposure.</strong> A coil that sees outdoor air needs a protection strategy, not just a size.</li>
<li><strong>Air pressure drop.</strong> Deeper low-temperature coils add resistance that the fan must overcome all year if the coil sits in the main airstream.</li>
<li><strong>Control valve authority.</strong> A coil with a very small water pressure drop gives the valve little authority; balance the valve and coil drops.</li>
<li><strong>Air-side heating capacity at minimum airflow.</strong> In VAV systems, heating may occur at reduced airflow, so check that the coil can produce the needed supply temperature at the lowest heating airflow without overshooting the discharge setpoint.</li>
</ul>

<h2>Quick reference</h2>
<table>
<thead><tr><th>Quantity</th><th>Formula (IP units)</th><th>SI equivalent</th></tr></thead>
<tbody>
<tr><td>Air-side load</td><td>Q = 1.08 × CFM × ΔT (°F)</td><td>Q (kW) = 1.2 × L/s × ΔT (K) ÷ 1000</td></tr>
<tr><td>Water flow</td><td>GPM = Q ÷ (500 × ΔT)</td><td>L/s = Q (kW) ÷ (4.19 × ΔT (K))</td></tr>
<tr><td>Leaving water</td><td>EWT − Q ÷ (500 × GPM)</td><td>EWT − Q ÷ (4.19 × L/s)</td></tr>
<tr><td>LMTD</td><td>(ΔT1 − ΔT2) ÷ ln(ΔT1 ÷ ΔT2)</td><td>Same</td></tr>
</tbody>
</table>
<p>Placement of a heating coil used for preheating outdoor air is a related question handled in <a href="<?= url('guides/preheat-coil-placement-sizing') ?>">preheat coil placement and sizing</a>.</p>
<?php guide_end([
    ['How do you calculate GPM for a hot water coil?', 'Divide the heating load in Btu/h by 500 times the water temperature drop in degrees F. A 300,000 Btu/h coil with a 20 degree drop needs 30 GPM. The 500 factor applies to water; glycol mixtures need a lower factor.'],
    ['Why do low-temperature hot water coils need more rows?', 'Coil capacity depends on the temperature difference between water and air. Dropping supply water from 180 F to 120 F can cut the log mean temperature difference by more than half, so the coil needs roughly twice the surface to deliver the same heat.'],
    ['What water temperature drop should a heating coil use?', 'Traditional designs use 20 degrees F. Systems with condensing boilers or heat pumps often use 30 to 40 degrees F to keep return water cool, which improves plant efficiency but requires more coil surface.'],
]);
