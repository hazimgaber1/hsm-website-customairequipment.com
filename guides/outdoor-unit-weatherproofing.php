<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('outdoor-unit-weatherproofing'); ?>
<p class="lede">An outdoor AHU stays dry when its roof is sloped and overhangs the walls, roof seams are raised standing seams rather than flat lapped joints, wall joints shed water outward, intake openings have hoods that slow incoming air and turn rain away, and every penetration is flashed. The steps below build those features into a unit from the top down.</p>

<h2>Step 1: slope the roof</h2>
<p>Flat roofs on outdoor units hold water. Ponding loads the panels, finds every pinhole and leaves dirt and salt that accelerate corrosion. Build the roof with a positive slope, either:</p>
<ul>
<li><strong>Single slope</strong> across the width, shedding to one side, usually away from the service side so water does not pour onto technicians opening doors.</li>
<li><strong>Peaked (gable)</strong> roof shedding to both sides, common on wide units.</li>
</ul>
<p>The roof should overhang the walls on all sides so water drips clear of the wall panels and door gaskets, with a drip edge at the lip. Design the roof for snow load and drifting where the unit sits beside parapets, penthouses or taller equipment; the structural basis is covered in <a href="<?= url('guides/seismic-wind-structural-casing-design') ?>">structural design for seismic and wind loads</a>.</p>
<p class="note">A separate roof over the casing's top panels, with an air gap or insulation between, provides a second line of defence and protects the top panels from UV and hail.</p>

<h2>Step 2: make roof seams stand up</h2>
<p>Where roof sheets meet, turn their edges up and lock or crimp them together to form a standing seam several inches high. Water running down the roof flows past the seam instead of across it. Seams should run in the direction of the slope, not across it. Where a seam must cross the slope, as at a section split, use a raised cap or saddle that sheds water to both sides.</p>
<ul>
<li>Seal seams with a sealant compatible with the roof coating, but rely on geometry, not sealant, to keep water out.</li>
<li>Avoid exposed fasteners through the roof. Where they cannot be avoided, use sealing washers and place them on the high side of seams.</li>
<li>At shipping splits, provide a factory-designed field seam cap so installers do not improvise, and include its installation steps in the field joining instructions.</li>
</ul>

<h2>Step 3: detail walls and joints to shed water</h2>
<ul>
<li>Panel joints on walls should be designed so that the outer skin laps downward and outward, like clapboard, so water running down the face flows past the joint rather than into it.</li>
<li>Vertical joints should be covered by battens or formed interlocks that shed water to the outside.</li>
<li>Door frames need a rain drip or hood above them and gaskets that face away from the water path.</li>
<li>The joint between wall panels and the base should keep water outside the base channel, not direct it in.</li>
</ul>

<h2>Step 4: hood the intakes</h2>
<p>Outdoor air openings are where most water and snow enter. A rain hood on the unit is a sheet metal canopy over the intake opening with an open bottom or side, sometimes fitted with a bird screen and a moisture eliminator or louver.</p>
<ol>
<li><strong>Size the hood for low face velocity.</strong> Rain and snow are drawn in when air enters fast. Hoods are typically sized so velocity through the open face is low enough that drops fall out; manufacturers publish recommended limits, and lower is better in snow country.</li>
<li><strong>Face the opening downward or sideways.</strong> Air enters from below, so falling rain is shielded by the hood top.</li>
<li><strong>Add a moisture eliminator or louver where wind-driven rain is likely.</strong> Louvers tested for water penetration under AMCA 500-L provide documented performance.</li>
<li><strong>Drain the bottom of the intake section.</strong> Provide a sealed or welded floor with a drain behind the hood to remove water that gets past; see <a href="<?= url('guides/drainable-welded-ahu-floors') ?>">drainable floors</a>.</li>
<li><strong>Plan for snow.</strong> In heavy snow regions, raise the hood opening above expected snow depth on the roof, orient it away from prevailing wind, and consider snow-resistant hood designs or heated hoods.</li>
</ol>
<p>Intake location relative to exhaust and contaminant sources is a separate topic; see <a href="<?= url('guides/snow-rain-intrusion-outdoor-intakes') ?>">snow and rain intrusion at outdoor intakes</a> for site-level intake measures.</p>
<p>Relief and exhaust openings need hoods too, with backdraft dampers to stop wind-driven rain entering when the fan is off.</p>

<h2>Step 5: flash every penetration</h2>
<ul>
<li>Bring piping, conduit and duct connections through the bottom of the unit or through a vestibule wherever possible, rather than through the roof.</li>
<li>Where a penetration through the roof or a wall is unavoidable, use a raised curb or boot with flashing that laps over the roof surface on the high side.</li>
<li>Seal around conduit hubs with gasketed weatherproof fittings.</li>
<li>Penetration sealing methods for leakage and thermal performance are in <a href="<?= url('guides/casing-penetration-sealing') ?>">sealing casing penetrations</a>.</li>
</ul>

<h2>Step 6: protect the materials</h2>
<p>Weatherproofing also means the casing must survive sun, salt and freeze-thaw. Use UV-stable coatings or materials suited to the site's corrosivity, stainless or coated hardware, and UV-resistant gaskets. Avoid details that trap water against metal, such as horizontal ledges without drainage.</p>

<h2>Step 7: test it</h2>
<ol>
<li>Inspect roof seams, caps and hoods before shipping.</li>
<li>Where specified, perform a water spray test at the factory, spraying roof and walls with the unit closed and checking inside for leaks.</li>
<li>After installation, inspect field seams and penetrations and repeat a hose test where practical.</li>
<li>Recheck after the first heavy rain or snow.</li>
</ol>
<?php guide_end([
    ['How are outdoor air handlers weatherproofed?', 'With a sloped roof that overhangs the walls, standing roof seams, wall joints that shed water outward, rain hoods over intakes and exhausts, flashed penetrations and weather-resistant materials and coatings.'],
    ['Why do outdoor AHU roofs need slope?', 'Flat roofs hold water, which eventually finds seams and fasteners, adds load and speeds corrosion. A sloped roof sheds water immediately, keeping seams and the casing below dry.'],
    ['How do I keep snow out of an outdoor air intake?', 'Use a hood sized for low intake velocity, with the opening facing down or away from prevailing wind and raised above expected snow depth. Add a drained floor behind the hood, and consider moisture eliminators or heated hoods in heavy snow regions.'],
]);
