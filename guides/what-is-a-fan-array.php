<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('what-is-a-fan-array'); ?>
<p class="lede">A fan array (often called a fan wall) replaces one or two large fans in an air handler with a grid of smaller direct-drive plenum fans that run together in parallel. The grid moves the same air in a much shorter section and keeps the unit running if one fan fails.</p>

<h2>The basic idea</h2>
<p>A traditional air handler moves its design airflow with a single large centrifugal fan, sometimes two. A fan array divides that airflow among several identical fans, commonly anywhere from four to more than twenty, mounted side by side on a common bulkhead. Each fan is a small plenum (plug) wheel with its own motor, usually direct drive, and each draws air through its own inlet cone and discharges into a shared pressurized plenum.</p>
<p>Because the fans operate in parallel against the same pressure, their airflows add together. Twelve fans each moving 2,500 cfm at 4 in. w.c. deliver 30,000 cfm at 4 in. w.c. The system sees one large fan; the owner gets many small ones.</p>

<h2>Why smaller fans make a shorter unit</h2>
<p>Wheel diameter drives fan section length. A plenum fan needs axial space for the wheel, the motor behind it and clearance on the inlet and discharge sides, all of which scale with diameter. A single 49-inch wheel can need a fan section several feet longer than an array of 18-inch wheels covering the same cross-section. In custom units, the saving commonly runs from a few feet to more than half the length of a conventional fan section.</p>
<p>That length matters most where space is fixed:</p>
<ul>
<li>Replacing an air handler in an existing mechanical room where the old unit's footprint is the limit.</li>
<li>Rebuilding a unit in place, where a fan array can pass through doorways as individual fan cubes. See <a href="<?= url('guides/fan-wall-retrofit-existing-ahu') ?>">fan wall retrofits in existing AHUs</a>.</li>
<li>Penthouse and rooftop units where every foot of length adds structural load and cost.</li>
</ul>

<h2>Redundancy as a built-in feature</h2>
<p>With a single fan, a failed bearing or motor stops the unit. With an array, the remaining fans keep running. If the array was selected with spare capacity, the other fans speed up and the unit still meets design airflow. Even without spare capacity, the unit continues at reduced airflow while a technician swaps the failed module, often without a full shutdown.</p>
<p>How much spare capacity to provide, and how many fans can fail before airflow drops, is a sizing decision covered in <a href="<?= url('guides/fan-array-redundancy-n1-vs-n2') ?>">N+1 vs N+2 redundancy</a>. Stopping air from short-circuiting backward through a stopped fan is covered in <a href="<?= url('guides/backdraft-dampers-vs-blank-off-plates') ?>">backdraft dampers vs blank-off plates</a>.</p>

<h2>Other benefits owners notice</h2>
<h3>Maintenance</h3>
<p>Direct-drive fans eliminate belts, sheaves and belt dust, and the routine retensioning that goes with them. Each motor and wheel is small enough for one or two people to handle. Many arrays use a cube or module construction so a complete fan assembly slides out as a unit.</p>
<h3>Sound</h3>
<p>Smaller wheels spin faster, which pushes their blade-pass tone to higher frequencies that are easier to attenuate. Many arrays show lower low-frequency sound than a single large fan of equal duty, although results depend heavily on the specific selection and cabinet. The acoustic side is treated in its own guide.</p>
<h3>Airflow across downstream components</h3>
<p>Many small discharges spread across the full cross-section can produce a more even velocity profile at a downstream coil or filter than one large fan, provided the spacing is right.</p>
<h3>Turndown and control</h3>
<p>Arrays can be run on one drive or one drive per fan, and individual fans can be staged off at very low airflow. That gives wide turndown, useful in labs and data centres.</p>

<h2>Trade-offs to weigh</h2>
<ul>
<li><strong>Fan efficiency:</strong> small wheels are sometimes less efficient than one large, well-selected wheel. A good array selection balances fan count against wheel efficiency rather than simply using the most fans that fit.</li>
<li><strong>Electrical complexity:</strong> more motors means more wiring, more overload protection and possibly more drives. Electrical coordination needs to start early.</li>
<li><strong>Cost:</strong> the motors and drives add first cost, which may or may not be offset by the shorter casing and lower maintenance.</li>
<li><strong>Controls:</strong> the sequence has to handle fan failure, restart and staging properly.</li>
</ul>
<p class="note">A fan array is not automatically more efficient than a single fan. The energy case depends on wheel size, motor type and how the array runs at part load, so compare brake horsepower at your actual operating points.</p>

<h2>Where fan arrays are used</h2>
<p>Fan arrays have become a standard option in custom air handlers for hospitals, laboratories, data centres, cleanrooms and large commercial buildings: anywhere the cost of a fan outage is high or the space is tight. They work as supply fans, return fans and exhaust fans, in draw-through and blow-through positions, and with either EC motors or induction motors on VFDs.</p>
<p>Custom Air Equipment builds <a href="<?= url('products/fan-arrays') ?>">fan arrays</a> into new custom units and as retrofit fan walls, and run-tests them in the factory before shipment.</p>
<?php guide_end([
    ['What is a fan wall?', 'Fan wall is a common name for a fan array: a grid of small direct-drive plenum fans mounted on a bulkhead inside an air handler and operating in parallel to deliver the unit\'s total airflow.'],
    ['How does a fan array provide redundancy?', 'Because many fans share the airflow, losing one fan reduces capacity only by that fan\'s share. If the array has spare capacity the remaining fans speed up to cover the loss.'],
    ['Are fan arrays more energy efficient than a single fan?', 'Not automatically. Efficiency depends on the wheel size selected, the motors and drives used and how the array operates at part load. A well-selected array can match or beat a single fan, but each selection should be checked.'],
    ['Can a fan array replace the fan in an existing air handler?', 'Yes. Fan arrays are often used to replace a large belt-driven fan in an existing casing because the modules are small enough to pass through doors and the array needs less length.'],
]);
