<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('north-american-motor-voltages'); ?>
<p class="lede">North American three-phase systems are nominally 208 V, 240 V, 480 V and, mainly in Canada, 600 V. Motors are rated a little lower than the system to allow for voltage drop: 200 V, 230 V, 460 V and 575 V. Matching the motor nameplate to the actual supply matters, because a 230 V motor on a 208 V system runs close to the edge of its permitted voltage range.</p>

<h2>System voltage versus nameplate voltage</h2>
<p>Utility and building distribution systems are described by their <strong>nominal system voltage</strong>. Motors are labelled with a <strong>utilization voltage</strong>, which is lower because the motor sits at the end of transformers, feeders and branch circuits that all drop some voltage.</p>
<table>
<thead><tr><th>Nominal system (3-phase)</th><th>Common configuration</th><th>Motor nameplate voltage</th><th>Where found</th></tr></thead>
<tbody>
<tr><td>208 V</td><td>120/208 V wye</td><td>200 V (or 208-230 V multi-rated)</td><td>US and Canadian commercial buildings, schools, offices</td></tr>
<tr><td>240 V</td><td>240 V delta, sometimes with a high leg</td><td>230 V</td><td>Older US commercial and light industrial</td></tr>
<tr><td>480 V</td><td>277/480 V wye</td><td>460 V</td><td>Most US commercial, institutional and industrial buildings</td></tr>
<tr><td>600 V</td><td>347/600 V wye</td><td>575 V</td><td>Most Canadian commercial, institutional and industrial buildings</td></tr>
</tbody>
</table>
<p>NEMA MG 1 expects motors to operate successfully within ±10% of nameplate voltage at rated frequency, with performance not necessarily matching nameplate values at the extremes. That tolerance is the reason the nameplate value matters.</p>

<h2>The 208 V trap</h2>
<p>Many motors are labelled 208-230/460 V. On a 208 V supply that is fine if the motor is designed for it, but a motor rated only 230 V running on a 208 V system starts at 208 ÷ 230 = 90.4% of nameplate, already at the bottom of its ±10% range before any voltage drop in the building. On a hot afternoon with a heavily loaded transformer, the motor may see 195 V or less. Low voltage raises current, slip and winding temperature and reduces starting torque, shortening motor life.</p>
<p class="warn">For 208 V systems, specify motors rated 200 V or explicitly rated for 208 V operation. Do not rely on a 230 V nameplate.</p>
<p>On a VFD, the drive can partly compensate, but it cannot produce more output voltage than its input allows, so a 230 V motor on a 208 V drive cannot reach its full rated flux at base speed.</p>

<h2>Current at each voltage</h2>
<p>For the same power, current falls as voltage rises. Full-load current values from the NEC motor table for a 10 hp three-phase induction motor illustrate the effect:</p>
<table>
<thead><tr><th>Nameplate voltage</th><th>Full-load current (NEC table value)</th></tr></thead>
<tbody>
<tr><td>208 V</td><td>30.8 A</td></tr>
<tr><td>230 V</td><td>28 A</td></tr>
<tr><td>460 V</td><td>14 A</td></tr>
<tr><td>575 V</td><td>11 A</td></tr>
</tbody>
</table>
<p>Code tables are used for conductor and protective device sizing; actual motor nameplate current is used for overload settings and drive sizing. Lower current at higher voltage means smaller conductors, smaller drives and less voltage drop. That is why large HVAC equipment is usually supplied at 480 V in the US and 600 V in Canada.</p>

<h2>Implications of 575 V for fan equipment</h2>
<p>Canadian projects often specify 575 V for all three-phase equipment. That has several consequences for air handlers:</p>
<ul>
<li><strong>Drive availability:</strong> 575 V VFDs are widely available but the range is narrower than at 460 V, particularly in small sizes.</li>
<li><strong>EC motors:</strong> fewer EC motor models are offered at 575 V. Some fan arrays use a step-down transformer to feed 460 V or 380-480 V EC motors, which must be accounted for in efficiency, space and protection.</li>
<li><strong>Insulation stress:</strong> the higher DC bus of a 575 V drive produces larger voltage pulses at the motor, so inverter-duty insulation is especially important; see <a href="<?= url('guides/inverter-duty-motor-insulation') ?>">inverter-duty motors and NEMA MG 1 Part 31</a>.</li>
<li><strong>Control power:</strong> control transformers must step down from 575 V, and some components common in US equipment need 600 V-rated alternatives.</li>
<li><strong>Component ratings:</strong> contactors, overloads, fuses and terminal blocks must be rated for 600 V systems.</li>
</ul>

<h2>Single-phase and small motors</h2>
<p>Small fans and accessories may be single-phase: 115 V or 120 V, 208 V or 230 V. In 347/600 V Canadian buildings, single-phase 347 V is used mainly for lighting, so small motor loads usually come from a 120/208 V panel fed by a transformer. Check that each component's voltage matches the panel that will serve it.</p>

<h2>Reading the nameplate</h2>
<ul>
<li><strong>Voltage:</strong> single value, or multiple values with a connection diagram (for example, 230/460 V with low and high voltage connections).</li>
<li><strong>Frequency:</strong> 60 Hz in North America. Motors labelled 50/60 Hz show different ratings at each frequency.</li>
<li><strong>FLA:</strong> at each rated voltage.</li>
<li><strong>Service factor and insulation class.</strong></li>
<li><strong>Certification marks:</strong> for Canadian installations, the motor must carry a mark recognized for Canada, such as CSA or another accredited certification body's Canadian mark.</li>
<li><strong>Efficiency:</strong> nominal efficiency, which must meet the applicable regulation; see <a href="<?= url('guides/motor-efficiency-classes-nema-premium-ie') ?>">motor efficiency classes</a>.</li>
</ul>

<h2>Practical checklist</h2>
<ol>
<li>Confirm the actual building supply voltage and configuration with the electrical engineer, not just the nominal value.</li>
<li>Match motor nameplate voltage to the system, specifying 200 V motors for 208 V supplies.</li>
<li>For 575 V projects, confirm availability of drives and EC motors early.</li>
<li>Check that every unit-mounted component is rated for the supply voltage.</li>
<li>For equipment that may ship to either country, specify voltage per project rather than assuming.</li>
</ol>
<p>Cross-border voltage and certification differences also affect procurement; see <a href="<?= url('guides/cross-border-shipping-canada-us') ?>">cross-border shipping between Canada and the US</a>.</p>
<?php guide_end([
    ['What is the difference between 460 V and 480 V?', 'The 480 V figure is the nominal system voltage. Motors for that system are rated 460 V, a little lower, to allow for voltage drop between the transformer and the motor.'],
    ['Why is 575 V common in Canada?', 'Most Canadian commercial and industrial buildings are supplied at 347/600 V. Motors for those systems are rated 575 V. Higher voltage means lower current, smaller conductors and less voltage drop.'],
    ['Can I run a 230 V motor on 208 V?', 'It is risky. 208 V is already about 90% of 230 V, the bottom of the usual tolerance, before any voltage drop. Use a motor rated 200 V or specifically rated for 208 V.'],
    ['Are EC motors available at 575 V?', 'Some are, but the selection is narrower than at 460 V. Some fan arrays use a step-down transformer to feed EC motors from a 600 V supply.'],
]);
