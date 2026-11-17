<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('draw-through-vs-blow-through-fan-arrangement'); ?>
<p class="lede">In a draw-through unit the supply fan sits downstream of the cooling coil and pulls air through it; in a blow-through unit the fan sits upstream and pushes air through the coil. The choice decides where fan heat ends up, how close to saturation the supply air leaves, and how evenly air crosses the coil face.</p>

<h2>Why fan position matters at all</h2>
<p>Almost all of the shaft power a fan absorbs ends up as heat in the airstream, plus motor losses when the motor sits in the air. On a typical VAV air handler that heat raises air temperature by a couple of degrees Fahrenheit, and more on high-static units. The question is whether that temperature rise happens before the cooling coil, where the coil removes it, or after, where it warms the supply air. The method for putting a number on the rise is in the <a href="<?= url('guides/fan-motor-heat-gain-airstream') ?>">fan and motor heat gain guide</a>; this page looks at the consequences of where it lands.</p>

<h2>Draw-through: fan after the coil</h2>
<p>With the fan downstream, air leaves the cooling coil at, say, 53°F (11.7°C) and close to saturation, then passes through the fan and picks up its heat. If the fan adds 2°F, the unit discharges 55°F air at a lower relative humidity than it had at the coil.</p>
<ul>
<li><strong>Coil leaving temperature must be lower.</strong> To deliver 55°F supply air, the coil must cool to about 53°F, which needs colder chilled water or a deeper coil.</li>
<li><strong>Fan heat acts as a little free reheat.</strong> The supply air is no longer saturated, which reduces the risk of condensation on duct exteriors and keeps downstream filters and liners dry.</li>
<li><strong>Coil face velocity is even.</strong> The fan pulls air through the whole coil face with relatively uniform velocity, provided there is a reasonable plenum length between coil and fan inlet.</li>
<li><strong>The coil section is under negative pressure.</strong> The condensate trap must be sized for the negative static at the pan, which is often the deeper trap of the two cases.</li>
</ul>

<h2>Blow-through: fan before the coil</h2>
<p>With the fan upstream, mixed air is warmed by the fan and then cooled by the coil. The coil removes fan heat along with the space load, so the leaving coil temperature equals the supply temperature.</p>
<ul>
<li><strong>Coil leaving temperature can be higher.</strong> To supply 55°F air, the coil only has to reach 55°F. That allows warmer chilled water or fewer rows, but the coil must absorb the fan heat as added load.</li>
<li><strong>Supply air leaves nearly saturated.</strong> Any further cooling in the duct can cause condensation, and final filters or sound attenuators downstream of the coil may get wet. Many blow-through designs add a reheat coil or keep wet-sensitive components out of the path.</li>
<li><strong>Coil face velocity can be uneven.</strong> A fan discharge, especially from a housed fan, creates a high-velocity jet. A diffuser plate or a properly sized discharge plenum is needed to spread air across the coil, or part of the coil will see velocities high enough to carry water off the fins.</li>
<li><strong>The coil section is under positive pressure.</strong> The drain pan trap is simpler, but casing leakage now pushes conditioned air out of the unit, and door seals must resist outward pressure.</li>
</ul>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Characteristic</th><th>Draw-through</th><th>Blow-through</th></tr></thead>
<tbody>
<tr><td>Where fan heat goes</td><td>Into supply air after the coil</td><td>Into mixed air; removed by the coil</td></tr>
<tr><td>Coil leaving temperature for 55°F supply</td><td>Below 55°F by the fan temperature rise</td><td>About 55°F</td></tr>
<tr><td>Supply air relative humidity</td><td>Lower than at the coil</td><td>Near saturation</td></tr>
<tr><td>Coil face velocity uniformity</td><td>Good with adequate fan inlet spacing</td><td>Needs a diffuser or discharge plenum</td></tr>
<tr><td>Coil section pressure</td><td>Negative; deeper condensate trap</td><td>Positive; simpler trap</td></tr>
<tr><td>Risk to downstream filters and liners</td><td>Low</td><td>Higher unless reheated</td></tr>
<tr><td>Common in</td><td>Most VAV comfort cooling units</td><td>Multizone, dual-duct, some DOAS and humidity-critical designs</td></tr>
</tbody>
</table>

<h2>When blow-through is the better choice</h2>
<p>Blow-through suits units that split airflow after the fan. A hot-deck and cold-deck multizone unit is the classic case: the fan pressurizes a plenum that feeds both a cooling coil and a heating coil in parallel. It is also used where designers want the coil to remove fan heat so supply temperature can be set accurately for dehumidification, followed by deliberate reheat. Units with energy recovery wheels sometimes place supply fans to control which side of the wheel is at higher pressure, which can push the fan ahead of the coil.</p>
<p>Draw-through remains the default for most single-path cooling units because it gives uniform coil airflow and drier supply air at no extra hardware cost.</p>

<h2>Practical checks for either arrangement</h2>
<ol>
<li>Confirm the coil selection uses the right entering condition: mixed air plus fan heat for blow-through, mixed air alone for draw-through.</li>
<li>Check the coil leaving temperature needed to hit the scheduled supply temperature once fan heat is accounted for.</li>
<li>Check coil face velocity profile, not just the average. Blow-through units need a diffuser or adequate plenum length.</li>
<li>Size the condensate trap for the actual pressure at the pan; see the <a href="<?= url('guides/condensate-trap-and-pad-height') ?>">condensate trap guide</a>.</li>
<li>Keep moisture-sensitive components out of near-saturated air on blow-through units, or add reheat.</li>
</ol>
<p class="warn">Fan arrays change the uniformity picture. Several smaller fans discharge more evenly than one large housed fan, so a blow-through array can need less plenum depth than a single fan of the same airflow, but the coil profile still has to be checked.</p>
<?php guide_end([
    ['Is draw-through or blow-through more efficient?', 'Neither is inherently more efficient. In both cases the fan heat must be removed somewhere. Draw-through needs a colder coil leaving temperature, while blow-through makes the coil remove fan heat directly. The overall energy effect is similar; the differences are in humidity, coil uniformity and component wetting.'],
    ['Why does blow-through supply air feel damp?', 'In a blow-through unit the cooling coil is the last component to touch the air, so the air leaves close to saturation. Without reheat, any duct surface cooler than that air can collect condensation, and downstream filters can get wet.'],
    ['How much does fan heat raise supply air temperature?', 'It depends on fan static pressure, efficiency and motor location, but a rise of roughly 1 to 3 F is common on comfort units. High-pressure units with motors in the airstream can see more, so it should be calculated for each job.'],
]);
