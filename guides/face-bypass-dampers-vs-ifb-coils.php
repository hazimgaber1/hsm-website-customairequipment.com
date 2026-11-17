<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('face-bypass-dampers-vs-ifb-coils'); ?>
<p class="lede">Both arrangements control heating by diverting air around a coil that stays at full fluid flow. Separate face and bypass dampers do it with a bypass duct or opening beside a conventional coil; an integral face-and-bypass (IFB) coil builds alternating heating channels and bypass channels into one assembly with its own internal dampers. IFB coils mix better and protect the coil more reliably; separate dampers cost less and fit more easily in some layouts.</p>

<h2>How separate face and bypass dampers work</h2>
<p>A conventional heating coil fills part of the unit cross-section. Next to it, above it or below it, an open bypass passage lets air go around the coil. Face dampers directly on the coil and bypass dampers in the passage are linked so that as one closes the other opens. The coil runs with its valve fully open (or nearly so) in cold weather, and the leaving air temperature is set by the proportion of air passing through the coil versus the bypass.</p>
<p>The air streams rejoin downstream: one hot, one at entering temperature. Without enough distance or a mixing device, the result is a stratified airstream.</p>

<h2>How an IFB coil works</h2>
<p>An IFB coil is a factory assembly in which the coil is divided into many narrow heating sections separated by bypass channels of similar width. Dampers, usually on the leaving side, open and close the heating and bypass channels together. Because the hot and bypassed streams are interleaved across the whole face, they mix within a short distance. IFB coils are made with steam distributing tubes or with hot water or glycol tubes, and are often oriented with vertical tubes in severe outdoor air duty.</p>

<h2>Comparison</h2>
<table>
<thead><tr><th>Characteristic</th><th>Separate face and bypass dampers</th><th>Integral face-and-bypass coil</th></tr></thead>
<tbody>
<tr><td>Mixing of heated and bypassed air</td><td>Poor without mixing length or blenders</td><td>Good; interleaved channels mix quickly</td></tr>
<tr><td>Risk of cold air reaching downstream coils in bypass</td><td>High; bypass stream is at entering temperature in one zone</td><td>Lower; streams are distributed across the face</td></tr>
<tr><td>Space required</td><td>Coil plus bypass area; mixing distance downstream</td><td>Larger coil assembly, but short mixing distance</td></tr>
<tr><td>Heat pickup by "closed" face</td><td>Face dampers leak; coil still heats some air</td><td>Some heat pickup through closed channels, published by manufacturer</td></tr>
<tr><td>Coil protection at full fluid flow</td><td>Good if valve kept open in cold weather</td><td>Good; designed for continuous full flow</td></tr>
<tr><td>First cost</td><td>Lower</td><td>Higher</td></tr>
<tr><td>Maintenance</td><td>Two damper sets and linkage</td><td>Integral dampers and linkage; one assembly</td></tr>
<tr><td>Typical applications</td><td>Mixed-air units, moderate climates, retrofits with available bypass space</td><td>100% outdoor air, makeup air, very cold climates, steam heat</td></tr>
</tbody>
</table>

<h2>Mixing and stratification</h2>
<p>The biggest practical difference is mixing. With separate dampers in a cold climate, a bypass stream of −20°F (−29°C) air and a face stream at 90°F (32°C) may average 55°F (13°C) on paper but arrive at the next component as two layers. A downstream chilled water coil, filter or humidifier sees the cold layer directly. Low-limit thermostats trip; coils freeze; humidifiers fail to absorb. Separate dampers therefore need either a long, straight mixing length or a static air mixer, and both add cost, length or pressure drop.</p>
<p>IFB coils address this by making each stream narrow. Mixing is not instant, but a short distance downstream is typically sufficient. Manufacturers publish recommended distances and expected temperature variation.</p>

<h2>Leakage and temperature control at the extremes</h2>
<p>No damper seals perfectly. With face dampers closed on a separate arrangement, some air still passes through the coil and picks up heat. In mild weather that can mean overheating even with the coil at minimum. Designers deal with this by modulating the valve at mild outdoor temperatures and switching to damper control below a set outdoor temperature.</p>
<p>IFB coils also show heat pickup with face channels closed, because the bypass channels sit next to hot tubes. Manufacturers publish the temperature rise at full bypass, and the control strategy should account for it in the same way. When the bypass position still delivers more heat than needed, the valve takes over control.</p>

<h2>Freeze protection perspective</h2>
<p>Both arrangements protect the coil the same basic way: the fluid keeps flowing at full rate regardless of the heating demand, so tubes stay warm. That principle is one of several in <a href="<?= url('guides/coil-freeze-protection-methods') ?>">coil freeze protection methods</a>. IFB coils add a second advantage by reducing the chance that a downstream coil sees the bypassed cold air. For steam, IFB coils are usually built with distributing tubes; the differences between distributing and standard steam coils are in <a href="<?= url('guides/steam-coil-distributing-vs-standard') ?>">steam distributing vs standard coils</a>.</p>

<h2>Pressure drop and fan energy</h2>
<p>At full bypass, air passes mostly through the open bypass and pressure drop is low. At full face, air passes through the coil and dampers. Both arrangements change pressure drop with position, which affects airflow if the fan is not controlled to compensate. In IFB coils, the published pressure drop usually covers both positions and in-between. With separate dampers, the face damper, coil and bypass damper should be selected so that full face and full bypass give similar resistance; otherwise airflow swings as the dampers move.</p>

<h2>Choosing</h2>
<ul>
<li>Choose <strong>separate face and bypass dampers</strong> when entering air is moderate (mixed air rarely below freezing), when space for a bypass already exists, or when budget is tight and adequate mixing distance is available.</li>
<li>Choose an <strong>IFB coil</strong> for 100% outdoor air in cold climates, for steam preheat, where downstream components would be at risk from stratified air, and where unit length is limited.</li>
</ul>
<p>Either arrangement is easier to detail in a custom unit than to add later. Units with severe outdoor air duty, such as makeup air for industrial buildings in northern climates, often benefit from a <a href="<?= url('products/custom-air-handlers') ?>">custom air handler</a> laid out around the IFB coil from the start.</p>
<?php guide_end([
    ['What is an IFB coil?', 'An integral face-and-bypass coil is a heating coil assembly with alternating heating channels and bypass channels and built-in dampers. Fluid flows at full rate while dampers control how much air passes over the hot tubes, so leaving temperature is controlled without throttling the fluid.'],
    ['Why use an IFB coil instead of face and bypass dampers?', 'IFB coils mix heated and bypassed air within a short distance because the streams are interleaved across the face. Separate dampers create two large streams that stratify, which can let freezing air reach downstream coils and equipment.'],
    ['Do face and bypass dampers prevent coil freezing?', 'They help by letting the coil run at full fluid flow while dampers control temperature. They do not protect downstream components from the cold bypassed air, which needs adequate mixing before reaching other coils.'],
]);
