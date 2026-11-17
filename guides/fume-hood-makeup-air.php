<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('fume-hood-makeup-air'); ?>
<p class="lede">Supply makeup air to a fume hood lab by tracking the room's total exhaust minus a fixed offset, delivering it through low-velocity diffusers placed away from the hood face, and tuning the controls so supply follows sash movement within a few seconds.</p>

<h2>Start with the airflow balance for each room</h2>
<p>Every lab room has the same basic equation. What leaves through hoods and general exhaust must equal what arrives through the supply diffusers plus what transfers in from the corridor under the door and through any transfer grilles.</p>
<p class="formula">Supply cfm = (Hood exhaust cfm + General exhaust cfm) − Offset cfm</p>
<p>The offset is the deliberate shortfall that keeps the lab negative. It is usually set as a fixed volume, commonly a few hundred cfm for a typical lab module, or as a percentage of total exhaust with a minimum value. The offset needs to be large enough to produce a measurable inward flow at the door but small enough that the corridor system can supply it. Overly large offsets cause whistling doors and starve the corridor.</p>

<h2>Step-by-step setup for a VAV hood lab</h2>
<ol>
<li><strong>List every exhaust point.</strong> Record each hood's minimum and maximum exhaust, including the sash-closed minimum required by the owner's safety standard, plus snorkels, canopy hoods, cabinets and general exhaust grilles.</li>
<li><strong>Determine the room minimum.</strong> Take the largest of the dilution airflow, the cooling airflow and the sum of all device minimums. The general exhaust valve makes up any difference between device exhaust and the room minimum. The basis for the dilution number is in <a href="<?= url('guides/lab-air-change-rates') ?>">setting laboratory air change rates</a>.</li>
<li><strong>Pick the offset.</strong> Fix the cfm value per room with the owner's EHS group. Write it into the sequence as a constant, not as something the balancer adjusts freely.</li>
<li><strong>Select the supply valve.</strong> Size the supply terminal for the maximum supply (all exhaust at maximum minus offset) and confirm it can control accurately at the minimum. Venturi-type pressure-independent valves are common because they hold airflow without a separate flow sensor and respond quickly.</li>
<li><strong>Program volumetric tracking.</strong> The room controller sums measured or commanded exhaust, subtracts the offset and commands the supply valve. Tracking from measured hood flow is more accurate; tracking from commanded flow is faster. Many systems use commanded values with a feedback check.</li>
<li><strong>Set response time.</strong> Hood exhaust valves on VAV hoods typically reach new setpoint within a second or so of a sash change. The supply valve should follow closely enough that the room never goes positive. Specify the response time for both valves in the controls section.</li>
<li><strong>Add reheat at the supply terminal.</strong> When the hoods drive supply well above the cooling need, the extra air arrives cold. A reheat coil on each supply terminal holds room temperature at high hood use.</li>
<li><strong>Verify with the hoods in use.</strong> During testing, open and close sashes in sequence and record room airflow, offset and differential pressure. Repeat with the door open and closed.</li>
</ol>
<p class="note">Constant volume hoods make the tracking simple because exhaust is fixed, but they keep supply at its maximum all the time. Most new labs use VAV hoods with sash position sensors or occupancy-based setback.</p>

<h2>Keep the makeup air from disturbing the hood</h2>
<p>The single biggest field problem with makeup air is not volume but velocity. A hood with an 100 fpm face velocity can lose containment when supply air sweeps across its opening at a similar speed. Use these placement rules:</p>
<ul>
<li>Place supply diffusers so their discharge does not reach the hood face. Perforated-face, radial or laminar-flow diffusers deliver large volumes at low terminal velocity.</li>
<li>Avoid four-way ceiling diffusers directly in front of or beside hoods. Their throw often reaches the sash plane.</li>
<li>Keep doors, especially the corridor door, away from the hood face. Inward air through a door opening is a strong cross-draft.</li>
<li>Do not put a hood opposite a high-traffic aisle where people walk past the sash frequently.</li>
<li>Where the supply volume per square foot of ceiling is high, spread it over more diffusers or use a dedicated low-velocity supply plenum ceiling.</li>
</ul>
<p>Many designers aim for cross-draft velocities at the sash opening well below the face velocity, often in the range of half the face velocity or less, and verify with a smoke test and a velocity survey during commissioning. Containment testing under ANSI/ASHRAE 110 with the room operating normally is the final proof.</p>
<p class="warn">Do not "fix" a failing hood by raising its face velocity. Higher face velocity often increases turbulence at the sash and makes the room supply even larger, which can worsen cross-drafts.</p>

<h2>Corridor and building-level effects</h2>
<p>The transfer air that makes up the offset has to come from somewhere. If every lab on a floor is offset by 200 cfm and there are 20 labs, the corridor system needs at least 4,000 cfm more supply than exhaust just to feed the labs. Size the corridor supply accordingly, and confirm the building as a whole stays slightly positive to outdoors so infiltration does not undermine the plan.</p>
<p>At the air handler, the total supply follows the sum of all room supplies. That total swings with hood use, so the fan control, typically on duct static pressure, must hold steady through rapid demand changes. The diversified peak used to size the unit is a separate calculation, covered in <a href="<?= url('guides/lab-makeup-air-diversity-sizing') ?>">sizing lab makeup air units for fume hood diversity</a>. When rooms will not hold negative pressure after start-up, the diagnosis process is in <a href="<?= url('guides/lab-pressurization-troubleshooting') ?>">troubleshooting laboratory pressurization problems</a>.</p>

<h2>Checklist for the controls submittal</h2>
<ul>
<li>Offset value and control method (volumetric, pressure, or hybrid) for every room</li>
<li>Hood minimum and maximum exhaust and the sash sensing method</li>
<li>Supply and exhaust valve response times and accuracy at minimum flow</li>
<li>Alarm logic for low hood flow, loss of offset and supply valve failure</li>
<li>Reheat valve control and room temperature setpoints</li>
<li>Behavior on loss of power or controls: valves fail to a position that keeps the room negative</li>
</ul>
<?php guide_end([
    ['How much makeup air does a fume hood need?', 'The room supply should equal total exhaust, including the hood, minus the room offset. For a VAV hood, that means supply varies with sash position, so the makeup air must track the hood\'s exhaust in real time.'],
    ['What is a typical lab pressure offset?', 'Offsets are usually set as a fixed airflow, often a few hundred cfm for a standard lab module, or as a percentage of exhaust with a minimum. The value should be agreed with the owner\'s safety group and recorded in the sequence.'],
    ['Why do supply diffusers affect fume hood performance?', 'Air from a diffuser that reaches the sash opening creates cross-drafts that can pull vapors out of the hood. Low-velocity diffusers placed away from the hood face keep the incoming air from disturbing containment.'],
]);
