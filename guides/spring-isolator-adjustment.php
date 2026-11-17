<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('spring-isolator-adjustment'); ?>
<p class="lede">After the unit or fan base is set, adjust each spring isolator so it carries its share of the load at the specified deflection: turn the leveling bolts to transfer weight onto the springs, bring the base to its operating height and level, release any shipping or blocking hardware, and measure the compressed spring height at every isolator. Uneven adjustment is the main reason an isolated unit vibrates.</p>

<h2>Know what you are adjusting</h2>
<p>Spring isolators on air handlers appear in two places:</p>
<ul>
<li><strong>Internal isolation:</strong> the fan and motor sit on a base inside the casing, supported by springs, and the casing itself sits rigidly on its support.</li>
<li><strong>External isolation:</strong> the whole unit sits on spring isolators or a spring rail between its base and the structure.</li>
</ul>
<p>The procedure is similar, but internal isolators usually ship with blocking or hold-down bolts, while external isolators are installed in the field under the base rails. Whether isolation belongs inside or outside the unit is a design decision covered in <a href="<?= url('guides/internal-fan-isolation-vs-unit-isolation') ?>">internal fan isolation vs unit isolation</a>. How isolator deflection was selected is explained in <a href="<?= url('guides/static-deflection-selection') ?>">static deflection selection</a>.</p>

<h2>What you need</h2>
<ul>
<li>The isolator schedule or submittal: each isolator's location, spring rating, rated deflection and the expected operating (compressed) height.</li>
<li>A tape measure or caliper, a level, wrenches for the leveling bolts and lock nuts.</li>
<li>The installation manual for the restraint or shipping hardware on internal bases.</li>
</ul>

<h2>Step-by-step adjustment</h2>
<ol>
<li><strong>Check placement.</strong> Confirm every isolator is at its scheduled location, sitting flat on a solid surface, and that springs are the scheduled colour or rating. Springs are often colour-coded by capacity; a mix-up between corners is common.</li>
<li><strong>Measure free height.</strong> Before loading, record each spring's free (uncompressed) height if accessible. You will use it to calculate actual deflection.</li>
<li><strong>Set the unit or base on blocking.</strong> For external isolators, the unit is usually set on the isolators with leveling bolts backed off so the base rests on the isolator housing or on temporary shims at the specified operating height.</li>
<li><strong>Transfer load to the springs.</strong> Turn each leveling bolt a few turns at a time, working around the unit in sequence. Do not fully adjust one corner then move on; that tilts the base and overloads other springs. Continue until the base lifts clear of the blocking or housing stop.</li>
<li><strong>Bring to operating height and level.</strong> Continue adjusting in small increments until the base is at the specified clearance above the housing or floor (often a gap of around 1/4 to 1/2 in, per the isolator manufacturer) and level along length and width.</li>
<li><strong>Release shipping hardware.</strong> For internal fan bases, remove or back off shipping bolts and blocking only once springs carry the load, as the manual describes. Some designs require removal before adjustment; follow the manual.</li>
<li><strong>Measure compressed height.</strong> At each isolator, measure the spring's loaded height. Deflection = free height − loaded height. Compare with the schedule.</li>
<li><strong>Lock.</strong> Tighten lock nuts on leveling bolts. Make sure no limit stops or seismic snubbers are in contact with the base.</li>
<li><strong>Record.</strong> Write down every isolator's deflection, gap and the date.</li>
</ol>
<p class="formula">Actual deflection (in) = free height − loaded height
Load carried (lb) ≈ spring rate (lb/in) × actual deflection (in)</p>
<p>Example: a spring with a rate of 1,200 lb/in, free height 4.50 in and loaded height 3.00 in is deflected 1.50 in and carrying about 1,800 lb (816 kg). If the schedule calls for 1.5 in deflection, it is correctly loaded. A neighbouring spring of the same rating at only 0.75 in deflection is carrying roughly half the intended load, so other springs must be carrying more.</p>

<h2>Checking the result while running</h2>
<ol>
<li>Start the fan and watch the base. Fan thrust on housed fans and plenum fans pushes the base along the airflow axis; on starting it should move and settle without hitting stops.</li>
<li>Recheck operating gaps and level with the fan at design speed. A base that tilts noticeably under thrust may need thrust restraints adjusted; see <a href="<?= url('guides/fan-thrust-restraints') ?>">fan thrust restraints</a>.</li>
<li>Check that flexible connections, conduit and piping are slack and not supporting the base. A taut flex connector bridges the isolation.</li>
<li>Listen and feel for vibration transmitted to the casing or structure.</li>
</ol>

<h2>Rechecking after the first weeks</h2>
<p>Recheck deflection and gaps after the unit has run for a few weeks and again after ductwork, piping and insulation are complete. Water-filled coils, insulation and connected piping add weight that was not present during the first adjustment, and new springs can take a small set. A short return visit catches a base that has settled onto its stops before it causes noise complaints.</p>

<h2>Common adjustment errors</h2>
<table>
<thead><tr><th>Error</th><th>Result</th><th>Correction</th></tr></thead>
<tbody>
<tr><td>Springs left bottomed out (coils touching)</td><td>Isolator acts as a rigid support</td><td>Increase spring capacity or rebalance load</td></tr>
<tr><td>One corner adjusted much higher than others</td><td>Uneven load, rocking, base twist</td><td>Readjust all corners incrementally</td></tr>
<tr><td>Shipping bolts left in</td><td>No isolation at all</td><td>Remove per manual after loading</td></tr>
<tr><td>Wrong spring at a heavy corner (motor end)</td><td>Excess deflection, base tilts toward motor</td><td>Swap to scheduled spring rating</td></tr>
<tr><td>Debris, grout or conduit under base</td><td>Short circuit of vibration</td><td>Clear the gap fully</td></tr>
</tbody>
</table>
<p class="note">Seismically restrained isolators have restraint gaps that can only be set once springs are adjusted. Complete this procedure before setting the restraints described in <a href="<?= url('guides/seismic-restraint-installation') ?>">how to install seismic restraints</a>.</p>
<?php guide_end([
    ['How do I know if a spring isolator is correctly adjusted?', 'Measure the loaded spring height and subtract it from the free height to get actual deflection, then compare it with the scheduled deflection. The base should also be level, at the specified gap above the housing, and clear of all stops.'],
    ['Why must spring isolators be adjusted a little at a time?', 'Adjusting one corner fully before the others tilts the base and overloads the remaining springs. Turning each leveling bolt a few turns in sequence keeps the load shared evenly as it transfers to the springs.'],
    ['When should fan shipping bolts be removed?', 'Follow the manual. Usually the springs are loaded with the leveling bolts first, then the shipping bolts or blocks are removed so the base settles gently onto the springs instead of dropping.'],
]);
