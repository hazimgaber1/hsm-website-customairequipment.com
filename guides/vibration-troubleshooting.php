<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('vibration-troubleshooting'); ?>
<p class="lede">Most AHU vibration traces to one of four sources: rotor unbalance, shaft or belt misalignment, isolators that are bottomed out or bypassed, or a support structure that is too flexible or loose. Measure vibration at the bearings in three directions, note the frequency relative to running speed, and the pattern usually points to the cause before any parts are changed.</p>

<h2>Measure before you guess</h2>
<p>A handheld vibration meter or data collector with a spectrum display is the most useful tool. Take readings at each fan and motor bearing in the horizontal, vertical and axial directions, in velocity (in./s or mm/s). Record fan speed, motor speed and, on belt drives, the belt length so belt frequency can be calculated.</p>
<p class="formula">1× fan frequency (Hz) = fan rpm ÷ 60     Belt frequency (Hz) = π × sheave pitch diameter × rpm ÷ (60 × belt length)</p>
<p>Use consistent units for diameter and length. Compare overall levels with field severity guidance such as ISO 10816 or ISO 20816 (covered in <a href="<?= url('guides/vibration-severity-iso-10816') ?>">field vibration severity limits</a>), but rely on the spectrum and direction to diagnose. Also check whether the vibration changes with speed: if it peaks at one speed and falls on either side, it is likely resonance, which has its own procedure in <a href="<?= url('guides/vfd-resonance-skip-frequencies') ?>">diagnosing resonance at specific fan speeds</a>.</p>

<h2>Symptom: high vibration at 1× fan speed, mostly radial</h2>
<p><strong>Likely cause:</strong> unbalance of the fan wheel or, on direct drive, the motor rotor.</p>
<p><strong>Checks:</strong></p>
<ul>
<li>Is the highest reading radial (horizontal or vertical) rather than axial?</li>
<li>Is the phase steady, and does amplitude rise roughly with the square of speed?</li>
<li>Inspect the wheel for dirt build-up, especially on blade backs in grease-laden, dusty or humid air.</li>
<li>Look for missing balance weights, damaged blades or erosion.</li>
<li>Confirm the wheel is fully seated and the set screws or bushing are tight.</li>
</ul>
<p><strong>Fix:</strong> clean the wheel first; a uniform layer of dirt rarely stays uniform. If the wheel is clean and intact, field balance it in place to the manufacturer's grade. Replace bent or damaged wheels rather than balancing around the damage.</p>

<h2>Symptom: high axial vibration at 1× and 2× running speed</h2>
<p><strong>Likely cause:</strong> misalignment between motor and fan shafts (direct coupled) or between sheaves (belt drive), or a bent shaft.</p>
<p><strong>Checks:</strong></p>
<ul>
<li>Use a straightedge or laser tool across belt sheave faces. Check both angular and parallel offset.</li>
<li>On coupled drives, check alignment with dial indicators or laser after confirming the base is flat.</li>
<li>Look for a cocked bearing or a bearing locked to the shaft at both ends, which loads it axially.</li>
<li>Spin the shaft slowly with a dial indicator on it to check for run-out.</li>
</ul>
<p><strong>Fix:</strong> realign to the tolerance in the drive manufacturer's instructions; replace bent shafts. Belt alignment and tension procedures are in <a href="<?= url('guides/belt-tensioning-alignment') ?>">belt tensioning and alignment</a>.</p>

<h2>Symptom: vibration below running speed, often unsteady</h2>
<p><strong>Likely causes:</strong> worn or mismatched belts (belt frequency and its harmonics), or loose components.</p>
<p><strong>Checks:</strong> calculate belt frequency and look for peaks at 1×, 2× and 3× belt frequency. Watch belts with a strobe; a flapping span or belts riding at different heights in the grooves confirms it.</p>
<p><strong>Fix:</strong> replace belts as a matched set, set tension correctly, and replace worn sheaves with grooves that are dished or shiny.</p>

