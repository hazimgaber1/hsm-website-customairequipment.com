<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('drain-pan-design-ashrae-62-1'); ?>
<p class="lede">ASHRAE 62.1 requires condensate drain pans to be sloped toward the outlet so water does not stand, to have the outlet at the lowest point, to be large enough to catch water carried off the coil, and to be made of corrosion-resistant material that can be inspected and cleaned. A pan meeting those rules drains completely after every cooling cycle, which removes the conditions for microbial growth.</p>

<h2>Why standing water is the enemy</h2>
<p>A flat pan with an outlet above its floor holds a shallow pool after every cooling cycle. That water collects dust from the airstream and grows biofilm and mould, which can then be carried downstream into supply air. Odour complaints, stained ceilings and health concerns follow. The provisions in ASHRAE 62.1 for drain pans exist to make sure condensate leaves the pan completely. Verify the specific requirements in the edition adopted in your jurisdiction, since wording and details have been revised over time.</p>

<h2>Slope</h2>
<p>The pan floor must slope toward the drain outlet in a way that prevents water from standing. ASHRAE 62.1 has long specified a minimum slope of 1/8 in per foot (about 10 mm per metre) from the horizontal; check the edition adopted in your jurisdiction. Good practice beyond the minimum:</p>
<ul>
<li><strong>Slope in two planes.</strong> A pan sloped only along its length toward an end outlet can still hold water in a trough if it is not also sloped toward its centreline or outlet side. Double-sloped pans, falling both lengthwise and crosswise to the outlet, drain most reliably.</li>
<li><strong>Allow for installation tolerance.</strong> A unit set slightly out of level can flatten the effective slope. Steeper factory slope gives margin.</li>
<li><strong>Keep the slope continuous.</strong> Coil supports, stiffeners or welds that create dams in the pan defeat the slope.</li>
</ul>

<h2>Outlet location and size</h2>
<ul>
<li>The outlet must be at the lowest point of the pan, flush with the pan floor so no water is held below its invert.</li>
<li>Outlet size should be adequate for the maximum condensate flow, and the drain line should not be smaller than the outlet.</li>
<li>Outlets are usually on the side of the unit where the trap can be accessed, and on large pans more than one outlet may be used.</li>
<li>A trap on each outlet must be designed for the static pressure in the section, so the pan drains during operation. A trap that is too shallow on a negative-pressure section holds water in the pan while the fan runs, which then overflows. Trap and pad height calculations are in <a href="<?= url('guides/condensate-trap-and-pad-height') ?>">condensate traps and pad height</a>.</li>
</ul>

<h2>Pan size and extent</h2>
<p>The pan must extend far enough under and downstream of the coil to catch condensate that drips from the coil and droplets carried off the leaving face by the airstream. ASHRAE 62.1 sets a minimum downstream extent tied to the coil's dimensions; check the edition in force for the exact rule. Factors that increase the extent needed:</p>
<ul>
<li>Higher coil face velocity, which increases carryover distance. The face velocity limit itself is a coil topic; see <a href="<?= url('guides/cooling-coil-face-velocity-moisture-carryover') ?>">face velocity and moisture carryover</a>.</li>
<li>Tall coils, where water running down the leaving face reaches the pan at a greater distance from the coil.</li>
<li>Coil fin coatings or fin types that shed water less predictably.</li>
</ul>
<p>The pan must also cover the full width of the coil and any components that drip, such as headers and return bends. Pans for multiple stacked coils use intermediate pans, which are covered in the coils category under <a href="<?= url('guides/stacked-coils-intermediate-drain-pans') ?>">stacked coils and intermediate drain pans</a>.</p>

<h2>Depth</h2>
<p>Pan depth must contain the water present during operation without overflowing. That includes the condensate film on the pan, any water held back by the trap during operation, and splashing. The standard requires the pan to be designed so that it does not overflow under normal conditions; the practical depth comes from the trap design and the drain flow. Pans of about 2 in (50 mm) deep or more are common, with deeper pans on large or high-pressure units.</p>
<p class="note">A deep pan is not a substitute for good trapping and slope. A deep pan that holds water is still a reservoir.</p>

<h2>Material and construction</h2>
<ul>
<li><strong>Corrosion-resistant material:</strong> stainless steel is the common choice. Galvanized pans are consumed by standing water and acidic condensate over time. Some units use coated or polymer pans.</li>
<li><strong>Double-wall, insulated pans:</strong> the pan floor carries cold condensate, so the underside must be insulated to prevent condensation on the bottom of the unit and on the base.</li>
<li><strong>Welded corners and seams</strong> so the pan holds water without relying on sealant.</li>
<li><strong>Coil supports</strong> that hold the coil above the pan floor so water can flow underneath, without blocking the slope.</li>
<li><strong>Removable coil supports or access</strong> so the pan can be cleaned beneath the coil.</li>
</ul>

<h2>Inspection and cleaning access</h2>
<p>ASHRAE 62.1 also requires access for inspecting and cleaning the pan. In practice this means an access door downstream of the coil, enough room to reach the full pan, and a pan surface that can be scrubbed. Access section locations are covered in the <a href="<?= url('guides/access-section-service-checklist') ?>">access section checklist</a>.</p>

<h2>Design checklist</h2>
<ol>
<li>Pan slopes toward the outlet in a way that leaves no standing water, at least at the minimum slope in the edition of ASHRAE 62.1 in force.</li>
<li>Outlet at the lowest point, flush with the pan floor.</li>
<li>Pan extends downstream far enough to meet the standard and suit the coil's face velocity and height.</li>
<li>Stainless or equivalent corrosion-resistant material, welded seams.</li>
<li>Pan insulated underneath; thermal separation from base.</li>
<li>Trap designed for the section's static pressure.</li>
<li>Access for inspection and cleaning.</li>
</ol>
<?php guide_end([
    ['What slope does ASHRAE 62.1 require for a drain pan?', 'ASHRAE 62.1 has long required drain pans to slope at least 1/8 in per foot from the horizontal toward the outlet. Confirm the requirement in the edition adopted in your jurisdiction, and consider sloping in two directions for reliable drainage.'],
    ['Why does my drain pan hold water?', 'Common causes are an outlet set above the pan floor, a flat or poorly sloped pan, a unit installed out of level, or a trap that is too shallow for the section pressure so water is held back during operation.'],
    ['Should drain pans be stainless steel?', 'Stainless steel is the most common choice because condensate stands in the pan and can be slightly acidic. Galvanized pans corrode over time. Whatever the material, it must resist corrosion and be cleanable.'],
]);
