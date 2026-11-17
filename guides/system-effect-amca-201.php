<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('system-effect-amca-201'); ?>
<p class="lede">System effect is the pressure a fan loses because the air entering or leaving it is not as uniform as it was in the laboratory test. AMCA Publication 201 gives a method to estimate that loss so it can be added to the system pressure before the fan is selected, rather than discovered at test and balance.</p>

<h2>Why rated performance does not match installed performance</h2>
<p>Fan ratings are produced under AMCA 210 (ANSI/ASHRAE 51) laboratory conditions. Air arrives at the inlet straight, evenly distributed and without swirl, and leaves through a straight outlet duct or open discharge as the test setup defines. The published curve is only valid for those conditions.</p>
<p>In a real air handler, the fan may draw air from a cramped plenum, sit just downstream of a coil or turn, or discharge into an abrupt expansion. Each of these disturbs the flow through the wheel. The fan then develops less pressure at a given speed than its curve says. The shortfall is not a defect in the fan; it is a consequence of where the fan was put.</p>
<p>AMCA 201, <em>Fans and Systems</em>, quantifies that shortfall as a <strong>System Effect Factor (SEF)</strong>, expressed in pressure units. The designer adds the SEF to the calculated system pressure, then selects the fan to deliver the total.</p>

<h2>How system effect factors are expressed</h2>
<p>System effect losses scale with velocity pressure at the fan inlet or outlet, because they are caused by disturbed, high-velocity flow. AMCA 201 presents them as curves or loss coefficients for particular geometries, read against the velocity at the fan connection.</p>
<p class="formula">VP (in. w.c.) = (V ÷ 4005)² &nbsp;&nbsp; for standard air, V in fpm</p>
<p class="formula">SEF = C × VP &nbsp;&nbsp; where C is the loss coefficient for the fitting configuration</p>
<p>Take an outlet velocity of 3,000 fpm (15.2 m/s). VP = (3,000 ÷ 4,005)² = 0.56 in. w.c. (140 Pa). If the configuration's coefficient from AMCA 201 is 0.8 (an illustrative number; look up the actual geometry), the system effect is about 0.45 in. w.c. On a fan selected for 3.0 in. w.c., ignoring that loss means delivering noticeably less than design airflow.</p>
<p class="note">Because SEF depends on velocity pressure, high-velocity fan connections suffer most. Lowering velocity at the fan inlet or outlet is often the cheapest fix.</p>

<h2>Outlet system effects</h2>
<p>A housed fan's outlet velocity profile is uneven: high near the outer scroll and low near the cutoff. It needs a length of straight duct to even out and regain static pressure. AMCA 201 defines an <strong>effective duct length</strong> for this: about 2.5 equivalent duct diameters at outlet velocities of 2,500 fpm or less, plus one more diameter for each additional 1,000 fpm. Anything that interrupts the flow within that length, such as an elbow, an abrupt expansion, a damper or a coil, generates a system effect.</p>
<ul>
<li><strong>Elbows close to the outlet:</strong> the penalty depends on elbow orientation relative to the scroll. An elbow that turns against the scroll's natural flow costs more than one that turns with it.</li>
<li><strong>Abrupt discharge into a plenum:</strong> the velocity pressure is lost entirely instead of being partly regained.</li>
<li><strong>Dampers near the outlet:</strong> a damper sees uneven flow and creates a higher loss than its rated pressure drop.</li>
</ul>
<p>Plenum fans behave differently because they discharge in all directions into a plenum and have no outlet duct to develop. Their main concern is discharge clearance to the casing walls and to downstream components, covered in <a href="<?= url('guides/fan-array-plenum-depth-spacing') ?>">fan array plenum depth and spacing</a>.</p>

<h2>Inlet system effects</h2>
<p>Inlet disturbances are usually more damaging than outlet ones, because the wheel cannot do its work properly on air that arrives unevenly or spinning.</p>
<h3>Non-uniform inlet flow</h3>
<p>An elbow placed directly at the fan inlet loads one side of the wheel more than the other. AMCA 201 shows that the loss falls as the straight length between the elbow and the inlet increases, and that turning vanes in the elbow help.</p>
<h3>Inlet swirl (prerotation)</h3>
<p>If air enters the wheel already spinning in the same direction as the wheel, the fan produces less pressure. If it spins against the wheel, horsepower rises. Swirl comes from inlet boxes, elbows in two planes and poorly designed plenums. Inlet boxes on housed fans carry their own published losses.</p>
<h3>Inlet obstructions and restricted clearance</h3>
<p>Bearings, motor supports, belt guards and casing walls placed close to the inlet cone all reduce effective inlet area. For plenum fans, the distance from the inlet cone to the nearest wall or to the adjacent fan matters. Too little clearance starves the inlet; the fan maker will specify a minimum.</p>

<h2>Applying system effect in a custom AHU</h2>
<ol>
<li>Identify every fan inlet and outlet condition that departs from the rating setup.</li>
<li>Calculate velocity at the fan inlet and outlet at design airflow.</li>
<li>Look up the matching AMCA 201 configuration and its loss coefficient or curve.</li>
<li>Add the resulting SEF to the system's calculated static pressure.</li>
<li>Select the fan to the total, then confirm the selection still sits near peak efficiency.</li>
<li>Where the SEF is large, change the geometry rather than accepting the loss: add straight length, lower velocity, add a turning vane or move the obstruction.</li>
</ol>
<p>Good custom AHU design builds these allowances into the unit's internal static pressure, so the fan section is selected with its real surroundings already accounted for. Internal vs external pressure is explained in <a href="<?= url('guides/internal-vs-external-static-pressure') ?>">internal vs external static pressure</a>.</p>

<h2>Symptoms of unaccounted system effect</h2>
<p>When system effect is missed, test and balance typically finds airflow below design while measured static pressure is also lower than expected and fan speed matches the submittal. Speeding the fan up recovers the airflow at a horsepower penalty. If the fan has no margin, it cannot. Where low airflow is already a field problem, see <a href="<?= url('guides/fan-airflow-shortfall-troubleshooting') ?>">troubleshooting a fan that will not deliver rated airflow</a>.</p>
<?php guide_end([
    ['What is AMCA 201?', 'AMCA Publication 201, Fans and Systems, explains how installation conditions at fan inlets and outlets reduce performance compared with laboratory ratings and gives factors to estimate that loss.'],
    ['How is system effect calculated?', 'It is calculated as a loss coefficient for the specific inlet or outlet configuration multiplied by the velocity pressure at the fan connection. The result is added to system pressure before selecting the fan.'],
    ['Can I measure system effect in the field?', 'Not directly. It shows up as a fan that delivers less airflow and pressure than its curve predicts at the measured speed. It must be estimated during design.'],
    ['Do plenum fans have system effect?', 'Yes, mostly on the inlet side. Inlet clearance to walls, adjacent fans and obstructions such as motor supports all reduce performance if they are tighter than the manufacturer recommends.'],
]);
