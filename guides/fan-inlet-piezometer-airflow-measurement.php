<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-inlet-piezometer-airflow-measurement'); ?>
<p class="lede">A piezometer ring measures fan airflow by sensing the pressure drop between the plenum upstream of the inlet cone and the throat of the cone. Airflow equals a manufacturer's K-factor times the square root of that differential pressure, corrected for density, so a single transducer per fan gives a continuous airflow reading without a separate measuring station.</p>

<h2>How inlet cone flow measurement works</h2>
<p>A plenum fan's inlet cone is a smooth converging nozzle. As air accelerates into the throat, its static pressure falls. The drop between the still air in the inlet plenum and the throat is directly related to throat velocity, just as in a flow nozzle or venturi.</p>
<p>The fan manufacturer drills several small taps around the circumference of the cone throat and connects them with a tube ring (the <strong>piezometer ring</strong>). Averaging around the circumference evens out minor non-uniformity. A second reference tap sits in the inlet plenum, away from the cone. A differential pressure transducer reads the difference.</p>
<p class="formula">CFM = K × √(Δp) &nbsp;&nbsp; at standard density (0.075 lb/ft³)</p>
<p class="formula">CFM = K × √(Δp × 0.075 ÷ ρ) &nbsp;&nbsp; at actual density ρ</p>
<p>Δp is in in. w.c. K is a constant for that fan size and inlet cone geometry, determined by the manufacturer in laboratory tests. In SI, the same form applies with the manufacturer's metric K-factor and Δp in Pa.</p>

<h2>Where the K-factor comes from</h2>
<p>The manufacturer tests the fan in an AMCA 210 laboratory setup, measures airflow with the lab's reference instrumentation and simultaneously records the inlet cone Δp. K is the ratio between the two. Because the cone geometry is fixed, K holds across the operating range for that fan size. Each wheel diameter and cone design has its own K, which should be shown on the fan nameplate, submittal or O&amp;M data.</p>
<p>The lab K assumes inlet conditions similar to the test. If the field inlet is badly disturbed, for example by a wall or adjacent fan closer than recommended, the cone sees an uneven approach and the reading shifts. This is one reason fan spacing rules matter.</p>

<h2>Worked example</h2>
<p>A fan's nameplate lists K = 2,400 (imperial units). The transducer reads Δp = 1.44 in. w.c. The unit is at an elevation where air density is 0.070 lb/ft³.</p>
<ol>
<li>Standard-density reading: 2,400 × √1.44 = 2,400 × 1.20 = 2,880 cfm.</li>
<li>Density correction: √(0.075 ÷ 0.070) = √1.071 = 1.035.</li>
<li>Actual airflow: 2,880 × 1.035 = <strong>2,981 cfm</strong> (about 1,407 L/s).</li>
</ol>
<p>For an array, sum the readings of all running fans. Twelve fans each reading about 2,980 cfm deliver about 35,800 cfm in total.</p>
<p class="note">Many controllers and EC motor electronics apply the square root and K-factor internally. Confirm whether the BAS point is reading raw pressure or calculated airflow, and whether density correction is applied.</p>

<h2>How to set up piezometer airflow measurement</h2>
<ol>
<li><strong>Confirm the taps.</strong> Check the fan submittal shows inlet cone taps and the K-factor for each fan size. Retrofitting taps in the field rarely matches factory accuracy.</li>
<li><strong>Choose transducer range.</strong> Find Δp at maximum and minimum airflow. Because Δp varies with airflow squared, a 4:1 airflow turndown is a 16:1 pressure turndown. Select a range that keeps minimum-flow readings well above the transducer's low-end error.</li>
<li><strong>Run tubing correctly.</strong> Keep runs short, with no kinks or low points that trap condensation. Connect the throat ring to the low-pressure port and the plenum reference to the high-pressure port.</li>
<li><strong>Configure the calculation.</strong> Enter K, units and density correction in the controller. Use a short averaging filter to smooth turbulence without hiding real changes.</li>
<li><strong>Zero the transducers</strong> with the fan off and stopped.</li>
<li><strong>Verify in the field.</strong> Compare the summed reading against an independent measurement, typically a duct <a href="<?= url('guides/pitot-traverse-airflow-verification') ?>">Pitot traverse</a>, at one or two speeds. Record the ratio. A consistent offset can be corrected in software.</li>
<li><strong>Trend and alarm.</strong> Set alarms for a single fan reading significantly below its neighbours, which signals a failed motor, slipping wheel or blocked inlet.</li>
</ol>

<h2>Accuracy and its limits</h2>
<p>Under good inlet conditions, inlet cone measurement is generally regarded as accurate enough for fan control, fan failure detection and tracking supply and return airflow. Accuracy is lower when:</p>
<ul>
<li>Inlet obstructions or tight spacing disturb the approach flow.</li>
<li>Δp is very low at minimum airflow, so transducer error dominates.</li>
<li>Taps are blocked by dust or paint, or tubing has leaks.</li>
<li>The cone-to-wheel relationship has been altered, for example after a wheel is reinstalled with a different gap.</li>
<li>Density changes are large and not corrected.</li>
</ul>
<p>If the reading needs to satisfy a ventilation code for outdoor air, measure the outdoor air separately. Piezometer rings measure total fan airflow, not the outdoor air portion. Dedicated outdoor airflow stations are covered in <a href="<?= url('guides/outdoor-airflow-measurement-stations') ?>">outdoor airflow measurement stations</a>.</p>

<h2>Uses beyond airflow readout</h2>
<ul>
<li><strong>Return fan tracking:</strong> control return airflow as a fixed offset from supply airflow.</li>
<li><strong>Fan failure detection:</strong> a fan with near-zero Δp while commanded on has failed.</li>
<li><strong>Constant airflow control:</strong> hold a fixed airflow as filters load, by adjusting speed.</li>
<li><strong>Commissioning:</strong> quickly confirm the array is delivering design airflow during factory run testing and field startup.</li>
</ul>
<?php guide_end([
    ['What is a piezometer ring on a fan?', 'It is a ring of static pressure taps around the throat of a plenum fan\'s inlet cone, connected together so the average throat pressure can be compared with the inlet plenum pressure to calculate airflow.'],
    ['How is airflow calculated from the piezometer reading?', 'Airflow equals the manufacturer\'s K-factor multiplied by the square root of the measured differential pressure, with a density correction for non-standard air.'],
    ['How accurate is inlet cone airflow measurement?', 'With clean taps, a correctly ranged transducer and inlet conditions close to the lab test, it is accurate enough for control and fan monitoring. Accuracy falls with disturbed inlets and very low differential pressure.'],
    ['Can a piezometer ring measure outdoor air?', 'No. It measures total airflow through the fan. Outdoor air must be measured separately at the outdoor air intake.'],
]);
