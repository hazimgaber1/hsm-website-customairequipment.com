<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('hot-spots-troubleshooting'); ?>
<p class="lede">A hot spot is a rack, or part of a rack, whose inlet air is warmer than the rest of the hall. It almost always means that rack is not receiving the airflow it draws, so it pulls in hot exhaust from somewhere nearby. Find out how much air the rack needs, how much is reaching its face, and where the hot air is coming from.</p>

<h2>Confirm the hot spot</h2>
<p>Before changing anything, measure inlet temperature on the front face of the affected rack at three heights, roughly bottom, middle and top, and compare with the racks on either side. Use a calibrated probe positioned a couple of inches in front of the server intakes, not touching any surface. Record rack power draw from the power distribution units at the same time.</p>
<p>A temperature reported by a single server's internal sensor can be misleading, because some servers report component or exhaust temperatures rather than inlet air. A hot spot confirmed by probe measurements on the rack face is real; a single alarm from server telemetry may not be.</p>
<p class="note">Note the pattern: top-only, bottom-only, whole rack, or one server. Each pattern points to a different cause in the sections below.</p>

<h2>Hot at the top of the rack</h2>
<ul>
<li><strong>Cause:</strong> recirculation over the top of the rack. Supply air from a raised floor tile loses momentum before reaching the top servers, and hot exhaust from the rear spills over the rack top into the cold aisle.</li>
<li><strong>Check:</strong> is the cold aisle contained with a roof? Are there gaps between the rack tops and the containment? Does the perforated tile in front of the rack deliver enough air (measure with a flow hood)?</li>
<li><strong>Fix:</strong> add cold aisle containment roof or hot aisle chimney; seal top gaps; increase tile airflow with higher open-area tiles or a raised floor static pressure increase; move the hottest equipment lower in the rack.</li>
</ul>

<h2>Hot at the bottom of the rack</h2>
<ul>
<li><strong>Cause:</strong> in raised floor rooms, high underfloor velocity near cooling units creates low static pressure under nearby tiles, so tiles close to the units deliver little air, or even draw room air down into the floor. Also cables or obstructions under the floor blocking flow to that tile.</li>
<li><strong>Check:</strong> measure underfloor static pressure at the tile; check tile airflow; inspect the underfloor space for cable bundles, abandoned cable, pipes or dampers.</li>
<li><strong>Fix:</strong> avoid placing high-density racks immediately in front of perimeter units; remove underfloor obstructions; use directional or damped tiles to balance flow.</li>
</ul>

<h2>Whole rack hot</h2>
<ul>
<li><strong>Cause:</strong> rack power exceeds what the local supply can deliver. Common after a high-density deployment, such as GPU servers, into a row designed for lower density.</li>
<li><strong>Check:</strong> calculate the rack's airflow need: cfm ≈ 3,160 × kW ÷ server ΔT (°F). A 25 kW rack at a 20°F rise needs about 3,950 cfm. Compare with the airflow delivered to the front of the rack. The method is in <a href="<?= url('guides/airflow-per-kw-it-load') ?>">calculating airflow per kW of IT load</a>.</li>
<li><strong>Fix:</strong> add perforated tiles or higher-flow tiles in front of the rack; spread the load across more racks; add local cooling such as rear-door heat exchangers or in-row units; for very high density, consider liquid cooling, whose effect on the air system is covered in <a href="<?= url('guides/liquid-cooling-residual-air-load') ?>">liquid cooling and the residual air-side load</a>.</li>
</ul>

<h2>Hot at the end of a row</h2>
<ul>
<li><strong>Cause:</strong> hot air wrapping around the row end from the hot aisle into the cold aisle.</li>
<li><strong>Check:</strong> are end-of-row doors installed and closed? Is there a gap between the last rack and the wall or the next row?</li>
<li><strong>Fix:</strong> install end-of-row doors or barriers; close gaps.</li>
</ul>

<h2>One server or a few servers hot</h2>
<ul>
<li><strong>Cause:</strong> missing blanking panels next to the server, a server installed backward, a device with side-to-side airflow (common on network switches) drawing from inside the rack, or a failed server fan.</li>
<li><strong>Check:</strong> inspect the rack front and rear; confirm airflow direction of every device; check server fan status.</li>
<li><strong>Fix:</strong> install blanking panels; reverse or relocate equipment; fit airflow conversion ducts for side-breathing devices; replace failed fans.</li>
</ul>

<h2>Hot spots appear when a cooling unit is off</h2>
<ul>
<li><strong>Cause:</strong> the remaining units cannot deliver enough air to the area the stopped unit served, even if total capacity is adequate. Common in long halls with units along one wall.</li>
<li><strong>Check:</strong> map inlet temperatures with each unit shut down in turn during a planned test.</li>
<li><strong>Fix:</strong> adjust remaining units' control so they increase airflow when a neighbor stops; use a pressure-based control that responds to local cold-aisle pressure, described in <a href="<?= url('guides/fan-wall-pressure-control') ?>">controlling fan walls on aisle differential pressure</a>; or add capacity near the affected area.</li>
</ul>

<h2>Quick diagnostic table</h2>
<table>
<thead><tr><th>Pattern</th><th>First check</th><th>Typical fix</th></tr></thead>
<tbody>
<tr><td>Top of rack</td><td>Containment roof and top gaps</td><td>Seal or contain; raise tile flow</td></tr>
<tr><td>Bottom of rack</td><td>Underfloor static and obstructions</td><td>Clear floor; relocate racks away from unit discharge</td></tr>
<tr><td>Whole rack</td><td>Rack kW vs delivered airflow</td><td>More tiles, spread load, local cooling</td></tr>
<tr><td>Row end</td><td>End-of-row doors</td><td>Install barriers</td></tr>
<tr><td>Single device</td><td>Blanking panels, airflow direction</td><td>Panels, ducts, reorientation</td></tr>
<tr><td>Only when a unit is off</td><td>Distribution with unit out</td><td>Control change or added capacity</td></tr>
</tbody>
</table>
<p class="warn">Do not respond to a local hot spot by lowering the supply temperature for the whole hall. It increases energy use everywhere, often fails to fix the local airflow shortfall, and can increase bypass elsewhere.</p>
<p>When the problem is room-wide low return temperature rather than one location, the diagnosis is in <a href="<?= url('guides/bypass-and-recirculation-troubleshooting') ?>">troubleshooting low delta-T from bypass and recirculation</a>.</p>
<?php guide_end([
    ['What causes hot spots in a data center?', 'Usually a rack receives less cool air than it draws, so it pulls in hot exhaust from nearby. Causes include high rack density, poor tile placement, underfloor obstructions, missing blanking panels and gaps in containment.'],
    ['Why are racks near CRAH units sometimes hotter?', 'High air velocity under the floor near a perimeter unit lowers static pressure at nearby tiles, so they deliver little air. Racks placed close to the unit discharge can be starved of supply air.'],
    ['Should I lower the supply temperature to fix a hot spot?', 'Generally no. Lowering supply temperature for the whole hall wastes energy and often does not fix a local airflow shortage. Find and correct the local airflow problem first.'],
]);
