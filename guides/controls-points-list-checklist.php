<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('controls-points-list-checklist'); ?>
<p class="lede">A points list defines every input, output and software value the AHU controller must have, section by section. Use this checklist to build or review one for a custom air handler with factory controls, so nothing the sequence depends on is missing and nothing is left undefined at integration.</p>

<h2>How to use this checklist</h2>
<p>Work through the unit from the outdoor air intake to the supply outlet, then cover the fans, safeties and software points. For each point, record its type (analog input AI, analog output AO, binary input BI, binary output BO, or software value), engineering units and range, whether it is exposed to the BAS, whether it is trended and whether it alarms. Delete items that do not apply; add any the specific unit needs. Points named in the sequence of operation must match this list exactly; see <a href="<?= url('guides/writing-ahu-sequence-of-operation') ?>">how to write a sequence of operation</a>.</p>

<h2>Outdoor air, return and economizer</h2>
<ul>
<li>☐ Outdoor air temperature (AI), or a shared value from the BAS (software)</li>
<li>☐ Outdoor air humidity (AI) if enthalpy high limit or dew point logic is used</li>
<li>☐ Return air temperature (AI)</li>
<li>☐ Return air humidity (AI) where required by the sequence</li>
<li>☐ Mixed air temperature, averaging (AI)</li>
<li>☐ Outdoor air damper command (AO) and position feedback (AI)</li>
<li>☐ Minimum outdoor air damper command (AO) and feedback (AI), if separate</li>
<li>☐ Return air damper command (AO) and feedback (AI)</li>
<li>☐ Relief or exhaust damper command (AO) and feedback (AI)</li>
<li>☐ Outdoor airflow (AI) from an airflow measuring station, or minimum damper differential pressure (AI)</li>
<li>☐ Damper end switches (BI) where proof of position is required</li>
<li>☐ Building static pressure (AI), if controlled by this unit</li>
</ul>

<h2>Filters</h2>
<ul>
<li>☐ Prefilter differential pressure (AI)</li>
<li>☐ Final filter differential pressure (AI)</li>
<li>☐ HEPA or other high-efficiency filter differential pressure (AI), where fitted</li>
<li>☐ Dirty filter alarm (software, from AI and setpoint), with adjustable threshold</li>
</ul>

<h2>Preheat and heating</h2>
<ul>
<li>☐ Preheat coil valve command (AO) and position feedback (AI) where available</li>
<li>☐ Preheat leaving air temperature (AI, averaging)</li>
<li>☐ Heating coil valve command (AO)</li>
<li>☐ Coil pump start (BO) and status (BI), if a pumped coil</li>
<li>☐ Electric heater enable (BO), modulation (AO) and status or fault (BI)</li>
<li>☐ Gas-fired heater enable (BO), firing rate (AO) and flame or fault status (BI)</li>
<li>☐ Low-limit (freeze-stat) status (BI), with hardwired interlock to fan shutdown</li>
<li>☐ Face and bypass damper command (AO), if used</li>
</ul>

<h2>Cooling</h2>
<ul>
<li>☐ Chilled water valve command (AO) and position feedback (AI) where available</li>
<li>☐ Cooling coil leaving air temperature (AI, averaging) for dew point control</li>
<li>☐ DX stage commands (BO) or capacity signal (AO), and condensing unit status and alarm (BI)</li>
<li>☐ Entering and leaving water temperatures (AI), if specified for coil monitoring</li>
<li>☐ Condensate overflow switch (BI), with shutdown or alarm action defined</li>
</ul>

<h2>Humidification and dehumidification</h2>
<ul>
<li>☐ Humidifier enable (BO), capacity (AO) and status or alarm (BI)</li>
<li>☐ Duct high-limit humidity (AI or BI) downstream of the humidifier</li>
<li>☐ Space or return humidity (AI) used for control</li>
<li>☐ Reheat coil valve or hot gas reheat command (AO)</li>
</ul>

<h2>Energy recovery</h2>
<ul>
<li>☐ Wheel enable (BO), speed (AO) and rotation or fault status (BI)</li>
<li>☐ Plate or wheel bypass damper command (AO) and feedback (AI)</li>
<li>☐ Exhaust air leaving temperature (AI) for frost control</li>
<li>☐ Recovery differential pressure (AI) for frost or fouling detection</li>
<li>☐ Runaround loop pump start (BO), status (BI) and valve (AO), if used</li>
</ul>

