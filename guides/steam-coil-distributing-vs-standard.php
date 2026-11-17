<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('steam-coil-distributing-vs-standard'); ?>
<p class="lede">A standard steam coil feeds steam into one end of each tube and lets condensate drain out the other; a steam distributing coil runs a perforated inner tube down the length of each outer tube so steam is released evenly along it. The distributing design gives a more uniform leaving air temperature and much better resistance to freezing when entering air is below 32°F (0°C).</p>

<h2>How a standard steam coil works</h2>
<p>In a standard (single-tube) steam coil, steam enters a supply header, flows into each tube from one end and condenses as it gives up latent heat. Condensate drains by gravity to a return header at the other end or at the bottom, and from there to a trap. Steam is hottest and most plentiful at the supply end; by the far end of a long tube, much of it has condensed, and the tube surface there can be cooler, especially at part load when a control valve throttles the supply pressure.</p>
<p>In heating applications with entering air well above freezing, this is perfectly acceptable. Standard steam coils are compact, inexpensive and efficient, and they have served reheat and recirculating-air heating duty for decades.</p>

<h2>How a steam distributing coil works</h2>
<p>A steam distributing coil places an inner tube, perforated or fitted with orifices along its length, inside each outer tube. Steam enters the inner tube from the supply header and discharges through the orifices toward the condensing surface along the full tube length. Often the orifices are oriented in the direction of condensate flow, which helps push condensate toward the return end. Because steam reaches every part of the tube at once, the surface temperature is close to uniform end to end.</p>
<p>Distributing coils are often called non-freeze steam coils. That label oversells them slightly: they reduce the risk of freezing considerably, but a steam coil can still freeze if condensate cannot leave the tube, for example when the trap is undersized, the return is lifted, or a vacuum forms when the valve closes.</p>

<h2>Head-to-head comparison</h2>
<table>
<thead><tr><th>Characteristic</th><th>Standard steam coil</th><th>Steam distributing coil</th></tr></thead>
<tbody>
<tr><td>Leaving air temperature uniformity</td><td>Can stratify along tube length, worse at part load</td><td>Uniform along tube length</td></tr>
<tr><td>Freeze resistance with sub-freezing entering air</td><td>Poor; condensate can pool in cold far ends</td><td>Good when trapped, pitched and vacuum-broken correctly</td></tr>
<tr><td>Typical tube lengths</td><td>Shorter lengths preferred</td><td>Handles long tubes well</td></tr>
<tr><td>Modulation by steam valve</td><td>Uneven temperature as pressure drops</td><td>More even under throttling, though still limited at low pressure</td></tr>
<tr><td>Cost and weight</td><td>Lower</td><td>Higher (tube-in-tube construction)</td></tr>
<tr><td>Typical use</td><td>Reheat, recirculating air heating, mild climates</td><td>Preheat, 100% outdoor air, cold climates, long coils</td></tr>
</tbody>
</table>

<h2>Freeze resistance in practice</h2>
<p>Freezing in a steam coil happens to condensate, not steam. When the control valve throttles, the pressure in the coil can fall to or below atmospheric. If the coil cannot drain at that point, condensate backs up in the lower tubes. Outdoor air at −10°F (−23°C) can freeze that standing water in minutes. Three features let a distributing coil survive this:</p>
<ol>
<li>Steam reaches the full tube length, so no portion of the tube is starved while condensate collects.</li>
<li>The tubes are pitched toward the return to drain by gravity. Many distributing coils are built with tubes pitched in the casing, or mounted vertically.</li>
<li>Even distribution means the tube that freezes first in a standard coil (the far, coolest end of the bottom tube) is no longer much cooler than the rest.</li>
</ol>
<p>None of that works without proper vacuum breakers, adequately sized traps and a return arrangement that lets condensate leave by gravity. Those are installation and piping topics outside this comparison; the coil only performs as well as its drainage allows.</p>
<p class="warn">Do not count on any steam coil to be freeze-proof if it is modulated at very low entering air temperatures. Many designers keep the coil's steam valve fully open below a set outdoor temperature and control leaving air with face and bypass dampers, or split the coil into on/off and modulating sections.</p>

<h2>Vertical tube and IFB variants</h2>
<p>Steam distributing coils come in horizontal-tube and vertical-tube versions. Vertical tubes drain naturally downward and are favoured for the most severe outdoor air duty. Integral face-and-bypass (IFB) steam coils combine vertical distributing tubes with internal bypass channels and dampers, so steam runs at full pressure while air temperature is controlled by the dampers. That arrangement is compared with separate damper assemblies in <a href="<?= url('guides/face-bypass-dampers-vs-ifb-coils') ?>">face and bypass dampers vs IFB coils</a>, and the broader menu of methods is in <a href="<?= url('guides/coil-freeze-protection-methods') ?>">coil freeze protection methods</a>.</p>

<h2>Which to specify</h2>
<ul>
<li><strong>Entering air always above freezing</strong> (reheat, recirculating units, mixed air reliably above 40°F): a standard steam coil is adequate and cheaper.</li>
<li><strong>Entering air can drop below freezing</strong>, even occasionally: specify a steam distributing coil with pitched tubes.</li>
<li><strong>100% outdoor air in a cold climate</strong>: distributing coil at minimum; consider vertical tubes or IFB construction.</li>
<li><strong>Long coils</strong> (over roughly 8 to 10 ft, 2.4 to 3 m, of tube length): distributing coil for temperature uniformity, even in mild duty.</li>
</ul>
<p>Coil materials matter as well. Steam condensate is often aggressive, and many specifiers choose heavier wall copper or cupronickel tubes for steam duty; see <a href="<?= url('guides/coil-materials-copper-aluminum-stainless') ?>">coil materials</a>. When preparing the schedule, state steam pressure at the coil inlet after the control valve, not header pressure, so the manufacturer rates capacity at the pressure the coil actually sees.</p>
<?php guide_end([
    ['What is a steam distributing coil?', 'It is a steam coil with a perforated inner tube inside each outer tube. Steam enters the inner tube and is released evenly along the full length of the outer tube, so the coil surface stays at a uniform temperature and condensate is pushed toward the return.'],
    ['Are steam distributing coils freeze-proof?', 'No coil is freeze-proof. Distributing coils resist freezing far better than standard coils because steam reaches every part of the tube, but they can still freeze if condensate cannot drain because of poor trapping, lifted returns or a missing vacuum breaker.'],
    ['When is a standard steam coil acceptable?', 'A standard steam coil is fine when the entering air is always above freezing, such as reheat or heating of recirculated air. It is less expensive and lighter than a distributing coil, but its leaving air temperature is less even along long tubes.'],
]);
