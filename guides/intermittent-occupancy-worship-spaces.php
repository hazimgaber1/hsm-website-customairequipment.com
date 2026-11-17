<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('intermittent-occupancy-worship-spaces'); ?>
<p class="lede">A church, mosque, synagogue, temple or community hall may sit empty for six days and then hold several hundred people for two hours. Design the air handler so it can bring a cold or hot, empty room to comfort before people arrive, ventilate the crowd while they are there, and then fall back to a near-off setback without wasting energy the rest of the week.</p>

<h2>Step 1: Document the usage pattern</h2>
<p>Sit down with the building committee or facility manager and record a typical week and the peak events of the year. Note for each event:</p>
<ul>
<li>Start time, duration and expected attendance.</li>
<li>Whether people arrive gradually or all at once.</li>
<li>Activities such as singing, standing, communal meals or children's programs that affect loads.</li>
<li>Spaces used: main hall only, or also fellowship hall, classrooms and kitchen.</li>
</ul>
<p>Major festivals often draw two or three times the usual attendance. Design capacity is set by those, but daily operation should be optimized for normal weeks.</p>

<h2>Step 2: Account for thermal mass</h2>
<p>Many worship buildings are masonry or stone with high thermal mass and high ceilings. After days at setback, the walls, floor and furniture are cold in winter or warm in summer. Even when the air reaches setpoint, occupants feel radiant discomfort from cold surfaces. Air temperature alone is a poor indicator of readiness.</p>
<p>Estimate the energy needed to bring the building mass toward setpoint, not just the air. A crude approach is to estimate the mass of interior surfaces that participate, multiply by specific heat and the temperature change you want, and divide by available heating capacity to find preheat time. In practice, many facility managers find through trial that preheat must start many hours, sometimes the evening before, to reach acceptable radiant conditions in heavy buildings.</p>
<p class="note">Lightweight modern halls warm up much faster. Two buildings with the same floor area can need very different preheat durations.</p>

<h2>Step 3: Size heating and cooling for warm-up and pull-down</h2>
<ol>
<li>Calculate the steady-state design heating load with full ventilation at peak occupancy.</li>
<li>Calculate the warm-up load: envelope loss at setback plus the energy to lift air and mass temperature in the preheat time available.</li>
<li>Select heating capacity for the larger of the two, or extend the preheat time to reduce capacity, whichever is cheaper over the building's life.</li>
<li>For cooling, calculate the pull-down load in a similar way, plus the occupant load at full attendance with ventilation at the peak rate.</li>
<li>Check dehumidification at part load: a crowded room on a mild, humid day may need moisture removal when little sensible cooling is required.</li>
</ol>
<p>During warm-up and pull-down, the air handler can run on full recirculation with outdoor air dampers closed, because the room is unoccupied. That dramatically reduces the capacity needed, especially in cold climates.</p>

<h2>Step 4: Ventilate for the crowd, not the week</h2>
<p>Peak ventilation depends on attendance. Because occupancy jumps quickly, consider:</p>
<ul>
<li><strong>Pre-occupancy purge.</strong> Bring in outdoor air for a period before the service to dilute contaminants that accumulated while the building was closed, as many codes and ASHRAE 62.1 address for intermittently occupied spaces.</li>
<li><strong>Scheduled ventilation steps</strong> tied to the event calendar so the outdoor air damper opens fully at the start of the event.</li>
<li><strong>Demand-controlled ventilation</strong> with CO₂ sensors in the occupied zone to trim outdoor air for smaller gatherings. Sequences are covered in <a href="<?= url('guides/demand-controlled-ventilation-co2') ?>">demand-controlled ventilation with CO₂</a>.</li>
</ul>
<p>The ASHRAE 62.1 provisions on short-term conditions allow ventilation to be averaged over time in some cases for spaces with intermittent occupancy. Check whether the adopted edition and local code permit this before relying on it.</p>

<h2>Step 5: Choose the air handler configuration</h2>
<p>A single-zone variable-volume air handler with an economizer and full modulation of outdoor air suits most halls. Features worth including:</p>
<ul>
<li><strong>Variable-speed fans</strong> so the unit can run at high airflow for warm-up and pull-down, then reduce airflow during the service to lower noise.</li>
<li><strong>Energy recovery</strong> where peak outdoor airflow is large. Recovery reduces the heating and cooling capacity needed at full ventilation.</li>
<li><strong>Quiet operation.</strong> Worship spaces often require low background noise for speech and music. Low duct velocities and a well-located unit help.</li>
<li><strong>Dehumidification with reheat,</strong> or a recovery device downstream of the coil, if humid climates are involved.</li>
</ul>
<p>For acoustically sensitive sanctuaries, many of the same principles that apply in theaters apply; see <a href="<?= url('guides/auditorium-theater-air-handling') ?>">auditorium and theater air handling</a> for that detail.</p>

<h2>Step 6: Configure controls for adaptive start</h2>
<ol>
<li>Link the building automation system to an event calendar that facility staff can update easily, ideally from a phone.</li>
<li>Use optimal start logic that learns how long warm-up takes as a function of outdoor temperature and setback level. See <a href="<?= url('guides/optimal-start-morning-warmup') ?>">optimal start and morning warm-up</a>.</li>
<li>Set unoccupied setback limits that protect the building: for example, a minimum temperature to prevent freezing pipes and protect organs or pianos, and a maximum humidity to prevent mold.</li>
<li>Provide a manual override button for unscheduled events with a timed return to setback.</li>
<li>Trend space temperature, humidity and CO₂ to tune preheat and ventilation after the first season.</li>
</ol>

<h2>Step 7: Protect sensitive contents</h2>
<p>Pipe organs, pianos, wooden furnishings and artwork can be harmed by rapid humidity swings caused by aggressive warm-up of cold, dry winter air. Limit the rate of temperature change during warm-up and consider humidification with a moderate limit in cold climates. Coordinate with the organ builder, who may specify an allowable humidity range.</p>
<?php guide_end([
    ['How early should heating start before a church service?', 'It depends on building mass and outdoor temperature. Lightweight halls may need an hour or two; heavy masonry buildings may need many hours. Optimal start controls that learn the building are the most reliable approach.'],
    ['Do worship spaces need full ventilation all week?', 'No. Outdoor air is needed when people are present, plus a pre-occupancy purge. During unoccupied periods, outdoor air can be closed while the unit protects the building with setback limits.'],
    ['Can rapid heating damage a pipe organ?', 'Yes. Fast temperature changes with dry winter air can lower humidity quickly and stress wood and leather. Limit warm-up rates and follow the organ builder\'s humidity guidance.'],
]);
