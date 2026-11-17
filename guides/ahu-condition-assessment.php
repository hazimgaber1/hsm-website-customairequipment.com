<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('ahu-condition-assessment'); ?>
<p class="lede">A useful condition assessment rates each major section of an air handler on a consistent scale, records the evidence behind each rating, and ends with a clear statement of which parts are repairable, which need replacement and whether the casing can carry the unit forward.</p>

<h2>How to use this checklist</h2>
<p>Walk the unit with it running if possible, then again with it locked out and the doors open. Rate each item 1 to 4 using the scale below and attach a photo to every rating of 3 or 4. The goal is a factual record that an owner, engineer and contractor can all agree on before anyone prices work. Cost and payback analysis comes afterward and is deliberately left out of this list.</p>
<table>
<thead><tr><th>Rating</th><th>Meaning</th><th>Typical action</th></tr></thead>
<tbody>
<tr><td>1 Good</td><td>Functions as designed, minor wear only</td><td>Routine maintenance</td></tr>
<tr><td>2 Fair</td><td>Wear or deterioration that does not yet affect performance</td><td>Repair during next planned outage</td></tr>
<tr><td>3 Poor</td><td>Performance, reliability or hygiene affected</td><td>Repair or replace soon</td></tr>
<tr><td>4 Failed</td><td>Not functional, unsafe, or beyond economic repair</td><td>Replace</td></tr>
</tbody>
</table>

<h2>Casing, base and floor</h2>
<ul>
<li>Base frame: section loss, perforation, cracked welds, loose bolts, standing water under the unit.</li>
<li>Floor: rust-through, soft spots underfoot, failed seams, ponding away from drains.</li>
<li>Drain pans: slope toward the outlet, corrosion, biofilm, trap condition and whether the trap holds a seal at operating static.</li>
<li>Wall and roof panels: dents, oil canning, rusted fasteners, separation at joints.</li>
<li>Insulation: wet, crushed, delaminated, exposed fibreglass in the airstream, mould on surfaces.</li>
<li>Thermal performance: condensation or frost on exterior skin, cold spots found by infrared scan.</li>
<li>Leakage: audible whistling, visible daylight at seams, smoke-pencil test at doors and penetrations.</li>
<li>Access doors: hinges, latches, gasket compression, ability to open against operating pressure.</li>
<li>Outdoor units: roof watertightness, sealant at seams, curb or dunnage condition, rain intrusion at intakes.</li>
</ul>
<p class="warn">Do not disturb old insulation, mastic, gaskets or paint until they have been tested. See <a href="<?= url('guides/hazardous-materials-old-ahus') ?>">hazardous materials in old AHUs</a>.</p>

<h2>Coils</h2>
<ul>
<li>Fin condition: bent, flattened or corroded fins; percentage of face area affected.</li>
<li>Fin-to-tube bond: fins that slide or crumble when pressed, a sign of galvanic corrosion.</li>
<li>Tubes and headers: evidence of past freeze damage, plugged or pinched tubes, leaks, field repairs.</li>
<li>Coil casing and supports: rust at tube sheets and rails.</li>
<li>Air pressure drop at current airflow compared with the original selection, if known.</li>
<li>Water side: fluid temperature difference under load, valve operation, vents and drains.</li>
<li>Cleanliness: debris and biological growth on the leaving face.</li>
</ul>

<h2>Fans, motors and drives</h2>
<ul>
<li>Wheel: erosion, cracks, buildup, balance weights missing.</li>
<li>Housing or inlet cone: corrosion, rubbing marks, clearance at inlet cone.</li>
<li>Bearings: temperature, noise, lubrication history, grease leakage.</li>
<li>Shaft: wear at bearing seats, keyway damage, signs of bending.</li>
<li>Belts and sheaves: groove wear, alignment, tension, belt dust.</li>
<li>Motor: insulation resistance test result, nameplate efficiency class, amperage against nameplate, overheating discolouration.</li>
<li>VFD, if present: age, fault history, cooling, harmonics complaints.</li>
<li>Vibration: overall levels at each bearing; spectrum if available.</li>
<li>Isolation: spring deflection, bottomed-out isolators, torn flexible connections.</li>
</ul>

<h2>Dampers and filtration</h2>
<ul>
<li>Blades: warping, missing seals, corrosion, blades that do not close fully.</li>
<li>Linkages and jackshafts: slop, seized bearings, disconnected blades.</li>
<li>Actuators: stroke time, response to command, end-switch function.</li>
<li>Filter racks: bypass gaps around frames, damaged holding clips, missing blank-offs.</li>
<li>Filter gauges or transmitters: present, zeroed, reading plausibly.</li>
</ul>

<h2>Controls and accessories</h2>
<ul>
<li>Sensors: calibration check of supply, mixed and return temperatures; airflow station readings.</li>
<li>Freeze protection: low-limit device function and placement.</li>
<li>Safeties: smoke detectors, high static cutouts, fire stat function.</li>
<li>Controller: whether it is supported, its integration protocol and spare point capacity.</li>
<li>Humidifier: dispersion tube condition, wetting downstream, drain function.</li>
<li>Lights, receptacles and service switches: operational, guarded, code-appropriate.</li>
<li>Energy recovery: seal condition, wheel drive belt, plate fouling, frost control function.</li>
</ul>

<h2>Turning ratings into a recommendation</h2>
<p>Summarize the ratings by section in a one-page table, then write a short conclusion for each. A practical rule: if the casing, base or floor scores 4, or scores 3 with widespread rather than localized damage, the casing is the limiting factor and the unit is a replacement candidate. If the casing scores 1 or 2 and the worst ratings sit in fans, coils or controls, the unit is a retrofit candidate. Where the casing question is close, the deeper review in <a href="<?= url('guides/reusing-existing-casing') ?>">reusing an existing casing</a> helps. For units that are simply old but not yet failing, compare against typical service lives in <a href="<?= url('guides/ahu-life-expectancy') ?>">AHU life expectancy</a>.</p>
<p class="note">Record the unit's nameplate data, original drawings and any balance reports alongside the ratings. Future assessments are far more useful when they can be compared with a baseline.</p>
<?php guide_end([
    ['What should an AHU condition assessment include?', 'It should rate the casing, base, floor, drain pans, insulation, coils, fans, motors, drives, dampers, filters and controls on a consistent scale with photos as evidence. The result should state which parts are repairable and whether the casing can be kept.'],
    ['How do I know if an air handler casing is worth keeping?', 'A casing with a sound base frame, intact floor, dry insulation and panels that still seal is usually worth keeping. Widespread corrosion, perforated floors or wet insulation throughout generally point to replacement.'],
    ['Who should perform an AHU condition assessment?', 'An experienced mechanical engineer, service contractor or manufacturer representative familiar with air handler construction is typical. Testing for hazardous materials should be done separately by a qualified environmental consultant.'],
]);
