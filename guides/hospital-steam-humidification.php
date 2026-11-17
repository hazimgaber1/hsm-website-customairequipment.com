<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('hospital-steam-humidification'); ?>
<p class="lede">Hospitals favour steam humidification because steam is sterile at the point of generation, leaves no standing water in the airstream, and absorbs quickly. The catch is that the steam must be free of the boiler treatment chemicals commonly added to plant steam, which is why healthcare projects usually specify clean steam generators or electric units fed with treated water rather than direct injection of house steam.</p>

<h2>Why hospitals need humidification at all</h2>
<p>Healthcare standards set humidity ranges for many spaces. Operating rooms have both upper and lower limits under ASHRAE 170, and CSA Z317.2 sets humidity ranges for a wide range of spaces in Canadian facilities. In cold climates, outdoor air in winter can be extremely dry, so a hospital AHU with high outdoor air fractions must add substantial moisture. Low humidity contributes to static discharge near sensitive equipment, staff and patient discomfort, and drying of mucous membranes. Humidity requirements by space type are summarized in <a href="<?= url('guides/humidity-requirements-by-space-type') ?>">humidity requirements by space type</a>.</p>

<h2>Why steam is preferred</h2>
<table>
<thead><tr><th>Concern</th><th>Steam</th><th>Adiabatic (spray, atomizing, wetted media)</th></tr></thead>
<tbody>
<tr><td>Microbial risk in the airstream</td><td>Very low; steam is above sterilizing temperature when generated and no water reservoir sits in the AHU</td><td>Higher; water is held or sprayed at ambient temperature, and wetted media can support growth if not maintained</td></tr>
<tr><td>Legionella</td><td>Not a credible risk from properly dispersed steam</td><td>Requires strict water treatment, draining and cleaning</td></tr>
<tr><td>Minerals and dust</td><td>Minerals stay in the generator</td><td>Atomizers can carry minerals into the air without RO/DI water</td></tr>
<tr><td>Absorption distance</td><td>Short with multi-tube dispersion</td><td>Longer; wetting of downstream components is a risk</td></tr>
<tr><td>Energy</td><td>Higher, because latent heat is supplied directly</td><td>Lower, but evaporative cooling must be made up by heating</td></tr>
</tbody>
</table>
<p>Older editions of healthcare standards effectively required steam. Later editions of ASHRAE 170 have allowed other humidifier types under conditions, while some Canadian requirements remain more prescriptive. Confirm what the adopted documents permit. Comparison of humidifier technologies generally is in <a href="<?= url('guides/adiabatic-vs-isothermal-humidification') ?>">adiabatic vs isothermal humidification</a>.</p>

<h2>The chemical-free steam requirement</h2>
<p>Central plant boilers often use volatile amines (such as cyclohexylamine, morpholine and diethylaminoethanol) and other additives to control corrosion in condensate return lines. These chemicals travel with the steam. Injecting house steam directly into supply air delivers them to patients and staff. Healthcare standards therefore prohibit or restrict humidifier steam containing treatment chemicals that are harmful in the airstream.</p>
<p>Ways to provide chemical-free steam:</p>
<ul>
<li><strong>Steam-to-steam generators.</strong> Plant steam heats a coil inside a vessel of treated water, producing clean secondary steam. The plant steam never contacts the air.</li>
<li><strong>Hot water-to-steam generators.</strong> High-temperature water heats a vessel in the same way.</li>
<li><strong>Electric resistance or electrode steam generators.</strong> Self-contained; electrode types depend on water conductivity, so resistance types fed with RO or softened water are common in healthcare.</li>
<li><strong>Gas-fired steam generators.</strong> Used where electric capacity is limited.</li>
<li><strong>Dedicated clean steam plants</strong> serving humidifiers and sterilizers, built with materials and treatment suitable for direct contact use.</li>
</ul>
<p>Selection between direct injection and generators is covered in <a href="<?= url('guides/steam-generator-vs-direct-steam-injection') ?>">steam generator vs direct steam injection</a>.</p>

<h2>Water treatment for steam generators</h2>
<ul>
<li>Reverse osmosis or deionized water minimizes scale, reduces blowdown and avoids carrying minerals.</li>
<li>Stainless steel vessels, piping and dispersion tubes are required with RO/DI water because it is aggressive to other metals.</li>
<li>Softened water is an option for some generator types but increases blowdown.</li>
<li>No chemical additives should be used in the humidifier water.</li>
</ul>

<h2>Placement and dispersion in the AHU</h2>
<p>Hospital standards require that humidifiers be located so moisture is fully absorbed before reaching filters, coils, fans or other components that could become wet. Key points:</p>
<ul>
<li>Locate the dispersion manifold downstream of the cooling coil and upstream of the final filter bank, with enough distance for absorption.</li>
<li>Use multi-tube dispersion panels to shorten absorption distance.</li>
<li>Provide a high-limit humidistat downstream to prevent saturation of the airstream.</li>
<li>Provide a drain pan beneath the dispersion section.</li>
<li>Supply air temperature at the dispersion point affects absorption; very cold air holds little moisture.</li>
</ul>
<p class="note">Duct-mounted humidifiers downstream of the AHU are used for zone humidity control in ORs. They need the same absorption checks, and wet duct problems downstream are a frequent complaint.</p>

<h2>Controls</h2>
<ul>
<li>Control on dew point or humidity ratio where several rooms share a unit, so the supply moisture content matches the most demanding room.</li>
<li>Use room RH sensors to reset the supply dew point within limits.</li>
<li>Interlock humidification with proven airflow.</li>
<li>Monitor generator faults and water quality alarms at the BAS.</li>
</ul>

<h2>Energy considerations</h2>
<p>Steam humidification is energy-intensive: roughly 1,000 Btu is needed for each pound of water added (about 2.3 MJ/kg), on top of heating the air. Hospitals in cold climates with high outdoor air fractions can spend a significant share of winter energy on humidification. Ways to reduce it without compromising the healthcare requirements include energy recovery devices that transfer moisture from general exhaust where permitted, using steam-to-steam generators that draw on plant steam rather than electric resistance, and avoiding overhumidification by controlling to the lower end of the permitted range.</p>

<h2>Redundancy and maintenance</h2>
<p>A humidifier failure in winter can push OR humidity below the lower limit within hours. Critical areas often have two steam generators or a generator with a backup source. Maintenance should include periodic inspection of dispersion tubes, drain lines and traps, cleaning of generator vessels, and verification of high-limit operation. These tasks need to be done without shutting down the AHU, which affects how the humidifier section is laid out.</p>
<?php guide_end([
    ['Why do hospitals use steam humidifiers?', 'Steam is effectively sterile when generated, leaves no standing water in the airstream and absorbs quickly. That lowers microbial risk compared with technologies that spray or hold water at room temperature.'],
    ['Can boiler plant steam be injected into hospital air?', 'Generally not directly, because plant steam usually contains corrosion inhibitors such as amines that are harmful in the airstream. Hospitals use clean steam generators or chemical-free steam sources instead.'],
    ['Are adiabatic humidifiers allowed in hospitals?', 'Later editions of ASHRAE 170 allow some non-steam humidifiers under conditions, but many owners and Canadian requirements still favour steam. Check the adopted standards and the owner\'s infection prevention policy.'],
    ['Where should the humidifier be placed in a hospital AHU?', 'Downstream of the cooling coil and upstream of the final filter bank, with enough distance for full absorption before any downstream filter or component.'],
]);
