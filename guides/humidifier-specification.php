<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('humidifier-specification'); ?>
<p class="lede">A humidifier specification for a custom AHU should fix five things: the type and steam or water source, the capacity at stated conditions, the dispersion and its non-wetting distance within the unit, the materials of everything wetted, and the controls and safeties. Leave the manufacturer to optimize within those, and require submittals that prove each point.</p>

<h2>Decide who furnishes what</h2>
<p>On custom AHUs, the humidifier may be furnished and installed by the AHU manufacturer, furnished by a humidifier supplier and mounted at the AHU factory, or installed entirely in the field. Each changes who is responsible for absorption, drainage and controls. State it explicitly.</p>
<p class="formula">Sample: "Humidifier dispersion assembly shall be factory installed in the air handling unit by the unit manufacturer. Steam generator, where scheduled, shall be furnished by the unit manufacturer for field installation by Division 23. The unit manufacturer shall be responsible for absorption performance within the unit."</p>

<h2>Type and source</h2>
<p>Name the type and, where relevant, the steam or water source:</p>
<ul>
<li>Direct steam injection from plant steam at a stated supply pressure.</li>
<li>Steam-to-steam generator with plant steam at a stated pressure and treated feed water.</li>
<li>Electric resistance or electrode steam generator at a stated voltage and phase.</li>
<li>Gas-fired steam generator with fuel type and venting arrangement.</li>
<li>High-pressure atomizing or evaporative media adiabatic system with water type.</li>
</ul>
<p class="formula">Sample: "Humidifier shall be electric resistance type steam generator, 480 V, 3 phase, 60 Hz, suitable for operation on reverse osmosis water. Electrode type is not acceptable."</p>
<p>The trade-offs that lead to this choice are in <a href="<?= url('guides/steam-generator-vs-direct-steam-injection') ?>">direct steam injection vs steam generator humidifiers</a>.</p>

<h2>Capacity and conditions</h2>
<p>Capacity without conditions is meaningless. Specify:</p>
<ul>
<li>Moisture output in lb/h (kg/h) at design.</li>
<li>Supply airflow through the humidifier section at maximum and minimum.</li>
<li>Entering air dry-bulb and humidity ratio (or RH) at the humidifier at design.</li>
<li>Leaving air condition required.</li>
<li>Turndown required, for example a minimum controllable output as a percentage of capacity.</li>
</ul>
<p class="formula">Sample: "Humidifier shall deliver 280 lb/h at 18,000 cfm with entering air at 62 F and 10 gr/lb, leaving air not to exceed 75 percent RH at the humidifier. Output shall modulate continuously from 10 to 100 percent of capacity."</p>

<h2>Dispersion and absorption</h2>
<p>This is where most problems originate, so be specific:</p>
<ul>
<li>Dispersion type: single tube, multiple-tube manifold, or short-absorption panel.</li>
<li>Full coverage of the section cross section.</li>
<li>Insulated or jacketed tubes where condensation inside the tubes is a concern.</li>
<li>Maximum non-wetting distance, measured from the dispersion to the nearest downstream component, at specified conditions.</li>
<li>Requirement that downstream components be outside that distance.</li>
</ul>
<p class="formula">Sample: "Dispersion shall be a multiple-tube short-absorption manifold with insulated stainless steel tubes covering the full section face. Non-wetting distance shall not exceed 24 inches at scheduled conditions and at minimum scheduled airflow. No filter, coil, fan, attenuator, sensor or damper shall be located within the non-wetting distance."</p>
<p>The factors behind that distance are in <a href="<?= url('guides/humidifier-absorption-distance') ?>">humidifier absorption distance</a>.</p>

<h2>Materials</h2>
<ul>
<li>Dispersion tubes, headers and nozzles: stainless steel of a stated grade or equivalent corrosion-resistant material.</li>
<li>Humidifier section interior panels and floor: stainless steel through the wetting zone and a stated distance beyond.</li>
<li>Drain pan: stainless steel, sloped in two directions to the drain connection.</li>
<li>Wetted piping downstream of RO or DI treatment: compatible materials only.</li>
<li>No exposed fibrous insulation in the humidifier section.</li>
</ul>
<p class="formula">Sample: "Humidifier section interior liner, floor and drain pan shall be Type 304 stainless steel from 12 inches upstream of the dispersion to the end of the non-wetting distance plus 12 inches. Drain pan shall slope to a 1-1/4 inch stainless steel connection."</p>
<p>Adjust the grade, distances and connection size to the project.</p>

<h2>Controls and safeties</h2>
<ul>
<li>Control signal type and source (BAS analog or network).</li>
<li>Modulating control of output.</li>
<li>Airflow proving interlock.</li>
<li>Duct high-limit humidistat, furnished by whom and installed where.</li>
<li>Idle drain timer and, for generators, automatic blowdown based on water conductivity or time.</li>
<li>Integration points for alarms and status via BACnet or other protocol.</li>
</ul>
<p class="formula">Sample: "Humidifier controller shall accept a 0 to 10 VDC demand signal or BACnet MS/TP command, shall be interlocked with supply airflow proving, and shall provide BACnet points for output, status, high-limit trip, low water and service required. A duct high-limit humidity sensor, furnished with the humidifier, shall be field installed in the supply duct downstream of the absorption distance."</p>

<h2>Drains and water</h2>
<ul>
<li>Water type and quality, and supply pressure range.</li>
<li>Drain water tempering to meet plumbing code.</li>
<li>Trap requirements for dispersion header and separator.</li>
<li>Generator drain and fill connections.</li>
</ul>
<p>Water selection is covered in <a href="<?= url('guides/humidifier-water-treatment-ro-di') ?>">how to select water treatment for humidifiers</a>.</p>

<h2>Submittals and testing</h2>
<ul>
<li>Selection printout at scheduled conditions showing capacity, absorption and non-wetting distance.</li>
<li>Drawing of the humidifier section with dimensions to adjacent components.</li>
<li>Wiring diagrams and control sequence.</li>
<li>Material certifications for wetted parts.</li>
<li>Startup report, and for critical projects a factory or field absorption test at full output.</li>
</ul>
<p class="note">Where the unit is run-tested at the factory, ask for the humidifier section to be inspected for wetting during that test if the steam or water source can be provided.</p>
<p>If you are developing a unit with a humidifier and want to see the section arrangement, you can <a href="<?= url('contact') ?>">request a quote</a> with your scheduled conditions.</p>
<?php guide_end([
    ['What should a humidifier specification include?', 'Type and steam or water source, capacity at stated airflow and entering conditions, dispersion type and maximum non-wetting distance, wetted materials, controls and safeties, drains and water requirements, and required submittals.'],
    ['Who is responsible for humidifier absorption in a custom AHU?', 'Whoever the specification names. State it explicitly, usually the unit manufacturer when the dispersion is factory installed, so absorption and downstream clearances are coordinated in one place.'],
    ['Should non-wetting distance be specified?', 'Yes. Specify a maximum non-wetting distance at scheduled conditions and minimum airflow, and require that no downstream component sits within it.'],
]);
