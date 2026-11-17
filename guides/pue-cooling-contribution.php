<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('pue-cooling-contribution'); ?>
<p class="lede">The cooling system's share of PUE is its annual energy divided by the annual IT energy. Add up fan, pump, chiller or compressor, heat rejection and humidification energy for the year, divide by IT energy for the same year, and you have the cooling load factor: the amount the mechanical plant adds to a perfect PUE of 1.0.</p>

<h2>The definitions</h2>
<p>Power usage effectiveness was introduced by The Green Grid and is now defined internationally in ISO/IEC 30134-2:</p>
<p class="formula">PUE = Total facility energy ÷ IT equipment energy</p>
<p>Total facility energy includes IT, cooling, electrical losses (UPS, transformers, distribution) and other loads such as lighting and offices that serve the data center. Breaking it into parts:</p>
<p class="formula">PUE = 1 + CLF + PLF + OLF</p>
<ul>
<li><strong>CLF (cooling load factor)</strong> = cooling energy ÷ IT energy</li>
<li><strong>PLF (power loss factor)</strong> = electrical distribution losses ÷ IT energy</li>
<li><strong>OLF (other load factor)</strong> = lighting, security and support loads ÷ IT energy</li>
</ul>
<p>The cooling contribution is CLF. It is sometimes called mechanical PUE or expressed as a partial PUE for the cooling subsystem. In the U.S., ASHRAE Standard 90.4 uses a related but differently defined mechanical load component for energy code compliance; do not mix the two calculations.</p>
<p class="note">PUE must be calculated with energy (kWh) over a full year, not with instantaneous power (kW). A design-day kW ratio overstates cooling because it ignores economizer hours and part load.</p>

<h2>What belongs in cooling energy</h2>
<table>
<thead><tr><th>Include</th><th>Typical components</th></tr></thead>
<tbody>
<tr><td>Air movement</td><td>CRAH, AHU and fan wall supply fans; relief and scavenger fans</td></tr>
<tr><td>Water movement</td><td>Chilled water, condenser water and glycol pumps</td></tr>
<tr><td>Refrigeration</td><td>Chillers, DX compressors, pumped refrigerant pumps</td></tr>
<tr><td>Heat rejection</td><td>Cooling tower fans, dry cooler fans, condenser fans</td></tr>
<tr><td>Humidity and water</td><td>Humidifiers, evaporative pump motors, water treatment equipment</td></tr>
<tr><td>Controls</td><td>Cooling controls and their power supplies, if metered</td></tr>
</tbody>
</table>
<p>Exclude server fans: they are part of IT energy. That distinction matters because raising inlet temperatures can shift energy from facility fans to server fans without lowering total consumption.</p>

<h2>Worked example</h2>
<p>A facility has an average IT load of 3,000 kW, so annual IT energy is 3,000 × 8,760 = 26,280,000 kWh. The cooling system is a chilled water plant with waterside economizer and fan walls. Using bin weather data, the operating hours fall into three modes:</p>
<table>
<thead><tr><th>Mode</th><th>Hours</th><th>Fans kW</th><th>Pumps kW</th><th>Chillers kW</th><th>Heat rejection kW</th><th>Total kW</th><th>Energy kWh</th></tr></thead>
<tbody>
<tr><td>Full economizer</td><td>4,200</td><td>150</td><td>60</td><td>0</td><td>70</td><td>280</td><td>1,176,000</td></tr>
<tr><td>Partial economizer</td><td>2,400</td><td>150</td><td>75</td><td>250</td><td>80</td><td>555</td><td>1,332,000</td></tr>
<tr><td>Full mechanical</td><td>2,160</td><td>150</td><td>75</td><td>480</td><td>90</td><td>795</td><td>1,717,200</td></tr>
<tr><td><strong>Annual</strong></td><td>8,760</td><td></td><td></td><td></td><td></td><td></td><td><strong>4,225,200</strong></td></tr>
</tbody>
</table>
<p class="formula">CLF = 4,225,200 ÷ 26,280,000 = 0.161</p>
<p>The cooling system adds 0.16 to PUE. If electrical losses add 0.08 and other loads 0.02, annual PUE is 1 + 0.161 + 0.08 + 0.02 = 1.26.</p>
<p>Compare the design-day ratio: 795 ÷ 3,000 = 0.265. Using peak instead of annual energy would overstate the cooling contribution by about 65% in this example.</p>

