<?php require dirname(__DIR__) . '/inc/guide.php'; guide_start('custom-vs-semi-custom-vs-catalog-ahus'); ?>
<p class="lede">Catalog air handlers are the fastest and least expensive when the duty fits a standard size; semi-custom units add options and some dimensional freedom within a modular platform; fully custom units are engineered around the project's exact airflow, space, performance and construction requirements, at the price of more engineering, longer lead time and fewer third-party certification options.</p>

<h2>Defining the three categories</h2>
<p>The labels are used loosely in the industry, so it helps to pin them down by what can and cannot change.</p>
<ul>
<li><strong>Catalog (standard) units</strong> come in a fixed range of cabinet sizes, each with a set of pre-engineered coil, fan and filter options. Dimensions are fixed for each size. Selection software picks the size and options; there is little or no engineering on a per-order basis.</li>
<li><strong>Semi-custom (configured) units</strong> are built from a modular platform with more options and some flexibility: cabinet widths and heights in increments, sections arranged in many sequences, a wider range of coils and fans. Departures from the platform rules require engineering approval or are not allowed.</li>
<li><strong>Custom units</strong> are designed for the order. Cross-section, length, section sequence, casing construction, material, fan type and arrangement, access and connections are all chosen for the project. Specialized features such as welded stainless floors, fan arrays with N+1 redundancy, integrated energy recovery or knockdown construction are routine.</li>
</ul>

<h2>Comparison table</h2>
<table>
<thead><tr><th>Factor</th><th>Catalog</th><th>Semi-custom</th><th>Custom</th></tr></thead>
<tbody>
<tr><td>Dimensional flexibility</td><td>Fixed sizes</td><td>Incremental sizes within platform limits</td><td>Any practical dimension</td></tr>
<tr><td>Component choice</td><td>Limited option list</td><td>Broad option list</td><td>Specified by the project; sourced as needed</td></tr>
<tr><td>Casing construction</td><td>One or two standard constructions</td><td>Platform constructions with some upgrades</td><td>Chosen for duty: material, panel thickness, thermal break, floor type</td></tr>
<tr><td>Fit to existing space</td><td>Space must suit the unit</td><td>Moderate fit</td><td>Unit built to suit the space</td></tr>
<tr><td>First cost at a given airflow</td><td>Lowest</td><td>Moderate</td><td>Highest, though the gap narrows at large sizes and for demanding specifications</td></tr>
<tr><td>Lead time</td><td>Shortest; some sizes stocked or quick-ship</td><td>Moderate</td><td>Longest; includes engineering and drawing approval</td></tr>
<tr><td>Third-party certification</td><td>Commonly certified within program scope</td><td>Often certified within program scope</td><td>Frequently outside certification program scope; performance verified by testing and calculation</td></tr>
<tr><td>Engineering input required from designer</td><td>Low</td><td>Moderate</td><td>Higher; detailed specification or performance requirements</td></tr>
<tr><td>Typical airflow range</td><td>Small to mid-size</td><td>Small to large</td><td>Mid-size to very large; also small units with special requirements</td></tr>
</tbody>
</table>

<h2>Flexibility: what you actually gain</h2>
<p>Flexibility is only valuable when the project needs it. A new office building with a generous mechanical room and conventional requirements may be well served by a catalog or semi-custom unit. The case for custom construction strengthens when:</p>
<ul>
<li>The unit must fit an existing room, penthouse or route, as in replacements.</li>
<li>Airflow is large, often above what platform products cover in a single unit.</li>
<li>Performance targets are demanding: low casing leakage, high thermal performance, low sound, or strict hygienic construction.</li>
<li>The application is specialized: hospitals, labs, pharmaceutical, data centres, industrial process.</li>
<li>Low face velocities and pressure drops are wanted for energy reasons, requiring a larger cross-section than standard sizes provide.</li>
</ul>

<h2>Lead time and schedule risk</h2>
<p>Catalog units can ship quickly, sometimes from stock. Semi-custom units are built to order on a standard line. Custom units add engineering, drawing review and often unique materials or components. The difference is rarely just factory time; submittal back-and-forth is frequently the longest part of a custom schedule. Drivers are discussed in <a href="<?= url('guides/ahu-lead-times-procurement') ?>">AHU lead times and procurement timelines</a>.</p>

<h2>Cost: compare at equal performance</h2>
<p>A catalog unit and a custom unit at the same airflow are often not equivalent. The catalog unit may have higher face velocity, higher fan power, a less airtight casing, or no space for the options the specification calls for. When comparing, normalize on performance: same coil face velocity, same casing leakage class, same fan efficiency and redundancy. At that point the price gap often narrows, and for large units it can reverse. Life-cycle considerations are covered in <a href="<?= url('guides/ahu-life-cycle-cost-analysis') ?>">AHU life-cycle cost analysis</a>.</p>

<h2>Certification and verification</h2>
<p>Certification programs, such as AHRI's programs for central station air handlers under AHRI 430 and casing performance under AHRI 1350, have defined scopes. Catalog and many semi-custom units fall within those scopes and carry certified ratings. Fully custom units may fall outside them because of size, construction or configuration. That does not mean their performance is unknown; it means it is verified differently, through component certifications (for example AMCA-certified fan ratings and AHRI 410 coil ratings), manufacturer calculation and factory testing. Owners who need evidence can request factory run tests, casing leakage tests or witness testing.</p>
<p class="note">If the specification requires certification, check whether the unit type and size actually fall within a program's scope before bid; otherwise custom bidders may be excluded unintentionally. Specification wording for certification is covered in <a href="<?= url('guides/certification-requirements-specification') ?>">certification requirements in specifications</a>.</p>

<h2>Choosing the category</h2>
<ol>
<li>Define the non-negotiables: space, airflow, performance and construction.</li>
<li>Check whether a catalog size meets them without compromise. If yes, it is usually the economic choice.</li>
<li>If not, check whether a semi-custom platform can meet them.</li>
<li>If the space, size or performance requirements fall outside platform rules, specify custom construction and allow for the engineering time.</li>
</ol>
<p>When a project falls into that last category, a <a href="<?= url('products/custom-air-handlers') ?>">custom air handler</a> designed around the room and duty is usually the cleaner solution than forcing a platform product to fit.</p>
<?php guide_end([
    ['What is the difference between custom and semi-custom AHUs?', 'Semi-custom units are configured from a modular platform with set size increments and option lists. Custom units are designed for the order, so dimensions, construction, components and arrangement are chosen for the specific project.'],
    ['Are custom air handlers AHRI certified?', 'Some are, but many fully custom units fall outside certification program scopes because of size or construction. Their performance is then verified through certified components, manufacturer calculations and factory testing.'],
    ['When is a catalog air handler the right choice?', 'A catalog unit is usually best when the space is generous, the airflow fits a standard size, and the performance requirements are conventional. It offers the lowest first cost and shortest lead time.'],
]);
