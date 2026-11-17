<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('vfd-nuisance-tripping-troubleshooting'); ?>
<p class="lede">Most fan drive trips fall into three groups: overcurrent (usually acceleration too fast, starting into a spinning wheel or a mechanical load problem), overvoltage (usually deceleration too fast or a windmilling fan pushing energy back into the drive) and ground fault (insulation breakdown, moisture or cable capacitance). Read the fault log, note when the trip happens, then work from the cause list for that fault.</p>

<h2>Start with the fault history</h2>
<p>Before changing parameters, gather what the drive already knows:</p>
<ul>
<li>The exact fault code and the drive manufacturer's description.</li>
<li>When the trip occurs: at start, during acceleration, at steady speed, during deceleration or on stop.</li>
<li>Output frequency, current and DC bus voltage at the time of the fault, which most drives store in the fault log.</li>
<li>Whether the trip correlates with weather, time of day, other equipment starting or utility events.</li>
</ul>
<p>The timing alone often points to the cause.</p>

<h2>Overcurrent trips</h2>
<h3>Trip during acceleration</h3>
<p><strong>Cause:</strong> acceleration time too short for the wheel's inertia. Large or heavy wheels take time to bring up to speed, and a short ramp demands more current than the drive can supply.</p>
<p><strong>Check:</strong> compare acceleration time with the manufacturer's recommendation or the fan's inertia. Watch output current during a start.</p>
<p><strong>Fix:</strong> lengthen acceleration time; use an S-curve. Typical fan ramps are tens of seconds for large wheels.</p>

<h3>Trip at start when the fan is already turning</h3>
<p><strong>Cause:</strong> the drive starts at zero frequency into a wheel already windmilling forward or backward from airflow through other fans, stack effect or a running return fan.</p>
<p><strong>Check:</strong> watch the wheel before a start. In arrays, stopped fans often windmill backward.</p>
<p><strong>Fix:</strong> enable flying start (catch a spinning load) so the drive finds the wheel speed and synchronizes; or apply DC injection braking before starting; or prevent windmilling with backdraft dampers.</p>

<h3>Trip at steady speed</h3>
<p><strong>Cause:</strong> real overload, such as a fan selected too close to motor capacity, dense cold air, failing bearings, a wheel rubbing the inlet cone, or a motor winding short.</p>
<p><strong>Check:</strong> compare running current with motor nameplate; inspect bearings and wheel clearance; insulation-test the motor.</p>
<p><strong>Fix:</strong> correct the mechanical fault; reselect the motor and drive if the load is genuinely higher than design; see <a href="<?= url('guides/motor-sizing-service-factor') ?>">sizing fan motors</a>.</p>

<h3>Instantaneous overcurrent with no obvious load</h3>
<p><strong>Cause:</strong> short circuit in the motor cable or winding, a damaged output device, or a contactor or disconnect opening and closing on the drive output while running.</p>
<p><strong>Check:</strong> megger the cable and motor (disconnected from the drive); inspect any output-side switching devices and their interlocks.</p>
<p><strong>Fix:</strong> repair the fault; make sure output disconnects have early-break contacts that stop the drive first.</p>

<h2>Overvoltage trips</h2>
<h3>Trip during deceleration or stop</h3>
<p><strong>Cause:</strong> when the drive lowers frequency faster than the wheel can slow down, the motor acts as a generator and pushes energy into the DC bus, raising its voltage.</p>
<p><strong>Check:</strong> deceleration time and stop mode.</p>
<p><strong>Fix:</strong> lengthen deceleration time, use coast-to-stop where the sequence allows, or enable the drive's overvoltage control (bus voltage regulation). Dynamic braking resistors are rarely needed on fans but can be added.</p>

<h3>Trip at low speed or when stopped, with other fans running</h3>
<p><strong>Cause:</strong> a windmilling fan is overhauling the motor, driving it faster than the commanded speed.</p>
<p><strong>Check:</strong> whether the trip occurs when supply and return fans or array fans are operating at different speeds.</p>
<p><strong>Fix:</strong> raise minimum speed, stop the windmilling with dampers, or adjust the control sequence so fans are not commanded below the airflow pushing through them.</p>

<h3>Trip with no change in fan operation</h3>
<p><strong>Cause:</strong> high supply voltage or line transients, often when power factor correction capacitors switch on or during utility events.</p>
<p><strong>Check:</strong> measure line voltage over time; correlate trips with capacitor switching or other loads.</p>
<p><strong>Fix:</strong> add a line reactor; address utility voltage regulation; correct capacitor control.</p>

<h2>Ground fault trips</h2>
<h3>Trip in wet weather or after washdown</h3>
<p><strong>Cause:</strong> moisture in the motor, junction boxes or conduit reduces insulation resistance.</p>
<p><strong>Check:</strong> insulation resistance test of motor and cable with the drive disconnected; inspect terminal boxes and drain paths. Motors in outdoor units or cooling coil discharge air are most exposed.</p>
<p><strong>Fix:</strong> dry and seal the motor; add space heaters for idle motors; correct conduit drainage and seals.</p>

<h3>Trip only at start on long or multi-motor cable runs</h3>
<p><strong>Cause:</strong> capacitive leakage current to ground through long cables is read by the drive as a ground fault.</p>
<p><strong>Check:</strong> total cable length versus manufacturer limits.</p>
<p><strong>Fix:</strong> output reactor, lower carrier frequency, or shorter leads; see <a href="<?= url('guides/vfd-cable-length-reflected-wave') ?>">long VFD cable runs and reflected wave</a>.</p>

<h3>Persistent trip with healthy motor and cable</h3>
<p><strong>Cause:</strong> internal drive failure or incorrect grounding of the drive.</p>
<p><strong>Fix:</strong> verify grounding and bonding; replace the drive if confirmed faulty.</p>

<h2>Other common trips on fan drives</h2>
<ul>
<li><strong>Undervoltage:</strong> supply sags or brief outages. Enable ride-through and automatic restart with flying start if the application allows.</li>
<li><strong>Drive overtemperature:</strong> blocked heatsink, failed drive cooling fan, or enclosure too hot. Clean, repair cooling, or improve enclosure ventilation; enclosure choice is in <a href="<?= url('guides/vfd-enclosure-types-nema') ?>">VFD enclosure types</a>.</li>
<li><strong>Input phase loss:</strong> blown fuse, loose terminal or utility problem.</li>
<li><strong>Motor overload (I²t):</strong> the drive's motor protection setting is wrong or the motor is genuinely overloaded. Confirm motor nameplate data is entered correctly.</li>
</ul>
<p class="note">Automatic fault reset can keep a fan running through nuisance trips, but limit the number of retries so a real fault is not masked.</p>
<?php guide_end([
    ['Why does my fan VFD trip on overcurrent at start?', 'The usual causes are an acceleration time too short for the wheel\'s inertia, or starting into a wheel already spinning from airflow. Lengthening acceleration time or enabling flying start usually solves it.'],
    ['What causes a VFD overvoltage fault on a fan?', 'Most often the drive is decelerating faster than the wheel can slow, so the motor regenerates into the DC bus. A windmilling fan driven by other fans can cause the same effect.'],
    ['Why does a VFD trip on ground fault in wet weather?', 'Moisture in the motor, terminal boxes or conduit lowers insulation resistance and allows leakage current to ground. Test insulation, dry the motor and correct sealing and drainage.'],
    ['What is flying start on a VFD?', 'Flying start, or catch a spinning load, lets the drive detect the speed of a turning motor and synchronize to it instead of starting from zero, avoiding overcurrent trips.'],
]);
