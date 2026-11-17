<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('displacement-vs-mixing-ventilation-classrooms'); ?>
<p class="lede">Displacement ventilation delivers cool air slowly at floor level and lets it rise past students before it is exhausted near the ceiling; overhead mixing blends supply air with the whole room volume. Displacement usually wins on ventilation effectiveness and noise in a classroom, while mixing wins on heating performance, flexibility and first cost.</p>

<h2>How each system moves air in a classroom</h2>
<p><strong>Overhead mixing</strong> supplies air from ceiling diffusers at a relatively high velocity, often well below room temperature in cooling. The jet entrains room air, and the whole volume becomes roughly uniform in temperature and contaminant concentration. Return or exhaust is usually at the ceiling.</p>
<p><strong>Displacement ventilation</strong> supplies air through large, low-velocity outlets at or near the floor, typically at 63°F to 68°F (17°C to 20°C) in cooling, a few degrees below room temperature. The cool air spreads across the floor in a thin layer. Warm plumes rising from students and equipment carry air and contaminants upward, and the room stratifies into a cleaner, cooler lower zone and a warmer, more contaminated upper zone. Exhaust is taken high.</p>

<h2>Side-by-side comparison</h2>
<table>
<thead><tr><th>Criterion</th><th>Displacement ventilation</th><th>Overhead mixing</th></tr></thead>
<tbody>
<tr><td>Ventilation effectiveness in cooling</td><td>Higher; ASHRAE 62.1 assigns displacement a zone air distribution effectiveness above 1.0 in cooling</td><td>About 1.0 for ceiling supply of cool air</td></tr>
<tr><td>Heating performance</td><td>Poor as a heating system; warm air rises immediately</td><td>Acceptable when supply temperature and throw are designed for heating</td></tr>
<tr><td>Supply temperature</td><td>Warm, near room temperature</td><td>Cold, often around 55°F (13°C)</td></tr>
<tr><td>Supply airflow for the same sensible load</td><td>Higher, because the temperature difference is small</td><td>Lower</td></tr>
<tr><td>Noise</td><td>Very low outlet velocities; easy to meet tight classroom criteria</td><td>Diffusers and terminals must be selected carefully</td></tr>
<tr><td>Economizer hours</td><td>More, due to warm supply</td><td>Fewer</td></tr>
<tr><td>Wall and floor space</td><td>Outlets occupy wall area at floor level; furniture can block them</td><td>No floor-level obstructions</td></tr>
<tr><td>First cost</td><td>Usually higher for outlets and duct drops</td><td>Usually lower</td></tr>
</tbody>
</table>
<p class="note">Always take zone air distribution effectiveness values from the edition of ASHRAE 62.1 adopted in your jurisdiction. Values depend on supply temperature, outlet location and whether the system is heating or cooling.</p>

<h2>Indoor air quality</h2>
<p>Because the breathing zone in a displacement system sits in the cleaner lower layer, students breathe air with lower contaminant concentration than the room average. ASHRAE 62.1 recognizes this through the zone air distribution effectiveness factor, which can reduce the outdoor air required at the zone, or, more usefully for schools, deliver better air quality at the same outdoor airflow.</p>
<p>The advantage depends on stratification holding. Anything that mixes the room reduces it: ceiling fans, active student movement, open windows, portable heaters or a heating cycle. In early-grade classrooms with a lot of movement, the effect is smaller than in a lecture-style room.</p>
<p>Mixing systems perform consistently in both heating and cooling, and outdoor air requirements are straightforward to calculate. Supplying cold air from the ceiling at high velocity can still achieve good mixing and acceptable IAQ when ventilation is adequate.</p>

<h2>Energy</h2>
<p>Displacement saves energy in three ways: the warm supply temperature extends economizer hours, chilled water can run warmer in dry weather, and only the occupied zone is conditioned. However, it needs more supply airflow to carry the same sensible load with a small temperature difference, which raises fan energy unless ducts and units are generously sized.</p>
<p>In cold climates displacement is usually paired with a separate heating system, such as perimeter radiation or in-floor heating, because supplying warm air at floor level short-circuits to the ceiling. That second system adds first cost. Mixing systems can heat and cool from the same air handler, though a separate perimeter system may still be needed under large windows.</p>

<h2>Noise</h2>
<p>Classroom background noise criteria are strict, and displacement outlets discharge at very low velocity, often under 50 fpm (0.25 m/s) at the face. Outlet noise is rarely a problem, so the air handler and duct design dominate. Overhead mixing can meet classroom criteria too, but diffuser selection and terminal unit location need more care. The acoustic targets themselves are covered in <a href="<?= url('guides/school-acoustics-ansi-s12-60') ?>">classroom acoustics and ANSI S12.60</a>.</p>

<h2>Practical classroom issues</h2>
<ul>
<li><strong>Outlet placement.</strong> Displacement outlets need wall space that teachers may want for shelving or whiteboards. Outlets blocked by furniture stop working.</li>
<li><strong>Draft near outlets.</strong> Students seated within a few feet of an outlet can feel cool air at the ankles. Keep desks out of the adjacent zone the manufacturer defines.</li>
<li><strong>Ceiling height.</strong> Displacement benefits from ceilings of about 9 ft (2.7 m) or more so the stratified layer stays above heads.</li>
<li><strong>Return location.</strong> Mixing systems tolerate a range of return locations; displacement requires a high exhaust or return.</li>
</ul>

<h2>Which to choose</h2>
<p>Choose displacement when the primary loads are cooling-dominated, the design team wants high ventilation effectiveness and low noise, the ceiling is high enough, and a separate heating system is acceptable. Choose overhead mixing when heating and cooling must come from the same air, when classroom layouts change often, or when budget is tight. In either case the air handler must be designed for the selected supply temperature: displacement needs dehumidification with a cold coil and then reheat or bypass to warm the supply, a point explained in <a href="<?= url('guides/cooling-dehumidification-reheat') ?>">cooling, dehumidification and reheat</a>. Underfloor systems are a separate approach and are described in <a href="<?= url('guides/underfloor-air-distribution') ?>">underfloor air distribution</a>.</p>
<?php guide_end([
    ['Is displacement ventilation better for classrooms?', 'In cooling it usually provides better breathing zone air quality and lower noise than overhead mixing. It performs poorly for heating, needs more airflow and wall space, and typically requires a separate heating system.'],
    ['What supply temperature does displacement ventilation use?', 'Typically about 63°F to 68°F (17°C to 20°C), only a few degrees below room temperature. Colder air causes drafts at floor level.'],
    ['Can displacement ventilation reduce outdoor air requirements?', 'ASHRAE 62.1 assigns displacement a zone air distribution effectiveness above 1.0 in cooling, which can reduce required zone outdoor air. Many school designers instead keep outdoor air at the full rate and take the benefit as better air quality.'],
]);
