<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('office-vav-ahu-design'); ?>
<p class="lede">An office VAV air handler is a cooling-dominated, variable-airflow machine: it supplies cool air at a roughly fixed temperature, lets terminal boxes throttle each zone, and spends most of its life running at 40% to 70% of design flow. Designing it well means sizing for the coincident peak, selecting a fan that stays efficient deep into turndown, and zoning so the boxes can actually do their job.</p>

<h2>What the office duty looks like</h2>
<p>Modern office floors carry moderate lighting loads, variable plug loads and occupant densities far lower than schools or assembly spaces. Perimeter zones swing with solar gain and envelope losses; interior zones need cooling almost year round. A VAV air handler serves both from a single supply air stream, typically delivered at 55°F (13°C) at design and reset upward when loads allow.</p>
<p>Three features define the duty:</p>
<ul>
<li><strong>Diversity.</strong> Not every zone peaks at the same time. East offices peak in the morning, west offices in late afternoon. The air handler is sized for the block (coincident) load, which is usually 70% to 85% of the sum of zone peaks depending on orientation mix.</li>
<li><strong>Long hours at part load.</strong> Annual operating hours are concentrated well below design airflow. Fan efficiency at 50% flow matters at least as much as at 100%.</li>
<li><strong>Economizer opportunity.</strong> With a constant interior cooling load, an airside economizer provides free cooling for a large share of the year in most North American climates.</li>
</ul>

<h2>Sizing the air handler</h2>
<p>Size design supply airflow from the block sensible load, using the sensible heat equation with the chosen supply temperature:</p>
<p class="formula">CFM = Qs ÷ (1.08 × (T room − T supply))</p>
<p>The detailed derivation, including how fan heat and duct gains affect the supply temperature you actually get at the diffuser, is in <a href="<?= url('guides/supply-airflow-from-sensible-load') ?>">supply airflow from sensible load</a>. For a typical office, design airflow frequently lands around 0.8 to 1.2 cfm/ft² (4 to 6 L/s·m²), but treat that as a sanity check only.</p>
<p>The cooling coil is selected for the block load at design mixed-air conditions, and coil face velocity is normally kept at or below about 500 fpm (2.5 m/s) to avoid moisture carryover. The heating side in VAV offices is often limited to a morning warm-up coil or preheat, with zone heating handled at the terminal reheat coils or perimeter radiation.</p>

<h2>Turndown and fan selection</h2>
<p>A VAV unit that is well selected at design but poorly selected at part load wastes energy for thousands of hours. When choosing fans:</p>
<ul>
<li>Plot the system curve with static pressure reset in mind. Duct static reset lowers the operating points at part load, moving the fan toward lower pressure and flow along a curve that does not pass through zero.</li>
<li>Check that the fan stays out of its unstable region at minimum airflow. Some selections that look ideal at peak drift toward surge at 30% flow.</li>
<li>Consider a fan array. Several smaller direct-drive fans on variable-speed drives give a wide stable operating range, and individual fans can be staged off at very low flow.</li>
<li>Confirm the motor and drive combination remains efficient at low speed, especially for EC motors or permanent-magnet motors.</li>
</ul>
<p>Minimum airflow is set by the highest of several limits: the minimum outdoor air the unit must deliver, the minimum flow the fan can handle stably, and the minimum flow the coils and heat exchanger need to avoid freezing or laminar flow. The broader topic is covered in <a href="<?= url('guides/ahu-turndown-minimum-airflow') ?>">AHU turndown and minimum airflow</a>.</p>

<h3>Outdoor air at part load</h3>
<p>The classic VAV weakness is outdoor air control. With a fixed minimum outdoor air damper position, outdoor airflow falls as the supply fan slows. Specify an airflow measuring station on the outdoor air path, or a dedicated minimum outdoor air damper with its own measurement, so the controls hold the required intake regardless of supply airflow.</p>

<h2>Zoning a VAV office</h2>
<p>Zoning decisions are as important as the air handler itself. A few practical rules hold across most projects:</p>
<ol>
<li>Separate perimeter zones by exposure. A north and a south office on the same box will never both be comfortable.</li>
<li>Keep perimeter zone depth to roughly 12 to 15 ft (3.5 to 4.5 m) from the glass. Beyond that, loads behave like interior space.</li>
<li>Group interior open-plan areas into larger zones; their loads are fairly uniform.</li>
<li>Give conference rooms their own boxes, ideally with occupancy sensors, because their loads swing from zero to very high quickly.</li>
<li>Keep the number of zones per air handler reasonable for the controls. Very large systems are harder to commission and have a higher chance of one rogue zone driving supply temperature reset or static pressure reset.</li>
</ol>
<p class="warn">One zone with an undersized box or a stuck damper can request maximum static pressure continuously and defeat static pressure reset for the whole system. Plan trim-and-respond logic that can ignore a persistent rogue zone.</p>

<h2>Supply temperature and humidity</h2>
<p>A 55°F (13°C) supply air setpoint provides adequate dehumidification in humid climates. Raising it during mild weather saves chiller energy and reduces reheat, but raises fan energy and can let space humidity creep up. Guideline-style sequences reset supply temperature based on zone cooling requests, constrained by an outdoor dew point limit. In dry Canadian winters, the opposite issue arises: humidification may be required, and VAV systems with large economizer fractions bring in very dry outdoor air.</p>

<h2>Unit construction details for office service</h2>
<ul>
<li>Return or relief fan arrangement chosen to match building pressurization needs and economizer operation.</li>
<li>Low-leakage dampers on outdoor air and relief to meet energy code requirements.</li>
<li>Sound attenuation designed with the mechanical room location in mind, because office mechanical rooms often sit next to tenant space.</li>
<li>Generous access sections between components for coil cleaning and fan service.</li>
</ul>
<p>Whether the building should use one central unit or many smaller units per floor is a separate decision, covered in <a href="<?= url('guides/central-vs-floor-by-floor-office-ahus') ?>">central plant vs floor-by-floor AHUs</a>. When the duty is settled, our <a href="<?= url('design') ?>">3D configurator</a> is a quick way to explore section layouts.</p>
<?php guide_end([
    ['What supply air temperature should an office VAV system use?', 'A design supply temperature of about 55°F (13°C) is common because it provides dehumidification in humid weather. Most sequences reset it upward at part load to reduce reheat and chiller energy, limited by outdoor dew point.'],
    ['How much should a VAV air handler turn down?', 'Office VAV units commonly run between 40% and 70% of design airflow for most of the year, and must be stable well below that. The real minimum is set by outdoor air needs, fan stability and coil limits.'],
    ['Should I size the AHU for the sum of zone peaks?', 'No. Size it for the block or coincident load, which is lower because zones on different exposures peak at different times. The terminal boxes are sized for their individual zone peaks.'],
]);
