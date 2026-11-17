<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('testing-adjusting-balancing'); ?>
<p class="lede">Testing, adjusting and balancing (TAB) is the field process of measuring how an installed HVAC system actually performs and adjusting fans, dampers and valves until airflows and water flows match the design. For an air handler, TAB confirms that the unit delivers design supply, return and outdoor airflow at a known static pressure, and documents every reading in a certified report.</p>

<h2>What TAB covers at the air handler</h2>
<p>TAB is often pictured as someone with a flow hood at ceiling diffusers, but the air handler is the starting point. A balancer cannot proportion airflow at terminals until the unit is delivering the right total. Typical AHU-level work includes:</p>
<ul>
<li>Total supply airflow, return airflow and outdoor airflow, measured and compared with design.</li>
<li>Static pressure profile: external static pressure at the unit, and pressure drops across filters, coils, energy recovery devices and other components.</li>
<li>Fan speed, motor voltage and amperage, and drive frequency at the balanced condition.</li>
<li>Minimum outdoor airflow verification at minimum and maximum supply airflow for VAV units.</li>
<li>Economizer airflow balance, so return and outdoor paths deliver similar airflow as the dampers modulate.</li>
<li>Setting duct static pressure setpoints in coordination with the controls contractor.</li>
<li>Coil water flow, entering and leaving water temperatures, and coil air temperatures where the scope includes hydronics.</li>
</ul>
<p>Measuring airflow in the main duct is usually done with a pitot tube traverse; the calculation itself is in <a href="<?= url('guides/pitot-traverse-airflow-verification') ?>">verifying airflow with a pitot tube traverse</a>. Fans with inlet piezometer rings can also report airflow directly, see <a href="<?= url('guides/fan-inlet-piezometer-airflow-measurement') ?>">fan inlet piezometer airflow measurement</a>.</p>

<h2>The certifying bodies: AABC, NEBB and TABB</h2>
<p>In North America, three organizations certify TAB firms and technicians and publish procedural standards. Specifications commonly require the TAB contractor to be certified by one of them and to follow its procedures.</p>
<table>
<thead><tr><th>Body</th><th>Full name</th><th>What it publishes and certifies</th></tr></thead>
<tbody>
<tr><td>AABC</td><td>Associated Air Balance Council</td><td>National Standards for Total System Balance; certifies independent TAB firms and test and balance engineers; offers a performance guarantee program</td></tr>
<tr><td>NEBB</td><td>National Environmental Balancing Bureau</td><td>Procedural Standards for TAB of environmental systems; certifies firms and qualified supervisors across TAB and other disciplines</td></tr>
<tr><td>TABB</td><td>Testing, Adjusting and Balancing Bureau</td><td>Certifies contractors, supervisors and technicians, closely tied to the sheet metal trade; references ANSI/ASHRAE and industry procedures</td></tr>
</tbody>
</table>
<p>ANSI/ASHRAE Standard 111 covers measurement, testing, adjusting and balancing of building HVAC systems and is often cited alongside the certifying body standards. Check which editions your project specification names, as each organization updates its standards periodically.</p>
<p class="note">Many owners and engineers prefer an independent TAB firm not hired by the installing contractor, to avoid a conflict of interest. AABC membership is limited to independent firms; other bodies certify both independent and contractor-affiliated firms.</p>

<h2>How AHU balancing proceeds</h2>
<h3>Pre-balance review</h3>
<p>The balancer reviews drawings, submittals and the unit's fan curve, and walks the system to confirm it is complete: dampers installed and open, filters clean, coils clean, terminal units operating. Balancing a system with construction filters loaded with dust, or with fire dampers still closed, wastes everyone's time.</p>
<h3>Establishing total airflow</h3>
<p>With all terminals at their design maximum position, the balancer measures total airflow and static pressures. If airflow is low, the cause is located: higher system pressure than design, a fan selection issue, or an installation problem. Fan speed is then adjusted, by VFD frequency or by sheave change on belt drives, to reach design airflow.</p>
<h3>Proportioning and outdoor air</h3>
<p>Branch dampers and terminal settings are proportioned so each outlet gets its share. Minimum outdoor airflow is set and verified, and return and relief airflows are balanced to achieve the intended building pressurization.</p>
<h3>Reporting</h3>
<p>The certified TAB report lists design and measured values for every point, instruments used and their calibration dates, and notes deficiencies. The report goes to the engineer for review and becomes a turnover document.</p>

<h2>Variable-volume units</h2>
<p>A VAV air handler has no single operating point, so balancing has to cover a range. The balancer typically sets total airflow at the design maximum, then drives terminals toward minimum to confirm the outdoor air control still meets its minimum setpoint and that the fan can turn down without the duct static control hunting. The static pressure setpoint is then set at the lowest value that still satisfies the most demanding terminal at design flow. Recording fan speed and static at both maximum and minimum flow gives operators a useful reference for later troubleshooting.</p>

<h2>Where TAB stops and other work begins</h2>
<p>TAB sets and documents the system at its design condition. It does not by itself prove that the control sequences respond correctly to changing conditions; that is the role of <a href="<?= url('guides/functional-performance-testing') ?>">functional performance testing</a>, which often uses the balancer's numbers as its reference. TAB also does not replace the manufacturer's startup, which comes first and verifies the unit itself is installed and operating properly.</p>
<p>Coordinate early. The balancer needs test ports in the unit and in straight duct runs, access to dampers, and a controls contractor available to override sequences. Asking for traverse locations and test ports during design costs little; adding them after insulation is applied costs a great deal.</p>
<?php guide_end([
    ['What is the difference between AABC, NEBB and TABB?', 'All three certify testing, adjusting and balancing firms and personnel in North America and publish procedures. AABC certifies only independent firms, NEBB certifies firms across several building system disciplines, and TABB is closely associated with the sheet metal industry.'],
    ['Does TAB include checking control sequences?', 'Only partly. The balancer sets airflow and pressure setpoints and verifies minimum outdoor air, but proving that sequences respond correctly across operating modes is functional performance testing, usually led by the commissioning provider.'],
    ['Why is airflow low when the AHU is first balanced?', 'Common reasons are higher actual system static pressure than designed, closed dampers, loaded construction filters, or a fan running at reduced speed. The balancer measures the static pressure profile to locate where the extra resistance is.'],
]);
