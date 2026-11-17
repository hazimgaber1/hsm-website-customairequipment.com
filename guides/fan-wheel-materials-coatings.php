<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fan-wheel-materials-coatings'); ?>
<p class="lede">Most air handler fan wheels are painted or galvanized steel, or aluminum. Stainless steel takes over in wet, corrosive and hygienic duties; plastics and fibreglass serve aggressive chemical exhaust at low temperature; and coatings extend steel's life in moderately corrosive air. Each choice has limits on temperature, speed and abrasion that must match the duty.</p>

<h2>What the wheel material has to handle</h2>
<p>A fan wheel is a highly stressed rotating structure. The material must carry centrifugal loads at the fan's maximum speed, resist fatigue from millions of load cycles, and keep its strength at the air temperature. It must also survive the airstream: humidity and condensation, chemical vapours, cleaning agents and particles. A wheel that corrodes or erodes loses metal unevenly, which unbalances it long before it fails structurally.</p>

<h2>Carbon steel</h2>
<p>Welded carbon steel is the workhorse for housed fans, larger plenum fans and industrial wheels. It is strong, weldable, economical and tolerant of higher temperatures than aluminum. Bare steel rusts, so wheels are protected by paint, powder coat or galvanizing.</p>
<ul>
<li><strong>Strengths:</strong> high strength, good fatigue performance, wide temperature range, easy to repair and rebalance.</li>
<li><strong>Limits:</strong> needs coating in any humid or corrosive airstream; heavier than aluminum, which loads bearings and motor shafts on direct-drive fans.</li>
<li><strong>Typical use:</strong> general HVAC supply and return, industrial process air, high-temperature duty with appropriate derating.</li>
</ul>

<h2>Aluminum</h2>
<p>Aluminum wheels, fabricated or cast, are common on direct-drive plenum fans and fan arrays. Low weight reduces the overhung load on the motor bearings and the energy needed to accelerate the wheel. Aluminum forms a protective oxide film and resists ordinary humidity and condensation well.</p>
<ul>
<li><strong>Strengths:</strong> light, naturally corrosion-resistant in normal HVAC air, good for high-speed small wheels.</li>
<li><strong>Limits:</strong> lower strength than steel, and it loses strength at a lower temperature, so maximum service temperature is more restricted. Attacked by strong alkalis and some acids. Susceptible to erosion from abrasive particulate.</li>
<li><strong>Typical use:</strong> most commercial plenum fans and fan array wheels, cooling coil discharge air, normal outdoor air.</li>
</ul>
<p>Aluminum is also used in spark-resistant construction, but spark resistance depends on the overall construction class, not just the wheel material; see <a href="<?= url('guides/spark-resistant-fans-amca-99-0401') ?>">spark-resistant fans and AMCA 99-0401</a>.</p>

<h2>Stainless steel</h2>
<p>Type 304 stainless suits wet and hygienic duties; type 316, with molybdenum, adds resistance to chlorides and many process chemicals. Stainless wheels retain strength at higher temperatures than aluminum and do not need a coating that could chip or flake into the airstream.</p>
<ul>
<li><strong>Strengths:</strong> corrosion resistance without coating, cleanable with aggressive cleaning agents, good high-temperature performance.</li>
<li><strong>Limits:</strong> cost; weight similar to carbon steel; chloride stress corrosion cracking can still occur in some warm, chloride-laden environments, even with 316.</li>
<li><strong>Typical use:</strong> food processing, pharmaceutical and washdown units, pool and natatorium air, coastal outdoor air, laboratory exhaust with mild chemical content.</li>
</ul>

<h2>Plastics and fibreglass-reinforced plastic</h2>
<p>Polypropylene, PVC and fibreglass-reinforced plastic (FRP) wheels serve highly corrosive fume exhaust, such as acid digestion, plating and some semiconductor processes, where no metal would last. They are usually limited to lower temperatures and lower tip speeds than metal wheels, and their structural properties vary between resins. The trade-offs for corrosive exhaust fans are covered in <a href="<?= url('guides/frp-vs-coated-steel-corrosive-fans') ?>">FRP vs coated steel corrosive fans</a>.</p>

