<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('hazardous-location-motors'); ?>
<p class="lede">A fan motor in a hazardous location must be listed for the area's classification: the type of hazard (gas, dust or fibers), how often it is present, and, for gases and dusts, the group and the maximum surface temperature allowed. In the United States that classification comes from the National Electrical Code (NFPA 70); in Canada from the Canadian Electrical Code, Part I (CSA C22.1). Both recognize the Class/Division system and the Zone system.</p>

<h2>Who classifies the area</h2>
<p>Area classification is not chosen by the fan supplier. The owner, typically with a process safety or electrical engineer, classifies each area based on the materials handled, release sources and ventilation, following the electrical code and recognized practices (for example NFPA 497 for flammable gases and liquids and NFPA 499 for combustible dusts, where used). The classification appears on electrical drawings, and the motor must be selected to match.</p>

<h2>The Class/Division system</h2>
<table>
<thead><tr><th>Class</th><th>Hazard</th><th>Groups</th></tr></thead>
<tbody>
<tr><td>Class I</td><td>Flammable gases or vapors</td><td>A (acetylene), B (hydrogen and similar), C (ethylene and similar), D (propane, gasoline, natural gas and similar)</td></tr>
<tr><td>Class II</td><td>Combustible dusts</td><td>E (metal dusts), F (carbonaceous dusts), G (other dusts such as grain, flour, plastics, wood)</td></tr>
<tr><td>Class III</td><td>Ignitable fibers and flyings</td><td>No groups</td></tr>
</tbody>
</table>
<p><strong>Division 1</strong> means the hazard is present, or likely to be present, under normal operating conditions, or frequently due to maintenance or leakage. <strong>Division 2</strong> means the hazard is present only under abnormal conditions, such as a container rupture or ventilation failure.</p>
<p>A motor is listed for specific classes, divisions and groups, and marked accordingly, for example Class I, Division 1, Group D.</p>

<h2>The Zone system</h2>
<p>The Zone system, aligned with IEC practice, divides areas more finely:</p>
<table>
<thead><tr><th>Gas zones</th><th>Dust zones</th><th>Meaning</th></tr></thead>
<tbody>
<tr><td>Zone 0</td><td>Zone 20</td><td>Hazard present continuously or for long periods</td></tr>
<tr><td>Zone 1</td><td>Zone 21</td><td>Hazard likely in normal operation</td></tr>
<tr><td>Zone 2</td><td>Zone 22</td><td>Hazard not likely in normal operation, and only briefly if it occurs</td></tr>
</tbody>
</table>
<p>Gas groups in the Zone system are IIA, IIB and IIC (IIC being the most easily ignited, including hydrogen and acetylene). Dust groups are IIIA, IIIB and IIIC. In Canada, the CEC has adopted the Zone system as the primary method for new installations of flammable gas and vapor areas, while recognizing Class/Division for existing installations and for dusts; check the current CEC edition and provincial amendments. In the U.S., the NEC permits either system.</p>
<p class="note">Zone 0 and Zone 20 areas generally do not permit motors at all, except with very specific protection methods. Fan motors are usually located in Zone 1/21, Zone 2/22 or Division 1/2 areas, or outside the hazardous area entirely.</p>

<h2>Temperature codes</h2>
<p>Every hazardous gas or dust has an autoignition temperature. The motor's maximum surface temperature, internal or external depending on the protection method, must be below it. Motors are marked with a temperature code (T-code):</p>
<table>
<thead><tr><th>T-code</th><th>Maximum surface temperature</th></tr></thead>
<tbody>
<tr><td>T1</td><td>450°C (842°F)</td></tr>
<tr><td>T2</td><td>300°C (572°F)</td></tr>
<tr><td>T3</td><td>200°C (392°F)</td></tr>
<tr><td>T4</td><td>135°C (275°F)</td></tr>
<tr><td>T5</td><td>100°C (212°F)</td></tr>
<tr><td>T6</td><td>85°C (185°F)</td></tr>
</tbody>
</table>
<p>The North American Class/Division system also uses subdivisions (T2A, T2B, T3A and so on) between these values. Select a T-code lower than the autoignition temperature of the most easily ignited substance present. For dusts, the layer ignition temperature also matters, because a dust layer on the motor insulates it and raises surface temperature.</p>

