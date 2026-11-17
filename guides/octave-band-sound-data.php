<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('octave-band-sound-data'); ?>
<p class="lede">AHU sound data is a table of sound power levels split into octave bands, usually 63 Hz to 8,000 Hz, with separate rows for the inlet, discharge and casing-radiated paths. Read it band by band and path by path; a single overall number hides almost everything an acoustician needs.</p>

<h2>What an octave band is</h2>
<p>An octave is a frequency range whose upper limit is twice its lower limit. HVAC data uses the standard octave bands named by their centre frequencies:</p>
<table>
<thead><tr><th>Band</th><th>Centre frequency</th><th>Approximate range</th><th>Typical HVAC sources</th></tr></thead>
<tbody>
<tr><td>1</td><td>63 Hz</td><td>44 to 88 Hz</td><td>Fan rumble, turbulence, low-speed blade pass of large wheels</td></tr>
<tr><td>2</td><td>125 Hz</td><td>88 to 177 Hz</td><td>Fan broadband noise, duct rumble</td></tr>
<tr><td>3</td><td>250 Hz</td><td>177 to 355 Hz</td><td>Fan noise, blade pass of many plenum fans</td></tr>
<tr><td>4</td><td>500 Hz</td><td>355 to 710 Hz</td><td>Fan and air noise, damper noise</td></tr>
<tr><td>5</td><td>1,000 Hz</td><td>710 to 1,420 Hz</td><td>Small-fan blade pass, air turbulence at fittings</td></tr>
<tr><td>6</td><td>2,000 Hz</td><td>1,420 to 2,840 Hz</td><td>Regenerated noise, high-velocity hiss</td></tr>
<tr><td>7</td><td>4,000 Hz</td><td>2,840 to 5,680 Hz</td><td>Hiss at grilles and dampers, motor and drive whine</td></tr>
<tr><td>8</td><td>8,000 Hz</td><td>5,680 to 11,360 Hz</td><td>Drive switching noise, very high-velocity air</td></tr>
</tbody>
</table>
<p>Some reports add a 31.5 Hz band. It is rarely tested accurately in standard reverberant rooms, so treat values there with caution and confirm whether they were measured or extrapolated.</p>

<h2>Why the low bands matter most</h2>
<p>Duct lining, silencers and ceiling plenums attenuate high frequencies efficiently and low frequencies poorly. A table can show a high 2 kHz value that will vanish by the time air reaches the room, while a 63 Hz value only a few decibels lower will pass almost untouched through the ductwork and casing. When comparing two selections, look first at 63, 125 and 250 Hz. Those bands drive most complaints about rumble, and they also drive the cost of attenuation, because low-frequency silencers are long and pressure-hungry.</p>
<p class="note">A unit that is "5 dB quieter overall" can be louder where it counts. Always compare bands, not totals.</p>

<h2>The three data sets: inlet, discharge and casing-radiated</h2>
<p>A complete data sheet lists sound power for each opening or surface through which sound leaves the unit:</p>
<ul>
<li><strong>Discharge (supply outlet):</strong> sound power travelling down the supply duct toward the occupied spaces. Usually the largest number and the one most often attenuated with silencers.</li>
<li><strong>Inlet (return or outdoor-air opening):</strong> sound travelling back upstream through the return duct or out of the outdoor intake. Return paths are often short and lightly attenuated, so inlet data frequently governs.</li>
<li><strong>Casing-radiated:</strong> sound passing through the unit's panels into the mechanical room or to the outdoors. It depends on casing construction and is reported as the total power radiated by the casing surface.</li>
</ul>
<p>Some manufacturers also report "fan-only" sound power at the wheel. That is not the same as unit discharge data, because coils, filters, plenums and lined sections between the fan and the opening absorb some energy and the casing changes how it radiates. Ask which one you are looking at. How each set reaches an occupant is explained in <a href="<?= url('guides/inlet-discharge-casing-radiated-sound') ?>">inlet, discharge and casing-radiated sound paths</a>.</p>

