<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('comparing-fan-energy-between-bids'); ?>
<p class="lede">To compare fan energy between competing AHU selections, get each bidder's fan input power at several airflows along the same system curve, multiply each by the hours the system spends at that airflow, and add up the kilowatt-hours; comparing only the design-point brake horsepower can rank the bids the wrong way round for a VAV system.</p>

<h2>Why the design point is not enough</h2>
<p>Most VAV air handlers spend relatively few hours at design airflow. Fans differ in how their efficiency holds up at part load; a fan array of smaller wheels may behave differently from a single large plenum fan, and EC motors, permanent magnet motors and induction motors on VFDs have different part-load efficiency curves. A selection with the lowest power at design may not have the lowest power at 50% flow, where the system may spend most of its time.</p>

<h2>Step 1: Define the system curve with static pressure control</h2>
<p>A VAV fan does not follow a pure fan-law curve to zero, because duct static pressure is controlled to a setpoint. A practical system curve is:</p>
<p class="formula">TSP(Q) = SP_ctrl + (TSP_design − SP_ctrl) × (Q ÷ Q_design)²</p>
<p>Where SP_ctrl is the portion of pressure held constant by the static pressure setpoint (or its reset minimum), and TSP_design is the total static at design airflow. Internal unit losses (coils, filters) and the variable portion of duct losses fall with the square of flow. Give every bidder the same curve so the comparison is fair. More on the fan and system curve interaction is in <a href="<?= url('guides/fan-curves-and-system-curves') ?>">fan curves and system curves</a>.</p>

<h2>Step 2: Define the operating profile</h2>
<p>Use hours at each airflow fraction, from trend data of a similar building, an energy model, or a reasonable assumption agreed by the design team. Four or five bins are usually enough.</p>
<p class="formula">Annual kWh = Σ (kW_input at bin i × hours in bin i)</p>
<p>kW_input must be <em>input</em> power to the motor or drive, including motor and drive losses, not fan shaft brake horsepower. Ask bidders to state input power directly, or convert with stated motor and drive efficiencies.</p>

<h2>Step 3: Request data from each bidder</h2>
<ol>
<li>Send the system curve definition and bin airflows to every bidder.</li>
<li>Ask for fan speed, brake horsepower, motor and drive efficiency, and input kW at each bin.</li>
<li>Specify the filter condition for the calculation, typically mid-life.</li>
<li>For fan arrays, ask for input power with all fans running at each bin, and state whether staging fans off at low flow is allowed.</li>
</ol>

<h2>Worked example</h2>
<p>A 50,000 CFM (23.6 m³/s) VAV unit, 6,000 operating hours per year. Two bids meet the scheduled duty.</p>
<table>
<thead><tr><th>Airflow bin</th><th>Hours</th><th>Bid A input kW</th><th>Bid B input kW</th></tr></thead>
<tbody>
<tr><td>100% (50,000 CFM)</td><td>500</td><td>52.0</td><td>47.0</td></tr>
<tr><td>80% (40,000 CFM)</td><td>1,500</td><td>30.0</td><td>29.0</td></tr>
<tr><td>60% (30,000 CFM)</td><td>2,500</td><td>17.0</td><td>18.0</td></tr>
<tr><td>40% (20,000 CFM)</td><td>1,500</td><td>9.5</td><td>11.0</td></tr>
</tbody>
</table>
<p><strong>Bid A:</strong> 52.0 × 500 = 26,000; 30.0 × 1,500 = 45,000; 17.0 × 2,500 = 42,500; 9.5 × 1,500 = 14,250. Total = 127,750 kWh/yr.</p>
<p><strong>Bid B:</strong> 47.0 × 500 = 23,500; 29.0 × 1,500 = 43,500; 18.0 × 2,500 = 45,000; 11.0 × 1,500 = 16,500. Total = 128,500 kWh/yr.</p>
<p>Bid B is about 10% better at design, yet uses 750 kWh/yr more because it is less efficient where the system spends most of its hours. At $0.12/kWh, the energy difference is $90/yr in favour of Bid A.</p>

<h2>Step 4: Add demand charges where they apply</h2>
<p>If the utility tariff includes demand charges and the fan's peak operation coincides with the building's peak demand, the design-point difference matters. Bid B draws 5 kW less at design. At an illustrative demand rate of $15 per kW-month for 12 months:</p>
<p class="formula">Demand saving = ΔkW × rate × months = 5 × 15 × 12 = $900/yr</p>
<p>With demand charges included, Bid B saves about $900 − $90 = $810/yr. The ranking flips again. This is why the tariff structure must be part of the comparison.</p>
<p class="note">Demand savings only apply if the fan's peak actually coincides with the billing peak. For many buildings, fan airflow is highest on hot afternoons, which is often when the billing peak occurs, but check.</p>

<h2>Step 5: Interpret and report</h2>
<ul>
<li>Report both annual kWh and annual cost, with the tariff used.</li>
<li>Show the bin table so reviewers can see where differences arise.</li>
<li>Run a sensitivity case with a different profile (for example, more hours at high flow) to see if the ranking is robust.</li>
<li>Express the difference over the expected life if it will feed a broader analysis; a full life-cycle comparison including maintenance and replacement is covered in <a href="<?= url('guides/ahu-life-cycle-cost-analysis') ?>">AHU life-cycle cost analysis</a>.</li>
</ul>

<h2>Common errors</h2>
<ul>
<li>Comparing brake horsepower instead of input power, which ignores motor and drive losses.</li>
<li>Letting each bidder use their own system curve or filter condition.</li>
<li>Using fan-law cube scaling from the design point, which overstates part-load savings for systems with static pressure control.</li>
<li>Ignoring fan array staging options that change part-load power.</li>
<li>Ignoring demand charges, or applying them when the fan peak does not coincide with the billing peak.</li>
</ul>
<p>The fan energy result is one input into levelling competing quotes; see <a href="<?= url('guides/normalizing-ahu-bids') ?>">how to compare and normalize AHU bids</a>.</p>
<?php guide_end([
    ['How do I compare fan energy between two AHU bids?', 'Give both bidders the same system curve and airflow bins, collect input kW at each bin, multiply by hours in each bin, and sum the kilowatt-hours. Add demand charges if the fan peak coincides with the billing peak.'],
    ['Why is design-point fan power misleading for VAV systems?', 'VAV units spend most hours at part load, and fans differ in how efficiency holds up as flow drops. A fan that is best at design can use more energy over a year than one that is better at part load.'],
    ['Should I use brake horsepower or input power for fan energy?', 'Use input power to the motor or drive, which includes motor and drive losses. Brake horsepower is shaft power at the fan and does not reflect what the utility meter records.'],
]);
