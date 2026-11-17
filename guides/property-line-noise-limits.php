<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('property-line-noise-limits'); ?>
<p class="lede">To meet a property-line noise limit, find the exact limit and measurement rules that apply, predict the sound level each outdoor source produces at the receiver, add the sources together, and then reduce the total using distance, orientation, barriers, attenuation at openings or quieter selections. Work in octave bands where barriers or silencers are involved, and compare to the limit in the same metric the bylaw uses.</p>

<h2>Step 1: Find the applicable limit</h2>
<ol>
<li>Identify the municipal noise bylaw and any provincial or state guideline that applies. In Canada, provinces often publish guidance used by municipalities; Ontario's NPC-300 environmental noise guideline is one example. In the United States, limits are typically in city or county codes.</li>
<li>Record the metric (usually dBA, sometimes Leq over a defined period), the daytime and night-time limits, and any separate limit for tonal or impulsive sound.</li>
<li>Note where compliance is measured: at the property line, at a neighbour's façade, at an outdoor living area, or at a set distance from a window.</li>
<li>Check whether limits are absolute or relative to existing ambient sound.</li>
<li>Note the land-use classification on both sides of the boundary, because limits often differ between industrial, commercial and residential zones.</li>
</ol>
<p class="note">Night-time limits are usually several decibels lower than daytime limits, and units serving 24-hour facilities must meet them. Design to the night-time value unless the equipment truly shuts down overnight.</p>

<h2>Step 2: Inventory every outdoor source</h2>
<p>List each source and its octave-band sound power:</p>
<ul>
<li>Casing-radiated sound from outdoor AHUs.</li>
<li>Outdoor air intake louvres (unit inlet sound).</li>
<li>Exhaust and relief openings (exhaust fan or relief fan discharge sound).</li>
<li>Condensing units, cooling towers, dry coolers and other equipment on the same site, even if not supplied with the AHU.</li>
</ul>
<p>For AHUs, intake and exhaust openings are often louder outdoors than the casing. How each path is defined is in <a href="<?= url('guides/inlet-discharge-casing-radiated-sound') ?>">inlet, discharge and casing-radiated sound paths</a>.</p>

<h2>Step 3: Predict the level at the receiver</h2>
<p>For a source on a hard surface (a roof or grade) radiating into a hemisphere, the basic distance relationship is:</p>
<p class="formula">Lp = Lw − 20 log10(r) − 8   (r in metres)</p>
<p class="formula">Lp = Lw − 20 log10(r) + 2.3   (r in feet)</p>
<p>Then adjust for directivity (an opening facing the receiver is louder than one facing away), shielding by the building or parapets, ground effects and air absorption over long distances. ISO 9613-2 is a widely used method for outdoor propagation including these factors. Add all sources at the receiver on an energy basis.</p>
<p><strong>Worked example:</strong> an outdoor AHU on grade has an A-weighted sound power of 95 dBA from its intake louvre, which faces a residential lot line 100 ft (30.5 m) away. Ignoring directivity and shielding for a first estimate:</p>
<p class="formula">Lp = 95 − 20 log10(30.5) − 8 = 95 − 29.7 − 8 = 57.3 dBA</p>
<p>If the night-time limit is 45 dBA, the design must find about 12 dB of reduction, plus margin for other site sources and prediction uncertainty.</p>

<h2>Step 4: Choose reductions in order of cost</h2>
<ol>
<li><strong>Orientation.</strong> Turn intakes, exhausts and the fan side of the unit away from the receiver. Building walls and parapets between source and receiver provide free shielding.</li>
<li><strong>Distance.</strong> Each doubling of distance reduces the level by about 6 dB. Relocating a unit from the near side of a roof to the far side can be worth several decibels.</li>
<li><strong>Night operation.</strong> Fan sound power drops quickly with speed. If the night load allows lower airflow, a speed reduction of 20 percent can cut sound by roughly 5 dB under the fan laws. Program it in the sequence.</li>
<li><strong>Attenuation at openings.</strong> Acoustic louvres, intake plenums with lined turns, or silencers behind the louvre reduce intake and exhaust noise. Check their pressure drop.</li>
<li><strong>Barriers.</strong> A solid wall or screen that blocks line of sight can provide useful attenuation, more at high frequencies than at low. It must be solid, sealed at the base and tall enough to block sight lines well above the source. Calculate barrier insertion loss in octave bands.</li>
<li><strong>Quieter equipment.</strong> Lower tip speed fans, fan arrays, heavier casing or integral discharge attenuation reduce the source. These are best decided early.</li>
</ol>
<p class="warn">Acoustic screens around units must leave enough free area for airflow and service. A screen that causes recirculation of hot discharge air into a condenser or of exhaust into an intake creates a new problem.</p>

<h2>Step 5: Check tonal and low-frequency content</h2>
<p>Many bylaws add a penalty, often several decibels, to tonal sound. Fan blade pass tones, motor and drive whine, and compressor tones may trigger it. Review octave or one-third-octave data for prominent tones and treat them at the source where possible. Low-frequency sound carries further and is less affected by barriers, so a design that meets a dBA limit may still be audible indoors at a neighbour's home through windows.</p>

<h2>Step 6: Document and verify</h2>
<ol>
<li>Prepare a noise study showing sources, receivers, assumptions and predicted levels against limits, day and night.</li>
<li>Include the sound data used and its source, and state whether values are tested or calculated.</li>
<li>After startup, measure at the receiver locations with equipment operating at its worst-case condition and again with it off to establish ambient.</li>
<li>Keep the results with the turnover package in case of future complaints.</li>
</ol>
<p>Room criteria for indoor spaces are a separate subject; see <a href="<?= url('guides/nc-vs-rc-vs-dba-criteria') ?>">NC vs RC vs dBA</a>.</p>
<?php guide_end([
    ['How do I calculate HVAC noise at the property line?', 'For a source on a roof or on grade, subtract 20 log of the distance in metres and another 8 dB from the sound power level. Then adjust for directivity, shielding and barriers, and add all sources at the receiver on an energy basis.'],
    ['How much does a noise barrier reduce equipment noise?', 'It depends on geometry and frequency. A solid barrier that blocks the line of sight provides more attenuation at high frequencies than at low ones. Calculate insertion loss in octave bands using the barrier height and source and receiver positions.'],
    ['Why do outdoor units fail noise limits at night?', 'Night-time limits are usually lower and ambient background is quieter. Equipment that meets the daytime limit can fail at night unless fan speed is reduced, sources are reoriented or attenuation is added.'],
]);
