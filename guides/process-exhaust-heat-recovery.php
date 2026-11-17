<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('process-exhaust-heat-recovery'); ?>
<p class="lede">Industrial exhaust often carries far more recoverable heat than building exhaust, but it also carries dust, oil mist, solvents, moisture or corrosive gases that would destroy a standard HVAC wheel. Successful process recovery matches the exchanger's materials, geometry and cleaning method to what is in the air, and usually favours separated-stream devices such as runaround loops, heat pipes and robust plate exchangers.</p>

<h2>What makes process exhaust different</h2>
<ul>
<li><strong>Temperature.</strong> Ovens, dryers, kilns and furnaces exhaust air from well above 150 F to several hundred degrees. Exchangers must tolerate the heat, and the temperature difference makes recovery valuable.</li>
<li><strong>Particulate.</strong> Dust, lint, fibres and sticky particles foul fins and flutes quickly.</li>
<li><strong>Condensables.</strong> Oil mists, plasticizers, resins and tars condense when exhaust cools, coating surfaces with films that are hard to remove and can be a fire hazard.</li>
<li><strong>Corrosives.</strong> Acid gases, chlorides and moisture combine to attack aluminum and copper, especially where condensation occurs.</li>
<li><strong>Hazard.</strong> Flammable vapours, toxic gases and combustible dust bring classification, explosion protection and leakage requirements.</li>
<li><strong>Irregular operation.</strong> Batch processes produce intermittent exhaust, so recovery may not coincide with heating demand.</li>
</ul>

<h2>Exchanger types that suit process duty</h2>
<h3>Runaround coil loops</h3>
<p>The exhaust coil can be built from materials and fin spacing chosen for the exhaust, while the supply coil is a normal HVAC coil. Wide fin spacing, often 4 to 6 fins per inch, resists fouling. Coils can be stainless steel or coated, and they can be washed in place. Total separation means no contamination of the supply. The heat can also be delivered somewhere other than the supply air, such as process makeup water.</p>
<h3>Heat pipes</h3>
<p>Heat pipes with wide fin spacing and stainless or coated construction handle hot, dirty exhaust well. The working fluid is chosen for the temperature range. Rows can be accessed for cleaning, and there are no moving parts.</p>
<h3>Plate exchangers</h3>
<p>Wide-gap plate exchangers in stainless steel or glass-coated steel handle high temperatures and corrosive gases. Channels can be designed for washing with spray nozzles. Glass tube exchangers are another variant used for acidic exhaust.</p>
<h3>Rotary wheels</h3>
<p>Standard HVAC wheels are rarely suitable. Carryover moves contaminants to the supply, and fine flutes foul. Some high-temperature or specialized wheels exist for specific process duty, but they require careful evaluation of contamination risk.</p>
<p>For a general comparison of these devices in clean HVAC service, see <a href="<?= url('guides/air-to-air-recovery-technologies-compared') ?>">wheels vs plates vs runaround loops vs heat pipes</a>.</p>

<h2>Managing fouling</h2>
<ol>
<li><strong>Characterize the exhaust.</strong> Get data on particulate concentration, size, and any condensable or sticky content. Sample if necessary.</li>
<li><strong>Pre-clean where it pays.</strong> Cyclones, mist eliminators or filters ahead of the exchanger reduce fouling, but each adds pressure drop. Compare cleaning frequency without pre-cleaning against the fan penalty of pre-cleaning.</li>
<li><strong>Use open geometry.</strong> Wide fin spacing, plain rather than enhanced fins, and straight channels.</li>
<li><strong>Build in cleaning.</strong> Wash nozzles, removable sections, access on both faces, and drains sized for wash water.</li>
<li><strong>Monitor pressure drop.</strong> Rising drop at constant flow tells you when cleaning is needed.</li>
</ol>
<p class="warn">Grease and oil deposits on exchanger surfaces in hot exhaust can ignite. Treat exchangers in such exhaust as part of the fire risk assessment, and follow the applicable fire code and insurer requirements for cleaning frequency and protection.</p>

<h2>Managing corrosion</h2>
<p>Corrosion is worst where the exhaust cools below its acid or water dew point. Two strategies apply:</p>
<ul>
<li><strong>Stay above the dew point.</strong> Control recovery so the exhaust leaving the exchanger stays above its acid dew point. This limits recovery but protects ordinary materials.</li>
<li><strong>Design for condensation.</strong> Accept condensing operation and use materials that resist it: stainless steel grades suited to the chemistry, glass, fluoropolymer coatings or plastics, with drains for acidic condensate.</li>
</ul>
<p>Coating choice for supply-side coils and casings in corrosive plants is covered in <a href="<?= url('guides/coil-coatings-corrosion-protection') ?>">coil coatings and corrosion protection</a>.</p>

<h2>Matching recovery to demand</h2>
<p>A process may exhaust heat on its own schedule, while the building needs heat only in winter. Useful sinks for recovered heat include:</p>
<ul>
<li>Makeup air for the same process area, which is often a large and continuous load.</li>
<li>Combustion air preheat for the process burners.</li>
<li>Process water or wash water heating through a glycol loop.</li>
<li>Space heating of adjacent areas in winter.</li>
</ul>
<p>A runaround or glycol loop can serve several sinks with a single exhaust coil, which helps match intermittent supply and demand. The makeup air load itself can be estimated with <a href="<?= url('guides/industrial-makeup-air-calculation') ?>">the industrial makeup air calculation</a>.</p>

<h2>Safety and code items</h2>
<ul>
<li>Flammable vapour exhaust may require explosion-proof motors and spark-resistant construction for any fan in the stream.</li>
<li>Combustible dust exhaust triggers specific requirements under NFPA dust standards and local fire codes.</li>
<li>Toxic exhaust requires zero-leakage separation, which normally means a runaround loop.</li>
<li>Exchanger failure should not stop process exhaust. Provide a bypass so the process can continue if the exchanger blocks.</li>
</ul>

<h2>Estimating the opportunity</h2>
<p>For a quick screen, use 1.08 × CFM × ΔT × ε with the exhaust and supply temperatures at the exchanger, corrected for density if the exhaust is hot. For hot exhaust, convert to mass flow because actual cfm overstates the mass of hot air. If the screen looks attractive, characterize the exhaust before going further.</p>
<?php guide_end([
    ['Can an energy recovery wheel be used on industrial exhaust?', 'Rarely. Standard wheels foul quickly and carry contaminants into the supply. Runaround loops, heat pipes and wide-gap plate exchangers with suitable materials are the usual choices for dirty or corrosive process exhaust.'],
    ['How do you prevent fouling in process exhaust heat recovery?', 'Characterize the exhaust, use wide fin spacing or wide plate gaps, add pre-cleaning where justified, build in wash nozzles and access, and monitor pressure drop to schedule cleaning.'],
    ['How do you handle corrosive process exhaust in heat recovery?', 'Either keep the exhaust above its acid dew point by limiting recovery, or design for condensation with stainless steel, glass or fluoropolymer surfaces and acid-resistant drains.'],
]);
