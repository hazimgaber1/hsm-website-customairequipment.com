<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-thrust-restraints'); ?>
<p class="lede">A fan pushing air builds pressure that reacts against the fan itself, producing a horizontal force called thrust. On rigid mounts that force is harmless, but on soft spring isolators it can push the fan sideways or tilt it, stretching flexible connections and misaligning the inlet. Thrust restraints are adjustable spring rods that react that force so the fan stays centred while still isolated.</p>

<h2>Where the force comes from</h2>
<p>A fan accelerates air and raises its pressure. By Newton's third law, the air pushes back on the fan. For a housed centrifugal fan discharging horizontally into a duct, the reaction acts opposite to the discharge direction and is roughly equal to total pressure multiplied by the outlet area. For an axial fan, it acts along the shaft, opposite to the airflow.</p>
<p class="formula">Thrust (lb) ≈ TP (in. w.c.) × 5.2 × Outlet area (ft²)</p>
<p class="formula">Thrust (N) ≈ TP (Pa) × Outlet area (m²)</p>
<p>The 5.2 factor converts inches of water to pounds per square foot. This is a simplification; manufacturers can provide a more precise value accounting for velocity pressure and geometry.</p>
<p><strong>Example:</strong> a housed fan with a 3 ft × 3 ft outlet (9 ft², 0.84 m²) develops 4 in. w.c. (about 1,000 Pa) total pressure.</p>
<p class="formula">Thrust ≈ 4 × 5.2 × 9 = 187 lb (about 830 N)</p>
<p>If the fan, motor and base weigh 1,500 lb (680 kg), the thrust is about 12 percent of the isolated weight.</p>

<h2>Why it matters on isolators</h2>
<p>Spring isolators are designed to be soft vertically, and they are usually also fairly soft horizontally. A horizontal force applied above the springs does two things:</p>
<ul>
<li><strong>Displaces the fan sideways</strong> by an amount equal to the thrust divided by the total lateral stiffness of the springs.</li>
<li><strong>Tilts the fan</strong>, because the thrust acts at the outlet centreline, which is above the spring plane. The springs on one side compress further while those on the other side extend.</li>
</ul>
<p>Continuing the example: four springs each carrying 375 lb at 1 in. deflection have a vertical rate of 375 lb/in. each. If the lateral stiffness is about half the vertical rate, total lateral stiffness is 4 × 187 = 750 lb/in., so the sideways movement is roughly 187 ÷ 750 = 0.25 in. Add tilt, and the outlet flange can move further.</p>
<p>That movement happens every time the fan starts and reverses when it stops. Over time it can:</p>
<ul>
<li>Overstretch or tear the flexible duct connector, which then becomes rigid when fully extended and transmits vibration.</li>
<li>Shift the wheel relative to the inlet cone, changing clearance and affecting performance.</li>
<li>Misalign the drive on belt-driven fans whose motor is mounted off the isolated base.</li>
<li>Cause the fan to "walk" on open springs.</li>
</ul>

<h2>When restraints are needed</h2>
<p>Thrust restraints are typically considered for:</p>
<ul>
<li>Housed fans and axial fans on spring isolators that discharge horizontally into ductwork.</li>
<li>Fans with high total pressure relative to their weight.</li>
<li>Arrangements where the predicted movement would exceed what the flexible connector can take, or would visibly shift the fan.</li>
</ul>
<p>Specifications commonly use a rule of thumb, such as requiring restraints when thrust exceeds a set fraction of the isolated weight or when predicted movement exceeds a set distance. The specific thresholds vary by specification and isolation vendor; follow the project specification or the vendor's recommendation.</p>
<p>Fans on neoprene mounts, which are stiff, and fans mounted rigidly do not usually need restraints. Internally isolated plenum fans inside an AHU casing have no ducted outlet flange, but the wheel still develops a reaction force toward the inlet. The manufacturer handles that through the base design, isolator selection or internal restraints, and the inlet seal must accommodate any movement. How isolation is arranged inside the casing is covered in <a href="<?= url('guides/internal-fan-isolation-vs-unit-isolation') ?>">internal fan isolation vs isolating the whole unit</a>.</p>

<h2>How thrust restraints work</h2>
<p>A thrust restraint is a steel spring in a housing, mounted on a threaded rod. One end attaches to the fan housing or isolated base at the thrust line; the other attaches to the fixed duct or a structural anchor. They are installed in pairs, one on each side of the fan, symmetrical about the centreline of thrust so they do not twist the fan.</p>
<ol>
<li>The springs are selected so that their deflection under the full thrust force is similar to the isolator deflection, keeping the isolation effective.</li>
<li>With the fan off, nuts on the rods are adjusted to preload the springs slightly.</li>
<li>With the fan running, the restraint springs take up the thrust and the fan stays near its at-rest position. Adjustment continues until movement at start and stop is small, typically limited to a fraction of an inch.</li>
<li>Neoprene washers or grommets at the rod ends break any high-frequency path.</li>
</ol>
<p class="note">The restraints must be adjusted with the fan running at design pressure. Adjusted with the fan off, they can either pull the fan out of position when it is stopped or let it move fully when it starts.</p>

<h2>Common mistakes</h2>
<ul>
<li><strong>Restraints installed on one side only</strong>, which twists the fan.</li>
<li><strong>Restraints installed but never adjusted</strong>, so the fan still moves.</li>
<li><strong>Rigid rods used in place of spring restraints</strong>, which bypass the isolation entirely.</li>
<li><strong>Restraints attached to a flimsy duct</strong> instead of a structural point, so the duct moves with the fan.</li>
</ul>
<p>Isolator selection and deflection calculations are separate topics; see <a href="<?= url('guides/spring-vs-neoprene-isolators') ?>">spring vs neoprene vibration isolators</a>. Flexible connector problems caused by uncontrolled thrust are covered in <a href="<?= url('guides/flex-connector-vibration-short-circuits') ?>">troubleshooting vibration short-circuits at flex connectors</a>.</p>
<?php guide_end([
    ['What is fan thrust?', 'Fan thrust is the reaction force on a fan created by the pressure it develops. It is roughly total pressure multiplied by outlet area and acts opposite to the airflow direction. On spring isolators it can push the fan sideways.'],
    ['When are thrust restraints required?', 'They are commonly required for spring-isolated housed or axial fans when thrust is a significant fraction of the isolated weight or would cause noticeable movement. Use the threshold in the project specification or the isolation vendor\'s recommendation.'],
    ['How are thrust restraints adjusted?', 'They are installed in pairs on each side of the fan at the thrust centreline. With the fan running at design pressure, the rod nuts are adjusted so the fan stays near its at-rest position and moves only slightly on start and stop.'],
]);
