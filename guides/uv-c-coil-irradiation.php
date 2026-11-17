<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('uv-c-coil-irradiation'); ?>
<p class="lede">UV-C coil irradiation places germicidal ultraviolet lamps inside the air handler, usually on the leaving side of the cooling coil, to keep the wet fin surfaces and drain pan free of biofilm. Because the surfaces are exposed continuously, modest irradiance is enough. The design work is in lamp placement for even coverage, lamp selection for cold moving air, protection of nearby materials and keeping people from being exposed.</p>

<h2>What coil irradiation does and does not do</h2>
<p>Ultraviolet light in the UV-C band damages the genetic material of microorganisms. Low-pressure mercury lamps emit mainly at 254 nanometres, near the peak germicidal effectiveness. UV-C LEDs, typically in the 260 to 280 nm range, are also available.</p>
<p>Cooling coils and drain pans are wet for much of the cooling season and warm for part of the day, which allows biofilm to grow on fins and in pans. Biofilm raises air pressure drop, reduces heat transfer and can be a source of odours and microbial release into the airstream. UV-C directed at those surfaces prevents growth from establishing and, over time, can reduce existing growth.</p>
<p>Coil irradiation is a surface treatment. Air passes the lamps in a fraction of a second, so the dose received by airborne organisms is small; designing UV systems to disinfect the airstream requires much higher output and is a different exercise. Comparisons of UV with other air cleaning technologies are in <a href="<?= url('guides/uv-c-vs-bipolar-ionization-vs-pco') ?>">UV-C vs bipolar ionization vs PCO</a>.</p>

<h2>Lamp placement</h2>
<ul>
<li><strong>Downstream of the cooling coil</strong>, typically 12 to 36 in (300 to 900 mm) from the leaving face, is the most common location. It irradiates the leaving face, the drain pan and the area beneath the coil, where water is present most often.</li>
<li><strong>Upstream placement</strong> is used where downstream space is limited, but it irradiates the entering face, which is usually drier and less prone to growth.</li>
<li><strong>Both sides</strong> are sometimes irradiated on deep coils or in very humid climates.</li>
<li><strong>Coverage:</strong> lamps are usually mounted parallel to the coil tubes or perpendicular across the coil face, spaced so irradiance is reasonably even over the whole face. Manufacturers provide layout software or tables based on coil dimensions and distance.</li>
<li><strong>Drain pan:</strong> confirm the pan surface is in line of sight of at least one lamp.</li>
</ul>
<p>Fin geometry limits penetration. UV-C reaches the first rows directly and the deeper rows only by reflection and through gaps. Coil irradiation is most effective on the face it can see, which is why downstream placement is preferred on wet coils.</p>

<h2>Intensity, dose and lamp performance</h2>
<p>Dose is irradiance multiplied by exposure time. A coil surface is exposed continuously, so even irradiance in the range of tens to a few hundred microwatts per square centimetre at the coil face accumulates a large daily dose. Manufacturers typically express design guidance as minimum irradiance at the coil face. Follow the system manufacturer's guidance rather than a generic number.</p>
<p>Lamp output depends strongly on lamp wall temperature. Low-pressure mercury lamps lose a significant share of their output in cold air moving past them at coil leaving conditions, commonly 50 to 55°F (10 to 13°C) at several hundred feet per minute. Specify lamps rated for the actual air temperature and velocity, often with a jacket or high-output design for HVAC duty, and ask for output data at those conditions.</p>
<p>Output also declines with lamp age. Lamps are typically replaced on a schedule, often annually in continuous operation, rather than when they stop lighting, because a lamp can look lit while producing much less UV-C. A UV-C sensor or meter can verify output.</p>

<h2>Material degradation</h2>
<p>UV-C breaks down many polymers. Over months of exposure it can embrittle or discolour:</p>
<ul>
<li>Filter media and frames, particularly synthetic media within line of sight.</li>
<li>Gaskets, door seals and caulking.</li>
<li>Wire insulation and plastic sensor housings.</li>
<li>Some casing liners, insulation facings and coatings.</li>
</ul>
<p>Design measures include keeping filters out of the lamps' line of sight or shielding them, choosing UV-resistant materials in the irradiated zone, routing wiring behind metal, and using metal or UV-stable sensor housings. Coil coatings should be confirmed as UV-resistant if lamps irradiate a coated coil.</p>

<h2>Safety</h2>
<p>UV-C causes painful eye injury and skin burns at exposure levels far below what reaches the coil. Occupational exposure limits for UV radiation are published by bodies such as ACGIH; any exposure from inside an AHU with lamps on should be treated as hazardous.</p>
<ul>
<li><strong>Door interlocks</strong> that de-energize lamps when access doors to the irradiated section open.</li>
<li><strong>Warning labels</strong> on every door and panel giving access to the lamps.</li>
<li><strong>Viewports</strong> rated to block UV-C, so lamp operation can be checked without opening doors.</li>
<li><strong>Lockout</strong> procedures for lamp service.</li>
<li><strong>Ozone-free lamps</strong>: specify lamps with glass that blocks the 185 nm line, which otherwise produces ozone.</li>
<li><strong>Mercury handling</strong>: spent mercury lamps must be recycled or disposed of under applicable hazardous waste rules, and broken lamps cleaned up following a defined procedure.</li>
</ul>
<p class="warn">Never rely only on labels. Interlocks are the primary protection for technicians who open doors without reading warnings.</p>

<h2>Integration with the unit</h2>
<ul>
<li>Allow space between coil and lamps and between lamps and downstream components in the section layout.</li>
<li>Provide a dedicated electrical circuit, ballast or driver location outside the airstream if possible, and a disconnect.</li>
<li>Bring lamp status and run hours to the building automation system for replacement scheduling.</li>
<li>Coordinate lamp positions with coil removal so lamps do not block the coil pull path.</li>
</ul>
<p>UV-C does not replace good drain pan design or coil cleaning, and it does not dry out water that is not draining. Persistent microbial growth inside a unit usually has a moisture cause; see <a href="<?= url('guides/microbial-growth-ahu-troubleshooting') ?>">diagnosing microbial growth inside AHUs</a> and <a href="<?= url('guides/drain-pan-cleaning-biofilm') ?>">drain pan cleaning and biofilm</a>.</p>
<?php guide_end([
    ['Where should UV lights be installed in an air handler?', 'Most UV-C coil irradiation systems are installed on the leaving side of the cooling coil, so they irradiate the wet leaving face and the drain pan. Lamps are spaced to give even coverage across the coil face, following the manufacturer\'s layout guidance.'],
    ['Do UV lights in an AHU damage filters and gaskets?', 'They can. UV-C degrades many polymers, including synthetic filter media, gaskets, wire insulation and some liners. Keep these out of the lamps\' line of sight, shield them, or use UV-resistant materials in the irradiated zone.'],
    ['How often should UV-C coil lamps be replaced?', 'Many manufacturers recommend replacement about once a year in continuous operation, because output declines with age even though the lamp still lights. Follow the lamp manufacturer\'s rated life and verify output with a UV-C meter where possible.'],
]);
