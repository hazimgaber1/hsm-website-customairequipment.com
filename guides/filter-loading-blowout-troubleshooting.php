<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('filter-loading-blowout-troubleshooting'); ?>
<p class="lede">Filters that load far faster than expected usually point to an upstream dust source, a failed prefilter or a filter running above its rated velocity. Filters that collapse or blow out point to excessive pressure drop, wet media, pressure surges or weak frames. Filters that look clean but let dust through point to bypass. Each has a short list of checks.</p>

<h2>Symptom 1: Premature loading</h2>
<p>Pressure drop reaches the change-out point in weeks instead of months, or much faster than in comparable units.</p>
<h3>Cause: higher than expected dust load</h3>
<p><strong>Check:</strong> Look at the dust on the filter. Construction dust, pollen, cottonwood fluff, agricultural dust, lint from laundry or process, or soot can each be recognized by appearance. Check for construction nearby, seasonal pollen events, recent wildfire smoke, or an intake close to a loading dock or roadway.</p>
<p><strong>Fix:</strong> For temporary sources, accept shorter intervals or add a disposable pre-pad. For permanent sources, add or upgrade the prefilter stage, relocate the intake if feasible, or add an inertial separator or coarse screen at the outdoor air intake.</p>
<h3>Cause: prefilter missing, bypassed or ineffective</h3>
<p><strong>Check:</strong> Confirm the prefilter is installed, sealed and of the specified efficiency. A missing prefilter or a large gap around it moves the coarse dust load to the final filter.</p>
<p><strong>Fix:</strong> Install and seal prefilters; specify the efficiency on the filter schedule so substitutions do not drop it.</p>
<h3>Cause: velocity above rating</h3>
<p><strong>Check:</strong> Calculate face velocity from measured airflow and the actual filter face area. A bank running at 600 fpm instead of 450 fpm loads faster and starts at higher resistance.</p>
<p><strong>Fix:</strong> Restore design airflow, add filter area, or move to a format with more media. See <a href="<?= url('guides/filter-face-velocity-efficiency') ?>">filter face velocity and efficiency</a>.</p>
<h3>Cause: return air contamination</h3>
<p><strong>Check:</strong> Inspect return plenums and shafts for construction debris, deteriorating insulation or open ceiling spaces.</p>
<p><strong>Fix:</strong> Clean and seal return paths.</p>

<h2>Symptom 2: Collapsed media or blowout</h2>
<p>Pleats folded over, bags torn or pulled off their headers, rigid cells cracked, or filters pulled through or pushed out of the frame.</p>
<h3>Cause: pressure drop far beyond the filter's rated final resistance</h3>
<p><strong>Check:</strong> Read the filter gauge history. Filters left in place well past change-out keep loading until the media or frame fails. Check whether the gauge is working and visible.</p>
<p><strong>Fix:</strong> Change at the scheduled final resistance; add a BAS alarm for high filter pressure drop.</p>
<h3>Cause: wet media</h3>
<p><strong>Check:</strong> Look for water stains, swollen frames or microbial growth. Sources include rain or snow through the intake, cooling coil carryover reaching a downstream filter, humidifier wetting, or condensation from cold outdoor air meeting warm return air in a mixing box.</p>
<p><strong>Fix:</strong> Remove the water source first. Intake water entry is diagnosed in <a href="<?= url('guides/snow-rain-intrusion-outdoor-intakes') ?>">snow and rain intrusion at outdoor air intakes</a>. Use moisture-resistant media and frames in humid locations.</p>
<h3>Cause: pressure surges</h3>
<p><strong>Check:</strong> Damper slamming shut while the fan is running, smoke damper closure, fire alarm shutdowns, or very fast fan starts can momentarily raise pressure across the filter well above its normal value. Trend fan speed, damper positions and section static pressure.</p>
<p><strong>Fix:</strong> Interlock dampers to open before fans start, add VFD acceleration ramps, and check the damper end switches. Select filters with frames and media rated for higher burst pressure in units with known surges.</p>
<h3>Cause: inadequate support</h3>
<p><strong>Check:</strong> Bag filters without spacers can collapse at low airflow or flutter at high airflow. Pleated filters without wire backing or with light frames can buckle. Frames without clips allow filters to be pushed out.</p>
<p><strong>Fix:</strong> Use filters with suitable support for the airflow range, and holding frames with proper clips.</p>
<h3>Cause: filter at a fan discharge</h3>
<p><strong>Check:</strong> A filter bank directly downstream of a fan sees a jet of high velocity on part of its face. Loading and damage concentrate there.</p>
<p><strong>Fix:</strong> Add a diffuser plate or increase the distance from fan to filter. The positioning rules are in <a href="<?= url('guides/prefilter-and-final-filter-arrangement') ?>">prefilter and final filter arrangement</a>.</p>

<h2>Symptom 3: Dust downstream despite clean-looking filters</h2>
<p>Coils, ducts or diffusers get dirty, or occupants report dust, but filters do not load much.</p>
<h3>Cause: bypass</h3>
<p><strong>Check:</strong> Look for dust streaks on the downstream face of the frame or casing, which trace leakage paths. Inspect gaskets, clips, blank-offs and side-access track ends. Check that filters fit their frames dimensionally.</p>
<p><strong>Fix:</strong> Replace gaskets, install missing blank-offs, standardize filter dimensions. The mechanics of bypass are explained in <a href="<?= url('guides/filter-bypass-leakage-frames') ?>">filter bypass leakage and frames</a>.</p>
<h3>Cause: unfiltered air entering downstream</h3>
<p><strong>Check:</strong> Casing leaks in negative-pressure sections downstream of filters, open access doors, unsealed penetrations, or return air entering after the filter section.</p>
<p><strong>Fix:</strong> Seal casing leaks and penetrations; correct duct connections.</p>
<h3>Cause: wrong filter efficiency installed</h3>
<p><strong>Check:</strong> Read the filter label. Lower-MERV substitutions are common when supply is tight.</p>
<p><strong>Fix:</strong> Specify filters on a schedule posted at the unit and in maintenance records.</p>

<h2>Summary table</h2>
<table>
<thead><tr><th>What you see</th><th>Check first</th></tr></thead>
<tbody>
<tr><td>Pressure drop rises fast; coarse dust on final filter</td><td>Prefilter presence and seal</td></tr>
<tr><td>Pressure drop high from day one</td><td>Face velocity; wrong filter model</td></tr>
<tr><td>Media folded or torn</td><td>Gauge history; damper and fan surges</td></tr>
<tr><td>Water staining, sagging</td><td>Intake water entry; coil carryover</td></tr>
<tr><td>Dirty coils, clean filters</td><td>Bypass around filters; casing leaks</td></tr>
</tbody>
</table>
<p class="note">Change-out intervals themselves are an operational optimization question and are not covered here; this guide is about finding why filters are behaving abnormally.</p>
<?php guide_end([
    ['Why are my AHU filters loading so fast?', 'Common causes are a nearby dust source such as construction or pollen, a missing or bypassed prefilter, filters running above their rated face velocity, or contaminated return air paths. Inspect the dust on the filter and check prefilters and airflow first.'],
    ['What causes air filter blowout?', 'Blowout usually results from pressure drop far above the filter\'s rated final resistance, wet media, pressure surges from dampers closing while the fan runs, inadequate filter support or frames, or a filter placed in the jet of a fan discharge.'],
    ['Why is there dust downstream of clean filters?', 'Clean-looking filters with dirty downstream surfaces usually mean air is bypassing the filters through gaps in gaskets, frames or blank-offs, or unfiltered air is leaking into the unit downstream of the filter section through the casing.'],
]);
