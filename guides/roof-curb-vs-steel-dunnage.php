<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('roof-curb-vs-steel-dunnage'); ?>
<p class="lede">A roof curb gives an outdoor AHU continuous support and lets ducts drop straight through the roof inside a single flashed enclosure; steel dunnage raises the unit on a structural frame above the roof, keeping the roofing clear and loads on columns; piers or posts are the lightest-touch option for spreading load to specific structure. Choose based on how ducts and piping reach the building, what the roof structure can take, and how the roof will be maintained.</p>

<h2>The three support methods</h2>
<h3>Roof curb</h3>
<p>A continuous perimeter frame, usually insulated sheet metal or structural steel, set on the roof deck or structure and flashed into the roofing. The unit sits on top with its base rails bearing on the curb all the way around. Supply and return ducts pass down through the opening inside the curb, so there is one roof penetration for all air connections.</p>
<h3>Steel dunnage</h3>
<p>Structural steel beams spanning between building columns or major beams, raised above the roof on posts. The unit sits on the dunnage frame, with its base designed for support at the dunnage beams. Ducts and pipes come out of the unit and turn down through separate roof penetrations, often with their own curbs.</p>
<h3>Piers or posts</h3>
<p>Individual pipe or tube posts with flashed caps, sometimes called equipment supports or stands, carrying short beams or the unit base directly at discrete points. Lighter than full dunnage, used where structure is available at the post locations.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Roof curb</th><th>Steel dunnage</th><th>Piers or posts</th></tr></thead>
<tbody>
<tr><td>Load path</td><td>Distributed along the curb to the deck and framing</td><td>Concentrated at columns or major beams</td><td>Concentrated at each post</td></tr>
<tr><td>Unit base requirement</td><td>Continuous bearing; standard base often adequate</td><td>Base designed to span between dunnage beams</td><td>Base designed for point support</td></tr>
<tr><td>Duct connections</td><td>Straight down inside the curb; one penetration</td><td>Turned down through separate roof penetrations</td><td>As for dunnage</td></tr>
<tr><td>Roof penetrations</td><td>One large opening</td><td>Several smaller ones, plus posts</td><td>Posts plus duct and pipe penetrations</td></tr>
<tr><td>Flashing</td><td>Perimeter flashing of the curb</td><td>Each post and each duct curb flashed</td><td>Each post flashed</td></tr>
<tr><td>Roof replacement</td><td>Must work around the curb; unit stays</td><td>Roofers can work under the unit</td><td>Roofers can work under, between posts</td></tr>
<tr><td>Clearance under unit</td><td>None</td><td>Typically enough to reach the roof surface</td><td>Depends on post height</td></tr>
<tr><td>Condensate trap height</td><td>Must fit within base and curb height or inside the curb</td><td>Ample height below the unit</td><td>Usually ample</td></tr>
<tr><td>Vibration isolation</td><td>Isolation curbs available</td><td>Isolators between unit and dunnage</td><td>Isolators at posts</td></tr>
<tr><td>Seismic and wind anchorage</td><td>Unit anchored to curb, curb anchored to structure</td><td>Unit anchored to steel; steel to columns</td><td>Unit anchored to posts</td></tr>
<tr><td>Typical cost drivers</td><td>Curb fabrication, structural framing at opening</td><td>Structural steel, post flashings, duct curbs</td><td>Posts, flashings, base reinforcement</td></tr>
<tr><td>Acoustics</td><td>Ducts and casing directly over the space below; breakout concern</td><td>Air gap between unit and roof helps</td><td>Similar to dunnage</td></tr>
</tbody>
</table>

<h2>When a curb makes sense</h2>
<ul>
<li>Ducts can drop straight down into the building below the unit.</li>
<li>The roof structure can carry the distributed load, or framing around the curb opening can be designed to do so.</li>
<li>The unit is a replacement for an existing curb-mounted unit and an adapter curb can be used.</li>
<li>The owner wants the fewest roof penetrations.</li>
</ul>
<p>Watch the curb height: it must provide the snow clearance required in the region and enough height for condensate traps on the coil and humidifier sections. Acoustic treatment inside the curb can reduce noise into the space below; see <a href="<?= url('guides/rooftop-ahu-breakout-noise') ?>">rooftop breakout noise</a>.</p>

<h2>When dunnage or piers make sense</h2>
<ul>
<li>The roof deck cannot carry the unit, but columns or major beams can.</li>
<li>Duct connections must leave the unit through the side or end and travel some distance before entering the building.</li>
<li>The roof membrane will need replacement during the unit's life, and the owner wants roofers to have access under the equipment.</li>
<li>Heavy snow regions where the unit must sit well above drifts.</li>
<li>Large, heavy units where a curb would require extensive deck reinforcement.</li>
</ul>
<p>The AHU base must be designed for point support at the dunnage or post locations. Give the manufacturer the support layout early; see <a href="<?= url('guides/ahu-base-frame-construction') ?>">AHU base frames</a>.</p>

<h2>Coordination checklist</h2>
<ol>
<li>Structural engineer confirms load path and supports for operating, seismic, wind and snow loads.</li>
<li>Roofing designer details curb or post flashings compatible with the roof system and its warranty.</li>
<li>Mechanical engineer confirms duct and pipe routes and the number of penetrations.</li>
<li>AHU manufacturer receives support type and locations, and confirms base design and anchor points.</li>
<li>Trap heights for condensate drains are checked against curb or dunnage height.</li>
<li>Access around and under the unit for service and roof maintenance is confirmed.</li>
</ol>
<p class="note">For the installation sequence itself, including setting the unit on a curb and sealing, see <a href="<?= url('guides/roof-curb-installation') ?>">roof curb installation</a>. If you are weighing support options for a new rooftop unit, sharing the roof framing plan and duct routes through the <a href="<?= url('contact') ?>">contact page</a> lets the base be designed for the support you choose.</p>
<?php guide_end([
    ['Is a roof curb or steel dunnage better for a rooftop AHU?', 'A roof curb suits units whose ducts drop straight down and whose roof can carry distributed load, with one roof penetration. Dunnage suits heavy units, side duct connections, weak decks and roofs that will need replacement under the unit.'],
    ['Can an air handler sit on steel dunnage?', 'Yes, if its base is designed to span between the dunnage beams. The manufacturer needs the support locations to size the base and locate anchor points.'],
    ['How high should a roof curb be?', 'High enough to meet local snow clearance and roofing requirements and to fit the condensate traps for the unit\'s drain pans. Curb heights vary by region and unit; coordinate with the roofing designer and the unit manufacturer.'],
]);
