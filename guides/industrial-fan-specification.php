<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('industrial-fan-specification'); ?>
<p class="lede">An industrial fan specification should define the duty precisely, name the arrangement and construction class, set the materials and bearing requirements for the gas being handled, and state how performance and mechanical integrity will be tested. The sample language below is organized the way most Division 23 or process equipment specifications are, with brackets for project values.</p>

<h2>Duty definition</h2>
<p>Most selection errors start with an incomplete duty. Give the manufacturer every operating point and the gas properties at each:</p>
<ul>
<li>Airflow in actual cfm (acfm) at the fan inlet, and the mass flow or scfm if known.</li>
<li>Static or total pressure at the fan, stating which, at actual density.</li>
<li>Gas temperature (normal, maximum, cold start), barometric pressure or elevation, moisture content and composition.</li>
<li>Particulate loading, size and abrasiveness, and any sticky or condensable components.</li>
<li>Corrosive constituents and their concentrations.</li>
<li>All operating points if the fan runs at several duties, including turndown.</li>
</ul>
<p class="formula">Fan shall deliver [__] acfm at [__] in. w.c. static pressure at the fan inlet, with gas at [__]°F, [__] lb/ft³ density, at site elevation [__] ft. Additional operating points: [__].</p>
<p>The density correction method is covered in <a href="<?= url('guides/fan-density-correction') ?>">correcting fan selections for temperature and altitude</a>.</p>

<h2>Arrangement, rotation and discharge</h2>
<p class="formula">Fan shall be AMCA arrangement [1 / 3 / 4 / 8 / 9 / 10] in accordance with AMCA 99-2404, [clockwise / counterclockwise] rotation and [__] discharge as viewed from the drive side, with motor position [__].</p>
<p>Choose an arrangement with bearings out of the airstream for hot, dirty or corrosive gas. The arrangements are explained in <a href="<?= url('guides/industrial-fan-drive-arrangements') ?>">industrial fan drive arrangements</a>.</p>

<h2>Construction class</h2>
<p>AMCA defines operating limits for centrifugal fan pressure classes (commonly referred to as Class I, II, III and IV) in its standards, based on outlet velocity and static pressure. A fan built to a higher class has heavier construction to run at higher speeds and pressures. Specify the minimum class, and require the manufacturer to confirm the selected fan operates within the limits of that class.</p>
<p class="formula">Fan shall be of AMCA Class [__] construction or higher as required for the specified duty. Wheel shall be designed for operation at not less than [__]% of the selected speed at the maximum operating temperature.</p>
<p class="note">Check the current AMCA standard for the class limits. Many industrial fans are custom-built to the duty and exceed standard class limits; in that case specify maximum safe speed requirements directly.</p>

<h2>Wheel</h2>
<p class="formula">Wheel shall be [airfoil / backward-inclined / radial tip / radial / paddle] type, of [carbon steel / stainless steel type __ / alloy __ / aluminum / FRP], [welded / riveted] construction. Wheel shall be statically and dynamically balanced to balance quality grade [G__] per ISO 21940-11 after final assembly on its shaft.</p>
<ul>
<li>Choose wheel type for the airstream: rugged radial designs for dust, efficient airfoil for clean air.</li>
<li>Specify wear protection where needed: liners, hard-facing, abrasion-resistant plate.</li>
<li>Specify coatings for corrosive service, with thickness and holiday testing.</li>
<li>State maximum tip speed if wear or noise is a concern.</li>
</ul>

<h2>Housing and accessories</h2>
<p class="formula">Housing shall be continuously welded [__]-gauge or [__] in. plate [material], with bolted and gasketed access door, drain connection with plug at lowest point, [split housing for wheel removal], and flanged inlet and outlet.</p>
<ul>
<li>Shaft seal: [packing / lip / labyrinth / ceramic felt] suitable for [__]°F and [__] pressure.</li>
<li>Inlet box, inlet damper or variable inlet vanes if required for control or space.</li>
<li>Outlet damper, flexible connectors and evasé as required.</li>
<li>Insulation and lagging for hot gas or acoustic reasons.</li>
<li>Spark-resistant construction per AMCA 99-0401 Type [A/B/C] if required.</li>
<li>Belt and coupling guards meeting OSHA (U.S.) or provincial occupational safety requirements, with tachometer access.</li>
</ul>

