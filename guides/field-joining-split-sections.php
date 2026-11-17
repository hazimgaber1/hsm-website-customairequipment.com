<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('field-joining-split-sections'); ?>
<p class="lede">Join shipping sections by setting them on a level support, drawing them together with the factory joining hardware until the split gasket is evenly compressed, sealing the seams inside and out, and then reconnecting wiring, drain lines and any internal components that cross the split. Do it in that order.</p>

<h2>What you need before starting</h2>
<p>Read the manufacturer's installation manual for the specific unit; joining details differ between casing designs. Collect the loose-parts kit, which normally contains splice plates or joining brackets, bolts, gasket, sealant and any roof cap strips for outdoor units. Have on hand a 4 ft level, a laser or string line, come-alongs or ratchet straps, pry bars with protective pads, a drill, and torque wrenches for the specified bolt sizes.</p>
<p>The support must be ready first. Curbs, pads or steel dunnage need to be flat and level along the full length of the unit; joining sections on an uneven base pulls the split apart at one corner. Acceptable flatness and level are discussed in <a href="<?= url('guides/multi-section-leveling-tolerances') ?>">leveling tolerances for multi-section AHUs</a>.</p>

<h2>Step-by-step: mechanical joining</h2>
<ol>
<li><strong>Clean the split faces.</strong> Remove shipping covers, protective film, dirt and any old adhesive. Check the faces for dents that will stop the frames from meeting.</li>
<li><strong>Apply the gasket.</strong> Install the split gasket on one face only, continuous around the perimeter, with butt joints at corners rather than overlaps. Keep it clear of bolt holes.</li>
<li><strong>Set the first section.</strong> Place and level it fully. Shim under base rails as required, with shims spaced as the manual directs.</li>
<li><strong>Set the next section close but not touching.</strong> Leave a gap of a few inches so the gasket is not dragged during placement.</li>
<li><strong>Align.</strong> Match the base rails first, then the roof line and side panels. Use alignment pins or drift pins where provided. Check the internal floor for a flush joint.</li>
<li><strong>Draw the sections together.</strong> Pull evenly with come-alongs on both sides of the base. Never pull from panels or the roof. Close the gap evenly top to bottom and side to side.</li>
<li><strong>Bolt the splice.</strong> Install base rail splice plates first, then side and roof joining hardware. Tighten in a cross pattern and torque to the manual's values. The gasket should be compressed evenly with no gaps and no extrusion.</li>
<li><strong>Check doors.</strong> Open and close every door near the split. A binding door often means the sections are not level or the joint is pulled tighter on one side.</li>
</ol>
<p class="warn">Do not use the joining bolts to pull a gap of more than the gasket thickness closed. Draw the sections together with straps first; bolts are for final compression, and over-pulling strips threads or distorts frames.</p>

<h2>Sealing the joint</h2>
<ol>
<li>On the inside, apply the specified sealant to the floor seam and any seam where panels meet across the split. Drainable floors need a continuous, watertight floor seal so wash water and condensate cannot reach the base insulation.</li>
<li>On the outside of outdoor units, install the roof splice cap or standing seam cap and seal it as shown. Run roof sealant along the cap edges so water sheds away from the joint.</li>
<li>Seal any gap at the side wall joint on outdoor units with exterior-grade sealant compatible with the casing finish.</li>
<li>Inspect from inside with the lights off and a flashlight outside, or vice versa. Light leaks show where gasket or sealant is missing.</li>
</ol>

<h2>Reconnecting what crosses the split</h2>
<p>Many components either straddle a split or connect from one section to another. Typical items are:</p>
<ul>
<li><strong>Electrical and controls harnesses.</strong> Plug or terminate factory harnesses at the junction boxes provided, matching the labels on each end. Interconnection approach, labelling and inspection are explained in <a href="<?= url('guides/field-wiring-between-sections') ?>">field wiring between shipping sections</a>.</li>
<li><strong>Pneumatic or sensing tubing</strong> for filter gauges, airflow stations and pressure transmitters. Reconnect with the correct fittings and confirm the high and low sides are not swapped.</li>
<li><strong>Drain lines</strong> where an intermediate drain pan drains across a split.</li>
<li><strong>Shipped-loose parts</strong> such as damper linkages, actuators or discharge plenums that were removed for shipping.</li>
<li><strong>Lighting and convenience outlet circuits</strong> serving multiple sections.</li>
</ul>

<h2>Final checks before moving on</h2>
<ul>
<li>Re-check level across the joined unit and along its length.</li>
<li>Confirm all splice bolts are torqued and marked.</li>
<li>Walk the inside and confirm no tools, fasteners or debris remain, particularly in fan inlets.</li>
<li>Remove fan shipping restraints only when the manual says to, typically after the unit is set and before isolator adjustment.</li>
<li>Record the work on the installation checklist with photos of each split before sealing is covered.</li>
</ul>
<p class="note">A unit that will be pressure tested on site needs every split joint completed and cured first. Field leak testing procedures are covered in <a href="<?= url('guides/field-leakage-testing') ?>">how to perform field casing leakage testing</a>.</p>
<p>Panelized units assembled entirely on site follow a different, more extensive quality process than the split joining described here; that is covered under knockdown assembly in the retrofit guides.</p>
<?php guide_end([
    ['Can I reuse the split gasket if I have to separate sections again?', 'Usually not. Once compressed, most closed-cell gaskets will not reseal reliably. Ask the manufacturer for replacement gasket and replace it whenever a split is reopened.'],
    ['Why will the sections not close evenly at the split?', 'The most common cause is an uneven support, so one section sits higher or is twisted relative to the other. Re-level both sections with shims before drawing them together rather than forcing the gap closed with bolts.'],
    ['Do I need to seal the inside and outside of the split?', 'Usually yes. The gasket provides the main air seal, interior sealant keeps floors watertight, and exterior sealant and roof caps keep weather out of outdoor units. Follow the manual for which sealants go where.'],
]);
