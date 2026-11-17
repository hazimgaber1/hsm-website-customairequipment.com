<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('retrofit-electrical-capacity'); ?>
<p class="lede">Replacing an air handler or its fans changes the electrical load the building must carry, so before the new equipment is ordered someone should confirm the available capacity at the service, the panel and the feeder, check voltage and conductor sizing for the new loads, and plan where any new VFDs and disconnects will go.</p>

<h2>Why retrofits surprise the electrical system</h2>
<p>An old air handler's electrical installation was sized for whatever it had when it was built, sometimes with no margin and sometimes with generous margin that later projects have used up. A retrofit can change the load in several directions at once: a more efficient fan may lower running current, an added electric heater or humidifier may raise it, and a fan array may replace one large motor with many smaller ones. Each change has implications for conductors, protection, disconnects and the space they occupy. Discovering a capacity problem after equipment arrives can stall a project for months while switchgear is ordered.</p>

<h2>Start at the service and work toward the unit</h2>
<h3>Service capacity</h3>
<p>The building service has a rated capacity, and its actual peak demand can be determined from utility demand records or a recorded load study. The difference is what is available for new or increased loads, subject to the rules for calculating load in the electrical code in force: the Canadian Electrical Code (CSA C22.1) in Canada or the National Electrical Code (NFPA 70) in most US jurisdictions. An electrical engineer should perform this assessment; demand data from the utility is usually the most practical starting point for existing buildings.</p>
<h3>Distribution panel or switchboard</h3>
<p>Even with spare service capacity, the specific panel or motor control centre feeding the unit may be full or near its rating. Check the bus rating, available spaces for new breakers or fused switches, and the condition of old equipment. Very old switchgear may be obsolete, with replacement breakers hard to find.</p>
<h3>Feeder to the unit</h3>
<p>The existing feeder was sized for the old unit's load. Compare the new unit's minimum circuit ampacity (MCA) and maximum overcurrent protection (MOP or MOCP) values, published on the nameplate and submittal, with the feeder conductor size and the protective device. If the new MCA exceeds the conductor ampacity, the feeder must be replaced. Long feeder runs also need a voltage drop check.</p>

<h2>Comparing old and new loads</h2>
<table>
<thead><tr><th>Load change</th><th>Typical electrical effect</th></tr></thead>
<tbody>
<tr><td>Belt-drive fan replaced by direct-drive plenum fan of similar duty</td><td>Running current often drops; MCA may be similar because motor size is chosen for peak duty</td></tr>
<tr><td>Single motor replaced by fan array</td><td>Total load similar, but multiple branch circuits or a distribution panel needed at the unit</td></tr>
<tr><td>VFD added to an across-the-line motor</td><td>Drive input current and harmonics must be considered; may need line reactors or filters</td></tr>
<tr><td>Electric heat added or enlarged</td><td>Large step increase; often the reason a service upgrade is triggered</td></tr>
<tr><td>Electric steam humidifier added</td><td>Significant added load, especially in cold climates</td></tr>
<tr><td>Energy recovery wheel added</td><td>Small motor load, but adds a circuit and controls</td></tr>
</tbody>
</table>
<p class="note">Use the new unit's actual nameplate electrical data, not the sum of motor horsepowers. MCA accounts for the largest motor at 125% and other loads per code, which differs from a simple total.</p>

<h2>Adding VFDs in a retrofit</h2>
<p>Many retrofits add variable frequency drives to fans that previously ran at constant speed. Points to review:</p>
<ul>
<li><strong>Location.</strong> Drives need clear working space in front of them, ventilation for heat rejection, and protection from moisture. Mechanical rooms in older buildings often lack wall space that meets working clearance rules; see <a href="<?= url('guides/electrical-working-clearances') ?>">electrical working clearances</a>.</li>
<li><strong>Motor compatibility.</strong> Older motors not rated for inverter duty can suffer insulation stress from drive output. Replace them or add output filtering as recommended by the drive manufacturer.</li>
<li><strong>Cable length.</strong> Long motor leads between drive and motor can cause reflected wave voltage peaks; see <a href="<?= url('guides/vfd-cable-length-reflected-wave') ?>">VFD cable length and reflected wave</a>.</li>
<li><strong>Harmonics.</strong> Several drives added to a building can raise harmonic distortion on the distribution system. The engineer may check against the criteria the project uses, often based on IEEE 519.</li>
<li><strong>Bypass.</strong> Decide whether a bypass is needed for critical fans if the drive fails.</li>
</ul>

<h2>Voltage and disconnects</h2>
<p>New equipment should be ordered for the voltage that is actually available at the unit, measured under load. Common North American motor voltages include 208 V, 230 V and 460 V in the US, and 208 V and 575/600 V in Canada; check what the building has rather than assuming. Each unit also needs a lockable disconnecting means within sight of the equipment as required by the electrical code; a retrofit that adds a fan array, VFDs or electric heat may need new or relocated disconnects.</p>

<h2>Sequencing the electrical work</h2>
<ol>
<li>Obtain demand data and existing single-line diagrams early in design.</li>
<li>Get preliminary electrical data from the manufacturer during selection, before the unit design is frozen.</li>
<li>Have the electrical engineer confirm capacity and identify upgrades.</li>
<li>Order long-lead switchgear, transformers or panels at the same time as the air handler.</li>
<li>Install new feeders and disconnects before the mechanical outage so the cutover is a termination, not a construction project.</li>
</ol>
<p>Short-circuit current rating coordination is a separate topic and is handled in the codes and standards guides. For overall outage planning, see the <a href="<?= url('guides/retrofit-shutdown-planning-checklist') ?>">retrofit shutdown planning checklist</a>.</p>
<?php guide_end([
    ['Does replacing an AHU require an electrical upgrade?', 'Not always. A more efficient fan can lower running load, but added electric heat, humidifiers or larger motors can exceed existing feeder or service capacity. Compare the new unit\'s nameplate MCA and MOP with the existing feeder and protection.'],
    ['What is MCA on an air handler nameplate?', 'Minimum circuit ampacity is the minimum conductor ampacity required to supply the unit, calculated by code rules that weight the largest motor more heavily. It is used to size the feeder, along with the maximum overcurrent protection value.'],
    ['Can I add a VFD to an old fan motor?', 'You can, but check whether the motor insulation is rated for inverter duty and whether the cable length could cause voltage spikes. Older motors may need replacement or output filters, and the drive needs suitable space and clearances.'],
]);
