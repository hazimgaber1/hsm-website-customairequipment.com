<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('humidifier-water-treatment-ro-di'); ?>
<p class="lede">Choose humidifier water treatment by humidifier type first, then by local water quality. Electrode steam units need conductive water and usually potable supply; resistance and steam-to-steam generators run best on softened or RO water; high-pressure atomizers need RO or DI to avoid mineral dust. DI and RO water are aggressive to some metals, so piping and wetted parts must suit them.</p>

<h2>Step 1: Get a water analysis</h2>
<ol>
<li>Obtain a recent analysis of the building's potable supply. Utilities publish annual reports, but a sample from the building is better.</li>
<li>Note total dissolved solids (TDS), hardness (calcium and magnesium), conductivity, silica, chlorides and pH.</li>
<li>Record seasonal variation if the source changes between surface water and wells.</li>
<li>Note whether the building already has softeners or an RO system for other uses.</li>
</ol>
<p>Hard water, in the range above roughly 120 mg/L as calcium carbonate, scales steam generators quickly. High silica forms hard scale that resists cleaning. High chlorides attack stainless steel under some conditions.</p>

<h2>Step 2: Match the humidifier type to water types</h2>
<table>
<thead><tr><th>Humidifier type</th><th>Potable</th><th>Softened</th><th>RO</th><th>DI</th></tr></thead>
<tbody>
<tr><td>Electrode steam</td><td>Required range of conductivity</td><td>Usually not recommended (foaming)</td><td>No: too little conductivity</td><td>No</td></tr>
<tr><td>Resistance element steam</td><td>Yes, with frequent cleaning</td><td>Yes, with foam and blowdown control</td><td>Yes, preferred</td><td>Yes, with compatible materials</td></tr>
<tr><td>Steam-to-steam generator</td><td>Yes, with cleaning</td><td>Yes</td><td>Yes, preferred</td><td>Yes, with compatible materials</td></tr>
<tr><td>Gas-fired steam generator</td><td>Yes, with cleaning</td><td>Yes</td><td>Yes</td><td>Per manufacturer</td></tr>
<tr><td>High-pressure atomizing</td><td>No: mineral dust</td><td>No: sodium dust</td><td>Yes</td><td>Yes</td></tr>
<tr><td>Evaporative media</td><td>Yes, with bleed-off</td><td>Per manufacturer</td><td>Yes, reduced bleed</td><td>Per manufacturer</td></tr>
<tr><td>Direct steam injection</td><td colspan="4">Water treatment is set by the boiler plant, not the humidifier</td></tr>
</tbody>
</table>
<p>Always confirm with the humidifier manufacturer; they publish allowable water quality ranges, and using water outside those ranges can void warranties.</p>

<h2>Step 3: Weigh softened water</h2>
<p>A softener exchanges calcium and magnesium for sodium. Sodium salts stay dissolved rather than forming hard scale, so tank cleaning becomes easier.</p>
<ul>
<li><strong>Benefit:</strong> much less hard scale in resistance and steam-to-steam generators.</li>
<li><strong>Drawback:</strong> dissolved solids are not removed. They concentrate in the tank and must be drained by blowdown, which wastes heated water.</li>
<li><strong>Drawback:</strong> concentrated sodium solutions can foam, causing water carryover into the steam line. Generators designed for softened water have foam detection and adjust blowdown.</li>
<li><strong>Not suitable</strong> for atomizers, where the sodium ends up as fine dust downstream.</li>
</ul>

<h2>Step 4: Weigh RO water</h2>
<p>Reverse osmosis removes most dissolved solids, commonly 90 to 99 percent.</p>
<ul>
<li><strong>Benefit:</strong> very little scale and blowdown in steam generators, longer element life, much less cleaning.</li>
<li><strong>Benefit:</strong> required for most atomizing systems to prevent mineral dust.</li>
<li><strong>Drawback:</strong> RO units reject part of the feed water as concentrate. Recovery ratios vary by system.</li>
<li><strong>Drawback:</strong> RO membranes need pretreatment (often softening or filtration and carbon to remove chlorine), periodic replacement and sanitization. A poorly maintained RO system becomes a source of microbial contamination.</li>
<li><strong>Drawback:</strong> RO water is low in minerals and mildly aggressive to copper and brass. Use stainless steel or suitable plastic piping downstream.</li>
</ul>

