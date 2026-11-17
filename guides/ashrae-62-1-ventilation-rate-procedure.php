<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ashrae-62-1-ventilation-rate-procedure'); ?>
<p class="lede">The ASHRAE 62.1 Ventilation Rate Procedure sets each zone's breathing-zone outdoor air as a per-person rate times occupants plus a per-area rate times floor area, corrects it for how well air is distributed in the zone, and then, for multiple-zone recirculating systems, divides the sum by a system ventilation efficiency to get the outdoor air the air handler must bring in.</p>

<h2>Zone-level equations</h2>
<p>For each ventilation zone, the breathing-zone outdoor airflow is:</p>
<p class="formula">Vbz = Rp × Pz + Ra × Az</p>
<ul>
<li><strong>Rp</strong>: outdoor air rate per person for the occupancy category (cfm/person).</li>
<li><strong>Pz</strong>: zone population at design (people).</li>
<li><strong>Ra</strong>: outdoor air rate per unit area (cfm/ft²).</li>
<li><strong>Az</strong>: zone net occupiable floor area (ft²).</li>
</ul>
<p>The rates come from the standard's table of minimum ventilation rates. For example, office space is commonly listed at 5 cfm/person and 0.06 cfm/ft² (2.5 L/s per person and 0.3 L/s·m²). Use the table in the edition adopted in your jurisdiction; values and categories have been revised over time, and some codes adopt modified tables.</p>
<p>Zone air distribution effectiveness, Ez, accounts for how well supply air reaches the breathing zone. Typical values from the standard include 1.0 for ceiling supply of cool air, and 0.8 for ceiling supply of warm air with ceiling return when the supply is substantially warmer than the space. Displacement and underfloor systems have their own values.</p>
<p class="formula">Voz = Vbz ÷ Ez</p>

<h2>System-level equations</h2>
<p>How zones add up depends on the system type:</p>
<table>
<thead><tr><th>System type</th><th>Outdoor air intake (Vot)</th></tr></thead>
<tbody>
<tr><td>Single-zone</td><td>Vot = Voz</td></tr>
<tr><td>100% outdoor air serving multiple zones</td><td>Vot = Σ Voz</td></tr>
<tr><td>Multiple-zone recirculating (typical VAV)</td><td>Vot = Vou ÷ Ev</td></tr>
</tbody>
</table>
<p>For multiple-zone recirculating systems, the uncorrected outdoor air intake accounts for the fact that not every zone peaks at once:</p>
<p class="formula">Vou = D × Σ(Rp × Pz) + Σ(Ra × Az)</p>
<p class="formula">D = Ps ÷ Σ Pz</p>
<p>where Ps is the expected peak population of the whole system at one time. D cannot exceed 1.0.</p>
<p>System ventilation efficiency, Ev, accounts for the fact that a central air handler delivers the same outdoor air fraction to every zone, while some zones need a larger fraction than others. Recent editions offer two methods: a simplified procedure in which Ev is a function of D, and a more detailed calculation in a normative appendix. In the simplified approach, Ev = 0.88 × D + 0.22 for D below 0.60 and Ev = 0.75 for D of 0.60 or more. In the detailed approach:</p>
<p class="formula">Xs = Vou ÷ Vps</p>
<p class="formula">Zpz = Voz ÷ Vpz</p>
<p class="formula">Evz = 1 + Xs − Zpz</p>
<p class="formula">Ev = lowest Evz of all zones</p>
<p>Vps is the system primary airflow and Vpz the zone primary airflow at the condition analyzed, usually the zone's minimum airflow for VAV systems. Check the edition you are working to; the detailed method has been refined between editions, including for systems with secondary recirculation.</p>

