<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('mine-ventilation-fans'); ?>
<p class="lede">Underground mines depend on main fans that move very large volumes of air through the whole network of shafts, ramps and drifts, and on auxiliary fans that push or pull air from that main circuit into dead-end headings where people and equipment work. The main fans set the overall air quantity; the auxiliary system decides whether it actually reaches the face.</p>

<h2>What mine ventilation must do</h2>
<ul>
<li><strong>Dilute and remove diesel exhaust</strong> from mobile equipment, which in most modern hard rock mines is the dominant airflow driver.</li>
<li><strong>Remove blasting fumes</strong> quickly so crews can re-enter.</li>
<li><strong>Control dust</strong> from drilling, mucking and crushing.</li>
<li><strong>Dilute gases</strong> such as methane in coal and some other mines, and radon in uranium mines.</li>
<li><strong>Control heat</strong> from rock, equipment and auto-compression in deep mines.</li>
<li><strong>Provide breathable air</strong> and support emergency procedures.</li>
</ul>
<p>Canadian provinces regulate mine ventilation through their occupational health and safety and mining regulations. Many jurisdictions tie required airflow to the rated power of diesel equipment operating in an area. The exact rates and rules differ by province and state, so the design must start from the governing regulation.</p>

<h2>Main fans</h2>
<p>Main fans drive air through the entire mine. They are typically installed on the surface at the top of an exhaust or intake raise, or underground at a central location. Two basic schemes:</p>
<ul>
<li><strong>Exhausting system:</strong> main fans at the top of exhaust raises pull air through the mine. The mine is under negative pressure relative to surface. Common in hard rock mines because it simplifies intake shaft use for hoisting and personnel.</li>
<li><strong>Forcing (blowing) system:</strong> main fans push air down intake shafts. The mine is positive. Often chosen where intake air is heated on surface, so the fan handles clean, tempered air.</li>
<li><strong>Push-pull systems</strong> combine both to manage pressure and leakage.</li>
</ul>
<h3>Main fan types</h3>
<table>
<thead><tr><th>Type</th><th>Characteristics</th><th>Typical use</th></tr></thead>
<tbody>
<tr><td>Axial (vane axial, often with adjustable or variable-pitch blades)</td><td>High flow, compact; blade pitch adjustment matches changing mine resistance</td><td>Most main fan installations</td></tr>
<tr><td>Centrifugal</td><td>High pressure, stable curve, robust; larger footprint</td><td>Deep mines with high resistance; some older installations</td></tr>
</tbody>
</table>
<p>Main fans run continuously for years, so efficiency at the actual operating point is important. Mine resistance changes as workings extend, so fans with adjustable pitch, variable speed drives, or staged fans in parallel help keep operation efficient. Fans are frequently installed in parallel for redundancy.</p>
<p class="note">A main fan that stops can quickly create dangerous conditions underground. Mines typically require monitoring, alarms and emergency procedures for main fan failure. Redundancy and backup power are common.</p>

<h2>Auxiliary fans</h2>
<p>Dead-end headings such as development drifts, stopes and raises do not have a through-flow of air. Auxiliary fans connected to flexible or rigid ventilation duct deliver air from the main circuit to the face.</p>
<ul>
<li><strong>Forcing auxiliary:</strong> fan in fresh air pushes air through duct to the face; contaminated air returns along the heading. Gives a strong jet at the face that clears fumes quickly.</li>
<li><strong>Exhausting auxiliary:</strong> fan pulls contaminated air from the face through the duct. The heading stays in fresh air, but face velocity is lower.</li>
<li><strong>Overlap systems</strong> combine both for long headings or dust control.</li>
</ul>
<p>Auxiliary fans are usually axial fans, often in series for long duct runs, sized for the duct's resistance and leakage. Duct leakage along long flexible runs can be large; air delivered at the face may be far less than the fan airflow. Fans in series and parallel are explained in <a href="<?= url('guides/fans-in-parallel-and-series') ?>">fans in parallel and series</a>.</p>
<p class="warn">An auxiliary fan must be placed in fresh air with enough main circuit airflow passing it to avoid recirculation. If the fan draws more air than flows past it, contaminated air from the heading recirculates back into the fan.</p>

<h2>System design</h2>
<ol>
<li><strong>Determine airflow requirements</strong> for each working area from diesel fleet, personnel, blasting and gas control, per the applicable regulation.</li>
<li><strong>Build a ventilation network model</strong> of shafts, raises, drifts and regulators. Mine ventilation simulation software is standard practice.</li>
<li><strong>Calculate resistance</strong> of each airway from its dimensions, roughness and length.</li>
<li><strong>Select main fans</strong> for the total airflow and the resistance of the network, including future development stages.</li>
<li><strong>Distribute air</strong> with regulators, doors and booster fans so each area gets its required quantity.</li>
<li><strong>Design auxiliary systems</strong> for each heading.</li>
<li><strong>Plan for changes</strong> as the mine deepens and expands.</li>
</ol>

<h2>Ventilation on demand</h2>
<p>Ventilation on demand (VOD) adjusts airflow to where equipment and people actually are, using tracking systems, gas monitoring and variable-speed fans. Because fan power rises steeply with airflow, cutting airflow in unused areas yields large energy savings, a principle shown by the fan laws in <a href="<?= url('guides/fan-laws-calculation') ?>">fan laws calculation</a>. VOD also reduces intake air heating cost in cold climates.</p>

<h2>Cold climate considerations</h2>
<p>In northern Canada, intake air must often be heated to prevent ice in intake shafts, protect equipment and keep conditions acceptable. That makes airflow reductions doubly valuable. Intake air heating is covered separately in <a href="<?= url('guides/mine-air-heater-sizing') ?>">sizing direct-fired mine air heaters</a>.</p>

<h2>Construction and durability</h2>
<ul>
<li>Robust housings and blades resistant to dust, moisture and corrosive mine water.</li>
<li>Vibration monitoring and bearing temperature sensors with alarms to surface.</li>
<li>Silencers where main fans are near communities or camps.</li>
<li>Explosion-proof or permissible equipment where gas is present, per regulation.</li>
<li>Access for inspection and maintenance in harsh conditions.</li>
</ul>
<p>Heavy-duty axial and centrifugal fans for mining service are described on our <a href="<?= url('products/industrial-fans') ?>">industrial fans</a> page.</p>
<?php guide_end([
    ['What is the difference between main and auxiliary mine fans?', 'Main fans move air through the whole mine network of shafts and drifts. Auxiliary fans with ducting take air from that circuit and deliver it to dead-end headings where people and equipment work.'],
    ['How much air does an underground mine need?', 'It depends on the governing regulation, which in many jurisdictions ties airflow to the rated power of diesel equipment, plus requirements for blasting fumes, dust, gases and heat. Each province or state has its own rules.'],
    ['What is ventilation on demand in mining?', 'It adjusts airflow to areas where people and equipment are actually working, using tracking, gas monitoring and variable-speed fans. It reduces fan energy and intake air heating costs.'],
]);