<h2>Symptom: many harmonics of running speed, or vibration that changes when bolts are touched</h2>
<p><strong>Likely cause:</strong> mechanical looseness: loose bearing bolts, a cracked base weld, a "soft foot" under the motor or bearing, or a wheel loose on the shaft.</p>
<p><strong>Checks:</strong></p>
<ol>
<li>Check torque on bearing, motor and base bolts.</li>
<li>Loosen one motor foot at a time with a dial indicator on the foot; movement of more than a few thousandths of an inch indicates soft foot.</li>
<li>Inspect welds on fan bases and supports for cracks.</li>
</ol>
<p><strong>Fix:</strong> shim soft feet, retorque, repair welds, and recheck alignment after any base work.</p>

<h2>Symptom: casing or floor vibrates even though bearing readings are moderate</h2>
<p><strong>Likely causes:</strong> isolation that is not working.</p>
<ul>
<li><strong>Shipping restraints left in place</strong> on internally isolated fan bases.</li>
<li><strong>Springs bottomed out</strong> (coils touching) or <strong>topped out</strong> because loads were misjudged or springs were not adjusted after the unit was filled with water.</li>
<li><strong>Restrained spring limit stops</strong> left tight against the housing.</li>
<li><strong>Rigid bridges</strong>: duct, conduit, piping or debris touching the isolated base.</li>
</ul>
<p><strong>Checks:</strong> measure the operating height of each spring and compare with the submittal. Confirm a visible gap at all limit stops. Run a hand around the fan base perimeter looking for contact. Compare vibration on the fan base with vibration on the casing or floor; a well-isolated system shows a large drop across the isolators.</p>
<p><strong>Fix:</strong> remove shipping bolts, readjust springs to the design height, free limit stops and remove bridges. Rigid connection problems are covered in detail in <a href="<?= url('guides/flex-connector-vibration-short-circuits') ?>">troubleshooting vibration short-circuits at flex connectors</a>.</p>

<h2>Symptom: the whole unit or support steel moves visibly</h2>
<p><strong>Likely cause:</strong> structural support that is too flexible for the unit, such as rooftop dunnage, a long-span floor without adequate stiffness, or a stand with no cross bracing.</p>
<p><strong>Checks:</strong> measure vibration on the structure near the unit and at mid-span. Large readings at mid-span relative to near the columns indicate a flexible span. Review structural drawings for the actual support conditions.</p>
<p><strong>Fix:</strong> add bracing, stiffen the support, or relocate the unit nearer to columns. Increasing isolator deflection helps only if the isolators are much softer than the structure.</p>

<h2>Quick reference</h2>
<table>
<thead><tr><th>Pattern</th><th>Most likely cause</th><th>First check</th></tr></thead>
<tbody>
<tr><td>1× speed, radial, steady</td><td>Unbalance</td><td>Wheel cleanliness and damage</td></tr>
<tr><td>1× and 2×, high axial</td><td>Misalignment</td><td>Sheave or coupling alignment</td></tr>
<tr><td>Sub-synchronous, unsteady</td><td>Belts</td><td>Belt condition and tension</td></tr>
<tr><td>Many harmonics</td><td>Looseness</td><td>Bolt torque, soft foot</td></tr>
<tr><td>High casing or floor, moderate bearings</td><td>Isolation defeated</td><td>Shipping bolts, spring heights</td></tr>
<tr><td>Peaks at one speed only</td><td>Resonance</td><td>Speed sweep</td></tr>
</tbody>
</table>
<?php guide_end([
    ['What is the most common cause of air handler fan vibration?', 'Unbalance from dirt build-up or wheel damage is the most common, followed by belt and sheave problems on belt drives and isolators that were never released or adjusted after installation. A spectrum reading at the bearings usually separates them quickly.'],
    ['How do I tell unbalance from misalignment?', 'Unbalance shows mainly at once per revolution in the radial directions. Misalignment typically shows high axial vibration and often a strong two times running speed component. Checking alignment with a straightedge or laser confirms it.'],
    ['Why does my AHU shake the floor when the fan readings look normal?', 'The isolation is probably being bypassed. Look for shipping restraints still installed, springs bottomed out or tight limit stops, and any rigid duct, pipe or conduit connection touching the isolated fan base.'],
]);