<h2>Worked example: three-zone VAV system</h2>
<table>
<thead><tr><th>Zone</th><th>Use</th><th>Az (ft²)</th><th>Pz</th><th>Rp × Pz</th><th>Ra × Az</th><th>Vbz</th><th>Voz (Ez = 1.0)</th><th>Min Vpz</th></tr></thead>
<tbody>
<tr><td>A</td><td>Open office</td><td>5,000</td><td>25</td><td>125</td><td>300</td><td>425</td><td>425</td><td>2,500</td></tr>
<tr><td>B</td><td>Conference</td><td>800</td><td>40</td><td>200</td><td>48</td><td>248</td><td>248</td><td>800</td></tr>
<tr><td>C</td><td>Private offices</td><td>3,000</td><td>15</td><td>75</td><td>180</td><td>255</td><td>255</td><td>1,500</td></tr>
<tr><td colspan="4">Totals</td><td>400</td><td>528</td><td colspan="3"></td></tr>
</tbody>
</table>
<p>Rates used are office-type values of 5 cfm/person and 0.06 cfm/ft² for all three zones; the conference room in particular may carry a different category in your edition. Expected peak system population is 60 people out of the 80 summed, so D = 60 ÷ 80 = 0.75.</p>
<p class="formula">Vou = 0.75 × 400 + 528 = 828 cfm</p>
<p><strong>Simplified procedure:</strong> D ≥ 0.60, so Ev = 0.75.</p>
<p class="formula">Vot = 828 ÷ 0.75 = 1,104 cfm</p>
<p><strong>Detailed procedure:</strong> System primary airflow at the analysis condition is 9,000 cfm.</p>
<p class="formula">Xs = 828 ÷ 9,000 = 0.092</p>
<p class="formula">Zpz(A) = 425 ÷ 2,500 = 0.17; Zpz(B) = 248 ÷ 800 = 0.31; Zpz(C) = 255 ÷ 1,500 = 0.17</p>
<p class="formula">Evz(B) = 1 + 0.092 − 0.31 = 0.78 (lowest)</p>
<p class="formula">Vot = 828 ÷ 0.78 ≈ 1,062 cfm</p>
<p>The conference room, with high density and a small minimum airflow, is the critical zone. Raising its minimum primary airflow, or serving it with demand-controlled ventilation, would raise Ev and lower the system intake.</p>

<h2>Practical points</h2>
<ul>
<li>The VRP sets a minimum. Many designs add margin or follow owner standards, and recent infection-risk and wildfire guidance may raise targets temporarily.</li>
<li>The intake must be maintained at all operating conditions, including minimum VAV airflow. How that is controlled is a separate controls topic; see <a href="<?= url('guides/minimum-outdoor-air-control-vav') ?>">minimum outdoor air control in VAV systems</a>.</li>
<li>Where codes such as the IMC or provincial codes adopt different tables, follow the adopted code. The differences are discussed in <a href="<?= url('guides/ashrae-62-1-vs-imc-ventilation') ?>">ASHRAE 62.1 vs IMC ventilation</a>.</li>
<li>A performance-based alternative that uses contaminant mass balance and air cleaning is the IAQ Procedure, described in <a href="<?= url('guides/ashrae-62-1-iaq-procedure') ?>">the ASHRAE 62.1 IAQ Procedure</a>.</li>
</ul>
<?php guide_end([
    ['How do I calculate outdoor air with ASHRAE 62.1?', 'For each zone, multiply the per-person rate by occupants and the per-area rate by floor area, add them, and divide by the zone air distribution effectiveness. For a multiple-zone VAV system, apply occupant diversity, sum the zones and divide by the system ventilation efficiency.'],
    ['What is system ventilation efficiency Ev?', 'Ev accounts for the fact that a central air handler supplies the same outdoor air fraction to every zone, while some zones need a higher fraction. The zone with the highest ratio of required outdoor air to primary airflow usually sets Ev.'],
    ['What is the 62.1 rate for offices?', 'Office space is commonly listed at 5 cfm per person plus 0.06 cfm per square foot. Check the table in the edition adopted in your jurisdiction, as rates and categories have been revised and some codes use modified tables.'],
]);
