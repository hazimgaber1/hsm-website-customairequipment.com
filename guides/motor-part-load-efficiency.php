<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('motor-part-load-efficiency'); ?>
<p class="lede">At reduced fan speed, the motor and drive are lightly loaded and both become less efficient. Combined efficiency is the product of drive efficiency and motor efficiency at that load (and belt efficiency if present), so a system that is 90% efficient at full load may be closer to 80% at 60% fan speed. Use manufacturer part-load data, not nameplate values, to calculate it.</p>

<h2>The combined efficiency equation</h2>
<p class="formula">η(system) = η(drive) × η(motor) × η(belt)</p>
<p class="formula">Input power (kW) = Fan shaft power (bhp) × 0.746 ÷ η(system)</p>
<p>For a direct-drive fan, η(belt) is 1. Each component's efficiency must be taken at the actual load and speed at that operating point, not at full load.</p>

<h2>How fan load falls with speed</h2>
<p>A centrifugal fan on a system without a fixed pressure component follows the fan laws: shaft power varies roughly with the cube of speed. At 80% speed, the fan needs about 51% of full-speed power; at 60%, about 22%; at 40%, about 6%. A motor sized for the design condition therefore spends much of its life lightly loaded.</p>
<p>Real VAV systems usually hold a duct static pressure setpoint, so fan power drops more slowly than the cube. Use the actual fan selection at each operating point rather than assuming the cube law; the energy estimating side is in <a href="<?= url('guides/vfd-fan-energy-savings-calculation') ?>">estimating annual fan energy savings with VFDs</a>.</p>

<h2>Motor efficiency at part load</h2>
<p>An induction motor's efficiency curve is fairly flat from about half load to full load, often peaking somewhere around 75% load. Below roughly a quarter to a third of rated load, efficiency falls faster, because fixed losses (core and friction and windage) become a large share of a small output. On a VFD, the motor also runs at reduced voltage and frequency, which lowers core losses, partly offsetting the effect.</p>
<p>Manufacturers publish efficiency at 100%, 75% and 50% load on sine-wave power for most motors, and some publish data at reduced speed on a drive. Permanent magnet and synchronous reluctance motors generally hold efficiency better at light load; the technology comparison is in <a href="<?= url('guides/pm-vs-induction-vs-synchronous-reluctance') ?>">permanent magnet vs induction vs synchronous reluctance motors</a>.</p>

<h2>Drive efficiency at part load</h2>
<p>VFD losses come from the rectifier, DC bus and inverter switching. At full load a modern drive is typically in the mid to high 90s percent efficient. Some losses, such as control power and cooling fans, are fixed, so efficiency falls at light load. IEC 61800-9-2 defines standard operating points and efficiency classes for drives and for combined motor and drive systems, and some manufacturers publish losses at those points; use them where available.</p>

<h2>Worked example</h2>
<p>A direct-drive plenum fan needs 22.0 bhp at design. It has a 25 hp, 4-pole premium efficiency induction motor on a VFD. The efficiencies below are illustrative values of the kind found in manufacturer data; substitute the actual published figures.</p>
<table>
<thead><tr><th>Operating point</th><th>Fan speed</th><th>Fan bhp</th><th>Motor load</th><th>η(motor)</th><th>η(drive)</th><th>η(system)</th><th>Input kW</th></tr></thead>
<tbody>
<tr><td>Design</td><td>100%</td><td>22.0</td><td>88%</td><td>0.936</td><td>0.970</td><td>0.908</td><td>18.1</td></tr>
<tr><td>Part load A</td><td>80%</td><td>11.3</td><td>45%</td><td>0.925</td><td>0.960</td><td>0.888</td><td>9.5</td></tr>
<tr><td>Part load B</td><td>60%</td><td>4.75</td><td>19%</td><td>0.850</td><td>0.930</td><td>0.791</td><td>4.5</td></tr>
</tbody>
</table>
<p>Working the design row:</p>
<ol>
<li>Shaft power: 22.0 × 0.746 = 16.41 kW.</li>
<li>Combined efficiency: 0.936 × 0.970 = 0.908.</li>
<li>Input power: 16.41 ÷ 0.908 = 18.1 kW.</li>
</ol>
<p>And the 60% speed row:</p>
<ol>
<li>Fan bhp from the cube law: 22.0 × 0.6³ = 22.0 × 0.216 = 4.75 bhp.</li>
<li>Motor load: 4.75 ÷ 25 = 19%.</li>
<li>Shaft power: 4.75 × 0.746 = 3.54 kW.</li>
<li>Combined efficiency: 0.850 × 0.930 = 0.791.</li>
<li>Input power: 3.54 ÷ 0.791 = 4.48 kW.</li>
</ol>
<p>Fan shaft power at 60% speed is 21.6% of design, but input power is 4.48 ÷ 18.1 = 24.8% of design, because combined efficiency fell from 90.8% to 79.1%.</p>
<p class="note">Oversized motors make part-load losses worse. A 30 hp motor on the same fan would be even more lightly loaded at 60% speed. Motor sizing is covered in <a href="<?= url('guides/motor-sizing-service-factor') ?>">sizing fan motors</a>.</p>

<h2>Belt-driven fans</h2>
<p>Belt efficiency also falls at light load because some belt losses are roughly fixed. If a belt drive is 95% efficient at full load and 90% at light load, multiply it in. For the 60% case above, a belt at 0.90 would reduce combined efficiency to 0.791 × 0.90 = 0.712, and input power would rise to 3.54 ÷ 0.712 = 4.97 kW.</p>

<h2>Where the data comes from, and its limits</h2>
<p>Published motor efficiency at 50% and 75% load is measured on sine-wave power at full speed, with the load reduced by lowering torque. On a fan drive, both torque and speed fall together, and the motor runs on a switched waveform. The published figures are therefore an approximation for drive operation, usually close enough for comparing options but not for guaranteeing savings. Some motor and drive manufacturers now publish combined losses at standard speed and torque points, which is a better basis when it is available.</p>
<p>Field measurement settles the question for an existing installation. Most drives report output power, and a portable power analyser on the drive input gives true input power. Comparing input power with fan shaft power estimated from airflow and pressure shows the real combined efficiency at that operating point.</p>

<h2>Practical guidance</h2>
<ul>
<li>Ask for motor efficiency at 25%, 50%, 75% and 100% load, and drive losses at the same points, when part-load performance matters.</li>
<li>Compare competing motor and drive packages at the operating points where the fan spends most hours, not only at design.</li>
<li>Avoid excessive motor oversizing.</li>
<li>For fan arrays, consider staging fans off at low airflow so the remaining motors run at a higher load fraction.</li>
</ul>
<?php guide_end([
    ['How do you calculate motor and VFD combined efficiency?', 'Multiply the drive efficiency by the motor efficiency at the same operating load, and by belt efficiency if there is a belt drive. Use part-load data, not full-load nameplate values.'],
    ['Does motor efficiency drop at low speed on a VFD?', 'Yes, mainly because the motor is lightly loaded. Induction motor efficiency is fairly flat down to about half load and falls faster below roughly a quarter to a third of rated load.'],
    ['How efficient is a VFD at part load?', 'Modern drives are typically in the mid to high 90s percent at full load. Efficiency falls somewhat at light load because some losses, such as control power and cooling, are fixed.'],
    ['Does an oversized motor waste energy at part load?', 'Yes. An oversized motor runs at a lower fraction of its rating, where efficiency is lower, so input power rises for the same fan duty.'],
]);