<h2>Coatings for steel wheels</h2>
<table>
<thead><tr><th>Coating</th><th>What it does well</th><th>Watch for</th></tr></thead>
<tbody>
<tr><td>Hot-dip or pre-galvanized zinc</td><td>Sacrificial protection for humid, non-chemical air</td><td>Consumed faster in acidic or salty air; welds need touch-up</td></tr>
<tr><td>Baked enamel or standard powder coat</td><td>Good general protection; uniform finish</td><td>Damage at chips; limited chemical resistance</td></tr>
<tr><td>Epoxy coatings</td><td>Good chemical and moisture resistance</td><td>Some epoxies degrade under UV; check temperature limit</td></tr>
<tr><td>Phenolic and specialty linings</td><td>High chemical resistance for process exhaust</td><td>Application quality critical; thickness adds weight</td></tr>
<tr><td>Fluoropolymer coatings</td><td>Very high chemical resistance, non-stick surface resists buildup</td><td>Cost; temperature and abrasion limits vary by product</td></tr>
</tbody>
</table>
<p>Coating has practical consequences beyond corrosion. It adds mass and can be uneven, so wheels must be balanced after coating, not before. Any field touch-up or recoating means rebalancing. Coatings are generally vulnerable to abrasion; where the airstream carries particulate, a hard-faced or wear-plated wheel is a better answer than a thicker coat.</p>

<h2>Temperature and speed limits</h2>
<p>Every wheel material's strength falls as temperature rises, and the maximum safe speed of the wheel falls with it. Manufacturers publish temperature derating factors for each material. Aluminum is typically derated at much lower temperatures than steel. Plastics and FRP have the tightest limits. The method for applying those deratings to tip speed is in <a href="<?= url('guides/fan-tip-speed-limits') ?>">fan tip speed and class limits</a>.</p>
<p class="warn">Never use a wheel above the maximum temperature in the manufacturer's literature for that material, even briefly. Strength loss at temperature is not always recovered on cooling.</p>

<h2>Inspecting wheels in service</h2>
<p>Material problems show up first as vibration that slowly creeps up between readings, because corrosion and erosion remove metal unevenly. During routine maintenance, look for coating blisters, rust bloom at welds, pitting on stainless near the blade roots, white corrosion products on aluminum, and thinning of leading edges. Any buildup of dust or grease on the blades adds mass and unbalance as well. Clean, inspect and, if metal has been lost, have the wheel assessed before returning it to full speed.</p>

<h2>Choosing a material</h2>
<ol>
<li>Define the airstream: temperature range, humidity and condensation, chemicals and their concentration, particulate.</li>
<li>Define cleaning: water washdown, chemical sanitizers, steam.</li>
<li>Shortlist materials that tolerate the chemistry and temperature.</li>
<li>Check maximum speed at temperature for the shortlisted wheels.</li>
<li>Weigh cost, weight and availability of replacement wheels.</li>
</ol>
<?php guide_end([
    ['What are fan wheels usually made of?', 'Most HVAC fan wheels are painted or galvanized carbon steel or aluminum. Stainless steel, plastics and fibreglass are used for corrosive, wet or chemical duties.'],
    ['Are aluminum fan wheels good for HVAC?', 'Yes. Aluminum is light and resists normal humidity and condensation, which makes it common on direct-drive plenum fans and fan arrays. It has lower temperature and abrasion limits than steel.'],
    ['When should I specify a stainless steel fan wheel?', 'Specify stainless for wet, washdown, hygienic or moderately corrosive airstreams, such as food processing, pharmaceutical, pool and coastal applications, where coatings would chip or fail.'],
    ['Do coatings affect fan balance?', 'Yes. Coatings add mass that may not be perfectly even, so wheels must be balanced after coating, and any field recoating requires rebalancing.'],
]);
