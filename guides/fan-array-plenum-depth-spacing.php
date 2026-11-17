<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-array-plenum-depth-spacing'); ?>
<p class="lede">Set fan array geometry from the wheel manufacturer's spacing rules, expressed as multiples of wheel diameter: fan-to-fan centres, fan-to-wall clearance, inlet clearance in front of each cone and discharge depth to the next component. Lay out the grid against those minimums, then add space for motor removal and any dampers, and confirm the vendor's performance reflects the final layout.</p>

<h2>Why spacing affects performance</h2>
<p>A plenum fan draws air into its cone from a hemisphere in front of it and throws it radially from the wheel. Walls, neighbouring fans and coils that encroach on either zone change the flow the wheel sees. Too little inlet clearance starves the inlet and adds system effect; too little discharge clearance makes the wheel push against a wall or a coil face, raising pressure loss and noise. Spacing that is generous everywhere wastes unit length. The goal is the minimum that keeps the fan performing close to its rating.</p>
<p>Manufacturers develop spacing rules from testing, and they differ between wheel designs. Always use the rules for the specific fan; the procedure below shows how to apply them.</p>

<h2>Information to collect first</h2>
<ul>
<li>Wheel diameter (D) and overall fan assembly depth, including inlet cone and motor.</li>
<li>Manufacturer's minimums for: centre-to-centre spacing, centre to side wall or floor/roof, inlet cone face to the nearest upstream obstruction, and wheel discharge to the nearest downstream obstruction.</li>
<li>Internal cross-section of the unit and the fan grid (rows × columns) already chosen. Choosing the count is covered in <a href="<?= url('guides/fan-array-number-of-fans') ?>">how to choose the number and size of fans</a>.</li>
<li>Upstream and downstream components and their sensitivity to velocity profile.</li>
<li>Backdraft or isolation damper depth, if used.</li>
<li>Service method for fan removal: slide-out cube, removal through an access door, or lifting from above.</li>
</ul>

<h2>Step-by-step layout</h2>
<ol>
<li><strong>Divide the cross-section into modules.</strong> Module width = internal width ÷ columns; module height = internal height ÷ rows. Each fan sits in the centre of its module.</li>
<li><strong>Check fan-to-fan spacing.</strong> The module width and height are the centre-to-centre distances. Compare them with the manufacturer's minimum centre-to-centre spacing.</li>
<li><strong>Check fan-to-wall spacing.</strong> The distance from the outer fan centres to the casing walls, floor and roof is half a module. Compare with the minimum centre-to-wall rule. If the grid fails, change the grid or wheel size before going further.</li>
<li><strong>Set inlet plenum depth.</strong> Measure from the face of the inlet cones to the leaving face of the nearest upstream component (coil, filter, damper or wall). Use at least the manufacturer's inlet clearance. Add more if the upstream component is a coil whose leaving face must be accessible for cleaning.</li>
<li><strong>Set discharge plenum depth.</strong> Measure from the wheel's discharge edge to the next obstruction downstream. If the next component is a coil or filter, its sensitivity to uneven airflow may justify more distance than the minimum; the velocity profile behind arrays is explained in <a href="<?= url('guides/fan-array-discharge-velocity-uniformity') ?>">fan array discharge velocity uniformity</a>. If the discharge plenum feeds a duct opening, keep the opening velocity reasonable and avoid placing an opening directly in front of one fan.</li>
<li><strong>Add mechanical allowances.</strong> Include motor length behind the wheel, backdraft damper depth, bulkhead thickness and space to slide out a fan module or remove a motor.</li>
<li><strong>Sum the section length.</strong> Inlet clearance + fan assembly depth + discharge clearance + allowances.</li>
<li><strong>Confirm performance.</strong> Ask the fan vendor to confirm that the selection already includes losses for the final geometry, or to add them.</li>
</ol>