<h2>Protection methods</h2>
<ul>
<li><strong>Explosion-proof (flameproof, Ex d):</strong> the enclosure is strong enough to contain an internal explosion and has flame paths that cool escaping gases so they cannot ignite the surrounding atmosphere. Used in Class I Division 1 and Zone 1.</li>
<li><strong>Dust-ignition-proof (Ex t):</strong> the enclosure excludes dust and limits surface temperature. Used in Class II areas and dust zones.</li>
<li><strong>Increased safety (Ex e or Ex ec):</strong> construction measures that prevent arcs, sparks and hot spots in normal operation. Common for Zone 1 and Zone 2 motors.</li>
<li><strong>Non-sparking (Ex nA / Ex ec) and Division 2 motors:</strong> motors without arcing devices or hot surfaces in normal operation, suitable for Division 2 or Zone 2. Many standard TEFC induction motors without brushes or switches qualify for Class I Division 2 when they meet the code's conditions and are marked or documented accordingly.</li>
<li><strong>Pressurized (Ex p):</strong> enclosure purged and pressurized with clean air. Used for large motors.</li>
</ul>

<h2>Variable-speed operation</h2>
<p>A motor listed for a hazardous location on sine-wave power may not be suitable on a VFD, because drive operation raises losses and surface temperatures, and low speed reduces self-cooling. For hazardous location motors on VFDs:</p>
<ul>
<li>The motor must be listed or certified for inverter operation, with marked speed range, torque type and sometimes drive type.</li>
<li>Thermal protection (thermostats or thermistors) is often required and must be wired to shut down the drive.</li>
<li>The VFD itself is usually located outside the hazardous area.</li>
</ul>
<p>Inverter-duty considerations in general are covered in <a href="<?= url('guides/inverter-duty-motor-insulation') ?>">inverter-duty motor insulation</a>.</p>
<p class="warn">Never assume an explosion-proof motor nameplate allows VFD operation. Check the listing for the drive application and the marked speed range.</p>

<h2>Fan-specific considerations</h2>
<ul>
<li>Fan construction matters too. A listed motor does not prevent sparks from a wheel rubbing a housing; see <a href="<?= url('guides/spark-resistant-fans-amca-99-0401') ?>">spark-resistant fan construction</a>.</li>
<li>Belt drives may need static-conductive belts and grounded sheaves in hazardous locations.</li>
<li>Motors outside the airstream (arrangements 1, 9 or 10 with the motor outside the hazardous area, or ducted inlet) can reduce the classification the motor needs, when the area outside the fan is less hazardous.</li>
<li>Bearing condition monitoring reduces the risk of hot bearings becoming an ignition source.</li>
</ul>
<p>For motor and drive specification language more generally, see <a href="<?= url('guides/motor-and-drive-specification') ?>">motor and drive specification</a>.</p>
<?php guide_end([
    ['What is the difference between Class I Division 1 and Division 2?', 'Division 1 means flammable gases or vapors are present or likely under normal operation. Division 2 means they are present only under abnormal conditions, such as a leak or ventilation failure. Division 1 requires more stringent protection such as explosion-proof motors.'],
    ['Does Canada use Zones or Divisions?', 'The Canadian Electrical Code uses the Zone system as the primary method for new installations involving flammable gases and vapors, while recognizing Class/Division in certain cases, including existing installations. Check the current CEC edition and provincial amendments.'],
    ['Can an explosion-proof motor run on a VFD?', 'Only if it is listed or certified for inverter operation, with the speed range and protection marked. VFD operation raises motor temperature, so thermal protection wired to the drive is usually required.'],
]);
