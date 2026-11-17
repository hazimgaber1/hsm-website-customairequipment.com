<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('natatorium-dehumidification'); ?>
<p class="lede">An indoor pool is a moisture factory. Its air handling system must remove the water that evaporates from the pool and wet deck, hold the space dew point low enough to protect the envelope, dilute chloramines from the water surface, and survive a corrosive environment for decades. The design centres on an evaporation load calculation, dew point control and material choices that resist chlorine compounds.</p>

<h2>Evaporation: the dominant load</h2>
<p>Evaporation from the pool surface depends on the difference between the vapour pressure of saturated air at the water temperature and the vapour pressure of the room air, and on how much the water is agitated. The ASHRAE Handbook gives a widely used empirical form:</p>
<p class="formula">W = 0.1 × A × (p_w − p_a) × F_a</p>
<ul>
<li><strong>W</strong> is evaporation in lb/h.</li>
<li><strong>A</strong> is pool surface area in ft².</li>
<li><strong>p_w</strong> is saturation vapour pressure at the water temperature, in inches of mercury.</li>
<li><strong>p_a</strong> is vapour pressure of the room air at its dew point, in inches of mercury.</li>
<li><strong>F_a</strong> is an activity factor, low for residential pools at rest and higher for public pools, wave pools, water features and spas.</li>
</ul>
<h3>Example</h3>
<p>A 4,000 ft² school pool has water at 82 F. The room is held at 84 F and 55 percent RH, a dew point of about 66.5 F.</p>
<p>p_w at 82 F ≈ 1.10 in. Hg. p_a at 66.5 F ≈ 0.65 in. Hg. Using an activity factor of 1.0 for a public pool:</p>
<p>W = 0.1 × 4,000 × (1.10 − 0.65) × 1.0 = 180 lb/h.</p>
<p>That is roughly 190,000 Btu/h of latent load from the pool alone, before deck evaporation, spectators and outdoor air. Spray features and whirlpools can add substantially; evaluate them separately with higher activity factors.</p>
<p class="note">Evaporation stops increasing when the pool is unoccupied but does not stop. Unoccupied periods have lower activity factors, which allows a lower airflow or capacity setting, but the dehumidifier must keep running.</p>

<h2>Setting the air conditions</h2>
<ul>
<li><strong>Air temperature slightly above water temperature.</strong> Keeping air about 2 to 4 F warmer than the water reduces evaporation and avoids a chilly feel for wet swimmers.</li>
<li><strong>RH around 50 to 60 percent.</strong> Lower RH increases evaporation, which raises both the dehumidification load and pool water heating. Higher RH raises condensation risk and occupant discomfort.</li>
<li><strong>Space dew point limited by the envelope.</strong> In cold climates, the room dew point must stay below the coldest interior surface temperature, which often means reducing RH in severe cold or using supply air to wash glazing. The method for finding that limit is in <a href="<?= url('guides/max-winter-indoor-rh-calculation') ?>">calculating maximum winter indoor RH</a>.</li>
</ul>
<p>Because the room dew point is the variable that governs both evaporation and condensation, control the dehumidification process to space dew point rather than RH, with RH only as a display or limit. The reasoning is covered in <a href="<?= url('guides/dew-point-control-vs-rh-control') ?>">dew-point control vs relative humidity control</a>.</p>

<h2>Removing the moisture</h2>
<h3>Outdoor air dilution</h3>
<p>In cold, dry weather, outdoor air holds much less moisture than pool air, so ventilation alone can remove the evaporation load. The airflow needed is the evaporation divided by 4.5 × the humidity ratio difference. Heating that outdoor air is costly without recovery.</p>
<h3>Mechanical dehumidification</h3>
<p>A cooling coil removes moisture by condensation. Packaged pool dehumidifiers and custom AHUs often use a refrigeration circuit that sends condenser heat to reheat coils and to the pool water, recovering most of the latent heat. In humid summer weather, mechanical dehumidification is required because outdoor air is too humid to help.</p>
<h3>Combined systems</h3>
<p>Most natatoriums use both: dilution in winter, mechanical dehumidification in summer and shoulder seasons, with energy recovery on the exhaust. Plate exchangers and runaround loops with corrosion-resistant construction are common recovery choices.</p>

<h2>Air quality and chloramines</h2>
<p>Chloramines form when chlorine reacts with nitrogen compounds from swimmers. They are heavier than air and accumulate near the water surface, causing eye and respiratory irritation and corroding metals.</p>
<ul>
<li>Provide outdoor air at least at the rate required by ASHRAE 62.1 for the pool and deck areas, and more where the chloramine load is high.</li>
<li>Locate exhaust and return to sweep air across the water surface toward the exhaust, rather than only at the ceiling. Low-level exhaust near the pool edge or source capture over the gutters is used in some designs.</li>
<li>Keep the natatorium slightly negative relative to adjacent spaces to contain humid, chloramine-laden air.</li>
<li>Avoid dead air pockets above the pool.</li>
</ul>

<h2>Air distribution</h2>
<ul>
<li>Direct supply air at exterior glazing and cold surfaces to keep them above the dew point.</li>
<li>Avoid high velocity across the water surface, which increases evaporation and chills swimmers.</li>
<li>Avoid supply air onto spectator areas at high velocity; spectators are dressed for street conditions.</li>
<li>Use duct materials suited to the environment, such as coated or stainless steel, aluminum or fabric ductwork rated for pool use.</li>
</ul>

<h2>Corrosion and construction</h2>
<p>Chlorine compounds and moisture attack galvanized steel, uncoated aluminum, copper and fasteners. Typical AHU measures:</p>
<ul>
<li>Coated or stainless casing interiors and drain pans; coated coils suited to chlorine exposure.</li>
<li>Stainless or coated fasteners, hinges and door hardware.</li>
<li>Fans and motors rated for the environment, or located outside the corrosive airstream.</li>
<li>Sealed electrical enclosures.</li>
</ul>
<p>Coating options are discussed in <a href="<?= url('guides/casing-coatings-corrosive-environments') ?>">casing coatings for corrosive environments</a>.</p>

<h2>Energy</h2>
<p>The latent heat of the evaporated water is the largest energy flow in the space. Recovering it, through refrigerant heat recovery to the pool water and air, or through exhaust heat recovery, is the main lever on operating cost. Pool covers during unoccupied hours sharply reduce evaporation and are worth considering wherever operations allow.</p>
<p>Ice arenas, the other major moisture-dominated recreational space, are covered separately under commercial buildings.</p>
<?php guide_end([
    ['How do you calculate pool evaporation for natatorium design?', 'A common ASHRAE method is evaporation in lb/h equals 0.1 times pool area times the difference between saturation vapour pressure at the water temperature and room air vapour pressure, both in inches of mercury, times an activity factor.'],
    ['What temperature and humidity should a natatorium be?', 'Air is typically held 2 to 4 F above the pool water temperature at about 50 to 60 percent RH. In cold climates the dew point may need to be lowered further to protect the envelope.'],
    ['Why should a natatorium be under negative pressure?', 'Slight negative pressure keeps humid, chloramine-laden air from leaking into adjacent spaces and into the building envelope, where it can cause corrosion and condensation.'],
]);