<h2>Worked example</h2>
<p>A unit has an internal cross-section of 132 in. wide by 88 in. high (3.35 × 2.24 m). The chosen grid is 4 columns × 2 rows of 24.5 in. (622 mm) wheels. For this example, assume the manufacturer's rules for this wheel are: centre-to-centre at least 1.3 D; centre to wall at least 0.65 D; inlet clearance at least 0.5 D; discharge clearance to a coil at least 1.0 D. These values are placeholders to show the method, not general guidance.</p>
<table>
<thead><tr><th>Check</th><th>Calculation</th><th>Minimum</th><th>Result</th></tr></thead>
<tbody>
<tr><td>Centre-to-centre, horizontal</td><td>132 ÷ 4 = 33.0 in.</td><td>1.3 × 24.5 = 31.9 in.</td><td>Passes</td></tr>
<tr><td>Centre-to-centre, vertical</td><td>88 ÷ 2 = 44.0 in.</td><td>31.9 in.</td><td>Passes</td></tr>
<tr><td>Centre to side wall</td><td>33.0 ÷ 2 = 16.5 in.</td><td>0.65 × 24.5 = 15.9 in.</td><td>Passes</td></tr>
<tr><td>Centre to floor and roof</td><td>44.0 ÷ 2 = 22.0 in.</td><td>15.9 in.</td><td>Passes</td></tr>
<tr><td>Inlet plenum depth</td><td>Set by designer</td><td>0.5 × 24.5 = 12.3 in.</td><td>Use 14 in. for coil access</td></tr>
<tr><td>Discharge depth to cooling coil</td><td>Set by designer</td><td>1.0 × 24.5 = 24.5 in.</td><td>Use 26 in.</td></tr>
</tbody>
</table>
<p>With a fan assembly depth of 30 in. including motor and a 2 in. bulkhead, the section is 14 + 30 + 2 + 26 = 72 in. (1.83 m) before any damper allowance. The horizontal spacing passes only narrowly, so a wider casing or a smaller wheel would be needed if the vendor's rule were tighter.</p>

<h2>Arrangement-specific points</h2>
<h3>Draw-through</h3>
<p>Upstream components sit in the inlet plenum. The inlet clearance protects fan performance, while the discharge plenum usually feeds a duct connection or a final filter. Watch the location of the supply opening relative to the fan grid.</p>
<h3>Blow-through</h3>
<p>The discharge plenum feeds a coil or filter directly, so discharge depth usually governs section length.</p>
<h3>Return and exhaust arrays</h3>
<p>Often discharge into a mixing box or relief plenum. Check clearance to dampers, since damper blades directly in front of fans create uneven loading and noise.</p>

<h2>Common layout errors</h2>
<ul>
<li>Packing fans tight in the middle and leaving large gaps at the walls, which creates dead zones and uneven flow.</li>
<li>Locating a large duct opening directly opposite a single fan, which overloads that fan's discharge path.</li>
<li>Forgetting motor removal space when a cube cannot slide out.</li>
<li>Placing structural members or piping in front of inlet cones.</li>
<li>Using spacing rules from one manufacturer with another manufacturer's wheel.</li>
</ul>
<p class="note">Physical spacing also affects how inlet cone airflow taps read. Fans crowded closer than the rules allow may show airflow readings that do not match a traverse.</p>
<p>If you are comparing layouts for a new unit, the <a href="<?= url('design') ?>">3D configurator</a> shows how fan grid choices change section length.</p>
<?php guide_end([
    ['How far apart should fans in a fan array be?', 'Use the wheel manufacturer\'s minimum centre-to-centre and centre-to-wall spacing, which is expressed as a multiple of wheel diameter and differs between fan designs.'],
    ['How deep does the discharge plenum behind a fan array need to be?', 'At least the manufacturer\'s minimum discharge clearance. When the next component is a coil or filter sensitive to uneven airflow, more depth is often justified.'],
    ['What happens if fan array spacing is too tight?', 'Inlets compete for air and discharges push against walls or neighbours, which reduces airflow and efficiency and increases noise. The fan no longer performs to its rating.'],
    ['Does fan spacing affect inlet cone airflow readings?', 'Yes. Inlet cone K-factors are determined under laboratory inlet conditions, so crowded or obstructed inlets can shift the readings.'],
]);
