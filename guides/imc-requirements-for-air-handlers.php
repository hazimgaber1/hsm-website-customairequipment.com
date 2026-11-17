<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('imc-requirements-for-air-handlers'); ?>
<p class="lede">The International Mechanical Code shapes an air handler installation in four places: the unit must be listed and installed per that listing, it must be reachable and serviceable, its condensate must be collected and disposed of properly, and its location must respect rules for attics, roofs, plenums and outdoor exposure.</p>

<h2>How the IMC applies to AHUs</h2>
<p>The IMC is a model code that most US states and many cities adopt, often with amendments. It treats an air handler as an appliance or as equipment within an HVAC system. Most of the provisions that affect AHUs sit in the general regulations chapter (listing, access, condensate, location, protection), with ventilation in Chapter 4 and duct systems in Chapter 6. The adopted edition and local amendments govern; the summary below follows the common structure but does not substitute for reading the adopted text.</p>

<h2>Listing and labeling</h2>
<p>The IMC requires appliances to be listed and labeled where the code calls for it, and to be installed per the manufacturer's instructions and the conditions of the listing. For an air handler this has practical consequences:</p>
<ul>
<li>The unit should carry a label from an approved agency, typically to UL 1995.</li>
<li>Installation instructions are part of the listing. An inspector can ask for them, and clearance, support and wiring details in them are enforceable.</li>
<li>Electric duct heaters and heaters inside the unit must be listed for that use.</li>
<li>Field modifications that are not covered by the instructions can put the unit out of compliance.</li>
</ul>
<p>When a custom unit cannot be listed through the normal factory program, or has been modified, the path forward is a field evaluation, described in <a href="<?= url('guides/field-evaluation-unlisted-equipment') ?>">how field evaluation works</a>.</p>

<h2>Access and service space</h2>
<p>The IMC requires appliances to be accessible for inspection, service, repair and replacement without removing permanent construction or other equipment, and to have working space in front of the control side. The specific dimensions depend on location:</p>
<table>
<thead><tr><th>Location</th><th>Typical IMC concern</th></tr></thead>
<tbody>
<tr><td>Mechanical rooms</td><td>Level working space at the control side and a door or opening large enough to remove the largest component</td></tr>
<tr><td>Attics</td><td>Passageway, solid flooring to the unit, and an access opening sized to remove the appliance</td></tr>
<tr><td>Under floors and crawl spaces</td><td>Passageway and opening dimensions similar to attics</td></tr>
<tr><td>Roofs</td><td>Permanent access (ladder or stairs) above a certain height, guards near roof edges, and a level service area</td></tr>
<tr><td>Above ceilings</td><td>Access panels sized for the unit, and service from a safe platform</td></tr>
</tbody>
</table>
<p>The IMC dimension rules are minimums. Large AHUs need far more room for coil pull, fan removal and filter changes than the code requires. Electrical working space in front of panels and disconnects is set separately by the NEC, covered in <a href="<?= url('guides/electrical-working-clearances') ?>">electrical working clearances</a>.</p>
<p class="note">Rooftop units near the roof edge often trigger the IMC requirement for guards. Plan the curb location with the guard and access route in mind rather than adding a railing after inspection.</p>

<h2>Condensate disposal</h2>
<p>Cooling coils produce condensate, and the IMC regulates how it is collected and where it goes:</p>
<ol>
<li><strong>Primary drain.</strong> Condensate must drain to an approved place of disposal, not onto a roof walking surface, sidewalk or street, and not directly to a sanitary sewer without the required indirect connection.</li>
<li><strong>Pipe sizing and slope.</strong> Drain lines must meet minimum sizes based on equipment capacity and be sloped, commonly at not less than 1/8 inch per foot (1%).</li>
<li><strong>Secondary protection.</strong> Where condensate overflow could damage building construction, a secondary drain, an auxiliary pan with its own drain, or a water-level device that shuts down the equipment is required.</li>
<li><strong>Traps.</strong> Drains must be trapped as required by the equipment manufacturer. Draw-through coils under negative pressure need trap depth matched to fan static pressure.</li>
<li><strong>Materials.</strong> Drain piping materials must be approved for the use.</li>
</ol>
<p>Trap sizing for negative and positive pressure drain pans is worked in detail in <a href="<?= url('guides/condensate-trap-and-pad-height') ?>">condensate trap and pad height</a>.</p>

<h2>Location and protection rules</h2>
<h3>Outdoor units</h3>
<p>Equipment installed outdoors must be listed for outdoor use or protected from the weather. Units must be supported on a level, secure base, elevated above grade where required, and anchored against wind. In flood hazard areas, the IMC requires equipment to be elevated above the design flood elevation or otherwise protected.</p>
<h3>Hazardous locations</h3>
<p>Appliances with ignition sources are restricted in rooms where flammable vapours can be present, such as repair garages, unless elevated or listed for that location. Air handlers with electric heat or certain motors fall under these rules.</p>
<h3>Plenums</h3>
<p>Where the space around an air handler is used as a return plenum, all materials in that plenum must meet plenum flame and smoke limits. This matters for wiring, piping insulation and the unit's own exterior materials when it sits in a ceiling return.</p>
<h3>Clearances to combustibles</h3>
<p>Units with heaters must maintain the clearances stated on the label. Reduced clearances are only permitted by approved methods.</p>

<h2>Other IMC provisions that touch the AHU</h2>
<ul>
<li><strong>Outdoor air intakes</strong> must be separated from exhaust outlets, vents and other contaminant sources by minimum distances, and protected with screens.</li>
<li><strong>Smoke detectors</strong> for return air systems above a threshold airflow are required to shut down the unit, mirroring NFPA 90A.</li>
<li><strong>Duct construction and insulation</strong> rules apply from the unit connections onward.</li>
<li><strong>Refrigerant systems</strong> serving DX coils must follow the IMC refrigeration chapter and the referenced safety standard.</li>
</ul>
<p>Ventilation rate requirements in Chapter 4 differ from ASHRAE 62.1 in some respects; that comparison is a separate topic.</p>
<?php guide_end([
    ['Does the IMC require air handlers to be listed?', 'The IMC requires appliances to be listed and labeled where the code calls for it and to be installed according to the listing and the manufacturer\'s instructions. In practice inspectors expect factory-built air handlers to carry a listing label.'],
    ['What does the IMC require for condensate from air handlers?', 'Condensate must drain to an approved place of disposal through properly sized and sloped piping. Where overflow could damage construction, a secondary drain, auxiliary pan or water-level shutoff switch is required.'],
    ['How much service space does the IMC require around an AHU?', 'The IMC sets minimum access and working space depending on location, such as attics, roofs or mechanical rooms. Large air handlers usually need more room than the code minimum for coil and fan removal.'],
    ['Are IMC requirements the same in every state?', 'No. States and cities adopt different editions and often amend them. Always check the adopted edition and local amendments for the project location.'],
]);
