<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('cooling-dehumidification-reheat'); ?>
<p class="lede">A cooling coil removes moisture only when its surface is colder than the entering air's dew point. To reach a low enough supply dew point, the coil often has to cool the air further than the space needs for temperature alone. That overcooled air would chill the space, so a reheat step warms it back up without adding moisture, decoupling humidity control from temperature control.</p>

<h2>How a coil removes moisture</h2>
<p>Air passing through a cooling coil touches fins and tubes at a temperature below the air's dew point. Water vapour in the thin boundary layer near those surfaces condenses, and the condensate drains to the pan. The bulk of the air is never cooled to the surface temperature; it leaves at some point between the entering condition and the coil's effective surface temperature, called the apparatus dew point.</p>
<p>On a psychrometric chart, the coil process runs from the entering state toward the apparatus dew point on the saturation curve. The leaving air lands part way along that line. A deeper coil, lower face velocity and colder chilled water or refrigerant bring the leaving air closer to the apparatus dew point and lower in humidity ratio.</p>
<p>The coil's latent capacity depends on how far below the entering dew point its surfaces run. A coil with warm surfaces, such as one supplied with warm chilled water, may cool the air sensibly without condensing anything.</p>

<h2>Why the air gets overcooled</h2>
<p>A space has a sensible load, which sets the supply temperature, and a latent load, which sets the supply humidity ratio. The ratio between them, the sensible heat ratio, determines whether one coil leaving condition can satisfy both.</p>
<ul>
<li>In a typical office on a hot day, the sensible load is large and the latent load is modest. A supply around 55 F at its saturated dew point handles both. No reheat is needed.</li>
<li>On a mild, humid day, or in a space with many people and little solar gain, the sensible load drops while the latent load stays. The supply still needs a dew point near 50 to 55 F to absorb the moisture, but 55 F air would overcool the room.</li>
<li>In a dedicated outdoor air system, the coil must dry outdoor air to a dew point low enough to handle the space latent load, often in the high 40s to low 50s F. Delivering it at that temperature can overcool spaces or cause condensation on cold diffusers.</li>
</ul>
<p>The coil can only reach the needed dew point by cooling the whole airstream to roughly that temperature. The result is air that is the right dryness but too cold.</p>
<p>Calculating the dew point a space needs is the subject of <a href="<?= url('guides/dehumidification-load-calculation') ?>">calculating latent load and required supply dew point</a>.</p>

<h2>What reheat does</h2>
<p>Reheat raises the dry-bulb of the dried air without changing its humidity ratio. On the chart it moves horizontally to the right. The supply then arrives at a temperature that matches the sensible load and a humidity ratio that matches the latent load.</p>
<h3>Example</h3>
<p>A classroom needs supply air at 62 F to avoid overcooling and a supply dew point of 52 F to handle the latent load from occupants. The coil cools 1,200 cfm to 52 F saturated. Reheat raises it to 62 F:</p>
<p class="formula">Reheat = 1.08 × CFM × ΔT = 1.08 × 1,200 × (62 − 52) = 12,960 Btu/h</p>
<p>Without reheat, the space would either be too cold at 52 F supply or too humid if the coil were reset to 62 F leaving.</p>
<p class="note">The cooling energy spent overcooling the air below 62 F and the reheat energy are both a direct cost of humidity control. That is why reheat sources and recovery-based reheat matter.</p>

<h2>Where reheat happens</h2>
<ul>
<li><strong>At the AHU</strong>, with a reheat coil downstream of the cooling coil. All supply air is reheated to a common temperature. Simple, but it reheats air even for zones that need cooling.</li>
<li><strong>At the zone</strong>, with terminal reheat on VAV boxes. Each zone reheats only as needed. Common in offices and hospitals.</li>
<li><strong>Passive recovery</strong>, such as a sensible wheel or wraparound heat pipe, which uses heat from the return air or from the air entering the coil. No purchased energy.</li>
</ul>
<p>The trade-offs between reheat energy sources are compared in <a href="<?= url('guides/hot-gas-reheat-vs-hydronic-reheat') ?>">hot gas reheat vs hydronic and electric reheat</a>. Passive heat pipe reheat is in <a href="<?= url('guides/wraparound-heat-pipe-dehumidification') ?>">wraparound heat pipes for dehumidification</a>.</p>

<h2>Energy codes and simultaneous heating and cooling</h2>
<p>Energy codes restrict the use of new energy for reheat after cooling. Exceptions commonly exist for reheat using recovered or site-recovered energy, for small amounts of reheat, and for spaces with special humidity requirements. The details vary by code and edition, so confirm what your adopted code allows before designing a dehumidification sequence that depends on boiler or electric reheat.</p>

<h2>Limits of cooling-based dehumidification</h2>
<ul>
<li><strong>Coil temperature limits dew point.</strong> With chilled water around 42 to 45 F, supply dew points much below the mid 40s F are hard to reach. Lower dew points need colder coolants or desiccants.</li>
<li><strong>Frost on coils.</strong> If refrigerant or glycol runs below 32 F, coil surfaces can frost, which blocks airflow.</li>
<li><strong>Part-load latent capacity.</strong> DX systems that cycle or unload can lose latent capacity as coil surface temperature rises, a common cause of humid spaces.</li>
<li><strong>Carryover.</strong> Heavy condensing coils at high face velocity can blow water off the fins; keep face velocity near the guidance for the coil design.</li>
</ul>
<?php guide_end([
    ['How does a cooling coil dehumidify air?', 'The coil surface is colder than the air dew point, so water vapour condenses on the fins and drains away. The air leaves cooler and with a lower humidity ratio.'],
    ['Why is reheat needed for dehumidification?', 'To reach a low enough dew point, the coil must cool the air below the temperature the space needs. Reheat warms the dried air back up without adding moisture, so temperature and humidity are both controlled.'],
    ['Is reheat after cooling allowed by energy codes?', 'Energy codes restrict new energy for reheat but usually allow recovered energy, such as hot gas or heat recovery, and have exceptions for specific cases. Check the code and edition adopted for your project.'],
]);
