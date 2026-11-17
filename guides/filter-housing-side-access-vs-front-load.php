<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('filter-housing-side-access-vs-front-load'); ?>
<p class="lede">Side-access housings let filters slide in and out on tracks through a door in the side of the unit, so the filter section can be short and needs no internal walkway. Front-load (face-load) holding frames clamp each filter individually against a gasketed frame from an access section upstream or downstream, which takes more unit length but generally seals better and suits high-efficiency filters.</p>

<h2>How side-access housings work</h2>
<p>In a side-access arrangement, filters ride in a pair of channel tracks, top and bottom, that run across the unit. A technician opens a door on the side of the casing and slides the filters out one after another, then slides new ones in. The last filter is held by a spring latch or a compression door, and end seals (often called blank-offs or jambs) close the space at each end of the track.</p>
<p>The section needs to be only slightly deeper than the filter itself plus any prefilter in a second track, which can save several feet of unit length compared with a section with an internal access space.</p>

<h2>How front-load frames work</h2>
<p>A front-load bank is a grid of individual holding frames, one per filter, built into a bulkhead across the unit. Each frame has a gasket on the sealing face. The technician enters an access section, places each filter against its frame and secures it with spring clips, latches or clamping bars that compress the gasket. Filters can be loaded from upstream or downstream depending on the frame type, and HEPA-grade frames often use knife-edge and gel seals rather than gaskets.</p>

<h2>Comparison</h2>
<table>
<thead><tr><th>Characteristic</th><th>Side-access tracks</th><th>Front-load holding frames</th></tr></thead>
<tbody>
<tr><td>Unit length required</td><td>Short; no internal access space for filter change</td><td>Longer; needs an access section to stand in</td></tr>
<tr><td>Service space outside the unit</td><td>Clear zone on the access side at least as long as the filter depth plus handling room</td><td>Access door width only</td></tr>
<tr><td>Bypass leakage potential</td><td>Higher; seals between filters and at track ends depend on compression along the track</td><td>Lower; each filter clamped to its own gasketed frame</td></tr>
<tr><td>Suitability for MERV 14+ and HEPA</td><td>Limited; achievable with good design and tight tolerances</td><td>Preferred; standard for HEPA</td></tr>
<tr><td>Filter change speed</td><td>Fast for small and medium banks</td><td>Slower; each filter secured individually</td></tr>
<tr><td>Bank size practical limit</td><td>Tracks become long and filters hard to slide in very wide units</td><td>No practical limit</td></tr>
<tr><td>Inspection of filter faces</td><td>Only when filters are removed</td><td>Visible from the access section</td></tr>
<tr><td>Cost</td><td>Lower</td><td>Higher frame and casing cost</td></tr>
</tbody>
</table>

<h2>Leakage: the main difference</h2>
<p>Every gap that lets air pass around the filter instead of through it lowers installed efficiency. In a side-access track, potential leakage paths include the gaps between adjacent filter headers, the clearance between filter and track channels, the end jambs and the access door seal. These rely on filters being pushed tightly together and on a compression mechanism that holds them that way. Mixed filter brands with slightly different header dimensions, or a missing filter, can open a significant gap.</p>
<p>A front-load frame isolates each filter. The gasket is compressed by clips that apply force at the filter's own header, so one poorly seated filter affects only its own position. The frames themselves are joined and sealed to each other and to the casing as part of the bulkhead. This is why most high-efficiency final filter banks and all HEPA banks in critical applications are front-loaded. The mechanisms of bypass and its effect on efficiency are explained in <a href="<?= url('guides/filter-bypass-leakage-frames') ?>">filter bypass leakage and frame design</a>.</p>

<h2>Space planning</h2>
<p>Side-access housings shift space requirements from inside the unit to outside it. A side-access section 10 ft (3 m) wide with 12 in deep filters needs a clear zone alongside the unit where the technician can stand, pull filters and stack them. In tight mechanical rooms, units placed against walls or beside other equipment may have no space for that. Front-load sections need an internal access section, commonly at least 24 in (610 mm) and often more, but only a standard access door on the side.</p>
<p>Overall room planning, including service zones on each side of the unit, is covered in <a href="<?= url('guides/ahu-mechanical-room-planning') ?>">AHU mechanical room planning</a>.</p>

<h2>Combined prefilter and final filter</h2>
<p>Side-access housings commonly carry a 2 in or 4 in prefilter track in front of the final filter track in one section, which is efficient in length. Front-load frames can also accept a prefilter clipped in front of a final filter in the same frame, or the stages can be in separate banks with their own access. Which stage goes where is covered in <a href="<?= url('guides/prefilter-and-final-filter-arrangement') ?>">prefilter and final filter arrangement</a>.</p>

<h2>Choosing</h2>
<ul>
<li><strong>Choose side-access</strong> for small to medium units, MERV 8 to MERV 13 filters, constrained unit length, and when there is clear space alongside the unit.</li>
<li><strong>Choose front-load</strong> for large banks, MERV 14 and higher final filters, HEPA, healthcare and laboratory work, and when the side of the unit is not accessible.</li>
<li>For either, specify the gasket or seal material, the compression mechanism, the frame material (galvanized, aluminum or stainless) and a requirement that blank-offs close all gaps between frames and casing.</li>
</ul>
<p class="note">Bag-in/bag-out containment housings, where the filter is changed through a sealed bag to protect the technician, are a distinct category used for hazardous exhaust and are not covered here.</p>
<?php guide_end([
    ['What is a side-access filter housing?', 'It is a filter section in which filters slide in and out on tracks through a door in the side of the air handler. It keeps the filter section short because no internal access space is needed, but it needs clear space beside the unit and relies on compression along the track for sealing.'],
    ['Are front-load filter frames better than side access?', 'For high-efficiency and HEPA filters, front-load frames usually seal better because each filter is clamped to its own gasketed frame. Side-access housings save unit length and are quicker to service for moderate efficiency filters.'],
    ['How much space is needed to change side-access filters?', 'Plan a clear zone beside the unit at the access door that is at least as deep as the filter plus room to handle and stack filters, and as wide as needed to slide filters out of the track. Units placed against walls cannot use side-access filters on that side.'],
]);