<h2>Step 5: Weigh DI water</h2>
<p>Deionization removes ions almost completely, producing water with very high resistivity.</p>
<ul>
<li><strong>Benefit:</strong> essentially no minerals. Used where any mineral residue is unacceptable, such as cleanrooms and some laboratories.</li>
<li><strong>Drawback:</strong> highly aggressive to copper, brass, galvanized steel and some stainless grades over time. Wetted materials must be suitable, typically specific stainless steel grades or plastics.</li>
<li><strong>Drawback:</strong> DI resin beds require regeneration or exchange service.</li>
<li><strong>Often</strong> RO followed by DI polishing is used to reduce resin consumption.</li>
</ul>
<p class="warn">Never feed RO or DI water through existing copper or brass piping to a humidifier. The water will leach metal and the piping will fail. Check the full route, including valves and fittings.</p>

<h2>Step 6: Decide on central or local treatment</h2>
<ol>
<li>For a single humidifier, a packaged RO unit near the AHU may be simplest.</li>
<li>For several humidifiers or atomizing systems, a central RO plant with a distribution loop can be more economical, but the loop must be designed to avoid stagnant water.</li>
<li>Where facility RO or DI water already exists, confirm that its capacity and quality can serve the humidifiers.</li>
</ol>

<h2>Step 7: Plan for hygiene</h2>
<p>Treated water is low in nutrients but not sterile. Storage tanks and dead legs grow biofilm. Include:</p>
<ul>
<li>Recirculation or regular flushing of RO distribution piping.</li>
<li>UV disinfection on supply lines to atomizing systems where the manufacturer recommends it.</li>
<li>Periodic sanitization of RO units per the manufacturer.</li>
<li>Integration with the building water management program.</li>
</ul>
<p>The hygiene checklist is in <a href="<?= url('guides/humidifier-hygiene-legionella-checklist') ?>">humidifier hygiene and Legionella risk checklist</a>. Draining condensate and blowdown, which this treatment choice affects but does not replace, is covered in <a href="<?= url('guides/steam-humidifier-condensate-drains') ?>">how to pipe steam humidifier condensate and drains</a>.</p>

<h2>Step 8: Compare life cycle cost</h2>
<ol>
<li>Estimate annual cleaning labour and parts for the humidifier on each water option. Scale on potable water can mean cylinder or tank cleaning many times a season.</li>
<li>Add blowdown water and the energy in it, which is higher on potable and softened water.</li>
<li>Add the treatment system's own costs: salt, membranes, resin service, sanitizing and RO reject water.</li>
<li>Choose the option with the lowest total over a realistic life, not just the lowest first cost.</li>
</ol>

<h2>Step 9: Document the choice</h2>
<p>Put the water type, required quality range and supply pressure in the humidifier schedule and specification. State the material requirements for piping downstream of RO or DI. The specification points that follow are in <a href="<?= url('guides/humidifier-specification') ?>">specifying humidifiers for custom AHUs</a>.</p>
<?php guide_end([
    ['Can I use RO water in an electrode steam humidifier?', 'No. Electrode humidifiers need conductive water to pass current between the electrodes. RO and DI water conduct too little. Use the potable water range the manufacturer specifies.'],
    ['Why do atomizing humidifiers need RO or DI water?', 'Atomizers evaporate every droplet in the airstream, leaving any dissolved minerals as fine dust downstream. RO or DI water removes those minerals so no dust forms.'],
    ['What piping should be used for DI water to a humidifier?', 'Use materials compatible with deionized water, typically suitable stainless steel grades or plastics. DI water attacks copper, brass and galvanized steel.'],
]);
