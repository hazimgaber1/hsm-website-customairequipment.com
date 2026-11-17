<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('runaround-coil-loop-design'); ?>
<p class="lede">Design a runaround loop by selecting matched exhaust and supply coils, setting the glycol flow so its heat capacity rate equals the air side's, sizing a pump for the coil and piping losses, and adding a three-way valve or pump speed control to prevent frost on the exhaust coil and overheating in mild weather.</p>

<h2>Step 1: Establish airflows and design conditions</h2>
<ol>
<li>List the supply outdoor airflow and the exhaust airflow at design. A loop does not need equal flows, but effectiveness is calculated against the smaller air capacity rate.</li>
<li>Record the winter and summer design temperatures for outdoor air and the exhaust air temperature and humidity entering the exhaust coil.</li>
<li>Note the exhaust contaminants. If the exhaust is corrosive or greasy, this drives coil materials and spacing later.</li>
<li>Confirm the elevation, since air density changes the 1.08 factor used below.</li>
</ol>

<h2>Step 2: Select the two coils</h2>
<ol>
<li>Size each coil face for about 400 to 500 fpm (2.0 to 2.5 m/s). Lower velocity raises effectiveness and cuts air pressure drop, which the loop needs because it already loses effectiveness through two heat transfer stages.</li>
<li>Select the same number of rows on both coils as a starting point. Six to ten rows is common for loops targeting 50 to 60 percent effectiveness.</li>
<li>Use fin spacing that suits each airstream. The outdoor air coil can be tighter; a dirty exhaust coil may need 8 fins per inch or fewer for cleanability.</li>
<li>Circuit both coils for counterflow piping (fluid enters at the air leaving side) to get the best temperature approach. Piping direction is detailed in <a href="<?= url('guides/coil-connection-counterflow-piping') ?>">coil connection and counterflow piping</a>.</li>
<li>Provide a drain pan under the exhaust coil. In winter it will condense moisture from warm exhaust air.</li>
</ol>

<h2>Step 3: Choose the glycol and set the flow</h2>
<p>The outdoor air coil sees air below freezing, so the loop must be protected. Propylene glycol at 30 to 40 percent by volume is typical in most of Canada and the northern US. Size for burst protection at the lowest outdoor temperature the coil can see, with a margin, and check the edition of the local code if it governs glycol type.</p>
<p>Best loop effectiveness occurs when the fluid heat capacity rate matches the air side heat capacity rate. For the air side:</p>
<p class="formula">C_air = 1.08 × CFM (Btu/h·F, standard air)</p>
<p>For the glycol side:</p>
<p class="formula">C_fluid = gpm × 8.34 × SG × cp × 60 (Btu/h·F)</p>
<p>Set C_fluid equal to C_air and solve for gpm.</p>

<h3>Worked example</h3>
<p>Supply and exhaust are both 12,000 cfm. C_air = 1.08 × 12,000 = 12,960 Btu/h·F.</p>
<p>For 35 percent propylene glycol near 30 F, take SG ≈ 1.04 and cp ≈ 0.90 Btu/lb·F. One gpm then carries 8.34 × 1.04 × 0.90 × 60 ≈ 468 Btu/h·F.</p>
<p>Required flow = 12,960 ÷ 468 ≈ 27.7 gpm. Round to 28 gpm.</p>
<p>With outdoor air at −10 F, exhaust at 72 F and a loop effectiveness of 55 percent, the recovered heat is 0.55 × 12,960 × (72 − (−10)) ≈ 584,000 Btu/h, and the supply air leaves the outdoor coil at about −10 + 0.55 × 82 ≈ 35 F.</p>
<p>The fluid temperature change at 28 gpm is 584,000 ÷ (28 × 468) ≈ 44.6 F, which is a typical order for a balanced loop.</p>
<p class="note">Glycol properties change with temperature and concentration. Use the manufacturer's data or a published property table at the average loop temperature, not a single fixed value.</p>

<h2>Step 4: Size the pump and piping</h2>
<ol>
<li>Lay out the piping route between the two coils and take off the equivalent length, including fittings, valves and strainers.</li>
<li>Size pipe for velocities around 4 to 6 ft/s and reasonable friction loss, and correct friction for glycol viscosity, which rises sharply at low temperature.</li>
<li>Add both coil fluid pressure drops, the control valve drop and the strainer. The control valve should take a meaningful share of the total for good authority.</li>
<li>Select the pump at the coldest expected fluid temperature, where viscosity is highest. A variable speed drive allows flow trim during balancing and part-load operation.</li>
<li>Add an expansion tank sized for glycol, an air separator, a fill and makeup arrangement with a glycol feeder, and a relief valve.</li>
</ol>

<h2>Step 5: Add frost and capacity controls</h2>
<p>The exhaust coil frosts if the fluid entering it is colder than the freezing point at its surface while the exhaust is humid. Control the temperature of the fluid entering the exhaust coil:</p>
<ol>
<li>Install a three-way mixing valve at the exhaust coil inlet that blends warm fluid leaving the exhaust coil with cold fluid returning from the outdoor coil.</li>
<li>Set the minimum entering fluid temperature a few degrees above 32 F, based on exhaust dew point. Some designers use the exhaust coil leaving air temperature as the controlled variable instead.</li>
<li>In mild weather, modulate the same valve or reduce pump speed to stop the loop from heating supply air when cooling is needed.</li>
<li>In summer, run the loop for precooling only when outdoor air is warmer than exhaust by enough to beat pump energy, typically several degrees.</li>
</ol>
<p class="warn">Never let the pump stop while the outdoor coil sees subfreezing air with weak glycol. Confirm glycol concentration at startup and annually.</p>

<h2>Step 6: Verify and document</h2>
<ol>
<li>Check the air pressure drop of both coils against the fan selections.</li>
<li>Put the loop effectiveness, fluid flow, glycol type and concentration on the schedule.</li>
<li>Specify test ports or temperature sensors at each coil inlet and outlet so performance can be verified during balancing.</li>
<li>Write the control sequence, including frost limit, economizer lockout and pump failure alarms.</li>
</ol>
<p>For a loop where both coils are in new air handling units, our <a href="<?= url('products/custom-air-handlers') ?>">custom air handlers</a> can be built with the coils, drain pans and access sections arranged for this duty.</p>
<?php guide_end([
    ['How do I size the glycol flow for a runaround loop?', 'Match the fluid heat capacity rate to the air heat capacity rate. Compute 1.08 times the cfm for the air side, then divide by the Btu per hour per degree that one gpm of your glycol carries, usually about 450 to 480 for 30 to 40 percent propylene glycol.'],
    ['What effectiveness can a runaround coil loop achieve?', 'Most well-designed loops reach about 45 to 60 percent sensible effectiveness. Higher values need deep coils and low face velocity, which raise cost and air pressure drop.'],
    ['How do you prevent frost on the exhaust coil of a runaround loop?', 'Use a three-way mixing valve or pump speed control to hold the fluid entering the exhaust coil above the frost point. The controlled temperature is set a few degrees above freezing based on the exhaust air dew point.'],
]);
