<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('coil-specification-guide'); ?>
<p class="lede">A good coil specification sets limits rather than describing a particular coil: maximum face velocity, air and fluid pressure drop, rows and fin density; required materials and wall thicknesses; testing and certification; and the provisions for venting, draining and removal. Capacity and conditions belong on the schedule; the specification makes every bidder build to the same quality.</p>

<h2>What goes in the schedule and what goes in the specification</h2>
<p>Keep duty data on the schedule: airflow, entering and leaving air conditions, capacity, fluid type and temperatures, flow, and any project-specific maximum pressure drops. Put the general requirements that apply to every coil in the specification. That split avoids conflicts when the schedule is revised and the specification is not. Keeping the two separate also makes revisions easier to track.</p>

<h2>Performance and rating requirements</h2>
<p>Sample language:</p>
<p class="note">Coil capacities, pressure drops and selection procedures shall be rated in accordance with AHRI Standard 410. Coils within the scope of the AHRI coil certification program shall be certified and shall bear the AHRI certification statement on the selection printout. Coils outside the program scope shall be identified as such in the submittal, with the reason stated.</p>
<p class="note">Cooling coils shall be selected so that face velocity, calculated on finned area, does not exceed [500] fpm and does not exceed the manufacturer's published moisture carryover limit for the fin type selected. Heating coils shall not exceed [600] fpm.</p>
<p class="note">Cooling coil air pressure drop shall be reported wet at design airflow and shall not exceed the value scheduled. Water pressure drop shall not exceed [15] ft w.c. unless scheduled otherwise.</p>
<p class="note">Water tube velocity at design flow shall be between [2] and [6] ft/s. The submittal shall report tube velocity at the scheduled minimum flow where a minimum flow is scheduled.</p>
<p>The bracketed values are typical starting points, not universal limits. Adjust them for the project: healthcare and education owners often set cooling coil face velocity at 450 fpm or lower. The reasoning behind face velocity limits is in <a href="<?= url('guides/cooling-coil-face-velocity-moisture-carryover') ?>">face velocity and moisture carryover</a>.</p>

<h2>Geometry limits</h2>
<p class="note">Cooling coils shall not exceed [8] rows or [12] fins per inch. Heating coils shall not exceed [14] fins per inch. Where a cooling coil requires more than [8] rows, it shall be furnished as two coils in series with an access section between.</p>
<p class="note">Single cooling coils shall not exceed [42] in finned height. Taller coil banks shall be stacked with intermediate drain pans per the AHU specification.</p>
<p>Limits on rows and fin density protect cleanability. If the project is constrained in length, consider allowing deeper coils with access on both faces rather than raising fin density.</p>

<h2>Materials and construction</h2>
<p class="note">Tubes shall be seamless copper, [5/8] in OD, minimum [0.020] in wall thickness, mechanically expanded into fin collars to form a permanent metal-to-metal bond. Return bends shall have wall thickness not less than the tubes.</p>
<p class="note">Fins shall be [aluminum] [copper], [sine-wave or corrugated] pattern, minimum [0.006] in thickness, with full fin collars.</p>
<p class="note">Coil casings for cooling coils shall be [type 304] stainless steel, minimum [16] gauge. Heating coil casings shall be [galvanized steel] [stainless steel]. Coil casings shall include intermediate tube supports at spacing not exceeding [42] in.</p>
<p class="note">Headers shall be [seamless copper] [steel for steam service], with connections [MPT] [sweat] [flanged] extended through the unit casing. Each coil shall have a vent at the highest point and a drain at the lowest point, extended through the casing and fitted with [brass] valves and caps.</p>
<p class="note">Steam coils shall be of the steam distributing type, with tubes pitched toward the condensate connection, and [90/10 cupronickel] tubes of minimum [0.035] in wall.</p>
<p>Choose the bracketed options from <a href="<?= url('guides/coil-materials-copper-aluminum-stainless') ?>">coil materials</a> for the project environment.</p>

<h2>Coatings (where required)</h2>
<p class="note">Coils indicated on the schedule as coated shall be coated after fabrication with a [cathodic electrocoat epoxy] [baked phenolic] coating applied by immersion, covering all fin, tube, header and casing surfaces. Outdoor coils shall receive a UV-resistant topcoat. Coated capacity and pressure drop shall be shown on the selection printout.</p>

<h2>Testing</h2>
<p class="note">Each coil shall be leak tested at the factory at a pressure not less than [300] psig for water coils, using [air under water] [helium mass spectrometer] [pressure decay] method, and shall be rated for a working pressure not less than [250] psig. Steam coils shall be tested at not less than the pressure required by the manufacturer for the scheduled steam pressure.</p>
<p class="note">DX coils shall be leak tested, dehydrated and shipped with a holding charge of dry nitrogen. DX coils for A2L refrigerants shall be built and tested in accordance with the listing requirements for the refrigerant.</p>
<p>Use test pressures appropriate to the system; high-rise hydronic systems can exceed typical working pressures at the lower floors.</p>

<h2>Arrangement and access</h2>
<p class="note">Coils shall be arranged for counterflow, with supply connections on the leaving-air side and at the bottom. Connection hand shall be as shown on the drawings.</p>
<p class="note">Coils shall be removable without cutting the unit casing or removing other sections. Provide [side-pull through bolted panels] [rails] [coil racks] as indicated on the drawings. Provide access sections upstream and downstream of each cooling coil.</p>
<p>Removal arrangements are compared in <a href="<?= url('guides/removable-coil-design') ?>">removable coil design</a>.</p>

<h2>Submittal requirements</h2>
<p class="note">Submit, for each coil: complete selection printout showing all scheduled values; rows, fins per inch, fin type, tube diameter and wall, finned dimensions; face velocity; wet and dry air pressure drop; fluid pressure drop and tube velocity; materials of tubes, fins, casings and headers; connection sizes and locations; vent and drain locations; coating type; test pressure; and AHRI certification status.</p>

<h2>Items to leave out of the coil section</h2>
<p>Drain pan construction, slope and material belong in the casing portion of the AHU specification, not in the coil section; keeping them together with the casing avoids conflicting requirements. Likewise, control valves are usually specified in the controls division. A full AHU specification framework is described in <a href="<?= url('guides/writing-ahu-specification-23-73-00') ?>">writing an AHU specification</a>.</p>
<?php guide_end([
    ['What should a coil specification include?', 'It should include rating and certification requirements, maximum face velocity and pressure drops, limits on rows and fin density, tube, fin, casing and header materials and thicknesses, coatings where needed, factory testing, counterflow arrangement, vents and drains, removal provisions and submittal contents.'],
    ['Should coil capacity be in the specification or the schedule?', 'Put capacity, airflow, entering and leaving conditions and fluid data on the schedule. Put general requirements that apply to every coil, such as materials, limits and testing, in the specification. This avoids conflicts when one document is revised.'],
    ['What fin density should a coil specification allow?', 'Many specifications cap cooling coils at 10 to 12 fins per inch and heating coils at about 14. Lower limits help cleanability and condensate drainage. Adjust the limit to the owner\'s maintenance expectations.'],
]);