<h2>Sensitivity: where the levers are</h2>
<p>With the CLF broken down by component and mode, you can see where improvements pay off:</p>
<ul>
<li><strong>Fans run every hour.</strong> In the example, fans account for 150 × 8,760 = 1,314,000 kWh, about 31% of cooling energy. A 20% reduction in fan power from lower static pressure or more efficient fans saves about 263,000 kWh a year, lowering CLF by 0.01. Because fan power varies roughly with the cube of speed, running more fans slower helps; the fan laws are applied in <a href="<?= url('guides/fan-laws-calculation') ?>">fan laws calculation</a>.</li>
<li><strong>Economizer hours</strong> move hours from the bottom row of the table to the top. Raising the supply setpoint or chilled water temperature can shift several hundred hours, depending on climate; see <a href="<?= url('guides/economizer-hours-by-climate') ?>">estimating economizer hours by climate</a>.</li>
<li><strong>Chiller efficiency</strong> matters most in hot climates with few economizer hours.</li>
<li><strong>Return temperature</strong> affects everything: higher delta-T reduces airflow and fan energy and raises economizer potential. Containment is usually the cheapest step.</li>
</ul>

<h2>Common mistakes</h2>
<ul>
<li>Using design-day kW instead of annual kWh</li>
<li>Counting server fan energy as cooling, or leaving cooling unit fans out</li>
<li>Omitting humidification, water treatment or heat tracing energy</li>
<li>Using an IT load that assumes full build-out when the facility will run part-loaded for years</li>
<li>Mixing measurement boundaries between the numerator and denominator</li>
</ul>
<h2>Partial load and phased build-out</h2>
<p>Many facilities run far below design IT load for years while tenants move in. At 30% IT load, fixed loads such as minimum pump speeds, minimum fan speeds and controls make up a larger share, and CLF rises. Calculate CLF at the expected load for each phase, not only at full build-out. Equipment that turns down efficiently, such as fan arrays where individual fans can be staged and variable-speed pumps with low minimums, keeps CLF from climbing at low load.</p>

<p>When comparing design options, hold the IT load profile and weather file constant and change only the cooling design. Otherwise differences in assumptions can swamp the differences between systems, and the comparison tells the owner nothing useful.</p>
<h2>Reporting and measurement</h2>
<p>For operational PUE, meter the cooling subsystem separately: chiller plant, fan systems and heat rejection. ISO/IEC 30134-2 describes measurement categories based on where IT energy is measured, from the UPS output to the server input. State the category when you report PUE. Water consumption is not part of PUE; it is reported separately using the metric described in <a href="<?= url('guides/water-usage-effectiveness') ?>">calculating water usage effectiveness</a>, and evaporative strategies often trade a lower CLF for higher water use.</p>
<?php guide_end([
    ['What is mechanical PUE?', 'It is the cooling system\'s contribution to PUE, usually called the cooling load factor: annual cooling energy divided by annual IT energy. A facility with a cooling load factor of 0.15 has cooling adding 0.15 to its overall PUE.'],
    ['Should PUE be calculated with kW or kWh?', 'With kWh over a full year. Instantaneous kW ratios at design conditions ignore economizer hours and part load operation, and they overstate the cooling contribution.'],
    ['Are server fans part of cooling energy in PUE?', 'No. Server fans are part of IT equipment energy. Raising inlet temperatures can increase server fan power, which raises IT energy even as facility cooling energy falls.'],
]);
