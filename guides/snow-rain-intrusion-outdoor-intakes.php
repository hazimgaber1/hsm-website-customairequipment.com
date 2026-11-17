<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('snow-rain-intrusion-outdoor-intakes'); ?>
<p class="lede">Water and snow get into air handlers when intake velocity is too high for the louver or hood, when the louver is not designed for wind-driven rain, when snow drifts against or above the opening, or when the intake plenum cannot drain. Diagnose by when the problem occurs and what gets wet, then fix the intake rather than the filters.</p>

<h2>Recognising the problem</h2>
<p>Typical signs include wet or frozen prefilters, water in the bottom of the outdoor air or mixing section, rust and staining on the floor near the intake, ice on outdoor air dampers, sudden filter pressure drop spikes during snowstorms, and filter collapse after a wet storm. Microbial growth near the intake is a later consequence. Note when it happens: during driving rain, during fine dry snow with wind, during snow drifts after a storm, or during thaw.</p>

<h2>Symptom: water in the intake during wind-driven rain</h2>
<p><strong>Likely causes:</strong> a standard drainable or stationary louver that is not rated for wind-driven rain; louver velocity above the point at which water penetration begins; louver on a windward façade with no overhang.</p>
<p><strong>Checks:</strong></p>
<ul>
<li>Identify the louver model and look up its AMCA 500-L test data. Two tests are relevant: the water penetration test, which reports the free-area velocity at which water penetration begins, and the wind-driven rain test, which reports effectiveness at a specified wind speed and rainfall rate.</li>
<li>Calculate the actual free-area velocity: outdoor airflow divided by the louver's free area (not its gross face area).</li>
<li>Check whether rain is entering mainly on one wind direction.</li>
</ul>
<p><strong>Fixes:</strong></p>
<ol>
<li>Reduce free-area velocity below the beginning point of water penetration, by enlarging the louver or reducing outdoor airflow if the design allows.</li>
<li>Replace with a wind-driven rain louver rated for the exposure, accepting its higher pressure drop.</li>
<li>Add a sloped, drained plenum behind the louver so water that enters drains back out rather than reaching filters.</li>
<li>Add a moisture eliminator behind the louver where space allows.</li>
</ol>

<h2>Symptom: fine snow on prefilters during cold windy storms</h2>
<p><strong>Likely causes:</strong> fine, dry, wind-blown snow is light enough to be carried through louver blades and hood openings at normal intake velocities. It accumulates on the first surface it reaches, usually the prefilter or damper, and can block airflow within hours.</p>
<p><strong>Checks:</strong></p>
<ul>
<li>Inspect the airflow path from the opening to the first filter. Snow accumulation patterns show where it is getting in.</li>
<li>Measure or calculate velocity through the opening; higher velocity draws more snow.</li>
<li>Check the opening orientation. Openings facing the prevailing winter wind take in the most snow.</li>
</ul>
<p><strong>Fixes:</strong></p>
<ol>
<li>Add or enlarge an intake hood with a downward-facing opening sized for low inlet velocity, so snow falls out before air turns upward into the hood.</li>
<li>Add a snow plenum: an enlarged, drained section between the louver and the filter where air slows and snow settles.</li>
<li>Add a coarse snow screen or mesh well upstream of the filters that can be cleared or that sheds snow more readily than the filters.</li>
<li>Relocate or reorient the intake away from the prevailing winter wind.</li>
<li>In extreme climates, place a preheat section ahead of the prefilter so snow that does enter melts and drains rather than blocking filters. This needs a drain pan and is a design change; see <a href="<?= url('guides/preheat-coil-placement-sizing') ?>">preheat coil placement and sizing</a>.</li>
</ol>

<h2>Symptom: intake blocked or flooded after a storm</h2>
<p><strong>Likely causes:</strong> snow drift height above the intake bottom, intake too close to the roof surface, roof drifting caused by parapets or adjacent equipment, or blocked drains on the roof causing ponding near the intake.</p>
<p><strong>Checks:</strong> Compare intake height above the roof with local snow depth and drifting expectations. Building codes provide roof snow load and drift calculations, which give an indication of likely drift height near obstructions.</p>
<p><strong>Fixes:</strong> Raise the intake on a curb extension or stand; relocate it away from parapets and drift-generating obstructions; keep roof drains clear.</p>

<h2>Symptom: water in the intake during thaw</h2>
<p><strong>Likely causes:</strong> snow accumulated inside the plenum or hood melts in warmer weather or when the unit warms up; plenum has no drain or the drain is frozen; outdoor air damper leaks allow meltwater past.</p>
<p><strong>Checks:</strong> Look for a drain connection in the intake plenum and whether it is trapped, heat-traced or blocked.</p>
<p><strong>Fixes:</strong> Provide a sloped floor and an open or heat-traced drain; clear accumulated snow after storms; seal the intake section floor.</p>

<h2>Diagnostic summary</h2>
<table>
<thead><tr><th>When it happens</th><th>What gets wet</th><th>Most likely fix</th></tr></thead>
<tbody>
<tr><td>Driving rain</td><td>Prefilter face, plenum floor</td><td>Lower louver velocity or wind-driven rain louver</td></tr>
<tr><td>Fine dry snow, high wind</td><td>Prefilter coated with snow</td><td>Low-velocity hood, snow plenum, reorientation</td></tr>
<tr><td>After heavy snowfall</td><td>Intake blocked</td><td>Raise intake above drift line</td></tr>
<tr><td>Thaw</td><td>Plenum floor, filters bottom row</td><td>Drained plenum, clear snow</td></tr>
</tbody>
</table>
<p class="note">Wet filters lose efficiency, can collapse and support microbial growth. Replace filters that have been soaked, and check for growth if wetting has occurred repeatedly; the investigation is described in <a href="<?= url('guides/microbial-growth-ahu-troubleshooting') ?>">diagnosing mold and microbial growth inside AHUs</a>. For outdoor units, weatherproofing of the casing and hoods is covered in <a href="<?= url('guides/outdoor-unit-weatherproofing') ?>">outdoor unit weatherproofing</a>.</p>
<?php guide_end([
    ['Why is snow getting into my air handler?', 'Fine, wind-blown snow is light enough to be carried through louvers and hood openings at normal intake velocities. Openings facing the prevailing winter wind, high intake velocity and the lack of a snow plenum or low-velocity hood all make it worse.'],
    ['How do I stop rain coming through an intake louver?', 'Keep the free-area velocity below the louver\'s beginning point of water penetration from its AMCA 500-L test, use a louver rated for wind-driven rain in exposed locations, and provide a sloped, drained plenum behind the louver.'],
    ['How high should an outdoor air intake be above the roof?', 'High enough to stay above expected snow depth and drifting, debris and ponding. ASHRAE 62.1 and local codes set a minimum distance above the roof surface, but in snowy climates designers often raise intakes much higher, especially near parapets and other drift-causing obstructions.'],
]);
