<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ashrae-241-infection-risk-control'); ?>
<p class="lede">ASHRAE Standard 241, Control of Infectious Aerosols, sets targets for equivalent clean airflow (ECA) per occupant that a building should deliver when it operates in infection risk management mode. Outdoor air, filtered recirculated air and air cleaning devices all count toward the target, each weighted by how effectively it removes infectious aerosols, which lets designers meet it with combinations that cost far less energy than outdoor air alone.</p>

<h2>What the standard covers</h2>
<p>Standard 241 was developed quickly after the COVID-19 pandemic to give building owners a measurable target for reducing airborne transmission. Its core concepts are:</p>
<ul>
<li><strong>Infection risk management mode (IRMM):</strong> a mode of operation the owner activates when the risk of airborne infection is elevated, for example during a respiratory disease season or outbreak. The standard's targets apply in this mode, not necessarily all year.</li>
<li><strong>Equivalent clean airflow per person:</strong> an airflow target, set by space type, that represents the amount of pathogen-free air delivered to the breathing zone.</li>
<li><strong>Building readiness plan:</strong> documentation of how the building meets the targets, how IRMM is activated, and how systems are assessed and maintained.</li>
<li><strong>Testing requirements</strong> for air cleaning devices, including byproduct limits, before they can be credited.</li>
</ul>
<p>Standard 241 is a voluntary consensus standard unless adopted by a jurisdiction or required by an owner. It does not replace ventilation codes, energy codes or healthcare standards; it adds a target on top of them for periods of elevated risk.</p>

<h2>Equivalent clean airflow</h2>
<p>ECA combines the contributions of all the ways air in a space is made free of infectious aerosol:</p>
<p class="formula">ECA = Voz + (Vfilt × Efilt) + (Vac × Eac)</p>
<ul>
<li><strong>Voz:</strong> outdoor air delivered to the zone. Outdoor air is treated as clean.</li>
<li><strong>Vfilt × Efilt:</strong> recirculated airflow through the AHU filter multiplied by the filter's efficiency for the relevant particle sizes, determined from test data as the standard specifies.</li>
<li><strong>Vac × Eac:</strong> airflow through other air cleaners, in-room or in-duct, multiplied by their tested efficiency, or their tested clean air delivery rate.</li>
</ul>
<p>Other mechanisms such as UV-C can contribute when tested under the methods the standard specifies. The ECA is divided by the number of occupants and compared with the target for the space type.</p>
<p>Targets vary by space type and occupant activity. Office space, for instance, is commonly cited at about 30 cfm (15 L/s) per person and classrooms at about 40 cfm (20 L/s) per person; consult the standard's table for the space types in your project, since several categories have much higher targets.</p>

<h2>Illustrative example: an office zone</h2>
<p>An office zone with 20 occupants is supplied with 3,000 cfm total, of which 200 cfm is outdoor air and 2,800 cfm is recirculated through the AHU's final filter. For illustration, assume the standard's method gives the filter an effective efficiency of 50% for infectious aerosol; the actual value depends on the filter's test data.</p>
<p class="formula">ECA = 200 + (2,800 × 0.50) = 1,600 cfm</p>
<p class="formula">ECA per person = 1,600 ÷ 20 = 80 cfm/person</p>
<p>Against an office target of about 30 cfm/person, this zone comfortably complies. With only MERV 8 filtration, at an assumed effective efficiency of a few tens of percent or less, compliance would depend much more heavily on outdoor air. This is why upgrading AHU filtration is often the lowest-cost route to meeting 241 targets.</p>

<h2>How the AHU contributes</h2>
<h3>Outdoor air</h3>
<p>Outdoor air counts fully but costs the most energy to condition, especially in cold Canadian winters and humid summers. Increasing outdoor air beyond code minimums for IRMM is possible but expensive and may exceed coil capacity.</p>
<h3>Filtration</h3>
<p>Higher-efficiency filters raise the credit for every cubic foot of recirculated air. Moving from MERV 8 to MERV 13 or higher typically gives a large increase in ECA for a modest rise in pressure drop. The fan must be able to deliver design airflow with the higher-efficiency filter at its dirty pressure drop. Efficiency values tied to MERV are explained in <a href="<?= url('guides/merv-ratings-ashrae-52-2') ?>">MERV ratings and ASHRAE 52.2</a>.</p>
<h3>Total airflow</h3>
<p>In VAV systems, zone airflow can be far below design for much of the year. The ECA calculation must use the airflow actually delivered in IRMM. Some owners set higher minimum airflows during IRMM to raise the recirculated contribution.</p>
<h3>Filter bypass</h3>
<p>The filter credit assumes air actually passes through the media. Rack leakage reduces the effective efficiency; see <a href="<?= url('guides/filter-bypass-leakage-frames') ?>">filter bypass leakage</a>.</p>
<h3>Air cleaning devices</h3>
<p>The standard requires that air cleaners be tested for performance and for byproducts such as ozone before they are credited. Devices without that testing cannot be counted. A comparison of common supplemental technologies is in <a href="<?= url('guides/uv-c-vs-bipolar-ionization-vs-pco') ?>">UV-C vs bipolar ionization vs PCO</a>.</p>

<h2>Building readiness and operation</h2>
<ul>
<li>Assess each AHU's current outdoor air, filtration and airflow, and calculate ECA per person for each zone.</li>
<li>Identify zones that fall short and choose measures: filter upgrade, higher minimum airflow, more outdoor air, or in-room air cleaners.</li>
<li>Define how IRMM is activated and deactivated and who decides.</li>
<li>Program IRMM sequences in the building automation system where practical.</li>
<li>Verify performance periodically: airflow, outdoor air, filter condition and seal.</li>
</ul>
<p class="note">Healthcare facilities have their own ventilation requirements under ASHRAE 170 and CSA Z317.2, which govern design independently of 241. Standard 241's targets can be used as an additional reference, but they do not replace those standards.</p>

<h2>Designing new AHUs with 241 in mind</h2>
<p>A new unit can be made 241-ready at little cost: a filter section deep enough for MERV 14 to 16, a fan and motor selected for the higher pressure drop, airflow measurement for outdoor and supply air, and controls that can switch into an IRMM sequence. These features also serve wildfire smoke resilience.</p>
<?php guide_end([
    ['What is equivalent clean airflow in ASHRAE 241?', 'Equivalent clean airflow is the outdoor air plus the recirculated or cleaned air delivered to a space, each weighted by its efficiency at removing infectious aerosols. It is expressed per occupant and compared with a target for the space type during infection risk management mode.'],
    ['Does ASHRAE 241 require more outdoor air?', 'Not necessarily. It sets a target for equivalent clean airflow, which can be met by outdoor air, higher-efficiency filtration of recirculated air, air cleaning devices or a combination. Filter upgrades are often the most energy-efficient way to meet it.'],
    ['Is ASHRAE 241 mandatory?', 'ASHRAE 241 is a voluntary consensus standard unless a jurisdiction adopts it or an owner requires it. Its targets apply when a building is operated in infection risk management mode, as defined in the building readiness plan.'],
]);