<h2>Shaft and bearings</h2>
<p class="formula">Shaft shall be solid [carbon steel / stainless] designed so that the first critical speed is at least [__]% above maximum operating speed.</p>
<p class="formula">Bearings shall be [spherical roller / ball], in [split pillow block / flanged] housings, selected for an L10 life of not less than [__] hours at maximum operating conditions per ABMA standards. Bearings shall be [grease / oil] lubricated, with extended lube lines where access is restricted.</p>
<ul>
<li>Shaft cooler and heat shield for hot gas duty.</li>
<li>Provisions for vibration sensors and bearing temperature sensors (drilled and tapped mounting points or installed sensors).</li>
<li>Oil-lubricated or water-cooled bearings where speed or temperature requires.</li>
</ul>

<h2>Drive and motor</h2>
<p class="formula">Motor shall be [__] hp, [__] rpm, [__] V/3/60, [TEFC / TEXP / hazardous location rated __], inverter duty where used with a VFD, sized for the densest operating condition including cold start. V-belt drives shall be rated at not less than [1.5] times motor nameplate horsepower.</p>
<p>Motor details belong in the motor specification; see <a href="<?= url('guides/motor-and-drive-specification') ?>">motor and drive specification</a>.</p>

<h2>Performance rating and testing</h2>
<p class="formula">Fan performance shall be rated in accordance with AMCA 210. [Fan shall bear the AMCA Certified Ratings Seal for air performance where available for the model.] Sound data shall be per AMCA 300.</p>
<p class="formula">Each fan shall be mechanically run tested at the factory at operating speed. Vibration shall not exceed [__] in./s peak (or [__] mm/s RMS) at the bearings, measured in horizontal, vertical and axial directions. A written test report shall be provided.</p>
<ul>
<li>Witness testing at the factory if required, with notice period and attendees stated.</li>
<li>Performance testing on the test stand for critical fans.</li>
<li>Material certificates for wheel and shaft.</li>
<li>Non-destructive testing of wheel welds (dye penetrant or magnetic particle) for high-speed or high-temperature wheels.</li>
</ul>

<h2>Submittals</h2>
<ul>
<li>Fan curves at operating density, showing operating points, BHP and efficiency.</li>
<li>Maximum safe speed at maximum temperature.</li>
<li>Dimensional drawings, weights and foundation loads.</li>
<li>Bearing selection and L10 calculation.</li>
<li>Balance grade and vibration acceptance criteria.</li>
<li>Material and coating specifications.</li>
<li>Installation, operation and maintenance manuals.</li>
</ul>
<p>Hot gas fans have additional requirements covered separately. For custom industrial fans built to a written specification and run-tested before shipment, see <a href="<?= url('products/industrial-fans') ?>">industrial fans</a>.</p>
<?php guide_end([
    ['What should an industrial fan specification include?', 'The full duty at actual conditions, arrangement, rotation and discharge, construction class, wheel type and materials, housing features, shaft and bearing requirements, motor and drive, performance rating standards, balance grade and factory testing.'],
    ['What balance grade should an industrial fan meet?', 'Specify a balance quality grade per ISO 21940-11 appropriate to the fan type and speed, often G6.3 or tighter for many industrial fans. Field vibration acceptance limits should also be stated.'],
    ['Should industrial fan performance be AMCA certified?', 'Specify rating in accordance with AMCA 210, and require the AMCA Certified Ratings Seal where the model is in the program. Many custom industrial fans are not catalog models, so rating method and test requirements must be stated.'],
]);
