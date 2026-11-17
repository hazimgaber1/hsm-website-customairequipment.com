<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('lab-exhaust-fans-stack-design'); ?>
<p class="lede">Lab exhaust has to leave the roof fast and high enough that the plume clears the building's recirculation zone and is diluted before it reaches any air intake, window or person. High-plume and induced-flow fans do that by combining a high discharge velocity with entrained outdoor air, so a short physical stack behaves like a much taller one.</p>

<h2>The re-entrainment problem</h2>
<p>Wind flowing over a building separates at the roof edge and creates a turbulent recirculation zone over much of the roof and along the leeward wall. Exhaust released inside that zone can be pulled back down onto the roof and into the building's own air intakes, a problem called re-entrainment. In labs this is a health concern as well as an odor complaint, because the exhaust may carry chemical vapors from fume hoods.</p>
<p>Two things keep the plume out of trouble: getting it high enough to escape the recirculation zone, and diluting it enough that concentrations at receptors are acceptable even when wind pushes it down. The design tools are stack height, discharge momentum and the volume of air mixed into the plume before it leaves.</p>

<h2>What Z9.5 and ASHRAE guidance expect</h2>
<p>ANSI/ASSP Z9.5 and the ASHRAE Handbook chapter on building air intake and exhaust design are the usual references. Commonly applied guidelines include:</p>
<ul>
<li>Stack discharge vertically upward; no rain caps that deflect the plume downward.</li>
<li>Stack top at least about 10 ft (3 m) above the adjacent roof line to protect people on the roof.</li>
<li>Discharge velocity in the range of about 3,000 fpm (15 m/s) to give the plume momentum and to keep rain from entering a capless stack.</li>
<li>An assessment of dilution at nearby intakes and receptors, using the ASHRAE geometric and dilution methods, numerical modeling or a wind tunnel study, depending on the risk.</li>
</ul>
<p>Confirm the edition and wording your project references; the owner's EHS standard may set stricter values. The broader requirements of Z9.5 are summarized in <a href="<?= url('guides/lab-ventilation-ansi-z9-5') ?>">laboratory ventilation under ANSI/ASSP Z9.5</a>.</p>

<h2>Effective stack height</h2>
<p>A plume keeps rising after it leaves the stack because of its momentum. The height it reaches before wind bends it over is called plume rise, and the effective stack height is the sum of the physical height and the plume rise.</p>
<p class="formula">Effective stack height = Physical stack height + Plume rise</p>
<p>Plume rise grows with exit velocity and with the volume flow of the plume, and it shrinks as wind speed increases. That is why high-plume fans focus on both: a fast exit and a large total volume. On a windy day the plume bends over quickly, so dilution, not height, does most of the work.</p>

<h2>How induced-flow fans work</h2>
<p>An induced-flow (or entrained-air) exhaust fan discharges lab exhaust through a high-velocity nozzle. The jet draws in outdoor air through an annular opening around the nozzle or a windband above it. The outdoor air mixes with the exhaust before it leaves the windband, so the plume that leaves the fan is larger in volume and already diluted.</p>
<table>
<thead><tr><th>Arrangement</th><th>How it works</th><th>Typical use</th></tr></thead>
<tbody>
<tr><td>Conventional centrifugal fan with tall stack</td><td>Physical height plus exit velocity</td><td>Small systems; sites where tall stacks are acceptable</td></tr>
<tr><td>High-plume fan with bypass air plenum</td><td>Bypass damper admits outdoor air at the fan inlet to hold constant fan flow and exit velocity</td><td>Manifolded VAV lab exhaust</td></tr>
<tr><td>Induced-flow fan with windband</td><td>High-velocity nozzle entrains outdoor air through the windband</td><td>Large lab buildings; sites needing low physical height</td></tr>
</tbody>
</table>
<p>Because the entrained air is not handled by the fan wheel, induced-flow fans can deliver large plume volumes without the fan power that moving that total air through the wheel would need. Their published ratings should show both the fan airflow and the total plume flow, and they should be tested under AMCA 210 with the nozzle and windband installed.</p>

<h2>Constant vs variable volume exhaust</h2>
<p>VAV fume hoods make building exhaust vary, but the stack needs enough velocity at all times. Traditional practice runs the exhaust fans at constant volume and opens a bypass damper at the fan inlet to admit roof air as building exhaust falls. That works but wastes fan energy.</p>
<p>Many newer systems vary fan speed with building demand and use one of several controls to protect the plume: a minimum speed that keeps exit velocity above a dispersion-based threshold, wind-responsive control that lowers velocity only in favorable wind conditions, or concentration sensing in the exhaust. All rely on a dispersion study that shows the lower exit velocity is safe for the conditions allowed. The energy case is discussed in <a href="<?= url('guides/lab-energy-reduction') ?>">how to reduce laboratory HVAC energy</a>.</p>
<p class="warn">Never reduce stack velocity, remove bypass air or lower stack height on an existing lab exhaust system without a new dispersion assessment. Plume behavior is not intuitive, and the consequence of a mistake is exhaust at the building's own intakes.</p>

<h2>Fan construction and redundancy</h2>
<ul>
<li><strong>Materials and coatings:</strong> epoxy, phenolic or other chemical-resistant coatings, or stainless or FRP construction for aggressive exhaust.</li>
<li><strong>Motor out of the airstream:</strong> belt-drive or direct-drive arrangements keep the motor outside the contaminated air.</li>
<li><strong>Spark resistance:</strong> where flammable vapors are possible, specify an AMCA spark-resistant construction type; see <a href="<?= url('guides/spark-resistant-fans-amca-99-0401') ?>">spark-resistant fans under AMCA 99-0401</a>.</li>
<li><strong>Redundancy:</strong> manifolded systems typically use N+1 fans on a common plenum, with isolation dampers so a fan can be removed while the others run.</li>
<li><strong>Drainage:</strong> plenum and fan housing drains, because capless stacks admit some rain.</li>
</ul>

<h2>Intakes and the rest of the roof</h2>
<p>Stack design and intake location are two halves of the same problem. Intake placement for the building's air handlers is covered in <a href="<?= url('guides/outdoor-air-intake-placement') ?>">outdoor air intake placement</a>; for labs, the dispersion study should evaluate those intakes, operable windows, rooftop work areas and neighboring buildings together with the exhaust design.</p>
<?php guide_end([
    ['How high should a lab exhaust stack be?', 'A common guideline, reflected in ANSI Z9.5 and ASHRAE guidance, is at least about 10 feet above the adjacent roof line with a high discharge velocity. The final height should be confirmed by a dispersion assessment of nearby intakes and receptors.'],
    ['What is an induced-flow exhaust fan?', 'It is a lab exhaust fan that discharges through a high-velocity nozzle which entrains outdoor air through a windband. The added air increases plume volume and dilution, giving a higher effective stack height without a tall physical stack.'],
    ['Why do lab exhaust stacks not have rain caps?', 'Rain caps deflect the plume sideways or downward, which increases re-entrainment. Lab stacks discharge vertically at high velocity, and housing drains handle the small amount of rain that enters.'],
]);