<h2>A-weighting and what it hides</h2>
<p>Human hearing is less sensitive at low frequencies. A-weighting applies a correction to each band to approximate that response, then sums the result into one dBA value. The standard A-weighting corrections at octave-band centres are:</p>
<table>
<thead><tr><th>63</th><th>125</th><th>250</th><th>500</th><th>1k</th><th>2k</th><th>4k</th><th>8k</th></tr></thead>
<tbody><tr><td>−26.2</td><td>−16.1</td><td>−8.6</td><td>−3.2</td><td>0</td><td>+1.2</td><td>+1.0</td><td>−1.1</td></tr></tbody>
</table>
<p>The 63 Hz correction subtracts 26 dB before summing. That is why a fan with a strong rumble can still show a modest dBA. A-weighted sound power (dBA Lw) is useful for quick ranking of similar equipment and for outdoor noise screening, but it should never replace octave-band data in a design calculation. For how weighting relates to room criteria, see <a href="<?= url('guides/nc-vs-rc-vs-dba-criteria') ?>">NC vs RC vs dBA</a>.</p>

<h2>Reading a data sheet line by line</h2>
<p>Take this example discharge row for a single plenum fan selection:</p>
<table>
<thead><tr><th>Path</th><th>63</th><th>125</th><th>250</th><th>500</th><th>1k</th><th>2k</th><th>4k</th><th>8k</th><th>LwA</th></tr></thead>
<tbody>
<tr><td>Discharge</td><td>94</td><td>92</td><td>91</td><td>88</td><td>85</td><td>81</td><td>77</td><td>72</td><td>91</td></tr>
<tr><td>Inlet</td><td>92</td><td>90</td><td>88</td><td>84</td><td>80</td><td>76</td><td>72</td><td>67</td><td>87</td></tr>
<tr><td>Casing</td><td>86</td><td>80</td><td>72</td><td>64</td><td>58</td><td>52</td><td>47</td><td>42</td><td>68</td></tr>
</tbody>
</table>
<p>What to notice:</p>
<ol>
<li><strong>The spectrum slopes downward</strong> at roughly 2 to 4 dB per octave on the airside paths, which is typical of broadband fan noise. A band that sticks up above that slope usually indicates a tone, often blade pass; see <a href="<?= url('guides/fan-blade-pass-tonal-noise') ?>">fan blade pass frequency and tonal noise</a>.</li>
<li><strong>The casing row falls steeply</strong> because panels block high frequencies much better than low ones. At 63 Hz the casing is only 8 dB below the discharge, so in a lightweight mechanical room casing noise can still matter.</li>
<li><strong>The A-weighted totals</strong> are dominated by 250 Hz through 1 kHz, even though 63 Hz is the highest unweighted band.</li>
</ol>

<h2>Questions to ask before using the numbers</h2>
<ul>
<li>Is the data at the scheduled airflow and static pressure, or at a catalogue rating point?</li>
<li>Was it tested, or calculated from fan-only data with corrections? If tested, to which standard (for example AHRI 260 for ducted units, AMCA 300 for fans)?</li>
<li>Does it include the effect of the actual unit sections, such as silencers, lined plenums or coils between fan and opening?</li>
<li>For fan arrays, is it the combined level of all running fans at the operating speed?</li>
<li>Is 63 Hz data measured, or omitted because the test room could not qualify it?</li>
</ul>
<p>Getting clear answers to these questions before a design review saves rework later, when an acoustician pushes the data through the duct and room path.</p>
<?php guide_end([
    ['What does 63 Hz mean on an AHU sound data sheet?', 'It is the octave band centred on 63 Hz, covering roughly 44 to 88 Hz. It captures low-frequency rumble, which is hard to attenuate and passes easily through ducts and walls. It is often the band that decides whether a space meets its criterion.'],
    ['Why are inlet and discharge sound levels different?', 'The fan radiates different energy upstream and downstream, and the sections between the fan and each opening absorb different amounts. Coils, filters and lined plenums on the inlet side can reduce inlet levels, while a short discharge plenum may add little attenuation.'],
    ['Can I use dBA sound power to compare two air handlers?', 'Only as a rough first screen of similar units. A-weighting suppresses low frequencies by up to 26 dB, so two units with the same dBA can have very different low-frequency content. Use octave-band data for any decision.'],
]);
