<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('pm-vs-induction-vs-synchronous-reluctance'); ?>
<p class="lede">On a VFD, induction motors are the universal, rugged baseline. Permanent magnet motors usually deliver the highest efficiency, especially at part load, and are smaller for a given rating, but need compatible drive control and generate voltage whenever the shaft turns. Synchronous reluctance motors reach high efficiency classes without magnets, using a familiar induction-style frame, but draw more current for the same power and must run on a drive.</p>

<h2>How each motor makes torque</h2>
<h3>Induction motor</h3>
<p>The stator's rotating magnetic field induces currents in the rotor bars, and those currents create the rotor field that produces torque. The rotor must turn slightly slower than the field (slip) for current to be induced. Rotor currents mean rotor losses, which is a fundamental limit on efficiency.</p>
<h3>Permanent magnet (PM) synchronous motor</h3>
<p>Magnets embedded in or mounted on the rotor provide the rotor field directly. The rotor turns in step with the stator field, with no slip and no rotor current. Interior PM (IPM) designs also use reluctance torque from the rotor shape.</p>
<h3>Synchronous reluctance motor (SynRM)</h3>
<p>The rotor is a stack of laminations with carefully shaped air barriers and no windings or magnets. It aligns with the stator field because magnetic flux prefers the low-reluctance path through the steel. Like a PM motor, it runs at synchronous speed with no rotor current. PM-assisted SynRM adds small magnets to improve power factor and efficiency.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Induction</th><th>Permanent magnet</th><th>Synchronous reluctance</th></tr></thead>
<tbody>
<tr><td>Typical efficiency class achievable</td><td>IE3 (NEMA Premium) commonly; IE4 in some designs</td><td>IE4 to IE5</td><td>IE4 to IE5, depending on design and rating basis</td></tr>
<tr><td>Part-load efficiency</td><td>Falls off at light load</td><td>Stays high over a wide load range</td><td>Good; generally better than induction</td></tr>
<tr><td>Power factor</td><td>Moderate; falls at light load</td><td>High</td><td>Lower than PM; drive current can be higher for same power</td></tr>
<tr><td>Size and weight for a rating</td><td>Baseline</td><td>Often smaller and lighter</td><td>Similar to induction; often same frame size</td></tr>
<tr><td>Line starting without a drive</td><td>Yes</td><td>No (except line-start PM designs)</td><td>No</td></tr>
<tr><td>Drive requirements</td><td>Any standard VFD</td><td>Drive with PM control mode and correct motor data</td><td>Drive with SynRM control, often matched by manufacturer</td></tr>
<tr><td>Rotor temperature</td><td>Warm from rotor losses</td><td>Cool; magnets sensitive to high temperature</td><td>Cool</td></tr>
<tr><td>Voltage when shaft is turned externally</td><td>Negligible once de-energized</td><td>Generates voltage proportional to speed</td><td>Negligible</td></tr>
<tr><td>Material concerns</td><td>Copper or aluminum rotor</td><td>Rare earth magnets: cost and supply</td><td>No magnets (except PM-assisted)</td></tr>
<tr><td>Field replacement</td><td>Easiest; widely stocked</td><td>More specialized</td><td>More specialized; drive pairing</td></tr>
</tbody>
</table>
<p>Efficiency class definitions are explained in <a href="<?= url('guides/motor-efficiency-classes-nema-premium-ie') ?>">motor efficiency classes</a>. The efficiency figures for synchronous motors are typically stated for the motor on its intended drive.</p>

<h2>Drive compatibility</h2>
<p>Induction motors run on any VFD in simple volts-per-hertz mode, which makes them the most forgiving choice. PM and SynRM motors need the drive to know rotor position and to control current precisely. Most current general purpose drives include PM control modes; SynRM motors are frequently sold as packages with drives from the same manufacturer, though other drives with SynRM algorithms exist. Confirm before buying that the intended drive supports the motor type, and that commissioning includes the motor identification run the drive requires.</p>
<p>Multi-motor operation from one drive, which is common with induction motors in fan arrays, is generally not possible with PM or SynRM motors, because the drive must control each rotor's position individually. That alone often settles the question for arrays with a common drive.</p>

<h2>Safety: PM motors generate voltage</h2>
<p>A permanent magnet rotor turning in its stator generates voltage at the terminals, whether or not the drive is on. On a fan, the wheel can be turned by airflow from other fans or by stack effect. A windmilling PM fan motor can present hazardous voltage at the motor terminals and on the drive's DC bus, even with the drive's supply disconnected.</p>
<p class="warn">Before working on a PM motor or its drive, stop the fan wheel from turning and lock it, then verify absence of voltage at the motor terminals as well as the drive input. Lockout procedures for these motors need this extra step.</p>

<h2>Where each technology fits</h2>
<ul>
<li><strong>Induction:</strong> retrofit motor replacements, belt drives, common-drive arrays, applications where any local supplier must be able to provide a spare, and harsh environments.</li>
<li><strong>Permanent magnet:</strong> direct-drive fans with long operating hours and significant part-load operation, where efficiency and compact size justify cost and drive matching.</li>
<li><strong>Synchronous reluctance:</strong> owners wanting high efficiency without rare earth magnets or the windmilling voltage concern, in standard frame sizes that suit existing mounting.</li>
</ul>

<h2>Evaluating the options</h2>
<ol>
<li>Compare combined motor and drive input power at the expected operating points, using the method in <a href="<?= url('guides/motor-part-load-efficiency') ?>">calculating motor and drive efficiency at part load</a>.</li>
<li>Confirm drive compatibility and whether one drive per motor is required.</li>
<li>Check the drive current rating for the motor's power factor.</li>
<li>Review spares, replacement lead times and the owner's maintenance standards.</li>
<li>For PM motors, update lockout procedures and labelling.</li>
</ol>
<p>Integrated EC motors are a separate comparison, covered in <a href="<?= url('guides/ec-motors-vs-vfd-induction-motors') ?>">EC motors vs VFD-driven induction motors</a>.</p>
<?php guide_end([
    ['Are permanent magnet motors more efficient than induction motors?', 'Generally yes. With no rotor current, PM motors avoid rotor losses and usually reach higher efficiency, with the biggest advantage at part load and in smaller sizes.'],
    ['What is a synchronous reluctance motor?', 'It is a motor whose rotor has shaped steel laminations and no windings or magnets. It produces torque by aligning with the stator field and runs at synchronous speed on a VFD.'],
    ['Can a PM motor run without a VFD?', 'Standard PM motors cannot start directly on line power and need a drive with PM control. Some special line-start PM designs exist but are uncommon in fan duty.'],
    ['Why are PM motors a lockout concern on fans?', 'A turning PM rotor generates voltage at the motor terminals. A fan wheel windmilling from airflow can make the motor and drive circuits live even with the supply disconnected.'],
]);