<h2>Fans</h2>
<ul>
<li>☐ Supply fan start (BO) and status proof by airflow or differential pressure (BI)</li>
<li>☐ Supply fan speed command (AO, or network value for EC motors and drives)</li>
<li>☐ Supply fan speed feedback, power and fault (network or AI/BI)</li>
<li>☐ Supply airflow (AI) from fan inlet piezometer or airflow station</li>
<li>☐ For fan arrays, per-fan status, fault and speed (usually network), plus a summary of fans running</li>
<li>☐ Backdraft damper position switches (BI) per fan, if required</li>
<li>☐ Return or relief fan start, status, speed and airflow, as for supply</li>
<li>☐ VFD bypass status (BI), where a bypass is fitted</li>
<li>☐ Duct static pressure (AI) at the remote sensor location</li>
<li>☐ Discharge plenum static pressure (AI) for high-limit protection</li>
</ul>
<p>Fan array logic that uses these points is described in <a href="<?= url('guides/fan-array-control-sequences') ?>">fan array control sequences</a>.</p>

<h2>Discharge and safeties</h2>
<ul>
<li>☐ Supply air temperature (AI)</li>
<li>☐ Supply air humidity (AI), where required</li>
<li>☐ High static pressure safety switch (BI), manual reset, hardwired to fan shutdown</li>
<li>☐ Low static (suction) pressure safety switch (BI) on the inlet side, where required</li>
<li>☐ Duct smoke detector status (BI) and fire alarm shutdown input (BI)</li>
<li>☐ Smoke damper commands (BO) and end switches (BI), where part of the unit</li>
<li>☐ Smoke control override inputs from the fire alarm or smoke control system (BI), if applicable</li>
<li>☐ Emergency stop (BI), where required</li>
</ul>

<h2>Software and integration points</h2>
<ul>
<li>☐ Occupancy schedule and current mode (software)</li>
<li>☐ All setpoints referenced in the sequence, each writable as appropriate</li>
<li>☐ Reset outputs: current duct static setpoint, current SAT setpoint, request counts</li>
<li>☐ Calculated values: outdoor air fraction, economizer status, high-limit status</li>
<li>☐ Alarm points with priority and latching behaviour</li>
<li>☐ Fault detection results, if AFDD is included</li>
<li>☐ Run-hour totals for fans, wheels and pumps</li>
<li>☐ Energy meter values, if a meter is supplied</li>
<li>☐ Controller health: communication status, battery, time synchronization</li>
<li>☐ Points the BAS may write (setpoints, schedules, overrides) clearly separated from read-only points</li>
</ul>

<h2>Information to record for every point</h2>
<table>
<thead><tr><th>Column</th><th>Why it matters</th></tr></thead>
<tbody>
<tr><td>Point name and description</td><td>Matches the sequence; follows owner naming standard</td></tr>
<tr><td>Type (AI, AO, BI, BO, software)</td><td>Defines controller I/O count</td></tr>
<tr><td>Units and range</td><td>Prevents scaling errors</td></tr>
<tr><td>Device and location</td><td>Tells installers where it goes</td></tr>
<tr><td>Factory mounted or field supplied</td><td>Sets scope between manufacturer and contractor</td></tr>
<tr><td>BAS exposure and access</td><td>Defines integration</td></tr>
<tr><td>Trend interval</td><td>Supports commissioning and fault detection</td></tr>
<tr><td>Alarm limits and priority</td><td>Defines operator response</td></tr>
</tbody>
</table>
<p class="note">The protocol used to expose these points to the BAS is a separate decision, covered in <a href="<?= url('guides/bacnet-vs-modbus-integration') ?>">BACnet vs Modbus</a>.</p>
<?php guide_end([
    ['What is a controls points list?', 'It is a table of every hardware input and output and every software value an air handler controller uses, with type, units, range, location, BAS access, trending and alarm details. It is the reference for programming, installation and integration.'],
    ['Which AHU points are most often missed?', 'Damper position feedback, per-fan status in fan arrays, filter differential pressure for each bank, condensate overflow switches, and software points such as reset setpoints and request counts are commonly left out.'],
    ['Should the points list show who supplies each device?', 'Yes. Marking each point as factory mounted or field supplied prevents gaps and duplication between the AHU manufacturer and the controls contractor, especially for remote sensors.'],
]);
