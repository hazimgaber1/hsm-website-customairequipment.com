<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('semiconductor-fab-makeup-air'); ?>
<p class="lede">In a semiconductor fab, the makeup air units (MAUs) do nearly all the latent conditioning and chemical cleaning for the cleanroom, while the recirculation system handles particles and sensible heat. That split means fab MAUs are very large, hold supply dew point within a narrow band year-round, and remove airborne molecular contamination as well as particles.</p>

<h2>Why fabs use dedicated makeup air units</h2>
<p>A fab cleanroom recirculates enormous volumes of air through ceiling filters, usually fan filter units or a pressurized plenum, to hold ISO 3 to ISO 5 conditions over the process tools. That recirculation is cooled by dry sensible coils, often in return air chases, using medium-temperature chilled water that never condenses moisture.</p>
<p>Outdoor air enters only through the MAUs. Because the MAU air is the only source of moisture removal or addition, the MAUs effectively set the humidity of the entire cleanroom. Process tools also exhaust large amounts of air through acid, caustic, solvent and general exhaust systems, and the MAUs must replace all of it plus pressurization leakage. In a large fab, that makeup airflow can be very large, and multiple MAUs operate in parallel on a common supply header.</p>

<h2>Tight dew point control</h2>
<p>Photolithography and some metrology processes are sensitive to humidity because it affects resist chemistry and dimensional stability. Fab specifications commonly hold cleanroom RH within a few percent and temperature within a fraction of a degree to a degree in critical areas. Since the recirculation coils are dry, controlling humidity means controlling MAU supply dew point.</p>
<p>A typical MAU section sequence for a cold-winter, humid-summer climate:</p>
<ol>
<li>Outdoor air intake with louvers and moisture eliminators</li>
<li>Prefilters and, where needed, chemical filtration</li>
<li>Preheat coil with freeze protection</li>
<li>Precooling coil, sometimes on medium-temperature water for energy savings</li>
<li>Main cooling coil on low-temperature chilled water to reach the target dew point</li>
<li>Humidifier, often adiabatic with high-purity water, for winter moisture addition</li>
<li>Reheat or temperature trim coil</li>
<li>Fan array</li>
<li>Final high-efficiency or HEPA filters</li>
</ol>
<p>The control target is the leaving dew point, held steady regardless of outdoor conditions. Cooling coil leaving temperature, humidifier output and reheat are sequenced to hit that dew point and a supply temperature that suits the recirculation system. Controlling to low supply dew points is discussed further in <a href="<?= url('guides/low-dew-point-supply-air') ?>">low dew point supply air</a>.</p>
<p class="note">Splitting cooling between a precooling coil on warmer water and a final coil on colder water lets the chiller plant produce most of the cooling at higher efficiency. It is a common energy measure on large MAUs.</p>

<h2>Humidification with high-purity water</h2>
<p>Steam humidification can introduce boiler chemicals, and some fabs avoid it near sensitive processes. Adiabatic humidification with deionized or reverse-osmosis water is common in MAUs because the large airflow and generous section length allow absorption, and evaporation provides some free cooling in winter. Water quality, wetted materials and drain arrangements need careful specification to avoid introducing contamination. The trade-offs between humidifier types are covered in <a href="<?= url('guides/adiabatic-vs-isothermal-humidification') ?>">adiabatic vs isothermal humidification</a>.</p>

<h2>Chemical filtration for airborne molecular contamination</h2>
<p>Particles are not the only contaminant that harms wafers. Airborne molecular contamination (AMC), including acids, bases, condensable organics and dopants, can damage processes at very low concentrations. Outdoor sources include traffic, nearby industry and the fab's own exhaust stacks. SEMI standards classify AMC by group and give a framework for setting limits, which the fab owner's contamination specialists translate into requirements.</p>
<p>MAUs commonly include chemical filter stages with media selected for the target contaminants: impregnated carbon or other adsorbents for acids and organics, and specific media for bases such as ammonia. Placing these filters in the MAU treats the outdoor air before it mixes with the recirculation flow. Media selection is detailed in <a href="<?= url('guides/gas-phase-carbon-filtration') ?>">gas-phase carbon filtration</a>.</p>
<table>
<thead><tr><th>Contaminant group</th><th>Typical sources</th><th>Typical control</th></tr></thead>
<tbody>
<tr><td>Acids</td><td>Combustion, industrial emissions, fab acid exhaust re-entrainment</td><td>Impregnated adsorbent media</td></tr>
<tr><td>Bases</td><td>Agriculture, cleaning products, people</td><td>Acid-impregnated media for ammonia and amines</td></tr>
<tr><td>Condensable organics</td><td>Traffic, solvents, construction materials</td><td>Activated carbon</td></tr>
<tr><td>Dopants</td><td>Process materials</td><td>Source control and specific media</td></tr>
</tbody>
</table>

<h2>Scale, redundancy and construction</h2>
<p>Fab MAUs are among the largest air handlers built, often field-assembled from shipping sections. Typical features include:</p>
<ul>
<li><strong>Multiple units in parallel</strong> on a common supply header, sized so the fab stays in control with one MAU out of service.</li>
<li><strong>Fan arrays</strong> for internal redundancy and the ability to service a fan without shutting down the unit.</li>
<li><strong>Low-leakage casings</strong> because unfiltered air drawn in downstream of chemical filters bypasses treatment.</li>
<li><strong>Materials suited to high-purity water,</strong> such as stainless steel in humidifier sections and drain pans.</li>
<li><strong>Extensive instrumentation</strong> for airflow, dew point, filter pressure drop and chemical filter breakthrough.</li>
<li><strong>Weatherproof construction or a dedicated penthouse,</strong> since fab MAUs are often located on the roof or in a mechanical level.</li>
</ul>
<p class="warn">Do not size MAU capacity only on summer dry bulb. Fab latent load is driven by outdoor dew point, and the coldest winter conditions drive preheat and humidifier capacity. Check both extremes.</p>

<h2>How fab MAUs differ from pharmaceutical units</h2>
<p>Pharmaceutical cleanrooms often use central AHUs that do both recirculation and conditioning, with sterility and cleanability as the main concerns. Fab MAUs are pure outdoor air units serving a separate recirculation system, with chemical cleanliness and dew point stability as the main concerns, and they operate at much larger scale. The recirculation side of a fab is often FFU-based; that comparison is in <a href="<?= url('guides/fan-filter-units-vs-central-ahu') ?>">fan filter units vs central AHU recirculation</a>.</p>
<?php guide_end([
    ['What does a makeup air unit do in a semiconductor fab?', 'It conditions all of the outdoor air entering the cleanroom, controlling dew point, temperature and chemical contamination. It also replaces the large volume of air removed by process tool exhaust systems.'],
    ['Why is dew point control so important in fabs?', 'Recirculation coils in fabs are usually dry, so the makeup air is the only means of controlling humidity. Lithography and other processes are sensitive to humidity, so supply dew point must be held steady year-round.'],
    ['What is airborne molecular contamination?', 'AMC refers to gaseous contaminants such as acids, bases, organics and dopants that can damage semiconductor processes at very low concentrations. Chemical filter stages in the makeup air units remove them from outdoor air.'],
]);
