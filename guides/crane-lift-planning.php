<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('crane-lift-planning'); ?>
<p class="lede">A sound crane lift plan for air handler sections starts with certified section weights and centre of gravity, then works outward to pick points, spreader bars, rigging gear and finally the crane size at the required radius. Plan from the load to the crane, never the other way around.</p>

<h2>Step 1: Collect weights, dimensions and centre of gravity</h2>
<p>Ask the manufacturer for a rigging drawing for every shipping section. It should list the shipping weight, the overall dimensions, the lifting lug or base rail pick locations, and the centre of gravity (CG) in all three axes. Air handler sections are rarely balanced: a fan section with motors at one end, or a coil section with heavy copper coils on one side, can have a CG well off the geometric centre.</p>
<ol>
<li>Record each section's weight from the rigging drawing, not from the submittal's total unit weight divided by the number of sections.</li>
<li>Add the weight of anything shipped loose that will be lifted with the section, such as dampers or hoods.</li>
<li>Confirm whether coils were shipped wet or dry. Water left in a coil after factory testing adds weight and can freeze.</li>
<li>Mark the CG on the section itself with paint or tape so the rigging crew can see it.</li>
</ol>

<h2>Step 2: Choose pick points and the rigging arrangement</h2>
<p>Lift only from the points the manufacturer designates: lifting lugs on the base frame, or holes in the base rails for lifting pipes or shackles. Never lift from the roof, from panel fasteners, or by wrapping slings around the casing. Casing panels are not structural for lifting and will dent or rack.</p>
<ol>
<li>Use a spreader bar or lifting frame so slings hang vertically, or close to it, from the pick points. Angled slings squeeze the casing sides inward and can crush panels or pop door frames.</li>
<li>Size the spreader so its length matches the distance between pick points across the unit width. For long sections, a lifting frame with four drops is better than a single bar.</li>
<li>Where the CG is offset, use slings of different lengths, or adjustable chain hoists in the drops, so the section hangs level.</li>
<li>Pad any contact between slings and the casing edges.</li>
</ol>
<p class="warn">If a section tilts more than a few degrees when it first leaves the ground, set it back down and adjust the rigging. A tilted section loads one pair of lugs far more than intended.</p>

<h2>Step 3: Calculate the total hook load</h2>
<p>The crane lifts more than the air handler. Build the hook load from every item below the boom tip:</p>
<p class="formula">Hook load = section weight + spreader bar or lifting frame + slings and shackles + hook block + load line weight (per crane manufacturer)</p>
<p>Example: a 14,200 lb fan section, a 1,100 lb spreader frame, 350 lb of slings and shackles, and a 900 lb hook block give a hook load of 16,550 lb (about 7,510 kg). That is the number to check against the crane load chart, not 14,200 lb.</p>
<p>Many lift planners treat a lift as critical when the hook load exceeds a set percentage of the crane's rated capacity at the working radius, when the load is lifted over occupied space, or when two cranes share a load. Your company or the crane supplier will have its own threshold; follow it and prepare the extra documentation a critical lift requires.</p>

<h2>Step 4: Determine radius and size the crane</h2>
<ol>
<li>On a site plan, locate where the crane can set up, considering outrigger footprint, ground bearing capacity, underground utilities and street access.</li>
<li>Measure the horizontal radius from the crane's centre of rotation to the set point of the farthest section, and to the truck's position for pick-up.</li>
<li>Check the boom length needed to clear the roof parapet, existing equipment and any overhead obstructions at that radius.</li>
<li>Read the load chart for that boom length and radius, with the counterweight and outrigger configuration you intend to use. The rated capacity must exceed the hook load with the margin required by your lift plan.</li>
<li>Have the crane supplier confirm the selection and outrigger pad loads. Ground bearing failure under an outrigger is a major cause of crane incidents.</li>
</ol>
<p class="note">The heaviest section is not always the controlling pick. A lighter section placed at the far end of a long unit, at a larger radius, often sets the crane size.</p>

<h2>Step 5: Plan the sequence and the set</h2>
<ol>
<li>Order sections so each one is set against an already-placed neighbour, normally working from one end. Check the drawings for which section carries the alignment pins or the factory joining hardware.</li>
<li>Have the curb, dunnage or pad checked for level and dimension before the crane arrives. See <a href="<?= url('guides/roof-curb-installation') ?>">roof curb installation</a> for curb preparation.</li>
<li>Use tag lines on two corners to control rotation. Nobody stands under a suspended load or between the load and a fixed object.</li>
<li>Lower each section slowly onto the support, then leave slack in the rigging until it is aligned and fully bearing.</li>
<li>Remove rigging only after the section is stable. Joining the sections comes next; see <a href="<?= url('guides/field-joining-split-sections') ?>">how to join AHU shipping sections</a>.</li>
</ol>

<h2>Step 6: Document and brief</h2>
<p>Write the plan down even for routine picks: section list with weights, rigging gear with rated capacities, crane configuration, radius, load chart reference, site layout, exclusion zones, weather limits and the name of the lift supervisor. Hold a pre-lift briefing with the operator, signal person, riggers and the mechanical contractor's foreman. Check the wind forecast; an air handler section has a large surface area, and the crane manufacturer's wind limits apply to the load as well as the boom.</p>
<p>If the site does not suit a crane at all, compare the alternatives in <a href="<?= url('guides/rigging-methods-crane-skidding-helicopter') ?>">rigging methods: crane vs skidding vs helicopter</a>. Weights and CG locations for every shipping section of a Custom Air Equipment unit are available on request through the <a href="<?= url('contact') ?>">contact page</a> while the lift is being planned.</p>
<?php guide_end([
    ['Can I lift an air handler section with slings around the casing?', 'No. Casing panels are not designed to carry lifting loads, and choker slings will crush panels and rack the frame. Lift only from the manufacturer\'s designated lugs or base rail points, using a spreader bar so the slings hang vertically.'],
    ['Why does the crane need to be bigger than the section weight suggests?', 'Crane capacity falls quickly as the working radius increases, and the hook load includes the spreader, slings, shackles and hook block. A modest section set far from the crane can need a much larger machine.'],
    ['What is a spreader bar for when lifting an AHU?', 'A spreader bar holds the slings apart so they pull straight up on the lifting points. Without it, angled slings squeeze the sides of the section together and can damage panels, doors and internal components.'],
]);
