<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('dual-path-ahu-arrangements'); ?>
<p class="lede">"Dual-path" describes two different ideas: a unit that conditions outdoor air and return air in separate paths before combining them, and a dual-duct unit that splits supply air into a cold deck and a hot deck delivered through two duct systems. Both use parallel airstreams inside one casing, but they solve different problems.</p>

<h2>Dual-path: separate outdoor-air and return-air paths</h2>
<p>A dual-path unit treats outdoor air and return air in two parallel channels, each with its own filter and coil, then merges them before or at the supply fan. The idea is to aim the right equipment at each load.</p>
<ul>
<li><strong>Outdoor air path:</strong> carries the ventilation air, which brings most of the latent load in humid weather and the coldest air in winter. It gets a deep cooling coil selected for a low dew point, and often a preheat coil.</li>
<li><strong>Return air path:</strong> carries recirculated air that is already near room conditions. It gets a shallower coil that mainly handles sensible load, or no coil at all when outdoor air conditioning is enough.</li>
</ul>
<p>Because the outdoor air path dehumidifies only the air that needs it, the unit avoids overcooling the whole airstream just to dry it, which reduces reheat. It also allows each path to have its own damper control, so outdoor airflow can be measured and held precisely regardless of total supply airflow.</p>
<h3>Where dual-path units are used</h3>
<p>Schools, retail stores, and other buildings with high occupant density and large ventilation rates in humid climates benefit most. The same goal, separate treatment of ventilation air, can also be met with a dedicated outdoor air system; the system-level choice is covered in <a href="<?= url('guides/ahu-vs-rtu-vs-doas') ?>">AHU vs RTU vs DOAS</a>.</p>
<h3>Physical arrangement</h3>
<p>The two paths usually sit side by side or one above the other, separated by an insulated partition. The outdoor path is smaller in cross-section because it carries less air. Each path needs its own drain pan under its cooling coil. Where the two streams combine, the mixing geometry matters: cold, dry outdoor air and warmer return air need enough length or a blender to mix before the fan, or a cold layer will pass downstream.</p>

<h2>Dual-duct: hot deck and cold deck</h2>
<p>A dual-duct unit sends air down two separate supply ducts. One duct carries cool air from the cold deck; the other carries warm air from the hot deck. Each zone has a mixing box that blends the two streams to hit its own setpoint.</p>
<h3>How the unit is built</h3>
<p>The supply fan typically sits upstream of the split in a blow-through arrangement, pressurizing a plenum that feeds two parallel coil banks. The cold deck holds a cooling coil and the hot deck holds a heating coil. Each deck discharges into its own duct connection. Some designs use two separate fans, one per deck, which adds flexibility and allows each deck to run at its own airflow.</p>
<h3>Variants</h3>
<ul>
<li><strong>Constant volume dual-duct:</strong> the zone box varies the ratio of hot to cold air but total airflow stays constant. Energy-intensive because hot and cold air are mixed continuously.</li>
<li><strong>VAV dual-duct:</strong> each deck has its own VAV damper at the zone, and the unit supplies only as much of each as needed. Much more efficient, and the hot deck can be shut down in summer.</li>
<li><strong>Dual-fan dual-duct:</strong> one fan supplies a cold deck with outdoor air and cooling; a second supplies a "neutral" or heating deck with mostly return air. This is close to a dual-path concept extended into two ducts.</li>
</ul>
<h3>Related: multizone units</h3>
<p>A multizone unit uses the same hot deck and cold deck idea, but mixes the decks at the unit through a bank of zone dampers and sends one mixed duct to each zone. Multizone units were common in mid-century buildings and are a frequent retrofit target. Their zone damper control is a controls topic rather than an arrangement topic.</p>

<h2>Comparing the arrangements</h2>
<table>
<thead><tr><th>Feature</th><th>Dual-path</th><th>Dual-duct</th></tr></thead>
<tbody>
<tr><td>What is split</td><td>Outdoor air vs return air, before the fan</td><td>Cold supply vs hot supply, after the fan</td></tr>
<tr><td>Supply ducts</td><td>One</td><td>Two</td></tr>
<tr><td>Main goal</td><td>Efficient dehumidification and accurate ventilation</td><td>Zone-by-zone temperature control without terminal coils</td></tr>
<tr><td>Typical fan position</td><td>Draw-through after the paths combine</td><td>Blow-through before the decks split, or one fan per deck</td></tr>
<tr><td>Energy concern</td><td>Low; avoids overcooling return air</td><td>Mixing hot and cold air if not designed as VAV</td></tr>
<tr><td>Space needs</td><td>Wider or taller unit section</td><td>Two full duct systems through the building</td></tr>
</tbody>
</table>

<h2>Design points to watch</h2>
<ol>
<li><strong>Pressure balance.</strong> In both arrangements the two paths must have matched pressure drops at their design flows, or the dampers spend their range compensating. Size each path's components accordingly.</li>
<li><strong>Coil uniformity.</strong> Blow-through decks need diffusers or plenum depth so air spreads evenly across each coil.</li>
<li><strong>Freeze protection.</strong> In a dual-path unit the outdoor air path sees full outdoor temperature. It needs the same preheat consideration as a 100% outdoor air unit.</li>
<li><strong>Leakage between paths.</strong> Partitions and dampers must seal well. Leakage from the hot deck into the cold deck wastes energy in both directions.</li>
<li><strong>Drainage.</strong> Each cooling coil needs its own sloped pan and trap, sized for the static pressure in its path; see <a href="<?= url('guides/drain-pan-design-ashrae-62-1') ?>">drain pan design</a>.</li>
</ol>
<p class="note">When replacing an old dual-duct or multizone unit, the existing duct system often dictates the arrangement. A custom unit can reproduce the existing deck connections so the ductwork stays in place; see <a href="<?= url('guides/like-for-like-vs-redesign') ?>">like-for-like vs redesign</a>.</p>
<?php guide_end([
    ['What is a dual-path air handler?', 'A dual-path air handler conditions outdoor air and return air in two separate parallel paths, each with its own coil and damper, before combining them. It dehumidifies the ventilation air efficiently without overcooling the return air.'],
    ['What is the difference between dual-duct and multizone?', 'Both have a hot deck and a cold deck. A dual-duct system sends both streams through two separate duct systems to mixing boxes at each zone. A multizone unit mixes the decks at the air handler and sends one duct to each zone.'],
    ['Are dual-duct systems still used?', 'Many existing buildings still have them, and VAV dual-duct can be efficient. New designs more often use single-duct VAV with reheat or a DOAS, but dual-duct remains an option where terminal reheat coils are undesirable.'],
]);
