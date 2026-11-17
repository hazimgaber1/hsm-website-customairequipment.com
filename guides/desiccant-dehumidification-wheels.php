<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('desiccant-dehumidification-wheels'); ?>
<p class="lede">An active desiccant wheel dries air by adsorbing water vapour in a slowly rotating desiccant matrix, then drives that water out in a separate, heated reactivation airstream. Because it does not rely on cold surfaces, it can reach dew points far below what a cooling coil can, including below freezing, at the cost of reactivation heat and a hot, dry process air leaving condition that usually needs post-cooling.</p>

<h2>How the wheel works</h2>
<p>The wheel is divided into two sectors by seals. Typically about three quarters of the face handles <strong>process air</strong>, the air being dried, and about a quarter handles <strong>reactivation air</strong>, also called regeneration air. The split varies by design.</p>
<ol>
<li>In the process sector, humid air passes through flutes coated with or made from desiccant, such as silica gel, lithium chloride or a molecular sieve. Water vapour is adsorbed because the vapour pressure at the cool, dry desiccant surface is lower than in the air.</li>
<li>The wheel rotates slowly, typically measured in revolutions per hour rather than per minute, carrying moisture-laden desiccant into the reactivation sector.</li>
<li>Reactivation air, heated to a high temperature, passes through in the opposite direction. The hot desiccant's vapour pressure is now higher than the air's, so it releases water, which is exhausted outdoors.</li>
<li>The dried, warm desiccant rotates back into the process sector. A purge zone in some designs precools it with a small amount of process air before it enters the process stream, improving performance.</li>
</ol>
<p>This is different from an enthalpy recovery wheel, which turns quickly, has no heater, and simply exchanges moisture between two airstreams. Pairing enthalpy and sensible wheels around a coil, without active regeneration, is covered in <a href="<?= url('guides/dual-wheel-doas') ?>">dual-wheel DOAS</a>.</p>

<h2>What happens to process air</h2>
<p>Process air leaves drier and hotter than it entered. Two effects heat it:</p>
<ul>
<li><strong>Heat of adsorption.</strong> When water vapour is adsorbed, it releases roughly its latent heat of condensation plus some heat of binding to the desiccant. That heat goes into the air and the matrix.</li>
<li><strong>Carryover heat.</strong> The matrix leaves the reactivation sector hot and gives some of that heat to the process air.</li>
</ul>
<p>The result is that process air can leave 20 to 50 F warmer than it entered, depending on moisture removed and design. For comfort or process supply, a post-cooling coil, often using cooling tower water or chilled water at a warmer temperature than a dehumidifying coil would need, removes that heat sensibly.</p>

<h2>Reactivation energy</h2>
<p>Reactivation air is commonly heated to somewhere between about 200 and 300 F, depending on the desiccant and the dryness needed. Heat sources include gas burners, steam coils, hot water from cogeneration or condenser heat recovery, and electric heaters. Lower-temperature desiccants that regenerate with 140 to 180 F heat exist and can use waste heat.</p>
<p>The energy needed per pound of water removed is greater than the heat of vaporization alone, because the matrix and reactivation air must be heated and some heat is lost to exhaust. Ratios of 1,500 to 2,500 Btu per pound of water removed are often cited for typical designs, but the actual figure varies widely with design and conditions. Get it from the manufacturer for your selection.</p>
<p class="note">Cheap reactivation heat changes the economics completely. Desiccant systems that run on rejected condenser heat or cogeneration heat can beat cooling-based dehumidification even where a coil could reach the dew point.</p>

<h2>Achievable dew points</h2>
<p>A cooling coil supplied with chilled water rarely delivers a dew point below the mid 40s F. A desiccant wheel has no such floor. Depending on desiccant, entering condition, reactivation temperature and face velocity, process air dew points in the 20s F, the single digits and below zero are achievable. Pharmaceutical powder handling, battery manufacturing and some cold storage applications use multi-stage systems to reach dew points far below freezing.</p>
<p>Performance improves sharply when process air enters cooler and drier. Placing a cooling coil upstream of the wheel (precooling) removes bulk moisture cheaply and lets the wheel reach a lower dew point or a smaller size. The combined approach is described in <a href="<?= url('guides/low-dew-point-supply-air') ?>">how to achieve supply dew points below 40 F</a>.</p>

<h2>Typical arrangements</h2>
<h3>Standalone desiccant dehumidifier</h3>
<p>A packaged unit with process and reactivation fans, the wheel, a reactivation heater and filters. It treats outdoor air or recirculated air and feeds the main HVAC system or the space directly.</p>
<h3>Integrated in a custom AHU</h3>
<p>The wheel sits in the outdoor air path, with precooling and post-cooling coils. A separate reactivation path with its own intake, heater, fan and exhaust is built into the casing. This suits large DOAS units, natatorium and process air systems.</p>
<h3>Hybrid DX or chilled water plus desiccant</h3>
<p>The coil handles most of the moisture, and the wheel trims dew point on humid shoulder-season days or when very dry air is required.</p>

<h2>Design considerations</h2>
<ul>
<li><strong>Reactivation intake and exhaust.</strong> Reactivation air exhausts hot and humid. Locate it away from intakes, and size the exhaust for possible condensation in cold weather.</li>
<li><strong>Leakage.</strong> Seal leakage from reactivation to process side adds moisture and heat to the dried air. Pressures should push process air toward reactivation, not the reverse.</li>
<li><strong>Filtration.</strong> Dust and some chemicals degrade desiccants. Filter both airstreams.</li>
<li><strong>Controls.</strong> Capacity is usually modulated by reactivation temperature or heater output, sometimes with process bypass. Control from supply dew point rather than RH; see <a href="<?= url('guides/dew-point-control-vs-rh-control') ?>">dew-point control vs relative humidity control</a>.</li>
<li><strong>Fire and high-temperature safety.</strong> High-limit controls on the reactivation heater and airflow proving are essential.</li>
</ul>
<?php guide_end([
    ['How does a desiccant dehumidifier wheel work?', 'Process air passes through a rotating desiccant matrix that adsorbs water vapour. The wheel turns slowly into a heated reactivation airstream that drives out the water, which is exhausted outdoors.'],
    ['What dew point can a desiccant wheel achieve?', 'Far lower than a cooling coil. Depending on desiccant, reactivation temperature and entering conditions, dew points in the 20s F, near 0 F and below are achievable, with multi-stage systems going lower still.'],
    ['Why is air hot after a desiccant wheel?', 'Adsorbing water releases heat, and the matrix carries heat over from the hot reactivation sector. Process air often leaves 20 to 50 F warmer and typically needs a post-cooling coil.'],
]);
