<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('bag-vs-rigid-box-vs-minipleat-filters'); ?>
<p class="lede">Bag filters pack a lot of media into flexible pockets and hold plenty of dust, but need depth and steady airflow to stay inflated. Rigid box filters use pleated media in a deep, self-supporting frame that tolerates airflow swings. Mini-pleat V-bank filters fold very fine media into several V-shaped packs, giving the most media area and lowest pressure drop per unit of depth. All three formats are available across the MERV 11 to MERV 16 range.</p>

<h2>The three formats</h2>
<h3>Bag (pocket) filters</h3>
<p>A bag filter has multiple pockets of media sewn or welded to a header frame. Airflow inflates the pockets so the full media area is exposed. Pocket lengths of 15 to 36 in (380 to 915 mm) are common, with 6 to 12 pockets per 24 in (610 mm) wide filter. Long pockets give a large media area and dust holding capacity at a low unit price.</p>
<h3>Rigid box filters</h3>
<p>Rigid filters, often 6 or 12 in (150 or 300 mm) deep, contain pleated media held in a sturdy plastic or metal cell, sometimes with a header for side-access rails. The media pack keeps its shape whether air is flowing or not.</p>
<h3>Mini-pleat V-bank filters</h3>
<p>V-bank filters assemble several flat mini-pleat media packs into a series of V shapes inside a plastic or metal frame, usually 12 in (300 mm) deep with a header. Mini-pleats are very closely spaced pleats separated by hot-melt beads or thread, allowing a large media area in each pack. The V arrangement presents even more media to the airstream within the same frame.</p>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Characteristic</th><th>Bag</th><th>Rigid box</th><th>Mini-pleat V-bank</th></tr></thead>
<tbody>
<tr><td>Media area per frame</td><td>Large with long pockets</td><td>Moderate</td><td>Large</td></tr>
<tr><td>Initial pressure drop at equal MERV and velocity</td><td>Low to moderate</td><td>Moderate to higher</td><td>Lowest in typical designs</td></tr>
<tr><td>Dust holding capacity</td><td>High</td><td>Moderate</td><td>High</td></tr>
<tr><td>Depth required</td><td>Deepest (up to about 36 in)</td><td>6 to 12 in</td><td>About 12 in</td></tr>
<tr><td>Behaviour when airflow stops or varies</td><td>Pockets collapse; can flutter at low flow; media can rub and shed</td><td>Unaffected</td><td>Unaffected</td></tr>
<tr><td>Tolerance of high humidity or wetting</td><td>Depends on media; wet bags sag</td><td>Good with suitable media</td><td>Good with suitable media</td></tr>
<tr><td>Handling and disposal</td><td>Light, compressible</td><td>Bulky</td><td>Bulky but lighter than many rigid filters</td></tr>
<tr><td>Purchase price</td><td>Low</td><td>Moderate</td><td>Higher</td></tr>
<tr><td>Typical use</td><td>Constant-volume units with depth available</td><td>Variable flow, intermittent fans, short sections</td><td>Energy-focused designs, VAV, compact final filter sections</td></tr>
</tbody>
</table>

<h2>Pressure drop and dust holding</h2>
<p>For a given efficiency and face velocity, pressure drop falls as media area rises, because each square foot of media sees less air. Long bag filters and V-bank filters both carry large media areas. V-bank filters usually achieve low initial pressure drop for their depth. Long bags can match or beat them on dust holding but require two or three times the depth.</p>
<p>The pressure drop that matters to cost is the average over the filter's life, not the initial value. A format with modest initial resistance but steep loading can average higher than one with slightly higher initial resistance and a flat curve. Compare formats using the method in <a href="<?= url('guides/filter-life-cycle-cost') ?>">filter life-cycle cost</a>.</p>

<h2>Airflow stability</h2>
<p>Bag filters are the format most affected by airflow changes. When a fan stops, bags collapse; when it restarts, they snap open, and repeated cycling can shed dust or damage seams. In VAV systems at low airflow, bags can partly deflate or flutter, reducing effective media area and allowing pockets to touch. Rigid and V-bank filters keep their geometry at any flow, which is why they are generally preferred for VAV units, units with frequent starts and stops, and final filters downstream of a fan where turbulence is high.</p>

<h2>Space and unit length</h2>
<p>A section that accommodates 30 in bags must be several feet long, including access space. Replacing bag filters with 12 in V-banks can shorten a unit by 18 in (450 mm) or more, which matters on projects where mechanical room length or shipping splits are tight. Conversely, in retrofits where an existing bag section is already present, long bags may give lower life-cycle cost than a V-bank of the same MERV because they make full use of the available depth.</p>

<h2>Sealing and installation</h2>
<p>All three formats are typically installed in either front-access holding frames with clips or side-access tracks. Header gaskets and clamping arrangements determine bypass more than the media format does; that subject is covered in <a href="<?= url('guides/filter-bypass-leakage-frames') ?>">filter bypass leakage and frames</a>. Bag filter headers are thin and can deform if handled roughly; rigid and V-bank headers are stiffer, which helps maintain a seal.</p>
<p class="note">Media type (synthetic or glass fibre) is a separate choice that applies within each format. A V-bank can be built with either, as can a bag. The efficiency stability tradeoffs of media are compared in <a href="<?= url('guides/synthetic-vs-glass-fiber-filter-media') ?>">synthetic vs glass fiber media</a>.</p>

<h2>Choosing a format</h2>
<ul>
<li><strong>Choose bag filters</strong> when the unit is constant volume, runs continuously, has the depth available and first cost is a priority.</li>
<li><strong>Choose rigid box filters</strong> when depth is limited, airflow varies or cycles, or the filter must survive rough handling or humid conditions.</li>
<li><strong>Choose V-bank filters</strong> when fan energy matters, the unit is VAV, depth is limited to about 12 in, or long filter life is wanted with low resistance.</li>
</ul>
<p>When planning a new unit, filter format sets section length, so decide early. The <a href="<?= url('design') ?>">3D configurator</a> shows how different filter section depths change overall unit length.</p>
<?php guide_end([
    ['Are bag filters or V-bank filters better?', 'It depends on the application. Bag filters are inexpensive and hold a lot of dust but need depth and steady airflow. V-bank filters cost more but give low pressure drop in a 12 inch depth and keep their shape in variable airflow systems.'],
    ['Why do bag filters not suit VAV systems?', 'At low airflow, bag pockets can partly collapse or flutter, reducing effective media area and allowing pockets to rub. Repeated inflation and collapse with fan cycling can shed dust and stress seams. Rigid and V-bank filters keep their shape at any airflow.'],
    ['What is a mini-pleat filter?', 'A mini-pleat filter uses media folded into very closely spaced pleats held apart by beads or threads, which packs a large media area into a thin pack. Several packs arranged in V shapes form a V-bank filter.'],
]);
